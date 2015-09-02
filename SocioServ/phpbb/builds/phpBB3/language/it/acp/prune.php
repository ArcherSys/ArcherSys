<?php
/** 
*
* acp_prune [Italian]
*
* @package language
* @version $Id: prune.php,v 1.13 2007/05/11 12:25:28 acydburn Exp $
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Qui puoi cancellare o disattivare gli utenti. Puoi farlo in diversi modi: tramite conteggio dei messaggi, in base all’ultima visita, ecc. Ognuno di questi criteri di scelta può essere combinato, ad esempio puoi eliminare gli utenti che hanno come ultima visita una data antecedente il 2002-01-01, ma solo se hanno meno di 10 messaggi. In alternativa puoi inserire direttamente nella casella di testo una lista di nomi: questo ignorerà tutti i criteri di scelta inseriti. Fai attenzione con questa funzione! Una volta che un utente è cancellato non c’è modo di tornare indietro.',

	'DEACTIVATE_DELETE'			=> 'Disattiva o cancella',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Scegli se disattivare gli utenti o cancellarli del tutto; attenzione, non c’è modo di tornare indietro!',
	'DELETE_USERS'				=> 'Cancella',
	'DELETE_USER_POSTS'			=> 'Cancella i messaggi dell’utente',
	'DELETE_USER_POSTS_EXPLAIN' => 'Rimuovi tutti i messaggi scritti dall’utente che stai eliminando; non ha effetto se l’utente viene disattivato.',

	'JOINED_EXPLAIN'			=> 'Inserisci una data nel formato <kbd>YYYY-MM-DD</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Inserisci una data nel formato <kbd>YYYY-MM-DD</kbd>.',

	'PRUNE_USERS_LIST'				=> 'Lista utenti soggetti a cancellazione',
	'PRUNE_USERS_LIST_DELETE'		=> 'Con il criterio di scelta impostato, i seguenti account saranno rimossi.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Con il criterio di scelta impostato, i seguenti account saranno disattivati.',

	'SELECT_USERS_EXPLAIN'		=> 'Inserisci qui i nomi utenti prescelti; i criteri di scelta qui sopra verranno ignorati.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Gli utenti selezionati sono stati disattivati.',
	'USER_DELETE_SUCCESS'		=> 'Gli utenti selezionati sono stati cancellati.',
	'USER_PRUNE_FAILURE'		=> 'Nessun utente selezionato con questo criterio di scelta.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'La data inserita non è corretta, il formato corretto è <kbd>YYYY-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
    'ACP_PRUNE_FORUMS_EXPLAIN'   => 'Questo cancellerà ogni argomento nel quale non vi è stato scritto alcun messaggio o che non è stato letto da un certo numero di giorni da te scelto. Se non inserisci alcun numero tutti gli argomenti verranno cancellati. Come impostazione base non vengono rimossi argomenti nei quali i sondaggi sono ancora in corso e nemmeno gli argomenti importanti.', 
	
	'FORUM_PRUNE'		=> 'Cancellazione nei forum',

	'NO_PRUNE'			=> 'Nessun forum soggetto a cancellazione.',

	'SELECTED_FORUM'	=> 'Forum selezionato',
	'SELECTED_FORUMS'	=> 'Forum selezionati',

	'POSTS_PRUNED'					=> 'Messaggi soggetti a cancellazione',
	'PRUNE_ANNOUNCEMENTS'			=> 'Cancellazione annunci',
	'PRUNE_FINISHED_POLLS'			=> 'Cancellazione sondaggi chiusi',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Rimuove gli argomenti con sondaggi terminati.',
	'PRUNE_FORUM_CONFIRM'			=> 'Sei sicuro di voler effettuare la cancellazione nei forum selezionati con i parametri specificati? Una volta rimossi, non potrai in alcun modo recuperare i messaggi e gli argomenti.',
	'PRUNE_NOT_POSTED'				=> 'Giorni trascorsi dall’ultimo messaggio',
	'PRUNE_NOT_VIEWED'				=> 'Giorni trascorsi dall’ultima lettura',
	'PRUNE_OLD_POLLS'				=> 'Cancellazione vecchi sondaggi',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Rimuove gli argomenti con sondaggi non votati da un certo numero di giorni.',
	'PRUNE_STICKY'					=> 'Cancellazione argomenti importanti',
	'PRUNE_SUCCESS'					=> 'Cancellazione all’interno dei forum avvenuta.',

	'TOPICS_PRUNED'		=> 'Argomenti soggetti a cancellazione',
));

?>