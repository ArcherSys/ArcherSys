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
* help_faq [French]
*
* @package language
* @version $Id: help_faq.php,v 1.41 2007/08/19 14:08:26 naderman Exp $
* @translation $Id: help_faq.php,v 1.41 2007/08/20 01:15:14 xaphos Exp $
* @copyright (c) 2005 phpBB Group and (c) 2007 GeeksOnline.fr
* @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
*
*/

/**
*/

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

$help = array(
	array(
		0 => '--',
		1 => 'Problèmes de connexion et d’inscription'
	),
	array(
		0 => 'Pourquoi ne puis-je pas me connecter ?',
		1 => 'Il y a plusieurs raisons qui peuvent expliquer cela. Premièrement, assurez-vous que votre nom d’utilisateur et votre mot de passe soient corrects. S’ils le sont, contactez le propriétaire du forum pour vous assurer de ne pas avoir été banni. Il est également possible que le propriétaire du site Internet ait une erreur de configuration de son côté, et qu’il soit nécessaire de la corriger.'
	),
	array(
		0 => 'Pourquoi ai-je besoin de m’inscrire, après tout ?',
		1 => 'Vous pouvez ne pas le faire, il appartient à l’administrateur du forum d’exiger ou non que vous soyez inscrit afin de pouvoir publier des messages. Cependant, l’inscription vous donnera un accès à des fonctionnalités supplémentaires qui ne sont pas disponibles aux visiteurs, comme les avatars personnalisés, la messagerie privée, l’envoi d’e-mail aux autres utilisateurs, l’abonnement à un groupe d’utilisateurs, etc. Cela ne vous prend qu’un court instant et nous vous recommandons par conséquence de le faire.'
	),
	array(
		0 => 'Pourquoi suis-je déconnecté automatiquement ?',
		1 => 'Si vous ne cochez pas la case <em>Me connecter automatiquement</em> lors de votre connexion au forum, vous ne resterez connecté que pour une période prédéfinie. Cette prévention empêche l’utilisation de votre compte par une personne malveillante. Pour rester connecté, cochez cette case lors de votre connexion, mais ce n’est pas recommandé si vous accédez au forum par un ordinateur partagé, par exemple dans une librairie, un cybercafé, une université, etc. Si vous ne voyez pas cette case à cocher, cela signifie que votre administrateur a désactivé cette fonctionnalité.'
	),
	array(
		0 => 'Comment puis-je empêcher l’apparition de mon nom d’utilisateur dans la liste des utilisateurs en ligne ?',
		1 => 'Dans le Panneau de Contrôle de l’Utilisateur, sous “Préférences du forum”, vous trouverez une option <em>Masquer votre statut en ligne</em>, si vous activez cette option avec <samp>Oui</samp>, vous ne serez visible qu’aux administrateurs, modérateurs ou par vous-même. Vous serez compté comme un utilisateur invisible.'
	),
	array(
		0 => 'J’ai perdu mon mot de passe !',
		1 => 'Pas de panique ! Bien que votre mot de passe ne puisse pas être récupéré, il peut facilement être réinitialisé. Allez sur la page de connexion et cliquez sur <em>J’ai perdu mon mot de passe</em>. Suivez les instructions et vous devriez pouvoir vous connecter de nouveau.'
	),
	array(
		0 => 'Je suis inscrit mais ne peux pas me connecter !',
		1 => 'Premièrement, vérifiez votre nom d’utilisateur et votre mot de passe. S’ils sont corrects, alors une des deux choses suivantes a pu s’être produite. Si le support de la COPPA est activé et que vous indiquiez avoir en dessous de 13 ans pendant l’inscription, vous devrez suivre les instructions que vous avez reçues. Certains forums exigeront également que les nouvelles inscriptions doivent être activées, par vous-même ou par un administrateur, avant que vous puissiez ouvrir une session ; cette information était affichée pendant l’inscription. Si un e-mail vous a déjà été envoyé, suivez les instructions. Si vous n’avez pas reçu d’e-mail, vous avez pu avoir fourni une adresse e-mail incorrecte ou l’e-mail a pu avoir été considéré comme un “spam”. Si vous êtes certain que l’adresse de e-mail fournie est correcte, essayez de contacter un administrateur.'
	),
	array(
		0 => 'Je m’étais déjà inscrit mais ne peux plus me connecter à présent ?!',
		1 => 'Essayez de retrouver l’e-mail qui vous a été envoyé lorsque vous vous êtes inscrit pour la première fois, vérifiez votre nom d’utilisateur et votre mot de passe et réessayez. Il est possible qu’un administrateur ait désactivé ou ait supprimé votre compte pour une certaine raison. Beaucoup de forums suppriment périodiquement les utilisateurs qui n’ont rien publiés depuis un certain moment afin de réduire la taille de la base de données. Si c’est le cas, inscrivez-vous à nouveau et essayez de participer plus activement dans les discussions.',
	),
	array(
		0 => 'Qu’est-ce que la COPPA ?',
		1 => 'La COPPA, ou la “Child Online Privacy and Protection Act”, est une loi des États-Unis qui exige que les sites Internet pouvant potentiellement collecter des informations sur les mineurs âgés de moins de 13 ans, doivent avoir le consentement écrit des parents ou des tuteurs légaux. Si vous n’êtes pas certain que cette loi s’applique aussi à votre inscription, ou au site Internet dans lequel vous souhaitez vous inscrire, contactez des conseillers ou avocats légaux pour plus d’assistance. Veuillez noter que les Équipes de phpBB ne peuvent pas vous fournir d’assistance légale et ne sont pas le contact approprié pour des problèmes légaux de la sorte, excepté comme décrit ci-dessous.',
	),
	array(
		0 => 'Pourquoi ne puis-je pas m’inscrire ?',
		1 => 'Il est possible que le propriétaire du site Internet ait banni votre adresse IP ou interdit le nom d’utilisateur que vous souhaitez utiliser pour vous inscrire. Le propriétaire du site Internet peut également avoir désactivé les inscriptions afin d’empêcher les nouveaux visiteurs de s’inscrire. Contactez l’administrateur du forum pour plus d’assistance.',
	),
	array(
		0 => 'À quoi sert “Supprimer tous les cookies du forum” ?',
		1 => 'L’option “Supprimer tous les cookies du forum” permet d’effacer tous les cookies crées par phpBB3 conservant votre authentification et votre connexion sur le forum. Cela fournit également des fonctionnalités telles que l’enregistrement du statut des messages, lu ou non-lu, si cela a été activé par le propriétaire du forum. Si vous avez des problèmes de connexion ou de déconnexion, la suppression des cookies du forum peut aider.',
	),
	array(
		0 => '--',
		1 => 'Préférences et réglages des utilisateurs'
	),
	array(
		0 => 'Comment puis-je modifier mes réglages ?',
		1 => 'Si vous êtes un utilisateur inscrit, tous vos réglages sont stockés dans la base de données du forum. Pour les modifier, allez sur votre Panneau de Contrôle de l’Utilisateur ; ce lien peut être trouvé en haut de toutes les pages du forum. Ce système vous permettra de modifier tous vos réglages et préférences.'
	),
	array(
		0 => 'L’heure n’est pas correcte !',
		1 => 'Il est possible que l’heure affichée soit sur un fuseau horaire différent de celui dans lequel vous êtes. Si c’est le cas, allez sur votre Panneau de Contrôle de l’Utilisateur et modifiez le fuseau horaire pour trouver votre zone adéquate, par exemple Londres, Paris, New York, Sydney, etc. Veuillez noter que la modification du fuseau horaire, comme la plupart des réglages, n’est accessible qu’aux utilisateurs inscrits. Si vous n’êtes pas inscrit, c’est le moment idéal de le faire.'
	),
	array(
		0 => 'J’ai modifié le fuseau horaire et l’heure n’est toujours pas correcte !',
		1 => 'Si vous êtes certain d’avoir réglé le fuseau horaire et l’heure d’été correctement, mais que l’heure est encore erronée, alors l’heure stockée sur l’horloge du serveur est incorrecte et les administrateurs devront la corriger.'
	),
	array(
		0 => 'Ma langue n’apparaît pas dans la liste !',
		1 => 'Soit l’administrateur n’a pas installé votre langue, soit personne n’a encore traduit le forum dans votre langue. Essayez de demander à l’administrateur du forum s’il peut installer le pack de langue que vous désirez. Si le pack de langue n’existe pas, vous êtes libre de vous porter volontaire pour créer une nouvelle traduction. De plus amples informations peuvent être trouvées sur le site de phpBB.com (voir le lien en bas des pages du forum).'
	),
	array(
		0 => 'Comment puis-je afficher une image sous mon nom d’utilisateur ?',
		1 => 'Il y a deux images qui peuvent apparaître sous un nom d’utilisateur lors de la consultation des messages. La première peut être une image associée à votre rang, généralement en forme d’étoiles, de carrés ou de points, qui indiquent le nombre de messages à votre actif, ou votre statut sur le forum. La seconde, habituellement une plus grande image, est connue en tant qu’avatar et est généralement unique ou personnelle à chaque utilisateur. C’est à l’administrateur du forum d’activer les avatars et de décider de la manière dont ils sont mis à disposition. Si vous ne pouvez pas utiliser d’avatars, contactez l’administrateur du forum et demandez lui pourquoi avoir désactivé cette fonctionnalité.'
	),
	array(
		0 => 'Quel est mon rang et comment puis-je le modifier ?',
		1 => 'Les rangs, qui apparaissent en dessous de votre nom d’utilisateur, indiquent le nombre de messages que vous avez publiés ou identifient certains utilisateurs, comme les modérateurs et les administrateurs. En général, vous ne pouvez pas modifier directement le texte des rangs du forum, ils sont réglés par l’administrateur du forum. Veuillez ne pas abuser du forum en publiant inutilement des messages juste pour augmenter votre rang. Beaucoup de forums ne toléreront pas cela, et un modérateur ou un administrateur abaissera votre compteur de messages.'
	),
	array(
		0 => 'Lorsque je clique sur le lien de l’e-mail d’un utilisateur, il m’est demandé de me connecter ?',
		1 => 'Seuls les utilisateurs inscrits peuvent envoyer des e-mail aux autres utilisateurs par l’intermédiaire du formulaire e-mail intégré et seulement si l’administrateur a activé cette fonctionnalité. Cela à pour but d’empêcher toute utilisation malveillante du système e-mail par des utilisateurs anonymes.'
	),
	array(
		0 => '--',
		1 => 'Problèmes de publication'
	),
	array(
		0 => 'Comment puis-je publier un sujet dans un forum ?',
		1 => 'Pour publier un nouveau sujet dans un forum, cliquez sur le bouton adéquat situé sur l’écran du forum ou du sujet. Il se peut que vous ayez besoin d’être inscrit avant de rédiger un message. Une liste de vos permissions sur chaque forum est disponible en bas de l’écran du forum ou du sujet. Par exemple : vous pouvez publier de nouveaux sujets, vous pouvez voter dans les sondages, etc.'
	),
	array(
		0 => 'Comment puis-je éditer ou supprimer un message ?',
		1 => 'À moins que vous ne soyez l’administrateur du forum ou un modérateur, vous ne pouvez éditer ou supprimer que vos propres messages. Vous pouvez éditer un message en cliquant le bouton adéquat, parfois limité dans le temps après que le message ait été publié. Si quelqu’un a déjà répondu au message, vous trouverez un petit bout de texte en dessous du message lorsque vous revenez au sujet qui énumère le nombre de fois que vous l’avez édité, avec la date et l’heure. Ceci n’apparaîtra que si quelqu’un a effectué une réponse ; cela n’apparaîtra pas si un modérateur ou un administrateur a édité le message, bien qu’ils puissent laisser une note expliquant pourquoi ils ont édité le message. Veuillez noter que les utilisateurs normaux ne peuvent pas supprimer de message une fois que quelqu’un y a répondu.'
	),
	array(
		0 => 'Comment puis-je ajouter une signature à un message ?',
		1 => 'Pour ajouter une signature à un message, vous devez tout d’abord en créer une par l’intermédiaire de votre Panneau de Contrôle de l’Utilisateur. Une fois crée, vous pouvez cocher la case <em>Insérer une signature</em> sur le formulaire de rédaction afin d’ajouter votre signature. Vous pouvez également ajouter une signature par défaut sur tous vos messages en cochant le bouton approprié dans votre profil. Si vous faites cela, vous pouvez alors empêcher l’ajout individuel de la signature sur les messages en décochant la case d’ajout de la signature dans le formulaire de rédaction.'
	),
	array(
		0 => 'Comment puis-je créer un sondage ?',
		1 => 'Lorsque vous rédigez un nouveau sujet ou éditez le premier message d’un sujet, cliquez sur l’onglet “Création d’un sondage” au-dessous du formulaire principal de rédaction ; si vous ne pouvez pas le voir, c’est que vous n’avez pas les permissions appropriées pour créer des sondages. Entrez un titre pour le sondage en incluant au moins deux options dans les champs adéquats, avec chacune des options dans une ligne séparée de la zone du texte. Vous pouvez également régler le nombre d’options par utilisateur en sélectionnant lors du vote “Options par utilisateur”, puis une limite de temps en jours pour le sondage (0 pour une durée illimité) et enfin l’option pour autoriser ou non les utilisateurs à modifier leur vote.'
	),
	array(
		0 => 'Pourquoi ne puis-je pas ajouter plus d’options au sondage ?',
		1 => 'La limite d’options d’un sondage est réglée par l’administrateur du forum. Si vous souhaitez ajouter plus d’options à votre sondage par rapport au nombre autorisé, contactez l’administrateur du forum.'
	),
	array(
		0 => 'Comment puis-je éditer ou supprimer un sondage ?',
		1 => 'Comme avec les messages, les sondages ne peuvent être édités que par le rédacteur, un modérateur ou un administrateur. Pour éditer un sondage, cliquez sur éditer dans le premier message du sujet ; il y aura toujours le sondage associé à celui-ci. Si personne n’a voté, les utilisateurs peuvent supprimer le sondage ou éditer chaque option du sondage. Cependant, si les membres ont déjà exprimés leurs votes, seuls les modérateurs ou les administrateurs peuvent l’éditer ou le supprimer. Cela empêche les options d’un sondage à être modifiés en cours de chemin.'
	),
	array(
		0 => 'Pourquoi ne puis-je pas accéder au forum ?',
		1 => 'Certains forums peuvent être limités qu’à certains utilisateurs ou groupes. Pour voir, lire, publier ou réaliser n’importe quelle autre action, vous avez besoin de permissions spéciales. Contactez un modérateur ou un administrateur du forum afin de demander votre accès.'
	),
	array(
		0 => 'Pourquoi ne puis-je pas ajouter de pièces jointes ?',
		1 => 'Les permissions pour ajouter des pièces jointes sont accordées par forum, par groupe, ou par utilisateur. L’administrateur du forum n’a peut-être pas autorisé les pièces jointes à être ajoutées dans le forum spécifique dans lequel vous souhaitez publier, ou peut-être seuls certains groupes sont autorisés à insérer des pièces jointes. Contactez l’administrateur du forum si vous ne savez pas pourquoi vous ne pouvez pas insérer de pièces jointes.'
	),
	array(
		0 => 'Pourquoi ai-je reçu un avertissement ?',
		1 => 'Chaque administrateur du forum a son propre ensemble de règles pour son site. Si vous ne respectez pas une règle, vous recevrez un avertissement. Veuillez noter que c’est la décision de l’administrateur de ce forum, le Groupe phpBB n’a rien à voir avec l’avertissement distribué sur ce site. Contactez l’administrateur du forum si vous ne savez pas pourquoi vous avez reçu un avertissement.'
	),
	array(
		0 => 'Comment puis-je rapporter des messages à un modérateur ?',
		1 => 'Si l’administrateur du forum a autorisé cela, vous devriez voir un bouton pour rapporter des messages à côté du message que vous souhaitez rapporter. En cliquant sur celui-ci, vous trouverez toutes les étapes nécessaires pour rapporter le message.'
	),
	array(
		0 => 'Qu’est-ce le bouton “Sauvegarder” lors de la rédaction d’un sujet ?',
		1 => 'Cela autorise à sauvegarder les messages qui doivent être complétés et envoyés à une date ultérieure. Pour recharger un passage sauvegardé, allez sur le Panneau de Contrôle de l’Utilisateur.'
	),
	array(
		0 => 'Pourquoi mon message a-t-il besoin d’être approuvé ?',
		1 => 'L’administrateur du forum peut décider que les messages que vous publiez dans le forum doivent être vérifiés avant d’être soumis. Il est également possible que l’administrateur vous ait placé dans un groupe d’utilisateurs pour lequel il juge nécessaire que les messages doivent être vérifiés avant d’être publiés. Veuillez contacter l’administrateur du forum pour plus d’information.'
	),
	array(
		0 => 'Comment puis-je remonter mes sujets ?',
		1 => 'En cliquant sur le lien “Remonter le sujet” lorsque vous êtes en train de le visionner, vous pouvez “remonter” le sujet en haut de la liste des sujets à la première page du forum. Cependant, si vous ne le voyez pas, le remontage de sujet a peut-être été désactivé ou alors le temps d’attente nécessaire entre les remontages n’a peut-être pas encore été terminé. Il est également possible de remonter le sujet simplement en y répondant, cependant, soyez sûr de respecter les règles du forum.'
	),
	array(
		0 => '--',
		1 => 'Mise en forme et types de sujets'
	),
	array(
		0 => 'Qu’est-ce que le BBCode ?',
		1 => 'Le BBCode est une implémentation spéciale du HTML, offrant un très bon contrôle sur la mise en forme d’objets particuliers dans un message. L’utilisation du BBCode est déterminée par l’administrateur, mais vous pouvez également le désactiver sur chaque message depuis le formulaire de rédaction. Le BBCode est similaire à l’architecture de l’HTML, les balises sont entourées de crochets [ et ] à la place de &lt; et &gt;. Pour plus d’informations à propos du BBCode, consultez le guide qui est accessible depuis la page de rédaction.'
	),
	array(
		0 => 'Puis-je utiliser du HTML ?',
		1 => 'Non. Il n’est pas possible d’utiliser du HTML sur ce forum. La majeure partie de la mise en forme qui peut être faite en HTML peut être faite par du BBCode à la place.'
	),
	array(
		0 => 'Que sont les smileys ?',
		1 => 'Les smileys, ou émoticônes, sont de petites images qui peuvent être utilisées pour exprimer des sentiments, en utilisant un code court, par exemple :) exprime la joie, alors que :( exprime la tristesse. La liste complète des émoticônes peut être affichée depuis le formulaire de rédaction. Essayez cependant de ne pas abuser des smileys, car ils peuvent rapidement rendre un message illisible et un modérateur pourrait décider de l’éditer ou de le supprimer complètement. L’administrateur du forum peut également définir une limite du nombre de smileys qui peuvent être utilisés dans un message.'
	),
	array(
		0 => 'Puis-je publier des images ?',
		1 => 'Oui, des images peuvent être affichées dans vos messages. Si l’administrateur du forum a autorisé les pièces jointes, vous pouvez transférer des images sur le forum. Dans le cas contraire, vous devez faire un lien vers une image stockée sur un serveur Internet accessible publiquement, par exemple http://www.exemple.com/mon-image.gif. Vous ne pouvez pas faire de lien vers des images stockées sur votre propre PC (à moins que celui-ci soit un serveur Internet) ni stockées derrière un quelconque système d’authentification, par exemple les boîtes e-mail Hotmail ou Yahoo!, les sites protégés par un mot de passe, etc. Pour insérer une image, utilisez la balise BBCode [img].'
	),
	array(
		0 => 'Que sont les annonces globales ?',
		1 => 'Les annonces globales contiennent des informations très importantes et vous devriez les lire aussi vite que possible. Elles apparaissent en haut de chaque forum et dans votre Panneau de Contrôle de l’Utilisateur. Les permissions des annonces globales sont définies par l’administrateur du forum.'
	),
	array(
		0 => 'Que sont les annonces ?',
		1 => 'Les annonces contiennent souvent des informations importantes pour le forum dans lequel vous naviguez et vous devriez les lire aussi vite que possible. Les annonces apparaissent en haut de chaque page du forum dans lequel elles ont été publiées. Tout comme les annonces globales, les permissions des annonces sont définies par l’administrateur du forum.'
	),
	array(
		0 => 'Que sont les posts-it ?',
		1 => 'Les posts-it apparaissent en dessous des annonces dans le forum et seulement sur la première page. Ils sont souvent assez importants et vous devriez les lire dès que vous en avez l’occasion. Tout comme les annonces et les annonces globales, les permissions des posts-it sont définies par l’administrateur du forum.'
	),
	array(
		0 => 'Que sont les sujets verrouillés ?',
		1 => 'Les sujets verrouillés sont les sujets dans lesquels les utilisateurs ne peuvent plus répondre et dans lesquels les sondages sont automatiquement terminés. Les sujets peuvent être verrouillés pour de nombreuses raisons et ont été mis de cette façon par un modérateur ou un administrateur du forum. Vous pouvez également verrouiller vos propres sujets si l’administrateur vous en a donné les permissions appropriées.'
	),
	array(
		0 => 'Que sont les icônes de sujets ?',
		1 => 'Les icônes de sujets sont des images sélectionnés par l’auteur et sont associées à des messages pour indiquer leur contenu. La possibilité d’utiliser des icônes de sujets dépend des permissions définies par l’administrateur du forum.'
	),
	array(
		0 => '--',
		1 => 'Niveaux d’utilisateurs et groupes d’utilisateurs'
	),
	array(
		0 => 'Qui sont les administrateurs ?',
		1 => 'Les administrateurs sont des membres possédant le plus haut niveau de contrôle sur le forum. Ces utilisateurs peuvent contrôler chaque facette des opérations du forum, incluant le réglage des permissions, le bannissement d’utilisateurs, la création de groupes d’utilisateurs ou de modérateurs, etc., cela dépend des attributions du fondateur du forum et les permissions qu’il ou qu’elle a attribué(e) aux autres administrateurs. Ils peuvent également avoir les capacités complètes des modérateurs et cela dans tous les forums, cela dépend des réglages effectués par le fondateur du forum.'
	),
	array(
		0 => 'Qui sont les modérateurs ?',
		1 => 'Les modérateurs sont des utilisateurs individuels (utilisateur individuels ou groupes d’utilisateurs individuels) qui surveillent jour après jour les forums. Ils ont la possibilité d’éditer ou de supprimer les sujets, les verrouiller, déverrouiller, déplacer, supprimer, fusionner et les diviser dans le forum qu’ils modèrent. Généralement, les modérateurs sont présents pour empêcher que des utilisateurs fassent du hors sujet ou publient du contenu abusif ou offensif.'
	),
	array(
		0 => 'Qui sont les groupes d’utilisateurs ?',
		1 => 'Les groupes d’utilisateurs sont une façon pour les administrateurs du forum de regrouper plusieurs utilisateurs. Chaque utilisateur peut appartenir à plusieurs groupes et chaque groupe peut être assigné à des permissions individuelles. Cela rend les tâches plus faciles aux administrateurs car ils peuvent modifier les permissions de plusieurs utilisateurs en une seule fois, ou encore leur accorder des pouvoirs de modération, ou bien leur donner accès à un forum privé.'
	),
	array(
		0 => 'Où sont les groupes d’utilisateurs et comment puis-je en rejoindre un ?',
		1 => 'Vous pouvez voir tous les groupes d’utilisateurs par l’intermédiaire du lien “Groupes d’utilisateurs” depuis votre Panneau de Contrôle de l’Utilisateur. Si vous souhaitez en rejoindre un, cliquez sur le bouton approprié. Cependant, tous les groupes d’utilisateurs ne sont pas ouverts aux nouvelles adhésions. Certains peuvent nécessiter une approbation avant d’être rejoints, d’autres peuvent être fermés et d’autres encore peuvent même avoir leurs membres invisibles. Si le groupe est ouvert, vous pouvez le rejoindre en cliquant sur le bouton approprié. S’il requiert une approbation pour le rejoindre, cliquez également sur le bouton approprié. Le chef du groupe devra approuver votre requête et il pourra vous demander pourquoi vous souhaitez rejoindre le groupe. Veuillez ne pas harceler un chef de groupe s’il vous refuse votre requête : il doit avoir ses propres raisons.'
	),
	array(
		0 => 'Comment puis-je devenir un chef de groupe ?',
		1 => 'Un chef de groupe est généralement assigné lorsque les groupes d’utilisateurs sont initialement créés par un administrateur du forum. Si vous êtes intéressés par la création d’un groupe d’utilisateurs, votre premier contact devrait être un administrateur ; essayez de lui envoyer un message privé.',
	),
	array(
		0 => 'Pourquoi certains groupes d’utilisateurs apparaissent dans une couleur différente ?',
		1 => 'Il est possible aux administrateurs du forum d’assigner une couleur aux membres d’un groupe d’utilisateurs afin de faciliter l’identification des membres de ce groupe.'
	),
	array(
		0 => 'Qu’est-ce qu’un “Groupe d’utilisateurs par défaut” ?',
		1 => 'Si vous êtes membre de plus d’un groupe d’utilisateurs, votre groupe par défaut est utilisé pour déterminer quelle couleur de groupe et quel rang de groupe doivent être affichés pour vous par défaut. L’administrateur du forum peut vous donner la permission de modifier vous-même votre groupe par défaut par l’intermédiaire de votre Panneau de Contrôle de l’Utilisateur.'
	),
	array(
		0 => 'Qu’est-ce que le lien “L’équipe” ?',
		1 => 'Cette page vous fournit la liste de l’équipe du forum, incluant les administrateurs et les modérateurs ainsi que quelques informations telles que les forums qu’ils modèrent.'
	),
	array(
		0 => '--',
		1 => 'Messagerie privée'
	),
	array(
		0 => 'Je ne peux pas envoyer de messages privés !',
		1 => 'Il y a trois raisons qui peuvent expliquer cela ; soit vous n’êtes pas inscrit et/ou connecté, soit un administrateur a désactivé entièrement la messagerie privée sur le forum, soit il vous empêche d’envoyer des messages privés. Si c’est le dernier cas, vous devriez demander à l’administrateur pourquoi l’avoir fait.'
	),
	array(
		0 => 'Je continue à recevoir des messages privés non désirés !',
		1 => 'Vous pouvez empêcher un utilisateur de vous envoyer des messages privés en utilisant des règles de messages qui vous servent de filtres depuis votre Panneau de Contrôle de l’Utilisateur. Si vous recevez des messages privés de manière abusive de la part de quelqu’un, informez-en un administrateur ; il aura le pouvoir d’empêcher complètement un utilisateur d’envoyer des messages privés.'
	),
	array(
		0 => 'J’ai reçu un spam ou un e-mail non désiré de la part de quelqu’un sur ce forum !',
		1 => 'Nous en sommes désolés. Le formulaire d’envoi d’e-mail de ce forum possède des protections pour essayer de dépister les utilisateurs qui envoient de tels messages. Vous devriez envoyer par e-mail à un administrateur du forum une copie complète de l’e-mail que vous avez reçu. Il est très important que celui-ci inclut les en-têtes contenant les informations de l’auteur de l’e-mail. Il pourra alors agir en conséquence.'
	),
	array(
		0 => '--',
		1 => 'Amis et ignorés'
	),
	array(
		0 => 'A quoi sert ma liste d’amis et d’ignorés ?',
		1 => 'Vous pouvez utiliser ces listes pour organiser et classer les membres du forum. Les membres ajoutés à votre liste d’amis seront listés dans votre Panneau de Contrôle de l’Utilisateur pour un consulter rapidement leur statut en ligne et leur envoyer des messages privés. Selon le style utilisé, les messages publiés par ces utilisateurs peuvent éventuellement être mis en surbrillance. Si vous ajoutez un utilisateur à votre liste d’ignorés, tous les messages qu’il publiera seront cachés par défaut.'
	),
	array(
		0 => 'Comment puis-je ajouter ou supprimer des utilisateurs de ma liste d’amis et d’ignorés ?',
		1 => 'Vous pouvez ajouter des utilisateurs à ces listes de deux manières. Dans chaque profil d’utilisateurs, il y a un lien pour les ajouter à votre liste d’amis ou d’ignorés. Alternativement, vous pouvez ajouter directement des utilisateurs en entrant leur nom d’utilisateur depuis votre Panneau de Contrôle de l’Utilisateur. Vous pouvez également supprimer des utilisateurs de vos listes en utilisant cette même page.'
	),
	array(
		0 => '--',
		1 => 'Recherche dans les forums'
	),
	array(
		0 => 'Comment puis-je rechercher dans un forum ou des forums ?',
		1 => 'En entrant un terme dans la boîte de recherche située sur l’index, sur les pages des forums et sur les pages des sujets. La recherche avancée peut être accessible en cliquant sur le lien “Recherche” disponible sur toutes les pages du forum. L’accès à la recherche dépend du style utilisé.'
	),
	array(
		0 => 'Pourquoi ma recherche ne renvoie aucun résultat ?',
		1 => 'Votre recherche était probablement trop vague ou incluait trop de termes communs qui ne sont pas indexés par phpBB3. Soyez plus précis et utilisez les options disponibles dans la recherche avancée.'
	),
	array(
		0 => 'Pourquoi ma recherche renvoie à une page blanche ?!',
		1 => 'Votre recherche a retournée trop de résultats pour que le serveur puisse les afficher. Utilisez la recherche avancée et soyez plus précis dans les termes utilisés et les forums dans lesquels vous recherchez.'
	),
	array(
		0 => 'Comment puis-je rechercher des utilisateurs ?',
		1 => 'Allez sur la page “Membres” et cliquez sur le lien “Trouver un membre”. Une fois cela fait, remplissez convenablement les diverses options.'
	),
	array(
		0 => 'Comment puis-je retrouver mes propres messages et sujets ?',
		1 => 'Vos propres messages peuvent être affichés en cliquant sur le lien “Rechercher les messages de l’utilisateur” dans le Panneau de Contrôle de l’Utilisateur ou par l’intermédiaire de votre propre profil. Pour rechercher vos propres sujets, utilisez la recherche avancée et remplissez convenablement les diverses options.'
	),
	array(
		0 => '--',
		1 => 'Abonnements aux sujets et favoris'
	),
	array(
		0 => 'Quelle est la différence entre l’ajout en favori et l’abonnement ?',
		1 => 'Dans phpBB3, la mise en favori d’un sujet est similaire à la mise en favori de pages par votre navigateur Internet. Vous ne serez pas alerté lors de nouveaux messages, mais vous pourrez retourner au sujet plus tard d’une manière rapide. Par contre, l’abonnement vous préviendra lors de nouveaux messages sur le sujet ou forum que vous surveillez.'
	),
	array(
		0 => 'Comment puis-je m’abonner à un forum ou à un sujet spécifique ?',
		1 => 'Pour s’abonner à un forum spécifique, cliquez sur le lien “Surveiller le forum” une fois sur le forum désiré. Pour s’abonner à un sujet, répondez au sujet avec l’option d’abonnement au sujet cochée ou cliquez sur le lien “Surveiller le sujet” sur la page du sujet.'
	),
	array(
		0 => 'Comment puis-je supprimer mes abonnements ?',
		1 => 'Pour supprimer vos abonnements, allez sur votre Panneau de Contrôle de l’Utilisateur et suivez le lien vers vos abonnements.'
	),
	array(
		0 => '--',
		1 => 'Pièces jointes'
	),
	array(
		0 => 'Quelles sont les pièces jointes autorisées sur ce forum ?',
		1 => 'Chaque administrateur du forum peut autoriser ou interdire certains types de pièces jointes. Si vous n’êtes pas certain de ce qui est autorisé ou pas, n’hésitez pas à le demander à l’administrateur du forum.'
	),
	array(
		0 => 'Comment puis-je retrouver toutes mes pièces jointes ?',
		1 => 'Pour retrouver la liste des pièces jointes que vous avez transférées, allez sur votre Panneau de Contrôle de l’Utilisateur et suivez les liens vers la section des pièces jointes.'
	),
	array(
		0 => '--',
		1 => 'Questions à propos de phpBB3'
	),
	array(
		0 => 'Qui a écrit ce système de forum ?',
		1 => 'Ce programme (dans sa forme non modifiée) est produit, distribué et est sous copyright par le <a href="http://www.phpbb.com/">Groupe phpBB</a>. Il est rendu accessible sous la Licence Publique Générale GNU et peut être gratuitement distribué, consultez le lien pour plus d’informations.'
	),
	array(
		0 => 'Pourquoi la fonctionnalité X n’est pas disponible ?',
		1 => 'Ce programme a été écrit et mis sous licence par le Groupe phpBB. Si vous pensez qu’une fonctionnalité nécessite d’être ajoutée, veuillez vous rendre sur le site Internet de phpBB.com, proposez le au Groupe phpBB et attendez leurs avis. Veuillez ne pas envoyer directement de requêtes d’ajout de fonctionnalités sur le forum de phpBB.com, le Groupe utilise SourceForge pour gérer ces requêtes. Veuillez consulter les forums pour voir notre position, si nous en avons une, par rapport à cette fonctionnalité, et suivre la procédure donnée là-bas.'
	),
	array(
		0 => 'Qui dois-je contacter à propos de problèmes d’abus ou d’ordres légaux liés à ce forum ?',
		1 => 'Tous les administrateurs listés sur la page “L’équipe” devraient être un contact approprié pour ce genre de problèmes. Si vous n’obtenez aucune réponse, vous devriez alors contacter le propriétaire du domaine (faites un <a href="http://www.google.com/search?q=whois">WHOIS</a>) ou, si celui-ci fonctionne sur un service gratuit (comme Yahoo!, Free.fr, f2s.com, etc.), le service de gestion des abus. Veuillez notez que le Groupe phpBB n’a <strong>absolument aucune juridiction</strong> et ne peut en aucun cas être tenu comme responsable de comment, où et par qui ce forum est utilisé. Ne contactez pas le Groupe phpBB pour tout problème d’ordre légal (commentaire incessant, insultant, diffamatoire, etc.) qui n’ont <strong>pas directement de relation</strong> avec le site Internet phpBB.com ou le script phpBB lui-même. Si vous envoyez un e-mail au Groupe phpBB <strong>à propos d’une utilisation de tierce partie</strong> de ce logiciel, attendez-vous à une réponse laconique, ou aucune réponse, tout simplement.'
	)
);

?>
