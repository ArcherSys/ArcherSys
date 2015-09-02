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
* acp_email [French]
*
* @package language
* @version $Id: email.php,v 1.15 2007/05/12 12:32:28 davidmj Exp $
* @translation $Id: email.php,v 0.15 2007/07/09 03:22:47 xaphos Exp $
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Ici, vous pouvez envoyer un e-mail à tous vos utilisateurs ou à tous les utilisateurs d’un groupe spécifique <strong>ayant autorisés l’envoi d’e-mail</strong>. Pour réaliser cela, un e-mail sera envoyé à l’adresse e-mail de l’administrateur fournie, avec un double à la liste de tous les destinataires. Le réglage par défaut n’inclut que 50 destinataires par e-mail : plus il y a de destinataires, plus d’e-mail seront envoyés. Si vous envoyez un e-mail à un groupe important de personnes, veuillez patienter après l’avoir envoyé et ne pas arrêter la page lors du traitement. Il est normal que l’envoi d’un e-mail de masse prenne du temps, vous serez averti lorsque le script aura terminé.',
	'ALL_USERS'						=> 'Tous les utilisateurs',

	'COMPOSE'				=> 'Composer',

	'EMAIL_SEND_ERROR'		=> 'Une ou plusieurs erreurs sont survenues lors de l’envoi de l’e-mail. Veuillez vérifier l’%sHistorique des erreurs%s afin de consulter les messages d’erreurs pour plus d’information.',
	'EMAIL_SENT'			=> 'Ce message a été envoyé.',
	'EMAIL_SENT_QUEUE'		=> 'Ce message a été placé en file d’attente.',

	'LOG_SESSION'			=> 'Historique de la session e-mail vers l’historique des erreurs critiques',

	'SEND_IMMEDIATELY'		=> 'Envoyer immédiatement',
	'SEND_TO_GROUP'			=> 'Envoyer au groupe',
	'SEND_TO_USERS'			=> 'Envoyer aux utilisateurs',
	'SEND_TO_USERS_EXPLAIN'	=> 'Les noms entrés ici écraseront n’importe quel groupe sélectionné ci-dessus. Entrez chaque nom d’utilisateur sur une nouvelle ligne.',
	
	'MAIL_HIGH_PRIORITY'	=> 'Élevée',
	'MAIL_LOW_PRIORITY'		=> 'Basse',
	'MAIL_NORMAL_PRIORITY'	=> 'Normale',
	'MAIL_PRIORITY'			=> 'Priorité de l’e-mail',
	'MASS_MESSAGE'			=> 'Votre message',
	'MASS_MESSAGE_EXPLAIN'	=> 'Veuillez noter que vous ne pouvez entrer que du texte brut. Toutes les balises seront supprimées avant l’envoi.',
	
	'NO_EMAIL_MESSAGE'		=> 'Vous devez entrer un message.',
	'NO_EMAIL_SUBJECT'		=> 'Vous devez spécifier un sujet pour votre message.',
));

?>
