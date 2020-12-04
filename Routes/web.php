<?php
/**
 * Your routes here
 */

use MightyCore\Routing\Router;

$index = new Router('/');
$index->get('/', "HomeController@welcome")->name('home');
$index->get('/test/asd', "TestController@index")->name('index');