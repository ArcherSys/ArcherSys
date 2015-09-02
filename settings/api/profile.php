<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/includes/DataManager.php";
  use ArcherSys\Data\DataManager;
  DataManager::initUserRegConnection($config);
  DataManager::useDatabase("acoserver_acoserver");
   if(!$_POST["timezone"]){
  if($_FILES){
  $name = $_FILES["pic"]["name"];
  move_uploaded_file($_FILES["pic"]["tmp_name"], $_POST["profile_name"]);
  DataManager::QueryRegistry("UPDATE users SET profile_image = '".$_POST["profile_name"]."' WHERE 1");
  }}else{
      
  DataManager::QueryRegistry("UPDATE users SET timezone = '".$_POST["timezone"]."' WHERE 1");
  echo "<div class='update'>Timezone Saved</div>";
  }
  ?>