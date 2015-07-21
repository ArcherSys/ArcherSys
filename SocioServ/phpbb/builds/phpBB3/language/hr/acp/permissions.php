<?php
/** 
*
* acp_permissions [Croatian]
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
'ACP_PERMISSIONS_EXPLAIN'=> '<p>Dopuštenja su grupirana u četiri, dolje navedene, glavne sekcije.</p><h2>Opća dopuštenja</h2><p>Koriste se za kontrolu pristupa na općem nivou i primjenjuju se na cijeli forum.<br />Podijeljena su na četiri podgrupe: Dopuštenja korisnika/ca, Dopuštenja grupa, Administratore/ice i Globalne moderatore/ice.</p><h2>Dopuštenja vezana uz forum</h2><p>Koriste se za kontrolu pristupa forumima. Podijeljena su na četiri podgrupe: Forumska dopuštenja, Moderatore/ice foruma, Forumska dopuštenja korisnika/ca i Forumska dopuštenja grupa.</p><h2>Setovi dopuštenja</h2><p>Koriste se za kreiranje različitih tipova dopuštenja kako bi kasnije mogli biti primijenjeni/dodijeljeni ovisno o tome na/za koga/što su namijenjeni. Zadani setovi dopuštenja [četiri gore navedenih podgrupa] trebali bi pokrivati administraciju foruma, no, ti možeš dodavati/izbrisati/uređivati setove dopuštenja kako ti odgovara.</p><h2> Maske dopuštenja</h2><p>Koriste se za prikaz/pregled efektivnih dopuštenja dodijeljenih korisnicima/ama, moderatorima/cama [lokalnim/globalnim], administratorima/cama odnosno forumima.</p><br /><p>Za daljnje informacije, o postavljanju i upravljanju dopuštenjima, na phpBB3 forumu, baci pogled na <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Poglavlje 1.5 našeg Quick Start Vodiča</a>.</p>',
'ACL_NEVER'=> 'Nikad',
'ACL_SET'=> 'Postavljanje dopuštenja',
'ACL_SET_EXPLAIN'=> 'Dopuštenja su bazirana na jednostavnom <samp>DA</samp>/<samp>NE</samp> sistemu. Izbor opcije <samp>NIKAD</samp> [za korisnika/cu odnosno korisničku grupu] prepisuje bilo kakvu drugu dodijeljenu im vrijednost. Ukoliko ne želiš dodijeliti vrijednost opciji vezanoj [uz korisnika/cu odnosno korisničku grupu] izaberi <samp>NE</samp>. Ukoliko vrijednosti nisu dodijeljene opcijama, podrazumijeva se da je izabrano <samp>NIKAD</samp>. Svi označeni objekti [stavljanjem kvačice (ispred njih)] kopirat će definiran set dopuštenja.',
'ACL_SETTING'=> 'Postavljanje',
'ACL_TYPE_A_'=> 'Administratorska dopuštenja',
'ACL_TYPE_F_'=> 'Forumska dopuštenja',
'ACL_TYPE_M_'=> 'Moderatorska dopuštenja',
'ACL_TYPE_U_'=> 'Korisnička dopuštenja',
'ACL_TYPE_GLOBAL_A_'=> 'Administratorska dopuštenja',
'ACL_TYPE_GLOBAL_U_'=> 'Korisnička dopuštenja',
'ACL_TYPE_GLOBAL_M_'=> 'Globalna moderatorska dopuštenja',
'ACL_TYPE_LOCAL_M_'=> 'Forumska moderatorska dopuštenja',
'ACL_TYPE_LOCAL_F_'=> 'Forumska dopuštenja',
'ACL_NO'=> 'Ne',
'ACL_VIEW'=> 'Pregledavanje dopuštenja',
'ACL_VIEW_EXPLAIN'=> 'Ovdje možeš vidjeti efektivna dopuštenja koja korisnici(e)/grupe imaju. Crveni kvadratić označava da korisnik(ca)/grupa nema dopuštenje dok zeleni kvadratić označava da korisnik(ca)/grupa ima dopuštenje.',
'ACL_YES'=> 'Da',
'ACP_ADMINISTRATORS_EXPLAIN'=> 'Ovdje možeš dodijeliti administratorska dopuštenja korisnicima/ama odnosno grupama. Imaj na umu da svi/e korisnici/e s administratorskim dopuštenjima imaju pristup <em>Administriranju foruma</em>.',
'ACP_FORUM_MODERATORS_EXPLAIN'=> 'Ovdje možeš korisnicima/ama odnosno grupama dodijeliti moderatorski status. Kako bi korisnicima/ama dodijelio/la pristup tematskim forumima, definirao/la globalna moderatorska dopuštenja odnosno administratorska dopuštenja, koristi za to predviđenu stranicu.',
'ACP_FORUM_PERMISSIONS_EXPLAIN'=> 'Ovdje možeš odrediti koji/e korisnici(ce)/grupe imaju pristup kojem tematskom forumu. Kako bi korisnicima/ama dodijelio/la moderatorski odnosno administratorski status, koristi za to predviđenu stranicu.',
'ACP_GLOBAL_MODERATORS_EXPLAIN'=> 'Ovdje možeš dodijeliti globalna moderatorska dopuštenja korisnicima/ama odnosno grupama. Ti/e  moderatori/ce su slični običnim moderatorima/cama osim što, za razliku od njih, imaju pristup svakom tematskom forumu.',
'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'=> 'Ovdje možeš dodijeliti forumska dopuštenja grupama.',
'ACP_GROUPS_PERMISSIONS_EXPLAIN'=> 'Ovdje možeš dodijeliti globalna dopuštenja grupama [administratorska dopuštenja, korisnička dopuštenja odnosno globalna moderatorska dopuštenja]. Korisnička dopuštenja uključuju mogućnosti poput korištenja avatara, slanja privatnih poruka i dr. Globalna moderatorska dopuštenja uključuju mogućnosti poput odobravanja postova, upravljanja temama, isključivanja i dr. Administratorska dopuštenja uključuju mogućnosti poput upravljanja dopuštenjima, definiranja prilagođenih BBKodova, upravljanja forumima i dr. Individualna korisnička dopuštenja trebala bi biti mijenjana samo u izvanrednim situacijama, naime, preferirana metoda je dodjeljivanje korisnika/ca određenoj/im grupi/ama kojoj/im su, već, dodijeljena (željena/potrebita) prava.',
'ACP_ADMIN_ROLES_EXPLAIN'=> 'Ovdje možeš upravljati administratorskim setovima dopuštenja. Ukoliko promijeniš set dopuštenja, automatski ćeš promijeniti dopuštenja svima/svemu na koje/što su (ta) dopuštenja primijenjena/dodijeljena.',
'ACP_FORUM_ROLES_EXPLAIN'=> 'Ovdje možeš upravljati forumskim setovima dopuštenja. Ukoliko promijeniš set dopuštenja, automatski ćeš promijeniti dopuštenja svima/svemu na koje/što su (ta) dopuštenja primijenjena/dodijeljena.',
'ACP_MOD_ROLES_EXPLAIN'=> 'Ovdje možeš upravljati moderatorskim setovima dopuštenja. Ukoliko promijeniš set dopuštenja, automatski ćeš promijeniti dopuštenja svima/svemu na koje/što su (ta) dopuštenja primijenjena/dodijeljena.',
'ACP_USER_ROLES_EXPLAIN'=> 'Ovdje možeš upravljati korisničkim setovima dopuštenja. Ukoliko promijeniš set dopuštenja, automatski ćeš promijeniti dopuštenja svima/svemu na koje/što su (ta) dopuštenja primijenjena/dodijeljena.',
'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'=> 'Ovdje možeš dodjeljivati forumska dopuštenja korisnicima/ama.',
'ACP_USERS_PERMISSIONS_EXPLAIN'=> 'Ovdje možeš dodijeliti globalna dopuštenja korisnicima/ama [administratorska dopuštenja, korisnička dopuštenja odnosno globalna moderatorska dopuštenja]. Korisnička dopuštenja uključuju mogućnosti poput korištenja avatara, slanja privatnih poruka i dr. Globalna moderatorska dopuštenja uključuju mogućnosti poput odobravanja postova, upravljanja temama, isključivanja i dr. Administratorska dopuštenja uključuju mogućnosti poput upravljanja dopuštenjima, definiranja prilagođenih BBKodova, upravljanja forumima i dr. Ukoliko želiš primijeniti ove postavke na velik broj članova/ica, preferirana metoda je(su) <em>Dopuštenja grupa</em>. Individualna korisnička dopuštenja trebala bi biti mijenjana samo u izvanrednim situacijama, naime, preferirana metoda je dodjeljivanje korisnika/ca određenoj/im grupi/ama kojoj/im su, već, dodijeljena (željena/potrebita) prava.',
'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'=> 'Ovdje možeš vidjeti efektivna administratorska dopuštenja dodijeljena odabranim korisnicima(ama)/grupama.',
'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'=> 'Ovdje možeš vidjeti globalna moderatorska dopuštenja dodijeljena odabranim korisnicima(ama)/grupama.',
'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'=> 'Ovdje možeš vidjeti forumska dopuštenja dodijeljena odabranim korisnicima(ama)/grupama.',
'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'=> 'Ovdje možeš vidjeti forumska moderatorska dopuštenja dodijeljena odabranim korisnicima(ama)/grupama.',
'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'=> 'Ovdje možeš vidjeti efektivna korisnička dopuštenja dodijeljena odabranim korisnicima(ama)/grupama.',
'ADD_GROUPS'=> 'Dodaj grupe',
'ADD_PERMISSIONS'=> 'Dodaj dopuštenja',
'ADD_USERS'=> 'Dodaj korisnike/ce',
'ADVANCED_PERMISSIONS'=> 'Napredna dopuštenja',
'ALL_GROUPS'=> 'Odaberi sve grupe',
'ALL_NEVER'=> 'Sve <samp>NIKAD</samp>',
'ALL_NO'=> 'Sve <samp>NE</samp>',
'ALL_USERS'=> 'Odaberi sve korisnike/ce',
'ALL_YES'=> 'Sve <samp>DA</samp>',
'APPLY_ALL_PERMISSIONS'=> 'Primijeni sva dopuštenja',
'APPLY_PERMISSIONS'=> 'Primijeni dopuštenja',
'APPLY_PERMISSIONS_EXPLAIN'=> 'Definirana dopuštenja odnosno setovi dopuštenja bit će primijenjeni na ovu te na sve označene stavke.',
'AUTH_UPDATED'=> 'Dopuštenja su ažurirana.',

'CREATE_ROLE'=> 'Kreiraj set dopuštenja',
'CREATE_ROLE_FROM'=> 'Uporabi postavke iz...',
'CUSTOM'=> 'Prilagođeno...',

'DEFAULT'=> 'Zadano',
'DELETE_ROLE'=> 'Izbriši set dopuštenja',
'DELETE_ROLE_CONFIRM'=> 'Jesi li siguran/na da želiš izbrisati ovaj set dopuštenja? Stavke na koje je ovaj set dopuštenja primijenjen <strong>neće</strong> izgubiti postavljena dopuštenja.',
'DISPLAY_ROLE_ITEMS'=> 'Prikaz stavki na koje je primijenjen (ovaj) set dopuštenja',

'EDIT_PERMISSIONS'=> 'Uredi dopuštenja',
'EDIT_ROLE'=> 'Uredi set dopuštenja',

'GROUPS_NOT_ASSIGNED'=> 'Set dopuštenja nije dodijeljen niti jednoj grupi.',

'LOOK_UP_GROUP'=> 'Pronađi korisničku grupu',
'LOOK_UP_USER'=> 'Pronađi korisničko ime',

'MANAGE_GROUPS'=> 'Upravljanje grupama',
'MANAGE_USERS'=> 'Upravljanje korisnicima/ama',

'NO_AUTH_SETTING_FOUND'=> 'Nisu definirane postavke dopuštenja.',
'NO_ROLE_ASSIGNED'=> 'Nije dodijeljen set dopuštenja...',
'NO_ROLE_ASSIGNED_EXPLAIN'=> 'Postavljanje ovog seta dopuštenja ne mijenja dopuštenja desno. Ukoliko želiš promijeniti postavke odnosno izbrisati sva dopuštenja, moraš kliknuti na “Sve <samp>NE</samp>” link.',
'NO_ROLE_AVAILABLE'=> 'Nije dostupan niti jedan set dopuštenja.',
'NO_ROLE_NAME_SPECIFIED'=> 'Moraš odabrati/dati ime setu dopuštenja.',
'NO_ROLE_SELECTED'=> 'Set dopuštenja nije pronađen.',
'NO_USER_GROUP_SELECTED'=> 'Nisi izabrao(la)/odabrao(la) niti jedno korisničko ime/grupu.',

'ONLY_FORUM_DEFINED'=> 'Prilikom odabira, definirao/la si samo forume, moraš izabrati/odabrati najmanje jedno korisničko ime/grupu.',

'PERMISSION_APPLIED_TO_ALL'=> 'Dopuštenja odnosno set dopuštenja bit će primijenjen(a) na sve odabrane (označene) objekte.',
'PLUS_SUBFORUMS'=> '+Podforumi',

'REMOVE_PERMISSIONS'=> 'Izbriši dopuštenja',
'REMOVE_ROLE'=> 'Izbriši set dopuštenja',
'RESULTING_PERMISSION'=> 'Proizlazeće dopuštenje',
'ROLE'=> 'Set dopuštenja',
'ROLE_ADD_SUCCESS'=> 'Set dopuštenja je dodan.',
'ROLE_ASSIGNED_TO'=> 'Korisnicima(ama)/grupama dodijeljeni/e su %s',
'ROLE_DELETED'=> 'Set dopuštenja je izbrisan.',
'ROLE_DESCRIPTION'=> 'Opis seta dopuštenja',
'ROLE_ADMIN_FORUM'=> 'Administrator/ica foruma',
'ROLE_ADMIN_FULL'=> 'Administrator/ica sa svim ovlastima/pravima',
'ROLE_ADMIN_STANDARD'=> 'Standardan/na administrator/ica',
'ROLE_ADMIN_USERGROUP'=> 'Administrator/ica korisnika/ca i grupa',
'ROLE_FORUM_BOT'=> 'Pristup robota',
'ROLE_FORUM_FULL'=> 'Kompletan pristup',
'ROLE_FORUM_LIMITED'=> 'Ograničen pristup',
'ROLE_FORUM_LIMITED_POLLS'=> 'Ograničen pristup + Ankete',
'ROLE_FORUM_NOACCESS'=> 'Bez pristupa',
'ROLE_FORUM_ONQUEUE'=> 'Na moderatorskom “čekanju”',
'ROLE_FORUM_POLLS'=> 'Standardan pristup + Ankete',
'ROLE_FORUM_READONLY'=> 'Pristup samo za čitanje',
'ROLE_FORUM_STANDARD'=> 'Standardan pristup',
'ROLE_MOD_FULL'=> 'Moderator/ica sa svim ovlastima/pravima',
'ROLE_MOD_QUEUE'=> 'Moderator/ica za “čekanje”',
'ROLE_MOD_SIMPLE'=> 'Jednostavan/na moderator/ica',
'ROLE_MOD_STANDARD'=> 'Standardan/na moderator/ica',
'ROLE_USER_FULL'=> 'Sve mogućnosti',
'ROLE_USER_LIMITED'=> 'Ograničene mogućnosti',
'ROLE_USER_NOAVATAR'=> 'Bez avatara',
'ROLE_USER_NOPM'=> 'Bez privatnih poruka',
'ROLE_USER_STANDARD'=> 'Standardne mogućnosti',
'ROLE_DESCRIPTION_ADMIN_FORUM'=> 'Može pristupiti upravljanju forumom i postavkama forumskih dopuštenja.',
'ROLE_DESCRIPTION_ADMIN_FULL'=> 'Ima pristup svim administratorskim funkcijama foruma.<br />Nije preporučljivo.',
'ROLE_DESCRIPTION_ADMIN_STANDARD'=> 'Ima pristup gotovo svim administratorskim mogućnostima, ali nema dopuštenje za korištenje servera odnosno alata povezanih sa sistemom.',
'ROLE_DESCRIPTION_ADMIN_USERGROUP'=> 'Može upravljati grupama i korisnicima/ama: može mijenjati dopuštenja, postavke, upravljati isključivanje te statusima.',
'ROLE_DESCRIPTION_FORUM_BOT'=> 'Ovaj set dopuštenja [preporučen je za] namijenjen je robotima/paucima.',
'ROLE_DESCRIPTION_FORUM_FULL'=> 'Može koristiti sve forumske mogućnosti, uključujući postanje obavijesti i tema označenih kao “važno”. Također može ignorirati zadani razmak postanja.<br />Nije preporučljivo za obične korisnike/ce.',
'ROLE_DESCRIPTION_FORUM_LIMITED'=> 'Može koristiti neke od forumskih mogućnosti, no, ne može dodavati privitke odnosno ikone postanja.',
'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'=> 'Isto kao i <em>Ograničen pristup</em>, ali može kreirati ankete.',
'ROLE_DESCRIPTION_FORUM_NOACCESS'=> 'Niti može pristupiti forumu niti ga može vidjeti.',
'ROLE_DESCRIPTION_FORUM_ONQUEUE'=> 'Može koristiti većinu forumskih mogućnosti, uključujući privitke, ali mu/joj postove i teme mora odobriti moderator/ica.',
'ROLE_DESCRIPTION_FORUM_POLLS'=> 'Isto kao i <em>Standardan pristup</em>, ali može kreirati ankete.',
'ROLE_DESCRIPTION_FORUM_READONLY'=> 'Može pregledavati forum, ali ne može postati [kreirati nove teme/odgovarati na postove].',
'ROLE_DESCRIPTION_FORUM_STANDARD'=> 'Može koristiti većinu forumskih mogućnosti, uključujući privitke i izbrisivanje vlastitih tema, ali ne može zaključavati teme niti može kreirati ankete.',
'ROLE_DESCRIPTION_MOD_FULL'=> 'Može koristiti sve moderatorske funkcije, uključujući isključivanje.',
'ROLE_DESCRIPTION_MOD_QUEUE'=> 'Može koristiti <em>Moderation Queue</em> [dio na kojem se nalazi lista tema/postova koji čekaju odobrenje] kako bi mogao/la (ne)odobravati odnosno uređivati postove, ali ne može koristiti ništa drugo.',
'ROLE_DESCRIPTION_MOD_SIMPLE'=> 'Može koristiti samo osnovne radnje vezane uz moderiranje. Ne može slati upozorenja i ne može koristiti <em>Moderation Queue</em> [dio na kojem se nalazi lista tema/postova koji čekaju odobrenje].',
'ROLE_DESCRIPTION_MOD_STANDARD'=> 'Može koristiti većinu moderatorskih mogućnosti, ali ne može isključivati korisnike/ce niti može mijenjati autore/ice postova.',
'ROLE_DESCRIPTION_USER_FULL'=> 'Može koristiti sve dostupne forumske mogućnosti vezane uz korisnike/ce, uključujući promjene korisničkog imena i ignoriranje zadanog razmaka postanja.<br />Nije preporučljivo.',
'ROLE_DESCRIPTION_USER_LIMITED'=> 'Može koristiti neke od mogućnosti korisnika/ca, no, ne može koristiti privitke, e-mailiranje odnosno instant poruke.',
'ROLE_DESCRIPTION_USER_NOAVATAR'=> 'Ima postavljene ograničavajuće mogućnosti i nema dopuštenje korištenja avatara.',
'ROLE_DESCRIPTION_USER_NOPM'=> 'Ima postavljene ograničavajuće mogućnosti i nema dopuštenje korištenja privatnih poruka.',
'ROLE_DESCRIPTION_USER_STANDARD'=> 'Može koristiti većinu, ali ne sve, mogućnosti korisnika/ca. Ne može promijeniti korisničko ime niti može ignorirati zadani razmaka postanja.',
'ROLE_DESCRIPTION_EXPLAIN'=> 'Možeš unijeti kratko objašnjenje što set dopuštenja radi odnosno čemu služi. Tekst koji (ovdje) uneseš bit će prikazan i prilikom prikazivanja dopuštenja.',
'ROLE_DESCRIPTION_LONG'=> 'Opis seta dopuštenja je predugačak, može sadržavati maksimalno 4000 znakova.',
'ROLE_DETAILS'=> 'Detalji seta dopuštenja',
'ROLE_EDIT_SUCCESS'=> 'Set dopuštenja ja uređen.',
'ROLE_NAME'=> 'Ime seta dopuštenja',
'ROLE_NAME_ALREADY_EXIST'=> 'Set dopuštenja nazvan <strong>%s</strong> već postoji za specificiran tip dopuštenja.',
'ROLE_NOT_ASSIGNED'=> 'Set pravila nije dodijeljen niti jednom/j korisniku/ci.',

'SELECTED_FORUM_NOT_EXIST'=> 'Izabran/odabran(i) forum(i) ne postoji(e).',
'SELECTED_GROUP_NOT_EXIST'=> 'Izabrana(e)/odabrana(e) grupa(e) ne postoji(e).',
'SELECTED_USER_NOT_EXIST'=> 'Izabrano(a)/odabrano(a) korisničko(a) ime(na) ne postoji(e).',
'SELECT_FORUM_SUBFORUM_EXPLAIN'=> 'Uz izabran forum, bit će odabrani i svi podforumi.',
'SELECT_ROLE'=> 'Izaberi set dopuštenja',
'SELECT_TYPE'=> 'Izaberi tip',
'SET_PERMISSIONS'=> 'Postavi dopuštenja',
'SET_ROLE_PERMISSIONS'=> 'Postavi set dopuštenja',
'SET_USERS_PERMISSIONS'=> 'Postavi korisnička dopuštenja',
'SET_USERS_FORUM_PERMISSIONS'=> 'Postavi forumska dopuštenja',

'TRACE_DEFAULT'=> 'Zadano, svako dopuštenje postavljeno je na <samp>NE</samp> (u biti, nepostavljeno). Dopuštenja mogu biti prepisana drugim postavkama.',
'TRACE_FOR'=> 'Potraži',
'TRACE_GLOBAL_SETTING'=> '%s (globalno)',
'TRACE_GROUP_NEVER_TOTAL_NEVER'=> 'Dopuštenja grupe su postavljena na <samp>NIKAD</samp> kao krajnji rezultat pa će biti zadržan stari rezultat.',
'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'=> 'Dopuštenja grupe za ovaj forum postavljena su na <samp>NIKAD</samp> kao krajnji rezultat pa će biti zadržan stari rezultat.',
'TRACE_GROUP_NEVER_TOTAL_NO'=> 'Dopuštenja grupe su postavljena na <samp>NIKAD</samp> što će postati nova ukupna vrijednost jer ona još nije postavljena (postavi/postavljeno na <samp>NE</samp>).',
'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'=> 'Dopuštenja grupe za ovaj forum postavljena su na <samp>NIKAD</samp> što će postati nova ukupna vrijednost jer ona još nije postavljena (postavi/postavljeno na <samp>NE</samp>).',
'TRACE_GROUP_NEVER_TOTAL_YES'=> 'Dopuštenja grupe su postavljena na <samp>NIKAD</samp> što će prepisati ukupno <samp>DA</samp> u <samp>NIKAD</samp> za ovog/u korisnika/cu.',
'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'=> 'Dopuštenja grupe za ovaj forum postavljena su na <samp>NIKAD</samp> što će prepisati ukupno <samp>DA</samp> u <samp>NIKAD</samp> za ovog/u korisnika/cu.',
'TRACE_GROUP_NO'=> 'Dopuštenja grupe su postavljena na <samp>NE</samp> pa će biti zadržana stara ukupna vrijednost.',
'TRACE_GROUP_NO_LOCAL'=> 'Dopuštenja grupe za ovaj forum postavljena su na <samp>NE</samp> pa će biti zadržana stara ukupna vrijednost.',
'TRACE_GROUP_YES_TOTAL_NEVER'=> 'Dopuštenja grupe su postavljena na <samp>DA</samp> ali ukupno <samp>NIKAD</samp> ne može biti prepisano.',
'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'=> 'Dopuštenja grupe za ovaj forum postavljena su na <samp>DA</samp> ali ukupno <samp>NIKAD</samp> ne može biti prepisano.',
'TRACE_GROUP_YES_TOTAL_NO'=> 'Dopuštenja grupe su postavljena na <samp>DA</samp> što će postati ukupna nova vrijednost jer ona još nije postavljena (postavi/postavljeno na <samp>NE</samp>).',
'TRACE_GROUP_YES_TOTAL_NO_LOCAL'=> 'Dopuštenja grupe za ovaj forum postavljena su na <samp>DA</samp> što će postati ukupna nova vrijednost jer ona još nije postavljena (postavi/postavljeno na <samp>NE</samp>).',
'TRACE_GROUP_YES_TOTAL_YES'=> 'Dopuštenja grupe su postavljena na <samp>DA</samp> (a) i ukupna dopuštenja su već postavljena na <samp>DA/samp>, pa će ukupan rezultat biti zadržan.',
'TRACE_GROUP_YES_TOTAL_YES_LOCAL'=> 'Dopuštenja grupe za ovaj forum postavljena su na <samp>DA</samp> (a) i ukupna dopuštenja su već postavljena na <samp>DA/samp>, pa će ukupan rezultat biti zadržan.',
'TRACE_PERMISSION'=> 'Potraži dopuštenja - %s',
'TRACE_RESULT'=> 'Potraži rezultat',
'TRACE_SETTING'=> 'Potraži postavke',
'TRACE_USER_GLOBAL_YES_TOTAL_YES'=> 'Forumska nezavisna korisnička dopuštenja postavljena su na <samp>DA</samp>, no, kako su ukupna dopuštenja već postavljena na <samp>DA</samp>, rezultat će biti zadržan. %sPotraži globalna dopuštenja%s',
'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'=> 'Forumska nezavisna korisnička dopuštenja postavljena su na <samp>DA</samp>, što će prepisati trenutan lokalni rezultat <samp>NIKAD</samp>. %sPotraži globalna dopuštenja%s',
'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'=> 'Forumska nezavisna korisnička dopuštenja postavljena su na <samp>NIKAD</samp>, što neće utjecati na lokalna dopuštenja. %sPotraži globalna dopuštenja%s',
'TRACE_USER_FOUNDER'=> 'Kako korisnik/ca ima status osnivača/ice, administratorska dopuštenja su zadano postavljena na <samp>DA</samp>.',
'TRACE_USER_KEPT'=> 'Korisnička dopuštenja su postavljena na <samp>NE</samp> pa će stara vrijednost biti zadržana.',
'TRACE_USER_KEPT_LOCAL'=> 'Korisnička dopuštenja za ovaj forum postavljena su na <samp>NE</samp> pa će stara vrijednost biti zadržana.',
'TRACE_USER_NEVER_TOTAL_NEVER'=> 'Kako su korisnička dopuštenja postavljena na <samp>NIKAD</samp>, a i ukupna vrijednost je postavljena na <samp>NIKAD</samp>, ništa neće biti promijenjeno.',
'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'=> 'Kako su korisnička dopuštenja za ovaj forum postavljena na <samp>NIKAD</samp>, a i ukupna vrijednost je postavljena na <samp>NIKAD</samp>, ništa neće biti promijenjeno.',
'TRACE_USER_NEVER_TOTAL_NO'=> 'Korisnička dopuštenja su postavljena na <samp>NIKAD</samp> što će postati ukupna vrijednost jer je bilo postavljeno na <samp>NE</samp>.',
'TRACE_USER_NEVER_TOTAL_NO_LOCAL'=> 'Korisnička dopuštenja za ovaj forum postavljena su na <samp>NIKAD</samp> što će postati ukupna vrijednost jer je bilo postavljeno na <samp>NE</samp>.',
'TRACE_USER_NEVER_TOTAL_YES'=> 'Korisnička dopuštenja su postavljena na <samp>NIKAD</samp> što će prepisati prethodno <samp>DA</samp>.',
'TRACE_USER_NEVER_TOTAL_YES_LOCAL'=> 'Korisnička dopuštenja za ovaj forum postavljena su na <samp>NIKAD</samp> što će prepisati prethodno <samp>DA</samp>.',
'TRACE_USER_NO_TOTAL_NO'=> 'Kako su korisnička dopuštenja postavljena na <samp>NO</samp>, a i ukupna vrijednost je postavljena na <samp>NO</samp>, bit će postavljeno na <samp>NIKAD</samp>.',
'TRACE_USER_NO_TOTAL_NO_LOCAL'=> 'Kako su korisnička dopuštenja za ovaj forum postavljena na <samp>NO</samp>, a i ukupna vrijednost je postavljena na <samp>NO</samp>, bit će postavljeno na <samp>NIKAD</samp>.',
'TRACE_USER_YES_TOTAL_NEVER'=> 'Korisnička dopuštenja su postavljena na <samp>DA</samp>, ali ukupno <samp>NIKAD</samp> ne može biti prepisano.',
'TRACE_USER_YES_TOTAL_NEVER_LOCAL'=> 'Korisnička dopuštenja za ovaj forum postavljena su na <samp>DA</samp>, ali ukupno <samp>NIKAD</samp> ne može biti prepisano.',
'TRACE_USER_YES_TOTAL_NO'=> 'Korisnička dopuštenja su postavljena na <samp>DA</samp> što će postati ukupna vrijednost jer je bilo postavljeno na <samp>NE</samp>.',
'TRACE_USER_YES_TOTAL_NO_LOCAL'=> 'Korisnička dopuštenja za ovaj forum postavljena su na <samp>DA</samp> što će postati ukupna vrijednost jer je bilo postavljeno na <samp>NE</samp>.',
'TRACE_USER_YES_TOTAL_YES'=> 'Kako su korisnička dopuštenja postavljena na <samp>DA</samp>, a i ukupna vrijednost je postavljena na <samp>DA</samp>, ništa neće biti promijenjeno.',
'TRACE_USER_YES_TOTAL_YES_LOCAL'=> 'Kako su korisnička dopuštenja za ovaj forum postavljena na <samp>DA</samp>, a i ukupna vrijednost je postavljena na <samp>DA</samp>, ništa neće biti promijenjeno.',
'TRACE_WHO'=> 'Tko',
'TRACE_TOTAL'=> 'Ukupno',

'USERS_NOT_ASSIGNED'=> 'Set pravila nije dodijeljen niti jednom/j korisniku/ci.',
'USER_IS_MEMBER_OF_DEFAULT'=> 'je član/ica sljedećih zadanih grupa',
'USER_IS_MEMBER_OF_CUSTOM'=> 'je član/ica sljedećih prilagođenih grupa',

'VIEW_ASSIGNED_ITEMS'=> 'Prikaz dodijeljenih stavki',
'VIEW_LOCAL_PERMS'=> 'Lokalna dopuštenja',
'VIEW_GLOBAL_PERMS'=> 'Globalna dopuštenja',
'VIEW_PERMISSIONS'=> 'Prikaz dopuštenja',

'WRONG_PERMISSION_TYPE'=> 'Izabran je krivi tip dopuštenja.',
));
?>