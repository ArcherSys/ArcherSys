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
* mcp [French]
*
* @package language
* @version $Id: mcp.php,v 1.81 2007/07/19 20:37:52 acydburn Exp $
* @translation $Id: mcp.php,v 1.81 2007/07/27 20:16:34 xaphos Exp $
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
	'ACTION'				=> 'Action',
	'ACTION_NOTE'			=> 'Action/Note',
	'ADD_FEEDBACK'			=> 'Ajouter une évaluation',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Si vous souhaitez ajouter une évaluation, veuillez compléter le formulaire suivant. Utilisez seulement du texte brut ; le HTML, BBCode, etc. ne sont pas autorisés.',
	'ADD_WARNING'			=> 'Ajouter un avertissement',
	'ADD_WARNING_EXPLAIN'	=> 'Pour envoyer un avertissement à cet utilisateur, veuillez compléter le formulaire suivant. Utilisez seulement du texte brut ; le HTML, BBCode, etc. ne sont pas autorisés.',
	'ALL_ENTRIES'			=> 'Toutes les entrées',
	'ALL_NOTES_DELETED'		=> 'Toutes les notes de cet utilisateur ont été supprimées avec succès.',
	'ALL_REPORTS'			=> 'Tous les rapports',
	'ALREADY_REPORTED'		=> 'Ce message a déjà été rapporté.',
	'ALREADY_WARNED'		=> 'Un avertissement a déjà été prononcé sur ce message.',
	'APPROVE'				=> 'Approuver',
	'APPROVE_POST'			=> 'Approuver le message',
	'APPROVE_POST_CONFIRM'	=> 'Êtes-vous sûr de vouloir approuver ce message ?',
	'APPROVE_POSTS'			=> 'Approuver les messages sélectionnés',
	'APPROVE_POSTS_CONFIRM'	=> 'Êtes-vous sûr de vouloir approuver les messages sélectionnés ?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Vous ne pouvez pas déplacer le sujet vers ce forum car il existe déjà dans celui-ci.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Vous ne pouvez pas envoyer d’avertissement aux visiteurs.',
	'CANNOT_WARN_SELF'		=> 'Vous ne pouvez pas envoyer d’avertissement à vous-même.',
	'CAN_LEAVE_BLANK'		=> 'Ceci peut être laissé vide.',
	'CHANGE_POSTER'			=> 'Modifier l’auteur',
	'CLOSE_REPORT'			=> 'Fermer le rapport',
	'CLOSE_REPORT_CONFIRM'	=> 'Êtes-vous sûr de vouloir fermer ce rapport ?',
	'CLOSE_REPORTS'			=> 'Fermer les rapports sélectionnés',
	'CLOSE_REPORTS_CONFIRM'	=> 'Êtes-vous sûr de vouloir fermer les rapports sélectionnés ?',

	'DELETE_POSTS'				=> 'Supprimer les messages sélectionnés',
	'DELETE_POSTS_CONFIRM'		=> 'Êtes-vous sûr de vouloir supprimer les messages sélectionnés ?',
	'DELETE_POST_CONFIRM'		=> 'Êtes-vous sûr de vouloir supprimer ce message ?',
	'DELETE_REPORT'				=> 'Supprimer le rapport',
	'DELETE_REPORT_CONFIRM'		=> 'Êtes-vous sûr de vouloir supprimer ce rapport ?',
	'DELETE_REPORTS'			=> 'Supprimer les rapports sélectionnés',
	'DELETE_REPORTS_CONFIRM'	=> 'Êtes-vous sûr de vouloir supprimer les rapports sélectionnés ?',
	'DELETE_SHADOW_TOPIC'		=> 'Supprimer le sujet traceur',
	'DELETE_TOPICS'				=> 'Supprimer les sujets sélectionnés',
	'DELETE_TOPICS_CONFIRM'		=> 'Êtes-vous sûr de vouloir supprimer les sujets sélectionnés ?',
	'DELETE_TOPIC_CONFIRM'		=> 'Êtes-vous sûr de vouloir supprimer ce sujet ?',
	'DISAPPROVE'				=> 'Désapprouver',
	'DISAPPROVE_REASON'			=> 'Raison de la désapprobation',
	'DISAPPROVE_POST'			=> 'Désapprouver le message',
	'DISAPPROVE_POST_CONFIRM'	=> 'Êtes-vous sûr de vouloir désapprouver ce message ?',
	'DISAPPROVE_POSTS'			=> 'Désapprouver les messages sélectionnés',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Êtes-vous sûr de vouloir désapprouver les messages sélectionnés ?',
	'DISPLAY_LOG'				=> 'Afficher les entrées précédentes',
	'DISPLAY_OPTIONS'			=> 'Options d’affichage',

	'EMPTY_REPORT'					=> 'Vous devez saisir une description lorsque vous sélectionnez cette raison.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Veuillez noter qu’un ou plusieurs sujets ont été supprimés de la base de données car ils étaient ou devenaient vides.',

	'FEEDBACK'				=> 'Évaluation',
	'FORK'					=> 'Copier',
	'FORK_TOPIC'			=> 'Copier le sujet',
	'FORK_TOPIC_CONFIRM'	=> 'Êtes-vous sûr de vouloir copier ce sujet ?',
	'FORK_TOPICS'			=> 'Copier les sujets sélectionnés',
	'FORK_TOPICS_CONFIRM'	=> 'Êtes-vous sûr de vouloir copier les sujets sélectionnés ?',
	'FORUM_DESC'			=> 'Description',
	'FORUM_NAME'			=> 'Nom du forum',
	'FORUM_NOT_EXIST'		=> 'Le forum que vous avez sélectionné n’existe pas.',
	'FORUM_NOT_POSTABLE'	=> 'Le forum que vous avez sélectionné ne peut pas contenir de sujets ou de messages.',
	'FORUM_STATUS'			=> 'Statut du forum',
	'FORUM_STYLE'			=> 'Style du forum',

	'GLOBAL_ANNOUNCEMENT'	=> 'Annonce globale',

	'IP_INFO'				=> 'Information sur l’adresse IP',
	'IPS_POSTED_FROM'		=> 'Adresse IP de l’auteur',

	'LATEST_LOGS'				=> 'Les 5 dernières évènements',
	'LATEST_REPORTED'			=> 'Les 5 derniers rapports',
	'LATEST_UNAPPROVED'			=> 'Les 5 derniers messages en attente d’approbation',
	'LATEST_WARNING_TIME'		=> 'Le dernier avertissement publié',
	'LATEST_WARNINGS'			=> 'Les 5 derniers avertissements',
	'LEAVE_SHADOW'				=> 'Laisser un sujet traceur sur place',
	'LIST_REPORT'				=> '1 rapport',
	'LIST_REPORTS'				=> '%d rapports',
	'LOCK'						=> 'Verrouiller',
	'LOCK_POST_POST'			=> 'Verrouiller le message',
	'LOCK_POST_POST_CONFIRM'	=> 'Êtes-vous sûr de vouloir empêcher l’édition de ce message ?',
	'LOCK_POST_POSTS'			=> 'Verrouiller les messages sélectionnés',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Êtes-vous sûr de vouloir empêcher l’édition des messages sélectionnés ?',
	'LOCK_TOPIC_CONFIRM'		=> 'Êtes-vous sûr de vouloir verrouiller ce sujet ?',
	'LOCK_TOPICS'				=> 'Verrouiller les sujets sélectionnés',
	'LOCK_TOPICS_CONFIRM'		=> 'Êtes-vous sûr de vouloir verrouiller les sujets sélectionnés ?',
	'LOGS_CURRENT_TOPIC'		=> 'Consulte actuellement l’historique de :',
	'LOGIN_EXPLAIN_MCP'			=> 'Vous devez vous connecter pour modérer ce forum.',
	'LOGVIEW_VIEWTOPIC'			=> 'Voir le sujet',
	'LOGVIEW_VIEWLOGS'			=> 'Voir l’historique de ce sujet',
	'LOGVIEW_VIEWFORUM'			=> 'Voir le forum',
	'LOOKUP_ALL'				=> 'Rechercher toutes les IP',
	'LOOKUP_IP'					=> 'Rechercher une IP',

	'MARKED_NOTES_DELETED'		=> 'Toutes les notes de l’utilisateur sélectionné ont été supprimées avec succès.',

	'MCP_ADD'						=> 'Ajouter un avertissement',

	'MCP_BAN'					=> 'Bannissement',
	'MCP_BAN_EMAILS'			=> 'Bannir des e-mail',
	'MCP_BAN_IPS'				=> 'Bannir des IP',
	'MCP_BAN_USERNAMES'			=> 'Bannir des noms d’utilisateurs',

	'MCP_LOGS'						=> 'Historiques des modérateurs',
	'MCP_LOGS_FRONT'				=> 'Page principale',
	'MCP_LOGS_FORUM_VIEW'			=> 'Historiques des forums',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Historiques des sujets',

	'MCP_MAIN'						=> 'Principal',
	'MCP_MAIN_FORUM_VIEW'			=> 'Voir le forum',
	'MCP_MAIN_FRONT'				=> 'Page principale',
	'MCP_MAIN_POST_DETAILS'			=> 'Informations du message',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Voir le sujet',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Modifier en “Annonce”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Êtes-vous sûr de vouloir modifier ce sujet en “Annonce” ?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Modifier en “Annonces”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Êtes-vous sûr de vouloir modifier les sujets sélectionnés en “Annonces” ?',
	'MCP_MAKE_GLOBAL'				=> 'Modifier en “Annonce Globale”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Êtes-vous sûr de vouloir modifier ce sujet en “Annonce Globale” ?',
	'MCP_MAKE_GLOBALS'				=> 'Modifier en “Annonces Globales”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Êtes-vous sûr de vouloir modifier les sujets sélectionnés en “Annonces Globales” ?',
	'MCP_MAKE_STICKY'				=> 'Modifier en “Post-it”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Êtes-vous sûr de vouloir modifier ce sujet en “Post-it” ?',
	'MCP_MAKE_STICKIES'				=> 'Modifier en “Post-it”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Êtes-vous sûr de vouloir modifier les sujets sélectionnés en “Post-it” ?',
	'MCP_MAKE_NORMAL'				=> 'Modifier en “Sujet Standard”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Êtes-vous sûr de vouloir modifier ce sujet en “Sujet Standard” ?',
	'MCP_MAKE_NORMALS'				=> 'Modifier en “Sujets Standards”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Êtes-vous sûr de vouloir modifier les sujets sélectionnés en “Sujets Standards” ?',

	'MCP_NOTES'						=> 'Notes de l’utilisateur',
	'MCP_NOTES_FRONT'				=> 'Page principale',
	'MCP_NOTES_USER'				=> 'Informations de l’utilisateur',

	'MCP_POST_REPORTS'				=> 'Rapports publiés sur ce message',

	'MCP_REPORTS'					=> 'Messages rapportés',
	'MCP_REPORT_DETAILS'			=> 'Informations du rapport',
	'MCP_REPORTS_CLOSED'			=> 'Rapports fermés',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Ceci est une liste de tous les messages rapportés qui ont été résolus précédemment.',
	'MCP_REPORTS_OPEN'				=> 'Rapports ouverts',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Ceci est une liste de tous les messages rapportés qui sont en attente de traitement.',

	'MCP_QUEUE'								=> 'File d’attente de modération',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Approuver les informations',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Messages en attente d’approbation',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Ceci est une liste de tous les messages qui demandent une approbation avant qu’ils soient visibles aux utilisateurs.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Sujets en attente d’approbation',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Ceci est une liste de tous les sujets qui demandent une approbation avant qu’ils soient visibles aux utilisateurs.',

	'MCP_VIEW_USER'			=> 'Voir les avertissements d’un utilisateur spécifique',

	'MCP_WARN'				=> 'Avertissements',
	'MCP_WARN_FRONT'		=> 'Page principale',
	'MCP_WARN_LIST'			=> 'Liste des avertissements',
	'MCP_WARN_POST'			=> 'Avertir pour le message spécifique',
	'MCP_WARN_USER'			=> 'Avertir l’utilisateur',

	'MERGE_POSTS'			=> 'Fusionner les messages sélectionnés',
	'MERGE_POSTS_CONFIRM'	=> 'Êtes-vous sûr de vouloir fusionner les messages sélectionnés ?',
	'MERGE_TOPIC_EXPLAIN'	=> 'En utilisant le formulaire ci-dessous, vous pouvez fusionner les messages sélectionnés dans un autre sujet. Ces messages ne seront pas réordonnés et apparaîtront comme si les utilisateurs les avaient publiés dans le nouveau sujet.<br />Veuillez saisir le numéro d’identification du sujet de destination ou cliquer sur “Sélectionner le sujet” pour en rechercher un.',
	'MERGE_TOPIC_ID'		=> 'Numéro d’identification du sujet de destination',
	'MERGE_TOPICS'			=> 'Fusionner les sujets sélectionnés',
	'MERGE_TOPICS_CONFIRM'	=> 'Êtes-vous sûr de vouloir fusionner les sujets sélectionnés ?',
	'MODERATE_FORUM'		=> 'Modérer le forum',
	'MODERATE_TOPIC'		=> 'Modérer le sujet',
	'MODERATE_POST'			=> 'Modérer le message',
	'MOD_OPTIONS'			=> 'Options de modération',
	'MORE_INFO'				=> 'Plus d’informations',
	'MOST_WARNINGS'			=> 'Utilisateurs les plus avertis',
	'MOVE_TOPIC_CONFIRM'	=> 'Êtes-vous sûr de vouloir déplacer le sujet vers le nouveau forum ?',
	'MOVE_TOPICS'			=> 'Déplacer les sujets sélectionnés',
	'MOVE_TOPICS_CONFIRM'	=> 'Êtes-vous sûr de vouloir déplacer les sujets sélectionnés vers le nouveau forum ?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Voulez-vous avertir l’auteur du message à propos de l’approbation ?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Voulez-vous avertir l’auteur du message à propos de la désapprobation ?',
	'NOTIFY_USER_WARN'				=> 'Voulez-vous avertir l’utilisateur à propos de l’avertissement ?',
	'NOT_MODERATOR'					=> 'Vous n’êtes pas un modérateur de ce forum.',
	'NO_DESTINATION_FORUM'			=> 'Veuillez sélectionner un forum de destination.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Il n’y a aucun forum de destination disponible.',
	'NO_ENTRIES'					=> 'Aucune entrée pour cette période.',
	'NO_FEEDBACK'					=> 'Aucune évaluation n’est existante pour cet utilisateur.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Vous devez sélectionner un sujet de destination afin de fusionner les messages.',
	'NO_MATCHES_FOUND'				=> 'Aucun résultat pour la recherche effectuée.',
	'NO_POST'						=> 'Vous devez sélectionner un message dans l’ordre pour avertir l’utilisateur du message.',
	'NO_POST_REPORT'				=> 'Ce message n’a pas été rapporté.',
	'NO_POST_SELECTED'				=> 'Vous devez sélectionner au moins un message pour effectuer cette opération.',
	'NO_REASON_DISAPPROVAL'			=> 'Veuillez spécifier une raison appropriée pour la désapprobation.',
	'NO_REPORT'						=> 'Aucun rapport',
	'NO_REPORTS'					=> 'Aucun rapport',	
	'NO_REPORT_SELECTED'			=> 'Vous devez sélectionner au moins un rapport pour effectuer cette opération.',
	'NO_TOPIC_ICON'					=> 'Aucun',
	'NO_TOPIC_SELECTED'				=> 'Vous devez sélectionner au moins un sujet pour effectuer cette opération.',
	'NO_TOPICS_QUEUE'				=> 'Il n’y a aucun sujet en attente d’approbation.',

	'ONLY_TOPIC'			=> 'Uniquement le sujet "%s"',
	'OTHER_USERS'			=> 'Autres utilisateurs ayant publiés avec cette IP',

	'POSTER'					=> 'Rédacteur',
	'POSTS_APPROVED_SUCCESS'	=> 'Les messages sélectionnés ont été approuvés.',
	'POSTS_DELETED_SUCCESS'		=> 'Les messages sélectionnés ont été supprimés de la base de données avec succès.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Les messages sélectionnés ont été désapprouvés.',
	'POSTS_LOCKED_SUCCESS'		=> 'Les messages sélectionnés ont été verrouillés avec succès.',
	'POSTS_MERGED_SUCCESS'		=> 'Les messages sélectionnés ont été fusionnés.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Les messages sélectionnés ont été déverrouillés avec succès.',
	'POSTS_PER_PAGE'			=> 'Messages par page',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Réglez à 0 pour voir tous les messages.)',
	'POST_APPROVED_SUCCESS'		=> 'Le message sélectionné a été approuvé.',
	'POST_DELETED_SUCCESS'		=> 'Le message sélectionné a été supprimé de la base de données avec succès.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Le message sélectionné a été désapprouvé.',
	'POST_LOCKED_SUCCESS'		=> 'Le message a été verrouillé avec succès.',
	'POST_NOT_EXIST'			=> 'Le message que vous avez demandé n’existe pas.',
	'POST_REPORTED_SUCCESS'		=> 'Ce message a été rapporté avec succès.',
	'POST_UNLOCKED_SUCCESS'		=> 'Le message a été déverrouillé avec succès.',

	'READ_USERNOTES'			=> 'Notes de l’utilisateur',
	'READ_WARNINGS'				=> 'Avertissements de l’utilisateur',
	'REPORTER'					=> 'Auteur du rapport',
	'REPORTED'					=> 'Rapporté',
	'REPORTED_BY'				=> 'Rapporté par',
	'REPORTED_ON_DATE'			=> 'le',
	'REPORTS_CLOSED_SUCCESS'	=> 'Les rapports sélectionnés ont été fermés avec succès.',
	'REPORTS_DELETED_SUCCESS'	=> 'Les rapports sélectionnés ont été supprimés avec succès.',
	'REPORTS_TOTAL'				=> 'Au total il y a <strong>%d</strong> rapports à revoir.',
	'REPORTS_ZERO_TOTAL'		=> 'Il n’y a aucun rapport à revoir.',
	'REPORT_CLOSED'				=> 'Ce rapport a déjà été fermé.',
	'REPORT_CLOSED_SUCCESS'		=> 'Le rapport sélectionné a été fermé avec succès.',
	'REPORT_DELETED_SUCCESS'	=> 'Le rapport sélectionné a été supprimé avec succès.',
	'REPORT_DETAILS'			=> 'Rapporter les informations',
	'REPORT_MESSAGE'			=> 'Rapporter ce message',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Utilisez ce formulaire pour rapporter le message sélectionné. Cela devrait être employé que si le message viole des règles du forum.',
	'REPORT_NOTIFY'				=> 'M’avertir',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Vous avertir lorsque votre rapport sera traité.',
	'REPORT_POST_EXPLAIN'		=> 'Utilisez ce formulaire pour rapporter le message sélectionné aux modérateurs et aux administrateurs du forum. Cela devrait être employé que si le message viole des règles du forum.',
	'REPORT_REASON'				=> 'Raison du rapport',
	'REPORT_TIME'				=> 'Date du rapport',
	'REPORT_TOTAL'				=> 'Au total il y a <strong>1</strong> rapport à revoir.',
	'RESYNC'					=> 'Resynchroniser',
	'RETURN_MESSAGE'			=> '%sRetourner au message%s',
	'RETURN_NEW_FORUM'			=> '%sRetourner au nouveau forum%s',
	'RETURN_NEW_TOPIC'			=> '%sRetourner au nouveau sujet%s',
	'RETURN_POST'				=> '%sRetourner au message%s',
	'RETURN_QUEUE'				=> '%sRetourner à la file d’attente%s',
	'RETURN_REPORTS'			=> '%sRetourner aux rapports%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sRetourner au sujet%s',

	'SEARCH_POSTS_BY_USER'				=> 'Rechercher les messages de',
	'SELECT_ACTION'						=> 'Sélectionner une action souhaitée',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Veuillez sélectionner le forum dans lequel vous souhaitez afficher cette annonce globale.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Un ou plusieurs sujets sélectionnés sont des annonces globales. Veuillez sélectionner le forum dans lequel vous souhaitez qu’elles soient affichées.',
	'SELECT_MERGE'						=> 'Sélectionner pour la fusion',
	'SELECT_TOPICS_FROM'				=> 'Sélectionner des sujets de',
	'SELECT_TOPIC'						=> 'Sélectionner un sujet',
	'SELECT_USER'						=> 'Sélectionner un utilisateur',
	'SORT_ACTION'						=> 'Historique',
	'SORT_DATE'							=> 'Date',
	'SORT_IP'							=> 'Adresse IP',
	'SORT_WARNINGS'						=> 'Avertissements',
	'SPLIT_AFTER'						=> 'Division du message sélectionné',
	'SPLIT_FORUM'						=> 'Forum pour le nouveau sujet',
	'SPLIT_POSTS'						=> 'Diviser les messages sélectionnés',
	'SPLIT_SUBJECT'						=> 'Titre du nouveau sujet',
	'SPLIT_TOPIC_ALL'					=> 'Diviser le sujet des messages sélectionnés',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Êtes-vous sûr de vouloir diviser ce sujet ?',
	'SPLIT_TOPIC_BEYOND'				=> 'Diviser le sujet à partir du message sélectionné',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Êtes-vous sûr de vouloir diviser ce sujet à partir du message sélectionné ?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Utilisez le formulaire ci-dessous vous permet de diviser un sujet en deux, en choisissant les sujets individuellement ou en divisant à partir d’un sujet sélectionné.',

	'THIS_POST_IP'				=> 'IP de ce message.',
	'TOPICS_APPROVED_SUCCESS'	=> 'Les sujets sélectionnés ont été approuvés.',
	'TOPICS_DELETED_SUCCESS'	=> 'Les sujets sélectionnés ont été supprimés de la base de données avec succès.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Les sujets sélectionnés ont été désapprouvés.',
	'TOPICS_FORKED_SUCCESS'		=> 'Les sujets sélectionnés ont été copiés avec succès.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Les sujets sélectionnés ont été verrouillés.',
	'TOPICS_MOVED_SUCCESS'		=> 'Les sujets sélectionnés ont été déplacés avec succès.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Les sujets sélectionnés ont été resynchronisés.',
	'TOPICS_TYPE_CHANGED'		=> 'Les types de sujets ont été changés avec succès.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Les sujets sélectionnés ont été déverrouillés.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Le sujet sélectionné a été approuvé.',
	'TOPIC_DELETED_SUCCESS'		=> 'Le sujet sélectionné a été supprimé de la base de données avec succès.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Le sujet sélectionné a été désapprouvé.',
	'TOPIC_FORKED_SUCCESS'		=> 'Le sujet sélectionné a été copié avec succès.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Le sujet sélectionné a été verrouillé.',
	'TOPIC_MOVED_SUCCESS'		=> 'Le sujet sélectionné a été déplacé avec succès.',
	'TOPIC_NOT_EXIST'			=> 'Le sujet que vous avez sélectionné n’existe pas.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Le sujet sélectionné a été resynchronisé.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Le sujet sélectionné a été divisé avec succès.',
	'TOPIC_TIME'				=> 'Heure du sujet',
	'TOPIC_TYPE_CHANGED'		=> 'Type de sujet changé avec succès.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Le sujet sélectionné a été déverrouillé.',
	'TOTAL_WARNINGS'			=> 'Avertissements au total',

	'UNAPPROVED_POSTS_TOTAL'		=> 'Au total il y a <strong>%d</strong> messages en attente d’approbation.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Il n’y a aucun message en attente d’approbation.',
	'UNAPPROVED_POST_TOTAL'			=> 'Au total il y a <strong>1</strong> message en attente d’approbation.',
	'UNLOCK'						=> 'Déverrouiller',
	'UNLOCK_POST'					=> 'Déverrouiller le message',
	'UNLOCK_POST_EXPLAIN'			=> 'Autoriser l’édition',
	'UNLOCK_POST_POST'				=> 'Déverrouiller le message',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Êtes-vous sûr de vouloir autoriser l’édition de ce message ?',
	'UNLOCK_POST_POSTS'				=> 'Déverrouiller les messages sélectionnés',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Êtes-vous sûr de vouloir autoriser l’édition des messages sélectionnés ?',
	'UNLOCK_TOPIC'					=> 'Déverrouiller le sujet',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Êtes-vous sûr de vouloir déverrouiller ce sujet ?',
	'UNLOCK_TOPICS'					=> 'Déverrouiller les sujets sélectionnés',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Êtes-vous sûr de vouloir déverrouiller les sujets sélectionnés ?',
	'USER_CANNOT_POST'				=> 'Vous ne pouvez pas rédiger dans ce forum.',
	'USER_CANNOT_REPORT'			=> 'Vous ne pouvez pas rapporter de messages dans ce forum.',
	'USER_FEEDBACK_ADDED'			=> 'L’évaluation de l’utilisateur a été ajoutée avec succès.',
	'USER_WARNING_ADDED'			=> 'L’utilisateur a été averti avec succès.',

	'VIEW_DETAILS'			=> 'Voir les informations',

	'WARNED_USERS'			=> 'Utilisateurs avertis',
	'WARNED_USERS_EXPLAIN'	=> 'Ceci est une liste des utilisateurs avertis dont la période d’avertissement n’est pas expirée.',
	'WARNING_PM_BODY'		=> 'Ce qui suit est un avertissement prononcé à votre encontre par un administrateur ou un modérateur de ce forum.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Avertissement',
	'WARNING_POST_DEFAULT'	=> 'Ce qui suit est un avertissement concernant votre message suivant : %s.',
	'WARNINGS_ZERO_TOTAL'	=> 'Aucun avertissement existant.',

	'YOU_SELECTED_TOPIC'	=> 'Vous avez sélectionné le sujet numéro %d : %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Piratage',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Hors-sujet',
			'OTHER'		=> 'Autre',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Le message rapporté contient des liens vers des ressources illégales ou des logiciels piratés.',
			'SPAM'		=> 'Le message rapporté ne contient que de la publicité visant à promouvoir un site Internet ou un produit divers.',
			'OFF_TOPIC'	=> 'Le message rapporté est hors-sujet.',
			'OTHER'		=> 'Le message rapporté n’entre dans aucune autre catégorie, veuillez utiliser le champ d’information supplémentaire.'
		)
	),
));

?>
