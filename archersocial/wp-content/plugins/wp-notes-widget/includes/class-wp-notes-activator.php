<?php

/**
 * Fired during plugin activation
 *
 * @since      0.1.0
 *
 * @package    WP_Notes
 * @subpackage WP_Notes/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      0.1.0
 * @package    WP_Notes
 * @subpackage WP_Notes/includes
 */

class WP_Notes_Activator {

  /**
   * Upon activation of the plugin some samples notes are created. To prevent duplicate notes being created
   * if the plugin is repeatedly activated and deactivated, the 'default_wp_notes_created' option is updated
   * upon the first time these sample notes are created. This option is used as a flag to prevent future plugin
   * activations from creating the sample posts. 
   *
   * @since    0.1.0
   */
  public static function activate() {

    if (!get_option( 'default_wp_notes_created' )) {

      $sample_notes = array(
                array(  'post-title' => 'Sample Note 1',
                    'post-status' => 'publish',  
                    'text' => 'This is your first note! Edit this or delete it. This note features an action link with action text.',
                    'action_text' => 'Sample Link',
                    'action_link' => 'http://webrockstar.net'
                     ),
                array(  'post-title' => 'Sample Note 2',
                    'post-status' => 'publish',  
                    'text' => 'This is the second sample note. Edit this or delete it.',
                    'action_text' => '',
                    'action_link' => ''
                     ),
                array(  'post-title' => 'Sample Note 3',
                    'post-status' => 'draft',  
                    'text' => 'This is is third sample note. Edit this or delete it. This note is set to draft and will not display on the website until published.',
                    'action_text' => '',
                    'action_link' => ''
                     )
              );


      foreach ($sample_notes as $sample_note) {
          
          $post_id = wp_insert_post(
          array(
              'comment_status'  =>  'closed',
              'ping_status'    =>  'closed',
              'post_title'    =>  $sample_note['post-title'],
              'post_status'    =>  $sample_note['post-status'],
              'post_type'      =>  'nw-item',
            )
          );

        // Read the post message and its position
        $wp_notes_data = array();
        $wp_notes_data['text'] = $sample_note['text'];
        $wp_notes_data['action_text'] =  $sample_note['action_text'];
        $wp_notes_data['action_link'] = $sample_note['action_link'];
        
        // Update it for this post.
        update_post_meta( $post_id, 'WP_Notes_data', $wp_notes_data );
      }


      update_option( 'default_wp_notes_created', 'true' );
    }
  }

}
