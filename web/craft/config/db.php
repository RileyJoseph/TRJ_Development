<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(

	'tablePrefix' => 'craft',
    '*' => array(
        'server' => 'localhost',
        'tablePrefix' => 'craft',
        'user' => 'root',
        'password' => 'root',
        'database' => 'trj_craft'
    ),
    '.com' => array(
        'server' => '127.0.0.1',
        'tablePrefix' => 'craft',
        'user' => 'oklaho99_craft',
        'password' => 'uR0PNAq*+rqS',
        'database' => 'oklaho99_craft'
    ),
	'.dev' => array(
		'server' => 'localhost',
		'tablePrefix' => 'craft',
		'user' => 'root',
		'password' => 'root',
		'database' => 'trj_craft'
	),

);


	// '*' => array(
	// 	'server' => '127.0.0.1',
	// 	'tablePrefix' => 'craft',
	// 	'user' => 'trj_joseph',
	// 	'password' => 'qwerty1234',
	// 	'database' => 'trj_craft'
	// 	),

	// '.dev' => array(
	// 	'user' => 'root',
	// 	'password' => '',
	// 	),
