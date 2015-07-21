<?php
/** 
*
* acp_profile [Swedish] (version 0.5.0 - 3.0.RC5)
*
* @package language
* @version $Id: profile.php,v 1.11 2007/08/25 14:15:13 virtuality Exp $
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Lade till nytt eget profilfält.',
	'ALPHA_ONLY'			=> 'Endast alfanumeriska',
	'ALPHA_SPACERS'			=> 'Alfanumeriska och mellanslag',
	'ALWAYS_TODAY'			=> 'Alltid det aktuella datumet',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Ange dina alternativ nu.',
	'BOOL_TYPE_EXPLAIN'		=> 'Ange typ, antingen en kryssruta eller radioknappar. En kryssruta kommer endast att visas om den har kryssats i av användaren. I det fallet så kommer det <strong>andra</strong> språkalternativet att användas. Radioknappar kommer att visas oavsett deras värde.',

	'CHANGED_PROFILE_FIELD'		=> 'Ändrade profilfältet.',
	'CHARS_ANY'					=> 'Alla tecken',
	'CHECKBOX'					=> 'Kryssruta',
	'COLUMNS'					=> 'Kolumner',
	'CP_LANG_DEFAULT_VALUE'		=> 'Standardvärde',
	'CP_LANG_EXPLAIN'			=> 'Fältbeskrivning',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Beskrivning för detta fält som visas för användaren.',
	'CP_LANG_NAME'				=> 'Fältnamn/titel som visas för användaren',
	'CP_LANG_OPTIONS'			=> 'Alternativ',
	'CREATE_NEW_FIELD'			=> 'Skapa nytt fält',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Minst ett eget profilfält har ännu inte översatts. Ange informationen som krävs genom att klicka på “Översätt”-länken.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Standardspråk [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Språkposterna för standardspråket har inte fyllts i för detta profilfält.',
	'DEFAULT_VALUE'					=> 'Standardvärde',
	'DELETE_PROFILE_FIELD'			=> 'Ta bort profilfält',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Är du säker på att du vill ta bort detta profilfält?',
	'DISPLAY_AT_PROFILE'			=> 'Visa i kontrollpanelen',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Användaren kan ändra detta profilfält via kontrollpanelen.',
	'DISPLAY_AT_REGISTER'			=> 'Visa under registreringen',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Om detta alternativ aktiveras kommer fältet att visas under registreringen och kan sedan ändras i kontrollpanelen.',
	'DISPLAY_PROFILE_FIELD'			=> 'Visa profilfält',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Profilfältet kommer att visas på alla ställen som är tillåtna i belastningsinställningarna. Om du sätter detta till “nej” så kommer fältet att döljas i trådar, profiler och i medlemslistan.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Ange dina alternativ nu, varje alternativ på en rad.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Observera att du kan ändra dina alternativs text och kan också lägga till nya inställningar till slutet. Det rekommenderas inte att lägga till nya alternativ mellan de som redan finns - detta kan leda till att felaktiga alternativ tilldelas dina användare. Detta kan också hända om du tar bort alternativ i mitten. Att ta bort alternativ från slutet resulterar i att användare som har detta alternativ valt återgår till standardvalet.',
	'EMPTY_FIELD_IDENT'				=> 'Identifikation för tomt fält',
	'EMPTY_USER_FIELD_NAME'			=> 'Ange ett fältnamn/titel',
	'ENTRIES'						=> 'Poster',
	'EVERYTHING_OK'					=> 'Allting OK',

	'FIELD_BOOL'				=> 'Boolesk (Ja/Nej)',
	'FIELD_DATE'				=> 'Datum',
	'FIELD_DESCRIPTION'			=> 'Fältbeskrivning',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Beskrivningen för detta fält som visas för användaren.',
	'FIELD_DROPDOWN'			=> 'Listruta',
	'FIELD_IDENT'				=> 'Fältidentifikation',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Den valda fältidentifikationen finns redan. Välj ett annat namn.',
	'FIELD_IDENT_EXPLAIN'		=> 'Fältidentifikationen är ett namn för att identifiera profilfältet inom databasen och i mallarna.',
	'FIELD_INT'					=> 'Nummer',
	'FIELD_LENGTH'				=> 'Längd på inmatningsruta',
	'FIELD_NOT_FOUND'			=> 'Profilfältet hittades inte.',
	'FIELD_STRING'				=> 'Enkelt textfält',
	'FIELD_TEXT'				=> 'Textyta',
	'FIELD_TYPE'				=> 'Fälttyp',
	'FIELD_TYPE_EXPLAIN'		=> 'Du kan inte byta fälttyp senare.',
	'FIELD_VALIDATION'			=> 'Fältbekräftning',
	'FIRST_OPTION'				=> 'Första alternativet',

	'HIDE_PROFILE_FIELD'			=> 'Dölj profilfält',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Endast administratörer och moderatorer kan se/fylla i detta profilfält. Om detta alternativ aktiveras kommer profilfältet endast visas i användarnas profiler.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Fältidentifikationen kan endast innehålla små bokstäver a-z och _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Fältidentifikationen kan endast vara upp till 17 tecken lång',
	'ISO_LANGUAGE'				=> 'Språk [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Språkspecifika inställningar [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Maximalt antal tecken',
	'MAX_FIELD_NUMBER'		=> 'Högsta tillåtna nummer',
	'MIN_FIELD_CHARS'		=> 'Minsta antal tecken',
	'MIN_FIELD_NUMBER'		=> 'Lägsta tillåtna nummer',

	'NO_FIELD_ENTRIES'			=> 'Inga poster definierade',
	'NO_FIELD_ID'				=> 'Inget fält-ID angivet.',
	'NO_FIELD_TYPE'				=> 'Ingen fälttyp angiven.',
	'NO_VALUE_OPTION'			=> 'Alternativ som är likvärdigt med ej angivet värde',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Om detta fält är obligatoriskt kommer användaren få ett felmeddelande om han väljer alternativet som valts här.',
	'NUMBERS_ONLY'				=> 'Endast siffror (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Grundläggande alternativ',
	'PROFILE_FIELD_ACTIVATED'	=> 'Profilfältet aktiverades.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Profilfältet inaktiverades.',
	'PROFILE_LANG_OPTIONS'		=> 'Språkspecifika alternativ',
	'PROFILE_TYPE_OPTIONS'		=> 'Fälttypsspecifika alternativ',

	'RADIO_BUTTONS'				=> 'Radioknappar',
	'REMOVED_PROFILE_FIELD'		=> 'Tog bort profilfältet.',
	'REQUIRED_FIELD'			=> 'Obligatoriskt fält',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Tvingar användaren att fylla i detta profilfält. Detta kommer att visa profilfältet under registreringen och i kontrollpanelen.',
	'ROWS'						=> 'Rader',

	'SAVE'							=> 'Spara',
	'SECOND_OPTION'					=> 'Andra alternativet',
	'STEP_1_EXPLAIN_CREATE'			=> 'Här kan du ange de första grundläggande parametrarna för ditt nya profilfält. Denna information krävs för att kunna gå vidare till nästa steg där du kan ställa in återstående alternativ och ändra ditt profilfält ännu mer.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Här kan du ange de grundläggande parametrarna för ditt profilfält. De relevanta alternativen beräknas om i nästa steg.',
	'STEP_1_TITLE_CREATE'			=> 'Lägg till profilfält',
	'STEP_1_TITLE_EDIT'				=> 'Ändra profilfält',
	'STEP_2_EXPLAIN_CREATE'			=> 'Här kan du definiera några vanliga alternativ som du kanske vill justera.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Här kan du ändra några vanliga alternativ.<br /><strong>Observera att ändringar som görs till profilfält inte kommer att påverka existerande profilfält som har angivits av dina användare.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Fälttypsspecifika alternativ',
	'STEP_2_TITLE_EDIT'				=> 'Fälttypsspecifika alternativ',
	'STEP_3_EXPLAIN_CREATE'			=> 'Eftersom att du har fler än ett forumspråk installerat så måste du fylla i de återstående språkposterna också. Profilfältet kommer att fungera med standardspråket aktiverat, du kan fylla i de återstående språkposterna senare också.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Eftersom att du har fler än ett forumspråk installerat kan du nu ändra eller lägga till återstående språkposter. Profilfältet kommer att fungera med standardspråket aktiverat.',
	'STEP_3_TITLE_CREATE'			=> 'Återstående språkdefinitioner',
	'STEP_3_TITLE_EDIT'				=> 'Språkdefinitioner',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Ange en standardfras som ska visas, ett standardvärde. Lämna tomt om du vill visa det tomt från första början.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Ange en standardtext som ska visas, ett standardvärde. Lämna tomt om du vill visa det tomt från första början.',
	'TRANSLATE'						=> 'Översätt',

	'USER_FIELD_NAME'	=> 'Fältnamn/titel som visas för användaren',

	'VISIBILITY_OPTION'				=> 'Visningsalternativ',
));

?>