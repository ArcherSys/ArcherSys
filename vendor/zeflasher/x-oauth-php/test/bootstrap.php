<?php
/**
 * Created by IntelliJ IDEA.
 * User: zeflasher
 * Date: 11/03/13
 * Time: 10:14 AM
 * To change this template use File | Settings | File Templates.
 */

include_once('UniversalClassLoader.php');

$loader = new UniversalClassLoader();
//  register namespace
$loader->registerNamespace("Zeflasher", "../libs/vendors/");
// activate the autoloader
$loader->register();