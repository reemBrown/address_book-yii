<?php

// This is the database connection configuration.
return array(
	// 'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/addressBook.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=localhost;dbname=address_book',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => 'anas',
	'charset' => 'utf8',
	
);