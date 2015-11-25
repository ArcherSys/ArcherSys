<?php
/** 
*
* posting [Finnish [Fin]]
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

// BBCodes 
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode on HTML-kielestä johdettu ja se tarjoaa paremman tavan muokata näytettäviä asioita. Tällä sivulla voit muokata ja poistaa omia BBCode-tageja.',
	'ADD_BBCODE'				=> 'Lisää uusi BBCode tagi',

	'BBCODE_ADDED'				=> 'Uusi BBCode tagi on lisätty',
	'BBCODE_EDITED'				=> 'BBCode tagi on muokattu',
	'BBCODE_NOT_EXIST'			=> 'Antamasi BBCode tagia ei ole olemassa',
	'BBCODE_HELPLINE'			=> 'Apurivi',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Tässä kentässä on selitys, kun hiiri on BBCode tagin päällä',
	'BBCODE_HELPLINE_TEXT'		=> 'Apurivin teksti',
	'BBCODE_INVALID_TAG_NAME'	=> 'Antamasi BBCode tagin nimi on jo olemassa.',
	'BBCODE_INVALID'			=> 'Käyttämäsi BBCode muotoilu on rakenteeltaan epäkelpo.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Tekemälläsi BBCodella täytyy olla aloitus ja lopetus tagit.',
	'BBCODE_TAG'				=> 'Tag',
	'BBCODE_TAG_TOO_LONG'		=> 'Tagille antamasi nimi on liian pitkä. Ole hyvä ja lyhennä sitä.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Tagille antamasi kuvaus on liian pitkä. Ole hyvä ja lyhennä sitä.',
	'BBCODE_USAGE'				=> 'BBCoden käyttö',
	'BBCODE_USAGE_EXAMPLE'		=> '[colour={COLOR}]{TEXT}[/colour]<br /><br />[font={TEXT1}]{TEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Tässä määrittelet, kuinka BBCode otetaan käyttöön viesteissä. Vaihda jokainen muuttuja asiaankuuluvalla merkillä (%sKatso alhaalta%s)',

	'EXAMPLE'						=> 'Esimerkki:',
	'EXAMPLES'						=> 'Esimerkit:',

	'HTML_REPLACEMENT'				=> 'HTML:n korvaus',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;font color="{COLOR}"&gt;{TEXT}&lt;/font&gt;<br /><br />&lt;font face="{TEXT1}"&gt;{TEXT2}&lt;/font&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Täällä voit määritellä oletuksen HTML:n korvaamiselle (Jokaisella mallineella voi olla oma HTML korvaus). Älä unohda laittaa yläpuolella käytettyjä merkkejä takaisin!',

	'TOKEN'					=> 'Merkki',
	'TOKENS'				=> 'Merkit',
	'TOKENS_EXPLAIN'		=> 'Merkit ottavat vastaan käyttäjän suorittaman toiminnon. Toiminto hyväksytään vain mikäli se vastaa määrittely. Jos haluat, voit numeroida ne lisäämällä arvon sulkuihin, e.g. {USERNAME1}, {USERNAME2}.<br /><br />Voit myös käyttää asennettujen kielitiedostojen muuttujia language/-hakemistosta. Esimerkillä: {L_<i>&lt;stringname&gt;</i>} missä <i>&lt;stringname&gt;</i> on käännetyn tekstin merkkijono. Esimerkiksi, {L_WROTE} Näytetään "Kirjoitti" tai sillä kielellä, joka käyttäjän profiilissa',
	'TOKEN_DEFINITION'		=> 'Mikähän se voisi olla??',
	'TOO_MANY_BBCODES'		=> 'Et voi lisätä uutta BBCodea. Ole hyvä ja poista yksi tai useampi BBCode ja yritä uudelleen',

	'tokens'	=>	array(
		'TEXT'			=> 'Mikä tahansa teksti mukaanluettuna ulkomaalaiset kirjoitusmerkit, numerot, jne...',
		'SIMPLETEXT'	=> 'Kirjoitusmerkit latinalaisesta akkosjärjestyksestä (A-Z), numerot, välilyönnit, pilkut, pisteet, miinus, plus, tavuviiva ja alaviiva',
		'IDENTIFIER'	=> 'Kirjoitusmerkit latinalaisesta akkosjärjestyksestä (A-Z), numerot, tavuviiva ja alaviiva',
		'NUMBER'		=> 'Mikä tahansa merkkijono',
		'EMAIL'			=> 'Kelvollinen sähköpostiosoite',
		'URL'			=> 'Kelvollinen URL, joka käyttää mitä tahansa protokollaa (http, ftp, jne... ei voi käyttää javascript haavoittuvuuksiin). Mikäli muuta ei ole annettu, "http://" on oletuksena',
		'LOCAL_URL'		=> 'Paikallinen URL. URL täytyy kirjoittaa suhteessa viestiketjuun ja siinä ei saa olla palvelimen nimeä tai protokollaa',
		'COLOR'			=> 'HTML väri voi olla numeerisessa muodossa <samp>#FF1234</samp> tai <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS värin arvona</a>, kuten <samp>fuchsia</samp> tai <samp>InactiveBorder</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Tällä sivulla voit lisätä, poistaa ja muokata kuvakkeita, joita käyttäjät voivat laittaa viesteihinsä. Nämä kuvakkeet näytetään yleensä viestin otsikon yhteydessä. Voit myös luoda ja asentaa uusia kuvakkeita.',
	'ACP_SMILIES_EXPLAIN'	=> 'Hymiöt tai emootiot ovat yleensä pieniä ja joskus myös animoituja kuvakkeita, joita käytetään kuvaamassa tunnetiloja. Tällä sivulla voit lisätä, poistaa ja muokata hymiöitä, joita käyttäjät voivat laittaa viesteihinsä. Voit myös asentaa ja luoda uusia hymiöitä.',
	'ADD_SMILIES'			=> 'Lisää useita hymiöitä',
	'ADD_SMILEY_CODE'		=> 'Lisää hymiökoodia',
	'ADD_ICONS'				=> 'Lisää useita kuvakkeita',
	'AFTER_ICONS'			=> '%s jälkeen',
	'AFTER_SMILIES'			=> '%s jälkeen',

	'CODE'						=> 'Koodi',
	'CURRENT_ICONS'				=> 'Olemassaolevat kuvakkeet',
	'CURRENT_ICONS_EXPLAIN'		=> 'Valitse mitä haluat tehdä jo asennettuna oleville kuvakkeille',
	'CURRENT_SMILIES'			=> 'Olemassaolevat hymiöt',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Valitse mitä haluat tehdä jo olemassaoleville hymiöille',

	'DISPLAY_ON_POSTING'	=> 'Näytä viestin lähetys sivulla',
	'DISPLAY_POSTING'			=> 'Näytetään viestin lähetys sivulla',
	'DISPLAY_POSTING_NO'		=> 'Ei näytetä viestin lähetys sivulla',



	'EDIT_ICONS'				=> 'Muokkaa kuvakkeita',
	'EDIT_SMILIES'				=> 'Muokkaa hymiöitä',
	'EMOTION'					=> 'Tunne',
	'EXPORT_ICONS'				=> 'Luo kuvake paketti',
	'EXPORT_ICONS_EXPLAIN'		=> '%sKlikkaamalla tätä linkkiä, Käyttämiesi kuvakkeiden tiedot pakataan <samp>icons.pak</samp>-tiedostoon, jonka avulla voit luoda <samp>.zip</samp> tai <samp>.tgz</samp> tiedoston, jossa on kaikki kuvakkeesi ja tämä <samp>icons.pak</samp> konfigurointitiedosto%s.',
	'EXPORT_SMILIES'			=> 'Luo hymiöpaketti',
	'EXPORT_SMILIES_EXPLAIN'	=> 'Klikkaamalla tätä linkkiä, Käyttämiesi hymiöiden tiedot pakataan <samp>smilies.pak</samp>-tiedostoon, jonka avulla voit luoda <samp>.zip</samp> tai <samp>.tgz</samp> tiedoston, jossa on kaikki hymiösi ja tämä <samp>smilies.pak</samp> konfigurointitiedosto',

	'FIRST'			=> 'Ensimmäinen',

	'ICONS_ADD'				=> 'Lisää uusi kuvake',
	'ICON_NONE_ADDED'		=> 'Kuvakkeita ei lisätty.',
	'ICONS_ONE_ADDED'		=> 'Kuvake on lisätty.',
	'ICONS_ADDED'			=> 'Kuvake on lisätty.',
	'ICONS_CONFIG'			=> 'Kuvakkeen asetukset',
	'ICONS_DELETED'			=> 'Kuvake on poistettu.',
	'ICONS_EDIT'			=> 'Muokkaa kuvaketta.',
	'ICONS_EDITED'			=> 'Kuvake on päivitetty.',
	'ICONS_HEIGHT'			=> 'Kuvakkeen korkeus',
	'ICONS_IMAGE'			=> 'Kuvakkeen kuva',
	'ICONS_IMPORTED'		=> 'Kuvakepaketti on asennettu.',
	'ICONS_ONE_EDITED'		=> 'Kuvake on päivitetty.',
	'ICON_NONE_EDITED'		=> 'Kuvakkeita ei ole päivitetty.',
	'ICONS_IMPORT_SUCCESS'	=> 'Kuvakepaketin tuonti onnistui',
	'ICONS_LOCATION'		=> 'Kuvakkeen sijainti',
	'ICONS_NOT_DISPLAYED'	=> 'Näitä kuvakkeita ei näytetä viestin kirjoitus sivulla',
	'ICONS_ORDER'			=> 'Kuvakkeiden järjestys',
	'ICONS_URL'				=> 'Kuvakkeen tiedosto',
	'ICONS_WIDTH'			=> 'Kuvakkeen leveys',
	'IMPORT_ICONS'			=> 'Asenna kuvakepaketti',
	'IMPORT_SMILIES'		=> 'Asenna hymiöpaketti',

	'KEEP_ALL'			=> 'Säilytä kaikki',

	'MASS_ADD_SMILIES'	=> 'Lisää useita hymiöitä',

	'NO_ICONS_ADD'		=> 'Kuvakkeita ei ole saatavilla lisättäväksi.',
	'NO_ICONS_EDIT'		=> 'Kuvakkeita ei ole saatavilla muokkausta varten.',
	'NO_ICONS_EXPORT'	=> 'Sinulla ei ole kuvakkeita, joista voisi luoda paketin.',
	'NO_ICONS_PAK'		=> 'Kuvakepaketteja ei löytynyt.',
	'NO_SMILIES_ADD'	=> 'Hymiöitä ei ole saatavilla lisättäväksi.',
	'NO_SMILIES_EDIT'	=> 'Hymiöitä ei ole saatavilla muokkausta varten.',
	'NO_SMILIES_EXPORT'	=> 'Sinulla ei ole hymiöitä, joista voisi luoda paketin.',
	'NO_SMILIES_PAK'	=> 'Hymiöpaketteja ei löytynyt.',

	'PAK_FILE_NOT_READABLE'		=> '<samp>.pak</samp> tiedoston lukeminen epäonnistui',

	'REPLACE_MATCHES'	=> 'Korvaa vastaavuudet',

	'SELECT_PACKAGE'			=> 'Valitse paketti tiedosto',
	'SMILIES_ADD'				=> 'Lisää uusi hymiö',
	'SMILIES_ADDED'				=> 'Hymiö on lisätty.',
	'SMILIES_CODE'				=> 'Hymiön koodi',
	'SMILIES_CONFIG'			=> 'Hymiön asetukset',
	'SMILIES_DELETED'			=> 'Hymiö on poistettu.',
	'SMILIES_NONE_ADDED'		=> 'Hymiöitä ei lisätty.',
	'SMILIES_ONE_ADDED'			=> 'Hymiö on lisätty.',
	'SMILIES_EDIT'				=> 'Muokkaa hymiötä',
	'SMILIES_EDITED'			=> 'Hymiö on päivitetty.',
	'SMILIES_EMOTION'			=> 'Tunnetila',
	'SMILIES_HEIGHT'			=> 'Hymiön korkeus',
	'SMILIES_IMAGE'				=> 'Hymiön kuva',
	'SMILIES_NONE_EDITED'		=> 'Hymiöitä ei päivitetty.',
	'SMILIES_ONE_EDITED'		=> 'Hymiö on päivitetty.',
	'SMILIES_IMPORTED'			=> 'Hymiöpaketti on asennettu.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Hymiöpaketti on tuotu',
	'SMILIES_LOCATION'			=> 'hymiön sijainti',
	'SMILIES_NOT_DISPLAYED'		=> 'Nämä hymiöt näytetään viestin kirjoitus sivulla',
	'SMILIES_ORDER'				=> 'Hymiöiden järjestys',
	'SMILIES_URL'				=> 'Hymiöiden tiedosto',
	'SMILIES_WIDTH'				=> 'Hymiön leveys',

	'WRONG_PAK_TYPE'	=> 'Antamassasi paketissa ei ole kelvollista dataa.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Tässä hallintapaneelissa voit lisätä, muokata ja poistaa sanoja, jotka sensuroidaan automaattisesti. Tämän lisäksi käyttäjät eivät voi rekisteröidä näitä sanoja sisältäviä käyttäjätunnuksia. Villien korttien (*) käyttö nimissä on sallittua.',
	'ADD_WORD'				=> 'Lisää uusi sana',

	'EDIT_WORD'		=> 'Muokkaa sanojen sensurointia',
	'ENTER_WORD'	=> 'Sinun täytyy antaa sana ja sen korvaava sana',

	'NO_WORD'	=> 'Et ole valinnut sanaa muokattavaksi',

	'REPLACEMENT'	=> 'Korvaus',

	'UPDATE_WORD'	=> 'Päivitä sanojen sensurointi',

	'WORD'				=> 'Sana',
	'WORD_ADDED'		=> 'Sensuroitava sana on lisätty',
	'WORD_REMOVED'		=> 'Valitsemasi sana on poistettu',
	'WORD_UPDATED'		=> 'Valitsemasi sana on päivitetty',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Tällä lomakkeella voi lisätä, muokata, katsoa ja poistaa arvonimiä. Voit myös luoda mukautettuja arvonimiä, jota voit antaa käyttäjille käyttäjien hallinnassa.',
	'ADD_RANK'				=> 'Lisää uusi arvonimi',

	'MUST_SELECT_RANK'		=> 'Valitse arvonimi.',
	
	'NO_ASSIGNED_RANK'		=> 'Arvonimeä ei ole annettu.',
	'NO_RANK_TITLE'			=> 'Et ole antanut arvonimelle otsikkoa.',
	'NO_UPDATE_RANKS'		=> 'Arvonimen poisto onnistui, mutta käyttäjät, joilla tämä oli käytössä. Eivät ole päivitetty. Näiden käyttäjien arvonimi täytyy muuttaa manuaalisesti.',

	'RANK_ADDED'			=> 'Arvonimi on lisätty.',
	'RANK_IMAGE'			=> 'Arvon kuvake',
	'RANK_IMAGE_EXPLAIN'	=> 'Anna pieni kuvake arvonimelle. Kuvan polku on suhteessa phpBB:n juurihakemistoon.',
	'RANK_MINIMUM'			=> 'Vähimmäismäärä viestejä',
	'RANK_REMOVED'			=> 'Arvonimi on poistettu.',
	'RANK_SPECIAL'			=> 'Aseta erityiseksi asrvonimeksi',
	'RANK_TITLE'			=> 'Arvonimen otsikko',
	'RANK_UPDATED'			=> 'Arvonimi on päivitetty.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Täällä voit määritellä käyttäjätunnuksia, joiden käyttö ei ole sallittu. Kielletyissä nimimerkeissä voi käyttää myös erikoismerkkiä *. Huomaa, että et voi kieltä äjo rekisteröityä nimimerkkiä. Sinun tulee esnin poistaa tuo nimimerkki ja sitten vasta kieltää sen käyttäminen',
	'ADD_DISALLOW_EXPLAIN'	=> 'Voit käyttää tähtimerkkiä (*) korvaamassa mitä tahansa muuta kirjoitusmerkkiä',
	'ADD_DISALLOW_TITLE'	=> 'Lisää kielletty käyttäjätunnus',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Voit poistaa kielletyn nimimerkin valitsemalla sen tästä listasta ja valitsemalla "lähetä"',
	'DELETE_DISALLOW_TITLE'		=> 'Poista kielletty käyttäjätunnus',
	'DISALLOWED_ALREADY'		=> 'Antamasi nimeä ei voitu kieltää. Se on joko käytössä, on jo kielletty tai on lisättynä sanojen sensurointiin.',
	'DISALLOWED_DELETED'		=> 'Kielletty käyttäjätunnus on poistettu',
	'DISALLOW_SUCCESSFUL'		=> 'Kielletty käyttäjätunnus on lisätty',

	'NO_DISALLOWED'				=> 'Ei kiellettyjä käyttäjätunnuksia',
	'NO_USERNAME_SPECIFIED'		=> 'Et ole antanut käyttäjätunnusta muokattavaksi.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Täällä voit hallita syitä, joita käytetään ilmoituksissa ja hylkäyksissä, kun hylkäät viestin. Oletus syy on merkitty tähtimerkillä (*) Et voi poistaa tätä, sillä sitä käytetään, jos mikään muu syy ei päde.',
	'ADD_NEW_REASON'		=> 'Lisää uusi syy',
	'AVAILABLE_TITLES'		=> 'Saatavilla olevat lokalisoidut syiden otsikot',
	
	'IS_NOT_TRANSLATED'		=> 'Tätä syytä ei ole lokalisoitu',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Tätä syytä <samp>Ei ole</samp> lokalisoitu. Mikäli haluat lokalisoida tämän sinun tulee tehdä se oikeaan avaimeen ilmoituksen syiden hallinnassa.',
	'IS_TRANSLATED'			=> 'Tämä syy on lokalisoitu',
	'IS_TRANSLATED_EXPLAIN'		=> 'Tämä syy on lokalisoitu. Mikäli tässä antamasi otsikko on määritelty kielitiedostoissa ilmoituksen syyt osiossa. Lokalisoitu versio tästä syystä pidetään käytössä.',
	
	'NO_REASON'					=> 'Syytä ei löytynyt',
	'NO_REASON_INFO'			=> 'Sinun täytyy antaa otsikko ja kuvaus tälle syylle.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Et voi poistaa tätä oletus syytä "Muu".',

	'REASON_ADD'			=> 'Lisää ilmoituksen/hylkäyksen syitä',
	'REASON_ADDED'			=> 'Ilmoituksen ja hylkäyksen syy on lisätty',
	'REASON_ALREADY_EXIST'	=> 'Tällä otsikollaoleva syy on jo olemassa. Ole hyvä ja anna uusi otsikko.',
	'REASON_DESCRIPTION'	=> 'Syyn kuvaus',
	'REASON_DESC_TRANSLATED'	=> 'Näytettävän syyn kuvaus',
	'REASON_EDIT'			=> 'Muokkaa ilmoitusten/hylkäysten syitä',
	'REASON_EDIT_EXPLAIN'	=> 'Täällä voit lisätä tai muokata syitä. Mikäli tästä syystä on olemassa lokalisoitu versio. Sitä käytetään tämän tilalla.',
	'REASON_REMOVED'		=> 'Ilmoitus/hylkäys on poistettu',
	'REASON_TITLE'			=> 'Syyn otsikko',
	'REASON_TITLE_TRANSLATED'	=> 'Näkyvissä oleva otsikko syylle',
	'REASON_UPDATED'		=> 'Ilmoituksen ja hylkäyksen syy on lisätty',

	'USED_IN_REPORTS'		=> 'Ilmoituksien lukumäärä',
));

?>