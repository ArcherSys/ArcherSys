<?php
/** 
*
* acp_users [Finnish [Fin]]
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
	'ADMIN_SIG_PREVIEW'		=> 'Allekirjoituksen esikatselu',
	'AT_LEAST_ONE_FOUNDER'	=> 'Et voi muuttaa tätä perustajaa normaaliksi käyttäjäksi. Keskustelufoorumilla täytyy olla vähintään yksi perustaja. Mikäli haluat ottaa perustajan oikeudet pois tältä käyttäjältä. Luo ensin jostain toisesta käyttäjästä perustaja.',

	'BAN_ALREADY_ENTERED'	=> 'Tämä porttikielto on jo annettu. Porttikieltolistaa ei ole päivitetty.',
	'BAN_SUCCESSFUL'		=> 'Porttikielto on annettu',

	'CANNOT_BAN_FOUNDER'			=> 'Et voi antaa porttikieltoa perustajan tunnuksille.',
	'CANNOT_BAN_YOURSELF'			=> 'Et voi asettaa itsesäsi porttikieltoon.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Et voi sulkea botin tunnuksia. Poista mieluummin botti käytöstä.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Et voi sulkea perustajan tunnuksia.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Et voi sulkea omia tunnuksiasi.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Et voi pakottaa botteja varmistamaan käyttäjätunnuksiaan. Poista mieluummin botti käytöstä.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Et voi pakottaa perustajaa varmistamaan tunnuksiansa.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Et voi pakottaa itseäsi aktivoimaan käyttäjätunnustasi uudelleen.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Et voi poistaa vierailijan käyttäjätunnusta.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Et voi poistaa omia käyttäjätunnuksiasi.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Et voi korottaa huomioimattomia käyttäjiä perustajiksi.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Käyttäjätunnus täytyy aktivoida ennen kuin se voidaan korottaa perustajaksi. Vain aktiiviset tunnukset voidaan korottaa perustajaksi.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Tätä tarvitaan vain, jos vaihdat käyttäjän sähköpostiosoitetta.',
	
	'DELETE_POSTS'			=> 'Poista viestit',
	'DELETE_USER'			=> 'Poista käyttäjä',
	'DELETE_USER_EXPLAIN'	=> 'Huomaa, käyttäjän poistamista ei voi peruuttaa. Käyttäjä poistuu pysyvästi',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Uudelleen aktivointi on pakotettu',
	'FOUNDER'						=> 'Perustaja',
	'FOUNDER_EXPLAIN'				=> 'Perustajille ei voi antaa porttikieltoa ja heidän tietojaan ei voi muuttaa alempiarvoisten käyttäjien toimesta',

	'GROUP_APPROVE'					=> 'Hyväksy jäsen',
	'GROUP_DEFAULT'					=> 'Oletus',
	'GROUP_DELETE'					=> 'Poista',
	'GROUP_DEMOTE'					=> 'Alenna',
	'GROUP_PROMOTE'					=> 'Ylennä',

	'IP_WHOIS_FOR'			=> 'IP-osoitteen whois tiedot käyttäjästä %s',

	'LAST_ACTIVE'			=> 'Viimeksi ollut aktiivinen',

	'MOVE_POSTS_EXPLAIN'	=> 'Ole hyvä ja valitse keskustelualue, johon haluat siirtää kaikki käyttäjän lähettämät viestit.',

	'NO_SPECIAL_RANK'		=> 'Ei arvonimeä määriteltynä',
	'NOT_MANAGE_FOUNDER'	=> 'Yritit muuttaa perustajan asetuksia. Vain saman statuksen omaavat käyttäjät voivat muuttaa perustajan asetuksia.',

	'QUICK_TOOLS'			=> 'Nopeat työkalut',

	'REGISTERED'			=> 'Rekisteröitynyt',
	'REGISTERED_IP'			=> 'Rekisteröityi IP-osoitteesta',
	'RETAIN_POSTS'			=> 'Säilytä viestit',

	'SELECT_FORM'			=> 'Valitse lomake',
	'SELECT_USER'			=> 'Valitse käyttäjä',

	'USER_ADMIN'					=> 'Käyttäjän hallinta',
	'USER_ADMIN_ACTIVATE'			=> 'Aktivoi käyttäjätunnukset',
	'USER_ADMIN_ACTIVATED'			=> 'Käyttäjätunnukset on aktivoitu',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Käyttäjän avatar on poistettu',
	'USER_ADMIN_BAN_EMAIL'			=> 'Porttikielto sähköpostiosoitteen mukaan',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Sähköpostiosoite on asetettu käyttäjien hallinnasta porttikieltoon',
	'USER_ADMIN_BAN_IP'				=> 'Porttikielto IP-osoitten mukaan',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP-osoite on asetettu käyttäjien hallinnasta porttikieltoon',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Käyttäjätunnus on asetettu käyttäjien hallinnasta porttikieltoon',
	'USER_ADMIN_BAN_USER'			=> 'Porttikielto käyttäjätunnuksen mukaan',
	'USER_ADMIN_DEACTIVATE'			=> 'Sulje käyttäjätunnukset',
	'USER_ADMIN_DEACTIVED'			=> 'Käyttäjätunnukset on suljettu',
	'USER_ADMIN_DEL_ATTACH'			=> 'Poista kaikki liitetiedostot',
	'USER_ADMIN_DEL_AVATAR'			=> 'Poista avatar',
	'USER_ADMIN_DEL_POSTS'			=> 'Poista kaikki viestit',
	'USER_ADMIN_DEL_SIG'			=> 'Poista allekirjoitus',
	'USER_ADMIN_EXPLAIN'			=> 'Täällä voit muokata käyttäjän tietoja ja joitakin asetuksia. Käytä ryhmän ja käyttäjän oikeuksien hallintaa, mikäli haluat muokata käyttäjän oikeuksia.',
	'USER_ADMIN_FORCE'				=> 'Pakota käyttäjätunnusten uudelleen aktivointi',
	'USER_ADMIN_MOVE_POSTS'			=> 'Siirrä kaikki viestit',
	'USER_ADMIN_SIG_REMOVED'		=> 'Käyttäjän allekirjoitus on poistettu',
	'USER_ATTACHMENTS_REMOVED'		=> 'Käyttäjän lähettämät liitetiedostot on poistettu',
	'USER_AVATAR_UPDATED'			=> 'Käyttäjän avatar-asetukset ovat päivitetty',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Mukautetut profiilikentät',
	'USER_DELETED'					=> 'Käyttäjä on poistettu',
	'USER_GROUP_ADD'				=> 'Lisää käyttäjä ryhmään',
	'USER_GROUP_NORMAL'				=> 'Normaalit ryhmät joissa käyttäjä on jäsenenä',
	'USER_GROUP_PENDING'			=> 'Käyttäjä odottaa hyväksymistä näihin käyttäjäryhmiin',
	'USER_GROUP_SPECIAL'			=> 'Käyttäjä on näiden erityisryhmien jäsen',
	'USER_NO_ATTACHMENTS'			=> 'Ei näytettäviä liitetiedostoja.',
	'USER_OVERVIEW_UPDATED'			=> 'Käyttäjän tiedot ovat päivitetty',
	'USER_POSTS_DELETED'			=> 'Kaikki käyttäjän kirjoittamat viestit on poistettu',
	'USER_POSTS_MOVED'				=> 'Kaikki käyttäjän viestit on siirretty toiselle keskustelualueelle',
	'USER_PREFS_UPDATED'			=> 'Käyttäjän asetukset ovat päivitetty',
	'USER_PROFILE'					=> 'Käyttäjän profiili',
	'USER_PROFILE_UPDATED'			=> 'Käyttäjän profiili on päivitetty',
	'USER_RANK'						=> 'Käyttäjän arvonimi',
	'USER_RANK_UPDATED'				=> 'Käyttäjän arvonimi on päivitetty',
	'USER_SIG_UPDATED'				=> 'Käyttäjän allekirjoitus on päivitetty',
	'USER_TOOLS'					=> 'Perustyökalut',
));

?>