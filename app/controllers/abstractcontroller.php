<?php

namespace PHPMVC\Controllers;

use PHPMVC\LIB\FrontController;

class AbstractController {

    private $_controller;
    private $_action;
    private $_params;

    protected $_data = [];

    public function notFoundAction()
    {
        $this->_view();
    }

    public function setController($controller){
        $this->_controller = $controller;
    }

    public function setAction($action){
        $this->_action = $action;
    }

    public function setParams($params){
        $this->_params = $params;
    }

    public function _view()
    {
        if($this->_action == FrontController::NOT_FOUND_ACTION) {
            require_once VIEWS_PATH . 'notfound' . DS . 'notfound.view.php';
        } else {
            $view = VIEWS_PATH . $this->_controller . DS . $this->_action . '.view.php';
//            echo $view;
            if(file_exists($view)){
                extract($this->_data);
                require_once $view;
            }
            else
                require_once VIEWS_PATH . 'notfound' . DS . 'noview.view.php';
        }
    }
}
