<?php
/** 
*
* acp_language [Turkish]
*
* @package language
* @version $Id: language.php,v 1.15 2007/05/10 15:31:21 acydburn Exp $ 
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
	'ACP_FILES'						=> 'Yönetici dil dosyaları',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Buradan dil paketlerini yükleme/kaldırma işlemlerini yapabilirsiniz.',

	'EMAIL_FILES'			=> 'E-posta şablonları',

	'FILE_CONTENTS'				=> 'Dosya içerikleri',
	'FILE_FROM_STORAGE'			=> 'Kayıt klasöründen dosya',

	'HELP_FILES'				=> 'Yardım dosyaları',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Yüklenmiş dil paketleri',
	'INVALID_LANGUAGE_PACK'		=> 'Seçilen dil paketi geçerli değil. Lütfen dil paketini kontrol edin, gerekirse tekrar yükleyin.',
	'INVALID_UPLOAD_METHOD'		=> 'Seçili yükleme yöntemi geçerli değil, lütfen farklı bir yöntem seçin.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Dil detayları başarıyla güncellendi',
	'LANGUAGE_ENTRIES'					=> 'Dil girdileri',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Bu bölümde var olan dil paketi girdilerini ya da henüz çevrilmemiş olanları değiştirebilirsiniz.<br /><strong>Not:</strong> Dil dosyalarını değiştirmeden önce; değişiklikler, dosyayı indirmeniz için ayrı bir klasörde saklanacaktır. Orijinal dil dosyaları ile kendi dil dosyalarınızı değiştirene kadar, kullanıcılar bu değişimleri göremeyecekler. Bu değişim için sunucunuza dil dosyalarını yüklemelisiniz.',
	'LANGUAGE_FILES'					=> 'Dil paketleri',
	'LANGUAGE_KEY'						=> 'Dil anahtarı',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Bu dil paketi zaten yüklü.',
	'LANGUAGE_PACK_DELETED'				=> 'Dil paketi <strong>%s</strong> başarıyla kaldırıldı. Bu dili kullanan tüm kullanıcılar, forumun varsayılan diline sıfırlandı.',
	'LANGUAGE_PACK_DETAILS'				=> 'Dil Paketi Detayları',
	'LANGUAGE_PACK_INSTALLED'			=> 'Dil paketi <strong>%s</strong> başarıyla kuruldu.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Yerel isim',
	'LANGUAGE_PACK_NAME'				=> 'İsim',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Seçilmiş dil paketi mevcut değil.',
	'LANGUAGE_PACK_USED_BY'				=> 'Kullananlar (robotlar dahil)',
	'LANGUAGE_VARIABLE'					=> 'Dil değişkenleri',
	'LANG_AUTHOR'						=> 'Dil paketi yapımcısı',
	'LANG_ENGLISH_NAME'					=> 'İngilizce adı',
	'LANG_ISO_CODE'						=> 'ISO kodu',
	'LANG_LOCAL_NAME'					=> 'Yerel ismi',

	'MISSING_LANGUAGE_FILE'		=> 'Kayıp dil dosyası: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Kayıp dil değişkenleri',
	'MODS_FILES'				=> 'Modların dil dosyaları',

	'NO_FILE_SELECTED'				=> 'Belirlenmiş bir dil dosyasına sahip değilsiniz.',
	'NO_LANG_ID'					=> 'Belirlenmiş bir dil paketiniz yok',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Varsayılan dil paketini kaldıramazsınız.<br />Bu dil paketini kaldırmak istiyorsanız, ilk önce forumunuzun varsayılan dilini değiştirin.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Kaldırılmış dil paketleri yok',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Kayıt klasöründen kaldır',

	'SELECT_DOWNLOAD_FORMAT'	=> 'İndirme biçimi seçin',
	'SUBMIT_AND_DOWNLOAD'		=> 'Onayla ve dosyayı indir',
	'SUBMIT_AND_UPLOAD'		=> 'Onayla ve dosyayı yükle',

	'THOSE_MISSING_LANG_FILES'			=> 'Burada sözü edilen dil dosyaları kayıp %s dil klasörü',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Burada sözü edilen dil değişkenleri kayıp <strong>%s</strong> dil paketi',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Kaldırılmış dil paketleri',

	'UNABLE_TO_WRITE_FILE'		=> 'Dosya şuraya yazılamıyor - %s.',
	'UPLOAD_COMPLETED'			=> 'Yükleme tamamlandı',
	'UPLOAD_FAILED'				=> 'Bilinmeyen sebepler yüzünden yükleme başarısız oldu. İlgili dosyayı elle değiştirmeniz gerekebilir.',
	'UPLOAD_METHOD'				=> 'Yükleme yöntemi',
	'UPLOAD_SETTINGS'			=> 'Yükleme ayarları',

	'WRONG_LANGUAGE_FILE'		=> 'Seçilmiş dil paketi geçerli değil',
));

?>