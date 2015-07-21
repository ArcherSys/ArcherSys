<?php
/** 
* acp_permissions (phpBB Permission Set) [Česky]
*
* @package language
* @version $Id: permissions_phpbb.php,v 1.26 2007/01/26 16:09:16 acydburn Exp $
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

/**
*	MODDERS PLEASE NOTE
*	
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp 
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'Činnosti',
		'content'		=> 'Obsah',
		'forums'		=> 'Fóra',
		'misc'			=> 'Různé',
		'permissions'	=> 'Oprávnění',
		'pm'			=> 'Soukromé zprávy',
		'polls'			=> 'Hlasování',
		'post'			=> 'Příspěvky',
		'post_actions'	=> 'Práce s příspěvky',
		'posting'		=> 'Přispívání',
		'profile'		=> 'Profil',
		'settings'		=> 'Nastavení',
		'topic_actions'	=> 'Práce s tématy',
		'user_group'	=> 'Uživatelé &amp; Skupiny',
	),
	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Uživatelská oprávnění',
		'a_'			=> 'Administrátorská oprávnění',
		'm_'			=> 'Moderátorská oprávnění',
		'f_'			=> 'Oprávnění fór',
		'global'      	=> array(
          'm_'         		=> 'Globální moderátorská oprávnění',
        ),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Může zobrazit profil, seznam uživatelů a výpis uživatelů online', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Může měnit už. jméno', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Může měnit heslo', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Může měnit e-mail', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Může měnit avatar', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Může měnit výchozí skupinu', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Může připojovat soubory', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Může stahovat soubory', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Může ukládat koncepty', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Může vypnout cenzuru slov', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Může použít podpis', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Může posílat soukromé zprávy', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Může posílat zprávy více uživatelům', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Může číst soukromé zprávy', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Může upravovat vlastní soukromé zprávy', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Může odstranit soukromé zprávy z vlastní složky', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Může přeposílat soukromé zprávy', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Může poslat soukromé zprávy e-mailem', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Může tisknout soukromé zprávy', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Může připojovat soubory k soukromým zprávám', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Může stahovat soubory v soukromých zprávách', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Může použít BBCode v soukromých zprávách', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Může použít smajlíky v soukromých zprávách', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Může použít obrázky v soukromých zprávách', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Může použít Flash v soukromých zprávách', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Může posílat e-maily', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Může posílat instantní zprávy', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Může vyhledávát přes limit', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Může skrýt online stav', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Může zobrazit všechny uživatele online', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Může vyhledávat na fóru', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Může vidět fórum', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Může číst fórum', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Může zakládat nová témata', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Může odpovídat na témata', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Může použít ikony témat/příspěvků', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Může odesílat důležité', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Může odesílat oznámení', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Může vytvářet hlasování', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Může hlasovat v hlasováních', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Může změnit existující hlasování', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Může připojovat soubory', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Může stahovat soubory', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Může použít podpis', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Může použít BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Může použít smajlíky', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Může použít obrázky', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Může použít Flash', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Může upravovat vlastní příspěvky', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Může mazat vlastní příspěvky', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Může zamykat vlastní témata', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Může oživovat témata', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Může ohlašovat příspěvky', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Může sledovat fóra', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Může tisknout témata', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Může posílat témata e-mailem', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Může vyhledávat na fóru', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Může vyhledávat přes limit', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Počítat příspěvky do celkového počtu<br /><em>Toto ovlivní jen nové příspěvky.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Může přispívat bez schválení příspěvku', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Může upravovat příspěvky', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Může mazat příspěvky', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Může schvalovat příspěvky', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Může uzavírat a mazat hlášení', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Může změnit autora příspěvku', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Může přesouvat témata', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Může zamykat témata', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Může rozdělovat témata', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Může slučovat témata', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Může zobrazit detaily příspěvků', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Může udělit varování<br /><em>Toto je globální nastavení, nezávisí na fórech.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Může spravovat bany<br /><em>Toto je globální nastavení, nezávisí na fórech.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Může měnit nastavení fóra/zkontrolovat updaty', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Může měnit nastavení serveru/komunikace', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Může měnit nastavení Jabberu', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Může zobrazit informace o PHP', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Může spravovat fóra', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Může přidávat nová fóra', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Může mazat fóra', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Může pročišťovat fóra', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Může měnit ikony témat/příspěvků a smajlíky', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Může upravovat cenzuru slov', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Může definovat BBCode značky', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Může měnit nastavení příloh', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Může spravovat uživatele<br /><em>Toto také zahrnuje zobrazení prohlížeče uživatele ve výpisu uživatelů online.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Může mazat/pročišťovat uživatele', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Může spravovat skupiny', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Může přidávat nové skupiny', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Může mazat skupiny', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Může spravovat hodnosti', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Může spravovat vlastní pole v profilu', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Může spravovat nepovolená jména', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Může spravovat bany', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Může zobrazovat masky oprávnění', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Může měnit oprávnění pro jednotlivé skupiny', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Může měnit oprávnění pro jednotlivé uživatele', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Může měnit oprávnění fór', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Může měnit moderátorská oprávnění', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Může měnit administrátorská oprávnění', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Může měnit uživatelská oprávnění', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Může spravovat role', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Může používat oprávnění ostatních', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Může spravovat styly', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Může zobrazit logy', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Může promazávat logy', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Může spravovat moduly', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Může spravovat jazykové balíky', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Může odesílat hromadné e-maily', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Může spravovat boty', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Může měnit důvody schválení/odmítnutí', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Může obnovovat/zálohovat databázi', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Může spravovat vyhledávání a vyhledávací indexy', 'cat' => 'misc'),
));

?>