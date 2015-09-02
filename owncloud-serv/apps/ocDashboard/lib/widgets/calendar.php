<?php
/*
 * shows the next meetings from the cownCloud calender app
 * copyright 2013
 * 
 * @version 0.1
 * @date 01-08-2013
 * @author Florian Steffens (flost@live.no)
 */
class calendar extends ocdWidget implements interfaceWidget {
	
	private $events = Array();
	private $numEvents = 20; // max number of showen events
	private $timezoneAdd = 0;
	private $standardCalendarColor = "gray";

	// ======== INTERFACE METHODS ================================

	/*
	 * @return Array of all data for output
	 * this array will be routed to the subtemplate for this widget 
	 */
	public function getWidgetData() {
		$return = Array();
		$temp = Array();
		$this->timezoneAdd = OCP\Config::getUserValue($this->user, "ocDashboard", "ocDashboard_calendar_timezoneAdd",0);
		$this->prepareEvents();
						
		$now = false;
		$eNow[] = Array("type" => "headline", "value" => "Now");
		$today = false;
		$eToday[] = Array("type" => "headline", "value" => "Today");
		$tomorrow = false;
		$eTomorrow[] = Array("type" => "headline", "value" => "Tomorrow");
		$soon = false;
		$eSoon[] = Array("type" => "headline", "value" => "Soon");
		$time = time()+($this->timezoneAdd*60*60);
		$beginOfTomorrow = strtotime("midnight", $time+24*60*60);
		$endOfTomorrow   = strtotime("tomorrow", $beginOfTomorrow) - 1;
		
		// birthdays -----------------------------------
		
		// birthdays today
		// are there birthdays today
		$birthdays = $this->getBirthdays($time);
		foreach ($birthdays as $b) {
			$eToday[] = Array("type" => "event", "event" => $this->getEventData($b));
		}
		
		// birthdays tomorrow
		// are there birthdays tomorrow
		$birthday = $this->getBirthdays($time+(24*60*60));
		foreach ($birthday as $b) {
			$eTomorrow[] = Array("type" => "event", "event" => $this->getEventData($b));
		}
		
		// birthdays soon
		// are there birthdays soon
		$birthday = $this->getBirthdays($time+(24*60*60*2), true);
		foreach ($birthday as $b) {
			$eSoon[] = Array("type" => "event", "event" => $this->getEventData($b));
		}
		
		
		// all events ---------------------------------------
		foreach ($this->events as $e) {	
			$done = false;
			$e['color'] = (!isset($e['color']) || $e['color'] == "") ? $this->standardCalendarColor: $e['color'];
			
			// events now ----------------------------------------------------------
			if($e['start'] < $time && $e['end'] > $time) {
				$eNow[] = Array("type" => "event", "event" => $this->getEventData($e));
				$done = true;
			}
			
			// events today ---------------------------------------------------------
			if ((date("d.m.y", $e['start']) == date("d.m.y", $time ) || $e['start'] < $time && $e['end'] > $time)) {
				$eToday[] = Array("type" => "event", "event" => $this->getEventData($e));
				$done = true;
			}			
			
			// events tomorrow --------------------------------------------------------
			if ($e['origStart'] < $endOfTomorrow && $e['origEnd'] > $beginOfTomorrow) {
				$eTomorrow[] = Array("type" => "event", "event" => $this->getEventData($e));
				$done = true;
			}				
				
			// events soon ------------------------------------------------------------
			if (!$done) {
				$eSoon[] = Array("type" => "event", "event" => $this->getEventData($e));
			}				
		}
		
		$return = array_merge($eNow,$eToday,$eTomorrow,$eSoon);
		
		return Array("events" => $return);
	}

