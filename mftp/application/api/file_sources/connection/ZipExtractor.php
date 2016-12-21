<?php

    require_once(dirname(__FILE__) . "/../PathOperations.php");
    require_once(dirname(__FILE__) . "/../../lib/LocalizableException.php");
    require_once(dirname(__FILE__) . "/../../lib/helpers.php");
    require_once(dirname(__FILE__) . "/ConnectionFactory.php");

    class ZipExtractor {
        private $connection;
        private $archivePath;
        private $uploadDirectory;
        private $extractDirectory;

        public function __construct($connection, $archivePath, $uploadDirectory) {
            $this->connection = $connection;
            $this->archivePath = $archivePath;
            $this->uploadDirectory = $uploadDirectory;
            $this->existingDirectories = array();
        }

        public function extractAndUpload($fileOffset, $stepCount) {
            $archive = new ZipArchive();
            $openSuccess = $archive->open($this->archivePath);

            if ($openSuccess !== true)
                throw new LocalizableException("Could not read zip file at " . $this->archivePath,
                    LocalizableExceptionDefinition::$ARCHIVE_READ_ERROR, array(
                        "path" => $this->archivePath
                    ));

            $this->createExtractDirectory();

            $fileMax = min($archive->numFiles, $fileOffset + $stepCount);

            for(; $fileOffset < $fileMax; ++$fileOffset)
                $this->extractAndUploadItem($archive, $archive->getNameIndex($fileOffset));

            $archive->close();

            return $archive->numFiles - 1 == $fileOffset;
        }

        private function getTransferOperation($localPath, $remotePath) {
            return TransferOperationFactory::getTransferOperation(strtolower($this->connection->getProtocolName()),
                array(
                    "localPath" => $localPath,
                    "remotePath" => $remotePath
                )
            );
        }

        private function createExtractDirectory() {
            $tempPath = tempnam(monstaGetTempDirectory(), basename($this->archivePath) . "extract-dir");

            if(file_exists($tempPath))
                unlink($tempPath);

            mkdir($tempPath);
            if(!is_dir($tempPath))
                throw new Exception("Temp archive dir was not a dir");

            $this->extractDirectory = $tempPath;
        }

        private function extractAndUploadItem($archive, $itemName) {
            $archive->extractTo($this->extractDirectory, $itemName);

            $itemPath = PathOperations::join($this->extractDirectory, $itemName);

            if(is_dir($itemPath))
                return;

            $uploadPath = PathOperations::join($this->uploadDirectory, $itemName);

            $remoteDirectoryPath = dirname($uploadPath);

            if(!$this->directoryRecordExists($remoteDirectoryPath)) {
                $this->connection->makeDirectoryWithIntermediates($remoteDirectoryPath);
                $this->recordExistingDirectories(PathOperations::directoriesInPath($remoteDirectoryPath));
            }

            $uploadOperation = $this->getTransferOperation($itemPath, $uploadPath);

            try {
                $this->connection->uploadFile($uploadOperation);
            } catch (Exception $e) {
                @unlink($itemPath);
                throw $e;
                // this should be done in a finally to avoid repeated code but we need to support PHP < 5.5
            }

            @unlink($itemPath);
        }

        private function directoryRecordExists($directoryPath) {
            // this is not true directory exists function, just if we have created it or a subdirectory in this object
            return array_search(PathOperations::normalize($directoryPath), $this->existingDirectories) !== false;
        }

        private function recordDirectoryExists($directoryPath) {
            if ($this->directoryRecordExists($directoryPath))
                return;

            $this->existingDirectories[] = PathOperations::normalize($directoryPath);
        }

        private function recordExistingDirectories($existingDirectories) {
            foreach ($existingDirectories as $existingDirectory) {
                $this->recordDirectoryExists($existingDirectory);
            }
        }
    }