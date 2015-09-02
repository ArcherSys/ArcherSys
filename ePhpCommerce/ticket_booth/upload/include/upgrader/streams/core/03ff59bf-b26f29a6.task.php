<?php

/*
 * Loads the initial sequence from the inital data files
 */

class Noop extends MigrationTask {
    var $description = "Noop";

    function run($max_time) {
    }
}

return 'Noop';

?>
