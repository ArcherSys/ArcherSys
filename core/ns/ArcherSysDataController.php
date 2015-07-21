<?php
 namespace ArcherSys;
 require_once $_SERVER["DOCUMENT_ROOT"]."/vendor/autoload.php";
use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\HttpFoundation\Response;
 class ArcherSysDataController {
    public function  archersysDataAction(){
            return new Response("<h1>ArcherSys Data:</h1> \n");
      }
}