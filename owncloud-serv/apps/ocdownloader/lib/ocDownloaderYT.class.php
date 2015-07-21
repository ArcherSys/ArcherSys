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
 * This class manages ocDownloader YouTube downloads. 
 */
class OC_ocDownloaderYT {

    private static $youtube_video_url;
	private static $youtube_video_id;
    private static $test;
    private static $final_flv_filename;
    private static $cookies_path;
    private static $curl_headers;
    private static $flv_url;
	private static $fs;
	private static $fp;

    public static function init($youtube_video_url, $final_flv_filename, $test = 0, $overwrite = 0){
        self::$youtube_video_url = $youtube_video_url;
        self::$test = $test;
        self::$final_flv_filename = $final_flv_filename;
        
        self::$youtube_video_id = self::get_youtube_video_id();
        
        self::$cookies_path = "cookies.txt";
        $clear_cookies = self::clear_cookies();
        
        self::$curl_headers = Array(
        	"Accept-Language: en-us",
        	"User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15",
        	"Connection: Keep-Alive",
        	"Cache-Control: no-cache"
        );
        self::$flv_url = self::get_flv_url();
        
		$fs = OCP\Files::getStorage('files');
		if($fs->file_exists('/Downloads/' . $final_flv_filename) && !$overwrite){
			self::$final_flv_filename = md5(rand()) . '_' . $final_flv_filename;
		}
		self::$fs = $fs->fopen('/Downloads/' . self::$final_flv_filename, 'w');
		
        $save_binary = self::get_curl_binary();
        $clear_cookies = self::clear_cookies();
    
    }
    
    private static function get_youtube_video_id(){
        $thearray = explode("watch?v=", self::$youtube_video_url);
        return $thearray[1];
    }
    
    
    private static function clear_cookies(){
        if(file_exists(self::$cookies_path)){
            unlink(self::$cookies_path);
        }
        
        $ourFileName = self::$cookies_path;
        $ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
        fclose($ourFileHandle);
        
    }
    
    private static function get_flv_url(){
        $html = self::curl_get_url(self::$youtube_video_url);
        preg_match_all("/var.*?swf.*?=.*?\"(.*?)watch-player.*?innerHTML.*?=.*?swf/is", $html, $matches);

        $decoded = urldecode($matches[1][0]);
        preg_match_all("/url=(.*?)\,/is", $decoded, $matches);
        $matches = $matches[1];
        
        for($i = 0; $i < count($matches); $i++){
            $test = explode("&", $matches[$i]);
            $matches[$i] = $test[0];
            $matches[$i] = urldecode($matches[$i]);
        }
       
        $final_flv_url = "";
        foreach($matches AS $this_url){
            $headers = self::curl_get_headers($this_url);
            
            $headers = split("\n", trim($headers));
            foreach($headers as $line) {
                if (strtok($line, ':') == 'Content-Type'){
                    $parts = explode(":", $line);
                    $content_type = strtolower(trim($parts[1]));
                    if(self::contains("video/x-flv", $content_type)){
                        $final_flv_url = $this_url;
                        return $final_flv_url;
                    }
                }
            }
        }
        
        return false;
    }
    
    private static function curl_get_url($url){
        $cookie_path = self::$cookies_path;
        $headers = self::$curl_headers;
        	
        $ch = curl_init();	
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_path);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_path);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
        curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 5 );
        
        $output = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);
        
        return $output;
    }
    
    private static function curl_get_headers($url){
        $cookie_path = self::$cookies_path;
        $headers = self::$curl_headers;
        	
        $ch = curl_init();	
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_NOBODY, 1);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_path);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_path);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
        curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 5 );
        
        $results = curl_exec($ch);
        
        return $results;
    }
    
    private static function get_curl_binary(){
      	$size = self::getRemoteFileSize(self::$flv_url);
		if($size == 0){
			OC_ocDownloaderPB::setError($l->t('Filesize is null'));
			exit();
		}
		$chunkSize = self::getChunkSize($size);
	
	    self::$fp = fopen(self::$flv_url, 'rb');
		$received = $last = 0;
		
	    while(!feof(self::$fp)){
	        $data = @fread(self::$fp, $chunkSize);
	        if($data == ''){
	        	break;
	        }
			$saved = fwrite(self::$fs, $data);
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
		OC_ocDownloader::setUserHistory(self::$final_flv_filename, 1);
		
		fclose(self::$fp);fclose(self::$fs);
    }
    
    private static function contains($substring, $string){
        $pos = strpos($string, $substring);
        if($pos === false) {
			return false;
        }else{
            return true;
        }
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
	
	/**
	 * cURL session
	 * @param $url The URL to be executed with curl
	 * @return The cURL result
	 */
	private static function execURL($url, $pr = NULL){
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

}