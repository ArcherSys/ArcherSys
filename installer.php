<?php
require_once"config.php";
$wallpaper_install_code = <<<INSTALL_CODE
CREATE TABLE login_wallpapers (
id INTEGER AUTO_INCREMENT PRIMARY KEY, name TEXT NOT NULL, url  TEXT NOT NULL, description TEXT);
INSERT INTO login_wallpapers ('name','url') VALUES ('Mountain','http://lorempixel.com/1400/900/nature/3');

INSTALL_CODE;
echo "Initializing Database...";
 mysql_connect($config["dbhost"],$config["dbuser"],$config["dbpass"]);
 
 mysql_select_db("acoserver_acoserver");
 mysql_query("CREATE TABLE IF NOT EXISTS `users` (  `ID` mediumint(9) NOT NULL, `username` varchar(60) DEFAULT NULL,`password` varchar(60) DEFAULT NULL,`Role` enum('Admin','Guest','User','') NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
 mysql_query("")
 ?>