<?php
/** 
*
* acp_language.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-05-27 - phpBB.no
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
	'NO_FILE_SELECTED'	=> 'Du har ikke valgt noen spr&aring;kfil.',
	'UNABLE_TO_WRITE_FILE'	=> 'Filen kunne ikke bli skrevet til %s.',
	'UPLOAD_FAILED'	=> 'Opplastingen ble ikke fullf&oslash;rt av ukjent grunn. Pr&oslash;v &aring; laste den opp manuelt.',
	'ACP_FILES'	=> '--> Adminspr&aring;kfiler',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Her kan du installere og slette språkpakker.',
	'EMAIL_FILES'	=> '--> E-postmaler',
	'FILE_CONTENTS'	=> 'Filinnhold',
	'FILE_FROM_STORAGE'	=> 'Fil fra midlertidig mappe',
	'HELP_FILES'	=> '--> Hjelpefiler',
	'INSTALLED_LANGUAGE_PACKS'	=> 'Installerte spr&aring;kfiler',
	'INVALID_LANGUAGE_PACK'	=> 'Den valgte spr&aring:kpakken ser ikke ut til &aring; v&aelig;re tilgjengelig. Kontroller spr&aring;kpakken og last den opp p&aring; nytt hvis det er n&oslash;dvendig.',
	'INVALID_UPLOAD_METHOD'	=> 'Opplastingsmetoden er ikke mulig; velg en annen metode.',
	'LANGUAGE_DETAILS_UPDATED'	=> 'Spr&aring;kdetaljene er oppdatert.',
	'LANGUAGE_ENTRIES'	=> 'Spr&aring;klinjer',
	'LANGUAGE_ENTRIES_EXPLAIN'	=> 'Her kan du endre eksisterende spr&aring;klinjer og oversette eventuelle linjer som ikke er oversatt enn&aring;.<br /><strong>Merk:</strong> N&aring;r du har endret en fil, vil den bli plassert i en midlertidig mappe som du kan laste ned. Endringene vil ikke bli lagt til f&oslash;r du erstatter den n&aring;v&aelig;rende filen med denne (ved &aring; laste den opp).',
	'LANGUAGE_FILES'	=> '--> Spr&aring;kfiler',
	'LANGUAGE_KEY'	=> 'Spr&aring;kn&oslash;kkel',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Denne spr&aring;kpakken er allerede installert.',
	'LANGUAGE_PACK_DELETED'	=> 'Spr&aring;kpakken <b>%s</b> er slettet. Alle brukere som brukte dette spr&aring;ket er nå satt til å bruke standardspr&aring;ket.',
	'LANGUAGE_PACK_DETAILS'	=> 'Spr&aring;kpakkedetaljer',
	'LANGUAGE_PACK_INSTALLED'	=> 'Spr&aring;kpakken <strong>%s</strong> er installert.',
	'LANGUAGE_PACK_ISO'	=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'	=> 'Lokalt navn',
	'LANGUAGE_PACK_NAME'	=> 'Navn',
	'LANGUAGE_PACK_NOT_EXIST'	=> 'Den valgte spr&aring;kpakken eksisterer ikke.',
	'LANGUAGE_PACK_USED_BY'	=> 'Brukes av',
	'LANGUAGE_VARIABLE'	=> 'Spr&aring;kvariabel',
	'LANG_AUTHOR'	=> 'Spr&aring;kpakkeforfatter',
	'LANG_ENGLISH_NAME'	=> 'Engelsk navn',
	'LANG_ISO_CODE'	=> 'ISO-kode',
	'LANG_LOCAL_NAME'	=> 'Lokalt navn',
	'MISSING_LANGUAGE_FILE'	=> 'Manglende spr&aring;kfil: <span style="color:red">%s</span>',
	'MISSING_LANG_VARIABLES'	=> 'Manglende spr&aring;kvariabler',
	'MODS_FILES'	=> '--> Modifikasjoners spr&aring;kfiler',
	'NO_LANG_ID'	=> 'Du har ikke valgt noen spr&aring;kpakke.',
	'NO_REMOVE_DEFAULT_LANG'	=> 'Du kan ikke slette standardspr&aring;kpakken.<br />Hvis du vil gj&oslash;re det, velg et annet standardspr&aring;k f&oslash;rst.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Ingen avinstallerte spr&aring;kfiler',
	'REMOVE_FROM_STORAGE_FOLDER'	=> 'Slett fra den midlertidige mappen.',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Velg nedlastingsformat',
	'SUBMIT_AND_DOWNLOAD'	=> 'Lagre og last ned fil',
	'SUBMIT_AND_UPLOAD'	=> 'Lagre og last opp fil',
	'THOSE_MISSING_LANG_FILES'	=> 'F&oslash;lgende spr&aring;kfiler mangler i %s.',
	'THOSE_MISSING_LANG_VARIABLES'	=> 'F&oslash; spr&aring;kvariabler mangler i spr&aring;kpakken <strong>%s</strong>.',
	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Avinstallerte spr&aring;kpakker',
	'UPLOAD_COMPLETED'	=> 'Opplastingen er fullf&oslash;rt.',
	'UPLOAD_METHOD'	=> 'Opplastingsmetode:',
	'UPLOAD_SETTINGS'	=> 'Opplastingsinnstillinger',
	'WRONG_LANGUAGE_FILE'	=> 'Den valgte spr&aring;kfilen er ikke tilgjengelig.',
));

?>