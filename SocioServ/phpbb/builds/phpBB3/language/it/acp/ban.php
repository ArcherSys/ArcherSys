<?php
/** 
*
* acp_ban [Italian]
*
* @package language
* @version $Id: ban.php,v 1.18 2007/05/17 14:58:40 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @ translation by phpbb.it last revised 2007/08/01 00:35:00
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
	'1_HOUR'		=> '1 ora',
	'30_MINS'		=> '30 minuti',
	'6_HOURS'		=> '6 ore',

	'ACP_BAN_EXPLAIN'	=> 'Questa è la sezione dove puoi interdire l’accesso al forum ad alcuni utenti mediante ban, selezionandoli per nome, indirizzo IP o indirizzo e-mail. Puoi specificare il motivo dell’allontanamento che sarà visibile nel log amministrativo (non può superare i 3000 caratteri di lunghezza); puoi inoltre decidere la durata del ban, sia specificando il numero di giorni di durata sia imponendolo fino a una data specifica (selezionando la voce <span style="text-decoration: underline;">Fino al -&gt;</span> e inserendo la data nel formato <kbd>YYYY-MM-DD</kbd>).',

	'BAN_EXCLUDE'			=> 'Escludi dal ban',
	'BAN_LENGTH'			=> 'Durata del ban',
	'BAN_REASON'			=> 'Motivo del provvedimento',
	'BAN_GIVE_REASON'		=> 'Motivazione mostrata all’utente',
	'BAN_UPDATE_SUCCESSFUL'	=> 'La lista è stata aggiornata.',

	'EMAIL_BAN'					=> 'Banna uno o più indirizzi e-mail',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Escludi dal ban gli indirizzi e-mail specificati.',
	'EMAIL_BAN_EXPLAIN'			=> 'Puoi specificare più indirizzi e-mail, uno per riga. Puoi usare anche il carattere jolly asterisco (*), es. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, ecc..',
	'EMAIL_NO_BANNED'			=> 'Nessun indirizzo e-mail risulta bannato',
	'EMAIL_UNBAN'				=> 'Riabilita o reincludi nel ban indirizzi e-mail',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Puoi riabilitare o reincludere nel ban più indirizzi e-mail in una volta selezionandoli con l’appropriata combinazione di clic e tasti per il tuo browser. Gli indirizzi e-mail esclusi dal ban hanno uno sfondo grigio.',

	'IP_BAN'					=> 'Banna uno o più indirizzi IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Escludi dal ban gli indirizzi IP specificati',
	'IP_BAN_EXPLAIN'			=> 'Puoi specificare più indirizzi IP o hostname, uno per riga. Per indicare un intervallo di indirizzi, separa inizio e fine con un trattino (-); puoi anche usare anche il carattere jolly asterisco (*), es. <samp>124.15.9.45-47</samp>, <samp>76.14.251.*</samp>, ecc..',
	'IP_HOSTNAME'				=> 'Indirizzo IP o hostname',
	'IP_NO_BANNED'				=> 'Nessun indirizzo IP risulta bannato',
	'IP_UNBAN'					=> 'Riabilita o reincludi nel ban indirizzi IP',
	'IP_UNBAN_EXPLAIN'			=> 'Puoi riabilitare o reincludere nel ban più indirizzi IP in una volta selezionandoli con l’appropriata combinazione di clic e tasti per il tuo browser. Gli indirizzi IP esclusi dal ban hanno uno sfondo grigio.',

	'LENGTH_BAN_INVALID'		=> 'La data deve essere inserita in formato <kbd>YYYY-MM-DD</kbd>.',

	'PERMANENT'		=> 'Permanente',
	
	'UNTIL'						=> 'Fino al',
	'USER_BAN'					=> 'Banna uno o più nomi utente',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Attiva questo per escludere gli utenti inseriti da tutti i ban correnti.',
	'USER_BAN_EXPLAIN'			=> 'Puoi bannare più utenti inserendone uno per linea. Usa <span style="text-decoration: underline;">Trova utente</span> per trovare e aggiungere uno o più utenti automaticamente.',
	'USER_NO_BANNED'			=> 'Nessun nome utente bannato',
	'USER_UNBAN'				=> 'Riabilita o non escludere nomi utente',
	'USER_UNBAN_EXPLAIN'		=> 'Puoi riabilitare (o non-escludere) dal ban più utenti in una volta, utilizzando l’appropriata combinazione di mouse e tastiera per il tuo computer e browser. Gli utenti esclusi hanno uno sfondo grigio.',
	

));

?>