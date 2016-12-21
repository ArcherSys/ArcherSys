<?php

    require_once(dirname(__FILE__) . '/../../constants.php');
    require_once(dirname(__FILE__) . '/../Validation.php');

    class FTPConfiguration {
        /**
         * @var string
         */
        private $host;
        /**
         * @var string
         */
        private $username;
        /**
         * @var string
         */
        private $password;
        /**
         * @var string
         */
        private $initialDirectory;
        /**
         * @var int
         */
        private $port;
        /**
         * @var bool
         */
        private $sslMode;
        /**
         * @var bool
         */
        private $passiveMode;

        /**
         * FTPConfiguration constructor.
         * @param $host string
         * @param $username string
         * @param $password string
         * @param $initialDirectory string
         * @param null bool $passiveMode
         * @param null bool $sslMode
         * @param null int $port
         */
        public function __construct($host, $username, $password, $initialDirectory = '', $passiveMode = null,
                                    $sslMode = null, $port = null) {
            Validation::validateNonEmptyString($host, 'host');
            Validation::validateNonEmptyString($username, 'username');
            Validation::validateString($password, true);
            Validation::validateInteger($port, true);

            $this->host = $host;
            $this->username = $username;
            $this->password = is_null($password) ? '' : $password;
            $this->initialDirectory = $initialDirectory;
            $this->passiveMode = is_null($passiveMode) ? false : $passiveMode;
            $this->sslMode = is_null($sslMode) ? false : $sslMode;
            $this->port = is_null($port) ? FTP_DEFAULT_PORT : $port;
        }

        /**
         * @return string
         */
        public function getHost() {
            return $this->host;
        }

        /**
         * @return string
         */
        public function getUsername() {
            return $this->username;
        }

        /**
         * @return string
         */
        public function getPassword() {
            return $this->password;
        }

        /**
         * @return string
         */
        public function getInitialDirectory() {
            return $this->initialDirectory;
        }

        /**
         * @return int
         */
        public function getPort() {
            return $this->port;
        }

        /**
         * @return bool
         */
        public function isPassiveMode() {
            return $this->passiveMode;
        }

        /**
         * @return boolean
         */
        public function isSSLMode() {
            return $this->sslMode;
        }
    }