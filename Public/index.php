<?php
include_once __DIR__.'/../Configs/config.php';
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/mightyphp/mightycore/src/bootstrap/app.php';

if(env('ENV') == 'develop'){
    ini_set('display_errors','On');
    ini_set('html_errors',true);
    error_reporting(E_ALL);
}else if(env('ENV') == 'production'){
    //Do not display error for security reasons
    ini_set('display_errors','Off');
}

spl_autoload_register(function($class_name) {
    $file = CONTROLLER_PATH . '/' . $class_name . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});
spl_autoload_register(function($class_name) {
    $file = MODEL_PATH . '/' . $class_name . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});
spl_autoload_register(function($class_name) {
    $file = MIDDLEWARE_PATH . '/' . $class_name . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});
// Requests from the same server don't have a HTTP_ORIGIN header
if (!array_key_exists('HTTP_ORIGIN', $_SERVER)) {
    $_SERVER['HTTP_ORIGIN'] = $_SERVER['SERVER_NAME'];
}

foreach (glob( __DIR__."/../Routes/*.php") as $filename)
{
    include_once $filename;
}

try {
	$APP = new \MightyCore\APP($_REQUEST, $_SERVER);
	$APP->callAPP();
} catch (Exception $e) {
    echo json_encode(Array('error' => $e->getMessage()));
}
?>