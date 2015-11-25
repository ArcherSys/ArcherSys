<?php
/** 
*
* help_faq.php [﻿Norwegian Bokmål]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-07-25 - phpBB.no
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
		1	=> 'Innloggings- og registreringsproblemer',
	),
	array(
		0	=> 'Hvorfor kan jeg ikke logge meg inn?',
		1	=> 'Det kan være flere grunner til at dette skjer. Først og fremst bør du kontrollere at brukernavnet og passordet du bruker er korrekt. Hvis de er det kan det hende du er utestengt fra forumet. (Du vil sannsynligvis få beskjed om dette når du prøver å logge deg inn.) Hvis dette er tilfelle kan du kontakte en av forumets administratorer for å spørre hvorfor. Det er også mulig at forumet er feilkonfigurert, men dette merkes ofte fort og er derfor en lite sannsynlig grunn.',
	),
	array(
		0	=> 'Hvorfor må jeg registrere meg?',
		1	=> 'Det er mulig at du ikke trenger det, det er opp til administratoren av forumet om du må registrere deg eller ikke for å skrive innlegg. Dersom du registrerer deg vil du få tilgang til finesser som ikke er tilgjenglig for en gjestebruker, slik som å velge et avatar bilde, private meldinger til andre brukere, brukergruppe abonnement, osv. Registrering tar bare et par minutter og anbefales.',
	),
	array(
		0	=> 'Hvorfor blir jeg logget ut automatisk?',
		1	=> 'Hvis du ikke haker av i <strong>Logg meg på automatisk hver gang</strong>-boksen når du logger inn i forumet ,vil du bare bli logget inn for en forhåndsbestemt periode. Dette er for å hindre misbruk av brukerkontoen din av andre. For å forbli innlogget, må du hake av i boksen når du logger inn. Dette er ikke anbefalt dersom du bruker en datamaskin som er delt med andre, f.eks. på et bibliotek, en Internettkafé, et skolenettverk eller lignende. (Hvis du ikke ser denne boksen, skyldes det at administratoren har deaktivert denne funksjonen.)',
	),
	array(
		0	=> 'Hvordan kan jeg forhindre at navnet mitt blir vist i listen over påloggede brukere?',
		1	=> 'I brukerkontrollpanelet under “Forumpreferanser” vil du finne valget <i>Skjul at du er online</i>. Dersom du velger "ja" her, vil du kun sees av administratorer, moderatorer og deg selv. Du vil bli vist som en skjult bruker.',
	),
	array(
		0	=> 'Jeg har glemt passordet mitt!',
		1	=> 'Ingen panikk! Ditt passord kan ikke hentes ut igjen, men det kan bli erstattet. For å gjøre dette gå til logg inn siden og trykk på <em>Jeg har glemt passordet</em>, følg instruksjonene og du får et nytt passord innen kort tid.',
	),
	array(
		0	=> 'Jeg har registrert meg, men kan ikke logge inn!',
		1	=> 'Sjekk først at du har skrevet inn brukernavn og passord riktig. Dersom de er riktige kan en av to ting ha skjedd. Hvis COPPA support er aktivisert og du trykte <em>Jeg er under 13 år</em> linken mens du registrerte deg, må du følge instruksjonene du mottok. Dersom dette ikke er problemet er det mulig at kontoen din trenger aktivisering. Noen forumer krever at alle nye registreringer skal aktiviseres, enten av deg eller av administratoren, før du kan logge inn. Du ville fått beskjed ved registrering om aktivisering var nødvendig. Dersom du mottok en e-post, følg instruksjonene. Hvis du ikke mottok en e-post, kan du ha skrevet inn en ugyldig e-postadresse.  Hvis du er sikker på at e-postadressen du oppga er riktig, ta kontakt med administratoren.',
	),
	array(
		0	=> 'Jeg har registrert meg tidligere, men kan ikke logge inn mer?!',
		1	=> 'Du har sannsynligvis skrevet inn feil brukernavn eller passord (sjekk e-posten du mottok da du registrerte deg). Hvis du er sikker på at brukernavnet og passordet stemmer, så kan det hende at n administrator har slettet din konto. Dersom det siste er tilfelle har du kanskje ikke skrevet noen innlegg? Det er vanlig at administratorene sletter brukere som ikke skriver innlegg for å holde størrelsen på databasen nede. Prøv å registrere deg på nytt og bli med i noen diskusjoner.',
	),
	array(
		0	=> 'Hva er COPPA?',
		1	=> 'COPPA, eller "Child Online Privacy and Protection Act of 1998" er en amerikanskj lov som krever at nettsider som potensielt kan innsamle informasjon om barn under 13 år må innhente foreldrenes samtykke før dette kan skje. Denne loven gjelder ikke for norske statsborgere.',
	),
	array(
		0	=> 'Hvorfor kan jeg ikke registrere meg?',
		1	=> 'Det er mulig at administratorene har blokker epost-adressen eller brukernavnet du prøver å registrere deg med, eller IP-adressen til PCen du sitter på. Hvis ikke dette er tilfelle, så kan det også hende at registrering er slått helt av for dette forumet. Kontakt en administrator for ytterligere informasjon.',
	),
	array(
		0	=> 'Hva skjer når jeg trykker på linken "Slett alle forumets informasjonskapsler"?',
		1	=> 'Informasjonskapsler (cookies) lagres lokalt på din maskin, og sørger for å logge deg automatisk på forumet om du har krysset av for dette under en tidligere innlogging. De kan også holde styr på hvilke emner du har lest, om forumet er satt opp til å bruke de til dette. Hvis du har problemer med innlogging kan det vært lurt å prøve og slette cookies før du spør en administrator om hjelp, da dette kan løse problemet.',
	),
	array(
		0	=> '--',
		1	=> 'Innstillinger',
	),
	array(
		0	=> 'Hvordan endrer jeg mine innstillinger?',
		1	=> 'Alle dine innstillinger (hvis du er registrert) er lagret i databasen. For å forandre på innstillingene går du til brukerkontrollpanelet. (Vanligvis link øverst på siden, men ikke alltid.) Dette vil tillate deg å forandre på alle dine innstillinger.',
	),
	array(
		0	=> 'Klokken er ikke riktig!',
		1	=> 'Klokken er antakeligvis riktig, men tiden du ser kan være i en annen tidssone en den du oppholder deg i. Hvis dette er tilfelle kan du endre tidssonen i brukerkontrollpanelet til ditt område, f.eks. Oslo, London, Paris, New York, Sydney, osv. Kun registrerte brukere kan forandre tidssonen. Dersom du ikke er registrert og ønsker denne funksjonen, er dette et fint tidspunkt å registrere deg.',
	),
	array(
		0	=> 'Jeg har forandret tidssonen og tiden er fortsatt feil!',
		1	=> 'Hvis du er sikker på at du har satt både tidssonen og sommertidsinnstillingen riktig i brukerkontrollpanelet, så ligger feilen sannsynligvis på serveren. Kontakt i så fall en administrator.',
	),
	array(
		0	=> 'Mitt språk er ikke i listen!',
		1	=> 'Den mest sannsynlige grunnen er enten at administratoren ikke har installert språket eller at ingen har oversatt forumet til ditt språk. Prøv og spør administratoren om han/hun kan installere språket, og om det ikke finnes en oversettelse kan du gjerne lage en. Mer informasjon finner du på phpBB-gruppen sin hjemmeside. (Se linken nederst på siden.)',
	),
	array(
		0	=> 'Hvordan viser jeg et bilde under mitt brukernavn?',
		1	=> 'Det kan være to bilder under brukernavnet når du ser på innleggene. Det første er et bilde som viser din rangering, ofte stjerner, som viser hvor mange innlegg du har postet eller din status i forumet. Under dette kan det være et større bilde som er kalt en avatar. Dette er vanligvis et unikt eller personlig bilde til hver bruker. Det er opp til administratoren og aktivisere avatarfunksjonen, samt bestemme på hvilken måte du kan velge en avatar. Dersom du ikke får valgt en avatar, er dette bestemt av administratoren. Du kan spørre om hvorfor. (De har nok en god grunn!)',
	),
	array(
		0	=> 'Hvordan endrer jeg min rangering?',
		1	=> 'Din rangering er vanligvis basert på antall innlegg, men unntak finnes. (Rangeringer vises under ditt brukernavn i innlegg og i din profil, avhengig av hvilken stil som er valgt.) Rangering brukes også til og identifisere spesielle brukere. F.eks. moderatorer og administratorer kan ha en spesiell rangering. Vennligst ikke utnytt forumet ved å skrive unødvendig mange innlegg for og bedre din rangeringen, da vil sannsynligvis moderatorene eller administratorene senke innleggsantallet ditt.',
	),
	array(
		0	=> 'Når jeg trykker på e-post linken til en bruker, blir jeg bedt om å logge inn?',
		1	=> 'Kun registrerte brukere kan sende e-post til andre via den innebygde e-post funksjonen. (Kun hvis administratoren har aktivisert denne funksjonen.) Dette for å hindre mistenkelig bruk av e-post systemet av anonyme brukere.',
	),
	array(
		0	=> '--',
		1	=> 'Emner og innlegg',
	),
	array(
		0	=> 'Hvordan lager jeg et nytt emne i forumet?',
		1	=> 'For å legge inn et nytt emne i ett av forumene, går du først til de relevante forumet og klikker deretter på knappen merket "Nytt emne". I de fleste tilfeller må du være registrert for å kunne lage nye emner.',
	),
	array(
		0	=> 'Hvordan endrer eller sletter jeg et innlegg?',
		1	=> 'Hvis du ikke er administrator eller moderator kan du kun endre eller slette dine egne innlegg. Du kan endre et innlegg (noen ganger kun for et begrenset tidsrom etter det er skrevet) ved å klikke på <em>Endre</em>-knappen for det relevante innlegget.  Dersom noen allerede har svart på innlegget, vil det vises en liten tekst nedenfor innlegget hvor det står antall ganger innlegget er endret. Teksten vil ikke komme opp hvis ingen har svart på innlegget. Legg merke til at vanlige brukere ikke kan slette et innlegg etter at noen har svart på det.',
	),
	array(
		0	=> 'Hvordan legger jeg til en signatur til innleggene mine?',
		1	=> 'For å legge til en signatur må du først lage en, dette gjøres i brukerkontrollpanelet. Når den er laget haker du av boksen merket <em>Legg ved signatur</em> når du skriver innlegget. For å slippe og krysse av boksen hver gang kan du velge å alltid bruke signaturen, dette gjøres også i brukerkontrollpanelet. (Du kan fortsatt hindre at din signatur vises ved å ta vekk haken i <em>Legg ved signatur</em>-boksen når du skriver innlegget.)',
	),
	array(
		0	=> 'Hvordan lager jeg en avstemning?',
		1	=> 'Å lage en avstemning er enkelt. Når du skriver det første innlegget i et tema (eller endrer det første innlegget i et tema, hvis du har rettighetene) burde du se en fane for å lege avstemingen under tekstfeltet der du skrev inn innlegget. (Hvis du ikke ser denne har du antakeligvis ikke rettigheter til å lage en avstemning.) Du må skrive en tittel og minst to valg. Hvert valg skrives inn i tekstfeltet, med hvert valg på en separat linje. Du kan også sette en tidsgrense for avstemningen, bruk 0 hvis du ikke ønsker å sette en sluttdato. Du må også velge om brukeren skal kunne endre stemmen sin, og samtidig spesifisere hvor mange av mulighetene de kan velge.',
	),
	array(
		0	=> 'Hvorfor kan jeg ikke legge til flere alternativer i avstemningen?',
		1	=> 'Forumets administrator har satt en grense på hvor mange svaralternativer hver avstemning kan ha. Hvis du ikke kan legge til flere alternativer, så er grunnen sannsynligvis at du har overskredet denne grensen.',
	),
	array(
		0	=> 'Hvordan endrer eller sletter jeg en avstemning?',
		1	=> 'Som med innlegg kan kun brukeren som skrev innlegget, moderatorer eller administratorer endre avstemningen. For å endre en avstemning, klikk på endre knappen til det første innlegget i temaet. (Dette inneholder alltid avstemningen.) Dersom ingen har avlagt en stemme kan brukeren slette eller endre avstemningen. Kun moderatorer og administratorer kan endre eller slette avstemningen hvis noen har stemt. Dette for å hindre at noen jukser ved å bytte valg halvveis inne i avstemningen.',
	),
	array(
		0	=> 'Hvorfor kan jeg ikke lese et forum?',
		1	=> 'Noen forumer er begrenset til noen brukere eller grupper. For å lese, skrive, osv. er det mulig at du trenger en spesiell rettighet, kun moderatorer og administratorer kan gi deg denne rettigheten. Du kan eventuelt ta kontakt med en av dem.',
	),
	array(
		0	=> 'Hvorfor kan jeg ikke legge ved filer i innleggene mine?',
		1	=> 'For å kunne legge ved filer i et innlegg må en administrator ha aktivert denne funksjonen og gitt deg tilgang til å bruke den. Denne rettigheten kan gis på forum, gruppe eller medlems-basis. Vennligst kontakt en administrator om du mener at du burde ha tilgang til å legge ved filer.',
	),
	array(
		0	=> 'Hvorfor har jeg mottatt en advarsel?',
		1	=> 'Hver enkelt side har sine egne regler for hva som må til for at brukere blir advart. Hvis du har fått en advarsel, så har du sannsynligvis brutt en regel. Husk at hver enkelt side styrer dette helt selv, phpBB-gruppen har ingenting å si i slike saker.',
	),
	array(
		0	=> 'Hvordan rapporterer jeg er post til en moderator?',
		1	=> 'Hvis administratoren har aktivert funksjonen, vil du ved hvert innlegg se en knapp som lar deg rapportere dette innlegget til en moderator. Ved å klikke på denne knappen vil du bli ledet gjennom en prosess slik at du får rapportert innlegget.',
	),
	array(
		0	=> 'Hva betyr "Lagre"-knappen som vises når jeg skriver et innlegg?',
		1	=> 'Denne funksjonen lar deg lagre et innlegg slik at du kan fortsette å skrive på det ved en senere anledning. Gå til brukerkontrollpanelet og følg de selvforklarende linkene der.',
	),
	array(
		0	=> 'Hvorfor må innlegget mitt godkjennes?',
		1	=> 'Forumets administrator kan ha valgt at alle innlegg som postes til et spesifikt forum må godkjennes av en moderator før de blir synlige. Det er også mulig at administratoren har lagt deg til i en gruppe som gjør at dine innlegg må godkjennes før visning. ontakt en administrator for å få vite ytterligere detaljer.',
	),
	array(
		0	=> 'Hvordan flytter jeg emnet mitt til toppen av emnelisten?',
		1	=> 'For å flytte emnet ditt til toppen av emnelisten kan du klikke på knappen merket "Bump emnet". Denne funksjonen vil kun virke hvis administratoren har aktivert den, og det vil også måtte ha gått en viss tid etter siste innlegg før du kan bruke den. Merk at du også kan legge til et nytt innlegg for å oppnå samme effekt. (men pass på at du ikke bryter forumreglene ved å gjøre det)',
	),
	array(
		0	=> '--',
		1	=> 'Formatering og emnetyper',
	),
	array(
		0	=> 'Hva er BBKode?',
		1	=> 'BBKode er en variasjon av HTML, om BBKode kan brukes i forumet er bestemt av administratoren. Du kan også deaktivere BBKode i et innlegg når du skriver eller endrer innlegget. BBKode ligner på HTML i formateringen, men taggene er omringet av firkantparenteser [ og ] i stedet for &lt; og &gt; og gir en bedre kontroll over hvordan noe blir vist. Mer informasjon om BBkode finner du på guiden som blir lenket til fra siden der du skriver innlegget ditt.',
	),
	array(
		0	=> 'Kan jeg bruke HTML?',
		1	=> 'Nei, det er ikke mulig å bruke HTML på dette forumet. De fleste ting som kan oppnås med HTML-tagger kan også oppnås med BBKode, og er det noen funksjoner i BBKoden på dette forumet du savner, så kan du spørre en administrator om å legge inn en spesifikk BBKode for denne funksjonen.',
	),
	array(
		0	=> 'Hva er smil?',
		1	=> 'Smil er små bilder som kan brukes til å uttrykke følelser ved å bruke en kort kode, f.eks. :) betyr glad, :( betyr lei seg. Hele listen av smil kan sees i innleggsiden. Prøv og begrense bruken av smil, da disse kan gjøre et innlegg uleselig og en moderator kan bestemme seg for å ta dem bort eller slette innlegget helt. Vær oppmerksom på at forumets administrator kan ha satt en grense på hvor mange smil hvert innlegg kan inneholde.',
	),
	array(
		0	=> 'Kan jeg bruke bilder?',
		1	=> 'Ja, du kan bruke bilder i innleggene dine. Hvis administratoren har tillatt det, kan du laste opp bilder som vedlegg og vise de i innlegget ditt. Hvis ikke må linke til et bilde som ligger på en offentlig server, f.eks. http://www.et-ukjent-sted.net/mitt-bilde.gif. Du kan ikke linke til et bilde på din egen PC (hvis du ikke har en offentlig tilgjenglig server) eller bilder lagret bak passordmekanismer, som f.eks. Hotmail eller Yahoo-e-post kontoer, passordbeskyttede sider, osv. For å vise et bilde bruker du [img]-taggen.',
	),
	array(
		0	=> 'Hva er globale annonseringer?',
		1	=> 'Globale annonseringer inneholder som regel viktig informasjon, og du burde derfor lese de så snart som mulig. De vises både i brukerkontrollpanelet og øverst i alle forumene. Vanlige brukere kan som regel ikke poste globale annonseringer, for å gjøre dette må en administrator gi deg rett til det.',
	),
	array(
		0	=> 'Hva er annonseringer?',
		1	=> 'Annonseringer inneholder som regel viktig informasjon og bør leses snarest mulig. Annonseringer vises øverst på alle sidene i det forumet de er postet. Din mulighet til å skrive en annonsering er avhengig av hvilke rettigheter som er påkrevd. Disse er satt av administratoren.',
	),
	array(
		0	=> 'Hva er prioriterte emner?',
		1	=> 'Prioriterte emner vises under annonseringene i forumet og kun på den første siden. De er som regel ganske viktige, så de bør leses snarest mulig. Administratoren bestemmer hvilke rettigheter du må ha for å skrive et prioritert tema i hvert forum.',
	),
	array(
		0	=> 'Hva er stengte temaer?',
		1	=> 'Stengte temaer har blitt låst av moderatoren eller administratoren. Du kan ikke svare på et stengt tema, og eventuelle avstemninger er automatisk avsluttet. Temaer kan bli avsluttet av mange grunner. Du kan kanskje også stenge dine egen emner, forutsatt at en administrator har gitt deg denne muligheten.',
	),
	array(
		0	=> 'Hva er emneikoner',
		1	=> 'Emneikoner kan assosierer med et emne for å tydeliggjøre hva emnet inneholder. For å bruke det må en administrator ha gitt deg rett til det.',
	),
	array(
		0	=> '--',
		1	=> 'Brukernivåer og grupper',
	),
	array(
		0	=> 'Hva er en administrator?',
		1	=> 'En administrator er en bruker som er tildelt den høyeste grad av kontroll over hele forumet. Denne/disse brukerne kan kontrollere avanserte funksjoner av forumdriften som inkluderer blant annet og sette rettigheter, utestenge brukere, lage brukergrupper eller moderatorer osv, avhengig av hvilke administratorrettigheter forumets grunnleggere har gitt dem. De kan også ha også full moderator rettighet i alle forumene, hvis disse rettighetene er gitt.',
	),
	array(
		0	=> 'Hva er en moderator?',
		1	=> 'En moderator er en enkelt bruker (eller en gruppe brukere) som skal overvåke forumet fra dag til dag. Denne/disse brukerne har rettighetene til å endre eller slette innlegg, og låse/låse opp, flytte, slette og dele temaer i det forumet de modererer. Vanligvis er moderatorer der for å hindre brukere i og gå <em>utenfor tema</em> eller skrive upassende eller støtende innlegg.',
	),
	array(
		0	=> 'Hva er en brukergruppe?',
		1	=> 'Administratorer kan dele brukere opp i brukergrupper. Hver bruker kan høre til flere grupper, og hver gruppe kan bli gitt individuelle rettigheter. Dette gjør det lett for administratoren å sette opp flere brukere som moderatorer for et forum, eller å gi dem rettighetene til å lese et privat forum, osv.',
	),
	array(
		0	=> 'Hvordan blir jeg medlem av en brukergruppe?',
		1	=> 'For å bli medlem av en brukergruppe klikker du på Grupper-fanen i brukerkontrollpanelet. Du kan da se alle brukergruppene. Ikke alle grupper er <em>offentlig tilgjenglig</em>, noen er stengt og noen kan til og med ha skjult medlemskap. Dersom gruppen er åpen, kan du spørre om å bli medlem ved å klikke på den tilhørende knappen. Gruppe moderatoren må først godkjenne deg, og du kan få spørsmål om hvorfor du vil bli medlem av gruppen. Vennligst godta gruppe moderatorens svar hvis de gir deg avslag, et eventuelt avslag vil være godt begrunnet.',
	),
	array(
		0	=> 'Hvordan blir jeg en gruppe moderator?',
		1	=> 'Brukergrupper er startet av administratoren som velger en gruppe moderator. Hvis du ønsker å starte en brukergruppe må du ta kontakt med administratoren. Send administratoren en privat melding.',
	),
	array(
		0	=> 'Hvorfor vises enkelte brukergruppemedlemmer i en annen farge?',
		1	=> 'Det er mulig for administratorene å tildele forskjellige farger til de ulike gruppene, slik at det skal være enkelt å gjenkjenne medlemmer som deltar i gruppene.',
	),
	array(
		0	=> 'Hva betyr "Hovedgruppe"?',
		1	=> 'Hvis du er medlem i flere forskjellige brukergrupper, så er det den gruppen som er satt til din hovedgruppe som bestemmer fargen på brukernavnet ditt og eventuelt din brukerrank/avatar. Hvis administratorene har gitt deg de nødvendige rettighetene, så vil det være mulig for deg å forandre hovedgruppen din i gruppefanen i brukerkontrollpanelet.',
	),
	array(
		0	=> 'Hva er "Forumets ledere"-siden?',
		1	=> 'Denne siden lister opp alle som bidrar på forumet som administratorer eller moderatorer, og viser hvilke forumer disse modererer.',
	),
	array(
		0	=> '--',
		1	=> 'Private Meldinger',
	),
	array(
		0	=> 'Jeg kan ikke sende private meldinger!',
		1	=> 'Det er tre grunner til dette; du er ikke registrert og/eller ikke logget inn, administratoren har deaktivisert private meldinger for hele forumet eller administratoren har stoppet deg fra å sende meldinger. Dersom det siste er tilfellet burde du spørre administratoren om grunnen.',
	),
	array(
		0	=> 'Jeg fortsetter å få uønskede private meldinger!',
		1	=> 'Du kan blokkere en bruker fra å sende deg private meldinger ved å legge brukeren til i din "uvenn-liste", og deretter opprette en meldingsregel som sier at meldinger fra uvenner skal slettes/flyttes til en spesiell mappe. Ved grove tilfeller kan du alltid kontakte en administrator, som kan frata vedkommende mulighetene til å sende meldinger på dette forumet. (si f.eks. alltid i fra om spam via private meldinger).',
	),
	array(
		0	=> 'Jeg har mottatt spam, upassende eller støtende e-post fra noen på dette forumet!',
		1	=> 'Vi beklager å høre dette. E-post funksjonen i dette forumet har en sikkerhets funksjon som kan hjelpe til å spore brukere som sender slike meldinger. Send en e-post til administratoren med en full kopi av e-posten du mottok. Det er veldig viktig at du inkluderer toppen da denne inneholder detaljer om hvilken bruker som sendte deg e-posten. Administratoren kan da ta affære.',
	),
	array(
		0	=> '--',
		1	=> 'Kontakter',
	),
	array(
		0	=> 'Hva er kontaktlistene?',
		1	=> 'Du kan bruke disse listene for å organisere ditt forhold til andre brukere på dette forumet. Brukere du legger som venner vil bli listet opp i brukerkontrollpanelet slik at du raskt kan se om disse er pålogget og kan sende dem private meldinger med et enkelt klikk. Hvis designet på denne siden støtter det, så kan også innlegg laget av venner merkes på en spesiell måte. Hvis du legger til brukere som uvenner vil innlegg laget av disse brukerene bli skjult slik at du slipper å se dem (du vil kunne se dem ved å trykke på en link). Ved hjelp av regler for personlige meldinger kan du også filtrere bort PM\'er fra disse brukerene.',
	),
	array(
		0	=> 'Hvordan legger jeg til/fjerner brukere fra kontaktlisten?',
		1	=> 'Det er to måter å gjøre dette på. Når du ser på profilen til en bruker vil det være to linker du kan trykke på for å legge den aktuelle brukeren til som venn eller uvenn. I tillegg til dette kan du også legge til brukere fra brukerkontrollpanelet ved å oppgi brukernavnet.',
	),
	array(
		0	=> '--',
		1	=> 'Søking i forumet',
	),
	array(
		0	=> 'Hvordan kan jeg søke i dette forumet?',
		1	=> 'Du søker ved å skrive inn søkeordene dine i søkefeltet som finnes på de fleste sider i forumet - enten ved å bruke søkeboksen for å søke i hele forumet, eller ved å bruke boksen for å søke i vist forum/emne. Avanserte søkevalg kan nås ved å trykke på linken merket med dette. Denne linken befinner seg som regel i nærheten av hovedsøkeboksen.',
	),
	array(
		0	=> 'Hvorfor returnerte ikke søket mitt noen resultater?',
		1	=> 'Søket ditt var sannsynligvis for vagt og inkluderte mange vanlige ord som derfor ikke indekseres av kapasitetshensyn. Vær mer spesifik, og benytt deg gjerne av valgene som finnes i "avansert søk".',
	),
	array(
		0	=> 'Hvorfor returnerte søket mitt en blank side?',
		1	=> 'Søket ditt returnerte flere resultater enn webserveren kunne håndtere. Vær mer spesifikk, og benytt deg gjerne av valgene som finnes i "avansert søk" (f.eks innskrenk søket ditt til spesifike forum).',
	),
	array(
		0	=> 'Hvordan søker jeg etter medlemmer?',
		1	=> 'Gå til medlemssiden og klikk på "Søk etter medlem"-linken. Der får du opp et søkeområde der du kan spesifisere søket ditt.',
	),
	array(
		0	=> 'Hvordan kan jeg finne mine egne innlegg og emner?',
		1	=> 'For å finne dine egne innlegg kan du klikke på "Søk etter brukerens innlegg" i din profil eller i brukerkontrollpanelet. For å søke etter emner du har skrevet, bruk den vanlige avanserte søkesiden og fyll ut brukernavnet ditt i brukernavnfeltet og velg å vise resultatene som emner.',
	),
	array(
		0	=> '--',
		1	=> 'Emneabonnementer og -bokmerker',
	),
	array(
		0	=> 'Hva er forskjellen på bokmerker og abonnementer?',
		1	=> 'Bokmerkene i phpBB3 fungerer på samme måte som bokmerker i nettleseren din. Du blir ikke varslet ved nye innlegg, men du kan alltid finne igjen emnet i bokmerkelisten du finner i brukerkontrollpanelet ditt. Hvis du derimot abonnerer på emner vil du bli varslet ved nye innlegg, som regel via e-post (varslingsmetoden kan stiller inn i brukerkontrollpanelet).',
	),
	array(
		0	=> 'Hvordan abonnerer jeg på innlegg eller forumer?',
		1	=> 'For å abonnere på varsler ved nye emner/innlegg i et spesifikt forum klikker du på "Abonner på forum"-linken du finner når du er i dette forumet. For å abonnere på et emne merker du av boksen for dette når du svarer på eller oppretter emnet. Du kan også klikke på "Abonner på emne"-linken når du ser på emnet.',
	),
	array(
		0	=> 'Hvordan avslutter jeg et forum- eller emneabonnement?',
		1	=> 'For å avslutte et abonnement går du til brukerkontrollpanelet ditt. Der vil du finne en liste over alle emner og forumer du abonnerer på, og du kan også avslutte abonnementene her.',
	),
	array(
		0	=> '--',
		1	=> 'Vedlegg',
	),
	array(
		0	=> 'Hva slags vedlegg er tillatt på dette forumet?',
		1	=> 'Administratoren for dette forumet administrerer listen over tillate filtyper. Hvis du prøver å laste opp en fil og får beskjed om at filtypen ikke er tillatt, kan du ta kontakt med en administrator og spørre hvorfor denne er sperret. Enten er det en god grunn til det, ellers vil administratoren sannsynligvis vurdere å legge den til i listen.',
	),
	array(
		0	=> 'Hvordan finner jeg alle vedlegg jeg har lagt inn?',
		1	=> 'For å se listen over alle vedlegg du har lastet opp går du til vedleggsseksjonen i brukerkontrollpanelet.',
	),
	array(
		0	=> '--',
		1	=> 'Spørsmål angående phpBB 3.',
	),
	array(
		0	=> 'Hvem skrev dette forumet?',
		1	=> 'Denne programvaren (i sin umodifiserte form) er produsert, lansert og kopibeskyttet av <a href="http://www.phpbb.com/">phpBB-gruppen</a>. Den er gjort tilgjenglig under GNU General Public Licence og kan bli fritt distribuert, følg linken for mer informasjon.',
	),
	array(
		0	=> 'Hvorfor er ikke X-funksjonen tilgjenglig?',
		1	=> 'Denne programvaren er skrevet og lisensiert av phpBB-gruppen. Ønsker du at en funksjon legges til forumet, send en forespørsel til phpBB på deres hjemmeside phpbb.com. Vennligst ikke send funksjonsetterspørsler til forumet hos phpbb.com, gruppen bruker SourceForge til å håndtere nye funksjoner. Vennligst les igjennom forumene for og se hva deres innstilling er til den ønskede funksjonen og følg prosedyren angitt der.',
	),
	array(
		0	=> 'Hvem kontakter jeg angående støtende og/eller rettslige saker relatert til dette forumet?',
		1	=> 'Rett din forespørsel til en av administratorene som er listet på "Forumledelse"-siden. Hvis du ikke får noen respons kan du ta kontakt med domeneeieren (finn det ut ved et <a href="http://www.google.com/search?q=whois">whois-søk</a>) . Dersom forumet er på en gratis server (f.eks. yahoo, free.fr, f2s.com, osv.), kontakter du de ansvarlige for driften der. Vennligst legg merke til at phpBB Group har <strong>absolutt ingen kontroll</strong> og kan på ingen måte bli holdt ansvarlig over hvordan, hvor eller av hvem dette forumet blir brukt. Det er meningsløst å kontakte phpBB Group angående rettslige saker som ikke er direkte relatert til phpbb.com sin hjemmeside, eller programvaren til phpBB. Hvis du sender e-post til phpBB Group angående tredjeparts bruk av denne programvaren, kan du vente deg et avvisende svar eller intet svar overhodet.',
	),
);

?>