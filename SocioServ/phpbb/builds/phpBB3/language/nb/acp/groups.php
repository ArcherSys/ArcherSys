<?php
/** 
*
* acp_groups.php [﻿Norwegian Bokmål]
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
	'GROUP_CONFIRM_ADD_USER'	=> 'Are you sure that you want to add the user %1$s to the group?',
	'GROUP_CONFIRM_ADD_USERS'	=> 'Are you sure that you want to add the users %1$s to the group?',
	'ACP_GROUPS_MANAGE_EXPLAIN'	=> 'Her kan du slette, lage og endre brukergrupper. Du kan også velge gruppeledere, åpne/stenge grupper og bestemme navn og beskrivelse.',
	'ADD_USERS'	=> 'Legg til brukere',
	'ADD_USERS_EXPLAIN'	=> 'Her kan du legge til nye brukere i gruppen. Du kan også velge om dette skal være standardgruppen for nye brukere. Du kan også gi medlemmer gruppelederstatus. Skriv hvert brukernavn på en ny linje.',
	'COPY_PERMISSIONS'	=> 'Kopier rettigheter fra',
	'COPY_PERMISSIONS_EXPLAIN'	=> 'Hvis valg, vil gruppen ha de samme rettighetene som den valgt her.',
	'CREATE_GROUP'	=> 'Lag ny gruppe',
	'GROUPS_NO_MEMBERS'	=> 'Denne gruppen har ingen medlemmer',
	'GROUPS_NO_MODS'	=> 'Ingen gruppeledere er spesifisert',
	'GROUP_APPROVE'	=> 'Godta medlem',
	'GROUP_APPROVED'	=> 'Godtatte medlemmer',
	'GROUP_AVATAR'	=> 'Gruppeavatar',
	'GROUP_AVATAR_EXPLAIN'	=> 'Dette bildet vil bli vist i gruppekontrollpanelet.',
	'GROUP_CLOSED'	=> 'Stengt',
	'GROUP_COLOR'	=> 'Gruppefarge',
	'GROUP_COLOR_EXPLAIN'	=> 'Definerer hvilken farge medlemslinken får når den vises i forumet, la dette feltet stå tomt hvis medlemmene skal bli vist som vanlige brukere.',
	'GROUP_CREATED'	=> 'Gruppen er laget.',
	'GROUP_DEFAULT'	=> 'Gjør gruppen til standard.',
	'GROUP_DEFS_UPDATED'	=> 'Standardgruppe for alle medlemmer.',
	'GROUP_DELETE'	=> 'Slett medlem fra gruppen',
	'GROUP_DELETED'	=> 'Handligene er utført.',
	'GROUP_DEMOTE'	=> 'Degrader gruppelederen',
	'GROUP_DESC'	=> 'Gruppebeskrivelse',
	'GROUP_DETAILS'	=> 'Gruppedetaljer',
	'GROUP_EDIT_EXPLAIN'	=> 'Her kan du endre en eksisterende gruppe. Du kan endre navnet og beskrivelsen, og du kan stenge/åpne den. Du kan også stille inn detaljer som medlemsfarger, rangering osv. Alle endringene her prioriteres før den enkelte brukerens innstillinger. Merk deg at sistnevnte ikke gjelder for avatarer.',
	'GROUP_ERR_USERS_EXIST'	=> 'De valgte brukerne er alllerede medlemmer av gruppen.',
	'GROUP_FOUNDER_MANAGE'	=> 'Tillat kun gruppegrunnleggerne å administrere denne gruppen',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Ved å velge dette, vil brukere med grupperettigheter ha like rettigheter som vanlige gruppemedlemmer.',
	'GROUP_HIDDEN'	=> 'Skjult',
	'GROUP_LANG'	=> 'Gruppespråk',
	'GROUP_LEAD'	=> 'Gruppeledere',
	'GROUP_LEADERS_ADDED'	=> 'Nye ledere er lagt til.',
	'GROUP_LEGEND'	=> 'Vis gruppe i tegnforklaringen',
	'GROUP_LIST'	=> 'Gruppemedlemmer',
	'GROUP_LIST_EXPLAIN'	=> 'Dette er en liste over alle gruppemedlemmer. Du kan både legge til og slette medlemer fra gruppen.',
	'GROUP_MEMBERS'	=> 'Gruppemedlemmer',
	'GROUP_MEMBERS_EXPLAIN'	=> 'Dette er en liste over alle medlemmer av denne gruppen. Den inkluderer separate seksjoner som ledere og edlemmer. Her kan du administrere hvem som er medlemmer av gruppen og hva rollen deres er. Hvis gjøre en leder til et vanlig gruppemedlem, men ikke slette ham fra gruppen, bruk degraderingsfunksjonen. Bruk oppgradeeringsfunksjonen for å gjøre et vanlig medlem til leder.',
	'GROUP_MESSAGE_LIMIT'	=> 'Maksimalt antall meldinger i gruppemedlemmers mapper',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Denne innstillingen prioriteres før standardinndtillingen. Skriv 0 hvis standardinnstillingen skal benyttes.',
	'GROUP_MODS_ADDED'	=> 'Nye gruppemedlemmer er lagt til.',
	'GROUP_MODS_DEMOTED'	=> 'Gruppeledere er degradert.',
	'GROUP_MODS_PROMOTED'	=> 'Gruppemedlemmer er oppgradert.',
	'GROUP_NAME'	=> 'Gruppenavn',
	'GROUP_NAME_TAKEN'	=> 'Gruppenavnet du spesifiserte er llerede i bruk; velg et annet.',
	'GROUP_OPEN'	=> 'Åpne',
	'GROUP_PENDING'	=> 'Pending members',
	'GROUP_PROMOTE'	=> 'Oppgrader til gruppemedlem',
	'GROUP_RANK'	=> 'Grupperangering',
	'GROUP_RECEIVE_PM'	=> 'Tiilatt mottakelse av private meldinger',
	'GROUP_RECEIVE_PM_EXPLAIN'	=> 'Husk at skjulte grupper ikke kan motta meldiger uansett.',
	'GROUP_REQUEST'	=> 'Request',
	'GROUP_SETTINGS'	=> 'Still in gruppeprioriteter',
	'GROUP_SETTINGS_EXPLAIN'	=> 'Here you can force changes in users current preferences. Please note these settings are not saved for the group itself. They are intended as a quick method of altering the preferences of all users in this group.',
	'GROUP_SETTINGS_SAVE'	=> 'Group wide settings',
	'GROUP_TIMEZONE'	=> 'Gruppetimesone',
	'GROUP_TYPE'	=> 'Gruppetype',
	'GROUP_TYPE_EXPLAIN'	=> 'Denne instillingen bestemmer hve som kan se og hvem som kan bli medlem av gruppen.',
	'GROUP_UPDATED'	=> 'Group preferences updated successfully.',
	'GROUP_USERS_ADDED'	=> 'Nye brukere er lagt til i gruppen.',
	'GROUP_USERS_EXIST'	=> 'De valgte brukerne er medlemmer alllerede.',
	'GROUP_USERS_REMOVE'	=> 'Hadligene er utført.',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Sett som standardgruppe',
	'MEMBERS'	=> 'Medlemmer',
	'NO_GROUP'	=> 'Ingen gruppe er spesifisert.',
	'NO_GROUPS_CREATED'	=> 'Det finnes ingen grupper.',
	'NO_PERMISSIONS'	=> 'Ikke kopier rettigheter',
	'NO_USERS'	=> 'Du har ikke valgt noen brukere.',
	'SPECIAL_GROUPS'	=> 'Forhåndsdefinerte grupper',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Forhåndsdefinerte grupper er spesielle; de kan ikke bli slettet eller direkte modifisert. Du kan likevel legge til medlemmer og angi standardinnstillinger.',
	'TOTAL_MEMBERS'	=> 'Medlemmer',
	'USERS_APPROVED'	=> 'Medlemmene er godtatt.',
	'USER_DEFAULT'	=> 'Brukerstandard',
	'USER_DEF_GROUPS'	=> 'Brukerdefinerte grupper',
	'USER_DEF_GROUPS_EXPLAIN'	=> 'Dette er grupper somer laget av deg eller en annen adinistrator. Du kan administrere medlemsskap og endre eller slette gruppen.',
	'USER_GROUP_DEFAULT'	=> 'Sett som standardgruppe',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Hvis ja, vil dette bli brukernes standardgruppe.',
	'USER_GROUP_LEADER'	=> 'Sett som gruppeleder',
));

?>