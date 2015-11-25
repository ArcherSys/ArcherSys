<?php
/** 
*
* acp_language.php [Spanish [es_AR]]
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
	'ACP_FILES'	=> 'Archivos de Admin',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Acá podés instalar/desinstalar paquetes de idiomas',
	'EMAIL_FILES'	=> 'Plantillas de emails',
	'FILE_CONTENTS'	=> 'Contenido de archivos',
	'FILE_FROM_STORAGE'	=> 'Archivo de carpeta storage',
	'HELP_FILES'	=> 'Archivos de Ayuda',
	'INSTALLED_LANGUAGE_PACKS'	=> 'Paquetes de idiomas instalados',
	'INVALID_LANGUAGE_PACK'	=> 'El paquete de idioma seleccionado parece no ser válido. Por favor verificalo y subilo de nuevo de ser necesario.',
	'INVALID_UPLOAD_METHOD'	=> 'El método seleccionado no es válido, por favor elegí otro.',
	'LANGUAGE_DETAILS_UPDATED'	=> 'Detalles del idioma actualizados exitosamente.',
	'LANGUAGE_ENTRIES'	=> 'Entradas',
	'LANGUAGE_ENTRIES_EXPLAIN'	=> 'Acá podes editar entradas ya existentes o aún no traducidas.<br /><strong>Nota:</strong> Una vez editado un archivo de idioma, los cambios serán guardados en una carpeta aparte para poder descargarlos. Los cambios no serán visibles para los usuarios hasta que reemplaces el archivo original en el servidor (subiéndolo).',
	'LANGUAGE_FILES'	=> 'Archivos de idioma',
	'LANGUAGE_KEY'	=> 'Código',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Este paquete de idioma ya está instalado.',
	'LANGUAGE_PACK_DELETED'	=> 'El paquete de idioma <strong>%1$s</strong> ha sido deshabilitado. Todos los usuarios de este idioma han sido reasignados al idioma por omision del Sitio.',
	'LANGUAGE_PACK_DETAILS'	=> 'Detalles',
	'LANGUAGE_PACK_INSTALLED'	=> 'El paquete de idioma <strong>%1$s</strong> ha sido instalado exitosamente.',
	'LANGUAGE_PACK_ISO'	=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'	=> 'Nombre local',
	'LANGUAGE_PACK_NAME'	=> 'Nombre',
	'LANGUAGE_PACK_NOT_EXIST'	=> 'El paquete de idioma seleccionado no existe.',
	'LANGUAGE_PACK_USED_BY'	=> 'Usado por (incluyendo robots)',
	'LANGUAGE_VARIABLE'	=> 'Idioma variable',
	'LANG_AUTHOR'	=> 'Autor',
	'LANG_ENGLISH_NAME'	=> 'Nombre en inglés',
	'LANG_ISO_CODE'	=> 'Código ISO',
	'LANG_LOCAL_NAME'	=> 'Nombre local',
	'MISSING_LANGUAGE_FILE'	=> 'Archivo de idioma perdido: <strong style="color:red">%1$s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Variables de idioma perdidas',
	'MODS_FILES'	=> 'Archivos de idioma de MODs',
	'NO_FILE_SELECTED'	=> 'No has especificado un archivo.',
	'NO_LANG_ID'	=> 'No has especificado un idioma.',
	'NO_REMOVE_DEFAULT_LANG'	=> 'No podés deshabilitar el paquete de idioma por omisión.<br />Cambia el idioma por omisión del Sitio antes.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Ho hay paquetes desinstalados',
	'REMOVE_FROM_STORAGE_FOLDER'	=> 'Borrar de la carpeta storage',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Seleccioná formato de descarga',
	'SUBMIT_AND_DOWNLOAD'	=> 'Enviar y descargar',
	'SUBMIT_AND_UPLOAD'	=> 'Enviar y subir',
	'THOSE_MISSING_LANG_FILES'	=> 'Los siguientes archivos no se encuentran en la carpeta de idioma  %1$s',
	'THOSE_MISSING_LANG_VARIABLES'	=> 'Las siguientes variables no se encuentran en el paquete <strong>%1$s</strong>',
	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Paquetes desinstalados',
	'UNABLE_TO_WRITE_FILE'	=> 'No puedo escribir en el archivo %1$s.',
	'UPLOAD_COMPLETED'	=> 'La subida se completo exitosamente.',
	'UPLOAD_FAILED'	=> 'La subida falló por razones desconocidas. Tendrás que reemplazar el archivo manualmente.',
	'UPLOAD_METHOD'	=> 'Método de subida',
	'UPLOAD_SETTINGS'	=> 'Parámetros de subida',
	'WRONG_LANGUAGE_FILE'	=> 'El archivo de idioma seleccionado es inválido.',
));

?>