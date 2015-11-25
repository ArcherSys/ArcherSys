<?php
/** 
*
* @package gallery
* @version $Id: functions_gallery.php 23 2007-07-19 16:26:54Z Handyman $
* @copyright (c) 2007 StarTrekGuide Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* Responsible for holding all file relevant information, as well as doing file-specific operations.
* The {@link fileupload fileupload class} can be used to upload several files, each of them being this object to operate further on.
* @package phpBB3
*/
class filespec
{
	var $filename = '';
	var $realname = '';
	var $uploadname = '';
	var $mimetype = '';
	var $extension = '';
	var $filesize = 0;
	var $width = 0;
	var $height = 0;
	var $image_info = array();

	var $destination_file = '';
	var $destination_path = '';

	var $file_moved = false;
	var $init_error = false;
	var $local = false;

	var $error = array();

	var $upload = '';

	/**
	* File Class
	* @access private
	*/
	function filespec($upload_ary, $upload_namespace)
	{
		if (!isset($upload_ary))
		{
			$this->init_error = true;
			return;
		}

		$this->filename = $upload_ary['tmp_name'];
		$this->filesize = $upload_ary['size'];
		$name = trim(htmlspecialchars(basename($upload_ary['name'])));
		$this->realname = $this->uploadname = (STRIP) ? stripslashes($name) : $name;
		$this->mimetype = $upload_ary['type'];

		// Opera adds the name to the mime type
		$this->mimetype	= (strpos($this->mimetype, '; name') !== false) ? str_replace(strstr($this->mimetype, '; name'), '', $this->mimetype) : $this->mimetype;

		if (!$this->mimetype)
		{
			$this->mimetype = 'application/octetstream';
		}

		$this->extension = strtolower($this->get_extension($this->realname));

		// Try to get real filesize from temporary folder (not always working) ;)
		$this->filesize = (@filesize($this->filename)) ? @filesize($this->filename) : $this->filesize;

		$this->width = $this->height = 0;
		$this->file_moved = false;

		$this->local = (isset($upload_ary['local_mode'])) ? true : false;
		$this->upload = $upload_namespace;
	}

	/**
	* Cleans destination filename
	* 
	* @param real|unique|unique_ext $mode real creates a realname, filtering some characters, lowering every character. Unique creates an unique filename
	* @param string $prefix Prefix applied to filename
	* @access public
	*/
	function clean_filename($mode = 'unique', $prefix = '', $user_id = '')
	{
		if ($this->init_error)
		{
			return;
		}

		switch ($mode)
		{
			case 'real':
				// Remove every extension from filename (to not let the mime bug being exposed)
				if (strpos($this->realname, '.') !== false)
				{
					$this->realname = substr($this->realname, 0, strpos($this->realname, '.'));
				}

				// Replace any chars which may cause us problems with _
				$bad_chars = array("'", "\\", ' ', '/', ':', '*', '?', '"', '<', '>', '|');

				$this->realname = rawurlencode(str_replace($bad_chars, '_', strtolower($this->realname)));
				$this->realname = preg_replace("/%(\w{2})/", '_', $this->realname);

				$this->realname = $prefix . $this->realname . '.' . $this->extension;
			break;

			case 'unique':
				$this->realname = $prefix . md5(unique_id());
			break;

			case 'avatar':
				$this->extension = strtolower($this->extension);
				$this->realname = $prefix . $user_id . '.' . $this->extension;
				
			break;
			
			case 'unique_ext':
			default:
				$this->realname = $prefix . md5(unique_id()) . '.' . $this->extension;
			break;
		}
	}

	/**
	* Get property from file object
	*/
	function get($property)
	{
		if ($this->init_error || !isset($this->$property))
		{
			return false;
		}

		return $this->$property;
	}

	/**
	* Check if file is an image (mimetype)
	*
	* @return true if it is an image, false if not
	*/
	function is_image()
	{
		return (strpos($this->mimetype, 'image/') !== false) ? true : false;
	}

