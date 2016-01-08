
<?php
  require_once "config.php";
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
    
StyleSheetManager::addStyle("/core/css/start",false);
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
  
header("Location: localhost/login.php?redirect_uri=".$_SERVER["PHP_SELF"]."&roleDetect=Admin");

 }

  

 
		
		?>
 </html>

