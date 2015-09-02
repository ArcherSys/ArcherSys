<?php

/*
 * with respect to core/ajax/appconfig.php by Robin Appelman
 * @author Florian Steffens
 */

OCP\JSON::callCheck();

$action=isset($_POST['action'])?$_POST['action']:$_GET['action'];
$user = OCP\User::getUser();

$result=false;
switch($action) {
	case 'setValue':
		$result=OCP\Config::setUserValue($user, $_POST['app'], $_POST['key'], $_POST['value']);
		break;
/*	case 'getValue':
		$result=OC_Appconfig::getValue($_GET['app'], $_GET['key'], $_GET['defaultValue']);
		break;
	case 'getApps':
		$result=OC_Appconfig::getApps();
		break;
	case 'getKeys':
		$result=OC_Appconfig::getKeys($_GET['app']);
		break;
	case 'hasKey':
		$result=OC_Appconfig::hasKey($_GET['app'], $_GET['key']);
		break;
	case 'deleteKey':
		$result=OC_Appconfig::deleteKey($_POST['app'], $_POST['key']);
		break;
	case 'deleteApp':
		$result=OC_Appconfig::deleteApp($_POST['app']);
		break;*/
}
OC_JSON::success(array('data'=>$result));

