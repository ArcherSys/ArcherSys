<?php
namespace ArcherSys\Viewer;
class ViewManager{
    static function addMSAppConfig(){
        include "/includes/viewssi/msappconfig.php";
    }
    static function addAppleAppConfig(){
      include "/includes/viewssi/appleappconfig.php";
    }
    static function addGame($link,$name){
      echo " <div class=\"module red single img birds\">
<a href=\"$link\"><p class=\"title\">$name</p></a>
					</div>";
    }
    static function setupFavicons(){
      include "/includes/viewssi/faviconconfig.php";
    }
    static function addNg(){
      echo "<script src='/core/js/angularjs/angular.min.js'></script>";
    }
    static function addReCAPTCHA(){
        echo '<div class="g-recaptcha" data-sitekey="6Le2XAMTAAAAAAikuUTjtmxheTdJxn0cebzQ2MQI"></div>';
    }
}
?>