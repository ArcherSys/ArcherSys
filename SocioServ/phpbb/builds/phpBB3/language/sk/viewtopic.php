<?php
/**
*
* viewtopic [Slovak]
*
* @package language
* @version $Id: viewtopic.php,v 1.18 2007/07/22 13:14:36 kellanved Exp $
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
	'ATTACHMENT'						=> 'Príloha',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Prílohy nie sú povolené',

	'BOOKMARK_ADDED'		=> 'Záložka témy bola úspešne pridaná.',
	'BOOKMARK_REMOVED'		=> 'Záložka témy bola úspešne odstránená.',
	'BOOKMARK_TOPIC'		=> 'Pridať tému k záložkám',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Vymazať tému zo záložiek',
	'BUMPED_BY'				=> 'Tému naposledy oživil %1$s dňa %2$s.',
	'BUMP_TOPIC'			=> 'Oživiť tému',

	'CODE'					=> 'Kód',

	'DELETE_TOPIC'			=> 'Odstrániť tému',
	'DOWNLOAD_NOTICE'		=> 'Nemáte oprávnenie prezerať súbory priložené v tomto príspevku.',

	'EDITED_TIMES_TOTAL'	=> 'Naposledy upravil %1$s dňa %2$s, celkovo upravené %3$d krát.',
	'EDITED_TIME_TOTAL'		=> 'Naposledy upravil %1$s dňa %2$s, celkovo upravené %3$d krát.',
	'EMAIL_TOPIC'			=> 'Odoslať priateľovi e-mailovú správu',
	'ERROR_NO_ATTACHMENT'	=> 'Vybraná príloha už neexistuje',

	'FILE_NOT_FOUND_404'	=> 'Súbor <strong>%s</strong> neexistuje.',
	'FORK_TOPIC'			=> 'Skopírovať tému',

	'LINKAGE_FORBIDDEN'		=> 'Nemáte autorizáciu na prehliadanie, sťahovanie alebo odkazovanie z/na túto webovú stránku.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Boli ste upozornený na túto tému, na jej zobrazenie sa musíte prihlásiť.',
	'LOGIN_VIEWTOPIC'		=> 'Ak si chcete prezrieť túto tému, musíte byť zaregistrovaný a prihlásený.',

	'MAKE_ANNOUNCE'				=> 'Zmeniť na “Oznámenie”',
	'MAKE_GLOBAL'				=> 'Zmeniť na “Globálne oznámenie”',
	'MAKE_NORMAL'				=> 'Zmeniť na “Normálne”',
	'MAKE_STICKY'				=> 'Zmeniť na “Dôležité”',
	'MAX_OPTIONS_SELECT'		=> 'Maximum označených možností: <strong>%d</strong>',
	'MAX_OPTION_SELECT'			=> 'Maximum označených možností: <strong>1</strong>',
	'MISSING_INLINE_ATTACHMENT'	=> 'Príloha <strong>%s</strong> už nie je dostupná.',
	'MOVE_TOPIC'				=> 'Presunúť tému',

	'NO_ATTACHMENT_SELECTED'=> 'Nevybrali ste prílohu, ktorú si chcete prezrieť alebo stiahnuť.',
	'NO_NEWER_TOPICS'		=> 'V tomto fóre nie sú žiadne novšie témy',
	'NO_OLDER_TOPICS'		=> 'V tomto fóre nie sú žiadne staršie témy',
	'NO_UNREAD_POSTS'		=> 'V tejto téme sa nenachádzajú neprečítané príspevky.',
	'NO_VOTE_OPTION'		=> 'Pri hlasovaní musíte vybrať aspoň jednu možnosť.',
	'NO_VOTES'				=> 'Žiadne hlasy',

	'POLL_ENDED_AT'			=> 'Anketa bola ukončená dňa %s',
	'POLL_RUN_TILL'			=> 'V ankete je možné hlasovať do %s',
	'POLL_VOTED_OPTION'		=> 'Hlasovali ste za túto možnosť',
	'PRINT_TOPIC'			=> 'Zobrazenie pre tlač',

	'QUICK_MOD'				=> 'Rýchla úprava',
	'QUOTE'					=> 'Citácia',

	'REPLY_TO_TOPIC'		=> 'Odpovedať na tému',
	'RETURN_POST'			=> '%sVrátiť sa na príspevok%s',

	'SUBMIT_VOTE'			=> 'Odoslať hlas',

	'TOTAL_VOTES'			=> 'Celkový počet hlasov',

	'UNLOCK_TOPIC'			=> 'Odomknúť tému',

	'VIEW_INFO'				=> 'Detaily príspevku',
	'VIEW_NEXT_TOPIC'		=> 'Ďalšia téma',
	'VIEW_PREVIOUS_TOPIC'	=> 'Predchádzajúca téma',
	'VIEW_RESULTS'			=> 'Zobraziť výsledky',
	'VIEW_TOPIC_POST'		=> 'Počet príspevkov: 1',
	'VIEW_TOPIC_POSTS'		=> 'Počet príspevkov: %d',
	'VIEW_UNREAD_POST'		=> 'Prvý neprečítaný príspevok',
	'VISIT_WEBSITE'			=> 'Zobraziť webovú stránku používateľa',
	'VOTE_SUBMITTED'		=> 'Váš hlas bol prijatý.',

));

?>
