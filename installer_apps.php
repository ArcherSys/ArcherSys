<?php
require_once "includes/AppZip.php";
use ArcherSys\AppInstaller\AppZip;
$newfile = $_GET["ZN"];
if($_GET["UseStore"] == "no"){
    if (!isset($_SERVER['PHP_AUTH_USER']) && md5($_SERVER["PHP_AUTH_PW"]) == $_COOKIE["Key_ARCHERVMCASHEW"]) {
    header('WWW-Authenticate: Negotiate Basic realm="Authorize App Name?"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';
    exit;
} else {
   

$app = AppZip::openAppArchive($_GET["AppArchive"]);
}
}else{
    if (!isset($_SERVER['PHP_AUTH_USER']) && md5($_SERVER["PHP_AUTH_PW"]) == $_COOKIE["Key_ARCHERVMCASHEW"]) {
    header('WWW-Authenticate: Negotiate Basic realm="Authorize App Name?"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';
    exit;
} else {
   
copy($_GET["AppArchive"],$newfile );
$app = AppZip::openAppArchive($newfile);
AppZip::installRawApp($app,true,true);
}
}
?>