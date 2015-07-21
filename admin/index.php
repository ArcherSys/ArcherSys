<!DOCTYPE HTML>
<html>
<head>
<title>Admin Portal</title>
<script src="/settings/components/webcomponentsjs/webcomponents.js"></script>
<link rel="import" href="/settings/components/polymer/polymer.html">
<link rel="import" href="/settings/components/core-header-panel/core-header-panel.html">

<link rel="import" href="/settings/components/core-icon-button/core-icon-button.html">

<link rel="import" href="/settings/components/core-menu/core-menu.html">
<link rel="import" href="/settings/components/core-item/core-item.html">
<script src="/core/js/jquery.js"></script>

<link rel="import" href="/settings/components/font-roboto/roboto.html">
<link rel="import" href="/settings/components/core-toolbar/core-toolbar.html">
</head>
<body fullbleed layout horizontal>
<style>
 core-toolbar{
  font-family:  RobotoDraft, Segoe UI;
   background-color: crimson;
   color: whitesmoke;

}
core-menu{
  font-family:  RobotoDraft, Segoe UI;
color: whitesmoke;
background-color: blue;
}

</style>
<core-header-panel flex>
 <core-toolbar>
<core-icon-button icon="menu"></core-icon-button>
<div flex>Admin Panel</div>
</core-toolbar>
<section>
<core-menu>
 <core-item icon="search" id="piwikstarter">Analytics</core-item>
 
 <core-item icon="settings" id="phpMyAdmin">phpMyAdmin</core-item>
</core-menu>
</section>
<script>
$(function(){
  $("#piwikstarter").click(function(){
    window.location.assign("http://localhost/admin/piwik/");
 }); 
 $("#phpMyAdmin").click(function(){
    window.location.assign("http://localhost/admin/phpMyAdmin/");
 });   

});

</script>

</core-header-panel>
</body>
</html>
