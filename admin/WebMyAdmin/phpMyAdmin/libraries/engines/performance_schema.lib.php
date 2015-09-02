<<<<<<< HEAD
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * The performance schema storage engine
 *
 * @package PhpMyAdmin-Engines
 */
if (! defined('PHPMYADMIN')) {
    exit;
}

/**
 * The performance schema storage engine
 *
 * @package PhpMyAdmin-Engines
 */
class PMA_StorageEngine_PerformanceSchema extends PMA_StorageEngine
{
    /**
     * Returns string with filename for the MySQL helppage
     * about this storage engine
     *
     * @return string  mysql helppage filename
     */
    public function getMysqlHelpPage()
    {
        return 'performance-schema';
    }
}

?>
=======
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * The performance schema storage engine
 *
 * @package PhpMyAdmin-Engines
 */
if (! defined('PHPMYADMIN')) {
    exit;
}

/**
 * The performance schema storage engine
 *
 * @package PhpMyAdmin-Engines
 */
class PMA_StorageEngine_PerformanceSchema extends PMA_StorageEngine
{
    /**
     * Returns string with filename for the MySQL helppage
     * about this storage engine
     *
     * @return string  mysql helppage filename
     */
    public function getMysqlHelpPage()
    {
        return 'performance-schema';
    }
}

?>
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
