<<<<<<< HEAD
<?php include "base.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Management System (Tom Cameron for NetTuts)</title>
<link rel="stylesheet" href="/core/css/style.css" type="text/css" />
<link rel="stylesheet"  href="/core/css/desktop.css"/>
<script src="/core/js/jquery/jquery.js"></script>
<script src="/core/js/jquery/plugins/masonry.js"></script>
<script src="/core/js/desktop.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<script src="/core/js/jquery/plugins/jquery.jscrollpane.js">
    
</script>
<link rel="stylesheet" href="/core/css/jquery/plugins/jquery.jscrollpane.min.css">

</head>
<body>
<div id="main">
<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
	 ?>
    
    <h1>Member Area</h1>
  	 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">



<div class="desktop">
  <div class="start-menu-fade"></div>
  <div class="start-menu">
    <div class="start-menu__list">
      <div class="media">
        <a class="user-info menu-toggle" href="#" data-menu="user">
        <img class="user-info__img media__img" src="http://i.imgur.com/KkCqvK9.png" alt="User image">
        <div class="user-info__name media__body">
          User Name
        </div>
        </a>
        <div class="menu" data-menu="user">
          <a href="#">Change account picture</a>
          <a href="#">Lock</a>
          <a href="#">Sign out</a>
        </div>
        <a class="user-info__power menu-toggle" href="#" data-menu="power">
          <i class="fa fa-power-off"></i>
          
        </a>
      </div>
      
      <div class="menu" data-menu="power">
            <a href="#">Sleep</a>
            <a href="#">Power off</a>
            <a href="#">Restart</a>
          </div>
      

      <ul class="start-menu__recent">
        <li class="start-menu__explorer">
          <a href="#" data-window="explorer">
            <i class="fa fa-folder"></i>
            File Explorer
          </a>
        </li>
        <li class="start-menu__mail">
          <a href="#" data-window="mail">
            <i class="fa fa-envelope"></i>
            Mail
          </a>
        </li>
        <li class="start-menu__notepad">
          <a href="#" data-window="notepad">
            <i class="fa fa-pencil"></i>
            Notepad
          </a>
        </li>
        <li class="start-menu__explorer">
          <a href="#">
            <i class="fa fa-folder"></i>
            File Explorer
          </a>
        </li>
        <li class="start-menu__mail">
          <a href="#">
            <i class="fa fa-envelope"></i>
            Mail
          </a>
        </li>
        <li class="start-menu__notepad">
          <a href="#">
            <i class="fa fa-pencil"></i>
            Notepad
          </a>
        </li>
      </ul>
      
      <a class="all-apps" href="#">
        All apps
        <i class="fa fa-arrow-right"></i>
      </a>
      <form class="search">
      <input type="text" class="search__input" placeholder="Ask me anything">
      <button class="search__btn">
        </button>
      </form>
    </div>
    <div class="start-screen-scroll">
    <div class="start-screen">
      <a class="start-screen__tile start-screen__tile--explorer masonry-item" href="#" data-window="explorer">
        <i class="fa fa-folder"></i>
        <span>File Explorer</span>
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile start-screen__tile--wide masonry-item" href="#"  data-ss-colspan="2">
      </a>
      <div class="start-screen__smallgroup masonry-item">
      <a class="start-screen__tile start-screen__tile--small" href="#"></a>
        <a class="start-screen__tile start-screen__tile--small" href="#"></a>
        <a class="start-screen__tile start-screen__tile--small" href="#"></a>
      </div>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile start-screen__tile--notepad masonry-item" href="#">
      </a>
      <a class="start-screen__tile start-screen__tile--large start-screen__tile--mail masonry-item" href="#" data-ss-colspan="2">
        <i class="fa fa-envelope"></i>
        <span>Mail</span>
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
    </div>
    </div>
  </div>
  
  <div class="taskbar">
    <a class="taskbar__item taskbar__item--start" id="start" href="#" data-window="start">
      <i class="fa fa-windows"></i>
    </a>
    <a class="taskbar__item taskbar__item--explorer" href="#" data-window="explorer">
      <i class="fa fa-folder"></i>
    </a>
 <a class="taskbar__item taskbar__item--gw" href="#" data-window="gw">
      <i class="fa fa-folder"></i>
    </a>
    <a class="taskbar__item taskbar__item--mail" href="#" data-window="mail">
      <i class="fa fa-envelope"></i>
    </a>
    <a class="taskbar__item taskbar__item--notepad" href="#" data-window="notepad">
      <i class="fa fa-pencil"></i>
    </a>
    
    <div class="taskbar__tray">
      <span class="time">
        <script>
          
         </script>
      </span>
    </div>
  </div>
  
  
  <div class="window window--explorer window--minimized" data-window="explorer" style="width:670px;height:400px;top:5%;left:10%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-folder"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
      
      
      
      <span class="window__title">
        File Explorer
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <ul class="window__menu">
        <li>
          <a href="#">
            <i class="menu__icon fa fa-search"></i>
            Search
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-share-alt"></i>
            Share
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-plug"></i>
            Devices
          </a>
        </li>
        <li class="divided">
          <a href="#">
            <i class="menu__icon fa fa-cog"></i>
            Settings
          </a>
        </li>
      </ul>
    
    <div class="window__actions">
      <a class="window__back" href="#">
        <i class="fa fa-arrow-left"></i>
      </a>
      <a class="window__forward" href="#">
        <i class="fa fa-arrow-right"></i>
      </a>
      <div class="window__path">
        <a href="#">
        <i class="fa fa-desktop"></i>
        Desktop
        </a>
      </div>
      <form class="search">
        <input type="text" class="search__input" placeholder="Search files and folders">
        <button class="search__btn">
        </button>
      </form>
    </div>
    
    <div class="window__body">
      
      <div class="window__side">
        
        <ul class="side__list">
          <li><a href="#">Home</a></li>
          <li>
            <a href="#">Favorites</a>
            <ul>
              <li><a href="#">Desktop</a></li>
              <li><a href="#">Downloads</a></li>
              <li><a href="#">Recent Places</a></li>
          </ul>
        </li>
          <li>
            <a href="#">This Device</a>
            <ul style="display:none">
              <li><a href="#">Desktop</a>
                <ul style="display:none">
