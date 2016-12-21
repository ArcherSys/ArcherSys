<?php

    require_once(dirname(__FILE__) . '/../PathOperations.php');
    require_once(dirname(__FILE__) . '/../transfers/TransferOperationFactory.php');
    require_once(dirname(__FILE__) . "/../../lib/helpers.php");

    class ZipBuilder {
        private $connection;
        private $baseDirectory;
        private $connectionType;
        private $zipFile;
        private $localPathsCleanup;

        public function __construct($connection, $baseDirectory) {
            $this->connection = $connection;
            $this->baseDirectory = $baseDirectory;
            $this->connectionType = strtolower($connection->getProtocolName());
            $this->localPathsCleanup = array();
        }

        private function cleanupLocalPaths() {
            foreach ($this->localPathsCleanup as $localPath) {
                @unlink($localPath);
            }
        }

        public function buildZip($fileList) {
            $zipPath = tempnam(monstaGetTempDirectory(), "monsta-download-zip");

            $this->zipFile = new ZipArchive();
            $this->zipFile->open($zipPath, ZipArchive::CREATE);

            try {
                foreach ($fileList as $relativeFilePath) {
                    $this->addFileToZip($relativeFilePath);
                }
                $this->zipFile->close();
            } catch (Exception $e) {
                $this->cleanupLocalPaths();
                throw $e;
            }

            // this should be done in a finally to avoid repeated code but we need to support PHP < 5.5
            $this->cleanupLocalPaths();

            return $zipPath;
        }

        private function addFileToZip($relativeFilePath) {
            $fileName = basename($relativeFilePath);
            $fileOutputPath = tempnam(monstaGetTempDirectory(), $fileName);
            $rawConfiguration = array(
                'localPath' => $fileOutputPath,
                'remotePath' => PathOperations::join($this->baseDirectory, $relativeFilePath)
            );

            $this->localPathsCleanup[] = $fileOutputPath;

            $transferOperation = TransferOperationFactory::getTransferOperation($this->connectionType,
                $rawConfiguration);

            $this->connection->downloadFile($transferOperation);

            $this->zipFile->addFile($fileOutputPath, $relativeFilePath);
        }
    }