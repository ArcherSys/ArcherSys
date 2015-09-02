<?php
/** 
*
* acp_profile.php [Česky]
*
* @package language
* @copyright (c) 2007 phpBB Group 
* @author 2007-03-27 - phpBB.cz team
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
	'ADDED_PROFILE_FIELD'	=> 'Vlastní položka v profilu byla úspěšně přidána.',
	'ALPHA_ONLY'			=> 'Pouze alfanumerické znaky',
	'ALPHA_SPACERS'			=> 'Alfanumerické znaky a mezery',
	'ALWAYS_TODAY'			=> 'Vždy aktuální datum',
	
	'BOOL_ENTRIES_EXPLAIN'	=> 'Vložte svá nastavení zde',
	'BOOL_TYPE_EXPLAIN'		=> 'Zvolte typ, buď zaškrtávací pole nebo přepínatelné tlačítko',
	
	'CHANGED_PROFILE_FIELD'		=> 'Položka profilu úspěšně změněno',
	'CHARS_ANY'					=> 'Jakýkoliv znak',
	'CHECKBOX'					=> 'Zaškrtávací pole',
	'COLUMNS'					=> 'Sloupce',
	'CP_LANG_DEFAULT_VALUE'		=> 'Výchozí hodnota',
	'CP_LANG_EXPLAIN'			=> 'Popis pole',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Vysvětlení pole pro uživatele',
	'CP_LANG_NAME'				=> 'Název/popisek pole zobrazneý uživateli',
	'CP_LANG_OPTIONS'			=> 'Možnosti',
	'CREATE_NEW_FIELD'			=> 'Vytvořit novou položku',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Alespoň jedna vlastní položka ještě nebyla přeložena. Vložte potřebné informace kliknutím na odkaz &quot;Přeložit&quot;.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Výchozí jazyk [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Jazykové klíče pro výchozí jazyk nebyly vyplněny pro tuto položku',
	'DEFAULT_VALUE'					=> 'Výchozí hodnota',
	'DELETE_PROFILE_FIELD'			=> 'Odstranit položku profilu',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Opravdu chcete odstranit tuto položku?',
	'DISPLAY_AT_PROFILE'			=> 'Zobrazit v uživatelském panelu',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'The user is able to change this profile field within the user control panel.',
	'DISPLAY_AT_REGISTER'			=> 'Zobrazit při registraci',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Pokud je tato možnost povolena, položka bude zobrazena i při registraci, a nastavena již tam.',
	'DISPLAY_PROFILE_FIELD'			=> 'Zobrazit položku profilu',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Položka bude zobrazena v tématu/fóru/seznamu uživatelů, pokud je toto povoleno v Nastavení zatížení. Jen zobrazení v profilu je zapnuto při vytvoření.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Vložté možnosti nyní, každou možnost na nový řádek.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Mějte na vědomí, že můžete měnit názvy a popisy možností a přidávat další na konec. Není doporučeno přidávat pole mezi již existující položky, mohlo by to způsobit přiřazení špatné možnosti uživatelům. Toto by se také mohlo stát, pokud odstranítě některou z možností uprostřed. Běžně ale bude po odstranění možnosti uživatelům navrácena výchozí hodnota.',
	'EMPTY_FIELD_IDENT'				=> 'Označení prázdného pole',
	'EMPTY_USER_FIELD_NAME'			=> 'Prosím vložte název/popisek pole',
	'ENTRIES'						=> 'Možnosti',
	'EVERYTHING_OK'				=> 'Všechno v pořádku',

	'FIELD_BOOL'				=> 'Booleovský (Ano/Ne)',
 	'FIELD_DATE'				=> 'Datum',
	'FIELD_DESCRIPTION'			=> 'Popis pole',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Vysvětlení pole, které bude zobrazeno uživatelům',
	'FIELD_DROPDOWN'			=> 'Rolovací menu',
	'FIELD_IDENT'				=> 'Označení pole',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Vybrané označení pole již existuje, vyberte prosím jiné.',
	'FIELD_IDENT_EXPLAIN'		=> 'Označení pole je název, pod kterým bude pole uloženo v databázi a templatech.',
	'FIELD_INT'					=> 'Číselné hodnoty',
	'FIELD_LENGTH'				=> 'Délka vstupního pole',
	'FIELD_NOT_FOUND'			=> 'Pole profilu nebylo nalezeno',
	'FIELD_STRING'				=> 'Jedno textové pole',
	'FIELD_TEXT'				=> 'Rozsáhlé vstupní pole(textarea)',
	'FIELD_TYPE'				=> 'Druh pole',
	'FIELD_TYPE_EXPLAIN'		=> 'Druh pole již není změnitelný',
	'FIELD_VALIDATION'			=> 'Potvrzení položky',
	'FIRST_OPTION'				=> 'První možnost',

	'HIDE_PROFILE_FIELD'			=> 'Skrýt položku profilu',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Jen administrátoři a moderátoři mohou vidět/upravovat tuto položku. Pokud je toto povoleno, tato položka bude zobrazena pouze v profilech uživatelů',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Označení pole může obsahovat jen málé a-z a _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Označení pole může mít nějvíce 17 znaků',
	'ISO_LANGUAGE'				=> 'Jazyk [%s]',

	'LANG_SPECIFIC_OPTIONS'	=> 'Specifická nastavení jazyka [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'	=> 'Maximální počet znaků',
	'MAX_FIELD_NUMBER'	=> 'Nejvyšší povolené číslo',
	'MIN_FIELD_CHARS'	=> 'Minimální počet znaků',
	'MIN_FIELD_NUMBER'	=> 'Nejmenší povolené číslo',

	'NO_FIELD_ENTRIES'			=> 'Nebyly zadány žádné záznamy',
	'NO_FIELD_ID'				=> 'Nebylo zvoleno žádné id ople',
	'NO_FIELD_TYPE'				=> 'Nebyl přiřazen žádný druh položky',
	'NO_VALUE_OPTION'			=> 'Option equal to non entered value',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Value for a non-entry. If the field is required, the user gets an error if he choose the option selected here',
	'NUMBERS_ONLY'				=> 'Jen čísla (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Základní nastavení',
	'PROFILE_FIELD_ACTIVATED'	=> 'Položka profilu úspěšně aktivována',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Položka profilu úspěšně deaktivována',
	'PROFILE_LANG_OPTIONS'		=> 'Specifická nastavení jazyka',
	'PROFILE_TYPE_OPTIONS'		=> 'Specifická nastavení typu položky',

	'RADIO_BUTTONS'				=> 'Radio tlačíka',
	'REMOVED_PROFILE_FIELD'		=> 'Položka úspěšně odstraněna',
	'REQUIRED_FIELD'			=> 'Povinné pole',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Položka profilu bude muset být vyplněna uživatelem. Toto zobrazí položku při registraci i v uživatelském panelu.',
	'ROWS'						=> 'Řady',

	'SAVE'							=> 'Uložit',
	'SECOND_OPTION'					=> 'Druhá možnost',
	'STEP_1_EXPLAIN_CREATE'			=> 'Zdě můžete zvolit první základní parametr vašeho pole. Tyto nastavení jsou potřeba pro druhý krok, kde budete moci přidat další možnosti a doladit další nastavení.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Zdě můžete změnit základní nastavení vaší položky. Relevantní položky jsou přepočítány v druhém kroku, kde budete moci otestovat vygenerovanou položku.',
	'STEP_1_TITLE_CREATE'			=> 'Přidat položku profilu',
	'STEP_1_TITLE_EDIT'				=> 'Upravit položku profilu',
	'STEP_2_EXPLAIN_CREATE'			=> 'Zdě můžete změnit nějaké základní nastavení. Můžete ji upravovat dokud nebudete spokojeni.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Zdě můžete změnit nějaké základní nastavení. Můžete ji upravovat dokud nebudete spokojeni.<br /><strong>Berte na vědomí, že změny, které provedete s položkami neovlivní data doposud zadaní vašimi uživateli.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Specifická nastavení typu',
	'STEP_2_TITLE_EDIT'				=> 'Specifická nastavení typu',
	'STEP_3_EXPLAIN_CREATE'			=> 'Vzhledem k tomu, že máte nainstalován na fóru více než jeden jazyk, měli byste vyplnit názvy polí i pro další jazyky. Položka bude fungovat s výchozím jazykem, další jazyky můžete doplnit později.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Vzhledem k tomu, že máte nainstalován na fóru více než jeden jazyk, měli byste vyplnit názvy polí i pro další jazyky. Položka bude zatím fungovat s výchozím jazykem.',
	'STEP_3_TITLE_CREATE'			=> 'Zbývající definice jazykových klíčů',
	'STEP_3_TITLE_EDIT'				=> 'Definice jazykových klíčů',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Vložte výchozí řetězec, který bude zobrazen, výchozí hodnotu. Nechte prázdné, pokud má být výchozí hodnota také nevyplněná.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Vložte výchozí text, který bude zobrazen, výchozí hodnotu. Nechte prázdné, pokud má být výchozí hodnota také nevyplněná.',
	'TRANSLATE'	=> 'Přeložit',

	'USER_FIELD_NAME'	=> 'Název/popisek pole zobrazený uživatelovi',

	'VISIBILITY_OPTION'	=> 'Možnosti zobrazení',
));

?>