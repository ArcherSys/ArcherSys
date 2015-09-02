<?php

	class DirUtils extends StaticFactory implements FSUtils 
	{
		const DIRS  = 1;
		const FILES = 2;
		const ALL	= null;
		
		public static function copy($source, $destination)
		{
			if (!is_dir($source))
				throw new Exception('Source dir not exists');
				
			if (!is_dir($destination) && !mkdir($destination,0777))
				throw new Exception('Permision denied to mkdir');
				
			try {
				if ($dh = opendir($source)) {
			        while (($file = readdir($dh)) !== false) {
			            if ($file == '.' || $file == '..') continue;
			            if (is_dir($source . DIRECTORY_SEPARATOR . $file)) {
			            	self::copy(
			            		$source . DIRECTORY_SEPARATOR . $file,
			            		$destination . DIRECTORY_SEPARATOR . $file
			            	);
			            } else {
			            	FileUtils::copy(
			            		$source . DIRECTORY_SEPARATOR . $file,
			            		$destination . DIRECTORY_SEPARATOR . $file
			            	);
			            }
			        }
			        closedir($dh);
			    }
			} catch (Exception $e) {
				throw new Exception('Copy directory exception');
			}
		}
		
		public static function readDir($source, $only = self::ALL)
		{
			$result = array();
			if ($dh = opendir($source)) {
			        while (($file = readdir($dh)) !== false) {
			            if ($file == '.' || $file == '..') continue;
			            if (
			            	(
				            	is_dir($source . DIRECTORY_SEPARATOR . $file)
				            	&&
				            	($only == self::DIRS || $only == self::ALL)
				            ) || (
				            	!is_dir($source . DIRECTORY_SEPARATOR . $file)
				            	&&
				            	($only == self::FILES || $only == self::ALL)
			            	)
			            ) {
			            	$result[$file] = 
			            		$source . DIRECTORY_SEPARATOR . $file;
			            }
			        }
			}
			return $result;
		}
		
		public static function move($source, $destination)
		{
			try {
				self::copy($source, $destination);
				self::delete($source);
			} catch (Exception $e) {
				throw new Exception('Move directory exception');
			}
		}
		
		public static function delete($source)
		{
			if (!is_dir($source))
				throw new Exception('Path dir not exists');
				
			try {
				if ($dh = opendir($source)) {
			        while (($file = readdir($dh)) !== false) {
			            if ($file == '.' || $file == '..') continue;
			            if (is_dir($source . DIRECTORY_SEPARATOR . $file)) {
			            	self::delete($source . DIRECTORY_SEPARATOR . $file);
			            } else {
			            	FileUtils::delete(
			            		$source . DIRECTORY_SEPARATOR . $file
			            	);
			            }
			        }
			        closedir($dh);
				}
				rmdir($source);
			} catch (Exception $e) {
				throw new Exception('Delete directory exception');
			}
		}
		
		public static function clear($source, $exceptions = array())
		{
			static $level;
			
			if (!$level) $level = 0;
			
			if (!is_dir($source))
				throw new Exception('Path dir not exists');
				
			try {
				if ($dh = opendir($source)) {
			        while (($file = readdir($dh)) !== false) {
			            if (
			            		$file == '.' 
			            	|| 
			            		$file == '..'
			            	|| 
			            		in_array(
			            			$source 
			            			. DIRECTORY_SEPARATOR 
			            			. $file, 
			            			$exceptions
			            		)
			            ) continue;
			            
			            if (is_dir($source . DIRECTORY_SEPARATOR . $file)) {
			            	$level++;
			            	self::clear(
			            		$source . DIRECTORY_SEPARATOR . $file,
			            		$exceptions
			            	);
			            } else {
			            	FileUtils::delete(
			            		$source . DIRECTORY_SEPARATOR . $file
			            	);
			            }
			        }
			        closedir($dh);
				}
				if ($level > 0) {
					rmdir($source);
					$level = 0;
				}
			} catch (Exception $e) {
				throw new Exception('Clear directory exception');
			}
		}
		
		public static function getDirs($source, $fullPath = true)
		{
			$result = array();
			if (is_dir($source) && $dh = opendir($source)) {
				while (($file = readdir($dh)) !== false) {
					if (
						$file == '.' 
						|| $file == '..' 
						|| 
						!is_dir(
							$source . DIRECTORY_SEPARATOR . $file
						)
					) {
						continue;
					} else {
						$result[] = 
							($fullPath)
							? $source . DIRECTORY_SEPARATOR . $file
							: $file;
					}
				}
			}
			return $result;
		}
		
		public static function copyContent($source, $destination)
		{
			if (is_dir($source) && $dh = opendir($source)) {
				if (!is_dir($destination))
					mkdir($destination, 0777);
					
				while (($file = readdir($dh)) !== false) {
					if ($file == '.' || $file == '..') {
						continue;
					} elseif (is_dir($source . DIRECTORY_SEPARATOR . $file)) {
						self::copy(
							$source . DIRECTORY_SEPARATOR . $file,
							$destination . DIRECTORY_SEPARATOR . $file
						);
					} else {
						FileUtils::copy(
							$source . DIRECTORY_SEPARATOR . $file,
							$destination . DIRECTORY_SEPARATOR . $file
						);
					}
				}
			}
		}
	}
	
?>