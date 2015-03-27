
<?php
  require_once "config.php";
  require_once "includes/component-functions.php";
  require_once "includes/ViewManager.php";
  require_once "includes/DataManager.php";
  use ArcherSys\Viewer\ViewManager;
  use ArcherSys\Data\DataManager;
  
 // Connects to your Database
@ini_set("max_execution_time", 300);
   mysql_connect($config["dbhost"], $config["dbuser"], $config["dbpass"]) or DataManager::notify();
   
 mysql_select_db( "acoserver_acoserver") or DataManager::notify();

 
 //checks cookies to make sure they are logged in



 
if(isset($_COOKIE['ID_my_site']))

 {

 	$username = $_COOKIE['ID_my_site'];

 	$pass = $_COOKIE['Key_my_site'];

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

<script src="core/js/notidar-amd.js"></script>
<script src="/core/js/activity-amd.js"></script>

<link rel="manifest" href="manifest.json">



<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<link href='http://fonts.googleapis.com/css?family=Droid+Sans|Open+Sans:700,600' rel='stylesheet' type='text/css'>

    
<link rel="stylesheet"  href="/core/css/start2.css">


<script>
     window.Notification.requestPermission(function(status) {
      

        var condition = (window.navigator.onLine) ? "online" : "offline";
        if (condition === "online") {
           
            Notidar.pushOnlineNotification();

        }
        else if (condition === "online") {
            Notidar.pushfflineNotification();
        }

        $(window).bind('online', function() {
            condition = "online";
            Notidar.pushOnlineNotification();
            console.info("[CafeSync]: Internet Access Detected");
        });
        $(window).bind('offline', function() {
            
            Notidar.pushOfflineNotification();
            console.info("[CafeSync]: Disconnected from the Internet.");
        });
        });
</script>
<script>
$(function(){
  $("span.number").text(Notidar.Notidex.length);
  $("title").text("VM Home - "+localStorage.getItem("os-name"));
       
 
  var sliderUL = $('div.slider').children('ul'),
  	screens = sliderUL.find('li'),
		screenWidth = screens.width(),
		screenLength = screens.length,
		current = 1,
		totalScreenWidth = screenLength * screenWidth;
   $("#silverdrive-starter").click(function(){
      var sd = ActivityManager.SilverDriveActivity();
      sd.start();
   });
	var h1 = $('div.header').children('h1');

	$('#screen-nav').find('button').on('click', function() {
		var direction = $(this).data('dir'),
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
       
       
      $(".header h1").click(function(){
           window.location.assign("http://localhost/settings");
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





</head>

<body >

	
	<div class="container" >
                

<?php  displayLoginInfo($info); ?>
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
				<h1><?php echo date("j"); ?></h1><p><?php echo date("l");?></p>
	<h2 class="top cal_i">Today's Schedule</h2>
				<i class="icon-calendar"></i>
			</a>
<div class="module neonblue single img word" >
    <a href="Producktiviti/PDFLint">
      <p class="title">PDFLint</p>
    </a>
    </div>
  <div class="module red single img birds">
<a href="http://localhost/entertainment/games/index.php"><p class="title">Games</p></a>
					</div>


</li>
<li>
					<div class="module yellow double img not">
						<p class="title">Notifications</p>
						<div class="img msg">
							<p class="sub-heading"> your notifications:<span class="number"></span></p>
						</div>
					</div></li>
<li>
<div class="module blue double img ps">
<p class="title">CanvasShoppe</p>
</div>
<div class="module green single img fb" id="birdc">

<p class="title">Collaborate</p>

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
  
header("Location: login.php?redirect_uri=index.php");

 }

  

 
		
		?>
 </html>

