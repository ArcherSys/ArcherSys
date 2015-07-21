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
* acp_styles [French]
*
* @package language
* @version $Id: styles.php,v 1.39 2007/07/16 23:06:42 naderman Exp $
* @translation $Id: styles.php,v 0.39 2007/07/27 22:14:12 xaphos Exp $
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
	'ACP_IMAGESETS_EXPLAIN'	=> 'Les packs d’images comprennent tous les images de bouton, forum, dossier, etc. et d’autres images non spécifiques au style utilisé sur le forum. Ici, vous pouvez éditer, exporter ou supprimer les packs d’images et importer ou activer les nouveaux packs.',
	'ACP_STYLES_EXPLAIN'	=> 'Ici, vous pouvez gérer les styles disponibles sur votre forum. Un style consiste en un template, un thème et un pack d’images. Vous pouvez modifier les styles existants et supprimer, désactiver, réactiver, créer ou en importer de nouveaux. Vous pouvez également voir ce à quoi va ressembler un style en utilisant la fonction de prévisualisation. Le style actuel par défaut est noté par la présence d’un astérisque (*). Sont listés également le compteur du nombre total d’utilisateurs pour chaque style, notez que cela écrase les styles des utilisateurs qui ne sont pas ici.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Un packs de templates comprend toutes les balises utilisées pour générer l’aspect de votre forum. Ici, vous pouvez éditer les packs de templates existants, supprimer, exporter, importer et prévisualiser les packs. Vous pouvez également modifier le code des templates utilisés pour générer du BBCode.',
	'ACP_THEMES_EXPLAIN'	=> 'D’ici, vous pouvez créer, installer, éditer, supprimer et exporter des thèmes. Un thème est une combinaison de couleurs et d’images appliquées à vos templates pour définir l’aspect basique de votre forum. La gamme des options disponibles dépend de la configuration de votre serveur et de l’installation de phpBB, consultez le manuel pour plus d’informations. Veuillez noter qu’en créant de nouveaux thèmes, l’utilisation d’un thème existant comme basique est optionnelle.',
	'ADD_IMAGESET'			=> 'Créer un pack d’images',
	'ADD_IMAGESET_EXPLAIN'	=> 'Ici, vous pouvez créer un nouveau pack d’images. Selon la configuration de votre serveur et les permissions des fichiers, vous pourrez avoir des options additionnelles ici. Par exemple, vous pouvez baser ce pack d’images sur un existant. Vous pouvez également envoyer ou importer (depuis le répertoire de stockage) une archive de pack d’images. Si vous envoyez ou importez une archive, le nom du pack d’images peut être repris par le nom de l’archive (pour faire cela, laissez le nom du pack d’images vide).',
	'ADD_STYLE'				=> 'Créer un style',
	'ADD_STYLE_EXPLAIN'		=> 'Ici, vous pouvez créer un nouveau style. Selon la configuration de votre serveur et les permissions des fichiers, vous pourrez avoir des options additionnelles ici. Par exemple, vous pouvez baser ce style sur un existant. Vous pouvez également envoyer ou importer (depuis le répertoire de stockage) une archive de style. Si vous envoyez ou importez une archive de style, le nom sera déterminé automatiquement.',
	'ADD_TEMPLATE'			=> 'Créer un template',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Ici, vous pouvez ajouter un nouveau template. Selon la configuration de votre serveur et les permissions des fichiers, vous pourrez avoir des options additionnelles ici. Par exemple, vous pouvez baser ce template sur un existant. Vous pouvez également envoyer ou importer (depuis le répertoire de stockage) une archive de template. Si vous envoyez ou importez une archive, le nom du template peut être repris par le nom de l’archive (pour faire cela, laissez le nom du template vide).',
	'ADD_THEME'				=> 'Créer un thème',
	'ADD_THEME_EXPLAIN'		=> 'Ici, vous pouvez ajouter un nouveau thème. Selon la configuration de votre serveur et les permissions des fichiers, vous pourrez avoir des options additionnelles ici. Par exemple, vous pouvez baser ce thème sur un existant. Vous pouvez également envoyer ou importer (depuis le répertoire de stockage) une archive de thème. Si vous envoyez ou importez une archive, le nom du thème peut être repris par le nom de l’archive (pour faire cela, laissez le nom du thème vide).',
	'ARCHIVE_FORMAT'		=> 'Format de l’archive',
	'AUTOMATIC_EXPLAIN'		=> 'Laissez vide pour tenter une détection automatique.',

	'BACKGROUND'			=> 'Fond',
	'BACKGROUND_COLOUR'		=> 'Couleur de fond',
	'BACKGROUND_IMAGE'		=> 'Image de fond',
	'BACKGROUND_REPEAT'		=> 'Répétition du fond',
	'BOLD'					=> 'Gras',

	'CACHE'							=> 'Cache',
	'CACHE_CACHED'					=> 'Mis en cache',
	'CACHE_FILENAME'				=> 'Fichier template',
	'CACHE_FILESIZE'				=> 'Taille du fichier',
	'CACHE_MODIFIED'				=> 'Modifié',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Êtes-vous sûr de vouloir rafraîchir toutes les données des packs d’images ? Les réglages du fichier de configuration du pack d’images écraseront toutes modifications des packs d’images qui ont été extraites de l’éditeur de packs d’images.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Êtes-vous sûr de vouloir supprimer toutes les versions de vos fichiers de template mis en cache ?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Êtes-vous sûr de vouloir rafraîchir toutes les données de template dans la base de données avec le contenu des fichiers de template du système de fichiers ? Ceci écrasera toutes modifications extraites avec l’éditeur de templates dont les templates étaient stockés dans la base de données.',
	'CONFIRM_THEME_REFRESH'			=> 'Êtes-vous sûr de vouloir rafraîchir les données de thème stockées dans la base de données avec le contenu du thème du système de fichiers ? Ceci écrasera toutes modifications extraites avec l’éditeur de thèmes dont les thèmes étaient stockés dans la base de données.',
	'COPYRIGHT'						=> 'Copyright',
	'CREATE_IMAGESET'				=> 'Créer un nouveau pack d’images',
	'CREATE_STYLE'					=> 'Créer un nouveau style',
	'CREATE_TEMPLATE'				=> 'Créer un nouveau pack de templates',
	'CREATE_THEME'					=> 'Créer un nouveau thème',
	'CURRENT_IMAGE'					=> 'Image actuelle',

	'DEACTIVATE_DEFAULT'		=> 'Vous ne pouvez pas désactiver le style par défaut.',
	'DELETE_FROM_FS'			=> 'Supprimer du système de fichiers',
	'DELETE_IMAGESET'			=> 'Supprimer le pack d’images',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Ici, vous pouvez supprimer le pack d’images sélectionné de la base de données. De plus, si vous en avez la permission, vous pouvez choisir de supprimer le pack du système de fichiers. Veuillez noter qu’il n’y a pas de retour en arrière possible. Quand le pack d’images est supprimé, il l’est pour toujours. Il est recommandé d’exporter d’abord votre pack pour une possible utilisation future.',
	'DELETE_STYLE'				=> 'Supprimer le style',
	'DELETE_STYLE_EXPLAIN'		=> 'Ici, vous pouvez supprimer le style sélectionné. Vous ne pouvez pas supprimer tous les éléments de style d’ici. Ils doivent être supprimés individuellement par l’intermédiaire de leur formulaire respectif. Faites attention en effaçant des styles, il n’y a aucun moyen de revenir en arrière.',
	'DELETE_TEMPLATE'			=> 'Supprimer le pack templates',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Ici, vous pouvez supprimer le pack de templates sélectionné de la base de données. De plus, si vous en avez la permission, vous pouvez choisir de supprimer le pack du système de fichiers. Veuillez noter qu’il n’y a pas de retour en arrière possible. Quand les templates sont supprimés, ils le sont pour toujours. Il est recommandé d’exporter d’abord votre pack pour une possible utilisation future.',
	'DELETE_THEME'				=> 'Supprimer le thème',
	'DELETE_THEME_EXPLAIN'		=> 'Ici, vous pouvez supprimer le thème sélectionné de la base de données. De plus, si vous en avez la permission, vous pouvez choisir de supprimer le thème du système de fichiers. Veuillez noter qu’il n’y a pas de retour en arrière possible. Quand le thème est supprimé, il l’est pour toujours. Il est recommandé d’exporter d’abord votre thème pour une possible utilisation future.',
	'DETAILS'					=> 'Informations',
	'DIMENSIONS_EXPLAIN'		=> 'Sélectionner oui ici incluera les paramètres de largeur/hauteur.',

	'EDIT_DETAILS_IMAGESET'				=> 'Éditer les informations du pack d’images',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Ici, vous pouvez éditer certaines informations du pack d’images, comme son nom.',
	'EDIT_DETAILS_STYLE'				=> 'Éditer un style',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'En utilisant le formulaire ci-dessous, vous pouvez modifier ce style existant. Vous pouvez modifier la combinaison de template, thème et pack d’images qui définit le style lui-même. Vous pouvez également définir le style comme étant celui par défaut.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Éditer les informations du template',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Ici, vous pouvez éditer certaines informations du template comme son nom. Vous pouvez aussi avoir l’option de basculer le stockage de la feuille de style du système de fichiers à la base de données et vice et versa. Cette option dépend de votre configuration de PHP et de la possibilité pour le serveur Internet d’y modifier votre pack de templates.',
	'EDIT_DETAILS_THEME'				=> 'Éditer les informations du thème',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Ici, vous pouvez éditer les informations de certains thèmes comme leur nom. Vous pouvez aussi avoir l’option de basculer le stockage de la feuille de style du système de fichiers à la base de données et vice et versa. Cette option dépend de votre configuration de PHP et de la possibilité pour le serveur Internet d’y modifier votre pack de templates.',
	'EDIT_IMAGESET'						=> 'Éditer un pack d’images',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Ici, vous pouvez éditer les images individuelles qui définissent le pack d’images. Vous pouvez aussi spécifier les dimensions de l’image. Les dimensions sont optionnelles, les spécifier peut résoudre certains problèmes de rendu visuel avec certains navigateurs. Ne pas les spécifier permet de réduire la taille de la base de données.',
	'EDIT_TEMPLATE'						=> 'Éditer un template',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Ici vous pouvez éditer votre pack de templates directement. Souvenez-vous que ces éditions sont permanentes et ne peuvent pas être annulées une fois effectuées. Si PHP peut écrire dans vos fichiers de templates dans le répertoire de vos styles, toute modification ici sera directement écrite dans ces fichiers. Si PHP ne peut pas écrire dans ces fichiers, ils seront copiés dans la base de données et toute modification sera seulement reflétée là. Veuillez faire attention en éditant votre pack de templates, souvenez-vous de fermer tous les termes de remplacement de variable {XXXX} et rapports conditionnels.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'Le fichier de template ne pouvait pas être écrit, le pack de templates est donc maintenant stocké dans la base de données contenant le fichier modifié.',
	'EDIT_THEME'						=> 'Éditer un thème',
	'EDIT_THEME_EXPLAIN'				=> 'Ici, vous pouvez éditer le thème sélectionné, modifier les couleurs, les images, etc.',
	'EDIT_THEME_STORED_DB'				=> 'Le fichier de feuille de style ne pouvait pas être écrit, la feuille de style est donc maintenant stockée dans la base de données contenant votre modification.',
	'EDIT_THEME_STORE_PARSED'			=> 'Le thème requiert que sa feuille de style soit analysée. Ceci n’est possible que si elle est stockée dans la base de données.',
	'EXPORT'							=> 'Exporter',

	'FOREGROUND'			=> 'Premier plan',
	'FONT_COLOUR'			=> 'Couleur de la police',
	'FONT_FACE'				=> 'Police',
	'FONT_FACE_EXPLAIN'		=> 'Vous pouvez spécifier plusieurs polices séparées par des virgules. Si un utilisateur n’a pas la première police installée, la suivante sera sélectionnée.',
	'FONT_SIZE'				=> 'Taille de la police',

	'GLOBAL_IMAGES'			=> 'Globale',

	'HIDE_CSS'				=> 'Masquer le CSS brut',

	'IMAGE_WIDTH'				=> 'Largeur de l’image',
	'IMAGE_HEIGHT'				=> 'Hauteur de l’image',
	'IMAGE'						=> 'Image',
	'IMAGE_NAME'				=> 'Nom de l’image',
	'IMAGE_PARAMETER'			=> 'Paramètre',
	'IMAGE_VALUE'				=> 'Valeur',
	'IMAGESET_ADDED'			=> 'Nouveau pack d’images ajouté au système de fichiers.',
	'IMAGESET_ADDED_DB'			=> 'Nouveau pack d’images ajouté à la base de données.',
	'IMAGESET_DELETED'			=> 'Pack d’image supprimé avec succès.',
	'IMAGESET_DELETED_FS'		=> 'Le pack d’image a été supprimé de la base de données, mais quelques fichiers peuvent rester dans le système de fichiers.',
	'IMAGESET_DETAILS_UPDATED'	=> 'Informations du pack d’images mises à jour avec succès.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Veuillez sélectionner une méthode d’archivage.',
	'IMAGESET_ERR_COPY_LONG'	=> 'Le copyright ne peut pas dépasser 60 caractères.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'Le nom du pack d’images ne peut contenir que des caractères alphanumériques, -, +, _ et des espaces.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Un pack d’images avec ce nom existe déjà.',
	'IMAGESET_ERR_NAME_LONG'	=> 'Le nom du pack d’images ne peut pas dépasser 30 caractères.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'L’archive spécifiée ne contient pas de pack d’images valide.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Vous devez fournir un nom pour ce pack d’images.',
	'IMAGESET_EXPORT'			=> 'Exporter le pack d’images',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Ici, vous pouvez exporter un pack d’images sous forme d’archive. Cette archive contiendra toutes les données nécessaires pour installer le pack d’images sur un autre forum. Vous pouvez choisir entre télécharger le fichier directement, ou le placer dans votre dossier de stockage pour le télécharger plus tard ou par FTP.',
	'IMAGESET_EXPORTED'			=> 'Pack d’images exporté et stocké dans %s avec succès.',
	'IMAGESET_NAME'				=> 'Nom du pack d’images',
	'IMAGESET_REFRESHED'		=> 'Pack d’images rafraîchi avec succès.',
	'IMAGESET_UPDATED'			=> 'Pack d’images mis à jour avec succès.',
	'ITALIC'					=> 'Italique',

	'IMG_CAT_BUTTONS'		=> 'Boutons traduits',
	'IMG_CAT_CUSTOM'		=> 'Images personnalisées',
	'IMG_CAT_FOLDERS'		=> 'Icônes de sujets',
	'IMG_CAT_FORUMS'		=> 'Icônes de forums',
	'IMG_CAT_ICONS'			=> 'Icônes générales',
	'IMG_CAT_LOGOS'			=> 'Logos',
	'IMG_CAT_POLLS'			=> 'Images de sondages',
	'IMG_CAT_UI'			=> 'Éléments généraux de l’interface de l’utilisateur',
	'IMG_CAT_USER'			=> 'Images additionnelles',

	'IMG_SITE_LOGO'			=> 'Logo principal',
	'IMG_UPLOAD_BAR'		=> 'Barre de progression du transfert',
	'IMG_POLL_LEFT'			=> 'Extrémité gauche du sondage',
	'IMG_POLL_CENTER'		=> 'Centre du sondage',
	'IMG_POLL_RIGHT'		=> 'Extrémité droite du sondage',
	'IMG_ICON_FRIEND'		=> 'Ajouter comme ami',
	'IMG_ICON_FOE'			=> 'Ajouter comme ignoré',

	'IMG_FORUM_LINK'			=> 'Forum de lien',
	'IMG_FORUM_READ'			=> 'Forum',
	'IMG_FORUM_READ_LOCKED'		=> 'Forum verrouillé',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Sous-forum',
	'IMG_FORUM_UNREAD'			=> 'Nouveaux messages dans un forum',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Nouveaux messages verrouillés sans un forum',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Nouveaux messages sans un sous-forum',
	'IMG_SUBFORUM_READ'			=> 'Légende du sous-forum',
	'IMG_SUBFORUM_UNREAD'		=> 'Légende du sous-forum pour les nouveaux messages',
	
	'IMG_TOPIC_MOVED'			=> 'Sujet déplacé',

	'IMG_TOPIC_READ'				=> 'Sujet',
	'IMG_TOPIC_READ_MINE'			=> 'Sujet pointé',
	'IMG_TOPIC_READ_HOT'			=> 'Sujet populaire',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Sujet pointé populaire',
	'IMG_TOPIC_READ_LOCKED'			=> 'Sujet verrouillé',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Sujet pointé verrouillé',

	'IMG_TOPIC_UNREAD'				=> 'Sujet avec nouveaux messages',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Sujet pointé avec nouveaux messages',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Sujet populaire avec nouveaux messages',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Sujet pointé populaire avec nouveaux messages',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Sujet verrouillé avec nouveaux messages',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Sujet pointé verrouillé avec nouveaux messages',

	'IMG_STICKY_READ'				=> 'Post-it',
	'IMG_STICKY_READ_MINE'			=> 'Post-it pointé',
	'IMG_STICKY_READ_LOCKED'		=> 'Post-it verrouillé',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Post-it pointé verrouillé',
	'IMG_STICKY_UNREAD'				=> 'Post-it avec nouveaux messages',
	'IMG_STICKY_UNREAD_MINE'		=> 'Post-it pointé avec nouveaux messages',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Post-it verrouillé avec nouveaux messages',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Post-it pointé verrouillé avec nouveaux messages',

	'IMG_ANNOUNCE_READ'					=> 'Annonce',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Annonce pointée',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Annonce verrouillée',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Annonce pointé verrouillée',
	'IMG_ANNOUNCE_UNREAD'				=> 'Annonce avec nouveaux messages',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Annonce pointée avec nouveaux messages',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Annonce verrouillée avec nouveaux messages',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Annonce pointée verrouillée avec nouveaux messages',

	'IMG_GLOBAL_READ'					=> 'Annonce globale',
	'IMG_GLOBAL_READ_MINE'				=> 'Annonce globale pointée',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Annonce globale verrouillée',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Annonce globale pointée verrouillée',
	'IMG_GLOBAL_UNREAD'					=> 'Annonce globale avec nouveaux messages',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Annonce globale pointée avec nouveaux messages',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Annonce globale verrouillée avec nouveaux messages',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Annonce globale pointée verrouillée avec nouveaux messages',

	'IMG_PM_READ'		=> 'Message privé lu',
	'IMG_PM_UNREAD'		=> 'Message privé non-lu',

	'IMG_ICON_BACK_TOP'		=> 'Haut',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Envoyer un e-mail',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'Envoyer un message',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Site Internet',

	'IMG_ICON_POST_DELETE'			=> 'Supprimer un message',
	'IMG_ICON_POST_EDIT'			=> 'Editer un message',
	'IMG_ICON_POST_INFO'			=> 'Afficher les informations d’un message',
	'IMG_ICON_POST_QUOTE'			=> 'Citer un message',
	'IMG_ICON_POST_REPORT'			=> 'Rapporter un message',
	'IMG_ICON_POST_TARGET'			=> 'Mini message',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Nouveau mini message',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Pièce jointe',
	'IMG_ICON_TOPIC_LATEST'			=> 'Dernier message',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Dernier message non-lu',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Message rapporté',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Message non approuvé',

	'IMG_ICON_USER_ONLINE'		=> 'Utilisateur en ligne',
	'IMG_ICON_USER_OFFLINE'		=> 'Utilisateur hors-ligne',
	'IMG_ICON_USER_PROFILE'		=> 'Afficher le profil',
	'IMG_ICON_USER_SEARCH'		=> 'Rechercher des messages',
	'IMG_ICON_USER_WARN'		=> 'Avertir l’utilisateur',

	'IMG_BUTTON_PM_FORWARD'		=> 'Transmettre le message privé',
	'IMG_BUTTON_PM_NEW'			=> 'Nouveau message privé',
	'IMG_BUTTON_PM_REPLY'		=> 'Répondre au message privé',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Sujet verrouillé',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Nouveau sujet',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Répondre au sujet',

	'IMG_USER_ICON1'		=> 'Image 1 définie par l’utilisateur',
	'IMG_USER_ICON2'		=> 'Image 2 définie par l’utilisateur',
	'IMG_USER_ICON3'		=> 'Image 3 définie par l’utilisateur',
	'IMG_USER_ICON4'		=> 'Image 4 définie par l’utilisateur',
	'IMG_USER_ICON5'		=> 'Image 5 définie par l’utilisateur',
	'IMG_USER_ICON6'		=> 'Image 6 définie par l’utilisateur',
	'IMG_USER_ICON7'		=> 'Image 7 définie par l’utilisateur',
	'IMG_USER_ICON8'		=> 'Image 8 définie par l’utilisateur',
	'IMG_USER_ICON9'		=> 'Image 9 définie par l’utilisateur',
	'IMG_USER_ICON10'		=> 'Image 10 définie par l’utilisateur',

	'INCLUDE_DIMENSIONS'		=> 'Inclure les dimensions',
	'INCLUDE_IMAGESET'			=> 'Inclure le pack d’images',
	'INCLUDE_TEMPLATE'			=> 'Inclure le template',
	'INCLUDE_THEME'				=> 'Inclure le thème',
	'INSTALL_IMAGESET'			=> 'Installer le pack d’images',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Ici, vous pouvez installer votre pack d’images sélectionné. Vous pouvez éditer certaines informations si vous le souhaitez ou utiliser les valeurs par défaut de l’installation.',
	'INSTALL_STYLE'				=> 'Installer un style',
	'INSTALL_STYLE_EXPLAIN'		=> 'Ici, vous pouvez installer un nouveau style, et, si besoin, les éléments correspondants au style. Si vous avez déjà les éléments appropriés au style d’installés, ils ne seront pas écrasés. Quelques styles requièrent que les éléments existants soient déjà installés. Si vous essayez d’installer un style de ce genre et que vous n’avez pas les éléments requis, vous serez averti.',
	'INSTALL_TEMPLATE'			=> 'Installer un template',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Ici, vous pouvez installer un nouveau pack de templates. Selon la configuration de votre serveur, vous pouvez avoir un certain nombre d’options ici.',
	'INSTALL_THEME'				=> 'Installer un thème',
	'INSTALL_THEME_EXPLAIN'		=> 'Ici, vous pouvez installer votre thème sélectionné. Vous pouvez éditer certains informations si vous le souhaitez ou utiliser les valeurs par défaut de l’installation.',
	'INSTALLED_IMAGESET'		=> 'Packs d’images installés',
	'INSTALLED_STYLE'			=> 'Styles installés',
	'INSTALLED_TEMPLATE'		=> 'Templates installés',
	'INSTALLED_THEME'			=> 'Thèmes installé',

	'LINE_SPACING'				=> 'Ligne d’espacement',
	'LOCALISED_IMAGES'			=> 'Traduites',

	'NO_CLASS'					=> 'Classe introuvable dans la feuille de style.',
	'NO_IMAGESET'				=> 'Pack d’images introuvable dans le système de fichiers.',
	'NO_IMAGE'					=> 'Aucune image',
	'NO_IMAGE_ERROR'			=> 'Image introuvable dans le système de fichiers.',
	'NO_STYLE'					=> 'Style introuvable dans le système de fichiers.',
	'NO_TEMPLATE'				=> 'Template introuvable dans le système de fichiers.',
	'NO_THEME'					=> 'Thème introuvable dans le système de fichiers.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Aucun pack d’images désinstallé détecté.',
	'NO_UNINSTALLED_STYLE'		=> 'Aucun style désinstallé détecté.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Aucun template désinstallé détecté.',
	'NO_UNINSTALLED_THEME'		=> 'Aucun thème désinstallé détecté.',
	'NO_UNIT'					=> 'Aucun',

	'ONLY_IMAGESET'			=> 'Ceci est le seul pack d’images restant, vous ne pouvez pas l’effacer.',
	'ONLY_STYLE'			=> 'Ceci est le seul style restant, vous ne pouvez pas l’effacer.',
	'ONLY_TEMPLATE'			=> 'Ceci est le seul template restant, vous ne pouvez pas l’effacer.',
	'ONLY_THEME'			=> 'Ceci est le seul thème restant, vous ne pouvez pas l’effacer.',
	'OPTIONAL_BASIS'		=> 'Base optionnelle',

	'REFRESH'					=> 'Rafraîchir',
	'REPEAT_NO'					=> 'Aucun',
	'REPEAT_X'					=> 'Seulement horizontalement',
	'REPEAT_Y'					=> 'Seulement verticalement',
	'REPEAT_ALL'				=> 'Deux directions',
	'REPLACE_IMAGESET'			=> 'Remplacer le pack d’images par',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Ce pack d’images remplacera celui que vous supprimez dans tous les styles qui l’utilisent.',
	'REPLACE_STYLE'				=> 'Remplacer le style par',
	'REPLACE_STYLE_EXPLAIN'		=> 'Ce style remplacera celui qui a été supprimé pour les membres qui l’utilisaient.',
	'REPLACE_TEMPLATE'			=> 'Remplacer le template par',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Ce pack de templates remplacera celui que vous supprimez dans tous les styles qui l’utilisent.',
	'REPLACE_THEME'				=> 'Remplacer le thème par',
	'REPLACE_THEME_EXPLAIN'		=> 'Ce thème remplacera celui que vous supprimez dans tous les styles qui l’utilisent.',
	'REQUIRES_IMAGESET'			=> 'Ce style requiert que le pack d’images %s soit installé.',
	'REQUIRES_TEMPLATE'			=> 'Ce style requiert que le pack de templates %s soit installé.',
	'REQUIRES_THEME'			=> 'Ce style requiert que le thème %s soit installé.',

	'SELECT_IMAGE'				=> 'Sélectionner l’image',
	'SELECT_TEMPLATE'			=> 'Sélectionner le fichier de template',
	'SELECT_THEME'				=> 'Sélectionner le fichier de thème',
	'SELECTED_IMAGE'			=> 'Image sélectionnée',
	'SELECTED_IMAGESET'			=> 'Pack d’images sélectionné',
	'SELECTED_TEMPLATE'			=> 'Template sélectionné',
	'SELECTED_TEMPLATE_FILE'	=> 'Fichier de template sélectionné',
	'SELECTED_THEME'			=> 'Thème sélectionné',
	'SELECTED_THEME_FILE'		=> 'Fichier de thème sélectionné',
	'STORE_DATABASE'			=> 'Base de données',
	'STORE_FILESYSTEM'			=> 'Système de fichiers',
	'STYLE_ACTIVATE'			=> 'Activer',
	'STYLE_ACTIVE'				=> 'Actif',
	'STYLE_ADDED'				=> 'Style ajouté avec succès.',
	'STYLE_DEACTIVATE'			=> 'Désactiver',
	'STYLE_DEFAULT'				=> 'En faire le style par défaut',
	'STYLE_DELETED'				=> 'Style supprimé avec succès.',
	'STYLE_DETAILS_UPDATED'		=> 'Style édité avec succès.',
	'STYLE_ERR_ARCHIVE'			=> 'Veuillez sélectionner une méthode d’archivage.',
	'STYLE_ERR_COPY_LONG'		=> 'Le copyright ne doit pas dépasser 60 caractères.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Vous devez sélectionner au moins un élément de style.',
	'STYLE_ERR_NAME_CHARS'		=> 'Le nom du style ne peut contenir que des caractères alphanumériques, -, +, _ et des espaces.',
	'STYLE_ERR_NAME_EXIST'		=> 'Un style avec ce nom existe déjà.',
	'STYLE_ERR_NAME_LONG'		=> 'Le nom du style ne peut pas dépasser 30 caractères.',
	'STYLE_ERR_NO_IDS'			=> 'Vous devez sélectionner un template, un thème et un pack d’images pour ce style.',
	'STYLE_ERR_NOT_STYLE'		=> 'Le fichier importé ou transféré ne contient pas d’archive de style valide.',
	'STYLE_ERR_STYLE_NAME'		=> 'Vous devez entrer un nom pour ce style.',
	'STYLE_EXPORT'				=> 'Exporter un style',
	'STYLE_EXPORT_EXPLAIN'		=> 'Ici, vous pouvez exporter un style dans le formulaire d’une archive. Un style ne devra pas contenir tous les éléments, mais il doit en contenir au moins un. Par exemple, si vous créez un nouveau thème et un pack d’images pour un template fréquemment utilisé, vous pourriez simplement exporter le thème et le pack d’images et omettre le template. Vous pouvez choisir entre télécharger le dossier directement ou le placer dans votre répertoire de stockage pour le télécharger plus tard, ou par FTP.',
	'STYLE_EXPORTED'			=> 'Style exporté et stocké dans %s avec succès.',
	'STYLE_IMAGESET'			=> 'Pack d’images',
	'STYLE_NAME'				=> 'Nom du style',
	'STYLE_TEMPLATE'			=> 'Template',
	'STYLE_THEME'				=> 'Thème',
	'STYLE_USED_BY'				=> 'Utilisé par (incluant les robots)',

	'TEMPLATE_ADDED'			=> 'Pack de templates ajouté et stocké dans le système de fichiers.',
	'TEMPLATE_ADDED_DB'			=> 'Pack de templates ajouté et stocké dans la base de données.',
	'TEMPLATE_CACHE'			=> 'Cache du template',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'Par défaut, phpBB met en cache la version compilée de ses templates. Cela diminue la charge du serveur à chaque fois qu’une page est vue et cela réduit le temps de génération de la page. Ici, vous pouvez voir le statut en cache de chaque fichier et supprimer individuellement les fichiers ou le cache entier.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Cache du template vidé avec succès.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Il n’y a aucun template mis en cache.',
	'TEMPLATE_DELETED'			=> 'Pack de templates supprimé avec succès.',
	'TEMPLATE_DELETED_FS'		=> 'Le pack de templates a été supprimé de la base données, mais certains fichiers ont été conservés sur le système de fichiers.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Informations du template mises à jour avec succès.',
	'TEMPLATE_EDITOR'			=> 'Éditeur de template HTML brut',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Taille de l’éditeur de template',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Veuillez sélectionner une méthode d’archivage.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Le répertoire de cache utilisé pour stocker les versions de fichiers de templates mis en cache ne peut pas s’ouvrir.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Le copyright ne doit pas dépasser 60 caractères.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Le nom du template ne doit contenir que des caractères alphanumériques, -, +, _ et des espaces.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Un pack de templates avec ce nom existe déjà.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Le nom du template ne doit pas dépasser 30 caractères.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'L’archive que vous avez spécifié ne contient pas de pack de templates valide.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Vous devez entrer un nom pour ce template.',
	'TEMPLATE_EXPORT'			=> 'Exporter des templates',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Ici, vous pouvez exporter un pack de templates dans le formulaire d’une archive. L’archive ne devra pas contenir tous les fichiers nécessaires pour installer les templates sur un autre forum. Vous pouvez choisir entre télécharger le dossier directement ou le placer dans votre répertoire de stockage pour le télécharger plus tard, ou par FTP.',
	'TEMPLATE_EXPORTED'			=> 'Templates exportés et stockés dans %s avec succès.',
	'TEMPLATE_FILE'				=> 'Fichier template',
	'TEMPLATE_FILE_UPDATED'		=> 'Fichier template mis à jour avec succès.',
	'TEMPLATE_LOCATION'			=> 'Stocker les templates dans',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Les images sont toujours stockées dans le système de fichiers.',
	'TEMPLATE_NAME'				=> 'Nom du template',
	'TEMPLATE_REFRESHED'		=> 'Template rafraîchi avec succès.',

	'THEME_ADDED'				=> 'Nouveau thème ajouté dans le système de fichiers.',
	'THEME_ADDED_DB'			=> 'Nouveau thème ajouté dans la base de données.',
	'THEME_CLASS_ADDED'			=> 'Classe personnalisée ajoutée avec succès.',
	'THEME_DELETED'				=> 'Thème supprimé avec succès.',
	'THEME_DELETED_FS'			=> 'Thème supprimé de la base de données, mais certains fichiers ont été conservés sur le système de fichiers.',
	'THEME_DETAILS_UPDATED'		=> 'Informations du thème mises à jour avec succès.',
	'THEME_EDITOR'				=> 'Éditeur de thème',
	'THEME_EDITOR_HEIGHT'		=> 'Taille de l’éditeur de thème',
	'THEME_ERR_ARCHIVE'			=> 'Veuillez sélectionner une méthode d’archivage.',
	'THEME_ERR_CLASS_CHARS'		=> 'Seuls les caractère alphanumériques, ., :, -, _ et # sont valides dans les noms de classes.',
	'THEME_ERR_COPY_LONG'		=> 'Le copyright ne peut pas dépasser 60 caractères.',
	'THEME_ERR_NAME_CHARS'		=> 'Le nom du thème ne peut contenir que des caractères alphanumériques, -, +, _ et des espaces.',
	'THEME_ERR_NAME_EXIST'		=> 'Un thème avec ce nom existe déjà.',
	'THEME_ERR_NAME_LONG'		=> 'Le nom du thème ne peut pas dépasser 30 caractères.',
	'THEME_ERR_NOT_THEME'		=> 'L’archive que vous avez spécifié ne contient pas de thème valide.',
	'THEME_ERR_REFRESH_FS'		=> 'Ce thème est stocké sur le système de fichiers, il n’a donc pas besoin d’être rafraîchi.',
	'THEME_ERR_STYLE_NAME'		=> 'Vous devez entrer un nom pour ce thème.',
	'THEME_FILE'				=> 'Fichier thème',
	'THEME_EXPORT'				=> 'Exporter un thème',
	'THEME_EXPORT_EXPLAIN'		=> 'Ici, vous pouvez exporter un thème dans le formulaire d’une archive. Cette archive contiendra toutes les données nécessaires à installer le thème dans un autre forum. Vous pouvez choisir entre télécharger le fichier directement, ou le placer dans votre dossier de stockage pour le télécharger plus tard ou par FTP.',
	'THEME_EXPORTED'			=> 'Thème exporté et stocké dans %s avec succès.',
	'THEME_LOCATION'			=> 'Stocker la feuille de style dans',
	'THEME_LOCATION_EXPLAIN'	=> 'Les images sont toujours stockées dans le système de fichiers.',
	'THEME_NAME'				=> 'Nom du thèmes',
	'THEME_REFRESHED'			=> 'Thème rafraîchi avec succès.',
	'THEME_UPDATED'				=> 'Thème mis à jour avec succès.',

	'UNDERLINE'				=> 'Souligné',
	'UNINSTALLED_IMAGESET'	=> 'Packs d’images désinstallés',
	'UNINSTALLED_STYLE'		=> 'Styles désinstallés',
	'UNINSTALLED_TEMPLATE'	=> 'Templates désinstallés',
	'UNINSTALLED_THEME'		=> 'Thèmes désinstallés',
	'UNSET'					=> 'Non défini',

));

?>
