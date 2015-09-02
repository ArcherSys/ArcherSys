<?php
/** 
*
* posting [English]
*
* @package language
* @version $Id: posting.php,v 1.29 2007/01/27 18:33:26 shs Exp $
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

// BBCodes 
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode е специално допълнение към HTML предлагащо добър контрол на елементи и текст. От тази страница можете да добавяте, изтрива или променяте допълнителните BBCodes.',
	'ADD_BBCODE'				=> 'Добави нов BBCode',

	'BBCODE_ADDED'				=> 'BBCode добавен успешно.',
	'BBCODE_EDITED'				=> 'BBCode променен успешно.',
	'BBCODE_NOT_EXIST'			=> 'BBCode който сте избрал не съществува.',
	'BBCODE_HELPLINE'			=> 'Помощен ред',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Допълнителен текст към BBCode',
	'BBCODE_HELPLINE_TEXT'		=> 'Помощен ред текст',
	'BBCODE_INVALID_TAG_NAME'	=> 'BBCode (таг) името вече съществува.',
    'BBCODE_INVALID'         => 'Кода е съдържа грешки.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'BBCode трябва да съдържа отварящ и затварящ таг.',
	'BBCODE_TAG'				=> 'Таг',
	'BBCODE_TAG_TOO_LONG'		=> 'Името на тага е прекалено дълго.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Тага е прекалено дълъг, трябва да въведете по-къс.',
	'BBCODE_USAGE'				=> 'BBCode използване',
	'BBCODE_USAGE_EXAMPLE'		=> '[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Тук можете да дефинирате използването на таг.',

	'EXAMPLE'						=> 'Пример:',
	'EXAMPLES'						=> 'Примери:',

	'HTML_REPLACEMENT'				=> 'HTML заместване',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color:{COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family:{SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'От тук можете да определите заместването на HTML по подразбиране (всеки шаблон си има собствен HTML замествач).',

	'TOKEN'					=> 'Знак',
	'TOKENS'				=> 'Знаци',
	'TOKENS_EXPLAIN'		=> '',
	'TOKEN_DEFINITION'		=> 'Какво може да бъде?',
	'TOO_MANY_BBCODES'		=> 'Вие не можете да създавате повече BBCodes.',

	'tokens'	=>	array(
		'TEXT'			=> 'Всякакъв текст, включително чужди знаци, числа, и други…',
		'NUMBER'		=> 'Всякакви числа',
		'EMAIL'			=> 'Валиден email адрес',
		'URL'			=> 'Валиден URL адрес използващ различен протокол (http, ftp, и други... не могат да бъдат използвани за javascript експлоити).',
		'LOCAL_URL'		=> 'Локален URL адрес. Той не трябва да съдържа име на сървър или протокол.',
		'COLOR'			=> 'HTML цвят'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'От тази страница можете да добавяте, изтривате или променяте иконите, които потребителите слагат на темите или мненията. Иконите се показват до заглавието на темата/мнението при преглеждането на форум/тема. Имате възможност да добавяте нови пакети.',
	'ACP_SMILIES_EXPLAIN'	=> 'Усмивки или емотикони са малки, понякога анимирани изображения използвани за израз на емоция. От тази страница можете да добавяте, изтривате или променяте усмивките. Имате възможност да добавяте нови пакети.',
	'ADD_SMILIES'			=> 'Добави усмивки',
	'ADD_SMILEY_CODE'		=> 'Добави допълнителен код на усмивката',
	'ADD_ICONS'				=> 'Добави икони',
	'AFTER_ICONS'			=> 'След %s',
	'AFTER_SMILIES'			=> 'След %s',

	'CODE'						=> 'Код',
	'CURRENT_ICONS'				=> 'Икони',
	'CURRENT_ICONS_EXPLAIN'		=> 'Трябва да решиш какво ще правиш с иконите',
	'CURRENT_SMILIES'			=> 'Усмивки',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Трябва да решиш какво ще правиш с усмивките',

	'DISPLAY_ON_POSTING'	=> 'Показвай при писане',
    'DISPLAY_POSTING'         => 'Покажи на страницата за публикуване',
    'DISPLAY_POSTING_NO'      => 'Не показвай на страницата за публикуване',

	'EDIT_ICONS'				=> 'Промени икони',
	'EDIT_SMILIES'				=> 'Промени усмивки',
	'EMOTION'					=> 'Емоция',
	'EXPORT_ICONS'				=> 'Експортирай и свали icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sСлед като натиснете на тази връзка, конфигурацията на инсталираните икони ще бъде пакетирана в <samp>icons.pak</samp>. Този пакет може да бъде използван за създаване на <samp>.zip</samp> или <samp>.tgz</samp> файлове съдържащи всички икони плюс <samp>icons.pak</samp> конфигурационния файл%s.',
	'EXPORT_SMILIES'			=> 'Експортирай и свали smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sСлед като натиснете на тази връзка, конфигурацията на инсталираните усмивки ще бъде пакетирана в <samp>smilies.pak</samp>. Този пакет може да бъде използван за създаване на <samp>.zip</samp> или <samp>.tgz</samp> файлове съдържащи всички усмивки плюс <samp>smilies.pak</samp> конфигурационния файл%s.',

	'FIRST'			=> 'Първо',

	'ICONS_ADD'				=> 'Добави нова икона',
    'ICON_NONE_ADDED'      => 'Не беше добавена икона.',
    'ICONS_ONE_ADDED'      => 'Иконата беше добавена успешно.',
    'ICONS_ADDED'         => 'Иконите бяха добавени успешно.',
	'ICONS_ADDED'			=> 'Иконата е добавена успешно.',
	'ICONS_CONFIG'			=> 'Конфигурация',
	'ICONS_DELETED'			=> 'Иконата е изтрита успешно.',
	'ICONS_EDIT'			=> 'Промени иконата',
    'ICONS_ONE_EDITED'      => 'Иконата е променена успешно.',
    'ICON_NONE_EDITED'      => 'Не бяха променени икони.',
    'ICONS_EDITED'         => 'Иконите са променени успешно.',
	'ICONS_EDITED'			=> 'Иконата е променена успешно.',
	'ICONS_HEIGHT'			=> 'Височина на иконата',
	'ICONS_IMAGE'			=> 'Изображение',
	'ICONS_IMPORTED'		=> 'Пакета с иконите е инсталиран успешно.',
	'ICONS_IMPORT_SUCCESS'	=> 'Пакета с иконите е импортиран успешно.',
	'ICONS_LOCATION'		=> 'Локация на икона',
	'ICONS_NOT_DISPLAYED'	=> 'Показаните икони няма да се показват на страницата за публикуване',
	'ICONS_ORDER'			=> 'Подредба',
	'ICONS_URL'				=> 'Файл',
	'ICONS_WIDTH'			=> 'Ширина на иконата',
	'IMPORT_ICONS'			=> 'Инсталирай иконите',
	'IMPORT_SMILIES'		=> 'Инсталирай усмивките',

	'KEEP_ALL'			=> 'Запази всички',

	'MASS_ADD_SMILIES'	=> 'Добави много усмивки',

	'NO_ICONS_ADD'		=> 'Няма икони за добавяне.',
	'NO_ICONS_EDIT'		=> 'Няма икони за модифициране.',
	'NO_ICONS_EXPORT'	=> 'Няма икони за създаване на пакет.',
	'NO_ICONS_PAK'		=> 'Пакета не е намерен.',
	'NO_SMILIES_ADD'	=> 'Няма усмивки за добавяне.',
	'NO_SMILIES_EDIT'	=> 'Няма усмивки за променяне.',
	'NO_SMILIES_EXPORT'	=> 'Няма усмивки за създаване на пакет.',
	'NO_SMILIES_PAK'	=> 'Пакета не е намерен.',

	'PAK_FILE_NOT_READABLE'		=> 'Не мога да прочета <samp>.pak</samp> файла.',

	'REPLACE_MATCHES'	=> 'Замести намерените',

	'SELECT_PACKAGE'			=> 'Избери пакет',
	'SMILIES_ADD'				=> 'Добави нова усмивка',
    'SMILIES_NONE_ADDED'      => 'Не бяха добавени усмивки.',
    'SMILIES_ONE_ADDED'         => 'Усмивката е добавена успешно.',
    'SMILIES_ADDED'            => 'Усмивките са добавени успешно.',
	'SMILIES_ADDED'				=> 'Усмивката е добавена успешно.',
	'SMILIES_CODE'				=> 'Код на усмивка',
	'SMILIES_CONFIG'			=> 'Конфигурация',
	'SMILIES_DELETED'			=> 'Усмивката е изтрита успешно.',
	'SMILIES_EDIT'				=> 'Променете усмивката',
    'SMILIES_NONE_EDITED'      => 'Не бяха променени усмивки.',
    'SMILIES_ONE_EDITED'      => 'Усмивката е променена успешно.',
    'SMILIES_EDITED'         => 'Усмивките са променени успешно.',
	'SMILIES_EDITED'			=> 'Усмивката е променена успешно.',
	'SMILIES_EMOTION'			=> 'Емотикони',
	'SMILIES_HEIGHT'			=> 'Височина',
	'SMILIES_IMAGE'				=> 'Изображение',
	'SMILIES_IMPORTED'			=> 'Пакета е инсталиран успешно.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Пакета е импортиран успешно.',
	'SMILIES_LOCATION'			=> 'Локация',
	'SMILIES_NOT_DISPLAYED'		=> 'Показаните усмивки няма да се показват на страницата за писане',
	'SMILIES_ORDER'				=> 'Подредба',
	'SMILIES_URL'				=> 'Файл',
	'SMILIES_WIDTH'				=> 'Ширина',

	'WRONG_PAK_TYPE'	=> 'Пакета не съдържа нужната информация.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'От този контролен панел, можете да добавяте, променяте и изтривате думи, които автоматично ще бъдат цензурирани във форумите. Включително потребителски имена съдържащи такива думи ще бъдат забранени. Можете да използвате (*) като маска.',
	'ADD_WORD'				=> 'Добави дума',

	'EDIT_WORD'		=> 'Промени цензурата',
	'ENTER_WORD'	=> 'Трябва да въведеш думата и заместителя.',

	'NO_WORD'	=> 'Няма избрани думи.',

	'REPLACEMENT'	=> 'Заместител',

	'UPDATE_WORD'	=> 'Обнови цензурата',

	'WORD'				=> 'Дума',
	'WORD_ADDED'		=> 'Цензурата е успешно добавена.',
	'WORD_REMOVED'		=> 'Цензурата е успешно премахната.',
	'WORD_UPDATED'		=> 'Цензурата е успешно обновена.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'От тук можете да добавяте, променяте, преглеждате и изтривате рангове. Също така можете да създавате различни рангове, които могат да бъдат използвани от другите потребители.',
	'ADD_RANK'				=> 'Добави нов ранг',

	'MUST_SELECT_RANK'		=> 'Трябва да избереш ранг.',
	
	'NO_ASSIGNED_RANK'		=> 'Няма избран специален ранг.',
	'NO_RANK_TITLE'			=> 'Не сте избрали заглавие на ранга.',
	'NO_UPDATE_RANKS'		=> 'Ранга е успешно изтрит. Потребителските акаунти не са променени, трябва да го направите ръчно.',

	'RANK_ADDED'			=> 'Ранга е успешно добавен.',
	'RANK_IMAGE'			=> 'Изображение',
	'RANK_IMAGE_EXPLAIN'	=> 'Изображение на ранга',
	'RANK_MINIMUM'			=> 'Минимум мнения',
	'RANK_REMOVED'			=> 'Ранга е успешно изтрит.',
	'RANK_SPECIAL'			=> 'Направи специален ранг',
	'RANK_TITLE'			=> 'Заглавие',
	'RANK_UPDATED'			=> 'Ранга е успешно променен.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'От тук можете да контролирате потребителските имена, които няма да бъдат позволени. Можете да използвате (*) като маска. Опциите не важат за вече регистрирани имена.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Можете да използвате (*) като маска.',
	'ADD_DISALLOW_TITLE'	=> 'Добави забранено име',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Вие можете да изтривате забранени имена като изберете име от списъка и кликнете давай.',
	'DELETE_DISALLOW_TITLE'		=> 'Изтрий забранено име',
	'DISALLOWED_ALREADY'		=> 'Името което сте въвели не може да бъде забранено. Проверете дали вече не съществува.',
	'DISALLOWED_DELETED'		=> 'Името е успешно изтрито.',
	'DISALLOW_SUCCESSFUL'		=> 'Името е успешно добавено.',

	'NO_DISALLOWED'				=> 'Няма',
	'NO_USERNAME_SPECIFIED'		=> 'Не сте въвели потребителско име.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'От тук можете да управлявате причините използвани в сигналите/докладите за мнение. Една от причините е по подразбиране (маркирана с *) нея не можете да изтриете.',
	'ADD_NEW_REASON'		=> 'Добави причина',
	'AVAILABLE_TITLES'		=> 'Заети заглавия',
	
	'IS_NOT_TRANSLATED'			=> 'Причината <strong>не е</strong> локализирана.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> '',
	'IS_TRANSLATED'				=> 'Причината е локализирана.',
	'IS_TRANSLATED_EXPLAIN'		=> '',
	
	'NO_REASON'					=> 'Причината не може да бъде намерена.',
	'NO_REASON_INFO'			=> 'Трябва да въведеш заглавие и описание.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Не можете да изтриете причината по подразбиране.',

	'REASON_ADD'				=> 'Добави причина',
	'REASON_ADDED'				=> 'Причината е успешно добавена.',
	'REASON_ALREADY_EXIST'		=> 'Вече съществува причина с такова име.',
	'REASON_DESCRIPTION'		=> 'Описание',
	'REASON_DESC_TRANSLATED'	=> 'Публично описание',
	'REASON_EDIT'				=> 'Промени причина',
	'REASON_EDIT_EXPLAIN'		=> 'Тук можете да добавяте или променяте причина.',
	'REASON_REMOVED'			=> 'Причината е успешно премахната.',
	'REASON_TITLE'				=> 'Заглавие',
	'REASON_TITLE_TRANSLATED'	=> 'Публично заглавие',
	'REASON_UPDATED'			=> 'Причината е успешно променена.',

	'USED_IN_REPORTS'		=> 'Използва се в докладите',
));

?>