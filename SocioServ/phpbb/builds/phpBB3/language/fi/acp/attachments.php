<?php
/** 
*
* acp_attachments [Finnish [Fin]]
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Täällä voit asettaa liitetiedotojen yleisimmät asetukset ja tiettyjen kategorioiden mukaan kulkevat asetukset.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Voit, Muokata ja poistaa tiedoston tunnisteiden ryhmiä, Poistaa tunnisteiden ryhmiä käytöstä, Liittää niihin erityisia kategorioita, Muuttaa latauksen asetuksia ja lisätä kuvakkeen erottaaksesi tietyt ryhmät toisistaan.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Täällä voit hallita sallimiasi tiedoston tunnisteita. Ole hyvä ja käytä tunnisteryhmien hallintapaneelia aktivoidaksesi tunnisteen. Me suosittelemme, että et salli skriptien tunnisteita (kuten php, php3, php4, phtml, pl, cgi, asp, aspx...)',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Täällä näet liitetiedostojen hakemistossa olevat tiedostot, joita ei ole laitettu yheenkään viestiin. Tämä tapahtuu useinmiten silloin, kun käyttäjä esikatselee viestiänsä, mutta ei lähetä sitä. Voit poistaa nämä tiedostot tai liittää ne jo olemassaoleviin viesteihin. Tiedostojen liittäminen viesteihin tarvitsee toimivan id:n viestille, Joudut määrittelemään tämän id:n itse. Tämä toiminto on tarkoitettu heitä varten, jotka haluavat siirtää (yleensä ison) tiedostonsa jollain toisella tavalla palvelimelle ja liittää sen erikseen viestiinsä.',
	'ADD_EXTENSION'						=> 'Lisää tunniste',
	'ADD_EXTENSION_GROUP'				=> 'Lisää tunnisteryhmä',
	'ADMIN_UPLOAD_ERROR'				=> 'Liitetiedostoa lisättäessä tapahtuneet virheet: %s',
	'ALLOWED_FORUMS'					=> 'Sallitut alueet',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Voi listätä liitetiedoston tälle alueelle (Tai kaikille, jos valittuna)',
	'ALLOWED_IN_PM_POST'				=> 'Sallittu',
	'ALLOW_ATTACHMENTS'					=> 'Salli liitetiedostot',
	'ALLOW_ALL_FORUMS'					=> 'Salli kaikille alueille',
	'ALLOW_IN_PM'						=> 'Sallittu yksityisviesteissä',
	'ALLOW_PM_ATTACHMENTS'				=> 'Salli liitetiedostot yksityisviesteissä',
	'ALLOW_SELECTED_FORUMS'				=> 'Vain alapuolella valittuihin alueisiin',
	'ASSIGNED_EXTENSIONS'				=> 'Märitellyt tunnisteet',
	'ASSIGNED_GROUP'					=> 'Määritelty ryhmä',
	'ATTACH_EXTENSIONS_URL'				=> 'Tunnisteet',
	'ATTACH_EXT_GROUPS_URL'				=> 'Tunnisteryhmät',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Maksimi tiedoston koko',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Maksimi tiedoston koko jokaiselle tiedostolle, 0 on rajoittamaton.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Maksimi tiedoston koko yksityisviesteissä',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Maksimi levytila varattuna käyttäjän yksitysiviesteissä oleville liitetiedostoille, 0 rajoittamaton.',
	'ATTACH_ORPHAN_URL'					=> 'Orvot liitetiedostot',
	'ATTACH_POST_ID'					=> 'Viestin ID',
	'ATTACH_QUOTA'						=> 'Maksimi liitetiedostoille varattu levytila',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Maksimi levytila varattuna liitetiedostoille, 0 on rajoittamaton.',
	'ATTACH_TO_POST'					=> 'Liitä tiedosto viestiin',

	'CAT_FLASH_FILES'			=> 'Flash tiedostot',
	'CAT_IMAGES'				=> 'Kuvat',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime Media',
	'CAT_RM_FILES'				=> 'Real Media Stream',
	'CAT_WM_FILES'				=> 'Win Media Stream',
	'CREATE_GROUP'				=> 'Luo uusi ryhmä',
	'CREATE_THUMBNAIL'			=> 'Pienennä kuva',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Pienennä kuva aina, kun mahdollista.',

	'DEFINE_ALLOWED_IPS'			=> 'Määritä sallitut IPt/isäntänimet',
	'DEFINE_DISALLOWED_IPS'			=> 'Määritä kielletyt IPt/isäntänimet',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Lisää jokainen IP-osoite tai isäntänimi uudelle riville. Lisää jokainen uudelle riville määrittääksesi useita kappaleita kerralla. Mikäli haluat lisätä kokonaisen alueen. Erota osoitteet toisistaan miinusmerkillä (-), Voit käyttä myös tähteä (*) villikorttina',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Voit poistaa (tai jättää huomioimatta) useita IP-osoitteita käyttämällä näppäimistöä ja selaimen toimintoja hyväksesi. Huomioidut IP-osoitteet ovat sinisellä taustalla',
	'DISPLAY_INLINED'				=> 'Näytä kuvat viesteissä',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Mikäli asetus ei ole käytössä. Kuvat näytetään linkkeinä.',
	'DISPLAY_ORDER'					=> 'Liitetiedostojen näyttämisjärjestys',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Näytä liitetiedostot aikajärjestyksessä.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Näytä tunnisteryhmä',
	'EXCLUDE_ENTERED_IP'			=> 'Ota tämä käyttöön ottaaksesi IP-osoitteen tai isäntänimen huomioon.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Jätä IP-osoite huomioimatta sallituissa IP-osoitteissa ja isäntänimissä',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Jätä IP-osoite huomioimatta kielletyissä IP-osoitteissa ja isäntänimissä',
	'EXTENSIONS_UPDATED'			=> 'Tunniste on päivitetty',
	'EXTENSION_EXIST'				=> '%s tunniste on jo olemassa',
	'EXTENSION_GROUP'				=> 'Tunnisteryhmä',
	'EXTENSION_GROUPS'				=> 'Tunnisteryhmät',
	'EXTENSION_GROUP_DELETED'		=> 'Tunnisteryhmä on poistettu',
	'EXTENSION_GROUP_EXIST'			=> '%s tunnisteryhmä on jo olemassa',

	'GO_TO_EXTENSIONS'		=> 'Mene tunnisteiden hallintaan',
	'GROUP_NAME'			=> 'Ryhmän nimi',

	'IMAGE_LINK_SIZE'			=> 'Kuvalinkin koko',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Näytä kuvatiedosto linkkinä mikäli sen koko ylittää sallitun,  aseta 0px kertaa 0px poistaaksesi toiminnon käytöstä.',
	'IMAGICK_PATH'				=> 'Imagemagick polku',
	'IMAGICK_PATH_EXPLAIN'		=> 'Täysi polku imagemagick muokkaus sovellukseen. esim, <samp>/usr/bin/</samp>',

	'MAX_ATTACHMENTS'				=> 'Maksimimäärä liitetiedostoja viestissä',
	'MAX_ATTACHMENTS_PM'			=> 'Maksimimäärä liitetiedostoja yksityisviestissä',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maksimi tiedoston koko',
	'MAX_IMAGE_SIZE'				=> 'Kuvan maksimi koko',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Kuvatiedoston maksimi koko, 0px kertaa 0px poistaa kuvatiedostot käytöstä.',
	'MAX_THUMB_WIDTH'				=> 'Pienennetyn kuvan maksimi leveys pikseleinä',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Pienennetty kuva ei ylitä tätä leveyttä',
	'MIN_THUMB_FILESIZE'			=> 'Minimi pienennyskoko',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Älä pienennä kuvia, jotka ovat alle tämän rajan.',
	'MODE_INLINE'					=> 'Viestissä',
	'MODE_PHYSICAL'					=> 'Fyysinen',

	'NOT_ALLOWED_IN_PM'			=> 'Ei sallittu yksityisviesteissä',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Ei sallittu',
	'NOT_ASSIGNED'				=> 'Ei määritelty',
	'NO_EXT_GROUP'				=> 'Ei mitään',
	'NO_EXT_GROUP_NAME'			=> 'Ryhmän nimeä ei ole annettu',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Tunnsiteryhmää ei ole määritelty',
	'NO_FILE_CAT'				=> 'Ei mitään',
	'NO_IMAGE'					=> 'Ei kuvaa',
	'NO_THUMBNAIL_SUPPORT'		=> 'Kuvien pienennys ei ole käytössä, sillä tarvittavaa GD kirjastoa ei ole saatavilla ja imagemagick sovellusta ei löytynyt.',
	'NO_UPLOAD_DIR'				=> 'Antamaasi hakemistoa liitetiedostoille ei löytynyt.',
	'NO_WRITE_UPLOAD'			=> 'Antamaasi liitetiedostojen hakemistoon ei voitu kirjoittaa. ole hyvä ja muuta hakemiston oikeuksia salliaksesi palvelimen kirjoittamisen.',

	'ONLY_ALLOWED_IN_PM'	=> 'Sallittu vain yksityisviesteissä',
	'ORDER_ALLOW_DENY'		=> 'Salli',
	'ORDER_DENY_ALLOW'		=> 'Kiellä',

	'REMOVE_ALLOWED_IPS'		=> 'Poista tai ota huomioon IP/isäntänimi',
	'REMOVE_DISALLOWED_IPS'		=> 'Poista tai ota huomioon kielletty IP/isäntänimi',

	'SEARCH_IMAGICK'				=> 'Etsi Imagemagick ohjelmaa',
	'SECURE_ALLOW_DENY'				=> 'Sallittu/kielletty lista',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Sallitut ja kielletyt osoitteet. Tämä toimii vain tiedostojen lataukseen',
	'SECURE_DOWNLOADS'				=> 'Ota turvalliset lataukset käyttöön',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Mikäli tämä on käytössä. Lataukset on rajoitettu määrittämiisi IP-osoitteisiin ja isäntänimiin.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Turvalliset lataukset eivät ole käytössä. Alapuolella olevia asetuksia voidaan muokata mikäli otat turvalliset lataukset käyttöön.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'IP-osoitteiden lista on päivitetty onnistuneesti',
	'SECURE_EMPTY_REFERRER'			=> 'Salli tyhjä viittaajat',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Turvalliset lataukset perustuvat viittaajiin. Haluatko sallia latauksen heille, jotka piilottavat viittauksensa?',
	'SETTINGS_CAT_IMAGES'			=> 'Kuvakategorian asetukset',
	'SPECIAL_CATEGORY'				=> 'Erikoiskategoria',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Erikoiskategoriat eroavat muista siinä, kuinka ne esitetään viestien yhteydessä.',
	'SUCCESSFULLY_UPLOADED'			=> 'Siirto onnistui',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Tunnisteryhmä on lisätty',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Tunnisteryhmä on päivitetty',

	'UPLOADING_FILES'				=> 'Siirrän tiedostoja palvelimelle',
	'UPLOADING_FILE_TO'				=> 'Siirrän tiedostoa "%1$s" viestiin numero %2$d...',
	'UPLOAD_DENIED_FORUM'			=> 'Sinulla ei ole oikeuksia isätä liitetiedostoja alueelle "%s"',
	'UPLOAD_DIR'					=> 'Liitetiedostojen hakemisto',
	'UPLOAD_DIR_EXPLAIN'			=> 'Tallennuspolku liitetiedostoille.',
	'UPLOAD_ICON'					=> 'Liitetiedoston kuvake',
	'UPLOAD_NOT_DIR'				=> 'Määrittämäsi liitetiedostojen hakemisto ei näytä olevan hakemisto.',
));

?>