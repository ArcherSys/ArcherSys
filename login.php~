
     <?php
require_once "includes\ViewManager.php";
require_once "includes\LogicManager.php";
require_once "includes\ConfigManager.php";
 use ArcherSys\Viewer\ViewManager;
 use ArcherSys\Viewer\LogicManager;

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

 			header("Location:".$_GET["redirect_uri"]);



 			}

 		}

 }


 //if the login form is submitted

 if (isset($_POST['submit'])) { // if form has been submitted



 // makes sure they filled it in

 	if(!$_POST['username'] | !$_POST['pass']) {
                echo "<!DOCTYPE HTML>";
                echo "<html>";
                echo "<head>";
                echo "<title>Try Again</title>";
                echo "<link rel='stylesheet' href='/core/css/err-rf.css'/>";
                echo "</head>";
                echo "<body>";
 		die('<div class="message"><p>You did not fill in a required field.</p><div class="revert">Redo Login</div></div></body></html>');

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
                echo "<!DOCTYPE HTML>";
                echo "<html>";
                   echo "<head>";
                  echo "<title>Incorrect Password</title>";
                 echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/core/css/err-rf.css\"/>";
                 echo "</head>";
                 echo "<body>";
 		die('<div class="asos-incorrect-pass"><p>Incorrect password.</p> <button class="asos-ipass-button" onclick="window.reload()">Please Try Again</button></div></body></html>');

 	}

    else

 {

 
 // if login is ok then we add a cookie

 	 $_POST['username'] = stripslashes($_POST['username']);

 	 $hour = time() + 3600;

 setcookie('ID_my_site', $_POST['username'], $hour);

 setcookie('Key_my_site', $_POST['pass'], $hour);

 

 //then redirect them to the members area

 header("Location: ". $_GET["redirect_uri"]);

 }

 }

 }

 else

{



 // if they are not logged in

 ?>

<!DOCTYPE HTML>

<html i18n-values="bookmarkbarattached:bookmarkbarattached" bookmarbarattached >
  
<head>
   <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="core/css/login/screen-ie.css">

<link type="text/css" rel="stylesheet" media="screen" href="core/css/theme.css" />

   <![endif]-->
<link rel="icon" type="image/png" href="favicon.ico">

<meta name="msapplication-config" content="ieconfig.xml" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropbox.js/0.10.2/dropbox.min.js">
</script>
 <link rel="stylesheet" type="text/css" href="core/css/login.css"/>

    <meta name="Content-Type" content="text/html;charset=utf-8">
        <?php
        LogicManager::addReCAPTCHA();
    
        ?>
    <title>Login to the ArcherVM</title>
    <script type="text/javascript">
   if(confirm("Use Dropbox")){
  var client = new Dropbox.Client({ key: "brwekpcno93vtpz" });
    var gh2FEnabled = confirm("Enabled GH ArcherSys 2F Authenthication?");
  client.authenticate(function(error, client) {
       
      client.getAccountInfo(function(error, accountInfo) {
          if(gh2FEnabled)
               window.location.assign("https://github.com/login/oauth/authorize?response_type=code&client_id=095447377bd289fa5201&redirect_uri=http%3A%2F%2Flocalhost%2Findex.php");
      });
  });
}
      </script>
  </head>
  <body>
    <div id="wrapper">
    
 
<form id="login" class="front box" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
  <div class="default"><i class="icon-briefcase"></i><h1>Press login</h1></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<div class="fb-like" data-href="https://www.facebook.com/archersysos" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
<div class="fb-like" data-href="https://www.facebook.com/archersysos" data-layout="box_count" data-action="recommend" data-show-faces="true" data-share="true"></div>
<input type="text" placeholder="username" name="username"/>
<input type="password" placeholder="password" name="pass"/>
<input type="submit" name="submit"class="login"><i class="icon-ok"></i></button>

<a href="register.php" class="archersys-registration">Create an ArcherSys Account</a>


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
    <div class="g-page" data-width="276" data-href="//plus.google.com/114657577319697970021" data-theme="dark" data-rel="publisher"></div>

    <?php
ViewManager::addReCAPTCHA();
LogicManager::addGPlus();
?>
   

 
  </body>

</html>
<?php

 }

 

 ?>
