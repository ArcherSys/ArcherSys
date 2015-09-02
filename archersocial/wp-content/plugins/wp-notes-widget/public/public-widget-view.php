  <?php require_once 'partials/public-widget-header-partial.php'; ?>

    <ul class="wp-notes-widget-list  <?php if (!(bool)$title) { echo 'no-title'; } ?>" >

      <?php
        
          /**
           * This iterates through all of the notes and outputs the appropriate HTML markup.
           */
          foreach($wp_notes_data as $wp_note_data ) { ?>
            
          <?php require 'partials/public-widget-note-list-item-partial.php'; ?>
            
          <?php } ?>

          <?php if (!count($wp_notes_data)) { ?>
            <?php require_once 'partials/public-widget-empty-list-item-partial.php'; ?>
          <?php } ?>

    </ul>

  <?php require_once 'partials/public-widget-footer-partial.php'; ?>
