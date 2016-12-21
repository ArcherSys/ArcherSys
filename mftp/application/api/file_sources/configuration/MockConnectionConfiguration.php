<?php

    class MockConnectionConfiguration {
        /**
         * @var string
         */
        private $username;
        /**
         * @var string
         */
        private $password;

        /**
         * @var bool
         */
        private $validHost;

        /**
         * MockConnectionConfiguration constructor.
         * @param null $username string
         * @param null $password string
         * @param null $validHost bool
         */
        public function __construct($username = null, $password = null, $validHost = null) {
            $this->setUsername($username);
            $this->setPassword($password);
            $this->setValidHost($validHost);
        }

        /**
         * @return string
         */
        public function getUsername() {
            return $this->username;
        }

        /**
         * @param null string $username
         */
        public function setUsername($username) {
            $this->username = is_null($username) ? MOCK_DEFAULT_USERNAME : $username;
        }

        /**
         * @return string
         */
        public function getPassword() {
            return $this->password;
        }

        /**
         * @param null string $password
         */
        public function setPassword($password) {
            $this->password = is_null($password) ? MOCK_DEFAULT_PASSWORD : $password;
        }

        /**
         * @return boolean
         */
        public function isValidHost() {
            return $this->validHost;
        }

        /**
         * @param null boolean $validHost
         */
        public function setValidHost($validHost) {
            $this->validHost = is_null($validHost) ? true : $validHost;
        }

        /**
         * @return string
         */
        public function getHost() {
            return 'host';
        }

        /**
         * @return int
         */
        public function getPort() {
            return 12345;
        }
    }