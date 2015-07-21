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
* acp_groups [French]
*
* @package language
* @version $Id: groups.php,v 1.28 2007/07/02 14:05:21 kellanved Exp $
* @translation $Id: groups.php,v 0.28 2007/07/09 03:22:47 xaphos Exp $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'De ce panneau, vous pouvez administrer tous vos groupes d’utilisateurs. Vous pouvez supprimer, créer et éditer des groupes existants. De plus, vous pouvez choisir des chefs de groupe, ouvrir/fermer/masquer les statuts des groupes et régler le nom et la description d’un groupe.',
	'ADD_USERS'						=> 'Ajouter des utilisateurs',
	'ADD_USERS_EXPLAIN'				=> 'Ici, vous pouvez ajouter de nouveaux utilisateurs au groupe. Vous pouvez également sélectionner ce groupe pour qu’il devienne le nouveau groupe par défaut des utilisateurs sélectionnés. De plus, vous pouvez les définir en tant que chefs du groupe. Veuillez entrer chaque nom d’utilisateur sur une ligne séparée.',

	'COPY_PERMISSIONS'				=> 'Copier les permissions de',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Une fois créé, le groupe aura les mêmes permissions que le groupe que vous avez sélectionné ici.',
	'CREATE_GROUP'					=> 'Créer un nouveau groupe',

	'GROUPS_NO_MEMBERS'				=> 'Ce groupe n’a aucun membre',
	'GROUPS_NO_MODS'				=> 'Aucun chef du groupe défini',
	
	'GROUP_APPROVE'					=> 'Approuver le membre',
	'GROUP_APPROVED'				=> 'Membres approuvés',
	'GROUP_AVATAR'					=> 'Avatar du groupe',
	'GROUP_AVATAR_EXPLAIN'			=> 'Cette image sera affichée dans le Panneau de Contrôle du Groupe.',
	'GROUP_CLOSED'					=> 'Fermé',
	'GROUP_COLOR'					=> 'Couleur du groupe',
	'GROUP_COLOR_EXPLAIN'			=> 'Définit la couleur dans laquelle les noms d’utilisateurs des membres apparaîtra, laissez vide pour la couleur d’utilisateur par défaut.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Êtes-vous sûr de vouloir ajouter l’utilisateur %1$s au groupe ?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Êtes-vous sûr de vouloir ajouter les utilisateurs %1$s au groupe ?',
	'GROUP_CREATED'					=> 'Le groupe a été créé avec succès.',
	'GROUP_DEFAULT'					=> 'Définir le groupe par défaut pour les membres',
	'GROUP_DEFS_UPDATED'			=> 'Groupe par défaut réglé pour tous les membres sélectionnés.',
	'GROUP_DELETE'					=> 'Supprimer le membre du groupe',
	'GROUP_DELETED'					=> 'Groupe supprimé et groupes par défaut pour les utilisateurs réglés avec succès.',
	'GROUP_DEMOTE'					=> 'Dégrader le chef du groupe',
	'GROUP_DESC'					=> 'Description du groupe',
	'GROUP_DETAILS'					=> 'Informations du groupe',
	'GROUP_EDIT_EXPLAIN'			=> 'Ici, vous pouvez éditer un groupe existant. Vous pouvez modifier son nom, sa description et son type (ouvert, fermé, etc.). Vous pouvez également régler certaines options pour un groupe comme sa coloration, son rang, etc. Les modifications effectués ici écraseront les réglages des utilisateurs actuels. Veuillez noter que les membres d’un groupe peuvent écraser les réglages de l’avatar du groupe si vous réglez les permissions appropriées des utilisateurs.',
	'GROUP_ERR_USERS_EXIST'			=> 'Les utilisateurs spécifiés sont déjà membres de ce groupe.',
	'GROUP_FOUNDER_MANAGE'			=> 'Gestion par le fondateur uniquement',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Limiter la gestion de ce groupe aux fondateurs uniquement. Les utilisateurs ayant des permissions de groupes peuvent voir ce groupe, ainsi que les membres du groupe.',
	'GROUP_HIDDEN'					=> 'Caché',
	'GROUP_LANG'					=> 'Langue du groupe',
	'GROUP_LEAD'					=> 'Chefs du groupe',
	'GROUP_LEADERS_ADDED'			=> 'Nouveaux chefs ajoutés au groupe avec succès.',
	'GROUP_LEGEND'					=> 'Afficher le groupe dans la légende',
	'GROUP_LIST'					=> 'Membres actuels',
	'GROUP_LIST_EXPLAIN'			=> 'Ceci est la liste complète de tous les utilisateurs actuels qui adhèrent à ce groupe. Vous pouvez supprimer ses membres (excepté dans certains groupes spéciaux) ou en ajouter de nouveaux.',
	'GROUP_MEMBERS'					=> 'Membres du groupe',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Ceci est la liste complète de tous les membres de ce groupe d’utilisateurs. Ils sont classés par chefs, membres en attente et membres existants. D’ici vous pouvez gérer tous les aspects de qui est adhérant de ce groupe et quel est son rôle. Pour supprimer un chef tout en le conservant dans le groupe, utilisez Dégrader plutôt que de le supprimer. De même, utilisez Promouvoir pour changer un membre existant en chef.',
	'GROUP_MESSAGE_LIMIT'			=> 'Limite des messages privés du groupe par dossier',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Ce réglage écrasera la limite des messages des utilisateurs par dossier. Une valeur de 0 signifie que la limite des utilisateurs par défaut sera utilisée.',
	'GROUP_MODS_ADDED'				=> 'Nouveaux chefs du groupe ajoutés avec succès.',
	'GROUP_MODS_DEMOTED'			=> 'Chefs du groupe dégradés avec succès.',
	'GROUP_MODS_PROMOTED'			=> 'Membres du groupe promus avec succès.',
	'GROUP_NAME'					=> 'Nom du groupe',
	'GROUP_NAME_TAKEN'				=> 'Le nom du groupe que vous avez entré est déjà utilisé, veuillez en sélectionner un autre.',
	'GROUP_OPEN'					=> 'Ouvert',
	'GROUP_PENDING'					=> 'Membres en attente',
	'GROUP_PROMOTE'					=> 'Promouvoir en chef du groupe',
	'GROUP_RANK'					=> 'Rang du groupe',
	'GROUP_RECEIVE_PM'				=> 'Groupe autorisé à recevoir des messages privés',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Veuillez noter que les groupes cachés ne sont pas autorisés à recevoir des messages, malgré ce réglage.',
	'GROUP_REQUEST'					=> 'Requête',
	'GROUP_SETTINGS_SAVE'			=> 'Réglages du groupe',
	'GROUP_TYPE'					=> 'Type du groupe',
	'GROUP_TYPE_EXPLAIN'			=> 'Cela détermine quels utilisateurs peuvent rejoindre ou voir ce groupe.',
	'GROUP_UPDATED'					=> 'Préférences du groupe mises à jour avec succès.',
	
	'GROUP_USERS_ADDED'				=> 'Nouveaux utilisateurs ajoutés au groupe avec succès.',
	'GROUP_USERS_EXIST'				=> 'Les utilisateurs sélectionnés sont déjà des membres.',
	'GROUP_USERS_REMOVE'			=> 'Utilisateurs supprimés de ce groupe et réglages du groupe par défaut réalisés avec succès.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Définir comme groupe par défaut pour tout membre',
	'MEMBERS'				=> 'Membres',

	'NO_GROUP'					=> 'Aucun groupe spécifié.',
	'NO_GROUPS_CREATED'			=> 'Aucun groupe n’a été crée pour l’instant.',
	'NO_PERMISSIONS'			=> 'Ne pas copier les permissions',
	'NO_USERS'					=> 'Vous n’avez pas entré tous les utilisateurs.',

	'SPECIAL_GROUPS'			=> 'Groupes prédéfinis',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Les groupes prédéfinis sont des groupes spéciaux, ils ne peuvent pas être supprimés ou directement modifiés. Cependant, vous pouvez y ajouter des utilisateurs et y modifier les réglages basiques.',

	'TOTAL_MEMBERS'				=> 'Membres',

	'USERS_APPROVED'				=> 'Utilisateurs approuvés avec succès.',
	'USER_DEFAULT'					=> 'Utilisateur par défaut',
	'USER_DEF_GROUPS'				=> 'Groupes définis pour l’utilisateur',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Ce sont des groupes créés par vous ou un autre administrateur du forum. Vous pouvez y gérer les adhérants, ainsi qu’éditer les propriétés du groupe ou même supprimer le groupe.',
	'USER_GROUP_DEFAULT'			=> 'Définir comme groupe par défaut',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'En mettant oui ici, vous attriburez ce groupe comme étant le groupe par défaut des utilisateurs ajoutés.',
	'USER_GROUP_LEADER'				=> 'Définir comme chef du groupe',
));

?>
