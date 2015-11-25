<?php
/** 
*
* acp_ban [Standard french]
*
* @package language
* @version $Id: ban.php,v 1.18 2007/05/17 14:58:40 acydburn Exp $
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 heure',
	'30_MINS'		=> '30 minutes',
	'6_HOURS'		=> '6 heures',

	'ACP_BAN_EXPLAIN'	=> 'Ici, vous pouvez contrôler le bannissement d\'utilisateurs par nom, adresse IP ou adresse e-mail. Ces méthodes empêchent un utilisateur d\'atteindre n\'importe quelle partie du forum. Vous pouvez donner si vous le souhaitez une courte raison (3000 caractères maximum) au bannissement. Cela sera affiché dans l\'historique de l\'administration. La durée du bannissement peut également être spécifiée. Si vous voulez que le bannissement termine à une date spécifique plutôt qu\'après une période de temps, sélectionnez <span style="text-decoration: underline;">Jusqu\'à -&gt;</span> pour la durée du bannissement et entrez une date au format <kbd>AAAA-MM-JJ</kbd>.',

	'BAN_EXCLUDE'			=> 'Exclure du bannissement',
	'BAN_LENGTH'			=> 'Durée du bannissement',
	'BAN_REASON'			=> 'Raison du bannissement',
	'BAN_GIVE_REASON'		=> 'Raison affichée du bannissement',
	'BAN_UPDATE_SUCCESSFUL'	=> 'La liste des bannissements a été mise à jour.',

	'EMAIL_BAN'					=> 'Bannir une ou plusieurs adresses e-mails',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Si activé, permet d\'exclure de toutes les interdictions courantes les adresses e-mails renseignées.',
	'EMAIL_BAN_EXPLAIN'			=> 'Pour spécifier plus d\'une adresse e-mail, entrez chacune d\'elles sur une nouvelle ligne. Pour effectuer une interdiction sur une partie du nom, utilisez * comme caractère joker, par exemple: *@hotmail.com, *@*.domain.tld, etc.',
	'EMAIL_NO_BANNED'			=> 'Aucune adresse e-mail bannie',
	'EMAIL_UNBAN'				=> 'Débannir ou ne plus exclure des adresses e-mails',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Vous pouvez débannir (ou ne plus exclure) plusieurs adresses e-mails d\'un coup en utilisant la combinaison de touches appropriée avec votre clavier et votre souris. Les adresses e-mails exclues sont grisées et en gras.',

	'IP_BAN'					=> 'Bannir une ou plusieurs adresses IPs',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Si activé, permet d\'exclure de toutes les interdictions courantes les adresses IPs renseignées.',
	'IP_BAN_EXPLAIN'			=> 'Pour spécifier plusieurs adresses IPs ou noms d\'hôtes différents, entrez chacun d\'eux sur une nouvelle ligne. Pour spécifier un rang d\'adresses IP, séparez le début et la fin par un tiret, et utilisez * comme caractère joker.',
	'IP_HOSTNAME'				=> 'Adresses IPs ou noms d\'hôtes',
	'IP_NO_BANNED'				=> 'Aucune adresse IP bannie',
	'IP_UNBAN'					=> 'Débannir ou ne plus exclure des adresses IPs',
	'IP_UNBAN_EXPLAIN'			=> 'Vous pouvez débannir (ou ne plus exclure) plusieurs adresses IPs d\'un coup en utilisant la combinaison de touches appropriée avec votre clavier et votre souris. Les adresses IPs exclues sont grisées et en gras.',

	'LENGTH_BAN_INVALID'		=> 'La date indiquée doit être au format <kbd>AAAA-MM-JJ</kbd>.',

	'PERMANENT'		=> 'Permanent',
	
	'UNTIL'						=> 'Jusqu\'à',
	'USER_BAN'					=> 'Bannir un ou plusieurs noms d\'utilisateurs',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Si activé, permet d\'exclure de toutes les interdictions courantes les noms d\'utilisateurs renseignés.',
	'USER_BAN_EXPLAIN'			=> 'Vous pouvez bannir plusieurs utilisateurs en une fois en entrant chaque nom sur une nouvelle ligne. Utilisez la fonction <span style="text-decoration: underline;">Rechercher un membre</span> pour ajouter un ou plusieurs utilisateurs automatiquement.',
	'USER_NO_BANNED'			=> 'Aucun nom d\'utilisateur banni',
	'USER_UNBAN'				=> 'Débannir ou ne plus exclure des noms d\'utilisateurs',
	'USER_UNBAN_EXPLAIN'		=> 'Vous pouvez débannir (ou ne plus exclure) plusieurs noms d\'utilisateurs d\'un coup, en utilisant la combinaison de touches appropriée avec votre clavier et votre souris. Les noms d\'utilisateurs exclus sont grisés et en gras.',
	

));

?>