<?php
/**
*
* acp_groups [Standard french]
*
* @package language
* @version $Id: groups.php,v 1.28 2007/07/02 14:05:21 kellanved Exp $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Vous pouvez gérer ici les groupes d\'utilisateurs, en créer de nouveaux ou effacer/éditer ceux existants. De plus, vous pouvez définir les chefs de groupes, leurs statuts, (ouvert, fermé, caché), le nom et la description du groupe.',
	'ADD_USERS'						=> 'Ajouter des utilisateurs',
	'ADD_USERS_EXPLAIN'				=> 'Ici, vous pouvez ajouter de nouveaux utilisateurs aux groupes. Vous pouvez également choisir que le groupe sélectionné devienne le groupe par défaut pour les utilisateurs choisis. Vous pouvez les définir comme chefs de groupe. Indiquez un nom d\'utilisateur par ligne.',

	'COPY_PERMISSIONS'				=> 'Copier les permissions du groupe',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Une fois créé, le groupe aura les mêmes permissions que le groupe sélectionné.',
	'CREATE_GROUP'					=> 'Créer un nouveau groupe',

	'GROUPS_NO_MEMBERS'				=> 'Aucun membre dans ce groupe',
	'GROUPS_NO_MODS'				=> 'Aucun chef de groupe défini',
	'GROUP_APPROVE'					=> 'Accepter le membre',
	'GROUP_APPROVED'				=> 'Membres acceptés',
	'GROUP_AVATAR'					=> 'Avatar du groupe',
	'GROUP_AVATAR_EXPLAIN'			=> 'Cette image sera affichée dans le panneau de gestion des groupes.',
	'GROUP_CLOSED'					=> 'Fermé',
	'GROUP_COLOR'					=> 'Couleur du groupe',
	'GROUP_COLOR_EXPLAIN'			=> 'Définir la couleur dans laquelle les membres du groupe apparaissent, laissez vide pour garder les réglages par défaut.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Etes-vous sûr de voir ajouter l\'utilisateur %1$s au groupe?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Etes-vous sûr de voir ajouter les utilisateurs %1$s au groupe?',
	'GROUP_CREATED'					=> 'Le groupe a été crée.',
	'GROUP_DEFAULT'					=> 'Groupe par défaut',
	'GROUP_DEFS_UPDATED'			=> 'Le groupe a été défini par défaut pour les utilisateurs sélectionnés.',
	'GROUP_DELETE'					=> 'Supprimer le membre du groupe',
	'GROUP_DELETED'					=> 'Groupe supprimé, les utilisateurs de ce groupe ont été transférés dans le groupe par défaut.',
	'GROUP_DEMOTE'					=> 'Rétrograder le chef de groupe',
	'GROUP_DESC'					=> 'Description',
	'GROUP_DETAILS'					=> 'Informations',
	'GROUP_EDIT_EXPLAIN'			=> 'Ici vous pouvez modifier un groupe existant. Vous pouvez modifier son nom, sa description et son statut (ouvert, fermé, etc.). Vous pouvez également changer certains réglages. (couleurs, avatar, langue, etc.) Les changements effectués ici annulent les préférences utilisateur. Notez que les utilisateurs du groupe peuvent modifier les réglages d\'avatar de groupe seulement si vous leur en donnez la permission.',
	'GROUP_ERR_USERS_EXIST'			=> 'Les utilisateurs sélectionnés sont déjà membres de ce groupe.',
	'GROUP_FOUNDER_MANAGE'			=> 'Gestion par les fondateurs uniquement',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Limite la gestion de ce groupe aux fondateurs. Les utilisateurs ayant des permissions de groupes peuvent voir ce groupe, ainsi que les membres du groupe.',
	'GROUP_HIDDEN'					=> 'Invisible',
	'GROUP_LANG'					=> 'Langue du groupe',
	'GROUP_LEAD'					=> 'Chefs de groupe',
	'GROUP_LEADERS_ADDED'			=> 'De nouveaux chefs ont été ajoutés.',
	'GROUP_LEGEND'					=> 'Afficher le groupe dans la légende',
	'GROUP_LIST'					=> 'Membres actuels',
	'GROUP_LIST_EXPLAIN'			=> 'Voici la liste complète de tous les utilisateurs actuels de ce groupe. Vous pouvez supprimer ces membres (excepté dans certains groupes spéciaux) ou en ajouter de nouveaux.',
	'GROUP_MEMBERS'					=> 'Membres du groupe',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Voici la liste complète  des membres de ce groupe. Le groupe se présente ainsi: chefs de groupe, membres en attente, membres acceptés. D\'ici, vous pouvez gérer tous les réglages possibles sur les différents membres. Pour rétrograder un chef de groupe mais le conserver dans le groupe, utilisez "Rétrograder" plutôt que "Supprimer". Pareillement, utilisez "Promouvoir" pour passer un utilisateur en chef de groupe.',
	'GROUP_MESSAGE_LIMIT'			=> 'Limite de messages privés par dossier pour le groupe',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Ce réglage annulera la limite des messages des utilisateurs par dossier. Une valeur à "0" signifie que la limite des utilisateurs par défaut sera utilisée.',
	'GROUP_MODS_ADDED'				=> 'De nouveaux chefs de groupe ont été ajoutés.',
	'GROUP_MODS_DEMOTED'			=> 'Le chef de groupe a été rétrogradé.',
	'GROUP_MODS_PROMOTED'			=> 'Le chef de groupe a été promu.',
	'GROUP_NAME'					=> 'Nom du groupe',
	'GROUP_NAME_TAKEN'				=> 'Le nom du groupe que vous avez entré est déjà utilisé, sélectionnez-en un autre.',
	'GROUP_OPEN'					=> 'Ouvert',
	'GROUP_PENDING'					=> 'Membres en attente',
	'GROUP_PROMOTE'					=> 'Promouvoir en chef de groupe',
	'GROUP_RANK'					=> 'Rang du groupe',
	'GROUP_RECEIVE_PM'				=> 'Groupe autorisé à recevoir des messages privés',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Merci de noter que les groupes invisibles ne peuvent pas recevoir de messages privés, malgré ce réglage.',
	'GROUP_REQUEST'					=> 'A la demande',
	'GROUP_SETTINGS_SAVE'			=> 'Réglages du groupe',
	'GROUP_TYPE'					=> 'Type de groupe',
	'GROUP_TYPE_EXPLAIN'			=> 'Ce réglage détermine qui peut joindre ou voir ce groupe.',
	'GROUP_UPDATED'					=> 'Les réglages du groupe ont été mis à jour.',

	'GROUP_USERS_ADDED'				=> 'De nouveaux utilisateurs ont été ajoutés.',
	'GROUP_USERS_EXIST'				=> 'Les utilisateurs sélectionnés sont déjà membres de ce groupe.',
	'GROUP_USERS_REMOVE'			=> 'Utilisateurs supprimés du groupe et transférés dans le groupe par défaut.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Groupe par défaut pour tous les membres',
	'MEMBERS'				=> 'Membres',

	'NO_GROUP'					=> 'Aucun groupe spécifié.',
	'NO_GROUPS_CREATED'			=> 'Aucun groupe n\'a été créé.',
	'NO_PERMISSIONS'			=> 'Ne pas copier de permissions',
	'NO_USERS'					=> 'Vous n\'avez indiqué aucun utilisateur.',

	'SPECIAL_GROUPS'			=> 'Groupes prédéfinis',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Les groupes prédéfinis sont des groupes spéciaux, ils ne peuvent pas être supprimés ou modifiés. Vous pouvez néanmoins y ajouter des utilisateurs et modifier les réglages de base. En cliquant sur "Groupe par défaut", vous pouvez définir le groupe spécifié en tant que groupe par défaut pour tous ses membres.',

	'TOTAL_MEMBERS'				=> 'Membres',

	'USERS_APPROVED'				=> 'Les utilisateurs ont été acceptés.',
	'USER_DEFAULT'					=> 'Utilisateur par défaut',
	'USER_DEF_GROUPS'				=> 'Groupes définis par l\'utilisateur',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Ce sont des groupes créés par vous ou un autre administrateur du forum. Vous pouvez y gérer les membres, ainsi qu\'éditer les propriétés du groupe ou même supprimer le groupe.',
	'USER_GROUP_DEFAULT'			=> 'Définir comme groupe par défaut',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Si "oui", ce groupe sera le groupe par défaut des futurs utilisateurs ajoutés.',
	'USER_GROUP_LEADER'				=> 'Définir comme chef de groupe',
));

?>