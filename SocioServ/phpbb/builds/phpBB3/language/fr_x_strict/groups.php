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
* groups [French]
*
* @package language
* @version $Id: groups.php,v 1.21 2007/05/10 15:31:21 acydburn Exp $
* @translation $Id: groups.php,v 1.21 2007/07/09 02:52:22 xaphos Exp $
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
	'ALREADY_DEFAULT_GROUP'		=> 'Le groupe sélectionné est déjà votre groupe par défaut.',
	'ALREADY_IN_GROUP'			=> 'Vous êtes déjà membre du groupe sélectionné.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Vous avez déjà demandé à adhérer au groupe sélectionné.',

	'CHANGED_DEFAULT_GROUP'	=> 'Le groupe par défaut a été modifié avec succès.',
	
	'GROUP_AVATAR'						=> 'Avatar du groupe', 
	'GROUP_CHANGE_DEFAULT'				=> 'Êtes-vous sûr de vouloir modifier votre groupe par défaut pour le groupe “%s” ?',
	'GROUP_CLOSED'						=> 'Fermé',
	'GROUP_DESC'						=> 'Description du groupe',
	'GROUP_HIDDEN'						=> 'Invisible',
	'GROUP_INFORMATION'					=> 'Informations sur le groupe d’utilisateurs', 
	'GROUP_IS_CLOSED'					=> 'Ceci est un groupe fermé, les nouveaux membres ne peuvent adhérer au groupe que sur invitation du chef du groupe.',
	'GROUP_IS_FREE'						=> 'Ceci est un groupe libre et ouvert, tous les nouveaux membres y sont les bienvenus et peuvent s’y joindre librement.', 
	'GROUP_IS_HIDDEN'					=> 'Ceci est un groupe invisible, seuls les membres de ce groupe peuvent y voir ses adhérents.',
	'GROUP_IS_OPEN'						=> 'Ceci est un groupe ouvert, les membres peuvent faire une demande d’adhésion.',
	'GROUP_IS_SPECIAL'					=> 'Ceci est un groupe spécial, les groupes spéciaux sont gérés par les administrateurs du forum.', 
	'GROUP_JOIN'						=> 'Adhérer au groupe',
	'GROUP_JOIN_CONFIRM'				=> 'Êtes-vous sûr de vouloir adhérer au groupe sélectionné ?',
	'GROUP_JOIN_PENDING'				=> 'Demander à adhérer au groupe',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Êtes-vous sûr de vouloir demander d’adhérer au groupe sélectionné ?',
	'GROUP_JOINED'						=> 'Vous avez adhéré au groupe sélectionné avec succès.',
	'GROUP_JOINED_PENDING'				=> 'Votre demande d’adhésion au groupe sélectionné a été réalisée avec succès. Veuillez patienter le temps que le chef du groupe approuve votre adhésion.',
	'GROUP_LIST'						=> 'Gérer les utilisateurs',
	'GROUP_MEMBERS'						=> 'Membres du groupe',
	'GROUP_NAME'						=> 'Nom du groupe',
	'GROUP_OPEN'						=> 'Ouvert',
	'GROUP_RANK'						=> 'Rang du groupe', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Retirer une adhésion au groupe',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Êtes-vous sûr de vouloir retirer votre adhésion au groupe sélectionné ?',
	'GROUP_RESIGN_PENDING'				=> 'Retirer une demande d’adhésion au groupe',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Êtes-vous sûr de vouloir retirer votre demande d’adhésion au groupe sélectionné ?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Vous avez été retiré du groupe sélectionné avec succès.',
	'GROUP_RESIGNED_PENDING'			=> 'Votre demande d’adhésion au groupe sélectionné a été retirée avec succès.',
	'GROUP_TYPE'						=> 'Type du groupe',
	'GROUP_UNDISCLOSED'					=> 'Groupe invisible',
	'FORUM_UNDISCLOSED'					=> 'Modération invisible de(s) forum(s)',

	'LOGIN_EXPLAIN_GROUP'	=> 'Vous devez vous connecter pour consulter les informations de ce groupe.',

	'NO_LEADERS'					=> 'Vous n’êtes le chef d’aucun groupe.',
	'NOT_LEADER_OF_GROUP'			=> 'L’opération demandée ne peut aboutir car vous n’êtes pas le chef du groupe sélectionné.',
	'NOT_MEMBER_OF_GROUP'			=> 'L’opération demandée ne peut aboutir car vous n’êtes pas un membre du groupe sélectionné ou votre adhésion n’a pas encore été approuvée.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Vous n’êtes pas autorisé à vous retirer de votre groupe par défaut.',
	
	'PRIMARY_GROUP'		=> 'Groupe primaire',

	'REMOVE_SELECTED'		=> 'Supprimer la sélection',

	'USER_GROUP_CHANGE'			=> 'Du groupe “%1$s” vers “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Rétrograder le chef du groupe',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Êtes-vous sûr de vouloir rétrograder le chef du groupe sélectionné ?',
	'USER_GROUP_DEMOTED'		=> 'Vous avez rétrogradé le chef du groupe avec succès.',
));

?>
