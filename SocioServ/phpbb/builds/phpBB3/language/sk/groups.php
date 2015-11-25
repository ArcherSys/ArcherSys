<?php
/**
*
* groups [Slovak]
*
* @package language
* @version $Id: groups.php,v 1.8 2006/05/18 18:18:32 acydburn Exp $
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
	'ALREADY_DEFAULT_GROUP'	=> 'Označená skupina je už vašou predvolenou skupinou.',
	'ALREADY_IN_GROUP'		=> 'Už ste členom tejto skupiny.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Už ste požiadali o zaradenie do označenej skupiny.',

	'CHANGED_DEFAULT_GROUP'	=> 'Predvolená skupina bola úspešne zmenená.',

	'GROUP_AVATAR'			=> 'Obrázok skupiny',
	'GROUP_CHANGE_DEFAULT'	=> 'Naozaj chcete zmeniť vaše predvolené členstvo na skupinu "%s"?',
	'GROUP_CLOSED'			=> 'Uzavretá',
	'GROUP_DESC'			=> 'Popis skupiny',
	'GROUP_HIDDEN'			=> 'Skrytá',
	'GROUP_INFORMATION'		=> 'Podrobnosti o skupine',
	'GROUP_IS_CLOSED'					=> 'Toto je uzavretá skupina, noví členovia môžu do nej vstúpiť len na pozvanie lídra skupiny.',
	'GROUP_IS_FREE'						=> 'Toto je otvorená skupina, všetci noví používatelia sú vítaní.',
	'GROUP_IS_HIDDEN'					=> 'Toto je skrytá skupina, iba jej členovia môžu vidieť ďalších členov skupiny.',
	'GROUP_IS_OPEN'						=> 'Toto je otvorená skupina, noví používatelia môžu požiadať o vstup do nej.',
	'GROUP_IS_SPECIAL'					=> 'Toto je zvláštna skupina, zvláštne skupiny sú spravované administrátormi fóra.',
	'GROUP_JOIN'			=> 'Vstúpiť do skupiny',
	'GROUP_JOIN_CONFIRM'	=> 'Naozaj chcete vstúpiť do tejto skupiny?',
	'GROUP_JOIN_PENDING'	=> 'Požiadať o vstup do tejto skupiny',
	'GROUP_JOIN_PENDING_CONFIRM'	=> 'Naozaj chcete požiadať o členstvo v tejto skupine?',
	'GROUP_JOINED'			=> 'Úspešne ste vstúpili do označenej skupiny.',
	'GROUP_JOINED_PENDING'	=> 'Úspešne ste požiadali o členstvo v skupine. Počkajte, kým moderátor skupiny schváli vaše členstvo.',
	'GROUP_LIST'			=> 'Správa používateľov',
	'GROUP_MEMBERS'			=> 'Členovia skupiny',
	'GROUP_NAME'			=> 'Názov skupiny',
	'GROUP_OPEN'			=> 'Otvorená',
	'GROUP_RANK'			=> 'Hodnotenie skupiny',
	'GROUP_RESIGN_MEMBERSHIP'		=> 'Odísť zo skupiny',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Naozaj chcete odísť z vybranej skupiny?',
	'GROUP_RESIGN_PENDING'			=> 'Zrušiť žiadosť o členstvo',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> 'Naozaj chcete zrušiť vašu žiadosť o vstup do tejto skupiny?',
	'GROUP_RESIGNED_MEMBERSHIP'		=> 'Boli ste úspešne odstránený z označenej skupiny.',
	'GROUP_RESIGNED_PENDING'		=> 'Vaša žiadosť o členstvo bola úspešne zrušená.',
	'GROUP_TYPE'			=> 'Typ skupiny',
	'GROUP_UNDISCLOSED'		=> 'Skrytá skupina',
	'FORUM_UNDISCLOSED'					=> 'Moderuje skryté fórum',

	'LOGIN_EXPLAIN_GROUP'	=> 'Na zobrazenie podrobností o skupine musíte byť prihlásený.',

	'NO_LEADERS'			=> 'Nie ste lídrom žiadnej skupiny.',
	'NOT_LEADER_OF_GROUP'	=> 'Požadovaná operácia nemôže byť vykonaná, pretože nie ste lídrom tejto skupiny.',
	'NOT_MEMBER_OF_GROUP'	=> 'Požadovaná operácia nemôže byť vykonaná, pretože nie ste členom tejto skupiny alebo vaše členstvo zatiaľ nebolo schválené.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Nemôžete odísť z vašej predvolenej skupiny.',

	'PRIMARY_GROUP'		=> 'Hlavná skupina',

	'REMOVE_SELECTED'		=> 'Odstrániť označené',

	'USER_GROUP_CHANGE'			=> 'Zo skupiny "%1$s" do "%2$s"',
	'USER_GROUP_DEMOTE'			=> 'Vzdať sa líderstva',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Naozaj sa chcete vzdať funkcie lídra tejto skupiny?',
	'USER_GROUP_DEMOTED'		=> 'Vedenie skupiny bolo úspešne odobraté.',
));

?>
