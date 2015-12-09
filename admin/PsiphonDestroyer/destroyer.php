<?php

  if (!isset($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate: Basic realm="Login to Destroy Psiphon"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Error ASOS-0005: Psiphon Terminal Lockdown';
    exit;
} else if  ($_SERVER['PHP_AUTH_USER'] == "admin" &&  $_SERVER['PHP_AUTH_PW'] ==
 "rooter"){
echo "Destroying Psiphon(ArcherSys OS)...";
if(file_exists("C:/xampp/htdocs/psiphon3.exe")){
    unlink($_SERVER["DOCUMENT_ROOT"]."/psiphon3.exe");
}
echo "Psiphon(ArcherSys OS) Destroyed";
}
?>