<?php

return [
  /**
   * ----------------------------------------------------
   * SESSION CONFIG
   * ----------------------------------------------------
   * 
   */

   /**
     * Session driver, file or database
     */
    'driver' => env('SESSION_DRIVER', 'file'),

    /**
     * Database connection config
     */
    'database' => [
      'host' => env('SESSION_DATABASE_HOST', '127.0.0.1'),
      'port' => env('SESSION_DATABASE_PORT', '3306'),
      'table' => env('SESSION_DATABASE_TABLE', 'sessions'),
      'schema' => env('SESSION_DATABASE_SCHEMA', null),
      'user' => env('SESSION_DATABASE_USER', null),
      'password' => env('SESSION_DATABASE_PASSWORD', null)
    ],

    /**
     * The cookie name to store session ID
     */
    'cookie' => env('SESSION_COOKIE', 'PHPSESSID')
];