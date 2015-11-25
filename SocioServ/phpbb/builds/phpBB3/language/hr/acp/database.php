<?php
/** 
*
* acp_database [Croatian]
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

// Database Backup/Restore
$lang = array_merge($lang, array(
'ACP_BACKUP_EXPLAIN'=> 'Ovdje možeš backupirati [napraviti kopiju] sve phpBB podatke.<br />Datoteku možeš pohraniti lokalno [<samp>store/</samp>] ili ju direktno preuzeti.<br />Ukoliko server podržava tu opciju, možeš koristiti gzip odnosno bilo koju drugu ponuđenu kompresiju kako bi smanjio/la  veličinu datoteke prije preuzimanja.',
'ACP_RESTORE_EXPLAIN'=> 'Ovdje možeš izvršiti potpun povrat svih phpBB tablica iz [ranije] spremljene datoteke.<br />Ukoliko server podržava tu opciju, možeš uploadati gzip ili bzip2 kompresiranu tekst datoteku koja će automatski biti dekompresirana.<br /><strong>UPOZORENJE:</strong> ovime ćeš prepisati postojeće podatke.<br />Proces može [po]trajati poduže, stoga, ostani na ovoj stranici dok ne bude zgotovljen.<br />Zaštitne kopije [backupi] pohranjene su u <samp>store/</samp> mapi i pretpostavlja se da su generirane phpBB backup funkcijom.<br />Vraćanje zaštitnih kopija koje nisu kreirane ugrađenim sistemom kreiranja zaštitnih kopija može rezultirati njihovim funkcioniranjem, ali i ne mora.',

'BACKUP_DELETE'=> 'Backup datoteka je izbrisana.',
'BACKUP_INVALID'=> 'Datoteka izabrana za backup je neispravna.',
'BACKUP_OPTIONS'=> 'Backup postavke',
'BACKUP_SUCCESS'=> 'Backup datoteka je kreirana.',
'BACKUP_TYPE'=> 'Vrsta backupa',

'DATABASE'=> 'Alati za bazu',
'DATA_ONLY'=> 'Samo podatci',
'DELETE_BACKUP'=> 'Izbriši backup',
'DELETE_SELECTED_BACKUP'=> 'Jesi li siguran/na da želiš izbrisati backup?',
'DESELECT_ALL'=> 'Odoznači sve',
'DOWNLOAD_BACKUP'=> 'Preuzmi backup',

'FILE_TYPE'=> 'Vrsta datoteke',
'FULL_BACKUP'=> 'Potpun',

'RESTORE_FAILURE'=> 'Backup datoteka može biti neispravna.',
'RESTORE_OPTIONS'=> 'Restore postavke',
'RESTORE_SUCCESS'=> 'Baza je uspješno povraćena.<br />Forum bi sada trebao biti u stanju u kakvom je bio kada je napravljen backup.',

'SELECT_ALL'=> 'Označi sve',
'SELECT_FILE'=> 'Označi datoteku',
'START_BACKUP'=> 'Započni backup',
'START_RESTORE'=> 'Započni restore',
'STORE_AND_DOWNLOAD'=> 'Pohrani i preuzmi',
'STORE_LOCAL'=> 'Pohrani datoteku lokalno',
'STRUCTURE_ONLY'=> 'Samo struktura',

'TABLE_SELECT'=> 'Izbor tablica',
'TABLE_SELECT_ERROR'=> 'Moraš izabrati najmanje jednu tablicu.',
));
?>