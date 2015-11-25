<?php

/*
 * shows weatherinformation from openweathermap.org
 * copyright 2014
 *
 * commercial
 *
 * @version 0.1
 * @date 16-06-2014
 * @author Florian Steffens (flost@live.no)
 */
class openweather extends ocdWidget implements interfaceWidget {
    private $city = "";
    private $weatherData = Array();
    private $fixUrlParameter = "&mode=xml&cnt=3";
    private $basicUrl = "http://api.openweathermap.org/data/2.5/forecast/daily?q=";

    // this attributes will be given to the template
    private $xmlNodeAttributes = Array(
        "time"          => Array("day"),
        "symbol"        => Array("number",  "name",     "var"                                           ),
        "windDirection" => Array("deg",     "code",     "name"                                          ),
        "windSpeed"     => Array("mps",     "name"                                                      ),
        "temperature"   => Array("day",     "min",      "max",      "night",        "eve",      "morn"  ),
        "pressure"      => Array("unit",    "value"                                                     ),
        "humidity"      => Array("value",   "unit"                                                      ),
        "clouds"        => Array("value",   "all",      "unit")
    );
    private $xmlNodeValueKeys = Array("name" => "");

    // sometimes the unit is not a attribut, we like to add this for a good structure for the template
    private $xmlAddUnit = Array("temperature", "windSpeed");


	// ======== INTERFACE METHODS ================================
	
	/*
	 * @return Array of all data for output
	 * this array will be routed to the subtemplate for this widget 
	 */
	public function getWidgetData() {
        if(!$this->getCity()) {
            $this->errorMsg = 'City not valid.';
            OCP\Util::writeLog('ocDashboard',"openweather - city not valid: ".$this->city, \OCP\Util::ERROR);
            return Array("weatherData" => Array());
        }

        $unit = OCP\Config::getUserValue($this->user, "ocDashboard", "ocDashboard_openweather_unit","f");
        $this->getWeatherData($unit);

        return Array("weatherData"=>$this->weatherData);
	}
	
	// ======== END INTERFACE METHODS =============================


    /*
     * get Weather Data from API
     * use xml instead of json because it contains more information
     *
     * @param $unit unit of values, change in usersettings
     * @return $array (assoc) weather information
     */
    private function getWeatherData ($unit) {
        if($this->city != "") {
            $additionalParameter = "";
            if($unit == "c") {
                $additionalParameter .= "&units=metric";
            }

            $url = $this->basicUrl.$this->city.$this->fixUrlParameter.$additionalParameter;
            //OCP\Util::writeLog('ocDashboard',"openweather xml url: ".$url, \OCP\Util::DEBUG);

            $reader = new XMLReader();
            $reader->open($url);

            $data = Array();

            while($reader->read()) {
                if ($reader->nodeType == XMLReader::ELEMENT) {
                    if( isset($this->xmlNodeAttributes[$reader->name])) {
                        $n = 0;
                        while( isset($data[$n][$reader->name])) {
                            $n++;
                        }

                        foreach( $this->xmlNodeAttributes[$reader->name] as $key) {
                            $data[$n][$reader->name][$key] = $reader->getAttribute($key);
                        }

                        if( in_array($reader->name,$this->xmlAddUnit)) {
                            $data[$n][$reader->name]['unit'] = $this->getUnit($reader->name, $unit);
                        }
                    } else {
                        if( isset($this->xmlNodeValueKeys[$reader->name])) {
                            $data[$reader->name] = $reader->readInnerXml();
                        }
                    }
                }
            }

            $reader->close();

            if(count($data) > 0) {
                $this->weatherData = $data;
            } else {
                OCP\Util::writeLog('ocDashboard',"openweather - could not fetch data for ".$this->city, \OCP\Util::ERROR);
                $this->errorMsg = $this->l->t("Could not fetch data for \"%s\".<br>Please try another value.<br><a href='%s'>&raquo;&nbsp;settings</a>", Array($this->city, \OCP\Util::linkToRoute('settings_personal')));
            }

        }
    }

    /*
     * @return city for weather data fetching
     */
    private function getCity() {
        $city = OCP\Config::getUserValue($this->user, "ocDashboard", "ocDashboard_openweather_city","Berlin");
        if(preg_match('/[a-zA-Z0-9 .-]+/', $city, $match)) {
            $city = $match[0];
        } else {
            $this->city = "";
        }
        return $this->city = $city;
    }


    /*
     * @return Unit for $arg
     * @param $arg wich unit is asked
     */
    private function getUnit($arg, $unit) {
        if($unit == "c") {
            switch ($arg) {
                case 'temperature':
                    return "&deg;C";
                    break;
                case 'windSpeed':
                    return "m/s";
                    break;
                default:
                    return "";
                    break;
            }
        } elseif($unit == "f") {
            switch ($arg) {
                case 'temperature':
                    return "&deg;F";
                    break;
                case 'windSpeed':
                    return "mps";
                    break;
                default:
                    return "";
                    break;
            }
        }
        return "";
    }

}
