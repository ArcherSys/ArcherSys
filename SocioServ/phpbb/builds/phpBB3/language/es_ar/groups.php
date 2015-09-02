<?php
/** 
*
* groups.php [Spanish [es_AR]]
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
	'ALREADY_DEFAULT_GROUP'	=> 'El grupo seleccionado ya es tu grupo por omisión',
	'ALREADY_IN_GROUP'	=> 'Ya eres miembro del grupo seleccionado',
	'CHANGED_DEFAULT_GROUP'	=> 'Grupo por omisión exitosamente cambiado',
	'GROUP_AVATAR'	=> 'Avatar de grupo',
	'GROUP_CHANGE_DEFAULT'	=> '¿Estás seguro de cambiar tu pertenencia por omisión al grupo “%s”?',
	'GROUP_CLOSED'	=> 'Cerrado',
	'GROUP_DESC'	=> 'Descripción del grupo',
	'GROUP_HIDDEN'	=> 'Oculto',
	'GROUP_INFORMATION'	=> 'Información del grupo',
	'GROUP_IS_CLOSED'	=> 'Este es un grupo cerrado, donde no pueden ingresar automaticamente nuevos miembros, sólo por invitacion de un líder del grupo.',
	'GROUP_IS_FREE'	=> 'Este es un grupo libre abierto, todos lo miembros nuevos son bienvenidos.',
	'GROUP_IS_HIDDEN'	=> 'Este es un grupo oculto, sólo miembros de este grupo pueden ver su pertenencia.',
	'GROUP_IS_OPEN'	=> 'Este es un grupo abierto, nuevos miembros pueden ingresar mediante una solicitud.',
	'GROUP_IS_SPECIAL'	=> 'Este es un grupo especial, los grupos especiales son administrados por los administradores del Sitio.',
	'GROUP_JOIN'	=> 'Ingresar al grupo',
	'GROUP_JOIN_CONFIRM'	=> '¿Estás seguro que querés ingresar al grupo seleccionado?',
	'GROUP_JOIN_PENDING'	=> 'Ingreso al grupo solicitado',
	'GROUP_JOIN_PENDING_CONFIRM'	=> '¿Estás seguro que querés solicitar ingresar al grupo seleccionado?',
	'GROUP_JOINED'	=> 'Exitosamente ingresado al grupo elegido',
	'GROUP_JOINED_PENDING'	=> 'Exitosamente solicitada pertenecia al grupo. Por favor aguarda que un líder del grupo apruebe tu membresía.',
	'GROUP_LIST'	=> 'Administrar usuarios',
	'GROUP_MEMBERS'	=> 'Miembros del grupo',
	'GROUP_NAME'	=> 'Nombre del grupo',
	'GROUP_OPEN'	=> 'Abierto',
	'GROUP_RANK'	=> 'Rango del grupo',
	'GROUP_RESIGN_MEMBERSHIP'	=> 'Renunciar al grupo',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> '¿Estás seguro que querés renunciar al grupo seleccionado?',
	'GROUP_RESIGN_PENDING'	=> 'Renuncia al grupo solicitada',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> '¿Estás seguro que queres renunciar tu membresía pendiente para el grupo seleccionado?',
	'GROUP_RESIGNED_MEMBERSHIP'	=> 'Has sido exitosamente removido del grupo seleccionado',
	'GROUP_RESIGNED_PENDING'	=> 'Tu membresía pendiente ha sido exitosamente removida del grupo seleccionado',
	'GROUP_TYPE'	=> 'Tipo de grupo',
	'GROUP_UNDISCLOSED'	=> 'Grupo oculto',
	'FORUM_UNDISCLOSED'	=> 'Moderación de foro(s) oculto(s)',
	'LOGIN_EXPLAIN_GROUP'	=> 'Necesitás ingresar para ver los detalles del grupo',
	'NO_LEADERS'	=> 'No sos líder de ningún grupo',
	'NOT_LEADER_OF_GROUP'	=> 'La operación requerida no puede llevarse a cabo porque no sos líder del grupo seleccionado.',
	'NOT_MEMBER_OF_GROUP'	=> 'La operación requerida no puede llevarse a cabo porque no sos miembro del grupo seleccionado.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'No te está permitido renunciar de tu grupo por omisión.',
	'PRIMARY_GROUP'	=> 'Grupo primario',
	'REMOVE_SELECTED'	=> 'Remover selección',
	'USER_GROUP_CHANGE'	=> 'Desde grupo “%1$s” hasta “%2$s”',
	'USER_GROUP_DEMOTE'	=> 'Deponer liderazgo',
	'USER_GROUP_DEMOTE_CONFIRM'	=> '¿Estás seguro que querés deponer tu liderazgo del grupo seleccionado?',
	'USER_GROUP_DEMOTED'	=> 'Liderazgo exitosamente depuesto.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Ya solicitaste ingresar al grupo seleccionado.',
));

?>