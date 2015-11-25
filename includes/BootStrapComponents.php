<?php
namespace ArcherSys\Bootstrap;
require_once "AbstractComponent.php";
use ArcherSys\Viewer\UI\AbstractComponent;
<<<<<<< HEAD

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
=======
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
>>>>>>> 5e7b2c757565054acf1b6acdbff6480e574a8d68
