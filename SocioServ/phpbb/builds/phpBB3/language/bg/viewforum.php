<?php
/** 
*
* viewforum [English]
*
* @package language
* @version $Id: viewforum.php,v 1.15 2006/12/01 16:12:15 shs Exp $
* @copyright (c) 2005 phpBB Group 
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
	'ACTIVE_TOPICS'			=> 'Активни теми',
	'ANNOUNCEMENTS'			=> 'Съобщения',

	'FORUM_PERMISSIONS'		=> 'Права на форума',

	'ICON_ANNOUNCEMENT'		=> 'Важна тема',
	'ICON_STICKY'			=> 'Закачена',

	'LOGIN_NOTIFY_FORUM'	=> 'Трябва да влезете в акаунта си.',

	'MARK_TOPICS_READ'		=> 'Маркирайте темите като прочетени',

	'NEW_POSTS_HOT'			=> 'Нови мнения [ Популярна ]',
	'NEW_POSTS_LOCKED'		=> 'Нови мнения [ Заключена ]',
	'NO_NEW_POSTS_HOT'		=> 'Няма нови мнения [ Популярна ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Няма нови мнения [ Заключена ]',
	'NO_READ_ACCESS'		=> 'Вия нямате нужните права за да четете този форум',

	'POST_FORUM_LOCKED'		=> 'Форума е заключен',

	'TOPICS_MARKED'			=> 'Темите са маркирани като прочетени',

	'VIEW_FORUM'			=> 'Прегледай форум',
	'VIEW_FORUM_TOPIC'		=> '1 тема',
	'VIEW_FORUM_TOPICS'		=> '%d теми',
));

?>