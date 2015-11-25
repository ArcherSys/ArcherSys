<?php
   namespace ArcherSys\Comanquer;
   require_once $_SERVER["DOCUMENT_ROOT"]."/includes/LogicManager.php";
    use ArcherSys\Viewer\LogicManager;
    class ComanquerLogicManager extends LogicManager{
      static function addGameLogic(){
        echo '<script src="js/cnc.js"	 type="text/javascript" charset="utf-8">
		</script>';
      }
    }

 