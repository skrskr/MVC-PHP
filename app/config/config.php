<?php

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

define('APP_PATH', dirname(realpath(__FILE__)) . DS . '..');
define('VIEWS_PATH', APP_PATH . DS . 'views' . DS);
define('TEMPLATE_PATH', APP_PATH . DS . 'template' . DS);
define('LANGAUGE_PATH', APP_PATH . DS . 'languages' . DS);

define('CSS', '/css/');
define('JS', '/js/');


/* Database */
defined('DATABASE_HOST_NAME')       ? null : define('DATABASE_HOST_NAME', 'localhost');
defined('DATABASE_USER_NAME')       ? null : define('DATABASE_USER_NAME', 'root');
defined('DATABASE_PASSWORD')        ? null : define('DATABASE_PASSWORD', '');
defined('DATABASE_DB_NAME')         ? null : define('DATABASE_DB_NAME', 'php_mvc');
defined('DATABASE_PORT_NUMBER')     ? null : define('DATABASE_PORT_NUMBER', 3306);
defined('DATABASE_CONN_DRIVER')     ? null : define('DATABASE_CONN_DRIVER', 1);

defined('APP_DEFAULT_LANGUAGE')     ? null : define('APP_DEFAULT_LANGUAGE', 'en');
