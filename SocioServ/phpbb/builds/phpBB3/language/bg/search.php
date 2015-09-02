<?php
/**
*
* search [English]
*
* @package language
* @version $Id: search.php,v 1.19 2007/01/21 18:33:45 acydburn Exp $
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
    'ALL_AVAILABLE'            => 'Всички свободни',
    'ALL_RESULTS'            => 'Всички резултати',

    'DISPLAY_RESULTS'        => 'Покажи резултатите като',

    'FOUND_SEARCH_MATCH'        => 'Търсенето върна %d резултат',
    'FOUND_SEARCH_MATCHES'        => 'Търсенето върна %d резултата',
    'FOUND_MORE_SEARCH_MATCHES'    => 'Търсенето върна повече от %d резултата',

    'GLOBAL'                => 'Съобщение',

    'IGNORED_TERMS'            => 'игнориран',
    'IGNORED_TERMS_EXPLAIN'    => 'Посочените думи са игнорирани, защото са често използвани: <strong>%s</strong>',

    'JUMP_TO_POST'            => 'Отиди на мнение',
	'LOGIN_EXPLAIN_EGOSEARCH'   => 'Трябва да се регистрирате и да влезете в акаунта си.',
	'NO_KEYWORDS'         => 'Трябва да въведете поне една дума когато използвате търсачката. Всяка дума трябва да съдържа поне %d знака и да не надвишава %d.',

    'NO_KEYWORDS'            => 'Вие трябва да въведете поне една дума за търсене. Всяка дума трябва да съдържа най-малко %d букви и не трябва да надхвърля %d думи.',
    'NO_RECENT_SEARCHES'    => 'Няма извършени търсения напоследък',
    'NO_SEARCH'                => 'Вие нямате право да използвате търсещата машина.',
    'NO_SEARCH_RESULTS'        => 'Нищо не е намерено.',
    'NO_SEARCH_TIME'        => 'Вие не можете да търсите в момента, моля опитайте след няколко минути.',
    'WORD_IN_NO_POST'        => 'Не е намерено мнение, защото думата <strong>%s</strong> не се съдържа в никъде.',
    'WORDS_IN_NO_POST'        => 'Не са намерени мнения, защото думата <strong>%s</strong> не се съдържа никъде.',

    'POST_CHARACTERS'        => 'знака на мнението',

    'RECENT_SEARCHES'        => 'Предишни търсения',
    'RESULT_DAYS'            => 'Лимитирай резултатите',
    'RESULT_SORT'            => 'Сортирай по',
    'RETURN_FIRST'            => 'Върни първите',
	'RETURN_TO_SEARCH_ADV'	=> 'Върни към разширено търсене',

    'SEARCHED_FOR'                => 'Търси термин',
    'SEARCHED_TOPIC'            => 'Търсена тема',
    'SEARCH_ALL_TERMS'            => 'Търси за коя да е от въведените думи',
    'SEARCH_ANY_TERMS'            => 'Търси за всички въведени думи',
    'SEARCH_AUTHOR'                => 'Търси по автор',
    'SEARCH_AUTHOR_EXPLAIN'        => 'Можете да ползвайте * като маска.',
    'SEARCH_FIRST_POST'            => 'Първото мнение на тема',
    'SEARCH_FORUMS'                => 'Търси във форуми',
    'SEARCH_FORUMS_EXPLAIN'        => 'Избери форум или форуми в които искаш да търсиш. За да търсите и в под форумите трябва да маркирате "търси в под форуми".',
    'SEARCH_IN_RESULTS'            => 'Търси в резултатите',
    'SEARCH_KEYWORDS_EXPLAIN'    => 'Сложи <strong>+</strong> пред думата, която искаш да бъде намерена и <strong>-</strong> пред думата, която не искаш да бъде намерена. Сложи лист от думи разделени с <strong>|</strong> в скоби, ако само една от думите трябва да бъде намерена. Можете да ползвайте * като маска.',
    'SEARCH_MSG_ONLY'            => 'Мнения',
    'SEARCH_OPTIONS'            => 'Настройки',
    'SEARCH_QUERY'                => 'Запитване',
    'SEARCH_SUBFORUMS'            => 'Търсене в под форуми',
    'SEARCH_TITLE_MSG'            => 'Заглавия и мнения',
    'SEARCH_TITLE_ONLY'            => 'Заглавия на теми',
    'SEARCH_WITHIN'                => 'Търси в',
    'SORT_ASCENDING'            => 'Възходящ',
    'SORT_AUTHOR'                => 'Автор',
    'SORT_DESCENDING'            => 'Низходящ',
    'SORT_FORUM'                => 'Форум',
    'SORT_POST_SUBJECT'            => 'Заглавие',
    'SORT_TIME'                    => 'Време',

    'TOO_FEW_AUTHOR_CHARS'    => 'Вие трябва да въведете поне %d за име на автора.',
));

?>