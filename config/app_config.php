<?php
	/*----------------------------------------------------------
		This file is used to define basic configuration
		information for your application.

		Preloads are set for jQuery and Twitter Bootstrap
	-----------------------------------------------------------*/

	//preload jQuery and Twitter Bootstrap
	js_preload( array("jquery-1.11.1.min.js", "bootstrap.min.js")); //javascript files that must be loaded as requirements for other javascript files
	js_exclude( array("jquery-1.11.1.min.map",
		"email_code_generator.js",
		"fitness_throwdown.js",
		"ati_monday_night_event.js",
		"ati_golf.js",
		"ati_tradeshow.js",
		"smf_golf.js",
		"donationForm.js",
		"eventForm.js",
		"eventPage.js",
		"eventRegistrationForm.js",
		"voting_form.js"
	));
	css_preload( array("bootstrap.min.css"));

	//set javascript to load asynchronously or synchronously
	define('ASYNC_JS', true);

	//Paypal Config Settings for Paypal REST API
	define('PAYMENT_PROFILE', 'SMF');

	define('PAYPAL_CLIENT_ID_SANDBOX', 'ATlcDn6Z8hhd8Ms6su3pD_qMUPIO_g4Gu5Uzeb6ASg29miD1ucPIiQZKBBRrsbzsoVbyP7YoFWEqmCfl');
	define('PAYPAL_SECRET_SANDBOX', 'EC6-j9aYRAm8GDi6X549hrMg3J9BLOg4dpeZyI9EEbj-qtsDwMdDf9yxvcJBVTo-eY1DUIPISahcw_kB');
	define('PAYPAL_CLIENT_ID', 'AYjrDyK2fv4p1w6AdcrugKXJXy_XpGB64LQ8zrevr5middC_5g9hePl--uuJzdqaFhmQm_CcU_9mbEfn');
	define('PAYPAL_SECRET', 'EF2SOupAQKbd4bSJHU2zhKnHElI4gwlimkQHFJlSJ1ImPBlVrD0-C3Ax1iNZxPL9D63WaAIgBlNUfdHy');

	define('SMF_PAYPAL_CLIENT_ID_SANDBOX', 'Aa6GHR06QcI8cM4UNrQuZitKTakEz2pBsFOfEGeoea1xZvDvgPMsxRHPPYZyEQmhCN7RrN32fQNLfP2u');
	define('SMF_PAYPAL_SECRET_SANDBOX', 'ENKl_bGPGwvWmIPgSuVbhoapzOS7bM-BxDDf_FYBnCE2LGj8j0fbVPKv68NTzu-RRqjSeOFq6hwLRca-');
	define('SMF_PAYPAL_CLIENT_ID', 'ATK_o2tiIk5smzCesbTJ3iGMXbt8wfrYUyoE273MgXJy5su7s7_yF3dlPooZe5RSPUMwAQyaZa8JjxyR');
	define('SMF_PAYPAL_SECRET', 'EJE5PEy-LhmqtGUDaYYLwM9rHwDxzvcET9rWAneluc42BJLs2jydzcQEvYwTqaJMdkqmUijM_Hv3ZzGV');

	//Member Settings
	define('MEMBER_PASSWORD_MIN', 8); //minimum password length for members
	define('MEMBER_PASSWORD_MAX', 16); //maximum password length for members

	//Institute Training Handout Options
	define('DAYS_AVAILABLE', 90);

	//Application Error Logging Settings for uncaught exceptions.
	define('APP_ERROR_LOGGING', true);
	define('APP_VERBOSE_LOGGING', true);
	define('AUTO_EMAIL_ERROR_NOTIFICATIONS', true);
	define('ADMIN_EMAIL', 'pstephens@cnoa.org');//Email where application error notifications are sent.
	define('APP_ERROR_EMAIL_SUBJECT', 'ALERT: Error logged at cnoa.org.');

	define('APP_EMAIL_ADDRESS', 'info@cnoa.org');
	define('MAX_IMAGE_SIZE', 2000000);

	define('NO_IMIS_UPDATE', false);
	define('IMIS_UPDATE', true);

	//Image icon classes for app
	define('MOVE_IMAGE_ICON', 'glyphicon glyphicon-share-alt');
	define('EDIT_IMAGE_ICON', 'glyphicon glyphicon-pencil');

	//Path to PayPal SDK config file
	define('PP_CONFIG_PATH', 'pluggins/vendor/paypal/rest-api-sdk-php');
?>