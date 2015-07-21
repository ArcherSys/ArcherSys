<?php
/** 
*
* acp_permissions.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-08-28 - phpBB.no
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
	'RESULTING_PERMISSION'	=> 'Resulting permission',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'This group’s permission for this forum is set to <samp>NEVER</samp> like the total result so the old result is kept.',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'This group’s permission for this forum is set to <samp>NEVER</samp> which becomes the new total value because it wasn’t set yet (set to <samp>NO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'This group’s permission for this forum is set to <samp>NEVER</samp> which overwrites the total <samp>YES</samp> to a <samp>NEVER</samp> for this user.',
	'TRACE_GROUP_NO_LOCAL'	=> 'The permission is <samp>NO</samp> for this group within this forum so the old total value is kept.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'This group’s permission for this forum is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'This group’s permission for this forum is set to <samp>YES</samp> which becomes the new total value because it wasn’t set yet (set to <samp>NO</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'This group’s permission for this forum is set to <samp>YES</samp> and the total permission is already set to <samp>YES</samp>, so the total result is kept.',
	'TRACE_RESULT'	=> 'Trace result',
	'TRACE_USER_KEPT_LOCAL'	=> 'The user’s permission for this forum is <samp>NO</samp> so the old total value is kept.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'The user’s permission for this forum is set to <samp>NEVER</samp> and the total value is set to <samp>NEVER</samp>, so nothing is changed.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'	=> 'The user’s permission for this forum is set to <samp>NEVER</samp> which becomes the total value because it was set to NO.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'	=> 'The user’s permission for this forum is set to <samp>NEVER</samp> and overwrites the previous <samp>YES</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'	=> 'The user’s permission for this forum is <samp>NO</samp> and the total value was set to NO so it defaults to <samp>NEVER</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'	=> 'The user’s permission for this forum is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'	=> 'The user’s permission for this forum is set to <samp>YES</samp> which becomes the total value because it was set to <samp>NO</samp>.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'	=> 'The user’s permission for this forum is set to <samp>YES</samp> and the total value is set to <samp>YES</samp>, so nothing is changed.',
	'ACP_PERMISSIONS_EXPLAIN'	=> '		<p>Rettighetssystemet er meget fleksibelt, og innstillingene er gruppert i fire seksjoner:</p>

		<h2>Globale rettigheter</h2>
		<p>Disse rettighetsinnstillingene brukes for å kontrollere brukerenes tilgang på et globalt nivå, og gjelder dermed for hele forumet. Disse er delt inn i følgende grupper: "Brukerrettigheter, Grupperettigheter, Administratorer og Globale moderatorer..</p>

		<h2>Forumbaserte rettigheter</h2>
		<p>Disse rettighetsinnstillingene brukes for å kontrollere tilgangen til de ulike forumene og underforumene. Disse er delt inn i følgende grupper: Forumrettigheter, Forummoderatorer, Brukeres forumrettigheter og Gruppers forumrettigheter..</p>

		<h2>Rettighetsroller</h2>
		<p>Her kan du lage ulike roller. Rollene inneholder et sett med rettigheter som senere kan tildeles brukere eller grupper. (en analogi til det virkelige liv er "Statsminister" som er et sett med regler for hva en person som har denne rollen kan gjøre. Først når en person tildeles denne rollen får han/hun disse rettighetene. Når rolle-spesifikasjonen endres, så vil også personen(e) som innehar rollen automatisk få disse økte/minkede rettighetene. Roller i phpBB fungerer på akkurat samme måte). Det følger med en rekke standardroller som burde dekke de fleste forumers behov. Disse kan du endre/slette, og du kan også legge til flere roller ettersom det blir behov for det.</p>

		<h2>Effektive rettigheter</h2>
		<p>Siden en person/gruppes rettigheter bestemmes av en rekke ulike faktorer, kan du bruke denne seksjonen til å se på en person/gruppes effektive rettigheter (f.eks kan en person være med i uendelig mange grupper, og dermed blir rettighetsstrukturen komplisert). Du vil altså kunne se resultatet av innstillingene dine, slik at du er sikker på at ønsket effekt er oppnådd. Effektive rettigheter kan sees på brukernivå, moderatornivå (lokale og globale), administratornivå og forumnivå. Du kan også spore rettighetene herfra, slik at du kan se akkurat hvilke innstillinger som fører til at hver enkelt rettighet settes til det den blir satt til.</p>
	
		<br />

		<p>For mer informasjon om hvordan du setter rettigheter i phpBB3, se <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Kapittel 1.5 i hurtigstartguiden</a> (engelsk) eller spør om hjelp på <a href="http://phpbb.no">phpbb.no</a>.</p>',
	'ACL_NEVER'	=> 'Aldri',
	'ACL_SET'	=> 'Tildeling av rettigheter',
	'ACL_SET_EXPLAIN'	=> 'Rettigheter er basert på et enkelt <samp>JA</samp>/<samp>NEI</samp>-system. Hvis du setter innstillingen til <samp>ALDRI</samp> for en bruker eller brukergruppe vil dette overstyre enhver annen verdi som er satt (selv om rettigheten er satt til <samp>JA</samp> i en annen sammenheng vil den altså bli <samp>NEI</samp> totalt). Hvis du ikke vil gi en rettighet til en bruker/gruppe velger du <samp>NEI</samp>. Hvis brukeren/gruppen får tilegnet rettigheten (<samp>JA</samp>) andre steder vil de da overstyre dette og gi brukeren/gruppen rettigheten, hvis ikke vil ikke brukeren/gruppen få rettigheten. (i de aller fleste tilfeller brukes altså kun <samp>JA</samp> og <samp>NEI</samp>, <samp>ALDRI</samp> brukes sjelden). Alle objekter du merker (med avkryssningsboksen) vil få samme rettighet som for det objektet du definerte rettigheter for.',
	'ACL_SETTING'	=> 'Innstilling',
	'ACL_TYPE_A_'	=> 'Administrative rettigheter',
	'ACL_TYPE_F_'	=> 'Forumrettigheter',
	'ACL_TYPE_M_'	=> 'Moderatorrettigheter',
	'ACL_TYPE_U_'	=> 'Brukerrettigheter',
	'ACL_TYPE_GLOBAL_A_'	=> 'Administrative rettigheter',
	'ACL_TYPE_GLOBAL_U_'	=> 'Brukerrettigheter',
	'ACL_TYPE_GLOBAL_M_'	=> 'Globale moderatorrettigheter',
	'ACL_TYPE_LOCAL_M_'	=> 'Forummoderatorrettigheter',
	'ACL_TYPE_LOCAL_F_'	=> 'Forumrettigheter',
	'ACL_NO'	=> 'Nei',
	'ACL_VIEW'	=> 'Faktiske rettigheter',
	'ACL_VIEW_EXPLAIN'	=> 'Her kan du se de faktiske rettighetene en bruker/gruppe har. En rød firkant indikerer at brukeren/gruppen ikke har rettigheten, en grønn firkant indikerer at de har den.',
	'ACL_YES'	=> 'Ja',
	'ACP_ADMINISTRATORS_EXPLAIN'	=> 'Her kan du tildele administrative rettigheter til brukere og grupper. Alle brukere med administrative rettigheter kan se administrasjonspanelet (men kun de seksjonene de har tilgang til).',
	'ACP_FORUM_MODERATORS_EXPLAIN'	=> 'Her kan du sette brukere eller grupper som forummoderatorer. Hvis du skal definere brukerens vanlige tilgang til forumet, opprette globale moderatorer eller administratorer, gjøres dette et annet sted.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'	=> 'Her kan du definere hvilke brukere og grupper som skal ha aksess til hvilke forumer. Hvis du skal tildele moderatorrettigheter eller administratorrettighter, gjøres dette et annet sted.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'	=> 'Her kan du tildele globale moderatorrettigheter til brukere eller grupper. Globale moderatorrettigheter fungerer på akkurat samme måte som for vanlige moderatorer, med unntak av at rettighetene blir gjeldende for alle forumene.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'	=> 'Her kan du tildele forumrettigheter til grupper.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'	=> 'Her kan du tildele globale rettigheter til grupper - dvs. gruppemedlemmenes brukerrettigheter, globale moderatorrettigheter og administrative rettigheter. Brukerrettighetene inkluderer retten til å bruke avatarer, sende private meldinger osv. Globale moderatorrettigheter inkluderer rettighetr som rett til å godkjenne innlegg, behandle emner, utestenge brukere osv. Administratorrettigheter inkluderer rettigheter som muligheten til å opprette egendefinerte BBKoder, endre forumoppsettet, tilegne rettigheter osv. <br /><strong>Viktig:</strong> Enkeltbrukeres rettigheter bør kun forandres i spesielle tilfeller, den foretrukne fremgangsmåten er å legge brukere i en gruppe og deretter endre på gruppens rettigheter (altså seksjonen du er inne på nå).',
	'ACP_ADMIN_ROLES_EXPLAIN'	=> 'Her kan du behandle rollene for administrative rettigheter. Roller er effektive rettigheter, hvilket betyr at om du endrer på en rolle så vil rettighetene til alle elementer som er tildelt denne rollen også forandres.',
	'ACP_FORUM_ROLES_EXPLAIN'	=> 'Her kan du behandle rollene for administratorrettigheter. Roller er effektive rettigheter, hvilket betyr at om du endrer på en rolle så vil rettighetene til alle elementer som er tildelt denne rollen også forandres.',
	'ACP_MOD_ROLES_EXPLAIN'	=> 'Her kan du behandle rollene for moderatorrettigheter. Roller er effektive rettigheter, hvilket betyr at om du endrer på en rolle så vil rettighetene til alle elementer som er tildelt denne rollen også forandres.',
	'ACP_USER_ROLES_EXPLAIN'	=> 'Her kan du behandle rollene for brukerrettigheter. Roller er effektive rettigheter, hvilket betyr at om du endrer på en rolle så vil rettighetene til alle elementer som er tildelt denne rollen også forandres.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'	=> 'Her kan du tilegne forumrettigheter til brukere.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'	=> 'Her kan du tildele globale rettigheter til enkeltbrukere - dvs. brukerrettigheter, globale moderatorrettigheter og administrative rettigheter. Brukerrettighetene inkluderer retten til å bruke avatarer, sende private meldinger osv. Globale moderatorrettigheter inkluderer rettighetr som rett til å godkjenne innlegg, behandle emner, utestenge brukere osv. Administratorrettigheter inkluderer rettigheter som muligheten til å opprette egendefinerte BBKoder, endre forumoppsettet, tilegne rettigheter osv. <strong>Viktig:</strong> Rettighetene til enkelte brukere bør kun forandres i spesielle tilfeller, den foretrukne fremgangsmåten er å legge brukere i en gruppe og deretter endre på gruppens rettigheter (gjøres i seksjonen under; "Grupperettigheter").',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'	=> 'Her kan du se de faktiske administrative rettighetene de valgte brukerene/gruppene har.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Her kan du se de faktiske globale moderatorrettighetene de valgte brukerene/gruppene har.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'	=> 'Her kan du se de faktiske forumrettighetene de valgte brukerene/gruppene har for de valgte forumene.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Her kan du se de faktiske forummoderatorrettighetene de valgte brukerene/gruppene har i valgte forumene.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'	=> 'Her kan du se de faktiske brukerrettighetene de valgte brukerene/gruppene har.',
	'ADD_GROUPS'	=> 'Legg til grupper',
	'ADD_PERMISSIONS'	=> 'Legg til rettigheter',
	'ADD_USERS'	=> 'Legg til brukere',
	'ADVANCED_PERMISSIONS'	=> 'Avanserte rettigheter',
	'ALL_GROUPS'	=> 'Velg alle gruppene',
	'ALL_NEVER'	=> 'Alle <samp>ALDRI</samp>',
	'ALL_NO'	=> 'Alle <samp>NEI</samp>',
	'ALL_USERS'	=> 'Velg alle brukere',
	'ALL_YES'	=> 'Alle <samp>JA</samp>',
	'APPLY_ALL_PERMISSIONS'	=> 'Lagre alle rettigheter',
	'APPLY_PERMISSIONS'	=> 'Lagre rettigheter',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Rettighetene og rollen som er definert for dette elementet vil kun bli satt for dette, samt alle elementer der avkrysningsboksen er krysset av.',
	'AUTH_UPDATED'	=> 'Rettighetene har blitt oppdaterte',
	'CREATE_ROLE'	=> 'Lag rolle',
	'CREATE_ROLE_FROM'	=> 'Bruk innstilllinger fra…',
	'CUSTOM'	=> 'Egendefinert…',
	'DEFAULT'	=> 'Standard',
	'DELETE_ROLE'	=> 'Slett rolle',
	'DELETE_ROLE_CONFIRM'	=> 'Er du sikker på at du vil slette denne rollen. Elementer som er tilegnet denne rollen vil <strong>ikke</strong> miste sine rettighetsinnstillinger',
	'DISPLAY_ROLE_ITEMS'	=> 'Se brukere og grupper som innehar denne rollen',
	'EDIT_PERMISSIONS'	=> 'Rediger rettigheter',
	'EDIT_ROLE'	=> 'Rediger rolle',
	'GROUPS_NOT_ASSIGNED'	=> 'Ingen grupper er tildelt denner rollen',
	'LOOK_UP_GROUP'	=> 'Velg brukergruppe',
	'LOOK_UP_USER'	=> 'Velg bruker',
	'MANAGE_GROUPS'	=> 'Behandle grupper',
	'MANAGE_USERS'	=> 'Behandle brukere',
	'NO_AUTH_SETTING_FOUND'	=> 'Rettighetsinnstillingene er ikke definert.',
	'NO_ROLE_ASSIGNED'	=> 'Ingen rolle tildelt…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Å velge denne rollen endrer ikke rettighetene til høyre. Hvis du vil fjerne alle rettigheter bør du heller bruke linken “Alle <samp>NEI</samp>”',
	'NO_ROLE_AVAILABLE'	=> 'Ingen rolle tilgjengelig',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Vennligst gi rollen et navn.',
	'NO_ROLE_SELECTED'	=> 'Rollen finnes ikke.',
	'NO_USER_GROUP_SELECTED'	=> 'Du har ikke valgt noen brukere eller grupper.',
	'ONLY_FORUM_DEFINED'	=> 'Du definerte kun forumer i ditt valg. Vennligst velg minst en bruker eller gruppe i tillegg.',
	'PERMISSION_APPLIED_TO_ALL'	=> 'Rettigheter og roller vil også bli satt for de avkryssede objektene',
	'PLUS_SUBFORUMS'	=> '+Underforumer',
	'REMOVE_PERMISSIONS'	=> 'Fjern rettigheter',
	'REMOVE_ROLE'	=> 'Fjern rolle',
	'ROLE'	=> 'Rolle',
	'ROLE_ADD_SUCCESS'	=> 'Rollen ble lagt til.',
	'ROLE_ASSIGNED_TO'	=> 'Følgende brukere og grupper er tildelt rollen: %s',
	'ROLE_DELETED'	=> 'Rollen ble fjernet.',
	'ROLE_DESCRIPTION'	=> 'Rollebeskrivelse',
	'ROLE_ADMIN_FORUM'	=> 'Forumadministrator',
	'ROLE_ADMIN_FULL'	=> 'Fullverdig administator',
	'ROLE_ADMIN_STANDARD'	=> 'Standard administrator',
	'ROLE_ADMIN_USERGROUP'	=> 'Bruker- og gruppeadministrator',
	'ROLE_FORUM_BOT'	=> 'Søkemotortilgang',
	'ROLE_FORUM_FULL'	=> 'Full tilgang',
	'ROLE_FORUM_LIMITED'	=> 'Begrenset tilgang',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Begrenset tilgang + avstemninger',
	'ROLE_FORUM_NOACCESS'	=> 'Ingen tilgang',
	'ROLE_FORUM_ONQUEUE'	=> 'Innlegg må godkjennes før de vises',
	'ROLE_FORUM_POLLS'	=> 'Standard tilgang + avstemninger',
	'ROLE_FORUM_READONLY'	=> 'Kun lesetilgang',
	'ROLE_FORUM_STANDARD'	=> 'Standard tilgang',
	'ROLE_MOD_FULL'	=> 'Fullverdig moderator',
	'ROLE_MOD_QUEUE'	=> 'Innleggskø-moderator',
	'ROLE_MOD_SIMPLE'	=> 'Enkel moderator',
	'ROLE_MOD_STANDARD'	=> 'Standard moderator',
	'ROLE_USER_FULL'	=> 'Full adgang',
	'ROLE_USER_LIMITED'	=> 'Begrenset adgang',
	'ROLE_USER_NOAVATAR'	=> 'Ingen avatar',
	'ROLE_USER_NOPM'	=> 'Ingen private meldinger',
	'ROLE_USER_STANDARD'	=> 'Standard adgang',
	'ROLE_DESCRIPTION_ADMIN_FORUM'	=> 'Kan håndtere forumstrukturer og forumrettigheter.',
	'ROLE_DESCRIPTION_ADMIN_FULL'	=> 'Har tilgang til alle administrative funksjoner.<br />Ikke anbefalt.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'	=> 'Har tilgang til de fleste administrative funksjoner, men kan ikke bruke server- eller systemrelaterte verktøy',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'	=> 'Kan håndtere grupper og brukere; Kan endre rettigheter, innstillinger, rangeringer og håndtere utestengelser',
	'ROLE_DESCRIPTION_FORUM_BOT'	=> 'Denne rollen er anbefalt for søkeroboter',
	'ROLE_DESCRIPTION_FORUM_FULL'	=> 'Kan bruke alle forumfunksjoner, inkludert posting av annonseringer og prioriterte emner. Kan også ignorere oversvømmelsesgrensen (som forhindrer brukere i å poste oftere enn hvert X sekund) <br /> Ikke anbefalt for vanlige brukere.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'	=> 'Kan bruke enkelte forumfunksjoner, men kan ikke legge ved filer eller bruke innleggsikoner',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Som "Begrenset adgang", men kan også lage avstemninger',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'	=> 'Kan hverken se eller lese i forumet.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'	=> 'Kan bruke de fleste av forumets funksjoner, inkludert vedlegg, men emner og innlegg må godkjennes av en moderator før de vises.',
	'ROLE_DESCRIPTION_FORUM_POLLS'	=> 'Som "Standard adgang", men kan også lage avstemninger.',
	'ROLE_DESCRIPTION_FORUM_READONLY'	=> 'Kan lese i forumet, men ikke opprette nye emner eller skrive innlegg.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'	=> 'Kan bruke de fleste forumfunksjoner inkludert vedlegg. Kan slette egne emner, men ikke stenge dem. Kan ikke lage avstemninger.',
	'ROLE_DESCRIPTION_MOD_FULL'	=> 'Kan bruke alle moderatorfunksjoner, inkludert utestenging av brukere.',
	'ROLE_DESCRIPTION_MOD_QUEUE'	=> 'Kan bruke køen over innlegg som må forhåndsgodkjennes til å godkjenne og endre innlegg, men ingenting annet.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'	=> 'Kan kun bruke elementere innleggshandlinger, slik som å endre/slette innlegg, samt stenge/slette rapporter. Kan ikke sende advarsler eller bruke innleggsgodkjennelseskøen.',
	'ROLE_DESCRIPTION_MOD_STANDARD'	=> 'Ban bruke de fleste moderatorfunksjoner, men kan ikke utestenge brukere eller endre innleggenes eier.',
	'ROLE_DESCRIPTION_USER_FULL'	=> 'Kan bruke alle tilgjengelige brukerfunksjoner, inkludert endring av brukernavn og muligheten til å ignorere oversvømmelsesgrensen (som forhindrer brukere i å poste oftere enn hvert X sekund) <br /> Ikke anbefalt.',
	'ROLE_DESCRIPTION_USER_LIMITED'	=> 'Kan bruke noen brukerfunksjoner. Vedlegg og sending av e-post/IM er ikke tillatt.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'	=> 'Kan bruke noen brukerfunksjoner, men kan ikke bruke Avatarfunksjonen.',
	'ROLE_DESCRIPTION_USER_NOPM'	=> 'Kan bruke noen brukerfunksjoner, men kan ikke sende og motta private meldinger.',
	'ROLE_DESCRIPTION_USER_STANDARD'	=> 'Kan bruke de aller fleste brukerfunksjoner. Kan f.eks ikke endre brukernavn eller gnorere oversvømmelsesgrensen (som forhindrer brukere i å poste oftere enn hvert X sekund)',
	'ROLE_DESCRIPTION_EXPLAIN'	=> 'Du kan skrive en kort forklaring på hva rollen tillater eller hvem den er ment for. Teksten du skriver inn vil vises på steder der du tilegner rollen.',
	'ROLE_DESCRIPTION_LONG'	=> 'Rollebeskrivelsen er for lang, vennligst ikke bruk mer enn 4000 tegn.',
	'ROLE_DETAILS'	=> 'Rolledetaljer',
	'ROLE_EDIT_SUCCESS'	=> 'Rollen ble endret.',
	'ROLE_NAME'	=> 'Rollenavn',
	'ROLE_NAME_ALREADY_EXIST'	=> 'En rolle kalt <strong>%s</strong> eksisterer allerede for den gjeldende rettighetstypen.',
	'ROLE_NOT_ASSIGNED'	=> 'Rollen har ikke blitt tilegnet noen enda.',
	'SELECTED_FORUM_NOT_EXIST'	=> 'Forumet/forumene du valgte eksisterer ikke.',
	'SELECTED_GROUP_NOT_EXIST'	=> 'Gruppen(e) du valgte eksisterer ikke.',
	'SELECTED_USER_NOT_EXIST'	=> 'Brukeren(e) du valgte eksisterer ikke.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Forumet du velger her vil inkludere alle underforumer i valget.',
	'SELECT_ROLE'	=> 'Velg rolle…',
	'SELECT_TYPE'	=> 'Velg type',
	'SET_PERMISSIONS'	=> 'Lagre rettigheter',
	'SET_ROLE_PERMISSIONS'	=> 'Lagre rollerettigheter',
	'SET_USERS_PERMISSIONS'	=> 'Lagre brukerrettigheter',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Lagre brukeres forumrettigheter',
	'TRACE_DEFAULT'	=> 'Som standard er alle rettigheter satt til <samp>NEI</samp> (kan tolkes som "ikke bestemt"). På denne måten kan rettigheten bli overskrevet av en <samp>JA</samp>.',
	'TRACE_FOR'	=> 'Rettighetssporing for',
	'TRACE_GLOBAL_SETTING'	=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Denne gruppens rettighet er satt til <samp>ALDRI</samp> som er det samme som det foreløpige resultatet, så det foreløpige resultatet er beholdt.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Denne gruppens rettighet er satt til <samp>ALDRI</samp> som dermed blir den nye totalverdien fordi den ikke var satt enda (var satt til <samp>NEI</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Denne gruppens rettighet er satt til <samp>ALDRI</samp>. Dermed endres den tidligere totalverdien fra <samp>JA</samp> til <samp>ALDRI</samp> for denne brukeren.',
	'TRACE_GROUP_NO'	=> 'Denne gruppens rettighet er satt til <samp>NEI</samp>, så den gamle totalverdien blir beholdt',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Denne gruppens rettighet er satt til <samp>JA</samp>, men siden den tidligere <samp>ALDRI</samp> ikke kan overskrives, beholdes denne.',
	'TRACE_GROUP_YES_TOTAL_NO'	=> 'Denne gruppens rettighet er satt til <samp>JA</samp>. Dermed endres den tidligere totalverdien til <samp>JA</samp> siden den ikke var satt enda (var satt til <samp>NEI</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'	=> 'Denne gruppens rettighet er satt til <samp>JA</samp>, og den tidligere totalverdien er også <samp>JA</samp>, så totalverdien blir beholdt.',
	'TRACE_PERMISSION'	=> 'Rettighetssporing - %s',
	'TRACE_SETTING'	=> 'Innstillingssporing',
	'TRACE_USER_GLOBAL_YES_TOTAL_YES'	=> 'Den forumuavhengige brukerrettigheten er satt til <samp>JA</samp>, men den totale rettigheten eller allerede satt til <samp>JA</samp>, så totalresultatet blir beholdt. %sSpor globale rettigheter%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'	=> 'Den forumuavhengige brukerrettigheten er satt til <samp>JA</samp>, og overskriver dermed det loke resultatet <samp>ALDRI</samp>. %sSpor globale rettigheter%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Den forumuavhengige brukerrettigheten er satt til <samp>ALDRI</samp>, men dette påvirker ikke lokale rettigheter. %sSpor globale rettigheter%s',
	'TRACE_USER_FOUNDER'	=> 'Brukeren er satt som forumgrunnlegger, derfor er alle administratorrettigheter satt til <samp>JA</samp>.',
	'TRACE_USER_KEPT'	=> 'Brukerrettigheten er satt til <samp>NEI</samp>, så totalresultatet blir beholdt.',
	'TRACE_USER_NEVER_TOTAL_NEVER'	=> 'Brukerrettigheten er satt til <samp>ALDRI</samp>, og totalresultatet er fra før <samp>NEVER</samp>, så ingenting forandres.',
	'TRACE_USER_NEVER_TOTAL_NO'	=> 'Brukerrettigheten er satt til <samp>ALDRI</samp> og overskriver dermed det tidligere totalresultatet fordi det var satt til <samp>NEI</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES'	=> 'Brukerrettigheten er satt til <samp>ALDRI</samp> og overskriver dermed det tidligere totalresultatet fordi det var satt til <samp>YES</samp>.',
	'TRACE_USER_NO_TOTAL_NO'	=> 'Brukerrettigheten er satt til <samp>NEI</samp> og totalresultatet var fra før <samp>NEI</samp>, så totalen blir dermed <samp>ALDRI</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'	=> 'Brukerrettigheten er satt til <samp>JA</samp>, men den tidligere totalen <samp>ALDRI</samp> kan ikke overskrives.',
	'TRACE_USER_YES_TOTAL_NO'	=> 'Brukerrettigheten er satt til <samp>JA</samp> og dette blir det nye totalresultatet fordi det tidligere var <samp>NEI</samp>.',
	'TRACE_USER_YES_TOTAL_YES'	=> 'Brukerrettigheten er satt til <samp>JA</samp>, og totalresultatet er fra før <samp>JA</samp>, så ingenting forandres.',
	'TRACE_WHO'	=> 'Hvem',
	'TRACE_TOTAL'	=> 'Total',
	'USERS_NOT_ASSIGNED'	=> 'Ingen brukere er tildelt denne rollen',
	'USER_IS_MEMBER_OF_DEFAULT'	=> 'er medlem av følgende predefinerte grupper',
	'USER_IS_MEMBER_OF_CUSTOM'	=> 'er medlem av følgende grupper',
	'VIEW_ASSIGNED_ITEMS'	=> 'Se tilegnede elementer',
	'VIEW_LOCAL_PERMS'	=> 'Lokale rettigheter',
	'VIEW_GLOBAL_PERMS'	=> 'Globale rettigheter',
	'VIEW_PERMISSIONS'	=> 'Se på rettigheter',
	'WRONG_PERMISSION_TYPE'	=> 'Feil rettighetstype valgt.',
));

?>