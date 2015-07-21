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
* memberlist [French]
*
* @package language
* @version $Id: memberlist.php,v 1.34 2007/07/22 13:14:36 kellanved Exp $
* @translation $Id: memberlist.php,v 1.34 2007/07/27 20:18:13 xaphos Exp $
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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Forum le plus actif',
	'ACTIVE_IN_TOPIC'		=> 'Sujet le plus actif',
	'ADD_FOE'				=> 'Ajouter un ignoré',
	'ADD_FRIEND'			=> 'Ajouter un ami',
	'AFTER'					=> 'Après',

	'ALL'					=> 'Tous',

	'BEFORE'				=> 'Avant',

	'CC_EMAIL'				=> 'S’envoyer une copie de cet e-mail.',
	'CONTACT_USER'			=> 'Contacter',

	'DEST_LANG'				=> 'Langue',
	'DEST_LANG_EXPLAIN'		=> 'Sélectionnez une langue appropriée (si disponible) pour le destinataire de ce message.',

	'EMAIL_BODY_EXPLAIN'	=> 'Ce message sera envoyé en texte brut, n’y incluez pas d’HTML ou de BBCode. Une copie de ce message sera envoyée sur votre adresse e-mail.',
	'EMAIL_DISABLED'		=> 'Désolé, mais toutes les fonctionnalités relatives aux e-mail ont été désactivées.',
	'EMAIL_SENT'			=> 'L’e-mail a été envoyé.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Ce message sera envoyé en texte brut, n’y incluez pas d’HTML ou de BBCode. Veuillez noter que le contenu du sujet est déjà inclu dans le message. Une copie de ce message sera envoyée sur votre adresse e-mail.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Vous devez fournir une adresse e-mail valide pour le destinataire.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Vous devez saisir un message pour envoyer un e-mail.',
	'EMPTY_MESSAGE_IM'		=> 'Vous devez saisir un message pour l’envoyer.',
	'EMPTY_NAME_EMAIL'		=> 'Vous devez saisir le nom du destinataire.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Vous devez spécifier un sujet pour l’e-mail.',
	'EQUAL_TO'				=> 'Égal à',

	'FIND_USERNAME_EXPLAIN'	=> 'Utilisez ce formulaire pour rechercher des membres spécifiques. Vous n’avez pas besoin de compléter tous les champs. Pour utiliser partiellement une donnée, utilisez * comme joker. Lorsque vous entrez des dates, utilisez le format <kbd>AAAA-MM-JJ</kbd>, par exemple <samp>2004-02-29</samp>. Utilisez la boîte de sélection pour sélectionner un ou plusieurs noms d’utilisateurs (plusieurs noms d’utilisateurs peuvent être acceptés selon le formulaire lui-même) et cliquez sur le bouton Sélectionner la sélection afin de retourner au formulaire précédent.',
	'FLOOD_EMAIL_LIMIT'		=> 'Vous ne pouvez pas envoyer d’autre e-mail actuellement. Veuillez réessayer ultérieurement.',

	'GROUP_LEADER'			=> 'Chef du groupe',

	'HIDE_MEMBER_SEARCH'	=> 'Masquer la recherche des membres',

	'IM_ADD_CONTACT'		=> 'Ajouter un contact',
	'IM_AIM'				=> 'Veuillez noter que vous avez besoin d’AOL Instant Messenger d’installé pour utiliser cela.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Télécharger l’application',
	'IM_ICQ'				=> 'Veuillez noter que des utilisateurs ont pu choisir de ne pas recevoir de messages instantanés non sollicités.',
	'IM_JABBER'				=> 'Veuillez noter que des utilisateurs ont pu choisir de ne pas recevoir de messages instantanés non sollicités.',
	'IM_JABBER_SUBJECT'		=> 'Ceci est un message automatique, merci ne pas y répondre ! Message de l’utilisateur %1$s le %2$s.',
	'IM_MESSAGE'			=> 'Votre message',
	'IM_MSNM'				=> 'Veuillez noter que vous avez besoin de Windows Messenger d’installé pour utiliser cela.',
	'IM_MSNM_BROWSER'		=> 'Votre navigateur ne supporte pas cela.',
	'IM_MSNM_CONNECT'		=> 'Vous n’êtes pas connecté à MSNM.\nVous devez vous connecter à MSNM pour continuer.',		
	'IM_NAME'				=> 'Votre nom',
	'IM_NO_DATA'			=> 'Il n’y a aucune information de contact appropriée pour cet utilisateur.',
	'IM_NO_JABBER'			=> 'Désolé, la transmission de messages instantanés d’utilisateurs Jabber n’est pas supportée sur ce serveur. Vous avez besoin du client Jabber d’installé sur votre système pour contacter le destinataire ci-dessus.',
	'IM_RECIPIENT'			=> 'Destinataire',
	'IM_SEND'				=> 'Envoyer un message',
	'IM_SEND_MESSAGE'		=> 'Envoyer un message',
	'IM_SENT_JABBER'		=> 'Votre message pour %1$s a été envoyé avec succès.',
	'IM_USER'				=> 'Envoyer un message instantané',
	
	'LAST_ACTIVE'				=> 'Dernier actif',
	'LESS_THAN'					=> 'Moins que',
	'LIST_USER'					=> '1 utilisateur',
	'LIST_USERS'				=> '%d utilisateurs',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Vous devez être inscrit et connecté pour pouvoir consulter la liste de l’équipe.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Vous devez être inscrit et connecté pour pouvoir accéder à la liste des membres.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Vous devez être inscrit et connecté pour pouvoir rechercher des utilisateurs.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Vous devez être inscrit et connecté pour pouvoir consulter des profils.',

	'MORE_THAN'				=> 'Plus que',

	'NO_EMAIL'				=> 'Vous n’êtes pas autorisé à envoyer un e-mail à cet utilisateur.',
	'NO_VIEW_USERS'			=> 'Vous n’êtes pas autorisé à consulter la liste des membres ou les profils.',

	'ORDER'					=> 'Ordre',
	'OTHER'					=> 'Autre',

	'POST_IP'				=> 'Publié depuis le domaine/IP',

	'RANK'					=> 'Rang',
	'REAL_NAME'				=> 'Nom du destinataire',
	'RECIPIENT'				=> 'Destinataire',
	'REMOVE_FOE'			=> 'Retirer un ignoré',
	'REMOVE_FRIEND'			=> 'Retirer un ami',

	'SEARCH_USER_POSTS'		=> 'Rechercher les messages de l’utilisateur',
	'SELECT_MARKED'			=> 'Sélectionner la sélection',
	'SELECT_SORT_METHOD'	=> 'Sélectionner la méthode de classement',
	'SEND_AIM_MESSAGE'		=> 'Envoyer un message AIM',
	'SEND_ICQ_MESSAGE'		=> 'Envoyer un message ICQ',
	'SEND_IM'				=> 'Messagerie instantanée',
	'SEND_JABBER_MESSAGE'	=> 'Envoyer un message Jabber',
	'SEND_MESSAGE'			=> 'Message',
	'SEND_MSNM_MESSAGE'		=> 'Envoyer un message MSNM/WLM',
	'SEND_YIM_MESSAGE'		=> 'Envoyer un message YIM',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Dernier actif',
	'SORT_POST_COUNT'		=> 'Nombre de messages',

	'USERNAME_BEGINS_WITH'	=> 'Noms d’utilisateurs commençant par',
	'USER_ADMIN'			=> 'Administrer l’utilisateur',
	'USER_FORUM'			=> 'Statistiques de l’utilisateur',
	'USER_ONLINE'			=> 'En ligne',
	'USER_PRESENCE'			=> 'Présence sur le forum',

	'VIEWING_PROFILE'		=> 'Consultation du profil - %s',
	'VISITED'				=> 'Dernière visite',

	'WWW'					=> 'Site Internet',
));

?>
