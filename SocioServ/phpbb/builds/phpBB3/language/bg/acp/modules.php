<?php
/** 
*
* acp_modules [English]
*
* @package language
* @version $Id: modules.php,v 1.11 2007/01/26 16:09:16 acydburn Exp $
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'От тук можете да управлявате всички видове модули. Този админ панел има три-структурна навигация (Категория -> Категория -> Модул) всички останали имат две-структурна навигация. При триене или промяна на някой модул можете да премахнете дори себе си от форума.',
	'ADD_MODULE'					=> 'Добави модул',
	'ADD_MODULE_CONFIRM'			=> 'Сигурен ли сте, че искате да добавите избрания модул?',
	'ADD_MODULE_TITLE'				=> 'Добавяне на модул',

	'CANNOT_REMOVE_MODULE'	=> 'Модула не може да бъде изтрит. Изтрийте всички модули свързани с избрания.',
	'CATEGORY'				=> 'Категория',
	'CHOOSE_MODE'			=> 'Избери тип',
	'CHOOSE_MODE_EXPLAIN'	=> '.',
	'CHOOSE_MODULE'			=> 'Избери модул',
	'CHOOSE_MODULE_EXPLAIN'	=> '',
	'CREATE_MODULE'			=> 'Създай нов модул',

	'DEACTIVATED_MODULE'	=> 'Деактивирай модула',
	'DELETE_MODULE'			=> 'Изтрий модула',
	'DELETE_MODULE_CONFIRM'	=> 'Сигурен ли сте, че искате да изтриете модула?',

	'EDIT_MODULE'			=> 'Промени модула',
	'EDIT_MODULE_EXPLAIN'	=> '',

	'HIDDEN_MODULE'			=> 'Скрий модула',

	'MODULE'					=> 'Модул',
	'MODULE_ADDED'				=> 'Модула е успешно добавен.',
	'MODULE_DELETED'			=> 'Модула е успешно изтрит.',
	'MODULE_DISPLAYED'			=> 'Показвай модула',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Ако искаш да не показваш модула, но да го използваш избери Не.',
	'MODULE_EDITED'				=> 'Модула е успешно променен.',
	'MODULE_ENABLED'			=> 'Включен',
	'MODULE_LANGNAME'			=> 'Име',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Въведи име на модула.',
	'MODULE_TYPE'				=> 'Тип на модула',

	'NO_CATEGORY_TO_MODULE'	=> 'Грешка. Изтрий/премести всички модули свързани с избрания.',
	'NO_MODULE'				=> 'Няма намерен модул.',
	'NO_MODULE_ID'			=> 'Няма избрано ID.',
	'NO_MODULE_LANGNAME'	=> 'Няма избран език на модула.',
	'NO_PARENT'				=> 'Без родител',

	'PARENT'				=> 'Родител',
	'PARENT_NO_EXIST'		=> 'Родителя не съществува',

	'SELECT_MODULE'			=> 'Избери модул',
));

?>