<?php

// Define absolute path to include files
define('DIR', dirname(__DIR__).'/');

require(DIR . 'core/Application.php');

$classes = array(
	'Autoloader'		=>	'Core\\Components\\Autoloader',
	'Controller'		=>	'Core\\Controller',
	'Request'			=>	'Core\\Components\\Request',
	'Router'			=>	'Core\\Components\\Router\\Router',
	'Route'				=>	'Core\\Components\\Router\\Route',
	'RouteMatcher'		=>	'Core\\Components\\Router\\RouteMatcher',
	'RouteExtractor'	=>	'Core\\Components\\Router\\RouteExtractor',
	'ComponentInjector'	=>	'Core\\Components\\ComponentInjector',
	'HelperInjector'	=>	'Core\\Components\\HelperInjector',
	'View'				=>	'Core\\View'
);

$application = new Core\Application($classes);
$application->init();

?>