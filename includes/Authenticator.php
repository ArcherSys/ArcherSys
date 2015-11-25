<?php
namespace ArcherSys\Auth;
require_once "DataManager.php";
use ArcherSys\Data\DataManager;
class Authenticator{
	static function isAuthenticated(){
		return isset($_COOKIE['ID_ARCHERVMCASHEW']);
	}
	static function getID(){
		return $_COOKIE['ID_ARCHERVMCASHEW'];
	}
<<<<<<< HEAD
=======
	static function getFullName(){
	  return $_COOKIE["ScreenName_ARCHERVMCASHEW"];
	}
>>>>>>> 5e7b2c757565054acf1b6acdbff6480e574a8d68
	static function getKey(){
		return $_COOKIE['Key_ARCHERVMCASHEW'];
	}
	static function getUser($username){
		return mysql_query("SELECT * FROM users WHERE username = '".$username."'");
	}
	static function isProcessing($check){
		 return mysql_fetch_array( $check );
	}
	static function isMatchingPassword($pass,$info){
		return $pass != $info['password'];
	}
	static function openLoginFormView($redirect_uri){
		header("Location: http://localhost/login.php?redirect_uri=".$redirect_uri);
	}
}