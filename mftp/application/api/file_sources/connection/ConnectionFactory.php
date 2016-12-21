<?php

    require_once(dirname(__FILE__) . '/FTPConnection.php');
    require_once(dirname(__FILE__) . '/MockConnection.php');
    require_once(dirname(__FILE__) . '/SFTPConnection.php');

    class ConnectionFactory {
        /**
         * @param $connectionType string
         * @param $configuration FTPConfiguration|MockConnectionConfiguration|SFTPConfiguration
         * @return FTPConnection|MockConnection|SFTPConnection
         */
        public function getConnection($connectionType, $configuration) {
            switch($connectionType) {
                case 'ftp':
                    return new FTPConnection($configuration);
                case 'mock':
                    return new MockConnection($configuration);
                case 'sftp':
                    return new SFTPConnection($configuration);
                default:
                    throw new InvalidArgumentException("Unknown connection type '$connectionType' in getConnection");
            }
        }
    }