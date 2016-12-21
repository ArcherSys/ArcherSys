<?php
    require_once(dirname(__FILE__) . '/CipherSuite.php');
    require_once(dirname(__FILE__) . '/EncryptionSuite.php');

    class EncryptedFileIO {
        private $encryptionSuite;

        public function __construct() {
            $cipherSuite = new CipherSuite();
            $this->encryptionSuite = new EncryptionSuite($cipherSuite);
        }

        public function writeEncryptedData($path, $message, $key) {
            $encryptedPayload = $this->encryptionSuite->encryptWithBestCipherMethod($message, $key);
            file_put_contents($path, $encryptedPayload);
        }

        public function readEncryptedData($path, $key) {
            $encryptedPayload = file_get_contents($path, $key);
            return $this->encryptionSuite->decryptWithInlineCipherMethod($encryptedPayload, $key);
        }
    }