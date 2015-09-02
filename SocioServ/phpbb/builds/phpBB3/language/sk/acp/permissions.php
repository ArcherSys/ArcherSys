<?php
/**
*
* acp_permissions [Slovak]
*
* @package language
* @version $Id: permissions.php,v 1.35 2007/07/14 15:43:45 acydburn Exp $
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Oprávnenia sú veľmi podrobné a dajú sa rozdeliť do štyroch hlavných skupín, ktoré sú:</p>

		<h2>Globálne oprávnenia</h2>
		<p>Tieto nastavujú práva na globálnej úrovni a platia na celom fóre. Sú ďalej rozdelené na Oprávnenia používateľov, skupín, administrátorov a Globálnych moderátorov.</p>

		<h2>Oprávnenia založené na fórach</h2>
		<p>Tieto nastavujú prístupové práva k jednotlivým fóram pre každé zvlášť. Sú ďalej rozdelené na Oprávnenia fór, Moderátori fóra, Používateľské oprávnenia k fóru a Skupinové oprávnenia k fóru.</p>

		<h2>Role oprávnení</h2>
		<p>Tieto sa používajú na vytvorenie rôznych preddefinovaných rolí, ktoré využívajú všetky druhy oprávnení a dajú sa využiť pri nastavovaní ostatných druhov oprávnení. Predvolené, už vytvorené role by mali pokryť potreby malých aj veľkých diskusných fór, a pokiaľ nie, napriek všetkým druhom oprávnení môžete pridávať/upravovať/odstraňovať role podľa vašich potrieb.</p>

		<h2>Masky oprávnení</h2>
		<p>Tieto sú využiteľné na zobrazenie konkrétnych koncových oprávnení pridelených požívateľom, moderátorom (lokálnym aj globálnym), administrátorom alebo jednotlivým fóram.</p>

		<br />

		<p>Ak chcete získať ďalšie informácie o nastavení a správe oprávnení na vašom fóre, pozrite do <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Kapitoly 1.5 Sprievodcu pre rýchly začiatok</a>.</p>
	',

	'ACL_NEVER'				=> 'Nikdy',
	'ACL_SET'				=> 'Nastavenia oprávnení',
	'ACL_SET_EXPLAIN'		=> 'Oprávnenia sú založené na jednoduchom systéme nastavovania voľby <samp>ÁNO</samp>/<samp>NiE</samp>. Pokiaľ je pri vlastnosti pre používateľa alebo skupinu nastavené <samp>NIKDY</samp>, budú ignorované akékoľvek iné nastavenia oprávnení. Pokiaľ si neprajete priradiť hodnotu k vlastnosti pre používateľa alebo skupinu, nastavte položku na <samp>NIE</samp>. Pokiaľ je niekde nastavené inak, tie nastavenia budú prednostne použité, inak bude nastavenie zhodné s hodnotou <samp>NIKDY</samp>. Všetky objekty, ktoré sú začiarknuté, obdržia nastavované oprávnenia.',
	'ACL_SETTING'			=> 'Nastavenia',

	'ACL_TYPE_A_'			=> 'Administrátorské oprávnenia',
	'ACL_TYPE_F_'			=> 'Oprávnenia fór',
	'ACL_TYPE_M_'			=> 'Moderátorské oprávnenia',
	'ACL_TYPE_U_'			=> 'Používateľské oprávnenia',

	'ACL_TYPE_GLOBAL_A_'	=> 'Administrátorské oprávnenia',
	'ACL_TYPE_GLOBAL_U_'	=> 'Používateľské oprávnenia',
	'ACL_TYPE_GLOBAL_M_'	=> 'Oprávnenia Globálnych moderátorov',
	'ACL_TYPE_LOCAL_M_'		=> 'Oprávnenia moderátorov fór',
	'ACL_TYPE_LOCAL_F_'		=> 'Oprávnenia fór',

	'ACL_NO'				=> 'Nie',
	'ACL_VIEW'				=> 'Zobrazenie oprávnení',
	'ACL_VIEW_EXPLAIN'		=> 'Tu si môžete pozrieť efektívne oprávnenia používateľa alebo skupiny. Červený štvorec znamená, že používateľ/skupina nemá dané oprávnenie; zelený, že toto oprávnenie má.',
	'ACL_YES'				=> 'Áno',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Tu môžete prideliť administrátorské práva používateľom alebo skupinám. Všetci používatelia s administrátorskými právomocami môžu prejsť do Administrátorského panela.',
 	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Tu môžete prideliť používateľom alebo skupinám práva moderátora fóra. Na nastavenie prístupu používateľov k diskusiám, nastavenie globálnych moderátorov alebo administrátorov použite odpovedajúcu sekciu oprávnení.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Tu môžete upraviť, ktoré skupiny alebo používatelia majú prístup k určitým fóram. Na nastavenie moderátorov alebo administrátorov použite odpovedajúcu sekciu oprávnení.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Tu môžete priradiť moderátorskú právomoc pre celé fórum používateľom alebo skupinám. Títo moderátori sú rovnakí ako bežní s tým rozdielom, že majú práva ku všetkým sekciám na fóre.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tu môžete upraviť práva skupín pre jednotlivé fóra.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Tu môžete priradiť globálne práva skupinám - používateľské oprávnenia alebo moderátorské aj administrátorské oprávnenia. Používateľské oprávnenia zahŕňajú možnosti ako použitie obrázku postavičky, odosielanie súkromných správ atď.; globálne moderátorské práva zahŕňajú možnosti ako schvaľovanie príspevkov, správa tém, správa zákazu vstupu (ban) apod., a nakoniec administrátorské práva ako úpravy oprávnení, definovanie vlastných značiek BBCode, správa fór atď. Individuálne používateľské oprávnenia by mali byť menené len výnimočne, preferovaná metóda je zaradenie používateľov do skupín a nastavenie koncových práv konkrétnym skupinám.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Tu môžete upraviť roly pre administratívne oprávnenia. Role sú účinné oprávnenia, pokiaľ zmeníte danú rolu, všetkým používateľom alebo skupinám k nej priradeným sa odpovedajúcim spôsobom zmenia oprávnenia.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Tu môžete upraviť roly pre oprávnenia pre fóra. Role sú účinné oprávnenia, pokiaľ zmeníte danú rolu, všetkým používateľom alebo skupinám k nej priradeným sa odpovedajúcim spôsobom zmenia oprávnenia.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Tu môžete upraviť roly pre moderátorské oprávnenia. Role sú účinné oprávnenia, pokiaľ zmeníte danú rolu, všetkým používateľom alebo skupinám k nej priradeným sa odpovedajúcim spôsobom zmenia oprávnenia.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Tu môžete upraviť roly pre používateľské oprávnenia. Role sú účinné oprávnenia, pokiaľ zmeníte danú rolu, všetkým používateľom alebo skupinám k nej priradeným sa odpovedajúcim spôsobom zmenia oprávnenia.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tu môžete upraviť práva používateľov pre jednotlivé fóra.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Tu môžete priradiť globálne práva jednotlivým používateľom - používateľské oprávnenia alebo moderátorské aj administrátorské oprávnenia. Používateľské oprávnenia zahŕňajú možnosti ako použitie obrázku postavičky, odoslanie súkromných správ atď.; globálne moderátorské práva možnosti ako schvaľovanie príspevkov, správa tém, správa zákazu vstupu (ban) apod., a nakoniec administrátorské práva ako úpravy oprávnení, definovanie vlastných značiek BBCode, správa fór atď. Na úpravu týchto oprávnení pre väčší počet používateľov je odporúčané využiť Používateľské skupiny, individuálne používateľské oprávnenia by mali byť menené len výnimočne, preferovaná metóda je zaradenie používateľov do skupín a nastavením koncových práv konkrétnym skupinám.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Tu si môžete pozrieť koncové administratívne oprávnenia priradené vybraným používateľom alebo skupinám.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Tu si môžete pozrieť koncové globálne moderátorské oprávnenia priradené vybraným používateľom alebo skupinám.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tu si môžete pozrieť koncové práva ku konkrétnym fóram priradené vybraným používateľom, skupinám alebo samotným fóram.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Tu si môžete pozrieť koncové moderátorské oprávnenia ku konkrétnym fóram priradené vybraným používateľom, skupinám alebo samotným fóram.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Tu si môžete pozrieť koncové používateľské oprávnenia priradené vybraným používateľom, či skupinám.',

	'ADD_GROUPS'				=> 'Pridať skupiny',
	'ADD_PERMISSIONS'			=> 'Pridať oprávnenia',
	'ADD_USERS'					=> 'Pridať používateľov',
	'ADVANCED_PERMISSIONS'		=> 'Pokročilé oprávnenia',
	'ALL_GROUPS'				=> 'Vybrať všetky skupiny',
	'ALL_NEVER'					=> 'Všetko <samp>NIKDY</samp>',
	'ALL_NO'					=> 'Všetko <samp>NIE</samp>',
	'ALL_USERS'					=> 'Vybrať všetkých používateľov',
	'ALL_YES'					=> 'Všetko <samp>ÁNO</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Použiť všetky oprávnenia',
	'APPLY_PERMISSIONS'			=> 'Použiť oprávnenia',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Oprávnenia a role definované pre túto položku budú použité na tejto položke a všetkých ďalších, ktoré sú začiarknuté.',
  'AUTH_UPDATED'				=> 'Oprávnenia boli aktualizované.',

	'CREATE_ROLE'				=> 'Vytvoriť rolu',
	'CREATE_ROLE_FROM'			=> 'Použiť nastavenia z…',
	'CUSTOM'					=> 'Vlastné…',

	'DEFAULT'					=> 'Predvolené',
	'DELETE_ROLE'				=> 'Odstrániť rolu',
	'DELETE_ROLE_CONFIRM'		=> 'Naozaj chcete odstrániť túto rolu? Položky, ktoré majú túto rolu pridelenú <strong>nestratia</strong> svoje oprávnenia.',
	'DISPLAY_ROLE_ITEMS'		=> 'Zobraziť položky využívajúce túto rolu',

	'EDIT_PERMISSIONS'			=> 'Upraviť oprávnenia',
	'EDIT_ROLE'					=> 'Upraviť rolu',

	'GROUPS_NOT_ASSIGNED'		=> 'Tejto roli nebola pridelená žiadna skupina',

	'LOOK_UP_GROUP'				=> 'Vyhľadanie skupiny',
	'LOOK_UP_USER'				=> 'Vyhľadanie používateľov',

	'MANAGE_GROUPS'		=> 'Spravovať skupiny',
	'MANAGE_USERS'		=> 'Spravovať používateľov',

	'NO_AUTH_SETTING_FOUND'		=> 'Oprávnenia neboli definované.',
	'NO_ROLE_ASSIGNED'			=> 'Žiadna rola nepridelená…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Nastavenie tejto role nezmení oprávnenia zobrazené napravo. Pokiaľ chcete zrušiť nastavenie/odstrániť všetky oprávnenia, použite odkaz “Všetko <samp>NIE</samp>”.',
	'NO_ROLE_AVAILABLE'			=> 'Nie je dostupná žiadna rola.',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Musíte dať názov role.',
	'NO_ROLE_SELECTED'			=> 'Rola nebola nájdená.',
	'NO_USER_GROUP_SELECTED'	=> 'Nevybrali ste žiadneho používateľa alebo skupinu.',

	'ONLY_FORUM_DEFINED'	=> 'Vo vašom výbere ste definovali len fórum, vyberte ešte aspoň jedného používateľa alebo skupinu.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Oprávnenia a role budú použité na všetky začiarknuté objekty',
	'PLUS_SUBFORUMS'				=> '+subfóra',

	'REMOVE_PERMISSIONS'			=> 'Odstrániť oprávnenia',
	'REMOVE_ROLE'					=> 'Odstrániť rolu',
	'RESULTING_PERMISSION'			=> 'Výsledné povolenia',
	'ROLE'							=> 'Rola',
	'ROLE_ADD_SUCCESS'				=> 'Rola bola úspešne pridaná.',
	'ROLE_ASSIGNED_TO'				=> 'Používatelia/skupiny boli priradení k %s',
	'ROLE_DELETED'					=> 'Rola bola úspešne odstránená.',
	'ROLE_DESCRIPTION'				=> 'Popis role',

	'ROLE_ADMIN_FORUM'			=> 'Administrátor fóra',
	'ROLE_ADMIN_FULL'			=> 'Hlavný administrátor',
	'ROLE_ADMIN_STANDARD'		=> 'Štandardný administrátor',
	'ROLE_ADMIN_USERGROUP'		=> 'Administrátor používateľov a skupín',
	'ROLE_FORUM_BOT'			=> 'Prístup robotov',
	'ROLE_FORUM_FULL'			=> 'Plný prístup',
	'ROLE_FORUM_LIMITED'		=> 'Obmedzený prístup',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Obmedzený prístup + hlasovanie',
	'ROLE_FORUM_NOACCESS'		=> 'Žiadny prístup',
	'ROLE_FORUM_ONQUEUE'		=> 'Nutné schválenie',
	'ROLE_FORUM_POLLS'			=> 'Bežný prístup + hlasovanie',
	'ROLE_FORUM_READONLY'		=> 'Len na čítanie',
	'ROLE_FORUM_STANDARD'		=> 'Bežný prístup',
	'ROLE_MOD_FULL'				=> 'Hlavný moderátor',
	'ROLE_MOD_QUEUE'			=> 'Schvaľovací moderátor',
	'ROLE_MOD_SIMPLE'			=> 'Obmedzený moderátor',
	'ROLE_MOD_STANDARD'			=> 'Normálny moderátor',
	'ROLE_USER_FULL'			=> 'Všetky funkcie',
	'ROLE_USER_LIMITED'			=> 'Obmedzené funkcie',
	'ROLE_USER_NOAVATAR'		=> 'Bez obrázka postavičky',
	'ROLE_USER_NOPM'			=> 'Bez súkromných správ',
	'ROLE_USER_STANDARD'		=> 'Bežné funkcie',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Má prístup k ovládaniu fór a nastavení oprávnení pre fóra.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Má prístup ku všetkým administrátorským panelom na tomto fóre.<br />Neodporúčané.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Má prístup ku väčšine možností administrátora, ale nemôže meniť nastavenia servera a nástrojov systému.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Môže spravovať skupiny a používateľov; Môže meniť oprávnenia, nastavenia, zákazy vstupu (ban) a hodnotenia.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Táto rola je odporúčaná pre robotov a vyhľadávače.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Môže využívať všetky možnosti fóra, vrátane odosielania Dôležitých tém a Oznámení. Taktiež môže ignorovať ochranný interval.<br />Nie je odporúčané pre bežných používateľov.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Môže využiť niektoré možnosti fóra, ale nemôže pripájať prílohy alebo používať ikony tém.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Rovnaké ako obmedzený prístup, ale môže zakladať hlasovanie.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Nevidí ani nemá prístup k fóru.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Môže využiť väčšinu funkcií fóra vrátane príloh, ale príspevky a témy musia byť schválené moderátorom.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Rovnaké ako Bežný prístup, ale môže zakladať hlasovania.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Môže si čítať témy na fóre, ale nemôže vytvárať nové témy alebo odosielať odpovede.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Môže využívať väčšinu funkcií fóra vrátane príloh, ale nemôže zamykať alebo odstraňovať svoje vlastné príspevky a nemôže vytvárať nové hlasovania.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Môže využívať všetky možnosti moderátora, vrátane udeľovania zákazu vstupu (ban).',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Môže upravovať a schvaľovať príspevky čakajúce na schválenie, ale nič iného.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Môže využívať len základné operácie s témami. Nemôže udeľovať varovania alebo upravovať resp. schvaľovať príspevky čakajúce na schválenie.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Môže využiť väčšinu nástrojov moderátora, ale nemôže udeliť zákaz vstupu (ban) alebo zmeniť autora príspevku.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Môže využiť všetky možností, ktoré používateľ môže mať vrátane zmeny používateľského mena a ignorácie ochranných intervalov.<br />Neodporúčané.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Má prístup ku niektorým možnostiam používateľa. Prílohy, e-maily alebo rýchle správy nie sú povolené.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Má obmedzenú skupinu možností a nemá povolené používať obrázok postavičky.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Má obmedzenú skupinu možností a nemá povolené používať súkromné správy.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Má prístup k väčšine možností používateľa. Nemôže si ale napríklad zmeniť používateľské meno alebo ignorovať ochranné intervaly.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Máte možnosť zadať krátky popis toho, na čo je rola určená alebo koho označuje. Text, ktorý tu zadáte, bude tiež zobrazený v prehľade rolí v administrácií.',
	'ROLE_DESCRIPTION_LONG'			=> 'Popis role je príliš dlhý, skráťte ho pod 4000 znakov.',
	'ROLE_DETAILS'					=> 'Detaily role',
	'ROLE_EDIT_SUCCESS'				=> 'Rola bola úspešne upravená.',
	'ROLE_NAME'						=> 'Názov role',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Rola s názvom <strong>%s</strong> už pre daný druh oprávnenia existuje.',
	'ROLE_NOT_ASSIGNED'				=> 'Rola ešte nebola priradená.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Vybrané fóra neexistujú.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Vybrané skupiny neexistujú.',
	'SELECTED_USER_NOT_EXIST'		=> 'Vybraní používatelia neexistujú.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Pokiaľ tu zvolíte fórum, budú zahrnuté aj všetky subfóra.',
	'SELECT_ROLE'					=> 'Vybrať rolu…',
	'SELECT_TYPE'					=> 'Vybrať druh',
	'SET_PERMISSIONS'				=> 'Nastaviť oprávnenia',
	'SET_ROLE_PERMISSIONS'			=> 'Nastaviť oprávnenie role',
	'SET_USERS_PERMISSIONS'			=> 'Nastavenie oprávnení používateľa',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Nastavenie oprávnení používateľa pre fóra',

	'TRACE_DEFAULT'					=> 'Pokiaľ nie je nastavené inak, oprávnenie má vždy hodnotu <samp>NIE</samp> (bez oprávnení), a tak môžu byť oprávnenia prepísané inými nastaveniami.',
	'TRACE_FOR'						=> 'Sledovať pre',
	'TRACE_GLOBAL_SETTING'			=> '%s (globálne)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Oprávnenia skupiny sú nastavené na <samp>NIKDY</samp> ako výsledné oprávnenia, teda je táto hodnota ponechaná.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Oprávnenia skupiny pre toto fórum sú nastavené na <samp>NIKDY</samp> ako konečný výsledok, takže pôvodná hodnota je ponechaná.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Oprávnenia skupiny sú nastavené na <samp>NIKDY</samp>, čo sa stáva novou výslednou hodnotou, pretože zatiaľ bola posledná nastavené len na <samp>NIE</samp>.',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Oprávnenia skupiny pre toto fórum sú nastavené na <samp>NIKDY</samp>, čo sa stáva novou konečnou hodnotou, pretože zatiaľ posledná bola nastavená len na <samp>NIE</samp>.',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Oprávnenia skupiny sú nastavené na <samp>NIKDY</samp>, čo zmení nastavenia oprávnení <samp>ÁNO</samp> na <samp>NIKDY</samp> pre tohto používateľa.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Oprávnenia skupiny pre toto fórum sú nastavené na <samp>NIKDY</samp>, čo zmení nastavenia oprávnení <samp>ÁNO</samp> na <samp>NIKDY</samp> pre tohto používateľa.',
	'TRACE_GROUP_NO'				=> 'Oprávnenie je nastavené na <samp>NIE</samp> pre túto skupinu, preto je ponechaná pôvodná hodnota.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Oprávnenie je nastavené na <samp>NIE</samp> pre túto skupinu a toto fórum, preto je ponechaná pôvodná hodnota.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Oprávnenia skupiny sú nastavené na <samp>ÁNO</samp>, ale nastavenie oprávnení <samp>NIKDY</samp> nie je možné ignorovať.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Oprávnenia skupiny pre toto fórum sú nastavené na <samp>ÁNO</samp>, ale nastavenie oprávnení <samp>NIKDY</samp> nie je možné ignorovať.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Oprávnenia skupiny sú nastavené na <samp>ÁNO</samp>, čo sa stáva novou výslednou hodnotou, pretože zatiaľ posledná bola nastavená len na <samp>NIE</samp>.',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Oprávnenia skupiny pre toto fórum sú nastavené na <samp>ÁNO</samp>, čo sa stáva novou výslednou hodnotou, pretože zatiaľ posledná bola nastavená len na <samp>NIE</samp>.',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Oprávnenia skupiny sú nastavené na <samp>ÁNO</samp>, a výsledné oprávnenia sú taktiež nastavené na <samp>ÁNO</samp>, takže pôvodná hodnota je ponechaná.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Oprávnenia skupiny pre toto fórum sú nastavené na <samp>ÁNO</samp> a výsledné oprávnenia sú taktiež nastavené na <samp>ÁNO</samp>, takže pôvodná hodnota je ponechaná.',
	'TRACE_PERMISSION'				=> 'Sledovať oprávnenia - %s',
	'TRACE_RESULT'					=> 'Výsledok sledovania',
	'TRACE_SETTING'					=> 'Nastavenie sledovania',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Oprávnenia nezávislé na fóre majú hodnotu <samp>ÁNO</samp> a výsledná hodnota už má tiež hodnotu <samp>ÁNO</samp>, a tak sa teda nič nemení. %sSledovať globálne oprávnenia%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Oprávnenia nezávislé na fóre majú hodnotu <samp>ÁNO</samp>, čo prepisujú miestnu hodnotu <samp>NIKDY</samp>. %sSledovať globálne oprávnenia%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Oprávnenia nezávislé na fóre majú hodnotu <samp>NIKDY</samp>, čo neovplyvňuje miestne oprávnenie. %sSledovať globálne oprávnenia%s',

	'TRACE_USER_FOUNDER'					=> 'Používateľ má nastavenú úroveň zakladateľ, teda administratívne oprávnenia sú nastavené na <samp>ÁNO</samp>.',
	'TRACE_USER_KEPT'						=> 'Oprávnenia používateľa sú nastavené na <samp>NIE</samp>, pôvodná hodnota je teda ponechaná.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Oprávnenia používateľa pre toto fórum sú nastavené na <samp>NIE</samp>, pôvodná hodnota je teda ponechaná.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Oprávnenia používateľa sú nastavené na <samp>NIKDY</samp> a výsledná hodnota je nastavená na <samp>NIKDY</samp>, nič sa teda nemení.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'The userâ€™s permission for this forum is set to <samp>NIKDY</samp> a výsledná hodnota je nastavená na <samp>NIKDY</samp>, nič sa teda nemení.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Oprávnenia používateľa sú nastavené na <samp>NIKDY</samp>, čo sa stáva výslednou hodnotou, pretože bolo doteraz nastavené len na <samp>NIE</samp>.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Oprávnenia používateľa pre toto fórum sú nastavené na <samp>NIKDY</samp>, čo sa stáva výslednou hodnotou, pretože bolo doteraz nastavené len na <samp>NIE</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Oprávnenia používateľa sú nastavené na <samp>NIKDY</samp>, ktoré má väčšiu platnosť a nahradzuje hodnotu <samp>ÁNO</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Oprávnenia používateľa pre toto fórum sú nastavené na <samp>NIKDY</samp>, ktoré má väčšiu platnosť a nahradzuje hodnotu <samp>ÁNO</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Oprávnenia používateľa sú nastavené na <samp>NIE</samp> a výsledná hodnota už obsahuje <samp>NIE</samp>, hodnota sa teda mení na <samp>NIKDY</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Oprávnenia používateľa pre toto fórum sú nastavené na <samp>NIE</samp> a výsledná hodnota už obsahuje <samp>NIE</samp>, hodnota sa teda mení na <samp>NIKDY</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Oprávnenia používateľa sú nastavené na <samp>ÁNO</samp>, ale výsledné oprávnenia sú nastavené na <samp>NIKDY</samp>, ktoré nie je možné prepísať.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Oprávnenia používateľa pre toto fórum sú nastavené na <samp>ÁNO</samp>, ale výsledné oprávnenia sú nastavené na <samp>NIKDY</samp>, ktoré nie je možné prepísať.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Oprávnenia používateľa sú nastavené na <samp>ÁNO</samp>, čo sa stáva novou výslednou hodnotou, pretože zatiaľ posledná bola nastavená len na <samp>NIE</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Oprávnenia používateľa pre toto fórum sú nastavené na <samp>ÁNO</samp>, čo sa stáva novou výslednou hodnotou, pretože zatiaľ posledná bola nastavená len na <samp>NIE</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Oprávnenia používateľa sú nastavené na <samp>ÁNO</samp> a výsledná hodnota je nastavená na<samp>ÁNO</samp>, nič sa teda nemení.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Oprávnenia používateľa pre toto fórum sú nastavené na <samp>ÁNO</samp> a výsledná hodnota je nastavená na<samp>ÁNO</samp>, nič sa teda nemení.',
	'TRACE_WHO'								=> 'Kto',
	'TRACE_TOTAL'							=> 'Výsledné',

	'USERS_NOT_ASSIGNED'			=> 'Žiadny používateľ nebol priradený k tejto roli',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'je členom nasledujúcich hlavných skupín',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'je členom nasledujúcich ďalších skupín',

	'VIEW_ASSIGNED_ITEMS'	=> 'Zobraziť pridelené položky',
	'VIEW_LOCAL_PERMS'		=> 'Lokálne oprávnenia',
	'VIEW_GLOBAL_PERMS'		=> 'Globálne oprávnenia',
	'VIEW_PERMISSIONS'		=> 'Zobraziť oprávnenia',

	'WRONG_PERMISSION_TYPE'	=> 'Bol zvolený nesprávny druh oprávnení.',
));

?>
