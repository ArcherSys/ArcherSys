<?php
/**
*
* help_bbcode [Slovak]
*
* @package language
* @version $Id: help_bbcode.php,v 1.26 2007/07/19 20:37:52 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/

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

$help = array(
	array(
		0 => '--',
		1 => 'Úvod'
	),
	array(
		0 => 'Čo sú značky BBCode?',
		1 => 'Značky BBCode je špeciálna implementácia HTML kódu. Používanie týchto značiek vo vašich príspevkoch povoľuje administrátor. Navyše môžete pri odosielaní príspevku dodatočne zakázať používanie značiek v jednotlivých príspevkoch. Značky BBCode sú veľmi podobné štýlu HTML, príkazy sú zapísané v zložených zátvorkách [ a ] namiesto &lt; a &gt; a určujú ako a či bude určený text zobrazený. V závislosti na používanej šablóne fóra môže byť používanie zjednodušené pridaním rozhrania umiestneného nad text rozpísanej správy, v ktorom je možné jednotlivé značky zadávať pomocou myši. Aj napriek tomu by ste si mali tohto sprievodcu prečítať.'
	),
	array(
		0 => '--',
		1 => 'Formátovanie textu'
	),
	array(
		0 => 'Ako vytvoriť text formátovaný tučne, kurzívou či podčiarknutý?',
		1 => 'Značky BBCode obsahujú príkazy umožňujúce rýchlu zmenu štýlu vášho textu. Toto môžete dosiahnuť nasledujúcimi postupmi. <ul><li>Ak chcete písaný text označiť tučným písmom, uzavrite ho medzi <strong>[b][/b]</strong>, príklad: <strong>[b]</strong>Ahoj<strong>[/b]</strong>.<br />Výsledkom je <strong>Ahoj</strong>.</li><li>Ak chcete text podčiarknuť, uzavrite ho medzi <strong>[u][/u]</strong>, príklad: <strong>[u]</strong>Dobrý deň<strong>[/u]</strong>.<br />Výsledkom je <span style="text-decoration: underline">Dobrý deň</span></li><li>Ak chcete text písať kurzívou, uzavrite ho medzi <strong>[i][/i]</strong>, príklad: Toto je <strong>[i]</strong>ukážka<strong>[/i]</strong>.<br />Výsledkom je: Toto je <i>ukážka</i>.</li></ul>'
	),
	array(
		0 => 'Ako zmeniť farbu a veľkosť písma?',
		1 => 'Na zmenu farby alebo veľkosti textu je určených niekoľko príkazov. Majte na pamäti, že výstup bude zobrazený v závislosti na vašom prehliadači a systéme: <ul><li>Ak chcete zmeniť farbu textu, uzavrite požadovaný text medzi <strong>[color=][/color]</strong>. Môžete použiť buď názvy farieb (napr. red, blue, yellow atď.) alebo odpovedajúce hexadecimálne kódy farby, napr. #FFFFFF, #000000. Na príklade si ukážeme ako vytvoriť červený text:<br /><br /><strong>[color=red]</strong>Ahoj!<strong>[/color]</strong> alebo <strong>[color=#FF0000]</strong>Ahoj!<strong>[/color]</strong>.<br /> Výsledkom bude <span style="color:red">Ahoj!</span>.</li><li>Zmenu veľkosti textu vykonáme podobne použitím <strong>[size=][/size]</strong>. Táto značka je závislá na šablóne fóra, väčšinou má preddefinované číselné hodnoty, ktoré majú priradenú odpovedajúcu veľkosť písma v percentách, začínajúc od 20 (veľmi malé písmo, najmenej viditeľné) až po 200 (veľmi veľké). Ukážka:<br /><br /><strong>[size=30]</strong>MALÉ<strong>[/size]</strong>.<br />Výsledkom je <span style="font-size:30%">MALÉ</span>,<br /><br />zatiaľ čo<br /><br /><strong>[size=200]</strong>VEĽKÉ<strong>[/size]</strong><br /><br />zobrazí text <span style="font-size:200%">VEĽKÉ</span>.</li></ul>'
	),
	array(
		0 => 'Je možné spájať formátovacie značky?',
		1 => 'Áno, toto je možné, na nasledujúcom príklade si ukážeme ako správne tieto značky zapísať:<br /><br /><strong>[size=200][color=red][b]</strong>Pozri sa<strong>[/b][/color][/size]</strong>.<br /><br />Výsledkom je: <span style="color:red;font-size:200%"><strong>Pozri sa</strong></span>.<br /><br />Neodporúčame označovať takýmto spôsobom príliš veľa textu! Pokiaľ nedodržíte postupnosť ukončení značiek v poradí, v akom boli vkladané, bude text zobrazený chybne! Vždy je potrebné uzavierať značky v postupnosti, v akej boli zadané. Pozrite sa na nasledujúcu ukážku, kde sú značky nekorektne uzavreté:<br /><strong>[b][u]</strong>Toto je zle<strong>[/b][/u]</strong>.<br /><br />'
	),
	array(
		0 => '--',
		1 => 'Citácia a pevná šírka textu'
	),
	array(
		0 => 'Ako vytvoriť citáciu?',
		1 => 'Sú dva spôsoby zadania citovaného textu, s uvedením autora a bez neho. <ul><li>Ak použijete funkciu Citovať, všimnite si, že do vašej správy je vložený blok textu uzavretý do <strong>[quote=&quot;&quot;][/quote]</strong>. Tento spôsob pridá k citácií poznámku o autorovi citácie, prípadne iný údaj, ktorý zadáte. V nasledujúcom príklade si ukážeme ako zadáme text, ktorý vyslovil Karol Novák:<br /><br /><strong>[quote="Karol Novák"]</strong>Toto je text, ktorý vyslovil tento pán.<strong>[/quote]</strong><br /><br />Výsledkom bude automatické pridanie textu &quot;Karol Novák napísal:&quot; a text citácie. Pamätajte, že meno <strong>musíte</strong> zadať do úvodzoviek &quot;&quot;, nie sú len voliteľné.</li><li>Druhým spôsobom je citovať iba text. Požadovaný text, ktorý chcete citovať, uzavrite medzi <strong>[quote][/quote]</strong>. Keď si zobrazíte výsledok takejto správy, daný text bude zobrazený v oddelenom bloku.</li></ul>'
	),
	array(
		0 => 'Zapísanie zdrojového kódu alebo pevná šírka textu',
		1 => 'Ak chcete vložiť kus kódu alebo čokoľvek, čo vyžaduje pevnú šírku (písmo typu Courier), uzavrite text medzi <strong>[code][/code]</strong>.<br /><br />Napríklad: <strong>[code]</strong>echo &quot;Toto je kód&quot;;<strong>[/code]</strong>.<br /><br />Celé formátovanie použité v rámci <strong>[code][/code]</strong> je po zobrazení vynechané. Zvýraznenie syntaxe PHP je možné použitím <strong>[code=php][/code]</strong>. Toto sa odporúča na zvýšenie čitateľnosti zadaného kódu PHP.'
	),
	array(
		0 => '--',
		1 => 'Generovanie zoznamov'
	),
	array(
		0 => 'Vytváranie jednoduchého zoznamu',
		1 => 'Značky BBCode obsahujú aj príkazy na vytváranie zoznamov. Podporované sú dva druhy zoznamov, jednoduchý a štruktúrovaný rovnako ako ich HTML ekvivalenty. Jednoduchý zoznam zobrazí jednotlivé položky zoznamu postupne pod sebou oddelené odrážkou. Na vytvorenie zoznamu použite <strong>[list][/list]</strong> a definujte jednotlivé položky pomocou <strong>[*]</strong>. Pozrite sa na nasledujúcu ukážku jednoduchého zoznamu:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>červená<br /><strong>[*]</strong>modrá<br /><strong>[*]</strong>zelená<br /><strong>[/list]</strong><br /><br />Toto vytvorí zoznam:<ul><li>červená</li><li>modrá</li><li>zelená</li></ul>'
	),
	array(
		0 => 'Vytváranie štruktúrovaného zoznamu',
		1 => 'Druhým spôsobom je vytváranie štruktúrovaných zoznamov. Od predchádzajúceho typu sa líši znakom pred textom jednotlivých položiek, namiesto bodky je tu použitý niektorý z dvoch spôsobov vzostupného označenia položiek zoznamu. Na vytvorenie číslovaného zoznamu použite <strong>[list=1][/list]</strong>, pre abecedný zoznam zase <strong>[list=a][/list]</strong>. Jednotlivé položky zoznamu definujete pomocou <strong>[*]</strong>. Pozrite sa na nasledujúcu ukážku:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>červená<br /><strong>[*]</strong>modrá<br /><strong>[*]</strong>zelená<br /><strong>[/list]</strong><br /><br />Výsledkom bude<ol style="list-style-type: arabic-numbers"><li>červená</li><li>modrá</li><li>zelená</li></ol>Na vytvorenie abecedného zoznamu použite:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>prvá možná odpoveď<br /><strong>[*]</strong>druhá možná odpoveď<br /><strong>[*]</strong>tretia možná odpoveď<br /><strong>[/list]</strong><br /><br />Výsledkom bude<ol style="list-style-type: lower-alpha"><li>prvá možná odpoveď</li><li>druhá možná odpoveď</li><li>tretia možná odpoveď</li></ol>'
	),
	array(
		0 => '--',
		1 => 'Vytvorenie odkazu'
	),
	array(
		0 => 'Odkaz na iné webové stránky',
		1 => 'Značky BBCode podporujú množstvo spôsobov vytvorenia odkazov URL na iné internetové stránky:<ul><li>Prvým spôsobom je použiť značku <strong>[url=]</strong>text<strong>[/url]</strong>, za znak = potom doplníte URL adresu, na ktorú chcete odkazovať. Pozrite sa na nasledujúci príklad odkazujúci na server phpBB.com:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Navštívte phpBB!<strong>[/url]</strong><br /><br />Týmto sa vygeneruje odkaz <a href="http://www.phpbb.com/">Navštívte phpBB!</a>. Pamätajte, že pokiaľ kliknete na tento vytvorený odkaz, otvorí sa v rovnakom alebo novom prehliadača, záleží na jeho nastavení.</li><li>Ak chcete zobraziť URL priamo ako odkaz použite nasledujúci postup:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Týmto sa vygeneruje odkaz <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.</li><li>V prípade zadania syntakticky správnej URL adresy aj bez začiatočného http:// do textu príspevku sa táto automaticky zmení na odkaz. Skúste napríklad zadať do príspevku www.phpbb.com a uvidíte, že sa vám text vo výsledku zobrazí automaticky ako odkaz <a href="http://www.phpbb.com/">www.phpbb.com</a>.</li><li>Obdobným spôsobom sa dajú vytvárať aj odkazy na e-mailové adresy, zadajte požadovanú e-mailovú adresu podľa príkladu:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />Výsledok potom bude <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> alebo môžete zadať v texte príspevku no.one@domain.adr a adresa sa opäť automaticky premení na odkaz.</li></ul>Ako aj pri ostatných značkách BBCode, môžete URL odkaz zadať medzi ktorékoľvek ďalšie značky: Ak uzavriete URL medzi <strong>[img][/img]</strong> (viď nasledujúca otázka) môže byť odkazom aj obrázok. Nesmiete však zabudnúť na správnu postupnosť uzatvárania značiek.<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />je <span style="text-decoration: underline">nesprávne</span> a môže to viesť až k odstráneniu vášho príspevku. Takže pozor.'
	),
	array(
		0 => '--',
		1 => 'Zobrazenie obrázkov v príspevkoch'
	),
	array(
		0 => 'Vloženie obrázka do príspevku',
		1 => 'Značky BBCode ďalej umožňujú vkladanie obrázkov do textu príspevku či správy. Pri vkladaní obrázkov pamätajte na dve zásadné veci: väčšina používateľov nemá v láske príspevky s veľkým množstvom obrázkov a vkladaný obrázok už musí byť na internete (nestačí, aby existoval na vašom počítači, pokiaľ na ňom nemáte vlastný webový server). Na zobrazenie obrázka musíte uzavrieť jeho URL adresu medzi <strong>[img][/img]</strong>. Napríklad: <br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Ak zadáte URL adresu obrázku medzi <b>[url][/url]</b>, môže byť odkazom obrázok, napr.<br /><br /><strong>[url=http://www.google.sk/][img]</strong>http://www.domain.tld/images/logo.gif<strong>[/img][/url]</strong>.<br /><br />Výsledkom bude<br /><br /><a href="http://www.pcforum.sk/"><img src="http://www.pcforum.sk/templates/white/images/logo_left.gif"  alt="" /></a>'
	),
	array(
		0 => 'Vloženie prílohy do príspevku',
		1 => 'Prílohy je možné pridávať pomocou novej značky BBCode <strong>[attachment=][/attachment]</strong>, ak je funkcia pridávania príloh povolená administrátorom a máte príslušné práva na ich vytváranie. V okne písania príspevku sa nachádza rozhranie, pomocou ktorého môžete vkladať prílohy.'
	),
	array(
		0 => '--',
		1 => 'Ďalšie záležitosti'
	),
	array(
		0 => 'Môžem si pridať svoje vlastné značky?',
		1 => 'Ak ste administrátor fóra a máte dostatočné oprávnenia, môžete pridávať ďalšie značky BBCode v sekcii Vlastné značky BBCode.'
	)
);

?>
