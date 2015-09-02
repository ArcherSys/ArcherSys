<?php
/**
*
* groups [Dutch]
*
* @package language
* @version $Id: groups.php,v 1.0.0 2006/06/17 11:28:21 acydburn Exp $
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
	'ALREADY_DEFAULT_GROUP'		=> 'De geselecteerde groep is al je standaardgroep.',
	'ALREADY_IN_GROUP'			=> 'Je bent al een lid van de geselecteerde groep.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Je hebt al gevraagd of je tot de groep kan toetreden.',

	'CHANGED_DEFAULT_GROUP'	=> 'Standaardgroep met succes gewijzigd.',

	'FORUM_UNDISCLOSED'		=> 'Modereert verborgen forum(s)',
   
	'GROUP_AVATAR'			=> 'Groepsavatar',
	'GROUP_CHANGE_DEFAULT'	=> 'Ben je zeker dat je jouw standaardgroep naar &quot;%s&quot; groep wilt veranderen?',
	'GROUP_CLOSED'			=> 'Gesloten',
	'GROUP_DESC'			=> 'Groepsomschrijving',
	'GROUP_HIDDEN'			=> 'Verborgen',
	'GROUP_INFORMATION'		=> 'Informatie gebruikersgroep',
	
	'GROUP_IS_CLOSED'	=> 'Dit is een gesloten groep, je kan alleen lid worden door een uitnodiging van de groepsleider.',
	'GROUP_IS_FREE'		=> 'Dit is een vrije, open groep, alle nieuwe leden zijn welkom.', 
	'GROUP_IS_HIDDEN'	=> 'Dit is een verborgen groep, alleen leden van deze groep kunnen hun lidmaatschap hiervan zien.',
	'GROUP_IS_OPEN'		=> 'Dit is een open groep, leden kunnen lid worden.',
	'GROUP_IS_SPECIAL'	=> 'Dit is een speciale groep, speciale groepen worden beheerd door de beheerders.', 
   
	'GROUP_JOIN'						=> 'Word lid van groep',
	'GROUP_JOIN_CONFIRM'				=> 'Weet je zeker dat je lid wilt worden van de geselecteerde groep?',
	'GROUP_JOIN_PENDING'				=> 'Vraag een lidmaatschap aan',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Ben je er zeker van dat je wilt aanvragen om lid te worden van de geselecteerde groep?',
	'GROUP_JOINED'						=> 'Met succes lid geworden van de geselecteerde groep.',
	'GROUP_JOINED_PENDING'				=> 'Met succes groepslidmaatschap aangevraagd. Je moet wachten tot de groepsleider je aanvraag heeft geaccepteerd.',
	'GROUP_LIST'						=> 'Gebruikers beheren',
	'GROUP_MEMBERS'						=> 'Groepsleden',
	'GROUP_NAME'						=> 'Groepsnaam',
	'GROUP_OPEN'						=> 'Open',
	'GROUP_RANK'						=> 'Groepsrang',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Zeg je groepslidmaatschap op',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Ben je er zeker van dat je het groepslidmaatschap van de geselecteerde groep wilt opzeggen?',
	'GROUP_RESIGN_PENDING'				=> 'Zeg je wachtende groepslidmaatschap op',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Ben je zeker dat je jouw wachtend lidmaatschap wilt opzeggen?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Je bent met succes van de geselecteerde gebruikersgroep verwijderd.',
	'GROUP_RESIGNED_PENDING'			=> 'Je wachtende lidmaatschap van de geselecteerde groep is verwijderd.',
	'GROUP_TYPE'						=> 'Groepssoort',
	'GROUP_UNDISCLOSED'					=> 'Verborgen groep',

	'LOGIN_EXPLAIN_GROUP'	=> 'Je moet inloggen om de groepsdetails te zien.',

	'NO_LEADERS'					=> 'Je bent geen leider van een groep.',
	'NOT_LEADER_OF_GROUP'			=> 'De aangevraagde handeling kan niet uitgevoerd worden omdat je niet de leider van de geselecteerde groep bent.',
	'NOT_MEMBER_OF_GROUP'			=> 'De aangevraagde handeling kan niet uitgevoerd worden omdat je geen lid, of je lidmaatschap is nog niet goedgekeurd, van de geselecteerde groep bent.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Je hebt geen permissies om af te treden van de standaardgroep.',
   
	'PRIMARY_GROUP'	=> 'Primaire groep',

	'REMOVE_SELECTED'	=> 'Verwijder geselecteerde',

	'USER_GROUP_CHANGE'			=> 'Van &quot;%1$s&quot; groep naar &quot;%2$s&quot;',
	'USER_GROUP_DEMOTE'			=> 'Neem leiderschap af',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Ben je zeker dat je niet langer leider van de geselecteerde groep wilt zijn?',
	'USER_GROUP_DEMOTED'		=> 'Leiderschap met succes afgenomen.',
));
?>