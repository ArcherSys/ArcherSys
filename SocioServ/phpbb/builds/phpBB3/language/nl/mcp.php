<?php
/**
*
* mcp [Dutch]
*
* @package language
* @version $Id: mcp.php,v 1.0.0 2006/08/12 19:36:36 acydburn Exp $
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

$lang = array_merge($lang, array(
	'ACTION'				=> 'Actie',
	'ACTION_NOTE'			=> 'Actie/Nota',
	'ADD_FEEDBACK'			=> 'Feedback toevoegen',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Als je hierbij een melding wilt bijvoegen, vul dan het volgende formulier in. Gebruik alleen tekst zonder opmaak; HTML, BBCode, enz. zijn niet toegestaan.',
	'ADD_WARNING'			=> 'Voeg waarschuwing toe',
	'ADD_WARNING_EXPLAIN'	=> 'Om een waarschuwing naar deze gebruiker te sturen, vul het volgend formulier in. Gebruik alleen tekst zonder opmaak; HTML, BBCode, enz. zijn niet toegestaan.',
	'ALL_ENTRIES'			=> 'Alle toevoegingen',
	'ALL_NOTES_DELETED'		=> 'Alle opmerkingen van gebruikers zijn succesvol verwijderd.',
	'ALL_REPORTS'			=> 'Alle meldingen',
	'ALREADY_REPORTED'		=> 'Dit bericht is reeds gemeld.',
	'ALREADY_WARNED'		=> 'Er is reeds een waarschuwing voor dit bericht verstuurd.',
	'APPROVE'				=> 'Goedkeuren',
	'APPROVE_POST'			=> 'Bericht goedkeuren',
	'APPROVE_POST_CONFIRM'	=> 'Weet je zeker dat je dit bericht wilt goedkeuren?',
	'APPROVE_POSTS'			=> 'Berichten goedkeuren',
	'APPROVE_POSTS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde berichten wil goedkeuren?',

	'CANNOT_MOVE_SAME_FORUM'	=> 'Je kan een onderwerp niet verplaatsen naar het forum waarin het al staat.',
	'CANNOT_WARN_ANONYMOUS'		=> 'Je kan een gast niet waarschuwen.',
	'CANNOT_WARN_SELF'			=> 'Je kan jezelf niet waarschuwen.',
	'CAN_LEAVE_BLANK'			=> 'Je kunt dit leeg laten.',
	'CHANGE_POSTER'				=> 'Wijzig auteur',
	'CLOSE_REPORT'				=> 'Melding sluiten',
	'CLOSE_REPORT_CONFIRM'		=> 'Weet je zeker dat je de geselecteerde melding wilt sluiten?',
	'CLOSE_REPORTS'				=> 'Meldingen sluiten',
	'CLOSE_REPORTS_CONFIRM'		=> 'Weet je zeker dat je de geselecteerde meldingen wilt sluiten?',

	'DELETE_POSTS'				=> 'Berichten verwijderen',
	'DELETE_POSTS_CONFIRM'		=> 'Weet je zeker dat je deze berichten wilt verwijderen?',
	'DELETE_POST_CONFIRM'		=> 'Weet je zeker dat je dit bericht wilt verwijderen?',
	'DELETE_REPORT'				=> 'Melding verwijderen',
	'DELETE_REPORT_CONFIRM'		=> 'Weet je zeker dat je de geselecteerde melding wilt verwijderen?',
	'DELETE_SHADOW_TOPIC'		=> 'Verwijder schaduwonderwerp',
	'DELETE_REPORTS'			=> 'Meldingen verwijderen',
	'DELETE_REPORTS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde meldingen wilt verwijderen?',
	'DELETE_TOPICS'				=> 'Geselecteerde onderwerpen verwijderen',
	'DELETE_TOPICS_CONFIRM'		=> 'Weet je zeker dat je deze onderwerpen wilt verwijderen?',
	'DELETE_TOPIC_CONFIRM'		=> 'Weet je zeker dat je dit onderwerp wilt verwijderen?',
	'DISAPPROVE'				=> 'Afkeuren',
	'DISAPPROVE_REASON'			=> 'Reden van afkeuring',
	'DISAPPROVE_POST'			=> 'Afgekeurd bericht',
	'DISAPPROVE_POST_CONFIRM'	=> 'Weet je zeker dat je dit bericht wilt afkeuren?',
	'DISAPPROVE_POSTS'			=> 'Afgekeurde berichten',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Weet je zeker dat je deze berichten wilt afkeuren?',
	'DISPLAY_LOG'				=> 'Toon vorige toevoegingen',
	'DISPLAY_OPTIONS'			=> 'Toon opties',

	'EMPTY_REPORT'					=> 'Je moet een omschrijving opgeven als je deze reden selecteert.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Waarschuwing, een van de onderwerpen is verwijderd uit de database omdat het leeg is.',

	'FEEDBACK'				=> 'Feedback',
	'FORK'					=> 'Kopi&euml;ren',
	'FORK_TOPIC'			=> 'Onderwerp kopi&euml;ren',
	'FORK_TOPIC_CONFIRM'	=> 'Weet je zeker dat je dit onderwerp wilt kopi&euml;ren?',
	'FORK_TOPICS'			=> 'Geselecteerde onderwerpen kopi&euml;ren',
	'FORK_TOPICS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt kopi&euml;ren?',
	'FORUM_DESC'			=> 'Omschrijving',
	'FORUM_NAME'			=> 'Forumnaam',
	'FORUM_NOT_EXIST'		=> 'Het geselecteerde forum bestaat niet.',
	'FORUM_NOT_POSTABLE'	=> 'In het geselecteerd forum kun je posten.',
	'FORUM_STATUS'			=> 'Forumstatus',
	'FORUM_STYLE'			=> 'Forumstijl',

	'GLOBAL_ANNOUNCEMENT'	=> 'Globale mededeling',

	'IP_INFO'			=> 'IP-informatie',
	'IPS_POSTED_FROM'	=> 'IP-adressen waar de gebruiker berichten van heeft geplaatst',

	'LATEST_LOGS'				=> '5 laatst gelogde acties',
	'LATEST_REPORTED'			=> '5 laatste meldingen',
	'LATEST_UNAPPROVED'			=> '5 laatste berichten die wachten op hun goedkeuring',
	'LATEST_WARNING_TIME'		=> 'Laatst gestuurde waarschuwing',
	'LATEST_WARNINGS'			=> '5 laatste waarschuwingen',
	'LEAVE_SHADOW'				=> 'Plaats link naar onderwerp',
	'LIST_REPORT'				=> '1 melding',
	'LIST_REPORTS'				=> '%d meldingen',
	'LOCK'						=> 'Sluit',
	'LOCK_POST_POST'			=> 'Bericht sluiten',
	'LOCK_POST_POST_CONFIRM'	=> 'Weet je zeker dat je wilt voorkomen dat dit bericht wordt bewerkt?',
	'LOCK_POST_POSTS'			=> 'Geselecteerde berichten sluiten',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Weet je zeker dat je wilt voorkomen dat de geselecteerde berichten worden bewerkt?',
	'LOCK_TOPIC_CONFIRM'		=> 'Weet je zeker dat je dit onderwerp wilt sluiten?',
	'LOCK_TOPICS'				=> 'Geselecteerde onderwerpen sluiten',
	'LOCK_TOPICS_CONFIRM'		=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt sluiten?',
	'LOGS_CURRENT_TOPIC'		=> 'Huidige log van:',
	'LOGIN_EXPLAIN_MCP'			=> 'Om dit forum te modereren moet je ingelogd zijn.',
	'LOGVIEW_VIEWTOPIC'			=> 'Toon onderwerp',
	'LOGVIEW_VIEWLOGS'			=> 'Toon onderwerplogs',
	'LOGVIEW_VIEWFORUM'			=> 'Toon forum',
	'LOOKUP_ALL'				=> 'Zoek op alle IP\'s',
	'LOOKUP_IP'					=> 'Zoek op IP',

	'MARKED_NOTES_DELETED'	=> 'Alle gemarkeerde opmerkingen ven gebruikers zijn succesvol verwijderd.',

	'MCP_ADD'	=> 'Voeg een waarschuwing toe',

	'MCP_BAN'			=> 'Bannen',
	'MCP_BAN_EMAILS'	=> 'Ban e-mails',
	'MCP_BAN_IPS'		=> 'Ban IP\'s',
	'MCP_BAN_USERNAMES'	=> 'Ban gebruikersnamen',

	'MCP_LOGS'				=> 'Moderatorslog',
	'MCP_LOGS_FRONT'		=> 'Hoofdpagina',
	'MCP_LOGS_FORUM_VIEW'	=> 'Forumlogs',
	'MCP_LOGS_TOPIC_VIEW'	=> 'Onderwerplogs',

	'MCP_MAIN'							=> 'Algemeen',
	'MCP_MAIN_FORUM_VIEW'				=> 'Toon forum',
	'MCP_MAIN_FRONT'					=> 'Hoofdpagina',
	'MCP_MAIN_POST_DETAILS'				=> 'Details bericht',
	'MCP_MAIN_TOPIC_VIEW'				=> 'Toon onderwerp',
	'MCP_MAKE_ANNOUNCEMENT'				=> 'Wijzig in mededeling',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'		=> 'Weet je zeker dat je dit onderwerp wilt wijzigen in een mededeling?',
	'MCP_MAKE_ANNOUNCEMENTS'			=> 'Wijzig in mededelingen',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt wijzigen in mededelingen?',
	'MCP_MAKE_GLOBAL'					=> 'Wijzig in globale mededeling',
	'MCP_MAKE_GLOBAL_CONFIRM'			=> 'Weet je zeker dat je dit onderwerp wilt wijzigen in een globale mededeling?',
	'MCP_MAKE_GLOBALS'					=> 'Wijzig in globale mededelingen',
	'MCP_MAKE_GLOBALS_CONFIRM'			=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt wijzigen in globale mededelingen?',
	'MCP_MAKE_STICKY'					=> 'Wijzig in sticky',
	'MCP_MAKE_STICKY_CONFIRM'			=> 'Weet je zeker dat je dit onderwerp wilt wijzigen in een sticky onderwerp?',
	'MCP_MAKE_STICKIES'					=> 'Wijzig in stickies',
	'MCP_MAKE_STICKIES_CONFIRM'			=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt wijzigen in sticky onderwerpen?',
	'MCP_MAKE_NORMAL'					=> 'Wijzig in normaal onderwerp',
	'MCP_MAKE_NORMAL_CONFIRM'			=> 'Weet je zeker dat je dit onderwerp wilt wijzigen in een normaal onderwerp?',
	'MCP_MAKE_NORMALS'					=> 'Wijzig in normale onderwerpen',
	'MCP_MAKE_NORMALS_CONFIRM'			=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt wijzigen in normale onderwerpen?',

	'MCP_NOTES'			=> 'Gebruikersopmerkingen',
	'MCP_NOTES_FRONT'	=> 'Hoofdpagina',
	'MCP_NOTES_USER'	=> 'Details gebruiker',

	'MCP_POST_REPORTS'	=> 'Meldingen met betrekking tot dit bericht',

	'MCP_REPORTS'					=> 'Gemelde berichten',
	'MCP_REPORT_DETAILS'			=> 'Details melding',
	'MCP_REPORTS_CLOSED'			=> 'Gesloten meldingen',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Dit is een lijst van alle gemelde berichten waar reeds een beslissing over genomen is.',
	'MCP_REPORTS_OPEN'				=> 'Open meldingen',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Dit is een lijst van alle gemelde berichten waar nog geen beslissing over genomen is.',

	'MCP_QUEUE'								=> 'Moderatie wachtrij',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Goedkeuring details',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Berichten wachtend op goedkeuring',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Dit is een lijst van alle berichten die nog goedgekeurd moet worden voordat ze zichtbaar zijn voor alle gebruikers.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Onderwerpen wachtend op goedkeuring',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Dit is een lijst van alle onderwerpen die nog goedgekeurd moet worden voordat het zichtbaar is voor alle gebruikers.',

	'MCP_VIEW_USER'	=> 'Toon waarschuwingen van een specifieke gebruiker',

	'MCP_WARN'			=> 'Waarschuwingen',
	'MCP_WARN_FRONT'	=> 'Hoofdpagina',
	'MCP_WARN_LIST'		=> 'Lijst waarschuwingen',
	'MCP_WARN_POST'		=> 'Waarschuw voor specifieke bericht',
	'MCP_WARN_USER'		=> 'Waarschuw gebruiker',

	'MERGE_POSTS'			=> 'Berichten samenvoegen',
	'MERGE_POSTS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde berichten wilt samenvoegen?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Door het formulier hieronder kun je de geselecteerde berichten samenvoegen in een ander onderwerp. Deze berichten worden niet opnieuw gesorteerd, het zal lijken alsof je nieuwe berichten plaatst in een onderwerp.<br />Geef het id van het doelonderwerp in of klik op de &quot;selecteer&quot; knop om er &eacute;&eacute;n te zoeken',
	'MERGE_TOPIC_ID'		=> 'Doelonderwerp ID',
	'MERGE_TOPICS'			=> 'Onderwerpen samenvoegen',
	'MERGE_TOPICS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt samenvoegen?',
	'MODERATE_FORUM'		=> 'Modereer forum',
	'MODERATE_POST'			=> 'Modereer bericht',
	'MODERATE_TOPIC'		=> 'Modereer onderwerp',
	'MOD_OPTIONS'			=> 'Moderator opties',
	'MORE_INFO'				=> 'Verdere informatie',
	'MOST_WARNINGS'			=> 'Gebruikers met de meeste waarschuwingen',
	'MOVE_TOPIC_CONFIRM'	=> 'Weet je zeker dat je het onderwerp naar een ander forum wilt verplaatsen?',
	'MOVE_TOPICS'			=> 'Verplaats selecteerde onderwerpen',
	'MOVE_TOPICS_CONFIRM'	=> 'Weet je zeker dat je de geselecteerde onderwerpen naar een ander forum wilt verplaatsen?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Auteur informeren over goedkeuring?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Auteur informeren over afkeuring?',
	'NOTIFY_USER_WARN'				=> 'Auteur informeren over waarschuwing?',
	'NOT_MODERATOR'					=> 'Je bent geen moderator van dit forum.',
	'NO_DESTINATION_FORUM'			=> 'Selecteer een doelforum.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Er is geen doelforum beschikbaar.',
	'NO_ENTRIES'					=> 'Geen logs voor deze periode.',
	'NO_FEEDBACK'					=> 'Er is geen feedback van deze gebruiker.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Je hebt geen doelonderwerp geselecteerd voor het samenvoegen van de onderwerpen.',
	'NO_MATCHES_FOUND'				=> 'Geen resultaten gevonden.',
	'NO_POST'						=> 'Je moet een bericht selecteren als je een gebruiker wilt waarschuwen over het bericht.',
	'NO_POST_REPORT'				=> 'Dit bericht is niet gemeld.',
	'NO_POST_SELECTED'				=> 'Je moet minimaal &eacute;&eacute;n bericht selecteren om deze actie uit te voeren.',
	'NO_REASON_DISAPPROVAL'			=> 'Geef een gegronde reden voor het afkeuren.',
	'NO_REPORT'						=> 'Geen melding gevonden',
	'NO_REPORT_SELECTED'			=> 'Je moet minstens &eacute;&eacute;n melding selecteren om deze actie te kunnen uitvoeren.',
	'NO_REPORTS'					=> 'Geen meldingen gevonden',
	'NO_TOPIC_ICON'					=> 'Geen',
	'NO_TOPIC_SELECTED'				=> 'Je moet minimaal &eacute;&eacute;n onderwerp selecteren om deze actie uit te voeren.',
	'NO_TOPICS_QUEUE'				=> 'Er zijn geen onderwerpen die wachten op goedkeuring.',

	'ONLY_TOPIC'	=> 'Alleen onderwerp &quot;%s&quot;',
	'OTHER_USERS'	=> 'Andere gebruikers (die berichten plaatsen) met dit IP',

	'POSTER'					=> 'Auteur',
	'POSTS_APPROVED_SUCCESS'	=> 'De geselecteerde berichten zijn succesvol goedgekeurd.',
	'POSTS_DELETED_SUCCESS'		=> 'De geselecteerde berichten zijn succesvol verwijderd.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'De geselecteerde berichten zijn succesvol afgekeurd.',
	'POSTS_LOCKED_SUCCESS'		=> 'De geselecteerde berichten zijn succesvol gesloten.',
	'POSTS_MERGED_SUCCESS'		=> 'De geselecteerde berichten zijn succesvol samengevoegd.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'De geselecteerde berichten zijn succesvol heropend.',
	'POSTS_PER_PAGE'			=> 'Berichten per pagina',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Stel op 0 in om alle berichten te tonen.)',
	'POST_APPROVED_SUCCESS'		=> 'Het geselecteerde bericht is succesvol goedgekeurd.',
	'POST_DELETED_SUCCESS'		=> 'Het geselecteerde bericht is succesvol verwijderd.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Het geselecteerde bericht is succesvol afgekeurd.',
	'POST_LOCKED_SUCCESS'		=> 'Het bericht is succesvol gesloten.',
	'POST_NOT_EXIST'			=> 'Het opgevraagde bericht bestaat niet.',
	'POST_REPORTED_SUCCESS'		=> 'Het bericht is succesvol gemeld.',
	'POST_UNLOCKED_SUCCESS'		=> 'Het bericht is succesvol heropend.',

	'READ_USERNOTES'			=> 'Opmerkingen gebruikers',
	'READ_WARNINGS'				=> 'Waarschuwingen gebruiker',
	'REPORTER'					=> 'Melder',
	'REPORTED'					=> 'Gemeld',
	'REPORTED_BY'				=> 'Gemeld door',
	'REPORTED_ON_DATE'			=> 'op',
	'REPORTS_CLOSED_SUCCESS'	=> 'De geselecteerde meldingen zijn succesvol gesloten.',
	'REPORTS_DELETED_SUCCESS'	=> 'De geselecteerde meldingen zijn succesvol verwijderd.',
	'REPORTS_TOTAL'				=> 'In het totaal zijn er <strong>%d</strong> ongelezen meldingen.',
	'REPORTS_ZERO_TOTAL'		=> 'Er zijn geen ongelezen meldingen.',
	'REPORT_CLOSED'				=> 'Deze melding is reeds gesloten.',
	'REPORT_CLOSED_SUCCESS'		=> 'De geselecteerde melding is succesvol gesloten.',
	'REPORT_DELETED_SUCCESS'	=> 'De geselecteerde melding is succesvol verwijderd.',
	'REPORT_DETAILS'			=> 'Details melding',
	'REPORT_MESSAGE'			=> 'Meld dit bericht',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Gebruik dit formulier om de geselecteerde berichten te melden. Het bericht hoef je enkel te melden als het in strijd is met de forumregels.',
	'REPORT_NOTIFY'				=> 'Informeer me',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Informeer me als de melding behandelt wordt.',
	'REPORT_POST_EXPLAIN'		=> 'Gebruik dit formulier om de geselecteerde berichten te melden bij de beheerders. Het bericht hoef je enkel te melden als het in strijd is met de forumregels.',
	'REPORT_REASON'				=> 'Reden van melding',
	'REPORT_TIME'				=> 'Tijdstip van melding',
	'REPORT_TOTAL'				=> 'Er is <strong>1</strong> ongelezen melding.',
	'RESYNC'					=> 'Hersynchroniseer',
	'RETURN_MESSAGE'			=> '%sNaar het bericht terugkeren%s',
	'RETURN_NEW_FORUM'			=> '%sNaar het nieuwe forum gaan%s',
	'RETURN_NEW_TOPIC'			=> '%sNaar het nieuwe onderwerp gaan%s',
	'RETURN_POST'				=> '%sNaar het bericht terugkeren%s',
	'RETURN_QUEUE'				=> '%sNaar de wachtrij terugkeren%s',
	'RETURN_REPORTS'			=> '%sNaar de meldingen terugkeren%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sNaar het onderwerp terugkeren%s',

	'SEARCH_POSTS_BY_USER'				=> 'Zoek berichten van',
	'SELECT_ACTION'						=> 'Actie selecteren',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Selecteer het forum waar deze globale mededeling weergegeven moet worden.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Een of meer van de geselecteerde onderwerpen zijn globale mededelingen. Selecteer het forum waar je deze globale mededeling weergegeven moet worden.',
	'SELECT_MERGE'						=> 'Selecteren voor samenvoeging',
	'SELECT_TOPIC'						=> 'Onderwerp selecteren',
	'SELECT_TOPICS_FROM'				=> 'Selecteer onderwerpen van',
	'SELECT_USER'						=> 'Gebruiker selecteren',
	'SORT_ACTION'						=> 'Log actie',
	'SORT_DATE'							=> 'Datum',
	'SORT_IP'							=> 'IP-adres',
	'SORT_WARNINGS'						=> 'Waarschuwingen',
	'SPLIT_AFTER'						=> 'Splits onderwerp vanaf geselecteerde berichten',
	'SPLIT_FORUM'						=> 'Forum voor het nieuwe onderwerp',
	'SPLIT_POSTS'						=> 'Splits de geselecteerde berichten',
	'SPLIT_SUBJECT'						=> 'Nieuwe titel',
	'SPLIT_TOPIC_ALL'					=> 'Splits het onderwerp van de geselecteerde berichten',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Weet je zeker dat je dit onderwerp wilt splitsen?',
	'SPLIT_TOPIC_BEYOND'				=> 'Splits het onderwerp vanaf dit bericht',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Weet je zeker dat je vanaf dit bericht het onderwerp wilt splitsen?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Met dit formulier hieronder kun je een onderwerp splitsen in twee onderwerpen, door berichten te selecteren of vanaf een geselecteerd bericht.',

	'THIS_POST_IP'					=> 'IP van dit bericht',
	'TOPICS_APPROVED_SUCCESS'		=> 'De geselecteerde onderwerpen zijn succesvol goedgekeurd.',
	'TOPICS_DELETED_SUCCESS'		=> 'De geselecteerde onderwerpen zijn succesvol verwijderd.',
	'TOPICS_DISAPPROVED_SUCCESS'	=> 'De geselecteerde onderwerpen zijn succesvol afgekeurd.',
	'TOPICS_FORKED_SUCCESS'			=> 'De geselecteerde onderwerpen zijn succesvol gekopieerd.',
	'TOPICS_LOCKED_SUCCESS'			=> 'De geselecteerde onderwerpen zijn succesvol gesloten.',
	'TOPICS_MOVED_SUCCESS'			=> 'De geselecteerde onderwerpen zijn succesvol verplaatst.',
	'TOPICS_RESYNC_SUCCESS'			=> 'De geselecteerde onderwerpen zijn succesvol gehersynchroniseerd.',
	'TOPICS_TYPE_CHANGED'			=> 'Onderwerptype succesvol gewijzigd.',
	'TOPICS_UNLOCKED_SUCCESS'		=> 'De geselecteerde onderwerpen zijn succesvol heropend.',
	'TOPIC_APPROVED_SUCCESS'		=> 'Het geselecteerde onderwerp is succesvol goedgekeurd.',
	'TOPIC_DELETED_SUCCESS'			=> 'Het geselecteerde onderwerp is succesvol verwijderd.',
	'TOPIC_DISAPPROVED_SUCCESS'		=> 'De geselecteerde onderwerp is succesvol afgekeurd.',
	'TOPIC_FORKED_SUCCESS'			=> 'Het geselecteerde onderwerp is succesvol gekopieerd.',
	'TOPIC_LOCKED_SUCCESS'			=> 'Het geselecteerde onderwerp is succesvol gesloten.',
	'TOPIC_MOVED_SUCCESS'			=> 'Het geselecteerde onderwerp is succesvol verplaatst.',
	'TOPIC_NOT_EXIST'				=> 'Het opgevraagde onderwerp bestaat niet.',
	'TOPIC_RESYNC_SUCCESS'			=> 'Het geselecteerde onderwerp is succesvol gehersynchroniseerd.',
	'TOPIC_SPLIT_SUCCESS'			=> 'Het geselecteerde onderwerp is succesvol gesplitst.',
	'TOPIC_TIME'					=> 'Tijdstip onderwerp',
	'TOPIC_TYPE_CHANGED'			=> 'Het onderwerp is succesvol gewijzigd.',
	'TOPIC_UNLOCKED_SUCCESS'		=> 'Het geselecteerde onderwerp is succesvol heropend.',
	'TOTAL_WARNINGS'				=> 'Totaal aantal waarschuwingen',

	'UNAPPROVED_POSTS_TOTAL'		=> 'In het totaal zijn er <strong>%d</strong> berichten die wachten op een goedkeuring.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Er zijn geen berichten die wachten op een goedkeuring.',
	'UNAPPROVED_POST_TOTAL'			=> 'Er is <strong>1</strong> bericht dat wacht op een goedkeuring.',
	'UNLOCK'						=> 'Heropen',
	'UNLOCK_POST'					=> 'Heropen bericht',
	'UNLOCK_POST_EXPLAIN'			=> 'Sta wijzigingen toe',
	'UNLOCK_POST_POST'				=> 'Heropen bericht',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Weet je zeker dat je toestaat om het geselecteerde bericht te wijzigen?',
	'UNLOCK_POST_POSTS'				=> 'Heropen de geselecteerde berichten',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Weet je zeker dat je toestaat om de geselecteerde berichten te wijzigen?',
	'UNLOCK_TOPIC'					=> 'Heropen onderwerp',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Weet je zeker dat je dit onderwerp wilt heropenen?',
	'UNLOCK_TOPICS'					=> 'Heropen de geselecteerde onderwerpen',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Weet je zeker dat je de geselecteerde onderwerpen wilt heropenen?',
	'USER_CANNOT_POST'				=> 'Je kan geen berichten plaatsen in dit forum.',
	'USER_CANNOT_REPORT'			=> 'Je kan geen berichten melden in dit forum.',
	'USER_FEEDBACK_ADDED'			=> 'Feedback gebruiker succesvol toegevoegd',
	'USER_WARNING_ADDED'			=> 'De gebruiker is succesvol gewaarschuwd',

	'VIEW_DETAILS'	=> 'Toon details',

	'WARNED_USERS'			=> 'Gewaarschuwde gebruikers',
	'WARNED_USERS_EXPLAIN'	=> 'Dit is een lijst van gebruikers met niet vervallen waarschuwingen.',
	'WARNING_PM_BODY'		=> 'Het volgende is een waarschuwing die naar jou verstuurd werd door een beheerder of een moderator van dit forum.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Forumwaarschuwing verstuurd',
	'WARNING_POST_DEFAULT'	=> 'Dit is een waarschuwing omtrent het door jou geplaatste bericht: %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'Geen waarschuwingen.',

	'YOU_SELECTED_TOPIC'	=> 'Je geselecteerde onderwerpnummer %d: %s.',

	'report_reasons'	=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Off-topic',
			'OTHER'		=> 'Andere'
		),
		'DESCRIPTION'	=> array(
			'WAREZ'		=> 'Links naar illegale software.',
			'SPAM'		=> 'Reclame voor een website of product.',
			'OFF_TOPIC'	=> 'Doet niet ter zake in het onderwerp.',
			'OTHER'		=> 'Het past niet binnen een categorie, gebruik omschrijvingsveld.'
		)
	),
));
?>