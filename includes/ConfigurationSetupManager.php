<?php
namespace ArcherSys\Setup;
class ConfigurationSetupManager {
    static function configurationInstalled(){
        return file_exists($_SERVER["DOCUMENT_ROOT"]."/config.php");
    }
}
?>