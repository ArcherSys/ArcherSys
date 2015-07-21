<?php //Add different flags ($use_custom_style, empty($title)) to control what CSS is activated ?>
<div class="wp-notes-widget-container <?php if (!(bool)$use_custom_style)  echo 'use-wp-notes-style'  ?>  <?php if ( !((bool)$title) )  echo 'wp-notes-no-title'  ?>">
  <div class="wp-notes-widget background-colour-<?php echo $background_colour ?> text-colour-<?php echo $text_colour ?> font-size-<?php echo $font_size ?> ">
    <div class="header-area">
      <div class="pushpin thumb-tack-colour-<?php echo $thumb_tack_colour ?> "></div>
      <?php if ((bool)$title) { ?>
        <h3 ><?php echo $title; ?></h3>
      <?php } else { ?>
        <h3 class="wp-notes-widget-hidden" ><?php _e('Notes','wp-notes-widget'); ?></h3>
      <?php } ?>
    </div>