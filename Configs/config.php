<?php

/**
 * Document Root 
 */
define("DOC_ROOT", __DIR__.'/../');

/**
 * Default Root Path of the application
 * -useful for link generation
 */
define("ROOT_PATH", "/");
/**
 * File Paths
 * 
 * Paths for all the main modules of MightyPHP
 */
 //Controller Path
define("CONTROLLER_PATH", __DIR__.'/../Application/Controllers');
//Model Path
define("MODEL_PATH", __DIR__.'/../Application/Models');
//View Path
define("VIEW_PATH", __DIR__.'/../Application/Views');
//Middleware Path
define("MIDDLEWARE_PATH",__DIR__.'/../Middlewares');
/*Service path, best to be a child of Controllers*/
define("SERVICE_PATH",__DIR__.'/../Application/Controllers/Services');
/*Template path, best to be a child of Views*/
define("TEMPLATE_PATH",__DIR__.'/../Application/Views/Templates');
/*Configs Path*/
define("CONFIG_PATH",__DIR__.'/../Configs');
/*Utilities Path*/
define("UTILITY_PATH",__DIR__.'/../Utilities');
/*Log Path */
define("LOG_PATH",__DIR__.'/../Application/Logs');

/**
 * Default Lang 
 */
define("DEFAULT_LANG","en");

/**
 * Security configs
 */
// How long should a session last in seconds
define("SECURITY_SESSION_TIMEOUT",1800);