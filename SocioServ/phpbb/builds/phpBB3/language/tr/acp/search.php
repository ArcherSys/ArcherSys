<?php
/** 
*
* acp_search [Turkish]
*
* @package language
* @version $Id: search.php,v 1.19 2007/04/28 21:16:31 naderman Exp $ 
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Buradan arama uygulama indekslerini yönetebilirsiniz. Bir uygulamayı normal olarak kullanmadan önce kullanmadığınızın tüm indekslerini silmelisiniz. Arama ayarlarının bazılarını değiştirdikten sonra (ör. en düşük/en yüksek karakter sayısı) bu değişikliklere bağlı olarak indeks yeniden oluşturulabilir.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Buradan arama işlemleri ve mesaj indekslemesi için kullanılacak olan arama uygulaması belirleyebilirsiniz. Farklı seçenekler seçerek istenilen eylemlerin ne kadar işlem yapabileceğinin etkisini ölçebilirsiniz. Bu ayarların bazıları tüm arama motorları için aynıdır.',

 	'COMMON_WORD_THRESHOLD'					=> 'Genel kelime başlangıcı',
 	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Tüm mesajların içerdiği kelimelere önemli yüzdelik oranlarına göre genel olarak bakılacaktır. Genel kelimeler arama sorgularında yoksayılır. Kapatmak için sıfır olarak ayarlayın. Sadece eğer kelimeler 100 mesajdan fazla ise sonuç alınır.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Farklı bir arama uygulaması seçmek istediğinize emin misiniz? Arama uygulaması değişikliğinden sonra yeni arama uygulaması için bir indeks oluşturacaksınız. Eğer eski arama uygulamasına dönmek gibi bir planınız yoksa ayrıca sistem kaynaklarından kazanmak için eski uygulamanın indeksini silebilirsiniz.',
	'CONTINUE_DELETING_INDEX'				=> 'Önceki indeks kaldırma işlemine devam et',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Bir indeks kaldırma işlemi başlatılmıştı. Arama indeks sayfasına erişim için bunu tamamlayacaksınız ya da iptal edeceksiniz.',
	'CONTINUE_INDEXING'						=> 'Önceki indeksleme işlemine devam et',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Bir indeksleme işlemi başlatılmıştı. Arama indeks sayfasına erişim için bunu tamamlayacaksınız ya da iptal edeceksiniz.',
	'CREATE_INDEX'							=> 'İndeks Oluştur',

	'DELETE_INDEX'							=> 'İndeksi Sil',
	'DELETING_INDEX_IN_PROGRESS'			=> 'İndeks silinmesi işlemde',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Arama uygulaması şu anda indeksleri siliyor. Bu işlem bir kaç dakika sürebilir.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'MySQL tam metin uygulaması sadece MySQL4 ve üzeri sürümlerde kullanılabilir.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'MySQL tam metin uygulaması sadece MyISAM tablolarında kullanılabilir.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'İndekslenen mesajların toplam sayısı',
 	'FULLTEXT_MYSQL_MBSTRING'				=> 'mbstring kullanılarak latin olmayan UTF-8 karakterleri desteği:',
 	'FULLTEXT_MYSQL_PCRE'					=> 'PCRE kullanılarak latin olmayan UTF-8 karakterleri desteği:',
 	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Eğer PCRE, unicode karakter özelliklerine sahip değilse, arama uygulaması mbstring’in düzenli ifade motorunu kullanmayı deneyecektir.',
 	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Bu arama uygulaması PCRE unicode karakter özelliklerini gerektiriyor, eğer latin olmayan karakterler için arama yapmak istiyorsanız, bu özellikler sadece PHP 4.4, 5.1 ve üzeri sürümlerde mevcuttur.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Genel Arama Ayarları',
	'GO_TO_SEARCH_INDEX'					=> 'Arama indeks sayfasına git',

	'INDEX_STATS'							=> 'İndeks İstatistikleri',
	'INDEXING_IN_PROGRESS'					=> 'İndeksleme işlemde',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Arama uygulaması panonuzdaki tüm mesajları şu an indeksliyor. Bu işlem panonuzun boyutuna bağlı olarak bir kaç dakika ya da bir kaç saat sürebilir.',

	'LIMIT_SEARCH_LOAD'						=> 'Arama sayfası sistem yüklenme sınırı',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Eğer 1 dakika boyunca sistem yüklenmesi aşılırsa bu değer arama sayfasını çevrimdışı bırakacaktır, bir işlemcinin ~100%\'lük kullanımı 1.0\'a eşitlenecektir. Bu özellik sadece UNIX tabanlı sunucularda bulunur.',

	'MAX_SEARCH_CHARS'						=> 'Aramada indekslenecek en yüksek karakter',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Aramada indekslenecek kelimeler bundan fazla olmayacaktır.',
	'MIN_SEARCH_CHARS'						=> 'Aramada indekslenecek en düşük karakter',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Aramada indekslenecek kelimeler bundan düşük olmayacaktır.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'En düşük yazar adı karakteri',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Kullanıcılar bir joker kullanarak yazar arama işlemi yaptıklarında en düşük bu kadar fazla karakterde isim girebileceklerdir. Eğer yazarın kullanıcı adı bu sayıdan kısaysa, kullanıcının mesajlarını aramak için tam olarak kullanıcı adını girebilirsiniz.',

	'PROGRESS_BAR'							=> 'İlerleme çubuğu',

	'SEARCH_GUEST_INTERVAL'					=> 'Misafir arama flood aralığı',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Misafirlerin aramaları arasında beklemesi gereken saniye sayısı. Eğer bir misafir arama yaparsa diğer tüm misafirler zaman aralığı dolana kadar bekleyecektir.',
 	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Tüm mesajlar şimdi %1$d mesaj id numarasına kadar indekslendi, bu adımda %2$d mesaj indekslendi.<br />Şu anki indekslemenin tahmini değeri her saniyede %3$.1f mesaj.<br />İndeksleme işlemi devam ediyor…',
 	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Tüm mesajlar %1$d mesaj id numarasına kadar arama indeksinden kaldırıldı.<br />Silme işlemi devam ediyor…',
	'SEARCH_INDEX_CREATED'					=> 'Pano veritabanındaki tüm mesajlar başarıyla indekslendi',
	'SEARCH_INDEX_REMOVED'					=> 'Bu uygulama için arama indeksi başarıyla silindi',
	'SEARCH_INTERVAL'						=> 'Kullanıcı arama flood aralığı',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Kullanıcıların aramaları arasında beklemesi gereken saniye sayısı. Bu aralık her kullanıcı için birbirinden bağımsız kontrol edilir.',
	'SEARCH_STORE_RESULTS'					=> 'Arama sonucu zula boyutu',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Zulalanan arama sonuçları saniye cinsinden belirtilecek bu zamandan sonra boşaltılacaktır. Eğer arama zulalamasını kapatmak istiyorsanız 0 yazın.',
	'SEARCH_TYPE'							=> 'Arama Uygulaması',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB mesaj içeriğindeki metinleri arayabilmek için bir uygulama seçmenize izin verir. Varsayılan arama olarak phpBB\'nin kendi tam metin aramasını kullanacaksınız.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Arama uygulaması seçtiniz. Yeni arama uygulamasını kullanmak için seçtiğiniz uygulamanın bir indeksini oluşturmalısınız.',

	'TOTAL_WORDS'							=> 'İndekslenen kelimelerin toplam sayısı',
	'TOTAL_MATCHES'							=> 'Mesaja bağlı indekslenen kelimenin toplam sayısı',

	'YES_SEARCH'							=> 'Arama imkanlarını aç',
	'YES_SEARCH_EXPLAIN'					=> 'Kullanıcı için arama özelliğini üye aramasınıda dahil ederek açar.',
	'YES_SEARCH_UPDATE'						=> 'Tam metin güncellemesini aç',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Mesaj gönderilirken tam metin indekslemesini günceller, eğer arama kapalıysa önemsemeden devam eder.',
));

?>