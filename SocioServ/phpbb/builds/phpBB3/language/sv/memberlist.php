<?php
/** 
*
* memberlist [Swedish] (version 0.5.0 - 3.0.RC5)
*
* @package language
* @version $Id: memberlist.php,v 1.12 2007/08/25 14:15:13 virtuality Exp $
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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Aktivast i kategori',
	'ACTIVE_IN_TOPIC'		=> 'Aktivast i tråd',
	'ADD_FOE'				=> 'Lägg till som ovän',
	'ADD_FRIEND'			=> 'Lägg till som vän',
	'AFTER'					=> 'Efter',	
 
 	'ALL'					=> 'Alla',

	'BEFORE'				=> 'Före',

	'CC_EMAIL'				=> 'Skicka en kopia av detta e-postmeddelande till mig själv.',
	'CONTACT_USER'			=> 'Kontaktinformation',

	'DEST_LANG'				=> 'Språk',
	'DEST_LANG_EXPLAIN'		=> 'Välj ett språk om passar för mottagaren (om det finns tillgängligt) av detta meddelande.',

	'EMAIL_BODY_EXPLAIN'	=> 'Detta meddelande kommer att skickas som oformaterad text, använd inte HTML eller BBCode. Svarsadressen för detta e-postmeddelande kommer att vara din e-postadress.',
	'EMAIL_DISABLED'		=> 'Alla e-postrelaterade funktioner har inaktiverats.',
	'EMAIL_SENT'			=> 'E-postmeddelandet skickades.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Detta meddelande kommer att skickas som oformaterad text, använd inte HTML eller BBCode. Information om tråden inkluderas automatiskt. Svarsadressen för detta e-postmeddelande kommer att vara din e-postadress.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Du måste ange en riktig e-postadress för mottagaren.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Du måste skriva ett meddelande.',
	'EMPTY_MESSAGE_IM'		=> 'Du måste skriva ett meddelande att skicka.',
	'EMPTY_NAME_EMAIL'		=> 'Du måste ange mottagarens riktiga namn.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Du måste ange ett ämne för e-postmeddelandet.',
	'EQUAL_TO'				=> 'Lika med',

	'FIND_USERNAME_EXPLAIN'	=> 'Använd detta formulär för att söka efter specifika medlemmar. Du måste inte fylla i alla fält. För att hitta partiella data använd * som jokertecken. För datum, använd formatet <kbd>ÅÅÅÅ-MM-DD</kbd>, t.ex. <samp>2004-02-29</samp>. Använd kryssboxarna för att välja en eller flera användarnamn (fler användarnamn än ett kan väljas i vissa fall) och klicka på “Välj markerade” för att återgå till föregående formulär.',
	'FLOOD_EMAIL_LIMIT'		=> 'Du kan inte skicka ett till e-postmeddelande just nu. Försök igen senare.',

	'GROUP_LEADER'			=> 'Gruppledare',

	'HIDE_MEMBER_SEARCH'	=> 'Dölj medlemssök',

	'IM_ADD_CONTACT'		=> 'Lägg till kontakt',
	'IM_AIM'				=> 'Du måste ha AOL Instant Messenger installerat för att använda detta.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Ladda ner program',
	'IM_ICQ'				=> 'Kom ihåg att användaren kan ha valt att inte ta emot oombedda snabbmeddelanden.',
	'IM_JABBER'				=> 'Kom ihåg att användaren kan ha valt att inte ta emot oombedda snabbmeddelanden.',
	'IM_JABBER_SUBJECT'		=> 'Detta är ett automatiskt meddelande - svara inte! Meddelande from användare %1$s på %2$s.',
	'IM_MESSAGE'			=> 'Ditt meddelande',
	'IM_MSNM'				=> 'Du måste ha Windows Live Messenger installerat för att använda detta.',
	'IM_MSNM_BROWSER'		=> 'Din webbläsare stödjer inte detta.',
	'IM_MSNM_CONNECT'		=> 'MSNM/WLM är inte ansluten.\nDu måste ansluta MSNM/WLM för att fortsätta.',		
	'IM_NAME'				=> 'Ditt namn',
	'IM_NO_DATA'			=> 'Det finns ingen passande kontaktinformation för denna användare.',
	'IM_NO_JABBER'			=> 'Det går inte att skicka meddelande till Jabberanvändare på denna server. Du måste ha en Jabberklient installerad på din dator för att kontakta mottagaren ovan.',
	'IM_RECIPIENT'			=> 'Mottagare',
	'IM_SEND'				=> 'Skicka meddelande',
	'IM_SEND_MESSAGE'		=> 'Skicka meddelande',
	'IM_SENT_JABBER'		=> 'Ditt meddelande till %1$s skickades.',
	'IM_USER'				=> 'Skicka ett snabbmeddelande',
	
	'LAST_ACTIVE'				=> 'Senast aktiv',
	'LESS_THAN'					=> 'Mindre än',
	'LIST_USER'					=> '1 användare',
	'LIST_USERS'				=> '%d användare',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Forumet kräver att du registrerar dig och loggar in för att visa teamlistan.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Forumet kräver att du registrerar dig och loggar in för att visa medlemslistan.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Forumet kräver att du registrerar dig och loggar in för att söka efter medlemmar.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Forumet kräver att du registrerar dig och loggar in för att visa profiler.',

	'MORE_THAN'				=> 'Mer än',

	'NO_EMAIL'				=> 'Du har inte tillåtelse att skicka e-post till denna användare.',
	'NO_VIEW_USERS'			=> 'Du har inte tillåtelse att visa medlemslistan eller profiler.',

	'ORDER'					=> 'Ordning',
	'OTHER'					=> 'Annat',

	'POST_IP'				=> 'Postat från IP/domän',

	'RANK'					=> 'Titel',
	'REAL_NAME'				=> 'Mottagarens namn',
	'RECIPIENT'				=> 'Mottagare',
	'REMOVE_FOE'			=> 'Ta bort från ovänner',
	'REMOVE_FRIEND'			=> 'Ta bort från vänner',

	'SEARCH_USER_POSTS'		=> 'Visa användarens inlägg',
	'SELECT_MARKED'			=> 'Välj markerade',
	'SELECT_SORT_METHOD'	=> 'Välj sorteringsmetod',
 	'SEND_AIM_MESSAGE'		=> 'Skicka AIM-meddelande',
 	'SEND_ICQ_MESSAGE'		=> 'Skicka ICQ-meddelande',
	'SEND_IM'				=> 'Snabbmeddelanden',
 	'SEND_JABBER_MESSAGE'	=> 'Skicka Jabber-meddelande',
	'SEND_MESSAGE'			=> 'Meddelande',
 	'SEND_MSNM_MESSAGE'		=> 'Skicka MSNM/WLM-meddelande',
 	'SEND_YIM_MESSAGE'		=> 'Skicka YIM-meddelande',
	'SORT_EMAIL'			=> 'E-post',
	'SORT_LAST_ACTIVE'		=> 'Senast aktiv',
	'SORT_POST_COUNT'		=> 'Antal inlägg',

	'USERNAME_BEGINS_WITH'	=> 'Användarnamn som börjar med',
	'USER_ADMIN'			=> 'Administrera användare',
	'USER_FORUM'			=> 'Användarstatistik',
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Allmänt',

	'VIEWING_PROFILE'		=> 'Visar profil - %s',
	'VISITED'				=> 'Senaste besöket',

	'WWW'					=> 'Webbplats',
));

?>