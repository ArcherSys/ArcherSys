<?php

    require_once(dirname(__FILE__) . '/TransferOperation.php');

    class FTPTransferOperation extends TransferOperation {
        /**
         * @var int
         */
        private $transferMode;

        public function __construct($localPath, $remotePath, $transferMode) {
            parent::__construct($localPath, $remotePath);
            $this->setTransferMode($transferMode);
        }

        /**
         * @return int
         */
        public function getTransferMode() {
            return $this->transferMode;
        }

        /**
         * @param int $transferMode
         */
        public function setTransferMode($transferMode) {
            if($transferMode != FTP_ASCII && $transferMode != FTP_BINARY)
                throw new InvalidArgumentException("Transfer mode must be FTP_ASCII or FTP_BINARY");
            $this->transferMode = $transferMode;
        }
    }