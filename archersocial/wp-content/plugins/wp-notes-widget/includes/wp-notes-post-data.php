<?php

  if (!function_exists('getNotePostData')) {
    
    /**
     * Fetches all of the Note meta data and related attributes. Packages everything in an array for easy access
     *
     * @since  0.1.3
     * @param  int     $id       The Wordpress ID of the note
     * @return array   $wp_notes_data  An array of all the meta data and other attributes for the note
     */
    function getNotePostData($id) {
      
      $wp_notes_data = get_post_meta( $id, 'WP_Notes_data', true );
      
      $wp_notes_data['text']                 = !empty($wp_notes_data['text'])                 ? esc_textarea($wp_notes_data['text']) : '';
      $wp_notes_data['action_text']          = !empty($wp_notes_data['action_text'])         ? sanitize_text_field($wp_notes_data['action_text']) : '';
      $wp_notes_data['action_link']         = !empty($wp_notes_data['action_link'])         ? sanitize_text_field($wp_notes_data['action_link']) : '';
      $wp_notes_data['image_id']             = !empty($wp_notes_data['image_id'])             ? sanitize_text_field($wp_notes_data['image_id']) : '';
      $wp_notes_data['action_link_type']     = !empty($wp_notes_data['action_link_type'])     ?  sanitize_text_field($wp_notes_data['action_link_type']) : '';
      $wp_notes_data['download_id']         = !empty($wp_notes_data['download_id'])         ? sanitize_text_field($wp_notes_data['download_id']) : '';
      $wp_notes_data['plain_link_new_tab']   = !empty($wp_notes_data['plain_link_new_tab'])   ? sanitize_text_field($wp_notes_data['plain_link_new_tab']) : '';

      $wp_notes_data['image_meta'] = array(); 
      if ((bool)$wp_notes_data['image_id']) {
        
        $img_obj = wp_get_attachment_image_src($wp_notes_data['image_id'], 'wp-notes-widget-image' );
        if (!$img_obj) {
          //if 'wp-notes-widget-image' sized image has not been generated yet, grab the medium size.
          $img_obj = wp_get_attachment_image_src($wp_notes_data['image_id'], 'medium' );
        }

        $wp_notes_data['image_meta']['src'] = $img_obj[0];
        $wp_notes_data['image_meta']['width'] = $img_obj[1];
        $wp_notes_data['image_meta']['alt'] = get_post_meta($wp_notes_data['image_id'], '_wp_attachment_image_alt', true);

      } else {
        $wp_notes_data['image_meta']['src'] = '';
        $wp_notes_data['image_meta']['alt'] = '';
      }

      if ((bool)$wp_notes_data['download_id']) {
        $wp_notes_data['download_link'] = wp_get_attachment_url( $wp_notes_data['download_id'] );
      } else {
        $wp_notes_data['download_link']= '';  
      }

      return $wp_notes_data;

    }
  }

  if (!function_exists('getNotePostTwitterData')) {
    
    /**
     * Fetches all of the Note Twitter Post meta data and related attributes. Packages everything in an array for easy access
     *
     * @since  0.2.0
     * @param  int     $id                     The Wordpress ID of the note
     * @return array   $wp_notes_twitter_data  An array of all the meta data and other attributes for the note twitter post
     */
    function getNotePostTwitterData($id) {
      
      $wp_notes_twitter_data = get_post_meta( $id, 'WP_Notes_twitter_data', true );
      
      $wp_notes_twitter_data['push_tweet']       = null;
      $wp_notes_twitter_data['tweet_body']      = !empty($wp_notes_twitter_data['tweet_body'])         ? sanitize_text_field($wp_notes_twitter_data['tweet_body']) : '';
      
      if (!empty($wp_notes_twitter_data['tweet_history']) ) {
        foreach ($wp_notes_twitter_data['tweet_history'] as &$tweet_history_entry) {
          $tweet_history_entry = sanitize_text_field($tweet_history_entry);
        }

      } else {
        $wp_notes_twitter_data['tweet_history'] = null;
      }

      return $wp_notes_twitter_data;

    }
  }


  if (!function_exists('getNotePostTweetHistory')) {
    
    /**
     * Fetches the tweet history of a particular note. 
     *
     * @since  0.2.0
     * @param  int     $id                     The Wordpress ID of the note
     * @return array   $wp_notes_tweet_history  An array of all the dates and times of previous tweets from the Note admin.
     */
    function getNotePostTweetHistory($id) {
      $wp_notes_tweet_history = get_post_meta( $id, 'WP_Notes_tweet_history', true );
      
      if (!empty($wp_notes_tweet_history)) {
        foreach ($wp_notes_tweet_history as &$wp_notes_tweet_history_item) {
          $wp_notes_tweet_history_item =  date_i18n( get_option( 'date_format' ), $wp_notes_tweet_history_item ) . ' ' . date_i18n( get_option( 'time_format' ), $wp_notes_tweet_history_item );
        }        
      } else {
        $wp_notes_tweet_history = null;
      }

      return $wp_notes_tweet_history;

    }
  }