<?php
/**
*
* acp_database [Dutch]
*
* @package language
* @version $Id: database.php,v 1.0.0 2006/12/02 13:19:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group modified by phpBB.nl (vertaalteam@phpbb.nl) in 2007
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
   exit;
}
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
	'ACP_BACKUP_EXPLAIN'	=> 'Hier kan je al de phpBB-gerelateerde gegevens back-uppen. Je mag het resulterende archief opslaan in je <samp>store/</samp>-map, of ineens downloaden. Afhankelijk je serverconfiguratie, kan je het bestand in een aantal verschillende formaten comprimeren.',
	'ACP_RESTORE_EXPLAIN'	=> 'Dit zorgt ervoor dat alle phpBB-tabellen teruggezet worden vanuit een opgeslagen bestand. Indien je server dit ondersteunt, kan je een via gzip of bzip2 ingepakt tekstbestand gebruiken, het zal automatisch uitgepakt worden. <strong>WAARSCHUWING:</strong> Hierdoor worden alle bestaande gegevens overschreven. Het terugzetten kan een hele tijd duren, verlaat deze pagina niet tot het proces volledig afgewerkt is. Back-ups worden opgeslagen in de <var>store/</var>-map en zouden gegenereerd worden door phpBB\'s back-up functionaliteit. Terugplaatsen van back-ups die niet door dit systeem zijn gemaakt werken misschien of misschien niet.',

	'BACKUP_DELETE'		=> 'Het back-up bestand is succesvol verwijderd.',
	'BACKUP_INVALID'	=> 'Het geselecteerde bestand om te back-uppen is ongeldig.',
	'BACKUP_OPTIONS'	=> 'Back-up opties',
	'BACKUP_SUCCESS'	=> 'Het back-up bestand is succesvol aangemaakt.',
	'BACKUP_TYPE'		=> 'Back-up type',

	'DATABASE'					=> 'Database hulpmiddelen',
	'DATA_ONLY'					=> 'Enkel data',
	'DELETE_BACKUP'				=> 'Verwijder back-up',
	'DELETE_SELECTED_BACKUP'	=> 'Weet je zeker dat je de geselecteerde back-up wilt verwijderen?',
	'DESELECT_ALL'				=> 'Deselecteer alles',
	'DOWNLOAD_BACKUP'			=> 'Download back-up',

	'FILE_TYPE'		=> 'Bestandstype',
	'FULL_BACKUP'	=> 'Volledig',

	'RESTORE_FAILURE'	=> 'Het back-up bestand is mogelijks beschadigd.',
	'RESTORE_OPTIONS'	=> 'Herstelopties',
	'RESTORE_SUCCESS'	=> 'De database is succesvol teruggezet.<br /><br />Je forum zou nu weer exact hetzelfde moeten zijn als toen de back-up gemaakt is.',

	'SELECT_ALL'			=> 'Selecteer alles',
	'SELECT_FILE'			=> 'Selecteer een bestand',
	'START_BACKUP'			=> 'Start back-up',
	'START_RESTORE'			=> 'Start terugzetting',
	'STORE_AND_DOWNLOAD'	=> 'Opslaan en downloaden',
	'STORE_LOCAL'			=> 'Bestand lokaal opslaan',
	'STRUCTURE_ONLY'		=> 'Enkel structuur',

	'TABLE_SELECT'			=> 'Selecteer tabel',
	'TABLE_SELECT_ERROR'	=> 'Je moet minstens &eacute;&eacute;n tabel selecteren.',
));
?>