<?php
/** 
*
* acp_modules.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-07-10 - phpBB.no
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Her kan du administrere alle former for moduler. merk deg at administrasjonsmodulene har en 3-graders struktur (Kategori -> Kategori -> Modul) mens de andre har 2 (Kategori -> Modul). Husk at du risikerer å deaktivere moduladministrasjonen hvis du fjerner tilhørende moduler.',
	'ADD_MODULE'	=> 'Legg til modul',
	'ADD_MODULE_CONFIRM'	=> 'Er du sikker på at du vil legge til denne modulen?',
	'ADD_MODULE_TITLE'	=> 'Legg til modul',
	'CANNOT_REMOVE_MODULE'	=> 'Modulen kan ikke slettes fordi den har undermoduler. Flytt eller slatt alle disse før du utfører denne handlingen.',
	'CATEGORY'	=> 'Kategori',
	'CHOOSE_MODE'	=> 'Velg modulstatus',
	'CHOOSE_MODE_EXPLAIN'	=> 'Velg hvilken status modulen vil bli brukt i.',
	'CHOOSE_MODULE'	=> 'Velg modul',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Velg filen som tihører denne modulen.',
	'CREATE_MODULE'	=> 'Lag en ny modul',
	'DEACTIVATED_MODULE'	=> 'Deaktivert modul',
	'DELETE_MODULE'	=> 'Slett modul',
	'DELETE_MODULE_CONFIRM'	=> 'Er du sikker på at du vil slette denne modulen?',
	'EDIT_MODULE'	=> 'Endre modul',
	'EDIT_MODULE_EXPLAIN'	=> 'Her kan du endre modulspesifikke innstillinger',
	'HIDDEN_MODULE'	=> 'Skjult modul',
	'MODULE'	=> 'Modul',
	'MODULE_ADDED'	=> 'Modulen er lagt til.',
	'MODULE_DELETED'	=> 'Modulen er slettet.',
	'MODULE_DISPLAYED'	=> 'Vis modul',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Velg Nei hvis du ønsker å bruke modulen uten å vise den.',
	'MODULE_EDITED'	=> 'Modulen er endret.',
	'MODULE_ENABLED'	=> 'Modulen er aktivert.',
	'MODULE_LANGNAME'	=> 'Modulspråknavn',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Oppgi navnet til den viste modulen. Hvis navnet ligger i en språkfil, bruk språkkonstanten.',
	'MODULE_TYPE'	=> 'Modultype',
	'NO_CATEGORY_TO_MODULE'	=> 'Kan ikke legge kategori inni modulen. Flytt/slett alle undermoduler før du utfører denne handlingen.',
	'NO_MODULE'	=> 'Ingen modul er funnet.',
	'NO_MODULE_ID'	=> 'Ingen modul er spesifisert',
	'NO_MODULE_LANGNAME'	=> 'Ingen modulspråknavn er spesifisert.',
	'NO_PARENT'	=> 'Ingen overmodul',
	'PARENT'	=> 'Overmodul',
	'PARENT_NO_EXIST'	=> 'Overmodulen finnes ikke.',
	'SELECT_MODULE'	=> 'Velg en modul',
));

?>