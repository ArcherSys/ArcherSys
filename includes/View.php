<?php
namespace ArcherSys\Viewer\Contrib;
use ArcherSys\Auth\Authenticator;
interface Browsable{
	 function head(callable $onDefine,$title);
	function body(callable $onCreate);
	function __construct($title,callable $onDefine, callable $onCreate);
}
class View implements Browsable{
	public $title;
	function __construct($title, callable $onDefine,callable $onCreate){
		echo "<!DOCTYPE HTML>";
		echo "<html>";
	    $this->head($onDefine,$title);
	    $this->body($onCreate);
	    echo "</html>";
	}
	
	 function head(callable $onDefine, $title){
		echo "<head>";
		echo "<title>".$title."</title>";
		$onDefine();
		echo "</head>";
	}
	
	 function body(callable $onCreate){
		echo "<body>";
		$onCreate();
		echo "</body>";
	}
	
}
class LoginView extends View {
	
    public $title;

	
	function __contstruct($title, callable $onDefine, callable $onCreate, $config){
		
	
	
			//otherwise they are shown the admin area
	
			echo "<!DOCTYPE HTML>";
			echo "<html>";
			$this->head($title,$onDefine);
			$this->body($onCreate);
			echo "</html>";
		
	}
}
?>