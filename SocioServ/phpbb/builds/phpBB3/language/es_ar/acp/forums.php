<?php
/** 
*
* acp_forums.php [Spanish [es_AR]]
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
	'AUTO_PRUNE_DAYS'	=> 'Vigencia',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Número de días que se mantendrá el topic sin _mensajes_ nuevos antes de borrarlo automáticamnte.',
	'AUTO_PRUNE_FREQ'	=> 'Frecuencia',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Tiempo en días transcurrido entre una poda y otra.',
	'AUTO_PRUNE_VIEWED'	=> 'Caducidad',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Numero de días que se mantendrá el topic sin _visitas_ nuevas antes de borrarlo automáticamente.',
	'COPY_PERMISSIONS'	=> 'Copiar permisos de',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Una vez creado, el foro tendrá los mismos permisos que el seleccionado acá. Si no seleccionás ninguno, el foro creado no será visible hasta que se establezcan sus permisos.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Si seleccionás copiar permisos, el foro tendrá los mismos permisos que el seleccionado. Esto sobreescribirá cualquier permiso que hayas establecido previamente con los permisos del foro seleccionado. Si no seleccionás ningún foro, se mantendrán los permisos actuales.',
	'CREATE_FORUM'	=> 'Crear Foro nuevo',
	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Borrar contenido o mover a foro',
	'DECIDE_MOVE_DELETE_SUBFORUMS'	=> 'Borrar sub foros o mover a foro',
	'DEFAULT_STYLE'	=> 'Estilo por omisión',
	'DELETE_ALL_POSTS'	=> 'Borrar posts',
	'DELETE_SUBFORUMS'	=> 'Borrar sub foros y posts',
	'DISPLAY_ACTIVE_TOPICS'	=> 'Mostrar topics activos',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'	=> 'Topics activos en los sub foros seleccionados se mostrarán bajo esta categoría.',
	'EDIT_FORUM'	=> 'Editar foro',
	'ENABLE_INDEXING'	=> 'Habilitar indexación',
	'ENABLE_INDEXING_EXPLAIN'	=> 'Los posts de este foro se indexarán para búsqueda.',
	'ENABLE_POST_REVIEW'	=> 'Habilitar revisión de posts',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Los usuarios serán capaces de revisar sus post si fueron enviados nuevos posts mientras estaban escribiendo. Esto debería deshabilitarse para foros de chat.',
	'ENABLE_RECENT'	=> 'Mostrar topics activos',
	'ENABLE_RECENT_EXPLAIN'	=> 'Los topics vigentes de este foro se mostrarán en la lista de topics activos.',
	'ENABLE_TOPIC_ICONS'	=> 'Habilitar íconos para el topic',
	'FORUM_ADMIN'	=> 'Administración de Foros',
	'FORUM_ADMIN_EXPLAIN'	=> 'En phpBB3 no hay categorías, todo está basado en foros. Cada foro puede tener ilimitados subforos y podes determinar en cuales se puede postear o no (esto actuaría como una categoría). Acá podés agregar, editar, borrar, bloquear o desbloquear foros individuales como también definir controles adicionales. Si los posts y topics se desfasaron podés re-sincronizarlos.',
	'FORUM_AUTO_PRUNE'	=> 'Habilitar auto-poda',
	'FORUM_AUTO_PRUNE_EXPLAIN'	=> 'Poda los topics del foro, definí la frecuencia/antiguedad debajo.',
	'FORUM_CREATED'	=> 'Foro creado exitosamente.',
	'FORUM_DATA_NEGATIVE'	=> 'La poda no puede hacerse sobre números negativos.',
	'FORUM_DESC_TOO_LONG'	=> 'La descripción del foro es muy larga, debe tener menos de 4000 caracteres.',
	'FORUM_DELETE'	=> 'Borrar foro',
	'FORUM_DELETE_EXPLAIN'	=> 'El formulario siguiente permite borrar un Foro. Tenés que decidir donde poner los topics (o foros) que contenga.',
	'FORUM_DELETED'	=> 'Foro borrado exitosamente.',
	'FORUM_DESC'	=> 'Descripción',
	'FORUM_DESC_EXPLAIN'	=> 'Cualquier código ingresado acá se mostrará tal cual es.',
	'FORUM_EDIT_EXPLAIN'	=> 'El formulario siguiente permite personalizar este foro. Por favor notá que la moderación se regula desde el menú "permisos del foro" para cada usuario o grupo.',
	'FORUM_IMAGE'	=> 'Imágen del Foro',
	'FORUM_IMAGE_EXPLAIN'	=> 'Ubicación, relativa al directorio raíz de phpBB, de una imágen adicional para asociar con este Foro.',
	'FORUM_LINK_EXPLAIN'	=> 'URL completa (incluyendo el protocolo, p.ej. <samp>http://</samp>) a la que este Foro redireccionará al usuario.',
	'FORUM_LINK_TRACK'	=> 'Registrar redirecciones',
	'FORUM_LINK_TRACK_EXPLAIN'	=> 'Registra el número de veces que se hizo click en el link.',
	'FORUM_NAME'	=> 'Nombre del foro',
	'FORUM_NAME_EMPTY'	=> 'Tenés que ingresar un nombre para este Foro.',
	'FORUM_PARENT'	=> 'Foro Padre',
	'FORUM_PASSWORD'	=> 'Clave del Foro',
	'FORUM_PASSWORD_CONFIRM'	=> 'Confirmar clave',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Sólo se necesita si se ingresa una clave.',
	'FORUM_PASSWORD_EXPLAIN'	=> 'Determina la clave para este Foro, es preferible usar el sistema de permisos.',
	'FORUM_PASSWORD_MISMATCH'	=> 'Las claves que ingresaste no coinciden.',
	'FORUM_PRUNE_SETTINGS'	=> 'Ajustes de poda de Foros',
	'FORUM_RESYNCED'	=> 'Foro "%1$s" sincronizado exitosamente',
	'FORUM_RULES_EXPLAIN'	=> 'Las reglas del Foro se muestran en cualquier página del Foro dado.',
	'FORUM_RULES_LINK'	=> 'Enlace a las reglas del Foro',
	'FORUM_RULES_LINK_EXPLAIN'	=> 'Podés ingresar una URL donde están las reglas del Foro. Este parámetro tiene preferencia sobre el texto ingresado de las reglas del Foro.',
	'FORUM_RULES_PREVIEW'	=> 'Vista previa de las reglas del Foro',
	'FORUM_RULES_TOO_LONG'	=> 'Las reglas del Foro deben tener menos de 4000 caracteres.',
	'FORUM_SETTINGS'	=> 'Parámetros del Foro',
	'FORUM_STATUS'	=> 'Estado del Foro',
	'FORUM_STYLE'	=> 'Estilo del Foro',
	'FORUM_TOPICS_PAGE'	=> 'Topics por página',
	'FORUM_TOPICS_PAGE_EXPLAIN'	=> 'Si es distinto de 0 este valor sobreescribe el valor por omisión de topics por página.',
	'FORUM_TYPE'	=> 'Tipo de Foro',
	'FORUM_UPDATED'	=> 'Parámetros del Foro actualizada exitosamente.',
	'GENERAL_FORUM_SETTINGS'	=> 'Parámetros generales',
	'LINK'	=> 'Enlace',
	'LIST_INDEX'	=> 'Incluye al Foro en el listado de subforos',
	'LIST_INDEX_EXPLAIN'	=> 'Muestra un enlace a este Foro en el listado de subforos del Padre si existe.',
	'LOCKED'	=> 'Bloqueado',
	'MOVE_POSTS_TO'	=> 'Mover posts a',
	'MOVE_SUBFORUMS_TO'	=> 'Mover subforos a',
	'NO_DESTINATION_FORUM'	=> 'No has especificado un Foro para transferir el contenido',
	'NO_FORUM_ACTION'	=> 'No has definido qué sucederá con el contenido del Foro',
	'NO_PARENT'	=> 'Sin Padre',
	'NO_PERMISSIONS'	=> 'No copiar permisos',
	'NO_PERMISSION_FORUM_ADD'	=> 'No tenés los permisos necesarios para agregar Foros.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'No tenés los permisos necesarios para borrar Foros.',
	'PARENT_NOT_EXIST'	=> 'No existe Padre.',
	'PRUNE_ANNOUNCEMENTS'	=> 'Podar anuncios',
	'PRUNE_STICKY'	=> 'Podar fijos',
	'PRUNE_OLD_POLLS'	=> 'Podar encuestas viejas',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Borra topics con encuestas no votadas hace mucho.',
	'REDIRECT_ACL'	=> 'Ahora podés %1$sajustar parámetros%2$s para este Foro.',
	'SYNC_IN_PROGRESS'	=> 'Sincronizando Foro',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Actualmente sincronizando rango de topic %1$d/%2$d.',
	'TYPE_CAT'	=> 'Categoría',
	'TYPE_FORUM'	=> 'Foro',
	'TYPE_LINK'	=> 'Enlace',
	'UNLOCKED'	=> 'Desbloqueado',
	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'El foro que seleccionaste no es postable. Por favor seleccioná otro foro.',
	'PARENT_IS_LINK_FORUM'	=> 'El foro padre que especificaste es un enlace. Los enlaces no pueden tener sub foros, por favor especificá una categoría o foro.',
	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Querés cambiar un foro con subforos a un link.Por favor sacá todos los subforos de este foro antes de continuar, porque después de transformarlo en un link no podrás ver los subforos.',
));

?>
