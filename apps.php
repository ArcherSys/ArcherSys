<?php 
  require_once "config.php"
?>
<!DOCTYPE HTML>
<html>
<head>
<title>My Apps</title>
<link rel="stylesheet" type="text/css" href="css/apps.css">
<meta name="viewport" content="width=device-width initial-scale=1.0 user-scalable=no">
<script src="js/libs/jquery.min.js"></script>
<script src="js/plugins/createbutton/jquery.createbutton.js"></script>
<script>
 $(function(){
  $(".navbar ul li").click(function(){
    window.location.assign($(this).gotoLink());
});

});
</script>
</head>
<body>
<div class="apps">
<div class="apps-header">
<h1>Apps</h1>
</div>
<div class="navbar">
<ul>
<li goto="/admin/">
  Goto the Admin Center
</li>
</ul>
</div>
</div>
</body>
</html>