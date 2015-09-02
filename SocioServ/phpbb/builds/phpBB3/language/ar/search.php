<?php
/** 
*
* search [English]
*
* @package language
* @version $Id: search.php,v 1.22 2007/05/10 15:31:21 acydburn Exp $
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
	'ALL_AVAILABLE'			=> 'جميع المتاح',
	'ALL_RESULTS'			=> 'جميع النتائج',

	'DISPLAY_RESULTS'		=> 'عرض النتائج كـ',

	'FOUND_SEARCH_MATCH'		=> 'لقد وجد البحث %d نتيجة',
	'FOUND_SEARCH_MATCHES'		=> 'لقد وجد البحث %d نتيجة',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'لقد وجد البحث أكثر من %d نتيجة',

	'GLOBAL'				=> 'اعلان عام',

	'IGNORED_TERMS'			=> 'محظور',
	'IGNORED_TERMS_EXPLAIN'	=> 'الكلمات التالية تم تجاهلها من عملية البحث: <strong>%s</strong>',
	'JUMP_TO_POST'			=> 'الانتقال إلى المشاركة',
	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'المنتدى يتطلب منك أن تكون مسجلاً و تسجل الدخول لمشاهدة مشاركاتك.',

	'NO_KEYWORDS'			=> 'يجب عليك أن تحدد كلمة واحدة على الأقل ليتم البحث عنها، كل كلمة يجب أن تتكون من %d حرف على الأقل ولا يجب أن تحتوي على أكثر من %d حرف بإستثناء العلامات الشاملة.',
	'NO_RECENT_SEARCHES'	=> 'لم يتم إجراء أي عملية بحث مؤخراً',
	'NO_SEARCH'				=> 'عفواً ولكن غير مسموح لك بإستعمال محرك البحث',
	'NO_SEARCH_RESULTS'		=> 'لم يتم العثور على نتائج مناسبة',
	'NO_SEARCH_TIME'		=> 'عفواً لا يمكنك إجراء عمليات بحث في الوقت الحالي، يرجى المحاولة بعد دقائق قليلة',
	'WORD_IN_NO_POST'		=> 'لم يتم العثور على أي مشاركة وذلك لأن الكلمة <strong>%s</strong> غير موجودة في أي مشاركة',
	'WORDS_IN_NO_POST'		=> 'لم يتم العثور على أي مشاركة وذلك لأن الكلمات <strong>%s</strong> غير موجودة في أي مشاركة',

	'POST_CHARACTERS'		=> 'حرف من المشاركة',

	'RECENT_SEARCHES'		=> 'عمليات بحث حديثة',
	'RESULT_DAYS'			=> 'حدد النتائج بوقت سابق',
	'RESULT_SORT'			=> 'ترتيب النتائج بواسطة',
	'RETURN_FIRST'			=> 'ابحث في أول',
	'RETURN_TO_SEARCH_ADV'	=> 'الرجوع إلى البحث المتقدم',

	'SEARCHED_FOR'				=> 'كلمة البحث المستخدمة',
	'SEARCHED_TOPIC'			=> 'المواضيع التي تم البحث فيها',
	'SEARCH_ALL_TERMS'			=> 'ابحث عن جميع الكلمات أو استخدم سؤال البحث كما هو',
	'SEARCH_ANY_TERMS'			=> 'ابحث عن أي كلمة',
	'SEARCH_AUTHOR'				=> 'ابحث عن كاتب',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'استخدم النجمة (*) كعلامة شاملة للمطابقة الجزئية',
	'SEARCH_FIRST_POST'			=> 'أول مشاركة من الموضوع فقط',
	'SEARCH_FORUMS'				=> 'ابحث في المنتديات',
	'SEARCH_FORUMS_EXPLAIN'		=> 'اختر المنتدى أو المنتديات التي ترغب بالبحث فيها، للسرعة يمكنك البحث بداخل المنتديات الفرعية باختيار المنتدى الأب وتفعيل البحث في المنتديات الفرعية أدناه',
	'SEARCH_IN_RESULTS'			=> 'ابحث في هذه النتائج',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'ضع علامة <strong>+</strong> في بداية الكلمة التي يجب أن تكون ضمن النتائج وعلامة <strong>-</strong> أمام الكلمة التي لا تريدها أن تظهر، ضع قائمة بالكلمات مفصولة بـ <strong>|</strong> بين قوسين اذا كنت تريد لكلمة واحد منها فقط أن تظهر. استخدم النجمة (*) كعلامة شاملة للمطابقة الجزئية.',
	'SEARCH_MSG_ONLY'			=> 'نص الرسالة فقط',
	'SEARCH_OPTIONS'			=> 'خيارات البحث',
	'SEARCH_QUERY'				=> 'سؤال البحث',
	'SEARCH_SUBFORUMS'			=> 'ابحث في المنتديات الفرعية',
	'SEARCH_TITLE_MSG'			=> 'عناوين المشاركات ونص الرسالة',
	'SEARCH_TITLE_ONLY'			=> 'عناوين المواضيع فقط',
	'SEARCH_WITHIN'				=> 'ابحث في',
	'SORT_ASCENDING'			=> 'تصاعدياً',
	'SORT_AUTHOR'				=> 'الكاتب',
	'SORT_DESCENDING'			=> 'تنازلياً',
	'SORT_FORUM'				=> 'المنتدى',
	'SORT_POST_SUBJECT'			=> 'عنوان المشاركة',
	'SORT_TIME'					=> 'وقت المشاركة',

	'TOO_FEW_AUTHOR_CHARS'	=> 'عليك أن تحدد %d حرفاً على الأقل من اسم الكاتب',
));

?>