<?php
/** 
*
* memberlist.php [Arabic]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-07-06 - phpBBEGYPT.com
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
	'ABOUT_USER'	=> 'الملف الشخصي',
	'ACTIVE_IN_FORUM'	=> 'أكثر نشاطاً في منتدى',
	'ACTIVE_IN_TOPIC'	=> 'أكثر نشاطاً في موضوع',
	'ADD_FOE'	=> 'أضف لقائمة التجاهل',
	'ADD_FRIEND'	=> 'أضف لقائمة الأصدقاء',
	'AFTER'	=> 'بعد',
	'ALL'	=> 'الكل',
	'BEFORE'	=> 'قبل',
	'CC_EMAIL'	=> 'إرسال نسخة من هذا البريد إلى نفسك',
	'CONTACT_USER'	=> 'العضو',
	'DEST_LANG'	=> 'اللغة',
	'DEST_LANG_EXPLAIN'	=> 'اختر اللغة المناسبة (إذا كانت متاحة) لمستلم هذه الرسالة',
	'EMAIL_BODY_EXPLAIN'	=> 'هذه الرسالة سترسل كنص فقط ، لا تقم بكتابة أي أكواد HTML أو BBCode . سيكون بريدك هو المستقبل في حالة الرد على الرسالة',
	'EMAIL_DISABLED'	=> 'نأسف لكن كل خصائص إرسال البريد معطلة',
	'EMAIL_SENT'	=> 'تم إرسال البريد',
	'EMAIL_TOPIC_EXPLAIN'	=> 'هذه الرسالة سترسل كنص فقط، لا تقم بكتابة أي أكواد HTML أو BBCode . فضلاً قم بكتابة معلومات الموضوع في رسالتك . سيكون بريدك هو المستقبل في حالة الرد على الرسالة',
	'EMPTY_ADDRESS_EMAIL'	=> 'يجب وضع عنوان بريد صحيح للمستقبل',
	'EMPTY_MESSAGE_EMAIL'	=> 'يجب عليك إدخال رسالة ليتم الإرسال',
	'EMPTY_MESSAGE_IM'		=> 'يتوجب عليك كتابة نص لإرساله.',
	'EMPTY_NAME_EMAIL'	=> 'يجب عليك إدخال الاسم الحقيقي للمستقبل',
	'EMPTY_SUBJECT_EMAIL'	=> 'يجب عليك تحديد عنوان للبريد',
	'EQUAL_TO'	=> 'يساوي',
	'FIND_USERNAME_EXPLAIN'	=> 'استعمل هذا النموذج للبحث عن الأعضاء. ليس عليك أن تملأ جميع الحقول، لمطابقة بيانات جزئية استعمل النجمة (*) كعلامة شاملة عند ادخال التواريخ استعمل الهيئة التالية <kbd>YYYY-MM-DD</kbd>, على سبيل المثال <samp>2004-02-29</samp>. استعمل مربعات التحديد لاختيار عضو أو أكثر (اختيار أكثر من عضو يعتمد على النموذج نفسه) ومن ثم اضغط على زر اختر المحدد للعودة إلى النموذج السابق.',
	'FLOOD_EMAIL_LIMIT'	=> 'لا تستطيع إرسال بريد آخر في هذا الوقت. فضلاً حاول مرة أخرى لاحقاً',
	'GROUP_LEADER'	=> 'رئيس مجموعة',
	'HIDE_MEMBER_SEARCH'	=> 'إخفاء بحث الأعضاء',
	'IM_ADD_CONTACT'	=> 'أضف جهة اتصال',
	'IM_AIM'	=> 'لاستخدام هذه الخاصية تحتاج إلى AOL Instant Messenger',
	'IM_AIM_EXPRESS'	=> 'AIM Express',
	'IM_DOWNLOAD_APP'	=> 'تحميل البرنامج',
	'IM_ICQ'	=> 'قد يكون العضو اختار أنه لا يريد استلام رسائل فورية',
	'IM_JABBER'	=> 'قد يكون العضو اختار أنه لا يريد رسائل فورية',
	'IM_JABBER_SUBJECT'	=> 'هذه رسالة تلقائية الرجاء عدم الرد عليها! هذه الرسالة من العضو %1$s في %2$s',
	'IM_MESSAGE'	=> 'رسالتك',
	'IM_MSNM'	=> 'لاستخدام هذه الخاصية تحتاج إلى Windows Messenger',
	'IM_MSNM_BROWSER'	=> 'متصفحك لا يدعم هذه الخاصية',
	'IM_MSNM_CONNECT'	=> 'MSNM غير متصل',
	'IM_NAME'	=> 'اسمك',
	'IM_NO_DATA'			=> 'لا توجد اي معلومات حول كيفية الاتصال بهذا العضو.',
	'IM_NO_JABBER'	=> 'نأسف لكن لا تستطيع استخدام هذه الخاصية للمحادثة على خادمك وتحتاج لتنصيبها',
	'IM_RECIPIENT'	=> 'المستقبل',
	'IM_SEND'	=> 'أرسل رسالة',
	'IM_SEND_MESSAGE'	=> 'أرسل رسالة',
	'IM_SENT_JABBER'	=> 'تم إرسال رسالتك إلى %1$s بنجاح',
	'IM_USER'	=> 'إرسال رسالة فورية',
	'LAST_ACTIVE'	=> 'آخر نشاط',
	'LESS_THAN'	=> 'أقل من',
	'LIST_USER'	=> '1 مستخدم',
	'LIST_USERS'	=> '%d مستخدمين',
	'LOGIN_EXPLAIN_LEADERS'		=> 'يجب أن تكون عضواً مسجلاً لتتمكن من مشاهدة أعضاء الإدارة',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'يجب أن تكون عضواً مسجلاً لتتمكن من مشاهدة قائمة الأعضاء',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'يجب أن تكون عضواً مسجلاً لتتمكن من البحث عن الأعضاء',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'يجب أن تكون عضواً مسجلاً لتتمكن من مشاهدة الملفات الشخصية للأعضاء',
	'MORE_THAN'	=> 'أكثر من',
	'NO_EMAIL'	=> 'غير مسموح لك بالإرسال لهذا العضو',
	'NO_VIEW_USERS'	=> 'لا تملك الصلاحية لمشاهدة الملفات الشخصية للأعضاء',
	'ORDER'	=> 'طلب',
	'OTHER'	=> 'أخرى',
	'POST_IP'	=> 'أرسل من IP/domain',
	'RANK'	=> 'رتبة',
	'REAL_NAME'	=> 'اسم المستقبل',
	'RECIPIENT'	=> 'المستقبل',
	'REMOVE_FOE'	=> 'حذف من قائمة التجاهل',
	'REMOVE_FRIEND'	=> 'حذف من قائمة الأصدقاء',
	'SEARCH_USER_POSTS'		=> 'ابحث عن مشاركات العضو',
	'SELECT_MARKED'	=> 'اختيار المحدد',
	'SELECT_SORT_METHOD'	=> 'اختر طريقة الفرز',
	'SEND_AIM_MESSAGE'	=> 'إرسال رسالة AIM',
	'SEND_ICQ_MESSAGE'	=> 'إرسال رسالة ICQ',
	'SEND_IM'	=> 'رسالة فورية',
	'SEND_JABBER_MESSAGE'	=> 'إرسال رسالة jabber',
	'SEND_MESSAGE'	=> 'الرسالة',
	'SEND_MSNM_MESSAGE'	=> 'إرسال رسالة MSNM/WLM',
	'SEND_YIM_MESSAGE'	=> 'إرسال رسالة YIM',
	'SORT_EMAIL'	=> 'البريد الإلكتروني',
	'SORT_LAST_ACTIVE'	=> 'آخر نشاط',
	'SORT_POST_COUNT'		=> 'عدد المشاركات',
	'USERNAME_BEGINS_WITH'	=> 'الاسم يبدأ بـ',
	'USER_ADMIN'	=> 'المدير العام',
	'USER_FORUM'	=> 'إحصائيات العضو',
	'USER_ONLINE'	=> 'متصل',
	'USER_PRESENCE'	=> 'معلومات رئيسية',
	'VIEWING_PROFILE'	=> 'عرض الملف الشخصي لـ %s',
	'VISITED'	=> 'آخر زيارة',
	'WWW'	=> 'موقع الانترنت',
));

?>