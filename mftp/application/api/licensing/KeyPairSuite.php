<?php
    require_once(dirname(__FILE__) . '/Exceptions.php');

    class KeyPairSuite {
        private $publicKeyPath;
        private $privateKeyPath;
        private $privateKeyPassword;

        public function __construct($publicKeyPath = null, $privateKeyPath = null, $privateKeyPassword = null) {
            $this->publicKeyPath = $publicKeyPath;
            $this->privateKeyPath = $privateKeyPath;
            $this->privateKeyPassword = $privateKeyPassword;
        }

        public function rawEncrypt($message) {
            $privateKey = openssl_get_privatekey(file_get_contents($this->privateKeyPath), $this->privateKeyPassword);
            if ($privateKey === FALSE)
                throw new KeyPairException("Unable to load private key at " . $this->privateKeyPath,
                    LocalizableExceptionDefinition::$PRIVATE_KEY_LOAD_ERROR, array("path" => $this->privateKeyPath));
            $encrypted = '';
            openssl_private_encrypt($message, $encrypted, $privateKey);
            return $encrypted;
        }

        public function rawDecrypt($encrypted) {
            $publicKey = openssl_get_publickey(file_get_contents($this->publicKeyPath));

            if($publicKey === FALSE)
                throw new KeyPairException("Unable to load public key at " . $this->publicKeyPath,
                    LocalizableExceptionDefinition::$PUBLIC_KEY_LOAD_ERROR, array("path" => $this->publicKeyPath));

            $decrypted = '';
            if(!openssl_public_decrypt($encrypted, $decrypted, $publicKey))
                throw new KeyPairException("Unable to decrypt message", LocalizableExceptionDefinition::$DECRYPT_ERROR);

            return $decrypted;
        }

        public function encryptAndBase64Encode($message) {
            return base64_encode($this->rawEncrypt($message));
        }

        public function base64DecodeAndDecrypt($encoded) {
            return $this->rawDecrypt(base64_decode($encoded));
        }
    }