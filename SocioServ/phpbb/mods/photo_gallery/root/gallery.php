<?php
/** 
*
* @package gallery
* @version $Id: gallery.php 23 2007-07-19 16:26:54Z Handyman $
* @copyright (c) 2007 StarTrekGuide Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
$filename = substr(strrchr(__FILE__, '/'), 1);
require($phpbb_root_path . 'common.' . $phpEx);
require($phpbb_root_path . 'includes/functions_user.' . $phpEx);
require($phpbb_root_path . 'includes/functions_module.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);

//
$sql = 'SELECT style_id
	FROM ' . STYLES_TABLE . "
	WHERE style_name = 'prosilver'";
$result = $db->sql_query($sql, 3600);
$style = $db->sql_fetchfield('style_id');
$db->sql_freeresult($result);

$user->setup('mods/gallery', ((!$style) ? 1 : $style));

$module = new p_master();

// Setting a variable to let the style designer know where he is...
$template->assign_var('S_IN_GALLERY', true);

// Basic parameter data
$id 	= request_var('i', '');
$mode	= request_var('mode', '');

// Instantiate module system and generate list of available modules
$module->list_modules('gallery');

// Select the active module
$module->set_active($id, $mode);

// Load and execute the relevant module
$module->load_active();

// Assign data to the template engine for the list of modules
$module->assign_tpl_vars(append_sid("{$phpbb_root_path}gallery.$phpEx"));

// Generate the page, do not display/query online list
$module->display($module->get_page_title(), false);

?>