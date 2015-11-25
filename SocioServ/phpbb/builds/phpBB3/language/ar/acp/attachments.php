<?php
/** 
*
* acp_attachments.php [Arabic]
*
* @package language
* @version $Id: attachments.php,v 1.30 2007/05/17 14:58:40 acydburn Exp $
* @copyright (c) 2007 phpBB Group 
* @author 2007-06-17 - phpBBegypt.com
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'هنا يمكنك التحكم في الخواص الأساسية للمرفقات و الفئات الخاصة',
	'ACP_EXTENSION_GROUPS_EXPLAIN'	=> 'هنا يمكنك إضافة أو حذف أو تعديل أو تعطيل مجموعات الامتدادات . خيارات أخرى تشمل تخصيص فئة خاصة لهم ، وتغيير آلية التنزيل و تعريف للأيقونات التي سيتم عرضها أمام المرفق الذي ينتمي إلى المجموعة',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'	=> 'هنا يمكنك التحكم بالامتدادات المسموحة. لتفعيل امتداد خاص بك, يرجى الرجوع إلى لوحة إدارة مجموعات الامتداد. نحن ننصحك وبشدة بعدم السماح بإمتدادت السكربتات (مثل <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, إلخ…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'هنا يمكنك رؤية الملفات المرفقة الضائعة، هذا يحدث غالباً إذا أرفق العضو ملفاً ولم يقم بإرسال الموضوع بعد ذلك، يمكنك إما حذف هذه المرفقات أو إضافتها لمشاركات موجودة فعلياً. إذا أردت إضافتها لمشاركة فيتوجب عليك معرفة الرقم الخاص بهذه المشاركة، وعليك بتحديد هذا الرقم شخصياً وبصورة يدوية. هذا سيضيف المرفق للمشاركة التي اخترتها.',
	'ADD_EXTENSION'	=> 'إضافة امتداد',
	'ADD_EXTENSION_GROUP'	=> 'إضافة مجموعة امتدادات',
	'ADMIN_UPLOAD_ERROR'	=> 'حدثت مشكلة في محاولة إرفاق الملف: "%s"',
	'ALLOWED_FORUMS'	=> 'المنتديات المسموحة',
	'ALLOWED_FORUMS_EXPLAIN'	=> 'السماح لهذا الامتداد في المنتديات المختارة أو جميع المنتديات',
	'ALLOWED_IN_PM_POST'	=> 'مسموح',
	'ALLOW_ATTACHMENTS'	=> 'السماح للمرفقات',
	'ALLOW_ALL_FORUMS'	=> 'السماح لكل المنتديات',
	'ALLOW_IN_PM'	=> 'السماح في الرسائل الخاصة',
	'ALLOW_PM_ATTACHMENTS'	=> 'اسمح بالمرفقات في الرسائل الخاصة',
	'ALLOW_SELECTED_FORUMS'	=> 'فقط المنتديات المحددة في الأسفل',
	'ASSIGNED_EXTENSIONS'	=> 'الامتدادات المضافة',
	'ASSIGNED_GROUP'	=> 'مجموعة الامتداد المضافة',
	'ATTACH_EXTENSIONS_URL'	=> 'الامتدادات',
	'ATTACH_EXT_GROUPS_URL'	=> 'مجموعات الامتدادات',
	'ATTACH_ID'	=> 'ID',
	'ATTACH_MAX_FILESIZE'	=> 'الحجم الأقصى للملف',
	'ATTACH_MAX_FILESIZE_EXPLAIN'	=> 'الحجم الأقصى لكل ملف ، القيمة صفر تعني قيمة غير محدودة',
	'ATTACH_MAX_PM_FILESIZE'	=> 'الحجم الأقصى للملفات في الرسائل الخاصة',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'المساحة القصوى المتاحة لكل عضو في الرسائل الخاصة، القيمة صفر تعني قيمة غير محدودة',
	'ATTACH_ORPHAN_URL'	=> 'المرفقات الضائعة',
	'ATTACH_POST_ID'	=> 'رقم المشاركة',
	'ATTACH_QUOTA'	=> 'المساحة الكلية للمرفقات',
	'ATTACH_QUOTA_EXPLAIN'	=> 'أقصى مساحة يمكن إستخدامها لخاصية المرفقات لكل المنتدى، القيمة صفر تعني قيمة غير محدودة',
	'ATTACH_TO_POST'	=> 'أرفق الملف للمشاركة',
	'CAT_FLASH_FILES'	=> 'ملفات الفلاش',
	'CAT_IMAGES'	=> 'الصور',
	'CAT_QUICKTIME_FILES'	=> 'ملفات Quicktime',
	'CAT_RM_FILES'	=> 'ملفات Real Media',
	'CAT_WM_FILES'	=> 'ملفات Windows Media',
	'CREATE_GROUP'	=> 'إضافة مجموعة جديدة',
	'CREATE_THUMBNAIL'	=> 'عمل مصغرة',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'عمل مصغرة بكافة الطرق الممكنة',
	
	'DEFINE_ALLOWED_IPS'	=> 'تحديد IPs/hostnames المسموحة',
	'DEFINE_DISALLOWED_IPS'	=> 'تحديد IPs/hostnames الممنوعة',
	'DOWNLOAD_ADD_IPS_EXPLAIN'	=> 'لإضافة عدة IPs أو hostnames أضف كل واحد في سطر جديد . لتعريف مجموعة من عناوين IP  افصل بين البداية والنهاية بـ (-) ، لتعريف ذو نطاق واسع  استخدم "*"',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'يمكنك حذف أو استبعاد عدة عناوين IP مرة واحدة باستخدام الفأرة والكيبورد معاً ،عناوين IP المختارة ستكون بالخلفية الزرقاء',
	'DISPLAY_INLINED'	=> 'عرض الصورة ضمن الموضوع',
	'DISPLAY_INLINED_EXPLAIN'	=> 'إذا اخترت لا سيتم عرض الصور في المواضيع كوصلة فقط',
	'DISPLAY_ORDER'	=> 'ترتيب عرض المرفقات',
	'DISPLAY_ORDER_EXPLAIN'	=> 'ترتيب المرفقات بواسطة الوقت',
	
	'EDIT_EXTENSION_GROUP'	=> 'تعديل مجموعة امتدادات',
	'EXCLUDE_ENTERED_IP'	=> 'فعل هذه لاستبعاد IP/hostname المدخل ',
	'EXCLUDE_FROM_ALLOWED_IP'	=> 'استبعاد IP من IPs/hostnames المسموحة',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'استبعاد IP من IPs/hostnames الغير مسموحة',
	'EXTENSIONS_UPDATED'	=> 'تم تحديث الامتدادات بنجاح',
	'EXTENSION_EXIST'	=> 'الامتداد %s موجود مسبقاً',
	'EXTENSION_GROUP'	=> 'مجموعة الامتدادات',
	'EXTENSION_GROUPS'	=> 'مجموعات الامتدادات',
	'EXTENSION_GROUP_DELETED'	=> 'تم حذف مجموعة الامتدادات بنجاح',
	'EXTENSION_GROUP_EXIST'	=> 'مجموعة الامتدادات %s موجودة مسبقاً',
	
	'GO_TO_EXTENSIONS'	=> 'الذهاب للوحة التحكم بالامتدادات',
	'GROUP_NAME'	=> 'اسم المجموعة',
	
	'IMAGE_LINK_SIZE'	=> 'أبعاد رابط الصورة',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'لعرض الصور المرفقة كرابط نصي إذا كانت أبعادها أكبر من هذا الحد، لتعطيل هذه الخاصية استخدم 0بكسل في 0بكسل',
	'IMAGICK_PATH'	=> 'مكان Imagemagick',
	'IMAGICK_PATH_EXPLAIN'	=> 'الرابط الكامل لبرنامج التحويل imagemagick , مثال. <samp>/usr/bin/</samp>.',
	
	'MAX_ATTACHMENTS'	=> 'أكبر عدد من المرفقات لكل مشاركة',
	'MAX_ATTACHMENTS_PM'	=> 'أكبر عدد من المرفقات لكل رسالة خاصة',
	'MAX_EXTGROUP_FILESIZE'	=> 'أكبر حجم للملف',
	'MAX_IMAGE_SIZE'	=> 'أقصى أبعاد للصورة',
	'MAX_IMAGE_SIZE_EXPLAIN'	=> 'هنا تحدد الأبعاد الأقصى للصور المرفقة لتعطيل هذه الخاصية استخدم 0بكسل في oبكسل',
	'MAX_THUMB_WIDTH'	=> 'أكبر حجم للمصغرات بالبكسل',
	'MAX_THUMB_WIDTH_EXPLAIN'	=> 'المصغرات لن تتجاوز العرض المدرج هنا',
	'MIN_THUMB_FILESIZE'	=> 'أصغر حجم للمصغرات',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'لا تقم بعمل مصغرات للصور التي تملك حجماً أقل من هذا',
	'MODE_INLINE'	=> 'داخلي',
	'MODE_PHYSICAL'	=> 'خارجي',
	
	'NOT_ALLOWED_IN_PM'	=> 'مسموح فقط في المشاركات',
	'NOT_ALLOWED_IN_PM_POST'	=> 'غير مسموح',
	'NOT_ASSIGNED'	=> 'غير محدد',
	'NO_EXT_GROUP'	=> 'لا شيء',
	'NO_EXT_GROUP_NAME'	=> 'لم تدخل اسم المجموعة',
	'NO_EXT_GROUP_SPECIFIED'	=> 'لم يتم تحديد أي مجموعة امتداد',
	'NO_FILE_CAT'	=> 'لا شيء',
	'NO_IMAGE'	=> 'لا يوجد صورة',
	'NO_THUMBNAIL_SUPPORT'	=> 'خاصية إنشاء المصغرات غير متوفرة، لم يتم العثور على امتداد GD أو أنه لم يتم العثور على imagemagick مثبت',
	'NO_UPLOAD_DIR'	=> 'المجلد الذي خصصته للتحميل غير موجود',
	'NO_WRITE_UPLOAD'	=> 'المجلد المخصص للتحميل لا يمكن الكتابة عليه ، الرجاء إعطاء الملف الصلاحيات للكتابة عليه',
	
	'ONLY_ALLOWED_IN_PM'	=> 'مسموح فقط في الرسائل الخاصة',
	'ORDER_ALLOW_DENY'	=> 'مسموح',
	'ORDER_DENY_ALLOW'	=> 'مرفوض',
	
	'REMOVE_ALLOWED_IPS'	=> 'حذف أو إلغاء استبعاد الـ IPs/hostnames <em>المسموحة</em>',
	'REMOVE_DISALLOWED_IPS'	=> 'حذف أو إلغاء استبعاد الـ IPs/hostnames <em>الغير مسموحة</em>',
	
	'SEARCH_IMAGICK'	=> 'البحث عن Imagemagick',
	'SECURE_ALLOW_DENY'	=> 'قائمة القبول/الرفض',
	'SECURE_ALLOW_DENY_EXPLAIN'	=> 'تغيير الخواص الافتراضية عند التحميل الآمن في قائمة الرفض والسماح ، <strong>القائمة البيضاء</strong> (Allow) أو <strong>القائمة السوداء</strong> (Deny)',
	'SECURE_DOWNLOADS'	=> 'تفعيل التحميل الآمن',
	'SECURE_DOWNLOADS_EXPLAIN'	=> 'بتفعيل هذا الخيار التحميل سيكون مقصوراً على الـ IP’s/hostnames التي تحددها أنت',
	'SECURE_DOWNLOAD_NOTICE'	=> 'التحميل الآمن غير مفعل ، الخواص التالية ستكون متاحة عند تفعيله',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'	=> 'تم تحديث قائمة IP بنجاح',
	'SECURE_EMPTY_REFERRER'	=> 'السماح بمرجع فارغ',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'التحميلات الآمنة تعتمد على المرجع ، هل تسمح بهذه التحميلات التي تحذف المرجع ؟ ',
	'SETTINGS_CAT_IMAGES'	=> 'خواص قسم الصور',
	'SPECIAL_CATEGORY'	=> 'قسم خاص',
	'SPECIAL_CATEGORY_EXPLAIN'	=> 'الأقسام الخاصة تختلف بطريقة عرضها في المشاركات',
	'SUCCESSFULLY_UPLOADED'	=> 'تم الرفع بنجاح',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'تم إضافة مجموعة الامتدادات بنجاح',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'تم تحديث مجموعة الامتدادات بنجاح',
	'UPLOADING_FILES'	=> 'رفع الملفات',
	'UPLOADING_FILE_TO'	=> 'رفع الملف  “%1$s” للمشاركة التي تحمل الـ ID %2$d',
	'UPLOAD_DENIED_FORUM'	=> 'ليس لديك الصلاحيات للرفع في المنتدى “%s”',
	'UPLOAD_DIR'	=> 'مجلد التحميل',
	'UPLOAD_DIR_EXPLAIN'	=> 'مجلد تخزين المرفقات ، يجب مراعاة أنك إن قمت بتغيير هذا المجلد ينبغي عليك نقل الملفات المرفقة مسبقاً يدوياً للمجلد الجديد',
	'UPLOAD_ICON'	=> 'أيقونة التحميل',
	'UPLOAD_NOT_DIR'	=> 'المكان الذي خصصته للتحميل لا يبدو أنه مجلد فعلياً',
));

?>