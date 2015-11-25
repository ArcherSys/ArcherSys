<?php
/** 
*
* acp_forums.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-08-28 - phpBB.no
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
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
	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'	=> 'You want to change a postable forum having subforums to a link. Please move all subforums out of this forum before you proceed, because after changing to a link you are no longer able to see the subforums currently connected to this forum.',
	'AUTO_PRUNE_DAYS'	=> 'Auto-sletting',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Spesifiser når emnet skal slettes ut i fra hvor mange dager det må gå etter siste innlegg.',
	'AUTO_PRUNE_FREQ'	=> 'Auto-slett frekvenser',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Tid i dager mellom hver handling.',
	'AUTO_PRUNE_VIEWED'	=> 'Slett emner som ikke er vist på en viss tid automatisk',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Spesifiser når emnet skal slettes ut i fra hvor mange dager dt må gå etter siste visning.',
	'COPY_PERMISSIONS'	=> 'Kopier rettigheter fra',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Forumet vil ha samme rettigheter som valgt her. Hvis du ikke har angitt noe her, vil ikke forumet bli synlig før du spesifiserer egne rettigheter.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Hvis du vil kopiere rettigheter, vil forumet ha de samme rettighetene som valgt her. Eventuelle gamle rettigheter vil bli overskrevet. Hvis ingen forum er valgt, vil gjeldende rettigheter beholdes.',
	'CREATE_FORUM'	=> 'Lag et nytt forum',
	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Slett eller flytt innhold',
	'DECIDE_MOVE_DELETE_SUBFORUMS'	=> 'Slett underforum eller flytt dem til et annet',
	'DEFAULT_STYLE'	=> 'Standarddesign',
	'DELETE_ALL_POSTS'	=> 'Slett innlegg',
	'DELETE_SUBFORUMS'	=> 'Slett underforumer og innlegg',
	'DISPLAY_ACTIVE_TOPICS'	=> 'Aktiver aktive emner',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'	=> 'Hvis ja, vil aktive emner i valgte underforum bli vist under dennne kategorien.',
	'EDIT_FORUM'	=> 'Endre forum',
	'ENABLE_INDEXING'	=> 'Aktiver søkeindeksering',
	'ENABLE_INDEXING_EXPLAIN'	=> 'Hvis ja, vil innleggene i dette forumet bli indeksert i søketabellen.',
	'ENABLE_POST_REVIEW'	=> 'Aktiver innleggsgjennomsøking',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Denne funksjonen gjør at brukere kan se igjennom innleggene deres hvis et nytt svar var lagt til mens brukeren skrev sitt. Dette bør være deaktivert i chatteforum.',
	'ENABLE_RECENT'	=> 'Vis aktive emner',
	'ENABLE_RECENT_EXPLAIN'	=> 'Hvis ja, vil de aktive emnene i dette forumet bli vist på listen over aktive emner.',
	'ENABLE_TOPIC_ICONS'	=> 'Aktiver emneikoner',
	'FORUM_ADMIN'	=> 'Forumadministrasjon',
	'FORUM_ADMIN_EXPLAIN'	=> 'I phpBB 3 har ikke kategoriene noe å si; alt er forumbasert. Hvert forum kan ha et ubegrenset antall underforum med like muligheter som hovedforumene.',
	'FORUM_AUTO_PRUNE'	=> 'Aktiver auto-sletting',
	'FORUM_AUTO_PRUNE_EXPLAIN'	=> 'Auto-sletter emnene i forumet og stiller inn frekvens-/aldersparemetrene under.',
	'FORUM_CREATED'	=> 'Forumet er laget.',
	'FORUM_DATA_NEGATIVE'	=> 'Autoslettingsparametrene kan ikke være negative.',
	'FORUM_DESC_TOO_LONG'	=> 'Forumbeskrivelsen er for lang; den kan ikke være på mer enn 4000 teegn.',
	'FORUM_DELETE'	=> 'Slett forum',
	'FORUM_DELETE_EXPLAIN'	=> 'Skjemaet under lar deg slette forumet. Hvis forumet inneholder innlegg og/eller underforum, kan du velge hvor du eventuelt vil flytte disse.',
	'FORUM_DELETED'	=> 'Forumet er slettet.',
	'FORUM_DESC'	=> 'Beskrivelse',
	'FORUM_DESC_EXPLAIN'	=> 'HTML vil bli vist som det er.',
	'FORUM_EDIT_EXPLAIN'	=> 'Skjemaet under lar deg administrere forumet. Merk deg at alle moderatorinnstillinger i forumet blir kontrollert via rettighetssystemet for hver brukergruppe.',
	'FORUM_IMAGE'	=> 'Forumbilde',
	'FORUM_IMAGE_EXPLAIN'	=> 'Plassering til bildet du vil assossiere med forumet.',
	'FORUM_LINK_EXPLAIN'	=> 'Full URL (inkludert <samp>http://</samp>) til adressen dette forumet skal linke til, for eksempel <samp>http://phpbb.no/</samp>.',
	'FORUM_LINK_TRACK'	=> 'Antall videresendinger',
	'FORUM_LINK_TRACK_EXPLAIN'	=> 'Antall ganger noen har kliket på linken.',
	'FORUM_NAME'	=> 'Forumnavn',
	'FORUM_NAME_EMPTY'	=> 'Du å spesifisere et navn til forumet.',
	'FORUM_PARENT'	=> 'Hovedforum',
	'FORUM_PASSWORD'	=> 'Forumpassord',
	'FORUM_PASSWORD_CONFIRM'	=> 'Bekreft forumpassord',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Bare nødvendig hvis et passord er spesifisert.',
	'FORUM_PASSWORD_EXPLAIN'	=> 'Definerer et passord til forumet; bruk rettighetssystemet.',
	'FORUM_PASSWORD_MISMATCH'	=> 'Passordene er ikke like.',
	'FORUM_PRUNE_SETTINGS'	=> 'Aut-slettingsinnstillinger',
	'FORUM_RESYNCED'	=> 'Forumet "%s" er resynkronisert',
	'FORUM_RULES_EXPLAIN'	=> 'Forumreglene vises på alle sidene i gjeldende forum.',
	'FORUM_RULES_LINK'	=> 'Link til forumregler',
	'FORUM_RULES_LINK_EXPLAIN'	=> 'Her kan du spesifisere URL-en til en eventuell side hvor reglene er opplistet. Benytter du denne funksjonen, vil ikke teksten i regeltekstfunksjonen bli vist.',
	'FORUM_RULES_PREVIEW'	=> 'Forhåndsvisning av forumreglene',
	'FORUM_RULES_TOO_LONG'	=> 'Forumreglene kan ikke ha er enn 4000 tegn.',
	'FORUM_SETTINGS'	=> 'Foruminnstillinger',
	'FORUM_STATUS'	=> 'Forumstatus',
	'FORUM_STYLE'	=> 'Forumdesign',
	'FORUM_TOPICS_PAGE'	=> 'Antall emner per side',
	'FORUM_TOPICS_PAGE_EXPLAIN'	=> 'Hvis dette ikke er satt til 0, vil dette overskrive standardinnstillingen.',
	'FORUM_TYPE'	=> 'Forumtype',
	'FORUM_UPDATED'	=> 'Foruminformasjonen er oppdatert.',
	'GENERAL_FORUM_SETTINGS'	=> 'Generelle foruminnstillinger',
	'LINK'	=> 'Link',
	'LIST_INDEX'	=> 'Link til underforum fra hovedsiden',
	'LIST_INDEX_EXPLAIN'	=> 'Viser en link til underforumene under forumbeskrivelsen til hovedforumet.',
	'LOCKED'	=> 'Stengt',
	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Forumet du vil flytte innleggene til er utilgjengelig. Velg et tilgjengelig forum.',
	'MOVE_POSTS_TO'	=> 'Flytt innlegg til',
	'MOVE_SUBFORUMS_TO'	=> 'Flytt underforum til',
	'NO_DESTINATION_FORUM'	=> 'Du har ikke spesifisert et forum du skal flytte til.',
	'NO_FORUM_ACTION'	=> 'Ingen handling for hva som skal skje med forumets innhold er spesifisert.',
	'NO_PARENT'	=> 'Ingen overforum',
	'NO_PERMISSIONS'	=> 'Ikke kopier rettigheter',
	'NO_PERMISSION_FORUM_ADD'	=> 'Du kan ikke lage nye forum.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Du kan ikke slette forum.',
	'PARENT_IS_LINK_FORUM'	=> 'Overforumet er en videresendingslink. Linkforumer kan ikke inneholde underforum; velg et annet.',
	'PARENT_NOT_EXIST'	=> 'Overforumet eksisterer ikke.',
	'PRUNE_ANNOUNCEMENTS'	=> 'Auto-slett annonseringer',
	'PRUNE_STICKY'	=> 'Auto-slett prioriteter',
	'PRUNE_OLD_POLLS'	=> 'Auto-slett avstemninger',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Sletter emner med gamle avstemninger.',
	'REDIRECT_ACL'	=> 'Nå kan du %sstille inn rettigheter for dette forumet%s.',
	'SYNC_IN_PROGRESS'	=> 'Synkronisering',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Synkroniserer emne %1$d av %2$d.',
	'TYPE_CAT'	=> 'Kategori',
	'TYPE_FORUM'	=> 'Forum',
	'TYPE_LINK'	=> 'Link',
	'UNLOCKED'	=> 'Åpen',
));

?>