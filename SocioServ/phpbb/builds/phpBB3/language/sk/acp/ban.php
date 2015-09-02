<?php
/**
*
* acp_ban [Slovak]
*
* @package language
* @version $Id: ban.php,v 1.9 2006/10/02 15:10:29 acydburn Exp $
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 hodinu',
	'30_MINS'		=> '30 minút',
	'6_HOURS'		=> '6 hodín',

	'ACP_BAN_EXPLAIN'	=> 'Tu môžete spravovať vylúčenie (ban) používateľov podľa mena, IP adresy alebo e-mailovej adresy. Tieto metódy zamedzujú používateľovi prístup ku ktorejkoľvek časti fóra. Ak chcete, môžete zadať krátky (maximálne 3000 znakov) text zdôvodnenia vylúčenia. Tento bude zobrazený v záznamoch protokolov administrátora. Môžete určiť aj dĺžku vylúčenia. Ak chcete vylúčenie do konca určitého dátumu radšej ako definovanú dĺžku, vyberte položku <span style="text-decoration: underline;">Až do -&gt;</span> a zadajte dátum vo formáte <kbd>RRRR-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Vyňať z vylúčenia',
	'BAN_LENGTH'			=> 'Dĺžka vylúčenia',
	'BAN_REASON'			=> 'Dôvod vylúčenia',
	'BAN_GIVE_REASON'		=> 'Dôvod zobrazený vylúčenému',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Zoznam vylúčených bol úspešne aktualizovaný.',

	'EMAIL_BAN'					=> 'Vylúčiť jednu alebo viac e-mailových adries',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Použite, ak chcete vyňať zadané e-mailovej adresy zo všetkých momentálnych vylúčení.',
	'EMAIL_BAN_EXPLAIN'			=> 'Ak chcete určiť viac ako jednu e-mailovú adresu, zadajte každú z nich na nový riadok. Na zhodu častí adries použite * ako zástupný znak, napr. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp> atď.',
	'EMAIL_NO_BANNED'			=> 'Nie sú vylúčené žiadne e-mailové adresy.',
	'EMAIL_UNBAN'				=> 'Zrušiť vylúčenie alebo zrušiť vyňatie e-mailov',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Môžete zrušiť vylúčenie (alebo zrušiť vyňatie) viacerých e-mailových adries naraz správnym použitím kombinácie myši a klávesnice na vašom počítači a prehliadači. Vyňaté e-mailové adresy majú označené pozadie.',

	'IP_BAN'					=> 'Vylúčiť jednu alebo viac IP adries',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Použite na vyňatie vloženej IP adresy zo všetkých momentálnych vylúčení.',
	'IP_BAN_EXPLAIN'			=> 'Na určenie rôznych IP adries alebo názvov hostiteľov, zadajte každú z nich na nový riadok. Na určenie rozsahu IP adries, oddeľte začiatok a koniec pomlčkou (-), ako zástupný znak použite *.',
	'IP_HOSTNAME'				=> 'IP adresy alebo názvy hostiteľov',
	'IP_NO_BANNED'				=> 'Žiadne vylúčené IP adresy',
	'IP_UNBAN'					=> 'Zrušiť vylúčenie alebo zrušiť vyňatie IP',
	'IP_UNBAN_EXPLAIN'			=> 'Môžete zrušiť vylúčenie (alebo zrušiť vyňatie) viacerých IP adries naraz správnym použitím kombinácie myši a klávesnice na vašom počítači a prehliadači. Vyňaté IP adresy majú označené pozadie.',

	'LENGTH_BAN_INVALID'		=> 'Dátum musí byť vo formáte <kbd>RRRR-MM-DD</kbd>.',

	'PERMANENT'		=> 'Trvalé',

	'UNTIL'						=> 'Až do',
	'USER_BAN'					=> 'Vylúčiť jedno alebo viac používateľských mien',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Použite, ak chcete vyňať zadaných používateľov zo všetkých momentálnych vylúčení.',
	'USER_BAN_EXPLAIN'			=> 'Môžete vylúčiť viac používateľov naraz zadaním každého mena do nového riadka. Použite funkciu <span style="text-decoration: underline;">Hľadať používateľa</span> na vyhľadanie a automatické zadanie jedného alebo viac používateľov.',
	'USER_NO_BANNED'			=> 'Nie sú vylúčené žiadne používateľské mená.',
	'USER_UNBAN'				=> 'Zrušiť vylúčenie alebo zrušiť vyňatie používateľských mien',
	'USER_UNBAN_EXPLAIN'		=> 'Môžete zrušiť vylúčenie (alebo zrušiť vyňatie) viacerých používateľov naraz správnym použitím kombinácie myši a klávesnice na vašom počítači a prehliadači. Vyňatí používatelia majú označené pozadie.',


));

?>
