<?php
/**
*
* acp_groups [Dutch]
*
* @package language
* @version $Id: groups.php,v 1.0.0 2007/01/24 11:29:56 acydburn Exp $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'	=> 'Vanuit dit paneel kan je al jouw gebruikersgroepen beheren en je bestaande groepen verwijderen en wijzigen. Verder kun je groepsleiders kiezen, switchen tussen statussen open/verborgen/gesloten voor een groep en de groepsbeschrijving aanpassen.',
	'ADD_USERS'					=> 'Voeg gebruikers toe',
	'ADD_USERS_EXPLAIN'			=> 'Hier kan je nieuwe gebruikers aan de groep toevoegen. Je kan ook kiezen of dit de standaard groep moet worden voor de geselecteerde gebruiker(s). Bovendien kan je hen groepsleider maken. Zet elke gebruikersnaam op een aparte lijn.',

	'COPY_PERMISSIONS'			=> 'Kopieer permissies van',
	'COPY_PERMISSIONS_EXPLAIN'	=> 'Eenmaal aangemaakt, zal de groep de permissies van de geselecteerde groep(en) krijgen.',
	'CREATE_GROUP'				=> 'Maak nieuwe groep',

	'GROUPS_NO_MEMBERS'				=> 'Deze groep heeft geen leden',
	'GROUPS_NO_MODS'				=> 'Geen groepsleiders aangewezen',
	'GROUP_APPROVE'					=> 'Promoveer lid',
	'GROUP_APPROVED'				=> 'Promoveer leden',
	'GROUP_AVATAR'					=> 'Groepsavatar',
	'GROUP_AVATAR_EXPLAIN'			=> 'Deze afbeelding laten zien in het groeps controlepaneel.',
	'GROUP_CLOSED'					=> 'Gesloten',
	'GROUP_COLOR'					=> 'Groepskleur',
	'GROUP_COLOR_EXPLAIN'			=> 'Wijzigt de kleuren waar de gebruikersnamen in worden weergegeven, laat leeg voor gebruikers standaard.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Weet je zeker dat je de gebruiker %1$s wilt toevoegen aan de groep?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Weet je zeker dat je de gebruikers %1$s wilt toevoegen aan de groep?',
	'GROUP_CREATED'					=> 'Groep succesvol aangemaakt.',
	'GROUP_DEFAULT'					=> 'Maak groep standaard voor lid',
	'GROUP_DEFS_UPDATED'			=> 'Standaard groep gemaakt voor geselecteerde leden.',
	'GROUP_DELETE'					=> 'Verwijder lid van groep',
	'GROUP_DELETED'					=> 'Groep verwijderd en gebruikers standaardgroep succesvol gewijzigd.',
	'GROUP_DEMOTE'					=> 'Degradeer groepsleider',
	'GROUP_DESC'					=> 'Groepsbeschrijving',
	'GROUP_DETAILS'					=> 'Groep details',
	'GROUP_EDIT_EXPLAIN'			=> 'Hier kan je bestaande groepen bewerken.',
	'GROUP_ERR_USERS_EXIST'			=> 'De gespecificeerde gebruikers zijn al lid van deze groep.',
	'GROUP_FOUNDER_MANAGE'			=> 'Alleen beheer groep door groepleider(s)',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Beperk het beheer voor deze groep van beheerders. Gebruikers met groepspermissies zullen deze groep en zijn leden nog steeds kunnen zien.',
	'GROUP_HIDDEN'					=> 'Verborgen',
	'GROUP_LANG'					=> 'Groepstaal',
	'GROUP_LEAD'					=> 'Groepsleiders',
	'GROUP_LEADERS_ADDED'			=> 'Nieuwe leiders succesvol aan de groep toegevoegd.',
	'GROUP_LEGEND'					=> 'Laat groep zien in legenda',
	'GROUP_LIST'					=> 'Momentele leden',
	'GROUP_LIST_EXPLAIN'			=> 'Dit is een complete lijst of leden die een lidmaatschap tot deze groep hebben. Je kan leden verwijderen (behalve in zekere speciale groepen) of nieuwe leden toevoegen.',
	'GROUP_MEMBERS'					=> 'Groepsleden',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Dit is een volledige lijst van alle leden in deze gebruikersgroep.',
	'GROUP_MESSAGE_LIMIT'			=> 'Groep priv&eacute;berichten limiet per map',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Deze instelling overschrijft de per gebruiker, per map berichten limiet. Een waarde van 0 betekent dat de gebruikers standaardlimiet zal worden gebruikt.',
	'GROUP_MODS_ADDED'				=> 'Nieuwe groepsleiders succesvol toegevoegd.',
	'GROUP_MODS_DEMOTED'			=> 'Groepsleiders succesvol gedegradeerd.',
	'GROUP_MODS_PROMOTED'			=> 'Groepsleden succesvol gepromoveerd.',
	'GROUP_NAME'					=> 'Groepsnaam',
	'GROUP_NAME_TAKEN'				=> 'De opgegeven groepsnaam is al in gebruik, selecteer een alternatief.',
	'GROUP_OPEN'					=> 'Open',
	'GROUP_PENDING'					=> 'Wachtende leden',
	'GROUP_PROMOTE'					=> 'Promoveer naar groepsleider',
	'GROUP_RANK'					=> 'Groepsrang',
	'GROUP_RECEIVE_PM'				=> 'Groep kan priv&eacute;berichten ontvangen',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Onthoud dat verborgen groepen nooit priv&eacute;berichten kunnen ontvangen, wat hier ook ingesteld is.',
	'GROUP_REQUEST'					=> 'Aanvraag',
	'GROUP_SETTINGS_SAVE'			=> 'Groepsinstellingen',
	'GROUP_TYPE'					=> 'Groep type',
	'GROUP_TYPE_EXPLAIN'			=> 'Dit stelt in welke gebruikers de groep kunnen toetreden of bekijken.',
	'GROUP_UPDATED'					=> 'Groepsinstellingen succesvol bijgewerkt.',
	'GROUP_USERS_ADDED'				=> 'Nieuwe gebruikers succesvol aan de groep toegevoegd.',
	'GROUP_USERS_EXIST'				=> 'De geselecteerde gebruikers zijn al lid van deze groep.',
	'GROUP_USERS_REMOVE'			=> 'Gebruikers succesvol verwijderd van de groep en nieuwe/standaard instellingen voor die gebruikers goed gezet.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Maak standaard groep voor elk lid',
	'MEMBERS'				=> 'Leden',

	'NO_GROUP'			=> 'Geen groep gespecificeerd.',
	'NO_GROUPS_CREATED'	=> 'Nog geen groepen aangemaakt.',
	'NO_PERMISSIONS'	=> 'Permissies niet kopi&euml;ren',
	'NO_USERS'			=> 'Je hebt geen gebruikers ingevuld.',

	'SPECIAL_GROUPS'			=> 'Voorgedefinieerde groepen',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Voorgedefinieerde groepen zijn speciale groepen. Ze kunnen niet verwijderd of rechtstreeks gewijzigd worden, maar je kan nog wel gebruikers toevoegen en basis instellingen wijzigen.',

	'TOTAL_MEMBERS'	=> 'Totale leden',

	'USERS_APPROVED'				=> 'Gebruikers succesvol goedgekeurd.',
	'USER_DEFAULT'					=> 'Gebruikers standaard',
	'USER_DEF_GROUPS'				=> 'Gebruiker gedefinieerde groepen',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Deze groepen zijn door jou of een andere beheerder aangemaakt. Je kan lidmaatschappen beheren, evenals de groepsinstellingen en/of zelfs de groep verwijderen.',
	'USER_GROUP_DEFAULT'			=> 'Maak standaard groep',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Als je op &quot;ja&quot; klikt, zal dit de standaard groep van alle groepsleden worden.',
	'USER_GROUP_LEADER'				=> 'Maak groepsleider',
));
?>