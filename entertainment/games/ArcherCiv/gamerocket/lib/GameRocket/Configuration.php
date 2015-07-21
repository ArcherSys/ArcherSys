<?php

class GameRocket_Configuration extends GameRocket {
    
    const API_VERSION = 1;
    
    private static $_cache = array(
        'environment' => '',
        'apikey' => '',
        'secretkey' => ''
    );
    
    private static $_validEnvironments = array(
        'development',
        'production'
    );
    
    public static function reset() {
        self::$_cache = array(
            'environment' => '',
            'apikey' => '',
            'secretkey' => ''
        );
    }
    
    private static function validate($key = null, $value = null) {
        if (empty($key) && empty($value)) {
            throw new InvalidArgumentException('nothing to validate');
        }
        
        if ($key == 'environment' &&
                !in_array($value, self::$_validEnvironments)) {
            
            throw new GameRocket_Exception_Configuration('"' . $value . '" is not a valid environment.');
        }
        
        if (!isset(self::$_cache[$key])) {
            throw new GameRocket_Exception_Configuration($key . ' is not a valid configuration setting.');
        }
        
        if (empty($value)) {
            throw new InvalidArgumentException($key . ' cannot be empty.');
        }
        
        return true;
    }
    
    private static function set($key, $value) {
        self::validate($key, $value);
        self::$_cache[$key] = $value;
    }
    
    private static function get($key) {
        if (isset(self::$_cache[$key]) &&
                (empty(self::$_cache[$key]))) {
            throw new GameRocket_Exception_Configuration(
                    $key . ' needs to be set'
                );
        }
        
        if (array_key_exists($key, self::$_cache)) {
            return self::$_cache[$key];
        }
        
        return null;
    }
    
    private static function setOrGet($name, $value = null) {
        if (!empty($value) && is_array($value)) {
            $value = $value[0];
        }
        if (!empty($value)) {
            self::set($name, $value);
        } else {
            return self::get($name);
        }
        
        return true;
    }
    
    public static function environment($value = null) {
        return self::setOrGet(__FUNCTION__, $value);
    }
    
    public static function apikey($value = null) {
        return self::setOrGet(__FUNCTION__, $value);
    }
    
    public static function secretkey($value = null) {
        return self::setOrGet(__FUNCTION__, $value);
    }
    
    public static function baseUrl() {
        return self::protocol() . '://' .
                self::serverName() . ':' .
                self::portNumber() . '/' . self::API_VERSION;
    }
    
    public static function caFile($sslPath = null) {
        $sslPath = $sslPath ? $sslPath : DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'ssl' . DIRECTORY_SEPARATOR;
        
        switch(self::environment()) {
            case 'production':
                $caPath = realpath(
                    dirname(__FILE__) .
                    $sslPath . 'www_gamerocket_io.ca.crt'
                );
                break;
            
            default:
                break;
        }
        
        if (!file_exists($caPath)) {
            throw new GameRocket_Exception_SSLCaFileNotFound();
        }
        
        return $caPath;
    }
    
    public static function portNumber() {
        if (self::sslOn()) {
            return 443;
        }
        
        return getenv("GATEWAY_PORT") ? get("GATEWAY_PORT") : 8280;
    }
    
    public static function protocol() {
        return self::sslOn() ? 'https' : 'http';
    }
    
    public static function serverName() {
        switch(self::environment()) {
            case 'production':
                $serverName = 'api.gamerocket.io';
                break;
            
            default:
                $serverName = 'localhost';
                break;
        }
        
        return $serverName;
    }
    
    public static function sslOn() {
        switch(self::environment()) {
            case 'production':
                $ssl = true;
                break;
            
            default:
                $ssl = false;
                break;
        }
        
        return $ssl;
    }
    
    public static function logMessage($message) {
        error_log('[GameRocket] ' . $message);
    }
} 
