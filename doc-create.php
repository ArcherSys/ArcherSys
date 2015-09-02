<?php
require 'vendor/autoload.php';
 
use Parse\ParseClient;
 
ParseClient::initialize('KFNVzk7T8kVDWwzid200j9Yd2DonVQa7bcgXoNg2', 'LgTcbJTbUzaFkEdb4gXv5q6Ja9FaUUqTH05eG0sF', 'JPtos4hBuaVKmlbbLsPc4q6psGybfgiYIiFzS0dH');
 use Parse\ParseFile;
   $contents = $_POST["content"];
   $title = $_POST["title"];
   $file = ParseFile::createFromData($contents, $title.".html");
   
   ?>