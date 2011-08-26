<?php

namespace App\Components;
use Core\Components\DynamicInjector;

class ComponentInjector extends DynamicInjector
{
	
	protected $classes = array(
		'auth'			=>	'Core\\Components\\Auth\\HTTPS',
		'cookie'		=>	'Core\\Components\\Cookie',
		'request'		=>	'Core\\Components\\Request',
		'security'		=>	'Core\\Components\\Security',
		'session'		=>	'Core\\Components\\Session',
		'pagination'	=>	'Core\\Components\\Pagination\\Pagination',
		'pager'			=>	'Core\\Components\\Pagination\\PageResolver',
		'router'		=>	'Core\\Components\\Router\\Router',
		'extractor'		=>	'Core\\Components\\Router\\ExtractResolver',
		'matcher'		=>	'Core\\Components\\Router\\MatchResolver'
	);

	protected $dependencies = array(
		'auth'			=>	array('session', 'cookie'),
		'security'		=>	array('session', 'request'),
		'session'		=>	array('cookie', 'request'),
		'pagination'	=>	array('request'),
		'router'		=>	array('matcher', 'pager', 'extractor')
	);
	
	protected $shared = array('auth', 'cookie', 'request', 'session', 'security');
}

?>
