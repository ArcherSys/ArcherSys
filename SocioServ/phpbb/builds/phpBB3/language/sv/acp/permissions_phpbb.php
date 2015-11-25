<?php
/** 
* acp_permissions (phpBB Permission Set) [Swedish] (version 0.5.0 - 3.0.RC5)
*
* @package language
* @version $Id: permissions_phpbb.php,v 1.11 2007/08/25 14:15:13 virtuality Exp $
* @copyright (c) 2005 phpBB Group 
* @author (c) 2006-2007 Jonathan Gulbrandsen (jonathan@carlssonplanet.com)
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
		'actions'		=> 'Handlingar',
		'content'		=> 'Innehåll',
		'forums'		=> 'Kategorier',
		'misc'			=> 'Blandat',
		'permissions'	=> 'Rättigheter',
		'pm'			=> 'Personliga meddelanden',
		'polls'			=> 'Omröstningar',
		'post'			=> 'Inlägg',
		'post_actions'	=> 'Inläggshandlingar',
		'posting'		=> 'Inlägg',
		'profile'		=> 'Profil',
		'settings'		=> 'Inställningar',
		'topic_actions'	=> 'Trådhandlingar',
		'user_group'	=> 'Användare &amp; grupper',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Användarrättigheter',
		'a_'			=> 'Administratörsrättigheter',
		'm_'			=> 'Moderatorrättigheter',
		'f_'			=> 'Kategorirättigheter',
		'global'		=> array(
			'm_'			=> 'Globala moderatorrättigheter',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Kan visa profiler, medlemslista och onlinelista', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Kan ändra användarnamn', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Kan ändra lösenord', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Kan ändra e-postadress', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Kan ändra visningsbild', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Kan ändra standardgrupp', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Kan bifoga filer', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Kan ladda ner filer', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Kan spara utkast', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Kan inaktivera ordcensur', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Kan använda signatur', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Kan skicka personliga meddelanden', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Kan skicka PM till flera användare och grupper samtidigt', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Kan läsa personliga meddelanden', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Kan redigera egna personliga meddelanden', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Kan ta bort personliga meddelanden från egen mapp', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Kan vidarebefordra personliga meddelanden', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Kan e-posta personliga meddelanden', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Kan skriva ut personliga meddelanden', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Kan bifoga filer i personliga meddelanden', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Kan ladda ner filer i personliga meddelanden', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Kan använda BBCode i personliga meddelanden', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Kan använda smilies i personliga meddelanden', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Kan infoga bilder i personliga meddelanden', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Kan infoga Flash i personliga meddelanden', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Kan skicka e-post', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Kan skicka snabbmeddelanden', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Kan ignorera gräns för tid mellan inlägg', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Kan dölja onlinestatus', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Kan visa dolda användare', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Kan söka på forumet', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Kan visa kategori', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Kan läsa i kategori', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Kan skapa nya trådar', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Kan svara på trådar', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Kan använda tråd/inläggsikoner', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Kan posta anslag', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Kan posta notiser', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Kan skapa omröstningar', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Kan rösta i omröstningar', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Kan ändra sin röst', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Kan bifoga filer', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Kan ladda ner filer', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Kan använda signaturer', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Kan använda BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Kan använda smilies', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Kan infoga bilder', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Kan infoga Flash', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Kan redigera egna inlägg', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Kan ta bort egna inlägg', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Kan låsa egna trådar', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Kan knuffa upp trådar', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Kan rapportera inlägg', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Kan bevaka kategori', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Kan skriva ut trådar', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Kan e-posta trådar', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Kan söka i kategorin', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Kan ignorera gränsen för tid mellan inlägg', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Ökar inläggsräknaren<br /><em>Observera att detta endast påverkar nya inlägg.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Kan posta utan godkännande', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Kan redigera inlägg', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Kan ta bort inlägg', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Kan godkänna inlägg', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Kan stänga och ta bort rapporter', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Kan byta inläggsförfattare', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Kan flytta trådar', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Kan låsa trådar', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Kan dela trådar', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Kan sammanfoga trådar', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Kan visa inläggsuppgifter', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Kan utfärda varningar<br /><em>Denna inställning tilldelas endast globalt. Den är inte kategoribaserad.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Kan hantera bannlysningar<br /><em>Denna inställning tilldelas endast globalt. Den är inte kategoribaserad.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Kan ändra foruminställningar/kontrollera om det finns uppdateringar', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Kan ändra server/kommunikationsinställningar', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Kan ändra Jabber-inställningar', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Kan visa php-inställningar', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Kan hantera kategorier', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Kan lägga till nya kategorier', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Kan ta bort kategorier', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Kan rensa kategorier', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Kan ändra tråd/inläggsikoner och smilies', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Kan ändra ordcensuren', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Kan definiera BBCode-taggar', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Kan ändra bilagesrelaterade inställningar', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Kan hantera användare<br /><em>Detta inkluderar också visning av användarens webbläsaragent i onlinelistan.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Kan ta bort/rensa användare', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Kan hantera grupper', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Kan lägga till nya grupper', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Kan ta bort grupper', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Kan hantera titlar', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Kan hantera egna profilfält', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Kan hantera otillåtna namn', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Kan hantera bannlysningar', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Kan granska rättigheter', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Kan ändra rättigheter för individuella grupper', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Kan ändra rättigheter för individuella användare', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Kan ändra kategorirättighetsklassen', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Kan ändra moderationsrättighetsklassen', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Kan ändra administratörsrättighetsklassen', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Kan ändra användarrättighetsklassen', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Kan hantera roller', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Kan använda andras rättigheter', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Kan hantera stilar', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Kan visa loggar', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Kan rensa loggar', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Kan hantera moduler', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Kan hantera språkpaket', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Kan skicka massutskick', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Kan hantera robotar', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Kan hantera rapport/avslagsanledningar', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Kan säkerhetskopiera/återställa databasen', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Kan hantera söksystemen och inställningar', 'cat' => 'misc'),
));

?>