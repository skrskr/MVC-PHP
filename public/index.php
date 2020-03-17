<?php

namespace PHPMVC;

use PHPMVC\LIB\FrontController;
use PHPMVC\LIB\Template;

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

require_once '..' . DS . 'app' . DS . 'config' . DS . 'config.php';
require_once  '..' . DS . 'app' . DS . 'lib' . DS . 'autoload.php';
$template_parts = require_once '..' . DS . 'app' . DS . 'config' . DS . 'templateconfig.php';


session_start();

// request we will use it
// domain/controller/action/params


// Inject Template object in Frontcontroller to avoid dependency injection problem
$template = new Template($template_parts);

// Front Pattern Controller
$frontController = new FrontController($template);
$frontController->dispatch();
