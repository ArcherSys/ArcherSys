<?php
/** 
*
* acp_ban.php [Spanish [es_AR]]
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
	'1_HOUR'	=> '1 hora',
	'30_MINS'	=> '30 minutos',
	'6_HOURS'	=> '6 horas',
	'ACP_BAN_EXPLAIN'	=> 'Aca podes controlar las exclusiones de usuarios por nombre, IP o dirección de email. Este método impide a un usuario acceder a cualquier parte del Sitio. Si querés podés dar una razón breve (255 caracteres) para la exclusión. Se mostrará en el registro del admin. También podés especificar la duración de la exclusión. Si querés que la exclusión termine en una fecha específica en lugar de despues de un periodo de tiempo seleccioná <u>Hasta</u> en la duración de la exclusión e ingresá la fecha en el formato aaaa-mm-dd.',
	'BAN_EXCLUDE'	=> 'Quitar exclusión',
	'BAN_LENGTH'	=> 'Duración de la exclusión',
	'BAN_REASON'	=> 'Razón de la exclusión',
	'BAN_GIVE_REASON'	=> 'Explicación de la razón dela exclusión',
	'BAN_UPDATE_SUCCESSFUL'	=> 'La lista de exclusiones ha sido actualizada exitosamente.',
	'EMAIL_BAN'	=> 'Excluir una o más direcciones de email',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Habilitá esto para quitar la dirección de email ingresada de todos las exclusiones actuales.',
	'EMAIL_BAN_EXPLAIN'	=> 'Para expecificar más de una dirección de email ingresá cada una en una nueva linea. Para direcciones parciales usá * como comodín, p.ej. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, etc.',
	'EMAIL_NO_BANNED'	=> 'No hay direcciones de email excluidas',
	'EMAIL_UNBAN'	=> 'Levantar exclusión de emails',
	'EMAIL_UNBAN_EXPLAIN'	=> 'Podés quitar la exclusión a múltiples direcciones de email al mismo tiempo usando la combinación apropiada de ratón y teclado para tu navegador (p.ej. Ctrl+Click). Las direcciones de email <em>excluidas</em> están en negrita.',
	'IP_BAN'	=> 'Excluir una o más IPs',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Habilitá esto para quitar la IP ingresada de todos las exclusiones actuales.',
	'IP_BAN_EXPLAIN'	=> 'Para expecificar más de una IP ingresá cada una en una nueva linea. Para especificar un rango de direcciones IP separá el inicio y el final con un guión (-), para especificar un comodín usá *',
	'IP_HOSTNAME'	=> 'Direcciones IP o hostnames',
	'IP_NO_BANNED'	=> 'No hay direcciones IP excluidas',
	'IP_UNBAN'	=> 'Levantar exclusión de IPs',
	'IP_UNBAN_EXPLAIN'	=> 'Podés quitar la exclusión a múltiples direcciones IP al mismo tiempo usando la combinación apropiada de ratón y teclado para tu navegador (p.ej. Ctrl+Click). Las direcciones IP <em>excluidas</em> están en negrita.',
	'PERMANENT'	=> 'Permanente',
	'UNTIL'	=> 'Hasta',
	'USER_BAN'	=> 'Excluir uno o más nombres de usuario',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Habilitá esto para quitar el nombre de usuario ingresado de todos las exclusiones actuales.',
	'USER_BAN_EXPLAIN'	=> 'Para especificar más de un nombre de usuario ingresá cada uno en una nueva linea. Usá el link <u>Buscar un usuario</u> para encontrar y agreagr uno o más nombres de usuarios automáticamente.',
	'USER_NO_BANNED'	=> 'No hay nombres de usuario excluidos',
	'USER_UNBAN'	=> 'Levantar exclusión nombres de usuario',
	'USER_UNBAN_EXPLAIN'	=> 'Podés quitar la exclusión a múltiples nombres de usuario al mismo tiempo usando la combinación apropiada de ratón y teclado para tu navegador (p.ej. Ctrl+Click). Los nombres de usuario <em>excluidos</em> están en negrita.',
	'NOT_ALLOWED_IN_PM_POST'	=> 'No permitido',
	'LENGTH_BAN_INVALID'		=> 'La fecha debe tener el formato <kbd>YYYY-MM-DD</kbd>.',	
));

?>