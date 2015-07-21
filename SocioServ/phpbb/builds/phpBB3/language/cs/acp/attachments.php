<?php
/** 
*
* acp_attachments [Česky]
*
* @package language
* @version $Id: attachments.php,v 1.30 2007/01/21 18:33:45 acydburn Exp $
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Zde můžete konfigurovat hlavní nastavení příloh a souvisejících zvláštních kategorií.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Zde můžete přidávat, mazat, upravovat a blokovat skupiny souborových přípon. Další možnosti zahrnují přiřazení zvláštních kategorií, úpravu stahovacího mechanismu a definici ikonky zobrazené před přílohou, která bude k dané skupině patřit.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Zde můžete spravovat povolené druhy souborů. Pro aktivaci vašich druhů použijte Administraci skupin druhů souborů. Zásadně se nedoporučuje povolovat přípony skriptů (jako např. <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, atd.).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Zde najdete soubory, které nebyly asociovány k žádnému příspěvku. Často se tak stane, pokud uživatel nahraje přílohu, aniž by odeslal příspěvek. Tyto soubory lze odstranit, či přiřadit k existujícím příspěvkům. Přiřazení k příspěvku vyžaduje jeho platné ID, o němž musíte rozhodnout sami. Takto bude příloha přiřazena k příspěvku, jenž jste vložili.',
	'ADD_EXTENSION'						=> 'Přidat druh souboru',
	'ADD_EXTENSION_GROUP'				=> 'Přidat skupinu druhů souborů',
	'ADMIN_UPLOAD_ERROR'				=> 'Chyby při přiřazení souboru: %s',
	'ALLOWED_FORUMS'					=> 'Povolená fóra',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Přiřazení příloh na vybraných (nebo všech) fórech možné.',
	'ALLOWED_IN_PM_POST'				=> 'Povoleno',
	'ALLOW_ATTACHMENTS'					=> 'Povolit přílohy',
	'ALLOW_ALL_FORUMS'					=> 'Povolit všechna fóra',
	'ALLOW_IN_PM'						=> 'Povoleno v soukromých zprávách',
	'ALLOW_PM_ATTACHMENTS'				=> 'Povolit přílohy v soukromých zprávách',
	'ALLOW_SELECTED_FORUMS'				=> 'Pouze níže zvolená fóra',
	'ASSIGNED_EXTENSIONS'				=> 'Přiřazené přípony',
	'ASSIGNED_GROUP'					=> 'Přiřazená skupina souborů',
	'ATTACH_EXTENSIONS_URL'				=> 'Druhy souborů',
	'ATTACH_EXT_GROUPS_URL'				=> 'Skupiny druhů souborů',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Maximální velikost souboru',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Maximální velikost souboru, 0 pro neomezenou velikost.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Prostor velikost přílohy v soukromých zprávách',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Maximální dostupný uživatelský prostor pro přílohy k soukromým zprávám, 0 pro neomezenou velikost.',
	'ATTACH_ORPHAN_URL'					=> 'Nepřiřazené přílohy',
	'ATTACH_POST_ID'					=> 'ID příspěvku',
	'ATTACH_QUOTA'						=> 'Celkový prostor pro přílohy',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Maximální dostupný prostor pro přílohy na celém fóru, 0 pro neomezenou velikost.',
	'ATTACH_TO_POST'					=> 'Připojit přílohu k příspěvku',

	'CAT_FLASH_FILES'			=> 'Soubory Flash',
	'CAT_IMAGES'				=> 'Obrázky',
	'CAT_QUICKTIME_FILES'		=> 'Soubory Quicktime',
	'CAT_RM_FILES'				=> 'Soubory RealMedia',
	'CAT_WM_FILES'				=> 'Soubory Windows Media',
	'CREATE_GROUP'				=> 'Vytvořit novou skupinu',
	'CREATE_THUMBNAIL'			=> 'Vytvořit náhled',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Vytvořit náhled souboru, pokud je to možné.',

	'DEFINE_ALLOWED_IPS'			=> 'Definovat povolené IP/hostitele',
	'DEFINE_DISALLOWED_IPS'			=> 'Definovat zakázané IP/hostitele',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Pro zvolení několika různých IP vložte každou na nový řádek. Pro zadání rozashu IP oddělte mezní body pomlčkou (-), jako náhradní znak použijte *',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Můžete odebrat více IP adres najednou použitím kombinace myši a klávesnice, vhodné pro váš systém a prohlížeč. Vyřazené IP mají modré pozadí.',
	'DISPLAY_INLINED'				=> 'Zobrazit obrázky uvnitř příspěvku',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Pokud je nastaveno Ne, obrázky budou zobrazeny jako odkazy.',
	'DISPLAY_ORDER'					=> 'Pořadí zobrazení příloh',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Zobrazit přílohy seřazené podle času.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Upravit skupinu přípon',
	'EXCLUDE_ENTERED_IP'			=> 'Povolte pro vyřazení zadané IP/hostitele.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Vyřadit IP z povolených IP/hostitelů',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Vyřadit IP z zakázaných IP/hostitelů',
	'EXTENSIONS_UPDATED'			=> 'Přípony úspěšně aktualizovány.',
	'EXTENSION_EXIST'				=> 'Přípona %s již existuje.',
	'EXTENSION_GROUP'				=> 'Skupina druhů souborů',
	'EXTENSION_GROUPS'				=> 'Skupiny druhů souborů',
	'EXTENSION_GROUP_DELETED'		=> 'Skupina přípon byla úspěšně odstraněna.',
	'EXTENSION_GROUP_EXIST'			=> 'Skupina přípon %s již existuje.',

	'GO_TO_EXTENSIONS'		=> 'Přejít na rozhraní pro správu skupin přípon',
	'GROUP_NAME'			=> 'Název skupiny',

	'IMAGE_LINK_SIZE'			=> 'Rozměry pro odkaz k obrázku',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Zobrazit obrázek jako textový odkaz v příspěvku, pokud jeho rozměry přesahují nastavený limit. Pro vypnutí této funkce nastavte hodnoty na 0px ku 0px.',
	'IMAGICK_PATH'				=> 'Cesta k Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Úplná cesta k aplikaci Imagemagick, např. <samp>/usr/bin/</samp>',

	'MAX_ATTACHMENTS'				=> 'Max. počet příloh na 1 příspěvek',
	'MAX_ATTACHMENTS_PM'			=> 'Max. počet příloh na 1 soukromou zprávu',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maximální velikost souboru',
	'MAX_IMAGE_SIZE'				=> 'Maximální rozměry obrázku',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Nejvyšší povolená velikost obrázkových příloh. Nastavte hodnoty na 0px na 0px pro vypnutí kontroly rozměrů.',
	'MAX_THUMB_WIDTH'				=> 'Maximální šířka náhledu',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Vygenerovaný náhled nebude širší než nastavená hodnota',
	'MIN_THUMB_FILESIZE'			=> 'Minimální velikost náhledu',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Pro obrázky menší než tyto hodnoty nebudou tvořeny náhledy.',
	'MODE_INLINE'					=> 'V příspěvku',
	'MODE_PHYSICAL'					=> 'Fyzické',

	'NOT_ALLOWED_IN_PM'			=> 'Povoleno pouze u příspěvků',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Není povoleno',
	'NOT_ASSIGNED'				=> 'Nepřiřazeno',
	'NO_EXT_GROUP'				=> 'Žádná',
	'NO_EXT_GROUP_NAME'			=> 'Nebyl zadán název skupiny',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Nebyla určena žádná skupina.',
	'NO_FILE_CAT'				=> 'Žádná',
	'NO_IMAGE'					=> 'Bez obrázku',
	'NO_THUMBNAIL_SUPPORT'		=> 'Podpora náhledů byla vypnuta, protože na serveru nejsou ani podporované verze GD knihoven, ani aplikace Imagemagick.',
	'NO_UPLOAD_DIR'				=> 'Zvolený adresář pro nahrávání neexistuje.',
	'NO_WRITE_UPLOAD'			=> 'Zvolený adresář pro nahrávání není zapisovatelný. Nastavte jeho oprávnění na serveru tak, aby do něj bylo možné zapisovat.',

	'ONLY_ALLOWED_IN_PM'	=> 'Povoleno jen v soukromých zprávách',
	'ORDER_ALLOW_DENY'		=> 'Povolit',
	'ORDER_DENY_ALLOW'		=> 'Zakázat',

	'REMOVE_ALLOWED_IPS'		=> 'Odstranit nebo vyřadit vyjmuté <em>povolené</em> IP/hostitele',
	'REMOVE_DISALLOWED_IPS'		=> 'Odstranit nebo vyřadit vyjmuté <em>zakázané</em> IP/hostitele',

	'SEARCH_IMAGICK'				=> 'Hledat Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Seznam zakázaných/povolených',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Změnit výchozí chování, pokud je povoleno zabezpečené stahování, seznamu zakázaných/povolených na <strong>whitelist</strong> (Povolování) nebo <strong>blacklist</strong> (Omezování)',
	'SECURE_DOWNLOADS'				=> 'Povolit zabezpečené stahování',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Je-li tato možnost povolena, stahovat mohou jenom IP/hostitelé, které zvolíte.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Zabezpečené stahování není povoleno. Nastavení níže budou uplatněna po povolení zabezpečeného stahování.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Seznam IP byl úspešně aktualizován.',
	'SECURE_EMPTY_REFERRER'			=> 'Povolit prázdný refferer(odkazující stránka)',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Zabezpečné stahování je založeno na reffererech. Chcete povolit stahování, která nemají refferer(odkazující stránku)?',
	'SETTINGS_CAT_IMAGES'			=> 'Nastavení kategorie obrázku',
	'SPECIAL_CATEGORY'				=> 'Zvláštní kategorie',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Zvláštní kategorie určují způsob zobrazení v příspěvích.',
	'SUCCESSFULLY_UPLOADED'			=> 'Úspěšně nahráno',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Skupina příloh byla úspěšně přidána.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Skupina souborů byla úspěšně aktualizována.',

	'UPLOADING_FILES'				=> 'Nahrávání souborů',
	'UPLOADING_FILE_TO'				=> 'Nahrávám soubor “%1$s” k příspěvku %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Nemáte oprávnění nahrávat přílohy do fóra “%s”',
	'UPLOAD_DIR'					=> 'Adresář pro nahrávání',
	'UPLOAD_DIR_EXPLAIN'			=> 'Cesta k umístění složky pro ukládání příloh.',
	'UPLOAD_ICON'					=> 'Ikona uploadů',
	'UPLOAD_NOT_DIR'				=> 'Cesta, kterou jste zadali, není zřejmě platná složka.',
));

?>