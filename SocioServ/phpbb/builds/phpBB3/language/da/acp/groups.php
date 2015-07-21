<?php
/**
*
* acp_groups [Danish]
*
* @package language
* @version $Id: groups.php,v 1.28 2007/07/02 14:05:21 kellanved Exp $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Her kan du administrere alle dine brugergrupper. Du kan slette, oprette og rette eksisterende grupper. Desuden kan du udpege gruppeledere, ændre gruppens status til åben/skjult/lukket og dens navn og beskrivelse.',
	'ADD_USERS'						=> 'Tilføj brugere',
	'ADD_USERS_EXPLAIN'				=> 'Her kan du tilføje nye brugere til gruppen. Du kan vælge om gruppen skal være ny standardgruppe for de valgte brugere. Du kan ydermere definere dem som gruppeledere. Indtast venligst hvert brugernavn på en separat linie.',

	'COPY_PERMISSIONS'				=> 'Kopiér tilladelser fra',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Når gruppen er oprettet vil den have samme tilladelser som den hér valgte.',
	'CREATE_GROUP'					=> 'Opret ny gruppe',

	'GROUPS_NO_MEMBERS'				=> 'Denne gruppe har ingen medlemmer',
	'GROUPS_NO_MODS'				=> 'Ingen gruppeledere defineret',
	
	'GROUP_APPROVE'					=> 'Godkend medlem',
	'GROUP_APPROVED'				=> 'Godkendte medlemmer',
	'GROUP_AVATAR'					=> 'Gruppeavatar',
	'GROUP_AVATAR_EXPLAIN'			=> 'Dette billede vil blive vist i gruppe kontrolpanelet.',
	'GROUP_CLOSED'					=> 'Lukket',
	'GROUP_COLOR'					=> 'Gruppefarve',
	'GROUP_COLOR_EXPLAIN'			=> 'Definerer farven som gruppemedlemmers navne vises med, lad være tom for brugerstandard.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Er du sikker på du vil tilføje brugeren %1$s til gruppen?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Er du sikker på du vil tilføje brugerne %1$s til gruppen?',
	'GROUP_CREATED'					=> 'Gruppen er oprettet.',
	'GROUP_DEFAULT'					=> 'Gør gruppen til standard for medlem',
	'GROUP_DEFS_UPDATED'			=> 'Standardgruppe sat for alle valgte medlemmer.',
	'GROUP_DELETE'					=> 'Slet medlem fra gruppe',
	'GROUP_DELETED'					=> 'Gruppe slettet og standard brugergrupper indstillet.',
	'GROUP_DEMOTE'					=> 'Degradér gruppeleder',
	'GROUP_DESC'					=> 'Gruppebeskrivelse',
	'GROUP_DETAILS'					=> 'Gruppeinformation',
	'GROUP_EDIT_EXPLAIN'			=> 'Her har du mulighed for at ændre en eksisterende gruppe. Bl.a. navn, beskrivelse og type (åben, lukket, m.v.). Du kan også sætte instillinger som omfatter hele gruppen, som den farve gruppemedlemmernes brugernavne vises med, rang m.v. Ændringer hér overskriver brugernes nuværende indstillinger. Bemærk venligst at gruppemedlemmer kan ændre deres gruppeavatar, medmindre du sætter passende brugertilladelser.',
	'GROUP_ERR_USERS_EXIST'			=> 'De angivne brugere er allerede medlemmer af denne gruppe.',
	'GROUP_FOUNDER_MANAGE'			=> 'Kan kun ændres af grundlæggere',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Gruppen kan kun ændres af grundlæggere. Brugere med tilladelse til at ændre i grupper og gruppens medlemmer vil stadig kunne se den.',
	'GROUP_HIDDEN'					=> 'Skjult',
	'GROUP_LANG'					=> 'Gruppesprog',
	'GROUP_LEAD'					=> 'Gruppeledere',
	'GROUP_LEADERS_ADDED'			=> 'Nye ledere tilføjet gruppe.',
	'GROUP_LEGEND'					=> 'Vis gruppe i farveforklaring',
	'GROUP_LIST'					=> 'Nuværende medlemmer',
	'GROUP_LIST_EXPLAIN'			=> 'Dette er en komplet liste over alle nuværende brugere med medlemskab af denne gruppe. Du kan slette medlemmer (undtaget i bestemte specialgrupper) eller tilføje nye som du vil.',
	'GROUP_MEMBERS'					=> 'Gruppemedlemmer',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Dette er en komplet liste over alle medlemmer af denne brugergruppe. Den inkluderer separate sektioner for ledere, afventende og eksisterende medlemmer. Herfra kan du administrere alle aspekter af hvem der har medlemsskab af denne gruppe og hvad deres rolle er. For at fjerne en leder, men beholde vedkommende i gruppen, brug "Degradér" i stedet for at slette. Brug på tilsvarende måde "Forfrem" til at gøre et eksisterende medlem til leder.',
	'GROUP_MESSAGE_LIMIT'			=> 'Maksimalt antal private beskeder pr. mappe for medlemmer af gruppe',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Denne indstilling overskriver indstillingerne for maksimalt antal private beskeder i en mappe. En værdi på 0 betyder at brugerens standardgrænse bruges.',
	'GROUP_MODS_ADDED'				=> 'Nye gruppeledere tilføjet.',
	'GROUP_MODS_DEMOTED'			=> 'Gruppeledere degraderet.',
	'GROUP_MODS_PROMOTED'			=> 'Gruppemedlemmer forfremmet.',
	'GROUP_NAME'					=> 'Gruppenavn',
	'GROUP_NAME_TAKEN'				=> 'Gruppenavnet bruges allerede, vælg venligst et andet.',
	'GROUP_OPEN'					=> 'Åben',
	'GROUP_PENDING'					=> 'Afventende medlemmer',
	'GROUP_PROMOTE'					=> 'Forfrem til gruppeleder',
	'GROUP_RANK'					=> 'Grupperang',
	'GROUP_RECEIVE_PM'				=> 'Gruppe kan modtage private beskeder',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Bemærk venligst at skjulte grupper ikke kan tilsendes beskeder, uanset denne indstilling.',
	'GROUP_REQUEST'					=> 'Forespørgsel',
	'GROUP_SETTINGS_SAVE'			=> 'Indstillinger for gruppe',
	'GROUP_TYPE'					=> 'Gruppetype',
	'GROUP_TYPE_EXPLAIN'			=> 'Dette afgør hvorvidt brugere kan tilmelde sig eller se denne gruppe.',
	'GROUP_UPDATED'					=> 'Gruppeindstillinger opdateret.',

	'GROUP_USERS_ADDED'				=> 'Nye brugere tilføjet gruppen.',
	'GROUP_USERS_EXIST'				=> 'De valgte brugere er allerede medlemmer.',
	'GROUP_USERS_REMOVE'			=> 'Brugere fjernet fra gruppe og nye standardindstillinger sat.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Gør til standardgruppe for samtlige medlemmer',
	'MEMBERS'				=> 'Medlemmer',

	'NO_GROUP'					=> 'Ingen gruppe angivet.',
	'NO_GROUPS_CREATED'			=> 'Endnu ingen gruppe oprettet.',
	'NO_PERMISSIONS'			=> 'Kopiér ikke tilladelser',
	'NO_USERS' 					=> 'Du har ikke tilknyttet brugere.',

	'SPECIAL_GROUPS'			=> 'Prædefinerede grupper',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Prædefinerede grupper er specielle grupper, de kan ikke slettes eller rettes direkte. Du kan dog stadig tilføje brugere og ændre basisindstillinger.',

	'TOTAL_MEMBERS'				=> 'Medlemmer',

	'USERS_APPROVED'				=> 'Brugere godkendt.',
	'USER_DEFAULT'					=> 'Brugerstandard',
	'USER_DEF_GROUPS'				=> 'Brugerdefinerede grupper',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Dette er grupper oprettet af dig eller en anden administrator af dette board. Du kan administrere medlemskaber såvel som rette gruppeegenskaber eller endda slette gruppen.',
	'USER_GROUP_DEFAULT'			=> 'Sæt som standardgruppe',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Hvis du svarer "Ja" hér vil det sætte gruppen som standardgruppe for de tilføjede brugere.',
	'USER_GROUP_LEADER'				=> 'Sæt som gruppeleder',
));

?>