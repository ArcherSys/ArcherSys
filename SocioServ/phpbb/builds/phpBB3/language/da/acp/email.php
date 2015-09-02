<?php
/**
*
* acp_email [Danish]
*
* @package language
* @version $Id: email.php,v 1.15 2007/05/12 12:32:28 davidmj Exp $
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Her kan du sende en email til enten alle dine brugere, eller til de brugere i en specifik gruppe som <strong>har muligheden for at modtage masse-emails aktiveret</strong>. Når du sender en masse-email bliver mailen sendt til den angivne administrative emailadresse, med en blind kopi til alle modtagerne. Som standard afsendes emailen til 50 brugere ad gangen, er der 1.000 brugere som skal modtage emailen, afsendes den altså 20 gange. Vær tålmodig, når du sender email til en stor gruppe af personer og stop ikke siden halvvejs. Afsendelsen af en masse-email kan tage lang tid, men du bliver adviseret når scriptet er fuldført.',
	'ALL_USERS'						=> 'Alle brugere',

	'COMPOSE'				=> 'Skriv email',

	'EMAIL_SEND_ERROR'		=> 'Der opstod en eller flere fejl under afsendelsen af emailen. Kontrollér venligst %sFejl loggen%s for detaljerede fejlmeddelelser.',
	'EMAIL_SENT'			=> 'Denne email er blevet sendt.',
	'EMAIL_SENT_QUEUE'		=> 'Denne email er nu placeret i afsendelseskøen.',

	'LOG_SESSION'			=> 'Log mail session til kritisk log',

	'SEND_IMMEDIATELY'		=> 'Send straks',
	'SEND_TO_GROUP'			=> 'Send til gruppe',
	'SEND_TO_USERS'			=> 'Send til brugere',
	'SEND_TO_USERS_EXPLAIN'	=> 'Indtastning af navne her vil overskrive enhver gruppe valgt ovenfor. Indtast hvert brugernavn på en ny linie.',

	'MAIL_HIGH_PRIORITY'	=> 'Høj',
	'MAIL_LOW_PRIORITY'		=> 'Lav',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Email prioritet',
	'MASS_MESSAGE'			=> 'Din email',
	'MASS_MESSAGE_EXPLAIN'	=> 'Bemærk venligst at du må kun skrive ren tekst. Al markup vil blive fjernet før forsendelse.',

	'NO_EMAIL_MESSAGE'		=> 'Du skal skrive en besked.',
	'NO_EMAIL_SUBJECT'		=> 'Du skal angive en overskrift i din email.',
));

?>