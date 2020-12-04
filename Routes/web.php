<?php
/**
 * Your routes here
 */

use MightyCore\Routing\Router;

$index = new Router('/');
$index->get('/', "HomeController@welcome")->name('home');