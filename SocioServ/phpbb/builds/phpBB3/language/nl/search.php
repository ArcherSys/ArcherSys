<?php
/**
*
* search [Dutch]
*
* @package language
* @version $Id: search.php,v 1.0.0 2006/07/27 19:02:47 naderman Exp $
* @copyright (c) 2005 phpBB Group modified by phpBB.nl (vertaalteam@phpbb.nl) in 2007
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
   exit;
}
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
	'ALL_AVAILABLE'	=> 'Alle beschikbare',
	'ALL_RESULTS'	=> 'Alle resultaten',

	'DISPLAY_RESULTS'	=> 'Toon resultaten als',

	'FOUND_SEARCH_MATCH'		=> 'Er voldeed %d resultaat aan de zoekterm',
	'FOUND_SEARCH_MATCHES'		=> 'Er voldeden %d resultaten aan de zoekterm',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Er voldeden meer dan %d resultaten aan de zoekterm',

	'GLOBAL'	=> 'Globale mededeling',

	'IGNORED_TERMS'			=> 'genegeerd',
	'IGNORED_TERMS_EXPLAIN'	=> 'De volgende woorden uit je zoekterm werden genegeerd omdat ze teveel voorkomen: <b>%s</b>',

	'JUMP_TO_POST'	=> 'Spring naar bericht',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Het forum vraagt om geregistreerd en ingelogd te zijn om je eigen berichten te bekijken.',

	'NO_KEYWORDS'			=> 'Je moet minstens 1 woord als zoekterm opgeven. Ieder woord moet minstens %d tekens en maximum %d tekens lang zijn, exclusief jokertekens.',
	'NO_RECENT_SEARCHES'	=> 'Er zijn geen recent uitgevoerde zoekopdrachten.',
	'NO_SEARCH'				=> 'Sorry, maar je beschikt niet over de juiste permissies om gebruik te maken van de zoekfunctie.',
	'NO_SEARCH_RESULTS'		=> 'Er werden geen resultaten gevonden.',
	'NO_SEARCH_TIME'		=> 'Sorry, maar je kan momenteel niet zoeken. Probeer opnieuw over enkele minuten.',
	'WORD_IN_NO_POST'		=> 'Het woord %s kon niet gevonden worden.',
	'WORDS_IN_NO_POST'		=> 'Er werden geen berichten gevonden, want de woorden %s komen niet voor.',

	'POST_CHARACTERS'	=> 'tekens van de berichten',

	'RECENT_SEARCHES'		=> 'Recente zoekopdrachten',
	'RESULT_DAYS'			=> 'Zoek in berichten van afgelopen:',
	'RESULT_SORT'			=> 'Sorteer resultaten volgens',
	'RETURN_FIRST'			=> 'Toon enkel de eerste',
	'RETURN_TO_SEARCH_ADV'	=> 'Keer terug naar geavanceerd zoeken',

	'SEARCHED_FOR'				=> 'Gebruikte zoekterm',
	'SEARCHED_TOPIC'			=> 'Doorzocht onderwerp',
	'SEARCH_ALL_TERMS'			=> 'Zoek naar alle woorden of zoek naar de woorden zoals opgegeven',
	'SEARCH_ANY_TERMS'			=> 'Zoek naar &eacute;&eacute;n van de woorden',
	'SEARCH_AUTHOR'				=> 'Zoek volgens auteur',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Gebruik het jokerteken * voor willekeurig(e) teken(s).',
	'SEARCH_FIRST_POST'			=> 'Eerste berichten',
	'SEARCH_FORUMS'				=> 'Doorzoek forums',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Selecteer de forums waarin je wenst te zoeken. Subforums worden automatisch meegenomen, als je dit niet wilt selecteer je alleen het forum en schakel je de optie \'doorzoek subforums\' uit.',
	'SEARCH_IN_RESULTS'			=> 'Doorzoek de resultaten',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Plaats een <strong>+</strong> voor woorden die moeten voorkomen en een <strong>-</strong> voor woorden die niet mogen voorkomen. Een lijst woorden waarvan slechts &eacute;&eacute;n woord moet voorkomen plaats je tussen haakjes met een <strong>|</strong> tussen de woorden. Het jokerteken * staat voor een willekeurig aantal onbekende tekens.',
	'SEARCH_MSG_ONLY'			=> 'Berichten',
	'SEARCH_OPTIONS'			=> 'Zoekopties',
	'SEARCH_QUERY'				=> 'Zoekopdracht',
	'SEARCH_SUBFORUMS'			=> 'Doorzoek subforums',
	'SEARCH_TITLE_MSG'			=> 'Titel en berichten',
	'SEARCH_TITLE_ONLY'			=> 'Titels',
	'SEARCH_WITHIN'				=> 'Doorzoek alleen',
	'SORT_ASCENDING'			=> 'Oplopend',
	'SORT_AUTHOR'				=> 'Auteur',
	'SORT_DESCENDING'			=> 'Aflopend',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Titel bericht',
	'SORT_TIME'					=> 'Tijdstip bericht',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Je moet minstens %d tekens van de auteur zijn/haar naam opgeven.',
));
?>