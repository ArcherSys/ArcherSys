<?php
    require_once(dirname(__FILE__) . '/../../lib/JsonSerializable.php');

    abstract class ListItem implements JsonSerializable {
        /**
         * @var boolean
         */
        protected $directory;

        /**
         * @var boolean
         */
        protected $link;

        /**
         * @var StringPermissionSet
         */
        protected $ownerPermissions;

        /**
         * @var StringPermissionSet
         */
        protected $groupPermissions;

        /**
         * @var StringPermissionSet
         */
        protected $otherPermissions;

        /**
         * @var int
         */
        protected $linkCount;

        /**
         * @var string
         */
        protected $ownerUserName;

        /**
         * @var string
         */
        protected $ownerGroupName;

        /**
         * @var int
         */
        protected $size;

        /**
         * @var int
         */
        protected $modificationDate;

        /**
         * @var string
         */
        protected $name;

        /**
         * @return bool
         */
        public function isDirectory() {
            return $this->directory;
        }

        /**
         * @return bool
         */
        public function isLink() {
            return $this->link;
        }

        /**
         * @return StringPermissionSet
         */
        public function getOwnerPermissions() {
            return $this->ownerPermissions;
        }

        /**
         * @return StringPermissionSet
         */
        public function getGroupPermissions() {
            return $this->groupPermissions;
        }

        /**
         * @return StringPermissionSet
         */
        public function getOtherPermissions() {
            return $this->otherPermissions;
        }

        /**
         * @return int
         */
        public function getLinkCount() {
            return $this->linkCount;
        }

        /**
         * @return string
         */
        public function getOwnerUserName() {
            return $this->ownerUserName;
        }

        /**
         * @return string
         */
        public function getOwnerGroupName() {
            return $this->ownerGroupName;
        }

        /**
         * @return int
         */
        public function getSize() {
            return $this->size;
        }

        /**
         * @return int
         */
        public function getModificationDate() {
            return $this->modificationDate;
        }

        /**
         * @return string
         */
        public function getName() {
            return $this->name;
        }

        /**
         * @return int
         */
        public function getNumericPermissions() {
            return ($this->getOwnerPermissions()->asNumeric() * 64) + ($this->getGroupPermissions()->asNumeric() * 8) +
            $this->getOtherPermissions()->asNumeric();
        }

        public function jsonSerialize() {
            return array(
                "name" => $this->getName(),
                "isDirectory" => $this->isDirectory(),
                "isLink" => $this->isLink(),
                "linkCount" => $this->getLinkCount(),
                "ownerUserName" => $this->getOwnerUserName(),
                "ownerGroupName" => $this->getOwnerGroupName(),
                "size" => $this->getSize(),
                "modificationDate" => $this->getModificationDate(),
                "numericPermissions" => $this->getNumericPermissions()
            );
        }

        public function legacyJsonSerialize() {
            return $this->jsonSerialize();
        }
    }