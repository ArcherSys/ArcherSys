<?php


	class OpenAction extends AbstractAction
	{
		private $source;
		
		public function getSource()
		{
			return self::blameString($this->source);
		}
		
		/**
		 * @return OpenAction
		 */
		public function setSource($source)
		{
			$this->source = $source;
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
		 * @return CopyAction
		 */
		public function setParentAction(InstallAction $action)
		{
			return parent::setParentAction($action);
		}
		
		public function run()
		{
			if (
				!($src = (string)$this->getXmlElement()->attributes()->src)
				||
				(
					strpos($src, '*') === false
					&&
					!file_exists(
						$this->getParentAction()->getBuild()->getPath()
						. DIRECTORY_SEPARATOR . $src
					)
				)
			) {
				throw new Exception('empty source filename');
			}

			if (strpos($src, '*') === false)
				$sources = array($src);
			else {
				if (is_dir(
						$dir = 
							$this->getParentAction()->getBuild()->getPath()
							. DIRECTORY_SEPARATOR 
							. substr($src, 0, strpos($src, '*') - 1)
					)
				) {
					foreach (
						array_keys(DirUtils::readDir($dir, DirUtils::DIRS))
						as 
						$name
					) {
						$sources[] = 
							substr($src, 0, strpos($src, '*')) 
							. $name . substr($src, strpos($src, '*')+1);
					}
				}
			}

			foreach ($sources as $source) {
				$file = 
					$this->getParentAction()->getBuild()->getPath()
					. DIRECTORY_SEPARATOR . $source;
				
				$this->setSource(file_get_contents($file));
				
				$pool = get_object_vars($this->getXmlElement()->children());
				if (!is_array($pool['edit'])) $pool['edit'] = array($pool['edit']);
				
				foreach ($pool['edit'] as $editElement) {
					EditAction::me()->
					setXmlElement($editElement)->
					setParentAction($this)->
					run();
				}
				
				if (!file_put_contents($file, $this->getSource())) {
					throw new Exception('Permision denied or another error');
				}
			}
		}
	}


?>