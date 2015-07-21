<?php
/**
*
* acp_profile.php [Slovak]
*
* @package language
* @version $Id: profile.php,v 1.25 2007/07/27 15:00:10 kellanved Exp $
* @copyright (c) 2007 phpBB Group
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
	'ADDED_PROFILE_FIELD'	=> 'Vlastné políčko v profile bolo úspešne pridané.',
	'ALPHA_ONLY'	=> 'Iba alfanumerické znaky',
	'ALPHA_SPACERS'	=> 'Alfanumerické znaky a medzery',
	'ALWAYS_TODAY'	=> 'Vždy aktuálny dátum',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Tu zadajte možnosti',
	'BOOL_TYPE_EXPLAIN'		=> 'Zvoľte typ, buď začiarkavacie pole alebo prepínač. Hodnota začiarkavacieho poľa bude zobrazená len v prípade, ak je políčko začiarknuté pre daného používateľa. V tom prípade bude použitý jazykový kľúč <strong>Druhá možnosť</strong>. Hodnota prepínača bude zobrazená nezávisle od jeho hodnoty.',

	'CHANGED_PROFILE_FIELD'	=> 'Políčko profilu bolo úspešne zmenené.',
	'CHARS_ANY'	=> 'Akýkoľvek znak',
	'CHECKBOX'	=> 'Začiarkavacie pole',
	'COLUMNS'	=> 'Stĺpce',
	'CP_LANG_DEFAULT_VALUE'	=> 'predvolené hodnota',
	'CP_LANG_EXPLAIN'	=> 'Popis poľa',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Vysvetlenie poľa pre používateľa',
	'CP_LANG_NAME'	=> 'Názov/popis poľa zobrazený používateľovi',
	'CP_LANG_OPTIONS'	=> 'Možnosti',
	'CREATE_NEW_FIELD'	=> 'Vytvoriť nové políčko',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Minimálne jedno vlastné políčko nebola preložené. Zadajte potrebné informácie kliknutím na odkaz &quot;Preložiť&quot;.',

	'DEFAULT_ISO_LANGUAGE'	=> 'Základný jazyk [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Jazykové kľúče pre základný jazyk neboli pre toto políčko vyplnené.',
	'DEFAULT_VALUE'	=> 'Predvolená hodnota',
	'DELETE_PROFILE_FIELD'	=> 'Odstrániť políčko profilu',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Naozaj chcete odstrániť toto políčko?',
	'DISPLAY_AT_PROFILE'	=> 'Zobraziť v Ovládacom paneli používateľa',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Používateľ môže meniť hodnotu políčka v Ovládacom paneli používateľa.',
	'DISPLAY_AT_REGISTER'	=> 'Zobraziť pri registrácii',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Pokiaľ je táto možnosť povolená, políčko bude zobrazené aj pri registrácii a jeho hodnota môže byť zmenená v Ovládacom paneli používateľa.',
	'DISPLAY_PROFILE_FIELD'	=> 'Zobraziť políčko profilu',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Políčko bude zobrazené na všetkých miestach povolených v nastaveniach zaťaženia servera. Nastavením tejto voľby na "nie" skryjete políčko zo stránok tém/fór/zozname používateľov.',
	'DROPDOWN_ENTRIES_EXPLAIN'	=> 'Zadajte možnosti, každú možnosť na nový riadok.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Majte na pamäti, že môžete meniť názvy a popisy možností a pridávať ďalšie na koniec. Nie je odporúčané pridávať polia medzi už existujúce položky, mohlo by to spôsobiť priradenie nesprávnej možnosti používateľom. Toto by sa taktiež mohlo stať, pokiaľ odstránite niektorú z možností uprostred. Po odstránení poslednej možnosti je používateľom, ktorí ju mali nastavenú, vrátená predvolená hodnota.',
	'EMPTY_FIELD_IDENT'	=> 'Označenie prázdneho políčka',
	'EMPTY_USER_FIELD_NAME'	=> 'Prosím, zadajte názov/popis políčka',
	'ENTRIES'	=> 'Možnosti',
	'EVERYTHING_OK'	=> 'Všetko v poriadku',

	'FIELD_BOOL'				=> 'Logická hodnota (Áno/Nie)',
 	'FIELD_DATE'	=> 'Dátum',
	'FIELD_DESCRIPTION'	=> 'Popis poľa',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Vysvetlenie políčka, ktoré bude zobrazené používateľom.',
	'FIELD_DROPDOWN'	=> 'Rozbaľovacia ponuka',
	'FIELD_IDENT'	=> 'Označenie políčka',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Vybrané označenie políčka už existuje. Prosím, zadajte iné.',
	'FIELD_IDENT_EXPLAIN'	=> 'Označenie políčka je názov, pod ktorým bude uložené v databáze a štýloch.',
	'FIELD_INT'	=> 'Číselné hodnoty',
	'FIELD_LENGTH'	=> 'Dĺžka vstupného poľa',
	'FIELD_NOT_FOUND'	=> 'Políčko profilu nebolo nájdené.',
	'FIELD_STRING'	=> 'Jednoduché textové políčko',
	'FIELD_TEXT'	=> 'Vstupné pole',
	'FIELD_TYPE'	=> 'Druh poľa',
	'FIELD_TYPE_EXPLAIN'	=> 'Neskôr nie je možné zmeniť typ poľa.',
	'FIELD_VALIDATION'	=> 'Potvrdenie položky',
	'FIRST_OPTION'	=> 'Prvá možnosť',

	'HIDE_PROFILE_FIELD'	=> 'Skryť políčko profilu',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Iba administrátori a moderátori môžu vidieť/upravovať toto políčko. Pokiaľ je toto povolené, táto položka bude zobrazená iba v profiloch používateľov',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Označené pole môže obsahovať iba malé a-z a _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Označené pole môže mať najviac 17 znakov',
	'ISO_LANGUAGE'	=> 'Jazyk [%s]',

	'LANG_SPECIFIC_OPTIONS'	=> 'Špecifické nastavenie jazyka [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'	=> 'Maximálny počet znakov',
	'MAX_FIELD_NUMBER'	=> 'Najvyššie povolené číslo',
	'MIN_FIELD_CHARS'	=> 'Minimálny počet znakov',
	'MIN_FIELD_NUMBER'	=> 'Najmenšie povolené číslo',

	'NO_FIELD_ENTRIES'	=> 'Neboli zadané žiadne záznamy',
	'NO_FIELD_ID'	=> 'Nebolo zvolené žiadne id',
	'NO_FIELD_TYPE'	=> 'Nebol určený žiadny druh položky',
	'NO_VALUE_OPTION'	=> 'Možnosť zhodná s nezadanou hodnotou',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Hodnota v prípade nevyplnenia políčka. Ak je políčko povinné, používateľ bude upozornený v prípade, že zvolí tu označenú možnosť.',
	'NUMBERS_ONLY'	=> 'Iba čísla (0-9)',

	'PROFILE_BASIC_OPTIONS'	=> 'Základné nastavenia',
	'PROFILE_FIELD_ACTIVATED'	=> 'Políčko profilu bola úspešne aktivované.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Položka profilu bola úspešne deaktivovaná.',
	'PROFILE_LANG_OPTIONS'	=> 'Špecifické jazykové nastavenia',
	'PROFILE_TYPE_OPTIONS'	=> 'Špecifické nastavenia typu položky',

	'RADIO_BUTTONS'	=> 'Prepínače',
	'REMOVED_PROFILE_FIELD'	=> 'Políčko bolo úspešne odstránené.',
	'REQUIRED_FIELD'	=> 'Povinné políčko',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Políčko profilu bude musieť byť používateľom vyplnené. Toto zobrazí položku pri registrácii i v Ovládacom paneli používateľa.',
	'ROWS'	=> 'Riadky',

	'SAVE'	=> 'Uložiť',
	'SECOND_OPTION'	=> 'Druhá možnosť',
	'STEP_1_EXPLAIN_CREATE'	=> 'Tu môžete zadať prvé základné parametre vášho políčka. Tieto nastavenia sú potrebné pre druhý krok, kde budete môcť pridať ďalšie možnosti a doladiť ďalšie nastavenia.',
	'STEP_1_EXPLAIN_EDIT'	=> 'Tu môžete zmeniť základné nastavenia pre vaše políčko. Relevantné položky sú prepočítané v druhom kroku.',
	'STEP_1_TITLE_CREATE'	=> 'Pridať políčko profilu',
	'STEP_1_TITLE_EDIT'	=> 'Upraviť políčko profilu',
	'STEP_2_EXPLAIN_CREATE'	=> 'Tu môžete definovať niektoré základné nastavenia.',
	'STEP_2_EXPLAIN_EDIT'	=> 'Tu môžete zmeniť niektoré základné nastavenia.<br /><strong>Majte na pamäti, že zmeny, ktoré robíte s políčkom neovplyvnia údaje doposiaľ zadané používateľmi.</strong>',
	'STEP_2_TITLE_CREATE'	=> 'Špecifické nastavenia typu políčka',
	'STEP_2_TITLE_EDIT'	=> 'Špecifické nastavenia typu políčka',
	'STEP_3_EXPLAIN_CREATE'	=> 'Vzhľadom k tomu, že máte vo fóre nainštalovaných viac jazykov, mali by ste vyplniť názvy políčok i pre ďalšie jazyky. Políčko bude fungovať so základným jazykom, ďalšie jazyky môžete doplniť neskôr.',
	'STEP_3_EXPLAIN_EDIT'	=> 'Vzhľadom k tomu, že máte vo fóre nainštalovaných viac jazykov, môžete vyplniť názvy polí i pre ďalšie jazyky. Políčko bude fungovať so základným jazykom.',
	'STEP_3_TITLE_CREATE'	=> 'Zvyšné definície jazykových kľúčov',
	'STEP_3_TITLE_EDIT'	=> 'Definície jazykových kľúčov',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Zadajte predvolený reťazec, ktorý bude zobrazený a predvolenú hodnotu. Nechajte prázdne, pokiaľ má byť predvolená hodnota nevyplnená.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Zadajte predvolený text, ktorý bude zobrazený a predvolenú hodnotu. Nechajte prázdne, pokiaľ má byť predvolená hodnota taktiež nevyplnená.',
	'TRANSLATE'	=> 'Preložiť',

	'USER_FIELD_NAME'	=> 'Názov/popis políčka zobrazený používateľovi',

	'VISIBILITY_OPTION'	=> 'Možnosti zobrazenia',
));

?>
