<<<<<<< HEAD
<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '127.0.0.1';
$CFG->dbname    = 'acoserver_moodle';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'aco1234';
$CFG->prefix    = 'qc_';
=======
<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '127.0.0.1';
$CFG->dbname    = 'acoserver_moodle';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'aco1234';
$CFG->prefix    = 'qc_';
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
<<<<<<< HEAD
);

$CFG->wwwroot   = 'http://localhost/Producktiviti/moodle';
$CFG->dataroot  = 'C:\\xampp\\moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
=======
);

$CFG->wwwroot   = 'http://localhost/Producktiviti/moodle';
$CFG->dataroot  = 'C:\\xampp\\moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
