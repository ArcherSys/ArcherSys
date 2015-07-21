<?php
/** 
*
* acp_database [Finnish [Fin]]
*
* @package language
* @copyright (c) 2006 phpBB Group 
* @author 2006-11-14 - Lurttinen@phpbbsuomi.com
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Täällä voit ottaa varmuuskopion kaikesta phpBB:hen liittyvästä datasta. Voit tallentaa syntyvän tiedoston palvelimen <samp>store/</samp> -hakemistoon tai ladata sen omalle koneellesi. Palvelimen asetuksista riippuen, voit ehkä pakata tiedoston usealla eri tavalla. Lisää ylimääräiset taulut omalle riville pilkulla erotettuna, mikäli haluat ottaa varmuskopion muistakin, kuin phpBB:n omista tauluista. ',
	'ACP_RESTORE_EXPLAIN'	=> 'Tämä palauttaa kaiken phpBB tiedon varmuuskopion sisältävästä tiedostosta. Mikäli palvelin tukee, voit käyttää gzip tai bzip2 pakattua tekstitiedostoa ja se puretaan automaattisesti. <strong>VAROITUS</strong> Varmuuskopion palautus ylikirjoittaa kaiken datan foorumilta. Palautus saattaa kestää pitkän aikaa. Älä poistu tältä sivulta ennen kuin varmuuskopio on palautettu kokonaan. Varmuuskopiot, jotka ovat tallennettu <samp>store/</samp> kansioon oletetaan olleen luodun phpBB:n omalla varmuuskopiojärjestelmällä. Muulla tavalla luodut varmuuskopiot eivät välttämättä toimi.',
	
	'BACKUP_DELETE'		=> 'Varmuuskopion sisältävä tiedosto on poistettu',
	'BACKUP_INVALID'	=> 'Valitsemasi tiedosto varmuuskopiota varten on epäkelpo',
	'BACKUP_OPTIONS'	=> 'Varmuuskopion vaihtoehdot',
	'BACKUP_SUCCESS'	=> 'Varmuuskopion sisältävä tiedosto on luotu.',
	'BACKUP_TYPE'		=> 'varmuuskopion tyyppi',
	
	'DATABASE' 			=> 'Tietokantatyökalut',
	'DATA_ONLY'			=> 'Vain data',
	'DELETE_BACKUP'		=> 'Poista varmuuskopio',
	'DELETE_SELECTED_BACKUP'	=> 'Haluatko varmasti poistaa valitsemasi varmuuskopion?',
	'DESELECT_ALL'		=> 'Poista valinta kaikista',
	'DOWNLOAD_BACKUP'	=> 'Lataa varmuuskopio omalle koneellesi',

	'FILE_TYPE'			=> 'Tiedoston tyyppi',
	'FULL_BACKUP'		=> 'Täysi',

	'RESTORE_FAILURE'		=> 'Varmuuskopion sisältävä tiedosto saattaa olla korruptoitunut.',
	'RESTORE_OPTIONS'		=> 'Palautuksen vaihtoehdot',
	'RESTORE_SUCCESS'		=> 'Tietokannan palautus onnistui.<br /><br />Keskustelufoorumisi on nyt palautettu siihen tilaan missä se oli ennen varmuuskopion luomista.',

	'SELECT_ALL'			=> 'Valitse kaikki',
	'SELECT_FILE'			=> 'Valitse tiedosto',
	'START_BACKUP'			=> 'Aloita varmuuskopio',
	'START_RESTORE'			=> 'Aloita palautus',
	'STORE_AND_DOWNLOAD'	=> 'Tallenna ja lataa',
	'STORE_LOCAL'			=> 'Tallenna tiedosto paikallisesti',
	'STRUCTURE_ONLY'		=> 'Vain rakenne',

	'TABLE_SELECT'		=> 'Taulun valinta',
	'TABLE_SELECT_ERROR'=> 'Valitse ainakin yksi taulu.',
));

?>