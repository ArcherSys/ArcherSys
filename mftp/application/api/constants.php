<?php
    /**
     * This is REALLY for constants, not configuration, not intended to be edited per install
     */

    /* TODO: make this into abstract class so that we might be able to easily serialize this to JSON to make the
    "constants" available to clients */

    define("MONSTA_VERSION", trim(file_get_contents(dirname(__FILE__) .  '/VERSION')));
    define("FTP_DEFAULT_PORT", 21);
    define("FTP_SYS_TYPE_UNIX", 0);
    define("FTP_SYS_TYPE_WINDOWS", 1);
    define("SFTP_DEFAULT_PORT", 22);
    define("PERMISSION_BIT_MASK", 0x1FF); // last 9 bits from mode

    define("MOCK_DEFAULT_USERNAME", "user");
    define("MOCK_DEFAULT_PASSWORD", "password");

    define("PREFERRED_CIPHER_METHODS", "aes-256-cbc|bf-cbc");

    define("PUBKEY_PATH", dirname(__FILE__) . '/resources/monsta_public.pem');

    define("CURL_TIMEOUT", 30);

    define("XHR_DEFAULT_TIMEOUT_SECONDS", 30);

    define("MONSTA_DEBUG", file_exists(dirname(__FILE__) . "/DEBUG"));

    function includeMonstaConfig() {
        $configDir = dirname(__FILE__) . "/../../settings/";

        if(!defined("MONSTA_CONFIG_DIR_PATH"))
            define("MONSTA_CONFIG_DIR_PATH", $configDir);

        if (file_exists($configDir . "config_debug.php"))
            require_once($configDir . "config_debug.php");
        else
            require_once($configDir . "config.php");
    }