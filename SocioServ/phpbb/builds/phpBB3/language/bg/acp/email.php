<?php
/** 
*
* acp_email [English]
*
* @package language
* @version $Id: email.php,v 1.11 2007/01/26 16:09:16 acydburn Exp $
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'От тук можете да изпращате съобщение до всички потребители на форума. Един email ще бъде копиран на всичките потребители. Ако изпращате съобщения до голяма група бъдете търпеливи при изпращането, може да отнеме малко време.',
	'ALL_USERS'						=> 'Всички потребители',

	'COMPOSE'				=> 'Напиши ново',

	'EMAIL_SEND_ERROR'		=> 'Появи се грешка при изпращането на съобщението. Проверете %sЛога с грешките%s за информация.',
	'EMAIL_SENT'			=> 'Съобщението е изпратено.',
	'EMAIL_SENT_QUEUE'		=> 'Съобщението не беше изпратено.',

	'LOG_SESSION'			=> 'Лог на сесията',

	'SEND_IMMEDIATELY'		=> 'Изпрати незабавно',
	'SEND_TO_GROUP'			=> 'Изпрати на група',
	'SEND_TO_USERS'			=> 'Изпрати на потребители',
	'SEND_TO_USERS_EXPLAIN'	=> 'Въведете всяко име на нов ред',
	
	'MAIL_HIGH_PRIORITY'	=> 'Висок',
	'MAIL_LOW_PRIORITY'		=> 'Нисък',
	'MAIL_NORMAL_PRIORITY'	=> 'Нормален',
	'MAIL_PRIORITY'			=> 'Приоритет',
	'MASS_MESSAGE'			=> 'Вашето съобщение',
	'MASS_MESSAGE_EXPLAIN'	=> 'Можете да въвеждате само текст без BBCode или HTML.',
	
	'NO_EMAIL_MESSAGE'		=> 'Трябва да въведете съобщение.',
	'NO_EMAIL_SUBJECT'		=> 'Трябва да въведете заглавие на съобщението си.',
));

?>