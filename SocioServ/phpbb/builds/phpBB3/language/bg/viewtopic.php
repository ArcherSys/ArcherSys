<?php
/**
*
* viewtopic [English]
*
* @package language
* @version $Id: viewtopic.php,v 1.15 2006/12/22 22:51:33 shs Exp $
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
    'ATTACHMENT'                        => 'Прикачени файлове',
    'ATTACHMENT_FUNCTIONALITY_DISABLED'    => 'Прикачването на файлове е изключено',

    'BOOKMARK_ADDED'        => 'Темата е маркирана успешно.',
    'BOOKMARK_REMOVED'        => 'Маркировката е успешно мремахната.',
    'BOOKMARK_TOPIC'        => 'Добави отметка към тази тема',
    'BOOKMARK_TOPIC_REMOVE'    => 'Премахни отметка',
    'BUMPED_BY'                => 'Последно избутване %1$s от %2$s',
    'BUMP_TOPIC'            => 'Избутай темата',

    'CODE'                    => 'Код',

    'DELETE_TOPIC'            => 'Изтрий темата',
    'DOWNLOAD_NOTICE'        => 'Вие нямате нужните права за да сваляте прикачени файлове.',

    'EDITED_TIMES_TOTAL'    => 'Последна промяна %1$s на %2$s, променена общо %3$d пъти',
    'EDITED_TIME_TOTAL'        => 'Последна промяна %1$s на %2$s, променена общо %3$d път',
    'EMAIL_TOPIC'            => 'Изпрати на приятел',
    'ERROR_NO_ATTACHMENT'    => 'Избраните файлове вече не съществуват',

    'FILE_NOT_FOUND_404'    => 'Файла <strong>%s</strong> не съществува.',
    'FORK_TOPIC'            => 'Копирай темата',

    'LINKAGE_FORBIDDEN'        => 'Вие нямате право да сваляте/преглеждате/линквате от този сайт.',
    'LOGIN_NOTIFY_TOPIC'    => 'Трябва да влезете в акаунта си.',
    'LOGIN_VIEWTOPIC'        => 'Влезте в акаунта си за да видите темата.',

    'MAKE_ANNOUNCE'                => 'Направи Важна тема',
    'MAKE_GLOBAL'                => 'Направи Съобщение',
    'MAKE_NORMAL'                => 'Направи Нормална тема',
    'MAKE_STICKY'                => 'Закачи темата',
    'MAX_OPTIONS_SELECT'        => 'Вие можете да гласувате за <strong>%d</strong> неща',
    'MAX_OPTION_SELECT'            => 'Вие можете да гласувате за едно нещо',
    'MISSING_INLINE_ATTACHMENT'    => 'Прикачения файл <strong>%s</strong> вече е недостъпен',
    'MOVE_TOPIC'                => 'Премести тема',

    'NO_ATTACHMENT_SELECTED'=> 'Няма избрани прикачени файлове за преглед или сваляне.',
    'NO_NEWER_TOPICS'        => 'Няма нови теми в този форум',
    'NO_OLDER_TOPICS'        => 'Няма стари теми в този форум',
    'NO_UNREAD_POSTS'        => 'Няма непрочетени мнения в тази тема.',
    'NO_VOTE_OPTION'        => 'Трябва да избереш за кого искаш да гласуваш.',
    'NO_VOTES'                => 'Няма гласували',

    'POLL_ENDED_AT'            => 'Анкетата свършва на %s',
    'POLL_RUN_TILL'            => 'Анкетата е валидна до %s',
    'POLL_VOTED_OPTION'        => 'Вашия глас',
    'PRINT_TOPIC'            => 'Принтирай',

    'QUICK_MOD'                => 'Опции',
    'QUOTE'                    => 'Цитат',

    'REPLY_TO_TOPIC'        => 'Отговори на тема',
    'RETURN_POST'            => '%sВърни се към мненията%s',

    'SUBMIT_VOTE'            => 'Изпрати гласа',

    'TOTAL_VOTES'            => 'Общо гласове',

    'UNLOCK_TOPIC'            => 'Отключи тема',

    'VIEW_INFO'                => 'Детайли на мнението',
    'VIEW_NEXT_TOPIC'        => 'Следваща тема',
    'VIEW_PREVIOUS_TOPIC'    => 'Предишна тема',
    'VIEW_RESULTS'            => 'Резултати',
    'VIEW_TOPIC_POST'        => '1 мнение',
    'VIEW_TOPIC_POSTS'        => '%d мнения',
    'VIEW_UNREAD_POST'        => 'Първото непрочетено мнение',
    'VISIT_WEBSITE'            => 'WWW',
    'VOTE_SUBMITTED'        => 'Гласа ви беше зачетен',

));

?>