	/**
	* Check if the file got correctly uploaded
	*
	* @return true if it is a valid upload, false if not
	*/
	function is_uploaded()
	{
		if (!$this->local && !is_uploaded_file($this->filename))
		{
			return false;
		}

		if ($this->local && !file_exists($this->filename))
		{
			return false;
		}

		return true;
	}

	/**
	* Remove file
	*/
	function remove()
	{
		if ($this->file_moved)
		{
			@unlink($this->destination_file);
		}
	}

	/**
	* Get file extension
	*/
	function get_extension($filename)
	{
		if (strpos($filename, '.') === false)
		{
			return '';
		}

		$filename = explode('.', $filename);
		return array_pop($filename);
	}

	/**
	* Get mimetype. Utilize mime_content_type if the function exist.
	* Not used at the moment...
	*/
	function get_mimetype($filename)
	{
		$mimetype = '';

		if (function_exists('mime_content_type'))
		{
			$mimetype = mime_content_type($filename);
		}

		// Some browsers choke on a mimetype of application/octet-stream
		if (!$mimetype || $mimetype == 'application/octet-stream')
		{
			$mimetype = 'application/octetstream';
		}

		return $mimetype;
	}

	/**
	* Get filesize
	*/
	function get_filesize($filename)
	{
		return @filesize($filename);
	}

	/**
	* Move file to destination folder
	* The phpbb_root_path variable will be applied to the destination path
	*
	* @param string $destination_path Destination path, for example $config['avatar_path']
	* @param bool $overwrite If set to true, an already existing file will be overwritten
	* @param octal $chmod Permission mask for chmodding the file after a successful move
	* @access public
	*/
	function move_file($destination, $overwrite = false, $skip_image_check = false, $chmod = 0666)
	{
		global $user, $phpbb_root_path;

		if (sizeof($this->error))
		{
			return false;
		}

		// We need to trust the admin in specifying valid upload directories and an attacker not being able to overwrite it...
		$this->destination_path = $phpbb_root_path . $destination;

		// Check if the destination path exist...
		if (!file_exists($this->destination_path))
		{
			@unlink($this->filename);
			return false;
		}

		$upload_mode = (@ini_get('open_basedir') || @ini_get('safe_mode')) ? 'move' : 'copy';
		$upload_mode = ($this->local) ? 'local' : $upload_mode;
		$this->destination_file = $this->destination_path . '/' . basename($this->realname);

		// Check if the file already exist, else there is something wrong...
		if (file_exists($this->destination_file) && !$overwrite)
		{
			@unlink($this->filename);
		}
		else
		{
			if (file_exists($this->destination_file))
			{
				@unlink($this->destination_file);
			}

			switch ($upload_mode)
			{
				case 'copy':

					if (!@copy($this->filename, $this->destination_file)) 
					{
						if (!@move_uploaded_file($this->filename, $this->destination_file)) 
						{
							$this->error[] = sprintf($user->lang[$this->upload->error_prefix . 'GENERAL_UPLOAD_ERROR'], $this->destination_file);
							return false;
						}
					}

					@unlink($this->filename);

				break;

				case 'move':

					if (!@move_uploaded_file($this->filename, $this->destination_file)) 
					{
						if (!@copy($this->filename, $this->destination_file)) 
						{
							$this->error[] = sprintf($user->lang[$this->upload->error_prefix . 'GENERAL_UPLOAD_ERROR'], $this->destination_file);
							return false;
						}
					}

					@unlink($this->filename);

				break;

				case 'local':

					if (!@copy($this->filename, $this->destination_file)) 
					{
						$this->error[] = sprintf($user->lang[$this->upload->error_prefix . 'GENERAL_UPLOAD_ERROR'], $this->destination_file);
						return false;
					}
					@unlink($this->filename);

				break;
			}

			@chmod($this->destination_file, $chmod);
		}

		// Try to get real filesize from destination folder
		$this->filesize = (@filesize($this->destination_file)) ? @filesize($this->destination_file) : $this->filesize;

		if ($this->is_image() && !$skip_image_check)
		{
			$this->width = $this->height = 0;

			if (($this->image_info = @getimagesize($this->destination_file)) !== false)
			{
				$this->width = $this->image_info[0];
				$this->height = $this->image_info[1];

				if (!empty($this->image_info['mime']))
				{
					$this->mimetype = $this->image_info['mime'];
				}

				// Check image type
				$types = $this->upload->image_types();

				if (!isset($types[$this->image_info[2]]) || !in_array($this->extension, $types[$this->image_info[2]]))
				{
					if (!isset($types[$this->image_info[2]]))
					{
						$this->error[] = sprintf($user->lang['IMAGE_FILETYPE_INVALID'], $this->image_info[2], $this->mimetype);
					}
					else
					{
						$this->error[] = sprintf($user->lang['IMAGE_FILETYPE_MISMATCH'], $types[$this->image_info[2]][0], $this->extension);
					}
				}

				// Make sure the dimensions match a valid image
				if (empty($this->width) || empty($this->height))
				{
					$this->error[] = $user->lang['ATTACHED_IMAGE_NOT_IMAGE'];
				}
			}
			else
			{
				$this->error[] = $user->lang['UNABLE_GET_IMAGE_SIZE'];
			}
		}

		$this->file_moved = true;
		$this->additional_checks();
		unset($this->upload);

		return true;
	}

