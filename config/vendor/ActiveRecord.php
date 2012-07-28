<?php

// Load database configuration
require(\Sea\DIR . '/config/database.php');

// Initialize ActiveRecord configuration
\ActiveRecord\Config::initialize(
function($cfg) use ($db)
{
	// Set path to models directory
	$cfg->set_model_directory(\Sea\DIR . 'app/models/');

	// Define connections as protocol url
	foreach($db['connections'] as $connection => $options)
		$connections[$connection] = $options['type'] . '://' . $options['user'] . ':' . $options['password'] . '@' . $options['server'] . '/' . $options['name'] .'?charset='. $options['charset'];

	// Set connections
	$cfg->set_connections($connections);

	// Set default connection
	$cfg->set_default_connection($db['default']);
}
);

?>