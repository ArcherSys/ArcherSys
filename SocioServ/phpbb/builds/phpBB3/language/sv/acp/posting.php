<?php
/** 
*
* posting [Swedish] (version 0.5.0 - 3.0.RC5)
*
* @package language
* @version $Id: posting.php,v 1.14 2007/08/25 14:15:13 virtuality Exp $
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

// BBCodes 
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode är en speciell variant av HTML som ger större kontroll över vad och hur någonting visas. Från denna sida kan du lägga till, ta bort och redigera egna BBCodes.',
	'ADD_BBCODE'				=> 'Lägg till en ny BBCode',

	'BBCODE_ADDED'				=> 'BBCode lades till.',
	'BBCODE_EDITED'				=> 'BBCode ändrades.',
	'BBCODE_NOT_EXIST'			=> 'BBCoden som du valde finns inte.',
	'BBCODE_HELPLINE'			=> 'Hjälptext',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Detta fält innehåller texten som visas när man för musen över denna BBCode.',
	'BBCODE_HELPLINE_TEXT'		=> 'Hjälptext',
	'BBCODE_INVALID_TAG_NAME'	=> 'BBCode-taggnamnet som du valde finns redan.',
 	'BBCODE_INVALID'			=> 'Din BBCode är konstruerad på ett felaktigt sätt.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Din egna BBCode måste innehålla både en öppnings- och stängningstagg.',
	'BBCODE_TAG'				=> 'Tagg',
	'BBCODE_TAG_TOO_LONG'		=> 'Taggnamnet som du valde är för långt.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Taggdefinitionen du angav är för lång, korta ner din taggdefinition.',
	'BBCODE_USAGE'				=> 'BBCode-användning',
	'BBCODE_USAGE_EXAMPLE'		=> '[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Här kan du definiera hur BBCoden ska användas. Ersätt variabelinmatning med motsvarande token (%sse nedan%s).',

	'EXAMPLE'						=> 'Exempel:',
	'EXAMPLES'						=> 'Exempel:',

	'HTML_REPLACEMENT'				=> 'HTML-ersättning',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Här kan du definiera standard HTML-ersättningen. Glöm inte att sätta tillbaka alla token du använde ovan!',

	'TOKEN'					=> 'Token',
	'TOKENS'				=> 'Token',
	'TOKENS_EXPLAIN'		=> 'En token är en informationsbärare för användarinmatningar. Inmatningen kommer endast kontrolleras om den matchar den motsvarande definitionen. Om det behövs kan du numrera de genom att lägga till ett nummer som det sista tecknet i klammerparentesen, t.ex. {TEXT1}, {TEXT2}.<br /><br />Inom HTML-ersättningen kan du också använda alla språksträngar som finns i din language/-katalog på detta sätt: {L_<em>&lt;STRÄNGNAMN&gt;</em>} där <em>&lt;STRINGNAME&gt;</em> är namnet av den översatta strängen som du vill lägga till. Till exempel, {L_WROTE} kommer att visas som &quot;skrev&quot; eller dess översättning beroende på användarens språkinställning.<br /><br /><strong>Observera att endast de token som visas nedan kan användas i egna BBCodes.</strong>',
	'TOKEN_DEFINITION'		=> 'Vad kan det vara?',
	'TOO_MANY_BBCODES'		=> 'Du kan inte skapa fler BBCodes. Ta bort en eller flera BBCodes och försök igen.',

	'tokens'	=>	array(
		'TEXT'			=> 'All text, inklusive främmande tecken, siffror, osv.… Du bör inte använda denna token i HTML-taggar. Försök istället använda IDENTIFIER eller SIMPLETEXT.',
		'NUMBER'		=> 'Vilken som helst serie med siffror.',
		'EMAIL'			=> 'En giltig e-postadress.',
		'URL'			=> 'En giltig URL med något protokoll (http, ftp, osv… kan inte användas för javascript-exploatering). Om inget protokoll anges läggs &quot;http://&quot; till i början av strängen.',
		'LOCAL_URL'		=> 'En lokal URL. URL:en måste vara relativ till trådsidan och kan inte innehålla ett servernamn eller protokoll.',
		'COLOR'			=> 'En HTML-färg, kan antingen vara i numerisk form <samp>#FF1234</samp> eller ett <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS färgnyckelord</a> så som <samp>fuchsia</samp> eller <samp>InactiveBorder</samp>.'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Från denna sida kan du lägga till, ta bort och redigera de ikoner som användare kan lägga till trådar och inlägg. Dessa ikoner visas generellt bredvid trådtiteln i kategorierna, eller bredvid inläggstitlarna i trådarna. Du kan också installera och skapa nya paket med ikoner.',
	'ACP_SMILIES_EXPLAIN'	=> 'Smilies är oftast små, ibland animerade, bilder som används för att uttrycka en känsla. Från denna sida kan du lägga till, ta bort och redigera de smilies som användare kan använda i sina inlägg och personliga meddelanden. Du kan också installera nya paket med smilies.',
	'ADD_SMILIES'			=> 'Lägg till flera smilies',
 	'ADD_SMILEY_CODE'		=> 'Lägg till extra smilieskod',
	'ADD_ICONS'				=> 'Lägg till flera ikoner',
	'AFTER_ICONS'			=> 'Efter %s',
	'AFTER_SMILIES'			=> 'Efter %s',

	'CODE'						=> 'Kod',
	'CURRENT_ICONS'				=> 'Nuvarande ikoner',
	'CURRENT_ICONS_EXPLAIN'		=> 'Välj vad du vill göra med de för närvarande installerade ikonerna.',
	'CURRENT_SMILIES'			=> 'Nuvarande smilies',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Välj vad du vill göra med de för närvarande installerade smilisarna.',

	'DISPLAY_ON_POSTING'	=> 'Visa på inläggssidan',
	'DISPLAY_ON_POSTING'		=> 'Visa på inläggssidan',
	'DISPLAY_POSTING'			=> 'På inläggssidan',
	'DISPLAY_POSTING_NO'		=> 'Inte på inläggssidan',

	'EDIT_ICONS'				=> 'Redigera ikoner',
	'EDIT_SMILIES'				=> 'Redigera smilies',
	'EMOTION'					=> 'Humör',
	'EXPORT_ICONS'				=> 'Exportera och ladda ner icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sNär du klickar på denna länk så kommer konfigurationen för dina installerade ikoner att packas ihop i <samp>icons.pak</samp> som när väl nerladdad kan användas för att skapa en <samp>.zip</samp> eller <samp>.tgz</samp>-fil med alla dina ikoner plus denna <samp>icons.pak</samp>-konfigurationsfil%s.',
	'EXPORT_SMILIES'			=> 'Exportera och ladda ner smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sNär du klickar på denna länk så kommer konfigurationen för dina installerade smilies att packas ihop i <samp>smilies.pak</samp> som när väl nerladdad kan användas för att skapa en <samp>.zip</samp> eller <samp>.tgz</samp>-fil med alla dina smilies plus denna <samp>smilies.pak</samp>-konfigurationsfil%s.',

	'FIRST'			=> 'Första',

	'ICONS_ADD'				=> 'Lägg till en ny ikon',
	'ICON_NONE_ADDED'		=> 'Inga ikoner lades till.',
	'ICONS_ONE_ADDED'		=> 'Ikonen lades till.',
	'ICONS_ADDED'			=> 'Ikonerna lades till.',
	'ICONS_CONFIG'			=> 'Ikonkonfiguration',
	'ICONS_DELETED'			=> 'Ikonen togs bort.',
	'ICONS_EDIT'			=> 'Redigera ikon',
	'ICONS_ONE_EDITED'		=> 'Ikonen uppdaterades.',
	'ICON_NONE_EDITED'		=> 'Inga ikoner uppdaterades.',
	'ICONS_EDITED'			=> 'Ikonerna uppdaterades.',
	'ICONS_HEIGHT'			=> 'Ikonhöjd',
	'ICONS_IMAGE'			=> 'Ikonbild',
	'ICONS_IMPORTED'		=> 'Ikonpaketet installerades.',
	'ICONS_IMPORT_SUCCESS'	=> 'Ikonpaketet importerades.',
	'ICONS_LOCATION'		=> 'Ikonplats',
	'ICONS_NOT_DISPLAYED'	=> 'Följande ikoner visas inte på inläggssidan',
	'ICONS_ORDER'			=> 'Ikonordning',
	'ICONS_URL'				=> 'Ikonbildfil',
	'ICONS_WIDTH'			=> 'Ikonbredd',
	'IMPORT_ICONS'			=> 'Installera ikonpaket',
	'IMPORT_SMILIES'		=> 'Installera smiliespaket',

	'KEEP_ALL'			=> 'Behåll alla',

	'MASS_ADD_SMILIES'	=> 'Lägg till flera smilies',

 	'NO_ICONS_ADD'		=> 'Det finns inga ikoner att lägga till.',
 	'NO_ICONS_EDIT'		=> 'Det finns inga ikoner att ändra.',
	'NO_ICONS_EXPORT'	=> 'Du har inga ikoner att skapa ett paket med.',
	'NO_ICONS_PAK'		=> 'Inga ikonpaket hittades.',
 	'NO_SMILIES_ADD'	=> 'Det finns inte smilies att lägga till.',
 	'NO_SMILIES_EDIT'	=> 'Det finns inga smilies att ändra.',
	'NO_SMILIES_EXPORT'	=> 'Du har inga smilies att skapa ett paket med.',
	'NO_SMILIES_PAK'	=> 'Inga smilies hittades.',

	'PAK_FILE_NOT_READABLE'		=> 'Kunde inte läsa <samp>.pak</samp>-filen.',

	'REPLACE_MATCHES'	=> 'Ersätt matchningar',

	'SELECT_PACKAGE'			=> 'Välj en paketfil',
	'SMILIES_ADD'				=> 'Lägg till en ny smilie',
	'SMILIES_NONE_ADDED'		=> 'Inga smilies lades till.',
	'SMILIES_ONE_ADDED'			=> 'Smilie lades till.',
	'SMILIES_ADDED'				=> 'Smilies lades till.',
	'SMILIES_CODE'				=> 'Kod för smilie',
	'SMILIES_CONFIG'			=> 'Smiliekonfiguration',
	'SMILIES_DELETED'			=> 'Smilie togs bort.',
	'SMILIES_EDIT'				=> 'Redigera smilie',
	'SMILIES_NONE_EDITED'		=> 'Inga smilies uppdaterades.',
	'SMILIES_ONE_EDITED'		=> 'Smilie uppdaterades.',
	'SMILIES_EDITED'			=> 'Smilies uppdaterades.',
	'SMILIES_EMOTION'			=> 'Humör',
	'SMILIES_HEIGHT'			=> 'Smiliehöjd',
	'SMILIES_IMAGE'				=> 'Smiliebild',
	'SMILIES_IMPORTED'			=> 'Smiliespaketet installerades.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Smiliesspaketet importerades.',
	'SMILIES_LOCATION'			=> 'Smiliesplats',
	'SMILIES_NOT_DISPLAYED'		=> 'Följande smilies visas inte på inläggssidan',
	'SMILIES_ORDER'				=> 'Smiliesordning',
	'SMILIES_URL'				=> 'Smiliesbildfil',
	'SMILIES_WIDTH'				=> 'Smiliesbredd',

	'WRONG_PAK_TYPE'	=> 'Det angivna paketet innehåller inte lämplig data.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Från denna kontrollpanel kan du lägga till, redigera och ta bort ord som automatiskt kommer att censureras på ditt forum. Dessutom går det inte att registrera sig med användarnamn som innehåller dessa ord. Jokertecken (*) accepteras i ordfältet, t.ex. så kommer *test* att matcha omtestning, test* kommer att matcha testning och *test kommer att matcha sluttest.',
	'ADD_WORD'				=> 'Lägg till ett nytt ord',

	'EDIT_WORD'		=> 'Redigera ordcensur',
	'ENTER_WORD'	=> 'Du måste skriva in ett ord och dess ersättning.',

	'NO_WORD'	=> 'Inget ord valdes för redigering.',

	'REPLACEMENT'	=> 'Ersättning',

	'UPDATE_WORD'	=> 'Uppdatera ordcensur',

	'WORD'				=> 'Ord',
	'WORD_ADDED'		=> 'Ordcensuren lades till.',
	'WORD_REMOVED'		=> 'Den valda ordcensuren togs bort.',
	'WORD_UPDATED'		=> 'Den valda ordcensuren uppdaterades.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Med detta formulär kan du lägga till, redigera och ta bort titlar. Du kan också skapa specialtitlar som kan ges till användare via användarhanteringen.',
	'ADD_RANK'				=> 'Lägg till en ny titel',

	'MUST_SELECT_RANK'		=> 'Du måste välja en titel.',
	
	'NO_ASSIGNED_RANK'		=> 'Ingen specialtitel skapad.',
	'NO_RANK_TITLE'			=> 'Du angav inget namn på titeln.',
	'NO_UPDATE_RANKS'		=> 'Titeln togs bort. Dock uppdaterades inte de användarkonton som använde denna titel. Du måste manuellt återställa titeln på dessa konton.',

	'RANK_ADDED'			=> 'Titeln lades till.',
	'RANK_IMAGE'			=> 'Titelbild',
	'RANK_IMAGE_EXPLAIN'	=> 'Använd detta för att definiera en liten bild som associeras med titeln. Sökvägen är relativ till phpBBs rotkatalog.',
	'RANK_MINIMUM'			=> 'Minst antal inlägg',
	'RANK_REMOVED'			=> 'Titeln togs bort.',
	'RANK_SPECIAL'			=> 'Sätt som specialtitel',
	'RANK_TITLE'			=> 'Titelnamn',
	'RANK_UPDATED'			=> 'Titeln uppdaterades.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Här kan du kontrollera användarnamn som inte får användas. Otillåtna användarnamn kan innehålla ett jokertecken (*). Observera att du inte kan ange några användarnamn som redan registrerats, du måste först ta bort det namnet och sedan göra det otillåtet.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Du kan förbjuda användarnamn med jokertecknet * för att matcha vilket tecken som helst.',
	'ADD_DISALLOW_TITLE'	=> 'Lägg till ett otillåtet användarnamn',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Du kan ta bort ett otillåtet användarnamn genom att välja användarnamnet från denna lista och klicka på skicka.',
	'DELETE_DISALLOW_TITLE'		=> 'Ta bort ett otillåtet användarnamn',
	'DISALLOWED_ALREADY'		=> 'Namnet du angav kunde inte förbjudas. Antingen finns det redan i listan, eller så finns det i ordcensurlistan, eller så finns det ett användarnamn som matchar det.',
	'DISALLOWED_DELETED'		=> 'Det otillåtna användarnamnet togs bort.',
	'DISALLOW_SUCCESSFUL'		=> 'Det otillåtna användarnamnet lades till.',

	'NO_DISALLOWED'				=> 'Inga otillåtna användarnamn',
	'NO_USERNAME_SPECIFIED'		=> 'Du valde inget användarnamn att operera med.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Här kan du hantera anledningarna som används i rapporter och avslagsmeddelanden när ett inlägg inte godkänns. Det finns en standardanledning (markerad med *) som inte kan tas bort, denna anledning används för eget meddelande om ingen anledning passar.',
	'ADD_NEW_REASON'		=> 'Lägg till ny anledning',
	'AVAILABLE_TITLES'		=> 'Tillgängliga översatta anledningstitlar',
	
	'IS_NOT_TRANSLATED'			=> 'Anledning har <strong>inte</strong> översatts.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Anledning har <strong>inte</strong> översatts. Om du vill översätta den, ange den korrekta nyckeln från språkfilernas rapportanledningssektion.',
	'IS_TRANSLATED'				=> 'Anledning har översatts.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Anledning har översatts. Om titeln du ser här är angiven inom språkfilernas rapportanledningssektion så kommer den översatta formen av titeln och beskrivningen att användas.',
	
	'NO_REASON'					=> 'Anledning kunde inte hittas.',
	'NO_REASON_INFO'			=> 'Du måste ange en titel och en beskrivning för denna anledning.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Du kan inte ta bort standardanledningen "Annat".',

	'REASON_ADD'				=> 'Lägg till rapport/avslagsanledning',
	'REASON_ADDED'				=> 'Rapport/avslagsanledning lades till.',
	'REASON_ALREADY_EXIST'		=> 'En anledning med denna titel finns redan, välj en annan titel för denna anledning.',
	'REASON_DESCRIPTION'		=> 'Anledningsbeskrivning',
	'REASON_DESC_TRANSLATED'	=> 'Anledningsbeskrivning som ska visas',
	'REASON_EDIT'				=> 'Redigera rapport/avslagsanledning',
	'REASON_EDIT_EXPLAIN'		=> 'Här kan du lägga till eller redigera en anledning. Om anledningen har översatts så används den översatta versionen istället för beskrivningen som anges här.',
	'REASON_REMOVED'			=> 'Rapport/avslagsanledning togs bort.',
	'REASON_TITLE'				=> 'Anledningstitel',
	'REASON_TITLE_TRANSLATED'	=> 'Anledningstitel som ska visas',
	'REASON_UPDATED'			=> 'Rapport/avslagsanledning uppdaterades.',

	'USED_IN_REPORTS'		=> 'Används i rapporter',
));

?>