<?php
/** 
*
* acp_users [Turkish]
*
* @package language
* @version $Id: users.php,v 1.29 2007/06/18 15:12:14 kellanved Exp $ 
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
	'ADMIN_SIG_PREVIEW'		=> 'İmza önizleme',
	'AT_LEAST_ONE_FOUNDER'	=> 'Bu kurucuyu normal bir kullanıcı olarak değiştiremezsiniz. Bu site için en az bir kurucunun aktif olması gerekmektedir. Eğer bu kullanıcıları kurucu durumundan terfi ettirmek istiyorsanız ilk önce başka bir kullanıcının kurucu olması gerekmektedir.',
	
	'BAN_ALREADY_ENTERED'	=> 'Önceki yasaklama başarıyla girildi. Yasaklama listesi güncellenmedi.',
	'BAN_SUCCESSFUL'		=> 'Yasaklama başarıyla girildi',

	'CANNOT_BAN_FOUNDER'			=> 'Kurucu hesaplarını yasaklama izniniz yok.',
	'CANNOT_BAN_YOURSELF'			=> 'Kendinizi yasaklama izniniz yok.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Bot hesaplarını deaktif etme izniniz yok. Lütfen bunun yerine botu deaktif edin.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Kurucu hesaplarını deaktif etme izniniz yok.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Kendi hesabınızı deaktif etme izniniz yok.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Bot hesaplarında zorunlu yeniden aktivasyon yaptırma izniniz yok. Lütfen bunun yerine botu deaktif edin.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Kurucu hesaplarında zorunlu yeniden aktivasyon yaptırma izniniz yok.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Kendi hesabınızı tekrar aktif etme zorunluluğunuz yok.',
	'CANNOT_REMOVE_ANONYMOUS'	=> 'Misafir kullanıcı hesabını silemezsiniz.',
	'CANNOT_REMOVE_YOURSELF'	=> 'Kendi kullanıcı hesabınızı silme yetkiniz yok.',
	'CANNOT_SET_FOUNDER_IGNORED'		=> 'Yoksayılan kullanıcıların rütbesini kurucu olarak yükseltemezsiniz.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Kullanıcıları kurucu olarak terfi ettirmeden önce kullanıcıları aktif etmeniz gerekmektedir, sadece aktif edilmiş kullanıcılar terfi edebilir.',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Sadece kullanıcıların e-posta adreslerini değiştirirken bunu belirtmeniz gerekmektedir.',
	
	'DELETE_POSTS'			=> 'Mesajları sil',
	'DELETE_USER'			=> 'Kullanıcıyı sil',
	'DELETE_USER_EXPLAIN'	=> 'Bu bir kullanıcının sonu olur, ve geri dönüşü olmayan bir işlemdir.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Zorunlu tekrar aktivasyon başarıyla yapıldı',
	'FOUNDER'						=> 'Kurucu',
	'FOUNDER_EXPLAIN'				=> 'Kurucular tüm yönetim izinlerine sahiptirler ve asla kurucu olmayan üyeler tarafından yasaklanamazlar, silinemezler veya değiştirilemezler.',

	'GROUP_APPROVE'					=> 'Üyeyi onayla',
	'GROUP_DEFAULT'					=> 'Üye için varsayılan grup yap',
	'GROUP_DELETE'					=> 'Üyeyi gruptan sil',
	'GROUP_DEMOTE'					=> 'Grup liderliğinden düşür',
	'GROUP_PROMOTE'					=> 'Grup liderliğine yükselt',

	'IP_WHOIS_FOR'			=> '%s için IP sorgulaması',

	'LAST_ACTIVE'			=> 'Son aktiflik',

	'MOVE_POSTS_EXPLAIN'	=> 'Lütfen bu kullanıcının oluşturduğu tüm mesajların taşınacağı forumu seçin.',

	'NO_SPECIAL_RANK'		=> 'Özel rütbe atanmadı',
	'NOT_MANAGE_FOUNDER'	=> 'Kurucu durumunda olan bir kullanıcıyı düzenlemeyi denediniz.Sadece kurucuların diğer kurucuları düzenleme izni vardır.',

	'QUICK_TOOLS'			=> 'Hızlı araçlar',

	'REGISTERED'			=> 'Kayıt',
	'REGISTERED_IP'			=> 'Kayıt olduğu IP adresi',
	'RETAIN_POSTS'			=> 'Mesajları tut',

	'SELECT_FORM'			=> 'Form seç',
	'SELECT_USER'			=> 'Kullanıcı seç',

	'USER_ADMIN'					=> 'Kullanıcı Yönetimi',
	'USER_ADMIN_ACTIVATE'			=> 'Hesabı aktifleştir',
	'USER_ADMIN_ACTIVATED'			=> 'Kullanıcı başarıyla aktifleştirildi',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Avatar, kullanıcı hesabından başarıyla silindi',
	'USER_ADMIN_BAN_EMAIL'			=> 'E-posta\'dan yasakla',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Kullanıcı yönetimi yoluyla e-posta adresini yasaklar',
	'USER_ADMIN_BAN_IP'				=> 'IP\'den yasakla',
	'USER_ADMIN_BAN_IP_REASON'		=> 'Kullanıcı yönetimi yoluyla IP adresini yasaklar',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Kullanıcı yönetimi yoluyla kullanıcı adını yasaklar',
	'USER_ADMIN_BAN_USER'			=> 'Kullanıcı adından yasakla',
	'USER_ADMIN_DEACTIVATE'			=> 'Hesabı deaktifleştir',
	'USER_ADMIN_DEACTIVED'			=> 'Kullanıcı başarıyla deaktifleştirildi',
	'USER_ADMIN_DEL_ATTACH'			=> 'Tüm eklentileri sil',
	'USER_ADMIN_DEL_AVATAR'			=> 'Avatarı sil',
	'USER_ADMIN_DEL_POSTS'			=> 'Tüm mesajları sil',
	'USER_ADMIN_DEL_SIG'			=> 'İmzayı sil',
	'USER_ADMIN_EXPLAIN'			=> 'Buradan kullanıcılarınızın bilgilerini değiştirebilir ve bazı özel ayarlar yapabilirsiniz.',
	'USER_ADMIN_FORCE'				=> 'Zorunlu tekrar aktivasyon',
	'USER_ADMIN_MOVE_POSTS'			=> 'Tüm mesajları taşı',
	'USER_ADMIN_SIG_REMOVED'		=> 'İmza kullanıcı hesabından başarıyla silindi',
	'USER_ATTACHMENTS_REMOVED'		=> 'Bu kullanıcı tarafından oluşturulan tüm eklentiler başarıyla silindi',
	'USER_AVATAR_UPDATED'			=> 'Kullanıcı avatarı başarıyla güncellendi',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Normal profil alanları',
	'USER_DELETED'					=> 'Kullanıcı başarıyla silindi',
	'USER_GROUP_ADD'				=> 'Gruba kullanıcı ekle',
	'USER_GROUP_NORMAL'				=> 'Normal gruplar kullanıcısı bir üye',
	'USER_GROUP_PENDING'			=> 'Grup kullanıcısı askıda',
	'USER_GROUP_SPECIAL'			=> 'Özel gruplar kullanıcısı bir üye',
	'USER_NO_ATTACHMENTS'         => 'Gösterilecek hiç bir eklenti dosyası yok.',
	'USER_OVERVIEW_UPDATED'			=> 'Kullanıcı detayları güncellendi',
	'USER_POSTS_DELETED'			=> 'Bu kullanıcı tarafından oluşturulan tüm mesajlar başarıyla silindi',
	'USER_POSTS_MOVED'				=> 'Kullanıcıların mesajları başarıyla hedef foruma taşındı',
	'USER_PREFS_UPDATED'			=> 'Kullanıcı tercihleri güncellendi',
	'USER_PROFILE'					=> 'Kullanıcı profili',
	'USER_PROFILE_UPDATED'			=> 'Kullanıcı profili güncellendi',
	'USER_RANK'						=> 'Kullanıcı rütbesi',
	'USER_RANK_UPDATED'				=> 'Kullanıcı rütbesi güncellendi',
	'USER_SIG_UPDATED'				=> 'Kullanıcı imzası başarıyla güncellendi',
	'USER_TOOLS'					=> 'Temel araçlar',
));

?>