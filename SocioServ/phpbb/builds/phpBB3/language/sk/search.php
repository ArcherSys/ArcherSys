<?php
/**
*
* search [Slovak]
*
* @package language
* @version $Id: search.php,v 1.24 2007/07/15 20:53:27 naderman Exp $
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
	'ALL_AVAILABLE'			=> 'Všetky dostupné',
	'ALL_RESULTS'			=> 'Všetky výsledky',

	'DISPLAY_RESULTS'		=> 'Zobraziť výsledky ako',

	'FOUND_SEARCH_MATCH'	=> 'Vyhľadávaním bol nájdený %d výsledok',
	'FOUND_SEARCH_MATCHES'	=> 'Vyhľadávaním bolo nájdených niekoľko výsledkov (celkom %d)',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Vyhľadávaním bolo nájdených viac ako %d výsledkov',

	'GLOBAL'				=> 'Globálne oznámenie',

	'IGNORED_TERMS'			=> 'vynechané',
	'IGNORED_TERMS_EXPLAIN'	=> 'Tieto vami zadané slová boli vynechané: <b>%s</b>',

	'JUMP_TO_POST'			=> 'Skočiť na príspevok',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Ak chcete zobraziť vaše príspevky, musíte sa prihlásiť.',

	'NO_KEYWORDS'			=> 'Musíte zadať minimálne jedno slovo, ktoré chcete vyhľadať. Každé slovo musí obsahovať najmenej %d a maximálne %d znakov (okrem *).',
	'NO_RECENT_SEARCHES'	=> 'Neboli nájdené žiadne predchádzajúce vyhľadávania',
	'NO_SEARCH'				=> 'Prepáčte, nemáte oprávnenie vyhľadávať na tomto fóre.',
	'NO_SEARCH_RESULTS'		=> 'Neboli nájdené žiadne vhodné výsledky.',
	'NO_SEARCH_TIME'		=> 'Ospravedlňujeme sa, ale teraz nemôžete vyhľadávať. Skúste to za niekoľko minút.',
	'WORD_IN_NO_POST'		=> 'Nebol nájdený žiadny príspevok, pretože slovo %s nie je obsiahnuté v žiadnom z príspevkov.',
	'WORDS_IN_NO_POST'		=> 'Nebol nájdený žiadny príspevok, pretože slová %s nie sú obsiahnuté v žiadnom z príspevkov.',

	'POST_CHARACTERS'		=> 'znakov príspevkov',

	'RECENT_SEARCHES'		=> 'Posledné vyhľadávania',
	'RESULT_DAYS'			=> 'Obmedzenie počtu výsledkov',
	'RESULT_SORT'			=> 'Usporiadať výsledky podľa',
	'RETURN_FIRST'			=> 'Vrátiť prvých',
	'RETURN_TO_SEARCH_ADV'	=> 'Návrat na rozšírené vyhľadávanie',

	'SEARCHED_FOR'			=> 'Text vyhľadávania',
	'SEARCHED_TOPIC'		=> 'Prehľadávaná téma',
	'SEARCH_ALL_TERMS'		=> 'Hľadať všetky slová alebo text vyhľadávania presne tak ako bol zadaný',
	'SEARCH_ANY_TERMS'		=> 'Hľadať aspoň jedno zadané slovo',
	'SEARCH_AUTHOR'			=> 'Vyhľadať autora',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'Zadaním * nahradíte časť slova',
	'SEARCH_FIRST_POST'		=> 'Len v prvom príspevku v téme',
	'SEARCH_FORUMS'			=> 'Prehľadávať fóra',
	'SEARCH_FORUMS_EXPLAIN'	=> 'Zvoľte fórum alebo fóra, v ktorých chcete vyhľadávať. Automaticky budú prehľadávané aj subfóra, pokiaľ ste nižšie neurčili inak.',
	'SEARCH_IN_RESULTS'		=> 'Prehľadať tieto výsledky',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Umiestnením znaku <strong>+</strong> pred hľadané slovo určíte, že toto slovo sa musí nachádzať vo výsledkoch. Znakom <strong>-</strong> určíte, že zadané slovo nesmie byť vo výsledkoch. Ak umiestnite pred slová znak <strong>|</strong>, každý výsledok bude obsahovať aspoň jedno z nich. Použitím znaku * nahradíte časť slova.',
	'SEARCH_MSG_ONLY'		=> 'Len texty príspevkov',
	'SEARCH_OPTIONS'		=> 'Nastavenia vyhľadávania',
	'SEARCH_QUERY'			=> 'Vyhľadávaný text',
	'SEARCH_SUBFORUMS'		=> 'Prehľadávať subfóra',
	'SEARCH_TITLE_MSG'		=> 'Názvy príspevkov a ich texty',
	'SEARCH_TITLE_ONLY'		=> 'Len názvy príspevkov',
	'SEARCH_WITHIN'			=> 'Hľadať v',
	'SORT_ASCENDING'		=> 'Vzostupne',
	'SORT_AUTHOR'			=> 'Autor',
	'SORT_DESCENDING'		=> 'Zostupne',
	'SORT_FORUM'			=> 'Fórum',
	'SORT_POST_SUBJECT'		=> 'Predmet príspevku',
	'SORT_TIME'				=> 'Čas odoslania',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Musíte zadať najmenej %d znakov mena autora.',
));

?>
