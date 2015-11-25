<?php
/** 
*
* install [Croatian]
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
'ADMIN_CONFIG'=> 'Konfiguracija administratora/ice',
'ADMIN_PASSWORD'=> 'Zaporka administratora/ice',
'ADMIN_PASSWORD_CONFIRM'=> 'Potvrdi zaporku administratora/ice',
'ADMIN_PASSWORD_EXPLAIN'=> 'Unesi zaporku dužine između 6 i 30 znakova.',
'ADMIN_TEST'=> 'Provjera postavki administratora/ice',
'ADMIN_USERNAME'=> 'Korisničko ime administratora/ice',
'ADMIN_USERNAME_EXPLAIN'=> 'Unesi korisničko ime dužine između 3 i 20 znakova.',
'APP_MAGICK'=> 'Imagemagick podrška [privitci]',
'AUTHOR_NOTES'=> 'Bilješke autora/ice<br />» %s',
'AVAILABLE'=> 'Dostupno',
'AVAILABLE_CONVERTORS'=> 'Dostupni konvertori',

'BEGIN_CONVERT'=> 'Započni konverziju',
'BLANK_PREFIX_FOUND'=> 'Skeniranje tablica pokazalo je valjanju instalaciju bez prefiksa tablica.',
'BOARD_NOT_INSTALLED'=> 'Nije pronađena [(i)nikakva)] instalacija.',
'BOARD_NOT_INSTALLED_EXPLAIN'=> 'phpBB <em>Unified Convertor Framework</em> zahtjeva zadanu, funkcionirajuću instalaciju phpBB3-a.<br /><a href="%s">Za nastavak, prvo, moraš instalirati phpBB3.</a>',

'CATEGORY'=> 'Kategorija',
'CACHE_STORE'=> 'Tip cachea',
'CACHE_STORE_EXPLAIN'=> 'Fizička lokacija na kojoj se spremaju podatci, poželjniji je sistem datoteka.',
'CAT_CONVERT'=> 'Konvertiranje',
'CAT_INSTALL'=> 'Instaliranje',
'CAT_OVERVIEW'=> 'Predinstaliranje',
'CAT_UPDATE'=> 'Ažuriranje',
'CHANGE'=> 'Promijeni',
'CHECK_TABLE_PREFIX'=> 'Provjeri prefiks tablica i pokušaj ponovo.',
'CLEAN_VERIFY'=> 'Čišćenje i verifikacija završne strukture',
'CLEANING_USERNAMES'=> 'Čišćenje korisničkih imena',
'COLLIDING_CLEAN_USERNAME'=> '<strong>%s</strong> je čisto korisničko ime za:',
'COLLIDING_USERNAMES_FOUND'=> 'Pronađena su korisnička imena u koliziji na starom forumu.<br />Kako bi mogao/la završiti konverziju,  moraš izbrisati ili preimenovati ta korisnička imena kako bi na starom forumu ostao/la samo jedan/na korisnik/ca za (svako, čisto) korisničko ime.',
'COLLIDING_USER'=> '» id korisnika/ce: <strong>%d</strong> korisničko ime: <strong>%s</strong> (%d postova)',
'CONFIG_CONVERT'=> 'Konvertiranje konfiguracije',
'CONFIG_FILE_UNABLE_WRITE'=> 'Nije bilo moguće pre(za)pisati konfiguracijsku datoteku.<br />Alternativna metoda je kreirati datoteku i uporabiti je dolje.',
'CONFIG_FILE_WRITTEN'=> 'Konfiguracijska datoteka je pre(za)pisana.<br />Možeš pristupiti sljedećem koraku instalacije.',
'CONFIG_PHPBB_EMPTY'=> 'phpBB3 config varijabla za “%s” je prazna.',
'CONFIG_RETRY'=> 'Pokušaj ponovo',
'CONTACT_EMAIL_CONFIRM'=> 'Potvrdi e-mail adresu za kontakt',
'CONTINUE_CONVERT'=> 'Nastavi s konverzijom',
'CONTINUE_CONVERT_BODY'=> 'Uočen je (prethodni) pokušaj konverzije.<br />Možeš izabrati između započinjanja nove konverzije ili nastavka prethodnog pokušaja.',
'CONTINUE_LAST'=> 'Nastavi sa zadnjim naredbama',
'CONTINUE_OLD_CONVERSION'=> 'Nastavi s prije započetom konverzijom',
'CONVERT'=> 'Konvertiraj',
'CONVERT_COMPLETE'=> 'Konverzija je završena.',
'CONVERT_COMPLETE_EXPLAIN'=> 'Uspješno si konvertirao/la forum na phpBB 3.0.<br />Možeš se prijaviti i <a href="../">pristupiti forumu</a>.<br />Prije omogućavanja foruma [izbrisivanja install mape], provjeri da li su sve postavke ispravno transferirane.<br />Pomoć pri korištenju phpBB-a dostupna je putem <a href="http://www.phpbb.com/support/documentation/3.0/">Dokumentacije</a> i <a href="http://www.phpbb.com/community/viewforum.php?f=46">foruma podrške</a>.',
'CONVERT_INTRO'=> 'Dobrodošao/la u phpBB <em>Unified Convertor Framework</em>',
'CONVERT_INTRO_BODY'=> 'Odavde možeš importirati podatke iz drugih (instaliranih) foruma.<br />Donja lista prikazuje sve, trenutno dostupne, konverzijske module. Ukoliko, na listi, nije prikazan konvertor za forum (forumski softver) koji želiš konvertirati, baci pogled na naše stranice za slučaj da se na njima nalazi, spreman za preuzimanje, modul koji ti treba.',
'CONVERT_NEW_CONVERSION'=> 'Nova konverzija',
'CONVERT_NOT_EXIST'=> 'Specificiran konvertor ne postoji.',
'CONVERT_SETTINGS_VERIFIED'=> 'Informacije koje su unio/la su verificirane.<br />Za početak konverzijskog procesa, klikni na donji gumb.',
'CONV_ERR_FATAL'=> 'Fatalna konverzijska greška',
'CONV_ERROR_ATTACH_FTP_DIR'=> 'Na starom forumu je omogućen FTP upload za privitke.<br />Onemogući opciju FTP uploadanja, provjeri da li je određena valjana mapa za upload, te kopiraj sve datoteke privitaka u (tu novu) pristupačnu mapu. Kada to napraviš, ponovo pokreni konvertor.',
'CONV_ERROR_CONFIG_EMPTY'=> 'Nema dostupne/ih konfiguracijske/ih informacije/a za konverziju.',
'CONV_ERROR_FORUM_ACCESS'=> 'Nije bilo moguće dobiti pristupne informacije forumu.',
'CONV_ERROR_GET_CATEGORIES'=> 'Nije bilo moguće dobiti kategorije.',
'CONV_ERROR_GET_CONFIG'=> 'Nije bilo moguće povratiti konfiguraciju foruma.',
'CONV_ERROR_COULD_NOT_READ'=> 'Nije moguće pristupiti/(pro)čitati “%s”.',
'CONV_ERROR_GROUP_ACCESS'=> 'Nije moguće dobiti informaciju provjere valjanosti grupa.',
'CONV_ERROR_INCONSISTENT_GROUPS'=> 'Uočene su nedosljednosti u tablici grupa add_bots() - sve specijalne (posebne) grupe moraš dodati ručno.',
'CONV_ERROR_INSERT_BOT'=> 'Nije moguće umetnuti robota u tablicu korisnika/ca.',
'CONV_ERROR_INSERT_BOTGROUP'=> 'Nije moguće umetnuti robote u tablicu robota.',
'CONV_ERROR_INSERT_USER_GROUP'=> 'Nije moguće umetnuti korisnika/cu u user_group tablicu.',
'CONV_ERROR_MESSAGE_PARSER'=> 'Parserska greška poruke',
'CONV_ERROR_NO_AVATAR_PATH'=> 'Bilješka/uputa programeru/ki: moraš odrediti $convertor[\'avatar_path\'] za uporabu %s.',
'CONV_ERROR_NO_FORUM_PATH'=> 'Nije specificirana relativna putanja do izvorišnog foruma.',
'CONV_ERROR_NO_GALLERY_PATH'=> 'Bilješka/uputa programeru/ki: moraš odrediti $convertor[\'avatar_gallery_path\'] za uporabu %s.',
'CONV_ERROR_NO_GROUP'=> 'Grupa “%1$s” nije pronađena u %2$s.',
'CONV_ERROR_NO_RANKS_PATH'=> 'Bilješka/uputa programeru/ki: moraš odrediti $convertor[\'ranks_path\'] za uporabu %s.',
'CONV_ERROR_NO_SMILIES_PATH'=> 'Bilješka/uputa programeru/ki: moraš odrediti $convertor[\'smilies_path\'] za uporabu %s.',
'CONV_ERROR_NO_UPLOAD_DIR'=> 'Bilješka/uputa programeru/ki: moraš odrediti $convertor[\'upload_path\'] za uporabu %s.',
'CONV_ERROR_PERM_SETTING'=> 'Nije bilo moguće umetnuti/ažurirati postavke dopuštenja.',
'CONV_ERROR_PM_COUNT'=> 'Nije bilo moguće izabrati mapu pm count.',
'CONV_ERROR_REPLACE_CATEGORY'=> 'Nije moguće umetnuti novi forum zamjenjujući staru kategoriju.',
'CONV_ERROR_REPLACE_FORUM'=> 'Nije moguće umetnuti novi forum zamjenjujući stari forum.',
'CONV_ERROR_USER_ACCESS'=> 'Nije moguće dobiti informaciju provjere valjanosti korisnika/ca.',
'CONV_ERROR_WRONG_GROUP'=> 'Kriva grupa “%1$s” definirana u %2$s.',
'CONV_OPTIONS_BODY' => 'Ovdje se obavlja prikupljanje podatke potrebnih za pristup izvornom forumu.<br />Trebaš unijeti detalje baze podataka starog foruma [konvertor neće izmijeniti ništa u dolje navedenoj bazi podataka].<br />Izvorišni forum treba biti onemogućen kako bi konverzija mogla biti izvršena.',
'CONV_SAVED_MESSAGES'=> 'Spremljene poruke',
'COULD_NOT_COPY'=> 'Nije bilo moguće kopirati datoteku <strong>%1$s</strong> u <strong>%2$s</strong><br /><br />Provjeri da li odredišna mapa uopće postoji te da li je pre(za)pisljiva od strane servera.',
'COULD_NOT_FIND_PATH'=> 'Nije moguće pronaći putanju do dosadašnjeg foruma.<br />Provjeri postavke i pokušaj ponovo.<br />» Specificirana izvorna putanja je %s.',

'DBMS'=> 'Tip baze podataka',
'DB_CONFIG'=> 'Konfiguracija baze podataka',
'DB_CONNECTION'=> 'Povezivanje s bazom podataka',
'DB_ERR_INSERT'=> 'Greška prilikom procesuiranja <code>INSERT</code> upita.',
'DB_ERR_LAST'=> 'Greška prilikom procesuiranja <var>query_last</var>.',
'DB_ERR_QUERY_FIRST'=> 'Greška prilikom izvođenja <var>query_first</var>.',
'DB_ERR_QUERY_FIRST_TABLE'=> 'Greška prilikom izvođenja <var>query_first</var>, %s (“%s”).',
'DB_ERR_SELECT'=> 'Greška prilikom pokretanja <code>SELECT</code> upita.',
'DB_HOST'=> 'Ime hosta servera baze podataka ili DSN',
'DB_HOST_EXPLAIN'=> 'DSN znači Data Source Name i relevantan je samo za ODBC instalacije.',
'DB_NAME'=> 'Ime baze podataka',
'DB_PASSWORD'=> 'Zaporka baze podataka',
'DB_PORT'=> 'Serverski port baze podataka',
'DB_PORT_EXPLAIN'=> 'Ostavi praznim, osim ako si siguran/na da server radi na ne-standardnom protu.',
'DB_USERNAME'=> 'Korisničko ime baze podataka',
'DB_TEST'=> 'Test veze',
'DEFAULT_LANG'=> 'Zadani jezik foruma',
'DEFAULT_PREFIX_IS'=> 'Convertor nije uspio pronaći tablice sa specificiranim prefiksom.<br />Provjeri da li si unio/la točne detalje foruma koji pokušavaš konvertirati.<br />Zadani prefiks tablica za %1$s je <strong>%2$s</strong>.',
'DEV_NO_TEST_FILE'=> 'U konvertor nije unesena vrijednost varijable od test_file. Ukoliko si korisnik/ca ovog konvertora, ne bi smio/la vidjeti ovu grešku, pa, te molim(o), prijavi ovu grešku autoru/ici konvertora. Ukoliko si autor/ica ovog konvertora, moraš unijeti ime postojeće datoteke izvornog koda foruma kako bi odobrio/la putanji verifikaciju.',
'DIRECTORIES_AND_FILES'=> 'Instalacija/podešavanje mapa i datoteka',
'DISABLE_KEYS'=> 'Onemogućavanje ključeva',
'DLL_FIREBIRD'=> 'Firebird',
'DLL_FTP'=> 'Udaljena FTP podrška [Instalacija]',
'DLL_GD'=> 'GD grafička podrška [Vizualna potvrda]',
'DLL_MBSTRING'=> 'Multi-byte podrška znakova',
'DLL_MSSQL'=> 'MSSQL Server 2000+',
'DLL_MSSQL_ODBC'=> 'MSSQL Server 2000+ putem ODBC',
'DLL_MYSQL'=> 'MySQL',
'DLL_MYSQLI'=> 'MySQL s MySQLi ekstenzijom',
'DLL_ORACLE'=> 'Oracle',
'DLL_POSTGRES'=> 'PostgreSQL 7.x/8.x',
'DLL_SQLITE'=> 'SQLite',
'DLL_XML'=> 'XML podrška [Jabber]',
'DLL_ZLIB'=> 'Podrška za zlib komprimiranje [gz, .tar.gz, .zip]',
'DL_CONFIG'=> 'Preuzmi config',
'DL_CONFIG_EXPLAIN'=> 'Možeš preuzeti config.php na računalo. Trebao/la bi ručno, u vršnu phpBB 3.0 mapu, uploadati datoteku (i to) na način da njome zamijeniš postojeću config.php datoteku. Datoteku uploadaj u ASCII formatu [ukoliko ne znaš što je ASCII format odnosno kako uploadati datoteku, potraži pomoć u dokumentaciji FTP programa koji koristiš]. Kada uploadaš config.php datoteku, klikni na “Gotovo” kako bi mogao/la prijeći na sljedeći korak.',
'DL_DOWNLOAD'=> 'Preuzimanje',
'DONE'=> 'Gotovo',

'ENABLE_KEYS'=> 'Re-omogućavanje ključeva. Može potrajati neko vrijeme.',

'FILES_OPTIONAL'=> 'Opcionalne datoteke i mape',
'FILES_OPTIONAL_EXPLAIN'=> '<strong>Opcionalno</strong>: ove datoteke, mape odnosno postavke dopuštenja nisu obvezne. Instalacijski sistem će pokušati koristiti različite tehnike njihova kreiranja ukoliko ne postoje odnosno ne mogu biti pre(za)pisljive. Njihova prisutnost ubrzat će instalaciju.',
'FILES_REQUIRED'=> 'Datoteke i mape',
'FILES_REQUIRED_EXPLAIN'=> '<strong>Obvezno</strong>: kako bi mogao ispravno funkcionirati, phpBB mora imati pristup odnosno mogućnost pre(za)pisivanja određenih datoteka/mapa. Ukoliko vidiš “Nije pronađeno”, moraš kreirati odgovarajuću datoteku ili mapu. Ukoliko vidiš “Nepre(za)pisljivo”, moraš promijeniti dopuštenja datoteka/mapa i to tako da postanu pre(za)pisljive od strane phpBB-a.',
'FILLING_TABLE'=> 'Popunjavanje tablice <strong>%s</strong>',
'FILLING_TABLES'=> 'Popunjavanje tablica',
'FINAL_STEP'=> 'Izvršavanje finalnog koraka',
'FORUM_ADDRESS'=> 'Adresa foruma',
'FORUM_ADDRESS_EXPLAIN'=> 'URL starog foruma, npr. <samp>http://www.example.com/phpBB2/</samp>. Ukoliko polje neće biti ostavljeno praznim već će biti unesena adresa, svaka instanca adrese bit će zamijenjena adresom novog foruma [poruke, privatne poruke i potpisi].',
'FORUM_PATH'=> 'Putanja foruma',
'FORUM_PATH_EXPLAIN'=> '<strong>Relativna</strong> putanja, na disku, do starog foruma, <strong>s vršne mape phpBB instalacije</strong>.',
'FOUND'=> 'Pronađeno',
'FTP_CONFIG'=> 'Transferiranje config datoteke FTP-om',
'FTP_CONFIG_EXPLAIN'=> 'phpBB je uočio prisutnost FTP modula na serveru. Ukoliko želiš, možeš, pokušati, instalirati config.php time. Morat ćeš unijeti informacije izlistane ispod. Moraš znati korisničko ime i zaporku za pristup server [ukoliko ih ne znaš, kontaktiraj pružatelja usluga za detalje].',
'FTP_PATH'=> 'FTP putanja',
'FTP_PATH_EXPLAIN'=> 'Ovo je putanja iz tvoje vršne mape do phpBB-a, npr. <samp>htdocs/phpBB3/</samp>.',
'FTP_UPLOAD'=> 'Uploadira(n)j(e)',

'GPL'=> 'General Public License',

'INITIAL_CONFIG'=> 'Osnovna konfiguracija',
'INITIAL_CONFIG_EXPLAIN'=> 'Kako bi mogao/la nastaviti, moraš unijeti (neke) određene informacije. Ukoliko ne znaš kako se spojiti (s) na bazu podataka, prvo, kontaktiraj pružatelja usluga ili potraži pomoć na phpBB forumu podrške. Prilikom unošenja podataka, provjeri njihovu točnost prije nastavka.',
'INSTALL_CONGRATS'=> 'Bravo!',
'INSTALL_CONGRATS_EXPLAIN'=> '<p>phpBB %1$s je uspješno instaliran.<br />Imaš dvije mogućnost, dolje opisane, što možeš napraviti s ovim, friško instaliranim, phpBB3-om.</p><h2>Konvertiranje postojećeg foruma u phpBB3</h2><p>phpBB <em>Unified Convertor Framework</em> podržava konverziju phpBB 2.0.x, i ostalih forumskih sistema, u  phpBB3.<br />Ukoliko imaš postojeći forum, koji želiš konvertirati, <a href="%2$s">klikni ovdje za odlazak na konvertor</a>.</p><h2>Pokreni svoj novi phpBB3!</h2><p>Klik na donji gumb odvest će te u <em>Administraciju foruma [AF]</em>.<br />Ne bi bilo zgorega posvetiti malo vremena istraživanju dostupnih opcija/karakteristika/mogućnosti. Pomoć je dostupna putem <a href="http://www.phpbb.com/support/documentation/3.0/">Documentacije</a> i <a href="http://www.phpbb.com/community/viewforum.php?f=46">foruma podrške</a>; baci pogled (i) na <a href="%3$s">README</a> za dodatne informacije.</p><p><strong>Za kraj ti je ostalo izbrisati/preimenovati/premjestiti instalacijsku mapu prije negoli pristupiš forumu. Ukoliko ne izbrišeš mapu, samo će (ti) <em>Administracija foruma [AF]</em> biti dostupna.</strong></p>',
'INSTALL_INTRO'=> 'Dobrodošao/la u instalaciju',
// TODO: write some more introductions here
'INSTALL_INTRO_BODY'=> 'Ovom opcijom, moguće je instalirati phpBB na server.</p><p>Kako bi mogao/la nastaviti, trebat ćeš postavke baze podataka.<br />Ukoliko ne znaš postavke baze podataka, kontaktiraj pružatelja usluga i zatraži informacije od njega. Nemaš li postavke baze podataka, nećeš moći (započeti) nastaviti s instalacijom.<br />Ono što ti treba jest:</p><ul><li>tip baze podataka - baza podataka koju ćeš koristiti;</li><li>ime hosta servera baze podataka ili DSN - adresa servera baze podataka;</li><li>serverski port baze podataka - port servera baze podataka (u većini slučajeva ova informacija nije potrebna);</li><li>ime baze podataka - ime baze podataka na serveru;</li><li>korisničko ime baze podataka i zaporka baze podataka - podatci za prijavu kod pristupa bazi podataka.</li></ul><p><strong>Opaska:</strong> ukoliko instaliraš koristeći SQLite, moraš unijeti cijelu putanju do datoteke baze podataka u DSN polju te polja korisničkog imena i zaporke baze podataka ostaviti praznima. Iz sigurnosnih razloga, moraš se uvjeriti da datoteka baze podataka nije pohranjena na lokaciji dostupnoj s Weba.</p><p>phpBB3 podržava sljedeće baze podataka:</p><ul><li>MySQL 3.23 ili noviju verziju (MySQLi podržana);</li><li>PostgreSQL 7.3+;</li><li>SQLite 2.8.2+;</li><li>Firebird 2.0+;</li><li>MS SQL Server 2000 ili noviju verziju (direktno ili putem ODBC);</li><li>Oracle.</li></ul><p>Samo (te), na serveru podržane, baze će biti prikazane.',
'INSTALL_INTRO_NEXT'=> 'Kako bi mogao/la (za)početi (s) instalaciju(om), klikni na donji gumb.',
'INSTALL_LOGIN'=> 'Prijava',
'INSTALL_NEXT'=> 'Sljedeća faza',
'INSTALL_NEXT_FAIL'=> 'Neki testovi nisu zadovoljeni što će reći da moraš ispraviti (navedene) probleme prije nastavka s/prijelaza na sljedeću fazu. Ukoliko ne ispraviš greške, a nastaviš, rezultat bi mogao biti nekompletna instalacija.',
'INSTALL_NEXT_PASS'=> 'Svi osnovni testovi su zadovoljeni te možeš nastaviti s instalacijom prelaskom na sljedeću fazu. Ukoliko si promijenio/la dopuštenja/module/sl. i želiš re-testirati, možeš to (sada) učiniti.',
'INSTALL_PANEL'=> 'Instalacija',
'INSTALL_SEND_CONFIG'=> 'Nažalost, phpBB nije mogao zapisati konfiguracijske informacije direktno u config.php datoteku (a) razlog čega je ili nepostojanje datoteke ili (to što) datoteka nije pre(za)pisljiva. Moguće opcije bit će izlistane ispod (a) kako bi mogao/la završiti s instalacijom.',
'INSTALL_START'=> 'Započni instalaciju',
'INSTALL_TEST'=> 'Ponovo testiraj',
'INST_ERR'=> 'Instalacijska greška',
'INST_ERR_DB_CONNECT'=> 'Nije bilo moguće povezati se s bazom podataka, greška je navedena dolje.',
'INST_ERR_DB_FORUM_PATH'=> 'Specificirana datoteka baze podataka nalazi se u forumskom stablu mapa. Morao/la bi staviti/premjestiti datoteku na lokaciju kojoj nije moguće pristupiti putem Weba.',
'INST_ERR_DB_NO_ERROR'=> 'Nije dana poruka greške.',
'INST_ERR_DB_NO_MYSQLI'=> 'MySQL verzija instalirana na računalu nije kompatibilna s “MySQL sa MySQLi ekstenzijom” (a) što je opcija koju si izabrao/la. Pokušaj, umjesto toga, izabrati, “MySQL” opciju.',
'INST_ERR_DB_NO_SQLITE'=> 'Verzija SQLite ekstenzije, koju si instalirao/la, je prestara, mora biti ažurirana na, najmanje, 2.8.2.',
'INST_ERR_DB_NO_ORACLE'=> ' Oracle verzija instalirana na računalu zahtjeva postavljanje <var>NLS_CHARACTERSET</var> paramet(a)ra na <var>UTF8</var>. Možeš ili promijeniti parametar/re ili ažurirati instalaciju na 9.2+.',
'INST_ERR_DB_NO_FIREBIRD'=> 'Firebird verzija instalirana na računalu je starija od 2.0, moraš izvršiti ažuriranje (na noviju verziju).',
'INST_ERR_DB_NO_FIREBIRD_PS'=> 'Baza podataka koju si izabrao/la za Firebird ima veličinu stranice manju od 8192 (a) koja mora biti najmanje 8192.',
'INST_ERR_DB_NO_POSTGRES'=> 'Baza podataka koju si izabrao/la nije kreirana u <var>UNICODE</var> ili <var>UTF8</var> enkodiranju/enkodingu. Pokušaj s instalacijom baze podataka u <var>UNICODE</var> ili <var>UTF8</var> enkodiranju/enkodingu.',
'INST_ERR_DB_NO_NAME'=> 'Nije uneseno ime baze podataka.',
'INST_ERR_EMAIL_INVALID'=> 'E-mail adresa koju si unio/la je neispravna.',
'INST_ERR_EMAIL_MISMATCH'=> 'E-mail adrese koje si unio/la se ne podudaraju.',
'INST_ERR_FATAL'=> 'Fatalna instalacijska greška',
'INST_ERR_FATAL_DB'=> 'Došlo je do fatalne, nepopravljive greške s/u bazi podataka.<br />Moguće je da je do ovoga došlo jer specificirani/a korisnik/ca nema potrebna dopuštenja za <code>KREIRANJE TABLICA</code> odnosno <code>UMETANJE</code> podataka itd.<br />Eventualne daljnje informacije nalaze se dolje.<br />Bilo kako bilo, prvo kontaktiraj pružatelja usluga (a tek) potom phpBB za daljnju pomoć.',
'INST_ERR_FTP_PATH'=> 'Nije bilo moguće promijeniti u zadanu mapu, provjeri putanju.',
'INST_ERR_FTP_LOGIN'=> 'Nije bilo moguće prijaviti se na FTP server, provjeri korisničko ime i zaporku.',
'INST_ERR_MISSING_DATA'=> 'Moraš ispuniti sve tražene podatke.',
'INST_ERR_NO_DB'=> 'Nije moguće učitati PHP modul za izabran tip baze podataka.',
'INST_ERR_PASSWORD_MISMATCH'=> 'Zaporke koje si unio/la se ne podudaraju.',
'INST_ERR_PASSWORD_TOO_LONG'=> 'Zaporka koju si unio/la je predugačka. Može sadržavati maksimalno 30 znakova.',
'INST_ERR_PASSWORD_TOO_SHORT'=> 'Zaporka koju si unio/la je prekratka. Mora sadržavati minimalno 6 znakova.',
'INST_ERR_PREFIX'=> 'Tablice sa specificiranim prefiksom već postoje. Izaberi alternativu.',
'INST_ERR_PREFIX_INVALID'=> 'Prefiks tablice/a, koji si specificirao/la, je neispravan za (tvoju) bazu podatka. Pokušaj s drugim, npr. izbrisivanjem znakova poput rastavnice.',
'INST_ERR_PREFIX_TOO_LONG'=> 'Prefiks tablice/a, koji si specificirao/la, je predugačak. Maksimalna dužina je %d znakova.',
'INST_ERR_USER_TOO_LONG'=> 'Korisničko ime koje si unio/la je predugačko. Može sadržavati maksimalno 20 znakova.',
'INST_ERR_USER_TOO_SHORT'=> 'Korisničko ime koje si unio/la je prekratko. Mora sadržavati minimalno 3 znaka.',
'INVALID_PRIMARY_KEY'=> 'Neispravan primaran ključ: %s.',
'LONG_SCRIPT_EXECUTION'=> 'Ovo može potrajati stoga nemoj prekidati skriptu.',

// mbstring
'MBSTRING_CHECK'=> '<samp>mbstring</samp> provjera ekstenzije',
'MBSTRING_CHECK_EXPLAIN'=> '<strong>Obvezno</strong>: <samp>mbstring</samp> je PHP ekstenzija koja omogućava <em>multibyte string</em> funkcije. Određene mbstring mogućnosti nisu kompatibilne s phpBB-om i moraju biti onemogućene.',
'MBSTRING_FUNC_OVERLOAD'=> 'Funkcija preopterećenja',
'MBSTRING_FUNC_OVERLOAD_EXPLAIN'=> '<var>mbstring.func_overload</var> mora biti postavljena ili na 0 ili na 4.',
'MBSTRING_ENCODING_TRANSLATION'=> 'Transparentno enkodiranje znakova',
'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'=> '<var>mbstring.encoding_translation</var> mora biti postavljena na 0.',
'MBSTRING_HTTP_INPUT'=> 'HTTP unos konverzije znakova',
'MBSTRING_HTTP_INPUT_EXPLAIN'=> '<var>mbstring.http_input</var> mora biti postavljena na <samp>pass</samp>.',
'MBSTRING_HTTP_OUTPUT'=> 'HTTP unos konverzije znakova',
'MBSTRING_HTTP_OUTPUT_EXPLAIN'=> '<var>mbstring.http_output</var> mora biti postavljena na <samp>pass</samp>.',
'MAKE_FOLDER_WRITABLE'=> 'Provjeri da li (donja) mapa uopće postoji i da li je pre(za)pisljiva od strane servera, te potom pokušaj ponovo.<br />»<strong>%s</strong>.',
'MAKE_FOLDERS_WRITABLE'=> 'Provjeri da li (donje) mape uopće postoje i da li su pre(za)pisljive od strane servera, te potom pokušaj ponovo.<br />»<strong>%s</strong>.',

'NAMING_CONFLICT'=> 'Konflikt imena: %s i %s su oboje aliasi<br /><br />%s',
'NEXT_STEP'=> 'Sljedeći korak',
'NOT_FOUND'=> 'Nije pronađeno',
'NOT_UNDERSTAND'=> 'Nije (bilo) moguće shvatiti %s #%d, tablicu/e %s (“%s”)',
'NO_CONVERTORS'=> 'Nema dostupnih konvertora za uporabu.',
'NO_CONVERT_SPECIFIED'=> 'Nije određen konvertor.',
'NO_LOCATION'=> 'Nije moguće utvrditi lokaciju. Ukoliko znaš da postoji Imagemagick instalacija, kasnije možeš, putem <em>Administracije foruma</em>, odrediti lokaciju.',
'NO_TABLES_FOUND'=> 'Nije pronađena (n)ijedna tablica.',
// TODO: Write some explanatory introduction text

'OVERVIEW_BODY'=> '<p>Dobrodošao/la u <em>public release candidate</em> sljedeće generacije phpBB-a, nakon 2.0.x., phpBB 3.0!<br />Namjena ovog izdanja jest pomoći nam u identificiranju (zadnjih) grešaka i problematičnih područja.</p><p>Pročitaj <a href="../docs/INSTALL.html">naš instalacijski vodič</a> ukoliko želiš saznati više informacija o instalaciji phpBB3-a.</p><p><strong style="text-transform: uppercase;">Opaska:</strong> ovo izdanje <strong style="text-transform: uppercase;">nije finalno</strong>. Možda ne bi bilo loše pričekati kompletno, finalno izdanje umjesto da instaliraš ovo za javnu uporabu.</p><p>Sistem instalacije će te voditi kroz instalacijski proces phpBB-a, konverziju iz različitog/drugog softverskog paketa odnosno nadogradnju na zadnju verziju phpBB-a. Za više informacija o svakoj opciji, izaberi ih s izbornika iznad.',

'PCRE_UTF_SUPPORT'=> 'PCRE UTF-8 podrška',
'PCRE_UTF_SUPPORT_EXPLAIN'=> 'phpBB <strong>neće</strong> raditi ako PHP instalacija nije kompatibilna s UTF-8 podrškom u PCRE ekstenziji.',
'PHP_GETIMAGESIZE_SUPPORT'=> 'PHP funkcija getimagesize() je dostupna',
'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'=> '<strong>Obvezno</strong>: kako bi phpBB funkcionirao ispravno, getimagesize funkcija mora biti dostupna.',
'PHP_OPTIONAL_MODULE'=> 'Opcionalni moduli',
'PHP_OPTIONAL_MODULE_EXPLAIN'=> '<strong>Opcionalno</strong>: ovi moduli/aplikacije su opcionalni/e, no, ako su dostupni/e, pružit će dodatne mogućnosti/opcije.',
'PHP_SUPPORTED_DB'=> 'Podržane baze podataka',
'PHP_SUPPORTED_DB_EXPLAIN'=> '<strong>Obvezno</strong>: moraš imati podršku za najmanje jednu bazu podataka kompatibilnu s PHP-om. Ukoliko niti jedan modul baze podataka nije prikazan kao dostupan, kontaktiraj davatelja usluga za savjet ili pregledaj relevantnu dokumentaciju PHP instalacije.',
'PHP_REGISTER_GLOBALS'=> 'PHP postavka <var>register_globals</var> je onemogućena',
'PHP_REGISTER_GLOBALS_EXPLAIN'=> 'phpBB će (ipak) raditi, ukoliko je ova opcija omogućena, no, ukoliko je moguće, preporučljivo je, u PHP instalaciji, onemogućiti register_globals poradi sigurnosnih razloga.',
'PHP_SAFE_MODE'=> 'Sigurnosni mod',
'PHP_SETTINGS'=> 'PHP verzija i postavke',
'PHP_SETTINGS_EXPLAIN'=> '<strong>Obvezno</strong>: kako bi mogao/la instalirati phpBB, moraš imati najmanje 4.3.3 verziju PHP-a. Ukoliko je <var>sigurnosni mod</var> prikazan ispod, PHP instalacija je pokrenuta u tom modu što će uzrokovati ograničenja vezana uz udaljeno administriranje i slične mogućnosti/opcije.',
'PHP_URL_FOPEN_SUPPORT'=> 'PHP postavka <var>allow_url_fopen</var> je omogućena',
'PHP_URL_FOPEN_SUPPORT_EXPLAIN'=> '<strong>Opcionalno</strong>: ova postavka je opcionalna, no, određene phpBB funkcije, poput off-site avatara, neće raditi ispravno bez nje.',
'PHP_VERSION_REQD'=> 'PHP verzija >= 4.3.3',
'POST_ID'=> 'ID posta',
'PREFIX_FOUND'=> 'Skeniranje tablica je pokazalo valjanu instalaciju koja koristi <strong>%s</strong> kao prefiks tablica.',
'PREPROCESS_STEP'=> 'Izvršavanje pred-procesnih funkcija/upita',
'PRE_CONVERT_COMPLETE'=> 'Svi pred-konverzijski koraci uspješno su završeni.<br />Sada možeš započeti s pravim konverzijskim procesom. Postoji mogućnost da ćeš neke postavke morati podesiti ručno. Po konverziji, posebice provjeri dodijeljena dopuštenja, ukoliko je neophodno, ponovo napravi indekse pretraživanje te provjeri da li su sve datoteke ispravno kopirane i smještene [npr. avatari i smajlići].',
'PROCESS_LAST'=> 'Izvršavanje zadnjih naredbi',

'REFRESH_PAGE'=> 'Za nastavak konverzije, osvježi stranicu',
'REFRESH_PAGE_EXPLAIN'=> 'Ukoliko je postavljeno na “Da”, konvertor će, nakon završetka (svakog) koraka, za nastavak konverzije osvježiti stranicu. Ukoliko je ovo tvoja prva konverzija (i to) u svrhu testiranja odnosno utvrđivanja eventualnih grešaka unaprijed, postavi na “Ne”.',
//'REQUIRED'=> 'Required',
'REQUIREMENTS_TITLE'=> 'Instalacijska kompatibilnost',
'REQUIREMENTS_EXPLAIN'=> 'Prije nastavka kompletne instalacije, phpBB će izvesti nekoliko testova konfiguracije servera i datoteka kako bi bilo sigurno da je moguće instalirati i pokrenuti phpBB. Bilo bi poželjno detaljno proći/pročitati (kroz) sve rezultate (i) te ne nastaviti sve dok svi potrebni testovi ne budu zadovoljeni. Ukoliko želiš koristiti neku od opcionalnih mogućnosti, moraš se uvjeriti da su i ti testovi zadovoljeni.',
'RETRY_WRITE'=> 'Ponovni pokušaj pre(za)pisivanja config datoteke',
'RETRY_WRITE_EXPLAIN'=> 'Ukoliko želiš, možeš promijeniti dopuštenja za config.php (a) kako bi dopustio/la phpBB-u da ju pre(za)pis(uj)e. Ukoliko to želiš napraviti, klikni dolje na “Pokušaj ponovo” za (ponovni) pokušaj. Nemoj zaboraviti vratiti dopuštenja za config.php nakon što instalacija phpBB-a bude zgotovljena.',

'SCRIPT_PATH'=> 'Putanja skripte',
'SCRIPT_PATH_EXPLAIN'=> 'Putanja smještaja phpBB-a relativno u odnosu na ime domene, npr. <samp>/phpBB3</samp>.',
'SELECT_LANG'=> 'Izaberi jezik',
'SERVER_CONFIG'=> 'Konfiguracija servera',
'SEARCH_INDEX_UNCONVERTED'=> 'Indeks pretraživanja nije konvertiran.',
'SEARCH_INDEX_UNCONVERTED_EXPLAIN'=> 'Stari indeks pretraživanja nije konvertiran što će reći da će pretraživanje davati “prazne” rezultate, no, možeš kreirati novi indeks pretraživanja na način da odeš u <em>Administriranje foruma</em> te pod <em>Održavanjem</em> izabereš <em>Indeks(e) pretraživanja</em>.',
'SOFTWARE'=> 'Forumski softver',
'SPECIFY_OPTIONS'=> 'Odredi opcije konverzije',
'STAGE_ADMINISTRATOR'=> 'Detalji administratora/ice',
'STAGE_ADVANCED'=> 'Napredne postavke',
'STAGE_ADVANCED_EXPLAIN'=> 'Postavke na ovoj stranici moraš podesiti samo ako znaš da nešto moraš postaviti drugačije od zadanog. Ukoliko nisi siguran/na, (jednostavno) prijeđi na sljedeći korak jer (ove) postavke možeš naknadno izmijeniti/promijeniti u <em>Administraciji foruma</em>.',
'STAGE_CONFIG_FILE'=> 'Konfiguracijska datoteka',
'STAGE_CREATE_TABLE'=> 'Kreiranje tablice baze podataka',
'STAGE_CREATE_TABLE_EXPLAIN'=> 'Tablice baze podataka, koje (će) koristi(ti) phpBB 3.0, su kreirane i popunjene inicijalnim podatcima.<br />Pristupi sljedećem koraku kako bi finalizirao/la instaliranje phpBB-a.',
'STAGE_DATABASE'=> 'Postavke baze podataka',
'STAGE_FINAL'=> 'Završna faza',
'STAGE_INTRO'=> 'Uvod',
'STAGE_IN_PROGRESS'=> 'Konverzija u tijeku',
'STAGE_REQUIREMENTS'=> 'Uvjeti',
'STAGE_SETTINGS'=> 'Postavke',
'STARTING_CONVERT'=> 'Započinje proces konverzije',
'STEP_PERCENT_COMPLETED'=> 'Korak <strong>%d</strong> od <strong>%d</strong>',
'SUB_INTRO'=> 'Uvod',
'SUB_LICENSE'=> 'Licenca',
'SUB_SUPPORT'=> 'Podrška',
'SUCCESSFUL_CONNECT'=> 'Veza je uspostavljena.',
// TODO: Write some text on obtaining support
'SUPPORT_BODY'=> 'Tijekom faze <em>candidate</em> izdanja, kompletna podrška bit će dana na <a href="http://www.phpbb.com/community/viewforum.php?f=46"> phpBB 3.0.x forumu podrške</a>. Da(va)t ćemo odgovore na na pitanja o instaliranju, konfiguracijskim/konverzacijskim problemima te podršku za određene uobičajene probleme (uglavnom) vezane uz greške [bugove]. Također, dopuštamo rasprave o modifikacijama i prilagođenim dodatnim kodovima/stilovima.</p><p>Za dodatnu pomoć, baci pogled na naš <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Vodič</a> i <a href="http://www.phpbb.com/support/documentation/3.0/"> online dokumentaciju</a>.</p><p>Kako bi bio/la siguran/na da si u tijeku, što se tiče ažuriranja, novosti i (naj)novi(ji)h izdanja, ne bi bilo loše <a href="http://www.phpbb.com/support/">pretplatiti se na našu mailing listu</a>.',
'SYNC_FORUMS'=> '[Započinje] Sinkroniziranje foruma',
'SYNC_POST_COUNT' => '[Započinje] Sinkroniziranje broja postova',
'SYNC_POST_COUNT_ID' => 'Sinkroniziranje broja postova od <var>entry</var> %1$s do %2$s.',
'SYNC_TOPICS'=> '[Započinje] Sinkroniziranje tema',
'SYNC_TOPIC_ID'=> 'Sinkroniziranje tema od <var>topic_id</var> %1$s do %2$s.',

'TABLES_MISSING'=> 'Nije bilo moguće pronaći sljedeće tablice:<br />» <strong>%s</strong>.',
'TABLE_PREFIX'=> 'Prefiks tablica baze podataka',
'TABLE_PREFIX_SAME'=> 'Prefiks tablice/a mora biti onaj koji je korišten od strane softvera koji konvertiraš.<br />» Specificiran prefiks tablice/a je (bio) %s.',
'TESTS_PASSED'=> 'Zadovoljeno na testovima.',
'TESTS_FAILED'=> 'Nije zadovoljeno na testovima.',

'UNABLE_WRITE_LOCK'=> 'Nije bilo moguće pre(za)pisati zaključanu datoteku.',
'UNAVAILABLE'=> 'Nedostupno',
'UNWRITABLE'=> 'Nepre(za)pisljivo',
'UPDATE_TOPICS_POSTED'=> 'Generiranje informacija postanih tema',
'UPDATE_TOPICS_POSTED_ERR'=> 'Došlo je do greške prilikom generiranja informacija postanih tema. Ovaj korak možeš ponovo pokušati napraviti iz <em>AF-a</em>, nakon što proces konverzacije završi.',
'VERSION'=> 'Verzija',

'WELCOME_INSTALL'=> 'Dobrodošao/la u phpBB3 instalaciju',
'WRITABLE'=> 'Pre(za)pisljivo',
));

// Updater
$lang = array_merge($lang, array(
'ALL_FILES_UP_TO_DATE'=> '(Sve) Datoteke su <em/>up to date</em> (najnovije) u odnosu na zadnju verziju phpBB-a.<br />Trebao/la bi se <a href="../ucp.php?mode=login">prijaviti na forum</a> i provjeriti da li sve radi kako spada. Nemoj zaboraviti izbrisati/preimenovati/premjestiti install mapu!',
'ARCHIVE_FILE'=> 'Izvorišna datoteka (u sklopu) arhive',

'BACK'=> 'Natrag',
'BINARY_FILE'=> 'Binarna datoteka',
'BOT'=> 'Pauk/Robot',

'CHANGE_CLEAN_NAMES'=> 'Ova metoda služi tome da se pronađu eventualni/e korisnici/e koji/e koriste isto korisničko ime (a) do čega je moglo doći prilikom izmjena. Korištenjem ove metode, u smislu usporedbe korisnika/ca, pronađeni/e su neki/e korisnici/e koji/e imaju ista korisnička imena. Kako bi mogao/la nastaviti, moraš izbrisati ili preimenovati te korisnike/ce kako bi svako korisničko ime bilo korišteno od strane samo jednog/e korisnika/ce.',
'CHECK_FILES'=> 'Provjeri datoteke',
'CHECK_FILES_AGAIN'=> 'Ponovo provjeri datoteke',
'CHECK_FILES_EXPLAIN'=> 'U sljedećem koraku, sve datoteke bit će provjerene u odnosu na datoteke za ažuriranje (a) što će potrajati neko vrijeme ukoliko je ovo prva provjera datoteka.',
'CHECK_FILES_UP_TO_DATE'=> 'Prema bazi podataka, verzija je <em/>up to date</em> (najnovija). Možeš početi s provjerom datoteka ukoliko se želiš uvjeriti da su sve datoteka zaista <em/>up to date</em> (najnovije) u odnosu na zadnju verziju phpBB-a.',
'CHECK_UPDATE_DATABASE'=> 'Nastavak procesa ažuriranja',
'COLLECTED_INFORMATION'=> 'Informacije o provjerenim datotekama',
'COLLECTED_INFORMATION_EXPLAIN'=> 'Donja lista prikazuje informacije o datotekama koje bi trebalo ažurirati. Pročitaj sve informacije o svakoj stavci (a) kako bi shvatio/la što znače te što moraš napraviti kako bi ažuriranje bilo (izvedeno) uspješno.',
'COMPLETE_LOGIN_TO_BOARD'=> 'Trebao/la bi se <a href="../ucp.php?mode=login">prijaviti na forum</a> i provjeriti da li sve radi kako spada. Nemoj zaboraviti izbrisati/preimenovati/premjestiti install mapu!',
'CONTINUE_UPDATE_NOW'=> 'Nastavi s procesom ažuriranja',
'CURRENT_FILE'=> 'Trenutna originalna datoteka',
'CURRENT_VERSION'=> 'Trenutna verzija',

'DATABASE_TYPE'=> 'Tip baze podataka',
'DATABASE_UPDATE_INFO_OLD'=> 'Datoteka ažuriranja baze podataka, u install mapi, je zastarjela. Provjeri da li si uploadao/la točnu verziju datoteke.',
'DELETE_USER_REMOVE'=> 'Izbriši (i) korisnika/cu i postove',
'DELETE_USER_RETAIN'=> 'Izbriši korisnika/cu (a) postove zadrži',
'DESTINATION'=> 'Odredišna datoteka',
'DIFF_INLINE'=> 'U retku',
'DIFF_RAW'=> 'Raw unified diff',
'DIFF_SEP_EXPLAIN'=> 'Kraj trenutne datoteke/Početak nove ažurirane datoteke',
'DIFF_SIDE_BY_SIDE'=> 'Jedno pored drugog',
'DIFF_UNIFIED'=> 'Unified diff',
'DO_NOT_UPDATE'=> 'Nemoj ažurirati ovu datoteku',
'DONE'=> 'Gotovo',
'DOWNLOAD'=> 'Preuzmi',
'DOWNLOAD_AS'=> 'Preuzmi kao',
'DOWNLOAD_UPDATE_METHOD'=> 'Preuzmi arhivu izmijenjenih datoteka',
'DOWNLOAD_UPDATE_METHOD_EXPLAIN'=> 'Nakon preuzimanja, trebaš otpakirati arhivu. Unutra ćeš pronaći izmijenjene datoteke koje moraš uploadati u vršnu mapu, odnosno njezine podmape, ovisno o tome kamo koja datoteka spada, phpBB-a. Nakon uploada svih datoteka, provjeri datoteke klikom na odgovarajući gumb dolje.',

'ERROR'=> 'Greška',
'EDIT_USERNAME'=> 'Uredi korisničko ime',

'FILE_ALREADY_UP_TO_DATE'=> 'Datoteka već je <em/>up to date</em> (najnovija).',
'FILE_DIFF_NOT_ALLOWED'=> 'Datoteka nije dopustila diffanje.',
'FILE_USED'=> 'Izvor informacija',// Single file
'FILES_CONFLICT'=> 'Konflikt datoteka',
'FILES_CONFLICT_EXPLAIN'=> 'Sljedeće datoteke su izmijenjene (i) ne predstavljaju originalne datoteke iz stare verzije. phpBB je ustanovio da te datoteke stvaraju konflikt(e) ukoliko ih se pokuša spojiti. Ono što trebaš napraviti jest otkriti razlog konflik(a)ta i pokušati ga (ih) riješiti ručno ili možeš nastaviti ažuriranje izborom metode spajanja. Ukoliko problem(e) riješiš ručno, nakon što ih izmijeniš, provjeri datoteke ponovo. Također možeš izabrati metodu spajanja za svaku datoteku posebno. Prvo će rezultirati gubljenjem redaka stare datoteke koji stvaraju konflikt(e) dok će drugo rezultirati gubljenjem izmjena novije datoteke.',
'FILES_MODIFIED'=> 'Izmijenjene datoteke',
'FILES_MODIFIED_EXPLAIN'=> 'Sljedeće datoteke su izmijenjene (i) ne predstavljaju originalne datoteke iz stare verzije. Ažurirana datoteka bit će spoj izmjena i nove datoteke.',
'FILES_NEW'=> 'Nove datoteke',
'FILES_NEW_EXPLAIN'=> 'Sljedeće datoteke, trenutno, ne postoje u instalaciji.',
'FILES_NEW_CONFLICT'=> 'Nove datoteke u konfliktu',
'FILES_NEW_CONFLICT_EXPLAIN'=> 'Sljedeće datoteke su nove, ali, ustanovljeno je da već postoji datoteka s istim imenom i na istoj poziciji. Datoteka će biti prepisana novom datotekom.',
'FILES_NOT_MODIFIED'=> 'Nema izmijenjenih datoteka',
'FILES_NOT_MODIFIED_EXPLAIN'=> 'Sljedeće datoteke nisu izmijenjene i predstavljaju originalne phpBB datoteke iz verzije u koju želiš ažurirati.',
'FILES_UP_TO_DATE'=> 'Datoteke su već ažurirane',
'FILES_UP_TO_DATE_EXPLAIN'=> 'Sljedeće datoteke su već <em/>up to date</em> (najnovije) i ne treba ih ažurirati.',
'FTP_SETTINGS'=> 'FTP postavke',
'FTP_UPDATE_METHOD'=> 'FTP uploadira(n)j(e)',

'INCOMPATIBLE_UPDATE_FILES'=> 'Datoteke za ažuriranje nisu kompatibilne s instaliranom verzijom. Instalirana verzija je %1$s dok su datoteke za ažuriranje phpBB %2$s u %3$s.',
'INCOMPLETE_UPDATE_FILES'=> 'Datoteke za ažuriranje su nepotpune.',
'INLINE_UPDATE_SUCCESSFUL'=> 'Ažuriranje baze podataka je uspješno završeno. Ono što sada trebaš napraviti je nastaviti s procesom ažuriranja.',
'KEEP_OLD_NAME'=> 'Zadrži korisničko ime',

'LATEST_VERSION'=> 'Najnovija verzija',
'LINE'=> 'Redak',
'LINE_ADDED'=> 'Dodano',
'LINE_MODIFIED'=> 'Izmijenjeno',
'LINE_REMOVED'=> 'Izbrisano',
'LINE_UNMODIFIED'=> 'Neizmijenjeno',
'LOGIN_UPDATE_EXPLAIN'=> 'Kako bi mogao/la ažurirati instalaciju, moraš se prvo prijaviti.',

'MAPPING_FILE_STRUCTURE'=> 'Za lakše uploadiranje, ovo su lokacije datoteka (onako) kako ih treba smjestiti u phpBB instalaciju.',
'MERGE_MODIFICATIONS_OPTION'=> 'Spoji modifikacije',
'MERGE_NO_MERGE_NEW_OPTION'=> 'Nemoj spojiti - koristi novu datoteku',
'MERGE_NO_MERGE_MOD_OPTION'=> 'Nemoj spojiti - koristi trenutno instaliranu datoteku',
'MERGE_MOD_FILE_OPTION'=> 'Spoji razlike i koristi izmijenjen kod kod konflik(a)ta',
'MERGE_NEW_FILE_OPTION'=> 'Spoji razlike i koristi kod nove datoteke kod konflik(a)ta',
'MERGE_SELECT_ERROR'=> 'Modovi za spajanje datoteka u konfliktu(ima) nisu dobro označeni/odabrani/izabrani.',

'NEW_FILE'=> 'Nova ažurirana datoteka',
'NEW_USERNAME'=> 'Novo korisničko ime',
'NO_AUTH_UPDATE'=> 'Nisi autoriziran/a za ažuriranje.',
'NO_ERRORS'=> 'Nema grešaka.',
'NO_UPDATE_FILES'=> 'Sljedeće datoteke neće biti ažurirane',
'NO_UPDATE_FILES_EXPLAIN'=> 'Sljedeće datoteke su nove ili izmijenjene ali nije moguće pronaći, u instalaciji, mapu u kojoj su one obično smještene. Ukoliko lista sadrži datoteke do drugih mapa, poput language/ ili styles/, možda si izmijenio strukturu mapa, pa možda i ažuriranje nije kompletno.',
'NO_UPDATE_FILES_OUTDATED'=> 'Nije pronađena valjana mapa za ažuriranje. Provjeri da li si uploadirao/la relevantne datoteke.<br /><br />Čini se da instalacija <strong>nije/strong> <em/>up to date</em> (najnovija). Za tvoju verziju phpBB-a, %1$s , postoje ažuriranja, pa posjeti <a href="http://www.phpbb.com/downloads/" rel="external">http://www.phpbb.com/downloads/</a> kako bi preuzeo/la ispravan paket za ažuriranje iz Verzije %2$s u Verziju %3$s.',
'NO_UPDATE_FILES_UP_TO_DATE'=> 'Tvoja verzija je <em/>up to date</em> (najnovija) što će reći da nema potrebe za ažuriranjem.<br />Ukoliko želiš napraviti cjelovitu provjeru datoteka, provjeri da li si uploadirao/la točne datoteke za ažuriranje.',
'NO_UPDATE_INFO'=> 'Nije bilo moguće pronaći informacije o ažuriranju.',
'NO_UPDATES_REQUIRED'=> 'Nema nužnih ažuriranja.',
'NO_VISIBLE_CHANGES'=> 'Nema vidljivih promjena.',
'NOTICE'=> 'Bilješka/Najava',
'NUM_CONFLICTS'=> 'Broj konflikata',

'OLD_UPDATE_FILES'=> 'Datoteke za ažuriranje su <em>out of date</em> (prestare). Pronađene datoteke su za ažuriranje phpBB-a %1$s u phpBB %2$s dok je najnovija verzija phpBB-a %3$s.',

'PACKAGE_UPDATES_TO'=> 'Trenutni paket ažurira u verziju',
'PERFORM_DATABASE_UPDATE'=> 'Izvođenje ažuriranja baze podataka',
'PERFORM_DATABASE_UPDATE_EXPLAIN'=> 'Ispod se nalazi gumb do skripte za ažuriranje baze.<br />Ažuriranje baze može potrajati stoga nemoj prekinuti izvođenje ukoliko ti se učini predugim.<br />Nakon što ažuriranje baze bude uzvedeno, slijedi instrukcije za nastavak procesa ažuriranja.',
'PREVIOUS_VERSION'=> 'Prethodna verzija',
'PROGRESS'=> 'Napredak',

'RESULT'=> 'Rezultat',
'RUN_DATABASE_SCRIPT'=> 'Ažuriraj bazu podataka',

'SELECT_DIFF_MODE'=> 'Izaberi diff mod',
'SELECT_DOWNLOAD_FORMAT'=> 'Izaberi format arhive preuzimanja',
'SELECT_FTP_SETTINGS'=> 'Izaberi FTP postavke',
'SHOW_DIFF_CONFLICT'=> 'Prikaži razlike/konflikte',
'SHOW_DIFF_FINAL'=> 'Prikaži dobivenu datoteku',
'SHOW_DIFF_MODIFIED'=> 'Prikaži spojene razlike',
'SHOW_DIFF_NEW'=> 'Prikaži sadržaj datoteke',
'SHOW_DIFF_NEW_CONFLICT'=> 'Prikaži razlike',
'SHOW_DIFF_NOT_MODIFIED'=> 'Prikaži razlike',
'SOME_QUERIES_FAILED'=> 'Neki upiti nisu uspjeli, navodi i greške su izlistani/e dolje.',
'SQL'=> 'SQL',
'SQL_FAILURE_EXPLAIN'=> 'Radi se o nečemu oko čega se, najvjerojatnije, ne bi trebalo zabrinjavati, pa će ažuriranje biti nastavljeno. Ukoliko ažuriranje ne bude završeno, dakle, ne uspije, potraži pomoć na forumu podrške. Kako potražiti pomoć možeš pročitati u  <a href="../docs/README.html">README</a>.',
'STAGE_FILE_CHECK'=> 'Provjer(a)i datotek(a)e',
'STAGE_UPDATE_DB'=> 'Ažurira(n)j(e) bazu(e) podataka',
'STAGE_UPDATE_FILES'=> 'Ažurira(n)j(e) datoteke(a)',
'STAGE_VERSION_CHECK'=> 'Provjer(a)i verzij(e)u',
'STATUS_CONFLICT'=> 'Izmijenjena datoteka koja uzrokuje konflikt(e)',
'STATUS_MODIFIED'=> 'Izmijenjena datoteka',
'STATUS_NEW'=> 'Nova datoteka',
'STATUS_NEW_CONFLICT'=> 'Nova datoteka u konfliktu(ima)/koja uzrokuje konflikt(e)',
'STATUS_NOT_MODIFIED'=> 'Neizmijenjena datoteka',
'STATUS_UP_TO_DATE'=> 'Već ažurirana datoteka',

'UPDATE_COMPLETED'=> 'Ažuriranje je završeno.',
'UPDATE_DATABASE'=> 'Ažuriraj bazu podataka',
'UPDATE_DATABASE_EXPLAIN'=> 'Sa sljedećim korakom, baza podataka bit će ažurirana.',
'UPDATE_DATABASE_SCHEMA'=> 'Shema ažuriranja baze podataka',
'UPDATE_FILES'=> 'Ažuriraj datoteke',
'UPDATE_FILES_NOTICE'=> 'Provjeri da li si ažurirao/la i datoteke foruma, ova datoteka služi samo ažuriranju baze podataka.',
'UPDATE_INSTALLATION'=> 'Ažuriraj instalaciju phpBB-a',
'UPDATE_INSTALLATION_EXPLAIN'=> 'Ovom opcijom, možeš ažurirati instalaciju phpBB-a u najnoviju verziju.<br /> Tijekom procesa, bit će provjerena cjelovitost svih datoteka. Moći ćeš vidjeti sve primjene i datoteke prije ažuriranja.<br /><br /> Ažuriranje može biti izvedeno na dva načina.</p><h2>Ručno ažuriranje</h2><p> Kod ručnog ažuriranja, a kako ne bi izgubio/la eventualne izmjene koje si napravio/la u datotekama, sam/a preuzimaš izmijenjene datoteka i ručno uploadaš datoteke tamo kamo spadaju a u odnosu na vršnu phpBB mapu odnosno njezine podmape (a) nakon čega možeš izvršiti provjeru da se uvjeriš da li su sve datoteke (pre)smještene na njihovu pravu lokaciju.</p><h2>Automatsko ažuriranje FTP-om</h2><p>Metoda je slična prvonavedenoj, ali nema potrebe za preuzimanjem izmijenjenih datoteka i uploadiranjem ih, naime, to će sve biti automatski izvršeno. Ukoliko ažuriranje želiš izvršiti na ovaj način, moraš znati svoje FTP podatke za prijavu jer ćeš ih morati upisati. Kada sve bude zgotovljeno, bit ćeš preusmjeren/a na provjeru datoteka kako bi se uvjerio/la da je sve ispravno ažurirano.<br /><br />',
'UPDATE_INSTRUCTIONS'=> '<h1>Priopćenje izdanja</h1><p>Pročitaj <strong><a href="%1$s" title="%1$s">priopćenje najnovijeg izdanja</a></strong> prije nego nastaviš s procesom ažuriranja (a) zato što, osim što, sadržava korisne informacije, sadržava i sve linkove za preuzimanje kao i logove izmjena.</p><br /><h1>Kako ažurirati instalaciju s <em>Automatic Update Package</em> (paketom automatskog ažuriranja)?</h1><p>Preporučen način ažuriranja instalacije, (a) koji se odnosi samo na paket automatskog ažuriranja, [instalaciju je moguće ažurirati (i) metodama izlistanim u dokumentu INSTALL.html], sadrži sljedeće korake:</p><ul style="margin-left: 20px; font-size: 1.1em;"><li>Otiđi na <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">phpBB.com stranicu za preuzimanje</a> i preuzmi arhivu “paketa automatskog ažuriranja”.<br /><br /></li><li>Otpakiraj arhivu.<br /><br /></li><li>Uploadaj kompletnu nekomprimiranu instalacijsku mapu u phpBB vršnu mapu (tamo gdje se nalazi config.php datoteka).<br /><br /></li></ul><p>Nakon uploadanja te mape, forum će za obične  korisnike/ce biti offline, sve dok je ta mapa prisutna.<br /><br /><strong><a href="%2$s" title="%2$s">Zatim započni proces ažuriranja usmjeravanjem preglednika na install mapu.</a></strong><br /><br />Nakon toga ćeš biti vođen/a kroz ostatak procesa te ćeš biti obaviješten/a kada proces ažuriranja završi.</p>',
'UPDATE_INSTRUCTIONS_INCOMPLETE' => '<h1>Detektirano je nepotpuno ažuriranje</h1><p>phpBB je detektirao nepotpuno automatsko ažuriranje.<br /> Provjeri da li si slijedio/la svaki korak alata za automatsko ažuriranje.<br />Ispod se nalazi link za ponovni pokušaj ili možeš direktno otići u install mapu.',
'UPDATE_METHOD'=> 'Metoda ažuriranja',
'UPDATE_METHOD_EXPLAIN'=> 'Sada možeš izabrati metodu ažuriranja. Ukoliko se odlučiš za ažuriranje FTP-om, u formu koja će se prikazati, morat ćeš unijeti detalje svojeg FTP korisničkog računa. Ovom metodom, datoteke će automatski biti premještene na novu lokaciju te će biti napravljene zaštitne kopije starih datoteka (a) koje ćeš prepoznati po tome što će, svakoj, u naziv biti dodano .bak. Ukoliko se odlučiš za preuzimanje izmijenjenih datoteka, morat ćeš ih otpakirati i uploadati ručno.',

'UPDATE_REQUIRES_FILE'=> 'Za nastavak ažuriranja, potrebna je sljedeća datoteka: %s',

'UPDATE_SUCCESS'=> 'Ažuriranje je uspjelo.',
'UPDATE_SUCCESS_EXPLAIN'=> 'Datoteke su uspješno ažurirane. Sljedeći korak uključuje ponovnu provjeru svih datoteka kako bi se uvjerio/la da su sve datoteke ispravno ažurirane.',
'UPDATE_VERSION_OPTIMIZE'=> 'Ažuriranje verzije i optimiziranje tablica',
'UPDATING_DATA'=> 'Ažuriranje podataka',
'UPDATING_TO_LATEST_STABLE'=> 'Ažuriranje baze podataka u najnovije stabilno izdanje',
'UPDATED_VERSION'=> 'Ažurirana verzija',
'UPLOAD_METHOD'=> 'Metoda uploadiranja',
'UPDATE_DB_SUCCESS'=> 'Baza je ažurirana.',
'USER_ACTIVE'=> 'Aktivno korisničko ime',
'USER_INACTIVE'=> 'Neaktivno korisničko ime',

'VERSION_CHECK'=> 'Provjeravanje verzije',
'VERSION_CHECK_EXPLAIN'=> 'Provjeri kako bi provjerio/la da li je phpBB verzija koju koristiš <em/>up to date</em> (najnovija).',
'VERSION_NOT_UP_TO_DATE'=> 'Tvoja verzija phpBB-a nije <em/>up to date</em> (najnovija).<br />Nastavi s procesom ažuriranja.',
'VERSION_NOT_UP_TO_DATE_ACP'=> 'Tvoja verzija phpBB-a nije <em/>up to date</em> (najnovija).<br />Dolje ćeš naći link na priopćenje izdanja najnovije verzije kao i na upute o tome kako izvršiti ažuriranje.',
'VERSION_UP_TO_DATE'=> 'Tvoja instalacija je <em/>up to date</em> (najnovija) što će reći da nema dostupnih ažuriranja za tvoju verziju phpBB-a, no, ništa te ne sprječava, svejedno, nastaviti kako bi izvršio/la provjeru valjanosti datoteka/e.',
'VERSION_UP_TO_DATE_ACP'=> 'Tvoja instalacija je <em/>up to date</em> (najnovija) što će reći da nema dostupnih ažuriranja za tvoju verziju phpBB-a te da ne moraš ažurirati instalaciju.',
'VIEWING_FILE_CONTENTS'=> 'Pregledavanje sadržaja datoteka',
'VIEWING_FILE_DIFF'=> 'Pregledavanje razlika u  datotekama',

'WRONG_INFO_FILE_FORMAT'=> 'Neispravan format info datoteke.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
'CONFIG_BOARD_EMAIL_SIG'=> 'Hvala, Vodstvo',
'CONFIG_SITE_DESC'=> 'Opis foruma',
'CONFIG_SITENAME'=> 'domena.com',

'DEFAULT_INSTALL_POST'=> 'Ovaj post dolazi kao sastavni dio instalacije phpBB3 foruma.<br />Možeš izbrisati, ne samo, njega, već i, temu odnosno tematski forum, s obzirom da, čini se, sve radi kako spada.',

'EXT_GROUP_ARCHIVES'=> 'Arhive',
'EXT_GROUP_DOCUMENTS'=> 'Dokumenti',
'EXT_GROUP_DOWNLOADABLE_FILES'=> 'Datoteke za preuzimanje',
'EXT_GROUP_FLASH_FILES'=> 'Flash datoteke',
'EXT_GROUP_IMAGES'=> 'Slike',
'EXT_GROUP_PLAIN_TEXT'=> 'Običan tekst',
'EXT_GROUP_QUICKTIME_MEDIA'=> 'Quicktime Media',
'EXT_GROUP_REAL_MEDIA'=> 'Real Media',
'EXT_GROUP_WINDOWS_MEDIA'=> 'Windows Media',

'FORUMS_FIRST_CATEGORY'=> 'Kategorija I',
'FORUMS_TEST_FORUM_DESC'=> 'Ovo je testni forum.',
'FORUMS_TEST_FORUM_TITLE'=> 'Testni forum I',

'RANKS_SITE_ADMIN_TITLE'=> 'Administrator/ica',
'REPORT_WAREZ' => 'Post sadrži link(ove) na ilegalne/piratske programe.',
'REPORT_SPAM' => 'Post je reklama Web stranice(a)/proizvoda.',
'REPORT_OFF_TOPIC' => 'Post je off topic.',
'REPORT_OTHER' => 'Post ne spada u niti jednu od postojećih kategorija.',

'SMILIES_ARROW'=> 'Strelica',
'SMILIES_CONFUSED'=> 'Zbunjen',
'SMILIES_COOL'=> 'Cool',
'SMILIES_CRYING'=> 'Plače',
'SMILIES_EMARRASSED'=> 'Neugodno mu',
'SMILIES_EVIL'=> 'Zao/Ljut',
'SMILIES_EXCLAMATION'=> 'Uskličnik',
'SMILIES_GEEK'=> 'Šmokljan',
'SMILIES_IDEA'=> 'Ideja',
'SMILIES_LAUGHING'=> 'Smije se',
'SMILIES_MAD'=> 'Ljuti se',
'SMILIES_MR_GREEN'=> 'Zelenko',
'SMILIES_NEUTRAL'=> 'Neutralan',
'SMILIES_QUESTION'=> 'Pitanje',
'SMILIES_RAZZ'=> 'Belji se',
'SMILIES_ROLLING_EYES'=> 'Koluče očima',
'SMILIES_SAD'=> 'Tužan',
'SMILIES_SHOCKED'=> 'Šokiran',
'SMILIES_SMILE'=> 'Smješka se',
'SMILIES_SURPRISED'=> 'Iznenađen',
'SMILIES_TWISTED_EVIL'=> 'Zloćko',
'SMILIES_UBER_GEEK'=> 'Šmokljan na kvadrat',
'SMILIES_VERY_HAPPY'=> 'Presretan',
'SMILIES_WINK'=> 'Namiguje',

'TOPICS_TOPIC_TITLE'=> 'Dobrodošao/la u phpBB3',
));
?>