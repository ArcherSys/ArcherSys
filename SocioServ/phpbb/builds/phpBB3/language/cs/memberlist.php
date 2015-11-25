<?php
/** 
*
* memberlist [Česky]
*
* @package language
* @version $Id: memberlist.php,v 1.33 2006/12/06 14:44:40 dhn2 Exp $
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
	'ACTIVE_IN_FORUM'		=> 'Nejvíce aktivní fórum',
	'ACTIVE_IN_TOPIC'		=> 'Nejvíce aktivní téma',
	'ADD_FOE'				=> 'Přidat nepřítele',
	'ADD_FRIEND'			=> 'Přidat přítele',
	'AFTER'					=> 'Po',

	'ALL'					=> 'Vše',

	'BEFORE'				=> 'Před',

	'CC_EMAIL'				=> 'Poslat kopii mailu sám sobě',
	'CONTACT_USER'			=> 'Kontakt',

	'DEST_LANG'				=> 'Jazyk',
	'DEST_LANG_EXPLAIN'		=> 'Vyberte odpovídající jazyk(je-li dostupný) pro příjemce zprávy.',

	'EMAIL_BODY_EXPLAIN'	=> 'Tento e-mail bude odeslán jako prostý text, nevkládejte žádné HTML nebo BBCode. Adresa pro odpoveď na tento e-mail bude nastavena na vaši.',
	'EMAIL_DISABLED'		=> 'Omlouváme se, ale všechny e-mailové služby na tomto fóru byly vypnuty.',
	'EMAIL_SENT'			=> 'E-mail byl odeslán.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Tento e-mail bude odeslán jako prostý text, nevkládejte žádné HTML nebo BBCode. Informace o tématu jsou již obsažené v emailu. Adresa na odpoveď pro tento e-mail bude nastavena na vaši.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Musíte vložit platnou e-mailovou adresu.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Musíte vložit zprávu.',
	'EMPTY_MESSAGE_IM'    	=> 'Musíte vložit zprávu, která má být odeslána.',
	'EMPTY_NAME_EMAIL'		=> 'Musíte vložit vlastní jméno příjemce.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Musíte zvolit předmět pro tuto zprávu.',
	'EQUAL_TO'				=> 'Se rovná',

	'FIND_USERNAME_EXPLAIN'	=> 'Použijte tento formulář pro vyhledání konkrétních uživatelů. Nemusíte vyplňovat všechna pole. Jako zástupný znak použijte *. Pro data použijte formát rrrr-mm-dd, např. 2002-01-01. Použijte zaškrtávací políčka pro vybrání jednoho nebo více uživatelů..',
	'FLOOD_EMAIL_LIMIT'		=> 'Nemůžete odeslat další e-mail tak brzy po předchozím, zkuste to prosím znovu později.',

	'GROUP_LEADER'			=> 'Moderátor skupiny',

	'HIDE_MEMBER_SEARCH'	=> 'Skrýt hledání členů',

	'IM_ADD_CONTACT'		=> 'Přidat kontakt',
	'IM_AIM'				=> 'Pro použití této funkce je potřeba mít nainstalovaný AOL Instant Messenger.',
 	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Stáhnout aplikaci',
	'IM_ICQ'				=> 'Berte na vědomí, že uživatelé mohou mít zvoleno nepřijímat nevyžádané instatní zprávy.',
	'IM_JABBER'				=> 'Berte na vědomí, že uživatelé mohou mít zvoleno nepřijímat nevyžádané instatní zprávy.',
	'IM_JABBER_SUBJECT'		=> 'Toto je automatizovaná zpráva, Neodpovídejte na ni! Zpráva od uživatele %1$s z %2$s',
	'IM_MESSAGE'			=> 'Vaše zpráva',
	'IM_MSNM'				=> 'Pro použití této funkce je potřeba mít nainstalovaný Windows Messenger.',
	'IM_MSNM_BROWSER'		=> 'Tato funkce není podporována vaším prohlížečem.',
	'IM_MSNM_CONNECT'		=> 'MSNM není připojený.\nMusíte mít MSNM pro pokračování.',		
	'IM_NAME'				=> 'Vaše jméno',
	'IM_NO_DATA'         	=> 'Neexistují žádné vyhovující kontakty na tohoto uživatele.',
	'IM_NO_JABBER'			=> 'Omlouváme se, přímé zprávy pro uživatele Jabberu nejsou na tomto serveru podporovány. Budete si muste stáhnout Jabber klienta pro zkontakování uživatele na Jabber účtu uvedeném výše.',
	'IM_RECIPIENT'			=> 'Příjemce',
	'IM_SEND'				=> 'Odeslat zprávu',
	'IM_SEND_MESSAGE'		=> 'Odeslat zprávu',
	'IM_SENT_JABBER'		=> 'Vaše zpráva uživateli %1$s byla úspěšně odeslána.',
	'IM_USER'			=> 'Poslat instantní zprávu',

	'LAST_ACTIVE'				=> 'Naposledy aktivní',
	'LESS_THAN'					=> 'Méně než',
	'LIST_USER'					=> '1 uživatel',
	'LIST_USERS'				=> '%d uživatelů',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Administrátor vyžaduje, aby jste byli registrováni a přihlášeni pro zobrazení týmu.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Administrátor vyžaduje, aby jste byli registrováni a přihlášeni pro přístup k seznamu uživatelů.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Administrátor vyžaduje, aby jste byli registrováni a přihlášeni pro hledání uživatelů.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Administrátor vyžaduje, aby jste byli registrováni a přihlášeni pro zobrazení profilů.',

	'MORE_THAN'				=> 'Více než',

	'NO_EMAIL'				=> 'Nejste oprávněni posílat e-maily tomuto uživateli.',
	'NO_VIEW_USERS'			=> 'Nejste oprávněni vidět seznam členů nebo profily.',

	'ORDER'					=> 'Pořadí',
	'OTHER'					=> 'Další',

	'POST_IP'				=> 'Zasláno z IP/domény',

	'RANK'					=> 'Hodnost',
	'REAL_NAME'				=> 'Jméno příjemce',
	'RECIPIENT'				=> 'Příjemce',
	'REMOVE_FOE'			=> 'Odstranit nepřítele',
	'REMOVE_FRIEND'			=> 'Odstranit přítele',
	
	'SEARCH_USER_POSTS'		=> 'Hledat uživatelovy příspěvky',
	'SELECT_MARKED'			=> 'Vybrat označené',
	'SELECT_SORT_METHOD'	=> 'Vyberte způsob řazení',
	'SEND_AIM_MESSAGE'		=> 'Poslat AIM zprávu',
	'SEND_ICQ_MESSAGE'		=> 'Poslat ICQ zprávu',
	'SEND_IM'				=> 'Instant Messaging',
	'SEND_JABBER_MESSAGE'	=> 'Poslat Jabber zprávu',
	'SEND_MESSAGE'			=> 'Zpráva',
	'SEND_MSNM_MESSAGE'		=> 'Poslat MSNM/WLM zprávu',
	'SEND_YIM_MESSAGE'		=> 'Poslat YIM zprávu',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Naposledy aktivní',
	'SORT_POST_COUNT'		=> 'Počet příspěvků',

	'USERNAME_BEGINS_WITH'	=> 'Uživatelské jméno začíná na',
	'USER_ADMIN'			=> 'Spravovat uživatele',
	'USER_FORUM'			=> 'Uživatelské statistiky',
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Přítomnost na fóru',

	'VIEWING_PROFILE'		=> 'Prohlížení profilu - %s',
	'VISITED'				=> 'Poslední návštěva',

	'WWW'					=> 'WWW',
));

?>