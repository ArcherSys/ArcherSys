<?php
namespace ArcherSys\Logic;
require_once 'AbstractLogicManager.php';
use ArcherSys\Logic\AbstractLogicManager;
class JavscriptLogicManager extends AbstractLogicManager{
	static function defineWithMIME($base,$real){
		header("Content-Type: '".$base."/.$real.'");
	}
	static function echoCode($code){
		echo $code;
	}
}
