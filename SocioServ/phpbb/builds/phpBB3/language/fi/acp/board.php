<?php
/** 
*
* acp_board [Finnish [Fin]]
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Täällä voit määrittää keskustelufoorumisi perusasetukset sivuston nimestä rekisteröitymiseen ja yksityisviestien asetuksiin.',
	'CUSTOM_DATEFORMAT'				=> 'Mukautettu...',
	'DEFAULT_DATE_FORMAT'			=> 'Päivämäärän muoto',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Päivämäärä on yhteneväinen PHP:n date funktion kanssa.',
	'DEFAULT_LANGUAGE'				=> 'Oletuskieli',
	'DEFAULT_STYLE'					=> 'Oletustyyli',
	'DISABLE_BOARD'					=> 'Ota keskustelufoorumi pois käytöstä',
	'DISABLE_BOARD_EXPLAIN'			=> 'Tämä sulkee keskustelufoorumin käyttäjiltä. Voit antaa myös lyhyen (255 merkkiä) viestin näytettäväksi käyttäjille.',
	'OVERRIDE_STYLE'				=> 'Ohita käyttäjän asettama tyyli',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Vaihtaa käyttäjän asettaman tyylin oletustylillä.',
	'SITE_DESC'						=> 'Sivuston kuvaus',
	'SITE_NAME'						=> 'Sivuston nimi',
	'SYSTEM_DST'					=> 'Ota kesä-aika käyttöön/<abbr title="Kesä-aika">DST</abbr>',
	'SYSTEM_TIMEZONE'				=> 'Järjestelmän aikavyöhyke',
	'WARNINGS_EXPIRE'				=> 'Varoitusten kesto',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Kuinka monta päivää annettu varoitus pysyy voimassa ennen kuin se poistetaan käyttäjän tiedoista',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Täällä voit ottaa ja poistaa käytöstä useita keskustelufoorumin ominaisuuksista',

	'ALLOW_ATTACHMENTS'			=> 'Salli liitetiedostot',
	'ALLOW_BIRTHDAYS'			=> 'Salli syntymäpäivät',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Sallii syntymäajan syöttämisen ja syntymäpäivän näyttämisen profiilissa. Huomaa, että keskustelufoorumin etusivulla olevaa syntymäpäivälistaa hallitaan erikseen kuormituksen asetuksilla.',
	'ALLOW_BOOKMARKS'			=> 'Salli kirjanmerkkien lisääminen',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Käyttäjä voi lisätä henkilökohtaisia kirjanmerkkejä',
	'ALLOW_BBCODE'				=> 'Salli BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Salli alueen seuraaminen',
	'ALLOW_NAME_CHANGE'			=> 'Salli käyttäjätunnuksen vaihtaminen',
	'ALLOW_NO_CENSORS'			=> 'Salli sensuroinnin ohittaminen',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Käyttäjä voi ottaa sanojen sensuroinnin pois päältä.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Salli liitetiedostot yksityisviesteissä',
	'ALLOW_SIG'					=> 'Salli allekirjoitukset',
	'ALLOW_SIG_BBCODE'			=> 'Salli BBCoden käyttö allekirjoituksissa',
	'ALLOW_SIG_FLASH'			=> 'Salli <code>[FLASH]</code> BBCode Tagin käyttö allekirjoituksessa',
	'ALLOW_SIG_IMG'				=> 'Salli <code>[IMG]</code> BBCode Tagin käyttö allekirjoituksessa',
	'ALLOW_SIG_LINKS'			=> 'Salli linkkien käyttö allekirjoituksissa',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Jos tätä ei ole sallittu. <code>[URL]</code> bbcode tagi ja automaattiset URLit ovat poissa käytöstä.',
	'ALLOW_SIG_SMILIES'			=> 'Salli hymiöiden käyttö allekirjoituksessa',
	'ALLOW_SMILIES'				=> 'Salli hymiöt',
	'ALLOW_TOPIC_NOTIFY'		=> 'Salli keskusteluketjun seuraaminen',
	'BOARD_PM'					=> 'Yksityisviestit',
	'BOARD_PM_EXPLAIN'			=> 'Ota käyttöön tai poista yksityisviestien käyttö kaikilta käyttäjiltä.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatarit ovat yleensä pieniä, uniikkeja kuvia joita käyttäjä voi määritellä itsellensä. Riippuen käytössä olevasta tyylistä. Avatarit näytetään usein käyttäjätunnuksen alla viestiä luettaessa. Täällä voit määritellä kuinka käyttäjät voivat käyttää avatar-kuvia. Huomaa, mikäli sallit käyttäjien siirtää avatarin palvelimelle. Sitä varten tulee luoda oma hakemistonsa alapuolelle ja palvelimen on pystyttävä kirjoittamaan siihen. Huomaa myös, että tiedostojen kokorajoitukset toimivat vain tiedostoihin, jotka ovat siirretty palvelimelle. Ne eivät toimi linkitetyissä kuvissa.',

	'ALLOW_LOCAL'					=> 'Ota avatar galleria käyttöön',
	'ALLOW_REMOTE'					=> 'Ota linkitetyt avatarit käyttöön',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Toiselta sivustolta linkitetyt avatarit',
	'ALLOW_UPLOAD'					=> 'Salli avatarien siirto palvelimelle',
	'AVATAR_GALLERY_PATH'			=> 'Avatar gallerian polku',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Esiasennettujen kuvien hakemistopolku keskustelufoorumin pääjuuresta, esim, <samp>images/avatars/gallery</samp>',
	'AVATAR_STORAGE_PATH'			=> 'Avatarin tallennuspolku',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Polku keskustelufoorumin pääjuuresta, esim, <samp>images/avatars/upload</samp>',
	'MAX_AVATAR_SIZE'				=> 'Avatarin maksimi koko',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> '(Korkeus x leveys pikseleinä)',
	'MAX_FILESIZE'					=> 'Avatar tiedoston maksimikoko',
	'MAX_FILESIZE_EXPLAIN'			=> 'Palvelimelle siirrettyjä Avatar tiedostoja varten',
	'MIN_AVATAR_SIZE'				=> 'Avatar tiedoston minimi koko',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> '(Korkeus x leveys pikseleinä)',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Täällä voit määritellä kaikki yksityisviestien oletusasetukset.',

	'ALLOW_BBCODE_PM'			=> 'Salli BBCoden käyttö yksityisviesteissä',
	'ALLOW_FLASH_PM'			=> 'Salli <code>[FLASH]</code> BBCode Tagin käyttö',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Huomaa, vaikka flash tiedoston lähetys olisi sallittu yksityisviesteissä, vaikka se olisi sallittu tässä, riippuu myös oikeuksista.',
	'ALLOW_FORWARD_PM'			=> 'Salli yksitysiviestin lähettäminen eteenpäin',
	'ALLOW_IMG_PM'				=> 'Salli <code>[IMG]</code> BBCode Tagin käyttö',
	'ALLOW_MASS_PM'				=> 'Salli yksityisviestin lähettäminen usealle käyttäjälle ja käyttäjäryhmälle',
	'ALLOW_PRINT_PM'			=> 'Salli tulostusnäkymä yksitysiviesteissä',
	'ALLOW_QUOTE_PM'			=> 'Salli viestin lainaaminen yksitysiviesteissä',
	'ALLOW_SIG_PM'				=> 'Salli allekirjoitukset yksityisviesteissä',
	'ALLOW_SMILIES_PM'			=> 'Salli hymiöiden käyttäminen yksityisviesteisä',
	'BOXES_LIMIT'				=> 'Maksimimäärä viestejä per laatikko',
	'BOXES_LIMIT_EXPLAIN'		=> 'Käyttäjä voi ottaa vastaan vain tämä verran viestejä luomiinsa laatikoihin. Nolla poistaa rajoituksen käytöstä.',
	'BOXES_MAX'					=> 'Maksimimäärä yksityisviestien kansioita',
	'BOXES_MAX_EXPLAIN'			=> 'Oletuksena käyttäjä voi luoda vain tämän verran henkilökohtaisia kansioita yksityisviesteillensä.',
	'ENABLE_PM_ICONS'			=> 'Ota keskustelukuvakkeet käyttöön yksityisviesteissä',
	'FULL_FOLDER_ACTION'		=> 'Täydessä kansiossa suoritettava oletustoimenpide',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Oletustoimenpiden käyttäjän postilaatikon täyttyessä ja mikäli käyttäjän laatikon asetuksia ei voida käyttää. "Lähetetyt" kansion oletustoimenpide on vanhojen viestien poistaminen.',
	'HOLD_NEW_MESSAGES'			=> 'Pidätä uudet viestit',
	'PM_EDIT_TIME'				=> 'Rajoita muokkausaikaa',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Kuinka pitkän aikaa viesti on vielä lähetyksen jälkeen muokattavissa, mikäli vastaanottaja ei ole sitä lukenut. Nolla poistaa rajoituksen käytöstä',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Täällä voit muuttaa viestien lähetyksen oletusasetuksia',
	'ALLOW_POST_LINKS'					=> 'Salli linkkien käyttö viesteissä ja yksityisviesteissä',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Jos tämä ei ole sallittu. <code>[URL]</code> BBCode tag ja automaattiset URLit poistetaan käytöstä.',
	'ALLOW_POST_FLASH'					=> 'Salli <code>[FLASH]</code> BBCode tagin käyttö viesteissä. ',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Mikäli tätä ei ole sallittu, <code>[FLASH]</code> BBCode tagin käyttö on estetty viesteissä. Muussa tapauksessa oikeuksien järjestelmä määrittelee, ketkä voivat käyttää <code>[FLASH]</code> BBCode tagia.',

	'BUMP_INTERVAL'					=> 'Tönäisyn aikaraja',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Aikaraja minuutteina, tunteina tai päivinä viimeisestä viestistä, jonka jälkeen viestiketjun voi tönäistä.',
	'CHAR_LIMIT'					=> 'Viestin maksimi määrä merkkejä',
	'CHAR_LIMIT_EXPLAIN'			=> 'Nolla poistaa rajoituksen käytöstä.',
	'DISPLAY_LAST_EDITED'			=> 'Näytä viimeksi muokattu informaatio',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Valitse, näytetäänkö muokkausinformaatio viestin yhteydessä',
	'EDIT_TIME'						=> 'Muokkauksen aikaraja',
	'EDIT_TIME_EXPLAIN'				=> 'Kuinka kauan viesti on lähettäjän muokattavissa lähetyksen jälkeen. Nolla poistaa rajoituksen',
	'FLOOD_INTERVAL'				=> 'Viestin lähetyksen rajoittaminen',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Kuinka monta sekunttia käyttäjän on odotettava ennen kuin voi lähettää uuden viestin. Mikäli haluat käyttäjän ohittavan tämän rajan. Muokkaa heidän oikeuksiansa.',
	'HOT_THRESHOLD'					=> 'Viestien määrä keskusteluketjussa, jonka jälkeen se merkitään suosituksi. Nolla poistaa merkitsemisen suosituksi.',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Kuinka monta viestiä tarvitaan, jotta viesti voidaan merkitä suosituksi. Aseta 0 poistaaksesi toiminon käytöstä.',
	'MAX_POLL_OPTIONS'				=> 'Äänestysten vaihtoehtojen lukumäärä',
	'MAX_POST_FONT_SIZE'			=> 'Viestissä olevan fontin maksimikoko',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'MAX_POST_IMG_HEIGHT'			=> 'Viestissä olevan kuvan maksimi korkeus',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Viestissä olevan kuvan/flash tiedoston maksimi korkeus. Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'MAX_POST_IMG_WIDTH'			=> 'Viestissä olevan kuvan maksimi leveys',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Viestissä olevan kuvan/flash tiedoston maksimi leveys. Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'MAX_POST_URLS'					=> 'Viestissä olevien linkkien maksimi määrä.',
	'MAX_POST_URLS_EXPLAIN'			=> 'Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'POSTING'						=> 'Viestien lähetys',
	'POSTS_PER_PAGE'				=> 'Viestiä per sivu',
	'QUOTE_DEPTH_LIMIT'				=> 'Viestissä olevien lainauksien maksimi määrä',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'SMILIES_LIMIT'					=> 'Viestissä olevien hymiöiden maksimi määrä',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'TOPICS_PER_PAGE'				=> 'Viestiketjua per sivu',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Täällä voit muuttaa allekirjoitusten oletusasetuksia',

	'MAX_SIG_FONT_SIZE'				=> 'Fontin maksimi koko',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Allekirjoituksessa käytettävän fontin maksimi koko. Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Kuvan maksimi koko',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Allekirjoituksessa käytettävän kuva tai flash tiedoston maksimi koko. Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'MAX_SIG_IMG_WIDTH'				=> 'Kuvan maksimi leveys',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Allekirjoituksessa käytettävän kuva tai flash tiedoston maksimi leveys. Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'MAX_SIG_LENGTH'				=> 'Allekirjoituksen maksimi pituus',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Kuinka monta merkkiä käyttäjä voi kirjoittaa allekirjoitukseensa.',
	'MAX_SIG_SMILIES'				=> 'Hymiöiden maksimi määrä allekirjoituksessa',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Kuinka monta hymiötä käyttäjä voi lisätä allekirjoitukseensa. Aseta nolla poistaaksesi rajoituksen käytöstä.',
	'MAX_SIG_URLS'					=> 'Allekirjoituksessa olevien linkkien määrä',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Kuinka monta linkkiä käyttäjä voi lisätä allekirjoitukseensa. Aseta nolla poistaaksesi rajoituksen käytöstä.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Täällä voit määritellä rekisteröitymiseen ja profiiliin liittyviä asetuksia.',

	'ACC_ACTIVATION'			=> 'Käyttäjätunnusten aktivointi',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Tämä määrittelee. Pääseekö käyttäjä suoraan keskustelufoorumille vai tarvitseeko käyttäjätunnukset varmentaa ensin. Voit myös poistaa rekisteröitymisen kokonaan käytöstä.',
	'ACC_ADMIN'					=> 'Ylläpito',
	'ACC_DISABLE'				=> 'Poista käytöstä',
	'ACC_NONE'					=> 'Ei kukaan',
	'ACC_USER'					=> 'Käyttäjä',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Salli sähköpostiosoitteen uudelleenkäyttö',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Sallii eri käyttäjien rekisteröityä käyttämällä samaa sähköpostiosoitetta.',
	'COPPA'						=> 'Coppa',
	'COPPA_FAX'					=> 'COPPA Fax numero',
	'COPPA_MAIL'				=> 'COPPA Postitus osoite',
	'COPPA_MAIL_EXPLAIN'		=> 'Vanhemmat lähettävät COPPA rekisteröitymislomakkeen tähän osoitteeseen',
	'ENABLE_COPPA'				=> 'Ota COPPA käyttöön',
	'ENABLE_COPPA_EXPLAIN'		=> 'Tämä vaatii uutta käyttäjää kertomaan onko hän yli- vai alle kolmetoista vuotias. Tämä on yhteensopiva U.S. COPPA lain kanssa. Mikäli tämä on poissa käytöstä. COPPA käyttäjäryhmiä ei näytetä.',
	'MAX_CHARS'					=> 'Max',
	'MIN_CHARS'					=> 'Min',
	'NO_AUTH_PLUGIN'			=> 'Sopivaa tunnistautumisen liitännäistä ei löytynyt.',
	'PASSWORD_LENGTH'			=> 'Salasanan pituus',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Minimi ja maksimimäärät merkkejä salasanassa.',
	'REG_LIMIT'					=> 'Rekisteröintiyritykset',
	'REG_LIMIT_EXPLAIN'			=> 'Kuinka monta kertaa käyttäjä voi kokeilla varmistuskoodin syöttöä, kunnes hänet lukitaan ulkopuolelle.',
	'USERNAME_ALPHA_ONLY'		=> 'Vain alphanumeeriset',
	'USERNAME_ALPHA_SPACERS'	=> 'Vain alphanumeeriset ja välimerkit',
	'USERNAME_ASCII'			=> 'ASCII (Ei kansainvälistä unicodea)',
	'USERNAME_LETTER_NUM'		=> 'Mikä tahansa kirjain tai numero',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Mikä tahansa kirjain, numero tai välimerkki',
	'USERNAME_CHARS'			=> 'Rajoita käyttäjätunnusten pituus',
	'USERNAME_CHARS_ANY'		=> 'Mikä tahansa merkki',
	'USERNAME_CHARS_EXPLAIN'	=> 'Rajoita millaisia merkkejä käyttäjä voi sisällyttää käyttäjätunnuksiinsa. Välimerkkejä ovat; välilyönti, -, +, _, [ ja ]',
	'USERNAME_LENGTH'			=> 'Käyttäjätunnuksen pituus',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Käyttäjätunnuksessa olevien merkkien minimi ja maksimi määrät.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Täällä voit muokata visuaalisen varmistuksen oletusasetuksia, sekä CAPTCHA-asetuksia.',

	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD CAPTCHAn etualan meteli',
	'CAPTCHA_GD_EXPLAIN'					=> 'Käytä GD:tä tehdäksesi edistyneemmän CAPTCHA-kuvan.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Käytä etualan meteliä tehdäksesi GD:hen perustuvasta CAPTCHA-kuvasta vaikeamman.',
	'CAPTCHA_GD_X_GRID'						=> 'GD CAPTCHAn taustan meteli x-akseli',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Käytä pienempää asetusta tehdäksesi GD:hen perustuvasta CAPTCHA-kuvasta vaikeamman. 0 poistaa x-akselilta taustametelin.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD CAPTCHAn taustan meteli y-akseli',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Käytä pienempää asetusta tehdäksesi GD:hen perustuvasta CAPTCHA-kuvasta vaikeamman. 0 poistaa y-akselilta taustametelin.',

	'CAPTCHA_PREVIEW_MSG'					=> 'Visuaaliseen varmistukseen tekemiäsi muutoksia ei ole tallennettu. Tämä on vain esikatselu.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'CAPTCHA kuva sellaisena, jolta se näyttää nykyisillä asetuksilla. Käytä esikatselu nappulaa päivittääksesi sivun. Huomaa, että varmistuskuva on satunnainen ja muuttuu jokaisella päivityskerralla.',
	'VISUAL_CONFIRM_POST'					=> 'Ota visuaalinen varmennus käyttöön vierailijoille',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Vaatii vierailevaa käyttäjää syöttämään varmistuskoodin estäen näin roskapostitusta.',
	'VISUAL_CONFIRM_REG'					=> 'Ota visuaalinen varmennus käyttöön rekisteröitymiseen',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Vaatii käyttäjän syöttämään varmistuskoodin rekisteröitymisen yhteydessä estäen näin automaattisia rekisteröitymisiä.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Nämä asetukset määrittävät kuinka evästeet lähetetään käyttäjiesi selaimeen. Useimmissa tapauksissa oletusasetusten pitäisi olla riittävät. Mikäli joudut muuttamaan näitä. Ole varovainen, sillä väärät asetukset voivat estää käyttäjiä kirjautumasta sisään.',

	'COOKIE_DOMAIN'				=> 'Evästeiden palvelin',
	'COOKIE_NAME'				=> 'Evästeen nimi',
	'COOKIE_PATH'				=> 'Evästeen polku',
	'COOKIE_SECURE'				=> 'Suojattu eväste',
	'COOKIE_SECURE_EXPLAIN'		=> 'Mikäli palvelimellasi on SSL käytössä. Ota tämä käyttöön. Mikäli tämä on käytössä ja palvelin ei tue SSL:ää. Se johtaa ongelmiin uudelleenohjausten kanssa.',
	'ONLINE_LENGTH'				=> 'Paikallaolijoiden listan aikaväli',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Kuinka monta minuuttia käyttäjä pysyy paikallaolijoiden listassa. Pieni arvo tarkoittaa vähemmän kuormitusta.',
	'SESSION_LENGTH'			=> 'Istunnon pituus',
	'SESSION_LENGTH_EXPLAIN'	=> 'Istunto kuoleentuu tämän ajan jälkeen. Sekuntteina.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Täällä voit ottaa ja poistaa käytöstä tiettyjä toimintoja laskeaksesi kuormituksen määrää. Useimmilla palvelimilla ei ole tarvetta poistaa mitään käytöstä. Mutta joillain järjestelmillä tai jaetussa ympäristössä toimivilla keskustelufoorumeilla saattaa olla hyötyä poistaa joitakin toimintoja käytöstä. Voit myös määritellä rajoja kuormitukselle, jonka jälkeen keskustelufoorumi sulkeutuu.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Mukautetut profiilikentät',
	'LIMIT_LOAD'					=> 'Rajoita järjestelmän kuormitusta',
	'LIMIT_LOAD_EXPLAIN'			=> 'Mikäli yhden minuutin aikana kuormitus ylittää tämän arvon. Keskustelufoorumi sulkeutuu automaattisesti, 1.0 on yhtäkuin ~100% käyttö yhdellä prosessorilla. Tämä toimii vain UNIX palvelimilla.',
	'LIMIT_SESSIONS'				=> 'Rajoita istuntoja',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Mikäli istuntojen määrä minuutissa ylittää tämän arvon. Keskustelufoorumi sulkeutuu automaattisesti. Aseta nolla salliaksesi rajoittamattoman määrän istuntoja.',
	'LOAD_CPF_MEMBERLIST'			=> 'Näytä mukautetut profiilikentät käyttäjälistassa',
	'LOAD_CPF_VIEWPROFILE'			=> 'Näytä mukautetut profiilikentät käyttäjän profiilissa',
	'LOAD_CPF_VIEWTOPIC'			=> 'Näytä mukautetut profiilikentät viestien katsonnassa',
	'LOAD_USER_ACTIVITY'			=> 'Näytä käyttäjän aktiivisuus',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Näyttää aktiivisen viestiketjun/alueen käyttäjän profiilissa ja hallintapaneelissa. On suositeltavaa poistaa tämä käytöstä niillä keskustelufoorumeilla, joissa on yli miljoona viestia',
	'RECOMPILE_STYLES'				=> 'Rakenna tyylit uudelleen',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Tarkista onko tiedostojärjestelmässä oleviin tyyleihin tullut päivityksiä ja rakenna ne tarvittaessa uudelleen.',
	'YES_ANON_READ_MARKING'			=> 'Ota viestin merkitseminen käyttöön vieraita varten',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Tallentaa luettu/lukematon tilan vierailijoilla. Mikäli poissa käytöstä. Viestit ovat aina luettuja vierailijoille.',
	'YES_BIRTHDAYS'					=> 'Ota käyttöön syntymäpäivälista',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Syntymäpäivälistausta ei näytetä, mikäli tämä on poissa käytöstä. Syntymäpäivätoiminnon tulee olla käytössä, jotta tämä asetus toimisi.',
	'YES_JUMPBOX'					=> 'Näytä hyppylaatikot',
	'YES_MODERATORS'				=> 'Näytä valvojat',
	'YES_ONLINE'					=> 'Näytä paikallaolijat',
	'YES_ONLINE_EXPLAIN'			=> 'Näytä paikallaolijat etusivulla, alueella ja viestin luku sivuilla.',
	'YES_ONLINE_GUESTS'				=> 'Näytä vierailijoiden lista paikallaolijoissa',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Näytä vierailijoiden käyttäjätiedot paikallaolijoissa.',
	'YES_ONLINE_TRACK'				=> 'Näytä käyttäjän paikallaolo kuva',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Näytä paikallaolo profiilissa ja viestienluku sivuilla.',
	'YES_POST_MARKING'				=> 'Merkitse vastatut viestiketjut',
	'YES_POST_MARKING_EXPLAIN'		=> 'Näyttää, onko käyttäjä vastannut viestiketjuun.',
	'YES_READ_MARKING'				=> 'Ota palvelimen hallitsema viestiketjujen merkitseminen käyttöön',
	'YES_READ_MARKING_EXPLAIN'		=> 'Tallentaa luetun/lukemattoman viestin tiedot tietokantaan, eikä evästeeseen.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB tukee tunnistautumisen plug-in palikoita, tai moduuleita. Näiden avulla voit määrittää kuinka käyttäjä tunnistetaan hänen saapuessaan keskustelufoorumille. phpBB paketin mukana on toimitettu kolme erilaista tunnistautumismenetelmää; DB, LDAP ja Apache. Kaikkia tietoja ei tarvita, joten täytä vain ne, jotka ovat tarvittavia valitsemassasi tunnistamismenetelmässä.',

	'AUTH_METHOD'				=> 'Valitse tunnistautumismenetelmä',

	'APACHE_SETUP_BEFORE_USE'	=> 'Apachen tunnistautminen täytyy asentaa ensin ennen kuin voit vaihtaa phpBB:n käyttämään tätä menetelmää. Huomaa, että käyttäjätunnuksen apachen tunnistautumiseen täytyy olla sama, kuin phpBB:n käyttäjätunnuksesi.',

	'LDAP_DN'						=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Tämä on se erottuva nimi, joka paikallistaa käyttäjän tiedot, esim, <samp>o=My Company,c=US</samp>',
	'LDAP_EMAIL'					=> 'LDAP sähköpostin atribuutti',
	'LDAP_EMAIL_EXPLAIN'			=> 'aseta tähän käyttäjän sähköpostiosoite (jos on olemassa) asettaaksesi sähköpostiosoitteen automaattisesti uusille käyttäjille. Jos tämä jätetään tyhjäksi. Ensimmäistä kertaa kirjautuvien käyttäjien sähköpostiosoite jätetään tyhjäksi.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'LDAP palvelimen sitominen epäonnistui antamallasi käyttäjätunnuksella/salasanalla.',
	'LDAP_NO_EMAIL'					=> 'Määrittämääsi sähköpostia ei ole olemassa.',
	'LDAP_NO_IDENTITY'				=> 'En löytänyt kirjautumisidentiteettiä %s',
	'LDAP_PASSWORD'					=> 'LDAP salasana',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Jätä tyhjäksi käyttääksesi anonyyminä. Muussa tapauksessa anna tarvittava salsana. <strong>VAROITUS:</strong> Tämä salasana tallennetaan tietokantaan tavalisena tekstinä ja on kaikkien luettavissa, joilla on pääsy tietokantaan.',
	'LDAP_PORT'						=> 'LDAP palvelimen portti',
	'LDAP_PORT_EXPLAIN'				=> 'Vaihtoehtoisesti voit määrittää toisen portin, mikäli palvelin ei käytä oletusporttia 389.',
	'LDAP_SERVER'					=> 'LDAP palvelimen nimi',
	'LDAP_SERVER_EXPLAIN'			=> 'Mikäli LDAP on käytössä. Tämä on palvelimen nimi tai IP-osoite.',
	'LDAP_UID'						=> 'LDAP uid',
	'LDAP_UID_EXPLAIN'				=> 'Tällä avaimella etsitään annettua kirjutmisidentiteettiä, esim, <var>uid</var>, <var>sn</var> jne.',
	'LDAP_USER'						=> 'LDAP käyttäjä',
	'LDAP_USER_EXPLAIN'				=> 'Jätä tyhjäksi käyttääksesi anonyyminä. Mikäli tämä on annettu phpBB yrittää kirjautua tällä tunnuksella.',
	'LDAP_USER_FILTER'				=> 'LDAP käyttäjän suodatus',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'vaihtoehtoisesti voit rajoittaa etsittyjä objekteja lisäsuodattimilla. Esimerkiksi <samp>objectClass=posixGroup</samp> asettaa käyttöön <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Täällä voit määritellä palvelin- ja toimialueriippuvaiset asetukset. Pidä huoli, että antamasi tieto on oikein. Virheet tässä aiheuttavat sähköpostiin virheellisiä tietoja. Kun annat toimialueen nimeä muista, että siihen kuuluu myös http:// tai joku muu käytössäsi oleva protokolla. Muuta portin arvoa vain, jos tiedät palvelimen käyttävän toista porttia. Portti 80 on yleensä oikea.',

	'ENABLE_GZIP'				=> 'Ota GZip-pakkaus käyttöön',
	'ENABLE_GZIP_EXPLAIN'		=> 'Tämä vaihtoehto pakkaa palvelimen luoman sisällön ennen lähettämistä, mikäli käyttäjän selain tukee tällaista toimintoa. Tämä voi pienentää siirtokaistan käyttöä, mutta se kuormittaa palvelinta ja käyttäjän tietokonetta.',
	'FORCE_SERVER_VARS'			=> 'Pakota url asetukset',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Mikäli asetus on käytössä nämä tiedot korvaavat automaattisesti tunnistetut asetukset',
	'ICONS_PATH'				=> 'Viestien kuvakkeiden tallennuspolku',
	'ICONS_PATH_EXPLAIN'		=> 'Polku phpBB:n pääjuuren alla, esim. <samp>images/icons</samp>',
	'PATH_SETTINGS'				=> 'Polun asetukset',
	'RANKS_PATH'				=> 'Arvonimen kuvakkeen tallennuspolku',
	'RANKS_PATH_EXPLAIN'		=> 'Polku phpBB:n pääjuuren alla, esim. <samp>images/ranks</samp>',
	'SCRIPT_PATH'				=> 'Ohjelman polku',
	'SCRIPT_PATH_EXPLAIN'		=> 'Polku, jossa phpBB ohjelma sijaitsee suhteessa verkko osoitteeseen esimerkiksi, <samp>/phpBB3</samp>',
	'SERVER_NAME'				=> 'Toimialueen nimi',
	'SERVER_NAME_EXPLAIN'		=> 'Tämän keskustelufoorumin toimialueen nimi (Esimerkiksi: <samp>www.foo.bar</samp>)',
	'SERVER_PORT'				=> 'Palvelimen portti',
	'SERVER_PORT_EXPLAIN'		=> 'Palvelimen käyttämä portti. Yleensä 80. Vaihda tätä vain, jos se ei ole oikein',
	'SERVER_PROTOCOL'			=> 'Palvelimen protokolla',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Tätä protokollaa käytetään, mikäli asetus on pakotettu. Mikäli tämä on tyhjä tai protokollaa ei ole pakotettu. Tämä määritellään suojatun evästeen asetuksilla (<samp>http://</samp> tai <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'		=> 'Palvelimen URL asetukset',
	'SMILIES_PATH'				=> 'Hymiöiden tallennuspolku',
	'SMILIES_PATH_EXPLAIN'		=> 'Polku phpBB:n pääjuuren alla, esim. <samp>images/smilies</samp>',
	'UPLOAD_ICONS_PATH'			=> 'Tunnisteryhmien ikoneiden talennuspolku',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Polku phpBB:n pääjuuren alla, esim. <samp>images/upload_icons</samp>',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Täällä voit määritellä kirjautumiseen ja istuntoon liittyviä asetuksia',

	'ALL'							=> 'Kaikki',
	'ALLOW_AUTOLOGIN'				=> 'Salli automaattiset kirjautumiset', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Määrittelee sallitaanko käyttäjän kirjautua automaattisesti sisään saapuessaan keskustelufoorumille.', 
	'AUTOLOGIN_LENGTH'				=> 'Automaattisen kirjautumisen avaimen kuoleentuminen päivissä', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Lukumäärä päivinä, jonka jälkeen kirjautumisen avain vanhenee. Aseta nolla poistaaksesi toiminnon käytöstä.', 
	'BROWSER_VALID'					=> 'Varmenna selain',
	'BROWSER_VALID_EXPLAIN'			=> 'Ottaa selaimen varmennuksen käyttöön jokaiselle istunnolle varmentaen näin tietoturvaa.',
	'CHECK_DNSBL'					=> 'Tarkista IP-osoite käyttämällä DNS blackhole listaa',
	'CHECK_DNSBL_EXPLAIN'			=> 'Jos tämä on käytössä. IP-osoite tarkistetaan käyttämällä seuraavia DNSBL palveluita aina rekisteröitymisen ja viestin kirjoittamisen yhteydessä: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> ja <a href="http://spamhaus.org">spamhaus.org</a>. Tämä tarkistus saattaa kestää palvelimen konfiguraatiosta riippuen hetken aikaa. Mikäli tässä tarkistuksessa kestää jatkuvasti liian kauan tai se antaa virheellisisä tuloksia. Kannattaa ottaa tämä asetus pois käytöstä.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Tarkista on sähköpostipalvelimella kelvollinen MX tietue',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Jos tämä on käytössä käyttäjän antamasta sähköpostiosoitteesta tarkistetaan onko sillä olemassa kelvollista MX tietuetta.',
	'FORCE_PASS_CHANGE'				=> 'Pakota salasanan muuttaminen',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Pakottaa käyttäjän vaihtamaan salasanaansa tietyn ajan välein. Aseta nolla poistaaksesi toiminnon käytöstä.',
	'FORWARDED_FOR_VALID'			=> 'Varmennettu <var>X_FORWARDED_FOR</var> headerille',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Istuntoa jatketaan vain, jos lähetetty <var>X_FORWARDED_FOR</var> header on sama, kuin edellisellä kerralla vaadittu. Porttikiellot tarkistetaan <var>X_FORWARDED_FOR</var> IP-osoitteiden avulla.',
	'IP_VALID'						=> 'Istunnon IP-osoitteen varmennus',
	'IP_VALID_EXPLAIN'				=> 'Määrittelee kuinka suurta osaa käyttäjän IP-osoitteesta käytetään istunnon varmentamiseen; <samp>Kaikki</samp>, varmentaa koko osoitteen, <samp>A.B.C</samp> ensimmäiset x.x.x, <samp>A.B</samp> ensimmäiset x.x, <samp>Ei</samp> poistaa tarkistuksen käytöstä. IPv6 osoiteilla <samp>A.B.C</samp> tarkistaa ensimmäiset 4 osaa ja <samp>A.B</samp> tarkistaa 3 osaa.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Maksimimäärää kirjautumisyrityksiä',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Näin monen epäonnistuneen kirjautumisen jälkeen käyttäjä joutuu varmistamaan kirjautumisensa visuaalisesti (visuaalinen vahvistus)',
	'NO_IP_VALIDATION'				=> 'Ei',
	'PASSWORD_TYPE'					=> 'Salasanan monimutkaisuus',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Määrittelee kuinka monimutkaisen salasanan on oltava sitä asettaessa tai muutettaessa. seuraavat asetukset kuuluvat edellisiin asetuksiin.',
	'PASS_TYPE_ALPHA'				=> 'Täytyy sisältää alphanumeerisia merkkejä',
	'PASS_TYPE_ANY'					=> 'Ei vaatimuksia',
	'PASS_TYPE_CASE'				=> 'Täytyy sekoittaa isoja ja pieniä kirjaimia',
	'PASS_TYPE_SYMBOL'				=> 'Täytyy sisältää symbooleita',
	'TPL_ALLOW_PHP'					=> 'Salli PHP:n käyttä mallineissa',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Mikäli tämä vaihtoehto on käytössä, <code>PHP</code> ja <code>INCLUDEPHP</code> käskyt tunnistetaan mallineissa ja suoritetaan.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Tätä tietoa käytetään, kun keskustelufoorumi lähettää sähköpostia käyttäjälle. Varmista, että käyttämäsi sähköpostiosoite on toimiva, sillä palautettavista ja epäonnistuneista viesteistä tulee ilmoitus todennäköisesti juuri tähän osoitteeseen. Mikäli palveluntarjoajasi ei anna natiivia (PHP ympäristössä) sähköpostipalvelua. Voit vaihtoehtoisesti lähettää viestin käyttämällä SMTP-palvelinta. Tämä vaatii toimivan palvelimen osoitteen. (Kysy palveluntarjoajaltasi, jos et tiedä mitä tähän tulisi laittaa) Älä laita vanhaa nimeä tähän! Mikäli palvelin vaatii tunnistautumista (Ja vain, jos se vaatii) Lisää tähän oikea käyttäjätunnus ja salasana. Huomaa, että vain yksinkertainen tunnistautumismenetelmä on tarjolla. Toisenlaiset tunnistautumismenetelmät eivät ole tuettuja tällähetkellä.',

	'ADMIN_EMAIL'					=> 'Sähköpostin palautusosoite',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Tätä käytetään kaikkien sähköpostiviestien <samp>palautusosoitteena</samp> ja <samp>lähettäjän</samp> osoitteena.',
	'BOARD_EMAIL_FORM'				=> 'Käyttäjät voivat lähettää sähköpostia keskustelufoorumin kautta',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Tämä toiminto piilottaa käyttäjän sähköpostiosoitteen ja antaa käyttäjien lähettää sähköpostia keskustelufoorumin kautta.',
	'BOARD_HIDE_EMAILS'				=> 'Piilota sähköpostiosoitteet',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Tämä valinta pitää sähköpostiosoitteet yksityisenä tietona.',
	'CONTACT_EMAIL'					=> 'Ylläpidon sähköpostiosoite',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Tätä osoitetta käytetään, kun tarvitaan kontakti ylläpitoon, esim, roskaposti, virheviestit, jne. Tätä osoitetta käytetään aina <samp>lähettäjänä</samp> ja <samp>vastaus osoitteena</samp>.',
	'EMAIL_FUNCTION_NAME'			=> 'Sähköpostifunktion nimi',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Käytettävän funktion nimi, kun sähköposti lähetetään PHP:n kautta.',
	'EMAIL_PACKAGE_SIZE'			=> 'Sähköpostipaketin koko',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Kuinka monta sähköpostia lähetetään yhdessä paketissa.',
	'EMAIL_SIG'						=> 'Sähköpostin allekirjoitus',
	'EMAIL_SIG_EXPLAIN'				=> 'Tämä teksti liitetään kaikkiin lähetettyihin sähköpostiviesteihin.',
	'ENABLE_EMAIL'					=> 'Ota sähköpostitoiminnot käyttöön',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Mikäli tämä on poissa käytöstä. Keskustelufoorumi ei lähetä yhtäkään sähköpostiviestiä.',
	'SMTP_AUTH_METHOD'				=> 'SMTP:n tunnistautumismenetelmä',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Tätä käytetään vain, mikäli käyttäjätunnus/salasana on asetettu. Kysy palveluntarjoajaltasi, jos et ole varma mitä menetelmää tulisi käyttää.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP-salasana',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Laita salasana vain, jos palvelin sitä vaatii.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP-palvelimen portti',
	'SMTP_PORT_EXPLAIN'				=> 'Vaihda tätä vain, jos tiedät SMTP-palvelimen toimivan toisessa portissa.',
	'SMTP_SERVER'					=> 'SMTP-palvelimen osoite',
	'SMTP_SETTINGS'					=> 'SMTP-asetukset',
	'SMTP_USERNAME'					=> 'SMTP-käyttäjätunnus',
	'SMTP_USERNAME_EXPLAIN'			=> 'Laita käyttäjätunnus vain, jos palvelin sitä vaatii.',
	'USE_SMTP'						=> 'Käytä SMTP-palvelinta sähköpostin lähettämiseen',
	'USE_SMTP_EXPLAIN'				=> 'sano "kyllä", jos haluat lähettää sähköpostit erillisen SMTP-palvelimen kautta etkä käytä paikallista sähköpostin lähetystä.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Täällä voit hallita Jabberia ja kuinka sitä käytetään pikaviestintään ja keskustelufoorumin tiedotteisiin. Jabber on avoimeen lähdekoodiin perustuva protokolla ja sitäkautta kaikkien saatavilla. Jotkut Jabber-palvelut pitävät sisällään yhdyskäytävän tai siirtopalvelut, joilla voit olla yhteydessä toisella palvelimella oleviin käyttäjiin. Kaikki palvelimet eivät tarjoa siirtoa ja muutokset protokollassa saattavat estää toiminnan. Huomaa, että Jabber tilin päivitys saattaa kestää useamman sekunnin. Älä pysäytä skriptiä ennen kuin se on suorittanut toimintonsa loppuun!',

	'ERR_JAB_AUTH'			=> 'En voinut tunnistautua Jabber palvelimella',
	'ERR_JAB_CONNECT'		=> 'En saanut yhteyttä Jabber palvelimeen',
	'JAB_ENABLE'				=> 'Ota Jabber käyttöön',
	'JAB_ENABLE_EXPLAIN'		=> 'Ottaa Jabber viestinnän ja ilmoitukset käyttöön',
	'JAB_PACKAGE_SIZE'			=> 'Jabber Paketin koko',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Jabber lähettää näin monta viestiä yhdessä paketissa. Mikäli asetuksena on 0. Viestit lähetetään välittömästi eikä niitä aseteta jonoon myöhempää lähetystä varten.',
	'JAB_PASSWORD'				=> 'Jabber salasana',
	'JAB_PORT'					=> 'Jabber portti',
	'JAB_PORT_EXPLAIN'			=> 'Jätä tyhjäksi, mikäli tiedät että se ei ole 5222',
	'JAB_SERVER'				=> 'Jabber palvelin',
	'JAB_SERVER_EXPLAIN'		=> 'Katso %sjabber.org%s sadaksesi listan palvelimista',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber asetukset on vaihdettu',
	'JAB_USE_SSL'				=> 'Käytä SSL yhteyttä',
	'JAB_USE_SSL_EXPLAIN'		=> 'Mikäli tämä on käytössä, yritetään käyttää suojattua yhteyttä. Käytettävä portti muutetaan arvoon 5223 jos portti 5222 on määritetty.',
	'JAB_USERNAME'				=> 'Jabber käyttäjätunnus',
	'JAB_USERNAME_EXPLAIN'		=> 'Mikäli käyttäjätunnus ei ole rekisteröity. Se yritetään rekisteröidä, mikäli mahdollista.',
));

?>