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
* acp_bots [French]
*
* @package language
* @version $Id: bots.php,v 1.11 2007/07/09 11:00:14 kellanved Exp $
* @translation $Id: bots.php,v 0.11 2007/07/27 21:00:44 xaphos Exp $
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Gestion des robots',
	'BOTS_EXPLAIN'		=> 'Les “robots” ou les “aspirateurs” sont des agents automatisés qui sont le plus souvent utilisés par les moteurs de recherches pour mettre à jour leurs bases de données. Puisqu’ils font rarement une utilisation appropriée des sessions, ils peuvent fausser le compteur de visites, augmenter la charge du serveur et parfois ne pas indexer correctement les sites. Ici, vous pouvez définir un type spécial d’utilisateur afin de résoudre ces problèmes.',
	'BOT_ACTIVATE'		=> 'Activer',
	'BOT_ACTIVE'		=> 'Robot actif',
	'BOT_ADD'			=> 'Ajouter un robot',
	'BOT_ADDED'			=> 'Le nouveau robot a été ajouté avec succès.',
	'BOT_AGENT'			=> 'Agent correspondant',
	'BOT_AGENT_EXPLAIN'	=> 'Une chaîne correspondant à l’agent du robot, les correspondances partielles sont autorisées.',
	'BOT_DEACTIVATE'	=> 'Désactiver',
	'BOT_DELETED'		=> 'Le robot a été supprimé avec succès.',
	'BOT_EDIT'			=> 'Éditer les robots',
	'BOT_EDIT_EXPLAIN'	=> 'Ici, vous pouvez ajouter ou éditer une entrée existante d’un robot. Vous pouvez définir une chaîne correspondant à l’agent et/ou une ou plusieurs adresses IP (ou une série d’adresses) correspondantes. Faites attention lorsque vous définissez une chaîne correspondant à l’agent ou aux adresses. Vous pouvez également indiquer un style et une langue que le robot verra lorsqu’il utilisera le forum. Cela peut vous permettre de réduire la bande passante utilisée en réglant un style simple pour les robots. N’oubliez pas de régler les permissions appropriées du groupe d’utilisateurs spécial aux robots.',
	'BOT_LANG'			=> 'Langue du robot',
	'BOT_LANG_EXPLAIN'	=> 'Langue présentée au robot lors de sa navigation.',
	'BOT_LAST_VISIT'	=> 'Dernière visite',
	'BOT_IP'			=> 'Adresse IP du robot',
	'BOT_IP_EXPLAIN'	=> 'Les correspondances partielles sont autorisées, séparez les adresses par une virgule.',
	'BOT_NAME'			=> 'Nom du robot',
	'BOT_NAME_EXPLAIN'	=> 'Utilisé uniquement pour votre propre information.',
	'BOT_NAME_TAKEN'	=> 'Ce nom est déjà utilisé sur votre forum et ne peut pas être utilisé pour le robot.',
	'BOT_NEVER'			=> 'Jamais',
	'BOT_STYLE'			=> 'Style du robot',
	'BOT_STYLE_EXPLAIN'	=> 'Le style utilisé par le robot sur le forum.',
	'BOT_UPDATED'		=> 'Robot existant mis à jour avec succès.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'L’agent du robot indiqué est identique à celui que vous utilisez actuellement. Veuillez fournir un autre agent pour ce robot.',
	'ERR_BOT_NO_IP'				=> 'Les adresses IP que vous avez fourni sont invalides ou le nom d’hôte ne peut pas être résolu.',
	'ERR_BOT_NO_MATCHES'		=> 'Vous devez fournir au moins un agent ou une IP pour la correspondance de ce robot.',

	'NO_BOT'		=> 'Aucun robot trouvé avec l’ID spécifiée.',
	'NO_BOT_GROUP'	=> 'Impossible de trouver le groupe spécial du robot.',
));

?>
