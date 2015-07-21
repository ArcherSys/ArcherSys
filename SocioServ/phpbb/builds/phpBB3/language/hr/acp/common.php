<?php
/** 
*
* acp common [Croatian]
*
* @package language
* @version $Id: $
* @copyright (c) 2000-2007 phpBB Group 
* @author (c) 2003-2007 Ancica Secan (ancica.sunceko.net)
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

/***************************************************************************
 *   TRANSLATOR
  *   ANČI - START
 *   <NE briši i NE mijenjaj!>
 *   Danas će biti toplo i sunčano.
 *   [Hrvatski]
 *   Prevela s engleskog na hrvatski: Ančica Sečan [Ancica Secan].
 *   Verzija: 1.0.0.
 *   Vrijeme: 22. travnja 2003. godine [utorak].
 *   Verzija: 1.0.1.
 *   Ažurirano za 2.0.5: 19. lipnja 2003. godine [četvrtak].
 *   Verzija: 1.0.2.
 *   Ažurirano za 2.0.11: 30. siječnja 2005. godine [nedjelja].
 *   Verzija: 1.0.3.
 *   Ažurirano za 2.0.12: 24. veljače 2005. godine [četvrtak].
 *   Verzija: 1.0.4.
 *   Ažurirano za 2.0.15: 08. svibnja 2005. godine [nedjelja].
 *   Verzija: 1.0.5.
 *   Ažurirano za 2.0.15: 20. lipnja 2005. godine [ponedjeljak].
 *   Verzija: 1.0.6.
 *   Ažurirano za 2.0.15: 24. lipnja 2005. godine [petak].
 *   Verzija: 1.0.7.
 *   Ažurirano za 2.0.17: 11. rujna 2005. godine [nedjelja].
 *   Verzija: 1.0.8.
 *   Ažurirano za 2.0.17: 05. listopada 2005. godine [srijeda].
 *   Verzija: 1.0.9.
 *   Ažurirano za 2.0.18: 31. listopada 2005. godine [ponedjeljak].
 *   Verzija: 2.0.0.
 *   Ažurirano za 2.0.19: 05. siječnja 2006. godine [četvrtak].
 *   Verzija: 2.0.1.
 *   Ažurirano za 2.0.19: 16. veljače 2006. godine [četvrtak].
  *
 *   Verzija: 3.0.1.
 *   Ažurirano za Olympus: 28. ožujka 2006. godine [ponedjeljak].
 *   Verzija: 3.0.2.
 *   Ažurirano za Olympus: 04. travnja 2006. godine [subota].
 *   Verzija: 3.0.3.
 *   Ažurirano za Olympus: 05. travnja 2006. godine [nedjelja].
 *   Verzija: 3.0.4.
 *   Ažurirano za phpBB3-B2: 15. kolovoza 2006. godine [utorak].
 *   Verzija: 3.0.5.
 *   Ažurirano za phpBB3-B5: 18. veljače 2007. godine [nedjelja].
 *   Verzija: 3.0.6.
 *   Ažurirano za phpBB3-B5: 23. ožujka 2007. godine [petak].
 *   Verzija: 3.0.7.
 *   Ažurirano za phpBB3-B5: 24. ožujka 2007. godine [subota].
 *   Verzija: 3.0.8.
 *   Ažurirano za phpBB3-RC1: 30. svibnja 2007. godine [srijeda].
 *   Verzija: 3.0.9.
 *   Ažurirano za phpBB3-RC1: 05. lipnja 2007. godine [utorak].
 *   Verzija: 3.0.10.
 *   Ažurirano za phpBB3-RC2: 25. lipnja 2007. godine [ponedjeljak].
 *   Verzija: 3.0.11.
 *   Ažurirano za phpBB3-RC3: 09. srpnja 2007. godine [ponedjeljak].
 *   Verzija: 3.0.12.
 *   Ažurirano za phpBB3-RC3: 12. srpnja 2007. godine [četvrtak].
 *   Verzija: 3.0.13.
 *   Ažurirano za phpBB3-RC3: 14. srpnja 2007. godine [subota].
 *   Verzija: 3.0.14.
 *   Ažurirano za phpBB3-RC4: 29. srpnja 2007. godine [nedjelja].
 *   Verzija: 3.0.15.
 *   Ažurirano za phpBB3-RC5: 19. kolovoza 2007. godine [nedjelja].
 *   Verzija: 3.0.16.
 *   Ažurirano za phpBB3-RC5: 25. kolovoza 2007. godine [subota].
 *   Url: http://ancica.sunceko.net.
 *   Danas će biti toplo i sunčano.
 *   [Zadnju] Službenu verziju ovog mog prijevoda možeš skinuti sa www.phpbb.com.
 *   [Zadnju] NeSlužbenu verziju ovog mog prijevoda možeš skinuti sa forum.sunceko.net.
 *   Danas će biti toplo i sunčano.
 *   </NE briši i NE mijenjaj!>
  *   ANČI - END
***************************************************************************/

