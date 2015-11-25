<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/DataManager.php";
use ArcherSys\Data\DataManager;
DataManager::Connect($config);
echo "<!DOCTYPE HTML><html><head><title>Setting up Server</title></head><body>";
echo "Installing Table";
DataManager::QueryRegistry("SOURCE cplive_games.sql");
echo "Done.";
echo "</body>";
echo "</html>";
?>