<?php
/** 
*
* acp_users [Croatian]
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
'ADMIN_SIG_PREVIEW'=> 'Prikaz potpisa',
'AT_LEAST_ONE_FOUNDER'=> 'Ne možeš promijeniti ovog/u korisnika/cu iz osnivača/ice u običnog/u korisnika/cu.<br />Na forumu mora postajati najmanje jedno korisničko ime s osnivačkim statusom.<br />Ukoliko želiš promijeniti status (korisnika/ce) iz osnivača/ice u neki drugi, prvo moraš promovirati (nekog/u) drugog/u korisnika/cu u osnivača/icu.',

'BAN_ALREADY_ENTERED'=> 'Isključenje je već izvršeno po ovom kriteriju poradi čega lista isključenja nije ažurirana.',
'BAN_SUCCESSFUL'=> 'Isključenje je izvršeno.',

'CANNOT_BAN_FOUNDER'=> 'Nemaš dopuštenje za isključivanje korisničkog/ih računa osnivača/ica foruma.',
'CANNOT_BAN_YOURSELF'=> 'Nemaš dopuštenje za isključivanje korisničkog računa samog/e sebe.',
'CANNOT_DEACTIVATE_BOT'=> 'Nemaš dopuštenje za deaktiviranje računa robota.<br />Umjesto toga, možeš deaktivirati samog/e robota/e.',
'CANNOT_DEACTIVATE_FOUNDER'=> 'Nemaš dopuštenje za deaktiviranje korisničkog/ih računa osnivača/ica foruma.',
'CANNOT_DEACTIVATE_YOURSELF'=> 'Nemaš dopuštenje za deaktiviranje korisničkog računa samog/e sebe.',
'CANNOT_FORCE_REACT_BOT'=> 'Nemaš dopuštenje za forsiranje deaktivacije računa robota.<br />Umjesto toga, možeš deaktivirati samog/e robota/e.',
'CANNOT_FORCE_REACT_FOUNDER'=> 'Nemaš dopuštenje za forsiranje deaktivacije korisničkog/ih računa osnivača/ica foruma.',
'CANNOT_FORCE_REACT_YOURSELF'=> 'Nemaš dopuštenje za forsiranje deaktivacije korisničkog računa samog/e sebe.',
'CANNOT_REMOVE_ANONYMOUS'=> 'Ne možeš izbrisati korisničke račune gostiju.',
'CANNOT_REMOVE_YOURSELF'=> 'Nemaš dopuštenje za izbrisivanje korisničkog računa samog/e sebe.',
'CANNOT_SET_FOUNDER_IGNORED' => 'Ne možeš promovirati ignorirane korisnik/ce u osnivače.',
'CANNOT_SET_FOUNDER_BOT'=> 'Ne možeš promovirati ignorirane korisnik/ce u osnivače.',
'CANNOT_SET_FOUNDER_INACTIVE'=> 'Kako bi mogao/la promovirati korisnika/cu u osnivača/icu, prvo moraš aktivirati njegov/njezin korisnički račun [samo aktivirani/e korisnici/e (njihovi korisnički računi) mogu biti promovirani].',
'CONFIRM_EMAIL_EXPLAIN'=> 'Potvrdi e-mail adresu samo ako si ju [iznad] promijenio/la.',

'DELETE_POSTS'=> 'Izbriši postove',
'DELETE_USER'=> 'Izbriši korisnički račun',
'DELETE_USER_EXPLAIN'=> 'Ova operacija ne može biti poništena što će reći da “nema povratka na prijašnje stanje” ukoliko izbrišeš (neki/nečiji) korisnički račun.',

'FORCE_REACTIVATION_SUCCESS'=> 'Reaktivacija je (is)forsirana.',
'FOUNDER'=> 'Osnivač/ica',
'FOUNDER_EXPLAIN'=> 'Osnivač/ice imaju sve administratorske ovlasti, ne mogu biti isključeni/e te njihov korisnički račun ne može biti mijenjan od strane ne-osnivača/ica.',

'GROUP_APPROVE'=> 'Odobri korisnika/cu',
'GROUP_DEFAULT'=> 'Postavi grupu zadanom za korisnika/cu',
'GROUP_DELETE'=> 'Isključi korisnika/cu iz grupe',
'GROUP_DEMOTE'=> 'Smijeni s položaja vođe grupe',
'GROUP_PROMOTE'=> 'Postavi za vođu grupe',

'IP_WHOIS_FOR'=> 'IP whois za %s',

'LAST_ACTIVE'=> 'Zadnji put aktivan/na',

'MOVE_POSTS_EXPLAIN'=> 'Izaberi forum u koji želiš premjestiti sve postove korisnika/ce.',

'NO_SPECIAL_RANK'=> 'Nije dodijeljen poseban status',
'NOT_MANAGE_FOUNDER'=> 'Pokušao/la si promijeniti korisnički račun osnivača/ice.<br />Samo osnivači/ce mogu mijenjati korisničke račune (ostalih) osnivača/ica.',

'QUICK_TOOLS'=> 'Brz(o)Bir',

'REGISTERED'=> 'Registriran/a',
'REGISTERED_IP'=> 'Registriran/a s IP adresom',
'RETAIN_POSTS'=> 'Zadrži postove',

'SELECT_FORM'=> 'Izaberi formu',
'SELECT_USER'=> 'Izaberi korisnika/cu',

'USER_ADMIN'=> 'Upravljanje korisnicima/ama',
'USER_ADMIN_ACTIVATE'=> 'Aktiviraj korisnički račun',
'USER_ADMIN_ACTIVATED'=> 'Korisnički račun je aktiviran.',
'USER_ADMIN_AVATAR_REMOVED'=> 'Avatar je uklonjen iz korisničkog računa.',
'USER_ADMIN_BAN_EMAIL'=> 'Isključi po e-mail adresi',
'USER_ADMIN_BAN_EMAIL_REASON'=> 'E-mail adresa je isključena putem upravljanja korisnicima/ama.',
'USER_ADMIN_BAN_IP'=> 'Isključi po IP adresi',
'USER_ADMIN_BAN_IP_REASON'=> 'IP adresa je isključena putem upravljanja korisnicima/ama.',
'USER_ADMIN_BAN_NAME_REASON'=> 'Korisničko ime je isključeno putem upravljanja korisnicima/ama.',
'USER_ADMIN_BAN_USER'=> 'Isključi po korisničkom imenu',
'USER_ADMIN_DEACTIVATE'=> 'Deaktiviraj korisnički račun',
'USER_ADMIN_DEACTIVED'=> 'Korisnički račun je deaktiviran.',
'USER_ADMIN_DEL_ATTACH'=> 'Izbriši sve privitke',
'USER_ADMIN_DEL_AVATAR'=> 'Izbriši avatar',
'USER_ADMIN_DEL_POSTS'=> 'Izbriši sve postove',
'USER_ADMIN_DEL_SIG'=> 'Izbriši potpis',
'USER_ADMIN_EXPLAIN'=> 'Ovdje možeš mijenjati korisničke informacije te određene posebne postavke.',
'USER_ADMIN_FORCE'=> 'Prinudi (na) reaktivaciju',
'USER_ADMIN_MOVE_POSTS'=> 'Premjesti sve postove',
'USER_ADMIN_SIG_REMOVED'=> 'Potpis je uklonjen iz korisničkog računa.',
'USER_ATTACHMENTS_REMOVED'=> 'Izbrisani su svi privitci koje je postao/la (ovaj) korisnik/ca.',
'USER_AVATAR_UPDATED'=> 'Ažurirani su detalji avatara korisnika/ce.',
'USER_CUSTOM_PROFILE_FIELDS'=> 'Prilagođena korisnička polja',
'USER_DELETED'=> 'Korisnički račun je izbrisan.',
'USER_GROUP_ADD'=> 'Dodaj korisnika/cu grupi',
'USER_GROUP_NORMAL'=> 'Korisnik/ca je član/ica sljedećih običnih grupa',
'USER_GROUP_PENDING'=> 'Korisnik/ca je “na čekanju” u sljedećim korisničkim grupama',
'USER_GROUP_SPECIAL'=> 'Korisnik/ca je član/ica sljedećih posebnih (specijalnih) grupa',
'USER_NO_ATTACHMENTS' => 'Ne dodanih privitaka za prikaz.',
'USER_OVERVIEW_UPDATED'=> 'Korisnički detalji (su) ažurirani.',
'USER_POSTS_DELETED'=> 'Izbrisani su svi postovi (ovog/e) korisnika/ce.',
'USER_POSTS_MOVED'=> 'Postovi korisnika/ce premješteni su u odredišni forum.',
'USER_PREFS_UPDATED'=> 'Korisničke postavke (su) ažurirane.',
'USER_PROFILE'=> 'Korisnički profil',
'USER_PROFILE_UPDATED'=> 'Korisnički profil je ažuriran.',
'USER_RANK'=> 'Status korisnika/ce ',
'USER_RANK_UPDATED'=> 'Status korisnika/ce je ažuriran.',
'USER_SIG_UPDATED'=> 'Potpis korisnika/ce je ažuriran.',
'USER_TOOLS'=> 'Osnovne radnje',
));
?>