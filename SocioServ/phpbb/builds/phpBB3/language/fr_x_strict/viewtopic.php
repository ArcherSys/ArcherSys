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
* viewtopic [French]
*
* @package language
* @version $Id: viewtopic.php,v 1.18 2007/07/22 13:14:36 kellanved Exp $
* @translation $Id: viewtopic.php,v 1.18 2007/07/27 20:36:31 xaphos Exp $
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
	'ATTACHMENT'						=> 'Pièce jointe',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'La fonctionnalité des pièces jointes a été désactivée.',

	'BOOKMARK_ADDED'		=> 'Le sujet a été ajouté aux favoris avec succès.',
	'BOOKMARK_REMOVED'		=> 'Le sujet a été supprimé des favoris avec succès.',
	'BOOKMARK_TOPIC'		=> 'Ajouter ce sujet aux favoris',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Supprimer des favoris',
	'BUMPED_BY'				=> 'Remonté la dernière fois par %1$s le %2$s.',
	'BUMP_TOPIC'			=> 'Remonter le sujet',

	'CODE'					=> 'Code',

	'DELETE_TOPIC'			=> 'Supprimer le sujet',
	'DOWNLOAD_NOTICE'		=> 'Vous n’avez pas les permissions appropriées pour consulter les fichiers insérés à ce message.',

	'EDITED_TIMES_TOTAL'	=> 'Dernière édition par %1$s le %2$s, édité %3$d fois au total.',
	'EDITED_TIME_TOTAL'		=> 'Dernière édition par %1$s le %2$s, édité %3$d fois au total.',
	'EMAIL_TOPIC'			=> 'Envoyer par e-mail à un ami',
	'ERROR_NO_ATTACHMENT'	=> 'La pièce jointe sélectionnée n’existe plus.',

	'FILE_NOT_FOUND_404'	=> 'Le fichier <strong>%s</strong> n’existe pas.',
	'FORK_TOPIC'			=> 'Copier le sujet',

	'LINKAGE_FORBIDDEN'		=> 'Vous n’êtes pas autorisé à voir, télécharger ou insérer un lien vers ce site.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Vous avez été averti de la présence de nouveaux messages dans ce sujet, veuillez vous connecter pour le consulter.',
	'LOGIN_VIEWTOPIC'		=> 'Vous devez être inscrit et connecté pour consulter ce sujet.',

	'MAKE_ANNOUNCE'				=> 'Modifier en “Annonce”',
	'MAKE_GLOBAL'				=> 'Modifier en “Annonce Globale”',
	'MAKE_NORMAL'				=> 'Modifier en “Sujet Standard”',
	'MAKE_STICKY'				=> 'Modifier en “Post-it”',
	'MAX_OPTIONS_SELECT'		=> 'Vous pouvez sélectionner jusqu’à <strong>%d</strong> options',
	'MAX_OPTION_SELECT'			=> 'Vous pouvez sélectionner <strong>1</strong> option',
	'MISSING_INLINE_ATTACHMENT'	=> 'La pièce jointe <strong>%s</strong> n’est plus disponible',
	'MOVE_TOPIC'				=> 'Déplacer le sujet',

	'NO_ATTACHMENT_SELECTED'=> 'Vous n’avez pas sélectionné de pièce jointe à télécharger ou à consulter.',
	'NO_NEWER_TOPICS'		=> 'Il n’y a aucun nouveau sujet dans ce forum.',
	'NO_OLDER_TOPICS'		=> 'Il n’y a aucun ancien sujet dans ce forum.',
	'NO_UNREAD_POSTS'		=> 'Il n’y a aucun message non-lu dans ce sujet.',
	'NO_VOTE_OPTION'		=> 'Vous devez spécifier une option lorsque vous votez.',
	'NO_VOTES'				=> 'Aucun vote',

	'POLL_ENDED_AT'			=> 'Sondage terminé le %s',
	'POLL_RUN_TILL'			=> 'Sondage effectif jusqu’au %s',
	'POLL_VOTED_OPTION'		=> 'Vous avez voté pour cette option',
	'PRINT_TOPIC'			=> 'Imprimer',

	'QUICK_MOD'				=> 'Outil de modération rapide ',
	'QUOTE'					=> 'Citer',

	'REPLY_TO_TOPIC'		=> 'Répondre au sujet',
	'RETURN_POST'			=> '%sRetourner au message%s',

	'SUBMIT_VOTE'			=> 'Envoyer le vote',

	'TOTAL_VOTES'			=> 'Votes au total',

	'UNLOCK_TOPIC'			=> 'Déverrouiller le sujet',

	'VIEW_INFO'				=> 'Informations du message',
	'VIEW_NEXT_TOPIC'		=> 'Sujet suivant',
	'VIEW_PREVIOUS_TOPIC'	=> 'Sujet précédent',
	'VIEW_RESULTS'			=> 'Voir les résultats',
	'VIEW_TOPIC_POST'		=> '1 message',
	'VIEW_TOPIC_POSTS'		=> '%d messages',
	'VIEW_UNREAD_POST'		=> 'Premier message non-lu',
	'VISIT_WEBSITE'			=> 'Site Internet',
	'VOTE_SUBMITTED'		=> 'Votre vote a été pris en compte.',

));

?>
