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
* acp_language [French]
*
* @package language
* @version $Id: language.php,v 1.15 2007/05/10 15:31:21 acydburn Exp $
* @translation $Id: language.php,v 0.15 2007/07/09 03:22:47 xaphos Exp $
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
	'ACP_FILES'						=> 'Administrer les fichiers de langues',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Ici, vous pouvez installer et supprimer des packs de langues.',

	'EMAIL_FILES'			=> 'Modèles d’e-mail',

	'FILE_CONTENTS'				=> 'Contenu du fichier',
	'FILE_FROM_STORAGE'			=> 'Fichier du dossier de stockage',

	'HELP_FILES'				=> 'Fichiers d’aides',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Packs de langues installés',
	'INVALID_LANGUAGE_PACK'		=> 'Le pack de langue sélectionné semble être invalide. Veuillez vérifier le pack de langue et le transférer à nouveau si nécessaire.',
	'INVALID_UPLOAD_METHOD'		=> 'La méthode de transfert sélectionnée est invalide, veuillez sélectionner une méthode différente.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Informations de la langue mises à jour avec succès.',
	'LANGUAGE_ENTRIES'					=> 'Clés de langue',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Ici, vous pouvez modifier les clés de langues existantes ou non traduites.<br /><strong>Note :</strong> Une fois que vous avez modifié le fichier de langue, les modifications seront enregistrées dans un dossier séparé pour que vous puissiez le télécharger. Les changements ne seront pas visibles aux utilisateurs jusqu’à ce que vous remplaciez les fichiers de langues originaux sur votre espace Internet (en les transférant).',
	'LANGUAGE_FILES'					=> 'Fichiers de langue',
	'LANGUAGE_KEY'						=> 'Clé de langue',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Ce pack de langue est déjà installé.',
	'LANGUAGE_PACK_DELETED'				=> 'Le pack de langue <strong>%s</strong> a été supprimé avec succès. Tous les utilisateurs utilisant cette langue utilisent à présent la langue par défaut du forum.',
	'LANGUAGE_PACK_DETAILS'				=> 'Informations du pack de langue',
	'LANGUAGE_PACK_INSTALLED'			=> 'Le pack de langue <strong>%s</strong> a été installé avec succès.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Nom local',
	'LANGUAGE_PACK_NAME'				=> 'Nom',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Le pack de langue sélectionné n’existe pas.',
	'LANGUAGE_PACK_USED_BY'				=> 'Utilisé par (en incluant les robots)',
	'LANGUAGE_VARIABLE'					=> 'Variable de langue',
	'LANG_AUTHOR'						=> 'Auteur du pack de langue',
	'LANG_ENGLISH_NAME'					=> 'Nom en anglais',
	'LANG_ISO_CODE'						=> 'Code ISO',
	'LANG_LOCAL_NAME'					=> 'Nom local',

	'MISSING_LANGUAGE_FILE'		=> 'Fichier de langue manquant : <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Variables de langues manquantes',
	'MODS_FILES'				=> 'Fichiers de langues de MODs',

	'NO_FILE_SELECTED'				=> 'Vous n’avez pas spécifié de fichier de langue.',
	'NO_LANG_ID'					=> 'Vous n’avez pas spécifié de pack de langue.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Vous ne pouvez pas supprimer le pack de langue par défaut.<br />Si vous souhaitez supprimer ce pack de langue, modifiez avant tout votre langue par défaut du forum.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Aucun pack de langue non installé',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Supprimer du dossier de stockage',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Sélectionner le format du téléchargement',
	'SUBMIT_AND_DOWNLOAD'		=> 'Envoyer et télécharger le fichier',
	'SUBMIT_AND_UPLOAD'			=> 'Envoyer et transférer le fichier',

	'THOSE_MISSING_LANG_FILES'			=> 'Les fichiers de langues suivants sont absents du dossier de langue %s',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Les variables de langues suivantes sont absentes du pack de langue <strong>%s</strong>',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Packs de langues non installés',

	'UNABLE_TO_WRITE_FILE'		=> 'Le fichier n’a pas pu être écrit sur %s.',
	'UPLOAD_COMPLETED'			=> 'Le transfert a été réalisé avec succès.',
	'UPLOAD_FAILED'				=> 'Le transfert a échoué pour des raisons inconnues. Vous devez remplacer le fichier approprié manuellement.',
	'UPLOAD_METHOD'				=> 'Méthode de transfert',
	'UPLOAD_SETTINGS'			=> 'Réglages du transfert',

	'WRONG_LANGUAGE_FILE'		=> 'Le fichier de langue sélectionné est invalide.',
));

?>
