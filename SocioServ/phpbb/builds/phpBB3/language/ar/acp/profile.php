<?php
/** 
*
* acp_profile.php [Arabic]
*
* @package language
* @version $Id: profile.php,v 1.23 2007/06/09 11:10:23 acydburn Exp $
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
	'ADDED_PROFILE_FIELD'	=> 'أضيفت الخيارات المعرفة بشكل صحيح.',
	'ALPHA_ONLY'	=> 'عدد فقط',
	'ALPHA_SPACERS'	=> 'عددي و فواصل',
	'ALWAYS_TODAY'	=> 'دائماً الوقت الحالي',
	'BOOL_ENTRIES_EXPLAIN'	=> 'أدخل خياراتك الآن',
	'BOOL_TYPE_EXPLAIN'	=> 'Define the type, either a checkbox or radio buttons.',
	'CHANGED_PROFILE_FIELD'	=> 'تم تغير حقل الملف الشخصي بنجاح.',
	'CHARS_ANY'	=> 'أي شخص',
	'CHECKBOX'	=> 'صندوق اختيار',
	'COLUMNS'	=> 'الأعمدة',
	'CP_LANG_DEFAULT_VALUE'	=> 'القيمة الافتراضية',
	'CP_LANG_EXPLAIN'	=> 'حقل الوصف',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'The explanation for this field presented to the user.',
	'CP_LANG_NAME'	=> 'عنوان الحقل المقدم للعضو',
	'CP_LANG_OPTIONS'	=> 'خيارات',
	'CREATE_NEW_FIELD'	=> 'إنشاء حقل جديد',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'At least one custom profile field has not yet been translated. Please enter the required information by clicking on the “Translate” link.',
	'DEFAULT_ISO_LANGUAGE'	=> 'اللغة الافتراضية [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'The language entries for the default language are not filled for this profile field.',
	'DEFAULT_VALUE'	=> 'حقل افتراضي',
	'DELETE_PROFILE_FIELD'	=> 'إزالة حقل الملف',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'هل أنت متأكد من أنك تريد حذف حقل الملف ?',
	'DISPLAY_AT_PROFILE'	=> 'عرض في لوحة تحكم العضو',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'يمكن للعضو تغير حقول الملف الشخصي الخاصة به عبر الملف الشخصي',
	'DISPLAY_AT_REGISTER'	=> 'مشاهدة عرض التسجيل',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'If this option is enabled, the field will be displayed on registration and able to be changed within the user control panel.',
	'DISPLAY_PROFILE_FIELD'	=> 'عرض حقل الملف',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'The profile field will be shown on topic pages, profiles and the memberlist if this is enabled within the load settings. Only showing within the users profile is enabled by default.',
	'DROPDOWN_ENTRIES_EXPLAIN'	=> 'أدخل خياراتك الآن, كل الخيارات في سطر واحد.',
	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Please note that you are able to change your options text and also able to add new options to the end. It is not advised to add new options between existing options - this could result in wrong options assigned to your users. This can also happen if you remove options in-between. Removing options from the end result in users having assigned this item now reverting back to the default one.',
	'EMPTY_FIELD_IDENT'	=> 'حقل التعريف فارغ',
	'EMPTY_USER_FIELD_NAME'	=> 'الرجاء إدخال عنوان الحقل',
	'ENTRIES'	=> 'مداخل',
	'EVERYTHING_OK'	=> 'الكل موافق',
	'FIELD_BOOL'	=> 'منطقي (نعم/لا)',
	'FIELD_DATE'	=> 'تاريخ',
	'FIELD_DESCRIPTION'	=> 'حقل الوصف',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'The explanation for this field presented to the user.',
	'FIELD_DROPDOWN'	=> 'أسفل الصندوق',
	'FIELD_IDENT'	=> 'حقل التعريف',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'الاسم المختار للحقل موجود مسبقاً ، فضلاً قم باختيار اسم آخر',
	'FIELD_IDENT_EXPLAIN'	=> 'The field identification is a name to identify the profile field within the database and the templates.',
	'FIELD_INT'	=> 'أرقام',
	'FIELD_LENGTH'	=> 'طول صندوق الإدخال',
	'FIELD_NOT_FOUND'	=> 'حقل الملف غير موجود.',
	'FIELD_STRING'	=> 'حقل نص فردي',
	'FIELD_TEXT'	=> 'صندوق النص',
	'FIELD_TYPE'	=> 'نوع الحقل',
	'FIELD_TYPE_EXPLAIN'	=> 'أنت لاتستطيع تغير هذه البيانات لاحقاً.',
	'FIELD_VALIDATION'	=> 'حقل التصديق',
	'FIRST_OPTION'	=> 'الخيارات اولاً',
	'HIDE_PROFILE_FIELD'	=> 'إخفاء حقل الملف',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'الإدارة والمشرفين فقط هم القادرين علي رؤية هذا الملف. إذا هذة الخيارات ممكنة, الملف سوف يكون مرئي للأعضاء والمستخدمين. الملفات.',
	'INVALID_CHARS_FIELD_IDENT'	=> 'Field identification can only contain lowercase a-z and _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Field identification can only be 17 characters long',
	'ISO_LANGUAGE'	=> 'اللغة [%s]',
	'LANG_SPECIFIC_OPTIONS'	=> 'خيارات اللغة المعينة [<strong>%s</strong>]',
	'MAX_FIELD_CHARS'	=> 'القيمة العليا لحقول الاشخاص',
	'MAX_FIELD_NUMBER'	=> 'اعلي قيمة للارقام المسمحة',
	'MIN_FIELD_CHARS'	=> 'القيمة الصغري لارقام الاشخاص',
	'MIN_FIELD_NUMBER'	=> 'اقل قيمة للارقام المسمحة',
	'NO_FIELD_ENTRIES'	=> 'لايوجد معرف المداخل',
	'NO_FIELD_ID'	=> 'لايوجد حقل id محدد.',
	'NO_FIELD_TYPE'	=> 'لايوجد نوع حقل معين.',
	'NO_VALUE_OPTION'	=> 'Option equal to non entered value',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Value for a non-entry. If the field is required, the user gets an error if he choose the option selected here.',
	'NUMBERS_ONLY'	=> 'الارقام من (0-9)',
	'PROFILE_BASIC_OPTIONS'	=> 'خيارات اساسية',
	'PROFILE_FIELD_ACTIVATED'	=> 'حقل الملف نُشط بنجاح.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'حقل الملف عطل بنجاح.',
	'PROFILE_LANG_OPTIONS'	=> 'خيارات اللغة المعينة',
	'PROFILE_TYPE_OPTIONS'	=> 'خيارات نوع الملف المعين',
	'RADIO_BUTTONS'	=> 'ازرار الراديو',
	'REMOVED_PROFILE_FIELD'	=> 'تم ازالة حق الملف بنجاح.',
	'REQUIRED_FIELD'	=> 'حقل مطلوب',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Force profile field to be filled out or specified by user. This will display the profile field at registration and within the user control panel.',
	'ROWS'	=> 'الصفوف',
	'SAVE'	=> 'حفظ',
	'SECOND_OPTION'	=> 'حقل ثانوي',
	'STEP_1_EXPLAIN_CREATE'	=> 'Here you can enter the first basic parameters of your new profile field. This information is needed for the second step where you’ll be able to set remaining options and tweak your profile field further.',
	'STEP_1_EXPLAIN_EDIT'	=> 'Here you can change the basic parameters of your profile field. The relevant options are re-calculated within the second step.',
	'STEP_1_TITLE_CREATE'	=> 'اضف ملف جديد',
	'STEP_1_TITLE_EDIT'	=> 'تعديل حقل الملف',
	'STEP_2_EXPLAIN_CREATE'	=> 'Here you are able to define some common options you may want to adjust.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Here you are able to change some common options.<br /><strong>Please note that changes to profile fields will not affect existing profile fields entered by your users.</strong>',
	'STEP_2_TITLE_CREATE'	=> 'خيارات نوع الملف المحدد',
	'STEP_2_TITLE_EDIT'	=> 'خيارات نوع الملف المحدد',
	'STEP_3_EXPLAIN_CREATE'	=> 'Since you have more than one board language installed, you have to fill out the remaining language items too. The profile field will work with the default language enabled, you are able to fill out the remaining language items later too.',
	'STEP_3_EXPLAIN_EDIT'	=> 'Since you have more than one board language installed, you now can change or add the remaining language items too. The profile field will work with the default language enabled.',
	'STEP_3_TITLE_CREATE'	=> 'تعاريف بقاء اللغة',
	'STEP_3_TITLE_EDIT'	=> 'تعاريف اللغة',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Enter a default phrase to be displayed, a default value. Leave empty if you want to show it empty at the first place.',
	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Enter a default text to be displayed, a default value. Leave empty if you want to show it empty at the first place.',
	'TRANSLATE'	=> 'تحويل',
	'USER_FIELD_NAME'	=> 'اسم الحقل المقدم الي المستخدم',
	'VISIBILITY_OPTION'	=> 'خيارات المشاهدة',
));

?>