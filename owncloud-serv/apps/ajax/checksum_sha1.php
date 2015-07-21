<?php
// chech if app is enabled
OCP\JSON::checkAppEnabled('checksums');
OCP\JSON::checkLoggedIn();
OCP\JSON::callCheck();

// get file
$source = $_GET['source'];
$dir = $_GET['dir'];
$file = $dir.$source;
if($info = \OC\Files\Filesystem::getLocalFile($file)){
  $sh = sha1_file($info);
  OCP\JSON::success(array('data' => array($sh)));
} else {
  OCP\JSON::error(array('data' => array('An Error occured.')));
};


