<?php

abstract class GameRocket_Instance {
    
    public function __construct($attributes) {
        if (!empty($attributes)) {
            $this->_initializeFromArray($attributes);
        }
    } 
    
    public function __get($name) {
        if (array_key_exists($name, $this->_attributes)) {
            return $this->_attributes[$name];
        } else {
            trigger_error('Undefined property on ' . get_class($this) . ': ' . $name, E_USER_NOTICE);
            return null;
        }
    }
    
    public function __toString() {
        $objOutput = GameRocket_Util::implodeAssociativeArray($this->_attributes);
        return get_class($this) . '[' . $objOutput . ']';
    }
    
    private function _initializeFromArray($attributes) {
        $this->_attributes = $attributes;
    }
}