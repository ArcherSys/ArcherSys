<?php
namespace ArcherSys\Config;
class AppleManager {
	static function enableIPhoneWebAppMode(){
		echo '<meta name="apple-mobile-web-app-capable" content="yes">';
		
	}
	static function disableIPhoneWebAppMode(){
		echo '<meta name="apple-mobile-web-app-capable" content="no">';
		
	}
	
}
class MobileManager{
	static function enablePhoneWebAppMode(){
		echo '<meta name="mobile-web-app-capable" content="yes">';
	}
	static function disablesPhoneWebAppMode(){
		echo '<meta name="mobile-web-app-capable" content="no">';
	}
}  