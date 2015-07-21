  <div class="wp-notes-post-admin-container" >
    <h4><?php _e('Tweet History and Settings', 'wp-notes-widget'); ?></h4>
    <div class="content-segment">
      
      <script>
        var wp_notes_widget_twitter_url_short_length         = <?php echo $twitter_url_short_length; ?>;
        var wp_notes_widget_twitter_url_short_length_https   = <?php echo $twitter_url_short_length_https; ?>;
        var wp_notes_widget_twitter_over_limit_text         = "<?php _e('Too long. Tweet won\'t be sent.'); ?>";  
      </script>

      <div class="wp-notes-margin-bottom" >
        <input type="checkbox" id="WP_Notes_push_tweet" name="WP_Notes_push_tweet" for="" value="checked" <?php checked($wp_notes_twitter_data['push_tweet'], 'checked' ) ?> />
        <label for="WP_Notes_push_tweet" ><strong><?php _e('Send Tweet on Publish or Update?', 'wp-notes-widget') ?></strong></label>
      </div>

      <?php if(empty($wp_notes_tweet_history)) { ?>
        <p><?php _e('WP Notes Widget has not tweeted this note yet.','wp-notes-widget'); ?></p>

      <?php } else { ?>
        <p><?php _e('WP Notes Widget has tweeted this note on:', 'wp-notes-widget'); ?></p>  
        <ul class="tweet-history-list faded">
          <?php
            foreach ($wp_notes_tweet_history as &$wp_notes_tweet_history_item) {
              echo '<li>' . $wp_notes_tweet_history_item . '</li>'; 
            }
          ?>
        </ul>        

      <?php } ?>
    </div>

    <h4><?php _e('Tweet Content', 'wp-notes-widget'); ?></h4>
    <div class="content-segment">
      <button id="WP_Notes_twitter_copy_text" class="button button-secondary wp-notes-margin-bottom"><?php _e('Copy Content From Notes Text','wp-notes-widget'); ?></button>
      <p class="wp-notes-no-margin-bottom" ><?php _e('Characters Remaining:', 'wp-notes-widget'); ?> <span id="WP_Notes_twitter_chars_remaining"></span><span id="WP_Notes_twitter_over_limit_text" ></span></p>
        
      <textarea id="WP_Notes_tweet_body" name="WP_Notes_tweet_body" class="wp-notes-textarea" ><?php echo $wp_notes_twitter_data['tweet_body']; ?></textarea>
      <p class="faded" >
        <?php _e('If you are using an Action Link or Download Link, you can enter "*url*" (no quotes) in the Tweet Content to include the link.', 'wp-notes-widget'); ?> 
        <?php _e('If an image is attached to the Note, it will automatically be included in your Tweet.', 'wp-notes-widget'); ?> </p>
      </p>
      
    </div>  
  </div>
