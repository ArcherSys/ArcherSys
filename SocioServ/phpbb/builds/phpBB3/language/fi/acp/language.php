<?php
/** 
*
* acp_language [Finnish [Fin]]
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
	'ACP_FILES'						=> 'Ylläpidon kielitiedostot',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Täällä voit asentaa ja poistaa kielipaketteja',

	'EMAIL_FILES'			=> 'Sähköpostin pohjat',

	'FILE_CONTENTS'				=> 'Tiedoston sisältö',
	'FILE_FROM_STORAGE'			=> 'Tiedosto storege-hakemistosta',

	'HELP_FILES'				=> 'Ohjeita sisältävät tiedostot',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Asennetut kielipaketit',
	'INVALID_LANGUAGE_PACK'		=> 'Antamasi kielipaketti on epäkelpo. varmista paketti ja tarvittaessa siirrä se uudelleen palvelimelle.',
	'INVALID_UPLOAD_METHOD'		=> 'valittu siirtotapa on epäkelpo. Ole hyvä ja valitse toinen tapa.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Kielen asetukset on päivitetty',
	'LANGUAGE_ENTRIES'					=> 'Kielipaketin muuttujat',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Täällä voit muokata kielipaketin tietoja, mikäli sitä ei ole jo käännetty.<br /><strong>Huomaa:</strong> Kun muokkaat kielitiedostoa. Muokkaukset tallennetaan eri hakemistoon odottamaan lataustasi. Tekemäsi muutokset tulevat käyttöön vasta sitten, kun olet siirtänyt kielitiedoston oikeaan paikkaan.',
	'LANGUAGE_FILES'					=> 'Kielitiedostot',
	'LANGUAGE_KEY'						=> 'Kielen avain',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Tämä kielipaketti on jo asennettu.',
	'LANGUAGE_PACK_DELETED'				=> 'Kielipaketti <strong>%s</strong> on poistettu. Tätä pakettia käyttäneet käyttäjät on asetettu käyttämään keskustelufoorumin oletus kieltä.',
	'LANGUAGE_PACK_DETAILS'				=> 'Kielipaketin tiedot',
	'LANGUAGE_PACK_INSTALLED'			=> 'Kielipaketti <strong>%s</strong> on asennettu onnistuneesti.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Paikallinen nimi',
	'LANGUAGE_PACK_NAME'				=> 'Nimi',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Valitsemaasi kielipakettia ei ole olemassa.',
	'LANGUAGE_PACK_USED_BY'				=> 'Käyttävät',
	'LANGUAGE_VARIABLE'					=> 'Kielen muuttuja',
	'LANG_AUTHOR'						=> 'Kielipaketin kirjoittaja',
	'LANG_ENGLISH_NAME'					=> 'Englanninkielinen nimi',
	'LANG_ISO_CODE'						=> 'ISO koodi',
	'LANG_LOCAL_NAME'					=> 'Paikallinen nimi',

	'MISSING_LANGUAGE_FILE'		=> 'Kielipaketti puuttuu: <span style="color:red">%s</span>',
	'MISSING_LANG_VARIABLES'	=> 'Puuttuvat muuttujat',
	'MODS_FILES'				=> 'Modien kielipaketit',

	'NO_FILE_SELECTED'				=> 'Et ole määritellyt kielitiedostoa.',
	'NO_LANG_ID'					=> 'Et ole määritellyt kielipakettia',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Et voi poistaa oletuskieltä.<br />Jos haluat poistaa tämän kielipaketin. Vaihda oletuskieli ensin.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Ei poistettuja kielipaketteja',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Poista storage-hakemistosta',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Valitse ladattava formaatti',
	'SUBMIT_AND_DOWNLOAD'		=> 'Lähetä ja lataa tiedosto omalle koneellesi',
	'SUBMIT_AND_UPLOAD'			=> 'Lähetä ja siirrä tiedosto palvelimelle',

	'THOSE_MISSING_LANG_FILES'			=> 'Nämä kielipaketin tarvitsemat tiedostot puuttuvat kielen %s hakemistosta',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Nämä kielitiedoston muuttujat puuttuvat <strong>%s</strong> kielipaketista',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Poistetut kielipaketit',

	'UNABLE_TO_WRITE_FILE'		=> 'En voinut kirjoittaa tiedostoon %s.',
	'UPLOAD_COMPLETED'			=> 'Siirto on suoritettu',
	'UPLOAD_FAILED'				=> 'Tiedoston siirtäminen epäonnistui tuntemattomasta syystä. Joudut siirtämään tiedoston käsin.',
	'UPLOAD_METHOD'				=> 'Siirron tapa',
	'UPLOAD_SETTINGS'			=> 'Siirron asetukset',

	'WRONG_LANGUAGE_FILE'		=> 'valittu kielipaketti on epäkelpo',
));

?>