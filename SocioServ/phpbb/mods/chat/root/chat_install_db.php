<?php
/**
* Only adjust bitfields, do not rewrite text...
* All new parsings have the img, flash and quote modes set to true
*
* You should make a backup from your users, posts and privmsgs table in case something goes wrong
* Forum descriptions and rules need to be re-submitted manually.
*/
//define('IN_PHPBB', true);
//$phpbb_root_path = './';
//$phpEx = substr(strrchr(__FILE__, '.'), 1);
//include($phpbb_root_path . 'common.'.$phpEx);

// Start session management
//$user->session_begin();
//$auth->acl($user->data);
//$user->setup();


global $config, $db, $user, $auth, $template, $cache;
global $phpbb_root_path, $phpbb_admin_path, $phpEx, $table_prefix;

// is the user logged in?
if (!$user->data['is_registered'])
{
    if ($user->data['is_bot'])
    {
//         the user is a bot, send them back to home plate...
        redirect(append_sid("{$phpbb_root_path}index.$phpEx"));
    }
//     the user is not logged in, give them a chance to login here...
    login_box('', 'LOGIN');
}
else if ($user->data['user_type'] != USER_FOUNDER)
{
    trigger_error('NOT_AUTHORIZED');
}


define('CHAT_TABLE', $table_prefix . 'chat');
define('CHAT_SESSIONS_TABLE', $table_prefix . 'chat_sessions');

$mode = request_var('mode', '');
switch ($mode)
{
	case 'upgrade':
		$sql = 'DROP TABLE ' . CHAT_TABLE;
		$db->sql_query($sql);
	break;
	case 'install':
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
		$sql = "CREATE TABLE IF NOT EXISTS {$table_prefix}chat (
		  message_id int(11) unsigned NOT NULL auto_increment,
		  chat_id int(11) unsigned NOT NULL default '0',
		  user_id int(11) unsigned NOT NULL default '0',
		  username varchar(255) NOT NULL default '',
		  user_colour varchar(6) NOT NULL default '',
		  message text NOT NULL,
		  bbcode_bitfield varchar(255) NOT NULL default '',
		  bbcode_uid varchar(5) NOT NULL default '',
		  bbcode_options tinyint(1) unsigned NOT NULL default '7',
		  time int(11) unsigned NOT NULL default '0',
		  PRIMARY KEY  (message_id)
		)";
		if ($db_type == 'mysql_41')
		{
			$sql .= 'CHARACTER SET `utf8` COLLATE `utf8_bin`';
		}
		$db->sql_query($sql);
		
		$sql = "CREATE TABLE IF NOT EXISTS {$table_prefix}chat_sessions (
		  user_id mediumint(8) unsigned NOT NULL default '0',
		  username varchar(255) NOT NULL default '',
		  user_colour varchar(6) NOT NULL default '',
		  user_login int(11) unsigned NOT NULL default '0',
		  user_firstpost int(11) unsigned NOT NULL default '0',
		  user_lastpost int(11) unsigned NOT NULL default '0',
		  user_lastupdate int(11) unsigned NOT NULL default '0',
		  PRIMARY KEY  (user_id)
		)";
		if ($db_type == 'mysql_41')
		{
			$sql .= 'CHARACTER SET `utf8` COLLATE `utf8_bin`';
		}
		$db->sql_query($sql);
	break;
}
// Done
//$db->sql_close();
//if (!$mode)
//{
//	die('you did not select a mode');
//}
//else
//{
//	die('Database installed successfully. Remove this file from your server');
//}
?>