// Common
$lang = array_merge($lang, array(
'ACP_ADMINISTRATORS'=> 'Administratori/ce',
'ACP_ADMIN_LOGS'=> 'Logovi administratora/ica',
'ACP_ADMIN_ROLES'=> 'Administratorski setovi dopuštenja',
'ACP_ATTACHMENTS'=> 'Privitci',
'ACP_ATTACHMENT_SETTINGS'=> 'Postavke privitaka',
'ACP_AUTH_SETTINGS'=> 'Provjera autentičnosti ',
'ACP_AUTOMATION'=> 'Automatizacija',
'ACP_AVATAR_SETTINGS'=> 'Postavke avatara',
'ACP_BACKUP'=> 'Backup',
'ACP_BAN'=> 'Isključivanje',
'ACP_BAN_EMAILS'=> 'Isključivanje e-mail adresa',
'ACP_BAN_IPS'=> 'Isključivanje IP adresa',
'ACP_BAN_USERNAMES'=> 'Isključivanje korisničkih imena',
'ACP_BBCODES'=> 'BBKodovi',
'ACP_BOARD_CONFIGURATION'=> 'Konfiguriranje foruma',
'ACP_BOARD_FEATURES'=> 'Mogućnosti foruma',
'ACP_BOARD_MANAGEMENT'=> 'Upravljanje forumom',
'ACP_BOARD_SETTINGS'=> 'Postavke foruma',
'ACP_BOTS'=> 'Pauci/Roboti',
'ACP_CAPTCHA'=> 'CAPTCHA',
'ACP_CAT_DATABASE'=> 'Baza podataka',
'ACP_CAT_DOT_MODS'=> '.MODovi',
'ACP_CAT_FORUMS'=> 'Forumi',
'ACP_CAT_GENERAL'=> 'Općenito',
'ACP_CAT_MAINTENANCE'=> 'Održavanje',
'ACP_CAT_PERMISSIONS'=> 'Dopuštenja',
'ACP_CAT_POSTING'=> 'Postanje',
'ACP_CAT_STYLES'=> 'Stilovi',
'ACP_CAT_SYSTEM'=> 'Sistem',
'ACP_CAT_USERGROUP'=> 'Korisnici/e i Grupe',
'ACP_CAT_USERS'=> 'Korisnici/e',
'ACP_CLIENT_COMMUNICATION'=> 'Klijentska komunikacija',
'ACP_COOKIE_SETTINGS'=> 'Postavke kolačića',
'ACP_CRITICAL_LOGS'=> 'Logovi grešaka',
'ACP_CUSTOM_PROFILE_FIELDS'=> 'Prilagođena korisnička polja',
'ACP_DATABASE'=> 'Upravljanje bazom podataka',
'ACP_DISALLOW'=> 'Nedopusti',
'ACP_DISALLOW_USERNAMES'=> 'Nedopuštanje korisničkih imena',
'ACP_EMAIL_SETTINGS'=> 'E-mail postavke',
'ACP_EXTENSION_GROUPS'=> 'Upravljanje grupama ekstenzija',
'ACP_FORUM_BASED_PERMISSIONS'=> 'Dopuštenja vezana uz forum',
'ACP_FORUM_LOGS'=> 'Logovi foruma',
'ACP_FORUM_MANAGEMENT'=> 'Upravljanje forumom',
'ACP_FORUM_MODERATORS'=> 'Moderatori/ce foruma',
'ACP_FORUM_PERMISSIONS'=> 'Forumska dopuštenja',
'ACP_FORUM_ROLES'=> 'Forumski setovi dopuštenja',
'ACP_GENERAL_CONFIGURATION'=> 'Opće konfiguriranje',
'ACP_GENERAL_TASKS'=> 'Općenito',
'ACP_GLOBAL_MODERATORS'=> 'Globalni/e moderatori/ce',
'ACP_GLOBAL_PERMISSIONS'=> 'Opća dopuštenja',
'ACP_GROUPS'=> 'Grupe',
'ACP_GROUPS_FORUM_PERMISSIONS'=> 'Forumska dopuštenja grupa',
'ACP_GROUPS_MANAGE'=> 'Upravljanje grupama',
'ACP_GROUPS_MANAGEMENT'=> 'Upravljanje grupama',
'ACP_GROUPS_PERMISSIONS'=> 'Dopuštenja grupa',
'ACP_ICONS'=> 'Ikone tema',
'ACP_ICONS_SMILIES'=> 'Ikone/smajlići tema',
'ACP_IMAGESETS'=> 'Setovi slika',
'ACP_INACTIVE_USERS'=> 'Neaktivni/e korisnici/e',
'ACP_INDEX'=> 'AF početna',
'ACP_JABBER_SETTINGS'=> 'Jabber postavke',
'ACP_LANGUAGE'=> 'Upravljanje jezicima',
'ACP_LANGUAGE_PACKS'=> 'Jezični paketi',
'ACP_LOAD_SETTINGS'=> 'Ostale postavke',
'ACP_LOGGING'=> 'Prijavljivanje',
'ACP_MAIN'=> 'AF početna',
'ACP_MANAGE_EXTENSIONS'=> 'Upravljanje ekstenzijama',
'ACP_MANAGE_FORUMS'=> 'Upravljanje forumima',
'ACP_MANAGE_RANKS'=> 'Upravljanje statusima',
'ACP_MANAGE_REASONS'=> 'Upravljanje prijavama i odbijenicama',
'ACP_MANAGE_USERS'=> 'Upravljanje korisnicima/ama',
'ACP_MASS_EMAIL'=> 'Skupni e-mail',
'ACP_MESSAGES'=> 'Poruke',
'ACP_MESSAGE_SETTINGS'=> 'Postavke privatnih poruka',
'ACP_MODULE_MANAGEMENT'=> 'Upravljanje modulima',
'ACP_MOD_LOGS'=> 'Logovi moderatora/ica',
'ACP_MOD_ROLES'=> 'Moderatorski setovi dopuštenja',
'ACP_ORPHAN_ATTACHMENTS'=> 'Bezpostni privitci',
'ACP_PERMISSIONS'=> 'Dopuštenja',
'ACP_PERMISSION_MASKS'=> 'Maske dopuštenja',
'ACP_PERMISSION_ROLES'=> 'Setovi dopuštenja',
'ACP_PERMISSION_TRACE'=> 'Praćenje dopuštenja',
'ACP_PHP_INFO'=> 'PHP info',
'ACP_POST_SETTINGS'=> 'Postavke postanja',
'ACP_PRUNE_FORUMS'=> 'Izbrisivanje foruma',
'ACP_PRUNE_USERS'=> 'Izbrisivanje korisnika/ca',
'ACP_PRUNING'=> 'Izbrisivanje',
'ACP_QUICK_ACCESS'=> 'Brz(o)Bir',
'ACP_RANKS'=> 'Statusi',
'ACP_REASONS'=> 'Prijave i odbijenice',
'ACP_REGISTER_SETTINGS'=> 'Postavke registracije',
'ACP_RESTORE'=> 'Restore',
'ACP_SEARCH'=> 'Konfiguriranje pretraživanja',
'ACP_SEARCH_INDEX'=> 'Indeks(i) pretraživanja',
'ACP_SEARCH_SETTINGS'=> 'Postavke pretraživanja',
'ACP_SECURITY_SETTINGS'=> 'Sigurnosne postavke',
'ACP_SERVER_CONFIGURATION'=> 'Konfiguriranje servera',
'ACP_SERVER_SETTINGS'=> 'Postavke servera',
'ACP_SIGNATURE_SETTINGS'=> 'Postavke potpisa',
'ACP_SMILIES'=> 'Smajlići',
'ACP_STYLE_COMPONENTS'=> 'Komponente stilova',
'ACP_STYLE_MANAGEMENT'=> 'Upravljanje stilovima',
'ACP_STYLES'=> 'Stilovi',
'ACP_TEMPLATES'=> 'Predlošci',
'ACP_THEMES'=> 'Teme',
'ACP_UPDATE'=> 'Ažuriranje u tijeku',
'ACP_USERS_FORUM_PERMISSIONS'=> 'Forumska dopuštenja korisnika/ca',
'ACP_USERS_LOGS'=> 'Logovi korisnika/ca',
'ACP_USERS_PERMISSIONS'=> 'Dopuštenja korisnika/ca',
'ACP_USER_ATTACH'=> 'Privitci',
'ACP_USER_AVATAR'=> 'Avatar',
'ACP_USER_FEEDBACK'=> 'Povratni odgovor(i)',
'ACP_USER_GROUPS'=> 'Korisničke grupe',
'ACP_USER_MANAGEMENT'=> 'Upravljanje korisnicima/ama',
'ACP_USER_OVERVIEW'=> 'Prikaz',
'ACP_USER_PERM'=> 'Dopuštenja',
'ACP_USER_PREFS'=> 'Postavke',
'ACP_USER_PROFILE'=> 'Profil',
'ACP_USER_RANK'=> 'Status',
'ACP_USER_ROLES'=> 'Korisnički setovi dopuštenja',
'ACP_USER_SECURITY'=> 'Sigurnost',
'ACP_USER_SIG'=> 'Potpis',
'ACP_VC_SETTINGS'=> 'Postavke vizualne potvrde',
'ACP_VC_CAPTCHA_DISPLAY'=> 'CAPTCHA prikaz',
'ACP_VERSION_CHECK'=> 'Provjeri ima li ažuriranja',
'ACP_VIEW_ADMIN_PERMISSIONS'=> 'Administratorska dopuštenja',
'ACP_VIEW_FORUM_MOD_PERMISSIONS'=> 'Forumska moderatorska dopuštenja',
'ACP_VIEW_FORUM_PERMISSIONS'=> 'Forumska dopuštenja',
'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'=> 'Globalna moderatorska dopuštenja',
'ACP_VIEW_USER_PERMISSIONS'=> 'Korisnička dopuštenja',
'ACP_WORDS'=> 'Cenzura riječi',
'ACTION'=> 'Radnja',
'ACTIONS'=> 'Radnje',
'ACTIVATE'=> 'Aktiviraj',
'ADD'=> 'Dodaj',
'ADMIN'=> 'Administriranje',
'ADMIN_INDEX'=> 'AF početna',
'ADMIN_PANEL'=> 'Administriranje foruma',

'BACK'=> 'Natrag',

'COLOUR_SWATCH'=> 'Web-safe uzorak boje',
'CONFIG_UPDATED'=> 'Ažuriranje je izvršeno.',

'DEACTIVATE'=> 'Deaktiviraj',
'DIRECTORY_DOES_NOT_EXIST'=> 'Unesena putanja “%s” ne postoji.',
'DIRECTORY_NOT_DIR'=> 'Unesena putanja “%s” nije mapa.',
'DIRECTORY_NOT_WRITABLE'=> 'Unesena putanja “%s” nije pre(za)pisljiva.',
'DISABLE'=> 'Onemogući',
'DOWNLOAD'=> 'Preuzmi',
'DOWNLOAD_AS'=> 'Preuzmi kao',
'DOWNLOAD_STORE'=> 'Preuzmi ili pohrani datoteku',
'DOWNLOAD_STORE_EXPLAIN'=> 'Datoteku možeš direktno preuzeti ili ju pohraniti u mapu za spremanje [<samp>store/</samp>].',

'EDIT'=> 'Uredi',
'ENABLE'=> 'Omogući',
'EXPORT_DOWNLOAD'=> 'Preuzmi',
'EXPORT_STORE'=> 'Pohrani',

'GENERAL_OPTIONS'=> 'Opće mogućnosti',
'GENERAL_SETTINGS'=> 'Opće postavke',
'GLOBAL_MASK'=> 'Maska globalnih dopuštenja',

'INSTALL'=> 'Instaliraj',
'IP'=> 'IP adresa korisnika/ce',
'IP_HOSTNAME'=> 'IP adrese ili ime(na) host(ov)a',

'LOGGED_IN_AS'=> 'Prijavljen/a si kao:',
'LOGIN_ADMIN'=> 'Kako bi mogao/la administrirati forum, moraš imati dopuštenja.',
'LOGIN_ADMIN_CONFIRM'=> 'Kako bi mogao/la administrirati forum, moraš, još jednom, proći provjeru autentičnosti.',
'LOGIN_ADMIN_SUCCESS'=> 'Prošao/la si provjeru autentičnosti te ćeš sada biti preusmjeren/a na <em>Administriranje foruma</em>.',
'LOOK_UP_FORUM'=> 'Izaberi forum',
'LOOK_UP_FORUMS_EXPLAIN'=> 'Možeš odabrati više foruma.',

'MANAGE'=> 'Upravljanje',
'MENU_TOGGLE'=> 'Sakrij odnosno prikaži bočni izbornik',
'MOVE_DOWN'=> 'Pomakni dolje',
'MOVE_UP'=> 'Pomakni gore',

'NOTIFY'=> 'Obavijest',
'NO_ADMIN'=> 'Nisi ovlašten/a za administriranje foruma.',
'NO_EMAILS_DEFINED'=> 'Nije pronađena valjana e-mail adresa.',
'NO_PASSWORD_SUPPLIED'=> 'Moraš unijeti zaporku kako bi mogao/la pristupiti <em>Administriranju foruma</em>.',

'OFF'=> 'Isključeno',
'ON'=> 'Uključeno',

'PARSE_BBCODE'=> 'Parsiraj BBKod(ove)',
'PARSE_SMILIES'=> 'Parsiraj smajliće',
'PARSE_URLS'=> 'Parsiraj linkove',
'PERMISSIONS_TRANSFERRED'=> 'Dopuštenja transferirana',
'PERMISSIONS_TRANSFERRED_EXPLAIN'=> 'Dopuštenja korisnika/ce <strong>%1$s</strong> su transferirana.<br />[Sada] Možeš pregledavati forum dopuštenjima navedenog/e korisnika/ce.<br />Administratorska dopuštenja nisu transferirana.<br /><a href="%2$s"><strong>Natrag na svoja dopuštenja</strong></a> možeš se vratiti bilo kada.',
'PIXEL'=> 'px',
'PROCEED_TO_ACP'=> 'Klikni %sovdje%s za odlazak u AF.',

'REMIND'=> 'Podsjeti',
'RESYNC'=> 'Resinkroniziraj',
'RETURN_TO'=> 'Natrag na...',

'SELECT_ANONYMOUS'=> 'Izaberi anonimnog/u korisnika/cu',
'SELECT_OPTION'=> 'Izaberi opciju',

'UCP'=> 'Korisnički profil/postavke',

'USERNAMES_EXPLAIN'=> 'Unesi svako korisničko ime u novi redak.',
'USER_CONTROL_PANEL'=> 'Korisnički profil/postavke',

'WARNING'=> 'Upozorenje',
));

