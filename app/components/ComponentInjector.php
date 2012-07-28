<?php

namespace Sea\App\Components;
use Sea\Core\Components\DynamicInjector;

class ComponentInjector extends DynamicInjector
{
	
	protected $classes = array(
		//'auth'			=>	'Sea\\Core\\Components\\Auth\\HTTP', // Uncomment this line to activate Auth component
		'cache'			=>	'Sea\\Core\\Components\\Cache\\Cache',
		'cookie'		=>	'Sea\\Core\\Components\\Cookie',
		'compiler'		=>	'Sea\\Core\\Components\\Routing\\Routes\\RouteCompiler',
		'context'		=>	'Sea\\Core\\Components\\Routing\\Context',
		'finder'		=>	'Sea\\Core\\Components\\Templating\\Finder',
		'generator'		=>	'Sea\\Core\\Components\\Routing\\Generators\\URLGenerator',
		'helpers'		=>	'Sea\\App\\Components\\HelperInjector',
		'pagination'	=>	'Sea\\Core\\Components\\Pagination\\Pagination',
		'request'		=>	'Sea\\Core\\Components\\Routing\\Request',
		'resolvers'		=>	'Sea\\Core\\Components\\Routing\\Resolvers\\ResolverCollection',
		'router'		=>	'Sea\\Core\\Components\\Routing\\Router',
		'security'		=>	'Sea\\Core\\Components\\Security',
		'session'		=>	'Sea\\Core\\Components\\Session',
		'extractor'		=>	'Sea\\Core\\Components\\Routing\\Resolvers\\ExtractResolver',
		'matcher'		=>	'Sea\\Core\\Components\\Routing\\Resolvers\\MatchResolver',
		'templating'	=>	'Sea\\Core\\Components\\Templating\\Engine'
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
