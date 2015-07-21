<?php
/**
*
* memberlist [Danish]
*
* @package language
* @version $Id: memberlist.php,v 1.34 2007/07/22 13:14:36 kellanved Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Translators: Olympus DK Team, working at http://www.phpBB3.dk and http://area51.phpBB3.dk:
*
*		John Hjorth < john-hjorth@john-hjorth.dk > (John Hjorth) http://www.phpBBFM.dk
*		jask < jan@skovsgaard.net > (Jan Skovsgaard) http://skovsgaard.net
*		Jesper Møller < jgom@privat.dk > (Jesper G. O. Møller) http://www.jart.dk/jgom/index.html
*
* Contributors :
*
*		AlleyKat < AlleyKat@phpbb2.dk > (Finn Sørensen) http://www.phpbb2.dk
*		Dr.Diesel < dr.diesel@dream-cathers.dk > (Jes Nielsen) http://www.dream-cathers.dk
*		Jan Christensen < tamrotten@gmail.com > (Jan Christensen) http://janogwickys.dk/phpBB2/index.php
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
	'ACTIVE_IN_FORUM'		=> 'Mest aktive forum',
	'ACTIVE_IN_TOPIC'		=> 'Mest aktive emne',
	'ADD_FOE'				=> 'Ignorér bruger',
	'ADD_FRIEND'			=> 'Tilføj som ven',
	'AFTER'					=> 'Efter',
	
	'ALL'					=> 'Alle',

	'BEFORE'				=> 'Før',

	'CC_EMAIL'				=> 'Send en kopi af denne email til dig selv',
	'CONTACT_USER'			=> 'Kontakt',

	'DEST_LANG'				=> 'Sprog',
	'DEST_LANG_EXPLAIN'		=> 'Vælg et passende sprog (hvis tilgængeligt) til modtageren af denne besked.',

	'EMAIL_BODY_EXPLAIN'	=> 'Denne besked bliver sendt som ren tekst, undlad derfor HTML- og/eller BBkode. Returadressen i denne besked bliver sat som din emailadresse.',
	'EMAIL_DISABLED'		=> 'Desværre, alle emailrelaterede funktioner er slået fra.',
	'EMAIL_SENT'			=> 'Emailen er blevet sendt.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Denne besked bliver sendt som ren tekst, undlad derfor HTML- og/eller BBkoder. Bemærk at emneinformation er inkluderet i denne besked. Returadressen i denne besked bliver sat som din emailadresse.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Du skal angive en gyldig emailadresse på modtageren.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Du skal skrive den besked der skal sendes med email.',
	'EMPTY_MESSAGE_IM'		=> 'Du skal skrive den besked der skal sendes.',
	'EMPTY_NAME_EMAIL'		=> 'Du skal indtaste modtagerens rigtige navn.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Du skal angive et emne i emnefeltet til denne email.',
	'EQUAL_TO'				=> 'Svarer til',

	'FIND_USERNAME_EXPLAIN'	=> 'Brug denne formular for at søge efter specifikke tilmeldte brugere. Du behøver ikke at udfylde alle felterne. Brug * som ubekendt for ukendte tegn. Hvis du bruger dato som søgeparameter, så brug formatet <kpd>yyyy-mm-dd</kbpd>, f.eks. <samp>2007-01-31</samp>. Brug markeringsboksene for at vælge et eller flere brugernavne (flere brugernavne kan accepteres afhængig af selve formatet) og klik på vælg markerede for at returnere til forrige side.',
	'FLOOD_EMAIL_LIMIT'		=> 'Du kan ikke sende endnu en email lige nu, prøv venligst igen senere.',

	'GROUP_LEADER'			=> 'Gruppeleder',

	'HIDE_MEMBER_SEARCH'	=> 'Skjul medlemssøgning',

	'IM_ADD_CONTACT'		=> 'Tilføj kontakt',
	'IM_AIM'				=> 'Bemærk venligst, at du skal have AOL Instant Messenger installeret for at anvende denne mulighed.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Hent applikation',
	'IM_ICQ'				=> 'Vær venligst opmærksom på at brugere kan have valgt ikke at modtage beskeder vedkommende ikke selv har anmodet om.',
	'IM_JABBER'				=> 'Vær venligst opmærksom på at brugere kan have valgt ikke at modtage beskeder vedkommende ikke selv har anmodet om.',
	'IM_JABBER_SUBJECT'		=> 'Dette er en automatisk besked, besvar den venligst ikke! Besked fra  %1$s p %2$s',
	'IM_MESSAGE'			=> 'Din besked',
	'IM_MSNM'				=> 'Bemærk venligst, at du skal have Windows Messenger installeret for at anvende denne mulighed.',
	'IM_MSNM_BROWSER'		=> 'Din browser understøtter ikke dette.',
	'IM_MSNM_CONNECT'		=> 'MSNM er ikke tilsluttet. Du skal tilslutte dig MSNM for at fortsætte.',
	'IM_NAME'				=> 'Dit navn',
	'IM_NO_DATA'			=> 'Der er ingen tilgængelig kontaktinformation for denne bruger.',
	'IM_NO_JABBER'			=> 'Desværre, Jabbers direct messaging understøttes ikke på denne server. Du skal have installeret en Jabber klient på din PC for at kunne kontakte ovennævnte modtager.',
	'IM_RECIPIENT'			=> 'Modtager',
	'IM_SEND'				=> 'Send besked',
	'IM_SEND_MESSAGE'		=> 'Send besked',
	'IM_SENT_JABBER'		=> 'Din besked til %1$s er afsendt.',
	'IM_USER'				=> 'Send en besked',
	
	'LAST_ACTIVE'				=> 'Sidst aktiv',
	'LESS_THAN'					=> 'Mindre end',
	'LIST_USER'					=> '1 bruger',
	'LIST_USERS'				=> '%d brugere',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Administratoren har defineret at du skal være tilmeldt som bruger og logget ind for at kunne se holdlisten.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Administratoren har defineret at du skal være tilmeldt som bruger og logget ind for at kunne se listen over tilmeldte brugere.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Administratoren har defineret at du skal være tilmeldt som bruger og logget ind for at søge brugere.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Administratoren har defineret at du skal være tilmeldt som bruger og logget ind for at se profiler.',

	'MORE_THAN'				=> 'Mere end',

	'NO_EMAIL'				=> 'Du har ikke tilladelse til at sende email til denne bruger.',
	'NO_VIEW_USERS'			=> 'Du har ikke tilladelse til at se liste over tilmeldte brugere og deres profiler.',

	'ORDER'					=> 'Rækkefølge',
	'OTHER'					=> 'Andet',

	'POST_IP'				=> 'Sendt fra IP-adresse/domæne',

	'RANK'					=> 'Rang',
	'REAL_NAME'				=> 'Modtagers navn',
	'RECIPIENT'				=> 'Modtager',
	'REMOVE_FOE'			=> 'Fjern ignoreret bruger',
	'REMOVE_FRIEND'			=> 'Slet ven',

	'SEARCH_USER_POSTS'		=> 'Vis brugers indlæg',
	'SELECT_MARKED'			=> 'Vælg markerede',
	'SELECT_SORT_METHOD'	=> 'Vælg sorteringsmåde',
	'SEND_AIM_MESSAGE'		=> 'Send besked med AIM',
	'SEND_ICQ_MESSAGE'		=> 'Send besked med ICQ',
	'SEND_IM'				=> 'Send besked',
	'SEND_JABBER_MESSAGE'	=> 'Send besked med Jabber',
	'SEND_MESSAGE'			=> 'Besked',
	'SEND_MSNM_MESSAGE'		=> 'Send besked med MSNM/WLM',
	'SEND_YIM_MESSAGE'		=> 'Send besked med YIM',
	'SORT_EMAIL'			=> 'Email',
	'SORT_LAST_ACTIVE'		=> 'Sidst aktiv',
	'SORT_POST_COUNT'		=> 'Antal indlæg',

	'USERNAME_BEGINS_WITH'	=> 'Brugernavn begynder med',
	'USER_ADMIN'			=> 'Administrér bruger',
	'USER_FORUM'			=> 'Brugerstatistikker',
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Board tilstedeværelse',

	'VIEWING_PROFILE'		=> 'Ser på - %s profil',
	'VISITED'				=> 'Sidst besøgt',

	'WWW'					=> 'Hjemmeside',
));

?>