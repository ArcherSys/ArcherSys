<?php
/**
*
* viewforum [Danish]
*
* @package language
* @version $Id: viewforum.php,v 1.17 2007/05/10 15:31:21 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translators: Olympus DK Team, working at http://www.phpBB3.dk and http://area51.phpBB3.dk:
*
*		John Hjorth < john-hjorth@john-hjorth.dk > (John Hjorth) http://www.phpBBFM.dk
*		jask < jan@skovsgaard.net > (Jan Skovsgaard) http://skovsgaard.net
*		Jesper Møller < jgom@privat.dk > (Jesper G. O. Møller) http://www.jart.dk/jgom/index.html
*
* Contributors :
*
*		AlleyKat < AlleyKat@phpbb2.dk > (Finn Sørensen) http://www.phpbb2.dk
*		Dr.Diesel < dr.diesel@dream-cathers.dk > (Jes Nielsen) http://www.dream-cathers.dk
*		Jan Christensen < tamrotten@gmail.com > (Jan Christensen) http://janogwickys.dk/phpBB2/index.php
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
	'ACTIVE_TOPICS'			=> 'Aktive emner',
	'ANNOUNCEMENTS'			=> 'Bekendtgørelser',

	'FORUM_PERMISSIONS'		=> 'Forumtilladelser',

	'ICON_ANNOUNCEMENT'		=> 'Bekendtgørelse',
	'ICON_STICKY'			=> 'Opslag',

	'LOGIN_NOTIFY_FORUM'	=> 'Du er blevet adviseret om dette forum, log venligst ind for at vise det.',

	'MARK_TOPICS_READ'		=> 'Markér emner som læst',

	'NEW_POSTS_HOT'			=> 'Nye indlæg [ Populær ]',
	'NEW_POSTS_LOCKED'		=> 'Nye indlæg [ Låst ]',
	'NO_NEW_POSTS_HOT'		=> 'Ingen nye indlæg [ Populær ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Ingen nye indlæg [ Låst ]',
	'NO_READ_ACCESS'		=> 'Du har ikke de nødvendige tilladelser til at læse emner i dette forum.',

	'POST_FORUM_LOCKED'		=> 'Forum er låst',

	'TOPICS_MARKED'			=> 'Emnerne i dette forum er nu blevet markeret som læst.',

	'VIEW_FORUM'			=> 'Vis forum',
	'VIEW_FORUM_TOPIC'		=> '1 emne',
	'VIEW_FORUM_TOPICS'		=> '%d emner',
));

?>