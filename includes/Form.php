<?php
namespace ArcherSys\UserInput;
class Form{
	public $fields = array();
  public $action;
  public $method = "POST";
  public function __construct($action,$submit){
    $this->action = $action;
    $this->submit = $submit;
  }
  function addField(Field $field){
  array_push($this->fields,$field);

}

}
class FileForm extends Form{
    function __toString(){
$formstr = "<form action='".$this->action."' method='".$this->method."' enctype='multipart/form-data' >";

for($i = 0; $i < count($this->fields); $i++){
$formstr .= $this->fields[$i];
}
if(isset($this->submit)){
$formstr .= '<input type="submit" value="'.$this->submit.'"></form>';
}
return $formstr;

}
}
abstract class Field {

}
class FileInput extends Field{
    function __construct($name){
        $this->name = $name;
        
    }
    function __toString(){
        return '<input type="file" name="'.$this->name.'"/>';
    }
}
class TextInput extends Field{
	function __construct($name,$placeholder,$maxlength){
		$this->name = $name;
		$this->placeholder = $placeholder;
		$this->maxlength = $maxlength;
	}
	
	function __toString(){
		return '<input type="text" placeholder="'.$this->placeholder.'" maxlength="'.$this->maxlength.'" autofocus>';
	}
}

class NumberInput extends Field{
 function __construct($name,$min,$max){
     $this->name = $name;
     $this->min = $min;
     $this->max = $max;
     
 }
 function __toString(){
     return '<';
 }
}
class Selector extends Field{
    
  public $options;
  public $name;
  public $code;
  function __construct($name){
      $this->name = $name;
      $this->options = array();
      $this->code = "<select name='".$this->name."'>";
  }
  function addOption(OptionItem $option){
      $this->options[] = $option;
      $this->code .= $option;
  }
  function __toString(){
      $this->code .= "</select>";
  
      return $this->code;
  }
}
class OptionItem{
    public $value;
    public $label;
    function __construct($value,$label){
        $this->label = $label;
        $this->value = $value;
    }
    function __toString(){
        return "<option value='".$this->value."'>".$this->label."</option>";
    }
}

