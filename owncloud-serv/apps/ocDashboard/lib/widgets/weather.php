<?php

/*
 * shows weatherinformation from yahoo weather
 * copyright 2013
 *
 * non-commercial only
 * moreinfos:
 * 	weather.yahoo.com
 *
 * @version 0.1
 * @date 01-08-2013
 * @author Florian Steffens (flost@live.no)
 */
class weather extends ocdWidget implements interfaceWidget {
	private $cityUrl = "http://weather.yahooapis.com/forecastrss?w=###code###&u=###unit###";
	private $luftdruckZeichen = Array("&rarr;","&uarr;","&darr;");
	private $xml;
	private $imageUrl = "http://l.yimg.com/a/i/us/we/52/?.gif";
	
	// ======== INTERFACE METHODS ================================
	
	/*
	 * @return Array of all data for output
	 * this array will be routed to the subtemplate for this widget 
	 */
	public function getWidgetData() {
		if($this->getXml()) {
			$return = Array(
					"today" => Array(
							"low" => $this->getToday("low"),
							"high" => $this->getToday("high"),
							"imageUrl" => $this->getImageUrl($this->getToday('code')),
							"actual" => $this->getToday('actual'),
							"speed" => $this->getWind('speed'),
							"humidity" => $this->getHumidity('humidity'),
							"pressureSymbol" => $this->luftdruckZeichen[$this->getHumidity('rising')],
							"pressure" => $this->getHumidity('pressure')
							),
					"tomorrow" => Array(
							"low" => $this->getTomorrow("low"),
							"high" => $this->getTomorrow("high"),
							"imageUrl" => $this->getImageUrl($this->getTomorrow('code'))
							),
					"unit" => Array(
							"temperature" => $this->getUnit("temperature"),
							"pressure" => $this->getUnit("pressure"),
							"speed" => $this->getUnit("speed")
							),
					"city" => $this->getCity()
					);
			return $return;
		} else {
			$this->status = 3;
			return null;
		}
	}
	
	// ======== END INTERFACE METHODS =============================
	
	
	/*
	 * loads the xml file from yahoo with the weather informations
	 */
	private function getXml() {
	
		$code = "";
		$code = OCP\Config::getUserValue($this->user, "ocDashboard", "ocDashboard_weather_city");
		if (!isset($code) || $code == "" || !is_numeric($code)) {
			$this->errorMsg = "The city code is not valid.";
			return false;
		} else {
			$unit = OCP\Config::getUserValue($this->user, "ocDashboard", "ocDashboard_weather_unit",$this->getDefaultValue('unit'));
			
			$url = $this->cityUrl;
			$url = str_replace("###unit###", $unit, $url);
			$url = str_replace("###code###", $code, $url);
			$con = @file_get_contents($url);
	
			if($con != "" && strlen($con) > 500) {
				$this->xml = new SimpleXMLElement($con);
				return true;
			} else {
				OCP\Util::writeLog('ocDashboard',"Weather coul not load: ".$url, \OCP\Util::WARN);
				$this->errorMsg = "The city code is not valid.";
				return false;
			}
		}
	}	
	
	
	/*
	 * @return the information for today
	 * @param $arg wich information is asked (low, high, actual)
	 */
	private function getToday($arg) {
		if(!$this->xml)
			$this->getXml();
		
		$forecast = $this->xml->channel->item->children('yweather', true)->forecast;
		$today = $forecast[0];
		$actual = $this->xml->channel->item->children('yweather', true)->condition;
		
		switch ($arg) {
			case 'low':
				return round($today->attributes()->low);
				break;
			case 'high':
				return round($today->attributes()->high);
				break;
			case 'actual':
				return round($actual->attributes()->temp);
				break;
			case 'code':
				return round($today->attributes()->code);
				break;
			default:
				return -1;
				break;
		}
	}
	
	
	/*
	 * @return the information for tomorrow
	 * @param $arg wich information is asked (low, high)
	 */
	private function getTomorrow($arg) {
		if(!$this->xml)
			$this->getXml();
	
		$forecast = $this->xml->channel->item->children('yweather', true)->forecast;
		$tomorrow = $forecast[1];
	
		switch ($arg) {
			case 'low':
				return round($tomorrow->attributes()->low);
				break;
			case 'high':
				return round($tomorrow->attributes()->high);
				break;
			case 'code':
				return round($tomorrow->attributes()->code);
				break;
			default:
				return -1;
				break;
		}
	}
	
	
	/*
	 * @return Unit for $arg
	 * @param $arg wich unit is asked
	 */
	private function getUnit($arg) {
		if(!$this->xml)
			$this->getXml();
		
		$units = $this->xml->channel->children('yweather', true)->units;
		
		switch ($arg) {
			case 'temperature':
				return "&deg;&nbsp;" . $units->attributes()->temperature;
				break;
			case 'speed':
				return $units->attributes()->speed;
				break;
			case 'pressure':
				return $units->attributes()->pressure;
				break;
			default:
				return -1;
				break;
		}
	}
	
	
	/*
	 * @return City of weatherinformation 
	 */
	private function getCity() {
		if(!$this->xml)
			$this->getXml();
		
		$location = $this->xml->channel->children('yweather', true)->location;
		return $location->attributes()->city;
	}

	
	/*
	 * @return wind information
	 * @param $arg wich information is asked (speed)
	 */
	private function getWind($arg) {
		if(!$this->xml)
			$this->getXml();
		
		$wind = $this->xml->channel->children('yweather', true)->wind;
		
		switch ($arg) {
			case 'speed':
				return round($wind->attributes()->speed);
				break;
			default:
				return -1;
				break;
		}
	}
	
	
	/*
	 * @return humidity information
	 * @param $arg wich information is asked (humidity, rising)
	 */
	private function getHumidity($arg) {
		if(!$this->xml)
			$this->getXml();
		
		$atmosphere = $this->xml->channel->children('yweather', true)->atmosphere;
		
		switch ($arg) {
			case 'humidity':
				return round($atmosphere->attributes()->humidity,2);
				break;
			case 'rising':
				return (int)$atmosphere->attributes()->rising; 
				break;
			case 'pressure':
				return round($atmosphere->attributes()->pressure,2);
				break;
			default:
				return -1;
				break;
		}
	}
	
	
	/*
	 * @param $code weather code from yahoo
	 * @return url to weather icon
	 */
	private function getImageUrl($code) {
		return str_replace("?", $code, $this->imageUrl);
	}
		
}
