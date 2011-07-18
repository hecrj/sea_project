<?php

// Define absolute path to include files
define('DIR', dirname(__DIR__).'/');

require(DIR . 'core/Application.php');

use Core\Application;

$classes = array(
	'Autoloader'		=>	'Core\\Components\\Autoloader',
	'Request'			=>	'Core\\Components\\Request',
	'Router'			=>	'Core\\Components\\Router\\Router',
	'Route'				=>	'Core\\Components\\Router\\Route',
	'RouteMatcher'		=>	'Core\\Components\\Router\\RouteMatcher',
	'RouteExtractor'	=>	'Core\\Components\\Router\\RouteExtractor',
	'ComponentInjector'	=>	'Core\\Components\\ComponentInjector',
	'HelperInjector'	=>	'Core\\Components\\HelperInjector',
	'View'				=>	'Core\\View'
);

$application = new Application($classes);
$application->init();

?>