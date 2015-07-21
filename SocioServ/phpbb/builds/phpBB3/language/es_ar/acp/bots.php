<?php
/** 
*
* acp_bots.php [Spanish [es_AR]]
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
	'BOTS'	=> 'Administrar robots',
	'BOTS_EXPLAIN'	=> 'Robots o Spiders son agentes automatizados en su mayoría utilizados por los buscadores para actualizar sus bases de datos. Ya que raramente hacen un uso apropiado de las sesiones pueden alterar los contadores de visitas, incrementar la carga y a veces indexar sitios incorrectamente. Acá podés definir un tipo especial de usuario para sobrellevar esos problemas.',
	'BOT_ACTIVATE'	=> 'Activar',
	'BOT_ACTIVE'	=> 'Robot activo',
	'BOT_ADD'	=> 'Agregar robot',
	'BOT_ADDED'	=> 'Nuevo robot agregado exitosamente.',
	'BOT_AGENT'	=> 'Coincidir',
	'BOT_AGENT_EXPLAIN'	=> 'Palabra coincidente con el nombre del robot, se permiten coincidencias parciales.',
	'BOT_DEACTIVATE'	=> 'Desactivar',
	'BOT_DELETED'	=> 'Robot borrado exitosamente.',
	'BOT_EDIT'	=> 'Editar robots',
	'BOT_EDIT_EXPLAIN'	=> 'Acá podes agregar o editar un robot existente. Podés definir un nombre y/o una o más direcciones de IP (o rango de direcciones) que coincidan. Hacelo con cuidado. También podés especificar un estilo y un idioma con los cuales el robot "verá" el Sitio. Puede ayudarte a reducir ancho de banda setear un estilo simple para robots. Recordá setear los permisos apropiados para el grupo Robots.',
	'BOT_LANG'	=> 'Idioma para el robot',
	'BOT_LANG_EXPLAIN'	=> 'Idioma presentado al robot mientras navega.',
	'BOT_LAST_VISIT'	=> 'Ultima visita',
	'BOT_IP'	=> 'Direccion de IP del robot',
	'BOT_IP_EXPLAIN'	=> 'Se permiten coincidencias parciales, separá las direcciones con una coma.',
	'BOT_NAME'	=> 'Nombre del robot',
	'BOT_NAME_EXPLAIN'	=> 'Solo se emplea como información interna.',
	'BOT_NEVER'	=> 'Nunca',
	'BOT_STYLE'	=> 'Estilo para el robot',
	'BOT_STYLE_EXPLAIN'	=> 'El estilo en que el robot "verá" el Sitio.',
	'BOT_UPDATED'	=> 'Robot actualizado exitosamente.',
	'BOT_VIS'	=> 'Robot visible',
	'BOT_VIS_EXPLAIN'	=> 'Permite al robot ser visto por todos los usuarios en la lista conectados.',
	'ERR_BOT_AGENT_MATCHES_UA'	=> 'La palabra coincidente que proporcionaste es similar a una que ya estás usando. Por favor cambiala.',
	'ERR_BOT_NO_IP'	=> 'La dirección de IP que proporcionaste es inválida o no se puede resolver el nombre del host.',
	'ERR_BOT_NO_MATCHES'	=> 'Tenes que proporcionar al menos una palabra o IP que coincidan con este robot.',
	'NO_BOT'	=> 'No encontré ningun robot con el ID especificado.',
	'NO_BOT_GROUP'	=> 'No puedo encontrar el grupo Robots.',
	'BOT_NAME_TAKEN'	=> 'El nombre ya está en uso en tu Sitio y no puede ser utilizado para el Bot.',
));

?>
