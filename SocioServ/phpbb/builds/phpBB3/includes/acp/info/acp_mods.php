<?php
/** 
*
* @package acp
* @version $Id: acp_mods.php,v 1.2 2006/05/01 19:45:42 grahamje Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package module_install
*/
class acp_mods_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_mods',
			'title'		=> 'ACP_CAT_STYLES',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'mods' => array('title' => 'ACP_CAT_MODS', 'auth' => 'acl_a_styles', 'cat' => array('ACP_CAT_MODS')),
			)
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>