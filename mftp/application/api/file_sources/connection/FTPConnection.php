<?php

    require_once(dirname(__FILE__) . '/ConnectionBase.php');
    require_once(dirname(__FILE__) . '/../PathOperations.php');
    require_once(dirname(__FILE__) . '/FTPListParser.php');
    require_once(dirname(__FILE__) . '/Exceptions.php');
    require_once(dirname(__FILE__) . "/../../lib/helpers.php");

    function normalizeFTPSysType($sysTypeName) {
        if (stripos($sysTypeName, 'unix') !== false)
            return FTP_SYS_TYPE_UNIX;

        if (stripos($sysTypeName, 'windows') !== false)
            return FTP_SYS_TYPE_WINDOWS;

        throw new UnexpectedValueException(sprintf("Unknown FTP system type \"%s\".", $sysTypeName));
    }

    abstract class FTPTransferMode {
        public static function fromString($transferModeName) {
            switch ($transferModeName) {
                case "ASCII":
                    return FTP_ASCII;
                case "BINARY":
                    return FTP_BINARY;
                default:
                    throw new InvalidArgumentException("FTP Transfer mode must be ASCII or BINARY.");
            }
        }
    }

    class FTPConnection extends ConnectionBase {
        /**
         * @var integer
         */
        private $sysType;

        protected $protocolName = 'FTP';

        public function __construct($configuration) {
            parent::__construct($configuration);
            $this->sysType = null;
        }

        protected function handleConnect() {
            if ($this->configuration->isSSLMode())
                return @ftp_ssl_connect($this->configuration->getHost(), $this->configuration->getPort());

            return @ftp_connect($this->configuration->getHost(), $this->configuration->getPort());
        }

        protected function handleDisconnect() {
            if (@ftp_close($this->connection) === false) {
                $errorMessage =  error_get_last();
                throw new FileSourceConnectionException(
                    sprintf("Failed to close %s connection: %s", $this->getProtocolName(), $errorMessage),
                    LocalizableExceptionDefinition::$FAILED_TO_CLOSE_CONNECTION_ERROR, array(
                    'protocol' => $this->getProtocolName(),
                    'message' => $errorMessage
                ));
            }
        }

        protected function handleAuthentication() {
            return @ftp_login($this->connection, $this->configuration->getUsername(),
                $this->configuration->getPassword());
        }

        protected function configureUTF8() {
            @ftp_raw($this->connection, "OPTS UTF8 ON");
            // this may or may not work, but if it doesn't there's nothing we can do so just carry on
        }

        protected function postAuthentication() {
            $this->configureUTF8();
            $this->configurePassiveMode();
            $this->syncCurrentDirectory();
        }

        public function configurePassiveMode() {
            if (!$this->isAuthenticated())
                throw new FileSourceConnectionException("Can't configure passive mode before authentication.",
                    LocalizableExceptionDefinition::$PASSIVE_MODE_BEFORE_AUTHENTICATION_ERROR);

            if (!@ftp_pasv($this->connection, $this->configuration->isPassiveMode())) {
                $passiveModeBoolName = $this->configuration->isPassiveMode() ? "true" : "false";

                throw new FileSourceConnectionException(sprintf("Failed to set passive mode to %s.",
                    $passiveModeBoolName), LocalizableExceptionDefinition::$FAILED_TO_SET_PASSIVE_MODE_ERROR,
                    array('is_passive_mode' => $passiveModeBoolName));
            }

        }

        protected function handleListDirectory($path, $showHidden) {
            if (!PathOperations::directoriesMatch($path, $this->getCurrentDirectory())) {
                $this->changeDirectory($path);
            }

            $listArgs = $showHidden ? '-a' : null;

            $dirList = @ftp_rawlist($this->connection, $listArgs);

            if ($dirList === false)
                throw new FileSourceOperationException(sprintf("Failed to list directory \"%s\"", $path),
                    LocalizableExceptionDefinition::$LIST_DIRECTORY_FAILED_ERROR,
                    array(
                        'path' => $path,
                    ));

            return new FTPListParser($dirList, $showHidden, $this->getSysType());
        }

        public function getSysType() {
            if (!$this->isConnected())
                throw new FileSourceConnectionException("Attempting to get system type before connection.",
                    LocalizableExceptionDefinition::$GET_SYSTEM_TYPE_BEFORE_CONNECTION_ERROR);

            if ($this->sysType !== null)
                return $this->sysType;

            $sysTypeName = ftp_systype($this->connection);

            if ($sysTypeName === false)
                throw new FileSourceConnectionException("Failed to retrieve system type",
                    LocalizableExceptionDefinition::$GET_SYSTEM_TYPE_FAILED_ERROR);

            $this->sysType = normalizeFTPSysType($sysTypeName);
            return $this->sysType;
        }

        private function syncCurrentDirectory() {
            /* stores the currentDirectory from the server locally */
            if (!$this->isConnected())
                throw new FileSourceConnectionException("Attempting to get working directory before connection.",
                    LocalizableExceptionDefinition::$GET_WORKING_DIRECTORY_BEFORE_CONNECTION_ERROR);

            $this->currentDirectory = ftp_pwd($this->connection);
        }

        public function changeDirectory($newDirectory) {
            $this->ensureConnectedAndAuthenticated('CHANGE_PERMISSIONS_OPERATION');

            if (!PathOperations::directoriesMatch($newDirectory, $this->getCurrentDirectory())) {
                if (!@ftp_chdir($this->connection, $newDirectory))
                    $this->handleOperationError('CHANGE_PERMISSIONS_OPERATION', $newDirectory, error_get_last());

                $this->syncCurrentDirectory();
            }
        }

        /**
         * @param $transferOperation FTPTransferOperation
         * @return bool
         */
        protected function handleDownloadFile($transferOperation) {
            return @ftp_get($this->connection, $transferOperation->getLocalPath(), $transferOperation->getRemotePath(),
                $transferOperation->getTransferMode());
        }

        /**
         * @param $transferOperation FTPTransferOperation
         * @return bool
         */
        protected function handleUploadFile($transferOperation) {
            return @ftp_put($this->connection, $transferOperation->getRemotePath(), $transferOperation->getLocalPath(),
                $transferOperation->getTransferMode());
        }

        protected function handleDeleteFile($remotePath) {
            return @ftp_delete($this->connection, $remotePath);
        }

        protected function handleMakeDirectory($remotePath) {
            return @ftp_mkdir($this->connection, $remotePath);
        }

        protected function handleDeleteDirectory($remotePath) {
            return @ftp_rmdir($this->connection, $remotePath);
        }

        protected function handleRename($source, $destination) {
            return @ftp_rename($this->connection, $source, $destination);
        }

        protected function handleChangePermissions($mode, $remotePath) {
            return @ftp_chmod($this->connection, $mode, $remotePath);
        }

        protected function handleCopy($source, $destination) {
            /* FTP does not provide built in copy functionality, so we copy file down to local and re-upload */
            $tempPath = tempnam(monstaGetTempDirectory(), 'ftp-temp');
            try {
                $this->downloadFile(new FTPTransferOperation($tempPath, $source, FTP_BINARY));
                $this->uploadFile(new FTPTransferOperation($tempPath, $destination, FTP_BINARY));
            } catch (Exception $e) {
                @unlink($tempPath);
                throw $e;
            }

            // this should be done in a finally to avoid repeated code but we need to support PHP < 5.5
            @unlink($tempPath);
        }
    }