<?php
            foreach(ftp_nlist($conn,'.') as $fileitem){
               if(is_dir($fileitem)){
           ?>
                  <li>
                    <a href="#"><?php echo $fileitem; ?></a>
                  </li>
<?php
 }
}
         ?>
                </ul>
              </li>
              <li><a href="#">Documents</a></li>
              <li><a href="#">Downloads</a></li>
              <li><a href="#">Local Disk  (C:)</a></li>
        </ul>
      </div>
      <div class="window__main">
        <div class="folders">
            <?php
            foreach(ftp_nlist($conn,'.') as $fileitem){
               if(is_dir($fileitem)){
           ?>
          <a href="#">
            <i class="fa fa-folder"></i>
            <span><?php echo $fileitem; ?></span>
          </a>
         <?php
         }else{
             
         }
         ?>
          <a href="#">
            <i class="fa fa-file"></i>
            <span><?php echo $fileitem; ?></span>
          </a>
          
          <?php
            }
            ?>
        </div>
      </div>
    </div>
    
  </div>
      <div class="window window--gw" data-window="gw" style="display:none;width:400px;height:300px;top:40%;left:40%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-envelope"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
      
      
      
      <span class="window__title">
        Ensoora Groupware
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <ul class="window__menu">
        <li>
          <a href="#">
            <i class="menu__icon fa fa-search"></i>
            Search
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-share-alt"></i>
            Share
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-plug"></i>
            Devices
          </a>
        </li>
        <li class="divided">
          <a href="#">
            <i class="menu__icon fa fa-cog"></i>
            Settings
          </a>
        </li>
      </ul>
    
    <div class="window__body">
      <div class="window__side">
        
      </div>
      <div class="window__main">
        <iframe width="100%" height="800" src="/osutil/WebDAV/groupware.php"></iframe>
      </div>
    </div>
    
     <div class="window window--mail" data-window="mail" style="display:none;width:400px;height:300px;top:40%;left:40%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-envelope"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
      
      
      
      <span class="window__title">
      Mail
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <ul class="window__menu">
        <li>
          <a href="#">
            <i class="menu__icon fa fa-search"></i>
            Search
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-share-alt"></i>
            Share
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-plug"></i>
            Devices
          </a>
        </li>
        <li class="divided">
          <a href="#">
            <i class="menu__icon fa fa-cog"></i>
            Settings
          </a>
        </li>
      </ul>
    
    <div class="window__body">
      <div class="window__side">
        
      </div>
      <div class="window__main">
        
      </div>
    </div>
    
  </div>
    
    
 <div class="window window--notepad" data-window="notepad" style="display:none;width:600px;height:300px;top:10%;left:30%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-pencil"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
      
      
      
      <span class="window__title">
        Notepad
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <ul class="window__menu">
        <li>
          <a href="#">
            <i class="menu__icon fa fa-download"></i>
            Save
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-folder-open"></i>
            Open
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-print"></i>
            Print
          </a>
        </li>
      <li>
          <a href="#">
            <i class="menu__icon fa fa-share-alt"></i>
            Share
          </a>
        </li>
      
        <li class="divided">
          <a href="#">
            <i class="menu__icon fa fa-file"></i>
            Format
          </a>
          <a href="logout.php">Logout.</a>
      </li>
      
      <li>
          <a href="#">
            <i class="menu__icon fa fa-cog"></i>
            Settings
        </a>
      </li>
   </ul>
    
    <div class="window__body">
      <div class="window__main">
        <textarea class="full-textarea"></textarea>
      </div>
    </div>
    
  </div>

    
    
