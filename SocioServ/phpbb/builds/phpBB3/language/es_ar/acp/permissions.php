<?php
/** 
*
* acp_permissions.php [Spanish [es_AR]]
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '		<p>Los permisos son altamente granulares y se agrupan en cuatro grandes secciones, las cuales son:</p>

		<h2>Permisos Globales</h2>
		<p>Son usados para controlar el acceso en un nivel global y se aplican a todo el Sitio. Se dividen posteriormente en Permisos de Usuario, Permisos de Grupos, Administradores y Moderadores Globales.</p>

		<h2>Permisos basados en Foros</h2>
		<p>Se usan para controlar el acceso a los foros específicamente. Se dividen posteriormente en Permisos de Foros, Moderadores de Foros, Permisos de Foro de Usuario y Permisos de Foro de grupos.</p>

		<h2>Permisos de Roles</h2>
		<p>Se usan para crear diferentes paquetes de varios tipos de permisos posteriormente asignables a los distintos Roles. Los roles por omisión deberían cubrir la administración del Sitio en sus cuatro divisiones, podés agregar/editar/borrar roles como creas conveniente.</p>

		<h2>Máscara de Permisos</h2>
		<p>Se usa para ver el efecto de los permisos asignados a Usuarios, Moderadores (Locales and Globales), Administradores o Foros.</p>
	
		<br />

		<p>Para más información sobre configuración y administración de permisos en tu foro phpBB3, por favor visitá a  <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Capítulo 1.5 de nuestra Guía de Inicio Rápido</a>.</p>
	',
	'ACL_NEVER'	=> 'Nunca',
	'ACL_SET'	=> 'Configurar permisos',
	'ACL_SET_EXPLAIN'	=> 'Los permisos están basados en un sencillo sistema <samp>SI</samp>/<samp>NO</samp>. Configurar una opción como <samp>NUNCA</samp> para un usuario o grupo tiene precedencia sobre cualquier otro valor asignado. Si no querés asignar un valor seleccioná <samp>NO</samp>. Valores asignados para esta opción en cualquier lugar se usarán preferentemente, caso contrario se asume <samp>NUNCA</samp>. Todos los objetos marcados (en su respectivo checkbox) copiarán el paquete de permisos que definas.',
	'ACL_SETTING'	=> 'Configuración',
	'ACL_TYPE_A_'	=> 'Permisos Administrativos',
	'ACL_TYPE_F_'	=> 'Permisos de Foros',
	'ACL_TYPE_M_'	=> 'Permisos de Moderación',
	'ACL_TYPE_U_'	=> 'Permisos de Usuario',
	'ACL_TYPE_GLOBAL_A_'	=> 'Permisos Administrativos Globales',
	'ACL_TYPE_GLOBAL_U_'	=> 'Permisos de Usuario Globales',
	'ACL_TYPE_GLOBAL_M_'	=> 'Permisos de Moderadores Globales',
	'ACL_TYPE_LOCAL_M_'	=> 'Permisos de Moderador de Foro',
	'ACL_TYPE_LOCAL_F_'	=> 'Permisos de Foro',
	'ACL_NO'	=> 'No',
	'ACL_VIEW'	=> 'Ver permisos',
	'ACL_VIEW_EXPLAIN'	=> 'Acá podés ver el efecto de los permisos sobre el usuario/grupo. Un cuadrado rojo indica que el usuario/grupo no tiene permisos, un cuadrado verde indica que el usuario/grupo tiene todos los permisos.',
	'ACL_YES'	=> 'Si',
	'ACP_ADMINISTRATORS_EXPLAIN'	=> 'Acá podés asignar derechos de administrador para usuarios o grupos. Todos los usuarios con permisos administrativos pueden ver el Panel de Control de Administracion.',
	'ACP_FORUM_MODERATORS_EXPLAIN'	=> 'Acá podés asignar usuarios y grupos como moderadores de foros. Para asignar accesos de usuario a los foros, para definir derechos de moderador global o administrativos por favor usa la sección correspondiente.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'	=> 'Acá podés alterar cuales usuarios y grupos pueden acceder a qué foro. Para asignar moderadores o definir administradores por favor usá la sección correspondiente.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'	=> 'Acá podés asignar derechos de moderador global para usuarios o grupos. Estos moderadores son como los moderadores corrientes excepto que tienen acceso a todos los foros del Sitio.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'	=> 'Acá podés asignar permisos de foro a grupos.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'	=> 'Acá podés asignar permisos globales a grupos - permisos de usuario, permisos de moderador global y permisos administrativos. Permisos de usuario incluyen capacidades como el empleo de avatares, enviar mensajes privados, etc; permisos de moderador global tales como aprobar posts, administrar topics, administrar exclusiones, etc y por último permisos administrativos tales como alterar permisos, definir código BBCode personalizado, administrar foros, etc. Los permisos individuales de usuarios solamente deberían ser cambiados en raras ocaciones, el método preferido es poner a los usuarios en grupos y asignarles permisos de grupo.',
	'ACP_ADMIN_ROLES_EXPLAIN'	=> 'Acá podés administrar los roles para permisos administrativos. Los roles actúan como permisos, si cambiás un rol los ítems asignados al mismo también cambiarán sus permisos.',
	'ACP_FORUM_ROLES_EXPLAIN'	=> 'Acá podés administrar los roles para permisos de foros. Los roles actúan como permisos, si cambiás un rol los ítems asignados al mismo también cambiarán sus permisos.',
	'ACP_MOD_ROLES_EXPLAIN'	=> 'Acá podés administrar los roles para permisos de moderadores. Los roles actúan como permisos, si cambiás un rol los ítems asignados al mismo también cambiarán sus permisos.',
	'ACP_USER_ROLES_EXPLAIN'	=> 'Acá podés administrar los roles para permisos de usuario. Los roles actúan como permisos, si cambiás un rol los ítems asignados al mismo también cambiarán sus permisos.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'	=> 'Acá podés asignar permisos de foro a los usuarios.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'	=> 'Acá podés asignar permisos globales a usuarios - permisos de usuario, permisos de moderador global y permisos de administrador. Permisos de usuario incluyen capacidades como el empleo de avatares, enviar mensajes privados, etc; permisos de moderador global tales como aprobar posts, administrar topics, administrar exclusiones, etc y por último permisos administrativos tales como alterar permisos, definir código BBCode personalizado, administrar foros, etc. Para alterar estos parámetros en un gran número de usuarios el mejor método es el sistema de permisos de Grupo. Los permisos individuales de usuarios solamente deberían ser cambiados en raras ocaciones, el método preferido es poner a los usuarios en grupos y asignarles permisos de grupo.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'	=> 'Acá podés ver el efecto de los permisos administrativos asignados a los usuarios/grupos seleccionados',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Acá podés ver el efecto de los permisos de moderación global asignados a los usuarios/grupos seleccionados',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'	=> 'Acá podés ver el efecto de los permisos de foro asignados a los usuarios/grupos seleccionados',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Acá podés ver el efecto de los permisos de moderador de foro asignados a los usuarios/grupos seleccionados y foros',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'	=> 'Acá podés ver el efecto de los permisos de usuario asignados a los usuarios/grupos seleccionados',
	'ADD_GROUPS'	=> 'Agregar grupos',
	'ADD_PERMISSIONS'	=> 'Agregar permisos',
	'ADD_USERS'	=> 'Agregar usuarios',
	'ADVANCED_PERMISSIONS'	=> 'Permisos avanzados',
	'ALL_GROUPS'	=> 'Seleccionar todos los grupos',
	'ALL_NEVER'	=> 'Todos <samp>NUNCA</samp>',
	'ALL_NO'	=> 'Todos <samp>NO</samp>',
	'ALL_USERS'	=> 'Seleccionar todos los usuarios',
	'ALL_YES'	=> 'Todos <samp>SI</samp>',
	'APPLY_ALL_PERMISSIONS'	=> 'Aplicar todos los permisos',
	'APPLY_PERMISSIONS'	=> 'Aplicar permisos',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Los permisos y roles definidos se aplicarán a éste y todos los ítems marcados.',
	'AUTH_UPDATED'	=> 'Permisos actualizados.',
	'CREATE_ROLE'	=> 'Crear rol',
	'CREATE_ROLE_FROM'	=> 'Usar parámetros para…',
	'CUSTOM'	=> 'Personalizado…',
	'DEFAULT'	=> 'Por omisión',
	'DELETE_ROLE'	=> 'Borrar rol',
	'DELETE_ROLE_CONFIRM'	=> '¿Estás seguro que querés borrar este rol? Items que tengan este rol asignado <strong>no</strong> perderán sus permisos.',
	'DISPLAY_ROLE_ITEMS'	=> 'Ver ítems usando este rol',
	'EDIT_PERMISSIONS'	=> 'Editar permisos',
	'EDIT_ROLE'	=> 'Editar rol',
	'GROUPS_NOT_ASSIGNED'	=> 'Ningún grupo asignado a este rol',
	'LOOK_UP_FORUMS_EXPLAIN'	=> 'Podés seleccionar más de un foro',
	'LOOK_UP_GROUP'	=> 'Buscar grupo de usuarios',
	'LOOK_UP_USER'	=> 'Buscar usuario',
	'MANAGE_GROUPS'	=> 'Administrar grupos',
	'MANAGE_USERS'	=> 'Administrar usuarios',
	'NO_AUTH_SETTING_FOUND'	=> 'Configuración de permisos no definida.',
	'NO_ROLE_ASSIGNED'	=> 'Ningún rol asignado…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Configurar este rol no cambia ningún permiso a la derecha. Si querés limpiar/remover todos los permisos deberías usar el enlace “Todo <samp>NO</samp>”.',
	'NO_ROLE_AVAILABLE'	=> 'Ningún rol disponible',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Por favor dale un nombre al rol.',
	'NO_ROLE_SELECTED'	=> 'No puedo encontrar el rol.',
	'NO_USER_GROUP_SELECTED'	=> 'No seleccionaste ningún usuario o grupo.',
	'ONLY_FORUM_DEFINED'	=> 'Sólo definiste foros en tu selección. Por favor también seleccioná al menos un iusuario o un grupo.',
	'PERMISSION_APPLIED_TO_ALL'	=> 'Permisos y roles se aplicarán también a todos los objetos marcados',
	'PLUS_SUBFORUMS'	=> '+Subforos',
	'REMOVE_PERMISSIONS'	=> 'Remover permisos',
	'REMOVE_ROLE'	=> 'Removee rol',
	'ROLE'	=> 'Rol',
	'ROLE_ADD_SUCCESS'	=> 'Rol agregado exitosamente.',
	'ROLE_ASSIGNED_TO'	=> 'Usuarios/Grupos asignados a %s',
	'ROLE_DELETED'	=> 'Rol removido exitosamente.',
	'ROLE_DESCRIPTION'	=> 'Descripción del rol',
	'ROLE_ADMIN_FORUM'	=> 'Admin de Foro',
	'ROLE_ADMIN_FULL'	=> 'Admin Total',
	'ROLE_ADMIN_STANDARD'	=> 'Admin Normal',
	'ROLE_ADMIN_USERGROUP'	=> 'Admin de Usuarios y Grupos',
	'ROLE_FORUM_BOT'	=> 'Acceso de Bot',
	'ROLE_FORUM_FULL'	=> 'Acceso Total',
	'ROLE_FORUM_LIMITED'	=> 'Acceso Limitado',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Acceso Limitado + Encuestas',
	'ROLE_FORUM_NOACCESS'	=> 'Ningun Acceso',
	'ROLE_FORUM_ONQUEUE'	=> 'Espera de Moderacion',
	'ROLE_FORUM_POLLS'	=> 'Acceso Comun + Encuestas',
	'ROLE_FORUM_READONLY'	=> 'Acceso Solo Lectura',
	'ROLE_FORUM_STANDARD'	=> 'Acceso Comun',
	'ROLE_MOD_FULL'	=> 'Moderador Total',
	'ROLE_MOD_QUEUE'	=> 'Moderador de Espera',
	'ROLE_MOD_SIMPLE'	=> 'Moderador Simple',
	'ROLE_MOD_STANDARD'	=> 'Moderador Comun',
	'ROLE_USER_FULL'	=> 'Usuario Total',
	'ROLE_USER_LIMITED'	=> 'Usuario Limitado',
	'ROLE_USER_NOAVATAR'	=> 'Sin Avatar',
	'ROLE_USER_NOPM'	=> 'Sin Mensajes Privados',
	'ROLE_USER_STANDARD'	=> 'Usuario Comun',
	'ROLE_DESCRIPTION_ADMIN_FORUM'	=> 'Tiene acceso a la administración y configuracion de permisos de foros.',
	'ROLE_DESCRIPTION_ADMIN_FULL'	=> 'Tiene acceso a todas las funciones administrativas de este Sitio.<br />No recomendado.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'	=> 'Tiene acceso a la mayoría de las funciones administrativas, pero no a herramientas relativas al servidor o al sistema.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'	=> 'Puede administrar grupos y usuarios: Capaz de cambiar permisos, configuraciones, administrar exclusiones y rangos.',
	'ROLE_DESCRIPTION_FORUM_BOT'	=> 'Se recomienda este rol para bots y buscadores.',
	'ROLE_DESCRIPTION_FORUM_FULL'	=> 'Puede usar todas las funciones de los foros, incluyendo avisos y posts fijos. También puede ignorar el límite de saturación.<br />No recomendado para usuarios corrientes.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'	=> 'Puede usar algunas de las funciones de los foros, pero no enviar archivos ni usar íconos de post.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Igual que Acceso Limitado y además puede crear encuestas.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'	=> 'No puede ver ni acceder a los foros.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'	=> 'Puede usar algunas de las funciones de los foros incluyendo adjuntos, pero debe aprobar topics y posts por un admin.',
	'ROLE_DESCRIPTION_FORUM_POLLS'	=> 'Igual que Acceso Común y además puede crear encuestas.',
	'ROLE_DESCRIPTION_FORUM_READONLY'	=> 'Puede leer el foro, pero no crear topics ni enviar posts.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'	=> 'Puede usar algunas de las funciones de los foros incluyendo adjuntos, pero no bloquear ni borrar sus propios topics, y no puede crear encuestas.',
	'ROLE_DESCRIPTION_MOD_FULL'	=> 'Puede usar todas las funciones de moderacion y también exclusiones.',
	'ROLE_DESCRIPTION_MOD_QUEUE'	=> 'Puede usar la Lista de Moderacion para validar y editar posts, pero nada más.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'	=> 'Puede ejecutar acciones básicas. No puede enviar advertencias o usar la lista de moderación.',
	'ROLE_DESCRIPTION_MOD_STANDARD'	=> 'Puede usar la mayoría de las herramientas de moderación, pero no puede excluir usuarios o cambiar autor de post.',
	'ROLE_DESCRIPTION_USER_FULL'	=> 'Puede usar todas las funciones de los foros disponibles para usuarios, incluyendo cambios en el nombre de usuario o ignorar el límite de saturación.<br />No recomendado.',
	'ROLE_DESCRIPTION_USER_LIMITED'	=> 'Tiene acceso a algunas de las funciones de usuario. Adjuntos, e-mails, o mensajes instantáneos no le están permitidos.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'	=> 'Tiene un paquete de funciones limitado y no puede usar Avatar.',
	'ROLE_DESCRIPTION_USER_NOPM'	=> 'Tiene un paquete de funciones limitado y no puede enviar Mensajes Privados.',
	'ROLE_DESCRIPTION_USER_STANDARD'	=> 'Tiene acceso a la mayoría pero no a todas las funciones. No puede cambiar nombre de usuario o ignorar el límite de saturación, por ejemplo.',
	'ROLE_DESCRIPTION_EXPLAIN'	=> 'Podés ingresar una explicación corta de por qué fué creado el rol o para qué sirve. Este texto también se mostrará en la sección de permisos.',
	'ROLE_DESCRIPTION_LONG'	=> 'La descripción del rol es muy larga, por favor limitala a 4000 caracteres.',
	'ROLE_DETAILS'	=> 'Detalles del rol',
	'ROLE_EDIT_SUCCESS'	=> 'Rol editado exitosamente.',
	'ROLE_NAME'	=> 'Nombre del rol',
	'ROLE_NAME_ALREADY_EXIST'	=> 'Un rol llamado <strong>%s</strong> ya existe con el tipo de permisos especificados.',
	'ROLE_NOT_ASSIGNED'	=> 'El rol no ha sido asignado aún.',
	'SELECTED_FORUM_NOT_EXIST'	=> 'El foro seleccionado no existe.',
	'SELECTED_GROUP_NOT_EXIST'	=> 'El grupo seleccionado no existe.',
	'SELECTED_USER_NOT_EXIST'	=> 'El usuario seleccionado  no existe.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'El foro seleccionado incluye todos sus subforos',
	'SELECT_ROLE'	=> 'Seleccioná rol…',
	'SELECT_TYPE'	=> 'Selecioná tipo',
	'SET_PERMISSIONS'	=> 'Configurar permisos',
	'SET_ROLE_PERMISSIONS'	=> 'Configurar permisos de rol',
	'SET_USERS_PERMISSIONS'	=> 'Configurar permisos de usuario',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Configurar permisos de usuarios de foros',
	'TRACE_DEFAULT'	=> 'Por omisión cada permiso es <samp>NO</samp>. Así el permiso puede ser reemplazado por otras configuraciones.',
	'TRACE_FOR'	=> 'Seguimiento de',
	'TRACE_GLOBAL_SETTING'	=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Los permisos de este grupo valen <samp>NUNCA</samp> como valor total así que se mantiene el valor anterior.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Los permisos de este grupo valen <samp>NUNCA</samp> que pasa a ser el nuevo valor total porque aún no se ha configurado (configurar a  <samp>NO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Los permisos de este grupo valen <samp>NUNCA</samp> lo cual reemplaza el total <samp>SI</samp> por <samp>NUNCA</samp> para este usuario.',
	'TRACE_GROUP_NO'	=> 'El permiso es <samp>NO</samp> para este grupo así que se mantiene el valor anterior.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Los permisos de este grupo valen <samp>SI</samp> pero el total <samp>NUNCA</samp> no puede ser reemplazado.',
	'TRACE_GROUP_YES_TOTAL_NO'	=> 'Los permisos de este grupo valen <samp>SI</samp> que pasa a ser el nuevo valor total porque aún no se ha configurado (configurar a  <samp>NO</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'	=> 'Los permisos de este grupo valen <samp>SI</samp> y el total de permisos ya vale <samp>YES</samp>, así que se mantiene el total.',
	'TRACE_PERMISSION'	=> 'Restrear permisos - %s',
	'TRACE_SETTING'	=> 'Rastrear configuración',
	'TRACE_USER_GLOBAL_YES_TOTAL_YES'	=> 'Los permisos de usuario para este foro en particular valen <samp>SI</samp> pero el permiso global ya vale <samp>SI</samp>,  así que se mantiene el resultado total. %sRastrear permisos globales%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'	=> 'Los permisos de usuario para este foro en particular valen <samp>SI</samp> lo cual reemplaza el actual resultado local <samp>NUNCA</samp>. %sRastrear permisos globales%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Los permisos de usuario para este foro en particular valen <samp>NUNCA</samp> lo cual no influye en los permisos locales. %sRastrear permisos globales%s',
	'TRACE_USER_FOUNDER'	=> 'El usuario es fundador, por lo tanto los permisos administrativos valen <samp>SI</samp> por omisión.',
	'TRACE_USER_KEPT'	=> 'El permiso de usuario vale <samp>NO</samp> así que se mantiene el valor anterior.',
	'TRACE_USER_NEVER_TOTAL_NEVER'	=> 'El permiso de usuario vale <samp>NUNCA</samp> y el valor total es <samp>NUNCA</samp>, así que no cambia nada.',
	'TRACE_USER_NEVER_TOTAL_NO'	=> 'El permiso de usuario vale <samp>NUNCA</samp> que pasa a ser el valor total (que se había configurado en <samp>NEVER</samp>).',
	'TRACE_USER_NEVER_TOTAL_YES'	=> 'El permiso de usuario vale <samp>NUNCA</samp> y reemplaza al <samp>SI</samp> previo.',
	'TRACE_USER_NO_TOTAL_NO'	=> 'El permiso de usuario vale <samp>NO</samp> y el valor total ya era <samp>NO</samp> asi que por omisión es <samp>NUNCA</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'	=> 'El permiso de usuario vale <samp>SI</samp> pero el total <samp>NUNCA</samp> no puede ser reemplazado.',
	'TRACE_USER_YES_TOTAL_NO'	=> 'El permiso de usuario vale <samp>SI</samp> que pasa a ser el valor total (que se había configurado en <samp>NO</samp>).',
	'TRACE_USER_YES_TOTAL_YES'	=> 'El permiso de usuario vale <samp>SI</samp> y el valor total también es <samp>SI</samp>, así que no cambia nada.',
	'TRACE_WHO'	=> 'Quién',
	'TRACE_TOTAL'	=> 'Total',
	'USERS_NOT_ASSIGNED'	=> 'Ningún usuario asignado a este rol',
	'USER_IS_MEMBER_OF_DEFAULT'	=> 'es miembro de los siguiente grupos por omisión',
	'USER_IS_MEMBER_OF_CUSTOM'	=> 'es miembro de los siguientes grupos personalizados',
	'VIEW_ASSIGNED_ITEMS'	=> 'Ver ítems asignados',
	'VIEW_LOCAL_PERMS'	=> 'Permisos locales',
	'VIEW_GLOBAL_PERMS'	=> 'Permisos globales',
	'VIEW_PERMISSIONS'	=> 'Ver permisos',
	'WRONG_PERMISSION_TYPE'	=> 'Tipo de permiso incorrecto.',
	'RESULTING_PERMISSION'			=> 'Permisos resultantes',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Los permisos de este grupo para este foro valen <samp>NUNCA</samp> como el resultado total así que se mantiene el valor anterior.',
 	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Los permisos de este grupo para este foro valen <samp>NUNCA</samp> que pasa a ser el nuevo valor total porque aun no ha sido configurado (configurado como <samp>NO</samp>).',
 	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Los permisos de este grupo para este foro valen <samp>NUNCA</samp> lo cual reemplaza al total <samp>SI</samp> por <samp>NUNCA</samp> para este usuario.',
 	'TRACE_GROUP_NO_LOCAL'			=> 'El permiso es <samp>NO</samp> para este grupo en este foro Así que se mantiene el valor anterior.',
 	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Los permisos de este grupo para este foro valen <samp>SI</samp> pero el total <samp>NEVER</samp> no puede ser reemplazado.',
 	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Los permisos de este grupo para este foro valen <samp>SI</samp> que pasa a ser el nuevo valor total porque aun no ha sido configurado (configurado como <samp>NO</samp>).',
 	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Los permisos de este grupo para este foro valen <samp>SI</samp> y el valor total ya era <samp>SI</samp>, así que se conserva el total.',
 	'TRACE_RESULT'					=> 'Rastrear resultados',
//	'TRACE_USER_KEPT'						=> 'The user permission is <samp>NO</samp> so the old total value is kept.',
// 	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'The user permission is set to <samp>NEVER</samp> and the total value is set to <samp>NEVER</samp>, so nothing is changed.',
// 	'TRACE_USER_NEVER_TOTAL_NO'				=> 'The user permission is set to <samp>NEVER</samp> which becomes the total value because it was set to NO.',
// 	'TRACE_USER_NEVER_TOTAL_YES'			=> 'The user permission is set to <samp>NEVER</samp> and overwrites the previous <samp>YES</samp>.',
// 	'TRACE_USER_NO_TOTAL_NO'				=> 'The user permission is <samp>NO</samp> and the total value was set to NO so it defaults to <samp>NEVER</samp>.',
// 	'TRACE_USER_YES_TOTAL_NEVER'			=> 'The user permission is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
// 	'TRACE_USER_YES_TOTAL_NO'				=> 'The user permission is set to <samp>YES</samp> which becomes the total value because it was set to <samp>NO</samp>.',
// 	'TRACE_USER_YES_TOTAL_YES'				=> 'The user permission is set to <samp>YES</samp> and the total value is set to <samp>YES</samp>, so nothing is changed.',

	'TRACE_USER_KEPT_LOCAL'					=> 'Los permisos de usuario para este foro valen <samp>NO</samp> así que se conserva el total.',
//	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'The user’s permission is set to <samp>NEVER</samp> and the total value is set to <samp>NEVER</samp>, so nothing is changed.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Los permisos de usuario para este foro valen <samp>NUNCA</samp> y el valor total es <samp>NUNCA</samp>, así que no cambia nada.',
//	'TRACE_USER_NEVER_TOTAL_NO'				=> 'The user’s permission is set to <samp>NEVER</samp> which becomes the total value because it was set to NO.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Los permisos de usuario para este foro valen <samp>NUNCA</samp> que pasa a ser el nuevo valor total porque antes valía NO.',
//	'TRACE_USER_NEVER_TOTAL_YES'			=> 'The user’s permission is set to <samp>NEVER</samp> and overwrites the previous <samp>YES</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Los permisos de usuario para este foro valen <samp>NUNCA</samp> y reemplaza al anterior <samp>SI</samp>.',
//	'TRACE_USER_NO_TOTAL_NO'				=> 'The user’s permission is <samp>NO</samp> and the total value was set to NO so it defaults to <samp>NEVER</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Los permisos de usuario para este foro valen <samp>NO</samp> y el valor total era <samp>NO</samp> así que por omisión vale <samp>NEVER</samp>.',
//	'TRACE_USER_YES_TOTAL_NEVER'			=> 'The user’s permission is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Los permisos de usuario para este foro valen <samp>SI</samp> peor el total <samp>NUNCA</samp> no puede ser reemplazado.',
//	'TRACE_USER_YES_TOTAL_NO'				=> 'The user’s permission is set to <samp>YES</samp> which becomes the total value because it was set to <samp>NO</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Los permisos de usuario para este foro valen <samp>SI</samp> el cual pasa a ser rl valor total porque antes valía <samp>NO</samp>.',
//	'TRACE_USER_YES_TOTAL_YES'				=> 'The user’s permission is set to <samp>YES</samp> and the total value is set to <samp>YES</samp>, so nothing is changed.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Los permisos de usuario para este foro valen <samp>SI</samp> y el valor total es <samp>SI</samp>, así que no cambia nada.',

));

?>
