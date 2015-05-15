<?php

  namespace ArcherSys\Viewer\Styles;
  /** FontAwesome Interface for All Objects
   *
   * @package ArcherSysOS
   * @author Weldon Henson
   *
   */
  interface FontAwesomeOperable{
  	/**
  	 * Creates a new Logo Regularly with Font Awesome
  	 * @param string $logo
  	 */
  	static function addLogo($logo);
  	/**
  	 * Creates a new Logo using larger sizes with Font Awesome
  	 * @param string $logo
  	 */
  	static function addLargeLogo($logo);

  	/** Creates A Smaller Logo with Font Awesome
  	 *  @param string $logo
  	 *
  	 */
  	static function addSmallLogo($logo);
  	static function addAlternativeLogo($logo);
  } 
  
  ?>