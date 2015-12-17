
<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
  require_once  $_SERVER["DOCUMENT_ROOT"]."/includes/component-functions.php";
  require_once  $_SERVER["DOCUMENT_ROOT"]."/includes/ViewManager.php";
  require_once  $_SERVER["DOCUMENT_ROOT"]."/includes/DataManager.php";

  
  require_once  $_SERVER["DOCUMENT_ROOT"]."/includes/StyleSheetManager.php";
  require_once  $_SERVER["DOCUMENT_ROOT"]."/includes/DateManager.php";
  require_once  $_SERVER["DOCUMENT_ROOT"]."/includes/LogicManager.php";
  use ArcherSys\Viewer\ViewManager;
  use ArcherSys\Data\DataManager;
  use ArcherSys\Viewer\LogicManager;

  use ArcherSys\Styles\StyleSheetManager;
  
  use ArcherSys\Timex\DateManager;
  LogicManager::runStartScreen();
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

 		if ($pass != $info['password'] || $info["role"] != $_GET["roleDetect
 		"])

 			{ 			header("Location: http://localhost/login.php?redirect_uri=".$_SERVER['PHP_SELF']."&roleDetect='Admin'");

 			}

 

 //otherwise they are shown the admin area

 	else

 			{

  
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Portal</title>
<script src="/settings/components/webcomponentsjs/webcomponents.js"></script>
<link rel="import" href="/settings/components/polymer/polymer.html">
<link rel="import" href="/settings/components/core-header-panel/core-header-panel.html">

<link rel="import" href="/settings/components/core-icon-button/core-icon-button.html">

<link rel="import" href="/settings/components/core-menu/core-menu.html">
<link rel="import" href="/settings/components/core-item/core-item.html">
<script src="/core/js/jquery.js"></script>

<link rel="import" href="/settings/components/font-roboto/roboto.html">
<link rel="import" href="/settings/components/core-toolbar/core-toolbar.html">
</head>
<body fullbleed layout horizontal>
<style>
 core-toolbar{
  font-family:  RobotoDraft, Segoe UI;
   background-color: crimson;
   color: whitesmoke;

}
core-menu{
  font-family:  RobotoDraft, Segoe UI;
color: whitesmoke;
background-color: blue;
}

</style>
<core-header-panel flex>
 <core-toolbar>
<core-icon-button icon="menu"></core-icon-button>
<div flex>Admin Panel</div>
</core-toolbar>
<section>
<core-menu>
 <core-item icon="search" id="piwikstarter">Analytics</core-item>
 
 <core-item icon="settings" id="phpMyAdmin">phpMyAdmin</core-item>
</core-menu>
</section>
<script>
$(function(){
  $("#piwikstarter").click(function(){
    window.location.assign("http://localhost/admin/piwik/");
 });
 $("#phpMyAdmin").click(function(){
    window.location.assign("http://localhost/admin/WebMyAdmin/phpMyAdmin2/");
 });

});

</script>

</core-header-panel>
</body>
</html>
<?php

 			}

 		}

 		}

else {
  
header("Location: http://localhost/login.php?redirect_uri=${_SERVER['PHP_SELF']}&roleDetect=Admin");

 }

  

 
		
		?>
