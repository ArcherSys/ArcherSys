<?php

/*
 * check for new mails
 * copyright 2013
 * 
 * @version 0.1
 * @date 01-08-2013
 * @author Florian Steffens (flost@live.no)
 */
class mailcheck extends ocdWidget implements interfaceWidget {

	private $maxStrLenReference = 23; // character
	private $maxStrLenFrom = 18; // character
	private $numberShowMails = 7;
	private $newMails = Array();
	private $error = "";
	
	
	// ======== INTERFACE METHODS ================================
	
	/*
	 * @return Array of all data for output
	 * this array will be routed to the subtemplate for this widget 
	 */
	public function getWidgetData() {
		if(empty($this->newMails)) {
			$this->getNewMails();
		}	
		
		// max number show new mails
		$size=count($this->newMails);
			
		if($size > $this->numberShowMails) {
			$numberAllMails = $size;
			$size = $this->numberShowMails;
		} else {
			$numberAllMails = "";
		}
		
		$mails = Array();
		for($i = 0; $i < $size; $i++){
			$mails[] = Array(
					"from" => $this->cutString($this->isodecode($this->newMails[$i]->from), $this->maxStrLenFrom),
					"subject" => $this->cutString($this->isodecode($this->newMails[$i]->subject), $this->maxStrLenReference)
					);
		}
		
		if($this->error != "") {
			$return = Array("error" => $this->error);
			$this->status = 3;
		} else {
			$return = Array(
					"mails" => $mails,
					"numberAllMails" => $numberAllMails
					);
		}

		return $return;
	}
		
	// ======== END INTERFACE METHODS =============================

	
	/*
	 * @return alls new mails, newest first
	 */
	private function getNewMails() {
		$user = OCP\Config::getUserValue($this->user, "ocDashboard", "ocDashboard_mailcheck_user","");
		$host = OCP\Config::getUserValue($this->user, "ocDashboard", "ocDashboard_mailcheck_server","");
		$pass = OCP\Config::getUserValue($this->user, "ocDashboard", "ocDashboard_mailcheck_password","");
		$port = OCP\Config::getUserValue($this->user, "ocDashboard", "ocDashboard_mailcheck_port",$this->getDefaultValue("port"));
		//$folder = OCP\Config::getUserValue($this->user, "ocDashboard", "ocDashboard_mailcheck_folder",$this->getDefaultValue("folder"));
		$security = (OCP\Config::getUserValue($this->user, "ocDashboard", "ocDashboard_mailcheck_ssl")=='yes')? "ssl": "none";
		$protocol = OCP\Config::getUserValue($this->user, "ocDashboard", "ocDashboard_mailcheck_protocol",$this->getDefaultValue("protocol"));
		
		if($host != "" && $user != "" && $pass != "") {
			// connect to mailbox
			$connString = "{".$host.":".$port."/".$protocol.($security != "none" ? "/".$security."/novalidate-cert" : "")."}";
			//\OCP\Util::writeLog("ocDashboard",$connString,\OCP\Util::DEBUG);
			$mailbox = imap_open($connString,$user,$pass);
				
			if($mailbox) {
				//$mails = array_reverse(imap_fetch_overview($mailbox,"1:*", FT_UID)); // fetch a overview about mails

                $index = "";
                $unseen = imap_search($mailbox, 'UNSEEN'); // fetch only unseen mails... much faster
                if($unseen) {
                    foreach($unseen as $umail) {
                        $index .= $umail.",";
                    }
                }
                $mails = array_reverse(imap_fetch_overview($mailbox, "$index"));

				imap_close($mailbox);
			
				foreach($mails as $mail) {
					if($mail->seen == 0 && $mail->deleted == 0) {
						$this->newMails[] = $mail;
					}
				}
			} else {
				\OCP\Util::writeLog("ocDashboard",$connString,\OCP\Util::ERROR);
				$this->error = "Connection error. <br />Are the settings correct?";
			}
		} else {
			$this->errorMsg = "Missing settings.";				
		}
	}
	
	
	/*
	 * @return Mail Connection
	 */
	function mailLogin($host,$port,$user,$pass,$folder="INBOX",$ssl=false)
	{
		$ssl=($ssl==false)?"/novalidate-cert":"";
		return (imap_open("{"."$host:$port/pop3$ssl"."}$folder",$user,$pass));
	}
	
	
	/*
	 * @return string max $maxStrLen character
	 */
	private function cutString($string, $len) {
		if(strlen($string) > $len) {
			return substr($string, 0, ((int)$len-3))."...";
		}
		else {
			return $string;
		}
	}
	
	
	/*
	 * @param $text
	 * @return decode mail head information
	 */
	private function isodecode($text){
		$rslt = "";
		$elements = imap_mime_header_decode($text);
		for ($i=0; $i<count($elements); $i++) {
			$rslt .= $elements[$i]->text;
		}
		return utf8_encode($rslt);
	}
}