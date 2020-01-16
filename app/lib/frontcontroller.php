<?php

namespace PHPMVC\LIB;

class FrontController
{
    private $_controller = "index";
    private $_action = "default";
    private $_params = array();


    public function __construct()
    {
        $this->_parseUrl();
    }

    private function _parseUrl()
    {
        if(isset($_GET['path'])) {
            $url = explode('/', trim($_GET['path'], '/'), 3);
            if (isset($url[0]) && $url[0] != '')
                $this->_controller = $url[0];
            if (isset($url[1]) && $url[1] != '')
                $this->_action = $url[1];

            if (isset($url[2]) && $url[2] != '')
                $this->_params = explode('/', $url[2]);
        }
    }

    public function dispatch()
    {
        $controllerClassName =  'PHPMVC\Controllers\\'.ucfirst($this->_controller) . 'Controller';
        $actionName = $this->_action . 'Action';
        if(!class_exists($controllerClassName)) {
            $controllerClassName = 'PHPMVC\Controllers\\NotFoundController';
        }

        $controller = new $controllerClassName();
        if(!method_exists($controller, $actionName))
        {
            $actionName = 'notFoundAction';
        }

        $controller->$actionName();
    }
}