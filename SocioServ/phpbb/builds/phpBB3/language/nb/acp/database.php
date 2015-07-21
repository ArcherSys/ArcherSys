<?php
/** 
*
* acp_database.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-05-31 - phpBB.no
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
	'DELETE_SELECTED_BACKUP'	=> 'Er du sikker på at du vil slette den valgte backup-filen?',
	'RESTORE_FAILURE'	=> 'Sikkerhetskopifilen er muligens ødelagt.',
	'TABLE_SELECT_ERROR'	=> 'Du må velge minst en tabell.',
	'DATABASE'	=> 'Databaseverkt&oslash;y',
	'ACP_BACKUP_EXPLAIN'	=> 'Her kan du ta en sikkerhetskopi av alle phpBB-relaterte data, sortere filene i arkiver/mapper og laste dem opp fra din egen maskin. Avhengig av serveren din kan du komprimere filene i flere formater. Hvis du vil legge til "selvlagde" tabeller, skriv dem opp i tilleggsfeltene. Skill dem med komma (,).',
	'BACKUP_OPTIONS'	=> 'Sikkerhetskopialternativer',
	'BACKUP_TYPE'	=> 'Sikkerhetskopitype',
	'BACKUP_INVALID'	=> 'Filen er ugyldig',
	'START_BACKUP'	=> 'Start backup',
	'FULL_BACKUP'	=> 'Full',
	'STRUCTURE_ONLY'	=> 'Kun struktur',
	'DATA_ONLY'	=> 'Kun data',
	'TABLE_SELECT'	=> 'Tabellmerking',
	'FILE_TYPE'	=> 'Filtype',
	'STORE_LOCAL'	=> 'Lagre filer lokalt',
	'SELECT_ALL'	=> 'Merk alle',
	'DESELECT_ALL'	=> 'Fjern merking',
	'BACKUP_SUCCESS'	=> 'Sikkerhetskopifilen er laget',
	'BACKUP_DELETE'	=> 'Sikkerhetskopifilen er slettet',
	'STORE_AND_DOWNLOAD'	=> 'Lagre og last ned',
	'ACP_RESTORE_EXPLAIN'	=> 'Dette vil gjenopprette alle phpBB-tabellene fra en databasesikkerhetskopifil.  Hvis serveren tillater det, kan du laste opp gzip- eller bzip2-komprimerte tekstfiler og de vil automatisk bli pakket ut. <strong>ADVARSEL:</strong> Dette vil skrive over alt eksisterende data. Gjenopprettingen kan ta lang tid, men ikke forlat denne siden mens den p&aring;g&aring;r.',
	'SELECT_FILE'	=> 'Velg en fil',
	'RESTORE_OPTIONS'	=> 'Gjenopprettingsalternativer',
	'START_RESTORE'	=> 'Start gjenoppretting',
	'DELETE_BACKUP'	=> 'Slett sikkerhetskopi',
	'DOWNLOAD_BACKUP'	=> 'Last ned sikkerhetskpi',
	'RESTORE_SUCCESS'	=> 'Databasen er gjenopprettet.<br /><br />Forumet skal n&aring; v&aelig;re akkurat slik det var f&oslash;r bsikkerhetskopien ble tatt.',
));

?>