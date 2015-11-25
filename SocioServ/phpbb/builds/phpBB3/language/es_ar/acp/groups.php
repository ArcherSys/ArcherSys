<?php
/** 
*
* acp_groups.php [Spanish [es_AR]]
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
	'ACP_GROUPS_MANAGE_EXPLAIN'	=> 'Desde este panel podés administrar los grupos de usuarios: podés borrar, crear y editar grupos existentes. Podés designar moderadores, abrir y/o cerrar grupos, establecer el nombre del grupo y su descripción.',
	'ADD_USERS'	=> 'Agregar usuarios',
	'ADD_USERS_EXPLAIN'	=> 'Acá podés agregar nuevos usuarios al Grupo. Podés seleccionar también si este Grupo lo será por omisión de los usuarios seleccionados. Adicionalmente podés definirlos como responsables de Grupo. Por favor ingresá cada usuario en una línea aparte.',
	'COPY_PERMISSIONS'	=> 'Copiar permisos de',
	'COPY_PERMISSIONS_EXPLAIN'	=> 'Una vez creado, el Grupo tendrá los mismos permisos que el seleccionado acá.',
	'CREATE_GROUP'	=> 'Crear nuevo grupo',
	'GROUPS_NO_MEMBERS'	=> 'Este Grupo no tiene miembros',
	'GROUPS_NO_MODS'	=> 'No hay moderadores de Grupo',
	'GROUP_APPROVE'	=> 'Aprobar miembro',
	'GROUP_APPROVED'	=> 'Miembros aprobados',
	'GROUP_AVATAR'	=> 'Avatar del Grupo',
	'GROUP_AVATAR_EXPLAIN'	=> 'Esta imágen se mostrará en el Panel de Control de Grupo.',
	'GROUP_CLOSED'	=> 'Cerrado ',
	'GROUP_COLOR'	=> 'Color del Grupo',
	'GROUP_COLOR_EXPLAIN'	=> 'Determina el color con el que aparecerán los nombres de usuarios de sus miembros, dejalo en blanco si querés que use los parámetros por omisión de los usuarios.',
	'GROUP_CREATED'	=> 'El grupo ha sido creado exitosamente.',
	'GROUP_DEFAULT'	=> 'Grupo por omisión',
	'GROUP_DEFS_UPDATED'	=> 'Grupo por omisión establecido para todos los miembros seleccionados.',
	'GROUP_DELETE'	=> 'Remover miembro del Grupo',
	'GROUP_DELETED'	=> 'Grupo borrado y grupos por omisión establecidos exitosamente.',
	'GROUP_DEMOTE'	=> 'Deponer responsable de grupo',
	'GROUP_DESC'	=> 'Descripción del Grupo',
	'GROUP_DETAILS'	=> 'Detalles del Grupo',
	'GROUP_DST'	=> 'Group daylight savings',
	'GROUP_EDIT_EXPLAIN'	=> 'Acá podés editar un Grupo existente. Podés cambiar su nombre, descripción y tipo (abierto, cerrado, etc.). También establecer opciones globales como ser colores, rango, etc. Los cambios hechos aquí sobreescriben los parámetros actuales de los usuarios. Por favor notá que los miembros del grupo pueden cambiar su avatar a menos que definas los permisos de usuario apropiados.',
	'GROUP_ERR_USERS_EXIST'	=> 'Los usuarios especificados ya son miembros de este Grupo',
	'GROUP_FOUNDER_MANAGE'	=> 'Fundador administra exclusivamente',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Sólo los fundadores del Grupo pueden acceder al Panel de Control de Administracion del Grupo.',
	'GROUP_HIDDEN'	=> 'Oculto',
	'GROUP_LANG'	=> 'Idioma del Grupo',
	'GROUP_LEAD'	=> 'Responsable del Grupo',
	'GROUP_LEADERS_ADDED'	=> 'Nuevos responsables agregados exitosamente.',
	'GROUP_LEGEND'	=> 'Mostrar Grupo in legend',
	'GROUP_LIST'	=> 'Miembros actuales',
	'GROUP_LIST_EXPLAIN'	=> 'Lista completa de todos los usuarios que actualmente pertenecen a este Grupo. Podés borrar miembros (excepto en ciertos grupos especiales) o agregar nuevos.',
	'GROUP_MEMBERS'	=> 'Miembros del Grupo',
	'GROUP_MEMBERS_EXPLAIN'	=> 'Este es el listado completo de todos los miembros de este grupo de usuarios. Incluye secciones separadas para miembros responsables, existentes y pendientes. Desde acá podés administrar todos los aspectos de quiénes pertenecen a este grupo y con qué roles. Para remover e un responsable pero mantenerlo en el Grupo usá Deponer antes que borrar. Similarmente usá Promover para hacer responsable a un miembro existente.',
	'GROUP_MESSAGE_LIMIT'	=> 'Límite de Mensajes Privados por carpeta',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Este parámetro sobreescribe el límite por usuario. 0 significa que se usará el límite por defecto.',
	'GROUP_MODS_ADDED'	=> 'Miembros agregados exitosamente.',
	'GROUP_MODS_DEMOTED'	=> 'Miembros depuestos exitosamente.',
	'GROUP_MODS_PROMOTED'	=> 'Miembros promovidos exitosamente.',
	'GROUP_NAME'	=> 'Nombre del Gupo',
	'GROUP_OPEN'	=> 'Abierto',
	'GROUP_PENDING'	=> 'Miembros pendientes',
	'GROUP_PROMOTE'	=> 'Promover a responsable de Grupo',
	'GROUP_RANK'	=> 'Rango',
	'GROUP_RECEIVE_PM'	=> 'El Grupo puede recibir Mensajes Privados',
	'GROUP_REQUEST'	=> 'Solicitud',
	'GROUP_SETTINGS'	=> 'Asignar preferencias de usuario',
	'GROUP_SETTINGS_EXPLAIN'	=> 'Acá podés forzar cambios en las preferencias actuales de los usuarios. Por favor notá que estos valores no se guardan para el Grupo en sí mismo. Se trata mas bien de un método veloz de actualización de preferencias de los usuarios del Grupo.',
	'GROUP_SETTINGS_SAVE'	=> 'Parámetros globales del Grupo',
	'GROUP_TIMEZONE'	=> 'Zona horaria del Grupo',
	'GROUP_TYPE'	=> 'Tipo de Grupo',
	'GROUP_TYPE_EXPLAIN'	=> 'Esto determina qué usuarios pueden ver o ingresar al grupo.',
	'GROUP_UPDATED'	=> 'Preferencias del Grupo actualizadas exitosamente.',
	'GROUP_USERS_ADDED'	=> 'Nuevos usuarios agregados al Grupo exitosamente.',
	'GROUP_USERS_EXIST'	=> 'Los usuarios seleccionados ya son miembros.',
	'GROUP_USERS_REMOVE'	=> 'Usuarios removidos del Grupo y nuevos parámetros por omisión ajustados exitosamente.',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Hacer grupo por omisión para todos los miembros',
	'MEMBERS'	=> 'Miembros',
	'NO_GROUP'	=> 'No se especificó Grupo.',
	'NO_GROUPS_CREATED'	=> 'Aún no se han creado grupos.',
	'NO_PERMISSIONS'	=> 'No copiar permisos',
	'NO_USERS'	=> 'No ingresaste ningún usuario.',
	'SPECIAL_GROUPS'	=> 'Grupos predefinidos',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Grupos predefinidos son grupos especiales, no pueden ser borrados o modificados directamente. Sin embargo podes agregar usuarios y cambiar parámetros básicos. Haciendo click en “Omisión” podés definirlo como grupo principal para todos sus miembros.',
	'TOTAL_MEMBERS'	=> 'Miembros',
	'USERS_APPROVED'	=> 'Usuarios aprobados exitosamente.',
	'USER_DEFAULT'	=> 'Por omisión',
	'USER_DEF_GROUPS'	=> 'Grupos definidos por el usuario',
	'USER_DEF_GROUPS_EXPLAIN'	=> 'Estos son grupos creados por vos u otro administrador de este Sitio. Podés administrar pertenencias como también editar propiedades del Grupo e inclusive borrarlo. Haciendo click en “Omisión” podés definirlo como grupo principal para todos sus miembros.',
	'USER_GROUP_DEFAULT'	=> 'Definir como grupo por Omisión',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Esto lo designará como Grupo por Omisión para todos sus miembros',
	'USER_GROUP_LEADER'	=> 'Designar responsable de Grupo',
	'GROUP_NAME_TAKEN'	=> 'El nombre de grupo que ingresaste ya está en uso, por favor elegí uno diferente.',
	'GROUP_RECEIVE_PM_EXPLAIN'	=> 'Por favor notá que a los grupos ocultos no se les puede enviar mensajes, sin importar sus parámetros.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Estás seguro que querés agregar al usuario %1$s al grupo?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Estás seguro que querés agregar a los usuarios %1$s al grupo?',

));

?>