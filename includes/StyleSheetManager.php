<?php
namespace ArcherSys\Styles;
class StyleSheetManager{
	static function AddStyle($style,$usephp){
	    $suffix = ($usephp) ? '.php"/>' : '">';
		echo '<link rel="stylesheet" href="'.$style.'.css'.$suffix;
		
	}
}