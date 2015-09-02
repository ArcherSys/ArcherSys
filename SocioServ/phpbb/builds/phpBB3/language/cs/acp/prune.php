<?php
/** 
*
* acp_prune [Česky]
*
* @package language
* @version $Id: prune.php,v 1.13 2006/11/20 17:37:54 dhn2 Exp $
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
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Zde můžete smazat (nebo deaktivovat) uživatele z vaší skupiny. To můžete provést různými způsoby; podle odeslaných příspěvků, poslední aktivity atd, většinu kritérií lze kombinovat. Například uživatelé s poslední aktivitou 2002-01-01 a s počtem příspěvků nižším než 10. Můžete také zadat jen seznam uživatelů do textového pole a ostatní kritéria budou ignorována. Buďte opatrní při pročištění uživatelů, smazané uživatele nelze vrátit zpět.',

	'DEACTIVATE_DELETE'			=> 'Deaktivovat nebo smazat',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Vyberte uživatele které chcete trvale deaktivovat, nebo smazat. Pozor, nelze napravit!',
	'DELETE_USERS'				=> 'Smazat',
	'DELETE_USER_POSTS'			=> 'Odstranit příspěvky pročištěných uživatelů',
	'DELETE_USER_POSTS_EXPLAIN' => 'Odstranit příspěvky smazaných uživatelů při pročišťování (nemá učinek pro deaktivované uživatele)',

	'JOINED_EXPLAIN'			=> 'Zadejte datum ve formátu <kbd>RRRR-MM-DD</kbd> ',

	'LAST_ACTIVE_EXPLAIN'		=> 'Zadejte datum ve formátu <kbd>RRRR-MM-DD</kbd> ',

	'PRUNE_USERS_LIST'				=> 'Uživatele k pročištění',
	'PRUNE_USERS_LIST_DELETE'		=> 'S vybranými kritérii budou odstraněny následující uživatelské účty.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'S vybranými kritérii budou deaktivovány následující uživatelské účty.',

	'SELECT_USERS_EXPLAIN'		=> 'Zde můžete zadat určitá uživatelské jména, pro které mají být použity nastavená kritéria.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Vybraní uživatelé byli úspěšně deaktivováni.',
	'USER_DELETE_SUCCESS'		=> 'Vybraní uživatelé byli úspěšně smazáni.',
	'USER_PRUNE_FAILURE'		=> 'Vybraným kritériům nevyhovují žádní uživatelé.',
	
	'WRONG_ACTIVE_JOINED_DATE'	=> 'Zadané datum není správné, použijte formát <kbd>RRRR-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Toto smaže témata, která byla odeslána nebo zobrazena denně méněkrát než-li určený počet. Když nezadáte číslo všechny témata budou smazána. Ve výchozím nastavení nesmaže témata s hlasováním, která stále běží - smaže jen důležité a oznámení.',

	'FORUM_PRUNE'		=> 'Pročištění fóra',

	'NO_PRUNE'			=> 'Žádná pročištěná fóra',

	'SELECTED_FORUM'	=> 'Vybrané fórum',
	'SELECTED_FORUMS'	=> 'Vybraná fóra',

	'POSTS_PRUNED'					=> 'Pročištěné příspěvky',
	'PRUNE_ANNOUNCEMENTS'			=> 'Pročistit důležité',
	'PRUNE_FINISHED_POLLS'			=> 'Pročistit uzavřená hlasování',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Vymazat témata s uzavřeným hlasováním',
	'PRUNE_FORUM_CONFIRM'			=> 'Opravdu chcete pročistit vybraná fóra pomocí zvolených kritérií? Tato akce je nevratná, a nelze obnovit pročištené témata a příspěvky.',
	'PRUNE_NOT_POSTED'				=> 'Dny od poslední odpovědi',
	'PRUNE_NOT_VIEWED'				=> 'Dny od posledního zobrazení',
	'PRUNE_OLD_POLLS'				=> 'Pročistit stará hlasování',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Odstraní témata s anketou, ve které se nehlasovalo déle, než je nastaven čas od posledního příspěvku.',
	'PRUNE_STICKY'					=> 'Pročistit oznámení',
	'PRUNE_SUCCESS'					=> 'Pročištění fóra je dokončeno',

	'TOPICS_PRUNED'		=> 'Pročištění starých témat',
));

?>