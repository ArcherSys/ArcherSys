<?php
    require_once(dirname(__FILE__) . '/ConnectionBase.php');
    require_once(dirname(__FILE__) . '/StatOutputListItem.php');
    require_once(dirname(__FILE__) . "/../../lib/helpers.php");

    class SFTPConnection extends ConnectionBase {
        protected $protocolName = 'SFTP';
        private $sftpConnection; // c.f. $connection the underlying SSH connection without sftp on top

        protected function handleConnect() {
            return @ssh2_connect($this->configuration->getHost(), $this->configuration->getPort());
        }

        protected function handleDisconnect() {
            /* PHP doesn't provide a SFTP/SSH2 closing function :\ unset and hopefully it gets GC'd away and closes */
            unset($this->sftpConnection);
            $this->sftpConnection = null;

            unset($this->connection);
            $this->connection = null;

            return true;
        }

        protected function handleAuthentication() {
            if ($this->configuration->isAuthenticationModePassword())
                return $this->authenticateByPassword();
            else if ($this->configuration->isAuthenticationModePublicKeyFile())
                return $this->authenticateByPublicKey();
            else if ($this->configuration->isAuthenticationModeAgent())
                return $this->authenticateByAgent();
            else
                throw new Exception(sprintf("Unknown %s authentication type.", $this->protocolName));
        }

        protected function postAuthentication() {
            $this->sftpConnection = ssh2_sftp($this->connection);
        }

        protected function handleListDirectory($path, $showHidden) {
            $handle = @opendir($this->getRemoteFileURL($path));

            if ($handle === FALSE) {
                $message = $this->determineFileError($path);
                // there might be other cases to check for

                $error = array('message' => $message);
                $this->handleOperationError('LIST_DIRECTORY_OPERATION', $path, $error);
            }

            $entries = array();

            try {
                while (false != ($entry = readdir($handle))) {
                    if ($entry == '.' || $entry == '..')
                        continue;

                    if ($showHidden === false && substr($entry, 0, 1) == '.')
                        continue;

                    $fullPath = PathOperations::join($path, $entry);
                    $fileInfo = $this->statRemoteFile($fullPath);
                    $entries[] = new StatOutputListItem($entry, $fileInfo);
                }
            } catch (Exception $e) {
                closedir($handle);
                throw  $e;
            }

            // this should be done in a finally to avoid repeated code but we need to support PHP < 5.5
            closedir($handle);

            return $entries;
        }

        /**
         * @param SFTPTransferOperation $transferOperation
         * @return bool
         */
        protected function handleDownloadFile($transferOperation) {
            $remoteURL = $this->getRemoteFileURL($transferOperation->getRemotePath());

             if(@copy($remoteURL, $transferOperation->getLocalPath()))
                 return true;

            @stat($remoteURL);  // force a better error, if this fails it's probably file does not exist
        }

        /**
         * @param SFTPTransferOperation $transferOperation
         * @return bool
         */
        protected function handleUploadFile($transferOperation) {
            return @copy($transferOperation->getLocalPath(),
                $this->getRemoteFileURL($transferOperation->getRemotePath()));
        }

        protected function handleDeleteFile($remotePath) {
            if(@unlink($this->getRemoteFileURL($remotePath)))
                return true;

            $message = $this->determineFileError($remotePath);

            // if $message is false it is probably that the parent directory is not writable :. permission denied
            @trigger_error($message !== false ? $message : "Permission denied deleting $remotePath");
            return false;
        }

        protected function handleMakeDirectory($remotePath) {
            if (@ssh2_sftp_mkdir($this->sftpConnection, $remotePath))
                return true;

            if (file_exists($this->getRemoteFileURL($remotePath)))
                $message = "File exists at $remotePath";
            else
                $message = $this->determineFileError($remotePath, false);

            @trigger_error($message !== false ? $message : "Unknown error creating directory $remotePath");

            return false;
        }

        protected function handleDeleteDirectory($remotePath) {
            return @ssh2_sftp_rmdir($this->sftpConnection, $remotePath);
        }

        protected function handleRename($source, $destination) {
            if (@ssh2_sftp_rename($this->sftpConnection, $source, $destination))
                return true;

            /* ssh2_sftp_rename doesn't log for error_get_last on failure :\ so determine the failure manually and
               log it */
            $message = $this->determineFileError($source);
            if ($message === false)
                $message = $this->determineFileError($destination, false);

            @trigger_error($message !== false ? $message : "Unknown error moving $source to $destination");
            return false;
        }

        protected function handleChangePermissions($mode, $remotePath) {
            return @ssh2_sftp_chmod($this->sftpConnection, $remotePath, $mode);
        }

        protected function handleCopy($source, $destination) {
            /* SFTP does not provide built in copy functionality, so we copy file down to local and re-upload */
            $tempPath = tempnam(monstaGetTempDirectory(), 'ftp-temp');
            try {
                $this->downloadFile(new SFTPTransferOperation($tempPath, $source));
                $sourceStat = $this->statRemoteFile($source);
                $this->uploadFile(new SFTPTransferOperation($tempPath, $destination,
                    $sourceStat['mode'] & PERMISSION_BIT_MASK));
            } catch (Exception $e) {
                @unlink($tempPath);
                throw $e;
            }

            // this should be done in a finally to avoid repeated code but we need to support PHP < 5.5
            @unlink($tempPath);
        }

        private function authenticateByPassword() {
            return @ssh2_auth_password($this->connection, $this->configuration->getRemoteUsername(),
                $this->configuration->getPassword());
        }

        private function authenticateByPublicKey() {
            if(!defined("SSH_KEY_AUTH_ENABLED") || SSH_KEY_AUTH_ENABLED === false)
                throw new FileSourceAuthenticationException("Public key authentication is disabled by default and must 
                be enabled in configuration to be allowed.",
                    LocalizableExceptionDefinition::$SFTP_AUTHENTICATION_NOT_ENABLED);

            if (@ssh2_auth_pubkey_file($this->connection, $this->configuration->getRemoteUsername(),
                $this->configuration->getPublicKeyFilePath(), $this->configuration->getPrivateKeyFilePath(),
                $this->configuration->getPassword())
            )
                return true;

            if ($this->getPassword() != null)
                throw new FileSourceAuthenticationException("Due to a PHP bug private keys with passwords may not work 
                on Ubuntu/Debian. See https://bugs.php.net/bug.php?id=58573",
                    LocalizableExceptionDefinition::$DEBIAN_PRIVATE_KEY_BUG_ERROR);

            return false;
        }

        private function authenticateByAgent() {
            if(!defined("SSH_AGENT_AUTH_ENABLED") || SSH_AGENT_AUTH_ENABLED === false)
                throw new FileSourceAuthenticationException("SSH agent authentication is disabled by default and must 
                be enabled in configuration to be allowed.",
                    LocalizableExceptionDefinition::$SFTP_AUTHENTICATION_NOT_ENABLED);

            return @ssh2_auth_agent($this->connection, $this->configuration->getRemoteUsername());
        }

        private function statRemoteFile($remotePath) {
            $stat = @ssh2_sftp_stat($this->sftpConnection, $remotePath);
            return $stat;
        }

        private function getRemoteFileURL($remotePath) {
            if ($remotePath == '/')
                $remotePath = '/./';
            return "ssh2.sftp://" . $this->sftpConnection . $remotePath;
        }

        private function determineFileError($remotePath, $expectExists = true) {
            // if a file can't be read, try to find out why
            $remoteURL = $this->getRemoteFileURL($remotePath);

            /* usually we expect the file to exist so it would be an error if it's not there, but for moving a file
            it's expected that the destination is not there so not an error if it doesn't exist */

            if ($expectExists && !file_exists($remoteURL))
                return 'No such file or directory $remotePath';

            if (!is_readable($remoteURL))
                return "Permission denied reading $remotePath";

            if (!is_writeable($remoteURL))
                return "Permission denied writing $remotePath";

            return false; // if it's readable and writeable then no issue
        }

        protected function handleOperationError($operationName, $path, $error, $secondaryPath = null) {
            $fileInfo = null;
            if (strpos($error['message'], "Unable to receive remote file") !== FALSE
                || strpos($error['message'], "Failure creating remote file")
            ) {
                // permission denied and file doesn't exist both generate this error for remote files
                $remotePath = is_null($secondaryPath) ? $path : $secondaryPath;
                $fileInfo = $this->statRemoteFile($remotePath);
            } else if (strpos($error['message'], "Unable to read source file") !== FALSE) {
                // permission denied and file doesn't exist both generate this error for local files
                $fileInfo = @stat($path);
            } else if (strpos($error['message'], "failed to open dir: operation failed"))
                $error['message'] = 'Permission denied';

            if (!is_null($fileInfo)) {
                if ($fileInfo === false) {
                    $error['message'] = 'No such file or directory';
                } else
                    $error['message'] = 'Permission denied';
            }

            parent::handleOperationError($operationName, $path, $error, $secondaryPath);
        }
    }