<?php
namespace CarnosOS\Config;
class ConfigData{
    static function getConfig(){
        
  $config = array();
  $config["dbhost"] = $_SERVER["SERVER_ADDR"];
  $config["dbuser"] = "root";
  $config["dbpass"] =  "aco1234";
  $config["dbname"] = "acoserver_acoserver";
  $config["recaptcha"] = "6LdNlhkTAAAAAC_KxoB81GVYjzdyM169bme4y7e7";
  $config["smtphost"] = "ssl://smtp.gmail.com";
  $config["smtpport"] = 465;
  $config['imaphost'] = 'ssl://imap.gmail.com';
  $config["imapport"] = 993;
  $config["ftphost"] = "localhost";
  $config["pythonexec"] = $_SERVER["DOCUMENT_ROOT"].'/Scripts/python.exe';
  $config["GNUPath"] = "C:\\xampp\\htdocs\\GNU\\bin";
  return $config;
    }
}
 ?>