<?php

// Look up other security checks in the docs!
\OCP\User::checkLoggedIn();
\OCP\App::checkAppEnabled('ocDashboard');
\OCP\App::setActiveNavigationEntry( 'ocDashboard' );

OCP\Util::addscript('ocDashboard', 'ocDashboard');
OCP\Util::addscript('ocDashboard', 'ajaxService');
OCP\Util::addStyle('ocDashboard', 'ocDashboard');

$user = OCP\User::getUser();

$w = Array();
OC::$CLASSPATH['ocdWidgets'] = 'ocDashboard/appinfo/widgetConfigs.php';
OC::$CLASSPATH['ocdFactory'] = 'ocDashboard/lib/factory.php';

foreach (ocdWidgets::$widgets as $widget) {
	// if widget is enabled
	if (OCP\Config::getUserValue($user, "ocDashboard", "ocDashboard_".$widget['id']) == "yes") {
		$w[] = ocdFactory::getWidget($widget)->getData();
	}
}

//if all deactivated
if(empty($w)) {
	$l=new OC_L10N('ocDashboard');
	$w[0]['error'] = "You can configure this site in your personal settings.";
	$w[0]['id'] = "none";
	$w[0]['name'] = "";
	$w[0]['status'] = "3";
	$w[0]['interval'] = "0";
	$w[0]['icon'] = "";
}

$tpl = new OCP\Template("ocDashboard", "main", "user");
$tpl->assign('widgets', $w);
$tpl->printPage();