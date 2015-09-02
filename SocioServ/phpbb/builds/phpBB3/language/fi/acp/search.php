<?php
/** 
*
* acp_search [Finnish [Fin]]
*
* @package language
* @copyright (c) 2006 phpBB Group 
* @author 2006-11-14 - Lurttinen@phpbbsuomi.com
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Täällä voit hallita Hakutoiminnon sisällyluetteloa. Normaalisti käytössä on vain yksi sisällysluettelo, joten kannattaa poistaa ne luettelot, joita ei käytetä. Kun muokkaat joitakin asetuksia (esim, Minimi ja maksimimäärä merkejä) Kannattaa ehkä rakentaa sisällyluettelo uusiksi, jotta se ottaisi muutokset huomioon.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Täällä määräät, mitä tapaa käytetään Hakutoiminnossa ja mitä sisällysluetteloa käytetään. Voit asettaa joitain vaihtoehtoja, jotka määrittelevät kuinka paljon järjestelmä käyttää siihen resursseja. Osa asetuksista on yhteisiä jokaiselle hakukoneelle.',

	'COMMON_WORD_THRESHOLD'					=> 'Yleisen sanan raja',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Sanoja, joita esiintyy prosentuaalisesti suurimmissa osista viestejä pidetään yleisenä. Yleiset sanat jätetään huomiotta hauissa. Aseta nolla poistaaksesi toiminnon käytöstä. Tämä on käytössä vain, jos foorumilla on yli 100 viestiä.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Haluatko varmasti siirtyä käyttämään toista hakukonetta? Mikäli vaihdat, sinun täytyy luoda sisällysluettelo uudelle hakukoneelle. Voit poistaa vanhan hakukoneen sisällysluettelon vapauttaaksesi järjestelmän resursseja, jos et aio sitä enään käyttää.',
	'CONTINUE_DELETING_INDEX'				=> 'Jatka entisen sisällysluettelon poistamista',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Sisällysluettelon poisto on aloitettu. Et voi siirtya hakusivulle ennen kuin se on rakennettu uusiksi.',
	'CONTINUE_INDEXING'						=> 'jatka sisällysluettelon rakentamista',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Sisällysluettelon rakentaminen on aloitettu. Et voi siirtyä hakusivulle, ennen kuin se on rakennettu.',
	'CREATE_INDEX'							=> 'Luo sisällysluettelo',

	'DELETE_INDEX'							=> 'Poista sisällysluettelo',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Sisällysluettelon poisto on käynnissä',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Hakukone siivoaa sisällysluetteloaan. Tähän voi mennä muutama minuutti.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'MySQL fulltext hakukonetta voidaan käyttää vain MySQL4 ja uudemman version kanssa.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'MySQL fulltext sisällysluetteloa voidan käyttää vain MyISAM tauluissa.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Sisällysluettelossa olevien viestien kokonaismäärä',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Tuki non-latin UTF-8 merkeille mbstring avulla:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Tuki non-latin UTF-8 merkeille PCRE avulla:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Mikäli PCRE:llä ei ole unicode merkkien ominaisuuksia, hakukone yrittää käyttää mbstring regular expression-moottoria.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Tämä hakukone vaatii PCRE unicode merkistön ominaisuudet, jotka ovat saatavilla vain PHP 4.4, 5.1 ja siitä ylöspäin. Mikäli haluat etsiä non-latin merkkejä.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Yleiset Hakutoiminnon asetukset',
	'GO_TO_SEARCH_INDEX'					=> 'Mene Hakutoiminnon etusivulle',

	'INDEX_STATS'							=> 'Etusivun tilastot',
	'INDEXING_IN_PROGRESS'					=> 'Sisällysluetteloa luodaan',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Hakukone rakentaa sisällysluetteloa keskustelufoorumin viesteistä. Tämä saattaa muutamasta minuutista tunteihin riippuen keskustelufoorumisi koosta.',

	'LIMIT_SEARCH_LOAD'						=> 'Hakusivun kuormituksen rajoitus',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Hakutoiminto sulkeutuu, mikäli yhden minuutin kuormitus ylittyy. 1.0 on sama, kuin ~100% käyttö yhdellä prosessorilla. Tämä toimii vain UNIX palvelimilla.',

	'MAX_SEARCH_CHARS'						=> 'Maksimimäärä merkkejä sisällysluettelossa',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Sanat, joissa ei ole tätä enempää merkkejä. Lisätään sisällysluetteloon.',
	'MIN_SEARCH_CHARS'						=> 'Minimimäärä merkkejä sisällysluettelossa',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Sanassa täytyy olla vähintään näin monta merkkiä päästäkseen sisällysluetteloon.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Minimimäärä merkkejä kirjoittajan nimessä',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Käyttäjän täytyy antaa tämän verran merkkejä kirjoittajan nimestä hakiessaan villeillä korteilla. Mikäli kirjoittajan nimessä on vähemmän merkkejä, kuin tämä arvo on. Voit silti hakea tämän käyttäjän tekemät viestit kirjoittamalla sen koko nimen Hakusivulle.',

	'PROGRESS_BAR'							=> 'Edistyminen',

	'SEARCH_GUEST_INTERVAL'					=> 'Hakutoiminnon rajoitus vieraiden käyttämänä',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Kuinka monta sekunttia vierailijan on odotettava hakujensa välillä. Mikäli yksi vieras on etsimässä tietoa. Muiden on odotettava, kunnes aikaraja on täytynyt.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Kaikki viestit id-arvoon %1$d asti on luetteloitu, joista %2$d viestiä oli mukana tässä vaiheessa.<br />Tämänhetkinen sisällysluettelon rakanetamisen nopeus on noin %3$.1f viestiä sekunnissa.<br />Sisällysluettelon rakennus on käynnissä…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Kaikki viestit id-arvoon %1$d asti on poistettu sisällysluettelosta.<br />Poistaminen on käynnissä…',
	'SEARCH_INDEX_CREATED'					=> 'Kaikki keskustelufoorumin viesttit ovat sisällysluettelossa',
	'SEARCH_INDEX_REMOVED'					=> 'Tämän hakukoneen sisällysluettelo on poistettu',
	'SEARCH_INTERVAL'						=> 'Hakutoiminnon rajoitus rekisteröityneeltä käyttäjältä',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Kuinka monta sekunttia käyttäjän on odotettava hakujensa välillä. Tämä raja on käyttäjäkohtainen.',
	'SEARCH_STORE_RESULTS'					=> 'Hakutulosten pitäminen välimuistissa',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Hakutulokset pidetään välimuistissa tämän aikaa sekuntteina. Aseta nolla poistaaksesi hakutulosten asettamisen välimuistiin.',
	'SEARCH_TYPE'							=> 'Hakukone',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB sallii käytettävän hakukoneen vaihtamisen, jonka avulla voit etsiä tuloksia keskustelufoorumin viesteistä. Oletuksena käytetään phpBB:n omaa fulltext hakua.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Olet vaihtanut hakukonetta. Varmista, että sille on luotu oma sisällysluettelonsa, jotta voisit käyttää tätä hakukonetta.',

	'TOTAL_WORDS'							=> 'Sisällysluettelossa olevien sanojen määrä',
	'TOTAL_MATCHES'							=> 'Sisällysluettelossa olevien suhteellisten vastaavuuksien määrä',

	'YES_SEARCH'							=> 'Ota Hakutoiminto käyttöön',
	'YES_SEARCH_EXPLAIN'					=> 'Ottaa hakutoiminnon käyttöön, mukaanlukien käyttäjähaun.',
	'YES_SEARCH_UPDATE'						=> 'Ota käyttöön fulltext päivitykset',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'fulltext sisällysluettelon päivitys viestin lähetyksen yhteydessä. Tämä asetus ohitetaan, mikäli Hakutoiminto ei ole käytössä.',
));

?>