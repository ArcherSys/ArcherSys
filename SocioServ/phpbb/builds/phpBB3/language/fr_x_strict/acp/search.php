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
* acp_search [French]
*
* @package language
* @version $Id: search.php,v 1.20 2007/07/15 12:09:54 kellanved Exp $
* @translation $Id: search.php,v 0.20 2007/07/27 22:13:04 xaphos Exp $
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Ici, vous pouvez gérer les programmes de gestion de l’indexation de la recherche. Étant donné qu’un seul programme de gestion est utilisé pour le moteur de recherche, vous devriez supprimer toutes les indexations inutilisées. Après la modification de la plupart des réglages de la recherche (c-à-d le nombre minimum/maximum de caractères), il serait préférable de recréer l’index pour qu’il prenne compte de ces modifications.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Ici, vous pouvez définir le programme de gestion de l’indexation de la recherche qui sera utilisé pour l’indexation des messages et l’exécution des recherches. Vous pouvez régler différentes options qui peuvent influencer sur le nombre d’exécutions que ces actions demandent. Certains de ces réglages sont les mêmes pour tous les programmes de gestion du moteur de recherche.',

	'COMMON_WORD_THRESHOLD'					=> 'Seuil commun de mot',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Les mots contenus dans la majorité des messages seront considérés comme communs. Les mots communs sont ignorés des recherches. Réglez à 0 pour désactiver. Cela prend effet que s’il y a plus de 100 messages.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Êtes-vous sûr de vouloir changer pour un programme de gestion de l’indexation différent ? Après la modification du programme de gestion de l’indexation, vous devez créer un index pour le nouveau programme de gestion de l’indexation. Si vous ne prévoyez pas de restaurer l’ancien programme de gestion de l’indexation, vous pouvez également supprimer l’ancien programme de gestion de l’indexation afin de libérer des ressources systèmes.',
	'CONTINUE_DELETING_INDEX'				=> 'Continuer le processus de suppression de l’index précédent',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Un processus de suppression de l’ancien index a été commencé. Afin d’accéder à la page de l’index de la recherche, vous devez avoir terminé, ou annuler.',
	'CONTINUE_INDEXING'						=> 'Continuer le processus d’indexation précédent',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Un processus d’indexation a été commencé. Afin d’accéder à la page de l’index de la recherche, vous devez avoir terminé, ou annuler.',
	'CREATE_INDEX'							=> 'Créer un index',

	'DELETE_INDEX'							=> 'Supprimer un index',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Suppression de l’index en cours',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Le programme de gestion de l’indexation est actuellement en train de vider son index. Cela peut prendre quelques minutes.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'Le programme de gestion de FULLTEXT de MySQL ne peut être utilisé qu’avec MySQL4 et plus.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'Les indexations de FULLTEXT de MySQL ne peuvent être utilisés qu’avec les tables MyISAM.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Nombre total de messages indexés',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Support des caractères non-latins UTF-8 qui utilisent mbstring :',
	'FULLTEXT_MYSQL_PCRE'					=> 'Support des caractères non-latins UTF-8 qui utilisent PCRE :',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Si PCRE n’a pas de propriétés de caractères UNICODE, le programme de gestion de la recherche essaiera d’utiliser le moteur régulier d’expression mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Ce programme de gestion de la recherche requiert les propriétés de caractères unicode PCRE, uniquement disponibles dans PHP 4.4, 5.1 et plus, si vous souhaitez rechercher des caractères non-latin.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Réglages généraux de la recherche',
	'GO_TO_SEARCH_INDEX'					=> 'Aller sur la page d’index de la recherche',

	'INDEX_STATS'							=> 'Statistiques d’index',
	'INDEXING_IN_PROGRESS'					=> 'Indexation en cours',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Le programme de gestion de la recherche est actuellement en train d’indexer tous les messages du forum. Cela peut prendre quelques heures, cela dépend de la taille de votre forum.',

	'LIMIT_SEARCH_LOAD'						=> 'Limite du chargement du système de la page de la recherche',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Si la charge du système d’une minute dépasse cette valeur, la page de recherche sera hors-ligne, 1.0 équivaut à ~100% d’utilisation d’un processeur. Cela ne fonctionne que sur les serveurs basés sous UNIX.',

	'MAX_SEARCH_CHARS'						=> 'Caractères maximum indexés par la recherche',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Des mots avec moins de caractères seront indexés pour la recherche.',
	'MIN_SEARCH_CHARS'						=> 'Caractères minimum indexés par la recherche',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Des mots avec plus de caractères seront indexés pour la recherche.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Caractères minimum du nom de l’auteur',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Les utilisateurs doivent entrer au moins ce nombre de caractères du nom en exécutant une recherche joker d’auteurs. Si le nom de l’auteur est plus court que ce nombre, vous pouvez également rechercher les messages de l’auteur en entrant le nom d’utilisateur complet.',

	'PROGRESS_BAR'							=> 'Barre de progression',

	'SEARCH_GUEST_INTERVAL'					=> 'Intervalle de flood de la recherche des visiteurs',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Nombre de secondes qu’un invité doit attendre entre chaque recherche. Si un visiteur recherche, tous les autres doivent attendre que le temps d’intervalle soit passé.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Tous les messages depuis le message avec l’ID %1$d sont maintenant indexés, dont %2$d messages étaient dans cette étape.<br />Le taux actuel d’indexation est approximativement de %3$.1f messages par seconde.<br />Indexation en cours…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Tous les messages depuis le message avec l’ID %1$d ont été supprimés de l’index de recherche.<br />Suppression en cours…',
	'SEARCH_INDEX_CREATED'					=> 'Tous les messages ont été indexés dans la base de données du forum avec succès.',
	'SEARCH_INDEX_REMOVED'					=> 'L’index de recherche a été supprimé de ce programme de gestion de l’indexation avec succès.',
	'SEARCH_INTERVAL'						=> 'Intervalle de flood de la recherche des utilisateurs',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Nombre de secondes qu’un utilisateur doit attendre entre chaque recherche. Cet intervalle est indépendamment vérifié pour chaque utilisateur.',
	'SEARCH_STORE_RESULTS'					=> 'Durée du cache des résultats de la recherche',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Les résultats de la recherche en cache expireront après cette durée, en secondes. Réglez à 0 si vous souhaitez désactiver le cache des résultats de la recherche.',
	'SEARCH_TYPE'							=> 'Programme de gestion de la recherche',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB vous permet de choisir le programme de gestion qui est utilisé pour la recherche de texte dans le contenu de messages. Par défaut la recherche de phpBB utilisera la propre recherche FULLTEXT.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Vous avez modifié le programme de gestion de la recherche. Afin d’utiliser le nouveau programme de gestion de la recherche, vous devriez vous assurer qu’il y a un index pour le programme de gestion que vous avez choisi.',

	'TOTAL_WORDS'							=> 'Nombre total de mots indexés',
	'TOTAL_MATCHES'							=> 'Nombre total de mots indexés par les relations de sujets',

	'YES_SEARCH'							=> 'Activer la fonctionnalité de la recherche',
	'YES_SEARCH_EXPLAIN'					=> 'Active la fonctionnalité de la recherche, ce qui inclut la recherche des membres.',
	'YES_SEARCH_UPDATE'						=> 'Activer la mise à jour de FULLTEXT',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Mise à jour des index de FULLTEXT lors de la publication, la recherche sera écrasée si ceci est activé.',
));

?>
