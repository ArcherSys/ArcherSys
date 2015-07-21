<?php
/**
*
* posting [Dutch]
*
* @package language
* @version $Id: posting.php,v 1.0.0 2007/01/27 18:33:26 shs Exp $
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'	=> 'BBCode is een speciale toepassing van HTML om beter controle te kunnen uitoefenen over wat en hoe je iets weergeeft. Vanuit deze pagina kan je eigen BBCodes toevoegen, bewerken en verwijderen.',
	'ADD_BBCODE'			=> 'Voeg een nieuwe BBCode toe',

	'BBCODE_ADDED'				=> 'BBCode succesvol toegevoegd.',
	'BBCODE_EDITED'				=> 'BBCode succesvol bewerkt.',
	'BBCODE_NOT_EXIST'			=> 'De BBCode die je selecteerde bestaat niet.',
	'BBCODE_HELPLINE'			=> 'Hulplijn',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Dit veld bevat de muis-over tekst van de BBCode.',
	'BBCODE_HELPLINE_TEXT'		=> 'Hulplijn tekst',
	'BBCODE_INVALID_TAG_NAME'	=> 'De BBCode-tagnaam die je selecteerde bestaat reeds.',
	'BBCODE_INVALID'			=> 'Je BBCode is gemaakt in een ongeldig formulier.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Jouw standaard BBCode moet een open- en sluittag bevatten.',
	'BBCODE_TAG'				=> 'Tag',
	'BBCODE_TAG_TOO_LONG'		=> 'De tagnaam die je selecteerde is te lang.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'De tagomschrijving die je invoegde is te lang, gelieve deze in te korten.',
	'BBCODE_USAGE'				=> 'BBCode gebruik',
	'BBCODE_USAGE_EXAMPLE'		=> '[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Hier geef je op hoe BBCode te gebruiken. Vervang eender welke willekeurige input met de overeenkomstige variabele (%szie hieronder%s).',

	'EXAMPLE'	=> 'Voorbeeld:',
	'EXAMPLES'	=> 'Voorbeelden:',

	'HTML_REPLACEMENT'			=> 'HTML-vervanging',
	'HTML_REPLACEMENT_EXAMPLE'	=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'	=> 'Hier kan je de standaard HTML-vervanging opgeven. Vergeet niet de variabele terug te plaatsen die je hierboven gebruikte!',

	'TOKEN'				=> 'Variabele',
	'TOKENS'			=> 'Variabelen',
	'TOKENS_EXPLAIN'	=> 'Variabelen zijn vervangers voor gebruikersinvoer. De invoer zal enkel gevalideerd worden als deze overeenkomt met de bijhorende definitie. Indien nodig kan je ze nummeren door als laatste teken, voor het haakje, een nummer toe te voegen, vb {GEBRUIKERSNAAM1}, {GEBRUIKERSNAAM2}.<br /><br />Daarnaast kun je ook iedere taalzin uit je language-map gebruiken, zoals hier: {L_<em>&lt;TAALZINNAAM&gt;</em>} waarbij <em>&lt;TAALZINNAAM&gt;</em> de naam is van de taalzin die je wilt toevoegen. Bijvoorbeeld, {L_WROTE} zal &quot;schreef&quot; weergeven, of een van de taal van de gebruiker afhangende vertaling. <strong>Let op dat enkel variabelen van hieronder gebruikt kunnen worden in eigen BBCodes.</strong>',
	'TOKEN_DEFINITION'	=> 'Wat kan het zijn?',
	'TOO_MANY_BBCODES'	=> 'Je kan geen BBCodes meer aanmaken. Gelieve een of meerdere BBCodes te verwijderen en dan opnieuw te proberen.',

   'tokens'	=>   array(
		'TEXT'			=> 'Alle tekst, iclusief vreemde tekens, cijfers, ed. Je kan deze beter niet gebruiken in samenwerking met html tags, gebruik hiervoor IDENTIFIER of SIMPLETEXT',
		'SIMPLETEXT'	=> 'Letters van het alfabet (A-Z), cijfers, spaties, komma\'s, punten, mintekens, plustekens, koppeltekens en underscores',
		'IDENTIFIER'	=> 'Letters van het alfabet (A-Z), cijfers, koppeltekens en underscores',
		'NUMBER'		=> 'Eender welke serie van cijfers',
		'EMAIL'			=> 'Een geldig e-mailadres',
		'URL'			=> 'Een geldige URL, gebruikmakend van een willekeurig protocol (http, ftp, e.d. kunnen niet voor javascriptlekken gebruikt worden. Als er geen ingevoerd wordt, nemen we "http://".',
		'LOCAL_URL'		=> 'Een lokale URL die relatief moet zijn aan de onderwerppagina en geen protocol of servernaam mag bevatten',
		'COLOR'			=> 'Een HTML-kleur kan numeriek of een codewoord zijn.'
   )
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Op deze pagina kan je de onderwerpiconen beheren. Deze worden naast de berichttitel weergegeven in de onderwerpenlijst.',
	'ACP_SMILIES_EXPLAIN'	=> 'Smilies zijn kleine afbeeldingen die dienen om de gemoedstoestand van een gebruiker uit te drukken. Op deze pagina kan je de smilies beheren.',
	'ADD_SMILIES'			=> 'Voeg meerdere smilies toe',
	'ADD_SMILEY_CODE'		=> 'Voeg een nieuwe smiliecode toe',
	'ADD_ICONS'				=> 'Voeg meerdere iconen toe',
	'AFTER_ICONS'			=> 'Na %s',
	'AFTER_SMILIES'			=> 'Na %s',

	'CODE'						=> 'Code',
	'CURRENT_ICONS'				=> 'Huidige iconen',
	'CURRENT_ICONS_EXPLAIN'		=> 'Kies wat te doen met de huidig ge&iuml;nstalleerde iconen.',
	'CURRENT_SMILIES'			=> 'Huidige smilies',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Kies wat te doen met de huidig ge&iuml;nstalleerde smilies.',

	'DISPLAY_ON_POSTING'	=> 'Toon bij het plaatsen van een bericht',
	'DISPLAY_POSTING'		=> 'Op bericht-plaats pagina',
	'DISPLAY_POSTING_NO'	=> 'Niet op bericht-plaats pagina',

	'EDIT_ICONS'				=> 'Bewerk iconen',
	'EDIT_SMILIES'				=> 'Bewerk smilies',
	'EMOTION'					=> 'Gemoedstoestand',
	'EXPORT_ICONS'				=> 'Exporteer en download icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sWanneer je deze link aanklikt zullen de instellingen als <samp>icons.pak</samp> worden opgeslagen.%s.',
	'EXPORT_SMILIES'			=> 'Exporteer en download smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sWanneer je deze link aanklikt zullen de instellingen als <samp>smilies.pak</samp> worden opgeslagen.%s.',

	'FIRST'	=> 'Eerst',

	'ICONS_ADD'				=> 'Voeg nieuw icoon toe',
	'ICON_NONE_ADDED'		=> 'Er werden geen iconen toegevoegd.',
	'ICONS_ONE_ADDED'		=> 'Het icoon is succesvol toegevoegd.',
	'ICONS_ADDED'			=> 'De iconen zijn succesvol toegevoegd.',
	'ICONS_CONFIG'			=> 'Icoon instellingen',
	'ICONS_DELETED'			=> 'Het icoon is succesvol verwijderd.',
	'ICONS_EDIT'			=> 'Bewerk icoon',
	'ICONS_ONE_EDITED'		=> 'Het icoon werd succesvol bijgewerkt.',
	'ICON_NONE_EDITED'		=> 'Er werden geen iconen bijgewerkt.',
	'ICONS_EDITED'			=> 'De iconen werden succesvol bijgewerkt.',
	'ICONS_HEIGHT'			=> 'Icoonhoogte',
	'ICONS_IMAGE'			=> 'Icoonafbeelding',
	'ICONS_IMPORTED'		=> 'De icoonpakketten werden succesvol ge&iuml;nstalleerd.',
	'ICONS_IMPORT_SUCCESS'	=> 'De icoonpakketten werden succesvol ge&iuml;mporteerd.',
	'ICONS_LOCATION'		=> 'Icoonlocatie',
	'ICONS_NOT_DISPLAYED'	=> 'De volgende iconen worden niet op de berichtenpagina weergegeven',
	'ICONS_ORDER'			=> 'Icoonvolgorde',
	'ICONS_URL'				=> 'Icoonafbeeldingbestand',
	'ICONS_WIDTH'			=> 'Icoonbreedte',
	'IMPORT_ICONS'			=> 'Installeer icoonpakket',
	'IMPORT_SMILIES'		=> 'Installeer smiliespakket',

	'KEEP_ALL'	=> 'Hou ze allemaal',

	'MASS_ADD_SMILIES'	=> 'Voeg meerdere smilies toe',

	'NO_ICONS_ADD'		=> 'Er zijn geen beschikbare iconen om toe te voegen.',
	'NO_ICONS_EDIT'		=> 'Er zijn geen beschikbare iconen om te wijzigen.',
	'NO_ICONS_EXPORT'	=> 'Je hebt geen iconen waarmee je een pakket kan maken.',
	'NO_ICONS_PAK'		=> 'Geen icoonpakketten gevonden.',
	'NO_SMILIES_ADD'	=> 'Er zijn geen beschikbare smilies om toe te voegen.',
	'NO_SMILIES_EDIT'	=> 'Er zijn geen beschikbare smilies om te wijzigen.',
	'NO_SMILIES_EXPORT'	=> 'Je hebt geen smilies waarmee je een pakket kan maken.',
	'NO_SMILIES_PAK'	=> 'Geen smiliespakketten gevonden.',

	'PAK_FILE_NOT_READABLE'	=> 'Kan het <samp>.pak</samp>-bestand niet lezen.',

	'REPLACE_MATCHES'	=> 'Vervang overeenkomstige',

	'SELECT_PACKAGE'			=> 'Selecteer een pakketbestand',
	'SMILIES_ADD'				=> 'Voeg nieuwe smilie toe',
	'SMILIES_NONE_ADDED'		=> 'Er werden geen smilies toegevoegd.',
	'SMILIES_ONE_ADDED'			=> 'De smilies zijn succesvol toegevoegd.',
	'SMILIES_ADDED'				=> 'De smilies zijn succesvol toegevoegd.',
	'SMILIES_CODE'				=> 'Smilie-code',
	'SMILIES_CONFIG'			=> 'Smilie-instellingen',
	'SMILIES_DELETED'			=> 'De smilie werd succesvol verwijderd.',
	'SMILIES_EDIT'				=> 'Bewerk smilie',
	'SMILIES_NONE_EDITED'		=> 'Er werden geen smilies bewerkt.',
	'SMILIES_ONE_EDITED'		=> 'De smilie werd succesvol bijgewerkt.',
	'SMILIES_EDITED'			=> 'De smilies werden succesvol bijgewerkt.',
	'SMILIES_EMOTION'			=> 'Gemoedstoestand',
	'SMILIES_HEIGHT'			=> 'Smilie-hoogte',
	'SMILIES_IMAGE'				=> 'Smilie-afbeelding',
	'SMILIES_IMPORTED'			=> 'Het smilie-pakket werd succesvol ge&iuml;nstalleerd.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Het smilie-pakket werd succesvol ge&iuml;mporteerd.',
	'SMILIES_LOCATION'			=> 'Smilie-locatie',
	'SMILIES_NOT_DISPLAYED'		=> 'De volgende smilies worden niet weergegeven op de berichtenpagina',
	'SMILIES_ORDER'				=> 'Smilie-volgorde',
	'SMILIES_URL'				=> 'Smilie-afbeeldingbestand',
	'SMILIES_WIDTH'				=> 'Smilie-breedte',

	'WRONG_PAK_TYPE'	=> 'Het vooropgestelde pakket bevat de vereiste data niet.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'	=> 'Op deze pagina kan je woorden die op je forum automatisch gecensureerd worden, beheren. Daarbovenop zullen gebruikers niet worden toegelaten zich met deze woorden in hun naam te registreren. Wildcards (*) mogen ook gebruikt worden.',
	'ADD_WORD'			=> 'Voeg nieuw woord toe',

	'EDIT_WORD'		=> 'Bewerk woordcensuur',
	'ENTER_WORD'	=> 'Je moet een woord en zijn vervanging invoeren.',

	'NO_WORD'	=> 'Geen woord geselecteerd om te bewerken.',

	'REPLACEMENT'	=> 'Vervanging',

	'UPDATE_WORD'	=> 'Werk woordcensuur bij',

	'WORD'			=> 'Woord',
	'WORD_ADDED'	=> 'De woordcensuur is succesvol toegevoegd.',
	'WORD_REMOVED'	=> 'De woordcensuur is succesvol verwijderd.',
	'WORD_UPDATED'	=> 'De woordcensuur is succesvol bijgewerkt.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'	=> 'Van hieruit kan je de rangen beheren. Je kan ook aangepaste rangen maken die via het gebruikersbeheer kunnen worden toegekend.',
	'ADD_RANK'			=> 'Voeg nieuwe rang toe',

	'MUST_SELECT_RANK'	=> 'Je moet een rang selecteren.',

	'NO_ASSIGNED_RANK'		=> 'Geen speciale rang toegekend.',
	'NO_RANK_TITLE'			=> 'Je hebt geen rangtitel opgegeven.',
	'NO_UPDATE_RANKS'		=> 'De rang werd succesvol verwijderd. Toch is de rang niet bij de gebruikers bijgewerkt. Je moet ze manueel resetten bij deze gebruikers.',
	'RANK_ADDED'			=> 'De rang was succesvol toegevoegd.',
	'RANK_IMAGE'			=> 'Rang-afbeelding',
	'RANK_IMAGE_EXPLAIN'	=> 'Gebruikt om kleine afbeeldingen op te geven die samengaan met de rang. Het pad is relatief aan de phpBB-root (waar config.php / index.php / viewtopic.php / enz. staan).',
	'RANK_MINIMUM'			=> 'Minimum aantal berichten',
	'RANK_REMOVED'			=> 'De rang was succesvol verwijderd.',
	'RANK_SPECIAL'			=> 'Stel als speciale rang in',
	'RANK_TITLE'			=> 'Rangtitel',
	'RANK_UPDATED'			=> 'De rang werd succesvol bijgewerkt.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Hier kan je beheren welke gebruikersnamen niet zijn toegestaan. Niet-toegestane gebruikersnamen mogen gebruik maken van een wildcard (*). Hou er rekening mee dat die niet geldt voor gebruikersnamen die reeds gebruikt worden. Zulke gebruikersnamen zal je eerst moeten verwijderen of aanpassen.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Je kan een gebruikersnaam verbieden, gebruik * voor een willekeurig teken.',
	'ADD_DISALLOW_TITLE'	=> 'Voeg een geweigerde gebruikersnaam toe',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Je kan een geweigerde gebruikersnaam verwijderen door de naam te selecteren uit deze lijst en dan te bevestigen.',
	'DELETE_DISALLOW_TITLE'		=> 'Verwijder een geweigerde gebruikersnaam',
	'DISALLOWED_ALREADY'		=> 'De naam die je invoegde kan niet geweigerd worden. Deze bestaat al in de lijst, in de censuurlijst, of is al geregistreerd.',
	'DISALLOWED_DELETED'		=> 'De geweigerde gebruikersnaam is succesvol verwijderd.',
	'DISALLOW_SUCCESSFUL'		=> 'De geweigerde gebruikersnaam is succesvol toegevoegd.',

	'NO_DISALLOWED'			=> 'Geen geweigerde gebruikersnamen',
	'NO_USERNAME_SPECIFIED'	=> 'Je hebt geen gebruikersnaam geselecteerd of ingevoegd om mee te werken.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Van hieruit kan je de redenen in rapporten en de weigerberichten wanneer een bericht geweigerd wordt, beheren. Er is een standaardreden, met * gemarkeerd, die je niet kan verwijderen.',
	'ADD_NEW_REASON'		=> 'Voeg nieuwe reden toe',
	'AVAILABLE_TITLES'		=> 'Beschikbare vertaalde redentitels',

	'IS_NOT_TRANSLATED'			=> 'Reden is <strong>niet</strong> vertaald.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Reden is <strong>niet</strong> vertaald. Als je een vertaalde vorm wilt aanmaken, selecteer dan de correcte \'key\' vanuit het taalbestand.',
	'IS_TRANSLATED'				=> 'Reden is vertaald.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Reden is vertaald. Indien de titel die je hier invoert in het taalbestand is opgegeven, zal die zin gebruikt worden.',

	'NO_REASON'					=> 'Reden werd niet gevonden.',
	'NO_REASON_INFO'			=> 'Je moet een titel en omschrijving voor deze reden opgeven.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Je kan de standaardreden &quot;andere&quot; niet verwijderen.',

	'REASON_ADD'				=> 'Voeg rapport/weigeringsreden toe',
	'REASON_ADDED'				=> 'Rapport/weigeringsreden succesvol toegevoegd.',
	'REASON_ALREADY_EXIST'		=> 'Een reden met deze titel bestaat al, gelieve een andere titel voor deze reden op te geven.',
	'REASON_DESCRIPTION'		=> 'Reden omschrijving',
	'REASON_DESC_TRANSLATED'	=> 'Weergegeven reden omschrijving',
	'REASON_EDIT'				=> 'Bewerk rapport/weigering reden',
	'REASON_EDIT_EXPLAIN'		=> 'Hier kan je een reden toevoegen of bewerken. Indien de reden vertaald is zal die gebruikt worden in plaats van degene die je hier opgeeft.',
	'REASON_REMOVED'			=> 'Rapport/weigering reden succesvol verwijderd.',
	'REASON_TITLE'				=> 'Reden titel',
	'REASON_TITLE_TRANSLATED'	=> 'Weergegeven reden titel',
	'REASON_UPDATED'			=> 'Rapport/weigering succesvol bijgewerkt.',

	'USED_IN_REPORTS'	=> 'Gebruikt in rapporten',
));
?>