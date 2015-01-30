<!DOCTYPE HTML>
<html>
<head>
<title>YiiTube</title>
<meta name="viewport" content="width=device-width initial-scale=1.0 user-scalable=no">
<meta name="mobile-web-app-capable" content="true">


<style>
 body{
   font-family: RobotoDraft, Segoe UI, Tahoma;
 }
 core-toolbar{
   background-color: crimson;
   color: #ffffff;
 }
 core-menu{
   background-color: crimson;
    color: #ffffff;
 }
</style>
<script src="/core/js/libs/jquery.min.js"></script>
<script src="/settings/components/webcomponentsjs/webcomponents.js"></script>
</head>
   
<body fullbleed layout vertical>
<link rel="import" href="/settings/components/polymer/polymer.html">
<link rel="import" href="/settings/components/core-icons/core-icons.html">
<link rel="import" href="/settings/components/font-roboto/roboto.html">
<link rel="import" href="/settings/components/core-menu/core-menu.html">
<link rel="import" href="/settings/components/core-item/core-item.html">

<link rel="import" href="/settings/components/core-header-panel/core-header-panel.html">
<link rel="import" href="/settings/components/core-toolbar/core-toolbar.html">
 <link rel="import" href="/settings/components/core-icon-button/core-icon-button.html">

 
<core-header-panel flex>
<core-toolbar><core-icon-button id="menu" icon="menu" on-tap="{{menuAction}}">Main</core-icon-button>
<div flex>YiiTube</div>
</core-toolbar>
<section>
<core-menu selected="0" on-core-select="{{selectAction}}">

  <core-item icon="settings" label="Channel"></core-item>s
  <core-item icon="search" label="Search"></core-item></core-menu>
  </core-menu>
  <?php
  switch($_GET["channel"]){
      case "appinventor":
          echo "<iframe width=\"1000\" height=\"315\" src=\"https://www.youtube.com/embed/HbntNGGXamw?list=PLsxoqvm6HPQV5XMPwN4N0tYIe7asB81PS\" frameborder=\"0\" allowfullscreen></iframe>"
    case "chemistry":
      echo '<iframe width="1000" height="315" src="//www.youtube.com/embed/Bfg9pq3Whmw?list=PLQJpFnTw8t0K3JElSenGJFImUJ6s-N2EL" frameborder="0" allowfullscreen></iframe>';
      break;
      case "emberjs":
        echo "<iframe width=\"1000\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?list=PL0nNJgE19Y-js_1XHA5QdEU1ed_ldOaks\" frameborder=\"0\" allowfullscreen></iframe>";
        break;
    case "portfolio":
      echo "<div class=\"g-page\" data-width=\"450\" data-href=\"//plus.google.com/u/0/114657577319697970021\" data-theme=\"dark\" data-rel=\"publisher\"></div>"."<div class=\"g-community\" data-width=\"450\" data-href=\"https://plus.google.com/b/114657577319697970021/communities/113885134081295677037\" data-showowners=\"true\"></div>";
      echo "<a href=\"https://plus.google.com/114657577319697970021/posts/Uc3fYmGhpyX\">Share your Thoughts on Our Logo</a>";


    echo "<script type=\"text/javascript\">". " (function() {".
   " var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;".
   " po.src = 'https://apis.google.com/js/platform.js';".
   " var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);".
  "})();" ;
echo "</script>";
break;
  
  }
  ?>
</section>
</core-header-panel>
<script>
$(function(){
  $("#menu").click(function(){
    $("core-menu").toggle();
  });
});
</script>
</body>
</html>