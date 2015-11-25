<?php
/** 
*
* help_bbcode.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-06-03 - phpBB.no
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
$help = array(
	array(
		0	=> '--',
		1	=> 'Introduksjon',
	),
	array(
		0	=> 'Hva er BBCode?',
		1	=> 'BBCode er en spesiell versjon av HTML. Det er opptil administratoren å bestemme om du kan bruke det eller ikke. Hvis det tillates, kan du likevel deaktivere det i hvertinnlegg ved å merke av i boksen "Deaktiver BBCode i dette innlegget". BBCode i seg selv bruker også andre klammer enn HTML, nemlig [ og ] i stedet for &lt; og &gt; og gir en bedre oversikt over kodingen. Avhengig av stilen du bruker, kan du på en mye enklere måte legge til BBCodes i innleggene ved å bruke kappene over tekstområdet. Ellers vil følgende guide være til god help.<br />Du kan også lese under <a href="faq.php#f30">Hva er BBCode?</a> i <a href="faq.php">hjelpseksjonen</a>.',
	),
	array(
		0	=> '--',
		1	=> 'Tekstformatering',
	),
	array(
		0	=> 'Hvordan lage fet, kursiv og understreket tekst',
		1	=> 'BBCode inneholder tagger som gjør det lett å endre den basiske tekststilen. Det gjøres på denne måten: <ul><li>For å gjøre en del av teksten fet, omgi den med taggene <strong>[b][/b]</strong>, for eksempel vil<br /><br /><strong>[b]</strong>Hallo<strong>[/b]</strong><br /><br />bli til <strong>Hallo</strong></li><li>For understreking bruk <strong>[u][/u]</strong>, for eksempel blir <br /><br /><strong>[u]</strong>God morgen<strong>[/u]</strong><br /><br /> til <span style="text-decoration: underline">God morgen</span></li><li>Bruk <strong>[i][/i]</strong> for å gjøre teksten kursiv. Eksempel:<br /><br />Dette er <strong>[i]</strong>bra<strong>[/i]</strong>!<br /><br />Sistnevnte eksempel vil bli til Dette er <i>bra</i>!</li></ul>',
	),
	array(
		0	=> 'Hvordan endre skrifttfarge og -størrelse',
		1	=> 'Du kan bruke følgende tagger til å endre skriftens farge og størrelse. Husk at visningen av disse kan variere i ulike nettlesere og operativsystemer. <ul><li>For å endre skriftfargen, bruk <strong>[color=][/color]</strong>. Du kan enten bruke godkjente engelske fargenavn (som red, blue, yellow, o.s.v.) eller hexadesimaler, som #FFFFFF, #000000. Du kan bruke følgende eksempler for å lage rød tekst:<br /><br /><strong>[color=red]</strong>Hallo!<strong>[/color]</strong><br /><br />eller<br /><br /><strong>[color=#FF0000]</strong>Hallo!<strong>[/color]</strong><br /><br /> vil begge skrive ut <span style="color:red">Hallo!</span></li><li>Endring av skriftstørrelse skjer ved bruk av denne metoden: <strong>[size=][/size]</strong>. Disse taggene kan variere fra ulike stiler, men størrelsen er vanligvis et tall fra 20 (veldig liten) til 200 (veldig stor). Eksempel:<br /><br /><strong>[size=30]</strong>LITEN<strong>[/size]</strong><br /><br />vil vanligvis bli<span style="font-size:30%;">LITEN</span>,<br /><br />mens<br /><br /><strong>[size=200]</strong>STOR!<strong>[/size]</strong><br /><br />vil bli <span style="font-size:200%;">STOR!</span></li></ul>',
	),
	array(
		0	=> 'Kan jeg kombinere BBCode-tagger?',
		1	=> 'Selvsagt kan du det.<br /><br /><strong>[size=150][color=red][b]</strong>SE PÅ MEG!<strong>[/b][/color][/size]</strong><br /><br />vil vanligvis bli <span style="color:red;font-size:250%;"><strong>SE PÅ MEG!</strong></span><br /><br />Vi vil ikke anbefale å formatere teksten slik! Men det er jo selvfølgelig opp til deg, bare du husker å sjekke om kodene står i riktig rekkefølge, så det ikke blir slik:<br /><br /><strong>[b][u]</strong>Dette er feil.<strong>[/b][/u]</strong>',
	),
	array(
		0	=> '--',
		1	=> 'Sitering og utskriving av kodeformatert data',
	),
	array(
		0	=> 'Sitere tekst i svar',
		1	=> 'D.u kan sitere tekst på to måter: Enten med å referere til en annen person, eller uten.<ul><li>Bruk<strong>[quote=&quot;&quot;][/quote]</strong> til å sitere en annen brukers (eller hva som helst annets) uttalelse i en blokk. Hvis du for eksempel vil sitere en del av Mr. Blobbys tekst, kan du skrive:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Teksten du vil referere til.<strong>[/quote]</strong><br /><br />Sistnevnte eksempel vil automatisk skrive &quot;Mr. Blobby skrev:&quot; før den aktuelle teksten. Husk at du <strong>må</strong> inkludere tegnene &quot;&quot; rundt navnet du vil sitere fra, ellers vil ikke koden virke.</li><li>Den andre metoden tillater deg å sitere uten noen person å peke til. Skriv teksten du vil sitere mellom <strong>[quote][/quote]</strong>-taggene for å benytte deg av denne funksjonen. Da vil teksten vises i en enkel blokk.</li></ul>',
	),
	array(
		0	=> 'Skrive ut kodeformatert data direkte',
		1	=> 'Hvis du ønsker å skrive ut koder o.l., bruk taggene <strong>[code][/code]</strong>, for eksempel slik:<br /><br /><strong>[code]</strong>echo &quot;En kode&quot;;<strong>[/code]</strong><br /><br />All formatering innenfor <strong>[code][/code]</strong>. Du kan også fargelegge PHP-syntaks med <strong>[code=php][/code]</strong>.',
	),
	array(
		0	=> '--',
		1	=> 'Generere lister',
	),
	array(
		0	=> 'Lage en ikkesortert liste',
		1	=> 'BBCode kan lage to typer lister: Sorterte og ikkesorterte. De er helt like som HTML-lister. En ikkesortert liste skriver ut hvert punkt med en &bull;. For å lage en ikkesortert liste, bruk taggene <strong>[list][/list]</strong> og definer hvert punkt med en <strong>[*]</strong>. Dette eksemplet viser hvordan du kan vise favorittfargene dine i en liste:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Rød<br /><strong>[*]</strong>Blå<br /><strong>[*]</strong>Gul<br /><strong>[/list]</strong><br /><br />Eksemplet vil gnerere følgende liste:<ul><li>Red</li><li>Blue</li><li>Yellow</li></ul>',
	),
	array(
		0	=> 'Lage en sortert liste',
		1	=> 'Den andre typen liste, en sortert liste, gir deg kontroll over hva du skriver ut etter hvert punkt. Bruk <strong>[list=1][/list]</strong> for å lage en liste sortert etter tall, eller <strong>[list=a][/list]</strong> for en alfabetisk liste. Som i ikkesortete lister, må du bruke <strong>[*]</strong> for å lege et nytt punkt. Eksempel:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Gå til butikken.<br /><strong>[*]</strong>Kjøp en ny datamaskin.<br /><strong>[*]</strong>Kjeft på maskinen når den kræsjer.<br /><strong>[/list]</strong><br /><br />will generate the following:<ol style="list-style-type: arabic-numbers"><li>Gå til butikken.</li><li>Kjøp en ny datamaskin.</li><li>Kjeft på maskinen når den kræsjer.</li></ol>Her er et eksempel på en alfabetisk liste:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Det første svaralternativet<br /><strong>[*]</strong>Det andre svaralternativet<br /><strong>[*]</strong>Det tredje svaralternativet<br /><strong>[/list]</strong><br /><br />Dette vil skrive ut<ol style="list-style-type: lower-alpha"><li>Det første svaralternativet</li><li>Det andre svaralternativet</li><li>Det tredjesvaralternativet</li></ol>',
	),
	array(
		0	=> '--',
		1	=> 'Lage linker',
	),
	array(
		0	=> 'Linke til en annen side',
		1	=> 'En annen ting BBCode kan gjøre er å lage linker teil URI-er (Uniform Resource Indicator), bedre kjent som URL-er (-Locator).<ul><li>Den ene metoden å gjøre det på er med <strong>[url=][/url]</strong>-taggene. Denne koden vil linke til URL-en (nettsideadressen) du angir etter <strong>=</strong>-tegnet. Hvis du for eksempel vil linke til phpBB.no, bruk denne koden:<br /><br /><strong>[url=http://phpbb.no/]</strong>Besøk phpBB.no!<strong>[/url]</strong><br /><br />Dette vil generere følgende link: <a href="http://phpbb.no/">Besøk phpBB.no!</a> Husk at linkene både kan åpnes i en/et ny(tt) og i samme fane/vindu, avhengig av nettleseren.</li><li>Hvis du ønsker å vise hele URL-en i linken, holder det med følgende eksempel:<br /><br /><strong>[url]</strong>http://phpbb.no/<strong>[/url]</strong><br /><br />Dette burde lage en slik link: <a href="http://phpbb.no/">http://phpbb.no/</a></li><li>Du kan også linke uten å bruke BBCode; det gjøres ved hjelp av funksjonen <i>Magiske Linker</i>, som automatisk vil gjøre om URL-er til linker, både om de starter med <u>http://</u> eller <u>www.</u>. Hvis du skriver http://phpbb.no/, vil <a href="http://phpbb.no/">http://phpbb.no/</a> automatisk bli skrevet ut i meldingen.</li><li>Dette gjelder også e-postadressser:<br /><br /><strong>[email]</strong>ingen@etellerannet.domene<strong>[/email]</strong><br /><br />vil bli til <a href="mailto:ingen@etellerannet.domene">ingen@etellerannet.domene</a>. Magiske Linker støtter også e-postadresser, så du kan også skrive ingen@etellerannet.domene direkte inn i meldingen for å automatisk transformere den om til en link.</li></ul>Du kan også ha BBCodes inni [url]-taggene; se under <a href="faq.php?mode=bbcode#f12">Kan jeg kombinere BBCode-tagger?</a>. Som beskrevet i sistnevnte link, må deu undersøke om kodene står i riktig rekkefølge. Følgende kode er <span style="text-decoration: underline">feil</span>:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />Slike feil kan føre til at innlegg blir slettet.',
	),
	array(
		0	=> '--',
		1	=> 'Vise bilder',
	),
	array(
		0	=> 'Legge til bilder i innlegg',
		1	=> 'BBCode kan la deg legge til bilder. De to viktige tingene en må huske på når en skal vise bilder er at mange brukere ikke liker at det er altfor mange bilder i innlegget og at bildet allerede må være tilgjengelig på Internett (det er for eksempel ikke nok med at det ligger på din datamaskin, med mindre det er en nettserver!). Og så til poenget: For å vise et bilde, må du skrive bildets URL mellom <strong>[img][/img]</strong>-taggene. Eksempel:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Som nevnt i linkseksjonen ovenfor, kan du sette bildet inni<strong>[url][/url]</strong>-taggene hvis du vil, for eksempel slik:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />Denne vil lage en link til bildet:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" /></a>',
	),
	array(
		0	=> 'Legge til vedlegg',
		1	=> 'Vedlegg kan bli vist i innegget ved å bruke <strong>[attachment=][/attachment]</strong>-taggene. Husk at det er opptil administrator å aktivere denne funksjonen; er den deaktivert, må du ha visse rettigheter for å bruke den. Når du skriver innlegg, vil du se en rullgardinmeny med ulike vedleggsalternativer. Skulle det oppstå problemer, kan du alltids lese under <a href="faq.php#f27">Hvorfor kan jeg ikke legge ved filer i innleggene mine?</a> i <a href="faq.php">hjelp-seksjonen</a>.',
	),
	array(
		0	=> '--',
		1	=> 'Andre spørsmål',
	),
	array(
		0	=> 'Kan jeg lage egne BBCode-tagger?',
		1	=> 'Å lage BBCodes er forbeholdt administratorer. Hvis du er administrator og har nødvendige rettigheter, kan du gjøre det i BBkode-menyen i administrasjonspanelet.',
	),
);

?>