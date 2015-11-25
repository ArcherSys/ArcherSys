<?php
$conn = ftp_connect("localhost");
ftp_login($conn,"root","");
foreach(ftp_nlist($conn,".") as $folder){
    echo $folder;
}
?>