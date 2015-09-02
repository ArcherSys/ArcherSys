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
* acp_forums [French]
*
* @package language
* @version $Id: forums.php,v 1.29 2007/07/16 14:02:06 acydburn Exp $
* @translation $Id: forums.php,v 0.29 2007/07/27 21:16:17 xaphos Exp $
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Durée du délestage automatique des messages',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Nombre de jours entre la publication du dernier message à la suppression du sujet.',
	'AUTO_PRUNE_FREQ'			=> 'Fréquence du délestage automatique',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Durée en jours entre les délestages automatiques.',
	'AUTO_PRUNE_VIEWED'			=> 'Durée du délestage automatique des message consultés',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Nombre de jours entre la dernière consultation du sujet à la suppression du sujet.',

	'COPY_PERMISSIONS'				=> 'Copier les permissions depuis',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Une fois créé, le forum aura les mêmes permissions que celles que vous avez sélectionnées ici. Si aucun forum n’est sélectionné, le forum nouvellement crée ne sera pas visible tant que les permissions n’ont pas été réglées.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Si vous choisissez de copier les permissions, le forum aura les mêmes permissions que celles que vous avez sélectionnées ici. Cela écrasera n’importe quelles permissions que vous avez réglé précédemment pour ce forum par les permissions du forum que vous avez sélectionné ici. Si aucun forum n’est sélectionné, les permissions actuelles seront conservées.',
	'CREATE_FORUM'					=> 'Créer un nouveau forum',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Supprimer ou déplacer le contenu vers un forum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Supprimer ou déplacer les sous-forums vers un forum',
	'DEFAULT_STYLE'						=> 'Style par défaut',
	'DELETE_ALL_POSTS'					=> 'Supprimer les messages',
	'DELETE_SUBFORUMS'					=> 'Supprimer les sous-forums et les messages',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Autoriser les sujets actifs',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Si réglé à oui, les sujets actifs dans le sous-forum sélectionné seront affichés sous cette catégorie.',

	'EDIT_FORUM'					=> 'Éditer le forum',
	'ENABLE_INDEXING'				=> 'Autoriser l’indexation de la recherche',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Si réglé à oui, les messages publiés sur ce forum seront indexés pour la recherche.',
	'ENABLE_POST_REVIEW'			=> 'Autoriser la revue des messages',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Si réglé à oui, les utilisateurs peuvent revoir leur message si de nouveaux messages ont été publiés sur le sujet après avoir rédigés le leur. Cela devrait être désactivé sur les forums de discussions.',
	'ENABLE_RECENT'					=> 'Afficher les sujets actifs',
	'ENABLE_RECENT_EXPLAIN'			=> 'Si réglé à oui, les sujets publiés sur ce forum seront affichés dans les liste des sujets actifs.',
	'ENABLE_TOPIC_ICONS'			=> 'Autoriser les icônes de sujets',

	'FORUM_ADMIN'						=> 'Administration des forums',
	'FORUM_ADMIN_EXPLAIN'				=> 'Dans phpBB3, il n’y a plus de catégories, tout est basé sur la notion de forums. Chaque forum peut contenir un nombre illimité de sous-forums et vous pouvez déterminer s’ils peuvent, ou non, contenir des messages (c-à-d. de se comporter ou non comme une ancienne catégorie). Ici, pour pouvez ajouter, éditer, supprimer, verrouiller ou déverrouiller individuellement des forums aussi bien que régler certains contrôles additionnels. Si vos messages et vos sujets se désynchronisent, vous pouvez également resynchroniser un forum. <strong>Vous devez copier ou régler les permission appropriées de chaque nouveau forum crée afin qu’ils soient visibles.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Activer le délestage automatique',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Déleste les sujets du forum, réglez les paramètres de fréquence/temps ci-dessous.',
	'FORUM_CREATED'						=> 'Forum crée avec succès.',
	'FORUM_DATA_NEGATIVE'				=> 'Les paramètres du délestage ne peuvent pas être négatifs.',
	'FORUM_DESC_TOO_LONG'				=> 'La description du forum est trop longue, elle doit être de moins de 4000 caractères.',
	'FORUM_DELETE'						=> 'Supprimer le forum',
	'FORUM_DELETE_EXPLAIN'				=> 'Le formulaire ci-dessous vous permet de supprimer un forum. Si la publication est possible dans ce forum, vous pouvez décider de l’emplacement où vous souhaitez placer tous les sujets (ou forums) qu’il contient.',
	'FORUM_DELETED'						=> 'Forum supprimé avec succès.',
	'FORUM_DESC'						=> 'Description',
	'FORUM_DESC_EXPLAIN'				=> 'Tout HTML entré ici sera affiché comme tel.',
	'FORUM_EDIT_EXPLAIN'				=> 'Le formulaire ci-dessous vous permet de personnaliser ce forum. Veuillez noter que cette modération et contrôles du compteur de messages sont réglés par l’intermédiaire des permissions du forum pour chaque utilisateur ou groupe d’utilisateurs.',
	'FORUM_IMAGE'						=> 'Image du forum',
	'FORUM_IMAGE_EXPLAIN'				=> 'Emplacement, relatif à la racine du répertoire de phpBB, d’une image additionnelle à associer à ce forum.',
	'FORUM_LINK_EXPLAIN'				=> 'URL complète (incluant le protocole, ex. : <samp>http://</samp>) vers l’emplacement de la destination, qui, une fois cliquée, enverra les utilisateurs vers ce forum, ex. : <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Compter les redirections',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Enregistre le nombre de fois que le lien a été cliqué.',
	'FORUM_NAME'						=> 'Nom du forum',
	'FORUM_NAME_EMPTY'					=> 'Vous devez entrer un nom pour ce forum.',
	'FORUM_PARENT'						=> 'Forum parent',
	'FORUM_PASSWORD'					=> 'Mot de passe du forum',
	'FORUM_PASSWORD_CONFIRM'			=> 'Confirmer le mot de passe du forum',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'À compléter que si un mot de passe du forum a été entré.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Définissez un mot de passe pour ce forum, utilisez de préférence le système de permissions.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Les mots de passes que vous avez entrés ne concordent pas.',
	'FORUM_PRUNE_SETTINGS'				=> 'Réglages du délestage du forum',
	'FORUM_RESYNCED'					=> 'Forum "%s" resynchronisé avec succès',
	'FORUM_RULES_EXPLAIN'				=> 'Les règles du forum sont affichées sur chaque page du forum.',
	'FORUM_RULES_LINK'					=> 'Lien vers les règles du forum',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Vous pouvez entrer ici l’URL de la page/message contenant vos règles du forum. Ce réglage écrasera le texte des règles du forum que vous avez spécifié.',
	'FORUM_RULES_PREVIEW'				=> 'Aperçu des règles du forum',
	'FORUM_RULES_TOO_LONG'				=> 'Les règles du forum doivent être de moins de 4000 caractères.',
	'FORUM_SETTINGS'					=> 'Réglages du forum',
	'FORUM_STATUS'						=> 'Statut du forum',
	'FORUM_STYLE'						=> 'Style du forum',
	'FORUM_TOPICS_PAGE'					=> 'Sujets par page',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Si cette valeur est autre que zéro, elle remplacera le réglage par défaut des sujets par page.',
	'FORUM_TYPE'						=> 'Type du forum',
	'FORUM_UPDATED'						=> 'Informations du forum mises à jour avec succès.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Vous souhaitez modifier un forum qui contient des sous-forums dans lesquels vous pouvez rédiger des messages en un lien. Avant de procéder, veuillez déplacer tous les sous-forums hors de ce forum, car une fois le forum modifié en un forum-lien, vous ne pourrez plus consulter les sous-forums qu’il contient.',

	'GENERAL_FORUM_SETTINGS'	=> 'Réglages généraux du forum',

	'LINK'					=> 'Lien',
	'LIST_INDEX'			=> 'Lister le sous-forum dans la légende du forum parent',
	'LIST_INDEX_EXPLAIN'	=> 'Affiche ce forum sur l’index et ailleurs comme lien dans la légende de son forum parent.',
	'LOCKED'				=> 'Verrouillé',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Le forum que vous avez sélectionné pour le déplacement des messages n’est pas publiable. Veuillez sélectionner un forum publiable.',
	'MOVE_POSTS_TO'					=> 'Déplacer les messages vers',
	'MOVE_SUBFORUMS_TO'				=> 'Déplacer les sous-forums vers',

	'NO_DESTINATION_FORUM'			=> 'Vous n’avez pas spécifié de forum pour y déplacer le contenu.',
	'NO_FORUM_ACTION'				=> 'Aucune action définie pour ce qui se passe avec le contenu du forum.',
	'NO_PARENT'						=> 'Aucun parent',
	'NO_PERMISSIONS'				=> 'Ne pas copier les permissions',
	'NO_PERMISSION_FORUM_ADD'		=> 'Vous n’avez pas les permissions nécessaires pour ajouter des forums.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Vous n’avez pas les permissions nécessaires pour supprimer des forums.',

	'PARENT_IS_LINK_FORUM'		=> 'Le parent que vous avez sélectionné est un forum de lien. Les forums de liens ne peuvent pas contenir d’autres forums, veuillez spécifier une catégorie ou un forum comme forum parent.',
	'PARENT_NOT_EXIST'			=> 'Le parent n’existe pas.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Délester les annonces',
	'PRUNE_STICKY'				=> 'Délester les posts-it',
	'PRUNE_OLD_POLLS'			=> 'Délester les anciens sondages',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Supprime les sujets avec des sondages sans votes durant ce nombre de jours.',
	
	'REDIRECT_ACL'	=> 'Vous pouvez à présent %srégler les permissions%s de ce forum.',

	'SYNC_IN_PROGRESS'			=> 'Synchronisation du forum',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Resynchronisation des sujets %1$d/%2$d en cours.',

	'TYPE_CAT'			=> 'Catégorie',
	'TYPE_FORUM'		=> 'Forum',
	'TYPE_LINK'			=> 'Lien',

	'UNLOCKED'			=> 'Déverrouillé',
));

?>
