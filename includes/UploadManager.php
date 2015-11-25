<?php
namespace ArcherSys\Files;
require_once "AbstractComponent.php";
use ArcherSys\Viewer\UI\AbstractComponent;
class Upload {
	function __construct($filename,$form,$element,$path){
		$this->filename = $_FILES[$filename];
		$this->tmpname = $this->filename["tmp"];
		$this->path = $path;
	}
	function __call(){
		move_uploaded_file($this->tmpname, $this->path);
	}
	
}
class Uploader extends AbstractComponent{
	function __construct(){
		
	}
}