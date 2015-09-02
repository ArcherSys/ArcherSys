<?php
/** 
*
* groups [Croatian]
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
'ALREADY_DEFAULT_GROUP'=> 'Grupa već je zadana grupa.',
'ALREADY_IN_GROUP'=> 'Već jesi član/ica izabrane grupe.',
'ALREADY_IN_GROUP_PENDING'=> 'Već jesi zatražio/la pristupanje grupi.',

'CHANGED_DEFAULT_GROUP'=> 'Zadana grupa je promijenjena.',

'GROUP_AVATAR'=> 'Avatar', 
'GROUP_CHANGE_DEFAULT'=> 'Jesi li siguran/na da svoje zadano članstvo želiš premjestiti u grupu “%s”?',
'GROUP_CLOSED'=> 'Zatvorena',
'GROUP_DESC'=> 'Opis',
'GROUP_HIDDEN'=> 'Skrivena',
'GROUP_INFORMATION'=> 'Info', 
'GROUP_IS_CLOSED'=> 'Grupa je zatvorenog tipa, automatsko pristupanje nije moguće.',
'GROUP_IS_FREE'=> 'Grupa je otvorenog tipa, novi/e članovi/ce su dobrodošli/e.', 
'GROUP_IS_HIDDEN'=> 'Grupa je skrivenog tipa, samo članovi/ce grupe mogu vidjeti Članstvo.',
'GROUP_IS_OPEN'=> 'Grupa je otvorenog tipa, moguće je prijaviti se za pristup.',
'GROUP_IS_SPECIAL'=> 'Grupa je specijalnog tipa [grupe takvog tipa administriraju administratori/ce].', 
'GROUP_JOIN'=> 'Pristupi grupi',
'GROUP_JOIN_CONFIRM'=> 'Jesi li siguran/na da želiš pristupiti grupi?',
'GROUP_JOIN_PENDING'=> 'Zahtjev za pristupanje grupi',
'GROUP_JOIN_PENDING_CONFIRM'=> 'Jesi li siguran/na da želiš pristupiti grupi?',
'GROUP_JOINED'=> 'Od sada si član/ica grupe.',
'GROUP_JOINED_PENDING'=> 'Uspješno si se prijavio/la za pristupanje grupi.<br />Ostaje ti pričekati da moderatori/ca grupe odobri zahtjev.',
'GROUP_LIST'=> 'Administriranje korisnika/ca',
'GROUP_MEMBERS'=> 'Članstvo',
'GROUP_NAME'=> 'Naziv',
'GROUP_OPEN'=> 'Otvorena',
'GROUP_RANK'=> 'Status', 
'GROUP_RESIGN_MEMBERSHIP'=> 'Istupi',
'GROUP_RESIGN_MEMBERSHIP_CONFIRM'=> 'Jesi li siguran/na da želiš istupiti iz grupe?',
'GROUP_RESIGN_PENDING'=> 'Istupi',
'GROUP_RESIGN_PENDING_CONFIRM'=> 'Jesi li siguran/na da želiš istupiti iz grupe?',
'GROUP_RESIGNED_MEMBERSHIP'=> 'Više nisi član/ica grupe.',
'GROUP_RESIGNED_PENDING'=> 'Više nisi član/ica grupe.',
'GROUP_TYPE'=> 'Tip',
'GROUP_UNDISCLOSED'=> 'Skrivena',
'FORUM_UNDISCLOSED'=> 'Moderira(nje) skriven/e(og/ih) forum/e(a)',

'LOGIN_EXPLAIN_GROUP'=> 'Za pregledavanje detalja o grupi, moraš se prijaviti.',

'NO_LEADERS'=> 'Nisi vođa niti jedne grupe.',
'NOT_LEADER_OF_GROUP'=> 'Radnja ne može biti izvršena jer nisi vođa grupe.',
'NOT_MEMBER_OF_GROUP'=> 'Radnja ne može biti izvršena jer nisi član/ica grupe.',
'NOT_RESIGN_FROM_DEFAULT_GROUP'=> 'Istupanje iz zadane grupe nije dopušteno.',

'PRIMARY_GROUP'=> 'Glavna grupa',

'REMOVE_SELECTED'=> 'Izbriši označeno',

'USER_GROUP_CHANGE'=> 'Iz “%1$s” grupe u “%2$s”',
'USER_GROUP_DEMOTE'=> 'Degradiranje u običnog/u korisnika/cu',
'USER_GROUP_DEMOTE_CONFIRM'=> 'Jesi li siguran/na da se želiš “spustiti na nižu razinu” - iz statusa vođe grupe u status običnog/e korisnika/ce?',
'USER_GROUP_DEMOTED'=> 'Više nisi vođa grupe.',
));
?>