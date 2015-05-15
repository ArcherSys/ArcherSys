<?php
require_once $_SERVER["DOCUMENT_ROOT"]."\includes\View.php";
require_once $_SERVER["DOCUMENT_ROOT"]."\includes\jQueryManager.php";

require_once $_SERVER["DOCUMENT_ROOT"]."\includes\Authenticator.php";
use ArcherSys\Auth\Authenticator;
use ArcherSys\Viewer\jQueryManager;
use ArcherSys\Viewer\Contrib\View;
$desktop = new View("My Desktop",function(){
  jQueryManager::addjQuery();
 echo '<link rel="stylesheet" href="/core/bootstrap/css/bootstrap.min.css">';
 echo  '<script src="/core/bootstrap/js/bootstrap.min.js"></script>';
 echo '<link rel="stylesheet" href="/core/css/desktop.css">';

},function(){
  echo '<div class="container-fluid">';
  echo '<nav class="navbar navbar-default nav-fixed-top">';
  echo '<ul class="nav nav-tabs">';
  echo '<li><a href="#">'.Authenticator::getFullName().'</a></li>';
  echo '</ul>';
  echo '</nav>';
  echo '</div>';

});

