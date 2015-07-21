<?php
/** 
*
* acp_attachments.php [Spanish [es_AR]]
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Aquí podés configurar los principales parámetros para adjuntos y las categorías especiales asociadas.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'	=> 'Aquí podés agregar, borrar, modificar o deshabilitar los grupos de extensiones. Opciones adicionales incluyen su asignación a una categría especial, cambiar el mecanismo de descarga y definir un ícono que se mostrará delante del adjunto que pertenezca al grupo.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'	=> 'Aquí podés administrar las extensiones permitidas. Para activar las extensiones, por favor andá al panel de administración de grupos de extensiones. Recomendamos encarecidamente no permitir extenciones de scripts (tal como <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, y así sucesivamente…)',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Aquí podés ver que archivos estan en la carpeta de uploads sin ser asignados a ningún post. Esto ocurre generalmente si el usuario adjunta un archivo pero no envía el post. Podés borrar estos archivos o asignarlos a un post existente. Esto requiere de un ID de post válido, tenés que determinarlo por tu cuenta. Esta utilidad es principalmente para aquellas personas que quieren subir archivos (por lo general grandes) con otro programa (p.ej. ftp) y asignarlos a un post ya existente.',
	'ADD_EXTENSION'	=> 'Agregar extensión',
	'ADD_EXTENSION_GROUP'	=> 'Agregar grupo de extensiones',
	'ADMIN_UPLOAD_ERROR'	=> 'Errores mientras tratabas de adjuntar un archivo: %s',
	'ALLOWED_FORUMS'	=> 'Foros permitidos',
	'ALLOWED_FORUMS_EXPLAIN'	=> 'Habilitado postear las extensiones asignadas al foro seleccionado',
	'ALLOW_ATTACHMENTS'	=> 'Permitir adjuntos',
	'ALLOW_ALL_FORUMS'	=> 'Permitir todos los Foros',
	'ALLOW_IN_PM'	=> 'Permitir en Mensajes Privados',
	'ALLOW_PM_ATTACHMENTS'	=> 'Permitir adjuntos en Mensajes Privados',
	'ALLOW_SELECTED_FORUMS'	=> 'Solamente los Foros seleccionados debajo',
	'ASSIGNED_EXTENSIONS'	=> 'Extensiones asignadas',
	'ASSIGNED_GROUP'	=> 'Grupo de extensiones asignado',
	'ATTACH_EXTENSIONS_URL'	=> 'Extensiones',
	'ATTACH_EXT_GROUPS_URL'	=> 'Grupos de extensiones',
	'ATTACH_MAX_FILESIZE'	=> 'Tamaño máximo',
	'ATTACH_MAX_FILESIZE_EXPLAIN'	=> 'Tamaño máximo de cada archivo, 0 significa ilimitado.',
	'ATTACH_MAX_PM_FILESIZE'	=> 'Máximo por usuario',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Máximo en disco disponible por usuario para adjuntos en Mensajes Privados, 0 significa ilimitado.',
	'ATTACH_ORPHAN_URL'	=> 'Adjuntos huérfanos',
	'ATTACH_POST_ID'	=> 'Post ID',
	'ATTACH_QUOTA'	=> 'Máximo total para adjuntos',
	'ATTACH_QUOTA_EXPLAIN'	=> 'Máximo en disco disponible para adjuntos en todo el Sitio, 0 significa ilimitado.',
	'ATTACH_TO_POST'	=> 'Adjuntar archivo a post',
	'CAT_FLASH_FILES'	=> 'Archivos Flash',
	'CAT_IMAGES'	=> 'Imágenes',
	'CAT_QUICKTIME_FILES'	=> 'Archivos Quicktime',
	'CAT_RM_FILES'	=> 'Archivos RealMedia',
	'CAT_WM_FILES'	=> 'Archivos Windows Media',
	'CREATE_GROUP'	=> 'Crear nuevo grupo',
	'CREATE_THUMBNAIL'	=> 'Crear mini imágen',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Crear imágen miniatura siempre que sea posible.',
	'DEFINE_ALLOWED_IPS'	=> 'Definir IPs/hostnames permitidos',
	'DEFINE_DISALLOWED_IPS'	=> 'Definir IPs/hostnames no permitidos',
	'DOWNLOAD_ADD_IPS_EXPLAIN'	=> 'Para especificar varias IPs o hostnames diferentes ingresá cada una en una nueva línea. Para especificar un rango de direcciones IP separá el inicio y el final con un guión (-), para especificar un comodín usá *',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Podés remover (o des-excluir) múltiples direcciones IP al mismo tiempo usando la combinación apropiada de ratón y teclado para tu navegador (p.ej. Ctrl+Click). Las IPs <em>excluidas</em> están en negrita.',
	'DISPLAY_INLINED'	=> 'Mostrar imágenes',
	'DISPLAY_INLINED_EXPLAIN'	=> 'Si elegís "Sin imágen" los adjuntos se mostrarán como un enlace.',
	'DISPLAY_ORDER'	=> 'Mostrar adjuntos ordenados',
	'DISPLAY_ORDER_EXPLAIN'	=> 'Muestra los adjuntos ordenados por fecha.',
	'EDIT_EXTENSION_GROUP'	=> 'Editar grupo de extensiones',
	'EXCLUDE_ENTERED_IP'	=> 'Habilitalo para excluir la IP/hostname ingresada.',
	'EXCLUDE_FROM_ALLOWED_IP'	=> 'Excluir IP de las IPs/hostnames permitidas',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Excluir IP de las IPs/hostnames no permitidas',
	'EXTENSIONS_UPDATED'	=> 'Extensiones actualizadas con exitosamente',
	'EXTENSION_EXIST'	=> 'La extensión %s ya existe',
	'EXTENSION_GROUP'	=> 'Grupo de extensiones',
	'EXTENSION_GROUPS'	=> 'Grupos de extensiones',
	'EXTENSION_GROUP_DELETED'	=> 'Grupo de extensiones borrado exitosamente.',
	'EXTENSION_GROUP_EXIST'	=> 'El grupo de extensiones %s ya existe',
	'GO_TO_EXTENSIONS'	=> 'Ir a la sección de administración de extensiones',
	'GROUP_NAME'	=> 'Nombre del Grupo',
	'IMAGE_LINK_SIZE'	=> 'Dimensiones de la imágen enlazada',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Mostrar la imagen adjunta como un enlace si es mas grande. 0px por 0px significa ilimitado.',
	'IMAGICK_PATH'	=> 'Ruta a Imagemagick',
	'IMAGICK_PATH_EXPLAIN'	=> 'Ruta completa al programa imagemagick, p.ej. <samp>/usr/bin/</samp>',
	'MAX_ATTACHMENTS'	=> 'Max adjuntos por post',
	'MAX_ATTACHMENTS_PM'	=> 'Max adjuntos por Mensaje Privado',
	'MAX_EXTGROUP_FILESIZE'	=> 'Tamaño máximo',
	'MAX_IMAGE_SIZE'	=> 'Dimensiones máximas',
	'MAX_IMAGE_SIZE_EXPLAIN'	=> 'Dimensiones máximas de la imagen adjunta. 0px por 0px significa ilimitado.',
	'MAX_THUMB_WIDTH'	=> 'Ancho máximo de la mini-imágen en pixeles',
	'MAX_THUMB_WIDTH_EXPLAIN'	=> 'La mini-imágen generada no excederá este ancho',
	'MIN_THUMB_FILESIZE'	=> 'Tamaño mínimo para mini-imágen',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'No crear mini-imágen para imágenes mas pequeñas que esto.',
	'MODE_INLINE'	=> 'Modo Inline',
	'MODE_PHYSICAL'	=> 'Modo Físico',
	'NOT_ALLOWED_IN_PM'	=> 'No permitido en Mensajes Privados',
	'NOT_ASSIGNED'	=> 'No asignado',
	'NO_EXT_GROUP'	=> 'Ninguno',
	'NO_EXT_GROUP_NAME'	=> 'No ingresaste el nombre del Grupo',
	'NO_EXT_GROUP_SPECIFIED'	=> 'No especificaste Grupo de Exensiones.',
	'NO_FILE_CAT'	=> 'Ninguno',
	'NO_IMAGE'	=> 'Sin imágen',
	'NO_THUMBNAIL_SUPPORT'	=> 'El soporte para mini-imágen ha sido deshabilitado porque no encontré la librería GD ni el programa imagemagick.',
	'NO_UPLOAD_DIR'	=> 'La carpeta de uploads que especificaste no existe.',
	'NO_WRITE_UPLOAD'	=> 'La carpeta de uploads que especificaste no se puede escribir. Por favor cambiá los permisos en el servidor.',
	'ONLY_ALLOWED_IN_PM'	=> 'Solamente permitido en Mensajes Privados',
	'ORDER_ALLOW_DENY'	=> 'Permitir',
	'ORDER_DENY_ALLOW'	=> 'Negar',
	'REMOVE_ALLOWED_IPS'	=> 'Remover o des-excluir IPs/hostnames <em>permitidas</em>',
	'REMOVE_DISALLOWED_IPS'	=> 'Remover o des-excluir IPs/hostnames <em>no permitidas</em>',
	'SEARCH_IMAGICK'	=> 'Buscar Imagemagick',
	'SECURE_ALLOW_DENY'	=> 'Lista Permitidos/No permitidos',
	'SECURE_ALLOW_DENY_EXPLAIN'	=> 'Cuando está habilitada la Descarga Segura cambia el comportaminto por omisión de la Lista Permitidos/No permitidos de <strong>lista blanca</strong> (Permitido) a <strong>lista negra</strong> (No permitido)',
	'SECURE_DOWNLOADS'	=> 'Habilitar Descarga Segura',
	'SECURE_DOWNLOADS_EXPLAIN'	=> 'Con esta opción habilitada, las descargas se limitan a las IP’s/hostnames que definas.',
	'SECURE_DOWNLOAD_NOTICE'	=> 'Descarga Segura no está habilitada. Los parámetros debajo se aplicarán después de habilitarla.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'	=> 'La lista de IP ha sido actualizada exitosamente.',
	'SECURE_EMPTY_REFERRER'	=> 'Permitir referrer vacío',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Descarga Segura está basada en referrers. Querés permitir las descargas para aquellos que omitan sus referrers?',
	'SETTINGS_CAT_IMAGES'	=> 'Parámetros de Categoría de Imágen',
	'SPECIAL_CATEGORY'	=> 'Categoría Especial',
	'SPECIAL_CATEGORY_EXPLAIN'	=> 'Las Categorías Especiales son diferentes formas de presentar los posts.',
	'SUCCESSFULLY_UPLOADED'	=> 'Subido exitosamente',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Grupo de extensiones agregado exitosamente',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Grupo de extensiones actualizado exitosamente',
	'UPLOADING_FILES'	=> 'Subiendo archivos',
	'UPLOADING_FILE_TO'	=> 'Subiendo archivo “%1$s” al post número %2$d…',
	'UPLOAD_DENIED_FORUM'	=> 'No tenés permisos para subir archivos al foro “%s”',
	'UPLOAD_DIR'	=> 'Carpeta de uploads',
	'UPLOAD_DIR_EXPLAIN'	=> 'Ruta donde se guardan los adjuntos.',
	'UPLOAD_ICON'	=> 'Icono de subida',
	'UPLOAD_NOT_DIR'	=> 'La ubicación que especificaste no parece ser una carpeta.',
	'ALLOWED_IN_PM_POST'	=> 'Permitido',
	'ATTACH_ID'	=> 'ID',
	'NOT_ALLOWED_IN_PM_POST'	=> 'No permitido',
));

?>