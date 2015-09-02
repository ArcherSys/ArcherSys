<?php
/** 
*
* acp_modules.php [Arabic]
*
* @package language
* @version $Id: modules.php,v 1.12 2007/05/10 15:31:21 acydburn Exp $
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'من هنا تستطيع إدارة جميع أنواع الموديولات. يرجى ملاحظة أن لوحة التحكم لها ثلاث مستويات من القوائم (قسم -> قسم -> موديول) بينما الآخريات لها مستويان للقوائم (قسم -> موديول) والتي يجب الحفاظ عليها. ويرجى إدراك أنك قد تغلق على نفسك إذا قمت بتعطيل أو حذف الموديولات المسؤولة عن إدارة الموديول نفسه.',
	'ADD_MODULE'	=> 'إضافة موديول',
	'ADD_MODULE_CONFIRM'	=> 'هل أنت متأكد من أنك تريد إضافة الموديول المحدد بالنمط المحدد ?',
	'ADD_MODULE_TITLE'	=> 'إضافة موديول',
	
	'CANNOT_REMOVE_MODULE'	=> 'لا يمكن حذف الموديول, لأنه يحتوي على فرعيات. الرجاء قم بنقل أو حذف جميع الفرعيات قبل القيام بهذه العملية.',
	'CATEGORY'	=> 'قسم',
	'CHOOSE_MODE'	=> 'اختيار نمط الموديول',
	'CHOOSE_MODE_EXPLAIN'	=> 'اختر أنماط الموديولات المستعملة.',
	'CHOOSE_MODULE'	=> 'اختر موديول',
	'CHOOSE_MODULE_EXPLAIN'	=> 'اختر الملف الذي يتم استدعاؤه بواسطة الموديول.',
	'CREATE_MODULE'	=> 'إنشاء موديول جديد',
	
	'DEACTIVATED_MODULE'	=> 'تعطيل الموديول',
	'DELETE_MODULE'	=> 'حذف الموديول',
	'DELETE_MODULE_CONFIRM'	=> 'هل أنت متأكد من أنك تريد حذف هذا الموديول ?',
	
	'EDIT_MODULE'	=> 'تعديل موديول',
	'EDIT_MODULE_EXPLAIN'	=> 'هنا يمكنك ضبط اعدادات محددة للموديول.',
	
	'HIDDEN_MODULE'	=> 'موديول مخفي',
	'MODULE'	=> 'موديول',
	'MODULE_ADDED'	=> 'تم إضافة الموديول بنجاح.',
	'MODULE_DELETED'	=> 'تم حذف الموديول بنجاح.',
	'MODULE_DISPLAYED'	=> 'عرض الموديول',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'إذا كنت لا تريد عرض هذا الموديول, لكنك تريد استعماله, اختر لا.',
	'MODULE_EDITED'	=> 'تم تعديل الموديول بنجاح.',
	'MODULE_ENABLED'	=> 'تفعيل الموديول',
	'MODULE_LANGNAME'	=> 'اسم لغة الموديول',
	'MODULE_LANGNAME_EXPLAIN'	=> 'قم بإدخال اسم الموديول لعرضه. استعمل دوال اللغة إذا كان الاسم مضافاً في ملف اللغة.',
	'MODULE_TYPE'	=> 'نوع الموديول',
	
	'NO_CATEGORY_TO_MODULE'	=> 'لا يمكن تغيير القسم إلى موديول. رجاءً قم بحذف/تحويل جميع الأقسام والموديولات الفرعية قبل القيام بهذه العملية.',
	'NO_MODULE'	=> 'لم يتم إيجاد أي موديول.',
	'NO_MODULE_ID'	=> 'لم يتم تحديد أي رقم موديول.',
	'NO_MODULE_LANGNAME'	=> 'لم يتم تحديد اسم لغة الموديول.',
	'NO_PARENT'	=> 'لا يوجد أصل',
	
	'PARENT'	=> 'الأصل',
	'PARENT_NO_EXIST'	=> 'الأصل غير موجود.',
	
	'SELECT_MODULE'	=> 'اختر موديول',
));

?>