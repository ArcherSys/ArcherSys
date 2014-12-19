<?php
	include "langsettings.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta name="author" content="Kai Oswald Seidler, Kay Vogelgesang, Carsten Wiedmann">
		<link href="xampp.css" rel="stylesheet" type="text/css">
		<title></title>
	</head>

	<body>
	<h1>Try out the new XAMPP welcome page</h1>
	<p>We are working on a new Welcome page for XAMPP and we need your help! You can you can see the current version at <a href="/dashboard" target="_top">Dashboard</a>.
	  We are improving our current "FAQs" and adding new "How to" guides. We posted some suggestions for new guides at <a href="https://community.apachefriends.org/f/viewtopic.php?f=1&t=69810" target="_blank">ApacheFriends forum</a>.
	  If you have any comments or suggestions for the new welcome page, please don't hesitate to post in the forum. Your feedback will help us improve XAMPP!. If you have any comments or suggestions for the new welcome page, please don't hesitate to post in the forum. Your feedback will help us improve XAMPP!
	</p>
		&nbsp;<br>
	<h1><?php print $TEXT['start-head']; ?>!</h1>
	<b><?php print $TEXT['start-subhead']; ?></b><p><p>

	<?php print $TEXT['start-text1']; ?><p>
	<?php print $TEXT['start-text2']; ?><p>
	<?php print $TEXT['start-text3']; ?><p>
	<?php print $TEXT['start-text4']; ?><p>
	<?php print $TEXT['start-text6']; ?><p>
	
	<h1>Install applications on XAMPP using Bitnami</h1>
	<p>Apache Friends and Bitnami are cooperating to make dozens of open source applications available on XAMPP, for free. Bitnami-packaged applications include Wordpress, Drupal, Joomla! and dozens of others and can be deployed with one-click installers. Visit the <a href="http://bitnami.com/stack/xampp?utm_source=bitnami&utm_medium=installer&utm_campaign=XAMPP%2BModule" target="_blank">Bitnami XAMPP page</a> for details on the currently available apps.</p>
      	<p><a href="http://bitnami.com/stack/xampp?utm_source=bitnami&utm_medium=installer&utm_campaign=XAMPP%2BModule" target="_blank"><img src="img/bitnami-xampp.png" alt="Bitnami XAMPP page" border="0"></a></p>

	<h1>XAMPP Hosting</h1>
	<p>XAMPP provides an ideal local development environment, but is not meant for production deployments. We want to make hosting PHP applications created with XAMPP as easy as possible. Visit our <a href="https://www.apachefriends.org/hosting.html" target="_blank">Hosting page</a> for reading our documentation.</p>

	</body>
</html>
