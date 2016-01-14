<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/AccountManager.php";
use ArcherSys\Admin\AccountManager;
  
  mysql_connect($config["dbhost"], $config["dbuser"], $config["dbpass"]) or mysql_error();
   
 mysql_select_db( "acoserver_acoserver") or mysql_error();
 $user = $_POST["username"];
 AccountManager::DisableAccount($user);
 ?>
