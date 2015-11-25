<?php
/**
*
* groups [English]
*
* @package language
* @version $Id: groups.php,v 1.16 2006/12/22 22:51:33 shs Exp $
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
    'ALREADY_DEFAULT_GROUP'    => 'Избраната група вече е по подразбиране',
	'ALREADY_IN_GROUP'			=> 'Вие вече сте член на избраната група.',
    'ALREADY_IN_GROUP_PENDING'        => 'Вие вече сте член на тази група',

    'CHANGED_DEFAULT_GROUP'    => 'Групата по подразбиране е успешно променена',
    
    'GROUP_AVATAR'                        => 'Групов аватар',
    'GROUP_CHANGE_DEFAULT'                => 'Сигурен ли сте, че искате да смените членството на група “%s”?',
    'GROUP_CLOSED'                        => 'Затворена',
    'GROUP_DESC'                        => 'Описание на групата',
    'GROUP_HIDDEN'                        => 'Скрита',
    'GROUP_INFORMATION'                    => 'Информация за групата',
    'GROUP_IS_CLOSED'                    => 'Това е затворена група, трябва Ви покана от екипа за да можете да членувате.',
    'GROUP_IS_FREE'                        => 'Това е отворена група, всеки може да бъде приет в нея.',
    'GROUP_IS_HIDDEN'                    => 'Това е скрита група.',
    'GROUP_IS_OPEN'                        => 'Това е отворена група, приемат се нови потребители.',
    'GROUP_IS_SPECIAL'                    => 'Това е специална група, специалните групи се контролират от администратора.',
    'GROUP_JOIN'                        => 'Присъединете се',
    'GROUP_JOIN_CONFIRM'                => 'Сигурен ли сте че искате да се присъедините към тази група?',
    'GROUP_JOIN_PENDING'                => 'Подайте молба за присъединяване',
    'GROUP_JOIN_PENDING_CONFIRM'        => 'Сигурен ли сте, че искате да подадете молба за присъединяване?',
    'GROUP_JOINED'                        => 'Вие успешно се присъединихте към групата',
    'GROUP_JOINED_PENDING'                => 'Молбата е успешно изпратена. Екипа трябва да Ви одобри.',
    'GROUP_LIST'                        => 'Списък потребители',
    'GROUP_MEMBERS'                        => 'Членове на групата',
    'GROUP_NAME'                        => 'Име на групата',
    'GROUP_OPEN'                        => 'Отвори',
    'GROUP_RANK'                        => 'Ранг на групата',
    'GROUP_RESIGN_MEMBERSHIP'            => 'Подайте си оставката',
    'GROUP_RESIGN_MEMBERSHIP_CONFIRM'    => 'Сигурен ли сте, че искате да напуснете тази група?',
    'GROUP_RESIGN_PENDING'                => 'Подай висяща оставка',
    'GROUP_RESIGN_PENDING_CONFIRM'        => 'Сигурен ли сте, че искате да подадете висяща оставка?',
    'GROUP_RESIGNED_MEMBERSHIP'            => 'Вие успешно сте, премахнат от групата',
    'GROUP_RESIGNED_PENDING'            => 'Висящото Ви членуване е премахнато от групата',
    'GROUP_TYPE'                        => 'Тип на групата',
    'GROUP_UNDISCLOSED'                    => 'Скрита група',
    'FORUM_UNDISCLOSED'                    => 'Модерирайте скрития форум(и)',

    'LOGIN_EXPLAIN_GROUP'    => 'Трябва да влезете в акаунта си преди да можете да видите детайлите на групата',

    'NO_LEADERS'                    => 'Вие не сте лидер на нито една група',
    'NOT_LEADER_OF_GROUP'            => 'Операцията не може да бъде предприета, Вие не сте лидер на групата.',
    'NOT_MEMBER_OF_GROUP'            => 'Операцията не може да бъде предприета, Вие не сте член на групата.',
    'NOT_RESIGN_FROM_DEFAULT_GROUP'    => 'Вие не можете да напуснете Вашата група по подразбиране.',
    
    'PRIMARY_GROUP'        => 'Основна група',

    'REMOVE_SELECTED'        => 'Изтрий избраните',

    'USER_GROUP_CHANGE'            => 'От “%1$s” група на “%2$s”',
    'USER_GROUP_DEMOTE'            => 'Премахни водачеството',
    'USER_GROUP_DEMOTE_CONFIRM'    => 'Сигурен ли сте, че вече не искате да бъдете лидер на групата?',
    'USER_GROUP_DEMOTED'        => 'Успешно понижен.',
));

?>