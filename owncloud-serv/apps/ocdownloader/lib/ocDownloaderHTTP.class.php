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
*/

/**
 * This class manages ocDownloader HTTP downloads. 
 */
class OC_ocDownloaderHTTP {
	
	private static $errors = Array(
		0 => 'Unknown error',
		403 => 'Access forbidden'
	);
	
	/**
	 * Get the file by an URL
	 * @param $url URL of the file
	 * @param $path Simple path of the file
	 * @param $l Lang
	 * @param $overwrite Overwrite the target file
	 */
	public static function getFile($url, $path, $l, $overwrite = 0){
		try{
			$code = 0;
			if(!self::checkFileAccess($url, $code)){
				OC_ocDownloaderPB::setError($l->t(self::$errors[$code]));
				exit();
			}
			
			$pathinfo = pathinfo($path);
			$fs = OCP\Files::getStorage('files');
			if($fs->file_exists('/Downloads/' . $pathinfo['basename']) && !$overwrite){
				$pathinfo['basename'] = md5(rand()) . '_' . $pathinfo['basename'];
			}
			$fs = $fs->fopen('/Downloads/' . $pathinfo['basename'], 'w');
			
			$size = self::getRemoteFileSize($url);
			if($size == 0){
				OC_ocDownloaderPB::setError($l->t('Filesize is null'));
				exit();
			}
			$chunkSize = self::getChunkSize($size);
		
		    $fp = fopen($url, 'rb');
			$received = $last = 0;
			
		    while(!feof($fp)){
		        $data = @fread($fp, $chunkSize);
		        if($data == ''){
		        	break;
		        }
				$saved = fwrite($fs, $data);
				if($saved > -1){
					$received += $saved;
				}
				if($received >= $size){
	                $percent = 100;
	            }else{
	                $percent = @round(($received/$size)*100, 2);
	            }
				if($received > $last + $chunkSize){
					OC_ocDownloaderPB::setProgressBarProgress($percent);
					$last = $received;
				}
				usleep(100);
		    }
			OC_ocDownloaderPB::setProgressBarProgress(100);
			OC_ocDownloader::setUserHistory($pathinfo['basename'], 1);
		
		    fclose($fp);fclose($fs);
		}catch(exception $e){
			OC_ocDownloaderPB::setError($l->t('Unknown error'));
		}
	}

	/**
	 * cURL session
	 * @param $url The URL to be executed with curl
	 * @return The cURL result
	 */
	public static function execURL($url, $pr = NULL){
		$url = str_replace(Array(" ", "\r", "\n"), Array("%20"), $url);
		$ch = curl_init($url);
		
		if(!is_null($pr) && strcmp($pr, 'rapidshare') == 0){
			curl_setopt($ch, CURLOPT_HEADER, FALSE);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		}else{
			curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
	        curl_setopt($ch, CURLOPT_FAILONERROR, 0);
	        curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
	        curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
			curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Accept-Language: en-us;q=0.7,en;q=0.3", "Accept-Charset: utf-8,windows-1251;q=0.7,*;q=0.7", "Pragma: no-cache", "Cache-Control: no-cache", "Connection: Close"));
			curl_setopt($ch, CURLOPT_NOBODY, TRUE);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120); 
			curl_setopt($ch, CURLOPT_TIMEOUT, 120);
		}
		
		$res = curl_exec($ch);
	    curl_close($ch);
	    return $res;
	}

	/**
	 * Get size of the remote file
	 * @param $remorteFile The remote file URL
	 * @return Int Size of the remote file 
	 */
	private static function getRemoteFileSize($remoteFile){
		$data = self::execURL($remoteFile);
		if($data === false){
			return 0;
		}
		
		$contentLength = 0;
		if(preg_match('/Content-Length: (\d+)/', $data, $m)){
		  	$contentLength = (int)$m[1];
		}
		return $contentLength;
	}

	/**
	 * Check file Access
	 * @param $url The file URL
	 * @return Boolean
	 */
	private static function checkFileAccess($url, &$code){
		$data = self::execURL($url);
		if($data === false){
			return FALSE;
		}
		
		$code = 'unknown';
		if(preg_match('/^HTTP\/1\.[01] (\d\d\d)/', $data, $m)){
			$code = (int)$m[1];
			switch($code){
				case 200: return TRUE; break; 
				case 403: return FALSE; break;
				default: return FALSE; break;
			}
		}
		return TRUE;
	}
	
	/**
	 * Check if the remote file exists
	 * @param $url The remote file URL
	 * @return Boolean
	 */
	private static function remoteFileExists($url){
		$f = @fopen($url, 'r');
		if($f){
			fclose($f);
			return TRUE;
		}
		return FALSE;
	}
	
	/**
	 * Get the chunk size according to the total size
	 */
	private static function getChunkSize($fsize){
	    if($fsize <= 1024*1024){
	        return 4096;
	    }
	    if($fsize <= 1024*1024*10){
	        return 4096*10;
	    }
	    if($fsize <= 1024*1024*40){
	        return 4096*30;
	    }
	    if($fsize <= 1024*1024*80){
	        return 4096*47;
	    }
	    if($fsize <= 1024*1024*120){
	        return 4096*65;
	    }
	    if($fsize <= 1024*1024*150){
	        return 4096*70;
	    }
	    if($fsize <= 1024*1024*200){
	        return 4096*85;
	    }
	    if($fsize <= 1024*1024*250){
	        return 4096*100;
	    }
	    if($fsize <= 1024*1024*300){
	        return 4096*115;
	    }
	    if($fsize <= 1024*1024*400){
	        return 4096*135;
	    }
	    if($fsize <= 1024*1024*500){
	        return 4096*170;
	    }
	    if($fsize <= 1024*1024*1000){
	        return 4096*200;
	    }
	    return 4096*210;
	}
	
}