<?php
/** 
*
* memberlist [Turkish]
*
* @package language
* @version $Id: memberlist.php,v 1.32 2007/05/16 14:44:56 acydburn Exp $ 
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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'En çok aktif olunan forum',
	'ACTIVE_IN_TOPIC'		=> 'En çok aktif olunan başlık',
	'ADD_FOE'				=> 'Düşmanlara ekle',
	'ADD_FRIEND'			=> 'Arkadaşlara ekle',
	'AFTER'					=> 'Sonra',
	
 	'ALL'					=> 'Tümü',
 	
	'BEFORE'				=> 'Önce',

	'CC_EMAIL'				=> 'Bu e-posta\'nın bir kopyasını kendinize gönderin.',
	'CONTACT_USER'			=> 'İletişim',

	'DEST_LANG'				=> 'Dil',
	'DEST_LANG_EXPLAIN'		=> 'Bu mesajın alıcısı için (eğer mevcutsa) uygun bir dil seçin.',

	'EMAIL_BODY_EXPLAIN'	=> 'Bu mesaj düz metin olarak gönderilecektir, içeriğinde herhangi bir HTML kodu veya BBcode kullanmayın. Bu mesaj için dönüş adresi ayarlamış olduğunuz e-posta adresiniz olacaktır.',
	'EMAIL_DISABLED'		=> 'Üzgünüz fakat tüm e-postalara ilişkin özellikler kapatıldı.',
	'EMAIL_SENT'			=> 'E-posta gönderildi.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Bu mesaj düz metin olarak gönderilecektir, içeriğinde herhangi bir HTML kodu veya BBcode kullanmayın. Not: Başlık bilgisi mesaj içeriğine zaten eklenmiştir. Bu mesaj için dönüş adresi ayarlamış olduğunuz e-posta adresiniz olacaktır.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Alıcı için doğru bir e-posta adresi yazmalısınız.',
	'EMPTY_MESSAGE_EMAIL'	=> 'E-posta olarak gönderilecek bir mesaj girmelisiniz.',
	'EMPTY_MESSAGE_IM'      => 'Gönderilecek bir mesaj girmelisiniz.',
	'EMPTY_NAME_EMAIL'		=> 'Alıcının gerçek adını girmelisiniz.',
	'EMPTY_SUBJECT_EMAIL'	=> 'E-posta için bir konu belirtmelisiniz.',
	'EQUAL_TO'				=> 'Eşit',

	'FIND_USERNAME_EXPLAIN'	=> 'Bu formu kullanarak belirli üyeler için arama yapabilirsiniz. Tüm alanları doldurmanıza gerek yoktur. Kısmen uyan sonuçlar için * işaretini joker olarak kullanabilirsiniz. Tarih gireceğiniz zaman yyyy-mm-dd formatını kullanın, ör. 2002-01-01. Bir veya daha fazla kullanıcıyı seçmek için kutucukları işaretleyin (formda ihtiyaç duyulan olası farklı kullanıcı adları da kabul edilmiştir). Alternatif olarak istenilen kullanıcıları işaretleyebilir ve İşaretlileri Ekle butonuna tıklayabilirsiniz.',
	'FLOOD_EMAIL_LIMIT'		=> 'Şu anda başka bir e-posta gönderemezsiniz. Lütfen daha sonra tekrar deneyin.',

	'GROUP_LEADER'			=> 'Grup lideri',

	'HIDE_MEMBER_SEARCH'	=> 'Üye aramasını gizle',

	'IM_ADD_CONTACT'		=> 'İletişime ekle',
	'IM_AIM'				=> 'Not: Bunu kullanmak için AOL Instant Messenger programının yüklenmiş olması gerekmektedir.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'İndirme uygulaması',
	'IM_ICQ'				=> 'Not: Bu kullanıcılar istenilmeyen anlık mesajları almamayı seçmiş olabilirler.',
	'IM_JABBER'				=> 'Not: Bu kullanıcılar istenilmeyen anlık mesajları almamayı seçmiş olabilirler.',
	'IM_JABBER_SUBJECT'		=> 'Bu bir otomatik mesajdır lütfen cevap vermeyin! %2$s kısmında %1$s kullanıcısından mesaj.',
	'IM_MESSAGE'			=> 'Mesajınız',
	'IM_MSNM'				=> 'Not: Bunu kullanmak için Windows Messenger programının yüklenmiş olması gerekmektedir.',
	'IM_MSNM_BROWSER'		=> 'Tarayıcınız bunu desteklemiyor.',
	'IM_MSNM_CONNECT'		=> 'MSNM bağlı değil.\nDevam etmek için MSNM\'e bağlanın.',	
	'IM_NAME'				=> 'Adınız',
	'IM_NO_DATA'			=> 'Bu kullanıcı için uygun iletişim bilgisi yok.',
	'IM_NO_JABBER'			=> 'Üzgünüz, bu sunucuda Jabber kullanıcılarının direkt mesajlaşmaları desteklenmiyor. Yukarıdaki alıcı ile iletişim kurmak için sisteminize Jabber bağlantı programının yüklenmiş olması gerekmektedir.',
	'IM_RECIPIENT'			=> 'Alıcı',
	'IM_SEND'				=> 'Mesaj gönder',
	'IM_SEND_MESSAGE'		=> 'Mesaj gönder',
	'IM_SENT_JABBER'		=> 'Mesajınız %1$s kullanıcısına başarıyla gönderildi.',
	'IM_USER'				=> 'Anlık mesaj gönder',

	'LAST_ACTIVE'				=> 'Son aktiflik',
	'LESS_THAN'					=> 'Daha az',
	'LIST_USER'					=> '1 kullanıcı',
	'LIST_USERS'				=> '%d kullanıcı',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Site, takım listesini görüntülemek için kayıt olmanızı ve giriş yapmanızı gerekli tutuyor.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Site, üye listesine erişim için kayıt olmanızı ve giriş yapmanızı gerekli tutuyor.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Site, kullanıcıları aramak için kayıt olmanızı ve giriş yapmanızı gerekli tutuyor.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Site, profilleri görüntülemek için kayıt olmanızı ve giriş yapmanızı gerekli tutuyor.',

	'MORE_THAN'				=> 'Daha çok',

	'NO_EMAIL'				=> 'Bu kullanıcıya e-posta gönderme izniniz yok.',
	'NO_VIEW_USERS'			=> 'Profilleri veya üye listesini görüntüleme yetkiniz yok.',

	'ORDER'					=> 'Sıra',
	'OTHER'					=> 'Diğer',

	'POST_IP'				=> 'Gönderilen IP/domain adresi',

	'RANK'					=> 'Rütbe',
	'REAL_NAME'				=> 'Alıcı adı',
	'RECIPIENT'				=> 'Alıcı',
	'REMOVE_FOE'			=> 'Düşman sil',
	'REMOVE_FRIEND'			=> 'Arkadaş sil',

	'SEARCH_USER_POSTS'		=> 'Kullanıcı mesajlarını ara',
	'SELECT_MARKED'			=> 'İşaretlileri seç',
	'SELECT_SORT_METHOD'	=> 'Sıralama tipini seçin',
 	'SEND_AIM_MESSAGE'		=> 'AIM mesajı gönder',
 	'SEND_ICQ_MESSAGE'		=> 'ICQ mesajı gönder',
	'SEND_IM'				=> 'Anlık mesajlaşma',
	'SEND_JABBER_MESSAGE'	=> 'Jabber mesajı gönder',
	'SEND_MESSAGE'			=> 'Mesaj',
 	'SEND_MSNM_MESSAGE'		=> 'MSNM/WLM mesajı gönder',
 	'SEND_YIM_MESSAGE'		=> 'YIM mesajı gönder',
	'SORT_EMAIL'			=> 'E-posta',
	'SORT_LAST_ACTIVE'		=> 'Son aktiflik',
	'SORT_POST_COUNT'		=> 'Mesaj sayısı',

	'USERNAME_BEGINS_WITH'	=> 'Şu harf ile başlayan kullanıcı adları',
	'USER_ADMIN'			=> 'Kullanıcı yönetimi',
	'USER_FORUM'			=> 'Kullanıcı istatistikleri',
	'USER_ONLINE'			=> 'Çevrimiçi',
	'USER_PRESENCE'			=> 'Sitedeki yeri',

	'VIEWING_PROFILE'		=> 'Profil görüntüleniyor - %s',
	'VISITED'				=> 'Son ziyaret',

	'WWW'					=> 'Web adresi',
));

?>