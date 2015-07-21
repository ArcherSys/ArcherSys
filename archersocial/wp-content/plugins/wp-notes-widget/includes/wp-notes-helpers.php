<?php

/**
 * Adds 'http://' to the start of a string if 'http://' or 'https://' is not present.
 *
 * @since    0.1.0
 * @param    string    $url    The string which may or may not have 'http://' or 'https://' at the start.
 */
function wpnw_addhttp($url) {

    if ( $url && ($url != '') && !preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }
    return $url;
}


