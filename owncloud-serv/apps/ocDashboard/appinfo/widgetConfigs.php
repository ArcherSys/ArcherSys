<?php

class ocdWidgets {
	
		/* all availible widgets
		* 
		* Array( 
		* 	widget id (small letters) 
		* 	auto refresh every x seconds (0=no refresh)
		* 	icon id (in img folder; always start with 'icon')
		* 	conf options as json
		* 		generell:
		* 			id (unique)
		* 			name (description)
		* 			default (for radiooptions use numeric index)
		* 			type (look at fields) 
		* 		fields: 
		* 			string recommendet: id, name, default
		* 			radio  recommendet: options (as array)
		* 				option recommendet: id, name
		* 			password
		* 			label (normal text)
		*		optional:
		*			tooltip (shown by mouseover)
		* 	cond condition Apps (comma seperated)
		* 	scripts comma separated (in folder js, without ".js")
		* 	styles comma seperated (in folder css, without ".css")
		* 	link (url for click on headline)
		* )
		* 
		*/
		static $widgets = Array(
							Array(
                                'id' 		=>	"clock",
                                'name'		=>	"Clock",
                                'refresh'	=>	0,
                                'icon'		=>	"",
                                'conf'		=>	"",
                                'cond' 		=>	"",
                                'scripts'	=>	"coolclock,ocClockSkin,excanvas",
                                'styles'	=>	"",
                                'link'		=>	""
								),
							Array(
                                'id' 		=>	"calendar",
                                'name'		=>	"Calender",
                                'refresh'	=>	60,
                                'icon'		=>	"icons/2.png",
                                'conf'		=>	'[{"name":"correct time (add x hours)","type":"string","id":"timezoneAdd","default":"0"}]',
                                'cond' 		=>	"calendar",
                                'scripts'	=>	"",
                                'styles'	=>	"",
                                'link'		=>	"index.php/apps/calendar/"
							),
							Array(
                                'id' 		=>	"weather",
                                'name'		=>	"Weather",
                                'refresh'	=>	3600,
                                'icon'		=>	"icons/165.png",
                                'conf'		=>	'[{"name":"City Code","type":"string","id":"city","default":"xxxxxx","tooltip":"You can get the code for your city here: <a href=\"http://weather.yahoo.com\" target=\"_blank\">http://weather.yahoo.com/</a><br />Look for your city and open the weather information for it.<br />Look at the URL. It should end like /city-xxxxxx/.<br />Type in here the City Code \"xxxxxx\"."},{"id":"unit","type":"radio","options":[{"id":"f","name":"°F / mph"},{"id":"c","name":"°C / kmh"}],"name":"Unit","default":"f"},{"name":"This widget uses the data from yahoo. It is not commercial free.","type":"label"}]',
                                'cond' 		=>	"",
                                'scripts'	=>	"",
                                'styles'	=>	"",
                                'link'		=>	""
								),
							Array(
                                'id' 		=>	"tasks",
                                'name'		=>	"Tasks",
                                'refresh'	=>	60,
                                'icon'		=>	"icons/49.png",
                                'conf'		=>	'[{"id":"sort","type":"radio","options":[{"id":"DESC","name":"new tasks first"},{"id":"ASC","name":"old tasks first"}],"name":"display order","default":"DESC"}]',
                                'cond' 		=>	"tasks_enhanced",
                                'scripts'	=>	"tasks",
                                'styles'	=>	"tasks",
                                'link'		=>	"index.php/apps/tasks_enhanced/"
								),
							Array(
                                'id' 		=>	"mailcheck",
                                'name'		=>	"Mail Check",
                                'refresh'	=>	120,
                                'icon'		=>	"icons/35.png",
                                'conf'		=>	'[{"name":"Server","type":"string","id":"server","default":"imap.server.tld"},{"name":"User","type":"string","id":"user","default":"Username"},{"name":"Password","type":"password","id":"password","default":""},{"name":"Port","type":"string","id":"port","default":"143"},{"name":"Folder","type":"string","id":"folder","default":""},{"id":"ssl","type":"radio","options":[{"id":"yes","name":"Yes"},{"id":"no","name":"No"}],"name":"Use SSL","default":"no"},{"id":"protocol","type":"radio","options":[{"id":"imap","name":"IMAP"},{"id":"pop3","name":"POP3"}],"name":"Protocol","default":"imap"}]',
                                'cond' 		=>	"",
                                'scripts'	=>	"",
                                'styles'	=>	"",
                                'link'		=>	"index.php/apps/roundcube"
							),
                            Array(
                                'id' 		=>	"newsreader",
                                'name'		=>	"Newsreader",
                                'refresh'	=>	120,
                                'icon'		=>	"icons/98.png",
                                'conf'		=>	'[{"name":"correct time (add x hours)","type":"string","id":"timezoneAdd","default":"0"},{"name":"Max age of news to show (hours)","type":"string","id":"maxAge","default":"2"}]',
                                'cond' 		=>	"news",
                                'scripts'	=>	"newsreader",
                                'styles'	=>	"",
                                'link'		=>	"index.php/apps/news/"
                            ),
							Array(
                                'id' 		=>	"activity",
                                'name'		=>	"Activity",
                                'refresh'	=>	120,
                                'icon'		=>	"icons/87.png",
                                'conf'		=>	'[{"name":"Max age of activitys to show (hours)","type":"string","id":"maxAge","default":"1"},{"name":"Max 100 items will be showed.","type":"label"}]',
                                'cond' 		=>	"activity",
                                'scripts'	=>	"",
                                'styles'	=>	"activity",
                                'link'		=>	"index.php/apps/activity/"
                            ),
                            Array(
                                'id' 		=>	"bookmarks",
                                'name'		=>	"Bookmarks",
                                'refresh'	=>	360,
                                'icon'		=>	"icons/83.png",
                                'conf'		=>	'[{"name":"Tags (comma seperated)","type":"string","id":"tags","default":"dashboard"}]',
                                'cond' 		=>	"bookmarks",
                                'scripts'	=>	"",
                                'styles'	=>	"bookmarks",
                                'link'		=>	"index.php/apps/bookmarks"
                            ),
                            Array(
                                'id' 		=>	"openweather",
                                'name'		=>	"Weather",
                                'refresh'	=>	360,
                                'icon'		=>	"icons/165.png",
                                'conf'		=>	'[{"name":"City","type":"string","id":"city","default":"Berlin"},{"id":"unit","type":"radio","options":[{"id":"f","name":"°F / mph"},{"id":"c","name":"°C / kmh"}],"name":"Unit","default":"f"},{"name":"This widget uses the data from open openweathermap.","type":"label"}]',
                                'cond' 		=>	"",
                                'scripts'	=>	"",
                                'styles'	=>	"openweather",
                                'link'		=>	"http://openweathermap.org"
                            ),
                            Array(
                                'id' 		=>	"search",
                                'name'		=>	"Search",
                                'refresh'	=>	0,
                                'icon'		=>	"icons/12.png",
                                'conf'		=>	'[{"name":"Default Search Engine","type":"select","id":"defaultSearchEngine","default":"0","options":[{"id":"0","name":"Google"},{"id":"1","name":"Yahoo"},{"id":"2","name":"Bing"},{"id":"3","name":"DuckDuckGo"},{"id":"4","name":"Ask"},{"id":"5","name":"eBay"},{"id":"6","name":"Amazon"}]},{"name":"Search Engine Language","type":"select","id":"defaultSearchEngineLanguage","default":"0","options":[{"id":"0","name":"English"},{"id":"1","name":"German"}]}]',
                                'cond' 		=>	"",
                                'scripts'	=>	"search",
                                'styles'	=>	"search",
                                'link'		=>	""
                            )
					  );
		
		/*
		 * @param $id id of widget
		 * @return widgetArray
		 */
		public static function getWidgetConfigById ($id) {
			foreach (ocdWidgets::$widgets as $w) {
				if($w['id'] == $id) {
					return $w;
				}
			}
			return null;
		}

}