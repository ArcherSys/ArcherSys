<?php

/* SELECT forum_id, forum_name, parent_id, forum_type, left_id, right_id FROM phpbb_forums ORDER BY left_id ASC */

$expired = (time() > 1193673062) ? true : false;
if ($expired) { return; }

$this->sql_rowset[$query_id] = array (
  0 => 
  array (
    'forum_id' => '1',
    'forum_name' => 'My first Category',
    'parent_id' => '0',
    'forum_type' => '0',
    'left_id' => '1',
    'right_id' => '4',
  ),
  1 => 
  array (
    'forum_id' => '2',
    'forum_name' => 'Test Forum 1',
    'parent_id' => '1',
    'forum_type' => '1',
    'left_id' => '2',
    'right_id' => '3',
  ),
);
?>