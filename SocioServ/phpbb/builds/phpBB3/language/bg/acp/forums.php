<?php
/** 
*
* acp_forums [English]
*
* @package language
* @version $Id: forums.php,v 1.23 2007/01/21 18:33:45 acydburn Exp $
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Автоматично изчистване',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Дните, след които темата ще бъде изтрита, ако не е писано в нея.',
	'AUTO_PRUNE_FREQ'			=> 'Автоматично изчистване - честота',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Времето м/у различните изчиствания.',
	'AUTO_PRUNE_VIEWED'			=> 'Автоматично изчистване - последно преглеждане',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Дните, след които темата ще бъде изтрита, ако не е преглеждана.',

	'COPY_PERMISSIONS'				=> 'Копирай правата от',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Веднъж създаден, форума ще има същите права като избрания. Ако не е избран форум, създадения няма да се вижда докато не се променят правата.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Ако избереш да копираш правата, форума ще има същите права като избрания. Всичките стари права ще бъдат заместени. Ако не е избран форум правата ще бъдат запазени.',
	'CREATE_FORUM'					=> 'Създай форум',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Изтрий съдържанието или премести във форум',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Изтрий подфорумите или премести във форум',
	'DEFAULT_STYLE'						=> 'Стил по подразбиране',
	'DELETE_ALL_POSTS'					=> 'Изтрий мненията',
	'DELETE_SUBFORUMS'					=> 'Изтрий подфорумите и мненията',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Включи активните теми',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Ако изберете да, активните теми ще бъдат показвани над подфорумите.',

	'EDIT_FORUM'					=> 'Промени форум',
	'ENABLE_INDEXING'				=> 'Включи търсенето',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Ако избереш да, мненията в този форум ще бъдат индексирани от търсачката.',
	'ENABLE_POST_REVIEW'			=> 'Включи преглеждането на мнение',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Ако избереш да, потребителите ще могат да преглеждат мненията си, ако ново мнение е публикувано докато са писали. ',
	'ENABLE_RECENT'					=> 'Покажи активните теми',
	'ENABLE_RECENT_EXPLAIN'			=> 'Ако избереш да, темите публикувани в този форум ще се показват в списъка с активни теми.',
	'ENABLE_TOPIC_ICONS'			=> 'Включи иконите в теми',

	'FORUM_ADMIN'						=> 'Форум администрация',
	'FORUM_ADMIN_EXPLAIN'				=> 'В phpBB3 няма категории всичко е форум-базирано. Всеки форум може да има неограничен брои подфоруми и можете да настройвате в кои да се пише и в кои не. Тук можете да добавяте, изтривате, заключвате, отключвате индивидуални форуми. Също така можете да ресинхронизирате форум.',
	'FORUM_AUTO_PRUNE'					=> 'Включи автоматичното изчистване',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Изчистване на форума от теми, задай честота/старост долу.',
	'FORUM_CREATED'						=> 'Форума е създаден успешно.',
	'FORUM_DATA_NEGATIVE'				=> 'Параметрите за автоматичното изчистване не може да са отрицателни.',
	'FORUM_DESC_TOO_LONG'				=> 'Описанието на форума е прекалено дълго, трябва да е под 4000 знака.',
	'FORUM_DELETE'						=> 'Изтрий форум',
	'FORUM_DELETE_EXPLAIN'				=> 'Формата долу Ви позволява да изтривате форум. Ако във форума има теми, ще трябва да изберете къде да бъдат преместени или изтрити.',
	'FORUM_DELETED'						=> 'Форума е успешно изтрит.',
	'FORUM_DESC'						=> 'Описание',
	'FORUM_DESC_EXPLAIN'				=> 'Вклюва BBcode и html.',
	'FORUM_EDIT_EXPLAIN'				=> 'Формата долу Ви позволява да променяте различни неща по форума.',
	'FORUM_IMAGE'						=> 'Изображения на форума',
	'FORUM_IMAGE_EXPLAIN'				=> 'Пътят към главната директория на phpBB за изображения.',
	'FORUM_LINK_EXPLAIN'				=> 'Пълен URL адрес (включително и протокола, пример <samp>http://</samp>).',
	'FORUM_LINK_TRACK'					=> 'Проследи пренасочванията',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Брои пъти на натискане в/у пренасочваща връзка.',
	'FORUM_NAME'						=> 'Форум име',
	'FORUM_NAME_EMPTY'					=> 'Трябва да въведете име на този форум.',
	'FORUM_PARENT'						=> 'Родителски форум',
	'FORUM_PASSWORD'					=> 'Форум парола',
	'FORUM_PASSWORD_CONFIRM'			=> 'Потвърди парола',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Въведи само, ако си задал парола на форума.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Дефинира парола за този форум.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Паролите не съвпадат.',
	'FORUM_PRUNE_SETTINGS'				=> 'Настройки на изчистване',
	'FORUM_RESYNCED'					=> 'Форума "%s" е успешно ресинхронизиран',
	'FORUM_RULES_EXPLAIN'				=> 'Правилата на форума се показват на всяка избрана страница.',
	'FORUM_RULES_LINK'					=> 'Връзка към правилата на форума',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Можете да въведете URL адрес на страница/мнение съдържащо правилата на форума.',
	'FORUM_RULES_PREVIEW'				=> 'Прегледай правилата',
	'FORUM_RULES_TOO_LONG'				=> 'Правилата на форума трябва да са под 4000 знака.',
	'FORUM_SETTINGS'					=> 'Форум настройки',
	'FORUM_STATUS'						=> 'Форум статус',
	'FORUM_STYLE'						=> 'Стил на форум',
	'FORUM_TOPICS_PAGE'					=> 'Теми на страница',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Въведи 0 за настройки по подразбиране.',
	'FORUM_TYPE'						=> 'Тип на форума',
	'FORUM_UPDATED'						=> 'Информацията е променена успешно.',
	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'      => 'Вие искате да промените форум, които съдътжа и подфорум във връзка(линк). Преместете всички подфоруми и продължете.',
'GENERAL_FORUM_SETTINGS'   => 'Главни настройки',
	
	'GENERAL_FORUM_SETTINGS'	=> 'Главни форум настройки',

	'LINK'					=> 'Връзка',
	'LIST_INDEX'			=> 'Покажи подфорума при форума',
	'LIST_INDEX_EXPLAIN'	=> 'Показва връзка към подфорума, под името на форума - родител.',
	'LOCKED'				=> 'Заключено',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Форума, който сте избрал за преместването на темата е заключен.',
	'MOVE_POSTS_TO'		=> 'Премести мненията в',
	'MOVE_SUBFORUMS_TO'	=> 'Премести подфорумите в',

	'NO_DESTINATION_FORUM'			=> 'Не сте избрали форум за преместване',
	'NO_FORUM_ACTION'				=> 'Не сте избрали какво да направите с темите/мненията',
	'NO_PARENT'						=> 'Няма родител',
	'NO_PERMISSIONS'				=> 'Не копирай права',
	'NO_PERMISSION_FORUM_ADD'		=> 'Нямате нужните права за да добавяте форуми.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Нямате нужните права за да изтривате форуми.',

	'PARENT_IS_LINK_FORUM'		=> 'Родителския форум, който сте избрали е линкващ. Форумите-връзки, не могат да съдържат подфоруми.',
	'PARENT_NOT_EXIST'			=> 'Родителя не съществува.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Изчисти Важните теми',
	'PRUNE_STICKY'				=> 'Изчисти Закачените теми',
	'PRUNE_OLD_POLLS'			=> 'Изчисти старите анкети',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Изтрий теми в които в анкетите не е гласувано от',
	
	'REDIRECT_ACL'	=> 'Вие не можете %sда задавате права%s за този форум.',

	'SYNC_IN_PROGRESS'			=> 'Синхронизиране..',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Прогрес %1$d/%2$d.',

	'TYPE_CAT'			=> 'Категория',
	'TYPE_FORUM'		=> 'Форум',
	'TYPE_LINK'			=> 'Връзка',

	'UNLOCKED'			=> 'Отключено',
));

?>