<?php

namespace PHPMVC;

use PHPMVC\LIB\FrontController;
use PHPMVC\LIB\Language;
use PHPMVC\LIB\Template;

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

require_once '..' . DS . 'app' . DS . 'config' . DS . 'config.php';
require_once  '..' . DS . 'app' . DS . 'lib' . DS . 'autoload.php';
$template_parts = require_once '..' . DS . 'app' . DS . 'config' . DS . 'templateconfig.php';


session_start();
// Set langugage
if(!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = APP_DEFAULT_LANGUAGE;
}


// request we will use it
// domain/controller/action/params


// Inject Template object in Frontcontroller to avoid dependency injection problem
$template = new Template($template_parts);
// Inject Language object in FrontController
$language = new Language();

// Front Pattern Controller
$frontController = new FrontController($template, $language);
$frontController->dispatch();
