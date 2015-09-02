<?php
/**
*
* install [Dutch]
*
* @package language
* @version $Id: install.php,v 1.0.0 2007/01/26 16:09:16 acydburn Exp $
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
	'ADMIN_CONFIG'				=> 'Beheerders details',
	'ADMIN_PASSWORD'			=> 'Wachtwoord beheerder',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Bevestig wachtwoord',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Geef een wachtwoord van 6 tot 30 tekens.',
	'ADMIN_TEST'				=> 'Controleer beheerdersinstellingen',
	'ADMIN_USERNAME'			=> 'Gebruikersnaam beheerder',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Geef een gebruikersnaam van 3 tot 20 tekens.',
	'APP_MAGICK'				=> 'Imagemagick-ondersteuning [ bijlagen ]',
	'AUTHOR_NOTES'				=> 'Opmerkingen van de auteur<br />&raquo; %s',
	'AVAILABLE'					=> 'Beschikbaar',
	'AVAILABLE_CONVERTORS'		=> 'Beschikbare conversieprogramma\'s',

	'BEGIN_CONVERT'					=> 'Start conversie',
	'BLANK_PREFIX_FOUND'			=> 'Een tabellenscan heeft een geldige installatie gevonden, met tabellen zonder voorvoegsel.',
	'BOARD_NOT_INSTALLED'			=> 'Geen foruminstallatie gevonden',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'Het phpBB Verenigd Conversie Framework vereist een standaard phpBB3 installatie, ga verder door <a href="%s">phpBB3 eerst te installeren</a>.',

	'CATEGORY'					=> 'Categorie',
	'CACHE_STORE'				=> 'Buffertype',
	'CACHE_STORE_EXPLAIN'		=> 'De fysieke locatie waar gegevens gebufferd worden, bij voorkeur: bestandssysteem.',
	'CAT_CONVERT'				=> 'Converteren',
	'CAT_INSTALL'				=> 'Installeren',
	'CAT_OVERVIEW'				=> 'Overzicht',
	'CAT_UPDATE'				=> 'Update',
	'CHANGE'					=> 'Wijzigen',
	'CHECK_TABLE_PREFIX'		=> 'Let op het tabelvoorvoegsel en probeer opnieuw.',
	'CLEAN_VERIFY'				=> 'Opruimen en de uiteindelijke structuur controleren',
	'CLEANING_USERNAMES'		=> 'Opruimen gebruikersnamen',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> is de schone gebruikersnaam van:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Er werden overeenkomstige gebruikersnamen op je oude forum gevonden. Om de conversie af te ronden moet je deze gebruikers verwijderen of hernoemen, zodat er bij iedere schone gebruikersnaam slechts &eacute;&eacute;n gebruiker hoort.',
	'COLLIDING_USER'			=> '&raquo; gebruiker id: <strong>%d</strong> gebruikersnaam: <strong>%s</strong> (%d berichten)',
	'CONFIG_CONVERT'			=> 'Bezig met converteren van de configuratie',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Het maken van het configuratiebestand is mislukt, de alternatieve methodes om dit bestand te maken worden hieronder beschreven.',
	'CONFIG_FILE_WRITTEN'		=> 'Het configuratiebestand is aangemaakt, ga verder met de volgende stap.',
	'CONFIG_PHPBB_EMPTY'		=> 'De phpBB3 configuratievariabele &quot;%s&quot; is niet ingesteld.',
	'CONFIG_RETRY'				=> 'Probeer opnieuw',
	'CONTACT_EMAIL_CONFIRM'		=> 'Bevestig het e-mailadres',
	'CONTINUE_CONVERT'			=> 'Doorgaan met converteren',
	'CONTINUE_CONVERT_BODY'		=> 'Je hebt al eerder een conversie geprobeerd. Nu kan je kiezen voor een nieuwe conversie of om door te gaan met de huidige conversie.',
	'CONTINUE_LAST'				=> 'Doorgaan met de laatste instructies',
	'CONTINUE_OLD_CONVERSION'	=> 'Doorgaan met de laatst opgestarte conversie',
	'CONVERT'					=> 'Converteren',
	'CONVERT_COMPLETE'			=> 'Conversie gereed',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'De conversie naar phpBB 3.0 is succesvol afgerond. Je kan nu inloggen en <a href="../">je forum openen</a>. Wees er zeker van dat alle instellingen juist zijn overgezet voordat je het forum inschakelt door de install-map te verwijderen. Er is online informatie beschikbaar omtrent het gebruik van phpBB, dit in de <a href="http://www.phpbb.nl/documentatie/3.0/">documentatie</a> en het <a href="http://www.phpbb.nl/forums/viewforum.php?f=51">supportforum</a>.',
	'CONVERT_INTRO'				=> 'Welkom bij het phpBB Conversie Framework',
	'CONVERT_INTRO_BODY'		=> 'Van hieruit kun je gegevens van andere forumsoftware te converteren. De onderstaande lijst toont alle beschikbare conversiemodules. Als de door jouw benodigde conversiemodule niet in de lijst staat, kijk dan op onze website voor eventuele andere beschikbare modules.',
	'CONVERT_NEW_CONVERSION'	=> 'Nieuwe conversie',
	'CONVERT_NOT_EXIST'			=> 'De gespecificeerde conversiemodule bestaat niet.',
	'CONVERT_OPTIONS'			=> 'Opties',
	'CONVERT_SETTINGS_VERIFIED'	=> 'De opgegeven informatie werd gecontroleerd, klik op onderstaande knop om het conversieproces te starten.',
	'CONV_ERR_FATAL'			=> 'Fatale conversiefout',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'In het oude forum is bijlagen uploaden met FTP ingeschakeld, zet deze uit en zorg ervoor dat er een geldige uploadmap opgegeven is. Kopieer daarna alle bijlagen naar deze map (let op, deze moet toegankelijk zijn via het internet). Eenmaal je dit gedaan hebt, start je de conversie opnieuw op.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Er is geen configuratie informatie beschikbaar voor de conversie.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Er is geen forum toegangsinformatie gevonden.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Er zijn geen categorie&euml;n gevonden.',
	'CONV_ERROR_GET_CONFIG'				=> 'De forumconfiguratie kon niet ingelezen worden.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Kan &quot;%s&quot; niet lezen/openen.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'De groepsverificatie kan niet gevonden worden.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Inconsistentie in de groepentabel gevonden add_bots() - indien je ze manueel toevoegt, moet je dit voor alle speciale groepen doen.',
	'CONV_ERROR_INSERT_BOT'				=> 'Kan de bot in de tabel users niet toevoegen.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Kan de bot niet aan de bots tabel toevoegen.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Kan de gebruiker niet aan de tabel user_groep toevoegen.' ,
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Fout in de berichtverwerker',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Notitie voor de ontwerper: je moet $convertor[\'avatar_path\'] specificeren om %s te gebruiken.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Het relatieve pad naar het forum is niet gespecificeerd.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Notitie voor de ontwerper: je moet $convertor[\'avatar_gallery_path\'] specificeren om %s te gebruiken.',
	'CONV_ERROR_NO_GROUP'				=> 'Groep &quot;%1$s&quot; kon niet in %2$s gevonden worden.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Notitie voor de ontwerper: je moet $convertor[\'ranks_path\'] specificeren om %s te gebruiken.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Notitie voor de ontwerper: je moet $convertor[\'smilies_path\'] specificeren om %s te gebruiken.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Notitie voor de ontwerper: je moet $convertor[\'upload_path\'] specificeren om %s te gebruiken.',
	'CONV_ERROR_PERM_SETTING'			=> 'De permissie-instellingen kunnen niet toegevoegd/ge&uuml;pdate worden.',
	'CONV_ERROR_PM_COUNT'				=> 'Het aantal pb\'s in de mappen kon niet geteld worden.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Het nieuwe forum kon niet ingevoegd worden bij het verplaatsen van de oude categorie.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Het nieuwe forum kon niet ingevoegd worden bij het verplaatsen van het oude forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'De gebruikers verificatie-informatie kon niet worden opgehaald.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Verkeerde groep &quot;%1$s&quot; gedefinieerd in %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Deze pagina verzamelt alle gegevens die nodig zijn om toegang te krijgen tot het oorspronkelijke forum. Vul de databasedetails van jouw vorige forum in; de converter zal niks veranderen in de database die je hieronder opgeeft. Het oorspronkelijke forum zou uitgeschakeld moeten worden om geen storingen te veroorzaken tijdens de conversie.',
	'CONV_SAVED_MESSAGES'				=> 'Opgeslagen berichten',

	'COULD_NOT_COPY'		=> 'Het bestand <strong>%1$s</strong> kon niet naar <strong>%2$s</strong> gekopieerd worden.<br /><br />Controleer of de doelmap bestaat en de webserver schrijfrechten heeft.',
	'COULD_NOT_FIND_PATH'	=> 'Het pad naar je vorige forum kon niet gevonden worden. Controleer de instellingen en probeer opnieuw.<br />&raquo; %s was het opgegeven bron pad is .',

	'DBMS'						=> 'Databasetype',
	'DB_CONFIG'					=> 'Databaseconfiguratie',
	'DB_CONNECTION'				=> 'Databaseconnectie',
	'DB_ERR_INSERT'				=> 'Fout bij uitvoering van <code>INSERT</code>-query.',
	'DB_ERR_LAST'				=> 'Fout bij verwerking van <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Fout bij verwerking van <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Fout bij verwerking van <var>query_first</var>, %s (&quot;%s&quot;).',
	'DB_ERR_SELECT'				=> 'Fout bij uitvoering van <code>SELECT</code> query.',
	'DB_HOST'					=> 'Hostnaam of DSN-databaseserver',
	'DB_HOST_EXPLAIN'			=> 'DSN staat voor Data Source Name en heeft alleen betrekking op ODBC-installaties.',
	'DB_NAME'					=> 'Databasenaam',
	'DB_PASSWORD'				=> 'Databasewachtwoord',
	'DB_PORT'					=> 'Poort databaseserver',
	'DB_PORT_EXPLAIN'			=> 'Laat dit leeg, tenzij de databaseserver niet met de standaardpoort werkt.',
	'DB_USERNAME'				=> 'Databasegebruikersnaam',
	'DB_TEST'					=> 'Test verbinding',
	'DEFAULT_LANG'				=> 'Standaard forumtaal',
	'DEFAULT_PREFIX_IS'			=> 'De conversie kan geen tabellen met het opgegeven voorvoegsel vinden. Controleer of dat je de correcte gegevens opgeeft voor het forum waarvan je converteert. Het standaard tabelvoorvoegsel, voor %1$s is <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'Er is in de converter geen waarde voor de test_file variabele opgegeven. Als je een converter gebruiker bent, zou je deze fout niet mogen zien, meld deze fout dan alstublieft aan de converter auteur. Als je de converter auteur bent, moet je de naam van een bestaand bestand van het forum opgeven zodat het pad gecontroleerd kan worden.',
	'DIRECTORIES_AND_FILES'		=> 'Map- en bestandssetup',
	'DISABLE_KEYS'				=> 'Blokkeer sleutels',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Externe FTP-ondersteuning [ installatie ]',
	'DLL_GD'					=> 'GD afbeeldingen ondersteuning [ visuele-bevestiging ]',
	'DLL_MBSTRING'				=> 'Multi-byte tekens ondersteuning',
	'DLL_MSSQL'					=> 'MSSQL server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL server 2000+ via ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL met MySQLi extensie',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'XML ondersteuning [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib compressie ondersteuning [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Download configuratie',
	'DL_CONFIG_EXPLAIN'			=> 'Je kan het config.php bestand naar je computer downloaden, waarna je het manueel uploadt (en het eventueel bestaande config.php bestand overschrijft) naar de phpBB 3.0 root map. Zorg er echter wel voor dat je het bestand in ASCII-formaat uploadt (als je niet weet hoe dit moet, raadpleeg dan de documentatie van je FTP-programma). Nadat je het config.php ge&uuml;pload hebt, klik je op &quot;klaar&quot; om naar de volgende stap te gaan.',
	'DL_DOWNLOAD'				=> 'Download',
	'DONE'						=> 'Klaar',

	'ENABLE_KEYS'	=> 'Heractiveer sleutels. Dit kan een tijd duren.',

	'FILES_OPTIONAL'			=> 'Optionele bestanden en mappen',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Optioneel</strong> - De permissie instellingen van deze bestanden en/of mappen zijn niet verplicht. Het installatiesysteem zal ze op verschillende manieren proberen maken als ze niet bestaan of niet beschrijfbaar zijn. Indien ze wel bestaan, zal de installatieprocedure versnellen.',
	'FILES_REQUIRED'			=> 'Bestanden en mappen',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Vereist</strong> - Om phpBB goed te laten functioneren moeten sommige bestanden en mappen toegankelijk en beschrijfbaar zijn. Indien er &quot;niet gevonden&quot; staat, moet je het/de betreffende bestand(en) en/of map(pen) aanmaken. Indien er &quot;onbeschrijfbaar&quot; staat moet je phpBB de benodigde schrijfpermissies geven.',
	'FILLING_TABLE'				=> 'Bezig met vullen tabel <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Bezig met vullen tabellen',
	'FINAL_STEP'				=> 'Verwerk laatste stap',
	'FORUM_ADDRESS'				=> 'Forumadres',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Dit is de URL naar je vorige forum, bijvoorbeeld <samp>http://www.voorbeeld.nl/phpBB2/</samp>. Als er een adres ingevuld is (en deze optie dus niet leeg gelaten wordt), zal dit adres in alle berichten, priv&eacute;berichten en onderschriften vervangen worden met het nieuwe forumadres.',
	'FORUM_PATH'				=> 'Forumpad',
	'FORUM_PATH_EXPLAIN'		=> 'Dit is het <strong>relatieve</strong> pad naar je vorige forum, gezien vanuit de <strong>root van dit phpBB3-forum</strong>.',
	'FOUND'						=> 'Gevonden',
	'FTP_CONFIG'				=> 'Zet config via FTP over',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB heeft de FTP-module op deze server gevonden. Je kan, indien gewenst, het config.php bestand op deze manier proberen uploaden. Hiervoor moet je dan wel de hieronder gevraagde informatie opgeven. Je gebruikersnaam en wachtwoord zijn degene waarmee je toegang hebt tot de server! (Vraag je hostingbedrijf deze gegevens als je ze niet zeker weet).',
	'FTP_PATH'					=> 'FTP-pad',
	'FTP_PATH_EXPLAIN'			=> 'Dit is het pad naar de rootmap van je phpBB-forum, bijvoorbeeld. <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'Uploaden',

	'GPL'	=> 'General Public License',

	'INITIAL_CONFIG'				=> 'Basisconfiguratie',
	'INITIAL_CONFIG_EXPLAIN'		=> 'Nu de installatie vastgesteld heeft dat phpBB wel degelijk op je server kan werken, moet je wat specifieke informatie opgeven. Indien je niet weet hoe je een databaseverbinding moet maken, contacteer dan je host (beste optie) of vraag dit in de phpBB-supportforums. Controleer de gegevens die je opgeeft grondig voor je verder gaat.',
	'INSTALL_CONGRATS'				=> 'Gefeliciteerd!',
	'INSTALL_CONGRATS_EXPLAIN'		=> '
		<p>Je hebt phpBB %1$s succesvol ge&iuml;nstalleerd. Vanaf hier heb je twee mogelijkheden met je nieuwe phpBB3-installatie:</p>
		<h2>Converteer een bestaand forum naar phpBB3</h2>
		<p>Het phpBB Framework ondersteunt de conversie van phpBB 2.0.x en andere forums naar phpBB3. Indien je een bestaand forum hebt dat je wenst te converteren, ga dan door naar: <a href="%2$s">converteren</a>.</p>
		<h2>Ga online met phpBB3!</h2>
		<p>Door op de onderstaande knop te klikken, ga je naar het beheerderspaneel. Neem wat tijd om de beschikbare opties te bestuderen. Onthoud dat er online hulp is via de <a href="http://www.phpbb.nl/documentatie/3.0/">documentatie</a> en de <a href="http://www.phpbb.nl/forums/viewforum.php?f=51">supportforums</a>, lees de <a href="%3$s">lees mij</a> voor verdere informatie.</p><p><strong>Verwijder, verplaats of hernoem de installatiemap voordat je het forum kan gebruiken. Indien deze map nog steeds aanwezig is, zal alleen het beheerderspaneel bereikbaar zijn.</strong>',
	'INSTALL_INTRO'					=> 'Welkom bij de installatie',
	'INSTALL_INTRO_BODY'			=> 'Met deze optie kan je phpBB op je server installeren.</p><p>Om verder te kunnen gaan, heb je de database instellingen nodig. Indien je deze niet weet, contacteer dan je host en vraag ernaar. Zonder kan je echter niet verder gaan. Dit heb je nodig:</p>

	<ul>
		<li>Het databasetype - de database die je gebruikt;</li>
		<li>De hostnaam of DNS van de databaseserver - het adres van de databaseserver;</li>
		<li>De databaseserverpoort - de poort van de databaseserver (meestal heb je dit niet nodig);</li>
		<li>De databasenaam - de naam van de database op de server;</li>
		<li>De databasegebruikersnaam en het bijhorende wachtwoord - de logingegevens van de database.</li>
	</ul>

	<p><strong>Let op:</strong> als je installatie SQLite gaat gebruiken, moet je in het DNS-veld het volledige pad naar het databasebestand opgeven en zowel het gebruikersnaam- als wachtwoordveld leeg laten. Om veiligheidsredenen moet je ervoor zorgen dat het databasebestand op een niet via het internet bereikbare plaats staat.</p>

	<p>phpBB3 ondersteunt de volgende databases:</p>
	<ul>
		<li>MySQL 3.23 of hoger (MySQLi is ondersteund)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>MS SQL server 2000 of hoger (direct of via ODBC)</li>
		<li>Oracle</li>
	</ul>

	<p>Alleen de ondersteunde en beschikbare databases worden weergegeven.',
	'INSTALL_INTRO_NEXT'			=> 'Klik op de knop hieronder om de installatie te starten.',
	'INSTALL_LOGIN'					=> 'Login',
	'INSTALL_NEXT'					=> 'Volgende stap',
	'INSTALL_NEXT_FAIL'				=> 'Sommige tests zijn mislukt, je moet deze problemen eerst oplossen voor je verder gaat. Indien je dit niet doet zal dit leiden tot een onvolledige installatie.',
	'INSTALL_NEXT_PASS'				=> 'Alle basistests zijn voltooid, je mag naar de volgende stap doorgaan. Als je permissies, modules, enz. veranderd hebt, kun je indien gewenst de test nog eens doen.',
	'INSTALL_PANEL'					=> 'Installatie paneel',
	'INSTALL_SEND_CONFIG'			=> 'Helaas kan phpBB de configuratie niet direct in het config.php bestand opslaan. Dit kan doordat het bestand niet bestaat of niet beschrijfbaar is. Hieronder staan een aantal opties om de installatie van het config.php bestand te voltooien.',
	'INSTALL_START'					=> 'Start installatie',
	'INSTALL_TEST'					=> 'Test opnieuw',
	'INST_ERR'						=> 'Installatiefout',
	'INST_ERR_DB_CONNECT'			=> 'phpBB kan geen databaseverbinding maken, zie de foutmelding hieronder.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Het opgegeven databasebestand staat in een forummap. Je kunt dit beter in een niet via het internet bereikbare map zetten.',
	'INST_ERR_DB_NO_ERROR'			=> 'Geen foutmelding gegeven.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'De op deze server ge&iuml;nstalleerde MySQL-versie is niet compatibel met de &quot;MySQL met MySQLi extensie&quot; optie die je geselecteerd hebt. Probeer als alternatief de &quot;MySQL&quot; optie eens.',
	'INST_ERR_DB_NO_SQLITE'			=> 'De versie van de SQLlite extensie is te oud, deze moet minimaal tot versie 2.8.2 bijgewerkt zijn.',
	'INST_ERR_DB_NO_ORACLE'			=> 'De op deze server ge&iuml;nstalleerde Oracle versie vereist dat je de <var>NLS_CHARACTERSET</var> parameter op <var>UTF8</var> instelt. Ofwel moet je de versie naar 9.2+ upgraden of de parameter wijzigen.',
	'INST_ERR_DB_NO_FIREBIRD'		=> 'De versie van Firebird is lager dan 2.0, upgrade naar een nieuwere versie.',
	'INST_ERR_DB_NO_FIREBIRD_PS'	=> 'De geselecteerde Firebird database heeft een grootte kleiner dan 8192, dit moet minimum 8192 zijn.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'De geselecteerde database is niet volgens de <var>UNICODE</var> of <var>UTF8</var> encodering gemaakt. Probeer te installeren met een database met <var>UNICODE</var> of <var>UTF8</var> encodering.',
	'INST_ERR_DB_NO_NAME'			=> 'Geen databasenaam gespecificeerd.',
	'INST_ERR_EMAIL_INVALID'		=> 'Het opgegeven e-mailadres is ongeldig.',
	'INST_ERR_EMAIL_MISMATCH'		=> 'De opgegeven e-mailadressen komen niet overeen.',
	'INST_ERR_FATAL'				=> 'Fatale installatiefout',
	'INST_ERR_FATAL_DB'				=> 'Er is een fatale en onherstelbare databasefout opgetreden. Dit kan voorkomen doordat de opgegeven gebruiker niet over de permissies beschikt om <code>CREATE TABLES</code> of <code>INSERT</code> codes, enz. te gebruiken. Verdere informatie kan hieronder worden weergegeven. Contacteer in eerste instantie je hostingbedrijf of het phpBB-supportforum.',
	'INST_ERR_FTP_PATH'				=> 'Er kon niet naar het opgegeven pad gewijzigd worden, controleer dit alstublieft.',
	'INST_ERR_FTP_LOGIN'			=> 'Er kon niet op je FTP-account ingelogd worden, controleer gebruikersnaam en wachtwoord.',
	'INST_ERR_MISSING_DATA'			=> 'Je moet alle gegevens van dit deel invullen.',
	'INST_ERR_NO_DB'				=> 'De PHP-module voor de geselecteerde database kon niet geladen worden.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'De ingevoerde wachtwoorden komen niet overeen.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Het ingevoerde wachtwoord is te lang, maximaal 30 tekens.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Het ingevoerde wachtwoord is te kort. Minimaal 6 tekens.',
	'INST_ERR_PREFIX'				=> 'Er bestaan al tabellen met het opgegeven voorvoegsel. Kies een alternatief.',
	'INST_ERR_PREFIX_INVALID'		=> 'Het opgegeven tabel voorvoegsel is ongeldig voor je database. Probeer een ander door tekens zoals een streepje te verwijderen.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Het opgegeven tabelvoorvoegsel is te lang, het maximum is %d tekens.',
	'INST_ERR_USER_TOO_LONG'		=> 'De ingevoerde gebruikersnaam is te lang, maximaal 20 tekens.',
	'INST_ERR_USER_TOO_SHORT'		=> 'Het ingevoerde wachtwoord is te kort, minimaal 3 tekens.',
	'INVALID_PRIMARY_KEY'			=> 'Ongeldige primaire sleutel : %s',

	'LONG_SCRIPT_EXECUTION'			=> 'Let op, dit kan een tijdje duren... Stop het script niet!',

	// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp> extensiecontrole',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Vereist</strong> - <samp>mbstring</samp> is een PHP-extensie die multibyte stringfuncties mogelijk maakt. Sommige mbstring mogelijkheden zijn niet compatibel met phpBB en moeten uitgeschakeld worden.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Functie overbelasting',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> moet op 0 of 4 ingesteld zijn.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Doorschijnende teken-encodering',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> moet op 0 ingesteld zijn.',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP-teken invoerconversie',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> moet <samp>pass</samp> als waarde hebben.',
	'MBSTRING_HTTP_OUTPUT'					=> 'HTTP-teken uitvoerconversie',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> moet <samp>pass</samp> als waarde hebben.',

	'MAKE_FOLDER_WRITABLE'	=> 'Zorg ervoor dat deze map bestaat en door de webserver beschreven kan worden, probeer daarna opnieuw:<br />&raquo;<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'	=> 'Zorg ervoor dat deze mappen bestaan en door de webserver beschreven kunnen worden, probeer daarna opnieuw:<br />&raquo;<strong>%s</strong>.',

	'NAMING_CONFLICT'		=> 'Naam conflict: %s en %s zijn beide aliassen<br /><br />%s',
	'NEXT_STEP'				=> 'Ga door naar de volgende stap',
	'NOT_FOUND'				=> 'Onvindbaar',
	'NOT_UNDERSTAND'		=> 'Kon %s #%d niet verstaan, tabel %s (&quot;%s&quot;)',
	'NO_CONVERTORS'			=> 'Er zijn geen beschikbare en bruikbare converters aanwezig.',
	'NO_CONVERT_SPECIFIED'	=> 'Er is geen converter opgegeven.',
	'NO_LOCATION'			=> 'De locatie kan niet bepaald worden. Als je zeker bent dat Imagemagick ge&iuml;nstalleerd is, kan je de locatie later in het beheerderspaneel opgeven',
	'NO_TABLES_FOUND'		=> 'Geen tabellen gevonden.',
// TODO: Write some explanatory introduction text
	'OVERVIEW_BODY'	=> 'Welkom in de publieke kandidaatopvolger van phpBB 2.0.x, phpBB 3.0! Deze versie is voor een uitgebreid publiek bedoelt, zodat we de laatste bugs en problemen kunnen opsporen.</p><p>Lees alstublieft <a href="../docs/INSTALL.html">de installatiehandleiding</a> voor meer informatie omtrent het installeren van phpBB3.</p><p><strong style="text-transform: uppercase;">Let op:</strong> Deze versie is <strong style="text-transform: uppercase;">niet af</strong> en werd <strong style="text-transform: uppercase;">alleen</strong> vrijgegeven voor testdoeleinden.</p><p>De installatieprocedure leid je door de phpBB-installatie, je kan een ander forum converteren of updaten naar de laatste phpBB-versie. Voor verdere informatie omtrent alle mogelijkheden, kies de juiste menuoptie bovenaan.',

	'PCRE_UTF_SUPPORT'					=> 'Ondersteuning PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB zal <strong>niet</strong> werken als je PHP-installatie zonder UTF-8 ondersteuning, in de PCRE extensie, gecompileerd is.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP functie getimagesize() is beschikbaar',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Vereist</strong> - Om phpBB correct te laten functioneren, moet de getimagesize functie beschikbaar zijn.',
	'PHP_OPTIONAL_MODULE'				=> 'Optionele modules',
	'PHP_OPTIONAL_MODULE_EXPLAIN'		=> '<strong>Optioneel</strong> - Deze modules of applicaties zijn optioneel, indien ze beschikbaar zijn kan je extra mogelijkheden gebruiken.',
	'PHP_SUPPORTED_DB'					=> 'Ondersteunde databases',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> '<strong>Vereist</strong> - Je moet minstens 1 door PHP ondersteunde database hebben. Indien er geen enkele compatibele databasemodule als beschikbaar weergegeven is, moet je jouw host contacteren of de bijhorende PHP-documentatie raadplegen.',
	'PHP_REGISTER_GLOBALS'				=> 'PHP instelling <var>register_globals</var> is uitgeschakeld',
	'PHP_REGISTER_GLOBALS_EXPLAIN'		=> 'phpBB zal gewoon werken wanneer deze optie aan staat, maar om veiligheidsredenen raden we je aan - indien mogelijk - register_globals uit te schakelen.',
	'PHP_SAFE_MODE'						=> 'Veilige modus',
	'PHP_SETTINGS'						=> 'PHP-versie en -instellingen',
	'PHP_SETTINGS_EXPLAIN'				=> '<strong>Vereist</strong> - Je moet minstens PHP-versie 4.3.3 hebben om phpBB te kunnen installeren. Als <var>veilige modus</var> hieronder weergegeven wordt, werkt de PHP-installatie in die modus. Dit veroorzaakt enkele beperkingen bij afstandsbeheer en gelijkaardige mogelijkheden.',
	'PHP_URL_FOPEN_SUPPORT'				=> 'PHP-optie <var>allow_url_fopen</var> is ingeschakeld',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'		=> '<strong>Optioneel</strong> - Deze optie is optioneel, maar bepaalde phpBB-functies zoals avatars op andere websites zullen zonder dit niet correct werken.',
	'PHP_VERSION_REQD'					=> 'PHP versie >= 4.3.3',
	'POST_ID'							=> 'Bericht ID',
	'PREFIX_FOUND'						=> 'Een tabellenscan heeft aangewezen dat er een geldige installatie is met <strong>%s</strong> als tabelvoorvoegsel.',
	'PREPROCESS_STEP'					=> 'Bezig met uitvoeren van voorverwerkingsfuncties/queries',
	'PRE_CONVERT_COMPLETE'				=> 'Alle conversie voorbereidingen zijn succesvol uitgevoerd, je kan de echte conversie nu starten. Hou er rekening mee dat je mogelijks nog wat dingen manueel zal moeten doen en aanpassen. Na de conversie moet je zeker even de toegewezen permissies controleren, de zoekindex herconstrueren omdat deze niet geconverteerd werd en controleer of alle bestanden, zoals avatars en smilies, correct gekopieerd zijn.',
	'PROCESS_LAST'						=> 'Bezig met verwerken laatste punten',

	'REFRESH_PAGE'			=> 'Vernieuw de pagina om met de conversie door te gaan',
	'REFRESH_PAGE_EXPLAIN'	=> 'Indien op &quot;ja&quot; ingesteld, zal de converter de pagina op regelmatige basis vernieuwen om de conversie verder te zetten na het afwerken van een stap. Indien dit je eerste conversie is, met het testen en op voorhand vinden van fouten als doel, raden we aan om dit op &quot;nee&quot; in te stellen.',
//	'REQUIRED'	=> 'Required',
	'REQUIREMENTS_TITLE'	=> 'Vereisten',
	'REQUIREMENTS_EXPLAIN'	=> 'Voordat je doorgaat met de volledige installatie, zal phpBB enkele server- en bestandstests uitvoeren om zo te bepalen of phpBB wel ge&iuml;nstalleerd kan worden en nadien correct zal functioneren. Zorg dat je de resultaten nauwkeurig doorneemt en niet doorgaat totdat alle tests geslaagd zijn. Als je optionele functies, die van een optionele tests afhankelijk zijn, wilt gebruiken, moet je zorgen dat ook deze tests succesvol uitgevoerd worden.',
	'RETRY_WRITE'			=> 'Probeer de configuratie opnieuw te schrijven',
	'RETRY_WRITE_EXPLAIN'	=> 'Indien gewenst kan je de permissies van config.php wijzigen zodat phpBB ernaar kan schrijven. Indien je dit zou willen, kan je op de opnieuw knop hieronder klikken om terug te proberen. Vergeet niet de config.php permissiewijzigingen terug ongedaan te maken nadat de phpBB-installatie afgewerkt is.',

	'SCRIPT_PATH'						=> 'Scriptpad',
	'SCRIPT_PATH_EXPLAIN'				=> 'Het pad waar phpBB staat, relatief met de domeinnaam, bijvoorbeeld <samp>/phpBB3</samp>.',
	'SELECT_LANG'						=> 'Selecteer taal',
	'SERVER_CONFIG'						=> 'Serverconfiguratie',
	'SEARCH_INDEX_UNCONVERTED'			=> 'Zoekindex is niet geconverteerd',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Je oude zoekindex is niet geconverteerd. Zoekopdrachten zullen altijd tot geen resultaten leiden. Om een nieuwe zoekindex te cre&euml;ren ga je naar het beheerderspaneel, kies onderhoud en klik daarna op zoekindex in het submenu.',
	'SOFTWARE'							=> 'Forumsoftware',
	'SPECIFY_OPTIONS'					=> 'Specificeer conversieopties',
	'STAGE_ADMINISTRATOR'				=> 'Beheerder details',
	'STAGE_ADVANCED'					=> 'Geavanceerde instellingen',
	'STAGE_ADVANCED_EXPLAIN'			=> 'De instellingen op deze pagina zijn enkel nodig als je forum niet voldoet met de standaard instellingen. Ga door naar de volgende pagina indien je hier niet zeker van bent, je hebt later de mogelijkheid om deze instellingen te wijzigen via het beheerderspaneel.',
	'STAGE_CONFIG_FILE'					=> 'Configuratiebestand',
	'STAGE_CREATE_TABLE'				=> 'Databasetabellen aanmaken',
	'STAGE_CREATE_TABLE_EXPLAIN'		=> 'De door phpBB 3.0 gebruikte database tabellen zijn aangemaakt. Ga door naar het volgende scherm om de phpBB installatie af te ronden.',
	'STAGE_DATABASE'					=> 'Database instellingen',
	'STAGE_FINAL'						=> 'Einde',
	'STAGE_INTRO'						=> 'Introductie',
	'STAGE_IN_PROGRESS'					=> 'Bezig met converteren',
	'STAGE_REQUIREMENTS'				=> 'Vereisten',
	'STAGE_SETTINGS'					=> 'Instellingen',
	'STARTING_CONVERT'					=> 'Bezig met starten conversieproces',
	'STEP_PERCENT_COMPLETED'			=> 'Stap <strong>%d</strong> van de <strong>%d</strong>',
	'SUB_INTRO'							=> 'Introductie',
	'SUB_LICENSE'						=> 'Licentie',
	'SUB_SUPPORT'						=> 'Ondersteuning',
	'SUCCESSFUL_CONNECT'				=> 'Succesvol verbonden',
// TODO: Write some text on obtaining support
	'SUPPORT_BODY'						=> 'Gedurende het \'kandidaat opvolger\' stadium wordt er een volledige ondersteuning gegeven via <a href="http://www.phpbb.nl/forums/viewforum.php?f=51">de phpBB 3.0 supportforums</a>. We zullen antwoorden op algemene installatievragen, configuratieproblemen, conversieproblemen en hulp bieden voor het opsporen van problemen die mogelijks aan bugs te wijten zijn. We discussi&euml;ren over modificaties en eigen code/stijl toevoegingen.</p><p>Voor standaard ondersteuning, raadpleeg de <a href="http://www.phpbb.nl/documentatie/3.0/quickstart/">snelstarthandleiding</a> en de <a href="http://www.phpbb.nl/documentatie/3.0/">online documentatie</a>.</p><p>Om er zeker van te zijn dat je op de hoogte blijft van het laatste nieuws en versies, kan je jezelf inschrijven op de <a href="http://www.phpbb.com/support/">nieuwsbrief van phpBB.com</a>.',
	'SYNC_FORUMS'						=> 'Starten van synchronisatieforums',
	'SYNC_POST_COUNT'					=> 'Synchroniseer post_counts',
	'SYNC_POST_COUNT_ID'				=> 'Synchroniseer post_counts van <var>entry</var> %1$s naar %2$s.',
	'SYNC_TOPICS'						=> 'Starten van onderwerpen synchronisatie',
	'SYNC_TOPIC_ID'						=> 'Synchroniseren van onderwerpen met <var>topic_id</var> %1$s tot %2$s.',

	'TABLES_MISSING'	=> 'Deze tabellen konden niet gevonden worden<br />&raquo; <strong>%s</strong>.',
	'TABLE_PREFIX'		=> 'Voorvoegsel voor de tabellen',
	'TABLE_PREFIX_SAME'	=> 'Het tabelvoorvoegsel moet hetzelfde zijn als het voorvoegsel van de software waarvan je converteert.<br />&raquo; Het opgegeven voorvoegsel was %s.',
	'TESTS_PASSED'		=> 'Tests gelukt',
	'TESTS_FAILED'		=> 'Tests mislukt',

	'UNABLE_WRITE_LOCK'			=> 'Onmogelijk om gesloten bestand te schrijven.',
	'UNAVAILABLE'				=> 'Onbeschikbaar',
	'UNWRITABLE'				=> 'Onbeschrijfbaar',
	'UPDATE_TOPICS_POSTED'		=> 'Bezig met genereren van de geplaatste onderwerpen informatie',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Er ontstond een fout tijdens het maken van de informatie omtrent de geplaatste berichten. Je kan deze stap later, na het afronden van dit conversieproces, opnieuw proberen in het beheerderspaneel.',

	'VERIFY_OPTIONS'	=> 'Bezig met verifi&euml;ren conversie instellingen',
	'VERSION'			=> 'Versie',

	'WELCOME_INSTALL'	=> 'Welkom bij de phpBB 3 installatie',
	'WRITABLE'			=> 'Beschrijfbaar',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'	=> 'Alle bestanden zijn bijgewerkt naar de laatste phpBB-versie. Je kan nu <a href="../ucp.php?mode=login">inloggen op je forum</a> en controleren of alles goed werkt. Vergeet niet om de install-map te verwijderen, verplaatsen of te hernoemen!',
	'ARCHIVE_FILE'			=> 'Bronbestand in archief',

	'BACK'			=> 'Terug',
	'BINARY_FILE'	=> 'Binair bestand',
	'BOT'			=> 'Spider/Robot',

	'CHANGE_CLEAN_NAMES'			=> 'De methode die ervoor zorgt dat er geen dubbele gebruikersnamen ontstaan is veranderd. Er zijn enkele gebruikers die dezelfde naam zullen hebben als ze worden vergeleken met de nieuwe methode. Je moet deze gebruikers verwijderen of hernoemen om er zeker van te zijn dat elke naam wordt gebruikt door &eacute;&eacute;n gebruiker alvoor je verder kan gaan.',
	'CHECK_FILES'					=> 'Controleer bestanden',
	'CHECK_FILES_AGAIN'				=> 'Controleer bestand opnieuw',
	'CHECK_FILES_EXPLAIN'			=> 'In de volgende stap worden alle bestanden vergeleken met de bijgewerkte bestanden, dit is de eerste bestandscontrole waardoor dit even kan duren.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Volgens je database is je versie bijgewerkt. Je kan eventueel doorgaan en de bestanden controleren om zeker te zijn dat alle bestanden echt naar de laatste phpBB-versie zijn bijgewerkt.',
	'CHECK_UPDATE_DATABASE'			=> 'Ga verder met het bijwerken',
	'COLLECTED_INFORMATION'			=> 'Bestandsinformatie',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'De onderstaande lijst laat informatie zien omtrent de bestanden die bijgewerkt moeten worden. Lees a.u.b. de informatie voor ieder statusblok om te zien wat ze betekenen en wat je moet doen om ze succesvol bij te werken.',
	'COLLECTING_FILE_DIFFS'			=> 'Bezig met verzamelen bestansverschillen',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Je kan nu <a href="../ucp.php?mode=login">inloggen op je forum</a> om te controleren of alles goed werkt. Vergeet niet de install-map te verwijderen, verplaatsen of te hernoemen!',
	'CONTINUE_UPDATE_NOW'			=> 'Ga nu verder met het updateproces',
	'CURRENT_FILE'					=> 'Huidige originele bestand',
	'CURRENT_VERSION'				=> 'Huidige versie',

	'DATABASE_TYPE'						=> 'Databasetype',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Het database-updatebestand in de install-map is te oud, zorg dat je de correcte bestandsversie ge&uuml;pload hebt.',
	'DELETE_USER_REMOVE'				=> 'Verwijder gebruiker en verwijder berichten',
	'DELETE_USER_RETAIN'				=> 'Verwijder gebruiker maar behoud de berichten',
	'DESTINATION'						=> 'Doelbestand',
	'DIFF_INLINE'						=> 'Gelijk met',
	'DIFF_RAW'							=> 'Schone verenigde diff',
	'DIFF_SEP_EXPLAIN'					=> 'Einde van het huidige bestand / Begin met nieuwe bijgewerkte bestand',
	'DIFF_SIDE_BY_SIDE'					=> 'Samen',
	'DIFF_UNIFIED'						=> 'Verenigde diff',
	'DO_NOT_UPDATE'						=> 'Werk dit bestand niet bij',
	'DONE'								=> 'Klaar',
	'DOWNLOAD'							=> 'Download',
	'DOWNLOAD_AS'						=> 'Download als',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Download aangepast archiefbestand',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Eens gedownload zou je het archief moeten uitpakken. Je vindt hierin de bestanden die je zou moeten uploaden naar de phpBB-rootmap. Gelieve ze dan ook te uploaden naar hun respectievelijke mappen. Controleer de bestanden opnieuw, met de andere onderstaande knop, nadat het uploaden voltooid is.',

	'ERROR'	=> 'Foutmelding',
	'EDIT_USERNAME'	=> 'Wijzig gebruikersnaam',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Bestand is al bijgewerkt.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Bestand niet toegestaan voor diff.',
	'FILE_USED'						=> 'Informatie gebruikt van',         // Single file
	'FILES_CONFLICT'				=> 'Probleem bestanden',
	'FILES_CONFLICT_EXPLAIN'		=> 'De volgende bestanden zijn aangepast en vertegenwoordigen niet de originele bestanden van de oude versie. phpBB ziet dat deze bestanden problemen veroorzaken als er geprobeerd wordt om ze samen te voegen. Onderzoek de problemen en probeer ze handmatig te verhelpen of ga verder met het bijwerken door de voorkeurs samenvoegmethode te kiezen. Als je de problemen handmatig oplost, controleer de bestanden dan nog een keer nadat je ze aangepast hebt. Je kunt een keuze maken tussen de voorkeurs samenvoegmethode van elk bestand. De eerste zal resulteren in een bestand waar de lijnen, van het oude bestand, die problemen geven worden verwijderd, de andere methode zal resulteren in de verwijdering van de veranderingen in het nieuwe bestand.',
	'FILES_MODIFIED'				=> 'Aangepaste bestanden',
	'FILES_MODIFIED_EXPLAIN'		=> 'De volgende bestanden zijn aangepast en vertegenwoordigen niet de originele bestanden van de oude versie. Het bijgewerkte bestand zal worden samengevoegd tussen jouw modificaties en het nieuwe bestand.',
	'FILES_NEW'						=> 'Nieuwe bestanden',
	'FILES_NEW_EXPLAIN'				=> 'De volgende bestanden bestaan op dit moment niet in jouw installatie. Deze zullen aan je installatie toegevoegd worden.',
	'FILES_NEW_CONFLICT'			=> 'Nieuwe probleem bestanden',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'De volgende bestanden zijn nieuw in de laatste versie, maar er is geconstateerd dat er op dezelfde locatie reeds een bestand is met dezelfde naam. Dit bestand zal worden overschreven door het nieuwe bestand.',
	'FILES_NOT_MODIFIED'			=> 'Niet aangepaste bestanden',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'De volgende bestanden zijn niet aangepast en vertegenwoordigen de originele phpBB-bestanden van de versie die je hebt bijgewerkt.',
	'FILES_UP_TO_DATE'				=> 'Bestanden zijn reeds bijgewerkt',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'De volgende bestanden zijn reeds bijgewerkt en hoeven niet bijgewerkt te worden.',
	'FTP_SETTINGS'					=> 'FTP-instellingen',
	'FTP_UPDATE_METHOD'				=> 'FTP-upload',

	'INCOMPATIBLE_UPDATE_FILES'	=> 'De updatebestanden zijn incompatibel met de ge&iuml;nstalleerde versie. De ge&iuml;nstalleerde versie is %1$s en de bijgewerkte bestand is om phpBB %2$s naar %3$s bij te werken.',
	'INCOMPLETE_UPDATE_FILES'	=> 'De bijgewerkte bestanden zijn incompleet.',
	'INLINE_UPDATE_SUCCESSFUL'	=> 'De database-update is succesvol afgerond. Nu moet je het updateproces verder zetten.',

	'KEEP_OLD_NAME'		=> 'Behoud gebruikersnaam',

	'LATEST_VERSION'		=> 'Laatste versie',
	'LINE'					=> 'Lijn',
	'LINE_ADDED'			=> 'Toegevoegd',
	'LINE_MODIFIED'			=> 'Aangepast',
	'LINE_REMOVED'			=> 'Verwijderd',
	'LINE_UNMODIFIED'		=> 'Onaangepast',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Om je installatie verder bij te werken moet je eerst inloggen.',

	'MAPPING_FILE_STRUCTURE'	=> 'Om het uploaden te vergemakkelijken, staan hier de bestandslocaties van je phpBB-installatie.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Voeg modificaties samen',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Voeg niet samen - gebruik nieuw bestand',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Voeg niet samen - gebruik huidig ge&iuml;nstalleerd bestand',
	'MERGE_MOD_FILE_OPTION'		=> 'Voeg verschillen samen en gebruik aangepaste code in het probleemgevende deel',
	'MERGE_NEW_FILE_OPTION'		=> 'Voeg verschillen samen en gebruik nieuw bestand voor het probleemgevende deel',
	'MERGE_SELECT_ERROR'		=> 'Methodes voor samenvoegen probleemgevende bestanden niet correct geselecteerd.',
	'MERGING_FILES'				=> 'Bezig met samenvoegen verschillen',
	'MERGING_FILES_EXPLAIN'		=> 'Momenteel worden de laatste wijzigingen verzameld.<br /><br />Wacht alstublieft tot phpBB alle handelingen op de gewijzigde bestanden heeft uitgevoerd.',

	'NEW_FILE'						=> 'Nieuw bijgewerkt bestand',
	'NEW_USERNAME'					=> 'Nieuwe gebruikersnaam',
	'NO_AUTH_UPDATE'				=> 'Geen updatetoestemming',
	'NO_ERRORS'						=> 'Geen fouten',
	'NO_UPDATE_FILES'				=> 'De volgende bestanden worden niet bijgewerkt',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'De volgende bestanden zijn nieuw of aangepast maar de map waar ze zich normaal in bevinden kan niet gevonden worden. Als de lijst bestanden bevat van andere mappen dan language/ of styles/ dan heb je mogelijk je mapstructuur aangepast en is de update mogelijks incompleet.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Er werd geen correcte updatemap gevonden, zorg dat je de relevante bestanden zeker ge&uuml;pload hebt.<br /><br />Je installatie lijkt <strong>niet</strong> bijgewerkt. Er zijn updates beschikbaar voor je phpBB %1$s versie, bezoek <a href="http://www.phpbb.nl/downloads/" rel="external">http://www.phpbb.nl/downloads/</a> om de juiste update van versie %2$s naar versie %3$s te verkrijgen.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Je versie is bijgewerkt. Er is geen reden om de update uit te voeren. Als je zeker wilt zijn dat je de bijgewerkte bestanden hebt, upload dan de laatste bestanden.',
	'NO_UPDATE_INFO'				=> 'Update bestandsinformatie kan niet gevonden worden.',
	'NO_UPDATES_REQUIRED'			=> 'Geen updates nodig',
	'NO_VISIBLE_CHANGES'			=> 'Geen zichtbare veranderingen',
	'NOTICE'						=> 'Opmerking',
	'NUM_CONFLICTS'					=> 'Aantal problemen',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Momenteel zijn er verschillen gedetecteerd bij %1$d van de %2$d verzamelde bestanden.<br />Wacht alstublieft tot het verzamelen van de bestanden voltooid is.',

	'OLD_UPDATE_FILES'	=> 'Updatebestanden zijn te oud. De gevonden updatebestanden zijn voor het bijwerken van phpBB %1$s naar phpBB %2$s maar de laatste phpBB versie is %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Huidige pakket bijgewerkt naar versie',
	'PERFORM_DATABASE_UPDATE'			=> 'Voer database-update uit',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Hieronder vind je een link naar het database-updatescript. Het bijwerken van de database kan een tijdje duren, dus stop het bijwerken niet als het lijkt vast te lopen. Nadat de database bijgewerkt is, volg je gewoon de aangeboden link om het updateproces verder te zetten.',
	'PREVIOUS_VERSION'					=> 'Vorige versie',
	'PROGRESS'							=> 'Voortgang',

	'RESULT'				=> 'Resultaat',
	'RUN_DATABASE_SCRIPT'	=> 'Werk mijn database bij',

	'SELECT_DIFF_MODE'			=> 'Selecteer diff-methode',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Selecteer download-archiefformaat',
	'SELECT_FTP_SETTINGS'		=> 'Selecteer FTP-instellingen',
	'SHOW_DIFF_CONFLICT'		=> 'Laat verschillen/problemen zien',
	'SHOW_DIFF_FINAL'			=> 'Laat resulterend bestand zien',
	'SHOW_DIFF_MODIFIED'		=> 'Laat samengevoegde verschillen zien',
	'SHOW_DIFF_NEW'				=> 'Laat bestandsinhoud zien',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Laat verschillen zien',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Laat verschillen zien',
	'SOME_QUERIES_FAILED'		=> 'Sommige queries zijn mislukt, de opmerkingen en fouten worden hieronder gegeven.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Dit is waarschijnlijk niets ergs, het bijwerken zal gewoon doorgaan. Indien je niet verder kunt, bezoek dan de supportforums. Lees het <a href="../docs/README.html">LEES MIJ</a> bestand voor details omtrent het verkrijgen van hulp.',
	'STAGE_FILE_CHECK'			=> 'Controleer bestanden',
	'STAGE_UPDATE_DB'			=> 'Update database',
	'STAGE_UPDATE_FILES'		=> 'Update bestanden',
	'STAGE_VERSION_CHECK'		=> 'Versiecontrole',
	'STATUS_CONFLICT'			=> 'Aangepast bestand zorgt voor problemen',
	'STATUS_MODIFIED'			=> 'Aangepast bestand',
	'STATUS_NEW'				=> 'Nieuw bestand',
	'STATUS_NEW_CONFLICT'		=> 'Probleemgevend nieuw bestand',
	'STATUS_NOT_MODIFIED'		=> 'Niet aangepast bestand',
	'STATUS_UP_TO_DATE'			=> 'Reeds bijgewerkt bestand',

	'TOGGLE_DISPLAY'	=> 'Toon/verberg bestandslijst',

	'UPDATE_COMPLETED'				=> 'Update klaar',
	'UPDATE_DATABASE'				=> 'Update database',
	'UPDATE_DATABASE_EXPLAIN'		=> 'In de volgende stap wordt de database bijgewerkt.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Werkt database schema bij',
	'UPDATE_FILES'					=> 'Update bestanden',
	'UPDATE_FILES_NOTICE'			=> 'Zorg dat je de forumbestanden zeker ook hebt bijgewerkt, dit bestand werkt enkel je database bij.',
	'UPDATE_INSTALLATION'			=> 'Update phpBB-installatie',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Met deze optie is het mogelijk om je phpBB-installatie bij te werken naar de laatste versie.<br />Tijdens het proces zullen de bestanden gecontroleerd worden, je krijgt dan alle verschillen en bestanden te zien voordat je ze bijwerkt.<br /><br />De bestanden kunnen op 2 manieren bijgewerkt worden.</p><h2>Handmatig bijwerken</h2><p>Met deze mogelijkheid download je enkel de gewijzigde bestanden, zo verlies je geen modificaties. Nadat je de zip gedownload hebt, moet je deze uitpakken en de bestanden handmatig naar de juiste mappen uploaden. Als je dat gedaan hebt, kun je de bestandscontrole opnieuw uitvoeren om te zien of alle bestanden op de juiste locatie geplaatst zijn.</p><h2>Automatisch bijwerken met FTP</h2><p>Deze methode is bijna gelijk aan de eerste, maar nu hoef je de gewijzigde bestanden niet zelf te downloaden en te uploaden, dit gebeurt automatisch. Indien je voor deze methode kiest, moet je jouw FTP-gegevens weten. Zodra je klaar bent zal je opnieuw naar de bestandscontrole doorgestuurd worden om te controleren of alles klopt.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Nieuwe versie</h1>

		<p>Lees <a href="%1$s" title="%1$s"><strong>de mededeling omtrent de laatste versie</strong></a> goed voor dat je verder gaat met het bijwerken, want deze bevat waarschijnlijk nuttige informatie. Deze bevat ook de downloads en een overzicht van alle wijzigingen in de nieuwe versie.</p>

		<br />

		<h1>Hoe werk ik mijn phpBB-forum bij?</h1>

		<p>De gemakkelijke manier van het bijwerken van je installatie bevat onderstaande stappen en gelden enkel voor het automatisch updatepakket. Je kunt ook kiezen voor de manieren die in het INSTALL.html document staat. De stappen om phpBB3 automatisch bij te werken zijn:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Ga naar de <a href="http://www.phpbb.nl/downloads/" title="http://www.phpbb.nl/downloads/">phpBB.nl downloads pagina</a> en download het &quot;Automatische updaten&quot; zip-archief;<br /><br /></li>
			<li>Pak het zip-archief uit;<br /><br /></li>
			<li>Upload de uitgepakte install-map volledig naar je phpBB-root (waar je config.php ook staat).<br /><br /></li>
		</ul>

		<p>Eenmaal ge&uuml;pload, zal je forum, door het uploaden van de install-map, voor gewone gebruikers uitgeschakeld zijn.<br /><br />
		<strong><a href="%2$s" title="%2$s">Ga nu naar de install-map en begin met het bijwerken van je forum</a>.</strong><br />
		<br />
		Daar zal je geholpen worden met het bijwerken. Je wordt ook op de hoogte gebracht zodra alles bijgewerkt is.
		</p>
   	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>Incomplete update ontdekt</h1>

		<p>phpBB constateerde een incomplete automatische update. Wees er zeker van dat je elke stap van het automatische updatemiddel hebt uitgevoerd. Hieronder vind je de link opnieuw, of ga direct naar je installatiemap.</p>
	',
	'UPDATE_METHOD'					=> 'Updatemethode',
	'UPDATE_METHOD_EXPLAIN'			=> 'Kies nu via welke methode je wilt updaten. Als je FTP-update kiest, krijg je een formulier waar je de nodige FTP-gegevens moet opgeven. Bij deze methode worden bestanden automatisch op de juiste locatie geplaatst en back-up\'s (eindigend op .bak), met de oude bestanden, worden aangemaakt. Als je ervoor kiest om de gewijzigde bestanden te downloaden, kan je ze later uitpakken en uploaden op de juiste locatie.',
	'UPDATE_REQUIRES_FILE'			=> 'De updater eist dat de volgende bestanden aanwezig zijn: %s',
	'UPDATE_SUCCESS'				=> 'De update is gelukt',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Alle bestanden zijn succesvol bijgewerkt. De volgende stap is het controleren van alle bestanden om te zien of ze wel correct bijgewerkt zijn.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Bezig met het updaten van de versie en het optimaliseren van de tabellen',
	'UPDATING_DATA'					=> 'Bezig met updaten gegevens',
	'UPDATING_TO_LATEST_STABLE'		=> 'Bezig met het updaten van de database naar de laatste stabiele versie',
	'UPDATED_VERSION'				=> 'Bijgewerkte versie',
	'UPLOAD_METHOD'					=> 'Upload methode',

	'UPDATE_DB_SUCCESS'	=> 'Database succesvol bijgewerkt.',
	'USER_ACTIVE'					=> 'Actieve gebruiker',
	'USER_INACTIVE'					=> 'Inactieve gebruiker',

	'VERSION_CHECK'					=> 'Versie controleren',
	'VERSION_CHECK_EXPLAIN'			=> 'Controleert of de phpBB-versie die jij gebruikt up-to-date is.',
	'VERSION_NOT_UP_TO_DATE'		=> 'Je phpBB-versie is niet up-to-date. Vervolledig het updateproces alstublieft.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Je phpBB-versie is niet up-to-date.<br />Hieronder vind je een link naar de mededeling van de versie van de laatste versie, met de instructies over hoe je moet updaten.',
	'VERSION_UP_TO_DATE'			=> 'Je phpBB-versie is up-to-date, er zijn geen beschikbare updates. Je mag doorgaan om te controleren of de bestanden geldig zijn.',
	'VERSION_UP_TO_DATE_ACP'		=> 'Je phpBB-installatie is up-to-date, er zijn geen beschikbare updates. Je hoeft je installatie niet bij te werken.',
	'VIEWING_FILE_CONTENTS'			=> 'Bestandsinhoud bekijken',
	'VIEWING_FILE_DIFF'				=> 'Bestandsverschillen bekijken',

	'WRONG_INFO_FILE_FORMAT'	=> 'Foutief formaat bestandsinformatie',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Met vriendelijke groeten, De beheerder(s)',
	'CONFIG_SITE_DESC'				=> 'Een korte tekst om je forum te beschrijven',
	'CONFIG_SITENAME'				=> 'mijndomein.nl',

	'DEFAULT_INSTALL_POST'          => 'Dit is een voorbeeldbericht in je phpBB3 installatie. Alles lijkt correct te functioneren. Je mag dit bericht, indien gewenst, verwijderen en verder gaan met het instelllen van je forum. Tijdens de installatie werden een aantal permissies voor de voorgedefinieerde gebruikersgroepen (beheerders, bots, globale moderators, gasten, geregistreerde gebruikers en geregistreerde COPPA gebruikers) aan je eerste categorie en forum toegewezen. Het is aan te raden je eerste categorie en forum te hernoemen en nadien de permissies over te nemen als je een nieuwe categorie of forum aanmaakt.  Als je er toch voor kiest om je eerste categorie en forum te verwijderen, vergeet dan niet permissies toe te wijzen aan deze gebruikersgroepen telkens je een nieuwe categorie of forum aanmaakt. Veel plezier!',

	'EXT_GROUP_ARCHIVES'			=> 'Archieven',
	'EXT_GROUP_DOCUMENTS'			=> 'Documenten',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Downloadbare bestanden',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash bestanden',
	'EXT_GROUP_IMAGES'				=> 'Afbeeldingen',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Onopgemaakte tekst',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows media',

	'FORUMS_FIRST_CATEGORY'			=> 'Je eerste categorie',
	'FORUMS_TEST_FORUM_DESC'		=> 'Omschrijving van je eerste forum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Je eerste forum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Beheerder',
	'REPORT_WAREZ'					=> 'Dit bericht bevat links naar illegale/onrechtmatig verkregen software.',
	'REPORT_SPAM'					=> 'Dit bericht heeft als enige doel reclame te maken voor een website of product.',
	'REPORT_OFF_TOPIC'				=> 'Dit bericht doet niet ter zake in het onderwerp.',
	'REPORT_OTHER'					=> 'Dit bericht past niet binnen een categorie, gebruik het tekstveld voor verdere informatie.',

	'SMILIES_ARROW'					=> 'Pijl',
	'SMILIES_CONFUSED'				=> 'Verstrooid',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Huilend of zeer droevig',
	'SMILIES_EMARRASSED'			=> 'Beschaamd',
	'SMILIES_EVIL'					=> 'Slecht of heel kwaad',
	'SMILIES_EXCLAMATION'			=> 'Uitroepingsteken',
	'SMILIES_GEEK'					=> 'Sul',
	'SMILIES_IDEA'					=> 'Idee',
	'SMILIES_LAUGHING'				=> 'Lachend',
	'SMILIES_MAD'					=> 'Kwaad',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutraal',
	'SMILIES_QUESTION'				=> 'Vraag',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Rollende ogen',
	'SMILIES_SAD'					=> 'Droevig',
	'SMILIES_SHOCKED'				=> 'Gechoqueerd',
	'SMILIES_SMILE'					=> 'Lach',
	'SMILIES_SURPRISED'				=> 'Verbaasd',
	'SMILIES_TWISTED_EVIL'			=> 'Geniepig slecht',
	'SMILIES_UBER_GEEK'				=> '&Uuml;ber nerd',
	'SMILIES_VERY_HAPPY'			=> 'Zeer gelukkig',
	'SMILIES_WINK'					=> 'Knipoog',

	'TOPICS_TOPIC_TITLE'			=> 'Welkom bij phpBB3',
));
?>