<?php
/** 
*
* acp_prune [English]
*
* @package language
* @version $Id: prune.php,v 1.8 2006/11/20 17:37:54 dhn2 Exp $
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Тук можете да изтривате (или деактивирате) потребители от форума. Това може да стане по няколко начина; по брой мнения, последна активност и други. Всеки един от тези критерии може да бъде комбиниран, примерно можете да изчистите потребителите, които са били последно активни на 2002-01-01 и с по-малко от 10 мнения. Изтритите потребители не могат да бъдат възстановени.',

	'DEACTIVATE_DELETE'			=> 'Деактивирай или изтрий',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Избери дали да деактивираш или да изтриеш потребителите.',
	'DELETE_USERS'				=> 'Изтрий',
	'DELETE_USER_POSTS'			=> 'Изтрий мненията на изчистените потребители',
	'DELETE_USER_POSTS_EXPLAIN' => 'Изтрий мненията публикувани от изтритите потребители.',

	'JOINED_EXPLAIN'			=> 'Въвеждай датата в <kbd>YYYY-MM-DD</kbd> формат.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Въвеждай датата в <kbd>YYYY-MM-DD</kbd> формат.',

	'PRUNE_USERS_LIST'				=> 'Потребители за премахване',
	'PRUNE_USERS_LIST_DELETE'		=> 'По избрания критерии ще бъде изтрити акаунти.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'По избрания критерии ще бъдат деактивирани акаунти.',
	
	'SELECT_USERS_EXPLAIN'		=> 'Въведи потребителските имена тук.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Избраните потребители бяха деактивирани успешно.',
	'USER_DELETE_SUCCESS'		=> 'Избраните потребители бяха изтрити успешно.',
	'USER_PRUNE_FAILURE'		=> 'Няма потребители отговарящи на критерия.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Въведената дата е грешна, трябва да използвате <kbd>YYYY-MM-DD</kbd> формат.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Това ще изтрие всяка тема която не е прегледана или не е писано в нея. Ако не въведеш номер (дни) всичките теми ще бъдат изтрити.',

	'FORUM_PRUNE'		=> 'Изчистване на форум',

	'NO_PRUNE'			=> 'Няма изчистени форуми',

	'SELECTED_FORUM'	=> 'Избран форум',
	'SELECTED_FORUMS'	=> 'Избрани форуми',

	'POSTS_PRUNED'					=> 'Изчистени мнения',
	'PRUNE_ANNOUNCEMENTS'			=> 'Изчисти Важните теми',
	'PRUNE_FINISHED_POLLS'			=> 'Изчисти приключилите анкети',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Изтрива теми в които анкетата е завършила.',
	'PRUNE_FORUM_CONFIRM'			=> 'Сигурен ли сте, че искате да изчистите форумите с избраните настройки? Веднъж изтрити, не могат да се върнат отново.',
	'PRUNE_NOT_POSTED'				=> 'Дни от когато не е писано',
	'PRUNE_NOT_VIEWED'				=> 'Дни от когато не е преглеждано',
	'PRUNE_OLD_POLLS'				=> 'Изчисти старите анкети',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Изтрива теми с анкети в които не е гласувано отдавна.',
	'PRUNE_STICKY'					=> 'Изчисти Закачените теми',
	'PRUNE_SUCCESS'					=> 'Изчистването на форумите беше успешно',

	'TOPICS_PRUNED'		=> 'Изчистени теми',
));

?>