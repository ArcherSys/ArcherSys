<?php
/**
*
* viewforum [Slovak]
*
* @package language
* @version $Id: viewforum.php,v 1.14 2006/11/19 20:08:15 acydburn Exp $
* @copyright (c) Leachim - Leachimster@gmail.com
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
	'ACTIVE_TOPICS'			=> 'Obľúbené témy',
	'ANNOUNCEMENTS'			=> 'Oznámenia',

	'FORUM_PERMISSIONS'		=> 'Oprávnenia fóra',

	'ICON_ANNOUNCEMENT'		=> 'Oznámenie',
	'ICON_STICKY'			=> 'Dôležité',

	'LOGIN_NOTIFY_FORUM'	=> 'Boli ste upozornený na toto fórum, na jeho zobrazenie sa musíte prihlásiť.',

	'MARK_TOPICS_READ'		=> 'Označiť témy ako prečítané',

	'NEW_POSTS_HOT'			=> 'Nové príspevky [ Obľúbené ]',
	'NEW_POSTS_LOCKED'		=> 'Nové príspevky [ Zamknuté ]',
	'NO_NEW_POSTS_HOT'		=> 'Žiadne nové príspevky [ Obľúbené ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Žiadne nové príspevky [ Zamknuté ]',
	'NO_READ_ACCESS'		=> 'Nemáte požadované oprávnenie na zobrazenie tém v tomto fóre.',

	'POST_FORUM_LOCKED'		=> 'Fórum je zamknuté',

	'TOPICS_MARKED'			=> 'Všetky témy v tomto fóre boli označené ako prečítané.',

	'VIEW_FORUM'			=> 'Zobraziť fórum',
	'VIEW_FORUM_TOPIC'		=> 'Počet tém: 1',
	'VIEW_FORUM_TOPICS'		=> 'Počet tém: %d',
));

?>
