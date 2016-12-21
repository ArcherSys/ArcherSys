<?php

    if (!function_exists('hex2bin')) {
        function hex2bin($str) {
            $sbin = "";
            $len = strlen($str);
            for ($i = 0; $i < $len; $i += 2) {
                $sbin .= pack("H*", substr($str, $i, 2));
            }

            return $sbin;
        }
    }

    class EncryptionSuite {
        private $cipherSuite;

        public function __construct($cipherSuite) {
            $this->cipherSuite = $cipherSuite;
        }

        public function splitMethodIVAndPayload($methodIVAndPayload) {
            return explode("|", $methodIVAndPayload, 3);
        }

        public function combineMethodIVAndPayload($method, $iv, $payload) {
            return $method . "|" . $iv . "|" . $payload;
        }

        public function buildLengthPayload($message) {
            return strlen($message) . "|" . $message;
        }

        public function extractMessageFromPayload($payload) {
            $lengthAndMessage = explode("|", $payload, 2);

            if (count($lengthAndMessage) != 2)
                throw new EncryptionException("Could not read configuration, the password is probably incorrect.",
                    LocalizableExceptionDefinition::$PROBABLE_INCORRECT_PASSWORD_ERROR);

            return substr($lengthAndMessage[1], 0, (int)$lengthAndMessage[0]);
        }

        public function encryptWithMethod($methodName, $message, $key) {
            $payload = $this->buildLengthPayload($message);
            $ivLength = openssl_cipher_iv_length($methodName);
            $iv = openssl_random_pseudo_bytes($ivLength);

            if ($iv === false)
                throw new EncryptionException("Could not generate an iv, got FALSE",
                    LocalizableExceptionDefinition::$IV_GENERATE_ERROR);

            $encryptedMessage = openssl_encrypt($payload, $methodName, $key, 0, $iv);
            return array($encryptedMessage, bin2hex($iv));
        }

        public function decryptWithMethod($methodName, $payload, $key, $iv) {
            $decryptedPayload = openssl_decrypt($payload, $methodName, $key, 0, hex2bin($iv));
            return $this->extractMessageFromPayload($decryptedPayload);
        }

        public function encryptWithBestCipherMethod($message, $key) {
            $cipherMethodName = $this->cipherSuite->getBestCipherMethod();
            $encryptedMessageWithIV = $this->encryptWithMethod($cipherMethodName, $message, $key);

            return $this->combineMethodIVAndPayload($cipherMethodName, $encryptedMessageWithIV[1],
                $encryptedMessageWithIV[0]);
        }

        public function decryptWithInlineCipherMethod($payload, $key) {
            $methodIVAndPayload = $this->splitMethodIVAndPayload($payload);
            return $this->decryptWithMethod($methodIVAndPayload[0], $methodIVAndPayload[2], $key,
                $methodIVAndPayload[1]);
        }
    }