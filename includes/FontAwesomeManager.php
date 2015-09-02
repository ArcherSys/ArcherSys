<?php
  namespace ArcherSys\Viewer\Styles;
  require_once 'FontAwesomeOperable.php';
  use ArcherSys\Viewer\Styles\FontAwesomeOperable;
  class FontAwesomeManager implements FontAwesomeOperable{
  	/**
  	 * Creates a new Logo Regularly with Font Awesome
  	 * @param string $logo
  	 */
  	static function addLogo($logo){
  		echo "<i class=\" fa fa-".$logo."\"></i>";
  		
  	}
  	/**
  	 * Creates a new Logo using larger sizes with Font Awesome
  	 * @param string $logo
  	 */
  	static function addLargeLogo($logo){
  		echo "<i class=\"fa fa-large fa-".$logo."\"></i>";
  	}
  	/** Creates A Smaller Logo with Font Awesome
  	 *  @param string $logo The Font-Awesome Icon Type you want to Have Rendered
  	 * 
  	 */
  	 static function addSmallLogo($logo){
  	 	echo "<i class=\"fa fa-small fa-".$logo."\"></i>";
  	 }
  	 /** Creates an Alt Version of a Font Awesome Icon
  	  *  @param string $logo The Font-Awesome Icon Type you want to Have Rendered
  	  *
  	  */
  	 static function addAlternativeLogo($logo){
  	 	echo "<i class=\"fa fa-".$logo." alt\"></i>";
  	 }
  }
  ?>