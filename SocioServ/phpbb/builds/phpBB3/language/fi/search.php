<?php
/** 
*
* search [Finnish [Fin]]
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
	'ALL_AVAILABLE'			=> 'Kaikki saatavilla olevat',
	'ALL_RESULTS'			=> 'Kaikki tulokset',

	'DISPLAY_RESULTS'		=> 'Näytä tulokset',

	'FOUND_SEARCH_MATCH'	=> 'Haku löysi %d tuloksen',
	'FOUND_SEARCH_MATCHES'	=> 'Haku löysi %d tulosta',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Haku löysi yli %d tulosta',

	'GLOBAL'				=> 'Yleinen viestiketju',

	'IGNORED_TERMS'			=> 'Pois jätetyt',
	'IGNORED_TERMS_EXPLAIN'	=> 'Hausta jätettiin pois seuraavat sanat: <strong>%s</strong>',

	'JUMP_TO_POST'			=> 'Hyppää viestiin',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Kirjaudu sisään katsoaksesi omia viestejäsi.',

	'NO_KEYWORDS'			=> 'Anna ainakin yksi sana haettavaksi. Jokainen sana täytyy olla vähintään %d merkkiä pitkä ja siinä ei saa olla enempää, kuin %d merkkiä, poisluettuna villit kortit.',
	'NO_RECENT_SEARCHES'	=> 'Hakuja ei ole suoritettu',
	'NO_SEARCH'				=> 'Pahoittelut, mutta sinulla ei ole oikeuksia käyttää hakupalvelua.',
	'NO_SEARCH_RESULTS'		=> 'Ei löytynyt.',
	'NO_SEARCH_TIME'		=> 'Pahoittelut, mutta et voi käyttää hakutoimintoa tällähetkellä. Yritä uudelleen muutaman minuutin kuluttua.',
	'WORD_IN_NO_POST'		=> 'Tuloksia ei löytynyt, koska sanaa <strong>%s</strong> ei ole yhdessäkään viestissä.',
	'WORDS_IN_NO_POST'		=> 'Tuloksia ei löytynyt, koska sanoja <strong>%s</strong> ei ole yhdessäkään viestissä.',

	'POST_CHARACTERS'		=> 'merkkiä viestistä',

	'RECENT_SEARCHES'		=> 'Viimeisimmät haut',
	'RESULT_DAYS'			=> 'Rajaa tulokset',
	'RESULT_SORT'			=> 'Lajittele tulokset',
	'RETURN_FIRST'			=> 'Palauta ensimmäiset',
	'RETURN_TO_SEARCH_ADV'	=> 'Palaa tarkennettuun hakuun',

	'SEARCHED_FOR'				=> 'Käytetyt hakusanat',
	'SEARCHED_TOPIC'			=> 'Haetut viestiketjut',
	'SEARCH_ALL_TERMS'			=> 'Hae kaikilla sanoilla tai käytä kirjoitettua hakua',
	'SEARCH_ANY_TERMS'			=> 'Hae kaikilla vaihtoehdoilla',
	'SEARCH_AUTHOR'				=> 'Hae käyttäjätunnuksellä',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Käytä *-merkkiä jokerimerkkinä osittaisiin hakuihin',
	'SEARCH_FIRST_POST'			=> 'Viestiketjujen ensimmäinen viesti',
	'SEARCH_FORUMS'				=> 'Hae alueittain',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Valitse alue tai alueet, josta haluat etsiä. Sisäalueet voidaan hakea valitsemalla se alapuolelta.',
	'SEARCH_IN_RESULTS'			=> 'Etsi näistä tuloksista',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Aseta <strong>+</strong> merkki sanan eteen, jonka on löydyttävä ja <strong>-</strong> merkki sellaisen sanan eteen, jota ei saa löytyä. Laita haettavat sanat sulkuihin erotettuna <strong>|</strong>-merkillä, mikäli vain yhden sanan on löydyttävä. Käytä *-merkkiä jokerimerkkinä osittaisiin hakuihin',
	'SEARCH_MSG_ONLY'			=> 'Vain teksti',
	'SEARCH_OPTIONS'			=> 'Haun vaihtoehdot',
	'SEARCH_QUERY'				=> 'Hakulauseke',
	'SEARCH_SUBFORUMS'			=> 'Etsi sisäalueet',
	'SEARCH_TITLE_MSG'			=> 'Viestin otsikot ja teksti',
	'SEARCH_TITLE_ONLY'			=> 'Viestin otsikko',
	'SEARCH_WITHIN'				=> 'Hae täältä',
	'SORT_ASCENDING'			=> 'Nouseva',
	'SORT_AUTHOR'				=> 'Kirjoittaja',
	'SORT_DESCENDING'			=> 'Laskeva',
	'SORT_FORUM'				=> 'Alue',
	'SORT_POST_SUBJECT'			=> 'Viestin aihe',
	'SORT_TIME'					=> 'Viestin aika',

	'TOO_FEW_AUTHOR_CHARS'		=> 'Anna ainakin %d merkkiä kirjoittajan nimestä.',
));

?>