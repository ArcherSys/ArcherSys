<?php
/** 
*
* acp_database [Česky]
*
* @package language
* @version $Id: database.php,v 1.22 2006/12/02 13:19:24 acydburn Exp $
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
	'ACP_BACKUP_EXPLAIN'	=> 'Zde můžete zálohovat všechna data spojená s phpBB. Výsledný archiv smíte uložit do svého <samp>store/</samp> adresáře nebo jej stáhnout přímo. Dovoluje-li to váš server, můžete soubor zkomprimovat více možnými způsoby.',
	'ACP_RESTORE_EXPLAIN'	=> 'Spustí kompletní obnovu všech tabulek phpBB z uloženého souboru. Podporuje-li to váš server, mužete použít text komprimovaný ve formátu gzip nebo bzip2, který bude automaticky dekomprimován. <strong>UPOZORNENÍ</strong> Tato akce prepíše všechna existující data. Obnova muže trvat déle, vyckejte proto prosím na této stránce, dokud nebude ukoncena. Zálohy budou uloženy v adresári <samp>store/</samp> a budou pokládány za zálohy vytvorené pomocí systému phpBB. Obnovené zálohy, které nebyly tímto systémem vytvoreny, nemusí být funkcní.',

	'BACKUP_DELETE'		=> 'Záložní soubor byl úspěšně odstraněn.',
	'BACKUP_INVALID'	=> 'Zvolený soubor pro zálohu je neplatný.',
	'BACKUP_OPTIONS'	=> 'Možnosti zálohy',
	'BACKUP_SUCCESS'	=> 'Záložní soubor byl úspěšně vytvořen.',
	'BACKUP_TYPE'		=> 'Druh zálohy',

	'DATABASE'					=> 'Nástroje databáze',
	'DATA_ONLY'					=> 'Pouze data',
	'DELETE_BACKUP'				=> 'Odstranit zálohu',
	'DELETE_SELECTED_BACKUP'	=> 'Opravdu chcete trvale odstranit vybranou zálohu?',
	'DESELECT_ALL'				=> 'Odznačit vše',
	'DOWNLOAD_BACKUP'			=> 'Stáhnout zálohu',

	'FILE_TYPE'			=> 'Druh souboru',
	'FULL_BACKUP'		=> 'Plná',

	'RESTORE_FAILURE'		=> 'Soubor se zálohou může být poškozen.',
	'RESTORE_OPTIONS'		=> 'Možnosti obnovy',
	'RESTORE_SUCCESS'		=> 'Databáze byla nyní úspěšně obnovena.<br /><br />Vaše fórum by mělo být ve stavu, v němž byla tato záloha pořízena.',

	'SELECT_ALL'			=> 'Označit vše',
	'SELECT_FILE'			=> 'Vybrat soubor',
	'START_BACKUP'			=> 'Spustit zálohu',
	'START_RESTORE'			=> 'Spustit obnovu',
	'STORE_AND_DOWNLOAD'	=> 'Uložit a stáhnout',
	'STORE_LOCAL'			=> 'Uložit zálohu zde',
	'STRUCTURE_ONLY'		=> 'Pouze strukturu',

	'TABLE_SELECT'			=> 'Vybrat tabulky',
	'TABLE_SELECT_ERROR'	=> 'Musíte zvolit alespoň jednu tabulku.',
));

?>