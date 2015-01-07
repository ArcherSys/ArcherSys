<?php
  require_once "config.php";
class ConfigTest extends PHPUnit_Framework_TestCase
{
 public function testConfigArray()
 {
   $this->assertNotEmpty($config);
   $this->assertNotEmpty($config["dbuser"]);
 }
}
?>