<?php
namespace ArcherSys;
 function import($klass){
 	require $class.".php";
 }
 spl_autoload_register(import);