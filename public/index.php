<?php

namespace Sea;
use Sea\Application;
use Sea\Components\Autoloader;
use Sea\Components\Routing\Request;

define('Sea\DIR', dirname(__DIR__) . '/');

require(DIR . 'config/boot.php');
require(DIR . 'sea/components/Autoloader.php');

$loader = new Autoloader;
require(DIR . 'config/autoload.php');
$loader->register();

$request = Request::createFromGlobals();

$application = new Application;
$application->respond($request, 'config/routes.php');
