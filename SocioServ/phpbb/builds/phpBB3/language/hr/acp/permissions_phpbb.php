<?php
/** 
* acp_permissions (phpBB Permission Set) [Croatian]
*
* @package language
* @version $Id: $
* @copyright (c) 2000-2007 phpBB Group 
* @author (c) 2003-2007 Ancica Secan (ancica.sunceko.net)
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

/***************************************************************************
 *   TRANSLATOR
  *   ANČI - START
 *   <NE briši i NE mijenjaj!>
 *   Danas će biti toplo i sunčano.
 *   [Hrvatski]
 *   Prevela s engleskog na hrvatski: Ančica Sečan [Ancica Secan].
 *   Verzija: 1.0.0.
 *   Vrijeme: 22. travnja 2003. godine [utorak].
 *   Verzija: 1.0.1.
 *   Ažurirano za 2.0.5: 19. lipnja 2003. godine [četvrtak].
 *   Verzija: 1.0.2.
 *   Ažurirano za 2.0.11: 30. siječnja 2005. godine [nedjelja].
 *   Verzija: 1.0.3.
 *   Ažurirano za 2.0.12: 24. veljače 2005. godine [četvrtak].
 *   Verzija: 1.0.4.
 *   Ažurirano za 2.0.15: 08. svibnja 2005. godine [nedjelja].
 *   Verzija: 1.0.5.
 *   Ažurirano za 2.0.15: 20. lipnja 2005. godine [ponedjeljak].
 *   Verzija: 1.0.6.
 *   Ažurirano za 2.0.15: 24. lipnja 2005. godine [petak].
 *   Verzija: 1.0.7.
 *   Ažurirano za 2.0.17: 11. rujna 2005. godine [nedjelja].
 *   Verzija: 1.0.8.
 *   Ažurirano za 2.0.17: 05. listopada 2005. godine [srijeda].
 *   Verzija: 1.0.9.
 *   Ažurirano za 2.0.18: 31. listopada 2005. godine [ponedjeljak].
 *   Verzija: 2.0.0.
 *   Ažurirano za 2.0.19: 05. siječnja 2006. godine [četvrtak].
 *   Verzija: 2.0.1.
 *   Ažurirano za 2.0.19: 16. veljače 2006. godine [četvrtak].
  *
 *   Verzija: 3.0.1.
 *   Ažurirano za Olympus: 28. ožujka 2006. godine [ponedjeljak].
 *   Verzija: 3.0.2.
 *   Ažurirano za Olympus: 04. travnja 2006. godine [subota].
 *   Verzija: 3.0.3.
 *   Ažurirano za Olympus: 05. travnja 2006. godine [nedjelja].
 *   Verzija: 3.0.4.
 *   Ažurirano za phpBB3-B2: 15. kolovoza 2006. godine [utorak].
 *   Verzija: 3.0.5.
 *   Ažurirano za phpBB3-B5: 18. veljače 2007. godine [nedjelja].
 *   Verzija: 3.0.6.
 *   Ažurirano za phpBB3-B5: 23. ožujka 2007. godine [petak].
 *   Verzija: 3.0.7.
 *   Ažurirano za phpBB3-B5: 24. ožujka 2007. godine [subota].
 *   Verzija: 3.0.8.
 *   Ažurirano za phpBB3-RC1: 30. svibnja 2007. godine [srijeda].
 *   Verzija: 3.0.9.
 *   Ažurirano za phpBB3-RC1: 05. lipnja 2007. godine [utorak].
 *   Verzija: 3.0.10.
 *   Ažurirano za phpBB3-RC2: 25. lipnja 2007. godine [ponedjeljak].
 *   Verzija: 3.0.11.
 *   Ažurirano za phpBB3-RC3: 09. srpnja 2007. godine [ponedjeljak].
 *   Verzija: 3.0.12.
 *   Ažurirano za phpBB3-RC3: 12. srpnja 2007. godine [četvrtak].
 *   Verzija: 3.0.13.
 *   Ažurirano za phpBB3-RC3: 14. srpnja 2007. godine [subota].
 *   Verzija: 3.0.14.
 *   Ažurirano za phpBB3-RC4: 29. srpnja 2007. godine [nedjelja].
 *   Verzija: 3.0.15.
 *   Ažurirano za phpBB3-RC5: 19. kolovoza 2007. godine [nedjelja].
 *   Verzija: 3.0.16.
 *   Ažurirano za phpBB3-RC5: 25. kolovoza 2007. godine [subota].
 *   Url: http://ancica.sunceko.net.
 *   Danas će biti toplo i sunčano.
 *   [Zadnju] Službenu verziju ovog mog prijevoda možeš skinuti sa www.phpbb.com.
 *   [Zadnju] NeSlužbenu verziju ovog mog prijevoda možeš skinuti sa forum.sunceko.net.
 *   Danas će biti toplo i sunčano.
 *   </NE briši i NE mijenjaj!>
  *   ANČI - END
***************************************************************************/

