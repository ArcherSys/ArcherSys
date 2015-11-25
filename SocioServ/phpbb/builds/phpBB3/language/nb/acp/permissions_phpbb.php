<?php
/** 
*
* acp_permissions_phpbb.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-08-11 - phpBB.no
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

	'permission_cat'	=> array(
		'actions'	=> 'Handlinger',
		'content'	=> 'Innhold',
		'forums'	=> 'Forumadministrasjon',
		'misc'	=> 'Diverse',
		'permissions'	=> 'Rettigheter',
		'pm'	=> 'Private meldinger',
		'polls'	=> 'Avstemninger',
		'post'	=> 'Innlegg',
		'post_actions'	=> 'Innleggsadministrasjon',
		'posting'	=> 'Posting',
		'profile'	=> 'Profil',
		'settings'	=> 'Innstillinger',
		'topic_actions'	=> 'Emneadministrasjon',
		'user_group'	=> 'Brukere &amp; grupper',
	),


	'permission_type'	=> array(
		'u_'	=> 'Brukerettigheter',
		'a_'	=> 'Administrative rettigheter',
		'm_'	=> 'Moderatorrettigheter',
		'f_'	=> 'Forumrettigheter',
	),


	'acl_u_viewprofile'	=> array(
		'lang'	=> 'Kan se profiler',
		'cat'	=> 'profile',
	),


	'acl_u_chgname'	=> array(
		'lang'	=> 'Kan endre brukernavn',
		'cat'	=> 'profile',
	),


	'acl_u_chgpasswd'	=> array(
		'lang'	=> 'Kan endre passord',
		'cat'	=> 'profile',
	),


	'acl_u_chgemail'	=> array(
		'lang'	=> 'Kan endre e-postadresse',
		'cat'	=> 'profile',
	),


	'acl_u_chgavatar'	=> array(
		'lang'	=> 'Kan endre avatar',
		'cat'	=> 'profile',
	),


	'acl_u_chggrp'	=> array(
		'lang'	=> 'Kan endre sin standardbrukergruppe',
		'cat'	=> 'profile',
	),


	'acl_u_attach'	=> array(
		'lang'	=> 'Kan legge ved filer',
		'cat'	=> 'post',
	),


	'acl_u_download'	=> array(
		'lang'	=> 'Kan laste ned vedlegg',
		'cat'	=> 'post',
	),


	'acl_u_savedrafts'	=> array(
		'lang'	=> 'Kan lagre kladder',
		'cat'	=> 'post',
	),


	'acl_u_chgcensors'	=> array(
		'lang'	=> 'Kan skru av ordsensurering',
		'cat'	=> 'post',
	),


	'acl_u_sig'	=> array(
		'lang'	=> 'Kan bruke signatur',
		'cat'	=> 'post',
	),


	'acl_u_sendpm'	=> array(
		'lang'	=> 'Kan sende private meldinger',
		'cat'	=> 'pm',
	),


	'acl_u_masspm'	=> array(
		'lang'	=> 'Kan sende private meldinger til flere brukere og grupper på en gang',
		'cat'	=> 'pm',
	),


	'acl_u_readpm'	=> array(
		'lang'	=> 'Kan lese sine egne private meldinger',
		'cat'	=> 'pm',
	),


	'acl_u_pm_edit'	=> array(
		'lang'	=> 'Kan endre sine egne private meldinger',
		'cat'	=> 'pm',
	),


	'acl_u_pm_delete'	=> array(
		'lang'	=> 'Kan slette private meldinger fra sine egne mapper',
		'cat'	=> 'pm',
	),


	'acl_u_pm_forward'	=> array(
		'lang'	=> 'Kan videresende private meldinger',
		'cat'	=> 'pm',
	),


	'acl_u_pm_emailpm'	=> array(
		'lang'	=> 'Kan videresende private meldinger med e-post',
		'cat'	=> 'pm',
	),


	'acl_u_pm_printpm'	=> array(
		'lang'	=> 'Kan skrive ut private meldinger',
		'cat'	=> 'pm',
	),


	'acl_u_pm_attach'	=> array(
		'lang'	=> 'Kan legge ved vedlegg i private meldinger',
		'cat'	=> 'pm',
	),


	'acl_u_pm_download'	=> array(
		'lang'	=> 'Kan laste ned vedlegg som er mottatt i private meldinger',
		'cat'	=> 'pm',
	),


	'acl_u_pm_bbcode'	=> array(
		'lang'	=> 'Kan bruke BBKode i private meldinger',
		'cat'	=> 'pm',
	),


	'acl_u_pm_smilies'	=> array(
		'lang'	=> 'Kan bruke smil i private meldinger',
		'cat'	=> 'pm',
	),


	'acl_u_pm_img'	=> array(
		'lang'	=> 'Kan bruke bilder i private meldinger',
		'cat'	=> 'pm',
	),


	'acl_u_pm_flash'	=> array(
		'lang'	=> 'Kan bruke Flash i private meldinger',
		'cat'	=> 'pm',
	),


	'acl_u_sendemail'	=> array(
		'lang'	=> 'Kan sende e-post',
		'cat'	=> 'misc',
	),


	'acl_u_sendim'	=> array(
		'lang'	=> 'Kan sende direktemeldinger (Hurtigmeldinger som Jabber)',
		'cat'	=> 'misc',
	),


	'acl_u_ignoreflood'	=> array(
		'lang'	=> 'Kan ignorere oversvømmelsesgrensen (som forhindrer brukere i å poste oftere enn hvert X sekund)',
		'cat'	=> 'misc',
	),


	'acl_u_hideonline'	=> array(
		'lang'	=> 'Kan skjule sin påloggingsstatus (slik at vanlige brukere ikke ser om brukeren er pålogget eller ei)',
		'cat'	=> 'misc',
	),


	'acl_u_viewonline'	=> array(
		'lang'	=> 'Kan se brukere som har skjult sin påloggingsstatus',
		'cat'	=> 'misc',
	),


	'acl_u_search'	=> array(
		'lang'	=> 'Kan søke i forumet',
		'cat'	=> 'misc',
	),


	'acl_f_list'	=> array(
		'lang'	=> 'Kan se forumet i forumlisten',
		'cat'	=> 'post',
	),


	'acl_f_read'	=> array(
		'lang'	=> 'Kan lese emner',
		'cat'	=> 'post',
	),


	'acl_f_post'	=> array(
		'lang'	=> 'Kan lage nye emner',
		'cat'	=> 'post',
	),


	'acl_f_reply'	=> array(
		'lang'	=> 'Kan svare på emner',
		'cat'	=> 'post',
	),


	'acl_f_icons'	=> array(
		'lang'	=> 'Kan bruke innleggsikoner',
		'cat'	=> 'post',
	),


	'acl_f_announce'	=> array(
		'lang'	=> 'Kan lage annonseringer',
		'cat'	=> 'post',
	),


	'acl_f_sticky'	=> array(
		'lang'	=> 'Kan lage prioriterte emner',
		'cat'	=> 'post',
	),


	'acl_f_poll'	=> array(
		'lang'	=> 'Kan lage avstemninger',
		'cat'	=> 'polls',
	),


	'acl_f_vote'	=> array(
		'lang'	=> 'Kan stemme ved avstemniger',
		'cat'	=> 'polls',
	),


	'acl_f_votechg'	=> array(
		'lang'	=> 'Kan endre avgitt stemme',
		'cat'	=> 'polls',
	),


	'acl_f_attach'	=> array(
		'lang'	=> 'Kan legge ved filer',
		'cat'	=> 'content',
	),


	'acl_f_download'	=> array(
		'lang'	=> 'Kan laste ned vedlegg',
		'cat'	=> 'content',
	),


	'acl_f_sigs'	=> array(
		'lang'	=> 'Kan bruke signaturer',
		'cat'	=> 'content',
	),


	'acl_f_bbcode'	=> array(
		'lang'	=> 'Kan bruke BBKode',
		'cat'	=> 'content',
	),


	'acl_f_smilies'	=> array(
		'lang'	=> 'Kan bruke smil',
		'cat'	=> 'content',
	),


	'acl_f_img'	=> array(
		'lang'	=> 'Kan sette inn bilder (ved bruk av IMG-taggen)',
		'cat'	=> 'content',
	),


	'acl_f_flash'	=> array(
		'lang'	=> 'Kan sette inn flash (ved bruk av flash-taggen)',
		'cat'	=> 'content',
	),


	'acl_f_edit'	=> array(
		'lang'	=> 'Kan redigere sine egne innlegg',
		'cat'	=> 'actions',
	),


	'acl_f_delete'	=> array(
		'lang'	=> 'Kan slette sine egne innlegg',
		'cat'	=> 'actions',
	),


	'acl_f_user_lock'	=> array(
		'lang'	=> 'Kan låse sine egne innlegg',
		'cat'	=> 'actions',
	),


	'acl_f_bump'	=> array(
		'lang'	=> 'Kan skyve emner til toppen av emnelisten ("bumpe" emner)',
		'cat'	=> 'actions',
	),


	'acl_f_report'	=> array(
		'lang'	=> 'Kan rapportere innlegg',
		'cat'	=> 'actions',
	),


	'acl_f_subscribe'	=> array(
		'lang'	=> 'Kan abonnere på forumet',
		'cat'	=> 'actions',
	),


	'acl_f_print'	=> array(
		'lang'	=> 'Kan skrive ut emner',
		'cat'	=> 'actions',
	),


	'acl_f_email'	=> array(
		'lang'	=> 'Kan sende emner via e-post',
		'cat'	=> 'actions',
	),


	'acl_f_search'	=> array(
		'lang'	=> 'Kan søke i forumet',
		'cat'	=> 'misc',
	),


	'acl_f_ignoreflood'	=> array(
		'lang'	=> 'Kan ignorere oversvømmelsesgrensen (som forhindrer brukere i å poste oftere enn hvert X sekund)',
		'cat'	=> 'misc',
	),


	'acl_f_postcount'	=> array(
		'lang'	=> 'Innlegg i dette forumet teller på innleggsstelleren<br /><em>Gjelder kun innlegg postet etter at valget er aktivert.</em>',
		'cat'	=> 'misc',
	),


	'acl_f_noapprove'	=> array(
		'lang'	=> 'Kan lage nye innlegg uten godkjenning',
		'cat'	=> 'misc',
	),


	'acl_m_edit'	=> array(
		'lang'	=> 'Kan redigere innlegg',
		'cat'	=> 'post_actions',
	),


	'acl_m_delete'	=> array(
		'lang'	=> 'Kan slette innlegg',
		'cat'	=> 'post_actions',
	),


	'acl_m_approve'	=> array(
		'lang'	=> 'Kan godkjenne innlegg',
		'cat'	=> 'post_actions',
	),


	'acl_m_report'	=> array(
		'lang'	=> 'Kan lukke og slette rapporter',
		'cat'	=> 'post_actions',
	),


	'acl_m_chgposter'	=> array(
		'lang'	=> 'Kan forandre forfatteren av innlegg',
		'cat'	=> 'post_actions',
	),


	'acl_m_move'	=> array(
		'lang'	=> 'Kan flytte emner',
		'cat'	=> 'topic_actions',
	),


	'acl_m_lock'	=> array(
		'lang'	=> 'Kan låse emner',
		'cat'	=> 'topic_actions',
	),


	'acl_m_split'	=> array(
		'lang'	=> 'Kan splitte emner',
		'cat'	=> 'topic_actions',
	),


	'acl_m_merge'	=> array(
		'lang'	=> 'Kan slå sammen emner',
		'cat'	=> 'topic_actions',
	),


	'acl_m_info'	=> array(
		'lang'	=> 'Kan se innleggsdetaljer',
		'cat'	=> 'misc',
	),


	'acl_m_warn'	=> array(
		'lang'	=> 'Kan gi advarsler',
		'cat'	=> 'misc',
	),


	'acl_m_ban'	=> array(
		'lang'	=> 'Kan administrere utestengelser',
		'cat'	=> 'misc',
	),


	'acl_a_board'	=> array(
		'lang'	=> 'Kan endre innstillinger som gjelder hele forumet og sjekke om det har kommet oppdateringer av phpBB',
		'cat'	=> 'settings',
	),


	'acl_a_server'	=> array(
		'lang'	=> 'Kan endre server- og kommunikasjonsinnstillinger',
		'cat'	=> 'settings',
	),


	'acl_a_jabber'	=> array(
		'lang'	=> 'Kan endre Jabber-innstillinger',
		'cat'	=> 'settings',
	),


	'acl_a_phpinfo'	=> array(
		'lang'	=> 'Kan se på PHP-informasjonen [phpinfo()]',
		'cat'	=> 'settings',
	),


	'acl_a_forum'	=> array(
		'lang'	=> 'Kan administrere forumopsettet',
		'cat'	=> 'forums',
	),


	'acl_a_forumadd'	=> array(
		'lang'	=> 'Kan legge til nye forum',
		'cat'	=> 'forums',
	),


	'acl_a_forumdel'	=> array(
		'lang'	=> 'Kan slette forum',
		'cat'	=> 'forums',
	),


	'acl_a_prune'	=> array(
		'lang'	=> 'Kan slette gamle innlegg i forum',
		'cat'	=> 'forums',
	),


	'acl_a_icons'	=> array(
		'lang'	=> 'Kan endre innleggsikoner og smil',
		'cat'	=> 'posting',
	),


	'acl_a_words'	=> array(
		'lang'	=> 'Kan endre på ordsensureringer',
		'cat'	=> 'posting',
	),


	'acl_a_bbcode'	=> array(
		'lang'	=> 'Kan lage og endre egendefinerte BBkoder',
		'cat'	=> 'posting',
	),


	'acl_a_attach'	=> array(
		'lang'	=> 'Kan endre vedleggsinnstillinger',
		'cat'	=> 'posting',
	),


	'acl_a_user'	=> array(
		'lang'	=> 'Kan administrere brukere',
		'cat'	=> 'user_group',
	),


	'acl_a_userdel'	=> array(
		'lang'	=> 'Kan slette brukere',
		'cat'	=> 'user_group',
	),


	'acl_a_group'	=> array(
		'lang'	=> 'Kan administrere grupper',
		'cat'	=> 'user_group',
	),


	'acl_a_groupadd'	=> array(
		'lang'	=> 'Kan legge til nye grupper',
		'cat'	=> 'user_group',
	),


	'acl_a_groupdel'	=> array(
		'lang'	=> 'Kan slette grupper',
		'cat'	=> 'user_group',
	),


	'acl_a_ranks'	=> array(
		'lang'	=> 'Kan administrere rangeringer',
		'cat'	=> 'user_group',
	),


	'acl_a_profile'	=> array(
		'lang'	=> 'Kan administrere forumets egendefinerte profilfelter',
		'cat'	=> 'user_group',
	),


	'acl_a_names'	=> array(
		'lang'	=> 'Kan administrere forbudte brukernavn',
		'cat'	=> 'user_group',
	),


	'acl_a_ban'	=> array(
		'lang'	=> 'Kan administrere utestengelser',
		'cat'	=> 'user_group',
	),


	'acl_a_viewauth'	=> array(
		'lang'	=> 'Kan se på effektive rettigheter',
		'cat'	=> 'permissions',
	),


	'acl_a_authgroups'	=> array(
		'lang'	=> 'Kan endre rettigheter for individuelle grupper',
		'cat'	=> 'permissions',
	),


	'acl_a_authusers'	=> array(
		'lang'	=> 'Kan endre rettigheter for individuelle brukere',
		'cat'	=> 'permissions',
	),


	'acl_a_fauth'	=> array(
		'lang'	=> 'Kan endre forumrettigheter',
		'cat'	=> 'permissions',
	),


	'acl_a_mauth'	=> array(
		'lang'	=> 'Kan endre moderatorrettigheter',
		'cat'	=> 'permissions',
	),


	'acl_a_aauth'	=> array(
		'lang'	=> 'Kan endre administrative rettigheter',
		'cat'	=> 'permissions',
	),


	'acl_a_uauth'	=> array(
		'lang'	=> 'Kan endre brukerbaserte rettigheter',
		'cat'	=> 'permissions',
	),


	'acl_a_roles'	=> array(
		'lang'	=> 'Kan administrere roller',
		'cat'	=> 'permissions',
	),


	'acl_a_switchperm'	=> array(
		'lang'	=> 'Kan teste ut andre brukeres rettigheter',
		'cat'	=> 'permissions',
	),


	'acl_a_styles'	=> array(
		'lang'	=> 'Kan administrere forumdesign',
		'cat'	=> 'misc',
	),


	'acl_a_viewlogs'	=> array(
		'lang'	=> 'Kan vise logger',
		'cat'	=> 'misc',
	),


	'acl_a_clearlogs'	=> array(
		'lang'	=> 'Kan slette logger',
		'cat'	=> 'misc',
	),


	'acl_a_modules'	=> array(
		'lang'	=> 'Kan administrere moduler',
		'cat'	=> 'misc',
	),


	'acl_a_language'	=> array(
		'lang'	=> 'Kan administrere språkpakkene',
		'cat'	=> 'misc',
	),


	'acl_a_email'	=> array(
		'lang'	=> 'Kan sende e-poster til enkeltgrupper/alle brukere via administrasjonspanelet',
		'cat'	=> 'misc',
	),


	'acl_a_bots'	=> array(
		'lang'	=> 'Kan administrere søkeroboter',
		'cat'	=> 'misc',
	),


	'acl_a_reasons'	=> array(
		'lang'	=> 'Kan administrere avslagsbegrunnelser for rapporter og forespørsler om innleggsgodkjennelse',
		'cat'	=> 'misc',
	),


	'acl_a_backup'	=> array(
		'lang'	=> 'Kan opprette og legge inn sikkerhetskopier',
		'cat'	=> 'misc',
	),


	'acl_a_search'	=> array(
		'lang'	=> 'Kan administrere søkesystemet og innstillingene',
		'cat'	=> 'misc',
	),

));

?>