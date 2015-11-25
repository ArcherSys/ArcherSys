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
* ucp [French]
*
* @package language
* @version $Id: ucp.php,v 1.134 2007/08/21 15:09:52 acydburn Exp $
* @translation $Id: ucp.php,v 0.134 2007/08/27 13:26:36 xaphos Exp $
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'En accédant à “%1$s” (désigné ici par “nous”, “notre”, “nos”, “%1$s”, “%2$s”), vous acceptez d’être légalement responsable des conditions suivantes. Si vous n’acceptez pas d’être légalement responsable de toutes les conditions suivantes veuillez alors ne pas accéder et/ou utiliser “%1$s”. Nous pouvons modifier celles-ci à n’importe quel moment et nous ferons tout pour que vous en soyez informé, bien qu’il soit prudent de passer en revue régulièrement cela de vous-même car si vous continuez à utiliser “%1$s” après que les changements aient été effectués vous acceptez d’être légalement responsable des conditions après qu’elles soient mises à jour et/ou modifiées.<br />
	<br />
	Notre forum est propulsé par phpBB (désigné ici par “ils”, “eux”, “leur”, “logiciel phpBB”, “www.phpbb.com”, “Groupe phpBB”, “Équipes phpBB”) qui est un script libre de forum déclaré sous la licence “<a href="http://opensource.org/licenses/gpl-license.php">General Public License</a>” (désigné ici par “GPL”, et accessible <a href="http://www.april.org/gnu/gpl_french.html">ici</a> en traduction française non officielle) et qui peut être téléchargé depuis <a href="http://www.phpbb.com/">www.phpbb.com</a>. Le logiciel phpBB facilite seulement les discussions basées sur Internet, le Groupe phpBB n’est pas responsable de ce que nous acceptons et/ou n’acceptons pas tel que le contenu ou la conduite autorisée. Pour de plus amples informations au sujet de phpBB, merci de consulter : <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	Vous acceptez de ne pas publier de contenu abusif, obscène, vulgaire, diffamatoire, choquant, menaçant, à caractère sexuel ou autre qui peut transgresser les lois de votre pays, le pays où “%1$s” est hébergé ou la Loi Internationale. Faire cela peut vous mener à un bannissement immédiat et de manière permanente, avec une notification de votre Fournisseur d’Accès à Internet si nous jugeons que c’est nécessaire. L’adresse IP de tous les messages est enregistrée pour aider au renforcement de ces conditions. Vous acceptez que “%1$s” ait le droit de supprimer, éditer, déplacer ou verrouiller n’importe quel sujet lorsque nous estimons que cela est nécessaire. En tant qu’utilisateur vous acceptez que toutes les informations que vous avez entré soient stockées dans notre base de données. Bien que cette information ne sera pas diffusée à une tierce partie sans votre consentement, ni “%1$s” ou ni phpBB ne pourront être tenus comme responsable en cas de tentative de piratage visant à compromettre les données.
	',

	'PRIVACY_POLICY'		=> 'Cette politique explique en détail comment “%1$s” et ses sociétés affiliées (désignés ici par “nous”, “notre”, “nos”, “%1$s”, “%2$s”) et phpBB (désigné ici par “ils”, “eux”, “leur”, “logiciel phpBB”, “www.phpbb.com”, “Groupe phpBB”, “Équipes phpBB”) utilisent n’importe quelle information collectée pendant n’importe quelle session d’utilisation de votre part (désigné ici “vos informations”).<br />
	<br />
	Vos informations sont collectées de deux manières. Premièrement, en naviguant sur “%1$s” le logiciel phpBB créera un certain nombre de cookies, qui sont de petits fichiers texte qui sont téléchargés dans les fichiers temporaires du navigateur Internet de votre ordinateur. Les deux premiers cookies ne contiennent seulement qu’un identifiant utilisateur (désigné ici par “ID de l’utilisateur”) et un identifiant de session anonyme (désigné ici par “ID de la session”), qui vous sont automatiquement assignés par le logiciel phpBB. Un troisième cookie sera créé une fois que vous naviguerez sur les sujets de “%1$s” et est utilisé pour stocker les sujets que vous avez lus, ce qui de ce fait améliore votre expérience d’utilisateur.<br />
	<br />
	Nous pouvons également créer des cookies externes au logiciel phpBB tout en naviguant sur “%1$s”, bien que ceux-ci soient hors de portée du document qui est prévu pour couvrir seulement les pages créées par le logiciel phpBB. La seconde manière est de récupérer l’information que vous nous envoyez et que nous collectons. Ceci peut être et n’est pas limité à : la publication en tant qu’utilisateur anonyme (désigné ici par “messages anonymes”), l’inscription sur “%1$s” (désigné ici par “votre compte”) et les messages que vous envoyez après l’inscription et lors d’une connexion (désigné ici par “vos messages”).<br />
	<br />
	Votre compte contiendra au minimum un identifiant unique (désigné ici par “votre nom d’utilisateur”), un mot de passe personnel utilisé pour la connexion à votre compte (désigné ici par “votre mot de passe”), et une adresse e-mail personnelle valide (désignée ici par “votre e-mail”). Les informations de votre compte sur “%1$s” sont protégées par les lois de protection des données applicables dans le pays qui nous héberge. Toute information en-dehors de votre nom d’utilisateur, votre mot de passe et votre e-mail requis par “%1$s” durant le processus d’inscription reste à notre discrétion pour savoir si elle est indispensable ou optionnelle. Dans tous les cas, vous pouvez choisir quelle information de votre compte est affichée publiquement. De plus, dans votre compte, vous avez l’option pour souscrire ou non à l’envoi automatique d’e-mail par le logiciel phpBB.<br />
	<br />
	Votre mot de passe est crypté (hachage à sens unique) afin qu’il soit sécurisé. Cependant, il est recommandé de ne pas utiliser le même mot de passe sur plusieurs sites Internet différents. Votre mot de passe est le moyen d’accès de votre compte sur “%1$s”, veuillez le conservez soigneusement et en aucun cas une personne affiliée de “%1$s”, de phpBB ou une d’une tierce partie, ne peut vous demander légitimement votre mot de passe. Si vous oubliez votre mot de passe pour votre compte, vous pouvez utiliser la fonction “J’ai perdu mon mot de passe” fournie par le logiciel phpBB. Ce processus vous demandera de fournir votre nom d’utilisateur et votre e-mail, alors le logiciel phpBB générera un nouveau mot de passe pour reprendre votre compte.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Votre compte est maintenant activé. Nous vous remercions de votre inscription.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Le compte est à présent activé.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Votre compte est à présent réactivé avec succès.',
	'ACCOUNT_ADDED'					=> 'Votre compte a été crée, nous vous remercions de votre inscription. Vous pouvez à présent vous connecter avec votre nom d’utilisateur et votre mot de passe.',
	'ACCOUNT_COPPA'					=> 'Votre compte a été crée, mais il nécessite d’être approuvé, veuillez consulter vos e-mail pour plus d’informations.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Votre compte a été mis à jour. Cependant, ce forum requiert une réactivation de compte lors des changements d’e-mail. Une clé d’activation a été envoyée sur la nouvelle adresse e-mail que vous avez fournie. Veuillez consulter vos e-mail pour plus d’informations.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Votre compte a été mis à jour. Cependant, ce forum requiert une réactivation de compte par les administrateurs lors des changements d’e-mail. Un e-mail vous sera envoyé pour vous informer lorsque votre compte sera réactivé.',
	'ACCOUNT_INACTIVE'				=> 'Votre compte a été crée. Cependant, ce forum requiert une activation de compte, une clé d’activation a été envoyée à l’adresse e-mail que vous avez fournie. Veuillez consulter vos e-mail pour plus d’informations.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Votre compte a été crée. Cependant, ce forum requiert une activation de compte par un groupe d’administrateurs. Un e-mail vous a été envoyé et vous serez informé lorsque votre compte sera activé.',
	'ACTIVATION_EMAIL_SENT'			=> 'L’e-mail d’activation a été envoyé à votre adresse e-mail.',
	'ADD'							=> 'Ajouter',
	'ADD_BCC'						=> 'Ajouter [Cci]',
	'ADD_FOES'						=> 'Ajouter de nouveaux ignorés',
	'ADD_FOES_EXPLAIN'				=> 'Vous pouvez entrer plusieurs noms d’utilisateurs sur une ligne différente.',
	'ADD_FOLDER'					=> 'Ajouter un dossier',
	'ADD_FRIENDS'					=> 'Ajouter de nouveaux amis',
	'ADD_FRIENDS_EXPLAIN'			=> 'Vous pouvez entrer plusieurs noms d’utilisateurs sur une ligne différente.',
	'ADD_NEW_RULE'					=> 'Ajouter une nouvelle règle',
	'ADD_RULE'						=> 'Ajouter une règle',
	'ADD_TO'						=> 'Ajouter [À]',
	'ADMIN_EMAIL'					=> 'Les utilisateurs peuvent m’envoyer des messages privés',
	'AGREE'							=> 'J’accepte ces conditions',
	'ALLOW_PM'						=> 'Autoriser les utilisateurs à vous envoyer des messages privés',
	'ALLOW_PM_EXPLAIN'				=> 'Notez que les administrateurs et les modérateurs pourront toujours vous envoyer des messages privés.',
	'ALREADY_ACTIVATED'				=> 'Vous avez déjà activé votre compte.',
	'ATTACHMENTS_EXPLAIN'			=> 'Ceci est la liste des pièces jointes que vous avez insérées aux messages du forum.',
	'ATTACHMENTS_DELETED'			=> 'Les pièces jointes ont été supprimées avec succès.',
	'ATTACHMENT_DELETED'			=> 'La pièce jointe a été supprimée avec succès.',
	'AVATAR_CATEGORY'				=> 'Catégorie',
	'AVATAR_EXPLAIN'				=> 'Dimensions maximales ; %1$d pixels de large, %2$d pixels de haut, taille du fichier : %3$d Ko.',
	'AVATAR_FEATURES_DISABLED'		=> 'La fonctionnalité des avatars est actuellement désactivée.',
	'AVATAR_GALLERY'				=> 'Galerie locale',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Impossible de transférer l’avatar vers %s.',
	'AVATAR_PAGE'					=> 'Page',

	'BACK_TO_DRAFTS'			=> 'Retour aux brouillons sauvegardés',
	'BACK_TO_LOGIN'				=> 'Retour à l’écran de connexion',
	'BIRTHDAY'					=> 'Anniversaire',
	'BIRTHDAY_EXPLAIN'			=> 'Le réglage d’une année énumérera votre âge lors de votre anniversaire.',
	'BOARD_DATE_FORMAT'			=> 'Mon format de date',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'La syntaxe utilisée est identique à la fonction PHP <a href="http://www.php.net/date">date()</a>.',
	'BOARD_DST'					=> 'L’heure d’été est effective',
	'BOARD_LANGUAGE'			=> 'Ma langue',
	'BOARD_STYLE'				=> 'Mon style du forum',
	'BOARD_TIMEZONE'			=> 'Mon fuseau horaire',
	'BOOKMARKS'					=> 'Favoris',
	'BOOKMARKS_EXPLAIN'			=> 'Vous pouvez ajouter des sujets dans vos favoris pour les consulter ultérieurement. Sélectionnez les cases à cocher pour n’importe quel favori que vous souhaitez supprimer, puis appuyez sur le bouton <em>Supprimer les favoris cochés</em>.',
	'BOOKMARKS_DISABLED'		=> 'Les favoris sont désactivés sur ce forum.',
	'BOOKMARKS_REMOVED'			=> 'Les favoris ont été supprimés avec succès.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Vous ne pouvez plus éditer ou supprimer ce message.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Les messages ne peuvent pas être déplacés vers le dossier que vous souhaitez supprimer.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Les messages ne peuvent pas être déplacés de la boîte d’envoi.',
	'CANNOT_RENAME_FOLDER'		=> 'Ce dossier ne peut pas être renommé.',
	'CANNOT_REMOVE_FOLDER'		=> 'Ce dossier ne peut pas être supprimé.',
	'CHANGE_DEFAULT_GROUP'		=> 'Modifier le groupe par défaut',
	'CHANGE_PASSWORD'			=> 'Modifier le mot de passe',
	'CLICK_RETURN_FOLDER'		=> '%1$sRetourner à votre dossier “%3$s”%2$s',
	'CONFIRMATION'				=> 'Confirmation de l’inscription',
	'CONFIRM_CHANGES'			=> 'Confirmer les modifications',	
	'CONFIRM_EMAIL'				=> 'Confirmer l’adresse e-mail',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Vous avez besoin de spécifier cela que si vous modifiez votre adresse e-mail.',
	'CONFIRM_EXPLAIN'			=> 'Pour éviter les inscriptions automatisées, vous devez entrer un code de confirmation. Le code est affiché dans l’image que vous devriez voir ci-dessous. Si vous êtes visuellement déficient ou que vous n’arrivez pas à lire ce code correctement, veuillez contacter l’%sAdministrateur du Forum%s.',
	'CONFIRM_PASSWORD'			=> 'Confirmer le mot de passe',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Vous avez besoin de confirmer votre mot de passe que si vous le modifiez ci-dessus.',
	'COPPA_BIRTHDAY'			=> 'Pour continuer le processus d’inscription, veuillez renseigner votre date de naissance.',
	'COPPA_COMPLIANCE'			=> 'Conformité de COPPA',
	'COPPA_EXPLAIN'				=> 'Veuillez noter qu’en cliquant sur Envoyer, cela créera votre compte. Cependant, celui-ci ne peut pas être activé jusqu’à qu’un parent ou un tuteur légal approuve votre inscription. Vous recevrez une copie du formulaire avec les renseignements à envoyer.',
	'CREATE_FOLDER'				=> 'Ajouter un dossier…',
	'CURRENT_IMAGE'				=> 'Image actuelle',
	'CURRENT_PASSWORD'			=> 'Mot de passe actuel',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Vous devez confirmer votre mot de passe actuel si vous souhaitez le modifier, de même pour votre adresse e-mail ou votre nom d’utilisateur.',
	'CUR_PASSWORD_ERROR'		=> 'Le mot de passe actuel que vous avez entré est incorrect.',
	'CUSTOM_DATEFORMAT'			=> 'Personnaliser…',

	'DEFAULT_ACTION'			=> 'Action par défaut',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Cette action sera déclenchée si aucune de ce qui la précède n’est applicable.',
	'DEFAULT_ADD_SIG'			=> 'Insérer ma signature par défaut',
	'DEFAULT_BBCODE'			=> 'Activer le BBCode par défaut',
	'DEFAULT_NOTIFY'			=> 'M’avertir lors de réponses par défaut',
	'DEFAULT_SMILIES'			=> 'Activer les smileys par défaut',
	'DEFINED_RULES'				=> 'Règles définies',
	'DELETED_TOPIC'				=> 'Le sujet a été supprimé.',
	'DELETE_ATTACHMENT'			=> 'Supprimer la pièce jointe',
	'DELETE_ATTACHMENTS'		=> 'Supprimer les pièces jointes',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Êtes-vous sûr de vouloir supprimer cette pièce jointe ?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Êtes-vous sûr de vouloir supprimer ces pièces jointes ?',
	'DELETE_AVATAR'				=> 'Supprimer une image',
	'DELETE_COOKIES_CONFIRM'	=> 'Êtes-vous sûr de vouloir supprimer tous les cookies réglés par ce forum ?',
	'DELETE_MARKED_PM'			=> 'Supprimer les messages cochés',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Êtes-vous sûr de vouloir supprimer tous les messages cochés ?',
	'DELETE_OLDEST_MESSAGES'	=> 'Supprimer les messages anciens',
	'DELETE_MESSAGE'			=> 'Supprimer le message',
	'DELETE_MESSAGE_CONFIRM'	=> 'Êtes-vous sûr de vouloir supprimer ce message privé ?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Supprimer tous les messages dans le dossier supprimé',
	'DELETE_RULE'				=> 'Supprimer une règle',
	'DELETE_RULE_CONFIRM'		=> 'Êtes-vous sûr de vouloir supprimer cette règle ?',
	'DEMOTE_SELECTED'			=> 'Rétrograder la sélection',
	'DISABLE_CENSORS'			=> 'Activer la censure de mots',
	'DISPLAY_GALLERY'			=> 'Afficher la galerie',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Le domaine de l’adresse e-mail entré n’est pas dans un enregistrement MX valide.',
	'DOWNLOADS'					=> 'Téléchargements',
	'DRAFTS_DELETED'			=> 'Tous les brouillons sélectionnés ont été supprimés avec succès.',
	'DRAFTS_EXPLAIN'			=> 'Ici, vous pouvez voir, éditer et supprimer vos brouillons sauvegardés.',
	'DRAFT_UPDATED'				=> 'Brouillon mis à jour avec succès.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Ici, vous pouvez éditer votre brouillon. Les brouillons ne contiennent pas de pièces jointes et de sondages.',
	'EMAIL_BANNED_EMAIL'		=> 'L’adresse e-mail que vous avez saisie n’est pas autorisée à être utilisée.',
	'EMAIL_INVALID_EMAIL'		=> 'L’adresse e-mail que vous avez saisie est invalide.',
	'EMAIL_REMIND'				=> 'Ceci doit être l’adresse e-mail associée à votre compte. Si vous ne l’avez pas modifiée par l’intermédiaire de votre Panneau de Contrôle de l’Utilisateur, c’est l’adresse que vous avez fournie lors de l’inscription de votre compte.',
	'EMAIL_TAKEN_EMAIL'			=> 'L’adresse e-mail saisie est déjà utilisée.',
	'EMPTY_DRAFT'				=> 'Vous devez entrer un message pour envoyer vos modifications.',
	'EMPTY_DRAFT_TITLE'			=> 'Vous devez saisir un titre pour le brouillon.',
	'EXPORT_AS_XML'				=> 'Exporter en XML',
	'EXPORT_AS_CSV'				=> 'Exporter en CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'Exporter en CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'Exporter en TXT',
	'EXPORT_AS_MSG'				=> 'Exporter en MSG',
	'EXPORT_FOLDER'				=> 'Exporter cette vue',

	'FIELD_REQUIRED'					=> 'Le champ “%s” doit être complété.',
	'FIELD_TOO_SHORT'					=> 'Le champ “%1$s” est trop court, un minimum de %2$d caractères est exigé.',
	'FIELD_TOO_LONG'					=> 'Le champ “%1$s” est trop long, un maximum de %2$d caractères est autorisé.',
	'FIELD_TOO_SMALL'					=> 'La valeur de “%1$s” est trop petite, une valeur minimale de %2$d est exigée.',
	'FIELD_TOO_LARGE'					=> 'La valeur de “%1$s” est trop grande, une valeur maximale de %2$d est autorisée.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Le champ “%s” contient des caractères invalides, seuls les nombres sont autorisés.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Le champ “%s” contient des caractères invalides, seuls les caractères alphanumériques sont autorisés.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'Le champ “%s” contient des caractères invalides, seuls les caractères alphanumériques, l’espace ou les signes -+_[] sont autorisés.',
	'FIELD_INVALID_DATE'				=> 'Le champ “%s” contient une date invalide.',

	'FOE_MESSAGE'				=> 'Message d’un ignoré',
	'FOES_EXPLAIN'				=> 'Les ignorés sont des utilisateurs qui seront ignorés par défaut. Les messages de ces utilisateurs ne seront pas entièrement visibles. Les messages privés des ignorés sont tout de même autorisés. Veuillez noter que vous ne pouvez pas ignorer les modérateurs ou les administrateurs.',
	'FOES_UPDATED'				=> 'Votre liste d’ignorés a été mise à jour avec succès.',
	'FOLDER_ADDED'				=> 'Dossier ajouté avec succès.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d de %2$d messages stockés',
	'FOLDER_NAME_EXIST'			=> 'Le dossier <strong>%s</strong> existe déjà.',
	'FOLDER_OPTIONS'			=> 'Options du dossier',
	'FOLDER_RENAMED'			=> 'Dossier renommé avec succès.',
	'FOLDER_REMOVED'			=> 'Dossier supprimé avec succès.',
	'FOLDER_STATUS_MSG'			=> 'Dossier plein à %1$d%% (%2$d de %3$d messages stockés)',
	'FORWARD_PM'				=> 'Transmettre le MP',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Avant de continuer à parcourir le forum, vous devez modifier votre mot de passe.',
	'FRIEND_MESSAGE'			=> 'Message d’un ami',
	'FRIENDS'					=> 'Amis',
	'FRIENDS_EXPLAIN'			=> 'Les amis vous permettent un accès rapide aux membres avec qui vous communiquez fréquemment. Si le template le permet, les messages de vos amis seront mis en surbrillances.',
	'FRIENDS_OFFLINE'			=> 'Hors-ligne',
	'FRIENDS_ONLINE'			=> 'En ligne',
	'FRIENDS_UPDATED'			=> 'Votre liste d’amis a été mise à jour avec succès.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'L’action à réaliser lorsqu’un dossier est plein a été modifiée avec succès.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Message Original --------',
	'FWD_SUBJECT'				=> 'Sujet : %s',
	'FWD_DATE'					=> 'Date : %s',
	'FWD_FROM'					=> 'De : %s',
	'FWD_TO'					=> 'À : %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Annonce globale',

	'HIDE_ONLINE'				=> 'Masquer mon statut en ligne',
	'HIDE_ONLINE_EXPLAIN'		=> 'La modification de ce réglage ne deviendra effective que lors de votre prochaine visite sur le forum.',
	'HOLD_NEW_MESSAGES'			=> 'Ne pas accepter les nouveaux messages (les nouveaux messages seront placés en attente jusqu’à ce qu’assez d’espace soit disponible)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Les nouveaux messages seront placés en attente jusqu’à ce qu’assez d’espace soit disponible',

	'IF_FOLDER_FULL'			=> 'Si le dossier est plein',
	'IMPORTANT_NEWS'			=> 'Annonces importantes',
	'INVALID_CHARS_USERNAME'	=> 'Le nom d’utilisateur contient des caractères non autorisés.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Le mot de passe ne contient pas les caractères requis.',
	'ITEMS_REQUIRED'			=> 'Les éléments marqués par * sont des champs de profil à compléter obligatoirement.',

	'JOIN_SELECTED'				=> 'Joindre la sélection',

	'LANGUAGE'					=> 'Langue',
	'LINK_REMOTE_AVATAR'		=> 'Lien externe',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Entrez l’URL de l’endroit contenant l’image de l’avatar que vous souhaitez insérer.',
	'LINK_REMOTE_SIZE'			=> 'Dimensions de l’avatar',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Spécifiez la largeur et la hauteur de l’avatar, laissez vide pour tenter une vérification automatique.',
	'LOGIN_EXPLAIN_UCP'			=> 'Veuillez vous connecter afin d’accéder au Panneau de Contrôle de l’Utilisateur.',
	'LOGIN_REDIRECT'			=> 'Vous vous êtes connecté avec succès.',
	'LOGOUT_FAILED'				=> 'Vous n’avez pas été déconnecté car la requête n’a pas fonctionnée sur votre session. Veuillez contacter l’administrateur du forum si vous continuez à avoir ce problème.',
	'LOGOUT_REDIRECT'			=> 'Vous vous êtes déconnecté avec succès.',

	'MARK_IMPORTANT'				=> 'Cocher/Décocher comme important',
	'MARKED_MESSAGE'				=> 'Message marqué',
	'MAX_FOLDER_REACHED'			=> 'Le nombre maximum de dossiers autorisés et définis pour l’utilisateur a été atteint.',
	'MESSAGE_BY_AUTHOR'				=> 'de',
	'MESSAGE_COLOURS'				=> 'Couleurs du message',
	'MESSAGE_DELETED'				=> 'Message supprimé avec succès.',
	'MESSAGE_HISTORY'				=> 'Historique du message',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Ce message a été supprimé par son auteur avant qu’il ait été délivré.',
	'MESSAGE_SENT_ON'				=> 'sur',
	'MESSAGE_STORED'				=> 'Ce message a été envoyé avec succès.',
	'MESSAGE_TO'					=> 'À',
	'MESSAGES_DELETED'				=> 'Messages supprimés avec succès',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Déplacer les messages du dossier supprimé vers',
	'MOVE_DOWN'						=> 'Descendre',
	'MOVE_MARKED_TO_FOLDER'			=> 'Déplacer les fichiers cochés vers %s',
	'MOVE_PM_ERROR'					=> 'Une erreur est survenue lors du déplacement des messages vers le nouveau dossier, seuls %1d des %2d messages ont été déplacés.',
	'MOVE_TO_FOLDER'				=> 'Déplacer vers le dossier',
	'MOVE_UP'						=> 'Monter',

	'NEW_EMAIL_ERROR'				=> 'Les adresses e-mail que vous avez saisies ne concordent pas.',
	'NEW_FOLDER_NAME'				=> 'Nouveau nom du dossier',
	'NEW_PASSWORD'					=> 'Nouveau mot de passe',
	'NEW_PASSWORD_ERROR'			=> 'Les mots de passe que vous avez saisis ne concordent pas.',
	'NOTIFY_METHOD'					=> 'Méthode d’avertissement',
	'NOTIFY_METHOD_BOTH'			=> 'Tous les deux',
	'NOTIFY_METHOD_EMAIL'			=> 'E-mail seulement',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Méthode pour l’envoi de messages envoyés par l’intermédiaire de ce forum.',
	'NOTIFY_METHOD_IM'				=> 'Jabber seulement',
	'NOTIFY_ON_PM'					=> 'M’avertir lors de nouveaux messages privés',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Vous ne pouvez pas ajouter d’utilisateurs anonymes à votre liste d’amis.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Vous ne pouvez pas ajouter à votre liste d’amis des utilisateurs qui sont présents dans votre liste d’ignorés.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Vous ne pouvez pas vous ajouter vous-même dans votre liste d’amis.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Vous ne pouvez pas ajouter des administrateurs et des modérateurs à votre liste d’ignorés.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Vous ne pouvez pas ajouter d’utilisateurs anonymes à votre liste d’ignorés.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Vous ne pouvez pas ajouter à votre liste d’ignorés des utilisateurs qui sont présents dans votre liste d’amis.',
	'NOT_ADDED_FOES_SELF'			=> 'Vous ne pouvez pas vous ajouter vous-même dans votre liste d’ignorés.',
	'NOT_AGREE'						=> 'Je refuse ces conditions',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'Le dossier de destination “%s” semble être plein. L’action demandée n’a pas été prise en compte.',
	'NOT_MOVED_MESSAGE'				=> 'Vous avez 1 message privé actuellement en attente car le dossier est plein.',
	'NOT_MOVED_MESSAGES'			=> 'Vous avez %d messages privés actuellement en attente car le dossier est plein.',
	'NO_ACTION_MODE'				=> 'Aucune action n’a été spécifiée pour ce message.',
	'NO_AUTHOR'						=> 'Aucun auteur n’a été défini pour ce message',
	'NO_AVATAR_CATEGORY'			=> 'Aucune',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Vous n’êtes pas autorisé à supprimer des messages privés.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Vous n’êtes pas autorisé à éditer des messages privés.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Vous n’êtes pas autorisé à transmettre des messages privés.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Vous n’êtes pas autorisé à envoyer des messages privés aux groupes.',
	'NO_AUTH_READ_MESSAGE'			=> 'Vous n’êtes pas autorisé à lire des messages privés.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Vous ne pouvez pas lire ce message car il a été supprimé par son auteur.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Vous n’êtes pas autorisé à envoyer des messages privés.',
	'NO_AUTH_SIGNATURE'				=> 'Vous n’êtes pas autorisé à définir une signature.',

	'NO_BCC_RECIPIENT'			=> 'Aucun',
	'NO_BOOKMARKS'				=> 'Vous n’avez aucun favori.',
	'NO_BOOKMARKS_SELECTED'		=> 'Vous n’avez pas sélectionné de favoris.',
	'NO_EDIT_READ_MESSAGE'		=> 'Ce message privé ne peut pas être édité car il a déjà été consulté.',
	'NO_EMAIL_USER'				=> 'Les informations sur l’e-mail/nom d’utilisateur envoyées sont introuvables.',
	'NO_FOES'					=> 'Aucun ignoré défini actuellement',
	'NO_FRIENDS'				=> 'Aucun ami défini actuellement',
	'NO_FRIENDS_OFFLINE'		=> 'Aucun ami hors-ligne',
	'NO_FRIENDS_ONLINE'			=> 'Aucun ami en ligne',
	'NO_GROUP_SELECTED'			=> 'Aucun groupe spécifié.',
	'NO_IMPORTANT_NEWS'			=> 'Aucune annonce importante présente.',
	'NO_MESSAGE'				=> 'Le message privé est introuvable.',
	'NO_NEW_FOLDER_NAME'		=> 'Vous devez spécifier un nouveau nom de dossier.',
	'NO_NEWER_PM'				=> 'Aucun nouveau message.',
	'NO_OLDER_PM'				=> 'Aucun ancien message.',
	'NO_PASSWORD_SUPPLIED'		=> 'Vous ne pouvez pas vous connecter sans un mot de passe.',
	'NO_RECIPIENT'				=> 'Aucun destinataire défini.',
	'NO_RULES_DEFINED'			=> 'Aucune règle définie.',
	'NO_SAVED_DRAFTS'			=> 'Aucun brouillon sauvegardé.',
	'NO_TO_RECIPIENT'			=> 'Aucun',
	'NO_WATCHED_FORUMS'			=> 'Vous n’êtes abonné à aucun forum.',
	'NO_WATCHED_TOPICS'			=> 'Vous n’êtes abonné à aucun sujet.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Le mot de passe doit être compris entre %1$d et %2$d caractères de long, doit contenir des lettres en majuscules et en minuscules, et doit contenir des chiffres.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Doit être compris entre %1$d et %2$d caractères.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Le mot de passe doit être compris entre %1$d et %2$d caractères de long et doit contenir des lettres en majuscules et en minuscules.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Le mot de passe doit être compris entre %1$d et %2$d caractères de long, doit contenir des lettres en majuscules et en minuscules, doit contenir des chiffres et doit contenir des symboles.',
	'PASSWORD'					=> 'Mot de passe',
	'PASSWORD_ACTIVATED'		=> 'Votre nouveau mot de passe vient d’être activé.',
	'PASSWORD_UPDATED'			=> 'Votre mot de passe vient d’être envoyé avec succès à votre adresse e-mail originale.',
	'PERMISSIONS_RESTORED'		=> 'Permissions originales restaurées avec succès.',
	'PERMISSIONS_TRANSFERRED'	=> 'Permissions transférées avec succès depuis <strong>%s</strong>, vous pouvez à présent parcourir le forum avec les permissions des utilisateurs.<br />Veuillez noter que ces permissions des administrateurs ne sont pas transférées. Vous pouvez retourner au réglage de votre permission à tout moment.',
	'PM_DISABLED'				=> 'La messagerie privée a été désactivée sur ce forum.',
	'PM_FROM'					=> 'De',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Ce message privé a été envoyé par un utilisateur qui n’est plus inscrit.',
	'PM_ICON'					=> 'Icône du MP',
	'PM_INBOX'					=> 'Boîte de réception',
	'PM_NO_USERS'				=> 'Les utilisateurs que vous souhaitez ajouter n’existent pas.',
	'PM_OUTBOX'					=> 'Boîte d’envoi',
	'PM_SENTBOX'				=> 'Messages envoyés',
	'PM_SUBJECT'				=> 'Sujet du message',
	'PM_TO'						=> 'Envoyer à',
	'PM_USERS_REMOVED_NO_PM'	=> 'Certains utilisateurs ne peuvent pas être ajoutés car ils ont désactivés la réception de messages privés.',
	'POPUP_ON_PM'				=> 'Pop-up lors d’un nouveau message privé',
	'POST_EDIT_PM'				=> 'Éditer le message',
	'POST_FORWARD_PM'			=> 'Transmettre le message',
	'POST_NEW_PM'				=> 'Publier un message',
	'POST_PM_LOCKED'			=> 'La messagerie privée est verrouillée',
	'POST_PM_POST'				=> 'Citer le message',
	'POST_QUOTE_PM'				=> 'Citer le message',
	'POST_REPLY_PM'				=> 'Répondre au message',
	'PRINT_PM'					=> 'Imprimer la vue',
	'PREFERENCES_UPDATED'		=> 'Vos préférences ont été mises à jour.',
	'PROFILE_INFO_NOTICE'		=> 'Veuillez noter que les informations suivantes peuvent être visibles aux autres membres. Faites attention lors de la saisie d’informations personnelles. Tous les champs marqués avec * doivent être complétés.',
	'PROFILE_UPDATED'			=> 'Votre profil a été mis à jour.',

	'RECIPIENT'							=> 'Destinataire',
	'RECIPIENTS'						=> 'Destinataires',
	'REGISTRATION'						=> 'Inscription',
	'RELEASE_MESSAGES'					=> '%sSortir tous les messages en attente%s… ils seront reclassés dans les dossiers appropriés si assez d’espace est rendu disponible.',
	'REMOVE_ADDRESS'					=> 'Supprimer l’adresse',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Supprimer les favoris sélectionnés',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Êtes-vous sûr de vouloir supprimer tous les favoris sélectionnés ?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Supprimer les favoris cochés',
	'REMOVE_FOLDER'						=> 'Supprimer le dossier',
	'REMOVE_FOLDER_CONFIRM'				=> 'Êtes-vous sûr de vouloir supprimer ce dossier ?',
	'RENAME'							=> 'Renommer',
	'RENAME_FOLDER'						=> 'Renommer le dossier',
	'REPLIED_MESSAGE'					=> 'Réponse au message',
	'RESIGN_SELECTED'					=> 'Décocher la sélection',
	'RETURN_FOLDER'						=> '%1$sRetourner au dossier précédent%2$s',
	'RETURN_UCP'						=> '%sRetourner au Panneau de Contrôle de l’Utilisateur%s',
	'RULE_ADDED'						=> 'Règle ajoutée avec succès.',
	'RULE_ALREADY_DEFINED'				=> 'Cette règle a été définie précédemment.',
	'RULE_DELETED'						=> 'Règle supprimée avec succès.',
	'RULE_NOT_DEFINED'					=> 'Règle incorrectement spécifiée.',
	'RULE_REMOVED_MESSAGE'				=> 'Un message privé a été supprimé en raison des filtres de la messagerie privée.',
	'RULE_REMOVED_MESSAGES'				=> '%d messages privés ont été supprimés en raison des filtres de la messagerie privée.',

	'SAME_PASSWORD_ERROR'		=> 'Le nouveau mot de passe que vous avez saisi est le même que votre mot de passe actuel.',
	'SEARCH_YOUR_POSTS'			=> 'Montrer vos messages',
	'SEND_PASSWORD'				=> 'Envoyer le mot de passe',
	'SENT_AT'					=> 'Envoyé à',
	'SHOW_EMAIL'				=> 'Les utilisateurs peuvent me contacter par e-mail',
	'SIGNATURE_EXPLAIN'			=> 'Ceci est un petit texte qui sera ajouté à tous les messages que vous rédigez. Il est limité à %d caractères.',
	'SIGNATURE_PREVIEW'			=> 'Votre signature apparaîtra ainsi sur tous vos messages',
	'SIGNATURE_TOO_LONG'		=> 'Votre signature est trop longue.',
	'SORT'						=> 'Classement',
	'SORT_COMMENT'				=> 'Commentaire du fichier',
	'SORT_DOWNLOADS'			=> 'Téléchargements',
	'SORT_EXTENSION'			=> 'Extension',
	'SORT_FILENAME'				=> 'Nom du fichier',
	'SORT_POST_TIME'			=> 'Date de publication',
	'SORT_SIZE'					=> 'Taille du fichier',

	'TIMEZONE'					=> 'Fuseau horaire',
	'TO'						=> 'À',
	'TOO_MANY_RECIPIENTS'		=> 'Trop de destinataires.',
	'TOO_MANY_REGISTERS'		=> 'Vous avez dépassé le nombre de tentatives maximum d’inscriptions pour cette session. Veuillez réessayer plus tard.',

	'UCP'						=> 'Panneau de Contrôle de l’Utilisateur',
	'UCP_ACTIVATE'				=> 'Activer le compte',
	'UCP_ADMIN_ACTIVATE'		=> 'Veuillez noter que vous avez besoin de saisir une adresse e-mail valide avant que votre compte soit activé. L’administrateur vérifiera votre compte et s’il est approuvé vous recevrez un e-mail à l’adresse que vous avez spécifiée.',
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'Pièces jointes',
	'UCP_COPPA_BEFORE'			=> 'Avant le %s',
	'UCP_COPPA_ON_AFTER'		=> 'Sur ou après le %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Veuillez noter que vous avez besoin de saisir une adresse e-mail valide avant que votre compte ne soit activé. Vous recevrez un e-mail qui contiendra le lien d’activation à l’adresse que vous avez fournie.',
	'UCP_ICQ'					=> 'Numéro ICQ',
	'UCP_JABBER'				=> 'Adresse Jabber',

	'UCP_MAIN'					=> 'Aperçu',
	'UCP_MAIN_ATTACHMENTS'		=> 'Gérer les pièces jointes',
	'UCP_MAIN_BOOKMARKS'		=> 'Gérer les favoris',
	'UCP_MAIN_DRAFTS'			=> 'Gérer les brouillons',
	'UCP_MAIN_FRONT'			=> 'Page principale',
	'UCP_MAIN_SUBSCRIBED'		=> 'Gérer les souscriptions',

	'UCP_MSNM'					=> 'MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'Vous n’avez pas publié de fichier.',

	'UCP_PREFS'					=> 'Préférences du forum',
	'UCP_PREFS_PERSONAL'		=> 'Éditer les réglages globaux',
	'UCP_PREFS_POST'			=> 'Éditer la publication par défaut',
	'UCP_PREFS_VIEW'			=> 'Éditer les options d’affichage',
	
	'UCP_PM'					=> 'Messages privés',
	'UCP_PM_COMPOSE'			=> 'Composer un message',
	'UCP_PM_DRAFTS'				=> 'Gérer les brouillons de MP',
	'UCP_PM_OPTIONS'			=> 'Règles, dossiers &amp; réglages',
	'UCP_PM_POPUP'				=> 'Messages privés',
	'UCP_PM_POPUP_TITLE'		=> 'Pop-up de message privé',
	'UCP_PM_UNREAD'				=> 'Messages non-lus',
	'UCP_PM_VIEW'				=> 'Voir les messages',

	'UCP_PROFILE'				=> 'Profil',
	'UCP_PROFILE_AVATAR'		=> 'Éditer l’avatar',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Éditer le profil',
	'UCP_PROFILE_REG_DETAILS'	=> 'Éditer les réglages du compte',
	'UCP_PROFILE_SIGNATURE'		=> 'Éditer la signature',

	'UCP_USERGROUPS'			=> 'Groupes d’utilisateurs',
	'UCP_USERGROUPS_MEMBER'		=> 'Éditer les adhésions',
	'UCP_USERGROUPS_MANAGE'		=> 'Gérer les groupes',

	'UCP_REGISTER_DISABLE'			=> 'La création d’un nouveau compte n’est pas possible actuellement.',
	'UCP_REMIND'					=> 'Envoyer le mot de passe',
	'UCP_RESEND'					=> 'Envoyer l’e-mail d’activation',
	'UCP_WELCOME'					=> 'Bienvenue sur le Panneau de Contrôle de l’Utilisateur. D’ici, vous pouvez surveiller, voir et mettre à jour votre profil, vos préférences et vos abonnements aux forums et aux sujets. Vous pouvez également envoyer des messages aux autres utilisateurs (si cela est autorisé). Veuillez vous assurer d’avoir lu toutes les annonces avant de continuer.',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'Amis &amp; Ignorés',
	'UCP_ZEBRA_FOES'				=> 'Gérer les ignorés',
	'UCP_ZEBRA_FRIENDS'				=> 'Gérer les amis',
	'UNKNOWN_FOLDER'				=> 'Dossier inconnu',
	'UNWATCH_MARKED'				=> 'Ne plus surveiller la sélection',
	'UPLOAD_AVATAR_FILE'			=> 'Transférer depuis votre ordinateur',
	'UPLOAD_AVATAR_URL'				=> 'Transférer depuis une URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Entrez l’URL de l’endroit où est stocké l’image. L’image sera copiée sur ce site.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Le nom d’utilisateur doit être compris entre %1$d et %2$d caractères de long et utiliser seulement des caractères alphanumériques.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Le nom d’utilisateur doit être compris entre %1$d et %2$d caractères de long et utiliser des caractères alphanumériques, des espaces et des symboles -+_[].',
	'USERNAME_ASCII_EXPLAIN'		=> 'Le nom d’utilisateur doit être compris entre %1$d et %2$d caractères de long et utiliser seulement des caractères ASCII, mais aucun symboles spéciaux.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Le nom d’utilisateur doit être compris entre %1$d et %2$d caractères de long et utiliser seulement des lettres et des chiffres.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Le nom d’utilisateur doit être compris entre %1$d et %2$d caractères de long et utiliser des lettres, des chiffres, des espaces ou des symboles -+_[].',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'La longueur doit être comprise entre %1$d et %2$d caractères.',
	'USERNAME_TAKEN_USERNAME'		=> 'Le nom d’utilisateur que vous avez entré est déjà utilisé, veuillez en sélectionner un autre.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Le nom d’utilisateur que vous avez entré a été interdit ou contient un mot interdit. Veuillez en sélectionner un autre.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'Les noms d’utilisateurs que vous avez spécifiés sont introuvables ou les utilisateurs ne sont pas encore activés.',

	'VIEW_AVATARS'				=> 'Afficher les avatars',
	'VIEW_EDIT'					=> 'Voir/Éditer',
	'VIEW_FLASH'				=> 'Afficher les animations Flash',
	'VIEW_IMAGES'				=> 'Afficher les images dans les messages',
	'VIEW_NEXT_HISTORY'			=> 'MP suivant dans la chronologie',
	'VIEW_NEXT_PM'				=> 'MP suivant',
	'VIEW_PM'					=> 'Voir le message',
	'VIEW_PM_INFO'				=> 'Informations du message',
	'VIEW_PM_MESSAGE'			=> '1 message',
	'VIEW_PM_MESSAGES'			=> '%d messages',
	'VIEW_PREVIOUS_HISTORY'		=> 'MP précédent dans la chronologie',
	'VIEW_PREVIOUS_PM'			=> 'MP précédent',
	'VIEW_SIGS'					=> 'Afficher les signatures',
	'VIEW_SMILIES'				=> 'Afficher les smileys comme des images',
	'VIEW_TOPICS_DAYS'			=> 'Afficher les sujets des jours précédents',
	'VIEW_TOPICS_DIR'			=> 'Afficher les sujets classés par ordre',
	'VIEW_TOPICS_KEY'			=> 'Afficher les sujets classés par',
	'VIEW_POSTS_DAYS'			=> 'Afficher les messages des jours précédents',
	'VIEW_POSTS_DIR'			=> 'Afficher les messages classés par ordre',
	'VIEW_POSTS_KEY'			=> 'Afficher les messages classés par',

	'WATCHED_EXPLAIN'			=> 'La liste ci-dessous vous informe des forums et des sujets auxquels vous vous êtes abonné. Vous serez averti lorsque de nouveaux messages seront publiés dans ces derniers. Pour se désabonner, cochez le forum ou le sujet et appuyez sur le bouton <em>Ne plus surveiller la sélection</em>.',
	'WATCHED_FORUMS'			=> 'Forums surveillés',
	'WATCHED_TOPICS'			=> 'Sujets surveillés',
	'WRONG_ACTIVATION'			=> 'La clé d’activation que vous avez fournie ne correspond à rien dans la base de données.',

	'YOUR_DETAILS'				=> 'Votre activité',
	'YOUR_FOES'					=> 'Vos ignorés',
	'YOUR_FOES_EXPLAIN'			=> 'Pour supprimer des noms d’utilisateurs, sélectionnez-les et cliquez sur envoyer.',
	'YOUR_FRIENDS'				=> 'Vos amis',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Pour supprimer des noms d’utilisateurs, sélectionnez-les et cliquez sur envoyer.',
	'YOUR_WARNINGS'				=> 'Votre niveau d’avertissement',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Mettre dans le dossier',
		'MARK_AS_READ'		=> 'Marquer comme lu',
		'MARK_AS_IMPORTANT'	=> 'Marquer le message',
		'DELETE_MESSAGE'	=> 'Supprimer le message'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Sujet',
		'SENDER'	=> 'Expéditeur',
		'MESSAGE'	=> 'Message',
		'STATUS'	=> 'Statut du message',
		'TO'		=> 'Envoyé à'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'est comme',
		'IS_NOT_LIKE'	=> 'n’est pas comme',
		'IS'			=> 'est',
		'IS_NOT'		=> 'n’est pas',
		'BEGINS_WITH'	=> 'commence par',
		'ENDS_WITH'		=> 'termine par',
		'IS_FRIEND'		=> 'est un ami',
		'IS_FOE'		=> 'est un ignoré',
		'IS_USER'		=> 'est un utilisateur',
		'IS_GROUP'		=> 'est un groupe d’utilisateurs',
		'ANSWERED'		=> 'répondu',
		'FORWARDED'		=> 'transmis',
		'TO_GROUP'		=> 'vers mon groupe d’utilisateurs par défaut',
		'TO_ME'			=> 'à moi'
	),


	'GROUPS_EXPLAIN'	=> 'Les groupes d’utilisateurs permettent aux administrateurs de mieux administrer les utilisateurs. Par défaut, vous êtes placé dans un groupe spécifique et celui-ci est votre groupe par défaut. Ce groupe défini comment vous pouvez apparaître aux autres utilisateurs, comme par exemple la couleur de votre nom d’utilisateur, votre avatar, votre rang, etc. Si l’administrateur l’autorise, vous pouvez modifier votre groupe par défaut. Vous pouvez également être placé dans celui-ci ou rejoindre d’autres groupes. Certains groupes peuvent vous donner des permissions additionnelles afin de voir un certain contenu ou d’augmenter vos fonctionnalités dans d’autres zones.',
	'GROUP_LEADER'		=> 'Chefs',
	'GROUP_MEMBER'		=> 'Membres',
	'GROUP_PENDING'		=> 'Membres en attente',
	'GROUP_NONMEMBER'	=> 'Non-membres',
	'GROUP_DETAILS'		=> 'Informations du groupe',

	'NO_LEADER'		=> 'Aucun chef du groupe',
	'NO_MEMBER'		=> 'Aucun membre du groupe',
	'NO_PENDING'	=> 'Aucun membre en attente',
	'NO_NONMEMBER'	=> 'Aucun groupe non-membre',
));

?>
