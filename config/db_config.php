<?php
	
	/*------------------------------------------------------------------------------
		This file defines the database connection information for the application.
	 	Enter the connection information for your databases as the second argument
	 	in each call to define().
	 
	 	Placing the information for each database into this file eliminates the need
	 	to change the login information when moving the app to the server.
	 ------------------------------------------------------------------------------*/

	//the type of database your application will be using
	define('DATABASE_TYPE', 'mysql');

	//the login information for your development database goes in this block
	if (ENVIRONMENT == 'development')
	{
		define("HOST", 'localhost');
		define("USER", 'cnoa_test');
		define("PASSWORD", '$cnoa$');
		define("DATABASE", 'cnoa');
	}

	//the login information for your production database goes in this block
	elseif (ENVIRONMENT == 'production')
	{
		define("HOST", 'calnarcorg.fatcowmysql.com');
		define("USER", 'cnoadb');
		define("PASSWORD", '$$cnoa$$');
		define("DATABASE", 'cnoa');
	}
?>