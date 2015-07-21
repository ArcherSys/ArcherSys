<?php
/**
*
* acp_prune [Russian]
*
* @package language
* @version $Id: prune.php,v 1.13 2007/05/11 12:25:28 acydburn Exp $
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
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Здесь вы можете удалить (или деактивировать) пользователей вашей конференции. Для этого существуют различные критерии: по числу сообщений, по времени последнего посещения и т. д. Все их можно совмещать друг с другом, например, убрать пользователей, посетивших конференцию последний раз не позднее 01.01.2002 с числом сообщений менее 10. В качестве альтернативы вы можете непосредственно ввести список пользователей в текстовое окно, при этом все остальные критерии отбора будут проигнорированы. Будьте осторожны с этой функцией! Удалённых пользователей нельзя восстановить.',

	'DEACTIVATE_DELETE'			=> 'Деактивировать или удалить',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Выберите действие над пользователями. Учтите, что отменить его будет невозможно!',
	'DELETE_USERS'				=> 'Удалить',
	'DELETE_USER_POSTS'			=> 'Удалить также их сообщения',
	'DELETE_USER_POSTS_EXPLAIN' => 'Удаляет пользователей вместе с их сообщениями. Не работает, если выбрана деактивация пользователей.',

	'JOINED_EXPLAIN'			=> 'Введите дату в формате <kbd>ГГГГ-ММ-ДД</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Введите дату в формате <kbd>ГГГГ-ММ-ДД</kbd>.',

	'PRUNE_USERS_LIST'				=> 'Users to be pruned',
	'PRUNE_USERS_LIST_DELETE'		=> 'With the selected critera for pruning users the following accounts will be removed.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'With the selected critera for pruning users the following accounts will be deactivated.',

	'SELECT_USERS_EXPLAIN'		=> 'Введите здесь конкретные имена пользователей, если не хотите использовать критерии поиска выше.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Отобранные пользователи успешно деактивированы.',
	'USER_DELETE_SUCCESS'		=> 'Отобранные пользователи успешно удалены.',
	'USER_PRUNE_FAILURE'		=> 'Нет пользователей, подходящих под указанные критерии.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Недопустимый формат даты. Дата должна быть в формате <kbd>ГГГГ-ММ-ДД</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Будут удалены все темы, в которые не писали и которые не просматривали указанное количество дней. Если вы не введёте число дней, то будут удалены все темы. По умолчанию темы, в которых продолжаются опросы, а также прилепленные темы и объявления не будут удалены.',

	'FORUM_PRUNE'		=> 'Чистка форумов',

	'NO_PRUNE'			=> 'Чистка форумов не произведена.',

	'SELECTED_FORUM'	=> 'Выбран форум',
	'SELECTED_FORUMS'	=> 'Выбраны форумы',

	'POSTS_PRUNED'					=> 'Сообщений удалено',
	'PRUNE_ANNOUNCEMENTS'			=> 'Удалять объявления',
	'PRUNE_FINISHED_POLLS'			=> 'Удалять оконченные опросы',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Удалять темы, в которых опросы завершены.',
	'PRUNE_FORUM_CONFIRM'			=> 'Восстановить удалённые темы и сообщения невозможно. Вы действительно хотите очистить выбранные форумы с указанными параметрами?',
	'PRUNE_NOT_POSTED'				=> 'Дней с последнего сообщения',
	'PRUNE_NOT_VIEWED'				=> 'Дней с последнего просмотра',
	'PRUNE_OLD_POLLS'				=> 'Удалять старые опросы',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Удалять темы, в опросах которых не было голосов за указанное выше количество дней.',
	'PRUNE_STICKY'					=> 'Удалять прилепленные темы',
	'PRUNE_SUCCESS'					=> 'Форумы успешно вычищены',

	'TOPICS_PRUNED'		=> 'Тем удалено',
));

?>