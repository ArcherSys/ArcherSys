<?php
/**
*
* acp_board [Slovak]
*
* @package language
* @version $Id: board.php,v 1.89 2007/07/19 20:37:52 acydburn Exp $
* @copyright (c) 2005 phpBB Group
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Tu môžete určovať základné nastavenia vášho fóra, názov fóra a jeho popis, či predvolené hodnoty pre časovú zónu a jazyk.',
	'CUSTOM_DATEFORMAT'				=> 'Vlastný…',
	'DEFAULT_DATE_FORMAT'			=> 'Formát dátumu',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Použitá syntax je totožná s PHP funkciou <code>date</code>.',
	'DEFAULT_LANGUAGE'				=> 'Predvolený jazyk',
	'DEFAULT_STYLE'					=> 'Predvolený vzhľad',
	'DISABLE_BOARD'					=> 'Zablokovať fórum',
	'DISABLE_BOARD_EXPLAIN'			=> 'Týmto zneprístupníte fórum pre používateľov. Môžete tiež zadať krátku správu (255 znakov), ktorá sa im bude zobrazovať.',
	'OVERRIDE_STYLE'				=> 'Nahradiť používateľom zvolený vzhľad',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Použije prednastavený vzhľad namiesto používateľom zvoleného.',
	'SITE_DESC'						=> 'Popis fóra',
	'SITE_NAME'						=> 'Názov fóra',
	'SYSTEM_DST'					=> 'Používať letný čas',
	'SYSTEM_TIMEZONE'				=> 'Časové pásmo fóra',
	'WARNINGS_EXPIRE'				=> 'Trvanie varovania',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Počet dní, ktoré uplynú pred zrušením vydaného varovania pre používateľa.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Tu môžete zapnúť/vypnúť jednotlivé funkcie fóra.',

	'ALLOW_ATTACHMENTS'			=> 'Povoliť prílohy',
	'ALLOW_BIRTHDAYS'			=> 'Povoliť zobrazovanie narodenín',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Povoliť zadávanie narodenín používateľov a zobrazovanie ich veku v profile. Pamätajte, že zobrazovanie zoznamu používateľov, ktorí slávia v daný deň narodeniny, sa povoľuje v nastaveniach zaťaženia servera.',
	'ALLOW_BOOKMARKS'			=> 'Povoliť ukladanie záložiek tém',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Používateľ si môže ukladať osobné záložky.',
	'ALLOW_BBCODE'				=> 'Povoliť značky BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Povoliť sledovanie fóra',
	'ALLOW_NAME_CHANGE'			=> 'Povoliť zmenu používateľského mena',
	'ALLOW_NO_CENSORS'			=> 'Povoliť zrušenie cenzúry',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Používateľ môže zrušiť cenzúru slov v príspevkoch a súkromných správach.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Povoliť prílohy v súkromných správach',
	'ALLOW_SIG'					=> 'Povoliť podpisy',
	'ALLOW_SIG_BBCODE'			=> 'Povoliť značky BBCode v podpisoch používateľov',
	'ALLOW_SIG_FLASH'			=> 'Povoliť použitie značky BBCode <code>[FLASH]</code> v podpisoch používateľov',
	'ALLOW_SIG_IMG'				=> 'Povoliť použitie značky BBCode <code>[IMG]</code> v podpisoch používateľov',
	'ALLOW_SIG_LINKS'			=> 'Povoliť použitie odkazov v podpisoch používateľov',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Ak nie je povolené, značka BBCode <code>[URL]</code> a automatické URL adresy sú zakázané.',
	'ALLOW_SIG_SMILIES'			=> 'Povoliť používanie smajlíkov v podpisoch používateľov',
	'ALLOW_SMILIES'				=> 'Povoliť smajlíky (emotikony)',
	'ALLOW_TOPIC_NOTIFY'		=> 'Povoliť sledovanie témy',
	'BOARD_PM'					=> 'Súkromné správy',
	'BOARD_PM_EXPLAIN'			=> 'Povoliť alebo zakázať súkromné správy pre všetkých používateľov.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Postavičky (avatary) sú vo všeobecnosti malé, jedinečné obrázky, s ktorými je spájaný konkrétny používateľ. V závislosti od vzhľadu sú pri prezeraní tém fóra umiestnené väčšinou pod používateľským menom. Tu môžete nastaviť, ako môžu používatelia definovať svoje postavičky. Pamätajte, že ak chcete umožniť pridávať ďalšie postavičky, je dôležité, aby existoval priečinok uvedený nižšie a aby webový server mohol do neho zapisovať. Limity veľkosti súborov platia iba na odoslané (uploadnuté) obrázky, nevzťahujú sa na externé obrázky.',

	'ALLOW_LOCAL'					=> 'Povoliť galériu postavičiek',
	'ALLOW_REMOTE'					=> 'Povoliť vzdialené obrázky postavičiek',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Obrázky postavičiek prepojené na iný WWW server',
	'ALLOW_UPLOAD'					=> 'Povoliť nahrávanie obrázkov postavičiek',
	'AVATAR_GALLERY_PATH'			=> 'Cesta ku galérii obrázkov postavičiek',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Cesta mimo kmeňový priečinok phpBB pre prednastavené obrázky, napr.: <samp>images/avatars/gallery</samp>',
	'AVATAR_STORAGE_PATH'			=> 'Cesta na ukladanie obrázkov postavičiek ',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Cesta mimo kmeňový priečinok phpBB, napr.: <samp>images/avatars/upload</samp>',
	'MAX_AVATAR_SIZE'				=> 'Maximálne rozmery obrázka postavičky',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'výška x šírka v pixeloch',
	'MAX_FILESIZE'					=> 'Maximálna veľkosť súboru s obrázkom postavičky',
	'MAX_FILESIZE_EXPLAIN'			=> 'Pre odosielané súbory obrázkov postavičiek',
	'MIN_AVATAR_SIZE'				=> 'Minimálne rozmery obrázka postavičky',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'výška x šírka v pixeloch',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Tu môžete meniť nastavenia pre komunikáciu prostredníctvom súkromných správ.',

	'ALLOW_BBCODE_PM'			=> 'Povoliť značky BBCode v súkromných správach',
	'ALLOW_FLASH_PM'			=> 'Povoliť použitie značky BBCode <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Pamätajte, že možnosť použitia flash animácii v súkromných správach, ak je to tu povolené, závisí aj na oprávneniach.',
	'ALLOW_FORWARD_PM'			=> 'Povoliť preposielanie súkromných správ',
	'ALLOW_IMG_PM'				=> 'Povoliť použitie značky BBCode<code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Povoliť posielanie súkromných správ viacerým používateľom a skupinám',
	'ALLOW_PRINT_PM'			=> 'Povoliť ukážku pred tlačou pri súkromných správach',
	'ALLOW_QUOTE_PM'			=> 'Povoliť citácie v súkromných správach',
	'ALLOW_SIG_PM'				=> 'Povoliť podpis v súkromných správach',
	'ALLOW_SMILIES_PM'			=> 'Povoliť smajlíky v súkromných správach',
	'BOXES_LIMIT'				=> 'Maximálny počet súkromných správ na schránku',
	'BOXES_LIMIT_EXPLAIN'		=> 'Používatelia nemôžu prijať viac ako tento počet správ do každej zo svojich osobných schránok. Ak nechcete obmedzovať počet správ, zadajte 0.',
	'BOXES_MAX'					=> 'Maximálny počet priečinkov na súkromné správy',
	'BOXES_MAX_EXPLAIN'			=> 'Používatelia si môžu vytvoriť tu nastavený maximálny počet osobných priečinkov pre súkromné správy.',
	'ENABLE_PM_ICONS'			=> 'Povoliť použiť ikony tém v súkromných správach',
	'FULL_FOLDER_ACTION'		=> 'Predvolená akcia pri plnej schránke',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Predvolená akcia, ktorá sa vykoná, ak je používateľova schránka plná a ak nie je možné použiť akciu nastavenú používateľom. Pre priečinok "Odoslané" je vždy predvolenou akciou odstránenie starých správ.',
	'HOLD_NEW_MESSAGES'			=> 'Pozdržať nové správy',
	'PM_EDIT_TIME'				=> 'Obmedziť dobu upravovania',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Obmedzí dobu, počas ktorej môže používateľ upraviť neodoslanú súkromnú správu. Zadaním hodnoty 0 toto obmedzenie vypnete.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Tu je možné meniť nastavenia pre písanie príspevkov a súkromných správ.',
	'ALLOW_POST_LINKS'					=> 'Povoliť odkazy v príspevkoch a súkromných správach',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Ak nie je povolené, značka BBCode <code>[URL]</code> a automatické URL sú zakázané.',
	'ALLOW_POST_FLASH'					=> 'Povoliť použitie značky BBCode <code>[FLASH]</code> v príspevkoch.',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Ak nie je povolené, značka BBCode <code>[FLASH]</code> je v príspevkoch zakázaná. V opačnom prípade systém oprávnení určuje, ktorí používatelia môžu používať značku BBCode <code>[FLASH]</code>.',

	'BUMP_INTERVAL'					=> 'Interval oživenia',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Počet minút, hodín, či dní od posledného príspevku k téme a možnosťou oživiť (zvýrazniť) túto tému.',
	'CHAR_LIMIT'					=> 'Maximálny počet znakov v príspevku/súkromnej správe',
	'CHAR_LIMIT_EXPLAIN'			=> 'Zadaním hodnoty 0 nastavíte neobmedzený počet znakov.',
	'DISPLAY_LAST_EDITED'			=> 'Zobraziť dátum poslednej úpravy',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Nastaví, či sa má zobrazovať informácia, kedy a kým bol príspevok naposledy upravený',
	'EDIT_TIME'						=> 'Obmedziť dobu upravovania',
	'EDIT_TIME_EXPLAIN'				=> 'Obmedzí dobu, počas ktorej môže používateľ upraviť zatiaľ neodoslaný príspevok. Zadaním hodnoty 0 vypnete obmedzenie.',
	'FLOOD_INTERVAL'				=> 'Ochranný interval',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Počet sekúnd, ktoré musí používateľ počkať, kým bude môcť pridať ďalší príspevok. Ak chcete umožniť používateľom, aby mohli ignorovať toto nastavenie, zmeňte ich oprávnenia.',
	'HOT_THRESHOLD'					=> 'Hranica počtu príspevkov na označenie témy ako populárna',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Počet príspevkov v téme nutných na označenie  témy ako populárna. Nastavením hodnoty 0 vypnete označovanie populárnych tém.',
	'MAX_POLL_OPTIONS'				=> 'Maximálny počet volieb hlasovania',
	'MAX_POST_FONT_SIZE'			=> 'Maximálna veľkosť písma v príspevku',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Zadaním hodnoty 0 nastavíte neobmedzenú veľkosť písma.',
	'MAX_POST_IMG_HEIGHT'			=> 'Maximálna výška obrázka v príspevku',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Maximálna výška obrázka/animácie flash, ktorý je povolené použiť v príspevku. Zadaním hodnoty 0 nastavíte neobmedzenú výšku.',
	'MAX_POST_IMG_WIDTH'			=> 'Maximálna šírka obrázka v príspevku',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Maximálna šírka obrázka/animácie flash, ktorý je povolené použiť v príspevku. Zadaním hodnoty 0 nastavíte neobmedzenú šírku.',
	'MAX_POST_URLS'					=> 'Maximálny počet odkazov v príspevku',
	'MAX_POST_URLS_EXPLAIN'			=> 'Zadaním hodnoty 0 nastavíte neobmedzený počet odkazov.',
	'POSTING'						=> 'Odosielanie',
	'POSTS_PER_PAGE'				=> 'Počet príspevkov na stranu',
	'QUOTE_DEPTH_LIMIT'				=> 'Maximálny počet vnorených citácií v príspevku',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Zadaním hodnoty 0 nastavíte neobmedzený počet citácií.',
	'SMILIES_LIMIT'					=> 'Maximálny počet smajlíkov v príspevku',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Zadaním hodnoty 0 nastavíte neobmedzený počet smajlíkov.',
	'TOPICS_PER_PAGE'				=> 'Počet tém na stranu',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Tu môžete definovať nastavenia pre podpisy',

	'MAX_SIG_FONT_SIZE'				=> 'Maximálna veľkosť písma v podpise',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Maximálna veľkosť písma, ktorú je povolené použiť v podpise. Zadaním hodnoty 0 nastavíte neobmedzenú veľkosť.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Maximálna výška obrázka v podpise',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Maximálna výška obrázka/animácie flash, ktorý je povolené použiť v podpise. Zadaním hodnoty 0 nastavíte neobmedzenú výšku.',
	'MAX_SIG_IMG_WIDTH'				=> 'Maximálna šírka obrázka v podpise',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Maximálna šírka obrázka/animácie flash, ktorý je povolené použiť v podpise. Zadaním hodnoty 0 nastavíte neobmedzenú šírku.',
	'MAX_SIG_LENGTH'				=> 'Maximálna dĺžka podpisu',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Maximálny počet znakov v podpise.',
	'MAX_SIG_SMILIES'				=> 'Maximálny počet smajlíkov v podpise',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Maximálny počet smajlíkov povolených v podpise. Zadaním hodnoty 0 nastavíte neobmedzený počet.',
	'MAX_SIG_URLS'					=> 'Maximálny počet odkazov v podpise',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Maximálny počet odkazov povolených v podpise. Zadaním hodnoty 0 nastavíte neobmedzený počet.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Tu je možné definovať nastavenia pre registráciu a profil',

	'ACC_ACTIVATION'			=> 'Spôsob aktivácie účtu',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Určuje, či má používateľ okamžitý prístup k fóru alebo je ešte vyžadovaná nejaká forma aktivácie. Môžete taktiež úplne zakázať nové registrácie.',
	'ACC_ADMIN'					=> 'Administrátorom',
	'ACC_DISABLE'				=> 'Zakázať',
	'ACC_NONE'					=> 'Žiadna',
	'ACC_USER'					=> 'Používateľom',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Povoliť opätovné použitie e-mailovej adresy',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Viacerí používatelia sa budú môcť zaregistrovať pod jednou e-mailovou adresou.',
	'COPPA'						=> 'Coppa',
	'COPPA_FAX'					=> 'Číslo faxu pre COPPA',
	'COPPA_MAIL'				=> 'Poštová adresa pre COPPA',
	'COPPA_MAIL_EXPLAIN'		=> 'Toto je poštová adresa, kde budú rodičia posielať registračné formuláre COPPA (platí iba v USA)',
	'ENABLE_COPPA'				=> 'Zapnúť COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Vyžaduje od používateľov prehlásenie, že majú 13 a viac rokov. Vyžadované zákonmi USA. Ak je vypnuté, skupiny špecifické pre COPPA sa nebudú zobrazovať.',
	'MAX_CHARS'					=> 'Max.',
	'MIN_CHARS'					=> 'Min.',
	'NO_AUTH_PLUGIN'			=> 'Nebol nájdený vhodný autentifikačný zásuvný modul.',
	'PASSWORD_LENGTH'			=> 'Dĺžka hesla',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Minimálny a maximálny počet znakov v hesle.',
	'REG_LIMIT'					=> 'Počet pokusov o registráciu',
	'REG_LIMIT_EXPLAIN'			=> 'Počet pokusov na zadanie overovacieho kódu. Po vyčerpaní počtu bude relácia uzamknutá.',
	'USERNAME_ALPHA_ONLY'		=> 'Iba alfanumerické znaky',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumerické znaky a medzery ',
	'USERNAME_ASCII'			=> 'ASCII (bez medzinárodného unicode)',
	'USERNAME_LETTER_NUM'		=> 'Akékoľvek písmeno a číslo',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Akékoľvek písmeno, číslo a medzery',
	'USERNAME_CHARS'			=> 'Limit znakov používateľského mena',
	'USERNAME_CHARS_ANY'		=> 'Akýkoľvek znak',
	'USERNAME_CHARS_EXPLAIN'	=> 'Obmedzí druh znakov, ktoré môžu byť použité v používateľskom mene, ako medzery sú chápané; medzera, -, +, _, [ a ]',
	'USERNAME_LENGTH'			=> 'Dĺžka používateľského mena',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Minimálny a maximálny počet znakov v používateľskom mene.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Tu môžete nastaviť možnosti vizuálneho overovania a CAPTCHA.',

	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD CAPTCHA so šumom v popredí',
	'CAPTCHA_GD_EXPLAIN'					=> 'Použiť GD na vytvorenie zložitejšieho obrázku CAPTCHA.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Použiť šum v popredí na sťaženie čitateľnosti obrázkov CAPTCHA vytvorených pomocou GD.',
	'CAPTCHA_GD_X_GRID'						=> 'GD CAPTCHA so šumom na pozadí na osi x',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Použite menšie hodnoty tohto nastavenia na sťaženie čitateľnosti obrázkov CAPTCHA vytvorených pomocou GD. Zadaním hodnoty 0 vypnete šum na pozadí na osi x.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD CAPTCHA so šumom na pozadí na osi y',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Použite menšie hodnoty tohto nastavenia na sťaženie čitateľnosti obrázkov CAPTCHA vytvorených pomocou GD. Zadaním hodnoty 0 vypnete šum na pozadí na osi y.',

	'CAPTCHA_PREVIEW_MSG'					=> 'Vaše zmeny v nastaveniach vizuálneho overovania neboli uložené. Toto je len ukážka.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Takto bude vyzerať CAPTCHA v prípade, že použije aktuálne nastavenia. Ukážku obnovíte kliknutím na tlačidlo Ukážka. Pamätajte, že obrázky sú generované náhodne a pri každom zobrazení sa budú líšiť.',
	'VISUAL_CONFIRM_POST'					=> 'Vizuálne overovanie pre anonymné príspevky',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Vyžaduje od anonymných používateľov zadanie náhodného kódu zo zobrazeného obrázka. Zabraňuje to masovému odosielaniu spamových príspevkov.',
	'VISUAL_CONFIRM_REG'					=> 'Vizuálne overovanie pri registrácii',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Vyžaduje od nových používateľov zadanie náhodného kódu zo zobrazeného obrázka. Zabraňuje to masovému registrovaniu účtov.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Tu je možné nastaviť, čo budú obsahovať súbory cookies odosielané prehliadačom návštevníkov. Vo väčšine prípadov budú stačiť predvolené hodnoty. Ak potrebujete zmeniť niektoré z nastavení, urobte tak s rozvahou, nesprávne nastavenia môžu zabrániť prihlasovaniu používateľov.',

	'COOKIE_DOMAIN'				=> 'Doména pre cookie',
	'COOKIE_NAME'				=> 'Názov cookie',
	'COOKIE_PATH'				=> 'Cesta ku cookie',
	'COOKIE_SECURE'				=> 'Zabezpečenie cookie',
	'COOKIE_SECURE_EXPLAIN'		=> 'Ak váš server beží cez SSL, nastavte túto voľnu na Zapnuté, ak nie, nastavte Vypnuté. Povolenie tejto možnosti pre server, ktorý nebeží cez SSL môže viesť k chybám servera počas presmerovaní.',
	'ONLINE_LENGTH'				=> 'Doba zobrazenia prítomnosti používateľov',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Doba v minútach, po ktorej sa neaktívni používatelia nebudú objavovať v zoznamoch prítomných používateľov. Čím väčšie číslo zadáte, tým náročnejšie bude spracovanie zoznamov.',
	'SESSION_LENGTH'			=> 'Dĺžka platnosti relácie',
	'SESSION_LENGTH_EXPLAIN'	=> 'Relácia stratí platnosť po uplynutí tohto času (v sekundách).',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Tu je možné zapnúť a vypnúť niektoré funkcie fóra, čím je možné zníženie nárokov na server. Na väčšine serverov nie je potrebné vypínať akékoľvek funkcie. Každopádne na niektorých systémoch alebo zdieľaných hostingoch môže byť užitočné vypnúť funkcie, ktoré pre svoje použitie skutočne nepotrebujete. Môžete taktiež stanoviť limity zaťaženia systému a počtu aktívnych relácií, po prekročení ktorých sa fórum odpojí.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Vlastné políčka profilu',
	'LIMIT_LOAD'					=> 'Obmedzenie zaťaženia systému',
	'LIMIT_LOAD_EXPLAIN'			=> 'Ak zaťaženie systému počas jednej minúty prekročí túto hodnotu, fórum sa odpojí. Hodnota 1.0 sa rovná ~100% vyťaženia jedného procesora. Toto funguje iba na UNIXových serveroch. Hodnota sa sama nastaví na hodnotu 0, ak phpBB nemohol dosiahnuť limit zaťaženia.',
	'LIMIT_SESSIONS'				=> 'Obmedzenie relácií',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Ak počet relácií prekročí túto hodnotu počas doby jednej minúty, fórum sa odpojí. Zadaním hodnoty 0 nastavíte neobmedzený počet relácií.',
	'LOAD_CPF_MEMBERLIST'			=> 'Zobrazovať vlastné políčka profilu v zozname používateľov',
	'LOAD_CPF_VIEWPROFILE'			=> 'Zobrazovať vlastné políčka profilu v profiloch používateľov',
	'LOAD_CPF_VIEWTOPIC'			=> 'Zobrazovať vlastné políčka profilu v zobrazeniach tém',
	'LOAD_USER_ACTIVITY'			=> 'Zobrazovať aktivitu používateľov',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Zobrazuje najaktívnejšiu tému/fórum v profile používateľa a Ovládacom paneli používateľa. Odporúča sa vypnúť túto funkciu pri fórach s viac ako milión príspevkami.',
	'RECOMPILE_STYLES'			=> 'Znovu kompilovať staré šablóny',
	'RECOMPILE_STYLES_EXPLAIN'	=> 'Skontroluje zmenené súbory šablón a prekompiluje ich.',
	'YES_ANON_READ_MARKING'			=> 'Povoliť označovanie tém pre anonymných používateľov',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Uchováva informáciu o prečítaných/neprečítaných témach aj pre anonymných používateľov. Ak je toto vypnuté, zobrazujú sa im všetky témy ako prečítané.',
	'YES_BIRTHDAYS'					=> 'Povoliť vypisovanie narodenín',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Ak je vypnuté, zoznam používateľov sláviacich narodeniny sa nebude viac zobrazovať. Ak ho chcete povoliť, musíte zapnúť aj príslušnú funkciu fóra.',
	'YES_JUMPBOX'					=> 'Povoliť zobrazovanie položky Skočiť na',
	'YES_MODERATORS'				=> 'Povoliť zobrazovanie moderátorov',
	'YES_ONLINE'					=> 'Povoliť vypisovanie zoznamu prítomných používateľov',
	'YES_ONLINE_EXPLAIN'			=> 'Zobrazovať prítomných používateľov na hlavnej stránke, stránkach fór a tém.',
	'YES_ONLINE_GUESTS'				=> 'Povoliť vypisovanie anonymných používateľov v zozname prítomných používateľov',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Povolí vypisovanie anonymných používateľov v sekcii Kto je prítomný.',
	'YES_ONLINE_TRACK'				=> 'Povoliť obrázkové zobrazenie prítomnosti používateľa na fóre',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Pomocou obrázka v profile a zobrazení tém indikuje, či je používateľ prítomný.',
	'YES_POST_MARKING'				=> 'Povoliť označenie tém',
	'YES_POST_MARKING_EXPLAIN'		=> 'Témy, do ktorých používateľ prispel, budú označené.',
	'YES_READ_MARKING'				=> 'Povoliť ukladanie neprečítaných fór/tém na serveri',
	'YES_READ_MARKING_EXPLAIN'		=> 'Uchováva informácie o prečítaných/neprečítaných témach v databáze namiesto uchovávania v súboroch cookie.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB podporuje autentifikačné plug-iny a moduly. Tie umožňujú stanoviť spôsob, ktorým sú používatelia overovaní pri prihlasovaní sa do fóra. Štandardne sú k dispozícii tri plug-iny; DB, LDAP a Apache. Nie všetky metódy vyžadujú dodatočné informácie, preto vyplňte iba polia, ktoré sú pre danú metódu dôležité.',

	'AUTH_METHOD'				=> 'Vyberte metódu overenia',

	'APACHE_SETUP_BEFORE_USE'	=> 'Pred zapnutím tejto metódy autentifikácie v phpBB musíte najskôr nastaviť overovanie cez apache. Pamätajte, že používateľské meno pre overovanie cez apache musí byť rovnaké ako používate v phpBB. Overovanie cez apache môže byť použité len v spojení s mod_php (nie s verziou CGI) a vypnutom safe_mode.',

	'LDAP_DN'					=> 'Základné LDAP <var>dn</var>',
	'LDAP_DN_EXPLAIN'			=> 'Toto je tzv. Distinguished Name obsahujúce informácie o používateľovi, napr. <samp>o=My Company,c=US</samp>',
	'LDAP_EMAIL'				=> 'Atribút e-mailu LDAP',
	'LDAP_EMAIL_EXPLAIN'		=> 'Sem zadajte názov atribútu pre e-mail (ak nejaký existuje), aby bolo možné automaticky nastaviť e-mailovú adresu novým používateľom. Ak necháte toto pole prázdne, používatelia prihlásení po prvý krát budú mať prázdne pole E-mailová adresa.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Spojenie so serverom LDAP nebolo s použitím zadaného používateľského mena/hesla úspešné.',
	'LDAP_NO_EMAIL'				=> 'Zadaný atribút e-mailu neexistuje.',
	'LDAP_NO_IDENTITY'			=> 'Nie je možné nájsť prihlasovaciu identitu pre %s.',
	'LDAP_PASSWORD'					=> 'Heslo pre LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Ponechajte prázdne, ak chcete použiť anonymný prístup. V opačnom prípade vyplňte heslo pre vyššie uvedeného používateľa. <strong>UPOZORNENIE:</strong> Toto heslo bude uložené ako čistý text viditeľný pre každého, kto má prístup k vašej databáze.',
	'LDAP_PORT'						=> 'LDAP server port',
	'LDAP_PORT_EXPLAIN'				=> 'Optionally you can specify a port which should be used to connect to the LDAP server instead of the default port 389.',
	'LDAP_SERVER'				=> 'Názov servera LDAP',
	'LDAP_SERVER_EXPLAIN'		=> 'Ak používate LDAP, toto je názov resp. IP adresa servera.',
	'LDAP_UID'					=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'			=> 'Toto je kľúč, pod ktorým sa vyhľadáva zadaná prihlasovacia identita, napr. <var>uid</var>, <var>sn</var>, atď.',
	'LDAP_USER'						=> 'Používateľ LDAP',
	'LDAP_USER_EXPLAIN'				=> 'Ponechajte prázdne, ak chcete použiť anonymný prístup. Ak je vyplnené, phpBB sa pripojí k serveru LDAP ako zadaný používateľ.',
	'LDAP_USER_FILTER'				=> 'LDAP user filter',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Optionally you can further limit the searched objects with additional filters. For example <samp>objectClass=posixGroup</samp> would result in the use of <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Tu sa určujú dôležité nastavenia servera a domény. Prosím, ubezpečte sa, že informácie, ktoré vkladáte, sú správne. V prípade chýb budú e-mailové správy obsahovať nesprávne údaje. Pri zadávaní názvu domény pamätajte, že musí obsahovať aj http:// či označenie pre iný protokol. Číslo portu meňte iba v prípade, ak ste si istý tým, že server používa inú hodnotu - port 80 je správny vo väčšine prípadov.',

	'ENABLE_GZIP'				=> 'Povoliť kompresiu GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'Vygenerovaný obsah bude skomprimovaný pred odoslaním používateľovi. Toto zníži počet prenesených dát, ale zvýši zaťaženie CPU na serveri aj klientskom počítači.',
	'FORCE_SERVER_VARS'			=> 'Vynútiť nastavenie URL servera',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Ak je zapnuté, nastavenia servera definované tu budú použité namiesto automaticky získaných hodnôt.',
	'ICONS_PATH'				=> 'Cesta k ikonám príspevkov',
	'ICONS_PATH_EXPLAIN'		=> 'Cesta z hlavného priečinka phpBB, napr. <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Nastavenia ciest',
	'RANKS_PATH'				=> 'Cesta k ikonám hodnotení',
	'RANKS_PATH_EXPLAIN'		=> 'Cesta z hlavného priečinka phpBB, napr. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Cesta k skriptom',
	'SCRIPT_PATH_EXPLAIN'		=> 'Cesta z hlavného priečinka hostingu k phpBB, napr. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Názov domény',
	'SERVER_NAME_EXPLAIN'		=> 'Názov domény, na ktorej beží toto fórum (napríklad: <samp>www.foo.bar</samp>).',
	'SERVER_PORT'				=> 'Port servera',
	'SERVER_PORT_EXPLAIN'		=> 'Port, na ktorom beží váš server, väčšinou 80, meniť iba v prípade, že je stanovený iný port.',
	'SERVER_PROTOCOL'			=> 'Protokol servera',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Toto je použité ako komunikačný protokol servera v prípade, že je táto hodnota preferovaná pred ostatnými. Ak je toto pole ponechané prázdne alebo sa protokol nenachádza v adrese, potom sa protokol zisťuje z nastavení zabezpečenia cookie (<samp>http://</samp> alebo <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'		=> 'Nastavenia URL servera',
	'SMILIES_PATH'				=> 'Cesta k ikonám smajlíkov',
	'SMILIES_PATH_EXPLAIN'		=> 'Cesta z hlavného priečinka phpBB, napr. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Cesta k ikonám typov súborov',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Cesta z hlavného priečinka phpBB, napr. <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Tu môžete meniť nastavenia týkajúce sa prihlasovania a relácií.',

	'ALL'							=> 'Všetko',
	'ALLOW_AUTOLOGIN'				=> 'Povoliť trvalé prihlásenia',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Nastavuje, či je povolené automatické prihlásenie používateľa pri návšteve fóra.',
	'AUTOLOGIN_LENGTH'				=> 'Maximálna dĺžka trvania pre trvalé prihlásenia (v dňoch)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Doba v dňoch, po uplynutí ktorej prestanú byť trvalé prihlásenia platné. Zadaním hodnoty 0 obmedzenie vypnete.',
	'BROWSER_VALID'					=> 'Overiť prehliadač',
	'BROWSER_VALID_EXPLAIN'			=> 'Na zvýšenie bezpečnosti overí internetový prehliadač pre každú reláciu.',
	'CHECK_DNSBL'					=> 'Overiť IP na Čiernej listine DNS',
	'CHECK_DNSBL_EXPLAIN'			=> 'Ak je zapnuté, IP adresa používateľa bude pri registrácii a odosielaní príspevkov overená na nasledujúcich službách DNSBL: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> a <a href="http://spamhaus.org">spamhaus.org</a>. Toto overenie môže chviľu trvať, v závislosti od nastavenia servera. Ak to spôsobuje prílišné spomalenie fóra alebo je oznamovaných príliš veľa pozitívnych identifikácií, vypnite toto nastavenie.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Overiť e-mailovú doménu na správnosť záznamu MX',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Ak je zapnuté, e-mailová doména zadaná pri registrácii a zmenách profilu je overená na platnosť záznamu MX.',
	'FORCE_PASS_CHANGE'				=> 'Vyžadovať zmenu hesla',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Vyžaduje od používateľa, aby menil svoje heslo po stanovenom počte dní. Zadaním hodnoty 0 túto funkciu vypnete.',
	'FORWARDED_FOR_VALID'			=> 'Overená hlavička <var>X_FORWARDED_FOR</var>',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Relácia bude pokračovať len v prípade, že odoslaná hlavička <var>X_FORWARDED_FOR</var> je totožná s tou, ktorá bolo odoslaná predtým. Pritom bude kontrolovaná možnosť prístupu (ban) pre IP adresy definované v hlavičke <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Overovanie IP adresy pre reláciu',
	'IP_VALID_EXPLAIN'				=> 'Stanovuje, aká časť z používateľovej IP adresy sa používa na overenie relácie; ak je nastavená voľba <samp>Všetky</samp>, porovná celú adresu, <samp>A.B.C</samp> porovná prvé 3 čísla x.x.x, <samp>A.B</samp> prvé 2 čísla x.x, <samp>Žiadne</samp> vypne overovanie.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Maximálne množstvo pokusov o prihlásenie',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Po prekročení tohto počtu neúspešných pokusov o prihlásenie, používateľ musí dodatočne potvrdzovať prihlasovacie údaje prepísaním kódu z obrázka (vizuálne overenie).',
	'NO_IP_VALIDATION'				=> 'Žiadne',
	'PASSWORD_TYPE'					=> 'Komplexnosť hesiel',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Stanovuje, ako zložité musí byť heslo pri jeho zadávaní alebo zmene. Každá možnosť zahŕňa aj tie predchádzajúce.',
	'PASS_TYPE_ALPHA'				=> 'Musí obsahovať písmená a čísla',
	'PASS_TYPE_ANY'					=> 'Žiadne požiadavky',
	'PASS_TYPE_CASE'				=> 'Musí obsahovať veľké aj malé písmená',
	'PASS_TYPE_SYMBOL'				=> 'Musí obsahovať symboly',
	'TPL_ALLOW_PHP'					=> 'Povoliť PHP v šablónach',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Ak je táto možnosť zapnutá, kód <code>PHP</code> a <code>INCLUDEPHP</code> bude rozpoznaný a vložený do šablón.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Tieto informácie sa používajú, keď fórum odosiela e-mailové správy jednotlivým používateľom. Prosím, uistite sa, že zadaná e-mailová adresa je platná, všetky vrátené alebo nedoručiteľné správy budú odoslané na túto adresu. Ak váš hosting neposkytuje štandardnú službu pre odosielanie emailov (založenú na PHP), môžete namiesto toho posielať správy priamo cez server SMTP. Toto vyžaduje adresu vhodného servera (opýtajte sa svojho poskytovateľa, ak neviete)! Ak server vyžaduje overenie (a iba ak ho vyžaduje), zadajte potrebné meno, heslo a metódu autentifikácie.',

	'ADMIN_EMAIL'					=> 'E-mailová adresa pre odpovede',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Táto adresa bude použitá ako adresa pre odpovede vo všetkých emailoch a technickej podpore. V správach bude použitá ako hodnota pre polia <samp>Return-Path</samp> a <samp>Sender</samp>.',
	'BOARD_EMAIL_FORM'				=> 'Používatelia odosielajú e-mailové správy prostredníctvom fóra',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Namiesto zobrazovania e-mailových adries používateľov je možné priamo prostredníctvom fóra odoslať e-mailovú správu.',
	'BOARD_HIDE_EMAILS'				=> 'Skryť e-mailové adresy',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Táto funkcia úplne skryje e-mailové adresy.',
	'CONTACT_EMAIL'					=> 'Kontaktná e-mailová adresa',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Táto adresa bude použitá vždy, keď bude potrebný nejaký konkrétny kontakt, napr. spam, chybové hlásenia atď.  V správach bude použitá ako hodnota pre polia <samp>From</samp> a <samp>Reply-To</samp>.',
	'EMAIL_FUNCTION_NAME'			=> 'Názov funkcie pre odosielanie správ',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Názov funkcie, ktorá zabezpečuje odosielanie e-mailových správ prostredníctvom PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Veľkosť e-mailového balíka',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Toto je maximálny počet e-mailových správ odoslaných v jednom balíku.',
	'EMAIL_SIG'						=> 'Podpis v e-mailových správach',
	'EMAIL_SIG_EXPLAIN'				=> 'Tento text bude pripojený ku všetkým e-mailom, ktoré budú prostredníctvom fóra odoslané.',
	'ENABLE_EMAIL'					=> 'Povoliť e-mailové správy fóra',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Ak je vypnuté, fórum nebude odosielať žiadne e-mailové správy.',
	'SMTP_AUTH_METHOD'				=> 'Metóda overenia pre SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Používa sa iba v prípade, že je zadané meno/heslo, opýtajte sa svojho poskytovateľa, ak neviete, ktorú metódu použiť.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'Heslo pre SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Heslo zadávajte iba v prípade, že ho server SMTP vyžaduje.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Port servera SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'Zmeňte toto nastavenie iba v prípade, ak viete, že zadaný server SMTP používa iný port.',
	'SMTP_SERVER'					=> 'Adresa servera SMTP',
	'SMTP_SETTINGS'					=> 'Nastavenia SMTP',
	'SMTP_USERNAME'					=> 'Používateľské meno pre SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'Používateľské meno zadávajte iba v prípade, že ho server SMTP vyžaduje.',
	'USE_SMTP'						=> 'Použiť server SMTP pre e-maily',
	'USE_SMTP_EXPLAIN'				=> 'Zvoľte "Áno", ak chcete alebo musíte odosielať e-mailové správy prostredníctvom servera namiesto odosielania cez funkciu PHP.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Tu môžete zapnúť a nastaviť používanie Jabbera pre rýchlu komunikáciu (instant messaging) a oznámenia fóra. Jabber je protokol s otvoreným zdrojovým kódom a preto je dostupný pre každého. Niektoré servery pre Jabber ponúkajú brány alebo transporty, ktoré umožňujú kontaktovať používateľov iných sietí. Nie všetky servery ponúkajú všetky transportné služby a zmeny v protokoloch môžu tie transporty znefunkčniť. Prosím, zadávajte len registrované používateľské mená - phpBB ich použije tak ako ich zadáte.',

	'ERR_JAB_AUTH'			=> 'Nepodarilo sa prihlásiť na serveri pre Jabber.',
	'ERR_JAB_CONNECT'		=> 'Nepodarilo sa pripojiť na server pre Jabber.',
	'JAB_ENABLE'				=> 'Zapnúť Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Povolí používanie systému Jabber pre rýchlu komunikáciu',
	'JAB_PACKAGE_SIZE'			=> 'Veľkosť balíka Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Toto je počet správ odoslaných v jednom balíku. Ak je nastavené na hodnotu 0, správa bude odoslaná okamžite a nebude pozdržaná pre neskoršie odoslanie.',
	'JAB_PASSWORD'				=> 'Heslo pre Jabber',
	'JAB_PORT'					=> 'Port pre Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Ponechajte prázdne v prípade, ak ste si nie istý tým, že to nie je vo vašom prípade port 5222',
	'JAB_SERVER'				=> 'Server pre Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'Zoznam serverov nájdete na stránke %sjabber.org%s.',
	'JAB_SETTINGS_CHANGED'		=> 'Nastavenia pre Jabber boli úspešne zmenené.',
	'JAB_USE_SSL'				=> 'Na pripojenie použiť SSL',
	'JAB_USE_SSL_EXPLAIN'		=> 'Ak je povolené, pri komunikácii bude nadviazané zabezpečené pripojenie. Port pre Jabber bude zmenený na 5223, ak bol pre Jabber určený port 5222.',
	'JAB_USERNAME'				=> 'Používateľské meno pre Jabber',
	'JAB_USERNAME_EXPLAIN'		=> 'Zadajte registrované používateľské meno. Používateľské meno nebude overené.',
));

?>
