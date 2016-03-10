<?php
namespace  ArcherSys\AngularJS;
class AngularController{
	public $content;
	public $controllerName;
	function __construct($controllerName,callable $content){
		$this->content = $content;
		$this->controllerName = $controllerName;
	}
	function dump(){
		echo "<div ng-controller='${controllerName}'>";
		$this->content();
		echo "</div>";
	}
}