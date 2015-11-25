<?php
/** 
*
* acp_board [Croatian]
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

// Board Settings
$lang = array_merge($lang, array(
'ACP_BOARD_SETTINGS_EXPLAIN'=> 'Ovdje možeš pobliže odrediti/uređivati osnovne postavke foruma poput određivanja imena i opisa, postavljanja zadanih vrijednosti datuma, vremena, jezika, stila... itd.',

'CUSTOM_DATEFORMAT'=> 'Prilagođeno...',

'DEFAULT_DATE_FORMAT'=> 'Format datuma',
'DEFAULT_DATE_FORMAT_EXPLAIN'=> 'Format datuma isti je kao PHP <code>date</code> funkcija.',
'DEFAULT_LANGUAGE'=> 'Zadani jezik',
'DEFAULT_STYLE'=> 'Zadani stil',
'DISABLE_BOARD'=> 'Onemogući forum',
'DISABLE_BOARD_EXPLAIN'=> 'Ovo će forum učiniti nedostupnim korisnicima/ama.<br />Ukoliko želiš, možeš unijeti kratku [do 255 znakova] obavijesnu poruku.',

'OVERRIDE_STYLE'=> 'Onemogući korisnički stil',
'OVERRIDE_STYLE_EXPLAIN'=> 'Zamjenjuje korisnički stil zadanim.',

'SITE_DESC'=> 'Opis stranica',
'SITE_NAME'=> 'Naziv stranica',
'SYSTEM_DST'=> 'Omogući ljetno vrijeme/<abbr title="Daylight Saving Time">DST</abbr>',
'SYSTEM_TIMEZONE'=> 'Vremenska zona',

'WARNINGS_EXPIRE'=> 'Vrijeme trajanja upozorenja',
'WARNINGS_EXPIRE_EXPLAIN'=> 'Broj dana koji mora proći kako bi upozorenje automatski bilo izbrisano iz korisničke evidencije.',
));

// Board Features
$lang = array_merge($lang, array(
'ACP_BOARD_FEATURES_EXPLAIN'=> 'Ovdje možeš omogućiti/onemogućiti određene karakteristike/mogućnosti/funkcije.',
'ALLOW_ATTACHMENTS'=> 'Dopusti privitke',
'ALLOW_BIRTHDAYS'=> 'Dopusti rođendane',
'ALLOW_BIRTHDAYS_EXPLAIN'=> 'Omogućava unošenje rođendana i prikaz [godina] starosti u profilima [što se o(ne)mogućava (u) <em>Ostalim postavkama</em>].',
'ALLOW_BOOKMARKS'=> 'Dopusti bookmarkiranje tema',
'ALLOW_BOOKMARKS_EXPLAIN'=> 'Korisnici/e mogu spremati osobne bookmarke.',
'ALLOW_BBCODE'=> 'Dopusti BBKod',
'ALLOW_FORUM_NOTIFY'=> 'Dopusti pretplatu na forume',
'ALLOW_NAME_CHANGE'=> 'Dopusti promjene korisničkih imena',
'ALLOW_NO_CENSORS'=> 'Dopusti onemogućavanje cenzure riječi',
'ALLOW_NO_CENSORS_EXPLAIN'=> 'Dopuštenje korisnicima/ama da onemoguće automatsku cenzuru riječi u postovima i privatnim porukama.',
'ALLOW_PM_ATTACHMENTS'=> 'Dopusti privitke u privatnim porukama',
'ALLOW_SIG'=> 'Dopusti potpise',
'ALLOW_SIG_BBCODE'=> 'Dopusti BBKod u potpisima',
'ALLOW_SIG_FLASH'=> 'Dopusti <code>[FLASH]</code> BBKod tag(ove) u potpisima',
'ALLOW_SIG_IMG'=> 'Dopusti <code>[IMG]</code> BBKod tag(ove) u potpisima',
'ALLOW_SIG_LINKS'=> 'Dopusti linkove u potpisima',
'ALLOW_SIG_LINKS_EXPLAIN'=> 'Ukoliko je(su) <code>[URL]</code> BBKod tag(ovi) onemogućeni, automatski su onemogućeni i automatski/magični linkovi.',
'ALLOW_SIG_SMILIES'=> 'Dopusti smajliće u potpisima',
'ALLOW_SMILIES'=> 'Dopusti smajliće',
'ALLOW_TOPIC_NOTIFY'=> 'Dopusti pretplatu na teme',

'BOARD_PM'=> 'Privatne poruke',
'BOARD_PM_EXPLAIN'=> 'Omogući odnosno onemogući privatne poruke svim korisnicima/ama.',
));

// Avatar Settings
$lang = array_merge($lang, array(
'ACP_AVATAR_SETTINGS_EXPLAIN'=> 'Avatari su, uobičajeno, male slike, jedinstvene/osobne za svakog/u korisnika/cu. Ovisno o stilu, obično su prikazani ispod korisničkog imena prilikom pregledavanja tema.<br />Ovdje možeš odrediti kako korisnici/e mogu definirati/postaviti (svoje) avatare.<br />Za uploadanje avatara mora biti kreirana mapa pre(za)pisljiva od strane servera.<br />Ograničenja veličine datoteka odnose se samo na uploadane avatare, ne i na linkane.',
'ALLOW_LOCAL'=> 'Omogući galeriju avatara',
'ALLOW_REMOTE'=> 'Omogući linkane avatare',
'ALLOW_REMOTE_EXPLAIN'=> 'Avatari koji su smješteni na drugim i pozivaju se s tih stranica.',
'ALLOW_UPLOAD'=> 'Omogući uploadanje avatara',
'AVATAR_GALLERY_PATH'=> 'Putanja galerije avatara',
'AVATAR_GALLERY_PATH_EXPLAIN'=> 'Putanja galerije avatara u odnosu na phpBB, npr. <samp>images/avatars/gallery</samp>.',
'AVATAR_STORAGE_PATH'=> 'Putanja spremanja avatara',
'AVATAR_STORAGE_PATH_EXPLAIN'=> 'Putanja smještaja [mape] spremanja avatara u odnosu na phpBB, npr. <samp>images/avatars/upload</samp>.',

'MAX_AVATAR_SIZE'=> 'Maksimalne dimenzije avatara',
'MAX_AVATAR_SIZE_EXPLAIN'=> 'Visina x širina u pikselima.',
'MAX_FILESIZE'=> 'Maksimalna veličina datoteke avatara',
'MAX_FILESIZE_EXPLAIN'=> 'Za uploadane avatare.',
'MIN_AVATAR_SIZE'=> 'Minimalne dimenzije avatara',
'MIN_AVATAR_SIZE_EXPLAIN'=> 'Visina x širina u pikselima.',
));

// Message Settings
$lang = array_merge($lang, array(
'ACP_MESSAGE_SETTINGS_EXPLAIN'=> 'Ovdje možeš postaviti sve zadane vrijednosti za privatne poruke.',
'ALLOW_BBCODE_PM'=> 'Dopusti BBKod u privatnim porukama',
'ALLOW_FLASH_PM'=> 'Dopusti <code>[FLASH]</code> BBKod tag(ove) u privatnim porukama',
'ALLOW_FLASH_PM_EXPLAIN' => 'Mogućnost korištenja flasha, u privatnim porukama, ukoliko je ovdje omogućena, ovisi (i) o dopuštenjima.',
'ALLOW_FORWARD_PM'=> 'Dopusti prosljeđivanje privatnih poruka',
'ALLOW_IMG_PM'=> 'Dopusti <code>[IMG]</code> BBKod tag(ove) u privatnim porukama',
'ALLOW_MASS_PM'=> 'Dopusti slanje privatnih poruka na više “adresa” [više korisničkih imena odnosno grupa istovremeno]',
'ALLOW_PRINT_PM'=> 'Dopusti prikaz ispisa u privatnim porukama',
'ALLOW_QUOTE_PM'=> 'Dopusti citiranje u privatnim porukama',
'ALLOW_SIG_PM'=> 'Dopusti potpise u privatnim porukama',
'ALLOW_SMILIES_PM'=> 'Dopusti smajliće u privatnim porukama',

'BOXES_LIMIT'=> 'Maksimalno privatnih poruka po mapi',
'BOXES_LIMIT_EXPLAIN'=> 'Maksimalan broj privatnih poruka po svakoj mapi [0=neograničeno].',
'BOXES_MAX'=> 'Maksimalno mapa privatnih poruka',
'BOXES_MAX_EXPLAIN'=> 'Maksimalan broj mapa privatnih poruka koje korisnici/e mogu kreirati.',

'ENABLE_PM_ICONS'=> 'Omogući korištenje ikona tema u privatnim porukama',

'FULL_FOLDER_ACTION'=> 'Zadana radnja u slučaju popunjenja mape',
'FULL_FOLDER_ACTION_EXPLAIN'=> 'Zadana radnja koja će biti izvršena u slučaju popunjenja mape; ne odnosi se samo na mapu <em>Poslano</em> [u kojoj se nalaze poslane poruke] za koju je zadana radnja izbrisivanje (naj)stari(ji)h poruka.',

'HOLD_NEW_MESSAGES'=> 'Nove poruke stavi “na čekanje”',

'PM_EDIT_TIME'=> 'Ograničeno vrijeme uređivanja',
'PM_EDIT_TIME_EXPLAIN'=> 'Ograničava  vrijeme naknadnog uređivanja (još) nedostavljenih privatnih poruka.<br />Za onemogućavanje ograničenja vremena uređivanja, vrijednost postavi na 0.',
));

// Post Settings
$lang = array_merge($lang, array(
'ACP_POST_SETTINGS_EXPLAIN'=> 'Ovdje možeš postaviti sve zadane vrijednosti za postanje.',
'ALLOW_POST_LINKS'=> 'Dopusti linkove u postovima/privatnim porukama',
'ALLOW_POST_LINKS_EXPLAIN'=> 'Ukoliko je(su) <code>[URL]</code> BBKod tag(ovi) onemogućen(i), ujedno su onemogućeni i automatski/magični linkovi.',
'ALLOW_POST_FLASH' => 'Dopusti <code>[FLASH]</code> BBKod tag(ove) u postovima. ',
'ALLOW_POST_FLASH_EXPLAIN' => 'Ukoliko je nedopušteno, <code>[FLASH]</code> BBKod tag(ovi) će biti onemogućeni u postovima. Ukoliko je drugačije postavljeno, sistem dopuštenja kontrolirat će smije li korisnik/ca koristiti BBKod tag(ove) u postovima.',

'BUMP_INTERVAL'=> 'Interval bumpiranja',
'BUMP_INTERVAL_EXPLAIN'=> 'Broj minuta/sati/dana između zadnjeg postanog posta u temi i mogućnosti bumpiranja teme.',

'CHAR_LIMIT'=> 'Maksimalno znakova po postu',
'CHAR_LIMIT_EXPLAIN'=> 'Maksimalan dopušten broj znakova u postovima korisnika/ca [0=neograničeno].',

'DISPLAY_LAST_EDITED'=> 'Prikaži info o uređivanju posta',
'DISPLAY_LAST_EDITED_EXPLAIN'=> 'Prikazuje (u postu) koliko je puta naknadno uređen te kada je izvršena zadnja izmjena.',

'EDIT_TIME'=> 'Ograničeno vrijeme uređivanja',
'EDIT_TIME_EXPLAIN'=> 'Ograničava  vrijeme naknadnog uređivanja postova.<br />Za onemogućavanje ograničenja vremena uređivanja, vrijednost postavi na 0.',

'FLOOD_INTERVAL'=> 'Zadani razmak postanja',
'FLOOD_INTERVAL_EXPLAIN'=> 'Broj sekundi koji mora proći između postanja 2 posta/poruke istog/e korisnika/ce.<br />Ukoliko želiš omogućiti korisnicima/ama ignoriranje ove opcije, moraš im podesiti dopuštenja.',

'HOT_THRESHOLD'=> 'Prag popularnih tema',
'HOT_THRESHOLD_EXPLAIN'=> 'Minimalan broj postova koji moraju biti postani u temi da bi tema postala [označena kao] popularna.<br /> Za onemogućavanje popularnih tema, vrijednost postavi na 0.',

'MAX_POLL_OPTIONS'=> 'Maksimalan broj odgovora/opcija po anketi',
'MAX_POST_FONT_SIZE'=> 'Maksimalna veličina fonta posta',
'MAX_POST_FONT_SIZE_EXPLAIN'=> 'Maksimalna dopuštena veličina fonta u postovima korisnika/ca [0=neograničeno].',
'MAX_POST_IMG_HEIGHT'=> 'Maksimalna visina slike posta',
'MAX_POST_IMG_HEIGHT_EXPLAIN'=> 'Maksimalna dopuštena visina slike/flash datoteke u postovima korisnika/ca [0=neograničeno].',
'MAX_POST_IMG_WIDTH'=> 'Maksimalna širina slike posta',
'MAX_POST_IMG_WIDTH_EXPLAIN'=> 'Maksimalna dopuštena širina slike/flash datoteke u postovima korisnika/ca [0=neograničeno].',
'MAX_POST_URLS'=> 'Maksimalno linkova po postu',
'MAX_POST_URLS_EXPLAIN'=> 'Maksimalan dopušten broj linkova u postovima korisnika/ca [0=neograničeno].',

'POSTING'=> 'Postanje',
'POSTS_PER_PAGE'=> 'Postova po stranici',

'QUOTE_DEPTH_LIMIT'=> 'Maksimalno ugniježđenih citata po postu',
'QUOTE_DEPTH_LIMIT_EXPLAIN'=> 'Maksimalan dopušten broj ugniježđenih citata [citat u citatu] u postovima korisnika/ca [0=neograničeno].',

'SMILIES_LIMIT'=> 'Maksimalno smajlića po postu',
'SMILIES_LIMIT_EXPLAIN'=> 'Maksimalan dopušten broj smajlića u postovima korisnika/ca [0=neograničeno].',

'TOPICS_PER_PAGE'=> 'Tema po stranici',
));

// Signature Settings
$lang = array_merge($lang, array(
'ACP_SIGNATURE_SETTINGS_EXPLAIN'=> 'Ovdje možeš postaviti sve zadane vrijednosti za potpise.',

'MAX_SIG_FONT_SIZE'=> 'Maksimalna veličina fonta potpisa',
'MAX_SIG_FONT_SIZE_EXPLAIN'=> 'Maksimalna dopuštena veličina fonta u potpisima korisnika/ca [0=neograničeno].',
'MAX_SIG_IMG_HEIGHT'=> 'Maksimalna visina slike potpisa',
'MAX_SIG_IMG_HEIGHT_EXPLAIN'=> 'Maksimalna dopuštena visina slike/flash datoteke u potpisima korisnika/ca [0=neograničeno].',
'MAX_SIG_IMG_WIDTH'=> 'Maksimalna širina slike potpisa',
'MAX_SIG_IMG_WIDTH_EXPLAIN'=> 'Maksimalna dopuštena širina slike/flash datoteke u potpisima korisnika/ca [0=neograničeno].',
'MAX_SIG_LENGTH'=> 'Maksimalna dužina potpisa',
'MAX_SIG_LENGTH_EXPLAIN'=> 'Maksimalan dopušten broj znakova u potpisima korisnika/ca.',
'MAX_SIG_SMILIES'=> 'Maksimalno smajlića po potpisu',
'MAX_SIG_SMILIES_EXPLAIN'=> 'Maksimalan dopušten broj smajlića u potpisima korisnika/ca [0=neograničeno].',
'MAX_SIG_URLS'=> 'Maksimalno linkova po potpisu',
'MAX_SIG_URLS_EXPLAIN'=> 'Maksimalan dopušten broj linkova u potpisima korisnika/ca [0=neograničeno].',
));

// Registration Settings
$lang = array_merge($lang, array(
'ACP_REGISTER_SETTINGS_EXPLAIN'=> 'Ovdje možeš definirati stavke registracije te postaviti vrijednosti vezane uz korisničke profile.',
'ACC_ACTIVATION'=> 'Aktivacija korisničkih računa',
'ACC_ACTIVATION_EXPLAIN'=> 'Način aktivacije korisničkog računa [automatsko (/), administrator/ica ili korisnik/ca] odnosno onemogućavanje registracije uopće [onemogućeno].',
'ACC_ADMIN'=> 'Administrator/ica',
'ACC_DISABLE'=> 'Onemogućeno',
'ACC_NONE'=> '/',
'ACC_USER'=> 'Korisnik/ca',
//'ACC_USER_ADMIN'=> 'User + Admin',
'ALLOW_EMAIL_REUSE'=> 'Omogući višestruku uporabu iste e-mail adrese',
'ALLOW_EMAIL_REUSE_EXPLAIN'=> 'Dopušta kreiranje više korisničkih računa uporabom iste e-mail adrese.',

'COPPA'=> 'COPPA',
'COPPA_FAX'=> 'COPPA broj faksa',
'COPPA_MAIL'=> 'COPPA poštanska adresa',
'COPPA_MAIL_EXPLAIN'=> 'Poštanska adresa na koju roditelji/staratelji mogu poslati COPPA registracijski formular.',

'ENABLE_COPPA'=> 'Omogući COPPA-u',
'ENABLE_COPPA_EXPLAIN'=> 'Zahtijeva, prilikom registracije, od osobe da se izjasni da li je starija/mlađa/ima 13 godina.<br /> COPPA [Child Online Privacy and Protection Act] je pravno pravilo, Sjedinjenih Američkih Država, doneseno 1998. godine, koje nalaže odobrenje od strane roditelja/staratelja za prikupljanje osobnih podataka [od] osoba mlađih od 13 godina.<br />Ukoliko je opcija onemogućena, COOPA korisnička grupa neće biti prikaz(iv)ana na forumu.',

'MAX_CHARS'=> 'Maksimalno',
'MIN_CHARS'=> 'Minimalno',

'NO_AUTH_PLUGIN'=> 'Nije pronađen odgovarajući auth plugin.',

'PASSWORD_LENGTH'=> 'Dužina zaporke',
'PASSWORD_LENGTH_EXPLAIN'=> 'Minimalan i maksimalan broj znakova u zaporkama.',

'REG_LIMIT'=> 'Pokušaja registriranja',
'REG_LIMIT_EXPLAIN'=> 'Maksimalan dopušten broj pokušaja registriranja, nakon kojeg je osobi, određen vremenski period, onemogućeno registriranje.',

'USERNAME_ALPHA_ONLY'=> 'Alfanumerički znakovi',
'USERNAME_ALPHA_SPACERS'=> 'Alfanumerički znakovi i razmaknice',
'USERNAME_ASCII'=> 'ASCII (ne internacionalan unicode)',
'USERNAME_LETTER_NUM'=> 'Bilo koje slovo/broj',
'USERNAME_LETTER_NUM_SPACERS'=> 'Bilo koje slovo/broj/razmaknica',
'USERNAME_CHARS'=> 'Ograničenje znakova korisničkog imena',
'USERNAME_CHARS_ANY'=> 'Bilo koji znak',
'USERNAME_CHARS_EXPLAIN'=> 'Ograničava vrstu znakova koji mogu biti korišteni u korisničkim imenima.<br />Razmaknice su: razmak, -, +, _, [ i ].',
'USERNAME_LENGTH'=> 'Dužina korisničkog imena',
'USERNAME_LENGTH_EXPLAIN'=> 'Minimalan i maksimalan broj znakova u korisničkim imenima.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
'ACP_VC_SETTINGS_EXPLAIN'=> 'Ovdje možeš postaviti zadane vrijednosti za vizualnu potvrdu te definirati CAPTCHA postavke.',

'CAPTCHA_GD'=> 'GD CAPTCHA',
'CAPTCHA_GD_FOREGROUND_NOISE'=> 'GD CAPTCHA prednjoplanske “smetnje”',
'CAPTCHA_GD_EXPLAIN'=> 'Koristi GD za napredniju CAPTCHA-u.',
'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'=> 'Koristi “smetnje” za “težu” [teže “pročitati”] GD baziranu CAPTCHA-u.',
'CAPTCHA_GD_X_GRID'=> 'GD CAPTCHA pozadinske “smetnje” x-osi',
'CAPTCHA_GD_X_GRID_EXPLAIN'=> 'Niža vrijednost daje “težu” [teže “čitljivu”] GD baziranu CAPTCHA-u.<br />Za onemogućavanje, vrijednost postavi na 0.',
'CAPTCHA_GD_Y_GRID'=> 'GD CAPTCHA pozadinske “smetnje” y-osi',
'CAPTCHA_GD_Y_GRID_EXPLAIN'=> 'Niža vrijednost daje “težu” [teže “čitljivu”] GD baziranu CAPTCHA-u.<br />Za onemogućavanje, vrijednost postavi na 0.',
'CAPTCHA_PREVIEW_MSG'=> 'Promjene postavki vizualne potvrde nisu spremljene. Ovo je samo prikaz.',
'CAPTCHA_PREVIEW_EXPLAIN'=> 'CAPTCHA (će) otprilike ovako izgleda(ti).<br />Za ponovno učita(va)nje “slike”, klikni na gumb <em>Prikaz</em>.<br />Slika nastaje/se mijenja slučajnim odabirom i svaki put će biti/izgledati druga/drugačije.',

'VISUAL_CONFIRM_POST'=> 'Omogući vizualnu potvrdu za goste',
'VISUAL_CONFIRM_POST_EXPLAIN'=> 'Zahtjeva od anonimnih korisnika/ca unos slučajno odabranog koda [vidljivog na slici] kako bi se spriječilo masovno postanje.',
'VISUAL_CONFIRM_REG'=> 'Omogući vizualnu potvrdu za registrirane korisnike/ce',
'VISUAL_CONFIRM_REG_EXPLAIN'=> 'Zahtjeva od novo-registriranih korisnika/ca unos slučajno odabranog koda [vidljivog na slici] kako bi se spriječilo masovno postanje',
));

// Cookie Settings
$lang = array_merge($lang, array(
'ACP_COOKIE_SETTINGS_EXPLAIN'=> 'Ovdje možeš postaviti vrijednosti kolačića.<br />U većini slučajeva, zadane vrijednosti bi trebale biti dostatne.<br />Ukoliko, ipak, nešto moraš promijeniti/urediti, učini to (vrlo) pažljivo kako se ne bi dogodilo da se korisnici/ce ne mogu loginirati i sl.',

'COOKIE_DOMAIN'=> 'Domena kolačića',
'COOKIE_NAME'=> 'Naziv kolačića',
'COOKIE_PATH'=> 'Putanja kolačića',
'COOKIE_SECURE'=> 'Sigurnost kolačića',
'COOKIE_SECURE_EXPLAIN'=> 'Ukoliko server radi preko SSL-a, omogući ovo, u protivnom nemoj.<br />Ukoliko server ne radi preko SSL-a, a opcija je omogućena, preusmjeravanja će rezultirati greškama.',

'ONLINE_LENGTH'=> 'Aktivnost korisnika/ca',
'ONLINE_LENGTH_EXPLAIN'=> 'Broj minuta neaktivnosti korisnika/ce nakon kojeg će biti izbrisan/a s liste online korisnika/ca.<br />Što je veća vrijednost, to će duže trajati obrada podataka za generiranje liste.',

'SESSION_LENGTH'=> 'Vremensko trajanje sesija',
'SESSION_LENGTH_EXPLAIN'=> 'Sesija će isteći nakon, u sekundama, određenog vremena.',
));

// Load Settings
$lang = array_merge($lang, array(
'ACP_LOAD_SETTINGS_EXPLAIN'=> 'Ovdje možeš omogućiti/onemogućiti određene karakteristike/mogućnosti/funkcije.<br />Na većini servera nema potrebe za onemogućavanjem neke od funkcija, no, na nekim sustavima odnosno serverima koje dijeli velik broj korisnika/ca, ne bi bilo zgorega onemogućiti nepotrebne funkcije. Također je neloše odrediti ograničenja nakon dosegnuća kojih bi forum trebao “otići” offline.',

'CUSTOM_PROFILE_FIELDS'=> 'Prilagođena korisnička polja',

'LIMIT_LOAD'=> 'Ograničavanje opterećenja sustava',
'LIMIT_LOAD_EXPLAIN'=> 'Ukoliko prosječno jednominutno opterećenje sustava premaši postavljenu vrijednost, forum će automatski otići offline.<br />Vrijednost od 1.0 jednaka je ~100% iskorištenju (jednog) procesora. Ovo funkcionira samo na UNIX serverima odnosno serverima na kojima su te informacije dostupne.<br />Vrijednost se sama vraća na 0 ukoliko nije bilo moguće utvrditi gornje ograničenje opterećenja.',
'LIMIT_SESSIONS'=> 'Ograničavanje sesija',
'LIMIT_SESSIONS_EXPLAIN'=> 'Ukoliko broj sesija premaši postavljenu vrijednost, forum će automatski, u roku minute, otići offline [0=neograničeno].<br />',
'LOAD_CPF_MEMBERLIST'=> 'Dopusti stilovima prikazivanje prilagođenih korisnička polja na popisu Članstva',
'LOAD_CPF_VIEWPROFILE'=> 'Prikaži prilagođena korisnička polja u korisničkim profilima',
'LOAD_CPF_VIEWTOPIC'=> 'Prikaži prilagođena korisnička polja na stranicama tema',
'LOAD_USER_ACTIVITY'=> 'Prikaži aktivnost korisnika/ca',
'LOAD_USER_ACTIVITY_EXPLAIN'=> 'Prikazuje aktivnost, na tematskim forumima/temama, u korisničkim profilima te <em>Profilu/Postavkama</em>.<br />Preporučeno je onemogućiti ovu opciju na forumima s više od milion postova.',

'RECOMPILE_STYLES'=> 'Rekompajliranje komponenti stila',
'RECOMPILE_STYLES_EXPLAIN'=> 'Provjeri ažuriranja komponenti stila i rekompajliraj.',

'YES_ANON_READ_MARKING'=> 'Omogući gostima označavanje tema',
'YES_ANON_READ_MARKING_EXPLAIN'=> 'Sprema informacije o (ne)pročitanim forumima/temama/postovima gostiju.<br />Ukoliko je onemogućeno, gostima su svi postovi označeni kao pročitani.',
'YES_BIRTHDAYS'=> 'Omogući izlistavanje rođendana',
'YES_BIRTHDAYS_EXPLAIN'=> 'Ukoliko je izlistavanje rođendana onemogućeno, lista rođendana neće biti prikazana.<br />Da bi izlistavanje rođendana moglo biti omogućeno, moraju biti dopušteni rođendani [<em>Mogućnosti foruma</em>].',
'YES_JUMPBOX'=> 'Omogući prikaz Forum(o)Bira',
'YES_MODERATORS'=> 'Omogući prikaz moderatora/ica',
'YES_ONLINE'=> 'Omogući online izlistavanje korisnika/ca',
'YES_ONLINE_EXPLAIN'=> 'Prikazuje online korisničke informacije na početnoj, foruma i tema stranicama.',
'YES_ONLINE_GUESTS'=> 'Omogući online izlistavanje gostiju',
'YES_ONLINE_GUESTS_EXPLAIN'=> 'Prikazuje informacije o gostima na online stranici.',
'YES_ONLINE_TRACK'=> 'Omogući prikaz online/offline statusa korisnika/ca',
'YES_ONLINE_TRACK_EXPLAIN'=> 'Prikazuje online korisničke informacije u profilu i na stranicama tema.',
'YES_POST_MARKING'=> 'Omogući potočkane teme',
'YES_POST_MARKING_EXPLAIN'=> 'Označavanjem ikone teme točkicom, [odnosno, ovisno o stilu, nekim drugim znakom], korisniku se daje na znanje da je u tako označenoj temi postao/la najmanje jedan post.',
'YES_READ_MARKING'=> 'Omogući serversko označavanje tema',
'YES_READ_MARKING_EXPLAIN'=> 'Sprema informacije o (ne)pročitanim forumima/temama/postovima u bazu umjesto (u) kolačiće.',
));

// Auth settings
$lang = array_merge($lang, array(
'ACP_AUTH_SETTINGS_EXPLAIN'=> 'phpBB podržava provjeru autentičnosti pluginovima i modulima.<br />Zadano, tri su plugina omogućena: DB, LDAP i Apache.<br />S obzirom da ne traže sve metode dodatne informacije, ispuni samo ona polja koja su neophodna za određenu metodu.',
'AUTH_METHOD'=> 'Izaberi metodu provjere autentičnosti',
'APACHE_SETUP_BEFORE_USE'=> 'Moraš podesiti apache provjeru autentičnosti prije nego prebaciš phpBB na ovu metodu.<br />Korisničko ime koje koristiš za apache provjeru autentičnosti mora biti isto kao i tvoje phpBB korisničko ime.<br /> Apache provjera autentičnosti može se koristiti samo sa mod_php-om (ne sa CGI verzijom) i onemogućenim safe_mode-om.',

'LDAP_DN'=> 'LDAP base <var>dn</var>',
'LDAP_DN_EXPLAIN'=> 'Ovo je razlikovni naziv.<br />Locira korisničke informacije, npr. <samp>o=My Company, c=US</samp>.',
'LDAP_EMAIL'=> 'LDAP e-mail atribut',
'LDAP_EMAIL_EXPLAIN'=> 'Postavi ovo na ime tvog korisničkog unosa e-mail atributa (ukoliko postoji), a poradi automatskog postavljanja e-mail adresa novih korisnika/ca.<br />Ostavljanje ovog praznim rezultirat će praznom e-mail adresom za korisnike/ce koji se prijave prvi put.',
'LDAP_INCORRECT_USER_PASSWORD'=> 'Spajanje na LDAP server, s određenim korisničkim imenom/zaporkom, nije uspjelo.',
'LDAP_NO_EMAIL'=> 'Određen e-mail atribut ne postoji.',
'LDAP_NO_IDENTITY'=> 'Nije moguće pronaći identitet za prijavljivanje za: %s.',
'LDAP_PASSWORD'=> 'LDAP zaporka',
'LDAP_PASSWORD_EXPLAIN'=> 'Ostavi prazno za anonimno povezivanje ili upiši zaporku za gornjeg/u korisnika/cu.<br />Potrebno za <em>Active Directory Servers</em>.<br /><strong>UPOZORENJE:</strong> zaporka će biti spremljena u bazu kao običan tekst te biti vidljiva svima koji imaju pristup bazi odnosno ovoj konfiguracijskoj stranici.',
'LDAP_PORT' => 'LDAP port servera',
'LDAP_PORT_EXPLAIN' => 'Opcionalno, umjesto zadanog 389 porta, možeš specificirati port koji bi trebao biti korišten za povezivanje s/na LDAP server.',
'LDAP_SERVER'=> 'LDAP ime servera',
'LDAP_SERVER_EXPLAIN'=> 'Ukoliko je u uporabi LDAP, to je ime hosta ili IP adresa LDAP servera.<br />Alternativno možeš specificirati URL, npr. ldap://hostname:port/.',
'LDAP_UID'=> 'LDAP <var>uid</var>',
'LDAP_UID_EXPLAIN'=> 'Ovo je ključ kojim se traži dani identitet za prijavljivanje, npr. <var>uid</var>, <var>sn</var>, itd.',
'LDAP_USER'=> 'LDAP korisnik/ca <var>dn</var>',
'LDAP_USER_EXPLAIN'=> 'Ostavi prazno za anonimno povezivanje.<br />Ukoliko upišeš podatke, phpBB će, prilikom pokušaja loginiranja, koristiti specificiran razlikovni naziv (a) kako bi pronašao ispravno korisničko ime, npr. <samp>uid=Username, ou=MyUnit, o=MyCompany, c=US</samp>.<br />Potrebno za <em>Active Directory Servers</em>.',
'LDAP_USER_FILTER' => 'LDAP korisnički filtar',
'LDAP_USER_FILTER_EXPLAIN' => 'Opcionalno, tražene objekte možeš podrobnije ograničiti dodatnim filtrima.<br />Npr. <samp>objectClass=posixGroup</samp> će rezultirati korištenjem <samp>(&(uid=$username)(objectClass=posixGroup))</samp>.',
));

// Server Settings
$lang = array_merge($lang, array(
'ACP_SERVER_SETTINGS_EXPLAIN'=> 'Ovdje možeš definirati postavke servera i domene.<br />Moraš unijeti sve točne podatke kako e-mailovi ne bi sadržavali netočne informacije.<br />Kod upisivanja domene, obvezno navedi http:// odnosno drugi protokolski uvjet.<br />Broj porta promijeni samo ako si siguran/na da server koristi neki drugačiji broj od uobičajenog, a koji je za većinu servera 80.',

'ENABLE_GZIP'=> 'Omogući GZip kompresiju',
'ENABLE_GZIP_EXPLAIN'=> 'Sadržaj će prije slanja biti komprimiran, što će smanjiti mrežni promet, ali povećati (is)korištenje procesora kako servera tako i klijenta.',

'FORCE_SERVER_VARS'=> 'Forsiraj URL postavke servera',
'FORCE_SERVER_VARS_EXPLAIN'=> 'Ukoliko postaviš na “Da”, ovdje definirane, postavke servera imat će prednost pred automatski određenim vrijednostima.',

'ICONS_PATH'=> 'Putanja spremanja ikona post(ov)a',
'ICONS_PATH_EXPLAIN'=> 'Putanja spremanja ikona post(ov)a u odnosu na phpBB, npr. <samp>images/icons</samp>.',

'PATH_SETTINGS'=> 'Postavke putanje/a',

'RANKS_PATH'=> 'Putanja spremanja ikona statusa',
'RANKS_PATH_EXPLAIN'=> 'Putanja spremanja ikona statusa u odnosu na phpBB, npr. <samp>images/ranks</samp>.',

'SCRIPT_PATH'=> 'Putanja skripte',
'SCRIPT_PATH_EXPLAIN'=> 'Putanja smještaja phpBB-a u odnosu na naziv domene, npr. <samp>/phpBB3</samp>.',
'SERVER_NAME'=> 'Naziv domene',
'SERVER_NAME_EXPLAIN'=> 'Naziv domene na kojoj se nalazi phpBB, npr. <samp>www.foo.bar</samp>.',
'SERVER_PORT'=> 'Port servera',
'SERVER_PORT_EXPLAIN'=> 'Port na kojemu radi server, obično 80 [promijeni samo ako je drugi].',
'SERVER_PROTOCOL'=> 'Protokol servera',
'SERVER_PROTOCOL_EXPLAIN'=> 'Ovo se koristi kao protokol servera ako su postavke forsirane.<br />Ukoliko postavke nisu forsirane odnosno nije unesena vrijednost, protokol se određuje putem sigurnosnih postavki kolačića, npr. <samp>http://</samp> ili <samp>https://</samp>.',
'SERVER_URL_SETTINGS'=> 'URL postavke servera',
'SMILIES_PATH'=> 'Putanja spremanja smajlića',
'SMILIES_PATH_EXPLAIN'=> 'Putanja spremanja smajlića u odnosu na phpBB, npr. <samp>images/smilies</samp>.',

'UPLOAD_ICONS_PATH'=> 'Putanja spremanja ikona grupa ekstenzija',
'UPLOAD_ICONS_PATH_EXPLAIN'=> 'Putanja spremanja ikona grupa ekstenzija u odnosu na phpBB, npr. <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
'ACP_SECURITY_SETTINGS_EXPLAIN'=> 'Ovdje možeš definirati sesije i postavke vezane uz prijavljivanje.',
'ALL'=> 'Sve',
'ALLOW_AUTOLOGIN'=> 'Omogući stalno prijavljivanje', 
'ALLOW_AUTOLOGIN_EXPLAIN'=> 'Omogućuje automatsko prijavljivanje prilikom dolaska na forum.', 
'AUTOLOGIN_LENGTH'=> 'Dužina trajanja [u danima] ključa za automatsko prijavljivanje', 
'AUTOLOGIN_LENGTH_EXPLAIN'=> 'Broj dana nakon kojih će ključ za automatsko prijavljivanje biti izbrisan.<br />Za onemogućavanje izbrisivanja ključa za automatsko prijavljivanje, vrijednost postavi na 0.',

'BROWSER_VALID'=> 'Provjera preglednika',
'BROWSER_VALID_EXPLAIN'=> 'Omogućava provjeru preglednika za svaku sesiju, što povećava sigurnost.',

'CHECK_DNSBL'=> 'Provjera IP adrese u odnosu na DNS crnu listu',
'CHECK_DNSBL_EXPLAIN'=> 'Ukoliko je omogućena, IP adresa korisnika/ce bit će provjerena, za registracije i postanja, DNSBL serevisima: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> i <a href="http://www.spamhaus.org">spamhaus.org</a>.<br />Ovisno o konfiguraciji servera, ova provjera može potrajati. Ukoliko uočiš konstantno preveliko usporenje odnosno prevelik broj lažnih negativnih rezultata, onemogući ovu provjeru.',
'CLASS_B'=> 'A.B',
'CLASS_C'=> 'A.B.C',

'EMAIL_CHECK_MX'=> 'Provjeri ima li domena e-mail adrese valjan MX zapis',
'EMAIL_CHECK_MX_EXPLAIN'=> 'Ukoliko je omogućeno, domena e-mail adrese, unesene prilikom registracije, bit će provjerena ima li valjan MX zapis.',

'FORCE_PASS_CHANGE'=> 'Prisilna promjena zaporke',
'FORCE_PASS_CHANGE_EXPLAIN'=> 'Zahtijeva od korisnika/ce da, nakon postavljenog broja dana, promijeni zaporku.<br />Za onemogućavanje prisilne promjene zaporke, vrijednost postavi na 0.',
'FORWARDED_FOR_VALID'=> 'Provjera <var>X_FORWARDED_FOR</var> zaglavlja',
'FORWARDED_FOR_VALID_EXPLAIN'=> 'Sesija će biti nastavljena samo ako je poslano <var>X_FORWARDED_FOR</var> zaglavlje jednako onome poslanom s prethodnim zahtjevom. (I) Isključenja će biti provjerena u odnosu na IP adrese u <var>X_FORWARDED_FOR</var>.',

'IP_VALID'=> 'Provjera sesija IP adresa',
'IP_VALID_EXPLAIN'=> 'Utvrđuje što će od korisničkih IP adresa biti korišteno prilikom provjere.<br />Npr. <samp>Sve</samp> uspoređuje kompletnu adresu; <samp>A.B.C</samp> prvih x.x.x; <samp>A.B</samp> prvih x.x; <samp>/</samp> onemogućuje provjeru.<br />Kod IPv6 adresa: <samp>A.B.C</samp> uspoređuje prva 4 bloka, <samp>A.B</samp> prva 3.',

'MAX_LOGIN_ATTEMPTS'=> 'Maksimalan broj pokušaja prijavljivanja',
'MAX_LOGIN_ATTEMPTS_EXPLAIN'=> 'Maksimalan dopušten broj pokušaja prijavljivanja, nakon kojeg  se od korisnika/ce zahtijeva prijavljivanje vizualnom potvrdom.',

'NO_IP_VALIDATION'=> '/',

'PASSWORD_TYPE'=> 'Složenost zaporke',
'PASSWORD_TYPE_EXPLAIN'=> 'Određuje koliko, kod postavljanja i promjene, zaporka mora biti složena.',
'PASS_TYPE_ALPHA'=> 'Mora sadržavati slova i brojke',
'PASS_TYPE_ANY'=> 'Nema zadanih uvjeta',
'PASS_TYPE_CASE'=> 'Mora sadržavati i velika i mala slova',
'PASS_TYPE_SYMBOL'=> 'Mora sadržavati simbole',

'TPL_ALLOW_PHP'=> 'Dopusti PHP u predlošcima',
'TPL_ALLOW_PHP_EXPLAIN'=> 'Ukoliko je omogućeno, <code>PHP</code> i <code>INCLUDEPHP</code> bit će dopušteni u predlošcima.',
));

// Email Settings
$lang = array_merge($lang, array(
'ACP_EMAIL_SETTINGS_EXPLAIN'=> 'Donjim informacija koristi(t) (će) se forum kada (će) (slati) šalje e-mailove korisnicima/ama.<br />Unesi valjanu e-mail adresu jer je će se svi neisporučeni e-mailovi vratiti na nju.<br />Ukoliko host ne podržava PHP bazirano slanje e-mailova, poruke možeš slati direktno putem SMTP-a [ovo zahtijeva adresu servera (ukoliko ne znaš koja je, pitaj pružatelja usluga); ukoliko server zahtijeva provjeru autentičnosti - (i) samo ako zahtijeva - unesi korisničko ime, zaporku i metodu provjere autentičnosti.',
'ADMIN_EMAIL'=> 'Povratna e-mail adresa',
'ADMIN_EMAIL_EXPLAIN'=> 'Ova e-mail adresa bit će korištena kao povratna e-mail adresa na svim e-mailovima [npr. e-mailu tehničke podrške i dr.]. Bit će, uvijek, korištena kao <samp>Return-Path</samp> i <samp>Sender</samp> adresa e-mailova.',

'BOARD_EMAIL_FORM'=> 'Korisnici/e mogu slati e-mailove putem foruma',
'BOARD_EMAIL_FORM_EXPLAIN'=> 'Umjesto prikaza e-mail adrese korisnika/ce, klikom na odgovarajuću naredbu/gumb/sliku, ostali/e korisnici/e (će) mu/joj (moći) mogu poslati e-mail poruku putem foruma, a da pri tome ne vide njegovu/njezinu e-mail adresu.',
'BOARD_HIDE_EMAILS'=> 'Sakrij e-mail adresu',
'BOARD_HIDE_EMAILS_EXPLAIN'=> 'E-mail adresa bit će u potpunosti privatna/skrivena od ostalih korisnika/ca [jasno je, samo po sebi, da će ju (i dalje) moći vidjeti osoblje foruma].',

'CONTACT_EMAIL'=> 'E-mail adresa za kontakt',
'CONTACT_EMAIL_EXPLAIN'=> 'Ova e-mail adresa bit će navedene kao e-mail adresa za kontakt(iranje), npr spam, greške, problemi, pomoć i dr. Bit će, uvijek, korištena kao <samp>From</samp> i <samp>Reply-To</samp> adresa e-mailova.',

'EMAIL_FUNCTION_NAME'=> 'Ime e-mail funkcije',
'EMAIL_FUNCTION_NAME_EXPLAIN'=> 'E-mail funkcija koja se koristi za slanje e-mailova posredstvom PHP-a.',
'EMAIL_PACKAGE_SIZE'=> 'Veličina e-mail paketa',
'EMAIL_PACKAGE_SIZE_EXPLAIN'=> 'Maksimalan broj e-mailova koji će biti poslani u jednom paketu.<br />Ova postavka odnosi se na internu listu čekanja poruka. Ukoliko se pojave problemi ne-dostave poruka, vrijednost treba postaviti na 0.',
'EMAIL_SIG'=> 'E-mail potpis',
'EMAIL_SIG_EXPLAIN'=> 'Ovaj potpis bit će dodan svakoj e-mail poruci koja će biti poslana “u ime” foruma.',
'ENABLE_EMAIL'=> 'Omogući slanje e-mailova putem foruma',
'ENABLE_EMAIL_EXPLAIN'=> 'Ukoliko je onemogućeno, uopće neće biti moguće slati ikakve e-mailove “u ime”/s foruma.',

'SMTP_AUTH_METHOD'=> 'Metoda provjere autentičnosti za SMTP',
'SMTP_AUTH_METHOD_EXPLAIN'=> 'Koristi se samo ako su korisničko ime i zaporka postavljeni.<br />Ukoliko nisi siguran/na  koju metodu koristiti, pitaj davatelja usluga.',
'SMTP_CRAM_MD5'=> 'CRAM-MD5',
'SMTP_DIGEST_MD5'=> 'DIGEST-MD5',
'SMTP_LOGIN'=> 'LOGIN',
'SMTP_PASSWORD'=> 'SMTP zaporka',
'SMTP_PASSWORD_EXPLAIN'=> 'Zaporku unesi samo ukoliko to SMTP server zahtijeva.',
'SMTP_PLAIN'=> 'PLAIN',
'SMTP_POP_BEFORE_SMTP'=> 'POP-BEFORE-SMTP',
'SMTP_PORT'=> 'Port SMTP servera',
'SMTP_PORT_EXPLAIN'=> 'Promijeni samo ukoliko si siguran/na da (tvoj) SMTP server koristi drugi port.',
'SMTP_SERVER'=> 'Adresa SMTP servera',
'SMTP_SETTINGS'=> 'SMTP postavke',
'SMTP_USERNAME'=> 'SMTP korisničko ime',
'SMTP_USERNAME_EXPLAIN'=> 'Korisničko ime unesi samo ukoliko to SMTP server zahtijeva.',

'USE_SMTP'=> 'Koristi SMTP server za e-mail',
'USE_SMTP_EXPLAIN'=> 'Izaberi “Da” samo ukoliko želiš/moraš slati e-mail poruke putem imenovanog servera umjesto lokalne e-mail funkcije.',
));

// Jabber settings
$lang = array_merge($lang, array(
'ACP_JABBER_SETTINGS_EXPLAIN'=> 'Ovdje možeš omogućiti i kontrolirati uporabu Jabbera [(za) poruke i obavijesti].<br />Jabber je open source protocol [softver kojega je izvorni kod javno dostupan i (koji je) besplatan] dostupan/dan za/na uporabu/korištenje bilo kome.<br />Neki Jabber serveri dopuštanju kontaktiranje s korisnicima/ama (koji su) na drugim mrežama, no ne svi tako da neke opcije/mogućnosti možda neće raditi.<br />Unesi detalje već postojećeg korisničkog računa.',

'ERR_JAB_AUTH'=> 'Nije uspjela autorizacija sa/na Jabber server.',
'ERR_JAB_CONNECT'=> 'Nije uspjelo spajanje sa/na Jabber server.',

'JAB_ENABLE'=> 'Omogući Jabber',
'JAB_ENABLE_EXPLAIN'=> 'Omogućuje uporabu Jabber poruka i obavijesti.',
'JAB_PACKAGE_SIZE'=> 'Veličina Jabber paketa',
'JAB_PACKAGE_SIZE_EXPLAIN'=> 'Broj poruka koje će biti poslane u jednom paketu.<br />Ukoliko je postavljeno na 0, poruka neće završiti na čekanju [za (kasnije) slanje] već će biti poslana odmah.',
'JAB_PASSWORD'=> 'Jabber zaporka',
'JAB_PORT'=> 'Jabber port',
'JAB_PORT_EXPLAIN'=> 'Ostavi prazno osim ako si siguran/na da nije port 5222.',
'JAB_REGISTERED'=> 'Novi korisnički račun je registriran.',
'JAB_RESOURCE'=> 'Jabber izvor',
'JAB_RESOURCE_EXPLAIN'=> 'Locira (svaku, pojedinu) vezu, npr. forum itd.',
'JAB_SERVER'=> 'Jabber server',
'JAB_SERVER_EXPLAIN'=> 'Za listu servera, baci pogled na: %sjabber.org%s.',
'JAB_SETTINGS_CHANGED'=> 'Jabber postavke su promijenjene.',
'JAB_USE_SSL' => 'Koristi SSL za povezivanje',
'JAB_USE_SSL_EXPLAIN' => 'Ukoliko je omogućeno, bit će pokušano uspostavljanje sigurne veze. Jabber port bit će promijenjen u 5223 ukoliko je postavljen na 5222.',
'JAB_USERNAME'=> 'Jabber korisničko ime',
'JAB_USERNAME_EXPLAIN'=> 'Unesi postojeće korisničko ime [provjera valjanosti korisničkog imena neće biti izvršena].',
));
?>