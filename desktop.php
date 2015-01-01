<!DOCTYPE HTML>
<html>
  <head>
  <link rel="icon"  href="favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
    <title>ArcherSys Desktop</title>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script
<script src="core/js/libs/jquery.min.js"></script>
<script src="https://togetherjs.com/togetherjs-min.js"></script>
<script>
var TogetherJSConfig_toolName = "BIRD";
var  TogetherJSConfig_hubBase = "https://bird-acosf.c9.io";
// Spotlight toggles
$(function() {
  $('.results').hide();
   

        
        $('#calendar').fullCalendar({
      
    });
     
  


  $("#bird").click(TogetherJS);
  $( "#spotlight" ).click(function() {
    $(this).toggleClass( "active" );
    $('.spotlight-search').toggleClass( "active" );
    $('.demo').toggleClass( "active" );
  });
  
  $('#search').focus(function(){
    $('.results'+ this.value).show();
  });
    $("#BIRDCandy").click(function(){
    
      $(".demo").append("<div id=\"Candy\"><iframe src=\"http://localhost/Alonzo/candy-master/\"></iframe></div>");
      $("#Candy").dialog();
    })
  $('#search').on("focusout", function(){
    $('.spotlight-search').toggleClass( "active" );
    $('#spotlight').toggleClass( "active" );
  });
  	var date = new Date(),
	weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        $('#weekday').html(weekday[date.getDay()]);
	$('#day').html(date.getDate());

});


    

// Clock [from: unknown]
function updateClock ( ) {
  var currentTime = new Date ( );
  var currentHours = currentTime.getHours ( );
  var currentMinutes = currentTime.getMinutes ( );
  var currentSeconds = currentTime.getSeconds ( );

  // Pad the minutes and seconds with leading zeros, if required
  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

  // Compose the string for display
  var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds;

  // Update the time display
  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}

</script>
<script src="/js/libs/togetherjs.js"></script>
<script type="text/javascript" src="https://apis.google.com/js/platform.js"></script>
 <link rel='stylesheet' href='core/js/fullcalendar/fullcalendar.css' />
<script src='core/js/fullcalendar/lib/jquery.min.js'></script>
<script src='core/js/fullcalendar/lib/moment.min.js'></script>
<script src='core/js/fullcalendar/fullcalendar.js'></script>

<link rel="stylesheet" type="text/css" href="core/css/modo.css">
</head>
<body onload="updateClock(); setInterval('updateClock()', 1000 )">
  
  <div class="header">
    <ul class="menu-bar icons">
      <li>
        <a href="#">
          <i class="icon bluetooth"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="icon wifi"></i>
        </a>
      </li>
      <li>
        <a href="#" id="clock">12:41:59</a>
      </li>
      <li>
        <a href="#">
          <i class="icon volume"></i>
        </a>
      </li>
      <li id="spotlight">
        <a href="#">
          <i class="icon spotlight"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="icon notification"></i>
        </a>
      </li>
    </ul>
  </div><!--/.container.header -->

  <div class="spotlight-search">
    <div class="input">
      <div class="loading-wrapper">
        <div class="loading">
          <i></i><i></i><i></i><i></i><i></i><i></i>
          <i></i><i></i><i></i><i></i><i></i><i></i>
        </div>
      </div>
      <input type="search" id="search" />
      <span>Spotlight</span>
    </div><!--/.input -->
    <div class="results">
      <ul class="section no-preview">
        <li>
          <a href="#">
            <span>Show All in Finder</span>
            <div class="result"></div>
          </a>
        </li>
      </ul>
      <ul class="section lbl images top-hit">
        <li>
                <a href="#" id="BIRDCandy">
                    <span>BIRDCandy</span>
                    <div class="result image">
                        <img src="https://avatars0.githubusercontent.com/u/779260?v=3&s=80" />
                    </div>
                </a>
        </li>
      </ul>
      <ul class="section lbl images">
            <li>
                <a href="#" id="bird">
                    <span>BIRD</span>
                    <div class="result image">
                        <img src="https://togetherjs.com/images/site-hero-image@2x.png" />
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <span>View</span>
                    <div class="result image">
                        <img src="https://dl.dropboxusercontent.com/u/1621719/Codepen/Spotlight/yeoman.gif" />
                    </div>
                </a>
            </li>
        </ul>
        <ul class="section lbl folders">
            <li>
                <a href="#">
                    <span>angular-spotlight</span>
                    <div class="result">
                        <i class="folder"></i>
                        <div class="details">
                            <div class="title">angular-spotlight</div>
                            <div class="type">Folder</div>
                            <div class="size">
                                <span>2 KB</span>
                                <span>2 items</span>
                            </div>
                            <div class="modified">Last modified Dec 22, 2013, 8:14:26 PM</div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
        <ul class="section lbl web">
            <li>
                <a href="#">
                    <span>ng-conf</span>
                    <div class="result website">
                        <iframe class="page-display" src="http://www.ng-conf.org" frameborder="0"></iframe>
                    </div>
                </a>
            </li>
        </ul>
        <ul class="section no-preview">
            <li>
                <a href="#">
                    <span>Spotlight Preferences...</span>
                    <div class="result"></div>
                </a>
            </li>
        </ul>
    </div>
  </div>
</div>

<div class="demo">
<div class="app">

			<div class="app-calendar">
			
				<div id="weekday">monday</div>

				<div id="day">13</div>

			</div> <!-- end app-calendar -->

			<p class="app-title">Calendar</p>

		</div> <!-- end app -->

 <a href="https://codeclimate.com/github/ArcherSys/ArcherSys"><img src="https://codeclimate.com/github/ArcherSys/ArcherSys/badges/gpa.svg" /></a>
</div>


</body>
</html>