	// ======== END INTERFACE METHODS =============================
	
	
	/*
	 * @param event with data from db
	* @return html code for one event
	*/
	private function getEventData($e) {
		$event = Array();
		
		// birthday
		if ($e['calendar'] == "birthday") {
			$event['type'] = "birthday";
			$event['title'] = $e['title'];
				
			if(OC_L10N::findLanguage() == "de" || OC_L10N::findLanguage() == "de_DE") {
				$event['date'] = $this->getNiceDateTime($e['start'], "d.m.y", true, "");
			} else {
				$event['date'] = $this->getNiceDateTime($e['start'], "m-d-y", true, "");
			}
				
			return $event;
		}
		// --------------------------------------------------------
	
		// no birthday, normal events
		$event['title'] = $this->cleanSpecialCharacter($e['title']);
		$event['color'] = $e['color'];
		$event['calendar'] = $e['calendar'];
	
		$event['location'] = $this->cleanSpecialCharacter($this->getProperty('LOCATION', $e['data']));
	
		// all day event => one day (no time output, one date)
		// start and end time = 00:00:00
		// startday = endday-1
		if(date("d.m.y H:i:s", $e['origStart']) == date("d.m.y H:i:s", $e['origEnd']-60*60*24) && date("H:i:s", $e['origStart']) == "00:00:00" && date("H:i:s", $e['origEnd']) == "00:00:00") {
				
			if(OC_L10N::findLanguage() == "de" || OC_L10N::findLanguage() == "de_DE") {
				$event['date'] = $this->getNiceDateTime($e['start'], "d.m.y", true, "");
			} else {
				$event['date'] = $this->getNiceDateTime($e['start'], "m-d-y", true, "");
			}
				
			// all day event => takes more than one day (no time output)
			// start and end time = 00:00:00
			// end - start > one day
		} elseif(date("H:i:s", $e['origStart']) == "00:00:00" && date("H:i:s", $e['origEnd']-60*60*24) == "00:00:00" && $e['origEnd']-$e['origStart'] > 60*60*24 ) {
			// $e['end']-60*60*24 is for correct end day (end day before not at time 00:00:00)
			if(OC_L10N::findLanguage() == "de" || OC_L10N::findLanguage() == "de_DE") {
				$event['date'] = $this->getNiceDateTime($e['start'], "d.m.y", true, "")." - ".$this->getNiceDateTime($e['end']-60*60*24, "d.m.y", true, "");
			} else {
				$event['date'] = $this->getNiceDateTime($e['start'], "m-d-y", true, "")." - ".$this->getNiceDateTime($e['end']-60*60*24, "m-d-y", true, "");
			}
	
		// normal event => in one day (one date output)
		} elseif(date("d.m.y", $e['start']) == date("d.m.y", $e['end'])) {
	
			if(OC_L10N::findLanguage() == "de" || OC_L10N::findLanguage() == "de_DE") {
				$event['date'] = $this->getNiceDateTime($e['start'], "d.m.y", true, "H:i")."Uhr - ".$this->getNiceDateTime($e['end'], "", false, "H:i").'Uhr';
			} else {
				$event['date'] = $this->getNiceDateTime($e['start'], "m-d-y", true, "H:i")." - ".$this->getNiceDateTime($e['end'], "", false, "H:i");
			}
				
		// normal event => takes more than one day & all other (full output)
		} else {
	
			if(OC_L10N::findLanguage() == "de" || OC_L10N::findLanguage() == "de_DE") {
				$event['date'] = $this->getNiceDateTime($e['start'], "d.m.y", true, "H:i")."Uhr - ".$this->getNiceDateTime($e['end'], "d.m.y", true, "H:i").'Uhr';
			} else {
				$event['date'] = $this->getNiceDateTime($e['start'], "m-d-y", true, "H:i")." - ".$this->getNiceDateTime($e['end'], "m-d-y", true, "H:i");
			}
		}
	
		return $event;
	}
	

