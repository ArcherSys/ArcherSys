<?php
/** 
*
* acp common [Danish]
*
* @package language
* @version $Id: common.php,v 1.119 2007/08/13 12:14:06 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Translators: Olympus DK Team, working at http://www.phpBB3.dk and http://area51.phpBB3.dk:
*
*		John Hjorth < john-hjorth@john-hjorth.dk > (John Hjorth) http://www.phpBBFM.dk
*		jask < jan@skovsgaard.net > (Jan Skovsgaard) http://skovsgaard.net
*		Jesper Møller < jgom@privat.dk > (Jesper G. O. Møller) http://www.jart.dk/jgom/index.html
*
* Contributors :
*
*		AlleyKat < AlleyKat@phpbb2.dk > (Finn Sørensen) http://www.phpbb2.dk
*		Dr.Diesel < dr.diesel@dream-cathers.dk > (Jes Nielsen) http://www.dream-cathers.dk
*		Jan Christensen < tamrotten@gmail.com > (Jan Christensen) http://janogwickys.dk/phpBB2/index.php
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
	'ACP_ADMINISTRATORS'		=> 'Administratorer',
	'ACP_ADMIN_LOGS'			=> 'Administrator log',
	'ACP_ADMIN_ROLES'			=> 'Administrator rolle',
	'ACP_ATTACHMENTS'			=> 'Vedhæftede filer',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Vedhæftede filer',
	'ACP_AUTH_SETTINGS'			=> 'Autorisation',
	'ACP_AUTOMATION'			=> 'Udføres automatisk',
	'ACP_AVATAR_SETTINGS'		=> 'Avatars',

	'ACP_BACKUP'				=> 'Backup',
	'ACP_BAN'					=> 'Udelukkelse',
	'ACP_BAN_EMAILS'			=> 'Udeluk emailadresser',
	'ACP_BAN_IPS'				=> 'Udeluk IP-adresser',
	'ACP_BAN_USERNAMES'			=> 'Udeluk brugere',
	'ACP_BBCODES'				=> 'BBkoder',
	'ACP_BOARD_CONFIGURATION'	=> 'Board konfiguration',
	'ACP_BOARD_FEATURES'		=> 'Board finesser',
	'ACP_BOARD_MANAGEMENT'		=> 'Board administration',
	'ACP_BOARD_SETTINGS'		=> 'Board grundlæggende',
	'ACP_BOTS'					=> 'Administrér botter',
	
	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Database',
	'ACP_CAT_DOT_MODS'			=> '.MODs',
	'ACP_CAT_FORUMS'			=> 'Fora',
	'ACP_CAT_GENERAL'			=> 'Generel',
	'ACP_CAT_MAINTENANCE'		=> 'Vedligehold',
	'ACP_CAT_PERMISSIONS'		=> 'Tilladelser',
	'ACP_CAT_POSTING'			=> 'Meddelelser',
	'ACP_CAT_STYLES'			=> 'Typografi',
	'ACP_CAT_SYSTEM'			=> 'System', 
	'ACP_CAT_USERGROUP'			=> 'Brugere & Grupper',
	'ACP_CAT_USERS'				=> 'Brugere',
	'ACP_CLIENT_COMMUNICATION'	=> 'Trafik konfiguration',
	'ACP_COOKIE_SETTINGS'		=> 'Cookies',
	'ACP_CRITICAL_LOGS'			=> 'Kritiske fejl i log',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Tilpas profilfelter',
	
	'ACP_DATABASE'				=> 'Database administration',
	'ACP_DISALLOW'				=> 'Afvis',
	'ACP_DISALLOW_USERNAMES'	=> 'Afvis brugernavne',
	
	'ACP_EMAIL_SETTINGS'		=> 'Emails',
	'ACP_EXTENSION_GROUPS'		=> 'Administrér filtypegrupper',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Forumbaserede tilladelser',
	'ACP_FORUM_LOGS'				=> 'Forum log',
	'ACP_FORUM_MANAGEMENT'			=> 'Forum administration',
	'ACP_FORUM_MODERATORS'			=> 'Redaktører',
	'ACP_FORUM_PERMISSIONS'			=> 'Forum tilladelser',
	'ACP_FORUM_ROLES'				=> 'Forum roller',

	'ACP_GENERAL_CONFIGURATION'		=> 'Generel konfiguration',
	'ACP_GENERAL_TASKS'				=> 'Generelle opgaver',
	'ACP_GLOBAL_MODERATORS'			=> 'Globale redaktører',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Globale tilladelser',
	'ACP_GROUPS'					=> 'Grupper',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Forumtilladelser for grupper',
	'ACP_GROUPS_MANAGE'				=> 'Administrér grupper',
	'ACP_GROUPS_MANAGEMENT'			=> 'Gruppe administration',
	'ACP_GROUPS_PERMISSIONS'		=> 'Gruppetilladelser',
	
	'ACP_ICONS'					=> 'Emne ikoner',
	'ACP_ICONS_SMILIES'			=> 'Emne ikoner/smilies',
	'ACP_IMAGESETS'				=> 'Billedpakker',
	'ACP_INACTIVE_USERS'		=> 'Inaktive brugere',
	'ACP_INDEX'					=> 'ACP indeks',
	
	'ACP_JABBER_SETTINGS'		=> 'Jabber',
	
	'ACP_LANGUAGE'				=> 'Sprog administration',
	'ACP_LANGUAGE_PACKS'		=> 'Sprogpakker',
	'ACP_LOAD_SETTINGS'			=> 'Belastning',
	'ACP_LOGGING'				=> 'Logning',
	
	'ACP_MAIN'					=> 'ACP indeks',
	'ACP_MANAGE_EXTENSIONS'		=> 'Administrér filtyper',
	'ACP_MANAGE_FORUMS'			=> 'Administrér fora',
	'ACP_MANAGE_RANKS'			=> 'Administrér brugerrang',
	'ACP_MANAGE_REASONS'		=> 'Administrér afvisningsbegrundelser',
	'ACP_MANAGE_USERS'			=> 'Administrér brugere',
	'ACP_MASS_EMAIL'			=> 'Masse-email',
	'ACP_MESSAGES'				=> 'Beskeder',
	'ACP_MESSAGE_SETTINGS'		=> 'Private beskeder',
	'ACP_MODULE_MANAGEMENT'		=> 'Modul administration',
	'ACP_MOD_LOGS'				=> 'Redaktør log',
	'ACP_MOD_ROLES'				=> 'Redaktør roller',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Vildfarne vedhæftede filer',
	
	'ACP_PERMISSIONS'			=> 'Tilladelser',
	'ACP_PERMISSION_MASKS'		=> 'Tilladelsesmaske',
	'ACP_PERMISSION_ROLES'		=> 'Tilladelsesrolle',
	'ACP_PERMISSION_TRACE'		=> 'Sporing af tilladelser',
	'ACP_PHP_INFO'				=> 'PHP-indstillinger',
	'ACP_POST_SETTINGS'			=> 'Indlæg',
	'ACP_PRUNE_FORUMS'			=> 'Beskær fora',
	'ACP_PRUNE_USERS'			=> 'Beskær brugere',
	'ACP_PRUNING'				=> 'Beskæring',
	
	'ACP_QUICK_ACCESS'			=> 'Hurtig tilgang',
	
	'ACP_RANKS'					=> 'Rangorden',
	'ACP_REASONS'				=> 'Rapport/afvisnings-begrundelser',
	'ACP_REGISTER_SETTINGS'		=> 'Tilmelding',

	'ACP_RESTORE'				=> 'Gendan',

	'ACP_SEARCH'				=> 'Opsætning af søgefunktion',
	'ACP_SEARCH_INDEX'			=> 'Søgeindeks',
	'ACP_SEARCH_SETTINGS'		=> 'Søgning',

	'ACP_SECURITY_SETTINGS'		=> 'Sikkerhed',
	'ACP_SERVER_CONFIGURATION'	=> 'Server konfiguration',
	'ACP_SERVER_SETTINGS'		=> 'Gzip, stier & URL',
	'ACP_SIGNATURE_SETTINGS'	=> 'Signaturer',
	'ACP_SMILIES'				=> 'Smilies',
	'ACP_STYLE_COMPONENTS'		=> 'Typografi komponenter',
	'ACP_STYLE_MANAGEMENT'		=> 'Administration af typografi',
	'ACP_STYLES'				=> 'Typografier',
	
	'ACP_TEMPLATES'				=> 'Skabeloner',
	'ACP_THEMES'				=> 'Temaer',
	
	'ACP_UPDATE'					=> 'Opdatering',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Brugeres forum tilladelser',
	'ACP_USERS_LOGS'				=> 'Brugers log',
	'ACP_USERS_PERMISSIONS'			=> 'Bruger tilladelser',
	'ACP_USER_ATTACH'				=> 'Vedhæftede filer',
	'ACP_USER_AVATAR'				=> 'Brugeravatar',
	'ACP_USER_FEEDBACK'				=> 'Tilbagemelding',
	'ACP_USER_GROUPS'				=> 'Grupper',
	'ACP_USER_MANAGEMENT'			=> 'Bruger administration',
	'ACP_USER_OVERVIEW'				=> 'Brugerliste',
	'ACP_USER_PERM'					=> 'Bruger tilladelser',
	'ACP_USER_PREFS'				=> 'Bruger indstillinger',
	'ACP_USER_PROFILE'				=> 'Bruger profil',
	'ACP_USER_RANK'					=> 'Rangorden',
	'ACP_USER_ROLES'				=> 'Bruger roller',
	'ACP_USER_SECURITY'				=> 'Bruger sikkerhed',
	'ACP_USER_SIG'					=> 'Signatur',

	'ACP_VC_SETTINGS'					=> 'Visuel bekræftelse',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA billede prøvekig',
	'ACP_VERSION_CHECK'					=> 'Versionskontrol',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Se admin tilladelser',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Se Redaktør tilladelser',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Se forum tilladelser',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Se globale redaktør tilladelser',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Se bruger tilladelser',
	
	'ACP_WORDS'					=> 'Ordcensur', 

	'ACTION'				=> 'Handling',
	'ACTIONS'				=> 'Handlinger',
	'ACTIVATE'				=> 'Aktivér',
	'ADD'					=> 'Tilføj',
	'ADMIN'					=> 'Administration',
	'ADMIN_INDEX'			=> 'Administrator indeks',
	'ADMIN_PANEL'			=> 'Administrator kontrolpanel',

	'BACK'					=> 'Tilbage',

	'COLOUR_SWATCH'			=> 'Websikre farver',
	'CONFIG_UPDATED'		=> 'Konfigurationen opdateret',

	'DEACTIVATE'				=> 'Deaktivér',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Den indtastede sti "%s" eksisterer ikke.',
	'DIRECTORY_NOT_DIR'			=> 'Den indtastede sti "%s" er ikke en mappe.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Den indtastede sti "%s" er ikke skrivbar.',
	'DISABLE'					=> 'Slå fra',
	'DOWNLOAD'					=> 'Download',
	'DOWNLOAD_AS'				=> 'Download som',
	'DOWNLOAD_STORE'			=> 'Download eller gem fil',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Du kan downloade filen direkte eller gemme den i phpBB\'s <samp>store/</samp> mappe.',

	'EDIT'					=> 'Redigér',
	'ENABLE'				=> 'Slå til',
	'EXPORT_DOWNLOAD'		=> 'Download',
	'EXPORT_STORE'			=> 'Gem på disk',

	'GENERAL_OPTIONS'		=> 'Generelle valg',
	'GENERAL_SETTINGS'		=> 'Generelle indstillinger',
	'GLOBAL_MASK'			=> 'Global tilladelse maske',

	'INSTALL'				=> 'Installér',
	'IP'					=> 'IP-adresser',
	'IP_HOSTNAME'			=> 'IP-adresser eller webværter',

	'LOGGED_IN_AS'			=> 'Du er logget ind som:',
	'LOGIN_ADMIN'			=> 'Din bruger autorisation skal godtgøres for at administrere boardet.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Du skal indtaste dit kodeord igen for at få adgang til administrator kontrolpanelet.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Du har genautoriseret dig og bliver nu omdirigeret til administrator kontrolpanelet.',
	'LOOK_UP_FORUM'			=> 'Vælg et forum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Du kan vælge mere end ét forum.', 

	'MANAGE'				=> 'Administrér',
	'MENU_TOGGLE'			=> 'Skjul eller vis sidemenuen',
	'MOVE_DOWN'				=> 'Flyt ned',
	'MOVE_UP'				=> 'Flyt op',

	'NOTIFY'				=> 'Bekendtgørelse',
	'NO_ADMIN'				=> 'Du er ikke bemyndiget til at administrere dette forum.',
	'NO_EMAILS_DEFINED'		=> 'Kunne ikke finde gyldige emailadresser.',
	'NO_PASSWORD_SUPPLIED'	=> 'Du skal indtaste dit kodeord for at få adgang til administrator kontrolpanelet.',

	'OFF'					=> 'Slået fra',
	'ON'					=> 'Slået til',

	'PARSE_BBCODE'			=> 'Analysér BBkode',
	'PARSE_SMILIES'			=> 'Analysér smilies',
	'PARSE_URLS'			=> 'Analysér links',
	'PERMISSIONS_TRANSFERRED'=> 'Tilladelser overført',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Du har for nuværende tilladelserne fra %1$s. Du kan browse boardet med brugernes tilladelser men kan ikke tilgå administrator kontrolpanelet da administrator tilladelser ikke blev overført. Du kan når som helst <a href="%2$s"><strong>gå tilbage til dit eget sæt af tilladelser</strong></a>.',
	'PIXEL'					=> 'px',
	'PROCEED_TO_ACP'		=> '%sFortsæt til ACP%s',

	'REMIND'				=> 'Påmind',
	'RESYNC'				=> 'Resynkronisér',
	'RETURN_TO'				=> 'Gå tilbage til ...',

	'SELECT_ANONYMOUS'		=> 'Vælg gæstebruger',
	'SELECT_OPTION'			=> 'Valg',

	'UCP'					=> 'Bruger kontrolpanel',
	'USERNAMES_EXPLAIN'		=> 'Anfør alle brugernavne på en selvstændig linie.',
	'USER_CONTROL_PANEL'	=> 'Bruger kontrolpanel',

	'WARNING'				=> 'Advarsel',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Denne side informerer om version og indstillinger for PHP (funktionen phpinfo()) installeret på denne server. PHP-indstillinger omfatter versionsinformation, information om indlæste moduler, tilgængelige variabler og standardindstillinger, som er egnet til at diagnosticere problemer.<br />Bemærk venligst, at nogle værter af sikkerhedshensyn har sat grænser for hvilken information, der bliver vist med PHP-indstillinger.<br />
<b>Et godt råd</b>: Videregiv aldrig information om serverens PHP-indstillinger til andre, med mindre du bliver spurgt af <a href="http://www.phpbb.com/about/team/">officielle teammedlemmer på www.phpbb.com</a> eller af teammedlemmer på andre supportboards. Overvej i denne forbindelse eventuelt også muligheden for videregivelse af sådanne oplysninger pr. email eller privat besked.',
	'NO_PHPINFO_AVAILABLE'	=> 'Informationerne om din PHP konfiguration kan ikke hentes. Funktionen phpinfo() er deaktiveret af sikkerhedsgrunde.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Her listes alle handlinger udført af administratorer. Listen kan arrangeres efter brugernavn, dato, IP-adresse eller handlingen. Hvis du har passende tilladelser kan du også tømme listen for de enkelte operationer eller rydde hele log\'en.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Her listes alle handlinger udført af boardet selv. Listen giver information til at løse særlige problemer, f.eks. ikke-leverede emails.	Listen kan arrangeres efter brugernavn, dato, IP-adresse eller handling. Hvis du har passende tilladelser kan du også tømme listen for de enkelte operationer eller rydde hele log\'en.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Her listes alle handlinger udført af redaktører i henholdsvis fora, emner og indlæg, samt handlinger overfor brugere, herunder udelukkelse af disse. Du kan sortere listen efter brugernavn, dato, IP-adresse eller handling. Hvis du har passende tilladelser kan du også tømme listen for de enkelte operationer eller rydde hele log\'en.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Her listes alle handlinger udført af brugere eller på brugere (rapporter, advarsler og brugernoter).',
	'ALL_ENTRIES'				=> 'Alle adgange',

	'DISPLAY_LOG'	=> 'Vis adgange fra forrige',

	'NO_ENTRIES'	=> 'Ingen adgange er logget i denne periode.',

	'SORT_IP'		=> 'IP-adresser',
	'SORT_DATE'		=> 'Dato',
	'SORT_ACTION'	=> 'Log handlinger',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Tak fordi du valgte phpBB3 som din boardløsning.<br />Denne side giver dig et hurtigt overblik over alle tilgængelige statistikker på dit board.<br />Via fanebladene foroven kan du vælge det område af boardet som skal administreres. De øvrige links i menuen til venstre giver adgang til værktøjer så du kan indstille og kontrollere alle finesser i dit board. Du finder tips og instruktion under hvert værktøj.',
	'ADMIN_LOG'					=> 'Denne logger administrator handlinger',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Denne giver en oversigt over de seneste 5 handlinger udført af administratorer. Den fulde log kan vises ved at klikke på linket under administrator handlingerne. Denne og alle øvrige logs kan også ses via fanebladet "Vedligehold".',
	'AVATAR_DIR_SIZE'			=> 'Avatar-mappens størrelse',

	'BOARD_STARTED'		=> 'Board oprettet',
	'BOARD_VERSION'		=> 'Board version',

	'DATABASE_SERVER_INFO'	=> 'Database server',
	'DATABASE_SIZE'			=> 'Database størrelse',

	'FILES_PER_DAY'		=> 'Antal vedhæftede filer pr. dag',
	'FORUM_STATS'		=> 'Board statistikker',

	'GZIP_COMPRESSION'	=> 'Gzip komprimering',

	'NOT_AVAILABLE'		=> 'Ikke tilgængeligt',
	'NUMBER_FILES'		=> 'Antal vedhæftede filer',
	'NUMBER_POSTS'		=> 'Antal indlæg',
	'NUMBER_TOPICS'		=> 'Antal emner',
	'NUMBER_USERS'		=> 'Antal brugere',
	'NUMBER_ORPHAN'		=> 'Vildfarne vedhæftede filer',

	'POSTS_PER_DAY'		=> 'Indlæg pr. dag',
	'PURGE_CACHE'		=> 'Tøm cachen',
	'PURGE_CACHE_CONFIRM'	=> 'Er du sikker på du vil tømme cachen?', 
	'PURGE_CACHE_EXPLAIN'	=> 'Sletter alt i cachen, dette inkluderer mellemlagrede skabelonfiler og søgninger.',

	'RESET_DATE'			=> 'Nulstil boardets startdato',
	'RESET_DATE_CONFIRM'	=> 'Er du sikker på at du vil nulstille boardets startdato?',
	'RESET_ONLINE'			=> 'Nulstil flest brugere online',
	'RESET_ONLINE_CONFIRM'	=> 'Er du sikker på at du vil nulstille flest brugere online?',
	'RESYNC_POSTCOUNTS'		=> 'Resynkronisér indlægstæller',
	'RESYNC_POSTCOUNTS_EXPLAIN'	=> 'Kun eksisterende indlæg bliver medregnet ved resynkronisereringen, ikke beskårede indlæg.',
	'RESYNC_POSTCOUNTS_CONFIRM'	=> 'Er du sikker på at du vil resynkronisere indlægstælleren?',
	'RESYNC_POST_MARKING'	=> 'Resynkronisér prikkede emner',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Er du sikker på at du vil resynkronisere markerede emner?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Først afmarkeres alle emner og derefter bliver alle emner med aktivitet i de sidste seks måneder korrekt markeret.',
	'RESYNC_STATS'			=> 'Resynkronisér statistikker',
	'RESYNC_STATS_CONFIRM'	=> 'Er du sikker på at du ønsker at resynkronisere statistikkerne?',
	'RESYNC_STATS_EXPLAIN'	=> 'Genberegner det samlede antal af henholdsvis indlæg, emner, brugere og filer.',
	'RUN'					=> 'Udfør nu',

	'STATISTIC'					=> 'Statistik',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Resynkronisér eller nulstil statistikker',

	'TOPICS_PER_DAY'	=> 'Emner pr. dag',

	'UPLOAD_DIR_SIZE'	=> 'Samlet størrelse af vedhæftede filer',
	'USERS_PER_DAY'		=> 'Brugere pr. dag',

	'VALUE'				=> 'Værdi',
	'VIEW_ADMIN_LOG'	=> 'Se administrator log',
	'VIEW_INACTIVE_USERS'	=> 'Se inaktive brugere',

	'WELCOME_PHPBB'			=> 'Velkommen til phpBB',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Inaktiv dato',
	'INACTIVE_REASON'				=> 'Begrundelse',
	'INACTIVE_REASON_MANUAL'		=> 'Konto deaktiveret af administrator',
	'INACTIVE_REASON_PROFILE'		=> 'Profilinformation ændret',
	'INACTIVE_REASON_REGISTER'		=> 'Nyligt oprettet konto',
	'INACTIVE_REASON_REMIND'		=> 'Tvungen genaktivering af brugerkonto',
	'INACTIVE_REASON_UNKNOWN'		=> 'Ukendt',
	'INACTIVE_USERS'				=> 'Inaktive brugere',
	'INACTIVE_USERS_EXPLAIN'		=> 'Dette er en liste over brugere som er tilmeldt men hvis konti er inaktive. Du kan aktivere, slette eller erindre disse brugere pr. email hvis du ønsker det.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Dette er en liste over de 10 seneste tilmeldte brugere som har inaktive konti. En fuldstændig liste er tilgængelig ved at følge linket nedenfor, hvorfra du kan aktivere, slette eller erindre disse brugere pr. email hvis du ønsker det. Listen kan også ses via fanebladet "Brugere & Grupper".',

	'NO_INACTIVE_USERS'	=> 'Ingen inaktive brugere',

	'SORT_INACTIVE'		=> 'Inaktiv dato',
	'SORT_LAST_VISIT'	=> 'Sidste besøg',
	'SORT_REASON'		=> 'Begrundelse',
	'SORT_REG_DATE'		=> 'Tilmeldingsdato',

	'USER_IS_INACTIVE'		=> 'Bruger er inaktiv',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Tilføjet eller ændret brugeres tilladelser</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Tilføjet eller ændret gruppers brugertilladelser</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Tilføjet eller ændret brugers globale redaktørtilladelser</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Tilføjet eller ændret gruppers globale redaktørtilladelser</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Tilføjet eller ændret brugeres administratortilladelser</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Tilføjet eller ændret gruppers administratortilladelser</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Tilføjet eller ændret administratorer</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Tilføjet eller ændret globale redaktører</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Tilføjet eller ændret brugeres tilgang til forum</strong><br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Tilføjet eller ændret brugeres redaktør tilgang til forum</strong><br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Tilføjet eller ændret gruppers tilgang til forum</strong><br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Tilføjet eller ændret gruppers redaktør tilgang til forum</strong> fra %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Tilføjet eller ændret redaktører</strong> fra %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Tilføjet eller ændret forum tilladelser</b fra %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Fjernet administratorer</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Fjernet globale redaktører</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Fjernet redaktører</strong> from %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Fjernet bruger/gruppe tilladelser</strong> fra %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Tilladelser overført fra</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Egne tilladelser gendannet efter brug af tilladelser fra</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Mislykket forsøg på login som administrator</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Vellykket login som administrator</strong>', 

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Slettet brugers vedhæftede filer</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Tilføjet eller ændret vedhæftet filtype</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Fjernet vedhæftet filtype</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Opdateret vedhæftet filtype</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Tilføjet filtype gruppe</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Ændret filtype gruppe</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Fjernet filtype gruppe</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> 'Vildfaren fil uploadet til indlæg</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> 'Vildfarne filer slettet</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Udelukket bruger i Forbyd-kontrol</strong> på grund af "<i>%1$s</i>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Udelukket IP-adresse i Forbyd-kontrol</strong> på grund af "<i>%1$s</i>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Udelukket email i Forbyd-kontrol</strong> på grund af "<i>%1$s</i>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Bruger udelukket</strong> på grund af "<i>%1$s</i>"<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>IP-adresse udelukket</strong> på grund af "<i>%1$s</i>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Email udelukket</strong> på grund af "<i>%1$s</i>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Bruger udelukkelse ophævet</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>IP-adresse udelukkelse ophævet</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Email udelukkelse ophævet</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Tilføjet ny BBkode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Ændret BBkode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Slettet BBkode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Ny robot tilføjet</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Slettet robot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Nuværende robot opdateret</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Ryddet admin log</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Ryddet error log</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Ryddet redaktør log</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Ryddet bruger log</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Ryddet bruger logs</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Ændret indstillinger for vedhæftede filer</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Ændret indstillinger for autorisation</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Ændret avatar indstillinger</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Ændret cookie indstillinger</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Ændret email indstillinger</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Ændret board finesser</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Ændret load indstillinger</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Ændret indstillinger for privat besked</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Ændret indlæg indstillinger</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Ændret indstillinger for brugertilmelding</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Ændret søge indstillinger</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Ændret sikkerheds indstillinger</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Ændret server indstillinger</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Ændret board indstillinger</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Ændret signatur indstillinger</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Ændret indstillinger for visuel bekræftelse</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Godkendt emne</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Emne placeret øverst af bruger</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Slettet indlæg</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Slettet emne</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Kopieret emne</strong><br />» fra %s',
	'LOG_LOCK'					=> '<strong>Låst emne</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Låst indlæg</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Emner slået sammen</strong> i emnet<br />» %s',
	'LOG_MOVE'					=> '<strong>Flyttet emne</strong><br />» fra %s',
	'LOG_POST_APPROVED'			=> '<strong>Godkendt indlæg</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Afvist indlæg "%1$s" med denne begrundelse</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Redigeret indlæg "%1$s" skrevet af</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Lukket rapport</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Slettet rapport</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Flyttet delte indlæg</strong><br />» til %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Delte indlæg</strong><br />» fra %s',

	'LOG_TOPIC_DELETED'			=> '<strong>Slettet emne</strong><br />» %s',
	'LOG_TOPIC_APPROVED'		=> '<strong>Godkendt emne</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Afvist emne "%1$s" med denne begrundelse</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Resynkroniseret emnetæller</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Skiftet emnetype</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Genåbnet emne</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Genåbnet indlæg</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Tilføjet afvist brugernavn</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Slettet afvist brugernavn</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Databasebackup udført</strong>',
	'LOG_DB_DELETE'			=> '<strong>Databasebackup slettet</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Database gendannet</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Udelukket IP-adresse/vært i download listen</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Tilføjet IP-adresse/vært til download listen</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Fjernet IP-adresse/vært fra download listen</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber-fejl</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Email-fejl</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Nyt forum dannet</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Slettet forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Slettet forum og dets underfora</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Slettet forum og flyttet underfora</strong> til %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Slettet forum og flyttet indlæg </strong> til %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Slettet forum og dets underfora, flyttet beskeder</strong> til %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Slettet forum, flyttet indlæg</strong> til %1$s <strong>og underfora</strong> til %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Slettet forum og dets beskeder</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Slettet forum, dets beskeder og underfora</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Slettet forum og dets beskeder, flyttet underfora</strong> til %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Ændret forum detaljer</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Flyttet forum</strong> %1$s <strong>ned under</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Flyttet forum</strong> %1$s <strong>op over</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Synkroniseret forum</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>Ny brugergruppe dannet</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Gruppen "%1$s" er ændret til standardgruppe for</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Brugergruppe slettet</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Gruppeleder degraderet i brugergruppen</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Medlemmer forfremmet til leder i brugergruppen</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Medlemmer fjernet fra brugergruppen</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Brugergruppe detaljer opdateret</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Tilføjet nye ledere i brugergruppen</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Medlemmer godkendt i brugergruppen</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Tilføjet nye medlemmer i brugergruppen</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'		=> '<strong>Tilføjer ny billedpakke til database</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'		=> '<strong>Tilføjet ny billedpakke til filsystemet</strong><br />» %s',
	'LOG_IMAGESET_DELETE'		=> '<strong>Slettet billedpakke</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'	=> '<strong>Ændret billedpakke detaljer</strong><br />» %s',
	'LOG_IMAGESET_EDIT'			=> '<strong>Ændret billedpakke</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'		=> '<strong>Eksporteret billedpakke</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'	=> '<strong>Billedpakken mangler "%2$s" sprog</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Genindlæst "%2$s" sprogspecifik billedpakke</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'	=> '<strong>Genindlæst billedpakke</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Aktiveret inaktive brugere</strong><br />» %s',
	'LOG_INACTIVE_DELETE'		=> '<strong>Slettet inaktive brugere</strong><br />» %s',
	'LOG_INACTIVE_REMIND'		=> '<strong>Sendt påmindelser pr. email til inaktive brugere</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Konverteret fra %1$s til phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Installeret phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Mislykket tjek af session IP-adresse/Browser/X-FORWARDED_FOR</strong><br />»Brugerens IP-adresse "<em>%1$s</em>" tjekket mod sessions IP-adresse "<em>%2$s</em>", brugerens browser-streng "<em>%3$s</em>" tjekket mod sessions browser-streng "<em>%4$s</em>" og brugerens X_FORWARDED_FOR streng "<em>%5$s</em>" tjekket mod session X_FORWARDED_FOR streng "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber konto ændret</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber kodeord ændret</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber konto registreret</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber indstillinger ændret</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Slettet sprogpakke</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Indsat sprogpakke</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Sprogpakke detaljer opdateret</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Sprogfiler udskiftet</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Sprogfil indsendt og placeret i lagringsmappen</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Sendt masse-mail</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Skiftet indlæg i emne "%1$s"</strong><br />» fra %2$s til %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Modul slået fra</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Modul slået til</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Modul flyttet ned</strong><br />» %1$s under %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Modul flyttet op</strong><br />» %1$s over %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Modul fjernet</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Modul tilføjet</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Modul ændret</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Admin rolle tilføjet</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Admin rolle ændret</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Admin rolle fjernet</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Forum rolle tilføjet</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Forum rolle ændret</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Forum rolle fjernet</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Redaktør rolle tilføjet</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Redaktør rolle ændret</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Redaktør rolle fjernet</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Bruger rolle tilføjet</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Bruger rolle ændret</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Bruger rolle fjernet</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Profilfelt aktiveret</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Profilfelt tilføjet</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Profilfelt inaktiveret</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Profilfelt ændret</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Profilfelt fjernet</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Beskårede fora</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Auto-beskårede fora</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Bruger inaktiveret</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Slettet beskårede brugere og indlæg</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Bevaret beskårede brugere og indlæg</strong><br />» %s',
	
	'LOG_PURGE_CACHE'			=> '<strong>Tømt cache</strong>',

	'LOG_RANK_ADDED'			=> '<strong>Ny rang tilføjet</strong><br />» %s',
	'LOG_RANK_REMOVED'			=> '<strong>Rang slettet</strong><br />» %s',
	'LOG_RANK_UPDATED'			=> '<strong>Rang opdateret</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Tilføjet afvisnings-begrundelse</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Fjernet afvisnings-begrundelse</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Opdateret afvisnings-begrundelse</strong><br />» %s',

	'LOG_RESET_DATE'			=> '<strong>Boardets startdato nulstillet</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>\'Flest brugere online\' er nulstillet</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Bruger indlægstæller resynkroniseret</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Prikkede emner resynkroniseret</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Indlæg-, emne- og bruger-statistikker resynkroniseret</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Søgeindeks dannet for</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Søgeindeks fjernet for</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Ny typografi tilføjet</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Typografi slettet</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Typografi ændret</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Typografi eksporteret</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Tilføjet ny skabelon indstilling til database</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Tilføjet ny skabelon indstilling i filsystemet</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Ryddet cache-versioner af template filer i skabelon indstilling <i>%1$s</i></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Slettet skabelon indstilling</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Ændret skabelon indstilling <i>%1$s</i></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Ændret skabelon detaljer</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Eksporteret skabelon indstilling</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Fornyet skabekon indstilling</strong><br />» %s',

	'LOG_UPDATE_DATABASE'		=> '<strong>Database opdateret fra version %1$s til version %2$s</strong>',
	'LOG_UPDATE_PHPBB'			=> '<strong>phpBB opdateret fra version %1$s til version %2$s</strong>',

	'LOG_THEME_ADD_DB'			=> '<strong>Tilføjet nyt tema til database</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Tilføjet nyt tema på filsystemet</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Tema slettet</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Ændret tema detaljer</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Ændret tema <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Ændret tema <i>%1$s</i></strong><br />» Modificeret fil <i>%2$s</i>',
	'LOG_THEME_EXPORT'			=> '<strong>Eksporteret tema</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Genindlæst tema</strong><br />» %s',

	'LOG_USER_ACTIVE'		=> '<strong>Bruger aktiveret</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Bruger udelukket via Brugeradmin </strong> på grund af "<i>%1$s</i>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>IP-adresse udelukket via Brugeradmin</strong> på grund af "<i>%1$s</i>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Email udelukket via Brugeradmin</strong> på grund af "<i>%1$s</i>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Bruger slettet</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Fjernet alle brugerens vedhæftninger</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Fjernet brugerens avatar</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Fjernet alle brugerens indlæg</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Fjernet brugerens signatur</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Brugeren er deaktiveret</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Flyttet brugerens indlæg</strong><br />» postet af "%1$s" til forum "%2$s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Skiftet brugerens kodeord</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Tvunget brugerens konto til genaktivering</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Bruger "%1$s" har skiftet email</strong><br />» fra "%2$s" til "%3$s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Skiftet brugernavn</strong><br />» fra "%1$s" til "%2$s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>Brugerens detaljer er opdateret</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Brugerkonto aktiveret</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Brugeravatar fjernet</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Brugersignatur fjernet</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Tilføjet bruger tilbagemelding</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Indgang tilføjet:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Brugerkonto deaktiveret</strong>',
	'LOG_USER_LOCK'				=> '<strong>Bruger låst eget emne</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Alle indlæg flyttet til forummet</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Tvunget brugerkonto til genaktivering</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Bruger låst op for eget emne</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Tilføjet bruger-advarsel</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Følgende advarsel blev udstedt til denne bruger</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Bruger skiftet standard gruppe</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Bruger degraderet som leder af brugergruppen</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Bruger sluttet til gruppe</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Bruger sluttet til gruppe og behøver godkendelse</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Bruger udmeldt af gruppe</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Tilføjet ordcensur</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Slettet ordcensur</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Ændret ordcensur</strong><br />» %s',
));

?>