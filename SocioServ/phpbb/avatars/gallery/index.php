<?php
/**
 * list icons of the avatar library
 *
 * The avatar library is the directory '[code]users/avatars[/code]' under the YACS installation directory.
 * Upload some files through FTP there, and they will become useful resources for all members of your community.
 *
 * @author Bernard Paques [email]bernard.paques@bigfoot.com[/email]
 * @reference
 * @license http://www.gnu.org/copyleft/lesser.txt GNU Lesser General Public License
 */

// common definitions and initial processing
include_once '../../shared/global.php';
include_once '../../shared/surfer.php';

// load the skin
load_skin('users');

// the path to this page
$local['path_en'] = 'Users';
$local['path_fr'] = 'Utilisateurs';
$context['path_bar'] = array( 'users/index.php' => get_local('path') );

// the title of the page
$local['title_en'] = 'The library of avatars';
$local['title_fr'] = 'La librairie des avatars';
$context['page_title'] = get_local('title');

// logged users may change their avatar
if(Surfer::is_logged()) {
	$local['label_en'] = 'Your own avatar';
	$local['label_fr'] = 'Votre avatar';
	$context['page_menu'] = array_merge($context['page_menu'], array( 'users/select_avatar.php' => get_local('label') ));
}

// list available avatars
if(!$context['error']) {

	// where images are
	$path = 'users/avatars';

	// browse the path to list directories and files
	if(!$dir = @opendir ($context['path_to_root'].$path)) {
		$local['error_en'] = 'The directory \''.$path.'\' does not exist.';
		$local['error_fr'] = 'Le répertoire \''.$path.'\' n\'existe pas.';
		$context['error'] .= '<p>'.get_local('error')."</p>\n";

	// list directories and files separately
	} else {

		// offers to change the avatar
		if(Surfer::is_logged()) {
			$local['label_en'] = 'To check or change your avatar, go to the '.Skin::build_link('users/select_avatar.php', 'avatar selection page', 'shortcut').'.';
			$local['label_fr'] = 'Pour vérifier ou changer votre avatar, allez à la page de '.Skin::build_link('users/select_avatar.php', 'sélection d\'avatar', 'shortcut').'.';
			$context['text'] .= '<p>'.get_local('label').'</p>'."\n";
		}

		$local['label_en'] = 'This is the list of available avatars on this system.';
		$local['label_fr'] = 'Voici la liste des avatars disponibles sur ce système.';
		$context['text'] .= '<p>'.get_local('label').'</p>'."\n";

		// build the lists
		while($item = readdir($dir)) {

			// skip some files
			if($item == '.' || $item == '..')
				continue;
			if(@is_dir($actual_item))
				continue;

			// consider only images
			if(!preg_match('/(\.gif|\.jpeg|\.jpg|\.png)$/i', $item))
				continue;

			// display the image
			$context['text'] .= ' <img src="'.$context['url_to_root'].$path.'/'.$item.'" alt="'.$item.'" style="padding: 4px 4px 4px 4px;"> ';

		}
		@closedir($dir);
	}

}

// render the skin
render_skin();

?>