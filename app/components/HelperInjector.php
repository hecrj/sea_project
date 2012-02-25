<?php

namespace App\Components;
use Core\Components\DynamicInjector;

class HelperInjector extends DynamicInjector
{
	protected $injectorClass = 'App\\Components\\ComponentInjector';
	
	protected $classes = array(
		'cache'				=>	'Core\\Helpers\\Cache',
		'form'				=>	'Core\\Helpers\\Form\\Form',
		'javascript'		=>	'Core\\Helpers\\Javascript'
	);

	protected $dependencies = array(	
		'cache'			=>	array('templating'),
		'form'			=>	array('security', 'request'),
	);
	
	protected $shared = array('cache', 'javascript');
	
}
