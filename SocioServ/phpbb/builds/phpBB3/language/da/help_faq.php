<?php
/**
*
* help_faq [Danish]
*
* @package language
* @version $Id: help_faq.php,v 1.41 2007/08/19 14:08:26 naderman Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translators: Olympus DK Team, working at http://www.phpBB3.dk and http://area51.phpBB3.dk:
*
*		John Hjorth < john-hjorth@john-hjorth.dk > (John Hjorth) http://www.phpBBFM.dk
*		jask < jan@skovsgaard.net > (Jan Skovsgaard) http://skovsgaard.net
*		Jesper Møller < jgom@privat.dk > (Jesper G. O. Møller) http://www.jart.dk/jgom/index.html
*
* Contributors :
*
*		AlleyKat < AlleyKat@phpbb2.dk > (Finn Sørensen) http://www.phpbb2.dk
*		Dr.Diesel < dr.diesel@dream-cathers.dk > (Jes Nielsen) http://www.dream-cathers.dk
*		Jan Christensen < tamrotten@gmail.com > (Jan Christensen) http://janogwickys.dk/phpBB2/index.php
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
		1 => 'Login- og tilmeldingsproblemer'
	),
	array(
		0 => 'Hvorfor kan jeg ikke logge ind?',
		1 => 'Der er flere grunde til hvorfor det kan ske. Først bør du sikre dig at det brugernavn og kodeord du anvender er korrekt. Hvis de er det, bør du kontakte boardets ejer for at sikre du ikke er blevet udelukket. Der er også mulighed for at hjemmesidens ejer har en konfigurationsfejl, som denne skal have rettet op på.'
	),
	array(
		0 => 'Hvorfor er det nødvendigt at tilmelde sig?',
		1 => 'Det er ikke sikkert at det er nødvendigt; det er boardets administrator der afgør om det er nødvendigt at tilmelde sig for at skrive indlæg. Tilmelding er dog altid en god ide, da dette giver adgang til flere muligheder som ikke er tilgængelige for gæstebrugere, funktioner som personligt billede på dine indlæg, private beskeder, sende emails til andre tilmeldte brugere, brugergrupper, osv. Det tager kun et øjeblik at tilmelde sig og det anbefales derfor at gøre det.'
	),
	array(
		0 => 'Hvorfor bliver jeg logget ud hele tiden?',
		1 => 'Hvis du ikke markerer <em>Log mig automatisk ind ved hvert besøg</em> boksen når du logger ind, vil dette login kun gælde i en begrænset tidsperiode. Dette er til for at forhindre andre i at misbruge din konto. Hvis du ønsker hele tiden at være logget på skal du derfor markere denne boks næste gang du logger på. Dette anbefales IKKE på en computer som også bruges af andre personer, f.eks. bibliotek, Internet cafe, skole, osv. Hvis du ikke kan se denne boks, betyder det at administratoren har slået denne mulighed fra.'
	),
	array(
		0 => 'Hvordan forhindrer jeg at mit navn fremgår af listen "Hvem er online nu"?',
		1 => 'I bruger kontrolpanelet under boardindstillinger finder du indstillingen <em>Skjul min online status</em>. Hvis du vælger <em>Ja</em> vil du kun kunne ses online af boardets administratorer, redaktører og dig selv. Du vil blive registeret som en skjult bruger.'
	),
	array(
		0 => 'Jeg har glemt mit kodeord!',
		1 => 'Gå ikke i panik! Selvom det ikke er muligt at finde dit gamle kodeord er det muligt at generere et nyt. For at gøre dette skal du gå til loginsiden og klikke på <em>Jeg har glemt mit kodeord, send nyt kodeord via email</em>. Følg instruktionen som fremsendes og du skulle gerne kunne logge ind igen i løbet af kort tid.'
	),
	array(
		0 => 'Jeg har tilmeldt mig, men kan ikke logge ind!',
		1 => 'Først bør du kontrollere at du har tastet korrekt (husk store / små bogstaver har betydning). Hvis dette er i orden, kan det være 1 af følgende muligheder. Hvis COPPA-understøttelse er slået til på boardet og du har klikket på <em>jeg er under 13 år</em>-linket da du tilmeldte dig, skal du følge instruktionen du har modtaget pr. email. Hvis dette ikke er tilfældet, kan det skyldes at din konto skal aktiveres. Nogle boards kræver at alle nyoprettede brugerkonti skal aktiveres, inden de kan benyttes, enten af dig selv eller af en administrator. Da du tilmeldte dig, skulle du gerne være blevet gjort opmærksom på om aktivering af kontoen var nødvendig. Hvis du modtog en email, skal du følge instruktionen. Hvis du ikke modtog nogen email kan det skyldes, at emailadressen ikke var korrekt. Aktivering benyttes for at mindske muligheden for at <em>uønskede</em> personer misbruger systemet ved at give ukorrekte oplysninger. Hvis du er 100% sikker på at du har skrevet den rigtige emailadresse, og denne virker, så prøv at kontakte en boardadministrator.'
	),
	array(
		0 => 'Jeg har tilmeldt mig for et stykke tid siden, og kan nu ikke logge ind længere?!',
		1 => 'Der kan være flere årsager, den mest sandsynlige årsag er, at du indtaster et forkert brugernavn eller kodeord. Hvis du stadig har emailen, som du modtog, da du tilmeldte dig kan du se i den. Det kan også skyldes at administratoren har slettet eller deaktiveret din konto af en eller anden årsag. Hvis dette er tilfældet, kan det skyldes at du aldrig skrev nogle indlæg? Det er normal procedure med jævne mellemrum at fjerne brugere som aldrig har skrevet indlæg, for at mindske databasens størrelse. Tilmeld dig igen for at blande dig i diskussionerne.'
	),
	array(
		0 => 'Hvad er COPPA?',
		1 => 'COPPA er, Child Online Privacy and Protection Act of 1998, en lov i United States of America (USA) som kræver at en hjemmeside som potentielt samler information fra mindreårige under 13 år, skal have en skriftlig tilladelse fra forældrene, eller på anden måde have en legal godkendelse på at siden samler personlige oplysninger fra mindreårige. Hvis du er er usikker på om du er omfattet af denne lov, fordi mindreårige forsøger at tilmelde sig eller om boardet du forsøger at tilmelde dig er under denne lovgivning, bør du kontakte en advokat. Vær venligst opmærksom på at phpBB Group ikke kan rådgive yderligere i sager omhandlende COPPA.',
	),
	array(
		0 => 'Hvorfor kan jeg ikke tilmelde mig?',
		1 => 'Det kan skyldes at en boardadministrator har udelukket din IP-adresse eller har forbudt brugernavnet du forsøger at tilmelde dig med. En boardadministrator kan også have slået muligheden for at tilmelde sig fra, og bevidst have lukket for nye tilmeldinger. Kontakt venligst en boardadministrator for at få hjælp.',
	),
	array(
		0 => 'Hvilken funktion har "Slet alle boardcookies"?',
		1 => 'Funktionen sletter alle cookies generet af phpBB, som anvendes til at identificere dig og holde dig logget ind på boardet. Hvis en boardadministrator har slået funktionaliteten til, kan cookies også bruges til f.eks at registrere hvilke indlæg du har læst. Hvis du har problemer med at logge ind eller ud kan det hjælpe at slette disse cookies.',
	),
	array(
		0 => '--',
		1 => 'Brugerindstillinger og muligheder'
	),
	array(
		0 => 'Hvordan ændrer jeg min opsætning?',
		1 => 'Alle dine indstillingsmuligheder (Hvis du er tilmeldt bruger) gemmes i databasen. For at se eller ændre dem skal du klikke på <em>Bruger kontrolpanel</em> linket (normalt vist i toppen af siden, men er ikke altid tilfældet). Dette link vil føre dig til en side, hvor du kan ændre din opsætning.'
	),
	array(
		0 => 'Tiden er ikke vist korrekt!',
		1 => 'Da det usædvanligt sjældent sker at hjemmesidens(webserverens) tidsindstilling er forkert, kan du næsten med sikkerhed gå ud fra at den tid du ser er rigtig. Det du muligvis ser er en tid i en anden tidszone end den du slever i. Hvis det er tilfældet, bør du rette i din profil hvor du kan indstille hvilken tidszone du befinder dig i, f.eks. København, London, Paris, New York, Sydney, osv. Vær opmærksom på at det kun er muligt for tilmeldte brugere at ændre tidszonen, ligesom de fleste andre indstillinger kun kan ændres af tilmeldte brugere, så hvis ikke du er tilmeldt er det måske på tide at blive det!'
	),
	array(
		0 => 'Jeg har ændret tidszonen og tiden er stadig forkert!',
		1 => 'Hvis du har indstillet tidszone og sommertidsindstillingen/<abbr title="Daylight Saving Time">DST</abbr> korrekt og klokkeslæt stadig vises forkert, er det fordi serverens ur er indstillet forkert. Kontant da venligst en boardadministrator for at få fejlen korrigeret.'
	),
	array(
		0 => 'Mit sprog er ikke i listen!',
		1 => 'Det er enten fordi boardadministratorerne ikke har installeret dit sprog, eller fordi det ikke er oversat endnu. Prøv at spørge en boardadministrator om det er muligt at installere den sprogpakke som du har brug for. Hvis den ikke eksisterer er du velkommen til selv at foretage oversættelsen, mere information om hvordan dette gøres findes på phpBB Group\'s hjemmeside (se link nederst på siden).'
	),
	array(
		0 => 'Hvordan får jeg vist et billede under mit brugernavn?',
		1 => 'Der findes mulighed for 2 billeder under dit brugernavn når der vises indlæg. Det første er et billede der er tilknyttet den rang du som tilmeldt bruger har på boardet, normalt udformet som stjerner eller kasser som indikerer hvor mange indlæg du har skrevet eller din stilling i boardet. Det andet, normalt et større billede, er kendt som en avatar og er sædvanligvis unikt og personligt for hver bruger. Det er bordadministrator der skal slå muligheden for avatars til og vælge på hvilken måde muligheden skal gøres tilgængelig. Hvis du ikke er i stand til at bruge avatars, kontakt da venligst en  boardadministrator og bed om en grund til dette.'
	),
	array(
		0 => 'Hvad er min rang og hvordan ændrer jeg den?',
		1 => 'Rang, som vises under dit brugernavn, indikerer antal indlæg du har skrevet og identificerer særlige brugere, for eksempel redaktører og administratorer. Sædvanligvis kan du ikke direkte ændre teksten for nogen rang, da de er indstillet af en boardadministrator. Misbrug venligst ikke boardet ved at skrive unødvendige indlæg blot for at forøge din rang. De fleste boards vil ikke tolerere dette, og en redaktør eller administrator vil simpelthen formindske dit antal indlæg.'
	),
	array(
		0 => 'Når jeg klikker på en brugers email, bliver jeg bedt om at logge ind?',
		1 => 'Kun tilmeldte brugere kan sende emails via det indbyggede emailsystem, og kun hvis en administrator har slået denne funktion til. Dette er for at forhindre gæster i at misbruge emailsystemet.'
	),
	array(
		0 => '--',
		1 => 'Skrive et indlæg'
	),
	array(
		0 => 'Hvordan skriver jeg et nyt emne i et forum?',
		1 => 'For at skrive et emne i et forum klikker du på den relevante knap på forum- eller emnesiden. Det kan være det er nødvendigt at tilmelde sig som bruger før du kan skrive et nyt indlæg. Dine tilladelser i hvert forum vises altid i bunden af forum- og emnesiden (<em>Du kan skrive nye emner, Du kan stemme på afstemninger i dette forum osv.</em>)'
	),
	array(
		0 => 'Hvordan redigerer eller sletter jeg et indlæg?',
		1 => 'Med mindre du er boardets administrator eller forummets redaktør, så kan du kun redigere dine egne indlæg. Du kan redigere et indlæg, nogle gange kun i et begrænset tidsrum efter det er skrevet, ved at klikke på <em>redigér</em> knappen ud for det rette indlæg. Hvis der allerede er svaret på dit indlæg, bliver der indsat en bemærkning nederst i indlægget om hvornår og hvor mange gange du har redigeret. Denne bemærkning indsættes kun, hvis indlægget er blevet besvaret eller hvis det er administratorer eller redaktører der redigerer. De kan skrive i indlægget, hvad de har redigeret og hvorfor. Vær opmærksom på, at almindelige brugere ikke kan slette et indlæg, når først der er blevet svaret på det.'
	),
	array(
		0 => 'Hvordan tilføjer jeg en signatur til mine indlæg?',
		1 => 'For et tilføje en signatur i et indlæg, skal du først oprette en signatur i bruger kontrolpanelet under din profil. Når den er oprettet, kan du markere boksen <em>Tilføj signatur</em> når du skriver indlægget. Du kan også vælge at der altid skal tilføjes en signatur til dine indlæg, ved at gå ind i <em>Redigér skriveindstillinger</em> og vælge at signaturen skal tilføjes som standard. Hvis du gør dette, kan du stadig undgå at din signatur medtages i et specifikt indlæg ved at fravælge <em>Tilføj signatur</em> inden du indsender indlægget.'
	),
	array(
		0 => 'Hvordan opretter jeg en afstemning?',
		1 => 'Når du skriver et nyt emne (eller hvis du har tilladelse: retter i det første indlæg i et emne) findes, lige under feltet hvor selve indlægget skrives, fanebladet "Tilføj en afstemning". Hvis du ikke kan se dette, er det sandsynligvis fordi du ikke har tilladelse til at oprette en afstemning. Her skal du angive en overskrift som beskriver afstemningen, og mindst to valgmuligheder i tekstfeltet (det maksimale antal afstemningsmuliheder er fastsat af boardadministratoren). Hver afstemningsmulighed indtastes på en linie for sig, og lige under defineres hvor mange af disse, der kan vælges. Desuden kan du bestemme i hvor lang tid afstemningen skal køre. Hvis du ikke angiver et tidsrum eller skriver 0, fortsætter afstemningen, og du kan bestemme om brugere skal have mulighed for at ændre deres stemme.'
	),
	array(
		0 => 'Hvordan retter eller sletter jeg en afstemning?',
		1 => 'Ligesom med andre emneindlæg, kan afstemninger kun rettes af den person som oprindeligt oprettede afstemningen, eller af en administrator eller redaktør af forummet. For at rette i en afstemning (teksten), klik da på det første indlæg i afstemningen (Det er altid dette indlæg, som har afstemningen tilknyttet). Såfremt der ikke er afgivet nogen stemmer, kan der rettes og slettes i afstemningsmulighederne. Hvis der derimod er blevet afgivet stemmer er det kun forummets redaktører og administratorer, der kan rette eller slette en afstemning. Dette er for at forhindre at folk kan manipulere med resultatet ved at ændre i betydningen halvvejs inde i afstemningen.'
	),
		array(
		0 => 'Hvorfor kan jeg ikke tilføje flere afstemningsmuligheder?',
		1 => 'Det maksimale antal afstemningsmuligheder er indstillet af boardadministrator. Hvis du føller du har behov for at tilføje flere afstemningsmuligheder til din afstemning end tilladt, kontakt da venligst en boardadministrator.'
	),
	array(
		0 => 'Hvorfor kan jeg ikke få adgang til et forum?',
		1 => 'Nogle fora kan være begrænsede til udvalgte brugere eller grupper. For at læse og skrive i disse kræves specielle tilladelser. Kun forummets redaktører eller en board administrator kan give disse tilladelser. Du bør kontakte én af disse, hvis du mener at du bør have denne tilladelse.'
	),
	array(
		0 => 'Hvorfor kan jeg ikke vedhæfte en fil?',
		1 => 'Muligheden for at vedhæfte filer kan tillades pr. forum, pr. brugergruppe, eller for hver enkelt bruger. Boardadministratoren kan have udeladt muligheden for at vedhæfte filer i det specifikke forum du skriver indlæg i, eller måske er det kun administratorgruppen der har denne mulighed. Kontakt administratoren hvis du stadig er usikker på hvorfor du ikke kan vedhæfte filer.'
	),
	array(
		0 => 'Hvorfor modtog jeg en advarsel?',
		1 => 'Hver boardadministrator har sit eget regelsæt for sin hjemmeside. Hvis du har overtrådt én af disse regler, kan der udstedes en advarsel til dig. Bemærk venligst at det er administratorens beslutning, og at phpBB Group intet har at gøre med en advarsel udstedt fra et givent board. Kontakt venligst en boardadministrator hvis du er usikker på hvorfor du har modtaget en advarsel.'
	),
	array(
		0 => 'Hvordan rapporterer jeg indlæg til en redaktør?',
		1 => 'Hvis boardadministratoren har tilladt det, kan du gå til det indlæg du ønsker at rapportere, og du vil på siden kunne se en knap som er beregnet til at rapportere indlægget. Ved at klikke på denne, vil du blive ledt gennem de nødvendige trin i forbindelse med rapporteringen.'
	),
	array(
		0 => 'Hvad kan "Gem" knappen, når jeg skriver et indlæg, bruges til?',
		1 => 'Den giver dig mulighed for at gemme og dermed færdiggøre dit indlæg på et senere tidspunkt. For at få adgang til det eller de gemte, men ikke indsendte, indlæg senere, skal du gå til dit bruger kontrolpanel.'
	),
	array(
		0 => 'Hvorfor skal mit indlæg godkendes?',
		1 => 'Boardadministratoren kan beslutte at det forum du skriver til, skal have alle indlæg gennemset og godkendt inden de offentliggøres. Der er også mulighed for at administratoren har placeret dig i en speciel gruppe af brugere, som han eller hun mener skal have indlæg gennemset og godkendt, inden de offentliggøres. Kontakt eventuelt venligst en administrator for yderligere information.'
	),
	array(
		0 => 'Hvordan får jeg placeret mit emne øverst?',
		1 => 'Ved at klikke på linket "Placér øverst" når du læser dit emne, kan du flytte emnet til toppen af forummet på den første side. Hvis du ikke kan se linket, kan det skyldes at denne mulighed er slået fra eller at det mindst tilladte tidsrum for at kunne placere øverst endnu ikke er forløbet. Du kan også flytte emnet øverst ved simpelthen at skrive et svar i emnet. Men følg boardets reglerne herfor, når du gør dette.'
	),
	array(	
		0 => '--',
		1 => 'Formatering og emnetyper'
	),
	array(
		0 => 'Hvad er BBkoder?',
		1 => 'BBkoder er en speciel form for HTML, der giver dig formateringskontrol over visse dele af et indlæg. Om du kan bruge BBkoder er noget administratoren af boardet afgør. Du kan også fjerne muligheden for dette pr. emne. BBkoder skrives på samme måde som HTML, hvor teksten omsluttes af en start- og et sluttag, koderne er omsluttet af hak parenteser [ og ] i stedet for &lt; og &gt; og de tilbyder større kontrol over hvad og hvordan teksten præsenteres. For at få mere information om BBkoder, se da venligst hjælpen som kan ses når du skriver et indlæg.'
	),
	array(
		0 => 'Kan jeg bruge HTML?',
		1 => 'Nej. Det er ikke muligt at skrive HTML-kode til dette board og få det vist som HTML. Det meste af den formatering, der kan udføres med HTML, kan også udføres ved at anvende BBkode i stedet.'
	),
	array(
		0 => 'Hvad er smilies?',
		1 => 'Smilies, er små grafiske ikoner - eller billeder, som kan benyttes til at signalere bestemte følelser. De bruges via en kort tekstkode, f.eks. :) betyder glad, :( betyder ked af det. Den komplette liste over alle smilies kan ses når der skrives et nyt indlæg. Bemærk at det ikke er god tone at overdrive brugen smilies. De kan hurtigt gøre et indlæg uoverskueligt, og en redaktør eller administrator kan beslutte at fjerne dem med hård hånd, måske endda selve indlægget. Boardadministratoren kan også have sat et maksimum for antallet af smilies pr. indlæg.'
	),
	array(
		0 => 'Kan jeg få vist et billede i mit indlæg?',
		1 => 'Ja, det kan du. Hvis administratoren har tilladt vedhæftede filer, kan du uploade billedet til boardet. Ellers kan være nødvendigt med et link til en anden hjemmeside (komplet URL) hvor billedet altid kan hentes fra, en komplet URL kan f.eks. se ud som http://www.et-eller-andet-sted.dk/billeder/mit-billede.gif. Du kan ikke henvise til billeder på din egen maskine (medmindre disse er på en server der altid er forbundet med Internettet). Ej heller billeder gemt bag loginfunktioner, f.eks. hotmail-/yahoo-postkasser eller andre kodeordsbeskyttede steder. For at vise et billede skal du anvende BBkode [img].'
	),
	array(
		0 => 'Hvad er globale bekendtgørelser?',
		1 => 'Globale bekendtgørelser indeholder vigtige informationer, og du bør læse dem når muligt. Globale bekendtgørelser vises i toppen af hvert forum og tillige i dit bruger kontrolpanel. Om det er muligt for dig at skrive en global bekendtgørelse afgøres udfra de tilladelser som du har, disse er fastsat af en administrator.'
	),
	array(	
		0 => 'Hvad er bekendtgørelser?',
		1 => 'Bekendtgørelser indeholder typisk vigtige meddelelser angående forummet, og du bør læse dem når muligt. Bekendtgørelser vises altid på toppen af alle sider i det forum de er skrevet til. Om det er muligt for dig at skrive en bekendtgørelse afgøres udfra de tilladelser som du har, disse er fastsat af en administrator.'
	),
	array(
		0 => 'Hvad er opslag?',
		1 => 'Opslag er indlæg som altid vises lige under bekendtgørelserne i et forum, til forskel fra bekendtgørelserne vises opslag kun på den første side. De er ofte også temmelig vigtige, og du bør læse dem, når du har mulighed for det. Ligesom med bekendtgørelser er det boardets administrator, der fastsætter de nødvendige tilladelser for at kunne skrive et opslag i et forum.'
	),
	array(
		0 => 'Hvad er låste emner?',
		1 => 'Låste emner er sat således enten af en administrator eller af en redaktør. Du kan ikke svare på indlæg i sådan et emne, og eventuelle afstemninger vil ligeledes være afsluttede. Emnet kan være blevet låst af mange årsager af en administrator eller redaktør. Du kan også have mulighed for at låse dine egne emner, afhængig af de tilladelser administratoren har tildelt dig.'
	),
	array(
		0 => 'Hvad er emneikoner?',
		1 => 'Emneikoner er små billeder som kan tilknyttes et indlæg for at indikere indholdet i emnet. Muligheden for at anvende emneikonerne afhænger af de tilladelser administratoren har defineret.'
	),
	array(
		0 => '--',
		1 => 'Brugerniveauer og -grupper'
	),
	array(
		0 => 'Hvad er administratorer?',
		1 => 'Administratorer er de personer der er tildelt det højeste trin af indstillingsmuligheder omkring alle fora på boardet. Disse personer kan, afhængig af hvad boardets grundlægger har givet administratorerne tilladelse til, indstille alle mulige ting om foraene, såsom tilladelser, udelukkelse af bestemte brugere, tilføje brugergrupper eller redaktører osv. De har også samme rettigheder som redaktører under alle fora.'
	),
	array(
		0 => 'Hvad er redaktører?',
		1 => 'Redaktører er udpegede personer (eller grupper af personer) hvis job er at holde øje med driften af foraene fra dag til dag. De har retten til at rette eller slette andres indlæg, låse et emne eller låse et emne op igen, flytte eller dele et emne i forummet som de er redaktører for. I almindelighed er redaktørens opgave at forhindre at folk skriver indlæg som <em>ikke hører hjemme under emnet</em> eller hvis de skriver absurde eller andre aggressive ting.'
	),
	array(
		0 => 'Hvad er brugergrupper?',
		1 => 'Brugergrupper anvendes af boardets administratorer til at opdele brugere i overskuelige grupper. En bruger kan være medlem af flere grupper og hver gruppe kan tildeles individuelle tilladelser. Det gør det enkelt for administratorerne at ændre tilladelser for mange brugere samtidig, som at tildele redaktørtilladelser i et bestemt forum, eller til give brugere adgang til private fora.'
	),
	array(
		0 => 'Hvordan finder jeg brugergrupperne og hvordan tilmelder jeg mig?',
		1 => 'I bruger kontrolpanelet finder du en samlet oversigt under fanebladet "brugergrupper". Ønsker du at tilmelde dig én af disse, klikker du på den rette knap. Imidlertid er ikke alle grupper åbne, nogle kræver godkendelse, andre er lukkede og andre kan desuden have skjulte medlemmerne. Hvis gruppen er en åben, kan du tilmelde dig ved at klikke dig frem. Hvis tilmelding til en gruppe kræver godkendelse, skal gruppelederen godkende din tilmelding og vedkommende ønsker måske en begrundelse for dit ønske om at tilmelde dig gruppen. Plag ikke lederen hvis din ansøgning ikke bliver godkendt, vedkommende har nok sine grunde.'
	),
	array(
		0 => 'Hvordan bliver jeg leder af en gruppe?',
		1 => 'Lederen af en brugergruppe udpeges normalt ved oprettelsen af gruppen af en boardadministrator. Hvis du er interesseret i at få oprettet en brugergruppe, skal du som det første kontakte en administrator; forsøg at sende en privat besked.'
	),
	array(
		0 => 'Hvorfor vises nogle brugergrupper med en anden farve?',
		1 => 'Boardadministratoren kan vælge at tilknytte en bestemt farve til medlemmerne af en brugergruppe, for at gøre det enklere at identificere medlemmerne af denne gruppe.'
	),
	array(
		0 => 'Hvad er "Standard brugergruppe"?',
		1 => 'Hvis du er medlem af mere end én brugergruppe, vil din standard brugergruppe blive brugt til at bestemme hvilken gruppefarve og rang der vises for dig. En boardadministrator kan give dig tilladelse til at ændre din standardbrugergruppe i bruger kontrolpanelet.'
	),
	array(
		0 => 'Hvad viser linket til "Holdet"?',
		1 => 'Siden viser dig brugernavnene på personerne bag dette board, hvem der er administratorer, redaktører og hvilke fora de hver især redigerer.'
	),
	array(
		0 => '--',
		1 => 'Private beskeder'
	),
	array(
		0 => 'Jeg kan ikke sende private beskeder!',
		1 => 'Der er 3 muligheder; du er ikke tilmeldt og/eller ikke logget ind, en boardadministrator har generelt slået private beskeder fra på dette board eller har specifikt fjernet denne mulighed for dig. Kontakt boardadministration for mere information.'
	),
	array(
		0 => 'Jeg bliver ved med at få uønskede private beskeder!',
		1 => 'I bruger kontrolpanelet kan du blokere en brugers mulighed for at sende dig private beskeder. Hvis du modtager grove eller generende beskeder fra en bestemt burger, kan du informere administratorerne; de kan lukke for brugeres mulighed for at sende private beskeder.'
	),
	array(
		0 => 'Jeg har modtaget en email, indeholdende spam eller en fornærmelse, fra en bruger på dette board!',
		1 => 'Vi er meget kede af at høre dette. Dette boards emailsystem har indbygget sikkerhedsforanstaltninger, som hjælper med til at identificere brugere, der sender den slags indhold. Du bør sende en kopi af emailen til dette boards administrator. Der er meget vigtigt at denne indeholder den såkaldte header, som indeholder detaljer om brugeren der afsendte emailen. Boardadministratoren kan herefter vurdere evt. sanktioner.'
	),
	array(
		0 => '--',
		1 => 'Venner og ignorede brugere'
	),
	array(
		0 => 'Hvad indeholder listerne "Venner og ignorede brugere"?',
		1 => 'Du kan bruge listerne til at organisere andre brugere af boardet. Brugere på din venneliste bliver listet i bruger kontrolpanelet, så du hurtigt kan se deres online status og sende dem private beskeder. Afhængig af om boardets skabelon understøtter dette, vil indlæg fra disse brugere også blive fremhævet. Hvis du vælger at ignorere en bruger, vil alle indlæg fra denne som standard blive skjult for dig.'
	),
	array(
		0 => 'Hvordan tilføjer og fjerner jeg brugere på mine lister over venner og ignorerede brugere?',
		1 => 'Du kan tilføje brugere til listerne på to måder. I hver brugers profil findes et link som kan bruges, enten til at tilføje brugeren til din venneliste, eller til listen over ignorerede brugere. Alternativt kan du i bruger kontrolpanelet, tilføje brugere direkte ved at angive brugernavne. Her kan du også fjerne brugere fra dine lister.'
	),
	array(
		0 => '--',
		1 => 'Søgning i boardet'
	),
	array(
		0 => 'Hvordan søger jeg i boardet?',
		1 => 'Ved at angive en søgestreng i søgeboksen, som afhængig af boardets typografi, normalt findes øverst på siden. Du får adgang til den avancerede søgning ved at at klikke på "Avanceret søgning" lige under førnævnte boks.'
	),
	array(
		0 => 'Hvorfor giver min søgning ingen resultater?',
		1 => 'Din søgning var formentlig for bred og indeholdt sikkert mange almindelige ord, som ikke indekseres af phpBB3. Prøv at søg mere specifikt og brug muligheder i den avancerede søgning.'
	),
	array(
		0 => 'Hvorfor returnerer min søgning en blank side!?',
		1 => 'Din søgning returnerede for mange resultater til at webserveren kunne håndtere visningen. Brug den avancerede søgning og prøv at være mere specifik i søgningen og i hvilke fora der skal søges.'
	),
	array(
		0 => 'Hvordan søger jeg efter brugere?',
		1 => 'Brug linket "Tilmeldte brugere" øverst på siden og klik herefter på "Find en tilmeldt bruger".'
	),
	array(
		0 => 'Hvor kan jeg finde alle mine indlæg og emner?',
		1 => 'Dine egne indlæg kan listes ved at klikke på "Vis dine indlæg" i bruger kontrolpanelet eller via din egen profil side. For at søge dine emner bruges den avancerede søgning og udfyld de relevante søgekriterier i overenstemmelse hermed.'
	),
	array(
		0 => '--',
		1 => 'Emne overvågning og bogmærker'
	),
	array(
		0 => 'Hvad er forskellen på at bogmærke og på at overvåge?',
		1 => 'Bogmærker i phpBB3 er at sammenligne med bogmærker i din webbrowser. Du får ikke nødvendigvis en advisering når der er foretaget en opdatering, men du kan bruge bogmærket til nemt at finde tilbage til emnet senere. Hvis du vælger at overvåge et emne, vil du derimod modtage en advisering hvis der foretages en opdatering i et emne eller et forum med den metode du foretrækker.'
	),
	array(
		0 => 'Hvordan overvåger jeg specifikke fora eller emner?',
		1 => 'For at overvåge et bestemt forum, kan du, når du er i forummet, se et "Overvåg forum" link. Ved klikke på linket aktiverer du overvågning af hele forummet. For at overvåge emne, kan du enten når du skriver indlæg i emnet, vælge at vinge checkboksen "Send mig en email når der skrives et svar" af, eller klikke på linket "Overvåg emne" i selve emnet.'
	),
	array(
		0 => 'Hvordan fjerner jeg mine overvågninger?',
		1 => 'Du kan fjerne overvågninger fra dit bruger kontrolpanel ved at følge linket til dine overvågninger. Emne overvågninger kan også fjernes når du læser indlæg i disse.'
	),
	array(
		0 => '--',
		1 => 'Vedhæftede filer'
	),
	array(
		0 => 'Hvilke filtyper er det tilladt at vedhæfte på dette board?',
		1 => 'En boardadministrator kan tillade og forbyde bestemte filtyper. Hvis du er usikker på hvilke typer der kan uploades, kan du kontakte boardadministratoren.'
	),
	array(
		0 => 'Hvordan ser jeg alle mine vedhæftede filer?',
		1 => 'Via bruger kontrolpanelet kan du følge linket til vedhæftede filer, for at få en samlet liste over de filer du har uploadet.'
	),
	array(
		0 => '--',
		1 => 'phpBB3 spørgsmål'
	),
	array(
		0 => 'Hvem har skrevet koden til dette board?',
		1 => 'Denne software (i sin umodificerede udgave) er udviklet, frigivet og copyright <a href="http://www.phpbb.com/">phpBB Group</a>. Den er offentligt tilgængelig under den GNU General Public License og kan frit distribueres. Klik på linket nederst på siden for yderligere information.'
	),
	array(
		0 => 'Hvorfor er X funktioner ikke til stede?',
		1 => 'Denne software er udviklet og stillet til rådighed på licens af phpBB Group. Hvis du mener der er en funktion der mangler, besøg venligst hjemmesiden phpbb.com og undersøg hvad phpBB Group har at sige om den. Vær venlig ikke at at indsende ønsker om nye funktioner til dette board, phpBB Group benytter SourceForge til at organisere nye tiltag. Læs venligst gennem foraene for at se om vi allerede har den ønskede funktion under overvejelse eller i udvikling og følg derefter den dér anviste procedure.'
	),
	array(
		0 => 'Hvem kontakter jeg vedr. misbrug og/eller lovligheden af indlæg skrevet til dette board?',
		1 => 'Du kan kontakte enhver af administratorerne anført på siden "Holdet". Hvis du ikke får nogen tilbagemelding, kan du forsøge at kontakte ejeren af domænet (udfør en <a href="http://www.google.com/search?q=whois">whois søgning</a>). Hvis boardet afvikles hos én af de mange gratis services: Yahoo!, ofir.dk, free.fr, f2s.com m.fl., bør du kontakte den pågældende udbyders kundekontor eller misbrugsafdeling. Vær venligst opmærksom på at phpBB Group <strong>absolut ingen kontrol</strong> har over indholdet, og ej heller kan holdes ansvarlige for hvordan, hvor eller af hvem dette board bliver benyttet. Kontakt derfor ikke phpBB Group i forbindelse med eventuelle ulovligheder, eller for at få stoppet uansvarlige brugere eller æreskrænkende indlæg, hvis disse <strong>ikke har direkte forbindelse</strong> med hjemmesiden www.phpbb.com eller funktionen af softwaren phpBB. Hvis du sender en email til phpBB Group angående <strong>enhver tredjeparts</strong> brug af denne software, kan du forvente et kort eller slet intet svar.'
	)
);

?>