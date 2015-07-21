<?php
/**
*
* acp_language [Dutch]
*
* @package language
* @version $Id: language.php,v 1.0.0 2007/01/24 12:33:36 acydburn Exp $
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

$lang = array_merge($lang, array(
	'ACP_FILES'						=> 'Beheer taalbestanden',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Hier kan je taalpakketten installeren/verwijderen.',

	'EMAIL_FILES'	=> 'E-mail templates',

	'FILE_CONTENTS'		=> 'Inhoud bestand',
	'FILE_FROM_STORAGE'	=> 'Bestand uit opslagmap',

	'HELP_FILES'	=> 'Helpbestanden',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Ge&iuml;nstalleerde talen',
	'INVALID_LANGUAGE_PACK'		=> 'Het geselecteerde taalpakket lijkt niet correct. Verifieer het taalpakket en upload het opnieuw a.u.b.',
	'INVALID_UPLOAD_METHOD'		=> 'De geselecteerde uploadmethode is niet correct, kies een andere methode a.u.b.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Taalinfo is succesvol bijgewerkt',
	'LANGUAGE_ENTRIES'					=> 'Taalzinnen',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Hier kan je bestaande zinnen of de nog niet reeds vertaalde zinnen uit het taalpakket wijzigen.<br /><strong>Opmerking:</strong> eenmaal je een taalbestand hebt gewijzigd zullen de wijzigingen worden opgeslagen in een afzonderlijke map om te downloaden. De wijzigingen zullen niet online zichtbaar zijn totdat je de originele taalbestanden vervangt (door ze te uploaden).',
	'LANGUAGE_FILES'					=> 'Taalbestanden',
	'LANGUAGE_KEY'						=> 'Taalsleutel',
   'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Dit taalpakket is al ge&iuml;nstalleerd.',
	'LANGUAGE_PACK_DELETED'				=> 'Het taalpakket <strong>%s</strong> is succesvol verwijderd. Alle gebruikers die dit taalpakket gebruikten, gebruiken nu het standaard taalpakket van het forum.',
	'LANGUAGE_PACK_DETAILS'				=> 'Info taalpakket',
	'LANGUAGE_PACK_INSTALLED'			=> 'Het taalpakket <strong>%s</strong> is succesvol ge&iuml;nstalleerd.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokale naam',
	'LANGUAGE_PACK_NAME'				=> 'Naam',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Het geselecteerde taalpakket bestaat niet.',
	'LANGUAGE_PACK_USED_BY'				=> 'Gebruikt door (inclusief bots)',
	'LANGUAGE_VARIABLE'					=> 'Taalvariabelen',
	'LANG_AUTHOR'						=> 'Auteur taalpakket',
	'LANG_ENGLISH_NAME'					=> 'Engelse naam',
	'LANG_ISO_CODE'						=> 'ISO-code',
	'LANG_LOCAL_NAME'					=> 'Lokale naam',

	'MISSING_LANGUAGE_FILE'		=> 'Volgende taalbestand is niet aanwezig: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Niet aanwezige taalvariabelen',
	'MODS_FILES'				=> 'MOD\'s taalbestanden',

	'NO_FILE_SELECTED'				=> 'Je hebt geen taalbestand geverifieerd.',
	'NO_LANG_ID'					=> 'Je hebt geen taalpakket geverifieerd.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Het is niet mogelijk om het standaard taalpakket te verwijderen.<br />Als je dit taalpakket toch wilt verwijderen moet je eerst de standaard taal van het forum veranderen.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Geen niet-ge&iuml;nstalleerde taalpakketten',

	'REMOVE_FROM_STORAGE_FOLDER'	=> 'Verwijder uit de opslagmap',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Selecteer downloadformaat',
	'SUBMIT_AND_DOWNLOAD'		=> 'Download bestand',
	'SUBMIT_AND_UPLOAD'			=> 'Upload bestand',

	'THOSE_MISSING_LANG_FILES'		=> 'De volgende taalbestanden zijn niet aanwezig in de %s taalmap',
	'THOSE_MISSING_LANG_VARIABLES'	=> 'De volgende taalvariabelen zijn niet aanwezig in het <strong>%s</strong> taalpakket',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Niet-ge&iuml;nstalleerde taalpakketten',

	'UNABLE_TO_WRITE_FILE'	=> 'Het bestand kan niet in %s geschreven worden.',
	'UPLOAD_COMPLETED'		=> 'De upload werd succesvol voltooid.',
	'UPLOAD_FAILED'			=> 'De upload is mislukt door onbekende redenen. Je zal het bestand manueel moeten vervangen.',
	'UPLOAD_METHOD'			=> 'Uploadmethode',
	'UPLOAD_SETTINGS'		=> 'Uploadvoorkeuren',

	'WRONG_LANGUAGE_FILE'	=> 'Het geselecteerde taalbestand is ongeldig.',
));
?>