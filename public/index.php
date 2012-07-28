<?php

namespace Sea;

// Define absolute path to include files
define('Sea\DIR', dirname(__DIR__).'/');

require(\Sea\DIR . 'core/Application.php');
require(\Sea\DIR . 'core/components/Autoloader.php');

$autoloader = new Core\Components\Autoloader();

$application = new Core\Application();
$application->init($autoloader);
