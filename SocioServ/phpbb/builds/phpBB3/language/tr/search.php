<?php
/** 
*
* search [Turkish]
*
* @package language
* @version $Id: search.php,v 1.22 2007/05/10 15:31:21 acydburn Exp $ 
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
	'ALL_AVAILABLE'			=> 'Tümü',
	'ALL_RESULTS'			=> 'Tüm Sonuçlar',

	'DISPLAY_RESULTS'		=> 'Görüntülenecek sonuçlar',

	'FOUND_SEARCH_MATCH'	=> '%d uygun sonuç bulundu',
	'FOUND_SEARCH_MATCHES'	=> '%d uygun sonuç bulundu',
	'FOUND_MORE_SEARCH_MATCHES'	=> '%d uygun sonuçtan fazlası bulundu',

	'GLOBAL'				=> 'Global başlık',

	'IGNORED_TERMS'			=> 'yoksayıldı',
	'IGNORED_TERMS_EXPLAIN'	=> 'İzlenen kelimeler arama sorgunuzda yoksayıldı. Çünkü bunlar çok yaygın olarak kullanılan kelimelerdir: <strong>%s</strong>.',
	
	'JUMP_TO_POST'                  => 'Mesaja geçiş yap',

  'LOGIN_EXPLAIN_EGOSEARCH'   => 'Bu site kendi mesajlarınızı görüntüleyebilmeniz için kayıt olmanızı ve giriş yapmanızı gerekli tutuyor.',

	'NO_KEYWORDS'			=> 'Arama için çok düşük bir kelime belirlediniz. Jokerler hariç her kelime %d karakterden yüksek ve %d karakterden düşük olmalıdır.',
	'NO_RECENT_SEARCHES'	=> 'En son herhangi bir arama yapılmadı.',
	'NO_SEARCH'				=> 'Üzgünüz fakat arama sistemini kullanma izniniz yok.',
	'NO_SEARCH_RESULTS'		=> 'Uygun sonuç bulunamadı.',
	'NO_SEARCH_TIME'		=> 'Üzgünüz fakat şimdilik arama yapamazsınız. Lütfen bir kaç dakika içerisinde tekrar deneyin.',
	'WORD_IN_NO_POST'		=> 'Hiç bir mesaj bulunamadı çünkü <strong>%s</strong> kelimesini içeren herhangi bir mesaj yok.',
	'WORDS_IN_NO_POST'		=> 'Hiç bir mesaj bulunamadı çünkü <strong>%s</strong> kelimelerini içeren herhangi bir mesaj yok.',

	'POST_CHARACTERS'		=> 'karakterini göster',

	'RECENT_SEARCHES'		=> 'Son arananlar',
	'RESULT_DAYS'			=> 'Sonuçlar için gün limiti',
	'RESULT_SORT'			=> 'Sonuçları sırala',
	'RETURN_FIRST'			=> 'Mesajın ilk',
	'RETURN_TO_SEARCH_ADV'	=> 'Gelişmiş aramaya tekrar dön',

	'SEARCHED_FOR'			=> 'Aranan terim',
	'SEARCHED_TOPIC'		=> 'Başlık arandı',
	'SEARCH_ALL_TERMS'		=> 'Bütün terimler için ara ya da girilen önermeyi kullan',
	'SEARCH_ANY_TERMS'		=> 'Herhangi bir terim için ara',
	'SEARCH_AUTHOR'			=> 'Yazar için ara',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'Kısmen uyan sonuçlar için * işaretini joker olarak kullanabilirsiniz.',
	'SEARCH_FIRST_POST'		=> 'Sadece başlığın ilk mesajı',
	'SEARCH_FORUMS'			=> 'Forumlarda ara',
	'SEARCH_FORUMS_EXPLAIN'	=> 'Arama yapmak istediğiniz forum veya forumları seçin. Eğer aşağıdaki “altforumları ara“ özelliğini kapatmazsanız altforumlar otomatik olarak aranacaktır.',
	'SEARCH_IN_RESULTS'		=> 'Bu sonuçlarda ara',
	'SEARCH_KEYWORDS_EXPLAIN'	=> '<strong>+</strong> ile sonuçlarda ayrıca olmasını istediğiniz kelimeleri, <strong>-</strong> ile sonuçlarda ayrıca olmasını istemediğiniz kelimeleri ve <strong>|</strong> ile sonuçlarda sadece olması gereken kelimeleri tanımlayabilirsiniz. Kısmen uyan sonuçlar için * işaretini joker olarak kullanabilirsiniz.',
	'SEARCH_MSG_ONLY'		=> 'Sadece mesaj içeriği',
	'SEARCH_OPTIONS'		=> 'Arama seçenekleri',
	'SEARCH_QUERY'			=> 'Arama sorgusu',
	'SEARCH_SUBFORUMS'		=> 'Alt forumlarda ara',
	'SEARCH_TITLE_MSG'		=> 'Başlıklar ve mesaj içeriği',
	'SEARCH_TITLE_ONLY'		=> 'Sadece konu başlıkları',
	'SEARCH_WITHIN'			=> 'Aranacak alan',
	'SORT_ASCENDING'		=> 'Artan',
	'SORT_AUTHOR'			=> 'Yazar',
	'SORT_DESCENDING'		=> 'Azalan',
	'SORT_FORUM'			=> 'Forum',
	'SORT_POST_SUBJECT'		=> 'Mesaj Başlığı',
	'SORT_TIME'				=> 'Mesaj Zamanı',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Yazar adını %d karakterden düşük belirlemelisiniz.',
));

?>