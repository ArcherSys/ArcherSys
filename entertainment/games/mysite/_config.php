<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	"type" => 'MySQLDatabase',
	"server" => 'localhost',
	"username" => 'root',
	"password" => 'aco1234',
	"database" => 'acoserver_acoserver',
	"path" => '',
);

// Set the site locale
i18n::set_locale('en_US');