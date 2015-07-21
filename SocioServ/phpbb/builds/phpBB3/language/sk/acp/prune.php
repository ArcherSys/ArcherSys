<?php
/**
*
* acp_prune [Slovak]
*
* @package language
* @version $Id: prune.php,v 1.8 2006/11/20 17:37:54 dhn2 Exp $
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Tu môžete odstrániť (alebo deaktivovať) používateľov z fóra. To môžete spraviť podľa rôznych kritérií - podľa počtu odoslaných príspevkov, poslednej aktivity atď. Všetky kritériá je možné kombinovať, napr. používatelia naposledy aktívni 2002-01-01 a s počtom príspevkov nižším ako 10. Môžete taktiež ručne zadať zoznam používateľov do textového poľa, vtedy budú kritéria budú ignorované. Buďte opatrný pri práci s touto funkciou! Ak raz odstránite používateľa, nie je možné akciu vrátiť naspäť.',

	'DEACTIVATE_DELETE'			=> 'Deaktivovať alebo odstrániť',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Vyberte, či chcete deaktivovať alebo odstrániť používateľov. Pozor, nie je možné vrátiť naspäť!',
	'DELETE_USERS'				=> 'Odstrániť',
	'DELETE_USER_POSTS'			=> 'Odstrániť príspevky prečistených používateľov',
	'DELETE_USER_POSTS_EXPLAIN' => 'Odstrániť príspevky používateľov odstránených pri prečisťovaní (nemá účinok na deaktivovaných používateľov)',

	'JOINED_EXPLAIN'			=> 'Zadajte dátum vo formáte <kbd>RRRR-MM-DD</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Zadajte dátum vo formáte <kbd>RRRR-MM-DD</kbd>.',

	'PRUNE_USERS_LIST'				=> 'Používatelia na prečistenie',
	'PRUNE_USERS_LIST_DELETE'		=> 'Vďaka zadaným kritériám budú odstránené nasledujúce používateľské účty.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Vďaka zadaným kritériám budú deaktivované nasledujúce používateľské účty.',

	'SELECT_USERS_EXPLAIN'		=> 'Sem môžete zadať používateľské mená, pre ktoré majú byť použité nastavené kritéria.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Vybraní používatelia boli úspešne deaktivovaní.',
	'USER_DELETE_SUCCESS'		=> 'Vybraní používatelia boli úspešne odstránení.',
	'USER_PRUNE_FAILURE'		=> 'Vybraným kritériám nevyhoveli žiadni používatelia.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Zadaný dátum nie je správny, použite formát <kbd>RRRR-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Tu je možné odstrániť témy, do ktorých boli odoslané nové príspevky alebo neboli zobrazené za zadaný počet dní. Pokiaľ nezadáte počet dní, odstránené budú všetky témy. V základnom nastavení nebudú odstránené témy, v ktorých prebieha hlasovanie ani Dôležité témy a Oznámenia.',

	'FORUM_PRUNE'		=> 'Prečistenie fóra',

	'NO_PRUNE'			=> 'Neboli prečistené žiadne fóra.',

	'SELECTED_FORUM'	=> 'Označené fórum',
	'SELECTED_FORUMS'	=> 'Označené fóra',

	'POSTS_PRUNED'					=> 'Prečistené príspevky',
	'PRUNE_ANNOUNCEMENTS'			=> 'Prečistiť témy označené ako Dôležité',
	'PRUNE_FINISHED_POLLS'			=> 'Prečistiť uzavreté hlasovania',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Odstrániť témy, v ktorých bolo hlasovanie ukončené.',
	'PRUNE_FORUM_CONFIRM'			=> 'Naozaj chcete prečistiť označené fóra pomocou zvolených kritérií? Túto akciu nie je vrátiť naspäť, nie je možné obnoviť prečistené témy a príspevky.',
	'PRUNE_NOT_POSTED'				=> 'Počet dní od poslednej odpovede',
	'PRUNE_NOT_VIEWED'				=> 'Počet dní od posledného zobrazenia',
	'PRUNE_OLD_POLLS'				=> 'Prečistiť staré hlasovania',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Odstráni témy s hlasovaním, v ktorých sa nehlasovalo dlhšie ako zadaný čas od posledného príspevku.',
	'PRUNE_STICKY'					=> 'Prečistiť Oznámenia',
	'PRUNE_SUCCESS'					=> 'Prečistenie fóra úspešne dokončené.',

	'TOPICS_PRUNED'		=> 'Prečistené témy',
));

?>
