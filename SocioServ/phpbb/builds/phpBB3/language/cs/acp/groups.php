<?php
/** 
*
* acp_groups [Česky]
*
* @package language
* @version $Id: groups.php,v 1.28 2007/01/24 11:29:56 acydburn Exp $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Z tohoto panelu můžete spravovat všechny vaše skupiny, můžete je upravovat, mazat nebo přidávat nové. Můžete zvolit vedoucí skupiny, nastavit otevřenou/uzavřenou skupinu, název skupiny nebo třeba barvu uživatelů skupiny.',
	'ADD_USERS'						=> 'Přidat uživatele',
	'ADD_USERS_EXPLAIN'				=> 'Zde můžete přidávat nové členy do skupiny. Můžete vybrat, jestli se skupina stane pro uživatele výchozí, případně je můžete nastavit na vedoucí skupiny. Každé jméno napište na nový řádek.',

	'COPY_PERMISSIONS'				=> 'Zkopírovat oprávnění od',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Při vytvoření budou skupině nastaveny stejná oprávnění, jako jsou nastaveny zde.',
	'CREATE_GROUP'					=> 'Vytvořit novou skupinu',

	'GROUPS_NO_MEMBERS'				=> 'Tato skupina nemá žádné členy',
	'GROUPS_NO_MODS'				=> 'Nejsou zvoleni žádní moderátoři skupiny',
	
	'GROUP_APPROVE'					=> 'Přijmout členy',
	'GROUP_APPROVED'				=> 'Přijatí členové',
	'GROUP_AVATAR'					=> 'Avatar skupiny',
	'GROUP_AVATAR_EXPLAIN'			=> 'Tento obrázek bude zobrazen u skupiny v Panelu Skupin.',
	'GROUP_CLOSED'					=> 'Uzavřená',
	'GROUP_COLOR'					=> 'Barva skupiny',
	'GROUP_COLOR_EXPLAIN'			=> 'Definuje barvu, ve které budou uživatelská jména členů, nechte prázdné pro výchozí barvu uživatelů.',
 	'GROUP_CONFIRM_ADD_USER'		=> 'Opravdu chcete přidat uživatele %1$s do skupiny?',
 	'GROUP_CONFIRM_ADD_USERS'		=> 'Opravdu chcete přidat uživatele %1$s do skupiny?',
	'GROUP_CREATED'					=> 'Skupina byla úspěšně vytvořena.',
	'GROUP_DEFAULT'					=> 'Skupina je pro člena výchozí',
	'GROUP_DEFS_UPDATED'			=> 'Výchozí skupina byla nastavena vybraným uživatelům',
	'GROUP_DELETE'					=> 'Odstranit uživatele ze skupiny',
	'GROUP_DELETED'					=> 'Skupina odstraněna a výchozí skupiny přenastaveny.',
	'GROUP_DEMOTE'					=> 'Degradovat vedoucího skupiny',
	'GROUP_DESC'					=> 'Popis skupiny',
	'GROUP_DETAILS'					=> 'Podrobnosti o skupině',
	'GROUP_EDIT_EXPLAIN'			=> 'Zdě můžete upravit existující skupinu. Můžete měnit její název, popis a typ (otevřená, uzavřená, atd.). Můžete také nastavit věci jako barva skupiny, hodnost a další. Změny, které jsou zde provedeny ignorují nastavení uživatele. Uživatele si mohou měnit svůj avatar, i když je nastaven pro skupinu, pokud není v oprávněních nastaveno jinak.',
	'GROUP_ERR_USERS_EXIST'			=> 'Zvolení uživatelé už jsou členy této skupiny',
	'GROUP_FOUNDER_MANAGE'			=> 'Spravují jen zakladatelé',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Omezit úpravy této skupiny jen na zakladatele přes administrační rozhraní.',
	'GROUP_HIDDEN'					=> 'Skrytá',
	'GROUP_LANG'					=> 'Jazyk skupiny',
	'GROUP_LEAD'					=> 'Moderátor skupiny',
	'GROUP_LEADERS_ADDED'			=> 'Noví moderátoři skupiny byli úspěšně přidáni.',
	'GROUP_LEGEND'					=> 'Zobrazit skupinu v legendě',
	'GROUP_LIST'					=> 'Současní členové',
	'GROUP_LIST_EXPLAIN'			=> 'Toto je kompletní seznam uživatelů s členstvím v této skupině. Můžete zde přidávat nebo odstraňovat uživatele, jak budete potřebovat.',
	'GROUP_MEMBERS'					=> 'Členové skupiny',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Toto je kompletní seznam všech členů této skupiny. Obsahuje tři části, současné členy, vedoucí skupiny a uživatele čekající na vstup. Zde můžete spravovat všechny členy ve skupině a jejich postavení v ní. Pokud chcete odstranit moderátora skupiny, ale nechcete mu odebrat členství, použijte možnost pro degradaci moderátora skupiny, místo možnosti odstranit. Podobně můžete použít funkcí "Povýšit na moderátora skupiny".',
	'GROUP_MESSAGE_LIMIT'			=> 'Limit velikosti schránky pro skupinu',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Toto nastavení ignoruje nastavení soukromých zpráv pro jednotlivé uživatele. Pokud je nastaveno na 0, není nastaven žádný limit.',
	'GROUP_MODS_ADDED'				=> 'Noví moderátoři skupiny byli nastaveni.',
	'GROUP_MODS_DEMOTED'			=> 'Vedoucí skupiny úspěšně degradováni.',
	'GROUP_MODS_PROMOTED'			=> 'Vedoucí skupiny úspěšně povýšeni.',
	'GROUP_NAME'					=> 'Název skupiny',
	'GROUP_NAME_TAKEN'				=> 'Název, který jste zvolili je již používaný, prosíme zvolte jiný.',
	'GROUP_OPEN'					=> 'Otevřená',
	'GROUP_PENDING'					=> 'Členové čekající na vstup',
	'GROUP_PROMOTE'					=> 'Povýšit na moderátora skupiny',
	'GROUP_RANK'					=> 'Hodnost skupiny',
	'GROUP_RECEIVE_PM'				=> 'Skupina může přijímat soukromé zprávy',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Berte na vědomí, že skryté skupiny nikdy nemohou přijímat zprávy pro skupinu.',
	'GROUP_REQUEST'					=> 'Žádost',
	'GROUP_SETTINGS_SAVE'			=> 'Nastavení pro celou skupinu',
	'GROUP_TYPE'					=> 'Druh skupiny',
	'GROUP_TYPE_EXPLAIN'			=> 'Toto určuje, jestli lze vstoupit do skupiny nebo ji jen zobrazovat.',
	'GROUP_UPDATED'					=> 'Nastavení skupiny byla úspěšně upravena.',
	
	'GROUP_USERS_ADDED'				=> 'Noví uživatelé byli úspěšně přidáni do skupiny.',
	'GROUP_USERS_EXIST'				=> 'Vybraní členové již jsou členy této skupiny.',
	'GROUP_USERS_REMOVE'			=> 'Uživatelé byli odebráni ze skupiny a nové výchozí nastavení bylo úspěšně nastaveno.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Nastavit skupinu jako výchozí pro všechny členy',
	'MEMBERS'				=> 'Členové',

	'NO_GROUP'					=> 'Nebyla zvolena skupina.',
	'NO_GROUPS_CREATED'			=> 'Nebyly zatím vytvořeny žádné skupiny.',
	'NO_PERMISSIONS'			=> 'Nekopírovat oprávnění',
	'NO_USERS'					=> 'Nezvolili jste žádného uživatele.',

	'SPECIAL_GROUPS'			=> 'Předdefinované skupiny',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Předdefinované skupiny jsou předem vytvořené skupiny, které nelze přímo upravit ani odstranit. Přesto můžete upravovat základní nastavení a přidávat a odebírat členy. Kliknutím na “Výchozí” můžete nastavit danou skupinu jako výchozí pro všechny členy.',

	'TOTAL_MEMBERS'				=> 'Počet členů',

	'USERS_APPROVED'				=> 'Uživatelé úspěšně přijati.',
	'USER_DEFAULT'					=> 'Uživatelova výchozí',
	'USER_DEF_GROUPS'				=> 'Skupiny definované uživateli',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Toto jsou skupiny, které jste vytvořili vy nebo jiný administrátor. Můžete upravovat členství ve skupině, upravovat samotné skupiny a můžete je i úplně odstranit. Kliknutím na “Výchozí” můžete nastavit danou skupinu jako výchozí pro všechny členy.',
	'USER_GROUP_DEFAULT'			=> 'Nastavit jako výchozí skupinu',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Pokud toto zaškrtnete, skupina bude nastavena jako výchozí pro přidané uživatele',
	'USER_GROUP_LEADER'				=> 'Nastavit na vedoucího skupiny',
));

?>