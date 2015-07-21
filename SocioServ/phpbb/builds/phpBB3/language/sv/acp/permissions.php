<?php
/** 
*
* acp_permissions [Swedish] (version 0.5.0 - 3.0.RC5)
*
* @package language
* @version $Id: permissions.php,v 1.12 2007/08/25 14:15:13 virtuality Exp $
* @copyright (c) 2005 phpBB Group 
* @author (c) 2006-2007 Jonathan Gulbrandsen (jonathan@carlssonplanet.com)
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Rättigheter går att ställa in mycket detaljerat och delas in i fyra större grupper, dessa är:</p>

		<h2>Globala rättigheter</h2>
		<p>Dessa används för att kontrollera åtkomst på en global nivå och tillämpas på hela forumet. De är vidare indelade i användarrättigheter, grupprättigheter, administratörer och globala moderatorer.</p>

		<h2>Kategoribaserade rättigheter</h2>
		<p>Dessa används för att kontrollera åtkomst per kategori. De är vidare indelade i kategorirättigheter, kategorimoderatorer, användares kategorirättigheter och gruppers kategorirättigheter.</p>

		<h2>Rättighetsroller</h2>
		<p>Dessa används för att skapa olika uppsättningar med rättigheter för de olika rättighetstyperna som senare kan tilldelas på en roll-baserad basis. Standardrollerna bör täcka administrationen för forum både stora och små, men inom varje av de fyra grupperna går det att lägga till/redigera/ta bort roller.</p>

		<h2>Rättighetsgranskning</h2>
		<p>Dessa används för att visa de gällande rättigheterna tilldelade användare, moderatorer (lokala och globala), administratörer och kategorier.</p>
	
		<br />

		<p>För mer information om hur man ställer in och hanterar rättigheter på ditt phpBB3-forum, se <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">kapitel 1.5 i vår Snabbstartsguide</a>.</p>
	',

	'ACL_NEVER'				=> 'Aldrig',
	'ACL_SET'				=> 'Ställer in rättigheter',
	'ACL_SET_EXPLAIN'		=> 'Rättigheter är baserade på ett enkelt <samp>JA</samp>/<samp>NEJ</samp>-system. Om du sätter ett alternativ till <samp>ALDRIG</samp> för en användare eller användargrupp så åsidosätter det alla andra värden som tilldelats. Om du inte vill tilldela ett värde för ett alternativ för denna användare eller grupp välj <samp>NEJ</samp>. Om värden är tilldelade för detta alternativ någon annan stans så kommer de att användas istället, annars kommer <samp>ALDRIG</samp> att antas. Alla markerade objekt (med kryssrutan framför de) kommer att kopiera den rättighetsuppsättning du definierat.',
	'ACL_SETTING'			=> 'Inställning',

	'ACL_TYPE_A_'			=> 'Administrativa rättigheter',
	'ACL_TYPE_F_'			=> 'Kategorirättigheter',
	'ACL_TYPE_M_'			=> 'Moderationsrättigheter',
	'ACL_TYPE_U_'			=> 'Användarrättigheter',

	'ACL_TYPE_GLOBAL_A_'	=> 'Administrativa rättigheter',
	'ACL_TYPE_GLOBAL_U_'	=> 'Användarrättigheter',
	'ACL_TYPE_GLOBAL_M_'	=> 'Global moderationsrättigheter',
	'ACL_TYPE_LOCAL_M_'		=> 'Kategorimoderationsrättigheter',
	'ACL_TYPE_LOCAL_F_'		=> 'Kategorirättigheter',
	
	'ACL_NO'				=> 'Nej',
	'ACL_VIEW'				=> 'Visar rättigheter',
	'ACL_VIEW_EXPLAIN'		=> 'Här kan du se de verksamma rättigheterna som användaren/gruppen har. En röd ruta indikerar att användaren/gruppen inte har den rättigheten, en grön ruta indikerar att användaren/gruppen har den rättigheten.',
	'ACL_YES'				=> 'Ja',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Här kan du tilldela administrativa rättigheter till användare eller grupper. Alla användare med administrativa rättigheter kan visa administrationspanelen.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Här kan du göra användare eller grupper till kategorimoderatorer. För att tilldela användare åtkomst till kategorier, för att definiera globala moderationsrättigheter eller administratörer använd lämplig sida.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Här kan du ändra vilka användare och grupper som kan komma åt vilka kategorier. För att tilldela moderatorer eller definiera administratörer använd lämplig sida.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Här kan du tilldela globala moderationsrättigheter till användare eller grupper. Dessa moderatorer är som vanliga moderatorer förutom att de har tillgång till alla kategorier på ditt forum.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Här kan du tilldela kategorirättigheter till grupper.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Här kan du tilldela globala rättigheter till grupper - användarrättigheter, globala moderationsrättigheter och administrativa rättigheter. Användarrättigheter inkluderar funktioner så som visningsbilder, personliga meddelanden, osv.; globala moderationsrättigheter så som godkännande av inlägg, trådhantering, bannlysningar, osv. och till slut administrativa rättigheter så som ändring av rättigheter, egna BBCodes, kategorihantering, osv. Individuella användarrättigheter bör endast ändras vid sällsynta tillfällen, den föredragna metoden är att placera användare i grupper och sedan tilldela grupprättigheter.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Här kan du hantera rollerna för administrativa rättigheter. Roller är verksamma rättigheter, om du ändrar en roll så ändras de poster som har rollen tilldelad sig också.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Här kan du hantera rollerna för kategorirättigheter. Roller är verksamma rättigheter, om du ändrar en roll så ändras de poster som har rollen tilldelad sig också.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Här kan du hantera rollerna för moderationsrättigheter. Roller är verksamma rättigheter, om du ändrar en roll så ändras de poster som har rollen tilldelad sig också.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Här kan du hantera rollerna för användarrättigheter. Roller är verksamma rättigheter, om du ändrar en roll så ändras de poster som har rollen tilldelad sig också.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Här kan du tilldela kategorirättigheter för användare.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Här kan du tilldela globala rättigheter till användare - användarrättigheter, globala moderationsrättigheter och administrativa rättigheter. Användarrättigheter inkluderar funktioner så som visningsbilder, personliga meddelanden, osv.; globala moderationsrättigheter inkluderar funktioner så som godkännande av inlägg, trådhantering, bannlysningar, osv. och slutligen administrativa rättigheter inkluderar funktioner så som ändring av rättigheter, egna BBCodes, kategorihantering, osv. För att ändra dessa inställningar för ett stort antal användare eller användare så är grupprättighetssystemet att föredra. Användares rättigheter bör endast ändras vid sällsynta tillfällen, den föredragna metoden är att sätta användare i grupper och sen tilldela grupprättigheter.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Här kan du visa de verksamma administrativa rättigheterna tilldelade till de valda användarna/grupperna.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Här kan du visa de verksamma globala moderationsrättigheterna tilldelade till de valda användarna/grupperna.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Här kan du visa de verksamma kategorirättigheterna tilldelade de valda användarna/grupperna och kategorierna.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Här kan du visa de verksamma kategorimoderationsrättigheterna tilldelade till de valda användarna/grupperna och kategorierna.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Här kan du visa de verksamma användarrättigheterna tilldelade till de valda användarna/grupperna.',

	'ADD_GROUPS'				=> 'Lägg till grupper',
	'ADD_PERMISSIONS'			=> 'Lägg till rättigheter',
	'ADD_USERS'					=> 'Lägg till användare',
	'ADVANCED_PERMISSIONS'		=> 'Avancerade rättigheter',
	'ALL_GROUPS'				=> 'Välj alla grupper',
	'ALL_NEVER'					=> 'Alla <samp>ALDRIG</samp>',
	'ALL_NO'					=> 'Alla <samp>NEJ</samp>',
	'ALL_USERS'					=> 'Välj alla användare',
	'ALL_YES'					=> 'Alla <samp>JA</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Tillämpa alla rättigheter',
	'APPLY_PERMISSIONS'			=> 'Tillämpa rättigheter',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Rättigheterna och rollen definierad för denna post kommer endast tilldelas till denna post och alla ikryssade poster.',
	'AUTH_UPDATED'				=> 'Rättigheterna uppdaterades.',

	'CREATE_ROLE'				=> 'Skapa roll',
	'CREATE_ROLE_FROM'			=> 'Använd inställningar från…',
	'CUSTOM'					=> 'Eget…',

	'DEFAULT'					=> 'Standard',
	'DELETE_ROLE'				=> 'Ta bort roll',
	'DELETE_ROLE_CONFIRM'		=> 'Är du säker på att du vill ta bort denna roll? Poster som har denna roll tilldelad till sig kommer <strong>inte</strong> att tappa sina rättighetsinställningar.',
	'DISPLAY_ROLE_ITEMS'		=> 'Visa poster som använder denna roll',

	'EDIT_PERMISSIONS'			=> 'Redigera rättigheter',
	'EDIT_ROLE'					=> 'Redigera roll',

	'GROUPS_NOT_ASSIGNED'		=> 'Ingen grupp tilldelad denna roll',

	'LOOK_UP_GROUP'				=> 'Kolla upp användargrupp',
	'LOOK_UP_USER'				=> 'Kolla upp användare',

	'MANAGE_GROUPS'		=> 'Hantera grupper',
	'MANAGE_USERS'		=> 'Hantera användare',

	'NO_AUTH_SETTING_FOUND'		=> 'Rättighetsinställningar inte definierade.',
	'NO_ROLE_ASSIGNED'			=> 'Ingen roll tilldelad…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Tilldelning av denna roll kommer inte att ändra rättigheterna till höger. Om du vill nollställa eller ta bort alla rättigheter bör du använda “Alla <samp>NEJ</samp>”-länken.',
	'NO_ROLE_AVAILABLE'			=> 'Ingen roll tillgänglig',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Ge rollen ett namn.',
	'NO_ROLE_SELECTED'			=> 'Rollen kunde inte hittas.',
	'NO_USER_GROUP_SELECTED'	=> 'Du valde ingen användare eller grupp.',

	'ONLY_FORUM_DEFINED'	=> 'Du definierade endast kategorier i ditt val. Välj också minst en användare eller grupp.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Rättigheter och roll kommer också tilldelas till alla ikryssade objekt',
	'PLUS_SUBFORUMS'				=> '+Underkategorier',

	'REMOVE_PERMISSIONS'			=> 'Ta bort rättigheter',
	'REMOVE_ROLE'					=> 'Ta bort roll',
	'RESULTING_PERMISSION'			=> 'Resulterande rättighet',
	'ROLE'							=> 'Roll',
	'ROLE_ADD_SUCCESS'				=> 'Roll lades till.',
	'ROLE_ASSIGNED_TO'				=> 'Användare/grupper tilldelade %s',
	'ROLE_DELETED'					=> 'Roll togs bort.',
	'ROLE_DESCRIPTION'				=> 'Rollbeskrivning',

	'ROLE_ADMIN_FORUM'			=> 'Kategoriadministratör',
	'ROLE_ADMIN_FULL'			=> 'Fullständig administratör',
	'ROLE_ADMIN_STANDARD'		=> 'Standardadministratör',
	'ROLE_ADMIN_USERGROUP'		=> 'Användare- och gruppadministratör',
	'ROLE_FORUM_BOT'			=> 'Robotåtkomst',
	'ROLE_FORUM_FULL'			=> 'Fullständig åtkomst',
	'ROLE_FORUM_LIMITED'		=> 'Begränsad åtkomst',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Begränsad åtkomst + omröstningar',
	'ROLE_FORUM_NOACCESS'		=> 'Ingen åtkomst',
	'ROLE_FORUM_ONQUEUE'		=> 'Inlägg modereras',
	'ROLE_FORUM_POLLS'			=> 'Standardåtkomst + omröstningar',
	'ROLE_FORUM_READONLY'		=> 'Endast läsåtkomst',
	'ROLE_FORUM_STANDARD'		=> 'Standardåtkomst',
	'ROLE_MOD_FULL'				=> 'Fullständig moderator',
	'ROLE_MOD_QUEUE'			=> 'Kömoderator',
	'ROLE_MOD_SIMPLE'			=> 'Enkel moderator',
	'ROLE_MOD_STANDARD'			=> 'Standardmoderator',
	'ROLE_USER_FULL'			=> 'Alla funktioner',
	'ROLE_USER_LIMITED'			=> 'Begränsade funktioner',
	'ROLE_USER_NOAVATAR'		=> 'Ingen visningsbild',
	'ROLE_USER_NOPM'			=> 'Inga personliga meddelanden',
	'ROLE_USER_STANDARD'		=> 'Standardfunktioner',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Har tillgång till kategorihantering och kategorirättighetsinställningar.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Har tillgång till alla administrativa funktioner på detta forum.<br />Rekommenderas inte.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Har tillgång till de flesta administrativa funktioner men kan inte använda server- eller systemrelaterade verktyg.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Kan hantera grupper och användare: Kan ändra rättigheter, inställningar, hantera bannlysningar och hantera titlar.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Denna roll rekommenderas för robotar och sökspindlar.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Kan använda alla kategorifunktioner, inklusive anslag och notiser. Kan också ignorera gräns för tid mellan inlägg.<br />Rekommenderas inte för normala användare.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Kan använda några kategorifunktioner, men kan inte bifoga filer eller använda inläggsikoner.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Som begränsad åtkomst men kan också skapa omröstningar.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Kan varken se eller komma åt kategorin.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Kan använda de flesta kategorifunktioner inklusive bilagor, men inlägg och trådar måste godkännas av en moderator.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Som standardåtkomst men kan också skapa omröstningar.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Kan läsa i kategorin, men kan inte skapa nya trådar eller svara på inlägg.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Kan använda de flesta kategorifunktioner inklusive bilagor och borttagning av egna trådar, men kan inte låsa egna trådar och kan inte skapa omröstningar.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Kan använda alla moderationsfunktioner, inklusive bannlysning.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Kan använda moderatörkön för att kontrollera och redigera inlägg, men ingenting annat.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Kan endast använda grundläggande trådhandlingar. Kan inte utfärda varningar eller använda moderatorkön.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Kan använda de flesta moderationsverktyg, men kan inte bannlysa användare eller ändra inläggsförfattare.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Kan använda alla tillgängliga kategorifunktioner för användare, inklusive byte av användarnamn och ignorering av gräns för tid mellan inlägg.<br />Rekommenderas inte.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Kan komma åt vissa användarfunktioner. Bilagor, e-post och snabbmeddelanden är inte tillåtna.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Har en begränsad uppsättning funktioner och kan inte använda visningsbilder.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Har en begränsad uppsättning funktioner, och kan inte använda personliga meddelanden.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Kan komma åt de flesta men inte alla användarfunktioner. Kan inte byta användarnamn eller ignorera gräns för tid mellan inlägg, till exempel.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Du kan skriva in en kort förklaring till vad rollen gör eller vad den är till för. Texten du skriver in här kommer också att visas på rättighetssidorna.',
	'ROLE_DESCRIPTION_LONG'			=> 'Rollbeskrivningen är för lång, den får inte vara länge än 4000 tecken.',
	'ROLE_DETAILS'					=> 'Rolldetaljer',
	'ROLE_EDIT_SUCCESS'				=> 'Rollen ändrades.',
	'ROLE_NAME'						=> 'Rollnamn',
	'ROLE_NAME_ALREADY_EXIST'		=> 'En roll med namnet <strong>%s</strong> finns redan för den angivna rättighetstypen.',
	'ROLE_NOT_ASSIGNED'				=> 'Rollen har inte tilldelats några poster än.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Den/de valda kategorin/kategorierna finns inte.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Den/de valda gruppen/grupperna finns inte.',
	'SELECTED_USER_NOT_EXIST'		=> 'Den/de valda användaren/användarna finns inte.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Kategorin du väljer här kommer att inkludera alla underkategorier i valet.',
	'SELECT_ROLE'					=> 'Välj roll…',
	'SELECT_TYPE'					=> 'Välj typ',
	'SET_PERMISSIONS'				=> 'Ställ in rättigheter',
	'SET_ROLE_PERMISSIONS'			=> 'Ställ in rollrättigheter',
	'SET_USERS_PERMISSIONS'			=> 'Ställ in användarrättigheter',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Ställ in användares kategorirättigheter',

	'TRACE_DEFAULT'					=> 'Som standard är alla rättigheter satta till <samp>NEJ</samp> (ej inställda). Så rättigheten kan åsidosättas av andra inställningar.',
	'TRACE_FOR'						=> 'Spårning för',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Denna grupps rättighet är satt till <samp>ALDRIG</samp> liksom det totala resultatet så det gamla resultatet behålls.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Denna grupps rättighet för denna kategori är satt till <samp>ALDRIG</samp> liksom det totala resultatet så det gamla resultatet behålls.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Denna grupps rättighet är satt till <samp>ALDRIG</samp> vilket blir det nya totala värdet eftersom det inte var inställt än (satt till <samp>NEJ</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Denna grupps rättighet för denna kategori är satt till <samp>ALDRIG</samp> vilket blir det nya totala värdet eftersom det inte ställts in än (satt till <samp>NEJ</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Denna grupps rättighet är satt till <samp>ALDRIG</samp> vilket åsidosätter det totala <samp>JA</samp> till <samp>ALDRIG</samp> för denna användare.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Denna grupps rättighet för denna kategori är satt till <samp>ALDRIG</samp> vilket åsidosätter det totala <samp>JA</samp> till ett <samp>NEJ</samp> för denna användare.',
	'TRACE_GROUP_NO'				=> 'Rättigheten är <samp>NEJ</samp> för denna grupp så det gamla värdet behålls.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Rättigheten är <samp>NEJ</samp> för denna grupp i denna kategori så det gamla värdet behålls.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Denna grupps rättighet är satt till <samp>JA</samp> men det totala <samp>ALDRIG</samp> kan inte åsidosättas.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Denna grupps rättighet för denna kategori är satt till <samp>JA</samp> men det totala <samp>ALDRIG</samp> kan inte åsidosättas.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Denna grupps rättighet är satt till <samp>JA</samp> vilket blir det nya totala värdet eftersom det inte var inställt än (satt till <samp>NEJ</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Denna grupps rättighet för denna kategori är satt till <samp>JA</samp> vilket blir det nya totala värdet eftersom det inte var inställt än (satt till <samp>NEJ</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Denna grupps rättighet är satt till <samp>JA</samp> och den totala rättigheten är redan satt till <samp>JA</samp>, så det totala resultatet behålls.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Denna grupps rättighet för denna kategori är satt till <samp>JA</samp> och den totala rättigheten är redan satt till <samp>JA</samp>, så det totala resultatet behålls.',
	'TRACE_PERMISSION'				=> 'Spåra rättighet - %s',
	'TRACE_RESULT'					=> 'Spåra resultat',
	'TRACE_SETTING'					=> 'Spåra inställning',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Den kategorioberoende användarrättigheten utvärderas till <samp>JA</samp> men den totala rättigheten är redan satt till <samp>JA</samp>, så det totala resultatet behålls. %sSpåra globala rättigheter%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Den kategorioberoende användarrättigheten utvärderas till <samp>JA</samp> vilket åsidosätter det nuvarande lokala resultatet <samp>ALDRIG</samp>. %sSpåra globala rättigheter%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Den kategorioberoende användarrättigheten utvärderas till <samp>ALDRIG</samp> vilket inte påverkar den lokala rättigheten. %sSpåra globala rättigheter%s',

	'TRACE_USER_FOUNDER'					=> 'Användaren är en grundare, därför är alla administrationsrättigheter satta till <samp>JA</samp> som standard.',
	'TRACE_USER_KEPT'						=> 'Användarrättigheten är <samp>NEJ</samp> så det gamla totala värdet behålls.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Användarrättigheten för denna kategori är <samp>NEJ</samp> så det gamla totala värdet behålls.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Användarrättigheten är satt till <samp>ALDRIG</samp> och det totala värdet är satt till <samp>ALDRIG</samp>, så ingenting ändras.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Användarrättigheten för denna kategori är satt till <samp>ALDRIG</samp> och det totala värdet är satt till <samp>ALDRIG</samp>, så ingenting ändras.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Användarrättigheten är satt till <samp>ALDRIG</samp> vilket blir det totala värdet eftersom det var satt till NEJ.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Användarrättigheten för denna kategori är satt till <samp>ALDRIG</samp> vilket blir det totala värdet eftersom det var satt till NEJ.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Användarrättigheten är satt till <samp>ALDRIG</samp> och åsidosätter det tidigare <samp>JA</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Användarrättigheten för denna kategori är satt till <samp>ALDRIG</samp> och åsidosätter det föregående <samp>JA</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Användarrättigheten är <samp>NEJ</samp> och det totala värdet var satt till NEJ så det blir per standard <samp>ALDRIG</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Användarrättigheten för denna kategori är <samp>NEJ</samp> och det totala värdet var satt till NEJ så det blir per standard <samp>ALDRIG</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Användarrättigheten är satt till <samp>JA</samp> men det totala <samp>ALDRIG</samp> kan inte åsidosättas.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Användarrättigheten för denna kategori är satt till <samp>JA</samp> men det totala <samp>ALDRIG</samp> kan inte åsidosättas.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Användarrättigheten är satt till <samp>JA</samp> vilket blir det totala värdet eftersom det var satt till <samp>NEJ</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Användarrättigheten för denna kategori är satt till <samp>JA</samp> vilket blir det totala värdet eftersom det var satt till <samp>NEJ</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Användarrättigheten är satt till <samp>JA</samp> och det totala värdet är satt till <samp>JA</samp>, så ingenting ändras.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Användarrättigheten för denna kategori är satt till <samp>JA</samp> och det totala värdet är satt till <samp>JA</samp>, så ingenting ändras.',
	'TRACE_WHO'								=> 'Vem',
	'TRACE_TOTAL'							=> 'Totalt',

	'USERS_NOT_ASSIGNED'			=> 'Ingen användare är tilldelad denna roll',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'är medlem i följande standardgrupper',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'är medlem i följande egna grupper',

	'VIEW_ASSIGNED_ITEMS'	=> 'Visa tilldelade poster',
	'VIEW_LOCAL_PERMS'		=> 'Lokala rättigheter',
	'VIEW_GLOBAL_PERMS'		=> 'Globala rättigheter',
	'VIEW_PERMISSIONS'		=> 'Visa rättigheter',

	'WRONG_PERMISSION_TYPE'	=> 'Felaktig rättighetstyp vald.',
));

?>