  <li >
    <h5><?php echo $wp_note_data['title']; ?></h5>
    
    <?php if ((bool)$show_date) { ?>
      <p class="wp-notes-widget-date" ><?php echo $wp_note_data['date']; ?></p>
    <?php } ?>
    <?php if ((bool)$wp_note_data['data']['image_meta']['src']) { ?>
      <img class="wp-notes-widget-image" src="<?php echo $wp_note_data['data']['image_meta']['src'] ?>" alt="<?php echo $wp_note_data['data']['image_meta']['alt'] ?>" style="max-width:<?php echo $wp_note_data['data']['image_meta']['width']; ?>px" />
    <?php } ?> 
    
    <?php echo  wpautop($wp_note_data['data']['text'] );  ?>
      <?php if ( ($wp_note_data['data']['action_link_type'] == 'plain') && !empty($wp_note_data['data']['action_link']) && !empty($wp_note_data['data']['action_text']) ) {  ?>
      <p><a <?php if ((bool)$wp_note_data['data']['plain_link_new_tab'] ) { echo 'target="_blank"'; } ?> class="wp-notes-action-link" href="<?php  echo $wp_note_data['data']['action_link']; ?>"><?php echo $wp_note_data['data']['action_text']; ?></a></p>   
    <?php } elseif ( ($wp_note_data['data']['action_link_type'] == 'download') && !empty($wp_note_data['data']['download_link']) && !empty($wp_note_data['data']['action_text']) ) { ?>
      <p><a class="wp-notes-action-link" href="<?php  echo $wp_note_data['data']['download_link']; ?>"><?php echo $wp_note_data['data']['action_text']; ?></a></p>   
    <?php } ?>

    <?php if((bool)$enable_social_share) { ?>
      <a href="https://twitter.com/share?url=<?php echo get_site_url() ?>&text=<?php echo urlencode($wp_note_data['data']['text']); ?>"
        class="wp-notes-widget-tweet" target="_blank" ><?php _e('Tweet This!', 'wp-notes-widget'); ?></a>
    <?php } ?>

  </li>