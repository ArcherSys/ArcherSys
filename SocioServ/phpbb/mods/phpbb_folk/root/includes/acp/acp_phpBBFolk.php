<?php
/** 
*
* @package acp
* @version $Id: acp_phpBBFolk.php,v 0.1.0 2007/10/02 11:34:40 nanothree Exp $
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
			
/**
* @package acp
*/
include($phpbb_root_path . '/includes/functions_phpBBFolk.'.$phpEx);

class acp_phpBBFolk
{
	var $u_action;
					
	function main($id, $mode)
	{
		global $db, $user, $auth, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
					
		$user->add_lang('mods/phpBBFolk_lang');
							
						
		// Set up general vars
						
		switch($mode)
		{
			case 'configure':
				$this->configure();
			break;
			
			case 'manage':
				$this->manage();
			break;
			
			case 'remove':
				$this->remove();
			break;
		}							 
	}
	
	//module functions
	function manage(){
	
		global $template, $user, $phpEx, $phpbb_root_path, $phpbb_admin_path;
		
		$this->page_title 	= 'PBF_ACP_MANAGE_TITLE';	
		$this->tpl_name     = 'acp_phpBBFolk_manage';

		$tags = request_var('tag', '');

		$template->assign_vars(array(
				'S_TAG_SEARCH_ACTION'	=> $this->u_action,
				'S_SHOW_RESULTS'		=> false,
				'SEARCH_TAGS'			=> $tags

			)
		);
		
		if(isset($_POST['search']) || $tags != '')
		{
			
			if($tags == '')
			{
				$message = 	$user->lang['PBF_NO_SEARCH_CRIT'] . '<br /><br />';
							//sprintf($user->lang['RETURN_SEARCH'], '<a href="' . $meta_info . '">', '</a>');
				trigger_error($message . adm_back_link($this->u_action), E_USER_WARNING);

		
			}
			else
			{
				$topics = search_tags($tags);
				$template->assign_vars(array(
						'S_SHOW_RESULTS'	=> true,
					)
				);
				$row_count = 0;
				foreach($topics as $row){
					
					//echo append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $row['forum_id'] . '&t=' . $row['topic_id']).'<br>';
					$template->assign_block_vars('topicrow', array(
								'TOPIC_TITLE' 	=> $row['topic_title'],
								'TOPIC_TAGS'  	=> $this->get_tag_list($row['topic_id'], $tags),
								'U_TOPIC_LINK'	=> append_sid($phpbb_root_path."viewtopic.$phpEx", 'f=' . $row['forum_id'] . '&t=' . $row['topic_id']),
								'S_ROW_COUNT'	=> $row_count++,
								
							)
					);
				}//end of foreach	
			}
		}		
	}//end of function
	
