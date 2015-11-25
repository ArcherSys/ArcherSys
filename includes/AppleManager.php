<?php
namespace ArcherSys\Config;
class AppleManager {
	static function enableIPhoneWebAppMode(){
		echo '<meta name="apple-mobile-web-app-capable" content="yes">';
		
	}
	static function disableIPhoneWebAppMode(){
		echo '<meta name="apple-mobile-web-app-capable" content="no">';
		
	}
<<<<<<< HEAD
	
}
=======
        static function addTouchIcon($icon){
             '<link rel="apple-touch-icon" href="$icon">';

}
	
}

>>>>>>> 5e7b2c757565054acf1b6acdbff6480e574a8d68
class MobileManager{
	static function enablePhoneWebAppMode(){
		echo '<meta name="mobile-web-app-capable" content="yes">';
	}
	static function disablesPhoneWebAppMode(){
		echo '<meta name="mobile-web-app-capable" content="no">';
	}
}  