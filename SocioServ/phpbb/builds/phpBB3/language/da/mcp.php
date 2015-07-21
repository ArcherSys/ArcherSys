<?php
/** 
*
* mcp [Danish]
*
* @package language
* @version $Id: mcp.php,v 1.81 2007/07/19 20:37:52 acydburn Exp $
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

$lang = array_merge($lang, array(
	'ACTION'				=> 'Handling',
	'ACTION_NOTE'			=> 'Handling/Bemærkning',
	'ADD_FEEDBACK'			=> 'Tilføj tilbagemelding',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Hvis du vil tilføje en bemærkning angående dette, udfyld da venligst efterfølgende felt. Brug kun ren tekst, HTML, BBkode, etc. er ikke tilladt.',
	'ADD_WARNING'			=> 'Udsted advarsel',
	'ADD_WARNING_EXPLAIN'	=> 'For at udstede en advarsel til denne bruger skal efterfølgende formular udfyldes. Brug kun ren tekst, HTML, BBkode, etc. er ikke tilladt.',
	'ALL_ENTRIES'			=> 'Alle data',
	'ALL_NOTES_DELETED'		=> 'Alle brugernotater er slettet.',
	'ALL_REPORTS'			=> 'Alle rapporter',
	'ALREADY_REPORTED'		=> 'Dette indlæg er allerede blevet rapporteret.',
	'ALREADY_WARNED'		=> 'Der er allerede udstedt en advarsel vedrørende dette indlæg.',
	'APPROVE'				=> 'Godkend',
	'APPROVE_POST'			=> 'Godkend indlæg',
	'APPROVE_POST_CONFIRM'	=> 'Er du sikker på at du vil godkende dette indlæg?',
	'APPROVE_POSTS'			=> 'Godkende indlæg',
	'APPROVE_POSTS_CONFIRM'	=> 'Er du sikker på at du vil godkende de valgte indlæg?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Du kan ikke flytte et emne til det forum, hvori det allerede befinder sig.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Du kan ikke udstede en advarsel til en ikke tilmeldt bruger.',
	'CANNOT_WARN_SELF'		=> 'Du kan ikke udstede en advarsel til dig selv.',
	'CAN_LEAVE_BLANK'		=> 'Behøves ikke at blive udfyldt.',
	'CHANGE_POSTER'			=> 'Ændre forfatter',
	'CLOSE_REPORT'			=> 'Luk rapport',
	'CLOSE_REPORT_CONFIRM'	=> 'Er du sikker på at du vil lukke den valgte rapport?',
	'CLOSE_REPORTS'			=> 'Luk rapporter',
	'CLOSE_REPORTS_CONFIRM'	=> 'Er du sikker på at du vil lukke de valgte rapporter?',

	'DELETE_POSTS'			=> 'Slet indlæg',
	'DELETE_POSTS_CONFIRM'	=> 'Er du sikker på at du vil slette disse indlæg?',
	'DELETE_POST_CONFIRM'	=> 'Er du sikker på at du vil slette dette indlæg?',
	'DELETE_REPORT'			=> 'Slet rapport',
	'DELETE_REPORT_CONFIRM'	=> 'Er du sikker på at du vil slette den valgte rapport?',
	'DELETE_REPORTS'		=> 'Slet rapporter',
	'DELETE_REPORTS_CONFIRM'	=> 'Er du sikker på at du vil slette de valgte rapporter?',
	'DELETE_SHADOW_TOPIC'	=> 'Slet skygge emne',
	'DELETE_TOPICS'			=> 'Slet valgte emner',
	'DELETE_TOPICS_CONFIRM'	=> 'Er du sikker på at du vil slette disse emner?',
	'DELETE_TOPIC_CONFIRM'	=> 'Er du sikker på at du vil slette dette emne?',
	'DISAPPROVE'			=> 'Afvis',
	'DISAPPROVE_REASON'		=> 'Grund til afvisning',
	'DISAPPROVE_POST'		=> 'Afvis indlæg',
	'DISAPPROVE_POST_CONFIRM'	=> 'Er du sikker på at du vil afvise dette indlæg?',
	'DISAPPROVE_POSTS'		=> 'Afvis indlæg',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Er du sikker på at du vil afvise de valgte indlæg?',
	'DISPLAY_LOG'			=> 'Vis datalog',
	'DISPLAY_OPTIONS'		=> 'Vis muligheder',

	'EMPTY_REPORT'			=> 'Du skal angive en beskrivelse når denne mulighed vælges.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Bemærk at et eller flere emner er slettet fra databasen, da de enten var eller blev tomme.',

	'FEEDBACK'				=> 'Tilbagemelding',
	'FORK'					=> 'Kopiér',
	'FORK_TOPIC'			=> 'Kopiér emne',
	'FORK_TOPIC_CONFIRM'	=> 'Er du sikker på at du vil kopiere dette emne?',
	'FORK_TOPICS'			=> 'Kopiér valgte emner',
	'FORK_TOPICS_CONFIRM'	=> 'Er du sikker på du vil kopiere de valgte emner?',
	'FORUM_DESC'			=> 'Beskrivelse',
	'FORUM_NAME'			=> 'Forumnavn',
	'FORUM_NOT_EXIST'		=> 'Det valgte forum eksisterer ikke.',
	'FORUM_NOT_POSTABLE'	=> 'Du kan ikke skrive indlæg i det valgte forum.',
	'FORUM_STATUS'			=> 'Forumstatus',
	'FORUM_STYLE'			=> 'Forumtypografi',

	'GLOBAL_ANNOUNCEMENT'	=> 'Global bekendtgørelse',

	'IP_INFO'				=> 'IP-adresse information',
	'IPS_POSTED_FROM'		=> 'IP-adresser denne bruger har skrevet fra',

	'LATEST_LOGS'				=> 'De sidste 5 loggede hændelser',
	'LATEST_REPORTED'			=> 'De sidste 5 rapporter',
	'LATEST_UNAPPROVED'			=> 'De sidste 5 indlæg der afventer godkendelse',
	'LATEST_WARNING_TIME'		=> 'Den nyeste advarsel',
	'LATEST_WARNINGS'			=> 'De sidste 5 advarsler',
	'LEAVE_SHADOW'				=> 'Efterlad skyggeemne samme sted',
	'LIST_REPORT'				=> '1 rapport',
	'LIST_REPORTS'				=> '%d rapporter',
	'LOCK'						=> 'Lås',
	'LOCK_POST_POST'			=> 'Lås indlæg',
	'LOCK_POST_POST_CONFIRM'	=> 'Er du sikker på at du vil låse dette indlæg?',
	'LOCK_POST_POSTS'			=> 'Lås valgte indlæg',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Er du sikker på at du vil låse disse indlæg?',
	'LOCK_TOPIC_CONFIRM'		=> 'Er du sikker på at vil låse dette emne?',
	'LOCK_TOPICS'				=> 'Lås valgte emner',
	'LOCK_TOPICS_CONFIRM'		=> 'Er du sikker på at du vil låse alle de valgte emner?',
	'LOGS_CURRENT_TOPIC'		=> 'I øjeblikket kan logs ikke ses:',
	'LOGIN_EXPLAIN_MCP'			=> 'For at redigere i forummet skal du logge ind.',
	'LOGVIEW_VIEWTOPIC'			=> 'Se emne',
	'LOGVIEW_VIEWLOGS'			=> 'Se emnets log',
	'LOGVIEW_VIEWFORUM'			=> 'Se forum',
	'LOOKUP_ALL'				=> 'Se alle IP-adresser',
	'LOOKUP_IP'					=> 'Se IP-adresse',

	'MARKED_NOTES_DELETED'		=> 'Alle markerede brugerdata er slettet.',

	'MCP_ADD'						=> 'Tilføj en advarsel',

	'MCP_BAN'					=> 'Udelukke',
	'MCP_BAN_EMAILS'			=> 'Udeluk emailadresser',
	'MCP_BAN_IPS'				=> 'Udeluk IP-adresser',
	'MCP_BAN_USERNAMES'			=> 'Udeluk brugere',

	'MCP_LOGS'						=> 'Redaktør logs',
	'MCP_LOGS_FRONT'				=> 'Logs fra forsiden',
	'MCP_LOGS_FORUM_VIEW'			=> 'Forum logs',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Emne logs',

	'MCP_MAIN'						=> 'Oversigt',
	'MCP_MAIN_FORUM_VIEW'			=> 'Se forum',
	'MCP_MAIN_FRONT'				=> 'Forside',
	'MCP_MAIN_POST_DETAILS'			=> 'Vis detaljer',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Se emne',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Ændre til "Bekendtgørelse"',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Er du sikker på at du vil ændre dette emne til en bekendtgørelse?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Ændre til "Bekendtgørelser"',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Er du sikker på at du vil ændre de markerede emner til bekendtgørelser?',
	'MCP_MAKE_GLOBAL'				=> 'Ændre til "Global bekendtgørelse"',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Er du sikker på at du vil ændre dette emne til en global bekendtgørelse?',
	'MCP_MAKE_GLOBALS'				=> 'Ændre til "Globale bekendtgørelser"',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Er du sikker på at du vil ændre de markerede emner til globale bekendtgørelser?',
	'MCP_MAKE_STICKY'				=> 'Ændre til "Opslag"',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Er du sikker på at du vil ændre dette emne til et opslag?',
	'MCP_MAKE_STICKIES'				=> 'Ændre til "Opslag"',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Er du sikker på at du vil ændre de valgte emner til opslag?',
	'MCP_MAKE_NORMAL'				=> 'Ændre til "Standardemne"',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Er du sikker på at du vil ændre dette emne til et standardemne?',
	'MCP_MAKE_NORMALS'				=> 'Ændre til "Standardemner"',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Er du sikker på at du vil ændre de markerede emner til standardemner?',

	'MCP_POST_REPORTS'				=> 'Rapporter med baggrund i dette indlæg',

	'MCP_NOTES'						=> 'Brugerdata',
	'MCP_NOTES_FRONT'				=> 'Forside',
	'MCP_NOTES_USER'				=> 'Brugerdetaljer',

	'MCP_REPORTS'					=> 'Rapporterede beskeder',
	'MCP_REPORT_DETAILS'			=> 'Rapporterede detaljer',
	'MCP_REPORTS_CLOSED'			=> 'Lukkede rapporter',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Forklaringer til afsluttede rapporter.',
	'MCP_REPORTS_OPEN'				=> 'Åbne rapporter',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Disse rapporter kræver en handling.',

	'MCP_QUEUE'								=> 'Godkendelseskø',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Godkend detaljer',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Indlæg der afventer godkendelse',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Disse indlæg skal godkendes før de vises på boardet.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Emner der afventer godkendelse',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Disse emner skal godkendes før de vises på boardet.',

	'MCP_VIEW_USER'			=> 'Vis advarsler til en specifik bruger',

	'MCP_WARN'				=> 'Advarsler',
	'MCP_WARN_FRONT'		=> 'Forside',
	'MCP_WARN_LIST'			=> 'Liste advarsler',
	'MCP_WARN_POST'			=> 'Advarsler for et specifikt indlæg',
	'MCP_WARN_USER'			=> 'Advar bruger',

	'MERGE_POSTS'			=> 'Sammenlæg indlæg',
	'MERGE_POSTS_CONFIRM'	=> 'Er du sikker på du ønsker at samle de valgte indlæg?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Ved at bruge nedenstående kan du samle de valgte indlæg i andet emne. Indlæggene bliver flyttet til nyt emne med uændrede indsendelsesdata og vil se ud som brugerne har skrevet dem i det nye emne.<br />Angiv venligst det emne indlæggene skal samles i, eller klik på "Vælg emne" knappen for at søge efter det.',
	'MERGE_TOPIC_ID'		=> 'Det modtagende emnes identifikations-nummer',
	'MERGE_TOPICS'			=> 'Sammenlæg emner',
	'MERGE_TOPICS_CONFIRM'	=> 'Er du sikker på du vil samle de valgte emner?',
	'MODERATE_FORUM'		=> 'Redigér forum',
	'MODERATE_TOPIC'		=> 'Redigér emne',
	'MODERATE_POST'			=> 'Redigér indlæg',
	'MOD_OPTIONS'			=> 'Redigeringsmuligheder',
	'MORE_INFO'				=> 'Yderligere informationer',
	'MOST_WARNINGS'			=> 'Brugere med flest advarsler',
	'MOVE_TOPIC_CONFIRM'	=> 'Er du sikker på du vil flytte emnet til et nyt forum?',
	'MOVE_TOPICS'			=> 'Flyt valgte emner',
	'MOVE_TOPICS_CONFIRM'	=> 'Er du sikker på du vil flytte de valgte emner til et nyt forum?',

	'NOTIFY_POSTER_APPROVAL'=> 'Advisér afsender om godkendelse?',
	'NOTIFY_POSTER_DISAPPROVAL' => 'Advisér afsender om afvisning?',
	'NOTIFY_USER_WARN'		=> 'Advisér bruger om advarsel?',
	'NOT_MODERATOR'			=> 'Du er ikke redaktør i dette forum.',
	'NO_DESTINATION_FORUM'	=> 'Vælg venligst det forum der skal modtage.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Der er intet modtageforum tilgængeligt.',
	'NO_ENTRIES'			=> 'Der er ingen logs i den periode.',
	'NO_FEEDBACK'			=> 'Der er ingen tilbagemelding på denne bruger.',
	'NO_FINAL_TOPIC_SELECTED'	=> 'Du skal vælge et emne som skal modtage de indlæg du ønsker at samle.',
	'NO_MATCHES_FOUND'		=> 'Ingen sammenfald fundet.',
	'NO_POST'				=> 'Du skal vælge et indlæg for at advare brugeren om et indlæg.',
	'NO_POST_REPORT'		=> 'Dette indlæg blev ikke rapporteret.',
	'NO_POST_SELECTED'		=> 'Du skal vælge mindst et indlæg for at udføre denne handling.',
	'NO_REASON_DISAPPROVAL'	=> 'Angiv venligst en fornuftig begrundelse for afvisningen.',
	'NO_REPORT'				=> 'Ingen rapport fundet',
	'NO_REPORTS'			=> 'Ingen rapporter fundet',
	'NO_REPORT_SELECTED'	=> 'Du skal vælge mindst én rapport for at udføre denne handling.',
	'NO_TOPIC_ICON'			=> 'Ingen',
	'NO_TOPIC_SELECTED'		=> 'Du skal vælge mindst et emne for at udføre denne handling.',
	'NO_TOPICS_QUEUE'		=> 'Ingen emner venter på godkendelse.',

	'ONLY_TOPIC'			=> 'Kun emne "%s"',
	'OTHER_USERS'			=> 'Andre brugere der skriver fra denne IP-adresse',

	'POSTER'				=> 'Afsender',
	'POSTS_APPROVED_SUCCESS'=> 'De valgte indlæg er nu blevet godkendt.',
	'POSTS_DELETED_SUCCESS'	=> 'De valgte indlæg er nu blevet slettet fra databasen.',
	'POSTS_DISAPPROVED_SUCCESS'=> 'De valgte indlæg er nu blevet afvist.',
	'POSTS_LOCKED_SUCCESS'	=> 'De valgte indlæg er nu blevet låst.',
	'POSTS_MERGED_SUCCESS'	=> 'De valgte indlæg er nu blevet samlet.',
	'POSTS_UNLOCKED_SUCCESS'=> 'De valgte indlæg er nu blevet låst op.',
	'POSTS_PER_PAGE'		=> 'Indlæg pr. side',
	'POSTS_PER_PAGE_EXPLAIN'=> '(Sæt til 0 for at se alle indlæg).',
	'POST_APPROVED_SUCCESS'	=> 'Det valgte indlæg er nu blevet godkendt.',
	'POST_DELETED_SUCCESS'	=> 'De valgte indlæg er nu blevet slettet fra databasen.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Det valgte indlæg er nu blevet afvist.',
	'POST_LOCKED_SUCCESS'	=> 'Indlægget er nu blevet låst.',
	'POST_NOT_EXIST'		=> 'Indlægget eksisterer ikke.',
	'POST_REPORTED_SUCCESS'	=> 'Indlægget er nu blevet rapporteret.',
	'POST_UNLOCKED_SUCCESS'	=> 'Indlægget er nu blevet låst op.',

	'READ_USERNOTES'		=> 'Brugerdata',
	'READ_WARNINGS'			=> 'Brugeradvarsler',
	'REPORTER'				=> 'Rapporter',
	'REPORTED'				=> 'Rapporteret',
	'REPORTED_BY'			=> 'Rapporteret af',
	'REPORTED_ON_DATE'		=> 'd.',
	'REPORTS_CLOSED_SUCCESS'	=> 'De valgte rapporter er nu blevet lukket.',
	'REPORTS_DELETED_SUCCESS'	=> 'De valgte rapporter er nu slettet.',
	'REPORTS_TOTAL'			=> 'I alt er der <strong>%d</strong> rapporter at gennemse.',
	'REPORTS_ZERO_TOTAL'	=> 'Der er ingen rapporter at gennemse.',
	'REPORT_CLOSED'			=> 'Denne rapport er allerede lukket.',
	'REPORT_CLOSED_SUCCESS'	=> 'Den valgte rapport er nu blevet lukket.',
	'REPORT_DELETED_SUCCESS'	=> 'Den valgte rapport er nu blevet slettet.',
	'REPORT_DETAILS'		=> 'Rapportoplysninger',
	'REPORT_MESSAGE'		=> 'Rapportér dette indlæg',
	'REPORT_MESSAGE_EXPLAIN'=> 'Brug denne formular for at rapportere indlægget til boardets administratorer. Generelt skal man kun rapportere, hvis indlæggets indhold bryder med boardets regler.',
	'REPORT_NOTIFY'			=> 'Advisér mig',
	'REPORT_NOTIFY_EXPLAIN'	=> 'Du bliver adviseret når der er taget hånd om din rapport.',
	'REPORT_POST_EXPLAIN'	=> 'Brug denne formular for at rapportere det valgte indlæg til boardets administratorer og redaktører. Generelt skal man kun rapportere, hvis indlæg bryder med forummets regler.',
	'REPORT_REASON'			=> 'Rapport begrundelse',
	'REPORT_TIME'			=> 'Rapporteret',
	'REPORT_TOTAL'			=> 'Der er <strong>1</strong> rapport at gennemse.',
	'RESYNC'				=> 'Resynkronisér',
	'RETURN_MESSAGE'		=> '%sReturnér til meddelelse%s',
	'RETURN_NEW_FORUM'		=> '%sReturnér til det nye forum%s',
	'RETURN_NEW_TOPIC'		=> '%sReturnér til det nye emne%s',
	'RETURN_POST'			=> '%sReturnér til indlægget%s',
	'RETURN_QUEUE'			=> '%sReturnér til køen%s',
	'RETURN_REPORTS'		=> '%sReturnér til rapporten%s',
	'RETURN_TOPIC_SIMPLE'	=> '%sReturnér til emnet%s',

	'SEARCH_POSTS_BY_USER'	=> 'Vælg indlæg fra',
	'SELECT_ACTION'			=> 'Vælg ønskede handling',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Vælg venligst det forum hvori du ønsker denne globale bekendtgørelse vist.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Et eller flere af de valgte emner er globale bekendtgørelser. Vælg venligst det forum hvori du ønsker disse vist.',
	'SELECT_MERGE'			=> 'Vælg til sammenlægning',
	'SELECT_TOPICS_FROM'	=> 'Vælg emne fra',
	'SELECT_TOPIC'			=> 'Vælg emne',
	'SELECT_USER'			=> 'Vælg bruger',
	'SORT_ACTION'			=> 'Log hændelse',
	'SORT_DATE'				=> 'Dato',
	'SORT_IP'				=> 'IP-adresse',
	'SORT_WARNINGS'			=> 'Advarsler',
	'SPLIT_AFTER'			=> 'Del fra valgte indlæg',
	'SPLIT_FORUM'			=> 'Forum til det nye emne',
	'SPLIT_POSTS'			=> 'Del valgte indlæg',
	'SPLIT_SUBJECT'			=> 'Ny emnetitel',
	'SPLIT_TOPIC_ALL'		=> 'Del emne fra valgte indlæg',
	'SPLIT_TOPIC_ALL_CONFIRM'	=> 'Er du sikker på at du ønsker at dele dette emne?',
	'SPLIT_TOPIC_BEYOND'	=> 'Del emnet ved valgte indlæg',
	'SPLIT_TOPIC_BEYOND_CONFIRM'	=> 'Er du sikker på at du ønsker at dele emnet ved valgte indlæg?',
	'SPLIT_TOPIC_EXPLAIN'	=> 'Ved at bruge nedenstående kan du dele et emne i to, enten ved at vælge indlæggene individuelt eller ved at dele ved et valgt indlæg.',

	'THIS_POST_IP'			=> 'Dette indlæg kommer fra IP-adresse',
	'TOPICS_APPROVED_SUCCESS'	=> 'De valgte emner er nu blevet godkendt.',
	'TOPICS_DELETED_SUCCESS'=> 'De valgte emner er nu slettet fra databasen.',
	'TOPICS_DISAPPROVED_SUCCESS'	=> 'De valgte emner er nu blevet afvist.',
	'TOPICS_FORKED_SUCCESS'	=> 'De valgte emner er nu blevet kopieret.',
	'TOPICS_LOCKED_SUCCESS'	=> 'De valgte emner er nu blevet låst.',
	'TOPICS_MOVED_SUCCESS'	=> 'De valgte emner er nu blevet flyttet.',
	'TOPICS_RESYNC_SUCCESS'	=> 'De valgte emner er nu blevet resynkroniseret.',
	'TOPICS_TYPE_CHANGED'	=> 'Emnetype er blevet ændret.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'De valgte emner er nu blevet låst op.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Det valgte emne er nu blevet godkendt.',
	'TOPIC_DELETED_SUCCESS'	=> 'Det valgte emne er nu slettet fra databasen.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Det valgte emne er nu blevet afvist.',
	'TOPIC_FORKED_SUCCESS'	=> 'Det valgte emne er nu blevet kopieret.',
	'TOPIC_LOCKED_SUCCESS'	=> 'Det valgte emne er nu blevet låst.',
	'TOPIC_MOVED_SUCCESS'	=> 'Det valgte emner er nu blevet flyttet.',
	'TOPIC_NOT_EXIST'		=> 'Det valgte emne eksisterer ikke.',
	'TOPIC_RESYNC_SUCCESS'	=> 'Det valgte emne er nu blevet resynkroniseret.',
	'TOPIC_SPLIT_SUCCESS'	=> 'Det valgte emner er nu blevet delt.',
	'TOPIC_TIME'			=> 'Emnet\'s tid',
	'TOPIC_TYPE_CHANGED'	=> 'Emnet\'s type er ændret.',
	'TOPIC_UNLOCKED_SUCCESS'=> 'Det valgte emne er nu låst op.',
	'TOTAL_WARNINGS'		=> 'Antal advarsler i alt',

	'UNAPPROVED_POSTS_TOTAL'		=> '<strong>%d</strong> indlæg venter på godkendelse.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Ingen indlæg venter på godkendelse.',
	'UNAPPROVED_POST_TOTAL'			=> '1 indlæg venter på godkendelse.',
	'UNLOCK'						=> 'Lås op',
	'UNLOCK_POST'					=> 'Lås op for indlæg',
	'UNLOCK_POST_EXPLAIN'			=> 'Tillad ændringer',
	'UNLOCK_POST_POST'				=> 'Lås op for indlæg',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Er du sikker på at du vil tillade ændringer i dette indlæg?',
	'UNLOCK_POST_POSTS'				=> 'Lås op for de valgte indlæg',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Er du sikker på at du vil tillade ændringer i de valgte indlæg?',
	'UNLOCK_TOPIC'					=> 'Lås op for emne',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Er du sikker på at du vil låse op for dette emne?',
	'UNLOCK_TOPICS'					=> 'Lås op for valgte emner',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Er du sikker på at du vil låse op for de valgte emner?',
	'USER_CANNOT_POST'				=> 'Du kan ikke skrive indlæg i dette forum.',
	'USER_CANNOT_REPORT'			=> 'Du kan ikke rapportere indlæg i dette forum.',
	'USER_FEEDBACK_ADDED'			=> 'Brugertilbagemelding er nu tilføjet.',
	'USER_WARNING_ADDED'			=> 'Bruger er nu advaret.',

	'VIEW_DETAILS'			=> 'Vis detaljer',

	'WARNED_USERS'			=> 'Brugere med advarsler',
	'WARNED_USERS_EXPLAIN'	=> 'Advarsler der endnu ikke er udløbet.',
	'WARNING_PM_BODY'		=> 'Dette er en advarsel udstedt af en administrator eller redaktør på denne side.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Board advarsel udstedt',
	'WARNING_POST_DEFAULT'	=> 'Dette er en advarsel vedrørende det indlæg du har skrevet: %s.',
	'WARNINGS_ZERO_TOTAL'	=> 'Ingen advarsler.',

	'YOU_SELECTED_TOPIC'	=> 'Du valgte emne nummer %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Off-topic',
			'OTHER'		=> 'Andre',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Indlægget indeholder links til illegal eller pirat software.',
			'SPAM'		=> 'Indlægget har kun til formål at reklamere for en hjemmeside eller et produkt.',
			'OFF_TOPIC'	=> 'Indlægget er off topic.',
			'OTHER'		=> 'Indlægget kan ikke kategoriseres. Anvend feltet "Yderligere information".'
		)
	),
));

?>