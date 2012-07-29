<?php

namespace Sea;
use Sea\Core\Application;
use Sea\Core\Components\Autoloader;
use Sea\Core\Components\Routing\Request;

define('Sea\DIR', dirname(__DIR__) . '/');

require(DIR . 'config/boot.php');
require(DIR . 'core/components/Autoloader.php');

$loader = new Autoloader;
require(DIR . 'config/autoload.php');
$loader->register();

$request = Request::createFromGlobals();
$routes  = require(DIR . 'config/routes.php');

$application = new Application;
$application->respond($request, $routes);
