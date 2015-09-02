<?php
/** 
*
* acp_board [English]
*
* @package language
* @version $Id: board.php,v 1.57 2007/01/21 18:33:45 acydburn Exp $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Тук можете да установите главните операции във форума, от името на сайта до личните съобщения.',

	'CUSTOM_DATEFORMAT'				=> 'По избор…',
	'DEFAULT_DATE_FORMAT'			=> 'Формат на датата',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Формата на датата е идентичен с PHP <code>дата</code> функцията.',
	'DEFAULT_LANGUAGE'				=> 'Език по подразбиране',
	'DEFAULT_STYLE'					=> 'Стил по подразбиране',
	'DISABLE_BOARD'					=> 'Изключи форума',
	'DISABLE_BOARD_EXPLAIN'			=> 'Тази опция ще направи форума недостъпен за потребители. Можете да въведете кратко съобщение (255 знака), което искате да се показва на потребителите.',
	'OVERRIDE_STYLE'				=> 'Замести със стила на потребителя',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Замества стила на потребителя с този по подразбиране.',
	'SITE_DESC'						=> 'Описание на сайта',
	'SITE_NAME'						=> 'Име на сайта',
	'SYSTEM_DST'					=> 'Включи DST',
	'SYSTEM_TIMEZONE'				=> 'Системна времева зона',
	'WARNINGS_EXPIRE'				=> 'Времетраене на предупреждението',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Дните след които предупрежденията ще се премахват автоматично от потребителите.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'От тук можете да включвате/изключвате различни функции на форума',

	'ALLOW_ATTACHMENTS'			=> 'Позволи прикачването на файлове',
	'ALLOW_BIRTHDAYS'			=> 'Рожденни дни',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Позволете въвеждането на рожденни дни в профила.',
	'ALLOW_BOOKMARKS'			=> 'Позволи записването на теми',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> '',
	'ALLOW_BBCODE'				=> 'Позволи BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Позволи абонирането за форум',
	'ALLOW_NAME_CHANGE'			=> 'Позволи промяна на потребителско име',
	'ALLOW_NO_CENSORS'			=> 'Позволи изключването на цензурата',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Потребителите ще имат възможност да изключат цензурата на думи',
	'ALLOW_PM_ATTACHMENTS'		=> 'Позволи прикачените файлове в личните съобщения',
	'ALLOW_SIG'					=> 'Позволи подписите',
	'ALLOW_SIG_BBCODE'			=> 'Позволи BBCode в потребителските подписи',
	'ALLOW_SIG_FLASH'			=> 'Позволи използването на <code>[FLASH]</code> BBCode таг-а в подписите',
	'ALLOW_SIG_IMG'				=> 'Позволи използването на <code>[IMG]</code> BBCode таг-а в подписите',
	'ALLOW_SIG_LINKS'			=> 'Позволи връзките в подписите на потребителите',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Ако е изключено <code>[URL]</code> таг-а ще бъде автоматично премахнат.',
	'ALLOW_SIG_SMILIES'			=> 'Позволи използването на усмивки в подписите',
	'ALLOW_SMILIES'				=> 'Позволи използването на усмивки',
	'ALLOW_TOPIC_NOTIFY'		=> 'Позволи абонирането за тема',
	'BOARD_PM'					=> 'Лични съобщения',
	'BOARD_PM_EXPLAIN'			=> 'Включи или изключи личните съобщения за потребителите на форума.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Аватара е малко, уникално потребителско изображение което спомага за идентификацията на членовете. В повечето случай аватара се показва под потребителското име при преглеждането на тема. Тук можете да управлявате аватарите и техните настройки. За да качвате файлове трябва да бъде създадена категория с нужните права.',

	'ALLOW_LOCAL'					=> 'Включи галерията за аватари',
	'ALLOW_REMOTE'					=> 'Включи качването на файлове от URL адрес',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Аватари свалени от друг сайт посредством предоставен URL адрес',
	'ALLOW_UPLOAD'					=> 'Позволи качването на аватари',
	'AVATAR_GALLERY_PATH'			=> 'Път към галерията на аватари',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Пътят до root директорията за качване на изображения в галерията, пример <samp>images/avatars/gallery</samp>',
	'AVATAR_STORAGE_PATH'			=> 'Път към папката за качване на аватари',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Пътят до root директорията за качване на аватари, пример <samp>images/avatars/upload</samp>',
	'MAX_AVATAR_SIZE'				=> 'Максимални размери на аватар',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> '(Височина x Ширина в пиксели)',
	'MAX_FILESIZE'					=> 'Максимален размер на аватара',
	'MAX_FILESIZE_EXPLAIN'			=> 'За качване на файлове',
	'MIN_AVATAR_SIZE'				=> 'Минимални размери на аватара',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> '(Височина x Ширина в пиксели)',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Тук можете да променяте настройките за личните съобщения',

	'ALLOW_BBCODE_PM'			=> 'Позволи BBCode в личните съобщения',
	'ALLOW_FLASH_PM'			=> 'Позволи използването на <code>[FLASH]</code> BBCode таг',
	'ALLOW_FLASH_PM_EXPLAIN'    => 'Това е способноста да използвате flash в лични съобщения.',
	'ALLOW_FORWARD_PM'			=> 'Позволи пренасочването на лични съобщения',
	'ALLOW_IMG_PM'				=> 'Позволи използването на <code>[IMG]</code> BBCode таг',
	'ALLOW_MASS_PM'				=> 'Позволи изпращането на масови лични съобщения',
	'ALLOW_PRINT_PM'			=> 'Позволи принтирането на лични съобщения',
	'ALLOW_QUOTE_PM'			=> 'Позволи цитати в личните съобщения',
	'ALLOW_SIG_PM'				=> 'Прилагай подпис в личните съобщения',
	'ALLOW_SMILIES_PM'			=> 'Позволи усмивки в личните съобщения',
	'BOXES_LIMIT'				=> 'Максимум лични съобщения на кутия',
	'BOXES_LIMIT_EXPLAIN'		=> 'Потребителите могат да получават не повече от зададените лични съобщения във всяка една пощенска кутия. Задай на 0 за неограничен брой.',
	'BOXES_MAX'					=> 'Максимум папки за лични съобщения',
	'BOXES_MAX_EXPLAIN'			=> 'По подразбиране потребителите могат да създават толкова папки.',
	'ENABLE_PM_ICONS'			=> 'Позволи използването на икони за теми в личните съобщения',
	'FULL_FOLDER_ACTION'		=> 'Действие при препълнена папка',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Действието което форума ще предприеме при препълнена папка за лични съобщения.',
	'HOLD_NEW_MESSAGES'			=> 'Задържай новите съобщения',
	'PM_EDIT_TIME'				=> 'Лимит за промени',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Лимит за броя на възможните промени в личните съобщения, които все още не са пристигнали до получателя. Задай 0 за да изключиш тази опция.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Настройки при публикуване/писане',
	'ALLOW_POST_LINKS'					=> 'Позволи връзки в мнения/лични съобщения',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Ако е изключено <code>[URL]</code> BBCode таг-а ще бъде автоматично изключен.',
    'ALLOW_POST_FLASH'                  => 'Позволи <code>[FLASH]</code> таг в мненията. ',
    'ALLOW_POST_FLASH_EXPLAIN'          => 'Ако изключите <code>[FLASH]</code>, таг-а е забранен. В противен случай системата с правата контролира, кои потребители могат да използват таг-а.',
	
	'BUMP_INTERVAL'					=> 'Избутване на тема - интервал',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Минути, часове или дни м/у, които ще можете да издигате определена тема.',
	'CHAR_LIMIT'					=> 'Максимум знака на мнение',
	'CHAR_LIMIT_EXPLAIN'			=> 'Броя знаци за лимит на мнение. Задай 0 за неограничен брой.',
	'DISPLAY_LAST_EDITED'			=> 'Показвай последно променената информация',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> '',
	'EDIT_TIME'						=> 'Лимит за промяна',
	'EDIT_TIME_EXPLAIN'				=> 'Ограничи времето за промяна на мнение. Задай 0 за да изключиш тази опция.',
	'FLOOD_INTERVAL'				=> 'Flood интервал',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Брой секунди, които трябва да изчакаш преди да публикуваш още едно мнение.',
	'HOT_THRESHOLD'					=> 'Гореща тема',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Мненията, които са нужни на една тема за да стане гореща. Задай 0 за да изключиш горещите теми.',
	'MAX_POLL_OPTIONS'				=> 'Максимален брой на опциите в анкета',
	'MAX_POST_FONT_SIZE'			=> 'Максимален размер на шрифт в мнение',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Максимален размер на шрифта при писане на мнение. Задай 0 за неограничен размер.',
	'MAX_POST_IMG_HEIGHT'			=> 'Максимална височина на изображение в мнение',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Максимална височина на изображение/флаш елемент в мнение. Задай 0 за неограничен размер.',
	'MAX_POST_IMG_WIDTH'			=> 'Максимална ширина на изображение в мнение',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Максимална ширина на изображение/флаш елемент в мнение. Задай 0 за неограничен размер.',
	'MAX_POST_URLS'					=> 'Максимум връзки на мнение',
	'MAX_POST_URLS_EXPLAIN'			=> 'Максималния брой връзки в мнение. Задай 0 за неограничен брой.',
	'POSTING'						=> 'Писане',
	'POSTS_PER_PAGE'				=> 'Мнения на страница',
	'QUOTE_DEPTH_LIMIT'				=> 'Максимум цитати в мнение',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Задай 0 за неограничен брой.',
	'SMILIES_LIMIT'					=> 'Максимум усмивки в мнение',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Задай 0 за неограничен брой.',
	'TOPICS_PER_PAGE'				=> 'Теми на страница',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Настройки на сигнатурите',

	'MAX_SIG_FONT_SIZE'				=> 'Максимален размер на шрифта в подпис',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Максимален размер на шрифта в подпис. Задай 0 за неограничен размер.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Максимална височина на изображение в подпис',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Максимална височина на изображение/флаш елемент в потребителски подпис. Задай 0 за неограничена височина.',
	'MAX_SIG_IMG_WIDTH'				=> 'Максимална ширина на изображение в подпис',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Максимална ширина на изображение/флаш елемент в потребителски подпис. Задай 0 за неограничена височина.',
	'MAX_SIG_LENGTH'				=> 'Максимална дължина на подписа',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Максимум знаци в подпис.',
	'MAX_SIG_SMILIES'				=> 'Максимум усмивки в подпис',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Максималния брой усмивки в сигнатура. Задай 0 за неограничен брой.',
	'MAX_SIG_URLS'					=> 'Максимум връзки в подпис',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Максимален брой връзки в потребителски подпис. Задай 0 за неограничен брой.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Настройки при регистрация',

	'ACC_ACTIVATION'			=> 'Активиране на акаунт',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Ако включите тази опция, след като потребител се регистрира ще трябва да потвърди регистрацията си. Също така можете да изключите регистрация на потребители напълно.',
	'ACC_ADMIN'					=> 'От администратор',
	'ACC_DISABLE'				=> 'Изключено',
	'ACC_NONE'					=> 'Няма',
	'ACC_USER'					=> 'От потребител',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Позволи преизползването на email адреси',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Ако опцията е включена различни потребителите ще могат да се регистрират с един и същ email адрес.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA факс номер',
	'COPPA_MAIL'				=> 'COPPA email адрес',
	'COPPA_MAIL_EXPLAIN'		=> 'Адреса на който ще бъдат изпращани COPPA регистрациите',
	'ENABLE_COPPA'				=> 'Включи COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Тази опция изисква от потребителите да декларират дали имат навършени 13 години.',
	'MAX_CHARS'					=> 'Максимално',
	'MIN_CHARS'					=> 'Минимално',
	'NO_AUTH_PLUGIN'			=> 'Няма намерен ауторизиращ плугин.',
	'PASSWORD_LENGTH'			=> 'Дължина на парола',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Минимална и максимална дължи на на парола в знаци.',
	'REG_LIMIT'					=> 'Опити за регистрация',
	'REG_LIMIT_EXPLAIN'			=> 'Брой пъти, които потребителя ще може да греши кода за потвърждение.',
	'USERNAME_ALPHA_ONLY'		=> 'Alphanumeric',
	'USERNAME_ALPHA_SPACERS'	=> 'Alphanumeric и празно пространство',
	'USERNAME_ASCII'			=> 'ASCII (без unicode)',
	'USERNAME_LETTER_NUM'		=> 'Всякакви букви и числа',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Всякакви букви, числа и празно място',
	'USERNAME_CHARS'			=> 'Максимум знаци в потребителско име',
	'USERNAME_CHARS_ANY'		=> 'Всякакви знаци',
	'USERNAME_CHARS_EXPLAIN'	=> 'Тип знаци, които могат да бъдат използвани в потребителското име; пространство, -, +, _, [ и ]',
	'USERNAME_LENGTH'			=> 'Дължина на потребителското име',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Максимална и минимална дължина на потребителското име.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Визуално потвърждение и CAPTCHA настройки.',

	'CAPTCHA_GD'					=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'				=> 'GD CAPTCHA шум',
	'CAPTCHA_GD_EXPLAIN'			=> 'Използвай GD за да направиш по-сложна CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Използвай шума на преден план в главата на CAPTCHA.',
	'CAPTCHA_GD_X_GRID'						=> 'GD CAPTCHA шум по x',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Използвайте по-малки стойности за да направите CAPTCHA по-трудна. 0 изключва.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD CAPTCHA background noise y-axis',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Използвайте по-малки стойности за да направите CAPTCHA по-трудна. 0 изключва.',
	'CAPTCHA_PREVIEW_MSG'					=> 'Промените все още не са приложени. Това е просто преглед.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Ето така ще изглежда CAPTCHA. Използвайте бутона "Преглед" за презареждане на страница.',
	'VISUAL_CONFIRM_POST'			=> 'Включи потвърждението при публикации от гости',
	'VISUAL_CONFIRM_POST_EXPLAIN'	=> 'Изисква от анонимните потребители да въвеждат код при публикуване на мнение/тема',
	'VISUAL_CONFIRM_REG'			=> 'Включи потвърждението при регистрация',
	'VISUAL_CONFIRM_REG_EXPLAIN'	=> 'Задължава новите потребители да въвеждат код за да се регистрират.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Настройки на бисквитки. В повечето случай настройките по подразбиране трябва да бъдат достатъчни. Внимавайте когато променяте настройки тук.',

	'COOKIE_DOMAIN'				=> 'Бисквитка домейн',
	'COOKIE_NAME'				=> 'Бисквитка име',
	'COOKIE_PATH'				=> 'Бисквитка път',
	'COOKIE_SECURE'				=> 'Cookie сигурност',
	'COOKIE_SECURE_EXPLAIN'		=> 'Ако Вашият сървър поддържа SSL включете тази опция.',
	'ONLINE_LENGTH'				=> 'Обновяване на статистиката',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Времето след което статистиката (кой е он-лайн) се обновява',
	'SESSION_LENGTH'			=> 'Дължина на сесия',
	'SESSION_LENGTH_EXPLAIN'	=> 'Сесията ще изтече след това време, в секунди.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Тук можете да изключвате и включвате различни функции на форума за да намалите използването на процесора. В повечето случай няма нужна да променяте нищо.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Допълнителни полета',
	'LIMIT_LOAD'					=> 'Лимит на натоварване',
	'LIMIT_LOAD_EXPLAIN'			=> 'Ако системата надхвърли за 1 минута тази стойност форума автоматично ще се изключи. Стойността 1.0 е равна на ~100% използваемост на процесора. Работи само при UNIX базираните сървъри.',
	'LIMIT_SESSIONS'				=> 'Лимит сесии',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Ако броя сесии бъде надхвърлен м/у минута време форма ще се изключи автоматично. Задай 0 за неограничен брой сесии.',
	'LOAD_CPF_MEMBERLIST'			=> 'Показвай допълнителните полета в списъка с потребители',
	'LOAD_CPF_VIEWPROFILE'			=> 'Показвай допълнителните полета при преглед на профил',
	'LOAD_CPF_VIEWTOPIC'			=> 'Показвай допълнителните полета при преглед на тема',
	'LOAD_USER_ACTIVITY'			=> 'Показвай активността на потребителите',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Показвай активната тема/форум в профила и контролния панел на потребителите. Препоръчително е тази опция да бъде изключена, ако форума надхвърли един милион мнения.',
	'RECOMPILE_STYLES'			=> 'Провери за по-нови версии на темите',
	'RECOMPILE_STYLES_EXPLAIN'	=> 'Проверка за по-нови версии във файловата система',
	'YES_ANON_READ_MARKING'			=> 'Включи маркирането на теми за гости',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Запазвай прочетения/непрочетения статус за гости.',
	'YES_BIRTHDAYS_EXPLAIN'         => 'Ако тази опция е изключена, на началата страница няма да се показват хората, които имат рожден ден на текущата дата.',
	'YES_BIRTHDAYS'					=> 'Включи показването на рожденници',
	'YES_JUMPBOX'					=> 'Включи показването на jumpbox',
	'YES_MODERATORS'				=> 'Включи показването на модератори',
	'YES_ONLINE'					=> 'Включи он-лайн статистиката',
	'YES_ONLINE_EXPLAIN'			=> 'Показвай он-лайн статистиката на индекс-а, при преглеждане на форум и теми/мнения.',
	'YES_ONLINE_GUESTS'				=> 'Позволи показването на гостите в он-лайн статистиката',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Позволява отчитането на гостите в статистиката.',
	'YES_ONLINE_TRACK'				=> 'Включи показването на online/offline информация',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Показвай он-лайн информацията за потребители.',
	'YES_POST_MARKING'				=> 'Включи точкуваните теми',
	'YES_POST_MARKING_EXPLAIN'		=> 'Показва кои потребител е писал в тема.',
	'YES_READ_MARKING'				=> 'Записвай статуса на темите в базата данни',
	'YES_READ_MARKING_EXPLAIN'		=> 'Записва статуса на темите в базата данни без да използва бисквитки.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB поддържа плугини и модули за автентичност. Те Ви позволяват да определите как потребителите ще се ауторизират при вход във форума. По подразбиране са включени 3 модула; База данни, LDAP и Апачи.',

	'AUTH_METHOD'				=> 'Избери метод',

	'APACHE_SETUP_BEFORE_USE'	=> 'Трябва да настройките Апачи метода преди да превключите към този метод.',

	'LDAP_DN'						=> 'LDAP база <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Пример <samp>o=Моята компания,c=БГ</samp>',
	'LDAP_EMAIL'					=> 'LDAP email атрибут',
	'LDAP_EMAIL_EXPLAIN'			=> '',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Невалидно име или парола според LDAP.',
	'LDAP_NO_EMAIL'					=> 'Email атрибута не съществува.',
	'LDAP_NO_IDENTITY'				=> 'Не мога да намеря входова идентичност за %s',
	'LDAP_PASSWORD'					=> 'LDAP парола',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Оставете празно за анонимен вход или попълнете полето. <strong>ВНИМАНИЕ:</strong> Паролата няма да бъде хеширана при запис в базата данни.',
	'LDAP_PORT'                  => 'LDAP порт',
    'LDAP_PORT_EXPLAIN'            => 'Можете да въведете порт, които ще бъде използван за връзка със сървъра, по подразбиране той е 389.',
	'LDAP_SERVER'					=> 'LDAP име на сървър',
	'LDAP_SERVER_EXPLAIN'			=> 'Името или IP адреса на сървъра.',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Пример <var>uid</var>, <var>sn</var>..',
	'LDAP_USER'						=> 'LDAP потребител',
	'LDAP_USER_EXPLAIN'				=> 'Остави празно за анонимен достъп. LDAP сървъра ще Ви свърже.',
    'LDAP_USER_FILTER'            => 'LDAP филтър',
	'LDAP_USER_FILTER_EXPLAIN'      => 'Можете да филтрирате обектите. Пример <samp>objectClass=posixGroup</samp>.',
	));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'От тук можете да променяте настройките на сървъра и домейна. Уверете се, че въведената информация е точна, грешките ще повлияят на работата на форума. Когато въвеждате домейн име помнете, че то не включва http:// или други протоколи. Само променете порта ако има нужда.',

	'ENABLE_GZIP'				=> 'Включи GZIP компресията',
	'ENABLE_GZIP_EXPLAIN'		=> 'Генерираното съдържание ще бъде компресирано когато се показва на потребителя. Тази опция ще намали трафика, но ще увеличи товара над процесора.',
	'FORCE_SERVER_VARS'			=> 'Одобри URL настройките',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Ако изберете да, настройките на сървъра дефинирате тук ще бъдат разпознавани като благоприятни за форума',
	'ICONS_PATH'				=> 'Път до икони',
	'ICONS_PATH_EXPLAIN'		=> 'Път до root директорията с иконите, пример <samp>images/icons</samp>',
	'PATH_SETTINGS'				=> 'Пътища настройки',
	'RANKS_PATH'				=> 'Път към рангови изображения',
	'RANKS_PATH_EXPLAIN'		=> 'Път до root директорията с ранг изображенията, пример <samp>images/ranks</samp>',
	'SCRIPT_PATH'				=> 'Път към форума',
	'SCRIPT_PATH_EXPLAIN'		=> 'Пример <samp>/phpBB3</samp>',
	'SERVER_NAME'				=> 'Домейн име',
	'SERVER_NAME_EXPLAIN'		=> 'Домейн името на форума (пример: <samp>www.foo.bar</samp>)',
	'SERVER_PORT'				=> 'Сървър порт',
	'SERVER_PORT_EXPLAIN'		=> 'Порта на сървъра, в повечето случай е 80',
	'SERVER_PROTOCOL'			=> 'Сървър протокол',
	'SERVER_PROTOCOL_EXPLAIN'	=> '',
	'SERVER_URL_SETTINGS'		=> 'URL настройки',
	'SMILIES_PATH'				=> 'Път до усмивките',
	'SMILIES_PATH_EXPLAIN'		=> 'Пример <samp>images/smilies</samp>',
	'UPLOAD_ICONS_PATH'			=> 'Път до изображенията с разширенията',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Пример <samp>images/upload_icons</samp>',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Настройки на сесии',

	'ALL'							=> 'Всички',
	'ALLOW_AUTOLOGIN'				=> 'Позволи запомнянето на потребители', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Определя дали потребителите могат да бъдат запомняни след като са влезли един път в акаунта си.', 
	'AUTOLOGIN_LENGTH'				=> 'Изтичане на вход кода (в дни)', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Броя дни, след които вход кода се изтрива, въведи 0 за да изключиш опцията.', 
	'BROWSER_VALID'					=> 'Валидирай браузър',
	'BROWSER_VALID_EXPLAIN'			=> 'Валидиране на браузъра за всяка сесия.',
	'CHECK_DNSBL'					=> 'Проверявай IP с/у DNS Blackhole списъка',
	'CHECK_DNSBL_EXPLAIN'			=> 'Ако е включена потребителските IP адреси се проверяват според DNXBL: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> and <a href="http://spamhaus.org">spamhaus.org</a>. В зависимост от сървъра може да отнеме доста време.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Проверявай email домейн адреса за валиден MX запис',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Ако опцията е включена email адресите ще бъдат проверявани при всяко въвеждане за валиден MX запис',
	'FORCE_PASS_CHANGE'				=> 'Поискай промяна на парола',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Изисква потребителите да променят паролата си до определен брой дни. Задай 0 за да изключиш опцията.',
	'FORWARDED_FOR_VALID'			=> 'Валидиран <var>X_FORWARDED_FOR</var> хеадър',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Сесията ще бъде продължена, ако изпратиш <var>X_FORWARDED_FOR</var> хеадър равен на този, които си изпратил миналия път.',
	'IP_VALID'						=> 'Валидиране на IP Сесията',
	'IP_VALID_EXPLAIN'				=> 'Определя, колко потребителски IP адреса се използват за валидиране на сесия; <samp>Всички</samp>, <samp>A.B.C</samp> първите x.x.x, <samp>A.B</samp> първите x.x, <samp>няма</samp> изключва опцията.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Максимален брой опити за вход',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'След определен брой опити потребителя ще трябва да въвежда допълнителна информация за да влезе в акаунта си (визуално потвърждение) с код.',
	'NO_IP_VALIDATION'				=> 'Няма',
	'PASSWORD_TYPE'					=> 'Сложност на паролата',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Определя колко трябва да е сложна паролата.',
	'PASS_TYPE_ALPHA'				=> 'Трябва да съдържа alphanumerics',
	'PASS_TYPE_ANY'					=> 'Без изисквания',
	'PASS_TYPE_CASE'				=> 'Трябва да бъде миксирана',
	'PASS_TYPE_SYMBOL'				=> 'Трябва да съдържа символи',
	'TPL_ALLOW_PHP'					=> 'Позволи php в шаблони',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Ако опцията е включена, <code>PHP</code> и <code>INCLUDEPHP</code> ще бъде ресинхронизирано и парсирано в шаблоните.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Тази информация се използва от форума при изпращане на email-и до други потребители. Уверете се че email адреса, който сте въвели е валиден, повредените и неполучените съобщения ще бъдат изпращани на този адрес. Ако хостинга ви не позволява използването на php базираната mail(); функция, можете да използвате директно SMTP.',

	'ADMIN_EMAIL'					=> 'Автоматичен отговор',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Автоматичен отговор на всички получени съобщения на вашия email адрес.',
	'BOARD_EMAIL_FORM'				=> 'Потребителите могат да изпращат email адреси от форума',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Вместо показването на потребителските email адреси потребителите ще могат да изпращат директно съобщения от форума.',
	'BOARD_HIDE_EMAILS'				=> 'Скрии email адресите',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Тази функция скрива всички email адреси.',
	'CONTACT_EMAIL'					=> 'Email адрес за връзка',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Този адрес ще бъде използван всеки път когато специфична връзка е нужна, пример, спам, грешка и други.',
	'EMAIL_FUNCTION_NAME'			=> 'Email функция име',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Функцията използвана за изпращане на съобщения чрез PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Размер на email пакети',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Броя съобщения изпратени в един пакет.',
	'EMAIL_SIG'						=> 'Email подпис',
	'EMAIL_SIG_EXPLAIN'				=> 'Текст, който ще бъде добавен в края на всяко съобщение.',
	'ENABLE_EMAIL'					=> 'Включи изпращането на email адреси от форума',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Ако тази опция е изключена няма да могат да се изпращат съобщения от форума.',
	'SMTP_AUTH_METHOD'				=> 'Автентичност SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> '',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'Вход',
	'SMTP_PASSWORD'					=> 'SMTP парола',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Въведи парола само ако SMTP сървъра я изисква.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP сървър порт',
	'SMTP_PORT_EXPLAIN'				=> 'Промени само, ако знаеш че SMTP е на друг порт',
	'SMTP_SERVER'					=> 'SMTP сървър адрес',
	'SMTP_SETTINGS'					=> 'SMTP парола',
	'SMTP_USERNAME'					=> 'SMTP име',
	'SMTP_USERNAME_EXPLAIN'			=> 'Въведи името само ако SMTP го изисква.',
	'USE_SMTP'						=> 'Използва SMTP сървъра за email',
	'USE_SMTP_EXPLAIN'				=> 'Избери "Да", ако искаш или трябва да изпращат email адреси през именован сървър вместо локалната mail функция.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'От тук можете да разрешите използването на Jabber. Jabber е протокол с отворен код свободен за използване от всички.',

	'ERR_JAB_AUTH'			=> 'Не мога да намеря Jabber сървър.',
	'ERR_JAB_CONNECT'		=> 'Не мога да се свържа към Jabber сървър.',
	'JAB_ENABLE'				=> 'Включи Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Позволи използването на Jabber',
	'JAB_PACKAGE_SIZE'			=> 'Jabber размер на пакет',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Броя съобщения изпратени на един пакет. Задай 0 за внезапно изпращане на съобщенията.',
	'JAB_PASSWORD'				=> 'Jabber парола',
	'JAB_PORT'					=> 'Jabber порт',
	'JAB_PORT_EXPLAIN'			=> 'Остави празно освен, ако порта е различен от 5222',
	'JAB_SERVER'				=> 'Jabber сървър',
	'JAB_SERVER_EXPLAIN'		=> 'Виж %sjabber.org%s за списък на сървърите',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber настройките са променени успешно.',
    'JAB_USE_SSL'            => 'Използвай SSL за свързването',
    'JAB_USE_SSL_EXPLAIN'      => 'Jabber порта ще бъде променен на 5223, ако е зададен 5222',
	'JAB_USERNAME'				=> 'Jabber потребителско име',
	'JAB_USERNAME_EXPLAIN'		=> 'Ако потребителя не съществува ще бъде направен опит за създаването му.',
));

?>