<?php
/** 
*
* acp_modules [Danish]
*
* @package language
* @version $Id: modules.php,v 1.12 2007/05/10 15:31:21 acydburn Exp $
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

$lang = array_merge($lang, array(
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Her kan du administrere alle slags moduler. Bemærk venligst at ACP har en menustruktur i tre niveauer (Kategori -> Kategori -> Modul) hvorved de andre har en menustruktur i to niveauer (Kategori -> Modul) som skal opretholdes. Vær også opmærksom på at du kan lukke dig selv ude hvis du sletter eller slår moduler fra, der er ansvarlige for moduladministrationen i sig selv.',
	'ADD_MODULE'					=> 'Tilføj modul',
	'ADD_MODULE_CONFIRM'			=> 'Er du sikker på at du ønsker at tilføje det valgte modul med den valgte tilstand?',
	'ADD_MODULE_TITLE'				=> 'Tilføj modul',

	'CANNOT_REMOVE_MODULE'	=> 'Ude af stand til at slette modul, det er blevet tildelt undermoduler. Slet venligst eller flyt alle undermoduler før udførelse af denne handling',
	'CATEGORY'				=> 'Kategori',
	'CHOOSE_MODE'			=> 'Vælg modultilstand',
	'CHOOSE_MODE_EXPLAIN'	=> 'Vælg den tilstand for modulet som anvendes.',
	'CHOOSE_MODULE'			=> 'Vælg modul',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Vælg filen som kaldes af dette modul.',
	'CREATE_MODULE'			=> 'Opret nyt modul',

	'DEACTIVATED_MODULE'	=> 'Deaktiveret modul',
	'DELETE_MODULE'			=> 'Slet modul',
	'DELETE_MODULE_CONFIRM'	=> 'Er du sikker på at du ønsker at slette dette modul?',

	'EDIT_MODULE'			=> 'Redigér modul',
	'EDIT_MODULE_EXPLAIN'	=> 'Her kan du ændre modulspecifikke indstillinger.',

	'HIDDEN_MODULE'			=> 'Skjult modul',

	'MODULE'					=> 'Modul',
	'MODULE_ADDED'				=> 'Modul tilføjet.',
	'MODULE_DELETED'			=> 'Modul slettet.',
	'MODULE_DISPLAYED'			=> 'Modul vist',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Hvis du ikke ønsker at vise dette modul, men ønsker at bruge det, sæt da dette til nej.',
	'MODULE_EDITED'				=> 'Modul redigeret.',
	'MODULE_ENABLED'			=> 'Modul slået til',
	'MODULE_LANGNAME'			=> 'Modulnavn',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Indtast det viste modulnavn. Brug sprognøgle, hvis navnet tilbydes fra sprogfil.',
	'MODULE_TYPE'				=> 'Modultype',

	'NO_CATEGORY_TO_MODULE'	=> 'Ude af stand til gøre kategori til modul. Slet venligst alle undermoduler før udførelse af denne handling.',
	'NO_MODULE'				=> 'Intet modul fundet.',
	'NO_MODULE_ID'			=> 'Intet modul-ID specificeret.',
	'NO_MODULE_LANGNAME'	=> 'Intet modulnavn specificeret.',
	'NO_PARENT'				=> 'Intet overmodul',

	'PARENT'				=> 'Overmodul',
	'PARENT_NO_EXIST'		=> 'Overmodul eksisterer ikke.',

	'SELECT_MODULE'			=> 'Vælg et modul',
));

?>