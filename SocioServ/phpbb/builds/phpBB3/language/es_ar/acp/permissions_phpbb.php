<?php
/** 
*
* acp_permissions_phpbb.php [Spanish [es_AR]]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-07-31 - Larveando Team (team@larveando.com.ar)
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
//
// TRANSLATORS NOTE FOR ES_AR LANGUAGE (by Larveando Team)
// There are some translation issues were taken having in mind a better user navigation experience. I.e:
// 'You' was translated as a coloquial 'Vos' instead a more serious 'Su'. Idem 'Your'. In general, a coloquial style was adopted.
// The board speaks in first person. 'Avatar could not be uploaded' was translated as 'No puedo subir el avatar', instead 'No se puede subir el avatar'
// Some common used expressions like Topic, Post (as context used), Ban, Cookies, FAQ, OnLine, Home, Login (as context used), logs etc 
// where _not_ translated in lack of a better common word to use.
// Board was translated 'Sitio' (Site) with uppercase in alussion to the entire system in lack of a better common word to use.
//

$lang = array_merge($lang, array(

	'permission_cat'	=> array(
		'actions'	=> 'Acciones',
		'content'	=> 'Contenido',
		'forums'	=> 'Foros',
		'misc'	=> 'Varios',
		'permissions'	=> 'Permisos',
		'pm'	=> 'Mensajes privados',
		'polls'	=> 'Encuestas',
		'post'	=> 'Post',
		'post_actions'	=> 'Acciones en post',
		'posting'	=> 'Envío',
		'profile'	=> 'Perfil',
		'settings'	=> 'Parámetros',
		'topic_actions'	=> 'Acciones en topics',
		'user_group'	=> 'Usuarios &amp; Grupos',
	),


	'permission_type'	=> array(
		'u_'	=> 'Permisos de usuario',
		'a_'	=> 'Permisos de Admin',
		'm_'	=> 'Permisos de moderador',
		'f_'	=> 'Permisos de Foro',
	),


	'acl_u_viewprofile'	=> array(
		'lang'	=> 'Puede ver perfiles',
		'cat'	=> 'profile',
	),


	'acl_u_chgname'	=> array(
		'lang'	=> 'Puede cambiar nombre de usuario',
		'cat'	=> 'profile',
	),


	'acl_u_chgpasswd'	=> array(
		'lang'	=> 'Puede cambiar clave',
		'cat'	=> 'profile',
	),


	'acl_u_chgemail'	=> array(
		'lang'	=> 'Puede cambiar email',
		'cat'	=> 'profile',
	),


	'acl_u_chgavatar'	=> array(
		'lang'	=> 'Puede cambiar  avatar',
		'cat'	=> 'profile',
	),


	'acl_u_chggrp'	=> array(
		'lang'	=> 'Puede cambiar grupo de usuarios por omisión',
		'cat'	=> 'profile',
	),


	'acl_u_attach'	=> array(
		'lang'	=> 'Puede adjuntar archivos',
		'cat'	=> 'post',
	),


	'acl_u_download'	=> array(
		'lang'	=> 'Puede descargar archivos',
		'cat'	=> 'post',
	),


	'acl_u_savedrafts'	=> array(
		'lang'	=> 'Puede guardar borradores',
		'cat'	=> 'post',
	),


	'acl_u_chgcensors'	=> array(
		'lang'	=> 'Puede deshabilitar censura',
		'cat'	=> 'post',
	),


	'acl_u_sig'	=> array(
		'lang'	=> 'Puede usar firma',
		'cat'	=> 'post',
	),


	'acl_u_sendpm'	=> array(
		'lang'	=> 'Puede enviar mensajes privados',
		'cat'	=> 'pm',
	),


	'acl_u_masspm'	=> array(
		'lang'	=> 'Puede enviar mp a múltiples usuarios y grupos',
		'cat'	=> 'pm',
	),


	'acl_u_readpm'	=> array(
		'lang'	=> 'Puede leer mensajes privados',
		'cat'	=> 'pm',
	),


	'acl_u_pm_edit'	=> array(
		'lang'	=> 'Puede editar sus mensajes privados',
		'cat'	=> 'pm',
	),


	'acl_u_pm_delete'	=> array(
		'lang'	=> 'Puede borrar mensajes privados de su carpeta',
		'cat'	=> 'pm',
	),


	'acl_u_pm_forward'	=> array(
		'lang'	=> 'Puede reenviar mensajes privados',
		'cat'	=> 'pm',
	),


	'acl_u_pm_emailpm'	=> array(
		'lang'	=> 'Puede enviar mp por email',
		'cat'	=> 'pm',
	),


	'acl_u_pm_printpm'	=> array(
		'lang'	=> 'Puede imprimir mensajes privados',
		'cat'	=> 'pm',
	),


	'acl_u_pm_attach'	=> array(
		'lang'	=> 'Puede adjuntar archivos en mensajes privados',
		'cat'	=> 'pm',
	),


	'acl_u_pm_download'	=> array(
		'lang'	=> 'Puede descargar archivos en mensajes privados',
		'cat'	=> 'pm',
	),


	'acl_u_pm_bbcode'	=> array(
		'lang'	=> 'Puede usar BBCode en mensajes privados',
		'cat'	=> 'pm',
	),


	'acl_u_pm_smilies'	=> array(
		'lang'	=> 'Puede usar caritas en mensajes privados',
		'cat'	=> 'pm',
	),


	'acl_u_pm_img'	=> array(
		'lang'	=> 'Puede usar imágenes en mensajes privados',
		'cat'	=> 'pm',
	),


	'acl_u_pm_flash'	=> array(
		'lang'	=> 'Puede usar Flash en mensajes privados',
		'cat'	=> 'pm',
	),


	'acl_u_sendemail'	=> array(
		'lang'	=> 'Puede enviar emails',
		'cat'	=> 'misc',
	),


	'acl_u_sendim'	=> array(
		'lang'	=> 'Puede enviar mensajes instantáneos',
		'cat'	=> 'misc',
	),


	'acl_u_ignoreflood'	=> array(
		'lang'	=> 'Puede ignorar límite de saturación',
		'cat'	=> 'misc',
	),


	'acl_u_hideonline'	=> array(
		'lang'	=> 'Puede ocultar estado online',
		'cat'	=> 'misc',
	),


	'acl_u_viewonline'	=> array(
		'lang'	=> 'Puede ver conectados',
		'cat'	=> 'misc',
	),


	'acl_u_search'	=> array(
		'lang'	=> 'Puede hacer búsquedas',
		'cat'	=> 'misc',
	),


	'acl_f_list'	=> array(
		'lang'	=> 'Puede ver foros',
		'cat'	=> 'post',
	),


	'acl_f_read'	=> array(
		'lang'	=> 'Puede leer foros',
		'cat'	=> 'post',
	),


	'acl_f_post'	=> array(
		'lang'	=> 'Puede iniciar nuevos topics',
		'cat'	=> 'post',
	),


	'acl_f_reply'	=> array(
		'lang'	=> 'Puede responder topics',
		'cat'	=> 'post',
	),


	'acl_f_icons'	=> array(
		'lang'	=> 'Puede usar íconos en topics/posts',
		'cat'	=> 'post',
	),


	'acl_f_announce'	=> array(
		'lang'	=> 'Puede postear anuncios',
		'cat'	=> 'post',
	),


	'acl_f_sticky'	=> array(
		'lang'	=> 'Puede postear fijos',
		'cat'	=> 'post',
	),


	'acl_f_poll'	=> array(
		'lang'	=> 'Puede hacer encuestas',
		'cat'	=> 'polls',
	),


	'acl_f_vote'	=> array(
		'lang'	=> 'Puede votar en encuestas',
		'cat'	=> 'polls',
	),


	'acl_f_votechg'	=> array(
		'lang'	=> 'Puede cambiar una encuesta existente',
		'cat'	=> 'polls',
	),


	'acl_f_attach'	=> array(
		'lang'	=> 'Puede adjuntar archivos',
		'cat'	=> 'content',
	),


	'acl_f_download'	=> array(
		'lang'	=> 'Puede descargar archivos',
		'cat'	=> 'content',
	),


	'acl_f_sigs'	=> array(
		'lang'	=> 'Puede usar firmas',
		'cat'	=> 'content',
	),


	'acl_f_bbcode'	=> array(
		'lang'	=> 'Puede usar BBCode',
		'cat'	=> 'content',
	),


	'acl_f_smilies'	=> array(
		'lang'	=> 'Puede usar caritas',
		'cat'	=> 'content',
	),


	'acl_f_img'	=> array(
		'lang'	=> 'Puede enviar imágenes',
		'cat'	=> 'content',
	),


	'acl_f_flash'	=> array(
		'lang'	=> 'Puede usar Flash',
		'cat'	=> 'content',
	),


	'acl_f_edit'	=> array(
		'lang'	=> 'Puede editar sus posts',
		'cat'	=> 'actions',
	),


	'acl_f_delete'	=> array(
		'lang'	=> 'Puede borrar sus posts',
		'cat'	=> 'actions',
	),


	'acl_f_user_lock'	=> array(
		'lang'	=> 'Puede bloquear sus posts',
		'cat'	=> 'actions',
	),


	'acl_f_bump'	=> array(
		'lang'	=> 'Puede activar topics',
		'cat'	=> 'actions',
	),


	'acl_f_report'	=> array(
		'lang'	=> 'Puede reportar posts',
		'cat'	=> 'actions',
	),


	'acl_f_subscribe'	=> array(
		'lang'	=> 'Puede suscribir a foros',
		'cat'	=> 'actions',
	),


	'acl_f_print'	=> array(
		'lang'	=> 'Puede imprimir topics',
		'cat'	=> 'actions',
	),


	'acl_f_email'	=> array(
		'lang'	=> 'Puede enviar topics por email',
		'cat'	=> 'actions',
	),


	'acl_f_search'	=> array(
		'lang'	=> 'Puede buscar en foros',
		'cat'	=> 'misc',
	),


	'acl_f_ignoreflood'	=> array(
		'lang'	=> 'Puede ignorar límite de saturación',
		'cat'	=> 'misc',
	),


	'acl_f_postcount'	=> array(
		'lang'	=> 'Incrementar cuenta de post<br /><em>Por favor notá que este pàrámetro sólo afecta posts nuevos.</em>',
		'cat'	=> 'misc',
	),


	'acl_f_noapprove'	=> array(
		'lang'	=> 'Puede postear sin aprobación',
		'cat'	=> 'misc',
	),


	'acl_m_edit'	=> array(
		'lang'	=> 'Puede editar posts',
		'cat'	=> 'post_actions',
	),


	'acl_m_delete'	=> array(
		'lang'	=> 'Puede borrar posts',
		'cat'	=> 'post_actions',
	),


	'acl_m_approve'	=> array(
		'lang'	=> 'Puede aprobar posts',
		'cat'	=> 'post_actions',
	),


	'acl_m_report'	=> array(
		'lang'	=> 'Puede cerrar y borrar reportes',
		'cat'	=> 'post_actions',
	),


	'acl_m_chgposter'	=> array(
		'lang'	=> 'Puede cambiar autor en posts',
		'cat'	=> 'post_actions',
	),


	'acl_m_move'	=> array(
		'lang'	=> 'Puede mover topics',
		'cat'	=> 'topic_actions',
	),


	'acl_m_lock'	=> array(
		'lang'	=> 'Puede bloquear topics',
		'cat'	=> 'topic_actions',
	),


	'acl_m_split'	=> array(
		'lang'	=> 'Puede dividir topics',
		'cat'	=> 'topic_actions',
	),


	'acl_m_merge'	=> array(
		'lang'	=> 'Puede unir topics',
		'cat'	=> 'topic_actions',
	),


	'acl_m_info'	=> array(
		'lang'	=> 'Puede ver detalles de post',
		'cat'	=> 'misc',
	),


	'acl_m_warn'	=> array(
		'lang'	=> 'Puede hacer advertencia',
		'cat'	=> 'misc',
	),


	'acl_m_ban'	=> array(
		'lang'	=> 'Puede administrar exclusiones',
		'cat'	=> 'misc',
	),


	'acl_a_board'	=> array(
		'lang'	=> 'Puede alterar parámetros de sitio/verificar actualizaciones',
		'cat'	=> 'settings',
	),


	'acl_a_server'	=> array(
		'lang'	=> 'Puede alterar parámetros de servidor/comunicación',
		'cat'	=> 'settings',
	),


	'acl_a_jabber'	=> array(
		'lang'	=> 'Puede alterar parámetros Jabber',
		'cat'	=> 'settings',
	),


	'acl_a_phpinfo'	=> array(
		'lang'	=> 'Puede ver parámetros de PHP',
		'cat'	=> 'settings',
	),


	'acl_a_forum'	=> array(
		'lang'	=> 'Puede administrar foros',
		'cat'	=> 'forums',
	),


	'acl_a_forumadd'	=> array(
		'lang'	=> 'Puede agregar nuevos foros',
		'cat'	=> 'forums',
	),


	'acl_a_forumdel'	=> array(
		'lang'	=> 'Puede borrar foros',
		'cat'	=> 'forums',
	),


	'acl_a_prune'	=> array(
		'lang'	=> 'Puede podar foros',
		'cat'	=> 'forums',
	),


	'acl_a_icons'	=> array(
		'lang'	=> 'Puede alterar íconos de topics/posts y caritas',
		'cat'	=> 'posting',
	),


	'acl_a_words'	=> array(
		'lang'	=> 'Puede alterar palabras censuradas',
		'cat'	=> 'posting',
	),


	'acl_a_bbcode'	=> array(
		'lang'	=> 'Puede definir código BBCode',
		'cat'	=> 'posting',
	),


	'acl_a_attach'	=> array(
		'lang'	=> 'Puede alterar parámetros relativos a adjuntos',
		'cat'	=> 'posting',
	),


	'acl_a_user'	=> array(
		'lang'	=> 'Puede administrar usuarios',
		'cat'	=> 'user_group',
	),


	'acl_a_userdel'	=> array(
		'lang'	=> 'Puede borrar/podar usuarios',
		'cat'	=> 'user_group',
	),


	'acl_a_group'	=> array(
		'lang'	=> 'Puede administrar grupos',
		'cat'	=> 'user_group',
	),


	'acl_a_groupadd'	=> array(
		'lang'	=> 'Puede agregar nuevos grupos',
		'cat'	=> 'user_group',
	),


	'acl_a_groupdel'	=> array(
		'lang'	=> 'Puede borrar grupos',
		'cat'	=> 'user_group',
	),


	'acl_a_ranks'	=> array(
		'lang'	=> 'Puede manejar rangos',
		'cat'	=> 'user_group',
	),


	'acl_a_profile'	=> array(
		'lang'	=> 'Puede administrar campos de perfil personalizados',
		'cat'	=> 'user_group',
	),


	'acl_a_names'	=> array(
		'lang'	=> 'Puede administrar nombres deshabilitados',
		'cat'	=> 'user_group',
	),


	'acl_a_ban'	=> array(
		'lang'	=> 'Puede administrar exclusiones',
		'cat'	=> 'user_group',
	),


	'acl_a_viewauth'	=> array(
		'lang'	=> 'Puede ver máscaras de permisos',
		'cat'	=> 'permissions',
	),


	'acl_a_authgroups'	=> array(
		'lang'	=> 'Puede alterar permisos para grupos individuales',
		'cat'	=> 'permissions',
	),


	'acl_a_authusers'	=> array(
		'lang'	=> 'Puede alterar permisos para usuarios individuales',
		'cat'	=> 'permissions',
	),


	'acl_a_fauth'	=> array(
		'lang'	=> 'Puede alterar tipos de permisos de foros',
		'cat'	=> 'permissions',
	),


	'acl_a_mauth'	=> array(
		'lang'	=> 'Puede alterar tipos de permisos de moderadores',
		'cat'	=> 'permissions',
	),


	'acl_a_aauth'	=> array(
		'lang'	=> 'Puede alterar tipos de permisos de Admin',
		'cat'	=> 'permissions',
	),


	'acl_a_uauth'	=> array(
		'lang'	=> 'Puede alterar tipos de permisos de usuario',
		'cat'	=> 'permissions',
	),


	'acl_a_roles'	=> array(
		'lang'	=> 'Puede administrar roles',
		'cat'	=> 'permissions',
	),


	'acl_a_switchperm'	=> array(
		'lang'	=> 'Puede usar otros permisos',
		'cat'	=> 'permissions',
	),


	'acl_a_styles'	=> array(
		'lang'	=> 'Puede administrar estilos',
		'cat'	=> 'misc',
	),


	'acl_a_views'	=> array(
		'lang'	=> 'Puede ver registros',
		'cat'	=> 'misc',
	),


	'acl_a_clearlogs'	=> array(
		'lang'	=> 'Puede limpiar registros',
		'cat'	=> 'misc',
	),

	'acl_a_viewlogs'	=> array(
		'lang'	=> 'Puede ver registros',
		'cat'	=> 'misc',
	),

	'acl_a_modules'	=> array(
		'lang'	=> 'Puede administrar módulos',
		'cat'	=> 'misc',
	),


	'acl_a_language'	=> array(
		'lang'	=> 'Puede administrar paquetes de idioma',
		'cat'	=> 'misc',
	),


	'acl_a_email'	=> array(
		'lang'	=> 'Puede enviar emails masivos',
		'cat'	=> 'misc',
	),


	'acl_a_bots'	=> array(
		'lang'	=> 'Puede administrar bots',
		'cat'	=> 'misc',
	),


	'acl_a_reasons'	=> array(
		'lang'	=> 'Puede administrar motivos de reporte/negación',
		'cat'	=> 'misc',
	),


	'acl_a_backup'	=> array(
		'lang'	=> 'Puede resguardar-restaurar base de datos',
		'cat'	=> 'misc',
	),


	'acl_a_search'	=> array(
		'lang'	=> 'Puede administrar motores de búsqueda y parámetros',
		'cat'	=> 'misc',
	),

));

?>