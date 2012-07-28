<?php

namespace Sea\App\Components;
use Sea\Core\Components\DynamicInjector;

class HelperInjector extends DynamicInjector
{
	protected $injectorClass = 'Sea\\App\\Components\\ComponentInjector';
	
	protected $classes = array(
		'cache'				=>	'Sea\\Core\\Helpers\\Cache',
		'form'				=>	'Sea\\Core\\Helpers\\Form\\Form',
		'javascript'		=>	'Sea\\Core\\Helpers\\Javascript'
	);

	protected $dependencies = array(	
		'cache'			=>	array('templating'),
		'form'			=>	array('security', 'request'),
	);
	
	protected $shared = array('cache', 'javascript');
	
}
