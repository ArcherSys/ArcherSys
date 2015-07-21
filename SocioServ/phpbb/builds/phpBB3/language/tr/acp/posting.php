<?php
/** 
*
* posting [Turkish]
*
* @package language
* @version $Id: posting.php,v 1.38 2007/06/09 11:10:23 acydburn Exp $ 
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

// BBCodes 
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode HTML yapısıyla neyin nasıl gösterileceği konusunda yapılan uygulamalardır. Bu sayfadan BBCode ekleyebilir, silebilir ve özel BBCode\'ları düzenleyebilirsiniz.',
	'ADD_BBCODE'				=> 'Yeni bir BBCode ekle',

	'BBCODE_ADDED'				=> 'BBCode başarıyla eklendi',
	'BBCODE_EDITED'				=> 'BBCode başarıyla düzenlendi',
	'BBCODE_NOT_EXIST'			=> 'Seçmiş olduğunuz BBCode mevcut değil',
	'BBCODE_HELPLINE'			=> 'Yardım satırı',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Bu alan BBcode üzerine fare ile gelindiğinde metin içerir.',
	'BBCODE_HELPLINE_TEXT'		=> 'Yardım satırı metni',
	'BBCODE_INVALID_TAG_NAME'	=> 'Seçtiğiniz BBCode etiket adı zaten var.',
	'BBCODE_INVALID'         => 'BBCode\'unuz geçersiz bir form içinde yapıldı.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Özel BBCode\'unuz bir açık ve bir kapalı etiket içermelidir.', 
	'BBCODE_TAG'				=> 'Etiket',
	'BBCODE_TAG_TOO_LONG'		=> 'Seçtiğiniz etiket adı çok uzun.',
	'BBCODE_TAG_DEF_TOO_LONG'		=> 'Girdiğiniz etiket tanımı çok uzun, lütfen etiket tanımınızı kısaltın.',
	'BBCODE_USAGE'				=> 'BBCode kullanımı',
	'BBCODE_USAGE_EXAMPLE'		=> '[hilight={RENK}]{METİN}[/hilight]<br /><br />[font={SADEMETİN1}]{SADEMETİN2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Buradan nasıl BBCode kullanılacağını belirleyebilirsiniz. Girmiş olduğunuz herhangi bir değişkene uygun gelen işareti değiştirin (%salta bakın%s).',

	'EXAMPLE'						=> 'Örnek:',
	'EXAMPLES'						=> 'Örnekler:',

	'HTML_REPLACEMENT'				=> 'HTML yenileme',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {RENK};"&gt;{METİN}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SADEMETİN1};"&gt;{SADEMETİN	2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Buradan varsayılan HTML yenilemesini belirleyebilirsiniz. Yukarıda kullandığınız işaretleri geri koymayı unutmayın!',

	'TOKEN'					=> 'İşaret',
	'TOKENS'				=> 'İşaretler',
	'TOKENS_EXPLAIN'		=> 'İşaretler, kullanıcıların girdikleri kelimelerin mantıksal olarak anlamlandırılıp düzenlenmesidir. Örneğin mesajlarda kullanıcı tarafından girilen bir kelime bu kısımda tanımlanırsa kullanıcı bu kelimeyi yanlış yazsa bile sistem öntanımlı olan bu kelime otomatik olarak düzeltilir. Gerekli olduğunda aşağıdaki örnekte olduğu gibi çift tanımlılar arasında bir sayı eklenerekte kullanılabilir, örnek {METİN1}, {METİN2}.<br /><br />HTML yenileme sınırları içerisinde bu işaretleri herhangi bir dil dizisi olarakta language/ klasörü içerisinde kullanabilirsiniz. Mesela bu şekilde olabilir: {L_<em>&lt;DİZİADI&gt;</em>} burada tanımlanan şekli <em>&lt;DİZİADI&gt;</em> dil dosyasına eklenmesini istediğiniz yapıyla aynı olduğu görülür. Örneğin, {L_WROTE} &quot;wrote&quot; şeklinde gösterilecektir ya da yerel olarak kullanıcının tercümesine göre değişebilir.<br /><br /><strong>Not: Sadece aşağıda listelenen işaretler özel BBCode’lar dahilinde kullanılabilir.</strong>',
	'TOKEN_DEFINITION'		=> 'Bu ne olabilir?',
	'TOO_MANY_BBCODES'		=> 'Daha fazla BBCode yaratılamaz. Bir ya da daha fazla BBCode u kaldırarak tekrar deneyin',

	'tokens'	=>	array(
		'TEXT'			=> 'Herhangi bir metin, yabancı karakterler içerebilir, sayılar, vb… HTML etiketleri içerisinde bu işareti kullanmamalısınız. Bunun yerine BELİRTEÇ ya da SADEMETİN kullanmayı deneyin.',
    'SIMPLETEXT'   => 'Latin alfabesinden karakterler (A-Z), sayılar, boşluklar, virgüller, noktalar, eksi, artı, tire ve altçizgi',
    'IDENTIFIER'   => 'Latin alfabesinden karakterler (A-Z), sayılar, tire ve altçizgi',
		'NUMBER'		=> 'Sayı dizilerinin herhangi bir serisi',
		'EMAIL'			=> 'Geçerli e-posta adresi',
		'URL'			=> 'Herhangi bir protokolde geçerli URL kullanımı (http, ftp, gibi… javascript exploitleri için kullanılamaz). Hiç biri verilmezse, diziye &quot;http://&quot; ön adı verilir.',
		'LOCAL_URL'		=> 'Yerel URL, URL Başlık sayfasıyla ilgili olmalıdır ve sunucu ismi ya da protokolü içermemelidir.',
		'COLOR'			=> 'Bir HTML rengi, <samp>#FF1234</samp> şeklinde sayısal form içinde ya da bir <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS renk klavyesi</a> olabilir, <samp>fuchsia</samp> veya <samp>InactiveBorder</samp> gibi de olabilir'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Bu sayfadan, kullanıcıların mesajlarına ve başlıklara koydukları ikonları ekleyebilecek, kaldırabilecek ve düzenleyebileceksiniz. Bu ikonlar Forum listelenirken ya da konuları yazarken görüntülenir. Yeni paket ikonları yaratabilir ve yükleyebilirsiniz.',
	'ACP_SMILIES_EXPLAIN'	=> 'İfadeler bazen animasyonlu olarak duyguları gösteren küçük resimlerdir. Bu sayfada kullanıcıların mesajlarda ve özel mesajlarda kullandıkları ifadeleri ekleyebilir, kaldırabilir ya da düzenleyebilirsiniz. Yeni paket ifadelerini yaratabilir ve yükleyebilirsiniz.',
	'ADD_SMILIES'			=> 'Çoklu ifadeler ekle',
	'ADD_SMILEY_CODE' => 'Ekstra ifade kodu ekle',
	'ADD_ICONS'				=> 'Çoklu ikonlar ekle',
	'AFTER_ICONS'			=> '%s sonrasında',
	'AFTER_SMILIES'			=> '%s sonrasında',

	'CODE'						=> 'Kod',
	'CURRENT_ICONS'				=> 'Var olan ikonlar',
	'CURRENT_ICONS_EXPLAIN'		=> 'Şu anki kurulu olan ikonlarla ne yapacağınızı seçin.',
	'CURRENT_SMILIES'			=> 'Var olan ifadeler',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Şu anki kurulu olan ifadelerle ne yapacağınızı seçin.',

	'DISPLAY_ON_POSTING'	=> 'Mesaj gönderme sayfasında göster',
  'DISPLAY_POSTING'         => 'Mesaj gönderme sayfasında',
  'DISPLAY_POSTING_NO'      => 'Mesaj gönderme sayfasında değil',



	'EDIT_ICONS'				=> 'İkonları Düzenle',
	'EDIT_SMILIES'				=> 'İfadeleri düzenle',
	'EMOTION'					=> 'Duygu',
	'EXPORT_ICONS'				=> 'icons.pak dosyası çıkar ve indir',
	'EXPORT_ICONS_EXPLAIN'		=> '%sBu linke tıkladığınızda, yüklediğiniz ikonlar için ayarlar <samp>icons.pak</samp> dosyası içerisinde paketlenecektir. Bu <samp>icons.pak</samp> ayar dosyası, ayrıca tüm ikonlarınızın bir <samp>.zip</samp> ya da <samp>.tgz</samp> dosyası kapsamında oluşturularak indirileceği zaman kullanılabilir%s.',
	'EXPORT_SMILIES'			=> 'smilies.pak dosyası çıkar ve indir',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sBu linke tıkladığınızda, yüklediğiniz ifadeler için ayarlar <samp>smilies.pak</samp> dosyası içerisinde paketlenecektir. Bu <samp>smilies.pak</samp> ayar dosyası, ayrıca tüm ifadelerinizin bir <samp>.zip</samp> ya da <samp>.tgz</samp> dosyası kapsamında oluşturularak indirileceği zaman kullanılabilir%s.', 

	'FIRST'			=> 'İlk',

	'ICONS_ADD'				=> 'Yeni bir ikon ekle',
  'ICON_NONE_ADDED'      => 'Hiç bir ikon eklenmedi.',
  'ICONS_ONE_ADDED'      => 'İkon başarıyla eklendi.',
	'ICONS_ADDED'			=> 'İkonlar başarıyla eklendi.',
	'ICONS_CONFIG'			=> 'İkon ayarları',
	'ICONS_DELETED'			=> 'İkon başarıyla kaldırıldı.',
	'ICONS_EDIT'			=> 'İkonu düzenle',
  'ICONS_ONE_EDITED'      => 'İkon başarıyla güncellendi.',
  'ICON_NONE_EDITED'      => 'Hiç bir ikon güncellenmedi.',
	'ICONS_EDITED'			=> 'İkonlar başarıyla güncellendi.',
	'ICONS_HEIGHT'			=> 'İkon yüksekliği',
	'ICONS_IMAGE'			=> 'İkon resmi',
	'ICONS_IMPORTED'		=> 'İkon paketi başarıyla yüklendi.',
	'ICONS_IMPORT_SUCCESS'	=> 'İkon paketi başarıyla alındı',
	'ICONS_LOCATION'		=> 'İkon konumu',
	'ICONS_NOT_DISPLAYED'	=> 'Burada görülen ikonlar mesaj sayfasında gösterilmiyor',
	'ICONS_ORDER'			=> 'İkon düzeni',
	'ICONS_URL'				=> 'İkon resim dosyası',
	'ICONS_WIDTH'			=> 'İkon genişliği',
	'IMPORT_ICONS'			=> 'İkon paketi yükle',
	'IMPORT_SMILIES'		=> 'İfade paketi yükle',

	'KEEP_ALL'			=> 'Hepsini tut',

	'MASS_ADD_SMILIES'	=> 'Çoklu ifadeler ekle',

  'NO_ICONS_ADD'    => 'Eklemek için hiç bir ikon mevcut değil.', 
  'NO_ICONS_EDIT'   => 'Düzenlemek için hiç bir ikon mevcut değil.',
	'NO_ICONS_EXPORT'	=> 'Bir İkon paketi yaratmak için ikonlar yok.',
	'NO_ICONS_PAK'		=> 'Hiç bir ikon paketi bulunmuyor.',
	'NO_SMILIES_ADD'  => 'Eklemek için hiç bir ifade mevcut değil.', 
  'NO_SMILIES_EDIT'  => 'Düzenlemek için hiç bir ifade mevcut değil.',
	'NO_SMILIES_EXPORT'	=> 'Bir İfade paketi yaramak için ifadeler yok.',
	'NO_SMILIES_PAK'	=> 'İfade paketi bulunmuyor.',

	'PAK_FILE_NOT_READABLE'		=> '<samp>.pak</samp> dosyası okunamıyor',

	'REPLACE_MATCHES'	=> 'Benzerleri değiştir',

	'SELECT_PACKAGE'			=> 'Bir paket dosyası seçin',
	'SMILIES_ADD'				=> 'Yeni bir ifade ekle',
  'SMILIES_NONE_ADDED'      => 'Hiç bir ifade eklenmedi.',
  'SMILIES_ONE_ADDED'         => 'İfade başarıyla eklendi.',
  'SMILIES_ADDED'            => 'İfadeler başarıyla eklendi.',
	'SMILIES_CODE'				=> 'İfade Kodu',
	'SMILIES_CONFIG'			=> 'İfade ayarları',
	'SMILIES_DELETED'			=> 'İfade başarıyla kaldırıldı.',
	'SMILIES_EDIT'				=> 'İfadeyi düzenle',
  'SMILIES_NONE_EDITED'      => 'Hiç bir ifade güncellenmedi.',
  'SMILIES_ONE_EDITED'      => 'İfade başarıyla güncellendi.',
  'SMILIES_EDITED'         => 'İfadeler başarıyla güncellendi.',
	'SMILIES_EMOTION'			=> 'Duygu',
	'SMILIES_HEIGHT'			=> 'İfade yüksekliği',
	'SMILIES_IMAGE'				=> 'İfade resmi',
	'SMILIES_IMPORTED'			=> 'İfade paketi başarıyla yüklendi.',
	'SMILIES_IMPORT_SUCCESS'	=> 'İfade paketi başarıyla alındı',
	'SMILIES_LOCATION'			=> 'İfade Konumu',
	'SMILIES_NOT_DISPLAYED'		=> 'Burada görülen ifadeler mesaj sayfasında gösterilmiyor',
	'SMILIES_ORDER'				=> 'İfade sıralaması',
	'SMILIES_URL'				=> 'İfade resim dosyası',
	'SMILIES_WIDTH'				=> 'İfade genişliği',

	'WRONG_PAK_TYPE'	=> 'Belirtilen paket uygun veriye sahip değil.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Buradan otomatik olarak sansürlenecek kelimeleri ekleyebilir, silebilir, değiştirebilirsiniz. Ayrıca insanlar bu kelimeleri kullanıcı isimlerinde de kullanamazlar. Joker olarak * kullanabilirsiniz, Örn: *siklo* ansiklopedi kelimesini, siklo* siklon hecelerini, *siklo dersiklo hecelerini sansürleyecektir.',
	'ADD_WORD'				=> 'Yeni kelime ekle',

	'EDIT_WORD'		=> 'Kelime sansürü düzenle',
	'ENTER_WORD'	=> 'Bir kelime ve onun yerini alacak kelimeyi girmelisiniz',

	'NO_WORD'	=> 'Düzenlemek için kelime seçilmedi',

	'REPLACEMENT'	=> 'Yerine konulacak',

	'UPDATE_WORD'	=> 'Kelime sansürünü güncelle',

	'WORD'				=> 'Kelime',
	'WORD_ADDED'		=> 'Kelime sansürü başarıyla eklendi',
	'WORD_REMOVED'		=> 'Seçilen kelime sansürü başarıyla kaldırıldı',
	'WORD_UPDATED'		=> 'Seçilen kelime sansürü başarıyla güncellendi',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Bu formu kullanarak rütbeler üzerinde ekleme, düzenleme, izleme ve silme işlemi yapabilirsiniz. Ayrıca kendinize özel olarak rütbe oluşturabilirsiniz.',
	'ADD_RANK'				=> 'Yeni rütbe ekle',

	'MUST_SELECT_RANK'		=> 'Bir rütbe seçmelisiniz.',
	
	'NO_ASSIGNED_RANK'		=> 'Özel rütbe atanmadı.',
	'NO_RANK_TITLE'			=> 'Rütbe için bir başlık belirlenmedi.',
	'NO_UPDATE_RANKS'		=> 'Rütbe başarıyla silindi. Bu rütbeleri kullanan kullanıcıların hesapları henüz güncellenmedi. Bu hesaplar üzerindeki rütbeleri elle düzenlemelisiniz.',

	'RANK_ADDED'			=> 'Rütbe başarıyla eklendi.',
	'RANK_IMAGE'			=> 'Rütbe Resmi',
	'RANK_IMAGE_EXPLAIN'	=> 'Rütbeyi tanımlamak için bu küçük resmi kullanabilirsiniz. Dosyanın yolu phpBB klasörüne göre değişir.',
	'RANK_MINIMUM'			=> 'En Düşük Mesaj Sayısı',
	'RANK_REMOVED'			=> 'Rütbe başarıyla silindi.',
	'RANK_SPECIAL'			=> 'Özel rütbe olarak ayarla',
	'RANK_TITLE'			=> 'Rütbe başlığı',
	'RANK_UPDATED'			=> 'Rütbe başarıyla güncellendi.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Burada kullanılmaması gereken kullanıcı isimlerini ayarlayabilirsiniz. Joker karakter * kullanabilirsiniz. Kayıt olmuş bir kullanıcı adını yasaklayamazsınız, bunu yapmak için ilk önce o kullanıcıyı silmelisiniz.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Kullanıcı isimlerini * joker karakteri kullanarak eşleyebilirsiniz.',
	'ADD_DISALLOW_TITLE'	=> 'Yasaklı Bir Kullanıcı Adı Ekle',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Bu listeden yasaklı bir kullanıcı ismini seçip gönder butonuna basarak yasağı kaldırabilirsiniz.',
	'DELETE_DISALLOW_TITLE'		=> 'Yasaklı Bir Kullanıcı adı Kaldır',
	'DISALLOWED_ALREADY'		=> 'Girmiş olduğunuz isim daha önce girilmiş, liste içerisinde bu isim zaten mevcut.',
	'DISALLOWED_DELETED'		=> 'Yasaklı kullanıcı adı başarıyla kaldırıldı',
	'DISALLOW_SUCCESSFUL'		=> 'Yasaklı kullanıcı adı başarıyla eklendi',

	'NO_DISALLOWED'				=> 'Yasaklı kullanıcı adı yok',
	'NO_USERNAME_SPECIFIED'		=> 'İşlemi gerçekleştirmek için bir kullanıcı ismi girmediniz ya da seçmediniz.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Burada raporlar içinde kullanılan sebepleri ve engellenmiş mesajları yönetebilirsiniz. Bir tane varsayılan sebep vardır(* işaretiyle gösterilmiş) ve bu kaldırılamaz. Uygun bir sebep yoksa bu sebep normal olarak özel mesajlarda kullanılır.',
	'ADD_NEW_REASON'		=> 'Yeni sebep ekle',
	'AVAILABLE_TITLES'		=> 'Yerleşik sebep başlıkları mevcut',
	
	'IS_NOT_TRANSLATED'		=> 'Sebebin yeri <strong>belirlenmedi</strong>',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Sebebin yeri <strong>belirlenmedi</strong>. Eğer yerel form belirlemek istiyorsanız, dil dosyaları bildiri sebepleri bölümünden doğru anahtar belirtin.',
	'IS_TRANSLATED'			=> 'Sebebin yeri belirlendi',
	'IS_TRANSLATED_EXPLAIN'		=> 'Sebebin yeri belirlendi. Eğer buraya girdiğiniz başlık dil dosyaları bildiri sebepleri bölümü içerisinde belirlendiyse, başlık ve açıklamanın yerel formu kullanılacaktır.',
	
	'NO_REASON'					=> 'Sebep bulunamadı',
	'NO_REASON_INFO'			=> 'Bir başlık belirlemeli ve bu sebebe uygun bir tanım yapılmalıdır.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Varsayılan "Diğer" sebebi kaldıramazsınız.',

	'REASON_ADD'			=> 'Bildiri/yasaklama sebebi',
	'REASON_ADDED'			=> 'Bildiri/yasaklama sebebi başarıyla eklendi',
	'REASON_ALREADY_EXIST'	=> 'Bu sebep ile birlikte zaten böyle bir başlık var, lütfen bu sebep için başka bir başlık giriniz.',
	'REASON_DESCRIPTION'	=> 'Sebep Açıklaması',
	'REASON_DESC_TRANSLATED'	=> 'Gösterilecek sebep açıklaması',
	'REASON_EDIT'			=> 'Bildiri/yasaklama sebebini düzenle',
	'REASON_EDIT_EXPLAIN'	=> 'Buradan bir sebep ekleyebilir, düzenleyebilirsiniz. Sebep yerel sürüme tercüme edildiyse, burada girilen tanımlamanın yerine kullanılır.',
	'REASON_REMOVED'		=> 'Bildiri/yasaklama sebebi başarıyla kaldırıldı',
	'REASON_TITLE'			=> 'Sebep Başlığı',
	'REASON_TITLE_TRANSLATED'	=> 'Gösterilecek sebep başlığı',
	'REASON_UPDATED'		=> 'Bildiri/yasaklama sebebi başarıyla eklendi',

	'USED_IN_REPORTS'		=> 'Bildirilerde kullanılır',
));

?>