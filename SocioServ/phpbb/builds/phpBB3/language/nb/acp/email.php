<?php
/** 
*
* acp_email.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-05-27 - phpBB.no
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
	'SEND_IMMEDIATELY'	=> 'Send umiddelbart',
	'ACP_MASS_EMAIL_EXPLAIN'	=> 'Her kan du sende ut e-poster til enten alle forumets brukere eller alle brukere i en spesifik gruppe, <strong>forutsatt at de ikke har valgt å reservere seg mot å motta masseutsendte e-poster</strong>. For å oppnå dette vil en e-post bli sendt ut til administratoradressen du har spesifisert i foruminnstillingene, med alle mottakerene satt som blindkopi-mottakere (BCC). Standardinnstillingen er å kun sende mailen til 50 mottakere av gangen, om det er flere mottakere enn dette vil flere e-mailer bli sendt. Hvis du sender meldinger til en stor gruppe eller hele forumets brukerbase, så må du være tolmodig og <strong>ikke</strong> gå vekk fra siden midtveis. Det er helt normalt at masseutsending av e-poster tar lang tid. Du vil få en beskjed når utsendingen er fullført.',
	'ALL_USERS'	=> 'Alle brukere',
	'COMPOSE'	=> 'Lag',
	'EMAIL_SEND_ERROR'	=> 'Det skjedde en eller flere feil ved sending av e-posten. Vennligst sjekk  %sFeilloggen%s for mer informasjon.',
	'EMAIL_SENT'	=> 'Meldingen har blitt sendt.',
	'EMAIL_SENT_QUEUE'	=> 'Meldingen er satt i kø for å bli sendt.',
	'LOG_SESSION'	=> 'Logg e-postutsendingen til loggen',
	'SEND_TO_GROUP'	=> 'Send til gruppe',
	'SEND_TO_USERS'	=> 'Send til brukere',
	'SEND_TO_USERS_EXPLAIN'	=> 'Ved å skrive inn brukernavnnavn her vil du overskride gruppen valgt ovenfor. Skriv inn hvert brukernavn på en ny linje.',
	'MAIL_HIGH_PRIORITY'	=> 'Høy',
	'MAIL_LOW_PRIORITY'	=> 'Lav',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'	=> 'E-postens prioritet',
	'MASS_MESSAGE'	=> 'Meldingen',
	'MASS_MESSAGE_EXPLAIN'	=> 'Skriv kun inn ren tekst. All HTML-kode vil bli fjernet før meldingen blir sendt.',
	'NO_EMAIL_MESSAGE'	=> 'Du må skrive inn en melding.',
	'NO_EMAIL_SUBJECT'	=> 'Du må spesifisere et emne for meldingen din.',
));

?>