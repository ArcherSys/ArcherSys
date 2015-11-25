<<<<<<< HEAD
<<<<<<< HEAD
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Application OctetStream Download Transformations plugin for phpMyAdmin
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage Download
 */
if (! defined('PHPMYADMIN')) {
    exit;
}
/* Get the download transformations interface */
require_once 'abstract/DownloadTransformationsPlugin.class.php';

/**
 * Handles the download transformation for application octetstream
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage Download
 */
class Application_Octetstream_Download extends DownloadTransformationsPlugin
{
    /**
     * Gets the plugin`s MIME type
     *
     * @return string
     */
    public static function getMIMEType()
    {
        return "Application";
    }

    /**
     * Gets the plugin`s MIME subtype
     *
     * @return string
     */
    public static function getMIMESubtype()
    {
        return "OctetStream";
    }
}
=======
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Application OctetStream Download Transformations plugin for phpMyAdmin
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage Download
 */
if (! defined('PHPMYADMIN')) {
    exit;
}
/* Get the download transformations interface */
require_once 'abstract/DownloadTransformationsPlugin.class.php';

/**
 * Handles the download transformation for application octetstream
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage Download
 */
class Application_Octetstream_Download extends DownloadTransformationsPlugin
{
    /**
     * Gets the plugin`s MIME type
     *
     * @return string
     */
    public static function getMIMEType()
    {
        return "Application";
    }

    /**
     * Gets the plugin`s MIME subtype
     *
     * @return string
     */
    public static function getMIMESubtype()
    {
        return "OctetStream";
    }
}
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Application OctetStream Download Transformations plugin for phpMyAdmin
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage Download
 */
if (! defined('PHPMYADMIN')) {
    exit;
}
/* Get the download transformations interface */
require_once 'abstract/DownloadTransformationsPlugin.class.php';

/**
 * Handles the download transformation for application octetstream
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage Download
 */
class Application_Octetstream_Download extends DownloadTransformationsPlugin
{
    /**
     * Gets the plugin`s MIME type
     *
     * @return string
     */
    public static function getMIMEType()
    {
        return "Application";
    }

    /**
     * Gets the plugin`s MIME subtype
     *
     * @return string
     */
    public static function getMIMESubtype()
    {
        return "OctetStream";
    }
}
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
?>