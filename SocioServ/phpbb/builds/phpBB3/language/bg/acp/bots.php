<?php
/** 
*
* acp_bots [English]
*
* @package language
* @version $Id: bots.php,v 1.8 2007/01/21 18:33:45 acydburn Exp $
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Управление на ботове',
	'BOTS_EXPLAIN'		=> 'Ботовете или така наречените паяци са автоматични агенти, които индексират страницата Ви. От тук можете да ги настроите.',
	'BOT_ACTIVATE'		=> 'Активирай',
	'BOT_ACTIVE'		=> 'Активен',
	'BOT_ADD'			=> 'Добави бот',
	'BOT_ADDED'			=> 'Новия бот е добавен успешно.',
	'BOT_AGENT'			=> 'Агент',
	'BOT_AGENT_EXPLAIN'	=> 'Името на бота.',
	'BOT_DEACTIVATE'	=> 'Деактивирай',
	'BOT_DELETED'		=> 'Бота е изтрит успешно.',
	'BOT_EDIT'			=> 'Промяна',
	'BOT_EDIT_EXPLAIN'	=> 'Тук можете да добавяте или променят съществуващ бот. Може да дефинирате IP адрес на бота, стил и език, който бота ще използва при индексирането.',
	'BOT_LANG'			=> 'Език на бота',
	'BOT_LANG_EXPLAIN'	=> 'Езика, който ще бъде показван на бота.',
	'BOT_LAST_VISIT'	=> 'Последно посещение',
	'BOT_IP'			=> 'IP адрес на бота',
	'BOT_IP_EXPLAIN'	=> 'Разделянето на адресите става чрез запетая.',
	'BOT_NAME'			=> 'Име',
	'BOT_NAME_EXPLAIN'	=> 'Използва се само за лична информация.',
	'BOT_NAME_TAKEN'   => 'Името вече се използва.',
	'BOT_NEVER'			=> 'Никога',
	'BOT_STYLE'			=> 'Стил на бота',
	'BOT_STYLE_EXPLAIN'	=> 'Стила, който ще бъде прилаган на бота.',
	'BOT_UPDATED'		=> 'Бота е променен успешно.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Бот агента вече съществува.',
	'ERR_BOT_NO_IP'				=> 'IP/hostname адреса е невалиден.',
	'ERR_BOT_NO_MATCHES'		=> 'Трябва да въведеш поне един агент/IP адрес.',

	'NO_BOT'		=> 'Не е намерен бот с този ID.',
	'NO_BOT_GROUP'	=> 'Не мога да намеря бот групата.',
));

?>