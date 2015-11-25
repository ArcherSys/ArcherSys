<?php
/** 
*
* viewtopic.php [Norsk [ NO ]]
*
* @package language
* @copyright (c) 2007 phpBB Group 
* @author 2007-03-26 - phpBB Gruppen
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
	'NO_VOTES'	=> 'Ingen stemmer',
	'POLL_ENDED_AT'	=> 'Stemmeperioden gikk ut %s',
	'ATTACHMENT'	=> 'Vedlegg',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Vedlegg er ikke tillatt',
	'BOOKMARK_ADDED'	=> 'Emnet er bokmerket',
	'BOOKMARK_REMOVED'	=> 'Bokmerket er fjernet',
	'BOOKMARK_TOPIC'	=> 'Legg i bokmerker',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Fjern fra bokmerker',
	'BUMPED_BY'	=> 'Sist flyttet til topp av %1$s den %2$s',
	'BUMP_TOPIC'	=> 'Flytt til toppen',
	'CODE'	=> 'Kode',
	'DELETE_TOPIC'	=> 'Slett emne',
	'DOWNLOAD_NOTICE'	=> 'Du har ikke de nødvendige tillatelsene til å se vedleggene til dette innlegget.',
	'EDITED_TIMES_TOTAL'	=> 'Sist endret av %1$s den %2$s, endret %3$d ganger.',
	'EDITED_TIME_TOTAL'	=> 'Sist endret av %1$s den %2$s, endret %3$d gang',
	'EMAIL_TOPIC'	=> 'Send e-post til en venn',
	'ERROR_NO_ATTACHMENT'	=> 'Vedlegget finnes ikke lenger',
	'FILE_NOT_FOUND_404'	=> 'Filen <strong>«%s»</strong> finnes ikke.',
	'FORK_TOPIC'	=> 'Kopier emne',
	'LINKAGE_FORBIDDEN'	=> 'Du er ikke tillatelse til å se, laste ned, eller lage linker fra/til denne siden.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Du er blitt informert om dette emnet, vennligst logg inn for å se det.',
	'LOGIN_VIEWTOPIC'	=> 'Du må være registrert og logget inn for å se dette emnet.',
	'MAKE_ANNOUNCE'	=> 'Gjør om til annonsering',
	'MAKE_GLOBAL'	=> 'Gjør om til global annonsering',
	'MAKE_NORMAL'	=> 'Gjør om til vanlig emne',
	'MAKE_STICKY'	=> 'Gjør om til prioritet',
	'MAX_OPTIONS_SELECT'	=> 'Du kan velge opp til <strong>%d</strong> alternativer',
	'MAX_OPTION_SELECT'	=> 'Du kan velge <strong>1</strong> alternativ',
	'MISSING_INLINE_ATTACHMENT'	=> 'Vedlegget <strong>%s</strong> er ikke lenger tilgjengelig',
	'MOVE_TOPIC'	=> 'Flytt emne',
	'NO_ATTACHMENT_SELECTED'	=> 'Du har ikke valgt noe vedlegg.',
	'NO_NEWER_TOPICS'	=> 'Det er ingen nyere emner i dette forumet',
	'NO_OLDER_TOPICS'	=> 'Det er ingen eldre emner i dette forumet',
	'NO_UNREAD_POSTS'	=> 'Det er ingen nye, uleste innlegg i dette emnet.',
	'NO_VOTE_OPTION'	=> 'Du må velge et alternativ når du stemmer.',
	'POLL_RUN_TILL'	=> 'Avstemningen varer til %s',
	'POLL_VOTED_OPTION'	=> 'Du stemte ',
	'PRINT_TOPIC'	=> 'Utskriftsvennlig visning',
	'QUICK_MOD'	=> 'Moderatorverktøy',
	'QUOTE'	=> 'Sitat',
	'REPLY_TO_TOPIC'	=> 'Svar på emnet',
	'RETURN_POST'	=> '%sTilbake til innlegget%s',
	'SUBMIT_VOTE'	=> 'Stem',
	'TOTAL_VOTES'	=> 'Antall stemmer',
	'UNLOCK_TOPIC'	=> 'Lås opp emne',
	'VIEW_INFO'	=> 'Vis detaljer',
	'VIEW_NEXT_TOPIC'	=> 'Neste emne',
	'VIEW_PREVIOUS_TOPIC'	=> 'Forrige emne',
	'VIEW_RESULTS'	=> 'Vis resultater',
	'VIEW_TOPIC_POST'	=> '1 innlegg',
	'VIEW_TOPIC_POSTS'	=> '%d innlegg',
	'VIEW_UNREAD_POST'	=> 'Gå til første uleste innlegg',
	'VISIT_WEBSITE'	=> 'Nettside',
	'VOTE_SUBMITTED'	=> 'Din stemme er blitt registrert',
	'WROTE'	=> 'skrev',
));

?>