<?php
/** 
*
* acp_profile [English]
*
* @package language
* @version $Id: profile.php,v 1.14 2007/01/17 18:40:29 acydburn Exp $
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Допълнителното поле е успешно добавено.',
	'ALPHA_ONLY'			=> 'Alphanumeric само',
	'ALPHA_SPACERS'			=> 'Alphanumeric и празно пространство',
	'ALWAYS_TODAY'			=> 'Винаги сегашната дата',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Въведете опциите тук',
	'BOOL_TYPE_EXPLAIN'		=> '',

	'CHANGED_PROFILE_FIELD'		=> 'Полето е успешно променено.',
	'CHARS_ANY'					=> 'Всякакъв знак',
	'CHECKBOX'					=> 'Маркиране',
	'COLUMNS'					=> 'Колони',
	'CP_LANG_DEFAULT_VALUE'		=> 'Стойност по подразбиране',
	'CP_LANG_EXPLAIN'			=> 'Описание',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Описанието на полето за потребителя',
	'CP_LANG_NAME'				=> 'Име на полето за потребител',
	'CP_LANG_OPTIONS'			=> 'Опции',
	'CREATE_NEW_FIELD'			=> 'Създай новото поле',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Най-малко едно поле не е преведено. Моля въведете нужната информация като натиснете на &quot;Преведи&quot; връзката.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Език по подразбиране [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Допълнителното поле не е преведено.',
	'DEFAULT_VALUE'					=> 'Стойност по подразбиране',
	'DELETE_PROFILE_FIELD'			=> 'Изтрий полето',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Сигурен ли си, че искаш да изтриеш полето?',
	'DISPLAY_AT_PROFILE'			=> 'Покажи в контролния панел на потребителите',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Потребителя може да променя полето от контролния панел.',
	'DISPLAY_AT_REGISTER'			=> 'Покажи при регистрация',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Ако тази опция е включена, полето ще бъде показвано при регистрация и ще може да бъде променяно от контролния панел на потребителя.',
	'DISPLAY_PROFILE_FIELD'			=> 'Покажи полето',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Допълнителното поле ще бъде показвано при преглеждане на тема/преглеждане на профил/списък с членове. По подразбирането полето се показва в профила.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Въведете опциите, всяка опция на нов ред',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Вие можете да добавяне нови опции в края. Не е препоръчително да добавяте нови опции м/у съществуващите. Същото се отнася и за изтриването.',
	'EMPTY_FIELD_IDENT'				=> 'Идентификацията на полето е празна',
	'EMPTY_USER_FIELD_NAME'			=> 'Въведете име на полето',
	'ENTRIES'						=> 'Всички',
	'EVERYTHING_OK'					=> 'Всичко е наред',

	'FIELD_BOOL'				=> 'Да и Не',
	'FIELD_DATE'				=> 'Дата',
	'FIELD_DESCRIPTION'			=> 'Описание на полето',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Описание',
	'FIELD_DROPDOWN'			=> 'Падащо избиране',
	'FIELD_IDENT'				=> 'Идентификация на полето',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Избраната идентификация вече съществува. Изберете друго име.',
	'FIELD_IDENT_EXPLAIN'		=> 'Идентификационното име идентифицира полето в базата данни.',
	'FIELD_INT'					=> 'Номера',
	'FIELD_LENGTH'				=> 'Дължина',
	'FIELD_NOT_FOUND'			=> 'Полето не може да бъде намерено.',
	'FIELD_STRING'				=> 'Единствено поле',
	'FIELD_TEXT'				=> 'Място за писане',
	'FIELD_TYPE'				=> 'Тип на полето',
	'FIELD_TYPE_EXPLAIN'		=> 'Типа на полето не може да се променя.',
	'FIELD_VALIDATION'			=> 'Потвърждение на полето',
	'FIRST_OPTION'				=> 'Опции',

	'HIDE_PROFILE_FIELD'			=> 'Скрий полето',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Само модераторите и администраторите ще могат да виждат полето. Ако опцията е включена полетата няма да се показват в профилите на потребителите.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Идентификацията на полето може да съдържа малки букви от а до я и _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Идентификацията на полето може да съдържа максимум 17 знака',
	'ISO_LANGUAGE'				=> 'Език [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Език опции [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Максимум позволени знаци в полето',
	'MAX_FIELD_NUMBER'		=> 'Максимум позволени цифри в полето',
	'MIN_FIELD_CHARS'		=> 'Минимум позволени знаци в полето',
	'MIN_FIELD_NUMBER'		=> 'Минимум позволени цифри в полето',

	'NO_FIELD_ENTRIES'			=> 'Няма дефинирани',
	'NO_FIELD_ID'				=> 'Няма дефинирано ID.',
	'NO_FIELD_TYPE'				=> 'Няма дефиниран тип.',
	'NO_VALUE_OPTION'			=> 'Забранени опции',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Ако полето е задължително, потребителя получава грешка ако избере една от опциите тук.',
	'NUMBERS_ONLY'				=> 'Само числа (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Върни се обратно',
	'PROFILE_FIELD_ACTIVATED'	=> 'Полето е успешно активирано.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Полето е успешно деактивирано.',
	'PROFILE_LANG_OPTIONS'		=> 'Език опции',
	'PROFILE_TYPE_OPTIONS'		=> 'Следваща стъпка',

	'RADIO_BUTTONS'				=> 'Радио бутон',
	'REMOVED_PROFILE_FIELD'		=> 'Полето е успешно изтрито.',
	'REQUIRED_FIELD'			=> 'Задължително поле',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Форс полетата трябва да бъдат попълвани от потребител. Полето ще се показва при регистрация и в контролния панел.',
	'ROWS'						=> 'Редове',

	'SAVE'							=> 'Запиши',
	'SECOND_OPTION'					=> 'Втора опция',
	'STEP_1_EXPLAIN_CREATE'			=> 'Тук можете да въведете първите базови параметри на новото профил поле. Тази информация ще е нужна за втората стъпка, където ще можете да настройвате опциите и да преглеждате полето.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Тук можете да промените базовите параметри на полето. Опциите се рекалкулират. Във втората стъпка можете да преглеждате и тествате полето.',
	'STEP_1_TITLE_CREATE'			=> 'Добави поле',
	'STEP_1_TITLE_EDIT'				=> 'Промени поле',
	'STEP_2_EXPLAIN_CREATE'			=> 'Тук можете да дефинирате някой често използвани опции. След това ще можете да преглеждате полето което сте създали, така както потребителите ще го виждат.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Тук можете да дефинирате някой често използвани опции. След това ще можете да преглеждате полето което сте създали, така както потребителите ще го виждат.<br /><strong>Промените в полетата не влияят на вече въведени.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Тип на профила опции',
	'STEP_2_TITLE_EDIT'				=> 'Тип на профила опции',
	'STEP_3_EXPLAIN_CREATE'			=> 'Полетата в профила ще работят с езика по подразбиране.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Полетата в профила ще работят с езика по подразбиране.',
	'STEP_3_TITLE_CREATE'			=> 'Оставащи езикови дефиниции',
	'STEP_3_TITLE_EDIT'				=> 'Езикови дефиниции',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Въведете стойност по подразбиране. Оставете празно ако искате първата опция да е празна.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Въведете текст по подразбиране. Оставете празно ако искате първата да е празна.',
	'TRANSLATE'						=> 'Преведи',

	'USER_FIELD_NAME'	=> 'Име на полето',

	'VISIBILITY_OPTION'				=> 'Опции',
));

?>