// PHP info
$lang = array_merge($lang, array(
'ACP_PHP_INFO_EXPLAIN'=> 'Ovdje možeš vidjeti informacije o tome koja je verzija PHP-a instalirana na server.<br />Info uključuje detalje o modulima, dostupnim varijablama i zadanim postavkama.<br />Ove informacije mogu biti od koristi kod dijagnostike u slučaju pojave problema.<br />Neki pružatelji usluga ograničavaju prikaz pojedinih informacija zbog sigurnosnih razloga. Preporučeno je ne davati ikakve detalje [ovdje vidljive] ikome osim u slučaju da to traže <a href="http://www.phpbb.com/about/team/">članovi/ce službenog tima</a> (s) foruma podrške.',

'NO_PHPINFO_AVAILABLE'=> 'Nije moguće doći do informacija/podataka o PHP konfiguraciji.<br />Phpinfo() je onemogućen iz sigurnosnih razloga.',
));

// Logs
$lang = array_merge($lang, array(
'ACP_ADMIN_LOGS_EXPLAIN'=> 'Ovdje su izlistane radnje izvršene od strane administratora/ica.<br />Možeš ih poredati po korisničkom imenu, datumu, IP adresi odnosno radnji.<br />Ukoliko imaš potrebita dopuštenja, možeš izbrisati pojedine logove odnosno cijelu listu.',
'ACP_CRITICAL_LOGS_EXPLAIN'=> 'Ovdje su izlistane radnje izvršene od strane samog foruma.<br />Logovi pružaju informacije koje, u pravilu, služe za rješavanje specifičnih problema [npr. neisporučeni e-mailovi].<br />Možeš ih poredati po korisničkom imenu, datumu, IP adresi odnosno radnji.<br />Ukoliko imaš potrebita dopuštenja, možeš izbrisati pojedine logove odnosno cijelu listu.',
'ACP_MOD_LOGS_EXPLAIN'=> 'Ovdje su izlistane radnje izvršene od strane moderatora/ica.<br />Možeš ih poredati po korisničkom imenu, datumu, IP adresi odnosno radnji.<br />Ukoliko imaš potrebita dopuštenja, možeš izbrisati pojedine logove odnosno cijelu listu.',
'ACP_USERS_LOGS_EXPLAIN'=> 'Ovdje su izlistane radnje [prijave, upozorenja i bilješke] izvršene od strane korisnika/ca odnosno “na” njima.',
'ALL_ENTRIES'=> 'Svi unosi',

'DISPLAY_LOG'=> 'Prikaži unose od prije',

'NO_ENTRIES'=> '[Za ovaj period] Nema logova.',

'SORT_IP'=> 'IP adresa',
'SORT_DATE'=> 'Datum',
'SORT_ACTION'=> 'Log radnja',
));

