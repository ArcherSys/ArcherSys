<?php
/**
*
* acp_database [Slovak]
*
* @package language
* @version $Id: database.php,v 1.23 2007/07/15 12:09:54 kellanved Exp $
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Tu môžete zálohovať všetky údaje spojené s vašim fórom phpBB. Vytvorený súbor by ste mali uložiť do priečinka <samp>store/</samp> alebo si ho rovno stiahnuť. Súbory môžete komprimovať do rôznych formátov - záleží to na konfigurácií vášho servera.',
	'ACP_RESTORE_EXPLAIN'	=> 'Tu môžete obnoviť všetky tabuľky vášho fóra phpBB zo súboru zálohy. Ak to váš server podporuje, môžete použiť komprimovaný textový súbor vo formáte gzip alebo bzip2 - bude automaticky dekomprimovaný. <strong>POZOR:</strong> Týmto krokom prepíšete všetky existujúce údaje. Obnova môže trvať dlhšiu dobu, prosím, neopúšťajte túto stránku, pokiaľ nebude obnova hotová. Zálohy sú uložené v priečinku <samp>store/</samp> a mali by byť vygenerované pomocou funkcií zálohovania phpBB. Obnovenie zo zálohy, ktorá nebola vytvorená pomocou funkcií fóra, môže ale nemusí fungovať..',

	'BACKUP_DELETE'		=> 'Súbor zálohy bol úspešne odstránený.',
	'BACKUP_INVALID'	=> 'Vybraný súbor zálohy nie je platný.',
	'BACKUP_OPTIONS'	=> 'Možnosti zálohy',
	'BACKUP_SUCCESS'	=> 'Súbor zálohy bol úspešne vytvorený.',
	'BACKUP_TYPE'		=> 'Typ zálohy',

	'DATABASE'			=> 'Databázové pomôcky',
	'DATA_ONLY'			=> 'Iba údaje',
	'DELETE_BACKUP'		=> 'Odstrániť zálohu',
	'DELETE_SELECTED_BACKUP'	=> 'Naozaj chcete odstrániť označenú zálohu?',
	'DESELECT_ALL'		=> 'Zrušiť výber',
	'DOWNLOAD_BACKUP'	=> 'Stiahnuť zálohu',

	'FILE_TYPE'			=> 'Typ súboru',
	'FULL_BACKUP'		=> 'Všetko',

	'RESTORE_FAILURE'		=> 'Súbor zálohy môže byť poškodený.',
	'RESTORE_OPTIONS'		=> 'Možnosti obnovenia',
	'RESTORE_SUCCESS'		=> 'Databáza bola úspešne obnovená.<br /><br />Fórum by malo byť v takom stave, v akom bolo v deň vytvorenia zálohy.',

	'SELECT_ALL'			=> 'Označiť všetko',
	'SELECT_FILE'			=> 'Vybrať súbor',
	'START_BACKUP'			=> 'Spustiť zálohovanie',
	'START_RESTORE'			=> 'Spustiť obnovu',
	'STORE_AND_DOWNLOAD'	=> 'Uložiť a stiahnuť',
	'STORE_LOCAL'			=> 'Uložiť súbor lokálne',
	'STRUCTURE_ONLY'		=> 'Iba štruktúra',

	'TABLE_SELECT'		=> 'Výber tabuľky',
	'TABLE_SELECT_ERROR'=> 'Musíte označiť aspoň jednu tabuľku.',
));

?>
