<?php
/** 
*
* acp_users [Česky]
*
* @package language
* @version $Id: users.php,v 1.29 2007/01/24 11:29:56 acydburn Exp $
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
	'ADMIN_SIG_PREVIEW'		=> 'Náhled podpisu',
	'AT_LEAST_ONE_FOUNDER'	=> 'Nemůžete změnit tohoto zakladatele na běžného uživatele. Vždy musí být aspoň jeden aktivní zakladatel fóra. Pokud chcete změnit status tohoto uživatele, nejdříve povyšte uživatele na zakladatele.',

	'BAN_ALREADY_ENTERED'	=> 'Ban byl již úspěšně přidán, nebyl vložen znova.',
	'BAN_SUCCESSFUL'		=> 'Ban úspešně udělen.',

	'CANNOT_BAN_FOUNDER'			=> 'Nelze zabanovat účty zakladatelů.',
	'CANNOT_BAN_YOURSELF'			=> 'Nemůžete zabanovat sami sebe.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Nelze deaktivovat účty botů, deaktivujte bota samotného.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Nemůžete deaktivovat účet zakladatelů.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Nemůžete deaktivovat svůj vlastní účet.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Nelze uvalit nucenou reaktivaci na účet bota, deaktivujte bota samotného.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Nelze uvalit nucenou reaktivaci na účet zakladatele.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Nelze uvalit nucenou reaktivaci na váš vlastní účet.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Nelze odstranit anonymní účet.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Nelze odstranit váš vlastní účet.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Nelze povýšit uživatele, které jsou v nepřátelích, na zakladatele',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Musíte aktivovat uživatele předtím, než ho povýšíte, pouze aktivovaní uživatelé mohou být povýšeni.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Toto je nutné vyplnit, pouze pokud měníte e-mailovou adresu.',

	'DELETE_POSTS'			=> 'Odstranit příspěvky',
	'DELETE_USER'			=> 'Odstranit uživatele',
	'DELETE_USER_EXPLAIN'	=> 'Berte na vědomí, že odstranění uživatele je nevratné',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Nucená reaktivace byla úspešná.',
	'FOUNDER'						=> 'Zakladatel',
	'FOUNDER_EXPLAIN'				=> 'Zakladatelé mají plná administrátorská práva a nemůžou být nikdy zabanováni, odstraněni nebo jinak upraveni uživateli, kteří nejsou nastaveni jako zakladatelé.',

	'GROUP_APPROVE'					=> 'Přijmout uživatele',
	'GROUP_DEFAULT'					=> 'Nastavit skupinu jako výchozí pro uživatele',
	'GROUP_DELETE'					=> 'Odebrat uživatele ze skupiny',
	'GROUP_DEMOTE'					=> 'Sesadit moderátora skupiny',
	'GROUP_PROMOTE'					=> 'Povýšit na moderátora skupiny',

	'IP_WHOIS_FOR'			=> 'Whois IP adresy pro %s',

	'LAST_ACTIVE'			=> 'Naposledy aktivní',

	'MOVE_POSTS_EXPLAIN'	=> 'Vyberte fórum, kam budou přesunuty všechny uživatelovy příspěvky.',

	'NO_SPECIAL_RANK'		=> 'Nebyla udělena žádná zvláštní hodnost',
	'NOT_MANAGE_FOUNDER'	=> 'Pokoušeli jste se upravit uživatele se statusem zakladatel. To mohou provést jen další uživatelé se stejným statusem.',

	'QUICK_TOOLS'			=> 'Rychlé nástroje',

	'REGISTERED'			=> 'Registrován',
	'REGISTERED_IP'			=> 'IP při registraci',
	'RETAIN_POSTS'			=> 'Ponechat příspěvky',

	'SELECT_FORM'			=> 'Vybrat formulář',
	'SELECT_USER'			=> 'Vybrat uživatele',

	'USER_ADMIN'					=> 'Administrace uživatelů',
	'USER_ADMIN_ACTIVATE'			=> 'Aktivovat účet',
	'USER_ADMIN_ACTIVATED'			=> 'Uživatel úspěšně aktivován.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Avatar byl úspěšně odstraněn.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Zabanovat přes e-mail',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'E-mailová adresa zabanovaná přes uživatelskou administraci',
	'USER_ADMIN_BAN_IP'				=> 'Zabanovat přes IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP zabanovaná přes uživatelskou administraci',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Uživatelské jméno zabanováno přes uživatelskou administraci',
	'USER_ADMIN_BAN_USER'			=> 'Zabanovat přes uživ. jmén',
	'USER_ADMIN_DEACTIVATE'			=> 'Deaktivovat účet',
	'USER_ADMIN_DEACTIVED'			=> 'Uživatel úspěšně deaktivován.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Odstranit všechny přílohy',
	'USER_ADMIN_DEL_AVATAR'			=> 'Odstranit avatar',
	'USER_ADMIN_DEL_POSTS'			=> 'Odstranit všechny příspěvky',
	'USER_ADMIN_DEL_SIG'			=> 'Odstranit podpis',
	'USER_ADMIN_EXPLAIN'			=> 'Zde můžete upravovat detaily uživatele a některá nastavení. Pro upravení oprávnění uživatele, použijte administraci oprávnění skupin a uživatelů.',
	'USER_ADMIN_FORCE'				=> 'Nucená reaktivace účtu',
	'USER_ADMIN_MOVE_POSTS'			=> 'Přesunout všechny příspěvky',
	'USER_ADMIN_SIG_REMOVED'		=> 'Podpis byl uživateli úspěšně odebrán.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Všechny přílohy od uživatele byly úspěšně odstraněny.',
	'USER_AVATAR_UPDATED'			=> 'Nastavení avataru bylo úspešně změneno.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Vlastní pole v profilu',
	'USER_DELETED'					=> 'Uživatel byl úspěšně odstraněn.',
	'USER_GROUP_ADD'				=> 'Přidat uživatele do skupiny',
	'USER_GROUP_NORMAL'				=> 'Bežné skupiny, kterých je uživatel členem',
	'USER_GROUP_PENDING'			=> 'Skupiny, kde uživatel čeká na vstup',
	'USER_GROUP_SPECIAL'			=> 'Zvláštní skupiny, kterých je uživatel členem',
	'USER_NO_ATTACHMENTS'			=> 'Neexistují žádné přilohy k zobrazení.',
	'USER_OVERVIEW_UPDATED'			=> 'Detaily uživatele úspěšně aktualizovány.',
	'USER_POSTS_DELETED'			=> 'Všechny příspěvky uživatele byly úspěšně odstraněny.',
	'USER_POSTS_MOVED'				=> 'Příspěvky byly úspěšně přesunuty do cílového fóra.',
	'USER_PREFS_UPDATED'			=> 'Nastavení uživatele úspěšně aktualizováno',
	'USER_PROFILE'					=> 'Profil uživatele',
	'USER_PROFILE_UPDATED'			=> 'Profil uživatele úspěšně aktualizován.',
	'USER_RANK'						=> 'Hodnost uživatele',
	'USER_RANK_UPDATED'				=> 'Hodnost uživatele úspěšně aktualizována..',
	'USER_SIG_UPDATED'				=> 'Podpis uživatele úspěšně aktualizován.',
	'USER_TOOLS'					=> 'Základní nástroje',
));

?>