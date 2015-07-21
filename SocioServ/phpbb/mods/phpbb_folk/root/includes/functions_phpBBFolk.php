<?php
/** 
*
* @package phpBBFolk
* @version $Id:functions_bbatgs.php,v 0.0.0 2007/09/24 15:26:38 nanothree Exp $
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/

function insert_tags($tags, $topic_id){
	
	$outcome 	= array('added' => 0, 'dups' => 0);
	$tag_array  = split(',', $tags);
	
	for($i = 0; $i < sizeof($tag_array); $i++)
	{
		if(insert_tag(trim($tag_array[$i]), $topic_id)){
			$outcome['added']++;
		}else{
			$outcome['dups']++;
		}
		
	}
	
	return $outcome;
	 
	
		
}

function insert_tag($tag, $topic_id){
	
	global $db;

	$sql = 'SELECT *
	FROM ' . TAGS_TABLE . " 
	WHERE tag = '$tag' AND topic_id = '$topic_id'
	LIMIT 1";
	
	if(!($result = $db->sql_query($sql)))
	{
		message_die(GENERAL_ERROR, 'Error retrieving number of tags', '', __LINE__, __FILE__, $sql);
	}
	$row = $db->sql_fetchrow($result);
	
	if($row != '') // stas  = false)
	{
		return false;
	}
	else
	{
		$sql = "INSERT INTO " . TAGS_TABLE . " (tag, topic_id) VALUES('$tag', $topic_id)";
		
		if(!$db->sql_query($sql))	
		{
			message_die(GENERAL_ERROR, 'Error inserting tag data', '', __LINE__, __FILE__, $sql);
		}
		
		return true;
	}
}

function get_topic_tags($topic_id, $limit){
	
	global $db;
				 
	$sql =  "SELECT t.tag, COUNT(*) tag_count
			 FROM " . TAGS_TABLE . " t ";
	$sql .=	 ($topic_id == -1 ? "" : "WHERE t.topic_id = $topic_id ");
	$sql .= "GROUP BY tag
			 LIMIT 0, $limit";
			 			
	if(!($result = $db->sql_query($sql)))
	{
		message_die(GENERAL_ERROR, 'Error retrieving topic tags', '', __LINE__, __FILE__, $sql);
	}
	
	$result_set = $db->sql_fetchrowset($result);			
	
	//echo '<pre>';
	//print_r($result_set);
	//echo "_________________________";
	$tag_array	= array();
	
	for($i = 0; $i < sizeof($result_set); $i++)
	{
		$tag_array[$result_set[$i]['tag']] = $result_set[$i]['tag_count'];
	}
	//echo '<pre>';
	//print_r($tag_array);
	return $tag_array;
}

function get_tag_list($topic_id, $limit, $admin = false){
	global $phpbb_root_path, $phpEx, $user;
	
	$tag_list = "";
	
	$tags = get_topic_tags($topic_id, $limit);
	if(sizeof($tags) > 0)
	{
		foreach ($tags as $tag => $count)
		{
			$tag_param = $tag;
			
			if(strpos($tag, ' ') !== false)
			{
				$tag_param = '&quot;' . $tag . '&quot;';
			}
			
			$tag_list .= '<a href="'.append_sid($phpbb_root_path.'phpBBFolk.'.$phpEx, 'mode=search&tag='.$tag_param).'">' . 
							$tag . '</a>,&nbsp;';
		}
		$tag_list = substr($tag_list, 0, -7);
	}
	else
	{
		
		$tag_list = false;		
	}
		
	return $tag_list;
}

function get_tag_cloud($topic_id = -1, $min_size = 8, $max_size = 26, $limit = 60){
	
	global $phpEx, $user;
	
	$tags = get_topic_tags($topic_id, $limit);
	if(sizeof($tags) > 0)
	{
		$min_count = min(array_values($tags));
		$max_count = max(array_values($tags));
		$spread = $max_count - $min_count;
			
		if($spread == 0)
		{
			$spread = 1;
		}
		
		foreach ($tags as $tag => $count)
		{
			$size = $min_size + ($count - $min_count) 
					* ($max_size - $min_size) / $spread;
			
			$tag_param = $tag;
			
			if(strpos($tag, ' ') !== false)
			{
				$tag_param = '&quot;' . $tag . '&quot;';
			}
			
			$tag_cloud .= '<span style="font-size:'.$size.'px"><a href="'.append_sid($phpbb_root.'phpBBFolk.'.$phpEx, 'mode=search&tag='.$tag_param).'">' . 
							$tag . '</a></span>&nbsp;&nbsp;';
		}
	}
	else
	{
		
		$tag_cloud = false;		
	}
		
	return $tag_cloud;
}

function get_num_rows($tags){

	global $db;

	$end = $config['topics_per_page'];
	$tag_array = filter_tags($tags);
	
	$sql = "SELECT top.*, COUNT(top.topic_id) count
			FROM ". TAGS_TABLE ." t, ". TOPICS_TABLE ." top
			WHERE (t.tag IN (";
	$sql .= prepare_search_string($tag_array['include']);
	$sql .= "))";
	
	if(!empty($tag_array['exclude'])){
		$sql .= "AND (top.topic_id NOT IN ( 
						SELECT top2.topic_id
						FROM ". TAGS_TABLE ." t2, ". TOPICS_TABLE ." top2
						WHERE t2.topic_id = top2.topic_id";
		$sql .= prep_exclusion_string($tag_array['exclude']);
		$sql .= "))";
	}

	$sql .= "AND top.topic_id = t.topic_id
			 GROUP BY top.topic_id";
	
	//echo '<pre>';
	//echo $sql;
			
	if(!($result = $db->sql_query($sql)))
	{
		message_die(GENERAL_ERROR, 'Error retrieving search results', '', __LINE__, __FILE__, $sql);
	}
	
	$result_set = $db->sql_fetchrowset($result);
	$db->sql_freeresult($result);

	return sizeof($result_set);
	
	
	
}

function search_tags($tags, $start = 0){
	
	global $db, $config;
	
	$topics_count = (int) $db->sql_fetchfield('num_topics');

	$end = $config['topics_per_page'];
	$tag_array = filter_tags($tags);
	
	$sql = "SELECT top.*, COUNT(top.topic_id) count
			FROM ". TAGS_TABLE ." t, ". TOPICS_TABLE ." top
			WHERE (t.tag IN (";
	$sql .= prepare_search_string($tag_array['include']);
	$sql .= "))";
	
	if(!empty($tag_array['exclude'])){
		$sql .= "AND (top.topic_id NOT IN ( 
						SELECT top2.topic_id
						FROM ". TAGS_TABLE ." t2, ". TOPICS_TABLE ." top2
						WHERE t2.topic_id = top2.topic_id";
		$sql .= prep_exclusion_string($tag_array['exclude']);
		$sql .= "))";
	}

	$sql .= "AND top.topic_id = t.topic_id
			 GROUP BY top.topic_id
			 ORDER BY count DESC
			 LIMIT $start, $end";
	
	//echo '<pre>';	
	//echo $sql;

	if(!($result = $db->sql_query($sql)))
	{
		message_die(GENERAL_ERROR, 'Error retrieving search results', '', __LINE__, __FILE__, $sql);
	}
	
	$result_set = $db->sql_fetchrowset($result);


	//echo '<pre>';
	//echo var_dump($result_set);
		
	return $result_set;
	
}

function prep_exclusion_string($exclude_array){
	$string = '';
	
	for($i = 0; $i < sizeof($exclude_array); $i++){
		$string .= ' AND t2.tag = \'' . $exclude_array[$i] . '\'';
	}
	
	return $string;
}

function filter_tags($tags){
	$tag_array = tags_to_array($tags);
	$incl = array();
	$excl = array();
	$filtered_array = array('include' => $incl, 'exclude' => $excl);
	
	for($i = 0; $i < sizeof($tag_array); $i++){
		if($tag_array[$i][0] == '-'){
			array_push($filtered_array['exclude'], substr($tag_array[$i], 1));
		}else{
			array_push($filtered_array['include'], $tag_array[$i]);
		}
	}
	
	//echo '<pre>';
	//print_r($filtered_array);
	return $filtered_array;
}

function tags_to_array($string){
	$str_array 	= array();
	$qoute  	= false;
	$str_buffer = "";
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
	
	return $str_array;
	
}

function prepare_search_string($str_array){
	$prep_str = "";
	for($j = 0; $j < sizeof($str_array); $j++)
	{
		$prep_str .= "'" . $str_array[$j] . "',";
	}
	
	return substr($prep_str, 0, strlen($prep_str)-1);
}

?>
