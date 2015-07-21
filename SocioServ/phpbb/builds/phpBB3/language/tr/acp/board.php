<?php
/** 
*
* acp_board [Turkish]
*
* @package language
* @version $Id: board.php,v 1.86 2007/06/09 11:10:23 acydburn Exp $ 
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
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Burada sitenizin ana işleyişini belirleyebilirsiniz, uygun bir isim ve açıklama verin, ve diğer ayarlar arasında zaman dilimi ile dil için varsayılan değerleri ayarlayın.',
	'CUSTOM_DATEFORMAT'				=> 'Özel…',
	'DEFAULT_DATE_FORMAT'			=> 'Tarih formatı',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Tarih formatı PHP <code>tarih</code> özelliği ile aynıdır.',
	'DEFAULT_LANGUAGE'				=> 'Varsayılan Dil',
	'DEFAULT_STYLE'					=> 'Varsayılan Stil',
	'DISABLE_BOARD'					=> 'Siteyi Kullanıcılara Kapat',
	'DISABLE_BOARD_EXPLAIN'			=> 'Bu işlem, siteyi kullanıcılara kapatacaktır. İsterseniz, kapama nedeni olarak kullanıcıların görebileceği kısa bir mesaj (255 karakter) yazabilirsiniz.',
	'OVERRIDE_STYLE'				=> 'Kullanıcı stilini gözardı et',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Kullanıcıların stillerini varsayılan ile değiştirir.',
	'SITE_DESC'						=> 'Site açıklaması',
	'SITE_NAME'						=> 'Site ismi',
	'SYSTEM_DST'					=> 'Yaz Saati/<abbr title="Gün Işığından Tasarruf Zamanı">GITZ</abbr> uygulamasını aç',
	'SYSTEM_TIMEZONE'				=> 'Sistem zaman dilimi',
	'WARNINGS_EXPIRE'				=> 'Uyarı süresi',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Bir kullanıcının kaydından uyarının otomatik olarak sona ermesi için geçecek gün sayısı.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Bu bölümde bazı forum özelliklerini aktif ve pasif yapabilirsiniz.',

	'ALLOW_ATTACHMENTS'			=> 'Eklentilere izin ver',
 	'ALLOW_BIRTHDAYS'			=> 'Doğum günlerine izin ver',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Doğum günleri girilmesine ve profillerde yaş görüntülenmesine izin verir. Not: Site anasayfasındaki doğum günü listesi ayrı bir yüklü ayar tarafından kontrol edilir.',
	'ALLOW_BOOKMARKS'			=> 'Başlık yer imlerine izni ver',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Kullanıcılar başlıkları yer imlerine kaydedebilirler.',
	'ALLOW_BBCODE'				=> 'BBCode kullanımına izin ver',
	'ALLOW_FORUM_NOTIFY'		=> 'Forumlara aboneliğe izin ver',
	'ALLOW_NAME_CHANGE'			=> 'Kullanıcı adlarının değiştirilmesine izin ver',
	'ALLOW_NO_CENSORS'			=> 'Kelime sansürünün kapatılmasına izin ver',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Kullanıcılar, mesajların ve özel mesajların otomatik kelime sansürünü kapatabilirler.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Özel mesajlarda eklentilere izin ver',
	'ALLOW_SIG'					=> 'İmzalara izin ver',
	'ALLOW_SIG_BBCODE'			=> 'Kullanıcı imzasında BBCode kullanımına izin ver',
	'ALLOW_SIG_FLASH'			=> 'Kullanıcı imzasında <code>[FLASH]</code> BBCode etiketi kullanımına izin ver',
	'ALLOW_SIG_IMG'				=> 'Kullanıcı imzasında <code>[IMG]</code> BBCode etiketi kullanımına izin ver',
	'ALLOW_SIG_LINKS'			=> 'Kullanıcı imzalarında linklerin kullanımına izin ver',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Eğer <code>[URL]</code> BBCode etiketine izin verilmediyse ve otomatik/sihirli URL\'ler kapatıldıysa.',
	'ALLOW_SIG_SMILIES'			=> 'Kullanıcı imzasında ifade kullanımına izin ver',
	'ALLOW_SMILIES'				=> 'İfadelere izin ver',
	'ALLOW_TOPIC_NOTIFY'		=> 'Başlıklara aboneliğe izin ver',
	'BOARD_PM'					=> 'Özel Mesajlaşma',
	'BOARD_PM_EXPLAIN'			=> 'Tüm kullanıcılar için özel mesajlaşmayı aktif ya da pasif yapın.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatarlar kullanıcıların kendilerine yakın hissedip seçtikleri genel olarak küçük, benzersiz resimlerden oluşur. Tema stiline göre çoğunlukla mesajlar görüntülenirken kullanıcı adının hemen altında gösterilir. Siz bu bölümde kullanıcılarınızın kendi avatarlarını nasıl tanımlayacağını belirleyebileceksiniz. Burada önemli bir hususa dikkat etmelisiniz, avatarlarınızın web sunucusunda yaratılmış kayıt klasörlerindeki, yazma işlemine karşı yetkilendirilmesi gerektiğini unutmayın. Lütfen şunu önemle hatırlayın, dosya boyutu sınırlaması sadece yüklenen avatarlar için geçerlidir, bu sınırlama uzak bağlantı verilen resimler için geçerli olmayacaktır.',

	'ALLOW_LOCAL'					=> 'Galeri avatarlarını aç',
	'ALLOW_REMOTE'					=> 'Uzak avatarı aç',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatarlar diğer web sitelerinden bağlantı alır.',
	'ALLOW_UPLOAD'					=> 'Avatar yüklemeyi aç',
	'AVATAR_GALLERY_PATH'			=> 'Avatar galerisinin klasörü',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Ön-yüklenmiş resimler için phpBB ana klasörünüzün alt yolu, örnek: <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Avatar kayıt klasörü',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'phpBB ana klasörünüzün alt yolu, örnek: <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'En yüksek avatar boyutları',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Piksel cinsinden Yükseklik x Genişlik.',
	'MAX_FILESIZE'					=> 'En yüksek avatar dosyası büyüklüğü',
	'MAX_FILESIZE_EXPLAIN'			=> 'Yüklenen avatar dosyaları için.',
	'MIN_AVATAR_SIZE'				=> 'En düşük avatar boyutları',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Piksel cinsinden Yükseklik x Genişlik.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Buradan özel mesajlaşma için varsayılan ayarları belirleyebilirsiniz.',

	'ALLOW_BBCODE_PM'			=> 'Özel mesajlarda BBCode kullanımına izin ver',
	'ALLOW_FLASH_PM'			=> '<code>FLASH</code> BBCode kullanımına izin ver',
	'ALLOW_FLASH_PM_EXPLAIN'   => 'Not: Eğer bu özellik aktifse özel mesajlarda flash kullanımına izin verilir. Ayrıca bu, kullanıcı izinlerine bağlıdır.',
	'ALLOW_FORWARD_PM'			=> 'Özel Mesajların yanıtlanmasına izin ver',
	'ALLOW_IMG_PM'				=> '<code>IMG</code> BBCode kullanımına izin ver',
	'ALLOW_MASS_PM'				=> 'Toptan(çoklu) özel mesajlaşmaya izin ver',
	'ALLOW_PRINT_PM'			=> 'Özel mesajlarda yazdırma izlemesine izin ver',
	'ALLOW_QUOTE_PM'			=> 'Özel mesajlarda alıntı yapmaya izin ver',
	'ALLOW_SIG_PM'				=> 'Özel mesajlarda imzaya izin ver',
	'ALLOW_SMILIES_PM'			=> 'Özel mesajlarda ifadelere izin ver',
	'BOXES_LIMIT'				=> 'Her kutudaki en fazla özel mesaj sayısı',
	'BOXES_LIMIT_EXPLAIN'		=> 'Burada belirtilen miktar kadar kullanıcılar mesaj alırlar. Sınırsız mesaja izin vermek için bu değeri 0 olarak ayarlayın.',
	'BOXES_MAX'					=> 'En fazla özel mesaj klasörü',
	'BOXES_MAX_EXPLAIN'			=> 'Kullanıcılar özel mesajlarında burada belirtilen miktar kadar klasör yaratabilirler.',
	'ENABLE_PM_ICONS'			=> 'Özel mesajlarda Başlık İkonlarının kullanımını aç',
	'FULL_FOLDER_ACTION'		=> 'Dolu klasör için varsayılan eylem',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Eğer bir kullanıcının klasörü dolarsa, kullanıcının klasörü için yapılacak varsayılan eylem, eğer tümü ayarlanırsa uygun olmaz. İstisna olarak sadece “Gönderilen Mesajlar” klasörü için her zaman varsayılan eylem eski mesajları sil şeklindedir.',
	'HOLD_NEW_MESSAGES'			=> 'Yeni mesajları tut',
	'PM_EDIT_TIME'				=> 'Mesajı düzenleme limiti',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Özel mesajlarda mesaj henüz alıcıya ulaşmadıysa, mesajı tekrar düzenlemek için izin verilen zaman limitini ayarlar. Bu eylemi kapatmak için değeri 0 olarak ayarlayın.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Bu bölümde varsayılan mesaj gönderme ayarlarını belirleyebilirsiniz.',
	'ALLOW_POST_LINKS'					=> 'Mesajlarda/özel mesajlarda linklere izin ver',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Eğer <code>[URL]</code> BBCode etiketine izin verilmediyse ve otomatik/sihirli URL\'ler kapatıldıysa.',
  'ALLOW_POST_FLASH'               => 'Mesajlarda <code>[FLASH]</code> BBCode etiketi kullanımına izin ver.',
  'ALLOW_POST_FLASH_EXPLAIN'         => 'Eğer mesajlarda <code>[FLASH]</code> BBCode etiketine izin verilmezse, bunun dışında izin sistemi kontrollerindeki kullanıcılar <code>[FLASH]</code> BBCode etiketi kullanabilir.',
	
	'BUMP_INTERVAL'					=> 'Darbeleme aralığı',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Bir başlıktaki son mesaj ile bu başlığı darbeleme arasında geçecek olan dakika, saat ya da gün sayısı.',
	'CHAR_LIMIT'					=> 'Her mesajda en yüksek karakter sayısı',
	'CHAR_LIMIT_EXPLAIN'			=> 'Bir mesajda izin verilen karakter sayısı. Sınırsız karakter için 0 olarak ayarlayın.',
	'DISPLAY_LAST_EDITED'			=> 'Son değiştirilme zamanı bilgisini göster',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Son değiştirilme zamanı seçili olursa mesajlarda bu bilgi gösterilecektir.',
	'EDIT_TIME'						=> 'Düzenleme zaman limiti',
	'EDIT_TIME_EXPLAIN'				=> 'Yeni bir mesajı düzenlemek için mevcut zaman limiti. Bu eylemi kapatmak için değeri 0 olarak ayarlayın.',
	'FLOOD_INTERVAL'				=> 'Flood aralığı',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Kullanıcının yeni mesajları arasında beklemesi gereken saniye sayısı. Değişik izinlerdeki kullanıcılar için bu yoksayılır.',
	'HOT_THRESHOLD'					=> 'Popüler başlık tanımı',
	'HOT_THRESHOLD_EXPLAIN'     => 'Popüler başlık tanımı için her bir başlıkta gerekli olan mesajlar. Popüler başlıkları kapatmak için 0 olarak ayarlayın.',
	'MAX_POLL_OPTIONS'				=> 'En yüksek anket seçeneği sayısı',
	'MAX_POST_FONT_SIZE'			=> 'Her mesajdaki en yüksek font büyüklüğü',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Bir mesajda izin verilen en yüksek font büyüklüğü. Sınırsız font boyutu için 0 olarak ayarların.',
	'MAX_POST_IMG_HEIGHT'			=> 'Her mesajdaki en fazla resim yüksekliği',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Mesajlardaki resim/flash dosyalarının en fazla yüksekliği. Sınırsız boyut için 0 olarak ayarların.',
	'MAX_POST_IMG_WIDTH'			=> 'Her mesajdaki en fazla resim genişliği',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Mesajlardaki resim/flash dosyalarının en fazla genişliği. Sınırsız boyut için 0 olarak ayarların.',
	'MAX_POST_URLS'					=> 'Her mesajdaki en fazla link sayısı',
	'MAX_POST_URLS_EXPLAIN'			=> 'Bir mesajda izin verilen en fazla URL sayısı. Sınırsız link için 0 olarak ayarlayın.',
	'POSTING'						=> 'Mesajlaşma',
	'POSTS_PER_PAGE'				=> 'Her sayfadaki mesaj sayısı',
	'QUOTE_DEPTH_LIMIT'				=> 'Her mesajda iç içe geçmiş en yüksek alıntı sayısı',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Bir mesajda iç içe geçmiş en yüksek alıntı sayısı. Sınırsız derinlik için 0 olarak ayarlayın.',
	'SMILIES_LIMIT'					=> 'Her mesajdaki en fazla ifade sayısı',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Bir mesajda izin verilen en fazla ifade sayısı. Sınırsız ifade için 0 olarak ayarlayın.',
	'TOPICS_PER_PAGE'				=> 'Her sayfadaki başlık sayısı',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Buradan imzalar için varsayılan tüm ayarları yapabilirsiniz.',

	'MAX_SIG_FONT_SIZE'				=> 'En yüksek imza font büyüklüğü',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Kullanıcı imzasında izin verilmiş en yüksek font büyüklüğü. Sınırsız büyüklük için 0 olarak ayarlayın.',
	'MAX_SIG_IMG_HEIGHT'			=> 'En fazla imza resim yüksekliği',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Kullanıcı imza kısmında resim/flash dosyalarının en fazla yüksekliği. Sınırsız yükselik için 0 olarak ayarlayın.',
	'MAX_SIG_IMG_WIDTH'				=> 'En fazla imza resim genişliği',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Kullanıcı imza kısmında resim/flash dosyalarının en fazla genişliği. Sınırsız genişlik için 0 olarak ayarlayın.',
	'MAX_SIG_LENGTH'				=> 'En yüksek imza uzunluğu',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Kullanıcı imzasındaki en fazla karakter sayısı.',
	'MAX_SIG_SMILIES'				=> 'Her imzada en fazla ifade sayısı',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Kullanıcı İmza kısmında izin verilen en fazla ifade sayısı. Sınırsız ifade için 0 olarak ayarlayın.',
	'MAX_SIG_URLS'					=> 'En fazla imza linkleri',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Kullanıcı imza kısmında izin verilen en fazla linklerin sayısı. 0(Sıfır) olduğunda sınırsız link olur.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Buradan profil ve kayıtla ilgili ayarları düzenleyebilirsiniz.',

	'ACC_ACTIVATION'			=> 'Hesap Aktivasyonu',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Buradaki ayarlarla birlikte kullanıcı foruma hemen giriş yapabilir ya da hesap onaylama zorunluluğu getirilebilir. Arzu ederseniz yeni kayıt işlemini tamamıyla devre dışı bırakabilirsiniz.',
	'ACC_ADMIN'					=> 'Yönetici tarafından',
	'ACC_DISABLE'				=> 'Kapalı',
	'ACC_NONE'					=> 'Yok',
	'ACC_USER'					=> 'Kullanıcı tarafından',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Aynı e-posta adresinin tekrar kullanımına izin ver',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Farklı kullanıcılar aynı e-posta adresiyle kayıt olabilirler.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA faks numarası',
	'COPPA_MAIL'				=> 'COPPA postalaşma adresi',
	'COPPA_MAIL_EXPLAIN'		=> 'COPPA kayıt formlarında gönderilecek olan esas posta adresleri.',
	'ENABLE_COPPA'				=> 'COPPA özelliğini aç',
	'ENABLE_COPPA_EXPLAIN'		=> 'Bu özellik U.S COPPA kurallarına uyum için kullanıcılardan 13 yaş veya üzerinde olduklarını ispat etmelerini ister. Eğer bu özellik kapalıysa COPPA belirli gruplara gösterilmeyecektir.',
	'MAX_CHARS'					=> 'En yüksek',
	'MIN_CHARS'					=> 'En düşük',
	'NO_AUTH_PLUGIN'			=> 'Hiç bir uygun yetki eklentisi bulunmadı.',
	'PASSWORD_LENGTH'			=> 'Şifre Uzunluğu',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Şifrelerin içindeki en düşük ve en yüksek karakter sayısı.',
	'REG_LIMIT'					=> 'Kayıt Girişimleri',
	'REG_LIMIT_EXPLAIN'			=> 'Kullanıcılar kayıt esnasında belirlenen onay kodu girişini aşmaları durumunda kayıt işleminin kilitlenmesine neden olması ile ilgili olarak, girebilecekleri en yüksek onay kodu sayısı.',
	'USERNAME_ALPHA_ONLY'		=> 'Sadece alfanümerik',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanümerik ve boşluklar',
	'USERNAME_ASCII'			=> 'ASCII (uluslararası unicode olmadan)',
	'USERNAME_LETTER_NUM'		=> 'Herhangi bir harf ve sayı',
  'USERNAME_LETTER_NUM_SPACERS'	=> 'Herhangi bir harf, sayı ve boşluk',
	'USERNAME_CHARS'			=> 'Kullanıcı adı karakter sınırı',
	'USERNAME_CHARS_ANY'		=> 'Herhangi bir karakter',
	'USERNAME_CHARS_EXPLAIN'	=> 'Kullanıcı adlarında kullanılmasını engellemek isteğiniz karakterler, bunlar: boşluk, -, +, _, [ ve ].',
	'USERNAME_LENGTH'			=> 'Kullanıcı adı Uzunluğu',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Kullanıcı adlarında en yüksek ve en düşük karakter sayısı.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'			=> 'Buradan, görsel doğrulama varsayılan ayarları ve CAPTCHA ayarlarını tanımlayabilirsiniz.',

 	'CAPTCHA_GD'							=> 'GD CAPTCHA',
 	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD CAPTCHA ön plan paraziti',
	'CAPTCHA_GD_EXPLAIN'					=> 'Daha gelişmiş bir CAPTCHA yapmak için GD kullanır.',
 	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'GD temelinde güçlü CAPTCHA yapmak için ön plan paraziti kullanır.',
 	'CAPTCHA_GD_X_GRID'						=> 'GD CAPTCHA arka plan x-ekseni paraziti',
 	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'GD temelinde güçlü CAPTCHA yapmak için düşük ayarlar kullanır. 0 sayısı x-ekseni arka plan parazitini kapatacaktır.',
 	'CAPTCHA_GD_Y_GRID'						=> 'GD CAPTCHA arka plan y-ekseni paraziti',
 	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'GD temelinde güçlü CAPTCHA yapmak için düşük ayarlar kullanır. 0 sayısı y-ekseni arka plan parazitini kapatacaktır.',
 
 	'CAPTCHA_PREVIEW_MSG'					=> 'Görsel doğrulama ayarlarındaki değişiklikleriniz kaydedilmedi. Bu sadece bir önizlemedir.',
 	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'CAPTCHA, şu anda görünen geçerli ayarlarınız gibi kullanılacaktır. Yenilemek için önizleme butonunu kullanın. Not: Captcha\'ler rastgele haldedir ve bir sonrakinde ilk görüntüden farklı halde olacaktır.',
 	'VISUAL_CONFIRM_POST'					=> 'Misafir mesajları için görsel doğrulamayı aç',
 	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Misafir kullanıcıların toptan veya ard arda mesaj göndermelerini engellemek amacıyla, özel görsel kodların girilmesini zorunlu tutan bir resimdir.',
 	'VISUAL_CONFIRM_REG'					=> 'Kayıtlar için görsel doğrulamayı aç',
 	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Yeni kullanıcıların toptan veya ard arda kayıt olmalarını engellemek amacıyla, özel görsel kodların girilmesini zorunlu tutan bir resimdir.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Buradaki detaylar, kullanıcılarınızın tarayıcılarına gönderilen çerez verilerini tanımlar. Bir çok durumda çerez verileri için burada belirtilmiş varsayılan değerler yeterli olacaktır. Buradaki değerleri dikkatli bir şekilde değiştirmezseniz, yanlış değerler kullanıcılarınızın girişini engelleyebilir.',

	'COOKIE_DOMAIN'			=> 'Çerez domain adresi',
	'COOKIE_NAME'			=> 'Çerez adı',
	'COOKIE_PATH'			=> 'Çerez klasör adresi',
	'COOKIE_SECURE'			=> 'Çerez güvenliği',
	'COOKIE_SECURE_EXPLAIN'	=> 'Sunucunuz SSL modunda çalışıyorsa açın, aksi halde sakın açmayın',
	'ONLINE_LENGTH'				=> 'Çevrimiçi zamanı görüntüleme süresi',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Bu dakikadan sonra aktif olmayan kullanıcılar “Kimler Çevrimiçi” listesinde gözükmeyecektir. Bu değerin yüksekliği, listenin oluşturulması için çok sayıda işlem yapılmasını gerektirecektir.',
	'SESSION_LENGTH'			=> 'Oturum uzunluğu',
	'SESSION_LENGTH_EXPLAIN'	=> 'Bu zamandan sonra oturumlar sona erecektir, saniye cinsinden belirtilmelidir.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Buradan belirli forum fonksiyonlarını açıp kapayabilirsiniz, bu sayede işlem miktarını azaltabilirsiniz. Bir çok sunucuda herhangi bir fonksiyonu kapamanız gerekmez. Aslında, belirli sistemlerde ya da paylaşılmış hosting ekipmanlarında gerekli olmadığına inandığınız fonksiyonların kapatılması bazı kazançlar sağlayabilir. Ayrıca burada sistem yüklemesi ve aktif oturum durumundan çıkıldığında, -ki bu durumda site çevrimdışı olur, bunlar için bazı sınırlamalar belirleyebilirsiniz.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Özel Profil Alanları',
	'LIMIT_LOAD'					=> 'Sistem yükleme sınırı',
	'LIMIT_LOAD_EXPLAIN'			=> 'Eğer sistem, 1-dakika yükleme ortalamasını geçerse bu değer forumu çevrimiçi duruma getirecektir, 1.0 değeri 1 işlemci için ~100% faydalanma anlamındadır. Bu özellik sadece UNIX tabanlı sunucularda ve bu bilgiye erişebilen yerlerde geçerlidir. Eğer phpBB yükleme limitine ulaşamazsa buradaki değer kendini sıfırlayarak 0 olacaktır.',
	'LIMIT_SESSIONS'				=> 'Oturumlar İçin Limit',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Oturumların numarası burada belirtilen değeri aşarsa, forum offline konuma geçer. Değer, 1 olarak girilirse, forum 1 dakika sonra offline olacak demektir. Değerin 0(Sıfır) olması, sınırsız oturum uzunluğuna sahip olunması demektir.',
	'LOAD_CPF_MEMBERLIST'			=> 'Üye listesinde özel profil alanları göstermek için stillere izin ver',
	'LOAD_CPF_VIEWPROFILE'			=> 'Kullanıcı profillerinde özel profil alanları göster',
	'LOAD_CPF_VIEWTOPIC'			=> 'Başlık sayfalarında özel profil alanları göster',
	'LOAD_USER_ACTIVITY'			=> 'Kullanıcıların faaliyetlerini göster',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Aktif Başlık/forum kısımlarında kullanıcı kontrol panelini ve kullanıcı profillerini göster. Eğer 1 Milyon mesaja sahip bir forumunuz varsa bizim tavsiyemiz bu özelliği kapamanızdır.',
	'RECOMPILE_STYLES'			=> 'Bozulmuş stil bileşenlerini yeniden derle.',
	'RECOMPILE_STYLES_EXPLAIN' => 'Dosya sisteminde bulunan stil bileşenlerini güncellemeler için kontrol et ve yeniden derle.',
	'YES_ANON_READ_MARKING'			=> 'Misafirler için başlık işaretlemeyi aç',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Misafirler için okunmuş/okunmamış bilgisi saklanacaktır. Eğer misafirler için her zaman mesajları okuma kapalıysa.',
	'YES_BIRTHDAYS'					=> 'Doğum günü listelemeyi aç',
 	'YES_BIRTHDAYS_EXPLAIN'			=> 'Eğer doğum günü listelemesi aktif değilse hiç bir yerde gösterilmeyecektir. Doğum günü özelliğini kullanmak için bu ayarı aktif etmeniz gerekmektedir.',
	'YES_JUMPBOX'					=> 'Hızlı geçiş kutusunun gösterilmesini aç',
	'YES_MODERATORS'				=> 'Moderatörlerin gösterilmesini aç',
	'YES_ONLINE'					=> 'Çevrimiçi kullanıcı listelemeyi aç',
	'YES_ONLINE_EXPLAIN'			=> 'Ana sayfa, forum, başlık sayfalarındaki çevrimiçi kullanıcı bilgisini gösterir.',
	'YES_ONLINE_GUESTS'				=> 'Çevrimiçi misafirlerin listelenmesini aç',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Misafir bilgilerinin çevrimiçi bölümünde görülmesini sağlar.',
	'YES_ONLINE_TRACK'				=> 'Kullanıcı çevrimiçi/çevrimdışı bilgisinin gösterilmesini aç',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Kullanıcı profillerinde ve başlık sayfalarında çevrimiçi bilgisini gösterir.',
	'YES_POST_MARKING'				=> 'Başlıklardaki noktalama özelliğini aç',
	'YES_POST_MARKING_EXPLAIN'		=> 'Kullanıcının bir başlığa mesaj gönderdiğini belirten siyah bir noktadır.',
	'YES_READ_MARKING'				=> 'Server tabanlı başlık işaretlemeyi aç',
	'YES_READ_MARKING_EXPLAIN'		=> 'Okunmuş/Okunmamış durum bilgilerinin çerez yerine sunucuda depolanmasını sağlayan özelliktir.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB yapısı eklenti veya modüllerin doğrulanmasını destekler. Kullanıcılar foruma girdiklerinde onların nasıl doğrulanacağının belirlenmesine izin verir. Varsayılan olarak üç plug-in bu ihtiyacı karşılar; DB, LDAP and Apache. Hiçbir metot ekstra bir bilgi gerektirmez yani konu ile ilgili seçilmiş bir metot varsa bu bilgi alanını doldurunuz.',

	'AUTH_METHOD'				=> 'Bir doğrulama yöntemi seçiniz',

	'APACHE_SETUP_BEFORE_USE'	=> 'Bu doğrulama metotuna phpBB\'yi ilave etmeden önce apache doğrulama ayarını yapın. Apache doğrulaması için kullanılacak akılda tutulması gereken kullanıcı adı phpBB kullanıcı adınız ile aynı olmalıdır. Apache doğrulaması sadece mod_php ile kullanılabilir (bir CGI sürümü ile değil) ve safe_mode kapalı olmalıdır.',

	'LDAP_DN'						=> 'LDAP tabanı <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Bu ayrılmış isim, kullanıcı bilgisi konumudur, örnek: <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'LDAP e-posta niteliği',
	'LDAP_EMAIL_EXPLAIN'			=> 'Buradan yeni kullanıcılar için otomatik ayarlanacak olan kullanıcınızın e-posta girdisi niteliğinin (eğer bir tane varsa) adını ayarlayabilirsiniz. İlk defa giriş yapan kullanıcılara boş e-posta adresi dahil etmek için burayı boş bırakın.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Belirtilen kullanıcı/şifre ile LDAP sunucusuna bağlanma başarısız oldu.',
	'LDAP_NO_EMAIL'					=> 'Belirtilen e-posta niteliği bulunmuyor.',
	'LDAP_NO_IDENTITY'				=> '%s için bir giriş kimliği bulunamadı.',
 	'LDAP_PASSWORD'					=> 'LDAP şifresi',
 	'LDAP_PASSWORD_EXPLAIN'			=> 'Anonim bağlayıcı kullanılıyorsa boş bırakın. Aksi takdirde yukarıdaki kullanıcı için şifre belirtin. Aktif Dizin Sunucuları için gereklidir. <strong>DİKKAT:</strong> Bu şifre düz metin halinde veritabanına kaydedileceği için veritabanınıza erişebilen ya da bu ayar sayfasını görüntüleyebilen herkese görünecektir.',
  'LDAP_PORT'                  => 'LDAP sunucu portu',
  'LDAP_PORT_EXPLAIN'            => 'İsteğe bağlı olarak varsayılan port olan 389\'un yerine LDAP sunucusuna bağlanmak için kullanılması gereken bir port belirleyebilirsiniz.',
	'LDAP_SERVER'					=> 'LDAP sunucu adı',
	'LDAP_SERVER_EXPLAIN'			=> 'Eğer LDAP kullanıyorsanız bu, LDAP sunucusunun IP adresi ya da ana makine adıdır. Alternatif olarak ldap://anamakineadı:port/ gibi bir URL belirtebilirsiniz.',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Bu, giriş kimliği kontrolü için arama, yani verilmiş bir anahtardır. örnek: <var>uid</var>, <var>sn</var>, v.b.',
 	'LDAP_USER'						=> 'LDAP kullanıcı <var>dn</var>',
 	'LDAP_USER_EXPLAIN'				=> 'Anonim bağlayıcı kullanılıyorsa boş bırakın. Eğer giriş denemelerinde doğru kullanıcıyı bulmak için seçkin isim belirtildiyse phpBB bu ismi kullanacaktır , ör. e.g. <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Aktif Dizin Sunucuları için gereklidir.',	
  'LDAP_USER_FILTER'            => 'LDAP kullanıcı filtresi',
  'LDAP_USER_FILTER_EXPLAIN'      => 'İsteğe bağlı olarak aranan objeler için ilave filtreler ile daha fazla limit belirleyebilirsiniz. Örneğin, <samp>objectClass=posixGroup</samp> şeklinde istenilen sonuçta <samp>(&(uid=$username)(objectClass=posixGroup))</samp> kullanılır.',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Buradan alan adı ile ilgili ayarları ve sunucu ayarlarını tanımlayabilirsiniz. Girdiğiniz verilerin doğrulundan kesin olarak emin olun. Hatalı olması durumunda e-postaların hatalı bilgiler içermesine sebep olunacaktır. Alan adını girdiğinizde şunu hatırlayın: mutlaka http:// veya diğer protokol terimlerini içermelidir. Sunucunuzun farklı bir değer kullandığını biliyorsanız ancak bu durumda port numaralarını değiştirin, port\'un 80 olması bir çok durumda doğrudur.',

	'ENABLE_GZIP'				=> 'GZip sıkıştırmasını aç',
	'ENABLE_GZIP_EXPLAIN'		=> 'Oluşturulan içerik kullanıcıya göndermek için öncelikle sıkıştırılacaktır. Bu, ağ trafiğini azaltabilir fakat ayrıca sunucu ve bağlantı tarafının her ikisinde CPU kullanımı artacaktır.',
	'FORCE_SERVER_VARS'			=> 'Sunucu URL ayarlarını zorla',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Evet olarak seçilmesi durumunda sunucu ayarları buradaki otomatik olarak belirlenmiş değerlere tabi olacak ve kullanılacaktır.',
	'ICONS_PATH'				=> 'Mesaj ikonlarının bulunduğu yol',
	'ICONS_PATH_EXPLAIN'		=> 'phpBB ana klasörünüzün alt yolu, örnek: <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Yol ayarları',
	'RANKS_PATH'				=> 'Rütbe resimlerinin saklandığı yol',
	'RANKS_PATH_EXPLAIN'		=> 'phpBB ana klasörünüzün alt yolu, örnek: <samp>images/ranks</samp>.',
	'SCRIPT_PATH'          => 'Script yolu',
	'SCRIPT_PATH_EXPLAIN'   => 'Alan adına göre phpBB\'nin ilgili konum yolu, ör: <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Domain adı',
	'SERVER_NAME_EXPLAIN'		=> 'Bu sitenin çalıştığı alan adı (örnek: <samp>www.foo.bar</samp>).',
	'SERVER_PORT'				=> 'Sunucu portu',
	'SERVER_PORT_EXPLAIN'		=> 'Sunucunun üzerinde çalıştığı port, çoğunlukla 80 olur, farklı bir port numaranız varsa o zaman değiştirebilirsiniz.',
	'SERVER_PROTOCOL'			=> 'Sunucu Protokolü',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Bu ayarlar sunucu protokolü olarak kullanılır. Boş bırakılırsa protokol, çerez güvenlik ayarları tarafından belirlenir (<samp>http://</samp> veya <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Sunucu URL Ayarları',
	'SMILIES_PATH'				=> 'İfadelerin saklandığı klasör',
	'SMILIES_PATH_EXPLAIN'		=> 'phpBB ana klasörünüzün alt yolu, ör: <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Uzantı grup ikonlarının saklandığı klasör',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'phpBB ana klasörünüzün alt yolu, ör: <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Buradan oturum ve giriş ile ilgili ayaraları belirleyebilirsiniz.',

	'ALL'							=> 'Tümü',
	'ALLOW_AUTOLOGIN'				=> 'Sürekli girişlere izin ver', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Kullanıcı forumu ziyaret ettiğinde otomatik olarak girişinin yapılabilmesi belirlenir.', 
	'AUTOLOGIN_LENGTH'				=> 'Sürekli giriş anahtarının bitiş günü', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Belirlenen gün sonunda sürekli giriş anahtarları kaldırılır. 0(Sıfır) olması durumunda kapalıdır.', 
	'BROWSER_VALID'					=> 'Tarayıcı onayla',
	'BROWSER_VALID_EXPLAIN'			=> 'Her oturumdaki güvenliğini artırmak için, tarayıcı onaylamayı açık hale getirir.',
	'CHECK_DNSBL'					=> 'DNS Kara Listesine karşı IP kontrolü',
	'CHECK_DNSBL_EXPLAIN'			=> 'Eğer aktifse, kullanıcıların kayıt ve mesajları sırasında DNSBL servislerini izleyerek buna karşı IP adresi kontrolü yapar: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> ve <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Bu inceleme sunucuların ayarlarına bağlı olarak biraz sürebilir. Eğer yavaşlama görülürse ya da çok fazla yanlış kesin bildiri varsa bu kontrolü kapatmanız önerilir.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Geçerli MX kaydı için e-posta alan adı kontrolü',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Eğer aktifse, e-posta alan adı sağlayıcısı kayıt ve profil değişikliklerinde geçerli bir MX kaydı için kontrol edilir.',
	'FORCE_PASS_CHANGE'				=> 'Zorunlu şifre değişimi',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Kullanıcıların şifrelerini değiştirmesi için geçecek gün sayısı. Bu eylemi kapatmak için 0 olarak ayarlayın.',
	'FORWARDED_FOR_VALID'                   => '<var>X_FORWARDED_FOR</var> sayfa başlığını onayla',
	'FORWARDED_FOR_VALID_EXPLAIN'   => 'Oturumlar sadece, eğer önceki istek ile aynı <var>X_FORWARDED_FOR</var> sayfa başlığı gönderilirse devam edecektir. Yasaklamalar <var>X_FORWARDED_FOR</var> içindeki IP adreslerine karşı da kontrol edilip yapılacaktır.',
	'IP_VALID'						=> 'Oturum IP onaylama',
	'IP_VALID_EXPLAIN'				=> 'Bir oturumda ne kadar kullanıcı IP numarasının onaylandığını belirlemek için kullanılır. <samp>Tümü</samp> seçeneği tüm adresler ile karşılaştırılır, <samp>A.B.C</samp> ilk olarak x.x.x, <samp>A.B</samp> ilk olarak x.x, <samp>Yok</samp> seçeneği kontrolü kapatır. IPv6 adreslerinde <samp>A.B.C</samp> ilk 4 blok ile karşılaştırılır ve <samp>A.B</samp> ilk 3 blokla karşılaştırılır.',
	'MAX_LOGIN_ATTEMPTS'			=> 'En fazla giriş denemeleri sayısı',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Kullanıcı, kendisine verilen giriş deneme sayısında başarısız olursa, görsel doğrulama kodu aracılığıyla onaylanarak giriş yaptırılır.',
	'NO_IP_VALIDATION'				=> 'Yok',
	'PASSWORD_TYPE'					=> 'Şifre zorluk derecesi',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Şifre kurulurken, nasıl karmaşık bir şifre yapısına ihtiyaç duyulduğu belirlenir. Sonraki özellikler öncekileri kapsar.',
	'PASS_TYPE_ALPHA'				=> 'Harfler ve sayıları içermelidir',
	'PASS_TYPE_ANY'					=> 'Gerek yok',
	'PASS_TYPE_CASE'				=> 'Karışık bir halde olmalıdır',
	'PASS_TYPE_SYMBOL'				=> 'Semboller içermelidir',
	'TPL_ALLOW_PHP'					=> 'Temalarda php\'ye izin ver',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Bu özellik açılırsa, <code>PHP</code> ve <code>INCLUDEPHP</code> raporları onaylanacak ve temaların içinde kullanılacaktır.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Site üzerinden kullanıcılarınıza e-posta gönderdiğinizde bu bilgi kullanılacaktır. Lütfen belirlediğiniz e-posta adresinin doğruluğundan emin olunuz, herhangi bir şekilde geri dönen ve ulaşamayan mesajlar bu belirttiğiniz e-posta adresine gönderilecektir. Eğer sunucunuz kendi doğal yapısındaki mail gönderme sistemini (php temelli) barındırmıyorsa, bunun yerine SMTP yolunu kullanarak e-posta gönderebilirsiniz. Bu durumda sunucunuzun belirlediği bir adres gerekebilir (bu bilgi için hosting firmasına danışın). Sunucunuz bir doğrulama istiyorsa (ve eğer sadece bu yapılacaksa) gerekli olan kullanıcı adını, şifreyi ve yetki metotunu girin.',

	'ADMIN_EMAIL'					=> 'Dönüş e-posta adresi',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Bu, teknik iletişim adresi şeklinde tüm e-postaların dönüş adresi olarak kullanılacaktır. Bu adres, e-postalarda her zaman <samp>Dönüş-Yolu</samp> ve <samp>Gönderici</samp> adresi olarak kullanılacaktır.',
	'BOARD_EMAIL_FORM'				=> 'Kullanıcılar site aracılığıyla e-posta göndersin',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Kullanıcıların e-posta adreslerini göstermek yerine, e-posta gönderilerini site aracılığıyla gerçekleştirirler.',
	'BOARD_HIDE_EMAILS'				=> 'E-posta adreslerini gizle',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Bu fonksiyonla e-posta adresleri tamamen özel olarak gizlenir.',
	'CONTACT_EMAIL'					=> 'İletişim e-posta adresi',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Bu adres, özel bir iletişim noktası gerektiği zaman kullanılacaktır, örnek: spam, hatalı çıktı, vb. Bu, e-postalarda her zaman <samp>Kimden</samp> ve <samp>Kime</samp> adresi olarak kullanılacaktır.',
	'EMAIL_FUNCTION_NAME'			=> 'E-posta fonksiyon ismi',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'PHP aracılığıyla posta gönderiminde kullanılacak e-posta fonksiyonu.',
	'EMAIL_PACKAGE_SIZE'			=> 'E-posta paket boyutu',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Bu, bir paketin içerisinden gönderilecek olan en fazla e-posta sayısıdır. Bu ayar dahili mesaj sırasına uygulanır; eğer teslim edilmeyen bildiri e-postaları ile sorunlarınız varsa bu ayarı 0 yapın.',
	'EMAIL_SIG'						=> 'E-posta imzası',
	'EMAIL_SIG_EXPLAIN'				=> 'Site tarafından gönderilen tüm e-postalara bu yazı eklenir.',
	'ENABLE_EMAIL'					=> 'Forum genelinde e-posta gönderimini aç.',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Bu özellik kapatılırsa, forum genelinde hiçbir e-posta gönderilemeyecektir.',
	'SMTP_AUTH_METHOD'				=> 'SMTP için doğrulama metodu',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Ancak kullanıcı adı ve şifre girildiğinde kullanılır, Bu metodun nasıl kullanılacağından emin değilseniz hosting firmanıza danışınız.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'GİRİŞ',
	'SMTP_PASSWORD'					=> 'SMTP şifresi',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Sadece smtp sunucunuz şifre istiyorsa giriniz.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP sunucu portu',
	'SMTP_PORT_EXPLAIN'				=> 'Sadece SMTP sunucunuzun farklı bir kullandığını biliyorsanız değiştiriniz.',
	'SMTP_SERVER'					=> 'SMTP sunucu adresi',
	'SMTP_SETTINGS'					=> 'SMTP ayarları',
	'SMTP_USERNAME'					=> 'SMTP kullanıcı adı',
	'SMTP_USERNAME_EXPLAIN'			=> 'Sadece SMTP sunucunuz kullanıcı adı istiyorsa girin.',
	'USE_SMTP'						=> 'E-posta için SMTP sunucusu kullan',
	'USE_SMTP_EXPLAIN'				=> '“Evet” seçilmesi durumunda, sunucunuzun yerel posta fonksiyonu yerine, isim verilmiş sunucu ile e-posta göndermek isterseniz veya zorundaysanız kullanılır.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Buradan anlık mesaj gönderme ve site notları için Jabber kullanımını açabilir ve kontrol edebilirsiniz. Jabber açık kaynak kodlu protokoldür ve bu yüzden herhangi bir kimse tarafından kullanılabilir. Bazı Jabber Sunucuları transports ve gateways içerirler. Bu durum size diğer networkler üzerindeki kullanıcılarla iletişim kurmanıza izin verir. Tüm sunucular olmasada destekledikleri Transports ve protokoller üzerindeki değişim, işletim tarafından transports u engelleyebilir. Lütfen kayıtlı hesap bilgilerini daha önceden girdiğinize emin olun - phpBB buraya girdiğiniz bilgileri kullanacaktır.',

	'ERR_JAB_AUTH'			=> 'Jabber sunucusu üzerinde yetkilendirilemedi',
	'ERR_JAB_CONNECT'		=> 'Jabber sunucusuna bağlanılamadı',
	'JAB_ENABLE'				=> 'Jabber\'i aç',
	'JAB_ENABLE_EXPLAIN'		=> 'Jabber mesajlaşma ve haberleşme kullanımını açar.',
	'JAB_PACKAGE_SIZE'			=> 'Jabber paket boyutu',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Bu, bir paketin içine gönderilecek olan mesaj sayısıdır. Eğer 0 olarak ayarlanırsa mesaj hemen gönderilecektir ve daha sonra gönderim için sıraya konulmayacaktır.',
	'JAB_PASSWORD'				=> 'Jabber şifresi',
	'JAB_PORT'					=> 'Jabber portu',
	'JAB_PORT_EXPLAIN'			=> 'Portun 5222 olmadığını biliyorsanız burayı boş bırakın.',
	'JAB_SERVER'				=> 'Jabber sunucusu',
	'JAB_SERVER_EXPLAIN'		=> 'Sunucunuzun bir listesi için %sjabber.org%s adresine bakın.',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber ayarları başarıyla değiştirildi.',
  'JAB_USE_SSL'            => 'Bağlantı için SSL kullan',
  'JAB_USE_SSL_EXPLAIN'      => 'Eğer bu özellik aktifse, kabul ettirmek için güvenli bağlantı denenecektir. Eğer belirlenen port 5222 ise Jabber portu 5223 olarak değiştirilecektir.',
	'JAB_USERNAME'				=> 'Jabber kullanıcı adı',
	'JAB_USERNAME_EXPLAIN'		=> 'Bir kullanıcı adı belirtin. Kullanıcı adı doğruluk için kontrol edilmeyecektir.',
));

?>