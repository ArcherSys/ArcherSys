<?php

class GameRocket_Result_Error extends GameRocket {
    
    public $success = false;
    
    public function __construct($response) {
        $this->_attributes = $response;
    }
    
    public function __toString() {
        $output = GameRocket_Util::attributesToString($this->_attributes);
        
        return __CLASS__ . '[' . $output . ']';
    }
}