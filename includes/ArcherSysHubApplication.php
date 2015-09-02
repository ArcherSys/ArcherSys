<?php

namespace ArcherSys\Podio;
define("REDIRECT_URI", $_SERVER["PHP_SELF"]);

require_once "View.php";
require_once "podio-php-4.0.2/PodioAPI.php";
use ArcherSys\Viewer\Contrib\View;
use Podio;
use PodioItem;
use PodioReference;

class ArcherSysHubApplication {
	function __construct(){
		
		Podio::setup("archersyshub", "NafV4XKbuHON4a1TtXfIuaByTWbyXnxO16MN57CPKRUJQY1YCRnSNbBHELCepsUF");
		Podio::authenticate_with_app(12447547, "e423f556ccf6485c98ae4b6b61977841");

   $items = PodioItem::filter(12447547);
		    echo json_encode(array(
		    		"count" => count($items),
		    		"data" => $items));	
	
	}
}