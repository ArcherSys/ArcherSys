<?php
/** 
*
* viewtopic [Swedish] (version 0.5.0 - 3.0.RC5)
*
* @package language
* @version $Id: viewtopic.php,v 1.12 2007/08/25 14:15:13 virtuality Exp $
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
	'ATTACHMENT'						=> 'Bilaga',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Bilagefunktionen har inaktiverats.',

	'BOOKMARK_ADDED'		=> 'Tråden lades till som bokmärke.',
	'BOOKMARK_REMOVED'		=> 'Tråden togs bort från bokmärkena.',
	'BOOKMARK_TOPIC'		=> 'Lägg till som bokmärke',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Ta bort från bokmärken',
	'BUMPED_BY'				=> 'Senast uppknuffad av %1$s %2$s.',
	'BUMP_TOPIC'			=> 'Knuffa upp tråden',

	'CODE'					=> 'Kod',

	'DELETE_TOPIC'			=> 'Ta bort tråden',
	'DOWNLOAD_NOTICE'		=> 'Du har inte de rättigheter som krävs för att öppna de filer som bifogats till detta inlägg.',

	'EDITED_TIMES_TOTAL'	=> 'Senast redigerad av %1$s %2$s, redigerad totalt %3$d gånger.',
	'EDITED_TIME_TOTAL'		=> 'Senast redigerad av %1$s %2$s, redigerad totalt %3$d gång.',
	'EMAIL_TOPIC'			=> 'Skicka som e-post till en vän',
	'ERROR_NO_ATTACHMENT'	=> 'Den valda bilagan finns inte längre.',

	'FILE_NOT_FOUND_404'	=> 'Filen <strong>%s</strong> finns inte.',
	'FORK_TOPIC'			=> 'Kopiera tråden',

	'LINKAGE_FORBIDDEN'		=> 'Du har inte tillåtelse att öppna, ladda ner eller länka från/till denna sida.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Du har underrättats om denna tråd, logga in för att visa den.',
	'LOGIN_VIEWTOPIC'		=> 'Forumet kräver att du registrerar dig och loggar in för att visa denna tråd.',

	'MAKE_ANNOUNCE'				=> 'Gör till “anslag”',
	'MAKE_GLOBAL'				=> 'Gör till “globalt anslag”',
	'MAKE_NORMAL'				=> 'Gör till “normal tråd”',
	'MAKE_STICKY'				=> 'Gör till “notis”',
	'MAX_OPTIONS_SELECT'		=> 'Du kan välja upp till <strong>%d</strong> alternativ',
	'MAX_OPTION_SELECT'			=> 'Du kan välja <strong>1</strong> alternativ',
	'MISSING_INLINE_ATTACHMENT'	=> 'Bilagan <strong>%s</strong> finns inte längre',
	'MOVE_TOPIC'				=> 'Flytta tråd',

	'NO_ATTACHMENT_SELECTED'=> 'Du valde inga bilagor att ladda ner eller öppna.',
	'NO_NEWER_TOPICS'		=> 'Det finns inga nyare trådar i denna kategori.',
	'NO_OLDER_TOPICS'		=> 'Det finns inga äldre trådar i denna kategori.',
	'NO_UNREAD_POSTS'		=> 'Det finns inga nya olästa inlägg i denna tråd.',
	'NO_VOTE_OPTION'		=> 'Du måste välja ett alternativ för att rösta.',
	'NO_VOTES'				=> 'Inga röster',

	'POLL_ENDED_AT'			=> 'Omröstningen slutade %s',
	'POLL_RUN_TILL'			=> 'Omröstningen varar till %s',
	'POLL_VOTED_OPTION'		=> 'Du röstade för detta alternativ',
	'PRINT_TOPIC'			=> 'Utskriftsvänlig version',

	'QUICK_MOD'				=> 'Snabb-moderationsverktyg',
	'QUOTE'					=> 'Citera',

	'REPLY_TO_TOPIC'		=> 'Svara på tråd',
	'RETURN_POST'			=> '%sGå till inlägget%s',

	'SUBMIT_VOTE'			=> 'Rösta',

	'TOTAL_VOTES'			=> 'Antal röster',

	'UNLOCK_TOPIC'			=> 'Lås upp tråden',

	'VIEW_INFO'				=> 'Inläggsuppgifter',
	'VIEW_NEXT_TOPIC'		=> 'Nästa tråd',
	'VIEW_PREVIOUS_TOPIC'	=> 'Föregående tråd',
	'VIEW_RESULTS'			=> 'Visa resultat',
	'VIEW_TOPIC_POST'		=> '1 inlägg',
	'VIEW_TOPIC_POSTS'		=> '%d inlägg',
	'VIEW_UNREAD_POST'		=> 'Första olästa inlägg',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Din röst räknades.',

));

?>