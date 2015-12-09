<?php
namespace ArcherSys\Enterprise;
require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
   require_once $_SERVER["DOCUMENT_ROOT"]."/includes/DataManager.php";
   use ArcherSys\Data\DataManager;
   class ProxyDestroyer{
       static function initializeTerminal($config){
           DataManager::initUserRegConnection($config);
           DataManager::useDatabase("archersys_enterprise");
       }
       static function installRegistryDatabase(){
           DataManager::QueryRegistry("CREATE DATABASE archersys_entreprise");
       }
       static function installTable(){
           DataManager::makeTable("users'"," 'ID' mediumint(9) NOT NULL,
  'username' varchar(60) DEFAULT NULL,
  'password' varchar(60) DEFAULT NULL)");
       }
       static function getUserResult($user,$pass){
           $result = mysql_query("SELECT * FROM `users WHERE  'username' =".$user."AND `password` = ".md5($pass));
           return $result;
               
           
       }
       static function getRes($result){
           $row = mysql_fetch_row($result);
               return $row;
       }
   }