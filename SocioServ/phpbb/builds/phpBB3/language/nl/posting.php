<?php
/**
*
* posting [Dutch]
*
* @package language
* @version $Id: posting.php,v 1.0.0 2006/08/06 17:25:29 naderman Exp $
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
	'ADD_ATTACHMENT'			=> 'Bijlage toevoegen',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Als je geen bijlage wilt toevoegen aan je bericht, laat deze velden dan leeg.',
	'ADD_FILE'					=> 'Voeg bestand toe',
	'ADD_POLL'					=> 'Voeg poll toe',
	'ADD_POLL_EXPLAIN'			=> 'Als je geen poll wilt toevoegen aan je onderwerp, laat deze velden dan leeg.',
	'ALREADY_DELETED'			=> 'Sorry, maar dit bericht is al verwijderd.',
	'ATTACH_QUOTA_REACHED'		=> 'Sorry, de bijlagequota is bereikt.',
	'ATTACH_SIG'				=> 'Voeg mijn onderschrift toe (te wijzigen via het gebruikerspaneel)',

	'BBCODE_A_HELP'			=> 'BBCode ge&uuml;ploade bijlage: [attachment=]bestandsnaam.ext[/attachment]',
	'BBCODE_B_HELP'			=> 'Vette tekst: [b]tekst[/b]',
	'BBCODE_C_HELP'			=> 'Code weergave: [code]code[/code]',
	'BBCODE_E_HELP'			=> 'Lijst: voeg lijstelement toe',
	'BBCODE_F_HELP'			=> 'Letter grootte: [size=85]kleine tekst[/size]',
	'BBCODE_IS_OFF'			=> '%sBBCode%s staat <em>UIT</em>',
	'BBCODE_IS_ON'			=> '%sBBCode%s staat <em>AAN</em>',
	'BBCODE_I_HELP'			=> 'Cursieve tekst: [i]tekst[/i]',
	'BBCODE_L_HELP'			=> 'Lijst: [list]tekst[/list]',
	'BBCODE_LISTITEM_HELP'	=> 'Lijst punt: [*]tekst[/*]',
	'BBCODE_O_HELP'			=> 'Geordende lijst: [list=]tekst[/list]',
	'BBCODE_P_HELP'			=> 'Afbeelding: [img]http://www.phpbb.nl/fotos/foto.jpg[/img]',
	'BBCODE_Q_HELP'			=> 'Citeer tekst: [quote]tekst[/quote]',
	'BBCODE_S_HELP'			=> 'Tekstkleur: [color=red]tekst[/color] Tip: je kan ook dit gebruiken: #FF0000',
	'BBCODE_U_HELP'			=> 'Onderstreepte tekst: [u]tekst[/u]',
	'BBCODE_W_HELP'			=> 'URL: [url]http://url[/url] of [url=http://url]URL tekst[/url]',
	'BBCODE_D_HELP'			=> 'Flash: [flash=height,width]http://url[/flash]',
	'BUMP_ERROR'			=> 'Je kan dit onderwerp niet zo snel na het laatste bericht bumpen.',

	'CANNOT_DELETE_REPLIED'		=> 'Sorry, maar je kan alleen berichten verwijderen waarop nog niet gereageerd is.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Dit bericht is gesloten. Je kan niet langer dit bericht bewerken.',
	'CANNOT_EDIT_TIME'			=> 'Je kan niet meer bewerken of verwijderen dat bericht.',
	'CANNOT_POST_ANNOUNCE'		=> 'Sorry, maar je kan geen mededelingen plaatsen.',
	'CANNOT_POST_STICKY'		=> 'Sorry, maar je kan geen belangrijke onderwerpen plaatsen.',
	'CHANGE_TOPIC_TO'			=> 'Verander onderwerptype naar',
	'CLOSE_TAGS'				=> 'Sluit tags',
	'CURRENT_TOPIC'				=> 'Huidig onderwerp',

	'DELETE_FILE'				=> 'Verwijder bestand',
	'DELETE_MESSAGE'			=> 'Verwijder bericht',
	'DELETE_MESSAGE_CONFIRM'	=> 'Weet je zeker dat je dit bericht wilt verwijderen?',
	'DELETE_OWN_POSTS'			=> 'Sorry, maar je kan alleen je eigen berichten verwijderen.',
	'DELETE_POST_CONFIRM'		=> 'Weet je zeker dat je dit bericht wilt verwijderen?',
	'DELETE_POST_WARN'			=> 'Verwijderde berichten kunnen niet meer hersteld worden',
	'DISABLE_BBCODE'			=> 'Schakel BBCode uit',
	'DISABLE_MAGIC_URL'			=> 'URL\'s niet automatisch omzetten',
	'DISABLE_SMILIES'			=> 'Schakel smilies uit',
	'DISALLOWED_EXTENSION'		=> 'De extensie %s is niet toegestaan.',
	'DRAFT_LOADED'				=> 'Het concept werd in het tekstveld geladen, je kan het bericht nu be&euml;indigen en plaatsen.<br />Je concept wordt, na het plaatsen van het bericht, verwijderd.',
	'DRAFT_LOADED_PM'			=> 'Het concept werd in het tekstveld geladen, je kan het priv&eacute;bericht nu be&euml;indigen en plaatsen.<br />Je concept wordt, na het plaatsen van het priv&eacute;bericht, verwijderd.',
	'DRAFT_SAVED'				=> 'Het concept is succesvol opgeslagen.',
	'DRAFT_TITLE'				=> 'Concepttitel',

	'EDIT_REASON'		=> 'Reden voor wijziging',
	'EMPTY_FILEUPLOAD'	=> 'Het ge&uuml;ploade bestand is leeg.',
	'EMPTY_MESSAGE'		=> 'Je moet iets typen om het te kunnen plaatsen.',
	'EMPTY_REMOTE_DATA'	=> 'Bestand kan niet ge&uuml;pload worden, probeer het nog eens handmatig te uploaden.',

	'FLASH_IS_OFF'		=> '[flash] staat <em>UIT</em>',
	'FLASH_IS_ON'		=> '[flash] staat <em>AAN</em>',
	'FLOOD_ERROR'		=> 'Je kunt niet zo snel een bericht plaatsen na je laatste bericht.',
	'FONT_COLOR'		=> 'Tekstkleur',
	'FONT_COLOR_HIDE'	=> 'Tekstkleur verbergen',
	'FONT_HUGE'			=> 'Extra groot',
	'FONT_LARGE'		=> 'Groot',
	'FONT_NORMAL'		=> 'Normaal',
	'FONT_SIZE'			=> 'Lettergrootte',
	'FONT_SMALL'		=> 'Klein',
	'FONT_TINY'			=> 'Extra klein',

	'GENERAL_UPLOAD_ERROR'	=> 'Je kan geen bijlage uploaden naar %s.',

	'IMAGES_ARE_OFF'	=> '[img] staat <em>UIT</em>',
	'IMAGES_ARE_ON'		=> '[img] staat <em>AAN</em>',
	'INVALID_FILENAME'	=> '%s is een ongeldige bestandsnaam.',

	'LOAD'					=> 'Laad',
	'LOAD_DRAFT'			=> 'Laad concept',
	'LOAD_DRAFT_EXPLAIN'	=> 'Hier is het mogelijk om een concept te selecteren waarmee je verder gaat met schrijven. Je huidige bericht wordt geannuleerd, alle huidige berichtinhoud wordt verwijderd. Tonen, bewerken en verwijderen van concepten kan in je gebruikers controlepaneel.',

	'LOGIN_EXPLAIN_BUMP'	=> 'Je moet in dit forum ingelogd zijn om het onderwerp te bumpen.',
	'LOGIN_EXPLAIN_DELETE'	=> 'Je moet in dit forum ingelogd zijn om berichten te kunnen verwijderen.',
	'LOGIN_EXPLAIN_POST'	=> 'Je moet in dit forum ingelogd zijn om berichten te kunnen plaatsen.',
	'LOGIN_EXPLAIN_QUOTE'	=> 'Je moet in dit forum ingelogd zijn om te kunnen citeren.',
	'LOGIN_EXPLAIN_REPLY'	=> 'Je moet in dit forum ingelogd zijn om te kunnen antwoorden.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Je mag alleen gebruik maken van lettertypes tot grootte %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Je flashbestanden mogen maximaal %1$d pixels hoog zijn.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Je flashbestanden mogen maximaal %1$d pixels breed zijn.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Je afbeeldingen mogen maximaal %1$d pixels hoog zijn.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Je afbeeldingen mogen maximaal %1$d pixels breed zijn.',

	'MESSAGE_BODY_EXPLAIN'	=> 'Geef je bericht hier, het mag niet meer bevatten dan <strong>%d</strong> tekens.',
	'MESSAGE_DELETED'		=> 'Je bericht is succesvol verwijderd.',
	'MORE_SMILIES'			=> 'Toon meer smilies',

	'NOTIFY_REPLY'				=> 'Breng mij op de hoogte van nieuwe reacties',
	'NOT_UPLOADED'				=> 'Bestand kan niet ge&uuml;pload worden.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Je kan niet de poll opties verwijderen waar al op gestemd is.',
	'NO_PM_ICON'				=> 'Geen PB-icoon',
	'NO_POLL_TITLE'				=> 'Je moet de poll een titel geven.',
	'NO_POST'					=> 'Het opgevraagde bericht bestaat niet.',
	'NO_POST_MODE'				=> 'Geen berichtmodus gespecificeerd.',

	'PARTIAL_UPLOAD'			=> 'Het ge&uuml;ploade bestand is maar gedeeltelijk ge&uuml;pload.',
	'PHP_SIZE_NA'				=> 'De bestandsgrootte van de bijlage is te groot.<br />De maximale, in php.ini gedefinieerde, grootte kan niet gelezen worden.',
	'PHP_SIZE_OVERRUN'			=> 'De bestandsgrootte van de bijlage is te groot, de maximum uploadgrootte is %dMB.<br />Hou er rekening mee dat het zo is ingesteld in php.ini en dat kan niet worden overschreven.',
	'PLACE_INLINE'				=> 'Plaats in bericht',
	'POLL_DELETE'				=> 'Verwijder poll',
	'POLL_FOR'					=> 'Poll geldig tot',
	'POLL_FOR_EXPLAIN'			=> 'Typ 0 of laat het veld leeg als de poll nooit eindigt.',
	'POLL_MAX_OPTIONS'			=> 'Opties per gebruiker',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Het aantal opties dat een gebruiker mag aanvinken als hij/zij een stem uitbrengt.',
	'POLL_OPTIONS'				=> 'Poll opties',
	'POLL_OPTIONS_EXPLAIN'		=> 'Plaats elke optie op een nieuwe regel. Je mag <strong>%d</strong> opties ingeven.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Plaats elke optie op een nieuwe regel. Je mag <strong>%d</strong> opties ingeven. Als je een optie toevoegt of verwijdert, worden alle vorige opties gereset.',
	'POLL_QUESTION'				=> 'Poll vraag',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'De uiteindelijke lengte van je poll titel is te groot, kijk of je geen smilies en BBCodes kan verwijderen.',
	'POLL_TITLE_TOO_LONG'		=> 'De poll titel moet korter dan 100 tekens zijn.',
	'POLL_VOTE_CHANGE'			=> 'Sta stemmen opnieuw toe',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Als het ingeschakeld is kunnen gebruikers hun stem herzien en opnieuw stemmen.',
	'POSTED_ATTACHMENTS'		=> 'Geplaatste bijlagen',
	'POST_APPROVAL_NOTIFY'		=> 'Je zult een bevestiging krijgen wanneer je bericht is goedgekeurd.',
	'POST_CONFIRMATION'			=> 'Bevestigen van het bericht',
	'POST_CONFIRM_EXPLAIN'		=> 'Om automatische berichten te voorkomen, vereist het forum een confirmatiecode. De code wordt in de afbeelding hieronder weergegeven. Als je kleurenblind bent of een andere reden hebt waardoor je deze code niet kunt lezen, neem dan contact op met de %sbeheerder%s.',
	'POST_DELETED'				=> 'Je bericht is succesvol verwijderd.',
	'POST_EDITED'				=> 'Je bericht is succesvol bewerkt.',
	'POST_EDITED_MOD'			=> 'Je bericht is bewerkt, maar het zal nog goedgekeurd moeten worden voordat het publiekelijk wordt weergegeven.',
	'POST_GLOBAL'				=> 'Globaal',
	'POST_ICON'					=> 'Berichticoon',
	'POST_NORMAL'				=> 'Normaal',
	'POST_REVIEW'				=> 'Onderwerp voorbeeld',
	'POST_REVIEW_EXPLAIN'		=> 'Er is een nieuw bericht geplaatst in dit onderwerp. Het is handig als je het bericht eerst ziet voordat je dit bericht plaatst om dubbel plaatsen van berichten te voorkomen.',
	'POST_STORED'				=> 'Je bericht is succesvol geplaatst.',
	'POST_STORED_MOD'			=> 'Je bericht is opgeslagen, maar het zal nog goedgekeurd moeten worden voordat het publiekelijk wordt weergegeven.',
	'POST_TOPIC_AS'				=> 'Onderwerptype',
	'PROGRESS_BAR'				=> 'Voortgangsbalk',

	'QUOTE_DEPTH_EXCEEDED'	=> 'Je mag maar %1$d citaten in een andere citaat hebben.',

	'SAVE'							=> 'Opslaan',
	'SAVE_DATE'						=> 'Opgeslagen op',
	'SAVE_DRAFT'					=> 'Concept bewaren',
	'SAVE_DRAFT_CONFIRM'			=> 'Houd er rekening mee dat bij het bewaren van het concept alleen de titel en het bericht opgeslagen worden. Ieder ander element wordt verwijderd. Weet je zeker dat je het concept wilt opslaan?',
	'SMILIES'						=> 'Smilies',
	'SMILIES_ARE_OFF'				=> 'Smilies staan <em>UIT</em>',
	'SMILIES_ARE_ON'				=> 'Smilies staan <em>AAN</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'	=> 'Sticky/Mededeling tijdslimiet',
	'STICK_TOPIC_FOR'				=> 'Maak dit onderwerp sticky voor',
	'STICK_TOPIC_FOR_EXPLAIN'		=> 'Typ 0 in of laat het veld leeg als je de sticky/mededeling oneindig wilt laten duren.',
	'STYLES_TIP'					=> 'Tip: opmaak kan je snel toepassen op de geselecteerde tekst.',

	'TOO_FEW_CHARS'			=> 'Je bericht bevat te weinig tekens.',
	'TOO_FEW_POLL_OPTIONS'	=> 'Je moet minimaal twee poll opties hebben ingegeven.',
	'TOO_MANY_ATTACHMENTS'	=> 'Kan geen andere bijlage toevoegen, %d is het maximum.',
	'TOO_MANY_CHARS'		=> 'Je bericht bevat teveel tekens.',
	'TOO_MANY_CHARS_POST'		=> 'Je bericht bevat %1$d tekens. Het maximum aantal toegestane tekens is %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Je onderschrift bevat %1$d tekens. Het maximum aantal toegestane tekens is %2$d.',
	'TOO_MANY_POLL_OPTIONS'	=> 'Je hebt geprobeerd te veel poll opties in te geven.',
	'TOO_MANY_SMILIES'		=> 'Je bericht bevat teveel smilies. Een maximum van %d smilies zijn toegestaan.',
	'TOO_MANY_URLS'			=> 'Je bericht bevat teveel URL\'s. Een maximum van %d URL\'s zijn toegestaan.',
	'TOO_MANY_USER_OPTIONS'	=> 'Je kan niet meer keuzes per gebruiker toestaan dan het aantal poll opties.',
	'TOPIC_BUMPED'			=> 'Onderwerp is succesvol gebumpt.',

	'UNAUTHORISED_BBCODE'		=> 'Je kan geen gebruik maken van de volgende BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Om over te schakelen van globale mededeling naar normaal onderwerp, zul je een forum voor dit bericht moeten kiezen.',
	'UPDATE_COMMENT'			=> 'Werk opmerking bij',
	'URL_INVALID'				=> 'De url die je gespecificeerd hebt is ongeldig.',
	'URL_NOT_FOUND'				=> 'De bestand die je gespecificeerd hebt is niet gevonden.',
	'URL_IS_OFF'				=> '[url] staat UIT',
	'URL_IS_ON'					=> '[url] staat AAN',
	'USER_CANNOT_BUMP'			=> 'Je kan geen onderwerpen bumpen in dit forum.',
	'USER_CANNOT_DELETE'		=> 'Je kan geen berichten verwijderen in dit forum.',
	'USER_CANNOT_EDIT'			=> 'Je kan geen berichten bewerken in dit forum.',
	'USER_CANNOT_REPLY'			=> 'Je kan niet antwoorden op berichten in dit forum.',
	'USER_CANNOT_FORUM_POST'	=> 'Je hebt niet de permissies om deze berichtactie door te zetten omdat dit forumtype dit niet ondersteund.',

	'VIEW_MESSAGE'			=> '%sToon het geplaatste bericht%s',
	'VIEW_PRIVATE_MESSAGE'	=> '%sBekijk je verstuurde priv&eacute;bericht%s',

	'WRONG_FILESIZE'	=> 'Het bestand is te groot, maximum toegestane grootte is %1d %2s.',
	'WRONG_SIZE'		=> 'De afbeelding mag op zo\'n minst %1$d pixels breed, %2$d pixels hoog zijn en maximum %3$d pixels breed en %4$d pixels hoog. De toegevoegde afbeelding is %5$d pixels breed en %6$d pixels hoog.',
));
?>