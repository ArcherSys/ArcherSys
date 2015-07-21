<?php

	class EditAction extends AbstractAction 
	{
		/**
		 * @return EditAction
		 */
		public static function me()
		{
			return Singleton::getInstance(__CLASS__);
		}
		
		/**
		 * @return EditAction
		 */
		public function setParentAction(OpenAction $action)
		{
			return parent::setParentAction($action);
		}
		
		/**
		 * @return EditAction
		 */
		public function run()
		{
			$i = 0;
			while ($i > -1) {

				$findElement   = $this->getXmlElement()->find[$i];
				$actionElement = $this->getXmlElement()->action[$i];
				$inlineElement = $this->getXmlElement()->{'inline-edit'}[$i];

				if (is_null($findElement))
					break;
				if ($actionElement)
					$this->processAction($findElement, $actionElement);
				if ($inlineElement)
					$this->processAction($findElement, $inlineElement);
					
				$i++;
			}
			return $this;
		}
		
		/**
		 * @return EditAction
		 */
		private function processAction(
			SimpleXMLElement $find, SimpleXMLElement $action
		) {
			$findData 	= self::get_cdata($find);
			$actionData	= self::get_cdata($action);
			
			if (
				strpos($this->getParentAction()->getSource(), $findData)===false
			) {
//				var_dump($findData);
				return $this;
//				throw new Exception('No equals');
			}
				
			$actionType	= 
				"do_" 
				. str_replace(
					'-', '_', strtolower((string)$action->attributes()->type)
				);
				
			if (method_exists($this, $actionType)) {
				$this->getParentAction()->setSource(
					$this->$actionType(
						$findData, 
						$actionData,
						$this->getParentAction()->getSource()
					)
				);
			}
			
			return $this;
		}
		
		/**
		 * @return EditAction
		 */
		private function processInlineAction(
			SimpleXMLElement $find, SimpleXMLElement $inline
		) {
			$findData 		= self::get_cdata($find);
			$inlineFindData	= self::get_cdata($inline->{'inline-find'});
			
			if (
				strpos($this->getParentAction()->getSource(), $findData)===false
			) 
				throw new Exception('No equals');
				
			$actionData = self::get_cdata($inline->{'inline-action'});
			$actionType	= 
				"do_" 
				. str_replace(
					'-', 
					'_', 
					strtolower(
						(string)$inline->{'inline-action'}->attributes()->type
					)
				);
				
			if (method_exists($this, $actionType)) {
				$this->getParentAction()->setSource(
					str_replace(
						$findData,
						$this->$action(
							$inlineFindData, 
							$actionData,
							$findData
						),
						$this->getParentAction()->getSource()
					)
				);
			}
			return $this;
		}
		
		private function do_after_add($find, $data, $source)
		{
			return 
				  substr($source, 0, stripos($source, $find) + strlen($find))
				. "\n" . $data
				. substr($source, stripos($source, $find) + strlen($find));
		}
		
		private function do_before_add($find, $data, $source)
		{
			return 
				  substr($source, 0, stripos($source, $find))
				. $data
				. substr($source, stripos($source, $find));
		}
		
		private function do_replace($find, $data, $source)
		{			
			return 
				 substr($source, 0, stripos($source, $find))
				. $data
				. substr($source, stripos($source, $find) + strlen($find));
		}
	}

?>