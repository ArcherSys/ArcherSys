 <?php

 $past = time() - 100;

 //this makes the time in the past to destroy the cookie

 setcookie(ID_ARCHERVMCASHEW, gone, $past);

 setcookie(Key_ARCHERVMCASHEW, gone, $past);

 header("Location: login.php");

 ?>