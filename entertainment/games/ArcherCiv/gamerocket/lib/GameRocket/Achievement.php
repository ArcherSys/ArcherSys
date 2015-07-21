<?php

class GameRocket_Achievement extends GameRocket {
    
    public static function find($player, $id, $params) {
        self::_validateId($player);
        self::_validateId($id);
        
        try {
            $response = GameRocket_Http::get('/players/' . $player . '/achievements/' . $id, $params);
            return self::factory($response['achievement']);
        } catch (GameRocket_Exception_NotFound $e) {
            throw new GameRocket_Exception_NotFound('Achievement with id ' . $id . ' not found.');
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
        $this->_set('template', GameRocket_AchievementTemplate::factory($attributes['template']));
    }
    
    private static function _validateId($id = null) {
        if (empty($id)) {
            throw new InvalidArgumentException('Expected id to be set.');
        }
    }
}