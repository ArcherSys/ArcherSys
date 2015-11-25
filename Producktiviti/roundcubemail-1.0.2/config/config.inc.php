<?php



/*
 +-----------------------------------------------------------------------+
 | Local configuration for the Roundcube Webmail installation.           |
 |                                                                       |
 | This is a sample configuration file only containing the minumum       |
| setup required for a functional installation. Copy more options       |
 | from defaults.inc.php to this file to override the defaults.          |
 |                                                                       |
 | This file is part of the Roundcube Webmail client                     |
 | Copyright (C) 2005-2013, The Roundcube Dev Team                       |
 |                                                                       |
 | Licensed under the GNU General Public License version 3 or            |
 | any later version with exceptions for skins & plugins.                |
 | See the README file for a full license statement.                     |
 +-----------------------------------------------------------------------+
*/

$config = array();

// Database connection string (DSN) for read+write operations
// Format (compatible with PEAR MDB2): db_provider://user:password@host/database
// Currently supported db_providers: mysql, pgsql, sqlite, mssql or sqlsrv
// For examples see http://pear.php.net/manual/en/package.database.mdb2.intro-dsn.php
// NOTE: for SQLite use absolute path: 'sqlite:////full/path/to/sqlite.db?mode=0646'
$config['db_dsnw'] = 'mysql://root:aco1234@localhost/roundcubemail';

// The mail host chosen to perform the log-in.
// Leave blank to show a textbox at login, give a list of hosts
// to display a pulldown menu or set one host as string.
// To use SSL/TLS connection, enter hostname with prefix ssl:// or tls://
// Supported replacement variables:
// %n - hostname ($_SERVER['SERVER_NAME'])
// %t - hostname without the first part
// %d - domain (http hostname $_SERVER['HTTP_HOST'] without the first part)
// %s - domain name after the '@' from e-mail address provided at login screen
// For example %n = mail.domain.tld, %t = domain.tld
$config['default_host'] = 'ssl://imap.gmail.com';
$config['default_port'] = 993;
$config['default_user'] = 'acosf2014.pdflint@gmail.com';
$config['default_pass'] = 'WH102397';
// IMAP AUTH type (DIGEST-MD5, CRAM-MD5, LOGIN, PLAIN or empty to use
// best server supported one)
$config['imap_auth_type'] = null;

// If you know your imap's folder delimiter, you can specify it here.
// Otherwise it will be determined automatically
$config['imap_delimiter'] = null;

// If IMAP server doesn't support NAMESPACE extension, but you're
// using shared folders or personal root folder is non-empty, you'll need to
// set these options. All can be strings or arrays of strings.
// Folders need to be ended with directory separator, e.g. "INBOX."
// (special directory "~" is an exception to this rule)
// These can be used also to overwrite server's namespaces
$config['imap_ns_personal'] = null;
$config['imap_ns_other']    = null;
$config['imap_ns_shared']   = null;

// By default IMAP capabilities are readed after connection to IMAP server
// In some cases, e.g. when using IMAP proxy, there's a need to refresh the list
// after login. Set to True if you've got this case.
$config['imap_force_caps'] = false;

// By default list of subscribed folders is determined using LIST-EXTENDED
// extension if available. Some servers (dovecot 1.x) returns wrong results
// for shared namespaces in this case. http://trac.roundcube.net/ticket/1486225
// Enable this option to force LSUB command usage instead.
$config['imap_force_lsub'] = false;

// Some server configurations (e.g. Courier) doesn't list folders in all namespaces
// Enable this option to force listing of folders in all namespaces
$config['imap_force_ns'] = false;

// IMAP connection timeout, in seconds. Default: 0 (no limit)
$config['imap_timeout'] = 0;

// Optional IMAP authentication identifier to be used as authorization proxy
$config['imap_auth_cid'] = null;

// Optional IMAP authentication password to be used for imap_auth_cid
$config['imap_auth_pw'] = null;

// Type of IMAP indexes cache. Supported values: 'db', 'apc' and 'memcache'.
$config['imap_cache'] = null;

// Enables messages cache. Only 'db' cache is supported.
$config['messages_cache'] = false;
// SMTP server host (for sending mails).
// To use SSL/TLS connection, enter hostname with prefix ssl:// or tls://
// If left blank, the PHP mail() function is used
// Supported replacement variables:
// %h - user's IMAP hostname
// %n - hostname ($_SERVER['SERVER_NAME'])
// %t - hostname without the first part
// %d - domain (http hostname $_SERVER['HTTP_HOST'] without the first part)
// %z - IMAP domain (IMAP hostname without the first part)
// For example %n = mail.domain.tld, %t = domain.tld
$config['smtp_server'] = 'tls://smtp.gmail.com';

// SMTP port (default is 25; use 587 for STARTTLS or 465 for the
// deprecated SSL over SMTP (aka SMTPS))
$config['smtp_port'] = 587;

// SMTP username (if required) if you use %u as the username Roundcube
// will use the current username for login
$config['smtp_user'] = 'acosf2014.pdflint@gmail.com';

// SMTP password (if required) if you use %p as the password Roundcube
// will use the current user's password for login
$config['smtp_pass'] = 'WH102397';

// provide an URL where a user can get support for this Roundcube installation
// PLEASE DO NOT LINK TO THE ROUNDCUBE.NET WEBSITE HERE!
$config['support_url'] = '';
// Name your service. This is displayed on the login screen and in the window title
$config['product_name'] = 'ArcherVMPeridot Mail';

// this key is used to encrypt the users imap password which is stored
// in the session record (and the client cookie if remember password is enabled).
// please provide a string of exactly 24 chars.
// YOUR KEY MUST BE DIFFERENT THAN THE SAMPLE VALUE FOR SECURITY REASONS
$config['des_key'] = 'rcmail-!24ByteDESkey*Str';

// List of active plugins (in plugins/ directory)
$config['plugins'] = array(
    'archive',
    'zipdownload',
);
$config['enable_instaler'] = true;
// skin name: folder from skins/
$config['skin'] = 'larry';
