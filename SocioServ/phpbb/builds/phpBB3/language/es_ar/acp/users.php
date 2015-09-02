<?php
/** 
*
* acp_users.php [Spanish [es_AR]]
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
	'ADMIN_SIG_PREVIEW'	=> 'Vista previa de la firma',
	'AT_LEAST_ONE_FOUNDER'	=> 'No podés cambiar este Fundador en usuario normal. Tiene que haber al menos un Fundador para el Sitio. Si querés cambiar el rango de Fundador de este usuario, promové primero a otro usuario.',
	'BAN_SUCCESSFUL'	=> 'Ban ingresado exitosamente.',
	'CANNOT_BAN_FOUNDER'	=> 'No tenés permitido excluir Fundadores.',
	'CANNOT_BAN_YOURSELF'	=> 'No podés excluirte vos mismo.',
	'CANNOT_DEACTIVATE_BOT'	=> 'No tenés permitido desactivar cuentas de robots. Por favor, en su lugar desactivalo.',
	'CANNOT_DEACTIVATE_FOUNDER'	=> 'No tenés permitido desactivar cuentas de Fundadores.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'No podés desactivar tu propia cuenta.',
	'CANNOT_FORCE_REACT_BOT'	=> 'No tenés permitido forzar reactivación de cuentas de bot. Por favor desactivá al robot.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'No tenés permitido forzar reactivación de cuentas de Fundadores.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'No podés forzar la reactivación de tu propia cuenta.',
	'CANNOT_REMOVE_ANONYMOUS'	=> 'No tenés permitido la cuenta de Invitado.',
	'CANNOT_REMOVE_YOURSELF'	=> 'No podés borrar tu propia cuenta.',
	'CANNOT_SET_FOUNDER_BOT'	=> 'No tenés permitido promover robots a Fundador.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Necesitas activar al usuario antes de promoverlo a Fundador, sólo se pueden promover usuarios ya activados.',
	'CONFIRM_EMAIL_EXPLAIN'	=> 'Sólo necesitás completar este parámetro si estás por cambiar la dirección de email del usuario.',
	'DELETE_POSTS'	=> 'Borrar posts',
	'DELETE_USER'	=> 'Borrar usuario',
	'DELETE_USER_EXPLAIN'	=> 'Por favor notá que borrar un usuario es definitivo, no puede ser recuperado',
	'FORCE_REACTIVATION_SUCCESS'	=> 'Reactivación forzada exitosamente.',
	'FOUNDER'	=> 'Fundador',
	'FOUNDER_EXPLAIN'	=> 'Los Fundadores tienen todos los permisos administrativos y nunca pueden ser excluidos, borrados o alterados por miembros que no lo sean.',
	'GROUP_APPROVE'	=> 'Aprobar miembros',
	'GROUP_DEFAULT'	=> 'Definir grupo por omisión para el usuario',
	'GROUP_DELETE'	=> 'Borrar miembro del Grupo',
	'GROUP_DEMOTE'	=> 'Deponer responsable de Grupo',
	'GROUP_PROMOTE'	=> 'Promover a responsable de Grupo',
	'IP_WHOIS_FOR'	=> 'IP whois para %1$s',
	'LAST_ACTIVE'	=> 'Ultimo activo',
	'MOVE_POSTS_EXPLAIN'	=> 'Por favor seleccioná el Foro al cual querés mover todos los posts que haya hecho este usuario.',
	'NO_SPECIAL_RANK'	=> 'No hay designado rango especial',
	'NOT_MANAGE_FOUNDER'	=> 'Tratás de modificar un usuario que es Fundador. Sólo los Fundadores pueden modificar otros fundadores.',
	'QUICK_TOOLS'	=> 'Herramientas rápidas',
	'REGISTERED'	=> 'Registrado',
	'REGISTERED_IP'	=> 'Registrado desde IP',
	'RETAIN_POSTS'	=> 'Retener posts',
	'SELECT_FORM'	=> 'Seleccionar Foro',
	'SELECT_USER'	=> 'Seleccionar usuario',
	'USER_ADMIN'	=> 'Administración de usuarios',
	'USER_ADMIN_ACTIVATE'	=> 'Activar cuenta',
	'USER_ADMIN_ACTIVATED'	=> 'Usuario activado exitosamente.',
	'USER_ADMIN_AVATAR_REMOVED'	=> 'Avatar de usuario removido exitosamente.',
	'USER_ADMIN_BAN_EMAIL'	=> 'Excluir email',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Dirección de email excluida via Administración',
	'USER_ADMIN_BAN_IP'	=> 'Excluir IP',
	'USER_ADMIN_BAN_IP_REASON'	=> 'IP excluida via Administración',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Usuario excluidas via Administración',
	'USER_ADMIN_BAN_USER'	=> 'Excluir usuario',
	'USER_ADMIN_DEACTIVATE'	=> 'Desactivar cuenta',
	'USER_ADMIN_DEACTIVED'	=> 'Usuario desactivado exitosamente.',
	'USER_ADMIN_DEL_ATTACH'	=> 'Borrar todos los adjuntos',
	'USER_ADMIN_DEL_AVATAR'	=> 'Borrar avatar',
	'USER_ADMIN_DEL_POSTS'	=> 'Borrar todos los posts',
	'USER_ADMIN_DEL_SIG'	=> 'Borrar firma',
	'USER_ADMIN_EXPLAIN'	=> 'Acá podes cambiar la información de los usuarios y ciertas opciones específicas. Para modificar los permisos de usuario por favor usá la seccion "permisos".',
	'USER_ADMIN_FORCE'	=> 'Forzar reactivación',
	'USER_ADMIN_MOVE_POSTS'	=> 'Mover todos los posts',
	'USER_ADMIN_SIG_REMOVED'	=> 'Firma borrada exitosamente.',
	'USER_ATTACHMENTS_REMOVED'	=> 'Todos los adjuntos del usuario borrados exitosamente.',
	'USER_AVATAR_UPDATED'	=> 'Avatar del usuario actualizado exitosamente.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Campos de perfil personalizado',
	'USER_DELETED'	=> 'Usuario borrado exitosamente.',
	'USER_GROUP_ADD'	=> 'Agregar usuario a grupo',
	'USER_GROUP_NORMAL'	=> 'Grupos normales de los que el usuario es miembro',
	'USER_GROUP_PENDING'	=> 'Grupos en los que el usuario está pendiente',
	'USER_GROUP_SPECIAL'	=> 'Grupos especiales de los que el usuario es miembro',
	'USER_OVERVIEW_UPDATED'	=> 'Detalles del usuario actualizado.',
	'USER_POSTS_DELETED'	=> 'Todos los posts del usuario borrados exitosamente.',
	'USER_POSTS_MOVED'	=> 'Posts movidos exitosamente al Foro de destino.',
	'USER_PREFS_UPDATED'	=> 'Preferencias de usuario actualizadas.',
	'USER_PROFILE'	=> 'Perfil del usuario',
	'USER_PROFILE_UPDATED'	=> 'Perfil del usuario actualizado.',
	'USER_RANK'	=> 'Rango del usuario',
	'USER_RANK_UPDATED'	=> 'Rango del usuario actualizado.',
	'USER_SIG_UPDATED'	=> 'Firma del usuario actualizada exitosamente.',
	'USER_TOOLS'	=> 'Herramientas básicas',
	'BAN_ALREADY_ENTERED'	=> 'Esta exclusión ha sido ingresada previamente. La lista no ha sido actualizada.',
	'USER_NO_ATTACHMENTS'	=> 'No hay archivos adjuntos para mostrar.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'No podés promocionar usuarios desconocidos a Fundador.',	
));

?>
