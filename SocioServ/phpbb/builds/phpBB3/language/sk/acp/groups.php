<?php
/**
*
* acp_groups [Slovak]
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Pomocou tohto panela môžete spravovať všetky vaše používateľské skupiny, môžete odstrániť, vytvoriť a upravovať existujúce skupiny. Môžete zvoliť vedúcich, zmeniť typ skupiny, nastaviť jej názov a popis.',
	'ADD_USERS'						=> 'Pridať používateľa',
	'ADD_USERS_EXPLAIN'				=> 'Tu môžete pridať nových používateľov do skupiny. Môžete vybrať, či sa táto skupina stane novou predvolenou skupinou pre označených používateľov, prípadne ich môžete označiť ako vedúcich skupiny. Prosím, zadajte každé používateľské meno na nový riadok.',

	'COPY_PERMISSIONS'				=> 'Kopírovať oprávnenia z',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Po vytvorení bude mať nová skupina rovnaké práva ako označená.',
	'CREATE_GROUP'					=> 'Vytvoriť novú skupinu',

	'GROUPS_NO_MEMBERS'				=> 'Táto skupina nemá žiadnych členov',
	'GROUPS_NO_MODS'				=> 'Neboli určení vedúci skupiny',

	'GROUP_APPROVE'					=> 'Schváliť člena',
	'GROUP_APPROVED'				=> 'Schválení členovia',
	'GROUP_AVATAR'					=> 'Obrázok postavičky skupiny',
	'GROUP_AVATAR_EXPLAIN'			=> 'Tento obrázok bude zobrazený v Ovládacom paneli skupiny.',
	'GROUP_CLOSED'					=> 'Uzavretá',
	'GROUP_COLOR'					=> 'Farba skupiny',
	'GROUP_COLOR_EXPLAIN'			=> 'Určuje, ako budú vyzerať mená členov, prázdne pole znamená štandardné nastavenia.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Naozaj chcete pridať používateľa %1$s do skupiny?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Naozaj chcete pridať používateľov %1$s do skupiny?',
	'GROUP_CREATED'					=> 'Skupina bola úspešne vytvorená.',
	'GROUP_DEFAULT'					=> 'Predvolená skupina nastavená pre všetkých členov.',
	'GROUP_DEFS_UPDATED'			=> 'Predvolená skupina nastavená pre všetkých označených používateľov.',
	'GROUP_DELETE'					=> 'Odstrániť člena zo skupiny',
	'GROUP_DELETED'					=> 'Skupina bol odstránená a predvolená skupina pre používateľov bola úspešne nastavená.',
	'GROUP_DEMOTE'					=> 'Zrušiť vedúceho skupiny',
	'GROUP_DESC'					=> 'Popis skupiny',
	'GROUP_DETAILS'					=> 'Detaily skupiny',
	'GROUP_EDIT_EXPLAIN'			=> 'Tu môžete upravovať existujúcu skupinu. Môžete zmeniť jej názov, popis a typ (otvorená, uzavretá atď.). Môžete tiež nastaviť niektoré skupinové nastavenia ako farbu, hodnotenie atď. Zmeny sa prejavia v aktuálnych nastaveniach používateľov. Pamätajte, že členovia skupiny si môžu zmeniť obrázok postavičky, pokiaľ ste nezmenili príslušné oprávnenia pre používateľov.',
	'GROUP_ERR_USERS_EXIST'			=> 'Zvolení používatelia už sú členmi tejto skupiny.',
	'GROUP_FOUNDER_MANAGE'			=> 'Upravovať skupinu môže len zakladateľ',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Obmedziť správu skupiny len pre zakladateľov skupiny. Používateľa s právami tejto skupiny môžu vidieť ju ako aj jej členov.',
	'GROUP_HIDDEN'					=> 'Skrytá',
	'GROUP_LANG'					=> 'Jazyk skupiny',
	'GROUP_LEAD'					=> 'Vedúci skupiny',
	'GROUP_LEADERS_ADDED'			=> 'Noví vodcovia skupiny boli úspešne pridaní.',
	'GROUP_LEGEND'					=> 'Zobraziť skupinu v legende',
	'GROUP_LIST'					=> 'Aktuálni členovia',
	'GROUP_LIST_EXPLAIN'			=> 'Toto je kompletný zoznam členov tejto skupiny. Môžete odstraňovať členov (až na niektoré špeciálne skupiny) alebo pridávať nových členov.',
	'GROUP_MEMBERS'					=> 'Členovia skupiny',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Toto je kompletný zoznam členov tejto skupiny. Zahŕňa oddelené sekcie pre vedúcich, čakajúcich a existujúcich členov. Tu môžete upravovať všetky hľadiská, ktoré určia, kto bude členom a aká je jeho rola. Ak chcete zrušiť vedúceho skupiny, ale zároveň ho ponechať v skupine, použite namiesto odstránenia voľbu Zrušiť vedúceho skupiny. Podobne použite voľbu Označiť za vedúceho v prípade, ak chcete nastaviť používateľa ako Vedúceho skupiny..',
	'GROUP_MESSAGE_LIMIT'			=> 'Počet súkromných správ v skupine na priečinok',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Toto nastavenie je nadradené nastaveniu počtu súkromných správ v priečinkoch používateľa. Zadaním hodnoty 0 určíte predvolený limit.',
	'GROUP_MODS_ADDED'				=> 'Noví vedúci skupiny boli úspešne pridaní.',
	'GROUP_MODS_DEMOTED'			=> 'Vedúci skupiny boli zrušení.',
	'GROUP_MODS_PROMOTED'			=> 'Členovia skupiny boli úspešne povýšení.',
	'GROUP_NAME'					=> 'Názov skupiny',
	'GROUP_NAME_TAKEN'				=> 'Zadaný názov skupiny sa už používa, vyberte iný.',
	'GROUP_OPEN'					=> 'Otvorená',
	'GROUP_PENDING'					=> 'Čakajúci členovia',
	'GROUP_PROMOTE'					=> 'Označiť za vedúceho skupiny',
	'GROUP_RANK'					=> 'Hodnotenie skupiny',
	'GROUP_RECEIVE_PM'				=> 'Skupina môže prijímať súkromné správy',
	'GROUP_RECEIVE_PM_EXPLAIN'				=> 'Nezabudnite, že skryté skupiny nemôžu prijímať súkromné správy.',
	'GROUP_REQUEST'					=> 'Žiadosť',
	'GROUP_SETTINGS_SAVE'			=> 'Všeobecné nastavenia skupiny',
	'GROUP_TYPE'					=> 'Typ skupiny',
	'GROUP_TYPE_EXPLAIN'			=> 'Toto určuje, ktorí používatelia sa môžu pripojiť k tejto skupine alebo ju môžu prezerať.',
	'GROUP_UPDATED'					=> 'Nastavenia skupiny boli úspešne aktualizované.',

	'GROUP_USERS_ADDED'				=> 'Noví používatelia boli pridaní do skupiny.',
	'GROUP_USERS_EXIST'				=> 'Označení používatelia už sú členmi skupiny.',
	'GROUP_USERS_REMOVE'			=> 'Používatelia boli odstránení zo skupiny a nové predvolené nastavenia boli úspešne nastavené.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Nastaviť ako predvolenú skupinu pre každého člena',
	'MEMBERS'				=> 'Členovia',

	'NO_GROUP'					=> 'Neboli určené žiadne skupiny.',
	'NO_GROUPS_CREATED'			=> 'Neboli vytvorené žiadne skupiny.',
	'NO_PERMISSIONS'			=> 'Nekopírovať oprávnenia',
	'NO_USERS'					=> 'Nie sú pridaní žiadni používatelia.',

	'SPECIAL_GROUPS'			=> 'Preddefinované skupiny',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Preddefinované skupiny sú skupiny, ktoré nemôžu byť odstránené alebo priamo upravované. Avšak môžete pridať nových používateľov a meniť základné nastavenia.',

	'TOTAL_MEMBERS'				=> 'Členovia',

	'USERS_APPROVED'				=> 'Používatelia boli úspešne schválený.',
	'USER_DEFAULT'					=> 'Predvolené pre používateľa',
	'USER_DEF_GROUPS'				=> 'Používateľmi definované skupiny',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Toto sú skupiny vytvorené vami alebo inými administrátormi. Môžete spravovať členstvá ako aj upravovať vlastnosti skupín alebo dokonca odstrániť skupiny.',
	'USER_GROUP_DEFAULT'			=> 'Nastaviť ako primárnu skupinu',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Áno, nastaviť túto skupinu ako štandardnú skupinu pre pridaných používateľov.',
	'USER_GROUP_LEADER'				=> 'Nastaviť ako správcu skupiny',
));

?>
