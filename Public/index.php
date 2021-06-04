<?php
/**
 * Bootstraping the Application.
 */
require __DIR__ . '/../vendor/mightyphp/mightycore/src/bootstrap/app.php';


/**
 * Loading routes.
 */
foreach (glob( __DIR__."/../Routes/*.php") as $filename)
{
  include_once $filename;
}


/**
 * Starts the Application.
 */
try {
	$APP = new MightyCore\App($_REQUEST, $_SERVER);
	$APP->callAPP();
} catch (Exception $e) {
    echo json_encode(Array('error' => $e->getMessage()));
}