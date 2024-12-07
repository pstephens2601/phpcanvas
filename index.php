<?php
	// starts a session
	session_start();
	ob_start();
	
	//includes the loader file that includes the load_files() function
	require_once('libs/loader.php');

	// Loads the needed files
	load_files();

	// Environment setup
	setup_environment();

	// run unit tests if in the development environment and testing is active
	if (ENVIRONMENT == 'development' && ENABLE_CRITIQUES === true)
	{
		run_critiques();
	}

	// Create Front End Controller object
	$front_end_controller = new canvas\frontEndController;

	try
	{
		//grabs the controller + action from $_GET, creates the correct controller object, and calls the action method.
		$front_end_controller->follow_path();
	}
	catch (canvas\canvasException $e) 
	{
		if (LOG_EXCEPTIONS)
		{
			if (VERBOSE_LOGGING)
			{
				$e->set_verbose();
			}

			$e->log();
		}
	}
?>