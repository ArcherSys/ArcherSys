<?php
  function asos_connect($host, $user, $pass){
    mysql_connect($host, $user, $pass);
    mysql_select_db("acoserver_acoserver");
}
?>