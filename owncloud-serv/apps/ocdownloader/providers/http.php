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
* HTTP/HTTPS provider file
* 
*/

require_once('../lib/ocDownloader.class.php');
require_once('../lib/ocDownloaderHTTP.class.php');
require_once('../lib/ocDownloaderPB.class.php');

OCP\JSON::checkAppEnabled('ocdownloader');
OCP\JSON::checkLoggedIn();

$l = new OC_L10N('ocdownloader');

set_time_limit(0);
ini_alter("memory_limit", "1024M");
@ob_end_clean();
ob_implicit_flush(true);
ignore_user_abort(true);
clearstatcache();
error_reporting(6135);

?>
<html>
	<head>
		<style type="text/css">
			body{color:#555;font:0.6em "Lucida Grande",Arial,Verdana,sans-serif;font-weight:normal;text-shadow:0 1px 0 #FFF;margin:0 1px 0 0;overflow:hidden;}
		</style>
	</head>
	<body>
		<?php
		OC_ocDownloaderPB::init();
		echo '<div style="width:99%;">';
		OC_ocDownloaderPB::render();
		echo '</div>';
		OC_ocDownloaderPB::setText($l->t('Prepare download ...'));
		
		$pr = urldecode(trim($_GET['p']));
		$url = urldecode(trim($_GET['u']));
		$ow = urldecode(trim($_GET['o']));
		
		if(strcmp(substr($url,0,7), 'http://') != 0 && strcmp(substr($url,0,8), 'https://') != 0){
			$url = 'http://'.$url;
		}
		
		$url = parse_url($url);
		if(!isset($url['scheme']) || !isset($url['host']) || !isset($url['path'])){
			OC_ocDownloaderPB::setError($l->t('Connection error ...'));
		}else{
			$path = $url['path'];
			$url = $url['scheme'].'://'.$url['host'].(isset($url['port'])?':'.$url['port']:'').$url['path'];
		
			if(!preg_match('/^pr_([0-9]{1,4})$/', $pr, $m)){
				OC_ocDownloaderPB::setError($l->t('Unknown error'));
			}else{
				OC_ocDownloaderHTTP::getFile($url, $path, $l, $ow);
			}
		}
		?>
	</body>
</html>
