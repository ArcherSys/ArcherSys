<?php
/** 
*
* acp_common [Česky]
*
* @package language
* @version $Id: common.php,v 1.115 2007/01/24 11:29:56 acydburn Exp $
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
	'ACP_ADMINISTRATORS'		=> 'Administrátoři',
	'ACP_ADMIN_LOGS'			=> 'Administrační log',
	'ACP_ADMIN_ROLES'			=> 'Administrátorské role',
	'ACP_ATTACHMENTS'			=> 'Přílohy',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Nastavení příloh',
	'ACP_AUTH_SETTINGS'			=> 'Autentifikace',
	'ACP_AUTOMATION'			=> 'Automatizace',
	'ACP_AVATAR_SETTINGS'		=> 'Nastavení avatarů',

	'ACP_BACKUP'				=> 'Záloha',
	'ACP_BAN'					=> 'Banování',
	'ACP_BAN_EMAILS'			=> 'Ban e-mailových adres',
	'ACP_BAN_IPS'				=> 'Ban IP adres',
	'ACP_BAN_USERNAMES'			=> 'Ban uživatelských jmen',
	'ACP_BBCODES'				=> 'tagy BBCode',
	'ACP_BOARD_CONFIGURATION'	=> 'Konfigurace fóra',
	'ACP_BOARD_FEATURES'		=> 'Funkce fóra',
	'ACP_BOARD_MANAGEMENT'		=> 'Správa fóra',
	'ACP_BOARD_SETTINGS'		=> 'Nastavení fóra',
	'ACP_BOTS'					=> 'Boti/vyhledavače',
	
	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Databáze',
	'ACP_CAT_DOT_MODS'			=> '.Mody',
	'ACP_CAT_FORUMS'			=> 'Fóra',
	'ACP_CAT_GENERAL'			=> 'Obecné',
	'ACP_CAT_MAINTENANCE'		=> 'Údržba',
	'ACP_CAT_PERMISSIONS'		=> 'Oprávnění',
	'ACP_CAT_POSTING'			=> 'Přispívání',
	'ACP_CAT_STYLES'			=> 'Styly',
	'ACP_CAT_SYSTEM'			=> 'Systém',
	'ACP_CAT_USERGROUP'			=> 'Uživatelé a skupiny',
	'ACP_CAT_USERS'				=> 'Uživatelé',
	'ACP_CLIENT_COMMUNICATION'	=> 'Komunikace klientů',
	'ACP_COOKIE_SETTINGS'		=> 'Nastavení cookies',
	'ACP_CRITICAL_LOGS'			=> 'Log chyb',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Vlastní pole v profilu',
	
	'ACP_DATABASE'				=> 'Správa databáze',
	'ACP_DISALLOW'				=> 'Zakázat',
	'ACP_DISALLOW_USERNAMES'	=> 'Zakázat uživatelská jména',
	
	'ACP_EMAIL_SETTINGS'		=> 'Nastavení e-mailů',
	'ACP_EXTENSION_GROUPS'		=> 'Spravovat skupiny druhů souborů',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Oprávnění založená na fórech',
	'ACP_FORUM_LOGS'				=> 'Log fór',
	'ACP_FORUM_MANAGEMENT'			=> 'Správa fór',
	'ACP_FORUM_MODERATORS'			=> 'Moderátoři fór',
	'ACP_FORUM_PERMISSIONS'			=> 'Oprávnění fór',
	'ACP_FORUM_ROLES'				=> 'Role fór',

	'ACP_GENERAL_CONFIGURATION'		=> 'Obecná konfigurace',
	'ACP_GENERAL_TASKS'				=> 'Běžné úkoly',
	'ACP_GLOBAL_MODERATORS'			=> 'Globální moderátoři',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Globální oprávnění',
	'ACP_GROUPS'					=> 'Skupiny',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Skupinová oprávnění fór',
	'ACP_GROUPS_MANAGE'				=> 'Spravovat skupiny',
	'ACP_GROUPS_MANAGEMENT'			=> 'Správa skupiny',
	'ACP_GROUPS_PERMISSIONS'		=> 'Oprávnění skupin',
	
	'ACP_ICONS'					=> 'Ikony témat',
	'ACP_ICONS_SMILIES'			=> 'Ikony témat/smajlíci',
	'ACP_IMAGESETS'				=> 'Sady obrázků',
	'ACP_INACTIVE_USERS'		=> 'Neaktivní uživatelé',
	'ACP_INDEX'					=> 'Obsah administrace',
	
	'ACP_JABBER_SETTINGS'		=> 'Nastavení Jabber',
	
	'ACP_LANGUAGE'				=> 'Správa jazyků',
	'ACP_LANGUAGE_PACKS'		=> 'Jazykové balíky',
	'ACP_LOAD_SETTINGS'			=> 'Nastavení zatížení',
	'ACP_LOGGING'				=> 'Zaznamenávám',
	
	'ACP_MAIN'					=> 'Obsah administrace',
	'ACP_MANAGE_EXTENSIONS'		=> 'Spravovat druhy souborů',
	'ACP_MANAGE_FORUMS'			=> 'Spravovat fóra',
	'ACP_MANAGE_RANKS'			=> 'Spravovat hodnosti',
	'ACP_MANAGE_REASONS'		=> 'Spravovat důvody hlášení/zamítnutí',
	'ACP_MANAGE_USERS'			=> 'Spravovat uživatele',
	'ACP_MASS_EMAIL'			=> 'Hromadný e-mail',
	'ACP_MESSAGES'				=> 'Zprávy',
	'ACP_MESSAGE_SETTINGS'		=> 'Nastavení soukromých zpráv',
	'ACP_MODULE_MANAGEMENT'		=> 'Správa modulů',
	'ACP_MOD_LOGS'				=> 'Moderátorský log',
	'ACP_MOD_ROLES'				=> 'Moderátorské role',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Nepřiřazené přílohy',
	
	'ACP_PERMISSIONS'			=> 'Oprávnění',
	'ACP_PERMISSION_MASKS'		=> 'Masky oprávnění',
	'ACP_PERMISSION_ROLES'		=> 'Role oprávnění',
	'ACP_PERMISSION_TRACE'		=> 'Sledování oprávnění',
	'ACP_PHP_INFO'				=> 'Informace o PHP',
	'ACP_POST_SETTINGS'			=> 'Nastavení příspěvků',
	'ACP_PRUNE_FORUMS'			=> 'Pročistit fóra',
	'ACP_PRUNE_USERS'			=> 'Pročistit uživatele',
	'ACP_PRUNING'				=> 'Pročištování',
	
	'ACP_QUICK_ACCESS'			=> 'Rychlý přístup',
	
	'ACP_RANKS'					=> 'Hodnosti',
	'ACP_REASONS'				=> 'Důvody schválení/zamítnutí',
	'ACP_REGISTER_SETTINGS'		=> 'Nastavení registrace uživatelů',

	'ACP_RESTORE'				=> 'Obnovit',

	'ACP_SEARCH'				=> 'Nastavení hledání',
	'ACP_SEARCH_INDEX'			=> 'Vyhledávač',
	'ACP_SEARCH_SETTINGS'		=> 'Nastavení vyhledávání',

	'ACP_SECURITY_SETTINGS'		=> 'Nastavení zabezpečení',
	'ACP_SERVER_CONFIGURATION'	=> 'Konfigurace serveru',
	'ACP_SERVER_SETTINGS'		=> 'Nastavení serveru',
	'ACP_SIGNATURE_SETTINGS'	=> 'Nastavení podpisů',
	'ACP_SMILIES'				=> 'Smajlíci',
	'ACP_STYLE_COMPONENTS'		=> 'Komponenty stylů',
	'ACP_STYLE_MANAGEMENT'		=> 'Správa stylů',
	'ACP_STYLES'				=> 'Styly',
	
	'ACP_TEMPLATES'				=> 'Šablony',
	'ACP_THEMES'				=> 'Skiny',
	
	'ACP_UPDATE'					=> 'Aktualizuji',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Uživatelská oprávnění fór',
	'ACP_USERS_LOGS'				=> 'Uživatelský log',
	'ACP_USERS_PERMISSIONS'			=> 'Oprávnění uživatelů',
	'ACP_USER_ATTACH'				=> 'Přílohy',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Zpětná vazba',
	'ACP_USER_GROUPS'				=> 'Skupiny',
	'ACP_USER_MANAGEMENT'			=> 'Správa uživatelů',
	'ACP_USER_OVERVIEW'				=> 'Přehled',
	'ACP_USER_PERM'					=> 'Oprávnění',
	'ACP_USER_PREFS'				=> 'Nastavení',
	'ACP_USER_PROFILE'				=> 'Profil',
	'ACP_USER_RANK'					=> 'Hodnost',
	'ACP_USER_ROLES'				=> 'Uživatelské role',
	'ACP_USER_SECURITY'				=> 'Bezpečnost uživatele',
	'ACP_USER_SIG'					=> 'Podpis',

	'ACP_VC_SETTINGS'					=> 'Nastavení vizuálního ověřování',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Náhled obrázku CAPTCHA',
	'ACP_VERSION_CHECK'					=> 'Zkontrolovat aktualizace',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Zobrazit administrační oprávnění',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Zobrazit oprávnění moderování fór',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Zobrazit oprávnění založená na fórech',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Zobrazit globální moderátorská oprávnění',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Zobrazit oprávnění založená na uživatelích',
	
	'ACP_WORDS'					=> 'Cenzura slov',

	'ACTION'				=> 'Akce',
	'ACTIONS'				=> 'Akce',
	'ACTIVATE'				=> 'Aktivovat',
	'ADD'					=> 'Přidat',
	'ADMIN'					=> 'Administrace',
	'ADMIN_INDEX'			=> 'Obsah administrace',
	'ADMIN_PANEL'			=> 'Ovládací panel fóra',

	'BACK'					=> 'Zpět',

	'COLOUR_SWATCH'			=> 'Vzorník bezpečných barev',
	'CONFIG_UPDATED'		=> 'Nastavení bylo úspěšně aktualizováno.',

	'DEACTIVATE'				=> 'Deaktivovat',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Zadaná cesta "%s" neexistuje.',
	'DIRECTORY_NOT_DIR'			=> 'Zadaná cesta "%s"není adresář.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Do zadané cesty "%s" nelze zapisovat.',
	'DISABLE'					=> 'Zakázat',
	'DOWNLOAD'					=> 'Stáhnout',
	'DOWNLOAD_AS'				=> 'Stáhnout jako',
	'DOWNLOAD_STORE'			=> 'Stáhnout nebo uložit soubor',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Soubor můžete přímo stáhnout, nebo ho uložit ve svém adresáři <samp>store/</samp>.',

	'EDIT'					=> 'Upravit',
	'ENABLE'				=> 'Povolit',
	'EXPORT_DOWNLOAD'		=> 'Stáhnout',
	'EXPORT_STORE'			=> 'Uložit',

	'GENERAL_OPTIONS'		=> 'Obecné možnosti',
	'GENERAL_SETTINGS'		=> 'Obecná nastavení',
	'GLOBAL_MASK'			=> 'Globální maska oprávnění',

	'INSTALL'				=> 'Instalovat',
	'IP'					=> 'IP adresa',
	'IP_HOSTNAME'			=> 'IP adresy nebo názvy hostitelů',

	'LOGGED_IN_AS'			=> 'Jste přihlášen jako:',
	'LOGIN_ADMIN'			=> 'Pro správu fóra musíte mít příslušná uživatelská oprávnění.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Pro administraci fóra se musíte znovu přihlásit.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Úspěšně jste se přihlásili. Nyní budete přesměrováni na Ovládací panel fóra.',
	'LOOK_UP_FORUM'			=> 'Zvolte fórum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Můžete zvolit více než jedno fórum',

	'MANAGE'				=> 'Spravovat',
	'MENU_TOGGLE'			=> 'Zobrazit nebo skrýt postranní menu',
	'MOVE_DOWN'				=> 'Posunout dolů',
	'MOVE_UP'				=> 'Posunout nahoru',

	'NOTIFY'				=> 'Upozornění',
	'NO_ADMIN'				=> 'Nemáte oprávnění spravovat toto fórum.',
	'NO_EMAILS_DEFINED'		=> 'Nebyla nalezena žádná platná e-mailová adresa',
	'NO_PASSWORD_SUPPLIED'	=> 'Pro vstup do administrace musíte zadat heslo.',	

	'OFF'					=> 'Vypnuto',
	'ON'					=> 'Zapnuto',

	'PARSE_BBCODE'						=> 'Zpracovávát BBCode',
	'PARSE_SMILIES'						=> 'Zpracovávát smajlíky',
	'PARSE_URLS'						=> 'Zpracovávát odkazy',
	'PERMISSIONS_TRANSFERRED'			=> 'Oprávnění byla přenesena',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Nyní máte oprávnění %1$s. Můžete procházet fórum s uživatelským oprávněním, ale nelze vstoupit do administrace fóra, protože administrátorská oprávnění nebyla přenesena. K <a href="%2$s"><strong>vlastním oprávněním</strong></a> se můžete kdykoliv vrátit.',
	'PIXEL'								=> 'px',	
	'PROCEED_TO_ACP'					=> '%sPokračovat na Ovládací panel fóra%s',

	'REMIND'							=> 'Připomenout',
	'RESYNC'							=> 'Znovu synchronizovat',
	'RETURN_TO'							=> 'Vrátit se na…',

	'SELECT_ANONYMOUS'		=> 'Vybrat anonymního uživatele',
	'SELECT_OPTION'			=> 'Vybrat možnost',

	'UCP'					=> 'Uživatelský ovládací panel',
	'USERNAMES_EXPLAIN'		=> 'Uživatelská jména vkládejte odděleně na jednotlivé řádky.',
	'USER_CONTROL_PANEL'	=> 'Uživatelský ovládací panel',

	'WARNING'				=> 'Upozornění',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Tato stránka vypisuje informace o verzi PHP instalované na tomto serveru. Obsahuje detaily o načtených modulech, dostupných proměnných a výchozích nastavení. Tyto informace mohou být užitečné při řešení potíží. Upozorňujeme, že nekteří hostitelé mohou z bezpečnostních důvodů omezovat informace zde poskytované. Doporučuje se nezveřejňovat zde zobrazené podrobnosti, jen jste-li na ně dotázáni od <a href="http://www.phpbb.com/about/team/">týmových členů</a> na oficiálních fórech podpory.',

	'NO_PHPINFO_AVAILABLE'	=> 'Informace o vaší konfiguraci PHP nelze určit. Phpinfo() bylo z bezpečnostních důvodů vypnuto.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Tento log vypisuje všechny činnosti administrátorů. Můžete je seřadit podle jména, data, IP adresy nebo akce. Pokud máte příslušná oprávnění, můžete smazat jednotlivé záznamy nebo celý log.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Zde jsou zobrazeny všechny činnosti, které provedlo fórum samo. Tento log vám poskytuje informace, které můžete použít pro řešení specifických potíží, např. nedoručování e-mailů. Můžete je seřadit podle jména, data, IP adresy nebo akce. Pokud máte příslušná oprávnění, můžete smazat jednotlivé záznamy nebo celý log.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Tento log vypisuje všechny činnosti moderátorů. Zvolte konkrétní fórum z rozbalovacího menu. Můžete je seřadit podle jména, data, IP adresy nebo akce. Pokud máte příslušná oprávnění, můžete smazat jednotlivé záznamy nebo celý log.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Toto vypisuje všechny činnosti provedené uživateli nebo na uživatelích (upozornění, varování, uživatelské poznámky).',
	'ALL_ENTRIES'				=> 'Všechny záznamy',

	'DISPLAY_LOG'	=> 'Zobrazit záznamy za posledních',

	'NO_ENTRIES'	=> 'Žádné záznamy pro toto období',

	'SORT_IP'		=> 'IP adresa',
	'SORT_DATE'		=> 'Datum',
	'SORT_ACTION'	=> 'Záznam',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Děkujeme, že jste si zvolili phpBB jako řešení pro vaše fórum. Tato obrazovka vám poskytne rychlý přehled o různých statistikách fóra. Odkazy na levé stránce obrazovky vám dovolují spravovat všechny části vašeho fóra. Každá stránka obsahuje pokyny k použití.',
	'ADMIN_LOG'					=> 'Záznam administrátorských činností',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Zde je přehled posledních pěti akcí vykonaných administrátory. Ucelený záznam můžete zobrazit zvolením odpovídající položky v menu nebo kliknutím na níže uvedený odkaz.',
	'AVATAR_DIR_SIZE'			=> 'Velikost adresáře s avatary',

	'BOARD_STARTED'		=> 'Datum spuštění',
	'BOARD_VERSION'     => 'Verze fóra',

	'DATABASE_SERVER_INFO'	=> 'Databázový server',
	'DATABASE_SIZE'			=> 'Velikost databáze',

	'FILES_PER_DAY'		=> 'Příloh za den',
	'FORUM_STATS'		=> 'Statistiky fóra',

	'GZIP_COMPRESSION'	=> 'GZip komprese',

	'NOT_AVAILABLE'		=> 'Nedostupné',
	'NUMBER_FILES'		=> 'Počet příloh',
	'NUMBER_POSTS'		=> 'Počet příspěvků',
	'NUMBER_TOPICS'		=> 'Počet témat',
	'NUMBER_USERS'		=> 'Počet uživatelů',
	'NUMBER_ORPHAN'		=> 'Nepřipojených příloh',

	'POSTS_PER_DAY'		=> 'Příspěvků za den',
	
	'PURGE_CACHE'			=> 'Pročistit cache',
	'PURGE_CACHE_CONFIRM'	=> 'Opravdu chcete zcela pročistit cache?',
	'PURGE_CACHE_EXPLAIN'	=> 'Pročiští všechny cachované soubory šablon a SQL dotazy.',

	'RESET_DATE'					=> 'Vynulovat datum spuštění',
	'RESET_DATE_CONFIRM'			=> 'Opravdu chcete vynulovat datum založení fóra?',
	'RESET_ONLINE'					=> 'Vynulovat rekord uživatelů online',
	'RESET_ONLINE_CONFIRM'			=> 'Opravdu chcete vynulovat rekord přítomých uživatelů?',
	'RESYNC_POSTCOUNTS'				=> 'Resynchronizovat počítadla příspěvků',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Brány v úvahu budou pouze existující příspěvky. Pročištěné příspěvky nebudou počítány.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Opravdu chcete synchronizovat počítadla příspěvků?',
	'RESYNC_POST_MARKING'			=> 'Resynchronizovat označená témata',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Opravdu chcete resynchronizovat označená témata?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Nejprve odznačí všechna témata a poté správně označí ta, v nichž uživatel vykázal aktivitu v posledních šesti měsících.',
	'RESYNC_STATS'					=> 'Resynchronizovat statistiky',
	'RESYNC_STATS_CONFIRM'			=> 'Opravdu chcete resynchronizovat statistiky?',
	'RESYNC_STATS_EXPLAIN'			=> 'Přepočítá celkový počet uživatelů, příspěvků, témat a příloh.',
	'RUN'							=> 'Spustit nyní',

	'STATISTIC'			=> 'Statistika',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Resynchronizovat nebo vynulovat statistiky',

	'TOPICS_PER_DAY'	=> 'Témat za den',

	'UPLOAD_DIR_SIZE'	=> 'Velikost všech příloh',
	'USERS_PER_DAY'		=> 'Uživatelů za den',

	'VALUE'					=> 'Hodnota',
	'VIEW_ADMIN_LOG'		=> 'Zobrazit administrátorský log',
	'VIEW_INACTIVE_USERS'	=> 'Zobrazit neaktivní uživatele',

	'WELCOME_PHPBB'			=> 'Vítejte v phpBB',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Datum neaktivity',
	'INACTIVE_REASON'				=> 'Důvod',
	'INACTIVE_REASON_MANUAL'		=> 'Účet deaktivován administrátorem',
	'INACTIVE_REASON_PROFILE'		=> 'Změněny detaily v profilu',
	'INACTIVE_REASON_REGISTER'		=> 'Nově registrovaný uživatel',
	'INACTIVE_REASON_REMIND'		=> 'Nucená reaktivace účtu',
	'INACTIVE_REASON_UNKNOWN'		=> 'Neznámý',
	'INACTIVE_USERS'				=> 'Neaktivní uživatelé',
	'INACTIVE_USERS_EXPLAIN'		=> 'Toto je seznam uživatelů. kteří se registrovali, ale jejich účty nejsou aktivní. Můžete aktivovat, smazat, nebo upozornit (odesláním e-mailu) tyto uživatele.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Toto je seznam posledních 10 registrovaných uživatelů, kteří mají neaktivní účty. Úplný seznam je dostupný z odpovídající položky v menu nebo z odkazu pod místem, kde můžete aktivovat, smazat, nebo upozornit (odesláním e-mailu) tyto uživatele.',

	'NO_INACTIVE_USERS'	=> 'Žádní neaktivní uživatelé',

	'SORT_INACTIVE'		=> 'Datum neaktivity',
	'SORT_LAST_VISIT'	=> 'Poslední návštěva',
	'SORT_REASON'		=> 'Důvod',
	'SORT_REG_DATE'		=> 'Datum registrace',

	'USER_IS_INACTIVE'		=> 'Uživatel je neaktivní',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Přidána nebo upravena uživatelská oprávnění uživatele</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Přidána nebo upravena uživatelská oprávnění skupiny</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Přidána nebo upravena globální moderátorská oprávnění uživatele</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Přidána nebo upravena globální moderátorská oprávnění skupiny</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Přidána nebo upravena administrátorská oprávnění uživatele</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Přidána nebo upravena administrátorská oprávnění skupiny</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Přidáni nebo upraveni Administrátoři</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Přidáni nebo upraveni Globální Moderátoři</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Přidán nebo upraven přístup uživatele k fóru</strong> od %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Přidán nebo upraven přístup uživatele k moderování fóra</strong> od %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Přidán nebo upraven přístup skupiny k fóru</strong> od %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Přidán nebo upraven přístup skupiny k moderování fóra</strong> od %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Přidáni nebo upraveni Moderátoři</strong> od %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Přidána nebo upravena oprávnění k fóru</strong> od %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Odstraněni Administrátoři</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Odstraněni Globální Moderátoři</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Odstraněni Moderátoři</strong> from %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Odstraněni uživatelská/skupinová oprávnění k fóru</strong> od %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Oprávnění přenesena od</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Vlastní oprávnění obnovena po používání oprávnění od</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Neúspešný pokus o přihlášení administrátora</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Úspěšné přihlášení do administrace</strong>',

	'LOG_ATTACHMENTS_DELETED'   => '<strong>Smazány přílohy uživatelů</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Přidány nebo upraveny přípony příloh</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Odebrány přípony příloh</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Aktualizace přípon příloh</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Přidána skupina druhů souborů</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Upravena skupina druhů souborů</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Odstraněna skupina druhů souborů</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Nepřiřazená příloha připojena k příspěvku</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Nepřiřazená příloha odstraněna</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Uživatel vyjmut z banu</strong> z důvodu "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Vyjmuta IP adresa z banu</strong> z důvodu "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Vyjmut e-mail z banu</strong> z důvodu "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Zabanován uživatel</strong> z důvodu "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>Zabanována IP adresa</strong> z důvodu "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Zabanován e-mail</strong> z důvodu "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Uživatel odbanován</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>IP adresa odbanována</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>E-mail odbanován</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Přidán nový tag BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Upraven tag BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Odstraněn tag BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Přidán nový bot</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Odstraněn bot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Existující bot aktualizován</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Administrátorský log promazán</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Log chyb promazán</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Moderátorský log promazán</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Uživatelský log promazán</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Uživatelské logy promazány</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Změna nastavení příloh</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Změna nastavení autentifikace</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Změna nastavení avatarů</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Změna nastavení cookies</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Změna nastavení e-mailů</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Změna nastavení vlastností fóra</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Změna nastavení zatížení serveru</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Změna nastavení soukromých zpráv</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Změna nastavení příspěvků</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Změna nastavení registrace</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Změna nastavení vyhledávání</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Změna nastavení zabezpečení</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Změna nastavení serveru</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Změna nastavení fóra</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Změna nastavení podpisů</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Změna nastavení vizuálního ověřování</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Schválení tématu</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Oživení tématu uživatelem</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Odtranění příspěvku</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Odstranění tématu</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Zkopírování tématu</strong><br />» from %s',
	'LOG_LOCK'					=> '<strong>Zamknutí tématu</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Zamknutí příspěvku</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Sloučení příspěvků</strong> v téma<br />» %s',
	'LOG_MOVE'					=> '<strong>Přesun tématu</strong><br />» z %s',
	'LOG_POST_APPROVED'			=> '<strong>Schválení příspěvku</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Odmítnutí příspěvku “%1$s” z následujícího důvodu</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Úprava příspěvku “%1$s” od</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Uzavření hlášení</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Odstranění hlášení</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Přesun rozdělených příspěvků</strong><br />» do %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Rozdělení příspěvků</strong><br />» z %s',

	'LOG_TOPIC_DELETED'			=> '<strong>Odstranění tématu</strong><br />» %s',
	'LOG_TOPIC_APPROVED'		=> '<strong>Schválení tématu</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Odmítnutí tématu “%1$s” z následujícího důvodu</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Resynchronizace počítadel témat</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Změna druhu tématu</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Odemknutí tématu</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Odemknutí příspěvku</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Přidání zakázaného uživatelského jména</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Odstranění zakázaného uživatelského jména</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Záloha databáze</strong>',
	'LOG_DB_DELETE'			=> '<strong>Odstranění zálohy databáze</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Obnova databáze</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Vyjmutí IP/hostitele ze seznamu stahování</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Přidání IP/hostitele do seznamu stahování</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Odstranění IP/hostitele ze seznamu stahování</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Chyba Jabberu</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Chyba v e-mailu</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Vytvořeno nové fórum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Odstraněno fórum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Odstraněno fórum a jeho subfóra</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Odstraněno fórum a jeho subfóra přesunuta</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Odstraněno fórum a jeho příspěvky přesunuty </strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Odstraněno fórum a jeho subfóra, příspěvky přesunuty</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Odstraněno fórum a přesun jeho příspěvků</strong> do %1$s <strong>a subfór</strong> do %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Odstraněno fórum a jeho příspěvky</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Odstraněno fórum a jeho příspěvky a subfóra</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Odstraněno fórum s jeho příspěvky, subfóra přesunuty</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Upraveny detaily fóra</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Přesunuto fórum</strong> %1$s <strong>dolů</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Přesunuto fórum</strong> %1$s <strong>nahorů</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Resynchronizace fóra</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>Vytvořena nová uživatelská skupina</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Skupina nastavena pro uživatele</strong><br />» %s jako výchozí',
	'LOG_GROUP_DELETE'		=> '<strong>Skupina odstraněna</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Moderátoři skupiny degradováni</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Uživatelé povýšeni na moderátory skupiny </strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Uživatelé odstraněni ze skupiny</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Upraveny detaily o skupině</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Přidáni noví moderátoři skupiny</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Uživatelé přijati do skupiny</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Přidáni noví uživatelé do skupiny</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'			=> '<strong>Přidána nová sada obrázků do databáze</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>Přidána nová sada obrázků v souborovém systému</strong><br />» %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>Odstranění sady obrázků</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>Upraveny detaily sady obrázků</strong><br />» %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>Upravena sada obrázků</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>Export sady obrázků</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'     => '<strong>V sadě obrázků chybí “%2$s” umístění</strong><br />» %1$s',
  	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Obnoveno umístění “%2$s” sady obrázků</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>Obnovení sady obrázků</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Aktivace neaktivních uživatelů</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Odstranění neaktivních uživatelů</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Odeslána připomenutí pro neaktivní uživatele</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Přechod z %1$s na phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Instalace phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Selhala kontrola IP seance/prohlížeče/X_FORWARDED_FOR</strong><br />»Uživatelská IP "<em>%1$s</em>" porovnána oproti IP seance "<em>%2$s</em>", uživatelské označení prohlížeče "<em>%3$s</em>" porovnáno oproti označení seance "<em>%4$s</em>" a uživatelský řetězec X_FORWARDED_FOR "<em>%5$s</em>" porovnán oproti X_FORWARDED_FOR ze seance "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Změna účtu Jabber</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Změna hesla Jabber</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Registrace účtu Jabber</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Změna nastavení Jabber</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Odstraněn jazykový balík</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Instalace jazykového balíku</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Aktualizace detailů jazykového balíku</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Nahrazen jazykový soubor</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Odeslán jazykový soubor a nahrán do úložného adresáře</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Odeslán hromadný e-mail</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Změnen odesílatel v tématu "%1$s"</strong><br />» z %2$s na %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Modul vypnut</strong>',
	'LOG_MODULE_ENABLE'		=> '<strong>Modul zapnut</strong>',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Modul posunut dolů</strong><br />» %s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Modul posunut nahoru</strong><br />» %s',
	'LOG_MODULE_REMOVED'	=> '<strong>Modul vyjmut</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Přidán modul</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Modul upraven</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Administrátorská role přidána</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Administrátorská role upravena</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Administrátorská role odstraněna</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Role fóra přidána</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Role fóra upravena</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Role fóra odstraněna</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Moderátorská role přidána</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Moderátorská role upravena</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Moderátorská role odstraněna</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Uživatelská role přidána</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Uživatelská role upravena</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Uživatelská role odstraněna</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Aktivováno pole v profilu</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Přidáno pole v profilu</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Deaktivováno pole v profilu</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Změna pole v profilu</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Odstraněno pole v profilu</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Pročištění fór</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Automatické pročištění fór</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Uživatelé deaktivováni</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Uživatelé a příspěvky pročištěny</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Uživatelé pročištěni, příspěvky zachovány</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Pročištěno cache</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Přidaná nová hodnost</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Odstraněna hodnost</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Upravena hodnost</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Přidán důvod hlášení/zamítnutí</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Odstraněn důvod hlášení/zamítnutí</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Aktualizace důvodu hlášení/zamítnutí</strong><br />» %s',

	'LOG_RESET_DATE'			=> '<strong>Vynulován čas spuštění fóra</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Vynulován rekord online uživatelů</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Resynchonizace počtu příspěvků</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Označená témata synchronizována</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Příspěvky, témata a statistiky resynchronizovány</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Vytvořen vyhledávací index pro</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Odstraněn vyhledávací index pro</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Přidán nový styl</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Odstraněn styl</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Upraven styl</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Exportován styl</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Přidána nová šablona do databáze</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Přidána nová šablona do systému souborů</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Odstranění cachované verze souborů šablon <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Odstraněn soubor šablon</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Upraven soubor šablon <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Upraveny detaily souboru šablon</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Export souboru šablon</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Obnovení souboru šablon</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Přidán nový skin do databáze</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Přidán nový skin do systému souborů</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Skin smazán</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Detaily editovaného skinu</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Upravený skin <em>%1$s</em></strong><br />» Modified class <em>%2$s</em>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Upravený skin <em>%1$s</em></strong><br />» Modified file <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Exportovaný skin</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Obnovení skinu</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Aktualizace databáze z verze %1$s na verzi %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Aktualizace phpBB z verze %1$s na verzi %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Uživatel aktivován</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Zabanován uživatel přes správu uživatelů</strong> z důvodu "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Zabanována IP adresa přes správu uživatelů</strong> z důvodu "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Zabanován e-mail přes správu uživatelů</strong> z důvodu "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Smazán uživatel</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Odstraněny všechny přílohy od uživatele</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Odstraněn uživatelský avatar</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Odstraněny všechny příspěvky od uživatele</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Odstraněn podpis uživatele</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Uživatel deaktivován</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Přesunuty uživatelské příspěvky</strong><br />» přísěvky od "%1$s" do fóra "%2$s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Změněno heslo uživatele</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Nucená reaktivace účtu</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Uživatel "%1$s" změnil e-mail</strong><br />» z "%2$s" na "%3$s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Změněno uživatelské jméno</strong><br />» z "%1$s" na "%2$s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>Aktualizace uživatele</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Uživatelský účet aktivován</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Odstraněn avatar uživatele</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Odstraněn podpis uživatele</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Přidán komentář k uživateli</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Přidán záznam:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Deaktivace uživatelského účtu</strong>',
	'LOG_USER_LOCK'				=> '<strong>Uživatel zamknul své téma</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Všechny příspěvky přesunuty do fóra "%s"</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Nucená reaktivace účtu</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Uživatel odemknul své téma</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Přidáno varování uživatele</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Uživateli bylo uděleno následující varování</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Uživatel změnil výchozí skupinu</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Uživatel degradován z moderování skupiny</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Uživatel vstoupil do skupiny</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Uživatel vstoupil do skupiny a čeká na schválení</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Uživatel vystoupil ze skupiny/strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Přidáno cenzurované slovo</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Odstraněno cenzurované slovo</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Upraveno cenzurované slovo</strong><br />» %s',
));

?>