<?php
/** 
*
* acp_common [Finnish [Fin]]
*
* @package language
* @copyright (c) 2006 phpBB Group 
* @author 2006-11-14 - Lurttinen@phpbbsuomi.com
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
	'ACP_ADMINISTRATORS'		=> 'Ylläpitäjät',
	'ACP_ADMIN_LOGS'			=> 'Ylläpitäjien logi',
	'ACP_ADMIN_ROLES'			=> 'Ylläpitäjän rooli',
	'ACP_ATTACHMENTS'			=> 'Liitetiedostot',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Liitetiedostojen asetukset',
	'ACP_AUTH_SETTINGS'			=> 'Tunnistautuminen',
	'ACP_AUTOMATION'			=> 'Automaatio',
	'ACP_AVATAR_SETTINGS'		=> 'Avatar-asetukset',

	'ACP_BACKUP'				=> 'Varmuuskopio',
	'ACP_BAN'					=> 'Porttikielto',
	'ACP_BAN_EMAILS'			=> 'Porttikielto sähköpostin mukaan',
	'ACP_BAN_IPS'				=> 'Porttikielto IP:n mukaan',
	'ACP_BAN_USERNAMES'			=> 'Porttikielto käyttäjätunnusten mukaan ',
	'ACP_BBCODES'				=> 'BBCode',
	'ACP_BOARD_CONFIGURATION'	=> 'keskustelufoorumin asetukset',
	'ACP_BOARD_FEATURES'		=> 'Yleiset toiminnot',
	'ACP_BOARD_MANAGEMENT'		=> 'Hallinta',
	'ACP_BOARD_SETTINGS'		=> 'Yleiset asetukset',
	'ACP_BOTS'					=> 'Spiderit/Robotit',
	
	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Tietokanta',
	'ACP_CAT_DOT_MODS'			=> '.MODit',
	'ACP_CAT_FORUMS'			=> 'Alueet',
	'ACP_CAT_GENERAL'			=> 'Yleinen',
	'ACP_CAT_MAINTENANCE'		=> 'Huolto',
	'ACP_CAT_PERMISSIONS'		=> 'Oikeudet',
	'ACP_CAT_POSTING'			=> 'Viestien lähetys',
	'ACP_CAT_STYLES'			=> 'Tyylit',
	'ACP_CAT_SYSTEM'			=> 'Järjestelmä',
	'ACP_CAT_USERGROUP'			=> 'Käyttäjät ja ryhmät',
	'ACP_CAT_USERS'				=> 'Käyttäjät',
	'ACP_CLIENT_COMMUNICATION'	=> 'Asiakasohjelman kommunikointi',
	'ACP_COOKIE_SETTINGS'		=> 'Evästeiden asetukset',
	'ACP_CRITICAL_LOGS'			=> 'Virheiden logi',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Mukautetut profiilikentät',
	
	'ACP_DATABASE'				=> 'Tietokannan hallinta',
	'ACP_DISALLOW'				=> 'Kiellä',
	'ACP_DISALLOW_USERNAMES'	=> 'Kiellä käyttäjätunnukset',
	
	'ACP_EMAIL_SETTINGS'		=> 'Sähköpostiasetukset',
	'ACP_EXTENSION_GROUPS'		=> 'Tunnisteryhmien asetukset',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Alueeseen perustuvat oikeudet',
	'ACP_FORUM_LOGS'				=> 'Alueen logit',
	'ACP_FORUM_MANAGEMENT'			=> 'Alueen hallinta',
	'ACP_FORUM_MODERATORS'			=> 'Alueen valvojat',
	'ACP_FORUM_PERMISSIONS'			=> 'Alueen oikeudet',
	'ACP_FORUM_ROLES'				=> 'Alueen roolit',

	'ACP_GENERAL_CONFIGURATION'		=> 'Yleisasetukset',
	'ACP_GENERAL_TASKS'				=> 'Yleiset tehtävät',
	'ACP_GLOBAL_MODERATORS'			=> 'Valvojat',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Yleiset oikeudet',
	'ACP_GROUPS'					=> 'Ryhmät',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Ryhmien oikeudet alueilla',
	'ACP_GROUPS_MANAGE'				=> 'Hallitse ryhmiä',
	'ACP_GROUPS_MANAGEMENT'			=> 'Ryhmän hallinta',
	'ACP_GROUPS_PERMISSIONS'		=> 'Ryhmän oikeudet',
	
	'ACP_ICONS'					=> 'Viestien kuvakkeet',
	'ACP_ICONS_SMILIES'			=> 'Viestien kuvakkeet/hymiöt',
	'ACP_IMAGESETS'				=> 'Kuvapaketit',
	'ACP_INACTIVE_USERS'		=> 'Vahvistamattomat käyttäjät',
	'ACP_INDEX'					=> 'Ylläpidon etusivu',
	
	'ACP_JABBER_SETTINGS'		=> 'Jabber-asetukset',
	
	'ACP_LANGUAGE'				=> 'Kielten hallinta',
	'ACP_LANGUAGE_PACKS'		=> 'Kielipaketit',
	'ACP_LOAD_SETTINGS'			=> 'Kuormituksen asetukset',
	'ACP_LOGGING'				=> 'Kirjaa logiin',
	
	'ACP_MAIN'					=> 'Ylläpidon etusivu',
	'ACP_MANAGE_EXTENSIONS'		=> 'Tunnisteiden hallinta',
	'ACP_MANAGE_FORUMS'			=> 'Alueiden hallinta',
	'ACP_MANAGE_RANKS'			=> 'Arvonimien hallinta',
	'ACP_MANAGE_REASONS'		=> 'Hallitse ilmoituksia/hylkäyksen syitä',
	'ACP_MANAGE_USERS'			=> 'Hallitse käyttäjiä',
	'ACP_MASS_EMAIL'			=> 'Joukkopostitus',
	'ACP_MESSAGES'				=> 'Viestit',
	'ACP_MESSAGE_SETTINGS'		=> 'Yksityisviestien asetukset',
	'ACP_MODULE_MANAGEMENT'		=> 'Moduulien hallinta',
	'ACP_MOD_LOGS'				=> 'Valvojien logitiedot',
	'ACP_MOD_ROLES'				=> 'Valvojien roolit',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Orvot liitetiedostot',
	
	'ACP_PERMISSIONS'			=> 'Oikeudet',
	'ACP_PERMISSION_MASKS'		=> 'Oikeuksien maskit',
	'ACP_PERMISSION_ROLES'		=> 'Oikeuksien roolit',
	'ACP_PERMISSION_TRACE'		=> 'Oikeuksien jäljitys',
	'ACP_PHP_INFO'				=> 'PHP-Informaatio',
	'ACP_POST_SETTINGS'			=> 'Viestien lähetyksen asetukset',
	'ACP_PRUNE_FORUMS'			=> 'Automaattinen siivous',
	'ACP_PRUNE_USERS'			=> 'Käyttäjien siivoaminen',
	'ACP_PRUNING'				=> 'Siivoaminen',
	
	'ACP_QUICK_ACCESS'			=> 'Pikalinkit',
	
	'ACP_RANKS'					=> 'Arvonimet',
	'ACP_REASONS'				=> 'Ilmoitus/hylkäyksen syy',
	'ACP_REGISTER_SETTINGS'		=> 'Rekisteröitymisen asetukset',

	'ACP_RESTORE'				=> 'Palauta',

	'ACP_SEARCH'				=> 'Hakutoiminnon asetukset',
	'ACP_SEARCH_INDEX'			=> 'Hakutoiminnon sisällysluettelo',
	'ACP_SEARCH_SETTINGS'		=> 'Hakutoiminnon asetukset',

	'ACP_SECURITY_SETTINGS'		=> 'Tietoturva-asetukset',
	'ACP_SERVER_CONFIGURATION'	=> 'Palvelimen konfiguraatio',
	'ACP_SERVER_SETTINGS'		=> 'Palvelimen asetukset',
	'ACP_SIGNATURE_SETTINGS'	=> 'Allekirjoituksen asetukset',
	'ACP_SMILIES'				=> 'Hymiöt',
	'ACP_STYLE_COMPONENTS'		=> 'Tyylien komponenetit',
	'ACP_STYLE_MANAGEMENT'		=> 'Tyylien hallinta',
	'ACP_STYLES'				=> 'Tyylit',
	
	'ACP_TEMPLATES'				=> 'Mallineet',
	'ACP_THEMES'				=> 'Teemat',
	
	'ACP_UPDATE'					=> 'Päivittää',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Käyttäjien oikeudet alueittain',
	'ACP_USERS_LOGS'				=> 'Käyttäjien logitiedot',
	'ACP_USERS_PERMISSIONS'			=> 'Käyttäjien oikeudet',
	'ACP_USER_ATTACH'				=> 'Liitetiedostot',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Palaute',
	'ACP_USER_GROUPS'				=> 'Ryhmät',
	'ACP_USER_MANAGEMENT'			=> 'Käyttäjien hallinta',
	'ACP_USER_OVERVIEW'				=> 'Yleiset',
	'ACP_USER_PERM'					=> 'Oikeudet',
	'ACP_USER_PREFS'				=> 'Asetukset',
	'ACP_USER_PROFILE'				=> 'Profiili',
	'ACP_USER_RANK'					=> 'Arvonimi',
	'ACP_USER_ROLES'				=> 'Käyttäjän roolit',
	'ACP_USER_SECURITY'				=> 'Käytäjän tietoturva',
	'ACP_USER_SIG'					=> 'Allekirjoitus',

	'ACP_VC_SETTINGS'					=> 'Visuaalisen varmennuksen asetukset',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA Kuvan esikatselu',
	'ACP_VERSION_CHECK'					=> 'Tarkista onko päivityksiä',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Katso ylläpitäjän oikeuksia',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Katso alueen valvojien oikeuksia',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Katso alueen oikeuksia',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Katso valvojien oikeuksia',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Katso käyttäjien oikeuksia',
	
	'ACP_WORDS'					=> 'Sanasensuuri',

	'ACTION'				=> 'Toimenpide',
	'ACTIONS'				=> 'Toimenpiteet',
	'ACTIVATE'				=> 'Aktivoi',
	'ADD'					=> 'Lisää',
	'ADMIN'					=> 'Ylläpito',
	'ADMIN_INDEX'			=> 'Ylläpidon etusivu',
	'ADMIN_PANEL'			=> 'Ylläpidon hallintapaneeli',

	'BACK'					=> 'Takaisin',

	'COLOUR_SWATCH'			=> 'Web-turvalliset värit',
	'CONFIG_UPDATED'		=> 'Asetukset on päivitetty',

	'DEACTIVATE'				=> 'Sulje',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Polkua "%s" ei ole olemassa.',
	'DIRECTORY_NOT_DIR'			=> 'Antamasi polku "%s" hakemisto.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Antamaasi polkuun "%s" ei voi kirjoittaa.',
	'DISABLE'					=> 'Poista käytöstä',
	'DOWNLOAD'					=> 'Lataa',
	'DOWNLOAD_AS'				=> 'Lataa muodossa',
	'DOWNLOAD_STORE'			=> 'Lataa tai tallenna tiedosto',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Voit ladata tiedoston tai tallentaa sen  <samp>store/</samp> -hakemistoon.',

	'EDIT'					=> 'Muokkaa',
	'ENABLE'				=> 'Ota käyttöön',
	'EXPORT_DOWNLOAD'		=> 'Lataa',
	'EXPORT_STORE'			=> 'Tallenna',

	'GENERAL_OPTIONS'		=> 'Yleiset vaihtoehdot',
	'GENERAL_SETTINGS'		=> 'Yleiset asetukset',
	'GLOBAL_MASK'			=> 'Yleinen oikeuksien maski',

	'INSTALL'				=> 'Asenna',
	'IP'					=> 'Käyttäjän IP-osoite',
	'IP_HOSTNAME'			=> 'IP-osoite tai isäntänimi',

	'LOGGED_IN_AS'			=> 'Olet kirjautunut sisään:',
	'LOGIN_ADMIN'			=> 'Sinun tulee olla tunnistettu käyttäjä hallinnoidaksesi keskustelufoorumia.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Kirjaudu sisään uudelleen hallinnoidaksesi keskustelufoorumia.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Olet tunnistettu ylläpitäjäksi. Pääset hetken kulutta ylläpitoon',
	'LOOK_UP_FORUM'			=> 'Valitse keskustelu-alue',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Voit valita useamman, kuin yhden alueen',

	'MANAGE'				=> 'hallitse',
	'MENU_TOGGLE'			=> 'Näytä tai piilota sivupaneeli',
	'MOVE_DOWN'				=> 'Siirrä alas',
	'MOVE_UP'				=> 'Siirrä ylös',

	'NOTIFY'				=> 'Ilmoitus',
	'NO_ADMIN'				=> 'Oikeutesi eivät riitä muokkaamaan tämän keskustelufoorumin asetuksia.',
	'NO_EMAILS_DEFINED'		=> 'Sopivaa sähköpostiosoitetta ei löytynyt',
	'NO_PASSWORD_SUPPLIED'	=> 'Anna salasanasi, ennenkuin jatkat ylläpidon asetuksiin.',	

	'OFF'					=> 'Off',
	'ON'					=> 'On',

	'PARSE_BBCODE'						=> 'Käsittele BBCode',
	'PARSE_SMILIES'						=> 'Käsittele hymiöt',
	'PARSE_URLS'						=> 'Käsittele linkit',
	'PERMISSIONS_TRANSFERRED'			=> 'Oikeudet ovat siirretty',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Käytät tällähetkellä käyttäjän %1$s oikeuksia. Voit selata keskustelufoorumia nähden samat asiat, kuin tämäkin käyttäjä, mutta et pääse ylläpidon asetuksiin, sillä näitä oikeuksia ei ole siirretty. Voit palauttaa <a href="%2$s"><strong>omat oikeutesi</strong></a> koska tahansa.',
	'PIXEL'								=> 'px',	
	'PROCEED_TO_ACP'					=> '%sJatka hallintapaneeliin%s',

	'REMIND'							=> 'Muistuta',
	'RESYNC'							=> 'Synkronoi',
	'RETURN_TO'							=> 'Palaa...',

	'SELECT_ANONYMOUS'		=> 'Valitse vierailijan tunnus',
	'SELECT_OPTION'			=> 'Valitse vaihtoehto',

	'UCP'					=> 'Käyttäjien hallintapaneeli',
	'USERNAMES_EXPLAIN'		=> 'Laita jokainen käyttäjätunnus omalle rivillensä',
	'USER_CONTROL_PANEL'	=> 'Käyttäjien hallintapaneeli',

	'WARNING'				=> 'varoitus',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Tällä sivulla on tietoa palvelimelle asennetusta PHP versiosta ja siihen kuuluvien ladattujen moduulien tiedot, käytössä olevat muuttujat ja oletusasetukset. Tämä tieto voi olla tarpeellinen ongelmia selvitettäessä. Huomaa, että jotkut palveluntarjoajat rajoittavat tällä sivulla näkyvää tietoa tietoturvasyistä. Älä annan näitä tietoja eteenpäin, ellei sitä kysy phpBB support teamin jäsen tai joku muu tiimin jäsenistä.',

	'NO_PHPINFO_AVAILABLE'	=> 'PHP-informaatiota ei voitu hakea. Phpinfo() on poissa käytöstä tietoturvasyistä.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Tässä on listattuna ylläpidon suorittamat toimenpiteet. Voit muokata järjestystä käyttäjätunnuksen, päivämäärän, IP:n tai toiminnon mukaan. Mikäli sinulla on tarvittavat oikeudet, voit poistaa yksittäisiä tapahtumia tai koko login.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Tässä on listattuna keskustelufoorumin suorittamat toimenpiteet. Tässä listassa olevista tiedoista voi olla hyötyä jäljittäessä, esimerkiksi sähköpostiin liittyviä ongelmia. Voit muokata järjestystä käyttäjätunnuksen, päivämäärän, IP:n tai toiminnon mukaan. Mikäli sinulla on tarvittavat oikeudet, voit poistaa yksittäisiä tapahtumia tai koko login.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Tässä on listattuna valvojien suoritamat toimenpiteet. Valitse keskustelualue alasvetovalikosta. Voit muokata järjestystä käyttäjätunnuksen, päivämäärän, IP:n tai toiminnon mukaan. Mikäli sinulla on tarvittavat oikeudet, voit poistaa yksittäisiä tapahtumia tai koko login.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Tässä omn listattuna käyttäjään tai käyttäjiin kohdistuvat toimenpiteet.',
	'ALL_ENTRIES'				=> 'Kaikki tapahtumat',

	'DISPLAY_LOG'	=> 'Näytä tapahtumat edelliseltä',

	'NO_ENTRIES'	=> 'Tältä aikaväliltä ei ole tapahtumia',

	'SORT_IP'		=> 'IP-osoite',
	'SORT_DATE'		=> 'Päivämäärä',
	'SORT_ACTION'	=> 'Tapahtuma',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Kiitos, että valitsit phpBB:n Keskustelufoorumiksesi. Tällä sivulla näet pikaisen silmäyksen erilaisista tilastoinneista. vasemmalla puolella olevilla linkeillä voit muokata kaikkia foorumiin liittyviä asetuksia autten saamaan kaiken irti foorumikokemuksistasi. Jokaisella sivulla on ohjeet kuinka työkalua käytetään.',
	'ADMIN_LOG'					=> 'Ylläpidon suorittamat toimenpiteet',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Tässä on viisi viimestä ylläpidon suorittamaa toimenpidettä. Voit katsoa täydelliset logitiedot tietyillä asetuksilla seuraamalla alapuolella olevaa linkkiä.',
	'AVATAR_DIR_SIZE'			=> 'Avatar-hakemiston koko',

	'BOARD_STARTED'		=> 'Keskustelufoorumi käynnistyi',
	'BOARD_VERSION'		=> 'Keskustelufoorumin versio',

	'DATABASE_SERVER_INFO'	=> 'Tietokantapalvelin',
	'DATABASE_SIZE'			=> 'Tietokannan koko',

	'FILES_PER_DAY'		=> 'Liitetiedostoja päivässä',
	'FORUM_STATS'		=> 'Keskustelufoorumin tilastot',

	'GZIP_COMPRESSION'	=> 'Gzip-pakkaus',

	'NOT_AVAILABLE'		=> 'Ei saatavilla',
	'NUMBER_FILES'		=> 'Liitetiedostojen lukumäärä',
	'NUMBER_POSTS'		=> 'Viestien lukumäärä',
	'NUMBER_TOPICS'		=> 'Viestiketjujen lukumäärä',
	'NUMBER_USERS'		=> 'Käyttäjät',
	'NUMBER_ORPHAN'		=> 'Orvot liitetiedostot',

	'POSTS_PER_DAY'		=> 'Viestiä päivässä',

	'PURGE_CACHE'			=> 'Tyhjennä välimuisti',
	'PURGE_CACHE_CONFIRM'	=> 'Haluatko varmasti tyhjentää välimuistin?',
	'PURGE_CACHE_EXPLAIN'	=> 'Tyhjennä kaikki välimuistiin liittyvät asiat. Tähän kuuluu mallineet ja suoritetut kyselyt',

	'RESET_DATE'					=> 'Muuta Keskustelufoorumin aloituspäivämäärä',
	'RESET_DATE_CONFIRM'			=> 'Haluatko varmasti asettaa aloituspäivämäärän uudestaan?',
	'RESET_ONLINE'					=> 'Muuta vierailleiden käyttäjien määrää',
	'RESET_ONLINE_CONFIRM'			=> 'Haluatko varmasti muuttaa vierailleiden käyttäjien määrää?',
	'RESYNC_POSTCOUNTS'				=> 'Synkronoi viestien lukumäärä',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Vain olemassaolevat viestit lasketaan. Siivottuja viestejä ei huomioida.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Haluatko varmasti laskea viestien lukumäärän uudelleen?',
	'RESYNC_POST_MARKING'			=> 'Synkronoi omien vastausten näyttö',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Haluatko varmasti synkronoida omat vastaukset?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Poistaa ensin merkinnänä kaikista viesteistä ja laskee sen jälkeen uusiksi kaikki viestit, joissa on ollut toimintaa viimeisen puolen vuoden aikana.',
	'RESYNC_STATS'					=> 'Synkronoi tilastot',
	'RESYNC_STATS_CONFIRM'			=> 'Haluatko varmasti synkronoida tilastot?',
	'RESYNC_STATS_EXPLAIN'			=> 'Laskee viestit, viestiketjut, käyttäjät ja tiedostot uudelleen.',
	'RUN'							=> 'Suorita',

	'STATISTIC'					=> 'Tilastot',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Synkronoi tai nollaa tilastot',

	'TOPICS_PER_DAY'	=> 'Viestiketjuja päivässä',

	'UPLOAD_DIR_SIZE'	=> 'Liitetiedostojen hakemiston koko',
	'USERS_PER_DAY'		=> 'Käyttäjiä päivässä',

	'VALUE'					=> 'Arvo',
	'VIEW_ADMIN_LOG'		=> 'Katso ylläpidon logitietoja',
	'VIEW_INACTIVE_USERS'	=> 'Näytä vahvistamattomat käyttäjät',

	'WELCOME_PHPBB'			=> 'Tervetuloa phpBB:hen',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Tunnukset sulkeutuivat',
	'INACTIVE_REASON'				=> 'Syy',
	'INACTIVE_REASON_MANUAL'		=> 'Ylläpitäjä sulki tunnukset',
	'INACTIVE_REASON_PROFILE'		=> 'Profiilin tietoja muokattiin',
	'INACTIVE_REASON_REGISTER'		=> 'Uusi käyttäjätunnus',
	'INACTIVE_REASON_REMIND'		=> 'Käyttäjä on pakotettu vahvistamaan tunnuksensa',
	'INACTIVE_REASON_UNKNOWN'		=> 'Tuntematon',
	'INACTIVE_USERS'				=> 'Vahvistamattomat käyttäjät',
	'INACTIVE_USERS_EXPLAIN'		=> 'Tässä on lista juuri rekisteröityneistä käyttäjistä, joiden käyttäjätunnukset vaativat vielä vahvistuksen. Voit halutessasi aktivoida, poistaa tai muistuttaa käyttäjää (lähettämällä sähköpostia).',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Tässä listassa on kymmenen viimeisintä käyttäjää, joiden tunnukset ovat suljetut. Voit katsoa koko listan menemällä oikeaan paikkaan hallinnassa tai klikkaamalla alapuolella olevaa linkkiä. Voit halutessasi aktivoida, poistaa tai muistuttaa käyttäjää (lähettämällä sähköpostia).',

	'NO_INACTIVE_USERS'	=> 'Ei vahvistamattomia käyttäjiä',

	'SORT_INACTIVE'		=> 'Päiväys',
	'SORT_LAST_VISIT'	=> 'Viimeksi vieraillut',
	'SORT_REASON'		=> 'Syy',
	'SORT_REG_DATE'		=> 'Rekisteröitymispäivämäärä',

	'USER_IS_INACTIVE'		=> 'Käyttäjätunnus ei ole aktiivinen',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Lisäsi tai muokkasi käyttäjän käyttäjäoikeuksia</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Lisäsi tai muokkasi ryhmän käyttäjäoikeuksia</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Lisäsi tai muokkasi käyttäjän valvojan oikeuksia</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Lisäsi tai muokkasi ryhmän valvojan oikeuksia</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Lisäsi tai muokkasi käyttäjän ylläpitäjän oikeuksia</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Lisäsi tai muokkasi ryhmän ylläpitäjän oikeuksia</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Lisäsi tai muokkasi Ylläpitäjiä</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Lisäsi tai muokkasi valvojia</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Lisäsi tai muokkasi Käyttäjän pääsyä alueelle</strong> mistä %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Lisäsi tai muokkasi Käyttäjän valvojan oikeutta</strong> mistä %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Lisäsi tai muokkasi ryhmän pääsyä alueelle</strong> mistä %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Lisäsi tai muokkasi Ryhmän valvojien oikeutta</strong> mistä %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Lisäsi tai muokkasi Valvojia</strong> mistä %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Lisäsi tai muokkasi Keskustelualueen oikeuksia</strong> mistä %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Poisti Ylläpitäjiä</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Poisti valvojia</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Poisti Valvojia</strong> mistä %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Poisti Käyttäjän/Ryhmän oikeudet keskustelualueella</strong> mistä %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Siirsi oikeudet käyttäjältä</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Palautti omat oikeutensa testattuaan käyttäjää</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Epäonnistunut kirjautuminen ylläpitoon</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Onnistunut kirjautuminen ylläpitoon</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Poisti liitetiedostot käyttäjältä</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Lisäsi tai muokkasi Liitetiedostojen tunnisteita</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Poisti liitetiedoston tunnisteen</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Päivitti liitetiedoston tunnisteen</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Lisäsi tunnisteiden ryhmän</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Muokkasi tunnisteiden ryhmää</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Poisti tunnisteiden ryhmän</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Orpo tiedosto liitetty viestiin</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Orvot tiedostot poistettu</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Jätti huomioimatta porttikiellon käyttäjältä</strong> syy "<i>%1$s</i>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Jätti huomioimatta IP-osoitteen porttikiellosta</strong> syy "<i>%1$s</i>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Jätti huomioimatta sähköpostiosoitteen porttikiellosta</strong> syy "<i>%1$s</i>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Antoi porttikiellon käyttäjälle</strong> syy "<i>%1$s</i>"<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>Antoi porttikiellon IP-osoitteella</strong> syy "<i>%1$s</i>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Antoi porttikiellon sähköpostiosoitteelle</strong> syy "<i>%1$s</i>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Poisti porttikiellon käyttäjältä</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Poisti porttikiellon IP-osoitteelta</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Poisti porttikiellon sähköpostiosoitteelta</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Lisäsi uuden BBCoden</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Muokkasi BBCodea</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Poisti BBCoden</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Uusi botti lisätty</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Poisti botin</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Päivitti olemassa olevan otin</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Tyhjensi ylläpidon login</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Tyhjensi virhelogin</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Tyhjensi valvojien login</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Tyhjensi käyttäjä login</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Tyhjensi käyttäjien login</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Muutti liitetiedostojen asetuksia</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Muutti tunnistautumisen asetuksia</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Muutti avatar asetuksia</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Muutti evästeiden asetuksia</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Muutti sähköpostiasetuksia</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Muutti foorumin ominaisuuksia</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Muutti Kuormituksen asetuksia</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Muutti yksityisviestien asetuksia</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Muutti viestien lähettämisen asetuksia</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Muutti rekisteröitymisen asetuksia</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Muutti hakutoiminnon asetuksia</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Muutti tietoturva asetuksia</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Muutti palvelimen asetuksia</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Muutti foorumin asetuksia</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Muutti allekitjoituksen asetuksia</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Muutti visuaalisen varmennuksen asetuksia</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Hyväksyi viestiketjun</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Käyttäjä tönäisi omaa viestiketjuaan</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Poisti viestin</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Poisti viestiketjun</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Kopioi viestiketjun</strong><br />» alueelta %s',
	'LOG_LOCK'					=> '<strong>Lukitsi viestiketjun</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Lukitsi viestin</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>yhdisti viestiketjun</strong> viestiketjuun<br />»%s',
	'LOG_MOVE'					=> '<strong>Siirsi viestiketjun</strong><br />» alueelta %s',
	'LOG_POST_APPROVED'			=> '<strong>Approved post</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Hylkäsi viestin “%1$s” ja antoi syyn</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Muokkasi viestiä “%1$s” Kirjoittanut</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Sulki ilmoituksen</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Poisti ilmoituksen</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Siirsi jaetut viestit</strong><br />» alueelle %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Jakoi viestit</strong><br />» from %s',

	'LOG_TOPIC_DELETED'			=> '<strong>Poisti viestiketjun</strong><br />» %s',
	'LOG_TOPIC_APPROVED'		=> '<strong>Hyväksyi viestiketjun</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Hylkäsi viestiketjun “%1$s” ja antoi syyn</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Synkronoi viestien laskurit</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Vaihtoi viestiketjun tyyppiä</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Avasi viestiketjun </strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Avasi viestin</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Lisäsi sallimattoman käyttäjätunnuksen</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Poisti sallimattoman käyttäjätunnuksen</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Tietokannan varmuuskopio</strong>',
	'LOG_DB_DELETE'			=> '<strong>Poisti tietokannan varmuuskopion</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Tietokannan palautus</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Jätti huomioimatta IP:n/isäntänimen latauslistasta</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Lisäsi IP:n/isäntänimen latauslistaan</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Poisti IP:n/isäntänimen latauslistasta</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber Virhe</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Sähköposti Virhe</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Loi uuden alueen</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Poisti alueen</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Poisti alueen ja sisäalueen</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Poisti alueen ja siirsi sisäalueet</strong> alueelle %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Poisti alueen ja siirsi viestit </strong> alueelle %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Poisti alueen ja sisäalueet, siirsi viestit</strong> alueelle %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Poisti alueen, siirsi viestit</strong> alueelle %1$s <strong>ja sisäalueelle</strong> alueelle %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Poisti alueen ja sen viestit</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Poisti alueen, sen viestit ja sisäalueet</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Poisti alueen ja sen viestit, siirsi sisäalueet</strong> alueelle %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Muokkasi alueen yksityiskohtia</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Siirsi alueen</strong> %1$s <strong>alas</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Siirsi alueen</strong> %1$s <strong>ylös</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Synkronoi alueen</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>Loi uuden käyttäjäryhmän</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Teki ryhän käyttäjien oletusryhmäksi</strong><br />» %s',
	'LOG_GROUP_DELETE'		=> '<strong>Poisti käyttäjäryhmät</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Ryhmänvalvojia alennettu</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Tavallinen käyttäjä ylennetty ryhmän valvojaksi</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Käyttäjiä poistettu ryhmästä</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Käyttäjäryhmän tiedot päivitetty</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>lisäsi valvojia käyttäjäryhmään</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Hyväksyi käyttäjiä ryhmän jäseneksi</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Lisäsi uusia jäseniä käyttäjäryhmään</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'		=> '<strong>Lisäsi uuden kuvapaketin tietokantaan</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'		=> '<strong>Lisäsi uuden kuvapaketin tiedostojärjestelmään</strong><br />» %s',
	'LOG_IMAGESET_DELETE'		=> '<strong>Poisti kuvapaketin</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'	=> '<strong>Muokkasi kuvapaketin tietoja</strong><br />» %s',
	'LOG_IMAGESET_EDIT'			=> '<strong>Muokkasi kuvapakettia</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'		=> '<strong>Vei kuvapaketin</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Kuvapaketista puuttuu “%2$s” lokalisoitu versio</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Virkisti “%2$s” Lokalisoidun kuvapaketin</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'	=> '<strong>Virkisti kuvapaketin</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Aktivoi aktivoimattomat käyttäjät</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Poisti aktivoimattomat käyttäjät</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Lähetti muistutuksen aktivoimattomille käyttäjille</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Konvertoi %1$s ohjelmasta phpBB:hen %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Asensi phpBB %s ohjelman</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Session IP/browser/X_FORWARDED_FOR tarkistus epäonnistui</strong><br />»Käyttäjän IP "<em>%1$s</em>" Tarkistettiin istunnon IP:tä vasten "<em>%2$s</em>", käyttäjän selaimen merkkijono "<em>%3$s</em>" tarkistettiin käyttäjän istunnon selaimen merkkijonoa vasten "<em>%4$s</em>" ja käyttäjän X_FORWARDED_FOR merkkijono "<em>%5$s</em>" tarkistettiin käyttäjän istunnon X_FORWARDED_FOR merkkijonoa vasten "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber tiliä muutettu</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber salasana muutettu</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber tili rekisteröity</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber asetuksia muutettu</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Poisti kielipaketin</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Asensi kielipaketin</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Päivitti kielipaketin tiedot</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Vaihtoi kielitiedoston</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Lähetti kielitiedoston muokkauksen ja laittoi muutokset store-hakemistoon</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Lähetti joukkopostia</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Vaihtoi viestin kirjoittajaa viestiketjussa "%1$s"</strong><br />» käyttäjästä %2$s käyttäjäksi %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Moduuli on poistettu käytöstä</strong>',
	'LOG_MODULE_ENABLE'		=> '<strong>Moduuli on otettu käyttöön</strong>',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>siirsi moduulia alaspäin</strong><br />» %s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Siirsi moduulia ylöspäin</strong><br />» %s',
	'LOG_MODULE_REMOVED'	=> '<strong>Poisti moduulin</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Lisäsi moduulin</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Muokkasi moduulia</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Lisäsi ylläpitäjän roolin</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Muokkasi ylläpitäjän roolia</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Poisti ylläpitäjän roolin</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Lisäsi alueen roolin</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Muokkasi alueen roolia</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Poisti alueen roolin</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Lisäsi valvojan roolin</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Muokkasi valvojan roolia</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Poisti valvojan roolin</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Lisäsi käyttäjän roolin</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Muokkasi käyttäjän roolia</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Poisti käyttäjän roolin</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Aktivoi profiilikentän</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Lisäsi profiilikentän</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Poisti profiilikentän käytöstä</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Muutti profiilikenttää</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Poisti profiilikentän</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Siivosi keskustelualueet</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>siivosi keskustelualueet automaattisesti</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Suljetut käyttäjät</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Käyttäjiä siivottu ja viestejä poistettu</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Käyttäjiä siivottu ja viestit jätetty</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Tyhjensi välimuistin</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Lisäsi uuden arvonimen</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Poisti arvonimen</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Päivitti arvonimen</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Jätti ilmoituksen/hylkäyksen syyn</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Poisti ilmoituksen/hylkäyksen syyn</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Päivitti ilmoituksen/hylkäyksen syyn</strong><br />» %s',

	'LOG_RESET_DATE'			=> '<strong>Muutti keskustelufoorumin aloituspäivää</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Muutti käyttäjäennätyksen määrää</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Synkronoi käyttäjien viestien määrän</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Synkronoi pisteistetyt viestiketjut</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Päivitti viestin, viestiketjun ja käyttäjien tilastot</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Loi sisällysluettelon</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Poisti sisällysluettelon</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Lisäsi uuden tyylin</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Poisti tyylin</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Muokkasi tyyliä</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Vei tyylin</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Lisäsi uuden malline paketin tietokantaan</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>ALisäsi uuden malline paketin tiedostojärjestelmään</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Poisti mallinepaketin tiedostot välimuistista <i>%1$s</i></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Poisti mallinepaketin</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Muokaksi mallinepakettia <i>%1$s</i></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Muokkasi mallineen tietoja</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Vei mallinepaketin</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Virkisti mallinepaketin</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Lisäsi uuden teeman tietokantaan</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Lisäsi uuden teeman tiedostojärjestelmään</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Poisti teeman</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Muokkasi teeman tietoja</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Muokkasi teemaa <i>%1$s</i></strong><br />» muokattu luokka <i>%2$s</i>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Muokkasi teemaa <em>%1$s</em></strong><br />» Muokkasi tiedostoa <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Vei teeman</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Virkisti teeman</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Päivitti tietokannan versiosta %1$s versioon %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Päivitti phpBB:n versiosta %1$s versioon %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Aktivoi käyttäjätunnukset</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Antoi porttikeillon käyttäjälle käyttäjien hallinnasta</strong> syy "<i>%1$s</i>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Antoi porttikiellon IP-osoitteelle</strong> syy "<i>%1$s</i>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Antoi porttikiellon sähköpostiooitteelle käyttäjien hallinnasta</strong> syy "<i>%1$s</i>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Poisti käyttäjän</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Poisti kaikki käyttäjän lähettämät liitetiedostot</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Poisti avatarin</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Poisti kaikki käytäjän tekemät viestit</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Poisti allekirjoituksen</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Sulki käyttäjätununkset</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Siirsi käyttäjän viestit</strong><br />» kirjoittanut "%1$s" , alueelle "%2$s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>vaihtoi käyttäjän salasanaa</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Pakotti käyttäjän varmistamaan tunnuksensa</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Käyttäjä "%1$s" vaihtoi sähköpostiosoitetta</strong><br />» osoitteesta "%2$s" osoitteeksi "%3$s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Vaijtoi käyttäjätunnusta</strong><br />» vanha "%1$s" uusi "%2$s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>Päivitti käyttäjän tiedot</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Aktivoi käyttäjätunnukset</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Poisti avatarin</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Poisti allekirjoituksen</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Antoi palautetta käyttäjästä</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Lisäsi viitteen:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Käyttäjätunnukset sulkeutuivat</strong>',
	'LOG_USER_LOCK'				=> '<strong>Käyttäjä sulki oman viestiketjunsa</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Siirsi kaikki viestit alueelle "%s"</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Pakotti käyttäjätunnusten uudelleen aktivoinnin</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Käyttäjä avasi oman viestiketjunsa</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Lisäsi varoituksen käyttäjälle</strong><br />»%s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Tämä varoitus annettiin käyttäjälle</strong><br />»%s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Käyttäjä vaihtoi oletusryhmäänsä</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Käyttäjä on alennettu ryhmän valvojasta</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Käyttäjä liittyi ryhmään</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Käyttäjä liittyi ryhmään, mutta tarvitsee hyväksynnän</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Käyttäjä erosi ryhmästä</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Lisäsi sensuroitavan sanan</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Poisti sensuroitavan sanan</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Muokkasi sanojen sensurointia</strong><br />» %s',
));

?>