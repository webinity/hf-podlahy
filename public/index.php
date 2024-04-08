<?php
/**
 * Front controller
 */

/**
 * Register composer autoload
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * Start the session
 */
session_start();

/**
 * Bootstrap the application
 */
$app = require __DIR__ . '/../bootstrap/bootstrap.php';
$app->run();
