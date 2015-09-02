<?php
/**
*
* viewtopic [Dutch]
*
* @package language
* @version $Id: viewtopic.php,v 1.0.0 2006/07/20 21:45:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group modified by phpBB.nl (vertaalteam@phpbb.nl) in 2007
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
   exit;
}
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
	'ATTACHMENT'						=> 'Bijlage',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Bijlagen zijn uitgeschakeld',

	'BOOKMARK_ADDED'		=> 'Het onderwerp is succesvol toegevoegd aan je bladwijzers.',
	'BOOKMARK_REMOVED'		=> 'Het onderwerp is succesvol verwijderd uit je bladwijzers.',
	'BOOKMARK_TOPIC'		=> 'Bladwijzer onderwerp',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Verwijder het onderwerp uit je bladwijzers',
	'BUMPED_BY'				=> 'Laatst hoger geplaatst door %1$s op %2$s',
	'BUMP_TOPIC'			=> 'Bump onderwerp',

	'CODE'	=> 'Code',

	'DELETE_TOPIC'		=> 'Verwijder onderwerp',
	'DOWNLOAD_NOTICE'	=> 'Je hebt niet de vereiste permissies om de aan dit bericht toegevoegde bestanden te zien.',

	'EDITED_TIMES_TOTAL'	=> 'Laatst bijgewerkt door %1$s op %2$s, in het totaal %3$d keer bewerkt',
	'EDITED_TIME_TOTAL'		=> 'Laatst bijgewerkt door %1$s op %2$s, in het totaal %3$d keer bewerkt',
	'EMAIL_TOPIC'			=> 'E-mail vriend',
	'ERROR_NO_ATTACHMENT'	=> 'De geselecteerde bijlage bestaat niet meer',

	'FILE_NOT_FOUND_404'	=> 'Het bestand <strong>%s</strong> bestaat niet meer.',
	'FORK_TOPIC'			=> 'Kopieer het onderwerp',

	'LINKAGE_FORBIDDEN'		=> 'Je bent niet bevoegd om te lezen, downloaden of linken van/naar deze site.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Je bent ge&iuml;nformeerd over dit onderwerp, log in om het te lezen.',
	'LOGIN_VIEWTOPIC'		=> 'Het forum is zo ingesteld dat je geregistreerd en ingelogd moet zijn om dit onderwerp te lezen.',

	'MAKE_ANNOUNCE'				=> 'Wijzig in mededeling',
	'MAKE_GLOBAL'				=> 'Wijzig in globale mededeling',
	'MAKE_NORMAL'				=> 'Wijzig in normaal onderwerp',
	'MAKE_STICKY'				=> 'Wijzig in sticky',
	'MAX_OPTIONS_SELECT'		=> 'Je mag tot <strong>%d</strong> opties selecteren',
	'MAX_OPTION_SELECT'			=> 'Je mag <strong>1</strong> optie selecteren',
	'MISSING_INLINE_ATTACHMENT'	=> 'De bijlage <strong>%s</strong> is niet langer beschikbaar',
	'MOVE_TOPIC'				=> 'Verplaats onderwerp',

	'NO_ATTACHMENT_SELECTED'	=> 'Je hebt geen bijlage opgegeven om te downloaden of te tonen.',
	'NO_NEWER_TOPICS'			=> 'Er zijn geen nieuwere onderwerpen in dit forum',
	'NO_OLDER_TOPICS'			=> 'Er zijn geen oudere onderwerpen in dit forum',
	'NO_UNREAD_POSTS'			=> 'Er zijn geen ongelezen berichten in dit onderwerp.',
	'NO_VOTE_OPTION'			=> 'Je moet een optie selecteren om te stemmen.',

	'POLL_RUN_TILL'		=> 'De poll loopt tot %s',
	'POLL_VOTED_OPTION'	=> 'Je hebt gestemd voor deze optie',
	'PRINT_TOPIC'		=> 'Afdrukweergave',

	'QUICK_MOD'	=> 'Mod gereedschap',
	'QUOTE'		=> 'Citaat',

	'REPLY_TO_TOPIC'	=> 'Antwoord op onderwerp',
	'RETURN_POST'		=> '%sKeer terug naar het bericht%s',

	'SUBMIT_VOTE'	=> 'Stem',

	'TOTAL_VOTES'	=> 'Totaal aantal stemmen',

	'UNLOCK_TOPIC'	=> 'Heropen onderwerp',

	'VIEW_INFO'				=> 'Bericht details',
	'VIEW_NEXT_TOPIC'		=> 'Volgend onderwerp',
	'VIEW_PREVIOUS_TOPIC'	=> 'Vorig onderwerp',
	'VIEW_RESULTS'			=> 'Toon resultaten',
	'VIEW_TOPIC_POST'		=> '1 bericht',
	'VIEW_TOPIC_POSTS'		=> '%d berichten',
	'VIEW_UNREAD_POST'		=> 'Eerste ongelezen',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Je stem is verwerkt',

	'NO_VOTES'		=> 'Geen stemmen',
	'POLL_ENDED_AT'	=> 'Poll eindigt op',
));
?>