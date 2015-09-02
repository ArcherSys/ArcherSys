<<<<<<< HEAD
<<<<<<< HEAD
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * The NDBCLUSTER storage engine
 *
 * @package PhpMyAdmin-Engines
 */
if (! defined('PHPMYADMIN')) {
    exit;
}

/**
 * The NDBCLUSTER storage engine
 *
 * @package PhpMyAdmin-Engines
 */
class PMA_StorageEngine_Ndbcluster extends PMA_StorageEngine
{
    /**
     * Returns array with variable names realted to NDBCLUSTER storage engine
     *
     * @return array   variable names
     */
    public function getVariables()
    {
        return array(
            'ndb_connectstring' => array(
            ),
         );
    }

    /**
     * Returns the pattern to be used in the query for SQL variables
     * related to NDBCLUSTER storage engine
     *
     * @return string  SQL query LIKE pattern
     */
    public function getVariablesLikePattern()
    {
        return 'ndb\\_%';
    }

    /**
     * Returns string with filename for the MySQL help page
     * about this storage engine
     *
     * @return string  mysql helppage filename
     */
    public function getMysqlHelpPage()
    {
        return 'ndbcluster';
    }
}

?>
=======
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * The NDBCLUSTER storage engine
 *
 * @package PhpMyAdmin-Engines
 */
if (! defined('PHPMYADMIN')) {
    exit;
}

/**
 * The NDBCLUSTER storage engine
 *
 * @package PhpMyAdmin-Engines
 */
class PMA_StorageEngine_Ndbcluster extends PMA_StorageEngine
{
    /**
     * Returns array with variable names realted to NDBCLUSTER storage engine
     *
     * @return array   variable names
     */
    public function getVariables()
    {
        return array(
            'ndb_connectstring' => array(
            ),
         );
    }

    /**
     * Returns the pattern to be used in the query for SQL variables
     * related to NDBCLUSTER storage engine
     *
     * @return string  SQL query LIKE pattern
     */
    public function getVariablesLikePattern()
    {
        return 'ndb\\_%';
    }

    /**
     * Returns string with filename for the MySQL help page
     * about this storage engine
     *
     * @return string  mysql helppage filename
     */
    public function getMysqlHelpPage()
    {
        return 'ndbcluster';
    }
}

?>
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * The NDBCLUSTER storage engine
 *
 * @package PhpMyAdmin-Engines
 */
if (! defined('PHPMYADMIN')) {
    exit;
}

/**
 * The NDBCLUSTER storage engine
 *
 * @package PhpMyAdmin-Engines
 */
class PMA_StorageEngine_Ndbcluster extends PMA_StorageEngine
{
    /**
     * Returns array with variable names realted to NDBCLUSTER storage engine
     *
     * @return array   variable names
     */
    public function getVariables()
    {
        return array(
            'ndb_connectstring' => array(
            ),
         );
    }

    /**
     * Returns the pattern to be used in the query for SQL variables
     * related to NDBCLUSTER storage engine
     *
     * @return string  SQL query LIKE pattern
     */
    public function getVariablesLikePattern()
    {
        return 'ndb\\_%';
    }

    /**
     * Returns string with filename for the MySQL help page
     * about this storage engine
     *
     * @return string  mysql helppage filename
     */
    public function getMysqlHelpPage()
    {
        return 'ndbcluster';
    }
}

?>
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
