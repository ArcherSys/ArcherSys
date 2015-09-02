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
* acp_permissions [French]
*
* @package language
* @version $Id: permissions.php,v 1.35 2007/07/14 15:43:45 acydburn Exp $
* @translation $Id: permissions.php,v 0.35 2007/07/27 21:27:14 xaphos Exp $
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Les permissions sont très nombreuses et regroupées en quatre grandes sections, qui sont :</p>

		<h2>Permissions Globales</h2>
		<p>Celles-ci sont utilisées pour contrôler l’accès de façon globale et sont appliquées sur l’ensemble du forum. Elles sont encore divisées en Permissions des Utilisateurs, des Groupes, des Administrateurs et des Modérateurs Globaux.</p>

		<h2>Permissions basées aux Forums</h2>
		<p>Celles-ci sont utilisées pour contrôler l’accès de base aux forums. Elles sont encore divisées en Permissions des Forums, Modérateurs des Forums, Permissions des Utilisateurs aux Forums et Permissions des Groupes aux Forums.</p>

		<h2>Rôles des Permissions</h2>
		<p>Celles-ci sont utilisées pour créer de différents jeux de permissions pour les différents types de permissions qui peuvent être assignés plus tard à une base de rôles basique. Les rôles par défaut devraient couvrir l’administration des forums, qu’ils soient petits ou grands, cependant dans chacune des quatre divisions, vous pouvez ajouter, éditer et supprimer des rôles selon l’ajustement que vous souhaitez.</p>

		<h2>Masques des Permissions</h2>
		<p>Ceux-ci sont utilisés pour voir les permissions effectives assignées aux Utilisateurs, Modérateurs (Locaux et Globaux), Administrateurs ou Forums.</p>
	
		<br />

		<p>Pour de plus amples informations sur le réglage et la gestion des permissions de votre forum phpBB3, veuillez consulter le <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Chapitre 1.5 de notre Guide de Démarrage Rapide</a>.</p>
	',

	'ACL_NEVER'				=> 'Jamais',
	'ACL_SET'				=> 'Réglage des Permissions',
	'ACL_SET_EXPLAIN'		=> 'Les permissions sont basées sur un système <samp>OUI</samp>/<samp>NON</samp> simple. Réglez une option sur <samp>JAMAIS</samp> pour qu’un utilisateur ou groupe d’utilisateurs écrase toute autre valeur qui lui est assignée. Si vous ne souhaitez pas assigner une valeur à une option pour cet utilisateur ou ce groupe sélectionnez <samp>NON</samp>. Si des valeurs sont assignées ailleurs pour cette autre option elles seront utilisées de préférence, autrement <samp>JAMAIS</samp> est appliqué. Tous les objets cochés (avec la boîte de sélection devant eux) copieront le réglage de la permission que vous avez définie.',
	'ACL_SETTING'			=> 'Réglage',

	'ACL_TYPE_A_'			=> 'Permissions des administrateurs',
	'ACL_TYPE_F_'			=> 'Permissions des forums',
	'ACL_TYPE_M_'			=> 'Permissions des modérateurs',
	'ACL_TYPE_U_'			=> 'Permissions des utilisateurs',

	'ACL_TYPE_GLOBAL_A_'	=> 'Permissions des administrateurs',
	'ACL_TYPE_GLOBAL_U_'	=> 'Permissions des utilisateurs',
	'ACL_TYPE_GLOBAL_M_'	=> 'Permissions des modérateurs globaux',
	'ACL_TYPE_LOCAL_M_'		=> 'Permissions des modérateurs du forum',
	'ACL_TYPE_LOCAL_F_'		=> 'Permissions des forums',
	
	'ACL_NO'				=> 'Non',
	'ACL_VIEW'				=> 'Aperçu des permissions',
	'ACL_VIEW_EXPLAIN'		=> 'Vous pouvez voir ici les permissions effectives de l’utilisateur ou du groupe. Un rectangle rouge indique que l’utilisateur ou le groupe n’a pas la permission, un rectangle vert indique que l’utilisateur ou le groupe a la permission.',
	'ACL_YES'				=> 'Oui',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Ici, vous pouvez attribuer des droits administrateur à des utilisateurs ou groupes. Tous les utilisateurs avec des permissions administratives peuvent accéder au Panneau de Contrôle de l’Administrateur.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Ici, vous pouvez attribuer des utilisateurs et des groupes en tant que modérateurs du forum. Pour attribuer l’accès des utilisateurs aux forums et pour définir des droits de modération globale ou d’administration, veuillez utiliser la page appropriée.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Ici, vous pouvez modifier le nombre d’utilisateurs et de groupes pouvant accéder à certains forums. Pour attribuer des modérateurs ou définir des administrateurs, veuillez utiliser la page appropriée.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Ici, vous pouvez attribuer les droits de modérateur global aux utilisateurs ou aux groupes. Ces modérateurs sont des modérateurs ordinaires excepté qu’ils ont accès à tous les forums.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Ici, vous pouvez attribuer les permissions des forums aux groupes.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Ici, vous pouvez attribuer les permissions globales aux groupes - permissions d’utilisateur, permissions de modérateur global et permissions d’administrateur. Les permissions d’utilisateur incluent des possibilités comme l’utilisation d’avatars, l’envoi de messages privés, etc. ; les permissions de modérateur global comme l’approbation des messages, la gestions des sujets, la gestion des bannissements, etc. et enfin les permissions d’administrateur comme la modification de permissions, la gestion des BBCodes personnalisés, la gestion des forums, etc. Les permissions individuelles des utilisateurs doivent être modifiées que dans de rares occasions, les méthodes préférentielles sont l’intégration d’utilisateurs dans des groupes et l’attribution des permissions de groupes.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Ici, vous pouvez gérer les rôles des permissions des administrateurs. Les rôles sont des permissions effectives, si vous modifiez un rôle les éléments auxquels ce rôle était assigné verront leurs permissions modifiées aussi.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Ici, vous pouvez gérer les rôles des permissions des forums. Les rôles sont des permissions effectives, si vous modifiez un rôle les éléments auxquels ce rôle était assigné verront leurs permissions modifiées aussi.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Ici, vous pouvez gérer les rôles des permissions des modérateurs. Les rôles sont des permissions effectives, si vous modifiez un rôle les éléments auxquels ce rôle était assigné verront leurs permissions modifiées aussi.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Ici, vous pouvez gérer les rôles des permissions des utilisateurs. Les rôles sont des permissions effectives, si vous modifiez un rôle les éléments auxquels ce rôle était assigné verront leurs permissions modifiées aussi.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Ici, vous pouvez attribuer les permissions des forums aux utilisateurs.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Ici, vous pouvez attribuer les permissions globales aux utilisateurs - permissions d’utilisateur, permissions de modérateur global et permissions d’administrateur. Les permissions d’utilisateur incluent des possibilités comme l’utilisation d’avatars, l’envoi de messages privés, etc. ; les permissions de modérateur global comme l’approbation des messages, la gestions des sujets, la gestion des bannissements, etc. et enfin les permissions d’administrateur comme la modification de permissions, la gestion des BBCodes personnalisés, la gestion des forums, etc. Pour modifier ces réglages pour un grand nombre d’utilisateurs le système Permissions des groupes est la méthode préférentielle. Les permissions individuelles des utilisateurs doivent être modifiées que dans de rares occasions, les méthodes préférentielles sont l’intégration d’utilisateurs dans des groupes et l’attribution des permissions de groupes.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Ici, vous pouvez consulter les permissions des administrateurs effectives assignées aux utilisateurs ou groupes sélectionnés',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Ici, vous pouvez consulter les permissions des modérateurs globaux effectives assignées aux utilisateurs ou groupes sélectionnés',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Ici, vous pouvez consulter les permissions des forums assignées aux utilisateurs ou groupes sélectionnés',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Ici, vous pouvez consulter les permissions des modérateurs du forum assignées aux utilisateurs ou groupes sélectionnés',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Ici, vous pouvez consulter les permissions des utilisateurs effectives assignées aux utilisateurs ou groupes sélectionnés',

	'ADD_GROUPS'				=> 'Ajouter des groupes',
	'ADD_PERMISSIONS'			=> 'Ajouter des permissions',
	'ADD_USERS'					=> 'Ajouter des utilisateurs',
	'ADVANCED_PERMISSIONS'		=> 'Permissions avancées',
	'ALL_GROUPS'				=> 'Sélectionner tous les groupes',
	'ALL_NEVER'					=> 'Tous sur <samp>JAMAIS</samp>',
	'ALL_NO'					=> 'Tous sur <samp>NON</samp>',
	'ALL_USERS'					=> 'Sélectionner tous les utilisateurs',
	'ALL_YES'					=> 'Tous sur <samp>OUI</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Appliquer toutes les permissions',
	'APPLY_PERMISSIONS'			=> 'Appliquer les permissions',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Les permissions et rôles définis pour cet élément seront appliqués uniquement à cet élément et à tous les éléments cochés.',
	'AUTH_UPDATED'				=> 'Les permissions ont été mises à jour.',

	'CREATE_ROLE'				=> 'Créer un rôle',
	'CREATE_ROLE_FROM'			=> 'Utiliser les réglages de…',
	'CUSTOM'					=> 'Personnaliser…',

	'DEFAULT'					=> 'Défaut',
	'DELETE_ROLE'				=> 'Supprimer le rôle',
	'DELETE_ROLE_CONFIRM'		=> 'Êtes-vous sûr de vouloir supprimer ce rôle ? Les éléments utilisant ce rôle ne perdront <strong>pas</strong> leurs réglages de permission.',
	'DISPLAY_ROLE_ITEMS'		=> 'Voir les éléments utilisant ce rôle',

	'EDIT_PERMISSIONS'			=> 'Éditer les permissions',
	'EDIT_ROLE'					=> 'Éditer le rôle',

	'GROUPS_NOT_ASSIGNED'		=> 'Aucun groupe n’est assigné à ce rôle',

	'LOOK_UP_GROUP'				=> 'Rechercher le groupe d’utilisateurs',
	'LOOK_UP_USER'				=> 'Rechercher l’utilisateur',

	'MANAGE_GROUPS'		=> 'Gérer les groupes',
	'MANAGE_USERS'		=> 'Gérer les utilisateurs',

	'NO_AUTH_SETTING_FOUND'		=> 'Les réglages de permission ne sont pas définis.',
	'NO_ROLE_ASSIGNED'			=> 'Aucun rôle assigné…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Le réglage de ce rôle ne modifie pas les permissions de droite. Si vous souhaitez supprimer toutes les permissions vous devez utiliser le lien “Tous sur <samp>NON</samp>”.',
	'NO_ROLE_AVAILABLE'			=> 'Aucun rôle disponible',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Veuillez donner un nom au rôle.',
	'NO_ROLE_SELECTED'			=> 'Le rôle est introuvable.',
	'NO_USER_GROUP_SELECTED'	=> 'Vous n’avez sélectionné aucun utilisateur ou groupe.',

	'ONLY_FORUM_DEFINED'	=> 'Vous sélectionnez que des forums. Veuillez également sélectionner un utilisateur ou un groupe au minimum.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Les permissions et rôles seront aussi appliqués à tous les éléments cochés',
	'PLUS_SUBFORUMS'				=> '+Sous-forums',

	'REMOVE_PERMISSIONS'			=> 'Supprimer des permissions',
	'REMOVE_ROLE'					=> 'Supprimer un rôle',
	'RESULTING_PERMISSION'			=> 'Permission résultante',
	'ROLE'							=> 'Rôle',
	'ROLE_ADD_SUCCESS'				=> 'Le rôle a été ajouté avec succès.',
	'ROLE_ASSIGNED_TO'				=> 'Utilisateurs/Groupes assignés à %s',
	'ROLE_DELETED'					=> 'Le rôle a été supprimé avec succès.',
	'ROLE_DESCRIPTION'				=> 'Description du rôle',

	'ROLE_ADMIN_FORUM'			=> 'Administrateur du forum',
	'ROLE_ADMIN_FULL'			=> 'Administrateur intégral',
	'ROLE_ADMIN_STANDARD'		=> 'Administrateur standard',
	'ROLE_ADMIN_USERGROUP'		=> 'Utilisateurs et groupes administrateurs',
	'ROLE_FORUM_BOT'			=> 'Accès des robots',
	'ROLE_FORUM_FULL'			=> 'Accès entier',
	'ROLE_FORUM_LIMITED'		=> 'Accès limité',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Accès limité + Sondages',
	'ROLE_FORUM_NOACCESS'		=> 'Aucun accès',
	'ROLE_FORUM_ONQUEUE'		=> 'Attente de modération',
	'ROLE_FORUM_POLLS'			=> 'Accès standard + Sondages',
	'ROLE_FORUM_READONLY'		=> 'Accès de lecture seulement',
	'ROLE_FORUM_STANDARD'		=> 'Accès standard',
	'ROLE_MOD_FULL'				=> 'Modérateur intégral',
	'ROLE_MOD_QUEUE'			=> 'Modérateur en attente',
	'ROLE_MOD_SIMPLE'			=> 'Modérateur simple',
	'ROLE_MOD_STANDARD'			=> 'Modérateur standard',
	'ROLE_USER_FULL'			=> 'Pleins pouvoirs',
	'ROLE_USER_LIMITED'			=> 'Pouvoirs limités',
	'ROLE_USER_NOAVATAR'		=> 'Privé d’avatar',
	'ROLE_USER_NOPM'			=> 'Privé de messagerie privée',
	'ROLE_USER_STANDARD'		=> 'Pouvoirs standards',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Peut accéder à la gestion et aux réglages des permissions du forum.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'A accès à toutes les fonctions administrateur de ce forum.<br />Non recommandé.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'A accès à la plupart des fonctionnalités administrateur mais n’est pas autorisé à utiliser le serveur ou les outils relatifs au système.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Peut gérer des groupes et des utilisateurs : Capable de changer les permissions, réglages, la gestion des bannissements et gérer les rangs.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Ce rôle est recommandé pour les robots et moteurs de recherche.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Peut utiliser toutes les fonctionnalités du forum, y compris les annonces et les posts-it. Peut aussi ignorer la limitation de flood.<br />Non recommandé pour les utilisateurs normaux.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Peut utiliser plusieurs fonctionnalités du forum, mais ne peut pas intégrer des fichiers ou utiliser les icônes de messages.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Comme l’Accès Limité, mais peut aussi créer des sondages.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Ne peut ni voir ni accéder au forum.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Peut utiliser la plupart des fonctionnalités du forum y compris les pièces jointes, mais les messages et les sujets doivent être approuvés par un modérateur.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Comme l’Accès Standard, mais peut aussi créer des sondages.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Peut lire le forum, mais ne peut pas créer de nouveaux sujets ou répondre aux messages.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Peut utiliser la plupart des fonctionnalités du forum y compris les pièces jointes et la suppression de ses propres sujets, mais ne peut pas verrouiller ses propres sujets et ne peut pas créer de sondages.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Peut utiliser toutes les fonctionnalités de modération, y compris le bannissement.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Peut utiliser l’Attente de modération pour valider ou éditer des messages, mais rien d’autre.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Peut utiliser seulement les actions de sujet de base. Ne peut pas envoyer d’avertissements ou utiliser l’attente de modération.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Peut utiliser la plupart des outils de modération,  mais ne peut pas bannir les utilisateurs ou modifier l’auteur du message.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Peut utiliser toutes les fonctionnalités du forum disponibles pour les utilisateurs, y compris la modification du nom d’utilisateur ou ignorer la limitation de flood.<br />Non recommandé.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Peut accéder à la plupart des fonctionnalités de l’utilisateur. Les pièces jointes, les e-mail, ou les messages instantanés ne sont pas autorisés.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'A un ensemble de fonctionnalités limité et n’est pas autorisé à utiliser la fonctionnalité des avatars.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'A un ensemble de fonctionnalités limité et n’est pas autorisé à utiliser les messages privés.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Peut accéder à la plupart des fonctionnalités de l’utilisateur, mais pas à toutes. Il ne peut pas modifier le nom d’utilisateur ou ignorer la limitation de flood, par exemple.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Vous pouvez entrer une courte explication de ce que fait le rôle ou ce qu’il veut signifier. Le texte que vous entrez sera aussi affiché dans les écrans de permissions.',
	'ROLE_DESCRIPTION_LONG'			=> 'La description du rôle est trop longue, veuillez ne pas dépasser 4000 caractères.',
	'ROLE_DETAILS'					=> 'Informations du rôle',
	'ROLE_EDIT_SUCCESS'				=> 'Le rôle a été édité avec succès.',
	'ROLE_NAME'						=> 'Nom du rôle',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Un rôle nommé <strong>%s</strong> existe déjà pour le type de permission spécifié.',
	'ROLE_NOT_ASSIGNED'				=> 'Le rôle n’a pas encore été attribué.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Le(s) forum(s) sélectionné(s) n’existe(nt) pas.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Le(s) groupe(s) sélectionné(s) n’existe(nt) pas.',
	'SELECTED_USER_NOT_EXIST'		=> 'Les)/L’utilisateur(s) sélectionné(s) n’existe(nt) pas.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Le forum que vous sélectionnez ici inclura tous les sous-forums dans la sélection',
	'SELECT_ROLE'					=> 'Sélectionner un rôle…',
	'SELECT_TYPE'					=> 'Sélectionner un type',
	'SET_PERMISSIONS'				=> 'Régler les permissions',
	'SET_ROLE_PERMISSIONS'			=> 'Régler les permissions du rôle',
	'SET_USERS_PERMISSIONS'			=> 'Régler les permissions des utilisateurs',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Régler les permissions des utilisateurs du forum',

	'TRACE_DEFAULT'					=> 'Par défaut chaque permission est sur <samp>NON</samp> (non réglé). Ainsi la permission peut être écrasée par d’autres réglages.',
	'TRACE_FOR'						=> 'Tracer pour',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Cette permission de groupe est réglée sur <samp>JAMAIS</samp> tout comme le résultat total, l’ancien résultat est donc conservé.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Cette permission de groupe pour ce forum est réglée sur <samp>JAMAIS</samp> tout comme le résultat total, l’ancien résultat est donc conservé.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Cette permission de groupe est réglée sur <samp>JAMAIS</samp> ce qui devient la nouvelle valeur totale car elle n’était pas encore réglée (réglée sur <samp>NON</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Cette permission de groupe pour ce forum est réglée sur <samp>JAMAIS</samp> ce qui devient la nouvelle valeur totale car elle n’était pas encore réglée (réglée sur <samp>NON</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Cette permission de groupe est réglée sur <samp>JAMAIS</samp> ce qui écrase le total de <samp>OUI</samp> pour un <samp>JAMAIS</samp> pour cet utilisateur.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Cette permission de groupe pour ce forum est réglée sur <samp>JAMAIS</samp> ce qui écrase le total de <samp>OUI</samp> pour un <samp>JAMAIS</samp> pour cet utilisateur.',
	'TRACE_GROUP_NO'				=> 'Cette permission est sur <samp>NON</samp> pour ce groupe donc l’ancienne valeur totale est conservée.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Cette permission est sur <samp>NON</samp> pour ce groupe dans ce forum donc l’ancienne valeur totale est conservée.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Cette permission de groupe est réglée sur <samp>OUI</samp> mais le total de <samp>JAMAIS</samp> ne peut pas être écrasé.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Cette permission de groupe pour ce forum est réglée sur <samp>OUI</samp> mais le total de <samp>JAMAIS</samp> ne peut pas être écrasé.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Cette permission de groupe est réglée sur <samp>OUI</samp> ce qui devient la nouvelle valeur totale car elle n’était pas encore réglée (réglée sur <samp>NON</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Cette permission de groupe pour ce forum est réglée sur <samp>OUI</samp> ce qui devient la nouvelle valeur totale car elle n’était pas encore réglée (réglée sur <samp>NON</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Cette permission de groupe est réglée sur <samp>OUI</samp> et la permission totale est déjà réglée sur <samp>OUI</samp>, donc le résultat total est conservé.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Cette permission de groupe pour ce forum est réglée sur <samp>OUI</samp> et la permission totale est déjà réglée sur <samp>OUI</samp>, donc le résultat total est conservé.',
	'TRACE_PERMISSION'				=> 'Tracer la permission - %s',
	'TRACE_RESULT'					=> 'Tracer le résultat',
	'TRACE_SETTING'					=> 'Tracer le réglage',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'La permission de l’utilisateur indépendante du forum évalue à <samp>OUI</samp> mais la permission totale est déjà réglée sur <samp>OUI</samp>, donc le résultat total est conservé. %sTracer la permission globale%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'La permission de l’utilisateur indépendante du forum évalue à <samp>OUI</samp> ce qui écrase le résultat local actuel <samp>JAMAIS</samp>. %sTracer la permission globale%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'La permission de l’utilisateur indépendante du forum évalue à <samp>JAMAIS</samp> ce qui n’influence pas la permission locale. %sTracer la permission globale%s',

	'TRACE_USER_FOUNDER'					=> 'L’utilisateur a le réglage de type fondateur, c’est pourquoi les permissions d’administrateur sont réglées sur <samp>OUI</samp> par défaut.',
	'TRACE_USER_KEPT'						=> 'La permission de l’utilisateur est sur <samp>NON</samp> donc l’ancienne valeur totale est conservée.',
	'TRACE_USER_KEPT_LOCAL'					=> 'La permission de l’utilisateur pour ce forum est réglée sur <samp>NON</samp> donc l’ancienne valeur totale est conservée.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'La permission de l’utilisateur est réglée sur <samp>JAMAIS</samp> et la valeur totale est réglée sur <samp>JAMAIS</samp>, donc rien n’est modifié.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'La permission de l’utilisateur pour ce forum est réglée sur <samp>JAMAIS</samp> et la valeur totale est réglée sur <samp>JAMAIS</samp>, donc rien n’est modifié.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'La permission de l’utilisateur est réglée sur <samp>JAMAIS</samp> ce qui devient la valeur totale car elle était réglée sur <samp>NON</samp>.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'La permission de l’utilisateur pour ce forum est réglée sur <samp>JAMAIS</samp> ce qui devient la valeur totale car elle était réglée sur <samp>NON</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'La permission de l’utilisateur est réglée sur <samp>JAMAIS</samp> et écrase le <samp>OUI</samp> précédent.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'La permission de l’utilisateur pour ce forum est réglée sur <samp>JAMAIS</samp> et écrase le <samp>OUI</samp> précédent.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'La permission de l’utilisateur est réglée sur <samp>NON</samp> et la valeur totale était réglée sur NON ainsi par défaut sur <samp>JAMAIS</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'La permission de l’utilisateur est réglée sur <samp>OUI</samp> mais le total de <samp>JAMAIS</samp> ne peut pas être écrasé.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'La permission de l’utilisateur est réglée sur <samp>OUI</samp> ce qui devient la valeur totale car elle était réglée sur <samp>NON</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'La permission de l’utilisateur est réglée sur <samp>OUI</samp> et la valeur totale est réglée sur <samp>OUI</samp>, donc rien n’est modifié.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'La permission de l’utilisateur est réglée sur <samp>NON</samp> et la valeur totale était réglée sur <samp>NON</samp>, donc par défaut sur <samp>JAMAIS</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'La permission de l’utilisateur pour ce forum est réglée sur <samp>NON</samp> et la valeur totale était réglée sur <samp>NON</samp>, donc par défaut sur <samp>JAMAIS</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'La permission de l’utilisateur est réglée sur <samp>OUI</samp> mais le total de <samp>JAMAIS</samp> ne peut pas être écrasé.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'La permission de l’utilisateur pour ce forum est réglée sur <samp>OUI</samp> mais le total de <samp>JAMAIS</samp> ne peut pas être écrasé.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'La permission de l’utilisateur est réglée sur <samp>OUI</samp> ce qui devient la valeur totale car elle était réglée sur <samp>NON</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'La permission de l’utilisateur pour ce forum est réglée sur <samp>OUI</samp> ce qui devient la valeur totale car elle était réglée sur <samp>NON</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'La permission de l’utilisateur est réglée sur <samp>OUI</samp> et la valeur totale est réglée sur <samp>OUI</samp>, donc rien n’est modifié.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'La permission de l’utilisateur pour ce forum est réglée sur <samp>OUI</samp> et la valeur totale est réglée sur <samp>OUI</samp>, donc rien n’est modifié.',
	'TRACE_WHO'								=> 'Qui',
	'TRACE_TOTAL'							=> 'Total',

	'USERS_NOT_ASSIGNED'			=> 'Aucun utilisateur assigné à ce rôle',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'est un membre des groupes par défaut suivants',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'est un membre des groupes personnalisés suivants',

	'VIEW_ASSIGNED_ITEMS'	=> 'Voir les éléments assignés',
	'VIEW_LOCAL_PERMS'		=> 'Permissions locales',
	'VIEW_GLOBAL_PERMS'		=> 'Permissions globales',
	'VIEW_PERMISSIONS'		=> 'Voir les permissions',

	'WRONG_PERMISSION_TYPE'	=> 'Le type de permission sélectionné est erroné.',
));

?>
