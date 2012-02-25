<?php

namespace App\Components;
use Core\Components\DynamicInjector;

class ComponentInjector extends DynamicInjector
{
	
	protected $classes = array(
		//'auth'			=>	'Core\\Components\\Auth\\HTTP', // Uncomment this line to activate Auth component
		'cache'			=>	'Core\\Components\\Cache\\Cache',
		'cookie'		=>	'Core\\Components\\Cookie',
		'compiler'		=>	'Core\\Components\\Routing\\Routes\\RouteCompiler',
		'context'		=>	'Core\\Components\\Routing\\Context',
		'finder'		=>	'Core\\Components\\Templating\\Finder',
		'generator'		=>	'Core\\Components\\Routing\\Generators\\URLGenerator',
		'helpers'		=>	'App\\Components\\HelperInjector',
		'pagination'	=>	'Core\\Components\\Pagination\\Pagination',
		'request'		=>	'Core\\Components\\Routing\\Request',
		'resolvers'		=>	'Core\\Components\\Routing\\Resolvers\\ResolverCollection',
		'router'		=>	'Core\\Components\\Routing\\Router',
		'security'		=>	'Core\\Components\\Security',
		'session'		=>	'Core\\Components\\Session',
		'extractor'		=>	'Core\\Components\\Routing\\Resolvers\\ExtractResolver',
		'matcher'		=>	'Core\\Components\\Routing\\Resolvers\\MatchResolver',
		'templating'	=>	'Core\\Components\\Templating\\Engine'
	);

	protected $dependencies = array(
		'auth'			=>	array('session', 'cookie'),
		'helpers'		=>	array('injector'),
		'generator'		=>	array('router', 'compiler', 'context'),
		'security'		=>	array('session', 'request'),
		'session'		=>	array('cookie', 'request'),
		'matcher'		=>	array('compiler'),
		'pagination'	=>	array('context', 'generator'),
		'resolvers'		=>	array('matcher', 'extractor'),
		'router'		=>	array('resolvers'),
		'templating'	=>	array('helpers', 'finder')
	);
	
	protected $shared = array(
		'auth', 'cache', 'cookie', 'compiler', 'context', 'generator', 'helpers', 'pagination',
		'request', 'router', 'session', 'security', 'templating'
	);
}
