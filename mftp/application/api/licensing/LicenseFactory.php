<?php

    require_once(dirname(__FILE__) . '/MonstaLicenseV1.php');
    require_once(dirname(__FILE__) . '/MonstaLicenseV2.php');

    class LicenseFactory {
        public static function getMonstaLicenseV1($email, $purchaseDate, $expiryDate, $version){
            return new MonstaLicenseV1($email, $purchaseDate, $expiryDate, $version);
        }

        public static function getMonstaLicenseV2($email, $purchaseDate, $expiryDate, $version, $isTrial){
            return new MonstaLicenseV2($email, $purchaseDate, $expiryDate, $version, $isTrial);
        }
    }