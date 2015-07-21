<?php
/**
*
* acp_permissies [Dutch]
*
* @package language
* @version $Id: permissies.php,v 1.0.0 2007/05/16 14:44:56 acydburn Exp $
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Permissies zijn zeer gedetailleerd en worden opgedeeld in deze vier grote groepen:</p>

		<h2>Globale permissies</h2>
		<p>Deze worden gebruikt om de toegang op een globaal niveau te beheren en zijn van toepassing over het gehele forum. Ze worden verder opgedeeld in gebruikerspermissies, groepspermissies, beheerders en globale moderators.</p>

		<h2>Forum gebaseerde permissies</h2>
		<p>Deze permissies dienen om de toegang per forum te regelen. Ze worden verder opgedeeld in forumpermissies, forum moderators, forum gebruikers permissies en forum groepspermissies.</p>

		<h2>Permissie rollen</h2>
		<p>Deze worden gebruikt om verschillende voorgeconfigureerde, verschillende types van permissies te groeperen die dan later op rol-basis toegewezen kunnen worden. De standaard rollen zouden voldoende moeten zijn voor het beheer van kleine en grote forums. Je kan echter, voor de vier verschillende groepen, rollen toevoegen/wijzigen/verwijderen om aan je eisen te voldoen.</p>

		<h2>Permissie maskers</h2>
		<p>Deze worden gebruikt om effectief aan gebruikers, moderators (lokaal en globaal), beheerders en forums toegewezen permissies te bekijken.</p>

		<br />

		<p>Voor verdere informatie omtrent het instellen en beheren van de permissies van je phpBB3-forum verwijzen we je naar <a href="http://www.phpbb.nl/documentatie/3.0/quickstart/quick_permissions.html">hoofdstuk 1.5 van de snelstart handleiding</a>.</p>
	',

	'ACL_NEVER'				=> 'Nooit',
	'ACL_SET'				=> 'Permissies instellen',
	'ACL_SET_EXPLAIN'		=> 'Permissies zijn op een eenvoudig <samp>JA</samp>/<samp>NEE</samp>-systeem gebaseerd. Als je een optie voor een gebruiker of gebruikersgroep op <samp>NOOIT</samp> instelt, overschrijft dit alle toegewezen waardes. Indien je voor een bepaalde optie geen waarde aan een gebruiker of groep wilt toewijzen, kies dan <samp>NEE</samp>. Indien er een waarde aan een optie is toegewezen wordt die gebruikt, anders wordt <samp>NOOIT</samp> verondersteld. Al de (door een vinkje ervoor) aangeduide objecten zullen de gedefinieerde permissie overnemen.',
	'ACL_SETTING'			=> 'Instelling',

	'ACL_TYPE_A_'			=> 'Beheerders permissies',
	'ACL_TYPE_F_'			=> 'Forum permissies',
	'ACL_TYPE_M_'			=> 'Moderator permissies',
	'ACL_TYPE_U_'			=> 'Gebruikers permissies',

	'ACL_TYPE_GLOBAL_A_'	=> 'Beheerders permissies',
	'ACL_TYPE_GLOBAL_U_'	=> 'Gebruikers permissies',
	'ACL_TYPE_GLOBAL_M_'	=> 'Globale moderator permissies',
	'ACL_TYPE_LOCAL_M_'		=> 'Forum moderator permissies',
	'ACL_TYPE_LOCAL_F_'		=> 'Forum permissies',

	'ACL_NO'				=> 'Nee',
	'ACL_VIEW'				=> 'Permissies tonen',
	'ACL_VIEW_EXPLAIN'		=> 'Hier kun je de werkende permissies zien die de gebruiker/groep heeft. Een rood vierkant betekent dat de gebruiker/groep geen permissie heeft, een groen vierkant betekent dat de gebruiker/groep wel de permissie heeft.',
	'ACL_YES'				=> 'Ja',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Hier kan je beheerders permissies toewijzen aan gebruikers of groepen. Alle gebruikers met beheerder permissies kunnen het beheerderspaneel zien.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Hier kan je permissies toewijzen aan gebruikers en groepen als forum moderators. Om gebruikers toe te wijzen aan forums, om globale moderatie permissies of beheerders permissies gebruik dan de daarvoor bestemde pagina.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Hier kan je wijzigen voor wie van de gebruikers of groepen toegang heeft tot welke forums. Om een moderator of beheerder toe te wijzen gebruik dan de daarvoor bestemde pagina.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Hier kan je globale moderator permissies toewijzen aan gebruikers of groepen. Deze moderators zijn gelijk aan normale moderators behalve dat ze toegang hebben tot alle forums.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Hier kan je forum permissies toewijzen aan groepen.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Hier kan je globale permissies toewijzen aan groepen - gebruikers permissies, globale moderator permissies en beheerder permissies. Gebruikers permissies hebben de mogelijkheden als het gebruik van avatars, priv&eacute; berichten versturen, enz.; globale moderator permissies zoals goedkeuren van berichten, beheren van onderwerpen, beheren bans, et cetera en tenslotte beheerder permissies zoals het toepassen permissies, aangepaste BBCodes, beheren van forums, et cetera. Persoonlijke gebruiker permissies zouden enkel in sommige gevallen veranderd moeten worden, de aangeraden methode is gebruikers in groepen en die groepen de permissies toewijzen.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Hier kun je de rollen wijzigen voor beheerder permissies. Rollen zijn effectieve permissies, als je een rol wijzigt, wijzigen de permissies van een item met deze rol toegewezen ook.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Hier kun je de rollen wijzigen voor forum permissies. Rollen zijn effectieve permissies, als je een rol wijzigt, wijzigen de permissies van een item met deze rol toegewezen ook.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Hier kun je de rollen wijzigen voor moderatie permissies. Rollen zijn effectieve permissies, als je een rol wijzigt, wijzigen de permissies van een item met deze rol toegewezen ook.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Hier kun je de rollen wijzigen voor gebruikers permissies. Rollen zijn effectieve permissies, als je een rol wijzigt, wijzigen de permissies van een item met deze rol toegewezen ook.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Hier kan je forum permissies toewijzen forum aan gebruikers.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Hier kan je globale permissies toewijzen aan gebruikers - gebruikers permissies, globale moderator permissies en beheerder permissies. Gebruikers permissies hebben de mogelijkheden als het gebruik van avatars, priv&eacute; berichten versturen, et cetera; globale moderator permissies zoals goedkeuren van berichten, beheren van onderwerpen, beheren bans, et cetera en tenslotte beheerder permissies zoals het toepassen permissies, aangepaste BBCodes, beheren van forums, et cetera. Persoonlijke gebruiker permissies zouden enkel in sommige gevallen veranderd moeten worden, de aangeraden methode is gebruikers in groepen en die groepen de permissies toewijzen.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Hier kun je zien welke effectieve administratie permissies zijn toegewezen aan de geselecteerde gebruiker/groepen.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Hier kun je de globale moderatie zien toegewezen aan de geselecteerde gebruikers/groepen.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Hier kun je de forum permissies zien toegewezen aan de geselecteerde gebruikers/groepen en forums.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Hier kun je de forum moderator permissies zien toegewezen aan de geselecteerde gebruikers/groepen en forums.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Hier kun je zien welke effectieve gebruikers permissies zijn toegewezen aan de geselecteerde gebruiker/groepen.',

	'ADD_GROUPS'				=> 'Voeg groep toe',
	'ADD_PERMISSIONS'			=> 'Voeg permissies toe',
	'ADD_USERS'					=> 'Voeg gebruiker toe',
	'ADVANCED_PERMISSIONS'		=> 'Geavanceerde permissies',
	'ALL_GROUPS'				=> 'Selecteer alle groepen',
	'ALL_NEVER'					=> 'Alles <samp>NOOIT</samp>',
	'ALL_NO'					=> 'Alles <samp>NEE</samp>',
	'ALL_USERS'					=> 'Selecteer alle gebruikers',
	'ALL_YES'					=> 'Alles <samp>JA</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Pas alle permissies toe',
	'APPLY_PERMISSIONS'			=> 'Pas permissies toe',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'De permissies en rol gedefinieerd voor dit item zal enkel bij deze item en alle geselecteerde items worden doorgevoerd.',
	'AUTH_UPDATED'				=> 'Permissies zijn bijgewerkt.',

	'CREATE_ROLE'				=> 'Cre&euml;er rol',
	'CREATE_ROLE_FROM'			=> 'Gebruikersinstellingen van...',
	'CUSTOM'					=> 'Aangepast...',

	'DEFAULT'					=> 'Standaard',
	'DELETE_ROLE'				=> 'Verwijder rol',
	'DELETE_ROLE_CONFIRM'		=> 'Weet je zeker dat je deze rol wilt verwijderen? Items met deze rol toegewezen zullen hun permissies <strong>niet</strong> verliezen.',
	'DISPLAY_ROLE_ITEMS'		=> 'Bekijk items die gebruik maken van deze rol',

	'EDIT_PERMISSIONS'			=> 'Wijzig permissies',
	'EDIT_ROLE'					=> 'Wijzig rol',

	'GROUPS_NOT_ASSIGNED'		=> 'Geen groep toegewezen voor deze rol',

	'LOOK_UP_GROUP'				=> 'Zoek gebruikersgroep op',
	'LOOK_UP_USER'				=> 'Zoek gebruiker op',

	'MANAGE_GROUPS'		=> 'Beheer groepen',
	'MANAGE_USERS'		=> 'Beheer gebruikers',

	'NO_AUTH_SETTING_FOUND'		=> 'Permissie instellingen niet gedefinieerd.',
	'NO_ROLE_ASSIGNED'			=> 'Geen rol toegewezen...',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Instellingen bij deze rol brengen geen verandering bij de permissies aan de rechterkant. Als je alle permissies wilt wissen/verwijderen gebruik dan de &quot;alles <samp>NEE</samp>&quot; link.',
	'NO_ROLE_AVAILABLE'			=> 'Geen rol beschikbaar',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Geef de rol een naam.',
	'NO_ROLE_SELECTED'			=> 'Rol kon niet worden gevonden.',
	'NO_USER_GROUP_SELECTED'	=> 'Je hebt geen enkele gebruiker of groep geselecteerd.',

	'ONLY_FORUM_DEFINED'	=> 'Je hebt enkel forums geselecteerd. Kies ook minstens een gebruiker of een groep.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Permissies en rol zal ook worden toegepast op alle geselecteerde objecten',
	'PLUS_SUBFORUMS'				=> '+subforums',

	'REMOVE_PERMISSIONS'			=> 'Verwijder permissies',
	'REMOVE_ROLE'					=> 'Verwijder rol',
	'RESULTING_PERMISSION'			=> 'Geresulteerde permissies',
	'ROLE'							=> 'Rol',
	'ROLE_ADD_SUCCESS'				=> 'Rol succesvol toegevoegd.',
	'ROLE_ASSIGNED_TO'				=> 'Gebruiker/groepen toegewezen aan %s',
	'ROLE_DELETED'					=> 'Rol succesvol verwijderd.',
	'ROLE_DESCRIPTION'				=> 'Rol beschrijving',

	'ROLE_ADMIN_FORUM'			=> 'Forum beheerder',
	'ROLE_ADMIN_FULL'			=> 'Volledige beheerder',
	'ROLE_ADMIN_STANDARD'		=> 'Standaard beheerder',
	'ROLE_ADMIN_USERGROUP'		=> 'Gebruiker en groepsbeheerder',
	'ROLE_FORUM_BOT'			=> 'Bot toegang',
	'ROLE_FORUM_FULL'			=> 'Volledige toegang',
	'ROLE_FORUM_LIMITED'		=> 'Gelimiteerde toegang',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Gelimiteerde toegang + polls',
	'ROLE_FORUM_NOACCESS'		=> 'Geen toegang',
	'ROLE_FORUM_ONQUEUE'		=> 'Op moderatie wachtrij',
	'ROLE_FORUM_POLLS'			=> 'Standaard toegang + polls',
	'ROLE_FORUM_READONLY'		=> 'Alleen-lezen toegang',
	'ROLE_FORUM_STANDARD'		=> 'Standaard toegang',
	'ROLE_MOD_FULL'				=> 'Volledige moderator',
	'ROLE_MOD_QUEUE'			=> 'Wachtrij moderator',
	'ROLE_MOD_SIMPLE'			=> 'Eenvoudige moderator',
	'ROLE_MOD_STANDARD'			=> 'Standaard moderator',
	'ROLE_USER_FULL'			=> 'Alle mogelijkheden',
	'ROLE_USER_LIMITED'			=> 'Gelimiteerde mogelijkheden',
	'ROLE_USER_NOAVATAR'		=> 'Geen avatar',
	'ROLE_USER_NOPM'			=> 'Geen priv&eacute;berichten',
	'ROLE_USER_STANDARD'		=> 'Standaard mogelijkheden',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Heeft toegang tot het forum beheer en forum permissie instellingen.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Heeft toegang tot alle administratieve functies op dit forum.<br />Niet aan te raden.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Heeft toegang tot de meeste administratieve functies maar tot server of systeem gerelateerde instellingen.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Kan groepen en gebruikers beheren, aanpassen van permissies, instellingen, beheren van bans en rangen.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Deze rol is aan te raden voor bots en zoekspiders.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Kan alle forum functies gebruiken, inclusief het plaatsen van mededelingen en stickies. Kan ook de vloedlimit negeren.<br />Niet aan te raden voor gewone gebruikers.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Kan sommige forum functies gebruiken, maar kan geen bestanden bijvoegen of post iconen gebruiken.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Hetzelfde als gelimiteerde toegang, maar kan ook polls starten.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Kan het forum niet zien of in komen.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Kan sommige forumfuncties gebruiken inclusief bijlagen, maar berichten en onderwerpen moeten goedgekeurd worden door een moderator.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Hetzelfde als standaardtoegang maar kan ook polls starten.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Kan het forum lezen, maar geen nieuwe berichten of onderwerpen plaatsen of hierop reageren.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Kan de meeste forumfuncties gebruiken inclusief bijlagen en eigen berichten verwijderen, maar kan eigen berichten niet sluiten en kan geen polls starten.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Kan alle moderator functies gebruiken, inclusief bannen.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Kan de moderatie wachtrij gebruiken om berichten te valideren en bewerken, maar niets anders.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Kan alleen gewone onderwerpacties gebruiken. Kan geen waarschuwingen geven of de moderatie wachtrij gebruiken.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Kan de meeste moderator gereedschappen gebruiken, maar kan geen gebruikers bannen of de auteur van een bericht veranderen.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Kan alle beschikbare forum functies voor gebruikers gebruiken, inclusief het wijzigen van de gebruikersnaam of het negeren van de vloedlimiet.<br />Niet aan te raden.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Heeft toegang tot sommige gebruikersfuncties. Bijlagen, e-mails, of chatberichten zijn niet toegestaan.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Heeft de beschikking over een beperkte set functies en mag geen avatar instellen.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Heeft de beschikking over een beperkte set functies en mag geen priv&eacute;berichten gebruiken.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Heeft toegang tot de meeste maar niet alle gebruikersfuncties. Kan gebruikersnaam wijzigen of de vloedlimit negeren, bijvoorbeeld.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Hier kun je een kleine beschrijving kwijt wat de rol doet en waar deze voor bedoeld is. De tekst die je hier opgeeft wordt ook weergegeven bij de permissie instellingen.',
	'ROLE_DESCRIPTION_LONG'			=> 'De beschrijving is te lang, beperk deze tot 4000 tekens.',
	'ROLE_DETAILS'					=> 'Rol details',
	'ROLE_EDIT_SUCCESS'				=> 'Rol succesvol bijgewerkt.',
	'ROLE_NAME'						=> 'Rolnaam',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Er bestaat al een rol met de naam <strong>%s</strong> voor het opgegeven permissietype.',
	'ROLE_NOT_ASSIGNED'				=> 'Rol is nog niet toegewezen.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Het geselecteerde forum of forums bestaan niet.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'De geselecteerde groep of groepen bestaan niet.',
	'SELECTED_USER_NOT_EXIST'		=> 'De geselecteerde gebruiker(s) bestaan niet.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Het forum dat je hier selecteert zal alle subforums in de selectie bevatten.',
	'SELECT_ROLE'					=> 'Selecteer rol...',
	'SELECT_TYPE'					=> 'Selecteer type',
	'SET_PERMISSIONS'				=> 'Stel permissies in',
	'SET_ROLE_PERMISSIONS'			=> 'Stel rol permissies in',
	'SET_USERS_PERMISSIONS'			=> 'Stel gebruikers permissies in',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Stel gebruikers forum permissies in',

	'TRACE_DEFAULT'							=> 'Standaard staat iedere permissie op <samp>NEE</samp> (niet ingesteld). De permissie kan dus worden overschreven door een andere instelling.',
	'TRACE_FOR'								=> 'Traceer voor',
	'TRACE_GLOBAL_SETTING'					=> '%s (globaal)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'			=> 'De permissie van deze groep staat op <samp>NOOIT</samp> als totaalresultaat, dus het oude resultaat wordt behouden.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'De permissie van deze groep staat op <samp>NOOIT</samp> als totaalresultaat, dus het oude resultaat wordt behouden.',
	'TRACE_GROUP_NEVER_TOTAL_NO'			=> 'De permissie van deze groep staat op <samp>NOOIT</samp> wat tevens de nieuwe totale waarde wordt om deze niet specifiek ingesteld is (ingesteld op <samp>NEE</samp>).',
 	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'		=> 'De permissie van deze groep staat op <samp>NOOIT</samp> wat tevens de nieuwe totale waarde wordt om deze niet specifiek ingesteld is (ingesteld op <samp>NEE</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'			=> 'De permissie van deze groep staat op <samp>NOOIT</samp> wat de totale waarde <samp>JA</samp> overschrijft naar <samp>NOOIT</samp> voor de gebruiker.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'		=> 'De permissie van deze groep staat op <samp>NOOIT</samp> wat de totale waarde <samp>JA</samp> overschrijft naar <samp>NOOIT</samp> voor de gebruiker.',
	'TRACE_GROUP_NO'						=> 'De permissie van deze groep staat op <samp>NEE</samp> dus de oude waarde blijft behouden.',
	'TRACE_GROUP_NO_LOCAL'					=> 'De permissie van deze groep staat op <samp>NEE</samp> dus de oude waarde blijft behouden.',
	'TRACE_GROUP_YES_TOTAL_NEVER'			=> 'De permissie van deze groep staat op <samp>JA</samp> maar de totale waarde staat op <samp>NOOIT</samp> en kan niet worden overschreven.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'		=> 'De permissie van deze groep staat op <samp>JA</samp> maar de totale waarde staat op <samp>NOOIT</samp> en kan niet worden overschreven.',
	'TRACE_GROUP_YES_TOTAL_NO'				=> 'De permissie van deze groep staat op <samp>JA</samp> wat tevens de nieuwe totale waarde wordt omdat deze niet specifiek ingesteld is (ingesteld op <samp>NEE</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'		=> 'De permissie van deze groep staat op <samp>JA</samp> wat tevens de nieuwe totale waarde wordt omdat deze niet specifiek ingesteld is (ingesteld op <samp>NEE</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'				=> 'De permissie van deze groep staat op <samp>JA</samp> en de totale waarde staat reeds op <samp>JA</samp>, dus het totale resultaat wordt behouden.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'		=> 'De permissie van deze groep staat op <samp>JA</samp> en de totale waarde staat reeds op <samp>JA</samp>, dus het totale resultaat wordt behouden.',
	'TRACE_PERMISSION'						=> 'Traceer instelling - %s',
	'TRACE_RESULT'							=> 'Traceer resultaat',
	'TRACE_SETTING'							=> 'Traceer instelling',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'De forum onafhankelijke gebruikerspermissie komt op <samp>JA</samp> maar de totale waarde staat reeds op <samp>JA</samp> dus de oude waarde blijft behouden. %sTraceer globale permissies%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'De forum onafhankelijke gebruikerspermissie komt op <samp>JA</samp> welke het huidige lokale totaal <samp>NOOIT</samp> overschrijft. %sTraceer globale permissies%s',

	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'De forum onafhankelijke gebruikerspermissie komt op <samp>NOOIT</samp> wat de lokale permissie niet be&iuml;nvloed. %sTraceer globale permissies%s',
	'TRACE_USER_FOUNDER'					=> 'De gebruiker staat als eigenaar ingesteld, dus beheerder permissies staan standaard op <samp>JA</samp>.',
	'TRACE_USER_KEPT'						=> 'De gebruikerspermissie staat op <samp>NEE</samp> dus de oude totale waarde blijft behouden.',
	'TRACE_USER_KEPT_LOCAL'					=> 'De gebruikerspermissie staat op <samp>NEE</samp> dus de oude totale waarde blijft behouden.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'De gebruikerspermissie staat op <samp>NEE</samp> en de totale waarde staat op <samp>NEE</samp>, dus niets verandert.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'De gebruikerspermissie staat op <samp>NEE</samp> en de totale waarde staat op <samp>NEE</samp>, dus niets verandert.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'De gebruikerspermissie staat op <samp>NOOIT</samp> wat de totale waarde wordt omdat deze stond ingesteld op <samp>NEE</samp>.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'De gebruikerspermissie staat op <samp>NOOIT</samp> wat de totale waarde wordt omdat deze stond ingesteld op <samp>NEE</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'De gebruikerspermissie staat op <samp>NOOIT</samp> en overschrijft de vorige <samp>JA</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'De gebruikerspermissie staat op <samp>NOOIT</samp> en overschrijft de vorige <samp>JA</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'De gebruikerspermissie staat op <samp>NEE</samp> en de totale waarde stond op <samp>NEE</samp> wat resulteert in <samp>NOOIT</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'De gebruikerspermissie staat op <samp>NEE</samp> en de totale waarde stond op <samp>NEE</samp> wat resulteert in <samp>NOOIT</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'De gebruikerspermissie staat op <samp>NOOIT</samp> en kan niet worden overschreven.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'De gebruikerspermissie staat op <samp>NOOIT</samp> en kan niet worden overschreven.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'De gebruikerspermissie staat op <samp>JA</samp> en wordt de nieuwe totale waarde omdat deze stond ingesteld op <samp>NEE</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'De gebruikerspermissie staat op <samp>JA</samp> en wordt de nieuwe totale waarde omdat deze stond ingesteld op <samp>NEE</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'De gebruikerspermissie staat op <samp>JA</samp> en totale waarde staat op <samp>JA</samp>, dus niets verandert.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'De gebruikerspermissie staat op <samp>JA</samp> en totale waarde staat op <samp>JA</samp>, dus niets verandert.',
	'TRACE_WHO'								=> 'Wie',
	'TRACE_TOTAL'							=> 'Totaal',

	'USERS_NOT_ASSIGNED'			=> 'Geen gebruiker toegewezen aan deze rol',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'is lid van de volgende voor-gedefinieerde groepen',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'is lid van de volgende gebruikers-gedefinieerde groepen',

	'VIEW_ASSIGNED_ITEMS'	=> 'Bekijk toegewezen onderdelen',
	'VIEW_LOCAL_PERMS'		=> 'Lokale permissies',
	'VIEW_GLOBAL_PERMS'		=> 'Globale permissies',
	'VIEW_PERMISSIONS'		=> 'Bekijk permissies',

	'WRONG_PERMISSION_TYPE'				=> 'Verkeerd permissietype geselecteerd.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'De permissie instellingen zijn in een verkeerd formaat, phpBB kan ze niet correct verwerken.',
));
?>