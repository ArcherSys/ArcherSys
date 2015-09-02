<?php

	class FileUtils extends StaticFactory implements FSUtils 
	{
		public static function copy($source, $destination)
		{
			if(!copy($source, $destination))
				throw new Exception('Copy file exception');
		}
		
		public static function move($source, $destination)
		{
			try {
				self::copy($source, $destination);
				self::delete($source);
			} catch (Exception $e) {
				throw new Exception('Move file exception');
			}
		}
		
		public static function delete($source)
		{
			if (file_exists($source)) {
				if (!unlink($source))
					throw new Exception('Delete file exception');
			}
		}
		
		public static function symlink($target, $link)
		{
			if (!symlink($target, $link))
				throw new Exception('symlink cannot be created');
		}
	}

?>