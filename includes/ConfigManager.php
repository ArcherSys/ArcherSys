<?php
 namespace ArcherSys\Config;
 class ConfigManager{
  static function addFavicon(){
    echo ' <link rel="shortcut icon" href="favicon.ico" />';

}
static function SpecifyCharset($charset){
  echo '<meta charset="'.$charset.'">';
}


}
?>