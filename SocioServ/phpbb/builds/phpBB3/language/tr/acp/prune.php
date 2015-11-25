<?php
/** 
*
* acp_prune [Turkish]
*
* @package language
* @version $Id: prune.php,v 1.13 2007/05/11 12:25:28 acydburn Exp $ 
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Buradan sitenizdeki kullanıcıları silebilirsiniz (veya deaktif edebilirsiniz). Bu değişik yollarla yapılabilir; mesaj sayısına göre, son aktifliğe göre, v.b. Bu kriterlerin her biri birleşik olabilir, örneğin. 10 mesajdan az göndermiş ve son aktifliği 2002-01-01 yılından önce olan kullanıcıları budayabilirsiniz. Alternatif olarak kullanıcıların bir listesini direkt olarak metin kutusuna girebilirsiniz, bu durumda girilen kriterler yoksayılacaktır. Bunu yaparken dikkat etmelisiniz! Bir kere silinen bir kullanıcının geri dönüşü yoktur.',

	'DEACTIVATE_DELETE'			=> 'Deaktifleştir veya sil',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Deaktif kullanıcıları veya tamamen silmek istediklerinizi seçin, not: bu geri dönüşü olmayan bir işlemdir!',
	'DELETE_USERS'				=> 'Sil',
	'DELETE_USER_POSTS'			=> 'Budanan kullanıcı mesajlarını sil',
	'DELETE_USER_POSTS_EXPLAIN' => 'Silinen kullanıcılar tarafından oluşturulan mesajları siler, eğer kullanıcılar aktif değilse bir etkisi olmaz.',

	'JOINED_EXPLAIN'			=> '<kbd>YYYY-AA-GG</kbd> formatında bir tarih girin.',

	'LAST_ACTIVE_EXPLAIN'		=> '<kbd>YYYY-AA-GG</kbd> formatında bir tarih girin.',
	
 	'PRUNE_USERS_LIST'				=> 'Budanan kullanıcılar',
	'PRUNE_USERS_LIST_DELETE'		=> 'Budanacak kullanıcılar için seçilen kritere göre alttaki hesaplar silinecekti.',
 	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Budanacak kullanıcılar için seçilen kritere göre alttaki hesaplar deaktif edilecekti.',

	'SELECT_USERS_EXPLAIN'		=> 'Belirlenen kullanıcı adlarını buraya girin, bunlar altta tercih edilen kriterleri kullanacaklardır.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Seçilen kullanıcılar başarıyla deaktif edildi',
	'USER_DELETE_SUCCESS'		=> 'Seçilen kullanıcılar başarıyla silindi',
	'USER_PRUNE_FAILURE'		=> 'Seçilen kritere uygun hiç bir kullanıcı yok.',
	 
 	'WRONG_ACTIVE_JOINED_DATE'	=> 'Girilen tarih hatalı, tarih <kbd>YYYY-MM-DD</kbd> formatına aykırı girildi.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Bu seçtiğiniz gün sayısı kadar süre içerisinde mesaj gönderilmeyen herhangi bir başlık varsa silecektir. Eğer bir sayı girmezseniz o zaman bütün başlıklar silinecektir. Yayında olan anketlerin bulunduğu başlıklar silinmeyecek ve sabitler ile duyurular silinecektir. Bu başlıkları elle silmek zorundasınız.',

	'FORUM_PRUNE'		=> 'Forum budaması',

	'NO_PRUNE'			=> 'Hiç bir forum budanmadı.',

	'SELECTED_FORUM'	=> 'Seçilen forum',
	'SELECTED_FORUMS'	=> 'Seçilen forumlar',

	'POSTS_PRUNED'					=> 'Mesajlar budandı',
	'PRUNE_ANNOUNCEMENTS'			=> 'Budama duyuruları',
	'PRUNE_FINISHED_POLLS'			=> 'Kapatılan anketleri buda',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Süresi dolan anketlerin bulunduğu başlıkları siler.',
	'PRUNE_FORUM_CONFIRM'         => 'Belirtilen ayarlar ile seçilen forumları budamak istediğinize emin misiniz? Budanan mesajlar ve başlıklar kaldırıldığı zaman geri alınamaz.',
	'PRUNE_NOT_POSTED'				=> 'En son gönderilen mesajdan beri geçen gün sayısı',
	'PRUNE_NOT_VIEWED'				=> 'En son görüntülemeden beri geçen gün sayısı',
	'PRUNE_OLD_POLLS'				=> 'Eski anketleri buda',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Uzun zamandır oy verilmemiş anketlerin bulunduğu başlıkları siler.',
	'PRUNE_STICKY'					=> 'Sabit başlıkları buda',
	'PRUNE_SUCCESS'					=> 'Forumlar başarıyla budandı.',

	'TOPICS_PRUNED'		=> 'Başlıklar budandı',
));

?>