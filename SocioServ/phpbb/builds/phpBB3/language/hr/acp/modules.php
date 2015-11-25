<?php
/** 
*
* acp_modules [Croatian]
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
'ACP_MODULE_MANAGEMENT_EXPLAIN'=> 'Ovdje možeš upravljati svim vrstama modula.<br />AF ima trorazinsku  izborničku strukturu [Kategorija -> Kategorija -> Modul] čime ostalo ima dvorazinsku izborničku strukturu [Kategorija -> Modul] koja mora biti zadržana.<br />Ukoliko onemogućiš odnosno izbrišeš module odgovorne za upravljanje modulima, nastat će problemi.',
'ADD_MODULE'=> 'Dodaj modul',
'ADD_MODULE_CONFIRM'=> 'Jesi li siguran/na da želiš dodati izabran modul izabranim modom?',
'ADD_MODULE_TITLE'=> 'Dodaj modul',

'CANNOT_REMOVE_MODULE'=> 'Modul nije moguće izbrisati jer ima podmodule.<br />Kako bi mogao/la izbrisati modul, prvo moraš izbrisati ili premjestiti sve (njegove) podmodule.',
'CATEGORY'=> 'Kategorija',
'CHOOSE_MODE'=> 'Izaberi mod modula',
'CHOOSE_MODE_EXPLAIN'=> 'Izbor moda modula.',
'CHOOSE_MODULE'=> 'Izaberi modul',
'CHOOSE_MODULE_EXPLAIN'=> 'Izbor datoteke nazvane (ovim) modulom.',
'CREATE_MODULE'=> 'Kreiraj novi modul',

'DEACTIVATED_MODULE'=> 'Deaktiviraj modul',
'DELETE_MODULE'=> 'Izbriši modul',
'DELETE_MODULE_CONFIRM'=> 'Jesi li siguran/na da želiš izbrisati modul?',

'EDIT_MODULE'=> 'Uredi modul',
'EDIT_MODULE_EXPLAIN'=> 'Ovdje možeš unijeti specifične postavke modula.',

'HIDDEN_MODULE'=> 'Skriven modul',

'MODULE'=> 'Modul',
'MODULE_ADDED'=> 'Modul je dodan.',
'MODULE_DELETED'=> 'Modul je izbrisan.',
'MODULE_DISPLAYED'=> 'Prikazivanje modula',
'MODULE_DISPLAYED_EXPLAIN'=> 'Ukoliko ne želiš da ovaj modul bude prikazan, ali ga želiš koristiti, postavi (ovo) na “Ne”.',
'MODULE_EDITED'=> 'Modul je uređen.',
'MODULE_ENABLED'=> 'Omogući modul',
'MODULE_LANGNAME'=> 'Jezično ime modula',
'MODULE_LANGNAME_EXPLAIN'=> 'Unesi prikazano ime modula.<br />Koristi jezičnu konstantu ako je modul povezan s jezičnom datotekom.',
'MODULE_TYPE'=> 'Tip modula',

'NO_CATEGORY_TO_MODULE'=> 'Nije bilo moguće pretvoriti kategoriju u modul.<br />Ukoliko želiš izvesti ovu radnju, moraš izbrisati/premjestiti sve podmodule modula.',
'NO_MODULE'=> 'Nije pronađen niti jedan modul.',
'NO_MODULE_ID'=> 'Modul nije unesen.',
'NO_MODULE_LANGNAME'=> 'Nije uneseno jezično ime modula.',
'NO_PARENT'=> 'Bez krovnog modula',

'PARENT'=> 'Krovni modul',
'PARENT_NO_EXIST'=> 'Krovni modul ne postoji.',

'SELECT_MODULE'=> 'Izaberi modul',
));
?>