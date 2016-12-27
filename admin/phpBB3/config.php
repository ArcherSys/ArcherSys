<?php

  require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
  use CarnosOS\Config\ConfigData;
  $config = ConfigData::GetConfig();

// phpBB 3.1.x auto-generated configuration file
// Do not change anything in this file!
$dbms = 'phpbb\\db\\driver\\mysqli';
$dbhost = $config["dbhost"];
$dbport = '3306';
$dbname = 'acoserver_acoserver';
$dbuser = 'root';
$dbpasswd = 'aco1234';
$table_prefix = 'abb_';
$phpbb_adm_relative_path = 'adm/';
$acm_type = 'phpbb\\cache\\driver\\file';

@define('PHPBB_INSTALLED', true);
// @define('PHPBB_DISPLAY_LOAD_TIME', true);
// @define('DEBUG', true);
// @define('DEBUG_CONTAINER', true);
