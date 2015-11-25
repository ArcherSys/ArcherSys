<?php
/** 
*
* groups.php [Norsk [ NO ]]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-05-18 - phpBB Gruppen
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
	'ALREADY_IN_GROUP_PENDING'	=> 'Du har allerede søkt om medlemskap i den valgte gruppen.',
	'FORUM_UNDISCLOSED'	=> 'Modererer skjule forum',
	'ALREADY_DEFAULT_GROUP'	=> 'Den valgte gruppen er allerede din standardgruppe',
	'ALREADY_IN_GROUP'	=> 'Du er allerede medlem av den valgte gruppen',
	'CHANGED_DEFAULT_GROUP'	=> 'Standardgruppe valgt',
	'GROUP_AVATAR'	=> 'Gruppeavatar',
	'GROUP_CHANGE_DEFAULT'	=> 'Vil du skifte standardgruppe til "%s"?',
	'GROUP_CLOSED'	=> 'Stengt',
	'GROUP_DESC'	=> 'Gruppebeskrivelse',
	'GROUP_HIDDEN'	=> 'Skjult',
	'GROUP_INFORMATION'	=> 'Gruppeinformasjon',
	'GROUP_IS_CLOSED'	=> 'Gruppen er privat. Nye medlemmer m&aring; godkjennes f&oslash;rst.',
	'GROUP_IS_FREE'	=> 'Gruppen er &aring;pen. Alle kan melde seg inn.',
	'GROUP_IS_HIDDEN'	=> 'Gruppen er skjult, bare medlemmer av denne gruppen kan se medlemskapet.',
	'GROUP_IS_OPEN'	=> 'Gruppen er &aring;pen, men du m&aring; s&oslash;ke om &aring; bli medlem.',
	'GROUP_IS_SPECIAL'	=> 'Dette er en spesialgruppe, som er administrert av forumadministratoren.',
	'GROUP_JOIN'	=> 'Bli med',
	'GROUP_JOIN_CONFIRM'	=> 'Er du sikker p&aring; at du vil melde deg inn i denne gruppen?',
	'GROUP_JOIN_PENDING'	=> 'Skriv en s&oslash;knad for &aring; bli med',
	'GROUP_JOIN_PENDING_CONFIRM'	=> 'Er du sikker p&aring; &aring; at du vil s&oslash;ke p&aring; den valgte gruppen?',
	'GROUP_JOINED'	=> 'Du er n&aring; med i valgte gruppe',
	'GROUP_JOINED_PENDING'	=> 'S&oslash;knaden er levert. S&oslash;knaden m&aring; f&oslash;rst bli godkjent av en gruppe leder.',
	'GROUP_LIST'	=> 'Behandle brukere',
	'GROUP_MEMBERS'	=> 'Gruppemedlemmer',
	'GROUP_NAME'	=> 'Gruppenavn',
	'GROUP_OPEN'	=> '&Aring;pen',
	'GROUP_RANK'	=> 'Grupperangering',
	'GROUP_RESIGN_MEMBERSHIP'	=> 'Avslutte gruppe medlemskap',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Er du sikker p&aring; at du vil avslutte ditt gruppemedlemskap til den valgte gruppen?',
	'GROUP_RESIGN_PENDING'	=> 'avslutt en ventende gruppe s&oslash;knad',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> 'Er du sikker p&aring; at du vil omgj&oslash;re din behandlende s&oslash;knad til den valgte gruppen?',
	'GROUP_RESIGNED_MEMBERSHIP'	=> 'Du er nå utmeldt fra denne gruppen',
	'GROUP_RESIGNED_PENDING'	=> 'Din søknad om medlemskap i de valgte gruppene er nå slettet',
	'GROUP_TYPE'	=> 'Gruppetype',
	'GROUP_UNDISCLOSED'	=> 'Skjult gruppe',
	'LOGIN_EXPLAIN_GROUP'	=> 'Du m&aring; logge inn for &aring; se gruppedetaljer',
	'NO_LEADERS'	=> 'Du er ikke leder i noen gruppe.',
	'NOT_LEADER_OF_GROUP'	=> 'Handlingen kan ikke utf&oslash;res fordi du ikke er leder i gruppen.',
	'NOT_MEMBER_OF_GROUP'	=> 'Handlingen kan ikke utf&oslash;res fordi du ikke er medlem i gruppen.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Du har ikke lov til &aring; melde det ut av hovedgruppen.',
	'PRIMARY_GROUP'	=> 'Hovedgruppe',
	'REMOVE_SELECTED'	=> 'Fjern valgte',
	'USER_GROUP_CHANGE'	=> 'Bytter gruppe fra %uFFFD%1$s%uFFFD til %uFFFD%2$s%uFFFD.',
	'USER_GROUP_DEMOTE'	=> 'Fjern lederskap',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Er du sikker p&aring; at du vil trekke deg som gruppeleder fra den valgte gruppen?',
	'USER_GROUP_DEMOTED'	=> 'Du er nå fjernet som leder fra den valgte gruppen',
));

?>