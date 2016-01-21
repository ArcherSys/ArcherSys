
<?php
  require_once "includes/AppZip.php";
  use ArcherSys\AppInstaller\AppZip;
  $newfile = $_GET["ZN"];
  if($_GET["UseStore"] == "no"){
  $app = AppZip::openAppArchive($_GET["AppArchive"]);
  }else{
  copy($_GET["AppArchive"],$newfile );
   $app = AppZip::openAppArchive($newfile);
     AppZip::installRawApp($app,true,true);
   }
  ?>


