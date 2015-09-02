<?php
namespace ArcherSys\PocketView.php;
require_once "View.php";
class PocketView extends View{
	 function __construct($title,callable $head,){
	 	echo "<!DOCTYPE HTML>";
	 	echo "<head>";
	 	echo "<meta name='viewport' content='width=device-width initial-scale=1'>\n".
    
  "<link rel='stylesheet'  href='core/mobile-theme/themes/ArcherSys_OS.css' />\n".
  "<link rel='stylesheet' href='core/mobile-theme/themes/jquery.mobile.icons.min.css' />\n".
  "<link rel='stylesheet' href='core/mobile-theme/themes/jquery.mobile.structure-1.4.5.min.css' />\n".
  "<script src='core/js/libs/jquery.min.js'></script>\n".
  "<script src='core/mobile-theme/jquery.mobile-1.4.5.min.js'></script>\n";
	 	$head();
	 	echo "</head>"
	 }
	
}
?>