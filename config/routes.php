<?php
	/**
	 *	This file contains all of the routing information for your application.
	 *
	 *	The routes file is inportant for setting up URL routing information for your project. You must define
	 *	a root constant which will designate the root folder of your app, and you must set the controller and action
	 *	that will act as your apps home page using root_to() method of the router class.
	 *	
	 *	@author Patrick Stephens <pstephens2601@gmail.com>
	 *	@version 1.0
	 * 	@package Config
	 */

	if (ENVIRONMENT == 'development')
    {
		define("ROOT", "/cnoa/"); //sets the root folder for your site, which is used for links and images.
	}
    elseif (ENVIRONMENT == 'production')
    {
    	define("ROOT", "/"); //sets the root folder for your site, which is used for links and images.
    }
    else
    {
    	throw new canvasException("Invalid environment set.", 1);
    }

	$set = new canvas\router;

	/*------------------------------------------------------------------
		Defines the root (home page) of your application.  To change the
		root define the controller and action seperated by a "#".
	-------------------------------------------------------------------*/
	$set->root_to('public_pages#home');
?> 