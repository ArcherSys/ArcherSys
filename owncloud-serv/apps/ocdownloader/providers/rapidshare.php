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
* RapidShare provider file
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
		
		$errors = Array(
			'3cf02fc0' => $l->t('SSL Error. Need a RapidPro account'),
			'e029a7af' => $l->t('File not found'),
			'8d5611a9' => $l->t('Need RapidPro to get more files from your IP address')
		);
		
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
				$user_info = OC_ocDownloader::getUserProviderInfo($m[1]);
				
				if(!preg_match('/^(http|https):\/\/rapidshare.com\/files\/(.*)\/(.+)$/', $url, $m)){
					OC_ocDownloaderPB::setError($l->t('This file does not exists'));
				}else{
					if(!is_numeric($m[2])){
						OC_ocDownloaderPB::setError($l->t('Wrong File iD'));
					}else{
						$pr_url = 'https://api.rapidshare.com/cgi-bin/rsapi.cgi?sub=download&bin=1';
						if(isset($user_info['us_username']) && isset($user_info['us_password'])){
							$pr_url .= '&login='.$user_info['us_username'].'&password='.$user_info['us_password']; 
						}
						$pr_url .= '&fileid='.$m[2].'&filename='.$m[3];
						
						$curl = OC_ocDownloaderHTTP::execURL($pr_url, 'rapidshare');
						if(strlen($curl) == 0){
							OC_ocDownloaderPB::setError($l->t('Connection error ...'));
						}else{
							if(preg_match('/^ERROR.*\((.*)\)(\n){0,1}.*$/', $curl, $ma)){
								if(isset($errors[$ma[1]])){
									OC_ocDownloaderPB::setError($errors[$ma[1]]);
								}else{
									OC_ocDownloaderPB::setError($l->t('Unknown error').' ('.$ma[1].')');
								}
							}else{
								$curl = explode(',', str_replace('DL:', '', $curl));
								if($curl[2] != 0){
									OC_ocDownloaderPB::setText($l->t('Waiting for').' '.$curl[2].'s');
									sleep($curl[2]);
								}
								
								$pr_url = $m[1].'://'.$curl[0].'/cgi-bin/rsapi.cgi?sub=download&bin=1';
								if(isset($user_info['us_username']) && isset($user_info['us_password'])){
									$pr_url .= '&login='.$user_info['us_username'].'&password='.$user_info['us_password']; 
								}
								$pr_url .= '&fileid='.$m[2].'&filename='.$m[3].'&dlauth='.$curl[1];
	
								$curl = OC_ocDownloaderHTTP::execURL($pr_url, 'rapidshare');
								if(preg_match('/^ERROR.*\((.*)\)(\n){0,1}.*$/', $curl, $m)){
									if(isset($errors[$m[1]])){
										OC_ocDownloaderPB::setError($errors[$m[1]]);
									}else{
										OC_ocDownloaderPB::setError($l->t('Unknown error').' ('.$m[1].')');
									}
								}else{
									OC_ocDownloaderHTTP::getFile($pr_url, $path, $l, $ow);
								}
							}
						}
					}
				}
			}
		}
		?>
	</body>
</html>
