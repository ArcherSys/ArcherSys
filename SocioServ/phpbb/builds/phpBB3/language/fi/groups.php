<?php
/** 
*
* groups [Finnish [Fin]]
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
	'ALREADY_DEFAULT_GROUP'	=> 'Valitsemasi ryhmä on jo oletusryhmäsi',
	'ALREADY_IN_GROUP'		=> 'Olet jo tämän ryhmän jäsen',
	'ALREADY_IN_GROUP_PENDING'	=> 'Olet jo pyytänyt jäsenyyttä tässä ryhmässä.',

	'CHANGED_DEFAULT_GROUP'	=> 'Oletusryhmä on muutettu',
	
	'GROUP_AVATAR'						=> 'Ryhmän avatar', 
	'GROUP_CHANGE_DEFAULT'				=> 'Haluatko varmasti vaihtaa oletusryhmäksesi "%s" ryhmän?',
	'GROUP_CLOSED'						=> 'Suljettu',
	'GROUP_DESC'						=> 'Ryhmän kuvaus',
	'GROUP_HIDDEN'						=> 'Piilotettu',
	'GROUP_INFORMATION'					=> 'Käyttäjäryhmän tiedot', 
	'GROUP_IS_CLOSED'					=> 'Tämä on suljettu ryhmä. Uudet käyttäjät eivät voi liittyä automaattisesti.',
	'GROUP_IS_FREE'						=> 'Tämä on avoin ryhmä, johon kaikki käyttäjät ovat tervetulleita.', 
	'GROUP_IS_HIDDEN'					=> 'Tämä on piilotettu ryhmä, joka näkyy vain ryhmän jäsenille.',
	'GROUP_IS_OPEN'						=> 'Tämä on avoin ryhmä, johon käyttäjät voivat liittyä vapaasti.',
	'GROUP_IS_SPECIAL'					=> 'Tämä on erityinen ryhmä. Tätä ryhmää hallitsevat keskustelufoorumin ylläpitäjät.', 
	'GROUP_JOIN'						=> 'Liity ryhmään.',
	'GROUP_JOIN_CONFIRM'				=> 'Haluatko varmasti liittyä valitsemaasi tyhmään?',
	'GROUP_JOIN_PENDING'				=> 'Pyydä ryhmän jäsenyyttä',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Haluatko varmasti pyytää jäsenyyttä valitsemassasi ryhmässä?',
	'GROUP_JOINED'						=> 'Ryhmään liittyminen onnistui',
	'GROUP_JOINED_PENDING'				=> 'Olet pyytänyt pääsyä ryhmään. Ole hyvä ja odota, kunnes ryhmän valvoja on käsitellyt hakemuksesi.',
	'GROUP_LIST'						=> 'Hallitse käyttäjiä',
	'GROUP_MEMBERS'						=> 'Ryhmän jäsenet',
	'GROUP_NAME'						=> 'Ryhmän nimi',
	'GROUP_OPEN'						=> 'Avoin',
	'GROUP_RANK'						=> 'Ryhmän arvonimi', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Eroa ryhmästä',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Haluatko varmasti erota valitsemastasi ryhmästä?',
	'GROUP_RESIGN_PENDING'				=> 'Peru ryhmän jäsenhakemus',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Haluatko varmasti peruuttaa jäsenhakemuksesi valitusta ryhmästä?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Sinut on poistettu valitsemastasi ryhmästä',
	'GROUP_RESIGNED_PENDING'			=> 'Jäsenhakemuksesi on poistettu valitsemastasi ryhmästä',
	'GROUP_TYPE'						=> 'Ryhmän tyyppi',
	'GROUP_UNDISCLOSED'					=> 'Piilotettu ryhmä',
	'FORUM_UNDISCLOSED'					=> 'Valvoo piilotettuja alueita',

	'LOGIN_EXPLAIN_GROUP'	=> 'Kirjaudu sisään nähdäksesi ryhmän tiedot',

	'NO_LEADERS'					=> 'Et ole valvojana yhdessäkään ryhmässä',
	'NOT_LEADER_OF_GROUP'			=> 'Pyytämääsi toimintoa ei voitu suorittaa, koska et ole valvojana tässä ryhmässä.',
	'NOT_MEMBER_OF_GROUP'			=> 'Pyytämääsi toimintoa ei voitu suorittaa, koska et ole jäsenenä tässä ryhmässä.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Et voi erota oletusryhmästäsi.',
	
	'PRIMARY_GROUP'		=> 'Pääryhmä',

	'REMOVE_SELECTED'		=> 'Poista valitut',

	'USER_GROUP_CHANGE'			=> 'Siirretty "%1$s" ryhmästä, "%2$s" ryhmään',
	'USER_GROUP_DEMOTE'			=> 'poista valvojan oikeudet',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Haluatko varmasti poistaa valvojan oikeutesi tästä ryhmästä?',
	'USER_GROUP_DEMOTED'		=> 'valvojan oikeudet poistettu.',
));

?>