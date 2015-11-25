<<<<<<< HEAD
<?php include "base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>User Management System (Tom Cameron for NetTuts)</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>  
<body>  
<div id="main">
<?php
if(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
    $email = mysql_real_escape_string($_POST['email']);
    
	 $checkusername = mysql_query("SELECT * FROM users WHERE Username = '".$username."'");
     
     if(mysql_num_rows($checkusername) == 1)
     {
     	echo "<h1>Error</h1>";
        echo "<p>Sorry, that username is taken. Please go back and try again.</p>";
     }
     else
     {
     	$registerquery = mysql_query("INSERT INTO users (Username, Password, EmailAddress) VALUES('".$username."', '".$password."', '".$email."')");
        if($registerquery)
        {
        	echo "<h1>Success</h1>";
        	echo "<p>Your account was successfully created. Please <a href=\"index.php\">click here to login</a>.</p>";
        }
        else
        {
     		echo "<h1>Error</h1>";
        	echo "<p>Sorry, your registration failed. Please go back and try again.</p>";    
        }    	
     }
}
else
{
	?>
    
   <h1>Register</h1>
    
   <p>Please enter your details below to register.</p>
    
	<form method="post" action="register.php" name="registerform" id="registerform">
	<fieldset>
		<label for="username">Username:</label><input type="text" name="username" id="username" /><br />
		<label for="password">Password:</label><input type="password" name="password" id="password" /><br />
        <label for="email">Email Address:</label><input type="text" name="email" id="email" /><br />
		<input type="submit" name="register" id="register" value="Register" />
	</fieldset>
	</form>
    
   <?php
}
?>
</div>
</body>
</html>
=======

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

 	$insert = "INSERT INTO users (username, password, role)

 			VALUES ('".$_POST['username']."', '".$_POST['pass']."','User')";

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
>>>>>>> 5e7b2c757565054acf1b6acdbff6480e574a8d68
