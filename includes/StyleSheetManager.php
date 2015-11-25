<?php
namespace ArcherSys\Styles;
class StyleSheetManager{
<<<<<<< HEAD
	static function AddStyle($style){
		echo '<link rel="stylesheet" href="'.$style.'.css">';
=======
	static function AddStyle($style,$usephp){
	    $suffix = ($usephp) ? '.php"/>' : '">';
		echo '<link rel="stylesheet" href="'.$style.'.css'.$suffix;
>>>>>>> 5e7b2c757565054acf1b6acdbff6480e574a8d68
		
	}
}