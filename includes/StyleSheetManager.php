<?php
namespace ArcherSys\Styles;
class StyleSheetManager{
	static function AddStyle($style){
		echo '<link rel="stylesheet" href="'.$style.'.css">';
		
	}
}