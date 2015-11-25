<?php
/** 
*
* posting [English]
*
* @package language
* @version $Id: posting.php,v 1.52 2007/01/21 18:33:45 acydburn Exp $
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
	'ADD_ATTACHMENT'			=> 'Прикачи файл',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Ако искате да прикачите файл към вашето мнение въведете детайлите долу',
	'ADD_FILE'					=> 'Добави файл',
	'ADD_POLL'					=> 'Анкета',
	'ADD_POLL_EXPLAIN'			=> 'Ако не искате да добавяте анкета към темата си не попълвайте нищо',
	'ALREADY_DELETED'			=> 'Съобщението вече е изтрито.',
	'ATTACH_QUOTA_REACHED'		=> 'Максималната големина на файловете е достигната.',
	'ATTACH_SIG'				=> 'Добави подпис (подписите се променят от Профила)',

	'BBCODE_A_HELP'				=> 'Качен файл: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Удебелен текст: [b]текст[/b]  (alt+b)',
	'BBCODE_C_HELP'				=> 'Еднотипен текст: [code]код[/code]  (alt+c)',
	'BBCODE_E_HELP'				=> 'Създай списък: добави елементи',
	'BBCODE_F_HELP'				=> 'Размер на шрифта: [size=x-small]малък[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s е <em>Изключен</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s е <em>Включен</em>',
	'BBCODE_I_HELP'				=> 'Наклонен текст: [i]text[/i]  (alt+i)',
	'BBCODE_L_HELP'				=> 'Създай списък: [list]текст[/list]  (alt+l)',
	'BBCODE_LISTITEM_HELP'	    => 'Списък: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'Подреден списък: [list=]текст[/list]  (alt+o)',
	'BBCODE_P_HELP'				=> 'Добави изображение: [img]http://image_url[/img]  (alt+p)',
	'BBCODE_Q_HELP'				=> 'Цитиран текст: [quote]текст[/quote]  (alt+q)',
	'BBCODE_S_HELP'				=> 'Цвят на текста: [color=red]текст[/color]  Съвет: можеш да използваш и =#FF0000',
	'BBCODE_U_HELP'				=> 'Подчертан текст: [u]текст[/u]  (alt+u)',
	'BBCODE_W_HELP'				=> 'Добави URL адрес: [url]http://url[/url] или [url=http://url]URL текст[/url]  (alt+w)',
	'BBCODE_D_HELP'				=> 'Флаш елемент: [flash=ширина,височина]http://url[/flash]  (alt+d)',
	'BUMP_ERROR'				=> 'Вие не можете да избутате темата отново толкова скоро.',

	'CANNOT_DELETE_REPLIED'		=> 'Вие не можете да изтривате Ваши мнения, на които е отговорено.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Мнението е заключено. Вече не можете да го променяте.',
	'CANNOT_EDIT_TIME'			=> 'Вие не можете да изтриете или промените това мнение',
	'CANNOT_POST_ANNOUNCE'		=> 'Вие не можете да пускате Важни теми.',
	'CANNOT_POST_STICKY'		=> 'Вие не можете да закачвате теми.',
	'CHANGE_TOPIC_TO'			=> 'Темата е променена на',
	'CLOSE_TAGS'				=> 'Затвори таговете',
	'CURRENT_TOPIC'				=> 'Тема',

	'DELETE_FILE'				=> 'Изтрий файл',
	'DELETE_MESSAGE'			=> 'Изтрий съобщение',
	'DELETE_MESSAGE_CONFIRM'	=> 'Сигурен ли си, че искаш да изтриеш това съобщение?',
	'DELETE_OWN_POSTS'			=> 'Вие можете да изтривате само собствените си мнения.',
	'DELETE_POST_CONFIRM'		=> 'Сигурен ли си че искаш да изтриеш това мнение?',
	'DELETE_POST_WARN'			=> 'Веднъж изтрито, мнението не може да бъде възстановено.',
	'DISABLE_BBCODE'			=> 'Изключи BBCode',
	'DISABLE_MAGIC_URL'			=> 'Недей автоматично да правиш URL адреси',
	'DISABLE_SMILIES'			=> 'Изключи усмивките',
	'DISALLOWED_EXTENSION'		=> 'Разширението %s не е разрешено',
	'DRAFT_LOADED'				=> 'Черновата е заредена, може би сега ще довършите мнението си.<br />Черновата ще се изтрие сама след пускането на тази тема/мнение.',
	'DRAFT_LOADED_PM'			=> 'Черновата е заредена, сега може да довършите съобщението си.<br />Черновата ще бъде изтрита след като изпратите съобщението.',
	'DRAFT_SAVED'				=> 'Черновата е запазена.',
	'DRAFT_TITLE'				=> 'Заглавие на черновата',

	'EDIT_REASON'				=> 'Причина за промяната на мнението',
	'EMPTY_FILEUPLOAD'			=> 'Качения файл е празен',
	'EMPTY_MESSAGE'				=> 'Трябва да въведете съобщение.',
	'EMPTY_REMOTE_DATA'			=> 'Файл-а не може да бъде качен, моля опитайте ръчно.',

	'FLASH_IS_OFF'				=> '[flash] е <em>Изключен</em>',
	'FLASH_IS_ON'				=> '[flash] е <em>Включен</em>',
	'FLOOD_ERROR'				=> 'Вие не можете да публикувате мнение толкова рано след миналата публикация.',
	'FONT_COLOR'				=> 'Цвят на шрифта',
	'FONT_COLOR_HIDE'			=> 'Скрий цвета на текста',
	'FONT_HUGE'					=> 'Огромен',
	'FONT_LARGE'				=> 'Голям',
	'FONT_NORMAL'				=> 'Нормален',
	'FONT_SIZE'					=> 'Големина на шрифта',
	'FONT_SMALL'				=> 'Малък',
	'FONT_TINY'					=> 'Мъничък',

	'GENERAL_UPLOAD_ERROR'		=> 'Не може да се прикачи файл към %s',

	'IMAGES_ARE_OFF'			=> '[img] е <em>Изключен</em>',
	'IMAGES_ARE_ON'				=> '[img] е <em>Включен</em>',
	'INVALID_FILENAME'			=> '%s е невалидно име на файл',

	'LOAD'						=> 'Зареди чернова',
	'LOAD_DRAFT'				=> 'Зареди чернова',
	'LOAD_DRAFT_EXPLAIN'		=> 'Тук можете да изберете коя чернова да продължите. Мнението Ви ще бъде отменено. Черновите може да се контролират от Контролния панел.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Вие трябва да влезете за да можете да избутате тази тема.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Вие трябва да влезете за да можете да изтривате мнения.',
	'LOGIN_EXPLAIN_POST'		=> 'Вие трябва да влезете за да можете да пускате мнения.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Вие трябва да влезете за да можете да цитирате мнения.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Вие трябва да влезете за да можете да отговаряте на мнения.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Вие може да използвате шрифт с максимален размер до %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Флаш елементите не може да надхвърлят %1$d пиксела височина.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Флаш елементите не може да надхвърлят %1$d пиксела широчина.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Изображението не може да надхвърля %1$d пиксела височина.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Изображението не може да надхвърля %1$d пиксела широчина.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Въведете съобщението си тук, то не може да съдържа повече от <strong>%d</strong> букви.',
	'MESSAGE_DELETED'			=> 'Съобщението е изтрито успешно.',
	'MORE_SMILIES'				=> 'Виж всички усмивки',

	'NOTIFY_REPLY'				=> 'Изпрати ми email щом в темата се появи отговор',
	'NOT_UPLOADED'				=> 'Файл-а не може да бъде качен.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Вие не можете да изтривате съществуващи отговори на анкета',
	'NO_PM_ICON'				=> 'Без икона',
	'NO_POLL_TITLE'				=> 'Трябва да въведете заглавие на анкетата',
	'NO_POST'					=> 'Мнението не съществува.',
	'NO_POST_MODE'				=> 'Не е определено вид на мнението',

	'PARTIAL_UPLOAD'			=> 'Файл-а беше качен частично',
	'PHP_SIZE_NA'				=> 'Големината на качените файлове е надхвърлила максимума.',
	'PHP_SIZE_OVERRUN'			=> 'Големината на качените файлове е надхвърлила максимума от %d MB.',
	'PLACE_INLINE'				=> 'Сложи вътре',
	'POLL_DELETE'				=> 'Изтрий анкетата',
	'POLL_FOR'					=> 'Активност на анкетата',
	'POLL_FOR_EXPLAIN'			=> 'Въведете 0 или оставете празно за анкета без лимит',
	'POLL_MAX_OPTIONS'			=> 'Възможности за глас',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Това е номера възможности за които може да гласува потребител.',
	'POLL_OPTIONS'				=> 'Възможности на анкетата',
	'POLL_OPTIONS_EXPLAIN'		=> 'Сложи всяка възможност на нов ред. Можете да въведете до <strong>%d</strong> възможности.',
    'POLL_OPTIONS_EDIT_EXPLAIN'   => 'Сложи всяка възможност на нов ред. Можете да въведете до <strong>%d</strong> възможности.',
	'POLL_QUESTION'				=> 'Въпрос на анкетата',
	'POLL_TITLE_TOO_LONG'		=> 'Анкетата трябва да съдържа по-малко от 100 знака.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Размера на анкетата е прекалено голям, премахнете BBCode-овете или усмивките.',
	'POLL_VOTE_CHANGE'			=> 'Позволи промяна на глас',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Ако е включена потребителите ще могат да променят гласовете си (анкети).',
	'POSTED_ATTACHMENTS'		=> 'Прикачени файлове',
	'POST_APPROVAL_NOTIFY'      => 'Вие ще бъдете уведомен, когато мнението бъде одобрено.',
	'POST_CONFIRMATION'			=> 'Потвърждение на мнението',
	'POST_CONFIRM_EXPLAIN'		=> 'За да се предпази писането на ботове, администратора изисква да въведете код за сигурност. Ако имате проблеми с код-а свържете се с %sадминистратора%s.',
	'POST_DELETED'				=> 'Мнението е изтрито успешно',
	'POST_EDITED'				=> 'Мнението е променено успешно',
	'POST_EDITED_MOD'			=> 'Мнението беше променено, но трябва да премине през одобрение',
	'POST_GLOBAL'				=> 'Съобщение',
	'POST_ICON'					=> 'Икона на мнението',
	'POST_NORMAL'				=> 'Направи нормална',
	'POST_REVIEW'				=> 'Прегледай',
	'POST_REVIEW_EXPLAIN'		=> 'Има нов отговор в тази тема. Може би ще искате да промените мнението си.',
	'POST_STORED'				=> 'Мнението беше добавено успешно',
	'POST_STORED_MOD'			=> 'Мнението беше запазено, но трябва да бъде одобрено',
	'POST_TOPIC_AS'				=> 'След публикуването',
	'PROGRESS_BAR'				=> 'Прогрес',

	'QUOTE_DEPTH_EXCEEDED'		=> '%1$d цитата един в друг.',

	'SAVE'						=> 'Запази',
	'SAVE_DATE'					=> 'Запази на',
	'SAVE_DRAFT'				=> 'Запази черновата',
	'SAVE_DRAFT_CONFIRM'		=> 'Внимание, черновите запазват само заглавието и самото съобщение. Искате ли да запазите черновата?',
	'SMILIES'					=> 'Усмивки',
	'SMILIES_ARE_OFF'			=> 'Усмивките са <em>Изключени</em>',
	'SMILIES_ARE_ON'			=> 'Усмивките са <em>Включени</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Закачена/Важна лимит',
	'STICK_TOPIC_FOR'			=> 'Закачи темата за',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Въведи 0 или остави празно за Закачена/Важна тема без лимит',
	'STYLES_TIP'				=> 'Съвет: Стила се прилага на маркиран текст',

	'TOO_FEW_CHARS'				=> 'Мнението Ви съдържа прекалено малко букви.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Трябва да въведете поне две възможности за глас в анкетата',
	'TOO_MANY_ATTACHMENTS'		=> 'Не можете да добавите друг прикачен файл, %d е максимума.',
	'TOO_MANY_CHARS'			=> 'Мнението Ви съдържа прекалено много букви.',
    'TOO_MANY_CHARS_POST'      => 'Мнението Ви съдържа %1$d знака. Максималният позволен брой е %2$d.',
    'TOO_MANY_CHARS_SIG'      => 'Подписа ВИ съдържа %1$d знака. Максималният позволен брой е %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Вие се опитвате да въведете повече от позволените възможности за глас в анкетата',
	'TOO_MANY_SMILIES'			=> 'Мнението Ви съдържа прекалено много усмивки. Максималния позволен брой усмивки е %d.',
	'TOO_MANY_URLS'				=> 'Мнението Ви съдържа прекалено много URL адреси. Максималния позволен брой URL адреси е %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Потребител не може да гласува за повече възможности в анкета отколкото е самата анкета',
	'TOPIC_BUMPED'				=> 'Темата беше избутана успешно',

	'UNAUTHORISED_BBCODE'		=> 'Непозволени BBCodes: %s',
	'UNGLOBALISE_EXPLAIN'		=> 'За да направите тази тема отново нормална, трябва да изберете форум в който темата да съществува.',
	'UPDATE_COMMENT'			=> 'Обнови коментар',
	'URL_INVALID'				=> 'URL адреса е невалиден.',
	'URL_NOT_FOUND'				=> 'Файл-а не може да бъде намерен.',
	'URL_IS_OFF'				=> '[url] е <em>Изключено</em>',
	'URL_IS_ON'					=> '[url] е <em>Включено</em>',
	'USER_CANNOT_BUMP'			=> 'Вие не можете да избутвате теми в този форум',
	'USER_CANNOT_DELETE'		=> 'Вие не можете да изтривате мнения в този форум',
	'USER_CANNOT_EDIT'			=> 'Вие не можете да променяте мнения в този форум',
	'USER_CANNOT_REPLY'			=> 'Вие не можете да отговаряте в този форум',
	'USER_CANNOT_FORUM_POST'	=> 'Вие не можете да извършвате операции, които са забранени.',

	'VIEW_MESSAGE'				=> '%sВиж си съобщението%s',

	'WRONG_FILESIZE'			=> 'Файл-а е прекалено голям, максималния размер е %1d %2s',
	'WRONG_SIZE'				=> 'Изображението трябва да е поне %1$d пиксела широко, %2$d пиксела високо и максимално %3$d пиксела широко и %4$d пиксела високо. Изпратеното изображение е %5$d пиксела широко и %6$d пиксела високо.',
));

?>