<?php
/** 
* acp_permissions (phpBB Permission Set) [English]
*
* @package language
* @version $Id: permissions_phpbb.php,v 1.21 2007/01/26 16:09:16 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}


$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'Действия',
		'content'		=> 'Съдържание',
		'forums'		=> 'Форуми',
		'misc'			=> 'Други',
		'permissions'	=> 'Права',
		'pm'			=> 'Лични съобщения',
		'polls'			=> 'Анкети',
		'post'			=> 'Мнения',
		'post_actions'	=> 'Действия с мнения',
		'posting'		=> 'Писане',
		'profile'		=> 'Профил',
		'settings'		=> 'Настройки',
		'topic_actions'	=> 'Действия с теми',
		'user_group'	=> 'Потребители и Групи',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Потребителски права',
		'a_'			=> 'Администраторски права',
		'm_'			=> 'Модераторски права',
		'f_'			=> 'Форум права',
		'global'		=> array(
          'm_'         => 'Права на глобалните модератори',
		),
	),
));
// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Може да преглежда профили', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Може да променя потребителско име', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Може да променя паролата си', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Може да променя email адреса си', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Може да сменя аватара си', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Може да променя групата по подразбиране', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Може да прикачва файлове', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Може да сваля файлове', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Може да записва чернови', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Може да изключва цензурата на думи', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Може да използва сигнатура', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Може да изпраща лични съобщения', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Може да изпраща лични съобщения до много потребители или цяла група', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Може да чете лични съобщения', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Може да променя собствените си лични съобщения', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Може да изтрива личните си съобщения', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Може да пренасочва личните си съобщения', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Може да праща лични съобщения (email)', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Може да принтира лични съобщения', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Може да прикачва файлове към лични съобщения', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Може да сваля файлове от лични съобщения', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Може да използва BBCode в лични съобщения', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Може да използва усмивки в личните съобщения', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Може да използва изображения в личните съобщения', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Може да публикува флаш елементи в личните съобщения', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Може да изпраща email адреси', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Може да изпраща моментални съобщения', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Може да игнорира flood лимита', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Може да се скрива от он-лайн статуса', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Може да вижда кой е на линия', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Може да използва търсенето', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Може да преглежда форум', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Може да чете форум', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Може да публикува нова тема', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Може да отговаря в теми', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Може да използва икони в мнение/тема', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Може да публикува Важни теми', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Може да публикува Закачени теми', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Може да създава анкети', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Може да гласува в анкети', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Може да променя съществуващи анкети', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Може да прикачва файлове', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Може да сваля файлове', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Може да използва подпис', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Може да използва BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Може да използва усмивките', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Може да използва изображения', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Може да публикува флаш елементи', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Може да променя собствените си мнения', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Може да изтрива собствените си мнения', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Може да заключва собствените си мнения', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Може да избутва теми', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Може да сигнализира за мнения/теми', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Може да се абонира', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Може да принтира теми', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Може да изпраща теми (email)', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Може да търси във форума', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Може да игнорира flood лимита', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Брояч на мнения<br /><em>Настройките ще повлияят на новите мнения.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Може да пише без одобрение', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Може да променя мнения', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Може да изтрива мнения', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Може да одобрява мнения', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Може да затваря и изтрива сигнали', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Може да променя автор на тема', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Може да премества теми', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Може да заключва теми', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Може да разделя теми', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Може да съединява теми', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Може да преглежда детайли на мнение', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Може да слага предупреждения', 'cat' => 'misc'),
	'acl_m_ban'		=> array('lang' => 'Може да управлява бановете', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Може да променя настройките на форума/проверява за нови версии', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Може да променя сървър/комуникационните настройки', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Може да променя Jabber настройките', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Може да преглежда php настройките', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Може да управлява форуми', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Може да добавя форуми', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Може да изтрива форуми', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Може да изчиства форуми', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Може да промяна иконите и усмивките в теми', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Може да променя цензура', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Може да добавя нови BBCode тагове', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Може да промяна настройките за прикачените файлове', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Може да управлява потребители', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Може да изтрива/изчиства потребители', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Може да управлява групи', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Може да създава групи', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Може да изтрива групи', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Може да управлява рангове', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Може да добавя нови полета', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Може да управлява забранените имена', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Може да контролира бановете', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Може да преглежда правата', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Може да променя правата за индивидуални групи', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Може да променя правата за индивидуални потребители', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Може да променя форум клас правата', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Може да променя модератор клас правата ', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Може да променя админ клас правата', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Може да променя потребител клас правата', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Може да управлява ролите', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Може да използва други права', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Може да управлява стиловете', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Може да преглежда логовете', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Може да изчиства логовете', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Може да управлява модулите', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Може да управлява езиковите пакети', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Може да изпраща масов email', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Може да управлява ботовете', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Може да управлява причините за сигнал', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Може да бек-ъпва/възстановява база данни', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Може да променя настройките за търсене', 'cat' => 'misc'),
));

?>