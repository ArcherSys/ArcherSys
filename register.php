<!DOCTYPE HTML>
<html>
<head>
<title>Sign Up for ArcherSys OS</title>
<link rel="stylesheet"  type="text/css" href="core/css/registerstyles.css"/>
<script type="text/javascript" src="core/js/registerscript.js"></script>

 <?php
 // Connects to your Database

 mysql_connect("localhost", "root", "aco1234") or die(mysql_error());

 mysql_select_db("acoserver_acoserver") or die(mysql_error());


 //This code runs if the form has been submitted

 if (isset($_POST['submit'])) {



 //This makes sure they did not leave any fields blank

 if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] ) {

 		die('You did not complete all of the required fields');

 	}



 // checks if the username is in use

 	if (!get_magic_quotes_gpc()) {

 		$_POST['username'] = addslashes($_POST['username']);

 	}

 $usercheck = $_POST['username'];

 $check = mysql_query("SELECT username FROM users WHERE username = '$usercheck'")

or die(mysql_error());

 $check2 = mysql_num_rows($check);



 //if the name exists it gives an error

 if ($check2 != 0) {

 		die('Sorry, the username '.$_POST['username'].' is already in use.');

 				}


 //this makes sure both passwords entered match

 	if ($_POST['pass'] != $_POST['pass2']) {

 		die('Your passwords did not match. ');

 	}



 	// here we encrypt the password and add slashes if needed

 	$_POST['pass'] = md5($_POST['pass']);

 	if (!get_magic_quotes_gpc()) {

 		$_POST['pass'] = addslashes($_POST['pass']);

 		$_POST['username'] = addslashes($_POST['username']);

 			}



 // now we insert it into the database

 	$insert = "INSERT INTO users (username, password)

 			VALUES ('".$_POST['username']."', '".$_POST['pass']."')";

 	$add_member = mysql_query($insert);

 



 
echo " <h1>Registered</h1> ";

echo " <p>Thank you, you have registered - you may now login</a>.</p> ";

 }

 else
 {
 ?>
</head>
<body>
<div id="background">
  <div id="backgroundOverlay">
    <div id="login">

          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
              <input type="text" placeholder="Email" id="topText" required name="username"/>
              <input type="password" placeholder="Password" id="textBox" required name="pass"/>
              <input type="password" placeholder="Confirm password" id="botText" required name="pass2"/>
            
              <input type="submit" name="submit"
value="Register" id="loginButton">
            <a href="login.php" id="signUp">Already an account? <b>Login!</b></a>
          </form>

 </div>
    </div>
</div>

 <?php

 }
 ?>