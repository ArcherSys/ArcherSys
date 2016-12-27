<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/includes/DataManager.php";
  use ArcherSys\Data\DataManager;
  use CarnosOS\Config\ConfigData;
$config = ConfigData::getConfig();
  DataManager::initUserRegConnection($config);
  DataManager::useDatabase("acoserver_acoserver");
echo $_FILES["pic"]["tmp_name"];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["pic"]["name"]);
  $file = move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file);
  DataManager::QueryRegistry("UPDATE users SET ProfilePicture = 'http://localhost/settings/api/".$target_file."' WHERE 1");
  DataManager::QueryRegistry("UPDATE users SET timezone = '".$_POST["timezone"]."' WHERE 1");
  echo "<div class='update'>Timezone Saved</div>";
 
  ?>