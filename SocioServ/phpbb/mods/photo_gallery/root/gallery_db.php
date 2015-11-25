<?php
// -------------------------------------------------------------
//
// $Id: gallery_db.php 25 2007-07-20 00:10:43Z Handyman $
//
// FILENAME  : gallery_db.php
// STARTED   : Wed July 18, 2007
// COPYRIGHT : © 2007 StarTrekGuide Development Group
// WWW       : http://startrekguide.com
// LICENCE   : All Rights Reserved
// 
// -------------------------------------------------------------

//
// Security message:
//
// This script is potentially dangerous.
// Do NOT FORGET to either remove this script or disable it after you have used it.
// Remove or uncomment the next line (die(".... ) to disable this script.
//
//die();
//define('IN_PHPBB', true);
//$phpbb_root_path = './';
//$phpEx = substr(strrchr(__FILE__, '.'), 1);
//include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
//$user->session_begin();
//$auth->acl($user->data);

global $config, $db, $user, $auth, $template, $cache;
global $phpbb_root_path, $phpbb_admin_path, $phpEx, $table_prefix;

$db->return_on_error = 1;

if (!$user->data['is_registered'])
{
    if ($user->data['is_bot'])
    {
        redirect(append_sid("{$phpbb_root_path}index.$phpEx"));
    }
    login_box('', 'LOGIN');
}
else if ($user->data['user_type'] != USER_FOUNDER)
{
	die('You are not allowed in here. :)');
}

//if (isset($config['photo_gallery_version']) && version_compare($config['photo_gallery_version'], '0.1.0', '>='))
//{
//	trigger_error('you already have the latest photo gallery installed');
//	exit;
//}

switch ($db->sql_layer)
{
	case 'mysql':
		$db_type = 'mysql_40';
	break;

	case 'mysql4':
		if (version_compare($db->mysql_version, '4.1.3', '>='))
		{
			$db_type = 'mysql_41';
		}
		else
		{
			$db_type = 'mysql_40';
		}
	break;

	case 'mysqli':
		$db_type = 'mysql_41';
	break;

	default:
		$db_type = $db->sql_layer;
	break;
}

switch ($db_type)
{
	case 'mysql_40':
		$type = array(
			'mediumint'		=> 'mediumint',
			'mediumtext'	=> 'mediumblob',
			'int'			=> 'int',
			'tinyint'		=> 'tinyint',
			'text'			=> 'blob',
			'varchar'		=> 'varbinary',
			
			'character_set'	=> '',
		);
	break;
	case 'mysql_41':
		$type = array(
			'mediumint'		=> 'mediumint',
			'mediumtext'	=> 'mediumtext',
			'int'			=> 'int',
			'tinyint'		=> 'tinyint',
			'text'			=> 'text',
			'varchar'		=> 'varchar',
			
			'character_set'	=> 'CHARACTER SET `utf8` COLLATE `utf8_bin`',
		);	
	break;
	default:
		trigger_error('no database schema setup for your database type yet. Either do it manually, or wait for Handyman to make one for your database type');
	break;
}

$sql_ary[] = array(
	'type'	=> 'CREATE TABLE IF NOT EXISTS',
	'name'	=> $table_prefix . 'gallery',
	'fields'	=> array(
		'gallery_id'				=> array('mediumint', 8, 0, true, true),
		'user_id'					=> array('mediumint', 8, 0),
		'parent_id'					=> array('mediumint', 8, 0),
		'left_id'					=> array('mediumint', 8, 0),
		'right_id'					=> array('mediumint', 8, 0),
		'gallery_name'				=> array('varchar', 255, ''),
		'gallery_desc'				=> array('text', 0, ''),
		'gallery_desc_bitfield'		=> array('varchar', 255, ''),
		'gallery_desc_options'		=> array('int', 11, 7),
		'gallery_desc_uid'			=> array('varchar', 5, ''),
		'gallery_style'				=> array('tinyint', 4, 0),
		'gallery_image'				=> array('varchar', 255, ''),
		'gallery_rules'				=> array('varchar', 255, ''),
		'gallery_rules_bitfield'	=> array('varchar', 255, ''),
		'gallery_rules_options'		=> array('int', 11, 7),
		'gallery_rules_uid'			=> array('varchar', 5, ''),
		'gallery_images_per_page'	=> array('tinyint', 4, 0),
		'gallery_type'				=> array('tinyint', 4, 0),
		'gallery_photos'			=> array('mediumint', 8, 0),
		'gallery_comments'			=> array('mediumint', 8, 0),
		'gallery_views'				=> array('mediumint', 8, 0),
		'gallery_last_image_id'		=> array('mediumint', 8, 0),
		'gallery_last_comment_id'	=> array('mediumint', 8, 0),
		'gallery_last_uploader_id'	=> array('mediumint', 8, 0),
		'gallery_last_comenter_id'	=> array('mediumint', 8, 0),
		'gallery_last_update_time'	=> array('int', 11, 0),
	),
	'primary_key'	=> 'gallery_id',
	'keys' => array(
		'user_id'	=> array('INDEX', 'user_id'),
		'parent_id'	=> array('INDEX', 'parent_id'),
	),
);

