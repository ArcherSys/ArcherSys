<?php
/**
*
* acp_database [Danish]
*
* @package language
* @version $Id: database.php,v 1.24 2007/08/13 12:14:06 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translators: Olympus DK Team, working at http://www.phpBB3.dk and http://area51.phpBB3.dk:
*
*		John Hjorth < john-hjorth@john-hjorth.dk > (John Hjorth) http://www.phpBBFM.dk
*		jask < jan@skovsgaard.net > (Jan Skovsgaard) http://skovsgaard.net
*		Jesper Møller < jgom@privat.dk > (Jesper G. O. Møller) http://www.jart.dk/jgom/index.html
*
* Contributors :
*
*		AlleyKat < AlleyKat@phpbb2.dk > (Finn Sørensen) http://www.phpbb2.dk
*		Dr.Diesel < dr.diesel@dream-cathers.dk > (Jes Nielsen) http://www.dream-cathers.dk
*		Jan Christensen < tamrotten@gmail.com > (Jan Christensen) http://janogwickys.dk/phpBB2/index.php
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
	'ACP_BACKUP_EXPLAIN'	=> 'Her kan du tage backup af alle dine phpBB relaterede data. Du kan lagre den dannede backup i din <samp>store/</samp> mappe eller downloade den direkte. Afhængig af din serverkonfiguration vil du være i stand til at pakke filen med forskellige komprimeringsværktøjer.',
	'ACP_RESTORE_EXPLAIN'	=> 'Dette vil udføre en fuld gendannelse af alle phpBB tabeller fra en gemt fil. Hvis din server understøtter det, kan du bruge en gzip eller bzip2 komprimeret tekstfil, den bliver automatisk udpakket. <strong>ADVARSEL</strong> Alle eksisterende data bliver overskrevet. Gendannelsen kan tage lang tid at gennemføre, forlad venligst ikke denne side før gendannelsen er fuldført. Backup-filerne gemmes i <samp>store/</samp> mappen og forventes at være dannet med phpBB\'s backup funktion. Ved forsøg på at gendanne databasen fra en backup-fil der ikke er dannet med det interne backup-system, kan du ikke være sikker på at gendannelsen bliver fuldført med succes.',

	'BACKUP_DELETE'		=> 'Backupfilen blev slettet.',
	'BACKUP_INVALID'	=> 'Den valgte fil for backup er ugyldig',
	'BACKUP_OPTIONS'	=> 'Backup valgmuligheder',
	'BACKUP_SUCCESS'	=> 'Dannelsen af backupfilen lykkedes med den placering som du angav.',
	'BACKUP_TYPE'		=> 'Backuptype',

	'DATABASE' => 'Databaseværktøjer',
	'DATA_ONLY'			=> 'Data alene',
	'DELETE_BACKUP'			=> 'Slet backup',
	'DELETE_SELECTED_BACKUP'	=> 'Er du sikker på du at du ønsker at slette den valgte backup?',
	'DESELECT_ALL'		=> 'Fravælg alle',
	'DOWNLOAD_BACKUP'		=> 'Download backup',
	
	'FILE_TYPE'			=> 'Filtype',
	'FULL_BACKUP'		=> 'Fuld',
	
	'RESTORE_FAILURE'	=> 'Backup filen kan være ødelagt.',
	'RESTORE_OPTIONS'		=> 'Valgmuligheder for gendannelse',
	'RESTORE_SUCCESS'		=> 'Gendannelsen af databasen lykkedes.<br /><br />Dit board skulle være tilbage i den stand det var i da backup\'en blev taget.',

	'SELECT_ALL'	=> 'Vælg alle',
	'SELECT_FILE'			=> 'Vælg en fil',
	'START_BACKUP'		=> 'Start backup',
	'START_RESTORE'			=> 'Start gendannelse',
	'STORE_AND_DOWNLOAD'	=> 'Gem og download',
	'STORE_LOCAL'		=> 'Gem fil lokalt',
	'STRUCTURE_ONLY'	=> 'Struktur alene',

	'TABLE_SELECT'		=> 'Tabel valg',
	'TABLE_SELECT_ERROR'=> 'Du skal vælge mindst én tabel.',
));

?>