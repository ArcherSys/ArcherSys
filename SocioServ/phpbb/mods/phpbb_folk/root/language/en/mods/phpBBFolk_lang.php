<?php
/** 
*
* example [English]
*
* @package language
* @version $Id: phpBBFolk_lang.php,v 0.0.0 2007/09/24 16:13:01 nanothree Exp $
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'PBF_ADD_TAGS'				=> 'Add Tags',
	'PBF_ADD_TAGS_DESCRIPTION'	=> 'Add as many tags as you wish sperated by a comma',
	'PBF_ADD_TAGS_DONE'			=> '<strong>%1$s</strong> added, <strong>%2$s</strong> not added. Tags are not added if they are not unique',
	'PBF_ADD_TAGS_RETURN'		=> '%s Click here to return to the topic %s',
	'PBF_ADD_TAGS_NO_TAGS'		=> 'You must supply some tags for the topic',
	'PBF_TAG_CLOUD_TITLE'		=> 'Tag Cloud',
	'PBF_TAGS_RESULT_TITLE'		=> 'Tag Search Results',
	'PBF_TAG_SEARCH_TEXT'		=> 'Search Tags',
	'PBF_NUM_TOPIC'				=> '1 topic',
	'PBF_NUM_TOPICS'			=> '%s topics',
	'PBF_NO_RESULTS'			=> 'No posts have been tagged with any of: <strong> %s </strong>',
	'PBF_RETURN_TO_SEARCH'		=> '%s Click here to return to the tag search %s',
	'PBF_ENTER_SEARCH_TEXT'		=> 'Enter the tags you wish to search for',
	'PBF_SEARCH_PAGE_TITLE'		=> 'Tag Search',
	'PBF_TAGS_LABEL'			=> 'Tags',
	'PBF_NO_SEARCH_CRIT'		=> 'You must enter a tag to search for',
	'PBF_ENTER_TAGS'			=> 'Enter your tags',
	'PFB_INPUT_TAGS_EXPLANATION'=> 'You can add tags to your post to help other users find your post, you may add as many tags as you wish. Seperate the tags using a comma',
	'PBF_TAGS'					=> 'Tags',
		
	//acp language tags
	'PBF_ACP_MANAGE_DESCRIPTION'	=> 'Welcome to the phpBBFolk management area, here you can remove tags associated with topics that are not relevant or you find offensive.',
	'PBF_ACP_SEARCH_TAG'			=> 'Use this search box to find tags you wish to delete',
	'PBF_ACP_MANAGE_TITLE'			=> 'Manage Tags',
	'PBF_ACP_RESULTS'				=> 'Results',
	'PBF_ACP_RESULTS_DESC'			=> 'To remove a tag associated with a topic click the tag in the table below. To view the topic you can clikc the topic\'s title',
	'PBF_ACP_TABLE_TITLE'			=> 'Topic title and tags',
	'PBF_ACP_CONFIGURE_TITLE'		=> 'Configure',
	'PBF_ACP_CONFIGURE_DESCRIPTION' => 'Welcome to the phpBBFolk configuration area, here you can adjust how phpBBFolk interacts with your board',
	'PBF_ACP_OPTIONS'				=> 'Options',
	'PBF_ACP_ON'					=> 'On',
	'PBF_ACP_OFF'					=> 'Off',
	'PBF_ACP_SWITCH_ON'				=> 'Turn tagging on or off',
	'PBF_ACP_SWITCH_ON_EXPLAIN'		=> 'Turning tagging off stops users from adding tags and removes all tag clouds from the board',
	'PBF_ACP_NUMBER_OF_TAGS_INDEX' 	=> 'The number of tags to show in the tag cloud on the forum index',
	'PBF_ACP_NUMBER_OF_TAGS_TOPIC' 	=> 'The number of tags to show in the tag clouds on the topic pages',
	'PBF_ACP_ALL'					=> 'All',
	'PBF_ACP_MODS'					=> 'Moderators',
	'PBF_ACP_ADMIN'					=> 'Administrators',
	'PBF_ACP_TAGGERS'				=> 'Who is allowed to tag?',
	'PBF_ACP_TAGGERS_EXPLAIN'		=> 'Choose who is allowed to tag topics. This uses a hierarchy of permissions i.e. choosing moderators will only allow mods and admins to tag topics',
	'PBF_ACP_MIN_SIZE'				=> 'Minimum font size',
	'PBF_ACP_MIN_SIZE_EXPLAIN'		=> 'The minimum size of the fonts in the tag clouds',
	'PBF_ACP_MAX_SIZE'				=> 'Maximum font size',
	'PBF_ACP_MAX_SIZE_EXPLAIN'		=> 'The maximum size of the fonts in the tag clouds',
	'PBF_ACP_TOPIC_TG'				=> 'Show tag cloud on topic page',
	'PBF_ACP_INDEX_TG'				=> 'Show tag cloud on forum index',
	'PFB_ACP_REMOVE_CONF'			=> 'Are you sure you wish to remove this tag?',
	'PBF_ACP_REMOVE_SUCCESSFUL'		=> 'Tag was successfully removed',
	'PBF_ACP_NO_TOPICS'				=> 'No topics returned',
	'PBF_ACP_CONF_UPDATE_SUCCESSFUL'=> 'phpBBFolk configuration updated',
	
));
?>