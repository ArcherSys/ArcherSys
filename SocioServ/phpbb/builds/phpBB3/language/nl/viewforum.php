<?php
/**
*
* viewforum [Dutch]
*
* @package language
* @version $Id: viewforum.php,v 1.0.0 2006/05/30 16:50:06 acydburn Exp $
* @copyright (c) 2005 phpBB Group modified by phpBB.nl (vertaalteam@phpbb.nl) in 2007
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
   exit;
}
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
	'ACTIVE_TOPICS'	=> 'Actieve onderwerpen',
	'ANNOUNCEMENTS'	=> 'Mededelingen',

	'FORUM_PERMISSIONS'	=> 'Forum permissies',
   
	'ICON_ANNOUNCEMENT'	=> 'Mededeling',
	'ICON_STICKY'		=> 'Sticky',

	'LOGIN_NOTIFY_FORUM'	=> 'Je bent op de hoogte gebracht van dit forum, log in om het te openen.',

	'MARK_TOPICS_READ'	=> 'Markeer onderwerpen als gelezen',

	'NEW_POSTS_HOT'			=> 'Nieuwe berichten [ populair ]',
	'NEW_POSTS_LOCKED'		=> 'Nieuwe berichten [ gesloten ]',
	'NO_NEW_POSTS_HOT'		=> 'Geen nieuwe berichten [ populair ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Geen nieuwe berichten [ gesloten ]',
	'NO_READ_ACCESS'		=> 'Je beschikt niet over de nodige permissies om de berichten in dit forum te kunnen lezen.',

	'POST_FORUM_LOCKED'	=> 'Het forum is gesloten',

	'TOPICS_MARKED'	=> 'De onderwerpen in dit forum zijn als gelezen gemarkeerd.',

	'VIEW_FORUM'		=> 'Toon forum',
	'VIEW_FORUM_TOPIC'	=> '1 onderwerp',
	'VIEW_FORUM_TOPICS'	=> '%d onderwerpen',
));
?>