<?php
/**
*
* acp_search [Dutch]
*
* @package language
* @version $Id: search.php,v 1.0.0 2007/01/27 17:38:45 naderman Exp $
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
	'ACP_SEARCH_INDEX_EXPLAIN'		=> 'Hier kan je de zoekindex methodes beheren. Omdat je normaal gezien slechts &eacute;&eacute;n methode gebruikt, kan je best alle ongebruikte indexen verwijderen. Na het wijzigen van zoekinstellingen (zoals het minimum/maximum aantal tekens), is het heropbouwen van de zoekindex aan te raden zodat deze de wijzigingen bevat.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'	=> 'Hier kan je opgeven welke zoekmethode gebruikt moet worden voor het indexeren van de berichten en het uitvoeren van zoekopdrachten. Je kan verschillende opties instellen die mede de verwerking van deze acties bepalen. Sommige instellingen zijn voor alle zoekmethodes dezelfde.',

	'COMMON_WORD_THRESHOLD'				=> 'Frequente woordendrempel',
	'COMMON_WORD_THRESHOLD_EXPLAIN'		=> 'Woorden die in een groot percentage berichten voorkomen, worden als frequent beschouwd. Deze frequente woorden worden genegeerd bij zoekopdrachten. Deze functie werkt echter alleen indien er meer dan 100 berichten zijn. Indien je nul opgeeft, wordt de functie uitgeschakeld.',
	'CONFIRM_SEARCH_BACKEND'			=> 'Weet je zeker dat je op een andere zoekmethode wilt overschakelen? Nadat je deze hebt gewijzigd, zul je een nieuwe index voor de methode moeten opbouwen. Als je niet van plan bent om de oude methode ooit terug te gebruiken, kan je de oude index best verwijderen om schijfruimte vrij te maken.',
	'CONTINUE_DELETING_INDEX'			=> 'Ga verder met het vorige index verwijderproces',
	'CONTINUE_DELETING_INDEX_EXPLAIN'	=> 'Het index verwijderproces is ooit gestart, om de zoekindex pagina te kunnen openen moet je dit proces eerst be&euml;indigen of annuleren.',
	'CONTINUE_INDEXING'					=> 'Ga door met het vorige indexeringsproces',
	'CONTINUE_INDEXING_EXPLAIN'			=> 'Het indexeringsproces is ooit gestart, om de zoekindex pagina te kunnen openen moet je dit proces eerst be&euml;indigen of annuleren.',
	'CREATE_INDEX'						=> 'Index cre&euml;ren',

	'DELETE_INDEX'							=> 'Index verwijderen',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Bezig met het verwijderen van de index',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'De zoekmethode is bezig met legen van zijn index, dit kan enkele minuten duren.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'De MySQL fulltext methode kan alleen bij MySQL4 en nieuwer gebruikt worden.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'MySQL fulltext indexen kunnen alleen bij MyISAM-tabellen gebruikt worden.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Totaal aantal ge&iuml;ndexeerde berichten',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Ondersteuning voor niet-Latijnse UTF-8 tekens gebruikmakend van mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Ondersteuning voor niet-Latijnse UTF-8 tekens gebruikmakend van PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Indien PCRE de unicode opties niet bevat, zoal de zoekindex methode de reguliere expressies van mbstring proberen gebruiken.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Deze zoekindex methode vereist de PCRE unicode opties, die enkel aanwezig zijn in PHP 4.4, 5.1 en hoger, indien je wilt zoeken naar niet-Latijnse tekens.',

	'GENERAL_SEARCH_SETTINGS'	=> 'Algemene zoekinstellingen',
	'GO_TO_SEARCH_INDEX'		=> 'Ga naar de zoekindex pagina',

	'INDEX_STATS'					=> 'Index statistieken',
	'INDEXING_IN_PROGRESS'			=> 'Bezig met indexeren',
	'INDEXING_IN_PROGRESS_EXPLAIN'	=> 'De zoekmachine is bezig met het indexeren van alle berichten op het forum, dit kan een aantal minuten tot uren duren, afhankelijk van de grootte van het forum.',

	'LIMIT_SEARCH_LOAD'			=> 'Systeembelastingslimiet zoekpagina',
	'LIMIT_SEARCH_LOAD_EXPLAIN'	=> 'Als de systeembelasting voor 1 minuut deze waarde overschrijdt, zal de zoekpagina offline gaan. 1.0 is gelijk aan het verbruik van ~100% van &eacute;&eacute;n processor. Dit werkt alleen op UNIX gebaseerde servers.',

	'MAX_SEARCH_CHARS'					=> 'Maximum aantal ge&iuml;ndexeerde tekens',
	'MAX_SEARCH_CHARS_EXPLAIN'			=> 'Alleen woorden met minder dan dit aantal tekens zullen ge&iuml;ndexeerd worden.',
	'MIN_SEARCH_CHARS'					=> 'Minimum aantal ge&iuml;ndexeerde tekens',
	'MIN_SEARCH_CHARS_EXPLAIN'			=> 'Alleen woorden met minimum dit aantal tekens zullen ge&iuml;ndexeerd worden.',
	'MIN_SEARCH_AUTHOR_CHARS'			=> 'Minimum aantal tekens auteur',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'	=> 'Gebruikers moeten minimum dit aantal tekens van de gebruikersnaam opgeven als ze met behulp van het jokerteken op auteur willen zoeken. Als de gebruikersnaam van de auteur korter is dan dit aantal tekens, kunnen ze nog altijd zoeken door de gebruikersnaam volledig te geven.',

	'PROGRESS_BAR'	=> 'Voortgangsbalk',

	'SEARCH_GUEST_INTERVAL'			=> 'Minimum interval tussen zoekopdrachten van gasten',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'	=> 'Het aantal seconden dat gasten moeten wachten voordat ze een nieuwe zoekopdracht kunnen uitvoeren. Indien &eacute;&eacute;n gast een zoekopdracht uitgevoerd heeft, moet ook de rest wachten tot deze tijd verstreken is.',
	'SEARCH_INDEX_CREATE_REDIRECT'	=> 'Alle berichten tot en met bericht id %1$d zijn ge&iuml;ndexeerd, waarvan %2$d berichten van in deze stap.<br />De huidige indexeringssnelheid is gemiddeld %3$.1f berichten per seconde.<br />Bezig met indexeren...',
	'SEARCH_INDEX_DELETE_REDIRECT'	=> 'Alle berichten tot en met bericht id %1$d werden van de zoekindex verwijderd.<br />Bezig met verwijderen...',
	'SEARCH_INDEX_CREATED'			=> 'Alle forumberichten uit de database zijn succesvol ge&iuml;ndexeerd.',
	'SEARCH_INDEX_REMOVED'			=> 'De zoekindex van deze methode is succesvol verwijderd.',
	'SEARCH_INTERVAL'				=> 'Minimum interval tussen zoekopdrachten van gebruikers',
	'SEARCH_INTERVAL_EXPLAIN'		=> 'Het aantal seconden dat gebruikers moeten wachten voordat ze een nieuwe zoekopdracht kunnen uitvoeren. Dit wordt per gebruiker gecontroleerd.',
	'SEARCH_STORE_RESULTS'			=> 'Buffertijd zoekresultaten',
	'SEARCH_STORE_RESULTS_EXPLAIN'	=> 'Gebufferde zoekresultaten zullen na deze tijd, in seconden, verlopen. Stel dit in op nul als je de zoekresultaten niet wilt bufferen.',
	'SEARCH_TYPE'					=> 'Zoekmethode',
	'SEARCH_TYPE_EXPLAIN'			=> 'Met phpBB is het mogelijk de zoekmethode, die gebruikt wordt om berichten te doorzoeken, in te stellen. Standaard zal de zoekfunctie de eigen fulltext methode gebruiken.',
	'SWITCHED_SEARCH_BACKEND'		=> 'Je hebt de gebruikte zoekmethode gewijzigd. Om deze nieuwe methode te gebruiken, moet je ervoor zorgen dat er een bijhorende index is.',

	'TOTAL_WORDS'	=> 'Totaal aantal ge&iuml;ndexeerde woorden',
	'TOTAL_MATCHES'	=> 'Totaal aantal ge&iuml;ndexeerde woord naar berichtrelaties',

	'YES_SEARCH'				=> 'Schakel zoekfunctie in',
	'YES_SEARCH_EXPLAIN'		=> 'Schakelt de zoekfunctie voor gebruikers in, inclusief zoeken naar gebruikers.',
	'YES_SEARCH_UPDATE'			=> 'Schakel fulltext updaten in',
	'YES_SEARCH_UPDATE_EXPLAIN'	=> 'Fulltext index updaten bij het plaatsen van berichten, wordt overschreven indien de zoekfunctie uitgeschakeld is.',
));
?>