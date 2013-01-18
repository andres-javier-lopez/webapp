<?php

include_once 'moondragon/moondragon.database.php';

if(file_exists('config/custom.php')) {
	include 'config/custom.php';
}
else {
	$db['engine'] = 'mysql';
	$db['host'] = 'localhost';
	$db['user'] = 'root';
	$db['password'] = '';
	$db['database'] = 'test';
}

Database::connect($db['engine'], $db['host'], $db['user'], $db['password'], $db['database']);
