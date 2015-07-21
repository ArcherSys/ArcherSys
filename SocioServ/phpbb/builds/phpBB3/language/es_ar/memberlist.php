<?php
/** 
*
* memberlist.php [Spanish [es_AR]]
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
	'ABOUT_USER'	=> 'Perfil',
	'ACTIVE_IN_FORUM'	=> 'Foro más activo',
	'ACTIVE_IN_TOPIC'	=> 'Topic más activo',
	'ADD_FOE'	=> 'Agregar indeseable',
	'ADD_FRIEND'	=> 'Agregar amigo',
	'AFTER'	=> 'Después',
	'BEFORE'	=> 'Antes',
	'CC_EMAIL'	=> 'Enviar copia de este email a si mismo',
	'CONTACT_USER'	=> 'Contacto',
	'DEST_LANG'	=> 'Idioma',
	'DEST_LANG_EXPLAIN'	=> 'Selecciona un idioma apropiado (si está disponible) para el destinatario de este mensaje.',
	'EMAIL_BODY_EXPLAIN'	=> 'Este mensaje será enviado como texto plano, no incluyas HTML o BBCode. La dirección del remitente será tu dirección de email.',
	'EMAIL_DISABLED'	=> 'Lo siento, todas las funciones de email han sido deshabilitadas.',
	'EMAIL_SENT'	=> 'El email ha sido enviado.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Este mensaje será enviado como texto plano, no incluyas HTML o BBCode. Por favor nota que el topic ya ha sido incluido en el cuerpo del mensaje. La dirección del remitente será tu dirección de email.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Debes proporcionar una dirección de email válida para el destinatario.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Debes ingresar el texto del mensaje.',
	'EMPTY_NAME_EMAIL'	=> 'Debes ingresar el nombre real del destinatario.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Debes especificar un tema para el email.',
	'EQUAL_TO'	=> 'Igual a',
	'FIND_USERNAME_EXPLAIN'	=> 'Usa este formulario para buscar usuarios específicos. No necesitás llenar todos los campos. Para indicar datos parciales usa * como comodín. Cuando ingreses fechas usa el formato <kbd>YYYY-MM-DD</kbd>, p.ej. <samp>2004-02-29</samp>. Usa los  checkboxes para seleccionar uno o mas usuarios (Se aceptan varios usuarios dependiendo del formulario en sí mismo) y click en el botón Seleccionar Marcados para volver al foro previo.',
	'FLOOD_EMAIL_LIMIT'	=> 'No podés enviar otro email tan pronto. Por favor intentá más tarde.',
	'GROUP_LEADER'	=> 'Líder de grupo',
	'HIDE_MEMBER_SEARCH'	=> 'Buscar miembros ocultos',
	'IM_ADD_CONTACT'	=> 'Agregar Contacto',
	'IM_AIM'	=> 'Por favor nota que necesitas AOL Instant Messenger instalado para usar esto.',
	'IM_AIM_EXPRESS'	=> 'AIM Express',
	'IM_DOWNLOAD_APP'	=> 'Bajar programa',
	'IM_ICQ'	=> 'Por favor nota que los usuarios pueden haber elegido no recibir mensajes instantáneos no solicitados.',
	'IM_JABBER'	=> 'Por favor nota que los usuarios pueden haber elegido no recibir mensajes instantáneos no solicitados.',
	'IM_JABBER_SUBJECT'	=> 'Este es un mensaje automático, por favor no respondas! Mensaje del usuario %1$s en %2$s',
	'IM_MESSAGE'	=> 'Tu mensaje',
	'IM_MSNM'	=> 'Por favor nota que necesitas Windows Messenger instalado para usar esto.',
	'IM_MSNM_BROWSER'	=> 'Tu navegador no soporta esto.',
	'IM_MSNM_CONNECT'	=> 'MSNM no conectado.\\nTienes que conectar a MSNM para continuar.',
	'IM_NAME'	=> 'Tu Nombre',
	'IM_NO_JABBER'	=> 'Disculpas, mensajes deirectos de usuarios Jabber no es soportado por este servidor. Necesitas un cliente Jabber instalado en tu sistema para contactar al destinatario.',
	'IM_RECIPIENT'	=> 'Destinatario',
	'IM_SEND'	=> 'Enviar',
	'IM_SEND_MESSAGE'	=> 'Enviar mensaje',
	'IM_SENT_JABBER'	=> 'Tu mensaje a %1$s ha sido enviado con éxito.',
	'IM_USER'	=> 'Enviar un mensaje instantáneo',
	'LAST_ACTIVE'	=> 'Ultima vez activo',
	'LESS_THAN'	=> 'Menos que',
	'LIST_USER'	=> '1 usuario',
	'LIST_USERS'	=> '%d usuarios',
	'LOGIN_EXPLAIN_LEADERS'	=> 'El administrador del Sitio requiere que estés registrado y hayas ingresado para ver la nómina del equipo.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'El administrador del Sitio requiere que estés registrado y hayas ingresado para acceder a la lista de miembros.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'El administrador del Sitio requiere que estés registrado y hayas ingresado para buscar usuarios.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'El administrador del Sitio requiere que estés registrado y hayas ingresado para ver perfiles.',
	'MORE_THAN'	=> 'Mas que',
	'NO_EMAIL'	=> 'No tenés permitido enviar email a este usuairo.',
	'NO_VIEW_USERS'	=> 'No estás autorizado para ver la lista de miembros o perfiles.',
	'ORDER'	=> 'Orden',
	'OTHER'	=> 'Otro',
	'POST_IP'	=> 'Enviado desde IP/dominio',
	'RANK'	=> 'Rango',
	'REAL_NAME'	=> 'Nombre del destinatario',
	'RECIPIENT'	=> 'Destinatario',
	'REMOVE_FOE'	=> 'Remover indeseable',
	'REMOVE_FRIEND'	=> 'Remover amigo',
	'SEARCH_USER_POSTS'	=> 'Buscar posts del usuario',
	'SELECT_MARKED'	=> 'Seleccionar marcados',
	'SELECT_SORT_METHOD'	=> 'Seleccioná método de orden',
	'SEND_IM'	=> 'Mensaje instantáneo',
	'SEND_MESSAGE'	=> 'Mensaje',
	'SORT_EMAIL'	=> 'Email',
	'SORT_LAST_ACTIVE'	=> 'Ultimo activo',
	'SORT_POST_COUNT'	=> 'Contar post',
	'USERNAME_BEGINS_WITH'	=> 'Usuarios que comienzan con',
	'USER_ADMIN'	=> 'Modificar Usuario',
	'USER_FORUM'	=> 'Estadísticas de usuario',
	'USER_ONLINE'	=> 'Conectado',
	'USER_PRESENCE'	=> 'Presente en el foro',
	'VIEWING_PROFILE'	=> 'Viendo perfil - %s',
	'VISITED'	=> 'Ultima visita',
	'WWW'	=> 'Website',
	'ALL'	=> 'Todos',
	'SEND_AIM_MESSAGE'	=> 'Enviar mensaje AIM',
	'SEND_ICQ_MESSAGE'	=> 'Enviar mensaje ICQ',
	'SEND_JABBER_MESSAGE'	=> 'Enviar mensaje Jabber',
	'SEND_MSNM_MESSAGE'	=> 'Enviar mensaje MSNM/WLM',
	'SEND_YIM_MESSAGE'	=> 'Enviar mensaje YIM',
	'EMPTY_MESSAGE_IM'		=> 'Tenés que ingresar un mensaje para enviar.',	
	'IM_NO_DATA'			=> 'No hay información de contacto disponible para este usuario.',
));

?>
