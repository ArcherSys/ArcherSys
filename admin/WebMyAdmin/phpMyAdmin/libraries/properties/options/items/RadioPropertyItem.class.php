<<<<<<< HEAD
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Holds the RadioPropertyItem class
 *
 * @package PhpMyAdmin
 */
if (! defined('PHPMYADMIN')) {
    exit;
}

/* This class extends the OptionsPropertyOneItem class */
require_once 'libraries/properties/options/OptionsPropertyOneItem.class.php';

/**
 * Single property item class of type radio
 *
 * @package PhpMyAdmin
 */
class RadioPropertyItem extends OptionsPropertyOneItem
{
    /**
     * Returns the property item type of either an instance of
     *  - OptionsPropertyOneItem ( f.e. "bool", "text", "radio", etc ) or
     *  - OptionsPropertyGroup   ( "root", "main" or "subgroup" )
     *  - PluginPropertyItem     ( "export", "import", "transformations" )
     *
     * @return string
     */
    public function getItemType()
    {
        return "radio";
    }
}
=======
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Holds the RadioPropertyItem class
 *
 * @package PhpMyAdmin
 */
if (! defined('PHPMYADMIN')) {
    exit;
}

/* This class extends the OptionsPropertyOneItem class */
require_once 'libraries/properties/options/OptionsPropertyOneItem.class.php';

/**
 * Single property item class of type radio
 *
 * @package PhpMyAdmin
 */
class RadioPropertyItem extends OptionsPropertyOneItem
{
    /**
     * Returns the property item type of either an instance of
     *  - OptionsPropertyOneItem ( f.e. "bool", "text", "radio", etc ) or
     *  - OptionsPropertyGroup   ( "root", "main" or "subgroup" )
     *  - PluginPropertyItem     ( "export", "import", "transformations" )
     *
     * @return string
     */
    public function getItemType()
    {
        return "radio";
    }
}
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
?>