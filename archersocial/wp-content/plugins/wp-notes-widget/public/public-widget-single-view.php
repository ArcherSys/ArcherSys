  <?php require 'partials/public-widget-header-partial.php'; ?>

    <ul class="wp-notes-widget-list  <?php if (!(bool)$title) { echo 'no-title'; } ?>" >
            
      <?php require 'partials/public-widget-note-list-item-partial.php'; ?>

        <?php if (!count($wp_notes_data)) { ?>
        <?php require 'partials/public-widget-empty-list-item-partial.php'; ?>
      <?php } ?>

    </ul>

  <?php require 'partials/public-widget-footer-partial.php'; ?>