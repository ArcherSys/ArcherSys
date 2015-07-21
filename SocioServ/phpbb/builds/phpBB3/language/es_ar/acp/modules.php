<?php
/** 
*
* acp_modules.php [Spanish [es_AR]]
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Acá podés manejar toda clase de módulos. Por favor notá que el PCA tiene una estructura de menú de tres niveles (Categoría -> SubCategoría -> Módulo) por lo cual los otros tienen una estructura de menú de dos niveles (Categoría -> Módulo) la cual debe ser respetada. Por favor date cuenta que podés bloquearte a vos mismo si deshabilitás o borrás el módulo de administración de módulos.',
	'ADD_MODULE'	=> 'Agregar módulo',
	'ADD_MODULE_CONFIRM'	=> '¿Estás seguro que querés agregar el módulo seleccionado?',
	'ADD_MODULE_TITLE'	=> 'Agregar título',
	'CANNOT_REMOVE_MODULE'	=> 'No puedo remover el módulo, tiene hijos asignados. Por favor borrá o move todos los hijos antes de realizar esta acción.',
	'CATEGORY'	=> 'Categoría',
	'CHOOSE_MODE'	=> 'Elegir modo',
	'CHOOSE_MODE_EXPLAIN'	=> 'Elegir en qué modo se usará el módulo.',
	'CHOOSE_MODULE'	=> 'Elegir módulo',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Elegir el archivo asociado a este módulo.',
	'CREATE_MODULE'	=> 'Crear nuevo módulo',
	'DEACTIVATED_MODULE'	=> 'Módulo desactivado',
	'DELETE_MODULE'	=> 'Borrar módulo',
	'DELETE_MODULE_CONFIRM'	=> '¿Estás seguro que querés borrar este módulo?',
	'EDIT_MODULE'	=> 'Editar módulo',
	'EDIT_MODULE_EXPLAIN'	=> 'Acá podés ingresar parámetros específicos del módulo',
	'HIDDEN_MODULE'	=> 'Módulo oculto',
	'MODULE'	=> 'Módulo',
	'MODULE_ADDED'	=> 'Módulo agregado exitosamente.',
	'MODULE_DELETED'	=> 'Módulo removido exitosamente.',
	'MODULE_DISPLAYED'	=> 'Módulo mostrado',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Si no querés mostrar este módulo, pero querés usarlo, seleccioná no.',
	'MODULE_EDITED'	=> 'Módulo editado exitosamente.',
	'MODULE_ENABLED'	=> 'Módulo habilitado',
	'MODULE_LANGNAME'	=> 'Idioma del módulo',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Ingresá el nombre del módulo. Usá idioma constante si el nombre es tomado del archivo de idioma.',
	'MODULE_TYPE'	=> 'Tipo de módulo',
	'NO_CATEGORY_TO_MODULE'	=> 'Imposible convertir categoría en módulo. Por favor borra/mové todos los hijos antes de realizar esta acción.',
	'NO_MODULE'	=> 'No hay módulos.',
	'NO_MODULE_ID'	=> 'No se especificó ID de módulo.',
	'NO_MODULE_LANGNAME'	=> 'No se especificó idioma del módulo.',
	'NO_PARENT'	=> 'Sin Padre',
	'PARENT'	=> 'Padre',
	'PARENT_NO_EXIST'	=> 'Padre no existe.',
	'SELECT_MODULE'	=> 'Seleccioná un módulo',
));

?>