	/**
	* Performing additional checks
	*/
	function additional_checks()
	{
		global $user;

		if (!$this->file_moved)
		{
			return false;
		}

		// Filesize is too big or it's 0 if it was larger than the maxsize in the upload form
		if ($this->upload->max_filesize && ($this->get('filesize') > $this->upload->max_filesize || $this->filesize == 0))
		{
			$size_lang = ($this->upload->max_filesize >= 1048576) ? $user->lang['MB'] : (($this->upload->max_filesize >= 1024) ? $user->lang['KB'] : $user->lang['BYTES'] );
			$max_filesize = ($this->upload->max_filesize >= 1048576) ? round($this->upload->max_filesize / 1048576 * 100) / 100 : (($this->upload->max_filesize >= 1024) ? round($this->upload->max_filesize / 1024 * 100) / 100 : $this->upload->max_filesize);
	
			$this->error[] = sprintf($user->lang[$this->upload->error_prefix . 'WRONG_FILESIZE'], $max_filesize, $size_lang);

			return false;
		}

		if (!$this->upload->valid_dimensions($this))
		{
			$this->error[] = sprintf($user->lang[$this->upload->error_prefix . 'WRONG_SIZE'], $this->upload->min_width, $this->upload->min_height, $this->upload->max_width, $this->upload->max_height, $this->width, $this->height);

			return false;
		}

		return true;
	}
}

/**
* Class for assigning error messages before a real filespec class can be assigned
*
* @package phpBB3
*/
class fileerror extends filespec
{
	function fileerror($error_msg)
	{
		$this->error[] = $error_msg;
	}
}

/**
* File upload class
* Init class (all parameters optional and able to be set/overwritten separately) - scope is global and valid for all uploads
*
* @package phpBB3
*/
class fileupload
{
	var $allowed_extensions = array();
	var $max_filesize = 0;
	var $min_width = 0;
	var $min_height = 0;
	var $max_width = 0;
	var $max_height = 0;
	var $error_prefix = '';

	/**
	* Init file upload class.
	*
	* @param string $error_prefix Used error messages will get prefixed by this string
	* @param array $allowed_extensions Array of allowed extensions, for example array('jpg', 'jpeg', 'gif', 'png')
	* @param int $max_filesize Maximum filesize
	* @param int $min_width Minimum image width (only checked for images)
	* @param int $min_height Minimum image height (only checked for images)
	* @param int $max_width Maximum image width (only checked for images)
	* @param int $max_height Maximum image height (only checked for images)
	*
	*/
	function fileupload($error_prefix = '', $allowed_extensions = false, $max_filesize = false, $min_width = false, $min_height = false, $max_width = false, $max_height = false)
	{
		$this->set_allowed_extensions($allowed_extensions);
		$this->set_max_filesize($max_filesize);
		$this->set_allowed_dimensions($min_width, $min_height, $max_width, $max_height);
		$this->set_error_prefix($error_prefix);
	}

