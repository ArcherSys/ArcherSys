<?php
/** 
*
* acp_language.php [Česky]
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

$lang = array_merge($lang, array(
	'ACP_FILES'	=> 'Jazykové soubory administrace',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Zde můžete instalovat/odinstalovat jazykové balíky k fóru',

	'EMAIL_FILES'	=> 'Šablony e-mailů',

	'FILE_CONTENTS'	=> 'Obsah souboru',
	'FILE_FROM_STORAGE'	=> 'Soubor z ukládacího adresáře',

	'HELP_FILES'	=> 'Soubory nápovědy',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Instalované jazykové balíky',
	'INVALID_LANGUAGE_PACK'	=> 'Vybraný jazykový balík není v pořádku, ověřte jej a v případě potřeby nahrajte znovu.',
	'INVALID_UPLOAD_METHOD'	=> 'Vybraný způsob uploadu není možný, zvolte jiný',

	'LANGUAGE_DETAILS_UPDATED'	=> 'Jazyk úspěšně aktualizován',
	'LANGUAGE_ENTRIES'	=> 'Jazykové klíče',
	'LANGUAGE_ENTRIES_EXPLAIN'	=> 'Zde můžete měnit existující záznamy v jazyku, nebo přeložit zatím nepřeložené.<br /><strong>Poznámka:</strong> Jakmile změníte jazykový soubor, bude nahrán do zvláštní složky, abyste jej mohli stáhnout. Změny nebudou ihned vidět na fóru, teprve až nahrajete soubor do odpovídající složky.',
	'LANGUAGE_FILES'	=> 'Jazykové soubory',
	'LANGUAGE_KEY'	=> 'Jazykový klíč',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Tento balík je již nainstalován',
	'LANGUAGE_PACK_DELETED'	=> 'Jazykový balík <strong>%s</strong> byl úspěšně odstraněn. Uživatele používající tento jazyk mají nyní nastavený výchozí jazyk fóra.',
	'LANGUAGE_PACK_DETAILS'	=> 'Podrobnosti jazykového balíku',
	'LANGUAGE_PACK_INSTALLED'	=> 'Jazykový balík <strong>%s</strong> byl úspěšně nainstalován',
	'LANGUAGE_PACK_ISO'	=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'	=> 'Místní název',
	'LANGUAGE_PACK_NAME'	=> 'Název',
	'LANGUAGE_PACK_NOT_EXIST'	=> 'Vybraný balík neexistuje',
	'LANGUAGE_PACK_USED_BY'	=> 'Používán(včetně robotů)',
	'LANGUAGE_VARIABLE'	=> 'Jazyková proměnná',
	'LANG_AUTHOR'	=> 'Autor balíku',
	'LANG_ENGLISH_NAME'	=> 'Anglický název',
	'LANG_ISO_CODE'	=> 'Kód ISO',
	'LANG_LOCAL_NAME'	=> 'Místní název',

	'MISSING_LANGUAGE_FILE'	=> 'Chybějící jazykový soubor: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Chybějící jazyková proměnná',
	'MODS_FILES'	=> 'Jazykové soubory MODů',

	'NO_FILE_SELECTED'	=> 'Nezvolili jste jazykový soubor.',
	'NO_LANG_ID'	=> 'Nezvolili jste jazykový balík.',
	'NO_REMOVE_DEFAULT_LANG'	=> 'Nelze odstranit výchozí jazyk.<br />Pokud chcete tento jazyk odstranit, musíte nejdříve změnit výchozí jazyk fóra.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Žádné odinstalované balíky',

	'REMOVE_FROM_STORAGE_FOLDER'	=> 'Odstranit z ukládací složky',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Vybrat formát ke stažení',
	'SUBMIT_AND_DOWNLOAD'	=> 'Odeslat a stáhnout soubor',
	'SUBMIT_AND_UPLOAD'	=> 'Odeslat a nahrát soubor',

	'THOSE_MISSING_LANG_FILES'	=> 'Následující soubory chybí v adresáři %s jazyku.',
	'THOSE_MISSING_LANG_VARIABLES'	=> 'Následující proměnné chybějí v jazykovém balíku <strong>%s</strong>',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Nenainstalované jazykové balíky',

	'UNABLE_TO_WRITE_FILE'	=> 'Soubor nemohl být zapsán do %s.',
	'UPLOAD_COMPLETED'	=> 'Nahrávaní bylo úspěšné',
	'UPLOAD_FAILED'	=> 'Nahrávání bylo přerušeno z neznámého důvodu. Je možné, že budete muset nahradit poškozený soubor ručně.',
	'UPLOAD_METHOD'	=> 'Způsob nahrání',
	'UPLOAD_SETTINGS'	=> 'Nastavení nahrávání',

	'WRONG_LANGUAGE_FILE'	=> 'Vybraný soubor je neplatný',
));

?>