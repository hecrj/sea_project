<?php

namespace App\Components;
use Core\Components\DynamicInjector;

class ComponentInjector extends DynamicInjector
{
	
	protected $classes = array(
		//'auth'			=>	'Core\\Components\\Auth\\HTTP',
		'cache'			=>	'Core\\Components\\Cache\\Cache',
		'cookie'		=>	'Core\\Components\\Cookie',
		'helpers'		=>	'App\\Components\\HelperInjector',
		'security'		=>	'Core\\Components\\Security',
		'session'		=>	'Core\\Components\\Session',
		'mail'			=>	'App\\Components\\Mail',
		'pagination'	=>	'Core\\Components\\Pagination\\Pagination',
		'pager'			=>	'Core\\Components\\Pagination\\PageResolver',
		'router'		=>	'Core\\Components\\Router\\Router',
		'request'		=>	'Core\\Components\\Router\\Request',
		'extractor'		=>	'Core\\Components\\Router\\ExtractResolver',
		'matcher'		=>	'Core\\Components\\Router\\MatchResolver',
		'templating'	=>	'Core\\Components\\Templating\\Engine',
		'finder'		=>	'Core\\Components\\Templating\\Finder'
	);

	protected $dependencies = array(
		//'auth'			=>	array('session', 'cookie'),
		'helpers'		=>	array('injector'),
		'security'		=>	array('session', 'request'),
		'session'		=>	array('cookie', 'request'),
		'mail'			=>	array('templating'),
		'pagination'	=>	array('request'),
		'router'		=>	array('pager', 'matcher', 'extractor'),
		'templating'	=>	array('helpers', 'finder')
	);
	
	protected $shared = array('auth', 'cache', 'cookie', 'helpers', 'request', 'session', 'security', 'templating');
}
