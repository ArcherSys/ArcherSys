<?php

class GameRocket_Http {
        
    public static function get($path, array $params = array()) {
        $default = array(
            'signature' => GameRocket_Crypto::sign('GET', GameRocket_Configuration::baseUrl() . $path, $params, GameRocket_Configuration::secretkey())
        );
        
        $response = self::_doRequest('GET', $path . '?' . http_build_query(array_merge($params, $default)));
        if ($response['status'] === 200) {
            return json_decode($response['body'], true);
        } else {
            GameRocket_Util::throwStatusCodeException($response['status']);
        }
    }
    
    public static function post($path, array $params = array()) {
        $default = array(
            'signature' => GameRocket_Crypto::sign('POST', GameRocket_Configuration::baseUrl() . $path, $params, GameRocket_Configuration::secretkey())
        );
        
        $response = self::_doRequest('POST', $path, array_merge($params, $default));
        $responseCode = $response['status'];
        if ($responseCode === 200 || $responseCode === 201 || $responseCode === 422) {
            return json_decode($response['body'], true);
        } else {
            GameRocket_Util::throwStatusCodeException($responseCode);
        }
    }
    
    public static function put($path, array $params = array()) {
        $default = array(
            'signature' => GameRocket_Crypto::sign('PUT', GameRocket_Configuration::baseUrl() . $path, $params, GameRocket_Configuration::secretkey())
        );
        
        $response = self::_doRequest('PUT', $path, array_merge($params, $default));
        $responseCode = $response['status'];
        if ($responseCode === 200 || $responseCode === 201 || $responseCode === 422) {
            return json_decode($response['body'], true);
        } else {
            GameRocket_Util::throwStatusCodeException($responseCode);
        }
    }
    
    public static function delete($path, array $params = array()) {
        $default = array(
            'signature' => GameRocket_Crypto::sign('DELETE', GameRocket_Configuration::baseUrl() . $path, $params, GameRocket_Configuration::secretkey())
        );
        
        $response = self::_doRequest('DELETE', $path, array_merge($params, $default));
        if ($response['status'] === 200) {
            return true;
        } else {
            GameRocket_Util::throwStatusCodeException($response['status']);
        }
    }
    
    private static function _doRequest($httpVerb, $path, array $requestBody = array()) {
        return self::_doUrlRequest($httpVerb, GameRocket_Configuration::baseUrl() . $path, $requestBody);
    }
    
    private static function _doUrlRequest($httpVerb, $url, array $requestBody = array()) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_TIMEOUT, 60);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $httpVerb);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_ENCODING, 'UTF-8');
        curl_setopt($curl, CURLOPT_ENCODING, 'gzip');
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Accept: application/json',
            'User-Agent: GameRocket PHP ' + GameRocket_Version::get(),
            'X-ApiVersion: ' + GameRocket_Configuration::API_VERSION
        ));
        
        if (GameRocket_Configuration::sslOn()) {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($curl, CURLOPT_CAINFO, GameRocket_Configuration::caFile());
        }
        
        if (!empty($requestBody)) {
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($requestBody));
        }
        
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        $httpStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        
        if (GameRocket_Configuration::sslOn()) {
            if ($httpStatus == 0) {
                throw new GameRocket_Exception_SSLCertificate();
            }
        }
        
        return array('status' => $httpStatus, 'body' => $response);
    }
}