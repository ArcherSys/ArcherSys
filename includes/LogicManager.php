<?php
  namespace ArcherSys\Viewer;
 class LogicManager {
   static function addReCAPTCHA(){
     echo "<script src='https://www.google.com/recaptcha/api.js?fallback=true'></script>";
 }
 static function addGPlus(){
   echo '<script type="text/javascript">(function() {
    var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true; po.src = \'https://apis.google.com/js/platform.js\';var s = document.getElementsByTagName(\'script\')[0]; .parentNode.insertBefore(po, s);})();</script>';
 }
}