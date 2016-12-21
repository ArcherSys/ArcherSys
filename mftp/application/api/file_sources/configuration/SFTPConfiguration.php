<?php

    require_once(dirname(__FILE__) . '/../../constants.php');

    abstract class SFTPAuthenticationMode {
        const Password = 0;
        const PublicKeyFile = 1;
        const HostKeyFile = 2;
        const Agent = 3;

        public static function fromString($modeName) {
            switch($modeName) {
                case "Password":
                    return SFTPAuthenticationMode::Password;
                    break;
                case "PublicKeyFile":
                    return SFTPAuthenticationMode::PublicKeyFile;
                    break;
                case "HostKeyFile":
                    return SFTPAuthenticationMode::HostKeyFile;
                    break;
                case "Agent":
                    return SFTPAuthenticationMode::Agent;
                    break;
                default:
                    throw new InvalidArgumentException("SFTPAuthenticationMode must be one of Password, PublicKeyFile, 
                    HostKeyFile or Agent.");
            }
        }
    }

    class SFTPConfiguration {
        /**
         * @var string
         */
        private $host;

        /**
         * @var integer
         */
        private $authenticationMode;

        /**
         * @var string
         */
        private $remoteUsername;

        /**
         * @var string
         */
        private $initialDirectory;

        /**
         * @var null string
         */
        private $password;

        /**
         * @var null string
         */
        private $publicKeyFilePath;

        /**
         * @var null string
         */
        private $privateKeyFilePath;

        /**
         * @var null string
         */
        private $localUsername;

        /**
         * @var bool
         */
        private $validateHostKey;

        /**
         * @var null string
         */
        private $hostKey;

        /**
         * @var int
         */
        private $port;

        public function __construct($host, $authenticationMode, $remoteUsername, $initialDirectory,
                                    $password = null, $publicKeyFilePath = null, $privateKeyFilePath = null,
                                    $localUsername = null, $validateHostKey = null, $hostKey = null,
                                    $port = null) {
            $this->validateAuthenticationMode($authenticationMode, 'authenticationMode');

            Validation::validateNonEmptyString($host, 'host');
            Validation::validateNonEmptyString($remoteUsername, 'remoteUsername');
            Validation::validateNonEmptyString($initialDirectory, 'initialDirectory');
            Validation::validateBoolean($validateHostKey, true);
            Validation::validateInteger($port, true);

            if ($validateHostKey)
                Validation::validateNonEmptyString($hostKey, 'hostKey');

            if ($authenticationMode == SFTPAuthenticationMode::Password)
                $this->validatePasswordAuthenticationParameters($password, 'password');
            else if($authenticationMode == SFTPAuthenticationMode::PublicKeyFile
                || $authenticationMode == SFTPAuthenticationMode::HostKeyFile)
                $this->validateKeyAuthenticationParameters($publicKeyFilePath, $privateKeyFilePath);

            $this->host = $host;
            $this->authenticationMode = $authenticationMode;
            $this->remoteUsername = $remoteUsername;
            $this->initialDirectory = $initialDirectory;
            $this->password = is_null($password) ? '' : $password;
            $this->publicKeyFilePath = $publicKeyFilePath;
            $this->privateKeyFilePath = $privateKeyFilePath;
            $this->localUsername = $localUsername;
            $this->validateHostKey = is_null($validateHostKey) ? false : $validateHostKey;
            $this->hostKey = $hostKey;
            $this->port = is_null($port) ? SFTP_DEFAULT_PORT : $port;
        }

        private function validateAuthenticationMode($authenticationMode) {
            if(!is_int($authenticationMode))
                throw new InvalidArgumentException("AuthenticationMode must be an integer, got '$authenticationMode''");
            if($authenticationMode < SFTPAuthenticationMode::Password
                || $authenticationMode > SFTPAuthenticationMode::Agent)
                throw new InvalidArgumentException("AuthenticationMode is out of range.");
        }

        private function validatePasswordAuthenticationParameters($password){
            Validation::validateString($password, true);
        }

        private function validateKeyAuthenticationParameters($publicKeyFilePath, $privateKeyFilePath) {
            if(!is_string($publicKeyFilePath) || strlen($publicKeyFilePath) == 0)
                throw new InvalidArgumentException("Public key file must be provided for public key authentication.");

            if(!is_string($privateKeyFilePath) || strlen($privateKeyFilePath) == 0)
                throw new InvalidArgumentException("Private key file must be provided for public key authentication.");
        }

        /**
         * @return string
         */
        public function getHost() {
            return $this->host;
        }

        /**
         * @return int
         */
        public function getAuthenticationMode() {
            return $this->authenticationMode;
        }

        /**
         * @return string
         */
        public function getRemoteUsername() {
            return $this->remoteUsername;
        }

        /**
         * @return string
         */
        public function getInitialDirectory() {
            return $this->initialDirectory;
        }

        /**
         * @return null
         */
        public function getPassword() {
            return $this->password;
        }

        /**
         * @return null string
         */
        public function getPublicKeyFilePath() {
            return $this->publicKeyFilePath;
        }

        /**
         * @return null string
         */
        public function getPrivateKeyFilePath() {
            return $this->privateKeyFilePath;
        }

        /**
         * @return null string
         */
        public function getLocalUsername() {
            return $this->localUsername;
        }

        /**
         * @return boolean
         */
        public function isValidateHostKey() {
            return $this->validateHostKey;
        }

        /**
         * @return null string
         */
        public function getHostKey() {
            return $this->hostKey;
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
        public function isAuthenticationModePassword() {
            return $this->getAuthenticationMode() == SFTPAuthenticationMode::Password;
        }

        /**
         * @return bool
         */
        public function isAuthenticationModePublicKeyFile() {
            return $this->getAuthenticationMode() == SFTPAuthenticationMode::PublicKeyFile;
        }

        /**
         * @return bool
         */
        public function isAuthenticationModeAgent() {
            return $this->getAuthenticationMode() == SFTPAuthenticationMode::Agent;
        }
    }