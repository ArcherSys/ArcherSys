<?php
namespace ArcherSys\Config;
class DescriptionManager {
static function addDescription($description){
	echo '<meta name="description" content="'.$description.'">';
	
}
static function addCharset(){
	echo '<meta charset="utf-8">';
}
static function addViewport($viewport){
	echo '
	<meta name="viewport" content="'.$viewport.'">';
}
static function addAuthor($author){
	echo '<meta name="author" content="'.$author.'">';
}
}
class HTTPDescriptionManager extends DescriptionManager{
	static function addCompatibilityConfig($compat){
		echo '<meta http-equiv="X-UA-Compatible" content="'.$compat.'">';
	}
}