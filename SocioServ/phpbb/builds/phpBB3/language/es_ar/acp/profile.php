<?php
/** 
*
* acp_profile.php [Spanish [es_AR]]
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
	'ADDED_PROFILE_FIELD'	=> 'Campo de perfil personalizado agregado exitosamente.',
	'ALPHA_ONLY'	=> 'Alfanumérico solamente',
	'ALPHA_SPACERS'	=> 'Alfanumérico y espacios',
	'ALWAYS_TODAY'	=> 'Siempre la fecha actual',
	'BOOL_ENTRIES_EXPLAIN'	=> 'Ingresá tus opciones ahora',
	'BOOL_TYPE_EXPLAIN'	=> 'Definir el tipo, bien un checkbox o radio buttons',
	'CHANGED_PROFILE_FIELD'	=> 'Campo personalizado cambiado exitosamente.',
	'CHARS_ANY'	=> 'Cualquier caracter',
	'CHECKBOX'	=> 'Checkbox',
	'COLUMNS'	=> 'Columnas',
	'CP_LANG_DEFAULT_VALUE'	=> 'Valor por omisión',
	'CP_LANG_EXPLAIN'	=> 'Descripción del campo',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Explicación para este campo presentada al usuario',
	'CP_LANG_NAME'	=> 'Nombre/título para este campo presentado al usuario',
	'CP_LANG_OPTIONS'	=> 'Opciones',
	'CREATE_NEW_FIELD'	=> 'Crear nuevo campo',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Al menos un campo de perfil personalizado no ha sido traducido aún. Por favor ingresá la informacion requerida haciendo click en  &quot;Traducir&quot;.',
	'DEFAULT_ISO_LANGUAGE'	=> 'Idioma por omisión [%1$s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Las definiciones para el idioma por omisión no están completas para este campo de perfil.',
	'DEFAULT_VALUE'	=> 'Valor por omisión',
	'DELETE_PROFILE_FIELD'	=> 'Remover campo de perfil',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> '¿Seguro que querés borrar este campo de perfil?',
	'DISPLAY_AT_PROFILE'	=> 'Mostrar en Panel de Control del Usuario',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'El usuario es capaz de cambiar este campo de perfil desde el Panel de Control del Usuario.',
	'DISPLAY_AT_REGISTER'	=> 'Mostrar en la pantalla de registración',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Si esta opción está habilitada, el campo se mostrará en la registración y puede ser cambiado desde el Panel de Control del Usuario.',
	'DISPLAY_PROFILE_FIELD'	=> 'Mostrar campo de perfil',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'El campo de perfil se mostrará en ver topic/ver perfil/lista de miembros, si está habilitado en la carga de parámetros. Solamente se mostrará en el perfil de los usuarios si está habilitado por omisión.',
	'DROPDOWN_ENTRIES_EXPLAIN'	=> 'Ingresá tus opciones ahora, cada opción en una línea aparte',
	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Por favor notá que podés cambiar tus opciones y también agregar nuevas opciones al final. No es recomendable agregar nuevas opciones _entre_ las existentes - esto podria causar una asignación incorrecta de las opciones a los usuarios. Tambien podría ocurrir si borrás opciones intermedias. Borrar las opciones desde la última significa que usuarios asignados a este ítem volveran a sus opciones por omisión.',
	'EMPTY_FIELD_IDENT'	=> 'Notificación de campo vacío',
	'EMPTY_USER_FIELD_NAME'	=> 'Por favor ingresá un nombre-título para el campo',
	'ENTRIES'	=> 'Entradas',
	'EVERYTHING_OK'	=> 'Todo OK',
	'FIELD_BOOL'	=> 'Lógico (Si/No)',
	'FIELD_DATE'	=> 'Fecha',
	'FIELD_DESCRIPTION'	=> 'Descripción del campo',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'La explicación para el campo presentada al usuario',
	'FIELD_DROPDOWN'	=> 'Selección desplegable',
	'FIELD_IDENT'	=> 'Identificación del campo',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'La identificación elegida para el campo ya existe. Por favor elegí otro nombre.',
	'FIELD_IDENT_EXPLAIN'	=> 'La identificación del campo es un nombre para identificar el campo de perfil en la base de datos y plantillas.',
	'FIELD_INT'	=> 'Números',
	'FIELD_LENGTH'	=> 'Longitud del campo',
	'FIELD_NOT_FOUND'	=> 'Campo de perfil no encontrado.',
	'FIELD_STRING'	=> 'Campo de texto simple',
	'FIELD_TEXT'	=> 'Area de texto',
	'FIELD_TYPE'	=> 'Tipo de campo',
	'FIELD_TYPE_EXPLAIN'	=> 'No podrás cambiar este tipo de campo más adelante.',
	'FIELD_VALIDATION'	=> 'Validación de campo',
	'FIRST_OPTION'	=> 'Primera opción',
	'HIDE_PROFILE_FIELD'	=> 'Ocultar campo de perfil',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Solamente administradores y moderadores podrán ver-completar este campo. Si se habilita esta opción, el campo se mostrará solamente en el perfil de usuario.',
	'INVALID_CHARS_FIELD_IDENT'	=> 'El campo de identificación solamente puede contener minúsculas a-z y _',
	'INVALID_FIELD_IDENT_LEN'	=> 'El campo de identificación solamente puede ser de 17 caracteres de longitud',
	'ISO_LANGUAGE'	=> 'Language [%s]',
	'LANG_SPECIFIC_OPTIONS'	=> 'Opciones específicas de idioma [<strong>%1$s</strong>]',
	'MAX_FIELD_CHARS'	=> 'Número máximo de caracteres',
	'MAX_FIELD_NUMBER'	=> 'Número mas alto permitido',
	'MIN_FIELD_CHARS'	=> 'Número mínimo de caracteres',
	'MIN_FIELD_NUMBER'	=> 'Número mas bajo permitido',
	'NO_FIELD_ENTRIES'	=> 'No se definieron entradas',
	'NO_FIELD_ID'	=> 'No se especificó ID del campo.',
	'NO_FIELD_TYPE'	=> 'No se especificó tipo de campo.',
	'NO_VALUE_OPTION'	=> 'Opción "campo vacío"',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Valor para una no-entrada. Si el campo es obligatorio, el usuario recibe un error si elige la opcion seleccionada acá',
	'NUMBERS_ONLY'	=> 'Only numbers (0-9)',
//	'PREVIEW_PROFILE_FIELD'	=> 'Vista previa del campo de perfil',
	'PROFILE_BASIC_OPTIONS'	=> 'Opciones básicas',
	'PROFILE_FIELD_ACTIVATED'	=> 'Campo de perfil activado exitosamente.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Campo de perfil desactivado exitosamente.',
	'PROFILE_LANG_OPTIONS'	=> 'Opciones específicas de idioma',
	'PROFILE_TYPE_OPTIONS'	=> 'Opciones específicas de tipo de perfil',
	'RADIO_BUTTONS'	=> 'Radio buttons',
	'REMOVED_PROFILE_FIELD'	=> 'Campo de perfil removido exitosamente.',
	'REQUIRED_FIELD'	=> 'Campo obligatorio',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Obliga al usuario a completar este campo. Se mostrará en la registración y en Panel de Control del Usuario.',
	'ROWS'	=> 'Rows',
	'SAVE'	=> 'Guardar',
	'SECOND_OPTION'	=> 'Segunda opción',
	'STEP_1_EXPLAIN_CREATE'	=> 'Acá podés ingresar los primeros parámetros básicos de tu nuevo campo de perfil. Esta informacion es necesaria para el segundo paso  donde podes ingresar las opciones restantes y hacer una vista previa o mas ajustes.',
	'STEP_1_EXPLAIN_EDIT'	=> 'Acá podés cambiar los parámetros básicos del campo de perfil. las opciones relevantes son re-calculadas en el segundo paso, donde podés hacer una vista previa y probar los parámetros cambiados.',
	'STEP_1_TITLE_CREATE'	=> 'Crear campo de perfil',
	'STEP_1_TITLE_EDIT'	=> 'Editar título del campo',
	'STEP_2_EXPLAIN_CREATE'	=> 'Acá podes definir algunas opciones comunes. Más adelante podés hacer una vista previa del campo,tal como lo vería el usuario. Andá probando haste que quede como vos querés.',
	'STEP_2_EXPLAIN_EDIT'	=> 'Acá podes cambiar algunas opciones comunes. Más adelante podés hacer una vista previa de los cambios, tal como lo vería el usuario. Andá probando haste que quede como vos querés.<br /><strong>Por favor notá que estos cambios no afectarán los perfiles existentes de los usuarios.</strong>',
	'STEP_2_TITLE_CREATE'	=> 'Opciones específicas del tipo de perfil',
	'STEP_2_TITLE_EDIT'	=> 'Opciones específicas del tipo de perfil',
	'STEP_3_EXPLAIN_CREATE'	=> 'Ya que tenés más de un idioma para el Sitio instalado , tenés que completar los ítems en los idiomas restantes. EL campo funcionará con el idioma por omision, podés completar los idiomas restantes después.',
	'STEP_3_EXPLAIN_EDIT'	=> 'Ya que tenés más de un idioma para el Sitio instalado, tenés que cambiar los ítems en los idiomas restantes. EL campo funcionará con el idioma por omision.',
	'STEP_3_TITLE_CREATE'	=> 'Definiciones de idioma restantes',
	'STEP_3_TITLE_EDIT'	=> 'Definiciones de idioma',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Ingresá una palabra por omisión para mostrar, un valor por defecto. Dejalo vacío si querés que se muestre vacío en primer término.',
	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Ingresá un texto por omisión para mostrar, un valor por defecto. Dejalo vacío si querés que se muestre vacío en primer término.',
	'TRANSLATE'	=> 'Traducir',
//	'UPDATE_PREVIEW'	=> 'Actualizar vista previa',
	'USER_FIELD_NAME'	=> 'Campo nombre-título mostrado al usuario',
	'VISIBILITY_OPTION'	=> 'Opción de visibilidad',
));

?>