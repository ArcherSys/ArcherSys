<?php
if (!@ob_start("ob_gzhandler")) @ob_start();
include ('./inc/functions.php');
$page=(isset($_GET['page'])) ? $_GET['page'] : 'main.php';
if (!file_exists("./work/config/mysqldumper.php"))
{
	header("location: install.php");
	ob_end_flush();
	die();
}
  require_once $_SERVER["DOCUMENT_ROOT"]."\config.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."\includes\ViewManager.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."\includes\DataManager.php";
require_once $_SERVER["DOCUMENT_ROOT"]."\includes\AuthenticatorBuilder.php";
  
  require_once $_SERVER["DOCUMENT_ROOT"]."\includes\StyleSheetManager.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."\includes\DateManager.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."\includes\LogicManager.php";
  use ArcherSys\Viewer\ViewManager;
  use ArcherSys\Data\DataManager;
  use ArcherSys\Viewer\LogicManager;

  use ArcherSys\Styles\StyleSheetManager;
  use ArcherSys\Nav\AuthenticatorBuilder;
  use ArcherSys\Timex\DateManager;
 use CarnosOS\Config\ConfigData;
 $config =  ConfigData::getConfig();
 // Connects to your Database
@ini_set("max_execution_time", 300);
   mysql_connect($config["dbhost"], $config["dbuser"], $config["dbpass"]) or DataManager::notify();
   
 mysql_select_db( "acoserver_acoserver") or DataManager::notify();

 
 //checks cookies to make sure they are logged in



 
if(isset($_COOKIE['ID_ARCHERVMCASHEW']))

 {

 	$username = $_COOKIE['ID_ARCHERVMCASHEW'];

 	$pass = $_COOKIE['Key_ARCHERVMCASHEW'];

 	 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or DataManager::notify();

 	while($info = mysql_fetch_array( $check ))

 		{

 

 //if the cookie has the wrong password, they are taken to the login page

 		if ($pass != $info['password'])

 			{ 			header("Location: login.php");

 			}

 

 //otherwise they are shown the admin area

 	else

 			{

  
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN"
        "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="Author" content="Daniel Schlichtholz">
<title>MySQLDumper</title>
</head>

<frameset border=0 cols="190,*">
	<frame name="MySQL_Dumper_menu" src="menu.php" scrolling="no" noresize
		frameborder="0" marginwidth="0" marginheight="0">
	<frame name="MySQL_Dumper_content" src="<?php
	echo $page;
	?>"
		scrolling="auto" frameborder="0" marginwidth="0" marginheight="0">
</frameset>
</html>
<?php

  
 			}

 		}

 		}

else {
  
header("Location: http://localhost/login.php?redirect_uri=".$_SERVER["PHP_SELF"]."&roleDetect=\"Admin\"");

 }

  

 

ob_end_flush();
?>