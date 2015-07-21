<?php
/**
*
* posting [Slovak]
*
* @package language
* @version $Id: posting.php,v 1.39 2007/07/19 20:37:52 acydburn Exp $
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode je zvláštna implementácia jazyka HTML, ktorá umožňuje väčšiu kontrolu nad tým, ako vypadajú vaše príspevky. Z tejto stránky môžete pridávať, odstraňovať alebo upravovať vlastné značky BBCode.',
	'ADD_BBCODE'				=> 'Pridať novú značku BBCode',

	'BBCODE_ADDED'				=> 'Značka BBCode bola úspešne pridaná.',
	'BBCODE_EDITED'				=> 'Značka BBCode bola úspešne upravená.',
	'BBCODE_NOT_EXIST'			=> 'Vybraná značka BBCode neexistuje.',
	'BBCODE_HELPLINE'			=> 'Informačný text',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Text, ktorý sa zobrazí pri prejdení myšou na značku BBCode.',
	'BBCODE_HELPLINE_TEXT'		=> 'Text',
	'BBCODE_INVALID_TAG_NAME'	=> 'Značka BBCode s týmto názvom už existuje.',
  'BBCODE_INVALID'			=> 'Značku BBCode ste zadali nesprávne, jej konštrukcia obsahuje chyby.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Vaša značka BBCode musí obsahovať začiatočnú aj ukončujúcu značku.',
	'BBCODE_TAG'				=> 'Značka',
	'BBCODE_TAG_TOO_LONG'		=> 'Vybraný názov značky je príliš dlhý.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Definícia vašej značky BBCode je príliš dlhá, prosím, skráťte ju.',
	'BBCODE_USAGE'				=> 'Použitie BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[hilight={FARBA}]{TEXT}[/hilight]<br /><br />[font={TEXT1}]{TEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Tu definujete, ako používať značku BBCode. Nahraďte premenné za tie, ktoré odpovedajú budúcemu obsahu značky BBCode (%sviď nižšie%s)',

	'EXAMPLE'						=> 'Príklad:',
	'EXAMPLES'						=> 'Príklady:',

	'HTML_REPLACEMENT'				=> 'HTML náhrada',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color:{FARBA};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family:{TEXT1};"&gt;{TEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Tu definujete, akým kódom HTML bude značka BBCode nahradená (každá šablóna môže mať svoju náhradu). Nezabudnite zadať rovnaké premenné, ktoré ste použili vyššie!',

	'TOKEN'					=> 'Premenná',
	'TOKENS'				=> 'Premenné',
	'TOKENS_EXPLAIN'		=> 'Premenné držia miesto pre budúci používateľský vstup, na ich miesto budú používatelia vyplňovať údaje. Značka bude spracovaná, len pokiaľ je na danom mieste text odpovedajúci definícií premennej. Pokiaľ potrebujete, môžete ich číslovať, pridaním čísla pred ukončovacou zátvorkou, napr. {TEXT1}, {TEXT2}.<br /><br />Naviac v týchto premenných je možné použiť akýkoľvek jazykový reťazec, ktorý je prítomný v prekladoch. Zadajte ho v tomto formáte {L_<em>&lt;názov reťazca&gt;</em>},kde <em>&lt;názov reťazca&gt;</em> je názov preloženého reťazca, ktorý chcete zobraziť. Napríklad, {L_WROTE} bude anglicky zobrazené ako "wrote", a pokiaľ má používateľ aktivovanú slovenčinu, zobrazí sa "napísal".<br /><br /><strong>Pamätajte, že pri vytváraní vlastných značiek BBCode je možné použiť len premenné zobrazené nižšie.</strong>',
	'TOKEN_DEFINITION'		=> 'Použiteľné znaky',
	'TOO_MANY_BBCODES'		=> 'Nedajú sa vytvoriť ďalšie značky BBCode. Odstráňte jednu alebo viac značiek a skúste to znova.',

	'tokens'	=>	array(
		'TEXT'			=> 'Bežný text, vrátane diakritiky, cudzích znakov, čísiel, atď.',
		'SIMPLETEXT'	=> 'Characters from the latin alphabet (A-Z), numbers, spaces, commas, dots, minus, plus, hyphen and underscore',
		'IDENTIFIER'	=> 'Characters from the latin alphabet (A-Z), numbers, hyphen and underscore',
		'NUMBER'		=> 'Akákoľvek rada číslic',
		'EMAIL'			=> 'Platná e-mailová adresa',
		'URL'			=> 'Platná URL používajúca voliteľný protokol (http, ftp, atď… nedá sa zneužiť pre JavaScriptové útoky). Pokiaľ nie je zvolený žiadny, na začiatok reťazca je pripojený protokol &quot;http://&quot;.',
		'LOCAL_URL'		=> 'Lokálna URL adresa. Zadaná URL musí byť relatívna k stránke s témou a nesmie obsahovať definíciu protokolu alebo názov servera.',
		'COLOR'			=> 'Farba HTML, buď v hexadecimálnom formáte <samp>#FF1234</samp> alebo ako <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS farba</a>, napr. <samp>fuchsia</samp> alebo <samp>InactiveBorder</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Tu môžete pridávať a upravovať ikony, ktoré používatelia môžu použiť v hlavičke správ. Tieto ikony sú najčastejšie zobrazené vedľa názvu témy v zozname tém, alebo vedľa predmetu v prehľade tém. Môžete tiež nainštalovať alebo vytvoriť celé kolekcie ikon.',
	'ACP_SMILIES_EXPLAIN'	=> 'Smajlíky, alebo emotikony, sú často malé, niekedy animované obrázky, ktoré umožňujú vyjadriť emócie alebo náladu. Z tejto stránky môžete pridávať a upravovať smajlíkov, ktorých používatelia môžu používať v ich príspevkoch a správach. Môžete tiež nainštalovať alebo vytvoriť celú kolekciu smajlíkov.',
	'ADD_SMILIES'			=> 'Pridať ďalšie smajlíky',
	'ADD_SMILEY_CODE'		=> 'Pridať ďalší kód smajlíkov',
	'ADD_ICONS'				=> 'Pridať ďalšie ikony',
	'AFTER_ICONS'			=> 'Za %s',
	'AFTER_SMILIES'			=> 'Za %s',

	'CODE'						=> 'Kód',
	'CURRENT_ICONS'				=> 'Aktuálne ikony',
	'CURRENT_ICONS_EXPLAIN'		=> 'Tu môžete pracovať s nainštalovanými ikonami.',
	'CURRENT_SMILIES'			=> 'Aktuálne smajlíky',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Tu môžete pracovať s nainštalovanými smajlíkmi.',

	'DISPLAY_ON_POSTING'		=> 'Zobraziť pri prispievaní',
	'DISPLAY_POSTING'			=> 'On posting page',
	'DISPLAY_POSTING_NO'		=> 'Not on posting page',



	'EDIT_ICONS'				=> 'Upraviť ikony',
	'EDIT_SMILIES'				=> 'Upraviť smajlíkov',
	'EMOTION'					=> 'Emócia',
	'EXPORT_ICONS'				=> 'Exportovať a stiahnuť icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sKliknutím na tento odkaz bude konfiguračný súbor pre nainštalované ikony archivovaný do súboru <samp>icons.pak</samp>, ktorý je možné po stiahnutí použiť na vytvorenie archívu <samp>.zip</samp> alebo <samp>.tgz</samp> obsahujúceho všetky vaše ikony a tento <samp>icons.pak</samp> konfiguračný súbor%s.',
	'EXPORT_SMILIES'			=> 'Exportovať a stiahnuť smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sKliknutím na tento odkaz bude konfiguračný súbor pre nainštalovaných smajlíkov archivovaný do súboru <samp>smilies.pak</samp>, ktorý je možné po stiahnutí použiť na vytvorenie archívu <samp>.zip</samp> alebo <samp>.tgz</samp> obsahujúceho všetkých vašich smajlíkov a tento <samp>smilies.pak</samp> konfiguračný súbor%s.',

	'FIRST'			=> 'Prvý',

	'ICONS_ADD'				=> 'Pridať novú ikonu',
	'ICON_NONE_ADDED'		=> 'No icons were added.',
	'ICONS_ONE_ADDED'		=> 'The icon has been added successfully.',
	'ICONS_ADDED'			=> 'Ikona bola úspešne pridaná.',
	'ICONS_CONFIG'			=> 'Nastavenie ikon',
	'ICONS_DELETED'			=> 'Ikona bola úspešne odstránená.',
	'ICONS_EDIT'			=> 'Upraviť ikonu',
	'ICONS_ONE_EDITED'		=> 'The icon has been updated successfully.',
	'ICON_NONE_EDITED'		=> 'No icons were updated.',
	'ICONS_EDITED'			=> 'Ikona bola úspešne upravená.',
	'ICONS_HEIGHT'			=> 'Výška ikony',
	'ICONS_IMAGE'			=> 'Obrázok ikony',
	'ICONS_IMPORTED'		=> 'Sada ikon bola úspešne nainštalovaná.',
	'ICONS_IMPORT_SUCCESS'	=> 'Sada ikon bola úspešne importovaná.',
	'ICONS_LOCATION'		=> 'Umiestnenie ikony',
	'ICONS_NOT_DISPLAYED'	=> 'Nasledujúce ikony nie sú zobrazené na stránke pre písanie príspevkov',
	'ICONS_ORDER'			=> 'Poradie ikon',
	'ICONS_URL'				=> 'Súbor obrázka ikony',
	'ICONS_WIDTH'			=> 'Šírka ikony',
	'IMPORT_ICONS'			=> 'Nainštalovať sadu ikon',
	'IMPORT_SMILIES'		=> 'Nainštalovať sadu smajlíkov',

	'KEEP_ALL'			=> 'Ponechať všetko',

	'MASS_ADD_SMILIES'	=> 'Pridať viac smajlíkov',

	'NO_ICONS_ADD'		=> 'Nie sú dostupné žiadne ikony na pridanie.',
	'NO_ICONS_EDIT'		=> 'Nie sú dostupné žiadne ikony na úpravu.',
	'NO_ICONS_EXPORT'	=> 'Nemáte žiadne ikony na vytvorenie smajlíkov.',
	'NO_ICONS_PAK'		=> 'Nebol nájdený žiadny balík ikon.',
	'NO_SMILIES_ADD'	=> 'Nie sú dostupné žiadne smajlíky na pridanie.',
	'NO_SMILIES_EDIT'	=> 'Nie sú dostupné žiadne smajlíky na úpravu.',
	'NO_SMILIES_EXPORT'	=> 'Nemáte žiadnych smajlíkov na vytvorenie balíka.',
	'NO_SMILIES_PAK'	=> 'Nebol nájdený žiadny balík smajlíkov.',

	'PAK_FILE_NOT_READABLE'		=> 'Nie je možné prečítať súbor <samp>.pak</samp>.',

	'REPLACE_MATCHES'	=> 'Nahradiť odpovedajúce hodnoty',

	'SELECT_PACKAGE'			=> 'Vybrať balík',
	'SMILIES_ADD'				=> 'Pridať nového smajlíka',
	'SMILIES_NONE_ADDED'		=> 'No smilies were added.',
	'SMILIES_ONE_ADDED'			=> 'The smiley has been added successfully.',
	'SMILIES_ADDED'				=> 'Smajlík bol úspešne pridaný.',
	'SMILIES_CODE'				=> 'Kód smajlíka',
	'SMILIES_CONFIG'			=> 'Nastavenie smajlíkov',
	'SMILIES_DELETED'			=> 'Smajlík bol úspešne odstránený.',
	'SMILIES_EDIT'				=> 'Upraviť smajlíka',
	'SMILIES_NONE_EDITED'		=> 'No smilies were updated.',
	'SMILIES_ONE_EDITED'		=> 'The smiley has been updated successfully.',
	'SMILIES_EDITED'			=> 'Smajlík bol úspešne aktualizovaný.',
	'SMILIES_EMOTION'			=> 'Emócie',
	'SMILIES_HEIGHT'			=> 'Výška smajlíka',
	'SMILIES_IMAGE'				=> 'Obrázok smajlíka',
	'SMILIES_IMPORTED'			=> 'Balík smajlíkov bol úspešne nainštalovaný..',
	'SMILIES_IMPORT_SUCCESS'	=> 'Balík smajlíkov bol úspešne naimportovaný.',
	'SMILIES_LOCATION'			=> 'Umiestnenie smajlíka',
	'SMILIES_NOT_DISPLAYED'		=> 'Nasledujúce smajlíky nie sú zobrazené na stránke písania príspevku.',
	'SMILIES_ORDER'				=> 'Poradie',
	'SMILIES_URL'				=> 'Obrázok smajlíka',
	'SMILIES_WIDTH'				=> 'Šírka smajlíka',

	'WRONG_PAK_TYPE'	=> 'Zvolený balík neobsahuje potrebné údaje.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Z tohto panela môžete pridávať, upravovať alebo odstraňovať slová, ktoré budú automaticky cenzurované pri odosielaní príspevku. Používatelia si ďalej nemôžu registrovať mená, ktoré sú tu napísané. Zástupný znak (*) je možné použiť na nájdenie zhody, napr. *ekonom* odpovedá aj "neekonomické", ekonom* bude odpovedať napr. aj "ekonomické" atď.',
	'ADD_WORD'				=> 'Pridať nové slovo',

	'EDIT_WORD'		=> 'Upraviť cenzurované slovo',
	'ENTER_WORD'	=> 'Musíte zadať slovo a jeho náhradu.',

	'NO_WORD'	=> 'Neboli zvolené žiadne slová na úpravu.',

	'REPLACEMENT'	=> 'Náhrada',

	'UPDATE_WORD'	=> 'Upraviť cenzurované slovo',

	'WORD'				=> 'Slovo',
	'WORD_ADDED'		=> 'Cenzurovaný výraz bol úspešne pridaný.',
	'WORD_REMOVED'		=> 'Cenzurovaný výraz bol úspešne odstránený.',
	'WORD_UPDATED'		=> 'Cenzurovaný výraz bol úspešne upravený.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Na tejto stránke môžete spravovať hodnotenia. Môžete tiež vytvoriť zvláštne hodnotenia, ktoré budú používateľom priradené cez používateľskú administráciu.',
	'ADD_RANK'				=> 'Pridať nové hodnotenie',

	'MUST_SELECT_RANK'		=> 'Musíte vybrať hodnotenie.',

	'NO_ASSIGNED_RANK'		=> 'Nebolo pridelené zvláštne hodnotenie.',
	'NO_RANK_TITLE'			=> 'Nezvolili ste názov hodnotenia.',
	'NO_UPDATE_RANKS'		=> 'Hodnotenie bolo úspešne odstránené. Neaktualizovali sa ale účty s týmto hodnotením, na nich budete musieť toto hodnotenie upraviť ručne.',

	'RANK_ADDED'			=> 'Hodnotenie bolo úspešne pridané.',
	'RANK_IMAGE'			=> 'Obrázok hodnotenia',
	'RANK_IMAGE_EXPLAIN'	=> 'Tu môžete definovať malý obrázok, ktorý bude zobrazený pri hodnotení. Cesta je relatívna k základnému priečinku phpBB.',
	'RANK_MINIMUM'			=> 'Minimálny počet príspevkov',
	'RANK_REMOVED'			=> 'Hodnotenie bolo úspešne odstránené.',
	'RANK_SPECIAL'			=> 'Nastaviť ako zvláštne hodnotenie',
	'RANK_TITLE'			=> 'Názov hodnotenia',
	'RANK_UPDATED'			=> 'Hodnotenie bolo úspešne upravené.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Tu môžete upravovať používateľské mená, ktoré sa nesmú používať. Nepovolené mená sa dajú definovať pomocou zástupného znaku *.  Berte na vedomie, že nie je možné pridať už registrované meno, musíte ho odstrániť alebo premenovať predtým, ako ho zakážete',
	'ADD_DISALLOW_EXPLAIN'	=> 'Môžete zakázať používateľské meno pomocou zástupného symbolu * pre zhodu s akýmkoľvek znakom.',
	'ADD_DISALLOW_TITLE'	=> 'Pridať nepovolené meno',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Nepovolené meno môžete odstrániť kliknutím na meno v zozname.',
	'DELETE_DISALLOW_TITLE'		=> 'Odstrániť nepovolené meno',
	'DISALLOWED_ALREADY'		=> 'Zvolené meno sa nedá zakázať. Buď už v zozname existuje, je obsiahnuté v zozname cenzurovaných výrazov alebo také používateľské meno už niekto používa.',
	'DISALLOWED_DELETED'		=> 'Nepovolené meno bolo úspešne odstránené.',
	'DISALLOW_SUCCESSFUL'		=> 'Nepovolené meno bolo úspešne pridané.',

	'NO_DISALLOWED'				=> 'Žiadne mená',
	'NO_USERNAME_SPECIFIED'		=> 'Nezvolili ste žiadne používateľské mená.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Tu môžete spravovať odôvodnenia, ktoré sú použité v nahláseniach príspevkov alebo schvaľovaniach. Vždy je nastavené jedno predvolené odôvodnenie (označené s *), ktoré nemôžete odstrániť, toto odôvodnenie použite, pokiaľ nesedí žiadne iné vami vytvorené.',
	'ADD_NEW_REASON'		=> 'Pridať nový dôvod',
	'AVAILABLE_TITLES'		=> 'Dostupné preložené odôvodnenia',

	'IS_NOT_TRANSLATED'			=> 'Odôvodnenie <strong>nebolo</strong> preložené.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Odôvodnenie <strong>nebolo</strong> preložené. Pokiaľ chcete poskytnúť preložené znenie, vytvorte odpovedajúcu položku v časti jazykových súborov pre odôvodnenie schválenia/zamietnutia.',
	'IS_TRANSLATED'				=> 'Odôvodnenie bolo preložené.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Odôvodnenie bolo preložené. Pokiaľ je zvolený názov obsiahnutý v jazykových súboroch, bude použitá preložená verzia.',

	'NO_REASON'					=> 'Odôvodnenie nebolo nájdené.',
	'NO_REASON_INFO'			=> 'Musíte zvoliť názov a popis odôvodnenia.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Nedá sa odstrániť predvolené odôvodnenie "Ostatné".',

	'REASON_ADD'				=> 'Pridať odôvodnenie',
	'REASON_ADDED'				=> 'Odôvodnenie schválení/zamietnutí bolo úspešne pridané.',
	'REASON_ALREADY_EXIST'		=> 'Odôvodnenie s týmto názvom už existuje, zvoľte iný.',
	'REASON_DESCRIPTION'		=> 'Popis odôvodnenia',
	'REASON_DESC_TRANSLATED'	=> 'Zobrazený popis odôvodnenia',
	'REASON_EDIT'				=> 'Upraviť odôvodnenie',
	'REASON_EDIT_EXPLAIN'		=> 'Tu môžete pridať alebo upraviť odôvodnenie. Pokiaľ je odôvodnenie preložené, preložená verzia bude použitá namiesto popisu, ktorý tu zadáte.',
	'REASON_REMOVED'			=> 'Odôvodnenie schválení/zamietnutí bolo úspešne odstránené.',
	'REASON_TITLE'				=> 'Názov odôvodnení',
	'REASON_TITLE_TRANSLATED'	=> 'Zobrazený názov odôvodnení',
	'REASON_UPDATED'			=> 'Odôvodnenie schválení/zamietnutí bolo úspešne aktualizované.',

	'USED_IN_REPORTS'		=> 'Použité v nahláseniach',
));

?>
