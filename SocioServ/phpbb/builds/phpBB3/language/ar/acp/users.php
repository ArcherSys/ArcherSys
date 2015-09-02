<?php
/** 
*
* acp_users.php [Arabic]
*
* @package language
* @version $Id: users.php,v 1.29 2007/06/18 15:12:14 kellanved Exp $
* @copyright (c) 2007 phpBB Group 
* @author 2007-06-14 - phpBBegypt.com
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
	'ADMIN_SIG_PREVIEW'	=> 'معاينة التوقيع',
	'AT_LEAST_ONE_FOUNDER'	=> 'لا يمكنك تحويل هذا المؤسس إلى عضو. يجب أن يكون هناك مؤسس واحد على الأقل لهذا المنتدى. إذا أردت تغيير هذا المؤسس لعضو عادي يجب عليك أولاً أن تقوم بترقية عضو آخر إلى مؤسس',
	
	'BAN_ALREADY_ENTERED'	=> 'لقد قمت بهذا الحظر مسبقاً بنجاح. لم يحدث أي تغيير في قائمة الحظر',
	'BAN_SUCCESSFUL'	=> 'تم الحظر بنجاح',
	
	'CANNOT_BAN_FOUNDER'	=> 'لا يمكنك حظر حسابات المؤسسين.',
	'CANNOT_BAN_YOURSELF'	=> 'لا يمكنك حظر نفسك.',
	'CANNOT_DEACTIVATE_BOT'	=> 'لا يمكنك تعطيل حسابات الbot. رجاءً قم بتعطيل الbot نفسه بدلاً من ذلك.',
	'CANNOT_DEACTIVATE_FOUNDER'	=> 'لا يمكنك تعطيل حساب المؤسس',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'لا يمكنك تعطيل عضويتك',
	'CANNOT_FORCE_REACT_BOT'	=> 'لا يمكنك إجبار الbot على إعادة تفعيل حسابه، رجاءً قم بتعطيل الbot نفسه بدلاً من ذلك.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'لا يمكنك إجبار المؤسس على إعادة تفعيل حسابه',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'لا يمكنك إجبار نفسك على إعادة تفعسل حسابك',
	'CANNOT_REMOVE_ANONYMOUS'	=> 'لا يمكنك حذف عضوية الزائر',
	'CANNOT_REMOVE_YOURSELF'	=> 'لا يمكنك حذف عضويتك',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'لا يمكنك ترقية الأعضاء المتجاهلين إلى حالة المؤسس',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'لا يمكنك ترقية عضو غير مفعل إلى مؤسس، يجب تفعيل عضويته أولاً',
	'CONFIRM_EMAIL_EXPLAIN'	=> 'تحتاج لضبط هذه إذا كنت تغير البريد الالكتروني للعضو فقط',
	
	'DELETE_POSTS'	=> 'حذف المشاركات',
	'DELETE_USER'	=> 'حذف العضو',
	'DELETE_USER_EXPLAIN'	=> 'يرجى العلم بأن حذف العضوية سيكون نهائي، لن تستطيع استرجاعها مرة أخرى',
	
	'FORCE_REACTIVATION_SUCCESS'	=> 'تم طلب إعادة التفعيل بنجاح',
	'FOUNDER'	=> 'مؤسس',
	'FOUNDER_EXPLAIN'	=> 'المؤسس يمكلك كافة الخيارات الإدارية ولا يمكن حظره أو حذفه أو تحذيره من قبل المدراء الآخرون',
	
	'GROUP_APPROVE'	=> 'قبول العضوية',
	'GROUP_DEFAULT'	=> 'جعل المجموعة افتراضية للعضو',
	'GROUP_DELETE'	=> 'حذف العضو من المجموعة',
	'GROUP_DEMOTE'	=> 'إزالة مدير المجموعة',
	'GROUP_PROMOTE'	=> 'جعله مدير للمجموعة',
	
	'IP_WHOIS_FOR'			=> 'IP whois for %s',
	
	'LAST_ACTIVE'	=> 'آخر نشاط',
	
	'MOVE_POSTS_EXPLAIN'	=> 'رجاءً قم بإختيار المنتدى الذي تريد نقل كافة مشاركات هذا العضو إليه',
	
	'NO_SPECIAL_RANK'	=> 'لم يتم تعيين رتبة خاصة',
	'NOT_MANAGE_FOUNDER'	=> 'لقد حاولت إدارة عضوية مؤسس، فقط المؤسسين هم من يستطيعون إدارة عضويات المؤسسين أمثالهم.',
	
	'QUICK_TOOLS'	=> 'أدوات سريعة',
	
	'REGISTERED'	=> 'مسجل',
	'REGISTERED_IP'	=> 'مسجل بواسطة IP',
	'RETAIN_POSTS'	=> 'إبقاء المشاركات',
	
	'SELECT_FORM'	=> 'اختر الشكل',
	'SELECT_USER'	=> 'اختر العضو',
	
	'USER_ADMIN'	=> 'إدارة العضو',
	'USER_ADMIN_ACTIVATE'	=> 'تفعيل العضوية',
	'USER_ADMIN_ACTIVATED'	=> 'تم تفعيل العضو بنجاح',
	'USER_ADMIN_AVATAR_REMOVED'	=> 'تم حذف الصورة الشخصية للعضو بنجاح',
	'USER_ADMIN_BAN_EMAIL'	=> 'حظر البريد الإلكتروني',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'تم حظر البريد الإلكتروني عن طريق إدارة الأعضاء',
	'USER_ADMIN_BAN_IP'	=> 'حظر ال IP',
	'USER_ADMIN_BAN_IP_REASON'	=> 'تم حظر ال IP عن طريق إدارة الأعضاء',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'تم حظر اسم المستخدم عن طريق إدارة الأعضاء',
	'USER_ADMIN_BAN_USER'	=> 'حظر اسم المستخدم',
	'USER_ADMIN_DEACTIVATE'	=> 'تعطيل العضوية',
	'USER_ADMIN_DEACTIVED'	=> 'تم تعطيل العضوية بنجاح',
	'USER_ADMIN_DEL_ATTACH'	=> 'حذف جميع المرفقات',
	'USER_ADMIN_DEL_AVATAR'	=> 'حذف الصورة الشخصية',
	'USER_ADMIN_DEL_POSTS'	=> 'حذف جميع المشاركات',
	'USER_ADMIN_DEL_SIG'	=> 'حذف التوقيع',
	'USER_ADMIN_EXPLAIN'	=> 'هنا يمكنك تغيير معلومات وإعدادات الأعضاء. إذا أردت التحكم بالصلاحيات الرجاء التوجه لصلاحيات الأعضاء والمجموعات',
	'USER_ADMIN_FORCE'	=> 'إجباره على إعادة التفعيل',
	'USER_ADMIN_MOVE_POSTS'	=> 'نقل جميع المشاركات',
	'USER_ADMIN_SIG_REMOVED'	=> 'تم حذف التوقيع بنجاح',
	'USER_ATTACHMENTS_REMOVED'	=> 'تم حذف جميع المرفقات الخاصة بهذا العضو بنجاح',
	'USER_AVATAR_UPDATED'	=> 'تم تحديث معلومات الصورة الشخصية بنجاح',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'حقول الملف الشخصي الخاصة',
	'USER_DELETED'	=> 'تم حذف العضو بنجاح',
	'USER_GROUP_ADD'	=> 'إضافة العضو للمجموعة',
	'USER_GROUP_NORMAL'	=> 'مستخدم المجموعات العادية هو عضو في',
	'USER_GROUP_PENDING'	=> 'عضو المجموعات هو في فترة الانتظار',
	'USER_GROUP_SPECIAL'	=> 'مستخدم المجموعات الخاصة هو عضو في',
	'USER_NO_ATTACHMENTS'			=> 'There are no attached files to display.',
	'USER_POSTS_DELETED'	=> 'تم حذف جميع المشاركات المكتوبة بواسطة العضو بنجاح',
	'USER_POSTS_MOVED'	=> 'تم نقل جميع مشاركات العضو إلى المنتدى المختار بنجاح',
	'USER_PREFS_UPDATED'	=> 'تم تحديث إعدادات العضو بنجاح',
	'USER_PROFILE'	=> 'الملف الشخصي',
	'USER_PROFILE_UPDATED'	=> 'تم تحديث الملف الشخصي بنجاح',
	'USER_RANK'	=> 'الرتبة',
	'USER_RANK_UPDATED'	=> 'تم تحديث الرتبة بنجاح',
	'USER_SIG_UPDATED'	=> 'تم تحديث توقيع العضو بنجاح',
	'USER_TOOLS'	=> 'أدوات أساسية',
'USER_OVERVIEW_UPDATED
'	=> 'أدوات أساسية',

));

?>