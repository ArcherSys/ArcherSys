<?php


	abstract class AbstractAction extends Singleton 
	{
		private $parentAction;
		private $xmlElement;
		
		/**
		 * @return AbstractAction
		 */
		public function getParentAction()
		{
			return $this->parentAction;
		}
		
		/**
		 * @return AbstractAction
		 */
		public function setParentAction(AbstractAction $action)
		{
			$this->parentAction = $action;
			return $this;
		}
		
		/**
		 * @return SimpleXMLElement
		 */
		public function getXmlElement()
		{
			return $this->xmlElement;
		}
		
		/**
		 * @return AbstractAction
		 */
		public function setXmlElement(SimpleXMLElement $element)
		{
			$this->xmlElement = $element;
			return $this;
		}
		
		public static function blameString($str)
		{
			return 
				preg_replace(
					'/(  +)/ms', 
					' ', 
					str_replace("\t", '   ', $str)
				);
		}
		
		public static function get_cdata(SimpleXMLElement $e)
		{
			if (
				!preg_match(
					"/<{$e->getName()}[^>]*>(.*)<\/{$e->getName()}>/ism", 
					$e->asXML(), 
					$sub)
				||
				empty($sub[1])
			) {
				throw new Exception('Undefined error in '. __CLASS__);
			} else {
				$sub[1] = 
					preg_replace('/<\!\[CDATA\[(.*)\]\]>/sm', "$1", $sub[1]);
				return self::blameString($sub[1]);
			}
		}
		
		abstract public function run();
	}


?>