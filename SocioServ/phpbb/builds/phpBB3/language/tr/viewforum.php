<?php
/** 
*
* viewforum [Turkish]
*
* @package language
* @version $Id: viewforum.php,v 1.17 2007/05/10 15:31:21 acydburn Exp $ 
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
	'ACTIVE_TOPICS'			=> 'Aktif başlıklar',
	'ANNOUNCEMENTS'			=> 'Duyurular',
	
	'FORUM_PERMISSIONS'		=> 'Forum izinleri',
	
	'ICON_ANNOUNCEMENT'		=> 'Duyuru',
	'ICON_STICKY'			=> 'Sabit',

	'LOGIN_NOTIFY_FORUM'	=> 'Bu forum hakkında bildiriniz var, lütfen giriş yapıp görüntüleyin.',

	'MARK_TOPICS_READ'		=> 'Başlıkları okunmuş işaretle',

	'NEW_POSTS_HOT'			=> 'Yeni mesajlar [ Popüler ]',
	'NEW_POSTS_LOCKED'		=> 'Yeni mesajlar [ Kilitli ]',
	'NO_NEW_POSTS_HOT'		=> 'Yeni mesaj yok [ Popüler ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Yeni mesaj yok [ Kilitli ]',
	'NO_READ_ACCESS'		=> 'Bu forumdaki başlıkları okumak için gerekli izinlere sahip değilsiniz.',

	'POST_FORUM_LOCKED'		=> 'Forum kilitli',

	'TOPICS_MARKED'			=> 'Bu forumdaki başlıklar okunmuş sayıldı.',

	'VIEW_FORUM'			=> 'Forum görüntüleniyor',
	'VIEW_FORUM_TOPIC'		=> '1 başlık',
	'VIEW_FORUM_TOPICS'		=> '%d başlık',
));

?>