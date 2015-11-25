<!DOCTYPE HTML>
<html>
<head>
    <style>
        // Full screen and blue screen
#fullscreen {
  display: none;
}
#bluescreen  {
  font-family: 'Segoe UI';
  width: 620px;
  padding-top: 20px;
  height: 480px;
	background: #010080;
	color: white;
	cursor: none;
	font-size: 12px;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-o-user-select: none;
	user-select: none;
}
#bluescreen p {
	margin-bottom: 12px;
}

/* These -prefix-full-screen must be seperated */
:-webkit-full-screen {
	display: block !important;
}
:-moz-full-screen {
	display: block !important;
}
:full-screen {
	display: block !important;
}
:-moz-full-screen #bluescreen {
	position: absolute;
	left: 50%;
	top: 50%;
	margin-left: -320px;
}

/* 人生オワタ */
#top {
  margin-top: 20px;
	height: 90%;
	position: relative;
}
#jinseiOwata {
	font-family: IPAMonaPGothic,'IPA モナー Pゴシック',Monapo,Mona,'MS PGothic','ＭＳ Ｐゴシック',sans-serif;
	font-size: 16px;
	line-height: 18px;
	width: 100%;
	left: 0;
	top: 50%;
	position: absolute;
}
#click {
	font-family: IPAMonaPGothic,'IPA モナー Pゴシック',Monapo,Mona,'MS PGothic','ＭＳ Ｐゴシック',sans-serif;
	font-size: 16px;
	line-height: 18px;
	display: block;
	background: none;
	text-align: center;
	margin: 0 auto;
	border: 1px #000 solid;
	outline: 0;
	width: 250px;
	padding: 30px;
	cursor: pointer;
}
#owata {
	padding: 50px 0 0 30%;
	border-bottom: 1px #000 solid;
}
    </style>
</head>
<body>
<div id="fullscreen">
	<div id="bluescreen">
		<p>A problem has been detected and browser has been go fullscreen to prevent<br />
		damage to your computer.</p>
		<p>REQUEST_FULL_SCREEN</p>
		<p>If this is the first time you've seen this stop error screen,<br />
		restart your computer. If this screen appears again, follow these steps:</p>
		<p>Check to make sure any new hardware or software is properly installed.<br />
		If this is a new installation, ask your hardware or software manufacturer<br />
		for any updates you might need.</p>
		<p>If problems continue disable or remove any newly installed hardware<br />
		or software. Disable BIOS memory options such as caching or shadowing.<br />
		If you need to use Safe Mode to remove or disable components, restart<br />
		your computer, press F8 to select Advanced Startup Options, and then <br />select Safe Mode.</p>
		<p>Or just press Esc or F11.</p>
		<p>Technical information: <br /><br />
		***STOP: 0x00000054 (0x68697320, 0x00000069, 0x73206661, 0x00006B65)<br /></p>
	</div>
</div>

    <script>
        var bluescreen =  window.document.getElementById('bluescreen');
  // isInIFrame = (window.location != window.parent.location) ? true : false;
  var fullscreen = window.document.getElementById('fullscreen');
  var isFs = false;
   var notSupportFullscreenAPI = !bluescreen.webkitRequestFullScreen && !bluescreen.mozRequestFullScreen && !bluescreen.requestFullScreen;

if(notSupportFullscreenAPI){
  document.getElementById('click').innerHTML = 'Your browser does not support full screen API.';
  document.getElementById('owata').innerHTML = "／^o^＼";
}else{
  	if(bluescreen.webkitRequestFullScreen)
			bluescreen.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
		else if(bluescreen.mozRequestFullScreen)
			bluescreen.mozRequestFullScreen();
    else
      bluescreen.requestFullScreen();

	
	var screenRatio = screen.width/screen.height;
	bluescreen.style.height = 640/screenRatio+'px';
	if(bluescreen.mozRequestFullScreen)
		bluescreen.style.marginTop = '-'+(640/screenRatio/2)+'px';
	var widthRatio = screen.width/640;
	var heightRatio = screen.height/(480/screenRatio);
	
	var fsChange = function(event){
		if(!isFs){
			bluescreen.style.WebkitTransform = 'scale('+widthRatio+')';
			bluescreen.style.MozTransform = 'scale('+widthRatio+')';
			bluescreen.style.Transform = 'scale('+widthRatio+')';
		}
		isFs = isFs ? false : true;
	};
	
	fullscreen.onwebkitfullscreenchange = fsChange;
	fullscreen.onmozfullscreenchange = fsChange;
	fullscreen.onfullscreenchange = fsChange;
}
    </script>
</body>
</html>