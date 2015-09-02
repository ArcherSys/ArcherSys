<?php
 namespace ArcherSys; 
 class ArcherSearchToolbox{
    function renderApps($host,$user,$pass,$name){
        mysql_connect($host,$user,$pass);
        mysql_select_db($name);
     $sql = "SELECT `appname`,`link`,`description` FROM `asos_apps` WHERE 1";

     $result = mysql_query($sql);
   
       while($row = mysql_fetch_assoc($result)){
          echo "<li><a href=\"".$row["link"]."\">".$row["appname"]."</a></li>";
        }
    
 
}

}
?>