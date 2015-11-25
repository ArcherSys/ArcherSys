<?php
class DATABASE_CONFIG {

	public $cakemod_admin = array(
		'datasource' => 'Database/Mysql',
		'persistent' => true,
		'host' => 'localhost',
		'port' => 3306,
		'login' => 'root',
		'password' => 'aco1234',
		'database' => 'acoserver_cakemod',
	);
	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
                 'port' => 3306,
		'login' => 'root',
		'password' => 'aco1234',
		'database' => 'acoserver_cakemod',
                 'encoding' => 'utf8'
	);
}
