<?php
@ini_set("error_reporting","on");
require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";

 mysql_connect($config["dbhost"],$config["dbuser"],$config["dbpass"]);
 mysql_select_db("acoserver_acoserver");
 $result = mysql_query("SELECT path,SUM(size) AS total_memory_weight FROM oc_filecache GROUP BY path HAVING total_memory_weight > 1024 ") or die("Registry Error");
 ?>
 <script src="http://demo.cnanney.com/css-flip-counter2/js/flipcounter.js"></script>
 <style>
     .filename, .weight{
         font-family: Segoe UI;
       
     }
     .weight{
           font-size: 20px;
           background-color: lightgreen;
           color: red;
     }
    

 </style>
 <?php
 echo "<table>";
 echo "<tbody>";
 $inc = 0;
 
while($info = mysql_fetch_array( $result ))

 		{
 		    $inc++;
 		    echo "<tr>";
 		    
 		    echo"<td class='filename'>".$info["path"]."</td>";
 		    echo "<td class='weight'>".$info["total_memory_weight"]."</td>";
 		    ?>
 		    <script>
var defaults = {
  value: <?php echo $info["total_memory_weight"]; ?>, auto: false
};

var c<?php echo $inc; ?> = new flipCounter('c<?php echo $inc; ?>', defaults);
</script>
 		    <?php
 		    echo "</tr>";
 		}
 		echo "</tbody></table>"
 		?>