<?php
    require_once(dirname(__FILE__) . "/../constants.php");

    class SystemVars {
        public static function formattedSizeToBytes($formattedSize) {
            $formattedSize = trim($formattedSize);
            $unit = strtolower(substr($formattedSize, -1));
            $multiplier = 1;

            switch ($unit) {
                case 'g':
                    $multiplier *= 1024;
                case 'm':
                    $multiplier *= 1024;
                case 'k':
                    $multiplier *= 1024;
            }

            $size = $multiplier == 1 ? (int)$formattedSize : (int)substr($formattedSize, 0, strlen($formattedSize) - 1);

            return $size * $multiplier;
        }

        public static function getMaxFileUploadBytes() {
            return self::formattedSizeToBytes(ini_get('memory_limit'));
        }

        public static function isSFTPAvailable(){
            return function_exists("ssh2_connect");
        }

        public static function getSystemVarsArray() {
            return array(
                "maxFileUpload" => self::getMaxFileUploadBytes(),
                "version" => MONSTA_VERSION,
                "sftpAvailable" => self::isSFTPAvailable(),
                "sshAgentAuthEnabled" => defined("SSH_AGENT_AUTH_ENABLED") && SSH_AGENT_AUTH_ENABLED === true,
                "sshKeyAuthEnabled" => defined("SSH_KEY_AUTH_ENABLED") && SSH_KEY_AUTH_ENABLED === true
            );
        }
    }