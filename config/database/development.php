<?php

# Database configuration for development environment
$db = array(
	
	// Connections to database
	'connections'	=>	array(
		
		// Default connection
		'dev1'	=>	array(
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
	'default'	=>	'dev1' # dev1 as default connection in development
	
);