	function configure(){
		
		global $template, $user, $phpEx, $phpbb_admin_path, $config;
		
		$submit = (isset($_POST['submit']) ? true : false);
		
		if($submit)
		{
			$config_input = request_var('config', array('' => ''));
			$config_vars = array(
				'vars' => array(
					'pbf_index_tagcloud' => array('lang' => '', 'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => false),
					'pbf_topic_tagcloud' => array('lang' => '', 'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => false),
					'pbf_index_tags' 	 => array('lang' => '', 'validate' => 'int', 	'type' => 'text:5:5', 		'explain' => false),
					'pbf_topic_tags' 	 => array('lang' => '', 'validate' => 'int', 	'type' => 'text:5:5', 		'explain' => false),
					'pbf_on' 			 => array('lang' => '', 'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => false),
					'pbf_max_font'		 => array('lang' => '', 'validate' => 'int',	'type' => 'text:5:5', 	'explain' => false),
					'pbf_min_font'		 => array('lang' => '', 'validate' => 'int', 	'type' => 'text:5:5', 		'explain' => false)
				)
			);
			
			$error = array();
			validate_config_vars($config_vars, $config_input, $error);
			
			$booleans = array('pbf_index_tagcloud', 'pbf_topic_tagcloud', 'pbf_on');
			
			//TO-DO check for errors before updating
			foreach ($config_vars['vars'] as $config_name => $null)
			{
				$config_value = $config_input[$config_name];
				
				if(in_array($config_name, $booleans))
				{
					$config_value = ($config_value == 'yes' ? 1 : 0);
				}
								
				set_config($config_name, $config_value);
			}
			
			$message = 	$user->lang['PBF_ACP_CONF_UPDATE_SUCCESSFUL'];
			$link = append_sid("index.php", "i=phpBBFolk&mode=configure");
			
			meta_refresh(4, $phpbb_admin_path . $link);	
			trigger_error($message . adm_back_link($link));			
			
		}
		else
		{
			$this->page_title 	= 'PBF_ACP_CONFIGURE_TITLE';	
			$this->tpl_name		= 'acp_phpBBFolk_configure';
					
			$template->assign_vars(array(
						'S_TAGS_ON'				=> ($config['pbf_on'] == 1 ? true : false),
						'INDEX_TAGS'			=>  $config['pbf_index_tags'],
						'S_TAGS_INDEX_ON'		=> ($config['pbf_index_tag_cloud'] == 1 ? true : false),
						'S_TAGS_TOPIC_ON'		=> ($config['pbf_topic_tagcloud'] == 1 ? true : false),
						'TOPIC_TAGS'			=>  $config['pbf_topic_tags'],
						'MAX_SIZE'				=>  $config['pbf_max_font'],
						'MIN_SIZE'				=>  $config['pbf_min_font']
				)
			);
		}

	}
	
	function remove(){
		
		global $template, $user, $phpbb_admin_path;
		
		$this->page_title 	= 'PBF_ACP_CONFIGURE_TITLE';	
		$this->tpl_name = 'acp_phpBBFolk_configure';
	
		$topic_id	= request_var('topic_id', 0);
		$tag		= request_var('tag_id', '');
		$search_tag = request_var('tag', '');

		if (confirm_box(true))
		{
			$this->remove_tag($tag, $topic_id);
			//echo $topic_id;
			$message = 	$user->lang['PBF_ACP_REMOVE_SUCCESSFUL'];
			
			$link = append_sid("index.php", "i=phpBBFolk&mode=manage&tag=$search_tag");
			
			meta_refresh(3, $phpbb_admin_path . $link);	
			trigger_error($message . adm_back_link($link));
		
		}
		else
		{
			$s_hidden_fields = build_hidden_fields(array(
				'tag_id'	=> $tag,
				'topic_id'	=> $topic_id,
				'tag'		=> $search_tag
				)
			);
	
			//display mode
			confirm_box(false, $user->lang['PFB_ACP_REMOVE_CONF'], $s_hidden_fields);
		}

	
	}
	
	//other functions
	function remove_tag($tag, $topic_id){
	
		global $db;
			
		$sql = "DELETE FROM " . TAGS_TABLE . " WHERE tag = '$tag' AND topic_id = $topic_id";
		
		if(!($result = $db->sql_query($sql)))
		{
			message_die(GENERAL_ERROR, 'Error retrieving search results', '', __LINE__, __FILE__, $sql);
		}
		
	}
	
	function search_tags($tags, $start = 0){
		
		global $db, $config;
		
		$topics_count = (int) $db->sql_fetchfield('num_topics');
	
		$end = $config['topics_per_page'];
		$tag_array = $this->prepare_search_string($tags);
		
		$sql = "SELECT top.*, COUNT(top.topic_id) ttid
				FROM ".TAG_MAP_TABLE." tm, ". TAGS_TABLE ." t, ". TOPICS_TABLE ." top
				WHERE tm.tag_id = t.tag_id
				AND (t.tag IN (";
		$sql .= $tag_array;
		$sql .= "))
				AND top.topic_id = tm.topic_id
				GROUP BY top.topic_id
				ORDER BY ttid DESC";
					
		if(!($result = $db->sql_query($sql)))
		{
			message_die(GENERAL_ERROR, 'Error retrieving search results', '', __LINE__, __FILE__, $sql);
		}
		
		$result_set = $db->sql_fetchrowset($result);
		
		return $result_set;
		
		//echo '<pre>';
		//echo var_dump($result_set);
		
	}
	function get_topic_tags($topic_id){
		
		global $db;
		
		$sql =  "SELECT t.tag
				 FROM " . TAGS_TABLE . " t ";
		$sql .=	 ($topic_id == -1 ? "" : "WHERE t.topic_id = $topic_id ");
		$sql .= "GROUP BY t.tag";
				
		if(!($result = $db->sql_query($sql)))
		{
			message_die(GENERAL_ERROR, 'Error retrieving topic tags', '', __LINE__, __FILE__, $sql);
		}
		
		$result_set = $db->sql_fetchrowset($result);			
		
		$tag_array	= array();
		
		for($i = 0; $i < sizeof($result_set); $i++)
		{
			$tag_array[$result_set[$i]['tag']] = $result_set[$i]['tag'];
		}

		return $tag_array;
	}
	
	function get_tag_list($topic_id, $search_str = ''){
		global $phpEx, $user, $phpbb_admin_path;
		
		$tag_list = "";
		
		$tags = $this->get_topic_tags($topic_id);
		if(sizeof($tags) > 0)
		{
			foreach ($tags as $tag => $tag_id)
			{
				$tag_param = $tag;
				
				if(strpos($tag, ' ') !== false)
				{
					$tag_param = '&quot;' . $tag . '&quot;';
				}
				
				$params = "i=phpBBFolk&mode=remove&tag_id={$tag_id}&back_link=acp_phpBBFolk&topic_id={$topic_id}";
				
				if($search_str != ''){
					$params .= '&tag=' . $search_str;
				}
				
				$remove_link = append_sid("{$phpbb_admin_path}index.$phpEx", $params);		
				$tag_list .= '<a href="'.$remove_link.'">' . $tag . '</a>,&nbsp;';
			}
			$tag_list = substr($tag_list, 0, -7);
		}
		else
		{
			$tag_list = false;		
		}
			
		return $tag_list;
	}	
	function prepare_search_string($string){
		$str_array = array();
		$qoute  = false;
		
		$tags = html_entity_decode($string);
		
		for($i = 0; $i < strlen($tags); $i++ )
		{		
			
			if(($tags[$i] == '"' || $tags[$i] == '\'') && $qoute === true)
			{
				$qoute = false;
			}
			else if(($tags[$i] == '"' || $tags[$i] == '\'') && $qoute === false)
			{
				$qoute = true;
			}		
	
			if($tags[$i] == ' ' && !$qoute)
			{
				$str_buffer = str_replace('"', '', $str_buffer);
				$str_buffer = str_replace("'", '', $str_buffer);
				array_push($str_array, $str_buffer);
				$str_buffer = "";
			}
			else
			{
				$str_buffer .= $tags[$i];
			}
	
		}
		$str_buffer = str_replace('"', '', $str_buffer);
		$str_buffer = str_replace("'", '', $str_buffer);
		array_push($str_array, $str_buffer);
		
		$pre_str = "";
		for($j = 0; $j < sizeof($str_array); $j++)
		{
			$prep_str .= "'" . $str_array[$j] . "',";
		}
		
		return substr($prep_str, 0, strlen($prep_str)-1);
	}	
}
			
?>