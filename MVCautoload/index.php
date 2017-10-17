<?php

function myAutoload ($class)
{
	if (file_exists($class.'.php')) 
	{
		require_once $class.'.php';
	}
}

function autoloadForModels ($class)
{
	if (file_exists('model/'.$class.'.php')) 
	{
		require_once 'model/'.$class.'.php';
	}
}

spl_autoload_register('myAutoload');
spl_autoload_register('autoloadForModels');

$bd = new BD();
$bd->MyEcho();

?>