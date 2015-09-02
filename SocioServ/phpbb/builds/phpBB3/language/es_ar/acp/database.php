<?php
/** 
*
* acp_database.php [Spanish [es_AR]]
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
	'ACP_BACKUP_EXPLAIN'	=> 'Acá podés hacer un resguardo de toda la informacion relacionada con phpBB. Podés guardar el archivo resultante en tu carpeta <samp>store/</samp> o descargarlo a tu PC. Dependiendo de la configuración del servidor podés comprimir el archivo en varios formatos.',
	'ACP_RESTORE_EXPLAIN'	=> 'Esto efectuará una recuperación completa de todas las tablas de phpBB guardadas en el archivo. Si el servidor lo permite podes usar un archivo comprimido con gzip o bzip2 y será descomprimido automáticamente. <strong>ADVERTENCIA</strong> Esto sobreescribirá cualquier dato existente. La recuperación puede llevar algún tiempo, por favor no te muevas de esta página hasta que se complete. Los resgusrdos se guardan en la carpeta <samp>store/</samp> y se asume que son generados por phpBB. Restaurar archivos no creados por phpBB puede funcionar, o no.',
	'BACKUP_DELETE'	=> 'El archivo de resguardo ha sido borrado exitosamente.',
	'BACKUP_INVALID'	=> 'El archivo seleccionado para resguardar es inválido.',
	'BACKUP_OPTIONS'	=> 'Opciones de resguardo',
	'BACKUP_SUCCESS'	=> 'El archivo de resguardo ha sido creado exitosamente.',
	'BACKUP_TYPE'	=> 'Tipo de resguardo',
	'DATABASE'	=> 'Utilidades de base de datos',
	'DATA_ONLY'	=> 'Solamente datos',
	'DELETE_BACKUP'	=> 'Borrar resguardo',
	'DESELECT_ALL'	=> 'Desmarcar todo',
	'DOWNLOAD_BACKUP'	=> 'Bajar resguardo',
	'FILE_TYPE'	=> 'Tipo de archivo',
	'FULL_BACKUP'	=> 'Completo',
	'RESTORE_OPTIONS'	=> 'Restaurar opciones',
	'RESTORE_SUCCESS'	=> 'La base de datos ha sido restaurada exitosamente.<br /><br />El Sitio debería volver al estado en que se encontraba cuando se hizo el resguardo.',
	'SELECT_ALL'	=> 'Seleccionar todo',
	'SELECT_FILE'	=> 'Seleccionar un archivo',
	'START_BACKUP'	=> 'Comenzar resguardo',
	'START_RESTORE'	=> 'Comenzar restauración',
	'STORE_AND_DOWNLOAD'	=> 'Guardar y descargar',
	'STORE_LOCAL'	=> 'Guardar archivo localmente',
	'STRUCTURE_ONLY'	=> 'Solamente estructura',
	'TABLE_SELECT'	=> 'Seleccionar tabla',
	'DELETE_SELECTED_BACKUP'	=> 'Estás seguro que querés borrar el resguardo seleccionado?',
	'RESTORE_FAILURE'	=> 'El archivo de resguardo puede estar corrupto.',
	'TABLE_SELECT_ERROR'	=> 'Tenés que seleccionar al menos una tabla.',
));

?>
