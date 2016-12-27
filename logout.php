

 <?php

 $past = time() - 100;

 //this makes the time in the past to destroy the cookie

 setcookie(ID_ARCHERVMCASHEW, null, $past);

 setcookie(Key_ARCHERVMCASHEW, null, $past);

 header("Location: login.php?redirect_uri=".$_GET["redirect_uri"]."&roleDetect=".$_GET["roleDetect"]);

 ?>
