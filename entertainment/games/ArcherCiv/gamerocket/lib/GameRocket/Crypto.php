<?php

class GameRocket_Crypto extends GameRocket {
    
    public static function sign($method, $url, $parameters, $secretkey) {
        $baseString = self::_buildBaseString($method, $url, $parameters);
        return self::_sign($baseString, $secretkey);
    }
    
    private static function _buildBaseString($method, $url, $parameters) {
        $_parameters = $parameters;
        
        $baseString = $method . '&' . rawurlencode(strtolower($url)) . '&';
        
        array_walk($_parameters, create_function('$item', '$item = rawurlencode($item);'));
        ksort($_parameters);
        $baseString .= rawurlencode(http_build_query($_parameters));
        
        return $baseString;
    }
    
    private static function _sign($baseString, $secretkey) {
        return base64_encode(hash('sha256', $baseString . $secretkey, false));
    }
}