</div>


  
    
   
    
    <?php
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
	 $username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
    
	 $checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");
    
    if(mysql_num_rows($checklogin) == 1)
    {
    	 $row = mysql_fetch_array($checklogin);
        $email = $row['EmailAddress'];
        
        $_SESSION['Username'] = $username;
        $_SESSION['EmailAddress'] = $email;
        $_SESSION['LoggedIn'] = 1;
        
    	 echo "<h1>Success</h1>";
        echo "<p>We are now redirecting you to the member area.</p>";
        echo "<meta http-equiv='refresh' content='=2;index.php' />";
    }
    else
    {
    	 echo "<h1>Error</h1>";
        echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";
    }
}
else
{
	?>
    
   <h1>Member Login</h1>
    
   <p>Thanks for visiting! Please either login below, or <a href="register.php">click here to register</a>.</p>
    
	<form method="post" action="index.php" name="loginform" id="loginform">
	<fieldset>
		<label for="username">Username:</label><input type="text" name="username" id="username" /><br />
		<label for="password">Password:</label><input type="password" name="password" id="password" /><br />
		<input type="submit" name="login" id="login" value="Login" />
	</fieldset>
	</form>
    
   <?php
}
?>
</div>
</body>
</html>
=======

<?php
  require_once "config.php";
  require_once "includes/component-functions.php";
  require_once "includes/ViewManager.php";
  require_once "includes/DataManager.php";
require_once "includes/AuthenticatorBuilder.php";
  
  require_once "includes/StyleSheetManager.php";
  require_once "includes/DateManager.php";
  require_once "includes/LogicManager.php";
  use ArcherSys\Viewer\ViewManager;
  use ArcherSys\Data\DataManager;
  use ArcherSys\Viewer\LogicManager;

  use ArcherSys\Styles\StyleSheetManager;
  use ArcherSys\Nav\AuthenticatorBuilder;
  use ArcherSys\Timex\DateManager;
  LogicManager::runStartScreen();
 // Connects to your Database
@ini_set("max_execution_time", 300);
   mysql_connect($config["dbhost"], $config["dbuser"], $config["dbpass"]) or DataManager::notify();
   
 mysql_select_db( "acoserver_acoserver") or DataManager::notify();

 
 //checks cookies to make sure they are logged in



 
