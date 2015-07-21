<?php
/**
*
* acp_modules [Slovak]
*
* @package language
* @version $Id: modules.php,v 1.12 2007/05/10 15:31:21 acydburn Exp $
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Na tejto stránke môžete spravovať všetky druhy modulov. ACP používa 3-úrovňovú štruktúru ponuky (Kategória -> Kategória -> Modul), pričom ostatné majú 2-vrstvovú štruktúru (Kategória -> Modul), ktorá musí byť zachovaná. Prosím, berte na vedomie, že môžete zablokovať samého seba v prípade vypnutia alebo odinštalovania modulu, ktorý je zodpovedný za samotnú správu modulov.',
	'ADD_MODULE'					=> 'Pridať modul',
	'ADD_MODULE_CONFIRM'			=>'Naozaj chcete pridať označený modul vo vybranom režime?',
	'ADD_MODULE_TITLE'				=> 'Pridať modul',

	'CANNOT_REMOVE_MODULE'	=> 'Modul nie je možné odstrániť, pretože má k sebe priradených potomkov. Prosím, odstráňte alebo presuňte všetkých potomkov predtým ako odstránite tento modul.',
	'CATEGORY'				=> 'Kategória',
	'CHOOSE_MODE'			=> 'Zvoľte režim modulu',
	'CHOOSE_MODE_EXPLAIN'	=> 'Zvoľte režimy modulu, ktoré sa používajú.',
	'CHOOSE_MODULE'			=> 'Vybrať modul',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Zvoľte súbor, ktorý bude vyvolaný týmto modulom.',
	'CREATE_MODULE'			=> 'Vytvoriť nový modul',

	'DEACTIVATED_MODULE'	=> 'Neaktívny modul',
	'DELETE_MODULE'			=> 'Odstrániť modul',
	'DELETE_MODULE_CONFIRM'	=> 'Naozaj chcete odstrániť tento modul?',

	'EDIT_MODULE'			=> 'Upraviť modul',
	'EDIT_MODULE_EXPLAIN'	=> 'Tu môžete vidieť špecifické nastavenia modulu.',

	'HIDDEN_MODULE'			=> 'Skrytý modul',

	'MODULE'					=> 'Modul',
	'MODULE_ADDED'				=> 'Modul bol úspešne pridaný.',
	'MODULE_DELETED'			=> 'Modul bol úspešne odstránený.',
	'MODULE_DISPLAYED'			=> 'Modul zobrazený',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Ak si neprajete zobraziť tento modul, ale chcete ho používať, nastavte toto nastavenia na "Nie".',
	'MODULE_EDITED'				=> 'Modul bol úspešne upravený.',
	'MODULE_ENABLED'			=> 'Modul zapnutý',
	'MODULE_LANGNAME'			=> 'Jazykový názov modulu',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Zadajte názov zobrazeného modulu. Použite jazykovú konštantu, ak je názov použitý z jazykového súboru.',
	'MODULE_TYPE'				=> 'Typ modulu',

	'NO_CATEGORY_TO_MODULE'	=> 'Nie je možné prepnúť kategóriu na modul. Prosím, odstráňte všetkých potomkov pred vykonaním tejto akcie.',
	'NO_MODULE'				=> 'Žiadny modul nebol nájdený.',
	'NO_MODULE_ID'			=> 'ID modulu nebolo zadané.',
	'NO_MODULE_LANGNAME'	=> 'Názov jazyka modulu nebol zadaný.',
	'NO_PARENT'				=> 'Žiadny rodič',

	'PARENT'				=> 'Rodič',
	'PARENT_NO_EXIST'		=> 'Rodič neexistuje.',

	'SELECT_MODULE'			=> 'Zvoľte modul',
));

?>
