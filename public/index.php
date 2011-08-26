<?php

// Define absolute path to include files
define('DIR', dirname(__DIR__).'/');

require(DIR . 'core/Application.php');

$classes = array(
	'Autoloader'		=>	'Core\\Components\\Autoloader',
	'ComponentInjector'	=>	'App\\Components\\ComponentInjector',
	'Controller'		=>	'Core\\Controller',
	'HelperInjector'	=>	'App\\Components\\HelperInjector',
	'Request'			=>	'Core\\Components\\Router\\Request',
	'TemplateFinder'	=>	'Core\\Components\\Templating\\Finder',
	'Templating'		=>	'Core\\Components\\Templating\\Engine'
);

$application = new Core\Application($classes);
$application->init();

?>