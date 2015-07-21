<?php
/** 
*
* acp_forums [Swedish] (version 0.5.0 - 3.0.RC5)
*
* @package language
* @version $Id: forums.php,v 1.13 2007/08/25 14:15:13 virtuality Exp $
* @copyright (c) 2005 phpBB Group 
* @author (c) 2006-2007 Jonathan Gulbrandsen (jonathan@carlssonplanet.com)
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Inläggsålder för auto-rensning',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Antal dagar efter det senaste inlägget som en tråd ska tas bort efter.',
	'AUTO_PRUNE_FREQ'			=> 'Auto-rensningsfrekvens',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Tid i dagar mellan rensningar.',
	'AUTO_PRUNE_VIEWED'			=> 'Inläggsvisningsålder för auto-rensning',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Antal dagar sen en tråd senast visades som tråden ska tas bort efter.',

	'COPY_PERMISSIONS'				=> 'Kopiera rättigheter från',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'När denna kategori väl skapat så kommer den att ha samma rättigheter som den kategori som du väljer här. Om ingen kategori väljs här så  kommer den nya kategorin inte att synas förrän rättigheter ställts in för den.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Om du väljer att kopiera rättigheter så kommer kategorin att få samma rättigheter som den du väljer här. Detta kommer att skriva över alla eventuella rättigheter du redan ställt in för denna kategori. Om ingen kategori väljs så kommer de nuvarande rättigheterna att behållas.',
	'CREATE_FORUM'					=> 'Skapa ny kategori',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Ta bort innehåll eller flytta till kategori',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Ta bort underkategorier eller flytta till kategori',
	'DEFAULT_STYLE'						=> 'Standardstil',
	'DELETE_ALL_POSTS'					=> 'Ta bort inlägg',
	'DELETE_SUBFORUMS'					=> 'Ta bort underkategorier och inlägg',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Aktivera aktiva trådar',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Om satt till ja kommer aktiva trådar i valda underkategorier visas under denna huvudkategori.',

	'EDIT_FORUM'					=> 'Redigera kategori',
	'ENABLE_INDEXING'				=> 'Aktivera sökindexering',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Om satt till ja så kommer inlägg i denna kategori att indexeras för sökning.',
	'ENABLE_POST_REVIEW'			=> 'Aktivera inläggsgranskning',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Om satt till ja så kommer användare att låtas granska sitt inlägg igen om nya inlägg gjorts i tråden under tiden användaren skrev sitt. Detta bör inaktiveras för chattkategorier.',
	'ENABLE_RECENT'					=> 'Visa aktiva trådar',
	'ENABLE_RECENT_EXPLAIN'			=> 'Om satt till ja så kommer trådar gjorda i denna kategori att visas i listan över aktiva trådar.',
	'ENABLE_TOPIC_ICONS'			=> 'Aktivera trådikoner',

	'FORUM_ADMIN'						=> 'Kategoriadministration',
	'FORUM_ADMIN_EXPLAIN'				=> 'I phpBB3 finns det inga huvudkategorier som i phpBB2, allt är kategoribaserat. Varje kategori kan ha ett obegränsat antal underkategorier och du kan bestämma om de ska kunna postas i eller inte (alltså om de ska bete sig som en gammal huvudkategori). Här kan du lägga till, redigera, ta bort, låsa och låsa upp individuella kategorier och ställa in andra inställningar. Om det behövs kan du också synkronisera en kategori här. <strong>Du måste kopiera eler ställa in lämpliga rättigheter för nyskapade kategorier för att de ska visas.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Aktivera auto-rensning',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Rensar kategorin på trådar, ställ in frekvens/åldersparametrar nedan.',
	'FORUM_CREATED'						=> 'Kategorin skapades.',
	'FORUM_DATA_NEGATIVE'				=> 'Rensningsparametrar kan inte vara negativa.',
	'FORUM_DESC_TOO_LONG'				=> 'Kategoribeskrivningen är för lång, den måste vara kortare än 4000 tecken.',
	'FORUM_DELETE'						=> 'Ta bort kategori',
	'FORUM_DELETE_EXPLAIN'				=> 'Formuläret nedan låter dig ta bort en kategori. Om kategorin går att posta i kan du bestämma vart du vill att alla trådar (eller kategorier) som det innehåller ska flyttas.',
	'FORUM_DELETED'						=> 'Kategorin togs bort.',
	'FORUM_DESC'						=> 'Beskrivning',
	'FORUM_DESC_EXPLAIN'				=> 'All HTML som skrivs in här kommer att visas som den är.',
	'FORUM_EDIT_EXPLAIN'				=> 'Formuläret nedan låter dig skräddarsy denna kategori. Kom ihåg att moderation och inläggsräkning ställs in via kategorirättigheter för varje användare eller användargrupp.',
	'FORUM_IMAGE'						=> 'Kategoribild',
	'FORUM_IMAGE_EXPLAIN'				=> 'Sökväg till, relativt till phpBBs rotkatalog, en extra bild som ska visas tillsammans med denna kategori.',
	'FORUM_LINK_EXPLAIN'				=> 'Fullständig URL (inklusive protokollet, t.ex.: <samp>http://</samp>) till platsen som denna kategori ska ta användaren vid klick, t.ex.: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Spåra vidarebefordringar',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Registrerar antal gånger en kategorilänk klickats på.',
	'FORUM_NAME'						=> 'Kategorinamn',
	'FORUM_NAME_EMPTY'					=> 'Du måste ange ett namn för denna kategori.',
	'FORUM_PARENT'						=> 'Ovanliggande kategori',
	'FORUM_PASSWORD'					=> 'Kategorilösenord',
	'FORUM_PASSWORD_CONFIRM'			=> 'Bekräfta kategorilösenord',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Behöver endast anges om ett kategorilösenord angivits.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Ställer in ett lösenord för denna kategori, använd hellre rättighetssystemet.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Lösenorden du angav stämde inte överens.',
	'FORUM_PRUNE_SETTINGS'				=> 'Kategorirensningsinställningar',
	'FORUM_RESYNCED'					=> 'Kategorin "%s" synkroniserades',
	'FORUM_RULES_EXPLAIN'				=> 'Kategoriregler visas på alla sidor inom given kategori.',
	'FORUM_RULES_LINK'					=> 'Länk till kategoriregler',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Du kan ange URL:en för sidan/inlägget som innehåller dina kategoriregler här. Denna inställning kommer att åsidosätta kategoriregelstexten du angivit.',
	'FORUM_RULES_PREVIEW'				=> 'Förhandsgranskning av kategoriregler',
	'FORUM_RULES_TOO_LONG'				=> 'Kategorireglerna måste vara kortare än 4000 tecken.',
	'FORUM_SETTINGS'					=> 'Kategoriinställningar',
	'FORUM_STATUS'						=> 'Kategoristatus',
	'FORUM_STYLE'						=> 'Kategoristil',
	'FORUM_TOPICS_PAGE'					=> 'Trådar per sida',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Om detta inte är satt till noll så kommer detta värde att åsidosätta den vanliga trådar per sida-inställningen.',
	'FORUM_TYPE'						=> 'Kategorityp',
	'FORUM_UPDATED'						=> 'Kategoriinformationen uppdaterades.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Du försöker ändra en kategori som det går att posta i till en länk. Flytta alla underkategorier från denna kategori innan du fortsätter, eftersom att när du ändrat till en länk så kommer du inte kunna se underkategorierna som nu är länkade till denna kategori.',

	'GENERAL_FORUM_SETTINGS'	=> 'Allmänna kategoriinställningar',

	'LINK'					=> 'Länk',
	'LIST_INDEX'			=> 'Lista underkategori i ovanliggande kategoris legend',
	'LIST_INDEX_EXPLAIN'	=> 'Visar denna kategori på indexsidan och på andra ställen som en länk inom legenden för dess ovanliggande kategori.',
	'LOCKED'				=> 'Låst',

 	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Kategorin som du valde att flytta inlägg till kan inte postas i. Välj en kategori som kan postas i.',
	'MOVE_POSTS_TO'					=> 'Flytta inlägg till',
	'MOVE_SUBFORUMS_TO'				=> 'Flytta underkategorier till',

	'NO_DESTINATION_FORUM'			=> 'Du angav ingen kategori att flytta innehållet till.',
	'NO_FORUM_ACTION'				=> 'Ingen handling angiven för vad som ska hända med foruminnehållet.',
	'NO_PARENT'						=> 'Ingen ovanliggande kategori',
	'NO_PERMISSIONS'				=> 'Kopiera inte rättigheter',
	'NO_PERMISSION_FORUM_ADD'		=> 'Du har inte de rättigheter som krävs för att lägga till kategorier.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Du har inte de rättigheter som krävs för att ta bort kategorier.',

 	'PARENT_IS_LINK_FORUM'		=> 'Den ovanliggande kategorin som du valde är en kategorilänk. Länkkategorier kan inte innehålla andra kategorier, välj istället en huvudkategori eller en kategori som ovanliggande kategori.',
	'PARENT_NOT_EXIST'			=> 'Ovanliggande kategori finns inte.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Rensa anslag',
	'PRUNE_STICKY'				=> 'Rensa notiser',
	'PRUNE_OLD_POLLS'			=> 'Rensa gamla omröstningar',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Tar bort trådar med omröstningar som inte röstats i på det antal dagar som angavs ovan.',
	
	'REDIRECT_ACL'	=> 'Du kan nu %sställa in rättigheter%s för denna kategori.',

	'SYNC_IN_PROGRESS'			=> 'Synkroniserar kategori',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Synkroniserar trådkedja %1$d/%2$d.',

	'TYPE_CAT'			=> 'Huvudkategori',
	'TYPE_FORUM'		=> 'Kategori',
	'TYPE_LINK'			=> 'Länk',

	'UNLOCKED'			=> 'Olåst',
));

?>