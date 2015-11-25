<?php
/**
*
* acp_users [Slovak]
*
* @package language
* @version $Id: users.php,v 1.22 2007/01/24 11:29:56 acydburn Exp $
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
	'ADMIN_SIG_PREVIEW'		=> 'Ukážka podpisu',
	'AT_LEAST_ONE_FOUNDER'	=> 'Nemôžete zmeniť tohto zakladateľa fóra na bežného používateľa. Vždy musí byť aspoň jeden aktívny zakladateľ fóra. Pokiaľ chcete zmeniť stav tohto používateľa, najskôr povýšte iného používateľa na zakladateľa.',

	'BAN_ALREADY_ENTERED'	=> 'Zákaz vstupu (ban) bol už predtým úspešne udelený. Zoznam nebol aktualizovaný.',
	'BAN_SUCCESSFUL'		=> 'Zákaz vstupu (ban) bol úspešne udelený.',

	'CANNOT_BAN_FOUNDER'			=> 'Nemôžete udeliť zákaz vstupu pre účty zakladateľov fóra.',
	'CANNOT_BAN_YOURSELF'			=> 'Nemôžete udeliť zákaz vstupu sami sebe.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Nemôžete deaktivovať účty robotov, deaktivujte robota samotného.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Nemôžete deaktivovať účty zakladateľov.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Nemôžete deaktivovať svoj vlastný účet.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Nemôžete uvaliť nútenú reaktiváciu na účet robota, deaktivujte robota samotného.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Nemôžete uvaliť nútenú reaktiváciu na účty zakladateľov.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Nemôžete uvaliť nútenú reaktiváciu na svoj vlastný účet.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Účet pre anonymných používateľov nie je možné odstrániť.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Nemôžete odstrániť svoj vlastný účet.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Nemôžete na zakladateľa povýšiť ignorovaných používateľov.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Pred povýšením používateľa na zakladateľa fóra musíte aktivovať jeho účet, len aktivovaní používatelia môžu byť povýšení.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Toto je nutné vyplniť iba v prípade, že meníte e-mailovú adresu.',

	'DELETE_POSTS'			=> 'Odstrániť príspevky',
	'DELETE_USER'			=> 'Odstrániť používateľa',
	'DELETE_USER_EXPLAIN'	=> 'Pamätajte, že odstránenie používateľa sa nedá vrátiť späť',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Uvalenie nútenej reaktivácia bolo úspešné.',
	'FOUNDER'						=> 'Zakladateľ',
	'FOUNDER_EXPLAIN'				=> 'Zakladatelia majú plné administrátorské práva a nemôžu byť nikdy zabanovaní, odstránení alebo inak upravení používateľmi, ktorí nie sú nastavení ako zakladatelia.',

	'GROUP_APPROVE'					=> 'Schváliť používateľa',
	'GROUP_DEFAULT'					=> 'Nastaviť skupinu ako predvolenú pre používateľa',
	'GROUP_DELETE'					=> 'Odobrať používateľa zo skupiny',
	'GROUP_DEMOTE'					=> 'Zosadiť moderátora skupiny',
	'GROUP_PROMOTE'					=> 'Povýšiť na moderátora skupiny',

	'IP_WHOIS_FOR'			=> 'Whois pre IP adresu používateľa %s',

	'LAST_ACTIVE'			=> 'Naposledy aktívny',

	'MOVE_POSTS_EXPLAIN'	=> 'Vyberte fórum, kam budú presunuté všetky používateľove príspevky.',

	'NO_SPECIAL_RANK'		=> 'Nebolo udelená žiadne zvláštne hodnotenie',
	'NOT_MANAGE_FOUNDER'	=> 'Pokúšali ste sa upraviť používateľa označeného ako zakladateľ. To môžu vykonať len používatelia takisto označení ako zakladatelia.',

	'QUICK_TOOLS'			=> 'Rýchle nástroje',

	'REGISTERED'			=> 'Registrovaný',
	'REGISTERED_IP'			=> 'IP adresa pri registrácií',
	'RETAIN_POSTS'			=> 'Ponechať príspevky',

	'SELECT_FORM'			=> 'Vybrať formulár',
	'SELECT_USER'			=> 'Vybrať používateľa',

	'USER_ADMIN'					=> 'Administrácia používateľov',
	'USER_ADMIN_ACTIVATE'			=> 'Aktivovať účet',
	'USER_ADMIN_ACTIVATED'			=> 'Používateľ bol úspešne aktivovaný.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Obrázok postavičky bol úspešne odstránený.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Ban na e-mailovú adresu',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Na e-mailovú adresu bol udelený ban cez Administrátorský panel',
	'USER_ADMIN_BAN_IP'				=> 'Ban na IP adresu',
	'USER_ADMIN_BAN_IP_REASON'		=> 'Na IP adresu bol udelený ban cez Administrátorský panel',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Na používateľské meno bol udelený ban cez Administrátorský panel',
	'USER_ADMIN_BAN_USER'			=> 'Ban na používateľské meno',
	'USER_ADMIN_DEACTIVATE'			=> 'Deaktivovať účet',
	'USER_ADMIN_DEACTIVED'			=> 'Používateľ bol úspešne deaktivovaný.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Odstrániť všetky prílohy',
	'USER_ADMIN_DEL_AVATAR'			=> 'Odstrániť obrázok postavičky',
	'USER_ADMIN_DEL_POSTS'			=> 'Odstrániť všetky príspevky',
	'USER_ADMIN_DEL_SIG'			=> 'Odstrániť podpis',
	'USER_ADMIN_EXPLAIN'			=> 'Tu môžete upravovať detaily používateľov a niektoré nastavenia. Na upravenie oprávnení používateľov použite administráciu oprávnení skupín a používateľov.',
	'USER_ADMIN_FORCE'				=> 'Nútená reaktivácia účtu',
	'USER_ADMIN_MOVE_POSTS'			=> 'Presunúť všetky príspevky',
	'USER_ADMIN_SIG_REMOVED'		=> 'Podpis používateľa bol úspešne odstránený.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Všetky prílohy od používateľa boli úspešne odstránené.',
	'USER_AVATAR_UPDATED'			=> 'Nastavenie obrázku postavičky bolo úspešne zmenené.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Vlastné políčka v profile',
	'USER_DELETED'					=> 'Používateľ bol úspešne odstránený.',
	'USER_GROUP_ADD'				=> 'Pridať používateľa do skupiny',
	'USER_GROUP_NORMAL'				=> 'Bežné skupiny, ktorých je používateľ členom',
	'USER_GROUP_PENDING'			=> 'Skupiny, kde používateľ čaká na schválenie vstupu',
	'USER_GROUP_SPECIAL'			=> 'Zvláštne skupiny, ktorých je používateľ členom',
	'USER_NO_ATTACHMENTS'			=> 'Neexistujú žiadne prílohy na zobrazenie.',
	'USER_OVERVIEW_UPDATED'			=> 'Detaily používateľa boli úspešne aktualizované.',
	'USER_POSTS_DELETED'			=> 'Všetky príspevky používateľa boli úspešne odstránené.',
	'USER_POSTS_MOVED'				=> 'Príspevky boli úspešne presunuté do cieľového fóra.',
	'USER_PREFS_UPDATED'			=> 'Nastavenie používateľa bolo úspešne aktualizované.',
	'USER_PROFILE'					=> 'Profil používateľa',
	'USER_PROFILE_UPDATED'			=> 'Profil používateľa bol úspešne aktualizovaný.',
	'USER_RANK'						=> 'Hodnotenie používateľa',
	'USER_RANK_UPDATED'				=> 'Hodnotenie používateľa bolo úspešne aktualizované.',
	'USER_SIG_UPDATED'				=> 'Podpis používateľa bol úspešne aktualizovaný.',
	'USER_TOOLS'					=> 'Základné nástroje',
));

?>
