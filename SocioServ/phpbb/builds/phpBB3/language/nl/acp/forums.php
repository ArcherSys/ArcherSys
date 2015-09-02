<?php
/**
*
* acp_forums [Dutch]
*
* @package language
* @version $Id: forums.php,v 1.0.0 2007/01/21 18:33:45 acydburn Exp $
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Berichtleeftijd bij automatisch opruimen',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Aantal dagen vanaf het laatste bericht wanneer een onderwerp verwijderd wordt.',
	'AUTO_PRUNE_FREQ'			=> 'Frequentie van automatisch opruimen',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Tijd in dagen tussen de automatische opruiming van evenementen.',
	'AUTO_PRUNE_VIEWED'			=> 'Leeftijd berichtweergave bij automatisch opruimen',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Aantal dagen dat een onderwerp niet meer bezocht is voordat het verwijderd wordt.',

	'COPY_PERMISSIONS'				=> 'Kopieer permissies van',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Eens gecre&euml;erd heeft het forum dezelfde permissies als die je geselecteerd hebt. Als er geen forum geselecteerd is, wordt het nieuwe forum niet zichtbaar totdat de permissies ingesteld zijn.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Als je kopieerpermissies geselecteerd hebt, krijgt het forum dezelfde permissies als de geselecteerde. Dit overschrijft alle hiervoor geselecteerde permissies. Als je geen forum geselecteerd hebt worden de huidige permissies bewaard.',
	'CREATE_FORUM'					=> 'Cre&euml;er nieuw forum',

	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Verwijder inhoud of verplaats naar forum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'	=> 'Verwijder subforums of verplaats naar forum',
	'DEFAULT_STYLE'					=> 'Standaard stijl',
	'DELETE_ALL_POSTS'				=> 'Verwijder berichten',
	'DELETE_SUBFORUMS'				=> 'Verwijder subforums en de berichten',
	'DISPLAY_ACTIVE_TOPICS'			=> 'Schakel actieve onderwerpen in',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'	=> 'Als &quot;ja&quot; is ingesteld, worden de actieve onderwerpen in de geselecteerde subforums getoond onder deze categorie.',

	'EDIT_FORUM'					=> 'Bewerk forum',
	'ENABLE_INDEXING'				=> 'Schakel zoekindexering in',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Als &quot;ja&quot; is ingesteld, worden de berichten in dit forum ge&iuml;ndexeerd om het zoeken te vereenvoudigen.',
	'ENABLE_POST_REVIEW'			=> 'Schakel berichtcontrole in',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Als dit op &quot;ja&quot; ingesteld is, kunnen de gebruikers voor het plaatsen van hun bericht controleren of er ondertussen nog andere berichten geplaatst zijn. Dit voorkomt chat-gesprekken in het forum.',
	'ENABLE_RECENT'					=> 'Toon actieve onderwerpen',
	'ENABLE_RECENT_EXPLAIN'			=> 'Als &quot;ja&quot; is ingesteld, worden de gemaakte onderwerpen in dit forum getoond in de actieve onderwerpenlijst.',
	'ENABLE_TOPIC_ICONS'			=> 'Schakel onderwerp iconen in',

	'FORUM_ADMIN'						=> 'Forum beheer',
	'FORUM_ADMIN_EXPLAIN'				=> 'In phpBB3 zijn er geen categorie&euml;n, alles is forumgebaseerd. Elk forum kan een oneindige aantal subforums bevatten en je kan aangeven waar wel in gepost mag worden en waar niet (het werkt hetzelfde als een oude categorie). Hier kun je toevoegen, bewerken, verwijderen, sluiten en heropenen van individuele forums en toegevoegde instellingen instellen. Als je berichten en onderwerpen niet meer synchroon zijn, kan je het forum terug hersynchroniseren. <strong>Je moet permissies gekopieerd of ingesteld hebben om nieuw aangemaakte forums te kunnen zien.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Schakel automatisch opruimen in',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Om forums automatisch op te ruimen, stel de frequentie/leeftijd parameters hieronder in.',
	'FORUM_CREATED'						=> 'Forum is succesvol gecre&euml;erd.',
	'FORUM_DATA_NEGATIVE'				=> 'Opruimparameters kunnen niet negatief zijn.',
	'FORUM_DELETE'						=> 'Verwijder forum',
	'FORUM_DELETE_EXPLAIN'				=> 'Met het formulier hieronder kan je een forum verwijderen. Als een forum berichten en/of onderwerpen bevat, kun je kiezen wat er met de berichten moet gebeuren.',
	'FORUM_DELETED'						=> 'Forum succesvol verwijderd.',
	'FORUM_DESC'						=> 'Beschrijving',
	'FORUM_DESC_EXPLAIN'				=> 'Alle hierin opgegeven HTML-opmaak wordt weergegeven.',
	'FORUM_DESC_TOO_LONG'				=> 'De forum omschrijving is te lang, deze moet korter dan 4000 tekens zijn.',
	'FORUM_EDIT_EXPLAIN'				=> 'Met het formulier hieronder kan je het forum instellen. Wees je ervan bewust dat moderatie en berichtenaantallen ingesteld worden via de forumpermissies voor iedere gebruiker en gebruikersgroep.',
	'FORUM_IMAGE'						=> 'Forum afbeelding',
	'FORUM_IMAGE_EXPLAIN'				=> 'De locatie, relatief volgens de phpBB-rootmap, van een afbeelding geassocieerd met dit forum.',
	'FORUM_LINK_EXPLAIN'				=> 'Volledige URL (inclusief het protocol, voorbeeld <samp>http://</samp>) voor de locatie waar de gebruiker door een muisklik heen gaat, vb: <samp>http://www.phpbb.nl</samp>.',
	'FORUM_LINK_TRACK'					=> 'Hou aantal link doorverwijzingen bij',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Onthoud het aantal keer dat er op een forumlink geklikt wordt.',
	'FORUM_NAME'						=> 'Forum naam',
	'FORUM_NAME_EMPTY'					=> 'Je moet een naam ingeven voor dit forum.',
	'FORUM_PARENT'						=> 'Hoofd forum',
	'FORUM_PASSWORD'					=> 'Forum wachtwoord',
	'FORUM_PASSWORD_CONFIRM'			=> 'Bevestig forum wachtwoord',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Alleen forum wachtwoord nodig als het is ingegeven en nodig is.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Definieer een wachtwoord voor dit forum, gebruik het permissie systeem bij voorkeur.',
	'FORUM_PASSWORD_UNSET'				=> 'Verwijder forum wachtwoord',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Vink dit aan indien je het forum wachtwoord wil verwijderen.',
	'FORUM_PASSWORD_OLD'				=> 'Het forum wachtwoord maakt gebruik van een oude encryptie en zou moeten worden verwijderd.',
	'FORUM_PASSWORD_MISMATCH'			=> 'De wachtwoorden die je hebt ingegeven komen niet overeen.',
	'FORUM_PRUNE_SETTINGS'				=> 'Automatische forum-opruim instellingen',
	'FORUM_RESYNCED'					=> 'Forum &quot;%s&quot; is succesvol gehersynchroniseerd',
	'FORUM_RULES_EXPLAIN'				=> 'Forum regels zijn weergeven op elke pagina van het desbetreffende forum.',
	'FORUM_RULES_LINK'					=> 'Link naar de forum regels',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Je kan hier de URL naar het bericht of de pagina naar de forumregels geven. Dit overschrijft wel de tekstuele forum regels.',
	'FORUM_RULES_PREVIEW'				=> 'Forum regels voorbeeld',
	'FORUM_RULES_TOO_LONG'				=> 'De forum regels moeten korter dan 4000 tekens zijn.',
	'FORUM_SETTINGS'					=> 'Forum instellingen',
	'FORUM_STATUS'						=> 'Forum status',
	'FORUM_STYLE'						=> 'Forum stijl',
	'FORUM_TOPICS_PAGE'					=> 'Onderwerpen per pagina',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Als dit niet nul is, wordt het standaard aantal onderwerpen per pagina hierdoor overschreven.',
	'FORUM_TYPE'						=> 'Forum type',
	'FORUM_UPDATED'						=> 'Forum informatie is succesvol bijgewerkt.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Je wilt een forum met subforums veranderen in een link. Verplaats alle subforums uit dit forum voordat je verder gaat, omdat na een verandering naar een link je niet langer de mogelijkheid hebt de forums te bekijken die onder dit forum vallen.',

	'GENERAL_FORUM_SETTINGS'	=> 'Algemene forum instellingen',

	'LINK'					=> 'Link',
	'LIST_INDEX'			=> 'Toon de subforums in het hoofdforum.',
	'LIST_INDEX_EXPLAIN'	=> 'Toont dit forum als een link, op het forumoverzicht en in de legende van het hoofdforum (indien deze bestaat).',
	'LOCKED'				=> 'Gesloten',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'In het geselecteerde forum, om de berichten naar te verplaatsen, kunnen geen berichten geplaatst worden. Selecteer een forum waarbij dit wel kan.',
	'MOVE_POSTS_TO'					=> 'Verplaats alle berichten naar',
	'MOVE_SUBFORUMS_TO'				=> 'Verplaats subforums naar',

	'NO_DESTINATION_FORUM'			=> 'Je hebt geen forum gespecificeerd naar waar de inhoud verplaats wordt.',
	'NO_FORUM_ACTION'				=> 'Geen actie opgegeven van wat er met de foruminhoud moet gebeuren.',
	'NO_PARENT'						=> 'Geen hoofd',
	'NO_PERMISSIONS'				=> 'Kopieer de permissies niet',
	'NO_PERMISSION_FORUM_ADD'		=> 'Je hebt niet de benodigde permissies om forums toe te voegen.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Je hebt niet de benodigde permissies om forums te verwijderen.',

	'PARENT_IS_LINK_FORUM'		=> 'Het opgegeven hoofdforum is een forum link, deze forums kunnen geen andere forums bevatten. Specificeer een categorie of forum als hoofdforum.',
	'PARENT_NOT_EXIST'			=> 'Hoofdforum bestaat niet.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Ruim mededelingen automatisch op',
	'PRUNE_STICKY'				=> 'Ruim stickies automatisch op',
	'PRUNE_OLD_POLLS'			=> 'Ruim oude polls automatisch op',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Verwijder onderwerpen met polls waarin niet is gestemd na.',

	'REDIRECT_ACL'	=> 'Je kunt nu de %spermissies instellen%s voor dit forum.',

	'SYNC_IN_PROGRESS'			=> 'Synchroniseer forum',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Huidige hersynchronisatie onderwerp voortgang %1$d/%2$d.',

	'TYPE_CAT'		=> 'Categorie',
	'TYPE_FORUM'	=> 'Forum',
	'TYPE_LINK'		=> 'Link',

	'UNLOCKED'	=> 'Open',
));
?>