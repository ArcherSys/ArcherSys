<?php

	interface FSUtils
	{
		public static function copy($source, $destination);
		public static function move($source, $destination);
		public static function delete($source);
	}

?>