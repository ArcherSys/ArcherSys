<?php

	class CopyAction extends AbstractAction 
	{
		/**
		 * @return CopyAction
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
			$pool = get_object_vars($this->getXmlElement());
			if (!is_array($pool['file'])) $pool['file'] = array($pool['file']);
			
			foreach ($pool['file'] as $fileElement) {
				$from 	= (string)$fileElement->attributes()->from;
				$to		= (string)$fileElement->attributes()->to;

				if (!$from || !$to) continue;
				
				if (strpos($to ,'language/')!==false) {
					$dirs = 
						DirUtils::getDirs(
							$this->getParentAction()->getBuild()->getPath()
							. DIRECTORY_SEPARATOR . 'language'
							,
							false
						);
					foreach ($dirs as $dir) {
						FileUtils::copy(
							$this->
							getParentAction()->
							getCurrentMod()->
							getPath() . DIRECTORY_SEPARATOR . $from
							,
							$this->
							getParentAction()->
							getBuild()->
							getPath()
							.DIRECTORY_SEPARATOR 
							. preg_replace(
						    	'!language/(\w*)/!iS', 
						    	'language/' . $dir . '/', 
						    	$to
						    )
						);
					}
				} elseif (strpos($from, "*") && strpos($to, "*")) {
					$from = dirname(
						$this->
						getParentAction()->
						getCurrentMod()->
						getPath() . DIRECTORY_SEPARATOR .$from
					);
					
					$to = dirname(
						$this->
						getParentAction()->
						getBuild()->
						getPath()
						.DIRECTORY_SEPARATOR . $to
					);
					
					if(is_dir($to)) {
						DirUtils::copyContent($from, $to);
					} else {
						DirUtils::copy($from, $to);
					}					
				} else {
					if (
						!is_dir(
							$this->
							getParentAction()->
							getCurrentMod()->
							getPath() . DIRECTORY_SEPARATOR . $from
						)
					) {
						FileUtils::copy(
							$this->
							getParentAction()->
							getCurrentMod()->
							getPath() . DIRECTORY_SEPARATOR . $from
							,
							$this->
							getParentAction()->
							getBuild()->
							getPath() . DIRECTORY_SEPARATOR . $to
						);
					} else {
						DirUtils::copy(
							$this->
							getParentAction()->
							getCurrentMod()->
							getPath() . DIRECTORY_SEPARATOR . $from
							,
							$this->
							getParentAction()->
							getBuild()->
							getPath() . DIRECTORY_SEPARATOR . $to
						);
					}
				}
			}
		}
	}

?>