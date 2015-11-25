<?php
/** 
*
* acp_ban [English]
*
* @package language
* @version $Id: ban.php,v 1.10 2006/12/22 22:51:12 shs Exp $
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 час',
	'30_MINS'		=> '30 минути',
	'6_HOURS'		=> '6 часа',

	'ACP_BAN_EXPLAIN'	=> 'От тук се контролира така нареченото банване на потребители. Чрез този метод, потърпевшият потребител няма достъп до форума за определен период от време. В полето "Причина" може да въведете причината, поради която гоните члена на форума. Както е споменато и горе времето за което потребителя е баннат може да се контролира.',

	'BAN_EXCLUDE'			=> 'Изключи от банване',
	'BAN_LENGTH'			=> 'Дължина',
	'BAN_REASON'			=> 'Причина',
	'BAN_GIVE_REASON'		=> 'Причина(публична)',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Бан списъка е успешно променен.',

	'EMAIL_BAN'					=> 'Бан на един или повече email адреси',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Позволява Ви да изключите въведения email адрес от всички настоящи банове.',
	'EMAIL_BAN_EXPLAIN'			=> 'За да добавите повече от един email адрес въведете всеки един на нов ред. Можете да използвате * като маска, пример *@hotmail.com, *@*.domain.tld и други.',
	'EMAIL_NO_BANNED'			=> 'Няма баннати email адреси',
	'EMAIL_UNBAN'				=> 'Премахване на бан',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Тук можете да премахнете бан на потребител.',

	'IP_BAN'					=> 'Бан на един или повече IP адреси',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Позволява Ви да изключите въведения IP адрес от всички настоящи банове.',
	'IP_BAN_EXPLAIN'			=> 'За да добавите няколко IP/hostname адреса сложете всеки един на нов ред. Можете да използвате * като маска или тире (-), ако става въпрос за диапазон от много IP адреса.',
	'IP_HOSTNAME'				=> 'IP адрес/hostname',
	'IP_NO_BANNED'				=> 'Няма баннати IP адреси',
	'IP_UNBAN'					=> 'Премахване на бан',
	'IP_UNBAN_EXPLAIN'			=> 'Тук можете да премахнете бан на потребител.',

	'LENGTH_BAN_INVALID'		=> 'Датата трябва да е форматирана <kbd>YYYY-MM-DD</kbd>.',
	
	'PERMANENT'		=> 'Завинаги',
	
	'UNTIL'						=> 'До',
	'USER_BAN'					=> 'Бан на един или повече потребители',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Позволява Ви да изключите въведеното име от всички настоящи банове.',
	'USER_BAN_EXPLAIN'			=> 'Можете да баннете няколко потребителя, като въведете всяко име на нов ред. Използвайте <u>Намери потребител</u> за добавяне на един или повече потребителя автоматично.',
	'USER_NO_BANNED'			=> 'Няма баннати потребители',
	'USER_UNBAN'				=> 'Премахване на бан',
	'USER_UNBAN_EXPLAIN'		=> 'Тук можете да премахнете бан на потребител.',
	
	
));

?>