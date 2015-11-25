<?php
/**
*
* acp_profile [Danish]
*
* @package language
* @version $Id: profile.php,v 1.25 2007/07/27 15:00:10 kellanved Exp $
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Tilpasset profilfelt tilføjet.',
	'ALPHA_ONLY'			=> 'Kun alfanumerisk',
	'ALPHA_SPACERS'			=> 'Alfanumerisk og mellemrum',
	'ALWAYS_TODAY'			=> 'Altid nuværende dato',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Indtast dine indstillinger nu',
	'BOOL_TYPE_EXPLAIN'		=> 'Definér typen, enten et afkrydsningsfelt eller radioknapper. Afkrydsningsfeltet vises kun hvis det er afkrydset for en given bruger, og her vil den <strong>anden</strong> sprogindstilling blive anvendt. Radioknapper vises under alle omstændigheder.',

	'CHANGED_PROFILE_FIELD'		=> 'Korrekt ændret profilfelt.',
	'CHARS_ANY'					=> 'Ethvert tegn',
	'CHECKBOX'					=> 'Afkrydsningsfelt',
	'COLUMNS'					=> 'Kolonner',
	'CP_LANG_DEFAULT_VALUE'		=> 'Standardværdi',
	'CP_LANG_EXPLAIN'			=> 'Feltbeskrivelse',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Forklaringen på feltet som den vises til brugere.',
	'CP_LANG_NAME'				=> 'Feltnavn/titel som brugeren præsenteres for',
	'CP_LANG_OPTIONS'			=> 'Indstillinger',
	'CREATE_NEW_FIELD'			=> 'Opret nyt felt',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Mindst et tilføjet felt mangler at blive oversat. Angiv venligst den nødvendige information ved at klikke på "Oversæt" linket.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Standardsprog [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Sprogindstillinger for standardsprog er ikke udfyldt for dette profilfelt.',
	'DEFAULT_VALUE'					=> 'Standardværdi',
	'DELETE_PROFILE_FIELD'			=> 'Fjern profilfelt',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Er du sikker på at du vil slette dette profilfelt?',
	'DISPLAY_AT_PROFILE'			=> 'Vis i bruger kontrolpanel',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Brugeren kan ændre dette profilfelt fra bruger kontrolpanelet.',
	'DISPLAY_AT_REGISTER'			=> 'Vis på tilmeldingsskærmbilledet',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Hvis denne indstilling er slået til, vil feltet blive vist på tilmeldingsskærmbilledet og kan ændres fra bruger kontrolpanelet.',
	'DISPLAY_PROFILE_FIELD'			=> 'Vis profilfelt',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Profilfeltet vises alle steder specificeret under "Belastning". Hvis du vælger "Nej" her, vises feltet ingen af stederne.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Indtast nu valgmulighederne, hver mulighed på en separat linie.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Bemærk at du kan ændre teksterne og tilføje nye muligheder til enden af listen senere. Det frarådes at tilføje nye muligheder midt i listen af muligheder - det kan resultere i at forkerte indstillinger tildeles til brugerne. Hvis du fjerner muligheder midt i listen kan det samme ske. Ved fjernelse af muligheder fra enden af listen vil brugere med disse indstillinger i stedet få tildelt standardværdien.',
	'EMPTY_FIELD_IDENT'				=> 'Tom feltidentifikation',
	'EMPTY_USER_FIELD_NAME'			=> 'Indtast venligst et feltnavn/titel',
	'ENTRIES'						=> 'Linier',
	'EVERYTHING_OK'					=> 'Alt OK',

	'FIELD_BOOL'				=> 'Boolsk udtryk(ja/nej)',
	'FIELD_DATE'				=> 'Dato',
	'FIELD_DESCRIPTION'			=> 'Feltbeskrivelse',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Forklaringen på feltet som den vises til brugere.',
	'FIELD_DROPDOWN'			=> 'Rullegardinmenu',
	'FIELD_IDENT'				=> 'Feltidentifikation',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Den valgte feltidenfikation eksisterer allerede. Vælg venligst et andet navn.',
	'FIELD_IDENT_EXPLAIN'		=> 'Feltidentifikationen er et entydigt navn til at identificere profilfeltet i databasen og i skabeloner.',
	'FIELD_INT'					=> 'Tal',
	'FIELD_LENGTH'				=> 'Længde på indtastningsfelt',
	'FIELD_NOT_FOUND'			=> 'Profilfelt ikke fundet.',
	'FIELD_STRING'				=> 'Enkelt tekstfelt',
	'FIELD_TEXT'				=> 'Tekstområde',
	'FIELD_TYPE'				=> 'Felttype',
	'FIELD_TYPE_EXPLAIN'		=> 'Du kan ikke skifte felttypen senere.',
	'FIELD_VALIDATION'			=> 'Feltvalidering',
	'FIRST_OPTION'				=> 'Første mulighed',

	'HIDE_PROFILE_FIELD'			=> 'Skjul profilfelt',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Kun administratorer og redaktører kan se/udfylde dette profilfelt. Hvis denne indstilling er slået til, vil profilfeltet kun blive vist i brugerens profil.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Feltidentifikation kan kun indeholde a-z (ikke æ, ø og å) med små bogstaver og _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Feltidentifikationen må ikke overstige 17 tegn',
	'ISO_LANGUAGE'				=> 'Sprog [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Sprogspecifikke indstillinger [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Maksimalt antal tegn',
	'MAX_FIELD_NUMBER'		=> 'Højeste tilladte tal',
	'MIN_FIELD_CHARS'		=> 'Minimum antal tegn',
	'MIN_FIELD_NUMBER'		=> 'Lavest tilladte tal',

	'NO_FIELD_ENTRIES'			=> 'Ingen valgmuligheder defineret.',
	'NO_FIELD_ID'				=> 'Intet felt-ID angivet.',
	'NO_FIELD_TYPE'				=> 'Ingen felttype angivet.',
	'NO_VALUE_OPTION'			=> 'Mulighed svarende til ingen indtastet værdi',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Værdi for ingen indtastning. Hvis feltet er påkrævet, vil brugere få en fejlmeddelelse, hvis denne værdi vælges.',
	'NUMBERS_ONLY'				=> 'Kun tal (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Basisindstillinger',
	'PROFILE_FIELD_ACTIVATED'	=> 'Profilfelt aktiveret.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Profilfelt deaktiveret',
	'PROFILE_LANG_OPTIONS'		=> 'Sprogspecifikke indstillinger',
	'PROFILE_TYPE_OPTIONS'		=> 'Profiltypespecifikke indstillinger',

	'RADIO_BUTTONS'				=> 'Radioknapper',
	'REMOVED_PROFILE_FIELD'		=> 'Profilfelt fjernet.',
	'REQUIRED_FIELD'			=> 'Krævet felt',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Gennemtving brugers udfyldning eller angivelse af feltet. Dette vil vise feltet ved tilmelding og i bruger kontrolpanelet.',
	'ROWS'						=> 'Rækker',

	'SAVE'							=> 'Gem',
	'SECOND_OPTION'					=> 'Anden indstilling',
	'STEP_1_EXPLAIN_CREATE'			=> 'Her kan du indtaste de første grundlæggende parametre for dit nye profilfelt. Denne information er nødvendig for det næste trin, hvor du kan sætte de resterende indstillinger og tilpasse profilfeltet yderligere.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Her kan du ændre basisparametrene for dit profilfelt. De relevante indstillinger genberegnes i andet trin.',
	'STEP_1_TITLE_CREATE'			=> 'Tilføj profilfelt',
	'STEP_1_TITLE_EDIT'				=> 'Redigér profilfelt',
	'STEP_2_EXPLAIN_CREATE'			=> 'Her kan du definere nogle generelle indstillinger, som du har mulighed for at ændre på.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Her kan du ændre nogle generelle indstillinger.<br /><strong>Bemærk venligst, at ændringer i profilfelter ikke påvirker eksisterende profilfelter allerede indtastet af dine brugere.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Profiltypespecifikke indstillinger',
	'STEP_2_TITLE_EDIT'				=> 'Profiltypespecifikke indstillinger',
	'STEP_3_EXPLAIN_CREATE'			=> 'Da du har mere end et sprog installeret, skal du også udfylde de manglende sproglinier. Profilfeltet vil virke med det valgte standardsprog, så du kan også udfylde de resterende sproglinier senere.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Da du har mere end et sprog installeret, kan du nu også ændre eller tilføje de tilbageværende sproglinier. Profilfeltet vil virke med boardets standardsprog.',
	'STEP_3_TITLE_CREATE'			=> 'Tilbageværende sprogdefinitioner',
	'STEP_3_TITLE_EDIT'				=> 'Sprogdefinitioner',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Indtast en standardfrase der skal vises, en standardværdi. Lad feltet være tomt, hvis du vil vise det som tomt som udgangspunkt.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Indtast en standardtekst der skal vises, en standardværdi. Lad feltet være tomt, hvis du vil vise det som tomt som udgangspunkt.',
	'TRANSLATE'						=> 'Oversæt',

	'USER_FIELD_NAME'	=> 'Feltnavn/titel som brugeren ser det',

	'VISIBILITY_OPTION'				=> 'Synlighedsindstilling',
));

?>