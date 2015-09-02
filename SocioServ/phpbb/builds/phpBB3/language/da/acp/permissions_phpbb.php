<?php
/**
* acp_permissions (phpBB Permission Set) [Danish]
*
* @package language
* @version $Id: permissions_phpbb.php,v 1.28 2007/07/19 20:37:52 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translators: Olympus DK Team, working at http://www.phpBB3.dk and http://area51.phpBB3.dk:
*
*		John Hjorth < john-hjorth@john-hjorth.dk > (John Hjorth) http://www.phpBBFM.dk
*		jask < jan@skovsgaard.net > (Jan Skovsgaard) http://skovsgaard.net
*		Jesper Møller < jgom@privat.dk > (Jesper G. O. Møller) http://www.jart.dk/jgom/index.html
*
* Contributors :
*
*		AlleyKat < AlleyKat@phpbb2.dk > (Finn Sørensen) http://www.phpbb2.dk
*		Dr.Diesel < dr.diesel@dream-cathers.dk > (Jes Nielsen) http://www.dream-cathers.dk
*		Jan Christensen < tamrotten@gmail.com > (Jan Christensen) http://janogwickys.dk/phpBB2/index.php
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

/*
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
		'actions'		=> 'Handlinger',
		'content'		=> 'Indhold',
		'forums'		=> 'Fora',
		'misc'			=> 'Diverse',
		'permissions'	=> 'Tilladelser',
		'pm'			=> 'Private beskeder',
		'polls'			=> 'Afstemninger',
		'post'			=> 'Indlæg',
		'post_actions'	=> 'Indlægshandlinger',
		'posting'		=> 'Indlæg',
		'profile'		=> 'Profil',
		'settings'		=> 'Indstillinger',
		'topic_actions'	=> 'Emnehandlinger',
		'user_group'	=> 'Brugere &amp; grupper',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'Brugertilladelser',
		'a_'			=> 'Administratortilladelser',
		'm_'			=> 'Redaktørtilladelser',
		'f_'			=> 'Forumtilladelser',
		'global'                => array(
			'm_'                    => 'Globale redaktørtilladelser',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Kan se profiler, listen med tilmeldte brugere og "Hvem er online"', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Kan ændre brugernavn', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Kan ændre kodeord', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Kan ændre emailadresse', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Kan ændre avatar', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Kan ændre standardbrugergruppe', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Kan vedhæfte filer', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Kan downloade filer', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Kan gemme kladder', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Kan slå ordcensur fra', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Kan bruge signatur', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Kan sende private beskeder', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Kan sende private beskeder til flere brugere og grupper', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Kan læse private beskeder', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Kan redigere egne private beskeder', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Kan fjerne private beskeder fra egen mappe', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Kan videresende private beskeder', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Kan emaile private beskeder', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Kan udskrive private beskeder', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Kan vedhæfte filer i private beskeder', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Kan downloade filer i private beskeder', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Kan bruge BBkode i private beskeder', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Kan bruge smilies i private beskeder', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Kan bruge billeder i private beskeder', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Kan bruge Flash i private beskeder', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Kan sende emails', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Kan sende beskeder ved hjælp af messengere', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Kan ignorere floodbegrænsning', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Kan skjule online status', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Kan se brugere med skjult online status', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Kan søge i alle fora', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Kan se forum', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Kan læse forum', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Kan skrive i forum', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Kan svare på indlæg', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Kan bruge emne- og indlægsikoner', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Kan skrive bekendtgørelser', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Kan skrive opslag', 'cat' => 'post'),
	
	'acl_f_poll'		=> array('lang' => 'Kan oprette afstemninger', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Kan stemme i afstemninger', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Kan ændre afgivet stemme', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Kan vedhæfte filer', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Kan downloade filer', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Kan bruge signaturer', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Kan bruge BBkode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Kan bruge smilies', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Kan bruge billeder', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Kan bruge Flash', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Kan redigere egne indlæg', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Kan slette egne indlæg', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Kan låse egne emner', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Kan placere emner øverst', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Kan rapportere indlæg', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Kan overvåge forum', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Kan udskrive emner', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Kan sende emner pr. email', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Kan søge i forummet', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Kan ignorere floodbegrænsning', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Kan forøge indlægstæller<br /><em>Bemærk venligst at denne indstilling kun får betydning for nye indlæg.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Kan skrive indlæg uden godkendelse', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Kan redigere indlæg', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Kan slette indlæg', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Kan godkende indlæg', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Kan lukke og slette rapporter', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Kan ændre indlægsforfatter', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Kan flytte emner', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Kan låse emner', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Kan opdele emner', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Kan sammenlægge emner', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Kan læse indlægsinformation', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Kan udstede advarsler<br /><em>Tilladelsen er tildelt globalt og kan ikke defineres pr. forum.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'Kan administrere udelukkelser<br /><em>Tilladelsen er tildelt globalt og kan ikke defineres pr. forum.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Kan ændre boardindstillinger/kontrollere om der er opdateringer', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Kan ændre server/forbindelsesindstillinger', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Kan ændre Jabber indstillinger', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Kan se PHP indstillinger', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Kan administrere fora', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Kan tilføje nye fora', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Kan slette fora', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Kan beskære fora', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Kan ændre smilies, emne- og indlægsikoner', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Kan ændre ordcensur', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Kan definere BBkode-tags', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Kan ændre indstillinger vedrørende vedhæftede filer', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Kan administrere brugere<br /><em>Og kan i "Hvem er online" se hvilken browser brugeren anvender.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Kan slette/beskære brugere', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Kan administrere grupper', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Kan tilføje nye grupper', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Kan slette grupper', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Kan administrere rang', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Kan administrere brugerdefinerede profilfelter', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Kan administrere forbudte navne', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Kan administrere udelukkelser', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Kan se tilladelsesmasker', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Kan ændre tilladelser for individuelle grupper', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Kan ændre tilladelser for individuelle brugere', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Kan ændre forum tilladelsesklasser', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Kan ændre redaktør tilladelsesklasser', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Kan ændre administrator tilladelsesklasser', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Kan ændre bruger tilladelsesklasser', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Kan administrere roller', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Kan bruge andres tilladelser', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Kan administrere typografier', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Kan se logs', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Kan rydde logs', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Kan administrere moduler', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Kan administrere sprogpakker', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Kan sende masseemails', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Kan administrere botter', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Kan administrere rapport/afvisningsbegrundelser', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Kan tage backup af database og gendanne denne', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Kan administrere søgemotoren og dennes indstillinger', 'cat' => 'misc'),
));

?>