<?php
/** 
*
* help_faq [Finnish [Fin]]
*
* @package language
* @copyright (c) 2006 phpBB Group 
* @author 2006-11-14 - Lurttinen@phpbbsuomi.com
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
		1 => 'Kirjautumisen ja rekisteröitymisen ongelmat'
	),
	array(
		0 => 'Miksi en voi kirjautua sisään?',
		1 => 'Tämä voi johtua monestakin syystä. Ensimmäiseksi, tarkista, että käyttäjätunnuksesi ja salasanasi ovat kirjoitettu oikein. Mikäli nämä ovat oikein, ota yhteyttä keskustelufoorumin ylläpitoon varmistaaksesi, että et ole porttikiellossa. On myös mahdollista, että nettisivun omistajalla on konfigurointivirhe heidän puolellaan, joka vaatii korjausta.'
	),
	array(
		0 => 'Miksi minun täytyy rekisteröityä?',
		1 => 'Sinun ei välttämättä tarvitse. Se on keskustelufoorumin ylläpitäjistä kiinni sallivatko he rekisteröitymättömien käyttäjien lähettää viestejä. Mutta kuitenkin. Rekisteröityminen antaa muitakin toimintoja käyttöösi, jotka eivät ole sallittuja vieraille, kuten Avatar-kuvan määrittäminen, yksityisviestit, sähköpostin lähetys muille käyttäjille, käytäjäryhmät, jne... Rekisteröityminen vie vain pienen hetken ja se on suositeltavaa.'
	),
	array(
		0 => 'Miksi kirjaudun ulos automaattisesti?',
		1 => 'Mikäli et valitse <em>Kirjaudu automaattisesti sisään jokaisella käynnillä</em> rastia keskustelufoorumi pitää käyttäjätunnuksesi kirjautuneena vain ennalta määritellyn ajan. Tällä estetään muita henkilöitä käyttämästä tunnuksiasi. Mikäli haluat pysyä kirjautuneena laita rasti ruutuun kirjautuessassi sisään. Tätä ei kuitenkaan suositella käytettäväksi, jos käytät julkisessa käytössä olevaa tietokonetta. Kuten esimerkiksi kirjastossa, nettikahvilassa, koulussa, jne... Mikäli et näe tätä ruutua se tarkoittaa, että keskustelufoorumin ylläpitäjä on ottanut tämän toiminnon pois käytöstä.'
	),
	array(
		0 => 'Kuinka estän käyttäjänimeni näkymästä paikallaolijoiden listassa?',
		1 => 'Omassa profiilissasi löytyy asetus <em>Piilota paikallaolo</em>. Mikäli laitat tämän asetuksen kohtaan <em>päällä</em>. Näkymisesi rajoittuu vain ylläpitäjiin, valvojiin ja itsellesi. Sinut lasketaan tällöin piilotettujen käyttäjien lukumäärässä.'
	),
	array(
		0 => 'Kadotin salasanani!',
		1 => 'Älä hätäile! Vaikka salasanaasi ei voidakaan palauttaa. Se voidaan asettaa uusiksi. Tehdäksesi tämän. Mene kirjautumissivulle ja napsauta <em>Unohdin salasanan</em> linkkiä. Seuraa ohjeita ja pääset pian kirjautumaan sisään.'
	),
	array(
		0 => 'Olen rekisteröitynyt, mutta en voi kirjautua sisään!',
		1 => 'Ihan ensimmäiseksi tarkista, että kirjoitat varmasti oikean käyttäjätunnuksen ja salasanan. Mikäli nämä ovat kunnossa on mahdollista, että jompikumpi kahdesta asiasta on tapahtunut. Mikäli COPPA-tuki on päällä ja <em>olet rekisteröitynyt alle kolmetoistavuotiaana</em>. Sinun tulee noudattaa saamiasi ohjeita. Mikäli tämä ei auttanut. Oletko varma, etteivät käyttäjätunnuksesi vaadi aktivointia? Useat keskustelufoorumit vaativat käyttäjätunnusten aktivoinnin uusilta käyttäjiltä joko itse suoritettuna tai ylläpidon toimesta ennen kuin voit kirjautua sisään. Kun rekisteröidyit. Siellä oli ohjeet mukana aktivoinnista ja kuinka se tulee suorittaa. Mikäli sait sähköpostia, noudata siinä tulleita ohjeita. Mikäli et saanut sähköpostia. Oletko varma, että annoit toimivan sähköpostiosoitteen? Yksi syy aktivoinnin vaatimiseen on vähentää <em>villejä</em> käyttäjiä käyttämästä anonyymisti hyväkseen keskustelufoorumia. Mikäli olet varma, että annoit toimivan sähköpostiosoitteen, olet tarkistanut, että laatikkosi ei ole täynnä ja myös roskapostikansion. Ota yhteyttä keskustelufoorumin ylläpitäjiin.'
	),
	array(
		0 => 'Olen rekisteröitynyt joskus, mutta en pääse enään kirjautumaan?!',
		1 => 'Todennäköisimmät syyt tähän ovat; Annoit väärän käyttäjätunnuksen tai salasanan (Tarkista nämä tiedot rekisteröitymisen yhteydessä saamastasi sähköpostiviestistä) tai ylläpitäjä on poistanut jostain syystä käyttäjätunnuksesi. Mikäli jälkimmäinen on syy. Et ehkä kirjoittanut tarpeeksi viestejä? On normaalia, että ylläpitäjät poistavat tällaisia käyttäjiä pienentääkseen tietokannan kokoa. Rekisteröidy uudelleen ja ota aktiivisemmin osaa keskusteluihin.'
	),
	array(
		0 => 'Mikä on COPPA?',
		1 => 'COPPA, tai "Child Online Privacy and Protection Act" vuodelta 1998 on Yhdysvaltojen laki nettisivuille, jotka keräävät henkilökohtaisia tietoja alle kolmetoistavuotiailta. Vaatimuksena on saada lapsen vanhemmilta tai huoltajalta kirjoitettu lupa tallentaa lapsensa henkilökohtaisia tietoja omaan järjestelmäänsä. Mikäli olet epävarma kuinka tämän kanssa tulee toimia, Ota yhteyttä paikalliseen lakimieheen saadaksesi neuvoja. Huomaa, että phpBB tiimi ei voi tarjota lakiapua tässä asiassa ja heihin ei tule ottaa yteyttä muutenkuin tietyissä tapauksissa, joista on lisää alempana.',
	),
	array(
		0 => 'Miksi en voi rekisteröityä?',
		1 => 'Nettisivuston omistaja on voinut antaa porttikiellon IP-osoitteellesi tai estänyt tietyn nimen käyttämisen käyttäjätunnuksissa. Nettisivun omistaja on myös voinut ottaa rekisteröitymisen kokonaan pois käytöstä. Ota yhteys keskustelufoorumin ylläpitäjiin saadaksesi lisää tietoa.',
	),
	array(
		0 => 'Mitä “Poista evästeet” tekee?',
		1 => 'Poista evästeet-linkki poistaa phpBB3 luomat evästeet, jotka pitävät huolen tunnistautmisestasi, kirjautumisestasi sisään ja myös pitää kirjaa luetuista viesteistä mikäli ylläpitäjä on näin määritellyt.',
	),
	array(
		0 => '--',
		1 => 'Käyttäjän asetukset'
	),
	array(
		0 => 'Kuinka vaihdan asetuksiani?',
		1 => 'Kaikki asetuksesi (Jos olet rekisteröitynyt) on tallennettu tietokantaan. Muuttaaksesi näitä tietoja klikkaa <em>Omat asetukset</em> Linkkiä. (Näkyy yleensä sivun yläreunassa) Täällä voit muokata asetuksiasi.'
	),
	array(
		0 => 'Kellonaika on väärin!',
		1 => 'Vaikka palvelimen kello saattaa olla joskus väärässä ajassa. Todennäköisesti näytettävä aika on oikein. Keskustelufoorumilla näkyvä aika saatetaan näyttää eri aikavyöhykkeen mukaan, kuin se missä sinä olet. Mikäli tämä on se syy. Sinun tulee muuttaa aikavyöhykkeen asetuksia omasta profiilistasi. Huomaa, että aikavyöhykkeen vaihto, kuten suurin osa muistakin asetuksista on tarjolla vain rekisteröityneille käyttäjille. Joten jos et ole jo rekisteröitynyt. Nyt voisi olla hyvä tilaisuus!'
	),
	array(
		0 => 'Vaihdoin aikavyöhykettä, mutta kello on silti väärin!',
		1 => 'Mikäli vaihdoit aikavyöhykkeen varmasti oikeaksi. Todennäköisin syy on päivänvalon säästöajassa (tai tuttavallisemmin kesäaika, joka on yleisesti käytössä suomessa). Keskustelufoorumia ei ole suuniteltu vaihtamaan tuota aikaa automaattisesti, joten kesällä tuo aika voi heittää tunnilla normaaliin aikaan verrattuna.'
	),
	array(
		0 => 'Kieltäni ei näy luettelossa!',
		1 => 'Todennäköisin syy on se, että yläpitäjä ei ole asentanut kielipakettia  tai kukaan ei ole vielä kääntänyt sitä sinun kielelle. Kysy ylläpitäjiltä, josko he voisivat asentaa haluamasi kielen. Mikäli käännöstä ei ole olemassa. Voit vapaasti kääntää sen myös itse. Lisätietoja tästä saat phpBB Ryhmän nettisivuilta (Katso sivun alapuolella olevaa linkkiä).'
	),
	array(
		0 => 'Kuinka näytän kuvan käyttäjätunnukseni alapuolella?',
		1 => 'Käyttäjätunnuksesi alapuolella voi olla kaksi kuvaa Ensimmäinen liittyy arvoosi. Yleensä nämä ovat tähtiä tai joitain palikoita, jotka muuttuvat sitä muka, kuin kirjoitustesi määrää kasvaa tai minkä statuksen ylläpito on sinulle antanut. Alapuolella voi olla suurempi kuva, joka tunnetaan Avatar-kuvana. Tämä kuva on yleensä uniikki ja käyttäjän henkilökohtainen kuva. Keskustelufoorumin ylläpitäjä määrää ovatko avatarit käytössä ja mitkä voivat olla käytössä. Mikäli et voi käyttää avataria. Sinun kannattaa kysyä ylläpitäjiltä syy.'
	),
	array(
		0 => 'Kuinka vaihdan arvoani?',
		1 => 'Yleensä et voi suoraan vaihtaa mitä arvonasi lukee. (Arvonimet näkyvät yleensä viestien vieressä riippuen käytössä olevasta tyylistä) Useimmat keskustelufoorumit näyttävät arvonimiä osoittamaan käyttäjän kirjoittamien viestien määrää ja erottavat tietyt käyttäjät toisistaaan. Esimerkiksi valvojat ja ylläpitäjät voivat käyttää erikoista arvonimeä. Älä kirjoita viestiä vain nostaaksesi arvoasi. Todennäköisesti huomaat vain viestiesi määrän vähentyneen ylläpidon toimesta.'
	),
	array(
		0 => 'Joudun kirjautumaan sisään, kun yritän lähettää sähköpostia?',
		1 => 'Vain rekisteröityneet käyttäjät voivat lähettää sähköpostiviestejä sisäänrakennetun sähköpostiohjelman avulla (Mikäli ylläpito sallii tämän toiminnon). Tällä estetään roskapostittajien toimintaa.'
	),
	array(
		0 => '--',
		1 => 'Viestin lähetyksen ongelmat'
	),
	array(
		0 => 'Kuinka lähetän viestin keskustelufoorumille?',
		1 => 'Lähettääksesi uuden viestin. Klikkaa asiaan kuuluvaa nappulaa. Saatat joutua kirjautumaan sisään ennen kuin voit lähettää viestin. Mitä voit tehdä alueilla on lueteltuna sivun alalaidassa. (<em>Voit lähettää viestejä, Voit äänestää, jne.</em>) lista.'
	),
	array(
		0 => 'Kuinka muokkaan tai poista viestin?',
		1 => 'Mikäli et ole keskustelufoorumin ylläpitäjä tai valvoja. Voit muokata ja poistaa vain omia viestejäsi. Voit muokata viestiäsi (Joskus vain rajoitetun ajan sen luomisen jälkeen) Klikkaamalla <em>Muokkaa</em> nappulaa valitsemastasi viestistä. Mikäli joku on jo vastannut viestiisi. Siihen lisätään pieni teksti osoittamaan muokkauksen tapahtuneen, kun palaat lukemaan viestiä. Tässä on mukana myös lukumäärä, kuinka monta kertaa olet muokannut viestiä. Tämä näkyy vain, jos viestiin on jo vastattu ja se ei näy, jos valvoja tai ylläpitäjä muokkaa viestiä. (Heidän pitää itse jättää syy mitä on muokattu ja miksi). Huomaa, että normaali käyttäjä ei voi poistaa viestiä, jos siihen on vastattu.'
	),
	array(
		0 => 'Kuinka lisään allekirjoutksen?',
		1 => 'Luo allekirjoitus käyttääksesi sitä. Voit tehdä tämän omissa asetuksissasi. Kun olet luonut allekirjoituksen. Voit valita <em>Lisää allekirjoitus</em> ruudun kirjoittaessasi viestiä. Voit asettaa allekirjoituksen lisättäväksi automaattisesti kaikkiin viesteihisi valitsemalla siihen sopivan vaihtoehdon omista asetuksistasi. (Voit kuitenkin estää allekirjoituksen näkymisen viestikohtaisesti poistamalla rastin allekirjoituksesta, kun kirjoitat uutta viestiä)'
	),
	array(
		0 => 'Kuinka luon äänestyksen?',
		1 => 'Äänestyksen luominen on helppoa. Kun olet kirjoittamassa viestiä (Tai muokkaat viestiketjun ensimmäistä viestiä) näet valikossa kohdan <em>Lisää äänestys</em>. (Mikäli tätä ei ole. oikeutesi eivät todennäköisesti riitä äänsetyksen luomiseen) Sinun tulee antaa äänestykselle otsikko ja vähintään kaksi vaihtoehtoa Lisää kaikki vaihtoehdot omille riveillensä. Voit myös antaa aikarajan, jolloin äänestys päättyy. Änestys ei pääty koskaan, mikäli asetat ajaksi 0. Vaihtoehtojen määrä voi olla myös rajoitettu ja se riippuu keskustelufoorumin ylläpidosta.'
	),
	array(
		0 => 'Kuinka muokkaan tai poistan äänestyksen?',
		1 => 'Kuten viestitkin. Äänestystä voi muokata vain sen alkuperäinen luoja, valvoja tai ylläpitäjä. Muokataksesi äänestystä sinun täytyy muokata viestiketjun ensimmäistä viestiä. Äänestys on aina tämän viestin yhteydessä. Mikäli kukaan ei ole äänestänyt. Voit muokata äänestystä vapaasti, mutta jos joku on jo äänestänyt. Et voi muokata vaihtoehtoja. Tällöin vain valvojat ja ylläpitäjät voivat muokata tai poistaa sen. Tällä pyritään estämään äänestyksen peukaloiminen ja äänestystuosten väärentäminen, kun äänestys on vielä voimassa.'
	),
	array(
		0 => 'Miksi en pääse tietyille alueille?',
		1 => 'Jotkut alueet voivat olla rajoitettu tietyille käyttäjille tai käyttäjäryhmille. Jotta voisit nähdä, lukea, kirjoittaa, jne... tarvitset erityisoikeuksia. Vain valvojat ja ylläpitäjät voivat antaa näitä oikeuksia, joten ota yhteyttä heihin.'
	),
	array(
		0 => 'Miksi en voi äänestää?',
		1 => 'Äänestäminen on sallittu vain rekisteröityneille käyttäjille. (Estääksemme tulosten väärentämisen). Mikäli olet jo rekisteröitynyt, mutta et voi äänestää. Sinulla ei ole tarvitavia oikeuksia.'
	),
	array(
		0 => 'Miksi en voi lähettää liitetiedostoa?',
		1 => 'Liitetiedostotjen lähetys on sallittu alue, ryhmä tai käyttäjäkohtaisesti. Keskustelufoorumin ylläpitäjä ei välttämättä anna lähettää liitetiedostoja kaikille alueille tai ehkäpä vain ylläpitäjien ryhmän annetaan lähettää liitetiedostoja. Ota yhteys ylläpitäjään, jos et ole varma miksi et voi lähettää liitteitä.'
	),
	array(
		0 => 'Miksi sain varoituksen?',
		1 => 'Jokaisella ylläpitäjällä on omat sääntösä ylläpitämällään keskustelufoorumilla. Mikäli he katsovat, että olet rikkonut jotain sääntöä. Voit saada siitä varoituksen. Tämä on keskustelufoorumin ylläpitäjän oma ratkaisu ja phpBB Ryhmällä ei ole mitään tekemistä tietyllä sivustolla saamasi varoituksen kanssa.'
	),
	array(
		0 => 'Kuinka ilmoitan asiattoman viestin valvojalle?',
		1 => 'Mikäli ylläpitäjä sallii. Katso sitä viestiä, jonka haluat ilmoittaa ja siinä pitäisi olla nappula, jolla voit ilmoittaa viestin. Tämän nappulan klikkaus ohjaa eteenpäin ilmoittamisessa ja pyytää mahdolliset lisätiedot.'
	),
	array(
		0 => 'Mitä "Tallenna" nappula tekee viestien lähetyksessä?',
		1 => 'Tämä antaa tallentaa viestisi myöhempää lähetystä varten. Ladataksesi tallennetun viestin. Mene omiin asetuksiisi ja seuraa ohjeita.'
	),
	array(
		0 => 'Miksi viestini vaatii hyväksynnän?',
		1 => 'Ylläpitäjä on voinut laittaa alueen sellaiseksi, että sinne tulevat viestit täytyy ensin hyväksyä valvojien toimesta. On myös mahdollista, että olet joutunut käyttäjäryhmään, jonka viestit täytyy tarkistaa ennen julkaisua. Ota yhteyttä ylläpitäjiin selvittääksesi asian.'
	),
	array(
		0 => 'Kuinka tönäisen viestiketjuani?',
		1 => 'Klikkaamalla "Tönäise" linkkiä voit tönäistä aloittamsi viestiketjun takaisin ensimmäiselle sivulle. Mikäli et näe tätä vaihtoehtoa. Sen käyttö on estetty. Viestiä voi tönäistä myös kirjoittamalla siihen vastaus, mutta tästä kannattaa olla tarkkana, että noudatat foorumin sääntöjä.'
	),
	array(
		0 => '--',
		1 => 'Viestien muotoilu ja viestityypit'
	),
	array(
		0 => 'Mitä on BBCode?',
		1 => 'BBCode on sovellettu HTML-kielestä. Ylläpito määrittelee, voitko käyttää BBCodea. Voit myös itse poistaa BBCoden käytöstä viestin kirjoituksen yhteydessä. BBCode on tyyliltään hyvin lähellä HTML-kieltä, tagit ympäröidään hakasuluilla [ ja ] eikä &lt; ja &gt; merkeillä. Se tarjoaa myös paremmat mahdollisuudet muotoilla sen mitä haluat näyttää. Lisätietoa BBCodesta saat viestin kirjoitussivulta.'
	),
	array(
		0 => 'Voinko käyttää HTML-kieltä viesteissäni?',
		1 => 'Et. Et voi kirjoittaa viesteihin HTML koodia ja olettaa viestin rakentuvan sen avulla. Useat HTML-kielen muotoilut ovat saatavilla myös BBCode muodossa ja voit käyttää näitä viestisi muotoiluun.'
	),
	array(
		0 => 'Mitä ovat hymiöt?',
		1 => 'Hymiöt tai emootio-ikonit ovat pieniä graafisia kuvia joiden avulla voidaan esitää tunnetta tai tunnetilaa viestien joukossa. esimerkiksi, :) tarkoittaa iloista ja :( tarkoittaa surullista. Näet täyden listan käytettävistä hymiöistä viestin kirjoituksen yhteydessä. Ole tarkkana miten näitä käytät, sillä liian monen hymiön käyttö tekee viestistä helposti lukukelvottoman ja valvoja voi joko poistaa osan hymiöistä tai koko viestin.'
	),
	array(
		0 => 'Voinko näyttää kuvia viesteissäni?',
		1 => 'Kyllä, voit näyttää kuvia viestien joukossa. Mikäli ylläpito on sallinut liitetiedostojen lähettämisen. Voit mahdollisesti lähettää kuvasi suoraan keskustelualueelle. Muussa tapauksessa joudut linkittämään kuvan ulkopuoliseslta palvelimelta. Esimerkiksi http://www.esimerkki.com/oma-kuvani.gif. Et voi linkittää kuvia omalta koneeltasi (mikäli se ei ole julkinen verkkopalvelin) tai salasanan takana olevia kuvia, kuten sähköposti ja muut salasanan vaativat palvelut. Näyttääksesi kuvan. Käytä BBCoden [img] tagia.'
	),
	array(
		0 => 'Mitä ovat yleistiedotteet?',
		1 => 'Yleistiedotteet sisältävät tärkeää tietoa ja nämä tiedotteet kannattaa lukea mahdollisimman pian. Yleistiedotteet näkyvät kakilla keskustelufoorumin alueilla ja myös omien asetusten pääsivulla. Voitko kirjoittaa yleistiedotteen. Riippuu ylläpitäjistä.'
	),
	array(
		0 => 'Mitä ovat tiedotteet?',
		1 => 'Tiedotteissa on usein tärkeää tietoa siitä alueesta, jota olet lukemassa. Nämä tiedotteet kannattaa lukea mahdollisimman pian. Tiedotteet ovat jokaisen sivun yläreunasta siltä alueelta, johon se on lähetetty. Kuten yleistiedotteissa. Ylläpitäjät antavat oikeuden näiden lähettämiseen.'
	),
	array(
		0 => 'Mitä ovat pysyvät tiedotteet?',
		1 => 'Pysyvät tiedotteet näkyvät tiedotteiden alapuolella ja vain ensimmäisellä sivulla. Nämä tiedotteet ovat yleensä tärkeitä, joten ne tulisi lukea mhdollisimman pian.  Kuten tiedotteissa. Ylläpitäjät antavat oikeuden näiden lähettämiseen.'
	),
	array(
		0 => 'Mitä ovat lukitut viestiketjut?',
		1 => 'Viestiketjujen lukitsemisen hoitaa joko valvoja tai ylläpitäjä. Et voi vastata lukittuun ketjuun ja ketjussa mahdollisesti oleva äänestys on päättynyt. Viestiketjuja voidaan lukita monesta syystä.'
	),
	array(
		0 => 'Mitä ovat viestien kuvakkeet?',
		1 => 'Viestien kuvakkeet ovat pieniä kuvia, joilla voi ilmaista viestin sisältöä. Kuvakkeiden käytön määrää ylläpitäjät.'
	),
	array(
		0 => '--',
		1 => 'Käyttäjätasot ja ryhmät'
	),
	array(
		0 => 'Keitä ovat ylläpitäjät?',
		1 => 'Ylläpitäjät ovat käyttäjiä, joilla on suurimmat oikeudet koko keskustelufoorumilla. Nämä käyttäjät voivat tehdä mitä haluavat. Kuten antavat ja poistavat oikeuksia, porttikiellot, luovat käyttäjäryhmiä, jne... riippuen mitä oikeuksia keskustelufoorumin perustaja on heille antanut. Heillä voi myös olla täydet valvojan oikeudet kaikkialle riippuen siitä, mitä perustaja on määritellyt.'
	),
	array(
		0 => 'Keitä ovat valvojat?',
		1 => 'Valvojat ovat käyttäjiä (tai ryhmä käyttäjiä) joiden tehtävänä on huolehtia keskustelujen sujumisesta päivästä toiseen. Heillä on oikeudet muokata ja sulkea/avata, poistaa ja jakaa viestiketjuja sillä alueella, missä ovat valvojina. Yleensä valvojat estävät käyttäjiä keskustelemasta <em>Aiheen vierestä</em> tai estävät käyttäjiä kirjoittamasta asiattomuuksia.'
	),
	array(
		0 => 'Mitä ovat käyttäjäryhmät?',
		1 => 'Käyttäjäryhmät ovat ylläpitäjien tapa hallita käyttäjiä ja heidän oikeuksiaan., Käyttäjät voivat kuulua useampaan ryhmään ja jokaiselle ryhmälle voidaan antaa omat oikeutensa. Ylläitäjä voi tällä tavoin antaa helposti valvojan oikeuksia usealle käyttäjälle tai sallia pääsyn piilotetulle alueelle, jne.'
	),
	array(
		0 => 'Kuinka liityn käyttäjäryhmään?',
		1 => 'Liittyäksesi käyttäjäryhmääm klikkaa linkkiä omissa asetuksissasi. Voit katsoa kaikkia ryhmiä siellä, mutta pääsy jopihinkin ryhmiin voi olla <em>rajoitettu</em> ja toiset voivat vaatia hyväksynnän ennen liittymistä. Jotkut ryhmät ovat suljettuja ja joissain voi olla piilotettu jäsenyys. Mikäli ryhmä on avoin. Voit pyytää jäsenyyttä valitsemalla oikean vaihtoehdon. Mikäli ryhmä vaatii hyväksynnän. Voit pyytää jäsenyyttä valitsemall aoikean napin. Käyttäjäryhmän valvojan on tällöin hyväksyttävä hakemusksesi ja he saattavat myös kysyä miksi haluat liittyä tähän ryhmään. Älä häiritse ryhmän valvojaa, mikäli tämä torjuu hakemuksesi. Siihen on todennäköisesti olemassa oma syynsä.'
	),
	array(
		0 => 'Kuinka pääsen käyttäjäryhmän valvojaksi?',
		1 => 'Keskustelufoorumin ylläpitäjä luo käyttäjäryhmät ja he myös antavat ryhmän valvontaoikeudet parhaaksi katsomilleen henkilöille. Mikäli olet kiinnostunut luomaan uuden käyttäjäryhmän. Ole hyvä ja ota yhteyttä ylläpitäjiin vaikka yksityisviestillä.'
	),
	array(
		0 => 'Miksi joillain käyttäjäryhmä näkyy erivärisenä?',
		1 => 'Keskustelufoorumin ylläpitäjä on todennäköisesti antanut jollekin ryhmälle oman värinsä helpottaakseen jäsenten tunnistamista.'
	),
	array(
		0 => 'Mikä on "oletusryhmä"?',
		1 => 'Mikäli olet jäsenenä useammassa, kuin yhdessä ryhmässä. Oletusryhmäsi määrittelee käyttämäsi värin ja arvosi. Ylläpitäjä voi antaa oikeuden muuttaa oletusryhmää omista asetuksista.'
	),
	array(
		0 => 'Mikä on "henkilökunta" linkki?',
		1 => 'Tältä sivulta löytyy keskustelufoorumin henkilöstö ja selitys mitkä ovat heidän toimialueitansa foorumilla.'
	),
	array(
		0 => '--',
		1 => 'Yksityisviestit'
	),
	array(
		0 => 'En voi lähettää yksitysiviestejä!',
		1 => 'Tähän on kolme syytä: Et ole rekisteröitynyt tai et ole kirjautunut sisään. Keskustelufoorumin ylläpitäjä on saattanut ottaa yksitysiviestit kokonaan pois käytöstä, tai sitten sinulta on estetty viestien lähettäminen. Mikäli jälkimmäinen syy. Ota yhteyttä ylläpitoon selvittääksesi miksi viestien lähetys ei ole sallittu.'
	),
	array(
		0 => 'Saan roskapostia yksityisviestinä!',
		1 => 'Voit estää tiettyä käyttäjää lähettämästä sinulle viestejä asettamalla sääntöjä omissa asetuksissasi. Mikäli saat roskapostia joltain käyttäjltä. Ilmoita siitä aina ylläpitäjille, sillä he voivat estää tätä henkilöä lähettämästä viestejä.'
	),
	array(
		0 => 'Olen saanut roskapostia tai herjaavan viestin sähköpostiini tältä keskustelufoorumilta!',
		1 => 'Tämä on valitettavaa. Sähköpostin lähetystoiminto kuitenkin seuraa viestien lähettäjiä, joten lähetä viestin sisältö ylläpitäjille. Liitä mukaan myös viestin header tiedot. Näillä tiedoilla voidaan selvittää kuka on lähettänyt viestin.'
	),
	array(
		0 => '--',
		1 => 'Ystävät ja vihamiehet'
	),
	array(
		0 => 'Mikä on ystävien ja vihamiesten lista?',
		1 => 'Voit käyttää tätä listaa järjestelläksesi käyttäjiä. Ystävälistalla olevat henkilöt näytetään omissa asetuksissasi, jotta voit helposti katsoa ovatko he paikalla. Käytettävästä tyylistä riippuen näiden käyttäjien tekemät viestit voidaan myös korostaa. Mikäli laitat käyttäjän vihamieheksi. Käyttäjän tekemiä viestejä ei näytetä.'
	),
	array(
		0 => 'Kuinka voin lisätä ja poistaa käyttäjiä ystävien ja vihamiesten listoilta?',
		1 => 'Voit lisätä käyttäjiä kahdella tavalla. Joko menemällä katsomaan käyttäjän profiilia ja klikkaamalla sieltä oikeaa linkkiä, tai vaihtoehtoisesti omista asetuksistasi. Voit lisätä käyttäjän myös kirjoittamalla suoraan hänen nimimerkkinsä. Tällä sivulla voit myös poistaa käyttäjiä.'
	),
	array(
		0 => '--',
		1 => 'Viestien etsiminen'
	),
	array(
		0 => 'Kuinka voin etsiä vanhoja viestejä?',
		1 => 'Laittamalla haettavan sanan etusivulla, alueella tai viestien lukusivulla olevaan hakulaatikkoon. Voit etsiä tarkemmilla vaihtoehdoilla klikkaamalla "etsi" linkkiä, joka on näkyvissä kaikilla keskustelufoorumin sivuilla.'
	),
	array(
		0 => 'Miki hakutoiminto ei palauta yhtään tulosta?',
		1 => 'Käyttämäsi sana oli todennäköisesti epätarkka ja sisälsi liikaa yleisiä termejä, joita ei ole otettu mukaan phpBB3 sisällysluetteloon. Koita tarkentaa hakuasi ja käytä eri vaihtoehtoja haussa.'
	),
	array(
		0 => 'Miksi haku antaa vain tyhjän sivun?!?',
		1 => 'Hakusi tuotti liian monta tulosta ja palvelin ei pystynyt käsittelemään niitä. Koita rajata hakutermejäsi ja käytä erilaisia vaihtoehtoja haussasi. Voit esimerkiksi rajata haun vain tietylle alueelle.'
	),
	array(
		0 => 'Kuinka voin hakea toisia käyttäjiä??',
		1 => 'Mene "käyttäjät" sivulle ja klikkaa "Etsi käyttäjä" linkkiä. Kun olet uudella sivulla. Täytä tarvittavat kentät.'
	),
	array(
		0 => 'Kuinka löydän omat viestini ja aloittamani viestiketjut?',
		1 => 'Vistisi löytyvät klikkaamalla klikkaamalla "etsi käyttäjän viestit" linkkiä omissa asetuksissai tai profiilisivulla. Etsiäksesi aloittamiasi vestiketjuja. Käytä hakusivulla olevia asetuksia.'
	),
	array(
		0 => '--',
		1 => 'Viestiketjujen seuraaminen ja kirjanmerkit.'
	),
	array(
		0 => 'Mikä ero on kirjanmerkillä ja seuraamisella?',
		1 => 'Kirjanmerkit phpBB3:ssa ovat samantapaisia, kuin kirjanmerkit selaimessasi. Et välttämättä saa ilmoitusta uusista päivityksistä, mutta pääset halutessasi nopeasti takaisin haluamaasi viestiketjuun. Viestiketjun seuraaminen antaa ilmoituksen uudesta viestistä haluamallasi tavalla. '
	),
	array(
		0 => 'Kuinka asetan tietyn alueen tai viestiketjun seurantaan?',
		1 => 'Seurataksesi tiettyä aluetta sinun tulee klikata "seuraa aluetta" linkkiä, joka löytyy jokaiselta alueelta. Samalla tavalla, kuin asettaisit viestiketjun seurantaan. Asettaaksesi viestiketjun seurantaan voit tehdä sen viestiä kirjoittaessasi tai valitsemalla viestiketjun seurantaan tarkoitetun linkin.'
	),
	array(
		0 => 'Kuinka lopetan seuraamisen?',
		1 => 'Poistaaksesi seurannan. Mene omiin asetuksiisi ja ja seuraa valitsemasi viestiketjun linkkejä.'
	),
	array(
		0 => '--',
		1 => 'Liitetiedostot'
	),
	array(
		0 => 'Mitkä liitetiedostot ovat sallittuja tällä alueella?',
		1 => 'Ylläpitäjä voi määrätä sallitut ja kielletyt liitetiedostojen tyypit. Mikäli et ole varma mitkä tiedostot ovat sallittuja. Ota yhteys ylläpitäjiin.'
	),
	array(
		0 => 'Mistä löydän lähettämäni liitetiedostot?',
		1 => 'Löydät omat tiedostosi menemällä omiin asetuksiin ja seuraamalla liitetiedostojen linkkejä.'
	),
	array(
		0 => '--',
		1 => 'phpBB 3 asiat'
	),
	array(
		0 => 'Kuka on kirjoittanut tämän ohjelmiston?',
		1 => 'Tämän ohjelman on (Alkuperäisessä muodossaan) julkaissut ja sen tekijänoikeuksien omistaja on <a href="http://www.phpbb.com/" target="_blank">phpBB Group</a>. Tämä on julkaistu GNU General Public Licence lisenssin alaisena ja tätä voi levittää vapaasti. Katso linkkiä saadaksesi lisätietoja.'
	),
	array(
		0 => 'Miksi toimintoa X ei ole saatavilla?',
		1 => 'Tämän ohjelmiston on tuottanut ja lisensoinut phpBB Group. Jos mielestäsi ominaisuutta tarvitaan, käy phpbb.com web sivuilla ja tarkista mitä mieltä phpBB Group on. Ole hyvä äläkä postita pyyntöjä foorumeihin osoitteessa phpbb.com. Ryhmä käyttää sourceforge sivustoja uusien ominaisuuksien tekoon. Ole hyvä ja lue läpi foorumit nähdäksesi olemmeko jo ottaneet kantaa ominaisuuteen ja noudata sitten sivuilla annettuja ohjeita.'
	),
	array(
		0 => 'Kehen otan yhteyttä tällä keskustelufoorumilla esiintyvistä loukkaavista ja/tai laittomista asioista',
		1 => 'Sinun tulee ottaa yhteyttä järjestelmän ylläpitoon. Jos et saa selville kuka tämä on, tulee sinun ottaa yhteyttä jonkin foorumin valvojaan ja kysyä häneltä kenen puoleen tulee kääntyä. Jos et vieläkään saa vastausta sinun tulee ottaa yhteyttä web osoitteen (domainin) omistajaan (tämä selviää whois-kyselyllä) tai jos kyseessä on vapaa järjestelmä (esim. yahoo, free.fr, f2s.com, jne.), hallintoon tai turva tms. osastoon ko. palvelussa. Pyydämme ottamaan huomioon ettei phpBB Group voi millään lailla kontrolloida, eikä sitä voida mitenkään pitää vastuullisena siitä kuinka, missä ja kuka tätä järjestelmää käyttää. On täysin turhaa ottaa yhteyttä phpBB Group:iin missään lakiasioissa (vastuu yms.), asioissa jotka eivät suoraan liity phpbb.com web sivustoon tai itse phpBB ohjelmaan sellaisenaan. Jos lähetät sähköpostia phpBB Group:lle mistään kolmannen osapuolen ohjelmiston käytöstä, voit odottaa lyhyttä vastausta tai jäädä ilman vastausta kokonaan.'
	)
);

?>