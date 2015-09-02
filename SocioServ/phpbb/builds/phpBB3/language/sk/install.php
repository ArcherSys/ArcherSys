<?php
/**
*
* install [Slovak]
*
* @package language
* @version $Id: install.php,v 1.119 2007/07/24 15:17:47 acydburn Exp $
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
	'ADMIN_CONFIG'				=> 'Konfigurácia administrátora',
	'ADMIN_PASSWORD'			=> 'Heslo administrátora',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Potvrdenie hesla administrátora',
	'ADMIN_PASSWORD_EXPLAIN'	=> '(Heslo musí mať minimálne 6 a maximálne 30 znakov)',
	'ADMIN_TEST'				=> 'Test nastavení administrátora',
	'ADMIN_USERNAME'			=> 'Používateľské meno administrátora',
	'ADMIN_USERNAME_EXPLAIN'	=> '(Meno musí mať minimálne 3 a maximálne 20 znakov)',
	'APP_MAGICK'				=> 'Podpora Imagemagick [ Prílohy ]',
	'AUTHOR_NOTES'				=> 'Poznámky autora<br />» %s',
	'AVAILABLE'					=> 'Dostupné',
	'AVAILABLE_CONVERTORS'		=> 'Dostupné konvertory', 

	'BEGIN_CONVERT'				=> 'Spustiť konverziu', 
	'BLANK_PREFIX_FOUND'		=> 'Testovanie tabuliek ukázalo platnú inštaláciu bez použitia predpony tabuliek.',
	'BOARD_NOT_INSTALLED'			=> 'Nebola nájdená žiadna inštalácia',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'Na vykonanie konverzie musíte mať nainštalovanú základnú verziu phpBB3. Na úspešný prechod je dôležité, aby bola nová i stará inštalácia dostupná v rovnakej databáze. Teraz by ste mali <a href="%s">nainštalovať phpBB3</a>.',

	'CATEGORY'					=> 'Kategória',
	'CACHE_STORE'				=> 'Typ vyrovnávacej pamäte',
	'CACHE_STORE_EXPLAIN'		=> 'Fyzické umiestenie údajov vyrovnávacej pamäte, preferovaný je súborový systém',
	'CAT_CONVERT'				=> 'Konverzia',
	'CAT_INSTALL'				=> 'Inštalácia',
	'CAT_OVERVIEW'				=> 'Prehľad',
	'CAT_UPDATE'				=> 'Aktualizácia',
	'CHANGE'					=> 'Zmeniť',
	'CHECK_TABLE_PREFIX'		=> 'Prosím, skontrolujte predponu tabuliek a akciu opakujte.',
	'CLEAN_VERIFY'				=> 'Čistenie a overovanie finálnej štruktúry',
	'CLEANING_USERNAMES'		=> 'Prečisťujú sa používateľské mená',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> je čisté používateľské meno pre:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Na starom fóre boli nájdené kolidujúce používateľské mená. Na dokončenie konverzie odstráňte alebo premenujte jedného z nich tak, aby neboli dve zhodné mená v databáze.',
	'COLLIDING_USER'			=> '» ID používateľa: <strong>%d</strong> používateľské meno: <strong>%s</strong> (počet príspevkov: %d)',
	'CONFIG_CONVERT'			=> 'Konvertuje sa konfigurácia',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Nebolo možné zapísať konfiguračný súbor. Alternatívne metódy na vytvorenie tohto súboru sú popísané nižšie.',
	'CONFIG_FILE_WRITTEN'		=> 'Konfigurácia bola úspešne zapísaná, môžete pokračovať v inštalácii.',
	'CONFIG_PHPBB_EMPTY'		=> 'Konfiguračná premenná phpBB3 pre "%s" je prázdna.',
	'CONFIG_RETRY'				=> 'Znova',
	'CONTACT_EMAIL_CONFIRM'		=> 'Potvrdiť kontaktnú e-mailovú adresu',
	'CONTINUE_CONVERT'			=> 'Pokračovať v konverzii',
	'CONTINUE_CONVERT_BODY'		=> 'Bol zistený predchádzajúci pokus o konverziu. Teraz si môžete vybrať medzi spustením novej konverzie alebo pokračovaním v predchádzajúcej.',
	'CONTINUE_LAST'				=> 'Pokračovať posledným príkazom',
	'CONTINUE_OLD_CONVERSION'	=> 'Pokračovať v predchádzajúcom pokuse',
	'CONVERT'					=> 'Konvertovať',
	'CONVERT_COMPLETE'			=> 'Konverzia dokončená',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Práve ste úspešne prekonvertovali vaše fórum na verziu phpBB 3.0. Teraz sa môžete prihlásiť a <a href="../">vstúpiť so vášho fóra</a>. Skontrolujte, či boli všetky nastavenia korektne prenesené, potom odstráňte priečinok install/, čím umožníte prístup na fórum. Pamätajte, že podpora phpBB je dostupná na internete cez <a href="http://www.phpbb.com/support/documentation/3.0/">Používateľský manuál</a> a <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">fóra podpory</a>.',
	'CONVERT_INTRO'				=> 'Víta vás konvertor phpBB',
	'CONVERT_INTRO_BODY'		=> 'Tu môžete importovať údaje z iných (nainštalovaných) systémov pre fóra. Zoznam uvedený nižšie uvádza všetky teraz dostupné moduly konverzie. Ak sa v zozname nenachádza konvertor pre softvér, z ktorého chcete skonvertovať údaje, skúste navštíviť naše webové stránky, kde môžu byť dostupné na stiahnutie ďalšie moduly.',
	'CONVERT_NEW_CONVERSION'	=> 'Nová konverzia',
	'CONVERT_NOT_EXIST'			=> 'Zadaný konvertor neexistuje',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Informácie, ktoré ste zadali, boli overené. Ak chcete pustiť proces konverzie, kliknite na tlačidlo umiestnené nižšie.',
	'CONV_ERR_FATAL'					=> 'Kritická chyba konverzie',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'Na bývalom fóre je povolené odosielanie príloh cez FTP. Prosím, vypnite túto možnosť a skontrolujte, či je prítomný platný priečinok na odosielanie, potom do neho skopírujte všetky prílohy. Keď toto urobíte, reštartujte konvertor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Nie sú dostupné žiadne konfiguračné údaje potrebné pre konverziu.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Nepodarilo sa získať informácie o prístupe k fóru.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Nepodarilo sa získať kategórie.',
	'CONV_ERROR_GET_CONFIG'				=> 'Nepodarilo sa získať konfiguráciu fóra.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Nie je možný prístup/čítanie "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Nie je možné získať informácie o autentifikácii skupiny.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'V tabuľke skupín bola zistená nekonzistentnosť v add_bots() - všetky špeciálne skupiny (pokiaľ ich chcete) musíte pridať ručne.',
	'CONV_ERROR_INSERT_BOT'				=> 'Nie je možné vložiť robota do tabuľky používateľov.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Nie je možné vložiť robota do tabuľky robotov.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Nie je možné vložiť používateľa do tabuľky user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Chyba spracovania správ',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Poznámka pre vývojára: ak chcete použiť %s, musíte zadať $convertor[\'avatar_path\'].',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Relatívna cesta k zdrojovému fóru nebola zadaná.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Poznámka pre vývojára: ak chcete použiť %s, musíte zadať $convertor[\'avatar_gallery_path\'].',
	'CONV_ERROR_NO_GROUP'				=> 'Skupina "%1$s" nebola v %2$s nájdená.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Poznámka pre vývojára: ak chcete použiť %s, musíte zadať $convertor[\'ranks_path\'].',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Poznámka pre vývojára: ak chcete použiť %s, musíte zadať $convertor[\'smilies_path\'].',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Poznámka pre vývojára: ak chcete použiť %s, musíte zadať $convertor[\'upload_dir\'].',
	'CONV_ERROR_PERM_SETTING'			=> 'Nie je možné vložiť/aktualizovať nastavenie oprávnení.',
	'CONV_ERROR_PM_COUNT'				=> 'Nie je možné vybrať priečinok pre súčet SS.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Nie je možné vložiť nové fórum nahradzujúce starú kategóriu.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Nie je možné vložiť nové fórum nahradzujúce staré fórum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Nie je možné získať informácie o autentifikácii používateľa.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Nesprávna skupina "%1$s" definovaná v %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Toto stránka zhromažďuje údaje potrebné na prístup k zdrojovému fóru. Vyplňte informácie o vašom bývalom fóre; pri konverzii nebudú zmenené žiadne informácie v zadanej starej databáze. Zdrojové fórum by malo byť zneprístupnené používateľom, aby mohlo dôjsť ku konzistentnej konverzii.',
	'CONV_SAVED_MESSAGES'				=> 'Uložené správy',

	'COULD_NOT_COPY'			=> 'Nie je možné skopírovať súbor <strong>%1$s</strong> do <strong>%2$s</strong><br /><br />Uistite sa, že cieľový priečinok existuje a webový server do neho môže zapisovať.',
	'COULD_NOT_FIND_PATH'		=> 'Nie je možné nájsť cestu k vášmu bývalému fóru. Skontrolujte nastavenia a skúste to znova.<br />» Zadaná zdrojová cesta bola %s.',

	'DBMS'						=> 'Typ databázy',
	'DB_CONFIG'					=> 'Konfigurácia databázy',
	'DB_CONNECTION'				=> 'Pripojenie k databáze',
	'DB_ERR_INSERT'				=> 'Chyba počas vykonávania príkazu <code>INSERT</code>',
	'DB_ERR_LAST'				=> 'Chyba počas spracovania <var>query_last</var>',
	'DB_ERR_QUERY_FIRST'		=> 'Chyba počas vykonávania <var>query_first</var>',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Chyba počas vykonávania <var>query_first</var>, %s ("%s")',
	'DB_ERR_SELECT'				=> 'Chyba počas spustenia príkazu <code>SELECT</code>',
	'DB_HOST'					=> 'Databázový server alebo DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN znamená Data Source Name a je relevantný len pre inštalácie cez OBDC',
	'DB_NAME'					=> 'Názov databázy',
	'DB_PASSWORD'				=> 'Heslo k databáze',
	'DB_PORT'					=> 'Port databázového servera',
	'DB_PORT_EXPLAIN'			=> 'Zadávajte len v prípade, že port je iný ako štandardný.',
	'DB_USERNAME'				=> 'Používateľské meno databázy',
	'DB_TEST'					=> 'Otestovať pripojenie',
	'DEFAULT_LANG'				=> 'Predvolený jazyk fóra',
	'DEFAULT_PREFIX_IS'			=> 'Predvolená predpona tabuliek pre %1$s je <strong>%2$s</strong>',
	'DEV_NO_TEST_FILE'			=> 'Nebola zadaná žiadna hodnota pre premennú test_file v konvertore. Ak ste používateľ tohto konvertora, mali by ste toto nahlásiť autorovi tohto modulu. Ak ste autor tohto modulu, musíte určiť názov súboru, ktorý existuje v zdrojovom fóre, aby mohlo byť k nemu overená cesta.',
	'DIRECTORIES_AND_FILES'		=> 'Nastavenie priečinkov a súborov',
	'DISABLE_KEYS'				=> 'Vypnutie kláves',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Podpora vzdialeného pripojenie na FTP [ Inštalácia ]',
	'DLL_GD'					=> 'Podpora GD grafiky [ Vizuálne overovanie ]',
	'DLL_MBSTRING'				=> 'Podpora znakov multi-byte',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ cez ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL s rozšírením MySQLi',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'Podpora XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Podpora kompresie typu zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Stiahnuť konfiguračný súbor',
	'DL_CONFIG_EXPLAIN'			=> 'Môžete stiahnuť celý konfiguračný súbor na váš počítač. Potom budete musieť súbor ručne umiestniť na server a prepísať už existujúci prázdny konfiguračný súbor v koreňovom priečinku phpBB 3.0. Pamätajte, že je potrebné súbor odoslať prenosom ASCII (viď. dokumentácia pre váš klient FTP). Ako náhle umiestnite súbor config.php, kliknite na tlačidlo “Hotovo” a presuniete sa na ďalší krok.',
	'DL_DOWNLOAD'				=> 'Stiahnuť',
	'DONE'						=> 'Hotovo',

	'ENABLE_KEYS'				=> 'Opätovné povolenie kláves. Toto môže chvíľu trvať',

	'FILES_OPTIONAL'			=> 'Voliteľné súbory a priečinky',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Voliteľné</strong> - Tieto súbory, priečinky alebo oprávnenia nie sú povinné a nutné. Inštalačný systém sa pokúsi použiť rôzne metódy na ich vytvorenie v prípade, že neexistujú alebo nie je možnosť do nich zapisovať. Napriek tomu prítomnosť týchto súborov, priečinkov a oprávnení urýchli inštalačný proces.',
	'FILES_REQUIRED'			=> 'Súbory a priečinky',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Povinné</strong> - ak má phpBB fungovať korektne, potrebuje mať povolenie na prístup alebo zapisovanie do týchto priečinkov alebo súborov. Pokiaľ vidíte nápis "Nenájdené", musíte daný súbor alebo priečinok vytvoriť. Pokiaľ je vypísané "Nie je možné zapisovať", musíte zmeniť atribúty pre zápis do daného súboru alebo priečinka, aby do nich mohol systém phpBB zapisovať.',
	'FILLING_TABLE'				=> 'Napĺňa sa tabuľka <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Napĺňanie tabuliek',
	'FINAL_STEP'				=> 'Vykonať posledný krok',
	'FORUM_ADDRESS'				=> 'Adresa fóra',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Toto je adresa http predchádzajúceho fóra',
	'FORUM_PATH'				=> 'Cesta k fóru',
	'FORUM_PATH_EXPLAIN'		=> 'Toto je <strong>relatívna</strong> cesta na disku k vášmu predchádzajúcemu fóru z <strong>koreňového priečinka tejto inštalácie phpBB3</strong>.',
	'FOUND'						=> 'Nájdené',
	'FTP_CONFIG'				=> 'Preniesť konfiguráciu pomocou FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB zistilo prítomnosť modulu FTP na tomto serveri. Ak chcete, môžete sa pokúsiť o inštaláciu súboru config.php použitím tohto modulu. Budete musieť zadať nižšie požadované informácie. Pamätajte, že používateľské meno a heslo sú tie k vášmu serveru! (opýtajte sa vášho poskytovateľa hostingu, ak si nie ste istý, aké to sú)',
	'FTP_PATH'					=> 'Cesta k FTP',
	'FTP_PATH_EXPLAIN'			=> 'Toto je cesta z vášho koreňového priečinka k phpBB, napr. htdocs/phpBB3/',
	'FTP_UPLOAD'				=> 'Odoslať',

	'GPL'						=> 'Licencia GPL',

	'INITIAL_CONFIG'			=> 'Základná konfigurácia',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Teraz, po zistení, že je možné na váš server nainštalovať phpBB, budete musieť zadať niekoľko dôležitých údajov. Ak neviete, ako sa pripojiť k vašej databáze, kontaktujte poskytovateľa hostingu (v prvom rade) alebo navštívte fóra podpory phpBB. Pri zadávaní údajov si dávajte pozor a pre istotu ich viac krát skontrolujte.',
	'INSTALL_CONGRATS'			=> 'Gratulujeme',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		<p>Práve ste úspešne nainštalovali phpBB %1$s. Teraz máte dve možnosti, čo urobiť s týmto fórom phpBB3:</p>
		<h2>Skonvertovať existujúce fórum na phpBB3</h2>
		<p>phpBB je schopné skonvertovať údaje zo starších verzií phpBB(2.0.x) alebo iných systémov do phpBB3. Ak máte existujúce fórum, ktoré chcete skonvertovať, <a href="%2$s">pokračujte na konverziu</a>.</p>
		<p>Kliknutím na tlačidlo uvedené nižšie sa dostanete do Administrátorského panela (ACP). Urobte si chvíľu čas a poprezerajte si možnosti, ktoré phpBB3 ponúka. Podpora online je dostupná cez <a href="http://www.phpbb.com/support/documentation/3.0/">Dokumentáciu</a> a <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">Fórum phpBB.com (ENG)</a>, pozrite si tiež sekciu <a href="%3$s">PREĆÍTAJTE SI</a>, kde sú uvedené ďalšie informácie.</p><p><strong>Teraz odstráňte, presuňte alebo premenujte priečinok install/. Pokiaľ bude tento priečinok existovať, bude dostupný len Administrátorský panel (ACP).</strong></p>',
	'INSTALL_INTRO'				=> 'Vitajte v inštalácii phpBB',
// TODO: write some more introductions here
	'INSTALL_INTRO_BODY'		=> 'Pomocou tejto voľby je možné nainštalovať phpBB na váš server.</p><p>Na vykonanie inštalácie musíte vedieť nastavenia databázy. Ak ich neviete, kontaktujte poskytovateľa hostingu. Bez týchto nastavení nemôžete pokračovať. Musíte vedieť:</p>

	<ul>
		<li>Typ databázy - databáza, ktorú budete používať.</li>
		<li>Databázový server alebo DSN - adresa databázového servera.</li>
		<li>Port databázového servera - port slúžiaci na pripojenie k databáze (vo väčšine prípadov to nebudete potrebovať).</li>
		<li>Názov databázy - názov databázy uloženej na serveri.</li>
		<li>Používateľské meno a heslo k databáze - prihlasovacie údaje potrebné na prístup k databáze.</li>
	</ul>

	<p><strong>Poznámka:</strong> ak inštalujete pomocou SQLite, mali by ste zadať plnú cestu k súboru databázy políčku DSN a ponechať polia pre používateľské meno a heslo prázdne. Z bezpečnostných dôvodov by ste sa mali uistiť, že súbor databázy nie je uložený na mieste dostupnom cez webové rozhranie.</p>

	<p>phpBB3 podporuje nasledujúce databázy:</p>
	<ul>
		<li>MySQL 3.23 alebo vyššia (vrátane MySQLi)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>MS SQL Server 2000 alebo vyššia (priamo alebo cez ODBC)</li>
		<li>Oracle</li>
	</ul>
	
	<p>Zobrazené budú len databázy podporované vašim serverom.',
	'INSTALL_INTRO_NEXT'		=> 'Ak chcete zahájiť inštaláciu, kliknite na nižšie uvedené tlačidlo.',
	'INSTALL_LOGIN'				=> 'Prihlásiť',
	'INSTALL_NEXT'				=> 'Ďalší krok',
	'INSTALL_NEXT_FAIL'			=> 'Niektoré testy neboli úspešné. Pred pokračovaním na ďalší krok by ste mali tieto problémy odstrániť. Ak tak neurobíte, inštalácia phpBB nemusí byť úspešne dokončená.',
	'INSTALL_NEXT_PASS'			=> 'Všetky základné testy boli úspešné, môžete pokračovať na nasledujúci krok inštalácie. Ak ste zmenili niektoré oprávnenia, moduly, atď. a chcete opätovne spustiť testy, môžete tak urobiť.',
	'INSTALL_PANEL'				=> 'Inštalačný panel',
	'INSTALL_SEND_CONFIG'		=> 'Bohužiaľ, phpBB nemohlo zapísať konfiguračné informácie priamo do súboru config.php. Môže to byť preto, lebo súbor neexistuje alebo nie je možné do neho zapisovať. Nižšie bude uvedených niekoľko možností, ako umožniť zapísanie týchto údajov do súboru config.php.',
	'INSTALL_START'				=> 'Spustiť inštaláciu',
	'INSTALL_TEST'				=> 'Opätovne spustiť testy',
	'INST_ERR'					=> 'Chyba pri inštalácii',
	'INST_ERR_DB_CONNECT'		=> 'Nie je možné pripojiť sa k databáze so zadaným menom a heslom.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Zvolený súbor databázy sa nachádza v priečinkoch fóra. Tento súbor by ste mali presunúť na umiestnenie, ktoré nie je dostupné cez webové rozhranie.',
	'INST_ERR_DB_NO_ERROR'		=> 'Žiadna chybová správa',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Verzia MySQL nainštalovaná na tomto stroji nie je kompatibilná s možnosťou “MySQL s rozšírením MySQLi”, ktorú ste označili. Prosím, skúste označiť možnosť “MySQL”.',
	'INST_ERR_DB_NO_SQLITE'		=> 'Verzia rozšírenia SQLite, ktorú ste nainštalovali, je príliš stará, musí byť aktualizovaná aspoň na verziu 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Verzia Oracle nainštalovaná na tomto stroji vyžaduje nastavenie parametra <var>NLS_CHARACTERSET</var> na <var>UTF8</var>. Buď aktualizujte na verziu 9.2+ alebo zmeňte parameter.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'Verzia Firebird nainštalovaná na tomto stroji je staršia ako 2.0, prosím, aktualizujte na novšiu verziu.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'Databáza vybraná pre Firebird má veľkosť stránky menej ako 8192, musí to byť aspoň 8192.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Vybraná databáza nebola vytvorená v kódovaní <var>UNICODE</var> alebo <var>UTF8</var>. Skúste inštaláciu s databázou v kódovaní <var>UNICODE</var> alebo <var>UTF8</var>',
	'INST_ERR_DB_NO_NAME'		=> 'Nezadali ste názov databázy',
	'INST_ERR_EMAIL_INVALID'	=> 'Zadaná e-mailová adresa, nie je platná',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Zadané e-mailové adresy sa nezhodujú',
	'INST_ERR_FATAL'			=> 'Kritická chyba inštalácie',
	'INST_ERR_FATAL_DB'			=> 'Nastala kritická a neopraviteľná chyba databázy. Toto sa môže stať, ak nemá zadaný používateľ dostatočné práva na vykonanie príkazov <code>CREATE TABLES</code> alebo <code>INSERT</code> atď. ďalšie informácie môžu byť zobrazené nižšie. V prvom rade kontaktujte poskytovateľa hostingu, prípadne fóra podpory phpBB.',
	'INST_ERR_FTP_PATH'			=> 'Nie je možné zmeniť daný priečinok, prosím, skontrolujte cestu.',
	'INST_ERR_FTP_LOGIN'		=> 'Nie je možné prihlásenie k serveru FTP, skontrolujte používateľské meno a heslo',
	'INST_ERR_MISSING_DATA'		=> 'Musíte vyplniť všetky polia na tejto stránke',
	'INST_ERR_NO_DB'			=> 'Nie je možné načítať modul PHP pre vybraný typ databázy',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Zadané heslá sa nezhodujú.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Heslo je príliš dlhé, môže obsahovať maximálne 30 znakov.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Heslo je príliš krátke, musí obsahovať minimálne 6 znakov.',
	'INST_ERR_PREFIX'			=> 'Tabuľky so zadanou predponou už existujú, prosím, vyberte inú.',
	'INST_ERR_PREFIX_INVALID'	=> 'Zadaná predpona tabuliek je pre vašu databázu neplatná. Prosím, skúste inú odstránením znakov ako pomlčka.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Zadaná predpona tabuliek je príliš dlhá, môže obsahovať maximálne %d znakov.',
	'INST_ERR_USER_TOO_LONG'	=> 'Používateľské meno je príliš dlhé, môže obsahovať maximálne 20 znakov.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Používateľské meno je príliš krátke, musí obsahovať minimálne 2 znaky.',
	'INVALID_PRIMARY_KEY'		=> 'Neplatný primárny kľúč : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Pamätajte, že toto môže chvíľu trvať... Prosím, nezastavujte skript.',

	// mbstring
	'MBSTRING_CHECK'						=> 'Kontrola rozšírenia <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Povinné</strong> - <samp>mbstring</samp> je rozšírenie PHP, ktoré poskytuje funkcie pre reťazce multi-byte. Určité funkcie mbstring nie sú kompatibilné s phpBB a musia byť vypnuté.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Funkcia Overloading',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> musí byť nastavená na 0 alebo 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Transparentné kódovanie znakov',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> musí byť nastavené na 0.',
	'MBSTRING_HTTP_INPUT'					=> 'Konverzia vstupných znakov HTTP',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> musí byť nastavené na <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'Konverzia výstupných znakov HTTP',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> musí byť nastavené na <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Uistite sa, že tento priečinok existuje a webový server do neho môže zapisovať. Potom to skúste znova:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Uistite sa, že tieto priečinky existujú a webový server do nich môže zapisovať. Potom to skúste znova:<br />»<strong>%s</strong>',

	'NAMING_CONFLICT'			=> 'Konflikt pri pomenovaní: %s a %s sú obidva aliasy<br /><br />%s',
	'NEXT_STEP'					=> 'Pokračovať',
	'NOT_FOUND'					=> 'Nenájdené',
	'NOT_UNDERSTAND'			=> 'Nebolo možné rozpoznať %s #%d, tabuľka %s ("%s")',
	'NO_CONVERTORS'				=> 'Na použitie nie sú dostupné žiadne konvertory',
	'NO_CONVERT_SPECIFIED'		=> 'Nie je zadaný konvertor',
	'NO_LOCATION'				=> 'Nie je možné zistiť umiestnenie. Ak viete, že Imagemagick je nainštalovaný, mali by ste umiestnenie zadať v Administrátorskom paneli',
	'NO_TABLES_FOUND'			=> 'Neboli nájdené žiadne tabuľky.',
// TODO: Write some explanatory introduction text

	'OVERVIEW_BODY'					=> 'Víta vás nová verzia phpBB novej generácie, nástupcu phpBB 2.0.x, phpBB 3.0! Verzie Release Candidate sú určené pre širšiu verejnosť a snažia sa o vychytanie posledných chýb a nedostatkov, aby finálna verzia bola úplne bez chyby.</p><p><strong style="text-transform: uppercase;">Poznámka:</strong> Toto vydanie ešte <strong style="text-transform: uppercase;">nie je konečné</strong> a stále nie je odporúčané používať ho ako fórum pre verejnosť.</p><p>Tento inštalačný systém vás prevedie procesom inštalácie phpBB, konverziou iného fóra alebo aktualizáciou na poslednú verziu phpBB. Viac informácií o každej z možností získate v ponuke vyššie.',

	'PCRE_UTF_SUPPORT'				=> 'Podpora pre PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB <strong>nebude</strong> fungovať, ak vaša inštalácia PHP nie je skompilovaná s podporou UTF-8 v rozšírení PCRE',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Funkcia PHP getimagesize() je dostupná',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Povinné</strong> - Aby phpBB fungovalo správne, funkcia getimagesize musí byť dostupná.',
	'PHP_OPTIONAL_MODULE'			=> 'Voliteľné moduly',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Voliteľné</strong> - Tieto moduly alebo aplikácie sú voliteľné, nepotrebujete ich na prevádzku phpBB 3.0. Pokiaľ ich ale máte, poskytujú množstvo užitočných funkcií.',
	'PHP_SUPPORTED_DB'				=> 'Podporované typy databáz',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Povinné</strong> - Musíte mať povolené využívať aspoň jeden typ databázy kompatibilný s PHP. Pokiaľ nie je ani jeden typ databázy dostupný, kontaktujte poskytovateľa hostingu alebo si preštudujte potrebnú dokumentáciu.',
	'PHP_REGISTER_GLOBALS'			=> 'Nastavenie PHP <var>register_globals</var> je povolené',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB zaručuje stály chod pri povolenom nastavení register_globals, ale pre väčšiu bezpečnosť je lepšie, pokiaľ je tento režim vypnutý.',
	'PHP_SAFE_MODE'					=> 'Bezpečný režim (safe mode)',
	'PHP_SETTINGS'					=> 'Verzia PHP a nastavenia',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Povinné</strong> - Ak chcete nainštalovať phpBB, verzia PHP na vašom serveri nesmie byť staršia ako 4.3.3. Ak je nižšie zobrazený <var>safe mode</var>, je tento režim aktivovaný v nastaveniach PHP. Toto môže priniesť určité obmedzenia pri vzdialenej administrácii a podobných funkciách.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'Nastavenie PHP <var>allow_url_fopen</var> je povolené',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Voliteľné</strong> - Toto nastavenie je voliteľné, hoci niektoré funkcie phpBB ako napr. vzdialené obrázky postavičky nebudú bez neho fungovať správne.',
	'PHP_VERSION_REQD'				=> 'PHP verzia >= 4.3.3',
	'POST_ID'						=> 'ID príspevku',
	'PREFIX_FOUND'					=> 'Prehľadanie tabuliek ukázalo inštaláciu použitím <strong>%s</strong> ako predpony tabuliek.',
	'PREPROCESS_STEP'				=> 'Vykonávanie prípravných funkcií/príkazov',
	'PRE_CONVERT_COMPLETE'			=> 'Všetky kroky potrebné vykonať pred konverziou boli úspešne dokončené. Teraz by ste mali spustiť samotný proces konverzie.',
	'PROCESS_LAST'					=> 'Spracovávanie posledných príkazov',

	'REFRESH_PAGE'				=> 'Na pokračovaní v konverzii obnoviť stránku',
	'REFRESH_PAGE_EXPLAIN'		=> 'Ak je nastavené na Áno, konvertor obnoví po dokončení posledného kroku obsah stránky, aby ste mohli pokračovať. Ak je toto vaša prvá konverzia určená na testovacie účely a zistenie prípadných chýb, odporúčame túto možnosť nastaviť na Nie.',
//	'REQUIRED'					=> 'Povinné',
	'REQUIREMENTS_TITLE'		=> 'Kompatibilita servera',
	'REQUIREMENTS_EXPLAIN'		=> 'Pred vykonaním inštalácie inštalátor skontroluje nastavenia na vašom serveri pre bezproblémový chod phpBB. Prosím, prečítajte si pozorne výsledky testov a pokiaľ je jeden alebo viac testov povinných súčastí neúspešných, nepokračujte v inštalácii. Pokiaľ chcete využívať aj prídavné funkcie, uistite sa, že testy voliteľných súčastí sú tiež úspešné.',
	'RETRY_WRITE'				=> 'Znova sa pokúsiť zapísať konfiguráciu',
	'RETRY_WRITE_EXPLAIN'		=> 'Ak chcete, môžete zmeniť oprávnenia pre súbor config.php tak, aby phpBB mohlo do neho zapisovať. Po zmene oprávnení kliknite na tlačidlo Znova sa pokúsiť zapísať konfiguráciu. Po úspešnej inštalácii nezabudnite vrátiť oprávnenia k súboru config.php na pôvodné hodnoty.',

	'SCRIPT_PATH'				=> 'Cesta k skriptu',
	'SCRIPT_PATH_EXPLAIN'		=> 'Cesta umiestnenia phpBB relatívna k názvu doménu',
	'SELECT_LANG'				=> 'Vybrať jazyk',
	'SERVER_CONFIG'				=> 'Konfigurácia servera',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Index vyhľadávania nebol prekonvertovaný',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Váš starý index vyhľadávania nebol prekonvertovaný. Vyhľadávanie vždy vráti prázdne výsledky. Ak chcete vytvoriť nový index, prejdite do Administrátorského panela, karta Údržba a z ponuky vyberte index vyhľadávania.',
	'SOFTWARE'					=> 'Softvér fóra',
	'SPECIFY_OPTIONS'			=> 'Určiť možnosti konverzie',
	'STAGE_ADMINISTRATOR'		=> 'Detaily administrátora',
	'STAGE_ADVANCED'			=> 'Pokročilé nastavenia',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Tieto nastavenia zmeňte iba v prípade, že viete o iných hodnotách. V prípade, že si nie ste istý, pokračujte ďalej, tieto nastavenia sa dajú neskôr zmeniť cez Administrátorský panel fóra.',
	'STAGE_CONFIG_FILE'			=> 'Konfiguračný súbor',
	'STAGE_CREATE_TABLE'		=> 'Vytvoriť tabuľky v databáze',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Databázové tabuľky phpBB 3.0 boli úspešne vytvorené a boli do nich vložené základné údaje. Kliknutím na tlačidlo <strong>Pokračovať</strong> dokončíte inštaláciu.',
	'STAGE_DATABASE'			=> 'Nastavenia databázy',
	'STAGE_FINAL'				=> 'Ukončenie inštalácie',
	'STAGE_INTRO'				=> 'Úvod',
	'STAGE_IN_PROGRESS'			=> 'Prebieha konverzia',
	'STAGE_REQUIREMENTS'		=> 'Požiadavky',
	'STAGE_SETTINGS'			=> 'Nastavenia',
	'STARTING_CONVERT'			=> 'Spúšťa sa proces konverzie',
	'STEP_PERCENT_COMPLETED'	=> 'Krok <strong>%d</strong> z <strong>%d</strong>: hotovo %d%%',
	'SUB_INTRO'					=> 'Úvod',
	'SUB_LICENSE'				=> 'Licencia',
	'SUB_SUPPORT'				=> 'Podpora',
	'SUCCESSFUL_CONNECT'		=> 'Pripojenie overené',
// TODO: Write some text on obtaining support
	'SUPPORT_BODY'				=> 'Počas fázy Release Candidate bude poskytovaná plná podpora na <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">fórach podpory phpBB 3.0</a>. Poskytneme základné odpovede na otázky ohľadne všeobecného nastavenia, problémov s konfiguráciou a podporu pre chyby z väčšej časti spôsobené neopravenými chybami systému. Budeme povoľovať diskusiu o úpravách/modifikáciách, vlastnom kóde/štýloch, ktoré sú vytvorené niekým iným ako phpBB Group.</p><p>Viac informácií získate v <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Používateľskej príručke</a>.</p><p>Ak chcete byť informovaný o najnovších aktualizáciách, vydaniach alebo novinkách, môžete sa prihlásiť do nášho <a href="http://www.phpbb.com/support/">mailing listu</a>.',
	'SYNC_FORUMS'				=> 'Spúšťa sa synchronizácia fór',
	'SYNC_POST_COUNT'			=> 'Synchronizuje sa počet príspevkov',
	'SYNC_POST_COUNT_ID'		=> 'Synchronizuje sa počet príspevkov od <var>položky</var> %1$s do %2$s.',
	'SYNC_TOPICS'				=> 'Spúšťa sa synchronizácia tém',
	'SYNC_TOPIC_ID'				=> 'Synchronizujú sa témy (id: od $1%s do $2%s)',

	'TABLES_MISSING'			=> 'Nebolo možné nájsť tieto tabuľky<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Predpona tabuliek v databáze',
	'TABLE_PREFIX_SAME'			=> 'Predpona tabuliek musí byť rovnaká ako je použitá softvérom, z ktorého konvertujete fórum.<br />» Zvolená predpona tabuliek bola %s',
	'TESTS_PASSED'				=> 'Kontrola prebehla úspešne',
	'TESTS_FAILED'				=> 'Kontrola neprebehla úspešne',

	'UNABLE_WRITE_LOCK'			=> 'Nie je možné zapísať uzamykací súbor',
	'UNAVAILABLE'				=> 'Nedostupné',
	'UNWRITABLE'				=> 'Nie je možné zapisovať',
	'UPDATE_TOPICS_POSTED'		=> 'Generujú sa informácie o odoslaných témach',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Počas generovania informácií o odoslaných témach sa objavila chyba. Tento krok je možné opakovať v Administrátorskom paneli po ukončení procesu konverzie.',
	'VERSION'					=> 'Verzia',

	'WELCOME_INSTALL'			=> 'Víta vás Inštalácia phpBB3',
	'WRITABLE'					=> 'Zapisovateľné',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Všetky súbory sú zhodné s najnovšou verziou phpBB. Teraz spustite aktualizačný skript databázy.',
	'ARCHIVE_FILE'				=> 'Zdrojový súbor v archíve',

	'BACK'		=> 'Naspäť',
	'BINARY_FILE'		=> 'Binárny súbor',
	'BOT'				=> 'Robot',

	'CHANGE_CLEAN_NAMES'         	=> 'Systém, ktorý kontroloval používateľské mená na duplicity, bol upravený. Po porovnaní novou metódou bolo zistené, že existuje niekoľko používateľov, ktorí majú rovnaké meno. Musíte odstrániť alebo premenovať týchto používateľov, aby ste zabezpečili, že každé používateľské meno používa len jeden človek. Potom budete môcť pokračovať.',
	'CHECK_FILES'					=> 'Skontrolovať súbory',
	'CHECK_FILES_AGAIN'				=> 'Znova skontrolovať súbory',
	'CHECK_FILES_EXPLAIN'			=> 'Počas nasledujúceho kroku budú všetky súbory porovnané s aktualizačnými - v prípade, že sa to deje prvý krát, môže to chvíľu trvať.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Podľa údajov v databáze máte najaktuálnejšiu verziu. Môžete pokračovať kontrolou súborov, aby ste sa uistili, že naozaj máte súbory najaktuálnejšej verzie phpBB.',
	'CHECK_UPDATE_DATABASE'			=> 'Pokračovať v procese aktualizácie',
	'COLLECTED_INFORMATION'			=> 'Zozbierané informácie o súboroch',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Nižšie uvedený zoznam zobrazuje informácie o súboroch, ktoré je potrebné aktualizovať. Prosím, prečítajte si informácie pre každým blokom, aby ste vedeli, čo daný súbor znamená a čo máte urobiť, aby bola aktualizácia úspešná.',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Teraz by ste sa mali <a href="../ucp.php?mode=login">prihlásiť na fórum</a> a skontrolovať, či všetko funguje ako má. Nezabudnite odstrániť, premenovať alebo presunúť priečinok /install!',
	'CONTINUE_UPDATE_NOW'			=> 'Pokračovať v procese aktualizácie',
	'CURRENT_FILE'					=> 'Aktuálny originálny súbor',
	'CURRENT_VERSION'				=> 'Aktuálna verzia',

	'DATABASE_TYPE'						=> 'Typ databázy',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Aktualizačný súbor databázy umiestnený v inštalačnom priečinku je starý. Prosím, umiestnite do tohto priečinka správnu verziu súboru.',
	'DELETE_USER_REMOVE'				=> 'Odstrániť používateľa a jeho príspevky',
	'DELETE_USER_RETAIN'				=> 'Odstrániť používateľa, jeho príspevky ponechať',
	'DESTINATION'						=> 'Cieľový súbor',
	'DIFF_INLINE'						=> 'Na riadku',
	'DIFF_RAW'							=> 'Čisté zjednotené rozdiely',
	'DIFF_SEP_EXPLAIN'					=> 'Koniec aktuálneho súboru / Začiatok nového aktualizovaného súboru',
	'DIFF_SIDE_BY_SIDE'					=> 'Vedľa seba',
	'DIFF_UNIFIED'						=> 'Zjednotené rozdiely',
	'DO_NOT_UPDATE'						=> 'Neaktualizovať tento súbor',
	'DONE'								=> 'Hotovo',
	'DOWNLOAD'							=> 'Stiahnuť',
	'DOWNLOAD_AS'						=> 'Stiahnuť ako',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Stiahnuť archív s upravenými súbormi',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Po stiahnutí by ste mali archív rozbaliť. Nájdete upravené súbory, ktoré musíte umiestniť do koreňového priečinka phpBB. Uistite sa, že ste každý súbor umiestnili na správne miesto. Po umiestnení súborov ich znovu skontrolujte nasledujúcim tlačidlom.',

	'ERROR'		=> 'Chyba',
	'EDIT_USERNAME'	=> 'Upraviť používateľské meno',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Súbor je už aktualizovaný',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Súbor nemôže byť upravený',
	'FILE_USED'						=> 'Informácie použité z',			// Single file
	'FILES_CONFLICT'				=> 'Súbor spôsobujúce konflikty',
	'FILES_CONFLICT_EXPLAIN'		=> 'Nasledujúce súbory boli upravené a nie sú rovnaké ako súbory v predchádzajúcej verzii. phpBB zistilo, že ak sa pokúsi o ich zlúčenie, tieto súbory zapríčiňujú konflikty. Preskúmajte tieto konflikty a skúste ich ručne vyriešiť alebo pokračujte v prevode vybraním metódy zlúčenia súborov. Ak spracujete konflikty ručne, po úpravách skontrolujte súbory znova. Môžete tiež zvoliť preferovanú metódu zlúčenia pre každý súbor zvlášť. Prvá zlúči oba súbory do jedného, kde konfliktné riadky budú nahradené tými z nového súboru, a druhá naopak použije riadky z pôvodného.',
	'FILES_MODIFIED'				=> 'Upravené súbory',
	'FILES_MODIFIED_EXPLAIN'		=> 'Nasledujúce súbory sú upravené a nie sú rovnaké ako súbory v predchádzajúcej verzii. Aktualizovaný súbor bude výsledok zlúčenia vašich úprav a nového súboru.',
	'FILES_NEW'						=> 'Nové súbory',
	'FILES_NEW_EXPLAIN'				=> 'Nasledujúce súbory neexistujú v aktuálnej inštalácii phpBB.',
	'FILES_NEW_CONFLICT'			=> 'Nové súbory spôsobujúce konflikty',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Nasledujúce súbory sú nové v poslednej verzii fóra, ale bolo zistené, že súbor s rovnakým menom na rovnakom umiestnení už existuje. Tento súbor bude prepísaný novým.',
	'FILES_NOT_MODIFIED'			=> 'Neupravené súbory',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Nasledujúce súbory neboli upravené a reprezentujú originálne súbory predchádzajúcej verzie phpBB.',
	'FILES_UP_TO_DATE'				=> 'Už aktualizované súbory',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Nasledujúce súbory sú už aktuálne a nemusia byť aktualizované.',
	'FTP_SETTINGS'					=> 'Nastavenia FTP',
	'FTP_UPDATE_METHOD'				=> 'Odosielanie cez FTP',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Aktualizačné súbory nie sú kompatibilné s vašou nainštalovanou verziou. Vy máte nainštalovanú verziu %1$s a súbory sú určené na prevod z phpBB %2$s na %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Aktualizačné súbory nie sú kompletné.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Aktualizácia databázy bola úspešná. Teraz pokračujte v aktualizačnom procese.',

	'KEEP_OLD_NAME'		=> 'Ponechať používateľské meno',

	'LATEST_VERSION'		=> 'Najnovšia verzia',
	'LINE'					=> 'Riadok',
	'LINE_ADDED'			=> 'Pridaný',
	'LINE_MODIFIED'			=> 'Upravený',
	'LINE_REMOVED'			=> 'Odstránený',
	'LINE_UNMODIFIED'		=> 'Nezmenený',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Pred aktualizáciou vašej inštalácie sa musíte prihlásiť.',

	'MAPPING_FILE_STRUCTURE'	=> 'Na uľahčenie odosielania tu máte zobrazené umiestnenia súborov, ktoré súhlasia s vašou inštaláciou phpBB.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Zlúčiť úpravy a modifikácie',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Nezlučovať - použiť nový súbor',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Nezlučovať - použiť aktuálne nainštalovaný súbor',
	'MERGE_MOD_FILE_OPTION'		=> 'Zlúčiť rozdiely a použiť upravený kód bloku konfliktu',
	'MERGE_NEW_FILE_OPTION'		=> 'Zlúčiť rozdiely a použiť kód z nového súboru pre blok konfliktu',
	'MERGE_SELECT_ERROR'		=> 'Režimy zlúčenia súborov spôsobujúcich konflikty nie sú vybrané správne.',

	'NEW_FILE'						=> 'Nový aktualizovaný súbor',
	'NEW_USERNAME'					=> 'Nové používateľské meno',
	'NO_AUTH_UPDATE'				=> 'Nemáte oprávnenia na aktualizovanie',
	'NO_ERRORS'						=> 'Bez chýb',
	'NO_UPDATE_FILES'				=> 'Neaktualizujú sa nasledujúce súbory',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Nasledujúce súbory sú nové alebo upravené, ale priečinok, kde sú bežne umiestnené, nebol vo vašej inštalácii nájdený. Ak tento zoznam obsahuje súbory, ktoré nepatria do priečinka language/ alebo styles/, je možné, že ste zmenili štruktúru priečinkov a že aktualizácia nebude kompletná.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Nebol nájdený priečinok s aktualizáciou, uistite sa, že ste na server umiestnili príslušné aktualizačné súbory.<br /><br />Na vašom fóre <strong>nepoužívate</strong> poslednú verziu phpBB. Aktualizácie sú dostupné pre vašu verziu - %1$s, prejdite na <a href="http://www.phpbb.com/downloads.php" rel="external">http://www.phpbb.com/downloads.php</a> a stiahnite si správny balíček na aktualizáciu z verzie %2$s na verziu %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Používate najnovšiu verziu phpBB. Nie je potrebné spúšťať aktualizačný nástroj. Ak chcete skontrolovať integritu súborov, najskôr umiestnite na server príslušné aktualizačné súbory.',
	'NO_UPDATE_INFO'				=> 'Informácie o aktualizačných súboroch neboli nájdené.',
	'NO_UPDATES_REQUIRED'			=> 'Nie sú vyžadované žiadne aktualizácie',
	'NO_VISIBLE_CHANGES'			=> 'Žiadne viditeľné zmeny',
	'NOTICE'						=> 'Upozornenie',
	'NUM_CONFLICTS'					=> 'Počet konfliktov',

	'OLD_UPDATE_FILES'		=> 'Aktualizačné súbory sú staré. Nájdené aktualizačné súbory sú určené na aktualizáciu z phpBB %1$s na phpBB %2$s, ale najnovšia verzia phpBB je %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Aktuálny balík aktualizuje na verziu',
	'PERFORM_DATABASE_UPDATE'			=> 'Vykonať aktualizáciu databázy',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Nižšie nájdete tlačidla na spustenie aktualizačného skriptu databázy. Aktualizácia databázy môže chvíľu trvať, takže ju prosím nezastavujte ani v prípade, že sa vám zdá, že proces uviazol. Po ukončení aktualizácie databázy pokračujte v ďalších krokoch aktualizácie.',
	'PREVIOUS_VERSION'					=> 'Predchádzajúca verzia',
	'PROGRESS'							=> 'Priebeh',

	'RESULT'					=> 'Výsledok',
	'RUN_DATABASE_SCRIPT'		=> 'Aktualizovať moju databázu teraz',

	'SELECT_DIFF_MODE'			=> 'Vyberte spôsob zobrazenia rozdielov',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Vyberte formát sťahovaného archívu',
	'SELECT_FTP_SETTINGS'		=> 'Vyberte nastavenia FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Zobraziť rozdiely/konflikty',
	'SHOW_DIFF_FINAL'			=> 'Zobraziť výsledný súbor',
	'SHOW_DIFF_MODIFIED'		=> 'Zobraziť rozdiely po zlúčení',
	'SHOW_DIFF_NEW'				=> 'Zobraziť obsah súboru',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Zobraziť rozdiely',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Zobraziť rozdiely',
	'SOME_QUERIES_FAILED'		=> 'Niektoré požiadavky zlyhali, príkazy a chyby sú vypísané nižšie',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Toto nie je pravdepodobne nič vážne, aktualizácia bude pokračovať. Ak by aj tak nebolo možné aktualizáciu dokončiť, vyhľadajte pomoc na našich fórach. Viac informácia ako získať radu nájdete v súbore <a href="../docs/README.html">PREČÍTAJTE SI</a>.',
	'STAGE_FILE_CHECK'			=> 'Skontrolovať súbory',
	'STAGE_UPDATE_DB'			=> 'Aktualizovať databázu',
	'STAGE_UPDATE_FILES'		=> 'Aktualizovať súbory',
	'STAGE_VERSION_CHECK'		=> 'Kontrola verzie',
	'STATUS_CONFLICT'			=> 'Upravený súbor spôsobujúci konflikty',
	'STATUS_MODIFIED'			=> 'Upravený súbor',
	'STATUS_NEW'				=> 'Nový súbor',
	'STATUS_NEW_CONFLICT'		=> 'Nový súbor spôsobujúci konflikty',
	'STATUS_NOT_MODIFIED'		=> 'Neupravený súbor',
	'STATUS_UP_TO_DATE'			=> 'Už aktualizovaný súbor',

	'UPDATE_COMPLETED'				=> 'Aktualizácia dokončená',
	'UPDATE_DATABASE'				=> 'Aktualizovať databázu',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Počas nasledujúceho kroku bude aktualizovaná databáza.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Aktualizuje sa schéma databázy',
	'UPDATE_FILES'					=> 'Aktualizovať súbory',
	'UPDATE_FILES_NOTICE'			=> 'Prosím, uistite sa, že ste aktualizovali súbory fóra, tento súbor aktualizuje len databázu.',
	'UPDATE_INSTALLATION'			=> 'Aktualizovať inštaláciu phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Pomocou tohto nástroja je možné aktualizovať vašu inštaláciu phpBB na najnovšiu verziu.<br />Počas procesu bude skontrolovaná integrita všetkých súborov. Pred aktualizáciou si môžete pozrieť všetky súbory a rozdiely v nich.<br /><br />Aktualizácia súborov môže byť vykonaná dvoma spôsobmi.</p><h2>Ručná aktualizácia</h2><p>Ak zvolíte tento spôsob, stiahnete si upravené súbory pre fórum, aby ste sa mohli uistiť, že nestratíte zmeny vykonané v kóde fóra. Po stiahnutí tohto balíka budete musieť ručne odoslať všetky súbory na server a umiestiť ich do príslušných priečinkov. Po ukončení odosielania budete môcť znova skontrolovať integritu súborov, aby ste si overili, že ste súbory umiestnili správne. ak boli všetky správne odoslané a umiestnené, budete presmerovaný na aktualizačný skript databázy.</p><h2>Automatická aktualizácia s FTP</h2><p>Tento spôsob je podobný prvému, ale nebudete musieť stiahnuť upravené súbory a ručne ich nahrávať na server. Toto systém vykoná sám automaticky. Aby ste mohli využiť tento spôsob, budete musieť poznať prístupové údaje k FTP. Po odoslaní súborov bude znova vykonaná kontrola integrity. Ak sú všetky súbory v poriadku, budete presmerovaný na aktualizačný skript databázy.',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Oznámenie o vydaní</h1>

		<p>Pred pokračovaním v inštalácii si, prosím, pozorne prečítajte si <a href="%1$s" title="%1$s"><strong>oznámenie o vydaní najnovšej verzie</strong></a>, ktoré môže obsahovať množstvo užitočných informácií. Obsahuje takisto odkazy na stiahnutie ako aj zoznam zmien v novej verzii.</p>

		<br />

		<h1>Ako aktualizovať vašu inštaláciu pomocou aktualizačného nástroja</h1>

		<p>Tu uvedený odporúčaný spôsob aktualizácie vašej inštalácie je platný len pre aktualizáciu pomocou aktualizačného nástroja. Vašu inštaláciu môžete aktualizovať aj spôsobmi popísanými v dokumente INSTALL.html. Kroky aktualizácie inštalácie phpBB3 sú:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Prejdite na <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">stránku phpBB.com Download</a> a stiahnite si archív "Automatic Update Package"<br /><br /></li>
			<li>Rozbaľte archív.<br /><br /></li>
			<li>Presuňte celý inštalačný priečinok install do koreňového priečinka phpBB (tam ,kde sa nachádza súbor config.php).<br /><br /></li>
		</ul>

		<p>Po presunutí týchto súborov sa stane fórum kvôli ich prítomnosti nedostupné pre bežných používateľov <br /><br />
		<strong><a href="%2$s" title="%2$s">Teraz spustiť aktualizačný proces zadaným cesty k priečinku install do vášho internetového prehliadača</a>.</strong><br />
		<br />
		Spustí sa sprievodca aktualizačným procesom. Po úspešnej aktualizácii budete upovedomený.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>Zistená nekompletná aktualizácia</h1>

		<p>phpBB zistilo neúplnú automatickú aktualizáciu. Prosím, uistite sa, že ste prešli všetky kroky aktualizačného nástroja. Nižšie nájdete znova odkaz, alebo rovno prejdite do inštalačného priečinka.</p>
	',
	'UPDATE_METHOD'					=> 'Spôsob aktualizácie',
	'UPDATE_METHOD_EXPLAIN'			=> 'Teraz môžete zvoliť preferovaný spôsob aktualizácie. Ak použijete odosielanie súborov cez FTP, budete musieť zadať údaje k FTP na vašom serveri. Týmto spôsobom budú súbory automaticky presunuté na nové umiestnenie a zálohy budú vytvorené pridaním koncovky .bak k názvu súboru. Ak zvolíte stiahnuť upravené súbory, budete ich môcť rozbaliť a odoslať ručne.',
	'UPDATE_REQUIRES_FILE'			=> 'Aktualizačný nástroj vyžaduje, aby bol prítomný nasledujúci súbor: %s',
	'UPDATE_SUCCESS'				=> 'Aktualizácia bola úspešná',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Všetky súbory boli úspešne aktualizované. Ďalší krok zahŕňa opätovnú kontrolu súborov, aby sa overilo, či boli všetky súbory aktualizované správne.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Aktualizácia verzie a optimalizácia tabuliek',
	'UPDATING_DATA'					=> 'Aktualizujú sa údaje',
	'UPDATING_TO_LATEST_STABLE'		=> 'Aktualizácia databázy na najnovšiu stabilnú verziu',
	'UPDATED_VERSION'				=> 'Aktualizovaná verzia',
	'UPLOAD_METHOD'					=> 'Spôsob odoslania',

	'UPDATE_DB_SUCCESS'				=> 'Aktualizácia databázy boli úspešná.',
	'USER_ACTIVE'					=> 'Aktívny používateľ',
	'USER_INACTIVE'					=> 'Neaktívny používateľ',

	'VERSION_CHECK'				=> 'Kontrola verzie',
	'VERSION_CHECK_EXPLAIN'		=> 'Skontrolujte, či používate najnovšiu verziu phpBB.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Vaša verzia phpBB nie je aktuálna. Prosím, pokračujte na proces aktualizácie.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'Vaša verzia phpBB nie je aktuálna.<br />Nižšie nájdete odkaz na oznámenie o vydaní najnovšej verzie vrátane inštrukcií na vykonanie aktualizácie.',
	'VERSION_UP_TO_DATE'		=> 'Vaša verzia phpBB je aktuálna, nie sú dostupné žiadne aktualizácie. Napriek tomu, ak máte záujem, môžete skontrolovať integritu súborov.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Vaša verzia phpBB je aktuálna, nie sú dostupné žiadne aktualizácie. Nemusíte ju aktualizovať.',
	'VIEWING_FILE_CONTENTS'		=> 'Zobrazenie obsahu súboru',
	'VIEWING_FILE_DIFF'			=> 'Zobrazenie odlišností v súboroch',

	'WRONG_INFO_FILE_FORMAT'	=> 'Nesprávny formát informačného súboru',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Ďakujeme, vedenie fóra',
	'CONFIG_SITE_DESC'				=> '_Krátky_ text popisujúci vaše fórum',
	'CONFIG_SITENAME'				=> 'vasa_domena.sk',

  'DEFAULT_INSTALL_POST'			=> 'Toto je príklad toho, ako bude vypadať príspevok vo vašej inštalácii phpBB3. Môžete tento príspevok upraviť alebo odstrániť, môžete odstrániť celú tému alebo rovno môžete odstrániť aj celé fórum, pretože sa zdá, že všetko funguje tak ako má!',

	'EXT_GROUP_ARCHIVES'			=> 'Archívy',
	'EXT_GROUP_DOCUMENTS'			=> 'Dokumenty',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Stiahnuteľné súbory',
	'EXT_GROUP_FLASH_FILES'			=> 'Súbory Flash',
	'EXT_GROUP_IMAGES'				=> 'Obrázky',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Čistý text',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Súbory Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Súbory Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Súbory Windows Media',

	'FORUMS_FIRST_CATEGORY'			=> 'Moja prvá Kategória',
	'FORUMS_TEST_FORUM_DESC'		=> 'Toto je len testovacie fórum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Testovacie fórum 1',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrátor stránky',
	'REPORT_WAREZ'					=> 'Príspevok obsahuje odkazy na nelegálny alebo pirátsky softvér.',
	'REPORT_SPAM'					=> 'Nahlásený príspevok má jediný cieľ a to propagovať webovú stránku alebo iný produkt.',
	'REPORT_OFF_TOPIC'				=> 'Nahlásený príspevok je mimo témy (off-topic).',
	'REPORT_OTHER'					=> 'Nahlásený príspevok nespadá do žiadnej kategórie, prosím, vyplňte pole popisu.',

	'SMILIES_ARROW'					=> 'Šípka',
	'SMILIES_CONFUSED'				=> 'Zmätený',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Plačúci alebo veľmi smutný',
	'SMILIES_EMARRASSED'			=> 'V rozpakoch',
	'SMILIES_EVIL'					=> 'Zlý alebo veľmi nahnevaný',
	'SMILIES_EXCLAMATION'			=> 'Výkričník',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Nápad',
	'SMILIES_LAUGHING'				=> 'Smejúci sa',
	'SMILIES_MAD'					=> 'Nahnevaný',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutrálny',
	'SMILIES_QUESTION'				=> 'Otázka',
	'SMILIES_RAZZ'					=> 'Posmešný',
	'SMILIES_ROLLING_EYES'			=> 'Gúľajúci očami',
	'SMILIES_SAD'					=> 'Smutný',
	'SMILIES_SHOCKED'				=> 'Šokovaný',
	'SMILIES_SMILE'					=> 'Úsmev',
	'SMILIES_SURPRISED'				=> 'Prekvapený',
	'SMILIES_TWISTED_EVIL'			=> 'Úplne zlý',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Veľmi šťastný',
	'SMILIES_WINK'					=> 'Mrknutie',

	'TOPICS_TOPIC_TITLE'			=> 'Víta vás phpBB3',
));

?>
