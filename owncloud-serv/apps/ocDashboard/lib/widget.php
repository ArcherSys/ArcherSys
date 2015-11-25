<?php

/*
 * super class for all widgets
 * generel methods
 * 
 * @author Florian Steffens
 * 
 */
class ocdWidget {
	
	protected $id = "";
	protected $name = "";
	protected $l;
	protected $user;
	protected $conf;
	protected $status;
	protected $errorMsg;
	protected $interval;
	protected $icon;
	protected $link;
	protected $cond;
	protected $scripts;
	protected $styles;
	
	function __construct($widgetConf) {
		$this->id = $widgetConf['id'];
		$this->name = $widgetConf['name'];
		$this->l = OC_L10N::get('ocDashboard');
		$this->user = OCP\User::getUser();
		$this->conf = json_decode($widgetConf['conf'], true);
		$this->status = 0;
		$this->errorMsg = "";
		$this->htmlHash = "";
		$this->html = "";
		$this->interval = $widgetConf['refresh']*1000; // in seconds
		$this->icon = $widgetConf['icon'];
		$this->link = $widgetConf['link'];
		$this->cond = $widgetConf['cond'];
		$this->scripts = $widgetConf['scripts'];
		$this->styles = $widgetConf['styles'];

        //print_r(Array(OC_App::getAppPath('ocDashboard')."/l10n/widgets/".$this->id."/".OC_L10N::findLanguage().".php"));
        //$this->l->load("");
	}
	
	
// --- PUBLIC ----------------------------------------
	
	/*
	 * @return returns all data for the actual widget
	 */
	public function getData() {
		if($this->checkConditions()) {
			$return = $this->getWidgetData();
			if($this->errorMsg != "") {
				$return = Array("error"=>$this->errorMsg);
				$this->status = 3;
			} else {
				$this->loadScripts();
				$this->loadStyles();
			}
		} else {
			$return = Array("error"=>"Missing required app.");
			$this->status = 4;
		}
				
		$return['id'] = $this->id;
		$return['status'] = $this->getStatus($return);
		$return['interval'] = $this->interval;
		$return['icon'] = $this->icon;
		$return['link'] = $this->link;
		$return['name'] = $this->name;

        return $return;
	}
		
// --- PROTECTED --------------------------------------

// --- PRIVATE ----------------------------------------
	
	/*
	 * loads all script that are defined in the config Array
	 */
	private function loadScripts() {
		if(isset($this->scripts) && $this->scripts != "") {
			foreach (explode(",", $this->scripts) as $script) {
                if($script != "") {
    				OCP\Util::addscript('ocDashboard', 'widgets/'.$this->id.'/'.$script);
                }
			}
		}
	}
	
	
	/*
	 * loads all styles that are defined in the config Array
	 */
	private function loadStyles() {
		if(isset($this->styles) && $this->styles != "") {
			foreach (explode(",", $this->styles) as $style) {
                if($style != "") {
    				OCP\Util::addStyle('ocDashboard', 'widgets/'.$this->id.'/'.$style);
                }
            }
		}
	}
	
	
	/*
	 * set hash to DB
	 * set and return status local
	 * 
	 * @param $data data for hash in method setHashAndStatus
	 * 
	 * @return status number
	 * 		0 = no status information
	 * 		1 = all okay 
	 * 		2 = something positiv happend (green)
	 * 		3 = something negativ happend (orange)
	 * 		4 = error (red)
	 * 		5 = dummy (yellow)
	 */
	private function getStatus($data) {
		$this->cleanHashs();
		$this->setHashAndStatus($data);
		return $this->status;
	}
	
	
	/*
	 * delete all hashs older than 24 hours
	 */
	private function cleanHashs() {
		$sql = 'DELETE FROM `*PREFIX*ocDashboard_usedHashs` WHERE `user` = ? AND `timestamp` < ?;';
		$query = \OCP\DB::prepare($sql);
		$params = Array($this->user, time()-60*60*24);
		$result = $query->execute($params);
			
		if (\OCP\DB::isError($result)) {
			\OCP\Util::writeLog('ocDashboard',"Could not clean hashs.", \OCP\Util::WARN);
			\OCP\Util::writeLog('ocDashboard', \OC_DB::getErrorMessage($result), \OC_Log::ERROR);
		}
	}
	
	
	/*
	 * set status (is the hash new? => status = 2)
	 * writes Hash in DB, next time we know if it was used or it is new
	 * 
	 * @param $data data for hash
	 */
	private function setHashAndStatus($data) {
		$hash = sha1(json_encode($data));

		// hash exists in DB ?
		$sql = 'SELECT * FROM `*PREFIX*ocDashboard_usedHashs` WHERE usedHash = ? AND widget = ? AND user = ? LIMIT 1;';
		$params = Array($hash,$this->id,$this->user);
		$query = \OCP\DB::prepare($sql);
		$result = $query->execute($params)->fetchRow();
		//if (\OCP\DB::isError($result)) {
		//		\OCP\Util::writeLog('ocDashboard',"Could not find hash in db.", \OCP\Util::WARN);
		//		\OCP\Util::writeLog('ocDashboard', \OC_DB::getErrorMessage($result), \OC_Log::ERROR);
		//}
				
        $all = $query->execute($params)->fetchAll();
        //var_dump($all);
        $resultNum = count($all);

        // if not in DB, write to DB
		if( $resultNum == 0 ) {
			$sql2 = 'INSERT INTO `*PREFIX*ocDashboard_usedHashs` (usedHash,widget,user,timestamp) VALUES (?,?,?,?); ';
			$params = Array($hash,$this->id,$this->user,time());
			$query2 = \OCP\DB::prepare($sql2);
			$result2 = $query2->execute($params);
			if (\OCP\DB::isError($result2)) {
				\OCP\Util::writeLog('ocDashboard',"Could not write hash to db.", \OCP\Util::WARN);
				\OCP\Util::writeLog('ocDashboard', \OC_DB::getErrorMessage($result), \OC_Log::ERROR);
			}
            $this->status = 2;
		} else {
            $this->status = 0;
		}
	}
	
	
	/*
	 * @param $field name of fild
	 * @return default value for field from conf array
	 */
	protected function getDefaultValue ($field) {
		foreach ($this->conf as $conf) {
			if($conf['id'] == $field) {
				if(isset($conf['options']) && isset($conf['default'])) {
					foreach ($conf['options'] as $option) {
						if($option['id'] == $conf['default']) {
							return $option['id'];
						}
					}
				} elseif(isset($conf['default'])) {
					return $conf['default'];
				}
			}
		}
		return null;
	}

	
	/*
	 * @param $widget widget name
 	 * @return true if all conditon apps are availible
	 */
	private function checkConditions() {
		if(isset($this->cond) && $this->cond != "") {
			foreach(explode(",",$this->cond) as $cond) {
				if(\OCP\App::isEnabled($cond) != 1) {
					OCP\Util::writeLog('ocDashboard',"App ".$cond." missing for ".$this->name, \OCP\Util::WARN);
					return false;
				}
			}
		}
		return true;
	}

    /*
     * clean escaped characters
     *
     * @param string input
     * @return clean string output
     */
    protected function cleanSpecialCharacter($str) {
        //$str = str_replace('\\', '#=#', $str);
        $str = str_replace('\r', '<br>', $str);
        $str = str_replace('\n', '<br>', $str);
        $str = str_replace('\,', ',', $str);
        //$str = str_replace('#=#', '&#92;', $str);
        return $str;
    }
}