	/*
	 * @param $timestamp, looking for birthdays for this day
	 * @return Array of all birthdays for day of timestamp
	 */
	private function getBirthdays($timestamp,$lookForward=false) {
		$births = Array();

		// look for birthdays in the next 14 days
		if($lookForward) { 
			for($i = 0; $i < 14; $i++) {
				$newTimestamp = $timestamp+(24*60*60*$i);
				$day = date("m-d",$newTimestamp);
				$sql = "SELECT
						value
					FROM
						`*PREFIX*contacts_cards_properties`
					WHERE
						contactid IN
							(SELECT
								contactid
							FROM
								`*PREFIX*contacts_cards_properties`
							WHERE
								value LIKE ? AND
								name = ? AND
								userid = ?
							)
					AND
						name = 'FN'
					;";
			$params = Array("%".$day,"BDAY",$this->user);
			$query = \OCP\DB::prepare($sql);
				$result = $query->execute($params);
				if (\OCP\DB::isError($result)) {
					$this->errorMsg = "SQL Error";
					\OCP\Util::writeLog('ocDashboard', \OC_DB::getErrorMessage($result), \OC_Log::ERROR);
				}
					
				while($row = $result->fetchRow()) {
					$births[] = Array(
							"diff" => "1",
							"calendar" => "birthday",
							"title" => $row['value'],
							"color"	=> "",
							"start" => $newTimestamp,
							"end"	=> $newTimestamp+24*60*60,
							"data"	=> ""
					);
				}
			}			
		} else {
			// look for birthdays at the timestamp		
			$day = date("m-d",$timestamp);
			$sql = "SELECT
					value
				FROM
					`*PREFIX*contacts_cards_properties`
				WHERE
					contactid IN
						(SELECT
							contactid
						FROM
							`*PREFIX*contacts_cards_properties`
						WHERE
							value LIKE ? AND
							name = ? AND
							userid = ?
						)
				AND
					name = 'FN'
				;";
			$params = Array("%".$day,"BDAY",$this->user);
			$query = \OCP\DB::prepare($sql);
			$result = $query->execute($params);
			if (\OCP\DB::isError($result)) {
				$this->errorMsg = "SQL Error";
				\OCP\Util::writeLog('ocDashboard', \OC_DB::getErrorMessage($result), \OC_Log::ERROR);
			}
			
			while($row = $result->fetchRow()) {
				$births[] = Array(
						"diff" => "1",
						"calendar" => "birthday",
						"title" => $row['value'],
						"color"	=> "",
						"start" => $timestamp,
						"end"	=> $timestamp+24*60*60,
						"data"	=> ""
				);
			}
		}
	
		//print_r(Array($births,$sql));
		
		return $births;
	}
	
	
	/*
	 * collect all events until limit
	*/
	private function prepareEvents() {
		$sql = "SELECT 
					DATEDIFF(obj.startdate, obj.enddate) as diff, 
					cal.displayname as calendar, 
					obj.summary as title, 
					cal.calendarcolor as color, 
					IF(obj.repeating=0,obj.startdate,rep.startdate) as eventStart, 
					IF(repeating=0,obj.enddate,rep.enddate) as eventEnd,
					obj.calendardata as data
				FROM 
					`*PREFIX*clndr_objects` obj 
						LEFT JOIN 
					`*PREFIX*clndr_repeat` rep ON obj.id = rep.eventid
						JOIN
					`*PREFIX*clndr_calendars` cal on cal.id = obj.calendarid
				WHERE obj.objecttype = 'VEVENT' AND
					userid = ?  AND 
					(
						DATE(obj.enddate) >= CURRENT_DATE
					OR 
						DATE(rep.enddate) >= CURRENT_DATE
					)
				ORDER BY
					eventStart
				LIMIT ".$this->numEvents;
		$params = Array($this->user);
		$query = \OCP\DB::prepare($sql);
		$result = $query->execute($params);
		if (\OCP\DB::isError($result)) {
			$this->errorMsg = "SQL Error";
			\OCP\Util::writeLog('ocDashboard', \OC_DB::getErrorMessage($result), \OC_Log::ERROR);
		}
	
		while($row = $result->fetchRow()) {
			// with timezone
			$row['start'] = strtotime($row['eventStart'])+$this->timezoneAdd*60*60;
			$row['end'] = strtotime($row['eventEnd'])+$this->timezoneAdd*60*60;
			//withour timezone
			$row['origStart'] = strtotime($row['eventStart']);
			$row['origEnd'] = strtotime($row['eventEnd']);
			$this->events[] = $row;
		}
	}
	
	
	/*
	 * return yesterday, today, tomorrow or date by formatting
	 * 
	 * @param $timestamp time to convert
	 * @param $format format for date option formatting
	 * @param $dayName boolean; praefix name of day, default false, add only if normal date
	 * @param $timeFormat for adding time, by default none
	 * @return nice date
	 */
	private function getNiceDateTime($timestamp, $dateFormat="", $dayName=false, $timeFormat="") {
		$return = "";
		$showTime = true;
		
		// add day name
		$day = "";
		if($dayName) {
			$day = $this->l->t(date("D", $timestamp))." ";
		}		
		
		// add date (or words)
		if ($dateFormat != "") {
			if( date($dateFormat,$timestamp) == date($dateFormat,time()-(24*60*60))) {
				$return .= $this->l->t("Yesterday")." ";
				$day = "";
			} elseif( date($dateFormat,$timestamp) == date($dateFormat,time())) {
				$return .= $this->l->t("Today")." ";
				$return .= "";
				$day = "";
			} elseif( date($dateFormat,$timestamp) == date($dateFormat,time()+(24*60*60))) {
				$return .= $this->l->t("Tomorrow")." ";
				$day = "";
			} else {
				$return .= date($dateFormat, $timestamp)." ";
			}
		}
		
		// add time
		if ($timeFormat != "" && $showTime) {
			$return .= date($timeFormat,$timestamp)." ";
		}
		
		return $day.$return;
	}
	
	
	/*
	 * @param propertyname
	 * @param search string (seperated by "\n", property:value)
	 * @return property value
	 */
	private function getProperty($property, $searchstring) {
		foreach (explode("\n", $searchstring) as $line) {
			$parts = explode(":", $line);
			if($parts[0] == $property) {
				return $parts[1];
			}
		}
		return "";
	}
	
}