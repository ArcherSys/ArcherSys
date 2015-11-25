<?php
/** 
*
* install [English]
*
* @package language
* @version $Id: install.php,v 1.81 2007/01/26 16:09:16 acydburn Exp $
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
	'ADMIN_CONFIG'				=> 'Админ конфигурация',
	'ADMIN_PASSWORD'			=> 'Админ парола',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Потвърди паролата',
	'ADMIN_PASSWORD_EXPLAIN'	=> '(Паролата трябва да е м/у 6 и 30 знака дълга)',
	'ADMIN_TEST'				=> 'Провери админ настройки',
	'ADMIN_USERNAME'			=> 'Админ име',
	'ADMIN_USERNAME_EXPLAIN'	=> '(Името трябва да е м/у 3 и 20 знака дълго)',
	'APP_MAGICK'				=> 'Поддръжка на imagemagick [ Прикачвания ]',
	'AUTHOR_NOTES'				=> 'Бележки<br />» %s',
	'AVAILABLE'					=> 'Работи',
	'AVAILABLE_CONVERTORS'		=> 'Свободни конвертори',

	'BEGIN_CONVERT'					=> 'Започни конвертирането',
	'BLANK_PREFIX_FOUND'			=> 'Валидна инсталация без използване на prefix.',
	'BOARD_NOT_INSTALLED'			=> 'Няма намерена инсталация',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'За да обновите форума с по-нова версия трябва да имате инсталиран phpBB3. Искате ли да <a href="%s">продължите с инсталацията</a>.',

	'CATEGORY'					=> 'Категория',
	'CACHE_STORE'				=> 'Кеш тип',
	'CACHE_STORE_EXPLAIN'		=> '',
	'CAT_CONVERT'				=> 'Конвертирай',
	'CAT_INSTALL'				=> 'Инсталирай',
	'CAT_OVERVIEW'				=> 'Прегледай',
	'CAT_UPDATE'				=> 'Обновяване',
	'CHANGE'					=> 'Промени',
	'CHECK_TABLE_PREFIX'		=> 'Проверете prefix-a на таблицата и опитайте отново.',
	'CLEAN_VERIFY'				=> 'Потвърждаване на финалната структура',
	'CLEANING_USERNAMES'      => 'Изчистване на потребителите',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> е чисто потребителско име за:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Бяха открити потребителски име в конфликт. За да продължите обновяването на форума, трябва да ги преименувате или изтриете.',
	'COLLIDING_USER'			=> '» потребител id: <strong>%d</strong> потребителско име: <strong>%s</strong> (%d мнения)',
	'CONFIG_CONVERT'			=> 'Конвертиране на конфигурацията',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Писането в/у конфигурационния файл не е възможно. Алтернативите са показани долу.',
	'CONFIG_FILE_WRITTEN'		=> 'Конфигурационния файл беше настроен. Сега можете да продължите към следващата стъпка.',
	'CONFIG_PHPBB_EMPTY'		=> 'Стойност-а "%s" е празна.',
	'CONFIG_RETRY'				=> 'Опитай отново',
	'CONTACT_EMAIL_CONFIRM'		=> 'Потвърди email-а',
	'CONTINUE_CONVERT'			=> 'Продължи с конвертирането',
	'CONTINUE_CONVERT_BODY'		=> 'Имате възможност да избирате м/у няколко нови конвертиращи версии или да продължите конвертирането.',
	'CONTINUE_LAST'				=> 'Продължи с последното',
	'CONTINUE_OLD_CONVERSION'	=> 'Продължи с предишното стартирано конвертиране',
	'CONVERT'					=> 'Конвертирай',
	'CONVERT_COMPLETE'			=> 'Конвертирането е завършено успешно',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Вие успешно обновихте форума си до версия phpBB 3.0. Сега можете да влезете, вече имате <a href="../">достъп до вашия форум</a>.',
	'CONVERT_INTRO'				=> 'Добре дошли в phpBB',
	'CONVERT_INTRO_BODY'		=> 'От тук можете да импортирате информацията от други (инсталирани) форум системи. Списъка долу показва всички свободни конвертирани модули.',
	'CONVERT_NEW_CONVERSION'	=> 'Ново конвертиране',
	'CONVERT_NOT_EXIST'			=> 'Избрания конвертор не съществува',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Информацията, която въведохте беше одобрена. За да започнете конвертирането натиснете бутона долу',
    'CONV_ERR_FATAL'					=> 'Грешка при конвертиране',
	
	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP качването на прикачени файлове е включено при стария форум. Изключете FTP качването и се уверете, че сте избрали валидна директория, и тогава копирайте всички прикачени файлове в новата директория. След като направите това, рестартирайте конвертирането.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Няма информация за този конвертор.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Не мога да намеря информация за достъпа до форума.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Не мога да взема информация категориите.',
	'CONV_ERROR_GET_CONFIG'				=> 'Не мога да намеря конфигурацията на форума.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Няма достъп/не мога да прочета "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Не мога да намеря групова ауторизация.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Несъвместимост е засечена в add_bots() - трябва да ги добавите ръчно.',
	'CONV_ERROR_INSERT_BOT'				=> 'Не мога да добавя ботовете в таблицата.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Не мога да добавя ботовете в таблицата.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Не мога да добавя потребител в таблица.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Грешка',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Бележка: трябва да определиш $convertor[\'avatar_path\'] да използваш %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Път към форума източник не е зададен.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Бележка: трябва да определиш $convertor[\'avatar_gallery_path\'] да използваш %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Групата "%1$s" не може да бъде намерена в %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Бележка: трябва да определиш $convertor[\'ranks_path\'] да използваш %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Бележка: трябва да определиш $convertor[\'smilies_path\'] да използваш %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Бележка: трябва да определиш $convertor[\'upload_path\'] да използваш %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Грешка при добавяне на права.',
	'CONV_ERROR_PM_COUNT'				=> 'Не мога да преброя папките в личните съобщения.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Не мога да добавя новите категории.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Не мога да добавя новите форуми.',
	'CONV_ERROR_USER_ACCESS'			=> 'Не мога да взема ауторизация за потребител.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Грешна група "%1$s" дефинирана в %2$s.',
    'CONV_OPTIONS_BODY'               => 'Страницата съдържа информация нужна за достъп до форума. Въведи информацията за базата данни на главния форум; обновяващия процес няма да промени нищо в базата данни.',
	'CONV_SAVED_MESSAGES'				=> 'Запазени съобщения',

	'COULD_NOT_COPY'			=> 'Не мога да копирам файла <strong>%1$s</strong> в <strong>%2$s</strong><br /><br />Проверете дали директорията съществува и нейните права.',
	'COULD_NOT_FIND_PATH'		=> 'Не мога да намеря пътя към форума. Проверете настройките и опитайте отново.<br />» Зададения път е %s',

	'DBMS'						=> 'Тип на базата данни',
	'DB_CONFIG'					=> 'Конфигурация',
	'DB_CONNECTION'				=> 'Връзка',
	'DB_ERR_INSERT'				=> 'Грешка при <code>вмъкване</code>',
	'DB_ERR_LAST'				=> 'Грешка при <var>query_last</var>',
	'DB_ERR_QUERY_FIRST'		=> 'Грешка при <var>query_first</var>',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Грешка при <var>query_first</var>, %s ("%s")',
	'DB_ERR_SELECT'				=> 'Грешка при <code>избор</code>',
	'DB_HOST'					=> 'Сървър база данни или DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN - Data Source Name и се използва само при ODBC инсталации.',
	'DB_NAME'					=> 'Име на базата данни',
	'DB_PASSWORD'				=> 'Парола на базата данни',
	'DB_PORT'					=> 'Порт на сървъра',
	'DB_PORT_EXPLAIN'			=> 'Оставете празно, ако не знаете за какво се използва.',
	'DB_USERNAME'				=> 'База данни потребителско име',
	'DB_TEST'					=> 'Тествай връзката',
	'DEFAULT_LANG'				=> 'Език по подразбиране',
	'DEFAULT_PREFIX_IS'			=> 'Конвертора не можа да намери таблици с избрания префикс. Уверете се в мястото на базата данни. Префикса по подразбиране за %1$s е <strong>%2$s</strong>',
	'DEV_NO_TEST_FILE'			=> 'Няма зададена стойност за test_file променливата в този конвертор. Ако си потребител на този конвертор, не трябва да виждаш тази грешка, пиши на създателя на конвертора.',
	'DIRECTORIES_AND_FILES'		=> 'Директория и инсталация на файлове',
	'DISABLE_KEYS'				=> 'Изключени копчета',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Отдалечена FTP поддръжка [ Инсталация ]',
	'DLL_GD'					=> 'GD поддръжка [ Визуално потвърждение ]',
	'DLL_MBSTRING'				=> 'Multi-byte знаци поддръжка',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL с MySQLi разширение',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'XML поддръжка [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib компресия поддръжка [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Свали конфигурацията',
	'DL_CONFIG_EXPLAIN'			=> 'Можеш да свалиш завършения config.php файл на твоя компютър. След това ще трябва да го качите ръчно като заместите съществуващия с този. Трябва да качите файла в ASCII формат. След като направите всичко това, кликнете "готово" за да преминете към следващата стъпка.',
	'DL_DOWNLOAD'				=> 'Свали',
	'DONE'						=> 'Готово',

	'ENABLE_KEYS'				=> 'Операцията може да отнеме малко време',

	'FILES_OPTIONAL'			=> 'Незадължителния файлове и директории',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Незадължителни</strong> - тези файлове, директории или права не се изискват. ',
	'FILES_REQUIRED'			=> 'Файлове и директории',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Задължителни</strong> - За да функционира както трябва, форма трябва да има достъп до тези файлове.',
	'FILLING_TABLE'				=> 'Запълване на таблица <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Запълване на таблици',
	'FINAL_STEP'				=> 'Премини към последната стъпка',
	'FORUM_ADDRESS'				=> 'Форум адрес',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Това е URL адресът към вашия форум, пример <samp>http://www.example.com/phpBB2/</samp>.',
	'FORUM_PATH'				=> 'Път към форума',
	'FORUM_PATH_EXPLAIN'		=> 'Това е пътят към root директорията.',
	'FOUND'						=> 'Намерен',
	'FTP_CONFIG'				=> 'Трансфер на конфигурацията чрез FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB засече наличие на FTP модул на сървъра. Можете да инсталирате вашия config.php файл чрез този модул. Запомнете потребителското име и паролата на този сървър!',
	'FTP_PATH'					=> 'FTP път',
	'FTP_PATH_EXPLAIN'			=> 'Това е пътя от root директорията до вашия phpbb форум',
	'FTP_UPLOAD'				=> 'Качи',

	'GPL'						=> 'General Public License',
	
	'INITIAL_CONFIG'			=> 'Конфигурация',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Сървъра установи, че phpBB може да върви на сървъра, трябва да въведете още информация. Ако не знаете как да се свържете към базата данни свържете се с хостинг компанията или phpBB поддръжката.',
	'INSTALL_CONGRATS'			=> 'Поздравления',
	'INSTALL_CONGRATS_EXPLAIN'	=> 'Вие успешно инсталирахте phpBB 3.0. Бутона долу ще Ви отведе в администраторския панел. Повече информация можете да намерите тук <a href="http://www.phpbb.com/support/documentation/3.0/">Userguide</a> и <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">Beta support forum</a>.<br /><br /><strong>Сега трябва да изтриете, преместите или преименувате install директорията преди да можете да използвате форума.</strong>',
	'INSTALL_INTRO'				=> 'Добре дошли',
	'INSTALL_INTRO_BODY'		=> 'С тази функция можете да инсталирате форума.</p><p>За да продължите инсталацията ще Ви е нужна следната информация:</p>
	<ul>
	<li>Име на сървъра на базата данни</li>
	<li>Име на базата данни</li>
	<li>Потребителско име и парола на базата данни</li>
	</ul>
	
		<p><strong>Бележка:</strong> Ако инсталирате посредством SQLite, трябва да въведете пълния път към базата данни и да оставите потребителското име и парола празни.</p>

	<p>phpBB3 поддържа показаните долу бази данни:</p>
	<ul>
		<li>MySQL 3.23 или над (MySQLi поддръжка)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>MS SQL Server 2000 или над (директно или чрез ODBC)</li>
		<li>Oracle</li>
	</ul>',
	'INSTALL_INTRO_NEXT'		=> 'За да започнете инсталацията натиснете бутона долу.',
	'INSTALL_LOGIN'				=> 'Вход',
	'INSTALL_NEXT'				=> 'Следваща стъпка',
	'INSTALL_NEXT_FAIL'			=> 'Някои тестове се провалиха трябва да поправите проблемите преди да преминете към следващата стъпка.',
	'INSTALL_NEXT_PASS'			=> 'Всички базови тестове са преминати успешно и можете да преминете към следващата стъпка на инсталацията.',
	'INSTALL_PANEL'				=> 'Инсталация',
	'INSTALL_SEND_CONFIG'		=> 'За съжаление phpBB не може да пише конфигурацията директно в/у config.php файла. Файла може да не съществува или да нямате нужните права.',
	'INSTALL_START'				=> 'Избери инсталация',
	'INSTALL_TEST'				=> 'Тествай отново',
	'INST_ERR'					=> 'Грешка при инсталация',
	'INST_ERR_DB_CONNECT'		=> 'Не мога да се свържа към базата данни',
	'INST_ERR_DB_FORUM_PATH'	=> 'Избрания файл е във Вашата форум директория. Файл-а трябва да бъде преместен в директория без директен достъп.',
	'INST_ERR_DB_NO_ERROR'		=> 'Няма съобщение за тази грешка',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Версията на MySQL инсталирана на този сървър е несъвместима с избора, който сте направили. Опитайте друга опция.',
	'INST_ERR_DB_NO_SQLITE'		=> 'Версията на SQLite е прекалено стара, трябва да бъде обновена поне до 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Версията на Oracle трябва да е настроена на <var>NLS_CHARACTERSET</var> параметри за <var>UTF8</var>. Трябва да промените версията до 9.2+ или да промените параметъра.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'Версията на Firebird е по-стара от 2.0, трябва да я промените с по-нова.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'Базата данни избрана за Firebird има размер по-малък от 8192, трябва да е поне 8192.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Базата данни която сте избрали не е в <var>UNICODE</var> или <var>UTF8</var> кодировка. Опитайте да инсталирате с база данни в <var>UNICODE</var> или <var>UTF8</var> кодировка',
	'INST_ERR_DB_NO_NAME'		=> 'Не е въведено име на базата данни',
	'INST_ERR_EMAIL_INVALID'	=> 'Email адреса, който сте въвели не е валиден',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Двата email адреса не съвпадат.',
	'INST_ERR_FATAL'			=> 'Фатална грешка при инсталация',
	'INST_ERR_FATAL_DB'			=> 'Фатална грешка е засечена при инсталацията. Може би избрания потребител няма права за създава таблици или вмъкване на информация в базата данни. Повече информация ще намерите долу.',
	'INST_ERR_FTP_PATH'			=> 'Не мога да сменя директорията.',
	'INST_ERR_FTP_LOGIN'		=> 'Не мога да се свържа в FTP сървъра',
	'INST_ERR_MISSING_DATA'		=> 'Трябва да попълните всички полета в този блок',
	'INST_ERR_NO_DB'			=> 'Не мога да заредя php модула за избраната база данни',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Паролите не съвпадат.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Въведената парола е прекалено дълга. Максималната дължина е 30 знака.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Въведената парола е прекалено къса. Минималната дължина е 6 знака.',
	'INST_ERR_PREFIX'			=> 'Таблица с този prefix вече съществува, изберете друг.',
	'INST_ERR_PREFIX_INVALID'	=> 'Prefix-a е невалиден. Премахнете някой знаци, опитайте без тире',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Въведения префикс е прекално дълъг. Максималната дължина е %d знака.',
	'INST_ERR_USER_TOO_LONG'	=> 'Потребителското име е прекалено дълго. Максималната дължина е 20 знака.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Въведеното потребителско име е прекалено късо. Минималната дължина е 3 знака.',
	'INVALID_PRIMARY_KEY'		=> 'Грешен primary key : %s',
'LONG_SCRIPT_EXECUTION'      => 'Ще отнеме време... Не спирайте скрипта.',
	
	// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp> проверка на разширение',
	'MBSTRING_CHECK_EXPLAIN'				=> '<samp>mbstring</samp> е PHP разширение което позволява multibyte функции.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Функция презареждане',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> трябва да е м/у 0 и 4',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Transparent кодиране',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> трябва да е 0',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP input character conversion',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> трябва да е зададено на <samp>pass</samp>',
	'MBSTRING_HTTP_OUTPUT'					=> 'HTTP output character conversion',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> трябва да е зададено на <samp>pass</samp>',

	'MAKE_FOLDER_WRITABLE'		=> 'Уверете се, че тази папка съществува и може да се пише в/у нея и тогава опитайте отново:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Уверете се, че тази папки съществуват и може да се пише в/у тях и тогава опитайте отново:<br />»<strong>%s</strong>',

	'NAMING_CONFLICT'			=> 'Конфликт при именуването: %s и %s <br /><br />%s',
	'NEXT_STEP'					=> 'Премини към следващата стъпка',
	'NOT_FOUND'					=> 'Не мога да намеря',
	'NOT_UNDERSTAND'			=> 'Не мога да разбера %s #%d, таблица %s ("%s")',
	'NO_CONVERTORS'				=> 'Няма конвертори за използване',
	'NO_CONVERT_SPECIFIED'		=> 'Няма избран конвертор',
	'NO_LOCATION'				=> 'Не мога да определя локация. Ако знаете дали е инсталиран imagemagick трябва да въведете пътя ръчно от администраторския панел.',
	'NO_TABLES_FOUND'			=> 'Няма нмерени таблици.',
// TODO: Write some explanatory introduction text
	'OVERVIEW_BODY'					=> 'Добре дошли в публичната версия на следващия кандидат форум след phpBB 2.0.x, phpBB 3.0! Тази версия е създадена за да помогне на нас разработчиците с отстраняването на всички проблеми.</p><p>Прочетете <a href="../docs/INSTALL.html">ръководителя за инсталиране</a> за повече информация по инсталирането на форума</p><p><strong style="text-transform: uppercase;">Бележка:</strong> Тази версия все още <strong style="text-transform: uppercase;">не е финалната</strong>.',
	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 поддръжка',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB няма да <strong>работи</strong> ако PHP инсталацията не е съвместима с UTF-8',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP функцията getimagesize() е включена',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Задължително</strong> - За да работи phpBB както трябва тази функция трябва да е включена.',
	'PHP_OPTIONAL_MODULE'			=> 'Незадължителни модули',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Незадължителни</strong> - Тези модули не са задължителни.',
	'PHP_SUPPORTED_DB'				=> 'Поддържани бази данни',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Задължителни</strong> - Трябва да се поддържа поне една от тях.',
	'PHP_REGISTER_GLOBALS'			=> 'PHP <var>register_globals</var> са изключени',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB ще работи, ако са включени, но е препоръчително те да са изключени.',
	'PHP_SAFE_MODE'					=> 'Сигурен мод',
	'PHP_SETTINGS'					=> 'PHP версии и настройки',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Задължителни</strong> - Форума трябва да е инсталиран на 4.3.3 PHP.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'PHP настройки <var>allow_url_fopen</var> включено',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>По избор</strong> - Тази функция не е задължителна, но някой функции няма да работят без нея. ',
	'PHP_VERSION_REQD'				=> 'PHP версия >= 4.3.3',
	'POST_ID'						=> 'Мнение ID',
	'PREFIX_FOUND'					=> 'Базата данни беше сканирана и prefix-а е успешно приет <strong>%s</strong>.',
	'PREPROCESS_STEP'				=> 'Процес..',
	'PRE_CONVERT_COMPLETE'			=> 'Всички стъпки са завършени. Вече можете да започнете конвертирането.',
	'PROCESS_LAST'					=> 'Преминаване към последната стъпка',

	'REFRESH_PAGE'				=> 'Обновете страницата за да продължите конвертирането',
	'REFRESH_PAGE_EXPLAIN'		=> 'Ако е зададено на Да, конвертора ще презареди страницата за да продължи конвертирането след последната стъпка. Ако това е първото конвертиране, Ви съветваме да го зададете на Не.',
//	'REQUIRED'					=> 'Required',
	'REQUIREMENTS_TITLE'		=> 'Съвместимост при инсталация',
	'REQUIREMENTS_EXPLAIN'		=> 'Преди да продължите с пълната инсталация на phpBB, сървъра трябва да премине няколко теста и конфигурации за да се уверим, че phpBB ще работи както трябва.',
	'RETRY_WRITE'				=> 'Опитай отново',
	'RETRY_WRITE_EXPLAIN'		=> 'Ако искате да промените правата на config.php за да позволите на phpBB да пише в/у него. Запомнете да върнете правата след инсталацията.',

	'SCRIPT_PATH'				=> 'Скрипт път',
	'SCRIPT_PATH_EXPLAIN'		=> 'Пътят към phpBB форума, пример <samp>/phpBB3</samp>',
	'SELECT_LANG'				=> 'Избери език',
	'SERVER_CONFIG'				=> 'Сървър конфигурация',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Търсещия индекс не беше конвертиран',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Стария индекс за търсачката не беше конвертиран. Търсенето винаги ще връща нулев резултат. За да създадете нов търсещ индекс трябва да влезете в администраторския панел.',
	'SOFTWARE'					=> 'Форум софтуер',
	'SPECIFY_OPTIONS'			=> 'Опции при конвертиране',
	'STAGE_ADMINISTRATOR'		=> 'Админ детайли',
	'STAGE_ADVANCED'			=> 'Допълнителни настройки',
	'STAGE_ADVANCED_EXPLAIN'	=> '',
	'STAGE_CONFIG_FILE'			=> 'Конфигурационен файл',
	'STAGE_CREATE_TABLE'		=> 'Създаване на таблици в базата данни',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> '',
	'STAGE_DATABASE'			=> 'Настройки на базата данни',
	'STAGE_FINAL'				=> 'Последна стъпка',
	'STAGE_INTRO'				=> 'Въведение',
	'STAGE_IN_PROGRESS'			=> 'Конвертиране...',
	'STAGE_REQUIREMENTS'		=> 'Изисквания',
	'STAGE_SETTINGS'			=> 'Настройки',
	'STARTING_CONVERT'			=> 'Започни конвертирането',
	'STEP_PERCENT_COMPLETED'	=> 'Стъпка <strong>%d</strong> от <strong>%d</strong>',
	'SUB_INTRO'					=> 'Въведение',
	'SUB_LICENSE'				=> 'Лиценз',
	'SUB_SUPPORT'				=> 'Поддръжка',
	'SUCCESSFUL_CONNECT'		=> 'Успешна връзка',
// TODO: Write some text on obtaining support
	'SUPPORT_BODY'				=> 'Докато не излезе официална версия поддръжката ще е минимална на адрес <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">phpBB 3.0 форуми (поддръжка)</a>. Ще отговаряме само на базовите въпроси.',
	'SYNC_FORUMS'				=> 'Започни синхронизация на форумите',
    'SYNC_POST_COUNT'         => 'Синхронизиране на броя мнения',
    'SYNC_POST_COUNT_ID'      => 'Синхронизиране на броя мнения %1$s до %2$s.',
	'SYNC_TOPICS'				=> 'Започни синхронизация на темите',
	'SYNC_TOPIC_ID'				=> 'Синхронизиране на теми от <var>topic_id</var> %1$s до %2$s',

	'TABLES_MISSING'			=> 'Не мога да намеря тези таблици<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefix за таблиците в базата данни',
	'TABLE_PREFIX_SAME'			=> 'Prefix-а трябва да е еднакъв с този на стария форум.<br />» Избраният е %s',
	'TESTS_PASSED'				=> 'Тестовете са преминати успешно',
	'TESTS_FAILED'				=> 'Тестовете не са преминати',

	'UNABLE_WRITE_LOCK'			=> 'Не мога да пише в/у файла',
	'UNAVAILABLE'				=> 'Невалиден',
	'UNWRITABLE'				=> 'не може да се пише в/у него ',
	'UPDATE_TOPICS_POSTED'		=> 'Генериране на информация за теми',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Грешка при генерирането на мненията в тема. След като приключи конвертирането можете да опитате отново да генерирате информация в администраторския панел.',
	'VERSION'					=> 'Версия',

	'WELCOME_INSTALL'			=> 'Добре дошли в инсталацията на phpBB 3',
	'WRITABLE'					=> 'може да се пише в/у него',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Файловете вече са най-новите, предоставени от phpBB. Можете <a href="../ucp.php?mode=login">влезете във форума</a> и да проверите дали всичко работи както трябва. Не забравяйте да изтриете, преименувате или преместите install директорията.',
	'ARCHIVE_FILE'				=> 'Източник файл',

	'BACK'				=> 'Назад',
	'BINARY_FILE'		=> 'Binary файл',
	'BOT'            => 'Паяк/Робот',

	'CHANGE_CLEAN_NAMES'         => 'Тази функция се използва, когато искате да изтриете потребителските акаунта, които се използват от един човек.',
	'CHECK_FILES'					=> 'Провери файловете',
	'CHECK_FILES_AGAIN'				=> 'Провери файловете отново',
	'CHECK_FILES_EXPLAIN'			=> 'В следващата стъпка всички файлове ще бъдат проверени за по-нови, това може да отнеме няколко минути.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Според Вашата база данни версията е възможно най-новата. Може би ще искате да преминете към проверка на файлове за да се уверите в това.',
	'CHECK_UPDATE_DATABASE'			=> 'Продължи обновяването',
	'COLLECTED_INFORMATION'			=> 'Информация на събраните файлове',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Списъка долу показва информация за файловете, които трябва да се обновят. Проверете информацията пред всеки от файловете за да видите какво трябва да направите за да заработи всичко както трябва.',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Вече можете да <a href="../ucp.php?mode=login">влезете във форума</a> и да проверите дали всичко работи добре. Не забравяйте да изтриете, преименувате или преместите install директорията!',
	'CONTINUE_UPDATE_NOW'		=> 'Продължете с обновяващия процес',
	'CURRENT_FILE'					=> 'Оригинален файл',
	'CURRENT_VERSION'				=> 'Версия',

	'DATABASE_TYPE'						=> 'Тип на базата данни',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Уверете се, че сте качили всички файлове както трябва.',
	'DELETE_USER_REMOVE'            => 'Изтрий потребителя и мненията му',
    'DELETE_USER_RETAIN'            => 'Изтрий потребителя, но запази мненията му',
	'DESTINATION'						=> 'Файл',
	'DIFF_INLINE'						=> 'Inline',
	'DIFF_RAW'							=> 'Raw unified diff',
	'DIFF_SEP_EXPLAIN'					=> 'Край на файла / Започва с новия файл',
	'DIFF_SIDE_BY_SIDE'					=> 'Страна от страна',
	'DIFF_UNIFIED'						=> 'Unified diff',
	'DO_NOT_UPDATE'						=> 'Не обновявай този файл',
	'DONE'								=> 'Готово',
	'DOWNLOAD'							=> 'Свали',
	'DOWNLOAD_AS'						=> 'Свали като',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Свали архив на модифицираните файлове',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'След като свалите трябва да разархивирате. Ще намерите файловете в този архив. След това трябва да качите всички файлове. След като ги качите проверете ги отново.',

	'ERROR'		=> 'Грешка',
	'EDIT_USERNAME'   => 'Промени потребителското име',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Файла вече е обновен',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Файла не може да бъде променян',
	'FILE_USED'						=> 'Информация използвана от',			// Single file
	'FILES_CONFLICT'				=> 'Конфликт файлове',
	'FILES_CONFLICT_EXPLAIN'		=> 'Показаните файлове са модифицирани и не представят оригиналните файлове от старата версия. phpBB определи, че тези файлове ще създадат конфликти, ако бъдат разделени.',
	'FILES_MODIFIED'				=> 'Модифицирани файлове',
	'FILES_MODIFIED_EXPLAIN'		=> 'Показаните файлове са модифицирани и не представят оригиналните от старата версия.',
	'FILES_NEW'						=> 'Нови файлове',
	'FILES_NEW_EXPLAIN'				=> 'Показаните файлове не съществуват в инсталацията.',
	'FILES_NEW_CONFLICT'			=> 'Нови конфликтни файлове',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Показаните файлове ще бъдат заместени с нови.',
	'FILES_NOT_MODIFIED'			=> 'Немодифицирани файлове',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Показаните файлове не са модифицирани и представят оригиналните phpBB файлове от вашата версия, която искате да обновите.',
	'FILES_UP_TO_DATE'				=> 'Обновени файлове',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Показаните файлове са вече обновени.',
	'FTP_SETTINGS'					=> 'FTP настройки',
	'FTP_UPDATE_METHOD'				=> 'FTP качване',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Качените файлове са несъвместими с инсталираната версия. Вашата инсталирана версия е %1$s ъпдейт файла за phpBB е за %2$s до %3$s',
	'INCOMPLETE_UPDATE_FILES'		=> 'Качените файлове са несъвместими',
    'INLINE_UPDATE_SUCCESSFUL'		=> 'Базата данни беше обновена успешно. Сега можете да продължите.',
	'KEEP_OLD_NAME'      => 'Запази името',
	
	'LATEST_VERSION'		=> 'Последна версия',
	'LINE'					=> 'Ред',
	'LINE_ADDED'			=> 'Добавено',
	'LINE_MODIFIED'			=> 'Модифицирано',
	'LINE_REMOVED'			=> 'Изтрито',
	'LINE_UNMODIFIED'		=> 'Немодифицирано',
	'LOGIN_UPDATE_EXPLAIN'	=> 'За да обновите инсталация трябва да влезете.',

	'MAPPING_FILE_STRUCTURE'	=> 'Файловете от phpBB инсталацията.',
	
	'MERGE_MODIFICATIONS_OPTION'   => 'Слей модификациите',
	
	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Не съединявай - използвай нов файл',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Не съединявай - използвай инсталирания файл',
	'MERGE_MOD_FILE_OPTION'		=> 'Съедини разликите и използвай модифицирания код',
	'MERGE_NEW_FILE_OPTION'		=> 'Съедини разликите и използвай нов файл',
	'MERGE_SELECT_ERROR'		=> 'Съединителните модули не са избрани коректно.',

	'NEW_FILE'						=> 'Нов обновен файл',
	'NEW_USERNAME'               => 'Ново потребителско име',
	'NO_AUTH_UPDATE'				=> 'Не си упълномощен да обновяваш',
	'NO_ERRORS'						=> 'Няма грешки',
	'NO_UPDATE_FILES'				=> 'Не обновявай следните файлове',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Показаните файлове са нови или модифицирани, но директория в която се намират не може да бъде намерена във Вашата инсталация. Ако в този списък се съдържат файлове от други директории, то тогава трябва да модифицирате структурата на директорията и да обновите.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Не е намерена валидна директория за конвертиране уверете се, че сте качили всички файлове.<br /><br />Инсталацията <strong>не</strong> е обновена до най-новата версия. Ъпдейти съществуват за вашата версия на phpBB %1$s, посетете <a href="http://www.phpbb.com/downloads.php" rel="external">http://www.phpbb.com/downloads.php</a> за повече информация, намерете правилния пакет за обновяване от версия %2$s до версия %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Версията Ви не се нуждае от обновяване. Вашият форум притежава най-новата. ',
	'NO_UPDATE_INFO'				=> 'Ъпдейт файл информацията не може да бъде намерена.',
	'NO_UPDATES_REQUIRED'			=> 'Не се изискват ъпдейти',
	'NO_VISIBLE_CHANGES'			=> 'Няма видими промени',
	'NOTICE'						=> 'Съобщение',
	'NUM_CONFLICTS'					=> 'Брой конфликти',

	'OLD_UPDATE_FILES'		=> 'Обновените файлове са стари. Качените файлове обновяват phpBB %1$s до phpBB %2$s, но последната версия на phpBB е %3$s.',

	'PACKAGE_UPDATES_TO'            => 'Пакета се обновява до версия',
	'PERFORM_DATABASE_UPDATE'			=> 'Извърши ъпдейт на базата данни',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Долу ще намерите връзка към скрипта, който ще Ви позволи обнояването на базата данни. Обновяването може да отнеме няколко минути, не прекъсвайте процеса.',
	'PREVIOUS_VERSION'					=> 'Минала версия',
	'PROGRESS'							=> 'Прогрес',

	'RESULT'					=> 'Резултат',
	'RUN_DATABASE_SCRIPT'		=> 'Обновяване на базата данни',

	'SELECT_DIFF_MODE'			=> 'Избери различен метод',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Избери формат на архива',
	'SELECT_FTP_SETTINGS'		=> 'Избери FTP настройки',
	'SHOW_DIFF_CONFLICT'		=> 'Покажи различията/конфликтите',
	'SHOW_DIFF_FINAL'			=> 'Покажи файла с резултатите',
	'SHOW_DIFF_MODIFIED'		=> 'Покажи съединените различия',
	'SHOW_DIFF_NEW'				=> 'Покажи съдържанието на файловете',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Покажи различията',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Покажи различията',
	'SOME_QUERIES_FAILED'		=> 'Някои заявки се провалиха, грешките са показани долу',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Виж <a href="../docs/README.html">README</a> за повече информация и детайли.',
	'STAGE_FILE_CHECK'			=> 'Провери файловете',
	'STAGE_UPDATE_DB'			=> 'Обнови базата данни',
	'STAGE_UPDATE_FILES'		=> 'Обновяване на файловете',
	'STAGE_VERSION_CHECK'		=> 'Проверка на версията',
	'STATUS_CONFLICT'			=> 'Модифицирания файл поражда грешки',
	'STATUS_MODIFIED'			=> 'Модифициран файл',
	'STATUS_NEW'				=> 'Нов файл',
	'STATUS_NEW_CONFLICT'		=> 'Конфликт файл',
	'STATUS_NOT_MODIFIED'		=> 'Немодифициран файл',
	'STATUS_UP_TO_DATE'			=> 'Вече обновен',

	'UPDATE_COMPLETED'				=> 'Обновяването приключи успешно',
	'UPDATE_DATABASE'				=> 'Обнови базата данни',
	'UPDATE_DATABASE_EXPLAIN'		=> 'В следващата стъпка базата данни ще бъде обновена.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Обновяване схема на базата данни',
	'UPDATE_FILES'					=> 'Обнови файловете',
	'UPDATE_FILES_NOTICE'			=> 'Уверете се, че сте обновили вече файловете, защото тук ще се обнови само базата данни.',
	'UPDATE_INSTALLATION'			=> 'Обновяване на версията',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'С помощта на тази опция, е възможно да обновите вашата phpBB инсталация до последната версия.<br />По време на процеса всички файлове ще бъдат проверени за тяхната цялост. Ще можете да прегледате всички файлове преди да продължите.<br /><br />Файловете могат да бъдат качени по два начина. Ръчно и чрез автоматичен ъпдейт през FTP. След като завършите ще бъдете пренасочени към проверка на файловете отново.',
	'UPDATE_INSTRUCTIONS'			=> '

        <h1>Съобщение</h1>

        <p>Прочетете <a href="%1$s" title="%1$s">темата за последната версия</a> преди да продължите с обновлението на форума, може да съдържа полезна за Вас информация.</p>

        <br />

        <h1>Как да обновя инсталацията</h1>

        <p>Има няколко стъпки:</p>

        <ul style="margin-left: 20px; font-size: 1.1em;">
            <li>Отидете <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">phpBB.com страница за сваляне</a> и свалете правилния "phpBB Update Package" архив.<br /><br /></li>
            <li>Разархивирайте.<br /><br /></li>
            <li>Качете install директорията (при config.php файла).<br /><br /></li>
        </ul>

        <p>След завършването на обновлението форума ще бъде оф-лайн.<br /><br />
        <strong><a href="%2$s" title="%2$s">За да започнете инсталацията въведете в браузъра install директорията</a>.</strong><br />
        <br />
        След това ще ви се дават напътствия за всяка стъпка.
        </p>
',
'UPDATE_INSTRUCTIONS_INCOMPLETE'   => '
      <h1>Незавършено обновление</h1>

      <p>phpBB засече незавършено обновление. Долу ще намерите връзки, които могат да Ви помогнат.</p>
   ',
	'UPDATE_METHOD'					=> 'Метод при обновяването',
	'UPDATE_METHOD_EXPLAIN'			=> '',
	'UPDATE_REQUIRES_FILE'         => 'Процеса изисква следните файлове: %s',
	'UPDATE_SUCCESS'				=> 'Обновяването беше успешно',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Всички файлове са успешно обновени. Следващата стъпка проверява файловете.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Обновяване на версията и проверка на файловете',
	'UPDATING_DATA'					=> 'Обновяване на информацията',
	'UPDATING_TO_LATEST_STABLE'		=> 'Обновяване на базата данни до последната стабилна версия',
	'UPDATED_VERSION'				=> 'Обновяване до версия',
	'UPLOAD_METHOD'					=> 'Метод за качване',

	'UPDATE_DB_SUCCESS'				=> 'Базата данни беше обновена успешно',
	'USER_ACTIVE'               => 'Активен потребител',
    'USER_INACTIVE'               => 'Неактивен потребител',

	'VERSION_CHECK'				=> 'Проверка на версията',
	'VERSION_CHECK_EXPLAIN'		=> 'Проверява дали Вашия phpBB използва най-новата излязла версия.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Вашата версия се нуждае от обновяване. Продължете с процеса по обновлението.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'Вашата версия се нуждае от обновяване.<br />Долу ще намерите връзка към последната версия на форума.',
	'VERSION_UP_TO_DATE'		=> 'Вие използвате най-новата версия на форума. Ако искате можете да проверите версията на Вашите файлове.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Вие използвате най-новата версия на форума. Няма нужда от обновление.',
	'VIEWING_FILE_CONTENTS'		=> 'Преглежда съдържанието на файловете',
	'VIEWING_FILE_DIFF'			=> 'Преглежда разликите във файловете',

	'WRONG_INFO_FILE_FORMAT'	=> 'Грешен инфо файл формат',
	));
	
	// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Благодарим Ви!',
	'CONFIG_SITE_DESC'				=> 'Описание на форума',
	'CONFIG_SITENAME'				=> 'вашиятдомейн.com',

	'DEFAULT_INSTALL_POST'			=> 'Това е пример за мнение във Вашия форум. Вие можете да изтриете това мнение, темата дори целия форум.',

	'EXT_GROUP_ARCHIVES'			=> 'Архив',
	'EXT_GROUP_DOCUMENTS'			=> 'Документи',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Файлове за сваляне',
	'EXT_GROUP_FLASH_FILES'			=> 'Флаш файлове',
	'EXT_GROUP_IMAGES'				=> 'Изображения',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Текст',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Файлове',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FORUMS_FIRST_CATEGORY'			=> 'Първата ми категория',
	'FORUMS_TEST_FORUM_DESC'		=> 'Това е тестов форум.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Тестов форум 1',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Администратор',
    'REPORT_WAREZ'               => 'Мнението съдържа нелегален софтуер.',
    'REPORT_SPAM'               => 'Целта на мнението е реклама.',
    'REPORT_OFF_TOPIC'            => 'Мнението не е по темата.',
    'REPORT_OTHER'               => 'Мнението не принадлежи на нито една категория. Използвайте описанието.',

	'SMILIES_ARROW'					=> 'Arrow',
	'SMILIES_CONFUSED'				=> 'Confused',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Crying or Very Sad',
	'SMILIES_EMARRASSED'			=> 'Embarrassed',
	'SMILIES_EVIL'					=> 'Evil or Very Mad',
	'SMILIES_EXCLAMATION'			=> 'Exclamation',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Laughing',
	'SMILIES_MAD'					=> 'Mad',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Question',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Rolling Eyes',
	'SMILIES_SAD'					=> 'Sad',
	'SMILIES_SHOCKED'				=> 'Shocked',
	'SMILIES_SMILE'					=> 'Smile',
	'SMILIES_SURPRISED'				=> 'Surprised',
	'SMILIES_TWISTED_EVIL'			=> 'Twisted Evil',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Very Happy',
	'SMILIES_WINK'					=> 'Wink',

	'TOPICS_TOPIC_TITLE'			=> 'Добре дошли phpBB3',
));

?>