<?php

add_action('load-users.php', 'custom_bulk_admin_footer');
 
function custom_bulk_admin_footer() {

    ?>
    <script type="text/javascript">
      jQuery(document).ready(function() {
        jQuery('<option>').val('export').text('<?php _e('Export')?>').appendTo("select[name='action']");
        jQuery('<option>').val('export').text('<?php _e('Export')?>').appendTo("select[name='action2']");
      });
    </script>
    <?php
}

?>