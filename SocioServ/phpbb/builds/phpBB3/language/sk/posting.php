<?php
/**
*
* posting [Slovak]
*
* @package language
* @version $Id: posting.php,v 1.71 2007/07/27 15:00:10 kellanved Exp $
* @copyright (c) Leachim - Leachimster@gmail.com
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
	'ADD_ATTACHMENT'			=> 'Pripojiť prílohu',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Ak chcete pripojiť jeden alebo viac súborov, zadajte ich nižšie',
	'ADD_FILE'					=> 'Pridať súbor',
	'ADD_POLL'					=> 'Založiť hlasovanie',
	'ADD_POLL_EXPLAIN'			=> 'Pokiaľ nechcete pridať hlasovanie, nechajte toto pole prázdne.',
	'ALREADY_DELETED'			=> 'Prepáčte, táto správa už bola vymazaná.',
	'ATTACH_QUOTA_REACHED'		=> 'Prepáčte, kvóta pridelená pre prílohy bola prekročená.',
	'ATTACH_SIG'				=> 'Pripojiť podpis (podpis môžete zmeniť cez Ovládací panel používateľa)',

	'BBCODE_A_HELP'				=> 'Odkaz na prílohu: [attachment=]subor.pripona[/attachment]',
	'BBCODE_B_HELP'				=> 'Tučné: [b]text[/b]',
	'BBCODE_C_HELP'				=> 'Kód: [code]kód[/code]',
	'BBCODE_E_HELP'				=> 'Zoznam: Pridať položku zoznamu',
	'BBCODE_F_HELP'				=> 'Veľkosť písma: [size=x-small]malé písmo[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s: <em>ZAKÁZANÉ</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s: <em>POVOLENÉ</em>',
	'BBCODE_I_HELP'				=> 'Kurzíva: [i]text[/i]',
	'BBCODE_L_HELP'				=> 'Zoznam: [list]text[/list]',
	'BBCODE_LISTITEM_HELP'			=> 'Položka zoznamu: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'Usporiadaný zoznam: [list=]text[/list]  (alt+o)',
	'BBCODE_P_HELP'				=> 'Vložiť obrázok: [img]http://adresa_obrázku[/img]',
	'BBCODE_Q_HELP'				=> 'Citácia: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'Farba písma: [color=red]text[/color]  Tip: môžete použiť taktiež color=#FF0000',
	'BBCODE_U_HELP'				=> 'Podčiarknuté: [u]text[/u]',
	'BBCODE_W_HELP'				=> 'Vložiť odkaz: [url]http://odkaz[/url] alebo [url=http://odkaz]text[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=šírka,výška]http://url[/flash]',
	'BUMP_ERROR'				=> 'Nemôžete odoslať nový príspevok tak skoro po predchádzajúcom príspevku.',

	'CANNOT_DELETE_REPLIED'		=> 'Prepáčte, ale môžete odstraňovať iba príspevky, na ktoré ešte nebola zaslaná odpoveď.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Tento príspevok bol zamknutý, už ho nemôžete upravovať.',
	'CANNOT_EDIT_TIME'			=> 'Nemôžete upraviť ani odstrániť tento príspevok',
	'CANNOT_POST_ANNOUNCE'		=> 'Nemáte oprávnenia na pridanie oznámenia.',
	'CANNOT_POST_STICKY'		=> 'Nemáte oprávnenia na pridanie dôležitej témy.',
	'CHANGE_TOPIC_TO'			=> 'Zmeniť typ témy na',
	'CLOSE_TAGS'				=> 'Uzatvoriť značky',
	'CURRENT_TOPIC'				=> 'Aktuálna téma',

	'DELETE_FILE'				=> 'Odstrániť súbor',
	'DELETE_MESSAGE'			=> 'Odstrániť správu',
	'DELETE_MESSAGE_CONFIRM'	=> 'Naozaj chcete odstrániť tento príspevok?',
	'DELETE_OWN_POSTS'			=> 'Prepáčte, ale môžete odstraňovať iba svoje vlastné správy.',
	'DELETE_POST_CONFIRM'		=> 'Naozaj chcete odstrániť tento príspevok?',
	'DELETE_POST_WARN'			=> 'Túto akciu už nie je možné vrátiť späť!',
	'DISABLE_BBCODE'			=> 'Zakázať BBCode',
	'DISABLE_MAGIC_URL'			=> 'Automaticky neprevádzať odkazy',
	'DISABLE_SMILIES'			=> 'Zakázať smajlíky',
	'DISALLOWED_EXTENSION'		=> 'Prípona %s nie je povolená.',
	'DRAFT_LOADED'				=> 'Príspevok bol uložený medzi koncepty, môžete ho teraz dokončiť.<br />Po jeho odoslaní bude automaticky z konceptov odstránený.',
	'DRAFT_LOADED_PM'			=> 'Súkromná správa bola uložená medzi koncepty, môžete ju teraz dokončiť.<br />Po jej odoslaní bude automaticky z konceptov odstránená.',
	'DRAFT_SAVED'				=> 'Koncept bol úspešne uložený.',
	'DRAFT_TITLE'				=> 'Nadpis konceptu',

	'EDIT_REASON'				=> 'Dôvod úpravy príspevku',
	'EMPTY_FILEUPLOAD'			=> 'Odoslaný súbor je prázdny',
	'EMPTY_MESSAGE'				=> 'Musíte napísať text príspevku.',
	'EMPTY_REMOTE_DATA'			=> 'Odoslanie súboru bolo neúspešné, skúste súbor odoslať ručne.',

	'FLASH_IS_OFF'				=> '[flash]: <em>ZAKÁZANÉ</em>',
	'FLASH_IS_ON'				=> '[flash]: <em>POVOLENÉ</em>',
	'FLOOD_ERROR'				=> 'Nemôžete odoslať nový príspevok tak skoro po predchádzajúcom príspevku, chvíľu počkajte a skúste to znova.',
	'FONT_COLOR'				=> 'Farba textu',
	'FONT_COLOR_HIDE'			=> 'Skryť farbu textu',
	'FONT_HUGE'					=> 'Obrovské',
	'FONT_LARGE'				=> 'Veľké',
	'FONT_NORMAL'				=> 'Normálne',
	'FONT_SIZE'					=> 'Veľkosť písma',
	'FONT_SMALL'				=> 'Malé',
	'FONT_TINY'					=> 'Drobné',

	'GENERAL_UPLOAD_ERROR'		=> 'Nie je možné odoslať prílohu do %s',

	'IMAGES_ARE_OFF'			=> '[img]: <em>ZAKÁZANÉ</em>',
	'IMAGES_ARE_ON'				=> '[img]: <em>POVOLENÉ</em>',
	'INVALID_FILENAME'			=> '%s nie je povolený názov súboru.',

	'LOAD'						=> 'Načítať',
	'LOAD_DRAFT'				=> 'Načítať koncept',
	'LOAD_DRAFT_EXPLAIN'		=> 'Tu si môžete vybrať, v ktorom koncepte budete pokračovať. Vaša doterajšia správa bude zrušená, celý jej obsah bude vymazaný. Koncepty si môžete prezerať, upravovať a odstraňovať v Ovládacom paneli používateľa.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Musíte byť prihlásený, ak chcete oživiť témy v tomto fóre.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Musíte byť prihlásený, ak chcete odstraňovať príspevky v tomto fóre.',
	'LOGIN_EXPLAIN_POST'		=> 'Musíte byť prihlásený, ak chcete pridávať príspevky do tohto fóra.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Musíte byť prihlásený, ak chcete citovať príspevky v tomto fóre.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Musíte byť prihlásený, ak chcete pridávať odpovede v tomto fóre.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Maximálna povolená veľkosť písma je %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Vaša flash animácia môže byť maximálne %1$d pixelov vysoká.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Vaša flash animácia môže byť maximálne %1$d pixelov široká.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Váš obrázok môže byť maximálne %1$d pixelov vysoký.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Váš obrázok môže byť maximálne %1$d pixelov široký.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Sem zadajte vašu správu. Nemala by obsahovať viac ako <strong>%d</strong> znakov.',
	'MESSAGE_DELETED'			=> 'Táto správa bola úspešne odstránená',
	'MORE_SMILIES'				=> 'Ďalšie smajlíky',

	'NOTIFY_REPLY'				=> 'Upozorniť ma e-mailom na odpovede',
	'NOT_UPLOADED'				=> 'Súbor nemôže byť odoslaný.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Nemôžete vymazať existujúce odpovede',
	'NO_PM_ICON'				=> 'Bez ikony SS',
	'NO_POLL_TITLE'				=> 'Musíte zadať otázku hlasovania',
	'NO_POST'					=> 'Požadovaný príspevok neexistuje.',
	'NO_POST_MODE'				=> 'Nebol špecifikovaný mód príspevku',

	'PARTIAL_UPLOAD'			=> 'Súbor sa nepodarilo odoslať celý, len jeho časť',
	'PHP_SIZE_NA'				=> 'Príloha má príliš veľké rozmery.<br />Nie je možné zistiť veľkosť nastavenú v súbore php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Príloha je príliš veľká. Maximálna povolená veľkosť príloh je %d MB.<br />Toto obmedzenie je nastavené v súbore php.ini, nemôže byť zmenené.',
	'PLACE_INLINE'				=> 'Vložiť za sebou',
	'POLL_DELETE'				=> 'Odstrániť hlasovanie',
	'POLL_FOR'					=> 'Trvanie hlasovania',
	'POLL_FOR_EXPLAIN'			=> 'Zadajte 0 alebo nechajte prázdne, ak chcete neobmedzené trvanie hlasovania.',
	'POLL_MAX_OPTIONS'			=> 'Počet možných odpovedí',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Počet možných odpovedí pre jedného používateľa.',
	'POLL_OPTIONS'				=> 'Odpovede',
	'POLL_OPTIONS_EXPLAIN'		=> 'Každú odpoveď zadajte do nového riadka. Maximálny počet odpovedí je <strong>%d</strong>.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Každú odpoveď zadajte do nového riadka. Maximálny počet odpovedí je <strong>%d</strong>. Ak pridáte alebo odstránite nejakú odpoveď, všetky doterajšie hlasy budú zmazané.',
	'POLL_QUESTION'				=> 'Hlasovacia otázka',
	'POLL_TITLE_TOO_LONG'		=> 'Názov hlasovania musí obsahovať menej ako 100 znakov.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Veľkosť spracovaného názvu hlasovania je príliš veľká, skúste odstrániť BBCode alebo smajlíky.',
	'POLL_VOTE_CHANGE'			=> 'Povoliť zmenu hlasu',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Pokiaľ je táto možnosť povolená, používateľ môže zmeniť svoje hlasovanie.',
	'POSTED_ATTACHMENTS'		=> 'Pridané prílohy',
	'POST_APPROVAL_NOTIFY'		=> ' O schválení vášho príspevku budete informovaný.',
	'POST_CONFIRMATION'			=> 'Potvrdenie príspevku',
	'POST_CONFIRM_EXPLAIN'		=> 'Kvôli ochrane pred automaticky generovanými príspevkami musíte zadať overovací kód. Tento kód je zobrazený na obrázku. Ak je kód pre vás nečitateľný, kontaktujte %sadministrátora fóra%s.',
	'POST_DELETED'				=> 'Táto správa bola úspešne odstránená',
	'POST_EDITED'				=> 'Táto správa bola úspešne upravená',
	'POST_EDITED_MOD'			=> 'Táto správa bola úspešne upravená, ale pred publikovaním musí byť schválená moderátorom.',
	'POST_GLOBAL'				=> 'Globálne oznámenie',
	'POST_ICON'					=> 'Ikonka témy',
	'POST_NORMAL'				=> 'Normálna',
	'POST_REVIEW'				=> 'Posúdenie príspevku',
	'POST_REVIEW_EXPLAIN'		=> 'Najmenej jeden nový príspevok pribudol do tejto témy. Kvôli novým príspevkom môžete prehodnotiť obsah svojho príspevku.',
	'POST_STORED'				=> 'Táto správa bola úspešne odoslaná.',
	'POST_STORED_MOD'			=> 'Táto správa bola úspešne odoslaná, ale pred publikovaním musí byť schválená moderátorom.',
	'POST_TOPIC_AS'				=> 'Odoslať tému ako',
	'PROGRESS_BAR'				=> 'Ukazovateľ stavu',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Môžete vložiť maximálne %1$d citácií.',

	'SAVE'						=> 'Uložiť',
	'SAVE_DATE'					=> 'Uložené do',
	'SAVE_DRAFT'				=> 'Uložiť koncept',
	'SAVE_DRAFT_CONFIRM'		=> 'Pamätajte na to, že do konceptu sa ukladá iba predmet a text príspevku. Ostatné prvky budú odstránené. Naozaj chcete koncept uložiť?',
	'SMILIES'					=> 'Smajlíky',
	'SMILIES_ARE_OFF'			=> 'Smajlíky: <em>ZAKÁZANÉ</em>',
	'SMILIES_ARE_ON'			=> 'Smajlíky: <em>POVOLENÉ</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Časový limit pre Oznámenie/Dôležité',
	'STICK_TOPIC_FOR'			=> 'Označiť na',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Zadajte 0 alebo nechajte prázdne, ak chcete neobmedzené trvanie označenia',
	'STYLES_TIP'				=> 'Tip: Na označený text možno rýchlo aplikovať štýly.',

	'TOO_FEW_CHARS'				=> 'Vaša správa obsahuje príliš málo znakov.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Musíte zadať najmenej dve odpovede.',
	'TOO_MANY_ATTACHMENTS'		=> 'Nemôžete pridať ďalšiu prílohu, maximálny počet príloh je <strong>%d</strong>.',
	'TOO_MANY_CHARS'			=> 'Vaša správa obsahuje príliš veľa znakov.',
	'TOO_MANY_CHARS_POST'		=> 'Vaša správa obsahuje %1$d znakov. Maximálny povolený počet znakov je %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Váš podpis obsahuje %1$d znakov. Maximálny povolený počet znakov je %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Prekročili ste maximálny povolený počet odpovedí hlasovania.',
	'TOO_MANY_SMILIES'			=> 'Vaša správa obsahuje príliš veľa smajlíkov. Maximálny povolený počet smajlíkov je %d.',
	'TOO_MANY_URLS'				=> 'Vaša správa obsahuje príliš veľa odkazov. Maximálny povolený počet odkazov je %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Nemôžete povoliť viac možností na používateľa ako je možností hlasovania.',
	'TOPIC_BUMPED'				=> 'Téma bola úspešne oživená.',

	'UNAUTHORISED_BBCODE'		=> 'Nemôžete použiť nasledujúce značky BBCode: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Ak chcete túto tému zmeniť z globálneho oznámenia na normálnu tému, musíte zvoliť fórum, v ktorom bude zobrazená.',
	'UPDATE_COMMENT'			=> 'Aktualizovať komentár',
	'URL_INVALID'				=> 'Zadaná URL adresa nie je platná.',
	'URL_NOT_FOUND'				=> 'Zadaný súbor nie je možné nájsť.',
	'URL_IS_OFF'				=> '[url]: <em>ZAKÁZANÉ</em>',
	'URL_IS_ON'					=> '[url]: <em>POVOLENÉ</em>',
	'USER_CANNOT_BUMP'			=> 'Nemôžete oživiť tému v tomto fóre',
	'USER_CANNOT_DELETE'		=> 'Nemôžete odstrániť príspevky v tomto fóre',
	'USER_CANNOT_EDIT'			=> 'Nemôžete upravovať príspevky v tomto fóre',
	'USER_CANNOT_REPLY'			=> 'Nemôžete posielať odpovede v tomto fóre',
	'USER_CANNOT_FORUM_POST'	=> 'Nemôžete posielať príspevky do tohto fóra, pretože toto fórum to nepodporuje.',

	'VIEW_MESSAGE'				=> '%sZobraziť moju správu%s',

	'WRONG_FILESIZE'			=> 'Súbor je príliš veľký, maximálna povolená veľkosť je %1d %2s.',
	'WRONG_SIZE'				=> 'Obrázok musí mať minimálnu šírku %1$d pixelov a výšku %2$d pixelov. Zároveň nesmie mať väčšiu šírku ako %3$d pixelov a výšku %4$d pixelov. Váš obrázok má šírku %5$d pixelov a výšku %6$d pixelov.',
));

?>
