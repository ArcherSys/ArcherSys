<?php
/** 
*
* gallery [English]
*
* @package gallery
* @version $Id: gallery.php 23 2007-07-19 16:26:54Z Handyman $
* @copyright (c) 2007 StarTrekGuide Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common language entries
$lang = array_merge($lang, array(
	'ADD_COMMENT'			=> 'Enter a Comment!',
	'ALREADY_RATED'			=> 'You have already rated this photo',
	'BBCODE'				=> 'BBCode',
	'BYTES'					=> 'Bytes',
	'CATEGORY'				=> 'Category',
	'COMMENT'				=> 'Comment',
	'COMMENTS'				=> 'Comments',
	'DESCRIPTION'			=> 'Description',
	'GALLERY'				=> 'Gallery',
	'GALLERY_BROWSE'		=> 'Browse',
	'GALLERY_GALLERY'		=> 'My Gallery',
	'GALLERY_PHOTO'			=> 'View Photo',
	'GALLERY_RATING'		=> 'Rating',
	'GALLERY_RECENT'		=> 'Recent',
	'GALLERY_UPLOAD'		=> 'Upload',
	'GALLERY_VIEWS'			=> 'Views',
	'GALLERY_WRONG_SIZE'	=> 'This photo exceeds the max photo size',
	'LOGIN_EXPLAIN_UPLOAD'	=> 'You must be logged in to upload photos',
	'NAME'					=> 'Name',
	'NO_IMAGES'				=> 'There are no images in this gallery',
	
	'PHOTO_NAME'			=> 'Name',
	
	'PHOTOS'				=> 'Photos',
	'POSTER'				=> 'Poster',
	'RATE_THIS'				=> 'Rate it',
	'RATING'				=> 'Rating',
	'SIZE'					=> 'Size',
	'TYPE'					=> 'Type',
	'UPLOAD'				=> 'Upload',
	'YOU_RATED'				=> 'You rated this photo',
));

?>