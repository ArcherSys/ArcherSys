<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/includes/View.php";
use ArcherSys\Viewer\Contrib\View;
$bingview = new View("BingCherry",function(){
    ?>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <link rel="stylesheet" href="style.css"/>
     <?php
},function(){
    ?>
    <h1>BingCherry</h1>
  <form  method="POST" action="index-default.php">
   <label for="service_op">Service Operation</label><br/>
   <input name="service_op" type="radio" value="Web" CHECKED /> Web
   <input name="service_op" type="radio" value="Image" /> Image
   <br/>
   <label for="query">Query</label><br/>
   <input name="query" class="Search" type="text" size="60" maxlength="60" value="" /><br /><br />
   <input name="bt_search" type="submit" value="Search" />
  </form>
  <h2>Results</h1>
 {RESULTS}
 <?php
});