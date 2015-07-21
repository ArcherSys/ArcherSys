<?php
/**
*
* acp_email [Slovak]
*
* @package language
* @version $Id: email.php,v 1.6 2006/09/24 00:28:08 shs Exp $
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Tu môžete odoslať e-mailovú správu buď všetkým používateľom alebo len používateľom určitej skupiny, <strong>ktorí majú povolené prijímanie hromadných správ</strong>. Správa bude odoslaná na adresu administrátora a jej kópia všetkým príjemcom. Predvolene môže správa obsahovať maximálne 50 príjemcov, ak ich je viac, bude odoslaných viac správ. Ak posielate správu väčšej skupine ľudí, počkajte na koniec odosielania a nezastavujte ho. Je normálne, že odosielanie väčšiemu množstvu príjemcov trvá dlhšie. Po úplnom odoslaní budete o tom informovaný.',
	'ALL_USERS'						=> 'Všetci používatelia',

	'COMPOSE'				=> 'Napísanie správy',

	'EMAIL_SEND_ERROR'		=> 'Pri odosielaní správy sa vyskytla jedna alebo viac chýb. Zoznam chýb nájdete v %sChybovom zázname%s.',
	'EMAIL_SENT'			=> 'Táto správa bola odoslaná.',
	'EMAIL_SENT_QUEUE'		=> 'Táto správa čaká na odoslanie.',

	'LOG_SESSION'			=> 'Zapísať reláciu odoslania do Chybového záznamu',

	'SEND_IMMEDIATELY'		=> 'Odoslať ihneď',
	'SEND_TO_GROUP'			=> 'Odoslať skupine',
	'SEND_TO_USERS'			=> 'Odoslať používateľom',
	'SEND_TO_USERS_EXPLAIN'	=> 'Zadaním mien nahradíte skupinu označenú vyššie. Každé používateľské meno zadajte na samostatný riadok.',

	'MAIL_HIGH_PRIORITY'	=> 'Vysoká',
	'MAIL_LOW_PRIORITY'		=> 'Nízka',
	'MAIL_NORMAL_PRIORITY'	=> 'Normálna',
	'MAIL_PRIORITY'			=> 'Priorita správy',
	'MASS_MESSAGE'			=> 'Vaša správa',
	'MASS_MESSAGE_EXPLAIN'	=> 'Pamätajte, že môžete zadať len čistý text. Formátovanie bude pri odosielaní odstránené.',

	'NO_EMAIL_MESSAGE'		=> 'Musíte zadať text správy.',
	'NO_EMAIL_SUBJECT'		=> 'Musíte zadať predmet tejto správy.',
));

?>
