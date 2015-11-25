<?php
/** 
*
* viewforum [Swedish] (version 0.5.0 - 3.0.RC5)
*
* @package language
* @version $Id: viewforum.php,v 1.12 2007/08/25 14:15:13 virtuality Exp $
* @copyright (c) 2006 phpBB Group 
* @author (c) 2006-2007 Jonathan Gulbrandsen (jonathan@carlssonplanet.com)
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
	'ACTIVE_TOPICS'			=> 'Aktiva trådar',
	'ANNOUNCEMENTS'			=> 'Anslag',

	'FORUM_PERMISSIONS'		=> 'Kategorirättigheter',

	'ICON_ANNOUNCEMENT'		=> 'Anslag',
	'ICON_STICKY'			=> 'Notis',

	'LOGIN_NOTIFY_FORUM'	=> 'Du har underrättats om denna kategori, logga in för att visa den.',

	'MARK_TOPICS_READ'		=> 'Märk alla trådar som lästa',

	'NEW_POSTS_HOT'			=> 'Nya inlägg [ Populär ]',
	'NEW_POSTS_LOCKED'		=> 'Nya inlägg [ Låst ]',
	'NO_NEW_POSTS_HOT'		=> 'Inga nya inlägg [ Populär ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Inga nya inlägg [ Låst ]',
	'NO_READ_ACCESS'		=> 'Du har inte de rättigheter som krävs för att läsa trådar i denna kategori.',

	'POST_FORUM_LOCKED'		=> 'Kategorin är låst',

	'TOPICS_MARKED'			=> 'Trådarna i denna kategori märktes som lästa.',

	'VIEW_FORUM'			=> 'Visa kategori',
	'VIEW_FORUM_TOPIC'		=> '1 tråd',
	'VIEW_FORUM_TOPICS'		=> '%d trådar',
));

?>