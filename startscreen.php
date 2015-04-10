<?php
   require_once "includes/LogicManager.php";
   use ArcherSys\Viewer\LogicManager;
   LogicManager::runStartScreen();
   setcookie("ASOSSTARTSCREEN","yes",time()*3600*24*7*52);

   setcookie("ID_ARCHEVMCASHEW","",time()*3600*24*7*52);

   setcookie("Key_ARCHEVMCASHEW","",time()*3600*24*7*52);
  
?>