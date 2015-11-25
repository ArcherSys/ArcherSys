<?php
/**
*
* acp_bots [Dutch]
*
* @package language
* @version $Id: bots.php,v 1.0.0 2007/01/21 18:33:45 acydburn Exp $
* @copyright (c) 2005 phpBB Group modified by phpBB.nl (vertaalteam@phpbb.nl) in 2007
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
   exit;
}
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Bots beheren',
	'BOTS_EXPLAIN'		=> '"Bots", "spiders" of "crawlers" zijn geautomatiseerde browsers die meestal gebruikt worden door zoekmachines die zo hun database updaten. Omdat ze zelden correct gebruik maken van sessies, kunnen ze het bezoekersaantal be&iuml;nvloeden, de systeembelasting verhogen en websites verkeerd indexeren. Hier kan je een speciaal type gebruiker defini&euml;ren om zo deze problemen te voorkomen.',
	'BOT_ACTIVATE'		=> 'Activeren',
	'BOT_ACTIVE'		=> 'Actieve bot',
	'BOT_ADD'			=> 'Bot toevoegen',
	'BOT_ADDED'			=> 'Nieuwe bot succesvol toegevoegd.',
	'BOT_AGENT'			=> 'Browserovereenkomst',
	'BOT_AGENT_EXPLAIN'	=> 'Een tekenreeks die overeenkomt of een deel is van de bot-browser.',
	'BOT_DEACTIVATE'	=> 'Deactiveren',
	'BOT_DELETED'		=> 'Bot succesvol verwijderd.',
	'BOT_EDIT'			=> 'Bots wijzigen',
	'BOT_EDIT_EXPLAIN'	=> 'Hier kan je een bot toevoegen of wijzigen. Je mag een bot-browser tekenreeks en/of &eacute;&eacute;n of meer IP-adressen (een bereik of adressen) om te vergelijken, wees hier echter wel voorzichtig mee. Daarnaast kan je ook de stijl en taal bepalen die de bot op het forum gebruikt. Hierdoor kan je het bandbreedteverbruik, door het instellen van een eenvoudige stijl, beperken. Vergeet niet de bijhorende permissies in te stellen voor de gebruikersgroep van de bots.',
	'BOT_LANG'			=> 'Bot-taal',
	'BOT_LANG_EXPLAIN'	=> 'De taal die de bot op het forum zal gebruiken.',
	'BOT_LAST_VISIT'	=> 'Laatste bezoek',
	'BOT_IP'			=> 'IP-adressen bot',
	'BOT_IP_EXPLAIN'	=> 'Een gedeeltelijke overeenkomst is mogelijk, verschillende adressen kan je met een komma scheiden.',
	'BOT_NAME'			=> 'Bot-naam',
	'BOT_NAME_EXPLAIN'	=> 'Alleen ter eigen informatie.',
	'BOT_NAME_TAKEN'	=> 'De naam is al in gebruik op je forum en kan dus niet gebruikt worden voor de bot.',
	'BOT_NEVER'			=> 'Nooit',
	'BOT_STYLE'			=> 'Bot-stijl',
	'BOT_STYLE_EXPLAIN'	=> 'De forumstijl die de bot zal gebruiken.',
	'BOT_UPDATED'		=> 'Bestaande bot succesvol bijgewerkt.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'De opgegeven bot is gelijkaardig aan een reeds bestaande bot. Wijzig de browser van deze bot alstublieft.',
	'ERR_BOT_NO_IP'				=> 'De opgegeven IP-adressen zijn ongeldig of de hostnaam kon niet opgezocht worden.',
	'ERR_BOT_NO_MATCHES'		=> 'Je moet minstens &eacute;&eacute;n browser of IP-adres voor deze bot opgeven.',

	'NO_BOT'		=> 'Er werd geen bijhorende bot voor het opgegeven ID gevonden.',
	'NO_BOT_GROUP'	=> 'De speciale bot groep kan niet gevonden worden.',
));
?>