<?php
/** 
*
* acp_search [Standard french]
*
* @package language
* @version $Id: search.php,v 1.20 2007/07/15 12:09:54 kellanved Exp $
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Ici, vous pouvez gérer les index de recherche. Comme vous n\'aurez à n\'en utiliser qu\'un seul, vous devriez supprimer tous les index inutiles. Après modification d\'un paramètre de recherche (par exemple le nombre de caractères minimum/maximum), il peut être utile de recréer l\'index afin que ces modifications soient prises en compte.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Ici, vous pouvez définir quelle méthode sera utilisée pour indexer les messages et effectuer les recherches. Vous pouvez définir différentes options qui peuvent influencer sur la puissance de calcul requise. Certains réglages sont les mêmes pour toutes les méthodes de recherche.',
	
	'COMMON_WORD_THRESHOLD'					=> 'Seuil de mot commun',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Si un mot est contenu dans un nombre de messages supérieur au pourcentage spécifié, ce mot sera défini comme commun. Ces mots seront par la suite ignorés lors des recherches. Mettez "0" pour désactiver cette option. Cette option ne fonctionne que s\'il y a plus de 100 messages sur votre forum.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Voulez-vous réellement changer la méthode d\'indexation? Vous devrez recréer un index de recherche pour la nouvelle méthode. Si vous ne prévoyez pas de réutiliser l\'ancienne méthode d\'indexation vous pouvez la supprimer pour libérer des ressources système.',
	'CONTINUE_DELETING_INDEX'				=> 'Confirmer la suppression de l\'index de recherche précédente',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Une suppression d\'index de recherche a été commencée. Celle-ci doit être terminée ou annulée pour pouvoir accéder à la page de recherche.',
	'CONTINUE_INDEXING'						=> 'Continuer la précédente indexation de la recherche',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Une indexation de recherche a été commencée. Celle-ci doit être terminée ou annulée pour pouvoir accéder à la page de recherche.',
	'CREATE_INDEX'							=> 'Créer l\'index de recherche',
	
	'DELETE_INDEX'							=> 'Supprimer l\'index de recherche',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Suppression de l\'index de recherche.',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Suppression de l\'index de recherche en cours. Cela peut prendre quelques minutes.',
	
	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'La recherche MySQL par contenu ne peut être utilisée qu\'avec MySQL 4 ou supérieur.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'L\'indexation du contenu MySQL ne peut être utilisée que sur des tables MyISAM.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Nombre total de messages indexés',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Support des caractères non-latin UTF-8 en utilisant la fonction mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Support des caractères non-latin UTF-8 en utilisant la fonction PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Si PCRE n\'a pas les propriétés de caractères unicode, la recherche s\'effectuera en utilisant le moteur régulier d\'expression mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'La recherche nécessite les propriétés de caractères unicode PCRE, disponible seulement depuis de PHP 4.4, 5.1 et plus, si vous voulez effectuer une recherche sur des caractères non-latin.',
	
	'GENERAL_SEARCH_SETTINGS'				=> 'Réglages généraux de recherche',
	'GO_TO_SEARCH_INDEX'					=> 'Page de recherche',
	
	'INDEX_STATS'							=> 'Statistiques de l\'index de recherche',
	'INDEXING_IN_PROGRESS'					=> 'Indexation en cours',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Le moteur de recherche est en train d\'indexer tous les messages du forum. Cela peut prendre de quelques minutes à quelques heures selon la taille de votre forum.',
	
	'LIMIT_SEARCH_LOAD'						=> 'Limite de charge de la recherche',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Si la charge du système dépasse cette valeur pendant 1 minute, la recherche sera désactivée, 1.0 signifie ~100% d\'utilisation du processeur. Ne fonctionne que sur les serveurs UNIX.',
	
	'MAX_SEARCH_CHARS'						=> 'Taille maximale des mots indexés',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Seuls les mots inférieurs ou égaux à ce nombre de caractères seront indexés.',
	'MIN_SEARCH_CHARS'						=> 'Taille minimale des mots indexés',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Seuls les mots supérieurs ou égaux à ce nombre de caractères seront indexés.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Taille minimale du nom d\'auteur',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Nombre de caractères minimal du nom pour une recherche par auteur avec joker. Si le nom d\'auteur est plus court que ce nombre vous pourrez tout de même chercher ses messages en saisissant son nom complet.',
	
	'PROGRESS_BAR'							=> 'Barre de progression',
	
	'SEARCH_GUEST_INTERVAL'					=> 'Intervalle de flood pour les invités',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Nombre de secondes à attendre par les invités entre 2 recherches. Si un invité lance une recherche les autres doivent attendre que ce délai soit écoulé.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Tous les messages ayant un id inférieur à %1$d ont été indexés, actuellement %2$d messages l\'ont été.<br />Le taux actuel d\'indexation est de %3$.1f messages par seconde.<br />Indexation en cours…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Tous les messages ayant un id inférieur à %1$d ont été effacés de l\'index de recherche.<br />Effacement en cours…',
	'SEARCH_INDEX_CREATED'					=> 'Tous les messages du forum ont été indexés.',  
	'SEARCH_INDEX_REMOVED'					=> 'L\'index de la recherche a été supprimé.',
	'SEARCH_INTERVAL'						=> 'Intervalle de flood pour les utilisateurs',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Nombre de secondes à attendre entre 2 recherches. Cet intervalle est contrôlé indépendamment pour chaque utilisateur.',
	'SEARCH_STORE_RESULTS'					=> 'Durée du cache des résultats',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Les résultats mis en cache expireront après cette durée, en secondes. Mettez "0" pour désactiver le cache.',
	'SEARCH_TYPE'							=> 'Méthode de recherche',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB vous permet de choisir la méthode utilisée pour rechercher dans le contenu des messages. Par défaut la méthode de recherche par contenu de phpBB sera utilisée.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Vous avez changé la méthode de recherche. Pour utiliser la nouvelle méthode, vérifiez qu\'il existe bien un index de recherche pour cette méthode.',
	
	'TOTAL_WORDS'							=> 'Nombre total de mots indexés',
	'TOTAL_MATCHES'							=> 'Nombre total de relations mot-message indexées',
	
	'YES_SEARCH'							=> 'Activer la fonction de recherche',
	'YES_SEARCH_EXPLAIN'					=> 'Active la fonction de recherche, ce qui inclut la recherche par utilisateurs.',
	'YES_SEARCH_UPDATE'						=> 'Activer la mise à jour de contenu',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Mise à jour des indexations lors de l\'envoi de messages sur le forum, ce paramètre n\'est pas pris en compte si la recherche est désactivée.',
));

?>