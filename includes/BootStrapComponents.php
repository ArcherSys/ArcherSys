<?php
namespace ArcherSys\Bootstrap;
require_once "AbstractComponent.php";
use ArcherSys\Viewer\UI\AbstractComponent;
class DropdownComponent extends AbstractComponent{
	 public $links;
	 public $menutitle;
	 function __construct($menutitle,$links){
	 	$this->menutitle = $menutitle;
	 	$this->links = $links;
	 	
	 }
	 function __call(){
	 
	 }
}