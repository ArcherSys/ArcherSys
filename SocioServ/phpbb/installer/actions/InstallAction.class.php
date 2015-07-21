<?php

	class InstallAction extends AbstractAction 
	{	
		private $currentMod;
		private $lastInstalled = array();
		
		/**
		 * @return Mod
		 */
		public function getCurrentMod()
		{
			return $this->currentMod;
		}
		
		/**
		 * @return InstallAction
		 */
		private function setCurrentMod(Mod $mod)
		{
			$this->currentMod = $mod;
			return $this;
		}
			
		/**
		 * @return InstallAction
		 */
		public static function me()
		{
			return Singleton::getInstance(__CLASS__);
		}
		
		/**
		 * @var Build
		 */
		private $build;
		
		/**
		 * @return InstallAction
		 */
		public function setBuild(Build $build)
		{
			$this->build = $build;
			return $this;
		}
		
		/**
		 * @return Build
		 */
		public function getBuild()
		{
			if (!$this->build)
				throw new Exception('Empty build object');
				
			return $this->build;
		}
		
		/**
		 * @return InstallAction
		 */
		public function run()
		{
			$infofile =	USER_DIR . DIRECTORY_SEPARATOR . MODS_INFO;
			if (!file_exists($infofile)) {
				file_put_contents($infofile,'');
			} else {
				$this->lastInstalled = 
					explode(';', file_get_contents($infofile));
			}
			
			if ($this->getBuild()->getMods())
				if (!$this->getBuild()->exists()) {
					$this->getBuild()->save();
					foreach ($this->getBuild()->getMods() as $mod) {
						foreach ($mod->getFiles() as $file) {
							$this->setCurrentMod($mod)->process($mod, $file);
						}
					}
				}
			
			if ($this->getBuild()->getMods()) {
				$_REQUEST['mode'] = $_GET['mode'] = 'install';
				foreach ($this->getBuild()->getMods() as $mod) {
					if (in_array($mod->getName(), $this->lastInstalled))
						continue;
						
					foreach ($mod->getDependence('sql') as $sql) {
							include(
								$this->getBuild()->getPath() 
								. DIRECTORY_SEPARATOR . $sql
							);
					}
				}
			}
			
			if ($this->getBuild()->getMods()) {
				$mods = 
					array_unique(
						array_merge(
							$this->lastInstalled, 
							array_keys($this->getBuild()->getMods())
						)
					);
				file_put_contents($infofile, implode(';', $mods));
			}
			return $this;
		}
		
		/**
		 * @param Mod $mod
		 * @param string $filename
		 */
		public function process(Mod $mod, $filename)
		{
			$file = $mod->getPath() . DIRECTORY_SEPARATOR . $filename;
			if (!is_readable($file))
				throw new Exception('Permision denied');
			
			$xml = simplexml_load_file($file);
			foreach (
				get_object_vars($xml->{"action-group"}->children()) 
				as 
				$name => $actionElement
			) {
				if (!is_array($actionElement))
					$actionElement = array($actionElement);
				
				$cnt = count($actionElement);
				
				foreach ($actionElement as $i => $action) {
					
					if (!is_object($action)) {
						$action = 
							($cnt > 1) 
							? $xml->{"action-group"}->{$name}[$i]
							: $xml->{"action-group"}->{$name};
					}
					
					if (
						$name == 'sql'
						&&
						in_array($mod->getName(), $this->lastInstalled)
					) continue;
					
					$className = ucfirst($name).'Action';
					if (class_exists($className)) {
						Singleton::getInstance($className)->
						setXmlElement($action)->
						setParentAction($this)->
						run();
					}
				}
			}
		}
	}

?>
