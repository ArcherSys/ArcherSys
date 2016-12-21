<?php
    require_once(dirname(__FILE__) . '/../Validation.php');
    require_once(dirname(__FILE__) . '/TransferOperation.php');
    require_once(dirname(__FILE__) . '/FTPTransferOperation.php');
    require_once(dirname(__FILE__) . '/SFTPTransferOperation.php');

    class TransferOperationFactory {
        public static function getTransferOperation($connectionType, $rawConfiguration) {
            Validation::validateNonEmptyString($rawConfiguration['localPath'], 'localPath');
            Validation::validateNonEmptyString($rawConfiguration['remotePath'], 'remotePath');
            switch ($connectionType) {
                case 'ftp':
                    return self::getFTPTransferOperation($rawConfiguration);
                case 'sftp':
                    return self::getSFTPTransferOperation($rawConfiguration);
                default:
                    return new TransferOperation($rawConfiguration['localPath'], $rawConfiguration['remotePath']);
            }
        }

        private static function getFTPTransferOperation($rawConfiguration) {
            $transferModeName = isset($rawConfiguration['transferMode']) ? $rawConfiguration['transferMode'] : 'BINARY';
            return new FTPTransferOperation($rawConfiguration['localPath'], $rawConfiguration['remotePath'],
                FTPTransferMode::fromString($transferModeName));

        }

        private static function getSFTPTransferOperation($rawConfiguration) {
            return new SFTPTransferOperation($rawConfiguration['localPath'], $rawConfiguration['remotePath'],
                Validation::getArrayValueOrNull($rawConfiguration, 'createMode'));
        }

    }