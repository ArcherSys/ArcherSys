<?php
/** 
*
* acp_bots [Italian]
*
* @package language
* @version $Id: bots.php,v 1.11 2007/07/09 11:00:14 kellanved Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @ translation by phpbb.it last revised 2007/07/29 00:15:00
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Gestisci bot',
	'BOTS_EXPLAIN'		=> '“Bots”, “spiders” o “crawlers” sono agenti automatizzati usati comunemente dai motori di ricerca per aggiornare i loro database. Dal momento che raramente fanno un uso corretto delle sessioni, possono distorcere il valore del contatore visite, aumentare il carico e talvolta non riescono a indicizzare i siti correttamente. Qui potete definire un tipo speciale di utente in modo tale da ovviare a questi problemi.',
	'BOT_ACTIVATE'		=> 'Attiva',
	'BOT_ACTIVE'		=> 'Attiva bot',
	'BOT_ADD'			=> 'Aggiungi bot',
	'BOT_ADDED'			=> 'Nuovo bot aggiunto.',
	'BOT_AGENT'			=> 'Agent match',
	'BOT_AGENT_EXPLAIN'	=> 'Una stringa che corrisponde all’agent visualizzatore di bot; sono permessi match parziali.',
	'BOT_DEACTIVATE'	=> 'Disattiva',
	'BOT_DELETED'		=> 'Bot cancellato.',
	'BOT_EDIT'			=> 'Modifica bot',
	'BOT_EDIT_EXPLAIN'	=> 'Qui puoi aggiungere o modificare un bot esistente. Devi definire una stringa agent e/o uno o più indirizzi IP (o gamma di indirizzi) corrispondenti. Fai attenzione definendo le stringhe o gli indirizzi agent corrispondenti. Puoi anche specificare uno stile e una lingua che il bot vedrà nella board. Questo può permetterti di ridurre l’uso di banda usando uno stile semplice per i bot. Ricorda di mettere le autorizzazioni appropriate al gruppo speciale bot.',
	'BOT_LANG'			=> 'Lingua del bot',
	'BOT_LANG_EXPLAIN'	=> 'La lingua che si presenta al bot quando fa ricerca.',
	'BOT_LAST_VISIT'	=> 'Ultima visita',
	'BOT_IP'			=> 'Indirizzo IP del bot',
	'BOT_IP_EXPLAIN'	=> 'Confronti parziali consentiti: separa gli indirizzi con una virgola.',
	'BOT_NAME'			=> 'Nome del bot',
	'BOT_NAME_EXPLAIN'	=> 'Utilizzato solo per tua informazione.',
	'BOT_NAME_TAKEN' 	=> 'Il nome è già in uso nella board e non puoi assegnarlo al bot.',
	'BOT_NEVER'			=> 'Mai',
	'BOT_STYLE'			=> 'Stile del bot',
	'BOT_STYLE_EXPLAIN'	=> 'Lo stile utilizzato dal bot per la board.',
	'BOT_UPDATED'		=> 'Bot esistente aggiornato con successo.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'L’agent bot che hai fornito è simile a quello che utilizzi attualmente. Per favore regola l’agent per questo bot.',
	'ERR_BOT_NO_IP'				=> 'Gli indirizzi IP che hai fornito non sono validi o l’hostname non ha potuto essere risolto.',
	'ERR_BOT_NO_MATCHES'		=> 'Devi fornire almeno un agent o un IP per questo bot.',

	'NO_BOT'		=> 'Nessun bot trovato con l’ID specificato.',
	'NO_BOT_GROUP'	=> 'Impossibile trovare gruppo bot speciale.',
));

?>