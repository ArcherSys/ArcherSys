<?php

    require_once(dirname(__FILE__) . '/../lib/JsonSerializable.php');

    class MonstaLicenseV1 implements JsonSerializable {
        // the V1 refers to the license version, not the application version

        private $email;
        private $purchaseDate;
        private $expiryDate;
        private $version;

        public function __construct($email, $purchaseDate, $expiryDate, $version) {
            $this->email = $email;
            $this->purchaseDate = $purchaseDate;
            $this->expiryDate = $expiryDate;
            $this->version = $version;
        }

        /**
         * @return string
         */
        public function getEmail() {
            return $this->email;
        }

        /**
         * @return integer
         */
        public function getPurchaseDate() {
            return $this->purchaseDate;
        }

        /**
         * @return integer
         */
        public function getExpiryDate() {
            return $this->expiryDate;
        }

        /**
         * @return string
         */
        public function getVersion() {
            return $this->version;
        }

        public function toArray() {
            return array(
                'email' => $this->getEmail(),
                'purchaseDate' => $this->getPurchaseDate(),
                'expiryDate' => $this->getExpiryDate(),
                'version' => $this->getVersion(),
            );
        }

        public function jsonSerialize() {
            return $this->toArray();
        }

        public function legacyJsonSerialize() {
            return $this->jsonSerialize();
        }
    }