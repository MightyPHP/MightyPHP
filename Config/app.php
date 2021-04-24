<?php

return [
  /**
   * ----------------------------------------------------
   * APPLICATION CONFIG
   * ----------------------------------------------------
   * 
   */
  /**
   * The environment of the application
   */
  'env' => env('APP_ENV', 'production'),
  /**
   * The log level of the application
   */
  'log_level' => env('LOG_LEVEL', 'debug'),

  /**
   * ----------------------------------------------------
   * LOCALIZATION CONFIG
   * ----------------------------------------------------
   * 
   */
  'localization' => [
    'default_language' => env('DEFAULT_LANGUAGE', 'en'),

    /**
     * The cookie name to store language ID
     */
    'language_cookie' => env('LANGUAGE_COOKIE', '_LANG')
  ],
];