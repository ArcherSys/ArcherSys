<?php
/** 
*
* acp_search [English]
*
* @package language
* @version $Id: search.php,v 1.12 2007/01/27 17:38:45 naderman Exp $
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'От тук можете да управлявате търсещата машина. След промяна на някои настройки може да се наложи да пресъздадете индекса за да влязат промените в действие.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'От тук можете да дефинирате кой бекенд ще бъде използван за индексирането на мнения и търсене. Някой настройки са идентични за всички бек ендове.',

	'COMMON_WORD_THRESHOLD'					=> 'Често употребявани думи',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Думи, които се съдържат в голям процент от всичките мнения ще бъдат идентифицирани като често използвани. Често използваните думи се игнорират от търсачката. Задай 0 за изключване. Във форума трябва да има повече от 100 мнения.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Сигурен ли сте, че искате да промените бекенда? След промяна ще трябва да създадете нов индекс за новия бекенд. Ако нямате намерение да се връщате към стария бекенд можете да го изтриете за да освободите ресурс.',
	'CONTINUE_DELETING_INDEX'				=> 'Продължи изтриването',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Започнат е процес по изтриването на индекс. Процеса трябва да завърши за да имате достъп до търсачката.',
	'CONTINUE_INDEXING'						=> 'Продължи индексирането',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Започнат е процес по изтриването на индекс. Процеса трябва да завърши за да имате достъп до търсачката.',
	'CREATE_INDEX'							=> 'Създай индекс',

	'DELETE_INDEX'							=> 'Изтрий индекс',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Изтрий индекса в прогрес',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Търсачката се почиства. Това ще отнеме няколко минути.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'Трябва ви версия над/или MySQL4.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'MySQL (fulltext) може да се използва само с MyISAM таблици.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Общия брой на индексираните мнения',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Поддръжка за различни от UTF-8 знаци използване mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Поддръжка за различни от UTF-8 знаци използване PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> '',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> '',

	'GENERAL_SEARCH_SETTINGS'				=> 'Главни настройки',
	'GO_TO_SEARCH_INDEX'					=> 'Отиди на страницата за търсене',

	'INDEX_STATS'							=> 'Статистика',
	'INDEXING_IN_PROGRESS'					=> 'Индексиране...',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Индексират се мненията във форума. Това ще отнеме от няколко минути до няколко часа в зависимост от големината на форума.',

	'LIMIT_SEARCH_LOAD'						=> 'Лимит на търсене',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Ако за една минута системата превиши тази стойност търсенето ще бъде изключено автоматично, 1.0 е равно на 100% използване на процесора. Функцията е активна само при UNIX базираните сървъри.',

	'MAX_SEARCH_CHARS'						=> 'Максимални знаци (за думи) индексирани от търсачката',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Думи с максимум знаци, които ще бъдат индексирани от търсачката.',
	'MIN_SEARCH_CHARS'						=> 'Минимални знаци (за думи) индексирани от търсачката',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Думи с минимум знаци, които ще бъдат индексирани от търсачката.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Минимални знаци автор',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Потребителите трябва да въведат минимум толкова знаци, при използването на търсене теми/мнения по автор.',

	'PROGRESS_BAR'							=> 'Прогрес',

	'SEARCH_GUEST_INTERVAL'					=> 'Flood контрол при гости',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Броя секунди, които гостите трябва да изчакат м/у различните търсения.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Всички мнения до мнение с id %1$d са индексирани, %2$d мнения тази стъпка.<br />Индексирането се осъществява с %3$.1f мнения на секунда.<br />Индексиране…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Всички мнения до мнение с %1$d са изтрити от търсещия индекс.<br />Изтриване…',
	'SEARCH_INDEX_CREATED'					=> 'Успешно са изтрити всички мнения.',
	'SEARCH_INDEX_REMOVED'					=> 'Успешно е изтрит индекса.',
	'SEARCH_INTERVAL'						=> 'Flood контрол при потребители',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Броя секунди, които потребителите трябва да изчакат м/у различните търсения.',
	'SEARCH_STORE_RESULTS'					=> 'Дължина на кеша при търсене',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Кешираните резултати ще изтекат след това време, в секунди. Настрой на 0 ако искаш да изключиш кеширането на резултати.',
	'SEARCH_TYPE'							=> 'Начин на търсене',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB ви позволява да избирате м/у начините на търсене в мненията. По подразбиране phpBB използва собствен метод.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Вие сменихте начина на търсене. За да използвате новия метод трябва да създадете нов индекс.',

	'TOTAL_WORDS'							=> 'Индексирани думи',
	'TOTAL_MATCHES'							=> 'Индексирани връзки м/у думи',

	'YES_SEARCH'							=> 'Включи улесненията',
	'YES_SEARCH_EXPLAIN'					=> 'Пример за улеснение е търсенето на потребители.',
	'YES_SEARCH_UPDATE'						=> 'Включи обновяването',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Обновяване на индекса при изключено търсене.',
));

?>