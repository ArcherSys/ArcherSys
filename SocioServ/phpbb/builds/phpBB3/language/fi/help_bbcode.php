<?php
/** 
*
* help_bbcode [Finnish [Fin]]
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
		1 => 'Tervetuloa'
	),
	array(
		0 => 'Mitä on BBCode?',
		1 => 'BBCode on sovellettu HTML-kielestä. Ylläpito määrittelee, voitko käyttää BBCodea. Voit myös itse poistaa BBCoden käytöstä viestin kirjoituksen yhteydessä. BBCode on tyyliltään hyvin lähellä HTML-kieltä, tagit ympäröidään hakasuluilla [ ja ] eikä &lt; ja &gt; merkeillä. Se tarjoaa myös paremmat mahdollisuudet muotoilla sen mitä haluat näyttää. Käyttämästäsi tyylistä riippuen, voi olla helpompi lisätä BBCodea viesteihin klikkaamalla kuvaketta joka näkyy kirjoitusikkunan ylälaidassa. Vaikka tämä on tehty helpoksi, kannattaa silti lukea koko opas läpi.'
	),
	array(
		0 => '--',
		1 => 'Tekstin muotoilu'
	),
	array(
		0 => 'Kuinka voin lihavoida, kursivoida tai alleviivata tekstiä?',
		1 => 'BBCodeen kuuluu tageja joiden avulla voit muokata viestisi tyyliä. Tämä voi tehdä seuraavilla tavoilla: <ul><li>Lihavoidaksesi tekstin ympäröi se <strong>[b][/b]</strong> tageilla, esim. <br /><br /><strong>[b]</strong>Terve<strong>[/b]</strong><br /><br />saa aikaan <strong>Terve</strong></li><li>Alleviivataksesi tekstiä. Käytä <strong>[u][/u]</strong> tageja, esimerkiksi:<br /><br /><strong>[u]</strong>Hyvää huomenta<strong>[/u]</strong><br /><br />saa aikaseksi <u>Hyvää huomenta</u></li><li>Kursivoidaksesi tekstiä, käytä<strong>[i][/i]</strong>tageja, esim.<br /><br />Tämä on <strong>[i]</strong>hienoa!<strong>[/i]</strong><br /><br />saa aikaiseksi Tämä on <i>hienoa!</i></li></ul>'
	),
	array(
		0 => 'Kuinka voin muuttaa tekstin väriä ja kokoa?',
		1 => 'Voit käyttää seuraavia tageja muuttaaksesi tekstin väritystä. Muista, että tekstin näkyminen riippuu viestin lukijan selaimesta ja hänen omasta järjestelmästään: <ul><li>Tekstin värin muuttaminen tehdään ympäröimällä se <strong>[color=][/color]</strong> tageilla. Voit laittaa siihen tunnetun värin nimen (kuten. punainen, sininen, keltainen, jne.) tai käyttää heksadesimaalista arvoa, esim. #FFFFFF, #000000. Esimerkkinä, Luodaksesi punaista tekstiä:<br /><br /><strong>[color=red]</strong>Terve!<strong>[/color]</strong><br /><br />or<br /><br /><strong>[color=#FF0000]</strong>Terve!<strong>[/color]</strong><br /><br />Kummatkin vaihtoehdot tulostuvat <span style="color:red">Terve!</span></li><li>Tekstin koon muuttaminen onnistuu samalla tavalla käyttämällä <strong>[size=][/size]</strong> tagia. Tämän käyttäminen riippuu käytössä olevasta tyylistä, mutta suositeltava määritys on numeerinenen arvo, joka ilmaisee tekstin koon pikseleinä, alkaen numerosta 1 (Niin pieni, että et näe sitä) ja jatkuen numeroon 29 asti (Erittäin iso). Esimerkkinä:<br /><br /><strong>[size=9]</strong>PIENI<strong>[/size]</strong><br /><br />näyttää yleensä <span style="font-size:9px;">PIENI</span><br /><br />kun taas:<br /><br /><strong>[size=24]</strong>ISO!<strong>[/size]</strong><br /><br />näyttää <span style="font-size:24px;">ISO!</span></li></ul>'
	),
	array(
		0 => 'Voinko yhdistellä muotoiluja?',
		1 => 'Kyllä voit. Jos haluat saada jonkun huomion. Voit kirjoittaa vaikka:<br /><br /><strong>[size=18][color=red][b]</strong>KATSO MINUA!<strong>[/b][/color][/size]</strong><br /><br />Tämä näyttää <span style="color:red;font-size:18px;"><strong>KATSO MINUA!</strong></span><br /><br />Emme kuitenkaan suosittele, että kirjoitat paljon tekstiä, joka näyttäisi tältä! Huomaa, että se on sinusta kiinni viestin kirjoittajana, että tagit ovat suljettu oikein. Esimerkkinä, tämä on väärin:<br /><br /><strong>[b][u]</strong>Tämä on väärin<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Lainaukset ja kiinteän rivivälin tekstin näyttäminen'
	),
	array(
		0 => 'Viestin lainaus vastattaessa',
		1 => 'Voit lainata tekstiä kahdella tavalla. Näyttämällä lainattava kirjoittajan nimen, tai ei.<ul><li>Kun käytät lainaustoimintoa lainataksesi keskustelufoorumilla olevaa tekstiä tulisi sinun huomata, että lainattava teksti on ympäröity <strong>[quote=""][/quote]</strong> tageilla. Tämä menetelmä antaa sinun lainata tekstiä tietyltä käyttäjältä tai laittaa siihen otsikoksi mitä haluat! Esimerkiksi lainataksesi pätkän tekstiä, jonka herra klöntti kirjoitti, tulisi se laittaa :<br /><br /><strong>[quote="herra klöntti"]</strong>Herra klöntin kirjoittama teksti tulee silloin tähän<strong>[/quote]</strong><br /><br />Tuloksena on, herra klöntti kirjoitti: otsikko ennen varsinaista tekstiä. Huomaa, että sinun<strong>on käytettävä</strong> käytettävä "" merkkejä lainattavan kirjoittajan nimen ympärillä.</li><li>Toinen menetelmä antaa lainata tekstiä sokeasti. Käyttääksesi tätä menetelmää lainattava teksti tulee ympäröidä <strong>[quote][/quote]</strong> tageilla. Kun katsot viestiä. Siinä näkyy vain Lainaus: ennen varsinaista tekstiä.</li></ul>'
	),
	array(
		0 => 'Koodin, tai muun kiinteän välistyksen omaavan tekstin kirjoittaminen',
		1 => 'Mikäli haluat tulostaa ruudulle koodia, tai jotain muuta tekstiä, joka vaatii kiinteän välistyksen, Kuten esimerkiksi Courier tyylin fontin. Valitsemasi teksti täytyy ympäröidä <strong>[code][/code]</strong> tageilla. Esimerkiksi <br /><br /><strong>[code]</strong>echo "Tässä on jotain koodia";<strong>[/code]</strong><br /><br />Kaikki käytetty muotoilu <strong>[code][/code]</strong> tagien välissä säilytetään, kunnes katsot sitä myöhemmin.'
	),
	array(
		0 => '--',
		1 => 'Listojen luominen'
	),
	array(
		0 => 'Järjestämättömän listan luominen',
		1 => 'BBCode tukee kahden tyyppistä listaa. Järjestämätön ja järjestetty. Nämä ovat perusteiltaan samat, kuin HTML-kielessä. Järjestämätön lista näyttää jokaisen rivin omanaan sisennyksen ja listamerkin kanssa. Luodaksesi järjestämättömän listan sinun tulee käyttää <strong>[list][/list]</strong> tageja ja määritellä jokainen aihekohta erikseen laittamalla rivin eteen <strong>[*]</strong>. Esimerkiksi, listataksesi lempivärisi. voisit tehdä sen:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Punainen<br /><strong>[*]</strong>Sininen<br /><strong>[*]</strong>Keltainen<br /><strong>[/list]</strong><br /><br />Rämä luo seuraavanlaisen listan:<ul><li>Punainen</li><li>Sininen</li><li>Keltainen</li></ul>'
	),
	array(
		0 => 'Järjestetyn listan luominen',
		1 => 'Toinen listatyyppi on järjestetty lista. Järjestetty lista antaa paremman mahdollisuuden halita mitä laitetaan jokaisen rivin eteen. Luodaksesi järjestetyn listan sinun tulee käyttää<strong>[list=1][/list]</strong> tagia luodaksesi numeroidun listan tai vaihtoehtoisesti <strong>[list=a][/list]</strong> luodaksesi aakkosjärjestyksellisen listan. Kuten järjestämättömässä listassa. Rivit määritellään <strong>[*]</strong> merkillä sen edessä. Esimerkiksi:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Käy kaupassa<br /><strong>[*]</strong>Osta uusi tietokone<br /><strong>[*]</strong>Kiroa tietokonetta, kun se kaatuu<br /><strong>[/list]</strong><br /><br />Luo seuraavan listan:<ol type="1"><li>Käy kaupassa</li><li>Osta uusi tietokone</li><li>Kiroa tietokonetta, kun se kaatuu</li></ol>Aakkosjärjestyksessä olevaa listaa käyttäessä:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Ensimmäinen mahdollinen vastaus<br /><strong>[*]</strong>Toinen mahdollinen vastaus<br /><strong>[*]</strong>Kolmas mahdollinen vastaus<br /><strong>[/list]</strong><br /><br />tuottaa<ol type="a"><li>Ensimmäinen mahdollinen vastaus</li><li>Toinen mahdollinen vastaus</li><li>Kolmas mahdollinen vastaus</li></ol>'
	),
	array(
		0 => '--',
		1 => 'Linkkien luominen'
	),
	array(
		0 => 'Linkitys toiselle sivustolle',
		1 => 'phpBB BBCode tukee joitakin tapoja luoda URI, Uniform Resource Indicator, jotka tunentaan paremmin nimellä URL.<ul><li>Ensimmäinen näistä käyttää <strong>[url=][/url]</strong> tagia, Kaikki mitä kirjoitat = merkin jälkeen luodaan klikattavaksi URLiksi. Esimerkiksi linkki phpBB.com osoitteeseen. Tulisi tehdä:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Vieraile phpBB:n kotisivuilla!<strong>[/url]</strong><br /><br />Tämä luo seuraavanlaisen linkin, <a href="http://www.phpbb.com/" target="_blank">Vieraile phpBB:n kotisivuilla!</a> Huomaat, että linkki avautuu uuteen ikkunaan ja käyttäjä voi jatkaa keskustelufoorumin selaamista niin halutessaan.</li><li>Mikäli haluat vain näyttää osoitteen linkkinä. Voit käyttää pelkästään:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Tämä luo linkin, <a href="http://www.phpbb.com/" target="_blank">http://www.phpbb.com/</a></li><li>phpBB tukee myös jotain, jota kutsutaan <i>Taikalinkeiksi</i>, Tämä muuttaa automaattisesti kaikki oikein kirjoitetut osoitteet linkeiksi ilman, että täytyy käyttää yhtään tagia, tai edes http:// määrittelyä. Esimerkiksi, kirjoita www.phpbb.com viestiisi ja linkki näkyy <a href="http://www.phpbb.com/" target="_blank">www.phpbb.com</a> viestissä, kun katsot sitä.</li><li>Sama toimii myös sähköpostiosoitteissa. Voit joko määrätä osoitteen näytettäväksi :<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />mikä näyttää tältä <a href="emailto:no.one@domain.adr">no.one@domain.adr</a> Tai voit vain kirjoittaa no.one@domain.adr ja se muutetaan automaattisesti viestiä katseltaessa.</li></ul>Kuten kaikkien BBCode tagien kanssa. Voit liittää URL tagin mihin tahansa muuhun tagiin, kuten <strong>[img][/img]</strong> (Katso seuraava kohta), <strong>[b][/b]</strong>, jne. Kuten muotoilujen kanssa, tagien sulkeminen oikeassa järjestyksessä on kirjoittajan vastuulla. Esimerkiksi:<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/images/phplogo.gif<strong>[/url][/img]</strong><br /><br /><u>Ei ole</u> oikein ja voi johta viestin poistamiseen, joten ole tarkkana.'
	),
	array(
		0 => '--',
		1 => 'Kuvien näyttäminen viesteissä'
	),
	array(
		0 => 'Kuvan liittäminen viestiin',
		1 => 'phpBB:n BBCodessa on olemassa tagi, jolla voi liittää kuvia vieteihin. Tätä tagia käytettäessä täytyy muistaa kaksi tärkeää asiaa; Jotkut käyttäjät eivät tykkää useista kuvista viesteissä ja toiseksi sen kuvan tulee olla jo internetissä (Et voi linkittää kuvaa omalta koneeltasi, mikäli se ei ole verkkopalvelin!). Näyttääksesi kuvan sen URL tulee ympäröidä <strong>[img][/img]</strong> tageilla. Esimerkiksi:<br /><br /><strong>[img]</strong>http://www.phpbb.com/images/phplogo.gif<strong>[/img]</strong><br /><br />Kuten URL ohjeissa todettiin. Voit ympäröidä img tagin myös<strong>[url][/url]</strong> tageilla halutessasi, esim.<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/images/phplogo.gif<strong>[/img][/url]</strong><br /><br />Saa aikaan:<br /><br /><a href="http://www.phpbb.com/" target="_blank"><img src="http://www.phpbb.com/images/phplogo.gif" border="0" alt="" /></a><br />'
	),
	array(
		0 => '--',
		1 => 'Muita asioita'
	),
	array(
		0 => 'Voinko lisätä omia tageja?',
		1 => 'phpBB 3, kyllä voi. Keksitään tähän jotain lisää myöhemmin...'
	)
);

?>