if(isset($_COOKIE['ID_ARCHERVMCASHEW']))

 {

 	$username = $_COOKIE['ID_ARCHERVMCASHEW'];

 	$pass = $_COOKIE['Key_ARCHERVMCASHEW'];

 	 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or DataManager::notify();

 	while($info = mysql_fetch_array( $check ))

 		{

 

 //if the cookie has the wrong password, they are taken to the login page

 		if ($pass != $info['password'])

 			{ 			header("Location: login.php");

 			}

 

 //otherwise they are shown the admin area

 	else

 			{

  
?>
	<!DOCTYPE html>
		
<html>
<head>
<meta charset="utf-8">

<title>VM Home</title>

<?php
  ViewManager::setupFavicons();
 ViewManager::addMSAppConfig();
 ViewManager::addAppleAppConfig();
 addStartScreen();
?>
<meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>


<script src="/core/js/jquery.js"></script>

<script src="/core/js/archersysos.js"></script>
<script src="core/js/notidar.js"></script>


<script src="core/js/notidar-amd.js"></script>
<script src="/core/js/activity-amd.js"></script>

<link rel="manifest" href="manifest.json">



<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<?php
    
StyleSheetManager::addStyle("/core/css/start2",true);

?>


<link href='http://fonts.googleapis.com/css?family=Droid+Sans|Open+Sans:700,600' rel='stylesheet' type='text/css'>
<script>
function apiStatus(data) {
  ArcherSysOS.$("githubnotes").text(data.status);
}
</script>
<script src="https://status.github.com/api/status.json?callback=apiStatus"></script>
<script>
 ArcherSysOS.$(function(){
window.setTimeout(function(){
  window.document.getElementById('notnumber').innerHTML = ArcherSysOS.Notidar.Notidex.length;
	},3000);

  ArcherSysOS.$("title").text("VM Home - "+localStorage.getItem("os-name"));
       
 
  var sliderUL = ArcherSysOS.$('div.slider').children('ul'),


       
 
  screens = sliderUL.find('li'),
		screenWidth = screens.width(),
		screenLength = screens.length,
		current = 1,
		totalScreenWidth = screenLength * screenWidth;
   ArcherSysOS.$("#silverdrive-starter").click(function(){
      var sd = ActivityManager.SilverDriveActivity();
      sd.start();
   });
	var h1 = ArcherSysOS.$('div.header').children('h1');

      ArcherSysOS.$(".header h1").click(function(){
           window.location.assign("http://localhost/settings");
           });

	ArcherSysOS.$('#screen-nav').find('button').on('click', function() {
		var direction = ArcherSysOS.$(this).data('dir'),

  	loc = screenWidth;

		(direction === 'next') ? ++current : --current;

		if(current === 0) {
			current = screenLength;
			loc = totalScreenWidth - screenWidth;
			direction = 'next';
		} else if (current - 1 === screenLength) {
			current = 1;
			loc = 0;
		}

		transition(sliderUL, loc, direction);

	

	});
       
       
	function transition(container, loc, direction) {
		var unit;

		if(direction && loc !== 0) {
			unit = (direction === 'next') ? '-=' : '+=';
		}

		container.animate({

			'margin-left': unit ? (unit + loc) : loc
		});
       }
});

</script>



<script>
try{
     window.Notification.requestPermission(function(status) {
      

        var condition = (window.navigator.onLine) ? "online" : "offline";
        if (condition === "online") {
           
		ArcherSysOS.Notidar.pushOnlineNotification(
		);

        }
        else if (condition === "online") {
		ArcherSysOS.Notidar.pushfflineNotification();
		
	
        }

        ArcherSysOS.$(window).bind('online', function() {
            condition = "online";
            ArcherSysOS.Notidar.pushOnlineNotification();
            console.info("[ArcherSysOS]: Internet Access Detected");
        });
        ArcherSysOS.$(window).bind('offline', function() {
            
            ArcherSysOS.Notidar.pushOfflineNotification();
            console.info("[ArcherSysOS]: Disconnected from the Internet.");
        });
        });
        
        }catch(e){
         console.log("[ArcherSysOS]: Notifications Disabled");
        }
</script>



</head>

<body >

	
	<div class="container" >
                

<?php  ViewManager::displayLoginInfo($info); ?>
 
		<div class="slider">
			<ul class="screen">
				<li>
  <?php
  ViewManager::addGame("http://localhost/entertainment/games/index.php","Games");
  ?>
					<div class="module purple double img w">
						<h2 class="title">Home</h2>
					<p class="subheading"> <a href="main.php">Welcome to the new ArcherSys UI !</a> </p>
					</div>
					<a href="https://www.flowdock.com/oauth/authorize?client_id=ce74f931ded75f964c9e98c3676ff5dfdfee64d5fb41178f801882029e4d2f00&redirect_uri=http%3A%2F%2Flocalhost%3A80&response_type=code"><div class="module purple double img w">
						<h2 class="title">Sign in to Flowdock</h2>
					<p class="subheading"> <a href="main.php">Log in to Flowdock!</a> </p>
					</div></a>
<div class="module midblue double img twitter">
   <h2 class="title">Wordpress</h2>
 <p class="subheading"> <a href="archersocial">Access your social center</a></p>
</div>
<a href="/Producktiviti/SilverTick" class='wide blue cal_e'>
				<h1><?php echo date("j"); ?></h1><p><?php echo DateManager::getDay();?></p>
			
	<h2 class="top cal_i">Today's Schedule</h2>
				<i class="icon-calendar"></i>
			</a>
<div class="module neonblue single img word" >
    <a href="Producktiviti/PDFLint">
      <p class="title">PDFLint</p>
    </a>
    </div>
  <div class="module red single img birds">
<a href="http://localhost/entertainment/games/index.php"><p class="title">Games</p></a></div>


					


</li>
<li>

<div class="module green single img android">
    <p class="title">ArcherDroid</p>
</div>	<div class="module yellow double img not">
						<p class="title">Github Notifications</p>
						<div class="img msg">
						<p class="sub-pheading"> your notifications:<span id="githubnotes">Good</span></p>
						</div>
					</div>

					<div class="module yellow double img not">
						<p class="title">Notifications</p>
						<div class="img msg">
						<p class="sub-pheading"> your notifications:<span id="notnumber">0</span></p>
						</div>
					</div>
					

					<div class="module yellow double img not">
						<p class="title">Notifications</p>
						<div class="img msg">
						<p class="sub-pheading"> your notifications:<span id="notnumber"></span></p>
						</div>
				
				</li>
<li>
    <div class="module red single img birds">
<a href="jar:http://localhost/Minecraft/Mineshafter-launcher.jar"><p class="title">Play Minecraft</p></a></div>
<div class="module blue double img ps">
<p class="title">CanvasShoppe</p>
</div>
<div class="module green single img fb" id="birdc">

<p class="title">Collaborate</p>

</div>
<div class="module orange single img birds">
    <p class="title">Capital Pursuit</p>
</div>
<div class="module red single img mail">
<h2 class="title">RoundCube Mail</h2>
</div>
</li>

<li>
<div class="module blue single img mahara">
						<a href="http://127.0.0.1/apps/mahara/htdocs"><p class="title">Partners</p></a>
					</div>
					<div class="module red single img market">
					<a href="https://sites.google.com/site/archersysoswalnutstore/"><p class="title">ArcherSys Walnut App Store</p></a>
					</div>
					
<div class="module blue single img word" id="silverdrive-starter">
  <p class="title">Start SilverDrive</p>
</div>

<a class="wide green gallery"><h1>Gallery</h1><h2 class="top">Gallery</h2></a>
<div class="module green double img birds">
    <p class="title">Capital Pursuit Live</p>
</div>
<div class="module green single fb">
    <p class="title">Facebook</p>
</div>
<div  class="module single blue img mail">
<p class="title">ArrowHeadMail</p>
</div>

</li>
<li>
    <div class="module blue double img wo">
        <p class="title">Goto my Desktop</p>
    </div>
    <div class="module blue single img ps">
        <p class="title">CanvasShoppe</p>
        </div>
        <div class="module red single music">
            <p class="title">Music</p>
        </div>
    <div class="module purple double img drop">
        <p class="title">Dropbox</p>
    </div>
    <div class="module single red img access">
        <a href="/admin/WebMyAdmin/phpMyAdmin">
            <p class="title">phpMyAdmin</p>
        </a>
    </div>
    <div class="module blue single img word" >
  <p class="title">PDFLint</p>
</div>
    <div class="module blue double img bing"><p class="title">Bing Search</p><input type="text"><input type="button" value="Search"></div>
    
</li>
<li></li>

<li>
    
        
   <a href="/Alarms" class='wide blue cal_e'>
				<h1><?php echo date("j"); ?></h1><p><?php echo DateManager::getDay();?></p>
	<h2 class="top cal_i">Check your watch and your calendar</h2>
				<i class="icon-calendar"></i>
			</a>
  
  <div class="module orange double img w"></div>
  <div class="module green single"><p class="title">Lorem Ipsum</p></div>
    
</li>
<li>
   

<div  class="module single blue img mail">
<p class="title">ArrowHeadMail</p>
</div>
</li>
</ul>

</div>
		



	<div id="screen-nav">
                        
			<button data-dir="prev"><</button>
			<button data-dir="next">></button>
		</div>

</div>


 </body>
<?php
  
 			}

 		}

 		}

else {
  
header("Location: ".AuthenticatorBuilder::buildLoginUri($_SERVER["PHP_SELF"],"Admin"));

 }

  

 
		
		?>
 </html>

>>>>>>> 5e7b2c757565054acf1b6acdbff6480e574a8d68
