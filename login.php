
     <?php
       require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";

require_once "includes\ViewManager.php";
require_once "includes\LogicManager.php";

 use ArcherSys\Viewer\ViewManager;
 use ArcherSys\Viewer\LogicManager;
use CarnosOS\Config\ConfigData;
 // Connects to your Database
$config = ConfigData::getConfig();
 mysql_connect($config["dbhost"], $config["dbuser"], $config["dbpass"]) or die(mysql_error());

 mysql_select_db("acoserver_acoserver") or die(mysql_error());


 //Checks if there is a login cookie
$role = $_GET["roleDetect"];


 if(isset($_COOKIE['ID_ARCHERVMCASHEW']) || isset($_COOKIE["Role_ARCHERVMCASHEW"]))


 //if there is, it logs you in and directes you to the members page

 {
 	$username = $_COOKIE['ID_ARCHERVMCASHEW'];
    
 	$pass = $_COOKIE['Key_ARCHERVMCASHEW'];
	$fullname = $_COOKIE["ScreenName_ARCHERVMCASHEW"];

 	 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());

 	while($info = mysql_fetch_array( $check ))

 		{

 		if ($pass != $info['password'] || $role != $info['Role'] )

 			{

 			 			}

 		else if($pass == $info['password'] && ($role != $info['Role'] || $role == "All"))

 			{

 			header("Location: ".$_GET["redirect_uri"]);



 			}

 		}

 }


 //if the login form is submitted

 if (isset($_POST['submit'])) { // if form has been submitted



 // makes sure they filled it in

 	if(!$_POST['username'] | !$_POST['password']) {
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

 		die('That user does not exist on this VM. <a href=register.php>Click Here to Register</a>');

 				}

 while($info = mysql_fetch_array( $check ))

 {

 $_POST['password'] = stripslashes($_POST['password']);

 	$info['password'] = stripslashes($info['password']);

 	$_POST['password'] = md5($_POST['password']);


if ($info["Disabled"] == 1) {
                echo "<!DOCTYPE HTML>";
                echo "<html>";
                   echo "<head>";
                  echo "<title>Account Disabled</title>";
                 echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/core/css/err-rf.css\"/>";
                 echo "</head>";
                 echo "<body>";
 		die('<div class="asos-incorrect-pass"><p>Your account has been disabled.</p> <button class="asos-ipass-button" onclick="window.reload()">Please contact an administrator for assistance.</button></div></body></html>');
             
 	}
 //gives error if the password is wrong

 	else if ($_POST['password'] != $info['password']) {
                echo "<!DOCTYPE HTML>";
                echo "<html>";
                   echo "<head>";
                  echo "<title>Incorrect Password</title>";
                 echo "<link rel=\"stylesheet\" type=\"text/css\" href='/core/css/err-rf.css'/>";
                 echo "</head>";
                 echo "<body>";
 		die('<div class="asos-incorrect-pass"><p>Incorrect password.</p> <button class="asos-ipass-button" onclick="window.location.assign(\''.$_SERVER["PHP_SELF"].'\');">Please Try Again</button></div></body></html>');
             
 	}
 	else if($role != $info["Role"] && $role != "All"){
 	    echo "<!DOCTYPE HTML>";
                echo "<html>";
                   echo "<head>";
                  echo "<title>Error ASOS-0006: User Unauthorized</title>";
                 echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/core/css/err-rf.css\"/>";
                 echo "</head>";
                 echo "<body>";
 		die('<div class="asos-incorrect-pass"><p>You do not have permission to use this app  <button class="asos-ipass-button" onclick="window.reload"><a href='.$_SERVER["PHP_SELF"].'>Please Log in with an Admin Account.</a></button></div></body></html>');
 	}

    else

 {

 
 // if login is ok then we add a cookie

 	 $_POST['username'] = stripslashes($_POST['username']);

 	 $hour = time() + 3600;

 setcookie('ID_ARCHERVMCASHEW', $_POST['username'], $hour);

 setcookie('Key_ARCHERVMCASHEW', $_POST['password'], $hour);
  setcookie('ScreenName_ARCHERVMCASHEW', $info["first_name"]." ".$info["last_name"], $hour);

 setcookie('Role_ARCHERVMCASHEW', $role, $hour);
setcookie('ProfilePicture_ARCHERVMCASHEW',$info["ProfilePicture"],$hour);
setcookie('Nickname_ARCHERVMCASHEW',$info["first_name"],$hour);


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

<script src="/core/js/modernizr.js"></script>
<script src="/core/js/jquery.js"></script>
<script src="/core/js/archersysos.js">
    
</script>

<script src="/core/js/archersysos-geolocation.js"></script>
<script>
    ArcherSysOS.$(function() {
  ArcherSysOS.$('<img/>').attr('src', 'http://lorempixel.com/1400/900/nature/3').load(function() {
    ArcherSysOS.$('.bg-img').append(ArcherSysOS.$(this));
    // simulate loading
    setTimeout(function() {
     ArcherSysOS.$('.container').addClass('loaded');
    }, 1500)
   //$(this).remove(); // prevent memory leaks as @benweet suggested
  });
  ArcherSysOS.$('.form-toggle').on('click', function() {
    ArcherSysOS.$('.container').toggleClass('show-register')
  })
})
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

localStorage.setItem("Name","Guest");

      </script>
      <script>
            
      </script>
  </head>
  <body><div class="container">
    <div class="bg-img"></div>
    <div class="header">
        <div class="loading">
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
        </div>
        <h1>Go!</h1>
    </div>
    <div class="main">
        <div class="login">
            <form id="login" class="front box" action="<?php echo $_SERVER['PHP_SELF']."?redirect_uri=".$_GET["redirect_uri"]."&roleDetect=".$_GET["roleDetect"]; ?>" method="post">
                <input id="username" name="username" required="required" type="text" placeholder="Username" />
                <input id="password" name="password" required="required" type="password" placeholder="Password" />
                <button type="submit" name="submit" value="Login" />Login</button>
                <span class="form-toggle"><a href="register.php" class="archersys-registration">Not Registered Yet?</a></span>
            </form>
        </div>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

    </div>

    

    <?php
ViewManager::addReCAPTCHA();

?>
   
</div>

    

 
  </body>

</html>
<?php

 }

 

 ?>
