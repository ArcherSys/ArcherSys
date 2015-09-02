<?php

set_include_path(get_include_path() . PATH_SEPARATOR . realpath(dirname(__FILE__)));

abstract class GameRocket {
    
    protected function __construct() {}
    
    protected function __clone() {}
    
    public function __get($name) {
        if (array_key_exists($name, $this->_attributes)) {
            return $this->_attributes[$name];
        } else {
            trigger_error('Undefined property on ' . get_class($this) . ':' . $name, E_USER_NOTICE);
            return null;
        }
    }
    
    public function __isset($name) {
        return array_key_exists($name, $this->_attributes);
    }
    
    public function _set($key, $value) {
        $this->_attributes[$key] = $value;
    }
    
    public static function returnObjectOrThrowException($className, $resultObj) {
        $resultObjName = GameRocket_Util::cleanClassName($className);
        if ($resultObj->success) {
            return $resultObj->$resultObjName;
        } else {
            throw new GameRocket_Exception_ValidationsFailed();
        }
    }
}

require_once('GameRocket/Instance.php');
require_once('GameRocket/DynProp.php');
require_once('GameRocket/Map.php');

require_once('GameRocket/Action.php');
require_once('GameRocket/Player.php');
require_once('GameRocket/Game.php');
require_once('GameRocket/Achievement.php');
require_once('GameRocket/AchievementTemplate.php');
require_once('GameRocket/Purchase.php');
require_once('GameRocket/Configuration.php');
require_once('GameRocket/Exception.php');
require_once('GameRocket/Crypto.php');
require_once('GameRocket/Http.php');
require_once('GameRocket/Util.php');
require_once('GameRocket/Version.php');
require_once('GameRocket/Exception/Authentication.php');
require_once('GameRocket/Exception/Authorization.php');
require_once('GameRocket/Exception/Configuration.php');
require_once('GameRocket/Exception/DownForMaintenance.php');
require_once('GameRocket/Exception/ForgedQueryString.php');
require_once('GameRocket/Exception/InvalidSignature.php');
require_once('GameRocket/Exception/NotFound.php');
require_once('GameRocket/Exception/SSLCaFileNotFound.php');
require_once('GameRocket/Exception/SSLCertificate.php');
require_once('GameRocket/Exception/ServerError.php');
require_once('GameRocket/Exception/Unexpected.php');
require_once('GameRocket/Exception/UpgradeRequired.php');
require_once('GameRocket/Result/Error.php');
require_once('GameRocket/Result/Successful.php');

if (version_compare(PHP_VERSION, '5.2.1', '<')) {
    throw new GameRocket_Exception('PHP version >= 5.2.1 required.');
}

function requireDependencies() {
    $requiredExtensions = array('openssl', 'hash', 'curl');
    foreach ($requiredExtensions AS $ext) {
        if (!extension_loaded($ext)) {
            throw new GameRocket_Exception('The GameRocket library required the ' . $ext . ' extension.');
        }
    }
}

requireDependencies();

