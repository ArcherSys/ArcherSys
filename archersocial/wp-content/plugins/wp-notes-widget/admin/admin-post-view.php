
<div class="wp-notes-post-admin-container">

  <h4><?php _e('Notes Text','wp-notes-widget') ?></h4>
  <div class="content-segment">
    
    <label class="wp-notes-label wp-notes-hidden" for="WP_Notes_text"><?php _e('Notes Text', 'wp-notes-widget') ?></label>
    <textarea  class="wp-notes-textarea"  id="WP_Notes_text" name="WP_Notes_text" placeholder="<?php _e( 'Enter your note here.', 'wp-notes-widget' ) ?>"><?php echo $wp_notes_data['text'] ?></textarea>
    
  </div>
  
  <h4><?php _e('Add an Image', 'wp-notes-widget') ?> <span class="secondary-text" >(<?php _e('optional','wp-notes-widget'); ?>)</span> </h4>
  <div class="content-segment">
    
    <div class="wp-notes-image-management">
      <div>
        <a href="#" id="wp-notes-add-image-button" class="button" ><?php _e('Add Image', 'wp-notes-widget') ?></a>
        <a href="#" id="wp-notes-remove-image-button" class="button <?php if ( !($wp_notes_data['image_id'] ) ) { echo 'disabled'; } ?>" ><?php _e('Remove Image', 'wp-notes-widget') ?></a>
      </div>

      <div class="wp-notes-image-container">
        
        <div class="image <?php if ( !(bool)($wp_notes_data['image_id'] ) ) { echo 'wp-notes-hidden'; } ?>">
          <img id="WP_Notes_image" src="<?php echo $wp_notes_data['image_meta']['src'] ?>" alt="<?php echo $wp_notes_data['image_meta']['alt'] ?>" />
        </div>
        
        <div class="no-image <?php if ( (bool)($wp_notes_data['image_id'] ) ) { echo 'wp-notes-hidden'; } ?>">
          <div class="no-image-box">
            <div class="text"><?php _e('No Image Set', 'wp-notes-widget'); ?></div>
            <div class="no-image-shim"></div>
          </div>
        </div>

      </div>
      
      <input type="hidden" id="WP_Notes_image_id" name="WP_Notes_image_id" value="<?php echo $wp_notes_data['image_id'] ?>" />

    </div>
  </div>

  <h4><?php _e('Include a Link', 'wp-notes-widget'); ?> <span class="secondary-text" >(<?php _e('optional','wp-notes-widget'); ?>)</span></h4>
  <div class="content-segment">
    
    <p>
      <label  class="wp-notes-label"  for="WP_Notes_action_text"><?php _e('Action Text', 'wp-notes-widget') ?></label>
      <input type="text" class="wp-notes-text"   id="WP_Notes_action_text" name="WP_Notes_action_text" placeholder="<?php _e('Action Link Text', 'wp-notes-widget') ?>"  value="<?php echo $wp_notes_data['action_text'] ?>" />  
    </p>

    <div class="wp-notes-action-link-management">
      <p class="wp-notes-label no-margin-below" ><?php _e('Action Link', 'wp-notes-widget') ?></p>

      <div class="wp-notes-action-link-controls">
        <div class="wp-notes-action-link-control <?php WP_Notes_get_selected_output($wp_notes_data['action_link_type'] ,'plain'); ?>">
          <input type="radio" name="WP_Notes_action_link_type" id="WP_Notes_action_link_type_plain" value="plain" <?php WP_Notes_get_selected_output($wp_notes_data['action_link_type'],'plain'); ?> />
          <label class="wp-notes-option-label" for="WP_Notes_action_link_type_plain"><?php _e('Regular Link', 'wp-notes-widget') ?></label>
        </div>
        
        <div class="wp-notes-action-link-control <?php WP_Notes_get_selected_output($wp_notes_data['action_link_type'],'download'); ?>">
          <input type="radio" name="WP_Notes_action_link_type" id="WP_Notes_action_link_type_download" value="download" <?php WP_Notes_get_selected_output($wp_notes_data['action_link_type'],'download'); ?> />
          <label class="wp-notes-option-label" for="WP_Notes_action_link_type_download"><?php _e('Download Link', 'wp-notes-widget') ?></label>
        </div>

      </div>

      <div class="wp-notes-action-link-field-container ">
        <div class="wp-notes-link-component-container wp-notes-plain-link-components <?php WP_Notes_get_hidden_class_output($wp_notes_data['action_link_type'],'plain'); ?>">
          <input type="text" class="wp-notes-text"  id="WP_Notes_action_link" name="WP_Notes_action_link" placeholder="http://example.com" value="<?php echo $wp_notes_data['action_link'] ?>" />  
          <input type="checkbox" id="WP_Notes_plain_link_new_tab" name="WP_Notes_plain_link_new_tab" value="new_tab" <?php if ((bool)$wp_notes_data['plain_link_new_tab']) { echo 'checked'; } ?>/>
          <label class="wp-notes-option-label" for="WP_Notes_plain_link_new_tab"><?php _e('Open this link in a new tab', 'wp-notes-widget') ?></label>
        </div>
        
        <div class="wp-notes-link-component-container  wp-notes-download-components <?php WP_Notes_get_hidden_class_output($wp_notes_data['action_link_type'],'download'); ?>">
          <a href="#" id="wp-notes-add-download" class="button" ><?php _e('Add Download','wp-notes-widget'); ?></a>
          <input type="text" class="wp-notes-text"   id="WP_Notes_download_link" readonly="readonly" value="<?php echo $wp_notes_data['download_link'] ?>" />  
          <input type="hidden" id="WP_Notes_download_id" name="WP_Notes_download_id" value="<?php echo $wp_notes_data['download_id'] ?>" />
        </div>
      
      </div>
    </div>
  </div>
</div>