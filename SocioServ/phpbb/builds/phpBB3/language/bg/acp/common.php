<?php
/** 
*
* acp common [English]
*
* @package language
* @version $Id: common.php,v 1.83 2007/01/24 11:29:56 acydburn Exp $
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Администратори',
	'ACP_ADMIN_LOGS'			=> 'Админ лог',
	'ACP_ADMIN_ROLES'			=> 'Администраторски',
	'ACP_ATTACHMENTS'			=> 'Прикачени файлове',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Прикачване на файлове',
	'ACP_AUTH_SETTINGS'			=> 'Ауторизация',
	'ACP_AUTOMATION'			=> 'Версии',
	'ACP_AVATAR_SETTINGS'		=> 'Настройки на аватар',

	'ACP_BACKUP'				=> 'Backup',
	'ACP_BAN'					=> 'Банване',
	'ACP_BAN_EMAILS'			=> 'Ban email адреси',
	'ACP_BAN_IPS'				=> 'Ban IP адреси',
	'ACP_BAN_USERNAMES'			=> 'Ban потребители',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Главни настройки',
	'ACP_BOARD_FEATURES'		=> 'Лице на форума',
	'ACP_BOARD_MANAGEMENT'		=> 'Управление',
	'ACP_BOARD_SETTINGS'		=> 'Настройки',
	'ACP_BOTS'					=> 'Паяци и роботи',
	
	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'База данни',
	'ACP_CAT_DOT_MODS'			=> '.Mods',
	'ACP_CAT_FORUMS'			=> 'Форуми',
	'ACP_CAT_GENERAL'			=> 'Основни',
	'ACP_CAT_MAINTENANCE'		=> 'Поддръжка',
	'ACP_CAT_PERMISSIONS'		=> 'Права',
	'ACP_CAT_POSTING'			=> 'Писане',
	'ACP_CAT_STYLES'			=> 'Стилове',
	'ACP_CAT_SYSTEM'			=> 'Система',
	'ACP_CAT_USERGROUP'			=> 'Потребители и групи',
	'ACP_CAT_USERS'				=> 'Потребители',
	'ACP_CLIENT_COMMUNICATION'	=> 'Комуникация',
	'ACP_COOKIE_SETTINGS'		=> 'Бисквитки',
	'ACP_CRITICAL_LOGS'			=> 'Лог с грешки',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Допълнителни полета',
	
	'ACP_DATABASE'				=> 'Управление на базата данни',
	'ACP_DISALLOW'				=> 'Отхвърли',
	'ACP_DISALLOW_USERNAMES'	=> 'Отхвърли имената',
	
	'ACP_EMAIL_SETTINGS'		=> 'Email настройки',
	'ACP_EXTENSION_GROUPS'		=> 'Разширения - групи',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Права във форуми',
	'ACP_FORUM_LOGS'				=> 'Форум логове',
	'ACP_FORUM_MANAGEMENT'			=> 'Форум ръководство',
	'ACP_FORUM_MODERATORS'			=> 'Модератори',
	'ACP_FORUM_PERMISSIONS'			=> 'Права',
	'ACP_FORUM_ROLES'				=> 'Общи',

	'ACP_GENERAL_CONFIGURATION'		=> 'Главна конфигурация',
	'ACP_GENERAL_TASKS'				=> 'Главни настройки',
	'ACP_GLOBAL_MODERATORS'			=> 'Глобални модератори',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Главни права',
	'ACP_GROUPS'					=> 'Групи',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Права на групи(форум)',
	'ACP_GROUPS_MANAGE'				=> 'Управляване на групи',
	'ACP_GROUPS_MANAGEMENT'			=> 'Ръководство група',
	'ACP_GROUPS_PERMISSIONS'		=> 'Права на групи(глобални)',
	
	'ACP_ICONS'					=> 'Икони на темите',
	'ACP_ICONS_SMILIES'			=> 'Тема икони/усмивки',
	'ACP_IMAGESETS'				=> 'Imagesets',
	'ACP_INACTIVE_USERS'		=> 'Неактивни потребители',
	'ACP_INDEX'					=> 'Администраторски панел',
	
	'ACP_JABBER_SETTINGS'		=> 'Jabber настройки',
	
	'ACP_LANGUAGE'				=> 'Езиково ръководство',
	'ACP_LANGUAGE_PACKS'		=> 'Езикови пакети',
	'ACP_LOAD_SETTINGS'			=> 'Настройки зареждане',
	'ACP_LOGGING'				=> 'Влизане',
	
	'ACP_MAIN'					=> 'Администраторски панел',
	'ACP_MANAGE_EXTENSIONS'		=> 'Разширения',
	'ACP_MANAGE_FORUMS'			=> 'Администрация на форуми',
	'ACP_MANAGE_RANKS'			=> 'Рангове',
	'ACP_MANAGE_REASONS'		=> 'Причини за сигнали',
	'ACP_MANAGE_USERS'			=> 'Потребители',
	'ACP_MASS_EMAIL'			=> 'Масов email',
	'ACP_MESSAGES'				=> 'Съобщения',
	'ACP_MESSAGE_SETTINGS'		=> 'Лични съобщения',
	'ACP_MODULE_MANAGEMENT'		=> 'Модули',
	'ACP_MOD_LOGS'				=> 'Модераторски лог',
	'ACP_MOD_ROLES'				=> 'Модераторски',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Неизползвани прикачени файлове',
	
	'ACP_PERMISSIONS'			=> 'Права',
	'ACP_PERMISSION_MASKS'		=> 'Права маски',
	'ACP_PERMISSION_ROLES'		=> 'Роли',
	'ACP_PERMISSION_TRACE'		=> 'Права trace',
	'ACP_PHP_INFO'				=> 'PHP информация',
	'ACP_POST_SETTINGS'			=> 'Настройки на писане',
	'ACP_PRUNE_FORUMS'			=> 'Изчистване на форум',
	'ACP_PRUNE_USERS'			=> 'Изчисти потребители',
	'ACP_PRUNING'				=> 'Изчистване',
	
	'ACP_QUICK_ACCESS'			=> 'Бърз достъп',
	
	'ACP_RANKS'					=> 'Рангове',
	'ACP_REASONS'				=> 'Причини за сигнали',
	'ACP_REGISTER_SETTINGS'		=> 'Регистрация на потребители',

	'ACP_RESTORE'				=> 'Възстанови',

	'ACP_SEARCH'				=> 'Конфигурация на търсене',
	'ACP_SEARCH_INDEX'			=> 'Търсене',
	'ACP_SEARCH_SETTINGS'		=> 'Настройки търсене',

	'ACP_SECURITY_SETTINGS'		=> 'Настройки безопасност',
	'ACP_SERVER_CONFIGURATION'	=> 'Конфигурация на сървъра',
	'ACP_SERVER_SETTINGS'		=> 'Настройки сървър',
	'ACP_SIGNATURE_SETTINGS'	=> 'Настройки на подпис',
	'ACP_SMILIES'				=> 'Усмивки',
	'ACP_STYLE_COMPONENTS'		=> 'Компоненти',
	'ACP_STYLE_MANAGEMENT'		=> 'Ръководство',
	'ACP_STYLES'				=> 'Стилове',
	
	'ACP_TEMPLATES'				=> 'Шаблони',
	'ACP_THEMES'				=> 'Теми',
	
	'ACP_UPDATE'					=> 'Променяне',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Потребителски (форум)',
	'ACP_USERS_LOGS'				=> 'Потребителски логове',
	'ACP_USERS_PERMISSIONS'			=> 'Потребителски глобални',
	'ACP_USER_ATTACH'				=> 'Прикачени файлове',
	'ACP_USER_AVATAR'				=> 'Аватар',
	'ACP_USER_FEEDBACK'				=> 'Обратна връзка',
	'ACP_USER_GROUPS'				=> 'Групи',
	'ACP_USER_MANAGEMENT'			=> 'Потребителско ръководство',
	'ACP_USER_OVERVIEW'				=> 'Преглед',
	'ACP_USER_PERM'					=> 'Права',
	'ACP_USER_PREFS'				=> 'Настройки',
	'ACP_USER_PROFILE'				=> 'Профил',
	'ACP_USER_RANK'					=> 'Ранг',
	'ACP_USER_ROLES'				=> 'Потребителски',
	'ACP_USER_SECURITY'				=> 'Потребителска сигурност',
	'ACP_USER_SIG'					=> 'Сигнатура',

	'ACP_VC_SETTINGS'					=> 'Визуално потвърждение',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA преглед',
	'ACP_VERSION_CHECK'					=> 'Проверка за нови версии',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Администраторските права',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Модераторските права',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Форум-базираните права',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'На глобалните модератори',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Потребителски-базираните',
	
	'ACP_WORDS'					=> 'Цензуриране на думи',

	'ACTION'				=> 'Действие',
	'ACTIONS'				=> 'Действия',
	'ACTIVATE'				=> 'Активирай',
	'ADD'					=> 'Добави',
	'ADMIN'					=> 'Администрация',
	'ADMIN_INDEX'			=> 'Начало админ панел',
	'ADMIN_PANEL'			=> 'Администраторски контролен панел',

	'BACK'					=> 'Назад',

	'COLOUR_SWATCH'			=> 'Цветова палитра',
	'CONFIG_UPDATED'		=> 'Конфигурацията е променена успешно.',

	'DEACTIVATE'				=> 'Деактивирай',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Въведеният път "%s" не съществува.',
	'DIRECTORY_NOT_DIR'			=> 'Въведеният път "%s" не е директория.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Въведеният път "%s" не е достъпен за писане.',
	'DISABLE'					=> 'Изключи',
	'DOWNLOAD'					=> 'Свали',
	'DOWNLOAD_AS'				=> 'Свали като',
	'DOWNLOAD_STORE'			=> 'Свали или запиши файла',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Можеш директно да свалиш файла или да го запишеш в своята <samp>store/</samp> папка.',

	'EDIT'					=> 'Промени',
	'ENABLE'				=> 'Включи',
	'EXPORT_DOWNLOAD'		=> 'Свали',
	'EXPORT_STORE'			=> 'Запази',

	'GENERAL_OPTIONS'		=> 'Главни опции',
	'GENERAL_SETTINGS'		=> 'Главни настройки',
	'GLOBAL_MASK'			=> 'Глобални права на маска',

	'INSTALL'				=> 'Инсталирай',
	'IP'					=> 'Потребителско IP',
	'IP_HOSTNAME'			=> 'IP адрес или hostname',

	'LOGGED_IN_AS'			=> 'Влязъл като:',
	'LOGIN_ADMIN'			=> 'За да администрираш форума трябва да се идентифицираш.',
	'LOGIN_ADMIN_CONFIRM'	=> 'За да администрираш форума трябва да се идентифицираш отново.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Пренасочване към администраторския панел',
	'LOOK_UP_FORUM'			=> 'Избери форум',
    'LOOK_UP_FORUMS_EXPLAIN'=> 'Вие можете да избирате повече от един форум.',
	
	'MANAGE'				=> 'Управлявай',
	'MENU_TOGGLE'			=> 'Скрий или покажи менюто',
	'MOVE_DOWN'				=> 'Надолу',
	'MOVE_UP'				=> 'Нагоре',

	'NOTIFY'				=> 'Известия',
	'NO_ADMIN'				=> 'Нямате нужните права за да администрирате този форум.',
	'NO_EMAILS_DEFINED'		=> 'Не е намерен валиден email адрес',
	'NO_PASSWORD_SUPPLIED'	=> 'Трябва да въведете парола за да влезете в администраторския панел.',	

	'OFF'					=> 'Изключено',
	'ON'					=> 'Включено',

	'PARSE_BBCODE'						=> 'Включи BBCode',
	'PARSE_SMILIES'						=> 'Включи усмивките',
	'PARSE_URLS'						=> 'Включи връзките',
	'PERMISSIONS_TRANSFERRED'			=> 'Правата са приложени',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Вие имате правата на %1$s. Вие можете да разглеждате форума, но нямате достъп до администраторския панел. По всяко време можете да <a href="%2$s"><strong>върнете</strong></a> изтинските си права.',
	'PIXEL'							=> 'пиксел',	
	'PROCEED_TO_ACP'					=> '%sКъм Админ панела%s',

	'REMIND'							=> 'Напомни',
	'RESYNC'							=> 'Ресинхронизирай',
	'RETURN_TO'							=> 'Върни се към…',

	'SELECT_ANONYMOUS'		=> 'Избери анонимен потребител',
	'SELECT_OPTION'			=> 'Избери',

	'UCP'					=> 'Потребителски панел',
	'USERNAMES_EXPLAIN'		=> 'Всяко име на различен ред',
	'USER_CONTROL_PANEL'	=> 'Потребителски контролен панел',

	'WARNING'				=> 'Предупреждение',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Това е списък с информация за инсталираното PHP на сървъра. Включва детайли за модули, свободни стойности и настройки. Информацията понякога може да бъде много полезна. Някой хостинг компании ограничават показаната информация тук за по-голяма сигурност. Удачно е информацията тук да не бъде показвана на никой друг.',

	'NO_PHPINFO_AVAILABLE'	=> 'phpinfo() е изключен.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Това е списък на всичките действия предприети от администратора на форума. Можете да сортирате по име, дата, IP или действие. Ако имате нужните права, можете да изтривате някой/всички от логовете.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Това е списък на всичките операции предприети от форума (автоматични). Този лог ви дава информация, която може да бъде полезна при решаването на някой проблеми, пример грешка при получаване на email-и. Можете да сортирате по име, дата, IP или действие. Ако имате нужните права, можете да изтривате някой/всички от логовете.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Това е списък на всичките операции предприети от модераторите на форума, изберте форум от падащия списък. Можете да сортирате по име, дата, IP или действие. Ако имате нужните права, можете да изтривате някой/всички от логовете.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Това е списък на всичките операции предприети от потребителите',
	'ALL_ENTRIES'				=> 'Всички',

	'DISPLAY_LOG'	=> 'Покажи от преди',

	'NO_ENTRIES'	=> 'Няма намерени',

	'SORT_IP'		=> 'IP адрес',
	'SORT_DATE'		=> 'Дата',
	'SORT_ACTION'	=> 'Действие',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Благодарим Ви, че избрахте phpBB като Ваш форум. На тази страница ще получите базова информация и статистики на форума. Връзките от лявата страна Ви позволяват да контролирате всяка част от системата. На всяка страница има инструкции за ползване.',
	'ADMIN_LOG'					=> 'Действия',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Последните 5 действия предприети от администратора на форума. Пълно копие на лога може да видите като натиснете на връзката долу.',
	'AVATAR_DIR_SIZE'			=> 'Размер на аватар директорията',

	'BOARD_STARTED'		=> 'Старт на форума',
	'BOARD_VERSION'      => 'Версия на форума',

	'DATABASE_SERVER_INFO'	=> 'База данни',
	'DATABASE_SIZE'			=> 'Размер на базата данни',

	'FILES_PER_DAY'		=> 'Прикачени файлове на ден',
	'FORUM_STATS'		=> 'Статистики',

	'GZIP_COMPRESSION'	=> 'GZip компресия',

	'NOT_AVAILABLE'		=> 'Не на разположение',
	'NUMBER_FILES'		=> 'Брой прикачени файлове',
	'NUMBER_POSTS'		=> 'Брой мнения',
	'NUMBER_TOPICS'		=> 'Брой теми',
	'NUMBER_USERS'		=> 'Брой потребители',
	'NUMBER_ORPHAN'		=> 'Неизползвани прикачени файлове',

	'POSTS_PER_DAY'		=> 'Мнения на ден',
	
    'PURGE_CACHE'			=> 'Изчисти кеша',
	'PURGE_CACHE_CONFIRM'	=> 'Сигурен ли сте, че искате да изчистите кеша?',
	'PURGE_CACHE_EXPLAIN'	=> 'Изчиства всички свързани кеширани елементи.',

	'RESET_DATE'					=> 'Пренастрой датата на старт',
	'RESET_DATE_CONFIRM'			=> 'Сигурен ли сте, че искате да пренастройте датата на старт?',
	'RESET_ONLINE'					=> 'Нулирай статистиката за най-много потребители на линия',
	'RESET_ONLINE_CONFIRM'			=> 'Сигурен ли сте, че искате да изчистите статистиката?',
	'RESYNC_POSTCOUNTS'				=> 'Ресинхронизирай броя на мненията',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Само съществуващите мнения ще се броят.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Сигурен ли сте, че искате да ресинхронизирате броя на мненията?',
	'RESYNC_POST_MARKING'			=> 'Ресинхронизирай точкуваните теми',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Сигурен ли сте, че искате да ресинхронизирате точкуваните мнения?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Демаркирайте всичко, след това маркирайте темите, в които не е писано последните месеци.',
	'RESYNC_STATS'					=> 'Ресинхронизирай статистиките',
	'RESYNC_STATS_CONFIRM'			=> 'Сигурен ли сте, че искате да ресинхронизирате статистиките?',
	'RESYNC_STATS_EXPLAIN'			=> 'Калкулират се отново броя мнения, теми, потребители и файлове.',
	'RUN'							=> 'Давай',

	'STATISTIC'			=> 'Статистика',
    'STATISTIC_RESYNC_OPTIONS'	=> 'Ресинхронизирай или нулирай статистиката',
	
	'TOPICS_PER_DAY'	=> 'Теми на ден',

	'UPLOAD_DIR_SIZE'	=> 'Размер на прикачените файлове',
	'USERS_PER_DAY'		=> 'Потребители на ден',

	'VALUE'					=> 'Стойност',
	'VIEW_ADMIN_LOG'		=> 'Виж целия лог',
	'VIEW_INACTIVE_USERS'	=> 'Виж неактивните потребители',

	'WELCOME_PHPBB'			=> 'Добре дошли в phpBB',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Неактивна дата',
	'INACTIVE_REASON'				=> 'Причина',
	'INACTIVE_REASON_MANUAL'		=> 'Акаунта е деактивиран от администратора',
	'INACTIVE_REASON_PROFILE'		=> 'Детайлите на профила са променени',
	'INACTIVE_REASON_REGISTER'		=> 'Ново регистриран акаунт',
	'INACTIVE_REASON_REMIND'		=> 'Много опити за акаунт активация',
	'INACTIVE_REASON_UNKNOWN'		=> 'Непознат',
	'INACTIVE_USERS'				=> 'Неактивни потребители',
	'INACTIVE_USERS_EXPLAIN'		=> 'Списък на регистрираните потребители, които не са активирали акаунтите си. От тук можете да ги активирате, изтриете или обновите.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Това е списък на последните 10 регистрирани потребители, които не са активирали акаунтите си. Пълен списък можете да намерите като натиснете на връзката долу. Имате възможност да активирате, триете или обновявате различни потребители/регистрации.',

	'NO_INACTIVE_USERS'	=> 'Няма неактивирани потребители',

	'SORT_INACTIVE'		=> 'Дата на неактивност',
	'SORT_LAST_VISIT'	=> 'Последно посещение',
	'SORT_REASON'		=> 'Причина',
	'SORT_REG_DATE'		=> 'Дата на регистрация',

	'USER_IS_INACTIVE'		=> 'Потребителя е неактивен',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Добавен/променен: права на потребител</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Добавен/променен: права на потребители</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Добавен/променен: права на глобални модератори</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Добавен/променен: права на глобален модератор</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Добавен/променен: права на администратор</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Добавен/променен: права на група от администратори</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Добавен/променен: Администратори</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Добавен/променен: Глобални модератори</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Добавен/променен: достъп на потребители</strong> от %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Добавен/променен: достъп на модератори</strong> от %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Добавен/променен: достъп на групи</strong> от %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Добавен/променен: достъп на група от модератори</strong> от %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Добавени/променени: Модератори</strong> от %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Добавени/променени: права на форум</strong> от %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Изтриване: Администратори</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Изтриване: Глобални модератори</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Изтриване: модератори</strong> from %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Изтриване: права на потребители/групи</strong> от %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Тества правата на</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Върнати собствени си права, взети от</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Неуспешен вход на администратор</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Успешен вход на администратор</strong>',
	'LOG_ATTACHMENTS_DELETED'   => '<strong>Изтриване: прикачен файл на потребител</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Добавени/променени разширения на файлове</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Изтриване: разширения на файлове</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Промяна: разширения на файлове</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Добавяне: група разширения</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Промяна: група разширения</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Изтриване: група разширения</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Добавяне: Излишен файл в мнение</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Изтриване: на излишен файл/strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Премахване: потребител от бан</strong> причина "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Премахване: IP от бан</strong> причина "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Премахване: email от бан</strong> причина "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Бан: потребител</strong> причина "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>Бан: IP</strong> причина "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Бан: email</strong> причина "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Премахване: бан - потребител</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Премахване: бан - IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Премахване: бан - email</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Добавяне: BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Промяна: BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Изтриване: BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Добавяне: bot</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Изтриване: bot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Промяна: bot</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Изчистване: на админ лога</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Изчистване: на лога с грешки</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Изчистване: на модераторския лог</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Изчистване: на потребителския лог</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Изчистване: на лог на потребител</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Промяна: настройки на прикачените файлове</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Промяна: ауторизиращи настройки</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Промяна: аватар настройки</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Промяна: настройки на бисквитки</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Промяна: email настройки</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Промяна: лице на форума</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Промяна: настройки зареждате</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Промяна: настройки на личните съобщения</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Промяна: настройки при писане на мнение</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Промяна: регистрационни настройки</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Промяна: настройки на търсене</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Промяна: настройки на сигурност</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Промяна: сървър настройки</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Промяна: форум настройки</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Промяна: настройки на форум</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Промяна: настройки за визуално потвърждение</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Одобрение: тема</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Потребител избутва тема</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Изтриване: мнение</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Изтриване: тема</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Копирана тема</strong><br />» from %s',
	'LOG_LOCK'					=> '<strong>Заключена тема</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Заключено мнение</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Съединение: мнения</strong> в тема<br />» %s',
	'LOG_MOVE'					=> '<strong>Преместване: тема</strong><br />» от %s',
	'LOG_POST_APPROVED'			=> '<strong>Одобрено мнение</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Отхвърлено мнение “%1$s”; причини</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Променено мнение “%1$s” публикувано от</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Затворен доклад</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Изтрит доклад</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Преместване: разделени мнения</strong><br />» в %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Разделяне на мнение</strong><br />» от %s',

	'LOG_TOPIC_DELETED'			=> '<strong>Изтриване: тема</strong><br />» %s',
	'LOG_TOPIC_APPROVED'		=> '<strong>Одобрена тема</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Отхвърлена тема “%1$s”; причини</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Ресинхронизиране на брояч на тема</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Промяна: тип на форум</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Отключена тема</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Отключено мнение</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Добавяне: непозволени потребителски имена</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Изтриване: на непозволени потребителски имена</strong>',

	'LOG_DB_BACKUP'			=> '<strong>База данни backup</strong>',
	'LOG_DB_DELETE'			=> '<strong>Изтрий backup-а на базата данни</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Възстановяване на база данни</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Премахване: IP/hostname от списъка на сваляне</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Добавяне: IP/hostname в списъка на сваляне</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Изтриване: IP/hostname от списъка на сваляне</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabberгрешки</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Email грешки</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Създаден нов форум</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Изтриване: форум</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Изтриване: форум и под форуми</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Изтриване: форум и преместени под форуми</strong> в %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Изтриване: форум и преместени мнения </strong> в %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Изтриване: форум и под форуми, преместени съобщения</strong> в %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Изтриване: форум и преместени съобщения</strong> в %1$s <strong>и подфорумите</strong> в %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Изтриване: форум и съобщения</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Изтриване: форум, съобщения и под форум</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Изтриване: форум и съобщения, преместени под форуми</strong> в %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Променени детайли на форум</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Преместен форум</strong> %1$s <strong>под</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Преместен форум</strong> %1$s <strong>над</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Ресинхронизиране на форум</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>Добавяне: потребителска група</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Направена група по подразбиране</strong><br />» %s',
	'LOG_GROUP_DELETE'		=> '<strong>Изтриване: група</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Лидери понижени в група</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Потребител повишен в лидер</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Изтриване: потребител от група</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Промяна: детайли на група</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Добавяне: нов лидер в група</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Одобрение: потребители в група</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Добавяне: нови потребители в група</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'		=> '<strong>Добавяне: нов imageset в базата данни</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'		=> '<strong>Добавяне: нов imageset във файловата система</strong><br />» %s',
	'LOG_IMAGESET_DELETE'		=> '<strong>Изтриване: imageset</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'	=> '<strong>Промяна: детайли на imageset</strong><br />» %s',
	'LOG_IMAGESET_EDIT'			=> '<strong>Промяна: imageset</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'		=> '<strong>Експортиран imageset</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'      => '<strong>Липсва пътя към имиджсет-а</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Обновена “%2$s” локализация на imageset</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'	=> '<strong>Обновление: imageset</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Активирани неактивираните потребители</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Изтриване: неактивирани потребители</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Изпратени съобщения до неактивираните потребители</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Промяна: от %1$s на phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Инсталиран phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Сесия IP/browser/X_FORWARDED_FOR провал на проверка</strong><br />»Потребителски IP "<em>%1$s</em>" проверен с/у IP "<em>%2$s</em>", потребителски браузър стринг "<em>%3$s</em>" проверен с/у браузър стринг "<em>%4$s</em>" и потребител X_FORWARDED_FOR стринг "<em>%5$s</em>" проверен с/у стринг X_FORWARDED_FOR string "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Промяна: Jabber акаунт </strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Промяна: Jabber парола</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber: регистриран акаунт</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Промяна: Jabber настройки</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Изтриване: езиков пакет</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Добавяне: езиков пакет</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Промяна: езиков пакет</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Заместване: езиков пакет</strong><br />» %s',
    'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Изпратен езиков файл и сладиран в папка.</strong><br />» %s',
	
	'LOG_MASS_EMAIL'		=> '<strong>Изпратил масов email</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Промяна: автор на тема "%1$s"</strong><br />» на %2$s to %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Изключване на модул</strong>',
	'LOG_MODULE_ENABLE'		=> '<strong>Включване на модул</strong>',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Преместване: модул надолу</strong><br />» %s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Преместване: модул нагоре</strong><br />» %s',
	'LOG_MODULE_REMOVED'	=> '<strong>Изтриване: модул</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Добавяне: модул</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Промяна: модул</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Добавяне: админ роля</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Промяна: админ роля</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Изтриване: админ роля</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Добавяне: админ роля</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Промяна: админ роля</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Изтриване: форум роля</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Добавяне: модераторска роля</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Промяна: модераторска роля</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Изтриване: модераторска роля</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Добавяне: потребитеслка роля</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Промяна: потребителска роля</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Изтриване: потребителска роля</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Активирано профил поле</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Добавяне: поле в профил</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Деактивирано поле в профил</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Промяна: поле в профил</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Изтриване: допълнително поле в профил</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Изчистване: форум</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Автоматично изчистени форуми</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Деактивиране на потребители</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Изчистване: потребители и изтрити мнения</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Изчистване: потребители и задържани потребители</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Изчисти кеша</strong>',
	
	'LOG_RANK_ADDED'		=> '<strong>Добавяне: нов ранг</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Изтриване: ранг</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Добавяне: ранг</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Добавяне: нова сигнализираща причина</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Изтриване: сигнализираща причина</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Промяна: сигнализираща причина</strong><br />» %s',

	'LOG_RESET_DATE'			=> '<strong>Промяна: дата на старт на форума</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Промяне: най-много online потребители</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Ресинхронизирани брой мнения</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Ресинхронизирани теми без отговор</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Ресинхронизирани мнения, потребители и теми</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Създаден търсещ индекс за</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Изтрит търсещ индекс за</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Добавяне: нов стил</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Изтриване: стил</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Промяна: стил</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Експортиран стил</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Добавяне: нов шаблон в базата данни</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Добавяне: нов шаблон във файловата система</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Изтриване: хеширана версия на файловете в шаблона <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Изтриване: шаблон</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Промяна: шаблон <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Промяна: шаблон</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Промяна: шаблон</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Обновен шаблон</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Добавяне: нова тема в базата данни</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Добавяне: нова тема във файловата система</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Изтриване: тема</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Промяна: тема</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Промяна: тема <em>%1$s</em></strong><br />» Модифициран клас <em>%2$s</em>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Промяна: тема <em>%1$s</em></strong><br />» Добавен клас <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Промяна: тема</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Обновена тема</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Обновената базата данни от %1$s на %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Обновена версия на форума от %1$s на %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Активиран потребител</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Бан: потребител</strong> причина "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Бан: IP</strong> причина "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Бан: email</strong> причина "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Изтриване: потребител</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Изтриване: прикачени файлове на потребител</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Изтриване: аватар на потребител</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Изтриване: всички мнения на потребител</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Изтриване: сигнатура на потребител</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Деактивиране на потребител</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Преместване: мнения на потребител</strong><br />» пуснати от "%1$s" във форум "%2$s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Промяна: парола на потребител</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Ре-активиран акаунт</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Потребител "%1$s" сменен email</strong><br />» от "%2$s" на "%3$s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Промяна: потребителско име</strong><br />» от "%1$s" на "%2$s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>Промяна: детайли на потребител</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Активиран акаунт</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Изтриване: аватар</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Изтриване: подпис</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Добавяне: обратна връзка</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Добавяне:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Деактивиран акаунт</strong>',
	'LOG_USER_LOCK'				=> '<strong>Потребител заключва темата си</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Преместени всички мнения от "%s"</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Реактивиране на потребител</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Потребител отключва темата си</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Добавяне: предупреждение на потребител</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Предупреждения на потребител</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Потребител смени групата си по подразбиране</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Потребител слиза от поста на лидер</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Потребител се присъединява към група</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Потребител се присъединява към група, чака одобрение</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Потребител напуска група</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Добавяне: цензура на дума</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Изтриване: цензура на дума</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Промяна: цензура на дума</strong><br />» %s',
));

?>