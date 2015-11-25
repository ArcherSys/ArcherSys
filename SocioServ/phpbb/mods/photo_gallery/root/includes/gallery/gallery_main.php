<?php
/** 
*
* @package gallery
* @version $Id: gallery_main.php 23 2007-07-19 16:26:54Z Handyman $
* @copyright (c) 2007 StarTrekGuide Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* gallery_main
* Gallery Front Panel
* @package gallery
*/
class gallery_main
{
	var $p_master;
	var $u_action;
	
	function gallery_main(&$p_master)
	{
		$this->p_master = &$p_master;
	}

	function main($id, $mode)
	{
		global $config, $db, $user, $auth, $template, $phpbb_root_path, $phpEx, $filename;

		$template->assign_vars(array(
			'S_GALLERY'	=> true,
		));
		$template_root = 'gallery/';

		$cat_id		= request_var('c', 0);
		$gallery_id	= request_var('g', 0);
		$user_id	= request_var('u', 0);
		$username	= request_var('un', '', true);
		$start		= request_var('start', 0);
		$photo_id	= request_var('p', 0);
		$submit		= isset($_REQUEST['submit']) ? true : false;
		
		define('USER_GALLERIES', 1);
		define('GALLERY_UPLOAD', 1);

		//define the extensions we need to grab
		$sql = 'SELECT e.extension
			FROM ' . EXTENSIONS_TABLE . ' e
			LEFT JOIN ' . EXTENSION_GROUPS_TABLE . " eg ON (eg.group_id = e.group_id)
			WHERE eg.group_name = 'Images'";
		$result = $db->sql_query($sql);
		$extensions = '';
		while ($row = $db->sql_fetchrow($result))
		{
			$extensions .= (!$extensions) ? "'{$row['extension']}'" : ", '{$row['extension']}'";
		}
		$db->sql_freeresult($result);
		
		//set our multibyte to utf8
		mb_internal_encoding("UTF-8");
		
		// Set desired template
		$this->tpl_name = $template_root . $mode;
		$this->page_title = $user->lang['GALLERY_' . strtoupper($mode)] . ' ' . $user->lang['PHOTOS'];
		$template->assign_vars(array(
			'WHOS_PHOTOS'	=> $user->lang['GALLERY_' . strtoupper($mode)] . ' ' . $user->lang['PHOTOS'],
		));
		$this->u_action = str_replace("&amp;mode=$mode", '', $this->u_action);
		switch ($mode)
		{
			case 'browse':
				//select information about the gallery we're in
				if (!$cat_id && !$gallery_id)
				{
					if ($gallery_id)
					{
						$sql = 'SELECT *
							FROM ' . GALLERY_TABLE . "
							WHERE gallery_id = $gallery_id";
					}
					else if ($user_id)
					{
						$sql = 'SELECT *
							FROM ' . GALLERY_TABLE . "
							WHERE user_id = $user_id";
					}
					else if ($username)
					{
						$sql = 'SELECT g.*
							FROM ' . GALLERY_TABLE . ' g, ' . USERS_TABLE . " u
							WHERE u.username_clean = '" . $db->sql_escape(utf8_clean_string($username)) . "'
							AND g.user_id = u.user_id";
					}
				}
				else
				{
					$sql = 'SELECT *
						FROM ' . GALLERY_TABLE . "
						WHERE gallery_id = $cat_id";
				}

				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$gallery = array(
					'gallery_id'	=> isset($row['gallery_id']) ? $row['gallery_id'] : 0,
					'user_id'		=> isset($row['user_id']) ? $row['user_id'] : 0,
					'parent_id'		=> isset($row['parent_id']) ? $row['parent_id'] : 0,
					'left_id'		=> isset($row['left_id']) ? $row['left_id'] : 0,
					'right_id'		=> isset($row['right_id']) ? $row['right_id'] : 0,
					'gallery_name'	=> isset($row['gallery_name']) ? $row['gallery_name'] : 'gallery',
					'gallery_desc'	=> isset($row['gallery_desc']) ? $row['gallery_desc'] : 'gallery',
					'gallery_type'	=> isset($row['gallery_type']) ? $row['gallery_type'] : 0,
					'gallery_last_update_time'	=> isset($row['gallery_last_update_time']) ? $row['gallery_last_update_time'] : 0,
				);
				$db->sql_freeresult($result);					

				//get list of categories under current category
				$sql = 'SELECT *
					FROM ' . GALLERY_TABLE . "
					WHERE parent_id = {$gallery['gallery_id']}
					ORDER BY left_id ASC";

				//if this is a user galleries cat, grab a little differently
				if ($gallery['gallery_type'] == USER_GALLERIES)
				{
					$sql = 'SELECT g.*, u.username, u.user_colour
						FROM ' . GALLERY_TABLE . ' g, ' . USERS_TABLE .' u
						WHERE g.user_id <> 0
							AND g.user_id = u.user_id
						ORDER BY u.username ASC';
				}
				
				$result = $db->sql_query_limit($sql, $config['topics_per_page'], $start);
				while ($row = $db->sql_fetchrow($result))
				{
					if ($row['gallery_id'] != $gallery['gallery_id'])
					{
						$template->assign_block_vars('catrow', array(
							'GALLERY_COMMENTS'			=> $row['gallery_comments'],
							'GALLERY_DESC'				=> $row['gallery_desc'],
							'GALLERY_IMAGE'				=> ($row['gallery_image']) ? $row['gallery_image'] : false,
							'GALLERY_LAST_IMAGE_ID'		=> $row['gallery_last_image_id'],
							'GALLERY_LAST_COMMENT_ID'	=> $row['gallery_last_comment_id'],
							'GALLERY_LAST_UPLOADER_ID'	=> $row['gallery_last_uploader_id'],
							'GALLERY_LAST_COMMENTOR_ID'	=> $row['gallery_last_comenter_id'],
							'GALLERY_NAME'				=> $row['gallery_name'],
							'GALLERY_PHOTOS'			=> $row['gallery_photos'],
							'GALLERY_VIEWS'				=> $row['gallery_views'],
							
							'U_GALLERY_LINK'			=> $this->u_action . "&amp;mode=$mode&amp;c={$row['gallery_id']}",
						));
					}
				}
				$db->sql_freeresult($result);
				
				//if we're looking at a users gallery, grab their images
				$where = "a.gallery_id = {$gallery['gallery_id']}";
				if ($gallery['user_id'])
				{
					$where = "a.poster_id = {$gallery['user_id']} AND a.gallery_id <> 0";
				}

				//grab gallery information
				if ($gallery['gallery_id'])
				{
					//grab images for this gallery
					$sql = 'SELECT a.*, u.username, u.user_id, u.user_colour
						FROM ' . GALLERY_PHOTOS_TABLE . ' a
						LEFT JOIN ' . USERS_TABLE . " u ON (u.user_id = a.poster_id)
						WHERE $where
							AND a.extension IN ($extensions)
						ORDER BY a.filetime DESC";
					$result = $db->sql_query_limit($sql, $config['images_per_page'], $start);
					
					while ($row = $db->sql_fetchrow($result))
					{
						$template->assign_block_vars('imagerow', array(
							'PHOTO_COMMENT'	=> ((mb_strlen($row['photo_comment']) > 20) ? mb_substr($row['photo_comment'], 0, 20) . '...' : $row['photo_comment']),
							'PHOTO_MOUSEOVER'	=> (mb_strlen($row['photo_comment']) > 20) ? $row['photo_comment'] : '',
							'PHOTO_NAME'		=> $row['photo_name'],
							'COMMENT_FULL'		=> $row['photo_comment'],
							'IMAGE_TIME'		=> $user->format_date($row['filetime']),
							'IMAGE_VIEWS'		=> $row['download_count'],
							'IMAGE_ID'			=> $row['photo_id'],
							'TOPIC_ID'			=> ($row['thumbnail']) ? 1 : false,
							'USERNAME_FULL'		=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour'], $user->lang['GUEST']),
							'U_IMAGE_DOWNLOAD'	=> $this->u_action . "&amp;mode=photo&amp;p={$row['photo_id']}",
							'U_IMAGE_THUMBNAIL'	=> append_sid("{$phpbb_root_path}photo.$phpEx", "id={$row['photo_id']}" . (($row['thumbnail']) ? '&amp;t=1' : '')),
						));
						
						$template->assign_vars(array(
							'S_PHOTOS'	=> true,
						));
					}

					//if we're looking at a users gallery, grab their images
					$where = "gallery_id = {$gallery['gallery_id']}";
					if ($gallery['user_id'])
					{
						$where = "poster_id = {$gallery['user_id']} AND gallery_id <> 0";
					}
					
					$update_photos = '';
					if ($gallery['gallery_last_update_time'] < strtotime('-1 day', time()) && $gallery['gallery_id'])
					{
						//update number of images in gallery… this will be removed when this feature works properly
						$sql = 'SELECT COUNT(gallery_id) as total_photos
							FROM ' . GALLERY_PHOTOS_TABLE . "
							WHERE $where
								AND extension IN ($extensions)";
						$result = $db->sql_query($sql);
						$gallery_photos = $db->sql_fetchfield('total_photos');
						$db->sql_freeresult($result);
						$update_photos = ", gallery_photos = $gallery_photos, gallery_last_update_time = " . time();
					}
					
					//increment the view number for this gallery
					$sql = 'UPDATE ' . GALLERY_TABLE . "
						SET gallery_views = gallery_views + 1
							$update_photos
						WHERE gallery_id = {$gallery['gallery_id']}";
					$db->sql_query($sql);
				}

				$template->assign_vars(array(
					'GALLERY_NAME'	=> $gallery['gallery_name'],
					'GALLERY_DESC'	=> $gallery['gallery_desc'],
					'UPLOAD_ICON'	=> $user->img('icon_upload', 'REPLY_WITH_QUOTE'),
				));
			break;
			case 'gallery':
				if (!$user->data['is_registered'])
				{
					// Can this user view profiles/memberlist?
					login_box('', $user->lang['LOGIN_EXPLAIN_' . strtoupper($mode)]);
				}

				$sql = "SELECT *
					FROM " . GALLERY_PHOTOS_TABLE . "
					WHERE poster_id = {$user->data['user_id']}
						AND extension IN ($extensions)
						and gallery_id <> 0
					ORDER BY filetime DESC";
				$result = $db->sql_query_limit($sql, $config['images_per_page'], $start);
				$count = 0;
				while ($row = $db->sql_fetchrow($result))
				{
					$template->assign_block_vars('imagerow', array(
						'PHOTO_COMMENT'		=> ((mb_strlen($row['photo_comment']) > 20) ? mb_substr($row['photo_comment'], 0, 20) . '...' : $row['photo_comment']),
						'PHOTO_MOUSEOVER'	=> (mb_strlen($row['photo_comment']) > 20) ? $row['photo_comment'] : '',
						'PHOTO_NAME'		=> $row['photo_name'],
						'COMMENT_FULL'		=> $row['photo_comment'],
						'IMAGE_TIME'		=> $user->format_date($row['filetime']),
						'IMAGE_VIEWS'		=> $row['download_count'],
						'IMAGE_ID'			=> $row['photo_id'],
						'TOPIC_ID'			=> ($row['thumbnail']) ? 1 : false,
						'USERNAME_FULL'		=> get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour'], $user->lang['GUEST']),
						'U_IMAGE_DOWNLOAD'	=> $this->u_action . "&amp;mode=photo&amp;p={$row['photo_id']}",
						'U_IMAGE_THUMBNAIL'	=> append_sid("{$phpbb_root_path}photo.$phpEx", "id={$row['photo_id']}" . (($row['thumbnail']) ? '&amp;t=1' : '')),
					));
					$count++;
				}

				$total_pages = 1;
				if ($count == $config['images_per_page'])
				{
					$sql = "SELECT COUNT(photo_id) as total_images
						FROM " . GALLERY_PHOTOS_TABLE . "
						WHERE poster_id = {$user->data['user_id']}
							AND extension IN ($extensions)";
					$result = $db->sql_query($sql);
					$total_pages = $db->sql_fetchfield('total_images') / ($config['images_per_page'] > 0) ? $config['images_per_page'] : 1;
					$db->sql_freeresult($result);
				}
				
				$template->assign_vars(array(
					'WHOS_PHOTOS'	=> get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour'], $user->lang['GUEST']) . ' ' . $user->lang['PHOTOS'],
					'USERNAME_FULL'	=> get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour'], $user->lang['GUEST']),
		
					'MAX_WIDTH'		=> $config['img_max_thumb_width'],
					'MAX_HEIGHT'	=> $config['img_link_height'],
					
					'PAGINATION'	=> generate_pagination($this->u_action . "&amp;mode=$mode&amp;un={$user->data['username']}", $total_pages, $config['images_per_page'], $start, true),
					
					'U_UPLOAD'		=> $this->u_action . '&amp;mode=upload',
				));
				$this->page_title = $user->data['username'] . ' ' . $user->lang['PHOTOS'];
			break;
			case 'photo':
				if ($submit)
				{
					$rating = request_var('rating', 0);
					$comment = utf8_normalize_nfc(request_var('message', '', true));

					//update the rating for this photo
					if ($rating)
					{
						$sql = 'SELECT * FROM ' . GALLERY_RATINGS_TABLE . "
							WHERE user_id = {$user->data['user_id']}
							AND photo_id = $photo_id";
						$result = $db->sql_query($sql);
						$row = $db->sql_fetchrow($result);
						$db->sql_fetchrow($result);
						
						if ($row['photo_id'])
						{
							trigger_error('ALREADY_RATED');
						}
						else
						{
							$sql_ary = array(
								'photo_id'	=> $photo_id,
								'user_id'	=> $user->data['user_id'],
								'rating'	=> $rating,
							);
							$sql = 'INSERT INTO ' . GALLERY_RATINGS_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
							$db->sql_query($sql);
							
							$count = $rating = 0;
							$sql = 'SELECT rating FROM ' . GALLERY_RATINGS_TABLE . " WHERE photo_id = $photo_id";
							$result = $db->sql_query($sql);
							while ($row = $db->sql_fetchrow($result))
							{
								$count++;
								$rating += $row['rating'];
							}
							$db->sql_freeresult($result);
							
							if ($count)
							{
								$rating = $rating / $count;
								$sql = 'UPDATE ' . GALLERY_PHOTOS_TABLE . " SET photo_rating = $rating WHERE photo_id = $photo_id";
								$db->sql_query($sql);
								
								redirect(append_sid("./$filename", "i=$id&amp;mode=$mode&amp;p=$photo_id"));
							}
						}
					}
					//add a comment for this photo
					else if ($comment)
					{
						$uid = $bitfield = $options = ''; // will be modified by generate_text_for_storage
						$allow_bbcode = $allow_urls = $allow_smilies = true;
						generate_text_for_storage($comment, $uid, $bitfield, $options, $allow_bbcode, $allow_urls, $allow_smilies);

						$sql_ary = array(
							'photo_id'			=> $photo_id,
							'user_id'			=> $user->data['user_id'],
							'comment_time'		=> time(),
							'comment_text'		=> $comment,
							'comment_bitfield'	=> $bitfield,
							'comment_uid'		=> $uid,
							'comment_options'	=> $options,
						);
						$sql = 'INSERT INTO ' . GALLERY_COMMENTS_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
						$db->sql_query($sql);
						redirect(append_sid("./$filename", "i=$id&amp;mode=$mode&amp;p=$photo_id"));
					}
				}
				$where = "ORDER BY a.filetime DESC";
				if ($photo_id)
				{
					$where = "AND a.photo_id = $photo_id";
				}
				
				//generate smliies
				include($phpbb_root_path . 'includes/functions_posting.' . $phpEx);
				generate_smilies('inline', 1);
				
				$sql = 'SELECT a.*, u.username, u.user_colour, g.rating
					FROM ' . GALLERY_PHOTOS_TABLE . ' a, ' . USERS_TABLE . ' u
					LEFT JOIN ' . GALLERY_RATINGS_TABLE . " g ON (g.photo_id = $photo_id)
					WHERE a.extension IN ($extensions) AND a.poster_id = u.user_id $where";
				$result = $db->sql_query_limit($sql, 1);
				$photo = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);
				
				if (!$photo['rating'])
				{
					//setup rate photo
					$start = $config['photo_min_rating'];
					$stop = $config['photo_max_rating'];
					
					$photo_rate = '<select name="rating">';
					$photo_rate .= '<option disabled="disabled" selected="selected">' . $user->lang['RATE_THIS'] . '</option>';
					for ($i = $start; $i <= $stop; $i++)
					{
						$photo_rate .= '<option id="' . $i . '">' . $i . '</option>';
					}
					$photo_rate .= '</select>';
				}
				else
				{
					$photo_rate = "({$photo['rating']})";
				}
				
				$template->assign_vars(array(
					'PHOTO_BBCODE'		=> "[{$config['photo_bbcode']}]{$photo['photo_id']}[/{$config['photo_bbcode']}]",
					'PHOTO_DESCRIPTION'	=> $photo['photo_comment'],
					'PHOTO_DETAILS'		=> '',
					'PHOTO_ID'			=> $photo['photo_id'],
					'PHOTO_NAME'		=> $photo['photo_name'],
					'PHOTO_POST_TIME'	=> $user->format_date($photo['filetime']),
					'PHOTO_POSTER'		=> get_username_string('full', $photo['poster_id'], $photo['username'], $photo['user_colour']),
					'PHOTO_RATE'		=> $photo_rate,
					'PHOTO_RATED'		=> $photo['rating'],
					'PHOTO_RATING'		=> round($photo['photo_rating'], 2),
					'PHOTO_SIZE'		=> $photo['filesize'],
					'PHOTO_TYPE'		=> $photo['extension'],
					'PHOTO_VIEWS'		=> $photo['download_count'],
					'I_PHOTO'			=> append_sid("{$phpbb_root_path}photo.$phpEx", "id={$photo['photo_id']}"),
					'U_SUBMIT'			=> $this->u_action . "&amp;mode=$mode&amp;p=$photo_id",
				));
				
				$now = getdate(time() + $user->timezone + $user->dst - date('Z'));
				include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
				$id_cache = $user_cache = $message_cache = array();
				$sql = 'SELECT g.*, u.*
					FROM ' . GALLERY_COMMENTS_TABLE . ' g
					LEFT JOIN ' . USERS_TABLE . " u ON (u.user_id = g.user_id)
					WHERE photo_id = $photo_id
					ORDER BY g.comment_time DESC";
				$result = $db->sql_query_limit($sql, $config['comments_per_page']);
				while ($row = $db->sql_fetchrow($result))
				{
					$poster_id = $row['user_id'];
					$id_cache[] = $poster_id;

					$message_cache[$row['comment_id']] = array(
						'message'		=> generate_text_for_display($row['comment_text'], $row['comment_uid'], $row['comment_bitfield'], $row['comment_options']),
						'user_id'		=> $row['user_id'],
						'post_time'		=> $user->format_date($row['comment_time']),
						'username'		=> $row['username'],
						'user_colour'	=> $row['user_colour'],
					);
					
					$user_cache[$poster_id] = array(
						'joined'		=> $user->format_date($row['user_regdate']),
						'posts'			=> $row['user_posts'],
						'warnings'		=> $row['user_warnings'],
						'from'			=> $row['user_from'],
		
						'viewonline'	=> $row['user_allow_viewonline'],
						'allow_pm'		=> $row['user_allow_pm'],
		
						'avatar'		=> ($user->optionget('viewavatars')) ? get_user_avatar($row['user_avatar'], $row['user_avatar_type'], $row['user_avatar_width'], $row['user_avatar_height']) : '',
						'age'			=> '',
		
						'rank_title'		=> '',
						'rank_image'		=> '',
						'rank_image_src'	=> '',
		
						'username'			=> $row['username'],
						'user_colour'		=> $row['user_colour'],
		
						'online'		=> false,
						'profile'		=> append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=viewprofile&amp;u=$poster_id"),
						'www'			=> $row['user_website'],
						'aim'			=> ($row['user_aim'] && $auth->acl_get('u_sendim')) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=contact&amp;action=aim&amp;u=$poster_id") : '',
						'msn'			=> ($row['user_msnm'] && $auth->acl_get('u_sendim')) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=contact&amp;action=msnm&amp;u=$poster_id") : '',
						'yim'			=> ($row['user_yim']) ? 'http://edit.yahoo.com/config/send_webmesg?.target=' . $row['user_yim'] . '&amp;.src=pg' : '',
						'jabber'		=> ($row['user_jabber'] && $auth->acl_get('u_sendim')) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=contact&amp;action=jabber&amp;u=$poster_id") : '',
						'search'		=> ($auth->acl_get('u_search')) ? append_sid("{$phpbb_root_path}search.$phpEx", 'search_author=' . urlencode($row['username']) .'&amp;showresults=posts') : '',
						
						'email'				=> '',
						'icq'				=> ($row['user_icq']) ? 'http://www.icq.com/people/webmsg.php?to=' . $row['user_icq'] : '',
						'icq_status_img'	=> ($row['user_icq']) ? '<img src="http://web.icq.com/whitepages/online?icq=' . $row['user_icq'] . '&amp;img=5" width="18" height="18" alt="" />' : '',
					);
		
					get_user_rank($row['user_rank'], $row['user_posts'], $user_cache[$poster_id]['rank_title'], $user_cache[$poster_id]['rank_image'], $user_cache[$poster_id]['rank_image_src']);
		
					if (!empty($row['user_allow_viewemail']) || $auth->acl_get('a_email'))
					{
						$user_cache[$poster_id]['email'] = ($config['board_email_form'] && $config['email_enable']) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=email&amp;u=$poster_id") : (($config['board_hide_emails'] && !$auth->acl_get('a_email')) ? '' : 'mailto:' . $row['user_email']);
					}
		
					if ($row['user_birthday'])
					{
						list($bday_day, $bday_month, $bday_year) = array_map('intval', explode('-', $row['user_birthday']));
		
						if ($bday_year)
						{
							$diff = $now['mon'] - $bday_month;
							if ($diff == 0)
							{
								$diff = ($now['mday'] - $bday_day < 0) ? 1 : 0;
							}
							else
							{
								$diff = ($diff < 0) ? 1 : 0;
							}
		
							$user_cache[$poster_id]['age'] = (int) ($now['year'] - $bday_year - $diff);
						}
					}
				}
				$db->sql_freeresult($result);
				
				// Load custom profile fields
				if ($config['load_cpf_viewtopic'])
				{
					include($phpbb_root_path . 'includes/functions_profile_fields.' . $phpEx);
					$cp = new custom_profile();
				
					// Grab all profile fields from users in id cache for later use - similar to the poster cache
					$profile_fields_cache = $cp->generate_profile_fields_template('grab', $id_cache);
				}

				// Generate online information for user
				if ($config['load_onlinetrack'] && sizeof($id_cache))
				{
					$sql = 'SELECT session_user_id, MAX(session_time) as online_time, MIN(session_viewonline) AS viewonline
						FROM ' . SESSIONS_TABLE . '
						WHERE ' . $db->sql_in_set('session_user_id', $id_cache) . '
						GROUP BY session_user_id';
					$result = $db->sql_query($sql);
				
					$update_time = $config['load_online_time'] * 60;
					while ($row = $db->sql_fetchrow($result))
					{
						$user_cache[$row['session_user_id']]['online'] = (time() - $update_time < $row['online_time'] && (($row['viewonline']) || $auth->acl_get('u_viewonline'))) ? true : false;
					}
					$db->sql_freeresult($result);
				}
				unset($id_cache);


				$cp_row = array();

				foreach ($message_cache as $post_id => $row)
				{
					$poster_id = $row['user_id'];

					//
					if ($config['load_cpf_viewtopic'])
					{
						$cp_row = (isset($profile_fields_cache[$poster_id])) ? $cp->generate_profile_fields_template('show', false, $profile_fields_cache[$poster_id]) : array();
					}
					
					$postrow = array(
						'POST_AUTHOR_FULL'		=> get_username_string('full', $poster_id, $row['username'], $row['user_colour']),
						'POST_AUTHOR_COLOUR'	=> get_username_string('colour', $poster_id, $row['username'], $row['user_colour']),
						'POST_AUTHOR'			=> get_username_string('username', $poster_id, $row['username'], $row['user_colour']),
						'U_POST_AUTHOR'			=> get_username_string('profile', $poster_id, $row['username'], $row['user_colour']),
				
						'RANK_TITLE'		=> $user_cache[$poster_id]['rank_title'],
						'RANK_IMG'			=> $user_cache[$poster_id]['rank_image'],
						'RANK_IMG_SRC'		=> $user_cache[$poster_id]['rank_image_src'],
						'POSTER_JOINED'		=> $user_cache[$poster_id]['joined'],
						'POSTER_POSTS'		=> $user_cache[$poster_id]['posts'],
						'POSTER_FROM'		=> $user_cache[$poster_id]['from'],
						'POSTER_AVATAR'		=> $user_cache[$poster_id]['avatar'],
						'POSTER_WARNINGS'	=> $user_cache[$poster_id]['warnings'],
						'POSTER_AGE'		=> $user_cache[$poster_id]['age'],
				
						'POST_DATE'			=> $user->format_date($row['post_time']),
						'MESSAGE'			=> $row['message'],
				
						'MINI_POST_IMG'			=> $user->img('icon_post_target', 'POST'),

						'ICQ_STATUS_IMG'		=> $user_cache[$poster_id]['icq_status_img'],
						'ONLINE_IMG'			=> ($poster_id == ANONYMOUS || !$config['load_onlinetrack']) ? '' : (($user_cache[$poster_id]['online']) ? $user->img('icon_user_online', 'ONLINE') : $user->img('icon_user_offline', 'OFFLINE')),
						'S_ONLINE'				=> ($poster_id == ANONYMOUS || !$config['load_onlinetrack']) ? false : (($user_cache[$poster_id]['online']) ? true : false),
				
						//'U_EDIT'			=> (!$user->data['is_registered']) ? '' : ((($user->data['user_id'] == $poster_id && ($row['post_time'] > time() - ($config['edit_time'] * 60) || !$config['edit_time'])) || $auth->acl_get('m_')) ? append_sid("{$phpbb_root_path}posting.$phpEx", "mode=edit&amp;p={$post_id}") : ''),
						//'U_DELETE'			=> ($auth->acl_get('m_')) ? append_sid("{$phpbb_root_path}posting.$phpEx", "mode=delete&amp;p={$post_id}") : '',
				
						'U_PROFILE'		=> $user_cache[$poster_id]['profile'],
						'U_SEARCH'		=> $user_cache[$poster_id]['search'],
						'U_PM'			=> ($config['allow_privmsg'] && $auth->acl_get('u_sendpm') && ($user_cache[$poster_id]['allow_pm'] || $auth->acl_gets('a_', 'm_') || $auth->acl_getf_global('m_'))) ? append_sid("{$phpbb_root_path}ucp.$phpEx", "i=pm&amp;mode=compose") : '',
						'U_EMAIL'		=> $user_cache[$poster_id]['email'],
						'U_WWW'			=> $user_cache[$poster_id]['www'],
						'U_ICQ'			=> $user_cache[$poster_id]['icq'],
						'U_AIM'			=> $user_cache[$poster_id]['aim'],
						'U_MSN'			=> $user_cache[$poster_id]['msn'],
						'U_YIM'			=> $user_cache[$poster_id]['yim'],
						'U_JABBER'		=> $user_cache[$poster_id]['jabber'],
				
						'U_WARN'			=> ($auth->acl_get('m_warn') && $poster_id != $user->data['user_id']) ? append_sid("{$phpbb_root_path}mcp.$phpEx", 'i=warn&amp;mode=warn_post', true, $user->session_id) : '',
				
						'POST_ID'			=> $post_id,
						'POSTER_ID'			=> $poster_id,
				
						'S_CUSTOM_FIELDS'	=> (isset($cp_row['row']) && sizeof($cp_row['row'])) ? true : false,
						'S_TOPIC_POSTER'	=> ($user->data['user_id'] == $poster_id) ? true : false,
					);
					if (isset($cp_row['row']) && sizeof($cp_row['row']))
					{
						$postrow = array_merge($postrow, $cp_row['row']);
					}
				
					// Dump vars into template
					$template->assign_block_vars('postrow', $postrow);
				
					if (!empty($cp_row['blockrow']))
					{
						foreach ($cp_row['blockrow'] as $field_data)
						{
							$template->assign_block_vars('postrow.custom_fields', $field_data);
						}
					}
				}
			break;
			case 'rating':
			case 'recent':
				$sql = "SELECT a.*, u.username, u.user_colour, u.user_id
					FROM " . GALLERY_PHOTOS_TABLE . ' a
					LEFT JOIN ' . USERS_TABLE . " u ON (u.user_id = a.poster_id)
					WHERE a.gallery_id <> 0 AND a.extension IN ($extensions)
					ORDER BY a.filetime DESC";
				$result = $db->sql_query_limit($sql, $config['images_per_page'], $start);
				
				while ($row = $db->sql_fetchrow($result))
				{
					$template->assign_block_vars('imagerow', array(
						'PHOTO_COMMENT'	=> ((mb_strlen($row['photo_comment']) > 20) ? mb_substr($row['photo_comment'], 0, 20) . '...' : $row['photo_comment']),
						'PHOTO_MOUSEOVER'	=> (mb_strlen($row['photo_comment']) > 20) ? $row['photo_comment'] : '',
						'PHOTO_NAME'		=> $row['photo_name'],
						'COMMENT_FULL'		=> $row['photo_comment'],
						'IMAGE_TIME'		=> $user->format_date($row['filetime']),
						'IMAGE_VIEWS'		=> $row['download_count'],
						'IMAGE_ID'			=> $row['photo_id'],
						'TOPIC_ID'			=> ($row['thumbnail']) ? 1 : false,
						'USERNAME_FULL'		=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour'], $user->lang['GUEST']),
						'U_IMAGE_DOWNLOAD'	=> $this->u_action . "&amp;mode=photo&amp;p={$row['photo_id']}",
						'U_IMAGE_THUMBNAIL'	=> append_sid("{$phpbb_root_path}photo.$phpEx", "id={$row['photo_id']}" . (($row['thumbnail']) ? '&amp;t=1' : '')),
					));
				}
				$db->sql_freeresult($result);
		
				$template->assign_vars(array(		
					'MAX_WIDTH'		=> $config['img_max_thumb_width'],
					'MAX_HEIGHT'	=> $config['img_link_height'],
				));	
			break;
			case 'upload':
				if (!$user->data['is_registered'])
				{
					// Can this user view profiles/memberlist?
					login_box('', $user->lang['LOGIN_EXPLAIN_' . strtoupper($mode)]);
				}
				if ($submit)
				{
					include($phpbb_root_path . 'includes/functions_gallery.' . $phpEx);
					$filedata = upload_attachment();
					if (!sizeof($filedata['error']))
					{
						redirect(append_sid("./$filename", "i=$id&amp;mode=$mode&amp;p={$filedata['photo_id']}"));
					}
					
					$error_message = '';
					foreach ($filedata['error'] as $error)
					{
						$error_message .= $error . '<br />';
					}
					trigger_error($error);
				}
				$template->assign_vars(array(
					'I_IMAGE_THUMBNAIL'	=> ($photo_id) ? append_sid("{$phpbb_root_path}photo.$phpEx", "id=$photo_id&amp;t=1") : '',
					'U_ACTION'			=> $this->u_action . "&amp;mode=$mode",
				));
			break;
			case 'views':
				$sql = "SELECT a.*, u.username, u.user_colour, u.user_id
					FROM " . GALLERY_PHOTOS_TABLE . ' a
					LEFT JOIN ' . USERS_TABLE . " u ON (u.user_id = a.poster_id)
					WHERE a.gallery_id <> 0 AND a.extension IN ($extensions)
					ORDER BY a.download_count DESC";
				$result = $db->sql_query_limit($sql, $config['images_per_page'], $start);
				
				while ($row = $db->sql_fetchrow($result))
				{
					$template->assign_block_vars('imagerow', array(
						'PHOTO_COMMENT'	=> ((mb_strlen($row['photo_comment']) > 20) ? mb_substr($row['photo_comment'], 0, 20) . '...' : $row['photo_comment']),
						'PHOTO_MOUSEOVER'	=> (mb_strlen($row['photo_comment']) > 20) ? $row['photo_comment'] : '',
						'PHOTO_NAME'		=> $row['photo_name'],
						'COMMENT_FULL'		=> $row['photo_comment'],
						'IMAGE_TIME'		=> $user->format_date($row['filetime']),
						'IMAGE_VIEWS'		=> $row['download_count'],
						'IMAGE_ID'			=> $row['photo_id'],
						'TOPIC_ID'			=> ($row['thumbnail']) ? 1 : false,
						'USERNAME_FULL'		=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour'], $user->lang['GUEST']),
						'U_IMAGE_DOWNLOAD'	=> $this->u_action . "&amp;mode=photo&amp;p={$row['photo_id']}",
						'U_IMAGE_THUMBNAIL'	=> append_sid("{$phpbb_root_path}photo.$phpEx", "id={$row['photo_id']}" . (($row['thumbnail']) ? '&amp;t=1' : '')),
					));
				}
				$db->sql_freeresult($result);
		
				$template->assign_vars(array(		
					'MAX_WIDTH'		=> $config['img_max_thumb_width'],
					'MAX_HEIGHT'	=> $config['img_link_height'],
				));	
			break;
		}
		$template->assign_vars(array(
			'S_' . strtoupper($mode) => true,
		));
	}
	
	function count_images($extensions, $userrow)
	{
		global $db;
		$sql = 'SELECT COUNT(a.photo_id) AS total
			FROM ' . GALLERY_PHOTOS_TABLE . " a
			WHERE {$userrow['where']} a.extension IN ($extensions)
			ORDER BY {$userrow['order_by']} {$userrow['direction']}";
		$result = $db->sql_query($sql);
		$total_images = $db->sql_fetchfield('total');
		$db->sql_freeresult($result);
		return $total_images;
	}
	
	function show_gallery($userrow, $extensions)
	{
		global $db, $template, $phpbb_root_path, $user, $phpEx, $config;
		
		//grab the total number of images for pagination
		$userrow['total_images'] = $this->count_images($extensions, $userrow);

		$sql = "SELECT a.*, u.username, u.user_colour, u.user_id
			FROM " . GALLERY_PHOTOS_TABLE . ' a
			LEFT JOIN ' . USERS_TABLE . " u ON (u.user_id = a.poster_id)
			WHERE {$userrow['where']} a.extension IN ($extensions)
			ORDER BY a.{$userrow['order_by']} {$userrow['direction']}";
		$result = $db->sql_query_limit($sql, $config['images_per_page'], $userrow['start']);
		
		while ($row = $db->sql_fetchrow($result))
		{
			$template->assign_block_vars('imagerow', array(
				'PHOTO_COMMENT'	=> ((mb_strlen($row['photo_comment']) > 20) ? mb_substr($row['photo_comment'], 0, 20) . '...' : $row['photo_comment']),
				'PHOTO_MOUSEOVER'	=> (mb_strlen($row['photo_comment']) > 20) ? $row['photo_comment'] : '',
				'PHOTO_NAME'		=> $row['photo_name'],
				'COMMENT_FULL'		=> $row['photo_comment'],
				'IMAGE_TIME'		=> $user->format_date($row['filetime']),
				'IMAGE_VIEWS'		=> $row['download_count'],
				'IMAGE_ID'			=> $row['photo_id'],
				'TOPIC_ID'			=> ($row['thumbnail']) ? 1 : false,
				'USERNAME_FULL'		=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour'], $user->lang['GUEST']),
				'U_IMAGE_DOWNLOAD'	=> append_sid("{$phpbb_root_path}photo.$phpEx", "id={$row['photo_id']}"),
				'U_IMAGE_THUMBNAIL'	=> append_sid("{$phpbb_root_path}photo.$phpEx", "id={$row['photo_id']}" . (($row['thumbnail']) ? '&amp;t=1' : '')),
			));
		}
		$db->sql_freeresult($result);

		$template->assign_vars(array(
			'USERNAME_FULL'	=> get_username_string('full', $userrow['user_id'], $userrow['username'], $userrow['user_colour'], $user->lang['GUEST']),

			'MAX_WIDTH'		=> $config['img_max_thumb_width'],
			'MAX_HEIGHT'	=> $config['img_link_height'],
			
			'PAGINATION'	=> generate_pagination($this->u_action . (($userrow['user_id']) ? "&mode=$mode&amp;un={$userrow['username']}" : ''), $userrow['total_images'], $config['images_per_page'], $userrow['start'], true),
		));	
	}
}
?>