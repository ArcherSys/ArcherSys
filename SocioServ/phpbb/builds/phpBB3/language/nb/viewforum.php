<?php
/** 
*
* viewforum.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-05-23 - phpBB.no
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
	'FORUM_PERMISSIONS'	=> 'Forumrettigheter',
	'NO_READ_ACCESS'	=> 'Du har ikke rettighetene som kreves for &aring; lese emner i dette forumet.',
	'ACTIVE_TOPICS'	=> 'Aktive emner',
	'ANNOUNCEMENTS'	=> 'Annonseringer',
	'ICON_ANNOUNCEMENT'	=> 'Annonsering',
	'ICON_STICKY'	=> 'Prioritert',
	'LOGIN_NOTIFY_FORUM'	=> 'Du har blitt informert om dette forumet, vennligst logg inn for &aring; se det.',
	'MARK_TOPICS_READ'	=> 'Marker alle emner som lest',
	'NEW_POSTS_HOT'	=> 'Nye innlegg [ Popul&aelig;r ]',
	'NEW_POSTS_LOCKED'	=> 'Nye innlegg [ Stengt ]',
	'NO_NEW_POSTS_HOT'	=> 'Ingen nye innlegg [ Popul&aelig;r ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Ingen nye innlegg [ Stengt ]',
	'POST_FORUM_LOCKED'	=> 'Forumet er stengt',
	'TOPICS_MARKED'	=> 'Emnene i dette forumet er markert som lest',
	'VIEW_FORUM'	=> 'Vis forum',
	'VIEW_FORUM_TOPIC'	=> '1 emne',
	'VIEW_FORUM_TOPICS'	=> '%d emner',
));

?>