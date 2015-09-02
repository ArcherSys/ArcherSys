<?php
/**
*
* acp common [Slovak]
*
* @package language
* @version $Id: common.php,v 1.118 2007/07/24 16:16:39 acydburn Exp $
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administrátori',
	'ACP_ADMIN_LOGS'			=> 'Protokol administrácie',
	'ACP_ADMIN_ROLES'			=> 'Administrátorské roly',
	'ACP_ATTACHMENTS'			=> 'Prílohy',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Nastavenia príloh',
	'ACP_AUTH_SETTINGS'			=> 'Autentifikácia',
	'ACP_AUTOMATION'			=> 'Automatizácia',
	'ACP_AVATAR_SETTINGS'		=> 'Nastavenie obrázkov postavičiek',

	'ACP_BACKUP'				=> 'Záloha',
	'ACP_BAN'					=> 'Zákaz vstupu',
	'ACP_BAN_EMAILS'			=> 'Ban na e-mailové adresy',
	'ACP_BAN_IPS'				=> 'Ban na IP adresy',
	'ACP_BAN_USERNAMES'			=> 'Ban na používateľské mená',
	'ACP_BBCODES'				=> 'Značky BBCode',
	'ACP_BOARD_CONFIGURATION'	=> 'Konfigurácia fóra',
	'ACP_BOARD_FEATURES'		=> 'Funkcie fóra',
	'ACP_BOARD_MANAGEMENT'		=> 'Správa fóra',
	'ACP_BOARD_SETTINGS'		=> 'Nastavenie fóra',
	'ACP_BOTS'					=> 'Roboti/vyhľadávače',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Databáza',
	'ACP_CAT_DOT_MODS'			=> '.Módy',
	'ACP_CAT_FORUMS'			=> 'Fóra',
	'ACP_CAT_GENERAL'			=> 'Všeobecné',
	'ACP_CAT_MAINTENANCE'		=> 'Údržba',
	'ACP_CAT_PERMISSIONS'		=> 'Oprávnenia',
	'ACP_CAT_POSTING'			=> 'Prispievanie',
	'ACP_CAT_STYLES'			=> 'Štýly',
	'ACP_CAT_SYSTEM'			=> 'Systém',
	'ACP_CAT_USERGROUP'			=> 'Používatelia a skupiny',
	'ACP_CAT_USERS'				=> 'Používatelia',
	'ACP_CLIENT_COMMUNICATION'	=> 'Komunikácia klientov',
	'ACP_COOKIE_SETTINGS'		=> 'Nastavenie cookies',
	'ACP_CRITICAL_LOGS'			=> 'Chybové záznamy',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Vlastné políčka v profile',

	'ACP_DATABASE'				=> 'Správa databázy',
	'ACP_DISALLOW'				=> 'Zakázať',
	'ACP_DISALLOW_USERNAMES'	=> 'Zakázať používateľské mená',

	'ACP_EMAIL_SETTINGS'		=> 'Nastavenie e-mailov',
	'ACP_EXTENSION_GROUPS'		=> 'Správa skupín typov súborov',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Oprávnenia pre fóra',
	'ACP_FORUM_LOGS'				=> 'Protokol fór',
	'ACP_FORUM_MANAGEMENT'			=> 'Správa fór',
	'ACP_FORUM_MODERATORS'			=> 'Moderátori fór',
	'ACP_FORUM_PERMISSIONS'			=> 'Oprávnenia fór',
	'ACP_FORUM_ROLES'				=> 'Roly fór',

	'ACP_GENERAL_CONFIGURATION'		=> 'Všeobecná konfigurácia',
	'ACP_GENERAL_TASKS'				=> 'Bežné úlohy',
	'ACP_GLOBAL_MODERATORS'			=> 'Globálni moderátori',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Globálne oprávnenia',
	'ACP_GROUPS'					=> 'Skupiny',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Oprávnenia fór pre skupiny',
	'ACP_GROUPS_MANAGE'				=> 'Správa skupín',
	'ACP_GROUPS_MANAGEMENT'			=> 'Správa skupiny',
	'ACP_GROUPS_PERMISSIONS'		=> 'Oprávnenia skupín',

	'ACP_ICONS'					=> 'Ikony tém',
	'ACP_ICONS_SMILIES'			=> 'Ikony tém/smajlíky',
	'ACP_IMAGESETS'				=> 'Sady obrázkov',
	'ACP_INACTIVE_USERS'		=> 'Neaktívni používatelia',
	'ACP_INDEX'					=> 'Obsah administrácie',

	'ACP_JABBER_SETTINGS'		=> 'Nastavenia pre Jabber',

	'ACP_LANGUAGE'				=> 'Správa jazykov',
	'ACP_LANGUAGE_PACKS'		=> 'Jazykové balíky',
	'ACP_LOAD_SETTINGS'			=> 'Nastavenie zaťaženia',
	'ACP_LOGGING'				=> 'Prihlasuje sa',

	'ACP_MAIN'					=> 'Obsah administrácie',
	'ACP_MANAGE_EXTENSIONS'		=> 'Správa typov súborov',
	'ACP_MANAGE_FORUMS'			=> 'Správa fór',
	'ACP_MANAGE_RANKS'			=> 'Správa hodnotení',
	'ACP_MANAGE_REASONS'		=> 'Správa dôvodov hlásení/zamietnutí',
	'ACP_MANAGE_USERS'			=> 'Správa používateľov',
	'ACP_MASS_EMAIL'			=> 'Hromadný e-mail',
	'ACP_MESSAGES'				=> 'Správy',
	'ACP_MESSAGE_SETTINGS'		=> 'Nastavenie súkromných správ',
	'ACP_MODULE_MANAGEMENT'		=> 'Správa modulov',
	'ACP_MOD_LOGS'				=> 'Protokol moderátorov',
	'ACP_MOD_ROLES'				=> 'Moderátorské roly',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Nepriradené prílohy',

	'ACP_PERMISSIONS'			=> 'Oprávnenia',
	'ACP_PERMISSION_MASKS'		=> 'Masky oprávnení',
	'ACP_PERMISSION_ROLES'		=> 'Oprávnenia rolí',
	'ACP_PERMISSION_TRACE'		=> 'Sledovanie oprávnení',
	'ACP_PHP_INFO'				=> 'Informácie o PHP',
	'ACP_POST_SETTINGS'			=> 'Nastavenie príspevkov',
	'ACP_PRUNE_FORUMS'			=> 'Prečistiť fóra',
	'ACP_PRUNE_USERS'			=> 'Prečistiť používateľov',
	'ACP_PRUNING'				=> 'Prečisťovanie',

	'ACP_QUICK_ACCESS'			=> 'Rýchly prístup',

	'ACP_RANKS'					=> 'Hodnotenia',
	'ACP_REASONS'				=> 'Dôvody schválení/zamietnutí',
	'ACP_REGISTER_SETTINGS'		=> 'Nastavenie registrácie používateľov',

	'ACP_RESTORE'				=> 'Obnova',

	'ACP_SEARCH'				=> 'Nastavenie vyhľadávania',
	'ACP_SEARCH_INDEX'			=> 'Index vyhľadávania',
	'ACP_SEARCH_SETTINGS'		=> 'Nastavenie vyhľadávania',

	'ACP_SECURITY_SETTINGS'		=> 'Nastavenie zabezpečenia',
	'ACP_SERVER_CONFIGURATION'	=> 'Konfigurácia servera',
	'ACP_SERVER_SETTINGS'		=> 'Nastavenie servera',
	'ACP_SIGNATURE_SETTINGS'	=> 'Nastavenie podpisov',
	'ACP_SMILIES'				=> 'Smajlíky',
	'ACP_STYLE_COMPONENTS'		=> 'Komponenty štýlov',
	'ACP_STYLE_MANAGEMENT'		=> 'Správa štýlov',
	'ACP_STYLES'				=> 'Štýly',

	'ACP_TEMPLATES'				=> 'Šablóny',
	'ACP_THEMES'				=> 'Témy',

	'ACP_UPDATE'					=> 'Aktualizuje sa',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Používateľské oprávnenia pre fóra',
	'ACP_USERS_LOGS'				=> 'Protokol používateľov',
	'ACP_USERS_PERMISSIONS'			=> 'Oprávnenia používateľov',
	'ACP_USER_ATTACH'				=> 'Prílohy',
	'ACP_USER_AVATAR'				=> 'Obrázok postavičky',
	'ACP_USER_FEEDBACK'				=> 'Spätná väzba',
	'ACP_USER_GROUPS'				=> 'Skupiny',
	'ACP_USER_MANAGEMENT'			=> 'Správa používateľov',
	'ACP_USER_OVERVIEW'				=> 'Prehľad',
	'ACP_USER_PERM'					=> 'Oprávnenia',
	'ACP_USER_PREFS'				=> 'Nastavenia',
	'ACP_USER_PROFILE'				=> 'Profil',
	'ACP_USER_RANK'					=> 'Hodnotenie',
	'ACP_USER_ROLES'				=> 'Používateľské roly',
	'ACP_USER_SECURITY'				=> 'Bezpečnosť používateľa',
	'ACP_USER_SIG'					=> 'Podpis',

	'ACP_VC_SETTINGS'					=> 'Nastavenie vizuálneho overovania',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Náhľad obrázku CAPTCHA',
	'ACP_VERSION_CHECK'					=> 'Zistiť nové aktualizácie',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Zobrazenie administrátorských oprávnení',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Zobrazenie oprávnení moderátorov fór',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Zobrazenie oprávnení založených na fórach',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Zobrazenie oprávnení globálnych moderátorov',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Zobrazenie oprávnení pre používateľov',

	'ACP_WORDS'					=> 'Cenzúra slov',

	'ACTION'				=> 'Akcia',
	'ACTIONS'				=> 'Akcie',
	'ACTIVATE'				=> 'Aktivovať',
	'ADD'					=> 'Pridať',
	'ADMIN'					=> 'Administrácia',
	'ADMIN_INDEX'			=> 'Obsah administrácie',
	'ADMIN_PANEL'			=> 'Administrátorský panel',

	'BACK'					=> 'Naspäť',

	'COLOUR_SWATCH'			=> 'Vzorník bezpečných farieb',
	'CONFIG_UPDATED'		=> 'Nastavenie bolo úspešne aktualizované.',

	'DEACTIVATE'				=> 'Deaktivovať',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Zadaná cesta "%s" neexistuje.',
	'DIRECTORY_NOT_DIR'			=> 'Zadaná cesta "%s" nie je priečinok.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Na zadanú cestu "%s" nie je možné zapisovať.',
	'DISABLE'					=> 'Zakázať',
	'DOWNLOAD'					=> 'Stiahnuť',
	'DOWNLOAD_AS'				=> 'Stiahnuť ako',
	'DOWNLOAD_STORE'			=> 'Stiahnuť alebo uložiť súbor',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Súbor môžete buď priamo stiahnuť súbor alebo ho uložiť v priečinku <samp>store/</samp>.',

	'EDIT'					=> 'Upraviť',
	'ENABLE'				=> 'Povoliť',
	'EXPORT_DOWNLOAD'		=> 'Stiahnuť',
	'EXPORT_STORE'			=> 'Uložiť',

	'GENERAL_OPTIONS'		=> 'Všeobecné možnosti',
	'GENERAL_SETTINGS'		=> 'Všeobecné nastavenia',
	'GLOBAL_MASK'			=> 'Globálna maska oprávnení',

	'INSTALL'				=> 'Nainštalovať',
	'IP'					=> 'IP adresa',
	'IP_HOSTNAME'			=> 'IP adresy alebo názvy hostiteľov',

	'LOGGED_IN_AS'			=> 'Ste prihlásený ako:',
	'LOGIN_ADMIN'			=> 'Ak chcete spravovať fórum, musíte byť prihlásený a oprávnený používateľ.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Ak chcete prejsť do Administrátorského panela, musíte sa znova prihlásiť.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Prihlásenie prebehlo úspešne, teraz budete presmerovaný na do Administrátorského panela.',
	'LOOK_UP_FORUM'			=> 'Vyberte fórum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Môžete vybrať viac ako jedno fórum.',

	'MANAGE'				=> 'Spravovať',
	'MENU_TOGGLE'			=> 'Zobraziť alebo skryť bočnú ponuku',
	'MOVE_DOWN'				=> 'Posunúť nadol',
	'MOVE_UP'				=> 'Posunúť nahor',

	'NOTIFY'				=> 'Upozornenie',
	'NO_ADMIN'				=> 'Nemáte oprávnenie spravovať fórum.',
	'NO_EMAILS_DEFINED'		=> 'Nebola nájdená žiadna platná e-mailová adresa.',
	'NO_PASSWORD_SUPPLIED'	=> 'Ak chcete vstúpiť do Administrátorského panela, musíte zadať heslo.',

	'OFF'					=> 'Vypnuté',
	'ON'					=> 'Zapnuté',

	'PARSE_BBCODE'						=> 'Spracovať značky BBCode',
	'PARSE_SMILIES'						=> 'Spracovať smajlíkov',
	'PARSE_URLS'						=> 'Spracovať odkazy',
	'PERMISSIONS_TRANSFERRED'			=> 'Oprávnenia boli prenesené',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Teraz máte oprávnenia používateľa %1$s. Môžete prechádzať fórum s jeho oprávneniami, ale nemôžete vstúpiť do Administrátorského panela, pretože administrátorské oprávnenia neboli prenesené. Môžete sa kedykoľvek <a href="%2$s"><strong>vrátiť k vašim oprávneniam</strong></a>.',
	'PIXEL'							=> 'px',
	'PROCEED_TO_ACP'					=> '%sPokračovať do Administrátorského panela%s',

	'REMIND'							=> 'Pripomenúť',
	'RESYNC'							=> 'Znovu synchronizovať',
	'RETURN_TO'							=> 'Vrátiť sa na…',

	'SELECT_ANONYMOUS'		=> 'Vybrať anonymného používateľa',
	'SELECT_OPTION'			=> 'Vybrať možnosť',

	'UCP'					=> 'Ovládací panel používateľa',
	'USERNAMES_EXPLAIN'		=> 'Každé používateľské meno zadajte na nový riadok.',
	'USER_CONTROL_PANEL'	=> 'Ovládací panel používateľa',

	'WARNING'				=> 'Upozornenie',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Táto stránka vypisuje informácie o verzii PHP nainštalovanej na tomto serveri. Obsahuje detaily o načítaných moduloch, dostupných premenných a predvolených nastaveniach. Tieto informácie môžu byť užitočné pri riešení problémov. Majte na pamäti, že niektorí poskytovatelia hostingu môžu z bezpečnostných dôvodov obmedziť množstvo tu zobrazených informácií. Dôrazne odporúčame nikde tu získané informácie nezverejňovať, okrem požiadaviek od <a href="http://www.phpbb.com/about/team/">členov tímu</a> na oficiálnych fórach podpory.',

	'NO_PHPINFO_AVAILABLE'	=> 'Informácie o PHP nie je možné zistiť. Funkcia phpinfo() je z bezpečnostných dôvodov vypnutá.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Tento protokol vypisuje všetky činnosti administrátorov. Môžete ich usporiadať podľa používateľského mena, dátumu, IP adresy alebo akcie. Pokiaľ máte príslušné oprávnenia, môžete vymazať jednotlivé záznamy alebo všetky záznamy protokolu.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Tu sú zobrazené všetky činnosti, ktoré spravilo fórum samo. Tento protokol vám poskytuje informácie, ktoré môžete použiť pri riešenie špecifických problémov, napr. nedoručovanie e-mailových správ. Môžete ich usporiadať podľa používateľského mena, dátumu, IP adresy alebo záznamu akcie. Pokiaľ máte príslušné oprávnenia, môžete vymazať jednotlivé záznamy alebo všetky záznamy protokolu.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Tento protokol vypisuje všetky činnosti moderátorov, vrátane zákazov vstupu pre používateľov. Môžete ich usporiadať podľa používateľského mena, dátumu, IP adresy alebo akcie. Pokiaľ máte príslušné oprávnenia, môžete vymazať jednotlivé záznamy alebo všetky záznamy protokolu.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Toto vypisuje všetky činnosti vykonané používateľmi alebo na používateľoch (nahlásenia, upozornenia, používateľské poznámky).',
	'ALL_ENTRIES'				=> 'Všetky záznamy',

	'DISPLAY_LOG'	=> 'Zobraziť záznamy za posledných',

	'NO_ENTRIES'	=> 'Pre toto obdobie neexistujú žiadne záznamy.',

	'SORT_IP'		=> 'IP adresa',
	'SORT_DATE'		=> 'Dátum',
	'SORT_ACTION'	=> 'Záznam akcie',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Ďakujeme, že ste si zvolili phpBB ako riešenie pre vaše fórum. Táto obrazovka vám poskytuje rýchly prehľad o rôznych štatistikách fóra. Odkazy na ľavej stráne obrazovky vám umožňujú spravovať všetky aspekty vášho fóra. Každá stránka obsahuje inštrukcie na použitie.',
	'ADMIN_LOG'					=> 'Zaznamenané činnosti administrátorov',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Tu je dostupný prehľad posledných piatich akcií vykonaných administrátormi. Úplný záznam si môžete zobraziť zvolením odpovedajúcej položky v ponuke, alebo kliknutím na nižšie uvedený odkaz.',
	'AVATAR_DIR_SIZE'			=> 'Veľkosť priečinka s obrázkami postavičiek',

	'BOARD_STARTED'		=> 'Spustenie fóra',
	'BOARD_VERSION'		=> 'Verzia fóra',

	'DATABASE_SERVER_INFO'	=> 'Databázový server',
	'DATABASE_SIZE'			=> 'Veľkosť databázy',

	'FILES_PER_DAY'		=> 'Počet príloh za deň',
	'FORUM_STATS'		=> 'Štatistiky fóra',

	'GZIP_COMPRESSION'	=> 'Kompresia GZip',

	'NOT_AVAILABLE'		=> 'Nedostupné',
	'NUMBER_FILES'		=> 'Počet príloh',
	'NUMBER_POSTS'		=> 'Počet príspevkov',
	'NUMBER_TOPICS'		=> 'Počet tém',
	'NUMBER_USERS'		=> 'Počet používateľov',
	'NUMBER_ORPHAN'		=> 'Počet nepriradených príloh',

	'POSTS_PER_DAY'		=> 'Príspevkov za deň',

	'PURGE_CACHE'			=> 'Prečistiť vyrovnávaciu pamäť',
	'PURGE_CACHE_CONFIRM'	=> 'Naozaj chcete prečistiť celú vyrovnávaciu pamäť?',
	'PURGE_CACHE_EXPLAIN'	=> 'Prečistí všetky uložené súbory vo vyrovnávacej pamäti, napríklad šablóny alebo dotazy.',

	'RESET_DATE'			=> 'Vynulovať dátum spustenia fóra',
	'RESET_DATE_CONFIRM'			=> 'Naozaj chcete vynulovať dátum spustenia fóra?',
	'RESET_ONLINE'			=> 'Vynulovať rekord v počte naraz prítomných používateľov',
	'RESET_ONLINE_CONFIRM'			=> 'Naozaj chcete vynulovať rekord v počte naraz prítomných používateľov?',
	'RESYNC_POSTCOUNTS'		=> 'Resynchronizovať počítadlá príspevkov',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Do úvahy budú brané len existujúce príspevky. Prečistené príspevky nebudú počítané.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Naozaj chcete synchronizovať počítadlá príspevkov?',
	'RESYNC_POST_MARKING'	=> 'Resynchronizovať označené témy',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Naozaj chcete resynchronizovať označené témy?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Najskôr zruší označenie všetkých tém, potom správne označí tie, v ktorých používatelia vykázali aktivitu v posledných šiestich mesiacoch.',
	'RESYNC_STATS'			=> 'Resynchronizovať štatistiky',
	'RESYNC_STATS_CONFIRM'			=> 'Naozaj chcete resynchronizovať štatistiky?',
	'RESYNC_STATS_EXPLAIN'			=> 'Prepočíta celkový počet používateľov, príspevkov, tém a príloh.',
	'RUN'							=> 'Spustiť teraz',

	'STATISTIC'			=> 'Štatistika',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Resynchronizovať alebo vynulovať štatistiky',

	'TOPICS_PER_DAY'	=> 'Tém za deň',

	'UPLOAD_DIR_SIZE'	=> 'Veľkosť všetkých príloh',
	'USERS_PER_DAY'		=> 'Používateľov za deň',

	'VALUE'					=> 'Hodnota',
	'VIEW_ADMIN_LOG'		=> 'Zobraziť protokol administrácie',
	'VIEW_INACTIVE_USERS'	=> 'Zobraziť neaktívnych používateľov',

	'WELCOME_PHPBB'			=> 'Vitajte v phpBB',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Dátum neaktivity',
	'INACTIVE_REASON'				=> 'Dôvod',
	'INACTIVE_REASON_MANUAL'		=> 'Účet deaktivovaný administrátorom',
	'INACTIVE_REASON_PROFILE'		=> 'Zmena detailov v profile',
	'INACTIVE_REASON_REGISTER'		=> 'Nový registrovaný používateľ',
	'INACTIVE_REASON_REMIND'		=> 'Nútená reaktivácia účtu',
	'INACTIVE_REASON_UNKNOWN'		=> 'Neznámy',
	'INACTIVE_USERS'				=> 'Neaktívni používatelia',
	'INACTIVE_USERS_EXPLAIN'		=> 'Toto je zoznam používateľov, ktorí sa registrovali, ale ich účty nie sú aktívne. Môžete aktivovať, odstrániť alebo upozorniť (odoslaním e-mailovej správy) týchto používateľov, pokiaľ chcete.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Toto je zoznam posledných 10 registrovaných používateľov, ktorí majú neaktívne účty. Úplný zoznam je dostupný po zvolení odpovedajúcej položky v ponuke alebo po kliknutí na odkaz uvedený nižšie.',

	'NO_INACTIVE_USERS'	=> 'Žiadni neaktívni používatelia',

	'SORT_INACTIVE'		=> 'Dátum neaktivity',
	'SORT_LAST_VISIT'	=> 'Posledná návšteva',
	'SORT_REASON'		=> 'Dôvod',
	'SORT_REG_DATE'		=> 'Dátum registrácie',

	'USER_IS_INACTIVE'		=> 'Používateľ je neaktívny',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Pridanie alebo úprava používateľských oprávnení používateľa</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Pridanie alebo úprava používateľských oprávnení skupiny</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Pridanie alebo úprava globálnych moderátorských oprávnení používateľa</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Pridanie alebo úprava globálnych moderátorských oprávnení skupiny</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Pridanie alebo úprava administrátorských oprávnení používateľa</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Pridanie alebo úprava administrátorských oprávnení skupiny</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Pridanie alebo úprava administrátorov</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Pridanie alebo úprava globálnych moderátorov</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Pridanie alebo úprava prístupu používateľa k fóru</strong> od %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Pridanie alebo úprava prístupu používateľa k moderovaniu fóra</strong> od %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Pridanie alebo úprava prístupu skupiny k fóru</strong> od %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Pridanie alebo úprava prístupu skupiny k moderovaniu fóra</strong> od %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Pridanie alebo úprava moderátorov</strong> od %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Pridanie alebo úprava oprávnení fóra</strong> od %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Odstránenie administrátorov</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Odstránenie globálnych moderátorov</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Odstránenie moderátorov</strong> od %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Odstránenie oprávnení fóru pre používateľa/skupinu</strong> od %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Oprávnenia prenesené od</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Vlastné oprávnenia obnovené po používaní oprávnení od</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Neúspešný pokus o prihlásenie do Administrátorského panela</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Úspešné prihlásenie do Administrátorského panela</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Odstránené prílohy používateľa</strong><br />Â» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Pridanie alebo úprava prípony príloh</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Odstránenie prípony príloh</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Aktualizácia prípony príloh</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Pridaná skupina typov súborov</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Upravená skupina typov súborov</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Odstránená skupina typov súborov</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Nepriradená príloha pripojená k príspevku</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Nepriradená príloha odstránená</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Vynechanie používateľa z banu</strong> z dôvodu "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Vynechanie IP adresy z banu</strong> z dôvodu "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Vynechanie e-mailovej adresy z banu</strong> z dôvodu "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Udelený ban na používateľa</strong> z dôvodu "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>Udelený ban na IP adresu</strong> z dôvodu "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Udelený ban na e-mailovú adresu</strong> z dôvodu "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Zrušenie banu na používateľa</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Zrušenie banu na IP adresu</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Zrušenie banu na e-mailovú adresu</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Pridanie novej značky BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Úprava značky BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Odstránenie značky BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Pridanie nového robota</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Odstránenie robota</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Aktualizácia existujúceho robota</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Vyprázdnenie administrátorského protokolu</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Vyprázdnenie chybových záznamov</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Vyprázdnenie moderátorského protokolu</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Vyprázdnenie používateľského záznamu</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Vyprázdnenie používateľských záznamov</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Zmena nastavenia príloh</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Zmena nastavenia autentifikácie</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Zmena nastavenia obrázkov postavičiek</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Zmena nastavenia cookies</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Zmena nastavenia e-mailov</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Zmena nastavenia funkcií fóra</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Zmena nastavenia zaťaženia servera</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Zmena nastavenia súkromných správ</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Zmena nastavenia príspevkov</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Zmena nastavenia registrácie</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Zmena nastavenia vyhľadávania</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Zmena nastavenia zabezpečenia</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Zmena nastavenia servera</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Zmena nastavenia fóra</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Zmena nastavenia podpisov</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Zmena nastavenia vizuálneho overovania</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Schválenie témy</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Oživenie témy</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Odstránenie príspevku</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Odstránenie témy</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Skopírovanie témy</strong><br />» z %s',
	'LOG_LOCK'					=> '<strong>Uzamknutie témy</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Uzamknutie príspevku</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Spojenie príspevkov</strong> v téme<br />» %s',
	'LOG_MOVE'					=> '<strong>Presunutie témy</strong><br />» z %s',
	'LOG_POST_APPROVED'			=> '<strong>Schválenie príspevku</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Odmietnutie príspevku “%1$s” z nasledujúceho dôvodu</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Úprava príspevku “%1$s” od</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Vyriešenie nahlásenia</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Odstránenie nahlásenia</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Presunutie rozdelených príspevkov</strong><br />» do %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Rozdelenie príspevkov</strong><br />» z %s',

	'LOG_TOPIC_DELETED'			=> '<strong>Odstránenie témy</strong><br />» %s',
	'LOG_TOPIC_APPROVED'		=> '<strong>Schválenie témy</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Odmietnutie témy “%1$s” z nasledujúceho dôvodu</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Resynchronizácia počítadiel tém</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Zmena typu témy</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Odomknutie témy</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Odomknutie príspevku</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Pridanie nepovoleného používateľského mena</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Odstránenie nepovoleného používateľského mena</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Vytvorenie zálohy databázy</strong>',
	'LOG_DB_DELETE'			=> '<strong>Odstránenie zálohy databázy</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Obnovenie databázy zo zálohy</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Odobratie IP adresy/hostiteľa zo zoznamu pre sťahovanie</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Pridanie IP adresy/hostiteľa do zoznamu pre sťahovanie</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Odstránenie IP adresy/hostiteľa zo zoznamu sťahovanie</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Chyba Jabbera</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Chyba v e-mailoch</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Vytvorenie nového fóra</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Odstránenie fóra</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Odstránenie fóra a jeho subfór</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Odstránenie fóra a presun jeho subfór</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Odstránenie fóra a presun jeho príspevkov </strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Odstránenie fóra a jeho subfór, presun príspevkov</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Odstránenie fóra, presun jeho príspevkov</strong> do %1$s <strong>a subfór</strong> do %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Odstránenie fóra a jeho príspevkov</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Odstránenie fóra a jeho príspevkov a subfór</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Odstránenie fóra s jeho príspevkami, presun subfór</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Úprava detailov fóra</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Presunutie fóra</strong> %1$s <strong>nadol</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Presunutie fóra</strong> %1$s <strong>nahor</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Resynchronizácia fóra</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>Vytvorenie novej používateľskej skupiny</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Nastavenie skupiny “%1$s” ako predvolenej pre členov</strong><br />» %s',
	'LOG_GROUP_DELETE'		=> '<strong>Odstránenie skupiny</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Zrušenie vedúcich skupiny</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Povýšenie používateľov na vedúcich skupiny </strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Odstránenie používateľov zo skupiny</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Úprava detailov o skupine</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Pridanie nových vedúcich skupiny</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Schválenie členstva používateľov v skupiny</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Pridanie nových používateľov do skupiny</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'		=> '<strong>Pridanie sady obrázkov do databázy</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'		=> '<strong>Pridanie sady obrázkov do súborového systému</strong><br />» %s',
	'LOG_IMAGESET_DELETE'		=> '<strong>Odstránenie sady obrázkov</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'	=> '<strong>Úprava detailov sady obrázkov</strong><br />» %s',
	'LOG_IMAGESET_EDIT'			=> '<strong>Úprava sady obrázkov</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'		=> '<strong>Export sady obrázkov</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Sada obrázkov neobsahuje "%2$s" localisation</strong><br />Â» %1$s',
  'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Obnovenie prekladu “%2$s” pre sadu obrázkov</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'	=> '<strong>Obnovenie sady obrázkov</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Aktivácia neaktívnych používateľov</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Odstránenie neaktívnych používateľov</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Odoslanie pripomenutia pre neaktívnych používateľov</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Prechod z %1$s na phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Inštalácia phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Zlyhala kontrola relácie IP adresa/prehliadač/X_FORWARDED_FOR</strong><br />»Používateľova IP adresa "<em>%1$s</em>" porovnaná s IP adresou relácie "<em>%2$s</em>", označenie prehliadača používateľa "<em>%3$s</em>" porovnané s označením prehliadača v relácii "<em>%4$s</em>" a používateľský reťazec X_FORWARDED_FOR "<em>%5$s</em>" porovnaný s reťazcom X_FORWARDED_FOR v relácii "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Zmena účtu pre Jabber</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Zmena hesla pre Jabber hesla</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Registrácia Jabber účtu</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Zmena nastavenia pre Jabber</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Odstránenie jazykového balíka</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Inštalácia jazykového balíka</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Aktualizácia detailov jazykového balíka</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Nahradenie jazykového súboru</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Odoslanie jazykového súboru a nahranie do ukladacieho priečinka</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Odoslanie hromadnej e-mailovej správy</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Zmena odosielateľa v téme "%1$s"</strong><br />» z %2$s na %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Vypnutie modulu</strong>',
	'LOG_MODULE_ENABLE'		=> '<strong>Zapnutie modulu</strong>',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Posunutie modulu nadol</strong><br />» %s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Posunutie modulu nahor</strong><br />» %s',
	'LOG_MODULE_REMOVED'	=> '<strong>Odstránenie modulu</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Pridanie modulu</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Úprava modulu</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Pridanie administrátorskej role</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Úprava administrátorskej role</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Odstránenie administrátorskej role</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Pridanie role fóra</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Úprava role fóra</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Odstránenie role fóra</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Pridanie moderátorskej role</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Úprava moderátorskej role</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Odstránenie moderátorskej role</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Pridanie používateľskej role</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Úprava používateľskej role</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Odstránenie používateľskej role</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Aktivácia políčka v profile</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Pridanie políčka v profile</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Deaktivácia políčka v profile</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Zmena políčka v profile</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Odstránenie políčka v profile</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Prečistenie fór</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Automatické prečistenie fór</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Deaktivácia používateľov</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Prečistenie používateľov a odstránenie ich príspevkov</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Prečistenie používateľov a ponechanie ich príspevkov</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Prečistenie vyrovnávacej pamäte</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Pridanie nového hodnotenia</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Odstránenie hodnotenia</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Úprava hodnotenia</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Pridanie dôvodu nahlásenia/zamietnutia</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Odstránenie dôvodu nahlásenia/zamietnutia</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Aktualizácia dôvodu nahlásenia/zamietnutia</strong><br />» %s',

	'LOG_RESET_DATE'			=> '<strong>Vynulovanie dátumu spustenia fóra</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Vynulovanie rekordu v počte naraz prítomných používateľov</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Resynchronizácia počtu príspevkov</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Resynchronizácia označených témy</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Resychronizácia príspevkov, tém a štatistík</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Vytvorenie indexu vyhľadávania pre</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Odstránenie indexu vyhľadávania pre</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Pridanie nového štýlu</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Odstránenie štýlu</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Úprava štýlu</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Export štýlu</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Pridanie novej šablóny do databázy</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Pridanie novej šablóny do systému súborov</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Odstránenie verzií súborov šablóny vo vyrovnávacej pamäti <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Odstránenie súborov šablóny</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Úprava súborov šablóny <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Úprava detailov súborov šablóny</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Export súborov šablóny</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Obnovenie súborov šablóny</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Pridanie novej témy do databázy</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Pridanie novej témy do systému súborov</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Odstránenie témy</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Úprava detailov témy</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Úprava témy <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Úprava témy <em>%1$s</em></strong><br />» Modifikovaný súbor <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Export témy</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Obnovenie témy</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Aktualizácia databázy z verzie %1$s na verziu %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Aktualizácia phpBB z verzie %1$s na verziu %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Aktivácia používateľa</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Ban na používateľa cez správu používateľov</strong> z dôvodu "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Ban na IP adresu cez správu používateľov</strong> z dôvodu "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Ban na e-mailovú adresu cez správu používateľov</strong> z dôvodu "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Odstránenie používateľa</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Odstránenie všetkých príloh od používateľa</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Odstránenie obrázka postavičky používateľa</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Odstránenie všetkých príspevkov od používateľa</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Odstránenie podpisu používateľa</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Deaktivácia používateľa</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Presun príspevkov používateľa</strong><br />» príspevky od "%1$s" do fóra "%2$s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Zmena hesla používateľa</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Nútená reaktivácia účtu</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Zmena e-mailovej adresy používateľa "%1$s"</strong><br />» z "%2$s" na "%3$s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Zmena používateľského mena</strong><br />» z "%1$s" na "%2$s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>Aktualizácia detailov používateľa</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Aktivácia používateľského účtu</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Odstránenie postavičky používateľa</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Odstránenie podpisu používateľa</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Pridanie spätnej väzby používateľa</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Pridanie záznamu:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Deaktivácia používateľského účtu</strong>',
	'LOG_USER_LOCK'				=> '<strong>Uzamknutie vlastnej témy používateľa</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Presun všetkých príspevky do fóra</strong><br />» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Nútená reaktivácia účtu</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Odomknutie vlastnej témy používateľa</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Pridanie varovania pre používateľa</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Používateľovi bolo udelené nasledovné varovanie</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Zmena predvolenej skupiny používateľa</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Zrušenie používateľa ako vedúceho skupiny</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Pripojenie používateľa do skupiny</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Pripojenie používateľa do skupiny, čaká na schválenie</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Vystúpenie používateľa zo skupiny</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Pridanie cenzurovaného slova</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Odstránenie cenzurovaného slova</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Úprava cenzurovaného slova</strong><br />» %s',
));

?>
