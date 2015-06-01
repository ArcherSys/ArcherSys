<?php
namespace ArcherSys\UserInput;
class Form{
	public $fields;
}
class TextInput{
	function __construct($name,$placeholder,$maxlength){
		$this->name = $name;
		$this->placeholder = $placeholder;
		$this->maxlength = $maxlength;
	}
	
	function __toString(){
		return '<input type="text" placeholder="'.$this->placeholder.'" maxlength="'.$this->maxlength.'" autofocus>';
	}
}
