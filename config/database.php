<?php

# Database configuration
$db = array(
	
	// Connections to database
	'connections'	=>	array(
		
		// Development connection
		'development'	=>	array(
			// Database type
			'type'		=>	'mysql',
			// Server of your database
			'server'	=>	'localhost',
			// Name of your database
			'name'		=>	'sea',
			// User of your database
			'user'		=>	'root',
			// User password
			'password'	=>	'',
			// Connection charset
			'charset'	=>	'utf8'
		)
		
	),
	
	// Default connection
	'default'	=>	'development'
	
);

# ----------------------------#
# ActiveRecord Initialization #
# ----------------------------#
\ActiveRecord\Config::initialize(
function($cfg) use ($db)
{
	// Set path to models directory
	$cfg->set_model_directory(DIR . 'app/models/');

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