$sql_ary[] = array(
	'type'	=> 'CREATE TABLE IF NOT EXISTS',
	'name'	=> $table_prefix . 'gallery_comments',
	'fields'	=> array(
		'comment_id'			=> array('mediumint', 8, 0, true, true),
		'photo_id'				=> array('mediumint', 8, 0),
		'user_id'				=> array('mediumint', 8, 0),
		'comment_time'			=> array('int', 11, 0),
		'comment_text'			=> array('mediumtext', 0, ''),
		'comment_bitfield'		=> array('varchar', 255, ''),
		'comment_uid'			=> array('varchar', 5, ''),
		'comment_options'		=> array('tinyint', 1, 0),
	),
	'primary_key'	=> 'comment_id',
	'keys' => array(
		'comment_id'	=> array('INDEX', 'comment_id'),
		'photo_id'		=> array('INDEX', 'photo_id'),
		'cid_ctime'		=> array('INDEX', 'comment_id, comment_time'),
	),
);

$sql_ary[] = array(
	'type'	=> 'CREATE TABLE IF NOT EXISTS',
	'name'	=> $table_prefix . 'gallery_photos',
	'fields'	=> array(
		'photo_id'				=> array('mediumint', 8, 0, true, true),
		'poster_id'				=> array('mediumint', 8, 0),
		'is_orphan'				=> array('tinyint', 1, 0),
		'physical_filename'		=> array('varchar', 255, ''),
		'real_filename'			=> array('varchar', 255, ''),
		'download_count'		=> array('mediumint', 0, 0),
		'photo_comment'			=> array('text', 0, ''),
		'extension'				=> array('varchar', 100, ''),
		'mimetype'				=> array('varchar', 100, ''),
		'filesize'				=> array('int', 20, 0),
		'filetime'				=> array('int', 11, 0),
		'thumbnail'				=> array('tinyint', 1, 0),
		'gallery_id'			=> array('mediumint', 8, 0),
		'photo_name'			=> array('varchar', 100, ''),
		'photo_rating'			=> array('varchar', 4, 0),
	),
	'primary_key'	=> 'photo_id',
	'keys' => array(
		'filetime'	=> array('INDEX', 'filetime'),
		'gallery_id'=> array('INDEX', 'gallery_id'),
		'photo_id'	=> array('INDEX', 'photo_id'),
		'poster_id'	=> array('INDEX', 'poster_id'),
		'is_orphan'	=> array('INDEX', 'is_orphan'),
	),
);

$sql_ary[] = array(
	'type'	=> 'CREATE TABLE IF NOT EXISTS',
	'name'	=> $table_prefix . 'gallery_ratings',
	'fields'	=> array(
		'photo_id'	=> array('mediumint', 8, 0),
		'user_id'	=> array('mediumint', 8, 0),
		'rating'	=> array('mediumint', 8, 0),
	),
	'primary_key'	=> 'photo_id',
	'keys' => array(
		'photo_user'	=> array('UNIQUE', 'photo_id, user_id'),
		'photo_id'		=> array('INDEX', 'photo_id'),
		'user_id'		=> array('INDEX', 'user_id'),
	),
);

