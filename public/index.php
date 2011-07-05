<?php

// Define absolute path to include files
define('DIR', dirname(__DIR__).'/');

// FrontController class
require(DIR . 'core/FrontController.php');

use Core\FrontController;

// Start magic!
FrontController::init(array(
	'Autoloader'		=>	'Core\\Components\\Autoloader',
	'Request'			=>	'Core\\Components\\Request',
	'Router'			=>	'Core\\Components\\Router',
	'ComponentInjector'	=>	'Core\\Components\\ComponentInjector',
	'HelperInjector'	=>	'Core\\Components\\HelperInjector',
	'View'				=>	'Core\\View'
));

?>