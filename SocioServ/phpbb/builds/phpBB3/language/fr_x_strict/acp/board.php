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
* acp_board [French]
*
* @package language
* @version $Id: board.php,v 1.92 2007/08/23 13:41:34 naderman Exp $
* @translation $Id: board.php,v 0.92 2007/08/27 13:31:02 xaphos Exp $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Ici, vous pouvez déterminer les options basiques de votre forum, lui donner un nom et une description appropriés, et, entre autres options, ajuster les valeurs par défaut pour le fuseau horaire et la langue.',
	'CUSTOM_DATEFORMAT'				=> 'Personnaliser…',
	'DEFAULT_DATE_FORMAT'			=> 'Format de la date',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Le format de la date est le même que celui de la fonction <code>date</code> de PHP.',
	'DEFAULT_LANGUAGE'				=> 'Langue par défaut',
	'DEFAULT_STYLE'					=> 'Style par défaut',
	'DISABLE_BOARD'					=> 'Désactiver le forum',
	'DISABLE_BOARD_EXPLAIN'			=> 'Cela rendra le forum indisponible aux utilisateurs. Vous pouvez entrer un court (255 caractères) message à afficher si vous souhaitez.',
	'OVERRIDE_STYLE'				=> 'Remplacer le style des utilisateurs',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Remplace le style des utilisateurs par celui utilisé par défaut.',
	'SITE_DESC'						=> 'Description du site',
	'SITE_NAME'						=> 'Nom du forum',
	'SYSTEM_DST'					=> 'Activer l’heure d’été',
	'SYSTEM_TIMEZONE'				=> 'Fuseau horaire du forum',
	'WARNINGS_EXPIRE'				=> 'Durée des avertissements',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Nombre de jours qui s’écoulera avant qu’un avertissement expire automatiquement.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Ici, vous pouvez activer ou désactiver plusieurs fonctionnalités du forum.',

	'ALLOW_ATTACHMENTS'			=> 'Autoriser les pièces jointes',
	'ALLOW_BIRTHDAYS'			=> 'Autoriser les anniversaires',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Autorise la saisie des anniversaires et l’affichage de l’âge dans les profils. Veuillez noter que l’affichage de la liste des anniversaires sur l’index du forum est un réglage séparé à celui-ci.',
	'ALLOW_BOOKMARKS'			=> 'Autoriser l’ajout de sujets dans les favoris',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Les utilisateurs peuvent stocker des favoris personnels.',
	'ALLOW_BBCODE'				=> 'Autoriser le BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Autoriser les abonnements aux forums',
	'ALLOW_NAME_CHANGE'			=> 'Autoriser les modifications de noms d’utilisateurs',
	'ALLOW_NO_CENSORS'			=> 'Autoriser la désactivation de la censure de mots',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Les utilisateurs peuvent choisir de désactiver la censure de mots automatique dans les messages et les messages privés.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Autoriser les pièces jointes dans les messages privés',
	'ALLOW_SIG'					=> 'Autoriser les signatures',
	'ALLOW_SIG_BBCODE'			=> 'Autoriser le BBCode dans les signatures des utilisateurs',
	'ALLOW_SIG_FLASH'			=> 'Autoriser l’utilisation de la balise BBCode <code>[FLASH]</code> dans les signatures des utilisateurs',
	'ALLOW_SIG_IMG'				=> 'Autoriser l’utilisation de la balise BBCode <code>[IMG]</code> dans les signatures des utilisateurs',
	'ALLOW_SIG_LINKS'			=> 'Autoriser l’utilisation de liens dans les signatures des utilisateurs',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Si désactivé, la balise BBCode <code>[URL]</code> et la mise en liens des URL automatique sont désactivées.',
	'ALLOW_SIG_SMILIES'			=> 'Autoriser l’utilisation de smileys dans les signatures des utilisateurs',
	'ALLOW_SMILIES'				=> 'Autoriser les smileys',
	'ALLOW_TOPIC_NOTIFY'		=> 'Autoriser les abonnements aux sujets',
	'BOARD_PM'					=> 'Messagerie privée',
	'BOARD_PM_EXPLAIN'			=> 'Active ou désactive la messagerie privée pour tous les utilisateurs.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Les avatars sont généralement de petites et uniques images qu’un utilisateur peut associer à sa personnalité. Selon le style utilisé, ils sont habituellement affichés sous le nom d’utilisateur lorsque vous regardez les sujets. Ici, vous pouvez déterminer quels sont les utilisateurs qui peuvent définir leur avatar. Veuillez noter que pour transférer des avatars, vous devez avoir créé le répertoire que vous indiquerez ci-dessous et vous assurer qu’il puisse être accessible en écriture par le serveur Internet. Veuillez noter également que les limitations de taille sont imposées que pour les avatars transférés, elles ne s’appliquent pas aux images à distance.',

	'ALLOW_LOCAL'					=> 'Activer la galerie d’avatars',
	'ALLOW_REMOTE'					=> 'Activer les avatars à distance',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatars dont l’emplacement vient d’un autre site Internet.',
	'ALLOW_UPLOAD'					=> 'Activer le transfert d’avatars',
	'AVATAR_GALLERY_PATH'			=> 'Chemin de la galerie d’avatars',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Chemin depuis la racine de votre répertoire phpBB pour les images pré-chargées, ex. <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Chemin du stockage des avatars',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Chemin depuis la racine de votre répertoire phpBB, ex. <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Dimensions maximales des avatars',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Hauteur x Largeur en pixels.',
	'MAX_FILESIZE'					=> 'Taille maximale des avatars',
	'MAX_FILESIZE_EXPLAIN'			=> 'Pour les avatars transférés.',
	'MIN_AVATAR_SIZE'				=> 'Dimensions minimales des avatars',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Hauteur x Largeur en pixels.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Ici, vous pouvez modifier tous les réglages par défaut de la messagerie privée.',

	'ALLOW_BBCODE_PM'			=> 'Autoriser le BBCode dans les messages privés',
	'ALLOW_FLASH_PM'			=> 'Autoriser l’utilisation de la balise BBCode <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Notez que la capacité d’employer le flash dans les messages privés, si autorisée ici, dépend également des permissions.',
	'ALLOW_FORWARD_PM'			=> 'Autoriser la transmission de messages privés',
	'ALLOW_IMG_PM'				=> 'Autoriser l’utilisation de la balise BBCode <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Autoriser l’envoi de messages privés de masse à plusieurs utilisateurs et groupes',
	'ALLOW_PRINT_PM'			=> 'Autoriser l’impression les messages privés',
	'ALLOW_QUOTE_PM'			=> 'Autoriser les citations de messages privés',
	'ALLOW_SIG_PM'				=> 'Autoriser les signatures dans les messages privés',
	'ALLOW_SMILIES_PM'			=> 'Autoriser les smileys dans les messages privés',
	'BOXES_LIMIT'				=> 'Nombre de messages privés maximal par boîte',
	'BOXES_LIMIT_EXPLAIN'		=> 'Les utilisateurs ne peuvent pas recevoir de messages privés supplémentaires si leurs boîtes sont pleines. Réglez cette valeur à 0 pour autoriser un nombre illimité de messages privés par boîte.',
	'BOXES_MAX'					=> 'Nombre de boîtes de messages privés maximal',
	'BOXES_MAX_EXPLAIN'			=> 'Par défaut, les utilisateurs peuvent créer un grand nombre de boîtes de messages privés.',
	'ENABLE_PM_ICONS'			=> 'Activer l’utilisation d’icônes de sujets dans les messages privés',
	'FULL_FOLDER_ACTION'		=> 'Action par défaut lorsqu’une boîte est pleine',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Action par défaut à réaliser si une boîte d’un utilisateur est pleine, dans le cas où l’action spécifiée par l’utilisateur n’est pas applicable. La seule exception est pour la boîte “Messages envoyés” où l’action par défaut est de toujours supprimer les anciens messages.',
	'HOLD_NEW_MESSAGES'			=> 'Rejeter les nouveaux messages',
	'PM_EDIT_TIME'				=> 'Temps limite d’édition',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Temps limite disponible afin d’éditer les messages privés non délivrés. Le réglage de cette valeur à 0 désactive ce comportement.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Ici, vous pouvez régler tous les réglages par défaut pour la publication.',
	'ALLOW_POST_LINKS'					=> 'Autoriser les liens dans les messages et messages privés',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Si non autorisé, la balise BBCode <code>[URL]</code> BBCode et la mise en liens des URL automatique sont désactivées.',
	'ALLOW_POST_FLASH'					=> 'Autoriser l’utilisation de la balise BBCode <code>[FLASH]</code> dans les messages. ',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Si non autorisé, la balise BBCode <code>[FLASH]</code> sera désactivée dans les messages. Autrement, le système de permissions contrôlera que les utilisateurs peuvent utiliser la balise BBCode <code>[FLASH]</code>.',

	'BUMP_INTERVAL'					=> 'Intervalle du remontage de sujet',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Nombre de minutes, heures ou jours entre le dernier message d’un sujet et la possibilité de remonter ce sujet.',
	'CHAR_LIMIT'					=> 'Nombre de caractères maximal par message',
	'CHAR_LIMIT_EXPLAIN'			=> 'Le nombre de caractères autorisé dans un message. Réglez à 0 pour un nombre de caractères illimité.',
	'DISPLAY_LAST_EDITED'			=> 'Afficher l’information sur la dernière édition',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Choisissez si l’information sur la dernière édition doit être affichée dans les messages.',
	'EDIT_TIME'						=> 'Temps limite d’édition',
	'EDIT_TIME_EXPLAIN'				=> 'Limite de temps disponible pour éditer un nouveau message. Le réglage de cette valeur à 0 désactive ce comportement.',
	'FLOOD_INTERVAL'				=> 'Intervalle de “flood”',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Nombre de secondes qu’un utilisateur doit attendre avant de pouvoir publier de nouveaux messages. Pour autoriser les utilisateurs à ignorer ce réglage, veuillez modifier leurs permissions.',
	'HOT_THRESHOLD'					=> 'Seuil de popularité des sujets',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Nombre de messages requis afin qu’un sujet soit affiché comme étant populaire. Réglez à 0 pour désactiver les sujets populaires.',
	'MAX_POLL_OPTIONS'				=> 'Nombre maximal d’options par sondage',
	'MAX_POST_FONT_SIZE'			=> 'Taille maximale de la police dans les messages',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Taille maximale autorisée de la police dans un message. Réglez à 0 pour une taille illimitée.',
	'MAX_POST_IMG_HEIGHT'			=> 'Hauteur maximale des images dans les messages',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Hauteur maximale autorisée des images et fichiers flash dans les messages. Réglez à 0 pour une hauteur illimitée.',
	'MAX_POST_IMG_WIDTH'			=> 'Largeur maximale des images dans les messages',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Largeur maximale autorisée des images et fichiers flash dans les messages. Réglez à 0 pour une largeur illimitée.',
	'MAX_POST_URLS'					=> 'Nombre de liens maximal par message',
	'MAX_POST_URLS_EXPLAIN'			=> 'Nombre maximum d’URL dans un message. Réglez à 0 pour un nombre illimité de liens.',
	'POSTING'						=> 'Publication',
	'POSTS_PER_PAGE'				=> 'Messages par page',
	'QUOTE_DEPTH_LIMIT'				=> 'Citations imbriquées maximales par message',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Nombre maximum de citations imbriquées dans un message. Réglez à 0 pour un nombre illimité.',
	'SMILIES_LIMIT'					=> 'Nombre de smileys maximal par message',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Nombre maximal de smileys dans un message. Réglez à 0 pour un nombre illimité de smileys.',
	'TOPICS_PER_PAGE'				=> 'Sujets par page',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Ici, vous pouvez régler tous les réglages pour les signatures.',

	'MAX_SIG_FONT_SIZE'				=> 'Taille maximale de la police des signatures',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Taille maximale autorisée de la police dans les signatures des utilisateurs. Réglez à 0 pour une taille illimitée.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Hauteur maximale des images dans les signatures',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Hauteur maximale autorisée des images et fichiers flash dans les signatures des utilisateurs. Réglez à 0 pour une hauteur illimitée.',
	'MAX_SIG_IMG_WIDTH'				=> 'Largeur maximale des images dans les signatures',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Largeur maximale autorisée des images et fichiers flash dans les signatures des utilisateurs. Réglez à 0 pour une largeur illimitée.',
	'MAX_SIG_LENGTH'				=> 'Longueur maximale des signatures',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Nombre maximal de caractères autorisés dans les signatures des utilisateurs.',
	'MAX_SIG_SMILIES'				=> 'Nombre de smileys maximal par signature',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Nombre maximal de smileys autorisés dans les signatures des utilisateurs. Réglez à 0 pour un nombre illimité de smileys.',
	'MAX_SIG_URLS'					=> 'Nombre de liens maximal par signature',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Nombre maximal de liens dans les signatures des utilisateurs. Réglez à 0 pour un nombre illimité de liens.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Ici, vous pouvez définir les réglages relatifs aux inscriptions et aux profils des utilisateurs.',

	'ACC_ACTIVATION'			=> 'Activation du compte',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Cela détermine si les utilisateurs ont directement accès au forum ou si une confirmation est requise. Vous pouvez également désactiver complètement les nouvelles inscriptions.',
	'ACC_ADMIN'					=> 'Par un administrateur',
	'ACC_DISABLE'				=> 'Désactivée',
	'ACC_NONE'					=> 'Aucune',
	'ACC_USER'					=> 'Par l’utilisateur',