// Index page
$lang = array_merge($lang, array(
'ADMIN_INTRO'=> 'Hvala ti što si izabrao/la phpBB kao rješenje za svoj forum.<br />Linkovi s lijeve strane omogućuju ti kontroliranje svih aspekata foruma. Na svakoj stranici nalaze se upute što i kako.<br />Ispod se nalazi osnovni statistički prikaz foruma.',
'ADMIN_LOG'=> 'Logovi radnji administratora/ica',
'ADMIN_LOG_INDEX_EXPLAIN'=> 'Dolje je izlistano zadnjih 5 radnji izvršenih od strane administratora/ica. Kompletnu listu logova možeš vidjeti klikneš li na donji link.',
'AVATAR_DIR_SIZE'=> 'Veličina mape avatara',

'BOARD_STARTED'=> 'Forum je pokrenut',
'BOARD_VERSION'=> 'Verzija foruma',

'DATABASE_SERVER_INFO'=> 'Server baze',
'DATABASE_SIZE'=> 'Veličina baze',

'FILES_PER_DAY'=> 'Privitaka dnevno',
'FORUM_STATS'=> 'Statistika foruma',

'GZIP_COMPRESSION'=> 'Gzip kompresija',

'NOT_AVAILABLE'=> 'Nedostupno',
'NUMBER_FILES'=> 'Ukupno privitaka',
'NUMBER_POSTS'=> 'Ukupno postova',
'NUMBER_TOPICS'=> 'Ukupno tema',
'NUMBER_USERS'=> 'Ukupno korisnika/ca',
'NUMBER_ORPHAN'=> 'Ukupno bezpostnih privitaka',

'POSTS_PER_DAY'=> 'Postova dnevno',
'PURGE_CACHE'=> 'Isprazni cache',
'PURGE_CACHE_CONFIRM'=> 'Jesi li siguran/na da želiš isprazniti priručnu memoriju?',
'PURGE_CACHE_EXPLAIN'=> 'Izbrisuje priručnu memoriju.',

'RESET_DATE'=> 'Resetiraj datum pokretanja foruma',
'RESET_DATE_CONFIRM'=> 'Jesi li siguran/na da želiš resetirati datum pokretanja foruma?',
'RESET_ONLINE'=> 'Resetiraj brojač najviše korisnika/ca istovremeno online',
'RESET_ONLINE_CONFIRM'=> 'Jesi li siguran/na da želiš resetirati brojač najviše korisnika/ca istovremeno online?',
'RESYNC_POSTCOUNTS'=> 'Resinkroniziraj broj postova',
'RESYNC_POSTCOUNTS_EXPLAIN'=> 'U obzir će biti uzeti samo stvarni, postojeći postovi, izbrisani postovi neće biti uzeti u obzir.',
'RESYNC_POSTCOUNTS_CONFIRM'=> 'Jesi li siguran/na da želiš resinkronizirati broj postova?',
'RESYNC_POST_MARKING'=> 'Resinkroniziraj potočkane teme',
'RESYNC_POST_MARKING_CONFIRM'=> 'Jesi li siguran/na da želiš resinkronizirati potočkane teme?',
'RESYNC_POST_MARKING_EXPLAIN'=> 'Sve će teme prvo biti odoznačene da bi potom označenima (p)ostale samo one za koje je utvrđena aktivnost u posljednjih šest mjeseci.',
'RESYNC_STATS'=> 'Resinkroniziraj statistiku',
'RESYNC_STATS_CONFIRM'=> 'Jesi li siguran/na da želiš resinkronizirati statistiku?',
'RESYNC_STATS_EXPLAIN'=> 'Ponovo izračunava ukupan broj korisnika/ca, datoteka, tema i postova.',
'RUN'=> 'Pokreni',

'STATISTIC'=> 'Statistika',
'STATISTIC_RESYNC_OPTIONS'=> 'Resinkronizacija i(li) resetiranje statistike',

'TOPICS_PER_DAY'=> 'Tema dnevno',

'UPLOAD_DIR_SIZE'=> 'Veličina postanih privitaka',
'USERS_PER_DAY'=> 'Korisnika/ca dnevno',

'VALUE'=> 'Vrijednost',
'VIEW_ADMIN_LOG'=> 'Logovi administratora/ica',
'VIEW_INACTIVE_USERS'=> 'Neaktivni/e korisnici/e',

'WELCOME_PHPBB'=> 'Dobro došao/la na phpBB',
));

// Inactive Users
$lang = array_merge($lang, array(
'INACTIVE_DATE'=> 'Datum neaktivnosti',
'INACTIVE_REASON'=> 'Razlog',
'INACTIVE_REASON_MANUAL'=> 'Korisnički račun je deaktivirao/la administrator/ica',
'INACTIVE_REASON_PROFILE'=> 'Promijenjeni su detalji u korisničkom profilu',
'INACTIVE_REASON_REGISTER'=> 'Novo registriran korisnički račun',
'INACTIVE_REASON_REMIND'=> 'Prinudna reaktivacija korisničkog računa',
'INACTIVE_REASON_UNKNOWN'=> 'Nepoznat razlog',
'INACTIVE_USERS'=> 'Neaktivni/e korisnici/e',
'INACTIVE_USERS_EXPLAIN'=> 'Ovo je lista registriranih korisnika/ca čiji su korisnički računi neaktivni.<br />Korisničke račune možeš aktivirati odnosno izbrisati ili podsjetiti korisnike/ce [e-mailom] da su im korisnički računi neaktivni te ih pozvati da ih aktiviraju.',
'INACTIVE_USERS_EXPLAIN_INDEX'=> 'Dolje je izlistano zadnjih deset registriranih korisnika/ca čiji su korisnički računi neaktivni.<br />Kompletnu listu neaktivnih korisnika/ca možeš vidjeti klikneš li na donji link.',

'NO_INACTIVE_USERS'=> 'Nema neaktivnih korisnika/ca.',

'SORT_INACTIVE'=> 'Datum neaktivnosti',
'SORT_LAST_VISIT'=> 'Zadnji posjet',
'SORT_REASON'=> 'Razlog',
'SORT_REG_DATE'=> 'Datum registracije',

'USER_IS_INACTIVE'=> 'Korisnik/ca je neaktivan/na',
));

