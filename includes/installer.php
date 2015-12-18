<?php 
require_once "includes/DataManager.php";
use ArcherSys/Data/DataManager;
DataManager::Connect();
DataManager::createTable('users','`ID` mediumint(9) NOT NULL,
  `username` varchar(60) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL');




?>