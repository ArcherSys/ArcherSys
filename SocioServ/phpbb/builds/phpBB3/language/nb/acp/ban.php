<?php
/** 
*
* acp_ban.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-05-27 - phpBB.no
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
	'LENGTH_BAN_INVALID'	=> 'Datoen må formateres slik <kbd>ÅÅÅÅ-MM-DD</kbd>.',
	'1_HOUR'	=> 'En time',
	'30_MINS'	=> '30 minutter',
	'6_HOURS'	=> '6 timer',
	'ACP_BAN_EXPLAIN'	=> 'Her kan du kontrollere tilgangen til forumet gjennom å stenge ute brukere på grunnlag av navn, IP-adresse eller e-postadresse. Du kan også gi enn kort forklaring (255 tegn) til utestengningen, som vises i administratorloggen. Utestengingene kan begrenses til å kun var en viss tid. Vil du la utestengningen vare til en bestemt dato, skriver du den inn på formen åååå-mm-dd.',
	'BAN_EXCLUDE'	=> 'Beskytt fra utestenging',
	'BAN_LENGTH'	=> 'Hvor lenge utestengingen skal vare',
	'BAN_REASON'	=> 'Årsak til utestengning',
	'BAN_GIVE_REASON'	=> 'Årsak til banning som skal vises til brukeren',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Lista over utestengelser er oppdatert',
	'EMAIL_BAN'	=> 'Steng en eller flere e-postadresser ute',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Fjern adressene fra alle aktive utestengninger',
	'EMAIL_BAN_EXPLAIN'	=> 'Ved å skrive en e-postadresse på hver linje kan du liste opp flere e-postadresser. Du kan bruke * som vilkårlige tegn, for eksempel *@hotmail.com, *@*.domene.no, osv.',
	'EMAIL_NO_BANNED'	=> 'Ingen utestengde e-postadresser',
	'EMAIL_UNBAN'	=> 'Fjern e-poster fra utestengingslista',
	'EMAIL_UNBAN_EXPLAIN'	=> 'Du kan merke flere adresser ved å kombinere mus og tastaturbruk spesifikk for ditt operativsystem/nettleser. E-postadressene med grå bakgrunn er utestengde.',
	'IP_BAN'	=> 'Steng en eller flere IP-adresser ute',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Fjern adressene fra alle aktive utestengninger',
	'IP_BAN_EXPLAIN'	=> 'Sett flere IP-adresser på egne linjer. Serier av IP-adresser skiller du med en bindestrek (-), og * som vilkårlig tegn.',
	'IP_HOSTNAME'	=> 'IP-adresser eller tjenernavn',
	'IP_NO_BANNED'	=> 'Ingen utestengde IP-adresser',
	'IP_UNBAN'	=> 'Fjern IP-adresser fra utestengingslista',
	'IP_UNBAN_EXPLAIN'	=> 'Du kan merke flere adresser ved å kombinere mus og tastaturbruk spesifikk for ditt operativsystem/nettleser. E-postadressene med grå bakgrunn er utestengde.',
	'PERMANENT'	=> 'Permanent',
	'UNTIL'	=> 'Til',
	'USER_BAN'	=> 'Steng ett eller flere brukernavn ute',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Fjern brukernene fra alle aktive utestengninger',
	'USER_BAN_EXPLAIN'	=> 'Sett flere brukernavn på egne linjer. Bruk «Finn bruker»-funksjonen for å søke etter, og legge til brukere automatisk.',
	'USER_NO_BANNED'	=> 'Ingen utestengde brukere',
	'USER_UNBAN'	=> 'Fjern brukere fra utestengning',
	'USER_UNBAN_EXPLAIN'	=> 'Du kan velge flere brukernavn ved å kombinere mus og tastaturbruk spesifikk for ditt operativsystem/nettleser. Brukere med grå bakgrunn er utestengde.',
));

?>