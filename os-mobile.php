<?php
  require "config.php";
  use ArcherSys\ArcherSearchToolBox;
 require_once "includes\ArcherSearchToolbox.php";
 
?>
<!DOCTYPE HTML>
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>
<title>ArcherSys OS Mobile Desktop</title>
<meta name="viewport" content="width=device-width initial-scale=1">
    
  <link rel="stylesheet" href="core/mobile-theme/themes/ArcherSys_OS.css" />
  <link rel="stylesheet" href="core/mobile-theme/themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="core/mobile-theme/themes/jquery.mobile.structure-1.4.5.min.css" />
  <script src="core/js/libs/jquery.min.js"></script>
  <script src="core/mobile-theme/jquery.mobile-1.4.5.min.js"></script>
>
<script src='//cdn.goroost.com/roostjs/5c55db4345ae4ee88f1bcfbcceb82145' async></script>
<script src="https://archersys.github.io/togetherjs-min.js"></script>
<script>
var ArcherSysUpdates = [];


</script>
<script>
$(function(){
window.Notification.requestPermission( function(status) {
  console.log(status); // notifications will only be displayed if "granted"
 window.onstorage = function(){
     ArcherSysUpdates.push(new Notification("Save", {body: "Data Saved!"}));
};
 }
});
   // this also shows the notification
});
 $( window ).on( "orientationchange", function( event ) {
 $("#orientation").text("This device is in " + (event.orientation === "portrait" ) ? Phone : Phablet + " mode!" );
 
});
var SaveTheme = function(){
var theme = $("#theme").val();
   $("#os-home").attr("data-theme",theme);
};

})
</script>
  </head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <div data-role="page" id="os-home" data-theme="a">
    <div data-role="header"><h1>ArcherSys OS</h1><ul data-role = "navbar"><li><a href="#owncloud">Owncloud</a></li></ul></div>
 <div data-role="main" class="ui-content">
<p id="orientation">orientationchange Not Supported on this Device.</p>
     <form class="ui-filterable">
      <input id="homeSearch" data-type="search" placeholder="Search Everything">
 </form>
   <ul data-role="listview" data-filter="true" data-input="#homeSearch">
     <li data-role="listdivider">Apps</li>
    <?php
       $asb = new ArcherSearchToolBox;
    
   $asb->renderApps($config["dbhost"],$config["dbuser"],$config["dbpass"],$config["dbname"]);
       
   
      ?>
    <li data-role="listdivider">Services</li>
    <li><a href="#facebook">My Facebook Shelf</a></li>
   <li><a href="#archersys-github">ArcherSys On Github.io</a></li>
   <li><a href="https://www.edmodo.com">Edmodo</a></li>
   <li><a href="#settings1">Settings</a></li>
   <li data-role="listdivider">For Developers</li>
    <li><a href="//developers.google.com">Google Developers</a></li>
    <li><a href="//developers.facebook.com">Facebook Developers</a></li>
    <li><a href="//dev.twitter.com">Twitter Developers</a></li>
    <li><a href="//msdn.microsoft.net">Microsoft Developer Network</a></li>
    <li><a href="//emberjs.com">EmberJS</a></li>
    <li><a href="//developer.mozilla.com">Mozilla Developer Network</a></li>
  </ul>
<button id="start-togetherjs" type="button"
 onclick="TogetherJS(this); return false"
 data-end-togetherjs-html="End TogetherJS">
  Start TogetherJS
</button>
</div>

 </div>
<div data-role"page" id="settings1">
   <div data-role="header"><h1>Settings</h1></div>
<div data-role="main" class="ui-content">
   <form>
    <select id="theme">
     <option value="a">Avocado</option>
     <option value="b">Espresso</option>
     <option value="c">Columbian</option>
   </select>
   <button id="save" onclick="SaveTheme();">Save</button>
</form>
</div>
</div>
<div data-role"page" id="facebook">
<div data-role="header"><h1>My Facebook Shelf</h1></div>
<div data-role="main" class="ui-content">
<fb:comments href="https://archersys.github.io/" numposts="20" colorscheme="light" mobile="true"></fb:comments>
</div>

</div>
<div data-role="page" id="archersys-github"></div>
<div data-role="page" id="owncloud">
<div data-role="header"><h1>ArcherSysCloud</h1></div>
<iframe src="http://localhost:80/owncloud-serv" width="1100" height="800"></iframe>
</div>
<div data-role="page" id="hatchcraft">
<div data-role="header"><h1>HatchCraft</h1></div>
<iframe src="http://www.codeavengers.com/c/acosf2014pdflint/hatchcraft""
   frameborder="0" width=2000 height=900
  allowfullscreen></iframe>
</div>
</body>
</html>