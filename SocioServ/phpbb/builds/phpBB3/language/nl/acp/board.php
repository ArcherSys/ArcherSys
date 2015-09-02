<?php
/**
*
* acp_board [Dutch]
*
* @package language
* @version $Id: board.php,v 1.0.0 2007/01/21 18:33:45 acydburn Exp $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Hier kan je de basiswerking van het forum instellen, een passende naam en omschrijving kiezen en de standaard tijdszone en taal tussen de andere opties wijzigen.',

	'CUSTOM_DATEFORMAT'				=> 'Aangepast',
	'DEFAULT_DATE_FORMAT'			=> 'Datumweergave',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'De datumweergave is dezelfde dan de PHP <code>datum</code> functie.',
	'DEFAULT_LANGUAGE'				=> 'Standaardtaal',
	'DEFAULT_STYLE'					=> 'Standaardstijl',
	'DISABLE_BOARD'					=> 'Forum uitschakelen',
	'DISABLE_BOARD_EXPLAIN'			=> 'Dit zal het forum onbereikbaar maken voor gebruikers. Als je wilt, kan je ook een kleine boodschap (255 tekens) invoeren',
	'OVERRIDE_STYLE'				=> 'Overschrijf gebruikersstijl',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Negeer gebruikersstijl',
	'SITE_DESC'						=> 'Omschrijving van de site',
	'SITE_NAME'						=> 'Naam van de site',
	'SYSTEM_DST'					=> 'Zomertijd toepassen',
	'SYSTEM_TIMEZONE'				=> 'Tijdszone van het systeem',
	'WARNINGS_EXPIRE'				=> 'Duur van de waarschuwing',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Aantal dagen dat voorbij gaat voordat de waarschuwing automatisch zal vervallen uit een gebruikersdocument.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Hier kan je verschillende forumeigenschappen aan/uitzetten.',

	'ALLOW_ATTACHMENTS'			=> 'Bijlagen toestaan',
	'ALLOW_BIRTHDAYS'			=> 'Verjaardagen toestaan',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Verjaardagen toestaan om ingevuld te worden en leeftijd te laten weergeven bij profielen. Let op dat op het forumoverzicht in de verjaardagslijst kan worden ingesteld bij laadopties.',
	'ALLOW_BOOKMARKS'			=> 'Onderwerpen toevoegen aan favorieten toestaan',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'De gebruiker heeft de mogelijkheid persoonlijk favorieten op te slaan.',
	'ALLOW_BBCODE'				=> 'BBCode toestaan',
	'ALLOW_FORUM_NOTIFY'		=> 'Op forums abonneren toestaan',
	'ALLOW_NAME_CHANGE'			=> 'Gebruikersnaamwijziging toestaan',
	'ALLOW_NO_CENSORS'			=> 'Uitschakelen van woordcensuur toestaan',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Gebruikers kunnen ervoor kiezen om automatische woordcensuur in te schakelen voor berichten en priv&eacute;berichten.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Bijlagen in priv&eacute;berichten toestaan',
	'ALLOW_SIG'					=> 'Onderschriften toestaan',
	'ALLOW_SIG_BBCODE'			=> 'BBCode in gebruikersonderschriften toestaan',
	'ALLOW_SIG_FLASH'			=> 'Het gebruik van <code>[FLASH]</code> BBCode in gebruikersonderschriften toestaan',
	'ALLOW_SIG_IMG'				=> 'Het gebruik van <code>[IMG]</code> BBCode in gebruikersonderschriften toestaan',
	'ALLOW_SIG_LINKS'			=> 'Het gebruik van koppelingen in gebruikersonderschriften toestaan',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Wanneer niet toegestaan <code>[URL]</code> BBCode en automatisch URL\'s worden uitgeschakeld',
	'ALLOW_SIG_SMILIES'			=> 'Het gebruik van smilies in gebruikersonderschriften toestaan',
	'ALLOW_SMILIES'				=> 'Smilies toestaan',
	'ALLOW_TOPIC_NOTIFY'		=> 'Het abonneren op onderwerpen toestaan',
	'BOARD_PM'					=> 'Priv&eacute;berichten sturen',
	'BOARD_PM_EXPLAIN'			=> 'Aan- of uitzetten van priv&eacute;berichten voor alle gebruikers.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatars zijn normaal gesproken kleine, unieke afbeeldingen die een gebruiker kan associ&euml;ren met zichzelf. Ze worden normaal gesproken onder de gebruikersnaam weergegeven, afhankelijk van de stijl die ze gebruiken. Hier kan je vaststellen hoe gebruikers hun avatars bepalen. Let wel dat om avatars te kunnen uploaden je wel de map moet hebben gemaakt met de naam die je hieronder hebt opgegeven en dat ernaar geschreven kan worden. Let ook dat de bestandsgrootte alleen van toepassing is op ge&uuml;ploade avatars, niet op gelinkte afbeeldingen.',

	'ALLOW_LOCAL'					=> 'Galerij avatars toestaan',
	'ALLOW_REMOTE'					=> 'Externe avatars toestaan',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatars gelinkt van andere websites.',
	'ALLOW_UPLOAD'					=> 'Avatar uploaden toestaan',
	'AVATAR_GALLERY_PATH'			=> 'Avatar galerijpad',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Het pad onder je phpBB-rootmap voor voorge&iuml;nstalleerde afbeeldingen, vb: <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Avatar opslagpad',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Het pad onder je phpBB-rootmap, vb: <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Maximum avatargrootte',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Hoogte x breedte in pixels.',
	'MAX_FILESIZE'					=> 'Maximum avatarbestandsgrootte',
	'MAX_FILESIZE_EXPLAIN'			=> 'Voor ge&uuml;ploade avatarbestanden.',
	'MIN_AVATAR_SIZE'				=> 'Minimum avatargrootte',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Hoogte x breedte in pixels.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'	=> 'Hier kan je alle standaard instellingen voor je priv&eacute;berichten instellen.',

	'ALLOW_BBCODE_PM'				=> 'BBCode toestaan in priv&eacute;berichten',
	'ALLOW_FLASH_PM'				=> 'Het gebruik van de BBCode <code>[FLASH]</code> toestaan',
	'ALLOW_FLASH_PM_EXPLAIN'		=> 'Onthoud dat de mogelijkheid tot het gebruiken van flash in priv&eacute; berichten, indien ingeschakeld, ook aan de permissies ligt.',
	'ALLOW_FORWARD_PM'				=> 'Doorsturen van priv&eacute;berichten toestaan',
	'ALLOW_IMG_PM'					=> 'Het gebruik van de BBCode <code>[IMG]</code> toestaan',
	'ALLOW_MASS_PM'					=> 'Het versturen van priv&eacute;berichten naar meerdere gebruikers en groepen toestaan',
	'ALLOW_PRINT_PM'				=> 'Afdrukvoorbeelden in priv&eacute;berichten toestaan',
	'ALLOW_QUOTE_PM'				=> 'Citaten toestaan in priv&eacute;berichten',
	'ALLOW_SIG_PM'					=> 'Onderschriften toestaan in priv&eacute;berichten',
	'ALLOW_SMILIES_PM'				=> 'Smilies toestaan in priv&eacute;berichten',
	'BOXES_LIMIT'					=> 'Maximum aantal priv&eacute;berichten per box',
	'BOXES_LIMIT_EXPLAIN'			=> 'Gebruikers kunnen niet meer dan dit aantal berichten ontvangen in elk van hun persoonlijk bericht boxen. Stel dit in als 0 om oneindig aantal berichten toe te staan.',
	'BOXES_MAX'						=> 'Maximum aantal priv&eacute;berichten mappen',
	'BOXES_MAX_EXPLAIN'				=> 'Als standaard kunnen gebruikers dit aantal mappen aanmaken voor hun priv&eacute;berichten.',
	'ENABLE_PM_ICONS'				=> 'Het gebruik van onderwerpicoontjes in priv&eacute;berichten toestaan',
	'FULL_FOLDER_ACTION'			=> 'Standaardactie bij een volle map',
	'FULL_FOLDER_ACTION_EXPLAIN'	=> 'Standaard te ondernemen actie als de gebruikersmap vol is ervan uitgaande dat de gebruikerskeuze (als die keuze al is gemaakt) niet uit te voeren is. De enige uitzondering is &quot;verzonden berichten&quot; map, waar het verwijderen van oude berichten de standaardactie is.',
	'HOLD_NEW_MESSAGES'				=> 'Nieuwe berichten bewaren',
	'PM_EDIT_TIME'					=> 'Aanpassingstijdslimiet',
	'PM_EDIT_TIME_EXPLAIN'			=> 'Limiteert de beschikbare tijd om een niet-verstuurd bericht aan te passen. Door de waarde op 0 te zetten, schakel je deze optie uit.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'		=> 'Hier kan je alle standaardinstellingen instellen voor het plaatsen van berichten.',
	'ALLOW_POST_LINKS'				=> 'Links toestaan in (persoonlijke) berichten',
	'ALLOW_POST_LINKS_EXPLAIN'		=> 'Bij uitgeschakeld zal de <code>[URL]</code> BBCode en automatisch URL\'s worden uitgeschakeld.',
	'ALLOW_POST_FLASH'				=> 'Sta het gebruik van <code>[FLASH]</code> BBCode-tag toe in berichten. ',
	'ALLOW_POST_FLASH_EXPLAIN'		=> 'Als de <code>[FLASH]</code> BBCode-tag niet wordt toegestaan en uitgeschakeld is in berichten. Anders zal het permissiesysteem bepalen welke gebruiker de <code>[FLASH]</code> BBCode-tag kan gebruiken.',

	'BUMP_INTERVAL'					=> 'Bump interval',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Het aantal minuten, uren of dagen tussen jouw laatste bericht in een onderwerp en de mogelijkheid dit onderwerp te "bumpen"',
	'CHAR_LIMIT'					=> 'Maximum tekens per bericht',
	'CHAR_LIMIT_EXPLAIN'			=> 'Het aantal tekens toegestaan in een bericht. Stel in op 0 voor oneindig aantal tekens.',
	'DISPLAY_LAST_EDITED'			=> 'Laatst gewijzigde tijdsinformatie laten zien',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Kies of je de laatst gewijzigde informatie wilt laten zien in berichten.',
	'EDIT_TIME'						=> 'Beperk wijzigtijd',
	'EDIT_TIME_EXPLAIN'				=> 'Beperk de beschikbare tijd om een nieuw bericht aan te passen. Door deze optie op 0 te zetten schakel je deze optie uit.',
	'FLOOD_INTERVAL'				=> 'Tijd tussen berichten',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Aantal seconden dat gebruikers dienen te wachten tussen het plaatsen van berichten.',
	'HOT_THRESHOLD'					=> 'Populaire berichtenminimum',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Aantal berichten in een onderwerp alvorens het populair is. Stel in op 0 om uit te schakelen.',
	'MAX_POLL_OPTIONS'				=> 'Maximum aantal poll-opties',
	'MAX_POST_FONT_SIZE'			=> 'Maximumgrootte lettertype per bericht',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Maximumgrootte lettertype toegestaan in een bericht. Stel in op 0 voor oneindige grootte.',
	'MAX_POST_IMG_HEIGHT'			=> 'Maximum afbeeldinggrootte per bericht',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Maximumhoogte van een afbeelding/flashbestand in berichten. Stel in op 0 voor oneindig.',
	'MAX_POST_IMG_WIDTH'			=> 'Maximum afbeeldingbreedte per bericht',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Maximumbreedte van een afbeelding/flashbestand in berichten. Stel in op 0 voor oneindig.',
	'MAX_POST_URLS'					=> 'Maximum links per bericht',
	'MAX_POST_URLS_EXPLAIN'			=> 'Maximum aantal URL\'s in een bericht. Stel in op 0 voor oneindig.',
	'POSTING'						=> 'Berichtenplaatsing',
	'POSTS_PER_PAGE'				=> 'Berichten per pagina',
	'QUOTE_DEPTH_LIMIT'				=> 'Maximum geneste citaten per bericht',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Maximum aantal geneste citaten in een bericht. Stel in op 0 voor oneindig.',
	'SMILIES_LIMIT'					=> 'Maximum smilies per bericht',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Maximum aantal smilies in een bericht. Stel in op 0 voor oneindig.',
	'TOPICS_PER_PAGE'				=> 'Onderwerpen per pagina',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Hier kan je alle standaard instellingen instellen voor onderschriften.',

	'MAX_SIG_FONT_SIZE'				=> 'Maximumgrootte lettertype onderschrift',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Maximumgrootte lettertype toegestaan in gebruikersonderschriften. Stel in op 0 voor onbeperkte grootte.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Maximum onderschrift afbeeldinghoogte',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Maximum hoogte van een afbeelding/flashbestand in gebruikersonderschriften. Stel in op 0 voor onbeperkte hoogte.',
	'MAX_SIG_IMG_WIDTH'				=> 'Maximum onderschrift afbeeldingbreedte',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Maximum breedte van een afbeelding/flashbestand in gebruikersonderschriften. Stel in op 0 voor onbeperkte breedte.',
	'MAX_SIG_LENGTH'				=> 'Maximumlengte onderschriften',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Maximum aantal tekens in een gebruikersonderschrift.',
	'MAX_SIG_SMILIES'				=> 'Maximum smilies per onderschrift',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Maximum smilies toegestaan in een gebruikersonderschrift. Stel in op 0 voor onbeperkt aantal smilies.',
	'MAX_SIG_URLS'					=> 'Maximum onderschrift links',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Maximum aantal links in een gebruikersonderschrift. Stel in op 0 voor oneindig.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'	=> 'Hier kan je registratie en profiel gerelateerde instellingen instellen.',

	'ACC_ACTIVATION'			=> 'Account activatie',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Dit beslist of gebruikers direct toegang hebben tot het forum of dat bevestiging nodig is, je kan ook registratie compleet uitzetten.',
	'ACC_ADMIN'						=> 'Door beheerder',
	'ACC_DISABLE'					=> 'Schakel uit',
	'ACC_NONE'						=> 'Geen',
	'ACC_USER'						=> 'Door gebruiker',
	'ALLOW_EMAIL_REUSE'				=> 'Hergebruik e-mailadres toestaan',
	'ALLOW_EMAIL_REUSE_EXPLAIN'		=> 'Verschillende gebruikers kunnen registreren onder hetzelfde e-mailadres.',
	'COPPA'							=> 'COPPA',
	'COPPA_FAX'						=> 'COPPA-faxnummer',
	'COPPA_MAIL'					=> 'COPPA-adres',
	'COPPA_MAIL_EXPLAIN'			=> 'Dit is het adres waar ouders het COPPA-registratieformulier naar moeten sturen.',
	'ENABLE_COPPA'					=> 'Schakel COPPA in',
	'ENABLE_COPPA_EXPLAIN'			=> 'Dit vereist van de gebruikers aan te geven of ze ouder zijn dan 13.',
	'MAX_CHARS'						=> 'Max',
	'MIN_CHARS'						=> 'Min',
	'MIN_TIME_REG'					=> 'Minimale registratie tijd',
	'MIN_TIME_REG_EXPLAIN'			=> 'Het registratie formulier kan niet verstuurd worden voor deze tijd verstreken is.',
	'MIN_TIME_TERMS'				=> 'Minimale tijd voor accepteren voorwaaarden',
	'MIN_TIME_TERMS_EXPLAIN'		=> 'De pagina met de voorwaarden kan niet verlaten worden voor deze tijd.',
	'NO_AUTH_PLUGIN'				=> 'Geen geschikte permissie plug-in aangetroffen',
	'PASSWORD_LENGTH'				=> 'Wachtwoordlengte',
	'PASSWORD_LENGTH_EXPLAIN'		=> 'Minimum en maximum aantal tekens in wachtwoorden.',
	'REG_LIMIT'						=> 'Registratiepogingen',
	'REG_LIMIT_EXPLAIN'				=> 'Aantal keren dat de gebruikers mogen proberen de bevestigingscode in te vullen alvorens de sessie wordt uitgeschakeld.',
	'USERNAME_ALPHA_ONLY'			=> 'Alleen letters en spaties',
	'USERNAME_ALPHA_SPACERS'		=> 'Alleen letters, cijfers en spaties',
	'USERNAME_ASCII'				=> 'ASCII (geen internationale unicode)',
	'USERNAME_LETTER_NUM'			=> 'Alleen letters en cijfers',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Alleen letters, cijfers en spaties',
	'USERNAME_CHARS'				=> 'Limiet aantal tekens gebruikersnaam',
	'USERNAME_CHARS_ANY'			=> 'Elk teken',
	'USERNAME_CHARS_EXPLAIN'		=> 'Beperkt de tekens die, in een gebruikersnaam, gebruikt mogen worden tot: spaties, -, +, _, [ en ].',
	'USERNAME_LENGTH'				=> 'Gebruikersnaam lengte',
	'USERNAME_LENGTH_EXPLAIN'		=> 'Minimum en maximum aantal tekens bij gebruikersnamen.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'	=> 'Hier kan je de visuele-bevestiging standaarden en CAPTCHA-opties opgeven.',

	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD CAPTCHA voorgrondverstoring',
	'CAPTCHA_GD_EXPLAIN'					=> 'Gebruik GD om meer geavanceerde CAPTCHA te maken.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Gebruik de voorgrondverstoring op de door GD gemaakte CAPTCHA extra te beveiligen.',
	'CAPTCHA_GD_X_GRID'						=> 'GD CAPTCHA x-as achtergrondverstoring',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Gebruik hiervoor lagere instellingen om de door GD gemaakte CAPTCHA extra te beveiligen. 0 zal de x-as achtergrondverstoring uitschakelen.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD CAPTCHA y-as achtergrondverstoring',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Gebruik hiervoor lagere instellingen om de door GD gemaakte CAPTCHA extra te beveiligen. 0 zal de y-as achtergrondverstoring uitschakelen.',

	'CAPTCHA_PREVIEW_MSG'					=> 'Je wijzigingen aan de visuele beveiliging zijn niet opgeslagen, dit is gewoon een voorbeeld.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'De CAPTCHA zoals deze er zal uitzien bij het gebruik van de huidige instellingen. Gebruik de voorbeeldknop om te vernieuwen. Hou rekening met het feit dat CAPTCHA\'s willekeurig zijn en zullen verschillen van voorbeeld tot voorbeeld.',
	'VISUAL_CONFIRM_POST'					=> 'Schakel visuele bevestiging voor gastberichten in',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Vereist van anonieme gebruikers de visuele bevestiging in te vullen.',
	'VISUAL_CONFIRM_REG'					=> 'Schakel visuele bevestiging voor registraties in',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Vereist nieuwe gebruikers de visuele bevestiging in te vullen.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'	=> 'Deze details specificeren de data die wordt gebruikt voor het verzenden van cookies naar de browsers van de gebruikers. In de meeste gevallen zijn de standaardwaardes voldoende. Als je iets moet aanpassen doe dat dan met beleid, incorrecte instellingen kunnen ervoor zorgen dat de gebruikers niet meer kunnen inloggen.',

	'COOKIE_DOMAIN'				=> 'Cookie domein',
	'COOKIE_NAME'				=> 'Cookie naam',
	'COOKIE_PATH'				=> 'Cookie pad',
	'COOKIE_SECURE'				=> 'Cookie secure [ https ]',
	'COOKIE_SECURE_EXPLAIN'		=> 'Zet deze optie alleen aan als je server gebruik maakt van SSL. Indien dit aan staat en SSL niet ondersteund wordt, ontstaan er fouten bij het doorsturen naar pagina\'s.',
	'ONLINE_LENGTH'				=> 'Toon als online tijdsduur',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Het aantal minuten waarna inactieve gebruikers niet langer in de &quot;wie is er online&quot; lijst staan. Hoe hoger deze waarde, hoe meer gegevens er verwerkt moeten worden voor deze lijst.',
	'SESSION_LENGTH'			=> 'Sessie lengte',
	'SESSION_LENGTH_EXPLAIN'	=> 'Sessie zal na dit aantal seconden verstrijken.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Hier kan je bepaalde forumfuncties aan/uit zetten om het aantal nodige serverprocessen te verminderen. Op de meeste servers is het niet nodig om een functie uit te schakelen, alhoewel op bepaalde systemen of op gedeelde hosting omgevingen het nuttig is om functies, die je niet nodig hebt, uit te schakelen. Je kan ook limieten opgeven voor de systeembelasting en het aantal actieve sessies waarna het forum offline gaat.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Aangepaste profielvelden',
	'LIMIT_LOAD'					=> 'Limiteer de systeembelasting',
	'LIMIT_LOAD_EXPLAIN'			=> 'Als de gemiddelde systeembelasting van 1 minuut deze waarde overschrijdt, wordt het forum uitgeschakeld. Dit werkt enkel op UNIX-servers waar deze informatie beschikbaar is. Deze waarde zal zichzelf terug op 0 instellen indien phpBB de systeembelastingslimiet niet kon ophalen.',
	'LIMIT_SESSIONS'				=> 'Limiteer sessies',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Als het aantal sessies gedurende &eacute;&eacute;n minuut boven deze waarde komt, zal het forum offline gaan. Stel in op 0 voor onbeperkt aantal sessies.',
	'LOAD_CPF_MEMBERLIST'			=> 'Geef eigen profielvelden in ledenlijst weer',
	'LOAD_CPF_VIEWPROFILE'			=> 'Geef eigen profielvelden in gebruikersprofielen weer',
	'LOAD_CPF_VIEWTOPIC'			=> 'Geef eigen profielvelden op de berichtenpagina weer',
	'LOAD_USER_ACTIVITY'			=> 'Laat gebruikersactiviteiten zien',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Laat actieve onderwerpen in gebruikersprofielen en gebruikersconfiguratiescherm zien. Het is aangeraden om dit uit te schakelen bij een forum met meer dan een miljoen berichten.',
	'RECOMPILE_STYLES'				=> 'Hercompileer oude stijl componenten',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Controleer voor gewijzigde stijl componenten op het systeem en hercompileer deze.',
	'YES_ANON_READ_MARKING'			=> 'Markeer berichten bij gasten',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Houd gelezen berichten van gasten bij',
	'YES_BIRTHDAYS'					=> 'Verjaardagslijst inschakelen',
	'YES_JUMPBOX'					=> 'Laat jumpbox zien',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Als de verjaardagslijst is ingeschakeld wordt dit niet langer weergegeven. Om deze instelling effectief te houden moet je de verjaardagslijst weergave bij laadopties ook inschakelen.',
	'YES_MODERATORS'				=> 'Moderators laten zien',
	'YES_ONLINE'					=> 'Online gebruikerslijst inschakelen',
	'YES_ONLINE_EXPLAIN'			=> 'Laat de online gebruikers informatie zien op het forumoverzicht, de forumspecifieke en onderwerppagina\'s.',
	'YES_ONLINE_GUESTS'				=> 'Geef gasten in de online gebruikerslijst weer',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Geef gasteninformatie weer bij online gebruikers',
	'YES_ONLINE_TRACK'				=> 'Geef online/offline info weer',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Geeft online/offline info weer in profielen en berichtenpagina\'s',
	'YES_POST_MARKING'				=> 'Sta gestipte berichten toe',
	'YES_POST_MARKING_EXPLAIN'		=> 'Laat zien of een gebruiker een bericht heeft geplaatst in een onderwerp.',
	'YES_READ_MARKING'				=> 'Schakel onderwerp-markering via de server in',
	'YES_READ_MARKING_EXPLAIN'		=> 'Gebruik de server i.p.v. cookies om aan te geven of berichten gelezen zijn.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB staat verificatiemodules toe.',

	'AUTH_METHOD'	=> 'Selecteer een verificatiemethode',

	'APACHE_SETUP_BEFORE_USE'	=> 'Je dient de Apache-verificatie te activeren alvorens je phpBB deze verificatie laat gebruiken. Onthoud dat de gebruikersnaam die je voor de Apache-verificatie gebruikt, dezelfde moet zijn als je phpBB-gebruikersnaam. Apache-verificatie kan alleen gebruikt worden met mod_php (niet de CGI versie) en als safe_mode uit staat.',

	'LDAP_DN'						=> 'LDAP-base <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Dit is de Distinguished Name, wat de gebruikers informatie lokaliseert, vb: <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'LDAP-e-mailattribuut',
	'LDAP_EMAIL_EXPLAIN'			=> 'Stel dit in naargelang de gebruiker z\'n e-mail attribuut.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Wachtwoord incorrect.',
	'LDAP_NO_EMAIL'					=> 'Het gespecificeerde e-mail attribuut bestaat niet.',
	'LDAP_NO_IDENTITY'				=> 'Kon geen login identificatie vinden voor %s.',
	'LDAP_PASSWORD'					=> 'LDAP-wachtwoord',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Laat dit leeg voor anonieme toegang. Vul anders het wachtwoord voor de bovenstaande gebruiker in. Vereist voor active directory servers.<strong>WAARSCHUWING:</strong> Dit wachtwoord zal als normale tekst worden opgeslagen en is zichtbaar voor iedereen die database toegang heeft of die dit configuraiebestand kan openen.',
	'LDAP_PORT'						=> 'LDAP server poort',
	'LDAP_PORT_EXPLAIN'				=> 'Optioneel kan je de poort opgeven waarlangs de verbinding met de LDAP server moet gaan indien anders dan de standaard poort 389.',
	'LDAP_SERVER'					=> 'LDAP-servernaam',
	'LDAP_SERVER_EXPLAIN'			=> 'Wanneer LDAP wordt gebruikt is dit de hostnaam of het IP-adres van de server. Je kan eventueel ook een specifieke url opgeven zoals ldap://hostnaam:poort/',
	'LDAP_UID'						=> 'LDAP-<var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Deze code zit vast aan de gebruiker.',
	'LDAP_USER'						=> 'LDAP-gebruiker dn',
	'LDAP_USER_EXPLAIN'				=> 'Laat leeg om anonieme toegang te krijgen. Als dit is ingevuld zal phpBB de opgegeven voorkeursnaam gebruiken voor de login-pogingen om de juiste gebruiker te vinden, v.b. <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Vereist voor active directory servers.',
	'LDAP_USER_FILTER'				=> 'LDAP gebruikers filter',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Optioneel kan je de gevonden objecten beperken met behulp van filters. Bijvoorbeeld <samp>objectClass=posixGroup</samp> zal resulteren in het gebruik van <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Hier dien je alle serverinstellingen op te geven.',

	'ENABLE_GZIP'				=> 'Schakel GZip compressie in',
	'ENABLE_GZIP_EXPLAIN'		=> 'Gegenereerde inhoud zal eerst gecomprimeerd worden voor deze verzonden wordt. Dit verkleint het netwerkverkeer, maar zal het CPU-gebruik van zowel de server als de cli&euml;nt verhogen.',
	'FORCE_SERVER_VARS'			=> 'Forceer server URL-instellingen',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Wanneer ingesteld op &quot;ja&quot; zal de server de instellingen die hier gegeven worden bij voorkeur, op de automatisch ingestelde waardes, gebruiken.',
	'ICONS_PATH'				=> 'Icoon opslagpad',
	'ICONS_PATH_EXPLAIN'		=> 'Pad onder je phpBB-rootmap, vb: <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Pad instellingen',
	'RANKS_PATH'				=> 'Rangafbeeldingenpad',
	'RANKS_PATH_EXPLAIN'		=> 'Pad in je phpBB-root, vb: <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Scriptpad',
	'SCRIPT_PATH_EXPLAIN'		=> 'Het pad waar phpBB staat, afhankelijk van je domein.',
	'SERVER_NAME'				=> 'Domeinnaam',
	'SERVER_NAME_EXPLAIN'		=> 'De domeinnaam waar dit forum op draait (bijvoorbeeld: <samp>www.voorbeeld.nl</samp>).',
	'SERVER_PORT'				=> 'Serverpoort',
	'SERVER_PORT_EXPLAIN'		=> 'De poort waar je server op draait, normaal 80, alleen veranderen indien anders.',
	'SERVER_PROTOCOL'			=> 'Serverprotocol',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Het protocol dat geforceerd gebruikt moet worden. Indien niet ingesteld, wordt het protocol bepaald aan de hand van je cookie veiligheidsinstellingen (<samp>http://</samp> en <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Server URL-instellingen',
	'SMILIES_PATH'				=> 'Smilies opslagpad',
	'SMILIES_PATH_EXPLAIN'		=> 'Pad onder je phpBB-rootmap, vb: <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Opslagpad icoongroep extensies',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Pad onder je phpBB-rootmap, vb: <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'	=> 'Hier kan je sessie- en logingerelateerde instellingen bepalen.',

	'ALL'							=> 'Alle',
	'ALLOW_AUTOLOGIN'				=> 'Auto-login toestaan',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Bepaalt of gebruikers automatisch kunnen inloggen wanneer ze het forum bezoeken.',
	'AUTOLOGIN_LENGTH'				=> 'Auto-login sleutel veroudering (in dagen)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Aantal dagen nadat auto-login sleutels verwijderd zullen worden of nul voor uitschakelen.',
	'BROWSER_VALID'					=> 'Valideer browser',
	'BROWSER_VALID_EXPLAIN'			=> 'Schakelt browservalidatie voor elke sessie om beveiliging te verbeteren.',
	'CHECK_DNSBL'					=> 'Controleer IP in de DNS Blackhole List',
	'CHECK_DNSBL_EXPLAIN'			=> 'Indien ingeschakeld wordt de gebruikers IP gecontroleerd, op registraties een het plaatsen van berichten, bij de volgende DNSBL diensten: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> en <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Het opzoeken hiervan kan even duren, ahangend van de server configuratie. Indien je teveel vertraging of valse positieve antwoorden krijgt, is het aangeraden dit uit te schakelen.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Controleer e-maildomein op geldige MX-record',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Indien ingeschakeld zal het opgegeven e-maildomein bij de registratie en aanpassen van het profiel gecontroleerd worden op een geldige MX-record.',
	'FORCE_PASS_CHANGE'				=> 'Forceer wachtwoordwijziging',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Verplicht de gebruikers hun wachtwoord te wijzigen na een bepaald aantal dagen. Stel in op 0 om deze optie uit te schakelen.',
	'FORM_TIME_MAX'					=> 'Maximale tijd om een formulier te versturen',
	'FORM_TIME_MAX_EXPLAIN'			=> 'De tijd dat een gebruiker heeft om een formulier te versturen. Gebruik \'-1\' om dit uit te schakelen. Let op dat een formulier ongeldig kan worden als de sessie vervalt, onafhankelijk van deze instelling.',
	'FORM_TIME_MIN'					=> 'Minimale tijd om en formulier te versturen',
	'FORM_TIME_MIN_EXPLAIN'			=> 'Sneller, dan deze tijd, verstuurde formulieren worden genegeerd. Zet op \'0\' om uit te schakelen.',
	'FORM_SID_GUESTS'				=> 'Link formulieren aan sessies gasten',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Indien ingeschakeld zal de formulier variabele die aan gasten wordt toegewezen sessie exclusief zijn. Dit kan mogelijk problemen opleveren met enkele internetproviders.',
	'FORWARDED_FOR_VALID'			=> 'Gecontroleerde <var>X_FORWARDED_FOR</var> header',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sessies worden enkel voortgezet met gelijke header',
	'IP_VALID'						=> 'Sessie IP-validatie',
	'IP_VALID_EXPLAIN'				=> 'Bepaalt hoeveel van de gebruiker zijn IP gebruikt wordt om een sessie te valideren; <samp>alle</samp> vergelijkt het volledige adres, <samp>A.B.C</samp> de eerste x.x.x, <samp>A.B</samp> de eerst x.x, <samp>geen</samp> schakelt de controle uit. Bij een IPv6 adres vergelijkt <samp>A.B.C</samp> de eerste 4 stukken en <samp>A.B</samp> de eerste 3 stukken.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Maximum aantal loginpogingen',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Na dit aantal gefaalde loginpogingen moet de gebruiker visueel nogmaals zijn login bevestigen.',
	'NO_IP_VALIDATION'				=> 'Geen',
	'PASSWORD_TYPE'					=> 'Wachtwoord moeilijkheidsgraad',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Bepaald hoe moeilijk een wachtwoord moet zijn wanneer dit ingesteld of gewijzigd wordt',
	'PASS_TYPE_ALPHA'				=> 'Moet letters en cijfers bevatten',
	'PASS_TYPE_ANY'					=> 'Geen vereisten',
	'PASS_TYPE_CASE'				=> 'Hoofdletter en normale letter gebruik moet gemixt zijn',
	'PASS_TYPE_SYMBOL'				=> 'Dient symbolen te bevatten',
	'TPL_ALLOW_PHP'					=> 'Sta PHP toe in templates',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Indien deze optie ingeschakeld is, zullen de <code>PHP</code> en <code>INCLUDEPHP</code> blokken in templates herkend en vervangen worden.',
));

// E-mail Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Deze informatie wordt gebruikt wanneer het forum een e-mail stuurt naar jouw gebruikers. Zorg er alsjeblieft voor dat het gespecificeerde e-mailadres geldig is; alle geweigerde of niet-geleverde berichten zullen naar dit adres worden gestuurd. Indien je host geen lokale (PHP gebaseerde) e-mailservice aanbiedt, kan je SMTP gebruiken om e-mails te sturen. Dit heeft het adres van een toepasselijke server nodig (vraag aan je hostingbedrijf zodra nodig), specificeer hier geen oude naam! Als de server verificatie nodig heeft (en alleen als dat zo is), voer dan hier de benodigde gebruikersnaam en wachtwoord in. Let alsjeblieft op het feit dat alleen basisverificatie wordt aangeboden, verschillende verificatie implementaties worden momenteel niet ondersteund.',

	'ADMIN_EMAIL'					=> 'Antwoord e-mailadres',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Dit zal worden gebruikt als terugkeeradres op alle e-mails, de technische contact e-mailadres. Dit zal altijd worden gebruikt als de <samp>antwoordpad</samp> en <samp>afzender</samp> adressen in e-mails.',
	'BOARD_EMAIL_FORM'				=> 'Gebruikers versturen e-mail via het forum',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'In plaats van de gebruikers de e-mailadressen laten zien van gebruikers, kunnen ze e-mails versturen via het forum.',
	'BOARD_HIDE_EMAILS'				=> 'Verwijder e-mailadressen',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Deze functie houdt e-mailadressen compleet priv&eacute;.',
	'CONTACT_EMAIL'					=> 'Contact e-mailadres',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Dit adres wordt gebruikt voor contact met de beheerder',
	'EMAIL_FUNCTION_NAME'			=> 'Naam e-mail functie',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'De e-mail functie die wordt gebruikt om via PHP e-mails te versturen.',
	'EMAIL_PACKAGE_SIZE'			=> 'E-mail pakketgrootte',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Dit is het aantal e-mails die worden verzonden in &eacute;&eacute;n pakket.',
	'EMAIL_SIG'						=> 'E-mail onderschrift',
	'EMAIL_SIG_EXPLAIN'				=> 'Deze tekst zal worden toegevoegd aan alle e-mails die het forum verstuurd.',
	'ENABLE_EMAIL'					=> 'Sta e-mails toe op het forum',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Indien uitgeschakeld worden er helemaal geen e-mails verzonden via het forum.',
	'SMTP_AUTH_METHOD'				=> 'Verificatiemethode voor SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Wordt alleen gebruikt indien je een gebruikersnaam/wachtwoord hebt ingesteld. Vraag aan je hostingbedrijf als je niet zeker bent welke methode je moet gebruiken.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP-wachtwoord',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Voer alleen een wachtwoord in als dit nodig is voor je SMTP-server.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP-serverpoort',
	'SMTP_PORT_EXPLAIN'				=> 'Verander dat alleen als je weet dat jouw SMTP-server op een andere poort draait.',
	'SMTP_SERVER'					=> 'SMTP-serveradres',
	'SMTP_SETTINGS'					=> 'SMTP-instellingen',
	'SMTP_USERNAME'					=> 'SMTP-gebruikersnaam',
	'SMTP_USERNAME_EXPLAIN'			=> 'Voer alleen een gebruikersnaam in als je SMTP-server dit nodig heeft.',
	'USE_SMTP'						=> 'Gebruik SMTP-server voor e-mail',
	'USE_SMTP_EXPLAIN'				=> 'Selecteer &quot;ja&quot; als je e-mails via de opgegeven SMTP-server, in plaats van met de lokale mailfunctie, wilt of moet versturen.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Hier kan je het gebruik van Jabber, voor chatberichten en forummeldingen, inschakelen en beheren. Jabber is een open bron protocol en dus voor gebruik beschikbaar voor iedereen. Sommige Jabber-servers hebben gateways of transporteer methodes die ervoor zorgen dat je gebruikers op andere netwerken kan contacteren. Niet alle servers ondersteunen alle transporteermethodes of veranderingen in het protocol en zullen deze voorkomen. Wees er zeker dat je al een geregistreerd account invult - phpBB zal de gegevens die je hier hebt ingevuld gebruiken.',
	'JAB_ENABLE'				=> 'Schakel Jabber in',
	'JAB_ENABLE_EXPLAIN'		=> 'Schakelt Jabber in voor berichten en notificaties.',
	'JAB_GTALK_NOTE'			=> 'Merk op dat GTalk niet zal werken omdat de <samp>dns_get_record</samp> functie niet gevonden werd. Deze functie is niet aanwezig in PHP4 en werd tevens niet opgenomen in Windows systemen. Momenteel werkt het ook nog niet op BSD-gebaseerde systemen, inclusief Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Jabber-pakketgrootte',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Dit is het aantal berichten verzonden in een pakket. 0 om uit te schakelen en direct te verzenden.',
	'JAB_PASSWORD'				=> 'Jabber-wachtwoord',
	'JAB_PORT'					=> 'Jabber-poort',
	'JAB_PORT_EXPLAIN'			=> 'Laat leeg tenzij de poort niet 5222 is.',
	'JAB_SERVER'				=> 'Jabber-server',
	'JAB_SERVER_EXPLAIN'		=> 'Controleer %sjabber.org%s voor een lijst met servers.',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber-instellingen succesvol gewijzigd.',
	'JAB_USE_SSL'				=> 'Gebruik SSL om contact te maken',
	'JAB_USE_SSL_EXPLAIN'		=> 'Indien ingeschakeld wordt er geprobeerd een veilige connectie te krijgen. De Jabber-poort zal veranderd worden naar 5223 als poort 5222 al ingevuld is.',
	'JAB_USERNAME'				=> 'Jabber-gebruikersnaam',
	'JAB_USERNAME_EXPLAIN'		=> 'Vul een geregistreerde gebruikersnaam in. De gebruikersnaam zal niet op geldigheid gecheckt worden.',
));
?>