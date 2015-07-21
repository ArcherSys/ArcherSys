<?php
/** 
*
* acp_posting.php [Arabic]
*
* @package language
* @version $Id: posting.php,v 1.38 2007/06/09 11:10:23 acydburn Exp $
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
	'ACP_BBCODES_EXPLAIN'	=> 'BBCode هو تطبيق خاص لـ HTML لعرض المزيد من التحكم حول كيفية عرض شيء ما. من هذه الصفحة تستطيع إضافة وحذف وتعديل BBCodes خاصة.',
	'ADD_BBCODE'	=> 'إضافة BBCode جديد',
	
	'BBCODE_ADDED'	=> 'تمت إضافة BBCode بنجاح.',
	'BBCODE_EDITED'	=> 'تم تعديل BBCode بنجاح.',
	'BBCODE_NOT_EXIST'	=> 'BBCode الذي قمت بتحديده غير موجود.',
	'BBCODE_HELPLINE'	=> 'سطر المساعدة',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'هذا الحقل يحتوي على النص الذي سيظهر عند وضع مؤشر الفأرة فوق BBCode.',
	'BBCODE_HELPLINE_TEXT'	=> 'نص سطر المساعدة',
	'BBCODE_INVALID_TAG_NAME'	=> 'أكواد BBCode التي أدخلتها موجودة مسبقاً.',
	'BBCODE_INVALID'			=> 'Your BBCode is constructed in an invalid form.',
	'BBCODE_OPEN_ENDED_TAG'	=> 'BBCode الخاص بك يجب أن يحتوي كودين للفتح والإغلاق.',
	'BBCODE_TAG'	=> 'كود',
	'BBCODE_TAG_TOO_LONG'	=> 'الكود الذي أدخلته كبير جداً.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'كود التعريف الذي قمت بإدخاله طويل جداً, يرجى تقصيره قليلاً.',
	'BBCODE_USAGE'	=> 'استعمال BBCode',
	'BBCODE_USAGE_EXAMPLE'	=> '[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={TEXT1}]{TEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'	=> 'هنا ستعرف كيف سيتم استعمال BBCode. استبدل أي متغير بالرمز المقابل له (%sانظر في الأسفل%s).',
	
	'EXAMPLE'	=> 'مثال:',
	'EXAMPLES'	=> 'أمثلة:',
	
	'HTML_REPLACEMENT'	=> 'استبدال HTML',
	'HTML_REPLACEMENT_EXAMPLE'	=> '&lt;span style="background-color:{COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family:{TEXT1};"&gt;{TEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'	=> 'هنا ستقوم بتعريف استبدال HTML الافتراضي للاكواد. لا تنس وضع الرموز أعلاه!',
	
	'TOKEN'	=> 'رمز',
	'TOKENS'	=> 'رموز',
	'TOKENS_EXPLAIN'		=> 'Tokens are placeholders for user input. The input will be validated only if it matches the corresponding definition. If needed, you can number them by adding a number as the last character between the braces, e.g. {TEXT1}, {TEXT2}.<br /><br />Within the HTML replacement you can also use any language string present in your language/ directory like this: {L_<em>&lt;STRINGNAME&gt;</em>} where <em>&lt;STRINGNAME&gt;</em> is the name of the translated string you want to add. For example, {L_WROTE} will be displayed as &quot;wrote&quot; or its translation according to user’s locale.<br /><br /><strong>Please note that only tokens listed below are able to be used within custom BBCodes.</strong>',
	'TOKEN_DEFINITION'	=> 'ماذا يمكن أن يكون ؟',
	'TOO_MANY_BBCODES'	=> 'لا تستطيع انشاء BBCodes جديدة. الرجاء القيام بحذف واحد أو اكثر من BBCodes ثم حاول مجدداً.',

	'tokens'	=> array(
		'TEXT'	=> 'اي نص, بما فيها الحروف الأجنبية, أرقام, الخ…',
		'NUMBER'	=> 'اي مجموعة من الارقام',
		'EMAIL'	=> 'بريد الكتروني صحيح',
		'URL'	=> 'رابط صحيح باستعمال بروتوكول (http, ftp, الخ… لا يمكن استعمال لحقن الجافاسكربت). إذا لم يتم إدخال بروتوكول فسيتم إضافة http:// تلقائياً.',
		'LOCAL_URL'	=> 'الرابط المحلي. الرابط يجب ان يكون مرتبطاً بالموضوع ولا يستعمل اسم الخادم أو البرتوكول.',
		'COLOR'	=> 'لون HTML, يمكن استعمال شكل الارقام <samp>#FF1234</samp> أو <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">مفاتيح الوان CSS</a> مثل <samp>fuchsia</samp> أو <samp>InactiveBorder</samp>',
	),

	'ACP_ICONS_EXPLAIN'	=> 'من هذه الصفحة تستطيع اضافة, حذف وتعديل الايقونات التي قد يستعملها الاعضاء عند ارسال مواضيعهم ومشاركاتهم. هذه الايقونات عادة ما يتم عرضها بجوار عنوان الموضوع في المنتدى, أو عناوين المشاركات في صفحة الموضوع. تستطيع أيضاً انشاء وتركيب حزم جديد من الايقونات.',
	'ACP_SMILIES_EXPLAIN'	=> 'الابتسامات عادةً ما تكون عبارة عن صور صغيرة ومتحركة تستخدم للتعبير عن الأحاسيس والمشاعر. من هذه الصفحة تستطيع اضافة, حذف وتعديل الابتسامات التي سيتعملها الاعضاء في مشاركاتهم ورسائلهم الخاصة. تستطيع أيضاً انشاء وتركيب حزم جديدة من الاسبتسامات.',
	'ADD_SMILIES'	=> 'اضافة ابتسامات عديدة',
	'ADD_SMILEY_CODE'	=> 'أضف كود ابتسامات إضافي',
	'ADD_ICONS'	=> 'اضافة ايقونات عديدة',
	'AFTER_ICONS'	=> 'بعد %s',
	'AFTER_SMILIES'	=> 'بعد %s',
	
	'CODE'	=> 'كود',
	'CURRENT_ICONS'	=> 'الايقونات الحالية',
	'CURRENT_ICONS_EXPLAIN'	=> 'اختر ما تريد فعله بالايقونات المركبة الحالية.',
	'CURRENT_SMILIES'	=> 'الابتسامات الحالية',
	'CURRENT_SMILIES_EXPLAIN'	=> 'اختر ما تريد عمله بالابتسامات المركبة الحالية.',
	
	'DISPLAY_ON_POSTING'	=> 'عرض في صفحة الكتابة',
	
	'EDIT_ICONS'	=> 'تعديل الايقونات',
	'EDIT_SMILIES'	=> 'تعديل الابتسامات',
	'EMOTION'	=> 'الابتسامات',
	'EXPORT_ICONS'	=> 'تصدير وتحميل icons.pak',
	'EXPORT_ICONS_EXPLAIN'	=> '%sبالضغط هنا, اعدادات الايقونات سيتم ضغطها الى <samp>icons.pak</samp> وبمجرد تحميلها يمكن ان تستعمل ملف <samp>.zip</samp> او <samp>.tgz</samp> يحتوي على جميع الايقونات بالاضافة الى ملف الاعداد <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'	=> 'تصدير وتحميل smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sبالضغط هنا, اعدادات الابتسامات سيتم ضغطها الى <samp>smilies.pak</samp> الذي بمجرد تحميله يمكن ان يستعمل ملف<samp>.zip</samp> او <samp>.tgz</samp> يحتوي على جميع الابتسامات بالاضافة الى ملف الاعداد <samp>smilies.pak</samp>%s.',
	
	'FIRST'	=> 'البداية',
	
	'ICONS_ADD'	=> 'اضافة ايقونة جديدة',
	'ICONS_ADDED'	=> 'تمت اضافة الايقونة بنجاح.',
	'ICONS_CONFIG'	=> 'اعدادات الايقونة',
	'ICONS_DELETED'	=> 'تم حذف الايقونة بنجاح.',
	'ICONS_EDIT'	=> 'تعديل الايقونة',
	'ICONS_EDITED'	=> 'تم تحديث الايقونة بنجاح.',
	'ICONS_HEIGHT'	=> 'ارتفاع الايقونة',
	'ICONS_IMAGE'	=> 'صورة الايقونة',
	'ICONS_IMPORTED'	=> 'تم تركيب حزمة الايقونات بنجاح.',
	'ICONS_IMPORT_SUCCESS'	=> 'تم استيراد حزمة الايقونات بنجاح.',
	'ICONS_LOCATION'	=> 'مكان الايقونة',
	'ICONS_NOT_DISPLAYED'	=> 'الايقونات التالية لا يتم اضهارها في صفحة المشاركة',
	'ICONS_ORDER'	=> 'طلب الايقونة',
	'ICONS_URL'	=> 'ملف صورة الايقونة',
	'ICONS_WIDTH'	=> 'عرض الايقونة',
	'IMPORT_ICONS'	=> 'تركيب حزمة الايقونات',
	'IMPORT_SMILIES'	=> 'تركيب حزمة الابتسامات',
	
	'KEEP_ALL'	=> 'الاحتفاظ بالكل',
	
	'MASS_ADD_SMILIES'	=> 'اضافة ابتسامات عديدة',
	'NO_ICONS_ADD'	=> 'لا توجد اي ايقونات متوفرة للتركيب.',
	'NO_ICONS_EDIT'	=> 'لا توجد اي ايقونات متوفرة للتعديل.',
	'NO_ICONS_EXPORT'	=> 'ليست لديك اي ايقونات لانشاء حزمة.',
	'NO_ICONS_PAK'	=> 'لم يتم ايجاد اي حزمة الايقونات.',
	'NO_SMILIES_ADD'	=> 'لا توجد اي ابتسامات متوفرة للتركيب.',
	'NO_SMILIES_EDIT'	=> 'لا توجد اي ابتسامات متوفرة للتعديل.',
	'NO_SMILIES_EXPORT'	=> 'ليست لديك اي ابتسامات لانشاء حزمة.',
	'NO_SMILIES_PAK'	=> 'لم يتم ايجاد اي حزمة ابتسامات.',
	
	'PAK_FILE_NOT_READABLE'	=> 'لا يمكن قراءة ملف <samp>.pak</samp>.',
	
	'REPLACE_MATCHES'	=> 'Replace matches',
	
	'SELECT_PACKAGE'	=> 'اختيار ملف الحزمة',
	'SMILIES_ADD'	=> 'اضافة ابتسامة جديدة',
	'SMILIES_ADDED'	=> 'تم اضافة الابتسامة بنجاح.',
	'SMILIES_CODE'	=> 'كود الابتسامة',
	'SMILIES_CONFIG'	=> 'اعدادات الابتسامة',
	'SMILIES_DELETED'	=> 'تم حذف الابتسامة بنجاح.',
	'SMILIES_EDIT'	=> 'تعديل الابتسامة',
	'SMILIES_EDITED'	=> 'تم تحديث الابتسامة بنجاح.',
	'SMILIES_EMOTION'	=> 'الابتسامة',
	'SMILIES_HEIGHT'	=> 'ارتفاع الابتسامة',
	'SMILIES_IMAGE'	=> 'صورة الابتسامة',
	'SMILIES_IMPORTED'	=> 'تم تركيب حزم الابتسامات بنجاح.',
	'SMILIES_IMPORT_SUCCESS'	=> 'تم استيراد حزمة الابتسامات بنجاح.',
	'SMILIES_LOCATION'	=> 'مكان الابتسامة',
	'SMILIES_NOT_DISPLAYED'	=> 'الابتسامات التالية لا يتم عرضها في صفحة المشاركة',
	'SMILIES_ORDER'	=> 'ترتيب الابتسامات',
	'SMILIES_URL'	=> 'ملف صورة الابتسامة',
	'SMILIES_WIDTH'	=> 'عرض الابتسامة',
	
	'WRONG_PAK_TYPE'	=> 'الحزمة المحدد لا تحتوي على البيانات الضرورية.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'	=> 'من هذه اللوحة تستطيع اضافة, تعديل, وحذف الكلمات التي سوف تحجب تلقائيا في المنتديات. أيضاً لن يستطيع الاشخاص التسجيل بأسماء تحتوي على هذه الكلمات. العلامة الشاملة (*) يمكن استخدامها أيضاً، على سبيل المثال: *سلام* تطابق كلمة الاسلامي، سلام* تطابق كلمة سلامي، *سلام تطابق كلمة الإسلام.',
	'ADD_WORD'	=> 'اضافة كلمة جديدة',
	
	'EDIT_WORD'	=> 'تعديل رقابة الكلمة',
	'ENTER_WORD'	=> 'يجب عليك كتابة الكلمة والاستبدال الخاص بها.',
	
	'NO_WORD'	=> 'لم يتم تحديد اي كلمة لتعديلها.',
	
	'REPLACEMENT'	=> 'الاستبدال',
	
	'UPDATE_WORD'	=> 'تحديث رقابة الكلمة',
	
	'WORD'	=> 'الكلمة',
	'WORD_ADDED'	=> 'تمت اضافة رقابة الكلمة بنجاح.',
	'WORD_REMOVED'	=> 'تم حذف رقابة الكلمة بنجاح.',
	'WORD_UPDATED'	=> 'تم تحديث رقابة الكلمة بنجاح.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'	=> 'باستعمال هذا النموذج تستطيع اضافة, تعديل, مشاهدة وحذف الرتب. تستطيع أيضاً إنشاء رتب خاصة والتي يمكن اعطاءهها لعضو بسهولة عبر إدارة الأعضاء.',
	'ADD_RANK'	=> 'اضافة رتبة جديدة',
	
	'MUST_SELECT_RANK'	=> 'يجب عليك اختيار رتبة.',
	'NO_ASSIGNED_RANK'	=> 'لم يتم اسناد رتبة مخصصة.',
	'NO_RANK_TITLE'	=> 'لم تقم بتحديد اسم للرتبة.',
	'NO_UPDATE_RANKS'	=> 'تم حذف الرتبة بنجاح. مع ذلك فإن العضويات التي تستخدم هذه الرتبة لم تحدث، تحتاج إلى إعادة ضبط الرتبة لهؤلاء الأعضاء يدوياً.',
	'RANK_ADDED'	=> 'تمت اضافة الرتبة بنجاح.',
	
	'RANK_IMAGE'	=> 'صورة الرتبة',
	'RANK_IMAGE_EXPLAIN'	=> 'استعمل هذه الخاصية لإضافة صورة صغيرة مرتبطة بالرتبة. المسار مرتبط بالدليل الجذر لphpBB.',
	'RANK_MINIMUM'	=> 'الحد الأدنى من المشاركات',
	'RANK_REMOVED'	=> 'تم حذف الرتبة بنجاح.',
	'RANK_SPECIAL'	=> 'تعيين كرتبة خاصة',
	'RANK_TITLE'	=> 'اسم الرتبة',
	'RANK_UPDATED'	=> 'تم تحديث الرتبة بنجاح.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'هنا تستطيع التحكم بالاسماء الممنوعة من الاستعمال. يمكنك أيضاً استخدام العلامة الشاملة (*) في الأسماء. يرجى ملاحظة أنك لن تستطيع تحديد اية اسماء قد تم تسجيلها مسبقا, يجب عليك أولاً حذف هذا الاسم ثم منعه.',
	'ADD_DISALLOW_EXPLAIN'	=> 'تستطيع منع الاسماء باستعمال علامة النجمة * للمطابقة الجزئية.',
	'ADD_DISALLOW_TITLE'	=> 'اضافة اسم ممنوع',
	
	'DELETE_DISALLOW_EXPLAIN'	=> 'تستطيع حذف الاسم الممنوع عبر اختياره من اللائحة والضغط على ارسال.',
	'DELETE_DISALLOW_TITLE'	=> 'حذف الاسم الممنوع',
	'DISALLOWED_ALREADY'	=> 'الاسم الذي قمت باضافته لا يمكن منعه. قد يكون موجود سابقاً في اللائحة أو موجود في لائحة مراقبة الكلمات أو ان الاسم مستخدم فعلاً.',
	'DISALLOWED_DELETED'	=> 'تم حذف الاسم الممنوع بنجاح.',
	'DISALLOW_SUCCESSFUL'	=> 'تم اضافة الاسم الممنوع بنجاح.',
	
	'NO_DISALLOWED'	=> 'لا يوجد اسماء ممنوعة',
));

// Reasons
$lang = array_merge($lang, array(
	'NO_USERNAME_SPECIFIED'	=> 'لم تقم بتحديد أو اختيار اسم عضو ليتم التعامل معه.',
	'ACP_REASONS_EXPLAIN'	=> 'هنا يمكنك إدارة الأسباب المستخدمة عند التبليغ عن المشاركات وعند رفض المشاركات من قبل المشرف. هناك سبب واحد افتراضي (معلم ب*) لا يمكنك حذفه، هذا السبب يستخدم بصورة عامة إذا لم يكن هناك أي سبب آخر مناسب.',
	'ADD_NEW_REASON'	=> 'اضافة سبب جديد',
	'AVAILABLE_TITLES'	=> 'عناوين الأسباب المحلية المتوفرة',

	'IS_NOT_TRANSLATED'	=> 'السبب <strong>ليس</strong> محلياً',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'السبب <strong>ليس</strong> محلياً. إذا أردت إضافة النموذج المحلي، عليك بتحديد المفتاح الصحيح من ملفات اللغة في قسم أسباب التقارير.',
	'IS_TRANSLATED'	=> 'السبب محلي.',
	'IS_TRANSLATED_EXPLAIN'	=> 'السبب محلي. إذا كان العنوان الذي أدخلته هنا معرف في ملفات اللغة، فسيتم اختيار النموذج المحلي المناسب لهذا السبب.',

	'NO_REASON'	=> 'لم يتم ايجاد السبب.',
	'NO_REASON_INFO'	=> 'يجب عليك تحديد العنوان والوصف لهذا السبب.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'لا تستطيع حذف السبب الافتراضي "اخرى".',

	'REASON_ADD'	=> 'إضافة سبب للتقارير/الرفض',
	'REASON_ADDED'	=> 'تمت إضافة السبب بنجاح',
	'REASON_ALREADY_EXIST'	=> 'هناك سبب بهذا العنوان مسبقاً، يرجى اختيار عنوان آخر لهذا السبب.',
	'REASON_DESCRIPTION'	=> 'وصف السبب',
	'REASON_DESC_TRANSLATED'	=> 'وصف السبب الذي سيتم عرضه',
	'REASON_EDIT'	=> 'تعديل السبب',
	'REASON_EDIT_EXPLAIN'	=> 'هنا تستطيع اضافة وتعديل السبب.',
	'REASON_REMOVED'	=> 'تم حذف السبب بنجاح',
	'REASON_TITLE'	=> 'عنوان السبب',
	'REASON_TITLE_TRANSLATED'	=> 'عنوان السبب المعروض',
	'REASON_UPDATED'	=> 'تم تحديث السبب بنجاح',
'SMILIES_NONE_EDITED'	=> 'اضافة ايقونة جديدة',

'SMILIES_ONE_EDITED'	=> 'اضافة ايقونة جديدة',
	
'DISPLAY_POSTING'	=> 'اضافة ايقونة جديدة',
'DISPLAY_POSTING_NO'	=> 'اضافة ايقونة جديدة',
'ICON_NONE_ADDED'	=> 'اضافة ايقونة جديدة',
'ICONS_ONE_ADDED'	=> 'اضافة ايقونة جديدة',
'ICONS_ONE_EDITED'	=> 'اضافة ايقونة جديدة',
'ICON_NONE_EDITED'	=> 'اضافة ايقونة جديدة',
'SMILIES_NONE_ADDED'	=> 'اضافة ايقونة جديدة',
'SMILIES_ONE_ADDED'	=> 'اضافة ايقونة جديدة',

	'USED_IN_REPORTS'	=> 'عدد التبليغات المستعمل بها',
));

?>