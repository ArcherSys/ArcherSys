<?php
/** 
*
* acp_search [Croatian]
*
* @package language
* @version $Id: $
* @copyright (c) 2000-2007 phpBB Group 
* @author (c) 2003-2007 Ancica Secan (ancica.sunceko.net)
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

/***************************************************************************
 *   TRANSLATOR
  *   ANČI - START
 *   <NE briši i NE mijenjaj!>
 *   Danas će biti toplo i sunčano.
 *   [Hrvatski]
 *   Prevela s engleskog na hrvatski: Ančica Sečan [Ancica Secan].
 *   Verzija: 1.0.0.
 *   Vrijeme: 22. travnja 2003. godine [utorak].
 *   Verzija: 1.0.1.
 *   Ažurirano za 2.0.5: 19. lipnja 2003. godine [četvrtak].
 *   Verzija: 1.0.2.
 *   Ažurirano za 2.0.11: 30. siječnja 2005. godine [nedjelja].
 *   Verzija: 1.0.3.
 *   Ažurirano za 2.0.12: 24. veljače 2005. godine [četvrtak].
 *   Verzija: 1.0.4.
 *   Ažurirano za 2.0.15: 08. svibnja 2005. godine [nedjelja].
 *   Verzija: 1.0.5.
 *   Ažurirano za 2.0.15: 20. lipnja 2005. godine [ponedjeljak].
 *   Verzija: 1.0.6.
 *   Ažurirano za 2.0.15: 24. lipnja 2005. godine [petak].
 *   Verzija: 1.0.7.
 *   Ažurirano za 2.0.17: 11. rujna 2005. godine [nedjelja].
 *   Verzija: 1.0.8.
 *   Ažurirano za 2.0.17: 05. listopada 2005. godine [srijeda].
 *   Verzija: 1.0.9.
 *   Ažurirano za 2.0.18: 31. listopada 2005. godine [ponedjeljak].
 *   Verzija: 2.0.0.
 *   Ažurirano za 2.0.19: 05. siječnja 2006. godine [četvrtak].
 *   Verzija: 2.0.1.
 *   Ažurirano za 2.0.19: 16. veljače 2006. godine [četvrtak].
  *
 *   Verzija: 3.0.1.
 *   Ažurirano za Olympus: 28. ožujka 2006. godine [ponedjeljak].
 *   Verzija: 3.0.2.
 *   Ažurirano za Olympus: 04. travnja 2006. godine [subota].
 *   Verzija: 3.0.3.
 *   Ažurirano za Olympus: 05. travnja 2006. godine [nedjelja].
 *   Verzija: 3.0.4.
 *   Ažurirano za phpBB3-B2: 15. kolovoza 2006. godine [utorak].
 *   Verzija: 3.0.5.
 *   Ažurirano za phpBB3-B5: 18. veljače 2007. godine [nedjelja].
 *   Verzija: 3.0.6.
 *   Ažurirano za phpBB3-B5: 23. ožujka 2007. godine [petak].
 *   Verzija: 3.0.7.
 *   Ažurirano za phpBB3-B5: 24. ožujka 2007. godine [subota].
 *   Verzija: 3.0.8.
 *   Ažurirano za phpBB3-RC1: 30. svibnja 2007. godine [srijeda].
 *   Verzija: 3.0.9.
 *   Ažurirano za phpBB3-RC1: 05. lipnja 2007. godine [utorak].
 *   Verzija: 3.0.10.
 *   Ažurirano za phpBB3-RC2: 25. lipnja 2007. godine [ponedjeljak].
 *   Verzija: 3.0.11.
 *   Ažurirano za phpBB3-RC3: 09. srpnja 2007. godine [ponedjeljak].
 *   Verzija: 3.0.12.
 *   Ažurirano za phpBB3-RC3: 12. srpnja 2007. godine [četvrtak].
 *   Verzija: 3.0.13.
 *   Ažurirano za phpBB3-RC3: 14. srpnja 2007. godine [subota].
 *   Verzija: 3.0.14.
 *   Ažurirano za phpBB3-RC4: 29. srpnja 2007. godine [nedjelja].
 *   Verzija: 3.0.15.
 *   Ažurirano za phpBB3-RC5: 19. kolovoza 2007. godine [nedjelja].
 *   Verzija: 3.0.16.
 *   Ažurirano za phpBB3-RC5: 25. kolovoza 2007. godine [subota].
 *   Url: http://ancica.sunceko.net.
 *   Danas će biti toplo i sunčano.
 *   [Zadnju] Službenu verziju ovog mog prijevoda možeš skinuti sa www.phpbb.com.
 *   [Zadnju] NeSlužbenu verziju ovog mog prijevoda možeš skinuti sa forum.sunceko.net.
 *   Danas će biti toplo i sunčano.
 *   </NE briši i NE mijenjaj!>
  *   ANČI - END
***************************************************************************/

