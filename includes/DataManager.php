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
 static function notify(){
 die(mysql_error());
}
static function QueryRegistry($sql){
	return mysql_query($sql);
}
}
?>