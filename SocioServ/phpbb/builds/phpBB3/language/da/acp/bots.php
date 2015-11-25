<?php
/**
*
* acp_bots [Danish]
*
* @package language
* @version $Id: bots.php,v 1.10 2007/07/01 16:09:49 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translators: Olympus DK Team, working at http://www.phpBB3.dk and http://area51.phpBB3.dk:
*
*		John Hjorth < john-hjorth@john-hjorth.dk > (John Hjorth) http://www.phpBBFM.dk
*		jask < jan@skovsgaard.net > (Jan Skovsgaard) http://skovsgaard.net
*		Jesper Møller < jgom@privat.dk > (Jesper G. O. Møller) http://www.jart.dk/jgom/index.html
*
* Contributors :
*
*		AlleyKat < AlleyKat@phpbb2.dk > (Finn Sørensen) http://www.phpbb2.dk
*		Dr.Diesel < dr.diesel@dream-cathers.dk > (Jes Nielsen) http://www.dream-cathers.dk
*		Jan Christensen < tamrotten@gmail.com > (Jan Christensen) http://janogwickys.dk/phpBB2/index.php
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Administrér botter',
	'BOTS_EXPLAIN'		=> '"Botter", "spiders" eller "crawlers" er automatiserede agenter, som normalt anvendes af søgemaskiner til at opdatere deres databaser. Da botter sjældent gør korrekt brug af sessioner, kan de forvrænge besøgstællere, forøge belastningen og somme tider ikke indeksere sider korrekt. Her kan du definere en speciel type bruger for at overvinde disse problemer.',
	'BOT_ACTIVATE'		=> 'Aktivér',
	'BOT_ACTIVE'		=> 'Botten sættes aktiv',
	'BOT_ADD'			=> 'Tilføj bot',
	'BOT_ADDED'			=> 'Ny bot tilføjet.',
	'BOT_AGENT'			=> 'Agentmatch',
	'BOT_AGENT_EXPLAIN'	=> 'En streng der matcher bottens browseragent, delvise matches er tilladt.',
	'BOT_DEACTIVATE'	=> 'Deaktivér',
	'BOT_DELETED'		=> 'Botten er slettet.',
	'BOT_EDIT'			=> 'Redigér bot',
	'BOT_EDIT_EXPLAIN'	=> 'Her kan du, afhængig af overskriften, enten tilføje en ny bot, eller ændre en eksisterende bots brugerkonto. Du kan definere en agentstreng og/eller en eller flere IP-adresser (eller interval af adresser) til at matche. Vær omhyggelig med definitionen af matchende agentstrenge eller adresser. Du kan også specificere en typografi og et sprog som botten vil læse boardet med. Det giver dig mulighed for at reducere bottens brug af båndbredde ved at vælge en simpel typografi for denne. Husk at sætte passende tilladelser for den specielle brugergruppe "Botter".',
	'BOT_LANG'			=> 'Bottens sprog',
	'BOT_LANG_EXPLAIN'	=> 'Vælg det sprog botten præsenteres for.',
	'BOT_LAST_VISIT'	=> 'Sidste besøg',
	'BOT_IP'			=> 'Bottens IP-adresse',
	'BOT_IP_EXPLAIN'	=> 'Delvise matches er tilladt, adskil adresser med et komma.',
	'BOT_NAME'			=> 'Bot',
	'BOT_NAME_EXPLAIN'	=> 'Bottens brugernavn.',
	'BOT_NAME_TAKEN'	=> 'Navnet er allerede i brug på dit board og kan derfor ikke anvendes til denne bot.',
	'BOT_NEVER'			=> 'Aldrig',
	'BOT_STYLE'			=> 'Bottens typografi',
	'BOT_STYLE_EXPLAIN'	=> 'Vælg den typografi botten præsenteres for.',
	'BOT_UPDATED'		=> 'Eksisterende bot opdateret.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Den anførte bot agent svarer til den du i øjeblikket anvender. Justér venligst agenten for denne bot.',
	'ERR_BOT_NO_IP'			=> 'IP-adressen du angav var ugyldig eller værtsnavnet kunne ikke findes.',
	'ERR_BOT_NO_MATCHES'	=> 'Du skal angive mindst én agent eller IP-adresse for dette bot match.',

	'NO_BOT'	=> 'Fandt ingen bot med det specificerede ID',
	'NO_BOT_GROUP'	=> 'Ude af stand til at finde speciel bot gruppe.',
));

?>