<?php
/** 
*
* acp_bots [Croatian]
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

// Bot settings
$lang = array_merge($lang, array(
'BOTS'=> 'Upravljanje robotima',
'BOTS_EXPLAIN'=> '“Roboti” [“pauci”, “puzači”...], automatizirani agenti, najčešće (su) korišteni od strane pretražnika, a poradi ažuriranja podataka (njihovih) baza.<br />S obzirom da mogu utjecati na niz faktora, poput “povećanja” broja posjetitelja/ica, preopterećivanja resursa, te nepotpuno/netočno indeksirati stranice, ovdje možeš definirati specijalan korisnički tip kako bi se izbjegli navedeni problemi.',
'BOT_ACTIVATE'=> 'Aktiviraj',
'BOT_ACTIVE'=> 'Aktivacija robota',
'BOT_ADD'=> 'Dodaj robota',
'BOT_ADDED'=> 'Robot je dodan.',
'BOT_AGENT'=> 'Agentsko podudaranje',
'BOT_AGENT_EXPLAIN'=> 'Niz podataka koji se podudara s robotovim agentom preglednika.',
'BOT_DEACTIVATE'=> 'Deaktiviraj',
'BOT_DELETED'=> 'Robot je izbrisan.',
'BOT_EDIT'=> 'Uređivanje robota',
'BOT_EDIT_EXPLAIN'=> 'Ovdje možeš dodati/uređivati robote.<br />Možeš definirati <em>agent string</em> (niz podataka agenta) i(li) jednu/više IP adresa [raspon adresa] za slaganje. Budi oprezan/na kod definiranja slaganja <em>agent strings</em> (niza podataka agenta) i(li) adresa.<br />Također možeš odrediti koji će stil i s kojim jezikom robot “vidjeti” [smanjit ćeš bandwidth određivanjem nekog jednostavnog stila].<br />Ne zaboravi postaviti (određena) dopuštenja za korisničku grupu robota.',
'BOT_LANG'=> 'Jezik robota',
'BOT_LANG_EXPLAIN'=> 'Zadani jezik (za) robota.',
'BOT_LAST_VISIT'=> 'Zadnji posjet',
'BOT_IP'=> 'IP adresa robota',
'BOT_IP_EXPLAIN'=> 'Adrese odvoji zarezom.<br />Dopušteno je parcijalno slaganje.',
'BOT_NAME'=> 'Ime robota',
'BOT_NAME_TAKEN'=> 'Naziv je [već] u uporabi te ne može biti korišten za robota.',
'BOT_NAME_EXPLAIN'=> 'Služi samo tebi kao informacija.',
'BOT_NEVER'=> 'Nikad',
'BOT_STYLE'=> 'Stil robota',
'BOT_STYLE_EXPLAIN'=> 'Zadani stil (za) robota.',
'BOT_UPDATED'=> 'Robot je ažuriran.',

'ERR_BOT_AGENT_MATCHES_UA'=> 'Agent robota je sličan jednome kojeg trenutno koristiš, prilagodi agenta za (ovog) robota.',
'ERR_BOT_NO_IP'=> 'IP adresa je neispravna ili je greška kod/s imenom hosta.',
'ERR_BOT_NO_MATCHES'=> 'Moraš unijeti barem agenta ili IP adresu.',

'NO_BOT'=> 'Nije pronađen niti jedan robot sa spcificiranim ID-em.',
'NO_BOT_GROUP'=> 'Nije bilo moguće pronaći grupu robota.',
));
?>