<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
  require_once "PsiphonDestroyer.class.php";
   use ArcherSys\Data\DataManager;
  use ArcherSys\Enterprise\ProxyDestroyer;
  ProxyDestroyer::initializeTerminal($config);

  ProxyDestroyer::installTable();
   
  ?>