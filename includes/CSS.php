<?php
namespace ArcherSys\CStylus;
class CSS{
    static function defineCSStylesheet(){
        header("Content-type: text/css;");
    }
  static function specifyURL($url){
      echo "url('${url}')";
  }
}
?>