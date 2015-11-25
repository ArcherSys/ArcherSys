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
* viewforum [French]
*
* @package language
* @version $Id: viewforum.php,v 1.17 2007/05/10 15:31:21 acydburn Exp $
* @translation $Id: viewforum.php,v 1.17 2007/07/09 03:22:47 xaphos Exp $
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
	'ACTIVE_TOPICS'			=> 'Sujets actifs',
	'ANNOUNCEMENTS'			=> 'Annonces',

	'FORUM_PERMISSIONS'		=> 'Permissions du forum',

	'ICON_ANNOUNCEMENT'		=> 'Annonce',
	'ICON_STICKY'			=> 'Post-it',

	'LOGIN_NOTIFY_FORUM'	=> 'Vous avez été averti de la présence de nouveaux messages dans ce forum, veuillez vous connecter pour le consulter.',

	'MARK_TOPICS_READ'		=> 'Marquer les sujets comme lus',

	'NEW_POSTS_HOT'			=> 'Nouveaux messages [ Populaires ]',
	'NEW_POSTS_LOCKED'		=> 'Nouveaux messages [ Verrouillés ]',
	'NO_NEW_POSTS_HOT'		=> 'Aucun nouveau message [ Populaire ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Aucun nouveau message [ Verrouillé ]',
	'NO_READ_ACCESS'		=> 'Vous n’avez pas les permissions appropriées pour consulter les sujets de ce forum.',

	'POST_FORUM_LOCKED'		=> 'Le forum est verrouillé',

	'TOPICS_MARKED'			=> 'Les sujets de ce forum sont à présent marqués comme lus.',

	'VIEW_FORUM'			=> 'Voir le forum',
	'VIEW_FORUM_TOPIC'		=> '1 sujet',
	'VIEW_FORUM_TOPICS'		=> '%d sujets',
));

?>
