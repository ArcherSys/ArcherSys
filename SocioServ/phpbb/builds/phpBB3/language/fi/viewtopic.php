<?php
/** 
*
* viewtopic [Finnish [Fin]]
*
* @package language
* @copyright (c) 2006 phpBB Group 
* @author 2006-11-14 - Lurttinen@phpbbsuomi.com
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

$lang = array_merge($lang, array(
	'ATTACHMENT'						=> 'Liitteet',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Liitetiedostot eivät ole käytettävissä.',

	'BOOKMARK_ADDED'		=> 'Kirjanmerkki lisätty.',
	'BOOKMARK_REMOVED'		=> 'Kirjanmerkki poistettu.',
	'BOOKMARK_TOPIC'		=> 'Lisää kirjanmerkki',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Poista kirjanmerkeistä',
	'BUMPED_BY'				=> '%1$s on tönäissyt viestiketjua viimeksi klo %2$s',
	'BUMP_TOPIC'			=> 'Tönäise viestiä',

	'CODE'					=> 'Koodi',

	'DELETE_TOPIC'			=> 'Poista viestiketju',
	'DOWNLOAD_NOTICE'		=> 'Sinulla ei ole tarvittavia oikeuksia nähdäksesi tämän viestin liitetiedostoja.',

	'EDITED_TIMES_TOTAL'	=> 'Viimeksi muokannut %1$s päivämäärä %2$s, muokattu yhteensä %3$d kertaa',
	'EDITED_TIME_TOTAL'		=> 'Viimeksi muokannut %1$s päivämäärä %2$s, muokattu yhteensä %3$d kerran',
	'EMAIL_TOPIC'			=> 'Lähetä kaverille',
	'ERROR_NO_ATTACHMENT'	=> 'Valitsemaasi liitetiedostoa ei ole olemassa',

	'FILE_NOT_FOUND_404'	=> 'Tiedostoa <strong>%s</strong> ei ole.',
	'FORK_TOPIC'			=> 'Kopioi viestiketju',

	'LINKAGE_FORBIDDEN'		=> 'Sinulla ei ole oikeuksia nähdä, ladata tai linkittää tältä sivulta.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Teille on ilmoitettu tästä viestistä. Kirjaudu sisään nähdäksesi sen.',
	'LOGIN_VIEWTOPIC'		=> 'Ylläpito on määrännyt, että sinun pitää olla rekisteröitynyt ja kirjautunut sisään nähdäksesi tämän viestin.',

	'MAKE_ANNOUNCE'				=> 'Muuta tiedotteeksi',
	'MAKE_GLOBAL'				=> 'Muuta yleistiedotteeksi',
	'MAKE_NORMAL'				=> 'Muuta normaaliksi',
	'MAKE_STICKY'				=> 'Muuta pysyväksi',
	'MAX_OPTIONS_SELECT'		=> 'Voit valita maksimissaan <strong>%d</strong> vaihtoehtoa',
	'MAX_OPTION_SELECT'			=> 'Voit valita vain <strong>1</strong> vaihtoehdon',
	'MISSING_INLINE_ATTACHMENT'	=> 'Liitetiedostoa <strong>%s</strong> ei ole enään saatavilla',
	'MOVE_TOPIC'				=> 'Siirrä viestiketju',

	'NO_ATTACHMENT_SELECTED'=> 'Et ole valinnut yhtäkään liitetiedostoa nähtäväksi tai ladattavaksi.',
	'NO_NEWER_TOPICS'		=> 'Tällä alueella ei ole uudempia viestejä',
	'NO_OLDER_TOPICS'		=> 'Tällä alueella ei ole vanhempia viestjä',
	'NO_UNREAD_POSTS'		=> 'Tässä viestiketjussa ei ole uusia viestejä.',
	'NO_VOTE_OPTION'		=> 'Anna äänestykselle vaihtoehto.',
	'NO_VOTES'				=> 'Ei ääniä',

	'POLL_ENDED_AT'			=> 'Äänestys päättyi %s',
	'POLL_RUN_TILL'			=> 'Äänestys on voimassa %s asti',
	'POLL_VOTED_OPTION'		=> 'Äänestit tätä vaihtoehtoa',
	'PRINT_TOPIC'			=> 'Tulostusnäkymä',

	'QUICK_MOD'				=> 'Valvojan työkalut',
	'QUOTE'					=> 'Lainaa',

	'REPLY_TO_TOPIC'		=> 'Vastaa viestiin',
	'RETURN_POST'			=> '%sPalaa viestiin%s',

	'SUBMIT_VOTE'			=> 'Äänestä',

	'TOTAL_VOTES'			=> 'Ääniä yhteensä',

	'UNLOCK_TOPIC'			=> 'Avaa viestiketju',

	'VIEW_INFO'				=> 'Viestin yksityiskohdat',
	'VIEW_NEXT_TOPIC'		=> 'Seuraava viestiketju',
	'VIEW_PREVIOUS_TOPIC'	=> 'Edellinen viestiketju',
	'VIEW_RESULTS'			=> 'Näytä tulokset',
	'VIEW_TOPIC_POST'		=> '1 viesti',
	'VIEW_TOPIC_POSTS'		=> '%d viestiä',
	'VIEW_UNREAD_POST'		=> 'Ensimmäinen lukematon viesti',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Äänestyksesi on kirjattu',

));

?>