//	'ACC_USER_ADMIN'			=> 'Par l’utilisateur + un administrateur',
	'ALLOW_EMAIL_REUSE'			=> 'Autoriser les adresses e-mail à être réutilisées',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Différents utilisateurs peuvent s’inscrire avec la même adresse e-mail.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'Numéro de fax de la COPPA',
	'COPPA_MAIL'				=> 'Adresse e-mail de la COPPA',
	'COPPA_MAIL_EXPLAIN'		=> 'Ceci est l’adresse e-mail où les parents enverront les formulaires de la COPPA.',
	'ENABLE_COPPA'				=> 'Activer la COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Cela exige aux utilisateurs de déclarer qu’ils ont 13 ans ou plus afin d’être conforme à l’U.S. COPPA. Si cela est désactivé, les groupes spécifiques de la COPPA ne seront plus affichés. La COPPA n’est applicable qu’aux États-Unis d’Amérique et vous n’avez donc pas à l’activer dans les pays francophones.',
	'MAX_CHARS'					=> 'Max',
	'MIN_CHARS'					=> 'Min',
	'NO_AUTH_PLUGIN'			=> 'Aucun plugin d’authentification n’a été trouvé.',
	'PASSWORD_LENGTH'			=> 'Longueur du mot de passe',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Nombre minimal et maximal de caractères dans les mots de passe.',
	'REG_LIMIT'					=> 'Nombre de tentatives d’inscription',
	'REG_LIMIT_EXPLAIN'			=> 'Nombre de tentatives que les utilisateurs peuvent faire sur le code de confirmation avant que leur session n’expire.',
	'USERNAME_ALPHA_ONLY'		=> 'Alphanumérique seulement',
	'USERNAME_ALPHA_SPACERS'	=> 'Alphanumérique et espaces',
	'USERNAME_ASCII'			=> 'ASCII (aucun caractère unicode international)',
	'USERNAME_LETTER_NUM'		=> 'Tous chiffres et lettres',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Tous chiffres, lettres et espaces',
	'USERNAME_CHARS'			=> 'Limite de caractères du nom d’utilisateur',
	'USERNAME_CHARS_ANY'		=> 'Tous les caractères',
	'USERNAME_CHARS_EXPLAIN'	=> 'Restriction du type de caractères qui peuvent être utilisés dans les noms d’utilisateur, les espaces comprennent : espace, -, +, _, [ et ].',
	'USERNAME_LENGTH'			=> 'Longueur du nom d’utilisateur',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Nombre de caractères minimal et maximal dans les noms d’utilisateurs.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Ici, vous pouvez définir les réglages de la confirmation visuelle (ou CAPTCHA).',

	'CAPTCHA_GD'							=> 'CAPTCHA utilisant l’extension GD',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Bruit de premier plan',
	'CAPTCHA_GD_EXPLAIN'					=> 'Utiliser l’extension GD afin de rendre le CAPTCHA plus avancé.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Utiliser un bruit de premier plan afin de rendre le CAPTCHA basé sur l’extension GD plus difficile à déchiffrer par les robots.',
	'CAPTCHA_GD_X_GRID'						=> 'Bruit de fond sur l’axe des abscisses',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Utilisez de faibles réglages afin de rendre le CAPTCHA basé sur l’extension GD plus difficile à déchiffrer par les robots. 0 désactivera le bruit de fond sur l’axe des abscisses.',
	'CAPTCHA_GD_Y_GRID'						=> 'Bruit de fond sur l’axe des ordonnées',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Utilisez de faibles réglages afin de rendre le CAPTCHA basé sur l’extension GD plus difficile à déchiffrer par les robots. 0 désactivera le bruit de fond sur l’axe des ordonnées.',

	'CAPTCHA_PREVIEW_MSG'					=> 'Vos modifications pour le réglage de la confirmation visuelle n’ont pas été sauvegardés. Ceci est seulement un aperçu.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Le CAPTCHA tel qu’il ressemblera avec les réglages actuels. Utilisez le bouton précédent pour rafraîchir la page. Notez que ce CAPTCHA est aléatoire et sera différent d’une fois à l’autre.',
	'VISUAL_CONFIRM_POST'					=> 'Activer la confirmation visuelle pour les invités',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Oblige les utilisateurs anonymes à entrer un code aléatoire basé sur une image afin d’empêcher les publications de masse automatisées.',
	'VISUAL_CONFIRM_REG'					=> 'Activer la confirmation visuelle lors des inscriptions',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Oblige les nouveaux utilisateurs à entrer un code aléatoire basé sur une image afin d’empêcher les inscriptions automatisées.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Ces informations définissent les données utilisées à envoyer sous forme de cookies au navigateur de vos utilisateurs. Dans la plupart des cas, les valeurs par défaut des réglages des cookies devraient être suffisantes. Si vous avez besoin de les modifier, faites-le avec vigilance, des réglages incorrects peuvent empêcher les utilisateurs de se connecter.',

	'COOKIE_DOMAIN'				=> 'Domaine du cookie',
	'COOKIE_NAME'				=> 'Nom du cookie',
	'COOKIE_PATH'				=> 'Chemin du cookie',
	'COOKIE_SECURE'				=> 'Cookie sécurisé',
	'COOKIE_SECURE_EXPLAIN'		=> 'Si votre serveur fonctionne par l’intermédiaire d’SSL, réglez cela sur activé, sinon laissez-le désactivé. Si cela est activé et que vous ne fonctionnez pas par l’intermédiaire d’SSL, des erreurs sur votre serveur se produiront lors des redirections.',
	'ONLINE_LENGTH'				=> 'Durée d’apparition dans le “Qui est en ligne”',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Nombre de minutes après lequel les utilisateurs inactifs n’apparaîtront plus dans la liste du “Qui est en ligne ?”. Plus la valeur est grande, plus le traitement requis pour générer la liste sera long.',
	'SESSION_LENGTH'			=> 'Durée des sessions',
	'SESSION_LENGTH_EXPLAIN'	=> 'Les sessions expireront une fois cette durée écoulée, en secondes.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Ici, vous pouvez activer et désactiver certaines fonctionnalités du forum fin de réduire la quantité de traitement requise. Sur la plupart des serveurs, il n’y a pas besoin de désactiver ces fonctionnalités. Cependant, sur certains systèmes ou hébergements, il est préférable de désactiver certaines fonctionnalités dont vous n’avez pas réellement besoin. Vous pouvez également spécifier des limites pour la charge du système et les sessions actives au delà desquelles le forum sera désactivé.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Champs de profil personnalisés',
	'LIMIT_LOAD'					=> 'Charge maximale du système',
	'LIMIT_LOAD_EXPLAIN'			=> 'Si la charge du système durant la dernière minute dépasse cette valeur, le forum sera automatiquement désactivé. Une valeur de 1.0 équivaut à ~100% de l’utilisation d’un processeur. Cela ne fonctionne que sur des serveurs basés sur UNIX et où cette information est accessible. Cette valeur se réinitialise à 0 si phpBB n’arrive pas à obtenir la valeur de la charge.',
	'LIMIT_SESSIONS'				=> 'Nombre maximal de sessions',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Si le nombre de sessions dépasse cette valeur durant une minute, le forum sera désactivé. Réglez à 0 pour un nombre de sessions illimité.',
	'LOAD_CPF_MEMBERLIST'			=> 'Autoriser les styles à afficher les champs de profil personnalisés dans la liste des membres',
	'LOAD_CPF_VIEWPROFILE'			=> 'Afficher les champs de profil personnalisés dans les profils des utilisateurs',
	'LOAD_CPF_VIEWTOPIC'			=> 'Afficher les champs de profil personnalisés dans les pages des sujets',
	'LOAD_USER_ACTIVITY'			=> 'Afficher l’activité des utilisateurs',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Affiche les sujets et forums dans lesquels les utilisateurs ont le plus de messages dans leur profil et le panneau de contrôle de l’utilisateur. Il est recommandé de désactiver cette fonctionnalité sur les forums ayant plus d’un million de messages.',
	'RECOMPILE_STYLES'				=> 'Recompiler les composants de styles dépassés',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Vérifie les composants de styles mis à jour sur le système et les recompile.',
	'YES_ANON_READ_MARKING'			=> 'Activer le marqueur de sujets pour les invités',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Stocke l’information du statut lu/non-lu pour les invités. Si désactivé, les messages apparaîtront toujours tel que lus pour les invités.',
	'YES_BIRTHDAYS'					=> 'Activer la liste des anniversaires',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Si désactivé, la liste des anniversaires ne sera plus affichée. Pour que ce réglage prenne effet, la fonctionnalité des anniversaires doit être également activée.',
	'YES_JUMPBOX'					=> 'Activer l’affichage de l’accès rapide aux forums',
	'YES_MODERATORS'				=> 'Activer l’affichage des modérateurs',
	'YES_ONLINE'					=> 'Activer la liste des utilisateurs en ligne',
	'YES_ONLINE_EXPLAIN'			=> 'Afficher la liste des utilisateurs en ligne sur la page d’index, des forums et des sujets.',
	'YES_ONLINE_GUESTS'				=> 'Activer la liste des invités',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Autoriser l’affichage de la liste des invités sur la page des utilisateurs connectés.',
	'YES_ONLINE_TRACK'				=> 'Activer l’affichage de l’information en ligne/hors-ligne des utilisateurs',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Affiche la présence ou non des utilisateurs dans leur profil et les pages des sujets.',
	'YES_POST_MARKING'				=> 'Activer les sujets pointés',
	'YES_POST_MARKING_EXPLAIN'		=> 'Indique si l’utilisateur a posté sur un sujet.',
	'YES_READ_MARKING'				=> 'Activer le marquage des sujets par le serveur',
	'YES_READ_MARKING_EXPLAIN'		=> 'Stocke l’information du statut lu/non-lu dans la base de données plutôt que dans un cookie.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB supporte des plug-ins d’authentification, ou modules. Ceux-ci vous permettent de déterminer comment les utilisateurs sont authentifiés quand ils se connectent sur le forum. Par défaut trois plug-ins sont fournis : DB, LDAP et Apache. Toutes les méthodes n’exigent pas d’informations additionnelles donc remplissez les champs seulement s’ils sont appropriés à la méthode sélectionnée.',

	'AUTH_METHOD'				=> 'Sélectionner une méthode d’authentification',

	'APACHE_SETUP_BEFORE_USE'	=> 'Vous devez configurer l’authentification d’Apache avant de faire fonctionner phpBB avec cette méthode d’authentification. Gardez à l’esprit que le nom d’utilisateur que vous utilisez pour l’authentification d’Apache doit être le même que votre nom d’utilisateur phpBB. L’authentification d’Apache ne peut être utilisé que si mod_php (pas avec la version CGI) et safe_mode sont désactivés.',

	'LDAP_DN'						=> 'Base LDAP vers <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Ceci est le Nom Distingué (Distinguished Name), localisant les informations des utilisateurs, ex. <samp>o=Ma Compagnie,c=FR</samp>.',
	'LDAP_EMAIL'					=> 'Attribut de l’e-mail LDAP',
	'LDAP_EMAIL_EXPLAIN'			=> 'Réglez ceci le nom de l’attribut de l’e-mail d’entrée de votre utilisateur (si il existe) afin de régler automatiquement l’adresse e-mail pour les nouveaux utilisateurs. Laissez ceci vide pour que l’adresse e-mail soit vide lorsque les utilisateurs se connectent pour la première fois.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'La connexion au serveur LDAP a échouée avec le nom d’utilisateur/mot de passe spécifié.',
	'LDAP_NO_EMAIL'					=> 'L’attribut de l’e-mail spécifié n’existe pas.',
	'LDAP_NO_IDENTITY'				=> 'Impossible de trouver un identifiant de connexion pour %s.',
	'LDAP_PASSWORD'					=> 'Mot de passe LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Laissez vide pour utiliser une liaison anonyme. Sinon, complétez le mot de passe pour l’utilisateur ci-dessus. Obligatoire pour les Active Directory Servers. <strong>ATTENTION :</strong> Ce mot de passe sera stocké en texte brut dans la base de données, visible à tous ceux qui ont accès à votre base de données ou qui peuvent voir la page de configuration.',
	'LDAP_PORT'						=> 'Port du serveur LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'Si vous le souhaitez vous pouvez spécifier un port qui sera utilisé pour vous connecter au serveur LDAP sur un port autre que le port 389 utilisé par défaut.',
	'LDAP_SERVER'					=> 'Nom du serveur LDAP',
	'LDAP_SERVER_EXPLAIN'			=> 'Si vous utilisez LDAP, ceci est le nom d’hôte ou l’adresse IP du serveur LDAP. Alternativement, vous pouvez spécifier une URL comme ldap://hostname:port/',
	'LDAP_UID'						=> '<var>uid</var> de LDAP',
	'LDAP_UID_EXPLAIN'				=> 'Ceci est la clé avec laquelle vous pouvez rechercher un identifiant de connexion donné, ex. <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'Utilisateur <var>dn</var> LDAP',
	'LDAP_USER_EXPLAIN'				=> 'Laissez vide pour utiliser une liaison anonyme. Si renseigné dans phpBB, utilisez le nom distingué spécifié lors des tentatives de connexion afin de trouver l’utilisateur correct, par exemple <samp>uid=Nom,ou=MonUnité,o=MaCompagnie,c=FR</samp>. Obligatoire pour les Active Directory Servers.',
	'LDAP_USER_FILTER'				=> 'Filtre de l’utilisateur LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Optionellement, vous pouvez limiter les objets recherchés avec des filtres additionnels. Par exemple <samp>objectClass=posixGroup</samp> deviendra lors de l’utilisation <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Ici, vous pouvez définir les paramètres du serveur et de la personne s’occupant du domaine. Veuillez vous assurer que les données que vous entrez sont précises, des erreurs peuvent apparaître dans les e-mail si les informations sont incorrectes. Lorsque vous entrez le nom de domaine, souvenez-vous d’y inclure les protocoles comme <samp>http://</samp> ou autres. Modifiez le numéro de port seulement si vous savez que le serveur utiliser une valeur différente, le port 80 est correct dans la plupart des cas.',

	'ENABLE_GZIP'				=> 'Activer la compression GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'Le contenu généré sera compressé avant d’être envoyé aux utilisateurs. Cela peut réduire le traffic du réseau, mais cela augmentera également l’utilisation du processeur du côté du serveur et du client.',
	'FORCE_SERVER_VARS'			=> 'Forcer les réglages des URL du serveur',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Si réglé à oui, les réglages du serveur définis ici seront utilisés à la place des valeurs déterminées automatiquement.',
	'ICONS_PATH'				=> 'Chemin du stockage des icônes de messages',
	'ICONS_PATH_EXPLAIN'		=> 'Chemin depuis le répertoire racine de l’installation de phpBB, ex. <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Réglages des chemins des répertoires',
	'RANKS_PATH'				=> 'Chemin du stockage des images de rangs',
	'RANKS_PATH_EXPLAIN'		=> 'Chemin depuis le répertoire racine de l’installation de phpBB, ex. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Chemin du script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Le chemin où phpBB est installé par rapport au nom de domaine, ex. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Nom de domaine',
	'SERVER_NAME_EXPLAIN'		=> 'Le nom de domaine sur lequel votre serveur fonctionne (par exemple : <samp>www.domaine.tld</samp>).',
	'SERVER_PORT'				=> 'Port du serveur',
	'SERVER_PORT_EXPLAIN'		=> 'Le port sur lequel votre serveur fonctionne, habituellement 80, modifiez cela uniquement s’il est différent.',
	'SERVER_PROTOCOL'			=> 'Protocole du serveur',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Ceci est utilisé comme protocole de serveur. Si vide ou non obligatoire, le protocole est déterminé par les réglages des cookies sécurisés (<samp>http://</samp> ou <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Réglages des URL du serveur',
	'SMILIES_PATH'				=> 'Chemin du stockage des smileys',
	'SMILIES_PATH_EXPLAIN'		=> 'Chemin depuis le répertoire racine de l’installation de phpBB, ex. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Chemin du stockage des groupes d’icônes',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Chemin depuis le répertoire racine de l’installation de phpBB, ex. <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Ici, vous pouvez définir les réglages relatifs aux sessions et aux connexions.',

	'ALL'							=> 'Tous',
	'ALLOW_AUTOLOGIN'				=> 'Autoriser les connexions automatiques', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Détermine si les utilisateurs peuvent se connecter automatiquement lors de leur visite sur le forum.', 
	'AUTOLOGIN_LENGTH'				=> 'Durée d’expiration des clés de connexions automatiques (en jours)', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Nombre de jours après lequel les clés de connexions automatiques sont supprimées, ou zéro pour désactiver.', 
	'BROWSER_VALID'					=> 'Valider les navigateurs',
	'BROWSER_VALID_EXPLAIN'			=> 'Active la validation des navigateurs sur chaque session, ce qui améliore la sécurité.',
	'CHECK_DNSBL'					=> 'Vérifier les IP dans la liste noire des DNS',
	'CHECK_DNSBL_EXPLAIN'			=> 'Si activé, les adresses IP des utilisateurs sont vérifiées par les services DNSBL suivants lors de l’inscription et de la publication : <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> et <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Cette vérification peut prendre du temps, selon la configuration du serveur. Si vous remarquez des ralentissements ou des faux positifs, il est recommandé de désactiver cette vérification.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Vérifier les e-mail pour un enregistrement MX valide',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Si activé, le domaine de l’e-mail fourni lors de l’inscription et des modifications du profil est vérifié pour s’assurer qu’il possède un enregistrement MX valide.',
	'FORCE_PASS_CHANGE'				=> 'Forcer le changement des mots de passe',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Oblige les utilisateurs à modifier leur mot de passe après un certain nombre de jours. Le réglage de cette valeur à 0 désactive ce comportement.',
	'FORWARDED_FOR_VALID'			=> 'En-tête <var>X_FORWARDED_FOR</var> validé',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Les sessions continueront seulement si l’en-tête <var>X_FORWARDED_FOR</var> envoyé équivaut à celui envoyé lors de la requête précédente. Les bannissements vérifieront également pour chaque IP l’en-ête <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Validation de l’IP de session',
	'IP_VALID_EXPLAIN'				=> 'Détermine quelle partie de l’IP des utilisateurs sera utilisée pour valider une session : <samp>Tous</samp> compare l’adresse complète, <samp>A.B.C</samp> les premiers x.x.x, <samp>A.B</samp> les premiers x.x, <samp>Aucune</samp> désactive la vérification. Pour les adresses IPv6, <samp>A.B.C</samp> compare les 4 premiers blocs et <samp>A.B</samp> les 3 premiers.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Nombre maximal de tentatives de connexions',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Une fois ce nombre de tentatives infructueuses de connexions atteint, l’utilisateur devra confirmer en plus sa connexion avec un CAPTCHA.',
	'NO_IP_VALIDATION'				=> 'Aucune',
	'PASSWORD_TYPE'					=> 'Complexité du mot de passe',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Détermine la complexité requise pour les mots de passe, chaque option incluant les options précédentes.',
	'PASS_TYPE_ALPHA'				=> 'Doit contenir des lettres et des chiffres',
	'PASS_TYPE_ANY'					=> 'Aucun prérequis',
	'PASS_TYPE_CASE'				=> 'Doit contenir des majuscules et des minuscules',
	'PASS_TYPE_SYMBOL'				=> 'Doit contenir des symboles',
	'TPL_ALLOW_PHP'					=> 'Autoriser le PHP dans les templates',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Si cette option est activée, les instructions <code>PHP</code> et <code>INCLUDEPHP</code> seront reconnus et analysés dans les templates.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Cette information est utilisée lorsque le forum envoi des e-mail à vos utilisateurs. Veuillez vous assurer que l’adresse e-mail que vous avez spécifiée est valide, les messages refusés ou indélivrables seront probablement renvoyés à cette adresse. Si votre hébergeur ne fournit pas par défaut un service d’envoi d’e-mail (en PHP), vous pouvez envoyer directement des messages en utilisant SMTP. Cela requiert l’adresse d’un serveur approprié (demandez à votre hébergeur si nécessaire). Si le serveur requiert une authentification (et seulement dans ce cas), entrez le nom d’utilisateur, le mot de passe et la méthode d’authentification nécessaire.',

	'ADMIN_EMAIL'					=> 'Adresse e-mail de retour',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Ceci sera utilisé comme l’adresse de retour de tous les e-mail, c’est l’adresse e-mail du contact technique. Elle sera toujours utilisée comme l’adresse du <samp>Chemin de retour</samp> et de l’<samp>Expéditeur</samp> dans les e-mail.',
	'BOARD_EMAIL_FORM'				=> 'Envoi d’e-mail par les utilisateurs par l’intermédiaire du forum',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Au lieu d’afficher les adresses e-mail, les utilisateurs peuvent envoyer des e-mail par l’intermédiaire du forum.',
	'BOARD_HIDE_EMAILS'				=> 'Masquer les adresses e-mail',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Cette fonction garde les e-mail entièrement privés.',
	'CONTACT_EMAIL'					=> 'Adresse e-mail de contact',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Cette adresse sera utilisée lorsqu’un contact spécifique est nécessaire, ex. spam, erreur survenue, etc. Elle est toujours utilisée comme l’adresse de l’<samp>Expéditeur</samp> et du <samp>Chemin de retour</samp> dans les e-mail.',
	'EMAIL_FUNCTION_NAME'			=> 'Nom de la fonction e-mail',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'La fonction e-mail utilisée pour envoyer des e-mail par l’intermédiaire de PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Nombre d’e-mail envoyés en une passe',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Ceci est le nombre d’e-mail envoyés en une seule fois. Ce réglage est appliqué à la file d’attente de la messagerie interne ; réglez cette valeur à 0 si vous rencontrez des problèmes, tel que des avertissements de messages qui n’ont pas pu être délivrés.',
	'EMAIL_SIG'						=> 'Signature de l’e-mail',
	'EMAIL_SIG_EXPLAIN'				=> 'Ce texte sera inséré à tous les e-mail envoyés à partir du forum.',
	'ENABLE_EMAIL'					=> 'Autoriser l’envoi d’e-mail par le forum',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Si ce réglage est désactivé, aucun e-mail ne pourra être envoyé à partir du forum.',
	'SMTP_AUTH_METHOD'				=> 'Méthode d’authentification pour SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Seulement utilisé si un nom d’utilisateur et un mot de passe est réglé, demandez à votre hébergeur si vous n’êtes pas certain de la méthode à utiliser.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'CONNEXION',
	'SMTP_PASSWORD'					=> 'Mot de passe SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Entrez un mot de passe que si votre serveur SMTP le requiert.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Port du serveur SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'Modifiez cela seulement si vous savez que votre serveur SMTP utilise un port différent.',
	'SMTP_SERVER'					=> 'Adresse du serveur SMTP',
	'SMTP_SETTINGS'					=> 'Réglages SMTP',
	'SMTP_USERNAME'					=> 'Nom d’utilisateur SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'Entrez un nom d’utilisateur seulement si votre serveur SMTP le requiert.',
	'USE_SMTP'						=> 'Utiliser un serveur SMTP pour l’envoi d’e-mail',
	'USE_SMTP_EXPLAIN'				=> 'Sélectionnez “Oui” si vous souhaitez envoyer les e-mail par l’intermédiaire d’un serveur SMTP nommé à la place de la fonction e-mail locale.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Ici, vous pouvez activer et contrôler l’utilisation de Jabber pour l’envoi de messages instantanés et les informations du forum. Jabber est un protocole Open Source, et par conséquence libre d’utilisation par n’importe qui. Certains serveurs Jabber incluent des passerelles qui vous permettent de contacter des utilisateurs sur d’autres réseaux, mais tous les serveurs Jabber n’offrent pas cette possibilité. Veuillez vous assurer d’avoir déjà entré les informations du compte inscrit - phpBB utilisera les informations que vous avez entré ici comme tel.',

	'ERR_JAB_AUTH'			=> 'Impossible de s’authentifier sur le serveur Jabber.',
	'ERR_JAB_CONNECT'		=> 'Impossible de se connecter sur le serveur Jabber.',
	'JAB_ENABLE'				=> 'Activer Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Active l’utilisation de Jabber pour l’envoi de messages et d’avertissements.',
	'JAB_PACKAGE_SIZE'			=> 'Nombre de messages envoyés en une passe',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Ceci est le nombre de messages envoyés en une seule fois. Si réglé à 0, les messages seront envoyés immédiatement et ne seront pas placés en file d’attente.',
	'JAB_PASSWORD'				=> 'Mot de passe Jabber',
	'JAB_PORT'					=> 'Port Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Laissez vide, sauf si le port est différent de 5222.',
	'JAB_SERVER'				=> 'Serveur Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'Consultez %sjabber.org%s pour une liste de serveurs.',
	'JAB_SETTINGS_CHANGED'		=> 'Réglages Jabber modifiés avec succès.',
	'JAB_USE_SSL'				=> 'Utiliser SSL pour vous connecter',
	'JAB_USE_SSL_EXPLAIN'		=> 'Si activé, une connexion sécurisée essaiera d’être établie. Le port Jabber sera modifié en 5223 si le port 5222 est spécifié.',
	'JAB_USERNAME'				=> 'Nom d’utilisateur Jabber',
	'JAB_USERNAME_EXPLAIN'		=> 'Spécifiez un nom d’utilisateur inscrit. La validité du nom d’utilisateur ne sera pas vérifiée.',
));

?>
