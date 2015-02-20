<?php
namespace ArcherSys\Viewer;
class ViewManager{
    static function addMSAppConfig(){
        include "/includes/viewssi/msappconfig.php";
    }
    static function addAppleAppConfig(){
      include "/includes/viewssi/appleappconfig.php";
    }
}
?>