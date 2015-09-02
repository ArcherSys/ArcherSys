<?php
/** 
*
* search.php [Spanish [es_AR]]
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
	'ALL_AVAILABLE'	=> 'Todos los disponibles',
	'ALL_RESULTS'	=> 'Todos los resultados',
	'DISPLAY_RESULTS'	=> 'Mostrar resultados como',
	'FOUND_SEARCH_MATCH'	=> 'Se encontró %d coincidencia',
	'FOUND_SEARCH_MATCHES'	=> 'Se encontraron %d coincidencias',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Se encontraron más de %d coincidencia',
	'GLOBAL'	=> 'Anuncio global',
	'IGNORED_TERMS'	=> 'ignorado',
	'IGNORED_TERMS_EXPLAIN'	=> 'Las siguientes palabras en tu consulta fueron ignoradas porque son palabras muy comunes: <strong>%s</strong>',
	'JUMP_TO_POST'	=> 'Saltar al post',
	'NO_KEYWORDS'	=> 'Debés especificar al menos una palabra para buscar. Cada palabra debe tener al menos %d caracteres y no debe contener más de %d caracteres excluyendo los comodines.',
	'NO_RECENT_SEARCHES'	=> 'No se han realizado búsquedas recientemente',
	'NO_SEARCH'	=> 'Disculpas, no te está permitido usar el sistema de búsqueda.',
	'NO_SEARCH_RESULTS'	=> 'No se encontraron coincidencias.',
	'NO_SEARCH_TIME'	=> 'Disculpas, no podés buscar en este momento. Por favor, intenta nuevamente en unos minutos.',
	'WORD_IN_NO_POST'	=> 'La palabra <strong>%s</strong> no se encuentra en ningún post.',
	'WORDS_IN_NO_POST'	=> 'Las palabras <strong>%s</strong> no se encuentran en ningún post.',
	'POST_CHARACTERS'	=> 'Caracteres de post',
	'RECENT_SEARCHES'	=> 'Búsquedas recientes',
	'RESULT_DAYS'	=> 'Limitar resultados a previos',
	'RESULT_SORT'	=> 'Ordenar resultados por',
	'RETURN_FIRST'	=> 'Retornar primero',
	'SEARCHED_FOR'	=> 'Término buscado',
	'SEARCHED_TOPIC'	=> 'Topic buscado',
	'SEARCH_ALL_TERMS'	=> 'Buscar todos los términos',
	'SEARCH_ANY_TERMS'	=> 'Buscar cualquier término',
	'SEARCH_AUTHOR'	=> 'Buscar autor',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'Emplea * como comodín para coincidencias parciales',
	'SEARCH_FIRST_POST'	=> 'Primer post del topics solamente',
	'SEARCH_FORUMS'	=> 'Buscar en Foros',
	'SEARCH_FORUMS_EXPLAIN'	=> 'Seleccioná el Foro o Foros en los que deseas buscar. Para agilizar podés buscar en los subforos seleccionando el Foro padre y habilitar búsqueda en subforos debajo.',
	'SEARCH_IN_RESULTS'	=> 'Buscar en los resultados',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Escribe <strong>+</strong> delante de una palabra a encontrar y <strong>-</strong> delante una a excluir. Poné una lista de palabras separadas por <strong>|</strong> entre corchetes si solo una de ellas debe hallarse. Emplea * como comodín para coincidencias parciales.',
	'SEARCH_MSG_ONLY'	=> 'Sólo el texto del mensaje',
	'SEARCH_OPTIONS'	=> 'Opciones de búsqueda',
	'SEARCH_QUERY'	=> 'Consulta',
	'SEARCH_SUBFORUMS'	=> 'Buscar subforos',
	'SEARCH_TITLE_MSG'	=> 'Título y texto del mensaje',
	'SEARCH_TITLE_ONLY'	=> 'Sólo títulos',
	'SEARCH_WITHIN'	=> 'Buscar en ',
	'SORT_ASCENDING'	=> 'Ascendente',
	'SORT_AUTHOR'	=> 'Autor',
	'SORT_DESCENDING'	=> 'Descendente',
	'SORT_FORUM'	=> 'Foro',
	'SORT_POST_SUBJECT'	=> 'Tema del post',
	'SORT_TIME'	=> 'Fecha',
	'TOO_FEW_AUTHOR_CHARS'	=> 'Debes especificar al menos %d caracteres del nombre del autor.',
	'RETURN_TO_SEARCH_ADV'	=> 'Volver a búsqueda avanzada',
	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'El Sitio requiere que te hayas registrado e ingresado para ver tus posts.',
));

?>
