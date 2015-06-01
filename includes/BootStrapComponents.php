<?php
namespace ArcherSys\Bootstrap;
require_once "AbstractComponent.php";
use ArcherSys\Viewer\UI\AbstractComponent;

class Container extends AbstractComponent{
	public $onCreate;
	function __construct(callable $onCreate){
		$this->build($onCreate);
	}
	function build($onCreate){
		echo '<div class="container-fluid">';
		$onCreate();
		echo "</div>";
}
}
class  NavBar extends AbstractComponent{
	function __construct(callable $onCreate){
		$this->build($onCreate);
	}
	function build(callable $onCreate){
		echo '<nav class="nav navbar-default navbar-fixed-top " role="navigation">';
		$onCreate();
		echo "</nav>";
	}
}
?>