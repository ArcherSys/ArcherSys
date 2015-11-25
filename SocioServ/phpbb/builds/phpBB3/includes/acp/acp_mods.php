<?php
/** 
*
* @package acp
* @version $Id: acp_cash.php 490 2007-06-27 02:17:56Z roadydude $
* @copyright (c) 2006-2007 StarTrekGuide Development Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package acp
*/	

	define('IN_PHPBB', true);
	define(
		'ROOT_DIR',  
		implode(
			DIRECTORY_SEPARATOR, 
			array_splice(
				explode(DIRECTORY_SEPARATOR, __FILE__), 0, -5
			)
		)
	);
	define('BASE_BUILD', 	'phpBB3');
	define('INSTALLER_DIR', ROOT_DIR   . DIRECTORY_SEPARATOR . 'installer');
	define('MODS_DIR',  	ROOT_DIR   . DIRECTORY_SEPARATOR . 'mods');
	define('BUILDS_DIR', 	ROOT_DIR   . DIRECTORY_SEPARATOR . 'builds');
	define('BASE_DIR',  	BUILDS_DIR . DIRECTORY_SEPARATOR . BASE_BUILD);
	define('MODS_INFO', 	'mods.info');
	define('USER_DIR', 		ROOT_DIR);
	include(
		BASE_DIR
		. DIRECTORY_SEPARATOR . 'includes' 
		. DIRECTORY_SEPARATOR . 'acp'
		. DIRECTORY_SEPARATOR . 'acp_styles.php'
	);
	
	function __autoload($class) {
		static $dirs;
		if (!$dirs) 
			$dirs=
				array(
					  INSTALLER_DIR,
					  INSTALLER_DIR . DIRECTORY_SEPARATOR . 'actions',
					  INSTALLER_DIR . DIRECTORY_SEPARATOR . 'classes',
					  INSTALLER_DIR . DIRECTORY_SEPARATOR . 'core',
				);

		foreach ($dirs as $dir) {
			if (
				file_exists($dir . DIRECTORY_SEPARATOR . $class . ".class.php")
			) {
				include($dir . DIRECTORY_SEPARATOR . $class . ".class.php");
			}
		}
		
		return 1;
	}
	
	class acp_mods
	{
		/**
		 * @var Build
		 */
		private $build;
		private $style;
		
		function installStyle($styleName)
		{
			global $config, $db, $user, $auth, $template, $cache;
			global $phpbb_root_path, $phpbb_admin_path, $phpEx, $table_prefix;
			if (preg_match('/([^a-z0-9_]+)/iS',$styleName))
				throw new Exception('Style name is not valid',1001);
				
			$res = $db->sql_query(
				"SELECT * FROM 
					{$table_prefix}styles WHERE style_name = '{$styleName}'"
			);
			
			$styles = new acp_styles();
			
			if ($db->sql_affectedrows()) {
				$row = $db->sql_fetchrow();
	
				$db->sql_query(
					"UPDATE {$table_prefix}styles SET style_active = 0"
				);
				$db->sql_query(
					"UPDATE 
						{$table_prefix}styles 
					SET 
						style_name = '{$styleName}',
						style_active = 1 
					WHERE 
						style_id = {$row['style_id']}"
				);
				$db->sql_query(
					"UPDATE {$table_prefix}users SET user_style = " . $row['style_id']
				);
				set_config('default_style', $row['style_id']);
			} else {
				// getting instalation config
				$installcfg = 
					parse_cfg_file(
						$phpbb_root_path 
						. 'styles' 
						. DIRECTORY_SEPARATOR . $styleName 
						. DIRECTORY_SEPARATOR . 'style.cfg'
					);
				
					
				// prepare data to install
				$error 		= array(); 
				$action		= 'install'; 
				$root_path	= $phpbb_root_path . 'styles/' . $styleName . '/'; 
				$id			= 0; 
				$name		= $styleName;
				$path		= $styleName; 
				$copyright	= $installcfg['copyright']; 
				$active		= 1; 
				$default	= 1; 
				$style_row	= array(); 
				
				if (!is_dir($root_path))
					throw new Exception('Directory not found',1002);
	
				$element_ary = array(
					'template' => STYLES_TEMPLATE_TABLE, 
					'theme' => STYLES_THEME_TABLE, 
					'imageset' => STYLES_IMAGESET_TABLE
				);
				
				
				$style_row = array(
					'style_id'			=> 0,
					'style_name'		=> $installcfg['name'],
					'style_copyright'	=> $installcfg['copyright']
				);
				
				
				$reqd_template = 
					(isset($installcfg['required_template'])) 
					? $installcfg['required_template'] 
					: false;
					
				$reqd_theme = 
					(isset($installcfg['required_theme'])) 
					? $installcfg['required_theme'] 
					: false;
					
				$reqd_imageset = 
					(isset($installcfg['required_imageset'])) 
					? $installcfg['required_imageset'] 
					: false;
				
				// Getting related info				
				foreach ($element_ary as $element => $table)
				{
					$style_row = 
						array_merge(
							$style_row, 
							array(
								$element . '_id'			=> 0,
								$element . '_name'			=> '',
								$element . '_copyright'		=> ''
							)
						);
	
		 			$styles->test_installed(
		 				$element, 
		 				$error, 
		 				
		 				(${'reqd_' . $element}) 
		 					? $phpbb_root_path . 'styles/' . $reqd_template .'/' 
		 					: $root_path, ${'reqd_' . $element}, 
		 					
		 				$style_row[$element . '_id'], 
		 				$style_row[$element . '_name'], 
		 				$style_row[$element . '_copyright']
		 			);
	
					if (!$style_row[$element . '_name'])
						$style_row[$element . '_name'] = $reqd_template;
				}
				
				// Install
				$styles->install_style(
					$error, 
					$action, 
					$root_path,
					$id,
					$name,
					$path,
					$copyright,
					$active,
					$default,
					$style_row
				);
			}
		}
		
		function main($id, $mode)
		{
			global $config, $db, $user, $auth, $template, $cache;
			global $phpbb_root_path, $phpbb_admin_path, $phpEx, $table_prefix;
			
			$this->tpl_name = 'acp_mods';
			$this->page_title = 'ACP_MODS';
			
			$this->tryBuild();
			
			if (
				is_dir(
					BUILDS_DIR . DIRECTORY_SEPARATOR . 
					$this->build->getHash() . DIRECTORY_SEPARATOR . 'install'
				)
			) {
				trigger_error(
					'Remove install dir('.
					BUILDS_DIR . DIRECTORY_SEPARATOR . 
					$this->build->getHash() . DIRECTORY_SEPARATOR . 'install'
					.') and refresh this page',
					E_USER_WARNING
				);
			}
			
			try {
				if (
					!empty($_REQUEST['action']) 
					&&
					in_array(
						$_REQUEST['action'], 
						array('installMods', 'installModsAndStyle')
					)
				) {
					DirUtils::clear($cache->cache_dir);
					if (!isset($_REQUEST['mod']) || !is_array($_REQUEST['mod']))
						$_REQUEST['mod'] = array();
						

					if ($_REQUEST['action'] == 'installModsAndStyle'){
						$this->installStyle($_REQUEST['styleName']);
					}
				$res = $this->installMods($_REQUEST['mod']);
					if ($res instanceof Build) {
						$template->assign_var('WARNING', true);
						
						foreach ($_REQUEST['mod'] as $name)
							$template->assign_block_vars(
								'mods',
								array('NAME'=>$name)
							);
						
						foreach ($res->getDependences('style') as $name)
							$template->assign_block_vars(
								'dependence',
								array('NAME'=>$name)
							);
					} elseif ($res instanceof self) {
						$template->assign_var('SUCCESS', true);
					} else
						$template->assign_var('WARNING2', true);
				}
			} catch (Exception $e) {
				$template->assign_var('WARNING', true);
				foreach ($_REQUEST['mod'] as $name)
					$template->assign_block_vars(
						'mods',
						array('NAME'=>$name)
					);
				if ($res)
				foreach ($res->getDependences('style') as $name)
					$template->assign_block_vars(
						'dependence',
						array('NAME'=>$name)
					);
			}
			
			$this->tryBuild();
//			error_reporting(E_ALL);
			foreach (Mod::getList() as $mod) {
				$template->assign_block_vars(
					'result', 
					array(
						'NAME'    => $mod->getName(),
						'DESC'    => $mod->getInfo(),
						'CHECKED' => 
							$this->build->inBuild($mod)
							? ' checked'
							: ''
					)
				);
			}
			return array();
		}
		
		function tryBuild()
		{
			$this->build = Build::create();
			try {
				$filename = USER_DIR . DIRECTORY_SEPARATOR . ".htaccess";
					
				if (!file_exists($filename))
					file_put_contents($filename, "# build: phpBB3\n");
				
					preg_match(
						'/\# build: (.*)\n/S',
						file_get_contents($filename),
						$sub
					);
				
				$this->build = 
					$this->build->createByHash($sub[1]);
			} catch (Exception $e) {
				// empty build catching
			}
		}
		
		function installMods($mods)
		{
			global $config, $db, $user, $auth, $template, $cache;
			global $phpbb_root_path, $phpbb_admin_path, $phpEx, $table_prefix;
			
			$res = $db->sql_query(
				'SELECT style_name FROM ' . $table_prefix 
				. 'styles WHERE style_id = ' . $config['default_style']
			);
			$this->style = $db->sql_fetchfield('style_name');
			$build = Build::create();
			foreach ($mods as $modName)
				$build->addMod(Mod::create()->setName($modName));
			try {
				$deps = $build->getDependences('style');
			} catch (Exception $e) {
				return null;
			}			
			
			if ($deps && !in_array($this->style, $deps)) {
				return $build;
			} else {
				try {
					InstallAction::me()->setBuild($build)->run();
					file_put_contents(
						USER_DIR . DIRECTORY_SEPARATOR . '.htaccess',
						str_replace(
							$this->build->getHash(),
							$build->getHash(),
							file_get_contents(
								USER_DIR . DIRECTORY_SEPARATOR . '.htaccess'
							)
						)
					);
					
					file_put_contents(
						USER_DIR . DIRECTORY_SEPARATOR . 'nginx.rewrite',
						str_replace(
							$this->build->getHash(),
							$build->getHash(),
							file_get_contents(
								USER_DIR . DIRECTORY_SEPARATOR . 'nginx.rewrite'
							)
						)
					);
				} catch (Exception $e) {
					trigger_error($e->getMessage(),E_USER_WARNING);
				}
			}
			return $this;
		}
	}
	

?>
