<?php
/** 
*
* acp_language [English]
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
	'ACP_FILES'						=> 'Администраторски езикови файлове',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Тук можете да изтривате/инсталирате езикови пакети',

	'EMAIL_FILES'			=> 'Email шаблони',

	'FILE_CONTENTS'				=> 'Съдържание на файла',
	'FILE_FROM_STORAGE'			=> 'Файл от папката за запис',

	'HELP_FILES'				=> 'Помощни файлове',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Инсталирани езикови пакети',
	'INVALID_LANGUAGE_PACK'		=> 'Избрания език е невалиден. Проверете пакета и го качете отново.',
	'INVALID_UPLOAD_METHOD'		=> 'Избрания метод за качване е невалиден.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Детайлите са успешно променени.',
	'LANGUAGE_ENTRIES'					=> 'Език',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Тук можете да променяте съществуващи езикови пакети или да преведете някой от пакетите.<br /><strong>Бележка:</strong> Веднъж променен езиковия файл не може да бъде върнат.',
	'LANGUAGE_FILES'					=> 'Езикови файлове',
	'LANGUAGE_KEY'						=> 'Име',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Този езиков пакет е вече инсталиран.',
	'LANGUAGE_PACK_DELETED'				=> 'Езиковия пакет <strong>%s</strong> е изтрит успешно. Всички потребители използващи изтрития пакет са върнати към този по подразбиране.',
	'LANGUAGE_PACK_DETAILS'				=> 'Детайли',
	'LANGUAGE_PACK_INSTALLED'			=> 'Езиковия пакет <strong>%s</strong> е успешно инсталиран.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Локално име',
	'LANGUAGE_PACK_NAME'				=> 'Име',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Избрания езиков пакет не съществува.',
	'LANGUAGE_PACK_USED_BY'				=> 'Използва се от (включително ботове)',
	'LANGUAGE_VARIABLE'					=> 'Стойност',
	'LANG_AUTHOR'						=> 'Автор',
	'LANG_ENGLISH_NAME'					=> 'Име на английски',
	'LANG_ISO_CODE'						=> 'ISO код',
	'LANG_LOCAL_NAME'					=> 'Локално име',

	'MISSING_LANGUAGE_FILE'		=> 'Липсващ езиков файл: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Липсваща езикова стойност',
	'MODS_FILES'				=> 'Мод езикови файлове',

	'NO_FILE_SELECTED'				=> 'Не сте избрали файл.',
	'NO_LANG_ID'					=> 'Не сте избрали езиков пакет.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Вие не можете да изтриете пакета по подразбиране.<br />Ако искате да изтриете този пакет, направете друг по подразбиране.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Няма',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Изтрий от папката',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Избери формат',
	'SUBMIT_AND_DOWNLOAD'		=> 'Изпрати и свали',
	'SUBMIT_AND_UPLOAD'			=> 'Изпрати и качи',

	'THOSE_MISSING_LANG_FILES'			=> 'Файловете липсват от %s папката',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Стойностите липсват от <strong>%s</strong> пакет',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Неинсталирани езикови пакети',

	'UNABLE_TO_WRITE_FILE'		=> 'Файла не може да бъде написан %s.',
	'UPLOAD_COMPLETED'			=> 'Качването е успешно.',
	'UPLOAD_FAILED'				=> 'Качването даде грешка. Опитайте да качите ръчно.',
	'UPLOAD_METHOD'				=> 'Метод',
	'UPLOAD_SETTINGS'			=> 'Настройки',

	'WRONG_LANGUAGE_FILE'		=> 'Езика е невалиден.',
));

?>