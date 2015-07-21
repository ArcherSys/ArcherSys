<?php
/**
*
* acp_ban [Dutch]
*
* @package language
* @version $Id: ban.php,v 1.0.0 2006/12/22 22:51:12 shs Exp $
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'	=> '1 uur',
	'30_MINS'	=> '30 minuten',
	'6_HOURS'	=> '6 uur',

	'ACP_BAN_EXPLAIN'	=> 'Hier kan je het bannen van gebruikers bij naam, IP of e-mailadres beheren. Deze methode zorgt ervoor dat de gebruiker elk gedeelte van het forum niet te zien krijgt. Je kunt een korte reden (maximum 3000 tekens) voor de ban opgeven indien je dit wenst. Deze wordt weergegeven in de beheerderslog. Ook de duur van de ban kan gespecificeerd worden. Als je de ban wilt laten eindigen op een specifieke datum die niet als tijdsperiode is ingesteld selecteer dan <u>Tot -&gt;</u> voor de lengte van de ban en voer een datum in in JJJJ-MM-DD formaat.',

	'BAN_EXCLUDE'			=> 'Uitsluiten van ban',
	'BAN_LENGTH'			=> 'Lengte van de ban',
	'BAN_REASON'			=> 'Reden voor de ban',
	'BAN_GIVE_REASON'		=> 'Reden laten zien aan de verbande',
	'BAN_UPDATE_SUCCESSFUL'	=> 'De banlijst is succesvol bijgewerkt.',

	'EMAIL_BAN'					=> 'Ban &eacute;&eacute;n of meer e-mailadressen',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Schakel dit in om de ingestelde e-mailadressen uit te sluiten van lopende bans',
	'EMAIL_BAN_EXPLAIN'			=> 'Om meer e-mailadressen te specificeren moet je ze elk op een aparte regel plaatsen. Om meerdere e-mailadressen in een keer te bannen gebruik je de * als wildcard, bijvoorbeeld <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, etc.',
	'EMAIL_NO_BANNED'			=> 'Geen verbannen e-mailadressen',
	'EMAIL_UNBAN'				=> 'Verwijder ban of verwijder uigesloten e-mailadressen',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Als je meerdere e-mailadressen in &eacute;&eacute;n keer niet meer wilt verbannen (of niet meer wilt uitsluiten), kan je dit doen door gebruik te maken van de combinatie muis en toetsenbord. Uitgesloten e-mailadressen zijn benadrukt.',
	'IP_BAN'					=> 'Ban &eacute;&eacute;n of meer IP\'s',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Schakel dit in om de ingestelde IP-adressen uit te sluiten van lopende bans.',
	'IP_BAN_EXPLAIN'			=> 'Als je meerdere IP-adressen wilt specificeren vul je ze elk op een aparte regel in. Om een reeks te specificeren gebruik je een streep (-) aan het begin en het eind, als je een wildcard wilt specificeren gebruik je een &quot;*&quot;.',
	'IP_HOSTNAME'				=> 'IP-adressen en hostnamen',
	'IP_NO_BANNED'				=> 'Geen verbannen IP-adressen',
	'IP_UNBAN'					=> 'Verwijder ban of verwijder uitgesloten IP-adressen.',
	'IP_UNBAN_EXPLAIN'			=> 'Als je meerdere IP-adressen in &eacute;&eacute;n keer niet meer wilt verbannen (of niet meer wilt uitsluiten), kan je dit doen door gebruik te maken van de combinatie muis en toetsenbord. Uitgesloten IP-adressen zijn benadrukt.',

	'LENGTH_BAN_INVALID'	=> 'De datum moet als volgt opgegeven worden: <kbd>JJJJ-MM-DD</kbd>.',

	'PERMANENT'	=> 'Permanent',

	'UNTIL'						=> 'Tot',
	'USER_BAN'					=> 'Ban een of meer gebruikersnamen',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Schakel dit in om de ingestelde gebruikersnamen uit te sluiten van lopende bans.',
	'USER_BAN_EXPLAIN'			=> 'Je kan meerdere gebruikers in een keer bannen door elke op een aparte regel te zetten. Gebruik de <u>zoek een lid</u> functie om te zoeken en een of meerdere gebruikers in een keer toe te voegen.',
	'USER_NO_BANNED'			=> 'Geen verbannen gebruikersnamen',
	'USER_UNBAN'				=> 'Verwijder ban of verwijder uitgesloten gebruikersnamen',
	'USER_UNBAN_EXPLAIN'		=> 'Als je meerdere gebruikersnamen in &eacute;&eacute;n keer niet meer wilt verbannen (of niet meer wilt uitsluiten), kan je dit doen door gebruik te maken van de combinatie muis en toetsenbord. Uitgesloten gebruikersnamen zijn benadrukt.',
));
?>