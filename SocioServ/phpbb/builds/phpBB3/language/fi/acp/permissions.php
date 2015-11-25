<?php
/** 
*
* acp_permissions [Finnish [Fin]]
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Oikeudet ovat hyvin rakeiset ja ne ovat ryhmitetty neljään pääluokkaan, Jotka ovat:</p>

		<h2>Yleiset asetukset</h2>
		<p>Nämä asetukset ovat yleisiä asetuksia ja ne ovat voimassa kaikkialla keskustelufoorumilla. Nämä ovat vielä jaettuna käyttäjän oikeuksiin, Ryhmän oikeuksiin, Ylläpitäjiin ja päävalvojiin.</p>

		<h2>Alueeseen perustuvat oikeudet</h2>
		<p>Nämä asetukset määrittelevät oikeuksia keskustelualue kohtaisesti. Nämä ovat vielä jaettuna alueen oikeuksiin, Alueen valvojat, Käyttäjän alueen oikeudet ja ryhmien oikeuksiin.</p>

		<h2>Oikeuksien roolit</h2>
		<p>Näillä asetuksilla luodaan paketteja, jotka ovat varustettu erilaisilla oikeuksilla. Näillä paketeilla voidaan määritellä oikudet myöhemmässä vaiheessa rooleina. Oletus roolit pitävät sisällään niin ison, kuin pienenkin foorumin koko ylläpidon. Kuitenkin jokaisessa neljästä pääryhmässä, voit lisätä, muokata ja poistaa haluamiasi rooleja.</p>

		<h2>Oikeuksien maski</h2>
		<p>Näitä käytetään, kun halutaan katsoa käyttäjillä, valvojilla (pää ja tavallinen), ylläpitäjällä ja alueella voimassa olevia oikeuksia.</p>
	
		<br />

		<p>Saadaksesi lisätietoa oikeuksien asettamisesta ja hallinnoimisesta. Ole hyvä ja katso <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Kohta 1.5 pikaoppaasta</a>.</p>
	',

	'ACL_NEVER'				=> 'Ei koskaan',
	'ACL_SET'				=> 'Aseta oikeuksia',
	'ACL_SET_EXPLAIN'		=> 'Oikeudet perustuvat yksinkertaiseen <samp>KYLLÄ</samp>/<samp>EI</samp> järjestelmään. Mikäli asetat vaihtoehdon <samp>EI KOSKAAN</samp> käyttäjälle tai käyttäjäryhmälle ohittaa kaiken muun sille määritetyn asetuksen. Mikäli et halua asettaa tätä vaihtoehtoa käyttäjälle tai ryhmälle Valitse <samp>EI</samp>. Mikäli tälle asetukselle on määritetty arvo toisaalla. Sitä käytetään asetuksena, muussa tapauksessa <samp>EI KOSKAAN</samp> on oletuksena. Kaikki merkityt objektit (Valinta ruutu niiden edessä) kopioivat oikeudet määrittämästäsi paketista.',
	'ACL_SETTING'			=> 'asetus',

	'ACL_TYPE_A_'			=> 'Ylläpitäjän oikeudet',
	'ACL_TYPE_F_'			=> 'Alueen oikeudet',
	'ACL_TYPE_M_'			=> 'Valvojan oikeudet',
	'ACL_TYPE_U_'			=> 'Käyttäjän oikeudet',

	'ACL_TYPE_GLOBAL_A_'	=> 'Ylläpitäjän oikeudet',
	'ACL_TYPE_GLOBAL_U_'	=> 'Käyttäjän oikeudet',
	'ACL_TYPE_GLOBAL_M_'	=> 'Päävalvojan oikeudet',
	'ACL_TYPE_LOCAL_M_'		=> 'Alueen valvojan oikeudet',
	'ACL_TYPE_LOCAL_F_'		=> 'Alueen oikeudet',
	
	'ACL_NO'				=> 'Ei',
	'ACL_VIEW'				=> 'Oikeuksien katsominen',
	'ACL_VIEW_EXPLAIN'		=> 'Voit katsoa käyttäjäryhmällä voimassaolevat oikeudet. Punainen neliö tarkoittaa, että käyttäjällä/ryhmällä ei ole oikeutta suorittaa toimintoa. Vihreä neliö tarkoittaa, että käyttäjällä/ryhmällä on oikeus toiminnon suorittamiseen.',
	'ACL_YES'				=> 'Kyllä',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Täällä voit liittää ylläpitäjän oikeuksia käyttäjille tai ryhmille. Kaikki käyttäjät, joilla on ylläpitäjän oikeudet. Voivat katsoa ylläpidon hallintapaneelia.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Täällä voit antaa käyttäjälle tai ryhmälle valvojan oikeuksia keskustelualueilla. Hallitaksesi käyttäjän pääsyä keskustelualueelle. Määrittääksesi yleivalvojan oikeuksia tai ylläpotäjiä. Ole hyvä ja käytä asiaankuuluvaa sivua siihen tarkoitukseen.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Täällä voit määrätä, mitkä käyttäjät ja ryhmät pääsevät katsomaan mitäkin alueita. Määrittääksesi valvojia tai ylläpitäjiä. Ole hyvä ja käytä asiaankuuluvaa sivua siihen tarkoitukseen.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Täällä voit antaa yleisvalvojan oikeudet käyttäjälle tai ryhmälle. Yleisvalvojat ovat muuten samanlaisia, kuin tavalliset valvojat, mutta heidän oikeudet ovat voimassa jokaisella alueella.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Täällä voit antaa foorumin oikeuksia ryhmille.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Täällä voit asettaa yleisiä oikeuksia käyttäjäryhmille - käyttäjänoikeudet, yleiset valvojan oikeudet, ja ylläpitäjän oikeudet. Käyttäjän oikeuksiin kuuluu asetuksia, kuten avatar-kuvan käyttö ja yksityisviestien lähettäminen. Yleiset valvojan asetukset, kuten viestien hyväksyminen, viestiketjujen hallinta, porttikiellot ja viimeisenä ylläpitäjän oikeudet, kuten mukautettujen BBCode tgien luonti ja foorumeiden hallinta. Yksittäisiä käyttäjän oikeuksia tulisi muokata vain harvoin. Suositeltava tapa on lisätä käyttäjä ryhmään, jolle on annettu oikeudet toiminon suorittamiseen.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Täällä voit hallita ylläpitäjän roolin oikeuksia. Roolit ovat voimassaolevia oikeuksia, Mikäli muokkaat roolia. Kohteet joilla tämä rooli on käytössä muuttavat myös näiden oikeuksia.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Täällä voit hallita alueen oikeuksien rooleja. Roolit ovat voimassaolevia oikeuksia, Mikäli muokkaat roolia. Kohteet joilla tämä rooli on käytössä muuttavat myös näiden oikeuksia.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Täällä voit hallita valvojien oikeuksien rooleja. Roolit ovat voimassaolevia oikeuksia, Mikäli muokkaat roolia. Kohteet joilla tämä rooli on käytössä muuttavat myös näiden oikeuksia.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Täällä voit hallita käyttäjän oikeuksien rooleja. Roolit ovat voimassaolevia oikeuksia, Mikäli muokkaat roolia. Kohteet joilla tämä rooli on käytössä muuttavat myös näiden oikeuksia.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Täällä voit liittää keskustelualueen oikeuksia käyttäjille.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Täällä voit liittää yleisiä oikeuksia käyttäjille - käyttäjän oikeudet, yleisvalvojan tai ylläpitäjän oikeudet. Käyttäjän oikeudeta sallivat tiettyjä toimintoja, kutan avatar-kuvan käyttämisen, yksityisviestien lähettämisen, jne. Yleisvalvojan oikeuksia, kuten viestien hyväksyminen, viestiketjujen hallinta, porttikieltojen hallinta, jne ja viimeisenä ylläpitäjän asetukset, kuten oikeuksien määrittely, mukautetun BBCoden luominen, alueiden hallinta, jne. Sinun kannattaa käyttää ryhmän oikeuksien hallintaa muokataksesi useampaa käyttäjää kerralla. Käyttäjän henkilökohtaisia asetuksia tarvitsee muutta vain tietyissä tapauksissa. Suositeltava tapa on isätä käyttäjä ryhmään ja antaa ryhmälle oikeuksia.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Täällä voit katsoa voimassaolevat ylläpitäjän oikeuksia käyttäjälle tai ryhmälle.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Täällä voit katsoa yleivalvojan oikeuksia valitsemillesi käytäjille tai ryhmille.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Täällä voit katsoa keskustelualueen oikeuksia tietyille käyttäjille tai ryhmille.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Täällä voit katsoa keskustelualueen oikeuksia valitsemiltasi käyttäjiltä, ryhmiltä tai keskustelualueilta.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Täällä voit katsoa voimassaolevat oikeudet valitsemiltasi käyttäjilta tai ryhmiltä.',

	'ADD_GROUPS'				=> 'Lisää ryhmiä',
	'ADD_PERMISSIONS'			=> 'Lisää oikeuksia',
	'ADD_USERS'					=> 'Lisätä käyttäjiä',
	'ADVANCED_PERMISSIONS'		=> 'Erikoisoikeudet',
	'ALL_GROUPS'				=> 'Valitse kaikki ryhmät',
	'ALL_NEVER'					=> 'Kaikki <samp>EI KOSKAAN</samp>',
	'ALL_NO'					=> 'Kaikki <samp>EI</samp>',
	'ALL_USERS'					=> 'Valitse kaikki käyttäjät',
	'ALL_YES'					=> 'Kaikki <samp>KYLLÄ</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Ota kaikki oikeudet käyttöön',
	'APPLY_PERMISSIONS'			=> 'Ota oikeudet käyttöön',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Tälle kohteelle määritetyt oikeudet ja roolit asetetaan vain tälle ja merkityille kohteille.',
	'AUTH_UPDATED'				=> 'Oikeudet ovat päivitetyt',

	'CREATE_ROLE'				=> 'Luo rooli',
	'CREATE_ROLE_FROM'			=> 'Käytä asetuksia...',
	'CUSTOM'					=> 'Mukautettu...',

	'DEFAULT'					=> 'Oletus',
	'DELETE_ROLE'				=> 'Poista rooli',
	'DELETE_ROLE_CONFIRM'		=> 'Haluatko varmsti poistaa tämän roolin? kohteet jotka käyttävät tätä roolia <strong>eivät</strong> eivät menetä oikeuksiansa.',
	'DISPLAY_ROLE_ITEMS'		=> 'Näytä tätä roolia käyttävät kohteet',

	'EDIT_PERMISSIONS'			=> 'Muokkaa oikeuksia',
	'EDIT_ROLE'					=> 'Muokkaa roolia',

	'GROUPS_NOT_ASSIGNED'		=> 'Tälle roolille ei ole asetettu ryhmiä',

	'LOOK_UP_GROUP'				=> 'Etsi käyttäjäryhmä',
	'LOOK_UP_USER'				=> 'Etsi käyttäjä',

	'MANAGE_GROUPS'		=> 'Hallitse ryhmiä',
	'MANAGE_USERS'		=> 'Hallitse käyttäjiä',

	'NO_AUTH_SETTING_FOUND'		=> 'oikeusasetuksia ei ole määritelty.',
	'NO_ROLE_ASSIGNED'			=> 'Ei määrättyä roolia...',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Vaihtaminen tähän rooliin ei muuta oikealla puolella olevia asetuksia. Mikäli haluat poistaa kaikki oikeudet käytöstä. Käytä "Kaikki <samp>EI</samp>" linkkiä.',
	'NO_ROLE_AVAILABLE'			=> 'Ei roolia saatavilla',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Ole hyvä ja anna roolille nimi.',
	'NO_ROLE_SELECTED'			=> 'Roolia ei löytynyt.',
	'NO_USER_GROUP_SELECTED'	=> 'Et ole valinnut yhtään käyttäjää tai ryhmää.',

	'ONLY_FORUM_DEFINED'	=> 'Määrittelit vain valitsemasi alueet. Ole hyvä ja valitse ainakin yksi käyttäjä tai ryhmä.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Oikeuksia ja rooleja käytetään kaikkiin valitsemiisi kohteisiin',
	'PLUS_SUBFORUMS'				=> '+sisä-alueet',

	'REMOVE_PERMISSIONS'			=> 'Poista oikeudet',
	'REMOVE_ROLE'					=> 'Poista rooli',
	'RESULTING_PERMISSION'			=> 'Tuloksena oleva oikeus',
	'ROLE'							=> 'Rooli',
	'ROLE_ADD_SUCCESS'				=> 'Rooli on lsätty.',
	'ROLE_ASSIGNED_TO'				=> 'Käyttäjät/ryhmä lisätty %s',
	'ROLE_DELETED'					=> 'Rooli on poistettu.',
	'ROLE_DESCRIPTION'				=> 'Roolin kuvaus',

	'ROLE_ADMIN_FORUM'			=> 'Alueen ylläpitäjä',
	'ROLE_ADMIN_FULL'			=> 'Täysi ylläpitäjä',
	'ROLE_ADMIN_STANDARD'		=> 'Normaali ylläpitäjä',
	'ROLE_ADMIN_USERGROUP'		=> 'Käyttäjän ja ryhmän ylläpitäjä',
	'ROLE_FORUM_BOT'			=> 'Bot pääsy',
	'ROLE_FORUM_FULL'			=> 'Täysi pääsy',
	'ROLE_FORUM_LIMITED'		=> 'Rajoitettu pääsy',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Rajoitettu pääsy + äänestykset',
	'ROLE_FORUM_NOACCESS'		=> 'Ei pääsyä',
	'ROLE_FORUM_ONQUEUE'		=> 'Valvontajonossa',
	'ROLE_FORUM_POLLS'			=> 'Normaali pääsy + äänestykset',
	'ROLE_FORUM_READONLY'		=> 'Vain luku',
	'ROLE_FORUM_STANDARD'		=> 'Normaali pääsy',
	'ROLE_MOD_FULL'				=> 'Täysi valvoja',
	'ROLE_MOD_QUEUE'			=> 'Jonon valvoja',
	'ROLE_MOD_SIMPLE'			=> 'Yksinkertainen valvoja',
	'ROLE_MOD_STANDARD'			=> 'Normaali valvoja',
	'ROLE_USER_FULL'			=> 'Kaikki toiminnot',
	'ROLE_USER_LIMITED'			=> 'Rajoitetut toiminnot',
	'ROLE_USER_NOAVATAR'		=> 'Ei avataria',
	'ROLE_USER_NOPM'			=> 'Ei yksityisviestejä',
	'ROLE_USER_STANDARD'		=> 'Normaalit toiminnot',

	'ROLE_DESCRIPTION_ADMIN_FORUM'		=> 'Pääsee muuttamaan alueen hallinnan ja oikeuden asetuksia.',
	'ROLE_DESCRIPTION_ADMIN_FULL'		=> 'Saa täydelliset oikeudet keskustelufoorumin ylläpitämiseen.<br />Ei suositeltava toimenpide.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'	=> 'Saa oikeudet useimpiin ylläpidon asetuksiin, mutta ei saa käyttää palvelimen tai järjestelmän työkaluja.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'	=> 'Voi hallita ryhmiä ja käyttäjiä: Voi muuttaa oikeuksia, asetuksia, hallita porttikieltoja ja hallita arvonimiä.',
	'ROLE_DESCRIPTION_FORUM_BOT'		=> 'Tämä rooli on tarkoitettu boteille ja hakukoneiden spidereille.',
	'ROLE_DESCRIPTION_FORUM_FULL'		=> 'Voi käyttää kaikkia alueen toimintoja, tiedotteiden luominen mukaanluettuna. Voi myös ohittaa aikarajat.<br />Tätä ei suositella normaalille käyttäjälle.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'	=> 'Voi käyttää joitakin alueen toimintoja, mutta ei voi lähettää liitetiedostoja tai käyttää viestien kuvakkeita.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Kuten rajoitettu pääsy, mutta voi luoda äänestyksiä.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'	=> 'Ei näe eikä pääse tälle alueelle.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'	=> 'Voi käyttää suurinta osaa alueen toiminnoista liitetiedostot mukaanlukien, mutta viestit ja avaukset täytyy hyväksyttää valvojilla.',
	'ROLE_DESCRIPTION_FORUM_POLLS'		=> 'Kuten normaalit oikeudet, mutta saa myös luoda äänestyksiä.',
	'ROLE_DESCRIPTION_FORUM_READONLY'	=> 'Voi lukea aluetta, mutta ei voi vastata tai kirjoittaa uutta avausta.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'	=> 'Voi käyttää suurinta osaa alueen toiminnoista liitetiedostot mukaanlukien, mutta ei voi lukita tai poistaa omaa viestiään tai luoda äänestystä.',
	'ROLE_DESCRIPTION_MOD_FULL'			=> 'Voi käyttää kaikkia valvojien toimintoja. Porttikiellot mukaanluettuna',
	'ROLE_DESCRIPTION_MOD_QUEUE'		=> 'Voi käyttää valvojien viestijonoa hyväksyäkseen ja muokatakseen viestejä, mutta ei muuta.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'		=> 'Voi käyttää viestiketjun perustoimintoja. Ei voi lähettää varoituksia tai valvoa viestijonoa.',
	'ROLE_DESCRIPTION_MOD_STANDARD'		=> 'Voi käyttää useimpia valvojien työkaluja, mutta ei voi antaa porttikieltoa tai vaihtaa viestin kirjoittajaa.',
	'ROLE_DESCRIPTION_USER_FULL'		=> 'Voi käyttää kaikkia käyttäjilel tarjolla olevia toimintoja, Mukaanluettuna käyttäjätunuksen vaihtaminen ja aikarajojen ohittaminen.<br />Ei suositeltava toimenpide.',
	'ROLE_DESCRIPTION_USER_LIMITED'		=> 'Voi käyttää joitakin käyttäjien toimintoja. Liitetiedostot, sähköposti ja pikaviestit eivät ole sallittuja.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'	=> 'Rajoitetut opikeudet eikä saa käyttää avataria.',
	'ROLE_DESCRIPTION_USER_NOPM'		=> 'Rajoitetut oikeudet ja ei saa käyttää yksityisviestejä.',
	'ROLE_DESCRIPTION_USER_STANDARD'	=> 'Pääsee käyttämään suurinta osa, mutta ei kaikkia toimintoja. Ei voi vaihtaa käyttäjän nimeä tai ohittaa aikarajoja, esimerkiksi.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Voit lisätä lyhyen kuvauksen mitä tämä rooli tekee tai mihin käyttöön se on tarkoitettu. Syöttämäsi teksti näytetään myös oikeudet sivulla.',
	'ROLE_DESCRIPTION_LONG'			=> 'Roolin kuvaus on liian pitkä. Ole hyvä ja rajoita kuvaus alle 4000 merkkiin.',
	'ROLE_DETAILS'					=> 'Roolin yksityiskohdat',
	'ROLE_EDIT_SUCCESS'				=> 'Roolin muokkaus onnistui.',
	'ROLE_NAME'						=> 'Roolin nimi',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Rooli nimeltä <strong>%s</strong> on jo olemassa tämän tyyppiselle oikeudelle.',
	'ROLE_NOT_ASSIGNED'				=> 'Roolia ei ole vielä annettu.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'valitsemaasi aluetta/alueita ei ole olemassa',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Valitsemaasi tyhmää/ryhmiä ei ole olemassa',
	'SELECTED_USER_NOT_EXIST'		=> 'Valitsemaasi käyttäjää/käyttäjiä ei ole olemassa',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'valitsemastasi alueesta otetaan myös sisä-alueet mukaan',
	'SELECT_ROLE'					=> 'Valitse rooli...',
	'SELECT_TYPE'					=> 'Valitse tyyppi',
	'SET_PERMISSIONS'				=> 'Aseta oikeudet',
	'SET_ROLE_PERMISSIONS'			=> 'Aseta roolin oikeudet',
	'SET_USERS_PERMISSIONS'			=> 'Aseta käyttäjän oikeudet',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Aseta käyttäjän oikeudet alueella',

	'TRACE_DEFAULT'					=> 'Oletuksena kaikki oikeudet ovat <samp>EI</samp> (määrittämätön). Jotta sen voi ohittaa jollain toisella asetuksella.',
	'TRACE_FOR'						=> 'Jäljitä',
	'TRACE_GLOBAL_SETTING'			=> '%s (Yleinen)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Tämän ryhmien oikeuksien asetus on asetettu <samp>EI KOSKAAN</samp> kuten asetukset yhteensä, joten vanhat asetukset pidetään.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Tämän ryhmän oikeudet tälle alueelle on asetettu <samp>EI KOSKAAN</samp> kuten yhteisarvokin, joten vanha arvo pidetään.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Tämän ryhmien oikeuksien asetus on asetettu <samp>EI KOSKAAN</samp> mikä tulee uudeksi asetukseksi, koska sitä ei oltu asetettu vielä. (Aseta <samp>EI</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Tämän ryhmän oikeudet tälle alueelle on asetettu <samp>EI KOSKAAN</samp>, mistä tulee uusi yhteisarvo, sillä sitä ei oltu asetettu vielä. (Aseta <samp>EI</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Tämän ryhmien oikeuksien asetus on asetettu <samp>EI KOSKAAN</samp> joks ohittaa <samp>KYLLÄ</samp> ja <samp>EI KOSKAAN</samp> asetukset tälle käyttäjälle.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Tämän ryhmän oikeudet tälle alueelle on asetettu <samp>EI KOSKAAN</samp>, joka muuttaa asetuksen <samp>KYLLÄ</samp> muotoon <samp>EI KOSKAAN</samp> tälle käyttäjälle.',
	'TRACE_GROUP_NO'				=> 'Tämän ryhmän oikeus on (Aseta <samp>EI</samp> joten yhteisarvo pidetään.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Oikeudet on määritelty <samp>EI</samp> tällä alueella olevalle ryhmälle, joten vanha arvo pidetään.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Tämän ryhmän oikeudet on määritelty <samp>KYLLÄ</samp>, mutta arvoa <samp>EI KOSKAAN</samp> ei voida ylikirjoittaa.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Tämän ryhmän oikeudet tällä alueella on määritelty <samp>KYLLÄ</samp>, mutta arvoa <samp>EI KOSKAAN</samp> ei voida ylikirjoittaa.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Tämän ryhmän oikeudet on määritelty <samp>KYLLÄ</samp> mikä tulee uudeksi asetukseksi, koska sitä ei oltu asetettu vielä. (Aseta <samp>EI</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Tämän ryhmän oikeudet tällä alueella on määritelty <samp>KYLLÄ</samp> mikä tulee uudeksi asetukseksi, koska sitä ei oltu asetettu vielä. (Aseta <samp>EI</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Tämän ryhmien oikeuksien asetus on asetettu <samp>KYLLÄ</samp> ja oikeudet ovat jo asetettu <samp>KYLLÄ</samp>, joten yhteisarvo pidetään.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Tämän ryhmän oikeudet tällä alueella on määritelty <samp>KYLLÄ</samp> ja yhteisarvo on asetettu <samp>KYLLÄ</samp>, joten arvo pidetään.',
	'TRACE_PERMISSION'				=> 'Jäljitä oikeudet - %s',
	'TRACE_RESULT'					=> 'Jäljityksen tulos',
	'TRACE_SETTING'					=> 'Jäljityksen asetukset',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Tämän alueen itsenäiset käyttäjän oikeudet arvioituu <samp>KYLLÄ</samp> Mutta yhteisarvo on jo määritelty <samp>KYLLÄ</samp>, joten yhtisarvo pidetään. %sJäljitä yleiset oikeudet%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Tämän alueen itsenäiset käyttäjän oikeudet arvioituu <samp>KYLLÄ</samp> joka ylikirjoittaa tämänhetkisen tuloksen <samp>EI KOSKAAN</samp>. %sJäljitä yleiset oikeudet%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Tämän alueen itsenäiset käyttäjän oikeudet arvioituu <samp>EI KOSKAAN</samp> mikä ei vaikuta paikallisiin oikeuksiin. %sJäljitä yleiset oikeudet%s',

	'TRACE_USER_FOUNDER'					=> 'Tämä käyttäjä on merkitty perustajaksi, joten ylläpitäjän oikeudet ovat automaattiseti voimassa.',
	'TRACE_USER_KEPT'						=> 'Käyttäjän oikeus on <samp>EI</samp> Joten vanha yhteisarvo pidetään.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Käyttäjän oikeudet tälle alueelle on asetettu <samp>EI</samp>, joten vanha arvo pidetään.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Käyttäjän oikeus on asetettu <samp>EI KOSKAAN</samp> ja yhteisarvo on EI KOSKAAN, joten mitään ei muuteta.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Käyttäjän oikeus on asetettu <samp>EI KOSKAAN</samp> ja yhteisarvo on asetettu <samp>EI KOSKAAN</samp>, joten mitään ei muuteta.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Käyttäjän oikeus on asetettu <samp>EI KOSKAAN</samp> josta tulee yhteisarvo, koska asetus oli <samp>EI</samp>.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Käyttäjän oikeudet tälle alueelle on asetettu <samp>NEVER</samp> which becomes the total value because it was set to NO.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Käyttäjän oikeus on asetettu <samp>EI KOSKAAN</samp> ja se ylikirjoittaa asetuksen KYLLÄ.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Käyttäjän oikeudet tälle alueelle on asetettu <samp>NEVER</samp> and overwrites the previous <samp>YES</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Käyttäjän oikeus on <samp>EI</samp> ja yhteisarvo on <samp>EI</samp>, joten oletusarvo on <samp>EI KOSKAAN</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Käyttäjän oikeudet tälle alueelle on <samp>EI</samp> ja myös yhteisarvo on EI, joten tuloksena on <samp>EI KOSKAAN</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Käyttäjän oikeus on asetettu <samp>KYLLÄ</samp> Mutta yhteisarvoa <samp>EI KOSKAAN</samp> ei voida ylikirjoittaa.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Käyttäjän oikeudet tälle alueelle on asetettu <samp>YES</samp>, mutta asetusta <samp>EI KOSKAAN</samp> ei voida ylikirjoittaa.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Käyttäjän oikeus on asetettu <samp>KYLLÄ</samp> josta tulee yhteisarvo, koska asetus oli laietttu <samp>EI</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Käyttäjän oikeudet tälle alueelle on asetettu <samp>KYLLÄ</samp>, josta tulee uusi yhteisarvo, sillä asetus oli asetettu <samp>EI</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Käyttäjän oikeus on asetettu <samp>KYLLÄ</samp> ja yhteisarvo on asetettu <samp>KYLLÄ</samp>, joten mitään ei muuteta.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Käyttäjän oikeudet tälle alueelle on asetettu <samp>KYLLÄ</samp> ja yhteisarvo on <samp>KYLLÄ</samp>, joten mitään ei muuteta.',
	'TRACE_WHO'								=> 'Kuka',
	'TRACE_TOTAL'							=> 'Yhteensa',

	'USERS_NOT_ASSIGNED'			=> 'Tälle roolille ei ole asetettu käyttäjiä',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'On jäsenenä näissä oletusryhmissä',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'On jäsenenä näissä mukautetuissa ryhmissä',

	'VIEW_ASSIGNED_ITEMS'	=> 'Näytä määrätyt kohteet',
	'VIEW_LOCAL_PERMS'		=> 'Paikalliset oikeudet',
	'VIEW_GLOBAL_PERMS'		=> 'Yleiset oikeudet',
	'VIEW_PERMISSIONS'		=> 'Näytä oikeudet',

	'WRONG_PERMISSION_TYPE'	=> 'Väärä oikeuksien tyyppi valittu',
));

?>