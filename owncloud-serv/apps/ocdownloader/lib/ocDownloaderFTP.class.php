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
 * This class manages ocDownloader FTP downloads. 
 */
class OC_ocDownloaderFTP {
	
	private static $conn;
	
	/**
	 * Check FTP MOD
	 * @return Boolean
	 */
	public static function checkFTPMod(){
		if(!in_array('ftp', get_loaded_extensions())){
			return FALSE;
		}
		return TRUE;
	}
	
	/**
	 * Connect to FTP Server
	 * @param $scheme FTP protocol (ftp|ftps)
	 * @param $host The FTP host
	 * @param $user The login
	 * @param $pwd The password
	 * @return Boolean
	 */
	public static function connectToHost($scheme, $host, $port, $user, $pwd){
		if(!$port){
			$port = 21;
		}
		if(strcmp($scheme,'ftps') == 0){
			self::$conn = ftp_ssl_connect($host, $port);
		}else{
			self::$conn = ftp_connect($host, $port);
		}
		
		$loginResult = ftp_login(self::$conn, $user, $pwd);
		if(self::$conn && $loginResult){
			ftp_pasv(self::$conn, FALSE);
			return TRUE;
		}
		return FALSE;
	}
	
	/**
	 * Check if the URL is a folder or not
	 * @param $path The file path
	 * @return Boolean
	 */
	public static function isDir($path){
		$chDir = @ftp_chdir(self::$conn, $path);
		if($chDir){
			return TRUE;
		}
		return FALSE;
	}
	
	/**
	 * Get file
	 * @param $path The remote file path
	 * @param $l Lang
	 * @param $overwrite Overwrite the target file
	 */
	public static function getFile($path, $l, $overwrite){
		try{
			$pathinfo = pathinfo($path);
			$fs = OCP\Files::getStorage('files');
			if($fs->file_exists('/Downloads/' . $pathinfo['basename']) && !$overwrite){
				$pathinfo['basename'] = md5(rand()) . '_' . $pathinfo['basename'];
			}
			
			$size = self::getRemoteFileSize($path);
			if($size == 0){
				OC_ocDownloaderPB::setError($l->t('Filesize is null'));
				self::closeConnection();
				exit();
			}
			$chunkSize = self::getChunkSize($size);
			
			$received = $last = 0;
			$ret = ftp_nb_get(self::$conn, $fs->getLocalFile('/Downloads/' . $pathinfo['basename']), $path, FTP_BINARY);
			while($ret == FTP_MOREDATA){
				$received += $fs->filesize('/Downloads/' . $pathinfo['basename']);
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
			   	$ret = ftp_nb_continue(self::$conn);
			}
			if($ret != FTP_FINISHED){
			   	OC_ocDownloaderPB::setError($l->t('Download error'));
				self::closeConnection();
			   	exit();
			}else{
				OC_ocDownloaderPB::setProgressBarProgress(100);
				OC_ocDownloader::setUserHistory($pathinfo['basename'], 1);
			}
			
			self::closeConnection();
		}catch(exception $e){
			OC_ocDownloaderPB::setError($l->t('Unknown error'));
		}
	}
	
	/**
	 * Get remote filesize
	 * @param $path The file path
	 * @return Integer
	 */
	public static function getRemoteFileSize($path){
		$res = ftp_size(self::$conn, $path);
		if($res != -1){
		    return $res;
		}
		return 0;
	}
	
	/**
	 * Close connection
	 */
	public static function closeConnection(){
		ftp_close(self::$conn);
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
