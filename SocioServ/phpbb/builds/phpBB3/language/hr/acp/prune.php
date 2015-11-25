<?php
/** 
*
* acp_prune [Croatian]
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

// User pruning
$lang = array_merge($lang, array(
'ACP_PRUNE_USERS_EXPLAIN'=> 'Ovdje možeš izbrisati [ili deaktivirati] korisničke račune i to na više načina: po broju postova, (ne)aktivnosti(ma) i sl, a možeš ih [načine] (i) kombinirati [npr. izbrisati korisničke račune s manje od 10 postova, a koji su zadnji put bili u uporabi 01. siječnja 2006].<br />Ukoliko izbrišeš korisnički račun, imaj na umu da nema undo [povratne] funkcije što znači da ne možeš [po]vratiti korisnički račun koji izbrišeš.',

'DEACTIVATE_DELETE'=> 'Deaktiviraj ili izbriši',
'DEACTIVATE_DELETE_EXPLAIN'=> 'Izaberi želiš li samo deaktivirati ili (baš) izbrisati korisnički račun [nema undo (povratne) funkcije].',
'DELETE_USERS'=> 'Izbriši',
'DELETE_USER_POSTS'=> 'Izbriši (i) postove izbrisanog/ih korisničkog/ih računa',
'DELETE_USER_POSTS_EXPLAIN' => 'Izbrisat će (i) sve postove izbrisanog/ih korisničkog/ih računa [samo kod izbrisivanja korisničkog/ih računa, nema efekta kod deaktiviranja korisničkog/ih računa].',

'JOINED_EXPLAIN'=> 'Unesi datum u <kbd>GGGG-MM-DD</kbd> formatu.',

'LAST_ACTIVE_EXPLAIN'=> 'Unesi datum u <kbd>GGGG-MM-DD</kbd> formatu.',

'PRUNE_USERS_LIST'=> 'Korisnički računi koji će biti izbrisani odnosno deaktivirani',
'PRUNE_USERS_LIST_DELETE'=> 'U skladu s odabranim kriterijima, sljedeći korisnički računi će biti izbrisani.',
'PRUNE_USERS_LIST_DEACTIVATE'=> 'U skladu s odabranim kriterijima, sljedeći korisnički računi će biti deaktivirani.',

'SELECT_USERS_EXPLAIN'=> 'Unesi (više) korisničkih imena [na njih će biti primijenjeni gornji kriteriji].',

'USER_DEACTIVATE_SUCCESS'=> 'Korisnički račun/i je/su deaktiviran/i.',
'USER_DELETE_SUCCESS'=> 'Korisnički račun/i je/su izbrisan/i.',
'USER_PRUNE_FAILURE'=> 'Niti jedno korisničko ime ne odgovara odabranim kriterijima.',

'WRONG_ACTIVE_JOINED_DATE'=> 'Datum je krivo unesen, treba biti unesen u <kbd>GGGG-MM-DD</kbd> formatu.',
));

// Forum Pruning
$lang = array_merge($lang, array(
'ACP_PRUNE_FORUMS_EXPLAIN'=> 'Ovdje možeš izbrisati teme u kojima nije bilo novih postova određen broj dana odnosno teme koje nisu pregledane određen broj dana.<br />Ukoliko ne uneseš broj, sve teme bit će izbrisane.<br />Zadano, neće biti izbrisane teme s (još) aktivnim anketama odnosno teme s “važnim” [“važno”] i “obavijesnim” [(globalna) obavijest] postovima.',

'FORUM_PRUNE'=> 'Izbrisivanje foruma',

'NO_PRUNE'=> 'Niti jedan/na post/tema/forum nije izbrisan.',

'SELECTED_FORUM'=> 'Izabran forum',
'SELECTED_FORUMS'=> 'Odabrani forumi',

'POSTS_PRUNED'=> 'Izbrisano postova',
'PRUNE_ANNOUNCEMENTS'=> 'Izbriši “obavijesne” postove/teme',
'PRUNE_FINISHED_POLLS'=> 'Izbriši završene ankete',
'PRUNE_FINISHED_POLLS_EXPLAIN'=> 'Izbrisuje teme s anketama koje su završile.',
'PRUNE_FORUM_CONFIRM'=> 'Jesi li siguran/na da želiš izbrisati odabrane forume? <br />Ukoliko izbrišeš odabrane forume, imaj na umu da nema undo [povratne] funkcije što znači da ne možeš [po]vratiti teme/postove koje izbrišeš.',
'PRUNE_NOT_POSTED'=> 'Dan/a od zadnjeg posta(nja)',
'PRUNE_NOT_VIEWED'=> 'Dan/a od zadnjeg pregled(avanj)a',
'PRUNE_OLD_POLLS'=> 'Izbriši stare ankete',

'PRUNE_OLD_POLLS_EXPLAIN'=> 'Izbrisuje teme s anketama u kojima nije glasovano određen broj dana.',
'PRUNE_STICKY'=> 'Izbriši “važne” postove/teme',
'PRUNE_SUCCESS'=> 'Izbrisivanje foruma je izvršeno.',

'TOPICS_PRUNED'=> 'Izbrisano tema',
));
?>