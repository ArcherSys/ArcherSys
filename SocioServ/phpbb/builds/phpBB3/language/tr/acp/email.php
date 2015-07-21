<?php
/** 
*
* acp_email [Turkish]
*
* @package language
* @version $Id: email.php,v 1.15 2007/05/12 12:32:28 davidmj Exp $ 
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Buradan <strong>toplu e-postaları al seçeneğini aktifleştiren</strong> tüm kullanıcılarınıza ya da belirli bir grubun tüm kullanıcılarına bir e-posta mesajı gönderebilirsiniz. Bu yapıldığında, e-postalar yönetim e-posta adresi olarak belirlenen adresten gönderilecek, bir kopyası ise tüm ilgili alıcılara iletilecektir. Varsayılan ayar olarak, bir e-posta içine sadece 50 alıcı dahil edilecektir, daha fazla alıcı için daha fazla e-posta gönderilecektir. Geniş bir gruba e-posta gönderirken lütfen sabırlı olun, gönderim butonuna tıkladığınızda işlemi durdurmayın ve yarıda bırakmayın. Toplu e-posta gönderimlerinde bu işlemin uzun zaman alması normaldir, işlem tamamlandığında size bildirilecektir.',
	'ALL_USERS'						=> 'Tüm kullanıcılar',

	'COMPOSE'				=> 'Oluştur',

	'EMAIL_SEND_ERROR'		=> 'E-posta gönderilirken bir ya da daha fazla hata oluştu. Hata mesajlarının detayları için lütfen %sHata kayıtlarını%s kontrol edin.',
	'EMAIL_SENT'			=> 'Bu mesaj gönderildi.',
	'EMAIL_SENT_QUEUE'		=> 'Bu mesaj gönderilmek için sıraya alındı.',

	'LOG_SESSION'			=> 'Kritik kayıtlar için Posta Oturumu kayıtlarını tut',

	'SEND_IMMEDIATELY'		=> 'Hemen gönder',
	'SEND_TO_GROUP'			=> 'Gruba gönderildi',
	'SEND_TO_USERS'			=> 'Kullanıcılara Gönderildi',
	'SEND_TO_USERS_EXPLAIN'	=> 'Buraya girilen isimler, herhangi bir grup seçilmiş olsa da umursanmayacaktır. İsimleri her yeni satıra tek olarak giriniz.',
	
	'MAIL_HIGH_PRIORITY'	=> 'Yüksek',
	'MAIL_LOW_PRIORITY'		=> 'Düşük',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Posta Önceliği',
	'MASS_MESSAGE'			=> 'Mesajınız',
	'MASS_MESSAGE_EXPLAIN'	=> 'Sade düz yazı şeklinde mesajlarınızı yazınız. Tüm biçimlendirmeler postayı göndermeden önce silinecektir.',
	
	'NO_EMAIL_MESSAGE'		=> 'Bir mesaj yazmalısınız.',
	'NO_EMAIL_SUBJECT'		=> 'Mesajınız için bir başlık belirlemelisiniz.',
));

?>