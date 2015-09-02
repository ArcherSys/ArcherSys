<?php
/** 
*
* acp_prune.php [Spanish [es_AR]]
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
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Acá podés borrar (o desactivar) usuarios del Sitio. Esto puede ser hecho de varias formas: por cantidad de posts, última actividad, etc. Los criterios pueden combinarse, p.ej. podés podar usuarios con última actividad anterior a 2002-01-01 y menos de 10 posts. Como alternativa podés entrar una lista de usuarios directamente en la caja de texto, y se ignorará cualquier criterio. Tené cuidado! Una vez que el usuario es borrado no hay vuelta atrás.',
	'DEACTIVATE_DELETE'	=> 'Desactivar o borrar',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Determina si desactivar o borrar completamente al usuario, notá que no se puede deshacer!',
	'DELETE_USERS'	=> 'Borrar',
	'DELETE_USER_POSTS'	=> 'Borrar posts de usuarios podados',
	'DELETE_USER_POSTS_EXPLAIN'	=> 'Remueve posts hechos por usuarios borrados, no tiene efecto sobre usuarios desactivados.',
	'JOINED_EXPLAIN'	=> 'Ingresá una fecha en el formato <kbd>aaaa-mm-dd</kbd>.',
	'LAST_ACTIVE_EXPLAIN'	=> 'Ingresá una fecha en el formato <kbd>aaaa-mm-dd</kbd>.',
	'SELECT_USERS_EXPLAIN'	=> 'Ingresá solo usuarios específicos aca, tendrán preferencia sobre los criterios anteriores.',
	'USER_DEACTIVATE_SUCCESS'	=> 'Los usuarios seleccionados han sido desactivados exitosamente.',
	'USER_DELETE_SUCCESS'	=> 'Los usuarios seleccionados han sido borrados exitosamente',
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Esto borrará cualquier topic que no tenga posts o visitas en la cantidad de días seleccionada. Si no ingresás un número se borrarán todos los topics. Por omisión, no se removerán topics que tengan encuestas vigentes ni se removerán anuncios.',
	'FORUM_PRUNE'	=> 'Podar foro',
	'NO_PRUNE'	=> 'No se podaron foros',
	'SELECTED_FORUM'	=> 'Foro seleccionado',
	'SELECTED_FORUMS'	=> 'Foros seleccionados',
	'POSTS_PRUNED'	=> 'Posts podados',
	'PRUNE_ANNOUNCEMENTS'	=> 'Podar anuncios',
	'PRUNE_FINISHED_POLLS'	=> 'Podar encuestas cerradas',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Remueve topics con encuestas que han concluído.',
	'PRUNE_NOT_POSTED'	=> 'Días desde el último post',
	'PRUNE_NOT_VIEWED'	=> 'Días desde la última visita',
	'PRUNE_OLD_POLLS'	=> 'Podar encuestas viejas',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Remueve topics con encuestas no votadas hace mucho.',
	'PRUNE_STICKY'	=> 'Podar anuncios fijos',
	'PRUNE_SUCCESS'	=> 'Foros podados exitosamente',
	'TOPICS_PRUNED'	=> 'Topics podados',
	'PRUNE_USERS_LIST'	=> 'Usuarios para podar',
	'PRUNE_USERS_LIST_DELETE'	=> 'Con el criterio seleccionado, las siguientes cuentas serán removidas.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Con el criterio seleccionado, las siguientes cuentas serán desactivadas.',
	'USER_PRUNE_FAILURE'	=> 'Ningún usuario se ajusta al criterio.',
	'WRONG_ACTIVE_JOINED_DATE'	=> 'La fecha ingresada es incorrecta, esperaba el formato <kbd>YYYY-MM-DD</kbd>.',
	'PRUNE_FORUM_CONFIRM'	=> 'Estás seguro que querés podar el foro seleccionado con los parámetros seleccionados? Una vez removido, no hay cómo recuperarlo.',
));

?>