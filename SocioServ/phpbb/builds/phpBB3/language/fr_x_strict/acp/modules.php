<?php
/** 
*
* This file is part of French phpBB translation.
*
* French phpBB translation is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 3 of the License, or
* any later version.
*
* French phpBB translation is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
*/

/** 
*
* acp_modules [French]
*
* @package language
* @version $Id: modules.php,v 1.12 2007/05/10 15:31:21 acydburn Exp $
* @translation $Id: modules.php,v 0.12 2007/07/09 03:22:47 xaphos Exp $
* @copyright (c) 2005 phpBB Group and (c) 2007 GeeksOnline.fr
* @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Ici, vous pouvez gérer tous les genres de modules. Veuillez noter que le Panneau de Contrôle de l’Administrateur a une structure à trois niveaux de menu (Catégorie -> Catégorie -> Module) alors que les autres ont une structure à deux niveaux de menu (Catégorie -> Module), ce qui doit être conservé. Veuillez également être conscient que vous pouvez vous bloquer si vous désactivez ou supprimez les modules responsables de la gestion des modules eux-même.',
	'ADD_MODULE'					=> 'Ajouter un module',
	'ADD_MODULE_CONFIRM'			=> 'Êtes-vous sûr de vouloir ajouter le module sélectionné avec le mode sélectionné ?',
	'ADD_MODULE_TITLE'				=> 'Ajouter un titre au module',

	'CANNOT_REMOVE_MODULE'	=> 'Impossible de supprimer le module car il possède des modules enfants. Veuillez supprimer ou déplacer tous les modules enfants avant d’effectuer cette action.',
	'CATEGORY'				=> 'Catégorie',
	'CHOOSE_MODE'			=> 'Choisir un mode du module',
	'CHOOSE_MODE_EXPLAIN'	=> 'Choisir les modes de modules qui seront utilisés.',
	'CHOOSE_MODULE'			=> 'Choisir un module',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Choisir le fichier appelé par ce module.',
	'CREATE_MODULE'			=> 'Créer un nouveau module',

	'DEACTIVATED_MODULE'	=> 'Module désactivé',
	'DELETE_MODULE'			=> 'Supprimer le module',
	'DELETE_MODULE_CONFIRM'	=> 'Êtes-vous sûr de vouloir supprimer ce module ?',

	'EDIT_MODULE'			=> 'Éditer le module',
	'EDIT_MODULE_EXPLAIN'	=> 'Ici, vous pouvez entrer les réglages spécifiques au module.',

	'HIDDEN_MODULE'			=> 'Module caché',

	'MODULE'					=> 'Module',
	'MODULE_ADDED'				=> 'Module ajouté avec succès.',
	'MODULE_DELETED'			=> 'Module supprimé avec succès.',
	'MODULE_DISPLAYED'			=> 'Module affiché',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Si vous ne souhaitez pas afficher ce module, mais que vous souhaitez l’utiliser, réglez ceci sur non.',
	'MODULE_EDITED'				=> 'Module édité avec succès.',
	'MODULE_ENABLED'			=> 'Module activé',
	'MODULE_LANGNAME'			=> 'Nom du module',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Entrez le nom du module tel qu’il sera affiché. Utilisez une variable de langue si le nom existe dans le fichier de langue.',
	'MODULE_TYPE'				=> 'Type du module',

	'NO_CATEGORY_TO_MODULE'	=> 'Impossible de transformer la catégorie en module. Veuillez supprimer/déplacer tous les modules enfants avant d’effectuer cette action.',
	'NO_MODULE'				=> 'Aucun module trouvé.',
	'NO_MODULE_ID'			=> 'Aucune ID du module spécifiée.',
	'NO_MODULE_LANGNAME'	=> 'Aucun nom du module spécifié.',
	'NO_PARENT'				=> 'Aucun Parent',

	'PARENT'				=> 'Parent',
	'PARENT_NO_EXIST'		=> 'Le parent n’existe pas.',

	'SELECT_MODULE'			=> 'Sélectionner un module',
));

?>
