<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/DataManager.php";
use ArcherSys\Data\DataManager;
DataManager::initUserRegConnection(array(
"dbhost" => "localhost",
"dbuser" => "root",
"dbpass" => "aco1234"
)
);
DataManager::useDatabase("acosever_acoserver");
$name = $_POST["gamename"];
$path = $_POST["path"];
DataManager::QueryRegistry("INSERT INTO 'cplive_games' ('name','Path') VALUES('".$name."','".$path."')");
?>
