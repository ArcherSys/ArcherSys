<?php
/** 
*
* groups.php [Arabic]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-06-16 - phpBBEGYPT.com
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
	'ALREADY_DEFAULT_GROUP'	=> 'المجموعة التي اخترتها محددة كمجموعة افتراضية سابقاً',
	'ALREADY_IN_GROUP'	=> 'لا يمكنك الانضمام لهذه المجموعة لأنك منضم إليها سابقاً',
	'ALREADY_IN_GROUP_PENDING'	=> 'لقد قمت بطلب الانضمام لهذه المجموعة مسبقاً',
	'CHANGED_DEFAULT_GROUP'	=> 'تم تغيير المجموعة الافتراضية بنجاح',
	'GROUP_AVATAR'	=> 'صورة المجموعة',
	'GROUP_CHANGE_DEFAULT'	=> 'هل أنت متأكد من تغيير المجموعة الافتراضية إلى مجموعة "%s" ؟',
	'GROUP_CLOSED'	=> 'مجموعة مغلقة',
	'GROUP_DESC'	=> 'وصف المجموعة',
	'GROUP_HIDDEN'	=> 'مجموعة مخفية',
	'GROUP_INFORMATION'	=> 'معلومات أعضاء المجموعة',
	'GROUP_IS_CLOSED'	=> 'هذه المجموعة مغلقة ، لا يستطيع المستخدمون الانضمام إليها تلقائياً',
	'GROUP_IS_FREE'	=> 'هذه المجموعة مفتوحة للجميع ، كل الأعضاء مرحب بهم للانضمام إليها',
	'GROUP_IS_HIDDEN'	=> 'هذه المجموعة مخفية ، أعضاء المجموعة هم من يستطيعون مشاهدتها فقط',
	'GROUP_IS_OPEN'	=> 'هذه المجموعة مفتوحة ، يستطيع الأعضاء تقديم طلب الانضمام إليها',
	'GROUP_IS_SPECIAL'	=> 'هذه المجموعة خاصة ، تكون إدارتها من قبل المدير العام فقط',
	'GROUP_JOIN'	=> 'انضم للمجموعة',
	'GROUP_JOIN_CONFIRM'	=> 'هل أنت متأكد أنك تريد الانضمام للمجموعة التي اخترتها ؟',
	'GROUP_JOIN_PENDING'	=> 'طلب انضمام للمجموعة',
	'GROUP_JOIN_PENDING_CONFIRM'	=> 'هل أنت متأكد أنك تريد طلب الانضمام للمجموعة التي اخترتها ؟',
	'GROUP_JOINED'	=> 'تم الانضمام للمجموعة بنجاح',
	'GROUP_JOINED_PENDING'	=> 'تم إرسال طلبك بنجاح ، فضلاً انتظر الموافقة من مدير المجموعة للانضمام إليها',
	'GROUP_LIST'	=> 'إدارة الأعضاء',
	'GROUP_MEMBERS'	=> 'أعضاء المجموعة',
	'GROUP_NAME'	=> 'اسم المجموعة',
	'GROUP_OPEN'	=> 'فتح',
	'GROUP_RANK'	=> 'رتبة المجموعة',
	'GROUP_RESIGN_MEMBERSHIP'	=> 'ترك هذه المجموعة',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'هل أنت متأكد من تركك للمجموعة التي اخترتها ؟',
	'GROUP_RESIGN_PENDING'	=> 'إرسال طلب إلغاء اشتراكك من المجموعة',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> 'هل أنت متأكد من إرسالك لطلب إلغاء اشتراكك من المجموعة ؟',
	'GROUP_RESIGNED_MEMBERSHIP'	=> 'تم حذفك من المجموعة المختارة بنجاح',
	'GROUP_RESIGNED_PENDING'	=> 'تم إلغاء اشتراكك من المجموعة حسب طلبك بنجاح',
	'GROUP_TYPE'	=> 'نوع المجموعة',
	'GROUP_UNDISCLOSED'	=> 'مجموعة مخفية',
	'FORUM_UNDISCLOSED'	=> 'إدارة المنتديات المخفية',
	'LOGIN_EXPLAIN_GROUP'	=> 'تحتاج لتسجيل الدخول لمشاهدة تفاصيل المجموعة',
	'NO_LEADERS'	=> 'لست مديراً لأي مجموعة',
	'NOT_LEADER_OF_GROUP'	=> 'لا يمكنك القيام بهذه العملية لأنك لست مديراً لهذه المجموعة',
	'NOT_MEMBER_OF_GROUP'	=> 'لا يمكنك القيام بهذه العملية لأنك لست عضواً في هذه المجموعة',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'غير مسموح لك بترك مجموعتك الافتراضية',
	'PRIMARY_GROUP'	=> 'المجموعة الأساسية',
	'REMOVE_SELECTED'	=> 'حذف المختار',
	'USER_GROUP_CHANGE'	=> 'من مجموعة "%1$s" إلى مجموعة "%2$s"',
	'USER_GROUP_DEMOTE'	=> 'تخلّي/تنازل عن صلاحيات القيادة',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'هل أنت متأكد من رغبتك في الانسحاب من قيادة المجموعة المختارة ؟',
	'USER_GROUP_DEMOTED'	=> 'تم الانسحاب من القيادة بنجاح',
));

?>