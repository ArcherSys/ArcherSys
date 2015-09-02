<?php
/** 
*
* @package gallery
* @version $Id: gallery_main.php 23 2007-07-19 16:26:54Z Handyman $
* @copyright (c) 2007 StarTrekGuide Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package module_install
*/
class gallery_main_info
{
	function module()
	{
		return array(
			'filename'	=> 'gallery_main',
			'title'		=> 'GALLERY_MAIN',
			'version'	=> '0.1.0',
			'modes'		=> array(
				'browse'	=> array('title' => 'GALLERY_BROWSE', 'auth' => '', 'cat' => array('GALLERY_MAIN')),
				'gallery'	=> array('title' => 'GALLERY_GALLERY', 'auth' => '', 'cat' => array('GALLERY_MAIN')),
				'photo'		=> array('title' => 'GALLERY_PHOTO', 'auth' => '', 'cat' => array('GALLERY_MAIN')),
				'rating'	=> array('title' => 'GALLERY_RATING', 'auth' => '', 'cat' => array('GALLERY_MAIN')),
				'recent'	=> array('title' => 'GALLERY_RECENT', 'auth' => '', 'cat' => array('GALLERY_MAIN')),
				'upload'	=> array('title' => 'GALLERY_UPLOAD', 'auth' => '', 'cat' => array('GALLERY_GALLERY')),
				'views'		=> array('title' => 'GALLERY_VIEWS', 'auth' => '', 'cat' => array('GALLERY_MAIN')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>