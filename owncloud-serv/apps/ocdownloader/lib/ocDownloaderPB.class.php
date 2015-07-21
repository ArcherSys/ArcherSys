<?php

/**
* ownCloud - ocDownloader plugin
*
* @author Xavier Beurois
* @copyright 2012 Xavier Beurois www.djazz-lab.net
* 
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either 
* version 3 of the License, or any later version.
* 
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*  
* You should have received a copy of the GNU Lesser General Public 
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
* 
* Create with http://spidgorny.blogspot.com/2012/02/progress-bar-for-lengthy-php-process.html
* 
*/

/**
 * This class manages ocDownloader progress bar. 
 */
class OC_ocDownloaderPB {
	
	private static $percentDone = 0;
	private static $pbid;
	private static $pbarid;
	private static $tbarid;
	private static $textid;
	private static $decimals = 1;

	/**
	 * Init function
	 * @param $pbid The progress id
	 * @param $pbarid The progress bar id
	 * @param $tbarid The transparent bar id
	 */
	public static function init($pbid='pb', $pbarid='progress-bar', $tbarid='transparent-bar'){
		self::$pbid = $pbid;
		self::$pbarid = $pbarid;
		self::$tbarid = $tbarid;
		self::$textid = 'pb_text';
		self::$percentDone = 0;
	}

	/**
	 * Render the initial progress bar
	 */
	public static function render(){
		print(self::getContent());
		self::flush();
	}

	/**
	 * Set progress bar percent progress
	 * @param $percentDone The progress bar value
	 */
	public static function setProgressBarProgress($percentDone){
		self::$percentDone = $percentDone;
		$text = number_format(self::$percentDone, self::$decimals, '.', '').'%';
		print('<script type="text/javascript">if(document.getElementById("'.self::$pbarid.'")){document.getElementById("'.self::$pbarid.'").style.width = "'.$percentDone.'%";');
		if($percentDone!=100){
			print('document.getElementById("'.self::$tbarid.'").style.width = "'.(100-$percentDone).'%";document.getElementById("'.self::$textid.'").innerHTML = "'.htmlspecialchars($text).'";');
		}else{
			print('document.getElementById("'.self::$textid.'").innerHTML = "'.htmlspecialchars($text).'";');
		}
		print('}</script>'."\n");
		self::flush();
	}
	
	/**
	 * Set text message to the progress bar div
	 * @param $text The text to display
	 */
	public static function setText($text){
		print('<script type="text/javascript">document.getElementById("'.self::$textid.'").innerHTML = "'.htmlspecialchars($text).'";</script>'."\n");
		self::flush();
	}
	
	/**
	 * Set error message to the progress bar div
	 * @param $error The error to display
	 */
	public static function setError($error){
		print('<script type="text/javascript">document.getElementById("'.self::$pbid.'").removeChild(document.getElementById("pb_bar"));document.getElementById("'.self::$textid.'").innerHTML = "<img src=\"/apps/ocdownloader/img/warning.png\" style=\"vertical-align:middle;margin-right:5px;\" />'.htmlspecialchars($error).'";</script>'."\n");
		self::flush();
	}

	/**
	 * Flush (Call this function each time you need to display something)
	 */
	private static function flush() {
		print str_pad('', intval(ini_get('output_buffering')))."\n";
		flush();
	}
	
	/**
	 * Get initial content
	 */
	private static function getContent(){
		self::$percentDone = floatval(self::$percentDone);
		$percentDone = number_format(self::$percentDone, self::$decimals, '.', '') .'%';
		$content = '<div id="'.self::$pbid.'" class="pb_container"><div id="'.self::$textid.'" class="'.self::$textid.'">'.$percentDone.'</div><div id="pb_bar" class="pb_bar"><div id="'.self::$pbarid.'" class="pb_before" style="width: '.$percentDone.';"></div><div id="'.self::$tbarid.'" class="pb_after"></div></div><br style="height: 1px; font-size: 1px;"/></div>';
		$content .= '<style>.pb_container{position:relative;}.pb_bar{width:100%;height:1em;border:1px solid silver;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;-moz-border-radius-bottomleft:5px;-moz-border-radius-bottomright:5px;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-webkit-border-bottom-left-radius:5px;-webkit-border-bottom-right-radius:5px;}.pb_before{float:left;height:1em;background-color:#1D2D44;-moz-border-radius-topleft:5px;-moz-border-radius-bottomleft:5px;-moz-border-radius-topright:5px;-moz-border-radius-bottomright:5px;-webkit-border-top-left-radius:5px;-webkit-border-bottom-left-radius:5px;-webkit-border-top-right-radius:5px;-webkit-border-bottom-right-radius:5px;}.pb_after{float:left;height:1em;background-color:#FEFEFE;-moz-border-radius-topright:5px;-moz-border-radius-bottomright:5px;-webkit-border-top-right-radius:5px;-webkit-border-bottom-right-radius:5px;}.pb_text{text-align:right;}</style>'."\r\n";
		return $content;
	}
	
}	