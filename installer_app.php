<?php
require_once"config.php";
use CarnosOS\Config\ConfigData;
$config = ConfigData::getConfig();

$filename = "mypress.sql";
echo "</br>Initializing Database...";
 mysql_connect($config["dbhost"],$config["dbuser"],$config["dbpass"]);
 mysql_select_db("acoserver_acoserver");
 echo "Installing Producktiviti -  MyPress...";
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
 echo "</br>Productiviti Installed Successfully!"

 ?>