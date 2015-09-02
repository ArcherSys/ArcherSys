<?php
/** 
*
* acp_bots.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-07-16 - phpBB.no
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
	'BOT_NAME_TAKEN'	=> 'The name is already in use on your board and can\'t be used for the Bot.',
	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Agenten du skrev inn er er allerede definert.',
	'NO_BOT_GROUP'	=> 'Finner ikke robotgruppen',
	'BOTS'	=> 'Administrer roboter',
	'BOTS_EXPLAIN'	=> 'Roboter og lignende oppfører seg sjelden som levende brukere. Her kan du opprette egne brukere med spesielle rettigheter for robotene, for å unngå problemer med overtrafikk og feil i statistikker.',
	'BOT_ACTIVATE'	=> 'Aktiver',
	'BOT_ACTIVE'	=> 'Aktiv',
	'BOT_ADD'	=> 'Legg til robot',
	'BOT_ADDED'	=> 'Roboen er lagt til',
	'BOT_AGENT'	=> 'Agent',
	'BOT_AGENT_EXPLAIN'	=> 'Et eller flere ord som likner agenten til roboten du vil legge til. Du trenger ikke skrive inn en nøyaktig setning. Agenten er det navnet roboten bruker.',
	'BOT_DEACTIVATE'	=> 'Deaktiver',
	'BOT_DELETED'	=> 'Roboten er slettet',
	'BOT_EDIT'	=> 'Rediger robot',
	'BOT_EDIT_EXPLAIN'	=> 'Her kan du administrere søkeroboter. Du kan legge til roboter basert på navnet dens, eller IP-adressen den bruker. Du kan også fange inn mange roboter på en gang. Språket og stilen robotene møter kan også spesifiseres, for eksempel viss du vil at google skal bruke en simpel stil uten bilder. Alle robotene du definerer, hører til en robotgruppe, hvor du kan gi dem spesielle rettigheter. ',
	'BOT_LANG'	=> 'Språk',
	'BOT_LANG_EXPLAIN'	=> 'Språket som brukes av forumet når roboten er på besøk.',
	'BOT_LAST_VISIT'	=> 'Siste besøk',
	'BOT_IP'	=> 'Robotadresse',
	'BOT_IP_EXPLAIN'	=> 'Robotens IP-adresse. Skill flere adresser med komma. Treff på deler av adressen virker også',
	'BOT_NAME'	=> 'Navn',
	'BOT_NAME_EXPLAIN'	=> 'Brukes bare for intern identifikasjon',
	'BOT_NEVER'	=> 'Aldri',
	'BOT_STYLE'	=> 'Stil',
	'BOT_STYLE_EXPLAIN'	=> 'Stilen som brukes av forumet når roboten er på besøk.',
	'BOT_UPDATED'	=> 'Roboten er oppdatert',
	'BOT_VIS'	=> 'Synlig',
	'BOT_VIS_EXPLAIN'	=> 'Gjør at robotene kan sees av alle brukere',
	'ERR_BOT_NO_IP'	=> 'Adressen du skrev inn er midlertidig nede, eller finnes ikke.',
	'ERR_BOT_NO_MATCHES'	=> 'Du må spesifisere minst én agent eller IP-adresse.',
	'NO_BOT'	=> 'Denne roboten eksisterer ikke.',
));

?>