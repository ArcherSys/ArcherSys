<?php
namespace ArcherSys\UserInput;
require_once "AbstractComponent.php";
use ArcherSys\Viewer\UI\SimpleButton;
class Button extends SimpleButton{
 function __construct($id,callable $content){
    $this->id = $id;
    $this->render($content);
 }
 function render(callable $content){
     echo"<button id='".$this->id."'>".$content()."</button>";
 }
}