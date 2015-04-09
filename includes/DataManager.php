<?php
namespace ArcherSys\Data;

require_once $_sERVER["DOCUMENT_ROOT"].'includes\DataManager.php';
class DataManager{
  
 static function notify(){
 die(mysql_error());
}
}
?>