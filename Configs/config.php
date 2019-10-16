<?php
/**
 * Application Environment
 *  -Development (dev)
 *  -Production (prod)
 */
define("MIGHTY_MODE", "dev");
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

/**
 * Default Lang 
 */
define("DEFAULT_LANG","en");

/**
 * Security configs
 */
// How long should a session last in seconds
define("SECURITY_SESSION_TIMEOUT",1800);
/**
 * Database connection type
 *  - If in doubt, leave it as default
 */
/*DATABASE Connection can be of 'default' or 'ssh'*/
define("DATABASE_CONNECTION_TYPE", "default");


/**
 * Database Related
 */
define("DB_MODIFIED_DT_COL","modified_dt");
define("DB_CREATED_DT_COL","created_dt");