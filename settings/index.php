<?php 
 require_once $_SERVER["DOCUMENT_ROOT"]."/vendor/autoload.php";

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Settings</title>
<meta name="viewport" content="width=device-width initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="_styles/styles.css">
<script src="js/jquery.min.js"></script>
<script src="js/localforage.js"></script>
<script src="js/ximal.js"></script>
<script src="js/notidar.js"></script>

<script src="js/dropzone.js"></script>

<script src="js/events.js"></script>

</head>
<body>
<div class="asos-config">
<div class="asos-config-header">
<h1 class="asos-config-header-heading">ArcherSys SettingsBox</h1>

</div>
<div class="asos-body">
<form class="asos-config-ui dropzone" action="/profile.php" id="settings">
<h2 class="asos-config-ui-header">Configure ArcherSys OS</h2>
<input type="text" class="asos-config-ui-field asos-config-is-vital" placeholder="OS ID">
<div class="fallback">
<input type="file" name="file" >
</div>
</form>
</div>
</div>
</body>
</html>