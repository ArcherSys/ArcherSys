<?php
/** 
*
* acp_posting.php [Spanish [es_AR]]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-08-30 - Larveando Team (team@larveando.com.ar)
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
	'ACP_BBCODES_EXPLAIN'	=> 'BBCode es una implementación especial de HTML ofreciendo gran control sobre qué y cómo mostrar algo. Desede esta sección podés agregar, remover y editar BBCodes persinalizados',
	'ADD_BBCODE'	=> 'Agregar un nuevo BBCode',
	'BBCODE_ADDED'	=> 'BBCode agregado exitosamente.',
	'BBCODE_EDITED'	=> 'BBCode editado exitosamente.',
	'BBCODE_NOT_EXIST'	=> 'El BBCode seleccionado no existe.',
	'BBCODE_HELPLINE'	=> 'Línea de ayuda',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Este campo contiene el tip de ayuda del BBCode',
	'BBCODE_HELPLINE_TEXT'	=> 'Texto de la línea de ayuda',
	'BBCODE_INVALID_TAG_NAME'	=> 'El nombre elegido para este BBCode ya existe.',
	'BBCODE_OPEN_ENDED_TAG'	=> 'Tu BBCode personalizado debe tener ambas etiqueta de apertura y cierre.',
	'BBCODE_TAG'	=> 'Etiqueta',
	'BBCODE_TAG_TOO_LONG'	=> 'El nombre elegido es muy largo.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'La definición de etiqueta que ingresaste es muy larga, por favor acortala.',
	'BBCODE_USAGE'	=> 'Uso de BBCode',
	'BBCODE_USAGE_EXAMPLE'	=> '[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={TEXT1}]{TEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'	=> 'Acá definís como usar el BBCode. Reemplazá las variables de entrada por la ficha correpondiente (%sver debajo%s)',
	'EXAMPLE'	=> 'Ejemplo:',
	'EXAMPLES'	=> 'Ejemplos:',
	'HTML_REPLACEMENT'	=> 'Reemplazo HTML',
	'HTML_REPLACEMENT_EXAMPLE'	=> '&lt;span style="background-color:{COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family:{TEXT1};"&gt;{TEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'	=> 'Acá definis el reemplazo HTML por omisión (cada plantilla puede tener su propio reemplazo HTML). No olvides poner las fichas que usaste arriba!!',
	'TOKEN'	=> 'Ficha',
	'TOKENS'	=> 'Fichas',
	'TOKENS_EXPLAIN'	=> 'Las fichas son contenedores de la informacion suministrada por el usuaio. La entrada será válida sólo si coincide con la definición correspondiente. Si es necesario podés numerarlas, agregando un número como último caracter entre llaves, ej. {USERNAME1}, {USERNAME2}.<br /><br />Sumado a estas fichas podés usar cualquier palabra presente en tu carpeta language/ como estas: {L_<em>&lt;stringname&gt;</em>} donde <em>&lt;stringname&gt;</em> es la palabra traducida que querés agregar. Por ejemplo, {L_WROTE} se mostrará como  "escrito" o su traducción acorde a tu archivo',
	'TOKEN_DEFINITION'	=> '¿Qué puede ser?',
	'TOO_MANY_BBCODES'	=> 'No podés crear más BBCodes. pPor favor borrá uno o más BBCodes y luego intentá nuevamente.',

	'tokens'	=> array(
		'TEXT'	=> 'Cualquier texto, incluyendo caracteres extraños, etc…',
		'SIMPLETEXT'   => 'Caracteres del alfabeto latino (A-Z), números, espacios, comas, puntos, signo menos, signo más, guión y guión bajo.',
    	'IDENTIFIER'   => 'Caracteres del alfabeto latino (A-Z), números, guión y guión bajo.',
		'NUMBER'	=> 'Cualquier serie de dígitos',
		'EMAIL'	=> 'Una dirección de email válida',
		'URL'	=> 'Una URL válida usando cualquier protocolo (http, ftp, etc… no puede ser usado para exploits de javascript). Si no swe proporciona, se asumirá "http://"',
		'LOCAL_URL'	=> 'Una URL local. La URL debe ser relativa a la página del topic y no puede contener nombre de servidor o protocolo',
		'COLOR'	=> 'Un color HTML, puede ser bien en formato numérico <samp>#FF1234</samp> o un <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">color CSS</a> como ser <samp>fuchsia</samp> o <samp>InactiveBorder</samp>',
	),

	'ACP_ICONS_EXPLAIN'	=> 'Desde esta sección podés agregar, remover y editar los íconos que los usuarios pueden agregar a sus topics o posts. Estos íconos son generalmente mostrados cerca del título del topic en el listado de foros, o en los temas de los posts en el listado de topics. También podés instalar y crear nuevos paquetes de íconos.',
	'ACP_SMILIES_EXPLAIN'	=> 'Caritas o emoticones son típicamente pequeños, a veces imágenes animadas, usados para comunicar una emoción o sentimiento. Desde esta sección podés agregar, remover y editar las caritas que los usuarios pueden agregar a sus posts y mensajes privados. También podés instalar y crear nuevos paquetes de caritas.',
	'ADD_SMILIES'	=> 'Agregar múltiples caritas',
	'ADD_ICONS'	=> 'Agregar múltiples íconos',
	'AFTER_ICONS'	=> 'Después %s',
	'AFTER_SMILIES'	=> 'Después %s',
	'CODE'	=> 'Código',
	'CURRENT_ICONS'	=> 'Iconos actuales',
	'CURRENT_ICONS_EXPLAIN'	=> 'Decidí que hacer con los íconos actualmente instalados',
	'CURRENT_SMILIES'	=> 'Caritas actuales',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Decidí que hacer con las caritas actualmente instalados',
	'DISPLAY_ON_POSTING'	=> 'Mostrar en posts',
	'EDIT_ICONS'	=> 'Editar íconos',
	'EDIT_SMILIES'	=> 'Editar caritas',
	'EMOTION'	=> 'Emoción',
	'EXPORT_ICONS'	=> 'Exportar y descargar icons.pak',
	'EXPORT_ICONS_EXPLAIN'	=> '%sSiguiendo este enlace, la configuración de tus íconos instalados será empaquetada en <samp>icons.pak</samp> el cual una vez descargado puede usarse para crear un archivo <samp>.zip</samp> o <samp>.tgz</samp> conteniendo todos tus íconos mas este archivo de configuración <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'	=> 'Exportar y descargar smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sSiguiendo este enlace, la configuración de tus caritas instaladas será empaquetada en <samp>smiles.pak</samp> el cual una vez descargado puede usarse para crear un archivo <samp>.zip</samp> o <samp>.tgz</samp> conteniendo todos tus íconos mas este archivo de configuración <samp>smiles.pak</samp>%s.',
	'FIRST'	=> 'Primero',
	'ICONS_ADD'	=> 'Agregar un nuevo ícono',
	'ICONS_ADDED'	=> 'Los íconos han sido agregados exitosamente.',
	'ICONS_CONFIG'	=> 'Configuración de íconos',
	'ICONS_DELETED'	=> 'El ícono ha sido removido exitosamente.',
	'ICONS_EDIT'	=> 'Editar ícono',
	'ICONS_EDITED'	=> 'El ícono ha sido actualizado exitosamente.',
	'ICONS_HEIGHT'	=> 'Alto del ícono',
	'ICONS_IMAGE'	=> 'Imagen del ícono',
	'ICONS_IMPORTED'	=> 'El paquete de íconos ha sido instalado exitosamente.',
	'ICONS_IMPORT_SUCCESS'	=> 'El paquete de íconos fue importado exitosamente.',
	'ICONS_LOCATION'	=> 'Ubicación del ícono',
	'ICONS_NOT_DISPLAYED'	=> 'Los siguientes íconos no son mostrados en los posts',
	'ICONS_ORDER'	=> 'Orden de íconos',
	'ICONS_URL'	=> 'Archivo de ícono',
	'ICONS_WIDTH'	=> 'Ancho del ícono',
	'IMPORT_ICONS'	=> 'Instalar paquete de íconos',
	'IMPORT_SMILIES'	=> 'Instalar paquete de caritas',
	'KEEP_ALL'	=> 'Mantener todo',
	'MASS_ADD_SMILIES'	=> 'Agregar múltiples caritas',
	'NO_ICONS_EXPORT'	=> 'No tenés íconos con los que crear un paquete.',
	'NO_ICONS_PAK'	=> 'No encontré el paquete de íconos.',
	'NO_SMILIES_EXPORT'	=> 'No tenés caritas con las que crear un paquete.',
	'NO_SMILIES_PAK'	=> 'No encontré el paquete de caritas.',
	'PAK_FILE_NOT_READABLE'	=> 'No puedo leer el archivo <samp>.pak</samp>.',
	'REPLACE_MATCHES'	=> 'Reemplazar coincidencias',
	'SELECT_PACKAGE'	=> 'Selecciona un paquete',
	'SMILIES_ADD'	=> 'Agregar una nueva carita',
	'SMILIES_ADDED'	=> 'Las caritas han sido agregadas exitosamente.',
	'SMILIES_CODE'	=> 'Código de carita',
	'SMILIES_CONFIG'	=> 'Configuración de carita',
	'SMILIES_DELETED'	=> 'La carita ha sido removida exitosamente.',
	'SMILIES_EDIT'	=> 'Editar carita',
	'SMILIES_EDITED'	=> 'La carita ha sido editada exitosamente.',
	'SMILIES_EMOTION'	=> 'Emoción',
	'SMILIES_HEIGHT'	=> 'Alto de carita',
	'SMILIES_IMAGE'	=> 'Imagen de carita',
	'SMILIES_IMPORTED'	=> 'El paquete de caritas ha sido instalado exitosamente.',
	'SMILIES_IMPORT_SUCCESS'	=> 'El paquete de caritas ha sido importado exitosamente.',
	'SMILIES_LOCATION'	=> 'Ubicación de la carita',
	'SMILIES_NOT_DISPLAYED'	=> 'Las siguientes caritas no son mostradas en los posts',
	'SMILIES_ORDER'	=> 'Orden de caritas',
	'SMILIES_URL'	=> 'Archivo de carita',
	'SMILIES_WIDTH'	=> 'Ancho de carita',
	'WRONG_PAK_TYPE'	=> 'El paquete especificado no contiene la información apropiada.',
	'ACP_WORDS_EXPLAIN'	=> 'Desde este panel de control podés agregar, editar, y remover palabras que serán censuradas automáticamente en tus foros. Además nadie podrá registrarse con nombres de usuario conteniendo estas palabras. Comodines (*) son aceptados en las palabras, ej. *test* coincide con detestable, test* coincidirá con testaferro, *test coincidirá con detestar.',
	'ADD_WORD'	=> 'Agregar nueva palabra',
	'EDIT_WORD'	=> 'Editar palabra censurada',
	'ENTER_WORD'	=> 'Tenés que entrar una palabra y su reemplazo.',
	'NO_WORD'	=> 'No se leccionaste palabra para editar.',
	'REPLACEMENT'	=> 'Reemplazo',
	'UPDATE_WORD'	=> 'Actualizar palabra censurada',
	'WORD'	=> 'Palabra',
	'WORD_ADDED'	=> 'La palabra a censurar ha sido agregada exitosamente.',
	'WORD_REMOVED'	=> 'La palabra censurada ha sido removida exitosamente.',
	'WORD_UPDATED'	=> 'La palabra censurada ha sido actualizada exitosamente.',
	'ACP_RANKS_EXPLAIN'	=> 'Usando este formulario podés agregar, editar, ver y borrar rangos. También podés crear rangos personalizados los cuales se pueden aplicar a los usuarios via administración de usuarios.',
	'ADD_RANK'	=> 'Agregar nuevo rango',
	'MUST_SELECT_RANK'	=> 'Tenés que seleccionar un rango.',
	'NO_ASSIGNED_RANK'	=> 'No se ha asignado rango.',
	'NO_RANK_TITLE'	=> 'No especificaste un título para el rango.',
	'NO_UPDATE_RANKS'	=> 'El rango fué borrado exitosamente. Si embargo las cuentas de usuario que usanban este rango no se han actualizado. Necesitás reestablecer manualmente el rango en esas cuentas.',
	'RANK_ADDED'	=> 'El rango fué agregado exitosamente.',
	'RANK_IMAGE'	=> 'Imagen de rango',
	'RANK_IMAGE_EXPLAIN'	=> 'Usá esto para definir una pequeña imagen asociada al rango. La ruta es relativa al directorio raíz de phpBB.',
	'RANK_MINIMUM'	=> 'Posts mínimos',
	'RANK_REMOVED'	=> 'El rango fué borrado exitosamente.',
	'RANK_SPECIAL'	=> 'Configurar como rango especial',
	'RANK_TITLE'	=> 'Título del rango',
	'RANK_UPDATED'	=> 'El rango fué actualizado exitosamente.',
	'ACP_DISALLOW_EXPLAIN'	=> 'Acá podés controlar que nombres de usuario no se permitirá que sean utilizados. Nombres de usuario deshabilitados pueden contener un comodín (*).  Por favor notá que no podés especificar un nombre de usuario que ya hayan sido registrado, primero tenés que borrar ese nombre y después deshabilitarlo',
	'ADD_DISALLOW_EXPLAIN'	=> 'Podés deshabilitar un nombre de usuario usando el comodín (*) para coincidir cualquier caracter',
	'ADD_DISALLOW_TITLE'	=> 'Deshabilitar un nombre',
	'DELETE_DISALLOW_EXPLAIN'	=> 'Podés remover un nombre deshabilitado seleccionandolo de esta lista y haciendo click en submit',
	'DELETE_DISALLOW_TITLE'	=> 'Remover nombre deshabilitado',
	'DISALLOWED_ALREADY'	=> 'El nombre que ingresaste no puede ser deshabilitado. O bien ya existe en la lista, existe en la lista de palabras censuradas, o ha sido registrado previamente.',
	'DISALLOWED_DELETED'	=> 'El nombre ha sido removido exitosamente.',
	'DISALLOW_SUCCESSFUL'	=> 'El nombre ha sido agregado exitosamente.',
	'NO_DISALLOWED'	=> 'No hay nombres deshabilitados',
	'NO_USERNAME_SPECIFIED'	=> 'No has seleccionado o ingresado un nombre.',
	'ACP_REASONS_EXPLAIN'	=> 'Acá podés administrar las razones usadasd en reportes y mensajes de desaprobación de posts. Hay una razón por omisión (señalada con un *) que no podés remover, esta razón es normalmente empleada para mensajes personalizados si ninguna razon encaja.',
	'ADD_NEW_REASON'	=> 'Agregar nueva razón',
	'AVAILABLE_TITLES'	=> 'Títulos regionalizados disponibles',
	'IS_NOT_TRANSLATED'	=> 'La razón <strong>no</strong> ha sido traducida.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'La razón <strong>no</strong> ha sido rregionalizada. Si querés traducirla, especificá el código de idioma.',
	'IS_TRANSLATED'	=> 'La razón ha sido traducida.',
	'IS_TRANSLATED_EXPLAIN'	=> 'La razón ha sido traducida. Si el título que especificaste ha sido incluído en el archivo de idioma sera empleado en el reporte.',
	'NO_REASON'	=> 'No puedo encontrar la razón.',
	'NO_REASON_INFO'	=> 'Tenés que especificar un título y una descriptción para esta razón.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'No podés remover la razon por omisión "Otro".',
	'REASON_ADD'	=> 'Agregar razón',
	'REASON_ADDED'	=> 'Razón agregada exitosamente.',
	'REASON_ALREADY_EXIST'	=> 'Ya existe una razón con este título, por favor ingresá otro título.',
	'REASON_DESCRIPTION'	=> 'Descripción de la razón',
	'REASON_DESC_TRANSLATED'	=> 'Descripción mostrada',
	'REASON_EDIT'	=> 'Editar razón',
	'REASON_EDIT_EXPLAIN'	=> 'Acá podés agregar o editar una razón. Si la razón ha sido incluída en el archivo de idioma sera empleada en el reporte.',
	'REASON_REMOVED'	=> 'Razón removida exitosamente.',
	'REASON_TITLE'	=> 'Titulo de la razón',
	'REASON_TITLE_TRANSLATED'	=> 'Título mostrado',
	'REASON_UPDATED'	=> 'Razón actualizada exitosamente.',
	'USED_IN_REPORTS'	=> 'Usada en reportes',
	'ADD_SMILEY_CODE'	=> 'Agregar código',
	'NO_ICONS_ADD'	=> 'No hay íconos disponibles para agregar.',
	'NO_ICONS_EDIT'	=> 'No hay íconos disponibles para modificar.',
	'NO_SMILIES_ADD'	=> 'No hay caritas disponibles para agregar.',
	'NO_SMILIES_EDIT'	=> 'No hay caritas disponibles para modificar.',
	'BBCODE_INVALID'	=> 'Tu BBCode esta construído de forma incorrecta.',
	'DISPLAY_POSTING'         => 'En página de posteo',
    'DISPLAY_POSTING_NO'      => 'No en página de posteo',
	'ICON_NONE_ADDED'      => 'No se han agregado íconos.',
    'ICONS_ONE_ADDED'      => 'El ícono ha sido agregado exitosamente.',
	'ICONS_ONE_EDITED'      => 'El ícono ha sido actualizado exitosamente.',
    'ICON_NONE_EDITED'      => 'No se han actualizado íconos.',
	'SMILIES_NONE_ADDED'      => 'No se han agregado caritas.',
    'SMILIES_ONE_ADDED'      => 'La carita ha sido agregada exitosamente.',
	'SMILIES_ONE_EDITED'      => 'La carita ha sido actualizada exitosamente.',
    'SMILIES_NONE_EDITED'      => 'No se han actualizado caritas.',
));

?>
