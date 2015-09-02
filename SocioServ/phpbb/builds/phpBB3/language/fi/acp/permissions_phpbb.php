<?php
/** 
*
*  acp_permissions (phpBB Permission Set)[Finnish [Fin]]
*
* @package language
* @copyright (c) 2006 phpBB Group 
* @author 2006-11-14 - Lurttinen@phpbbsuomi.com
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
*	You are able to put your permission sets into a seperate file too by
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
		'actions'		=> 'Toimenpiteet',
		'content'		=> 'Sisältö',
		'forums'		=> 'Alueet',
		'misc'			=> 'Sekalaiset',
		'permissions'	=> 'Oikeudet',
		'pm'			=> 'Yksityisviestit',
		'polls'			=> 'Äänestykset',
		'post'			=> 'Viesti',
		'post_actions'	=> 'Viestitoimenpiteet',
		'posting'		=> 'Viestin lähetys',
		'profile'		=> 'Profiili',
		'settings'		=> 'Asetukset',
		'topic_actions'	=> 'Viestiketjun toimenpiteet',
		'user_group'	=> 'Käyttäjät &amp; Ryhmät',
	),

	'permission_type'	=> array(
		'u_'			=> 'Käyttäjän oikeudet',
		'a_'			=> 'Ylläpitäjän oikeudet',
		'm_'			=> 'Valvojan oikeudet',
		'f_'			=> 'Alueen oikeudet',
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'Voi katsoa profiilia', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'Voi vaihtaa käyttäjätunnusta', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'Voi vaihta salasanaa', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'Voi vaihtaa sähköpostiosoitetta', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'Voi vaihtaa avataria', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'Voi vaihtaa oletusryhmäänsä', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'Voi lisätä liitetiedoston', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'Voi ladata tiedostoja', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'Voi tallentaa luonnoksia', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'Voi ohittaa sanasensuroinnin', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'Voi käyttää allekirjoitusta', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'Voi lähettää yksityisviestejä', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'Voi lähettää yksityisviestin usealle käyttäjälle ja käyttäjäryhmälle', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'Voi lukea yksityisviestejä', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'Voi muokata omia yksityisviestejään', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'Voi poistaa yksityisviestejä omasta kansiostaan', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'Voi lähettää yksityisviestejä eteenpäin', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'Voi lähettää yksityisviestin sähköpostilla', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'Voi tulostaa yksityisviestin', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'Voi listätä liitetiedoston yksityisviestiin', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'Voi ladata yksityisviesteissä olevia liitetiedostoja', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'Voi käyttää BBCodea yksityisviesteissä', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'Voi käyttää hymiöitä yksityisviesteissä', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'Voi lisätä kuvia yksityisviestiin', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'Voi lisätä flash tiedoston yksityisviestiin', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'Voi lähettää sähköpostia', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'Voi lähettää pikaviestin', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'Voi ohittaa viestin lähetyksen aikarajan', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'Voi piilottaa paikallaolonsa', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'Voi nähdä kaikki paikallaolijat', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'Voi käyttää Hakutoimintoa', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'Näkee alueen', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'Voi lukea alueen', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'Voi kirjoittaa alueelle', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'Voi kirjoittaa tiedotteen', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'Voi kirjoittaa pysyvän tiedotteen', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'Voi vastata viestiin', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'Voi käyttää viestille/viestiketjulle kuvaketta', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'Voi luoda äänestyksiä', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'Voi äänestää', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'Voi muuttaa antamaansa ääntä', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'Voi lisätä liitetiedoston', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'Voi ladata tiedostoja', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'Voi käyttää allekirjoitusta', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'Voi käyttää BBCodea', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'Voi käyttää hymiöitä', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'Voi lähettää kuvia', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'Voi lähettää Flash tiedostoja', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'Voi muokata viestejään', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'Voi poistaa omia viestejään', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'Voi lukita omat viestiketjunsa', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'Voi tönäistä viestiketjua', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'Voi ilmoittaa viestejä', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'Voi seurata aluetta', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'Voi tulostaa viestiketjuja', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'Voi lähettää viestiketjun sähköpostilla', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'Voi etsiä keskustelualueita', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'Voi ohittaa aikarajat', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'Nosta viesti laskurin lukemaa', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'Voi lähettää viestin ilman hyväksyntää', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'Voi muokata viestejä', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'Voi poistaa viestejä', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'Voi hyväksyä viestejä', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'Voi sulkea ja poistaa ilmoitettuja viestejä', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'Voi muuttaa viestin lähettäjää', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'Voi siirtää viestiketjuja', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'Voi lukita viestiketjuja', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'Voi jakaa viestiketjuja', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'Voi yhdistää viestiketjuja', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'Voi katsoa viestin tietoja', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'Voi antaa varoituksen', 'cat' => 'misc'),
	'acl_m_ban'		=> array('lang' => 'Voi hallita porttikieltoja', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'Voi muuttaa keskustelufoorumin asetuksia', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'Voi muuttaa palvelimen/kommunikoinnin asetuksia', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'Voi muuttaa Jabber asetuksia', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'Voi katsoa PHP asetuksia', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'Voi muokata keskustelualueita', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'Voi lisätä uusia alueita', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'Voi poistaa alueita', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'Voi siivota alueita', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'Voi muuttaa viestien/viestiketjun kuvakkeita ja hymiöitä', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'Voi muokata sanojen sensurointia', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'Voi määritellä BBCode-tageja', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'Voi muuttaa liitetiedostoihin liittyviä asetuksia', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'Voi hallita käyttäjiä', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'Voi poistaa/siivota käyttäjiä', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'Voi hallita ryhmiä', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'Voi lisätä uusia ryhmiä', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'Voi poistaa ryhmiä', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'Voi hallita arvonimeä', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'Voi muokata mukautettuja profiilikenttiä', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => 'Voi hallita kiellettyjä nimiä', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'Voi hallita porttikieltoja', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'Voi katsoa oikeuden maskeja', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'Voi muuttaa alueen oikeuksia', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'Voi muuttaa valvojan asetuksia', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'Voi muuttaa ylläpitäjän asetuksia', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'Voi muuttaa käyttäjän oikeuksia', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'Voi muuttaa käyttäjäryhmän oikeuksia', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'Voi muuttaa käyttäjien oikeuksia', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'Voi hallita rooleja', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'Voi käyttää toisten oikeuksia', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'Voi hallita tyylejä', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'Voi katsoa logitietoja', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'Voi tyhjentää logit', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'Voi hallita moduuleita', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'Voi hallita kielipaketteja', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'Voi lähettää joukkosähköpostia', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'Voi hallita botteja', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'Voi hallita ilmoituksia/hylkäyksen syitä', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'Voi ottaa varmuuskopion tietokannasat', 'cat' => 'misc'),
#	'acl_a_restore'		=> array('lang' => 'Can restore database', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'Voi hallita hakukoneita ja asetuksia', 'cat' => 'misc'),
));

?>