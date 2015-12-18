<?php
namespace ArcherSys\Data;

require_once $_SERVER["DOCUMENT_ROOT"].'/includes/DataManager.php';
class DataManager{
  static function initUserRegConnection($config){
  	mysql_connect($config["dbhost"], $config["dbuser"], $config["dbpass"]);
  }
  static function useDatabase($db){
  	mysql_select_db($db);
  }
<<<<<<< HEAD
=======

  static function Connect($config){
DataManager::initUserRegConnection($config);
      DataManager::useDatabase("acoserver_acoserver");
  }
<<<<<<< HEAD
>>>>>>> 5e7b2c757565054acf1b6acdbff6480e574a8d68
=======
    static function ConnectFull($config,$db){
DataManager::initUserRegConnection($config);
      DataManager::useDatabase($db);
  }
>>>>>>> a48cd5be69c9bbd8cff216285c99f692e4d53e6c
 static function notify(){
 die(mysql_error());
}
static function QueryRegistry($sql){
	return mysql_query($sql);
}
<<<<<<< HEAD
=======

static function makeTable($tablename,$metadata){
    DataManager::QueryRegistry("CREATE TABLE ".$tablename." (".$metadata.")");
}
>>>>>>> 5e7b2c757565054acf1b6acdbff6480e574a8d68
}
?>