<?php
/** 
*
* viewtopic [Česky]
*
* @package language
* @version $Id: viewtopic.php,v 1.17 2006/12/22 22:51:33 shs Exp $
* @copyright (c) 2005 phpBB Group 
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
	'ATTACHMENT'						=> 'Příloha',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Přílohy jsou vypnuty.',

	'BOOKMARK_ADDED'		=> 'Záložka témata byla úspěšně uložena.',
	'BOOKMARK_REMOVED'		=> 'Záložka byla úspěšně odstraněna.',
	'BOOKMARK_TOPIC'		=> 'Zazáložkovat',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Odstranit ze záložek',
	'BUMPED_BY'				=> 'Naposledy oživil %1$s v %2$s',
	'BUMP_TOPIC'			=> 'Oživit téma',

	'CODE'					=> 'Kód',

	'DELETE_TOPIC'			=> 'Odstranit téma',
	'DOWNLOAD_NOTICE'		=> 'Nemáte oprávnění prohlížet přiložené soubory..',

	'EDITED_TIMES_TOTAL'	=> 'Naposledy upravil %1$s dne %2$s, celkově upraveno %3$d',
	'EDITED_TIME_TOTAL'		=> 'Naposledy upravil %1$s dne %2$s, celkově upraveno %3$d',
	'EMAIL_TOPIC'			=> 'Napsat e-mail',
	'ERROR_NO_ATTACHMENT'	=> 'Vybraná příloha už neexistuje',

	'FILE_NOT_FOUND_404'	=> 'Soubor <strong>%s</strong> nebyl nalezen nebo je porušen.',
	'FORK_TOPIC'			=> 'Zkopírovat téma',

	'LINKAGE_FORBIDDEN'		=> 'Nejste autorizovaný pro prohlížení a stahování z tohoto webu.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Byli jste upozorněni na toto téma, přihlašte se pro jeho zobrazení.',
	'LOGIN_VIEWTOPIC'		=> 'Administrátor vyžaduje registraci pro zobrazení tohoto tématu.',

	'MAKE_ANNOUNCE'				=> 'Změnit na Oznámení',
	'MAKE_GLOBAL'				=> 'Změnit na Globální',
	'MAKE_NORMAL'				=> 'Změnit na Normální',
	'MAKE_STICKY'				=> 'Změnit na Důležité',
	'MAX_OPTIONS_SELECT'		=> 'Můžete označit <strong>%d</strong> možnosti',
	'MAX_OPTION_SELECT'			=> 'Můžete označit <strong>1</strong> možnost',
	'MISSING_INLINE_ATTACHMENT'	=> 'Příloha <strong>%s</strong> je dlouhodobě nedostupná.',
	'MOVE_TOPIC'				=> 'Přesunout téma',

	'NO_ATTACHMENT_SELECTED'=> 'Nevybral jste přílohu ke stažení nebo zobrazení.',
	'NO_NEWER_TOPICS'		=> 'V tomto fóru nejsou žádná novější témata',
	'NO_OLDER_TOPICS'		=> 'V tomto fóru nejsou žádná starší témata',
	'NO_UNREAD_POSTS'		=> 'V tomto fóru nejsou další nepřečtená témata.',
	'NO_VOTE_OPTION'		=> 'Musíte vybrat možnost.',
	'NO_VOTES'				=> 'Žádná hlasování',

	'POLL_ENDED_AT'			=> 'Anketa končí za %s',
	'POLL_RUN_TILL'			=> 'Anketa do %s',
	'POLL_VOTED_OPTION'		=> 'Hlasoval jste pro tuto možnost',
	'PRINT_TOPIC'			=> 'Verze pro tisk',

	'QUICK_MOD'				=> 'Rychlé úpravy',
	'QUOTE'					=> 'Citace',

	'REPLY_TO_TOPIC'		=> 'Odpovědět na téma',
	'RETURN_POST'			=> '%sVrátit se na příspěvek%s',

	'SUBMIT_VOTE'			=> 'Potvrdit volbu',

	'TOTAL_VOTES'			=> 'Celkem hlasů',

	'UNLOCK_TOPIC'			=> 'Odemknout téma',

	'VIEW_INFO'				=> 'Detaily příspěvku',
	'VIEW_NEXT_TOPIC'		=> 'Následující téma',
	'VIEW_PREVIOUS_TOPIC'	=> 'Předchozí téma',
	'VIEW_RESULTS'			=> 'Zobrazit výsledky',
	'VIEW_TOPIC_POST'		=> 'Příspěvek: 1',
	'VIEW_TOPIC_POSTS'		=> 'Příspěvků: %d',
	'VIEW_UNREAD_POST'		=> 'Zobrazit nepřečtené zprávy',
	'VISIT_WEBSITE'			=> 'Zobrazit autorovy stránky',
	'VOTE_SUBMITTED'		=> 'Váš hlas byl přijat',
));

?>