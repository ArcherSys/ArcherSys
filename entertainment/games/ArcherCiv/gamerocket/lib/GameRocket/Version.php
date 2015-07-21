<?php

final class GameRocket_Version {
    
    const MAJOR = 1;
    const MINOR = 0;
    const TINY = 0;
    
    protected function __construct() {}
    
    public static function get() {
        return self::MAJOR . '.' . self::MINOR . '.' . self::TINY;
    }
}