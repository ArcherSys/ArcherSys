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

$lang = array_merge($lang, array(
	'ADD_ATTACHMENT'			=> 'Liitetiedostot',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Voit lisätä yhden tai useamman tiedoston.',
	'ADD_FILE'					=> 'Lisää toinen tiedosto',
	'ADD_POLL'					=> 'Luo äänestys',
	'ADD_POLL_EXPLAIN'			=> 'Jos et halua listätä äänestystä. Jätä kentät tyhjiksi',
	'ALREADY_DELETED'			=> 'Pahoittelut, mutta viesti on jo poistettu.',
	'ATTACH_QUOTA_REACHED'		=> 'Pahoittelut, mutta liitetiedostojen maksimiraja on tullut vstaan.',
	'ATTACH_SIG'				=> 'Lisää allekirjoitus (allekirjoituksia voi muokata omissa asetuksissa)',

	'BBCODE_A_HELP'				=> 'Näytä liitetiedosto viestin yhteydessä: [attachment=]tiedostonimi.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Lihavointi: [b]Teksti[/b]  (alt+b)',
	'BBCODE_C_HELP'				=> 'Koodi: [code]Koodi[/code]  (alt+c)',
	'BBCODE_E_HELP'				=> 'Lista: Lisää listan elementit',
	'BBCODE_F_HELP'				=> 'Fontin koko: [size=x-small]Pientä tekstiä[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s on <em>Poissa päältä</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s on <em>Käytössä</em>',
	'BBCODE_I_HELP'				=> 'Kursivointi: [i]Teksti[/i]  (alt+i)',
	'BBCODE_L_HELP'				=> 'Lista: [list]Teksti[/list]  (alt+l)',
	'BBCODE_LISTITEM_HELP'			=> 'Listattava kohde: [*]teksti[/*]',
	'BBCODE_O_HELP'				=> 'Järjestetty lista: [list=]text[/list]  (alt+o)',
	'BBCODE_P_HELP'				=> 'Lisää kuva: [img]http://kuvan_osoite[/img]  (alt+p)',
	'BBCODE_Q_HELP'				=> 'Lainaa tekstiä: [quote]Teksti[/quote]  (alt+q)',
	'BBCODE_S_HELP'				=> 'Fontin väri: [color=red]Teksti[/color]  Vinkki: voit käyttää myös color=#FF0000',
	'BBCODE_U_HELP'				=> 'Alleviivaus: [u]Teksti[/u]  (alt+u)',
	'BBCODE_W_HELP'				=> 'Lisää URL: [url]http://url[/url] tai [url=http://url]Linkin teksti[/url]  (alt+w)',
	'BBCODE_D_HELP'				=> 'Flash: [flash=korkeus,leveys]http://url[/flash]  (alt+d)',
	'BUMP_ERROR'				=> 'Et voi tönäistä tätä viestiketjua näin pian edellisen viestin jälkeen.',

	'CANNOT_DELETE_REPLIED'		=> 'Pahoittelut, mutta voit poistaa vain ne viestit, joihin ei ole vastattu.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Viesti on lukittu. Et voi muokata viestiä.',
	'CANNOT_EDIT_TIME'			=> 'Et voi enään muokata tai poistaa tätä viestiä',
	'CANNOT_POST_ANNOUNCE'		=> 'Pahoittelut, mutta et voi lähettää tiedotetta.',
	'CANNOT_POST_STICKY'		=> 'Pahoittelut, mutta et voi lähettää pysyviä viestejä.',
	'CHANGE_TOPIC_TO'			=> 'Vaihda viestiketjun tyyppi',
	'CLOSE_TAGS'				=> 'Sulje tagit',
	'CURRENT_TOPIC'				=> 'Nykyinen viestiketju',

	'DELETE_FILE'				=> 'Poista tiedosto',
	'DELETE_MESSAGE'			=> 'Poista viesti',
	'DELETE_MESSAGE_CONFIRM'	=> 'Haluatko varmasti poistaa tämän viestin?',
	'DELETE_OWN_POSTS'			=> 'Voit poistaa vain omat viestisi.',
	'DELETE_POST_CONFIRM'		=> 'Haluatko varmasti poistaa tämän viestin?',
	'DELETE_POST_WARN'			=> 'Viesti poistetaan pysyvästi. Sitä ei voi palauttaa',
	'DISABLE_BBCODE'			=> 'Älä salli BBCode:a',
	'DISABLE_MAGIC_URL'			=> 'Älä käsittele linkkejä automaattisesti',
	'DISABLE_SMILIES'			=> 'Älä salli hymiöitä',
	'DISALLOWED_EXTENSION'		=> 'Tiedoston tunniste %s ei ole sallittu',
	'DRAFT_LOADED'				=> 'Luonnos ladattu kirjoitus-kenttään. Voit viimeistellä viestisi.<br />Luonnoksesi poistetaan, kun viesti on lähetetty.',
	'DRAFT_LOADED_PM'			=> 'Luonnos on ladattu viestikenttään. Haluat ehkä viimeistellä yksityisviestisi.<br />Luonnoksesi poistetaan, kun olet lähettänyt viestin.',
	'DRAFT_SAVED'				=> 'Luonnos on tallennettu.',
	'DRAFT_TITLE'				=> 'Luonnoksen otsikko',

	'EDIT_REASON'				=> 'Viestin muokkauksen syy',
	'EMPTY_FILEUPLOAD'			=> 'Siirretty tiedosto on tyhjä',
	'EMPTY_MESSAGE'				=> 'Kirjoita viesti.',
	'EMPTY_REMOTE_DATA'			=> 'Tiedostoa ei voi siirtää, yritä siirtää tiedosto käsin.',

	'FLASH_IS_OFF'				=> '[flash] on <em>Poissa käytöstä</em>',
	'FLASH_IS_ON'				=> '[flash] on <em>Käytössä</em>',
	'FLOOD_ERROR'				=> 'Et voi tehdä uutta viestiä näin pian edellisen jälkeen.',
	'FONT_COLOR'				=> 'Fontin väri',
	'FONT_COLOR_HIDE'			=> 'Piilota fontin värit',
	'FONT_HUGE'					=> 'Erittäin iso',
	'FONT_LARGE'				=> 'Suuri',
	'FONT_NORMAL'				=> 'Normaali',
	'FONT_SIZE'					=> 'Fontin koko',
	'FONT_SMALL'				=> 'Pieni',
	'FONT_TINY'					=> 'Erittäin pieni',

	'GENERAL_UPLOAD_ERROR'		=> 'En voinut siirtää liitetiedostoja %s',

	'IMAGES_ARE_OFF'			=> '[img] on <em>Poissa käytöstä</em>',
	'IMAGES_ARE_ON'				=> '[img] on <em>Käytössä</em>',
	'INVALID_FILENAME'			=> '%s on epäkelpo tiedostonimi',

	'LOAD'						=> 'Lataa',
	'LOAD_DRAFT'				=> 'Lataa luonnos',
	'LOAD_DRAFT_EXPLAIN'		=> 'Täällä voit valita luonnoksen, jonka kirjoittamista haluat jatkaa. Tämänhetkinen viestin lähetys keskeytetään ja niiden sisältö positetaan. Voit katsoa, muokata ja poistaa omia luonnoksiasi vierailemalla omissa asetuksissasi.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Sinun täytyy kirjautua sisään ennnekuin voit tönäistä viestiketjuja tällä alueella.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Sinun täytyy kirjautua sisään ennen kuin voit poistaa viestejä tällä alueella.',
	'LOGIN_EXPLAIN_POST'		=> 'Sinun pitää kirjautua sisään kirjoittaaksesi viestejä tällä alueella',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Sinun täytyy kirjautua sisään ennen kuin voit lainata kirjoituksia tällä alueella.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Sinun pitää kirjautua sisään vastataksesi viesteihin tällä alueella',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Maksimi fontin koko on %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Flash tiedostot voivat olla vain %1$d pikseliä korkeat.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Flash tiedostot voivat olla vain %1$d pikseliä leveät.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Kuvat voivat olla vain %1$d pikseliä korkeat.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Kuvat voivat olla vain %1$d pikseliä leveät.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Kirjoita viestisi tähän. Viestissä voi olla maksimissaan <strong>%d</strong> merkkiä.',
	'MESSAGE_DELETED'			=> 'Viestisi on poistettu',
	'MORE_SMILIES'				=> 'Lisää hymiöitä',

	'NOTIFY_REPLY'				=> 'Ilmoita vastauksesta sähköpostiini',
	'NOT_UPLOADED'				=> 'Tiedoston siirto epäonnistui.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Et voi poistaa voimassaolevia äänestysvaihtoehtoja',
	'NO_PM_ICON'				=> 'Ei YV ikonia',
	'NO_POLL_TITLE'				=> 'Anna äänestykselle otsikko',
	'NO_POST'					=> 'Pyytämääsi viestiä ei ole.',
	'NO_POST_MODE'				=> 'Viestin muotoa ei ole määritelty',

	'PARTIAL_UPLOAD'			=> 'Tiedosto siirrettiin vain osittain',
	'PHP_SIZE_NA'				=> 'Liian suuri liitetiedosto.<br />En saanut PHP:n määrittelemää maksimikokoa php.ini tiedostosta.',
	'PHP_SIZE_OVERRUN'			=> 'Liian suuri liitetiedosto. Suurin sallittu siirrettävän tiedoston koko on %d MB.<br />Huomaa, että tämä asetetetaan php.ini tiedostossa ja sitä ei voi ohittaa.',
	'PLACE_INLINE'				=> 'Näytä viestin yhteydessä',
	'POLL_DELETE'				=> 'Poista äänestys',
	'POLL_FOR'					=> 'Äänestys on voimassa',
	'POLL_FOR_EXPLAIN'			=> 'Aseta 0 tai jätä tyhjäksi, jos haluat päättymättömän äänestyksen',
	'POLL_MAX_OPTIONS'			=> 'Kuinka monta vaihtoehtoa käyttäjä voi valita',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Äänestäjä voi valita tämän verran vaihtoehtoja.',
	'POLL_OPTIONS'				=> 'Äänestyksen vaihtoehdot',
	'POLL_OPTIONS_EXPLAIN'		=> 'Laita jokainen vaihtoehto uudelle riville. Voit laittaa maksimissaan <strong>%d</strong> vaihtoehtoa',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Laita jokainen vaihtoehto uudelle riville. Voit laittaa maksimissaan <strong>%d</strong> vaihtoehtoa. Mikäli poistat tai lisäät vaihtoehtoja. Jo äänestetyt vaihtoehdot nollautuvat.',
	'POLL_QUESTION'				=> 'Äänestyksen kysymys',
	'POLL_TITLE_TOO_LONG'		=> 'Äänestyksen otsikossa tulee olla alle 100 merkkiä',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Äänestyksen käsitelty koko on liian suuri. Harkitse BBCoden ja hymiöiden poistamista.',
	'POLL_VOTE_CHANGE'			=> 'Salli uudelleen äänestäminen',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Mikäli sallittu. käyttäjä voi vaihtaa ääntään.',
	'POSTED_ATTACHMENTS'		=> 'Lähetetyt liitetiedostot',
	'POST_APPROVAL_NOTIFY'		=> 'Saat ilmoituksen, kun viestisi on hyväksytty.',
	'POST_CONFIRMATION'			=> 'Viestin varmistus',
	'POST_CONFIRM_EXPLAIN'		=> 'Automatisoidun roskapostituksen estämiseksi joudut lisäämään allaolevassa kuvassa näkyvän vahvistuskoodin. Mikäli sinulla on ongelmia näkemisen kanssa, tai et muuten pysty lukemaan sitä. Ota yhteyttä sivuston %sYlläpitäjään%s.',
	'POST_DELETED'				=> 'Viestisi on poistettu',
	'POST_EDITED'				=> 'Viestiäsi on muokattu',
	'POST_EDITED_MOD'			=> 'Viestiäsi on muokattu ja se odottaa hyväksymistä',
	'POST_GLOBAL'				=> 'Yleistiedote',
	'POST_ICON'					=> 'Viestin kuvake',
	'POST_NORMAL'				=> 'Normaali',
	'POST_REVIEW'				=> 'Viestin yhteenveto',
	'POST_REVIEW_EXPLAIN'		=> 'Tähän viestiketjuun on tullut ainakin yksi vastaus. Saatat haluta tarkistaa viestiäsi tämän varjolla.',
	'POST_STORED'				=> 'Viestisi on lähetetty',
	'POST_STORED_MOD'			=> 'Viestisi on tallennettu, mutta se vaatii vielä valvojan hyväksynnän',
	'POST_TOPIC_AS'				=> 'Viestin tyyppi',
	'PROGRESS_BAR'				=> 'Edistyminen',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Voit sisällyttää vain %1$d lainausta toisiinsa.',

	'SAVE'						=> 'Tallenna',
	'SAVE_DATE'					=> 'tallennuspäivä',
	'SAVE_DRAFT'				=> 'Tallenna luonnos',
	'SAVE_DRAFT_CONFIRM'		=> 'Huomaa, että luonnokset sisältävät vain viestin otsikon ja sisällön. Kaikki muut ominaisuudet poistetaan. Haluatko tallentaa luonnoksen nyt?',
	'SMILIES'					=> 'Hymiöt',
	'SMILIES_ARE_OFF'			=> 'Hymiöt ovat <em>Poissa käytöstä</em>',
	'SMILIES_ARE_ON'			=> 'Hymiöt ovat <em>Käytössä</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Tiedotteen voimassaoloaika',
	'STICK_TOPIC_FOR'			=> 'Tiedote on voimassa',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Aseta 0 tai jätä tyhjäksi pitääksesi tiedotteen pysyvästi voimassa.',
	'STYLES_TIP'				=> 'Vinkki: Muotoilun voi asettaa nopeasti valitsemalla halutun pätkän tekstistä',

	'TOO_FEW_CHARS'				=> 'Viestissäsi on liian vähän merkkejä.',
	'TOO_FEW_POLL_OPTIONS'		=> 'äänestykselle täytyy antaa ainakin kaksi vaihtoehtoa',
	'TOO_MANY_ATTACHMENTS'		=> 'En voi lisätä liitetiedostoa. Liitetiedostojen maksimimäärä on %d ',
	'TOO_MANY_CHARS'			=> 'Viestissäsi on liian monta merkkiä.',
	'TOO_MANY_CHARS_POST'		=> 'Viestissäsi on %1$d merkkiä. Maksimi sallittu määrä merkkejä on %2$d merkkiä.',
	'TOO_MANY_CHARS_SIG'		=> 'Allekirjoituksessasi on %1$d merkkiä. Maksimi sallittu määrä merkkejä on %2$d merkkiä.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Yritit lisätä liian monta äänestysvaihtoehtoa',
	'TOO_MANY_SMILIES'			=> 'Viestissäsi on liian monta hymiötä. Hymiöiden maksimilukumäärä on %d kappaletta.',
	'TOO_MANY_URLS'				=> 'Viestissä on liian monta linkkiä. Linkkien maksimilukumäärä on %d kappaletta.',
	'TOO_MANY_USER_OPTIONS'		=> 'Et voi antaa käyttäjälle enemmän vaihtoehtoja, mitä äänestyksessä on valittavissa',
	'TOPIC_BUMPED'				=> 'Viestiketju on tönäisty päälimmäiseksi',

	'UNAUTHORISED_BBCODE'		=> 'Et voi käyttää kaikkia BBcode-tageja: ',
	'UNGLOBALISE_EXPLAIN'		=> 'Mikäli haluat vaihtaa tämän viestiketjun yleisestä normaaliksi, sinun valita sopiva kohdealue tälle ketjulle.',
	'UPDATE_COMMENT'			=> 'Päivitä kommentti',
	'URL_INVALID'				=> 'Antamasi linkki ei ole toimiva.',
	'URL_NOT_FOUND'				=> 'Hakemaasi tiedostoa ei löydy.',
	'URL_IS_OFF'				=> '[url] on <em>POISSA PÄÄLTÄ</em>',
	'URL_IS_ON'					=> '[url] on <em>PÄÄLLÄ</em>',
	'USER_CANNOT_BUMP'			=> 'Et voi tönäistä viestiä tällä alueella',
	'USER_CANNOT_DELETE'		=> 'Et voi poistaa viestejä tällä alueella',
	'USER_CANNOT_EDIT'			=> 'Et voi muokata viestejä tällä alueella',
	'USER_CANNOT_REPLY'			=> 'Et voi vastata viesteihin tällä alueella',
	'USER_CANNOT_FORUM_POST'	=> 'Et voi suorittaa viesteihin liittyviä toimintoja tällä alueella, koska alueen tyyppi ei tue sitä.',

	'VIEW_MESSAGE'				=> '%sNäytä lähettämäsi viesti%s',

	'WRONG_FILESIZE'			=> 'Liian suuri tiedosto. Maksimikoko on %1d %2s',
	'WRONG_SIZE'				=> 'Kuvan täytyy olla vähintään %1$d pikseliä leveä, %2$d pikseliä korkea ja maksimissaan %3$d pikseliä leveä %4$d pikseliä korkea. Lähettämäsi kuva on %5$d pikseliä leveä ja %6$d pikseliä korkea.',
));

?>