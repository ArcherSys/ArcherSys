<?php

    require_once(dirname(__FILE__) . "/Exceptions.php");

    class CipherSuite {
        public function validateCipherMethod($methodName) {
            if (!in_array($methodName, $this->getSupportedCipherMethods()))
                throw new UnsupportedCipherMethodException("Cipher method $methodName is not supported.",
                    LocalizableExceptionDefinition::$UNSUPPORTED_CIPHER_ERROR, array('cipher_method' => $methodName));
        }

        private function getSystemCipherMethods() {
            return openssl_get_cipher_methods();
        }

        private function getPreferredCipherMethods() {
            return explode("|", PREFERRED_CIPHER_METHODS);
        }

        public function getSupportedCipherMethods() {
            $supportedCipherMethods = array();
            $systemCipherMethods = $this->getSystemCipherMethods();

            foreach ($this->getPreferredCipherMethods() as $cipherMethod) {
                if (in_array($cipherMethod, $systemCipherMethods))
                    $supportedCipherMethods[] = $cipherMethod;
            }
            return $supportedCipherMethods;
        }

        public function getBestCipherMethod() {
            $cipherMethods = $this->getSupportedCipherMethods();
            return $cipherMethods[0];
        }
    }