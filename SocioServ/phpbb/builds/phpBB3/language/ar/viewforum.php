<?php
/** 
*
* viewforum.php [Arabic]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-06-16 - phpBBegypt.com
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

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'	=> 'مواضيع نشطة',
	'ANNOUNCEMENTS'	=> 'إعلانات',
	'FORUM_PERMISSIONS'	=> 'صلاحيات المنتدى',
	'ICON_ANNOUNCEMENT'	=> 'إعلان',
	'ICON_STICKY'	=> 'مثبت',
	'LOGIN_NOTIFY_FORUM'	=> 'لديك تنبيه عن هذا المنتدى ، فضلاً سجل دخولك لتراه',
	'MARK_TOPICS_READ'	=> 'اعتبر المواضيع مقروءة',
	'NEW_POSTS_HOT'			=> 'مشاركات جديدة [ نشط ]',
	'NEW_POSTS_LOCKED'		=> 'مشاركات جديدة [ مغلق ]',
	'NO_NEW_POSTS_HOT'		=> 'لا مشاركات جديدة [ نشط ]',
	'NO_NEW_POSTS_LOCKED'	=> 'لا مشاركات جديدة [ مغلق ]',
	'NO_READ_ACCESS'		=> 'ليس لديك الصلاحيات الكافية لقراءة المواضيع في هذا المنتدى',
	'POST_FORUM_LOCKED'	=> 'هذا المنتدى مغلق',
	'TOPICS_MARKED'	=> 'المواضيع في هذا المنتدى أعتبرت مقروءة',
	'VIEW_FORUM'	=> 'مشاهدة المنتدى',
	'VIEW_FORUM_TOPIC'		=> '1 موضوع',
	'VIEW_FORUM_TOPICS'	=> '%d مواضيع',
));

?>