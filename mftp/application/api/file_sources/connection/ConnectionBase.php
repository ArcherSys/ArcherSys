<?php
    require_once(dirname(__FILE__) . '/../Validation.php');
    require_once(dirname(__FILE__) . '/../PathOperations.php');
    require_once(dirname(__FILE__) . '/RecursiveFileFinder.php');

    abstract class ConnectionBase {

        /**
         * @var boolean
         */
        protected $connected;
        /**
         * @var boolean
         */
        protected $authenticated;
        /**
         * @var FTPConfiguration
         */
        protected $configuration;
        /**
         * @var string;
         */
        protected $currentDirectory;
        /**
         * @var resource
         */
        protected $connection;
        /**
         * @var string
         */
        protected $protocolName = 'BASE_CLASS';

        /* subclasses should implement these abstract methods to do the actual stuff based on their protocol,
        then return bool for  success/failure, and this class will handle throwing the exception. optionally the handle*
        methods could throw their own exceptions for custom failures */

        abstract protected function handleConnect();
        abstract protected function handleDisconnect();
        /**
         * @return bool
         */
        abstract protected function handleAuthentication();
        abstract protected function postAuthentication();
        /**
         * @param $path string
         * @param $showHidden bool
         * @return ListParser
         */
        abstract protected function handleListDirectory($path, $showHidden);
        /**
         * @param $transferOperation TransferOperation
         * @return bool
         */
        abstract protected function handleDownloadFile($transferOperation);
        /**
         * @param $transferOperation TransferOperation
         * @return bool
         */
        abstract protected function handleUploadFile($transferOperation);
        /**
         * @param $remotePath string
         * @return bool
         */
        abstract protected function handleDeleteFile($remotePath);
        /**
         * @param $remotePath string
         * @return bool
         */
        abstract protected function handleMakeDirectory($remotePath);
        /**
         * @param $remotePath string
         * @return bool
         */
        abstract protected function handleDeleteDirectory($remotePath);
        /**
         * @param $source string
         * @param $destination string
         * @return bool
         */
        abstract protected function handleRename($source, $destination);
        /**
         * @param $mode int
         * @param $remotePath string
         * @return bool
         */
        abstract protected function handleChangePermissions($mode, $remotePath);
        /**
         * @param $source string
         * @param $destination string
         */
        abstract protected function handleCopy($source, $destination);
        
        public function __construct($configuration) {
            $this->configuration = $configuration;
            $this->connected = false;
            $this->authenticated = false;
            $this->currentDirectory = null;
        }

        public function __destruct() {
            if ($this->isConnected())
                $this->disconnect();
        }

        public function connect() {
            $this->connection = $this->handleConnect();
            if ($this->connection === false)
                throw new FileSourceConnectionException(sprintf("%s connection to %s:%d failed.",
                    $this->getProtocolName(), $this->configuration->getHost(), $this->configuration->getPort()),
                    LocalizableExceptionDefinition::$CONNECTION_FAILURE_ERROR, array(
                        'protocol' => $this->getProtocolName(),
                        'host' => $this->configuration->getHost(),
                        'port' => $this->configuration->getPort()
                    ));

            $this->connected = true;
        }
        
        public function disconnect() {
            if (!$this->isConnected())
                throw new FileSourceConnectionException("Can't disconnect a non-connected connection.",
                    LocalizableExceptionDefinition::$UNCONNECTED_DISCONNECT_ERROR);

            $this->handleDisconnect();

            $this->connected = false;
            $this->authenticated = false;
            $this->connection = null;
        }
        
        public function isConnected() {
            return $this->connected;
        }

        public function isAuthenticated() {
            return $this->authenticated;
        }

        public function getCurrentDirectory() {
            return $this->currentDirectory;
        }

        /**
         * @return string
         */
        public function getProtocolName() {
            return $this->protocolName;
        }

        protected function handleOperationError($operationName, $path, $error, $secondaryPath = null) {
            $errorPreface = sprintf("Error during %s %s", $this->getProtocolName(), $operationName);

            if ($secondaryPath != null)
                $formattedPath = sprintf('"%s" / "%s"', $path, $secondaryPath);
            else
                $formattedPath = sprintf('"%s"', $path);

            $localizableContext =  array(
                'protocol' => $this->getProtocolName(),
                'operation' => $operationName,
                'path' => $formattedPath
            );

            if (strpos($error['message'], "No such file or directory") !== FALSE
                || strpos($error['message'], "file doesn't exist") !== FALSE
                || strpos($error['message'], "stat failed for") !== FALSE
            )
                // latter is generated during rename, former for all others
                throw new FileSourceFileDoesNotExistException(sprintf("%s, file not found: %s", $errorPreface,
                    $formattedPath), LocalizableExceptionDefinition::$FILE_DOES_NOT_EXIST_ERROR, $localizableContext);
            else if (strpos($error['message'], "Permission denied") !== FALSE
                || strpos($error['message'], "failed to open stream: operation failed") !== FALSE)
                throw new FileSourceFilePermissionException(sprintf("%s, permission denied at: %s", $errorPreface,
                    $formattedPath), LocalizableExceptionDefinition::$FILE_PERMISSION_ERROR, $localizableContext);
            else if (strpos($error['message'], "File exists") !== FALSE)
                throw new FileSourceFileExistsException(sprintf("%s, file exists at: %s", $errorPreface,
                    $formattedPath), LocalizableExceptionDefinition::$FILE_EXISTS_ERROR, $localizableContext);
            else {
                $localizableContext['message'] = $error['message'];
                throw new FileSourceOperationException(
                    sprintf("%s, at %s: %s", $errorPreface, $formattedPath, $error['message']),
                    LocalizableExceptionDefinition::$GENERAL_FILE_SOURCE_ERROR, $localizableContext);
            }
        }

        protected function ensureConnectedAndAuthenticated($operationName) {
            $errorContext = array('operation' => $operationName, 'protocol' => $this->getProtocolName());

            if (!$this->isConnected())
                throw new FileSourceConnectionException(sprintf("Can't %s file before %s is connected.",
                    $operationName, $this->getProtocolName()),
                    LocalizableExceptionDefinition::$OPERATION_BEFORE_CONNECTION_ERROR,
                    $errorContext);

            if (!$this->isAuthenticated())
                throw new FileSourceAuthenticationException(
                    sprintf("Can't %s file before authentication.", $operationName),
                    LocalizableExceptionDefinition::$OPERATION_BEFORE_AUTHENTICATION_ERROR,
                    $errorContext);
        }

        public function authenticate() {
            if (!$this->isConnected())
                throw new FileSourceConnectionException("Attempting to authenticate before connection.",
                    LocalizableExceptionDefinition::$AUTHENTICATION_BEFORE_CONNECTION_ERROR);

            $login_success = $this->handleAuthentication();

            if (!$login_success)
                throw new FileSourceAuthenticationException(sprintf("%s authentication failed.",
                    $this->getProtocolName()),
                    LocalizableExceptionDefinition::$AUTHENTICATION_FAILED_ERROR,
                    array('protocol' => $this->getProtocolName()));

            $this->authenticated = true;
            $this->postAuthentication();
        }

        /**
         * @param $path
         * @param bool $showHidden
         * @return array
         * @throws FileSourceAuthenticationException
         * @throws FileSourceConnectionException
         */
        public function listDirectory($path, $showHidden = null) {
            $this->ensureConnectedAndAuthenticated('LIST_DIRECTORY_OPERATION');
            return $this->handleListDirectory($path, is_null($showHidden) ? false : $showHidden);
        }

        /**
         * @param $transferOperation TransferOperation
         * @throws FileSourceAuthenticationException
         * @throws FileSourceConnectionException
         * @throws FileSourceFileDoesNotExistException
         * @throws FileSourceFileExistsException
         * @throws FileSourceFilePermissionException
         * @throws FileSourceOperationException
         */
        public function downloadFile($transferOperation) {
            $this->ensureConnectedAndAuthenticated('DOWNLOAD_OPERATION');

            if (!$this->handleDownloadFile($transferOperation))
                $this->handleOperationError('DOWNLOAD_OPERATION', $transferOperation->getLocalPath(), error_get_last(),
                    $transferOperation->getRemotePath());
        }

        /**
         * @param $transferOperation TransferOperation
         * @throws FileSourceAuthenticationException
         * @throws FileSourceConnectionException
         * @throws FileSourceFileDoesNotExistException
         * @throws FileSourceFileExistsException
         * @throws FileSourceFilePermissionException
         * @throws FileSourceOperationException
         */
        public function uploadFile($transferOperation) {
            $this->ensureConnectedAndAuthenticated('UPLOAD_OPERATION');

            if (!$this->handleUploadFile($transferOperation))
                $this->handleOperationError('UPLOAD_OPERATION', $transferOperation->getLocalPath(), error_get_last(),
                    $transferOperation->getRemotePath());
        }

        /**
         * @param $remotePath string
         * @throws FileSourceAuthenticationException
         * @throws FileSourceConnectionException
         * @throws FileSourceFileDoesNotExistException
         * @throws FileSourceFileExistsException
         * @throws FileSourceFilePermissionException
         * @throws FileSourceOperationException
         */
        public function deleteFile($remotePath) {
            $this->ensureConnectedAndAuthenticated('DELETE_FILE_OPERATION');

            if (!$this->handleDeleteFile($remotePath))
                $this->handleOperationError('DELETE_FILE_OPERATION', $remotePath, error_get_last());
        }

        /**
         * @param $remotePath string
         * @throws FileSourceAuthenticationException
         * @throws FileSourceConnectionException
         * @throws FileSourceFileDoesNotExistException
         * @throws FileSourceFileExistsException
         * @throws FileSourceFilePermissionException
         * @throws FileSourceOperationException
         */
        public function makeDirectory($remotePath) {
            $this->ensureConnectedAndAuthenticated('MAKE_DIRECTORY_OPERATION');

            if (!$this->handleMakeDirectory($remotePath))
                $this->handleOperationError('MAKE_DIRECTORY_OPERATION', $remotePath, error_get_last());
        }

        /**
         * @param $remotePath
         * @throws FileSourceAuthenticationException
         * @throws FileSourceConnectionException
         * @throws FileSourceFileDoesNotExistException
         * @throws FileSourceFilePermissionException
         * @throws FileSourceOperationException
         */
        public function makeDirectoryWithIntermediates($remotePath) {
            $fullPath = '';

            $pathComponents = explode("/", $remotePath);

            foreach ($pathComponents as $pathComponent) {
                $fullPath .= "/" . $pathComponent;

                $fullPath = preg_replace("/^\\/+/", "/", $fullPath);

                if($fullPath == "/")
                    // / does not behave like other paths e.g. permission denied/does not exist so treat it special
                    continue;

                try {
                    $this->listDirectory($fullPath);
                } catch (FileSourceFileDoesNotExistException $e) {
                    try {
                        $this->makeDirectory($fullPath);
                    } catch (FileSourceFileExistsException $f) {
                        continue;
                    }
                }
            }
        }

        /**
         * @param $transferOperation
         */
        public function uploadFileToNewDirectory($transferOperation){
            $remotePath = $transferOperation->getRemotePath();
            $remoteDirectory = dirname($remotePath);
            $this->makeDirectoryWithIntermediates($remoteDirectory);
            $this->uploadFile($transferOperation);
        }

        /**
         * @param $remotePath
         * @throws FileSourceAuthenticationException
         * @throws FileSourceConnectionException
         * @throws FileSourceFileDoesNotExistException
         * @throws FileSourceFileExistsException
         * @throws FileSourceFilePermissionException
         * @throws FileSourceOperationException
         */
        public function deleteDirectory($remotePath) {
            $this->ensureConnectedAndAuthenticated('DELETE_DIRECTORY_OPERATION');

            $dirList = $this->listDirectory($remotePath, true);

            foreach ($dirList as $item) {
                $childPath = PathOperations::join($remotePath, $item->getName());
                if ($item->isDirectory())
                    $this->deleteDirectory($childPath);
                else
                    $this->deleteFile($childPath);
            }

            if (!$this->handleDeleteDirectory($remotePath))
                $this->handleOperationError('DELETE_DIRECTORY_OPERATION', $remotePath, error_get_last());
        }

        public function deleteMultiple($remotePathsAndTypes) {
            $this->ensureConnectedAndAuthenticated('DELETE_MULTIPLE_OPERATION');

            foreach ($remotePathsAndTypes as $remotePathAndType) {
                $remotePath = $remotePathAndType[0];
                $isDirectory = $remotePathAndType[1];

                if($isDirectory)
                    $this->deleteDirectory($remotePath);
                else
                    $this->deleteFile($remotePath);
            }
        }

        /**
         * @param $source string
         * @param $destination string
         * @throws FileSourceAuthenticationException
         * @throws FileSourceConnectionException
         * @throws FileSourceFileDoesNotExistException
         * @throws FileSourceFileExistsException
         * @throws FileSourceFilePermissionException
         * @throws FileSourceOperationException
         */
        public function rename($source, $destination) {
            $this->ensureConnectedAndAuthenticated('RENAME_OPERATION');

            if (!$this->handleRename($source, $destination))
                $this->handleOperationError('RENAME_OPERATION', $source, error_get_last(), $destination);
        }

        /**
         * @param $mode int
         * @param $remotePath string
         * @throws FileSourceAuthenticationException
         * @throws FileSourceConnectionException
         * @throws FileSourceFileDoesNotExistException
         * @throws FileSourceFileExistsException
         * @throws FileSourceFilePermissionException
         * @throws FileSourceOperationException
         */
        public function changePermissions($mode, $remotePath) {
            $this->ensureConnectedAndAuthenticated('CHANGE_PERMISSIONS_OPERATION');

            Validation::validatePermissionMask($mode, false);

            if (!$this->handleChangePermissions($mode, $remotePath))
                $this->handleOperationError('CHANGE_PERMISSIONS_OPERATION', $remotePath, error_get_last());
        }

        /**
         * @param $source string
         * @param $destination string
         * @throws FileSourceAuthenticationException
         * @throws FileSourceConnectionException
         */
        public function copy($source, $destination) {
            $this->ensureConnectedAndAuthenticated('COPY_OPERATION');

            $isDirectory = false;

            try{
                $this->listDirectory($source);
                $isDirectory = true;
            } catch (Exception $e) {
                // failure just means it's a file
            }

            if (!$isDirectory) {
                $sources = array(array($source, null));
                $destinations = array($destination);
            } else {
                $fileFinder = new RecursiveFileFinder($this, $source);
                $sources = $fileFinder->findFilesAndDirectoriesInPaths();
                $destinations = array();

                for ($i = 0; $i < sizeof($sources); ++$i) {
                    $sourcePath = $sources[$i][0];

                    if (substr($sourcePath, 0, 1) == "/")
                        $sourcePath = substr($sourcePath, 1);

                    $destinations[] = PathOperations::join($destination, $sourcePath);
                    $sources[$i][0] = PathOperations::join($source, $sourcePath);
                }
            }

            if($isDirectory && sizeof($sources) == 0) {
                $this->makeDirectory($destination);
                return;
            }

            $destinationDirs = array();

            for ($i = 0; $i < sizeof($sources); ++$i) {
                $destinationPath = $destinations[$i];
                $destinationDir = dirname($destinationPath);

                $sourcePathAndItem = $sources[$i];

                $sourcePath = $sourcePathAndItem[0];
                $sourceItem = $sourcePathAndItem[1];

                if($destinationDir != "" && $destinationDir != "/" &&
                    array_search($destinationDir, $destinationDirs) === false) {
                    $destinationDirs[] = $destinationDir;
                    $this->makeDirectoryWithIntermediates($destinationDir);
                }

                if ($sourceItem === null)
                    $this->handleCopy($sourcePath, $destinationPath);
                else {
                    if($sourceItem->isDirectory()){
                        if(array_search($destinationPath, $destinationDirs) === false) {
                            $destinationDirs[] = $destinationPath;
                            $this->makeDirectoryWithIntermediates($destinationPath);
                        }
                    } else {
                        $this->handleCopy($sourcePath, $destinationPath);
                    }

                    $this->changePermissions($sourceItem->getNumericPermissions(), $destinationPath);
                }
            }

            /* this is kind of a special case so let the handleCopy raise an exception instead of going through
            handleOperationError, and downloadFile/uploadFile will call it anyway */
        }

        /**
         * @param $remotePath string
         * @return int
         */
        public function getFileSize($remotePath ){
            $directoryPath = dirname($remotePath);
            $fileName = basename($remotePath);
            $directoryList = $this->listDirectory($directoryPath);

            foreach ($directoryList as $item) {
                if($item->getName() == $fileName)
                    return $item->getSize();
            }

            return -1;
        }
    }