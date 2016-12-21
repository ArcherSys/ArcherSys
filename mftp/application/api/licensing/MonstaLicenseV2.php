<?php

    require_once(dirname(__FILE__) . '/MonstaLicenseV1.php');

    class MonstaLicenseV2 extends MonstaLicenseV1 {
        // the V2 refers to the license version, not the application version

        /**
         * @var boolean
         */
        private $trial;

        public function __construct($email, $purchaseDate, $expiryDate, $version, $isTrial) {
           parent::__construct($email, $purchaseDate, $expiryDate, $version);
            $this->trial = $isTrial;
        }

        /**
         * @return boolean
         */
        public function isTrial() {
            return $this->trial;
        }

        public function toArray() {
            return array(
                'email' => $this->getEmail(),
                'purchaseDate' => $this->getPurchaseDate(),
                'expiryDate' => $this->getExpiryDate(),
                'version' => $this->getVersion(),
                'isTrial' => $this->isTrial()
            );
        }
    }