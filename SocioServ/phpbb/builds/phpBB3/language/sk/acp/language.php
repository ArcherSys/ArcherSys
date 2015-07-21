<?php
/**
*
* acp_language [Slovak]
*
* @package language
* @version $Id: language.php,v 1.13 2007/01/24 12:33:36 acydburn Exp $
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
	'ACP_FILES'						=> 'Jazykové súbory administrácie',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Tu je možné nainštalovať/odstrániť jazykové balíky.',

	'EMAIL_FILES'			=> 'Šablóny e-mailových správ',

	'FILE_CONTENTS'				=> 'Obsah súboru',
	'FILE_FROM_STORAGE'			=> 'Súbor z priečinka úložiska',

	'HELP_FILES'				=> 'Súbory pomocníka',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Nainštalované jazykové balíky',
	'INVALID_LANGUAGE_PACK'		=> 'Označený jazykový balík nie je pravdepodobne platný. Prosím, skontrolujte jazykový balík a pokiaľ je to potrebné, nahrajte ho znova.',
	'INVALID_UPLOAD_METHOD'		=> 'Označená metóda na odoslanie nie je platná, prosím, vyberte inú metódu.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Detaily jazykových balíkov boli úspešne aktualizované.',
	'LANGUAGE_ENTRIES'					=> 'Položky jazyka',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Tu je možné meniť existujúce položky jazykových balíkov alebo zmeniť nepreložené reťazce.<br /><strong>Poznámka: </strong>Po zmene súboru jazyka budú tieto uložené na stiahnutie do oddeleného priečinka. Zmeny sa prejavia až po prepísaných originálnych jazykový súborov na vašom serveri.',
	'LANGUAGE_FILES'					=> 'Súbory jazyka',
	'LANGUAGE_KEY'						=> 'Kľúč jazyka',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Tento jazykový balík je už nainštalovaný.',
	'LANGUAGE_PACK_DELETED'				=> 'Jazykový balík <strong>%s</strong> bol úspešne odstránený. Všetkým používateľom, ktorý používali tento jazykový balík, bol nastavený predvolený jazyk.',
	'LANGUAGE_PACK_DETAILS'				=> 'Detaily jazykového balíka',
	'LANGUAGE_PACK_INSTALLED'			=> 'Jazykový balík <strong>%s</strong> bol úspešne nainštalovaný.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokálny názov',
	'LANGUAGE_PACK_NAME'				=> 'Názov',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Vybraný jazykový balík neexistuje.',
	'LANGUAGE_PACK_USED_BY'				=> 'Počet používateľov (vrátane robotov)',
	'LANGUAGE_VARIABLE'					=> 'Premenná jazyka',
	'LANG_AUTHOR'						=> 'Autor jazykového balíka',
	'LANG_ENGLISH_NAME'					=> 'Názov v angličtine',
	'LANG_ISO_CODE'						=> 'ISO kód',
	'LANG_LOCAL_NAME'					=> 'Lokálny názov',

	'MISSING_LANGUAGE_FILE'		=> 'Chýbajúci súbor jazyka: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Chýbajúce jazykové premenné',
	'MODS_FILES'				=> 'Jazykový súbor rozšírenia',

	'NO_FILE_SELECTED'				=> 'Nie je zadaný súbor jazyka.',
	'NO_LANG_ID'					=> 'Nie je zadaný jazykový balík.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Nie je možné odstrániť predvolený jazykový balík.<br />Pokiaľ ho chcete odstrániť, najskôr zmeňte predvolený jazyk fóra.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Žiadne odinštalované jazykové balíky',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Odstrániť z úložiska',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Vyberte formát sťahovania',
	'SUBMIT_AND_DOWNLOAD'		=> 'Potvrdiť a stiahnuť súbor',
	'SUBMIT_AND_UPLOAD'			=> 'Potvrdiť a odoslať súbor',

	'THOSE_MISSING_LANG_FILES'			=> 'Nasledujúce súbory jazyka chýbajú z priečinka jazyka %s',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Nasledujúce premenné jazyka chýbajú z jazykového balíka <strong>%s</strong>',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Odinštalované jazykové balíky',

	'UNABLE_TO_WRITE_FILE'		=> 'Súbor nemôže byť zapísaný na %s.',
	'UPLOAD_COMPLETED'			=> 'Odoslanie bolo úspešné.',
	'UPLOAD_FAILED'				=> 'Odosielanie z neznámych príčin zlyhalo. Daný súbor musíte prepísať ručne.',
	'UPLOAD_METHOD'				=> 'Metóda odoslania',
	'UPLOAD_SETTINGS'			=> 'Nastavenia odoslania',

	'WRONG_LANGUAGE_FILE'		=> 'Vybraný jazykový súbor nie je platný.',
));

?>
