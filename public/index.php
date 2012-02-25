<?php

// Define absolute path to include files
define('DIR', dirname(__DIR__).'/');

require(DIR . 'core/Application.php');
require(DIR . 'core/components/Autoloader.php');

$autoloader = new Core\Components\Autoloader();

$application = new Core\Application();
$application->init($autoloader);
