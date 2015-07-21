<?php
/** 
*
* acp_ban [Finnish [Fin]]
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 Tunti',
	'30_MINS'		=> '30 Minuuttia',
	'6_HOURS'		=> '6 Tuntia',

	'ACP_BAN_EXPLAIN'	=> 'Täällä voit hallita käyttäjien porttikieltoja nimen, IP:n tai sähköpostin perusteella. Voit estää käyttäjän pääsyn minne tahansa keskustelufoorumin alueelle valitsemalla jonkun vaihtoehdoista. Voit myös antaa lyhyen (255 merkkiä) selityksen porttikiellon syistä. Tämä näytetään ylläpidon logitiedoissa. Porttikiellon pituus voidaan myös määritellä. Mikäli haluat porttikiellon päättyvän tiettynä päivänä. Valitse <u>Porttikiellon pituus:</u>-kohdasta porttikiellon pituus ja anna päivämäärä yyyy-mm-dd muodossa.',

	'BAN_EXCLUDE'			=> 'Älä huomioi porttikieltoa',
	'BAN_LENGTH'			=> 'Porttikiellon pituus',
	'BAN_REASON'			=> 'Porttikiellon syy',
	'BAN_GIVE_REASON'		=> 'Näytettävä syy',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Porttikieltolistat ovat päivitetty',

	'EMAIL_BAN'					=> 'Anna porttikielto yhdelle tai useammalle sähköpostiosoitteelle.',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Ota tämä käyttöön jättääksesi sähköpostiosoitteen huomioimatta jo voimassa oelvista porttikielloista.',
	'EMAIL_BAN_EXPLAIN'			=> 'Voit lisätä useamman kuin yhden sähköpostiosoitteen lisäämällä jokaisen omalle rivilleen. Voit käyttää * merkkiä määritelläksesi osittaiset vastaavuudet. Kuten <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, jne.',
	'EMAIL_NO_BANNED'			=> 'Ei porttikiellossa olevia sähköpostiosoitteita',
	'EMAIL_UNBAN'				=> 'Poista porttikielto tai ota sähköposti huomioon',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Voit poistaa porttikiellon (Tai jättää huomioimatta) useita sähköpostiosoitteita käyttämällä näppäimistöä ja hiirtä. Huomioiduilla sähköpostiosoitteilla on värillinen tausta.',

	'IP_BAN'					=> 'Anna porttikielto yhdelle tai useammalle IP-osoitteelle',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Ota tämä käyttöön jättääksesi IP-osoitteen huomioimatta kaikissa IP-porttikielloissa.',
	'IP_BAN_EXPLAIN'			=> 'Määrittääksesi usean IP-osoitteen tai isäntänimen. Lisää kaikki omalle rivillensä. Määrittääksesi koko IP alueen. Erota alku ja loppu toisistaan viivalla (-), Voit käyttää tähtimerkkiä villikorttina *',
	'IP_HOSTNAME'				=> 'IP-osoite tai isäntänimi',
	'IP_NO_BANNED'				=> 'Ei porttikiellossa olevia IP-osoitteita',
	'IP_UNBAN'					=> 'Poista porttikielto tai ota IP-osoite huomioon',
	'IP_UNBAN_EXPLAIN'			=> 'Voit poistaa porttikiellon (Tai jättää huomioimatta) useita IP-osoitteita käyttämällä näppäimistöä ja hiirtä. Huomioiduilla IP-osoitteilla on värillinen tausta.',

	'LENGTH_BAN_INVALID'		=> 'Päivämäärä tulee olla <kbd>YYYY-MM-DD</kbd> muodossa.',

	'PERMANENT'		=> 'Pysyvä',
	
	'UNTIL'						=> 'Kunnes',
	'USER_BAN'					=> 'Anna porttikielto yhdelle tai useammalle käyttäjätunnukselle',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Ota tämä käyttöön jättääksesi käyttäjätunnuksen huomioimatta kaikissa käyttäjätunnuksen porttikielloissa.',
	'USER_BAN_EXPLAIN'			=> 'Voit asettaa usean käyttäjätunnuksen porttikieltoon asettamalla jokaisen tunnuksen omalle rivillensä. Käytä <u>Etsi käyttäjä</u> toimintoa etsiäksesi käyttäjiä ja lisätäksesi heidät automaattisesti listaan.',
	'USER_NO_BANNED'			=> 'Ei porttikiellossa olevia käyttäjätunnuksia',
	'USER_UNBAN'				=> 'Poista porttikielto tai ota käyttäjätunnukset huomioon',
	'USER_UNBAN_EXPLAIN'		=> 'Voit poistaa porttikiellon (Tai jättää huomioimatta) useita käyttäjiä käyttämällä näppäimistöä ja hiirtä. Huomioiduilla käyttäjillä on värillinen tausta.',

	
));

?>