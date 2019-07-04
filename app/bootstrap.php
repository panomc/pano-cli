<?php
/**
 * Pano CLI bootstrap file.
 *
 */

defined('PANO_ROOT') or define('PANO_ROOT', getcwd());
defined('PANO_APP_ROOT') or define('PANO_APP_ROOT', PANO_ROOT . '/pano/');

require_once 'vendor/autoload.php';
require_once 'console.php';

$app = new \PanoCLI\Console;

$app->runWithTry($argv);
