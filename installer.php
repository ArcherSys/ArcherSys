<?php
require_once "config.php";
 mysql_connect($config["dbuser"],$config["dbuser"],$config["dbpass"]);
 mysql_select_db("acoserver_acoserver");
 mysql_query("CREATE TABLE IF NOT EXISTS `users` (  `ID` mediumint(9) NOT NULL, `username` varchar(60) DEFAULT NULL,`password` varchar(60) DEFAULT NULL,`Role` enum('Admin','Guest','User','') NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
 ?>