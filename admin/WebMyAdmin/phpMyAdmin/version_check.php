<<<<<<< HEAD
<<<<<<< HEAD
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * A caching proxy for retrieving version information from phpmyadmin.net
 *
 * @package PhpMyAdmin
 */

// Sets up the session
define('PMA_MINIMUM_COMMON', true);
require_once 'libraries/common.inc.php';
require_once 'libraries/Util.class.php';

// Always send the correct headers
header('Content-type: application/json; charset=UTF-8');

$version = PMA_Util::getLatestVersion();

echo json_encode(
    array(
        'version' => $version->version,
        'date' => $version->date,
    )
);

?>
=======
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * A caching proxy for retrieving version information from phpmyadmin.net
 *
 * @package PhpMyAdmin
 */

// Sets up the session
define('PMA_MINIMUM_COMMON', true);
require_once 'libraries/common.inc.php';
require_once 'libraries/Util.class.php';

// Always send the correct headers
header('Content-type: application/json; charset=UTF-8');

$version = PMA_Util::getLatestVersion();

echo json_encode(
    array(
        'version' => $version->version,
        'date' => $version->date,
    )
);

?>
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * A caching proxy for retrieving version information from phpmyadmin.net
 *
 * @package PhpMyAdmin
 */

// Sets up the session
define('PMA_MINIMUM_COMMON', true);
require_once 'libraries/common.inc.php';
require_once 'libraries/Util.class.php';

// Always send the correct headers
header('Content-type: application/json; charset=UTF-8');

$version = PMA_Util::getLatestVersion();

echo json_encode(
    array(
        'version' => $version->version,
        'date' => $version->date,
    )
);

?>
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
