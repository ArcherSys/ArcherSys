<?php
/** 
*
* memberlist [Finnish [Fin]]
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

$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'Profiili',
	'ACTIVE_IN_FORUM'		=> 'Aktiivisin alueella',
	'ACTIVE_IN_TOPIC'		=> 'Aktiivisin viestiketjussa',
	'ADD_FOE'				=> 'Lisää vihamieheksi',
	'ADD_FRIEND'			=> 'Lisää kaveriksi',
	'AFTER'					=> 'Jälkeen',

	'ALL'					=> 'Kaikki',

	'BEFORE'				=> 'Ennen',

	'CC_EMAIL'				=> 'Lähetä kopio itselleni',
	'CONTACT_USER'			=> 'Yhteystieto',

	'DEST_LANG'				=> 'Kieli',
	'DEST_LANG_EXPLAIN'		=> 'Valitse vastaanottajan kieli. (Jos saatavilla)',

	'EMAIL_BODY_EXPLAIN'	=> 'Tämä viesti lähetetään pelkkänä tekstinä. Älä käytä HTML:ää tai BBCode:a. Palautusosoitteeksi laitetaan sinun sähköpostiosoite.',
	'EMAIL_DISABLED'		=> 'Pahoittelut, mutta kaikki sähköpostiin liittyvät toiminnot ovat poissa käytöstä.',
	'EMAIL_SENT'			=> 'Sähköposti on lähetetty.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Tämä viesti lähetetään pelkkänä tekstinä. Älä käytä HTML:ää tai BBCode:a. Huomaa, että viestiketjun tiedot on jo lisätty viestiin. Palautusosoitteeksi laitetaan sinun sähköpostiosoitteesi.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Anna toimiva sähköpostiosoite.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Kirjoita viesti.',
	'EMPTY_MESSAGE_IM'		=> 'Kirjoita viesti.',
	'EMPTY_NAME_EMAIL'		=> 'Anna vastaanottajan oikea nimi.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Anna viestille otsikko.',
	'EQUAL_TO'				=> 'Saman arvoinen',

	'FIND_USERNAME_EXPLAIN'	=> 'Käytä tätä lomaketta etsiäksesi käyttäjiä. Sinun ei tarvitse täyttää kaikkia kenttiä ja voit hakea myös osittaisia vastaavuuksia käyttämällä tähtimerkkiä (*) villikorttina. Käytä päivämäärissä yyyy-mm-dd formaattia, Esim, 2002-01-01. Voit käyttää valintaruutuja valitaksesi yhden tai useamman käyttäjätunnuksen (Riippuen lomakkeesta, voit mahdollisesti laittaa usean käyttäjätunnuksen kerralla). Vaihtoehtoisesti voit valita haluamasi käyttäjät laittamalla rastin ruutuun ja napsauttamalla "Valitse merkityt" nappulaa.',
	'FLOOD_EMAIL_LIMIT'		=> 'Et voi lähettää uutta sähköpostia näin pian edellisen jälkeen. Yritä hetken päästä uudelleen.',

	'GROUP_LEADER'			=> 'Ryhmänvalvoja',

	'HIDE_MEMBER_SEARCH'	=> 'Piilota jäsenhaku',

	'IM_ADD_CONTACT'		=> 'Lisää yhteystieto',
	'IM_AIM'				=> 'Huomaa, että AOL Instant Messengerin pitää olla asennettuna käyttääksesi tätä toimintoa.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Lataa sovellus',
	'IM_ICQ'				=> 'Huomaa, että käyttäjät voivat estää kutsumattomat yhteydenotot pikaviestimillä.',
	'IM_JABBER'				=> 'Huomaa, että käyttäjät voivat estää kutsumattomat yhteydenotot pikaviestimillä.',
	'IM_JABBER_SUBJECT'		=> 'Tämä on automaattinen viesti. Älä vastaa! Viesti käyttäjältä %1$s missä %2$s',
	'IM_MESSAGE'			=> 'Viestisi',
	'IM_MSNM'				=> 'Huomaa, että sinulla pitää olla Windows Messenger asennettuna käyttääksesi tätä toimintoa.',
	'IM_MSNM_BROWSER'		=> 'Selaimesi ei tue tätä.',
	'IM_MSNM_CONNECT'		=> 'MSNM ei ole yhdistetty.\nSinun täytyy yhdistää MSNM jatkaaksesi.',		
	'IM_NAME'				=> 'Nimesi',
	'IM_NO_DATA'			=> 'Tälle käyttäjälle ei ole kontakti-informaatiota.',
	'IM_NO_JABBER'			=> 'Pahoittelut, mutta suora viestintä Jabber käyttäjien kanssa ei ole tuettuna tällä palvelimella. Sinulla täytyy olla Jabber ohjelma asennettuna ottaaksesi yhteyttä yläpuolella olevaan henkilöön.',
	'IM_RECIPIENT'			=> 'Vastaanottaja',
	'IM_SEND'				=> 'Lähetä viesti',
	'IM_SEND_MESSAGE'		=> 'Lähetä viesti',
	'IM_SENT_JABBER'		=> 'Viestisi %1$s on lähetetty.',
	'IM_USER'				=> 'Lähetä pikaviesti',
	
	'LAST_ACTIVE'				=> 'Viimeksi aktiivinen',
	'LESS_THAN'					=> 'Vähemmän kuin',
	'LIST_USER'					=> '1 käyttäjä',
	'LIST_USERS'				=> '%d käyttäjää',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Sivuston ylläpito vaatii, että olet rekisteröitynyt ja kirjautunut sisään ennen kuin voit katsoa henkilökunnan tietoja.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Sivuston ylläpito vaatii, että olet rekisteröitynyt ja kirjautunut sisään ennen kuin voit katsoa jäsenluetteloa.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Sivuston ylläpito vaatii, että olet rekisteröitynyt ja kirjautunut sisään ennen kuin voit etsiä käyttäjiä.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Sivuston ylläpito vaatii, että olet rekisteröitynyt ja kirjautunut sisään ennen kuin voit katsoa toisten käyttäjien profiileita.',

	'MORE_THAN'				=> 'Enemmän kuin',

	'NO_EMAIL'				=> 'Et voi lähettää sähköpostia tälle käyttäjälle.',
	'NO_VIEW_USERS'			=> 'Sinulla ei ole oikeuksia katsoa käyttäjälistaa tai profiileja.',

	'ORDER'					=> 'Järjestys',
	'OTHER'					=> 'Muu',

	'POST_IP'				=> 'Lähetetty IP/domain alueelta',

	'RANK'					=> 'Arvonimi',
	'REAL_NAME'				=> 'Vastaanottajan nimi',
	'RECIPIENT'				=> 'Vastaanottaja',
	'REMOVE_FOE'			=> 'Poista vihamies',
	'REMOVE_FRIEND'			=> 'Poista ystävä',

	'SEARCH_USER_POSTS'		=> 'Hae käyttäjän viestit',
	'SELECT_MARKED'			=> 'Valitse merkityt',
	'SELECT_SORT_METHOD'	=> 'Lajittele:',
	'SEND_AIM_MESSAGE'		=> 'Lähetä AIM viesti',
	'SEND_ICQ_MESSAGE'		=> 'Lähetä ICQ viesti',
	'SEND_IM'				=> 'Pikaviestintä',
	'SEND_JABBER_MESSAGE'	=> 'Lähetä Jabber viesti',
	'SEND_MESSAGE'			=> 'Viesti',
	'SEND_MSNM_MESSAGE'		=> 'Lähetä MSNM/WLM viesti',
	'SEND_YIM_MESSAGE'		=> 'Lähetä YIM viesti',
	'SORT_EMAIL'			=> 'Sähköposti',
	'SORT_LAST_ACTIVE'		=> 'Viimeksi aktiivinen',
	'SORT_POST_COUNT'		=> 'Viestien lukumäärä',

	'USERNAME_BEGINS_WITH'	=> 'Käyttäjätunnuksen ensimmäinen kirjain',
	'USER_ADMIN'			=> 'Hallinnoi käyttäjää',
	'USER_FORUM'			=> 'Käyttäjän tilastot',
	'USER_ONLINE'			=> 'Paikalla',
	'USER_PRESENCE'			=> 'Läsnäolo alueella',

	'VIEWING_PROFILE'		=> 'tarkastelee profiilia - %s',
	'VISITED'				=> 'Käynyt viimeksi',

	'WWW'					=> 'WWW',
));

?>