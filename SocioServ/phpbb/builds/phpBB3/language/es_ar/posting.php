<?php
/** 
*
* posting.php [Spanish [es_AR]]
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
	'ADD_ATTACHMENT'	=> 'Subir adjunto',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Si querés adjuntar uno o más archivos ingresá los detalles debajo',
	'ADD_FILE'	=> 'Agregar archivo',
	'ADD_POLL'	=> 'Agregar encuesta',
	'ADD_POLL_EXPLAIN'	=> 'Si no querés agregar una encuesta a tu topic dejá los campos en blanco',
	'ALREADY_DELETED'	=> 'Disculpas, este mensaje ya ha sido borrado.',
	'ATTACH_QUOTA_REACHED'	=> 'Disculpas, la cuota de adjuntos del Sitio está a tope.',
	'ATTACH_SIG'	=> 'Adjuntar firma (las firmas pueden modificarse en el Panel de Control)',
	'BBCODE_B_HELP'	=> 'Texto en negrita: [b]texto[/b]  (alt+b)',
	'BBCODE_C_HELP'	=> 'Mostrar código: [code]código[/code]  (alt+c)',
	'BBCODE_E_HELP'	=> 'Lista: Agregar elemento a la lista',
	'BBCODE_F_HELP'	=> 'Tamaño de fuente: [size=x-small]texto pequeño[/size]',
	'BBCODE_IS_OFF'	=> '%sBBCode%s está <em>OFF</em>',
	'BBCODE_IS_ON'	=> '%sBBCode%s está <em>ON</em>',
	'BBCODE_I_HELP'	=> 'Texto Itálica: [i]texto[/i]  (alt+i)',
	'BBCODE_L_HELP'	=> 'Lista: [list]texto[/list]  (alt+l)',
	'BBCODE_O_HELP'	=> 'Lista ordenada: [list=]texto[/list]  (alt+o)',
	'BBCODE_P_HELP'	=> 'Inserta imagen: [img]http://imagen_url[/img]  (alt+p)',
	'BBCODE_Q_HELP'	=> 'Citar texto: [quote]texto[/quote]  (alt+q)',
	'BBCODE_S_HELP'	=> 'Color de fuente: [color=red]texto[/color]  Tip: podés usar código de color=#FF0000',
	'BBCODE_U_HELP'	=> 'Texto subrayado: [u]texto[/u]  (alt+u)',
	'BBCODE_W_HELP'	=> 'Insertar URL: [url]http://url[/url] ó [url=http://url]URL texto[/url]  (alt+w)',
	'BBCODE_D_HELP'	=> 'Flash: [flash=width,height]http://url[/flash]  (alt+d)',
	'BUMP_ERROR'	=> 'No podés activar este topic tan pronto.',
	'CANNOT_DELETE_REPLIED'	=> 'Disculpas, solamente podés borrar posts que no hayan sido respondido.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Este post ha sido bloqueado. Ya no podés editar este post.',
	'CANNOT_EDIT_TIME'	=> 'Ya no podés editar o borrar este post',
	'CANNOT_POST_ANNOUNCE'	=> 'Disculpas, no podes publicar anuncios.',
	'CANNOT_POST_STICKY'	=> 'Disculpas, no podes publicar topics fijos.',
	'CHANGE_TOPIC_TO'	=> 'Cambiar tipo de topic a',
	'CLOSE_TAGS'	=> 'Cerrar tags',
	'CURRENT_TOPIC'	=> 'Topic actual',
	'DELETE_FILE'	=> 'Borrar archivo',
	'DELETE_MESSAGE'	=> 'Borrar mensaje',
	'DELETE_MESSAGE_CONFIRM'	=> '¿Estás seguro que querés borrar este mensaje?',
	'DELETE_OWN_POSTS'	=> 'Disculpas, sólo podés borrar tus propios posts.',
	'DELETE_POST_CONFIRM'	=> '¿Estás seguro que querés borrar este post?',
	'DELETE_POST_WARN'	=> 'Una vez borrado el post no puede recuperarse',
	'DISABLE_BBCODE'	=> 'Deshabilitar BBCode',
	'DISABLE_MAGIC_URL'	=> 'No parsear automáticamente las URLs',
	'DISABLE_SMILIES'	=> 'Deshabilitar smilies',
	'DISALLOWED_EXTENSION'	=> 'La extensión %s no está permitida',
	'DRAFT_LOADED'	=> 'Borrador subido al área de posteo, podrías querer terminar tu post ahora.<br />Tu borrador será borrado después de enviar el post.',
	'DRAFT_SAVED'	=> 'Borrador guardado con éxito.',
	'DRAFT_TITLE'	=> 'Título del borrador',
	'EDIT_REASON'	=> 'Razón para editar este post',
	'EMPTY_FILEUPLOAD'	=> 'el archivo subido está vacío',
	'EMPTY_MESSAGE'	=> 'Tenés que enviar un mensaje cuando posteás.',
	'EMPTY_REMOTE_DATA'	=> 'No puedo subir el archivo, por favor, intentá subirlo manualmente.',
	'FLASH_IS_OFF'	=> '[flash] está <em>OFF</em>',
	'FLASH_IS_ON'	=> '[flash] está <em>ON</em>',
	'FLOOD_ERROR'	=> 'No podés enviar otro post tan pronto.',
	'FONT_COLOR'	=> 'Color de fuente',
	'FONT_HUGE'	=> 'Enorme',
	'FONT_LARGE'	=> 'Grande',
	'FONT_NORMAL'	=> 'Normal',
	'FONT_SIZE'	=> 'Tamaño de fuente',
	'FONT_SMALL'	=> 'Pqueño',
	'FONT_TINY'	=> 'Diminuto',
	'GENERAL_UPLOAD_ERROR'	=> 'No puedo subir el adjunto a %s',
	'IMAGES_ARE_OFF'	=> '[img] está <em>OFF</em>',
	'IMAGES_ARE_ON'	=> '[img] está <em>ON</em>',
	'INVALID_FILENAME'	=> '%s es un nombre de archivo inválido',
	'LOAD'	=> 'Cargar',
	'LOAD_DRAFT'	=> 'Cargar borrador',
	'LOAD_DRAFT_EXPLAIN'	=> 'Acá podés selecccionar el borrador que quieras continuar redactando. Tu post actual será cancelado, el contenido será borrado. Puedes ver, borrar y editar borradores en tu Panel de Control de Usuario.',
	'LOGIN_EXPLAIN_BUMP'	=> 'Necesitas ingresar para activar topics en este foro.',
	'LOGIN_EXPLAIN_DELETE'	=> 'Necesitas ingresar para borrar posts en este foro.',
	'LOGIN_EXPLAIN_POST'	=> 'Necesitas ingresar para postear within en este foro.',
	'LOGIN_EXPLAIN_QUOTE'	=> 'Necesitas ingresar para citar posts en este foro.',
	'LOGIN_EXPLAIN_REPLY'	=> 'Necesitas ingresar para repsponder topics en este foro.',
	'MAX_FONT_SIZE_EXCEEDED'	=> 'Sólo podés usar fuentes de un tamaño hasta %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Tus archivos flash sólo pueden ser hasta %1$d pixeles de alto.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Tus archivos flash sólo pueden ser hasta %1$d pixeles de ancho.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Tus imágenes sólo pueden ser hasta %1$d pixeles de alto.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Tus imágenes sólo pueden ser hasta %1$d pixeles de ancho.',
	'MESSAGE_BODY_EXPLAIN'	=> 'Ingresa tu mensaje aquí, no puede tener más de <strong>%d</strong> caracteres.',
	'MESSAGE_DELETED'	=> 'Este mensaje ha sido borrado con éxito',
	'MORE_SMILIES'	=> 'Ver más smilies',
	'NOTIFY_REPLY'	=> 'Enviarme un email cuando un post es respondido',
	'NOT_UPLOADED'	=> 'El archivo no se pudo subir.',
	'NO_DELETE_POLL_OPTIONS'	=> 'No podés borrar las opciones existentes de la encuesta',
	'NO_PM_ICON'	=> 'Sin ícono',
	'NO_POLL_TITLE'	=> 'Tenés que ponerle un título a la encuesta',
	'NO_POST'	=> 'El post requerido no existe.',
	'NO_POST_MODE'	=> 'No se especificó modo de post',
	'PARTIAL_UPLOAD'	=> 'El archivo fué sólo parcialmente subido',
	'PHP_SIZE_NA'	=> 'El tamaño del archivo adjunto es muy grande.<br />No puedo determinar el tamaño máximo definido por PHP en php.ini.',
	'PHP_SIZE_OVERRUN'	=> 'El tamaño del archivo adjunto es muy grande, el máximo a subir es %d MB.<br />Por favor nota que está definido in php.ini no puede ser cambiado.',
	'PLACE_INLINE'	=> 'Intercalar',
	'POLL_DELETE'	=> 'Borrar encuesta',
	'POLL_FOR'	=> 'Hacer encuesta para',
	'POLL_FOR_EXPLAIN'	=> 'Ingresa 0 o dejá en blanco para una encuesta sin límite de tiempo',
	'POLL_MAX_OPTIONS'	=> 'Opciones por usuario',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Este es el número de opciones que cada usuario puede seleccionar cuando vota.',
	'POLL_OPTIONS'	=> 'Opciones de encuesta',
	'POLL_OPTIONS_EXPLAIN'	=> 'Coloca cada opción en una nueva línea. Podés ingresar hasta <strong>%d</strong> opciones',
	'POLL_QUESTION'	=> 'Pregunta de la encuesta',
	'POLL_VOTE_CHANGE'	=> 'Permitir cambiar el voto',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Si está habilitado, los usuarios podrán cambiar su voto.',
	'POSTED_ATTACHMENTS'	=> 'Adjuntos posteados',
	'POST_CONFIRMATION'	=> 'Confirmación del post',
	'POST_CONFIRM_EXPLAIN'	=> 'Para prevenir posteos automaticos el administrador del Sitio requiere que ingreses un código de confirmación. El código es mostrado en la imagen que deberias ver debajo. If you are visually impaired or cannot otherwise read this code please contact the %sBoard Administrator%s.',
	'POST_DELETED'	=> 'Este post ha sido borrado con éxito',
	'POST_EDITED'	=> 'Este post ha sido editado exitosamente',
	'POST_EDITED_MOD'	=> 'Este post ha sido editado pero requiere aprobación',
	'POST_GLOBAL'	=> 'Global',
	'POST_ICON'	=> 'Icono del post',
	'POST_NORMAL'	=> 'Normal',
	'POST_REPLY'	=> 'Responder',
	'POST_REVIEW'	=> 'Revisar el post',
	'POST_REVIEW_EXPLAIN'	=> 'Al menos una revisión ha sido hecha a este post. Tal vez quieras volver a ver tu post.',
	'POST_STORED'	=> 'Este mensaje ha sido posteado con éxito',
	'POST_STORED_MOD'	=> 'El mensaje ha sido guardado pero requiere aprobación.',
	'POST_TOPIC'	=> 'Nuevo topic',
	'POST_TOPIC_AS'	=> 'Topic cómo',
	'PROGRESS_BAR'	=> 'Barra de progreso',
	'QUOTE_DEPTH_EXCEEDED'	=> 'Podés anidar sólo %1$d citas una dentro de otra.',
	'SAVE'	=> 'Guardar',
	'SAVE_DATE'	=> 'Guardado como',
	'SAVE_DRAFT'	=> 'Guardar borrador',
	'SAVE_DRAFT_CONFIRM'	=> 'Por favor nota que los borradores guardados solo incluyen el tema y el mensaje, cualquier otro elemento será removido. ¿Querés guardar tu borrador ahora?',
	'SMILIES'	=> 'Smilies',
	'SMILIES_ARE_OFF'	=> 'Smilies están <em>OFF</em>',
	'SMILIES_ARE_ON'	=> 'Smilies están <em>ON</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'	=> 'Fecha límita para Fijo/Anuncio',
	'STICK_TOPIC_FOR'	=> 'Fijar topic para',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Ingresa 0 o deja en blanco para un Fijo/Anuncio sin límite de tiempo',
	'STYLES_TIP'	=> 'Tip: Pueden aplicarse estilos rapidamente al texto seleccionado',
	'TOO_FEW_CHARS'	=> 'Tu mensaje contiene muy pocos caracteres.',
	'TOO_FEW_POLL_OPTIONS'	=> 'Tenés que ingresar al menos dos opciones para la encuesta',
	'TOO_MANY_ATTACHMENTS'	=> 'No podés agregar otro adjunto, %d es el máximo.',
	'TOO_MANY_CHARS'	=> 'Tu mensaje contiene demasiados caracteres.',
	'TOO_MANY_POLL_OPTIONS'	=> 'Intentas ingresar demasiadas opciones para la encuesta',
	'TOO_MANY_SMILIES'	=> 'Tu mensaje contiene demasiados smilies. El número máximo de smilies permitidos es %d.',
	'TOO_MANY_URLS'	=> 'Tu mensaje contiene demasiados URLs. El número máximo de URLs permitidas es %d.',
	'TOO_MANY_USER_OPTIONS'	=> 'No podés especificar mas opciones por usuario que la cantidad de opciones de la encuesta',
	'TOPIC_BUMPED'	=> 'El topic ha sido reactivado con éxito',
	'UNAUTHORISED_BBCODE'	=> 'No podés usar ciertos BBCodes: %s',
	'UNGLOBALISE_EXPLAIN'	=> 'Para volver este topic de global a normal, tenés que seleccionar el foro en el que querés mostrarlo.',
	'UPDATE_COMMENT'	=> 'Actualizar comentario',
	'URL_INVALID'	=> 'La URL que especificaste es inválida.',
	'URL_NOT_FOUND'	=> 'No puedo encontrar el archivo especificado.',
	'URL_IS_OFF'	=> '[url] está <em>OFF</em>',
	'URL_IS_ON'	=> '[url] está <em>ON</em>',
	'USER_CANNOT_BUMP'	=> 'No podés activar topics en este Foro',
	'USER_CANNOT_DELETE'	=> 'No podés borrar posts en este Foro',
	'USER_CANNOT_EDIT'	=> 'No podés editar posts en este Foro',
	'USER_CANNOT_REPLY'	=> 'No podés responder en este Foro',
	'USER_CANNOT_FORUM_POST'	=> 'No podés realizar esa operación en este Foro debido a que el tipo de Foro no lo soporta.',
	'VIEW_MESSAGE'	=> '%1$sVer el post enviado%2$s',
	'WRONG_FILESIZE'	=> 'El archivo es muy grande, el tamaño máximo permitido es %1d %2s',
	'WRONG_SIZE'	=> 'La imagen debe tener al menos %1$d pixeles de ancho, %2$d pixeles de alto y a lo sumo %3$d pixeles de ancho y %4$d pixeles de alto. La imagen enviada tiene %5$d pixeles de ancho y %6$d pixeles de alto.',
	'BBCODE_A_HELP'	=> 'Insertar adjunto: [attachment=]filename.ext[/attachment]',
	'BBCODE_LISTITEM_HELP'	=> 'Listar ítem: [*]text[/*]',
	'DRAFT_LOADED_PM'	=> 'Borrador subido en área de mensajes, podés terminarlo ahora.<br />Tu borrador será borrado después de enviar este mensaje privado.',
	'FONT_COLOR_HIDE'	=> 'Ocultar color de fuente',
	'POLL_TITLE_TOO_LONG'	=> 'El título de la encuesta debe tener menos de 100 caracteres.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'El título de la encuesta es demasiado largo, pensá en remover BBcode o caritas.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Ingresá cada opción en una nueva línea. Podés ingresar hasta <strong>%d</strong> opciones. Si agregás o quitás opciones se reiniciará la votación.',
	'TOO_MANY_CHARS_POST'		=> 'Tu mensaje tiene %1$d caracteres. El número máximo de caracteres permitidos es %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Tu firma tiene %1$d caracteres. El número máximo de caracteres permitidos es %2$d.',
	'POST_APPROVAL_NOTIFY'		=> 'Serás notificado cuando tu post haya sido aprobado.',
));

?>
