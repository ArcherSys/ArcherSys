<?php
/** 
*
* acp_styles [Croatian]
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
'ACP_IMAGESETS_EXPLAIN'=> 'Set slika obuhvaća sve gumbe [forumske/mapne/itd.] i ne-stilske specifične slike koje koristi forum.<br />Ovdje možeš uređivati/izbrisat/eksportirati postojeće te importirati/aktivirati nove setove slika.',
'ACP_STYLES_EXPLAIN'=> 'Ovdje možeš upravljati dostupnim stilovima.<br />Stil se sastoji od predloška, teme i seta slika.<br />Možeš mijenjati/izbrisati/aktivirati/deaktivirati postojeće stilove te kreirati/importirati nove.<br />Korištenjem funkcije prikaza stil(ov)a, možeš vidjeti kako stil(ovi) izgleda(ju).<br />Zadani stil označen je zvjezdicom (*).<br />Izlistan je (i) broj korisnika/ca koji/e koriste pojedini stil s time da nije naznačeno radi li se o prisilno prepisanom stilu [<em>Onemogući korisnički stil</em>] već je prikazano onako kako su korisnici/e izabrali/e u svom korisničkom profilu.',
'ACP_TEMPLATES_EXPLAIN'=> 'Set predloška sadrži sve stavke kojima se generira izgled foruma.<br /> Ovdje možeš mijenjati/izbrisati/eksportirati/importirat/pregledavati setove predloška.<br />Također možeš mijenjati kod predloška korišten za generiranje BBKoda.',
'ACP_THEMES_EXPLAIN'=> 'Ovdje možeš kreirati/instalirati/uređivati/izbrisati/eksportirati teme.<br />Tema je kombinacija boja i slika koje, primijenjene na predložak, daju osnovni izgled foruma.<br />Opseg dostupnih opcija ovisi o konfiguraciji servera i phpBB instalaciji [za detalje pročitaj upute].<br />Kod kreiranja nove teme, korištenje stare teme, kao bazne osnove, je opcionalno.',
'ADD_IMAGESET'=> 'Kreiraj set slika',
'ADD_IMAGESET_EXPLAIN'=> 'Ovdje možeš kreirati novi set slika.<br />Ovisno o konfiguraciji servera i dopuštenjima datoteka, možda ćeš na raspolaganju imati (neke) dodatne opcije. Npr. možda ćeš moći bazirati novi set slika na već postojećem; možda ćeš moći uploadati/importirati [iz mape za pohranjivanje] arhivu seta slika [ukoliko uploadiraš/importiraš arhivu, ime seta slika može opcionalno biti preuzeto od imena arhive (ukoliko to želiš, ostavi(š) ime seta slika prazno)] itd.',
'ADD_STYLE'=> 'Kreiraj stil',
'ADD_STYLE_EXPLAIN'=> 'Ovdje možeš kreirati novi stil.<br />Ovisno o konfiguraciji servera i dopuštenjima datoteka, možda ćeš na raspolaganju imati (neke) dodatne opcije. Npr. možda ćeš moći bazirati novi stil na već postojećem; možda ćeš moći uploadati/importirati [iz mape za pohranjivanje] arhivu stila [ukoliko uploadiraš/importiraš arhivu, ime stila bit će određeno automatski] itd.',
'ADD_TEMPLATE'=> 'Kreiraj predložak',
'ADD_TEMPLATE_EXPLAIN'=> 'Ovdje možeš dodati novi set predloška.<br />Ovisno o konfiguraciji servera i dopuštenjima datoteka, možda ćeš na raspolaganju imati (neke) dodatne opcije. Npr. možda ćeš moći bazirati novi set predloška na već postojećem; možda ćeš moći uploadati/importirati [iz mape za pohranjivanje] arhivu predloška [ukoliko uploadiraš/importiraš arhivu, ime predloška može opcionalno biti preuzeto od imena arhive (ukoliko to želiš, ostavi(š) ime predloška prazno)] itd.',
'ADD_THEME'=> 'Kreiraj temu',
'ADD_THEME_EXPLAIN'=> 'Ovdje možeš dodati novu temu.<br />Ovisno o konfiguraciji servera i dopuštenjima datoteka, možda ćeš na raspolaganju imati (neke) dodatne opcije. Npr. možda ćeš moći bazirati novu temu na već postojećoj; možda ćeš moći uploadati/importirati [iz mape za pohranjivanje] arhivu teme [ukoliko uploadiraš/importiraš arhivu, ime teme može opcionalno biti preuzeto od imena arhive (ukoliko to želiš, ostavi(š) ime teme prazno)] itd.',
'ARCHIVE_FORMAT'=> 'Tip arhivske datoteke',
'AUTOMATIC_EXPLAIN' => 'Ostavi praznim za pokušaj automatskog detektiranja.',

'BACKGROUND'=> 'Pozadina',
'BACKGROUND_COLOUR'=> 'Boja pozadine',
'BACKGROUND_IMAGE'=> 'Slika pozadine',
'BACKGROUND_REPEAT'=> 'Ponavljanje pozadine',
'BOLD'=> 'Podebljano',

'CACHE'=> 'Cache',
'CACHE_CACHED'=> 'Cacheirano',
'CACHE_FILENAME'=> 'Datoteka predloška',
'CACHE_FILESIZE'=> 'Veličina datoteke',
'CACHE_MODIFIED'=> 'Izmijenjeno',
'CONFIRM_IMAGESET_REFRESH'=> 'Jesi li siguran/na da želiš osvježiti sve podatke seta slika?<br />Postavke konfiguracije seta slika prepisat će sve izmijene seta slika koje su napravljene uređivačem seta slika.',
'CONFIRM_TEMPLATE_CLEAR_CACHE'=> 'Jesi li siguran/na da želiš izbrisati/isprazniti sve cacheirane verzije datoteka predloška?',
'CONFIRM_TEMPLATE_REFRESH'=> 'Jesi li siguran/na da želiš osvježiti/zamijeniti sve podatke predloška pohranjene u bazi podataka sa sadržajem datoteka predloška u sistemu datoteka?<br />To će prepisati sve izmijene predloška koje su napravljene uređivačem predloška za vrijeme dok je predložak bio pohranjen u bazi podataka.',
'CONFIRM_THEME_REFRESH'=> 'Jesi li siguran/na da želiš osvježiti/zamijeniti sve podatke teme pohranjene u bazi podataka sa sadržajem datoteka teme u sistemu datoteka?<br />To će prepisati sve izmijene teme koje su napravljene uređivačem teme za vrijeme dok je tema bila pohranjena u bazi podataka.',

'COPYRIGHT'=> 'Autorska prava',
'CREATE_IMAGESET'=> 'Kreiraj novi set slika',
'CREATE_STYLE'=> 'Kreiraj novi stil',
'CREATE_TEMPLATE'=> 'Kreiraj novi set predloška',
'CREATE_THEME'=> 'Kreiraj novu temu',
'CURRENT_IMAGE'=> 'Trenutna slika',

'DEACTIVATE_DEFAULT'=> 'Ne možeš deaktivirati zadani stil.',
'DELETE_FROM_FS'=> 'Izbriši iz sistema datoteka',
'DELETE_IMAGESET'=> 'Izbriši set slika',
'DELETE_IMAGESET_EXPLAIN'=> 'Ovdje možeš, označen set slika, izbrisati iz baze.<br />Opcionalno, ukoliko imaš dopuštenja, možeš izbrisati set slika iz sistema datoteka. Imaj na umu da nema povratne [undo] mogućnosti što će reći da je set slika izbrisan bespovratno nakon što ga (jednom) izbrišeš. Ne bi bilo zgorega, prvo ga eksportirati, zbog eventualnog budućeg korištenja.',
'DELETE_STYLE'=> 'Izbriši stil',
'DELETE_STYLE_EXPLAIN'=> 'Ovdje možeš izbrisati označen stil, iz baze.<br />Ne možeš izbrisati sve elemente stila odavde, za to trebaš koristiti za to predviđene forme.<br />Imaj na umu da nema povratne [undo] mogućnosti što će reći da je izbrisano bespovratno nakon što nešto (jednom) izbrišeš. ',
'DELETE_TEMPLATE'=> 'Izbriši predložak',
'DELETE_TEMPLATE_EXPLAIN'=> 'Ovdje možeš, označen set predloška, izbrisati iz baze.<br />Opcionalno, ukoliko imaš dopuštenja, možeš izbrisati set iz sistema datoteka. Imaj na umu da nema povratne [undo] mogućnosti što će reći da je predložak izbrisan bespovratno nakon što ga (jednom) izbrišeš. Ne bi bilo zgorega, prvo ga eksportirati, zbog eventualnog budućeg korištenja.',
'DELETE_THEME'=> 'Izbriši temu',
'DELETE_THEME_EXPLAIN'=> 'Ovdje možeš, označenu temu, izbrisati iz baze.<br />Opcionalno, ukoliko imaš dopuštenja, možeš izbrisati temu iz sistema datoteka. Imaj na umu da nema povratne [undo] mogućnosti što će reći da je tema izbrisana bespovratno nakon što ju (jednom) izbrišeš. Ne bi bilo zgorega, prvo ju eksportirati, zbog eventualnog budućeg korištenja.',
'DETAILS'=> 'Detalji',
'DIMENSIONS_EXPLAIN'=> 'Izabereš li “Da”, bit će uključeni (i) parametri širine/visine.',

'EDIT_DETAILS_IMAGESET'=> 'Uređivanje detalja seta slika',
'EDIT_DETAILS_IMAGESET_EXPLAIN'=> 'Ovdje možeš uređivati određene detalje seta slika poput imena i sl.',
'EDIT_DETAILS_STYLE'=> 'Uređivanje detalja stila',
'EDIT_DETAILS_STYLE_EXPLAIN'=> 'Korištenjem donje forme možeš izmijeniti postojeći stil.<br />Možeš izmijeniti kombinaciju predloška, teme i seta slika koji definiraju sam stil.<br />Također možeš stil postaviti zadanim.',
'EDIT_DETAILS_TEMPLATE'=> 'Uređivanje detalja predloška',
'EDIT_DETAILS_TEMPLATE_EXPLAIN'=> 'Ovdje možeš uređivati određene detalje predloška poput imena i sl.<br />Možda (ćeš) imaš (imati) opciju prebacivanja spremanja stylesheeta iz sistema datoteka u bazu podataka i obrnuto (a) što ovisi o PHP konfiguraciji te o tome može li set predloška biti pre(za)pisivan od strane servera.',
'EDIT_DETAILS_THEME'=> 'Uređivanje detalja teme',
'EDIT_DETAILS_THEME_EXPLAIN'=> 'Ovdje možeš uređivati određene detalje teme poput imena i sl.<br />Možda (ćeš) imaš (imati) opciju prebacivanja spremanja stylesheeta iz sistema datoteka u bazu podataka i obrnuto (a) što ovisi o PHP konfiguraciji te o tome može li stylesheet biti pre(za)pisivan od strane servera.',
'EDIT_IMAGESET'=> 'Uređivanje seta slika',
'EDIT_IMAGESET_EXPLAIN'=> 'Ovdje možeš uređivati individualne slike koje čine set slika.<br />Također možeš unijeti dimenzije slike. Dimenzije su opcionalne, njihovo unošenje može prepisati određene postavke preglednika (a) vezane uz prikazivanje slika. Ne unošenjem dimenzija možeš malčice smanjiti veličinu baze.',
'EDIT_TEMPLATE'=> 'Uređivanje predložka',
'EDIT_TEMPLATE_EXPLAIN'=> 'Ovdje možeš direktno uređivati set predloška.<br />Imaj na umu da su uređenja trajna i ne mogu biti povraćena [undone] nakon slanja.<br />Ukoliko PHP može pre(za)pisivati datoteke predloška u mapi stilova, sve će promjene direktno biti zapisane u (same) datoteke. Ukoliko PHP ne može pre(za)pisivati datoteke, datoteke će biti kopirane u bazu podataka te će (sve) promjene biti odražene samo tamo.<br />Pažljivo uređuj/mijenjaj setove predloška te zapamti zatvoriti sve mijenjajuće varijabilne uvjete {XXXX} kao i ostale stavke.',
'EDIT_TEMPLATE_STORED_DB'=> 'Datoteka predloška je (bila) nepre(za)pisljiva poradi čega je set predloška pohranjen u bazu podataka tako da sadržava izmijenjenu datoteku.',
'EDIT_THEME'=> 'Uređivanje teme',
'EDIT_THEME_EXPLAIN'=> 'Ovdje možeš uređivati teme mijenjajući im boje, slike itd.',
'EDIT_THEME_STORED_DB'=> 'Stylesheet datoteka je (bila) nepre(za)pisljiva pa je pohranjena, sadržavajući izmjene, u bazu podataka.',
'EDIT_THEME_STORE_PARSED'=> 'Tema zahtjeva parsiranje stylesheeta (a) što je moguće samo ukoliko je pohranjen u bazi.',
'EXPORT'=> 'Eksportiraj',

'FOREGROUND'=> 'Prednji plan',
'FONT_COLOUR'=> 'Boja fonta',
'FONT_FACE'=> 'Ime fonta',
'FONT_FACE_EXPLAIN'=> 'Možeš navesti više fontova, odvojivši ih zarezom.<br />Ukoliko korisnik/ca nema prvi font s popisa instaliran, sljedeći (koji ima instaliran) će biti odabran.',
'FONT_SIZE'=> 'Veličina fonta',

'GLOBAL_IMAGES'=> 'Globalno',

'HIDE_CSS'=> 'Sakrij raw CSS',

'IMAGE_WIDTH'=> 'Širina slike',
'IMAGE_HEIGHT'=> 'Visina slike',
'IMAGE'=> 'Slika',
'IMAGE_NAME'=> 'Ime slike',
'IMAGE_PARAMETER'=> 'Parametar',
'IMAGE_VALUE'=> 'Vrijednost',
'IMAGESET_ADDED'=> 'Dodan je novi set slika u sistem datoteka.',
'IMAGESET_ADDED_DB'=> 'Dodan je novi set slika u bazu podataka.',
'IMAGESET_DELETED'=> 'Set slika je izbrisan.',
'IMAGESET_DELETED_FS'=> 'Set slika je izbrisan iz baze podataka, no, postoji mogućnost da su neke slike ostale u sistemu datoteka.',
'IMAGESET_DETAILS_UPDATED'=> 'Set slika je ažuriran.',
'IMAGESET_ERR_ARCHIVE'=> 'Izaberi metodu arhiviranja.',
'IMAGESET_ERR_COPY_LONG'=> 'Autorska prava ne mogu biti duža od 60 znakova.',
'IMAGESET_ERR_NAME_CHARS'=> 'Ime seta slika može sadržavati samo alfanumeričke znakove, -, +, _ i razmak.',
'IMAGESET_ERR_NAME_EXIST'=> 'Set slika s (pod) tim imenom već postoji.',
'IMAGESET_ERR_NAME_LONG'=> 'Ime seta slika ne može biti duže od 30 znakova.',
'IMAGESET_ERR_NOT_IMAGESET'=> 'Arhiva koju si unio/la ne sadrži valjan set slika.',
'IMAGESET_ERR_STYLE_NAME'=> 'Moraš unijeti ime za (ovaj) set slika.',
'IMAGESET_EXPORT'=> 'Eksportiraj set slika.',
'IMAGESET_EXPORT_EXPLAIN'=> 'Ovdje možeš eksportirati set slika u arhivski oblik. Arhiva će sadržavati sve podatke potrebne za instalaciju seta slika na drugi forum. Možeš izabrati da li ćeš datoteku preuzeti direktno ili ju pohraniti u mapu za pohranu podataka za kasnije preuzimanje odnosno preuzimanje FTP-om.',
'IMAGESET_EXPORTED'=> 'Set slika je eksportiran i pohranjen u %s.',
'IMAGESET_NAME'=> 'Ime seta slika',
'IMAGESET_REFRESHED'=> 'Set slika je osvježen.',
'IMAGESET_UPDATED'=> 'Set slika je ažuriran.',
'ITALIC'=> 'Nakošenje',

'IMG_CAT_BUTTONS'=> 'Lokalizirani gumbi',
'IMG_CAT_CUSTOM'=> 'Prilagođene slike',
'IMG_CAT_FOLDERS'=> 'Ikone tema',
'IMG_CAT_FORUMS'=> 'Ikone foruma',
'IMG_CAT_ICONS'=> 'Opće ikone',
'IMG_CAT_LOGOS'=> 'Logoi',
'IMG_CAT_POLLS'=> 'Slike anketa',
'IMG_CAT_UI'=> 'Opći elementi sučelja korisnika/ca',
'IMG_CAT_USER'=> 'Opcionalne/dodatne slike',

'IMG_SITE_LOGO'=> 'Glavni logo',
'IMG_UPLOAD_BAR'=> 'Postotakmjer upload(iranj)a',
'IMG_POLL_LEFT'=> 'Lijevi kraj ankete',
'IMG_POLL_CENTER'=> 'Centar ankete',
'IMG_POLL_RIGHT'=> 'Desni kraj ankete',
'IMG_ICON_FRIEND'=> 'Dodaj (kao) prijatelja/icu',
'IMG_ICON_FOE'=> 'Dodaj (kao) gnjavatora/icu',

'IMG_FORUM_LINK'=> 'Forum - link',
'IMG_FORUM_READ'=> 'Forum',
'IMG_FORUM_READ_LOCKED'=> 'Forum - zaključano',
'IMG_FORUM_READ_SUBFORUM'=> 'Podforum',
'IMG_FORUM_UNREAD'=> 'Forum - novi postovi',
'IMG_FORUM_UNREAD_LOCKED'=> 'Forum - novi postovi - zaključano',
'IMG_FORUM_UNREAD_SUBFORUM'=> 'Podforum - novi postovi',
'IMG_SUBFORUM_READ'=> 'Legenda - podforum',
'IMG_SUBFORUM_UNREAD'=> 'Legenda - podforum - novi postovi',

'IMG_TOPIC_MOVED'=> 'Premještena tema',

'IMG_TOPIC_READ'=> 'Tema',
'IMG_TOPIC_READ_MINE'=> 'Tema - postano u',
'IMG_TOPIC_READ_HOT'=> 'Popularna tema',
'IMG_TOPIC_READ_HOT_MINE'=> 'Popularna tema - postano u',
'IMG_TOPIC_READ_LOCKED'=> 'Zaključana tema',
'IMG_TOPIC_READ_LOCKED_MINE'=> 'Zaključana tema - postano u',

'IMG_TOPIC_UNREAD'=> 'Tema - novi postovi',
'IMG_TOPIC_UNREAD_MINE'=> 'Tema - postano u novu',
'IMG_TOPIC_UNREAD_HOT'=> 'Popularna tema - novi postovi',
'IMG_TOPIC_UNREAD_HOT_MINE'=> 'Popularna tema - postano u novu',
'IMG_TOPIC_UNREAD_LOCKED'=> 'Zaključana tema - nova',
'IMG_TOPIC_UNREAD_LOCKED_MINE'=> 'Zaključana tema - postano u novu',

'IMG_STICKY_READ'=> '“Važno”',
'IMG_STICKY_READ_MINE'=> '“Važno” - postano u',
'IMG_STICKY_READ_LOCKED'=> '“Važno” - zaključana',
'IMG_STICKY_READ_LOCKED_MINE'=> '“Važno” - zaključana - postano u',
'IMG_STICKY_UNREAD'=> '“Važno” - novi postovi',
'IMG_STICKY_UNREAD_MINE'=> '“Važno” - postano u novu',
'IMG_STICKY_UNREAD_LOCKED'=> '“Važno” - zaključana - novi postovi',
'IMG_STICKY_UNREAD_LOCKED_MINE'=> '“Važno” - zaključana - postano u novu',

'IMG_ANNOUNCE_READ'=> 'Obavijest',
'IMG_ANNOUNCE_READ_MINE'=> 'Obavijest - postano u',
'IMG_ANNOUNCE_READ_LOCKED'=> 'Obavijest - zaključana',
'IMG_ANNOUNCE_READ_LOCKED_MINE'=> 'Obavijest - zaključano - postano u',
'IMG_ANNOUNCE_UNREAD'=> 'Obavijest - novi postovi',
'IMG_ANNOUNCE_UNREAD_MINE'=> 'Obavijest - postano u novu',
'IMG_ANNOUNCE_UNREAD_LOCKED'=> 'Obavijest - zaključana - novi postovi',
'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'=> 'Obavijest - zaključana - postano u novu',

'IMG_GLOBAL_READ'=> 'Globalna',
'IMG_GLOBAL_READ_MINE'=> 'Globalna - postano u',
'IMG_GLOBAL_READ_LOCKED'=> 'Globalna - zaključana',
'IMG_GLOBAL_READ_LOCKED_MINE'=> 'Globalna - zaključano - postano u',
'IMG_GLOBAL_UNREAD'=> 'Globalna - novi postovi',
'IMG_GLOBAL_UNREAD_MINE'=> 'Globalna - postano u novu',
'IMG_GLOBAL_UNREAD_LOCKED'=> 'Globalna - zaključana - novi postovi',
'IMG_GLOBAL_UNREAD_LOCKED_MINE'=> 'Globalna - zaključana - postano u novu',

'IMG_PM_READ'=> 'Pročitane privatne poruke',
'IMG_PM_UNREAD'=> 'Nepročitane privatne poruke',

'IMG_ICON_BACK_TOP'=> 'Vrh',

'IMG_ICON_CONTACT_AIM'=> 'AIM',
'IMG_ICON_CONTACT_EMAIL'=> 'Pošalji e-mail',
'IMG_ICON_CONTACT_ICQ'=> 'ICQ',
'IMG_ICON_CONTACT_JABBER'=> 'Jabber',
'IMG_ICON_CONTACT_MSNM'=> 'MSNM',
'IMG_ICON_CONTACT_PM'=> 'Pošalji poruku',
'IMG_ICON_CONTACT_YAHOO'=> 'YIM',
'IMG_ICON_CONTACT_WWW'=> 'Web stranica',

'IMG_ICON_POST_DELETE'=> 'Izbriši post',
'IMG_ICON_POST_EDIT'=> 'Uredi post',
'IMG_ICON_POST_INFO'=> 'Prikaži detalje posta',
'IMG_ICON_POST_QUOTE'=> 'Citiraj post',
'IMG_ICON_POST_REPORT'=> 'Prijavi post',
'IMG_ICON_POST_TARGET'=> 'Minipost',
'IMG_ICON_POST_TARGET_UNREAD'=> 'Novi minipost',


'IMG_ICON_TOPIC_ATTACH'=> 'Privitak',
'IMG_ICON_TOPIC_LATEST'=> 'Zadnji post',
'IMG_ICON_TOPIC_NEWEST'=> 'Zadnji nepročitan post',
'IMG_ICON_TOPIC_REPORTED'=> 'Post prijavljen',
'IMG_ICON_TOPIC_UNAPPROVED'=> 'Post neodobren',

'IMG_ICON_USER_ONLINE'=> 'Korisnik/ca online',
'IMG_ICON_USER_OFFLINE'=> 'Korisnik/ca offline',
'IMG_ICON_USER_PROFILE'=> 'Prikaži profil',
'IMG_ICON_USER_SEARCH'=> 'Pretraži/potraži postove',
'IMG_ICON_USER_WARN'=> 'Upozori korisnika/cu',

'IMG_BUTTON_PM_FORWARD'=> 'Proslijedi privatnu poruku',
'IMG_BUTTON_PM_NEW'=> 'Nova privatna poruka',
'IMG_BUTTON_PM_REPLY'=> 'Odgovori na privatnu poruku',
'IMG_BUTTON_TOPIC_LOCKED'=> 'Zaključana tema',
'IMG_BUTTON_TOPIC_NEW'=> 'Nova tema',
'IMG_BUTTON_TOPIC_REPLY'=> 'Odgovori na temu',

'IMG_USER_ICON1'=> 'Korisnički definirana slika 1',
'IMG_USER_ICON2'=> 'Korisnički definirana slika 2',
'IMG_USER_ICON3'=> 'Korisnički definirana slika 3',
'IMG_USER_ICON4'=> 'Korisnički definirana slika 4',
'IMG_USER_ICON5'=> 'Korisnički definirana slika 5',
'IMG_USER_ICON6'=> 'Korisnički definirana slika 6',
'IMG_USER_ICON7'=> 'Korisnički definirana slika 7',
'IMG_USER_ICON8'=> 'Korisnički definirana slika 8',
'IMG_USER_ICON9'=> 'Korisnički definirana slika 9',
'IMG_USER_ICON10'=> 'Korisnički definirana slika 10',

'INCLUDE_DIMENSIONS'=> 'Uključi dimenzije',
'INCLUDE_IMAGESET'=> 'Uključi set slika',
'INCLUDE_TEMPLATE'=> 'Uključi predložak',
'INCLUDE_THEME'=> 'Uključi temu',
'INSTALL_IMAGESET'=> 'Instaliraj set slika',
'INSTALL_IMAGESET_EXPLAIN'=> 'Ovdje možeš instalirati izabran set slika.<br />Možeš urediti/uređivati određene detalje ili prihvatiti zadano instalacijom.',
'INSTALL_STYLE'=> 'Instaliraj stil',
'INSTALL_STYLE_EXPLAIN'=> 'Ovdje možeš instalirati stil i odgovarajuće/pripadajuće mu elemente.<br />Ukoliko si već instalirao/la odgovarajuće/pripadajuće elemente stila, neće biti prepisani. Neki stilovi zahtijevaju da elementi budu unaprijed instalirani [ukoliko pokušavaš instalirati takav stil, a nemaš potrebne elemente, bit ćeš obaviješten/a o tome].',
'INSTALL_TEMPLATE'=> 'Instaliraj predložak',
'INSTALL_TEMPLATE_EXPLAIN'=> 'Ovdje možeš instalirati novi set predloška.<br />O konfiguraciji servera ovisi koje ćeš opcije imati na raspolaganju.',
'INSTALL_THEME'=> 'Instaliraj temu',
'INSTALL_THEME_EXPLAIN'=> 'Ovdje možeš instalirati izabranu temu.<br />Možeš urediti/uređivati određene detalje ili prihvatiti zadano instalacijom.',
'INSTALLED_IMAGESET'=> 'Instalirani setovi slika',
'INSTALLED_STYLE'=> 'Instalirani stilovi',
'INSTALLED_TEMPLATE'=> 'Instalirani predlošci',
'INSTALLED_THEME'=> 'Instalirana teme',

'LINE_SPACING'=> 'Razmak među redcima',
'LOCALISED_IMAGES'=> 'Lokalizirano',

'NO_CLASS'=> 'Nije moguće pronaći klasu u stylesheetu.',
'NO_IMAGESET'=> 'Nije moguće pronaći set slika u sistemu datoteka.',
'NO_IMAGE'=> '/',
'NO_IMAGE_ERROR'=> 'Nije moguće pronaći sliku u sistemu datoteka.',
'NO_STYLE'=> 'Nije moguće pronaći stil u sistemu datoteka.',
'NO_TEMPLATE'=> 'Nije moguće pronaći predložak u sistemu datoteka.',
'NO_THEME'=> 'Nije moguće pronaći temu u sistemu datoteka.',
'NO_UNINSTALLED_IMAGESET'=> 'Nema neinstaliranih setova slika.',
'NO_UNINSTALLED_STYLE'=> 'Nema neinstaliranih stilova.',
'NO_UNINSTALLED_TEMPLATE'=> 'Nema neinstaliranih predložaka.',
'NO_UNINSTALLED_THEME'=> 'Nema neinstaliranih tema.',
'NO_UNIT'=> '/',

'ONLY_IMAGESET'=> 'Ovo je jedini (zadnji) preostali set slika, ne možeš ga izbrisati.',
'ONLY_STYLE'=> 'Ovo je jedini (zadnji) preostali stil, ne možeš ga izbrisati.',
'ONLY_TEMPLATE'=> 'Ovo je jedini (zadnji) preostali set predloška, ne možeš ga izbrisati.',
'ONLY_THEME'=> 'Ovo je jedina (zadnja) preostala tema, ne možeš ju izbrisati.',
'OPTIONAL_BASIS'=> 'Opcionalne osnove',

'REFRESH'=> 'Osvježi',
'REPEAT_NO'=> '/',
'REPEAT_X'=> 'Samo vodoravno',
'REPEAT_Y'=> 'Samo okomito',
'REPEAT_ALL'=> ' (U) Oba smjera',
'REPLACE_IMAGESET'=> 'Zamijeni set slika s(a)',
'REPLACE_IMAGESET_EXPLAIN'=> 'Izabrani set slika zamijenit će ovog kojeg izbrisuješ u svim stilovima koji ga koriste.',
'REPLACE_STYLE'=> 'Zamijeni stil s(a)',
'REPLACE_STYLE_EXPLAIN'=> 'Izabrani stil zamijenit će ovog kojeg izbrisuješ svim korisnicima/ama koji ga koriste.',
'REPLACE_TEMPLATE'=> 'Zamijeni predložak s(a)',
'REPLACE_TEMPLATE_EXPLAIN'=> 'Izabrani set predloška zamijenit će ovog kojeg izbrisuješ u svim stilovima koji ga koriste.',
'REPLACE_THEME'=> 'Zamijeni temu s(a)',
'REPLACE_THEME_EXPLAIN'=> 'Izabrana tema zamijenit će ovu koju izbrisuješ u svim stilovima koji ju koriste.',
'REQUIRES_IMAGESET'=> 'Stil zahtjeva instalaciju %s seta slika.',
'REQUIRES_TEMPLATE'=> 'Stil zahtjeva instalaciju %s seta predloška.',
'REQUIRES_THEME'=> 'Stil zahtjeva instalaciju %s teme.',

'SELECT_IMAGE'=> 'Izaberi sliku',
'SELECT_TEMPLATE'=> 'Izaberi datoteku predloška',
'SELECT_THEME'=> 'Izaberi datoteku teme',
'SELECTED_IMAGE'=> 'Izabrana slika',
'SELECTED_IMAGESET'=> 'Izabran set slika',
'SELECTED_TEMPLATE'=> 'Izabran predložak',
'SELECTED_TEMPLATE_FILE'=> 'Izabrana datoteka predloška',
'SELECTED_THEME'=> 'Izabrana tema',
'SELECTED_THEME_FILE'=> 'Izabrana datoteka teme',
'STORE_DATABASE'=> 'Baza podataka',
'STORE_FILESYSTEM'=> 'Sistem datoteka',
'STYLE_ACTIVATE'=> 'Aktiviraj',
'STYLE_ACTIVE'=> 'Aktiv(ira)no',
'STYLE_ADDED'=> 'Stil je dodan.',
'STYLE_DEACTIVATE'=> 'Deaktiviraj',
'STYLE_DEFAULT'=> 'Postavi zadanim stilom',
'STYLE_DELETED'=> 'Stil je izbrisan.',
'STYLE_DETAILS_UPDATED'=> 'Stil je uređen.',
'STYLE_ERR_ARCHIVE'=> 'Izaberi metodu arhiviranja.',
'STYLE_ERR_COPY_LONG'=> 'Autorska prava ne mogu biti duža od 60 znakova.',
'STYLE_ERR_MORE_ELEMENTS'=> 'Moraš izabrati najmanje jedan element stila.',
'STYLE_ERR_NAME_CHARS'=> 'Ime stila može sadržavati samo alfanumeričke znakove, -, +, _ i razmak.',
'STYLE_ERR_NAME_EXIST'=> 'Stil s (pod) tim imenom već postoji.',
'STYLE_ERR_NAME_LONG'=> 'Ime stila ne može biti duže od 30 znakova.',
'STYLE_ERR_NO_IDS'=> 'Moraš odabrati predložak, temu i set slika za stil.',
'STYLE_ERR_NOT_STYLE'=> 'Importirana odnosno uploadirana datoteka ne sadrži valjanu arhivu stila.',
'STYLE_ERR_STYLE_NAME'=> 'Moraš unijeti ime za (ovaj) stil.',
'STYLE_EXPORT'=> 'Eksportiraj stil',
'STYLE_EXPORT_EXPLAIN'=> 'Ovdje možeš eksportirati stil u arhivski oblik. Stil ne mora sadržavati sve elemente, ali mora sadržavati najmanje jedan. Npr. ukoliko si kreirao/la novu temu i set slika za najčešće korišten predložak, možeš jednostavno eksportirati temu i set slika (a) izostaviti predložak. Možeš izabrati da li ćeš datoteku preuzeti direktno ili ju pohraniti u mapu za pohranu podataka za kasnije preuzimanje odnosno preuzimanje FTP-om.',
'STYLE_EXPORTED'=> 'Stil je eksportiran i pohranjen u %s.',
'STYLE_IMAGESET'=> 'Set slika',
'STYLE_NAME'=> 'Ime stila',
'STYLE_TEMPLATE'=> 'Predložak',
'STYLE_THEME'=> 'Tema',
'STYLE_USED_BY'=> 'Koristi (uključujući robote)',

'TEMPLATE_ADDED'=> 'Set predloška je dodan i pohranjen u sistem datoteka.',
'TEMPLATE_ADDED_DB'=> 'Set predloška je dodan i pohranjen u bazu podataka.',
'TEMPLATE_CACHE'=> 'Cache predloška',
'TEMPLATE_CACHE_EXPLAIN'=> 'Zadano, phpBB cacheira izrađenu verziju svojih predložaka (a) što smanjuje, prilikom pregledavanja stranice, opterećenje servera te može skratiti vrijeme generiranja stranice. Ovdje možeš vidjeti cache status svake datoteke i izbrisati pojedinačne datoteke ili kompletan cache.',
'TEMPLATE_CACHE_CLEARED'=> 'Cache predloška je izbrisan.',
'TEMPLATE_CACHE_EMPTY'=> 'Nema cacheiranih predložaka.',
'TEMPLATE_DELETED'=> 'Set predloška je izbrisan.',
'TEMPLATE_DELETED_FS'=> 'Set predloška je izbrisan iz baze, ali je moguće da su pojedine datoteke ostale u sistemu datoteka.',
'TEMPLATE_DETAILS_UPDATED'=> 'Detalji predloška su ažurirani.',
'TEMPLATE_EDITOR'=> 'Raw HTML uređivač predložaka',
'TEMPLATE_EDITOR_HEIGHT'=> 'Visina uređivača predložaka',
'TEMPLATE_ERR_ARCHIVE'=> 'Izaberi metodu arhiviranja.',
'TEMPLATE_ERR_CACHE_READ'=> 'Nije bilo moguće otvoriti cache mapu namijenjenu spremanju cacheiranih verzija datoteka predloška.',
'TEMPLATE_ERR_COPY_LONG'=> 'Autorska prava ne mogu biti duža od 60 znakova.',
'TEMPLATE_ERR_NAME_CHARS'=> 'Ime predloška može sadržavati samo alfanumeričke znakove, -, +, _ i razmak.',
'TEMPLATE_ERR_NAME_EXIST'=> 'Predložak s (pod) tim imenom već postoji.',
'TEMPLATE_ERR_NAME_LONG'=> 'Ime predloška ne može biti duže od 30 znakova.',
'TEMPLATE_ERR_NOT_TEMPLATE'=> 'Arhiva koju si unio/la ne sadrži valjan set predloška.',
'TEMPLATE_ERR_STYLE_NAME'=> 'Moraš unijeti ime za (ovaj) predložak.',
'TEMPLATE_EXPORT'=> 'Eksportiraj predložak/ške',
'TEMPLATE_EXPORT_EXPLAIN'=> 'Ovdje možeš eksportirati set predloška u arhivski oblik. Arhiva će sadržavati sve podatke potrebne za instalaciju seta predloška na drugi forum. Možeš izabrati da li ćeš datoteku preuzeti direktno ili ju pohraniti u mapu za pohranu podataka za kasnije preuzimanje odnosno preuzimanje FTP-om.',
'TEMPLATE_EXPORTED'=> 'Predložak/šci je/su eksportiran/i i pohranjen/i u %s.',
'TEMPLATE_FILE'=> 'Datoteka predloška',
'TEMPLATE_FILE_UPDATED'=> 'Datoteka predloška je ažurirana.',
'TEMPLATE_LOCATION'=> 'Pohrani predloške u',
'TEMPLATE_LOCATION_EXPLAIN'=> 'Slike su uvijek pohranjene u sistemu datoteka.',
'TEMPLATE_NAME'=> 'Ime predloška',
'TEMPLATE_REFRESHED'=> 'Predložak je osvježen.',
'THEME_ADDED'=> 'Dodana je nova tema u sistem datoteka.',
'THEME_ADDED_DB'=> 'Dodana je nova tema u bazu podataka.',
'THEME_CLASS_ADDED'=> 'Prilagođena klasa je uspješno dodana.',
'THEME_DELETED'=> 'Tema je izbrisana.',
'THEME_DELETED_FS'=> 'Tema je izbrisana iz baze, ali su datoteke ostale u sistemu datoteka.',
'THEME_DETAILS_UPDATED'=> 'Detalji teme su ažurirani.',
'THEME_EDITOR'=> 'Uređivač tema',
'THEME_EDITOR_HEIGHT'=> 'Visina uređivača tema',
'THEME_ERR_ARCHIVE'=> 'Izaberi metodu arhiviranja.',
'THEME_ERR_CLASS_CHARS'=> 'Samo su alfanumerički znakovi plus ., :, -, _ i # valjana imena klasa.',
'THEME_ERR_COPY_LONG'=> 'Autorska prava ne mogu biti duža od 60 znakova.',
'THEME_ERR_NAME_CHARS'=> 'Ime teme može sadržavati samo alfanumeričke znakove, -, +, _ i razmak.',
'THEME_ERR_NAME_EXIST'=> 'Tema s (pod) tim imenom već postoji.',
'THEME_ERR_NAME_LONG'=> 'Ime teme ne može biti duže od 30 znakova.',
'THEME_ERR_NOT_THEME'=> 'Arhiva koju si unio/la ne sadrži valjanu temu.',
'THEME_ERR_REFRESH_FS'=> 'Tema je pohranjena u sistemu datoteka poradi čega nema potrebe za osvježavanjem.',
'THEME_ERR_STYLE_NAME'=> 'Moraš unijeti ime za (ovu) temu.',
'THEME_FILE'=> 'Datoteka teme',
'THEME_EXPORT'=> 'Eksportiraj temu',
'THEME_EXPORT_EXPLAIN'=> 'Ovdje možeš eksportirati temu u arhivski oblik. Arhiva će sadržavati sve podatke potrebne za instalaciju teme na drugi forum. Možeš izabrati da li ćeš datoteku preuzeti direktno ili ju pohraniti u mapu za pohranu podataka za kasnije preuzimanje odnosno preuzimanje FTP-om.',
'THEME_EXPORTED'=> 'Tema je eksportirana i pohranjena u %s.',
'THEME_LOCATION'=> 'Pohrani stylesheet u',
'THEME_LOCATION_EXPLAIN'=> 'Slike su uvijek pohranjene u sistemu datoteka.',
'THEME_NAME'=> 'Ime teme',
'THEME_REFRESHED'=> 'Tema je osvježena.',
'THEME_UPDATED'=> 'Tema je ažurirana.',

'UNDERLINE'=> 'Podcrtanje',
'UNINSTALLED_IMAGESET'=> 'Neinstalirani setovi slika',
'UNINSTALLED_STYLE'=> 'Neinstalirani stilovi',
'UNINSTALLED_TEMPLATE'=> 'Neinstalirani predlošci',
'UNINSTALLED_THEME'=> 'Neinstalirane teme',
'UNSET'=> 'Nedefinirano',
));
?>