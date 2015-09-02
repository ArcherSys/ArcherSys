<?php
/** 
*
* search [Česky]
*
* @package language
* @version $Id: search.php,v 1.23 2006/10/08 11:25:20 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
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

$lang = array_merge($lang, array(
	'ALL_AVAILABLE'			=> 'Všechna dostupná',
	'ALL_RESULTS'			=> 'Všechny výsledky',

	'DISPLAY_RESULTS'		=> 'Zobrazit výsledek jako',

	'FOUND_SEARCH_MATCH'	=> 'Vyhledáváním byl nalezen %d výsledek',
	'FOUND_SEARCH_MATCHES'	=> 'Vyhledáváním bylo nalezeno %d výsledků',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Vyhledáváním bylo nalezeno více něž %d výsledků',

	'GLOBAL'				=> 'Hlavní téma',

	'IGNORED_TERMS'			=> 'vynecháno',
	'IGNORED_TERMS_EXPLAIN'	=> 'Následující zadaná slova byla při vyhledávání vynechána, protože jsou příliš obecná: <strong>%s</strong>',

	'JUMP_TO_POST'			=> 'Přeskočit na příspěvek',

	'LOGIN_EXPLAIN_EGOSEARCH'       => 'Pro prohlížení vlastních příspěvků musíte být zaregistrováni a přihlášeni.',
	
	'NO_KEYWORDS'			=> 'Musíte zadat minimálně jedno slovo které chcete vyhledat. Každé slovo musí obsahovat nejméně %d a maximálně %d znaků (kromě *).',
	'NO_RECENT_SEARCHES'	=> 'Nebyla nalezena žádná předchozí vyhledávání',
	'NO_SEARCH'				=> 'Je nám líto, ale nemáte oprávnění vyhledávat na tomto fóru.',
	'NO_SEARCH_RESULTS'		=> 'Nebyly nalezeny žádné vhodné výsledky.',
	'NO_SEARCH_TIME'		=> 'Omlouváme se, ale nyní nemůžete vyhledávat. Zkuste to za několik minut.',
	'WORD_IN_NO_POST'		=> 'Nebyl nalezen žádný příspěvek, protože slovo %s není obsaženo v žádném z příspěvků.',
	'WORDS_IN_NO_POST'		=> 'Nebyl nalezen žádný příspěvek, protože slova %s nejsou obsažena v žádném z příspěvků.',

	'POST_CHARACTERS'		=> 'znaků příspěvku',

	'RECENT_SEARCHES'		=> 'Poslední vyhledávání',
	'RESULT_DAYS'			=> 'Omezit výsledky na předchozí',
	'RESULT_SORT'			=> 'Seřadit výsledky podle',
	'RETURN_FIRST'			=> 'Zobrazit prvních',
	'RETURN_TO_SEARCH_ADV'	=> 'Zpět na pokročilé hledaní',

	'SEARCHED_FOR'			=> 'Text vyhledávání',
	'SEARCHED_TOPIC'		=> 'Prohledávané téma',
	'SEARCH_ALL_TERMS'		=> 'Hledat se všemi podmínkami nebo text vyhledávat tak jako byl zadán',
	'SEARCH_ANY_TERMS'		=> 'Hledat se všemi podmínkami',
	'SEARCH_AUTHOR'			=> 'Vyhledat autora',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'Zadáním * nahradíte část slova',
	'SEARCH_FIRST_POST'		=> 'Pouze první příspěvek v tématu',
	'SEARCH_FORUMS'			=> 'Prohledávat fóra',
	'SEARCH_FORUMS_EXPLAIN'	=> 'Zvolte fórum nebo fóra ve kterých chcete vyhledávat. Subfóra jsou prohledávána automaticky, pokud nezvolíte jinak.',
	'SEARCH_IN_RESULTS'		=> 'Prohledat tyto výsledky',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Umístění <strong>+</strong> před slovem znamená že slovo musí být ve výsledku přítomno a <strong>-</strong> znamená že slovo nemá být ve výsledku přítomno. Pokud umístíte <strong>|</strong> před slovy, každý výsledek bude obsahovat alespoň jedno z nich. Použitím * nahradíte část slova',
	'SEARCH_MSG_ONLY'		=> 'Pouze text příspěvku',
	'SEARCH_OPTIONS'		=> 'Nastavení vyhledávání',
	'SEARCH_QUERY'			=> 'Vyhledávaný text',
	'SEARCH_SUBFORUMS'		=> 'Prohledávat podfóra',
	'SEARCH_TITLE_MSG'		=> 'Názvy příspěvků a jejich texty',
	'SEARCH_TITLE_ONLY'		=> 'Pouze názvy příspěvků',
	'SEARCH_WITHIN'			=> 'Hledat uvnitř',
	'SORT_ASCENDING'		=> 'Vzestupně',
	'SORT_AUTHOR'			=> 'Autor',
	'SORT_DESCENDING'		=> 'Sestupně',
	'SORT_FORUM'			=> 'Fórum',
	'SORT_POST_SUBJECT'		=> 'Předmět příspěvku',
	'SORT_TIME'				=> 'Čas odeslání',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Musíte zadat nejméně %d znaků z autorova jména.',
));

?>