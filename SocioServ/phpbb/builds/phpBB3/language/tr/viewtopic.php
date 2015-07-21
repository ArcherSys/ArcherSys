<?php
/** 
*
* viewtopic [Turkish]
*
* @package language
* @version $Id: viewtopic.php,v 1.17 2007/05/10 15:31:21 acydburn Exp $ 
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
	'ATTACHMENT'						=> 'Eklenti',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Eklenti özelliği kapatıldı.',

	'BOOKMARK_ADDED'		=> 'Başlık sık kullanılanlara başarıyla eklendi.',
	'BOOKMARK_REMOVED'		=> 'Başlık sık kullanılanlardan başarıyla silindi.',
	'BOOKMARK_TOPIC'		=> 'Sık kullanılan başlık',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Sık kullanılanlardan sil',
	'BUMPED_BY'				=> 'En son %1$s tarafından %2$s tarihinde darbelendi.',
	'BUMP_TOPIC'			=> 'Başlığı darbele',

	'CODE'					=> 'Kod',

	'DELETE_TOPIC'			=> 'Başlığı Sil',
	'DOWNLOAD_NOTICE'		=> 'Bu mesaja eklenen dosyaları görüntülemek için gerekli yetkilere sahip değilsiniz.',

	'EDITED_TIMES_TOTAL'	=> 'En son %1$s tarafından %2$s tarihinde düzenlendi, toplamda %3$d kere düzenlendi.',
	'EDITED_TIME_TOTAL'		=> 'En son %1$s tarafından %2$s tarihinde düzenlendi, toplamda %3$d kere düzenlendi.',
	'EMAIL_TOPIC'			=> 'Arkadaşına gönder',
	'ERROR_NO_ATTACHMENT'	=> 'Seçilen eklenti artık mevcut değil.',

	'FILE_NOT_FOUND_404'	=> '<strong>%s</strong> dosyası bulunamıyor.',
	'FORK_TOPIC'			=> 'Başlığı kopyala',

	'LINKAGE_FORBIDDEN'		=> 'Bu siteden ya da bu siteye görüntüleme, indirme veya link verme yetkiniz yok.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Bu başlık hakkında bildiriniz var, lütfen giriş yapıp görüntüleyin.',
	'LOGIN_VIEWTOPIC'		=> 'Site, bu başlığı görüntülemek için kayıt olmanızı veya giriş yapmanızı gerekli tutuyor.',

	'MAKE_ANNOUNCE'			=> '“Duyuru” olarak değiştir',
	'MAKE_GLOBAL'			=> '“Global” olarak değiştir',
	'MAKE_NORMAL'			=> '“Normal” olarak değiştir',
	'MAKE_STICKY'			=> '“Sabit” olarak değiştir',
	'MAX_OPTIONS_SELECT'	=> 'En fazla <strong>%d</strong> seçenek seçebilirsiniz',
	'MAX_OPTION_SELECT'		=> '<strong>1</strong> seçenek seçebilirsiniz',
	'MISSING_INLINE_ATTACHMENT'	=> '<strong>%s</strong> Eklentisi bulunamıyor',
	'MOVE_TOPIC'			=> 'Başlığı taşı',

	'NO_ATTACHMENT_SELECTED'=> 'Görüntülemek veya indirmek için bir eklenti seçmediniz.',
	'NO_NEWER_TOPICS'		=> 'Bu forumda daha yeni başlık yok.',
	'NO_OLDER_TOPICS'		=> 'Bu forumda daha eski başlık yok.',
	'NO_UNREAD_POSTS'		=> 'Bu başlıkta daha yeni okunmayan mesaj yok.',
	'NO_VOTE_OPTION'		=> 'Oy vermek için bir seçenek belirlemelisiniz.',
	'NO_VOTES'				=> 'Oy yok',

	'POLL_ENDED_AT'			=> 'Anket %s tarihinde bitecek',
	'POLL_RUN_TILL'			=> 'Anket %s tarihine kadar sürecek',
	'POLL_VOTED_OPTION'		=> 'Bu seçenek için oy verdiniz',
	'PRINT_TOPIC'			=> 'Yazıcı görüntüsü',

	'QUICK_MOD'				=> 'Kolay-mod araçları',
	'QUOTE'					=> 'Alıntı',

	'REPLY_TO_TOPIC'		=> 'Başlığa cevap ver',
	'RETURN_POST'			=> '%sMesaja geri dön%s',

	'SUBMIT_VOTE'			=> 'Oy ver',

	'TOTAL_VOTES'			=> 'Toplam oy',

	'UNLOCK_TOPIC'			=> 'Başlığın kilidini aç',

	'VIEW_INFO'				=> 'Mesaj ayrıntıları',
	'VIEW_NEXT_TOPIC'		=> 'Sonraki başlık',
	'VIEW_PREVIOUS_TOPIC'	=> 'Önceki başlık',
	'VIEW_RESULTS'			=> 'Sonuçları Görüntüle',
	'VIEW_TOPIC_POST'		=> '1 mesaj',
	'VIEW_TOPIC_POSTS'		=> '%d mesaj',
	'VIEW_UNREAD_POST'		=> 'Önce okunmamış mesaj',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Oyunuz ankete eklendi.',

));

?>