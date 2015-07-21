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
* acp_attachments [French]
*
* @package language
* @version $Id: attachments.php,v 1.30 2007/05/17 14:58:40 acydburn Exp $
* @translation $Id: attachments.php,v 0.30 2007/07/09 03:22:47 xaphos Exp $
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Ici, vous pouvez configurer les réglages principaux pour les pièces jointes et les catégories spéciales associées.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Ici, vous pouvez ajouter, supprimer, modifier ou désactiver vos groupes d’extensions. D’autres options incluent l’attribution d’une catégorie spéciale, la modification du mécanisme de téléchargement et la définition d’une icône de transfert qui sera affichée devant la pièce jointe qui appartient au groupe.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Ici, vous pouvez gérer les extensions autorisées. Pour activer vos extensions, veuillez vous référer au panneau de gestion de l’extension des groupes. Nous recommandons vivement de ne pas autoriser les extensions de scripts (tel que <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, et ainsi de suite…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Ici, vous pouvez voir les fichiers orphelins. Cela se produit la plupart du temps quand les utilisateurs insèrent des fichiers mais n’envoient pas le message. Vous pouvez supprimer les fichiers ou les insérer à des messages existants. L’insertion aux messages requiert une ID du message valide, vous avez à déterminer cette ID de vous-même. Cela assignera la pièce jointe déjà transférée au message que vous entrez.',
	'ADD_EXTENSION'						=> 'Ajouter une extension',
	'ADD_EXTENSION_GROUP'				=> 'Ajouter un groupe d’extensions',
	'ADMIN_UPLOAD_ERROR'				=> 'Erreurs en essayant d’insérer le fichier : %s.',
	'ALLOWED_FORUMS'					=> 'Forums autorisés',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Autorise la publication des extensions assignées sur les forums sélectionnés (ou tous si sélectionnés).',
	'ALLOWED_IN_PM_POST'				=> 'Autorisé',
	'ALLOW_ATTACHMENTS'					=> 'Autoriser les pièces jointes',
	'ALLOW_ALL_FORUMS'					=> 'Autoriser tous les forums',
	'ALLOW_IN_PM'						=> 'Autorisé dans la messagerie privée',
	'ALLOW_PM_ATTACHMENTS'				=> 'Autoriser les pièces jointes dans les messages privés',
	'ALLOW_SELECTED_FORUMS'				=> 'Seulement dans les forums sélectionnés ci-dessous',
	'ASSIGNED_EXTENSIONS'				=> 'Extensions assignées',
	'ASSIGNED_GROUP'					=> 'Groupe d’extensions assigné',
	'ATTACH_EXTENSIONS_URL'				=> 'Extensions',
	'ATTACH_EXT_GROUPS_URL'				=> 'Groupes d’extensions',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Taille maximale du fichier',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Taille maximale du fichier de chaque fichier, avec 0 étant illimitée.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Taille maximale de la messagerie',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Espace disque maximum disponible par utilisateur pour les pièces jointes dans les messages privés, avec 0 étant illimité.',
	'ATTACH_ORPHAN_URL'					=> 'Pièces jointes orphelines',
	'ATTACH_POST_ID'					=> 'ID du message',
	'ATTACH_QUOTA'						=> 'Total du quota des pièces jointes',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Espace disque maximum disponible pour les pièces jointes pour le forum entier, avec 0 étant illimité.',
	'ATTACH_TO_POST'					=> 'Insérer un fichier au message',

	'CAT_FLASH_FILES'			=> 'Fichiers Flash',
	'CAT_IMAGES'				=> 'Images',
	'CAT_QUICKTIME_FILES'		=> 'Fichiers Quicktime',
	'CAT_RM_FILES'				=> 'Fichiers RealMedia',
	'CAT_WM_FILES'				=> 'Fichiers Windows Media',
	'CREATE_GROUP'				=> 'Créer un nouveau groupe',
	'CREATE_THUMBNAIL'			=> 'Créer une miniature',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Créer une miniature dans toutes les situations possibles.',

	'DEFINE_ALLOWED_IPS'			=> 'Définir les IP/noms d’hôtes autorisés',
	'DEFINE_DISALLOWED_IPS'			=> 'Définir les IP/noms d’hôtes non autorisés',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Pour spécifier plusieurs IP ou noms d’hôtes, entrez chacun sur une nouvelle ligne. Pour spécifier une rangée d’adresses IP, séparez la première et la dernière par un tiret (-), pour spécifier un joker utilisez “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Vous pouvez supprimer (ou ne plus exclure) de multiples adresses IP en une seule fois en utilisant la combinaison de touches appropriée de la souris et du clavier de votre ordinateur et navigateur. Les IP exclues ont un fond bleu.',
	'DISPLAY_INLINED'				=> 'Afficher les images intégrées',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Si réglé sur Non, les pièces jointes d’images s’afficheront comme un lien.',
	'DISPLAY_ORDER'					=> 'Ordre d’affichage des pièces jointes',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Afficher les pièces jointes classées par date.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Éditer le groupe d’extensions',
	'EXCLUDE_ENTERED_IP'			=> 'Activez ceci pour exclure l’IP/nom d’hôte entré.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Exclure une IP des IP/noms d’hôtes autorisés',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Exclure une IP des IP/noms d’hôtes interdits',
	'EXTENSIONS_UPDATED'			=> 'Extensions mises à jour avec succès.',
	'EXTENSION_EXIST'				=> 'L’extension %s existe déjà.',
	'EXTENSION_GROUP'				=> 'Groupe d’extensions',
	'EXTENSION_GROUPS'				=> 'Groupes d’extensions',
	'EXTENSION_GROUP_DELETED'		=> 'Groupe d’extensions supprimé avec succès.',
	'EXTENSION_GROUP_EXIST'			=> 'Le groupe d’extensions %s existe déjà.',

	'GO_TO_EXTENSIONS'		=> 'Aller à l’écran de gestion des extensions',
	'GROUP_NAME'			=> 'Nom du groupe',

	'IMAGE_LINK_SIZE'			=> 'Dimensions du lien de l’image',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Afficher la pièce jointe de l’image comme lien texte intégré si l’image est plus grande que cela. Pour désactiver ce comportement, réglez les valeurs sur 0px par 0px.',
	'IMAGICK_PATH'				=> 'Chemin d’Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Le chemin complet vers l’application de conversion Imagemagick, ex. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Pièces jointes maximales par message',
	'MAX_ATTACHMENTS_PM'			=> 'Pièces jointes maximales par message privé',
	'MAX_EXTGROUP_FILESIZE'			=> 'Taille maximale des fichiers',
	'MAX_IMAGE_SIZE'				=> 'Dimensions maximales des images',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Taille maximale des pièces jointes d’images. Réglez les deux valeurs sur 0px par 0px pour désactiver la vérification de dimension.',
	'MAX_THUMB_WIDTH'				=> 'Largeur maximale de la miniature en pixel',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Une miniature générée n’excédera pas la largeur réglée ici.',
	'MIN_THUMB_FILESIZE'			=> 'Taille minimale de la miniature',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Ne pas créer une miniature pour les images plus petites que cela.',
	'MODE_INLINE'					=> 'Intégré',
	'MODE_PHYSICAL'					=> 'Physique',

	'NOT_ALLOWED_IN_PM'			=> 'Autorisé seulement dans les messages privés',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Non autorisé',
	'NOT_ASSIGNED'				=> 'Non assigné',
	'NO_EXT_GROUP'				=> 'Aucun',
	'NO_EXT_GROUP_NAME'			=> 'Aucun nom de groupe entré',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Aucun groupe d’extensions spécifié.',
	'NO_FILE_CAT'				=> 'Aucun',
	'NO_IMAGE'					=> 'Aucune image',
	'NO_THUMBNAIL_SUPPORT'		=> 'Le support des miniatures a été désactivé. Pour que cela fonctionne correctement, l’extension GD doit être disponible ou Imagemagick doit être installé. Aucun des deux n’a été trouvé.',
	'NO_UPLOAD_DIR'				=> 'Le répertoire de transfert que vous avez spécifié n’existe pas.',
	'NO_WRITE_UPLOAD'			=> 'Le répertoire de transfert que vous avez spécifié ne peut pas être écrit. Veuillez modifier les paramètres afin d’autoriser le serveur Internet à y écrire.',

	'ONLY_ALLOWED_IN_PM'	=> 'Autorisé seulement dans les messages privés',
	'ORDER_ALLOW_DENY'		=> 'Autoriser',
	'ORDER_DENY_ALLOW'		=> 'Refuser',

	'REMOVE_ALLOWED_IPS'		=> 'Supprimer ou ne plus exclure les IP/noms d’hôtes <em>autorisés</em>',
	'REMOVE_DISALLOWED_IPS'		=> 'Supprimer ou ne plus exclure les IP/noms d’hôtes <em>non autorisés</em>',

	'SEARCH_IMAGICK'				=> 'Recherche d’Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Liste d’autorisations/refus',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Modifier le comportement par défaut lorsque les téléchargements sécurisés sont autorisés de la liste d’autorisations/refus à celle d’une <strong>liste blanche</strong> (Autoriser) ou une <strong>liste noire</strong> (Refuser).',
	'SECURE_DOWNLOADS'				=> 'Activer les téléchargements sécurisés',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Avec cette option d’activée, les téléchargements sont limités aux IP/nom d’hôtes que vous définissez.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Les téléchargements sécurisés ne sont pas activés. Les réglages ci-dessous seront appliqués une fois l’activation les téléchargements sécurisés.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'La liste des IP a été mise à jour avec succès.',
	'SECURE_EMPTY_REFERRER'			=> 'Autoriser un référant vide',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Les téléchargements sécurisés sont basées sur les référants. Voulez-vous autoriser les téléchargements pour ceux qui omettent le référant ?',
	'SETTINGS_CAT_IMAGES'			=> 'Réglages de l’image de la catégorie',
	'SPECIAL_CATEGORY'				=> 'Catégorie spéciale',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Les catégories spéciales diffèrent la manière de présentation des messages.',
	'SUCCESSFULLY_UPLOADED'			=> 'Transféré avec succès.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Groupe d’extensions ajouté avec succès.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Groupe d’extensions mis à jour avec succès.',

	'UPLOADING_FILES'				=> 'Transfert de fichiers',
	'UPLOADING_FILE_TO'				=> 'Transférer le fichier “%1$s” au numéro de message %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Vous n’avez pas la permission de transférer des fichiers sur le forum “%s”.',
	'UPLOAD_DIR'					=> 'Répertoire de transfert',
	'UPLOAD_DIR_EXPLAIN'			=> 'Chemin de stockage pour les pièces jointes. Veuillez noter que si vous modifiez ce répertoire tout en ayant déjà transféré des pièces jointes, vous devez copier manuellement les fichiers à leur nouvel emplacement.',
	'UPLOAD_ICON'					=> 'Transférer une icône',
	'UPLOAD_NOT_DIR'				=> 'L’emplacement de transfert que vous avez spécifié ne semble pas être un répertoire.',
));

?>
