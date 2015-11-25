<?php
/** 
*
* mcp [Croatian]
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
'ACTION'=> 'Radnja',
'ACTION_NOTE'=> 'Radnja/Bilješka',
'ADD_FEEDBACK'=> 'Slanje povratnog odgovora',
'ADD_FEEDBACK_EXPLAIN'=> 'Ukoliko želiš napisati nešto vezano uz gornje, ispuni donju formu.<br />Koristi običan [plain] tekst jer HTML, BBKod i sl. nisu dopušteni.',
'ADD_WARNING'=> 'Upozoravanje korisnika/ca',
'ADD_WARNING_EXPLAIN'=> 'Ukoliko želiš upozoriti korisnika/cu, ispuni donju formu.<br />Koristi običan [plain] tekst jer HTML, BBKod i sl. nisu dopušteni.',
'ALL_ENTRIES'=> 'Svi unosi',
'ALL_NOTES_DELETED'=> 'Bilješke su izbrisane.',
'ALL_REPORTS'=> 'Sve prijave',
'ALREADY_REPORTED'=> 'Post je već prijavljen.',
'ALREADY_WARNED'=> 'Upozorenje za ovaj post je već dano.',
'APPROVE'=> 'Odobri',
'APPROVE_POST'=> 'Odobri post',
'APPROVE_POST_CONFIRM'=> 'Jesi li siguran/na da želiš odobriti post?',
'APPROVE_POSTS'=> 'Odobri postove',
'APPROVE_POSTS_CONFIRM'=> 'Jesi li siguran/na da želiš odobriti postove?',

'CANNOT_MOVE_SAME_FORUM'=> 'Temu ne možeš premjestiti u forum u kojem se već nalazi.',
'CANNOT_WARN_ANONYMOUS'=> 'Gosta/e ne možeš upozoriti.',
'CANNOT_WARN_SELF'=> 'Samog/u sebe ne možeš upozoriti.',
'CAN_LEAVE_BLANK'=> 'Može ostati prazno.',
'CHANGE_POSTER'=> 'Promijeni autora/icu',
'CLOSE_REPORT'=> 'Zaključi prijavu',
'CLOSE_REPORT_CONFIRM'=> 'Jesi li siguran/na da želiš zaključiti prijavu?',
'CLOSE_REPORTS'=> 'Zaključi prijave',
'CLOSE_REPORTS_CONFIRM'=> 'Jesi li siguran/na da želiš zaključiti prijave?',

'DELETE_POSTS'=> 'Izbriši postove',
'DELETE_POSTS_CONFIRM'=> 'Jesi li siguran/na da želiš izbrisati postove?',
'DELETE_POST_CONFIRM'=> 'Jesi li siguran/na da želiš izbrisati post?',
'DELETE_REPORT'=> 'Izbriši prijavu',
'DELETE_REPORT_CONFIRM'=> 'Jesi li siguran/na da želiš izbrisati prijavu?',
'DELETE_REPORTS'=> 'Izbriši prijave',
'DELETE_REPORTS_CONFIRM'=> 'Jesi li siguran/na da želiš izbrisati prijave?',
'DELETE_SHADOW_TOPIC'=> 'Izbriši temu',
'DELETE_TOPICS'=> 'Izbriši teme',
'DELETE_TOPICS_CONFIRM'=> 'Jesi li siguran/na da želiš izbrisati teme?',
'DELETE_TOPIC_CONFIRM'=> 'Jesi li siguran/na da želiš izbrisati temu?',
'DISAPPROVE'=> 'Neodobri',
'DISAPPROVE_REASON'=> 'Razlog neodobrenja',
'DISAPPROVE_POST'=> 'Neodobri post',
'DISAPPROVE_POST_CONFIRM'=> 'Jesi li siguran/na da želiš neodobriti post?',
'DISAPPROVE_POSTS'=> 'Neodobri postove',
'DISAPPROVE_POSTS_CONFIRM'=> 'Jesi li siguran/na da želiš neodobriti postove?',
'DISPLAY_LOG'=> 'Prikaži unose',
'DISPLAY_OPTIONS'=> 'Opcije prikaza',

'EMPTY_REPORT'=> 'Prilikom odabira razloga, moraš navesti i objašnjenje.',
'EMPTY_TOPICS_REMOVED_WARNING'=> 'Jedna ili više tema su izbrisane iz baze jer su bile/ostale prazne.',

'FEEDBACK'=> 'Povratni odgovor(i)',
'FORK'=> 'Kopiraj',
'FORK_TOPIC'=> 'Kopiraj temu',
'FORK_TOPIC_CONFIRM'=> 'Jesi li siguran/na da želiš kopirati temu?',
'FORK_TOPICS'=> 'Kopiraj označene teme',
'FORK_TOPICS_CONFIRM'=> 'Jesi li siguran/na da želiš kopirati teme?',
'FORUM_DESC'=> 'Opis',
'FORUM_NAME'=> 'Naziv',
'FORUM_NOT_EXIST'=> 'Forum koji si izabrao/la ne postoji.',
'FORUM_NOT_POSTABLE'=> 'Po forumu koji si izabrao/la se ne može postati.',
'FORUM_STATUS'=> 'Status',
'FORUM_STYLE'=> 'Stil',

'GLOBAL_ANNOUNCEMENT'=> 'Globalna obavijest',

'IP_INFO'=> 'IP info',
'IPS_POSTED_FROM'=> '(Ostale) IP adrese s kojih je ovaj/ova član/ica postao/la',

'LATEST_LOGS'=> 'Zadnjih 5 logiranih radnji',
'LATEST_REPORTED'=> 'Zadnjih 5 prijava',
'LATEST_UNAPPROVED'=> 'Zadnjih 5 postova koji čekaju odobrenje',
'LATEST_WARNING_TIME'=> 'Zadnje dano upozorenje',
'LATEST_WARNINGS'=> 'Zadnjih 5 upozorenja',
'LEAVE_SHADOW'=> 'Neka tema/e ostane/u i u starom forumu.',
'LIST_REPORT'=> '1 prijava',
'LIST_REPORTS'=> '%d prijava/e',
'LOCK'=> 'Zaključaj',
'LOCK_POST_POST'=> 'Zaključaj post',
'LOCK_POST_POST_CONFIRM'=> 'Jesi li siguran/na da želiš zaključati [onemogućiti naknadno uređivanje] post?',
'LOCK_POST_POSTS'=> 'Zaključaj post(ove)',
'LOCK_POST_POSTS_CONFIRM'=> 'Jesi li siguran/na da želiš zaključati [onemogućiti naknadno uređivanje] postove?',
'LOCK_TOPIC_CONFIRM'=> 'Jesi li siguran/na da želiš zaključati temu?',
'LOCK_TOPICS'=> 'Zaključaj teme',
'LOCK_TOPICS_CONFIRM'=> 'Jesi li siguran/na da želiš zaključati teme?',
'LOGS_CURRENT_TOPIC'=> 'Pregledava logove od:',
'LOGIN_EXPLAIN_MCP'=> 'Za moderiranje foruma, moraš se prijaviti.',
'LOGVIEW_VIEWTOPIC'=> 'Pogledaj temu',
'LOGVIEW_VIEWLOGS'=> 'Pogledaj logove',
'LOGVIEW_VIEWFORUM'=> 'Pogledaj forum',
'LOOKUP_ALL'=> 'Potraži sve IP adrese',
'LOOKUP_IP'=> 'Potraži IP adresu',

'MARKED_NOTES_DELETED'=> 'Bilješke su izbrisane.',
'MCP_ADD'=> 'Upozori',
'MCP_BAN'=> 'Isključivanje',
'MCP_BAN_EMAILS'=> 'E-mailovi',
'MCP_BAN_IPS'=> 'IP adrese',
'MCP_BAN_USERNAMES'=> 'Korisnička imena',
'MCP_LOGS'=> 'Logovi',
'MCP_LOGS_FRONT'=> 'Naslovna',
'MCP_LOGS_FORUM_VIEW'=> 'Logovi foruma',
'MCP_LOGS_TOPIC_VIEW'=> 'Logovi tema',
'MCP_MAIN'=> 'Početna',
'MCP_MAIN_FORUM_VIEW'=> 'Forumi',
'MCP_MAIN_FRONT'=> 'Naslovna',
'MCP_MAIN_POST_DETAILS'=> 'Detalji posta',
'MCP_MAIN_TOPIC_VIEW'=> 'Teme',
'MCP_MAKE_ANNOUNCEMENT'=> 'Promijeni u obavijest',
'MCP_MAKE_ANNOUNCEMENT_CONFIRM'=> 'Jesi li siguran/na da temu želiš promijeniti u obavijest?',
'MCP_MAKE_ANNOUNCEMENTS'=> 'Promijeni u obavijesti',
'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Jesi li siguran/na da teme želiš promijeniti u obavijesti?',
'MCP_MAKE_GLOBAL'=> 'Promijeni u globalnu obavijest',
'MCP_MAKE_GLOBAL_CONFIRM'=> 'Jesi li siguran/na da temu želiš promijeniti u globalnu obavijest?',
'MCP_MAKE_GLOBALS'=> 'Promijeni u globalne obavijesti',
'MCP_MAKE_GLOBALS_CONFIRM'=> 'Jesi li siguran/na da teme želiš promijeniti u globalne obavijesti?',
'MCP_MAKE_STICKY'=> 'Promijeni u “važno”',
'MCP_MAKE_STICKY_CONFIRM'=> 'Jesi li siguran/na da temu želiš promijeniti u “važno”?',
'MCP_MAKE_STICKIES'=> 'Promijeni u “važno”',
'MCP_MAKE_STICKIES_CONFIRM'=> 'Jesi li siguran/na da teme želiš promijeniti u “važno”?',
'MCP_MAKE_NORMAL'=> 'Promijeni u normalnu temu',
'MCP_MAKE_NORMAL_CONFIRM'=> 'Jesi li siguran/na da temu želiš promijeniti u normalnu temu?',
'MCP_MAKE_NORMALS'=> 'Promijeni u normalne teme',
'MCP_MAKE_NORMALS_CONFIRM'=> 'Jesi li siguran/na da teme želiš promijeniti u normalne teme?',
'MCP_NOTES'=> 'Korisnici/e',
'MCP_NOTES_FRONT'=> 'Naslovna',
'MCP_NOTES_USER'=> 'Detalji',
'MCP_POST_REPORTS'=> 'Prijave vezane uz post',
'MCP_REPORTS'=> 'Prijave',
'MCP_REPORT_DETAILS'=> 'Detalji',
'MCP_REPORTS_CLOSED'=> 'Zaključene prijave',
'MCP_REPORTS_CLOSED_EXPLAIN'=> 'Lista prijava postova koje su obrađene.',
'MCP_REPORTS_OPEN'=> 'Otvorene prijave',
'MCP_REPORTS_OPEN_EXPLAIN'=> 'Lista prijava postova koje treba obraditi.',
'MCP_QUEUE'=> 'Odobrenja',
'MCP_QUEUE_APPROVE_DETAILS'=> 'Odobri detalje',
'MCP_QUEUE_UNAPPROVED_POSTS'=> 'Postovi',
'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'=> 'Lista postova koji čekaju odobrenje prije nego što postanu vidljivi ostalim korisnicima/ama.',
'MCP_QUEUE_UNAPPROVED_TOPICS'=> 'Teme',
'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'=> 'Lista tema koje čekaju odobrenje prije nego što postanu vidljive ostalim korisnicima/ama.',
'MCP_VIEW_USER'=> 'Upozorenja određenom/oj korisniku/ci',
'MCP_WARN'=> 'Upozorenja',
'MCP_WARN_FRONT'=> 'Naslovna',
'MCP_WARN_LIST'=> 'Lista upozorenja',
'MCP_WARN_POST'=> 'Upozorenja za određen post',
'MCP_WARN_USER'=> 'Upozori',
'MERGE_POSTS'=> 'Spoji postove',
'MERGE_POSTS_CONFIRM'=> 'Jesi li siguran/na da želiš spojiti postove?',
'MERGE_TOPIC_EXPLAIN'=> 'Korištenjem donje forme možeš spojiti označene postove - pripojiti ih drugoj temi.<br />Postovi će biti pripojeni novoj temi na način da će izgledati kao da su tamo originalno postani.<br />Trebaš unijeti ID odredišne teme ili kliknuti na “Izaberi temu” kako bi odabrao/la odredišnu temu.',
'MERGE_TOPIC_ID'=> 'ID odredišne teme',
'MERGE_TOPICS'=> 'Spoji teme',
'MERGE_TOPICS_CONFIRM'=> 'Jesi li siguran/na da želiš spojiti teme?',
'MODERATE_FORUM'=> 'Moderiranje foruma',
'MODERATE_TOPIC'=> 'Moderiranje tema',
'MODERATE_POST'=> 'Moderiranje postova',
'MOD_OPTIONS'=> 'Moderatorske opcije',
'MORE_INFO'=> 'Daljnje informacije',
'MOST_WARNINGS'=> 'Korisnici/e s najviše upozorenja',
'MOVE_TOPIC_CONFIRM'=> 'Jesi li siguran/na da želiš premjestiti temu u drugi forum?',
'MOVE_TOPICS'=> 'Premjesti teme',
'MOVE_TOPICS_CONFIRM'=> 'Jesi li siguran/na da želiš premjestiti teme u drugi forum?',

'NOTIFY_POSTER_APPROVAL'=> 'Obavijesti autora/icu o odobrenju.',
'NOTIFY_POSTER_DISAPPROVAL' => 'Obavijesti autora/icu o neodobrenju.',
'NOTIFY_USER_WARN'=> 'Obavijesti korisnika/cu o upozorenju.',
'NOT_MODERATOR'=> 'Nisi moderator/ica ovog foruma.',
'NO_DESTINATION_FORUM'=> 'Izaberi odredišni forum.',
'NO_DESTINATION_FORUM_FOUND'=> 'Nema dostupnog odredišnog foruma.',
'NO_ENTRIES'=> 'Nema logova za ovaj period.',
'NO_FEEDBACK'=> 'Nema povratnih odgovora za ovog/u korisnika/cu.',
'NO_FINAL_TOPIC_SELECTED'=> 'Za spajanje postova moraš izabrati odredišnu temu.',
'NO_MATCHES_FOUND'=> 'Ništa nije pronađeno.',
'NO_POST'=> 'Moraš izabrati post ukoliko želiš upozoriti korisnika/cu zbog posta.',
'NO_POST_REPORT'=> 'Ovaj post nije prijavljen.',
'NO_POST_SELECTED'=> 'Moraš odabrati najmanje jedan post kako bi izvršio/la radnju.',
'NO_REASON_DISAPPROVAL'=> 'Moraš dati smislen razlog neodobravanja.',
'NO_REPORT'=> '/',
'NO_REPORTS'=> '/',
'NO_REPORT_SELECTED'=> 'Moraš odabrati najmanje jednu prijavu kako bi izvršio/la radnju.',
'NO_TOPIC_ICON'=> '/',
'NO_TOPIC_SELECTED'=> 'Moraš odabrati najmanje jednu temu kako bi izvršio/la radnju.',
'NO_TOPICS_QUEUE'=> '/',

'ONLY_TOPIC'=> 'Samo tema/u “%s”',
'OTHER_USERS'=> 'Korisnici/e koji/e (su) posta(li)ju s ove IP adrese',

'POSTER'=> 'Poster/ica',
'POSTS_APPROVED_SUCCESS'=> 'Postovi su odobreni.',
'POSTS_DELETED_SUCCESS'=> 'Postovi su izbrisani iz baze.',
'POSTS_DISAPPROVED_SUCCESS'=> 'Postovi su neodobreni.',
'POSTS_LOCKED_SUCCESS'=> 'Postovi su zaključani.',
'POSTS_MERGED_SUCCESS'=> 'Postovi su spojeni.',
'POSTS_UNLOCKED_SUCCESS'=> 'Postovi su otključani.',
'POSTS_PER_PAGE'=> 'Postova po stranici',
'POSTS_PER_PAGE_EXPLAIN'=> '[0 = svi.]',
'POST_APPROVED_SUCCESS'=> 'Post je odobren.',
'POST_DELETED_SUCCESS'=> 'Post je izbrisan iz baze.',
'POST_DISAPPROVED_SUCCESS'=> 'Post je neodobren.',
'POST_LOCKED_SUCCESS'=> 'Post je zaključan.',
'POST_NOT_EXIST'=> 'Post ne postoji.',
'POST_REPORTED_SUCCESS'=> 'Post je prijavljen.',
'POST_UNLOCKED_SUCCESS'=> 'Post je otključan.',

'READ_USERNOTES'=> 'Bilješke',
'READ_WARNINGS'=> 'Upozorenja',
'REPORTER'=> 'Prijavljivač/ica',
'REPORTED'=> 'Prijavljeno',
'REPORTED_BY'=> 'Prijavio/la',
'REPORTED_ON_DATE'=> 'dana',
'REPORTS_CLOSED_SUCCESS'=> 'Prijave su zaključene.',
'REPORTS_DELETED_SUCCESS'=> 'Prijave su izbrisane.',
'REPORTS_TOTAL'=> 'Ukupno ima(š) za obraditi <strong>%d</strong> prijave/a.',
'REPORTS_ZERO_TOTAL'=> 'Nema prijava za pregled.',
'REPORT_CLOSED'=> 'Prijava je već zaključena.',
'REPORT_CLOSED_SUCCESS'=> 'Prijava je zaključena.',
'REPORT_DELETED_SUCCESS'=> 'Prijava je izbrisana.',
'REPORT_DETAILS'=> 'Detalji',
'REPORT_MESSAGE'=> 'Prijavi',
'REPORT_MESSAGE_EXPLAIN'=> 'Donjom formom možeš prijaviti poruku administratoru/ici.<br>Forma služi samo za prijavu poruka koje krše pravila foruma.',
'REPORT_NOTIFY'=> 'Obavijesti me',
'REPORT_NOTIFY_EXPLAIN'=> 'Dobit ćeš obavijest nakon što prijava bude obrađena.',
'REPORT_POST_EXPLAIN'=> 'Donjom formom možeš prijaviti post administratoru/ici.<br>Forma služi samo za prijavu postova koji krše pravila foruma.',
'REPORT_REASON'=> 'Razlog prijave',
'REPORT_TIME'=> 'Vrijeme prijave',
'REPORT_TOTAL'=> 'Ukupno ima(š) za obraditi <strong>1</strong> prijavu.',
'RESYNC'=> 'Resinkroniziraj',
'RETURN_MESSAGE'=> 'Klikni %sovdje%s za povratak na poruku.',
'RETURN_NEW_FORUM'=> 'Klikni %sovdje%s za povratak na forum.',
'RETURN_NEW_TOPIC'=> 'Klikni %sovdje%s za povratak na temu.',
'RETURN_POST'=> 'Klikni %sovdje%s za povratak na post.',
'RETURN_QUEUE'=> 'Klikni %sovdje%s za povratak na moderiranje.',
'RETURN_REPORTS'=> 'Klikni %sovdje%s za povratak na prijave.',
'RETURN_TOPIC_SIMPLE'=> 'Klikni %sovdje%s za povratak na temu.',

'SEARCH_POSTS_BY_USER'=> 'Pretraživanje',
'SELECT_ACTION'=> 'Izaberi radnju',
'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'=> 'Izaberi forum u kojem želiš prikazati globalnu obavijest.',
'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'=> 'Jedna ili više odabranih tema su globalne obavijesti.<br />Izaberi forum u kojem ju/ih želiš prikazati.',
'SELECT_MERGE'=> 'Izaberi za spajanje',
'SELECT_TOPICS_FROM'=> 'Izaberi teme',
'SELECT_TOPIC'=> 'Izaberi temu',
'SELECT_USER'=> 'Izaberi korisnika/cu',
'SORT_ACTION'=> 'Log(ovi)',
'SORT_DATE'=> 'Datum',
'SORT_IP'=> 'IP adresa',
'SORT_WARNINGS'=> 'Upozorenja',
'SPLIT_AFTER'=> 'Podijeli od označenog posta',
'SPLIT_FORUM'=> 'Forum za novu temu',
'SPLIT_POSTS'=> 'Podijeli označene postove',
'SPLIT_SUBJECT'=> 'Novi naslov teme',
'SPLIT_TOPIC_ALL'=> 'Podijeli od označenih postova',
'SPLIT_TOPIC_ALL_CONFIRM'=> 'Jesi li siguran/na da želiš podijeliti temu?',
'SPLIT_TOPIC_BEYOND'=> 'Podijeli temu na označenom postu',
'SPLIT_TOPIC_BEYOND_CONFIRM'=> 'Jesi li siguran/na da želiš podijeliti temu?',
'SPLIT_TOPIC_EXPLAIN'=> 'Korištenjem donje forme možeš podijeliti temu na dvije; označavanjem određenih postova ili dijeljenjem od označenog posta...',

'THIS_POST_IP'=> 'IP posta',
'TOPICS_APPROVED_SUCCESS'=> 'Teme su odobrene.',
'TOPICS_DELETED_SUCCESS'=> 'Teme su izbrisane iz baze.',
'TOPICS_DISAPPROVED_SUCCESS'=> 'Teme su neodobrene.',
'TOPICS_FORKED_SUCCESS'=> 'Teme su kopirane.',
'TOPICS_LOCKED_SUCCESS'=> 'Teme su zaključane.',
'TOPICS_MOVED_SUCCESS'=> 'Teme su premještene.',
'TOPICS_RESYNC_SUCCESS'=> 'Teme su resinkronizirane.',
'TOPICS_TYPE_CHANGED'=> 'Tip(ovi) teme(a) je(su) promijenjen(i).',
'TOPICS_UNLOCKED_SUCCESS'=> 'Teme su otključane.',
'TOPIC_APPROVED_SUCCESS'=> 'Tema je odobrena.',
'TOPIC_DELETED_SUCCESS'=> 'Tema je izbrisana iz baze.',
'TOPIC_DISAPPROVED_SUCCESS'=> 'Tema je neodobrena.',
'TOPIC_FORKED_SUCCESS'=> 'Tema je kopirana.',
'TOPIC_LOCKED_SUCCESS'=> 'Tema je zaključana.',
'TOPIC_MOVED_SUCCESS'=> 'Tema je premještena.',
'TOPIC_NOT_EXIST'=> 'Tema koju si izabrao/la ne postoji.',
'TOPIC_RESYNC_SUCCESS'=> 'Tema je resinkronizirana.',
'TOPIC_SPLIT_SUCCESS'=> 'Tema je podijeljena.',
'TOPIC_TIME'=> 'Vrijeme',
'TOPIC_TYPE_CHANGED'=> 'Tip teme je promijenjen.',
'TOPIC_UNLOCKED_SUCCESS'=> 'Tema je otključana.',
'TOTAL_WARNINGS'=> 'Ukupno upozorenja',

'UNAPPROVED_POSTS_TOTAL'=> 'Ukupno <strong>%d</strong> postova čeka odobrenje.',
'UNAPPROVED_POSTS_ZERO_TOTAL'=> 'Nema postova koji čekaju odobrenje.',
'UNAPPROVED_POST_TOTAL'=> 'Ukupno <strong>1</strong> post čeka odobrenje.',
'UNLOCK'=> 'Otključaj',
'UNLOCK_POST'=> 'Otključaj',
'UNLOCK_POST_EXPLAIN'=> 'Dopusti uređivanje',
'UNLOCK_POST_POST'=> 'Otključaj',
'UNLOCK_POST_POST_CONFIRM'=> 'Jesi li siguran/na da želiš dopustiti naknadno uređivanje posta?',
'UNLOCK_POST_POSTS'=> 'Otključaj',
'UNLOCK_POST_POSTS_CONFIRM'=> 'Jesi li siguran/na da želiš dopustiti naknadno uređivanje postova?',
'UNLOCK_TOPIC'=> 'Otključaj',
'UNLOCK_TOPIC_CONFIRM'=> 'Jesi li siguran/na da želiš otključati temu?',
'UNLOCK_TOPICS'=> 'Otključaj',
'UNLOCK_TOPICS_CONFIRM'=> 'Jesi li siguran/na da želiš otključati teme?',
'USER_CANNOT_POST'=> 'Ne možeš postati po ovom forumu.',
'USER_CANNOT_REPORT'=> 'Ne možeš prijavljivati postove na ovom forumu.',
'USER_FEEDBACK_ADDED'=> 'Povratan odgovor poslan/dodan.',
'USER_WARNING_ADDED'=> 'Korisnik/ca je upozoren/a.',

'VIEW_DETAILS'=> 'Detalji',

'WARNED_USERS'=> 'Upozoreni/e korisnici/e',
'WARNED_USERS_EXPLAIN'=> 'Popis korisnika/ca s danim im upozorenjima.',
'WARNING_PM_BODY'=> 'Donje je upozorenje koje ti je dao/la administrator(ica)/moderator(ica) foruma.[quote]%s[/quote]',
'WARNING_PM_SUBJECT'=> 'Upozorenje od strane administratora(ice)/moderatora(ice) foruma',
'WARNING_POST_DEFAULT'=> 'Ovo je upozorenje vezano uz tvoj post: %s.',
'WARNINGS_ZERO_TOTAL'=> 'Nema postojećih upozorenja.',

'YOU_SELECTED_TOPIC'=> 'Izabrao/la si temu broj %d: %s.',

'report_reasons'=> array(
'TITLE'=> array(
'WAREZ'=> 'Warez',
'SPAM'=> 'Spam',
'OFF_TOPIC'=> 'Off topic',
'OTHER'=> 'Ostalo',
),
'DESCRIPTION' => array(
'WAREZ'=> 'Post sadrži link(ove) na ilegalne/piratske programe.',
'SPAM'=> 'Post je reklama Web stranice(a)/proizvoda.',
'OFF_TOPIC'=> 'Post je off topic.',
'OTHER'=> 'Post ne spada u niti jednu od postojećih kategorija.',
)
),
));
?>