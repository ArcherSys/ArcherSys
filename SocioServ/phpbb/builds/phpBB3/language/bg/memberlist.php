<?php
/** 
*
* memberlist [English]
*
* @package language
* @version $Id: memberlist.php,v 1.27 2006/12/06 14:44:40 dhn2 Exp $
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
	'ABOUT_USER'			=> 'Профил',
	'ACTIVE_IN_FORUM'		=> 'Най-активен във форум',
	'ACTIVE_IN_TOPIC'		=> 'Най-активна тема',
	'ADD_FOE'				=> 'Добави враг',
	'ADD_FRIEND'			=> 'Добави приятел',
	'AFTER'					=> 'След',	

	'ALL'					=> 'Всички',
	
	'BEFORE'				=> 'Преди',

	'CC_EMAIL'				=> 'Изпрати ми копие',
	'CONTACT_USER'			=> 'Връзка с потребителя',

	'DEST_LANG'				=> 'Език',
	'DEST_LANG_EXPLAIN'		=> 'Избери подходящ език за получателя на това съобщение.',

	'EMAIL_BODY_EXPLAIN'	=> 'Съобщението ще бъде изпратено като текст, без HTML и BBCode.',
	'EMAIL_DISABLED'		=> 'Всички функции свързани с email-a са изключени',
	'EMAIL_SENT'			=> 'Email-a беше изпратен.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Съобщението ще бъде изпратено като текст, без HTML и BBCode.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Адреса на получателя трябва да е валиден.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Трябва да въведете съобщение.',
	'EMPTY_MESSAGE_IM'      => 'Трябва да въведете съобщение.',
	'EMPTY_NAME_EMAIL'		=> 'Трябва да въведете реално име на получателя.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Трябва да въведете заглавие на email-а.',
	'EQUAL_TO'				=> 'Равно на',

	'FIND_USERNAME_EXPLAIN'	=> 'Използвай тази форма за търсене на потребители. Не е задължително да попълваш всички полета. Можеш да използваш * като маска. Когато въвеждаш дати използвай формата <kbd>YYYY-MM-DD</kbd>, пример <samp>2004-02-29</samp>. Използвай чекбоксовете за да избереш един или повече имена.',
	'FLOOD_EMAIL_LIMIT'		=> 'Вие не можете да изпратите още един email. Опитайте по късно.',

	'GROUP_LEADER'			=> 'Лидер на групата',

	'HIDE_MEMBER_SEARCH'	=> 'Скрии търсенето на потребител',

	'IM_ADD_CONTACT'		=> 'Добави контакт',
	'IM_AIM'				=> 'Трябва да имате инсталиран AOL Instant Messenger за да използвате това.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Свали',
	'IM_ICQ'				=> 'Важно! Потребителят може да е забранил получаването на съобщения от форуми.',
	'IM_JABBER'				=> 'Важно! Потребителят може да е забранил получаването на съобщения от форуми.',
	'IM_JABBER_SUBJECT'		=> 'Това е автоматично генерирано съобщение, моля не отговаряйте! Съобщение от %1$s на %2$s',
	'IM_MESSAGE'			=> 'Вашето съобщение',
	'IM_MSNM'				=> 'Трябва да имате инсталиран Windows Messenger за да използвате това.',
	'IM_MSNM_BROWSER'		=> 'Браузъра ви не поддържа това.',
	'IM_MSNM_CONNECT'		=> 'MSNM не е свързан.\nТрябва да се свържете към MSNM за да продължите.',		
	'IM_NAME'				=> 'Вашето име',
	'IM_NO_DATA'         => 'Няма информация за потребителя.',
	'IM_NO_JABBER'			=> 'Директното изпращане на съобщения до Jabber потребители не се поддържа.',
	'IM_RECIPIENT'			=> 'Получател',
	'IM_SEND'				=> 'Изпрати',
	'IM_SEND_MESSAGE'		=> 'Изпрати',
	'IM_SENT_JABBER'		=> 'Съобщението до %1$s беше изпратено успешно.',
	'IM_USER'				=> 'Изпрати бързо съобщение',
	
	'LAST_ACTIVE'				=> 'Последно активен',
	'LESS_THAN'					=> 'По-малко от',
	'LIST_USER'					=> '1 потребител',
	'LIST_USERS'				=> '%d потребители',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Администратора изисква да бъдете регистриран и влязъл в акаунта си за да видите екипа.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Администратора изисква да бъдете регистриран и влязъл в акаунта си за да имате достъп до листата с потребителите.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Администратора изисква да бъдете регистриран и влязъл в акаунта си за да търсите потребители.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Администратора изисква да бъдете регистриран и влязъл в акаунта си за да преглеждате профили.',

	'MORE_THAN'				=> 'Повече от',

	'NO_EMAIL'				=> 'Вие нямате право да изпращате email до този потребители.',
	'NO_VIEW_USERS'			=> 'Вие не можете да преглеждате профилите на потребителите.',

	'ORDER'					=> 'Тип',
	'OTHER'					=> 'Друг',

	'POST_IP'				=> 'IP/домейн',

	'RANK'					=> 'Ранг',
	'REAL_NAME'				=> 'Име на получателя',
	'RECIPIENT'				=> 'Получател',
	'REMOVE_FOE'			=> 'Изтрий врага',
	'REMOVE_FRIEND'			=> 'Изтрий приятел',

	'SEND_AIM_MESSAGE'		=> 'Изпрати AIM съобщение',
	'SEND_ICQ_MESSAGE'		=> 'Изпрати ICQ съобщение',
	'SEND_JABBER_MESSAGE'	=> 'Изпрати Jabber съобщение',
	'SEND_MSNM_MESSAGE'		=> 'Изпрати MSNM/WLM съобщение',
	'SEND_YIM_MESSAGE'		=> 'Изпрати YIM съобщение',
	'SEARCH_USER_POSTS'		=> 'Виж всички мнения на потребителя',
	'SELECT_MARKED'			=> 'Избери маркираните',
	'SELECT_SORT_METHOD'	=> 'Избери сортиращ метод',
	'SEND_IM'				=> 'Бързо съобщение',
	'SEND_MESSAGE'			=> 'Съобщение',
	'SORT_EMAIL'			=> 'Email',
	'SORT_LAST_ACTIVE'		=> 'Последно активен',
	'SORT_POST_COUNT'		=> 'Брой мнения',

	'USERNAME_BEGINS_WITH'	=> 'Име започващо с',
	'USER_ADMIN'			=> 'Администрирай',
	'USER_FORUM'			=> 'Статистика',
	'USER_ONLINE'			=> 'На линия',
	'USER_PRESENCE'			=> 'Присъствие',

	'VIEWING_PROFILE'		=> 'Преглеждане на профил - %s',
	'VISITED'				=> 'Последно посещение',

	'WWW'					=> 'Уеб-сайт',
));

?>