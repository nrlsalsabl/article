<?php 
// Untuk mengecheck error 500 internal server error
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once 'vendor/autoload.php';
require 'MasterController.php';
require __DIR__ . '/vendor/autoload.php';
// require __DIR__ . '/vendor/jacwright/restserver/source/Jacwright/RestServer';

$server = new \Jacwright\RestServer\RestServer('debug');
$server->addClass('MasterController');
$server->handle();
?>