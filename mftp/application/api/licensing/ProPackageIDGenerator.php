<?php
    class ProPackageIDGenerator {
        private static $PRO_PACKAGE_ID_LENGTH = 16;
        /**
         * @var string
         */
        private $salt;

        /**
         * ProPackageIDGenerator constructor.
         * @param $salt string
         */
        public function __construct($salt) {
            $this->salt = $salt;
        }

        public function idFromEmail($email) {
            $hash = sha1($this->salt . strtolower($email), true);
            $encodedHash = base64_encode($hash);
            $plainTextEncoded = str_replace(array("=", "+", "/"), "", $encodedHash);
            return substr($plainTextEncoded, 0, $this::$PRO_PACKAGE_ID_LENGTH);
        }
    }