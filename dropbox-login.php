<?php
require_once "vendor/autoload.php";
use Dropbox;

$appInfo = Dropbox\AppInfo::loadFromJsonFile("config.json");
$webAuth = new Dropbox\WebAuthNoRedirect($appInfo, "ArcherSys/1.0");

$authorizeUrl = $webAuth->start();
echo "1. Go to: " . $authorizeUrl . "\n";
echo "2. Click \"Allow\" (you might have to log in first).\n";
echo "3. Copy the authorization code.\n";
$authCode = \trim(\readline("Enter the authorization code here: "));
?>