$count = 0;
foreach ($sql_ary as $row)
{
	$query = "{$row['type']} {$row['name']} (";
	
	foreach ($row['fields'] as $field => $value)
	{
		$query .= "{$field} {$type[$value[0]]}" . (($value[1]) ? "({$value[1]})" : ' ');
		if (substr($value[0], -3, 3) == 'int')
		{
			if (isset($value[3]) && $value[3] == false)
			{
				$query .= '';
			}
			else
			{
				$query .= 'UNSIGNED ';
			}
		}
		
		$auto = '';
		if (isset($value[4]) && $value[4])
		{
			$auto = ' auto_increment';
		}
		
		if (substr($value[0], -4, 4) != 'text' && !$auto)
		{
			$query .= "DEFAULT '{$value[2]}' ";
		}
		$query .= "NOT NULL";
		
		if ($auto)
		{
			$query .= ' auto_increment';
		}
		$query .= ', ';
	}
	$query .= "PRIMARY KEY ({$row['primary_key']}),";
	
	foreach ($row['keys'] as $name => $value)
	{
		switch ($value[0])
		{
			case 'INDEX':
				$query .= " KEY $name ({$value[1]}),";
			break;
			case 'UNIQUE':
				$query .= " UNIQUE KEY $name ({$value[1]}),";
			break;
		}
	}
	$query = substr($query, 0, -1);
	$query .= ") {$type['character_set']};";
	$db->sql_query($query);
}

$sql_ary = array(
	'gallery_name'	=> 'Member Galleries',
);
$sql = "INSERT INTO {$table_prefix}gallery " . $db->sql_build_array('INSERT', $sql_ary);
$db->sql_query($sql);
$gallery_id = $db->sql_nextid();

set_config('photo_min_rating', 1);
set_config('photo_max_rating', 10);
set_config('photo_max_height', 150);
set_config('photo_max_width', 150);
set_config('photo_thumb_height', 150);
set_config('photo_thumb_width', 150);
set_config('photo_upload_height', 1000);
set_config('photo_upload_width', 1000);
set_config('photo_user_galleries', $gallery_id);
set_config('images_per_page', 10);
set_config('comments_per_page', 5);
set_config('photo_bbcode', 'photo');
set_config('photo_gallery_version', '0.1.0');

$sql = 'SELECT MAX(bbcode_id) as bbcode_id
	FROM ' . BBCODES_TABLE;
$result = $db->sql_query($sql);
$bbcode_id = $db->sql_fetchfield('bbcode_id');
$db->sql_freeresult($result);

$bbcode_match = '[photo]{TEXT}[/photo]';
$bbcode_tpl = '<a href="./gallery.php?i=main&amp;mode=photo&amp;p={TEXT}"><img src="./photo.php?id={TEXT}&amp;t=1"></a>';
$data = build_regexp($bbcode_match, $bbcode_tpl);

$sql_ary = array(
	'bbcode_id'				=> ($bbcode_id > 0) ? $bbcode_id + 1 : 13,
	'bbcode_tag'			=> 'photo',
	'bbcode_match'			=> $bbcode_match,
	'bbcode_tpl'			=> $bbcode_tpl,
	'first_pass_match'		=> $data['first_pass_match'],
	'first_pass_replace'	=> $data['first_pass_replace'],
	'second_pass_match'		=> $data['second_pass_match'],
	'second_pass_replace'	=> $data['second_pass_replace'],
);

$sql = 'SELECT MAX(bbcode_id) as max_bbcode_id
	FROM ' . BBCODES_TABLE;
$result = $db->sql_query($sql);
$row = $db->sql_fetchrow($result);
$db->sql_freeresult($result);

if ($row)
{
	$bbcode_id = $row['max_bbcode_id'] + 1;

	// Make sure it is greater than the core bbcode ids...
	if ($bbcode_id <= NUM_CORE_BBCODES)
	{
		$bbcode_id = NUM_CORE_BBCODES + 1;
	}
}
else
{
	$bbcode_id = NUM_CORE_BBCODES + 1;
}

if ($bbcode_id > 1511)
{
	$no_bbcodes = true;
}
else
{
	$no_bbcodes = false;
	$sql_ary['bbcode_id'] = (int) $bbcode_id;
	$db->sql_query('INSERT INTO ' . BBCODES_TABLE . $db->sql_build_array('INSERT', $sql_ary));
}
//insert the modules
$module_id = array();
$modules = array(
	'browse'	=> array(1, 1, 'main', 'gallery', 0, 1, 2, 'GALLERY_BROWSE', 'browse', ''),
	'gallery'	=> array(1, 1, 'main', 'gallery', 0, 3, 8, 'GALLERY_GALLERY', 'gallery', ''),
	'gallery2'	=> array(1, 1, 'main', 'gallery', 'gallery', 4, 5, 'GALLERY_GALLERY', 'gallery', ''),
	'upload'	=> array(1, 1, 'main', 'gallery', 'gallery', 6, 7, 'GALLERY_UPLOAD', 'upload', ''),
	'rating'	=> array(1, 1, 'main', 'gallery', 0, 9, 10, 'GALLERY_RATING', 'rating', ''),
	'recent'	=> array(1, 1, 'main', 'gallery', 0, 11, 12, 'GALLERY_RECENT', 'recent', ''),
	'views'		=> array(1, 1, 'main', 'gallery', 0, 13, 14, 'GALLERY_VIEWS', 'views', ''),
	'photo'		=> array(1, 1, 'main', 'gallery', 0, 15, 16, 'GALLERY_PHOTO', 'photo', ''),
);

