<?php
/**
*
* acp_users [Dutch]
*
* @package language
* @version $Id: users.php,v 1.0.0 2007/01/24 11:29:56 acydburn Exp $
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
	'ADMIN_SIG_PREVIEW'		=> 'Onderschrift voorbeeld.',
	'AT_LEAST_ONE_FOUNDER'	=> 'Het is niet toegestaan om de eigenaar te veranderen naar een normale gebruiker. Er moet ten minste een eigenaar zijn ingesteld voor dit forum. Als je deze eigenaar status wilt aanpassen, promoveer dan een andere gebruiker tot eigenaar',

	'BAN_ALREADY_ENTERED'	=> 'De ban was al eens succesvol ingevoerd. De banlijst is niet bijgewerkt.',
	'BAN_SUCCESSFUL'		=> 'Ban succesvol ingevoerd.',

	'CANNOT_BAN_FOUNDER'			=> 'Je mag geen eigenaar-accounts bannen.',
	'CANNOT_BAN_YOURSELF'			=> 'Je mag jezelf niet bannen.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Je mag geen bot-accounts uitschakelen. Deactiveer de bot op zich.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Je mag geen eigenaar-accounts deactiveren.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Je mag je eigen account niet deactiveren.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Je mag geen bot-accounts dwingen om te heractiveren. Deactiveer de bot zelf.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Je mag geen eigenaar-accounts dwingen om te heractiveren.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Je mag jezelf niet dwingen tot heractivatie.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Het is niet mogelijk om gast-accounts te verwijderen.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Je mag je eigen gebruikersaccount niet verwijderen.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Je bent niet in staat om genegeerde gebruikers te promoten naar eigenaren.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Je moet gebruikers eerst activeren voordat je ze tot eigenaar promoot, alleen geactiveerde gebruikers kunnen worden gepromoot.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Je hoeft alleen dit te specificeren als je het gebruikers e-mailadres wijzigt.',

	'DELETE_POSTS'			=> 'Verwijder berichten',
	'DELETE_USER'			=> 'Verwijder gebruiker',
	'DELETE_USER_EXPLAIN'	=> 'Let op, het verwijderen van een gebruiker is definitief, dit kan niet ongedaan worden gemaakt.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Succesvolle gedwongen heractivatie.',
	'FOUNDER'						=> 'Eigenaar',
	'FOUNDER_EXPLAIN'				=> 'Eigenaren hebben alle beheerderrechten en kunnen nooit worden verbannen, verwijderd of gewijzigd worden door niet-eigenaars.',

	'GROUP_APPROVE'	=> 'Keur gebruiker goed',
	'GROUP_DEFAULT'	=> 'Maak groep standaard voor lid',
	'GROUP_DELETE'	=> 'Verwijder lid uit groep',
	'GROUP_DEMOTE'	=> 'Degradeer groepleider',
	'GROUP_PROMOTE'	=> 'Promoveer tot groepleider',

	'IP_WHOIS_FOR'	=> 'IP-whois voor %s',

	'LAST_ACTIVE'	=> 'Laatst actief',

	'MOVE_POSTS_EXPLAIN'	=> 'Selecteer het forum waarheen alle berichten worden verplaatst die de gebruiker heeft gemaakt.',

	'NO_SPECIAL_RANK'		=> 'Geen speciale rang aangegeven',
	'NOT_MANAGE_FOUNDER'	=> 'Je probeert een gebruiker te bewerken met eigenaar-status. Alleen eigenaren hebben de rechten om andere eigenaren te bewerken.',

	'QUICK_TOOLS'	=> 'Snel gereedschap',

	'REGISTERED'	=> 'Geregistreerd',
	'REGISTERED_IP'	=> 'Geregistreerd op IP',
	'RETAIN_POSTS'	=> 'Hou bericht vast',

	'SELECT_FORM'	=> 'Selecteer forum',
	'SELECT_USER'	=> 'Selecteer gebruiker',

	'USER_ADMIN'					=> 'Gebruikersbeheer',
	'USER_ADMIN_ACTIVATE'			=> 'Activeer account',
	'USER_ADMIN_ACTIVATED'			=> 'Gebruiker succesvol geactiveerd.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Succesvol avatar verwijderd van gebruikersaccount.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Ban volgens e-mail',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'E-mailadres verbannen via gebruikersbeheer',
	'USER_ADMIN_BAN_IP'				=> 'Ban volgens IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP verbannen via gebruikersbeheer',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Gebruikersnaam verbannen bij gebruikersbeheer',
	'USER_ADMIN_BAN_USER'			=> 'Ban volgens gebruikersnaam',
	'USER_ADMIN_DEACTIVATE'			=> 'Deactiveer account',
	'USER_ADMIN_DEACTIVED'			=> 'Gebruiker succesvol gedeactiveerd.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Verwijder alle bijlagen',
	'USER_ADMIN_DEL_AVATAR'			=> 'Verwijder avatar',
	'USER_ADMIN_DEL_POSTS'			=> 'Verwijder alle berichten',
	'USER_ADMIN_DEL_SIG'			=> 'Verwijder onderschrift',
	'USER_ADMIN_EXPLAIN'			=> 'Hier kun je de gebruikersinformatie wijzigen en bepaalde opties specificeren. Om gebruikers permissies in te stellen gebruik het gebruikers en groepen permissies systeem.',
	'USER_ADMIN_FORCE'				=> 'Gedwongen heractivatie',
	'USER_ADMIN_MOVE_POSTS'			=> 'Verplaats alle berichten',
	'USER_ADMIN_SIG_REMOVED'		=> 'Onderschrift succesvol verwijderd.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Alle bijlagen van deze gebruiker zijn succesvol verwijderd.',
	'USER_AVATAR_UPDATED'			=> 'De avatar van deze gebruiker is succesvol bijgewerkt.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Aangepaste profielvelden',
	'USER_DELETED'					=> 'Gebruiker succesvol verwijderd.',
	'USER_GROUP_ADD'				=> 'Voeg gebruiker toe aan groep.',
	'USER_GROUP_NORMAL'				=> 'Gebruikers-gedefinieerde groep gebruiker is lid van',
	'USER_GROUP_PENDING'			=> 'Groep gebruiker is in afwachtende modus',
	'USER_GROUP_SPECIAL'			=> 'Speciale groep gebruiker is lid van',
	'USER_NO_ATTACHMENTS'			=> 'Er zijn geen bijgevoegde bestanden om te laten zien.',
	'USER_OVERVIEW_UPDATED'			=> 'Gebruikersdetails bijgewerkt.',
	'USER_POSTS_DELETED'			=> 'Alle berichten gemaakt bij deze gebruiker zijn succesvol verwijderd.',
	'USER_POSTS_MOVED'				=> 'Alle berichten van de gebruiker zijn verplaatst naar het geselecteerde forum.',
	'USER_PREFS_UPDATED'			=> 'Voorkeuren gebruiker bijgewerkt.',
	'USER_PROFILE'					=> 'Gebruikersprofiel',
	'USER_PROFILE_UPDATED'			=> 'Gebruikersprofiel bijgewerkt.',
	'USER_RANK'						=> 'Gebruikersrang',
	'USER_RANK_UPDATED'				=> 'Gebruikersrang bijgewerkt.',
	'USER_SIG_UPDATED'				=> 'Gebruikersonderschrift succesvol bijgewerkt.',
	'USER_TOOLS'					=> 'Basis gereedschap',
));
?>