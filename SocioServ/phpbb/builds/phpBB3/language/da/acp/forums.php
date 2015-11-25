<?php
/**
*
* acp_forums [Danish]
*
* @package language
* @version $Id: forums.php,v 1.29 2007/07/16 14:02:06 acydburn Exp $
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Autobeskær efter indlægs alder',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Antal dage siden sidste indlæg, hvorefter emnet fjernes.',
	'AUTO_PRUNE_FREQ'			=> 'Autobeskærings frekvens',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Antal dage mellem beskæring.',
	'AUTO_PRUNE_VIEWED'			=> 'Autobeskær indlæg vist alder',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Antal dage siden emnet sidst blev vist, hvorefter emnet fjernes.',

	'COPY_PERMISSIONS'				=> 'Kopier tilladelser fra',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Når det nye forum er oprettet vil det have samme tilladelser som det her valgte. Hvis der ikke vælges et forum vil forummet ikke være synligt før tilladelserne er indstillet.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Hvis du vælger at kopiere tilladelser vil forummet have samme tilladelser som det her valgte. Dette vil tilsidesætte alle tilladelser der er sat for dette forum, med tilladelserne for det her valgte forum. Hvis der ikke vælges et forum vil forummet beholde sine nuværende tilladelser.',
	'CREATE_FORUM'					=> 'Opret nyt forum',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Slet indhold eller flyt til forum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Slet underfora eller flyt til forum',
	'DEFAULT_STYLE'						=> 'Standardtypografi',
	'DELETE_ALL_POSTS'					=> 'Slet indlæg',
	'DELETE_SUBFORUMS'					=> 'Slet underfora og indlæg',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Aktivér aktive emner',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Hvis sat til ja vil aktive emner i udvalgte underfora blive vist under denne kategori.',

	'EDIT_FORUM'					=> 'Ret forum',
	'ENABLE_INDEXING'				=> 'Aktivér søgeindeksering',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Hvis sat til ja, vil indlæg i dette forum blive indekseret til søgning.',
	'ENABLE_POST_REVIEW'			=> 'Aktivér indlægsgennemsyn',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Hvis sat til ja, vil brugerne få mulighed for at gennemgå deres indlæg igen hvis der blev skrevet nye indlæg i emnet mens brugeren skrev sit indlæg. Dette bør deaktiveres for snik-snak-fora.',
	'ENABLE_RECENT'					=> 'Vis aktive emner',
	'ENABLE_RECENT_EXPLAIN'			=> 'Hvis sat til ja bliver emner skrevet i dette forum vist i listen over aktive emner.',
	'ENABLE_TOPIC_ICONS'			=> 'Aktivér emneikoner',

	'FORUM_ADMIN'						=> 'Administrér fora',
	'FORUM_ADMIN_EXPLAIN'				=> 'I phpBB3 er der ingen kategorier, alt er forumbaseret. Hvert forum kan have et ubegrænset antal underfora og du kan administrere hvorvidt der kan skrives i hvert eller ej (altså om det skal virke som en gammel kategori eller ej). Her kan du tilføje, rette, slette, låse, oplåse individuelle fora og sætte bestemte andre indstillinger. Hvis antal indlæg og emner er kommet ud af synkronisering kan du også resynkronisere et forum. <strong>Nyoprettede fora skal tildeles de rette tilladelser for at vises på board indekset. Når du opretter et nyt forum kan du kopiere tilladelser fra et eksisterende forum, alternativt skal du efterfølgende manuelt indstille disse.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Aktivér autobeskæring af forum',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Beskærer emner i forummet, sæt frekvens-/aldersparametre herunder.',
	'FORUM_CREATED'						=> 'Forum korrekt oprettet.',
	'FORUM_DATA_NEGATIVE'				=> 'Beskæringsparametre kan ikke være negative.',
	'FORUM_DESC_TOO_LONG'				=> 'Forumbeskrivelsen er for lang, den skal være mindre end 4000 tegn.',
	'FORUM_DELETE'						=> 'Slet forum',
	'FORUM_DELETE_EXPLAIN'				=> 'Formularen herunder lader dig slette et forum. Hvis man kan skrive indlæg i forummet, kan du vælge hvor du vil gøre af alle emnerne (eller foraene) det indeholdt.',
	'FORUM_DELETED'						=> 'Forum korrekt slettet.',
	'FORUM_DESC'						=> 'Beskrivelse',
	'FORUM_DESC_EXPLAIN'				=> 'HTML-kodetags i dette felt vil blive vist ubehandlet.',
	'FORUM_EDIT_EXPLAIN'				=> 'Formularen herunder lader dig brugertilrette dette forum. Bemærk venligst at redigering og indlægstæller-kontroller sættes via forumtilladelserne for hver bruger eller brugergruppe.',
	'FORUM_IMAGE'						=> 'Forumbillede',
	'FORUM_IMAGE_EXPLAIN'				=> 'Placering, relativt til phpBB rod-mappen, af et ekstra billede der skal tilknyttes dette forum.',
	'FORUM_LINK_EXPLAIN'				=> 'Fuld URL (inklusiv protokol, f.eks. <samp>http://</samp>) til det sted brugeren skal guides hen, ved klik på dette forum, for eksempel <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Registrér linkhenvisninger',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Tæller antallet af gange der er blevet klikket på et forumlink.',
	'FORUM_NAME'						=> 'Forumnavn',
	'FORUM_NAME_EMPTY'					=> 'Du skal indtaste et navn til dette forum.',
	'FORUM_PARENT'						=> 'Overordnet forum',
	'FORUM_PASSWORD'					=> 'Forumkodeord',
	'FORUM_PASSWORD_CONFIRM'			=> 'Bekræft forumkodeord',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Skal kun udfyldes hvis der angives et forumkodeord.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Definerer et kodeord for dette forum, brug tilladelsessystemet i indstillinger.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Kodeordene du indtastede matcher ikke.',
	'FORUM_PRUNE_SETTINGS'				=> 'Indstillinger for forumbeskæring',
	'FORUM_RESYNCED'					=> 'Forum "%s" korrekt resynkroniseret',
	'FORUM_RULES_EXPLAIN'				=> 'Forumregler vises på alle sider i et givent forum.',
	'FORUM_RULES_LINK'					=> 'Link til forumregler',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Du kan her angive URL\'en for den side eller det indlæg der indeholder dine forumregler. Denne indstilling vil tilsidesætte de forumregler du har angivet.',
	'FORUM_RULES_PREVIEW'				=> 'Gennemse forumregler',
	'FORUM_RULES_TOO_LONG'				=> 'Forumreglerne må ikke være længere end 4000 tegn.',
	'FORUM_SETTINGS'					=> 'Forumindstillinger',
	'FORUM_STATUS'						=> 'Forumstatus',
	'FORUM_STYLE'						=> 'Forumtypografi',
	'FORUM_TOPICS_PAGE'					=> 'Emner pr. side',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Hvis ikke nul vil denne værdi tilsidesætte standard antal emner pr. side indstillingen.',
	'FORUM_TYPE'						=> 'Forumtype',
	'FORUM_UPDATED'						=> 'Foruminformation er korrekt opdateret',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'	=> 'Du forsøger at ændre et forum der indeholder underfora til et link. Flyt venligst alle underfora fra dette forum til et andet før du fortsætter, undlades dette vil du ikke længere være i stand til at se de tilknyttede underfora.',

	'GENERAL_FORUM_SETTINGS'	=> 'Generelle forumindstillinger',

	'LINK'					=> 'Link',
	'LIST_INDEX'			=> 'Vis underforum i overforummets forklaring',
	'LIST_INDEX_EXPLAIN'	=> 'Viser dette forum på board indekset og andre steder som et link i forklaringen for overforummet.',
	'LOCKED'				=> 'Låst',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Det valgte destinationsforum for indlæggene, der søges flyttet, modtager ikke indlæg. Vælg venligst et forum, der modtager indlæg.',
	'MOVE_POSTS_TO'		=> 'Flyt indlæg til',
	'MOVE_SUBFORUMS_TO'	=> 'Flyt underfora til',

	'NO_DESTINATION_FORUM'			=> 'Du har ikke angivet et forum hvortil indholdet skal flyttes.',
	'NO_FORUM_ACTION'				=> 'Ingen handling defineret for hvad der skal ske med forumindhold.',
	'NO_PARENT'						=> 'Ingen overordnet',
	'NO_PERMISSIONS'				=> 'Kopiér ikke tilladelser',
	'NO_PERMISSION_FORUM_ADD'		=> 'Du har ikke de nødvendige tilladelser til at tilføje fora.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Du har ikke de nødvendige tilladelser til at slette fora.',

	'PARENT_IS_LINK_FORUM'		=> 'Det specificerede overforum er et link. Links kan ikke være overforum for andre fora. Specificér venligst en kategori eller et forum som overforum.',
	'PARENT_NOT_EXIST'			=> 'Overordnet forum findes ikke.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Beskær bekendtgørelser',
	'PRUNE_STICKY'				=> 'Beskær opslag',
	'PRUNE_OLD_POLLS'			=> 'Beskær gamle afstemninger',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Fjerner emner med afstemninger der ikke er stemt i, efter dette antal dage.',

	'REDIRECT_ACL'	=> 'Du kan nu %ssætte tilladelser%s for dette forum.',

	'SYNC_IN_PROGRESS'			=> 'Forum synkroniseres',
	'SYNC_IN_PROGRESS_EXPLAIN'      => 'I øjeblikket resynkroniseres emneområde %1$d/%2$d.',

	'TYPE_CAT'			=> 'Kategori',
	'TYPE_FORUM'		=> 'Forum',
	'TYPE_LINK'			=> 'Link',

	'UNLOCKED'			=> 'Låst op',
));

?>