// Log Entries
$lang = array_merge($lang, array(
'LOG_ACL_ADD_USER_GLOBAL_U_'=> '<strong>Dodana ili uređena korisnička dopuštenja korisnika/ca</strong><br />» %s',
'LOG_ACL_ADD_GROUP_GLOBAL_U_'=> '<strong>Dodana ili uređena grupna dopuštenja korisnika/ca</strong><br />» %s',
'LOG_ACL_ADD_USER_GLOBAL_M_'=> '<strong>Dodana ili uređena korisnička dopuštenja globalnih moderatora/ica</strong><br />» %s',
'LOG_ACL_ADD_GROUP_GLOBAL_M_'=> '<strong>Dodana ili uređena grupna dopuštenja globalnih moderatora/ica</strong><br />» %s',
'LOG_ACL_ADD_USER_GLOBAL_A_'=> '<strong>Dodana ili uređena korisnička dopuštenja administratora/ica</strong><br />» %s',
'LOG_ACL_ADD_GROUP_GLOBAL_A_'=> '<strong>Dodana ili uređena grupna dopuštenja administratora/ica</strong><br />» %s',
'LOG_ACL_ADD_ADMIN_GLOBAL_A_'=> '<strong>Dodani/e ili uređeni/e administratori/ce</strong><br />» %s',
'LOG_ACL_ADD_MOD_GLOBAL_M_'=> '<strong>Dodani/e ili uređeni/e globalni/e moderatori/ce</strong><br />» %s',
'LOG_ACL_ADD_USER_LOCAL_F_'=> '<strong>Dodan ili uređen korisnički forumski pristup</strong> od %1$s<br />» %2$s',
'LOG_ACL_ADD_USER_LOCAL_M_'=> '<strong>Dodan ili uređen korisnički forumski moderatorski pristup</strong> od %1$s<br />» %2$s',
'LOG_ACL_ADD_GROUP_LOCAL_F_'=> '<strong>Dodan ili uređen grupni forumski pristup</strong> od %1$s<br />» %2$s',
'LOG_ACL_ADD_GROUP_LOCAL_M_'=> '<strong>Dodan ili uređen grupni forumski moderatorski pristup</strong> od %1$s<br />» %2$s',
'LOG_ACL_ADD_MOD_LOCAL_M_'=> '<strong>Dodani/e ili uređeni/e moderatori/ce</strong> od %1$s<br />» %2$s',
'LOG_ACL_ADD_FORUM_LOCAL_F_'=> '<strong>Dodana ili uređena dopuštenja foruma</strong> od %1$s<br />» %2$s',
'LOG_ACL_DEL_ADMIN_GLOBAL_A_'=> '<strong>Izbrisani/e administratori/ce</strong><br />» %s',
'LOG_ACL_DEL_MOD_GLOBAL_M_'=> '<strong>Izbrisani/e globalni/e moderatori/ce</strong><br />» %s',
'LOG_ACL_DEL_MOD_LOCAL_M_'=> '<strong>Izbrisani/e moderatori/ce</strong> od %1$s<br />» %2$s',
'LOG_ACL_DEL_FORUM_LOCAL_F_'=> '<strong>Izbrisana korisnička/grupna forumska dopuštenja</strong> od %1$s<br />» %2$s',
'LOG_ACL_TRANSFER_PERMISSIONS'=> '<strong>Dopuštenja transferirana od</strong><br />» %s',
'LOG_ACL_RESTORE_PERMISSIONS'=> '<strong>Vraćena vlastita dopuštenja nakon korištenja dopuštenja od</strong><br />» %s',
'LOG_ADMIN_AUTH_FAIL'=> '<strong>Neuspio pokušaj administratorskog prijavljivanja</strong>',
'LOG_ADMIN_AUTH_SUCCESS'=> '<strong>Uspjelo administratorsko prijavljivanje</strong>',
'LOG_ATTACHMENTS_DELETED'	=> '<strong>Izbrisani privitci korisnika/ce</strong><br />» %s',
'LOG_ATTACH_EXT_ADD'=> '<strong>Dodana ili uređena ekstenzija privit(a)ka</strong><br />» %s',
'LOG_ATTACH_EXT_DEL'=> '<strong>Izbrisana ekstenzija privit(a)ka</strong><br />» %s',
'LOG_ATTACH_EXT_UPDATE'=> '<strong>Ažurirana ekstenzija privit(a)ka</strong><br />» %s',
'LOG_ATTACH_EXTGROUP_ADD'=> '<strong>Dodana grupa ekstenzija</strong><br />» %s',
'LOG_ATTACH_EXTGROUP_EDIT'=> '<strong>Uređena grupa ekstenzija</strong><br />» %s',
'LOG_ATTACH_EXTGROUP_DEL'=> '<strong>Izbrisana grupa ekstenzija</strong><br />» %s',
'LOG_ATTACH_FILEUPLOAD'=> '<strong>Bezpostni privitak uploadan postu</strong><br />» ID %1$d - %2$s',
'LOG_ATTACH_ORPHAN_DEL'=> '<strong>Bezpostni privitak izbrisan</strong><br />» %s',
'LOG_BAN_EXCLUDE_USER'=> '<strong>Izuzet/a korisnik/ca od isključenja</strong> iz razloga “<em>%1$s</em>”<br />» %2$s',
'LOG_BAN_EXCLUDE_IP'=> '<strong>Izuzet/a IP adresa od isključenja</strong> iz razloga “<em>%1$s</em>”<br />» %2$s',
'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Izuzet/a e-mail adresa od isključenja</strong> iz razloga “<em>%1$s</em>”<br />» %2$s',
'LOG_BAN_USER'=> '<strong>Isključen/a korisnik/ca</strong> iz razloga “<em>%1$s</em>”<br />» %2$s',
'LOG_BAN_IP'=> '<strong>Isključena IP adresa</strong> iz razloga “<em>%1$s</em>”<br />» %2$s',
'LOG_BAN_EMAIL'=> '<strong>Isključena e-mail adresa</strong> iz razloga “<em>%1$s</em>”<br />» %2$s',
'LOG_UNBAN_USER'=> '<strong>Odisključen/a korisnik/ca</strong><br />» %s',
'LOG_UNBAN_IP'=> '<strong>Odisključena IP adresa</strong><br />» %s',
'LOG_UNBAN_EMAIL'=> '<strong>Odisključena e-mail adresa</strong><br />» %s',
'LOG_BBCODE_ADD'=> '<strong>Dodan novi BBKod</strong><br />» %s',
'LOG_BBCODE_EDIT'=> '<strong>Uređen BBKod</strong><br />» %s',
'LOG_BBCODE_DELETE'=> '<strong>Izbrisan BBKod</strong><br />» %s',
'LOG_BOT_ADDED'=> '<strong>Dodan novi robot</strong><br />» %s',
'LOG_BOT_DELETE'=> '<strong>Izbrisan robot</strong><br />» %s',
'LOG_BOT_UPDATED'=> '<strong>Ažuriran robot</strong><br />» %s',
'LOG_CLEAR_ADMIN'=> '<strong>Izbrisani logovi administratora/ica</strong>',
'LOG_CLEAR_CRITICAL'=> '<strong>Izbrisani logovi grešaka</strong>',
'LOG_CLEAR_MOD'=> '<strong>Izbrisani logovi moderatora/ica</strong>',
'LOG_CLEAR_USER'=> '<strong>Izbrisan log korisnika/ce</strong><br />» %s',
'LOG_CLEAR_USERS'=> '<strong>Izbrisani logovi korisnika/ca</strong>',
'LOG_CONFIG_ATTACH'=> '<strong>Promijenjene postavke privitaka</strong>',
'LOG_CONFIG_AUTH'=> '<strong>Promijenjene postavke provjere autentičnosti</strong>',
'LOG_CONFIG_AVATAR'=> '<strong>Promijenjene postavke avatara</strong>',
'LOG_CONFIG_COOKIE'=> '<strong>Promijenjene postavke kolačića</strong>',
'LOG_CONFIG_EMAIL'=> '<strong>Promijenjene e-mail postavke</strong>',
'LOG_CONFIG_FEATURES'=> '<strong>Promijenjene mogućnosti foruma</strong>',
'LOG_CONFIG_LOAD'=> '<strong>Promijenjene ostale postavke</strong>',
'LOG_CONFIG_MESSAGE'=> '<strong>Promijenjene postavke privatnih poruka</strong>',
'LOG_CONFIG_POST'=> '<strong>Promijenjene postavke postanja</strong>',
'LOG_CONFIG_REGISTRATION'=> '<strong>Promijenjene postavke registracije</strong>',
'LOG_CONFIG_SEARCH'=> '<strong>Promijenjene postavke pretraživanja</strong>',
'LOG_CONFIG_SECURITY'=> '<strong>Promijenjene sigurnosne postavke</strong>',
'LOG_CONFIG_SERVER'=> '<strong>Promijenjene postavke servera</strong>',
'LOG_CONFIG_SETTINGS'=> '<strong>Promijenjene postavke foruma</strong>',
'LOG_CONFIG_SIGNATURE'=> '<strong>Promijenjene postavke potpisa</strong>',
'LOG_CONFIG_VISUAL'=> '<strong>Promijenjene postavke vizualne potvrde</strong>',
'LOG_APPROVE_TOPIC'=> '<strong>Odobrena tema</strong><br />» %s',
'LOG_BUMP_TOPIC'=> '<strong>Korisnik/ca bumpirao temu</strong><br />» %s',
'LOG_DELETE_POST'=> '<strong>Izbrisan post</strong><br />» %s',
'LOG_DELETE_TOPIC'=> '<strong>Izbrisana tema</strong><br />» %s',
'LOG_FORK'=> '<strong>Kopirana tema</strong><br />» from %s',
'LOG_LOCK'=> '<strong>Zaključana tema</strong><br />» %s',
'LOG_LOCK_POST'=> '<strong>Zaključan post</strong><br />» %s',
'LOG_MERGE'=> '<strong>Spojeni postovi</strong> into topic<br />» %s',
'LOG_MOVE'=> '<strong>Premještena tema</strong><br />» od %s',
'LOG_POST_APPROVED'=> '<strong>Odobren post</strong><br />» %s',
'LOG_POST_DISAPPROVED'=> '<strong>Neodobren post “%1$s” iz sljedećeg razloga</strong><br />» %2$s',
'LOG_POST_EDITED'=> '<strong>Uređen post “%1$s” napisao/la</strong><br />» %2$s',
'LOG_REPORT_CLOSED'=> '<strong>Zaključena prijava</strong><br />» %s',
'LOG_REPORT_DELETED'=> '<strong>Izbrisana prijava</strong><br />» %s',
'LOG_SPLIT_DESTINATION'=> '<strong>Premješteni podijeljeni postovi</strong><br />» u %s',
'LOG_SPLIT_SOURCE'=> '<strong>Podijeljeni postovi</strong><br />» od %s',
'LOG_TOPIC_DELETED'=> '<strong>Izbrisana tema</strong><br />» %s',
'LOG_TOPIC_APPROVED'=> '<strong>Odobrena tema</strong><br />» %s',
'LOG_TOPIC_DISAPPROVED'=> '<strong>Neodobrena tema “%1$s” iz sljedećeg razloga</strong><br />%2$s',
'LOG_TOPIC_RESYNC'=> '<strong>Resinkronizirani brojači tema</strong><br />» %s',
'LOG_TOPIC_TYPE_CHANGED'=> '<strong>Promijenjen tip teme</strong><br />» %s',
'LOG_UNLOCK'=> '<strong>Otključana tema</strong><br />» %s',
'LOG_UNLOCK_POST'=> '<strong>Otključan post</strong><br />» %s',
'LOG_DISALLOW_ADD'=> '<strong>Dodano nedopušteno korisničko ime</strong><br />» %s',
'LOG_DISALLOW_DELETE'=> '<strong>Izbrisano nedopušteno korisničko ime</strong>',
'LOG_DB_BACKUP'=> '<strong>Backup baze podataka</strong>',
'LOG_DB_DELETE'=> '<strong>Izbrisan backup baze podataka</strong>',
'LOG_DB_RESTORE'=> '<strong>Povraćen backup baze podataka</strong>',
'LOG_DOWNLOAD_EXCLUDE_IP'=> '<strong>Izuzeta IP adresa/ime hosta s liste preuzimanja</strong><br />» %s',
'LOG_DOWNLOAD_IP'=> '<strong>Dodana IP adresa/ime hosta na listu preuzimanja</strong><br />» %s',
'LOG_DOWNLOAD_REMOVE_IP'=> '<strong>Izbrisana IP adresa/ime hosta s liste preuzimanja</strong><br />» %s',
'LOG_ERROR_JABBER'=> '<strong>Jabber greška</strong><br />» %s',
'LOG_ERROR_EMAIL'=> '<strong>E-mail greška</strong><br />» %s',
'LOG_FORUM_ADD'=> '<strong>Kreiran novi forum</strong><br />» %s',
'LOG_FORUM_DEL_FORUM'=> '<strong>Izbrisan forum</strong><br />» %s',
'LOG_FORUM_DEL_FORUMS'=> '<strong>Izbrisan forum i njegovi podforumi</strong><br />» %s',
'LOG_FORUM_DEL_MOVE_FORUMS'=> '<strong>Izbrisan forum i premješteni podforumi</strong> u %1$s<br />» %2$s',
'LOG_FORUM_DEL_MOVE_POSTS'=> '<strong>Izbrisan forum i premješteni postovi</strong> u %1$s<br />» %2$s',
'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'=> '<strong>Izbrisan forum i njegovi podforumi, poruke premještene</strong> u %1$s<br />» %2$s',
'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'=> '<strong>Izbrisan forum, premješteni postovi</strong> u %1$s <strong>i podforumi</strong> u %2$s<br />» %3$s',
'LOG_FORUM_DEL_POSTS'=> '<strong>Izbrisan forum i njegove poruke</strong><br />» %s',
'LOG_FORUM_DEL_POSTS_FORUMS'=> '<strong>Izbrisan forum, njegove poruke i podforumi</strong><br />» %s',
'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'=> '<strong>Izbrisan forum i njegove poruke, podforumi premješteni</strong> u %1$s<br />» %2$s',
'LOG_FORUM_EDIT'=> '<strong>Uređeni detalji foruma</strong><br />» %s',
'LOG_FORUM_MOVE_DOWN'=> '<strong>Premješten forum</strong> %1$s <strong>dolje</strong> %2$s',
'LOG_FORUM_MOVE_UP'=> '<strong>Premješten forum</strong> %1$s <strong>gore</strong> %2$s',
'LOG_FORUM_SYNC'=> '<strong>Resinkroniziran forum</strong><br />» %s',
'LOG_GROUP_CREATED'=> '<strong>Kreirana nova korisnička grupa</strong><br />» %s',
'LOG_GROUP_DEFAULTS'=> '<strong>Grupa “%1$s” postavljena kao zadana za korisnike/ce</strong><br />» %2$s',
'LOG_GROUP_DELETE'=> '<strong>Korisnička grupa izbrisana</strong><br />» %s',
'LOG_GROUP_DEMOTED'=> '<strong>Vođe degradirani/e u korisničkoj grupi</strong> %1$s<br />» %2$s',
'LOG_GROUP_PROMOTED'=> '<strong>Članovi/ce promovirani/e u vođe korisničke grupe</strong> %1$s<br />» %2$s',
'LOG_GROUP_REMOVE'=> '<strong>Članovi/ce isključeni/e iz grupe</strong> %1$s<br />» %2$s',
'LOG_GROUP_UPDATED'=> '<strong>Uređeni detalji korisničke grupe</strong><br />» %s',
'LOG_MODS_ADDED'=> '<strong>Dodani/e novi/e vođe korisničke grupe</strong> %1$s<br />» %2$s',
'LOG_USERS_APPROVED'=> '<strong>Korisnicima/ama odobreno pristupanje korisničkoj grupi</strong> %1$s<br />» %2$s',
'LOG_USERS_ADDED'=> '<strong>Korisničkoj grupi dodani/e novi/e članovi/ce</strong> %1$s<br />» %2$s',
'LOG_IMAGESET_ADD_DB'=> '<strong>U bazu podataka dodan novi set slika</strong><br />» %s',
'LOG_IMAGESET_ADD_FS'=> '<strong>U sistem datoteka dodan novi set slika</strong><br />» %s',
'LOG_IMAGESET_DELETE'=> '<strong>Izbrisan set slika</strong><br />» %s',
'LOG_IMAGESET_EDIT_DETAILS'=> '<strong>Uređeni detalji seta slika</strong><br />» %s',
'LOG_IMAGESET_EDIT'=> '<strong>Uređen set slika</strong><br />» %s',
'LOG_IMAGESET_EXPORT'=> '<strong>Eksportiran set slika</strong><br />» %s',
'LOG_IMAGESET_LANG_MISSING'=> '<strong>Setovima slika nedostaje “%2$s” lokalizacija</strong><br />» %1$s',
'LOG_IMAGESET_LANG_REFRESHED'=> '<strong>Osvježena “%2$s” lokalizacija seta slika</strong><br />» %1$s',
'LOG_IMAGESET_REFRESHED'=> '<strong>Osvježen set slika</strong><br />» %s',
'LOG_INACTIVE_ACTIVATE'=> '<strong>Aktivirani/e neaktivni/e korisnici/e</strong><br />» %s',
'LOG_INACTIVE_DELETE'=> '<strong>Izbrisani/e neaktivni/e korisnici/e</strong><br />» %s',
'LOG_INACTIVE_REMIND'=> '<strong>Poslan e-mailom podsjetnik neaktivnim korisnicima/ama</strong><br />» %s',
'LOG_INSTALL_CONVERTED'=> '<strong>Konvertirano iz %1$s u phpBB %2$s</strong>',
'LOG_INSTALL_INSTALLED'=> '<strong>Instaliran phpBB %s</strong>',
'LOG_IP_BROWSER_FORWARDED_CHECK'=> '<strong>Provjera sesije IP adrese/preglednika/X_FORWARDED_FOR neuspjela</strong><br />»IP adresa korisnika/ce “<em>%1$s</em>” provjeren u odnosu na sesiju IP adrese “<em>%2$s</em>”, niz podataka preglednika korisnika “<em>%3$s</em>” provjeren u odnosu na sesiju niza podataka preglednika “<em>%4$s</em>” i korisnik/ca X_FORWARDED_FOR niz podataka “<em>%5$s</em>” provjeren u odnosu na sesiju X_FORWARDED_FOR niza podataka “<em>%6$s</em>”.',
'LOG_JAB_CHANGED'=> '<strong>Jabber korisnički račun promijenjen</strong>',
'LOG_JAB_PASSCHG'=> '<strong>Jabber zaporka promijenjena</strong>',
'LOG_JAB_REGISTER'=> '<strong>Jabber korisnički račun registriran</strong>',
'LOG_JAB_SETTINGS_CHANGED'=> '<strong>Jabber postavke promijenjene</strong>',
'LOG_LANGUAGE_PACK_DELETED'=> '<strong>Izbrisan jezični paket</strong><br />» %s',
'LOG_LANGUAGE_PACK_INSTALLED'=> '<strong>Instaliran jezični paket</strong><br />» %s',
'LOG_LANGUAGE_PACK_UPDATED'=> '<strong>Ažurirani detalji jezičnog paketa</strong><br />» %s',
'LOG_LANGUAGE_FILE_REPLACED'=> '<strong>Zamijenjena jezična datoteka</strong><br />» %s',
'LOG_LANGUAGE_FILE_SUBMITTED'=> '<strong>Poslana jezična datoteka i smještena u mapu za pohranu</strong><br />» %s',
'LOG_MASS_EMAIL'=> '<strong>Poslan skupni e-mail</strong><br />» %s',
'LOG_MCP_CHANGE_POSTER'=> '<strong>Promijenjen/a poster/ica u temi “%1$s”</strong><br />» od %2$s u %3$s',
'LOG_MODULE_DISABLE'=> '<strong>Module omogućen</strong><br />» %s',
'LOG_MODULE_ENABLE'=> '<strong>Module onemogućen</strong><br />» %s',
'LOG_MODULE_MOVE_DOWN'=> '<strong>Module premješten dolje</strong><br />» %1$s ispod %2$s',
'LOG_MODULE_MOVE_UP'=> '<strong>Module premješten gore</strong><br />» %1$s iznad %2$s',
'LOG_MODULE_REMOVED'=> '<strong>Module izbrisan</strong><br />» %s',
'LOG_MODULE_ADD'=> '<strong>Module dodan</strong><br />» %s',
'LOG_MODULE_EDIT'=> '<strong>Module uređen</strong><br />» %s',
'LOG_A_ROLE_ADD'=> '<strong>Administratorski set dopuštenja dodan</strong><br />» %s',
'LOG_A_ROLE_EDIT'=> '<strong>Administratorski set dopuštenja uređen</strong><br />» %s',
'LOG_A_ROLE_REMOVED'=> '<strong>Administratorski set dopuštenja izbrisan</strong><br />» %s',
'LOG_F_ROLE_ADD'=> '<strong>Forumski set dopuštenja dodan</strong><br />» %s',
'LOG_F_ROLE_EDIT'=> '<strong>Forumski set dopuštenja uređen</strong><br />» %s',
'LOG_F_ROLE_REMOVED'=> '<strong>Forumski set dopuštenja izbrisan</strong><br />» %s',
'LOG_M_ROLE_ADD'=> '<strong>Moderatorski set dopuštenja dodan</strong><br />» %s',
'LOG_M_ROLE_EDIT'=> '<strong>Moderatorski set dopuštenja uređen</strong><br />» %s',
'LOG_M_ROLE_REMOVED'=> '<strong>Moderatorski set dopuštenja izbrisan</strong><br />» %s',
'LOG_U_ROLE_ADD'=> '<strong>Korisnički set dopuštenja dodan</strong><br />» %s',
'LOG_U_ROLE_EDIT'=> '<strong>Korisnički set dopuštenja uređen</strong><br />» %s',
'LOG_U_ROLE_REMOVED'=> '<strong>Korisnički set dopuštenja izbrisan</strong><br />» %s',
'LOG_PROFILE_FIELD_ACTIVATE'=> '<strong>Polje profila aktivirano</strong><br />» %s',
'LOG_PROFILE_FIELD_CREATE'=> '<strong>Polje profila dodano</strong><br />» %s',
'LOG_PROFILE_FIELD_DEACTIVATE'=> '<strong>Polje profila deaktivirano</strong><br />» %s',
'LOG_PROFILE_FIELD_EDIT'=> '<strong>Polje profila promijenjeno</strong><br />» %s',
'LOG_PROFILE_FIELD_REMOVED'=> '<strong>Polje profila izbrisano</strong><br />» %s',
'LOG_PRUNE'=> '<strong>Izbrisani forumi</strong><br />» %s',
'LOG_AUTO_PRUNE'=> '<strong>Autoizbrisani forumi</strong><br />» %s',
'LOG_PRUNE_USER_DEAC'=> '<strong>Korisnici/e deaktivirani/e</strong><br />» %s',
'LOG_PRUNE_USER_DEL_DEL'=> '<strong>Korisnici/e i postovi izbrisani</strong><br />» %s',
'LOG_PRUNE_USER_DEL_ANON'=> '<strong>Korisnici/e izbrisani, postovi zadržani</strong><br />» %s',
'LOG_PURGE_CACHE'=> '<strong>Cache ispražnjen</strong>',
'LOG_RANK_ADDED'=> '<strong>Dodan novi status</strong><br />» %s',
'LOG_RANK_REMOVED'=> '<strong>Izbrisan status</strong><br />» %s',
'LOG_RANK_UPDATED'=> '<strong>Ažuriran status</strong><br />» %s',
'LOG_REASON_ADDED'=> '<strong>Dodana prijava/odbijenica</strong><br />» %s',
'LOG_REASON_REMOVED'=> '<strong>Izbrisana prijava/odbijenica</strong><br />» %s',
'LOG_REASON_UPDATED'=> '<strong>Ažurirana prijava/odbijenica</strong><br />» %s',
'LOG_RESET_DATE'=> '<strong>Resetiran datum pokretanja foruma</strong>',
'LOG_RESET_ONLINE'=> '<strong>Resetiran brojač najviše korisnika/ca istovremeno online</strong>',
'LOG_RESYNC_POSTCOUNTS'=> '<strong>Resinkroniziran broj postova</strong>',
'LOG_RESYNC_POST_MARKING'=> '<strong>Resinkronizirane potočkane teme</strong>',
'LOG_RESYNC_STATS'=> '<strong>Resinkronizirana statistika</strong>',
'LOG_SEARCH_INDEX_CREATED'=> '<strong>Kreiran indeks pretraživanja za</strong><br />» %s',
'LOG_SEARCH_INDEX_REMOVED'=> '<strong>Izbrisan indeks pretraživanja za</strong><br />» %s',
'LOG_STYLE_ADD'=> '<strong>Dodan novi stil</strong><br />» %s',
'LOG_STYLE_DELETE'=> '<strong>Izbrisan stil</strong><br />» %s',
'LOG_STYLE_EDIT_DETAILS'=> '<strong>Uređen stil</strong><br />» %s',
'LOG_STYLE_EXPORT'=> '<strong>Eksportiran stil</strong><br />» %s',
'LOG_TEMPLATE_ADD_DB'=> '<strong>Dodan novi set predloška u bazu podataka</strong><br />» %s',
'LOG_TEMPLATE_ADD_FS'=> '<strong>Dodan novi set predloška na sistem datoteka</strong><br />» %s',
'LOG_TEMPLATE_CACHE_CLEARED'=> '<strong>Izbrisane cacheirane verzije datoteka predloška <em>%1$s</em></strong><br />» %2$s',
'LOG_TEMPLATE_DELETE'=> '<strong>Izbrisan set predloška</strong><br />» %s',
'LOG_TEMPLATE_EDIT'=> '<strong>Uređen set predloška <em>%1$s</em></strong><br />» %2$s',
'LOG_TEMPLATE_EDIT_DETAILS'=> '<strong>Uređeni detalji predloška</strong><br />» %s',
'LOG_TEMPLATE_EXPORT'=> '<strong>Eksportiran set predloška</strong><br />» %s',
'LOG_TEMPLATE_REFRESHED'=> '<strong>Osvježen set predloška</strong><br />» %s',
'LOG_THEME_ADD_DB'=> '<strong>Dodana nova tema u bazu podataka</strong><br />» %s',
'LOG_THEME_ADD_FS'=> '<strong>Dodana nova tema sistem datoteka</strong><br />» %s',
'LOG_THEME_DELETE'=> '<strong>Izbrisana tema</strong><br />» %s',
'LOG_THEME_EDIT_DETAILS'=> '<strong>Uređeni detalji teme</strong><br />» %s',
'LOG_THEME_EDIT'=> '<strong>Uređena tema <em>%1$s</em></strong>',
'LOG_THEME_EDIT_FILE'=> '<strong>Uređena tema <em>%1$s</em></strong><br />» Promijenjena datoteka <em>%2$s</em>',
'LOG_THEME_EXPORT'=> '<strong>Eksportirana tema</strong><br />» %s',
'LOG_THEME_REFRESHED'=> '<strong>Osvježena tema</strong><br />» %s',
'LOG_UPDATE_DATABASE'=> '<strong>Baza ažurirana iz verzije %1$s u verziju %2$s</strong>',
'LOG_UPDATE_PHPBB'=> '<strong>Ažuriran phpBB iz verzije %1$s u verziju %2$s</strong>',
'LOG_USER_ACTIVE'=> '<strong>Aktiviran/a korisnik/ca</strong><br />» %s',
'LOG_USER_BAN_USER'=> '<strong>Korisnik/ca isključena putem upravljanja korisnicima/ama</strong> iz razloga “<em>%1$s</em>”<br />» %2$s',
'LOG_USER_BAN_IP'=> '<strong>IP adresa isključena putem upravljanja korisnicima/ama</strong> iz razloga “<em>%1$s</em>”<br />» %2$s',
'LOG_USER_BAN_EMAIL'=> '<strong>E-mail adresa isključena putem upravljanja korisnicima/ama</strong> iz razloga “<em>%1$s</em>”<br />» %2$s',
'LOG_USER_DELETED'=> '<strong>Izbrisan/a korisnik/ca</strong><br />» %s',
'LOG_USER_DEL_ATTACH'=> '<strong>Izbrisani svi privitci korisnika/ce</strong><br />» %s',
'LOG_USER_DEL_AVATAR'=> '<strong>Izbrisan avatar korisnika/ce</strong><br />» %s',
'LOG_USER_DEL_POSTS'=> '<strong>Izbrisani svi postovi korisnika/ce</strong><br />» %s',
'LOG_USER_DEL_SIG'=> '<strong>Izbrisan potpis korisnika/ce</strong><br />» %s',
'LOG_USER_INACTIVE'=> '<strong>Deaktiviran/a korisnik/ca</strong><br />» %s',
'LOG_USER_MOVE_POSTS'=> '<strong>Premješteni postovi korisnika/ce</strong><br />» postovi od “%1$s” u forum “%2$s”',
'LOG_USER_NEW_PASSWORD'=> '<strong>Promijenjena zaporka korisnika/ce</strong><br />» %s',
'LOG_USER_REACTIVATE'=> '<strong>Korisnik/ca prinuđen/a na reaktivaciju korisničkog računa</strong><br />» %s',
'LOG_USER_UPDATE_EMAIL'=> '<strong>Korisnik/ca “%1$s” promijenio/la e-mail adresu</strong><br />» iz “%2$s” u “%3$s”',
'LOG_USER_UPDATE_NAME'=> '<strong>Promijenjeno korisničko ime</strong><br />» iz “%1$s” u “%2$s”',
'LOG_USER_USER_UPDATE'=> '<strong>Ažurirani detalji korisnika/ce</strong><br />» %s',
'LOG_USER_ACTIVE_USER'=> '<strong>Korisnički račun aktiviran</strong>',
'LOG_USER_DEL_AVATAR_USER'=> '<strong>Izbrisan avatar korisnika/ce</strong>',
'LOG_USER_DEL_SIG_USER'=> '<strong>Izbrisan potpis korisnika/ce</strong>',
'LOG_USER_FEEDBACK'=> '<strong>Dodan korisnički povratan odgovor</strong><br />» %s',
'LOG_USER_GENERAL'=> '<strong>Dodan unos:</strong><br />» %s',
'LOG_USER_INACTIVE_USER'=> '<strong>Korisnički račun deaktiviran</strong>',
'LOG_USER_LOCK'=> '<strong>Korisnik/ca zaključao/la vlastitu temu</strong><br />» %s',
'LOG_USER_MOVE_POSTS_USER'=> '<strong>Premješteni svi postovi u forum</strong>» %s',
'LOG_USER_REACTIVATE_USER'=> '<strong>Korisnik/ca prinuđen/a na reaktivaciju korisničkog računa</strong>',
'LOG_USER_UNLOCK'=> '<strong>Korisnik/ca otključao/la vlastitu temu</strong><br />» %s',
'LOG_USER_WARNING'=> '<strong>Korisniku/ci dano upozorenje</strong><br />» %s',
'LOG_USER_WARNING_BODY'=> '<strong>Sljedeće upozorenje je dano korisniku/ci</strong><br />» %s',
'LOG_USER_GROUP_CHANGE'=> '<strong>Korisnik/ca promijenio/la zadanu grupu</strong><br />» %s',
'LOG_USER_GROUP_DEMOTE'=> '<strong>Korisnik/ca više nije vođa korisničke grupe</strong><br />» %s',
'LOG_USER_GROUP_JOIN'=> '<strong>Korisnik/ca je pristupio/la korisničkoj grupi</strong><br />» %s',
'LOG_USER_GROUP_JOIN_PENDING'=> '<strong>Korisnik/ca je pristupio/la korisničkoj grupi, čeka odobrenje</strong><br />» %s',
'LOG_USER_GROUP_RESIGN'=> '<strong>Korisnik/ca je istupio/la iz korisničke grupe</strong><br />» %s',
'LOG_WORD_ADD'=> '<strong>Dodana riječ na popis cenzuriranih riječi</strong><br />» %s',
'LOG_WORD_DELETE'=> '<strong>Izbrisana riječ s popisa cenzuriranih riječi</strong><br />» %s',
'LOG_WORD_EDIT'=> '<strong>Uređena riječ s popisa cenzuriranih riječi</strong><br />» %s',
));
?>