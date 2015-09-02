<?php
require_once 'vendor/autoload.php';
use Sabre\DAV;
use Sabre\DAV\Auth;

$rootDirectory = new DAV\FS\Directory('public');
$baseUri = $_SERVER["PHP_SELF"];
$server = new DAV\Server($rootDirectory);
$server->setBaseUri($baseUri);
$server->addPlugin(new DAV\Browser\GuessContentType());

$tmpDir = $_SERVER["DOCUMENT_ROOT"]."\archervmtmp";
$tempFF = new DAV\TemporaryFileFilterPlugin($tmpDir);

$server->addPlugin($tempFF);


$server->addPlugin(new DAV\Mount\Plugin());
$server->addPlugin(new DAV\Browser\Plugin());

$server->exec();



