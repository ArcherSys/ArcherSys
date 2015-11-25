<?php
/** 
*
* search [Swedish] (version 0.5.0 - 3.0.RC5)
*
* @package language
* @version $Id: search.php,v 1.11 2007/08/25 14:15:13 virtuality Exp $
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
	'ALL_AVAILABLE'			=> 'Alla tillgängliga',
	'ALL_RESULTS'			=> 'Visa alla resultat',

	'DISPLAY_RESULTS'		=> 'Visa resultat som',

	'FOUND_SEARCH_MATCH'		=> '%d träff',
	'FOUND_SEARCH_MATCHES'		=> '%d träffar',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Fler än %d träffar',

	'GLOBAL'				=> 'Globalt anslag',

	'IGNORED_TERMS'			=> 'ignorerat',
	'IGNORED_TERMS_EXPLAIN'	=> 'Följande ord i din sökfråga ignorerades eftersom de är för vanliga: <strong>%s</strong>.',

 	'JUMP_TO_POST'			=> 'Gå till inlägg',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Forumet kräver att du registrerar dig och loggar in för att visa dina egna inlägg.',
	
	'NO_KEYWORDS'			=> 'Du måste ange minst ett ord att söka efter. Varje ord måste bestå av minst %d tecken och inte mer än %d tecken, exklusive jokertecken.',
	'NO_RECENT_SEARCHES'	=> 'Inga sökningar har gjorts nyligen.',
	'NO_SEARCH'				=> 'Du har inte tillåtelse att använda söksystemet.',
	'NO_SEARCH_RESULTS'		=> 'Inga träffar hittades.',
	'NO_SEARCH_TIME'		=> 'Du kan inte söka just nu. Försök igen om några minuter.',
	'WORD_IN_NO_POST'		=> 'Inga inlägg hittades eftersom ordet <strong>%s</strong> inte finns i något inlägg.',
	'WORDS_IN_NO_POST'		=> 'Inga inlägg hittades eftersom orden <strong>%s</strong> inte finns i något inlägg.',

	'POST_CHARACTERS'		=> 'tecknen av inlägget',

	'RECENT_SEARCHES'		=> 'Senaste sökningarna',
	'RESULT_DAYS'			=> 'Begränsa resultaten till inlägg nyare än',
	'RESULT_SORT'			=> 'Sortera resultat efter',
	'RETURN_FIRST'			=> 'Skriv ut första',
 	'RETURN_TO_SEARCH_ADV'	=> 'Återgå till avancerad sökning',

	'SEARCHED_FOR'				=> 'Sökterm använd',
	'SEARCHED_TOPIC'			=> 'Sökte inom tråd',
	'SEARCH_ALL_TERMS'			=> 'Sök efter resultat som matchar alla termer eller använd frågan som den är angiven',
	'SEARCH_ANY_TERMS'			=> 'Sök efter resultat som matchar någon av termerna',
	'SEARCH_AUTHOR'				=> 'Sök efter författare',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Använd * som jokertecken för partiella träffar.',
	'SEARCH_FIRST_POST'			=> 'Endast första inlägget i trådar',
	'SEARCH_FORUMS'				=> 'Sök i kategori',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Välj den kategori eller de kategorier som du vill söka i. Underkategorier söks igenom automatiskt om du inte inaktiverar “Sök i underkategorier” nedan.',
	'SEARCH_IN_RESULTS'			=> 'Sök bland dessa resultat',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Sätt <strong>+</strong> framför de ord som måste finnas med i resultaten och <strong>-</strong> framför de ord som inte får finnas med i resultaten. Skriv en lista med ord separerade med <strong>|</strong> i en parantes om endast ett av orden måste finnas med i resultaten, t.ex. <em>(ord|ord)</em>. Använd * som jokertecken för partiella träffar.',
	'SEARCH_MSG_ONLY'			=> 'Endast meddelandetext',
	'SEARCH_OPTIONS'			=> 'Sökalternativ',
	'SEARCH_QUERY'				=> 'Sökfråga',
	'SEARCH_SUBFORUMS'			=> 'Sök i underkategorier',
	'SEARCH_TITLE_MSG'			=> 'Inläggsämnen och meddelandetext',
	'SEARCH_TITLE_ONLY'			=> 'Endast trådämnen',
	'SEARCH_WITHIN'				=> 'Sök inom',
	'SORT_ASCENDING'			=> 'Stigande',
	'SORT_AUTHOR'				=> 'Författare',
	'SORT_DESCENDING'			=> 'Fallande',
	'SORT_FORUM'				=> 'Kategori',
	'SORT_POST_SUBJECT'			=> 'Inläggämne',
	'SORT_TIME'					=> 'Datum',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Du måste ange minst %d tecken av författarens namn.',
));

?>