$lang = array_merge($lang, array(
'ACP_SEARCH_INDEX_EXPLAIN'=> 'Ovdje možeš upravljati backendskim indeksima pretraživanja.<br />Kako se obično koristi samo jedan backend, trebao/la bi izbrisati sve indekse od kojih nemaš koristi.<br />Nakon mijenjanja pojedinih (po)stavki pretraživanja [npr. minimalan/maksimalan broj znakova] bilo bi pametno ponovo kreirati indeks.',
'ACP_SEARCH_SETTINGS_EXPLAIN'=> 'Ovdje možeš definirati koji backend pretraživanja će biti korišten za indeksiranje postova i vršenje pretraživanja [neke od postavki iste su za sve backende pretraživanja].',

'COMMON_WORD_THRESHOLD'=> 'Prag učestalih riječi',
'COMMON_WORD_THRESHOLD_EXPLAIN'=> 'Riječi koje su sadržane u većem postotku svih postova smatraju se učestalim riječima te su ignorirane prilikom pretraživanja [vrijedi samo za slučaj kada forum ima najmanje 100 postova].<br /> Za onemogućavanje praga učestalih riječi, vrijednost postavi na 0.',
'CONFIRM_SEARCH_BACKEND'=> 'Jesi li siguran/na da želiš prebaciti forum na drugi backend pretraživanja?<br />Nakon promjene backenda pretraživanja, morat ćeš kreirati indeks za novi backend pretraživanja.<br />Ukoliko nemaš namjeru prebaciti forum na stari backend pretraživanja, možeš izbrisati indeks starog backenda.',
'CONTINUE_DELETING_INDEX'=> 'Nastavi prethodan proces izbrisivanja indeksa',
'CONTINUE_DELETING_INDEX_EXPLAIN'=> 'Započeo je proces izbrisivanja indeksa.<br />Ukoliko želiš pristupiti početnoj stranici pretraživanja, moraš ili završiti proces ili ga prekinuti.',
'CONTINUE_INDEXING'=> 'Nastavi prethodan proces indeksiranja',
'CONTINUE_INDEXING_EXPLAIN'=> 'Započeo je proces indeksiranja.<br />Ukoliko želiš pristupiti početnoj stranici pretraživanja, moraš ili završiti proces ili ga prekinuti.',
'CREATE_INDEX'=> 'Kreiraj indeks',

'DELETE_INDEX'=> 'Izbriši indeks',
'DELETING_INDEX_IN_PROGRESS'=> 'U tijeku je izbrisivanje indeksa.',
'DELETING_INDEX_IN_PROGRESS_EXPLAIN'=> 'Backend pretraživanja trenutno čisti/prazni (svoj) indeks što bi moglo potrajati nekoliko minuta.',

'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'=> 'MySQL fulltext backend može biti korišten samo s MySQL4 i novijim verzijama.',
'FULLTEXT_MYSQL_NOT_MYISAM'=> 'MySQL fulltext indeksi mogu biti korišteni samo s MyISAM tablicama.',
'FULLTEXT_MYSQL_TOTAL_POSTS'=> 'Ukupan broj indeksiranih postova',
'FULLTEXT_MYSQL_MBSTRING'=> 'Podrška za non-latin UTF-8 znakove (mbstring):',
'FULLTEXT_MYSQL_PCRE'=> 'Podrška za non-latin UTF-8 znakove (PCRE):',
'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'=> 'Ukoliko PCRE nema svojstva unicode znakova, backend pretraživanja će pokušati koristiti mbstring’s regular expression engine.',
'FULLTEXT_MYSQL_PCRE_EXPLAIN'=> 'Ovaj backend pretraživanja zahtijeva PCRE svojstva unicode znakova, dostupno samo u PHP 4.4, 5.1 i novijim verzijama, ukoliko se želi (pre)traži(va)ti non-latin znakove.',

'GENERAL_SEARCH_SETTINGS'=> 'Opće postavke pretraživanja',
'GO_TO_SEARCH_INDEX'=> 'Idi na početnu stranicu pretraživanja',

'INDEX_STATS'=> 'Statistika',
'INDEXING_IN_PROGRESS'=> 'Indeksiranje u tijeku',
'INDEXING_IN_PROGRESS_EXPLAIN'=> 'Backend pretraživanje trenutno indeksira sve postove foruma.<br />Indeksiranje može potrajati od nekoliko minuta do nekoliko sati, ovisno o veličini foruma.',

'LIMIT_SEARCH_LOAD'=> 'Ograničavanje opterećenja sustava tijekom pretraživanja',
'LIMIT_SEARCH_LOAD_EXPLAIN'=> 'Ukoliko prosječno jednominutno opterećenje sustava premaši postavljenu vrijednost, stranica će automatski otići offline.<br />Vrijednost od 1.0 jednaka je ~100% iskorištenju (jednog) procesora. Ovo funkcionira samo na UNIX serverima.',

'MAX_SEARCH_CHARS'=> 'Maksimalno znakova indeksirano pretraživanjem',
'MAX_SEARCH_CHARS_EXPLAIN'=> 'Riječi s najviše toliko znakova bit će indeksirane za pretraživanje.',
'MIN_SEARCH_CHARS'=> 'Minimalno znakova indeksirano pretraživanjem',
'MIN_SEARCH_CHARS_EXPLAIN'=> 'Riječi s najmanje toliko znakova bit će indeksirane za pretraživanje.',
'MIN_SEARCH_AUTHOR_CHARS'=> 'Minimalno znakova imena autora/ice',
'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'=> 'Korisnici/e moraju unijeti najmanje toliko znakova imena kada pretražuju pomoću * [zamjenskog znaka].<br />Ukoliko je ime autora/ice kraće od toliko znakova, moguće je pretraživati unošenjem kompletnog imena.',

'PROGRESS_BAR'=> 'Postotakmjer',

'SEARCH_GUEST_INTERVAL'=> 'Zadani razmak pretraživanja za goste',
'SEARCH_GUEST_INTERVAL_EXPLAIN'=> 'Broj sekundi koji mora proći između 2 pretraživanja istog/e gosta/ice.<br />Interval se provjerava za sve goste zajedno što znači da ukoliko jedan gost pretražuje forum, svi ostali moraju čekati dok ne prođe interval.',
'SEARCH_INDEX_CREATE_REDIRECT'=> 'Svi postovi do posta id %1$d su indeksirani, od čega %2$d postova je unutar ovog koraka.<br />Trenutna brzina indeksiranja je oko %3$.1f postova po sekundi.<br />Indeksiranje je u tijeku...',
'SEARCH_INDEX_DELETE_REDIRECT'=> 'Svi postovi do posta id %1$d su izbrisani iz indeksa pretraživanja.<br />Izbrisivanje je u tijeku...',
'SEARCH_INDEX_CREATED'=> 'Svi postovi baze podataka foruma su indeksirani.',
'SEARCH_INDEX_REMOVED'=> 'Indeks pretraživanja za backend je izbrisan.',
'SEARCH_INTERVAL'=> 'Zadani razmak pretraživanja za korisnike/ce',
'SEARCH_INTERVAL_EXPLAIN'=> 'Broj sekundi koji mora proći između 2 pretraživanja istog/e korisnika/ce.<br />Interval se provjerava posebno za svakog/u korisnika/cu.',
'SEARCH_STORE_RESULTS'=> 'Dužina cachea rezultata pretraživanja',
'SEARCH_STORE_RESULTS_EXPLAIN'=> 'Spremljeni rezultati pretraživanja bit će izbrisani nakon isteka postavljenog vremena [u sekundama].<br /> Za onemogućavanje cachea, vrijednost postavi na 0.',
'SEARCH_TYPE'=> 'Backend pretraživanja',
'SEARCH_TYPE_EXPLAIN'=> 'PhpBB daje mogućnost izbora backenda koji će biti korišten prilikom pretraživanja tekstova postova.<br />Zadano phpBB koristi vlastito fulltext pretraživanje.',
'SWITCHED_SEARCH_BACKEND'=> 'Promijenio/la si backend pretraživanja.<br />Kako bi mogao/la koristiti novi backend pretraživanja, mora postojati indeks za backend koji si izabrao/la.',

'TOTAL_WORDS'=> 'Ukupan broj indeksiranih riječi',
'TOTAL_MATCHES'=> 'Ukupan broj indeksiranih riječ-post relacija',

'YES_SEARCH'=> 'Omogući pretraživanje',
'YES_SEARCH_EXPLAIN'=> 'Omogućuje korisnicima/ama pretraživanje foruma [uključujući i Članstva].',
'YES_SEARCH_UPDATE'=> 'Omogući fulltext ažuriranje',
'YES_SEARCH_UPDATE_EXPLAIN'=> 'Ažuriranje fulltext indeksa prilikom postanja, zanemareno ukoliko je pretraživanje onemogućeno.',
));
?>