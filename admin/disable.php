<?php
$user = $_POST["username"];
 $sql = "UPDATE `users` SET `Disabled`= 1 WHERE username = '${user}'";
 
  require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
  mysql_connect($config["dbhost"], $config["dbuser"], $config["dbpass"]) or mysql_error();
   
 mysql_select_db( "acoserver_acoserver") or mysql_error();
 if(mysql_query($sql)){
 
 echo "Disabled ".$_POST["username"];
 }else{
     echo "Did not disable".$_POST["username"]."\n ".mysql_error();
 }
 ?>
