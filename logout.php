<<<<<<< HEAD
<?php include "base.php"; $_SESSION = array(); session_destroy(); ?>
<meta http-equiv="refresh" content="0;index.php">
=======
 <?php

 $past = time() - 100;

 //this makes the time in the past to destroy the cookie

 setcookie(ID_ARCHERVMCASHEW, gone, $past);

 setcookie(Key_ARCHERVMCASHEW, gone, $past);

 header("Location: login.php");

 ?>
>>>>>>> 5e7b2c757565054acf1b6acdbff6480e574a8d68
