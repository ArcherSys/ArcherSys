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
* install [French]
*
* @package language
* @version $Id: install.php,v 1.120 2007/08/24 17:18:43 acydburn Exp $
* @translation $Id: install.php,v 0.120 2007/08/27 13:15:07 xaphos Exp $
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
	'ADMIN_CONFIG'				=> 'Configuration de l’administrateur',
	'ADMIN_PASSWORD'			=> 'Mot de passe de l’administrateur',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Confirmer le mot de passe de l’administrateur',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Veuillez saisir un mot de passe compris entre 6 et 30 caractères de long.',
	'ADMIN_TEST'				=> 'Vérifier les réglages de l’administrateur',
	'ADMIN_USERNAME'			=> 'Nom d’utilisateur de l’administrateur',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Veuillez saisir un nom d’utilisateur compris entre 3 et 20 caractères de long.',
	'APP_MAGICK'				=> 'Support Imagemagick [ Pièces jointes ]',
	'AUTHOR_NOTES'				=> 'Notes de l’auteur<br />» %s',
	'AVAILABLE'					=> 'Disponible',
	'AVAILABLE_CONVERTORS'		=> 'Convertisseurs disponibles',

	'BEGIN_CONVERT'					=> 'Démarrer la conversion',
	'BLANK_PREFIX_FOUND'			=> 'Un balayage de vos tables a détecté une installation valide n’utilisant aucun préfixe de table.',
	'BOARD_NOT_INSTALLED'			=> 'Aucune installation n’a été trouvée',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'Pour permettre à phpBB de fonctionner correctement, vous devez procéder par une installation vierge de phpBB3. Veuillez <a href="%s">procéder par la première installation de phpBB3</a>.',

	'CATEGORY'					=> 'Catégorie',
	'CACHE_STORE'				=> 'Type de cache',
	'CACHE_STORE_EXPLAIN'		=> 'L’emplacement physique où les données sont mises en cache, un système de fichiers est préférable.',
	'CAT_CONVERT'				=> 'Convertir',
	'CAT_INSTALL'				=> 'Installer',
	'CAT_OVERVIEW'				=> 'Aperçu',
	'CAT_UPDATE'				=> 'Mise à jour',
	'CHANGE'					=> 'Modifier',
	'CHECK_TABLE_PREFIX'		=> 'Veuillez vérifier votre préfixe de table, puis réessayer.',
	'CLEAN_VERIFY'				=> 'Vérification et nettoyage de la structure finale',
	'CLEANING_USERNAMES'		=> 'Nettoyage des noms d’utilisateurs',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> est le nom d’utilisateur propre pour :',
	'COLLIDING_USERNAMES_FOUND'	=> 'Des noms d’utilisateurs de votre ancien forum étant similaires à certains de votre nouveau forum ont été trouvés. Afin d’accomplir correctement la conversion, vous devez supprimer ou renommer ces utilisateurs de sorte qu’il n’y ait qu’un seul utilisateur pour chaque nom d’utilisateur propre.',
	'COLLIDING_USER'			=> '» identification de l’utilisateur : <strong>%d</strong> nom d’utilisateur : <strong>%s</strong> (%d messages)',
	'CONFIG_CONVERT'			=> 'Configuration de la conversion',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Il n’a pas été possible d’écrire sur le fichier de configuration. Des méthodes alternatives pour que ce fichier soit créé sont présentées ci-dessous.',
	'CONFIG_FILE_WRITTEN'		=> 'Le fichier de configuration a été écrit. Vous pouvez à présent procéder à la prochaine étape de l’installation.',
	'CONFIG_PHPBB_EMPTY'		=> 'La variable de la configuration de phpBB3 pour "%s" est vide.',
	'CONFIG_RETRY'				=> 'Réessayer',
	'CONTACT_EMAIL_CONFIRM'		=> 'Confirmer l’e-mail de contact',
	'CONTINUE_CONVERT'			=> 'Continuer la conversion',
	'CONTINUE_CONVERT_BODY'		=> 'Une tentative de conversion précédente a été trouvée. Vous pouvez choisir à présent entre commencer une nouvelle conversion ou continuer la conversion.',
	'CONTINUE_LAST'				=> 'Continuer les dernières instructions',
	'CONTINUE_OLD_CONVERSION'	=> 'Continuer la conversion commencée précédemment',
	'CONVERT'					=> 'Convertir',
	'CONVERT_COMPLETE'			=> 'Conversion terminée',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Vous avez à présent converti votre forum vers phpBB 3.0 avec succès. Vous pouvez à présent vous connecter et <a href="../">accéder à votre forum</a>. Veuillez vous assurer que les réglages ont été correctement apportés avant l’activation de votre forum qui se réalise en supprimant le répertoire “install”. Souvenez-vous que de l’aide sur l’utilisation de phpBB est disponible en ligne par l’intermédiaire de la <a href="http://www.phpbb.com/support/documentation/3.0/">Documentation</a> et les <a href="http://www.phpbb.com/community/viewforum.php?f=46">forums de support</a>.',
	'CONVERT_INTRO'				=> 'Bienvenue sur la Plate-forme de Conversion Unifiée de phpBB',
	'CONVERT_INTRO_BODY'		=> 'D’ici, vous pouvez importer des données vers d’autres systèmes de forums (installés). La liste ci-dessous montre tous les modules de conversion actuellement disponibles. S’il n’y a aucun convertisseur affiché dans cette liste pour le logiciel de forum vous souhaitez convertir, veuillez vérifier notre site Internet où d’autres modules de conversion peuvent être disponibles au téléchargement.',
	'CONVERT_NEW_CONVERSION'	=> 'Nouvelle conversion',
	'CONVERT_NOT_EXIST'			=> 'Le convertisseur spécifié n’existe pas.',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Les informations que vous avez saisies ont été vérifiées. Pour commencer le processus de conversion, appuyez sur le bouton ci-dessous.',
	'CONV_ERR_FATAL'					=> 'Erreur fatale lors de la conversion',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'Le transfert des pièces jointes par FTP est activé sur votre ancien forum. Veuillez désactiver l’option de transfert FTP et vous assurer qu’un répertoire valide de téléchargement est spécifié, puis copiez toutes les pièces jointes vers ce nouveau répertoire qui doit être accessible depuis Internet. Une fois que vous avez fait cela, redémarrez le convertisseur.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Il n’y a aucune information de configuration disponible pour la conversion.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Impossible d’obtenir les informations d’accès au forum.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Impossible d’obtenir les catégories.',
	'CONV_ERROR_GET_CONFIG'				=> 'Impossible de récupérer la configuration de votre forum.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Impossible d’accéder/lire "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Impossible d’obtenir les informations d’authentification des groupes.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Contradiction détectée dans la table des groupes dans add_bots() - vous devez ajouter tous les groupes spéciaux si vous le faites manuellement.',
	'CONV_ERROR_INSERT_BOT'				=> 'Impossible d’insérer le robot dans la table des utilisateurs.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Impossible d’insérer le robot dans la table des robots.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Impossible d’insérer l’utilisateur dans la table user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Erreur d’analyse du message',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Note au développeur : vous devez spécifier $convertor[\'avatar_path\'] pour utiliser %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Le chemin relatif au forum source n’a pas été spécifié.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Note au développeur : vous devez spécifier $convertor[\'avatar_gallery_path\'] pour utiliser %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Le groupe "%1$s" est introuvable dans %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Note au développeur : vous devez spécifier $convertor[\'ranks_path\'] pour utiliser %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Note au développeur : vous devez spécifier $convertor[\'smilies_path\'] pour utiliser %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Note au développeur : vous devez spécifier $convertor[\'upload_path\'] pour utiliser %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Impossible d’insérer/mettre à jour les paramètres de permission.',
	'CONV_ERROR_PM_COUNT'				=> 'Impossible de sélectionner le compteur de dossiers de MP.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Impossible d’insérer le nouveau forum en remplacement de l’ancienne catégorie.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Impossible d’insérer le nouveau forum en remplacement de l’ancien forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Impossible d’obtenir les informations d’authentification de l’utilisateur.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Mauvais groupe "%1$s" défini dans %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Cette page collecte les informations qui sont nécessaires pour accéder à votre forum source. Entrez les informations de la base de données de votre ancien forum ; le convertisseur ne modifiera rien dans la base de données donnée ci-dessous. Le forum source devrait être désactivé pour permettre une conversion sans danger.',
	'CONV_SAVED_MESSAGES'				=> 'Messages sauvegardés',

	'COULD_NOT_COPY'			=> 'Impossible de copier le fichier <strong>%1$s</strong> vers <strong>%2$s</strong><br /><br />Veuillez vérifier que le répertoire cible existe et que l’écriture soit possible par le serveur Internet.',
	'COULD_NOT_FIND_PATH'		=> 'Impossible de trouver le chemin de votre ancien forum. Veuillez vérifier vos réglages et réessayer.<br />» Le chemin de la source spécifié était %s.',

	'DBMS'						=> 'Type de base de données',
	'DB_CONFIG'					=> 'Configuration de la base de données',
	'DB_CONNECTION'				=> 'Connexion à la base de données',
	'DB_ERR_INSERT'				=> 'Erreur lors du traitement de la requête <code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'Erreur lors du traitement de <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Erreur lors de l’exécution de <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Erreur lors de l’exécution de <var>query_first</var>, %s ("%s").',
	'DB_ERR_SELECT'				=> 'Erreur lors du fonctionnement de la requête <code>SELECT</code>.',
	'DB_HOST'					=> 'Nom d’hôte du serveur de la base de données ou DSN',
	'DB_HOST_EXPLAIN'			=> 'Le DSN représente le Data Source Name et est approprié seulement pour les installations ODBC.',
	'DB_NAME'					=> 'Nom de la base de données',
	'DB_PASSWORD'				=> 'Mot de passe de la base de données',
	'DB_PORT'					=> 'Port du serveur de la base de données',
	'DB_PORT_EXPLAIN'			=> 'Laissez ceci vide à moins que vous sachiez que le serveur utilise un port non standard.',
	'DB_USERNAME'				=> 'Nom d’utilisateur de la base de données',
	'DB_TEST'					=> 'Tester la connexion',
	'DEFAULT_LANG'				=> 'Langue par défaut du forum',
	'DEFAULT_PREFIX_IS'			=> 'Le convertisseur n’a pas pu trouver de tables avec le préfixe spécifié. Veuillez vous assurer d’avoir entré les informations correctes pour le forum que vous souhaitez convertir. Le préfixe de la table par défaut pour %1$s est <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'Aucune valeur n’a été spécifiée pour la variable test_file dans le convertisseur. Si vous êtes un utilisateur de ce convertisseur, vous ne devriez pas avoir cette erreur, veuillez rapporter ce message à l’auteur du convertisseur. Si vous êtes l’auteur du convertisseur, vous devez spécifier le nom du fichier qui existe dans le forum source pour permettre au chemin d’être vérifié.',
	'DIRECTORIES_AND_FILES'		=> 'Installation du répertoire et du fichier',
	'DISABLE_KEYS'				=> 'Désactivation des clés',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Support à distance FTP [ Installation ]',
	'DLL_GD'					=> 'Support graphique GD [ Confirmation Visuelle ]',
	'DLL_MBSTRING'				=> 'Support des caractères multi-octets',
	'DLL_MSSQL'					=> 'Serveur MSSQL 2000+',
	'DLL_MSSQL_ODBC'			=> 'Serveur MSSQL 2000+ via ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL avec Extension MySQLi',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'Support XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Support de la compression zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Télécharger la configuration',
	'DL_CONFIG_EXPLAIN'			=> 'Vous pouvez télécharger le fichier complet config.php sur votre propre PC. Vous devrez alors transférer le fichier manuellement, en remplaçant le fichier config.php déjà existant à la racine de votre répertoire phpBB 3.0. Souvenez-vous de transférer le fichier dans le format ASCII (consultez la documentation de votre application FTP si vous n’êtes pas certain de pouvoir réaliser cela). Lorsque vous avez transféré le fichier config.php, veuillez cliquer sur “Fait” pour vous déplacer à la prochaine étape.',
	'DL_DOWNLOAD'				=> 'Télécharger',
	'DONE'						=> 'Fait',

	'ENABLE_KEYS'				=> 'Réactivation des clés. Cela peut prendre un certain temps.',

	'FILES_OPTIONAL'			=> 'Fichiers et répertoires optionnels',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Optionnel</strong> - Ces fichiers, répertoires ou les réglages des permissions ne sont pas obligatoires. Le système d’installation essaiera d’employer diverses techniques pour les créer s’ils n’existent pas ou qu’ils ne puissent pas être écrits. Cependant, la présence de ces derniers terminera plus rapidement l’installation.',
	'FILES_REQUIRED'			=> 'Fichiers et Répertoires',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Obligatoire</strong> - Afin de fonctionner correctement, phpBB doit pouvoir accéder ou écrire sur certains fichiers ou répertoires. Si vous voyez “Introuvable”, vous devez créer le fichier ou le répertoire approprié. Si vous voyez “Écriture impossible”, vous devez modifier les permissions sur le fichier ou le répertoire pour autoriser phpBB à y écrire dessus.',
	'FILLING_TABLE'				=> 'Remplissage de la table <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Remplissage des tables',
	'FINAL_STEP'				=> 'Traitement de l’étape finale',
	'FORUM_ADDRESS'				=> 'Adresse du forum',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Ceci est l’URL de votre ancien forum, par exemple <samp>http://www.exemple.com/phpBB2/</samp>. Si une adresse est entrée ici et non vide à gauche, chaque exemple de cette adresse sera remplacé par vos nouvelles adresses des forums dans les messages, messages privés et signatures.',
	'FORUM_PATH'				=> 'Chemin du forum',
	'FORUM_PATH_EXPLAIN'		=> 'Ceci est le chemin <strong>relatif</strong> du disque vers votre ancien forum depuis la <strong>racine de cette installation de phpBB3</strong>.',
	'FOUND'						=> 'Trouvé',
	'FTP_CONFIG'				=> 'Transférer la configuration par FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB a détecté la présence du module FTP sur ce serveur. Vous pouvez essayer d’installer votre fichier config.php par l’intermédiaire de celui-ci si vous le souhaitez. Vous devrez fournir l’information demandée ci-dessous. Souvenez-vous que votre nom d’utilisateur et votre mot de passe sont ceux de votre serveur ! (demandez des informations à votre service d’hébergement si vous n’êtes pas certain de les connaître).',
	'FTP_PATH'					=> 'Chemin FTP',
	'FTP_PATH_EXPLAIN'			=> 'Ceci est le chemin vers la racine de votre répertoire phpBB, ex. <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'Transférer',

	'GPL'						=> 'License Publique Générale',
	
	'INITIAL_CONFIG'			=> 'Configuration basique',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Maintenant que l’installation a déterminée que votre serveur peut faire fonctionner phpBB, vous devez fournir certaines informations spécifiques. Si vous ne savez pas vous connecter à votre base de données, veuillez contacter votre service d’hébergement (en premier lieu) ou utiliser les forums de support phpBB. Lorsque vous entrez des données, veuillez vous assurer de les vérifier intégralement avant de continuer.',
	'INSTALL_CONGRATS'			=> 'Félicitations !',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		<p>Vous avez à présent installé phpBB %1$s avec succès. D’ici, vous avez deux options pour savoir ce qu’il faut faire avec votre phpBB3 nouvellement installé :</p>
		<h2>Convertir un forum existant en phpBB3</h2>
		<p>La Plate-forme de Conversion Unifiée de phpBB supporte la conversion de phpBB 2.0.x et d’autres systèmes de forums vers phpBB3. Si vous avez un forum existant que vous souhaitez convertir, veuillez <a href="%2$s">choisir un convertisseur</a>.</p>
		<h2>Consultez en ligne votre forum phpBB3 !</h2>
		<p>Cliquez sur le bouton ci-dessous pour accéder à votre Panneau de Contrôle de l’Administrateur (PCA). Prenez votre temps pour examiner les options qui vous sont disponibles. Souvenez-vous que l’aide est accessible en ligne par l’intermédiaire de la <a href="http://www.phpbb.com/support/documentation/3.0/">Documentation</a> et les <a href="http://www.phpbb.com/community/viewforum.php?f=46">forums de support</a>, consultez le fichier <a href="%3$s">README</a> pour de plus amples informations.</p><p><strong>Veuillez à présent supprimer, déplacer ou renommer le répertoire “install” avant d’utiliser votre forum. Tant que ce répertoire est présent, seul le Panneau de Contrôle de l’Administrateur sera accessible.</strong></p>',
	'INSTALL_INTRO'				=> 'Bienvenue sur l’Installation',
// TODO: write some more introductions here
	'INSTALL_INTRO_BODY'		=> 'Avec cette option, il est possible d’installer phpBB sur votre serveur.</p><p>Afin de procéder, vous avez besoin des réglages de votre base de données. Si vous ne connaissez pas les réglages de votre base de données, veuillez contacter votre hébergeur et lui demander. Vous ne pourrez pas continuer sans eux. Vous avez besoin de:</p>

	<ul>
		<li>Le type de la base de données - la base de données que vous allez utiliser.</li>
		<li>Le nom d’hôte ou DNS du serveur de la base de données - l’adresse du serveur de la base de données.</li>
		<li>Le port du serveur de la base de données - le port du serveur de la base de données (dans la plupart des cas il n’est pas demandé).</li>
		<li>Le nom de la base de données - le nom de la base de données sur le serveur.</li>
		<li>Le nom d’utilisateur et le mot de passe de la base de données - les informations de connexion pour accéder à la base de données.</li>
	</ul>

	<p><strong>Note :</strong> si vous installez phpBB en utilisant SQLite, vous devriez saisir le chemin complet de votre fichier de la base de donnée dans le champ DNS et laisser le champ du nom d’utilisateur et du mot de passe vide. Pour des raisons de sécurité, vous devriez vous assurer que le fichier de la base de données n’est pas stocké dans un endroit accessible depuis Internet.</p>

	<p>phpBB3 supporte les bases de données suivantes :</p>
	<ul>
		<li>MySQL 3.23 ou plus (MySQLi supporté)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>Serveur MS SQL 2000 ou plus (directement ou par l’intermédiaire d’ODBC)</li>
		<li>Oracle</li>
	</ul>
	
	<p>Seules les bases de données qui sont supportées par votre serveur seront affichées.',
	'INSTALL_INTRO_NEXT'		=> 'Pour commencer l’installation, veuillez appuyer sur le bouton ci-dessous.',
	'INSTALL_LOGIN'				=> 'Connexion',
	'INSTALL_NEXT'				=> 'Prochaine étape',
	'INSTALL_NEXT_FAIL'			=> 'Certains tests ont échoués et vous devriez corriger ces problèmes avant de procéder à la prochaine étape. Ne pas le faire peut avoir comme conséquence une installation inachevée.',
	'INSTALL_NEXT_PASS'			=> 'Tous les tests basiques sont terminés et vous pouvez passer à l’étape suivante de l’installation. Si vous avez modifié certains modules, permissions, etc. et que vous souhaitez les vérifier à nouveau, vous le pouvez.',
	'INSTALL_PANEL'				=> 'Panneau de l’Installation',
	'INSTALL_SEND_CONFIG'		=> 'Malheureusement, phpBB n’arrive pas à écrire les informations de configuration directement sur le fichier config.php. Il est possible que le fichier n’existe pas ou qu’il ne puisse pas être écrit. Un certain nombre d’options seront énumérées ci-dessous pour vous permettre d’accomplir l’installation du fichier config.php.',
	'INSTALL_START'				=> 'Démarrer l’installation',
	'INSTALL_TEST'				=> 'Tester à nouveau',
	'INST_ERR'					=> 'Erreur d’installation',
	'INST_ERR_DB_CONNECT'		=> 'Impossible de se connecter à la base de données, consultez le message d’erreur ci-dessous.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Le fichier de la base de données spécifié est dans le répertoire racine de votre forum. Vous devez déplacer ce fichier dans un emplacement inaccessible depuis Internet.',
	'INST_ERR_DB_NO_ERROR'		=> 'Aucun message d’erreur survenu.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'La version de MySQL installée sur cette machine est incompatible avec l’option “MySQL avec Extension MySQLi” que vous avez sélectionné. Veuillez essayer avec l’option “MySQL” à la place.',
	'INST_ERR_DB_NO_SQLITE'		=> 'La version de l’extension SQLite que vous avez installée est trop ancienne, elle doit être mise à jour avec la version 2.8.2 au minimum.',
	'INST_ERR_DB_NO_ORACLE'		=> 'La version d’Oracle installée sur cette machine requiert le réglage du paramètre <var>NLS_CHARACTERSET</var> en <var>UTF8</var>. Veuillez mettre à jour votre installation avec la version 9.2+ ou modifier le paramètre.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'La version de Firebird installée sur cette machine est plus ancienne que la 2.0, veuillez la mettre à jour avec une version plus récente.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'La base de données que vous avez sélectionné pour Firebird est d’une taille inférieure à 8192, elle doit être au moins de 8192.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'La base de données que vous avez sélectionné n’est pas encodée en <var>UNICODE</var> ou <var>UTF8</var>. Essayez de l’installer avec une base de données encodée en <var>UNICODE</var> ou <var>UTF8</var>.',
	'INST_ERR_DB_NO_NAME'		=> 'Aucun nom de la base de données spécifié.',
	'INST_ERR_EMAIL_INVALID'	=> 'L’adresse e-mail que vous avez entré est invalide.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Les e-mail que vous avez entré ne concordent pas.',
	'INST_ERR_FATAL'			=> 'Erreur fatale de l’installation',
	'INST_ERR_FATAL_DB'			=> 'Une erreur fatale et irrécupérable de la base de données est survenue. Il est possible que l’utilisateur spécifié n’est pas les permissions appropriées pour exécuter <code>CREATE TABLES</code> ou <code>INSERT</code>, etc. De plus amples informations sont disponibles ci-dessous. Veuillez contacter en premier lieu votre fournisseur d’hébergement ou demander de l’aide dans les forums de support phpBB pour plus d’assistance.',
	'INST_ERR_FTP_PATH'			=> 'Impossible de modifier le répertoire spécifié, veuillez vérifier le chemin.',
	'INST_ERR_FTP_LOGIN'		=> 'Impossible de se connecter au serveur FTP, vérifiez votre nom d’utilisateur et votre mot de passe.',
	'INST_ERR_MISSING_DATA'		=> 'Vous devez remplir tous les champs de ce bloc.',
	'INST_ERR_NO_DB'			=> 'Impossible de charger le module PHP pour le type de base de données sélectionné.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Les mots de passe que vous avez entré ne concordent pas.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Le mot de passe que vous entré est trop long. La longueur maximale est de 30 caractères.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Le mot de passe que vous entré est trop court. La longueur minimale est de 6 caractères.',
	'INST_ERR_PREFIX'			=> 'Des tables avec le préfixe spécifié existent déjà, veuillez en choisir un différent.',
	'INST_ERR_PREFIX_INVALID'	=> 'Le préfixe de la table que vous avez spécifié est invalide pour votre base de données. Veuillez recommencer à nouveau, en supprimant les caractères comme les tirets.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Le préfixe de la table que vous avez spécifié est trop long. La longueur maximale est de %d caractères.',
	'INST_ERR_USER_TOO_LONG'	=> 'Le nom d’utilisateur que vous avez entré est trop long. La longueur maximale est de 20 caractères.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Le nom d’utilisateur que vous avez entré est trop court. La longueur minimale est de 3 caractères.',
	'INVALID_PRIMARY_KEY'		=> 'Clé primaire invalide : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Veuillez noter que cela peut prendre un certain temps... Veuillez ne pas arrêter le script.',

	// mbstring
	'MBSTRING_CHECK'						=> 'Vérification de l’extension <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Obligatoire</strong> - <samp>mbstring</samp> est une extension PHP qui fournit des fonctions permettant l’encodage de caractères multi-octets. Certaines fonctionnalités de mbstring ne sont pas compatibles avec phpBB et doivent être désactivées.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Fonction de surcharge',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> doit être réglé sur 0 ou 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Encodage des caractères invisibles',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> doit être réglé sur 0.',
	'MBSTRING_HTTP_INPUT'					=> 'Conversion des caractères d’entrée d’HTTP',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> doit être réglé sur <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'Conversion des caractères de sortie d’HTTP',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> doit être réglé sur <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Veuillez être certain que ce dossier existe et qu’il puisse être écrit par le serveur Internet, puis réessayez :<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Veuillez être certain que ces dossiers existent et qu’ils puissent être écrits par le serveur Internet, puis réessayez :<br />»<strong>%s</strong>.',

	'NAMING_CONFLICT'			=> 'Conflit de nommage : %s et %s sont tous les deux des alias<br /><br />%s',
	'NEXT_STEP'					=> 'Procéder à l’étape suivante',
	'NOT_FOUND'					=> 'Introuvable',
	'NOT_UNDERSTAND'			=> 'Impossible d’interpréter %s #%d, table %s ("%s")',
	'NO_CONVERTORS'				=> 'Aucun convertisseur disponible à l’utilisation.',
	'NO_CONVERT_SPECIFIED'		=> 'Aucun convertisseur spécifié.',
	'NO_LOCATION'				=> 'Impossible de déterminer l’emplacement. Si vous savez qu’Imagemagick est installé, vous pouvez spécifier son emplacement plus tard dans votre Panneau de Contrôle de l’Administrateur',
	'NO_TABLES_FOUND'			=> 'Aucune table trouvée.',
// TODO: Write some explanatory introduction text

	'OVERVIEW_BODY'					=> 'Bienvenue sur notre Release Candidate publique de la nouvelle génération de phpBB après 2.0.x, phpBB 3.0 ! Cette version est destinée pour un usage plus étendu afin de nous aider en identifiant les derniers bogues et zones problématiques.</p><p>Veuillez lire <a href="../docs/INSTALL.html">notre guide d’installation</a> pour plus d’informations à propos de l’installation de phpBB3</p><p><strong style="text-transform: uppercase;">Note :</strong> Cette version n’est <strong style="text-transform: uppercase;">pas encore finale</strong>. Vous devez attendre la sortie de la version finale avant toute utilisation en ligne.</p><p>Ce système d’installation vous guidera pendant le processus d’installation de phpBB, en convertissant par une archive de logiciel différent ou par la mise à jour depuis la dernière version de phpBB. Plus plus d’informations sur chaque option, sélectionnez la depuis le menu ci-dessus.',
	'PCRE_UTF_SUPPORT'				=> 'Support UTF-8 PCRE',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB ne fonctionnera <strong>pas</strong> si votre installation PHP n’est pas encodée avec le support UTF-8 dans l’extension PCRE.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'La fonction PHP getimagesize() est disponible',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Obligatoire</strong> - Afin que phpBB puisse fonctionner correctement, la fonction getimagesize doit être disponible.',
	'PHP_OPTIONAL_MODULE'			=> 'Modules optionnels',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Optionnel</strong> - Ces modules ou applications sont optionnels. Cependant, s’ils sont disponibles, ils permettront l’activation de fonctionnalités supplémentaires.',
	'PHP_SUPPORTED_DB'				=> 'Bases de données supportées',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Obligatoire</strong> - Vous devez avoir au moins une base de données compatible avec PHP. Si aucun module de la base de données n’est affiché comme disponible, vous devriez contacter votre hébergeur ou consulter la documentation appropriée sur l’installation de PHP pour plus d’assistance.',
	'PHP_REGISTER_GLOBALS'			=> 'Le réglage PHP <var>register_globals</var> est désactivé',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB fonctionnera même si ce réglage est activé, mais si possible, il est recommandé que register_globals soit désactivé de votre installation PHP pour des raisons de sécurité.',
	'PHP_SAFE_MODE'					=> 'Mode sécurisé',
	'PHP_SETTINGS'					=> 'Version de PHP et réglages',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Obligatoire</strong> - Vous devez utiliser au moins la version 4.3.3 de PHP afin d’installer phpBB. Si le <var>mode sécurisé</var> est affiché au-dessous, votre installation PHP fonctionne dans ce mode. Cela imposera des limitations de l’administration à distance et de fonctionnalités similaires.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'Le réglage PHP <var>allow_url_fopen</var> est activé',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Optionnel</strong> - Ce réglage est optionnel, cependant la fonction de phpBB permettant d’insérer des avatars à partir d’un site externe ne fonctionnera pas correctement sans cela.',
	'PHP_VERSION_REQD'				=> 'Version de PHP >= 4.3.3',
	'POST_ID'						=> 'ID du message',
	'PREFIX_FOUND'					=> 'Un balayage de vos tables a montré une installation valide avec <strong>%s</strong> comme préfixe de table.',
	'PREPROCESS_STEP'				=> 'Exécution des fonctions/requêtes de pré-traitement',
	'PRE_CONVERT_COMPLETE'			=> 'Toutes les étapes de pré-conversion ont été terminées avec succès. Vous pouvez à présent commencer le processus de conversion actuel. Veuillez noter que vous pouvez ajuster manuellement ajuster plusieurs choses. Après la conversion, vérifiez particulièrement les permissions assignées, restructurez votre index de recherche si nécessaire et assurez vous que les fichiers obtenus ont été copiés correctement, comme par exemple les avatars et les smileys.',
	'PROCESS_LAST'					=> 'Traitement des dernières étapes',

	'REFRESH_PAGE'				=> 'Rafraîchir la page pour continuer la conversion',
	'REFRESH_PAGE_EXPLAIN'		=> 'Si réglé à oui, le convertisseur va rafraîchir la page pour continuer la conversion après avoir fini une étape. S’il s’agit de votre première conversion pour effectuer des tests et déterminer des erreurs à l’avance, nous vous suggérons de régler cela sur Non.',
//	'REQUIRED'					=> 'Obligatoire',
	'REQUIREMENTS_TITLE'		=> 'Compatibilité de l’installation',
	'REQUIREMENTS_EXPLAIN'		=> 'Avant de procéder à l’installation complète, phpBB va procéder à un ensemble de vérifications de la configuration et des fichiers de votre serveur afin de s’assurer que vous pouvez installer et utiliser phpBB. Veuillez vous assurer de lire attentivement les résultats et de ne pas procéder tant que toutes les vérifications requises ne sont pas terminées. Si vous souhaitez utiliser de quelconques fonctionnalités liées à des vérifications optionnelles, vous devez vous assurer que les vérifications en cours soient terminées.',
	'RETRY_WRITE'				=> 'Réessayer d’écrire la configuration',
	'RETRY_WRITE_EXPLAIN'		=> 'Si vous le souhaitez, vous pouvez modifier les permissions de config.php pour autoriser phpBB à y écrire. Pour ce faire vous pouvez cliquer sur Réessayer ci-dessous pour recommencer. Souvenez-vous de réinitialiser les permissions sur config.php après que l’installation de phpBB soit terminée.',

	'SCRIPT_PATH'				=> 'Chemin du script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Le chemin relatif où phpBB est situé par rapport au nom de domaine, ex. <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Sélectionner une langue',
	'SERVER_CONFIG'				=> 'Configuration du serveur',
	'SEARCH_INDEX_UNCONVERTED'	=> 'L’index de recherche n’a pas été converti',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Votre ancien index de recherche n’a pas été converti. La recherche donnera toujours un résultat vide. Pour créer un nouvel index de recherche allez au Panneau de Contrôle de l’Administrateur, sélectionnez Maintenance et choisissez alors l’Index de recherche à partir du sous-menu.',
	'SOFTWARE'					=> 'Logiciel de forum',
	'SPECIFY_OPTIONS'			=> 'Spécifier les options de conversion',
	'STAGE_ADMINISTRATOR'		=> 'Informations de l’administrateur',
	'STAGE_ADVANCED'			=> 'Réglages avancés',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Les réglages de cette page sont nécessaires que s’ils sont différents par rapport aux réglages par défaut. Si vous avez un doute, procédez seulement à l’étape suivante, ces réglages pourront être modifiés plus tard dans le Panneau de Contrôle de l’Administrateur.',
	'STAGE_CONFIG_FILE'			=> 'Fichier de configuration',
	'STAGE_CREATE_TABLE'		=> 'Création des tables de la base de données',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Les tables de la base de données utilisées par phpBB 3.0 ont été crées et remplies avec quelques données initiales. Procédez à l’écran suivant pour terminer l’installation de phpBB.',
	'STAGE_DATABASE'			=> 'Réglages de la base de données',
	'STAGE_FINAL'				=> 'Étape finale',
	'STAGE_INTRO'				=> 'Introduction',
	'STAGE_IN_PROGRESS'			=> 'Conversion en cours',
	'STAGE_REQUIREMENTS'		=> 'Conditions',
	'STAGE_SETTINGS'			=> 'Réglages',
	'STARTING_CONVERT'			=> 'Démarrage du processus de conversion',
	'STEP_PERCENT_COMPLETED'	=> 'Étape <strong>%d</strong> sur <strong>%d</strong>',
	'SUB_INTRO'					=> 'Introduction',
	'SUB_LICENSE'				=> 'Licence',
	'SUB_SUPPORT'				=> 'Support',
	'SUCCESSFUL_CONNECT'		=> 'Connecté avec succès',
// TODO: Write some text on obtaining support
	'SUPPORT_BODY'				=> 'Pendant la phase de release candidate, un support complet sera offert sur les <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">forums de support phpBB 3.0.x</a>. Nous fournirons des réponses aux questions d’installation générale, aux problèmes de configuration, aux problèmes de conversions et aux problèmes courants liés aux bogues. Nous autorisons également les discussions à propos des modifications et des codes/styles personnalisés.</p><p>Pour plus d’assistance, veuillez vous rendre sur notre <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Guilde de Démarrage Rapide</a> et notre <a href="http://www.phpbb.com/support/documentation/3.0/">documentation en ligne</a>.</p><p>Pour vous assurer d’être au courant des dernières nouveautés ou des dernières versions, pourquoi ne pas <a href="http://www.phpbb.com/support/">s’abonner à notre liste de diffusion</a> ?',
	'SYNC_FORUMS'				=> 'Commencer à synchroniser les forums',
	'SYNC_POST_COUNT'			=> 'Synchronisation de post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Synchronisation de post_counts de <var>entry</var> %1$s à %2$s.',
	'SYNC_TOPICS'				=> 'Commencer à synchroniser les sujets',
	'SYNC_TOPIC_ID'				=> 'Synchronisation des sujets de <var>topic_id</var> %1$s à %2$s.',

	'TABLES_MISSING'			=> 'Impossible de trouver ces tables<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Préfixe des tables dans la base de données',
	'TABLE_PREFIX_SAME'			=> 'Le préfixe de la table doit être celui utilisé par le logiciel que vous avez converti.<br />» Le préfixe de la table spécifié était %s.',
	'TESTS_PASSED'				=> 'Vérifications réussies',
	'TESTS_FAILED'				=> 'Vérifications échouées',

	'UNABLE_WRITE_LOCK'			=> 'Impossible d’écrire sur le fichier verrouillé.',
	'UNAVAILABLE'				=> 'Indisponible',
	'UNWRITABLE'				=> 'Écriture impossible',
	'UPDATE_TOPICS_POSTED'		=> 'Création des informations des sujets publiés',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Une erreur est survenue lors de la production des informations des sujets publiés. Vous pouvez recommencer cette étape dans le PCU une fois que le processus de conversion soit terminé.',
	'VERSION'					=> 'Version',

	'WELCOME_INSTALL'			=> 'Bienvenue sur l’Installation de phpBB 3',
	'WRITABLE'					=> 'Écriture possible',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Tous les fichiers sont à jour avec la dernière version de phpBB. Vous devriez à présent vous <a href="../ucp.php?mode=login">connecter sur votre forum</a> et vérifier si tout fonctionne correctement. N’oubliez pas supprimer, renommer ou déplacer votre répertoire d’installation !',
	'ARCHIVE_FILE'				=> 'Fichier source dans l’archive',

	'BACK'				=> 'Retour',
	'BINARY_FILE'		=> 'Fichier binaire',
	'BOT'				=> 'Aspirateur/Robot',

	'CHANGE_CLEAN_NAMES'			=> 'La méthode utilisée pour être sûr qu’un nom d’utilisateur n’est pas utilisé par de multiples utilisateurs a été modifiée. Il se peut que certains utilisateurs aient le même nom à cause de cette nouvelle méthode. Avant que vous puissiez procéder, vous devez supprimer ou renommer ces utilisateurs pour être certain que chaque nom est utilisé que par un seul utilisateur.',

	'CHECK_FILES'					=> 'Vérifier les fichiers',
	'CHECK_FILES_AGAIN'				=> 'Vérifier à nouveau les fichiers',
	'CHECK_FILES_EXPLAIN'			=> 'Dans la prochaine étape, tous les fichiers seront vérifiés par rapport aux fichiers de mise à jour - cela peut prendre du temps si c’est la première vérification de fichiers.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Selon votre base de données, votre version est à jour. Vous pouvez effectuer à une vérification de fichiers pour vous assurer que tous les fichiers sont bien à jour avec la dernière version de phpBB.',
	'CHECK_UPDATE_DATABASE'			=> 'Continuer la mise à jour',
	'COLLECTED_INFORMATION'			=> 'Informations sur les fichiers collectés',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'La liste ci-dessous vous montre les informations sur les fichiers qui nécessitent une mise à jour. Veuillez lire les informations devant chaque blocs de statut pour voir de ce qu’elles signifient et ce dont vous pouvez avoir besoin pour exécuter une mise à jour correctement.',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Vous devez maintenant vous <a href="../ucp.php?mode=login">connecter à votre forum</a> et vérifier si tout fonctionne correctement. N’oubliez pas de supprimer, renommer ou déplacer votre répertoire d’installation !',
	'CONTINUE_UPDATE_NOW'			=> 'Continuer le processus de mise à jour maintenant',
	'CURRENT_FILE'					=> 'Fichier original actuel',
	'CURRENT_VERSION'				=> 'Version actuelle',

	'DATABASE_TYPE'						=> 'Type de base de données',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Le fichier de mise à jour de la base de données dans le répertoire d’installation n’est pas à jour. Veuillez vous assurer d’avoir transféré la version correcte du fichier.',
	'DELETE_USER_REMOVE'				=> 'Supprimer l’utilisateur et supprimer ses messages',
	'DELETE_USER_RETAIN'				=> 'Supprimer l’utilisateur mais conserver ses messages',
	'DESTINATION'						=> 'Destination du fichier',
	'DIFF_INLINE'						=> 'Intégré',
	'DIFF_RAW'							=> 'Modification unie brute',
	'DIFF_SEP_EXPLAIN'					=> 'Fin du fichier actuel / Début du nouveau fichier à jour',
	'DIFF_SIDE_BY_SIDE'					=> 'Côte à Côte',
	'DIFF_UNIFIED'						=> 'Modification unie',
	'DO_NOT_UPDATE'						=> 'Ne pas mettre à jour ce fichier',
	'DONE'								=> 'Fait',
	'DOWNLOAD'							=> 'Télécharger',
	'DOWNLOAD_AS'						=> 'Télécharger sous',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Télécharger une archive de fichiers modifiés',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Une fois téléchargée, vous devez décompresser l’archive. Vous y trouverez les fichiers modifiés que vous devez transférer dans votre répertoire à la racine de phpBB. Veuillez transférer les fichiers sur leurs emplacements respectifs. Veuillez transférer les fichiers sur leurs emplacements respectifs, veuillez vérifier à nouveau les fichiers avec l’autre bouton ci-dessous.',

	'ERROR'		=> 'Erreur',
	'EDIT_USERNAME'	=> 'Éditer le nom d’utilisateur',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Ce fichier est déjà à jour.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Vous n’êtes pas autorisé à modifier ce fichier.',
	'FILE_USED'						=> 'Informations utilisées de',			// Single file
	'FILES_CONFLICT'				=> 'Fichiers conflictuels',
	'FILES_CONFLICT_EXPLAIN'		=> 'Les fichiers suivants sont modifiés et ne représentent pas les fichiers originaux de l’ancienne version. phpBB a déterminé que ces fichiers créaient des conflits s’il essayait de les fusionner. Veuillez inspecter la source des conflits et essayer de les résoudre manuellement, ou continuer la mise à jour en choisissant une méthode de fusion préférable. Si vous résolvez les conflits manuellement, vérifiez à nouveau les fichiers après vos modifications. Vous pouvez aussi choisir entre une méthode de fusion pour chaque fichier. La première donnera un fichier où les lignes conflictuelles de votre ancien fichier seront perdues, l’autre ignorera les modifications apportées au nouveau fichier.',
	'FILES_MODIFIED'				=> 'Fichiers modifiés',
	'FILES_MODIFIED_EXPLAIN'		=> 'Les fichiers suivants sont modifiés et ne représentent pas les fichiers originaux de l’ancienne version. Le fichier mis à jour pourra être fusionné entre vos modifications et le nouveau fichier.',
	'FILES_NEW'						=> 'Nouveaux fichiers',
	'FILES_NEW_EXPLAIN'				=> 'Les fichiers suivants actuels n’existent pas dans votre installation.',
	'FILES_NEW_CONFLICT'			=> 'Nouveaux fichiers conflictuels',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Les fichiers suivants sont nouveaux dans le dernière version, mais il existe déjà un fichier du même nom dans le même emplacement. Ce fichier sera écrasé par le nouveau fichier.',
	'FILES_NOT_MODIFIED'			=> 'Fichier non modifiés',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Les fichiers suivants ne sont pas modifiés et représentent les fichiers originaux de phpBB de la version que vous souhaitez mettre à jour.',
	'FILES_UP_TO_DATE'				=> 'Fichiers déjà à jour',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Les fichiers suivants sont déjà à jour et ne nécessitent pas d’être mis à jour.',
	'FTP_SETTINGS'					=> 'Réglages FTP',
	'FTP_UPDATE_METHOD'				=> 'Transfert FTP',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Les fichiers de mise à jour trouvés sont incompatibles avec votre version installée. Votre version installée est la %1$s et les fichiers de mise à jour sont pour la mise à jour de phpBB %2$s vers %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Les fichiers de mise à jour sont incomplets.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'La mise à jour de la base de données a été réalisée avec succès. Vous avez besoin de continuer le processus de mise à jour à présent.',

	'KEEP_OLD_NAME'		=> 'Conserver le nom d’utilisateur',

	'LATEST_VERSION'		=> 'Dernière version',
	'LINE'					=> 'Ligne',
	'LINE_ADDED'			=> 'Ajoutée',
	'LINE_MODIFIED'			=> 'Modifiée',
	'LINE_REMOVED'			=> 'Supprimée',
	'LINE_UNMODIFIED'		=> 'Non modifiée',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Afin de mettre à jour votre installation, vous devez d’abord vous connecter.',

	'MAPPING_FILE_STRUCTURE'	=> 'Pour faciliter le transfert, vous avez ici les emplacements des fichiers qui conduisent à votre installation de phpBB.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Modification de la méthode de fusion',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Ne pas fusionner - utiliser un nouveau fichier',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Ne pas fusionner - utiliser le fichier installé actuel',
	'MERGE_MOD_FILE_OPTION'		=> 'Fusionner les différences et utiliser le code modifié dans le bloc conflictuel',
	'MERGE_NEW_FILE_OPTION'		=> 'Fusionner les différences et utiliser le code du nouveau fichier dans le bloc conflictuel',
	'MERGE_SELECT_ERROR'		=> 'Les modes du fichier fusionné conflictuel ne sont pas correctement sélectionnés.',

	'NEW_FILE'						=> 'Nouveau fichier à jour',
	'NEW_USERNAME'					=> 'Nouveau nom d’utilisateur',
	'NO_AUTH_UPDATE'				=> 'Non autorisé à mettre à jour',
	'NO_ERRORS'						=> 'Aucune erreur',
	'NO_UPDATE_FILES'				=> 'Ne pas mettre à jour les fichiers suivants',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Les fichiers suivants sont nouveaux ou modifiés, mais leur répertoire est introuvable dans votre installation. Si cette liste contient des fichiers vers d’autres répertoires que language/ ou styles/ que vous pouvez avoir à modifier, votre structure de répertoire et la mise à jour peut être incomplète.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Aucun répertoire de mise à jour valide n’a été trouvé, veuillez vous assurer de bien avoir transféré les fichiers nécessaires.<br /><br />Votre installation ne semble <strong>pas</strong> à jour. Des mises à jour sont disponibles pour votre version de phpBB %1$s, veuillez visiter <a href="http://www.phpbb.com/downloads/" rel="external">http://www.phpbb.com/downloads/</a> afin d’obtenir le pack correct pour mettre à jour votre Version %2$s vers la Version %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Votre version est à jour. Il n’est pas nécessaire d’utiliser l’outil de mise à jour. Si vous souhaitez faire une vérification intégrale de vos fichiers, assurez-vous d’avoir transféré les fichiers de mise à jour corrects.',
	'NO_UPDATE_INFO'				=> 'Les informations du fichier de mise à jour sont introuvables.',
	'NO_UPDATES_REQUIRED'			=> 'Aucune mise à jour nécessaire',
	'NO_VISIBLE_CHANGES'			=> 'Aucune modification visible',
	'NOTICE'						=> 'Avertissement',
	'NUM_CONFLICTS'					=> 'Nombre de conflits',

	'OLD_UPDATE_FILES'		=> 'Les fichiers de mise à jour ne sont pas à jour. Les fichiers trouvés pour la mise à jour sont pour phpBB %1$s vers phpBB %2$s mais la dernière version de phpBB est la %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Mise à jour de l’archive actuelle à la version',
	'PERFORM_DATABASE_UPDATE'			=> 'Exécuter la mise à jour de la base de données',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Vous trouverez ci-dessous un bouton vers le script de mise à jour de la base de données. La mise à jour de la base de données peut prendre un moment, veuillez ne pas arrêter son exécution même si elle semble bloquée. Après que la mise à jour de la base de données soit effectuée, suivez simplement les instructions pour continuer le processus de mise à jour.',
	'PREVIOUS_VERSION'					=> 'Version précédente',
	'PROGRESS'							=> 'En cours',

	'RESULT'					=> 'Résultat',
	'RUN_DATABASE_SCRIPT'		=> 'Mettre à jour ma base de données maintenant',

	'SELECT_DIFF_MODE'			=> 'Sélectionner le mode de comparaison',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Sélectionner le format de l’archive à télécharger',
	'SELECT_FTP_SETTINGS'		=> 'Sélectionner les réglages FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Afficher les différences/conflits',
	'SHOW_DIFF_FINAL'			=> 'Afficher le fichier résultant',
	'SHOW_DIFF_MODIFIED'		=> 'Afficher les différences fusionnées',
	'SHOW_DIFF_NEW'				=> 'Afficher le contenu des fichiers',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Afficher les différences',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Afficher les différences',
	'SOME_QUERIES_FAILED'		=> 'Certaines requêtes ont échouées, les instructions et les erreurs sont listées ci-dessous.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Il n’y a probablement pas lieu de s’inquiéter, la mise à jour va continuer. Si elle échoue, vous pourrez demander de l’aide sur nos forums de support. Consultez le <a href="../docs/README.html">README</a> pour plus d’information sur comment obtenir de l’assistance.',
	'STAGE_FILE_CHECK'			=> 'Vérifier les fichiers',
	'STAGE_UPDATE_DB'			=> 'Mettre à jour la base de données',
	'STAGE_UPDATE_FILES'		=> 'Mettre à jour les fichiers',
	'STAGE_VERSION_CHECK'		=> 'Vérifier la version',
	'STATUS_CONFLICT'			=> 'Fichiers modifiés qui produisent des conflits',
	'STATUS_MODIFIED'			=> 'Fichier modifié',
	'STATUS_NEW'				=> 'Nouveau fichier',
	'STATUS_NEW_CONFLICT'		=> 'Nouveau fichier conflictuel',
	'STATUS_NOT_MODIFIED'		=> 'Fichier non modifié',
	'STATUS_UP_TO_DATE'			=> 'Fichier déjà à jour',

	'UPDATE_COMPLETED'				=> 'Mise à jour terminée',
	'UPDATE_DATABASE'				=> 'Mettre à jour la base de données',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Dans la prochaine étape, la base de données sera mise à jour.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Mise à jour du schéma de la base de données',
	'UPDATE_FILES'					=> 'Mettre à jour les fichiers',
	'UPDATE_FILES_NOTICE'			=> 'Veuillez vous assurer d’avoir mis également à jour tous les fichiers de votre forum, ce fichier met uniquement à jour la base de données.',
	'UPDATE_INSTALLATION'			=> 'Mettre à jour l’installation de phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Avec cette option, il est possible de mettre à jour votre installation de phpBB vers la dernière version.<br />Pendant le processus, tous vos fichiers seront vérifiés dans leur intégralité. Vous pouvez revoir toutes les différences et les fichiers avant la mise à jour.<br /><br />Le fichier de mise à jour lui-même peut être réalisé de deux manières différentes.</p><h2>Mise à jour manuelle</h2><p>Avec cette mise à jour, vous ne téléchargez que vos réglages personnels des fichiers modifiés pour être sûr de ne pas perdre les modifications du fichier que vous avez apporté. Après avoir téléchargé ce pack, vous devez mettre à jour manuellement les fichiers à leur emplacement correct à la racine de votre répertoire phpBB. Une fois terminé, vous pouvez recommencer l’étape de vérification du fichier pour vérifier si vous avez déplacé les fichiers correctement.</p><h2>Mise à jour automatique par FTP</h2><p>Cette méthode est similaire à la première, mais sans la nécessité de télécharger les fichiers modifiés et de les transférer vous-même. Cela sera fait à votre place. Afin d’utiliser cette méthode, vous devez connaître les informations de votre connexion FTP car cela vous sera demandé. Une fois terminé, vous serez redirigé à la vérification du fichier une fois de plus pour savoir si tout a été mis à jour correctement.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Annonce de sortie</h1>

		<p>Veuillez lire <a href="%1$s" title="%1$s"><strong>l’annonce de sortie de la dernière version</strong></a> avant de continuer le processus de mise à jour, elle contient des informations intéressantes. Elle contient également plusieurs liens de téléchargements et l’historique des modifications.</p>

		<br />

		<h1>Comment mettre à jour votre installation avec le Pack de mise à jour automatique</h1>

		<p>La manière conseillée afin de mettre à jour votre installation listed here is only valid for the automatic update package. You are also able to update your installation using the methods listed within the INSTALL.html document. The steps for updating phpBB3 automatically are:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Allez sur la <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">page des téléchargements sur phpBB.com</a> et téléchargez l’archive "Automatic Update Package".<br /><br /></li>
			<li>Décompressez l’archive.<br /><br /></li>
			<li>Transférez le répertoire décompressé complet à la racine de votre répertoire phpBB (où se situe votre fichier config.php).<br /><br /></li>
		</ul>

		<p>Une fois transféré, votre forum sera hors-ligne aux utilisateurs normaux à cause du répertoire d’installation que vous venez de transférer.<br /><br />
		<strong><a href="%2$s" title="%2$s">Commencez maintenant le processus de mise à jour en pointant votre navigateur vers votre dossier d’installation</a>.</strong><br />
		<br />
		Vous serez alors guidé par le processus de mise à jour. Vous serez averti une fois que la mise à jour soit terminée.
		</p>
		',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>Mise à jour incomplète détectée</h1>

		<p>phpBB a détecté une mise à jour automatique incomplète. Veuillez vous assurer de bien avoir suivi chaque étape de l’outil de mise à jour automatique. Vous trouverez ci-dessous le lien pour recommencer à nouveau, ou vous pouvez aller directement à votre répertoire d’installation.</p>
	',
	'UPDATE_METHOD'					=> 'Méthode de mise à jour',
	'UPDATE_METHOD_EXPLAIN'			=> 'Vous pouvez maintenant choisir votre méthode de mise à jour préférée. En utilisant le transfert FTP, vous devrez saisir les informations de votre compte FTP dans un formulaire. Avec cette méthode, les fichiers seront déplacés automatiquement vers le nouveau emplacement et des sauvegardes des anciens fichiers seront créées en ajoutant .bak au nom du fichier. Si vous choisissez de télécharger les fichiers modifiés, vous pourrez les décompresser et les transférer manuellement vers l’emplacement qui leur est correct plus tard.',
	'UPDATE_REQUIRES_FILE'			=> 'L’outil de mise à jour requiert que le fichier suivant soit présent : %s',
	'UPDATE_SUCCESS'				=> 'La mise à jour a été effectuée avec succès',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Tous les fichiers ont été mis à jour avec succès. La prochaine étape implique de vérifier tous les dossiers une fois de plus pour vous assurer que les fichiers ont été mis à jour correctement.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Mise à jour de la version et optimisation des tables',
	'UPDATING_DATA'					=> 'Mise à jour des données',
	'UPDATING_TO_LATEST_STABLE'		=> 'Mise à jour de la base de données vers la dernière version stable',
	'UPDATED_VERSION'				=> 'Version mise à jour',
	'UPLOAD_METHOD'					=> 'Méthode de transfert',

	'UPDATE_DB_SUCCESS'				=> 'La mise à jour de la base de données a été effectuée avec succès.',
	'USER_ACTIVE'					=> 'Utilisateur actif',
	'USER_INACTIVE'					=> 'Utilisateur inactif',

	'VERSION_CHECK'				=> 'Vérification de la version',
	'VERSION_CHECK_EXPLAIN'		=> 'Vérifie que la version de phpBB qui fonctionne actuellement est à jour.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Votre version de phpBB n’est pas à jour. Veuillez continuer le processus de mise à jour.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'Votre version de phpBB n’est pas à jour.<br />Vous trouverez ci-dessous un lien vers l’annonce de sortie de la dernière version et les instructions pour effectuer cette mise à jour.',
	'VERSION_UP_TO_DATE'		=> 'Votre installation est à jour, aucune mise à jour n’est disponible pour votre version de phpBB. Vous pouvez cependant continuer et exécuter la vérification de vos fichiers.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Votre installation est à jour, aucune mise à jour n’est disponible pour votre version de phpBB. Vous n’avez pas besoin de mettre à jour votre installation.',
	'VIEWING_FILE_CONTENTS'		=> 'Consultation du contenu des fichiers',
	'VIEWING_FILE_DIFF'			=> 'Consultation des différences des fichiers',

	'WRONG_INFO_FILE_FORMAT'	=> 'Mauvais format du fichier d’information',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Merci, l’Administrateur.',
	'CONFIG_SITE_DESC'				=> 'Un_petit_texte_pour_décrire_votre_forum',
	'CONFIG_SITENAME'				=> 'votredomaine.com',

	'DEFAULT_INSTALL_POST'			=> 'Ceci est un exemple de message de votre installation phpBB3. Vous pouvez supprimer ce message, ce sujet et même ce forum si vous le souhaitez, puisque tout semble fonctionner !',

	'EXT_GROUP_ARCHIVES'			=> 'Archives',
	'EXT_GROUP_DOCUMENTS'			=> 'Documents',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Fichiers téléchargeables',
	'EXT_GROUP_FLASH_FILES'			=> 'Fichiers Flash',
	'EXT_GROUP_IMAGES'				=> 'Images',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Texte brut',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FORUMS_FIRST_CATEGORY'			=> 'Ma première catégorie',
	'FORUMS_TEST_FORUM_DESC'		=> 'Ceci n’est qu’un forum de test.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Forum de Test 1',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrateur',
	'REPORT_WAREZ'					=> 'Le message rapporté contient des liens vers des ressources illégales ou des logiciels piratés.',
	'REPORT_SPAM'					=> 'Le message rapporté ne contient que de la publicité visant à promouvoir un site Internet ou un produit divers.',
	'REPORT_OFF_TOPIC'				=> 'Le message rapporté est hors-sujet.',
	'REPORT_OTHER'					=> 'Le message rapporté n’entre dans aucune autre catégorie, veuillez utiliser le champ d’information supplémentaire.',

	'SMILIES_ARROW'					=> 'Flèche',
	'SMILIES_CONFUSED'				=> 'Confus',
	'SMILIES_COOL'					=> 'Relaxé',
	'SMILIES_CRYING'				=> 'Pleure ou très triste',
	'SMILIES_EMARRASSED'			=> 'Gêné',
	'SMILIES_EVIL'					=> 'Démoniaque ou très en colère',
	'SMILIES_EXCLAMATION'			=> 'Exclamation',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idée',
	'SMILIES_LAUGHING'				=> 'Rigole',
	'SMILIES_MAD'					=> 'En colère',
	'SMILIES_MR_GREEN'				=> 'Mr. Vert',
	'SMILIES_NEUTRAL'				=> 'Neutre',
	'SMILIES_QUESTION'				=> 'Question',
	'SMILIES_RAZZ'					=> 'Tire la langue',
	'SMILIES_ROLLING_EYES'			=> 'Tourne les yeux',
	'SMILIES_SAD'					=> 'Triste',
	'SMILIES_SHOCKED'				=> 'Choqué',
	'SMILIES_SMILE'					=> 'Sourit',
	'SMILIES_SURPRISED'				=> 'Surprit',
	'SMILIES_TWISTED_EVIL'			=> 'Démoniaque et maléfique',
	'SMILIES_UBER_GEEK'				=> 'Geek confirmé',
	'SMILIES_VERY_HAPPY'			=> 'Très heureux',
	'SMILIES_WINK'					=> 'Clin d’œil',

	'TOPICS_TOPIC_TITLE'			=> 'Bienvenue sur phpBB3',
));

?>
