<?php

	class Build
	{
		private $mods = array();
		
		/**
		 * @return Build
		 */
		public static function create($modsOrHash = null)
		{
			return new self($modsOrHash = null);
		}
		
		public function __construct($modsOrHash)
		{
			if (is_array($modsOrHash))
				$this->createByMods($modsOrHash);
			elseif (is_string($modsOrHash))
				$this->createByHash($modsOrHash);
		}
		
		public function createByMods($mods)
		{
			foreach ($mods as $mod)
				$this->addMod($mod);
				
			return $this;
		}
		
		public function createByHash($hash)
		{
			if (
				!file_exists(
					$file = BUILDS_DIR 
					. DIRECTORY_SEPARATOR . $hash 
					. DIRECTORY_SEPARATOR . 'build.info'
				)
			) {
				throw new Exception('Its not build');
			}
			else {
				foreach (
					explode(';', file_get_contents($file)) as $modName
				) {
					$this->addMod(Mod::create()->setName($modName));
				}
			}
			return $this;
		}
		
		public function getMods()
		{
			return $this->mods;
		}
		
		public function addMod(Mod $mod)
		{
			$this->mods[$mod->getName()] = $mod;
			return $this;
		}
		
		public function getDependences($name)
		{
			$result = null; $depsExists = false;
			foreach ($this->getMods() as $mod) {
				$modDeps 	 = $mod->getDependence($name);
				$depsExists  = ($modDeps) ? true : false;
				if ($modDeps)
					$result  = 
				 		(is_null($result)) 
				 		? $modDeps 
				 		: array_intersect($modDeps, $result);
			}
			if ($depsExists && !$result)
				throw new Exception('No compatible modes');
				
			return $result;
		}
		
		public function getHash()
		{
			if ($this->getMods()) {
				$names = array_keys($this->getMods());
				sort($names);
				return md5(implode(':', $names));
			} else {
				return BASE_BUILD;
			}
		}
		
		public function getPath()
		{
			if ($this->mods)
				return BUILDS_DIR . DIRECTORY_SEPARATOR . $this->getHash();
			else 
				return BASE_DIR;
		}
		
		public function exists()
		{
			return is_dir($this->getPath());
		}
		
		public function save($ignoreExists = false)
		{
			if (!is_dir($this->getPath()) || $ignoreExists) {
				//DirUtils::copy(BASE_DIR, $this->getPath());
			   	@system("cp -r -p ".BASE_DIR." ".$this->getPath());
				$names = array_keys($this->getMods());
				sort($names);
				file_put_contents(
					$this->getPath() . DIRECTORY_SEPARATOR . 'build.info',
					implode(';',$names)
				);
			} else {
				throw new Exception('Saving build unavailable');
			}

			return $this;
		}
		
		public function inBuild(Mod $mod)
		{
			return isset($this->mods[$mod->getName()]);
		}
		
	}

?>