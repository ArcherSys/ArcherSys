<?php
/** 
*
* acp_language [Swedish] (version 0.5.0 - 3.0.RC5)
*
* @package language
* @version $Id: language.php,v 1.12 2007/08/25 14:15:13 virtuality Exp $
* @copyright (c) 2005 phpBB Group 
* @author (c) 2006-2007 Jonathan Gulbrandsen (jonathan@carlssonplanet.com)
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
	'ACP_FILES'						=> 'Administrationsspråkfiler',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Här kan du installera/ta bort språkpaket.',

	'EMAIL_FILES'			=> 'E-postmallar',

	'FILE_CONTENTS'				=> 'Filinnehåll',
	'FILE_FROM_STORAGE'			=> 'Fil från storage-mappen',

	'HELP_FILES'				=> 'Hjälpfiler',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Installerade språkpaket',
	'INVALID_LANGUAGE_PACK'		=> 'Det valda språkpaketet verkar inte vara giltigt. Kontrollera språkpaketet och ladda upp det igen om det behövs.',
	'INVALID_UPLOAD_METHOD'		=> 'Den valda uppladdningsmetoden är inte giltig, välj en annan metod.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Språkdetaljer uppdaterades.',
	'LANGUAGE_ENTRIES'					=> 'Språkposter',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Här kan du ändra existerande språkpaketsposter eller lägga till poster som inte översatts än.<br /><strong>Observera:</strong> När du ändrat en språkfil så kommer ändringarna att sparas i en separat mapp där du kan ladda ner de nya filerna ifrån. Ändringarna kommer inte att ses av användarna förrän du ersätter originalfilen i ditt webbutrymme (genom att ladda upp den).',
	'LANGUAGE_FILES'					=> 'Språkfiler',
	'LANGUAGE_KEY'						=> 'Språknyckel',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Detta språkpaket är redan installerat.',
	'LANGUAGE_PACK_DELETED'				=> 'Språkpaketet <strong>%s</strong> togs bort. Alla användare som använde detta språk har återställts till forumets standardspråk.',
	'LANGUAGE_PACK_DETAILS'				=> 'Språkpaketsdetaljer',
	'LANGUAGE_PACK_INSTALLED'			=> 'Språkpaketet <strong>%s</strong> installerades.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokalt namn',
	'LANGUAGE_PACK_NAME'				=> 'Namn',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Det valda språkpaketet finns inte.',
	'LANGUAGE_PACK_USED_BY'				=> 'Används av (inklusive robotar)',
	'LANGUAGE_VARIABLE'					=> 'Språkvariabel',
	'LANG_AUTHOR'						=> 'Språkpaketsförfattare',
	'LANG_ENGLISH_NAME'					=> 'Engelskt namn',
	'LANG_ISO_CODE'						=> 'ISO-kod',
	'LANG_LOCAL_NAME'					=> 'Lokalt namn',

	'MISSING_LANGUAGE_FILE'		=> 'Saknad språkfil: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Saknade språkvariablar',
	'MODS_FILES'				=> 'Språkfiler för MODs',

	'NO_FILE_SELECTED'				=> 'Du angav ingen språkfil.',
	'NO_LANG_ID'					=> 'Du angav inget språkpaket.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Du kan inte ta bort standardspråkpaketet.<br />Om du vill ta bort detta språkpaket, byt forumets standardspråk först.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Inga oinstallerade språkpaket',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Ta bort från storage-mappen',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Välj nerladdningsformat',
	'SUBMIT_AND_DOWNLOAD'		=> 'Skicka och ladda ner fil',
	'SUBMIT_AND_UPLOAD'			=> 'Skicka och ladda upp fil',

	'THOSE_MISSING_LANG_FILES'			=> 'Följande språkfiler saknas i språket %s mapp.',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Följande språkvariabler saknas i språkpaketet <strong>%s</strong>.',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Ej installerade språkpaket',

	'UNABLE_TO_WRITE_FILE'		=> 'Filen kunde inte skrivas till %s.',
	'UPLOAD_COMPLETED'			=> 'Uppladdningen slutfördes.',
	'UPLOAD_FAILED'				=> 'Uppladdningen misslyckades av okänd anledning. Du måste kanske ersätta den relevanta filen manuellt.',
	'UPLOAD_METHOD'				=> 'Uppladdningsmetod',
	'UPLOAD_SETTINGS'			=> 'Uppladdningsinställningar',

	'WRONG_LANGUAGE_FILE'		=> 'Vald språkfil är ogiltig.',
));

?>