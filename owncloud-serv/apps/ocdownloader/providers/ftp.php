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
* FTP provider file
* 
*/

require_once('../lib/ocDownloaderFTP.class.php');
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
		
		if(!OC_ocDownloaderFTP::checkFTPMod()){
			OC_ocDownloaderPB::setError($l->t('FTP mod is disabled'));
		}else{
			$url = urldecode(trim($_GET['u']));
			$ow = urldecode(trim($_GET['o']));
			
			if(strcmp(substr($url,0,6), 'ftp://') != 0 && strcmp(substr($url,0,7), 'ftps://') != 0){
				$url = 'ftp://'.$url;
			}
			
			$url = parse_url($url);
			if(!isset($url['scheme']) || !isset($url['host']) || !isset($url['user']) || !isset($url['pass']) || !isset($url['path'])){
				OC_ocDownloaderPB::setError($l->t('Wrong URL'));
			}else{
				$port = 0;
				if(isset($url['port'])){
					$port = $url['port'];
				}
				
				if(!OC_ocDownloaderFTP::connectToHost($url['scheme'], $url['host'], $port, $url['user'], $url['pass'])){
					OC_ocDownloaderPB::setError($l->t('Connection timeout'));
				}else{
					if(OC_ocDownloaderFTP::isDir($url['path'])){
						OC_ocDownloaderPB::setError($l->t('Enter a File URL'));
						OC_ocDownloaderFTP::closeConnection();
					}else{
						OC_ocDownloaderFTP::getFile($url['path'], $l, $ow);
					}
				}
			}
		}
		?>
	</body>
</html>
