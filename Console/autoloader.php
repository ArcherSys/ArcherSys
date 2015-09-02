<?php
  function __autoload($classname){
    require_once $classname.".php";
   }
?>