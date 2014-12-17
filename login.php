
<!DOCTYPE HTML>

<html>
  
<head>
   <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="core/css/login/screen-ie.css">
<link type="text/css" rel="stylesheet" media="screen" href="core/css/theme.css" />
<link rel="stylesheet" type="text/css" media="screen" href="core/css/converse.min.css">
<script src="core/js/converse.min.js"></script>
   <![endif]-->

 <link rel="stylesheet" type="text/css" href="/core/css/login.css">

    <meta name="Content-Type" content="text/html;charset=utf-8">
        <script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
    <title>Login to the ArcherVM</title>
    <script type="text/javascript">
         function showRecaptcha(element) {
           Recaptcha.create("AIzaSyAPx5WHasOtdyDoWMq2jnJ3RLId1MIeXgo", element, {
             theme: "red",
             callback: Recaptcha.focus_response_field});
         }
      </script>
  </head>
  <body>
    <div id="wrapper">
     <?php



 // Connects to your Database

 mysql_connect("localhost", "root", "aco1234") or die(mysql_error());

 mysql_select_db("acoserver_acoserver") or die(mysql_error());


 //Checks if there is a login cookie

 if(isset($_COOKIE['ID_my_site']))


 //if there is, it logs you in and directes you to the members page

 {
 	$username = $_COOKIE['ID_my_site'];

 	$pass = $_COOKIE['Key_my_site'];

 	 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());

 	while($info = mysql_fetch_array( $check ))

 		{

 		if ($pass != $info['password'])

 			{

 			 			}

 		else

 			{

 			header("Location: index.php");



 			}

 		}

 }


 //if the login form is submitted

 if (isset($_POST['submit'])) { // if form has been submitted



 // makes sure they filled it in

 	if(!$_POST['username'] | !$_POST['pass']) {

 		die('You did not fill in a required field.');

 	}

 	// checks it against the database



 	if (!get_magic_quotes_gpc()) {

 		$_POST['email'] = addslashes($_POST['email']);

 	}

 	$check = mysql_query("SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());



 //Gives error if user dosen't exist

 $check2 = mysql_num_rows($check);

 if ($check2 == 0) {

 		die('That user does not exist in our database. <a href=add.php>Click Here to Register</a>');

 				}

 while($info = mysql_fetch_array( $check ))

 {

 $_POST['pass'] = stripslashes($_POST['pass']);

 	$info['password'] = stripslashes($info['password']);

 	$_POST['pass'] = md5($_POST['pass']);



 //gives error if the password is wrong

 	if ($_POST['pass'] != $info['password']) {

 		die('Incorrect password, please try again.');

 	}

    else

 {

 
 // if login is ok then we add a cookie

 	 $_POST['username'] = stripslashes($_POST['username']);

 	 $hour = time() + 3600;

 setcookie('ID_my_site', $_POST['username'], $hour);

 setcookie('Key_my_site', $_POST['pass'], $hour);

 

 //then redirect them to the members area

 header("Location: index.php");

 }

 }

 }

 else

{



 // if they are not logged in

 ?>

<!DOCTYPE HTML>

<html>
  
<head>
   <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="core/css/login/screen-ie.css">
<link type="text/css" rel="stylesheet" media="screen" href="core/css/theme.css" />
<link rel="stylesheet" type="text/css" media="screen" href="core/css/converse.min.css">
<script src="core/js/converse.min.js"></script>
   <![endif]-->

 <link rel="stylesheet" type="text/css" href="core/css/login.css"/>

    <meta name="Content-Type" content="text/html;charset=utf-8">
        <script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
    <title>Login to the ArcherVM</title>
    <script type="text/javascript">
         function showRecaptcha(element) {
           Recaptcha.create("AIzaSyAPx5WHasOtdyDoWMq2jnJ3RLId1MIeXgo", element, {
             theme: "red",
             callback: Recaptcha.focus_response_field});
         }
      </script>
  </head>
  <body>
    <div id="wrapper">
    
 
<form id="login" class="front box" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
  <div class="default"><i class="icon-briefcase"></i><h1>Press login</h1></div>

<input type="text" placeholder="username" name="username"/>
<input type="password" placeholder="password" name="pass"/>
<input type="submit" name="submit"class="login"><i class="icon-ok"></i></button>

<a href="register.php"  class="register-button">Register</a>
</form>


<div class="back box">
<img src="http://i.imgur.com/sdDkYt1.png"/>
<ul>
  <li><i class="icon-file"></i> New <span>32</span></li>
  <li><i class="icon-flag"></i> Priority <span>12</span></li>
  <li><i class="icon-user"></i> Assigned <span>5/17</span></li>
  <li><i class="icon-trash"></i> Deleted <span>14</span></li>
</ul>
<button class="logout"><i class="icon-off"></i></button>
</div>
    </div>


   <script type="text/javascript">
      (function() {
       var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
       po.src = 'https://apis.google.com/js/client:plusone.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
     })();
    </script>
<?php

 }

 

 ?>

 
  </body>

</html>