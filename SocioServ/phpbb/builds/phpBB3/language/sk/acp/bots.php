<?php
/**
*
* acp_bots [Slovak]
*
* @package language
* @version $Id: bots.php,v 1.11 2007/07/09 11:00:14 kellanved Exp $
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Správa robotov',
	'BOTS_EXPLAIN'		=> 'Roboti sú automatizované programy používané vyhľadávačmi na aktualizáciu svojich databáz. Tieto programy zvyčajne nepoužívajú fórum ako normálni používatelia a môžu skresľovať stav počítadla návštev, zvyšujú zaťaženie servera a nemusia indexovať stránky správne. Tu môžete určiť špeciálne typy používateľov, aby ste zabránili týmto problémom.',
	'BOT_ACTIVATE'		=> 'Aktivovať',
	'BOT_ACTIVE'		=> 'Aktívny robot',
	'BOT_ADD'			=> 'Pridať robota',
	'BOT_ADDED'			=> 'Nový robot bol úspešne pridaný.',
	'BOT_AGENT'			=> 'Agent bota',
	'BOT_AGENT_EXPLAIN'	=> 'Reťazec reprezentujúci identifikáciu agenta prehliadača robota, čiastočné výrazy sú povolené.',
	'BOT_DEACTIVATE'	=> 'Deaktivovať',
	'BOT_DELETED'		=> 'Robot bol úspešne odstránený.',
	'BOT_EDIT'			=> 'Úprava robota',
	'BOT_EDIT_EXPLAIN'	=> 'Tu môžete pridať alebo upraviť existujúcich robotov. Môžete definovať reťazec identifikácie agenta a/alebo jednu alebo viac IP adries (alebo rozsah adries). Buďte opatrný pri zadávaní identifikácie agentov alebo adries. Môžete určiť štýl a jazyk, ktorý robot použije pri prehliadaní fóra. Takto môžete znížiť využitie šírky pásma určeného na pripojenie určením jednoduchých štýlov pre robotov. Nezabudnite na nastavenie špeciálnych práv pre používateľskú skupinu robotov.',
	'BOT_LANG'			=> 'Jazyk pre robotov',
	'BOT_LANG_EXPLAIN'	=> 'Jazyk určený pre robotov prehliadajúcich fórum.',
	'BOT_LAST_VISIT'	=> 'Posledná návšteva',
	'BOT_IP'			=> 'IP adresa robota',
	'BOT_IP_EXPLAIN'	=> 'Čiastočné výrazy sú povolené, adresy oddeľte čiarkou.',
	'BOT_NAME'			=> 'Názov robota',
	'BOT_NAME_EXPLAIN'	=> 'Slúži len pre vašu informáciu.',
	'BOT_NAME_TAKEN'	=> 'Zadaný názov sa už používa a nemôže byť priradený tomuto robotovi.',
	'BOT_NEVER'			=> 'Nikdy',
	'BOT_STYLE'			=> 'Štýl pre robota',
	'BOT_STYLE_EXPLAIN'	=> 'Štýl používaný pre robotov prehliadajúcich fórum.',
	'BOT_UPDATED'		=> 'Nastavenia pre robotov boli úspešne aktualizované.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Agent robota, ktorého ste pridali je podobný jednému z tých, ktorého práve používate. Prosím, prispôsobte agenta pre tohto robota.',
	'ERR_BOT_NO_IP'				=> 'Zadané IP adresy nie sú platné alebo server nebol nájdený.',
	'ERR_BOT_NO_MATCHES'		=> 'Musíte zadať aspoň jedného agenta alebo IP adresu pre tohto robota.',

	'NO_BOT'		=> 'Žiadny robot nebol nájdený podľa zadaného ID.',
	'NO_BOT_GROUP'	=> 'Nebolo možné nájsť špeciálnu skupinu robotov.',
));

?>
