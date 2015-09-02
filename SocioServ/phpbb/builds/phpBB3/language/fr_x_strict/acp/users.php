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
* acp_users [French]
*
* @package language
* @version $Id: users.php,v 1.30 2007/08/13 12:14:06 acydburn Exp $
* @translation $Id: users.php,v 1.30 2007/08/20 02:04:14 xaphos Exp $
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
	'ADMIN_SIG_PREVIEW'		=> 'Aperçu de la signature',
	'AT_LEAST_ONE_FOUNDER'	=> 'Vous ne pouvez pas changer ce fondateur en utilisateur normal. Il est nécessaire d’avoir au moins un fondateur d’activé sur ce forum. Si vous souhaitez modifier le statut de ce fondateur, vous devez en tout d’abord promouvoir un autre utilisateur en fondateur.',

	'BAN_ALREADY_ENTERED'	=> 'Le bannissement a été précédemment entré avec succès. La liste des bannissements n’a pas été mise à jour.',
	'BAN_SUCCESSFUL'		=> 'Bannissement entré avec succès.',

	'CANNOT_BAN_FOUNDER'			=> 'Vous n’êtes pas autorisé à bannir les comptes de fondateurs.',
	'CANNOT_BAN_YOURSELF'			=> 'Vous n’êtes pas autorisé à vous bannir vous-même.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Vous n’êtes pas autorisé à désactiver les comptes de robots. Veuillez désactiver le robot à la place.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Vous n’êtes pas autorisé à désactiver les comptes de fondateurs.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Vous n’êtes pas autorisé à désactiver votre propre compte.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Vous n’êtes pas autorisé à forcer la réactivation sur les comptes de robots. Veuillez désactiver le robot à la place.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Vous n’êtes pas autorisé à forcer la réactivation sur les comptes de fondateurs.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Vous n’êtes pas autorisé à forcer la réactivation de votre propre compte.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Vous n’êtes pas autorisé à supprimer le compte d’un utilisateur invité.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Vous n’êtes pas autorisé à supprimer votre propre compte d’utilisateur.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Vous ne pouvez pas promouvoir des utilisateurs ignorés en fondateurs.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Vous devez activer les utilisateurs avant de les promouvoir en fondateurs, seuls les utilisateurs activés peuvent être promus.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Vous avez seulement besoin de spécifier cela que si vous modifiez les adresses e-mail des utilisateurs.',

	'DELETE_POSTS'			=> 'Supprimer les messages',
	'DELETE_USER'			=> 'Supprimer l’utilisateur',
	'DELETE_USER_EXPLAIN'	=> 'Veuillez noter que la suppression d’un utilisateur est irréversible, la restauration est impossible.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Réactivation forcée avec succès.',
	'FOUNDER'						=> 'Fondateur',
	'FOUNDER_EXPLAIN'				=> 'Les fondateurs ont toutes les permissions des administrateurs et ne peuvent pas être bannis, supprimés ou modifiés par des membres qui ne sont pas fondateurs.',

	'GROUP_APPROVE'					=> 'Approuver le membre',
	'GROUP_DEFAULT'					=> 'Mettre en groupe par défaut pour le membre',
	'GROUP_DELETE'					=> 'Supprimer le membre du groupe',
	'GROUP_DEMOTE'					=> 'Rétrograder le chef du groupe',
	'GROUP_PROMOTE'					=> 'Promouvoir en chef du groupe',

	'IP_WHOIS_FOR'			=> 'A qui appartient l’IP pour %s',

	'LAST_ACTIVE'			=> 'Dernier actif',

	'MOVE_POSTS_EXPLAIN'	=> 'Veuillez sélectionner le forum dans lequel vous souhaitez déplacer tous les messages de cet utilisateur.',

	'NO_SPECIAL_RANK'		=> 'Aucun rang spécial assigné',
	'NOT_MANAGE_FOUNDER'	=> 'Vous avez essayé de modifier un utilisateur ayant le statut de fondateur. Seuls les fondateurs sont autorisés à gérer d’autres fondateurs.',

	'QUICK_TOOLS'			=> 'Outils rapides',

	'REGISTERED'			=> 'Inscrit',
	'REGISTERED_IP'			=> 'Inscrit avec l’IP',
	'RETAIN_POSTS'			=> 'Conserver les messages',

	'SELECT_FORM'			=> 'Sélectionner un formulaire',
	'SELECT_USER'			=> 'Sélectionner un utilisateur',

	'USER_ADMIN'					=> 'Administration des utilisateurs',
	'USER_ADMIN_ACTIVATE'			=> 'Activer le compte',
	'USER_ADMIN_ACTIVATED'			=> 'Utilisateur activé avec succès.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Avatar du compte de l’utilisateur supprimé avec succès.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Bannir par e-mail',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Adresse e-mail bannie par l’intermédiaire de la gestion des utilisateurs',
	'USER_ADMIN_BAN_IP'				=> 'Bannir par IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP bannie par l’intermédiaire de la gestion des utilisateurs',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Nom d’utilisateur banni par l’intermédiaire de la gestion des utilisateurs',
	'USER_ADMIN_BAN_USER'			=> 'Bannir par nom d’utilisateur',
	'USER_ADMIN_DEACTIVATE'			=> 'Désactiver le compte',
	'USER_ADMIN_DEACTIVED'			=> 'Utilisateur désactivé avec succès.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Supprimer toutes les pièces jointes',
	'USER_ADMIN_DEL_AVATAR'			=> 'Supprimer l’avatar',
	'USER_ADMIN_DEL_POSTS'			=> 'Supprimer tous les messages',
	'USER_ADMIN_DEL_SIG'			=> 'Supprimer la signature',
	'USER_ADMIN_EXPLAIN'			=> 'Ici, vous pouvez modifier les informations de vos utilisateurs et certaines options spécifiques.',
	'USER_ADMIN_FORCE'				=> 'Forcer la réactivation',
	'USER_ADMIN_MOVE_POSTS'			=> 'Déplacer tous les messages',
	'USER_ADMIN_SIG_REMOVED'		=> 'Signature du compte de l’utilisateur supprimée avec succès.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Toutes les pièces jointes insérées par l’utilisateur ont été supprimées avec succès.',
	'USER_AVATAR_UPDATED'			=> 'Informations des avatars de l’utilisateur mises à jour avec succès.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Champs de profil personnalisés',
	'USER_DELETED'					=> 'Utilisateur supprimé avec succès.',
	'USER_GROUP_ADD'				=> 'Ajouter l’utilisateur au groupe',
	'USER_GROUP_NORMAL'				=> 'L’utilisateur est membre des groupes normaux de',
	'USER_GROUP_PENDING'			=> 'L’utilisateur est en attente d’adhésion aux groupes',
	'USER_GROUP_SPECIAL'			=> 'L’utilisateur est membre des groupes spéciaux de',
	'USER_NO_ATTACHMENTS'			=> 'Il n’y a aucune pièce jointe à afficher.',
	'USER_OVERVIEW_UPDATED'			=> 'Informations de l’utilisateur mises à jour avec succès.',
	'USER_POSTS_DELETED'			=> 'Tous les messages publiés par l’utilisateur ont été supprimés avec succès.',
	'USER_POSTS_MOVED'				=> 'Les messages de l’utilisateur ont été déplacés sur le forum cible avec succès.',
	'USER_PREFS_UPDATED'			=> 'Préférences de l’utilisateur mises à jour avec succès.',
	'USER_PROFILE'					=> 'Profil de l’utilisateur',
	'USER_PROFILE_UPDATED'			=> 'Profil de l’utilisateur mis à jour.',
	'USER_RANK'						=> 'Rang de l’utilisateur',
	'USER_RANK_UPDATED'				=> 'Rang de l’utilisateur mis à jour.',
	'USER_SIG_UPDATED'				=> 'Signature de l’utilisateur mise à jour avec succès.',
	'USER_TOOLS'					=> 'Outils basiques',
));

?>
