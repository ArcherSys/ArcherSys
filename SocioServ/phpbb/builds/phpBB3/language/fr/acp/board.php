<?php
/**
*
* acp_board [Standard french]
*
* @package language
* @version $Id: board.php,v 1.92 2007/08/23 13:41:34 naderman Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/**
* CONTRIBUTORS
* Translation made by phpBB-fr.com and phpBB.biz Teams
* http://www.phpbb-fr.com
* http://www.phpbb.biz
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
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Ici, vous pouvez modifier les paramètres de base de votre forum, depuis le nom du site jusqu\'à la validation de l\'inscription par message privé.',
	'CUSTOM_DATEFORMAT'				=> 'Personnalisée',
	'DEFAULT_DATE_FORMAT'			=> 'Format de la date',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Le format de la date est le même que la fonction <code>date</code> de PHP',
	'DEFAULT_LANGUAGE'				=> 'Langue par défaut',
	'DEFAULT_STYLE'					=> 'Style par défaut',
	'DISABLE_BOARD'					=> 'Désactiver le forum',
	'DISABLE_BOARD_EXPLAIN'			=> 'Ceci va rendre le forum inaccessible à vos utilisateurs. Vous pouvez rentrer un message (255 caractères max.) pour leur en expliquer la raison.',
	'OVERRIDE_STYLE'				=> 'Annuler le style de l\'utilisateur',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Remplace le style de l\'utilisateur par le style par défaut.',
	'SITE_DESC'						=> 'Description du site',
	'SITE_NAME'						=> 'Nom du site',
	'SYSTEM_DST'					=> 'Activer l\'heure d\'été',
	'SYSTEM_TIMEZONE'				=> 'Fuseau horaire',
	'WARNINGS_EXPIRE'				=> 'Durée de l\'avertissement',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Nombre de jours avant que l\'avertissement ne disparaisse des paramètres de l\'utilisateur.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Ici, vous pouvez activer/désactiver certaines options du forum.',

	'ALLOW_ATTACHMENTS'			=> 'Autoriser les fichiers joints',
	'ALLOW_BIRTHDAYS'			=> 'Autorise les anniversaires',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Autorise la saisie des dates anniversaires et l\'affichage de l\'âge dans les profils. Notez que l\'affichage des anniversaires sur l\'index du forum est un réglage différent de celui-ci.',
	'ALLOW_BOOKMARKS'			=> 'Autoriser la mise en favoris des sujets',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Autorise les utilisateurs à mettre des sujets en favoris.',
	'ALLOW_BBCODE'				=> 'Autoriser les BBCodes',
	'ALLOW_FORUM_NOTIFY'		=> 'Autoriser la surveillance des forums',
	'ALLOW_NAME_CHANGE'			=> 'Autoriser les modifications de nom d\'utilisateur',
	'ALLOW_NO_CENSORS'			=> 'Autoriser la désactivation de la censure',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'L\'utilisateur peut désactiver la censure dans ses messages.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Autoriser les fichiers joints dans les messages privés',
	'ALLOW_SIG'					=> 'Autoriser les signatures',
	'ALLOW_SIG_BBCODE'			=> 'Autoriser les BBCodes dans les signatures',
	'ALLOW_SIG_FLASH'			=> 'Autoriser l\'utilisation du BBCode <code>[FLASH]</code> dans la signature',
	'ALLOW_SIG_IMG'				=> 'Autoriser l\'utilisation du BBCode <code>[IMG]</code> dans la signature',
	'ALLOW_SIG_LINKS'			=> 'Autoriser les liens dans les signatures',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Si non autorisé, le BBCode <code>[URL]</code> sera désactivé.',
	'ALLOW_SIG_SMILIES'			=> 'Autoriser les smileys dans les signatures',
	'ALLOW_SMILIES'				=> 'Autoriser les smileys',
	'ALLOW_TOPIC_NOTIFY'		=> 'Autoriser la surveillance des sujets',
	'BOARD_PM'					=> 'Messagerie privée',
	'BOARD_PM_EXPLAIN'			=> 'Activer ou désactiver la messagerie privée.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Les avatars sont de petites images choisies par un utilisateur pour le représenter. Selon le thème, ils sont en général affichés sous le nom d\'utilisateur lors de la visualisation des forums. Ici, vous pouvez choisir quelle méthode l\'utilisateur peut utiliser pour choisir son avatar. Dans le cas où vous autorisez l\'envoi d\'avatar, vous devez spécifier ci-dessous le nom du répertoire en question et vous assurer des droits en écriture de ce répertoire. Notez enfin que les limites de tailles d\'avatar envoyé sur le serveur ne concernent pas les avatars dont on aura fourni un lien externe.',

	'ALLOW_LOCAL'					=> 'Activer la galerie d\'avatars',
	'ALLOW_REMOTE'					=> 'Autoriser les avatars',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Autoriser les avatars liés à un autre site',
	'ALLOW_UPLOAD'					=> 'Autoriser l\'envoi d\'avatar',
	'AVATAR_GALLERY_PATH'			=> 'Répertoire de la galerie d\'avatars',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Chemin d\'accès au dossier d\'avatars depuis la racine de phpBB, exemple: <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Dossier de stockage des avatars',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Chemin d\'accès au dossier d\'avatars depuis la racine de phpBB, exemple: <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Dimensions maximales des avatars',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Hauteur x Largeur en pixels.',
	'MAX_FILESIZE'					=> 'Poids maximum de l\'avatar',
	'MAX_FILESIZE_EXPLAIN'			=> 'Poids maximum des avatars envoyés sur le serveur.',
	'MIN_AVATAR_SIZE'				=> 'Dimensions minimales de l\'avatar',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Hauteur x Largeur en pixels.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Ici, vous pouvez modifier tous les paramètres de la messagerie privée.',

	'ALLOW_BBCODE_PM'			=> 'Autoriser les BBCodes',
	'ALLOW_FLASH_PM'			=> 'Autoriser le BBCode <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Notez que si vous autorisez ici l\'utilisation du Flash dans les messages privés, cela dépendra également des permissions.',
	'ALLOW_FORWARD_PM'			=> 'Autoriser le transfert de message vers un autre utilisateur',
	'ALLOW_IMG_PM'				=> 'Autoriser le BBCode <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Autoriser l\'envoi de messages privés à plusieurs utilisateurs ou à un groupe complet en même temps',
	'ALLOW_PRINT_PM'			=> 'Autoriser la visualisation de l\'impression dans la messagerie privée',
	'ALLOW_QUOTE_PM'			=> 'Autoriser les citations dans les messages privés',
	'ALLOW_SIG_PM'				=> 'Autoriser les signatures dans les messages privés',
	'ALLOW_SMILIES_PM'			=> 'Autoriser les smileys dans les messages privés',
	'BOXES_LIMIT'				=> 'Nombre de messages maximum dans la messagerie privée',
	'BOXES_LIMIT_EXPLAIN'		=> 'Mettez "0" pour ne pas imposer de limite.',
	'BOXES_MAX'					=> 'Nombre maximum de dossiers',
	'BOXES_MAX_EXPLAIN'			=> 'Les utilisateurs peuvent créer autant de dossiers pour classer leurs messages.',
	'ENABLE_PM_ICONS'			=> 'Autoriser les icônes de sujet',
	'FULL_FOLDER_ACTION'		=> 'Que faire en cas de messagerie pleine?',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Sélectionnez l\'action à effectuer lorsqu\'un utilisateur reçoit un message privé mais que sa messagerie est pleine.',
	'HOLD_NEW_MESSAGES'			=> 'Rejeter les nouveaux messages',
	'PM_EDIT_TIME'				=> 'Temps limite d\'édition',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Temps après lequel on ne peut plus éditer un message privé quand il n\'a pas encore été délivré.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Vous pouvez définir tous les réglages par défaut pour les messages.',
	'ALLOW_POST_LINKS'					=> 'Autoriser les liens dans le messages',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Si interdit, la balise bbcode <code>[URL]</code> et les urls seront désactivées.',
	'ALLOW_POST_FLASH'					=> 'Autoriser le BBCode <code>[FLASH]</code>. ',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Si interdit, le BBCode <code>[FLASH]</code> sera désactivé. Autrement, le système de permission déterminera les membres pouvant utiliser le BBCode <code>[FLASH]</code>.',

	'BUMP_INTERVAL'					=> 'Intervalle de remontée de sujet',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Durée entre la date d\'écriture du dernier message et la possibilité de remonter le sujet.',
	'CHAR_LIMIT'					=> 'Nombre maximum de caractères par message',
	'CHAR_LIMIT_EXPLAIN'			=> 'Mettez "0" pour ne pas imposer de limite.',
	'DISPLAY_LAST_EDITED'			=> 'Afficher la raison de la dernière édition',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Afficher ou non la raison de l\'édition d\'un message.',
	'EDIT_TIME'						=> 'Temps limite d\'édition',
	'EDIT_TIME_EXPLAIN'				=> 'Durée d\'autorisation d\'édition du message après l\'avoir posté.',
	'FLOOD_INTERVAL'				=> 'Intervalle de flood',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Temps d\'attente entre le postage de 2 messages. Pour autoriser les utilisateurs à outrepasser ce temps, modifiez le dans leurs permissions.',
	'HOT_THRESHOLD'					=> 'Seuil de popularité des sujets',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Nombre de messages requis afin qu\'un sujet soit affiché comme étant populaire. Mettez "0" pour désactiver les sujets populaires.',
	'MAX_POLL_OPTIONS'				=> 'Nombre maximum d\'options de vote',
	'MAX_POST_FONT_SIZE'			=> 'Taille maximale de la police',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Mettez "0" pour ne pas imposer de limite.',
	'MAX_POST_IMG_HEIGHT'			=> 'Hauteur maximale d\'une image',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Hauteur maximale d\'un fichier image ou flash dans un message. Mettre "0" pour ne pas imposer de limite.',
	'MAX_POST_IMG_WIDTH'			=> 'Largeur maximale d\'une image',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Largeur maximale d\'un fichier image ou flash dans un message. Mettre "0" pour ne pas imposer de limite.',
	'MAX_POST_URLS'					=> 'Nombre maximum de liens',
	'MAX_POST_URLS_EXPLAIN'			=> 'Mettez "0" pour ne pas imposer de limite.',
	'POSTING'						=> 'Messages',
	'POSTS_PER_PAGE'				=> 'Messages par page',
	'QUOTE_DEPTH_LIMIT'				=> 'Nombre maximum de citations imbriquées',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Nombre maximum de citations imbriquées autorisées dans un message. Mettre "0" pour ne pas imposer de limite.',
	'SMILIES_LIMIT'					=> 'Nombre maximum de smileys par message',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Mettez "0" pour ne pas imposer de limite.',
	'TOPICS_PER_PAGE'				=> 'Sujets par page',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Ici, vous pouvez modifier les paramètres pour les signatures.',

	'MAX_SIG_FONT_SIZE'				=> 'Taille maximale de la police',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Taille de police maximale autorisée dans les signatures. Mettre "0" pour ne pas imposer de limite.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Hauteur maximale d\'une image',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Hauteur maximale d\'un fichier image ou flash dans la signature. Mettre "0" pour ne pas imposer de limite.',
	'MAX_SIG_IMG_WIDTH'				=> 'Largeur maximale d\'une image',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Largeur maximale d\'un fichier image ou flash dans la signature. Mettre "0" pour ne pas imposer de limite.',
	'MAX_SIG_LENGTH'				=> 'Longueur maximale de la signature',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Nombres de caractères maximum dans la signature.',
	'MAX_SIG_SMILIES'				=> 'Nombre maximum de smileys',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Nombre maximum de smileys dans les signatures. Mettre "0" pour ne pas imposer de limite.',
	'MAX_SIG_URLS'					=> 'Nombre maximum de liens',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Nombre maximum de liens hypertexte dans la signature. Mettre "0" pour ne pas imposer de limite.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Ici, vous pouvez modifier les paramètres relatifs à l\'inscription et aux profils d\'utilisateurs.',

	'ACC_ACTIVATION'			=> 'Activation du compte',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Définit si les utilisateurs ont accès au forum immédiatement après l\'enregistrement ou si leur compte doit être activé (soit par l\'utilisateur lui-même ou par un administrateur). Vous pouvez également désactiver les inscriptions temporairement.',
	'ACC_ADMIN'					=> 'Par l\'administrateur',
	'ACC_DISABLE'				=> 'Désactiver',
	'ACC_NONE'					=> 'Aucun',
	'ACC_USER'					=> 'Par l\'utilisateur',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Partage des adresses e-mail',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Si "Oui", plusieurs utilisateurs peuvent s\'enregistrer avec la même adresse e-mail.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'Numéro de fax COPPA',
	'COPPA_MAIL'				=> 'Adresse e-mail COPPA',
	'COPPA_MAIL_EXPLAIN'		=> 'Adresse e-mail où les parents envoient les formulaires COPPA.',
	'ENABLE_COPPA'				=> 'Activer la COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Nécessite de déclarer si les utilisateurs inscrits ont 13 ans ou plus en accord avec la COPPA. Si ce réglage est désactivé, les groupes COPPA ne seront plus affichés.',
	'MAX_CHARS'					=> 'Max',
	'MIN_CHARS'					=> 'Min',
	'NO_AUTH_PLUGIN'			=> 'Aucun module d\'authentification trouvé.',
	'PASSWORD_LENGTH'			=> 'Longueur du mot de passe',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Nombre de caractères minimum et maximum dans le mot de passe.',
	'REG_LIMIT'					=> 'Tentatives d\'inscription',
	'REG_LIMIT_EXPLAIN'			=> 'Nombre de tentatives de saisie du code visuel avant d\'être exclu pour la session.',
	'USERNAME_ALPHA_ONLY'		=> 'Alphanumérique',
	'USERNAME_ALPHA_SPACERS'	=> 'Alphanumérique et spacers',
	'USERNAME_ASCII'			=> 'ASCII (aucun caractère unicode international)',
	'USERNAME_LETTER_NUM'		=> 'Tous chiffres et lettres',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Tous chiffres, lettres et espaces',
	'USERNAME_CHARS'			=> 'Restriction des caractéristiques du nom d\'utilisateur',
	'USERNAME_CHARS_ANY'		=> 'N\'importe quel caractère',
	'USERNAME_CHARS_EXPLAIN'	=> 'Restriction du type de caractères utilisables dans les noms d\'utilisateurs, les caractères "spacers" sont ;, espace, -, +, _, [ et ].',
	'USERNAME_LENGTH'			=> 'Longueur du nom d\'utilisateur',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Nombre de caractères minimum et maximum dans le nom d\'utilisateur.',));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Ici, vous pouvez définir les réglages de la confirmation visuelle et les réglages de <a target="_blank" href="http://fr.wikipedia.org/wiki/Captcha">Captcha</a>.',

	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD CAPTCHA avec bruit de fond',
	'CAPTCHA_GD_EXPLAIN'					=> 'Utilise GD pour un CAPTCHA plus avancé.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Utiliser un bruit de fond pour faire une CAPTCHA plus difficile à déchiffrer par les robots.',
	'CAPTCHA_GD_X_GRID'						=> 'GD CAPTCHA avec bruit de fond x-axis',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Utiliser le paramètre ci-dessous pour rendre la confirmation visuelle plus difficile à déchiffrer. "0" désactive le bruit de fond x-axis.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD CAPTCHA avec bruit de fond y-axis',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Utiliser le paramètre ci-dessous pour rendre la confirmation visuelle plus difficile à déchiffrer. "0" désactive le bruit de fond y-axis.',

	'CAPTCHA_PREVIEW_MSG'					=> 'Vos modifications pour les paramètres de la confirmation visuelle n\'ont pas été sauvegardées. Ceci est juste un aperçu.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Voici la CAPTCHA telle qu\'elle va apparaître avec vos paramètres actuels. Utiliser le bouton précédent pour rafraîchir. Notez que les CAPTCHA sont aléatoires et différents d\'un membre à l\'autre.',
	'VISUAL_CONFIRM_POST'					=> 'Activer la confirmation visuelle pour les visiteurs',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Oblige les utilisateurs invités à saisir un code aléatoire correspondant à une image pour pouvoir poster un message.',
	'VISUAL_CONFIRM_REG'					=> 'Activer la confirmation visuelle pour les inscriptions',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Oblige les nouveaux utilisateurs à saisir un code aléatoire correspondant à une image pour valider les inscriptions.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Informations permettant d\'envoyer des cookies. Dans la majorité des cas, les valeurs par défaut suffisent. Attention en cas de modification, des paramètres incorrects peuvent empêcher la connexion des membres.',

	'COOKIE_DOMAIN'				=> 'Domaine des cookies',
	'COOKIE_NAME'				=> 'Nom des cookies',
	'COOKIE_PATH'				=> 'Chemin de cookie',
	'COOKIE_SECURE'				=> 'Cookie sécurisé',
	'COOKIE_SECURE_EXPLAIN'		=> 'Ne fonctionne que si votre serveur gère le protocole SSL. Si vous l\'activez et que votre serveur ne gère pas le protocole SSL, des erreurs se produiront lors des redirections.',
	'ONLINE_LENGTH'				=> 'Voir la durée de connexion',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Durée après laquelle les utilisateurs inactifs sont déconnectés, une valeur basse est recommandée.',
	'SESSION_LENGTH'			=> 'Durée de la session',
	'SESSION_LENGTH_EXPLAIN'	=> 'Les sessions expirent après cette durée, en secondes.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Vous pouvez désactiver certaines fonctions pour réduire le temps processeur utilisé. Sur la plupart des serveurs, c\'est inutile. Cela peut cependant être utile de désactiver ce qui n\'est pas nécessaire sur des serveurs mutualisés. Vous pouvez spécifier une limite de charge au-delà de laquelle les forums se déconnectent.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Champs de profil personnalisés',
	'LIMIT_LOAD'					=> 'Limiter la charge système',
	'LIMIT_LOAD_EXPLAIN'			=> 'Si la charge d\'une minute dépasse cette valeur les forums seront déconnectés, 1.0 signifie approximativement 100% de l\'utilisation d\'un processeur. Ne fonctionne que sur les serveurs UNIX.',
	'LIMIT_SESSIONS'				=> 'Nombre de sessions',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Si le nombre de connexions par minute dépasse cette valeur, le forum sera désactivé. Mettez "0" pour illimité.',
	'LOAD_CPF_MEMBERLIST'			=> 'Afficher des champs personnalisés dans la liste des membres',
	'LOAD_CPF_VIEWPROFILE'			=> 'Afficher des champs personnalisés dans le profil public de l\'utilisateur',
	'LOAD_CPF_VIEWTOPIC'			=> 'Afficher des champs personnalisés dans la lecture des sujets',
	'LOAD_USER_ACTIVITY'			=> 'Afficher l\'activité des utilisateurs',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Affiche les sujets/forums actifs sur les cartes de visites et dans les préférences. Il est recommandé de supprimer cette option pour les forums de plus d\'un million de messages.',
	'RECOMPILE_STYLES'				=> 'Recompiler les différents éléments du style',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Cherche les nouvelles mises à jour du style et les recompile.',
	'YES_ANON_READ_MARKING'			=> 'Activer l\'indicateur de lecture pour les visiteurs',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Enregistre l\'état de lecture pour les visiteurs. Si désactivé, les contributions sont toujours considérées comme lues pour les visiteurs.',
	'YES_BIRTHDAYS'					=> 'Affichage de la liste des anniversaires',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Si désactivé, la liste des anniversaires ne sera plus affichée. Ce réglage n\'est pris en compte que si la fonctionnalité des anniversaires est également activée.',
	'YES_JUMPBOX'					=> 'Affichage de l\'accès rapide aux forums',
	'YES_MODERATORS'				=> 'Affichage des modérateurs',
	'YES_ONLINE'					=> 'Affichage de la liste des membres en ligne',
	'YES_ONLINE_EXPLAIN'			=> 'Affiche ces informations sur l\'accueil, dans les forums et sujets.',
	'YES_ONLINE_GUESTS'				=> 'Affichage des visiteurs dans "Qui est en ligne"',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Affiche les informations concernant les visiteurs dans "Qui est en ligne".',
	'YES_ONLINE_TRACK'				=> 'Affichage de l\'état de connexion',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Affiche dans le profil public et les sujets le statut de l\'utilisateur.',
	'YES_POST_MARKING'				=> 'Activer les sujets publiés',
	'YES_POST_MARKING_EXPLAIN'		=> 'Indique si le membre a participé au sujet.',
	'YES_READ_MARKING'				=> 'Sujets cochés par le serveur',
	'YES_READ_MARKING_EXPLAIN'		=> 'Enregistre l\'état lu/non lu dans la base plutôt que dans un cookie.',));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB utilise des modules d\'authentification. Ils déterminent la manière de s\'authentifier pour accéder aux forums. Trois modules sont fournis en standard; DB, LDAP et Apache. Toutes les méthodes ne nécessitent pas d\'informations supplémentaires, ne saisissez donc que les informations concernant votre méthode.',

	'AUTH_METHOD'				=> 'Méthode d\'authentification',

	'APACHE_SETUP_BEFORE_USE'	=> 'Vous devez configurer l\'authentification apache avant que phpBB ne puisse l\'utiliser. Gardez en tête que le pseudonyme utilisé pour l\'authentification Apache est identique à votre pseudonyme phpBB.',

	'LDAP_DN'						=> '<var>DN</var> de la base LDAP',
	'LDAP_DN_EXPLAIN'				=> '<var>DN</var> est le "Distinguished Name", il situe les informations utilisateurs, exemple: <samp>o=Mon entreprise, c=FR</samp>.',
	'LDAP_EMAIL'					=> 'Attribut adresse LDAP',
	'LDAP_EMAIL_EXPLAIN'			=> 'Nom de l\'entrée d\'attribut d\'adresse électronique (s\'il existe) pour définir automatiquement l\'adresse électronique des nouveaux utilisateurs. Le laisser vide donnera une adresse vide pour les utilisateurs se connectant pour la première fois.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'La connexion au serveur LDAP a échoué avec les login/mot de passe spécifiés.',
	'LDAP_NO_EMAIL'					=> 'Cet attribut d\'adresse électronique n\'existe pas.',
	'LDAP_NO_IDENTITY'				=> 'Impossible de trouver un identifiant de connexion pour %s',
	'LDAP_PASSWORD'					=> 'Mot de passe LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Laissez vide pour un accès invité. Sinon, indiquez le mot de passe de connexion. Requis pour les serveurs possédant un Active Directory. <strong>ATTENTION:</strong> Ce mot de passe sera stocké en clair dans votre de base de données et sera, par conséquent, visible par n\'importe qui ayant accès à votre base ou à cette page de configuration.',
	'LDAP_PORT'						=> 'Port du serveur LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'Sur option, vous pouvez indiquer un port qui devrait être employé pour se relier au serveur LDAP au lieu du port 389 par défaut.',
	'LDAP_SERVER'					=> 'Nom du serveur LDAP',
	'LDAP_SERVER_EXPLAIN'			=> 'Nom ou IP du serveur LDAP éventuel. Vous pouvez également spécifier une URL du type ldap://hostname:port/',
	'LDAP_UID'						=> 'Identifiant LDAP',
	'LDAP_UID_EXPLAIN'				=> 'Clé utilisée pour la recherche d\'un identifiant de connexion, exemple: <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'Utilisateur LDAP <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Laissez vide pour utiliser un accès invité. Si renseigné dans phpBB, il se connectera au serveur LDAP en tant qu\'un utilisateur spécifié, exemple: <samp>uid=Utilisateur,ou=MonUnité,o=MaCompagnie,c=FR</samp>. Requis pour les serveurs possédant un Active Directory.',
	'LDAP_USER_FILTER'				=> 'Filtre de l\'utilisateur LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Sur option, vous pouvez en plus limiter les objets recherchés avec des filtres additionnels. Par exemple <samp>objectClass=posixGroup</samp> aurait comme conséquence l\'utilisatiuon de <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Ici, vous pouvez modifier les paramètres de domaine et de serveur. Vérifiez la précision des données saisies, afin d\'éviter que vos messages électroniques ne contiennent des données erronées. Le nom de domaine doit contenir http:// ou une autre information de protocole. Ne modifiez ce réglage que si votre serveur n\'utilise pas la valeur standard, 80 fonctionne dans la majorité des cas.',

	'ENABLE_GZIP'				=> 'Activer la compression GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'Le contenu généré sera compressé avant d\'être envoyé à l\'utilisateur. Cela peut réduire le trafic mais également augmenter l\'utilisation du CPU à la fois du côté serveur et client.',
	'FORCE_SERVER_VARS'			=> 'Forcer les réglages URL du serveur',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Si mis à "Oui" les réglages définis ici seront utilisés à la place des valeurs déterminées automatiquement.',
	'ICONS_PATH'				=> 'Emplacement des icônes',
	'ICONS_PATH_EXPLAIN'		=> 'Chemin depuis la racine de phpBB, exemple: <samp>images/icons</samp>',
	'PATH_SETTINGS'				=> 'Chemins d\'accès',
	'RANKS_PATH'				=> 'Emplacement des images des rangs',
	'RANKS_PATH_EXPLAIN'		=> 'Chemin depuis la racine de phpBB, exemple: <samp>images/ranks</samp>',
	'SCRIPT_PATH'				=> 'Chemin du script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Chemin d\'accès où sont situés les fichiers phpBB depuis la racine de votre site. exemple: <samp>/phpBB3</samp>',
	'SERVER_NAME'				=> 'Nom de domaine',
	'SERVER_NAME_EXPLAIN'		=> 'Nom de domaine du serveur exécutant phpBB. (par exemple: <samp>www.domaine.com</samp>)',
	'SERVER_PORT'				=> 'Port du serveur',
	'SERVER_PORT_EXPLAIN'		=> 'Port utilisé par le serveur, normalement 80.',
	'SERVER_PROTOCOL'			=> 'Protocole du serveur',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Utilisé comme protocole du serveur si les réglages sont forcés. Si vide ou non forcé le protocole à utiliser est déterminé par le réglage des cookies sécurisés. (<samp>http://</samp> ou <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'		=> 'Réglages URL du serveur',
	'SMILIES_PATH'				=> 'Emplacement des smileys',
	'SMILIES_PATH_EXPLAIN'		=> 'Chemin depuis la racine de phpBB, exemple: <samp>images/smilies</samp>',
	'UPLOAD_ICONS_PATH'			=> 'Emplacement des icônes de pièces jointes',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Chemin depuis la racine de phpBB, exemple: <samp>images/upload_icons</samp>',
	));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Ici, vous pouvez définir les réglages relatifs à l\'identification et à la session.',

	'ALL'							=> 'Tous',
	'ALLOW_AUTOLOGIN'				=> 'Autorise les connexions automatiques',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Détermine si les utilisateurs peuvent être connectés automatiquement à chaque visite des forums.',
	'AUTOLOGIN_LENGTH'				=> 'Expiration des connexions automatiques (en jours)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Nombre de jours après lequel les clés de connexions automatiques sont retirées ou mettez "0" pour rendre le nombre de jours illimité.',
	'BROWSER_VALID'					=> 'Valider le navigateur',
	'BROWSER_VALID_EXPLAIN'			=> 'Vérification du navigateur pour améliorer la sécurité.',
	'CHECK_DNSBL'					=> 'Comparer l\'IP avec la liste noire DNS',
	'CHECK_DNSBL_EXPLAIN'			=> 'Si actif, l\'IP est comparée par les services DNSBL lors de l\'inscription et des contributions: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> et <a href="http://wwww.spamhaus.org">www.spamhaus.org</a>. Cette vérification peut prendre un moment, selon la configuration des serveurs. Si vous remarquez des ralentissements ou de trop nombreux faux positifs il est recommandé de désactiver la vérification.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Vérifier l\'e-mail pour un enregistrement MX valide',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Si activé, le domaine de l\'e-mail fourni lors de l\'inscription et des modifications de profil est contrôlé, pour s\'assurer qu\'il possède un enregistrement MX valide.',
	'FORCE_PASS_CHANGE'				=> 'Forcer la modification du mot de passe',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Impose à l\'utilisateur de modifier son mot de passe après une certaine durée en jours. Mettre "0" pour désactiver cette fonctionnalité.',
	'FORWARDED_FOR_VALID'			=> 'Entête <var>X_FORWARDED_FOR</var> validée',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Les sessions seront seulement continuées si l\'entête <var> X_FORWARDED_FOR </var> envoyée est égale à celle  envoyée avec la demande précédente. Les "bans" seront vérifiées via les IPs dans <var> X_FORWARDED_FOR </var> aussi.',

	'IP_VALID'						=> 'Validation de session IP',
	'IP_VALID_EXPLAIN'				=> 'Détermine quelle partie de l\'IP des utilisateurs sera utilisée pour valider une session : <samp>Tout</samp> compare l\'adresse complète, <samp>A.B.C</samp> les premiers x.x.x, <samp>A.B</samp> les premiers x.x, <samp>Aucun</samp> désactive la vérification. Pour les adresses IPv6, <samp>A.B.C</samp> compare les 4 premiers blocs et <samp>A.B</samp> les 3 premiers.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Nombre maximal de tentatives de connexion',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Après ce nombre d\'échec l\'utilisateur devra procéder à une nouvelle confirmation visuelle.',
	'NO_IP_VALIDATION'				=> 'Aucune',
	'PASSWORD_TYPE'					=> 'Complexité du mot de passe',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Détermine la complexité requise pour définir ou modifier un mot de passe, les options successives incluent les précédentes.',
	'PASS_TYPE_ALPHA'				=> 'Doit contenir des lettres et des chiffres',
	'PASS_TYPE_ANY'					=> 'Saisie libre',
	'PASS_TYPE_CASE'				=> 'Doit contenir des min et maj',
	'PASS_TYPE_SYMBOL'				=> 'Doit contenir des symboles',
	'TPL_ALLOW_PHP'					=> 'Autorise le php dans les modèles',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Si cette option est activée, les instructions <code>PHP</code> et <code>INCLUDEPHP</code> seront reconnues et analysées.',
	));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Cette information est utilisée pour l\'envoi de courriers électroniques. Vérifiez la validité de l\'adresse spécifiée car les messages refusés ou indélivrables y seront renvoyés. Si votre fournisseur d\'hébergement ne fournit pas nativement un service d\'envoi d\'e-mails, (via PHP) vous pouvez envoyer directement les messages en utilisant SMTP. Vous devrez indiquer l\'adresse du serveur approprié (contactez votre fournisseur d\'hébergement si besoin). Si le serveur nécessite une authentification (et seulement dans ce cas) entrez le nom d\'utilisateur, le mot de passe et la méthode d\'authentification nécessaire.',

	'ADMIN_EMAIL'					=> 'Adresse e-mail de l\'administrateur',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Cette adresse servira d\'adresse de réponse aux e-mails envoyés.',
	'BOARD_EMAIL_FORM'				=> 'Messagerie e-mail via le forum',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Au lieu de montrer publiquement les adresses e-mails des utilisateurs, cette fonction permet d\'envoyer des e-mails via le forum.',
	'BOARD_HIDE_EMAILS'				=> 'Masquer les adresses électroniques',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Cette fonction préserve les adresses électroniques privées.',
	'CONTACT_EMAIL'					=> 'E-mail de contact',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Adresse utilisée lorsqu\'un contact particulier est nécessaire, exemple: spam, erreur survenue, etc. Elle est toujours utilisée comme adresse de l\'<samp>Expéditeur</samp> et <samp>adresse de réponse</samp> dans les e-mails.',
	'EMAIL_FUNCTION_NAME'			=> 'Nom de la fonction mail',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Fonction utilisée pour envoyer des courriers via PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Taille des piles d\'e-mails',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Nombre d\'e-mails envoyés en une fois. Cette option est appliquée à la file d\'attente des messages; Mettre "0" si vous rencontrez des problèmes, tel que des avertissements de messages qui n\'ont pas été délivrés.',
	'EMAIL_SIG'						=> 'Signature de l\'e-mail',
	'EMAIL_SIG_EXPLAIN'				=> 'Ce texte sera joint à tous les e-mails envoyés.',
	'ENABLE_EMAIL'					=> 'Autoriser l\'envoi d\'e-mail via le forum',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Si désactivé, aucun courrier ne sera envoyé par phpBB.',
	'SMTP_AUTH_METHOD'				=> 'Méthode d\'authentification SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'N\'utilisez la méthode d\'authentification que si un nom d\'utilisateur/mot de passe est requis. Contactez votre fournisseur d\'accès pour plus de renseignements.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'Nom d\'utilisateur',
	'SMTP_PASSWORD'					=> 'Mot de passe SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'N\'entrez un mot de passe que si votre serveur SMTP en requiert un.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-AVANT-SMTP',
	'SMTP_PORT'						=> 'Port du serveur SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'N\'entrez un port différent que si vous êtes certain que votre serveur SMTP l\'utilise.',
	'SMTP_SERVER'					=> 'Adresse du serveur SMTP',
	'SMTP_SETTINGS'					=> 'Paramètres SMTP',
	'SMTP_USERNAME'					=> 'Nom d\'utilisateur SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'N\'entrez un nom d\'utilisateur que si votre serveur SMTP en requiert un.',
	'USE_SMTP'						=> 'Utiliser un serveur SMTP pour l\'envoi d\'e-mails',
	'USE_SMTP_EXPLAIN'				=> 'Choisissez “oui” pour envoyer les courriers par l\'intermédiaire d\'un serveur au lieu d\'utiliser la fonction mail.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Ici, vous pouvez activer et contrôler l\'utilisation de Jabber pour la messagerie instantanée et les notifications pour les forums. Jabber est un protocole open-source et donc librement utilisable. Certains serveurs Jabber contiennent des passerelles vers d\'autres réseaux. Tous les serveurs ne gèrent pas tous les réseaux. Ces passerelles peuvent cesser de fonctionner si le protocole d\'un service change. Merci d\'indiquer les informations d\'un nom d\'utilisateur inscrit - phpBB utilisera les informations indiquées telles quelles.',

	'ERR_JAB_AUTH'			=> 'Impossible de s\'authentifier sur le serveur Jabber.',
	'ERR_JAB_CONNECT'		=> 'Impossible de se connecter au serveur Jabber.',
	'JAB_ENABLE'				=> 'Activer le service Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Active la messagerie et les notes Jabber.',
	'JAB_PACKAGE_SIZE'			=> 'Taille des paquets Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Nombre de messages envoyés en une opération. Si mis à "0", le message est envoyé immédiatement et ne sera pas placé en file d\'attente.',
	'JAB_PASSWORD'				=> 'Mot de passe Jabber',
	'JAB_PORT'					=> 'Port Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Ne pas modifier sauf si ce n\'est pas le port 5222.',
	'JAB_SERVER'				=> 'Serveur Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'Aller voir %sjabber.org%s pour la liste des serveurs.',
	'JAB_SETTINGS_CHANGED'		=> 'Les paramètres Jabber ont été modifiés.',
	'JAB_USE_SSL'				=> 'Utiliser SSL pour se connecter',
	'JAB_USE_SSL_EXPLAIN'		=> 'Si activé, une connexion sécurisée tentera d\'être établie. Le port de Jabber sera modifié en 5223, si le port 5222 est utilisé.',
	'JAB_USERNAME'				=> 'Nom d\'utilisateur Jabber',
	'JAB_USERNAME_EXPLAIN'		=> 'Indiquez un nom d\'utilisateur inscrit. La validité du nom d\'utilisateur ne sera pas vérifié.',
));

?>