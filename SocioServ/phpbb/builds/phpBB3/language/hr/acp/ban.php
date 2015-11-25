<?php
/** 
*
* acp_ban [Croatian]
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

// Banning
$lang = array_merge($lang, array(
'1_HOUR'=> '1 sat',
'30_MINS'=> '30 minuta',
'6_HOURS'=> '6 sati',

'ACP_BAN_EXPLAIN'=> 'Ovdje možeš upravljati isključivanjem korisnika/ca i to preko korisničkog imena, IP odnosno e-mail adrese.<br />Time ćeš onemogućiti pristupanje korisniku/ci bilo kojem dijelu foruma.<br />Ako želiš, možeš dati kratak [maksimalno 3000 znakova] razlog isključenja [što će biti evidentirano u administratorskim logovima].<br />Možeš određivati dužinu isključenja, npr.  ukoliko želiš isključiti korisnika/cu, ne na npr. 3 mjeseca, već npr. do određenog datuma, izabrat ćeš <span style="text-decoration: underline;">Do -&gt;</span> te unijeti datum u <kbd>GGGG-MM-DD</kbd> formatu.',

'BAN_EXCLUDE'=> 'Izuzmi od isključenja',
'BAN_LENGTH'=> 'Trajanje isključenja',
'BAN_REASON'=> 'Razlog isključenja',
'BAN_GIVE_REASON'=> 'Razlog isključenja koji će biti dan isključenom/j',
'BAN_UPDATE_SUCCESSFUL'=> 'Lista isključenih je ažurirana.',

'EMAIL_BAN'=> 'Isključenje jedne ili više e-mail adresa',
'EMAIL_BAN_EXCLUDE_EXPLAIN'=> 'Omogući ovu opciju ukoliko želiš izuzeti unesenu/e e-mail adresu/e od svih trenutnih isključenja.',
'EMAIL_BAN_EXPLAIN'=> 'Ukoliko želiš unijeti više e-mail adresa, unesi svaku u novi redak.<br />Možeš koristiti * kao zamjenski znak, npr. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, itd.',
'EMAIL_NO_BANNED'=> 'Nema isključenih e-mail adresa.',
'EMAIL_UNBAN'=> 'Od-isključi odnosno od-izuzmi e-mail adrese',
'EMAIL_UNBAN_EXPLAIN'=> 'Možeš od-isključiti odnosno od-izuzeti više e-mail adresa  odjednom koristeći odgovarajuću kombinaciju miša+tipkovnice&preglednika.<br />Izuzete e-mail adrese bit će označene.',

'IP_BAN'=> 'Isključenje jedne ili više IP adresa',
'IP_BAN_EXCLUDE_EXPLAIN'=> 'Omogući ovu opciju ukoliko želiš izuzeti unesenu/e IP adresu/e od svih trenutnih isključenja.',
'IP_BAN_EXPLAIN'=> 'Ukoliko želiš unijeti više IP adresa, unesi svaku u novi redak.<br />Za određivanje raspona IP adresa, početak i kraj odvoji rastavnicom (-). Možeš koristiti * kao zamjenski znak.',
'IP_HOSTNAME'=> 'IP adrese/imena host(ov)a',
'IP_NO_BANNED'=> 'Nema isključenih IP adresa.',
'IP_UNBAN'=> 'Od-isključi odnosno od-izuzmi IP adrese',
'IP_UNBAN_EXPLAIN'=> 'Možeš od-isključiti odnosno od-izuzeti više IP adresa  odjednom koristeći odgovarajuću kombinaciju miša+tipkovnice&preglednika.<br />Izuzete IP adrese bit će označene.',

'LENGTH_BAN_INVALID'=> 'Datum mora biti u formatu: <kbd>GGGG-MM-DD</kbd>.',

'PERMANENT'=> 'Stalno',

'UNTIL'=> 'Do',
'USER_BAN'=> 'Isključenje jednog ili više korisničkih imena',
'USER_BAN_EXCLUDE_EXPLAIN'=> 'Omogući ovu opciju ukoliko želiš izuzeti uneseno/e korisničko/a ime/na od svih trenutnih isključenja.',
'USER_BAN_EXPLAIN'=> 'Ukoliko želiš unijeti više korisničkih imena, unesi svako u novi redak.<br />Za automatsko dodavanje korisničkih imena možeš koristiti <span style="text-decoration: underline;">Pronađi korisničko ime</span> funkciju.',
'USER_NO_BANNED'=> 'Nema isključenih korisničkih imena.',
'USER_UNBAN'=> 'Od-isključi odnosno od-izuzmi korisnička imena',
'USER_UNBAN_EXPLAIN'=> 'Možeš od-isključiti odnosno od-izuzeti više korisničkih imena odjednom koristeći odgovarajuću kombinaciju miša+tipkovnice&preglednika.<br />Izuzeta korisnička imena bit će označena.',
));
?>