<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/includes/DataManager.php";
  use ArcherSys\Data\DataManager;
  echo "<ul>";
  echo "<li>Initializing Registry Connection</li>";
  DataManager::initUserRegConnection($config);
  echo "<li>Loading Database..</li>";
  echo "<li>Installing the  ArcherSys Application Security System (AASS)...</li>";
  echo "<ul>";
  echo "<li>Initializing Commands..</li>";
  $sql = "CREATE TABLE applications (id INTEGER NOT NULL AUTO_INCREMENT,  name varchar(255) NOT NULL,desc TEXT, whitelisted BOOLEAN NOT NULL, PRIMARY KEY id);";
  echo "<li>Adding Application Table...</li>";
  DataManager:QueryRegistry($sql);
  $sql = "<li>"
  ?>