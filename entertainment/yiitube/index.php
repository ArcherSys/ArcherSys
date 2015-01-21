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
    case "chemistry":
      echo '<iframe width="1000" height="315" src="//www.youtube.com/embed/Bfg9pq3Whmw?list=PLQJpFnTw8t0K3JElSenGJFImUJ6s-N2EL" frameborder="0" allowfullscreen></iframe>';
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