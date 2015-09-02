<?php

class GameRocket_AchievementTemplate extends GameRocket {
    
    public static function factory($attributes) {
        $instance = new self();
        $instance->_initialize($attributes);
        return $instance;
    }
    
    protected function _initialize($attributes) {
        $this->_attributes = $attributes;
        
        $this->_set('dynProp', new GameRocket_DynProp($attributes['dynProp']));
    }
}