<?php
/**
* acp_permissions (phpBB Permission Set) [Slovak]
*
* @package language
* @version $Id: permissions_phpbb.php,v 1.28 2007/07/19 20:37:52 acydburn Exp $
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
		'actions'		=> 'Akcie',
		'content'		=> 'Obsah',
		'forums'		=> 'Fóra',
		'misc'			=> 'Rôzne',
		'permissions'	=> 'Oprávnenia',
		'pm'			=> 'Súkromné správy',
		'polls'			=> 'Hlasovania',
		'post'			=> 'Príspevky',
		'post_actions'	=> 'Práca s príspevkami',
		'posting'		=> 'Prispievanie',
		'profile'		=> 'Profil',
		'settings'		=> 'Nastavenie',
		'topic_actions'	=> 'Práca s témami',
		'user_group'	=> 'Používatelia &amp; Skupiny',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Používateľské oprávnenia',
		'a_'			=> 'Administrátorské oprávnenia',
		'm_'			=> 'Moderátorské oprávnenia',
		'f_'			=> 'Oprávnenia fór',
		'global'		=> array(
			'm_'			=> 'Oprávnenia globálnych moderátorov',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Môže zobraziť profily, zoznam používateľov a zoznam prítomných používateľov', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Môže zmeniť používateľské meno', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Môže zmeniť heslo', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Môže zmeniť e-mailovú adresu', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Môže zmeniť obrázok postavičky', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Môže zmeniť predvolenú skupinu', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Môže pripájať súbory', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Môže sťahovať súbory', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Môže ukladať koncepty', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Môže vypnúť cenzúru slov', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Môže použiť podpis', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Môže odosielať súkromné správy', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Môže odosielať správy viacerým používateľom', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Môže čítať súkromné správy', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Môže upravovať vlastné súkromné správy', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Môže odstrániť súkromné správy z vlastného priečinka', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Môže preposielať súkromné správy', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Môže odoslať súkromné správy e-mailom', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Môže vytlačiť súkromné správy', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Môže pripájať súbory k súkromným správam', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Môže sťahovať súbory v súkromných správach', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Môže použiť značky BBCode v súkromným správach', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Môže použiť smajlíkov v súkromným správach', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Môže použiť obrázky v súkromným správach', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Môže použiť Flash v súkromným správach', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Môže odosielať e-mailové správy', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Môže odosielať rýchle správy', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Môže ignorovať ochranný interval', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Môže skryť svoju prítomnosť', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Môže zobraziť zoznam všetkých prítomných používateľov', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Môže vyhľadávať na fóre', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Môže vidieť fórum', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Môže čítať fórum', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Môže zakladať nové témy', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Môže odpovedať na témy', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Môže použiť ikony tém/príspevkov', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Môže odosielať Dôležité témy', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Môže odosielať Oznámenia', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Môže vytvárať hlasovania', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Môže hlasovať v hlasovaniach', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Môže zmeniť existujúce hlasovanie', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Môže pripájať súbory', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Môže sťahovať súbory', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Môže použiť podpis', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Môže použiť značky BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Môže použiť smajlíkov', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Môže použiť obrázky', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Môže použiť Flash', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Môže upravovať vlastné príspevky', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Môže odstraňovať vlastné príspevky', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Môže uzamykať vlastné témy', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Môže oživovať témy', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Môže nahlasovať príspevky', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Môže sledovať fóra', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Môže tlačiť témy', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Môže odosielať témy e-mailom', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Môže vyhľadávať na fóre', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Môže ignorovať ochranný interval', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Počítať príspevky do celkového počtu<br /><em>Toto ovplyvní len nové príspevky.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Môže prispievať bez schválenia príspevkov', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Môže upravovať príspevky', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Môže odstraňovať príspevky', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Môže schvaľovať príspevky', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Môže uzatvárať a odstraňovať hlásenia', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Môže zmeniť autora príspevku', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Môže presúvať témy', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Môže uzamykať témy', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Môže rozdeľovať témy', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Môže spájať témy', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Môže zobraziť detaily príspevkov', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Môže udeliť varovanie<br /><em>Toto je globálne nastavenie, nie pre jednotlivé fóra.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Môže spravovať zákazy vstupu (ban)<br /><em>Toto je globálne nastavenie, nie pre jednotlivé fóra.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Môže meniť nastavenia fóra/skontrolovať aktualizácie', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Môže meniť nastavenia servera/komunikácie', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Môže meniť nastavenia pre Jabber', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Môže zobraziť informácie o PHP', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Môže spravovať fóra', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Môže pridávať nové fóra', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Môže odstraňovať fóra', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Môže prečisťovať fóra', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Môže meniť ikony tém/príspevkov a smajlíkov', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Môže upravovať cenzúru slov', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Môže definovať značky BBCode', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Môže meniť nastavenia príloh', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Môže spravovať používateľov<br /><em>Toto zahŕňa zobrazenie identifikácie prehliadača v zozname prítomných používateľov.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Môže odstraňovať/prečisťovať používateľov', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Môže spravovať skupiny', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Môže pridávať nové skupiny', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Môže odstraňovať skupiny', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Môže spravovať hodnotenia', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Môže spravovať vlastné políčka v profile', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Môže spravovať nepovolené mená', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Môže spravovať zákazy vstupu (ban)', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Môže zobrazovať masky oprávnení', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Môže meniť oprávnenia pre jednotlivé skupiny', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Môže meniť oprávnenia pre jednotlivých používateľov', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Môže meniť oprávnenia fór', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Môže meniť moderátorské oprávnenia', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Môže meniť administrátorské oprávnenia', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Môže meniť používateľské oprávnenia', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Môže spravovať role', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Môže používať oprávnenia ostatných', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Môže spravovať štýly', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Môže zobraziť protokoly', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Môže premazávať protokoly', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Môže spravovať moduly', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Môže spravovať jazykové balíky', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Môže odosielať hromadné e-mailové správy', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Môže spravovať robotov', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Môže meniť dôvody schválení/odmietnutí', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Môže obnovovať/zálohovať databázu', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Môže spravovať vyhľadávanie a indexy vyhľadávania', 'cat' => 'misc'),
));

?>
