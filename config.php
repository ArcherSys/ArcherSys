<?php
namespace CarnosOS\Config;
class ConfigData{
    static function getConfig(){
        
  $config = array();
  $config["dbhost"] = "localhost";
  $config["dbuser"] = "root";
  $config["dbpass"] =  "aco1234";
  $config["dbname"] = "acoserver_acoserver";
  $config["recaptcha"] = "6LdNlhkTAAAAAC_KxoB81GVYjzdyM169bme4y7e7";
  $config["smtphost"] = "mail.google.com";
  $config["smtpport"] = 587;
  return $config;
    }
}
 ?>