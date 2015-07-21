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
* acp_prune [French]
*
* @package language
* @version $Id: prune.php,v 1.13 2007/05/11 12:25:28 acydburn Exp $
* @translation $Id: prune.php,v 0.13 2007/07/09 03:22:47 xaphos Exp $
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Ici, vous pouvez supprimer (ou désactiver) des utilisateurs de votre forum. Cela peut être fait pour de multiples raisons ; par le compteur de messages, la dernière activité, etc. Chacun de ces critères peuvent être combinés, c-à-d que vous pouvez délester les utilisateurs dont la dernière activité était le 2002-01-01 et ayant moins de 10 messages. Alternativement, vous pouvez entrer une liste d’utilisateurs directement dans la boîte de texte, tout critère entré sera ignoré. Soyez vigilant avec cette fonctionnalité ! Une fois qu’un utilisateur a été supprimé, vous ne pourrez pas revenir en arrière.',

	'DEACTIVATE_DELETE'			=> 'Désactiver ou supprimer',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Choisissez entre désactiver des utilisateurs ou de les supprimer définitivement, notez que c’est irréversible !',
	'DELETE_USERS'				=> 'Supprimer',
	'DELETE_USER_POSTS'			=> 'Supprimer les messages d’utilisateurs délestés',
	'DELETE_USER_POSTS_EXPLAIN' => 'Supprime les messages d’utilisateurs délestés, cela n’aura aucun effet si les utilisateurs sont désactivés.',

	'JOINED_EXPLAIN'			=> 'Entrez une date au format <kbd>AAAA-MM-JJ</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Entrez une date au format <kbd>AAAA-MM-JJ</kbd>.',

	'PRUNE_USERS_LIST'				=> 'Utilisateurs à délester',
	'PRUNE_USERS_LIST_DELETE'		=> 'Avec le critère sélectionné pour le délestage des utilisateurs, les comptes suivants seront supprimés.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Avec le critère sélectionné pour le délestage des utilisateurs, les comptes suivants seront désactivés.',

	'SELECT_USERS_EXPLAIN'		=> 'Entrez ici des noms d’utilisateurs spécifiques, ils seront utilisés de préférence aux critères ci-dessus.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Les utilisateurs sélectionnés ont été désactivés avec succès.',
	'USER_DELETE_SUCCESS'		=> 'Les utilisateurs sélectionnés ont été supprimés avec succès.',
	'USER_PRUNE_FAILURE'		=> 'Aucun utilisateur ne correspond au critère sélectionné.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'La date entrée est mauvaise, il est nécessaire qu’elle soit au format <kbd>AAAA-MM-JJ</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Ceci supprimera tout sujets n’ayant aucune réponse ou n’ayant pas été consultés depuis le nombre de jours que vous avez sélectionné. Si vous n’entrez pas de numéro alors tous les sujets seront supprimés. Par défaut, cela ne supprimera ni les sujets ayant un sondage en cours, ni les posts-it, ni les annonces.',

	'FORUM_PRUNE'		=> 'Délester le forum',

	'NO_PRUNE'			=> 'Aucun forum délesté.',

	'SELECTED_FORUM'	=> 'Forum sélectionné',
	'SELECTED_FORUMS'	=> 'Forums sélectionnés',

	'POSTS_PRUNED'					=> 'Messages délestés',
	'PRUNE_ANNOUNCEMENTS'			=> 'Délester les annonces',
	'PRUNE_FINISHED_POLLS'			=> 'Délester les sondages clôts',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Supprime les sujets dont les sondages sont terminés.',
	'PRUNE_FORUM_CONFIRM'			=> 'Êtes-vous sûr de vouloir délester les forums sélectionnés avec les réglages spécifiés ? Une fois supprimé, vous ne pourrez pas revenir en arrière afin de retrouver les messages et sujets délestés.',
	'PRUNE_NOT_POSTED'				=> 'Nombre de jours depuis la dernière publication',
	'PRUNE_NOT_VIEWED'				=> 'Nombre de jours depuis la dernière consultation',
	'PRUNE_OLD_POLLS'				=> 'Délester les anciens sondages',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Supprime les sujets dont les sondages n’ont pas reçus de votes avant qu’ils soient clôts.',
	'PRUNE_STICKY'					=> 'Délester les posts-it',
	'PRUNE_SUCCESS'					=> 'Le délestage des forums a réussi avec succès.',

	'TOPICS_PRUNED'		=> 'Sujets délestés',
));

?>
