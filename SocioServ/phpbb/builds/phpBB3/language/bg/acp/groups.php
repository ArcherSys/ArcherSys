<?php
/** 
*
* acp_groups [English]
*
* @package language
* @version $Id: groups.php,v 1.15 2007/01/24 11:29:56 acydburn Exp $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'От този панел можете да администрирате всички потребителски групи, можете да триете, създавате и променяте съществуващи групи. Можете да избирате модератори, отваряте/затваряте групи и да добавяте име и описание на групата.',
	'ADD_USERS'						=> 'Добави потребители',
	'ADD_USERS_EXPLAIN'				=> 'Тук можете да добавяте нови потребители в група. Всяко име на нов ред.',

	'COPY_PERMISSIONS'				=> 'Копирай правата от',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Веднъж създадена, групата ще има същите права като избраната.',
	'CREATE_GROUP'					=> 'Създай нова група',

	'GROUPS_NO_MEMBERS'				=> 'В тази група няма потребители',
	'GROUPS_NO_MODS'				=> 'Няма избран лидер на групата',
	
	'GROUP_APPROVE'					=> 'Одобри потребител',
	'GROUP_APPROVED'				=> 'Одобрени потребители',
	'GROUP_AVATAR'					=> 'Аватар на групата',
	'GROUP_AVATAR_EXPLAIN'			=> 'Изображението ще бъде показвано в контролния панел на групата.',
	'GROUP_CLOSED'					=> 'Затворена',
	'GROUP_COLOR'					=> 'Цвят на групата',
	'GROUP_COLOR_EXPLAIN'			=> 'Цвета в който потребителите ще бъдат показани в статистиката на форума.',
    'GROUP_CONFIRM_ADD_USER'        => 'Сигурен ли си, че искаш да добавиш %1$s в групата?',
    'GROUP_CONFIRM_ADD_USERS'       => 'Сигурен ли си, че искаш да добавиш %1$s в групата?',
	'GROUP_CREATED'					=> 'Групата е създадена успешно.',
	'GROUP_DEFAULT'					=> 'Направи групата по подразбиране за потребителя',
	'GROUP_DEFS_UPDATED'			=> 'По подразбиране за избраните потребители.',
	'GROUP_DELETE'					=> 'Премахни потребител от група',
	'GROUP_DELETED'					=> 'Групата е изтрита и потребителите са успешно разпределени.',
	'GROUP_DEMOTE'					=> 'Премахни лидера',
	'GROUP_DESC'					=> 'Описание',
	'GROUP_DETAILS'					=> 'Детайли',
	'GROUP_EDIT_EXPLAIN'			=> 'Тук можете да променяте съществуваща група. Можете да променяте името, описанието и типа (отворена, затворена и други). Също така можете да променяте различни опции на групата цвят, ранг и други.',
	'GROUP_ERR_USERS_EXIST'			=> 'Потребителя вече е член на групата',
	'GROUP_FOUNDER_MANAGE'			=> 'Само за основатели',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Може да бъде променена само от основатели.',
	'GROUP_HIDDEN'					=> 'Скрити',
	'GROUP_LANG'					=> 'Език',
	'GROUP_LEAD'					=> 'Лидери',
	'GROUP_LEADERS_ADDED'			=> 'Новите лидери са добавени успешно.',
	'GROUP_LEGEND'					=> 'Показвай групата в легендата',
	'GROUP_LIST'					=> 'Сегашни потребители',
	'GROUP_LIST_EXPLAIN'			=> 'Това е пълен списък от всички потребители членуващи в тази група. Можете да триете или добавяте нови.',
	'GROUP_MEMBERS'					=> 'Потребители',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Това е пълен списък на всички потребители в тази група. Включва лидери, висящи и съществуващи потребители. От тук можете да управлявате всеки, които членува в групата.',
	'GROUP_MESSAGE_LIMIT'			=> 'Лимит на лични съобщения в папка',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Сложи 0 за да използваш настройките по подразбиране',
	'GROUP_MODS_ADDED'				=> 'Модераторите са добавени успешно.',
	'GROUP_MODS_DEMOTED'			=> 'Лидерите са понижени успешно.',
	'GROUP_MODS_PROMOTED'			=> 'Потребителите са успешно повишени.',
	'GROUP_NAME'					=> 'Име на групата',
	'GROUP_NAME_TAKEN'				=> 'Името вече се използва.',
	'GROUP_OPEN'					=> 'Отворена',
	'GROUP_PENDING'					=> 'Висящи потребители',
	'GROUP_PROMOTE'					=> 'Направи лидер',
	'GROUP_RANK'					=> 'Ранг на групата',
	'GROUP_RECEIVE_PM'				=> 'Може да използва личните съобщения',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Към скритите групи не може да се изпращат съобщения.',
	'GROUP_REQUEST'					=> 'Поискай',
	'GROUP_SETTINGS_SAVE'			=> 'Настройки на групата',
	'GROUP_TYPE'					=> 'Тип на групата',
	'GROUP_TYPE_EXPLAIN'			=> 'Определя кои потребители могат да членуват в групата.',
	'GROUP_UPDATED'					=> 'Настройките са променени успешно.',
	
	'GROUP_USERS_ADDED'				=> 'Новите потребители са добавени в групата успешно.',
	'GROUP_USERS_EXIST'				=> 'Избраните потребители са вече членове.',
	'GROUP_USERS_REMOVE'			=> 'Потребителите са успешно изтрити от групата.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Направи групата по подразбиране за всеки потребител',
	'MEMBERS'				=> 'Потребители',

	'NO_GROUP'					=> 'Няма избрана група.',
	'NO_GROUPS_CREATED'			=> 'Няма създадена група.',
	'NO_PERMISSIONS'			=> 'Не копирай права',
	'NO_USERS'					=> 'Няма въведени потребители.',

	'SPECIAL_GROUPS'			=> 'Специални групи',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Тези групи не могат да бъдат изтривани или променяни директно. ',

	'TOTAL_MEMBERS'				=> 'Потребители',

	'USERS_APPROVED'				=> 'Потребителите са одобрени успешно.',
	'USER_DEFAULT'					=> 'Потребител по подразбиране',
	'USER_DEF_GROUPS'				=> 'Други групи',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Това са групи създадени от другите администратори на форума. Можете да управлявате членството както и при другите групи.',
	'USER_GROUP_DEFAULT'			=> 'Направи по подразбиране',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> '',
	'USER_GROUP_LEADER'				=> 'Направи лидер на групата',
));

?>