<?php

	class Mod
	{
		const INFO_FILE = 'install.xml';
		
		private $infoFile;
		private $name;
		private $path;
		private $version;
		
		private $xml;
		/**
		 * @return Mod
		 */
		public static function create()
		{
			return new self();
		}
		
		public static function getList()
		{
			$result = array();
			if (is_dir(MODS_DIR) && $dh = opendir(MODS_DIR)) {
		        while (($file = readdir($dh)) !== false) {
		        	if (
		        		$file == '.' 
		        		|| 
		        		$file == '..' 
		        		|| 
		        		!is_dir(MODS_DIR . DIRECTORY_SEPARATOR . $file)
		        	) continue;
		        	$result[] = Mod::create()->setName($file);
		        }
		        closedir($dh);
		    }
		    sort($result);
		    return $result;
		}
		
		public function getFiles()
		{
			$result = array();
		    if (
		    	is_dir($this->getPath()) 
		    	&& $dh = opendir($this->getPath())
		    ) {
		        while (($file = readdir($dh)) !== false) {
		            if (preg_match('/^(.*)\.xml$/iS', $file))
		            	$result[] = $file;
		        }
		        closedir($dh);
		    }
		    return $result;
		}
		
		public function getInfoFile()
		{
			if (!$this->infoFile) {	
				$this->setInfoFile(
					$this->getPath() . DIRECTORY_SEPARATOR . self::INFO_FILE
				);
			}
			return $this->infoFile;
		}
		
		/**
		 * @return Mod
		 */
		public function setInfoFile($infoFile)
		{
			if (!file_exists($infoFile) ||!is_readable($infoFile))
				throw new Exception('Permision denied');
				
			$this->infoFile = $infoFile;
			return $this;
		}
		
		public function getName($ignoreThrow = false)
		{
			if (!$this->name && !$ignoreThrow)
				throw new Exception('Empty name');
				
			return $this->name;
		}
		
		/**
		 * @return Mod
		 */
		public function setName($name)
		{
			$this->name = $name;
			try {
				$this->getPath();
			} catch (Exception $e) {
				$this->setPath(MODS_DIR . DIRECTORY_SEPARATOR . $name);
			}
			return $this;
		}
		
		public function getPath($ignoreThrow = false)
		{
			if (!$this->path && !$ignoreThrow)
				throw new Exception('Empty path');
				
			return $this->path;
		}
		
		/**
		 * @return Mod
		 */
		public function setPath($path)
		{
			if (!is_dir($path))
				throw new Exception('Incorrect path');
				
			$this->path = $path;
			return $this;
		}
		
		public function getVersion($ignoreThrow = false)
		{
			if (!$this->version && !$ignoreThrow)
				throw new Exception('Empty version');
				
			return $this->version;
		}
		
		/**
		 * @return Mod
		 */
		public function setVersion($version)
		{
			$this->version = (int)$version;
			return $this;
		}
		
		public function getXml()
		{
			if (!$this->xml)
			$this->xml = simplexml_load_file($this->getInfoFile());

			return $this->xml;
		}
		
		public function getInfo()
		{
			return trim((string)$this->getXml()->header->dependences->info);
		}
		
		public function getDependence($name)
		{
			$result = array();
			$vars = get_object_vars($this->getXml()->header->dependences);			
			if (!is_array($vars['dependence'])) 
				$vars['dependence'] = array($vars['dependence']);
				
			foreach ($vars['dependence'] as $dep) {				
				if (
					!$dep instanceof SimpleXMLElement 
					||
					(string)$dep->attributes()->name != $name
				) continue;
				$result[] = (string)$dep->attributes()->value;
			}
			return $result;
		}
	}
	
?>
