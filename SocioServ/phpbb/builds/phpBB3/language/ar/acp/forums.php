<?php
/** 
*
* acp_forums.php [Arabic]
*
* @package language
* @version $Id: forums.php,v 1.27 2007/05/10 15:31:21 acydburn Exp $
* @copyright (c) 2007 phpBB Group 
* @author 2007-06-18 - phpBBegypt.com
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
	'AUTO_PRUNE_DAYS'	=> 'التهذيب التلقائي للمشاركات',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'عدد الأيام التي ستمر بعد آخر مشاركة ليتم حذف الموضوع عندها.',
	'AUTO_PRUNE_FREQ'	=> 'تكرار التهذيب التلقائي',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'الوقت بالأيام بين عمليات التهذيب.',
	'AUTO_PRUNE_VIEWED'	=> 'التهذيب التلقائي للمشاركات بعد آخر مشاهدة',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'عدد الأيام التي ستمر على آخر مشاهدة للموضوع قبل حذفه.',
	
	'COPY_PERMISSIONS'	=> 'نسخ الصلاحيات من',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'بمجرد إنشائه, هذا المنتدى سيحمل نفس صلاحيات المنتدى الذي قمت بإختياره هنا. إذا لم تقم بأي اختيار هنا فالمنتدى الجديد الذي ستنشئه لن يكون ظاهراً حتى تقوم بتحديد صلاحياته.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'إذا اخترت نسخ الصلاحيات, هذا المنتدى سيحمل نفس صلاحيات المنتدى الذي قمت بإختياره هنا. وسيتم استبدال الصلاحيات القديمة التي أعطيتها لهذا المنتدى بصلاحيات المنتدى الذي اخترته هنا. إذا لم تقم بإختيار أي منتدى فسيتم الاحتفاظ بالصلاحيات الحالية.',
	'CREATE_FORUM'	=> 'إنشاء منتدى جديد',
	
	'DECIDE_MOVE_DELETE_CONTENT'	=> 'حذف المحتويات أو نقلها إلى المنتدى',
	'DECIDE_MOVE_DELETE_SUBFORUMS'	=> 'حذف المنتديات الفرعية أو نقلها إلى المنتدى',
	'DEFAULT_STYLE'	=> 'الاستايل الافتراضي',
	'DELETE_ALL_POSTS'	=> 'حذف المشاركات',
	'DELETE_SUBFORUMS'	=> 'حذف المنتديات الفرعية والمشاركات',
	'DISPLAY_ACTIVE_TOPICS'	=> 'تفعيل المواضيع النشطة',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'	=> 'إذا اخترت نعم فالمواضيع النشطة بالمنتديات الفرعية ستظهر أسفل هذا القسم.',
	
	'EDIT_FORUM'	=> 'تعديل منتدى',
	'ENABLE_INDEXING'	=> 'تفعيل فهرسة البحث',
	'ENABLE_INDEXING_EXPLAIN'	=> 'إذا اخترت نعم فالمشاركات الموجودة في هذا المنتدى سيتم فهرستها للبحث.',
	'ENABLE_POST_REVIEW'	=> 'تفعيل مراجعة المشاركة',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'إذا اخترت نعم فسيتمكن الأعضاء من مراجعة مشاركاتهم إذا تم ارسال ردود جديدة إلى الموضوع بينما هم يكتبون ردهم. يجب تعطيل هذه الخاصية في منتديات الدردشة.',
	'ENABLE_RECENT'	=> 'عرض المواضيع النشطة',
	'ENABLE_RECENT_EXPLAIN'	=> 'إذا اخترت نعم فالمواضيع الموجودة في هذا المنتدى ستظهر في لائحة المواضيع النشطة.',
	'ENABLE_TOPIC_ICONS'	=> 'إتاحة أيقونات المواضيع',
	
	'FORUM_ADMIN'	=> 'إدارة المنتدى',
	'FORUM_ADMIN_EXPLAIN'	=> 'في phpBB3 لا توجد أقسام, كل شيء عبارة عن منتدى. كل منتدى يمكن أن يحتوي على عدد غير نهائي من المنتديات الفرعية وتحديد ما إذا كان كل واحد يمكن المشاركة فيه أو لا ( بمعنى أن يظهر كـ قسم في النظام القديم ). هنا تستطيع إضافة أو تعديل أو حذف أو غلق أو فتح منتديات محددة كما يمكنك تغيير إعدادات إضافية أخرى. إذا كانت المواضيع والمشاركات قد خرجت عن المطابقة تستطيع إعادة مزامنة المنتدى. <strong>سوف تحتاج الى نسخ او اعطاء صلاحيات اولوية للمنتديات الجديدة التي تم انشائها لكي يتم عرضها.</strong>',
	
	'FORUM_AUTO_PRUNE'	=> 'تفعيل التهذيب التلقائي',
	'FORUM_AUTO_PRUNE_EXPLAIN'	=> 'تهذيب المنتديات من المواضيع, اكتب خيارات التكرار/العمر بالأسفل.',
	'FORUM_CREATED'	=> 'تم إنشاء المنتدى بنجاح.',
	'FORUM_DATA_NEGATIVE'	=> 'خيارات التهذيب لا يمكن أن تكون سالبة.',
	'FORUM_DESC_TOO_LONG'	=> 'وصف المنتدى كبير جداً, يجب أن يكون أقل من 4000 حرفاً.',
	'FORUM_DELETE'	=> 'حذف المنتدى',
	'FORUM_DELETE_EXPLAIN'	=> 'النموذج بالأسفل يسمح لك بحذف المنتدى. إذا كان المنتدى قابلاً للكتابة فيمكنك تحديد أين تريد وضع جميع المواضيع (أو المنتديات) التي يحتوي عليها.',
	'FORUM_DELETED'	=> 'تم حذف المنتدى بنجاح.',
	'FORUM_DESC'	=> 'الوصف',
	'FORUM_DESC_EXPLAIN'	=> 'إن قمت بإدخال أي أكواد HTML هنا فسوف يتم عرضها كما هي.',
	'FORUM_EDIT_EXPLAIN'	=> 'النموذج بالأسفل سيسمح لك بضبط المنتدى. يرجى ملاحظة أن التحكم في الإشراف والمشاركة يتم ضبطها من صلاحيات المنتدى لكل عضو أو مجموعة على حدى.',
	'FORUM_IMAGE'	=> 'صورة المنتدى',
	'FORUM_IMAGE_EXPLAIN'	=> 'المكان, تبعاً للمجلد الرئيسي للمنتدى, لعرض صورة إضافية لهذا المنتدى.',
	'FORUM_LINK_EXPLAIN'	=> 'الرابط كاملاً (محتوياً البروتوكول, مثل: <samp>http://</samp>) للمكان الذي تريد أن يذهب إليه الأعضاء عند الضغط على هذا المنتدى, مثال: <samp>http://www.phpbbarabia.com/</samp>.',
	'FORUM_LINK_TRACK'	=> 'تسجيل تحويلات الرابط',
	'FORUM_LINK_TRACK_EXPLAIN'	=> 'تسجيل عدد مرات الضغط على رابط المنتدى.',
	'FORUM_NAME'	=> 'اسم المنتدى',
	'FORUM_NAME_EMPTY'	=> 'يجب عليك إدخال اسم لهذا المنتدى.',
	'FORUM_PARENT'	=> 'المنتدى الأب',
	'FORUM_PASSWORD'	=> 'كلمة مرور المنتدى',
	'FORUM_PASSWORD_CONFIRM'	=> 'تأكيد كلمة المرور',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'ستحتاجها فقط إن كنت قد وضعت كلمة مرور للمنتدى.',
	'FORUM_PASSWORD_EXPLAIN'	=> 'تعريف كلمة المرور لهذا المنتدى, استعمال نظام الصلاحيات اختياري.',
	'FORUM_PASSWORD_MISMATCH'	=> 'كلمات المرور التي أدخلتها غير متطايقة.',
	'FORUM_PRUNE_SETTINGS'	=> 'إعدادات تهذيب المنتدى',
	'FORUM_RESYNCED'	=> 'تم إعادة مزامنة المنتدى "%s" بنجاح',
	'FORUM_RULES_EXPLAIN'	=> 'قوانين المنتدى ستعرض في جميع صفحات هذا المنتدى.',
	'FORUM_RULES_LINK'	=> 'الرابط إلى قوانين المنتدى',
	'FORUM_RULES_LINK_EXPLAIN'	=> 'تستطيع إدخال رابط إلى صفحة/مشاركة تحتوي على قوانين المنتدى. هذا الخيار سيلغي نص القوانين الذي أدخلته.',
	'FORUM_RULES_PREVIEW'	=> 'معاينة قوانين المنتدى',
	'FORUM_RULES_TOO_LONG'	=> 'قوانين المنتدى يجب أن تكون أقل من 4000 حرف.',
	'FORUM_SETTINGS'	=> 'إعدادات المنتدى',
	'FORUM_STATUS'	=> 'حالة المنتدى',
	'FORUM_STYLE'	=> 'ستايل المنتدى',
	'FORUM_TOPICS_PAGE'	=> 'المواضيع في كل صفحة',
	'FORUM_TOPICS_PAGE_EXPLAIN'	=> 'إذا اخترت قيمة غير 0 سيتم استبدال الإعدادات الافتراضية للمواضيع في كل صفحة.',
	'FORUM_TYPE'	=> 'نوع المنتدى',
	'FORUM_UPDATED'	=> 'تم تحديث المنتدى بنجاح.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'تريد تغيير منتدى مشاركات يحتوي على منتديات فرعية الى رابط. يرجى تحويل المنتديات الفرعية الى خارج هذا المنتدى قبل المتابعة, لانه عند تحويل المنتدى الى رابط لن تقوم بمشاهدة المنتديات الفرعية المتصلة بهذا المنتدى.',

	'GENERAL_FORUM_SETTINGS'	=> 'الإعدادات العامة للمنتدى',
	
	'LINK'	=> 'رابط',
	'LIST_INDEX'	=> 'عرض المنتديات الفرعية أسفل المنتدى الأب',
	'LIST_INDEX_EXPLAIN'	=> 'عرض هذا المنتدى في الصفحة الرئيسية أسفل المنتدى الأب.',
	'LOCKED'	=> 'مغلق',
	
	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'المنتدى الذي حددته لنقل المشاركات غير قابل للكتابة. الرجاء اختيار منتدى قابل للكتابة.',
	'MOVE_POSTS_TO'	=> 'نقل المشاركات إلى',
	'MOVE_SUBFORUMS_TO'	=> 'نقل المنتديات الفرعية إلى',
	
	'NO_DESTINATION_FORUM'	=> 'لم تقم بتحديد منتدى لنقل المحتويات إليه.',
	'NO_FORUM_ACTION'	=> 'لم يتم تعريف نشاط ما حدث لمحتويات المنتدى.',
	'NO_PARENT'	=> 'بدون أب',
	'NO_PERMISSIONS'	=> 'لا تقم بنسخ الصلاحيات',
	'NO_PERMISSION_FORUM_ADD'	=> 'ليست لديك الصلاحيات الكافية لإضافة منتدى جديد.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'ليست لديك الصلاحيات الكافية لحذف المنتديات.',
	
	'PARENT_IS_LINK_FORUM'	=> 'المنتدى الأب الذي حددته عبارة عن رابط. المنتديات الروابط لا يمكن أن تحميل منتديات فرعية تحتها, رجاءً قم باختيار قسم أو منتدى كمنتدى أب.',
	'PARENT_NOT_EXIST'	=> 'المنتدى الأب غير موجود.',
	'PRUNE_ANNOUNCEMENTS'	=> 'تهذيب الإعلانات',
	'PRUNE_STICKY'	=> 'تهذيب المواضيع المثبتة',
	'PRUNE_OLD_POLLS'	=> 'تهذيب الاستفتاءات القديمة',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'حذف مواضيع الاستفتاء التي لم يشارك في تصويتها أحد بعد مدة من المشاركة - بالأيام-.',
	
	'REDIRECT_ACL'	=> 'الآن تستطيع %sتحديد الصلاحيات%s لهذا المنتدى.',
	'SYNC_IN_PROGRESS'	=> 'جاري مزامنة المنتدى',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'تتم الآن مزامنة المواضيع %1$d/%2$d.',
	
	'TYPE_CAT'	=> 'قسم',
	'TYPE_FORUM'	=> 'منتدى',
	'TYPE_LINK'	=> 'رابط',
	'UNLOCKED'	=> 'مفتوح',
));

?>