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
* acp_database [French]
*
* @package language
* @version $Id: database.php,v 1.24 2007/08/13 12:14:06 acydburn Exp $
* @translation $Id: database.php,v 1.24 2007/08/20 01:47:38 xaphos Exp $
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Ici, vous pouvez sauvegarder toutes vos données relatives à phpBB. Vous pouvez stocker l’archive de sauvegarde dans votre répertoire <samp>store/</samp> ou la télécharger directement. Suivant la configuration de votre serveur, vous pouvez compresser le fichier dans un certain nombre de formats.',
	'ACP_RESTORE_EXPLAIN'	=> 'Ceci exécutera une restauration complète de toutes les tables de phpBB à partir d’un fichier sauvegardé. Si votre serveur le supporte, vous pouvez utiliser un fichier texte compressé en gzip ou bzip2 qui sera automatiquement décompressé. <strong>ATTENTION</strong> cela écrasera toutes les données existantes. La restauration est un processus pouvant prendre beaucoup de temps, veuillez ne pas vous déplacer ou rafraîchir la page avant que l’opération soit terminée. Les sauvegardes sont stockées dans le dossier <samp>store/</samp> et sont supposées être produites par l’outil de restauration de phpBB. Les sauvegardes qui n’ont pas été créées par ce système peuvent ne pas fonctionner.',

	'BACKUP_DELETE'		=> 'Le fichier de sauvegarde a été supprimé avec succès.',
	'BACKUP_INVALID'	=> 'Le fichier de sauvegarde sélectionné est invalide.',
	'BACKUP_OPTIONS'	=> 'Options de la sauvegarde',
	'BACKUP_SUCCESS'	=> 'Le fichier de sauvegarde a été créé avec succès.',
	'BACKUP_TYPE'		=> 'Type de la sauvegarde',

	'DATABASE'			=> 'Utilitaires de la base de données',
	'DATA_ONLY'			=> 'Données seulement',
	'DELETE_BACKUP'		=> 'Supprimer la sauvegarde',
	'DELETE_SELECTED_BACKUP'	=> 'Êtes-vous sûr de vouloir supprimer la sauvegarde sélectionnée ?',
	'DESELECT_ALL'		=> 'Tout désélectionner',
	'DOWNLOAD_BACKUP'	=> 'Télécharger la sauvegarde',

	'FILE_TYPE'			=> 'Type de fichier',
	'FULL_BACKUP'		=> 'Complète',

	'RESTORE_FAILURE'		=> 'Le fichier de sauvegarde est peut-être corrompu.',
	'RESTORE_OPTIONS'		=> 'Options de la restauration',
	'RESTORE_SUCCESS'		=> 'La base de données a été restaurée avec succès.<br /><br />Votre forum devrait être tel qu’il l’était lorsque la sauvegarde a été faite.',

	'SELECT_ALL'			=> 'Tout sélectionner',
	'SELECT_FILE'			=> 'Sélectionner un fichier',
	'START_BACKUP'			=> 'Démarrer la sauvegarde',
	'START_RESTORE'			=> 'Démarrer la restauration',
	'STORE_AND_DOWNLOAD'	=> 'Stocker et télécharger',
	'STORE_LOCAL'			=> 'Stocker le fichier en local',
	'STRUCTURE_ONLY'		=> 'Structure seulement',

	'TABLE_SELECT'		=> 'Sélection de la table',
	'TABLE_SELECT_ERROR'=> 'Vous devez sélectionner au moins une table.',
));

?>
