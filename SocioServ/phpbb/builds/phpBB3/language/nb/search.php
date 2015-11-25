<?php
/** 
*
* search.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-07-16 - phpBB.no
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
	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Du må være registrert og innlogget for å kunne se oversikten over dine egne innlegg.',
	'RETURN_TO_SEARCH_ADV'	=> 'Returner til avansert søk',
	'ALL_AVAILABLE'	=> 'Alle tilgjengelige',
	'ALL_RESULTS'	=> 'Alle resultater',
	'DISPLAY_RESULTS'	=> 'Vis resultater som',
	'FOUND_SEARCH_MATCH'	=> '%d treff på',
	'FOUND_SEARCH_MATCHES'	=> '%d treff på',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Søket gav mer enn %d treff.',
	'GLOBAL'	=> 'Global annonsering',
	'IGNORED_TERMS'	=> 'ignorert',
	'IGNORED_TERMS_EXPLAIN'	=> '<strong>«%s»</strong> ble utelatt fra søket ditt.',
	'JUMP_TO_POST'	=> 'Gå til innlegg',
	'NO_KEYWORDS'	=> 'Du må ha med minst ett søkeord på mellom %d og %d tegn. Vilkårlige tegn (*) telles ikke med.',
	'NO_RECENT_SEARCHES'	=> 'Ingen nylige søk.',
	'NO_SEARCH'	=> 'Søkefunksjonen er deaktivert.',
	'NO_SEARCH_RESULTS'	=> 'Søket gav ingen treff.',
	'NO_SEARCH_TIME'	=> 'Søket virker ikke. Prøv igjen om en stund.',
	'WORD_IN_NO_POST'	=> '<strong>«%s»</strong> finnes ikke i noen innlegg.',
	'WORDS_IN_NO_POST'	=> '<strong>«%s»</strong> finnes ikke i noen innlegg.',
	'POST_CHARACTERS'	=> 'tegn fra hvert innlegg.',
	'RECENT_SEARCHES'	=> 'Nylige søk',
	'RESULT_DAYS'	=> 'Bare vis treff fra siste',
	'RESULT_SORT'	=> 'Sorter etter',
	'RETURN_FIRST'	=> 'Vis',
	'SEARCHED_FOR'	=> 'Søkeord:',
	'SEARCHED_TOPIC'	=> 'Gjennomsøkt emne',
	'SEARCH_ALL_TERMS'	=> 'Finn innlegg som inneholder alle ordene (eller tilfredstiller spørringen)',
	'SEARCH_ANY_TERMS'	=> 'Finn innlegg som inneholder minst ett av ordene',
	'SEARCH_AUTHOR'	=> 'Finn kun innlegg skrevet av denne brukeren',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'Bruk * for vilkårlige tegn.',
	'SEARCH_FIRST_POST'	=> 'Kun første innlegg i hvert emne',
	'SEARCH_FORUMS'	=> 'Forum det skal søkes i',
	'SEARCH_FORUMS_EXPLAIN'	=> 'Merk av hvilke forum du vil søke i. Hold nede <kbd>Ctrl</kbd> for å velge flere forum, eller velg et forelderforum og velg at det skal søkes i underforum (neste valg)',
	'SEARCH_IN_RESULTS'	=> 'Søk i disse resultatene',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Sett <strong>«+»</strong> foran ord som MÅ være med i innlegget du leter etter, og <strong>«-»</strong> foran ord som IKKE skal befinne seg i innlegget. Skriv en liste av ord separert av <strong>«|»</strong> i en parantes for å spesifisere at ETT av ordene må være med i innlegget. <strong>«*»</strong> kan brukes som vilkårlig tegn dersom du er usikker på hvordan et ord staves (<strong>hei*</strong> finner både hei, heis og heisann).',
	'SEARCH_MSG_ONLY'	=> 'Kun innleggenes tekst',
	'SEARCH_OPTIONS'	=> 'Søkevalg',
	'SEARCH_QUERY'	=> 'Søk',
	'SEARCH_SUBFORUMS'	=> 'Søk i underforum',
	'SEARCH_TITLE_MSG'	=> 'Innleggenes tekst og emnefelt',
	'SEARCH_TITLE_ONLY'	=> 'Kun innleggenes emnefelt',
	'SEARCH_WITHIN'	=> 'Søk i',
	'SORT_ASCENDING'	=> 'Stigende',
	'SORT_AUTHOR'	=> 'Forfatter',
	'SORT_DESCENDING'	=> 'Synkende',
	'SORT_FORUM'	=> 'Forum',
	'SORT_POST_SUBJECT'	=> 'Emne',
	'SORT_TIME'	=> 'Tidspunkt',
	'TOO_FEW_AUTHOR_CHARS'	=> 'Du må ha med minst %d tegn fra forfatterens navn.',
));

?>