	/**
	* Reset vars
	*/
	function reset_vars()
	{
		$this->max_filesize = 0;
		$this->min_width = $this->min_height = $this->max_width = $this->max_height = 0;
		$this->error_prefix = '';
		$this->allowed_extensions = array();
	}

	/**
	* Set allowed extensions
	*/
	function set_allowed_extensions($allowed_extensions)
	{
		if ($allowed_extensions !== false && is_array($allowed_extensions))
		{
			$this->allowed_extensions = $allowed_extensions;
		}
	}

	/**
	* Set allowed dimensions
	*/
	function set_allowed_dimensions($min_width, $min_height, $max_width, $max_height)
	{
		$this->min_width = (int) $min_width;
		$this->min_height = (int) $min_height;
		$this->max_width = (int) $max_width;
		$this->max_height = (int) $max_height;
	}

	/**
	* Set maximum allowed filesize
	*/
	function set_max_filesize($max_filesize)
	{
		if ($max_filesize !== false && (int) $max_filesize)
		{
			$this->max_filesize = (int) $max_filesize;
		}
	}

	/**
	* Set error prefix
	*/
	function set_error_prefix($error_prefix)
	{
		$this->error_prefix = $error_prefix;
	}

	/**
	* Form upload method
	* Upload file from users harddisk
	*
	* @param string $form_name Form name assigned to the file input field (if it is an array, the key has to be specified)
	* @return object $file Object "filespec" is returned, all further operations can be done with this object
	* @access public
	*/
	function form_upload($form_name)
	{
		global $user;

		unset($_FILES[$form_name]['local_mode']);
		$file = new filespec($_FILES[$form_name], $this);

		if ($file->init_error)
		{
			$file->error[] = '';
			return $file;
		}

		// Error array filled?
		if (isset($_FILES[$form_name]['error']))
		{
			$error = $this->assign_internal_error($_FILES[$form_name]['error']);

			if ($error !== false)
			{
				$file->error[] = $error;
				return $file;
			}
		}

		// Check if empty file got uploaded (not catched by is_uploaded_file)
		if (isset($_FILES[$form_name]['size']) && $_FILES[$form_name]['size'] == 0)
		{
			$file->error[] = $user->lang[$this->error_prefix . 'EMPTY_FILEUPLOAD'];
			return $file;
		}

		// PHP Upload filesize exceeded
		if ($file->get('filename') == 'none')
		{
			$file->error[] = (@ini_get('upload_max_filesize') == '') ? $user->lang[$this->error_prefix . 'PHP_SIZE_NA'] : sprintf($user->lang[$this->error_prefix . 'PHP_SIZE_OVERRUN'], @ini_get('upload_max_filesize'));
			return $file;
		}

		// Not correctly uploaded
		if (!$file->is_uploaded())
		{
			$file->error[] = $user->lang[$this->error_prefix . 'NOT_UPLOADED'];
			return $file;
		}

		$this->common_checks($file);

		return $file;
	}

	/**
	* Assign internal error
	* @access private
	*/
	function assign_internal_error($errorcode)
	{
		global $user;

		switch ($errorcode)
		{
			case 1:
				$error = (@ini_get('upload_max_filesize') == '') ? $user->lang[$this->error_prefix . 'PHP_SIZE_NA'] : sprintf($user->lang[$this->error_prefix . 'PHP_SIZE_OVERRUN'], @ini_get('upload_max_filesize'));
			break;

			case 2:
				$size_lang = ($this->max_filesize >= 1048576) ? $user->lang['MB'] : (($this->max_filesize >= 1024) ? $user->lang['KB'] : $user->lang['BYTES'] );
				$max_filesize = ($this->max_filesize >= 1048576) ? round($this->max_filesize / 1048576 * 100) / 100 : (($this->max_filesize >= 1024) ? round($this->max_filesize / 1024 * 100) / 100 : $this->max_filesize);

				$error = sprintf($user->lang[$this->error_prefix . 'WRONG_FILESIZE'], $max_filesize, $size_lang);
			break;

			case 3:
				$error = $user->lang[$this->error_prefix . 'PARTIAL_UPLOAD'];
			break;

			case 4:
				$error = $user->lang[$this->error_prefix . 'NOT_UPLOADED'];
			break;

			case 6:
				$error = 'Temporary folder could not be found. Please check your PHP installation.';
			break;

			default:
				$error = false;
			break;
		}

		return $error;
	}

