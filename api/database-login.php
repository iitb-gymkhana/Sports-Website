<?php

defined('YII_DEPLOYED') or define('YII_DEPLOYED', true);

if(YII_DEPLOYED)
{
	// Login credentials for deployed application
	return [
		'username' => 'sports',
		'password' => 'darkness'
		'dbName' => 'sports',
		'dsn' => 'mysql:host=10.105.177.5;dbname=sports'
	];
}
else
{
	// Login credentials for in-development/testing application
	return [
		'username' => 'root',
		'password' => 'root',
		'dbName' => 'local',
	    'dsn' => 'mysql:host=127.0.0.1;dbname=local'
	];
}
