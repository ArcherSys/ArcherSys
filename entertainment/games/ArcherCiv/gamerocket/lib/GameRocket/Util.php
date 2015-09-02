<?php

class GameRocket_Util {
    
    public static function extractAttributeAsArray(&$attributeArray, $attributeName) {
        if (!isset($attributeArray[$attributeName])) {
            return array();
        }
        
        $data = $attributeArray[$attributeName];
        $classFactory = self::buildClassName($attributeName) . '::factory';
        if (is_array($data)) {
            $objectArray = array_map($classFactory, $data);
        } else {
            return array($data);
        }
        
        unset($attributeArray[$attributeName]);
        
        return $objectArray;
    }
    
    public static function throwStatusCodeException($statusCode, $message = null) {
        switch($statusCode) {
            case 401:
                throw new GameRocket_Exception_Authentication();
                break;
            
            case 403:
                throw new GameRocket_Exception_Authorization($message);
                break;
            
            case 404:
                throw new GameRocket_Exception_NotFound();
                break;
            
            case 426:
                throw new GameRocket_Exception_UpgradeRequired();
                break;
            
            case 500:
                throw new GameRocket_Exception_ServerError();
                break;
            
            case 503:
                throw new GameRocket_Exception_DownForMaintenance();
                break;
            
            default:
                throw new GameRocket_Exception_Unexpected('Unexpected HTTP_RESPONSE #' . $statusCode);
                break;
        }
    }
    
    public static function cleanClassName($name) {
        $classNamesToResponseKeys = array(
            'Achievement' => 'achievement',
            'AchievementTemplate' => 'achievementTemplate',
            'Action' => 'action',
            'Game' => 'game',
            'Player' => 'player',
            'Purchase' => 'purchase',
            'Map' => 'map'
        );
        
        $name = str_replace('GameRocket_', '', $name);
        return $classNamesToResponseKeys[$name];
    }
    
    public static function buildClassName($name) {
        $responseKeysToClassNames = array(
            'achievement' => 'Achievement',
            'achievementTemplate' => 'AchievementTemplate',
            'action' => 'Action',
            'game' => 'Game',
            'player' => 'Player',
            'purchase' => 'Purchase',
            'map' => 'Map'
        );
        
        return 'GameRocket_' . $responseKeysToClassNames[$name];
    }
    
    public static function delimiterToCamelCase($string, $delimiter = '[\-\_]') {
        return preg_replace('/' . $delimiter . '(\w)/e', 'strtoupper("$1")', $string);
    }
    
    public static function delimiterToUnderscore($string) {
        return preg_replace('/-/', '_', $string);
    }
    
    public static function camelCaseToDelimiter($string, $delimiter = '-') {
        return preg_replace('/([A-Z])/e', '"' . $delimiter . '" . strtolower("$1")', $string);
    }
    
    public static function implodeAssociativeArray($array, $separator = '=', $glue = ', ') {
        $tmpArray = null;
        foreach ($array AS $key => $value) {
            $tmpArray[] = $key . $separator . $value;
        }
        
        return (is_array($tmpArray)) ? implode($glue, $tmpArray) : false;
    }
    
    public static function attributesToString($attributes) {
        $printableAttribs = array();
        foreach ($attributes AS $key => $value) {
            if (is_array($value)) {
                $pAttrib = GameRocket_Util::attributesToString($value);
            } else if ($value instanceof DateTime) {
                $pAttrib = $value->format(DateTime::RFC850);
            } else {
                $pAttrib = $value;
            }
            
            $printableAttribs[$key] = sprintf('%s', $pAttrib);
        }
        
        return GameRocket_Util::implodeAssociativeArray($printableAttribs);
    }
    
    public static function verifyKeys($signature, $attributes) {
        $validKeys = self::_flattenArray($signature);
        $userKeys = self::_flattenUserKeys($attributes);
        $invalidKeys = array_diff($userKeys, $validKeys);
        $invalidKeys = self::_removeWildcardKeys($validKeys, $invalidKeys);
        
        if (!empty($invalidKeys)) {
            asort($invalidKeys);
            $sortedList = join(', ', $invalidKeys);
            throw new InvalidArgumentException('invalid keys: ' . $sortedList);
        }
    }
    
    private static function _flattenArray($keys, $namespace = null) {
        $flattenedArray = array();
        foreach ($keys AS $key) {
            if (is_array($key)) {
                $theKeys = array_keys($key);
                $theValues = array_values($key);
                $scope = $theKeys[0];
                $fullKey = empty($namespace) ? $scope : $namespace . '[' . $scope . ']';
                $flattenedArray = array_merge($flattenedArray, self::_flattenArray($theValues[0], $fullKey));
            } else {
                $fullKey = empty($namespace) ? $key : $namespace . '[' . $key . ']';
                $flattenedArray[] = $fullKey;
            }
        }
        
        sort($flattenedArray);
        return $flattenedArray;
    }
    
    private static function _flattenUserKeys($keys, $namespace = null) {
        $flattenedArray = array();
        
        foreach ($keys AS $key => $value) {
            $fullKey = empty($namespace) ? $key : $namespace;
            if (!is_numeric($key) && $namespace != null) {
                $fullKey .= '[' . $key . ']';
            }
            if (is_numeric($key) && is_string($value)) {
                $fullKey .= '[' . $value . ']';
            }
            if (is_array($value)) {
                $more = self::_flattenUserKeys($value, $fullKey);
                $flattenedArray = array_merge($flattenedArray, $more);
            } else {
                $flattenedArray[] = $fullKey;
            }
        }
        
        sort($flattenedArray);
        return $flattenedArray;
    }
    
    private static function _removeWildcardKeys($validKeys, $invalidKeys) {
        foreach ($validKeys AS $key) {
            if (stristr($key, '[_anyKey_]')) {
                $wildcardKey = str_replace('[_anyKey_]', '', $key);
                foreach ($invalidKeys AS $index => $invalidKey) {
                    if (stristr($invalidKey, $wildcardKey)) {
                        unset($invalidKeys[$index]);
                    }
                }
            }
        }
        
        return $invalidKeys;
    }
}