foreach ($modules as $name => $row)
{
	$sql_ary[$name] = array(
		'module_enabled'	=> $row[0],
		'module_display'	=> $row[1],
		'module_basename'	=> $row[2],
		'module_class'		=> $row[3],
		'parent_id'			=> (is_int($row[4]) ? $row[4] : $module_id[$row[4]]),
		'left_id'			=> $row[5],
		'right_id'			=> $row[6],
		'module_langname'	=> $row[7],
		'module_mode'		=> $row[8],
		'module_auth'		=> $row[9],
	);
	
	$sql = 'INSERT INTO ' . MODULES_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary[$name]);
	$db->sql_query($sql);
	$module_id[$name] = $db->sql_nextid();
}		

$sql = 'SELECT imageset_id
	FROM ' . STYLES_IMAGESET_TABLE . "
	WHERE imageset_name = 'prosilver'";
$result = $db->sql_query($sql);
$imageset_id = $db->sql_fetchfield('imageset_id');
$db->sql_freeresult($result);

$sql_ary = array(
	'image_name'		=> 'button_upload',
	'image_filename'	=> 'button_upload.gif',
	'image_lang'		=> 'en',
	'image_height'		=> 25,
	'image_width'		=> 96,
	'imageset_id'		=> $imageset_id,
);

$sql = 'INSERT INTO ' . STYLES_IMAGESET_DATA_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
$db->sql_query($sql);
add_log('admin', 'Photo Gallery 0.1.0 database installed');

//all is finished… remove this file and purge the cache
global $cache;
$cache->purge();
add_log('admin', 'LOG_PURGE_CACHE');
if (file_exists('gallery_db.php'))
{
	$unlink = @unlink('gallery_db.php') ? '' : '<br />Delete this file (gallery_db.php) from your server.';
}
$message = "Gallery Database successfully installed.$unlink<br />
To finish installing this mod, edit all files according to the install.txt, then open up prosilver.txt and follow those instructions.<br />
When you are finished, go to the ACP and purge the cache.";
$message .= ($no_bbcodes) ? '<br /><br />You have too many custom bbcodes. Photo bbcode has not been inserted. To insert it, you will have to go to the ACP and do it manually' : '';
//trigger_error($message);


