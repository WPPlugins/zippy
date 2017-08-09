<?php
/*
 Plugin Name: Zippy
 Description: Incredibly easy solution to archive pages and posts as zip file and unpack them back even on the other website!
 Version: 1.1.3
 Author: Loyalty Manufaktur
 Author URI: http://loyalty.de
 Text Domain: zippy
*/

if(!defined('ABSPATH')) {
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit;
}

define('ZIPPY_VERSION', '1.1.3');
define('ZIPPY_PLUGIN_NAME', basename(dirname(__FILE__)));
define('ZIPPY_PLUGIN_URL', plugin_dir_url(__FILE__));
define('ZIPPY_PLUGIN_DIR', realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
define('ZIPPY_PLUGIN', ZIPPY_PLUGIN_NAME . DIRECTORY_SEPARATOR . ZIPPY_PLUGIN_NAME . '.php');

require_once 'Zippy.class.php';

new \LoMa\Zippy();