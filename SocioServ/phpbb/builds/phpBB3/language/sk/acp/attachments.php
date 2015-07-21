<?php
/**
*
* acp_attachments [Slovak]
*
* @package language
* @version $Id: attachments.php,v 1.30 2007/05/17 14:58:40 acydburn Exp $
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

$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Tu môžete upraviť hlavné nastavenia pre prílohy a ďalšie špeciálne kategórie.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Tu môžete pridať, odstrániť, upraviť alebo deaktivovať skupiny typov súborov. Ďalšie nastavenia umožňujú priradenie špeciálnych kategórií pre tieto skupiny, zmenu mechanizmu sťahovania a určenie ikony pre odosielanie, ktorá bude zobrazená pred prílohou, ktorá patrí do skupiny.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Tu môžete spravovať povolené typy súborov. Ak chcete aktivovať typy súborov, prepnite sa do ovládacieho panela Správa typov súborov. Rázne odporúčame nepovoliť typy súborov obsahujúcich skripty (napr. <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> atď…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Tu môžete vidieť súbory nepripojené k žiadnym príspevkom. Toto nastáva v prípade, že používateľ odošle prílohu ale neodošle príspevok. Tie prílohy môžete buď odstrániť alebo priradiť k existujúcim príspevkom. Ak chcete prílohu priradiť k príspevku, potrebujete vedieť jeho ID, musíte si ho zistiť sami. Týmto priradíte existujúcu prílohu k zadanému príspevku.',
	'ADD_EXTENSION'						=> 'Pridať typ súborov',
	'ADD_EXTENSION_GROUP'				=> 'Pridať skupiny typov súborov',
	'ADMIN_UPLOAD_ERROR'				=> 'Počas pokusu o pripojenie súboru sa vyskytla chyba: “%s”.',
	'ALLOWED_FORUMS'					=> 'Povolené fóra',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Fóra, do ktorých je možné odosielať priradené typy súborov.',
	'ALLOWED_IN_PM_POST'				=> 'Povolené',
	'ALLOW_ATTACHMENTS'					=> 'Povoliť prílohy',
	'ALLOW_ALL_FORUMS'					=> 'Povoliť všetky fóra',
	'ALLOW_IN_PM'						=> 'Povolené v súkromných správach',
	'ALLOW_PM_ATTACHMENTS'				=> 'Povoliť prílohy v súkromných správach',
	'ALLOW_SELECTED_FORUMS'				=> 'Len nižšie vybrané fóra',
	'ASSIGNED_EXTENSIONS'				=> 'Priradené typy súborov',
	'ASSIGNED_GROUP'					=> 'Priradená skupina typov súborov',
	'ATTACH_EXTENSIONS_URL'				=> 'Typy súborov',
	'ATTACH_EXT_GROUPS_URL'				=> 'Skupiny typov súborov',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Maximálna veľkosť súboru',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Maximálna veľkosť každého súboru, zadaním hodnoty 0 vypnete obmedzenie.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Maximálna veľkosť súboru v súkromných správach',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Maximálna kvóta na disku dostupná pre používateľa pre prílohy v súkromných správach, zadaním hodnoty 0 vypnete obmedzenie.',
	'ATTACH_ORPHAN_URL'					=> 'Nepriradené prílohy',
	'ATTACH_POST_ID'					=> 'ID príspevku',
	'ATTACH_QUOTA'						=> 'Celková kvóra pre prílohy',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Maximálna kvóta na disku dostupná pre prílohy na celom fóre, zadaním hodnoty 0 vypnete obmedzenie.',
	'ATTACH_TO_POST'					=> 'Pripojiť súbor k príspevku',

	'CAT_FLASH_FILES'			=> 'Súbory Flash',
	'CAT_IMAGES'				=> 'Obrázky',
	'CAT_QUICKTIME_FILES'		=> 'Súbory QuickTime Media',
	'CAT_RM_FILES'				=> 'Súbory RealMedia',
	'CAT_WM_FILES'				=> 'Súbory Windows Media',
	'CREATE_GROUP'				=> 'Vytvoriť novú skupinu',
	'CREATE_THUMBNAIL'			=> 'Vytvoriť miniatúru',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Vytvoriť miniatúru vo všetkých možných situáciách.',

	'DEFINE_ALLOWED_IPS'			=> 'Určiť povolené IP adresy/hostiteľov',
	'DEFINE_DISALLOWED_IPS'			=> 'Určiť nepovolené IP adresy/hostiteľov',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Ak chcete určiť niekoľko odlišných IP adries alebo hostiteľov, zadajte ich každého na nový riadok. Ak určujete rozsah IP adries, začiatočnú a koncovú adresu oddeľte pomlčkou (-), ako zástupný znak je možné použiť “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Môžete zakázať niekoľko IP adries naraz použitím správnej kombinácie myši a klávesnice v systéme a prehliadači. Nepovolené adresy majú modré pozadia.',
	'DISPLAY_INLINED'				=> 'Zobraziť obrázky v príspevku',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Ak je nastavená voľba "Bez obrázka", prílohy nebudú zobrazované ako odkaz.',
	'DISPLAY_ORDER'					=> 'Poradie zobrazenia príloh',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Prílohy budú usporiadané podľa času.',

	'EDIT_EXTENSION_GROUP'			=> 'Upraviť skupinu typov súborov',
	'EXCLUDE_ENTERED_IP'			=> 'Povoľte, ak chcete vylúčiť zadané IP adresy alebo hostiteľov.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Vylúčiť IP adresy zo zoznamu povolených IP adries alebo hostiteľov',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Vylúčiť IP adresy zo zoznamu nepovolených IP adries alebo hostiteľov',
	'EXTENSIONS_UPDATED'			=> 'Typy súborov boli úspešne aktualizované.',
	'EXTENSION_EXIST'				=> 'Typ súboru %s už existuje.',
	'EXTENSION_GROUP'				=> 'Skupina typov súborov',
	'EXTENSION_GROUPS'				=> 'Skupiny typov súborov',
	'EXTENSION_GROUP_DELETED'		=> 'Skupina typov súborov bola úspešne odstránená.',
	'EXTENSION_GROUP_EXIST'			=> 'Skupina typov súborov %s už existuje.',

	'GO_TO_EXTENSIONS'		=> 'Prejsť na rozhranie správy skupín súborov',
	'GROUP_NAME'			=> 'Názov skupiny',

	'IMAGE_LINK_SIZE'			=> 'Rozmery obrázka odkazu',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Zobraziť obrázok prílohy ako textový odkaz v príspevku, ak sú jeho rozmery väčšie ako tu definované. Nastavením hodnôt na 0 vypnete túto funkciu.',
	'IMAGICK_PATH'				=> 'Cesta k Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Úplná cesta k aplikácii Imagemagick, napr. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Maximálny počet príloh na príspevok',
	'MAX_ATTACHMENTS_PM'			=> 'Maximálny počet príloh na správu',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maximálna veľkosť súboru',
	'MAX_IMAGE_SIZE'				=> 'Maximálne rozmery obrázka',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Maximálna veľkosť obrázkových príloh. Nastavením hodnôt na 0 vypnete kontrolu rozmerov.',
	'MAX_THUMB_WIDTH'				=> 'Maximálna šírka miniatúry v pixeloch',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Vygenerovaná miniatúra neprekročí tu nastavenú šírku.',
	'MIN_THUMB_FILESIZE'			=> 'Minimálna veľkosť súboru miniatúry',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Nevytvárať miniatúry obrázkov menších ako táto hodnota.',
	'MODE_INLINE'					=> 'V príspevku',
	'MODE_PHYSICAL'					=> 'Fyzicky',

	'NOT_ALLOWED_IN_PM'			=> 'Povolené len v príspevkoch',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Nepovolené',
	'NOT_ASSIGNED'				=> 'Nepriradené',
	'NO_EXT_GROUP'				=> 'Žiadna',
	'NO_EXT_GROUP_NAME'			=> 'Nebol zadaný názov skupiny.',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Nebola zvolená žiadna skupina.',
	'NO_FILE_CAT'				=> 'Žiadna',
	'NO_IMAGE'					=> 'Bez obrázka',
	'NO_THUMBNAIL_SUPPORT'		=> 'Podpora miniatúr bola vypnutá. Na správnu funkčnosť tejto funkcie je potrebná knižnica GD alebo aplikácia Imagemagick. ani jedna nebola nájdená.',
	'NO_UPLOAD_DIR'				=> 'Zadaný priečinok na odosielanie príloh neexistuje',
	'NO_WRITE_UPLOAD'			=> 'Do zadaného priečinka na odosielanie príloh sa nedá zapisovať. Prosím, zmeňte povolenia na serveri tak, aby to bolo možné.',

	'ONLY_ALLOWED_IN_PM'	=> 'Povolené len v súkromných správach',
	'ORDER_ALLOW_DENY'		=> 'Povoliť',
	'ORDER_DENY_ALLOW'		=> 'Zakázať',

	'REMOVE_ALLOWED_IPS'		=> 'Odstrániť alebo odobrať vylúčené <em>povolené</em> IP adresy/hostiteľov',
	'REMOVE_DISALLOWED_IPS'		=> 'Odstrániť alebo odobrať vylúčené <em>nepovolených</em> IP adresy/hostiteľov',

	'SEARCH_IMAGICK'				=> 'Vyhľadať Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Zoznam povolených/nepovolených',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Ak je povolené bezpečné sťahovanie, zmeniť predvolené správanie zo zoznamu povolených/nepovolených na <strong>bielu listinu</strong> (povolené) alebo <strong>čiernu listinu</strong> (nepovolené).',
	'SECURE_DOWNLOADS'				=> 'Povoliť bezpečné sťahovanie',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Ak je táto voľba povolená, sťahovanie je povolené len používateľom s definovanými IP adresami/hostiteľmi.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Bezpečné sťahovanie nie sú povolené. Tieto nastavenia sa použijú až po jeho povolení.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Zoznam IP adries bol úspešne aktualizovaný.',
	'SECURE_EMPTY_REFERRER'			=> 'Povoliť prázdny referrer',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Bezpečné sťahovanie je založené na používaní odkazujúcich stránok (referrer). Chcete povoliť sťahovania, ktoré nemajú nastavený referrer?',
	'SETTINGS_CAT_IMAGES'			=> 'Nastavenie kategórie obrázkov',
	'SPECIAL_CATEGORY'				=> 'Špeciálna kategória',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Špeciálna kategória sa odlišuje spôsobom zobrazenia v príspevkoch.',
	'SUCCESSFULLY_UPLOADED'			=> 'Úspešne odoslané.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Skupina typov súborov bola úspešne pridaná.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Skupina typov súborov bola úspešne aktualizovaná.',

	'UPLOADING_FILES'				=> 'Odosielanie súborov',
	'UPLOADING_FILE_TO'				=> 'Odosielanie súboru “%1$s” do príspevku %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Nemáte oprávnenie na odosielanie súborov do fóra “%s”.',
	'UPLOAD_DIR'					=> 'Priečinok na odosielanie príloh',
	'UPLOAD_DIR_EXPLAIN'			=> 'Cesta k priečinku, do ktorého budú ukladané prílohy. Pamätajte, že ak tento priečinok zmeníte, musíte už uložené prílohy ručne presunúť do nového priečinka.',
	'UPLOAD_ICON'					=> 'Ikona odosielania',
	'UPLOAD_NOT_DIR'				=> 'Zadaná cesta zrejme nie je platným priečinkom.',
));

?>
