<?php
/** 
*
* viewforum [Finnish [Fin]]
*
* @package language
* @copyright (c) 2006 phpBB Group 
* @author 2006-11-14 - Lurttinen@phpbbsuomi.com
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
	'ACTIVE_TOPICS'			=> 'Aktiiviset viestiketjut',
	'ANNOUNCEMENTS'			=> 'Tiedotteet',

	'FORUM_PERMISSIONS'		=> 'Keskustelualueen oikeudet',
	
	'ICON_ANNOUNCEMENT'		=> 'Tiedote',
	'ICON_STICKY'			=> 'Pysyvä',

	'LOGIN_NOTIFY_FORUM'	=> 'Teille on kerrottu tästä keskustelufoorumista. kirjaudu sisään nähdäksesi sen.',

	'MARK_TOPICS_READ'		=> 'Merkitse viestit luetuiksi',

	'NEW_POSTS_HOT'			=> 'Uusia viestejä [ Suosittu ]',
	'NEW_POSTS_LOCKED'		=> 'Uusia viestejä [ Lukittu ]',
	'NO_NEW_POSTS_HOT'		=> 'Ei uusia viestejä [ Suosittu ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Ei uusia viestejä [ Lukittu ]',
	'NO_READ_ACCESS'		=> 'Käytössäsi olevat oikeudet eivät salli sinun lukea tällä alueella olevia viestejä.',

	'POST_FORUM_LOCKED'		=> 'Keskustelualue on lukittu',

	'TOPICS_MARKED'			=> 'Tämän alueen viestit ovat merkitty luetuiksi',

	'VIEW_FORUM'			=> 'Näytä alue',
	'VIEW_FORUM_TOPIC'		=> '1 viestiketju',
	'VIEW_FORUM_TOPICS'		=> '%d viestiketjua',
));

?>