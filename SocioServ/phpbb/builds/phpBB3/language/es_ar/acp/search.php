<?php
/** 
*
* acp_search.php [Spanish [es_AR]]
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
	'ACP_SEARCH_INDEX_EXPLAIN'	=> 'Acá podés manejar los índices de búsqueda. Ya que normalmente usás solo un índice deberías borrar los restantes. Después de modificar alguno de los parámetros de motor de búsqueda (p.ej. el número de caracteres min/máximos) sería importante recrear el índice para que refleje estos cambios.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'	=> 'Acá podés definir que índice de búsqueda se usará para indexar posts y efectuar búsquedas. Podés ajustar varias opciones que pueden influir cuánto procesamiento requieran dichas acciones. Algunos de estos ajustes son los mismos para todos los motores de búsqueda.',
	'COMMON_WORD_THRESHOLD'	=> 'Umbral de palabra común',
	'COMMON_WORD_THRESHOLD_EXPLAIN'	=> 'Palabras que están contenidas en un porcentaje mayor de todos los posts serán referidas como comunes. Las palabras comunes serán ignoradas en las consultas de las búsquedas. 0 significa deshabilitado. Sólo tiene efecto si hay más de 100 posts.',
	'CONFIRM_SEARCH_BACKEND'	=> 'Seguro que querés cambiar a un motor de búsqueda diferente? Después de cambiar tenés que crear un nuevo índice. Si no planeás volver al anterior tambien podés borrar su índice para liberar recursos de sistema.',
	'CONTINUE_DELETING_INDEX'	=> 'Continuar proceso de borrado de índices previos',
	'CONTINUE_DELETING_INDEX_EXPLAIN'	=> 'Se ha iniciado el proceso de borrado de un índice. En orden de acceder a la página de búsqueda nuevamente necesitás completar este proceso primero.',
	'CONTINUE_INDEXING'	=> 'Continuar proceso de indexación previo',
	'CONTINUE_INDEXING_EXPLAIN'	=> 'Se ha iniciado un proceso de indexación. En orden de acceder a la página de búsqueda nuevamente necesitas completar este proceso primero.',
	'CREATE_INDEX'	=> 'Crear índice',
	'DELETE_INDEX'	=> 'Borrar índice',
	'DELETING_INDEX_IN_PROGRESS'	=> 'Borrando índice en progreso',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'El motor de búsqueda actualmente está limpiando su índice. Esto puede llevar algunos minutos.',
	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'Texto completo sólo puede usarse con MySQL4 y superiores.',
	'FULLTEXT_MYSQL_NOT_MYISAM'	=> 'Texto completo sólo puede usarse con tablas MyISAM.',
	'FULLTEXT_MYSQL_SUBJECT_CARDINALITY'	=> 'Cardinalidad del índice post_subject de texto completo (estimado de valores únicos)',
	'FULLTEXT_MYSQL_TEXT_CARDINALITY'	=> 'Cardinalidad del índice post_texto de texto completo (estimado de valores únicos)',
	'FULLTEXT_MYSQL_TOTAL_POSTS'	=> 'Número total de posts indexados',
	'FULLTEXT_MYSQL_UNICODE'	=> 'Soporte para caracteres no-latinos UTF-8:',
	'FULLTEXT_MYSQL_UNICODE_EXPLAIN'	=> 'Este motor de búsqueda requiere propiedades de caracteres unicode PCRE, solo disponible en PHP 4.4, 5.1 y superiores, si querés buscar caracteres no-latinos.',
	'GENERAL_SEARCH_SETTINGS'	=> 'Parámetros generales de búsqueda',
	'GO_TO_SEARCH_INDEX'	=> 'Ir a índice de búsqueda',
	'INDEX_STATS'	=> 'Estadísticas de índice',
	'INDEXING_IN_PROGRESS'	=> 'Indexación en progreso',
	'INDEXING_IN_PROGRESS_EXPLAIN'	=> 'El motor de búsqueda actualmente está indexando todos los posts del Sitio. Esto puede llevar desde un minuto a algunas horas dependiendo del tamaño del Sitio.',
	'LIMIT_SEARCH_LOAD'	=> 'Límite de carga de sistema de la página de búsqueda',
	'LIMIT_SEARCH_LOAD_EXPLAIN'	=> 'Si la carga de sistema por minuto excede este valor la página de búsqueda se pondrá offline, 1.0 equivale aprox. ~100% de utilización de un procesador. Solo funciona en servidores UNIX.',
	'MAX_SEARCH_CHARS'	=> 'Máximo de caracteres indexados para búsqueda',
	'MAX_SEARCH_CHARS_EXPLAIN'	=> 'Palabras con no mas que esta cantidad de caracteres serán indexadas para búsqueda.',
	'MIN_SEARCH_CHARS'	=> 'Mínimo de caracteres indexados para búsqueda',
	'MIN_SEARCH_CHARS_EXPLAIN'	=> 'Palabras con no menos que esta cantidad de caracteres serán indexadas para búsqueda.',
	'MIN_SEARCH_AUTHOR_CHARS'	=> 'Mínimo de caracteres de nombre de autor',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'	=> 'Los usuarios tienen que ingresar al menos esta cantidad de caracteres del nombre cuando efectúan una búsqueda de autor con comodines. Si el nombre del autor es mas corto que este numero aún se podra hacer la busqueda ingresando el nombre completo.',
	'PROGRESS_BAR'	=> 'Barra de progreso',
	'SEARCH_GUEST_INTERVAL'	=> 'Intervalo entre búsquedas para invitados',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'	=> 'Número de segundos que los invitados deberán esperar entre búsquedas. Si un invitado busca, todos los demás deberán esperar que transcurra el intervalo.',
	'SEARCH_INDEX_CREATED'	=> 'Indexados todos los posts en la base de datos del Sitio exitosamente.',
	'SEARCH_INDEX_REMOVED'	=> 'Indices de búsquedas para este motor borrados exitosamente.',
	'SEARCH_INTERVAL'	=> 'Intervalo entre búsquedas para usuarios',
	'SEARCH_INTERVAL_EXPLAIN'	=> 'Número de segundos que los usuarios deberán esperar entre búsquedas. Este intervalo es independiente para cada usuario.',
	'SEARCH_STORE_RESULTS'	=> 'Duración del cache de resultados de búsquedas',
	'SEARCH_STORE_RESULTS_EXPLAIN'	=> 'Resultados de búsquedas cacheados expiran transcurrido este intervalo, en segundos. 0 significa deshabilitar cache de búsquedas.',
	'SEARCH_TYPE'	=> 'Buscar motor',
	'SEARCH_TYPE_EXPLAIN'	=> 'phpBB te permite elegir el motor que se usa para buscar texto en el contenido de los posts. Por omisión la búsqueda emplea el motor propio de phpBB.',
	'SWITCHED_SEARCH_BACKEND'	=> 'Cambiaste de motor de búsqueda. En orden de emplear el nuevo motor asegurate que haya un índice para el motor que elegiste.',
	'TOTAL_WORDS'	=> 'Número total de palabras indexadas',
	'TOTAL_MATCHES'	=> 'Número total de palabras para relacionar posts indexado',
	'YES_SEARCH'	=> 'Habilitar facilidades de búsqueda',
	'YES_SEARCH_EXPLAIN'	=> 'Habilita al usuario facilidades de búsqueda, incluyendo búsqueda de miembros.',
	'YES_SEARCH_UPDATE'	=> 'Habilitar actualización de texto completo',
	'YES_SEARCH_UPDATE_EXPLAIN'	=> 'Actualización de índices de texto completo, desestimado si la búsqueda está deshabilitada.',
	'FULLTEXT_MYSQL_MBSTRING'	=> 'Soporte para caracteres no-latinos UTF-8 usando mbstring:',
	'FULLTEXT_MYSQL_PCRE'	=> 'Soporte para caracteres no-latinos UTF-8 usando PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'	=> 'Si PCRE no soporta caracteres unicode, el motor de búsqueda tratará de usar las expresiones regulares de mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'	=> 'Este motor de búsqueda requiere que PCRE soporte caracteres unicode, sólo disponible en PHP 4.4, 5.1 y superior, si querés buscar caracteres no-latinos.',
	'SEARCH_INDEX_CREATE_REDIRECT'	=> 'Todos los post hasta id %1$d han sido indexados, de los cuales %2$d posts se hicieron en este paso.<br />El promedio actual de indexación es aproximadamente %3$.1f posts por segundo.<br />Indexando…',
	'SEARCH_INDEX_DELETE_REDIRECT'	=> 'Todos los post hasta  id %1$d han sido borrados del índice de búsqueda.<br />Borrando…',
));

?>