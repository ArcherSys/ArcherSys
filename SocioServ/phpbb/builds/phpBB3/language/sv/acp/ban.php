<?php
/** 
*
* acp_ban [Swedish] (version 0.5.0 - 3.0.RC5)
*
* @package language
* @version $Id: ban.php,v 1.12 2007/08/25 14:15:13 virtuality Exp $
* @copyright (c) 2005 phpBB Group 
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 timma',
	'30_MINS'		=> '30 minuter',
	'6_HOURS'		=> '6 timmar',

	'ACP_BAN_EXPLAIN'	=> 'Här kan du kontrollera bannlysningen av användare via namn, IP eller e-postadress. Dessa metoder förhindrar en användare från att nå alla delar av forumet. Du kan ge en kort anledning (maximalt 3000 tecken) för bannlysningen om du vill. Detta kommer att visas i administrationsloggen. Längden på bannlysningen kan också anges. Om du vill att bannlysningen ska upphöra på ett specifikt datum istället för efter en viss tid så välj <span style="text-decoration: underline;">Tills -&gt;</span> för bannlysningslängd och skriv in datumet i formatet <kbd>ÅÅÅÅ-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Undanta från bannlysning',
	'BAN_LENGTH'			=> 'Bannlysningens längd',
	'BAN_REASON'			=> 'Anledning för bannlysning',
	'BAN_GIVE_REASON'		=> 'Anledning som visas för den bannlyste',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Listan över bannlysningar uppdaterades.',

	'EMAIL_BAN'					=> 'Bannlys en eller flera e-postadresser',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Aktivera detta för att undanta den angivna e-postadressen från alla nuvarande bannlysningar.',
	'EMAIL_BAN_EXPLAIN'			=> 'För att ange fler än en e-postadress, ange varje e-postadress på en ny rad. För att matcha partiella adresser använd * som jokertecken, t.ex. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, osv.',
	'EMAIL_NO_BANNED'			=> 'Inga bannlysta e-postadresser',
	'EMAIL_UNBAN'				=> 'Häv bannlysta eller undantagna e-postadresser',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Du kan häva flera bannlysta (eller undantagna) e-postadresser på samma gång genom att använda den rätta kombinationen av mus och tangentbord för din dator och webbläsare. Undantagna e-postadresser är betonade.',

	'IP_BAN'					=> 'Bannlys en eller flera IP-adresser',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Aktivera detta för att undanta den angivna IP-adressen från alla nuvarande bannlysningar.',
	'IP_BAN_EXPLAIN'			=> 'För att ange fler än en IP-adress, ange varje IP-adress på en ny rad. För att ange kedja med IP-adresser separera början och slutet med -, använd “*” som jokertecken.',
	'IP_HOSTNAME'				=> 'IP-adresser eller värdnamn',
	'IP_NO_BANNED'				=> 'Inga bannlysta IP-adresser',
	'IP_UNBAN'					=> 'Häv bannlysta eller undantagna IP-adresser',
	'IP_UNBAN_EXPLAIN'			=> 'Du kan häva flera bannlysta (eller undantagna) e-postadresser på samma gång genom att använda den rätta kombinationen av mus och tangentbord för din dator och webbläsare. Undantagna IP-adresser är betonade.',

 	'LENGTH_BAN_INVALID'		=> 'Datumet måste vara i formatet <kbd>ÅÅÅÅ-MM-DD</kbd>.',
 
	'PERMANENT'		=> 'Permanent',
	
	'UNTIL'						=> 'Tills',
	'USER_BAN'					=> 'Bannlys en eller flera användare',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Aktivera detta för att undanta den angivna användaren från alla nuvarande bannlysningar.',
	'USER_BAN_EXPLAIN'			=> 'Du kan bannlysa flera användare på samma gång genom att skriva in varje namn på en ny rad. Använd <span style="text-decoration: underline;">Hitta en medlem</span>-funktionen för att söka efter och lägga till en eller flera användare automatiskt.',
	'USER_NO_BANNED'			=> 'Inga bannlysta användare',
	'USER_UNBAN'				=> 'Häv bannlysta eller undantagna användare',
	'USER_UNBAN_EXPLAIN'		=> 'Du kan häva flera bannlysta (eller undantagna) användare på samma gång genom att använda den rätta kombinationen av mus och tangentbord för din dator och webbläsare. Undantagna användare är betonade.',
	
	
));

?>