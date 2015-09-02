<?php
/** 
*
* acp_users [English]
*
* @package language
* @version $Id: users.php,v 1.22 2007/01/24 11:29:56 acydburn Exp $
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
	'ADMIN_SIG_PREVIEW'		=> 'Преглед на подписа',
	'AT_LEAST_ONE_FOUNDER'	=> 'Не можеш да направиш основателя нормален потребител. Трябва да има поне един основател във всеки форум. И все пак, ако искаш да направиш това, направи друг потребител основател и след това премахни този.',

	'BAN_ALREADY_ENTERED'	=> 'Бана е добавян вече. Списъка не е обновен.',
	'BAN_SUCCESSFUL'		=> 'Бана е въведен успешно.',

	'CANNOT_BAN_FOUNDER'			=> 'Не може да банваш основатели.',
	'CANNOT_BAN_YOURSELF'			=> 'Не може да банваш себе си.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Не може да деактивираш ботове.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Вие не можете да деактивирате акаунти на основатели.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Вие не можете да деактивирате собствения си акаунт.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Не може да изискваш реактивация от бот.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Не може да изискваш реактивация от основател.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Не може да изискваш реактивация на собствения си акаунт.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Не може да изтриваш гостите.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Не може да изтриеш собствения си акаунт.',
	'CANNOT_SET_FOUNDER_BOT'		=> 'Не може да игнорираш основатели.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Вие не можете да повишите игнориран потребител до основател.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Трябва да активираш това, преди да направиш потребител основател, само активираните потребители могат да бъдат повишени в основатели.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'При промяна на потребителски email адрес.',

	'DELETE_POSTS'			=> 'Изтрий мнението',
	'DELETE_USER'			=> 'Изтрий потребителя',
	'DELETE_USER_EXPLAIN'	=> 'Изтриването на потребител е необратимо действие',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Успешно поискана нова активация.',
	'FOUNDER'						=> 'Основател',
	'FOUNDER_EXPLAIN'				=> 'Основателите има всички администраторски права и никога не могат да бъдат баннати, изтрити или изгонени от други потребители.',

	'GROUP_APPROVE'					=> 'Одобри потребителя',
	'GROUP_DEFAULT'					=> 'Направи групата по подразбиране за потребителя',
	'GROUP_DELETE'					=> 'Премахни потребителя от групата',
	'GROUP_DEMOTE'					=> 'Свали лидера',
	'GROUP_PROMOTE'					=> 'Направи лидер',

	'IP_WHOIS_FOR'			=> 'IP запис за %s',

	'LAST_ACTIVE'			=> 'Последно активен',

	'MOVE_POSTS_EXPLAIN'	=> 'Избери форум, във който искаш да преместиш маркираните мнения.',

	'NO_SPECIAL_RANK'		=> 'Няма специален ранг',
	'NOT_MANAGE_FOUNDER'	=> 'Вие се опитвате да управлявате потребител с ранг основател. Само основателите, могат да променят други основатели.',

	'QUICK_TOOLS'			=> 'Бързи инструменти',

	'REGISTERED'			=> 'Регистриран',
	'REGISTERED_IP'			=> 'Регистриран от IP',
	'RETAIN_POSTS'			=> 'Задръж мненията',

	'SELECT_FORM'			=> 'Избери от',
	'SELECT_USER'			=> 'Избери потребител',

	'USER_ADMIN'					=> 'Администарция на потребител',
	'USER_ADMIN_ACTIVATE'			=> 'Активирай акаунта',
	'USER_ADMIN_ACTIVATED'			=> 'Акаунта е активиран успешно.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Аватара е успешно премахнат.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Бан по email',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Email адреса е баннат успешно',
	'USER_ADMIN_BAN_IP'				=> 'Бан по IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP адреса е баннат успешно',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Потребителското име е баннато успешно',
	'USER_ADMIN_BAN_USER'			=> 'Бан по потребителско име',
	'USER_ADMIN_DEACTIVATE'			=> 'Деактивирай акаунта',
	'USER_ADMIN_DEACTIVED'			=> 'Акаунта е деактивиран успешно.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Изтрий всички прикачени файлове',
	'USER_ADMIN_DEL_AVATAR'			=> 'Изтрий аватара',
	'USER_ADMIN_DEL_POSTS'			=> 'Изтрий всички мнения',
	'USER_ADMIN_DEL_SIG'			=> 'Изтрий сигнатурата',
	'USER_ADMIN_EXPLAIN'			=> 'От тук може да промениш информацията за потребителите. За да промените права на потребител използвайте системата "потребители и групи".',
	'USER_ADMIN_FORCE'				=> 'Поискай реактивация',
	'USER_ADMIN_MOVE_POSTS'			=> 'Премести всички мнения',
	'USER_ADMIN_SIG_REMOVED'		=> 'Подписа е успешно премахнат.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Успешно бяха премахнати всички прикачени файлове на този потребител.',
	'USER_AVATAR_UPDATED'			=> 'Детайлите са успешно променени.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Допълнителни полета',
	'USER_DELETED'					=> 'Потребителя е изтрит успешно.',
	'USER_GROUP_ADD'				=> 'Добави потребителя към група',
	'USER_GROUP_NORMAL'				=> 'Потребител на',
	'USER_GROUP_PENDING'			=> 'Висящ',
	'USER_GROUP_SPECIAL'			=> 'Потребител на',
    'USER_NO_ATTACHMENTS'         => 'Няма прикачени файлове за показване.',
	'USER_OVERVIEW_UPDATED'			=> 'Детайлите са променени успешно.',
	'USER_POSTS_DELETED'			=> 'Успешно са премахнати всички мнения на потребителя.',
	'USER_POSTS_MOVED'				=> 'Успешно са преместени всички мнения на потребителя.',
	'USER_PREFS_UPDATED'			=> 'Настройките на потребителя са променени.',
	'USER_PROFILE'					=> 'Профил на потребителя',
	'USER_PROFILE_UPDATED'			=> 'Профила е променен успешно.',
	'USER_RANK'						=> 'Потребителски ранг',
	'USER_RANK_UPDATED'				=> 'Потребителският ранг е променен успено.',
	'USER_SIG_UPDATED'				=> 'Сигнатурата е променена успешно.',
	'USER_TOOLS'					=> 'Инструменти',
));

?>