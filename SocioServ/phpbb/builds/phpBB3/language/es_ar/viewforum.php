<?php
/** 
*
* viewforum.php [Spanish [es_AR]]
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
	'ACTIVE_TOPICS'	=> 'Topics activos',
	'ANNOUNCEMENTS'	=> 'Anuncios',
	'FORUM_PERMISSIONS'	=> 'Permisos del foro',
	'ICON_ANNOUNCEMENT'	=> 'Anuncio',
	'ICON_STICKY'	=> 'Fijo',
	'LOGIN_NOTIFY_FORUM'	=> 'Has sido notificado sobre este foro, por favor ingresá para verlo.',
	'MARK_TOPICS_READ'	=> 'Marcar topics como leídos',
	'MOVED_TOPIC'	=> 'Topic movido',
	'NEW_POSTS_HOT'	=> 'Posts nuevos [ Popular ]',
	'NEW_POSTS_LOCKED'	=> 'Posts nuevos [ Bloqueado ]',
	'NO_NEW_POSTS_HOT'	=> 'No hay posts nuevos [ Popular ]',
	'NO_NEW_POSTS_LOCKED'	=> 'No hay posts nuevos [ Bloqueado ]',
	'NO_READ_ACCESS'	=> 'No tenés los permisos requeridos para leer topics en este foro.',
	'POST_FORUM_LOCKED'	=> 'El foro está bloqueado',
	'TOPICS_MARKED'	=> 'Los topics de este foro han sido marcados como leídos',
	'VIEW_FORUM'	=> 'Ver foro',
	'VIEW_FORUM_TOPIC'	=> '1 topic',
	'VIEW_FORUM_TOPICS'	=> '%d topics',
));

?>