<?php

return [
  /**
   * ----------------------------------------------------
   * DATABASE CONFIG
   * ----------------------------------------------------
   * 
   */

  'default' => [
    'host' => env('DATABASE_HOST', '127.0.0.1'),
    'port' => env('DATABASE_PORT', '3306'),
    'password' => env('DATABASE_PASSWORD', null),
    'user' => env('DATABASE_USER', null),
    'schema' => env('DATABASE_SCHEMA', null)
  ],

  /**
   * For the use of paginate() method
   * Number of default records per page to return
   */
  'perPage' => env('DATABASE_PER_PAGE', 10)
];