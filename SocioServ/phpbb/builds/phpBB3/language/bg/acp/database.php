<?php
/** 
*
* acp_database [English]
*
* @package language
* @version $Id: database.php,v 1.13 2006/12/02 13:19:24 acydburn Exp $
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'От тук можете да бек-ъпнете всичката си информация. Можете да запазите резултатите в своята <samp>store/</samp> папка или да ги свалите директно. В зависимост от сървъра ще можете да компресирате файла.',
	'ACP_RESTORE_EXPLAIN'	=> 'Това ще предизвика пълно възстановяване на phpBB таблиците. Ако Вашият сървър поддържа gzip или bzip2 можете да ги използвате за автоматична декомпресия. <strong>ВНИМАНИЕ</strong> Старата информация ще бъде заместена. Възстановяването може да отнеме дълго време. Всички бек-ъпи се намират в /store папката.',

	'BACKUP_DELETE'		=> 'Бек-ъп файла е изтрит успешно.',
	'BACKUP_INVALID'	=> 'Избрания бек-ъп файл е невалиден.',
	'BACKUP_OPTIONS'	=> 'Бек-ъп опции',
	'BACKUP_SUCCESS'	=> 'Бек-ъп файла е създаден успешно.',
	'BACKUP_TYPE'		=> 'Бек-ъп тип',

	'DATABASE'			=> 'Инструменти',
	'DATA_ONLY'			=> 'Информация само',
	'DELETE_BACKUP'		=> 'Изтрий бек-ъпа',
	'DELETE_SELECTED_BACKUP'	=> 'Сигурен ли сте, че искате да изтриете избрания backup?',
	'DESELECT_ALL'		=> 'Деизбери всички',
	'DOWNLOAD_BACKUP'	=> 'Свали бек-ъпа',

	'FILE_TYPE'			=> 'Файл тип',
	'FULL_BACKUP'		=> 'Пълно',

	'RESTORE_FAILURE'		=> 'Backup файл-а е повреден.',
	'RESTORE_OPTIONS'		=> 'Опции при възстановяване',
	'RESTORE_SUCCESS'		=> 'Базата данни е успешно възстановена.',

	'SELECT_ALL'			=> 'Избери всички',
	'SELECT_FILE'			=> 'Избери файл',
	'START_BACKUP'			=> 'Започни бек-ъп',
	'START_RESTORE'			=> 'Започни възстановяване',
	'STORE_AND_DOWNLOAD'	=> 'Запиши и свали',
	'STORE_LOCAL'			=> 'Запиши файла локално',
	'STRUCTURE_ONLY'		=> 'Структурно',

	'TABLE_SELECT'		=> 'Избери таблица',
	'TABLE_SELECT_ERROR'=> 'Трябва да изберете поне една таблица.',
));

?>