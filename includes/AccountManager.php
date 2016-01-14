<?php
namespace ArcherSys\Admin;
class AccountManager{
    static function DisableAccount($username){
         $sql = "UPDATE `users` SET `Disabled`= 1 WHERE username = '${username}'";
         if(mysql_query($sql)){
 
 echo "Disabled ".$username;
 }else{
     echo "Did not disable".$username."\n ".mysql_error();
 }
    }
    static function EnableAccount($username){
         $sql = "UPDATE `users` SET `Disabled`= 0 WHERE username = '${username}'";
        if(mysql_query($sql)){
 
 echo "Enabled ".$username;
 }else{
     echo "Did not enable".$username."\n ".mysql_error();
 }
    }
}