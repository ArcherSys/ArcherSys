<?php
/**
*
* acp_modules [Dutch]
*
* @package language
* @version $Id: modules.php,v 1.0.0 2007/01/26 16:09:16 acydburn Exp $
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Hier is het mogelijk om alle soorten modules te beheren. Let op dat het beheerderspaneel een drie level structuur heeft (categorie -> categorie -> module) de andere hebben een twee level structuur (categorie -> module) welke behouden moet worden. Let op wanneer je de modules van het module management verwijderd of uitschakelt dat je jezelf uitsluit.',
	'ADD_MODULE'					=> 'Voeg een module toe',
	'ADD_MODULE_CONFIRM'			=> 'Ben je er zeker van dat je de geselecteerde module wilt toevoegen met de geselecteerde methode?',
	'ADD_MODULE_TITLE'				=> 'Voeg een module toe',

   
	'CANNOT_REMOVE_MODULE'	=> 'De module kan niet verwijderd worden omdat andere modules hiervan afhankelijk zijn. Verwijder de afhankelijke modules eerst, daarna pas kan je deze actie opnieuw proberen.',

	'CATEGORY'				=> 'Categorie',
	'CHOOSE_MODE'			=> 'Kies module methode',
	'CHOOSE_MODE_EXPLAIN'	=> 'Kies de modules die worden gebruikt.',
	'CHOOSE_MODULE'			=> 'Kies module',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Kies het bestand dat bij deze module hoort.',
	'CREATE_MODULE'			=> 'Maak een nieuwe module',

	'DEACTIVATED_MODULE'	=> 'Deactiveer module',
	'DELETE_MODULE'			=> 'Verwijder module',
	'DELETE_MODULE_CONFIRM'	=> 'Ben je er zeker van dat je deze module wilt verwijderen?',

	'EDIT_MODULE'			=> 'Bewerk module',
	'EDIT_MODULE_EXPLAIN'	=> 'Hier is het mogelijk om module instellingen te specificeren.',

	'HIDDEN_MODULE'	=> 'Verberg module',

	'MODULE'					=> 'Module',
	'MODULE_ADDED'				=> 'Module succesvol toegevoegd.',
	'MODULE_DELETED'			=> 'Module succesvol verwijderd.',
	'MODULE_DISPLAYED'			=> 'Modules getoond',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Als je niet wilt dat deze module zichtbaar is, maar wel wordt gebruikt, zet dit op &quot;nee&quot;.',
	'MODULE_EDITED'				=> 'Module succesvol gewijzigd.',
	'MODULE_ENABLED'			=> 'Module ingeschakeld',
	'MODULE_LANGNAME'			=> 'Module taalnaam',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Voer de modulenaam in. Gebruik de taal constant als de naam uit een taalbestand komt.',
	'MODULE_TYPE'				=> 'Module type',

	'NO_CATEGORY_TO_MODULE'	=> 'Het is niet mogelijk om de categorie om te zetten in een module. Verwijder of verplaats eerst alle afhankelijke modules voordat je deze actie voortzet.',
	'NO_MODULE'				=> 'Geen module gevonden.',
	'NO_MODULE_ID'			=> 'Geen module-ID is gespecificeerd.',
	'NO_MODULE_LANGNAME'	=> 'Geen module taalnaam is gespecificeerd.',
	'NO_PARENT'				=> 'Geen hoofdmodule',

	'PARENT'			=> 'Hoofdmodule',
	'PARENT_NO_EXIST'	=> 'Hoofdmodule bestaat niet.',

	'SELECT_MODULE'	=> 'Selecteer een module.',
));
?>