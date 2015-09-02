<?php
/** 
*
* acp_groups [Finnish [Fin]]
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Tästä paneelista voita hallita kaikkia käyttäjäryhmiä. Voit poistaa, luoda tai muokata olemassaolevia ryhmiä. Voit valita valvojia, Muutta avoimen/suljetun ryhmän tilaa ja muuttaa ryhmän nimeä ja kuvausta.',
	'ADD_USERS'						=> 'Lisää käyttäjiä',
	'ADD_USERS_EXPLAIN'				=> 'Täällä voit lisätä uusia käyttäjiä ryhmään. Voit asettaa tämän ryhmän myös oletusryhmäksi valitsemillesi käyttäjille. Voit myös lisätä ryhmälle valvojia. Lisää jokainen käyttäjä uudelle riville.',

	'COPY_PERMISSIONS'				=> 'Kopioi oikeudet',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Kun ryhmä on luotu. Sillä on samat oikeudet kuin valitsemallasi ryhmällä.',
	'CREATE_GROUP'					=> 'Luo uusi ryhmä',

	'GROUPS_NO_MEMBERS'				=> 'Tässä ryhmässä ei ole jäseniä',
	'GROUPS_NO_MODS'				=> 'Ryhmän valvojia ei ole määritelty',

	'GROUP_APPROVE'					=> 'Hyväksy',
	'GROUP_APPROVED'				=> 'Hyväksytyt käyttäjät',
	'GROUP_AVATAR'					=> 'Ryhmän avatar',
	'GROUP_AVATAR_EXPLAIN'			=> 'Tämä kuva näytetään ryhmän hallintapaneelissa.',
	'GROUP_CLOSED'					=> 'Suljettu',
	'GROUP_COLOR'					=> 'Ryhmän väri',
	'GROUP_COLOR_EXPLAIN'			=> 'Määrittää millä värillä käyttäjätunnus näkyy. Jätä tyhjäksi käyttääksesi oletusväriä.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Haluatko varmasti lisätä käyttäjän %1$s tähän ryhmään?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Haluatko varmasti lisätä käyttäjät %1$s tähän ryhmään?',
	'GROUP_CREATED'					=> 'Ryhmä on luotu',
	'GROUP_DEFAULT'					=> 'Oletus',
	'GROUP_DEFS_UPDATED'			=> 'Oletusryhmä on asetettu kaikille valituille jäsenille',
	'GROUP_DELETE'					=> 'Poista',
	'GROUP_DELETED'					=> 'Ryhmä on poistettu ja oletusryhmät ovat asetettu',
	'GROUP_DEMOTE'					=> 'Alenna',
	'GROUP_DESC'					=> 'Ryhmän kuvaus',
	'GROUP_DETAILS'					=> 'Ryhmän tiedot',
	'GROUP_EDIT_EXPLAIN'			=> 'Täällä voit muokata jo olemassaolevaa ryhmää. Voit muokata sen nimeä, kuvausta ja tyyppiä (Avoin, suljettu, jne.). Voit myös asettaa joitain ryhmälle yhteisiä asetuksia, kuten väritystä, arvoa, jne. Täällä tehdyt asetukset ohittavat käyttäjän omat asetukset. Huomaa, että ryhmän jäsenet voivat muuttaa avatariaan, ellet aseta oikeuksia estääksesi tämän.',
	'GROUP_ERR_USERS_EXIST'			=> 'Antamasi käyttäjät ovat jo tämän ryhmän jäseniä',
	'GROUP_FOUNDER_MANAGE'			=> 'Vain perustaja voi muokata',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Sallii ryhmän muokkauksen vain perustajan arvon omaaville käyttäjille.',
	'GROUP_HIDDEN'					=> 'Piilotettu',
	'GROUP_LANG'					=> 'Ryhmän kieli',
	'GROUP_LEAD'					=> 'Ryhmän valvojat',
	'GROUP_LEADERS_ADDED'			=> 'Ryhmälle on annettu uudet valvojat.',
	'GROUP_LEGEND'					=> 'Näytä ryhmä selitteessä',
	'GROUP_LIST'					=> 'Nykyiset jäsenet',
	'GROUP_LIST_EXPLAIN'			=> 'Tässä on täydellinen lista tähän ryhmään kuuluvista käyttäjistä. Voit poistaa käyttäjiä (Paitsi joistain tietyistä ryhmistä) tai tarvittaessa lisätä uusia.',
	'GROUP_MEMBERS'					=> 'Ryhmän jäsenet',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Tässä on täydellinen lista tähän ryhmään kuuluvista käyttäjistä. valvojat, odottavat ja hyväksyty käyttäjät. Täällä voi muokata ryhmän jäsenyyksiä ja heidän rooliaan. Poistaaksesi ryhmältä valvojan, mutta pitääksesi hänet silti ryhmässä. Valitse Alenna, älä Poista. Samaten voit valita Ylennä, antaaksesi jollekin jäsenelle valvojan oikeudet ryhmään.',
	'GROUP_MESSAGE_LIMIT'			=> 'Ryhmän yksityisviestien rajoitus per kansio',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Tämä asetus ohittaa käyttäjän rajoituksen yksityisviesteissä. Arvo 0 tarkoittaa, että käyttäjän oletusasetus on käytössä.',
	'GROUP_MODS_ADDED'				=> 'uudet ryhmän valvojat on määritelty.',
	'GROUP_MODS_DEMOTED'			=> 'Ryhmän valvojat on alennettu',
	'GROUP_MODS_PROMOTED'			=> 'Ryhmän jäsenet on ylennetty',
	'GROUP_NAME'					=> 'Ryhmän nimi',
	'GROUP_NAME_TAKEN'				=> 'Antamasi ryhmän nimi on jo käytössä. Ole hyvä ja valitse toinen nimi.',
	'GROUP_OPEN'					=> 'Avaa',
	'GROUP_PENDING'					=> 'Odottavat jäsenet',
	'GROUP_PROMOTE'					=> 'Ylennä',
	'GROUP_RANK'					=> 'Ryhmän arvonimi',
	'GROUP_RECEIVE_PM'				=> 'Ryhmälle voi lähettää yksityisviestejä',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Huomaa, että piilotetuille ryhmille ei voi lähettää veistejä, vaikka tämä asetus sen sallisikin.',
	'GROUP_REQUEST'					=> 'Pyydä',
	'GROUP_SETTINGS_SAVE'			=> 'Ryhmänlaajuiset asetukset',
	'GROUP_TYPE'					=> 'Ryhmän tyyppi',
	'GROUP_TYPE_EXPLAIN'			=> 'Tämä määrittelee, mitkä käyttäjät voivat nähdä ja liittyä tähän ryhmään.',
	'GROUP_UPDATED'					=> 'Ryhmän asetukset on päivitetty.',
	'GROUP_USERS_ADDED'				=> 'Uudet käyttäjät ovat lisätty.',
	'GROUP_USERS_EXIST'				=> 'valitut käyttäjät ovat jo jäseniä.',
	'GROUP_USERS_REMOVE'			=> 'Käyttäjät ovat poistettu ryhmästä ja oletukset on asetettu',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Luo tästä ryhmästä käyttäjien oletusryhmä',
	'MEMBERS'				=> 'Jäsenet',

	'NO_GROUP'					=> 'Ryhmää ei ole määritelty',
	'NO_GROUPS_CREATED'			=> 'Käyttäjäryhmiä ei ole vielä luotu.',
	'NO_PERMISSIONS'			=> 'Älä kopioi oikeuksia',
	'NO_USERS'					=> 'Et antanut yhtään käyttäjää.',

	'SPECIAL_GROUPS'			=> 'Alustavasti määritellyt ryhmät',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Alustavasti määritellyt ryhmät ovat erityisiä ryhmiä, niitä ei voi poistaa tai muokata suoraan. Voit kuitenkin lisätä jäseniä ja muuttaa perusasetuksia. Valitsemalla "Oletus" voit asettaa ryhmän kaikkien jäsenien oletusrymäksi.',

	'TOTAL_MEMBERS'				=> 'Jäsenet',

	'USERS_APPROVED'				=> 'Käyttäjät on hyväksytty.',
	'USER_DEFAULT'					=> 'Käyttäjän oletus',
	'USER_DEF_GROUPS'				=> 'Käyttäjän määrittelemät ryhmät',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Nämä ovat sinun, tai jonkun muun luomia ryhmiä. Voit muokata ryhmän asetuksia tai poistaa sen kokonaan. valitsemalla "Oletus" Vait asettaa ryhmän kaikkien jäsenien oletusryhmäksi.',
	'USER_GROUP_DEFAULT'			=> 'Aseta oletusryhmäksi',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Jos vastaat kyllä, tämä ryhmä laitetaan jäseniensä oletusrymäksi',
	'USER_GROUP_LEADER'				=> 'Aseta ryhmän valvojaksi',
));

?>