<?php

    require_once(dirname(__FILE__) . '/../Validation.php');

    require_once(dirname(__FILE__) . '/FTPConfiguration.php');
    require_once(dirname(__FILE__) . '/SFTPConfiguration.php');
    require_once(dirname(__FILE__) . '/MockConnectionConfiguration.php');

    class ConfigurationFactory {
        public function getConfiguration($connectionType, $rawConfiguration = null) {
            switch ($connectionType) {
                case 'mock':
                    return self::getMockConnectionConfiguration($rawConfiguration);
                case 'ftp':
                    return self::getFTPConfiguration($rawConfiguration);
                case 'sftp':
                    return self::getSFTPConfiguration($rawConfiguration);
                default:
                    throw new InvalidArgumentException("Unknown connection type '$connectionType' in getConfiguration");
            }
        }

        private static function getMockConnectionConfiguration($rawConfiguration) {
            $username = Validation::getArrayValueOrNull($rawConfiguration, 'username');
            $password = Validation::getArrayValueOrNull($rawConfiguration, 'password');
            $validHost = Validation::getArrayValueOrNull($rawConfiguration, 'validHost');

            return new MockConnectionConfiguration($username, $password, $validHost);
        }

        private static function getFTPConfiguration($rawConfiguration) {
            $host = Validation::getArrayValueOrNull($rawConfiguration, 'host');
            $username = Validation::getArrayValueOrNull($rawConfiguration, 'username');
            $password = Validation::getArrayValueOrNull($rawConfiguration, 'password');
            $initialDirectory = Validation::getArrayValueOrNull($rawConfiguration, 'initialDirectory');
            $port = Validation::getArrayValueOrNull($rawConfiguration, 'port');
            $passive = Validation::getArrayValueOrNull($rawConfiguration, 'passive');
            $ssl = Validation::getArrayValueOrNull($rawConfiguration, 'ssl');

            return new FTPConfiguration($host, $username, $password, $initialDirectory, $passive, $ssl, $port);
        }

        private static function getSFTPConfiguration($rawConfiguration) {
            $host = Validation::getArrayValueOrNull($rawConfiguration, 'host');
            $remoteUsername = Validation::getArrayValueOrNull($rawConfiguration, 'remoteUsername');
            $password = Validation::getArrayValueOrNull($rawConfiguration, 'password');
            $initialDirectory = Validation::getArrayValueOrNull($rawConfiguration, 'initialDirectory');
            $authenticationModeName = Validation::getArrayValueOrNull($rawConfiguration, 'authenticationModeName');
            $publicKeyFilePath = Validation::getArrayValueOrNull($rawConfiguration, 'publicKeyFilePath');
            $privateKeyFilePath = Validation::getArrayValueOrNull($rawConfiguration, 'privateKeyFilePath');
            $localUsername = Validation::getArrayValueOrNull($rawConfiguration, 'localUsername');
            $validateHostKey = Validation::getArrayValueOrNull($rawConfiguration, 'validateHostKey');
            $hostKey = Validation::getArrayValueOrNull($rawConfiguration, 'hostKey');
            $port = Validation::getArrayValueOrNull($rawConfiguration, 'port');

            $authenticationMode = SFTPAuthenticationMode::fromString($authenticationModeName);

            return new SFTPConfiguration($host, $authenticationMode, $remoteUsername, $initialDirectory, $password,
                $publicKeyFilePath, $privateKeyFilePath, $localUsername, $validateHostKey, $hostKey, $port);
        }
    }