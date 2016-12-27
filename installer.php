<?php
require_once"config.php";
use CarnosOS\Config\ConfigData;
$config = ConfigData::getConfig();
@ini_set("max_execution_time",300);
$wallpaper_install_code = <<<INSTALL_CODE
CREATE TABLE login_wallpapers (
`id` mediumint(255) AUTO_INCREMENT PRIMARY KEY, name text NOT NULL, url  text NOT NULL, description text)ENGINE=InnoDB DEFAULT CHARSET=latin1;


	

INSTALL_CODE;
$filename = "installer/sql/webmail.sql";
echo "</br>Initializing Database...";
 mysql_connect($config["dbhost"],$config["dbuser"],$config["dbpass"]);
 mysql_query("CREATE DATABASE IF NOT EXISTS `".$config["dbname"]."`");
 mysql_select_db("acoserver_acoserver");
 echo("</br>Creating users login table...");
 mysql_query("CREATE TABLE IF NOT EXISTS `users` ( `ID` mediumint(9) NOT NULL, `username` varchar(60) DEFAULT NULL,`password` varchar(60) DEFAULT NULL,`Role` enum('Admin','Guest','User','') NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1");
 echo("</br>Making changes to the roles table");
 mysql_query("ALTER TABLE `users` ADD `Disabled` BOOLEAN NOT NULL AFTER `Role`") or die(mysql_error());
 mysql_query("ALTER TABLE `users` ADD PRIMARY KEY (`ID`)");
 mysql_query("ALTER TABLE `users` ADD `ProfilePicture` TEXT NOT NULL AFTER `Disabled`");
 echo("</br>Installing Wallpaper...");
 mysql_query($wallpaper_install_code) or die(mysql_error());
 mysql_query("INSERT INTO `login_wallpapers` (`id`, `name`, `url`, `description`) VALUES (NULL, 'Mountain', 'http://lorempixel.com/1400/900/nature/3', NULL)");
 echo "</br>Installing WebMail Code";
 $templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line)
{
// Skip it if it's a comment
if (substr($line, 0, 2) == '--' || $line == '')
    continue;

// Add this line to the current segment
$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
if (substr(trim($line), -1, 1) == ';')
{
    // Perform the query
    mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
    // Reset temp variable to empty
    $templine = '';
}
}
echo "</br>Installing Admin Forum....";
$filename  = "installer/sql/adminbb.sql";
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line)
{
// Skip it if it's a comment
if (substr($line, 0, 2) == '--' || $line == '')
    continue;

// Add this line to the current segment
$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
if (substr(trim($line), -1, 1) == ';')
{
    // Perform the query
    mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
    // Reset temp variable to empty
    $templine = '';
}
}
echo "</br>Installing Desktop System...";
$filename = "installer/sql/currentdesktopapplications.sql";
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line)
{
// Skip it if it's a comment
if (substr($line, 0, 2) == '--' || $line == '')
    continue;

// Add this line to the current segment
$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
if (substr(trim($line), -1, 1) == ';')
{
    // Perform the query
    mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
    // Reset temp variable to empty
    $templine = '';
}
}


$install_Complete =  file_get_contents("install_ui.ui");

 echo $install_Complete;
 ?>