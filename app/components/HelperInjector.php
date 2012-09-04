<?php

namespace App\Components;
use Sea\Components\DynamicInjector;

class HelperInjector extends DynamicInjector
{
	protected $injectorClass = 'App\\Components\\ComponentInjector';
	
	protected $classes = array(
		'cache'				=>	'Sea\\Helpers\\Cache',
		'form'				=>	'Sea\\Helpers\\Form\\Form',
		'javascript'		=>	'Sea\\Helpers\\Javascript'
	);

	protected $dependencies = array(	
		'cache'			=>	array('templating'),
		'form'			=>	array('security', 'request'),
	);
	
	protected $shared = array('cache', 'javascript');
	
}
