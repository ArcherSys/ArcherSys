<?php
/**
*
* acp_modules [Standard french]
*
* @package language
* @version $Id: modules.php,v 1.12 2007/05/10 15:31:21 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/**
* CONTRIBUTORS
* Translation made by phpBB-fr.com and phpBB.biz Teams
* http://www.phpbb-fr.com
* http://www.phpbb.biz
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Ici, vous pouvez gérer l\'ensemble des modules. Notez bien que le panneau d\'administration comporte 3 niveaux de menu (Catégorie -> Catégorie -> Module) alors que les autres ne comportent que 2 niveaux (Catégorie -> Module) qui doivent être conservés. Soyez également conscient que vous pouvez vous bloquer si vous désactivez ou supprimez les modules responsables de la gestion des modules eux-mêmes.',
	'ADD_MODULE'					=> 'Ajouter un module',
	'ADD_MODULE_CONFIRM'			=> 'Etes-vous sûr de vouloir ajouter le module sélectionné avec le mode sélectionné?',
	'ADD_MODULE_TITLE'				=> 'Ajouter un module',

	'CANNOT_REMOVE_MODULE'	=> 'Impossible de supprimer le module parent. Supprimez ou déplacer les modules enfants avant de tenter cette action.',
	'CATEGORY'				=> 'Categorie',
	'CHOOSE_MODE'			=> 'Choisissez un mode de module',
	'CHOOSE_MODE_EXPLAIN'	=> 'Indiquez le mode qui doit être utilisé.',
	'CHOOSE_MODULE'			=> 'Choisissez un module',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Indiquez le fichier appelé par ce module.',
	'CREATE_MODULE'			=> 'Créer un nouveau module',

	'DEACTIVATED_MODULE'	=> 'Désactiver le module',
	'DELETE_MODULE'			=> 'Supprimer le module',
	'DELETE_MODULE_CONFIRM'	=> 'Etes-vous sûr de vouloir supprimer ce module?',

	'EDIT_MODULE'			=> 'Editer le module',
	'EDIT_MODULE_EXPLAIN'	=> 'Ici vous pouvez entrer une configuration spécifique au module.',

	'HIDDEN_MODULE'			=> 'Cacher le module',

	'MODULE'					=> 'Module',
	'MODULE_ADDED'				=> 'Module ajouté.',
	'MODULE_DELETED'			=> 'Module supprimé.',
	'MODULE_DISPLAYED'			=> 'Afficher le module',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Si vous ne souhaitez pas afficher ce module mais tout de même l\'utiliser, mettez ceci à non.',
	'MODULE_EDITED'				=> 'Module édité.',
	'MODULE_ENABLED'			=> 'Activer le module',
	'MODULE_LANGNAME'			=> 'Langue du module',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Entrez le nom du module qui sera affiché. Utilisez la variable de langue si elle est définie dans le fichier de langue.',
	'MODULE_TYPE'				=> 'Type de module',

	'NO_CATEGORY_TO_MODULE'	=> 'Impossible de convertir la catégorie en module. Supprimez ou déplacer les modules enfants avant de tenter cette action.',
	'NO_MODULE'				=> 'Aucun module trouvé.',
	'NO_MODULE_ID'			=> 'id du module non spécifié.',
	'NO_MODULE_LANGNAME'	=> 'Auncun nom de module spécifié.',
	'NO_PARENT'				=> 'Aucun module parent',

	'PARENT'				=> 'Module parent',
	'PARENT_NO_EXIST'		=> 'Le module parent n\'existe pas.',

	'SELECT_MODULE'			=> 'Sélectionnez un module',
));

?>