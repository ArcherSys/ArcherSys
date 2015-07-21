<?php
/** 
*
* viewtopic.php [Spanish [es_AR]]
*
* @package language
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
	'ATTACHMENT'	=> 'Adjunto',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Los adjuntos han sido deshabilitados',
	'BOOKMARK_ADDED'	=> 'Topic exitosamente señalado.',
	'BOOKMARK_REMOVED'	=> 'Señalador de topic exitosamente removido.',
	'BOOKMARK_TOPIC'	=> 'Señalar topic',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Remover de señaladores',
	'BUMPED_BY'	=> 'Last bumped by %1$s on %2$s',
	'BUMP_TOPIC'	=> 'Bump topic',
	'CODE'	=> 'Código',
	'DELETE_TOPIC'	=> 'Borrar topic',
	'DOWNLOAD_NOTICE'	=> 'No tenés los permisos requeridos para ver los archivos adjuntos a este post.',
	'EDITED_TIMES_TOTAL'	=> 'Ultima edición por %1$s el %2$s, editado %3$d veces en total',
	'EDITED_TIME_TOTAL'	=> 'Ultima edición por %1$s el %2$s, editado %3$d vez en total',
	'EMAIL_TOPIC'	=> 'Email a un amigo',
	'ERROR_NO_ATTACHMENT'	=> 'El adjunto seleccionado no existe más',
	'FILE_NOT_FOUND_404'	=> 'El archivo <strong>%s</strong> no existe.',
	'FORK_TOPIC'	=> 'Copiar topic',
	'LINKAGE_FORBIDDEN'	=> 'No estás autorizado a ver, descargar o enlazar de/a este Sitio.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Has sido notificado sobre este topic, por favor ingresá para verlo.',
	'LOGIN_VIEWTOPIC'	=> 'El administrador del Sitio requiere que estés registrado e ingreses para ver este topic.',
	'MAKE_ANNOUNCE'	=> 'Cambiar a “Anuncio”',
	'MAKE_GLOBAL'	=> 'Cambiar a “Global”',
	'MAKE_NORMAL'	=> 'Cambiar a “Topic”',
	'MAKE_STICKY'	=> 'Cambiar a “Fijo”',
	'MAX_OPTIONS_SELECT'	=> 'Podés seleccionar hasta <strong>%d</strong> opciones',
	'MAX_OPTION_SELECT'	=> 'Podés seleccionar <strong>1</strong> opción',
	'MISSING_INLINE_ATTACHMENT'	=> 'El adjunto <strong>%s</strong> ya no está disponible',
	'MOVE_TOPIC'	=> 'Mover topic',
	'NO_ATTACHMENT_SELECTED'	=> 'No has seleccionado un adjunto to para descargar o ver.',
	'NO_NEWER_TOPICS'	=> 'No hay nuevos topics en este foro',
	'NO_OLDER_TOPICS'	=> 'No hay viejos topics en este foro',
	'NO_UNREAD_POSTS'	=> 'No hay nuevos posts sin leer en este topic.',
	'NO_VOTE_OPTION'	=> 'Debés especificar una opción cuando votas.',
	'NO_VOTES'	=> 'No hay votos',
	'POLL_ENDED_AT'	=> 'La encuesta terminó en %s',
	'POLL_RUN_TILL'	=> 'La encuesta sigue hasta %s',
	'POLL_VOTED_OPTION'	=> 'Votaste por esta opción',
	'PRINT_TOPIC'	=> 'Imprimir vista',
	'QUICK_MOD'	=> 'Herramientas Quick-mod',
	'QUOTE'	=> 'Citar',
	'REPLY_TO_TOPIC'	=> 'Responder al topic',
	'RETURN_POST'	=> '%sVolver al post%s',
	'SUBMIT_VOTE'	=> 'Enviar voto',
	'TOTAL_VOTES'	=> 'Total votos',
	'UNLOCK_TOPIC'	=> 'Desbloquear topic',
	'VIEW_INFO'	=> 'Detalles',
	'VIEW_NEXT_TOPIC'	=> 'Siguiente topic',
	'VIEW_PREVIOUS_TOPIC'	=> 'Topic previo',
	'VIEW_RESULTS'	=> 'Ver resultados',
	'VIEW_TOPIC_POST'	=> '1 post',
	'VIEW_TOPIC_POSTS'	=> '%d posts',
	'VIEW_UNREAD_POST'	=> 'Primer post sin leer',
	'VISIT_WEBSITE'	=> 'WWW',
	'VOTE_SUBMITTED'	=> 'Tu voto ha sido enviado',
	'WROTE'	=> 'escribió',
));

?>