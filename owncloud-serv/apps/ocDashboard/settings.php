<?php

\OCP\User::checkLoggedIn();
\OCP\App::checkAppEnabled('ocDashboard');

\OCP\Util::addscript('ocDashboard', 'settings');
OCP\Util::addstyle('ocDashboard', 'ocDashboardSettings');

$user = OCP\User::getUser();

$tmpl = new OCP\Template('ocDashboard', 'settings');


$w = Array();
OC::$CLASSPATH['ocdWidgets'] = 'ocDashboard/appinfo/widgetConfigs.php';
OC::$CLASSPATH['ocdFactory'] = 'ocDashboard/lib/factory.php';

foreach (ocdWidgets::$widgets as $widget) {
	$confs = json_decode($widget['conf'], true);
	if(isset($confs) && !empty($confs)) {
		foreach ($confs as $k => $config) {
			if( $config['type'] != 'password') {
				$confs[$k]['value'] = OCP\Config::getUserValue($user, "ocDashboard", "ocDashboard_".$widget['id']."_".$config['id'],"");
			}
		}
	}				
	$enable = OCP\Config::getUserValue($user, "ocDashboard", "ocDashboard_".$widget['id']);
	$w[] = Array( "widget" => $widget, "enable" => $enable, "conf" => $confs);
}

//print_r($w);

$tmpl->assign('widgets', $w);

return $tmpl->fetchPage();
