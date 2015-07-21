<?php
/**
*
* acp_board [Danish]
*
* @package language
* @version $Id: board.php,v 1.92 2007/08/23 13:41:34 naderman Exp $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Her kan du bestemme en række vigtige standardindstillinger. Dit boards navn og beskrivelsen af det, og også indstillingerne for tidszone, sprog m.v.',

	'CUSTOM_DATEFORMAT'				=> 'Brugerdefineret...',
	'DEFAULT_DATE_FORMAT'			=> 'Datoformat',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Datoformatet er det samme som PHPs <code>date</code> funktion.',
	'DEFAULT_LANGUAGE'				=> 'Standardsprog',
	'DEFAULT_STYLE'					=> 'Standardtypografi',
	'DISABLE_BOARD'					=> 'Slå boardet fra',
	'DISABLE_BOARD_EXPLAIN'			=> 'Dette vil sætte boardet offline for brugere. Du kan vælge at indtaste en kort (maksimalt 255 tegn) meddelelse, der skal vises i stedet.',
	'OVERRIDE_STYLE'				=> 'Tilsidesæt brugeres valg af typografi',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Erstatter brugeres valg af typografi med boardets standardtypografi.',
	'SITE_DESC'						=> 'Boardbeskrivelse',
	'SITE_NAME'						=> 'Boardnavn',
	'SYSTEM_DST'					=> 'Slå sommertid/<abbr title="Daylight Saving Time">DST</abbr> til',
	'SYSTEM_TIMEZONE'				=> 'Tidszone for board',
	'WARNINGS_EXPIRE'				=> 'Varighed for advarsler',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Antal dage fra en advarsel udstedes, til den fjernes fra brugeres profildata.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Hér kan du aktivere eller deaktivere flere af boardets udvidede funktioner.',

	'ALLOW_ATTACHMENTS'			=> 'Tillad at vedhæfte filer',
	'ALLOW_BIRTHDAYS'			=> 'Tillad fødselsdage',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Tillad angivelse af fødseldato og at alder vises i brugerprofiler. Bemærk at visning af fødselsdagslisten nederst på board indekset kontrolleres af en særskilt indstilling under server konfiguration -> belastning.',
	'ALLOW_BOOKMARKS'			=> 'Tillad bogmærker på emner',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Brugere kan gemme personlige bogmærker.',
	'ALLOW_BBCODE'				=> 'Tillad BBkode',
	'ALLOW_FORUM_NOTIFY'		=> 'Tillad forumovervågning',
	'ALLOW_NAME_CHANGE'			=> 'Tillad ændring af brugernavn',
	'ALLOW_NO_CENSORS'			=> 'Tillad deaktivering af ordcensur',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Brugere kan vælge at slå censur af ord fra i indlæg og private beskeder.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Tillad vedhæftede filer i private beskeder',
	'ALLOW_SIG'					=> 'Tillad signaturer',
	'ALLOW_SIG_BBCODE'			=> 'Tillad BBkode i brugersignaturer',
	'ALLOW_SIG_FLASH'			=> 'Tillad brug af <code>[FLASH]</code> BBkode-tag i brugersignaturer',
	'ALLOW_SIG_IMG'				=> 'Tillad brug af <code>[IMG]</code> BBkode-tag i brugersignaturer',
	'ALLOW_SIG_LINKS'			=> 'Tillad brug af links i brugersignaturer',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Hvis brugen af <code>[URL]</code> BBkode-tag\'en forbydes, afbrydes samtidig automatiske/magiske URL\'er.',
	'ALLOW_SIG_SMILIES'			=> 'Tillad brug af smilies i brugersignaturer',
	'ALLOW_SMILIES'				=> 'Tillad smilies',
	'ALLOW_TOPIC_NOTIFY'		=> 'Tillad emneovervågning',
	'BOARD_PM'					=> 'Tillad private beskeder',
	'BOARD_PM_EXPLAIN'			=> 'Brugere får mulighed for at anvende boardets indbyggede system til sende beskeder til hinanden.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatars er generelt små, unikke billeder en bruger kan knytte til sin profil. Afhængig af boardets typografi, vises disse oftest lige under brugernavnet, når man læser et indlæg. Herfra styrer du hvordan brugerne kan definere deres avatars. Bemærk venligst at for at kunne uploade avatars skal du på forhånd have oprettet den herunder angivne mappe og sikre dig, at der kan skrives til mappen fra serveren. Bemærk også, at begrænsningerne for filstørrelse kun bruges på uploadede avatars, de gælder ikke for eksternt linkede billeder.',

	'ALLOW_LOCAL'					=> 'Slå galleriavatars til',
	'ALLOW_REMOTE'					=> 'Tillad eksterne avatars',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatars placeret på en anden hjemmeside, hvor der kan linkes til.',
	'ALLOW_UPLOAD'					=> 'Tillad upload af avatars',
	'AVATAR_GALLERY_PATH'			=> 'Avatargalleri-mappens placering',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Sti under din phpBB-rodmappe for forhåndsuploadede avatars, f.eks. <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Avatar-mappens placering',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Sti under din phpBB-rodmappe, f.eks. <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Største dimensioner for avatar',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Højde x bredde i pixels.',
	'MAX_FILESIZE'					=> 'Maksimal filstørrelse for avatar',
	'MAX_FILESIZE_EXPLAIN'			=> 'For uploadede avatarfiler.',
	'MIN_AVATAR_SIZE'				=> 'Mindste dimensioner for avatar',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Højde x bredde i pixels.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Her kan du tilpasse alle standardindstillinger for private beskeder.',

	'ALLOW_BBCODE_PM'			=> 'Tillad BBkode i private beskeder',
	'ALLOW_FLASH_PM'			=> 'Tillad brug af <code>[FLASH]</code> BBkode-taggen',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Bemærk at selvom muligheden for at anvende flash i private beskeder tillades her, så er der også en sammenhæng til de overordnede tilladelsesindstillinger.',
	'ALLOW_FORWARD_PM'			=> 'Tillad videresending af private beskeder',
	'ALLOW_IMG_PM'				=> 'Tillad brug af <code>[IMG]</code> BBkode-taggen',
	'ALLOW_MASS_PM'				=> 'Tillad afsending af private beskeder til flere brugere og grupper',
	'ALLOW_PRINT_PM'			=> 'Tillad printervenlig visning i private beskeder',
	'ALLOW_QUOTE_PM'			=> 'Tillad citater i private beskeder',
	'ALLOW_SIG_PM'				=> 'Tillad signatur i private beskeder',
	'ALLOW_SMILIES_PM'			=> 'Tillad smilies i private beskeder',
	'BOXES_LIMIT'				=> 'Maksimalt antal private beskeder pr. mappe',
	'BOXES_LIMIT_EXPLAIN'		=> 'Brugere kan ikke modtage flere end dette antal beskeder i hver af deres mapper til private beskeder. Sæt til 0 for ubegrænset antal meddelelser.',
	'BOXES_MAX'					=> 'Maksimalt antal mapper til private beskeder',
	'BOXES_MAX_EXPLAIN'			=> 'Standard må brugerne oprette dette antal brugerdefinerede mapper til private beskeder.',
	'ENABLE_PM_ICONS'			=> 'Aktivér brug af emneikoner i private beskeder',
	'FULL_FOLDER_ACTION'		=> 'Handling ved fuld mappe',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Udført standardhandling hvis en brugers mappe er fuld og eventuelle brugerdefinerede mappehandlinger ikke er anvendelige. Eneste undtagelse er mappen "Sendte beskeder", hvor standardhandlingen altid er sletning af ældste beskeder.',
	'HOLD_NEW_MESSAGES'			=> 'Tilbagehold nye beskeder',
	'PM_EDIT_TIME'				=> 'Begræns redigeringstid',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Begrænser hvor længe en endnu ikke afleveret besked kan redigeres. Sæt til 0 for deaktivering af denne begrænsning.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'		=> 'Her kan du tilpasse alle standardindstillinger for at skrive indlæg.',
	'ALLOW_POST_LINKS'				=> 'Tillad at anvende links i indlæg og private beskeder',
	'ALLOW_POST_LINKS_EXPLAIN'		=> 'Hvis anvendelse ikke er tilladt, er URL BBkode-tag og automatiske/magiske URL\'er slået fra.',
	'ALLOW_POST_FLASH'				=> 'Tillad brug af <code>[FLASH]</code> BBkode-tag i indlæg',
	'ALLOW_POST_FLASH_EXPLAIN'		=> 'Hvis anvendelse ikke er tilladt, er <code>[FLASH]</code> BBkode-tag ikke synlig når der skrives indlæg. Ellers kan tilladelsessystemet anvendes til af definere hvilke brugere der må bruge <code>[FLASH]</code> BBkode-taggen.',

	'BUMP_INTERVAL'					=> 'Placér øverst interval',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Antal minutter, timer eller dage siden seneste indlæg i et emne, inden det kan placeres øverst.',
	'CHAR_LIMIT'					=> 'Maksimalt antal tegn pr. indlæg',
	'CHAR_LIMIT_EXPLAIN'			=> 'Det maksimale antal tegn tilladt i et indlæg. Sæt til 0 for deaktivering af denne begrænsning.',
	'DISPLAY_LAST_EDITED'			=> 'Vis sidst redigeret',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Vælg om seneste redigeringstidspunkt skal vises i indlæg.',
	'EDIT_TIME'						=> 'Begræns tidsrum for redigering',
	'EDIT_TIME_EXPLAIN'				=> 'Begrænser tidsrummet hvori man kan redigere et nyt indlæg. Sæt til 0 for deaktivering af denne begrænsning.',
	'FLOOD_INTERVAL'				=> 'Interval mellem nye indlæg',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Antal sekunder en bruger skal vente mellem indsendelse af nye indlæg. For at lade brugerne ignorere denne indstilling skal du rette i deres tilladelser.',
	'HOT_THRESHOLD'					=> 'Grænse for populært emne',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Antal indlæg pr. emne for at dette kategoriseres populært emne. Sæt til 0 for at slå populære emner fra.',
	'MAX_POLL_OPTIONS'				=> 'Maksimalt antal afstemningsmuligheder',
	'MAX_POST_FONT_SIZE'			=> 'Maksimal skriftstørrelse i indlæg',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Den maksimalt anvendelige skriftstørrelse i indlæg. Sæt til 0 for deaktivering af denne begrænsning.',
	'MAX_POST_IMG_HEIGHT'			=> 'Maksimal billedhøjde i indlæg',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Maksimalhøjde på billeder og flashfiler i indlæg. Sæt til 0 for ubegrænset højde.',
	'MAX_POST_IMG_WIDTH'			=> 'Maksimal billedbredde i indlæg',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Maksimal bredde på billeder og flashfiler i indlæg. Sæt til 0 for ubegrænset bredde.',
	'MAX_POST_URLS'					=> 'Maksimalt antal links i indlæg',
	'MAX_POST_URLS_EXPLAIN'			=> 'Højeste antal URL\'er pr. indlæg. Sæt til 0 for ubegrænset antal links.',
	'POSTING'						=> 'Indlæg',
	'POSTS_PER_PAGE'				=> 'Indlæg pr. side',
	'QUOTE_DEPTH_LIMIT'				=> 'Maksimalt antal indlejrede citater pr. indlæg',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Definerer hvor mange gange et tidligere citat kan indlejres. Sæt til 0 for ubegrænset dybde.',
	'SMILIES_LIMIT'					=> 'Maksimalt antal smilies pr. indlæg',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Sæt til 0 for ubegrænset antal smilies.',
	'TOPICS_PER_PAGE'				=> 'Emner pr. side',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Her kan du tilpasse alle standardindstillinger for signaturer.',

	'MAX_SIG_FONT_SIZE'				=> 'Maksimal skriftstørrelse i signatur',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Maksimal skriftstørrelse tilladt i brugersignaturer. Sæt til 0 for ubegrænset størrelse.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Maksimal billedhøjde i signatur',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Maksimal højde på et billede/flashfil i brugersignaturer. Sæt til 0 for ubegrænset højde.',
	'MAX_SIG_IMG_WIDTH'				=> 'Maksimal billedbredde i signatur',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Maksimal bredde på et billede/flashfil i brugersignaturer. Sæt til 0 for ubegrænset bredde.',
	'MAX_SIG_LENGTH'				=> 'Maksimal længde af signatur',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Maksimalt antal tegn i brugersignaturer.',
	'MAX_SIG_SMILIES'				=> 'Maksimalt antal smilies i signatur',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Maksimalt antal smilies tilladt i brugersignaturer. Sæt til 0 for ubegrænset antal.',
	'MAX_SIG_URLS'					=> 'Maksimalt antal links i signatur',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Maksimalt antal links i brugersignaturer. Sæt til 0 for ubegrænset antal links.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Her kan du tilpasse tilmeldings- og profilrelaterede indstillinger.',

	'ACC_ACTIVATION'			=> 'Kontoaktivering',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Bestemmer om brugere har øjeblikkelig adgang til boardet eller om bekræftelse er påkrævet. Du kan også deaktivere muligheden for at tilmelde sig boardet.',
	'ACC_ADMIN'					=> 'Af administrator',
	'ACC_DISABLE'				=> 'Deaktiveret',
	'ACC_NONE'					=> 'Ingen',
	'ACC_USER'					=> 'Af bruger',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Tillad genbrug af emailadresse',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Forskellige brugere kan tilmelde sig med samme emailadresse.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA telefaxnummer',
	'COPPA_MAIL'				=> 'COPPA emailadresse',
	'COPPA_MAIL_EXPLAIN'		=> 'Angiv den emailadresse hvortil forældre eller værge kan sende COPPA registreringsformularerne.',
	'ENABLE_COPPA'				=> 'Aktivér COPPA-funktion',
	'ENABLE_COPPA_EXPLAIN'		=> 'For at overholde den amerikanske U.S. COPPA lovgivning, afkræves brugere i forbindelse med tilmeldingen, en erklæring om hvorvidt de er 13 år eller ældre. Hvis COPPA-funktionen deaktiveres, vises COPPA-specifikke grupper ikke.',
	'MAX_CHARS'					=> 'Maks',
	'MIN_CHARS'					=> 'Min',
	'NO_AUTH_PLUGIN'			=> 'Ingen passende autorisations-modul blev fundet.',
	'PASSWORD_LENGTH'			=> 'Længde af kodeord',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Minimalt og maksimalt antal tegn i kodeord.',
	'REG_LIMIT'					=> 'Tilmeldingsforsøg',
	'REG_LIMIT_EXPLAIN'			=> 'Antal tilmeldingsforsøg brugere har før de udelukkes for den pågældende session.',
	'USERNAME_ALPHA_ONLY'		=> 'Kun bogstaver og tal',
	'USERNAME_ALPHA_SPACERS'	=> 'Bogstaver, tal og mellemrumstegn',
	'USERNAME_ASCII'			=> 'ASCII (ingen international unicode)',
	'USERNAME_LETTER_NUM'		=> 'Ethvert bogstav og tal',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Ethvert bogstav, tal og mellemrum',
	'USERNAME_CHARS'			=> 'Begræns brugbare tegn i brugernavn',
	'USERNAME_CHARS_ANY'		=> 'Ethvert tegn',
	'USERNAME_CHARS_EXPLAIN'	=> 'Begræns typen af tegn, der kan bruges i brugernavne, mellemrumstegn er: mellemrum, -, +, _, [ og ].',
	'USERNAME_LENGTH'			=> 'Længde af brugernavn',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Minimalt og maksimalt antal tegn i brugernavne.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Her kan du tilpasse standardindstillinger for visuel bekræftelse og CAPTCHA.',

	'CAPTCHA_GD'					=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'	=> 'GD CAPTCHA forgrundsstøj',
	'CAPTCHA_GD_EXPLAIN'			=> 'Anvend GD hvis du ønsker en mere avanceret CAPTCHA.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN' => 'Anvend forgrundsstøj for at gøre den GD baserede CAPTCHA sværere at aflæse.',
	'CAPTCHA_GD_X_GRID'				=> 'GD CAPTCHA baggrundsstøj x-akse',
	'CAPTCHA_GD_X_GRID_EXPLAIN'		=> 'En lavere indstilling her, gør den GD baserede CAPTCHA sværere at aflæse. 0 deaktiverer baggrundsstøj i x-aksen.',
	'CAPTCHA_GD_Y_GRID'				=> 'GD CAPTCHA baggrundsstøj y-akse',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'		=> 'En lavere indstilling her, gør den GD baserede CAPTCHA sværere at aflæse. 0 deaktiverer baggrundsstøj i y-aksen.',

	'CAPTCHA_PREVIEW_MSG'		=> 'Visningen er kun en prøve. Dine ændringer af indstillingerne er ikke gemt.',
	'CAPTCHA_PREVIEW_EXPLAIN'	=> 'CAPTCHA - som funktionen vises med de nuværende indstillinger. Brug "Vis prøve" knappen for at genopfriske. Bemærk at CAPTCHAs vises tilfældigt og varierer fra den ene visning til den næste.',
	'VISUAL_CONFIRM_POST'			=> 'Aktivér visuel bekræftelse for indlæg fra gæster',
	'VISUAL_CONFIRM_POST_EXPLAIN'	=> 'Kræver at gæster (ikke tilmeldte brugere) indtaster en tilfældig kode der matcher et billede for at forhindre automatiseret spamming og skrivning af masseindlæg.',
	'VISUAL_CONFIRM_REG'			=> 'Aktivér visuel bekræftelse for tilmelding',
	'VISUAL_CONFIRM_REG_EXPLAIN'	=> 'Kræver af nye brugere at de indtaster en tilfældig kode der matcher et billede for at forhindre automatiseret massetilmelding.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Disse indstillinger definerer data brugt til at sende cookies til dine brugeres browsere. I de fleste tilfælde skulle standardværdierne for cookieindstillingerne være tilstrækkelige. Hvis du har brug for at ændre nogen af indstillingerne så gør det med forsigtighed, da forkerte indstillinger kan forhindre brugerne i at logge ind.',

	'COOKIE_DOMAIN'			=> 'Cookie domæne',
	'COOKIE_NAME'			=> 'Cookie navn',
	'COOKIE_PATH'			=> 'Cookie sti',
	'COOKIE_SECURE'			=> 'Cookie sikret',
	'COOKIE_SECURE_EXPLAIN'	=> 'Hvis din server kører via SSL, indstil dette til slået til og lad det ellers være slået fra. Hvis dette slås til på et domæne, der ikke kører SSL, vil det resultere i serverfejl ved viderestillinger.',
	'ONLINE_LENGTH'				=> 'Tidsrum for online information',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Tid i minutter hvorefter inaktive brugere bliver fjernet fra "Hvem er online" listen. Jo større tidsrum, desto længere behandlingstid for at generere listen.',
	'SESSION_LENGTH'			=> 'Sessionslængde',
	'SESSION_LENGTH_EXPLAIN'	=> 'Sessioner vil udløbe efter denne tid, i sekunder.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Her kan du slå visse boardfunktioner fra, for at reducere boardets belastning af serveren. På de fleste servere skulle der ikke være brug for at slå nogen funktioner fra. Men på visse systemer eller i delte værtsmiljøer kan det være en fordel at slå unødvendige funktioner fra. Du kan også angive begrænsninger for systembelastning og aktive sessioner over hvilke boardet vil gå offline.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Tilpassede profilfelter',
	'LIMIT_LOAD'					=> 'Begræns systembelastning',
	'LIMIT_LOAD_EXPLAIN'			=> 'Hvis systembelastningen i gennemsnit over 1 minut overskrider denne værdi, vil boardet gå offline, 1.0 er lig ~100% belastning af én processor. Dette virker kun på UNIX-baserede servere og hvor denne information er tilgængelig. Værdien nulstiller sig selv hvis phpBB ikke var i stand til at finde belastningsgrænsen.',
	'LIMIT_SESSIONS'				=> 'Begræns sessioner',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Hvis antallet af sessioner overskrider denne værdi indenfor 1 minut, vil boardet gå offline. Sæt til 0 for ubegrænset antal sessioner.',
	'LOAD_CPF_MEMBERLIST'			=> 'Tillad typografien at tilpassede profilfelter vises i liste over tilmeldte brugere',
	'LOAD_CPF_VIEWPROFILE'			=> 'Vis tilpassede profilfelter i brugerprofiler',
	'LOAD_CPF_VIEWTOPIC'			=> 'Vis tilpassede profilfelter på emnesider',
	'LOAD_USER_ACTIVITY'			=> 'Vis brugers aktivitet',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Viser aktivt emne/forum i brugerprofiler og brugerkontrolpanel. Det anbefales at deaktivere dette for boards med mere end en million indlæg.',
	'RECOMPILE_STYLES'				=> 'Rekompilér fastfrosne typografikomponenter',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Kontrollerer for opdaterede typografikomponenter i filsystemet og rekompilerer.',
	'YES_ANON_READ_MARKING'			=> 'Aktivér emnemarkering for gæster',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Gemmer læst/ulæst statusinformation for gæster. Hvis slået fra vises indlæg altid som ulæste for gæster.',
	'YES_BIRTHDAYS'					=> 'Aktivér visning af fødselsdagslisten',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Hvis der vælges "Nej" vises fødseldagslisten ikke på board indekset. For at aktivere visning af listen forudsætter det at visning af fødselsdag også er tilvalgt under board konfiguration.',
	'YES_JUMPBOX'					=> 'Aktivér visning af hop-til-boks',
	'YES_MODERATORS'				=> 'Aktivér visning af redaktører',
	'YES_ONLINE'					=> 'Aktivér online information om tilmeldte brugere',
	'YES_ONLINE_EXPLAIN'			=> 'Vis online information om tilmeldte brugere på board indeks, forum og emnesider.',
	'YES_ONLINE_GUESTS'				=> 'Aktivér online information om gæster',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Aktivér visning af gæster online i online information.',
	'YES_ONLINE_TRACK'				=> 'Aktivér visning af online/offlineinformation for tilmeldte brugere',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Vis online/offlineinformation for tilmeldte brugere i profiler og emnesider.',
	'YES_POST_MARKING'				=> 'Aktivér prikkede emner',
	'YES_POST_MARKING_EXPLAIN'		=> 'Indikerer om brugeren har skrevet indlæg i et emne.',
	'YES_READ_MARKING'				=> 'Aktivér server-side emnemarkering',
	'YES_READ_MARKING_EXPLAIN'		=> 'Gemmer læst/ulæst statusinformation i databasen i stedet for i en cookie.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB understøtter forskellige autorisations-moduler, som er i stand til at godkende brugere når de logger ind på boardet. Der er tre standard-moduler med i phpBB: DB, LDAP og Apache. Ikke alle metoderne kræver yderligere information, så udfyld kun felterne, hvis det er relevant til den valgte metode.',

	'AUTH_METHOD'				=> 'Vælg en autorisationsmetode',

	'APACHE_SETUP_BEFORE_USE'	=> 'Du skal konfigurere Apache autoriseringen før du ændrer phpBB til at anvende denne metode. Husk at det anvendte brugernavn til Apache autorisation skal være det samme som dit phpBB brugernavn. Apache autorisation kan kun anvendes med mod_php (ikke med en CGI version) og med safe_mod slået fra.',

	'LDAP_DN'					=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'			=> 'Dette er LDAP Distinguished Name som angiver brugerinformationen f.eks. <samp>o=mit firma,c=dk</samp>.',
	'LDAP_EMAIL'				=> 'LDAP email-attribut',
	'LDAP_EMAIL_EXPLAIN'		=> 'Sæt denne til navnet på din brugertabels email-attribut (hvis en sådan findes) for automatisk at sætte emailadressen for nye brugere. Ved at lade dette felt være tomt vil brugere ved første login få tildelt en tom emailadresse.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Forbindelse til LDAP server mislykkedes med det anvendte brugernavn og kodeord.',
	'LDAP_NO_EMAIL'				=> 'Den angivne email-attribut findes ikke.',
	'LDAP_NO_IDENTITY'			=> 'Kunne ikke finde en login-identitet for %s.',
	'LDAP_PASSWORD'				=> 'LDAP kodeord',
	'LDAP_PASSWORD_EXPLAIN'		=> 'Efterlades tomt for at benytte anonym tilslutning, udfyldes ellers med ovenstående brugers kodeord.  Kræves af Active Directory servere. <strong>ADVARSEL:</strong> Kodeordet bliver lagret i databasen i klar og ukrypteret tekst, og vil være synligt for alle med adgang til databasen eller til denne konfigurationsside.',
	'LDAP_PORT'					=> 'LDAP serverport',
	'LDAP_PORT_EXPLAIN'			=> 'Hvis standardporten 389 ikke anvendes når der tilsluttes til LDAP serveren, kan du her angive hvilken alternativ port phpBB skal anvende i stedet.',
	'LDAP_SERVER'				=> 'LDAP servernavn',
	'LDAP_SERVER_EXPLAIN'		=> 'Ved brug af LDAP er dette navnet eller IP-adressen på LDAP serveren. Alternativt kan du angive en URL, eksempelvis ldap://hostname:port/.',
	'LDAP_UID'					=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'			=> 'Dette er den nøgle under hvilken der søges efter et givent login, f.eks. <var>uid</var>, <var>sn</var>, osv.',
	'LDAP_USER'					=> 'LDAP bruger <var>dn</var>',
	'LDAP_USER_EXPLAIN'			=> 'Efterlades tomt for at benytte anonym tilslutning. Udfyldes feltet vil phpBB anvende det angivne Distinguished Name (DN) ved loginforsøg for at bestemme den korrekte bruger, f.eks. <samp>uid=Brugernavn,ou=MinAfdeling,o=MitFirma,c=DK</samp>. Kræves af Active Directory servere.',
	'LDAP_USER_FILTER'			=> 'LDAP bruger filter',
	'LDAP_USER_FILTER_EXPLAIN'	=> 'Ved at anvende yderligere filtre har du mulighed for at begrænse de objekter der søges i. For eksempel vil <samp>objectClass=posixGroup</samp> betyde at <samp>(&(uid=$username)(objectClass=posixGroup))</samp> anvendes.',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Her kan du tilpasse server- og domæneafhængige indstillinger. Du bør sikre dig at data er akkurate, da fejl her vil resultere i emails med forkerte links. Bemærk at indtastning af domænenavn inkluderer http:// eller anden protokolangivelse. Ret kun portnummeret hvis du véd at din server bruger en anden værdi, port 80 er korrekt i de fleste tilfælde.',

	'ENABLE_GZIP'				=> 'Aktivér GZip komprimering',
	'ENABLE_GZIP_EXPLAIN'           => 'Det generede indhold bliver komprimeret inden afsendelse til brugeren. Det kan medvirke til at mindske netværkstrafikken, og dermed også båndbreddeforbruget, til gengæld øges belastningen af både serverens og brugerens CPU.',
	'FORCE_SERVER_VARS'			=> 'Gennemtving server URL-indstillinger',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Hvis sat til ja, vil serverindstillingerne sat her blive brugt frem for de automatisk læste værdier',
	'ICONS_PATH'				=> 'Indlægsikon-mappens placering',
	'ICONS_PATH_EXPLAIN'		=> 'Sti under din phpBB rodmappe, f.eks. <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Sti indstillinger',
	'RANKS_PATH'				=> 'Rangikon-mappens placering',
	'RANKS_PATH_EXPLAIN'		=> 'Sti under din phpBB rodmappe, f.eks. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Sti til script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Sti til phpBB relativt i forhold til domænenavnet, eksempelvis <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Domænenavn',
	'SERVER_NAME_EXPLAIN'		=> 'Domænenavn hvorfra dette board kører (for eksempel: <samp>www.foo.bar</samp>).',
	'SERVER_PORT'				=> 'Serverport',
	'SERVER_PORT_EXPLAIN'		=> 'Port 80 anvendes som standard af alle webservere. Indstillingen skal kun ændres i helt særlige tilfælde.',
	'SERVER_PROTOCOL'			=> 'Serverprotokol',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Denne indstilling kan sættes til enten http:// eller https:// og er dermed fast defineret. Hvis feltet ikke udfyldes, fastsættes protokollen ud fra cookie sikkerhedsindstillingerne (<samp>http://</samp> eller <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Server URL-indstillinger',
	'SMILIES_PATH'				=> 'Smilie-mappens placering',
	'SMILIES_PATH_EXPLAIN'		=> 'Sti under din phpBB rodmappe, f.eks. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Filtypeikon-mappens placering',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Sti under din phpBB rodmappe, f.eks. <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Her kan du tilpasse sessions- og loginrelaterede indstillinger',

	'ALL'							=> 'Alle',
	'ALLOW_AUTOLOGIN'				=> 'Tillad vedvarende logins',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Styrer hvorvidt brugere kan logge automatisk ind når de besøger boardet.',
	'AUTOLOGIN_LENGTH'				=> 'Vedvarende loginnøgle udløber efter dage',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Antal dage efter hvilke vedvarende loginnøgler fjernes eller nul for at deaktivere.',
	'BROWSER_VALID'					=> 'Validér browser',
	'BROWSER_VALID_EXPLAIN'			=> 'Aktiverer browservalidering for hver session, hvilket forøger sikkerheden.',
	'CHECK_DNSBL'					=> 'Kontrollér IP-adresser imod DNS blackhole liste',
	'CHECK_DNSBL_EXPLAIN'			=> 'Hvis slået til bliver brugerens IP-adresse kontrolleret ved tilmelding og når denne indsender indlæg, i følgende DNSBL services : <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> og <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Opslaget kan tage lidt tid, afhængig af serverkonfigurationen. Hvis kontrollen medfører for mange fejlagtige afvisninger eller nedsætter "ekspeditionstiden", anbefales det at slå kontrollen fra.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Kontrollér om emaildomænet har en gyldig MX-record',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Hvis slået til vil emaildomænet blive kontrolleret for korrekt domæneregistrering og profilændringer for en gyldig MX-record.',
	'FORCE_PASS_CHANGE'				=> 'Gennemtving kodeordsændring',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Kræver at brugeren skifter kodeord efter det indstillede antal dage. Sættes værdien til 0 deaktiveres denne tvangsændring.',
	'FORWARDED_FOR_VALID'			=> 'Kontrolleret <var>X_FORWARDED_FOR</var> hoved',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sessioner vil kun blive fortsat, hvis det sendte <var>X_FORWARDED_FOR</var> hoved svarer til dét, der blev sendt med den forrige anmodning. Udelukkelser bliver også kontrolleret imod IP-adresser i <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Validering af IP-adresser under sessioner',
	'IP_VALID_EXPLAIN'				=> 'Afgør hvor meget af brugerens IP-adresse, der bruges til at validere en session; <samp>Alle</samp> sammenligner hele adressen, <samp>A.B.C</samp> de første x.x.x, <samp>A.B</samp> de første x.x, <samp>Ingen</samp> slår kontrol fra. I IPv6 adresser; <samp>A.B.C</samp> de første 4 blokke sammenlignes og ved <samp>A.B</samp> de første 3 blokke.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Maksimalt antal loginforsøg',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Efter dette antal mislykkede loginforsøg skal brugeren yderligere bekræfte sit login visuelt (visuel bekræftelse).',
	'NO_IP_VALIDATION'				=> 'Ingen',
	'PASSWORD_TYPE'					=> 'Kodeordskompleksitet',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Afgør hvor komplekst et kodeord skal være, når det indstilles eller ændres. Efterfølgende muligheder indeholder også de foranstående.',
	'PASS_TYPE_ALPHA'				=> 'Skal indeholde bogstaver og tal',
	'PASS_TYPE_ANY'					=> 'Ingen krav',
	'PASS_TYPE_CASE'				=> 'Skal være med både store og små bogstaver',
	'PASS_TYPE_SYMBOL'				=> 'Skal indeholde symboler',
	'TPL_ALLOW_PHP'					=> 'Tillad PHP i skabeloner',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Hvis denne indstilling er aktiveret, vil <code>PHP</code> og <code>INCLUDEPHP</code> kommandoer i skabelonfilerne blive genkendt og behandlet.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Disse indstillinger anvendes af boardet ved forsendelse af emails til tilmeldte brugere. Bemærk venligst at denne emailadresse skal være gyldig, da enhver tilbagesendt eller vildfaren email sandsynligvis vil blive returneret til denne emailaddresse. Hvis din vært ikke lader dig bruge en indbygget (PHP baseret) emailservice, kan du i stedet sende emails direkte igennem SMTP. Dette kræver adressen på en passende server (spørg om nødvendigt din vært). Hvis serveren kræver autorisation (og kun hvis den gør) angives det nødvendige brugernavn, kodeord og autorisationsmetoden.',

	'ADMIN_EMAIL'					=> 'Returadresse for emails',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Denne emailadresse bruges som returadresse for alle emails, dvs. emailadressen for teknisk kontakt. Den bruges altid som <samp>Return-Path</samp> og <samp>Sender</samp> adressen i emails.',
	'BOARD_EMAIL_FORM'				=> 'Brugere sender emails via boardet',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'I stedet for at vise brugerens emailadresse kan brugere sende emails via boardet.',
	'BOARD_HIDE_EMAILS'				=> 'Skjul emailadresser',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Denne funktion holder emailadresser fuldstændigt private.',
	'CONTACT_EMAIL'					=> 'Emailadresse for kontakt',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Denne emailadresse bruges overalt, hvor der er specifikke kontaktpunkter, f.eks. spam, fejlmeddelelser, problemer med tilmelding osv. Den vil altid blive anvendt som <samp>From</samp> og <samp>Reply-To</samp> adressen i emails.',
	'EMAIL_FUNCTION_NAME'			=> 'Navn på emailfunktion',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Navnet på den anvendte emailfunktion ved forsendelse af emails gennem PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Pakkestørrelse for emails',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Antallet af emails der afsendes i en pakke. Indstillingen tilføjes den interne meddelelseskø; sæt indstillingen til 0 hvis du oplever problemer med ikke afleverede adviseringsemails.',
	'EMAIL_SIG'						=> 'Signatur i emails',
	'EMAIL_SIG_EXPLAIN'				=> 'Denne tekst bruges som signatur i alle emails udsendt af boardet.',
	'ENABLE_EMAIL'					=> 'Aktivér boardets emailsystem',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Hvis slået fra vil boardet ikke sende nogen emails overhovedet.',
	'SMTP_AUTH_METHOD'				=> 'Autorisationsmetode for SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Bruges kun, hvis et brugernavn/kodeord er angivet, spørg din vært, hvis du er usikker på hvilken metode, der skal bruges.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP kodeord',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Indtast kun et kodeord, hvis din SMTP server kræver det.',
	'SMTP_PLAIN'					=> 'Almindelig',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-før-SMTP',
	'SMTP_PORT'						=> 'SMTP serverport',
	'SMTP_PORT_EXPLAIN'				=> 'Skift kun denne, hvis du ved, at din SMTP server benytter en anden port.',
	'SMTP_SERVER'					=> 'Adresse på SMTP server',
	'SMTP_SETTINGS'					=> 'SMTP indstillinger',
	'SMTP_USERNAME'					=> 'SMTP brugernavn',
	'SMTP_USERNAME_EXPLAIN'			=> 'Indtast kun et brugernavn, hvis din SMTP server kræver det.',
	'USE_SMTP'						=> 'Brug SMTP server til email',
	'USE_SMTP_EXPLAIN'				=> 'Vælg "Ja", hvis du vil eller skal bruge en navngiven server til at sende email i stedet for boardets indbyggede emailfunktion.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Herfra kan du aktivere og administrere brugen af Jabber til at fremsende adviseringer om nye private beskeder og ved opdateringer i overvågede emner og fora. Jabber er en Open Source protokol og kan derfor bruges af enhver. Nogle Jabber servere inkluderer gateways eller transporter, der tillader dig at kontakte brugere af andre netværk. Ikke alle servere tilbyder alle former for transporter, og ændringer i protokoller kan forhindre transporter i at fungere. Angiv her omhyggeligt en til formålet oprettet Jabberkonto - phpBB gør brug af disse data.',

	'ERR_JAB_AUTH'			=> 'Kunne ikke autorisere på Jabber server.',
	'ERR_JAB_CONNECT'		=> 'Kunne ikke forbinde til Jabber server.',
	'JAB_ENABLE'				=> 'Aktivér Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Slår brugen af beskeder og adviseringer via Jabber til.',
	'JAB_PACKAGE_SIZE'			=> 'Jabber pakkestørrelse',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Dette er antallet af beskeder sendt i en pakke. Hvis indstillet til 0 sendes meddelelsen øjeblikkeligt og sættes ikke i kø til senere afsendelse.',
	'JAB_PASSWORD'				=> 'Jabber kodeord',
	'JAB_PORT'					=> 'Jabber port',
	'JAB_PORT_EXPLAIN'			=> 'Udfyldes ikke, med mindre du véd at det ikke er port 5222.',
	'JAB_SERVER'				=> 'Jabber server',
	'JAB_SERVER_EXPLAIN'		=> 'Se %sjabber.org%s for en liste over servere.',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber indstillinger korrekt opdateret.',
	'JAB_USE_SSL'				=> 'Tilslut med SSL',
	'JAB_USE_SSL_EXPLAIN'		=> 'En sikker forbindelse forsøges etableret. Den anvendte Jabber port bliver ændret til 5223, hvis port 5222 er angivet.',
	'JAB_USERNAME'				=> 'Jabber brugernavn',
	'JAB_USERNAME_EXPLAIN'		=> 'Angiv en allerede oprettet Jabberkonto. Navnets gyldighed kontrolleres ikke af phpBB.',
));

?>