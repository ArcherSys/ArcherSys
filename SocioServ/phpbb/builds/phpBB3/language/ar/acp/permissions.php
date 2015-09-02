<?php
/** 
*
* acp_permissions.php [Arabic]
*
* @package language
* @version $Id: permissions.php,v 1.34 2007/05/16 14:44:56 acydburn Exp $
* @copyright (c) 2007 phpBB Group 
* @author 2007-06-10 - phpBBegypt.com
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '                <p>نظام الصلاحيات قوي جداً وهو مقسم إلى أربعة أقسام رئيسية وهي:</p>

                <h2>الصلاحيات العامة</h2>
                <p>وتستخدم للتحكم في صلاحيات الوصول واستعمال المنتدى بصورة عامة، وهي مقسمة أيضاً إلى صلاحيات الأعضاء وصلاحيات المجموعات وصلاحيات المدراء والمراقبين العوام (مشرف عام).</p>

                <h2>الصلاحيات الخاصة لكل منتدى</h2>
                <p>وتستخدم للتحكم في صلاحيات الوصول لكل منتدى على حدة, وهي مقسمة أيضاً إلى صلاحيات المنتدى ومشرفي المنتديات وصلاحيات الأعضاء والمجموعات لكل منتدى.</p>

                <h2>قوالب الصلاحيات</h2>
                <p>وتستخدم لإنشاء نماذج مختلفة من الصلاحيات لكي يتم استعمالها لاحقاً لضبط الصلاحيات المتنوعة بطريقة القوالب الجاهزة، القوالب الافتراضية يفترض بها أن تكون مناسبة لإدارة أي منتدى سواء كان كبيراً أو صغيراً، ومع ذلك يمكنك إضافة وتعديل وحذف القوالب للأقسام الأربعة كما تراه مناسباً لإحتياجاتك.</p>

                <h2>ظل الصلاحيات</h2>
                <p>وتستخدم لمشاهدة الصلاحيات المعطاه للأعضاء والمشرفين والمدراء وكذلك المنتديات.</p>
        
                <br />

                <p>لمزيد من المعلومات حول كيفية اعداد وضبط الصلاحيات, يرجى زيارة <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">الفصل 1.5 من دليل الاستعمال السريع</a>.</p>
        ',
	'ACL_NEVER'	=> 'ابداً',
	'ACL_SET'	=> 'إعداد الصلاحيات',
	'ACL_SET_EXPLAIN'	=> 'الصلاحيات تعمل على نظام بسيط <samp>نعم</samp>/<samp>لا</samp>. إعطاء القيمة <samp>ابداً</samp> لإحدى خيارات العضو أو المجموعة سيقوم بإلغاء أي قيمة أخرى معطاه. اذا لم تكن ترغب بإعطاء أي قيمة لإحدى الخيارات فضعها <samp>لا</samp>. بحيث إذا تم إعطاء هذا الخيار قيمة في مكان آخر فسيتم إعتمادها, حتى ولو كانت <samp>ابداً</samp>. جميع العناصر المحددة (بإستعمال مربع التحديد أمامها) ستستخدم الصلاحيات التي ستقوم بتعريفها.',
	'ACL_SETTING'	=> 'إعدادات',
	
	'ACL_TYPE_A_'	=> 'الصلاحيات الإدارية',
	'ACL_TYPE_F_'	=> 'صلاحيات المنتدى',
	'ACL_TYPE_M_'	=> 'صلاحيات الإشراف',
	'ACL_TYPE_U_'	=> 'صلاحيات العضوية',
	
	'ACL_TYPE_GLOBAL_A_'	=> 'الصلاحيات الإدارية',
	'ACL_TYPE_GLOBAL_U_'	=> 'صلاحيات العضوية',
	'ACL_TYPE_GLOBAL_M_'	=> 'صلاحيات الرقابة العامة',
	'ACL_TYPE_LOCAL_M_'	=> 'صلاحيات مشرف المنتدى',
	'ACL_TYPE_LOCAL_F_'	=> 'صلاحيات المنتدى',
	
	'ACL_NO'	=> 'لا',
	'ACL_VIEW'	=> 'مشاهدة الصلاحيات',
	'ACL_VIEW_EXPLAIN'	=> 'هنا تستطيع مشاهدة الصلاحيات الفعالة المعطاة للعضو/المجموعة. المربع الاحمر يرمز الى أن المجموعة/العضو لا تملك هذه الصلاحية, المربع الاخضر يرمز الى أن المجموعة/العضو تملك هذه الصلاحية.',
	'ACL_YES'	=> 'نعم',
	
	'ACP_ADMINISTRATORS_EXPLAIN'	=> 'هنا يمكنك إعطاء الصلاحيات الإدارية للأعضاء أو المجموعات. جميع الأعضاء الذين يملكون الصلاحيات الإدارية يستطيعون مشاهدة لوحة التحكم.',
	'ACP_FORUM_MODERATORS_EXPLAIN'	=> 'هنا يمكنك تعيين أعضاء أو مجموعات كمشرفي منتديات، لضبط صلاحيات الوصول أو ضبط صلاحيات الرقابة العامة يرجى منك استخدام الصفحة المناسبة لذلك.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'	=> 'هنا يمكنك تحديد أي الأعضاء والمجموعات يمكنهم مشاهدة أي المنتديات. لتعيين المشرفين يرجى منك مراجعة الصفحة المناسبة لذلك.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'	=> 'هنا يمكنك إعطاء صلاحيات الرقابة العامة للأعضاء أو المجموعات، هؤلاء المراقبين هم كالمشرفين عدا أنهم يملكون صلاحيات الإشراف على جميع المنتديات.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'	=> 'هنا يمكنك اسناد صلاحيات المنتدى للمجموعات',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'	=> 'هنا يمكنك تغيير الصلاحيات العامة للمجموعات - صلاحيات العضوية وصلاحيات الرقابة العامة والصلاحيات الإدارية. صلاحية العضوية تتحكم في القدرات المتنوعة كإمكانية استخدام صورة شخصية، إرسال الرسائل الخاصة، وغيرها. صلاحيات الرقابة العامة تشمل الموافقة على المواضيع وإدارتها، حظر الأعضاء وغيرها. وأخيرا الصلاحيات الإدارية تشمل تعديل الصلاحيات، تعريف رموز المنتدى BBcode وإدارة المنتديات وغيرها. صلاحيات الأعضاء المنفردة يفضل عدم تغييرها إلا في حالات نادرة، الطريقة الأفضل لضبط الصلاحيات هي بضم المستخدمين في مجموعة معينة وإعطاء الصلاحيات لهذه المجموعة.',
	'ACP_ADMIN_ROLES_EXPLAIN'	=> 'هنا يمكنك إدارة قوالب الصلاحيات الإدارية. القوالب هي صلاحيات ذكية, إذا قمت بتعديل إحدى القوالب فإن جميع العناصر التي تستخدم هذا القالب ستحمل الصلاحيات الجديدة.',
	'ACP_FORUM_ROLES_EXPLAIN'	=> 'هنا يمكنك إدارة قوالب صلاحيات المنتدى. القوالب هي صلاحيات ذكية, إذا قمت بتعديل إحدى القوالب فإن جميع العناصر التي تستخدم هذا القالب ستحمل الصلاحيات الجديدة.',
	'ACP_MOD_ROLES_EXPLAIN'	=> 'هنا يمكنك إدارة قوالب صلاحيات الإشراف. القوالب هي صلاحيات ذكية, إذا قمت بتعديل إحدى القوالب فإن جميع العناصر التي تستخدم هذا القالب ستحمل الصلاحيات الجديدة.',
	'ACP_USER_ROLES_EXPLAIN'	=> 'هنا يمكنك إدارة قوالب صلاحيات العضوية. القوالب هي صلاحيات ذكية, إذا قمت بتعديل إحدى القوالب فإن جميع العناصر التي تستخدم هذا القالب ستحمل الصلاحيات الجديدة.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'	=> 'هنا يمكنك اسناد صلاحيات المنتدى للأعضاء',
	'ACP_USERS_PERMISSIONS_EXPLAIN'	=> 'هنا يمكنك تغيير الصلاحيات العامة للأعضاء - صلاحيات العضوية وصلاحيات الرقابة العامة والصلاحيات الإدارية. صلاحية العضوية تتحكم في القدرات المتنوعة كإمكانية استخدام صورة شخصية، إرسال الرسائل الخاصة، وغيرها. صلاحيات الرقابة العامة تشمل الموافقة على المواضيع وإدارتها، حظر الأعضاء وغيرها. وأخيرا الصلاحيات الإدارية تشمل تعديل الصلاحيات، تعريف رموز المنتدى BBcode وإدارة المنتديات وغيرها. لضبط هذه الصلاحيات لمجموعة كبيرة من الأعضاء دفعة واحدة فننصحك بنظام صلاحيات المجموعات. صلاحيات الأعضاء المنفردة يفضل عدم تغييرها إلا في حالات نادرة، الطريقة الأفضل لضبط الصلاحيات هي بضم المستخدمين في مجموعة معينة وإعطاء الصلاحيات لهذه المجموعة.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'	=> 'هنا تستطيع مشاهدة الصلاحيات الإدارية الفعالة والتي تم اسنادها الى الأعضاء/المجموعات المحددة.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'هنا تستطيع مشاهدة صلاحيات الرقابة العامة الفعالة والتي تم اسنادها الى الأعضاء/المجموعات المحددة.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'	=> 'هنا تستطيع مشاهدة الصلاحيات المنتدى الفعالة والتي تم اسنادها الى الأعضاء/المجموعات والمنتديات.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'هنا تستطيع مشاهدة صلاحيات الإشراف الفعالة والتي تم اسنادها الى الأعضاء/المجموعات والمنتديات.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'	=> 'هنا تستطيع مشاهدة صلاحيات العضوية الفعالة والتي تم اسنادها الى الأعضاء/المجموعات.',
	
	'ADD_GROUPS'	=> 'إضافة مجموعات',
	'ADD_PERMISSIONS'	=> 'إضافة صلاحيات',
	'ADD_USERS'	=> 'إضافة أعضاء',
	'ADVANCED_PERMISSIONS'	=> 'صلاحيات متقدمة',
	'ALL_GROUPS'	=> 'إختر جميع المجموعات',
	'ALL_NEVER'	=> '<samp>ابداً</samp> للجميع',
	'ALL_NO'	=> '<samp>لا</samp> للجميع',
	'ALL_USERS'	=> 'إختر جميع الأعضاء',
	'ALL_YES'	=> '<samp>نعم</samp> للجميع',
	'APPLY_ALL_PERMISSIONS'	=> 'تطبيق جميع الصلاحيات',
	'APPLY_PERMISSIONS'	=> 'تطبيق الصلاحيات',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'الصلاحيات والقوالب التي تم تعريفها لهذا العنصر سيتم تطبيقها فقط على هذا العنصر والعناصر المحددة الأخرى.',
	'AUTH_UPDATED'	=> 'تم تحديث الصلاحيات بنجاح.',
	
	'CREATE_ROLE'	=> 'إنشا قالب',
	'CREATE_ROLE_FROM'	=> 'استعمل الإعدادات من…',
	'CUSTOM'	=> 'مخصص...',
	
	'DEFAULT'	=> 'الافتراضي',
	'DELETE_ROLE'	=> 'حذف القالب',
	'DELETE_ROLE_CONFIRM'	=> 'هل أنت متأكد من أنك تريد حذف هذا القالب؟ العناصر التي تم تطبيق هذا القالب عليها <strong>لن تفقد</strong> إعدادات صلاحياتهم.',
	'DISPLAY_ROLE_ITEMS'	=> 'عرض العناصر التي تستعمل هذا القالب',
	
	'EDIT_PERMISSIONS'	=> 'تعديل الصلاحيات',
	'EDIT_ROLE'	=> 'تعديل القالب',
	
	'GROUPS_NOT_ASSIGNED'	=> 'لم يتم اسناد هذا القالب الى اية مجموعة',
	
	'LOOK_UP_GROUP'	=> 'بحث عن مجموعة مستخدمين',
	'LOOK_UP_USER'	=> 'بحث عن عضو',
	
	'MANAGE_GROUPS'	=> 'إدارة المجموعات',
	'MANAGE_USERS'	=> 'إدارة الأعضاء',
	
	'NO_AUTH_SETTING_FOUND'	=> 'لم يتم تعريف اعدادات الصلاحيات.',
	'NO_ROLE_ASSIGNED'	=> 'لم يتم تطبيق أي قالب…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'التحويل إلى هذا القالب لا يغير الصلاحيات على اليسار. إذا اردت إلغاء/حذف جميع الصلاحيات يجدر بك استعمال وصلة  “<samp>لا</samp> للجميع”.',
	'NO_ROLE_AVAILABLE'	=> 'لا يوجد قوالب متوفرة',
	'NO_ROLE_NAME_SPECIFIED'	=> 'رجاءً قم بإختيار اسم للقالب.',
	'NO_ROLE_SELECTED'	=> 'لم يتم العثور على القالب.',
	'NO_USER_GROUP_SELECTED'	=> 'لم تقم بتحديد اي عضو او مجموعة.',
	
	'ONLY_FORUM_DEFINED'	=> 'لقد قمت بتعريف المنتديات فقط في إختيارك. رجاءا  قم بتحديد عضو واحد أو مجموعة واحدة على الاقل.',
	
	'PERMISSION_APPLIED_TO_ALL'	=> 'سيتم تطبيق الصلاحيات والقالب على جميع العناصر المحددة',
	'PLUS_SUBFORUMS'	=> '+ المنتديات الفرعية',
	
	'REMOVE_PERMISSIONS'	=> 'حذف الصلاحيات',
	'REMOVE_ROLE'	=> 'حذف القالب',
	'RESULTING_PERMISSION'			=> 'نتيجة الصلاحية',
	'ROLE'	=> 'قالب',
	'ROLE_ADD_SUCCESS'	=> 'تمت اضافة القالب بنجاح.',
	'ROLE_ASSIGNED_TO'	=> 'الأعضاء/المجموعات المنسوبة لـ %s',
	'ROLE_DELETED'	=> 'تم حذف القالب بنجاح.',
	'ROLE_DESCRIPTION'	=> 'وصف القالب',
	
	'ROLE_ADMIN_FORUM'	=> 'مدير منتدى',
	'ROLE_ADMIN_FULL'	=> 'ادارة كاملة',
	'ROLE_ADMIN_STANDARD'	=> 'ادارة متوسطة',
	'ROLE_ADMIN_USERGROUP'	=> 'ادارة الأعضاء والمجموعات',
	'ROLE_FORUM_BOT'	=> 'تصفح محركات البحث',
	'ROLE_FORUM_FULL'	=> 'حرية تصفح كاملة',
	'ROLE_FORUM_LIMITED'	=> 'تصفح محدود',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'تصفح محدود + الاستفتاءات',
	'ROLE_FORUM_NOACCESS'	=> 'لا وصول',
	'ROLE_FORUM_ONQUEUE'	=> 'يتطلب موافقة المشرف',
	'ROLE_FORUM_POLLS'	=> 'تصفح متوسط + الاستفتاءات',
	'ROLE_FORUM_READONLY'	=> 'التصفح للقراءة فقط',
	'ROLE_FORUM_STANDARD'	=> 'تصفح متوسط',
	'ROLE_MOD_FULL'	=> 'إشراف كامل',
	'ROLE_MOD_QUEUE'	=> 'إشراف بسيط جدا',
	'ROLE_MOD_SIMPLE'	=> 'إشراف بسيط',
	'ROLE_MOD_STANDARD'	=> 'إشراف متوسط',
	'ROLE_USER_FULL'	=> 'جميع الخصائص',
	'ROLE_USER_LIMITED'	=> 'خصائص محدودة',
	'ROLE_USER_NOAVATAR'	=> 'لا صورة شخصية',
	'ROLE_USER_NOPM'	=> 'لا رسائل خاصة',
	'ROLE_USER_STANDARD'	=> 'خصائص متوسطة',
	
	'ROLE_DESCRIPTION_ADMIN_FORUM'	=> 'يستطيع الوصول إلى إدارة المنتديات وإعدادت صلاحيات المنتديات.',
	'ROLE_DESCRIPTION_ADMIN_FULL'	=> 'يمكنه تصفح جميع أدوات الإدارة.<br />ليس محبذا.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'	=> 'يمكنه تصفح معظم خصائص ادارة المنتدى ولكن لا يمكنه تصفح الادوات المتعلقة بالسيرفر والنظام.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'	=> 'يستطيع إدارة المجموعات والاعضاء: يستطيع تعديل الصلاحيات, الإعدادات, حظر الأعضاء, وإدارة الرتب.',
	'ROLE_DESCRIPTION_FORUM_BOT'	=> 'هذا القالب هو المفضل لمحركات البحث.',
	'ROLE_DESCRIPTION_FORUM_FULL'	=> 'يستطيع استعمال جميع خصائص المنتدى, مثل كتابة الاعلانات والمواضيع المثبثة. يستطيع أيضاً تجاهل فترة الاغراق.<br />غير مستحب للاعضاء العاديين.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'	=> 'يستطيع استعمال بعض خصائص المنتدى, لكن لا يمكنه ارفال الملفات أو استعمال ايقونات المواضيع.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'مثله مثل التصفح المحدود لكنه يستطيع إنشاء الاستفتاءات.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'	=> 'لا يستطيع رؤية أو تصفح المنتدى.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'	=> 'يستطيع استعمال بعض خصائص المنتدى بالاضافة الى المرفقات, لكن المرفقات والمواضيع يجب أن يوافق عليها المشرف أولاً.',
	'ROLE_DESCRIPTION_FORUM_POLLS'	=> 'مثل التصفح المتوسط لكنه يستطيع أيضاً انشاء الاستفتاءات.',
	'ROLE_DESCRIPTION_FORUM_READONLY'	=> 'يستطيع قراءة المنتدى, لكنه لا يستطيع انشاء مواضيع جديدة أو الرد عليها.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'	=> 'يستطيع استعمال اغلب خصائص المنتدى بما فيها إرفاق الملفات وحذف المواضيع الخاصة به, لكنه لا يستطيع اغلاق مواضيعه , ولا يستطيع انشاء الاستفتاءات.',
	'ROLE_DESCRIPTION_MOD_FULL'	=> 'يستطيع استعمال جميع خصائص الاشراف, بما فيها حظر الأعضاء.',
	'ROLE_DESCRIPTION_MOD_QUEUE'	=> 'يستطيع استعمال الاشراف المحدود جدا لتفعيل المواضيع وتعديلها, لكن لا شيء أكثر.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'	=> 'يستطيع استعمال عمليات الموضوع الاساسية. لا يستطيع ارسال التحذيرات أو استعمال أوامر الاشراف.',
	'ROLE_DESCRIPTION_MOD_STANDARD'	=> 'يستطيع استعمال اغلبية ادوات الاشراف, لكن لا يستطيع حظر الاعضاء أو تغيير كاتب الموضوع.',
	'ROLE_DESCRIPTION_USER_FULL'	=> 'يستطيع استعمال جميع الخصائص المتوفرة للاعضاء, بما فيها تغيير اسم المستخدم وتجاهل فترة الاغراق.<br />لا ننصح بذالك.',
	'ROLE_DESCRIPTION_USER_LIMITED'	=> 'يستطيع تصفح بعض خيارات العضو. المرفقات, البريد, والرسائل الخاصة غير متاحة.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'	=> 'لديه بعض الخصائص البسيطة ولا يمكنه استعمال الصورة الشخصية.',
	'ROLE_DESCRIPTION_USER_NOPM'	=> 'لديه بعض الخاصئص البسيطة ولا يمكنه ارسال الرسائل الخاصة.',
	'ROLE_DESCRIPTION_USER_STANDARD'	=> 'يستطيع تصفح اغلبية خصائص العضو وليس كلها. لا يستطيع تغيير اسم المستخدم او تجاهل فترة الاغراق.',
	
	'ROLE_DESCRIPTION_EXPLAIN'	=> 'تستطيع اضافة وصف صغير لما يفعله القالب أو ماذا يعني. النص الذي ستكتبه هنا سيتم عرضه في شاشة الصلاحيات أيضاً.',
	'ROLE_DESCRIPTION_LONG'	=> 'وصف القالب كبير جدا, حاول أن لا يتعدى 4000 حرف',
	'ROLE_DETAILS'	=> 'تفاصيل القالب',
	'ROLE_EDIT_SUCCESS'	=> 'تم تعديل القالب بنجاح.',
	'ROLE_NAME'	=> 'اسم القالب',
	'ROLE_NAME_ALREADY_EXIST'	=> 'اسم القالب <strong>%s</strong> موجود مسبقاً في هذه الصلاحيات.',
	'ROLE_NOT_ASSIGNED'	=> 'لم يتم اسناد القالب بعد.',
	
	'SELECTED_FORUM_NOT_EXIST'	=> 'المنتديات المحددة غير موجودة.',
	'SELECTED_GROUP_NOT_EXIST'	=> 'المجموعات المحددة غير موجودة.',
	'SELECTED_USER_NOT_EXIST'	=> 'الأعضاء المحددين غير موجدين.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'المنتدى الذي حددته هنا سيحتوي على جميع المنتديات الفرعية في التحديد.',
	'SELECT_ROLE'	=> 'اختر قالب...',
	'SELECT_TYPE'	=> 'اختر النوع',
	'SET_PERMISSIONS'	=> 'ضبط الصلاحيات',
	'SET_ROLE_PERMISSIONS'	=> 'ضبط صلاحيات القالب',
	'SET_USERS_PERMISSIONS'	=> 'ضبط صلاحيات العضوية',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'ضبط صلاحيات الوصول للمنتدى',
	
	'TRACE_DEFAULT'	=> 'افتراضياً كل صلاحية خيارها <samp>لا</samp> (غير معطاة). لذا الصلاحية يمكن ان تستبدل بإعدادات اخرى.',
	'TRACE_FOR'	=> 'التتبع لـ',
	'TRACE_GLOBAL_SETTING'	=> '(عام) %s',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'صلاحيات هذه المجموعة تم تغييرها الى <samp>ابداً</samp> كمجموع للنتيجة اذن النتيجة السابقة تم الإحتفاظ بها.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'صلاحية المجموعة في هذا المنتدى هي <samp>ابداً</samp> مثل مجموع النتيجة لدا يحتفض بالنتيجة القديمة.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'صلاحيات هذه المجموعة تم تغييرها الى <samp>ابداً</samp> لأن مجموع القيمة الجديدة لم يتم تغييرها (قم بتغيير الى <samp>لا</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'صلاحية المجموعة في هذا المنتدى هي <samp>ابداً</samp> التي توافق قيمة المجموع الجديد لأنه لم يتم تحديدها بعد (اضغط على <samp>لا</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'صلاحيات هذه المجموعة تم تغييرها الى <samp>ابداً</samp> ادى الى استبدال مجموع <samp>نعم</samp> الى <samp>ابداً</samp> لهذا العضو.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'صلاحية هذه المجموعات في هذا المنتدى هي <samp>ابداً</samp> الذي يستبدل المجموع <samp>نعم</samp> لـ <samp>ابداً</samp> لهذا العضو.',
	'TRACE_GROUP_NO'	=> 'الصلاحية هي <samp>لا</samp> لهذه المجموعة لذا تم الاحتفاظ بمجموع القيمة السابق.',
	'TRACE_GROUP_NO_LOCAL'			=> 'صلاحية المجموعة في هذا المنتدى هي <samp>لا</samp> مثل مجموع النتيجة لدا يحتفض بالنتيجة القديمة.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'تم تغيير صلاحيات هذه المجموعة الى <samp>نعم</samp> لكن في المجموع <samp>ابداً</samp> لا يمكن استبدالها.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'صلاحية هذه المجموهات لهذا المنتدى تم تغييرها الى <samp>نعم</samp> لكن المجموع هو <samp>ابداً</samp> لا يمكن تغييره.',
	'TRACE_GROUP_YES_TOTAL_NO'	=> 'تم تغيير صلاحية هذه المجموعة الى <samp>نعم</samp> لأن مجموع القيمة الجديدة لم يتم تغييرها (قم بتغيير الى <samp>لا</samp>)',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'صلاحيات هذه المجموعة تم تغييرها الى <samp>نعم</samp> لأن مجموع القيمة الجديدة لم يتم تغييرها (قم بتغيير الى <samp>لا</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'	=> 'تم تغيير صلاحية هذه المجموعة الى <samp>نعم</samp> ومجموع الصلاحية السابق كان <samp>نعم</samp>, لذا تم الاحتفاظ بالنتيجة.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'صلاحية هذه المجموعات الى هذا المنتدى تم تغييرها الى <samp>نعم</samp> ومجموع الصلاحية تم تغييرها مسبقا الى <samp>نعم</samp>, لدا فنتيجة المجموع يحتفض بها.',

	'TRACE_PERMISSION'	=> 'تتبع الصلاحية - %s',
	'TRACE_RESULT'					=> 'نتيجة التتبع',
	'TRACE_SETTING'	=> 'إعدادات التتبع',
	'TRACE_USER_GLOBAL_YES_TOTAL_YES'	=> 'The forum independent user permission evaluates to <samp>YES</samp> but the total permission is already set to <samp>YES</samp>, so the total result is kept. %sTrace global permission%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'	=> 'The forum independent user permission evaluates to <samp>YES</samp> which overwrites the current local result <samp>NEVER</samp>. %sTrace global permission%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'The forum independent user permission evaluates to <samp>NEVER</samp> which doesn’t influence the local permission. %sTrace global permission%s',
	'TRACE_USER_FOUNDER'					=> 'The user has the founder type set, therefore admin permissions are set to <samp>YES</samp> by default.',
	'TRACE_USER_KEPT'						=> 'The user’s permission is <samp>NO</samp> so the old total value is kept.',
	'TRACE_USER_KEPT_LOCAL'					=> 'The user’s permission for this forum is <samp>NO</samp> so the old total value is kept.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'The user’s permission is set to <samp>NEVER</samp> and the total value is set to <samp>NEVER</samp>, so nothing is changed.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'The user’s permission for this forum is set to <samp>NEVER</samp> and the total value is set to <samp>NEVER</samp>, so nothing is changed.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'The user’s permission is set to <samp>NEVER</samp> which becomes the total value because it was set to NO.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'The user’s permission for this forum is set to <samp>NEVER</samp> which becomes the total value because it was set to NO.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'The user’s permission is set to <samp>NEVER</samp> and overwrites the previous <samp>YES</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'The user’s permission for this forum is set to <samp>NEVER</samp> and overwrites the previous <samp>YES</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'The user’s permission is <samp>NO</samp> and the total value was set to NO so it defaults to <samp>NEVER</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'The user’s permission for this forum is <samp>NO</samp> and the total value was set to NO so it defaults to <samp>NEVER</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'The user’s permission is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'The user’s permission for this forum is set to <samp>YES</samp> but the total <samp>NEVER</samp> cannot be overwritten.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'The user’s permission is set to <samp>YES</samp> which becomes the total value because it was set to <samp>NO</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'The user’s permission for this forum is set to <samp>YES</samp> which becomes the total value because it was set to <samp>NO</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'The user’s permission is set to <samp>YES</samp> and the total value is set to <samp>YES</samp>, so nothing is changed.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'The user’s permission for this forum is set to <samp>YES</samp> and the total value is set to <samp>YES</samp>, so nothing is changed.',
	'TRACE_WHO'	=> 'من',
	'TRACE_TOTAL'	=> 'المجموع',
	
	'USERS_NOT_ASSIGNED'	=> 'لم يتم اسناد هذا القالب لاي عضو',
	'USER_IS_MEMBER_OF_DEFAULT'	=> 'انه عضو في المجموعة الافتراضية التالية',
	'USER_IS_MEMBER_OF_CUSTOM'	=> 'انه عضو في المجموعة الخاصة التالية',
	
	'VIEW_ASSIGNED_ITEMS'	=> 'استعراض العناصر التي أسند اليها القالب',
	'VIEW_LOCAL_PERMS'	=> 'صلاحيات خاصة',
	'VIEW_GLOBAL_PERMS'	=> 'صلاحيات عامة',
	'VIEW_PERMISSIONS'	=> 'عرض الصلاحيات',
	'WRONG_PERMISSION_TYPE'	=> 'خطأ في نوع الصلاحيات المحدد.',
));

?>