
<?php
@ini_set("display_errors","0");
  require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
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

  $role = $_COOKIE["Role_ARCHERVMCASHEW"];

 //if the cookie has the wrong password, they are taken to the login page

 		if ($pass != $info['password'] || $role != $_GET["roleDetect"])

 			{ 			header("Location: http://localhost/login.php?redirect_uri=".$_SERVER['PHP_SELF']."&roleDetect=Admin");

 			}

 

 //otherwise they are shown the admin area

 	else

 			{

  
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Portal</title>
<script src="/core/components/webcomponentsjs/webcomponents.js"></script>
<link rel="import" href="/core/components/polymer/polymer.html">
<link rel="import" href="/core/components/core-header-panel/core-header-panel.html">

<script src="/core/components/prism/prism.js"></script>
<link rel="import" href="/core/components/promise-polyfill/promise-polyfill-lite.html">

<link rel="import" href="/core/components/prism-element/prism-highlighter.html">
<link rel="import" href="/core/components/core-icon-button/core-icon-button.html">

  <link rel="import" href="/core/components/iron-icons/iron-icons.html">
  <link rel="import" href="/core/components/marked-element/marked-element.html">
  <link rel="import" href="/core/components/iron-doc-viewer/iron-doc-viewer.html">
  <link rel="import" href="/core/components/iron-selector/iron-selector.html">
  <link rel="import" href="/core/components/iron-ajax/iron-ajax.html">
  <link rel="import" href="/core/components/iron-component-page/iron-component-page.html">
<link rel="import" href="/core/components/paper-card/paper-card.html">

<link rel="import" href="/core/components/core-menu/core-menu.html">
<link rel="import" href="/core/components/core-item/core-item.html">
<script src="/core/js/jquery.js"></script>
<link rel="import" href="/core/components/iron-image/iron-image.html">
<link rel="import" href="/core/components/paper-material/paper-material.html">
<link rel="import" href="/core/components/paper-styles/shadow.html">


<link rel="import" href="/core/components/font-roboto/roboto.html">
<link rel="import" href="/core/components/core-toolbar/core-toolbar.html">
</head>
<body fullbleed layout horizontal>
<style>
 core-toolbar{
  font-family:  RobotoDraft, Segoe UI;
   background-color: crimson;
   color: whitesmoke;

}
.card-content{
    font-weight: bold;
     font-family: Segoe UI;
     background-color: silver;
}
paper-card{
    font-family: Segoe UI;
    --paper-card-header-color: green;
}
core-menu{
  font-family:  RobotoDraft, Segoe UI;
color: whitesmoke;
background-color: blue;
}
paper-button.fancy {
  background: green;
  color: yellow;
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
 $(".fancy.disable").click(function(){
     runDisabler($(this).data("username"));
 });
 $(".fancy.enable").click(function(){
     runEnabler($(this).data("username"));
 });

});

</script>
<script>
    function runDisabler(username){
    $.post( "disable.php", {username: username},function( data ) {
        alert(data);
});
}
 function runEnabler(username){
    $.post( "enabler.php", {username: username},function( data ) {
        alert(data);
});
}
</script>
<?php
	$check = mysql_query("SELECT * FROM users WHERE 1")or DataManager::notify();
	while($info = mysql_fetch_array( $check ))

 		{
 		    ?>

<paper-card heading="User">
 <div class="card-content"><h1><?php echo $info["username"];?></h1></div>
  <div class="card-actions">
    <paper-button class="fancy" onclick="window.alert('Delete')"> <iron-icon icon="delete"></iron-icon>Delete</paper-button>
    <paper-button class="fancy disable" data-username="<?php echo $info["username"];?>"> <iron-icon icon="delete"></iron-icon>Disable</paper-button>
       <paper-button class="fancy enable" data-username="<?php echo $info["username"];?>"> <iron-icon icon="add"></iron-icon>Enable</paper-button>
  </div>
</paper-card>
<?php
}
?>
</core-header-panel>
</body>
</html>
<?php

 			}

 		}

 		}

else {
  
header("Location: http://localhost/login.php?redirect_uri=".$_SERVER['PHP_SELF'].
"&roleDetect=Admin");

 }

  

 
		
		?>
