


<?php

 


  require_once "config.php";
  require_once "includes/component-functions.php";

 // Connects to your Database

 mysql_connect("localhost", "root", "aco1234") or die(mysql_error());

 mysql_select_db("acoserver_acoserver") or die(mysql_error());

 
 //checks cookies to make sure they are logged in



 
if(isset($_COOKIE['ID_my_site']))

 {

 	$username = $_COOKIE['ID_my_site'];

 	$pass = $_COOKIE['Key_my_site'];

 	 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());

 	while($info = mysql_fetch_array( $check ))

 		{

 

 //if the cookie has the wrong password, they are taken to the login page

 		if ($pass != $info['password'])

 			{ 			header("Location: login.php");

 			}

 

 //otherwise they are shown the admin area

 	else

 			{
$_SESSION["gravatar"] = asos_fetch_gravatar($info["username"]);

  
?>
	<!DOCTYPE HTML>
		
<html  xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta name="msapplication-config" content="ieconfig.xml" />
<meta charset="utf-8">
<link rel="icon"  href="http://localhost:80/favicon.ico" >
<title>VM Home</title>
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="manifest" href="manifest.webapp">
<?php HtGen::declareApplication("ArcherSys OS"); ?>
<meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
<script data-main="/core/neokit-loader.js" src="core/require.js"></script>


 

<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<link href='http://fonts.googleapis.com/css?family=Droid+Sans|Open+Sans:700,600' rel='stylesheet' type='text/css'>

    <?php addStartScreen(); ?>
  
<style>
@import url(http://netdna.bootstrapcdn.com/font-awesome/2.0/css/font-awesome.css);
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300);



h1{
	font-family: "Open Sans", arial;
	font-weight:300;
	float: left;
	width: 55%;
	margin-left: 5px;
	font-size: 40px;
	margin-bottom: 40px;
}
h2{
	margin:0px;
	font-family: "Open Sans", arial;
	font-weight:300;
}

a.wide, a.box{
	text-decoration:none;
	color:#fff;
	-webkit-transition: -webkit-transform 0.1s;
	position:relative;
	overflow:hidden;
}

a.wide h2, a.box h2{
	position:absolute;
	bottom:5px;
	font-size:14px;
}

a.wide h2.top, a.box h2.top{
	position:static;

	font-size:14px;
}
a.wide i, a.box i{
font-size: 60px;
text-align: center;
display: block;
margin-top: 10px; /* outside Codepen is actually 30px */
}
a.wide:hover, a.box:hover{
	-webkit-transform: scale(1.05);
}

a.wide:active, a.box:active{
	-webkit-transform: scale(1);
}
.wide{
	width:270px;
	height:120px;
	overflow:hidden;
	font-size:13px;
	padding:10px;
	display:block;
	float:left;
	margin:5px;
}

.box{
	width:120px;
	height:120px;
	overflow:hidden;
	font-size:13px;
	padding:10px;
	display:block;
	float:left;
	margin:5px;
}
.lime{background:#61b812;}
.orange{background:#e76022;}
.blue{background:#1E90FF;}
.redgay{background:#DA312E;}
.yellow{background:#dbb701;}
.bluefish{background:#02b9e3;}
.magenta{background:#d22a4e;}
.spacer{
	width:770px;
	margin-right: 50px;
	float:left;
}
.spacer3x{
	width:300px;
}

@-webkit-keyframes galeri
{
1% {background-position: 0px 0px;}
10%{background-position: 0px 140px;}
20%{background-position: 0px 140px;}
30%{background-position: 0px 280px;}
40%{background-position: 0px 280px;}
50%{background-position: 0px 420px;}
60%{background-position: 0px 420px;}
70%{background-position: 0px 560px;}
80%{background-position: 0px 560px;}
100% {background-position: 0px 560px;}
}

.gallery{
	background: url(/core/media/img/Desert.png);
	-webkit-animation: galeri 15s infinite;
}
.right{
	float:right;
	text-align:right;
	margin-top: 30px;
}
.right p{
	margin: 5px 0px;
}
img.prof{
	float: right;
	margin: 10px;
	margin-top: 40px;
}
.i_bot{
	font-size: 30px;
	text-align: left;
	position: absolute;
	bottom: 0px;
}
.cal_i{
	margin-top: 20px;
	margin-left: 15px;
	width: 155px;
}
.cal_e h1{
	position: absolute;
	right: 0px;
	width: 115px;
	text-align: center;
	margin: 0px;
	font-size: 60px;
}
.cal_e p{
	position: absolute;
	right: 0px;
	width: 115px;
	text-align: center;
	margin-top: 75px;
	text-transform: uppercase;
}
.cal_e i{
	text-align: left;
	font-size: 25px !important;
	position: absolute;
	bottom: 0px;
}
</style>

<script src="core/js/beximal.js"></script>

<script type="text/javascript">


$(document).ready(function(){
  $("title").text("VM Home - "+localStorage.getItem("os-name"));
  var sliderUL = $('div.slider').children('ul'),
  	screens = sliderUL.find('li'),
		screenWidth = screens.width(),
		screenLength = screens.length,
		current = 1,
		totalScreenWidth = screenLength * screenWidth;

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
  




</script>



<script src="core/js/mozilla/events.js"></script>


</head>

<body>
	

	
	<div class="container" >
                

<?php  displayLoginInfo($info); ?>
		<div class="slider">
			<ul class="screen">
				<li>

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
<div class="module neonblue single img word">
    <a href="Producktiviti/PDFLint">
      <p class="title">PDFLint</p>
    </a>
    </div>
    <div class="module red single img birds">
						<a href="http://localhost/entertainment/games/index.php"><p class="title">Games</p></a>
					</div>



</li>
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
<div class="module blue double img mahara">
						<a href="http://127.0.0.1/apps/mahara/htdocs"><p class="title">Partners</p></a>
					</div>
					<div class="module red single img market">
					<a href="https://sites.google.com/site/archersysoswalnutstore/"><p class="title">ArcherSys Walnut App Store</p></a>
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
  
header("Location: login.php");

 }

  

 
		
		?>
 </html>

