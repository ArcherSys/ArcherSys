<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Weather App</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600,400' rel='stylesheet' type='text/css'/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<style>
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}

.noselect {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

html, body{
	background-color: #F5F8FC;
	height: 100%;
	width: 100%;
	overflow: hidden;
	font-family: 'Open Sans', sans-serif;
}

.info p{
  text-align: center;
	margin: 10px auto 0px auto;
	width: 540px;
	color: #4c4c4c;
	font-size: 16px;
	font-weight: bold;
}

.wrapper{
    position:absolute;
    left:0; right:0;
    top:0; bottom:0;
    margin:auto;

    max-width:100%;
    max-height:100%;
    overflow:auto;
    width: 540px;
    height: 500px;
    overflow: hidden;
}

.shadow{
	-webkit-box-shadow: 0px 30px 100px 1px rgba(180,180,180,1);
	-moz-box-shadow: 0px 30px 100px 1px rgba(180,180,180,1);
	box-shadow: 0px 30px 100px 1px rgba(180,180,180,1);
}

.top{
	position: relative;
	z-index: 0;
	background-color: #5AC2E7;
	height: 300px;
	overflow: hidden;
	text-align: center;
	display: inline-block;
	width: 100%;
	float: left;
	tex
}

.top .btn{
	width: 25px;
	height: 25px;
	text-align: center;
	line-height: 25px;
	position: absolute;
	color: white;
	font-weight: bold;
	font-size: 20px;
	border-radius: 50%;
	border: 1px solid white;
	top: 5px;
	left: 510px;
	cursor: pointer;
	text-transform: uppercase;
}

.top img{
	position: relative;
	z-index: -1;
	margin-top: -10px;
	margin-bottom: 10px;
	width: 275px;
	-webkit-filter: invert(100%);
	-moz-filter: invert(100%);
	filter: invert(100%);
}

.top .deg{
	font-weight: bold;
}

.top .text{
	width: 40%;
	text-align: center;
	color: white;
	margin-bottom: 5px;
	margin-top: -70px;
  margin-left: auto;
  margin-right: auto;
	font-size: 25px;
}

.top input{
	position: relative;
	z-index: 1;
	font-family: 'Open Sans', sans-serif;
	width: 200px;
	background-color: rgba(0,0,0,0);
	border: 0px;
	outline: 0;
}

.top input:focus{
	outline: 0;
	border-bottom: 2px solid white;
}

.bot{
	float: left;
	background-color: white;
	height: 200px;
	overflow: hidden;
	display: inline-block;
	width: 100%;
}

.bot ul{
	overflow: hidden;
	display: inline-block;
	width: 100%;
	height: 100%;
	list-style-type: none;
	padding-top: 30px;
}

.bot ul li{
	color: #999999;
	float: left;
	width: 20%;
	margin: 0 2.5%;
	text-align: center;
}

.bot ul li:nth-child(1){
	color: #4c4c4c;
}


.bot ul li h1{
	text-transform: uppercase;
	font-weight: bold;
}

.bot ul li p{
	font-weight: bold;
}

.bot ul li img{
	-webkit-filter: invert(60%);
	-moz-filter: invert(60%);
	filter: invert(60%);
}


.bot ul li:first-child img{
	-webkit-filter: invert(30%);
	-moz-filter: invert(30%);
	filter: invert(30%);
}
	</style>
</head>
<body>
<div class="info"><p>Click on the city to change it, and press enter to save and update weather data.</p><p>You can also change the temperature scale (Fahrenheit / Celsius) by clicking in the top right corner.</p></div>
<div class="wrapper shadow">
	<div class="top">
		<div class="btn noselect" id="btn">F</div>
		<img id="big" src="" alt="">
		<p id="deg" class="text deg"></p>
		<input class="text" type="text" id="city" value="">
	</div>
	<div class="bot">
		<ul>
			<li>
				<h1 id="forecast0"></h1>
				<img id="forecastimg0" src=""></img>
				<p id="forecastdeg0"></p>
			</li>
			<li>
				<h1 id="forecast1"></h1>
				<img id="forecastimg1" src=""></img>
				<p id="forecastdeg1"></p>
			</li>
			<li>
				<h1 id="forecast2"></h1>
				<img id="forecastimg2" src=""></img>
				<p id="forecastdeg2"></p>
			</li>
			<li>
				<h1 id="forecast3"></h1>
				<img  id="forecastimg3" src=""></img>
				<p id="forecastdeg3"></p>
			</li>
		</ul>
	</div>
</div>
<script>
    var baseYahooURL = "https://query.yahooapis.com/v1/public/yql?q="
var selectedCity = "New York";
var placeholder = "";
var unit = "f"
init();

function init(){
    getWoeid(selectedCity);

    $('#city').keypress(function(event) {
    	if ( event.which == 13 ) {
	    selectedCity =  $('#city').val();
	    getWoeid(selectedCity);
	    $('#city').blur();
	  }
	});

	$('#btn').click(function() {
	  if($('#btn').html() == "F")
	  {
	  	unit = "c";
	  }
	  else unit = "f";
	  $('#btn').html(unit.toUpperCase());
	  getWoeid(selectedCity);
	})

	$('#city').focus(function(event) {
		placeholder = $("#city").val();
		$("#city").val("");
	});

	$('#city').blur(function(event) {
		if($("#city").val() == "")
		{
		    $("#city").val(placeholder);
		}
	});
}

function getWoeid(city){
	var woeidYQL = 'select woeid from geo.placefinder where text="'+ city +'"&format=json';
	var jsonURL = baseYahooURL + woeidYQL;
	$.getJSON(jsonURL, woeidDownloaded);
}

function woeidDownloaded(data){
	var woeid = null;
	if(data.query.count <= 0)
	{
		$('#city').val("No city found");
		$('#deg').html("");
		setImage(999, $("#big")[0]);
		for(var i = 0; i <= 3;i++)
		{
			$('#forecast'+i).html("");
			setImage(999, $("#forecastimg" + i)[0]);
			$('#forecastdeg' + i).html("");
		}
		return;
	}
	else if(data.query.count == 1){
		woeid = data.query.results.Result.woeid;
	}
	else
	{
		woeid = data.query.results.Result[0].woeid;
	}
	getWeatherInfo(woeid);
}

function getWeatherInfo(woeid){
 var weatherYQL = 'select * from weather.forecast where woeid=' + woeid + ' and u = "'+unit+'" &format=json';
 var jsonURL = baseYahooURL + weatherYQL
 $.getJSON(jsonURL, weaterInfoDownloaded);
}

function weaterInfoDownloaded(data){
	$('#city').val(data.query.results.channel.location.city);
	$('#deg').html(data.query.results.channel.item.condition.temp + "°" + unit.toUpperCase());
	setImage(data.query.results.channel.item.condition.code, $('#big')[0]);
	for(var i = 0; i <= 3;i++)
	{
		var fc = data.query.results.channel.item.forecast[i];
		$('#forecast'+i).html(fc.day);
		setImage(fc.code, $("#forecastimg" + i)[0]);
		$('#forecastdeg' + i).html((parseInt(fc.low) + parseInt(fc.high)) / 2 + " °" + unit.toUpperCase());
	}
}

function setImage(code, image){
	image.src = "http://student.howest.be/enzo.eghermanne/codepen/";
	switch(parseInt(code))
	{
		case 0:
			image.src += "images/icons/Tornado.svg"
			break;
		case 1:
			image.src += "images/icons/Cloud-Lightning.svg"
			break;
		case 2:
			image.src += "images/icons/Wind.svg"
			break;
		case 3:
			image.src += "images/icons/Cloud-Lightning.svg"
			break;
		case 4:
			image.src += "images/icons/Cloud-Lightning.svg"
			break;
		case 5:
			image.src += "images/icons/Cloud-Snow-Alt.svg"
			break;
		case 6:
			image.src += "images/icons/Cloud-Rain-Alt.svg"
			break;
		case 7:
			image.src += "images/icons/Cloud-Snow-Alt.svg"
			break;
		case 8:
			image.src += "images/icons/Cloud-Drizzle-Alt.svg"
			break;
		case 9:
			image.src += "images/icons/Cloud-Drizzle-Alt.svg"
			break;
		case 10:
			image.src += "images/icons/Cloud-Drizzle-Alt.svg"
			break;
		case 11:
			image.src += "images/icons/Cloud-Drizzle-Alt.svg"
			break;
		case 12:
			image.src += "images/icons/Cloud-Drizzle-Alt.svg"
			break;
		case 13:
			image.src += "images/icons/Cloud-Snow-Alt.svg"
			break;
		case 14:
			image.src += "images/icons/Cloud-Snow-Alt.svg"
			break;
		case 15:
			image.src += "images/icons/Cloud-Snow-Alt.svg"
			break;
		case 16:
			image.src += "images/icons/Cloud-Snow-Alt.svg"
			break;
		case 17:
			image.src += "images/icons/Cloud-Hail-Alt.svg"
			break;
		case 18:
			image.src += "images/icons/Cloud-Hail-Alt.svg"
			break;
		case 19:
			image.src += "images/icons/Cloud-Hail-Alt.svg"
			break;
		case 20:
			image.src += "images/icons/Cloud-Fog.svg"
			break;
		case 21:
			image.src += "images/icons/Cloud-Fog.svg"
			break;
		case 22:
			image.src += "images/icons/Cloud-Fog.svg"
			break;
		case 23:
			image.src += "images/icons/Cloud-Fog.svg"
			break;
		case 24:
			image.src += "images/icons/Wind.svg"
			break;
		case 25:
			image.src += "images/icons/Thermometer-Zero"
			break;
		case 26:
			image.src += "images/icons/Cloud.svg"
			break;
		case 27:
			image.src += "images/icons/Cloud-Moon.svg"
			break;
		case 28:
			image.src += "images/icons/Cloud.svg"
			break;
		case 29:
			image.src += "images/icons/Cloud-Moon.svg"
			break;
		case 30:
			image.src += "images/icons/Cloud-Sun.svg"
			break;
		case 31:
			image.src += "images/icons/Moon.svg"
			break;
		case 32:
			image.src += "images/icons/Sun.svg"
			break;
		case 33:
			image.src += "images/icons/Moon.svg"
			break;
		case 34:
			image.src += "images/icons/Sun.svg"
			break;
		case 35:
			image.src += "images/icons/Cloud-Hail-Alt.svg"
			break;
		case 36:
			image.src += "images/icons/Sun.svg"
			break;
		case 37:
			image.src += "images/icons/Cloud-Lightning.svg"
			break;
		case 38:
			image.src += "images/icons/Cloud-Lightning.svg"
			break;
		case 39:
			image.src += "images/icons/Cloud-Lightning.svg"
			break;
		case 40:
			image.src += "images/icons/Cloud-Rain.svg"
			break;
		case 41:
			image.src += "images/icons/Cloud-Snow-Alt.svg"
			break;
		case 42:
			image.src += "images/icons/Cloud-Snow-Alt.svg"
			break;
		case 43:
			image.src += "images/icons/Cloud-Snow-Alt.svg"
			break;
		case 44:
			image.src += "images/icons/Cloud.svg"
			break;
		case 45:
			image.src += "images/icons/Cloud-Lightning.svg"
			break;
		case 46:
			image.src += "images/icons/Cloud-Snow-Alt.svg"
			break;
		case 47:
			image.src += "images/icons/Cloud-Lightning.svg"
			break;
		case 3200:
			image.src += "images/icons/Moon-New.svg"
			break;
		case 999:
			image.src += "images/icons/Compass.svg"
			break;
		default:
			image.src += "images/icons/Moon-New.svg"
			break;
	}
}
</script>
</body>
</html>