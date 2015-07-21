<?php
/**
*
* help_bbcode [Dutch]
*
* @package language
* @version $Id: help_bbcode.php,v 1.0.0 2007/01/26 16:09:16 acydburn Exp $
* @copyright (c) 2005 phpBB Group modified by phpBB.nl (vertaalteam@phpbb.nl) in 2007
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
   exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Inleiding'
	),
	array(
		0 => 'Wat is BBCode?',
		1 => 'BBCode is een speciale vorm van HTML. Of je BBCode al dan niet kan gebruiken op het forum wordt bepaald door de beheerder. Daarnaast kan je ook BBCode uitschakelen via het formulier om een bericht te plaatsen. BBCode is gelijkaardig aan HTML, tags zijn ingesloten in vierkante haken [ en ] in plaats van &lt; en &gt;. Het biedt ook een betere controle over hoe iets wordt weergegeven. Afhankelijk van de template die je gebruikt, kan je het toevoegen van BBCode in je berichten vergemakkelijken door de gebruiksvriendelijke knoppen boven het tekstveld. Ook met deze knoppen, zal je de volgende uitleg handig vinden.'
	),
	array(
		0 => '--',
		1 => 'Tekst opmaken'
	),
	array(
		0 => 'Het maken van vetgedrukte, schuingedrukte en onderlijnde tekst',
		1 => 'Met de BBCode is het mogelijk om vlug de standaardstijl van tekst te veranderen. Dit wordt op de volgende manieren bereikt: <ul><li>Om een stuk tekst vetgedrukt te hebben, moet je het insluiten in <strong>[b][/b]</strong>, bijv: <br /><br /><strong>[b]</strong>Hallo<strong>[/b]</strong><br /><br />zal <strong>Hallo</strong> worden;</li><li>Voor onderstrepen gebruik je <strong>[u][/u]</strong>, bijv:<br /><br /><strong>[u]</strong>Goedemorgen<strong>[/u]</strong><br /><br />zal <span style="text-decoration: underline">Goedemorgen</span> worden;</li><li>Voor schuingedrukte tekst gebruik je <strong>[i][/i]</strong>, vb:<br /><br />Dit is <strong>[i]</strong>Super!<strong>[/i]</strong><br /><br />zal Dit is <i>Super!</i> weergeven.</li></ul>'
	),
	array(
		0 => 'Tekstkleur en -grootte veranderen',
		1 => 'Om de grootte en de kleur van je tekst te veranderen kan je de volgende tags gebruiken. Onthoud dat dit echter afhankelijk is van de browser en systeem van de bezoeker: <ul><li>De kleur veranderen wordt bereikt door het te plaatsen in <strong>[color=][/color]</strong>. Je kan ofwel een herkende Engelse kleurnaam gebruiken (bijv: red, blue, yellow, enz.), of een hexadecimale kleurcode (vb: #FFFFFF, #000000). Om bijvoorbeeld rode tekst te verkrijgen kan je het volgende doen:<br /><br /><strong>[color=red]</strong>Hallo!<strong>[/color]</strong><br /><br />of<br /><br /><strong>[color=#FF0000]</strong>Hallo!<strong>[/color]</strong><br /><br />zal beide <span style="color:red">Hallo!</span> weergeven</li><li>Het veranderen van de grootte van de tekst is gelijkaardig aan het wijzigen van de kleur. <strong>[size=][/size]</strong>. Deze tag is afhankelijk van de door de gebruiker gebruikte template, het aangeraden formaat is een numerieke waarde die de tekstgrootte in pixels weergeeft, vanaf 1 (zo klein dat je het niet kan zien) tot en met 29 (zeer groot). Bijvoorbeeld:<br /><br /><strong>[size=9]</strong>KLEIN<strong>[/size]</strong><br /><br />zou <span style="font-size:9px;">KLEIN</span> moeten weergeven.<br /><br />terwijl:<br /><br /><strong>[size=24]</strong>ENORM!<strong>[/size]</strong><br /><br />zal <span style="font-size:24px;">ENORM!</span> weergeven</li></ul>'
	),
	array(
		0 => 'Kan ik opmaaktags combineren?',
		1 => 'Ja, natuurlijk kan dat. Om bijvoorbeeld iemands aandacht te krijgen, zou je het volgende kunnen typen:<br /><br /><strong>[size=18][color=red][b]</strong>BEKIJK DIT!<strong>[/b][/color][/size]</strong><br /><br />Dit wordt dan: <span style="color:red;font-size:18px;"><strong>BEKIJK DIT!</strong></span><br /><br />We raden het af om veel tekst op deze manier weer te geven. Onthoud dat de tags correct gesloten moeten worden, dit is bijvoorbeeld fout:<br /><br /><strong>[b][u]</strong>Dit is fout<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Citeren en code'
	),
	array(
		0 => 'Tekst in een antwoord citeren',
		1 => 'Er zijn twee manieren om tekst te citeren, met of zonder referentie.<ul><li>Wanneer je de citeerfunctie gebruikt om een post op het forum te beantwoorden zal je merken dat de tekst tussen de <strong>[quote=&quot;&quot;]</strong> en de <strong>[/quote]</strong> tag toegevoegd is. Deze methode laat je toe om te quoten met een referentie naar een persoon of naar iets wat je zelf kiest. Om bijvoorbeeld een stuk tekst van Dhr. de Vries te citeren kan je: <br /><br /><strong>[quote=&quot;Dhr. de Vries&quot;]</strong>De tekst die Dhr. de Vries schreef komt hier<strong>[/quote]</strong><br /><br /> invullen. Het resultaat zal automatisch \'Dhr. de Vries schreef:\' voor het citaat toevoegen. Onthoud dat je de dubbele aanhalingstekens <strong>moet</strong> plaatsen, ze zijn niet optioneel.</li><li>De tweede methode laat je toe om zonder referentie te citeren. Hiervoor moet je de tekst tussen <strong>[quote]</strong> en de <strong>[/quote]</strong> tags plaatsen. Wanneer je het bericht bekijkt zal gewoon de tekst te zien zijn in het citaatblok.</li></ul>'
	),
	array(
		0 => 'Code',
		1 => 'Als je een stuk code of tekst die een vaste breedte nodig heeft (vb: door Courier Lettertype) wilt plaatsen, zal je de tekst tussen <strong>[code]</strong> en <strong>[/code]</strong> tags moeten plaatsen, vb:<br /><br /><strong>[code]</strong>echo "Dit is een stukje code";<strong>[/code]</strong><br /><br />Alles (spaties, tabs..) wat tussen de <strong>[code]</strong> en <strong>[/code]</strong> tags geplaatst is, wordt bewaard voor wanneer je de tekst later bekijkt. PHP code highlight kan geactiveerd worden door gebruik te maken van <strong>[code=php][/code]</strong> en wordt geadviseerd bij het plaatsen van PHP-codevoorbeelden omdat het de leesbaarheid verbetert.'
	),
	array(
		0 => '--',
		1 => 'Lijsten maken'
	),
	array(
		0 => 'Een niet-geordende lijst maken',
		1 => 'In BBCode kan je twee soorten lijsten gebruiken, geordende en niet-geordende. Ze zijn hetzelfde als in HTML, een niet-geordende lijst geeft elk item uit de lijst onder elkaar weer, met voor elk item een \'&bull;\'. Om een niet-geordende lijst te maken moet je <strong>[list][/list]</strong> gebruiken en voor ieder item een <strong>[*]</strong> plaatsen. Om bijvoorbeeld je favoriete kleuren in een lijst weer te geven, kun je het volgende doen:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Rood<br /><strong>[*]</strong>Blauw<br /><strong>[*]</strong>Geel<br /><strong>[/list]</strong><br /><br />Wat natuurlijk dit geeft:<ul><li>Rood</li><li>Blauw</li><li>Geel</li></ul>'
	),
	array(
		0 => 'Een geordende lijst maken',
		1 => 'De tweede soort lijst is een geordende lijst, deze geeft controle over wat voor elk item wordt weergegeven. Om een genummerde lijst te maken, moet je <strong>[list=		1][/list]</strong> gebruiken. En voor een alfabetische lijst doe je het volgende: <strong>[list=a][/list]</strong>. Net als bij de niet-geordende lijst moet je <strong>[*]</strong> voor elk item plaatsen. Bijvoorbeeld:<br /><br /><strong>[list=		1]</strong><br /><strong>[*]</strong>Ga naar de winkel<br /><strong>[*]</strong>Koop een nieuwe computer<br /><strong>[*]</strong>Vloek tegen de computer als die crashed<br /><strong>[/list]</strong><br /><br />zal geven:<ol style="list-style-type: arabic-numbers"><li>Ga naar de winkel</li><li>Koop een nieuwe computer</li><li>Vloek tegen de computer als die crashed</li></ol>Bij een alfabetische lijst kun je het volgende doen:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Het eerste mogelijke antwoord<br /><strong>[*]</strong>Het tweede mogelijke antwoord<br /><strong>[*]</strong>Het derde mogelijke antwoord<br /><strong>[/list]</strong><br /><br />zal geven:<ol style="list-style-type: lower-alpha"><li>Het eerste mogelijke antwoord</li><li>Het tweede mogelijke antwoord</li><li>Het derde mogelijke antwoord</li></ol>'
	),
	array(
		0 => '--',
		1 => 'Links maken'
	),
	array(
		0 => 'Naar een andere website linken',
		1 => 'BBCode heeft verschillende manieren om URI\'s, Uniform Resource Indicators, beter bekend als URL\'s te maken.<ul><li>De eerste manier is door de <strong>[url=][/url]</strong> tag te gebruiken, na de = moet je de URL plaatsen. Als je bijvoorbeeld naar phpBB.nl linkt kan je dit doen:<br /><br /><strong>[url=http://www.phpbb.nl/]</strong>Bezoek phpBB!<strong>[/url]</strong><br /><br />wat zal resulteren in: <a href="http://www.phpbb.nl/">Bezoek phpBB!</a></li><li>Wij willen er op wijzen dat het aan de instellingen van je browser ligt of deze link in een nieuw of hetzelfde venster opent. Als je gewoon de URL als link wil, kun je dit gebruiken:<br /><br /><strong>[url]</strong>http://www.phpbb.nl/<strong>[/url]</strong><br /><br />Wat de volgende link produceert: <a href="http://www.phpbb.nl/">http://www.phpbb.nl/</a></li><li>phpBB heeft ook zoiets als <i>magic links</i>, dit zorgt er voor dat iedere correcte URL in een link verandert, zonder dat je tags moet gebruiken, of de URL met http:// laat beginnen.   Als je bijvoorbeeld www.phpbb.nl intypt zal dit, als je het bericht bekijkt, automatisch naar <a href="http://www.phpbb.nl/">www.phpbb.nl</a> verandert worden.</li><li>Hetzelfde gebeurt met e-mailadressen. Je kan een adres expliciet opgeven, bijvoorbeeld:<br /><br /><strong>[email]</strong>niemand@domein.adr<strong>[/email]</strong><br /><br />wat zal resulteren in: <a href="mailto:niemand@domein.adr">niemand@domein.adr</a>, maar je kan ook gewoon niemand@domein.adr in je bericht typen en dat zal dan automatisch vervangen worden als je het bekijkt.</li></ul>Net als met alle BBCodes kan je tags rond elkaar plaatsen zoals <strong>[img][/img]</strong> (zie volgende	), <strong>[b][/b]</strong>, enz. net als bij de opmaaktags is het aan jou om ervoor te zorgen dat de tags correct geopend en weer gesloten worden, bijvoorbeeld:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />dit is <u>niet</u> correct, wat ervoor zou kunnen zorgen dat je bericht verwijderd wordt. Let dus goed op.'
	),
	array(
		0 => '--',
		1 => 'Afbeeldingen tonen'
	),
	array(
		0 => 'Een afbeelding toevoegen aan een bericht',
		1 => 'phpBB BBCode heeft een tag om afbeeldingen aan het bericht toe te voegen. Er zijn twee heel belangrijke dingen waarmee je rekening moet houden als je deze tag gebruikt: veel gebruikers houden niet van veel afbeeldingen in een bericht en de afbeelding moet zich op het internet bevinden (het bestand mag dus bijvoorbeeld niet alleen op jouw computer staan, behalve als je zelf een webserver draait!). Om een afbeelding weer te geven moet je de URL naar de afbeelding tussen <strong>[img]</strong> en <strong>[/img]</strong> tags plaatsen. Bijvoorbeeld:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Je kan, indien je wil, een afbeelding ook tussen <strong>[url][/url]</strong> tag plaatsen, vb:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />dit wordt dan:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Een bijlage aan een bericht toevoegen',
		1 => 'Bijlagen kunnen, indien de beheerder de bijlagefunctie heeft aangezet &amp; je de nodige permissies hebt om bijlagen toe te voegen, overal worden toegevoegd door middel van de <strong>[attachment=][/attachment]</strong> tag. In het berichtvenster is er een selectie lijst om bijlagen toe te voegen.'
	),
	array(
		0 => '--',
		1 => 'Andere'
	),
	array(
		0 => 'Kan ik mijn eigen tags toevoegen?',
		1 => 'Als je beheerder van dit forum bent en over de nodige permissies beschikt, kun je extra BBCodes toevoegen in het BBCodes deel.'
	)
);
?>