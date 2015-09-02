<?php
/**
*
* acp_forums [Slovak]
*
* @package language
* @version $Id: forums.php,v 1.29 2007/07/16 14:02:06 acydburn Exp $
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Doba pre automatické prečistenie od odoslania posledného príspevku',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Minimálny počet dní od odoslania posledného príspevku, po ktorých môže byť daná téma odstránená.',
	'AUTO_PRUNE_FREQ'			=> 'Frekvencia automatického prečistenia',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Čas v dňoch medzi jednotlivými prečisteniami.',
	'AUTO_PRUNE_VIEWED'			=> 'Doba pre automatické prečistenie od posledného zobrazenia témy',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Minimálny počet dní od posledného zobrazenia témy, po ktorých môže byť daná téma odstránená.',

	'COPY_PERMISSIONS'				=> 'Skopírovať oprávnenia z',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Ako náhle bude toto fórum vytvorené, bude mať rovnaké oprávnenia ako tu označené fórum. Pokiaľ nie je zvolené žiadne, nové fórum nebude viditeľné, pokiaľ nenastavíte oprávnenia.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Pokiaľ vyberiete kopírovanie oprávnení, fórum bude mať rovnaké oprávnenia ako tu vybraté. Toto prepíše všetky oprávnenia, ktoré ste predtým nastavili pre toto fórum. Pokiaľ nevyberiete žiadne fórum, oprávnenia zostanú nezmenené.',
	'CREATE_FORUM'					=> 'Vytvoriť nové fórum',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Odstrániť obsah alebo presunúť do fóra',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Odstrániť subfóra alebo presunúť do fóra',
	'DEFAULT_STYLE'						=> 'Prednastavený štýl',
	'DELETE_ALL_POSTS'					=> 'Odstrániť príspevky',
	'DELETE_SUBFORUMS'					=> 'Odstrániť subfóra a príspevky',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Povoliť aktívne témy',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Ak je táto voľba nastavená na "Áno", budú v tejto kategórii označené aktívne témy v zvolených subfórach.',

	'EDIT_FORUM'					=> 'Upraviť fórum',
	'ENABLE_INDEXING'				=> 'Povoliť indexovanie pre vyhľadávanie',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Ak je zapnuté, príspevky budú zahrnuté vo vyhľadávaní.',
	'ENABLE_POST_REVIEW'			=> 'Povoliť prehodnotenie príspevku',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Ak je povolené, používatelia si budú môcť prehodnotiť svoj príspevok v prípade, že počas písania svojho príspevku bol odoslaný niekým iným ďalší. Toto by malo byť vypnuté pre diskusné fóra.',
	'ENABLE_RECENT'					=> 'Zobraziť aktívne témy',
	'ENABLE_RECENT_EXPLAIN'			=> 'Pokiaľ je nastavené "Áno", témy tohto fóra budú zobrazované z zozname aktívnych tém.',
	'ENABLE_TOPIC_ICONS'			=> 'Povoliť ikony témy',

	'FORUM_ADMIN'						=> 'Administrácia fóra',
	'FORUM_ADMIN_EXPLAIN'				=> 'V phpBB3 neexistujú kategórie, všetko je založené na fórach. Každému fóru môžete priradiť neobmedzený počet subfór, pričom môžete určiť, do ktorého je možné a do ktorého nie je možné prispievať. Okrem ďalších akcií môžete pridávať, upravovať, odstrániť, zamykať, presúvať, synchronizovať fóra ako aj nastaviť konkrétne nastavenia pre každé fórum osobitne. Ak nie sú vaše príspevky a témy v poriadku, môžete ich resynchronizovať. <strong>Musíte skopírovať alebo nastaviť príslušné oprávnenia pre nové vytvorené fóra, inak nebudú zobrazené.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Zapnúť automatické prečistenie',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Automaticky prečistí fórum od starých príspevkov a tém, nastavenia sú uvedené nižšie.',
	'FORUM_CREATED'						=> 'Fórum bolo úspešne vytvorené.',
	'FORUM_DATA_NEGATIVE'				=> 'Parametre pre prečistenie nesmú byť záporné.',
	'FORUM_DESC_TOO_LONG'				=> 'Popis fóra je príliš dlhý, nesmie obsahovať viac ako 4000 znakov.',
	'FORUM_DELETE'						=> 'Odstrániť fórum',
	'FORUM_DELETE_EXPLAIN'				=> 'Nasledujúci formulár vám umožní odstrániť fórum. Pokiaľ sa dá do fóra prispievať, môžete sa rozhodnúť, kam presunúť jeho obsah.',
	'FORUM_DELETED'						=> 'Fórum úspešne odstránené.',
	'FORUM_DESC'						=> 'Popis',
	'FORUM_DESC_EXPLAIN'				=> 'HTML kód nebude spracovaný, text bude zobrazený tak ako ho zadáte.',
	'FORUM_EDIT_EXPLAIN'				=> 'Pomocou tohto formulára prispôsobíte fórum vašim predstavám. Nastavenia moderátorov a počítania príspevkov sa nastavujú cez oprávnenia fóra pre jednotlivých používateľov či skupín.',
	'FORUM_IMAGE'						=> 'Obrázok fóra',
	'FORUM_IMAGE_EXPLAIN'				=> 'Umiestnenie obrázka priradeného k tomu fóru, relatívne od koreňového priečinka phpBB3.',
	'FORUM_LINK_EXPLAIN'				=> 'Úplná URL adresa (vrátane protokolu, napr. <samp>http://</samp>), kam bude používateľ po kliknutí presmerovaný.',
	'FORUM_LINK_TRACK'					=> 'Sledovať kliknutia',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Sleduje, koľkokrát bolo kliknuté na odkaz fóra.',
	'FORUM_NAME'						=> 'Názov fóra',
	'FORUM_NAME_EMPTY'					=> 'Musíte zadať názov tohto fóra.',
	'FORUM_PARENT'						=> 'Nadradené fórum',
	'FORUM_PASSWORD'					=> 'Heslo fóra',
	'FORUM_PASSWORD_CONFIRM'			=> 'Potvrdenie hesla fóra',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Vyplňte iba v prípade, ak nastavujete heslo fóra.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Definuje heslo pre toto fórum, použite systém oprávnení na nastavenie prístupu.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Zadaná heslá sa nezhodujú.',
	'FORUM_PRUNE_SETTINGS'				=> 'Nastavenia prečistenia fóra',
	'FORUM_RESYNCED'					=> 'Fórum "%s" bolo úspešne resynchronizované.',
	'FORUM_RULES_EXPLAIN'				=> 'Pravidlá fóra budú zobrazené na všetkých stránkach daného fóra.',
	'FORUM_RULES_LINK'					=> 'Odkaz na pravidlá fóra',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Tu môžete zadať URL stránky/príspevku s pravidlami. Toto bude mať prednosť pred iným textom.',
	'FORUM_RULES_PREVIEW'				=> 'Ukážka pravidiel fóra',
	'FORUM_RULES_TOO_LONG'				=> 'Pravidla fóra môžu mať max. 4000 znakov.',
	'FORUM_SETTINGS'					=> 'Nastavenia fóra',
	'FORUM_STATUS'						=> 'Stav fóra',
	'FORUM_STYLE'						=> 'Štýl fóra',
	'FORUM_TOPICS_PAGE'					=> 'Počet tém na stránku',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Pokiaľ nie je nastavené na hodnota 0, bude tomuto nastaveniu daná prednosť pred globálnym nastavením.',
	'FORUM_TYPE'						=> 'Typ fóra',
	'FORUM_UPDATED'						=> 'Informácie o fóre boli úspešne aktualizované.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Pokúšate sa zmeniť fórum so subfórami na odkaz. Prosím, presuňte všetky subfóra z tohto fóra, pretože po zmene na odkaz nebudú tieto subfóra viditeľné.',

	'GENERAL_FORUM_SETTINGS'	=> 'Všeobecné nastavenia fóra',

	'LINK'					=> 'Odkaz',
	'LIST_INDEX'			=> 'Zobraziť subfórum v legende nadradeného fóra',
	'LIST_INDEX_EXPLAIN'	=> 'Zobraziť odkaz na toto fórum v legende nadradeného fóra vo výpise fór a na hlavnej stránke.',
	'LOCKED'				=> 'Zamknuté',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Do fóra, ktoré ste vybrali pri presunutí príspevkov, nie je možné prispievať. Prosím, zvoľte iné fórum.',
	'MOVE_POSTS_TO'		=> 'Presunúť príspevky do',
	'MOVE_SUBFORUMS_TO'	=> 'Presunúť subfóra do',

	'NO_DESTINATION_FORUM'			=> 'Nezvolili ste fórum, kam sa presunie obsah',
	'NO_FORUM_ACTION'				=> 'Nebola definovaná žiadna akcia, ktorá určí, čo sa stane s obsahom fóra.',
	'NO_PARENT'						=> 'Bez nadradeného',
	'NO_PERMISSIONS'				=> 'Nekopírovať oprávnenia',
	'NO_PERMISSION_FORUM_ADD'		=> 'Nemáte dostačujúce oprávnenia na pridávanie fór.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Nemáte dostačujúce oprávnenia pre odstraňovanie fór.',

	'PARENT_IS_LINK_FORUM'		=> 'Nadradené fórum, ktoré ste zvolil, je nastavené ako odkaz. Odkaz nemôže mať subfóra. Zvoľte kategóriu alebo fórum ako nadradené fórum.',
	'PARENT_NOT_EXIST'			=> 'Nadradené fórum neexistuje.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Prečistiť témy označené ako Dôležité',
	'PRUNE_STICKY'				=> 'Prečistiť Oznámenia',
	'PRUNE_OLD_POLLS'			=> 'Prečistiť staré hlasovania',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Odstráni témy s anketami, v ktorých nikto nehlasoval počas zadanej doby.',
	
	'REDIRECT_ACL'	=> 'Teraz môžete %snastaviť oprávnenia%s pre toto fórum.',

	'SYNC_IN_PROGRESS'			=> 'Prebieha synchronizácia fóra...',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Práve sa synchronizujú témy %1$d až %2$d.',

	'TYPE_CAT'			=> 'Kategória',
	'TYPE_FORUM'		=> 'Fórum',
	'TYPE_LINK'			=> 'Odkaz',

	'UNLOCKED'			=> 'Odomknuté',
));

?>
