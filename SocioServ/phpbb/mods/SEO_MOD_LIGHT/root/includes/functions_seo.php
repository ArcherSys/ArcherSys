<?php
/**
*
* @package phpBB3
* @version $Id: functions_seo.php 489 2007-09-19 22:04:18Z handyman $
* @copyright (c) 2007 StarTrekGuide Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

function format_url($name, $id, $start = 0, $xtra_params = false, $append = true)
{
	global $phpbb_root_path, $config, $phpEx;
	global $_SID;

	$name = clean_url($name);

	$ext = '.html';
	if (isset($config['seo_ext']))
	{
		$ext = '.' . $config['seo_ext'];
	}

	switch (substr($id, 0, 1))
	{
		case 'p':
			if ($append)
			{
				return append_seo_sid($phpbb_root_path . $name . '-' . $id . (($start) ? "s$start" : '') . $ext, $xtra_params) . '#' . $id;
			}
		break;
		case 't':
		case 'f':
			if ($append)
			{
				return append_seo_sid($phpbb_root_path . $name . '-' . $id . (($start) ? "s$start" : '') . $ext, $xtra_params);
			}
		break;
	}
	return $phpbb_root_path . $name . '-' . $id;
}

function clean_url($url)
{
	$url = str_replace(array('Re:', 're:', ' '), '', $url);
	$find = array('?', '#', '%', '¿', '^', '.', '/', ' ', '_', ')', '[', ']', ':', '.');
	$url = str_replace($find, '-', censor_text($url));
	$url = str_replace(array('---', '--'), '-', $url);

	return utf8_clean_string($url);
}

function append_seo_sid($url, $params = false, $is_amp = true, $session_id = false)
{
	global $_SID, $_EXTRA_URL, $phpEx;

	$append = '.' . $phpEx;
	if (isset($config['seo_append']))
	{
		$append = '.' . $config['seo_append'];
	}

	// Developers using the hook function need to globalise the $_SID and $_EXTRA_URL on their own and also handle it appropiatly.
	// They could mimick most of what is within this function
	if (function_exists('append_sid_phpbb_hook'))
	{
		return append_sid_phpbb_hook($url, $params, $is_amp, $session_id);
	}

	// Assign sid if session id is not specified
	if ($session_id === false)
	{
		$session_id = $_SID;
	}

	$amp_delim = ($is_amp) ? '&amp;' : '&';
	$url_delim = (strpos($url, $append . '-') === false) ? '-' : $amp_delim;

	// Appending custom url parameter?
	$append_url = (!empty($_EXTRA_URL)) ? implode($amp_delim, $_EXTRA_URL) : '';

	$anchor = '';
	if (strpos($url, '#') !== false)
	{
		list($url, $anchor) = explode('#', $url, 2);
		$anchor = '#' . $anchor;
	}
	else if (!is_array($params) && strpos($params, '#') !== false)
	{
		list($params, $anchor) = explode('#', $params, 2);
		$anchor = '#' . $anchor;
	}

	// Use the short variant if possible ;)
	if ($params === false)
	{
		// Append session id
		if (!$session_id)
		{
			return $url . (($append_url) ? $url_delim . $append_url : '') . $anchor;
		}
		else
		{
			return $url . (($append_url) ? $url_delim . $append_url . $amp_delim : $url_delim) . 'sid=' . $session_id . $anchor;
		}
	}

	// Build string if parameters are specified as array
	if (is_array($params))
	{
		$output = array();

		foreach ($params as $key => $item)
		{
			if ($item === NULL)
			{
				continue;
			}

			if ($key == '#')
			{
				$anchor = '#' . $item;
				continue;
			}

			$output[] = $key . '=' . $item;
		}

		$params = implode($amp_delim, $output);
	}

	// Append session id and parameters (even if they are empty)
	// If parameters are empty, the developer can still append his/her parameters without caring about the delimiter
	return $url . (($append_url) ? $url_delim . $append_url . $amp_delim : $url_delim) . $params . ((!$session_id) ? '' : $amp_delim . 'sid=' . $session_id) . $anchor;
}

function generate_seo_pagination($base_url, $num_items, $per_page, $start_item, $add_prevnext_text = false, $tpl_prefix = '')
{
	global $template, $user, $config, $phpEx;

	$append = '.' . $phpEx;
	if (isset($config['seo_append']))
	{
		$append = '.' . $config['seo_append'];
	}

	// Make sure $per_page is a valid value
	$per_page = ($per_page <= 0) ? 1 : $per_page;

	$seperator = '<span class="page-sep">' . $user->lang['COMMA_SEPARATOR'] . '</span>';
	$total_pages = ceil($num_items / $per_page);

	if ($total_pages == 1 || !$num_items)
	{
		return false;
	}

	$on_page = floor($start_item / $per_page) + 1;
	$url_delim = (strpos($base_url, $append . '-') === false) ? '-' : '&amp;';

	$page_string = ($on_page == 1) ? '<strong>1</strong>' : '<a href="' . append_seo_sid($base_url . $append) . '">1</a>';

	if ($total_pages > 5)
	{
		$start_cnt = min(max(1, $on_page - 4), $total_pages - 5);
		$end_cnt = max(min($total_pages, $on_page + 4), 6);

		$page_string .= ($start_cnt > 1) ? ' ... ' : $seperator;

		for ($i = $start_cnt + 1; $i < $end_cnt; $i++)
		{
			$page_string .= ($i == $on_page) ? '<strong>' . $i . '</strong>' : '<a href="' . append_seo_sid($base_url . 's' . (($i - 1) * $per_page) . $append)  . '">' . $i . '</a>';
			if ($i < $end_cnt - 1)
			{
				$page_string .= $seperator;
			}
		}

		$page_string .= ($end_cnt < $total_pages) ? ' ... ' : $seperator;
	}
	else
	{
		$page_string .= $seperator;

		for ($i = 2; $i < $total_pages; $i++)
		{
			$page_string .= ($i == $on_page) ? '<strong>' . $i . '</strong>' : '<a href="' . append_seo_sid($base_url . 's' . (($i - 1) * $per_page) . $append) . '">' . $i . '</a>';
			if ($i < $total_pages)
			{
				$page_string .= $seperator;
			}
		}
	}

	$page_string .= ($on_page == $total_pages) ? '<strong>' . $total_pages . '</strong>' : '<a href="' . append_seo_sid($base_url . 's' . (($i - 1) * $per_page) . $append) . '">' . $total_pages . '</a>';

	if ($add_prevnext_text)
	{
		if ($on_page != 1)
		{
			$page_string = '<a href="' . append_seo_sid($base_url . 's' . (($on_page - 2) * $per_page) . $append) . '">' . $user->lang['PREVIOUS'] . '</a>&nbsp;&nbsp;' . $page_string;
		}

		if ($on_page != $total_pages)
		{
			$page_string .= '&nbsp;&nbsp;<a href="' . append_seo_sid($base_url . 's' . ($on_page * $per_page) . $append) . '">' . $user->lang['NEXT'] . '</a>';
		}
	}

	$template->assign_vars(array(
		$tpl_prefix . 'BASE_URL'	=> $base_url,
		$tpl_prefix . 'PER_PAGE'	=> $per_page,

		$tpl_prefix . 'PREVIOUS_PAGE'	=> ($on_page == 1) ? '' : append_seo_sid($base_url . 's' . (($on_page - 2) * $per_page) . $append),
		$tpl_prefix . 'NEXT_PAGE'		=> ($on_page == $total_pages) ? '' : append_seo_sid($base_url . 's' . ($on_page * $per_page) . $append),
		$tpl_prefix . 'TOTAL_PAGES'		=> $total_pages)
	);

	return $page_string;
}

function topic_generate_seo_pagination($replies, $url)
{
	global $config, $user, $phpEx;

	$append = '.' . $phpEx;
	if (isset($config['seo_append']))
	{
		$append = '.' . $config['seo_append'];
	}
	// Make sure $per_page is a valid value
	$per_page = ($config['posts_per_page'] <= 0) ? 1 : $config['posts_per_page'];

	if (($replies + 1) > $per_page)
	{
		$total_pages = ceil(($replies + 1) / $per_page);
		$pagination = '';

		$times = 1;
		for ($j = 0; $j < $replies + 1; $j += $per_page)
		{
			$pagination .= '<a href="' . append_seo_sid($url . 's' . $j . $append) . '">' . $times . '</a>';
			if ($times == 1 && $total_pages > 5)
			{
				$pagination .= ' ... ';

				// Display the last three pages
				$times = $total_pages - 3;
				$j += ($total_pages - 4) * $per_page;
			}
			else if ($times < $total_pages)
			{
				$pagination .= '<span class="page-sep">' . $user->lang['COMMA_SEPARATOR'] . '</span>';
			}
			$times++;
		}
	}
	else
	{
		$pagination = '';
	}

	return $pagination;
}
?>