<<<<<<< HEAD
<<<<<<< HEAD
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * phpinfo() wrapper to allow displaying only when configured to do so.
 *
 * @package PhpMyAdmin
 */

/**
 * Gets core libraries and defines some variables
 */
require_once 'libraries/common.inc.php';
PMA_Response::getInstance()->disable();

/**
 * Displays PHP information
 */
if ($GLOBALS['cfg']['ShowPhpInfo']) {
    phpinfo();
}
?>
=======
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * phpinfo() wrapper to allow displaying only when configured to do so.
 *
 * @package PhpMyAdmin
 */

/**
 * Gets core libraries and defines some variables
 */
require_once 'libraries/common.inc.php';
PMA_Response::getInstance()->disable();

/**
 * Displays PHP information
 */
if ($GLOBALS['cfg']['ShowPhpInfo']) {
    phpinfo();
}
?>
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * phpinfo() wrapper to allow displaying only when configured to do so.
 *
 * @package PhpMyAdmin
 */

/**
 * Gets core libraries and defines some variables
 */
require_once 'libraries/common.inc.php';
PMA_Response::getInstance()->disable();

/**
 * Displays PHP information
 */
if ($GLOBALS['cfg']['ShowPhpInfo']) {
    phpinfo();
}
?>
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
