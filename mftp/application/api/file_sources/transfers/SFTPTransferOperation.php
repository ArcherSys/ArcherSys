<?php

    require_once(dirname(__FILE__) . '/TransferOperation.php');
    require_once(dirname(__FILE__) . '/../Validation.php');

    class SFTPTransferOperation extends TransferOperation {
        /**
         * @var int
         */
        private $createMode;

        public function __construct($localPath, $remotePath, $createMode = null) {
            parent::__construct($localPath, $remotePath);
            $this->setCreateMode($createMode);
        }

        /**
         * @return int
         */
        public function getCreateMode() {
            return $this->createMode;
        }

        /**
         * @param int $createMode
         */
        public function setCreateMode($createMode) {
            Validation::validatePermissionMask($createMode, true);
            $this->createMode = $createMode;
        }
    }