<?php
/** 
*
* acp_email.php [Spanish [es_AR]]
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
	'ACP_MASS_EMAIL_EXPLAIN'	=> 'Aca podés enviar un email a todos los usuarios, o a los usuarios de un grupo específico. Para esto se enviará un email a la dirección administrativa proporcionada, con copia oculta a todos los receptores. Si el grupo de personas es muy grande por favor sé paciente despues de enviar y no detengas el proceso por la mitad. Es normal que un email masivo lleve algun tiempo, serás notificado cuando se complete el proceso',
	'ALL_USERS'	=> 'Todos los usuarios',
	'COMPOSE'	=> 'Escribir',
	'EMAIL_SEND_ERROR'	=> 'Hubo uno o más errores mientras enviaba el email. Por favor verificá el  %1$sLog de Errores%2$s para más detalles.',
	'EMAIL_SENT'	=> 'El mensaje ha sido enviado.',
	'EMAIL_SENT_QUEUE'	=> 'El mensaje ha sido aceptado para su envio.',
	'LOG_SESSION'	=> 'Registrar sesion de email en log de errores',
	'SEND_IMMEDIATELY'	=> 'Enviar de inmediato',
	'SEND_TO_GROUP'	=> 'Enviar a grupo',
	'SEND_TO_USERS'	=> 'Enviar a usuarios',
	'SEND_TO_USERS_EXPLAIN'	=> 'Ingresar nombres aquí invalida cualquier grupo seleccionado arriba. Ingresá cada nombre d eusuario en una nueva línea.',
	'MAIL_HIGH_PRIORITY'	=> 'Alto',
	'MAIL_LOW_PRIORITY'	=> 'Bajo',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'	=> 'Prioridad',
	'MASS_MESSAGE'	=> 'Tu mensaje',
	'MASS_MESSAGE_EXPLAIN'	=> 'Por favor notá que solo podes ingresar texto plano. Removeré cualquier código antes de enviar.',
	'NO_EMAIL_MESSAGE'	=> 'Tenés que ingresar un mensaje.',
	'NO_EMAIL_SUBJECT'	=> 'Tenés que especificar un tema para tu mensaje.',
));

?>