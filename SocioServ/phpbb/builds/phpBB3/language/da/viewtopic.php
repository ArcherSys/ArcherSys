<?php
/** 
*
* viewtopic [Danish]
*
* @package language
* @version $Id: viewtopic.php,v 1.18 2007/07/22 13:14:36 kellanved Exp $
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
	'ATTACHMENT'						=> 'Vedhæftet fil',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Vedhæftning af filer er slået fra.',

	'BOOKMARK_ADDED'		=> 'Bogmærke for emnet er tilføjet.',
	'BOOKMARK_REMOVED'		=> 'Bogmærke for emnet er fjernet.',
	'BOOKMARK_TOPIC'		=> 'Bogmærk emne',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Fjern fra bogmærker',
	'BUMPED_BY'				=> 'Sidst placeret øverst af %1$s %2$s.',
	'BUMP_TOPIC'			=> 'Placér emne øverst',

	'CODE'					=> 'Kode',

	'DELETE_TOPIC'			=> 'Slet emne',
	'DOWNLOAD_NOTICE'		=> 'Du har ikke de nødvendige tilladelser til at se vedhæftede filer i dette indlæg.',

	'EDITED_TIMES_TOTAL'	=> 'Sidst rettet af %1$s %2$s, rettet i alt %3$d gange.',
	'EDITED_TIME_TOTAL'		=> 'Sidst rettet af %1$s %2$s, rettet i alt %3$d gang.',
	'EMAIL_TOPIC'			=> 'Email emne til ven',
	'ERROR_NO_ATTACHMENT'	=> 'Den valgte vedhæftede fil eksisterer ikke længere.',

	'FILE_NOT_FOUND_404'	=> 'Filen <strong>%s</strong> eksisterer ikke.',
	'FORK_TOPIC'			=> 'Kopiér emne',

	'LINKAGE_FORBIDDEN'		=> 'Du har ikke tilladelse til at se, downloade fra, eller linke til/fra denne side.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Du er blevet adviseret om dette emne, log venligst ind for at se det.',
	'LOGIN_VIEWTOPIC'		=> 'Board administratoren kræver at du er tilmeldt og logget ind for at se dette emne.',

	'MAKE_ANNOUNCE'				=> 'Ændre til "Bekendtgørelse"',
	'MAKE_GLOBAL'				=> 'Ændre til "Global bekendtgørelse"',
	'MAKE_NORMAL'				=> 'Ændre til "Standard emne"',
	'MAKE_STICKY'				=> 'Ændre til "Opslag"',
	'MAX_OPTIONS_SELECT'		=> 'Du kan vælge op til <strong>%d</strong> muligheder',
	'MAX_OPTION_SELECT'			=> 'Du kan vælge <strong>1</strong> mulighed',
	'MISSING_INLINE_ATTACHMENT'	=> 'Den vedhæftede fil <strong>%s</strong> er ikke længere tilgængelig',
	'MOVE_TOPIC'				=> 'Flyt emne',

	'NO_ATTACHMENT_SELECTED'=> 'Du har ikke valgt en vedhæftet fil at downloade eller se.',
	'NO_NEWER_TOPICS'		=> 'Der er ingen nyere emner i dette forum.',
	'NO_OLDER_TOPICS'		=> 'Der er ingen ældre emner i dette forum.',
	'NO_UNREAD_POSTS'		=> 'Der er ingen nye ulæste indlæg i dette emne.',
	'NO_VOTE_OPTION'		=> 'Du skal vælge en afstemningsmulighed når du stemmer.',
	'NO_VOTES'				=> 'Ingen stemmer',

	'POLL_ENDED_AT'			=> 'Afstemning sluttede %s',
	'POLL_RUN_TILL'			=> 'Afstemningen varer indtil %s',
	'POLL_VOTED_OPTION'		=> 'Du stemte på denne afstemningsmulighed',
	'PRINT_TOPIC'			=> 'Udskriv emne',

	'QUICK_MOD'				=> 'Redigeringsværktøjer',
	'QUOTE'					=> 'Citat',

	'REPLY_TO_TOPIC'		=> 'Svar på emne',
	'RETURN_POST'			=> '%sTilbage til indlægget%s',

	'SUBMIT_VOTE'			=> 'Stem',

	'TOTAL_VOTES'			=> 'Stemmer i alt',

	'UNLOCK_TOPIC'			=> 'Lås emne op',

	'VIEW_INFO'				=> 'Indlægsinformation',
	'VIEW_NEXT_TOPIC'		=> 'Næste emne',
	'VIEW_PREVIOUS_TOPIC'	=> 'Forrige emne',
	'VIEW_RESULTS'			=> 'Vis resultater',
	'VIEW_TOPIC_POST'		=> '1 indlæg',
	'VIEW_TOPIC_POSTS'		=> '%d indlæg',
	'VIEW_UNREAD_POST'		=> 'Første ulæste indlæg',
	'VISIT_WEBSITE'			=> 'Hjemmeside',
	'VOTE_SUBMITTED'		=> 'Din stemme er nu registreret.',

));

?>