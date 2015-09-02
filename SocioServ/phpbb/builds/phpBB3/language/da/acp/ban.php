<?php
/**
*
* acp_ban [Danish]
*
* @package language
* @version $Id: ban.php,v 1.18 2007/05/17 14:58:40 acydburn Exp $
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
	'1_HOUR'		=> '1 time',
	'30_MINS'		=> '30 minutter',
	'6_HOURS'		=> '6 timer',

	'ACP_BAN_EXPLAIN'	=> 'Her kan du administrere udelukkelse af brugere ved navn, IP- eller emailadresse. Disse metoder forhindrer en bruger i at få adgang til boardet. Du kan give en kort (maksimalt 3000 tegn) begrundelse for udelukkelsen hvis du ønsker. Denne begrundelse vises i administratorloggen. Udelukkelsens varighed skal også defineres. Hvis du ønsker at udelukkelsen skal slutte på en specifik dato i stedet for efter en fastsat periode vælg <span style="text-decoration: underline;">Indtil -&gt;</span> for udelukkelsens længde og indtast en dato i <kbd>yyyy-mm-dd format</kbd>.',

	'BAN_EXCLUDE'			=> 'Ophæv udelukkelse',
	'BAN_LENGTH'			=> 'Varighed af udelukkelse',
	'BAN_REASON'			=> 'Udelukkelsesgrund',
	'BAN_GIVE_REASON'		=> 'Vist udelukkelsesgrund',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Udelukkelseslisten er blevet opdateret',

	'EMAIL_BAN'					=> 'Udeluk emailadresser',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Vælg "Ja" for at ophæve den valgte emailadresses udelukkelse.',
	'EMAIL_BAN_EXPLAIN'			=> 'Du kan udelukke flere emailadresser på én gang ved at indtaste hver adresse på en ny linie. Brug * som ubekendt for at matche delvise adresser, f.eks. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, etc.',
	'EMAIL_NO_BANNED'			=> 'Ingen udelukkede emailadresser',
	'EMAIL_UNBAN'				=> 'Ophæv udelukkelse af emailadresser',
	'EMAIL_UNBAN_EXPLAIN'		=> 'For at ophæve flere emailadressers udelukkelse i én arbejdsgang, skal du bruge windows metoden for at markere flere rækker (Alt og Ctrl tasterne). Udelukkede emailadresser er fremhævede.',//spørgsmålet er om sidste sætning burde være  - markerede email-adresser bliver fremhævet - det er nok for tidligt at konkludere med disse halvtfungerende typografier :-)

	'IP_BAN'					=> 'Udeluk IP-adresser',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Vælg "Ja" for at ophæve den valgte IP-adresses udelukkelse.',
	'IP_BAN_EXPLAIN'			=> 'Du kan udelukke flere IP-adresser eller værtsnavne på én gang ved at indtaste hver adresse eller vært på en ny linie. For at specificere et interval af IP-adresser adskilles start og slut med med en bindestreg (-), for at specificere en ubekendt, brug *.',
	'IP_HOSTNAME'				=> 'IP-adresse eller værtsnavn',
	'IP_NO_BANNED'				=> 'Ingen udelukkede IP-adresser',
	'IP_UNBAN'					=> 'Ophæv udelukkelse af IP-adresser',
	'IP_UNBAN_EXPLAIN'			=> 'For at ophæve flere IP-adressers udelukkelse i én arbejdsgang, skal du bruge windows metoden for at markere flere rækker (Alt og Ctrl tasterne). Udelukkede IP-adresser er fremhævede.',

	'LENGTH_BAN_INVALID'		=> 'Datoen skal have formatet <kbd>YYYY-MM-DD</kbd>.',

	'PERMANENT'		=> 'Permanent',

	'UNTIL'						=> 'Indtil',
	'USER_BAN'					=> 'Udeluk brugere',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Vælg "Ja" for at ophæve den valgte brugers udelukkelse.',
	'USER_BAN_EXPLAIN'			=> 'Du kan udelukke flere brugere på én gang ved at indtaste hver bruger på en ny linie. Brug <span style="text-decoration: underline;">Find en tilmeldt bruger</span> funktionen til at finde og tilføje én eller flere brugere automatisk.',
	'USER_NO_BANNED'			=> 'Ingen udelukkede brugere',
	'USER_UNBAN'				=> 'Ophæv brugeres udelukkelse',
	'USER_UNBAN_EXPLAIN'		=> 'For at ophæve flere brugeres udelukkelse i én arbejdsgang, skal du bruge windows metoden for at markere flere rækker (Alt og Ctrl tasterne). Udelukkede brugere er fremhævede.',
));

?>