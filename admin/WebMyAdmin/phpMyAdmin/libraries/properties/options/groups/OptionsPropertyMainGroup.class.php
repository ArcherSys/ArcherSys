<<<<<<< HEAD
<<<<<<< HEAD
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Holds the OptionsPropertyMainGroup class
 *
 * @package PhpMyAdmin
 */
if (! defined('PHPMYADMIN')) {
    exit;
}

/* This class extends the OptionsPropertyGroup class */
require_once 'libraries/properties/options/OptionsPropertyGroup.class.php';

/**
 * Group property item class of type main
 *
 * @package PhpMyAdmin
 */
class OptionsPropertyMainGroup extends OptionsPropertyGroup
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
        return "main";
    }
}
=======
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Holds the OptionsPropertyMainGroup class
 *
 * @package PhpMyAdmin
 */
if (! defined('PHPMYADMIN')) {
    exit;
}

/* This class extends the OptionsPropertyGroup class */
require_once 'libraries/properties/options/OptionsPropertyGroup.class.php';

/**
 * Group property item class of type main
 *
 * @package PhpMyAdmin
 */
class OptionsPropertyMainGroup extends OptionsPropertyGroup
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
        return "main";
    }
}
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Holds the OptionsPropertyMainGroup class
 *
 * @package PhpMyAdmin
 */
if (! defined('PHPMYADMIN')) {
    exit;
}

/* This class extends the OptionsPropertyGroup class */
require_once 'libraries/properties/options/OptionsPropertyGroup.class.php';

/**
 * Group property item class of type main
 *
 * @package PhpMyAdmin
 */
class OptionsPropertyMainGroup extends OptionsPropertyGroup
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
        return "main";
    }
}
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
?>