<?php

/**
 *  You can include here any component or script you will need in every request
 */

# Load environment
require(__DIR__ .'/environment.php');

# Load env properties
require(__DIR__ .'/'. App\ENV .'/properties.php');

# Load application config
require(__DIR__ .'/application.php');
