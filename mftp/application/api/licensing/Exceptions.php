<?php

    require_once(dirname(__FILE__) . '/../lib/LocalizableException.php');

    class LicensingException extends LocalizableException {

    }

    class InvalidLicenseException extends LicensingException {

    }

    class KeyPairException extends LicensingException {

    }