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
* acp_ban [French]
*
* @package language
* @version $Id: ban.php,v 1.18 2007/05/17 14:58:40 acydburn Exp $
* @translation $Id: ban.php,v 0.18 2007/07/09 03:22:47 xaphos Exp $
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 heure',
	'30_MINS'		=> '30 minutes',
	'6_HOURS'		=> '6 heures',

	'ACP_BAN_EXPLAIN'	=> 'Ici, vous pouvez contrôler le bannissement d’utilisateurs par nom, IP ou adresse e-mail. Ces méthodes empêchent un utilisateur d’atteindre n’importe quelle partie du forum. Vous pouvez donner si vous le souhaitez une courte raison (3000 caractères maximum) pour le bannissement. Cela sera affichée dans l’historique de l’administration. La durée du bannissement peut également être spécifiée. Si vous voulez que le bannissement termine à une date spécifique plutôt qu’après une période de temps, sélectionnez <span style="text-decoration: underline;">Jusqu’à -&gt;</span> pour la durée du bannissement et entrez une date dans le format <kbd>AAAA-MM-JJ</kbd>.',

	'BAN_EXCLUDE'			=> 'Exclure du bannissement',
	'BAN_LENGTH'			=> 'Durée du bannissement',
	'BAN_REASON'			=> 'Raison du bannissement',
	'BAN_GIVE_REASON'		=> 'Raison indiquée à l’utilisateur banni',
	'BAN_UPDATE_SUCCESSFUL'	=> 'La liste des bannissements a été mise à jour avec succès.',

	'EMAIL_BAN'					=> 'Bannir une ou plusieurs adresses e-mail',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Activez ceci pour exclure l’adresse e-mail entrée de tous les bannissements actuels.',
	'EMAIL_BAN_EXPLAIN'			=> 'Pour spécifier plus d’une adresse e-mail, entrez chacune d’elles sur une nouvelle ligne. Pour utiliser des adresses partielles, utilisez “*” comme joker, ex. <samp>*@hotmail.com</samp>, <samp>*@*.domaine.tld</samp>, etc.',
	'EMAIL_NO_BANNED'			=> 'Aucune adresse e-mail bannie',
	'EMAIL_UNBAN'				=> 'Supprimer le bannissement ou ne plus exclure d’e-mail du bannissement',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Vous pouvez supprimer un bannissement (ou ne plus exclure) plusieurs adresses e-mail en une fois en utilisant la combinaison appropriée de la souris et du clavier de votre ordinateur et navigateur. Les adresses e-mail exclues sont grisées.',

	'IP_BAN'					=> 'Bannir une ou plusieurs IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Activez ceci pour exclure l’IP entrée de tous les bannissements actuels.',
	'IP_BAN_EXPLAIN'			=> 'Pour spécifier plusieurs IP ou noms d’hôtes différents, entrez chacun d’eux sur une nouvelle ligne. Pour spécifier une rangée d’adresses IP, séparez le début et la fin par un tiret (-), pour spécifier un joker utilisez “*”.',
	'IP_HOSTNAME'				=> 'Adresses IP ou noms d’hôtes',
	'IP_NO_BANNED'				=> 'Aucune adresse IP bannie',
	'IP_UNBAN'					=> 'Supprimer le bannissement ou ne plus exclure l’IP du bannissement',
	'IP_UNBAN_EXPLAIN'			=> 'Vous pouvez supprimer le bannissement (ou ne plus exclure) plusieurs adresses IP en une fois en utilisant la combinaison appropriée de la souris et du clavier de votre ordinateur et navigateur. Les adresses IP exclues sont grisées.',

	'LENGTH_BAN_INVALID'		=> 'La date doit être formatée en <kbd>AAAA-MM-JJ</kbd>',

	'PERMANENT'		=> 'Permanent',
	
	'UNTIL'						=> 'Jusqu’à',
	'USER_BAN'					=> 'Bannir un ou plusieurs noms d’utilisateurs',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Activez ceci pour exclure les utilisateurs entrés de tous les bannissements actuels.',
	'USER_BAN_EXPLAIN'			=> 'Vous pouvez bannir plusieurs utilisateurs en une fois en entrant chaque nom sur une nouvelle ligne. Utilisez la fonction <span style="text-decoration: underline;">Trouver un membre</span> pour rechercher et ajouter un ou plusieurs utilisateurs automatiquement.',
	'USER_NO_BANNED'			=> 'Aucun nom d’utilisateur banni',
	'USER_UNBAN'				=> 'Supprimer le bannissement ou ne plus exclure des noms d’utilisateurs du bannissement',
	'USER_UNBAN_EXPLAIN'		=> 'Vous pouvez supprimer le bannissement (ou ne plus exclure) plusieurs utilisateurs en une fois en utilisant la combinaison appropriée de la souris et du clavier de votre ordinateur et navigateur. Les utilisateurs exclus sont grisés.',


));

?>