	/**
	* Perform common checks
	*/
	function common_checks(&$file)
	{
		global $user;

		// Filesize is too big or it's 0 if it was larger than the maxsize in the upload form
		if ($this->max_filesize && ($file->get('filesize') > $this->max_filesize || $file->get('filesize') == 0))
		{
			$size_lang = ($this->max_filesize >= 1048576) ? $user->lang['MB'] : (($this->max_filesize >= 1024) ? $user->lang['KB'] : $user->lang['BYTES'] );
			$max_filesize = ($this->max_filesize >= 1048576) ? round($this->max_filesize / 1048576 * 100) / 100 : (($this->max_filesize >= 1024) ? round($this->max_filesize / 1024 * 100) / 100 : $this->max_filesize);

			$file->error[] = sprintf($user->lang[$this->error_prefix . 'WRONG_FILESIZE'], $max_filesize, $size_lang);
		}

		// check Filename
		if (preg_match("#[\\/:*?\"<>|]#i", $file->get('realname')))
		{ 
			$file->error[] = sprintf($user->lang[$this->error_prefix . 'INVALID_FILENAME'], $file->get('realname'));
		}

		// Invalid Extension
		if (!$this->valid_extension($file))
		{
			$file->error[] = sprintf($user->lang[$this->error_prefix . 'DISALLOWED_EXTENSION'], $file->get('extension'));
		}
	}

	/**
	* Check for allowed extension
	*/
	function valid_extension(&$file)
	{
		return (in_array($file->get('extension'), $this->allowed_extensions)) ? true : false;
	}

	/**
	* Check for allowed dimension
	*/
	function valid_dimensions(&$file)
	{
		if (!$this->max_width && !$this->max_height && !$this->min_width && !$this->min_height)
		{
			return true;
		}

		if (($file->get('width') > $this->max_width && $this->max_width) || 
			($file->get('height') > $this->max_height && $this->max_height) || 
			($file->get('width') < $this->min_width && $this->min_width) ||
			($file->get('height') < $this->min_height && $this->min_height))
		{
			return false;
		}

		return true;
	}

	/**
	* Check if form upload is valid
	*/
	function is_valid($form_name)
	{
		return (isset($_FILES[$form_name]) && $_FILES[$form_name]['name'] != 'none') ? true : false;
	}

	/**
	* Return image type/extension mapping 
	*/
	function image_types()
	{
		return array(
			1 => array('gif'),
			2 => array('jpg', 'jpeg'),
			3 => array('png'),
			4 => array('swf'),
			5 => array('psd'),
			6 => array('bmp'),
			7 => array('tif', 'tiff'),
			8 => array('tif', 'tiff'),
			9 => array('jpg', 'jpeg'),
			10 => array('jpg', 'jpeg'),
			11 => array('jpg', 'jpeg'),
			12 => array('jpg', 'jpeg'),
			13 => array('swc'),
			14 => array('iff'),
			15 => array('wbmp'),
			16 => array('xbm'),
		);
	}
	
