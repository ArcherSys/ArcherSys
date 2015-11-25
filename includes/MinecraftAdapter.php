<?php
  namespace ArcherSys\Services;
   class MinecraftAdapter{
      static function run(){
       passthru("start ".$_SERVER["DOCUMENT_ROOT"]."/Minecraft/Mineshafter-launcher.jar");
      }
  
  }