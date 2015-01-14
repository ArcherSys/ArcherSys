<?php
namespace ArcherSys\Shell;
   require "vendor/autoload.php";
  use Symfony\Component\Console\Application;
  class ArcherBash {
    const ASOSBash = new Application();
    static function start(){
     ArcherBash::ASOSBash->run();
    }
  }