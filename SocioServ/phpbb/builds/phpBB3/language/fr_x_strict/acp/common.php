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
* acp common [French]
*
* @package language
* @version $Id: common.php,v 1.119 2007/08/13 12:14:06 acydburn Exp $
* @translation $Id: common.php,v 0.119 2007/08/20 01:44:53 xaphos Exp $
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Gestion des administrateurs',
	'ACP_ADMIN_LOGS'			=> 'Historique des administrateurs',
	'ACP_ADMIN_ROLES'			=> 'Rôles des administrateurs',
	'ACP_ATTACHMENTS'			=> 'Gestion des pièces jointes',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Réglages des pièces jointes',
	'ACP_AUTH_SETTINGS'			=> 'Réglages de l’authentification',
	'ACP_AUTOMATION'			=> 'Automatique',
	'ACP_AVATAR_SETTINGS'		=> 'Réglages des avatars',

	'ACP_BACKUP'				=> 'Sauvegarder',
	'ACP_BAN'					=> 'Bannissement',
	'ACP_BAN_EMAILS'			=> 'Bannissement d’e-mail',
	'ACP_BAN_IPS'				=> 'Bannissement d’IP',
	'ACP_BAN_USERNAMES'			=> 'Bannissement de noms d’utilisateurs',
	'ACP_BBCODES'				=> 'Gestion des BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Configuration du forum',
	'ACP_BOARD_FEATURES'		=> 'Fonctionnalités du forum',
	'ACP_BOARD_MANAGEMENT'		=> 'Gestion du forum',
	'ACP_BOARD_SETTINGS'		=> 'Réglages du forum',
	'ACP_BOTS'					=> 'Gestion des robots',
	
	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Base de données',
	'ACP_CAT_DOT_MODS'			=> '.MODs',
	'ACP_CAT_FORUMS'			=> 'Forums',
	'ACP_CAT_GENERAL'			=> 'Général',
	'ACP_CAT_MAINTENANCE'		=> 'Maintenance',
	'ACP_CAT_PERMISSIONS'		=> 'Permissions',
	'ACP_CAT_POSTING'			=> 'Rédaction',
	'ACP_CAT_STYLES'			=> 'Styles',
	'ACP_CAT_SYSTEM'			=> 'Système',
	'ACP_CAT_USERGROUP'			=> 'Utilisateurs et Groupes',
	'ACP_CAT_USERS'				=> 'Utilisateurs',
	'ACP_CLIENT_COMMUNICATION'	=> 'Clients de communication',
	'ACP_COOKIE_SETTINGS'		=> 'Réglages des cookies',
	'ACP_CRITICAL_LOGS'			=> 'Historique des erreurs',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Champs de profil personnalisés',
	
	'ACP_DATABASE'				=> 'Gestion de la base de données',
	'ACP_DISALLOW'				=> 'Refuser',
	'ACP_DISALLOW_USERNAMES'	=> 'Interdiction de noms d’utilisateurs',
	
	'ACP_EMAIL_SETTINGS'		=> 'Réglages des e-mail',
	'ACP_EXTENSION_GROUPS'		=> 'Gestion des groupes d’extensions',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Permissions basées aux forums',
	'ACP_FORUM_LOGS'				=> 'Historique des forums',
	'ACP_FORUM_MANAGEMENT'			=> 'Gestion des forums',
	'ACP_FORUM_MODERATORS'			=> 'Modération des forums',
	'ACP_FORUM_PERMISSIONS'			=> 'Permissions des forums',
	'ACP_FORUM_ROLES'				=> 'Rôles des forums',

	'ACP_GENERAL_CONFIGURATION'		=> 'Configuration générale',
	'ACP_GENERAL_TASKS'				=> 'Tâches générales',
	'ACP_GLOBAL_MODERATORS'			=> 'Gestion des modérateurs globaux',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Permissions globales',
	'ACP_GROUPS'					=> 'Groupes',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Permissions des groupes aux forums',
	'ACP_GROUPS_MANAGE'				=> 'Gestion des groupes',
	'ACP_GROUPS_MANAGEMENT'			=> 'Gestion des groupes',
	'ACP_GROUPS_PERMISSIONS'		=> 'Permissions des groupes',
	
	'ACP_ICONS'					=> 'Gestion des icônes de sujets',
	'ACP_ICONS_SMILIES'			=> 'Icônes de sujets et smileys',
	'ACP_IMAGESETS'				=> 'Packs d’images',
	'ACP_INACTIVE_USERS'		=> 'Gestion des utilisateurs inactifs',
	'ACP_INDEX'					=> 'Index du PCA',
	
	'ACP_JABBER_SETTINGS'		=> 'Réglages de Jabber',
	
	'ACP_LANGUAGE'				=> 'Gestion des langues',
	'ACP_LANGUAGE_PACKS'		=> 'Gestion des packs de langues',
	'ACP_LOAD_SETTINGS'			=> 'Réglages de la charge du système',
	'ACP_LOGGING'				=> 'Connexion',
	
	'ACP_MAIN'					=> 'Index du PCA',
	'ACP_MANAGE_EXTENSIONS'		=> 'Gestion des extensions',
	'ACP_MANAGE_FORUMS'			=> 'Gestion des forums',
	'ACP_MANAGE_RANKS'			=> 'Gestion des rangs',
	'ACP_MANAGE_REASONS'		=> 'Gestion des rapports et raisons',
	'ACP_MANAGE_USERS'			=> 'Gestion des utilisateurs',
	'ACP_MASS_EMAIL'			=> 'E-mail de masse',
	'ACP_MESSAGES'				=> 'Messages',
	'ACP_MESSAGE_SETTINGS'		=> 'Réglages des messages privés',
	'ACP_MODULE_MANAGEMENT'		=> 'Gestion des modules',
	'ACP_MOD_LOGS'				=> 'Historique des modérateurs',
	'ACP_MOD_ROLES'				=> 'Rôles des modérateurs',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Gestion des pièces jointes orphelines',
	
	'ACP_PERMISSIONS'			=> 'Permissions',
	'ACP_PERMISSION_MASKS'		=> 'Masques des permissions',
	'ACP_PERMISSION_ROLES'		=> 'Rôles des permissions',
	'ACP_PERMISSION_TRACE'		=> 'Trace des permissions',
	'ACP_PHP_INFO'				=> 'Informations sur PHP',
	'ACP_POST_SETTINGS'			=> 'Réglages des messages',
	'ACP_PRUNE_FORUMS'			=> 'Délestage des forums',
	'ACP_PRUNE_USERS'			=> 'Délestage d’utilisateurs',
	'ACP_PRUNING'				=> 'Délestage',
	
	'ACP_QUICK_ACCESS'			=> 'Accès rapide',
	
	'ACP_RANKS'					=> 'Rangs',
	'ACP_REASONS'				=> 'Rapports/raisons',
	'ACP_REGISTER_SETTINGS'		=> 'Réglages des inscriptions',

	'ACP_RESTORE'				=> 'Restaurer',

	'ACP_SEARCH'				=> 'Configuration de la recherche',
	'ACP_SEARCH_INDEX'			=> 'Indexation de la recherche',
	'ACP_SEARCH_SETTINGS'		=> 'Réglages de la recherche',

	'ACP_SECURITY_SETTINGS'		=> 'Réglages de la sécurité',
	'ACP_SERVER_CONFIGURATION'	=> 'Configuration du serveur',
	'ACP_SERVER_SETTINGS'		=> 'Réglages du serveur',
	'ACP_SIGNATURE_SETTINGS'	=> 'Réglages des signatures',
	'ACP_SMILIES'				=> 'Gestion des smileys',
	'ACP_STYLE_COMPONENTS'		=> 'Composants des styles',
	'ACP_STYLE_MANAGEMENT'		=> 'Gestion des styles',
	'ACP_STYLES'				=> 'Styles',
	
	'ACP_TEMPLATES'				=> 'Templates',
	'ACP_THEMES'				=> 'Thèmes',
	
	'ACP_UPDATE'					=> 'Mise à jour',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Permissions des utilisateurs aux forums',
	'ACP_USERS_LOGS'				=> 'Historique des utilisateurs',
	'ACP_USERS_PERMISSIONS'			=> 'Permissions des utilisateurs',
	'ACP_USER_ATTACH'				=> 'Pièces jointes',
	'ACP_USER_AVATAR'				=> 'Avatars',
	'ACP_USER_FEEDBACK'				=> 'Rétroactions',
	'ACP_USER_GROUPS'				=> 'Groupes',
	'ACP_USER_MANAGEMENT'			=> 'Gestion des utilisateurs',
	'ACP_USER_OVERVIEW'				=> 'Vues d’ensemble',
	'ACP_USER_PERM'					=> 'Permissions',
	'ACP_USER_PREFS'				=> 'Préférences',
	'ACP_USER_PROFILE'				=> 'Profils',
	'ACP_USER_RANK'					=> 'Rangs',
	'ACP_USER_ROLES'				=> 'Rôles des utilisateurs',
	'ACP_USER_SECURITY'				=> 'Sécurité des utilisateurs',
	'ACP_USER_SIG'					=> 'Signatures',

	'ACP_VC_SETTINGS'					=> 'Réglages de la confirmation visuelle',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Aperçu de l’image CAPTCHA',
	'ACP_VERSION_CHECK'					=> 'Vérification des mises à jour',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Voir les permissions des administrateurs',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Voir les permissions des modérateurs',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Voir les permissions des forums',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Voir les permissions des modérateurs globaux',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Voir les permissions des utilisateurs',
	
	'ACP_WORDS'					=> 'Gestion de la censure de mots',

	'ACTION'				=> 'Action',
	'ACTIONS'				=> 'Actions',
	'ACTIVATE'				=> 'Activer',
	'ADD'					=> 'Ajouter',
	'ADMIN'					=> 'Administration',
	'ADMIN_INDEX'			=> 'Index de l’administration',
	'ADMIN_PANEL'			=> 'Panneau de Contrôle de l’Administrateur',

	'BACK'					=> 'Retour',

	'COLOUR_SWATCH'			=> 'Palette de couleurs Internet',
	'CONFIG_UPDATED'		=> 'Configuration mise à jour avec succès.',

	'DEACTIVATE'				=> 'Désactiver',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Le chemin “%s” entré n’existe pas.',
	'DIRECTORY_NOT_DIR'			=> 'Le chemin “%s” entré n’est pas un répertoire.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Le chemin “%s” entré ne peut pas être écrit.',
	'DISABLE'					=> 'Désactiver',
	'DOWNLOAD'					=> 'Télécharger',
	'DOWNLOAD_AS'				=> 'Télécharger sous',
	'DOWNLOAD_STORE'			=> 'Télécharger ou stocker le fichier',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Vous devez télécharger directement le fichier ou le sauvegarder dans votre dossier <samp>store/</samp>.',

	'EDIT'					=> 'Éditer',
	'ENABLE'				=> 'Activer',
	'EXPORT_DOWNLOAD'		=> 'Télécharger',
	'EXPORT_STORE'			=> 'Stocker',

	'GENERAL_OPTIONS'		=> 'Options générales',
	'GENERAL_SETTINGS'		=> 'Réglages généraux',
	'GLOBAL_MASK'			=> 'Masque de permissions globales',

	'INSTALL'				=> 'Installer',
	'IP'					=> 'IP de l’utilisateur',
	'IP_HOSTNAME'			=> 'Adresses IP ou noms d’hôtes',

	'LOGGED_IN_AS'			=> 'Vous êtes connecté en tant que :',
	'LOGIN_ADMIN'			=> 'Pour administrer le forum, vous devez être un utilisateur authentifié.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Pour administrer le forum, vous devez vous authentifier à nouveau.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Vous vous êtes authentifié avec succès et vous allez à présent être redirigé sur le Panneau de Contrôle de l’Administrateur.',
	'LOOK_UP_FORUM'			=> 'Sélectionner un forum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Vous pouvez sélectionner plus d’un forum.',

	'MANAGE'				=> 'Gestion',
	'MENU_TOGGLE'			=> 'Masquer ou afficher le menu déroulant',
	'MOVE_DOWN'				=> 'Descendre',
	'MOVE_UP'				=> 'Monter',

	'NOTIFY'				=> 'Avertissement',
	'NO_ADMIN'				=> 'Vous n’êtes pas autorisé à administrer ce forum.',
	'NO_EMAILS_DEFINED'		=> 'Aucun adresse e-mail valide trouvée.',
	'NO_PASSWORD_SUPPLIED'	=> 'Vous devez entrer votre mot de passe pour accéder au Panneau de Contrôle de l’Administrateur.',	

	'OFF'					=> 'Désactivé',
	'ON'					=> 'Activé',

	'PARSE_BBCODE'						=> 'Autoriser le BBCode',
	'PARSE_SMILIES'						=> 'Autoriser les smileys',
	'PARSE_URLS'						=> 'Autoriser les liens',
	'PERMISSIONS_TRANSFERRED'			=> 'Permissions transférées',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Vous avez actuellement les permissions de %1$s. Vous pouvez parcourir le forum avec ces permissions des utilisateurs, mais vous ne pouvez pas accéder au Panneau de Contrôle de l’Administrateur puisque les permissions des administrateurs n’ont pas été transférées. Vous pouvez <a href="%2$s"><strong>retourner à vos réglages de permissions</strong></a> à n’importe quel moment.',
	'PIXEL'							=> 'px',	
	'PROCEED_TO_ACP'					=> '%sAller au PCA%s',

	'REMIND'							=> 'Rappeler',
	'RESYNC'							=> 'Resynchroniser',
	'RETURN_TO'							=> 'Retourner vers…',

	'SELECT_ANONYMOUS'		=> 'Sélectionner l’utilisateur anonyme',
	'SELECT_OPTION'			=> 'Sélectionner l’option',

	'UCP'					=> 'Panneau de Contrôle de l’Utilisateur',
	'USERNAMES_EXPLAIN'		=> 'Placez chaque nom d’utilisateur sur une ligne séparée.',
	'USER_CONTROL_PANEL'	=> 'Panneau de Contrôle de l’Utilisateur',

	'WARNING'				=> 'Avertissement',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Cette page énumère les informations sur la version de PHP installée sur ce serveur. Cela inclut les informations des modules chargés, les variables disponibles et les réglages par défaut. Ces informations peuvent être utiles pour diagnostiquer des problèmes. Veuillez noter que certains hébergeurs peuvent limiter les informations affichées ici pour des raisons de sécurité. Vous devez savoir qu’il est déconseillé de divulguer les informations disponibles sur cette page, sauf quand elles sont demandées par <a href="http://www.phpbb.com/about/team/">membres de l’équipe officielle de phpBB</a> sur les forums officiels de support.',

	'NO_PHPINFO_AVAILABLE'	=> 'Les informations à propos de votre configuration PHP ne peuvent pas être déterminées. Phpinfo() a été désactivé pour des raisons de sécurité.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Ceci liste toutes les actions effectuées par les administrateurs du forum. Vous pouvez les classer par nom d’utilisateur, date, IP ou action. Si vous avez les permissions appropriées, vous pouvez également effacer ces évènements un par un ou effacer entièrement l’historique.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Ceci liste toutes les actions qui se sont passées sur le forum lui-même. Cet historique vous informe des problèmes qui se sont produits, comme par exemple des e-mail non délivrés. Vous pouvez les classer par nom d’utilisateur, date, IP ou action. Si vous avez les permissions appropriées, vous pouvez également effacer ces évènements un par un ou effacer entièrement l’historique.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Ceci liste toutes les actions effectuées sur les forums, les sujets et les messages, ainsi que les actions effectuées sur les utilisateurs par les modérateurs, y compris les bannissements. Vous pouvez les classer par nom d’utilisateur, date, IP ou action. Si vous avez les permissions appropriées, vous pouvez également effacer ces évènements un par un ou effacer entièrement l’historique.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Ceci liste toutes les actions effectuées par les utilisateurs ou sur les utilisateurs (rapports, avertissements et notes des utilisateurs).',
	'ALL_ENTRIES'				=> 'Toutes les entrées',

	'DISPLAY_LOG'	=> 'Afficher les entrées précédentes',

	'NO_ENTRIES'	=> 'Aucun entrée dans l’historique pour cette période.',

	'SORT_IP'		=> 'Adresse IP',
	'SORT_DATE'		=> 'Date',
	'SORT_ACTION'	=> 'Action',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Merci d’avoir choisi phpBB comme solution pour votre forum. Cet écran vous donne un aperçu rapide des diverses statistiques de votre forum. Les liens situés sur le volet à gauche de cet écran vous permettent de contrôler tous les aspects de votre forum. Chaque page contient des instructions sur la manière d’utiliser les outils.',
	'ADMIN_LOG'					=> 'Dernières actions des administrateurs',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Ceci est un aperçu des 5 dernières actions effectuées par les administrateurs du forum. Une copie complète de cet historique est disponible depuis le menu approprié ou en suivant le lien ci-dessous.',
	'AVATAR_DIR_SIZE'			=> 'Taille du répertoire des avatars',

	'BOARD_STARTED'		=> 'Date d’ouverture du forum',
	'BOARD_VERSION'		=> 'Version du forum',

	'DATABASE_SERVER_INFO'	=> 'Serveur de la base de données',
	'DATABASE_SIZE'			=> 'Taille de la base de données',

	'FILES_PER_DAY'		=> 'Pièces jointes par jour',
	'FORUM_STATS'		=> 'Statistiques des forums',

	'GZIP_COMPRESSION'	=> 'Compression GZip',

	'NOT_AVAILABLE'		=> 'Non disponible',
	'NUMBER_FILES'		=> 'Nombre de pièces jointes',
	'NUMBER_POSTS'		=> 'Nombre de messages',
	'NUMBER_TOPICS'		=> 'Nombre de sujets',
	'NUMBER_USERS'		=> 'Nombre d’utilisateurs',
	'NUMBER_ORPHAN'		=> 'Pièces jointes orphelines',

	'POSTS_PER_DAY'		=> 'Messages par jour',

	'PURGE_CACHE'			=> 'Vider le cache',
	'PURGE_CACHE_CONFIRM'	=> 'Êtes-vous sûr de vouloir vider le cache ?',
	'PURGE_CACHE_EXPLAIN'	=> 'Vide tous les fichiers du cache, cela inclut tous les fichiers ou requêtes des templates mis en cache.',

	'RESET_DATE'					=> 'Réinitialiser la date d’ouverture du forum',
	'RESET_DATE_CONFIRM'			=> 'Êtes-vous sûr de vouloir réinitialiser la date d’ouverture du forum ?',
	'RESET_ONLINE'					=> 'Réinitialiser le nombre maximum d’utilisateurs en ligne',
	'RESET_ONLINE_CONFIRM'			=> 'Êtes-vous sûr de vouloir réinitialiser le compteur du nombre maximum d’utilisateurs en ligne ?',
	'RESYNC_POSTCOUNTS'				=> 'Resynchroniser le compteur de messages',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Seuls les messages existants seront pris en compte. Les messages délestés ne seront pas comptabilisés.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Êtes-vous sûr de vouloir resynchroniser le compteur de messages ?',
	'RESYNC_POST_MARKING'			=> 'Resynchroniser les sujets pointés',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Êtes-vous sûr de vouloir resynchroniser les sujets pointés ?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Décochez tous les sujets et cochez correctement les sujets ayant eus une activité durant les six derniers mois.',
	'RESYNC_STATS'					=> 'Resynchroniser les statistiques',
	'RESYNC_STATS_CONFIRM'			=> 'Êtes-vous sûr de vouloir resynchroniser les statistiques ?',
	'RESYNC_STATS_EXPLAIN'			=> 'Recalcule le nombre total de messages, de sujets, d’utilisateurs et de fichiers.',
	'RUN'							=> 'Exécuter maintenant',

	'STATISTIC'					=> 'Statistiques',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Resynchroniser ou réinitialiser les statistiques',

	'TOPICS_PER_DAY'	=> 'Sujets par jour',

	'UPLOAD_DIR_SIZE'	=> 'Taille des pièces jointes publiées',
	'USERS_PER_DAY'		=> 'Utilisateurs par jour',

	'VALUE'					=> 'Valeur',
	'VIEW_ADMIN_LOG'		=> 'Voir l’historique des administrateurs',
	'VIEW_INACTIVE_USERS'	=> 'Voir les utilisateurs inactifs',

	'WELCOME_PHPBB'			=> 'Bienvenue sur phpBB',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Date d’inactivité',
	'INACTIVE_REASON'				=> 'Raison',
	'INACTIVE_REASON_MANUAL'		=> 'Compte désactivé par un administrateur',
	'INACTIVE_REASON_PROFILE'		=> 'Informations du profil modifiées',
	'INACTIVE_REASON_REGISTER'		=> 'Compte nouvellement inscrit',
	'INACTIVE_REASON_REMIND'		=> 'Réactivation forcée du compte de l’utilisateur',
	'INACTIVE_REASON_UNKNOWN'		=> 'Inconnu',
	'INACTIVE_USERS'				=> 'Utilisateurs inactifs',
	'INACTIVE_USERS_EXPLAIN'		=> 'Ceci est la liste des utilisateurs qui se sont inscrits, mais dont le compte est inactif. Vous pouvez activer, supprimer ou rappeler (en envoyant un e-mail) ces utilisateurs si vous le souhaitez.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Ceci est la liste des 10 derniers utilisateurs inscrits qui ont leur compte inactif. Une liste complète est disponible depuis le menu approprié ou en suivant le lien ci-dessous d’où vous pourrez activer, supprimer ou rappeler (en envoyant un e-mail) ces utilisateurs si vous le souhaitez.',

	'NO_INACTIVE_USERS'	=> 'Aucun utilisateur inactif',

	'SORT_INACTIVE'		=> 'Date d’inactivité',
	'SORT_LAST_VISIT'	=> 'Dernière visite',
	'SORT_REASON'		=> 'Raison',
	'SORT_REG_DATE'		=> 'Date de l’inscription',

	'USER_IS_INACTIVE'		=> 'L’utilisateur est inactif',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Ajout ou édition de permissions des utilisateurs</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Ajout ou édition de permissions des groupes d’utilisateurs</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Ajout ou édition de permissions des modérateurs globaux</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Ajout ou édition de permissions des groupes de modérateurs globaux</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Ajout ou édition de permissions des administrateurs</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Ajout ou édition de permissions des groupes d’administrateurs</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Ajout ou édition d’administrateurs</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Ajout ou édition de modérateurs globaux</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Ajout ou édition de l’accès des utilisateurs au forum</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Ajout ou édition de l’accès des modérateurs au forum</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Ajout ou édition de l’accès des groupes d’utilisateurs au forum</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Ajout ou édition de l’accès des groupes de modérateurs au forum</strong> de %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Ajout ou édition de modérateurs</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Ajout ou édition de permissions des forums</strong> de %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Suppression d’administrateurs</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Suppression de modérateurs globaux</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Suppression de modérateurs</strong> de %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Suppression des permissions des groupes/utilisateurs aux forums</strong> de %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Transfert de permissions de</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Restauration de vos permissions après l’utilisation des permissions de</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Tentative de connexion à l’administration échouée</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Connexion à l’administration réussie</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Suppression de pièces jointes d’un utilisateur</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Ajout ou édition d’une extension de pièce jointe</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Suppression d’une extension de pièce jointe</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Mise à jour d’une extension de pièce jointe</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Ajout d’un groupe d’extensions</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Édition d’un groupe d’extensions</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Suppression d’un groupe d’extensions</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Transfert d’une pièce jointe orpheline vers le message</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Suppression d’une pièce jointe orpheline</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Exclusion d’un utilisateur du bannissement</strong> avec la raison “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Exclusion d’une IP du bannissement</strong> avec la raison “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Exclusion d’un e-mail du bannissement</strong> avec la raison “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Bannissement d’un utilisateur</strong> avec la raison “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>Bannissement d’une IP</strong> avec la raison “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Bannissement d’un e-mail</strong> avec la raison “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Suppression d’un utilisateur du bannissement</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Suppression d’une IP du bannissement</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Suppression d’un e-mail du bannissement</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Ajout d’un nouveau BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Édition d’un BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Suppression d’un BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Ajout d’un nouveau robot</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Suppression d’un robot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Mise à jour d’un robot existant</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Effacement de l’historique des administrateurs</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Effacement de l’historique des erreurs</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Effacement de l’historique des modérateurs</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Effacement de l’historique d’un utilisateur</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Effacement de l’historique des utilisateurs</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Modification des réglages des pièces jointes</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Modification des réglages de l’authentification</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Modification des réglages des avatars</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Modification des réglages des cookies</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Modification des réglages des e-mail</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Modification des fonctionnalités du forum</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Modification des réglages de la charge du système</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Modification des réglages des messages privés</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Modification des réglages des messages</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Modification des réglages des inscriptions</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Modification des réglages de la recherche</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Modification des réglages de la sécurité</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Modification des réglages du serveur</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Modification des réglages du forum</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Modification des réglages des signatures</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Modification des réglages de la confirmation visuelle</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Approbation d’un sujet</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Sujet remonté par un utilisateur</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Suppression d’un message</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Suppression d’un sujet</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Copie d’un sujet</strong><br />» vers %s',
	'LOG_LOCK'					=> '<strong>Verrouillage d’un sujet</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Verrouillage d’un message</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Fusionnement de messages</strong> dans le sujet<br />» %s',
	'LOG_MOVE'					=> '<strong>Déplacement d’un sujet</strong><br />» vers %s',
	'LOG_POST_APPROVED'			=> '<strong>Approbation d’un message</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Désapprobation du message “%1$s” avec la raison suivante</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Édition du message “%1$s” écrit par</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Fermeture d’un rapport</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Suppression d’un rapport</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Déplacement de messages divisés</strong><br />» to %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Division de messages</strong><br />» from %s',

	'LOG_TOPIC_DELETED'			=> '<strong>Suppression d’un sujet</strong><br />» %s',
	'LOG_TOPIC_APPROVED'		=> '<strong>Approbation d’un sujet</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Désapprobation du sujet “%1$s” avec la raison suivante</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Resynchronisation du compteur des sujets</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Modification du type d’un sujet</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Déverrouillage d’un sujet</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Déverrouillage d’un message</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Ajout d’un nom d’utilisateur interdit</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Suppression d’un nom d’utilisateur interdit</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Sauvegarde de la base de données</strong>',
	'LOG_DB_DELETE'			=> '<strong>Suppression de la sauvegarde de la base de données</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Restauration de la sauvegarde de la base de données</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Exclusion d’un IP/nom d’hôte de la liste des téléchargements</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Ajout d’un IP/nom d’hôte de la liste des téléchargements</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Suppression d’un IP/nom d’hôte de la liste des téléchargements</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Erreur Jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Erreur e-mail</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Création d’un nouveau forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Suppression d’un forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Suppression d’un forum et de ses sous-forums</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Suppression d’un forum et déplacement de ses sous-forums</strong> vers %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Suppression d’un forum et déplacement de ses messages </strong> vers %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Suppression d’un forum et de ses sous-forums, déplacement des messages</strong> vers %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Suppression d’un forum, déplacement des messages</strong> vers %1$s <strong>et des sous-forums</strong> vers %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Suppression d’un forum et de ses messages</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Suppression d’un forum, de ses messages et sous-forums</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Suppression d’un forum et de ses messages, déplacement des sous-forums</strong> vers %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Édition des informations d’un forum</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Déplacement du forum</strong> %1$s <strong>en dessous de</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Déplacement du forum</strong> %1$s <strong>au-dessus de</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Resynchronisation d’un forum</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>Création d’un nouveau groupe d’utilisateurs</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Groupe “%1$s” défini par défaut pour les membres</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Suppression d’un groupe d’utilisateurs</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Rétrogradation du chef dans le groupe d’utilisateurs</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Promotion d’un membre en chef dans le groupe d’utilisateurs</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Suppression de membres du groupe d’utilisateurs</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Mise à jour des informations d’un groupe d’utilisateurs</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Ajout d’un nouveau chef dans le groupe d’utilisateurs</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Approbation d’utilisateurs dans le groupe d’utilisateurs</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Ajout de nouveaux membres dans le groupe d’utilisateurs</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'		=> '<strong>Ajout d’un nouveau pack d’images dans la base de données</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'		=> '<strong>Ajout d’un nouveau pack d’images dans le système de fichiers</strong><br />» %s',
	'LOG_IMAGESET_DELETE'		=> '<strong>Suppression d’un pack d’images</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'	=> '<strong>Édition des informations d’un pack d’images</strong><br />» %s',
	'LOG_IMAGESET_EDIT'			=> '<strong>Édition d’un pack d’images</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'		=> '<strong>Exportation d’un pack d’images</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Traduction “%2$s” manquante pour le pack d’images</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Rafraîchissement de la traduction “%2$s” d’un pack d’images</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'	=> '<strong>Rafraîchissement d’un pack d’images</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Activation d’utilisateurs inactifs</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Suppression d’utilisateurs inactifs</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Envoi d’e-mail de rappels aux utilisateurs inactifs</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Convertion de %1$s vers phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Installation de phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>La vérification de la session IP/navigateur/X_FORWARDED_FOR a échouée</strong><br />»L’IP de l’utilisateur “<em>%1$s</em>” a été comparée avec la session IP “<em>%2$s</em>”, la chaîne du navigateur de l’utilisateur “<em>%3$s</em>” a été comparée avec la chaîne de la session “<em>%4$s</em>” du navigateur et la chaîne X_FORWARDED_FOR de l’utilisateur “<em>%5$s</em>” a été comparée avec la chaîne X_FORWARDED_FOR de la session “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Modification du compte Jabber</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Modification du mot de passe Jabber</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Inscription du compte Jabber</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Modification des réglages Jabber</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Suppression d’un pack de langues</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Installation d’un pack de langues</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Mise à jour des informations d’un pack de langues</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Remplacement d’un fichier de langue</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Envoi d’un fichier de langue et placement dans le dossier de stockage</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Envoi d’un e-mail de masse</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Modification de l’auteur du sujet “%1$s”</strong><br />» de %2$s to %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Désactivation d’un module</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Activation d’un module</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Abaissement d’un module</strong><br />» %1$s en dessous de %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Rehaussement d’un module</strong><br />» %1$s au-dessus de %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Suppression d’un module</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Ajout d’un module</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Édition d’un module</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Ajout d’un rôle d’administrateur</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Édition d’un rôle d’administrateur</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Suppression d’un rôle d’administrateur</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Ajout d’un rôle d’un forum</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Édition d’un rôle d’un forum</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Suppression d’un rôle d’un forum</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Ajout d’un rôle de modérateur</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Édition d’un rôle de modérateur</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Suppression d’un rôle de modérateur</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Ajout d’un rôle d’utilisateur</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Édition d’un rôle d’utilisateur</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Suppression d’un rôle d’utilisateur</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Activation d’un champ de profil</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Ajout d’un champ de profil</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Désactivation d’un champ de profil</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Modification d’un champ de profil</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Suppression d’un champ de profil</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Délestage de forums</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Délestage automatique de forums</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Désactivation d’utilisateurs</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Délestage d’utilisateurs et suppression des messages</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Délestage d’utilisateurs et préservation des messages</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Vidage du cache</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Ajout d’un nouveau rang</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Suppression d’un rang</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Mise à jour d’un rang</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Ajout d’un rapport/raison</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Suppression d’un rapport/raison</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Mise à jour d’un rapport/raison</strong><br />» %s',

	'LOG_RESET_DATE'			=> '<strong>Réinitialisation de la date de l’ouverture du forum</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Réinitialisation du nombre maximum d’utilisateurs en ligne</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Réinitialisation du compteur des messages des utilisateurs</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Resynchronisation des sujets pointés</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Resynchronisation des statistiques des messages, des sujets et des utilisateurs</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Création d’un index de recherche pour</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Suppression d’un index de recherche pour</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Ajout d’un nouveau style</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Suppression d’un style</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Édition d’un style</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Exportation d’un style</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Ajout d’un nouveau pack de templates dans la base de données</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Ajout d’un nouveau pack de templates dans le système de fichiers</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Suppression de la version cache des fichiers du template dans le packs de templates <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Suppression d’un pack de templates</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Édition du pack de templates <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Édition des informations d’un template</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Exportation d’un pack de templates</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Rafraîchissement d’un pack de templates</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Ajout d’un nouveau thème dans la base de données</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Ajout d’un nouveau thème dans le système de fichiers</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Suppression d’un thème</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Édition des informations d’un thème</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Édition du thème <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Édition du thème <em>%1$s</em></strong><br />» Fichier modifié <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Exportation d’un thème</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Rafraîchissement d’un thème</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Mise à jour de la base de données de la version %1$s vers la version %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Mise à jour de phpBB de la version %1$s vers la version %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Activation d’un utilisateur</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Bannissement d’un utilisateur via la gestion des utilisateurs</strong> avec la raison “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Bannissement d’une IP via la gestion des utilisateurs</strong> avec la raison “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Bannissement d’un e-mail via la gestion des utilisateurs</strong> avec la raison “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Suppression d’un utilisateur</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Suppression de toutes les pièces jointes d’un utilisateur</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Suppression de l’avatar d’un utilisateur</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Suppression de tous les messages d’un utilisateur</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Suppression de la signature d’un utilisateur</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Désactivation d’un utilisateur</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Déplacement de messages d’un utilisateur</strong><br />» messages de “%1$s” vers le forum “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Modification du mot de passe d’un utilisateur</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Réactivation forcée du compte d’un utilisateur</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Modification de l’e-mail de l’utilisateur “%1$s”</strong><br />» de “%2$s” vers “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Modification d’un nom d’utilisateur</strong><br />» de “%1$s” vers “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Mise à jour des informations d’un utilisateur</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Activation du compte d’un utilisateur</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Suppression de l’avatar d’un utilisateur</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Suppression de la signature d’un utilisateur</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Ajout d’une rétroaction par un utilisateur</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Ajout d’une entrée :</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Désactivation du compte d’un utilisateur</strong>',
	'LOG_USER_LOCK'				=> '<strong>Verrouillage des propres sujets d’un utilisateur</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Déplacement de tous les messages vers un forum</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Réactivation forcée du compte d’un utilisateur</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Déverrouillage des propres sujets d’un utilisateur</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>>Ajout d’un avertissement pour un utilisateur</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Envoi de l’avertissement suivant à cet utilisateur</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Changement du groupe par défaut par un utilisateur</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Rétrogradation du chef d’un groupe d’utilisateurs</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Adhésion à un groupe d’un utilisateur</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Adhésion à un groupe d’un utilisateur et demande d’approbation</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Désinscription à un groupe d’un utilisateur</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Ajout d’un mot censuré</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Suppression d’un mot censuré</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Édition d’un mot censuré</strong><br />» %s',
));

?>
