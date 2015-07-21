<?php
namespace ArcherSys\Angular;
require_once "autoload.php";
use ArcherSys\Polymer\PolymerJSAssetManager;

/*
 * @package ArcherSys
 */
/*
 * 
 * Defines an Angular Application
 */
class AngularApplication{
	
	public $app_name;
	function __construct(){
		$this->app_name = $app_name;
	}
	
	function __call($onCreate){
		 echo $this;
		 $onCreate();
		 echo "</body>";
	}
	function __toString(){
		return "<body ng-app=".$this->app_name.">";
	}
	
}
class AngularController {
	public $controllerName;
	/**
	 * @constructor Creates an AngularJS Controller using PHP for 
	 */
	function __construct($controllerName){
		$this->controllerName = $controllerName;
	}
	/* Adds Content To Controllers
	 *
	 */
	function __call($onInitialization){
		
		echo $this;
		$onInitialization();
		echo "</div>";
	}
	function __toString($klass){
		return "<div class=".$klass." ng-controller=".$controllerName.">";
	}
}
class RepeaterController extends AngularController{
	 public $group;
	 public $item;
	 public $controllerName;
	 public $controllerName;
	 /**
	  * @constructor Creates an AngularJS Controller using PHP for
	  */
	 function __construct($controllerName){
	 	$this->controllerName = $controllerName;
	 }
	 /* Adds Content To Controllers
	  *
	  */
	 function __call($onInitialization){
	 
	 	echo $this;
	 	$onInitialization();
	 	echo "</div>";
	 }
	 function __toString($klass){
	 	return "<div class='".$klass."' ng-repeat='".$item." in ".$group."' ng-controller='".$controllerName."'>";
	 	
	 }
}