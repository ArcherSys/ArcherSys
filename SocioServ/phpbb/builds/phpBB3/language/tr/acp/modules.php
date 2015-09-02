<?php
/** 
*
* acp_modules [Turkish]
*
* @package language
* @version $Id: modules.php,v 1.12 2007/05/10 15:31:21 acydburn Exp $ 
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Buradan her çeşit modüllerin yönetimini yapabilirsiniz. Not: YKP üç seviye menülü bir yapıya sahiptir (Kategori -> Kategori -> Modül) bunun yardımıyla diğerleri iki seviye menülü bir yapıya sahiptir (Kategori -> Modül). Ayrıca lütfen eğer modül yönetiminin kendisi için sorumlu modüllerini kapattıysanız ya da sildiyseniz kendinizide dışarıda bırakabileceğinin bilincinde olun.',
	'ADD_MODULE'					=> 'Modül ekle',
	'ADD_MODULE_CONFIRM'			=> 'Bu yöntemle birlikte seçilmiş bu modülü eklemek istediğinizden emin misiniz?',
	'ADD_MODULE_TITLE'				=> 'Modül Ekleme',

	'CANNOT_REMOVE_MODULE'	=> 'Modül kaldırılamadı, başka bir ürünle çakıştı. Lütfen bu işlemi yapmadan önce ürünleri kaldırın ya da taşıyın.',
	'CATEGORY'				=> 'Kategori',
	'CHOOSE_MODE'			=> 'Modül Biçimini Seçin',
	'CHOOSE_MODE_EXPLAIN'	=> 'Daha önce kullanılmış modülleri seçin.',
	'CHOOSE_MODULE'			=> 'Modül Seç',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Modül olarak anılan bir dosya seçin.',
	'CREATE_MODULE'			=> 'Yeni modül yarat',

	'DEACTIVATED_MODULE'	=> 'Modülü devredışı bırak',
	'DELETE_MODULE'			=> 'Modülü Sil',
	'DELETE_MODULE_CONFIRM'	=> 'Bu modülü kaldırmak istediğinizden emin misiniz?',

	'EDIT_MODULE'			=> 'Modülü Düzenle',
	'EDIT_MODULE_EXPLAIN'	=> 'Modülün özel ayarlarını buradan girebilirsiniz.',

	'HIDDEN_MODULE'			=> 'Modülü Gizle',

	'MODULE'					=> 'Modül',
	'MODULE_ADDED'				=> 'Modül başarıyla eklendi',
	'MODULE_DELETED'			=> 'Modül başarıyla kaldırıldı',
	'MODULE_DISPLAYED'			=> 'Modül görüntülendi',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Modülün görütülenmesini istemiyor fakat kullanmak istiyorsanız, burayı Hayır olarak ayarlayın.',
	'MODULE_EDITED'				=> 'Modül başarıyla düzenlendi',
	'MODULE_ENABLED'			=> 'Modül etkin',
	'MODULE_LANGNAME'			=> 'Modül Dil İsmi',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Modülün görüntülenecek ismini girin. İsim dil dosyasından çalışıyorsa sürekli dil kullanın.',
	'MODULE_TYPE'				=> 'Modül tipi',

	'NO_CATEGORY_TO_MODULE'	=> 'Kategori modüle çevirilemedi. Lütfen bu işlemi gerçekleştirmeden önce tüm ürünleri kaldırın ya da taşıyın.',
	'NO_MODULE'				=> 'Modül bulunamadı',
	'NO_MODULE_ID'			=> 'Modül id numarası belirlenmedi',
	'NO_MODULE_LANGNAME'	=> 'Modül dil adı belirlenmedi',
	'NO_PARENT'				=> 'Kaynak yok',

	'PARENT'				=> 'Kaynak',
	'PARENT_NO_EXIST'		=> 'Kaynak mevcut değil',

	'SELECT_MODULE'			=> 'Bir modül seçin',
));

?>