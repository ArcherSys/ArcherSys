<?php

    require_once(dirname(__FILE__) . '/../Validation.php');

    class TransferOperation {
        /**
         * @var string
         */
        private $localPath;
        /**
         * @var string
         */
        private $remotePath;

        public function __construct($localPath, $remotePath) {
            $this->setLocalPath($localPath);
            $this->setRemotePath($remotePath);
        }

        /**
         * @return string
         */
        public function getLocalPath() {
            return $this->localPath;
        }

        /**
         * @param string $localPath
         */
        public function setLocalPath($localPath) {
            Validation::validateNonEmptyString($localPath);
            $this->localPath = $localPath;
        }

        /**
         * @return string
         */
        public function getRemotePath() {
            return $this->remotePath;
        }

        /**
         * @param string $remotePath
         */
        public function setRemotePath($remotePath) {
            Validation::validateNonEmptyString($remotePath);
            $this->remotePath = $remotePath;
        }
    }