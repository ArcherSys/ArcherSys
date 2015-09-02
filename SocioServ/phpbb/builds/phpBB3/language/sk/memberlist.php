<?php
/**
*
* memberlist [Slovak]
*
* @package language
* @version $Id: memberlist.php,v 1.34 2007/07/22 13:14:36 kellanved Exp $
* @copyright (c) 2005 phpBB Group
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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Najaktívnejší vo fóre',
	'ACTIVE_IN_TOPIC'		=> 'Najaktívnejší v téme',
	'ADD_FOE'				=> 'Pridať ako nepriateľa',
	'ADD_FRIEND'			=> 'Pridať ako priateľa',
	'AFTER'					=> 'Po',

	'ALL'					=> 'Všetci',

	'BEFORE'				=> 'Pred',

	'CC_EMAIL'				=> 'Odoslať sebe kópiu e-mailovej správy',
	'CONTACT_USER'			=> 'Kontakty používateľa',

	'DEST_LANG'				=> 'Jazyk',
	'DEST_LANG_EXPLAIN'		=> 'Vybrať vhodný jazyk (ak je dostupný) pre príjemcu tejto správy.',

	'EMAIL_BODY_EXPLAIN'	=> 'Táto správa bude odoslaná ako čistý text, nevkladajte do nej žiadny kód HTML ani značky BBCode. Ako spätná adresa bude nastavená vašu e-mailová adresa.',
	'EMAIL_DISABLED'		=> 'Prepáčte, všetky funkcie súvisiace s e-mailom boli zakázané.',
	'EMAIL_SENT'			=> 'E-mailová správa bola úspešne odoslaná.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Táto správa bude odoslaná ako čistý text, nevkladajte do nej žiadny kód HTML ani značky BBCode. Pamätajte, že informácie o téme boli automaticky vložené do tejto správy. Ako spätná adresa bude nastavená vašu e-mailová adresa.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Musíte zadať platnú e-mailovú adresu príjemcu.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Pred odoslaním musíte napísať správu.',
	'EMPTY_MESSAGE_IM'		=> 'Pred odoslaním musíte zadať text správy.',
	'EMPTY_NAME_EMAIL'		=> 'Musíte zadať celé meno príjemcu.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Musíte zadať predmet e-mailovej správy.',
	'EQUAL_TO'				=> 'Sa rovná',

	'FIND_USERNAME_EXPLAIN'	=> 'Tento formulár vám pomôže vyhľadať člena fóra. Nemusíte vyplniť všetky polia. Ak viete len časť niektorého z reťazcov, použite <strong>*</strong> ako zástupný znak pre neznámu časť reťazca. Dátum zadávajte v tvare <kbd>YYYY-MM-DD</kbd>, napríklad <samp>2004-02-29</samp>. Na určenie jedného alebo viacerých používateľských mien použite začiarkavacie polia (v závislosti na formulári môže byť zadaných aj viac používateľských mien) a potom pokračujte stlačením tlačidla Vybrať označené, ktoré vás vráti na predchádzajúci formulár.',
	'FLOOD_EMAIL_LIMIT'		=> 'Nemôžete odoslať e-mailovú správu tak skoro po predchádzajúcej. Chvíľu počkajte a skúste to znova.',

	'GROUP_LEADER'			=> 'Moderátor skupiny',

	'HIDE_MEMBER_SEARCH'	=> 'Skryť vyhľadávanie používateľov',

	'IM_ADD_CONTACT'		=> 'Pridať kontakt',
	'IM_AIM'				=> 'Na využívanie tejto funkcie je potrebné mať nainštalovaný AOL Instant Messenger.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Stiahnuť aplikáciu',
	'IM_ICQ'				=> 'Majte na pamäti, že používateľ môže mať nastavené neprijímať správy od neznámych používateľov.',
	'IM_JABBER'				=> 'Majte na pamäti, že používateľ môže mať nastavené neprijímať správy od neznámych používateľov.',
	'IM_JABBER_SUBJECT'		=> 'Toto je automatická správa, prosím neodpovedajte na ňu! Správa od používateľa %1$s na %2$s',
	'IM_MESSAGE'			=> 'Vaša správa',
	'IM_MSNM'				=> 'Na využívanie tejto funkcie je potrebné mať nainštalovaný Windows Messenger.',
	'IM_MSNM_BROWSER'		=> 'Váš prehliadač nepodporuje túto funkciu.',
	'IM_MSNM_CONNECT'		=> 'MSNM nie je pripojený.\nAk chcete pokračovať, musíte sa pripojiť.',
	'IM_NAME'				=> 'Vaše meno',
	'IM_NO_DATA'			=> 'Nie sú dostupné vhodné kontaktné informácie pre tohto používateľa.',
	'IM_NO_JABBER'			=> 'Prepáčte, priame kontaktovanie používateľov prostredníctvom Jabbera nie je povolené. Ak chcete používateľa kontaktovať, musíte mať na vašom počítači nainštalovaného klienta pre Jabber.',
	'IM_RECIPIENT'			=> 'Príjemca',
	'IM_SEND'				=> 'Odoslať správu',
	'IM_SEND_MESSAGE'		=> 'Odoslať správu',
	'IM_SENT_JABBER'		=> 'Vaša správa pre používateľa %1$s bola úspešne odoslaná.',
	'IM_USER'				=> 'Odoslať rýchlu správu',

	'LAST_ACTIVE'				=> 'Posledná aktivita',
	'LESS_THAN'					=> 'Menej ako',
	'LIST_USER'					=> 'Používateľov: 1',
	'LIST_USERS'				=> 'Používateľov: %d',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Na zobrazenie zoznamu moderátorov musíte byť prihlásený.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Na zobrazenie zoznamu používateľov musíte byť prihlásený.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Ak chcete vyhľadávať používateľov, musíte byť prihlásený.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Ak si chcete prezrieť profil, musíte byť prihlásený.',

	'MORE_THAN'				=> 'Viac ako',

	'NO_EMAIL'				=> 'Nemáte oprávnenie odosielať e-mailové správy tomuto používateľovi.',
	'NO_VIEW_USERS'			=> 'Nemáte oprávnenie na zobrazenie zoznamu používateľov alebo ich profilov.',

	'ORDER'					=> 'Usporiadať',
	'OTHER'					=> 'Ostatné',

	'POST_IP'				=> 'Odoslané z IP adresy/domény',

	'RANK'					=> 'Hodnotenie',
	'REAL_NAME'				=> 'Meno príjemcu',
	'RECIPIENT'				=> 'Príjemca',
	'REMOVE_FOE'			=> 'Odstrániť nepriateľa',
	'REMOVE_FRIEND'			=> 'Odstrániť priateľa',

	'SEARCH_USER_POSTS'		=> 'Hľadať všetky príspevky od používateľa',
	'SELECT_MARKED'			=> 'Vybrať označené',
	'SELECT_SORT_METHOD'	=> 'Usporiadať podľa',
	'SEND_AIM_MESSAGE'		=> 'Odoslať správu AIM',
	'SEND_ICQ_MESSAGE'		=> 'Odoslať správu ICQ',
	'SEND_IM'				=> 'Priame posielanie správ',
	'SEND_JABBER_MESSAGE'	=> 'Odoslať správu Jabber',
	'SEND_MESSAGE'			=> 'Súkromná správa',
	'SEND_MSNM_MESSAGE'		=> 'Odoslať správu MSNM/WLM',
	'SEND_YIM_MESSAGE'		=> 'Odoslať správu YIM',
	'SORT_EMAIL'			=> 'E-mailová adresa',
	'SORT_LAST_ACTIVE'		=> 'Posledná aktivita',
	'SORT_POST_COUNT'		=> 'Počet príspevkov',

	'USERNAME_BEGINS_WITH'	=> 'Prvé písmeno používateľského mena',
	'USER_ADMIN'			=> 'Upraviť používateľa',
	'USER_FORUM'			=> 'Štatistika používateľa',
	'USER_ONLINE'			=> 'Prítomný',
	'USER_PRESENCE'			=> 'Obrázok postavičky',

	'VIEWING_PROFILE'		=> 'Zobrazený profil používateľa %s',
	'VISITED'				=> 'Posledná návšteva',

	'WWW'					=> 'Webová stránka',
));

?>
