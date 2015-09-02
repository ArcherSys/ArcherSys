<?php
/**
*
* acp_profile [Dutch]
*
* @package language
* @version $Id: profile.php,v 1.0.0 2007/01/17 18:40:29 acydburn Exp $
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Profielveld succesvol toegevoegd.',
	'ALPHA_ONLY'			=> 'Enkel cijfers en letters',
	'ALPHA_SPACERS'			=> 'Cijfers, letters en spaties',
	'ALWAYS_TODAY'			=> 'Altijd de huidige tijd',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Vul nu de keuzes in',
	'BOOL_TYPE_EXPLAIN'		=> 'Definieer het type: checkbox of radio buttons. Een checkbox zal enkel worden weergegeven als het is aangegeven voor een gebruiker. In dat geval zal de tweede taalopties worden gebruikt. Radio buttons weergave wordt enkel bepaald door de waarde.',

	'CHANGED_PROFILE_FIELD'			=> 'Profielveld succesvol gewijzigd.',
	'CHARS_ANY'						=> 'Ieder teken',
	'CHECKBOX'						=> 'Checkbox',
	'COLUMNS'						=> 'Kolommen',
	'CP_LANG_DEFAULT_VALUE'			=> 'Standaard waarde',
	'CP_LANG_EXPLAIN'				=> 'Veld omschrijving',
	'CP_LANG_EXPLAIN_EXPLAIN'		=> 'De uitleg van het veld zoals getoond aan de gebruiker.',
	'CP_LANG_NAME'					=> 'Naam/titel van het veld zoals getoond aan de gebruiker',
	'CP_LANG_OPTIONS'				=> 'Keuzes',
	'CREATE_NEW_FIELD'				=> 'Voeg nieuw veld toe',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Ten minste &eacute;&eacute;n profielveld is nog niet vertaald. Vul de benodigde info in door te klikken op de &quot;vertaal&quot; link.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Standaard taal [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'De taalzinnen van de standaard taal bevinden zich niet in dit profielveld.',
	'DEFAULT_VALUE'					=> 'Standaardwaarde',
	'DELETE_PROFILE_FIELD'			=> 'Verwijder profielveld',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Ben je zeker dat je dit profielveld wilt verwijderen?',
	'DISPLAY_AT_PROFILE'			=> 'Geef weer in het gebruikerspaneel',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'De gebruiker kan het profielveld binnenin het gebruikerspaneel wijzigen.',
	'DISPLAY_AT_REGISTER'			=> 'Geef weer in het registratiescherm',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Wanneer je voor deze keuze kiest zal het veld weergegeven worden tijdens de registratie en is het mogelijk om dit te wijzigen in het profiel.',
	'DISPLAY_PROFILE_FIELD'			=> 'Geef profielveld weer',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'De profielvelden zullen worden getoond op alle plaatsen aangegeven in laadopties. Gekozen voor &quot;nee&quot; zal het veld van onderwerppagina\'s, profielen en de ledenlijst niet worden getoond.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Vul hier de keuzes in, elke keuze op een nieuwe lijn.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Merk op dat je de keuzes kan wijzigen en dat je op het einde keuzes kan toevoegen. We adviseren niet om nieuwe keuzes tussen bestaande keuzes te plaatsen - dit zou tot verkeerde keuzes kunnen leiden voor je gebruikers. Dit kan ook gebeuren als je keuzes verwijdert die tussen andere staan. Gebruikers die dit punt zijn toegewezen zullen terugvallen tot de standaardwaarde als je keuzes op het einde verwijdert.',
	'EMPTY_FIELD_IDENT'				=> 'Leeg veld identificatie',
	'EMPTY_USER_FIELD_NAME'			=> 'Vul een veld naam/titel in a.u.b.',
	'ENTRIES'						=> 'Zinnen',
	'EVERYTHING_OK'					=> 'Alles ok&eacute;',

	'FIELD_BOOL'				=> 'Boolean (ja/nee)',
	'FIELD_DATE'				=> 'Datum',
	'FIELD_DESCRIPTION'			=> 'Veld omschrijving',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'De uitleg van het veld zoals getoond aan de gebruiker.',
	'FIELD_DROPDOWN'			=> 'Dropdown box',
	'FIELD_IDENT'				=> 'Veld identificatie',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'De gekozen identificatie voor het veld bestaat al. Kies een andere naam a.u.b.',
	'FIELD_IDENT_EXPLAIN'		=> 'De veldnaam wordt gebruikt om het profielveld zowel in de database als in de templates te herkennen.',
	'FIELD_INT'					=> 'Nummers',
	'FIELD_LENGTH'				=> 'Lengte van het veld',
	'FIELD_NOT_FOUND'			=> 'Profielveld werd niet gevonden.',
	'FIELD_STRING'				=> 'Enkel tekstveld',
	'FIELD_TEXT'				=> 'Tekstruimte',
	'FIELD_TYPE'				=> 'Veldtype',
	'FIELD_TYPE_EXPLAIN'		=> 'Het later aanpassen van het veldtype is onmogelijk.',
	'FIELD_VALIDATION'			=> 'Veldvalidatie',
	'FIRST_OPTION'				=> 'Eerste keuze',

	'HIDE_PROFILE_FIELD'			=> 'Verberg profielveld',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Alleen administrators en moderators kunnen dit veld zien en invullen. Als voor deze keuze wordt gekozen, zal het profielveld alleen worden weergegeven gebruikersprofielen.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Veld identificatie kan alleen kleine letters en _ bevatten',
	'INVALID_FIELD_IDENT_LEN'	=> 'Veld identificatie kan maximum 17 tekens lang zijn.',
	'ISO_LANGUAGE'				=> 'Taal [%s]',

	'LANG_SPECIFIC_OPTIONS'	=> 'Specifieke taalkeuzes [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'	=> 'Maximum aantal tekens',
	'MAX_FIELD_NUMBER'	=> 'Hoogst toegestane',
	'MIN_FIELD_CHARS'	=> 'Minimum aantal tekens',
	'MIN_FIELD_NUMBER'	=> 'Minst toegestane',

	'NO_FIELD_ENTRIES'			=> 'Geen ingevulde waarden',
	'NO_FIELD_ID'				=> 'Geen veld id gespecificeerd.',
	'NO_FIELD_TYPE'				=> 'Geen veld type gespecificeerd.',
	'NO_VALUE_OPTION'			=> 'Keuze gelijk aan de niet ingevulde waarde',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Waarde voor een niet ingevuld veld. Als het veld vereist is zal de gebruiker een foutmelding krijgen indien hij de hier geselecteerde keuze kiest.',
	'NUMBERS_ONLY'				=> 'Alleen cijfers (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Basiskeuzes',
	'PROFILE_FIELD_ACTIVATED'	=> 'Profielveld succesvol geactiveerd.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Profielveld succesvol gedeactiveerd.',
	'PROFILE_LANG_OPTIONS'		=> 'Specifieke taalkeuzes',
	'PROFILE_TYPE_OPTIONS'		=> 'Specifieke profieltype keuzes',

	'RADIO_BUTTONS'				=> 'Radio buttons',
	'REMOVED_PROFILE_FIELD'		=> 'Profielveld succesvol verwijderd.',
	'REQUIRED_FIELD'			=> 'Vereist veld',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Profielveld moet ingevuld worden door de gebruiker. Dit zal het profielveld weergeven bij de registratie en in het gebruikerspaneel.',
	'ROWS'						=> 'Rijen',

	'SAVE'							=> 'Bewaar',
	'SECOND_OPTION'					=> 'Tweede keuze',
	'STEP_1_EXPLAIN_CREATE'			=> 'Je kan hier de eerste basisparameters invullen van je nieuw profielveld. Deze info is nodig in de tweede stap, waar je overige opties kan instellen.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Hier kan je de basisparameters van je profielveld wijzigen. De relevante opties worden in de tweede stap herberekend.',
	'STEP_1_TITLE_CREATE'			=> 'Voeg profielveld toe',
	'STEP_1_TITLE_EDIT'				=> 'Wijzig profielveld',
	'STEP_2_EXPLAIN_CREATE'			=> 'Hier kan je standaardopties, die je eventueel wilt wijzigen, defini&euml;ren.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Hier kan je enkele standaardopties wijzigen.<br /><strong>Veranderingen aan profielvelden zullen geen effect hebben op bestaande profielvelden ingevuld door jouw gebruikers</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Specifieke profieltype keuzes',
	'STEP_2_TITLE_EDIT'				=> 'Specifieke profieltype keuzes',
	'STEP_3_EXPLAIN_CREATE'			=> 'Vanaf je meer dan 1 taal hebt ge&iuml;nstalleerd, zal je de resterende taalitems ook moeten invullen. Het profielveld zal werken met de standaardtaal, het is mogelijk om later de resterende taalitems aan te vullen.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Vanaf je meer dan 1 taal hebt ge&iuml;nstalleerd, kan je nu ook de resterende taalitems toevoegen of wijzigen. Het profielveld zal werken met de standaardtaal.',
	'STEP_3_TITLE_CREATE'			=> 'Resterende taaldefinities',
	'STEP_3_TITLE_EDIT'				=> 'Taaldefinities',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Vul een standaardzin in om weer te geven, een standaardwaarde. Laat het leeg als het leeg moet worden weergegeven.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Vul een standaardtekst in om weer te geven, een standaardwaarde. Laat het leeg als het leeg moet worden weergegeven.',
	'TRANSLATE'						=> 'Vertaal',

	'USER_FIELD_NAME'	=> 'Veld naam/titel zoals getoond aan de gebruiker',

	'VISIBILITY_OPTION'	=> 'Weergave optie',
));
?>