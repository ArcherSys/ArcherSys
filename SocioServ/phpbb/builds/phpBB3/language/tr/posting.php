<?php
/** 
*
* posting [Turkish]
*
* @package language
* @version $Id: posting.php,v 1.68 2007/06/16 12:25:36 acydburn Exp $ 
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
	'ADD_ATTACHMENT'			=> 'Eklenti yüklemesi',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Bir veya daha fazla dosya eklemek istiyorsanız alttaki açıklamaları doldurun.',
	'ADD_FILE'					=> 'Dosya ekle',
	'ADD_POLL'					=> 'Anket oluştur',
	'ADD_POLL_EXPLAIN'			=> 'Eğer başlığa bir anket eklemek istemiyorsanız bu alanları boş bırakın.',
	'ALREADY_DELETED'			=> 'Üzgünüz fakat bu mesaj zaten silindi.',
	'ATTACH_QUOTA_REACHED'		=> 'Üzgünüz, pano eklenti kotası aşıldı.',
	'ATTACH_SIG'				=> 'İmza ekle (imzalar KKP yoluyla değiştirilebilir)',

	'BBCODE_A_HELP'				=> 'Satır içi yüklenen eklenti: [attachment=]dosyaadı.uzantı[/attachment]',
	'BBCODE_B_HELP'				=> 'Kalın yazı: [b]metin[/b]',
	'BBCODE_C_HELP'				=> 'Kod görüntüsü: [code]kod[/code]',
	'BBCODE_E_HELP'				=> 'Liste: Öge listesi ekle',
	'BBCODE_F_HELP'				=> 'Font boyutu: [size=x-small]küçük metin[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>KAPALI</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>AÇIK</em>',
	'BBCODE_I_HELP'				=> 'İtalik yazı: [i]metin[/i]',
	'BBCODE_L_HELP'				=> 'Liste: [list]metin[/list]',
	'BBCODE_LISTITEM_HELP'	=> 'Liste maddesi: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'Sıralı liste: [list=]metin[/list]',
	'BBCODE_P_HELP'				=> 'Resim ekle: [img]http://resim_url[/img]',
	'BBCODE_Q_HELP'				=> 'Alıntı yazısı: [quote]metin[/quote]',
	'BBCODE_S_HELP'				=> 'Font rengi: [color=red]metin[/color] İpucu: ayrıca, color=#FF0000 şeklinde de kullanabilirsiniz',
	'BBCODE_U_HELP'				=> 'Altı çizgili yazı: [u]metin[/u]',
	'BBCODE_W_HELP'				=> 'URL Ekle: [url]http://url[/url] veya [url=http://url]URL metni[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=yükseklik,genişlik]http://url[/flash]',
	'BUMP_ERROR'				=> 'Son mesajınızdan bu kadar kısa bir süre içinde bu başlığı darbeleyemezsiniz.',

	'CANNOT_DELETE_REPLIED'		=> 'Üzgünüz, fakat sadece cevap gelmeyen mesajları silebilirsiniz.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Bu mesaj kilitlendi. Bu yüzden düzenleyemezsiniz.',
	'CANNOT_EDIT_TIME'			=> 'Bu mesajı düzenleyemez veya silemezsiniz.',
	'CANNOT_POST_ANNOUNCE'		=> 'Üzgünüz fakat duyurular gönderemezsiniz.',	
	'CANNOT_POST_STICKY'		=> 'Üzgünüz fakat sabit başlıklar gönderemezsiniz.',
	'CHANGE_TOPIC_TO'			=> 'Başlık tipini değiştir',
	'CLOSE_TAGS'				=> 'Etiketleri kapat',
	'CURRENT_TOPIC'				=> 'Şu anki başlık',

	'DELETE_FILE'				=> 'Dosyayı sil',
	'DELETE_MESSAGE'			=> 'Mesajı sil',
	'DELETE_MESSAGE_CONFIRM'	=> 'Bu mesajı silmek istediğinize emin misiniz?',
	'DELETE_OWN_POSTS'			=> 'Üzgünüz fakat sadece kendi mesajlarınızı silebilirsiniz.',
	'DELETE_POST_CONFIRM'		=> 'Bu mesajı silmek istediğinize emin misiniz?',
	'DELETE_POST_WARN'			=> 'Bir kere silinen mesaj tekrar geri getirilemez',
	'DISABLE_BBCODE'			=> 'BBCode kullanma',
	'DISABLE_MAGIC_URL'			=> 'Otomatik belirlenen URL linklerini kapat',
	'DISABLE_SMILIES'			=> 'İfadeleri kullanma',
	'DISALLOWED_EXTENSION'		=> '%s uzantısı izinli değil.',
	'DRAFT_LOADED'				=> 'Mesaj gönderme alanı içerisine taslak yüklendi, isterseniz mesajınızı şimdi sonlandırabilirsiniz.<br />Taslağınız bu mesajı gönderdikten sonra silinecektir.',
	'DRAFT_LOADED_PM'    => 'Mesaj gönderme alanı içerisine taslak yüklendi, isterseniz özel mesajınızı şimdi sonlandırabilirsiniz.<br />Taslağınız bu özel mesajı gönderdikten sonra silinecektir.',
	'DRAFT_SAVED'				=> 'Taslak başarıyla kaydedildi.',
	'DRAFT_TITLE'				=> 'Taslak başlığı',

	'EDIT_REASON'				=> 'Bu mesajı düzenleme sebebi',
	'EMPTY_FILEUPLOAD'			=> 'Yüklenilen dosya boş.',
	'EMPTY_MESSAGE'				=> 'Göndermek için bir mesaj girmelisiniz.',
	'EMPTY_REMOTE_DATA'			=> 'Dosya yüklenemedi, lütfen dosyayı elle tekrar yüklemeyi deneyin.',

	'FLASH_IS_OFF'				=> '[flash] <em>KAPALI</em>',
	'FLASH_IS_ON'				=> '[flash] <em>AÇIK</em>',
	'FLOOD_ERROR'				=> 'Son mesajınızdan bu kadar kısa süre içinde diğer bir mesaj gönderemezsiniz.',
	'FONT_COLOR'				=> 'Font rengi',
	'FONT_COLOR_HIDE'			=> 'Gizli font rengi',
	'FONT_HUGE'					=> 'Kocaman',
	'FONT_LARGE'				=> 'Büyük',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Font boyutu',
	'FONT_SMALL'				=> 'Küçük',
	'FONT_TINY'					=> 'Ufacık',

	'GENERAL_UPLOAD_ERROR'		=> 'Buraya eklenti yüklenemiyor: %s.',

	'IMAGES_ARE_OFF'			=> '[img] <em>KAPALI</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>AÇIK</em>',
	'INVALID_FILENAME'			=> '%s hatalı bir dosya adı.',

	'LOAD'						=> 'Yükle',
	'LOAD_DRAFT'				=> 'Taslağı yükle',
	'LOAD_DRAFT_EXPLAIN'		=> 'Buradan taslak seçerek istediğiniz yazıma devam edebilirsiniz. Şu anki mesajınız iptal olacaktır, şu anki tüm mesaj içeriği silinecektir. Kullanıcı Kontrol Panelinizden taslakları görüntüleyebilir, düzenleyebilir ve silebilirsiniz.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Bu forumdaki başlıkları darbelemek için giriş yapmalısınız.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Bu forumdaki mesajları silmek için giriş yapmalısınız.',
	'LOGIN_EXPLAIN_POST'		=> 'Bu foruma mesaj göndermek için giriş yapmalısınız.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Bu forumdaki mesajları alıntı yapmak için giriş yapmalısınız.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Bu forumdaki başlıklara cevap vermek için giriş yapmalısınız.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'En yüksek font boyutunu %1$d olarak kullanabilirsiniz.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Flash dosyalarınız en fazla %1$d piksel yüksekliğinde olabilir.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Flash dosyalarınız en fazla %1$d piksel genişliğinde olabilir.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Resimleriniz en fazla %1$d piksel yüksekliğinde olabilir.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Resimleriniz en fazla %1$d piksel genişliğinde olabilir.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Buraya mesajınızı girin, <strong>%d</strong> karakterden fazlasını içermemelidir.',
	'MESSAGE_DELETED'			=> 'Bu mesaj başarıyla silindi.',
	'MORE_SMILIES'				=> 'Daha fazla ifade görüntüle',

	'NOTIFY_REPLY'				=> 'Mesaja cevap geldiğinde bana bildir',
	'NOT_UPLOADED'				=> 'Dosya yüklenemedi.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Var olan anket seçeneklerini silemezsiniz.',
	'NO_PM_ICON'				=> 'ÖM ikonu yok',
	'NO_POLL_TITLE'				=> 'Bir anket başlığı girmelisiniz.',
	'NO_POST'					=> 'İstenilen mesaj bulunmuyor.',
	'NO_POST_MODE'				=> 'Hiç bir mesaj modu belirtilmedi.',

	'PARTIAL_UPLOAD'			=> 'Yüklenilen dosya sadece kısmen yüklendi.',
	'PHP_SIZE_NA'				=> 'Eklenti\'nin dosya boyutu çok büyük.<br />PHP tarafından php.ini dosyasında belirlenen en yüksek boyut aşılamıyor.',
	'PHP_SIZE_OVERRUN'			=> 'Eklenti\'nin dosya boyutu çok büyük, en fazla yüklenebilen boyut %d MB.<br />Not: Bu ayar php.ini dosyasında yapılmıştır ve üzerine yazılamaz.',
	'PLACE_INLINE'				=> 'Satır içine yerleştir',
	'POLL_DELETE'				=> 'Anketi sil',
	'POLL_FOR'					=> 'Anketin çalışma süresi',
	'POLL_FOR_EXPLAIN'			=> 'Anket süresinin bitmemesi için 0 yazın ya da boş bırakın.',
	'POLL_MAX_OPTIONS'			=> 'Her bir kullanıcı için seçenek',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Bu her bir kullanıcının oy verirken seçebileceği seçenek sayısıdır.',
	'POLL_OPTIONS'				=> 'Anket seçenekleri',
	'POLL_OPTIONS_EXPLAIN'		=> 'Her bir satıra bir seçenek yerleştirin. En fazla <strong>%d</strong> seçenek girebilirsiniz.',
	'POLL_OPTIONS_EDIT_EXPLAIN'   => 'Her seçeneği yeni bir satıra yerleştirin. <strong>%d</strong> seçeneğe kadar girebilirsiniz. Eğer seçenekler eklerseniz ya da kaldırırsanız önceki tüm oylar sıfırlanacaktır.',
	'POLL_QUESTION'				=> 'Anket sorusu',
	'POLL_TITLE_TOO_LONG'		=> 'Anket başlığı 100 karakterden daha az karakter içermelidir.',
 	'POLL_TITLE_COMP_TOO_LONG'	=> 'Anket başlığınızın dilbilgisel olarak boyutu çok geniş, BBCode ya da ifadeleri kaldırmayı dikkate alın.',
	'POLL_VOTE_CHANGE'			=> 'Tekrar oylamaya izin ver',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Eğer bunu aktif ederseniz kullanıcılar kendi oylarını değiştirebileceklerdir.',
	'POSTED_ATTACHMENTS'		=> 'Gönderilen eklentiler',
	'POST_APPROVAL_NOTIFY'      => 'Mesajınız onaylandığı zaman bildiri alacaksınız.',
	'POST_CONFIRMATION'			=> 'Mesajı onayla',
	'POST_CONFIRM_EXPLAIN'		=> 'Otomatik mesajları engelleyebilmek için bu site bir onay kodu girmenizi istiyor. Alttaki resmin içerisinde gösterilen kodu görmelisiniz. Eğer kodu bozuk görüyor veya okuyamıyorsanız lütfen %sSite Yöneticisi%s ile iletişime geçin.',
	'POST_DELETED'				=> 'Bu mesaj başarıyla silindi.',
	'POST_EDITED'				=> 'Bu mesaj başarıyla düzenlendi.',
	'POST_EDITED_MOD'			=> 'Bu mesaj başarıyla düzenlendi, fakat görüntülenebilmesi için önce bir moderatör tarafından onaylanması gerekiyor.',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Mesaj ikonu',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Mesaj incelemesi',
	'POST_REVIEW_EXPLAIN'		=> 'Bu başlığa en az bir yeni mesaj gönderildi. Bunun ışığında dilerseniz mesajınızı inceleyebilirsiniz.',
	'POST_STORED'				=> 'Bu mesaj başarıyla gönderildi.',
	'POST_STORED_MOD'			=> 'Bu mesaj başarıyla gönderildi, fakat görüntülenebilmesi için önce bir moderatör tarafından onaylanması gerekiyor.',
	'POST_TOPIC_AS'				=> 'Farklı başlık gönder',
	'PROGRESS_BAR'				=> 'İlerleme çubuğu',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Birbirleri içerisinde sadece %1$d alıntı yapabilirsiniz.',

	'SAVE'						=> 'Kaydet',
	'SAVE_DATE'					=> 'Kaydedilen tarih',
	'SAVE_DRAFT'				=> 'Taslağı kaydet',
	'SAVE_DRAFT_CONFIRM'		=> 'Not: Kaydedilen taslaklar sadece mesajı ve konuyu içermektedir, başka diğer ögeler silinecektir. Taslağınızı şimdi kaydetmek istiyor musunuz?',
	'SMILIES'					=> 'İfadeler',
	'SMILIES_ARE_OFF'			=> 'İfadeler <em>KAPALI</em>',
	'SMILIES_ARE_ON'			=> 'İfadeler <em>AÇIK</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'		=> 'Sabit/Duyuru zaman limiti',
	'STICK_TOPIC_FOR'			=> 'Başlık sabitleme süresi',
	'STICK_TOPIC_FOR_EXPLAIN'		=> 'Sabit/Duyuru süresinin bitmemesi için 0 yazın ya da boş bırakın.',
	'STYLES_TIP'				=> 'İpucu: Metni seçerek stilleri daha kolay uygulayabilirsiniz.',

	'TOO_FEW_CHARS'				=> 'Mesajınız fazla karakter içeriyor.',
	'TOO_FEW_POLL_OPTIONS'		=> 'En az iki anket seçeneği girmelisiniz.',
	'TOO_MANY_ATTACHMENTS'		=> 'Başka eklenti ekleyemezsiniz, en fazla %d tane eklenebilir.',
	'TOO_MANY_CHARS'			=> 'Mesajınız çok fazla karakter içeriyor.',
  'TOO_MANY_CHARS_POST'      => 'Mesajınız %1$d karakter içeriyor. En fazla izin verilen karakter sayısı %2$d.',
  'TOO_MANY_CHARS_SIG'      => 'İmzanız %1$d karakter içeriyor. En fazla izin verilen karakter sayısı %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Çok fazla anket seçeneği girmeyi denediniz.',
	'TOO_MANY_SMILIES'			=> 'Mesajınız çok fazla ifade içeriyor. İzin verilen en fazla ifade sayısı %d.',
	'TOO_MANY_URLS'				=> 'Mesajınız çok fazla url içeriyor. İzin verilen en fazla URL sayısı %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Önceden var olan anket seçeneklerinden her kullanıcı için daha fazla seçenek belirleyemezsiniz.',
	'TOPIC_BUMPED'				=> 'Başlık başarıyla darbelendi.',

	'UNAUTHORISED_BBCODE'		=> 'Bazı BBCode\'ları kullanamazsınız: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Bu başlığı globalden tekrar normal başlığa çevirmek için, bu başlığın görüntülenmesini istediğiniz forumu seçmelisiniz',
	'UPDATE_COMMENT'			=> 'Yorumu güncelle',
	'URL_INVALID'				=> 'Belirttiğiniz URL hatalı.',
	'URL_NOT_FOUND'				=> 'Belirtilen dosya bulunmuyor.',
	'URL_IS_OFF'				=> '[url] <em>KAPALI</em>',
	'URL_IS_ON'					=> '[url] <em>AÇIK</em>',
	'USER_CANNOT_BUMP'			=> 'Bu forumdaki başlıkları darbeleyemezsiniz.',
	'USER_CANNOT_DELETE'		=> 'Bu forumdaki mesajları silemezsiniz.',
	'USER_CANNOT_EDIT'			=> 'Bu forumdaki mesajları düzenleyemezsiniz.',
	'USER_CANNOT_REPLY'			=> 'Bu foruma cevap gönderemezsiniz.',
	'USER_CANNOT_FORUM_POST'	=> 'Bu forumda mesaj işlemlerini forum tipi desteklemediği için yapamazsınız.',

	'VIEW_MESSAGE'				=> '%sGönderdiğiniz mesajı görüntüleyin%s',

	'WRONG_FILESIZE'			=> 'Dosya çok büyük, en fazla izin verilen boyutlar %1d %2s.',
	'WRONG_SIZE'				=> 'Resim en düşük %1$d piksel genişliğinde, %2$d piksel yüksekliğinde ve en yüksek %3$d piksel genişliğinde ve %4$d piksel yüksekliğinde olmalıdır. Eklenen resim %5$d piksel genişliğinde ve %6$d piksel yüksekliğinde.',
));

?>