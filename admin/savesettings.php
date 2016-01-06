<?php
$user = $_POST["username"];
$role = $_POST["role"];
$roles = array(
    "Admin" => 0,
    "Guest" => 1,
    "User" => 2
    );
    $current_role = $roles[$role];
 $sql = "UPDATE `users` SET `role`= ${current_role} WHERE username = '${user}'";
 
  require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
  mysql_connect($config["dbhost"], $config["dbuser"], $config["dbpass"]) or mysql_error();
   
 mysql_select_db( "acoserver_acoserver") or mysql_error();
 if(mysql_query($sql)){
 
 echo "Changed  ${user} to ${role}";
 }else{
     echo "Did not change ${user} to ${role}; \n ".mysql_error();
 }
 ?>
