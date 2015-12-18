<?php
if($_GET["action"] == "arp"){
 passthru("start arp -a");
 }elseif($_GET["action"] =="searchip"){
 header("Location: https://www.google.com/?=ip+address");
 }elseif($_GET["action"] == "ping")
 {
 passthru("start ping ".$_GET["addr"]);
 }elseif($_GET["action"] == "tracert"){
 passthru("start tracert ".$_GET["addr"]);
 }
 
 ?>