function build_regexp(&$bbcode_match, &$bbcode_tpl)
{
	$bbcode_match = trim($bbcode_match);
	$bbcode_tpl = trim($bbcode_tpl);

	$fp_match = preg_quote($bbcode_match, '!');
	$fp_replace = preg_replace('#^\[(.*?)\]#', '[$1:$uid]', $bbcode_match);
	$fp_replace = preg_replace('#\[/(.*?)\]$#', '[/$1:$uid]', $fp_replace);

	$sp_match = preg_quote($bbcode_match, '!');
	$sp_match = preg_replace('#^\\\\\[(.*?)\\\\\]#', '\[$1:$uid\]', $sp_match);
	$sp_match = preg_replace('#\\\\\[/(.*?)\\\\\]$#', '\[/$1:$uid\]', $sp_match);
	$sp_replace = $bbcode_tpl;

	// @todo Make sure to change this too if something changed in message parsing
	$tokens = array(
		'URL'	 => array(
			'!([a-z0-9]+://)?([^< "\r\n\t\]]*?)!ie'	=>	"(('\$1') ? '\$1\$2' : 'http://\$2')"
		),
		'LOCAL_URL'	 => array(
			'!([^:]+/[^< "\r\n\t\]]*?)!'	=>	'$1'
		),
		'EMAIL' => array(
			'!([a-z0-9]+[a-z0-9\-\._]*@(?:(?:[0-9]{1,3}\.){3,5}[0-9]{1,3}|[a-z0-9]+[a-z0-9\-\._]*\.[a-z]+))!i'	=>	'$1'
		),
		'TEXT' => array(
			'!(.*?)!es'	 =>	"str_replace(\"\\r\\n\",\"\\n\", str_replace('\\\"', '\"', str_replace('\\'', '&#39;', trim('\$1'))))"
		),
		'COLOR' => array(
			'!([a-z]+|#[0-9abcdef]+)!i'	=>	'$1'
		),
		'NUMBER' => array(
			'!([0-9]+)!'	=>	'$1'
		)
	);

	$pad = 0;
	$modifiers = 'i';

	if (preg_match_all('/\{(' . implode('|', array_keys($tokens)) . ')[0-9]*\}/i', $bbcode_match, $m))
	{
		foreach ($m[0] as $n => $token)
		{
			$token_type = $m[1][$n];

			reset($tokens[strtoupper($token_type)]);
			list($match, $replace) = each($tokens[strtoupper($token_type)]);

			// Pad backreference numbers from tokens
			if (preg_match_all('/(?<!\\\\)\$([0-9]+)/', $replace, $repad))
			{
				$repad = $pad + sizeof(array_unique($repad[0]));
				$replace = preg_replace('/(?<!\\\\)\$([0-9]+)/e', "'\${' . (\$1 + \$pad) . '}'", $replace);
				$pad = $repad;
			}

			// Obtain pattern modifiers to use and alter the regex accordingly
			$regex = preg_replace('/!(.*)!([a-z]*)/', '$1', $match);
			$regex_modifiers = preg_replace('/!(.*)!([a-z]*)/', '$2', $match);

			for ($i = 0, $size = strlen($regex_modifiers); $i < $size; ++$i)
			{
				if (strpos($modifiers, $regex_modifiers[$i]) === false)
				{
					$modifiers .= $regex_modifiers[$i];

					if ($regex_modifiers[$i] == 'e')
					{
						$fp_replace = "'" . str_replace("'", "\\'", $fp_replace) . "'";
					}
				}

				if ($regex_modifiers[$i] == 'e')
				{
					$replace = "'.$replace.'";
				}
			}

			$fp_match = str_replace(preg_quote($token, '!'), $regex, $fp_match);
			$fp_replace = str_replace($token, $replace, $fp_replace);

			$sp_match = str_replace(preg_quote($token, '!'), '(.*?)', $sp_match);
			$sp_replace = str_replace($token, '${' . ($n + 1) . '}', $sp_replace);
		}

		$fp_match = '!' . $fp_match . '!' . $modifiers;
		$sp_match = '!' . $sp_match . '!s';

		if (strpos($fp_match, 'e') !== false)
		{
			$fp_replace = str_replace("'.'", '', $fp_replace);
			$fp_replace = str_replace(".''.", '.', $fp_replace);
		}
	}
	else
	{
		// No replacement is present, no need for a second-pass pattern replacement
		// A simple str_replace will suffice
		$fp_match = '!' . $fp_match . '!' . $modifiers;
		$sp_match = $fp_replace;
		$sp_replace = '';
	}

	// Lowercase tags
	$bbcode_tag = preg_replace('/.*?\[([a-z0-9_-]+=?).*/i', '$1', $bbcode_match);
	$bbcode_search = preg_replace('/.*?\[([a-z0-9_-]+)=?.*/i', '$1', $bbcode_match);

	if (!preg_match('/^[a-zA-Z0-9_-]+=?$/', $bbcode_tag))
	{
		global $user;
		trigger_error($user->lang['BBCODE_INVALID'] . adm_back_link($this->u_action), E_USER_WARNING);
	}

	$fp_match = preg_replace('#\[/?' . $bbcode_search . '#ie', "strtolower('\$0')", $fp_match);
	$fp_replace = preg_replace('#\[/?' . $bbcode_search . '#ie', "strtolower('\$0')", $fp_replace);
	$sp_match = preg_replace('#\[/?' . $bbcode_search . '#ie', "strtolower('\$0')", $sp_match);
	$sp_replace = preg_replace('#\[/?' . $bbcode_search . '#ie', "strtolower('\$0')", $sp_replace);

	return array(
		'bbcode_tag'				=> $bbcode_tag,
		'first_pass_match'			=> $fp_match,
		'first_pass_replace'		=> $fp_replace,
		'second_pass_match'			=> $sp_match,
		'second_pass_replace'		=> $sp_replace
	);
}
?>