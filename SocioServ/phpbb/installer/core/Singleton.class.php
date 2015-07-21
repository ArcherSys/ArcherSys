<?php

	abstract class Singleton
	{
		private static $instances = array();
		
		protected function __construct() {/* you can't create me */}
		
		final public static function getInstance(
			$class, $args = null /* , ... */
		)
		{
			// for Singleton::getInstance('class_name', $arg1, ...) calling
			if (2 < func_num_args()) {
				$args = func_get_args();
				array_shift($args);
			}
			
			if (!isset(self::$instances[$class])) {
				$object =
					$args
						? new $class($args)
						: new $class();
				
				if (!$object instanceof Singleton)
					throw new 
						Exception("Class '{$class}' is not a Singleton child");
				
				return self::$instances[$class] = $object;
			} else
				return self::$instances[$class];
		}
		
		final public static function getAllInstances()
		{
			return self::$instances;
		}
		
	}

?>