	/**
	* Get Attachment Data
	*/
	function get_submitted_attachment_data($check_user_id = false)
	{
		global $user, $db, $phpbb_root_path, $phpEx, $config;

		$this->filename_data['filecomment'] = utf8_normalize_nfc(request_var('filecomment', '', true));
		$attachment_data = (isset($_POST['attachment_data'])) ? $_POST['attachment_data'] : array();
		$this->attachment_data = array();

		$check_user_id = ($check_user_id === false) ? $user->data['user_id'] : $check_user_id;

		if (!sizeof($attachment_data))
		{
			return;
		}

		$not_orphan = $orphan = array();

		foreach ($attachment_data as $pos => $var_ary)
		{
			if ($var_ary['is_orphan'])
			{
				$orphan[(int) $var_ary['photo_id']] = $pos;
			}
			else
			{
				$not_orphan[(int) $var_ary['photo_id']] = $pos;
			}
		}

		// Regenerate already posted attachments
		if (sizeof($not_orphan))
		{
			// Get the attachment data, based on the poster id...
			$sql = 'SELECT photo_id, is_orphan, real_filename, photo_comment
				FROM ' . GALLERY_PHOTOS_TABLE . '
				WHERE ' . $db->sql_in_set('photo_id', array_keys($not_orphan)) . '
					AND poster_id = ' . $check_user_id;
			$result = $db->sql_query($sql);

			while ($row = $db->sql_fetchrow($result))
			{
				$pos = $not_orphan[$row['photo_id']];
				$this->attachment_data[$pos] = $row;
				set_var($this->attachment_data[$pos]['photo_comment'], $_POST['attachment_data'][$pos]['photo_comment'], 'string', true);

				unset($not_orphan[$row['photo_id']]);
			}
			$db->sql_freeresult($result);
		}

		if (sizeof($not_orphan))
		{
			trigger_error($user->lang['NO_ACCESS_ATTACHMENT'], E_USER_ERROR);
		}

		// Regenerate newly uploaded attachments
		if (sizeof($orphan))
		{
			$sql = 'SELECT photo_id, is_orphan, real_filename, photo_comment
				FROM ' . GALLERY_PHOTOS_TABLE . '
				WHERE ' . $db->sql_in_set('photo_id', array_keys($orphan)) . '
					AND poster_id = ' . $user->data['user_id'] . '
					AND is_orphan = 1';
			$result = $db->sql_query($sql);

			while ($row = $db->sql_fetchrow($result))
			{
				$pos = $orphan[$row['photo_id']];
				$this->attachment_data[$pos] = $row;
				set_var($this->attachment_data[$pos]['photo_comment'], $_POST['attachment_data'][$pos]['photo_comment'], 'string', true);

				unset($orphan[$row['photo_id']]);
			}
			$db->sql_freeresult($result);
		}

		if (sizeof($orphan))
		{
			trigger_error($user->lang['NO_ACCESS_ATTACHMENT'], E_USER_ERROR);
		}

		ksort($this->attachment_data);
	}

}

