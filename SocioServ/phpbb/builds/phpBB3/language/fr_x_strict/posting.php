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
* posting [French]
*
* @package language
* @version $Id: posting.php,v 1.71 2007/07/27 15:00:10 kellanved Exp $
* @translation $Id: posting.php,v 1.71 2007/07/27 20:20:39 xaphos Exp $
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
	'ADD_ATTACHMENT'			=> 'Transférer une pièce jointe',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Si vous souhaitez insérer un ou plusieurs fichiers, veuillez saisir les informations ci-dessous.',
	'ADD_FILE'					=> 'Ajouter le fichier',
	'ADD_POLL'					=> 'Création d’un sondage',
	'ADD_POLL_EXPLAIN'			=> 'Si vous ne souhaitez pas ajouter de sondage à votre sujet, laissez ces champs vides.',
	'ALREADY_DELETED'			=> 'Désolé, mais ce message a déjà été supprimé.',
	'ATTACH_QUOTA_REACHED'		=> 'Désolé, le quota des pièces jointes du forum a été atteint.',
	'ATTACH_SIG'				=> 'Insérer une signature (les signatures peuvent être modifiées via le PCU)',

	'BBCODE_A_HELP'				=> 'Transférer une pièce jointe : [attachment=]nomdufichier.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Texte en gras : [b]texte[/b]',
	'BBCODE_C_HELP'				=> 'Affichage de code : [code]code[/code]',
	'BBCODE_E_HELP'				=> 'Liste : Ajouter une liste d’objets',
	'BBCODE_F_HELP'				=> 'Taille de la police : [size=x-petit]petit texte[/size]',
	'BBCODE_IS_OFF'				=> 'Le %sBBCode%s est <em>désactivé</em>',
	'BBCODE_IS_ON'				=> 'Le %sBBCode%s est <em>activé</em>',
	'BBCODE_I_HELP'				=> 'Texte en italique : [i]texte[/i]',
	'BBCODE_L_HELP'				=> 'Liste : [list]texte[/list]',
	'BBCODE_LISTITEM_HELP'			=> 'Objet d’une liste : [*]texte[/*]',
	'BBCODE_O_HELP'				=> 'Liste ordonnée : [list=]texte[/list]',
	'BBCODE_P_HELP'				=> 'Insérer une image : [img]http://url_de_l_image[/img]',
	'BBCODE_Q_HELP'				=> 'Citer un texte : [quote]texte[/quote]',
	'BBCODE_S_HELP'				=> 'Couleur de la police : [color=red]texte[/color]  Astuce : vous pouvez également utiliser color=#FF0000',
	'BBCODE_U_HELP'				=> 'Texte en souligné : [u]texte[/u]',
	'BBCODE_W_HELP'				=> 'Insérer une URL : [url]http://url[/url] ou [url=http://url]Texte de l’URL[/url]',
	'BBCODE_D_HELP'				=> 'Flash : [flash=largeur,hauteur]http://url[/flash]',
	'BUMP_ERROR'				=> 'Vous ne pouvez pas remonter ce sujet aussitôt après la publication du dernier message.',

	'CANNOT_DELETE_REPLIED'		=> 'Désolé, mais vous ne pouvez supprimer que les messages sur lesquels il n’y a aucune réponse.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Ce message a été verrouillé. Vous ne pouvez désormais plus éditer ce message.',
	'CANNOT_EDIT_TIME'			=> 'Vous ne pouvez désormais plus éditer ou supprimer ce message.',
	'CANNOT_POST_ANNOUNCE'		=> 'Désolé, mais vous ne pouvez pas publier d’annonces.',
	'CANNOT_POST_STICKY'		=> 'Désolé, mais vous ne pouvez pas publier de post-it.',
	'CHANGE_TOPIC_TO'			=> 'Modifier le type actuel du sujet en',
	'CLOSE_TAGS'				=> 'Fermer les balises',
	'CURRENT_TOPIC'				=> 'Sujet actuel',

	'DELETE_FILE'				=> 'Supprimer le fichier',
	'DELETE_MESSAGE'			=> 'Supprimer le message',
	'DELETE_MESSAGE_CONFIRM'	=> 'Êtes-vous sûr de vouloir supprimer ce message ?',
	'DELETE_OWN_POSTS'			=> 'Désolé, mais vous ne pouvez supprimer que vos propres messages.',
	'DELETE_POST_CONFIRM'		=> 'Êtes-vous sûr de vouloir supprimer ce message ?',
	'DELETE_POST_WARN'			=> 'Une fois supprimé, le message ne pourra pas être récupéré',
	'DISABLE_BBCODE'			=> 'Désactiver le BBCode',
	'DISABLE_MAGIC_URL'			=> 'Ne pas compléter automatiquement les URL',
	'DISABLE_SMILIES'			=> 'Désactiver les smileys',
	'DISALLOWED_EXTENSION'		=> 'L’extension %s n’est pas autorisée.',
	'DRAFT_LOADED'				=> 'Le brouillon a été chargé dans la zone de rédaction, vous pouvez à présent terminer votre message si vous le souhaitez.<br />Votre brouillon sera supprimé après l’envoi de ce message.',
	'DRAFT_LOADED_PM'			=> 'Le brouillon a été chargé dans la zone de rédaction, vous pouvez à présent terminer votre message privé si vous le souhaitez.<br />Votre brouillon sera supprimé après l’envoi de ce message privé.',
	'DRAFT_SAVED'				=> 'Le brouillon a été sauvegardé avec succès.',
	'DRAFT_TITLE'				=> 'Titre du brouillon',

	'EDIT_REASON'				=> 'Raison de l’édition de ce message',
	'EMPTY_FILEUPLOAD'			=> 'Le fichier transféré est vide.',
	'EMPTY_MESSAGE'				=> 'Vous devez saisir un message lors de la rédaction.',
	'EMPTY_REMOTE_DATA'			=> 'Le fichier n’a pas pu être transféré, veuillez essayer de le transférer manuellement.',

	'FLASH_IS_OFF'				=> '[flash] est <em>désactivé</em>',
	'FLASH_IS_ON'				=> '[flash] est <em>activé</em>',
	'FLOOD_ERROR'				=> 'Vous ne pouvez pas rédiger de message aussitôt après en avoir publié un.',
	'FONT_COLOR'				=> 'Couleur de la police',
	'FONT_COLOR_HIDE'			=> 'Masquer la colorisation de la police',
	'FONT_HUGE'					=> 'Énorme',
	'FONT_LARGE'				=> 'Grande',
	'FONT_NORMAL'				=> 'Normale',
	'FONT_SIZE'					=> 'Taille de la police',
	'FONT_SMALL'				=> 'Petite',
	'FONT_TINY'					=> 'Minuscule',

	'GENERAL_UPLOAD_ERROR'		=> 'Impossible de transférer la pièce jointe sur %s.',

	'IMAGES_ARE_OFF'			=> '[img] est <em>désactivé</em>',
	'IMAGES_ARE_ON'				=> '[img] est <em>activé</em>',
	'INVALID_FILENAME'			=> '%s est un nom de fichier invalide.',

	'LOAD'						=> 'Charger',
	'LOAD_DRAFT'				=> 'Charger un brouillon',
	'LOAD_DRAFT_EXPLAIN'		=> 'Ici, vous pouvez sélectionner le brouillon que vous souhaitez continuer à rédiger. Votre message actuel sera annulé et tout son contenu sera supprimé. Vous pouvez voir, éditer et supprimer vos brouillons depuis votre Panneau de Contrôle de l’Utilisateur.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Vous devez vous connecter afin de pouvoir remonter les sujets de ce forum.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Vous devez vous connecter afin de pouvoir supprimer les sujets de ce forum.',
	'LOGIN_EXPLAIN_POST'		=> 'Vous devez vous connecter afin de pouvoir publier dans ce forum.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Vous devez vous connecter afin de pouvoir citer des messages de ce forum.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Vous devez vous connecter afin de pouvoir répondre aux sujets de ce forum.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'La taille de votre police ne doit pas dépasser %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'La taille de vos fichiers flash ne doit pas dépasser %1$d pixels de haut.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'La taille de vos fichiers flash ne doit pas dépasser %1$d pixels de large.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'La taille de vos images ne doit pas dépasser %1$d pixels de haut.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'La taille de vos images ne doit pas dépasser %1$d pixels de large.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Entrez votre message ici, il ne doit pas contenir plus de <strong>%d</strong> caractères.',
	'MESSAGE_DELETED'			=> 'Ce message a été supprimé avec succès.',
	'MORE_SMILIES'				=> 'Voir plus de smileys',

	'NOTIFY_REPLY'				=> 'M’avertir lorsqu’une réponse a été publiée',
	'NOT_UPLOADED'				=> 'Le fichier n’a pas pu être transféré.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Vous ne pouvez pas supprimer les options existantes du sondage.',
	'NO_PM_ICON'				=> 'Aucune icône MP',
	'NO_POLL_TITLE'				=> 'Vous devez saisir un titre pour le sondage.',
	'NO_POST'					=> 'Le message demandé n’existe pas.',
	'NO_POST_MODE'				=> 'Aucun mode de message n’a été spécifié.',

	'PARTIAL_UPLOAD'			=> 'Le fichier n’a été que partiellement transféré.',
	'PHP_SIZE_NA'				=> 'La taille de la pièce jointe est trop importante.<br />Impossible de déterminer la taille maximale autorisée par PHP dans php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'La taille de la pièce jointe est trop importante, la taille maximale de transfert est de %d Mo.<br />Veuillez noter que ce réglage se situe dans php.ini et ne peut pas être redéfini.',
	'PLACE_INLINE'				=> 'Mettre en ligne',
	'POLL_DELETE'				=> 'Supprimer le sondage',
	'POLL_FOR'					=> 'Sondage ouvert pendant',
	'POLL_FOR_EXPLAIN'			=> 'Entrez “0” ou laissez vide pour ne jamais terminer le sondage.',
	'POLL_MAX_OPTIONS'			=> 'Options par utilisateur',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Ceci est le nombre d’options que chaque utilisateur peut sélectionner lors du vote.',
	'POLL_OPTIONS'				=> 'Options du sondage',
	'POLL_OPTIONS_EXPLAIN'		=> 'Placez chaque option sur une nouvelle ligne. Vous pouvez saisir jusqu’à <strong>%d</strong> options.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Placez chaque option sur une nouvelle ligne. Vous pouvez saisir jusqu’à <strong>%d</strong> options. Si vous supprimez ou ajoutez des options, tous les votes précédents seront réinitialisés.',
	'POLL_QUESTION'				=> 'Question du sondage',
	'POLL_TITLE_TOO_LONG'		=> 'Le titre du sondage doit obligatoirement contenir moins de 100 caractères.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'La taille du titre de votre sondage est trop grande, sachez que le BBCode ou les smileys doivent être supprimés.',
	'POLL_VOTE_CHANGE'			=> 'Autoriser de voter à nouveau',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Si activé, les utilisateurs sont autorisés à modifier leur vote.',
	'POSTED_ATTACHMENTS'		=> 'Pièces jointes publiées',
	'POST_APPROVAL_NOTIFY'		=> 'Vous serez averti lorsque votre message aura été approuvé.',
	'POST_CONFIRMATION'			=> 'Confirmation du message',
	'POST_CONFIRM_EXPLAIN'		=> 'Afin d’empêcher les messages automatisés, vous devez saisir un code de confirmation. Le code est affiché dans l’image que vous devriez voir ci-dessous. Si vous êtes visuellement déficient ou que vous n’arrivez pas à lire ce code correctement, veuillez contacter l’%sadministrateur du forum%s.',
	'POST_DELETED'				=> 'Ce message a été supprimé avec succès.',
	'POST_EDITED'				=> 'Ce message a été édité avec succès.',
	'POST_EDITED_MOD'			=> 'Ce message a été édité avec succès, mais il doit être approuvé par un modérateur avant qu’il soit visible publiquement.',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Icône du message',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Aperçu du message',
	'POST_REVIEW_EXPLAIN'		=> 'Au moins un nouveau message a été publié à partir de ce sujet. Vous pouvez consulter votre message dans celui-ci si vous le souhaitez, il sera mis en surbrillance.',
	'POST_STORED'				=> 'Ce message a été publié avec succès.',
	'POST_STORED_MOD'			=> 'Ce message a été publié avec succès, mais il devra être approuvé par un modérateur avant qu’il soit visible par tous.',
	'POST_TOPIC_AS'				=> 'Publier le sujet en tant que',
	'PROGRESS_BAR'				=> 'Barre de progression',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Vous ne pouvez insérer que %1$d citations de chaque personne.',

	'SAVE'						=> 'Sauvegarder',
	'SAVE_DATE'					=> 'Sauvegardé le',
	'SAVE_DRAFT'				=> 'Sauvegarder le brouillon',
	'SAVE_DRAFT_CONFIRM'		=> 'Veuillez noter que les brouillons sauvegardés n’incluent que le sujet et le message, n’importe quel autre élément sera supprimé. Voulez-vous sauvegarder votre brouillon maintenant ?',
	'SMILIES'					=> 'Smileys',
	'SMILIES_ARE_OFF'			=> 'Les smileys sont <em>désactivés</em>',
	'SMILIES_ARE_ON'			=> 'Les smileys sont <em>activés</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Durée du Post-it/Annonce',
	'STICK_TOPIC_FOR'			=> 'Mettre le sujet en post-it pendant',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Entrez “0” ou laissez vide pour ne jamais terminer le Post-it/Annonce.',
	'STYLES_TIP'				=> 'Astuce : Les styles peuvent rapidement être appliqués en sélectionnant le texte.',

	'TOO_FEW_CHARS'				=> 'Votre message ne contient pas assez de caractères.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Vous devez saisir au moins deux options pour le sondage.',
	'TOO_MANY_ATTACHMENTS'		=> 'Impossible d’ajouter une nouvelle pièce jointe, %d est le maximum autorisé.',
	'TOO_MANY_CHARS'			=> 'Votre message contient trop de caractères.',
	'TOO_MANY_CHARS_POST'		=> 'Votre message contient %1$d caractères. Le nombre maximum de caractères autorisés est de %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Votre signature contient %1$d caractères. Le nombre maximum de caractères autorisés est de %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Vous avez dépassé le nombre d’options possibles pour un sondage.',
	'TOO_MANY_SMILIES'			=> 'Votre message contient trop de smileys. Le nombre maximum de smileys autorisés est de %d.',
	'TOO_MANY_URLS'				=> 'Votre message contient trop d’URL. Le nombre maximum d’URL autorisées est de %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Vous ne pouvez pas indiquer plus d’options par utilisateur que d’options qui existent pour le sondage.',
	'TOPIC_BUMPED'				=> 'Le sujet a été remonté avec succès.',

	'UNAUTHORISED_BBCODE'		=> 'Vous ne pouvez pas utiliser certains BBCode : %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Pour rétablir ce sujet global en sujet normal, vous devez sélectionner le forum dans lequel vous souhaitez voir ce sujet affiché.',
	'UPDATE_COMMENT'			=> 'Mettre à jour le commentaire',
	'URL_INVALID'				=> 'L’URL que vous avez spécifiée est invalide.',
	'URL_NOT_FOUND'				=> 'Le fichier spécifié est introuvable.',
	'URL_IS_OFF'				=> '[url] est <em>désactivé</em>',
	'URL_IS_ON'					=> '[url] est <em>activé</em>',
	'USER_CANNOT_BUMP'			=> 'Vous ne pouvez pas remonter de sujets dans ce forum.',
	'USER_CANNOT_DELETE'		=> 'Vous ne pouvez pas supprimer de messages dans ce forum.',
	'USER_CANNOT_EDIT'			=> 'Vous ne pouvez pas éditer de messages dans ce forum.',
	'USER_CANNOT_REPLY'			=> 'Vous ne pouvez pas effectuer de réponse dans ce forum.',
	'USER_CANNOT_FORUM_POST'	=> 'Vous ne pouvez pas publier dans ce forum car le type de ce forum ne le permet pas.',

	'VIEW_MESSAGE'				=> '%sVoir le message que vous avez envoyé%s',

	'WRONG_FILESIZE'			=> 'Le fichier est trop lourd, la taille maximale autorisée est de %1d %2s.',
	'WRONG_SIZE'				=> 'L’image doit être au moins de %1$d pixels de large, %2$d pixels de haut et au plus de %3$d pixels de large et %4$d pixels de haut. L’image envoyée est de %5$d pixels de large et de %6$d pixels de haut.',
));

?>
