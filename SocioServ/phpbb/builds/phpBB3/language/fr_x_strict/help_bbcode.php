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
* help_bbcode [French]
*
* @package language
* @version $Id: help_bbcode.php,v 1.26 2007/07/19 20:37:52 acydburn Exp
* @translation $Id: help_bbcode.php,v 1.26 2007/07/27 19:40:18 xaphos Exp $
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
		1 => 'Introduction'
	),
	array(
		0 => 'Qu’est-ce que le BBCode ?',
		1 => 'Le BBCode est une implémentation spéciale du HTML. Si celui-ci a été autorisé par l’administrateur, vous pouvez l’inclure dans vos messages sur le forum. De plus, vous pouvez désactiver le BBCode sur chacun de vos messages par l’intermédiaire du formulaire de rédaction. Le BBCode est similaire à l’architecture de l’HTML, les balises sont contenues entre des crochets [ et ] à la place de &lt; et &gt; et offrent un meilleur contrôle sur la manière de comment quelque chose doit être affiché. Selon le template que vous utilisez, vous pouvez trouver et ajouter du BBCode à vos messages très facilement par l’intermédiaire d’une interface cliquable située juste au-dessus du formulaire de rédaction. Si ces brèves explications ne vous conviennent pas, vous pouvez consulter le guide suivant qui s’avère très explicite.'
	),
	array(
		0 => '--',
		1 => 'Mise en forme du texte'
	),
	array(
		0 => 'Comment puis-je mettre du texte en gras, en italique et en souligné',
		1 => 'Le BBCode inclut des balises qui vous permettent de modifier rapidement le style de votre texte basique. Ceci est réalisé par les méthodes suivantes : <ul><li>Pour mettre une partie du texte en gras, il faut l’enfermer entre les balises <strong>[b][/b]</strong>, par exemple :<br /><br /><strong>[b]</strong>Bonjour<strong>[/b]</strong><br /><br />Deviendra : <strong>Bonjour</strong></li><li>Pour souligner une partie du texte, utilisez les balises <strong>[u][/u]</strong>, par exemple :<br /><br /><strong>[u]</strong>Bonjour<strong>[/u]</strong><br /><br />Deviendra : <span style="text-decoration: underline">Bonjour</span></li><li>Pour mettre une partie du texte en italique, utilisez les balises <strong>[i][/i]</strong>, par exemple :<br /><br />C’est <strong>[i]</strong>très bien !<strong>[/i]</strong><br /><br />Deviendra : C’est <i>très bien !</i></li></ul>'
	),
	array(
		0 => 'Comment puis-je modifier la taille ou la couleur du texte ?',
		1 => 'Pour modifier la taille ou la couleur du texte, les balises suivantes peuvent être utilisées. Gardez à l’esprit que le rendu visuel dépendra du navigateur et du système de l’utilisateur : <ul><li>La modification de la couleur du texte est réalisée en l’enfermant entre les balises <strong>[color=][/color]</strong>. Vous pouvez spécifier le nom d’une couleur reconnue, comme red, blue, yellow, etc., ou directement par son code hexadécimal, comme #FFFFFF, #000000. Par exemple, pour mettre du texte en rouge, vous pouvez utiliser :<br /><br /><strong>[color=red]</strong>Bonjour !<strong>[/color]</strong><br /><br />Ou<br /><br /><strong>[color=#FF0000]</strong>Bonjour !<strong>[/color]</strong><br /><br />Ce qui dans les deux cas deviendra : <span style="color:red">Bonjour !</span></li><li>La modification de la taille du texte est réalisée par la même méthode, en utilisant les balises <strong>[size=][/size]</strong>. Cette balise dépend du template que l’utilisateur a sélectionné, mais le format recommandé est une valeur numérique représentant la taille du texte en pourcentage, commençant de 20 par défaut jusqu’à 200 (très grand). Par exemple :<br /><br /><strong>[size=30]</strong>PETIT<strong>[/size]</strong><br /><br />Deviendra : <span style="font-size:30%;">PETIT</span><br /><br />Alors que :<br /><br /><strong>[size=200]</strong>ÉNORME !<strong>[/size]</strong><br /><br />Deviendra : <span style="font-size:200%;">ÉNORME !</span></li></ul>'
	),
	array(
		0 => 'Puis-je combiner des balises de mise en forme ?',
		1 => 'Oui bien sûr, par exemple pour obtenir l’attention de tout le monde, vous pouvez écrire :<br /><br /><strong>[size=150][color=red][b]</strong>REGARDEZ MOI !<strong>[/b][/color][/size]</strong><br /><br />Ce qui deviendra <span style="color:red;font-size:250%;"><strong>REGARDEZ MOI !</strong></span><br /><br />Cependant, nous vous déconseillons fortement d’utiliser fréquemment ce genre de mise en forme du texte ! Souvenez-vous seulement qu’il faut correctement fermer les balises et dans le bon ordre. Par exemple, ce qui suit est incorrect :<br /><br /><strong>[b][u]</strong>C’est incorrect<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Citation et mise en forme du texte'
	),
	array(
		0 => 'Citation de texte dans les réponses',
		1 => 'Il y a deux manières de citer un texte, avec ou sans référence.<ul><li>Lorsque vous utilisez la fonction de citation pour répondre à un message sur le forum, vous devriez noter que le texte qui est ajouté à la fenêtre du message est inclu entre les balises <strong>[quote=&quot;&quot;][/quote]</strong>. Cette méthode vous permet de citer avec une référence à une personne ou à autre chose que vous choisissez de commenter ! Par exemple, pour citer une partie d’un texte rédigé par Mr. Blobby, vous devez saisir :<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Le texte que Mr. Blobby a rédigé est ici<strong>[/quote]</strong><br /><br />Le rendu final, Mr. Blobby a écrit :, sera ajouté automatiquement avant le texte actuel. Souvenez-vous que vous devez <strong>obligatoirement</strong> inclure les guillemets de citation &quot;&quot; autour du nom que vous citez.</li><li>La deuxième méthode vous permet de citer aveuglément quelque chose. Pour utiliser celle-ci, enfermez le texte entre les balises <strong>[quote][/quote]</strong>. Lorsque vous consulterez le message ultérieurement, il affichera simplement le texte dans un bloc de citation, et cela sans référence.</li></ul>'
	),
	array(
		0 => 'Mise en forme de codes ou de données fixes de largeur',
		1 => 'Si vous souhaitez insérer un morceau de code ou quelque chose qui demande une largeur fixe, comme le type de police Courier, vous devez enfermer le texte entre les balises <strong>[code][/code]</strong>, par exemple :<br /><br /><strong>[code]</strong>echo &quot;Ceci est une partie de code&quot;;<strong>[/code]</strong><br /><br />Toutes les balises de mise en forme présentes entre les balises <strong>[code][/code]</strong> sont conservées comme telles lorsque vous consulterez le message ultérieurement. La syntaxe PHP peut être mise en évidence en utilisant <strong>[code=php][/code]</strong> et il est recommandé de publier des échantillons de code PHP pour en améliorer la lisibilité.'
	),
	array(
		0 => '--',
		1 => 'Insertion de listes'
	),
	array(
		0 => 'Création d’une liste non-ordonnée',
		1 => 'Le BBCode supporte deux types de liste, l’ordonnée et la non-ordonnée. Elles sont pratiquement identiques par rapport à leur équivalent en HTML. Une liste non-ordonnée publie chaque article l’un après l’autre dans votre liste, en utilisant le caractère étoile. Pour créer une liste non-ordonnée, vous devez utiliser les balises <strong>[list][/list]</strong> et définir chaque article dans la liste en utilisant la balise <strong>[*]</strong>. Par exemple, pour lister vos couleurs favorites, vous pouvez utiliser :<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Rouge<br /><strong>[*]</strong>Bleu<br /><strong>[*]</strong>Jaune<br /><strong>[/list]</strong><br /><br />Cela donnera la liste suivante :<ul><li>Rouge</li><li>Bleu</li><li>Jaune</li></ul>'
	),
	array(
		0 => 'Création d’une liste ordonnée',
		1 => 'Le second type de liste, l’ordonnée, vous donne le contrôle de ce qui est produit devant chaque article. Vous devez utiliser les balises <strong>[list=1][/list]</strong> afin de créer une liste numérotée, ou bien alors les balises <strong>[list=a][/list]</strong> pour créer une liste alphabétique. Comme pour la liste non-ordonnée, les articles doivent être définis en utilisant la balise <strong>[*]</strong>. Par exemple :<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Faire les boutiques<br /><strong>[*]</strong>Acheter un nouvel ordinateur<br /><strong>[*]</strong>Insulter l’ordinateur quand il plante<br /><strong>[/list]</strong><br /><br />Donnera le visuel suivant :<ol style="list-style-type: arabic-numbers"><li>Faire les boutiques</li><li>Acheter un nouvel ordinateur</li><li>Insulter l’ordinateur quand il plante</li></ol>Pour créer une liste alphabétique, vous devez utiliser :<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>La première réponse possible<br /><strong>[*]</strong>La seconde réponse possible<br /><strong>[*]</strong>La troisième réponse possible<br /><strong>[/list]</strong><br /><br />Ce qui donnera :<ol style="list-style-type: lower-alpha"><li>La première réponse possible</li><li>La seconde réponse possible</li><li>La troisième réponse possible</li></ol>'
	),
	array(
		0 => '--',
		1 => 'Création de liens'
	),
	array(
		0 => 'Mettre un lien vers un site quelconque',
		1 => 'Le BBCode de phpBB propose un certain nombre de manières pour créer des URI (Uniform Resource Indicators), plus connues sous le nom d’URL.<ul><li>La première de celles-ci emploie la balise <strong>[url=][/url]</strong>, dont ce qui est placé après le signe = fait agir le contenu de cette balise en tant qu’URL. Par exemple, pour insérer un lien vers phpBB.com, vous devez utiliser :<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Visitez phpBB !<strong>[/url]</strong><br /><br />Cela génèrera le lien suivant, <a href="http://www.phpbb.com/">Visitez phpBB !</a>. Veuillez noter que selon les préférences du navigateur des utilisateurs, le lien peut s’ouvrir dans la même fenêtre ou dans une nouvelle fenêtre.</li><li>Si vous souhaitez que l’URL soit affichée comme un lien, vous pouvez employer simplement ceci :<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Cela générera le lien suivant, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>De plus, les fonctionnalités de phpBB permettent d’insérer une fonction appelée <i>Liens Magiques</i>, cela transformera n’importe quelle URL en lien syntaxiquement correct, sans que vous ayez besoin de l’indiquer devant toutes les balises ou même encore d’ajouter http://. Par exemple, en écrivant www.phpbb.com dans votre message, cela se complètera automatiquement en <a href="http://www.phpbb.com/">www.phpbb.com</a> lorsque vous verrez votre message par la suite.</li><li>La même chose est valable pour les adresses e-mail, vous pouvez indiquer sur l’un ou sur l’autre une adresse explicite, par exemple :<br /><br /><strong>[email]</strong>inconnu@domaine.adr<strong>[/email]</strong><br /><br />Ce qui donnera <a href="mailto:inconnu@domaine.adr">inconnu@domaine.adr</a>, ou vous pouvez simplement écrire inconnu@domaine.adr dans votre message, et celui-ci sera automatiquement complété lors de la visualisation.</li></ul>Comme avec toutes les balises BBCode, vous pouvez insérer des URL autour d’autres balises comme <strong>[img][/img]</strong> (voir la prochaine question), <strong>[b][/b]</strong>, etc. Comme pour les balises de formatage, il vous appartient d’en assurer l’usage correct d’ouverture et de fermeture dans le bon ordre, par exemple :<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />N’est <span style="text-decoration: underline">pas</span> correct, ce qui peut mener à la suppression de votre message.'
	),
	array(
		0 => '--',
		1 => 'Visualisation d’images dans les messages'
	),
	array(
		0 => 'Ajout d’une image dans un message',
		1 => 'Le BBCode de phpBB intègre une balise pour insérer des images dans vos messages. Les deux choses très importantes à se rappeler lors de l’utilisation des balises d’images sont : beaucoup d’utilisateurs n’apprécient pas un excès d’images dans les messages et l’image que vous souhaitez afficher doit déjà être disponible depuis Internet (elle ne peut pas exister seulement sur votre ordinateur, à moins que vous travailliez directement depuis un serveur Internet !). Pour afficher une image, vous devez renseigner l’URL se dirigeant directement à l’image avec les balises <strong>[img][/img]</strong>. Par exemple :<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Comme noté dans la section d’URL ci-dessus, vous pouvez intégrer une image entre des balises <strong>[url][/url]</strong> si vous le souhaitez, par exemple :<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />Donnera :<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Ajout de pièces jointes dans un message',
		1 => 'Des pièces jointes peuvent maintenant être insérées dans les messages en employant le nouveau BBCode <strong>[attachment=][/attachment]</strong>, si cette fonction a été activée par l’administrateur du forum et si vous avez les permissions appropriées pour insérer des pièces jointes. Un tableau pour insérer des pièces jointes en ligne est affiché en bas de l’écran de rédaction.'
	),
	array(
		0 => '--',
		1 => 'Divers'
	),
	array(
		0 => 'Puis-je ajouter mes propres balises ?',
		1 => 'Si vous êtes un administrateur sur ce forum et que vous avez les permissions appropriées, vous pouvez ajouter davantage de BBCodes dans la section Personnaliser les BBCodes.'
	)
);

?>
