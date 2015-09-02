<?php

class ocdFactory {
	
	/*
	 * get a instance of a widget
	 * @param $arg index 0 = name; 1 = refresh interval (in ms)
	 * @return complete html for widget
	 */
	static function getWidget($widgetConf) {
		$id = $widgetConf['id'];
		OC::$CLASSPATH['ocdWidget'] = 'ocDashboard/lib/widget.php'; //load superclass
		OC::$CLASSPATH['interfaceWidget'] = 'ocDashboard/lib/interfaceWidget.php'; //load interface for widget
		OC::$CLASSPATH[$id] = 'ocDashboard/lib/widgets/'.$id.'.php'; // load widget class
		return new $id($widgetConf);
	}
		
}