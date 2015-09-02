<?php
/** 
*
* acp_profile.php [﻿Norwegian Bokmål]
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
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Et eller flere profilfelter er ikke oversatt. Oppgi oversettelsen ved &aring; klikke p&aring; &quot;Oversett&quot;-linken.',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Oversettelsen for dette feltet eksisterer ikke i standardspr&aring;ket.',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Brukeren kan endre feltet i brukerkontrollpanelet.',
	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Merk deg at du kan endre alternativene og legge til nye p&aring; slutten. Du kan ikke legge til alternativer mellom de andre – det kan resultere i feil informasjon for brukerne. Dette kan ogs&aring; skje hvis du sletter mellomliggende alternativer. Sletter du de(t) siste alternativet/-ene, vil de som har valgt dette f&aring; standardvalget.',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Det valgte identifikasjonsnavnet eksisterer allerede. Oppgi et annet navn.',
	'INVALID_FIELD_IDENT_LEN'	=> 'Identifikasjonsnavnet kan ikke v&aelig;re mer enn 17 tegn langt.',
	'TRANSLATE'	=> 'Oversett',
	'ADDED_PROFILE_FIELD'	=> 'Feltet er lagt til.',
	'ALPHA_ONLY'	=> 'Bare bokstaver',
	'ALPHA_SPACERS'	=> 'Bokstaver og mellomrom',
	'ALWAYS_TODAY'	=> 'Dags dato',
	'BOOL_ENTRIES_EXPLAIN'	=> 'Oppgi alternativene n&aring;.',
	'BOOL_TYPE_EXPLAIN'	=> 'Definer typen, enten avkryssingsbokser eller radioknapper.',
	'CHANGED_PROFILE_FIELD'	=> 'Feltet er endret.',
	'CHARS_ANY'	=> 'Alle tegn',
	'CHECKBOX'	=> 'Avkryssingsboks',
	'CP_LANG_DEFAULT_VALUE'	=> 'Standardvalg',
	'CP_LANG_EXPLAIN'	=> 'Beskrivelse',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Beskrivelse av feltet',
	'CP_LANG_NAME'	=> 'Identifikasjonsnavn',
	'CP_LANG_OPTIONS'	=> 'Alternativer',
	'CREATE_NEW_FIELD'	=> 'Legg til nytt felt',
	'COLUMNS'	=> 'Kolonner',
	'DEFAULT_ISO_LANGUAGE'	=> 'Standardspr&aring;k: [%s]',
	'DEFAULT_VALUE'	=> 'Standardvalg',
	'DELETE_PROFILE_FIELD'	=> 'Slett felt',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Er du sikker p&aring; at du vil slette dette feltet?',
	'DISPLAY_AT_PROFILE'	=> 'Vis i profilen',
	'DISPLAY_AT_REGISTER'	=> 'Vis i registreringsskjemaet',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Hvis alternativet er deaktivert, vil det bli vist i registreringsskjemaet.',
	'DISPLAY_PROFILE_FIELD'	=> 'Vis profilfelt',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Profilfeltet vil bli vist sammen med innleggene.',
	'DROPDOWN_ENTRIES_EXPLAIN'	=> 'Oppgi alternativene n&aring; alle p&aring samme linje.',
	'EMPTY_FIELD_IDENT'	=> 'Tomt feltnavn',
	'EMPTY_USER_FIELD_NAME'	=> 'Brukeren f&aring; ikke se noe feltnavn.',
	'ENTRIES'	=> 'Oppf&oslash;ringer',
	'EVERYTHING_OK'	=> 'Alt OK',
	'FIELD_BOOL'	=> 'Boolean (Yes/No)',
	'FIELD_DATE'	=> 'Dato',
	'FIELD_DESCRIPTION'	=> 'Beskrivelse',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Beskrivelsen som vil bli vist for brukerne.',
	'FIELD_DROPDOWN'	=> 'Rullgardinmeny',
	'FIELD_IDENT'	=> 'Identifikasjonsnavn',
	'FIELD_IDENT_EXPLAIN'	=> 'Identifikasjonsnavnet vil bli brukt av deg og vil ikke bli vist for brukerne.',
	'FIELD_INT'	=> 'Siffer',
	'FIELD_LENGTH'	=> 'Feltets lengde',
	'FIELD_NOT_FOUND'	=> 'Profilfeltet ble ikke funnet.',
	'FIELD_STRING'	=> 'Tekstfelt',
	'FIELD_TEXT'	=> 'Tekstomr&aring;de',
	'FIELD_TYPE'	=> 'Felttype',
	'FIELD_TYPE_EXPLAIN'	=> 'Du kan endre felttypen senere.',
	'FIELD_VALIDATION'	=> 'Gyldighet',
	'FIRST_OPTION'	=> 'F&oslash;rste alternativ',
	'HIDE_PROFILE_FIELD'	=> 'Skjul feltet',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Bare administratorer og moderatorer kan se og fylle ut disse feltene. Hvis dette alternativet er deaktivert, vil ogs&aring; brukere kunne fylle ut dette.',
	'INVALID_CHARS_FIELD_IDENT'	=> 'Identifikasjonsnavnet kan kun inneholde sm&aring; bokstaver fra a til z og _.',
	'ISO_LANGUAGE'	=> 'Spr&aring;k: [%s]',
	'LANG_SPECIFIC_OPTIONS'	=> 'Bestemte spr&aring;kvalg: [<b>%s</b>]',
	'MAX_FIELD_CHARS'	=> 'Maksimalt antall tegn',
	'MAX_FIELD_NUMBER'	=> 'H&oslash;yeste tillatte tall',
	'MIN_FIELD_CHARS'	=> 'Minimalt antall tegn',
	'MIN_FIELD_NUMBER'	=> 'Laveste tillatte tall',
	'NO_FIELD_ENTRIES'	=> 'Ingen oppf&oslash;ringer er definert.',
	'NO_FIELD_ID'	=> 'Ingen felter er spesifisert.',
	'NO_FIELD_TYPE'	=> 'Ingen felttyper er definert.',
	'NO_VALUE_OPTION'	=> 'Ikke tillatt valg.',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Ikke tillatte valg. Brukeren f&aring; en advarsel hvis han/hun skriver dette.',
	'NUMBERS_ONLY'	=> 'Bare siffer (0-9)',
	'PREVIEW_PROFILE_FIELD'	=> 'Forh&aring;ndsvis felt',
	'PROFILE_BASIC_OPTIONS'	=> 'Basiske alternativer',
	'PROFILE_FIELD_ACTIVATED'	=> 'Profilfeltet er aktivert.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Profilfetet er deaktivert.',
	'PROFILE_LANG_OPTIONS'	=> 'Bestemte spr&aring;kvalg',
	'PROFILE_TYPE_OPTIONS'	=> 'Bestemte profiltypevalg',
	'RADIO_BUTTONS'	=> 'Radioknapper',
	'REMOVED_PROFILE_FIELD'	=> 'Profilfeltet er slettet.',
	'REQUIRED_FIELD'	=> 'Required Field',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Force profile field to be filled out or specified by user. This will display the profile field at registration too.',
	'ROWS'	=> 'Rader',
	'SAVE'	=> 'Lagre',
	'SECOND_OPTION'	=> 'Andre alternativ',
	'STEP_1_EXPLAIN_CREATE'	=> 'Her kan du endre feltets f&oslash;rste basiske parametre. Denne informasjonen er n&oslash;dvendig for neste steg, der du kan forh&aring;ndsvise feltet.',
	'STEP_1_EXPLAIN_EDIT'	=> 'Here you can change the basic parameters of your profile field. The relevant options are re-calculated within the second step, where you are able to preview and test the changed settings.',
	'STEP_1_TITLE_CREATE'	=> 'Legg til profilfelt',
	'STEP_1_TITLE_EDIT'	=> 'Endre profilfelt',
	'STEP_2_EXPLAIN_CREATE'	=> 'Her kan du definere hovedalternativer. Etterp&aring; kan du forh&aring;ndsvise feltet slik det vil bli presentert for brukeren. Ta deg tid til &aring; bestemme hvordan feltet skal se ut.',
	'STEP_2_EXPLAIN_EDIT'	=> 'Her kan du definere hovedalternativer. Etterp&aring; kan du forh&aring;ndsvise feltet slik det vil bli presentert for brukeren. Ta deg tid til &aring; bestemme hvordan feltet skal se ut.<br /><b>Merk deg at endringer i feltene ikke vil p&aring;virke brukernes valg.</b>',
	'STEP_2_TITLE_CREATE'	=> 'Bestemte profilvalg',
	'STEP_2_TITLE_EDIT'	=> 'Bestemte profilvalg',
	'STEP_3_EXPLAIN_CREATE'	=> 'Siden du har flere spr&aring; installert, m&aring; du oppgi ord for hvert av disse. Feltene vil virke selv om standardspr&aring;ket er deaktivert og du kan endre dette senere.',
	'STEP_3_EXPLAIN_EDIT'	=> 'Siden du har flere spr&aring; installert, m&aring; du oppgi ord for hvert av disse. Feltene vil virke selv om standardspr&aring;ket er deaktivert.',
	'STEP_3_TITLE_CREATE'	=> 'Gjenst&aring;ende spr&aring;kdefinisjoner',
	'STEP_3_TITLE_EDIT'	=> 'Spr&aring;kdefinisjoner',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Oppgi standardvalget. La det st&aring; tomt hvis du ikke vil ha noe standardvalg.',
	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Oppgi standardvalget. La det st&aring; tomt hvis du ikke vil ha noe standardvalg.',
	'UPDATE_PREVIEW'	=> 'Oppdater forh&aring;ndsvisning',
	'USER_FIELD_NAME'	=> 'Feltnavnet som vil bli presentert for brukeren',
	'VISIBILITY_OPTION'	=> 'Synlighetsalternativ',
));

?>