<?php
  namespace ArcherSys\Security;
  
    class User {
	    public $username;
	    public $password;
	    function __construct(){
		    $this->username = $_COOKIE["ID_ARCHERVMCASHEW"];
		    $this->password = $_COOKIE["Key_ARCHERVMCASHEW"];
		    $this->firstname = $_COOKIE["fn_ARCHERVMCASHEW"];
	    }
          
    }
   
?>
