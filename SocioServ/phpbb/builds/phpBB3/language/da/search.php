<?php
/** 
*
* search [Danish]
*
* @package language
* @version $Id: search.php,v 1.25 2007/08/21 23:22:15 naderman Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Translators: Olympus DK Team, working at http://www.phpBB3.dk and http://area51.phpBB3.dk:
*
*		John Hjorth < john-hjorth@john-hjorth.dk > (John Hjorth) http://www.phpBBFM.dk
*		jask < jan@skovsgaard.net > (Jan Skovsgaard) http://skovsgaard.net
*		Jesper Møller < jgom@privat.dk > (Jesper G. O. Møller) http://www.jart.dk/jgom/index.html
*
* Contributors :
*
*		AlleyKat < AlleyKat@phpbb2.dk > (Finn Sørensen) http://www.phpbb2.dk
*		Dr.Diesel < dr.diesel@dream-cathers.dk > (Jes Nielsen) http://www.dream-cathers.dk
*		Jan Christensen < tamrotten@gmail.com > (Jan Christensen) http://janogwickys.dk/phpBB2/index.php
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
	'ALL_AVAILABLE'			=> 'Alle',
	'ALL_RESULTS'			=> 'Alle søgeresultater',

	'DISPLAY_RESULTS'		=> 'Vis resultater som',

	'FOUND_SEARCH_MATCH'	=> 'Søgningen resulterede i %d træffer',
	'FOUND_SEARCH_MATCHES'	=> 'Søgningen resulterede i %d træffere',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Søgningen resulterede i flere end %d træffere',

	'GLOBAL'				=> 'Global bekendtgørelse',

	'IGNORED_TERMS'			=> 'ignoreret',
	'IGNORED_TERMS_EXPLAIN'	=> 'Følgende ord <strong>%s</strong> blev ignoreret i søgningen, som anvendes for alment.',

	'JUMP_TO_POST'			=> 'Hop til indlæg',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Du skal være tilmeldt som bruger og logget ind for at se dine egne indlæg.',
	
	'NO_KEYWORDS'			=> 'Du skal angive mindst ét søgeord. Hvert ord skal bestå af mindst %d tegn og højst %d tegn (eksklusiv ubekendte).',
	'NO_RECENT_SEARCHES'	=> 'Ingen søgning er foretaget for nyligt.',
	'NO_SEARCH'				=> 'Beklager, du har ikke tilladelse til at benytte søgefunktionen.',
	'NO_SEARCH_RESULTS'		=> 'Intet emne eller indlæg passer til dine søgekriterier.',
	'NO_SEARCH_TIME'		=> 'Beklager, søgefunktionen kan ikke bruges lige nu. Prøv venligst igen om få minutter.',
	'WORD_IN_NO_POST'		=> 'Ingen indlæg blev fundet, da ordet <strong>%s</strong> ikke findes i noget indlæg.',
	'WORDS_IN_NO_POST'		=> 'Ingen indlæg blev fundet, da ordene <strong>%s</strong> ikke findes i noget indlæg.',

	'POST_CHARACTERS'		=> 'tegn i indlæg',

	'RECENT_SEARCHES'		=> 'Nylige søgninger',
	'RESULT_DAYS'			=> 'Afgræns resultater til forrige',
	'RESULT_SORT'			=> 'Sortér resultater efter',
	'RETURN_FIRST'			=> 'Vis første',
	'RETURN_TO_SEARCH_ADV'	=> 'Tilbage til avanceret søgning',

	'SEARCHED_FOR'			=> 'Anvendt søgeord',
	'SEARCHED_TOPIC'		=> 'Det søgte emne',
	'SEARCH_ALL_TERMS'		=> 'Søg efter alle udtryk eller brug indtastet søgeparameter ',
	'SEARCH_ANY_TERMS'		=> 'Søg efter alle udtryk',
	'SEARCH_AUTHOR'			=> 'Søg efter en bestemt forfatter',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'Brug * som ubekendt for ukendte tegn.',
	'SEARCH_FIRST_POST'		=> 'Kun første indlæg i emnet',
	'SEARCH_FORUMS'			=> 'Søg i fora',
	'SEARCH_FORUMS_EXPLAIN'	=> 'Vælg det forum eller de fora du vil søge i. Der søges automatisk i underfora medmindre du fravælger "Søg i underfora" herunder.',
	'SEARCH_IN_RESULTS'		=> 'Søg i de fundne resultater',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Sæt <strong>+</strong> foran et søgeord der skal findes og <strong>-</strong> foran et søgeord der skal udelukkes i søgningen.<br />Skriv mange søgeord adskilt med <strong>|</strong> og omgivet af parantes, når blot ét af ordene skal findes. <br />Brug * som ubekendt for ukendte tegn.',
	'SEARCH_MSG_ONLY'		=> 'Søg kun i beskedfeltet',
	'SEARCH_OPTIONS'		=> 'Søgemuligheder',
	'SEARCH_QUERY'			=> 'Søgeord',
	'SEARCH_SUBFORUMS'		=> 'Søg i underfora',
	'SEARCH_TITLE_MSG'		=> 'Indlæggets overskrift og beskedfelt',
	'SEARCH_TITLE_ONLY'		=> 'Emnets overskrift',
	'SEARCH_WITHIN'			=> 'Søg i',
	'SORT_ASCENDING'		=> 'Stigende',
	'SORT_AUTHOR'			=> 'Forfatter',
	'SORT_DESCENDING'		=> 'Faldende',
	'SORT_FORUM'			=> 'Forum',
	'SORT_POST_SUBJECT'		=> 'Indlæggets overskrift',
	'SORT_TIME'				=> 'Indlæggets dato',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Du skal angive mindst %d tegn af forfatterens navn',
));

?>