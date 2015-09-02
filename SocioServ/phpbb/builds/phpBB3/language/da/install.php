<?php
/**
*
* install [Danish]
*
* @package language
* @version $Id: install.php,v 1.119 2007/07/24 15:17:47 acydburn Exp $
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
	'ADMIN_CONFIG'				=> 'Konfiguration af administrator',
	'ADMIN_PASSWORD'			=> 'Kodeord for administrator',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Bekræft kodeord for administrator',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Indtast venligst et kodeord på mellem 6 og 30 tegn.',
	'ADMIN_TEST'				=> 'Kontrollerer indstillinger for administrator',
	'ADMIN_USERNAME'			=> 'Brugernavn for administrator',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Indtast venligst et brugernavn på mellem 3 og 20 tegn.',
	'APP_MAGICK'				=> 'Imagemagick understøttelse [ Vedhæftede filer ]',
	'AUTHOR_NOTES'				=> 'Forfatternoter<br />» %s',
	'AVAILABLE'					=> 'Tilgængelig',
	'AVAILABLE_CONVERTORS'		=> 'Tilgængelige konvertere',

	'BEGIN_CONVERT'				=> 'Begynd konvertering',
	'BLANK_PREFIX_FOUND'		=> 'En skanning af dine tabeller udviser en gyldig installation uden anvendelse af tabelpræfiks.',
	'BOARD_NOT_INSTALLED'		=> 'Ingen installation fundet',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'For at fungere kræver phpBB\'s Unified Converter Framework en standard installation af phpBB3, fortsæt derfor med at <a href="%s">udføre en installation</a>.',

	'CATEGORY'					=> 'Kategori',
	'CACHE_STORE'				=> 'Cachetype',
	'CACHE_STORE_EXPLAIN'		=> 'Den fysiske placering, hvor data mellemlagres, filsystem er at foretrække.',
	'CAT_CONVERT'				=> 'Konvertér',
	'CAT_INSTALL'				=> 'Installér',
	'CAT_OVERVIEW'				=> 'Oversigt',
	'CAT_UPDATE'				=> 'Opdatér',
	'CHANGE'					=> 'Vælg',
	'CHECK_TABLE_PREFIX'		=> 'Kontrollér venligst dit tabelpræfiks og prøv igen.',
	'CLEAN_VERIFY'				=> 'Rydder op og verificerer den endelige struktur',
	'CLEANING_USERNAMES'		=> 'Oprydning i brugernavne',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> er det unikke brugernavn for:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Overlappende brugernavne blev fundet på dit gamle board. For at færdiggøre konverteringen skal disse brugere enten slettes eller omdøbes, der må kun eksistere én bruger for hvert unikt brugernavn på dit gamle board.',
	'COLLIDING_USER'			=> '» Bruger-ID: <strong>%d</strong> brugernavn: <strong>%s</strong> (%d indlæg)',
	'CONFIG_CONVERT'			=> 'Konverterer konfigurationen',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Det var ikke muligt at skrive til konfigurationsfilen. Alternative metoder for dannelsen af denne fil vises nedenfor.',
	'CONFIG_FILE_WRITTEN'		=> 'Konfigurationsfilen er blevet skrevet. Du kan nu fortsætte til næste trin af installationen.',
	'CONFIG_PHPBB_EMPTY'		=> 'phpBB3 konfigurationsvariablen for "%s" er tom.',
	'CONFIG_RETRY'				=> 'Prøv igen',
	'CONTACT_EMAIL_CONFIRM'		=> 'Bekræft emailadresse for kontakt',
	'CONTINUE_CONVERT'			=> 'Fortsæt konvertering',
	'CONTINUE_CONVERT_BODY'		=> 'Et tidligere konverteringsforsøg er blevet afbrudt. Du kan nu vælge at genstarte dette eller starte en ny konvertering.',
	'CONTINUE_LAST'				=> 'Fortsæt',
	'CONTINUE_OLD_CONVERSION'	=> 'Genstart tidligere påbegyndt konvertering',
	'CONVERT'					=> 'Konvertér',
	'CONVERT_COMPLETE'			=> 'Konvertering fuldført',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Du har nu konverteret dit board til phpBB 3.0. Du kan nu logge ind og <a href="../">tilgå dit board</a>. Kontrollér venligst at alle indstillinger blev konverteret korrekt, inden du gør dit board tilgængeligt ved at slette install mappen. Husk at hjælp til brugen af phpBB 3.0 er tilgængelig online via <a href="http://www.phpbb.com/support/documentation/3.0/">dokumentationen</a> og <a href="http://www.phpbb.com/community/viewforum.php?f=46">support foraene</a>.',
	'CONVERT_INTRO'				=> 'Velkommen til phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'Herfra er du i stand til at importere data fra andre (installerede) boardsystemer. Listen nedenfor viser alle for nuværende tilgængelige konverteringsmoduler. Hvis der ikke er vist en konverter i denne liste for dén boardsoftware du ønsker at konvertere fra, kontrollér da venligst phpBB.com\'s hjemmeside, hvor yderligere konverteringsmoduler kan være tilgængelige for download.',
	'CONVERT_NEW_CONVERSION'	=> 'Ny konvertering',
	'CONVERT_NOT_EXIST'			=> 'Den angivne konverter eksisterer ikke.',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Oplysningerne du indtastede er blevet verificeret. Tryk på knappen nedenfor for at starte konverteringen',
	'CONV_ERR_FATAL'			=> 'Alvorlig konverteringsfejl',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP upload for vedhæftede filer er slået til på det gamle board. Slå FTP upload muligheden fra og sørg for at en gyldig upload mappe er angivet, kopiér herefter venligst alle vedhæftede filer til denne nye mappe, der skal kunne tilgås fra webserveren. Når du har du gjort dette, genstartes konverteren.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Der er ingen konfigurationsinformation tilgængelig for konverteringen.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Ude af stand til at skaffe adgangsinformation.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Ude af stand til at skaffe kategorier.',
	'CONV_ERROR_GET_CONFIG'				=> 'Kunne ikke finde din boardkonfiguration.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Ude af stand til at tilgå/læse "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Ude af stand til at skaffe information om tilladelser for grupper.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Inkonsistens i gruppetabel opdaget i add_bots() - du er nødt til at tilføje alle specielle grupper hvis du gør det manuelt.',
	'CONV_ERROR_INSERT_BOT'				=> 'Ude af stand til at indsætte bot i user tabel.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Ude af stand til at indsætte bot i bot tabel.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Ude af stand til at indsætte bruger i user_group tabel.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Message parser fejl',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Note til udvikler: du skal angive $convertor[\'avatar_path\'] for at bruge %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Den relative sti til kildeboardet er ikke blevet angivet.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Note til udvikler: du skal angive $convertor[\'avatar_gallery_path\'] for at bruge %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Gruppe "%1$s" fandtes ikke i %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Note til udvikler: du skal angive $convertor[\'ranks_path\'] for at bruge %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Note til udvikler: du skal angive $convertor[\'smilies_path\'] for at bruge %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Note til udvikler: du skal angive $convertor[\'upload_path\'] for at bruge %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Ude af stand til at indsætte/opdatere tilladelsesindstilling.',
	'CONV_ERROR_PM_COUNT'				=> 'Ude af stand til at vælge antal PB mapper.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Ude af stand til at indsætte nyt forum til erstatning for gammel kategori.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Ude af stand til at indsætte nyt forum til erstatning for gammelt forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Ude af stand til at skaffe information om tilladelser for brugere.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Forkert gruppe "%1$s" defineret i %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Denne side indsamler de nødvendige data for at kunne tilgå det board der skal konverteres. Angiv databaseindstillingerne for dette board; konverteren ændrer intet i denne database. Kildeboardet bør slås fra eller tages offline under konverteringen for at sikre en konsistent konvertering.',
	'CONV_SAVED_MESSAGES'				=> 'Gemte beskeder',

	'COULD_NOT_COPY'			=> 'Kunne ikke kopiere fil <strong>%1$s</strong> til <strong>%2$s</strong><br /><br />Kontrollér venligst at modtagemappen eksisterer og er skrivbar for webserveren.',
	'COULD_NOT_FIND_PATH'		=> 'Kunne ikke finde sti til dit tidligere board. Kontrollér venligst dine indstillinger og prøv igen.<br />» Angiven kildesti var %s.',

	'DBMS'						=> 'Databasetype',
	'DB_CONFIG'					=> 'Databasekonfiguration',
	'DB_CONNECTION'				=> 'Databaseforbindelse',
	'DB_ERR_INSERT'				=> 'Fejl under behandling af <code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'Fejl under behandling af <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Fejl under behandling af <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Fejl under behandling af <var>query_first</var>, %s ("%s").',
	'DB_ERR_SELECT'				=> 'Fejl under kørsel af <code>SELECT</code> forespørgsel.',
	'DB_HOST'					=> 'Værtsnavn for databaseserver eller DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN står for Data Source Name og er kun relevant for ODBC installationer.',
	'DB_NAME'					=> 'Databasenavn',
	'DB_PASSWORD'				=> 'Kodeord for databasebruger',
	'DB_PORT'					=> 'Port for databaseserver',
	'DB_PORT_EXPLAIN'			=> 'Udfyldes kun hvis serveren ikke kommunikerer på standard porten.',
	'DB_USERNAME'				=> 'Navn på databasebruger',
	'DB_TEST'					=> 'Tester forbindelse',
	'DEFAULT_LANG'				=> 'Standardsprog for board',
	'DEFAULT_PREFIX_IS'			=> 'Konverteren kunne ikke finde tabeller med det angivne præfiks. Kontrollér venligst at du angivet de korrekte data for det board du ønsker at konvertere. Standard tabelpræfiks for %1$s er <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'Ingen værdi er blevet angivet for test_file variablen i konverteren. Hvis du er bruger af denne konverter, burde du ikke se denne fejl, rapportér venligst denne fejl til konverterforfatteren. Hvis du er en konverterforfatter, skal du angive navnet på en fil som eksisterer i kildeboardet for at muliggøre verifikation af stien til det.',
	'DIRECTORIES_AND_FILES'		=> 'Mappe og fil setup',
	'DISABLE_KEYS'				=> 'Slår nøgler fra',
	'DLL_FIREBIRD'				=> 'Firebird 1.5+',
	'DLL_FTP'					=> 'Fjern FTP understøttelse [ Installation ]',
	'DLL_GD'					=> 'GD grafikunderstøttelse [ Visuel bekræftelse ]',
	'DLL_MBSTRING'				=> 'Multi-byte character understøttelse',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MYSQL'					=> 'MySQL 3.23.x/4.x',
	'DLL_MYSQLI'				=> 'MySQL 4.1.x/5.x med MySQLi Extension',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'XML understøttelse [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib kompressionsunderstøttelse [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Download config',
	'DL_CONFIG_EXPLAIN'			=> 'Du kan downloade den komplette config.php til din egen PC. Du vil så være nødt til at uploade filen manuelt, hvorved den eksisterende config.php i din phpBB 3.0 rodmappe overskrives. Husk venligst at uploade filen i ASCII format (se dokumentationen til din FTP applikation hvis du er i tvivl om hvordan du opnår dette). Når du har uploadet config.php, tryk da venligst på "Udført" for at gå videre til den næste side.',
	'DL_DOWNLOAD'				=> 'Download',
	'DONE'						=> 'Udført',

	'ENABLE_KEYS'				=> 'Slår nøgler til igen. Dette kan tage et stykke tid.',

	'FILES_OPTIONAL'			=> 'Valgfrie filer og mapper',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Valgfri</strong> - Disse filer, mapper og tilladelsesindstillinger er ikke krævede. Installationssystemet vil forsøge at bruge forskellige teknikker for at oprette disse, hvis de ikke eksisterer eller ikke kan skrives til. Imidlertid vil tilstedeværelsen af disse medføre en hurtigere installation.',
	'FILES_REQUIRED'			=> 'Filer og mapper',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Krævede</strong> - For at fungere korrekt skal phpBB have adgang til eller kunne skrive til visse filer eller mapper. Hvis du ser "Ikke fundet" er du nødt til at oprette den relevante fil eller mappe. Hvis du ser "Ikke skrivbar" er du nødt til at ændre tilladelser for filen eller mappen for at give phpBB mulighed for at skrive dertil.',
	'FILLING_TABLE'				=> 'Udfylder tabel <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Udfylder tabeller',
	'FINAL_STEP'				=> 'Udfør afsluttende trin',
	'FORUM_ADDRESS'				=> 'Boardadresse',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Dette er URL\'en til dit tidligere board, f.eks. <samp>http://www.example.com/phpBB2/</samp>. Hvis der indtastes en adresse hér og den ikke efterlades tom, bliver alle referencer til denne gamle URL erstattet med den nye board URL i alle indlæg, private beskeder og signaturer.',
	'FORUM_PATH'				=> 'Sti til board',
	'FORUM_PATH_EXPLAIN'		=> 'Den <strong>relative</strong> sti på disken til dit tidligere board fra <strong>roden af din phpBB 3.0 installation</strong>.',
	'FOUND'						=> 'Fundet',
	'FTP_CONFIG'				=> 'Overfør konfiguration med FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB har opdaget tilstedeværelsen af FTP modulet på denne server. Du kan forsøge at installere din config.php via dette, hvis du ønsker det. Du skal angive informationen anført nedenfor, i denne sammenhæng drejer det sig om brugernavn og kodeord til din ftp-server! Spørg din vært hvis du er i tvivl.',
	'FTP_PATH'					=> 'FTP sti',
	'FTP_PATH_EXPLAIN'			=> 'Dette er stien fra din rodmappe til phpBB, f.eks. htdocs/phpBB3/.',
	'FTP_UPLOAD'				=> 'Upload',

	'GPL'						=> 'General Public License',

	'INITIAL_CONFIG'			=> 'Basiskonfiguration',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Nu hvor installationen har fastslået at din server kan køre phpBB, skal du indtaste nogle specifikke oplysninger. Hvis du ikke ved hvordan du forbinder til din database bedes du kontakte din vært (i første omgang) eller bruge phpBB supportforaene. Kontrollér venligst indtastede data grundigt før du fortsætter.',
	'INSTALL_CONGRATS'			=> 'Tillykke!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
	<p>Du har nu installeret phpBB %1$s. Afhængig af hvad du vil med din nye phpBB3 installation, har du nu to muligheder:</p>
	<h2>Konvertér et eksisterende board til phpBB3</h2>
	<p>phpBB\'s Unified Convertor Framework understøtter konvertering fra phpBB2.0.x og andre boards til phpBB3. Ønsker du at konvertere et eksisterende board, <a href="%2$s">fortsæt til konverteren</a>.</p>
	<h2>Kom online med dit phpBB3 board!</h2>
	<p>Klik på knappen nedenfor som leder dig til administrator kontrolpanelet (ACP). Giv dig tid til at gennemgå de indstillinger du har til rådighed. Husk at der er hjælp at hente online via den engelske <a href="http://www.phpbb.com/support/documentation/3.0/">dokumentation</a> og i <a href="http://www.phpbb.com/community/viewforum.php?f=46">support foraene</a>, se også i <a href="%3$s">README</a> for yderligere information.</p><p><strong>Slet, flyt eller omdøb venligst nu install mappen før du bruger dit board. Hvis denne mappe stadig er til stede, vil kun administrator kontrolpanelet (ACP) være tilgængeligt.</strong></p>',
	'INSTALL_INTRO'				=> 'Velkommen til Installation',
// TODO: write some more introductions here
	'INSTALL_INTRO_BODY'		=> 'Med denne funktion er det muligt at installere phpBB på din server.</p><p>For at fortsætte skal du have dine database indstillinger klarlagt. Hvis du ikke kender dine database indstillinger, kontakt da venligst din vært. Uden disse kan du ikke fortsætte installationen. Du skal bruge følgende informationer:</p>
	
	<ul>
	<li>Databasetype - databasen du vil bruge.</li>
	<li>Databaseserverens værtsnavn eller DSN - adressen på serveren.</li>
	<li>Databaseserverens port - den port hvorpå phpBB3 skal kommunikere med serveren (denne er som regel helt unødvendig).</li>
	<li>Databasenavnet - databasens navn på ovennævnte server.</li>
	<li>Brugernavnet og kodeordet til databasen - login information for at få adgang til databasen.</li>
	</ul>

	<p><strong>Bemærk:</strong> Hvis du anvender SQLite til din installation skal du angive den fulde sti til din databasefil i DSN-feltet og efterlade felterne for brugernavn og kodeord tomme. Af hensyn til sikkerheden bør du sikre dig, at man ikke kan få direkte adgang til databasenfilen fra Internettet.</p>
	
	<p>phpBB3 understøtter følgende databasetyper:</p>
	<ul>
		<li>MySQL 3.23 eller nyere (MySQLi er understøttet)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>MS SQL Server 2000 eller nyere (direkte eller via ODBC)</li>
		<li>Oracle</li>
	</ul>
	
	<p>I næste skærmbillede vises kun de databasetyper der understøttes af din server.',
	'INSTALL_INTRO_NEXT'		=> 'For at gå videre med installationen, tryk venligst på knappen herunder.',
	'INSTALL_LOGIN'				=> 'Log ind',
	'INSTALL_NEXT'				=> 'Næste trin',
	'INSTALL_NEXT_FAIL'			=> 'Nogle tests slog fejl og du bør rette disse problemer før du fortsætter til næste trin. Hvis dette slår fejl, kan det forårsage en delvis, ufærdig installation.',
	'INSTALL_NEXT_PASS'			=> 'Alle de grundlæggende tests er gennemført og du kan fortsætte til næste trin af installationen. Hvis du har ændret nogle tilladelser, moduler etc. og ønsker at teste igen, kan du også gøre det.',
	'INSTALL_PANEL'				=> 'Installationspanel',
	'INSTALL_SEND_CONFIG'		=> 'Uheldigvis kunne phpBB ikke skrive konfigurationsinformationerne direkte til din config.php. Det kan enten være fordi filen ikke eksisterer eller at den ikke er skrivbar. Et antal muligheder vil blive anført nedenfor som giver dig mulighed for at fuldføre installation af config.php.',
	'INSTALL_START'				=> 'Start installation',
	'INSTALL_TEST'				=> 'Test igen',
	'INST_ERR'					=> 'Installationsfejl',
	'INST_ERR_DB_CONNECT'		=> 'Kunne ikke forbinde til databasen, se fejlmeddelelsen herunder.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Den angivne databasefil findes i dine boardmapper. Du bør anbringe denne fil et sted hvor den ikke kan tilgås fra nettet.',
	'INST_ERR_DB_NO_ERROR'		=> 'Ingen fejlmeddelelse.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Versionen af MySQL installeret på denne server er ikke kompatibel med den "MySQL med MySQLi-udvidelse" indstilling du har valgt. Prøv venligst "MySQL" indstillingen i stedet for.',
	'INST_ERR_DB_NO_SQLITE'		=> 'Den installerede version af SQLite udvidelsen er for gammel, den skal opdateres til mindst 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Den installerede version af Oracle på denne server kræver at du sætter <var>NLS_CHARACTERSET</var> parameteren til <var>UTF8</var>. Opdatér venligst enten din installation til 9.2+ eller ændre indstilllingen af parameteren.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'Den installerede version af Firebird på denne server er ældre end 2.0, opdatér venligst til en nyere version.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'Den database du har valgt til Firebird har sidestørrelse mindre end 8192, den skal være på mindst 8192.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Den valgte database blev ikke oprettet i <var>UNICODE</var> eller <var>UTF8</var> encoding. Prøv at installere med en database i <var>UNICODE</var> eller <var>UTF8</var> encoding.',
	'INST_ERR_DB_NO_NAME'		=> 'Intet databasenavn angivet.',
	'INST_ERR_EMAIL_INVALID'	=> 'Den indtastede email-adresse er ugyldig.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Email-adresserne du angav matcher ikke.',
	'INST_ERR_FATAL'			=> 'Fatal installationsfejl',
	'INST_ERR_FATAL_DB'			=> 'En fatal og uoprettelig databasefejl er opstået. Dette kan være fordi den angivne bruger ikke har de nødvendige tilladelser til at <code>CREATE TABLES</code> eller <code>INSERT</code> data, etc. Der kan være yderligere oplysninger herunder. Kontakt i første omgang din vært eller spørg på phpBBs supportfora for yderligere assistance.',
	'INST_ERR_FTP_PATH'			=> 'Kunne ikke skifte til den angivne mappe, kontrollér venligst at stien er korrekt.',
	'INST_ERR_FTP_LOGIN'		=> 'Kunne ikke logge ind på FTP-server, kontrollér at du har angivet korrekt brugernavn og kodeord.',
	'INST_ERR_MISSING_DATA'		=> 'Du skal udfylde alle felter i denne blok.',
	'INST_ERR_NO_DB'			=> 'Kan ikke indlæse PHP-modulet til den valgte databasetype.',
	'INST_ERR_PASSWORD_MISMATCH' => 'De indtastede kodeord matchede ikke.',
	'INST_ERR_PASSWORD_TOO_LONG' => 'Det indtastede kodeord er for langt. Den maksimale længde er 30 tegn.',
	'INST_ERR_PASSWORD_TOO_SHORT' => 'Det indtastede kodeord er for kort. Den minimale længde er 6 tegn.',
	'INST_ERR_PREFIX'			=> 'Tabeller med det angivne præfiks findes allerede, indtast venligst et alternativ.',
	'INST_ERR_PREFIX_INVALID'	=> 'Tabelpræfikset du har angivet er ugyldigt for din database. Prøv venligst et andet, hvor du fjerner tegn som bindestregen.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Tabelpræfikset du har angivet er for langt. Den maksimale længde er %d tegn.',
	'INST_ERR_USER_TOO_LONG'	=> 'Brugernavnet du indtastede er for langt. Den maksimale længde er 20 tegn.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Brugernavnet du indtastede er for kort. Den minimale længde er 3 tegn.',
	'INVALID_PRIMARY_KEY'		=> 'Ugyldig primær nøgle : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Bemærk at udførslen af scriptet kan tage noget tid...Stop det venligst ikke.',

	// mbstring
	'MBSTRING_CHECK'			=> '<samp>mbstring</samp> extension check',
	'MBSTRING_CHECK_EXPLAIN'	=> '<strong>Krævet</strong> - <samp>mbstring</samp> er en PHP extension som giver multibyte string funktioner. Nogle af funktionerne i mbstring er ikke kompatible med phpBB og skal slås fra.',
	'MBSTRING_FUNC_OVERLOAD' => 'Function overloading',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN' => '<var>mbstring.func_overload</var> skal sættes til enten 0 eller 4.',
	'MBSTRING_ENCODING_TRANSLATION' => 'Transparent character encoding',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN' => '<var>mbstring.encoding_translation</var> skal sættes til 0.',
	'MBSTRING_HTTP_INPUT' => 'HTTP input tegn konvertering',
	'MBSTRING_HTTP_INPUT_EXPLAIN' => '<var>mbstring.http_input</var> skal sættes til <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT' => 'HTTP output tegn konvertering',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN' => '<var>mbstring.http_output</var> skal sættes til <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Vær venlig at sikre dig at denne mappe findes og at webserveren kan skrive til den, og prøv så igen:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Vær venlig at sikre dig at disse mapper findes og at webserveren kan skrive til dem, og prøv derefter igen:<br />»<strong>%s</strong>.',

	'NAMING_CONFLICT'			=> 'Navnekonflikt: %s og %s er begge aliaser<br /><br />%s',
	'NEXT_STEP'					=> 'Fortsæt til næste trin',
	'NOT_FOUND'					=> 'Kan ikke finde',
	'NOT_UNDERSTAND'			=> 'Kunne ikke forstå %s #%d, tabel %s ("%s")',
	'NO_CONVERTORS'				=> 'Der er ingen konverteringsrutiner til rådighed.',
	'NO_CONVERT_SPECIFIED'		=> 'Ingen konverteringsrutine angivet.',
	'NO_LOCATION'				=> 'Kan ikke fastslå placering. Hvis du véd at Imagemagick er installeret kan du angive placeringen senere i dit administrator kontrolpanel',
	'NO_TABLES_FOUND'			=> 'Ingen tabeller fundet.',
// TODO: Write some explanatory introduction text

	'OVERVIEW_BODY'					=> 'Velkommen til vores offentlige release candidate af næste generation af phpBB efter 2.0.x, phpBB 3.0! Denne frigivelse er beregnet til brug blandt en bredere skare, for derigennem at hjælpe os med at identificere de sidste fejl og problemstillinger.</p><p>Læs venligst <a href="../docs/INSTALL.html">vores installationsvejledning</a> for mere information om installationen af phpBB 3.0.</p><p><strong style="text-transform: uppercase;">Bemærk:</strong> Denne frigivelse er <strong style="text-transform: uppercase;">ikke den endelige</strong> Medmindre du har erfaring som phpBB administrator, er det måske klogest at du afventer den endelige frigivelse, inden du anvender phpBB 3.0 live.</p><p>Installationssystemet hjælper dig igennem hele installationsprocessen, og også ved konvertering fra en anden softwarepakke eller opdatering til seneste version af phpBB 3.0. Mere information om disse muligheder findes ved at vælge disse fra fanebladene herover og fra menuen til venstre.',
	
	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 understøttelse',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB vil <strong>ikke</strong> køre hvis din PHP installation ikke er kompileret med UTF-8 understøttelse i PCRE udvidelsen.',
	'PHP_GETIMAGESIZE_SUPPORT'		=> 'PHP\'s facilitet getimagesize() er tilgængelig',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Krævet</strong> - For at få phpBB til at virke optimalt er getimagesize faciliteten nødvendig.',
	'PHP_OPTIONAL_MODULE'			=> 'Valgfrie moduler',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Valgfrit</strong> - Disse moduler eller applikationer er valgfrie. Men hvis du har dem tilgængelige, giver de ekstra funktionaliteter.',
	'PHP_SUPPORTED_DB'				=> 'Understøttede databaser',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Krævet</strong> - Du skal have understøttelse for mindst én kompatibel database i PHP. Hvis der ikke er vist nogen moduler som værende tilgængelige, bør du kontakte din vært eller gennemgå dokumentationen for din PHP-installation for yderligere hjælp.',
	'PHP_REGISTER_GLOBALS'			=> 'PHP indstillingen <var>register_globals</var> er slået fra',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB vil stadig kunne køre med denne indstilling slået til, men det anbefales at register_globals slås fra på din PHP-installation af sikkerhedsmæssige årsager.',
	'PHP_SAFE_MODE'					=> 'Safe mode',
	'PHP_SETTINGS'					=> 'PHP version og indstillinger',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Krævet</strong> - Du skal køre med minimum version 4.3.3 af PHP for at kunne installere phpBB. Hvis <var>safe mode</var> vises herunder, kører din PHP-installation i denne tilstand. Dette vil give begrænsninger i mulighederne for fjernadministration og lignende funktioner.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'PHP indstillingen <var>allow_url_fopen</var> er slået til',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN' => '<strong>Ekstra</strong> - Denne indstilling er en ekstra mulighed, vær opmærksom på at bestemte phpBB funktioner ikke virker uden denne. Off-site (remote) avatars er en af disse.',
	'PHP_VERSION_REQD'				=> 'PHP version >= 4.3.3',
	'POST_ID'						=> 'Indlægs-ID',
	'PREFIX_FOUND'					=> 'Et skan af dine tabeller viser en gyldig installation der bruger <strong>%s</strong> som tabelpræfiks.',
	'PREPROCESS_STEP'				=> 'Udfører forbehandlingsfunktioner og -forespørgsler',
	'PRE_CONVERT_COMPLETE'			=> 'Alle indledende tests og undersøgelsesrutiner er korrekt gennemført. Du kan nu begynde den egentlige konverteringsproces. Bemærk venligst at du kan være nødsaget til efterfølgende at justere flere parametre. Kontrollér især tildelte tilladelser, og om filer, avatars og smilies blev kopieret korrekt. Dit nykonverterede board indeholder intet søgeindeks, det kan du danne i administrator kontrolpanelet.',
	'PROCESS_LAST'					=> 'Behandler sidste forespørgsler',
	
	'REFRESH_PAGE'				=> 'Opdatér siden for at forsætte konvertering',
	'REFRESH_PAGE_EXPLAIN'		=> 'Hvis sat til ja, vil konverteren opdatere siden for at forsætte konverteringen efter afslutning af hver fase. Hvis dette er din første konvertering med det formål at teste for eventuelle fejl på forhånd, anbefales det at sætte denne til "Nej".',
//	'REQUIRED'					=> 'Required',
	'REQUIREMENTS_TITLE'		=> 'Installationskompatibilitet',
	'REQUIREMENTS_EXPLAIN'		=> 'Før der fortsættes med den fulde installation vil phpBB udføre nogle tests af din serverkonfiguration og filer for at sikre at du er i stand til at installere og køre phpBB. Sørg venligst for at gennemlæse resultaterne grundigt og fortsæt ikke før alle krævede tests er gennemført. Hvis du ønsker at anvende nogle af funktionaliteterne, der angives i de valgfri tests, bør du sikre dig, at disse tests er gennemført med succes.',
	'RETRY_WRITE'				=> 'Forsøger igen at skrive til config',
	'RETRY_WRITE_EXPLAIN'		=> 'Hvis du har mulighed for det kan du prøve at ændre tilladelserne for config.php for at tillade phpBB at skrive til filen. Har du denne mulighed, kan du klikke "Prøv igen" nedenfor, for at prøve igen. Husk at ændre tilladelserne tilbage igen for config.php efter at phpBB har afsluttet installationen.',

	'SCRIPT_PATH'				=> 'Sti til script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Stien hvor phpBB er placeret relativt til domænenavnet, f.eks. <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Vælg sprog',
	'SERVER_CONFIG'				=> 'Serverkonfiguration',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Søgeindekset blev ikke konverteret',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Dit gamle søgeindeks blev ikke konverteret. Udføres der i øjeblikket en søgning, vil den ikke give nogle træffere. For at oprette et nyt søgeindeks skal du i administrator kontrolpanelet vælge "Vedligehold" og "Søgeindeks" i undermenuen.',
	'SOFTWARE'					=> 'Boardsoftware',
	'SPECIFY_OPTIONS'			=> 'Verificerer konverteringsindstillinger',
	'STAGE_ADMINISTRATOR'		=> 'Administratoroplysninger',
	'STAGE_ADVANCED'			=> 'Avancerede indstillinger',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Indstillingerne på denne side er foruddefineret efter phpBB3\'s standardindstilling, som bl.a. er baseret på den aktuelle anvendelse af protokol- og domæneindstillinger. Er du i tvivl om nødvendigheden af at ændre disse, kan alle indstillingerne justeres i administrator kontrolpanelet efter installationen er gennemført.',
	'STAGE_CONFIG_FILE'			=> 'Konfigurationsfil',
	'STAGE_CREATE_TABLE'		=> 'Opret databasetabeller',
	'STAGE_CREATE_TABLE_EXPLAIN' => 'Databasetabellerne, der anvendes af phpBB 3.0, er dannet og udfyldt med nogle indledende data. Fortsæt til næste skærmbillede for at afslutte installationen af phpBB.',
	'STAGE_DATABASE'			=> 'Databaseindstillinger',
	'STAGE_FINAL'				=> 'Afsluttende trin',
	'STAGE_INTRO'				=> 'Introduktion',
	'STAGE_IN_PROGRESS'			=> 'Konvertering i gang',
	'STAGE_REQUIREMENTS'		=> 'Krav',
	'STAGE_SETTINGS'			=> 'Indstillinger',
	'STARTING_CONVERT'			=> 'Påbegynder konverteringsproces',
	'STEP_PERCENT_COMPLETED'	=> 'Trin <strong>%d</strong> af <strong>%d</strong>',
	'SUB_INTRO'					=> 'Introduktion',
	'SUB_LICENSE'				=> 'Licens',
	'SUB_SUPPORT'				=> 'Support',
	'SUCCESSFUL_CONNECT'		=> 'Korrekt forbundet',
// TODO: Write some text on obtaining support
	'SUPPORT_BODY'				=> 'Under denne "release candidate" fase ydes der support på <a href="http://www.phpbb.com/community/viewforum.php?f=46">phpBB 3.0 support foraene</a>. Vi vil her være behjælpelig med problemer og besvare generelle spørgsmål omkring opsætning, konfiguration og konvertering, blandt andet for hermed bedre at kunne indkredse generelle problemstillinger i forbindelse med fejl. Der er også åbent for diskussioner om ændringer af kode og typografier.</p><p>For yderligere assistance, besøg venligst vores engelske <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Quick Start Guide</a> og <a href="http://www.phpbb.com/support/documentation/3.0/">online dokumentation</a>.</p><p>Hvis du <a href="http://www.phpbb.com/support/">tilmelder dig vores mailing liste</a>, sikrer du at du bliver holdt opdateret med de seneste nyheder og frigivelser.',
	'SYNC_FORUMS'				=> 'Synkroniserer fora',
	'SYNC_POST_COUNT'			=> 'Synkroniserer antal indlæg',
	'SYNC_POST_COUNT_ID'		=> 'Synkroniserer indlæg fra <var>entry</var> %1$s til %2$s.',
	'SYNC_TOPICS'				=> 'Synkronisering af emner',
	'SYNC_TOPIC_ID'				=> 'Synkroniserer emner fra <var>emne_id</var> %1$s til %2$s.',

	'TABLES_MISSING'			=> 'Kunne ikke finde disse tabeller<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Præfiks for tabeller i database',
	'TABLE_PREFIX_SAME'			=> 'Tabelpræfikset skal være dét som bruges af softwaren du konverterer fra.<br />»  Angivet tabelpræfiks var %s.',
	'TESTS_PASSED'				=> 'Tests gennemført',
	'TESTS_FAILED'				=> 'Tests fejlede',

	'UNABLE_WRITE_LOCK'			=> 'Ude af stand til at skrive til låst fil.',
	'UNAVAILABLE'				=> 'Ikke tilgængelig',
	'UNWRITABLE'				=> 'Ikke skrivbar',
	'UPDATE_TOPICS_POSTED'		=> 'Opdaterer informationer om indsendte emner',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Der opstod en fejl under forsøget på at opdatere informationer om indsendte emner. Du kan forsøge denne opdatering igen i ACP, når konverteringsprocessen er afsluttet.',
	'VERSION'					=> 'Version',

	'WELCOME_INSTALL'			=> 'Velkommen til phpBB 3 installation',
	'WRITABLE'					=> 'Skrivbar',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Alle filer er opdaterede til den seneste version af phpBB. Du bør nu <a href="../ucp.php?mode=login">logge ind på dit board</a> og kontrollere at alt fungerer efter hensigten. Husk at slette, omdøbe eller flytte install mappen!',
	'ARCHIVE_FILE'				=> 'Kildefil i arkiv',

	'BACK'		=> 'Back',
	'BINARY_FILE'		=> 'Binær fil',
	'BOT'		=> 'Spider/bot',

	'CHANGE_CLEAN_NAMES'	=> 'Metoden til at sikre at et brugernavn ikke anvendes af flere brugere er ændret. Denne nye kontrol viser at nogle brugere anvender samme brugernavn. For at sikre at der kun findes én bruger pr. brugernavn, skal du slette eller omdøbe disse konfliktende brugernavne før du kan forsætte.',
	'CHECK_FILES'					=> 'Kontrollér filer',
	'CHECK_FILES_AGAIN'				=> 'Kontrollér filer igen',
	'CHECK_FILES_EXPLAIN'			=> 'I det næste trin vil alle filer blive kontrolleret op imod opdateringsfilerne - dette kan tage noget tid hvis dette er den første filkontrol.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Ifølge din database er din version opdateret. Du kan fortsætte med filkontrollen for at sikre at alle filer allerede er opdaterede til den seneste phpBB version.',
	'CHECK_UPDATE_DATABASE'			=> 'Fortsæt opdateringsprocessen',
	'COLLECTED_INFORMATION'			=> 'Filinformation',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Listen nedenfor viser information om de filer, der behøver en opdatering. Læs venligst informationen foran hver statusblok for at se hvad den betyder og hvad du bør gøre for udføre en succesfuld opdatering.',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Du bør nu <a href="../ucp.php?mode=login">logge ind til dit board</a> og kontrollere om alt virker som det skal. Husk at slette, omdøbe eller flytte din install mappe!',
	'CONTINUE_UPDATE_NOW'			=> 'Fortsæt opdateringsprocessen nu',
	'CURRENT_FILE'					=> 'Nuværende original fil',
	'CURRENT_VERSION'				=> 'Nuværende version',

	'DATABASE_TYPE'						=> 'Databasetype',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Databaseopdateringsfilen i install mappen er ikke opdateret. Kontrollér venligst at du uploadede den korrekte version af filen.',
	'DELETE_USER_REMOVE'		=> 'Slet bruger og fjern indlæg',
	'DELETE_USER_RETAIN'		=> 'Slet bruger, men bevar indlæg',
	'DESTINATION'				=> 'Destinationsfil',
	'DIFF_INLINE'						=> 'Inline',
	'DIFF_RAW'							=> 'Raw unified diff',
	'DIFF_SEP_EXPLAIN'					=> 'Slut på nuværende fil / Begynd på ny opdateret fil',
	'DIFF_SIDE_BY_SIDE'					=> 'Side by side',
	'DIFF_UNIFIED'						=> 'Unified diff',
	'DO_NOT_UPDATE'						=> 'Opdatér ikke denne fil',
	'DONE'								=> 'Udført',
	'DOWNLOAD'							=> 'Download',
	'DOWNLOAD_AS'						=> 'Download som',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Download arkiv med ændrede filer',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Når du har downloadet og udpakket filen indeholdende alle de ændrede filer, uploades disse til deres rette placering i din phpBB installation. Filerne bør herefter kontrolleres endnu gang med venstre knap nedenfor.',

	'ERROR'		=> 'Fejl',
	'EDIT_USERNAME'	=> 'Ændre brugernavn',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Fil er allerede opdateret.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Fil tillades ikke diffet.',
	'FILE_USED'						=> 'Information brugt fra',			// Single file
	'FILES_CONFLICT'				=> 'Konfliktende filer',
	'FILES_CONFLICT_EXPLAIN'		=> 'Følgende filer er modificeret i forhold til det originale indhold af den version du opdaterer fra. phpBB mener at disse filer vil skabe konflikter hvis de forsøges sammenlagt. Undersøg venligst konflikterne og prøv manuelt at løse dem eller fortsæt opdateringen ved at vælge den foretrukne sammenlægningsmetode. Hvis du løser konflikterne manuelt, kontrollér filerne igen efter du har ændret dem. Du kan også vælge den foretrukne sammenlægningsmetode for hver fil. Den første vil resultere i en fil, hvor linier med konflikter mistes, den anden vil resultere i at ændringerne fra den nye fil mistes.',
	'FILES_MODIFIED'				=> 'Modificerede filer',
	'FILES_MODIFIED_EXPLAIN'		=> 'Følgende filer er modificeret i forhold til det originale indhold af den version du opdaterer fra. Den opdaterede fil vil bestå af en sammenlægning af disse modifikationer og indholdet af den nye fil.',
	'FILES_NEW'						=> 'Nye filer',
	'FILES_NEW_EXPLAIN'				=> 'Følgende filer eksisterer for nuværende ikke i din installation.',
	'FILES_NEW_CONFLICT'			=> 'Nye konfliktende filer',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Følgende filer er nye i den nyeste version, men det er blevet fastslået, at der er allerede en fil med det samme navn med den samme placering. Denne fil vil blive overskrevet af den nye fil.',
	'FILES_NOT_MODIFIED'			=> 'Ikke modificerede filer',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Følgende filer er uændrede i forhold til de originale filer indeholdt i den version af phpBB du ønsker at opdatere fra. Disse filer opdateres uden problemer til nyeste version. Hvis du vil se de opdateringer der foretages i filerne under opdateringen, kan disse ses i "Vis forskelle".',
	'FILES_UP_TO_DATE'				=> 'Allerede opdaterede filer',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Følgende filer er allerede opdaterede og behøver ikke at blive opdateret.',
	'FTP_SETTINGS'					=> 'FTP indstillinger',
	'FTP_UPDATE_METHOD'				=> 'FTP upload',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'De fundne opdateringsfiler er ikke kompatible med din installerede version. Din installerede version er %1$s og opdateringsfilerne er for opdatering af phpBB %2$s til %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Opdateringsfilerne er ufuldstændige',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Databaseopdateringen lykkedes. Nu skal du fortsætte opdateringsprocessen.',

	'KEEP_OLD_NAME'         => 'Behold brugernavn',

	'LATEST_VERSION'		=> 'Seneste version',
	'LINE'					=> 'Linie',
	'LINE_ADDED'			=> 'Tilføjet',
	'LINE_MODIFIED'			=> 'Ændret',
	'LINE_REMOVED'			=> 'Fjernet',
	'LINE_UNMODIFIED'		=> 'Uændret',
	'LOGIN_UPDATE_EXPLAIN'	=> 'For at opdatere din installation er du nødt til at logge ind først.',

	'MAPPING_FILE_STRUCTURE'	=> 'For at lette uploadet er her filplaceringerne som passer til din phpBB installation.',
	
	'MERGE_MODIFICATIONS_OPTION'	=> 'Sammenlæg modifikationer',
	
	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Sammenlæg ikke - brug ny fil',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Sammenlæg ikke - brug filen uændret fra den version du opdaterer fra',
	'MERGE_MOD_FILE_OPTION'		=> 'Sammenlæg forskelle og brug modificeret filkode i konfliktende kodeblokke',
	'MERGE_NEW_FILE_OPTION'		=> 'Sammenlæg forskelle og brug ny filkode i konfliktende blokke',
	'MERGE_SELECT_ERROR'		=> 'Konfliktende fil tilstand er ikke korrekt valgt.',

	'NEW_FILE'						=> 'Ny opdateret fil',
	'NEW_USERNAME'					=> 'Nyt brugernavn',
	'NO_AUTH_UPDATE'				=> 'Ikke autoriseret til at opdatere',
	'NO_ERRORS'						=> 'Ingen fejl',
	'NO_UPDATE_FILES'				=> 'Opdaterer ikke følgende filer',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'De følgende filer er nye eller modificerede, men mappen de normalt hører hjemme i, kunne ikke findes på din installation. Hvis denne liste indeholder filer til andre mapper end language/ eller styles/, har du sansynligvis ændret mappestruktur og opdateringen kan være ufuldstændig.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Der blev ikke fundet en gyldig opdateringsmappe, undersøg venligst om du har uploadet de relevante filer.<br /><br />Din installation synes <strong>ikke</strong> at være opdateret. Opdateringer er tilgængelige for din version af phpBB %1$s, besøg venligst <a href="http://www.phpbb.com/downloads/" rel="external">http://www.phpbb.com/downloads/</a> for at finde den korrekte pakke for opdatering fra version %2$s til version %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Din version er opdateret. Der er ikke behov for at køre opdateringsværktøjet. Hvis du ønsker at foretage en integritetskontrol af dine filer, skal du sørge for at uploade de korrekte opdateringsfiler.',
	'NO_UPDATE_INFO'				=> 'Information om opdateringsfil kunne ikke findes.',
	'NO_UPDATES_REQUIRED'			=> 'Ingen opdateringer krævet',
	'NO_VISIBLE_CHANGES'			=> 'Ingen synlige ændringer',
	'NOTICE'						=> 'Bemærkning',
	'NUM_CONFLICTS'					=> 'Antal konflikter',

	'OLD_UPDATE_FILES'		=> 'Opdateringsfilerne er ikke opdaterede, de kan anvendes til at opdatere fra phpBB %1$s til phpBB %2$s. Den seneste version af phpBB er %3$s.',

	'PACKAGE_UPDATES_TO'	=> 'Denne pakke opdaterer til version',
	'PERFORM_DATABASE_UPDATE'			=> 'Udfør databaseopdatering',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Nedenfor finder du knappen til databaseopdateringsscriptet. Databaseopdateringen kan tage nogen tid, så stop venligst ikke eksekveringen, selv om den kun ser ud til at hænge. Når opdateringen er udført, skal du blot følge instruktionerne for at forsætte opdateringsprocessen.',
	'PREVIOUS_VERSION'					=> 'Foregående version',
	'PROGRESS'							=> 'Fremskridt',

	'RESULT'					=> 'Resultat',
	'RUN_DATABASE_SCRIPT'		=> 'Opdatér min database nu',

	'SELECT_DIFF_MODE'			=> 'Vælg forskelsvisning',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Vælg pakkeformat for fil',
	'SELECT_FTP_SETTINGS'		=> 'Vælg FTP indstillinger',
	'SHOW_DIFF_CONFLICT'		=> 'Vis forskelle/konflikter',
	'SHOW_DIFF_FINAL'			=> 'Vis den endelige fil',
	'SHOW_DIFF_MODIFIED'		=> 'Vis sammenlagte forskelle',
	'SHOW_DIFF_NEW'				=> 'Vis filindhold',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Vis forskelle',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Vis forskelle',
	'SOME_QUERIES_FAILED'		=> 'Nogle forespørgsler fejlede, meddelelser og fejl er anført nedenfor.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Dette er muligvis ikke noget at bekymre sig om, opdatering vil fortsætte. Skulle denne ikke lykkkes at fuldføre, kan du søge hjælp på vores supportfora. Se <a href="../docs/README.html">README</a> for informationer om at opnå råd.',
	'STAGE_FILE_CHECK'			=> 'Filkontrol',
	'STAGE_UPDATE_DB'			=> 'Databaseopdatering',
	'STAGE_UPDATE_FILES'		=> 'Filopdatering',
	'STAGE_VERSION_CHECK'		=> 'Versionskontrol',
	'STATUS_CONFLICT'			=> 'Modificerede filer, der skaber konflikter',
	'STATUS_MODIFIED'			=> 'Modificeret fil',
	'STATUS_NEW'				=> 'Ny fil',
	'STATUS_NEW_CONFLICT'		=> 'Konfliktende ny fil',
	'STATUS_NOT_MODIFIED'		=> 'Ikke modificeret fil',
	'STATUS_UP_TO_DATE'			=> 'Allerede opdateret fil',

	'UPDATE_COMPLETED'				=> 'Opdatering fuldført',
	'UPDATE_DATABASE'				=> 'Opdatér database',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Databasen vil blive opdateret i det efterfølgende trin.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Opdaterer databaseskema',	
	'UPDATE_FILES'					=> 'Opdatér filer',
	'UPDATE_FILES_NOTICE'			=> 'Sørg venligst for, at du har opdateret dine boardfiler også, denne fil opdaterer alene din database.',
	'UPDATE_INSTALLATION'			=> 'Opdatér phpBB installation',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Du har nu mulighed for at opdatere din phpBB installation til den seneste version.<br />Alle dine filer bliver i processen kontrolleret for deres integritet. Du får forud for opdateringen af filerne mulighed for selv at kontrollere filforskelle i de filer opdateringsprocessen måtte foretage ændringer i.<br /><br />Selve filopdateringen kan foretages på to forskellige måder.</p><h2>Manuel opdatering</h2><p>Med denne metode downloader du dit personlige sæt af de ændrede filer for at sikre du ikke mister de filmodifikationer, du måtte have foretaget. Efter at du har downloadet denne pakke er det nødvendigt at du manuelt uploader filerne til deres korrekte placering under din phpBB rod mappe. Når dette er gjort, er du i stand til at at gennemføre trinet for filkontrol igen for at se om du flyttede filerne til deres korrekte placering.</p><h2>Automatisk opdatering med FTP</h2><p>Denne metode ligner den første, men er uden behov for at du selv downloader de ændrede filer og uploader dem. Dette vil blive gjort for dig. For at anvende denne metode bliver du undervejs bedt om kontoinformation for FTP. Efter afslutning vil du blive viderestillet til filkontrollen igen for at sikre at alt blev opdateret korrekt.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Frigivelsesbekendtgørelse</h1>

		<p>Læs venligst <a href="%1$s" title="%1$s"><strong>frigivelsesbekendtgørelsen for den seneste version</strong></a> før du fortsætter din opdateringsprocedure, den kan indeholde værdifuld information. Den indeholder såvel fulde downloadlinks som ændringsloggen.</p>

		<br />

		<h1>Sådan opdaterer du din installation med den automatiske opdateringspakke (Automatic Update Package)</h1>

		<p>Den hér beskrevne metode for opdatering af din installation, gælder kun for opdatering med den automatiske opdateringspakke. Der findes to andre opdateringsmetoder, de er beskrevet i INSTALL.html dokumentet. For at udføre en automatisk opdatering, skal disse trin udføres:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Gå til <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">phpBB.com siden</a> og download "Automatic Update Package" pakken, i det pakkeformat du foretrækker.<br /><br /></li>
			<li>Udpak pakken<br /><br /></li>
			<li>Upload den fuldstændige, og ikke komprimerede install mappe til din phpBB rod mappe (hvor din config.php fil er).<br /><br /></li>
		</ul>

		<p>Når upload har fundet sted, vil dit board være offline for normale brugere, fordi install mappen nu er tilstede.<br /><br />
		<strong><a href="%2$s" title="%2$s">Begynd nu opdateringsproceduren ved at pege din browser på install mappen</a>.</strong><br />
		<br />
		Du bliver ledt gennem hele opdateringsproceduren, og får en advisering når denne er fuldført.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'        => '
	
		<h1>Mangelfuld opdatering</h1>
	
		<p>phpBB har opdaget en mangelfuld automatisk opdatering. Kontrollér venligst at du fulgte alle trinene i det automatiske opdateringsværktøj. Nedenstående finder du linket igen, eller kald din install mappe direkte.</p>
	',
	'UPDATE_METHOD'					=> 'Opdateringsmetode',
	'UPDATE_METHOD_EXPLAIN'			=> 'Du er nu i stand til at vælge din foretrukne opdateringsmetode. Brug af FTP upload vil præsentere dig for en formular, hvor du skal indtaste din kontoinformation for FTP. Med denne metode vil filerne automatisk blive flyttet til den nye placering og backup\'er af de gamle filer skabes ved at tilføje .bak til filnavnet. Hvis du vælger at downloade de ændrede filer, er du i stand til at udpakke og uploade dem til deres korrekte placering manuelt senere.',
	'UPDATE_REQUIRES_FILE'			=> 'Opdateringsproceduren kræver at filen %s er tilstede.',
	'UPDATE_SUCCESS'				=> 'Opdatering lykkedes',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Opdaterede alle filer. Det næste trin involverer kontrol af alle filer igen for at sikre, at filerne blev opdateret korrekt.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Opdaterer version og optimerer tabeller',
	'UPDATING_DATA'					=> 'Opdaterer data',
	'UPDATING_TO_LATEST_STABLE'		=> 'Opdaterer database til seneste stabile frigivelse',
	'UPDATED_VERSION'				=> 'Opdateret version',
	'UPLOAD_METHOD'					=> 'Uploadmetode',

	'UPDATE_DB_SUCCESS'				=> 'Databaseopdateringen blev gennemført med succes.',
	'USER_ACTIVE'					=> 'Aktiv bruger',
	'USER_INACTIVE'					=> 'Inaktiv bruger',
	
	'VERSION_CHECK'				=> 'Versionskontrol',
	'VERSION_CHECK_EXPLAIN'		=> 'Der søges automatisk efter nyere versioner af phpBB.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Din version af phpBB er ikke opdateret. Fortsæt venligst opdateringsproceduren.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'Din version af phpBB er ikke opdateret.<br />Nedenfor finder du et link til frigivelsesbekendtgørelsen for den seneste version såvel som instruktioner om at udføre opdateringen.',
	'VERSION_UP_TO_DATE'		=> 'Din version af phpBB er fuldt opdateret. Du kan alligevel fortsætte for at udføre en filgyldighedskontrol.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Din version af phpBB er fuldt opdateret.',
	'VIEWING_FILE_CONTENTS'		=> 'Filindhold',
	'VIEWING_FILE_DIFF'			=> 'Filsammenligning',

	'WRONG_INFO_FILE_FORMAT'	=> 'Forkert format for info fil',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Tak, ledelsen',
	'CONFIG_SITE_DESC'				=> 'En kort tekst til at beskrive dit board',
	'CONFIG_SITENAME'				=> 'ditdomæne.dk',

	'DEFAULT_INSTALL_POST'			=> 'Dette er et eksempel på et indlæg på dit nye phpBB3 board. Alt ser ud til at fungere! Du kan slette dette indlæg, hvis du har lyst, og fortsætte opsætningen af dit board. Under installationen er din første kategori og dit første forum tildelt et passende sæt tilladelser for de prædefinerede brugergrupper administratorer, botter, globale redaktører, gæster, tilmeldte brugere og tilmeldte COPPA-brugere. Hvis du vælger også at slette din første kategori og dit første forum, skal du huske at tildele tilladelser for samtlige disse brugergrupper for alle nye kategorier og fora som du opretter. Det anbefales derfor at omdøbe din første kategori og dit første forum og kopiere tilladelser fra disse ved oprettelsen af nye kategorier og fora. God fornøjelse!',

	'EXT_GROUP_ARCHIVES'			=> 'Komprimerede filer',
	'EXT_GROUP_DOCUMENTS'			=> 'Dokumenter',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Downloadbare filer',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash filer',
	'EXT_GROUP_IMAGES'				=> 'Billeder',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Ren tekst',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FORUMS_FIRST_CATEGORY'			=> 'Din første kategori',
	'FORUMS_TEST_FORUM_DESC'		=> 'Beskrivelse af dit første forum',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Dit første forum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrator',
	'REPORT_WAREZ'					=> 'Indlægget indeholder link til illegal software.',
	'REPORT_SPAM'					=> 'Det rapporterede indlæg har kun til formål at annoncere for et website eller et produkt.',
	'REPORT_OFF_TOPIC'				=> 'Det rapporterede indlæg er off topic.',
	'REPORT_OTHER'					=> 'Det rapporterede indlæg kan ikke placeres i nogen af de foruddefinerede kategorier. Anvend feltet "Yderligere information".',

	'SMILIES_ARROW'					=> 'Pil',
	'SMILIES_CONFUSED'				=> 'Forvirret',
	'SMILIES_COOL'					=> 'Sejt',
	'SMILIES_CRYING'				=> 'Græder',
	'SMILIES_EMARRASSED'			=> 'Flov',
	'SMILIES_EVIL'					=> 'Vred',
	'SMILIES_EXCLAMATION'			=> 'Udråbstegn',
	'SMILIES_GEEK'					=> 'Nørd',
	'SMILIES_IDEA'					=> 'Idé',
	'SMILIES_LAUGHING'				=> 'Ler',
	'SMILIES_MAD'					=> 'Ond',
	'SMILIES_MR_GREEN'				=> 'Hr. Grøn',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Spørgsmåltegn',
	'SMILIES_RAZZ'					=> 'Ivrig',
	'SMILIES_ROLLING_EYES'			=> 'Rullende øjne',
	'SMILIES_SAD'					=> 'Trist',
	'SMILIES_SHOCKED'				=> 'Chokeret',
	'SMILIES_SMILE'					=> 'Smil',
	'SMILIES_SURPRISED'				=> 'Overrasket',
	'SMILIES_TWISTED_EVIL'			=> 'Meget ond',
	'SMILIES_UBER_GEEK'				=> 'Totalnørd',
	'SMILIES_VERY_HAPPY'			=> 'Meget glad',
	'SMILIES_WINK'					=> 'Blink',

	'TOPICS_TOPIC_TITLE'			=> 'Velkommen til phpBB3',
));

?>