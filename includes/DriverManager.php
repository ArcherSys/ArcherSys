<?php
namespace ArcherSys\Drivers;
class DriverManager{
	static function loadDriver($path){
		/*
		 * Loads a Javascript Driver file ("*.js")
		 */
		echo "<script src='/drives/".$path.".js'></script>";
	}
}
?>