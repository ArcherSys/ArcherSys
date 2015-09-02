<?php
/** 
*
* posting [Česky]
*
* @package language
* @version $Id: posting.php,v 1.68 2007/01/21 18:33:45 acydburn Exp $
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
	'ADD_ATTACHMENT'			=> 'Příloha',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Pokud si přejete přidat jednu nebo více příloh, vyplňte údaje',
	'ADD_FILE'					=> 'Přiložit soubor',
	'ADD_POLL'					=> 'Vytvořit anketu',
	'ADD_POLL_EXPLAIN'			=> 'Pokud nechcete vytvořit anketu, nechte pole prázdná',
	'ALREADY_DELETED'			=> 'Omlouváme se, ale tato zpráva byla již smazána.',
	'ATTACH_QUOTA_REACHED'		=> 'Omlouváme se, ale bylo dosaženo maximální velikosti příloh.',
	'ATTACH_SIG'				=> 'Přiložit podpis (podpisy mohou být nastaveny v uživatelském panelu)',

	'BBCODE_A_HELP'				=> 'Příloha: [attachment=]název souboru.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Tučné: [b]text[/b]  (alt+b)',
	'BBCODE_C_HELP'				=> 'Zobrazení kódu: [code]code[/code]  (alt+c)',
	'BBCODE_E_HELP'				=> 'Seznam: Přidá další část listu',
	'BBCODE_F_HELP'				=> 'Velikost písma: [size=x-small]malý text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s je <em>vypnutý</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s je <em>zapnutý</em>',
	'BBCODE_I_HELP'				=> 'Kurzíva: [i]text[/i]  (alt+i)',
	'BBCODE_L_HELP'				=> 'Seznam: [list]text[/list]  (alt+l)',
	'BBCODE_LISTITEM_HELP'		=> 'Položka seznamu: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'Uspořádaný seznam: [list=]text[/list]  (alt+o)',
	'BBCODE_P_HELP'				=> 'Vložit obrázek: [img]http://image_url[/img]  (alt+p)',
	'BBCODE_Q_HELP'				=> 'Citace: [quote]text[/quote]  (alt+q)',
	'BBCODE_S_HELP'				=> 'Barva písma: [color=red]text[/color]  Tip: občas můžete použít tento typ=#FF0000',
	'BBCODE_U_HELP'				=> 'Podtržené: [u]text[/u]  (alt+u)',
	'BBCODE_W_HELP'				=> 'Vložit URL: [url]http://url[/url] nebo [url=http://url]URL text[/url]  (alt+w)',
	'BBCODE_D_HELP'				=> 'Flash: [flash=height,width]http://url[/flash]  (alt+d)',
	'BUMP_ERROR'				=> 'Nemůžete oživit téma tak brzy po odeslání předchozího příspěvku.',

	'CANNOT_DELETE_REPLIED'		=> 'Omlouváme se, ale můžete mazat jen příspěvky, na které ještě nebylo odpovězeno.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Tento příspěvek byl zamknutý. Nemůžete tento příspěvek upravit.',
	'CANNOT_EDIT_TIME'			=> 'Nemůžete tento příspěvek upravit nebo smazat',
	'CANNOT_POST_ANNOUNCE'		=> 'Omlouváme se, ale nemůžete posílat Oznámení.',
	'CANNOT_POST_STICKY'		=> 'Omlouváme se, ale nemůžete odesílat Důležitá témata.',
	'CHANGE_TOPIC_TO'			=> 'Změnit typ tématu na',
	'CLOSE_TAGS'				=> 'Zavřít značky',
	'CURRENT_TOPIC'				=> 'Aktuální téma',

	'DELETE_FILE'				=> 'Smazat soubor',
	'DELETE_MESSAGE'			=> 'Smazat zprávu',
	'DELETE_MESSAGE_CONFIRM'	=> 'Opravdu chcete smazat tuto zprávu?',
	'DELETE_OWN_POSTS'			=> 'Omlouváme se, ale můžete mazat jen vaše příspěvky.',
	'DELETE_POST_CONFIRM'		=> 'Opravdu chcete smazat tento příspěvek?',
	'DELETE_POST_WARN'			=> 'Pokud smažete příspěvek, nebudete ho již moci obnovit',
	'DISABLE_BBCODE'			=> 'Zakázat BBCode',
	'DISABLE_MAGIC_URL'			=> 'Zakázat URL adresy v tomto příspěvku',
	'DISABLE_SMILIES'			=> 'Zakázat smajlíky',
	'DISALLOWED_EXTENSION'		=> 'Přípona %s není povolena',
	'DRAFT_LOADED'				=> 'Koncept byl načten, nyní můžete dopsat váš příspěvek.<br />Váš koncept bude po odeslání příspěvku smazán.',
	'DRAFT_LOADED_PM'			=> 'Koncept byl načten, nyní můžete dopsat váši soukromou zprávu.<br />Váš koncept bude po odeslání soukromé zprávy smazán.',
	'DRAFT_SAVED'				=> 'Koncept byl úspěšně uložen.',
	'DRAFT_TITLE'				=> 'Název konceptu',

	'EDIT_REASON'				=> 'Důvod, proč chcete upravit příspěvek',
	'EMPTY_FILEUPLOAD'			=> 'Přiložený soubor je prázdný',
	'EMPTY_MESSAGE'				=> 'Musíte vložit zprávu.',
	'EMPTY_REMOTE_DATA'			=> 'Soubor nemohl být přiložen. Prosím, zkuste soubor přiložit ručně.',

	'FLASH_IS_OFF'				=> '[flash] je <em>vypnutý</em>',
	'FLASH_IS_ON'				=> '[flash] je <em>zapnutý</em>',
	'FLOOD_ERROR'				=> 'Nemůžete vytvořit příspěvek tak brzo po předešlém.',
	'FONT_COLOR'				=> 'Barva písma',
	'FONT_COLOR_HIDE'			=> 'Skrýt barvu písma',
	'FONT_HUGE'					=> 'Obrovské',
	'FONT_LARGE'				=> 'Velké',
	'FONT_NORMAL'				=> 'Výchozí',
	'FONT_SIZE'					=> 'Velikost písma',
	'FONT_SMALL'				=> 'Malé',
	'FONT_TINY'					=> 'Drobné',

	'GENERAL_UPLOAD_ERROR'		=> 'Nemohu odeslat soubor na %s',

	'IMAGES_ARE_OFF'			=> '[img] je <em>vypnutý</em>',
	'IMAGES_ARE_ON'				=> '[img] je <em>zapnutý</em>',
	'INVALID_FILENAME'			=> '%s je neplatný název',

	'LOAD'						=> 'Načíst',
	'LOAD_DRAFT'				=> 'Načíst návrh',
	'LOAD_DRAFT_EXPLAIN'		=> 'Zde můžete zvolit návrh, v kterém chcete pokračovat. Vaše nynější zpráva bude smazána. Koncepty si můžete prohlédnout, upravit a mazat ve vašem uživatelském panelu.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Musíte se přihlásit, pokud chcete obnovovat témata v tomto fóru.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Musíte se přihlásit, pokud chcete mazat příspěvky v tomto fóru.',
	'LOGIN_EXPLAIN_POST'		=> 'Musíte se přihlásit, pokud chcete posílat příspěvky do tohoto fóra',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Musíte se přihlásit, pokud chcete citovat příspěvky v tomto fóru.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Musíte se přihlásit, pokud chcete odpovědět do těchto témat',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Můžete použít písma s maximální velikostí %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Vaše flashové soubory mohou mít maximální výšku %1$d pixelů.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Vaše flashové soubory mohou mít maximální šířku %1$d pixelů.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Vaše obrázky mohou mít maximální výšku %1$d pixelů.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Vaše obrázky mohou mít maximální šířku %1$d pixelů.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Vložte sem vaši zprávu, může obsahovat maximálně <strong>%d</strong> znaků.',
	'MESSAGE_DELETED'			=> 'Vaše zpráva byla úspěšně odstraněna',
	'MORE_SMILIES'				=> 'Zobrazit další smajlíky',

	'NOTIFY_REPLY'				=> 'Upozornit mě, přijde-li odpověď',
	'NOT_UPLOADED'				=> 'Soubor nemohl být přiložen.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Nemůžete odstranit možnosti hlasování',
	'NO_PM_ICON'				=> 'Žádná',
	'NO_POLL_TITLE'				=> 'Nevložil jste hlasovací otázku',
	'NO_POST'					=> 'Požadovaný příspěvek neexistuje.',
	'NO_POST_MODE'				=> 'Nebyl zvolen typ odeslání',

	'PARTIAL_UPLOAD'			=> 'Byla nahrána jen část přiloženého souboru',
	'PHP_SIZE_NA'				=> 'Velikost přílohy je příliš velká.<br />Nemohu zjistit maximální velikost souboru v php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Velikost přílohy je příliš velká. Maximální velikost je %d MB.<br />Toto je nastaveno v php.ini a nemůže být změněno.',
	'PLACE_INLINE'				=> 'Umístit do příspěvku',
	'POLL_DELETE'				=> 'Smazat anketu',
	'POLL_FOR'					=> 'Délka trvání',
	'POLL_FOR_EXPLAIN'			=> '(zadejte 0 nebo nevyplňujte pro neomezenou dobu hlasování)',
	'POLL_MAX_OPTIONS'			=> 'Maximum možností na uživatele',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Toto je číslo možností hlasování.',
	'POLL_OPTIONS'				=> 'Nastavení hlasování',
	'POLL_OPTIONS_EXPLAIN'		=> 'Každou možnost vložte na nový řádek. Můžete vložit maximálně <strong>%d</strong> možností.',
  	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Každou možnost vložte na nový řádek. Můžete vložit maximálně <strong>%d</strong> možností. Pokud přidáte nebo upravíte možnosti, všechny hlasy budou vynulovány.',
	'POLL_QUESTION'				=> 'Hlasovací otázka',
	'POLL_TITLE_TOO_LONG'       => 'Název hlasování musí být kratší než 100 znaků',
  	'POLL_TITLE_COMP_TOO_LONG'  => 'Zpracovaný název hlasování je příliš dlouhý, zkuste odstranit HTML nebo BBCode',
	'POLL_VOTE_CHANGE'			=> 'Povolit změnu hlasu',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Pokud je povoleno, uživatelé mohou změnit jejich hlas.',
	'POSTED_ATTACHMENTS'		=> 'Odeslané přílohy',
	'POST_APPROVAL_NOTIFY'  	=> 'Budete informováni, jakmile váš příspěvek bude schválen.',
	'POST_CONFIRMATION'			=> 'Potvrzení příspěvku',
	'POST_CONFIRM_EXPLAIN'		=> 'Pro ochranu před spamem, administrátor vyžaduje potvrzení odpovědi. Kód je zobrazen v obrázku pod touto zprávou. Pokud obrázek nevidíte, kontaktuje %s Administrátory%s.',
	'POST_DELETED'				=> 'Vaše zpráva byla úspěšně smazána',
	'POST_EDITED'				=> 'Vaše zpráva byla úspěšně upravena',
	'POST_EDITED_MOD'			=> 'Vaše zpráva byla upravena, ale vyžaduje schválení',
	'POST_GLOBAL'				=> 'Globální',
	'POST_ICON'					=> 'Ikonka',
	'POST_NORMAL'				=> 'Výchozí',
	'POST_REVIEW'				=> 'Odeslat hodnocení',
	'POST_REVIEW_EXPLAIN'		=> 'Během doby, kdy jste psal příspěvek do tématu, přibyl další. Chcete odeslat příspěvek tak jak je nyní?.',
	'POST_STORED'				=> 'Vaše zpráva byla úspěšně odeslána',
	'POST_STORED_MOD'			=> 'Vaše zpráva byla úspěšně odeslána, ale než bude veřejně zobrazena, musí být schválena moderátorem. Budete upozorněni, až bude zpráva schválena.',
	'POST_TOPIC_AS'				=> 'Přidat téma jako',
	'PROGRESS_BAR'				=> 'Průběhová lišta',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Můžete vložit jen %1$d citací v jednom příspěvku.',

	'SAVE'						=> 'Uložit',
	'SAVE_DATE'					=> 'Uložit jako',
	'SAVE_DRAFT'				=> 'Uložit koncept',
	'SAVE_DRAFT_CONFIRM'		=> 'Do konceptů se ukládá pouze název a text příspěvky. Ostatní prvky budou odstraněny. Přejete si uložit koncept nyní?',
	'SMILIES'					=> 'Smajlíci(emotikony)',
	'SMILIES_ARE_OFF'			=> 'Smajlíci jsou <em>vypnutí</em>',
	'SMILIES_ARE_ON'			=> 'Smajlíci jsou <em>zapnutí</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Důležité/Oznámení časový limit',
	'STICK_TOPIC_FOR'			=> 'Zvolit jako důležité pro',
	'STICK_TOPIC_FOR_EXPLAIN'	=> '(zadejte 0 nebo nevyplňujte pro nekonečné Důležité/Oznámení)',
	'STYLES_TIP'				=> 'Tip: Styly mohou být rychle změněny pokud označíte text',

	'TOO_FEW_CHARS'				=> 'Vaše zpráva obsahuje málo znaků.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Musíte vložit nejméně dvě hlasovací možnosti',
	'TOO_MANY_ATTACHMENTS'		=> 'Nemůže vložit další soubor, %d je maximum.',
	'TOO_MANY_CHARS'			=> 'Vaše zpráva obsahuje příliš mnoho znaků.',
 	'TOO_MANY_CHARS_POST'		=> 'Vaše zpráva obsahuje %1$d znaků. Maximální povolený počet znaků je %2$d.',
 	'TOO_MANY_CHARS_SIG'		=> 'Váš podpis obsahuje %1$d znaků. Maximální povolený počet znaků je %2$d.',
 	'TOO_MANY_POLL_OPTIONS'		=> 'Snažíte se vložit příliš mnoho hlasovacích možností',
	'TOO_MANY_SMILIES'			=> 'Vaše zpráva obsahuje příliš mnoho smajlíků. Je povoleno maximálně %d smajlíků.',
	'TOO_MANY_URLS'				=> 'Vaše zpráva obsahuje příliš mnoho URL adres. Je povoleno maximálně %d URL adres.',
	'TOO_MANY_USER_OPTIONS'		=> 'Nemůžete upřesnit více možností na uživatele než existující anketa',
	'TOPIC_BUMPED'				=> 'Téma bylo úspěšně zvýrazněno',

	'UNAUTHORISED_BBCODE'		=> 'Nemůžete použít určité bbkódy: ',
	'UNGLOBALISE_EXPLAIN'		=> 'Abyste změnili toto téma zpět z globálního na výchozí, musíte zvolit fórum, v kterém bude zobrazeno',
	'UPDATE_COMMENT'			=> 'Aktualizovat komentář',
	'URL_INVALID'				=> 'URL není platnou adresou.',
	'URL_NOT_FOUND'				=> 'Soubor nemohl být nalezen.',
	'URL_IS_OFF'				=> '[url] je <em>vypnuté</em>',
	'URL_IS_ON'					=> '[url] je <em>zapnuté</em>',
	'USER_CANNOT_BUMP'			=> 'Nemůžete oživovat témata v tomto fóru',
	'USER_CANNOT_DELETE'		=> 'Nemůžete odstraňovat příspěvky v tomto fóru',
	'USER_CANNOT_EDIT'			=> 'Nemůžete upravovat příspěvky v tomto fóru',
	'USER_CANNOT_REPLY'			=> 'Nemůžete odpovídat na příspěvky v tomto fóru',
	'USER_CANNOT_FORUM_POST'	=> 'Nemůžete odesílat příspěvky do tohoto fóra, protože toto fórum to nepodporuje.',

	'VIEW_MESSAGE'				=> '%sZobrazit vaši odeslanou zprávu%s',

	'WRONG_FILESIZE'			=> 'Soubor je příliš velký. Maximální velikost je %1d %2s',
	'WRONG_SIZE'				=> 'Obrázek musí mít šířku alespoň %1$d pixelů, výšku %2$d pixelů a šířku nejvíce %3$d pixelů a výšku %4$d pixelů. Váš obrázek má šířku %5$d pixelů a výšku %6$d pixelů.',
));

?>