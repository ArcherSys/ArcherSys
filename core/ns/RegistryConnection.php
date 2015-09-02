<?php 
namespace ArcherSys;

public class RegistryConnection {
    public $host;
    public $user;
    public $pass;
    public $database;
    public function __construct($host,$user,pass,$db){
      $this->cxn = mysql_connect($host,$user,$pass);
   }
}
?>