// Define categories and permission types
$lang = array_merge($lang, array(
'permission_cat'=> array(
'actions'=> 'Radnje',
'content'=> 'Sadržaj',
'forums'=> 'Forumi',
'misc'=> 'Opcije',
'permissions'=> 'Dopuštenja',
'pm'=> 'Privatne poruke',
'polls'=> 'Ankete',
'post'=> 'Postanje',
'post_actions'=> 'Radnje postova',
'posting'=> 'Postanje',
'profile'=> 'Profil',
'settings'=> 'Postavke',
'topic_actions'=> 'Radnje tema',
'user_group'=> 'Korisnici/e &amp; Grupe',
),

// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
'permission_type'=> array(
'u_'=> 'Dopuštenja korisnika/ca',
'a_'=> 'Dopuštenja administratora/ica',
'm_'=> 'Dopuštenja moderatora/ica',
'f_'=> 'Forumska dopuštenja',
'global'=> array(
'm_'=> 'Dopuštenja globalnih moderatora/ica',
),
),
));

// User Permissions
$lang = array_merge($lang, array(
'acl_u_viewprofile'=> array('lang' => 'Može (pre)gleda(va)ti profile, popis Članstva i online listu', 'cat' => 'profile'),
'acl_u_chgname'=> array('lang' => 'Može mijenjati korisničko ime', 'cat' => 'profile'),
'acl_u_chgpasswd'=> array('lang' => 'Može mijenjati zaporku', 'cat' => 'profile'),
'acl_u_chgemail'=> array('lang' => 'Može mijenjati e-mail adresu', 'cat' => 'profile'),
'acl_u_chgavatar'=> array('lang' => 'Može mijenjati avatara', 'cat' => 'profile'),
'acl_u_chggrp'=> array('lang' => 'Može mijenjati zadanu korisničku grupu', 'cat' => 'profile'),

'acl_u_attach'=> array('lang' => 'Može dodavati privitke', 'cat' => 'post'),
'acl_u_download'=> array('lang' => 'Može preuzimati datoteke', 'cat' => 'post'),
'acl_u_savedrafts'=> array('lang' => 'Može spremati skice', 'cat' => 'post'),
'acl_u_chgcensors'=> array('lang' => 'Može onemogućiti cenzuru riječi', 'cat' => 'post'),
'acl_u_sig'=> array('lang' => 'Može koristiti potpis', 'cat' => 'post'),

'acl_u_sendpm'=> array('lang' => 'Može slati privatne poruke', 'cat' => 'pm'),
'acl_u_masspm'=> array('lang' => 'Može slati privatne poruke većem broju korisnika/ca odnosno grupa istovremeno', 'cat' => 'pm'),
'acl_u_readpm'=> array('lang' => 'Može čitati privatne poruke', 'cat' => 'pm'),
'acl_u_pm_edit'=> array('lang' => 'Može uređivati vlastite privatne poruke', 'cat' => 'pm'),
'acl_u_pm_delete'=> array('lang' => 'Može izbrisati privatne poruke iz vlastite mape', 'cat' => 'pm'),
'acl_u_pm_forward'=> array('lang' => 'Može prosljeđivati privatne poruke', 'cat' => 'pm'),
'acl_u_pm_emailpm'=> array('lang' => 'Može slati e-mailom privatne poruke', 'cat' => 'pm'),
'acl_u_pm_printpm'=> array('lang' => 'Može ispisivati privatne poruke', 'cat' => 'pm'),
'acl_u_pm_attach'=> array('lang' => 'Može dodavati privitke privatnim porukama', 'cat' => 'pm'),
'acl_u_pm_download'=> array('lang' => 'Može preuzimati datoteke iz privatnih poruka', 'cat' => 'pm'),
'acl_u_pm_bbcode'=> array('lang' => 'Može postati BBKod(ove) u privatnim porukama', 'cat' => 'pm'),
'acl_u_pm_smilies'=> array('lang' => 'Može postati smajliće u privatnim porukama', 'cat' => 'pm'),
'acl_u_pm_img'=> array('lang' => 'Može postati slike u privatnim porukama', 'cat' => 'pm'),
'acl_u_pm_flash'=> array('lang' => 'Može postati Flash u privatnim porukama', 'cat' => 'pm'),

'acl_u_sendemail'=> array('lang' => 'Može slati e-mailove', 'cat' => 'misc'),
'acl_u_sendim'=> array('lang' => 'Može slati instant poruke', 'cat' => 'misc'),
'acl_u_ignoreflood'=> array('lang' => 'Može ignorirati zadani razmak postanja', 'cat' => 'misc'),
'acl_u_hideonline'=> array('lang' => 'Može sakriti svoj online status', 'cat' => 'misc'),
'acl_u_viewonline'=> array('lang' => 'Može vidjeti skrivene online korisnike/ce', 'cat' => 'misc'),
'acl_u_search'=> array('lang' => 'Može pretraživati forum', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
'acl_f_list'=> array('lang' => 'Može vidjeti forum', 'cat' => 'post'),
'acl_f_read'=> array('lang' => 'Može čitati forum', 'cat' => 'post'),
'acl_f_post'=> array('lang' => 'Može započinjati nove teme', 'cat' => 'post'),
'acl_f_reply'=> array('lang' => 'Može odgovarati na teme', 'cat' => 'post'),
'acl_f_icons'=> array('lang' => 'Može koristiti ikone tema/postova', 'cat' => 'post'),
'acl_f_announce'=> array('lang' => 'Može postati obavijesti', 'cat' => 'post'),
'acl_f_sticky'=> array('lang' => 'Može postati “važno”', 'cat' => 'post'),

'acl_f_poll'=> array('lang' => 'Može kreirati ankete', 'cat' => 'polls'),
'acl_f_vote'=> array('lang' => 'Može glasovati u anketama', 'cat' => 'polls'),
'acl_f_votechg'=> array('lang' => 'Može mijenjati glasovanje [poništiti dani(e) glas(ove) i glasovati za drugu(e) opciju(e)]', 'cat' => 'polls'),

'acl_f_attach'=> array('lang' => 'Može dodavati privitke', 'cat' => 'content'),
'acl_f_download'=> array('lang' => 'Može preuzimati datoteke', 'cat' => 'content'),
'acl_f_sigs'=> array('lang' => 'Može koristiti potpis', 'cat' => 'content'),
'acl_f_bbcode'=> array('lang' => 'Može postati BBKod(ove)', 'cat' => 'content'),
'acl_f_smilies'=> array('lang' => 'Može postati smajliće', 'cat' => 'content'),
'acl_f_img'=> array('lang' => 'Može postati slike', 'cat' => 'content'),
'acl_f_flash'=> array('lang' => 'Može postati Flash', 'cat' => 'content'),

'acl_f_edit'=> array('lang' => 'Može uređivati vlastite postove', 'cat' => 'actions'),
'acl_f_delete'=> array('lang' => 'Može izbrisati vlastite postove', 'cat' => 'actions'),
'acl_f_user_lock'=> array('lang' => 'Može zaključavati vlastite teme', 'cat' => 'actions'),
'acl_f_bump'=> array('lang' => 'Može bumpirati teme', 'cat' => 'actions'),
'acl_f_report'=> array('lang' => 'Može prijavljivati postove', 'cat' => 'actions'),
'acl_f_subscribe'=> array('lang' => 'Može se pretplaćivati na forum(e)', 'cat' => 'actions'),
'acl_f_print'=> array('lang' => 'Može ispisivati teme', 'cat' => 'actions'),
'acl_f_email'=> array('lang' => 'Može slati teme e-mailom', 'cat' => 'actions'),

'acl_f_search'=> array('lang' => 'Može pretraživati forum', 'cat' => 'misc'),
'acl_f_ignoreflood' => array('lang' => 'Može ignorirati zadani razmak postanja', 'cat' => 'misc'),
'acl_f_postcount'=> array('lang' => 'Povećati brojač postova<br /><em>Odnosi se samo na nove postove.</em>', 'cat' => 'misc'),
'acl_f_noapprove'=> array('lang' => 'Može postati bez odobrenja', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
'acl_m_edit'=> array('lang' => 'Može uređivati postove', 'cat' => 'post_actions'),
'acl_m_delete'=> array('lang' => 'Može izbrisati postove', 'cat' => 'post_actions'),
'acl_m_approve'=> array('lang' => 'Može odobravati postove', 'cat' => 'post_actions'),
'acl_m_report'=> array('lang' => 'Može zaključivati i izbrisati prijave', 'cat' => 'post_actions'),
'acl_m_chgposter'=> array('lang' => 'Može promijeniti autora/icu posta', 'cat' => 'post_actions'),

'acl_m_move'=> array('lang' => 'Može premještati teme', 'cat' => 'topic_actions'),
'acl_m_lock'=> array('lang' => 'Može zaključavati teme', 'cat' => 'topic_actions'),
'acl_m_split'=> array('lang' => 'Može dijeliti teme', 'cat' => 'topic_actions'),
'acl_m_merge'=> array('lang' => 'Može spajati teme', 'cat' => 'topic_actions'),

'acl_m_info'=> array('lang' => 'Može (pre)gleda(va)ti detalje posta', 'cat' => 'misc'),
'acl_m_warn'=> array('lang' => 'Može davati upozorenja<br /><em>Ova dopuštenja moguće je postaviti samo globalno, nisu forumski bazirana.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
'acl_m_ban'=> array('lang' => 'Može upravljati isključivanjem<br /><em>Ova dopuštenja moguće je postaviti samo globalno, nisu forumski bazirana.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
'acl_a_board'=> array('lang' => 'Može mijenjati postavke foruma/provjeravati ima li ažuriranja', 'cat' => 'settings'),
'acl_a_server'=> array('lang' => 'Može mijenjati postavke servera/komunikacije', 'cat' => 'settings'),
'acl_a_jabber'=> array('lang' => 'Može mijenjati Jabber postavke', 'cat' => 'settings'),
'acl_a_phpinfo'=> array('lang' => 'Može (pre)gleda(va)ti php postavke', 'cat' => 'settings'),

'acl_a_forum'=> array('lang' => 'Može upravljati forumima', 'cat' => 'forums'),
'acl_a_forumadd'=> array('lang' => 'Može dodavati nove forume', 'cat' => 'forums'),
'acl_a_forumdel'=> array('lang' => 'Može izbrisati forume', 'cat' => 'forums'),
'acl_a_prune'=> array('lang' => 'Može izbrisivati forume', 'cat' => 'forums'),

'acl_a_icons'=> array('lang' => 'Može mijenjati ikone tema/postova i smajliće', 'cat' => 'posting'),
'acl_a_words'=> array('lang' => 'Može upravljati cenzurom riječi', 'cat' => 'posting'),
'acl_a_bbcode'=> array('lang' => 'Može definirati BBKod tagove', 'cat' => 'posting'),
'acl_a_attach'=> array('lang' => 'Može mijenjati postavke vezane uz privitke', 'cat' => 'posting'),

'acl_a_user'=> array('lang' => 'Može upravljati korisnicima/ama<br /><em>Uključuje i prikaz agenta preglednika korisnika/ce na online listi.</em>', 'cat' => 'user_group'),
'acl_a_userdel'=> array('lang' => 'Može izbrisati/izbrisivati korisnike/ce', 'cat' => 'user_group'),
'acl_a_group'=> array('lang' => 'Može upravljati grupama', 'cat' => 'user_group'),
'acl_a_groupadd'=> array('lang' => 'Može dodavati nove grupe', 'cat' => 'user_group'),
'acl_a_groupdel'=> array('lang' => 'Može izbrisati grupe', 'cat' => 'user_group'),
'acl_a_ranks'=> array('lang' => 'Može upravljati statusima', 'cat' => 'user_group'),
'acl_a_profile'=> array('lang' => 'Može upravljati prilagođenim korisničkim poljima', 'cat' => 'user_group'),
'acl_a_names'=> array('lang' => 'Može upravljati nedopuštenim imenima', 'cat' => 'user_group'),
'acl_a_ban'=> array('lang' => 'Može upravljati isključivanjem', 'cat' => 'user_group'),

'acl_a_viewauth'=> array('lang' => 'Može (pre)gleda(va)ti maske dopuštenja', 'cat' => 'permissions'),
'acl_a_authgroups'=> array('lang' => 'Može mijenjati dopuštenja individualnih grupa', 'cat' => 'permissions'),
'acl_a_authusers'=> array('lang' => 'Može mijenjati dopuštenja individualnih korisnika/ca', 'cat' => 'permissions'),
'acl_a_fauth'=> array('lang' => 'Može mijenjati klase forumskih dopuštenja', 'cat' => 'permissions'),
'acl_a_mauth'=> array('lang' => 'Može mijenjati klase dopuštenja moderatora/ica', 'cat' => 'permissions'),
'acl_a_aauth'=> array('lang' => 'Može mijenjati klase dopuštenja administratora/ica', 'cat' => 'permissions'),
'acl_a_uauth'=> array('lang' => 'Može mijenjati klase dopuštenja korisnika/ca', 'cat' => 'permissions'),
'acl_a_roles'=> array('lang' => 'Može upravljati setovima dopuštenja', 'cat' => 'permissions'),
'acl_a_switchperm'=> array('lang' => 'Može koristiti ostala dopuštenja', 'cat' => 'permissions'),

'acl_a_styles'=> array('lang' => 'Može upravljati stilovima', 'cat' => 'misc'),
'acl_a_viewlogs'=> array('lang' => 'Može (pre)gleda(va)ti logove', 'cat' => 'misc'),
'acl_a_clearlogs'=> array('lang' => 'Može izbris(iv)ati logove', 'cat' => 'misc'),
'acl_a_modules'=> array('lang' => 'Može upravljati modulima', 'cat' => 'misc'),
'acl_a_language'=> array('lang' => 'Može upravljati jezičnim paketima', 'cat' => 'misc'),
'acl_a_email'=> array('lang' => 'Može slati skupne e-mailove', 'cat' => 'misc'),
'acl_a_bots'=> array('lang' => 'Može upravljati robotima', 'cat' => 'misc'),
'acl_a_reasons'=> array('lang' => 'Može upravljati prijavama i odbijenicama', 'cat' => 'misc'),
'acl_a_backup'=> array('lang' => 'Može raditi backup/restore baze podataka', 'cat' => 'misc'),
'acl_a_search'=> array('lang' => 'Može upravljati postavkama i backends pretraživanja', 'cat' => 'misc'),
));
?>