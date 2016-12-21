<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
  require_once  $_SERVER["DOCUMENT_ROOT"]."/includes/ViewManager.php";
  require_once  $_SERVER["DOCUMENT_ROOT"]."/includes/DataManager.php";

  
  require_once  $_SERVER["DOCUMENT_ROOT"]."/includes/StyleSheetManager.php";
  require_once  $_SERVER["DOCUMENT_ROOT"]."/includes/DateManager.php";
  require_once  $_SERVER["DOCUMENT_ROOT"]."/includes/LogicManager.php";
  use ArcherSys\Viewer\ViewManager;
  use ArcherSys\Data\DataManager;
  use ArcherSys\Viewer\LogicManager;
use CarnosOS\Config\ConfigData;
  use ArcherSys\Styles\StyleSheetManager;
  
  use ArcherSys\Timex\DateManager;
  LogicManager::runStartScreen();
  $config = ConfigData::GetConfig();
 // Connects to your Database
@ini_set("max_execution_time", 300);
   mysql_connect($config["dbhost"], $config["dbuser"], $config["dbpass"]) or DataManager::notify();
   
 mysql_select_db( "acoserver_acoserver") or DataManager::notify();

 
 //checks cookies to make sure they are logged in



 
if(isset($_COOKIE['ID_ARCHERVMCASHEW']) || isset($_COOKIE["Role_ARCHERVMCASHEW"]))

 {

 	$username = $_COOKIE['ID_ARCHERVMCASHEW'];

 	$pass = $_COOKIE['Key_ARCHERVMCASHEW'];

 	 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or DataManager::notify();

 	while($info = mysql_fetch_array( $check ))

 		{

 

 //if the cookie has the wrong password, they are taken to the login page

 		if ($pass != $info['password'] || $info["Role"] != "Admin")

 			{ 			header("Location: http://localhost/login.php?redirect_uri=${_SERVER['PHP_SELF']}&roleDetect=Admin");

 			}

 

 //otherwise they are shown the admin area

 	else

 			{

  
?>
<?php phpinfo() ?>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<div class="g-hangout" data-render="createhangout"></div>

<?php

 			}

 		}

 		}

else {
  
header("Location: http://localhost/login.php?redirect_uri=${_SERVER['PHP_SELF']}&roleDetect=Admin");

 }

  

 
		
		?>
