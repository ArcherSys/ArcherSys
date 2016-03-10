<?php
require_once"config.php";
$wallpaper_install_code = <<<INSTALL_CODE
CREATE TABLE login_wallpapers (
`id` mediumint(255) AUTO_INCREMENT PRIMARY KEY, name text NOT NULL, url  text NOT NULL, description text)ENGINE=InnoDB DEFAULT CHARSET=latin1;


		

INSTALL_CODE;
echo "Initializing Database...";
 mysql_connect($config["dbhost"],$config["dbuser"],$config["dbpass"]);
 
 mysql_select_db("acoserver_acoserver");
 echo("Creating users login table...");
 mysql_query("CREATE TABLE IF NOT EXISTS `users` ( `ID` mediumint(9) NOT NULL, `username` varchar(60) DEFAULT NULL,`password` varchar(60) DEFAULT NULL,`Role` enum('Admin','Guest','User','') NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1");
 echo("Making changes to the roles table");
 mysql_query("ALTER TABLE `users` ADD `Disabled` BOOLEAN NOT NULL AFTER `Role`") or die(mysql_error());
 echo("Installing Wallpaper...");
 mysql_query($wallpaper_install_code) or die(mysql_error());
 mysql_query("INSERT INTO `login_wallpapers` (`id`, `name`, `url`, `description`) VALUES (NULL, 'Mountain', 'http://lorempixel.com/1400/900/nature/3', NULL)");
 ?>