/**
* Upload Attachment - filedata is generated here
* Uses upload class
*/
function upload_attachment($form_name = 'fileupload')
{
	global $auth, $user, $config, $db, $cache;
	global $phpbb_root_path, $phpEx;

	$filedata = array(
		'error'	=> array()
	);
	$image_types = array(
		'gif', 'jpg', 'jpeg', 'png', 'swf', 'psd', 'bmp', 'tif', 'tiff', 'jpg', 'jpeg', 'swc', 'iff', 'wbmp', 'xbm',
	);

	$upload = new fileupload('GALLERY_', $image_types);

	$file = $upload->form_upload($form_name);
	if (!$file->is_image())
	{
		$file->remove();
		trigger_error('NO_IMAGE');
	}
	$file->upload->set_allowed_dimensions(0, 0, $config['photo_upload_width'], $config['photo_upload_height']);
	$file->clean_filename('unique', "photo_{$user->data['user_id']}_", $user->data['user_id']);
	$file->move_file($config['upload_path'], false, false);
	
	if (sizeof($file->error))
	{
		$file->remove();
		$filedata['error'] = array_merge($filedata['error'], $file->error);
		$filedata['post_attach'] = false;

		return $filedata;
	}
	
	$filedata['filesize'] = $file->get('filesize');
	$filedata['mimetype'] = $file->get('mimetype');
	$filedata['extension'] = $file->get('extension');
	$filedata['physical_filename'] = $file->get('realname');
	$filedata['real_filename'] = $file->get('uploadname');
	$filedata['filetime'] = time();

	// Check our complete quota
	if ($config['attachment_quota'])
	{
		if ($config['upload_dir_size'] + $file->get('filesize') > $config['attachment_quota'])
		{
			$filedata['error'][] = $user->lang['ATTACH_QUOTA_REACHED'];
			$filedata['post_attach'] = false;

			$file->remove();

			return $filedata;
		}
	}

	// Check free disk space
	if ($free_space = @disk_free_space($phpbb_root_path . $config['upload_path']))
	{
		if ($free_space <= $file->get('filesize'))
		{
			$filedata['error'][] = $user->lang['ATTACH_QUOTA_REACHED'];
			$filedata['post_attach'] = false;

			$file->remove();

			return $filedata;
		}
	}

	// Create Thumbnail
	if ($file->get('height') > $config['photo_thumb_height'] || $file->get('width') > $config['photo_thumb_width'])
	{
		$source = $file->get('destination_file');
		$destination = $file->get('destination_path') . '/thumb_' . $file->get('realname');

		$filedata['thumbnail'] = 1;
		if (!create_thumbnail($source, $destination, $file->get('mimetype')))
		{
			$filedata['thumbnail'] = 0;
		}
	}
	
	if (!sizeof($filedata['error']))
	{
		//update the users gallery with 1 more image. This also allows us to create
		//the gallery if it doesn't exist
		$sql = 'UPDATE ' . GALLERY_TABLE . "
			SET gallery_photos = gallery_photos + 1
			WHERE user_id = {$user->data['user_id']}";
		$db->sql_query($sql);
		$update = $db->sql_affectedrows();
		
		if ($update < 1)
		{
			$sql_ary = array(
				'user_id'					=> $user->data['user_id'],
				'parent_id'					=> $config['photo_user_galleries'],
				'gallery_name'				=> $user->data['username'],
				'gallery_photos'			=> 1,
				'gallery_last_update_time'	=> time(),
			);
			$sql = 'INSERT INTO ' . GALLERY_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
			$db->sql_query($sql);
			$gallery_id = $db->sql_nextid();
		}
		else
		{
			$sql = 'SELECT gallery_id
				FROM ' . GALLERY_TABLE . "
				WHERE user_id = {$user->data['user_id']}";
			$result = $db->sql_query($sql);
			$gallery_id = $db->sql_fetchfield('gallery_id');
			$db->sql_freeresult($result);
		}
		
		$sql_ary = array(
			'poster_id'			=> $user->data['user_id'],
			'is_orphan'			=> 0,
			'physical_filename'	=> $filedata['physical_filename'],
			'real_filename'		=> $filedata['real_filename'],
			'photo_comment'		=> utf8_normalize_nfc(request_var('filecomment', '', true)),
			'extension'			=> $filedata['extension'],
			'mimetype'			=> $filedata['mimetype'],
			'filesize'			=> $filedata['filesize'],
			'filetime'			=> $filedata['filetime'],
			'thumbnail'			=> $filedata['thumbnail'] ? $filedata['thumbnail'] : 0/*$filedata['physical_filename']*/,
			'photo_name'		=> utf8_normalize_nfc(request_var('filename', '', true)),
			'gallery_id'		=> $gallery_id,
		);
		$sql = 'INSERT INTO ' . GALLERY_PHOTOS_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
		$db->sql_query($sql);
		$filedata['photo_id'] = $db->sql_nextid();
	}	
	return $filedata;
}

