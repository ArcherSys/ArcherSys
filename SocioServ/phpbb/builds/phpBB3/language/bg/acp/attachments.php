<?php
/** 
*
* acp_attachments [English]
*
* @package language
* @version $Id: attachments.php,v 1.21 2007/01/21 18:33:45 acydburn Exp $
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'От тук можете да конфигурирате главните настройки за прикачените файлове.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Тук можете да добавяте, изтривате, променяте или изключвате групите разширения. Имате възможност за добавите специална категория към тях.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Тук можете да управлявате разширенията. Съветваме Ви да не използвате тези разширения (<code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> и така нататък..)',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Тук можете да видите прикачените файлове, които не се използват в нито едно мнение/тема. Това често става когато потребителя качва файла на сървъра и не публикува мнението. Тези файлове могат да бъдат изтрити за да не използват пространството Ви. Прикачването на файлове към мнение изисква валиден ID.',
	'ADD_EXTENSION'						=> 'Добави разширение',
	'ADD_EXTENSION_GROUP'				=> 'Добави разширение(група)',
	'ADMIN_UPLOAD_ERROR'				=> 'Грешка при прикачване на файл: %s',
	'ALLOWED_FORUMS'					=> 'Позволени форуми',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'В кои форуми ще позволите да се прикачват файлове',
	'ALLOWED_IN_PM_POST'				=> 'Позволено',
	'ALLOW_ATTACHMENTS'					=> 'Позволени прикачванията',
	'ALLOW_ALL_FORUMS'					=> 'Позволи за всички форуми',
	'ALLOW_IN_PM'						=> 'Включи в личните съобщения',
	'ALLOW_PM_ATTACHMENTS'				=> 'Позволи прикачването на файлове в лични съобщения',
	'ALLOW_SELECTED_FORUMS'				=> 'Само форумите избрани долу',
	'ASSIGNED_EXTENSIONS'				=> 'Определени разширения',
	'ASSIGNED_GROUP'					=> 'Определени разширения(групи)',
	'ATTACH_EXTENSIONS_URL'				=> 'Разширения',
	'ATTACH_EXT_GROUPS_URL'				=> 'Разширения(групи)',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Максимален размер на файла',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Максимален размер на всеки файл, 0 е неограничен.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Максимален размер на файловете(ЛС)',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Максимален размер на прикачените файлове в лс за всеки потребител, 0 е неограничен.',
	'ATTACH_ORPHAN_URL'					=> 'Прикачени файлове(сираци)',
	'ATTACH_POST_ID'					=> 'Мнение ID',
	'ATTACH_QUOTA'						=> 'Обща квота на прикачените файлове',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Максимален размер на всички прикачени файлове, 0 е неограничен.',
	'ATTACH_TO_POST'					=> 'Прикачи файл към мнение',

	'CAT_FLASH_FILES'			=> 'Флаш файлове',
	'CAT_IMAGES'				=> 'Изображения',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime файлове',
	'CAT_RM_FILES'				=> 'RealMedia файлове',
	'CAT_WM_FILES'				=> 'Windows Media файлове',
	'CREATE_GROUP'				=> 'Създай нова група',
	'CREATE_THUMBNAIL'			=> 'Създай галерия',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Създай галерия за всички възможни ситуации.',

	'DEFINE_ALLOWED_IPS'			=> 'Позволени IPs/hostnames',
	'DEFINE_DISALLOWED_IPS'			=> 'Непозволени IPs/hostnames',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'За да въведеш няколко IP адреса или hostnames въведи всяко на нов ред. За да избереш обхват от IP адреси раздели началото и старта с тире, можеш да използваш * като маска.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Можеш да премахнеш много IP адреси чрез използване на комбинации на мишка и клавиатура за компютъра и браузъра. Премахнатите IP адреси имат син фон.',
	'DISPLAY_INLINED'				=> 'Показване на изображенията',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Ако избереш Не изображенията ще се показват като текстова връзка.',
	'DISPLAY_ORDER'					=> 'Последователност на показване на прикачените файлове',
	'DISPLAY_ORDER_EXPLAIN'			=> '',
	
	'EDIT_EXTENSION_GROUP'			=> 'Промени разширенията(група)',
	'EXCLUDE_ENTERED_IP'			=> 'Включи това за да изключиш въведения IP/hostname.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Изключи IP от позволени IPs/hostnames',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Изключи IP от непозволени IPs/hostnames',
	'EXTENSIONS_UPDATED'			=> 'Успешно променени',
	'EXTENSION_EXIST'				=> 'Разширението %s вече съществува',
	'EXTENSION_GROUP'				=> 'Разширение(група)',
	'EXTENSION_GROUPS'				=> 'Разширение(групи)',
	'EXTENSION_GROUP_DELETED'		=> 'Разширението е успешно изтрито.',
	'EXTENSION_GROUP_EXIST'			=> 'Разширението(група) %s вече съществува',

	'GO_TO_EXTENSIONS'		=> 'Отиди на управление за разширения',
	'GROUP_NAME'			=> 'Име на групата',

	'IMAGE_LINK_SIZE'			=> 'Измерения на изображение',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Покажи прикачените изображения като текстова връзка, ако файла е по-голям от това. За да изключите тази опция въведете стойностите 0px на 0px.',
	'IMAGICK_PATH'				=> 'Imagemagick път',
	'IMAGICK_PATH_EXPLAIN'		=> 'Пълния път на imagemagick convert application, пример <samp>/usr/bin/</samp>',

	'MAX_ATTACHMENTS'				=> 'Максимални прикачвания на мнение',
	'MAX_ATTACHMENTS_PM'			=> 'Максимални прикачвания на съобщение',
	'MAX_EXTGROUP_FILESIZE'			=> 'Максимален размер',
	'MAX_IMAGE_SIZE'				=> 'Максимални размери на изображенията',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Максимален размер на качените изображения в пиксели. Настрой 0px на 0px за да изключиш опцията.',
	'MAX_THUMB_WIDTH'				=> 'Максимална ширина на галерия',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Генерираната галерия няма да превиши ширината тук',
	'MIN_THUMB_FILESIZE'			=> 'Минимален размер на галерията',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Не създавайте галерия на изображения по-малки от размера тук.',
	'MODE_INLINE'					=> 'Текстов',
	'MODE_PHYSICAL'					=> 'Физически',

	'NOT_ALLOWED_IN_PM'			=> 'Изключи за личните съобщения',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Забранено',
	'NOT_ASSIGNED'				=> 'Не е въведено',
	'NO_EXT_GROUP'				=> 'Няма',
	'NO_EXT_GROUP_NAME'			=> 'Няма въведено име на група',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Няма избрана група.',
	'NO_FILE_CAT'				=> 'Няма',
	'NO_IMAGE'					=> 'Няма изображение',
	'NO_THUMBNAIL_SUPPORT'		=> 'Поддръжката на галерията е изключена.',
	'NO_UPLOAD_DIR'				=> 'Директорията за качване не съществува.',
	'NO_WRITE_UPLOAD'			=> 'Директорията за качване няма нужните права. Трябва да промените правата на папката.',

	'ONLY_ALLOWED_IN_PM'	=> 'Включи само в личните съобщения',
	'ORDER_ALLOW_DENY'		=> 'Позволи',
	'ORDER_DENY_ALLOW'		=> 'Откажи',

	'REMOVE_ALLOWED_IPS'		=> 'Премахни <em>позволените</em> IPs/hostnames',
	'REMOVE_DISALLOWED_IPS'		=> 'Премахни <em>непозволените</em> IPs/hostnames',

	'SEARCH_IMAGICK'				=> 'Търси за Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Позволи/Откажи списък',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Промени държанието когато сигурните сваляния са включени.',
	'SECURE_DOWNLOADS'				=> 'Включи сигурно сваляне',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'С помощта на тази опция, свалянията са ограничени по IP/hostnames, които вие сте дефинирали.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Сигурните сваляния не са включени. Опциите долу ще се появят, ако включите функцията.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Списъка с IP адреси е обновен успешно.',
	'SECURE_EMPTY_REFERRER'			=> 'Позволи празните посещения',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Сигурните сваляния са базирани на посещенията. Искаш ли да позволиш свалянето файлове от тези потребители?',
	'SETTINGS_CAT_IMAGES'			=> 'Настройки на изображения',
	'SPECIAL_CATEGORY'				=> 'Специална категория',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Специалните категории се появяват по друг начин в мненията.',
	'SUCCESSFULLY_UPLOADED'			=> 'Успешно качен',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Групата е успешно добавена',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Групата е успешно променена',

	'UPLOADING_FILES'				=> 'Качване на файловете',
	'UPLOADING_FILE_TO'				=> 'Качването на файла “%1$s” към мнение номер %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Нямате право да качвате файлове във форум “%s”',
	'UPLOAD_DIR'					=> 'Директория',
	'UPLOAD_DIR_EXPLAIN'			=> 'Път към папката с прикачените файлове.',
	'UPLOAD_ICON'					=> 'Икона',
	'UPLOAD_NOT_DIR'				=> 'Мястото което сте избрали не е папка.',
));

?>