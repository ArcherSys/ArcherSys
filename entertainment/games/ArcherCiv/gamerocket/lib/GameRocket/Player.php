<?php

class GameRocket_Player extends GameRocket {

    public static function find($id) {
        self::_validateId($id);
        
        try {
            $response = GameRocket_Http::get('/players/' . $id);
            return self::factory($response['player']);
        } catch (GameRocket_Exception_NotFound $e) {
            throw new GameRocket_Exception_NotFound('Player with id ' . $id . ' not found.');
        }
    }
    
    public static function createSignature() {
        $signature = array(
            'name', 'locale'
        );
        
        return $signature;
    }
    
    public static function create($attribs = array()) {
        GameRocket_Util::verifyKeys(self::createSignature(), $attribs);
        return self::_doCreate('/games/' . GameRocket_Configuration::apikey() . '/players', $attribs);
    }
    
    private static function _doCreate($url, $params) {
        $response = GameRocket_Http::post($url, $params);
        return self::_verifyGatewayResponse($response);
    }
    
    private static function _verifyGatewayResponse($response) {
        if (isset($response['player'])) {
            return new GameRocket_Result_Successful(self::factory($response['player']));
        } else if (isset($response['error'])) {
            return new GameRocket_Result_Error($response);
        } else {
            throw new GameRocket_Exception_Unexpected("Expected player or error");
        }
    }
    
    public static function update($playerId, $params) {
        self::_validateId($playerId);
        return self::_doUpdate('/players/' . $playerId, $params);
    }
    
    private static function _doUpdate($url, $params) {
        $response = GameRocket_Http::put($url, $params);
        return self::_verifyGatewayResponse($response);
    }
    
    public static function delete($playerId) {
        self::_validateId($playerId);
        GameRocket_Http::delete('/players/' . $playerId);
        return new GameRocket_Result_Successful();
    }
    
    private static function _validateId($id = null) {
        if (empty($id)) {
            throw new InvalidArgumentException('Expected id to be set.');
        }
    }
    
    public static function factory($attributes) {
        $instance = new self();
        $instance->_initialize($attributes);
        return $instance;
    }
    
    protected function _initialize($attributes) {
        $this->_attributes = $attributes;
        
        $this->_set('dynProp', new GameRocket_DynProp($attributes['dynProp']));
    }
    
    public function isEqual($otherPlayer) {
        return !($otherPlayer instanceof GameRocket_Player) ? false : $this->id === $otherPlayer->id;
    }
    
    public function __toString() {
        return __CLASS__ . '[' . GameRocket_Util::attributesToString($this->_attributes) . ']';
    }
}