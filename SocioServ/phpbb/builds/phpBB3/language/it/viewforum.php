<?php
/** 
*
* viewforum [Italian]
*
* @package language
* @version $Id: viewforum.php,v 1.17 2007/05/10 15:31:21 acydburn Exp $
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
	'ACTIVE_TOPICS'			=> 'Argomenti attivi',
	'ANNOUNCEMENTS'			=> 'Annunci',

	'FORUM_PERMISSIONS'		=> 'Permessi forum',

	'ICON_ANNOUNCEMENT'		=> 'Annuncio',
	'ICON_STICKY'			=> 'Importante',

	'LOGIN_NOTIFY_FORUM'	=> 'Hai ricevuto un avviso per questo forum, accedi per visualizzarlo.',

	'MARK_TOPICS_READ'		=> 'Segna argomenti come già letti',

	'NEW_POSTS_HOT'			=> 'Nuovi messaggi [ Popolari ]',
	'NEW_POSTS_LOCKED'		=> 'Nuovi messaggi [ Bloccati ]',
	'NO_NEW_POSTS_HOT'		=> 'No nuovi messaggi [ Popolari ]',
	'NO_NEW_POSTS_LOCKED'	=> 'No nuovi messaggi [ Bloccati ]',
	'NO_READ_ACCESS'		=> 'Non hai i permessi per leggere gli argomenti di questo forum.',

	'POST_FORUM_LOCKED'		=> 'Questo forum è bloccato',

	'TOPICS_MARKED'			=> 'Gli argomenti di questo forum sono stati segnati come già letti.',

	'VIEW_FORUM'			=> 'Visualizza forum',
	'VIEW_FORUM_TOPIC'		=> '1 argomento',
	'VIEW_FORUM_TOPICS'		=> '%d argomenti',
));

?>