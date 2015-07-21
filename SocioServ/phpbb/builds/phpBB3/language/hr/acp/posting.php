<?php
/** 
*
* posting [Croatian]
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

// BBCodes 
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
'ACP_BBCODES_EXPLAIN'=> 'BBKod je specijalna implementacija HTML-a.<br />Sličan je HTML-u u stilu; tagovi se umeću u vitičaste zagrade [ i ] [umjesto &lt; i &gt;] - što nudi veću kontrolu prikaza.<br />Ovdje možeš dodavati/izbrisati/uređivati BBKodove.',
'ADD_BBCODE'=> 'Dodaj novi BBKod',

'BBCODE_ADDED'=> 'BBKod je dodan.',
'BBCODE_EDITED'=> 'BBKod je uređen.',
'BBCODE_NOT_EXIST'=> 'BBKod ne postoji.',
'BBCODE_HELPLINE'=> 'Pomoćni redak',
'BBCODE_HELPLINE_EXPLAIN'=> 'Ovo polje sadrži mouse over tekst BBKod(ov)a.',
'BBCODE_HELPLINE_TEXT'=> 'Tekst pomoćnog retka',
'BBCODE_INVALID_TAG_NAME'=> 'Ime taga BBKoda već postoji.',
'BBCODE_INVALID' => 'BBKod je konstruiran u neispravnoj formi.',
'BBCODE_OPEN_ENDED_TAG'=> 'BBKodovi moraju sadržavati i otvarajući i zatvarajući tag.',
'BBCODE_TAG'=> 'Tag',
'BBCODE_TAG_TOO_LONG'=> 'Ime taga BBKoda je predugačko.',
'BBCODE_TAG_DEF_TOO_LONG'=> 'Definicija taga je predugačka.<br />Moraš ju skratiti.',
'BBCODE_USAGE'=> 'Primjena BBKod(ov)a',
'BBCODE_USAGE_EXAMPLE'=> '[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
'BBCODE_USAGE_EXPLAIN'=> 'Ovdje definiraš kako koristiti BBKod(ov)e.<br />Zamijeni unose odgovarajućim (tokenima) znakovima (%sbaci pogled: dolje%s).',

'EXAMPLE'=> 'Primjer:',
'EXAMPLES'=> 'Primjeri:',

'HTML_REPLACEMENT'=> 'HTML zamjene',
'HTML_REPLACEMENT_EXAMPLE'=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
'HTML_REPLACEMENT_EXPLAIN'=> 'Ovdje definiraš zadane HTML zamjene.<br />Nemoj zaboraviti (tokene) znakove korištene iznad.',

'TOKEN'=> 'Token',
'TOKENS'=> 'Tokeni',
'TOKENS_EXPLAIN'=> 'Tokeni su rezervirana mjesta za korisničke unose.<br />Unosi će biti potvrđeni samo ukoliko odgovaraju pratećoj definiciji. Ukoliko je potrebno, možeš ih pobrojati dodavanjem broja zadnjem znaku između vitičastih zagrada, npr. {TEXT1}, {TEXT2}.<br /><br />Može koristiti bilo koji jezični niz podataka koji postoji u tvojoj jezičnoj mapi, npr., kao: {L_<em>&lt;STRINGNAME&gt;</em>} gdje je <em>&lt;STRINGNAME&gt;</em> ime prevedenog niza podataka koji želiš dodati. Na primjer: {L_WROTE} će biti prikazano kao &quot;wrote&quot; odnosno kao prijevod (toga) ovisno o kojem se jezičnom paketu radi.<br /><br /><strong>Samo dolje izlistani tokeni mogu biti korišteni.</strong>',
'TOKEN_DEFINITION'=> 'Što (to) može biti?',
'TOO_MANY_BBCODES'=> 'Ne možeš dod(av)ati više BBKodova.<br />Izbriši jednog ili više BBKodova i pokušaj ponovo.',

'tokens'=>array(
'TEXT'=> 'Bilo koji/kakav tekst, uključujući strane znakove, brojeve itd.<br />Token nije preporučljivo koristiti u HTML tagovima. Umjesto tokena pokušaj s korištenjem IDENTIFIER-a ili SIMPLETEXT-a.',
'SIMPLETEXT' => 'Znakovi (latin) abecede (A-Z), brojevi, zarezi, točke, razmaci, -, +, − i _.',
'IDENTIFIER' => ' Znakovi (latin) abecede (A-Z), brojevi, − i _.',
'NUMBER'=> 'Bilo koji/kakav niz znamenki.',
'EMAIL'=> 'Ispravna e-mail adresa.',
'URL'=> 'Valjan URL koji koristi bilo koji protokol (http, ftp i sl. ne mogu biti korišteni za izvršavanje javascripta). Ukoliko ništa nije postavljeno, &quot;http://&quot; će biti (stavljen ispred) dodan nizu podataka.',
'LOCAL_URL'=> 'Lokalan URL. URL mora biti relativan u odnosu na stranicu teme i ne može sadržavati ime servera ili protokol.',
'COLOR'=> 'HTML boja može biti u numeričkoj formi [npr. <samp>#FF1234</samp>] ili kao <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS  ključna riječ (boje)</a> [npr. <samp>fuchsia</samp>, <samp>InactiveBorder</samp> i sl.].'
)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
'ACP_ICONS_EXPLAIN'=> 'Ikone su uobičajeno prikazane pored naslova tema [na forumskoj listi tema] odnosno pored naslova postova.<br />Odavde možeš dodavati/izbrisati/uređivati ikone, koje korisnici/e mogu dodavati/koristiti u temama/postovima, odnosno instalirati/kreirati nove pakete ikona.',
'ACP_SMILIES_EXPLAIN'=> 'Smajlići [Smileys/Emoticons] su male sličice koje <em>prikazuju</em> emocije/razmišljanja osobe [koja ih je <em>ubacila</em> u post, npr. :) znači smijem se, sretan/na sam, :( znači plačem, tužan/na sam...].<br />Odavde možeš dodavati/izbrisati/uređivati smajliće, koje korisnici/e mogu koristiti u postovima/privatnim porukama, odnosno instalirati/kreirati nove pakete smajlića.',
'ADD_SMILIES'=> 'Dodaj smajliće višestruko',
'ADD_SMILEY_CODE'=> 'Dodaj dodatni kod smajlića',
'ADD_ICONS'=> 'Dodaj ikone višestruko',
'AFTER_ICONS'=> 'Iza %s',
'AFTER_SMILIES'=> 'Iza %s',

'CODE'=> 'Kod',
'CURRENT_ICONS'=> 'Trenutne ikone',
'CURRENT_ICONS_EXPLAIN'=> 'Izaberi što želiš napraviti s trenutno instaliranim ikonama.',
'CURRENT_SMILIES'=> 'Trenutni smajlići',
'CURRENT_SMILIES_EXPLAIN'=> 'Izaberi što želiš napraviti s trenutno instaliranim smajlićima.',

'DISPLAY_ON_POSTING'=> 'Prikaži na stranici postanja',
'DISPLAY_POSTING' => 'Na stranici postanja',
'DISPLAY_POSTING_NO' => 'Ne na stranici postanja',

'EDIT_ICONS'=> 'Uredi ikone',
'EDIT_SMILIES'=> 'Uredi smajliće',
'EMOTION'=> 'Emocija',
'EXPORT_ICONS'=> 'Eksportiraj i preuzmi icons.pak',
'EXPORT_ICONS_EXPLAIN'=> '%sKlikom na (ovaj) link, konfiguracija instaliranih ikona bit će zapakirana u <samp>icons.pak</samp> datoteku, koja, preuzeta, može biti iskorištena za kreiranje <samp>.zip</samp> ili <samp>.tgz</samp> datoteke koja će sadržavati sve ikone plus ovu <samp>icons.pak</samp> konfiguracijsku datoteku%s.',
'EXPORT_SMILIES'=> 'Eksportiraj i preuzmi smilies.pak',
'EXPORT_SMILIES_EXPLAIN'=> '%sKlikom na (ovaj) link, konfiguracija instaliranih smajlića bit će zapakirana u <samp>smilies.pak</samp> datoteku, koja, preuzeta, može biti iskorištena za kreiranje <samp>.zip</samp> ili <samp>.tgz</samp> datoteke koja će sadržavati sve smajliće plus ovu <samp>smilies.pak</samp> konfiguracijsku datoteku%s.',

'FIRST'=> 'Prvi/a',

'ICONS_ADD' => 'Dodaj ikonu',
'ICON_NONE_ADDED' => 'Nije dodana nijedna ikona.',
'ICONS_ONE_ADDED' => 'Ikona je dodana.',
'ICONS_ADDED' => 'Ikone su dodane.',
'ICONS_CONFIG'=> 'Konfiguracija ikone/a',
'ICONS_DELETED'=> 'Ikona je uklonjena.',
'ICONS_EDIT' => 'Uredi ikonu',
'ICONS_ONE_EDITED' => 'Ikona je ažurirana.',
'ICON_NONE_EDITED' => 'Nije ažurirana nijedna ikona.',
'ICONS_EDITED' => 'Ikone su ažurirane.',
'ICONS_HEIGHT'=> 'Visina ikone',
'ICONS_IMAGE'=> 'Slika ikone',
'ICONS_IMPORTED'=> 'Paket ikona je instaliran.',
'ICONS_IMPORT_SUCCESS'=> 'Paket ikona je importiran.',
'ICONS_LOCATION'=> 'Lokacija ikone',
'ICONS_NOT_DISPLAYED'=> 'Sljedeće ikone neće biti prikazane na stranici postanja',
'ICONS_ORDER'=> 'Poredak ikona',
'ICONS_URL'=> 'Datoteka slike ikone',
'ICONS_WIDTH'=> 'Širina ikone',
'IMPORT_ICONS'=> 'Instaliraj paket ikona',
'IMPORT_SMILIES'=> 'Instaliraj paket smajlića',

'KEEP_ALL'=> 'Zadrži sve',

'MASS_ADD_SMILIES'=> 'Dodaj smajliće višestruko',

'NO_ICONS_ADD'=> 'Nema dostupnih ikona za dodavanje.',
'NO_ICONS_EDIT'=> 'Nema dostupnih ikona za uređivanje.',
'NO_ICONS_EXPORT'=> 'Nema ikona pomoću kojih bi bilo moguće kreirati paket ikona.',
'NO_ICONS_PAK'=> 'Nije pronađen niti jedan paket ikona.',
'NO_SMILIES_ADD'=> 'Nema dostupnih smajlića za dodavanje.',
'NO_SMILIES_EDIT'=> 'Nema dostupnih smajlića za uređivanje.',
'NO_SMILIES_EXPORT'=> 'Nema smajlića pomoću kojih bi bilo moguće kreirati paket smajlića.',
'NO_SMILIES_PAK'=> 'Nije pronađen niti jedan paket smajlića.',

'PAK_FILE_NOT_READABLE'=> 'Nije moguće (pro)čitati <samp>.pak</samp> datoteku.',

'REPLACE_MATCHES'=> 'Zamijeni podudarajuće',

'SELECT_PACKAGE'=> 'Izaberi datoteku paketa',
'SMILIES_ADD' => 'Dodaj novog smajlića',
'SMILIES_NONE_ADDED' => 'Nije dodan nijedan smajlić.',
'SMILIES_ONE_ADDED' => 'Smajlić je dodan.',
'SMILIES_ADDED' => 'Smajlići su dodani.',
'SMILIES_CODE'=> 'Kod smajlića',
'SMILIES_CONFIG'=> 'Konfiguracija smajlića',
'SMILIES_DELETED'=> 'Smajlić je uklonjen.',
'SMILIES_EDIT' => 'Uredi smajlića',
'SMILIES_NONE_EDITED' => 'Nije ažuriran nijedan smajlić.',
'SMILIES_ONE_EDITED' => 'Smajlić je ažuriran.',
'SMILIES_EDITED' => 'Smajlići su ažurirani.',
'SMILIES_EMOTION'=> 'Emocija',
'SMILIES_HEIGHT'=> 'Visina smajlića',
'SMILIES_IMAGE'=> 'Slika smajlića',
'SMILIES_IMPORTED'=> 'Paket smajlića je instaliran.',
'SMILIES_IMPORT_SUCCESS'=> 'Paket smajlića je importiran.',
'SMILIES_LOCATION'=> 'Lokacija smajlića',
'SMILIES_NOT_DISPLAYED'=> 'Sljedeći smajlići neće biti prikazani na stranici postanja',
'SMILIES_ORDER'=> 'Poredak smajlića',
'SMILIES_URL'=> 'Datoteka slike smajlića',
'SMILIES_WIDTH'=> 'Širina smajlića',

'WRONG_PAK_TYPE'=> 'Paket ne sadrži odgovarajuće podatke.',
));

// Word censors
$lang = array_merge($lang, array(
'ACP_WORDS_EXPLAIN'=> 'Ovdje možeš dodavati/izbrisati/uređivati riječi koje će automatski biti cenzurirane na forumu. <br />Automatski će biti onemogućeno i registriranje pod korisničkim imenom koje sadrži cenzuriranu/e riječ/i.<br />Možeš se koristiti i zvjezdicama (*) [npr.: *test* će obuhvatiti sve riječi koje u sebi sadrže riječ test; test* sve koje počinju sa test; *test sve koje završavaju sa test].',
'ADD_WORD'=> 'Dodaj novu riječ',

'EDIT_WORD'=> 'Uredi',
'ENTER_WORD'=> 'Moraš unijet i riječ i zamjenu za nju.',

'NO_WORD'=> 'Nisi označio/la riječ koju želiš urediti.',

'REPLACEMENT'=> 'Zamjena',

'UPDATE_WORD'=> 'Ažuriraj',

'WORD'=> 'Riječ',
'WORD_ADDED'=> 'Riječ je dodana.',
'WORD_REMOVED'=> 'Riječ je izbrisana.',
'WORD_UPDATED'=> 'Riješ je ažurirana.',
));

// Ranks
$lang = array_merge($lang, array(
'ACP_RANKS_EXPLAIN'=> 'Ovdje možeš pregledavati/dodavati/izbrisati/uređivati statuse.<br />Možeš kreirati (i) specijalne statuse koji mogu biti dodijeljeni korisnicima/ama putem <em>Upravljanja korisnicima/ama</em>.',
'ADD_RANK'=> 'Dodaj novi status',

'MUST_SELECT_RANK'=> 'Moraš izabrati status.',

'NO_ASSIGNED_RANK'=> 'Nije dodijeljen specijalan status.',
'NO_RANK_TITLE'=> 'Nisi unio/la naziv statusa.',
'NO_UPDATE_RANKS'=> 'Status je izbrisan.<br />Korisnički računi, kojima je bio dodijeljen (ovaj) status, nisu ažurirani što će reći da ćeš ih morati ažurirati ručno.',

'RANK_ADDED'=> 'Status je dodan.',
'RANK_IMAGE'=> 'Statusnica',
'RANK_IMAGE_EXPLAIN'=> 'Slika (koje će biti) povezana (prikazana) sa statusom.<br />Putanja je relativna u odnosu na vršnu phpBB mapu.',
'RANK_MINIMUM'=> 'Minimalno postova',
'RANK_REMOVED'=> 'Status je izbrisan.',
'RANK_SPECIAL'=> 'Specijalan status',
'RANK_TITLE'=> 'Naziv statusa',
'RANK_UPDATED'=> 'Status je ažuriran.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
'ACP_DISALLOW_EXPLAIN'=> 'Ovdje možeš kontrolirati korisnička imena kojima neće biti dopušteno korištenje.<br /> Možeš koristiti i zvjezdice (*) - koje zamjenjuju bilo koji znak.<br />Nećeš moći unijeti niti jedno korisničko ime koje je već  registrirano [ukoliko to želiš - moraš prvo promijeniti/izbrisati postojeće korisničko ime].',
'ADD_DISALLOW_EXPLAIN'=> 'Možeš koristiti (i) zvjezdice (*) - koje zamjenjuju bilo koji znak.',
'ADD_DISALLOW_TITLE'=> 'Dodavanje nedopuštenog korisničkog imena',

'DELETE_DISALLOW_EXPLAIN'=> 'Korisničko ime možeš izbrisati tako da ga izabereš s liste i klikneš na odgovarajući gumb/naredbu.',
'DELETE_DISALLOW_TITLE'=> 'Izbrisivanje nedopuštenog korisničkog imena',
'DISALLOWED_ALREADY'=> 'Ime koje si unio/la ne može biti nedopušteno.<br />Ili već postoji na listi, ili postoji na listi cenzuriranih riječi ili je korisničko ime u uporabi.',
'DISALLOWED_DELETED'=> 'Nedopušteno korisničko ime je izbrisano.',
'DISALLOW_SUCCESSFUL'=> 'Nedopušteno korisničko ime je dodano.',

'NO_DISALLOWED'=> 'Nema nedopuštenih korisničkih imena.',
'NO_USERNAME_SPECIFIED'=> 'Nisi izabrao/la odnosno unio/la korisničko ime.',
));

// Reasons
$lang = array_merge($lang, array(
'ACP_REASONS_EXPLAIN'=> 'Ovdje možeš upravljati razlozima koji se koriste prilikom prijavljivanja postova odnosno u objašnjenjima prilikom neodobravanja postova.<br />Zadani razlog [označen zvjezdicom (*)] ne možeš izbrisati jer se njega koristi kada niti jedan drugi razlog nije primjeren/ne odgovara.',
'ADD_NEW_REASON'=> 'Dodaj novi razlog',
'AVAILABLE_TITLES'=> 'Dostupni lokalizirani nazivi razloga',

'IS_NOT_TRANSLATED'=> 'Razlog nije lokaliziran.',
'IS_NOT_TRANSLATED_EXPLAIN'=> 'Razlog <strong>nije</strong> lokaliziran.<br />Ukoliko želiš lokaliziran oblik, odredi točan ključ iz sekcije razloga prijave(a) jezičnih datoteka.',
'IS_TRANSLATED'=> 'Razlog je lokaliziran.',
'IS_TRANSLATED_EXPLAIN'=> 'Razlog <strong>je</strong> lokaliziran.<br />Ukoliko je naslov koji uneseš specificiran u sekciji razloga prijave(a) jezičnih datoteka, bit će korišteni lokalizirani oblici naziva i opisa.',

'NO_REASON'=> 'Razlog nije pronađen.',
'NO_REASON_INFO'=> 'Moraš unijeti (i) naziv i opis razloga.',
'NO_REMOVE_DEFAULT_REASON'=> 'Ne možeš izbrisati zadani razlog “Ostalo”.',

'REASON_ADD'=> 'Dodaj prijavu/razlog odbijanja',
'REASON_ADDED'=> 'Prijava/razlog odbijanja je dodan/a.',
'REASON_ALREADY_EXIST'=> 'Razlog s ovim nazivom već postoji.<br />Unesi drugi naziv.',
'REASON_DESCRIPTION'=> 'Opis razloga',
'REASON_DESC_TRANSLATED'=> 'Prikazan opis razloga',
'REASON_EDIT'=> 'Uredi prijavu/razlog odbijanja',

'REASON_EDIT_EXPLAIN'=> 'Ovdje možeš dodati/uređivati razlog(e).<br />Ukoliko je razlog preveden, bit će korištena lokalizirana verzija umjesto opisa unesenog(ih) ovdje.',
'REASON_REMOVED'=> 'Prijava/razlog odbijanja je izbrisan/a.',
'REASON_TITLE'=> 'Naziv razloga',
'REASON_TITLE_TRANSLATED'=> 'Prikazan naziv razloga',
'REASON_UPDATED'=> 'Prijava/razlog odbijanja je ažuriran/a.',

'USED_IN_REPORTS'=> 'Korišten(o) u prijavama',
));
?>