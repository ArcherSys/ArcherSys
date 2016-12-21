<?php
    require_once(dirname(__FILE__) . '/../lib/LocalizableException.php');

    class EncryptionException extends LocalizableException {

    }

    class UnsupportedCipherMethodException extends EncryptionException {

    }

    class AuthenticationFileReadException extends EncryptionException {

    }

    class AuthenticationFileWriteException extends EncryptionException {

    }