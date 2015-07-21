<?php
/**
*
* acp_board [Italian]
*
* @package language
* @version $Id: board.php,v 1.89 2007/07/19 20:37:52 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @ translation by phpbb.it last revised 2007/08/20 00:15:00
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
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Qui puoi impostare le funzioni base della tua board, dargli un nome appropriato ed una descrizione adeguata. Fra le altre opzioni puoi regolare i valori predefiniti per il fuso orario e per la lingua.',
	'CUSTOM_DATEFORMAT'				=> 'Personalizzato…',
	'DEFAULT_DATE_FORMAT'			=> 'Formato della data',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Il formato data è lo stesso della funzione <code>data</code> del PHP.',
	'DEFAULT_LANGUAGE'				=> 'Lingua predefinita',
	'DEFAULT_STYLE'					=> 'Stile predefinito',
	'DISABLE_BOARD'					=> 'Disabilita la board',
	'DISABLE_BOARD_EXPLAIN'			=> 'Questa opzione renderà la board non disponibile per gli utenti. Qualora lo desiderassi puoi lasciare un breve messaggio di spiegazione (non deve superare i 255 caratteri).',
	'OVERRIDE_STYLE'				=> 'Annulla lo stile dell’utente',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Sostituisce lo stile dell’utente con quello predefinito.',
	'SITE_DESC'						=> 'Descrizione del sito',
	'SITE_NAME'						=> 'Nome del sito',
	'SYSTEM_DST'					=> 'Abilita ora legale',
	'SYSTEM_TIMEZONE'				=> 'Fuso orario del sistema',
	'WARNINGS_EXPIRE'				=> 'Durata dell’avvertimento',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Puoi decidere il numero di giorni che devono trascorrere prima che l’avvertimento scompaia automaticamente dalla documentazione dell’utente.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Qui puoi abilitare/disabilitare diverse caratteristiche.',

	'ALLOW_ATTACHMENTS'			=> 'Abilita gli allegati',
 	'ALLOW_BIRTHDAYS'			=> 'Abilita i compleanni',
 	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Dà la possibilità di inserire la data del complenno e di visualizzare l’età nel profilo utente. Nota Bene: questa impostazione non è quella che controlla la visualizzazione della lista compleanni nell’indice.',
	'ALLOW_BOOKMARKS'			=> 'Abilita i segnalibri per gli argomenti',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'L’utente può memorizzare dei segnalibri per ritrovare facilmente degli argomenti di interesse',
	'ALLOW_BBCODE'				=> 'Abilita i BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Abilita la sottoscrizione ai forum',
	'ALLOW_NAME_CHANGE'			=> 'Abilita il cambio nome utente',
	'ALLOW_NO_CENSORS'			=> 'Permetti la disabilitazione censura parole',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Gli utenti possono scegliere se disabilitare la funzione automatica per la censura delle parole, sia nei messaggi pubblici che nei messaggi privati.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Abilita gli allegati nei messaggi privati',
	'ALLOW_SIG'					=> 'Abilita le firme',
	'ALLOW_SIG_BBCODE'			=> 'Abilita i BBCode nelle firme degli utenti',
	'ALLOW_SIG_FLASH'			=> 'Abilita l’uso del BBCode <code>[FLASH]</code> nelle firme degli utenti',
	'ALLOW_SIG_IMG'				=> 'Abilita l’uso del BBCode <code>[IMG]</code> nelle firme degli utenti',
	'ALLOW_SIG_LINKS'			=> 'Abilita l’inserimento di collegamenti nelle firme degli utenti',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Se disabilitato, il BBcode <code>[URL]</code> e gli URL automatici non sono attivi.',
	'ALLOW_SIG_SMILIES'			=> 'Abilita l’inserimento delle emoticon nelle firme degli utenti',
	'ALLOW_SMILIES'				=> 'Abilita le emoticon',
	'ALLOW_TOPIC_NOTIFY'		=> 'Abilita la sottoscrizione agli argomenti',
	'BOARD_PM'					=> 'Messaggi privati',
	'BOARD_PM_EXPLAIN'			=> 'Abilita o disabilita l’uso dei messaggi privati per tutti gli utenti.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Gli avatar sono immagini generalmente piccole che un utente può associare a sè stesso. A seconda dello stile in uso vengono visualizzati solitamente sotto il nome utente, di fianco ai messaggi. Da qui regoli le impostazioni e le modalità di utilizzo avatar degli utenti. Per permettere il caricamento degli avatar devi aver creato sul server un’apposita cartella che abbia adeguati permessi di scrittura. I limiti per le dimensioni dei file sono impostabili solo per gli avatar caricati sulla board e non per le immagini caricate da remoto.',

	'ALLOW_LOCAL'					=> 'Abilita la galleria avatar',
	'ALLOW_REMOTE'					=> 'Abilita gli avatar remoti',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatar memorizzati su un altro sito web',
	'ALLOW_UPLOAD'					=> 'Abilita l’upload degli avatar',
	'AVATAR_GALLERY_PATH'			=> 'Percorso della galleria avatar',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Il percorso dalla root del phpbb alla cartella contenente le immagini precaricate, es. <samp>images/avatars/gallery</samp>',
	'AVATAR_STORAGE_PATH'			=> 'Percorso di salvataggio avatar',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Il percorso dalla root del phpbb alla cartella dove verranno memorizzati gli avatar, es. <samp>images/avatars/upload</samp>',
	'MAX_AVATAR_SIZE'				=> 'Dimensioni massime avatar',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Altezza per larghezza in pixel',
	'MAX_FILESIZE'					=> 'Dimensione massima file avatar',
	'MAX_FILESIZE_EXPLAIN'			=> 'Per i file avatar caricati',
	'MIN_AVATAR_SIZE'				=> 'Dimensioni minime avatar',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Altezza per larghezza in pixel',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Da qui puoi impostare tutte le funzioni predefinite per i messaggi privati',

	'ALLOW_BBCODE_PM'			=> 'Abilita BBCode nei messaggi privati',
	'ALLOW_FLASH_PM'			=> 'Abilita l’uso del tag BBcode <code>[FLASH]</code> nei messaggi privati',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Tieni presente che la possibilità di usare flash nei messaggi privati, se abilitata qui, dipende anche dalla gestione permessi.',
	'ALLOW_FORWARD_PM'			=> 'Abilita messaggi privati',
	'ALLOW_IMG_PM'				=> 'Abilita l’uso del tag BBcode <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Abilita invio di messaggi privati a utenti multipli ed a gruppi',
	'ALLOW_PRINT_PM'			=> 'Abilita la versione stampabile dei messaggi privati',
	'ALLOW_QUOTE_PM'			=> 'Abilita le citazioni nei messaggi privati',
	'ALLOW_SIG_PM'				=> 'Abilita la firma nei messaggi privati',
	'ALLOW_SMILIES_PM'			=> 'Abilita le emoticon nei messaggi privati',
	'BOXES_LIMIT'				=> 'Limite massimo di messaggi privati per cartella',
	'BOXES_LIMIT_EXPLAIN'		=> 'Gli utenti non potranno ricevere più di questo numero di messaggi privati. Imposta su 0 per permettere un numero di messaggi illimitato.',
	'BOXES_MAX'					=> 'Limite massimo di cartelle per i messaggi privati',
	'BOXES_MAX_EXPLAIN'			=> 'Di default gli utenti possono creare più cartelle personali per i propri messaggi privati.',
	'ENABLE_PM_ICONS'			=> 'Abilita l’uso delle icone argomenti per i messaggi privati',
	'FULL_FOLDER_ACTION'		=> 'Azione predefinita in caso di cartella piena',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Qualunque sia l’azione prescelta (o meno) dall’utente, in caso di cartella dei messaggi privati piena, questa è l’azione che viene svolta. L’unica eccezione è per la cartella dei messaggi inviati, dove l’azione predefinita è sempre quella di eliminare i vecchi messaggi.',
	'HOLD_NEW_MESSAGES'			=> 'Trattieni i nuovi messaggi',
	'PM_EDIT_TIME'				=> 'Limite di tempo per modifica',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Limite di tempo disponibile per modificare un messaggio privato non ancora consegnato. Impostando il valore su 0 si disabilita questa possibilità.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Qui puoi regolare tutte le impostazioni predefinite per i messaggi.',
	'ALLOW_POST_LINKS'					=> 'Abilita i collegamenti nei messaggi pubblici e nei messaggi privati',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Se disabilitato, il BBcode <code>[URL]</code> e gli URL automatici sono disabilitati.',
	'ALLOW_POST_FLASH'					=> 'Abilita l’uso del BBCode <code>[FLASH]</code> nei messaggi',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Se disabilitato, il BBcode <code>[FLASH]</code> non sarà abilitato nei messaggi. In alternativa il sistema dei permessi controlla quali utenti possono usare il tag BBCode <code>[FLASH]</code>.',
	
	'BUMP_INTERVAL'					=> 'Intervallo del bump',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Numero di minuti, ore o giorni trascorsi fra l’ultimo messaggio di un argomento e la possibilità di spostarlo in cima.',
	'CHAR_LIMIT'					=> 'Numero massimo di caratteri per messaggio',
	'CHAR_LIMIT_EXPLAIN'			=> 'Numero massimo di caratteri permessi in un messaggio. Imposta su 0 per numero di caratteri illimitato.',
	'DISPLAY_LAST_EDITED'			=> 'Visualizza informazioni sull’ultima modifica',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Scegli se visualizzare informazioni sull’ultima modifica di un messaggio',
	'EDIT_TIME'						=> 'Limite tempo modifica',
	'EDIT_TIME_EXPLAIN'				=> 'Limite di tempo disponibile per modificare un nuovo messaggio. Impostando su 0 si disabilita questa azione.',
	'FLOOD_INTERVAL'				=> 'Intervallo del flood',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Numero di secondi di attesa tra un messaggio e l’altro. Per permettere agli utenti di ignorare questa funzione devi modificarne i permessi.',
	'HOT_THRESHOLD'					=> 'Limite messaggi popolari',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Numero di messaggi richiesto per rendere un messaggio popolare. Imposta su 0 per disabilitare i messaggi popolari.',
	'MAX_POLL_OPTIONS'				=> 'Numero massimo di opzioni per sondaggio',
	'MAX_POST_FONT_SIZE'			=> 'Grandezza massima del carattere per messaggio',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Grandezza massima consentita per i caratteri dei messaggi. Imposta su 0 per dimensione carattere illimitata.',
	'MAX_POST_IMG_HEIGHT'			=> 'Altezza massima immagini per messaggio',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Altezza massima di un’immagine o file flash nei messaggi. Imposta su 0 per dimensione illimitata.',
	'MAX_POST_IMG_WIDTH'			=> 'Larghezza massima immagini per messaggio',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Larghezza massima di un’immagine o file flash nei messaggi. Imposta su 0 per dimensione illimitata.',
	'MAX_POST_URLS'					=> 'Link massimi per messaggio',
	'MAX_POST_URLS_EXPLAIN'			=> 'Numero massimo di URL in un argomento. Imposta su 0 per numero di link illimitato.',
	'POSTING'						=> 'Invio messaggi',
	'POSTS_PER_PAGE'				=> 'Messaggi per pagina',
	'QUOTE_DEPTH_LIMIT'				=> 'Limite massimo di citazioni annidate per messaggio',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Numero massimo di citazioni concatenate per messaggio. Imposta su 0 per profondità illimitata.',
	'SMILIES_LIMIT'					=> 'Limite massimo di smilies per messaggio',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Numero limite di smilies per messaggio. Imposta su 0 per numero di smilies illimitato.',
	'TOPICS_PER_PAGE'				=> 'Argomenti per pagina',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Qui puoi impostare tutti i parametri per le firme.',

	'MAX_SIG_FONT_SIZE'				=> 'Dimensione massima del carattere in firma',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Dimensione massima consentita per lo spazio firme utenti. Impostare su 0 per dimensione illimitata.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Altezza massima immagini in firma',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Altezza massima consentita per un’immagine o file flash nello spazio firma utente. Imposta su 0 per altezza illimitata.',
	'MAX_SIG_IMG_WIDTH'				=> 'Larghezza massima immagini in firma',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Larghezza massima consentita per un’immagine o file flash nello spazio firma utente. Imposta su 0 per larghezza illimitata.',
	'MAX_SIG_LENGTH'				=> 'Lunghezza massima firma',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Numero massimo di caratteri per la firma degli utenti.',
	'MAX_SIG_SMILIES'				=> 'Numero massimo di smilies per firma',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Numero massimo di smilies consentiti per la firma degli utenti. Imposta su 0 per numero di smilies illimitato.',
	'MAX_SIG_URLS'					=> 'Numero massimo di link per firma',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Numero massimo di link consentiti per la firma degli utenti. Imposta su 0 per numero illimitato di link.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Qui puoi definire le impostazioni relative alla registrazione e al profilo',

	'ACC_ACTIVATION'			=> 'Attivazione account',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Stabilisce se gli utenti hanno accesso immediato alla board oppure se è richiesta una conferma. Puoi anche disabilitare completamente le nuove registrazioni.',
	'ACC_ADMIN'					=> 'Amministratore',
	'ACC_DISABLE'				=> 'Disabilitato',
	'ACC_NONE'					=> 'Nessuno',
	'ACC_USER'					=> 'Utente',
//	'ACC_USER_ADMIN'			=> 'Utente + Amministratore',
	'ALLOW_EMAIL_REUSE'			=> 'Consenti riutilizzo indirizzo e-mail',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Abilitando questa funzione si consente a utenti diversi di registrarsi con lo stesso indirizzo e-mail.',
	'COPPA'						=> 'Impostazioni reg. Minore (COPPA)',
	'COPPA_FAX'					=> 'Numero di fax per reg. Minore',
	'COPPA_MAIL'				=> 'Indirizzo postale per reg. Minore',
	'COPPA_MAIL_EXPLAIN'		=> 'Questo è l’indirizzo al quale i genitori devono spedire il modulo di registrazione per gli utenti minorenni.',
	'ENABLE_COPPA'				=> 'Abilita reg. Minore',
	'ENABLE_COPPA_EXPLAIN'		=> 'Richiede agli utenti di dichiarare se hanno più o meno di 13 anni. Se questa funzione è disabilitata il gruppo reg. Minore non verra più visualizzato.',
	'MAX_CHARS'					=> 'Massimo',
	'MIN_CHARS'					=> 'Minimo',
	'NO_AUTH_PLUGIN'			=> 'Nessun plugin di autorizzazione idoneo trovato.',
	'PASSWORD_LENGTH'			=> 'Lunghezza password',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Numero minimo e massimo di caratteri per la password.',
	'REG_LIMIT'					=> 'Tentativi di registrazione',
	'REG_LIMIT_EXPLAIN'			=> 'Numero di tentativi che un utente può fare, al momento della conferma del codice di registrazione, prima che la sessione venga bloccata.',
	'USERNAME_ALPHA_ONLY'		=> 'Solo alfanumerico',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumerico e spaziature',
	'USERNAME_ASCII'			=> 'ASCII (non international unicode)',
	'USERNAME_LETTER_NUM'		=> 'Qualsiasi lettera e numero',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Qualsiasi lettera, numero e spaziatura',
	'USERNAME_CHARS'			=> 'Limite caratteri nome utente',
	'USERNAME_CHARS_ANY'		=> 'Qualsiasi carattere',
	'USERNAME_CHARS_EXPLAIN'	=> 'Restringe il tipo di caratteri che possono essere usati per i nomi utente; gli spazi sono spazio, -, +, _, [ e ].',
	'USERNAME_LENGTH'			=> 'Lunghezza nome utente',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Numero minimo e massimo di caratteri consentiti per i nomi utente.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Qui puoi definire le impostazioni predefinite per la conferma visuale ed il Codice Conferma Visuale.',

	'CAPTCHA_GD'							=> 'GD Codice Conferma Visuale',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD Disturbo in primo piano del Codice Conferma Visuale',
	'CAPTCHA_GD_EXPLAIN'					=> 'Usa GD per ottenere un Codice Conferma Visuale più avanzato.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Usa il disturbo in primo piano per rendere più difficile il Codice Conferma Visuale.',
	'CAPTCHA_GD_X_GRID'						=> 'GD Disturbo dello sfondo del Codice Conferma Visuale asse-x',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Usa un’impostazione bassa per rendere più difficile il Codice Conferma Visuale. 0 disabiliterà il disturbo sull’asse-x dello sfondo.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD Distorsione dello sfondo del Codice Conferma Visuale asse-y',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Usa un’impostazione bassa per rendere più difficile il Codice Conferma Visuale. 0 disabiliterà il disturbo sull’asse-y dello sfondo.',

	'CAPTCHA_PREVIEW_MSG'					=> 'Le tue modifiche nell’impostazione della conferma visuale non sono state salvate. Questa è solo un’anteprima.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Ecco il Codice di Conferma Visuale come si presenta usando le impostazioni correnti. Usa il pulsante per l’anteprima per aggiornare. I Codici per la Conferma Visuale sono casuali, perciò risulteranno diversi fra una visualizzazione e l’altra.',
	'VISUAL_CONFIRM_POST'					=> 'Abilita conferma visuale per i messaggi degli ospiti',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Richiede agli utenti anonimi di inserire un codice casuale raffigurato da un’immagine al fine di prevenire messaggi di massa.',
	'VISUAL_CONFIRM_REG'					=> 'Abilita conferma visuale per le registrazioni',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Richiede ai nuovi utenti di inserire un codice casuale raffigurato da un’immagine al fine di prevenire registrazioni di massa.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Questi dettagli definiscono i dati utilizzati per inviare i cookie ai browser dei tuoi utenti. In molti casi l’impostazione predefinita è sufficiente. Se devi cambiare queste impostazioni fallo con attenzione: impostazioni errate potrebbero impedire agli utenti di effettuare l’accesso.',

	'COOKIE_DOMAIN'				=> 'Dominio cookie',
	'COOKIE_NAME'				=> 'Nome cookie',
	'COOKIE_PATH'				=> 'Percorso cookie',
	'COOKIE_SECURE'				=> 'Cookie sicuri',
	'COOKIE_SECURE_EXPLAIN'		=> 'Se il tuo server funziona via SSL abilita questo modulo, altrimenti lascialo disabilitato. Se abilitato in assenza di SSL risulterà un errore nel server durante i reindirizzamenti.',
	'ONLINE_LENGTH'				=> 'Visualizza lasso tempo online',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Numero di minuti dopo i quali gli utenti inattivi non appariranno più nella lista “Chi c’è in linea”. Più alto è questo valore e più grande sarà il processo richiesto per generare la lista.',
	'SESSION_LENGTH'			=> 'Lunghezza sessione',
	'SESSION_LENGTH_EXPLAIN'	=> 'La sessione scadrà dopo questo lasso di tempo, in secondi.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Qui puoi abilitare o disabilitare alcune funzioni della board per ridurre l’ammontare dei processi richiesti. Sulla maggior parte dei server non c’è bisogno di disabilitare alcuna funzione. Tuttavia in alcuni sistemi o ambienti condivisi può essere consigliato disabilitare ciò di cui non hai bisogno. Puoi anche stabilire dei limiti al caricamento del sistema ed alle sessioni attive oltre i quali la board andrà offline.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Campi profilo personalizzati',
	'LIMIT_LOAD'					=> 'Limita caricamento del sistema',
	'LIMIT_LOAD_EXPLAIN'			=> 'Se il limite per caricamento del sistema eccede il valore impostato, entro un minuto la board andrà automaticamente offline. Il valore di 1.0 equivale al ~100% di utilizzo di un processore. Questo funziona solo sui server che si basano su UNIX e dove questa informazione è accessibile. Il valore si reimposta sullo 0 se phpBB non è in grado di raggiungere il limite di caricamento.',
	'LIMIT_SESSIONS'				=> 'Limita sessioni',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Se il numero delle sessioni eccede questo valore, entro un minuto la board andrà offline. Imposta su 0 per sessioni illimitate.',
	'LOAD_CPF_MEMBERLIST'			=> 'Permetti ai temi di visualizzare i campi personalizzati nel profilo nella lista utenti',
	'LOAD_CPF_VIEWPROFILE'			=> 'Visualizza i campi personalizzati nel profilo degli utenti',
	'LOAD_CPF_VIEWTOPIC'			=> 'Visualizza i campi personalizzati nelle pagine degli argomenti',
	'LOAD_USER_ACTIVITY'			=> 'Visualizza attività degli utenti',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Visualizza argomenti o forum attivi nel pannello di controllo del profilo utenti. Si raccomanda di disabilitare questa funzione su forum con più di un milione di messaggi.',
	'RECOMPILE_STYLES'				=> 'Ottimizza i componenti degli stili',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Cerca gli aggiornamenti dei file degli stili sul filesystem e li ottimizza.',
	'YES_ANON_READ_MARKING'			=> 'Abilita marcatura argomenti per gli ospiti',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Conserva le informazioni riguardanti i messaggi letti e da leggere per gli ospiti. Se disabilitata i messaggi risulteranno sempre come letti per gli ospiti.',
	'YES_BIRTHDAYS'					=> 'Abilita lista compleanni',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Se disabilitata, la lista compleanni non sarà più visualizzata. Perchè questa impostazione abbia effetto anche l’altra opzione compleanni deve essere attivata.',
	'YES_JUMPBOX'					=> 'Abilita visualizzazione jumpbox',
	'YES_MODERATORS'				=> 'Abilita visualizzazione dei moderatori',
	'YES_ONLINE'					=> 'Abilita lista utenti online',
	'YES_ONLINE_EXPLAIN'			=> 'Visualizza informazioni sugli utenti online nell’indice, nei forum e nelle pagine degli argomenti.',
	'YES_ONLINE_GUESTS'				=> 'Abilita lista ospiti online in "Chi c’è in linea"',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Permette di visualizzare informazioni riguardanti gli ospiti online in "Chi c’è in linea".',
	'YES_ONLINE_TRACK'				=> 'Abilita visualizzazione degli utenti online/offline',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Visualizza informazioni online per gli utenti, nei profili e nelle pagine degli argomenti.',
	'YES_POST_MARKING'				=> 'Abilita argomenti contrassegnati',
	'YES_POST_MARKING_EXPLAIN'		=> 'Indica se un utente ha scritto un messaggio in un argomento.',
	'YES_READ_MARKING'				=> 'Abilita segnalazione argomenti lato server',
	'YES_READ_MARKING_EXPLAIN'		=> 'Conserva le informazioni sullo stato dei messaggi letti e da leggere nel database anzichè nei cookie.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'PhpBB supporta plug-in di autenticazione o moduli. Questo ti permette di stabilire come gli utenti vengono autenticati quando accedono alla board. Ci sono tre plug-in predefinit: DB, LDAP e Apache. Non tutti i metodi richiedono informazioni addizionali per cui basta riempire i campi, se sono rilevanti per il metodo selezionato.',

	'AUTH_METHOD'				=> 'Seleziona un metodo di autenticazione',

	'APACHE_SETUP_BEFORE_USE'	=> 'Devi impostare l’autenticazione Apache prima di cambiare phpBB verso questo metodo di autenticazione. Ricordati che il nome utente che usi per l’autenticazione Apache deve essere uguale al tuo nome utente per phpBB. L’autenticazione Apache può essere usata solo con mod_php (non con una versione CGI ) e con il safe_mode disabilitato.',

	'LDAP_DN'						=> '<var>dn</var> a base LDAP',
	'LDAP_DN_EXPLAIN'				=> 'Questo è il Distinguished Name che localizza le informazioni utente, es. <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'Attributo e-mail LDAP',
	'LDAP_EMAIL_EXPLAIN'			=> 'Imposta con il nome del tuo accesso e-mail (se ne esite uno) in modo da impostare automaticamente gli indirizzi e-mail dei nuovi utenti . Lasciando vuoto risulterà un campo indirizzo e-mail vuoto per gli utenti che fanno log in per la prima volta.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Connessione al server LDAP fallita con user/password specificati.',
	'LDAP_NO_EMAIL'					=> 'L’attributo e-mail specificato non esiste.',
	'LDAP_NO_IDENTITY'				=> 'Impossibile trovare identità di connessione per %s.',
	'LDAP_PASSWORD'					=> 'Password LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Lascia vuoto per usare un accesso anonimo. Oppure compila con la password per l’utente sopra specificato. Obbligatorio per server Active Directory. <strong>ATTENZIONE:</strong> Questa password verrà memorizzata come testo chiaro nel database e visibile a tutti coloro che possono accedere al tuo database o a questa pagina di configurazione.',
	'LDAP_PORT'						=> 'Porta del server LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'Qui puoi inserire il numero di una porta da usare per la connessione al server LDAP in alternativa alla porta predefinita (389).',
	'LDAP_SERVER'					=> 'Nome del server LDAP',
	'LDAP_SERVER_EXPLAIN'			=> 'Se si usa LDAP questo è il nome o indirizzo IP del server. Puoi anche specificare un URL tipo ldap://hostname:port/',
	'LDAP_UID'						=> '<var>uid</var> LDAP',
	'LDAP_UID_EXPLAIN'				=> 'Questa è la chiave sotto cui cercare una certa identità per la connessione, es. <var>uid</var>, <var>sn</var>, ecc.',
	'LDAP_USER'						=> 'Utente LDAP <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Lascia vuoto per usare un accesso anonimo. Se invece viene inserito un dato, phpBB cercherà di connettersi al server LDAP con i dati dell’utente specificato o i tentativi di login effettuati, ad esempio <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Obbligatorio per server Active Directory.',
	'LDAP_USER_FILTER'				=> 'Filtro utente LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Hai l’opzione di limitare ulteriormente gli oggetti ricercati con filtri addizionali. Ad esempio <samp>objectClass=posixGroup</samp> porterà all’utilizzo di <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Qui definisci le impostazioni dipendenti dal server e dal dominio. Assicurati che i dati inseriti siano esatti, eventuali errori risulteranno nelle e-mail che conterranno informazioni inesatte. Quando inserisci il nome del dominio ricordati di includere http:// o altro protocollo. Cambia il numero della porta solo se sei sicuro che il server usa un valore differente, la porta 80 è corretta nella maggioranza dei casi.',

	'ENABLE_GZIP'				=> 'Abilita compressione GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'Il contenuto generato sarà compresso prima di essere inviato all’utente. Questo può ridurre il traffico di rete ma aumenterà anche l’utilizzo di CPU, sia sul server che lato client.',
	'FORCE_SERVER_VARS'			=> 'Forza impostazioni URL del server',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Se impostato su SI le impostazioni del server qui definite saranno usate per i valori automaticamente determinati.',
	'ICONS_PATH'				=> 'Percorso salvataggio icone dei messaggi',
	'ICONS_PATH_EXPLAIN'		=> 'Il percorso dalla root del phpBB, es. <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Impostazioni percorso',
	'RANKS_PATH'				=> 'Percorso salvataggio ranks',
	'RANKS_PATH_EXPLAIN'		=> 'Il percorso dalla root del phpBB, es. <samp>images/ranks</samp>',
	'SCRIPT_PATH'				=> 'Percorso script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Percorso in cui è situato phpBB, relativo al nome del dominio, es. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Nome del dominio',
	'SERVER_NAME_EXPLAIN'		=> 'Nome del dominio da cui lanci la board (per esempio: <samp>www.foo.bar</samp>).',
	'SERVER_PORT'				=> 'Porta del server',
	'SERVER_PORT_EXPLAIN'		=> 'La porta del tuo server, di solito 80. Cambiala solo se è diversa.',
	'SERVER_PROTOCOL'			=> 'Protocollo del server',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Questo verrà usato come protocollo del server se queste impostazioni saranno forzate. Se vuoto o non forzato il protocollo sarà determinato dalle impostazioni cookie sicuri (<samp>http://</samp> o <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'		=> 'Impostazioni server URL',
	'SMILIES_PATH'				=> 'Percorso salvataggio smilies',
	'SMILIES_PATH_EXPLAIN'		=> 'Il percorso dalla root del phpBB, es. <samp>images/smilies</samp>',
	'UPLOAD_ICONS_PATH'			=> 'Percorso salvataggio icone gruppo',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Il percorso dalla root del phpBB, es. <samp>images/upload_icons</samp>',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Qui puoi definire le impostazioni della sessione e della connessione.',

	'ALL'							=> 'Tutto',
	'ALLOW_AUTOLOGIN'				=> 'Permetti connessioni automatiche', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Determina se viene data la possibilità di connettersi automaticamente quando si visita la board.', 
	'AUTOLOGIN_LENGTH'				=> 'Durata connessione automatica (in giorni)', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Numero di giorni oltre il quale scade la sessione di auto-connessione. Inserisci un numero valido per attivarlo. Lascia 0 se non lo vuoi attivare.', 
	'BROWSER_VALID'					=> 'Convalida browser',
	'BROWSER_VALID_EXPLAIN'			=> 'Permette la convalida del browser per ogni sessione aumentandone la sicurezza.',
	'CHECK_DNSBL'					=> 'Controllo IP tramite DNS Blackhole List',
	'CHECK_DNSBL_EXPLAIN'			=> 'Se abilitato l’indirizzo IP di un utente viene controllato tramite il seguente servizio DNSBL nelle registrazioni e nei messaggi: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> and <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Questo controllo impiega tempo, a seconda della configurazione del server. Se vengono rilevati rallentamenti o falsi positivi si raccomada di disabilitare questo controllo.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Controlla dominio e-mail per convalida MX record',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Se abilitato, il dominio e-mail fornito al momento della registrazione o al cambio profilo verrà controllato per convalida MX record.',
	'FORCE_PASS_CHANGE'				=> 'Forza cambio password',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Richiede all’utente di cambiare la propria password dopo un determinato numero di giorni. Impostando 0 si disabilita l’opzione.',
	'FORWARDED_FOR_VALID'			=> 'Convalida intestazione <var>X_FORWARDED_FOR</var>',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Le sessioni saranno continuate soltanto se l’intestazione trasmessa <var>X_FORWARDED_FOR</var> è uguale a quella inviata con la precedente richiesta. Anche i ban saranno controllati tramite IP in <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Convalida sessione IP',
	'IP_VALID_EXPLAIN'				=> 'Determina quanto dell’IP utente viene usato per convalidare una sessione; <samp>Tutto</samp>: confronta l’indirizzo completo; <samp>A.B.C</samp> il primo x.x.x; <samp>A.B</samp> il primo x.x, <samp>Nessuno</samp>: disabilita controllo. Sugli indirizzi IPv6 <samp>A.B.C</samp> confronta i primi 4 blocchi e <samp>A.B</samp> i primi 3 blocchi.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Numero massimo di tentativi per login',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Dopo questo numero di tentativi di connessione falliti l’utente dovrà ulteriormente confermare il proprio accesso con l’ausilio della conferma visuale.',
	'NO_IP_VALIDATION'				=> 'Nessuno',
	'PASSWORD_TYPE'					=> 'Complessità password',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Determina quanto complessa deve essere una password quando la si imposta o la si modifica. Le opzioni successive includono quelle precedenti.',
	'PASS_TYPE_ALPHA'				=> 'Deve contenere lettere e numeri',
	'PASS_TYPE_ANY'					=> 'Nessun requisito',
	'PASS_TYPE_CASE'				=> 'Deve essere mista',
	'PASS_TYPE_SYMBOL'				=> 'Deve contenere simboli',
	'TPL_ALLOW_PHP'					=> 'Permetti php negli stili',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Se queste opzioni sono disabilitate, <code>PHP</code> e <code>INCLUDEPHP</code> , le dichiarazioni saranno riconosciute ed analizzate negli stili.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Questa informazione viene usata quando la board invia e-mail ai propri utenti. Assicurati che che l’indirizzo e-mail specificato sia valido; ogni messaggio respinto o non consegnato verrà inviato a questo indirizzo. Se il tuo server non fornisce servizio e-mail (basato su PHP) puoi in alternativa inviare messaggi direttamente via SMTP. Questo richiede l’indirizzo di un server appropriato (chiedi al tuo provider, se necessario). Non specificare nomi vecchi qui! Se il server richiede autenticazione (e solo se lo fa) inserire nome utente e password. Si noti che si offrono solo autenticazioni di base, autenticazioni diverse non sono ancora supportate.',

	'ADMIN_EMAIL'					=> 'Indirizzo di ritorno e-mail',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Questo indirizzo e-mail verrà usato come indirizzo di ritorno per tutte le e-mail, ovvero come indirizzo del contatto tecnico. Verrà sempre usato come indirizzo e-mail <samp>Percorso-Ritorno</samp> e <samp>Mittente</samp> nelle e-mail.',
	'BOARD_EMAIL_FORM'				=> 'Messaggistica e-mail attraverso board',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Anzichè visualizzare gli indirizzi e-mail gli utenti possono utilizzare la board per inviarsi e-mail.',
	'BOARD_HIDE_EMAILS'				=> 'Nascondi indirizzi e-mail',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Questa funzione permette di mantenere privati gli indirizzi e-mail.',
	'CONTACT_EMAIL'					=> 'Contatta indirizzo e-mail',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Questo indirizzo verrà usato ogni volta che è richiesto un contatto specifico, es. spam, error output, ecc. Verrà sempre usato come indirizzo e-mail <samp>Da</samp> e <samp>Rispondi-a</samp> nelle e-mail.',
	'EMAIL_FUNCTION_NAME'			=> 'Nome funzione e-mail',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Funzione e-mail usata per spedire mail attraverso PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Dimensione pacchetto e-mail',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Questo è il numero delle e-mail spedite in un pacchetto.',
	'EMAIL_SIG'						=> 'Firma nelle e-mail',
	'EMAIL_SIG_EXPLAIN'				=> 'Questo testo verrà allegato ad ogni e-mail spedita dalla board.',
	'ENABLE_EMAIL'					=> 'Abilita l’invio e-mail della board',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Se questa funzione è disabilitata nessuna e-mail verrà spedita tramite la board.',
	'SMTP_AUTH_METHOD'				=> 'Metodo autenticazione per SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Si usa solo se un nome utente o una password sono impostati. Chiedi al tuo provider se non sei sicuro del metodo da usare.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'Password SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Inserisci una password solo se il tuo server SMTP la richiede.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Porta del server SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'Modifica questo parametro solo se sai che il tuo server SMTP si trova su una porta diversa.',
	'SMTP_SERVER'					=> 'Indirizzo server SMTP',
	'SMTP_SETTINGS'					=> 'Impostazioni SMTP',
	'SMTP_USERNAME'					=> 'Nome utente SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'Inserisci un nome utente solo se il tuo server SMTP lo richiede.',
	'USE_SMTP'						=> 'Usa server SMTP per le e-mail',
	'USE_SMTP_EXPLAIN'				=> 'Scegli “Sì” se vuoi o devi inviare e-mail attraverso un server specifico invece che usare la funzione mail locale.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Qui puoi abilitare e controllare l’uso del Jabber per i messaggi privati e per gli avvertimenti. Jabber è un protocollo opensource ed è quindi disponibile per tutti. Alcuni server Jabber includono gateways o transports che permettono di mettersi in contatto con gli utenti su altre reti. Non tutti i server offrono tutti i transports ed i cambiamenti nei protocolli possono impedire ai transports di funzionare. Possono occorrere parecchi secondi per aggiornare i dettagli dell’utenza Jabber, non arrestare prima che lo script sia completato!',

	'ERR_JAB_AUTH'			=> 'Autorizzazione negata su server Jabber.',
	'ERR_JAB_CONNECT'		=> 'Non puoi connetterti al server Jabber.',
	'JAB_ENABLE'				=> 'Abilita Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Abilta l’uso della messaggistica e delle notifiche Jabber.',
	'JAB_PACKAGE_SIZE'			=> 'Dimensione pacchetto Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Questo è il numero dei messaggi spediti in un pacchetto. Se impostato su 0 il messaggio verrà inviato immediatamente e non verrà accodato per invio posticipato.',
	'JAB_PASSWORD'				=> 'Password Jabber',
	'JAB_PORT'					=> 'Porta del Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Lascia in bianco a meno che tu non sappia che la porta non è la 5222.',
	'JAB_SERVER'				=> 'Server Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'Visita %sjabber.org%s per la lista dei server.',
	'JAB_SETTINGS_CHANGED'		=> 'Impostazioni Jabber modificate.',
	'JAB_USE_SSL'				=> 'Usa SSL per connettere',
	'JAB_USE_SSL_EXPLAIN'		=> 'Se attivato cercherà di stabilire una connessione sicura. La porta Jabber sarà modificata a 5223 se la 5222 viene specificata.',
	'JAB_USERNAME'				=> 'Nome utente Jabber',
	'JAB_USERNAME_EXPLAIN'		=> 'Specifica un nome utente registrato. Il nome utente non sarà controllato per vedere se è valido.',
));

?>