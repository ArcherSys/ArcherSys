<!DOCTYPE HTML>
<html>
<head>
<title>Start Here</title>
<script src="jquery.js"></script>
<script>
    $(function() {

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

    (direction === 'next') ? ++current: --current;

    if (current === 0) {
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

    if (direction && loc !== 0) {
      unit = (direction === 'next') ? '-=' : '+=';
    }

    container.animate({
      'margin-left': unit ? (unit + loc) : loc
    });
  }

})();
</script>
<style>
    * {
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -ms-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
}
/*.module:hover {
  backface-visibility: hidden; -webkit-backface-visibility: hidden;
}*/

@font-face {
  font-family: windows;
  src: url(http://ashleyjt.net/windows/fonts/windows-light.ttf);
  font-weight: 300;
}

* {
  box-sizing: border-box;
  padding: 0;
}

p > a {
  text-decoration: none;
  color: white;
}

ul,
li {
  list-style: none;
  padding: 0;
  margin: 0;
}

body {
  background: #0F6D39;
  font-family: windows;
  color: white;
  font-size: 14px;
}

.archersys-start-container {
  width: 80%;
  margin: 0 auto;
  clear: both;
  position: relative;
}

.module {
  position: relative;
  float: left;
  display: inline-block;
  margin: 7px 14px 7px 0;
}

.module.single {
  width: 163px;
  height: 170px;
}

.module.double {
  width: 340px;
  height: 170px;
}

.module > div.img {
  margin: 60px 0 10px 20px;
  width: 75%;
}

.module > div.img > p.sub-heading {
  margin-left: 50px;
  font-size: 18px;
  width: 70%;
}

.header {
  overflow: hidden;
  width: 100%;
  position: relative;
}

h1 {
  float: left;
  font-size: 45px;
}

.profile {
  position: absolute;
  float: right;
  background: url(http://ashleyjt.net/windows/images/me.png) no-repeat;
  background-size: 30%;
  width: 216px;
  height: 216px;
  top: 20px;
  left: 950px;
}

.profile p.name {
  position: absolute;
  top: -25px;
  font-size: 24px;
  left: -65px;
  width: 100%;
}

.profile p.status {
  position: absolute;
  font-size: 13px;
  left: -60px;
  top: 20px;
}

.title {
  position: absolute;
  top: 125px;
  left: 20px;
  font-size: 14px;
}

.sub-heading {
  font-size: 20px;
  width: 65%;
  padding: 10px 0 0 20px;
}

.third-heading {
  margin-left: 130px;
  font-size: 30px;
}

input[type=text] {
  border: 0;
  padding: 10px;
  font-size: 16px;
  margin: 70px 0 0 20px;
  width: 300px;
}

input[type=text]:focus {
  outline: none;
}

input[type=button] {
  border: 0;
  margin-left: -35px;
  background: url(http://ashleyjt.net/windows/images/search.png) no-repeat;
  width: 27px;
  height: 27px;
  text-indent: -9999px;
}

.blue {
  background-color: #02bee1;
}

.blue:hover,
.blue:focus {
  background-color: #017e95;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
  -webkit-transform: scale(1.1, 1.1);
  -moz-transform: scale(1.1, 1.1);
  -ms-transform: scale(1.1, 1.1);
  -o-transform: scale(1.1, 1.1);
  transform: scale(1.1, 1.1);
  z-index: 9999;
}

.green {
  background-color: #62bc0f;
}

.green:hover,
.green:focus {
  background-color: #3d7509;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
  -webkit-transform: scale(1.1, 1.1);
  -moz-transform: scale(1.1, 1.1);
  -ms-transform: scale(1.1, 1.1);
  -o-transform: scale(1.1, 1.1);
  transform: scale(1.1, 1.1);
  z-index: 9999;
}

.pink {
  background-color: #d02547;
}

.pink:hover,
.pink:focus {
  background-color: #8f1931;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
  -webkit-transform: scale(1.1, 1.1);
  -moz-transform: scale(1.1, 1.1);
  -ms-transform: scale(1.1, 1.1);
  -o-transform: scale(1.1, 1.1);
  transform: scale(1.1, 1.1);
  z-index: 9999;
}

.orange {
  background-color: #dc6a25;
}

.orange:hover,
.orange:focus {
  background-color: #9c4a19;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
  -webkit-transform: scale(1.1, 1.1);
  -moz-transform: scale(1.1, 1.1);
  -ms-transform: scale(1.1, 1.1);
  -o-transform: scale(1.1, 1.1);
  transform: scale(1.1, 1.1);
  z-index: 9999;
}

.yellow {
  background-color: #dfc202;
}

.yellow:hover,
.yellow:focus {
  background-color: #938001;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
  -webkit-transform: scale(1.1, 1.1);
  -moz-transform: scale(1.1, 1.1);
  -ms-transform: scale(1.1, 1.1);
  -o-transform: scale(1.1, 1.1);
  transform: scale(1.1, 1.1);
  z-index: 9999;
}

.darkblue {
  background-color: #0d4b97;
}

.darkblue:hover,
.darkblue:focus {
  background-color: #072851;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
  -webkit-transform: scale(1.1, 1.1);
  -moz-transform: scale(1.1, 1.1);
  -ms-transform: scale(1.1, 1.1);
  -o-transform: scale(1.1, 1.1);
  transform: scale(1.1, 1.1);
  z-index: 9999;
}

.midblue {
  background-color: #3b5998;
}

.midblue:hover,
.midblue:focus {
  background-color: #263961;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
  -webkit-transform: scale(1.1, 1.1);
  -moz-transform: scale(1.1, 1.1);
  -ms-transform: scale(1.1, 1.1);
  -o-transform: scale(1.1, 1.1);
  transform: scale(1.1, 1.1);
  z-index: 9999;
}

.red {
  background-color: #b91d21;
}

.red:hover,
.red:focus {
  background-color: #771315;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
  -webkit-transform: scale(1.1, 1.1);
  -moz-transform: scale(1.1, 1.1);
  -ms-transform: scale(1.1, 1.1);
  -o-transform: scale(1.1, 1.1);
  transform: scale(1.1, 1.1);
  z-index: 9999;
}

.purple {
  background-color: #8e81a7;
}

.purple:hover,
.purple:focus {
  background-color: #685a81;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
  -webkit-transform: scale(1.1, 1.1);
  -moz-transform: scale(1.1, 1.1);
  -ms-transform: scale(1.1, 1.1);
  -o-transform: scale(1.1, 1.1);
  transform: scale(1.1, 1.1);
  z-index: 9999;
}

.img {
  background-repeat: no-repeat;
  background-size: 20%;
  width: 100%;
  height: 100%;
}

.img.double {
  background-position: 250px 20px;
}

.img.single {
  background-position: center center;
  background-size: 50%;
}

.img:hover,
.img:focus {
  cursor: pointer;
}

.xbox {
  background-image: url(http://ashleyjt.net/windows/images/Xbox-360.png);
}

.bing {
  background-image: url(http://ashleyjt.net/windows/images/Bing.png);
}

.excel {
  background-image: url(http://ashleyjt.net/windows/images/Excel.png);
}

.hp {
  background-image: url(http://ashleyjt.net/windows/images/HP.png);
}

.w {
  background-image: url(http://ashleyjt.net/windows/images/w8.png);
}

.wo {
  background-image: url(http://ashleyjt.net/windows/images/w95.png);
}

.word {
  background-image: url(http://ashleyjt.net/windows/images/word.png);
}

.excel {
  background-image: url(http://ashleyjt.net/windows/images/Excel.png);
}

.youtube {
  background-image: url(http://ashleyjt.net/windows/images/youtube.png);
}

.intel {
  background-image: url(http://ashleyjt.net/windows/images/Intel.png);
}

.fb {
  background-image: url(http://ashleyjt.net/windows/images/fb.png);
}

.twitter {
  background-image: url(http://ashleyjt.net/windows/images/twitter.png);
}

.mail {
  background-image: url(http://ashleyjt.net/windows/images/Hotmail.png);
}

.market {
  background-image: url(http://ashleyjt.net/windows/images/market.png);
}

.not {
  background-image: url(http://ashleyjt.net/windows/images/Notifications.png);
}

.msg {
  background-image: url(http://ashleyjt.net/windows/images/Messaging.png);
}

.msg {
  background-image: url(http://ashleyjt.net/windows/images/Messaging.png);
}

.net {
  background-image: url(http://ashleyjt.net/windows/images/Internet10.png);
}

.apple {
  background-image: url(http://ashleyjt.net/windows/images/Apple.png);
}

.android {
  background-image: url(http://ashleyjt.net/windows/images/Android.png);
}

.drop {
  background-image: url(http://ashleyjt.net/windows/images/Dropbox.png);
}

.power {
  background-image: url(http://ashleyjt.net/windows/images/PowerPoint.png);
}

.html {
  background-image: url(http://ashleyjt.net/windows/images/HTML5.png);
}

.ps {
  background-image: url(http://ashleyjt.net/windows/images/ps.png);
}

.fl {
  background-image: url(http://ashleyjt.net/windows/images/fl.png);
}

.access {
  background-image: url(http://ashleyjt.net/windows/images/Access.png);
}

.app {
  background-image: url(http://ashleyjt.net/windows/images/app.png);
}

.birds {
  background-image: url(http://ashleyjt.net/windows/images/birds.png);
}

#slider-nav {
  margin-top: 20px;
}

button {
  width: 100px;
  height: 100px;
  border: 0;
  background-color: rgba(11, 78, 41, 0.3);
  position: absolute;
  top: 320px;
  left: -120px;
  color: rgba(255, 255, 255, 0.5);
  font-size: 36px;
}

button:hover,
button:focus {
  background-color: rgba(11, 78, 41, 0.6);
  font-size: 45px;
  cursor: pointer;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
  -webkit-transform: scale(1.1, 1.1);
  -moz-transform: scale(1.1, 1.1);
  -ms-transform: scale(1.1, 1.1);
  -o-transform: scale(1.1, 1.1);
  transform: scale(1.1, 1.1);
}

[data-dir='next'] {
  left: 1070px;
}

.slider {
  width: 1070px;
  height: 547px;
  overflow: hidden;
  margin-top: 30px;
  padding-left: 10px;
  margin-left: -10px;
}

.slider ul {
  width: 10000px;
}

.slider li {
  float: left;
  height: 547px;
  width: 1070px;
}

footer {
  margin: 40px 0 0 0;
  font-size: 12px;
}
</style>
</head>
<body>

  <div class="archersys-start-container">

    <div class="header">
			<h1>Start</h1>
				<div class="profile">
					<p class="name">User</p>
					<p class="status">Hello :)</p>
				</div>
		</div>

		<div class="slider">
			<ul class="screen">
				<li>
					<div class="module purple double img w">
						<h2 class="title">Home</h2>
						<p class="sub-heading">Welcome to the New Windows 8 UI</p>
					</div>
					<div class="module orange double img bing">
						<p class="title">Search</p>
						<form>
							<input type="text" placeholder="Search bing...">
							<input type="button" class="submit" value="submit">
						</form>
					</div>
					<div class="module yellow double img not">
						<p class="title">Notifications</p>
						<div class="img msg">
							<p class="sub-heading">View your notifications (3)</p>
						</div>
					</div>
					<div class="module red single img youtube">
						<p class="title">Video</p>
					</div>
					<div class="module yellow double img market">
						<p class="title">Market</p>
						<p class="sub-heading">Download the latest apps for Windows 8 and Windows Phone</p>
					</div>
					<div class="module darkblue single img intel">
						<p class="title">Partners</p>
					</div>
					<div class="module pink double img mail">
						<p class="title">Mail</p>
						<p class="sub-heading">You have no new Mail</p>
						<p class="third-heading">:-(</p>
					</div>
					<div class="module green single img xbox">
						<p class="title">Xbox</p>
					</div>
					<div class="module blue double img twitter">
						<p class="title">Social</p>
						<p class="sub-heading"><i>"Just bought a new Surface #microsoft #happy"</i></p>
					</div>
					<div class="module green double img excel">
						<p class="title">Products</p>
						<p class="sub-heading">Office Excel 2013 coming soon to Windows</p>
					</div>
					<div class="module blue single img net">
						<p class="title">Internet</p>
					</div>
				</li>

				<li>
					<div class="module red double img w">
						<p class="title">Home</p>
					</div>
					<div class="module green double img android">
						<p class="title">Competitors</p>
					</div>
					<div class="module darkblue double img apple">
						<p class="title">Competitors</p>
					</div>
					<div class="module red double img power">
						<p class="title">Products</p>
					</div>
					<div class="module blue double img hp">
						<p class="title">Partners</p>
					</div>
					<div class="module blue single img ps">
						<p class="title">Engine</p>
					</div>
					<div class="module red single img fl">
						<p class="title">Engine</p>
					</div>
					<div class="module pink single img wo">
						<p class="title">XP</p>
					</div>
					<div class="module red single img birds">
						<p class="title">Games</p>
					</div>
					<div class="module blue single img drop">
						<p class="title">Products</p>
					</div>
					<div class="module orange double img access">
						<p class="title">Products</p>
					</div>
					<div class="module darkblue single img app">
						<p class="title">App</p>
					</div>
				</li>

				<li>
					<div class="module blue single img w">
						<p class="title">Home</p>
					</div>
					<div class="module red single img bing">
						<p class="title">Search</p>
					</div>
					<div class="module purple double img not">
						<p class="title">Notifications</p>
					</div>
					<div class="module green double img youtube">
						<p class="title">YouTube</p>
					</div>
					<div class="module yellow single img market">
						<p class="title">Market</p>
					</div>
					<div class="module darkblue single img intel">
						<p class="title">Partners</p>
					</div>
					<div class="module pink single img mail">
						<p class="title">Mail</p>
					</div>
					<div class="module orange single img xbox">
						<p class="title">Xbox</p>
					</div>
					<div class="module pink single img twitter">
						<p class="title">Social</p>
					</div>
					<div class="module blue single img xbox">
						<p class="title">Games</p>
					</div>
					<div class="module orange single img android">
						<p class="title">Android</p>
					</div>
					<div class="module pink double img intel">
						<p class="title">Intel</p>
					</div>
					<div class="module red double img youtube">
						<p class="title">YouTube</p>
					</div>
					<div class="module midblue single img mail">
						<p class="title">Mail</p>
					</div>
				</li>
			</ul>
		</div>

		<div id="screen-nav">
			<button data-dir="prev"><</button>
			<button data-dir="next">></button>
		</div>

	</div>s

 
	</body>
	</html>