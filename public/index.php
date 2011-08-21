<?php

// Define absolute path to include files
define('DIR', dirname(__DIR__).'/');

require(DIR . 'core/Application.php');

$classes = array(
	'Autoloader'		=>	'Core\\Components\\Autoloader',
	'ComponentInjector'	=>	'Core\\Components\\ComponentInjector',
	'Controller'		=>	'Core\\Controller',
	'HelperInjector'	=>	'Core\\Components\\HelperInjector',
	'Request'			=>	'Core\\Components\\Request',
	'Router'			=>	'Core\\Components\\Router\\Router',
	'Route'				=>	'Core\\Components\\Router\\Route',
	'RouteMatcher'		=>	'Core\\Components\\Router\\RouteMatcher',
	'RouteExtractor'	=>	'Core\\Components\\Router\\RouteExtractor',
	'TemplateFinder'	=>	'Core\\Components\\Templating\\Finder',
	'Templating'		=>	'Core\\Components\\Templating\\Engine'
);

$application = new Core\Application($classes);
$application->init();

?>