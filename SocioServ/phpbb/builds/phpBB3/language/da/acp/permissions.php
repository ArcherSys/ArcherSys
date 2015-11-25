<?php
/**
*
* acp_permissions [Danish]
*
* @package language
* @version $Id: permissions.php,v 1.35 2007/07/14 15:43:45 acydburn Exp $
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Tilladelsesdefinitionerne er meget fintmaskede og grupperet i disse fire hovedsektioner:</p>

		<h2>Globale tilladelser</h2>
		<p>Disse bruges til at kontrollere adgang på globalt niveau og dækker hele boardsystemet. Disse er videre opdelt i bruger-, gruppe-, administrator- og globale redaktørtilladelser.</p>

		<h2>Forumbaserede tilladelser</h2>
		<p>Disse bruges til at kontrollere adgang på forumbasis. De er videre opdelt i forum-, forumredaktør-, brugeres forum- og gruppers forumtilladelser.</p>

		<h2>Tilladelsesroller</h2>
		<p>Disse bruges til at oprette forskellige tilladelsessæt for forskellige tilladelsestyper hvilke senere kan tildeles på rollebaseret basis. Standardrollerne skulle dække administrationen af små som store forumsystemer, men du kan frit tilføje, rette eller slette roller som det passer dig i de fire undersektioner.</p>

		<h2>Tilladelsesmasker</h2>
		<p>Disse bruges til at vise de eksisterende tilladelser tildelt brugere, redaktører (lokale og globale), administratorer eller fora.</p>

		<br />

		<p>For yderligere information om opsætning og administration af tilladelser på dit phpBB3 board, læs venligst <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Kapitel 1.5 i vores engelske Quick Start Guide</a>.</p>
	',

	'ACL_NEVER'				=> 'Aldrig',
	'ACL_SET'				=> 'Indstilling af tilladelser',
	'ACL_SET_EXPLAIN'		=> 'Tilladelser er baseret på et simpelt <samp>JA</samp>/<samp>NEJ</samp> system. Brug af indstillingen <samp>ALDRIG</samp> for en bruger eller brugergruppe tilsidesætter alle andre værdier tildelt denne. Hvis du ikke ønsker at tildele en værdi til en indstilling for denne bruger eller gruppe vælg <samp>NEJ</samp>. Hvis værdierne for denne indstilling er angivet andre steder vil disse blive brugt fremfor denne, ellers antages <samp>ALDRIG</samp>. Alle markerede objekter (med afkrydsningsfeltet foran dem) vil få kopieret tilladelsessættet du angav.',
	'ACL_SETTING'			=> 'Indstilling',

	'ACL_TYPE_A_'			=> 'Administrative tilladelser',
	'ACL_TYPE_F_'			=> 'Forumtilladelser',
	'ACL_TYPE_M_'			=> 'Redaktørtilladelser',
	'ACL_TYPE_U_'			=> 'Brugertilladelser',

	'ACL_TYPE_GLOBAL_A_'	=> 'Administrative tilladelser',
	'ACL_TYPE_GLOBAL_U_'	=> 'Brugertilladelser',
	'ACL_TYPE_GLOBAL_M_'	=> 'Globale redaktørtilladelser',
	'ACL_TYPE_LOCAL_M_'		=> 'Forumredaktørtilladelser',
	'ACL_TYPE_LOCAL_F_'		=> 'Forumtilladelser',

	'ACL_NO'				=> 'Nej',
	'ACL_VIEW'				=> 'Viser tilladelser',
	'ACL_VIEW_EXPLAIN'		=> 'Her kan du se de effektive tilladelser brugeren/gruppen er i besiddelse af. En rød firkant betyder at brugeren/gruppen ikke har tilladelsen, en grøn firkant at brugeren/gruppen har tilladelsen.',
	'ACL_YES'				=> 'Ja',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Her kan du tildele administratortilladelser til brugere eller grupper. Alle brugere med administratortilladelser kan se administrator kontrolpanelet.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Her kan du udpege brugere og grupper som forumredaktører. For at give brugere adgang til fora, for at definere globale redaktørtilladelser eller administratorer brug venligst den dertil indrettede side.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Her kan du ændre hvilke brugere og grupper der kan tilgå hvilke fora. For at udnævne redaktører eller administratorer  brug venligst den dertil indrettede side.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Her kan du tildele globale redaktørtilladelser til brugere eller grupper. Disse redaktører fungerer som almindelige redaktører bortset fra at de har adgang til alle fora i systemet.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Her kan du tildele forumtilladelser til grupper.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Her kan du tildele globale tilladelser til grupper - brugertilladelser, globale redaktør- og administratortilladelser. Brugertilladelser inkluderer muligheder som brug af avatarer, private beskeder etc. Globale redaktørtilladelser; som at kunne godkende indlæg, administrere emner og udeladelser. Og sidst men ikke mindst give tilladelse til hvem der må ændre i tilladelsessystemet, definere tilpassede BBkodetags, administrere fora etc. Individuelle brugeres tilladelser bør kun i særlige tilfælde ændres, den foretrukne metode er at samle brugerne i grupper og tildele gruppetilladelser.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Her kan du administrere rollerne for administrative tilladelser. Roller er effektive tilladelser, hvis du ændrer en rolle ændres de ting der har denne rolle deres tilladelser også.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Her kan du administrere rollerne for forumtilladelser. Roller er effektive tilladelser, hvis du ændrer en rolle ændres de ting der har denne rolle deres tilladelser også.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Her kan du administrere rollerne for redaktionelle tilladelser. Roller er effektive tilladelser, hvis du ændrer en rolle ændres de ting der har denne rolle deres tilladelser også.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Her kan du administrere rollerne for brugertilladelser. Roller er effektive tilladelser, hvis du ændrer en rolle ændres de ting der har denne rolle deres tilladelser også.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Her kan du tildele forumtilladelser til brugere.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Her kan du tildele globale tilladelser til brugere - brugertilladelser, globale redaktør- og administratortilladelser. Brugertilladelser inkluderer muligheder som brug af avatarer, private beskeder etc. Globale redaktørtilladelser; som at kunne godkende indlæg, administrere emner og udeladelser. Og sidst men ikke mindst give tilladelse til hvem der må ændre i tilladelsessystemet, definere tilpassede BBkodetags, administrere fora etc. For at ændre disse indstillinger for et større antal brugere anbefales det at bruge gruppetilladelsessystemet. Brugeres tilladelser bør kun i særlige tilfælde ændres, den foretrukne metode er at samle brugerne i grupper og tildele gruppetilladelser.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Her kan du se de effektive administrative tilladelser tildelt valgte brugere/grupper.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Her kan du se de globale redaktionelle tilladelser tildelt de valgte brugere/grupper.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Her kan du se forumtilladelser tildelt valgte brugere/grupper og fora.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Her kan du se forumredaktørtilladelser tildelt valgte brugere/grupper og fora.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Her kan du se de effektive brugertilladelser tildelt valgte brugere/grupper.',

	'ADD_GROUPS'				=> 'Tilføj grupper',
	'ADD_PERMISSIONS'			=> 'Tilføj tilladelser',
	'ADD_USERS'					=> 'Tilføj brugere',
	'ADVANCED_PERMISSIONS'		=> 'Avancerede tilladelser',
	'ALL_GROUPS'				=> 'Vælg alle grupper',
	'ALL_NEVER'					=> 'Alle <samp>ALDRIG</samp>',
	'ALL_NO'					=> 'Alle <samp>NEJ</samp>',
	'ALL_USERS'					=> 'Vælg alle brugere',
	'ALL_YES'					=> 'Alle <samp>JA</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Angiv alle tilladelser',
	'APPLY_PERMISSIONS'			=> 'Angiv tilladelser',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Tilladelser og rolle defineret for dette punkt vil kun blive tilføjet til dette punkt og alle markerede punkter.',
	'AUTH_UPDATED'				=> 'Tilladelser er blevet opdateret',

	'CREATE_ROLE'				=> 'Opret rolle',
	'CREATE_ROLE_FROM'			=> 'Brug indstillinger fra...',
	'CUSTOM'					=> 'Brugerdefineret...',

	'DEFAULT'					=> 'Standard',
	'DELETE_ROLE'				=> 'Slet rolle',
	'DELETE_ROLE_CONFIRM'		=> 'Er du sikker på at du vil slette denne rolle? Elementer der er tildelt tilladelser via denne rolle vil <strong>ikke</strong> miste disse.',
	'DISPLAY_ROLE_ITEMS'		=> 'Se elementer der bruger denne rolle',

	'EDIT_PERMISSIONS'			=> 'Ret tilladelser',
	'EDIT_ROLE'					=> 'Ret rolle',

	'GROUPS_NOT_ASSIGNED'		=> 'Ingen gruppe tilknyttet denne rolle',

	'LOOK_UP_GROUP'				=> 'Slå brugergruppe op',
	'LOOK_UP_USER'				=> 'Slå bruger op',

	'MANAGE_GROUPS'		=> 'Administrér grupper',
	'MANAGE_USERS'		=> 'Administrér brugere',

	'NO_AUTH_SETTING_FOUND'		=> 'Tilladelsesindstillinger ikke defineret.',
	'NO_ROLE_ASSIGNED'			=> 'Ingen rolle tilknyttet...',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Indstilling til denne rolle ændrer ikke tilladelser i højre side. Hvis du vil nulstille/fjerne alle tilladelser bør du bruge "Alle <samp>NEJ</samp>"-linket.',
	'NO_ROLE_AVAILABLE'			=> 'Ingen rolle tilgængelig',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Giv venligst rollen et navn.',
	'NO_ROLE_SELECTED'			=> 'Denne rolle findes ikke.',
	'NO_USER_GROUP_SELECTED'	=> 'Du har ikke valgt nogen bruger eller gruppe.',

	'ONLY_FORUM_DEFINED'	=> 'Du definerede kun fora i dit valg. Vælg venligst også mindst en bruger eller en gruppe.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Tilladelser og roller vil også blive tilknyttet alle markerede objekter',
	'PLUS_SUBFORUMS'				=> '+ underfora',

	'REMOVE_PERMISSIONS'			=> 'Fjern tilladelser',
	'REMOVE_ROLE'					=> 'Fjern rolle',
	'RESULTING_PERMISSION'	=> 'Resulterende tilladelse',
	'ROLE'							=> 'Rolle',
	'ROLE_ADD_SUCCESS'				=> 'Rolle korrekt tilføjet.',
	'ROLE_ASSIGNED_TO'				=> 'Brugere/grupper knyttet til %s',
	'ROLE_DELETED'					=> 'Rolle korrekt fjernet.',
	'ROLE_DESCRIPTION'				=> 'Rollebeskrivelse',
	
	'ROLE_ADMIN_FORUM'		=> 'Forum administrator',
	'ROLE_ADMIN_FULL'		=> 'Fuld administrator',
	'ROLE_ADMIN_STANDARD'	=> 'Standard administrator',
	'ROLE_ADMIN_USERGROUP'	=> 'Bruger- og gruppeadministrator',
	'ROLE_FORUM_BOT'		=> 'Bot adgang',
	'ROLE_FORUM_FULL'		=> 'Fuld adgang',
	'ROLE_FORUM_LIMITED'	=> 'Begrænset adgang',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Begrænset adgang + afstemninger',
	'ROLE_FORUM_NOACCESS'		=> 'Ingen adgang',
	'ROLE_FORUM_ONQUEUE'		=> 'Indlæg skal godkendes',
	'ROLE_FORUM_POLLS'			=> 'Standard adgang + afstemninger',
	'ROLE_FORUM_READONLY'		=> 'Kun læseadgang',
	'ROLE_FORUM_STANDARD'		=> 'Standard adgang',
	'ROLE_MOD_FULL'				=> 'Fuld redaktør',
	'ROLE_MOD_QUEUE'		=> 'Kø redaktør',
	'ROLE_MOD_SIMPLE'		=> 'Simpel redaktør',
	'ROLE_MOD_STANDARD'		=> 'Standard redaktør',
	'ROLE_USER_FULL'		=> 'Alle funktioner',
	'ROLE_USER_LIMITED'		=> 'Begrænsede funktioner',
	'ROLE_USER_NOAVATAR'	=> 'Ingen avatar',
	'ROLE_USER_NOPM'		=> 'Ingen private beskeder',
	'ROLE_USER_STANDARD'	=> 'Standard funktioner',

	'ROLE_DESCRIPTION_ADMIN_FORUM'		=> 'Kan tilgå forumadministration og forumtilladelsesindstillinger.',
	'ROLE_DESCRIPTION_ADMIN_FULL'		=> 'Har adgang til alle administrative funktioner på dette board.<br />Anbefales ikke.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'	=> 'Har adgang til de fleste administrative indstillinger, men ikke til server- og systemrelaterede værktøjer.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'	=> 'Kan administrere grupper og brugere: Ændre tilladelser, indstillinger, administrere udelukkelser og administrere rang.',
	'ROLE_DESCRIPTION_FORUM_BOT'		=> 'Denne rolle anbefales til botter og søgespiders.',
	'ROLE_DESCRIPTION_FORUM_FULL'		=> 'Kan bruge alle forumfunktioner, inklusiv skrivning af bekendtgørelser og opslag. Kan også ignorere floodbegrænsninger.<br />Anbefales ikke til almindelige brugere.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'	=> 'Kan bruge nogle forumfunktioner, men kan ikke vedhæfte filer eller bruge indlægsikoner.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Som begrænset adgang, men kan også oprette afstemninger.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'	=> 'Kan hverken se eller tilgå dette forum.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'	=> 'Kan bruge de fleste forumfunktioner inklusiv vedhæftning af filer, men indlæg og emner skal godkendes af en redaktør.',
	'ROLE_DESCRIPTION_FORUM_POLLS'		=> 'Som standardadgang, men kan også oprette afstemninger.',
	'ROLE_DESCRIPTION_FORUM_READONLY'	=> 'Kan læse forummet, men kan ikke oprette nye emner eller svare på indlæg.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'	=> 'Kan bruge de fleste forumfunktioner, inklusiv vedhæftning af filer og sletning af egne emner, men kan ikke låse egne emner og ikke oprette afstemninger.',
	'ROLE_DESCRIPTION_MOD_FULL'			=> 'Kan bruge alle redaktørfunktioner, inklusiv udelukkelse.',
	'ROLE_DESCRIPTION_MOD_QUEUE'		=> 'Kan bruge redigeringskøen til at validere og redigere indlæg, men intet andet.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'		=> 'Kan kun bruge de grundlæggende emnefunktioner. Kan ikke give advarsler eller bruge redigeringskøen.',
	'ROLE_DESCRIPTION_MOD_STANDARD'		=> 'Kan bruge de fleste redaktørværktøjer, men kan ikke udelukke brugere eller ændre indlægsforfatter.',
	'ROLE_DESCRIPTION_USER_FULL'		=> 'Kan bruge alle tilgængelige forumfunktioner for brugere, inklusiv ændring af brugernavn og ignorering af floodbegrænsning.<br />Anbefales ikke.',
	'ROLE_DESCRIPTION_USER_LIMITED'		=> 'Kan tilgå visse af brugerfunktionerne. Vedhæftede filer, emails eller brug af messengere er ikke tilladt.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'	=> 'Har et begrænset funktionssæt og kan ikke bruge avatarfunktionen.',
	'ROLE_DESCRIPTION_USER_NOPM'		=> 'Har et begrænset funktionssæt, og kan ikke bruge private beskeder.',
	'ROLE_DESCRIPTION_USER_STANDARD'	=> 'Kan tilgå de fleste, men ikke alle brugerfunktioner. Kan for eksempel ikke ændre brugernavn eller ignorere floodbegrænsningen.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Du kan indtaste en kort forklaring på hvad rollen gør eller er beregnet på. Den hér indtastede tekst kan også læses på tilladelsessiderne.',
	'ROLE_DESCRIPTION_LONG'			=> 'Rollebeskrivelsen er for lang, afkort den venligst til maksimalt 4000 tegn.',
	'ROLE_DETAILS'					=> 'Rolleinformation',
	'ROLE_EDIT_SUCCESS'				=> 'Rolle redigeret.',
	'ROLE_NAME'						=> 'Rollenavn',
	'ROLE_NAME_ALREADY_EXIST'		=> 'En rolle med navnet <strong>%s</strong> findes allerede for den angivne tilladelsestype.',
	'ROLE_NOT_ASSIGNED'				=> 'Rolle er endnu ikke tilknyttet.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Det eller de valgte fora findes ikke.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Den eller de valgte grupper findes ikke.',
	'SELECTED_USER_NOT_EXIST'		=> 'Den eller de valgte brugere findes ikke.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Det hér valgte forum vil inkludere alle underfora i valget.',
	'SELECT_ROLE'					=> 'Vælg rolle...',
	'SELECT_TYPE'					=> 'Vælg type',
	'SET_PERMISSIONS'				=> 'Indstil tilladelser',
	'SET_ROLE_PERMISSIONS'			=> 'Sæt rolletilladelser',
	'SET_USERS_PERMISSIONS'			=> 'Sæt brugertilladelser',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Sæt forumtilladelser for brugere',

	'TRACE_DEFAULT'					=> 'Standard er alle tilladelser sat til <samp>NEJ</samp> (ikke sat), så tilladelsen kan tilsidesættes af andre indstillinger.',
	'TRACE_FOR'						=> 'Undersøg for',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Denne gruppes tilladelse er sat til <samp>ALDRIG</samp> som det totale resultat, så det gamle resultat bibeholdes.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Denne gruppes tilladelse for dette forum er sat til <samp>ALDRIG</samp> som det totale resultat, så det gamle resultat bibeholdes.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Denne gruppes tilladelse er sat til <samp>ALDRIG</samp> hvilket bliver den nye totalværdi da det endnu ikke var sat (sat til <samp>NEJ</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Denne gruppes tilladelse for dette forum er sat til <samp>ALDRIG</samp> hvilket bliver den nye totalværdi da det endnu ikke var sat (sat til <samp>NEJ</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Denne gruppes tilladelse er sat til <samp>ALDRIG</samp> hvilket tilsidesætter det totale <samp>JA</samp> til et <samp>ALDRIG</samp> for denne bruger.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Denne gruppes tilladelse for dette forum er sat til <samp>ALDRIG</samp> hvilket tilsidesætter det totale <samp>JA</samp> til et<samp>ALDRIG</samp> for denne bruger.',
	'TRACE_GROUP_NO'				=> 'Tilladelsen er <samp>NEJ</samp> for denne gruppe så den gamle totalværdi bibeholdes.',
	'TRACE_GROUP_NO_LOCAL'	=> 'Tilladelsen er <samp>NEJ</samp> for denne gruppe i dette forum så den gamle totalværdi bibeholdes.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Denne gruppes tilladelse er sat til <samp>JA</samp> men totalen <samp>ALDRIG</samp> kan ikke tilsidesættes.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Denne gruppes tilladelse i dette forum er sat til <samp>JA</samp> men totalen <samp>ALDRIG</samp> kan ikke tilsidesættes.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Denne gruppes tilladelse er sat til <samp>JA</samp> hvilket bliver den nye totalværdi da det endnu ikke var sat (sat til <samp>NEJ</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Denne gruppes tilladelse i dette forum er sat til <samp>JA</samp> hvilket bliver den nye totalværdi da det endnu ikke var sat (set til <samp>NEJ</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Denne gruppes tilladelse er sat til <samp>JA</samp> og de totale tilladelser er allerede sat til <samp>JA</samp>, så det totale resultat bibeholdes.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Denne gruppes tilladelse i dette forum er sat til <samp>JA</samp> og de totale tilladelser er allerede sat til <samp>JA</samp>, så det totale resultat bibeholdes.',
	'TRACE_PERMISSION'				=> 'Undersøg tilladelse - %s',
	'TRACE_RESULT'	=> 'Undersøg resultat',
	'TRACE_SETTING'					=> 'Undersøg indstilling',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Den forumuafhængige brugertilladelse evaluerer til <samp>JA</samp> men den totale tilladelse er allerede sat til <samp>JA</samp>, så det totale resultat bibeholdes. %sUndersøg global tilladelse%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Den forumuafhængige brugertilladelse evaluerer til <samp>JA</samp> hvilket tilsidesætter det nuværende lokale resultat <samp>ALDRIG</samp>. %sUndersøg global tilladelse%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Den forumuafhængige brugertilladelse evaluerer til <samp>ALDRIG</samp> hvilket ikke påvirker den lokale tilladelse. %sUndersøg global tilladelse%s',

	'TRACE_USER_FOUNDER'	=> 'Brugeren har rang af grundlægger, og administratortilladelser sættes derfor standard til <samp>JA</samp>.',
	'TRACE_USER_KEPT'		=> 'Brugertilladelsen er <samp>NEJ</samp> så den oprindelige totalværdi bevares.',
	'TRACE_USER_KEPT_LOCAL'	=> 'Brugertilladelsen i dette forum er <samp>NEJ</samp> så den oprindelige totalværdi bevares.',
	'TRACE_USER_NEVER_TOTAL_NEVER'	=> 'Brugertilladelsen er sat til <samp>ALDRIG</samp> og den totale værdi er sat til <samp>ALDRIG</samp>, så intet er ændret.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Brugertilladelsen i dette forum er sat til <samp>ALDRIG</samp> og den totale værdi er sat til <samp>ALDRIG</samp>, så intet er ændret.',
	'TRACE_USER_NEVER_TOTAL_NO'		=> 'Brugertilladelsen er sat til <samp>ALDRIG</samp> hvilket bliver den totale værdi da den var sat til <samp>NEJ</samp>.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'	=> 'Brugertilladelsen i dette forum er sat til <samp>ALDRIG</samp> hvilket bliver den totale værdi da den var sat til <samp>NEJ</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES'	=> 'Brugertilladelsen er sat til <samp>ALDRIG</samp> og tilsidesætter det tidligere <samp>JA</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'	=> 'Brugertilladelsen i dette forum er sat til <samp>ALDRIG</samp> og tilsidesætter det tidligere <samp>JA</samp>.',
	'TRACE_USER_NO_TOTAL_NO'		=> 'Brugertilladelsen er <samp>NEJ</samp> og den totale værdi var sat til <samp>NEJ</samp> så den stilles standard på <samp>ALDRIG</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'	=> 'Brugertilladelsen i dette forum er <samp>NEJ</samp> og den totale værdi var sat til <samp>NEJ</samp> så den stilles standard på <samp>ALDRIG</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'	=> 'Brugertilladelsen er sat til <samp>JA</samp> men totalen <samp>ALDRIG</samp> kan ikke tilsidesættes.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'	=> 'Brugertilladelsen i dette forum er sat til <samp>JA</samp> men totalen <samp>ALDRIG</samp> kan ikke tilsidesættes.',
	'TRACE_USER_YES_TOTAL_NO'		=> 'Brugertilladelsen er sat til <samp>JA</samp> hvilket vil blive den totale værdi da den var sat til <samp>NEJ</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'	=> 'Brugertilladelsen i dette forum er sat til <samp>JA</samp> hvilket bliver den totale værdi da den var sat til <samp>NEJ</samp>.',
	'TRACE_USER_YES_TOTAL_YES'		=> 'Brugertilladelsen er sat til <samp>JA</samp> og den totale værdi er sat til <samp>JA</samp>, så intet er ændret.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'	=> 'Brugertilladelsen i dette forum er sat til <samp>JA</samp> og den totale værdi er sat til <samp>JA</samp>, så intet er ændret.',
	'TRACE_WHO'						=> 'Hvem',
	'TRACE_TOTAL'					=> 'Total',

	'USERS_NOT_ASSIGNED'			=> 'Ingen bruger tilknyttet denne rolle',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'er medlem af følgende standardgrupper',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'er medlem af følgende brugerdefinerede grupper',

	'VIEW_ASSIGNED_ITEMS'	=> 'Se tilknyttede elementer',
	'VIEW_LOCAL_PERMS'              => 'Lokale tilladelser',
	'VIEW_GLOBAL_PERMS'             => 'Globale tilladelser',
	'VIEW_PERMISSIONS'		=> 'Vis tilladelser',

	'WRONG_PERMISSION_TYPE'	=> 'Forkert tilladelsestype valgt',
));

?>