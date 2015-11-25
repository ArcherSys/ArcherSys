<?php
/** 
*
* acp_language.php [Arabic]
*
* @package language
* @version $Id: language.php,v 1.15 2007/05/10 15:31:21 acydburn Exp $
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
	'ACP_FILES'	=> 'ملفات اللغة للوحة التحكم',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'هنا تستطيع تركيب/حذف حزم اللغة.',
	
	'EMAIL_FILES'	=> 'قوالب البريد الإلكتروني',
	
	'FILE_CONTENTS'	=> 'محتويات الملف',
	'FILE_FROM_STORAGE'	=> 'ملف من مجلد التخزين',
	
	'HELP_FILES'	=> 'ملفات المساعدة',
	
	'INSTALLED_LANGUAGE_PACKS'	=> 'حزم اللغات المنصبة',
	'INVALID_LANGUAGE_PACK'	=> 'يبدو أن حزمة اللغة المحددة غير صالحة. رجاءً افحص حزمة اللغة وارفعها مجدداً إذا كانت مهمة.',
	'INVALID_UPLOAD_METHOD'	=> 'طريقة الرفع المحددة غير صحيحة, الرجاء اختيار طريقة أخرى.',
	
	'LANGUAGE_DETAILS_UPDATED'	=> 'تم تحديث تفاصيل اللغة بنجاح.',
	'LANGUAGE_ENTRIES'	=> 'مدخلات اللغة',
	'LANGUAGE_ENTRIES_EXPLAIN'	=> 'هنا تستطيع تغيير مدخلات اللغة الحالية أو الغير مترجمة بعد.<br /><strong>ملاحظة:</strong> بمجرد الانتهاء من التعديلات, سيتم تخزين التغييرات في مجلد منفصل لكي تستطيع تحميله. التغييرات لن تتم مشاهدتها من قبل الأعضاء إلى أن تقوم بإستبدال ملفات اللغة الأصلية في مساحتك (عن طريق رفعها بالـFTP مثلاً).',
	'LANGUAGE_FILES'	=> 'ملفات اللغة',
	'LANGUAGE_KEY'	=> 'مفتاح اللغة',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'هذه الحزمة سبق وتم تركيبها.',
	'LANGUAGE_PACK_DELETED'	=> 'حزمة اللغة <strong>%s</strong> تم حذفها بنجاح. جميع الأعضاء الذين يستخدمون هذه اللغة تم تحويلهم إلى اللغة الافتراضية.',
	'LANGUAGE_PACK_DETAILS'	=> 'تفاصيل حزمة اللغة',
	'LANGUAGE_PACK_INSTALLED'	=> 'حزمة اللغة <strong>%s</strong> تم تركيبها بنجاح.',
	'LANGUAGE_PACK_ISO'	=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'	=> 'الاسم المحلي',
	'LANGUAGE_PACK_NAME'	=> 'الاسم',
	'LANGUAGE_PACK_NOT_EXIST'	=> 'حزمة اللغة التي حددتها غير موجودة.',
	'LANGUAGE_PACK_USED_BY'	=> 'مستعملة بواسطة (بمن فيهم الbots)',
	'LANGUAGE_VARIABLE'	=> 'متغير اللغة',
	'LANG_AUTHOR'	=> 'كاتب اللغة',
	'LANG_ENGLISH_NAME'	=> 'اسم اللغة بالإنجليزية',
	'LANG_ISO_CODE'	=> 'الرمز',
	'LANG_LOCAL_NAME'	=> 'الاسم المحلي',
	
	'MISSING_LANGUAGE_FILE'	=> 'ملف لغة مفقود: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'متغيرات لغة مفقودة',
	'MODS_FILES'	=> 'ملفات اللغة الخاصة بالهاكات',
	
	'NO_FILE_SELECTED'	=> 'لم تقم بتحديد ملف لغة.',
	'NO_LANG_ID'	=> 'لم تقم بتحديد حزمة اللغة.',
	'NO_REMOVE_DEFAULT_LANG'	=> 'ليس مسموحاً لك بحذف حزمة اللغة الافتراضية.<br />إذا أردت حذف هذه اللغة, قم بتغيير اللغة الافتراضية للمنتدى أولاً.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'لا يوجد حزم لغة غير منصبة',
	
	'REMOVE_FROM_STORAGE_FOLDER'	=> 'حذف من مجلد التخزين',
	
	'SELECT_DOWNLOAD_FORMAT'	=> 'اختر شكل التنزيل',
	'SUBMIT_AND_DOWNLOAD'	=> 'إرسال ثم تحميل الملف',
	'SUBMIT_AND_UPLOAD'	=> 'إرسال ثم رفع الملف',
	
	'THOSE_MISSING_LANG_FILES'			=> 'الملفات التالية مفقودة من حزمة اللغة %s',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'متغييرات اللغة التالية مفقودة من حزمة اللغة <strong>%s</strong>',
	
	'UNINSTALLED_LANGUAGE_PACKS'	=> 'حزم لغات غير منصبة',
	
	'UNABLE_TO_WRITE_FILE'	=> 'لا يمكن الكتابة على الملف %s.',
	'UPLOAD_COMPLETED'	=> 'تم إكمال الرفع بنجاح.',
	'UPLOAD_FAILED'	=> 'خطأ في الرفع لأسباب مجهولة. ستحتاج إلى استبدال الملف يدوياً.',
	'UPLOAD_METHOD'	=> 'طريقة الرفع',
	'UPLOAD_SETTINGS'	=> 'إعدادات الرفع',
	
	'WRONG_LANGUAGE_FILE'	=> 'ملف اللغة المحدد غير صحيح.',
));

?>