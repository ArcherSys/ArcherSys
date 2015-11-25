<?php
/** 
*
* acp_forums [Finnish [Fin]]
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Automaattinen siivous viestin iän mukaan',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Viesti poistetaan, jos siihen ei ole tullut vastauksia tietyn ajan jälkeen.',
	'AUTO_PRUNE_FREQ'			=> 'Automaattisen siivouksen suorittaminen',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Kuinka monta päivää on siivousten välillä.',
	'AUTO_PRUNE_VIEWED'			=> 'Automaattinen siivous viestin katsomisen mukaan',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Viesti poistetaan, jos sitä ei ole katsottu tietyn ajan sisällä.',

	'COPY_PERMISSIONS'				=> 'Kopioi oikeudet',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Kun alue on luotu, Sillä on samat oikeudet, kuin valitsemallasi alueella. Mikäli yhtään aluetta ei ole valittuna, uusi alue on piilotettuna, kunnes sen oikeudet on asetettu.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Mikäli kopioit oikeudet, uudella alueella on samat oikeudet, kuin valitsemallasi alueella. Tämä myös ohittaa kaikki aikaisemmin asetetut oikeudet laittamalla ne samoiksi, kuin valitsemallasi alueella. Mikäli yhtää aluetta ei ole valittu, nykyiset asetukset pidetään voimassa.',
	'CREATE_FORUM'					=> 'Luo uusi keskustelualue',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Poista sisältö tai siirrä alueelle',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Poista sisäalueet tai siirrä alueelle',
	'DEFAULT_STYLE'						=> 'Oletustyyli',
	'DELETE_ALL_POSTS'					=> 'Poista viestit',
	'DELETE_SUBFORUMS'					=> 'Poista sisäalueet ja viestit',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Ota aktiiviset viestiketjut käyttään',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Mikäli tämä on otettu käyttöön. Aktiiviset viestiketjut valituista sisäalueista näytetään tämän kategorian alla.',

	'EDIT_FORUM'					=> 'Muokkaa keskustelualuetta',
	'ENABLE_INDEXING'				=> 'Ota hakutoiminto käyttöön',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Mikäli tämä on otettu käyttöön. Alueen viestejä voi etsiä hakutoiminnon avulla.',
	'ENABLE_POST_REVIEW'			=> 'tarkista vastaukset',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Mikäli tämä on otettu käyttöön, saat varoituksen jos joku on kerennyt vastata viestiketjuun samaan aikaan, kun kirjoitit viestiä. Tämä tulisi ottaa pois käytöstä aktiivisilta chatti-foorumeilta.',
	'ENABLE_RECENT'					=> 'Näytä aktiiviset viestiketjut',
	'ENABLE_RECENT_EXPLAIN'			=> 'Mikäli tämä on käytössä. Tämän alueen aktiiviset viestiketjut näytetään aktiivisten ketjujen listassa.',
	'ENABLE_TOPIC_ICONS'			=> 'Viestien kuvakkeet',

	'FORUM_ADMIN'						=> 'Keskustelualueen ylläpito',
	'FORUM_ADMIN_EXPLAIN'				=> 'phpBB3:ssa ei ole kategorioita, vaan kaikki perustuu alueisiin. Jokaisella alueella voi olla rajoittamaton määrä sisä-alueita ja voit määritellä voidaanko jokaiseen lähettää viesti (Esim, Käyttäytyykö se samalla tavalla, kuin vanha kategoria). Täällä voit lisätä, muokata, poistaa, lukita ja vapauttaa yksittäisiä alueita ja asettaa joitan muita asetuksia. Voit myös synkronoida viestit uudelleen, mikäli ne ovat menneet sekaisin.',
	'FORUM_AUTO_PRUNE'					=> 'Automaattinen siivoaminen',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Siivoaa alueen viestit automaattisesti. Aikarajat ovat asetettavissa.',
	'FORUM_CREATED'						=> 'Keskustelualue on luotu.',
	'FORUM_DATA_NEGATIVE'				=> 'Siivoamisen parametrit eivät voi olla negatiivisia.',
	'FORUM_DESC_TOO_LONG'				=> 'Alueen kuvaus on liian pitkä. Kuvauksen tulee olla alle 4000 merkkiä.',
	'FORUM_DELETE'						=> 'Poista keskustelualue',
	'FORUM_DELETE_EXPLAIN'				=> 'Alla oleva lomakeella voi poistaa alueita ja päättää mitä sielä oleville viesteille tehdään.',
	'FORUM_DELETED'						=> 'Keskustelualue on poistettu',
	'FORUM_DESC'						=> 'Kuvaus',
	'FORUM_DESC_EXPLAIN'				=> 'Kaikki kuvaukset näytetään sellaisenaan.',
	'FORUM_EDIT_EXPLAIN'				=> 'Voit muokata tätä aluetta allaolevalla lomakkeella. Huomaa, että valvojan oikeudet asetetaan alueen oikeuksissa jokaiselle käyttäjälle tai käyttäjäryhmälle.',
	'FORUM_IMAGE'						=> 'Alueen kuva',
	'FORUM_IMAGE_EXPLAIN'				=> 'Alueen kuvan sijainti suhteessa phpBB juurihakemistoon',
	'FORUM_LINK_EXPLAIN'				=> 'Täysi URL (Protokolla mukaanluettuna, esimerkiksi, <samp>http://</samp>) johon käyttäjä ohjataan tätä aluetta klikattaessa. Esimerkiksi <samp>http://www.phpbb.com/</samp>',
	'FORUM_LINK_TRACK'					=> 'Pidä kirjaa uudelleenohjauksista',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Kertoo kuinka monta kertaa linkkissä on käyty.',
	'FORUM_NAME'						=> 'Alueen nimi',
	'FORUM_NAME_EMPTY'					=> 'Anna alueelle nimi.',
	'FORUM_PARENT'						=> 'Isäntänä toimiva alue',
	'FORUM_PASSWORD'					=> 'Alueen salasana',
	'FORUM_PASSWORD_CONFIRM'			=> 'Varmista salasana',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Tämä tarvitaan vain, jos laitat alueelle salasanan.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Määrittää salasanan tälle alueelle. Käytä oikeuksien hallintaa referenssinä.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Antamasi salasanat eivät täsmää.',
	'FORUM_PRUNE_SETTINGS'				=> 'Automaattinen siivoaminen',
	'FORUM_RESYNCED'					=> 'Alue "%s" on synkronoitu uudelleen ',
	'FORUM_RULES_EXPLAIN'				=> 'Alueen säännöt voidaan näyttää kaikilla alueen sivuilla.',
	'FORUM_RULES_LINK'					=> 'Linkki alueen sääntöihin',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Voit lisätä URLin sivuun tai viestiin, jossa on tämän alueen säännöt. Tämä asetus ohittaa kirjoittamasi säännöt.',
	'FORUM_RULES_PREVIEW'				=> 'Sääntöjen esikatselu',
	'FORUM_RULES_TOO_LONG'				=> 'Alueen sääntöjen tulee olla alle 4000 merkkiä.',
	'FORUM_SETTINGS'					=> 'Alueen asetukset',
	'FORUM_STATUS'						=> 'Alueen tilanne',
	'FORUM_STYLE'						=> 'Alueen tyyli',
	'FORUM_TOPICS_PAGE'					=> 'Viestiketjua per sivu',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Mikäli arvo ei ole nolla. Tämä asetus ohittaa asettamasi oletusasetukset.',
	'FORUM_TYPE'						=> 'Alueen tyyppi',
	'FORUM_UPDATED'						=> 'Alueen tiedot on päivitetty.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Olet vaihtamassa kirjoitettavissa olevaa aluetta, jolla on sisä-alueita, linkiksi. Ole hyvä ja siirrä sisä-alueet pois tältä alueelta ennen jatkamista. Muussa tapauksessa et enään näe tähän alueeseen kytkettyjä alueita.',

	'GENERAL_FORUM_SETTINGS'	=> 'Alueen yleiset asetukset',

	'LINK'					=> 'Linkki',
	'LIST_INDEX'			=> 'Näytä alue etusivulla',
	'LIST_INDEX_EXPLAIN'	=> 'Näyttää linkin tälle alueelle ensimmäisen alueen juuressa.',
	'LOCKED'				=> 'Lukittu',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Valitsemallesi alueelle ei voi siirtää viestejä. Ole hyvä, ja valitse alue, jolle voi lähettää viestejä.',
	'MOVE_POSTS_TO'					=> 'Siirrä viestit',
	'MOVE_SUBFORUMS_TO'				=> 'Siirrä sisä-alueet',

	'NO_DESTINATION_FORUM'			=> 'Et ole määritellyt aluetta, johon tämän sisältö voidaan siirtää',
	'NO_FORUM_ACTION'				=> 'Alueen sisällölle ei ole määritelty tapahtumaa',
	'NO_PARENT'						=> 'Ei isäntä-aluetta',
	'NO_PERMISSIONS'				=> 'Älä kopioi oikeuksia',
	'NO_PERMISSION_FORUM_ADD'		=> 'Sinulla ei ole tarvittavia oikeuksia uusien alueiden lisäämiseen',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Sinulla ei ole tarvittavia oikeuksia alueiden poistamiseen',

	'PARENT_IS_LINK_FORUM'		=> 'Valitsemasi isäntä-alue on linkki. Linkkinä toimivat alueet eivät voi pitää sisällään muita alueita. Ole hyvä ja valitse kategoria tai alue isännäksesi.',
	'PARENT_NOT_EXIST'			=> 'Isäntä-aluetta ei ole olemassa',
	'PRUNE_ANNOUNCEMENTS'		=> 'Siivoa tiedotteet',
	'PRUNE_STICKY'				=> 'Siivoa pysyvät tiedotteet',
	'PRUNE_OLD_POLLS'			=> 'Siivoa vanhat äänestykset',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Poista keskusteluketjut, joissa on äänestys eikä siihen ole tullut vastausta.',
	
	'REDIRECT_ACL'	=> 'Nyt voit asettaa %starvittavat oikeudet%s tälle alueelle.',
	
	'SYNC_IN_PROGRESS'			=> 'Synkronoin alueita',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Synkronoin alueelta %1$d/%2$d.',

	'TYPE_CAT'			=> 'Kategoria',
	'TYPE_FORUM'		=> 'Alue',
	'TYPE_LINK'			=> 'Linkki',

	'UNLOCKED'			=> 'avoin',
));

?>