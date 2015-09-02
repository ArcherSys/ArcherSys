<?php
/** 
*
* acp_users.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-08-11 - phpBB.no
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
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Ignorerte brukere kan ikke bli grunnleggere.',
	'USER_NO_ATTACHMENTS'	=> 'Denne brukeren har ingen vedlegg.',
	'BAN_ALREADY_ENTERED'	=> 'Denne handlingen er utført tidligere. Utestengelseslisten ble ikke oppdatert.',
	'AT_LEAST_ONE_FOUNDER'	=> 'Du kan ikke gjøre grunnleggereren til en normal bruker. Du må utnevne en annen bruker til grunnlegger før du kan utføre denne handlingen.',
	'CANNOT_BAN_FOUNDER'	=> 'Du kan ikke utestenge grunnleggeren.',
	'CANNOT_BAN_YOURSELF'	=> 'Du kan ikke utestenge deg selv.',
	'CANNOT_DEACTIVATE_BOT'	=> 'Du kan ikke deaktivere robotkontoer. Deaktiver en robot i stedet.',
	'CANNOT_DEACTIVATE_FOUNDER'	=> 'Du kan ikke deaktivere grunnleggeren.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Du kan ikke deaktivere din egen konto.',
	'CANNOT_FORCE_REACT_BOT'	=> 'Du kan ikke tvinge reaktivering av robotbotkontoer. Deaktiver en robot isteden for.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Du kan ikke tvinge reaktivering av grunnleggerkontoen.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Du kan ikke tvinge reaktivering av din egen konto.',
	'CANNOT_SET_FOUNDER_BOT'	=> 'Du har ikke mulighet til å forfremme ignorerte brukere til å bli grunnleggere.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Du må aktivere brukeren før du forfremmer den til grunnlegger; bare aktiverte brukere kan bli forfremmet.',
	'GROUP_APPROVE'	=> 'Godkjenn medlem',
	'ADMIN_SIG_PREVIEW'	=> 'Signaturforhåndsvisning ',
	'BAN_SUCCESSFUL'	=> 'Utestengelsen er utført.',
	'CANNOT_REMOVE_ANONYMOUS'	=> 'Du har ikke mulighet til å fjerne gjestekontoen.',
	'CANNOT_REMOVE_YOURSELF'	=> 'Du har ikke mulighet til å fjerne din egen brukerkonto.',
	'CONFIRM_EMAIL_EXPLAIN'	=> 'Du trenger bare å spesifisere dette hvis du forandrer brukerens e-postadresse.',
	'DELETE_POSTS'	=> 'Slett innlegg',
	'DELETE_USER'	=> 'Slett bruker',
	'DELETE_USER_EXPLAIN'	=> 'Husk at sletting av bruker er endelig; avgjørelsen kan ikke bli omgjort senere.',
	'FORCE_REACTIVATION_SUCCESS'	=> 'Reaktiveringspåtvingelsen er utført.',
	'FOUNDER'	=> 'Grunnlegger',
	'FOUNDER_EXPLAIN'	=> 'Grunnleggeren kan ikke bli utestengt, slettet eller endret av ikkegrunnleggerbrukere.',
	'GROUP_DEFAULT'	=> 'Standard',
	'GROUP_DELETE'	=> 'Slett',
	'GROUP_DEMOTE'	=> 'Degrader',
	'GROUP_PROMOTE'	=> 'Forfrem',
	'IP_WHOIS_FOR'	=> 'IP-identiteten er %s',
	'LAST_ACTIVE'	=> 'Sist aktiv',
	'MOVE_POSTS_EXPLAIN'	=> 'Spesifiser hvilket forum du vil flytte brukerens innlegg til.',
	'NO_SPECIAL_RANK'	=> 'Ingen spesiell rangering er utpekt.',
	'NOT_MANAGE_FOUNDER'	=> 'Du prøvde å administrere forumet med grunnleggerstatus. Bare grunnleggere kan administrere andre grunnleggere.',
	'QUICK_TOOLS'	=> 'Hurtigverktøy',
	'REGISTERED'	=> 'Registrert',
	'REGISTERED_IP'	=> 'Registrert fra IP',
	'RETAIN_POSTS'	=> 'Behold innlegg',
	'SELECT_FORM'	=> 'Velg form',
	'SELECT_USER'	=> 'Velg bruker',
	'USER_ADMIN'	=> 'Brukeradministrasjon',
	'USER_ADMIN_ACTIVATE'	=> 'Aktiver konto',
	'USER_ADMIN_ACTIVATED'	=> 'Brukerkontoen er aktivert.',
	'USER_ADMIN_AVATAR_REMOVED'	=> 'Brukerens avatar er fjernet.',
	'USER_ADMIN_BAN_EMAIL'	=> 'E-postutestengelse',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'E-postadressen er utestengt via brukeradministrasjonen.',
	'USER_ADMIN_BAN_IP'	=> 'IP-utestengelse',
	'USER_ADMIN_BAN_IP_REASON'	=> 'IP-en er utestengt via brukeradministrasjonen.',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Brukernavnet er utestengt via brukeradministrasjonen.',
	'USER_ADMIN_BAN_USER'	=> 'Utestengelse via brukernavn',
	'USER_ADMIN_DEACTIVATE'	=> 'Deaktiver kontoen',
	'USER_ADMIN_DEACTIVED'	=> 'Kontoen er deaktivert.',
	'USER_ADMIN_DEL_ATTACH'	=> 'Slett alle vedleggene',
	'USER_ADMIN_DEL_AVATAR'	=> 'Slett',
	'USER_ADMIN_DEL_POSTS'	=> 'Slett alle innleggene',
	'USER_ADMIN_DEL_SIG'	=> 'Slett signatur',
	'USER_ADMIN_EXPLAIN'	=> 'Her kan du endre din brukerinformasjon og mange andre alternativer. For å endre på brukertilganger, benytt bruker- og gruppetilgangssystemet.',
	'USER_ADMIN_FORCE'	=> 'Tving reaktivering',
	'USER_ADMIN_MOVE_POSTS'	=> 'Flytt alle poster',
	'USER_ADMIN_SIG_REMOVED'	=> 'Brukerens signatur er fjernet.',
	'USER_ATTACHMENTS_REMOVED'	=> 'Brukeropplastede vedlegg er fjernet.',
	'USER_AVATAR_UPDATED'	=> 'Avatarinnstillingene er oppdatert.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Egendefinerte profilfelt',
	'USER_DELETED'	=> 'Brukerkontoen er slettet.',
	'USER_GROUP_ADD'	=> 'Legg til bruker i gruppe',
	'USER_GROUP_NORMAL'	=> 'Normal gruppebruker er medlem av',
	'USER_GROUP_PENDING'	=> 'Gruppemedlemmer som er i godkjennelsesmodus',
	'USER_GROUP_SPECIAL'	=> 'Spesialgrupper brukeren er medlem av',
	'USER_OVERVIEW_UPDATED'	=> 'Brukerdetaljene er oppdatert.',
	'USER_POSTS_DELETED'	=> 'Brukerens innlegg er fjernet.',
	'USER_POSTS_MOVED'	=> 'Innleggene er flyttet.',
	'USER_PREFS_UPDATED'	=> 'Brukerinnstillingene er oppdatert.',
	'USER_PROFILE'	=> 'Brukerprofil',
	'USER_PROFILE_UPDATED'	=> 'Profilen er oppdatert.',
	'USER_RANK'	=> 'Brukerrangering',
	'USER_RANK_UPDATED'	=> 'Rangeringen er oppdatert.',
	'USER_SIG_UPDATED'	=> 'Brukersignaturen er oppdatert.',
	'USER_TOOLS'	=> 'Grunnleggende verktøy',
));

?>