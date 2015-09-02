<?php
/** 
*
* acp_email [Finnish [Fin]]
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Täältä voit lähettää sähköpostia kaikille käyttäjille, tai vain tietylle käyttäjäryhmälle. Sähköpostiviesti lähetetään käyttäen ylläpitäjän sähköpostiosoitetta lähettäjänä ja lähettämällä jokaisen viestin sokeana kopiona (BCC). Mikäli lähetät viestin käyttäjäryhmälle, jossa on paljon jäseniä. Odota rauhassa, älä keskeytä toimintoa ennen kuin se on valmis. On aivan normaalia, että sähköpostin lähetykseen kuluu aikaa. Saat ilmoituksen, kun viestit ovat lähetetyt.',
	'ALL_USERS'						=> 'Kaikki käyttäjät',

	'COMPOSE'				=> 'Luo uusi',

	'EMAIL_SEND_ERROR'		=> 'Viestin lähetyksessä tapahtui yksi tai useampi virhe. Ole hyvä ja tarkista %sVirhelogista%s Tarkemmat virheilmoitukset.',
	'EMAIL_SENT'			=> 'Viestisi on lähetetty.',
	'EMAIL_SENT_QUEUE'		=> 'Viestisi odottaa lähetystä.',

	'LOG_SESSION'			=> 'Kirjaa sähköpostin tapahtumat kriittiseen logiin',

	'SEND_IMMEDIATELY'		=> 'Lähetä heti',
	'SEND_TO_GROUP'			=> 'Lähetä ryhmälle',
	'SEND_TO_USERS'			=> 'Lähetä käyttäjille',
	'SEND_TO_USERS_EXPLAIN'	=> 'Tähän laitetut nimet ohittavat mahdolliset käyttäjäryhmien valinnat. Laita jokainen käyttäjätunnus omalle riville.',
	
	'MAIL_HIGH_PRIORITY'	=> 'Korkea',
	'MAIL_LOW_PRIORITY'		=> 'Pieni',
	'MAIL_NORMAL_PRIORITY'	=> 'Normaali',
	'MAIL_PRIORITY'			=> 'Sähköpostin tärkeys',
	'MASS_MESSAGE'			=> 'Viestisi',
	'MASS_MESSAGE_EXPLAIN'	=> 'Huomaa, että voit lähettää vain tekstiä. Kaikki muotoilut poistetaan ennen lähetystä.',
	
	'NO_EMAIL_MESSAGE'		=> 'Kirjoita viesti.',
	'NO_EMAIL_SUBJECT'		=> 'Anna viestille otsikko.',
));

?>