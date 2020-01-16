<?php

namespace PHPMVC;

use PHPMVC\LIB\FrontController;

if(!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

require_once '..' . DS . 'app' . DS . 'config.php';
require_once  '..' . DS . 'app' . DS . 'lib' . DS . 'autoload.php';


// request we will use it
// domain/controller/action/params

// Front Pattern Controller
$frontController = new FrontController();
$frontController->dispatch();