function create_thumbnail($source, $destination, $mimetype) 
{
	global $config;

	$min_filesize = (int) $config['img_min_thumb_filesize'];
	$img_filesize = (file_exists($source)) ? @filesize($source) : false;

	$dimension = @getimagesize($source);

	if ($dimension === false)
	{
		return false;
	}

	list($width, $height, $type, ) = $dimension;

	if (empty($width) || empty($height))
	{
		return false;
	}

	if ($width <= $config['photo_thumb_width'] && $height <= $config['photo_thumb_height'])
	{
		return false;
	}

	list($new_width, $new_height) = get_img_size_format($width, $height);

	// Do not create a thumbnail if the resulting width/height is bigger than the original one
	if ($new_width > $width && $new_height > $height)
	{
		return false;
	}

	$used_imagick = false;

	// Only use imagemagick if defined and the passthru function not disabled
	if ($config['img_imagick'] && function_exists('passthru'))
	{
		@passthru(escapeshellcmd($config['img_imagick']) . 'convert' . ((defined('PHP_OS') && preg_match('#^win#i', PHP_OS)) ? '.exe' : '') . ' -quality 85 -antialias -sample ' . $new_width . 'x' . $new_height . ' "' . str_replace('\\', '/', $source) . '" +profile "*" "' . str_replace('\\', '/', $destination) . '"');

		if (file_exists($destination))
		{
			$used_imagick = true;
		}
	}

	if (!$used_imagick) 
	{
		$type = get_supported_image_types($type);

		if ($type['gd'])
		{
			// If the type is not supported, we are not able to create a thumbnail
			if ($type['format'] === false)
			{
				return false;
			}

			switch ($type['format']) 
			{
				case IMG_GIF:
					$image = @imagecreatefromgif($source);
				break;

				case IMG_JPG:
					$image = @imagecreatefromjpeg($source);
				break;

				case IMG_PNG:
					$image = @imagecreatefrompng($source);
				break;

				case IMG_WBMP:
					$image = @imagecreatefromwbmp($source);
				break;
			}

			if ($type['version'] == 1)
			{
				$new_image = imagecreate($new_width, $new_height);
				imagecopyresized($new_image, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
			}
			else
			{
				$new_image = imagecreatetruecolor($new_width, $new_height);
				imagecopyresampled($new_image, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
			}

			// If we are in safe mode create the destination file prior to using the gd functions to circumvent a PHP bug
			if (@ini_get('safe_mode') || @strtolower(ini_get('safe_mode')) == 'on')
			{
				@touch($destination);
			}

			switch ($type['format'])
			{
				case IMG_GIF:
					imagegif($new_image, $destination);
				break;

				case IMG_JPG:
					imagejpeg($new_image, $destination, 90);
				break;

				case IMG_PNG:
					imagepng($new_image, $destination);
				break;

				case IMG_WBMP:
					imagewbmp($new_image, $destination);
				break;
			}

			imagedestroy($new_image);
		}
		else
		{
			return false;
		}
	}

	if (!file_exists($destination))
	{
		return false;
	}

	@chmod($destination, 0666);

	return true;
}

/**
* Calculate the needed size for Thumbnail
*/
function get_img_size_format($width, $height)
{
	global $config;

	// Maximum Width the Image can take
	$max_width = ($config['photo_thumb_width']) ? $config['photo_thumb_width'] : 150;
	$max_height = ($config['photo_thumb_height']) ? $config['photo_thumb_height'] : 150;


	if ($width > $height)
	{
		return array(
			$max_width,
			round($height / ($width / $max_width)),
		);
	}
	else
	{
		return array(
			round($width / ($height / $max_height)),
			$max_height,
		);
	}
}

/**
* Return supported image types
*/
function get_supported_image_types($type = false)
{
	if (@extension_loaded('gd'))
	{
		$format = imagetypes();
		$new_type = 0;

		if ($type !== false)
		{
			switch ($type)
			{
				// GIF
				case 1:
					$new_type = ($format & IMG_GIF) ? IMG_GIF : false;
				break;

				// JPG, JPC, JP2
				case 2:
				case 9:
				case 10:
				case 11:
				case 12:
					$new_type = ($format & IMG_JPG) ? IMG_JPG : false;
				break;

				// PNG
				case 3:
					$new_type = ($format & IMG_PNG) ? IMG_PNG : false;
				break;

				// BMP, WBMP
				case 6:
				case 15:
					$new_type = ($format & IMG_WBMP) ? IMG_WBMP : false;
				break;
			}
		}
		else
		{
			$new_type = array();
			$go_through_types = array(IMG_GIF, IMG_JPG, IMG_PNG, IMG_WBMP);

			foreach ($go_through_types as $check_type)
			{
				if ($format & $check_type)
				{
					$new_type[] = $check_type;
				}
			}
		}

		return array(
			'gd'		=> ($new_type) ? true : false,
			'format'	=> $new_type,
			'version'	=> (function_exists('imagecreatetruecolor')) ? 2 : 1
		);
	}

	return array('gd' => false);
}

?>