<?php 
  namespace ArcherSys\Applications;
  require_once $_SERVER["DOCUMENT_ROOT"]."\config.php";

  class ArcherSysOSRegistryInstaller {
   
 static function UseRegistryModule($module){
    mysql_connect($config["dbhost"], "root", (isset($config["dbpass"])) ? $config["dbpass"] : "aco1234");
    mysql_select_db("acoserver_".$module);
}


}
?>