<?php

class GameRocket_Result_Successful extends GameRocket_Instance {
    
    public $success = true;
    
    private $_returnObjectName;
    
    public function __construct($objToReturn = null) {
        if (!empty($objToReturn)) {
            $property = GameRocket_Util::cleanClassName(get_class($objToReturn));
            $this->_returnObjectName = $property;
            $this->$property = $objToReturn;
        }
    }
    
    public function __toString() {
        $returnObject = $this->_returnObjectName;
        return __CLASS__ . '[' . $this->$returnObject->__toString() . ']';
    }
}