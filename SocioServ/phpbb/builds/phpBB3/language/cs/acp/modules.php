<?php
/** 
*
* acp_modules [Česky]
*
* @package language
* @version $Id: modules.php,v 1.12 2007/01/26 16:09:16 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Zde můžete spravovat všechny druhy modulů. Berte na vědomí, že Ovládací panely mají trí-stupňovou strukturu (Kategorie -> Kategorie -> Modul) , kdežto ostatní mají 2-stupňovou strukturu (Kategorie -> Modul), která musí být dodržena. Upozorňujeme vás, že se můžete odříznout od ovládání, pokud vypnete nebo smažete samotný modul, starající se o správu modulů.',
	'ADD_MODULE'					=> 'Přidat modul',
	'ADD_MODULE_CONFIRM'			=> 'Opravdu chcete přidat vybraný modul s vybraným režimem?',
	'ADD_MODULE_TITLE'				=> 'Přidat modul',

	'CANNOT_REMOVE_MODULE'	=> 'Nelze odstranit modul, má další podřazené moduly. Prosíme nejdříve přesuňte nebo odstraňte všechny podražené moduly.',
	'CATEGORY'				=> 'Kategorie',
	'CHOOSE_MODE'			=> 'Vybrat režim modulu',
	'CHOOSE_MODE_EXPLAIN'	=> 'Zvolte režim, který bude modul používat.',
	'CHOOSE_MODULE'			=> 'Vybrat modul',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Vyberte soubor, který bude volaný tímto modulem.',
	'CREATE_MODULE'			=> 'Vytvořit nový modul',

	'DEACTIVATED_MODULE'	=> 'Deaktivovat modul',
	'DELETE_MODULE'			=> 'Odstranit modul',
	'DELETE_MODULE_CONFIRM'	=> 'Opravdu chcete odstranit tento modul?',

	'EDIT_MODULE'			=> 'Upravit modul',
	'EDIT_MODULE_EXPLAIN'	=> 'Zde můžete vložit specifická nastavení modulu',

	'HIDDEN_MODULE'			=> 'Skrytý modul',

	'MODULE'					=> 'Modul',
	'MODULE_ADDED'				=> 'Modul byl úspěšně přidán.',
	'MODULE_DELETED'			=> 'Modul byl úspěšně odstraněn.',
	'MODULE_DISPLAYED'			=> 'Zobrazovaný modul',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Pokud si nepřejete zobrazovat tento modul, ale chcete ho používát, zvolte Ne.',
	'MODULE_EDITED'				=> 'Modul byl úspěšně upraven.',
	'MODULE_ENABLED'			=> 'Modul povolen',
	'MODULE_LANGNAME'			=> 'Název modulu',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Vložte zobrazovaný název modulu. Použijte jazykovou konstantu, pokud je jeho název uložen v jazykových souborech.',
	'MODULE_TYPE'				=> 'Druh modulu',

	'NO_CATEGORY_TO_MODULE'	=> 'Nelze změnit kategorii na modul. Prosíme nejdříve odstraňte/přesuňte všechny podřazené moduly.',
	'NO_MODULE'				=> 'Nebyl nalezen žádný modul.',
	'NO_MODULE_ID'			=> 'Nebylo zovleno žádné id modulu.',
	'NO_MODULE_LANGNAME'	=> 'Nebyl zvolen název modulu.',
	'NO_PARENT'				=> 'Nemá nadřazené',

	'PARENT'				=> 'Nadřazený',
	'PARENT_NO_EXIST'		=> 'Nadřazený modul/kategorie neexistuje.',

	'SELECT_MODULE'			=> 'Vyberte modul',
));

?>