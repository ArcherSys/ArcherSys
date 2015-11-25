<?php
/**
*
* acp_search [Slovak]
*
* @package language
* @version $Id: search.php,v 1.20 2007/07/15 12:09:54 kellanved Exp $
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Tu sa dajú spravovať všetky vyhľadávacie indexy. Vzhľadom k tomu, že bežne používate len jeden index, je odporúčané ostatné odstrániť kvôli úspore miesta s tým, že je možné kedykoľvek znova vytvoriť. Po zmene niektorých nastavení (napr. minimálny/maximálny počet znakov) bude možno stáť za to vytvoriť nový index, aby sa prejavili nové zmeny.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Tu môžete nastaviť, ako sa budú príspevky indexovať pre vyhľadávanie. Môžete nastaviť rôzne možnosti, ktoré majú vplyv na to, ako náročné pre server bude vyhľadávanie. Niektoré z týchto nastavení sú rovnaké pre všetky vyhľadávacie backendy.',

	'COMMON_WORD_THRESHOLD'					=> 'Hranice často používaného slova',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Slová, ktoré sa objavujú v príspevkoch vo väčšej miere, sú označené ako bežné. Bežné slová sú ignorované pri vyhľadávaní. Nastavením hodnoty na 0 toto chovanie vypnete. Táto funkcia sa dá použiť len pri viac než 100 príspevkoch.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Prajete si prepnúť na iný vyhľadávací backend? Po zmene vyhľadávacieho backendu budete musieť vytvoriť index pre nový vyhľadávací backend. Pokiaľ neplánujete prepnúť na predchádzajúci vyhľadávací backend, môžete odstrániť staré backendové indexy a uvoľniť tak systémové prostriedky.',
	'CONTINUE_DELETING_INDEX'				=> 'Pokračovať v predchádzajúcom odstraňovaní indexu',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Bol zahájený proces odstránenia vyhľadávacieho indexu. Na opätovné sprístupnenie vyhľadávania musíte túto operáciu dokončiť.',
	'CONTINUE_INDEXING'						=> 'Pokračovať v predchádzajúcom procese vytvárania indexu',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Bol zahájený proces vytvorenia vyhľadávacieho indexu. Na opätovné sprístupnenie vyhľadávania musíte túto operáciu dokončiť.',
	'CREATE_INDEX'							=> 'Vytvoriť index',

	'DELETE_INDEX'							=> 'Odstrániť index',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Prebieha odstraňovanie indexu',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Vyhľadávací backend práve prečisťuje svoj index, toto môže trvať niekoľko minút.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'Backend MySQL fulltext môže byť použitý len od MySQL4 a vyššie.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'Index pre MySQL fulltext je možné vytvoriť len pre tabuľky MyISAM.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Celkový počet indexovaných príspevkov',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Podpora UTF-8 znakov mimo znakovej sady latin použitím mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Podpora UTF-8 znakov mimo znakovej sady latin použitím PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Pokiaľ PCRE neobsahuje vlastnosti znakov unicode, vyhľadávanie sa pokúsi využiť engine pre regulárne výrazy z mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Tento vyhľadávací backend vyžaduje vlastnosti znakov unicode z PCRE, ktoré sú dostupné len v PHP 4.4, 5.1 a vyšších v prípade, že chcete vyhľadávať znaky, ktoré nie sú v bežných znakových sadách.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Všeobecné nastavenie vyhľadávania',
	'GO_TO_SEARCH_INDEX'					=> 'Prejsť na stránku vyhľadávania',

	'INDEX_STATS'							=> 'Štatistiky indexu',
	'INDEXING_IN_PROGRESS'					=> 'Prebieha indexácia',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Vyhľadávací backend práve indexuje všetky príspevky na vašom fóre. Toto môže trvať niekoľko minút až hodín, v závislosti na veľkosti vášho fóra.',

	'LIMIT_SEARCH_LOAD'						=> 'Obmedzenie vyhľadávania pri zaťažení servera',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Pokiaľ priemer vyťaženia servera za 1 minútu dosiahne túto hodnotu, stránka vyhľadávania sa automaticky vypne, 1.0 sa rovná ~100%-nému využitiu procesoru. Toto funguje len na UNIXových serveroch.',

	'MAX_SEARCH_CHARS'						=> 'Maximálny počet znakov pre indexáciu',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Do indexácie budú zahrnuté len tie slová, ktoré sa skladajú z menej znakov ako je tu nastavené.',
	'MIN_SEARCH_CHARS'						=> 'Maximálny počet znakov pre indexáciu',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Do indexácie budú zahrnuté len tie slová, ktoré sa skladajú z viac znakov ako je tu nastavené.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Minimálny počet znakov v mene autora',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Používatelia musia zadať minimálne tento počet znakov pri vyhľadávaní používateľského mena s použitím zástupných znakov. Pokiaľ je používateľské meno kratšie ako je tu nastavený počet znakov, stále je možné vyhľadať jeho príspevky zadaním celého používateľského mena.',

	'PROGRESS_BAR'							=> 'Ukazovateľ priebehu',

	'SEARCH_GUEST_INTERVAL'					=> 'Ochranný interval pre anonymných používateľov',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Počet sekúnd, ktoré musí anonymný návštevník čakať medzi jednotlivými hľadaniami. Pokiaľ jeden návštevník vyhľadáva, ostatní musia vyčkať na uplynutie tejto lehoty.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Príspevky po príspevok ID %1$d boli doposiaľ zaindexované, z toho %2$d príspevkov v tomto kroku.<br />Súčasný priemer indexácie je približne %3$.1f príspevkov za sekundu.<br />Indexácia stále prebieha…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Príspevky po príspevok ID %1$d boli doposiaľ odstránené z indexu vyhľadávania.<br />Odstraňovanie stále prebieha…',
	'SEARCH_INDEX_CREATED'					=> 'Všetky príspevky v databáze fóra boli úspešne zaindexované.',
	'SEARCH_INDEX_REMOVED'					=> 'Vyhľadávací index bol úspešne odstránený z databázy.',
	'SEARCH_INTERVAL'						=> 'Ochranný interval pre používateľov',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Počet sekúnd, po ktorom je možno znovu vyhľadávať. Interval platí zvlášť pre každého používateľa.',
	'SEARCH_STORE_RESULTS'					=> 'Vyrovnávacia pamäť výsledkov vyhľadávania',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Výsledky vyhľadávania vo vyrovnávacej pamäti sa automaticky odstránia po uplynutí tejto doby. Pokiaľ je nastavená na hodnotu 0, vyrovnávacia pamäť výsledkov je vypnutá.',
	'SEARCH_TYPE'							=> 'Vyhľadávací backend',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB vám umožňuje vybrať backend, ktorý bude použitý pre vyhľadávanie na fóre. V predvolenom stave phpBB použije vlastné fulltextové riešenie.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Zmenili ste vyhľadávací backend. Aby ste mohli využívať nový backend pre vyhľadávanie, uistite sa, že je vytvorený index pre vyhľadávanie.',

	'TOTAL_WORDS'							=> 'Celkový počet indexovaných slov',
	'TOTAL_MATCHES'							=> 'Celkový počet spojení medzi slovami a príspevkami',

	'YES_SEARCH'							=> 'Povoliť vyhľadávanie',
	'YES_SEARCH_EXPLAIN'					=> 'Umožniť používateľom využívať vyhľadávanie na fóre vrátane vyhľadávania používateľov.',
	'YES_SEARCH_UPDATE'						=> 'Povoliť aktualizáciu indexu pri prispievaní',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Aktualizuje index po pridaní príspevku, ignorované pokiaľ je vyhľadávanie vypnuté.',
));

?>
